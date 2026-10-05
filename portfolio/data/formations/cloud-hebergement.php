<?php
// ============================================================
// data/formations/cloud-hebergement.php · Fiche formation
// « Cloud et hébergement pour décideurs » (vague 1B, lot B, domaine cybersecurite-it).
// Angle propre : choisir un hébergement ou un cloud (mutualisé, VPS, cloud
// public, SaaS), chiffrer le coût complet sur trois ans, savoir où vivent les
// données, lire les engagements de disponibilité, préparer la sortie. Les
// sauvegardes et la réponse à incident relèvent de securite-donnees-dirigeants ;
// l'entretien technique des outils, du pilier maintenance-support.
// Faits relevés le 05/10/2026 : pages tarifaires de Hostinger (prix hors TVA),
// OVHcloud (HT et TTC, catalogue public des VPS), AWS Lightsail (tarifs, FAQ,
// régions), liste des régions AWS, Odoo (tarifs repris des faits vérifiés),
// règlement (UE) 2023/2854 sur EUR-Lex (articles 25, 29, 31, 50), Commission
// européenne (Data Act), Parlement européen (omnibus numérique, mise à jour du
// 20/09/2026), CNIL (transferts hors UE), loi n° 2017-20 (articles 391 et 392),
// BCEAO (cours du 02/10/2026), FDFP, FODEFCA, 3FPT, France Compétences.
// Le site richardsalanon.com est hébergé chez Hostinger (mentions légales).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation cloud et hébergement pour décideurs : comparer les offres, chiffrer le coût sur trois ans, savoir où vivent vos données et garder la liberté de partir',
    'title'   => 'Formation : choisir cloud et hébergement | Richard SALANON',
    'meta'    => 'Formation pour décideurs : comparer mutualisé, VPS, cloud et SaaS, chiffrer le coût sur trois ans, localiser ses données, préparer la sortie. Sur devis.',
    'en_bref' => 'Cette formation apprend aux dirigeants, responsables informatiques et acheteurs à choisir entre un hébergement mutualisé, un serveur virtuel, un cloud public et un logiciel en ligne, en lisant les pages de tarifs et les contrats comme un fournisseur les écrit. Elle dure une journée, complétée au besoin par une demi-journée d\'atelier sur les contrats de l\'entreprise, en intra, en inter, à distance ou en formule hybride. Les participants repartent avec le coût réel de leurs services sur trois ans, la carte de leurs données et une liste de questions de sortie à poser avant de signer. Le prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'cybersecurite-it',
    'forte'   => false,
    'duree'   => 'Une journée, plus une demi-journée facultative d\'atelier sur vos contrats',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : les quatre familles d\'hébergement et ce qu\'elles coûtent vraiment',
            'duree'  => '3 h 30',
            'points' => [
                'Tour de table : les services en ligne de chacun, qui les paie, avec quelle carte, et au nom de qui le compte est ouvert.',
                'Mutualisé, serveur privé virtuel (VPS), cloud public, logiciel en ligne (SaaS) : ce que l\'on loue, ce que l\'on administre soi-même, ce que l\'on ne contrôle plus.',
                'Lire une page de tarifs : prix d\'appel, durée payée d\'avance, prix de renouvellement, montant hors taxes ou toutes taxes comprises, devise de facturation.',
                'Les lignes absentes du prix mensuel : nom de domaine après la première année, boîtes mail, sauvegardes avancées, instantanés, dépassement de trafic, licences.',
                'Le coût que personne ne facture : le temps d\'administration d\'un serveur virtuel, et la personne qui l\'assume.',
                'Exercice : recalculer sur 36 mois, en euros puis en francs CFA, trois offres relevées le jour même sur les sites des fournisseurs.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : localisation des données, disponibilité, latence et sortie',
            'duree'  => '3 h 30',
            'points' => [
                'Où tournent physiquement les serveurs : régions des fournisseurs, réseau de diffusion de contenu (CDN), et ce que le contrat en dit.',
                'Loi n° 2017-20 au Bénin : transfert de données personnelles vers un État tiers, autorisation préalable de l\'Autorité, cas d\'exception.',
                'RGPD : transferts hors de l\'Union européenne, décisions d\'adéquation, clauses contractuelles types, dérogations.',
                'Disponibilité : engagement de niveau de service, disponibilité « observée », minutes d\'arrêt tolérées par mois, ce que l\'on obtient si l\'engagement n\'est pas tenu.',
                'Latence : la mesurer depuis ses bureaux et depuis un téléphone en 4G, plutôt que de se fier à une carte.',
                'Réversibilité : export des données, formats, délais, frais, et ce que change le règlement européen sur les données à partir du 12 janvier 2027.',
                'Exercice : remplir la grille de décision pour un service réel de l\'entreprise, du besoin jusqu\'au plan de sortie.',
            ],
        ],
        [
            'titre'  => 'Demi-journée facultative : atelier sur vos contrats et votre future consultation',
            'duree'  => '3 h 30',
            'points' => [
                'Inventaire complet des abonnements de l\'organisation à partir des factures apportées par les participants.',
                'Lecture commentée des conditions de service en cours : durée, reconduction tacite, préavis, export, effacement des données.',
                'Calendrier des échéances : date de renouvellement, date limite de préavis, titulaire de chaque compte, moyen de paiement rattaché.',
                'Rédaction de la partie « exploitation et sortie » d\'un cahier des charges ou d\'une consultation de fournisseurs.',
                'Préparation du tableau qui recevra les réponses des fournisseurs consultés, pour les comparer ligne à ligne.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => 'Une journée, plus une demi-journée facultative sur vos contrats'],
        ['l' => 'Public', 'v' => 'Dirigeants, responsables informatiques, acheteurs, porteurs d\'un projet de site ou d\'ERP'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous décider à la fin de la formation, et que ne couvre-t-elle pas ?',
            'paragraphes' => [
                'Choisir où héberger un site, une boutique, un ERP ou une messagerie ressemble à un achat technique. C\'est en réalité un engagement de direction : il fixe pour plusieurs années un budget, un pays où vivent les données, un niveau de service et la difficulté de changer d\'avis. Beaucoup d\'entreprises le découvrent au premier renouvellement, quand la facture triple, ou le jour où elles veulent partir et ne savent pas récupérer leurs fichiers. Cette formation donne aux décideurs de quoi trancher avant de signer, sans devenir administrateurs de serveurs.',
                'À la fin de la journée, chaque participant sait faire six choses, contrôlées sur les documents de son entreprise : ranger chacun de ses services dans l\'une des quatre familles d\'hébergement ; recalculer sur 36 mois le coût d\'une offre à partir de sa page de tarifs, renouvellement, options, taxes et change compris ; dire dans quel pays sont stockées ses données et quelle règle encadre leur transfert ; traduire un taux de disponibilité en minutes d\'arrêt possibles ; mesurer la latence réelle depuis ses bureaux ; rédiger les questions de sortie à poser à un fournisseur avant la signature.',
                'La formation ne traite pas la politique de sauvegarde ni la conduite d\'un incident : ces décisions sont l\'objet d\'une autre formation du domaine, consacrée à la sécurité des données pour les dirigeants. Elle n\'apprend pas non plus à installer, sécuriser ou migrer un serveur ; ce travail relève d\'une prestation technique, comme la <a href="/services/maintenance-support">maintenance et le support</a> ou une <a href="/services/refonte-migration-de-site">refonte avec migration de site</a>. Elle ne désigne pas de fournisseur gagnant : elle donne une méthode pour que le choix vous appartienne, chiffres en main.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quel niveau, et que faut-il apporter ?',
            'intro' => 'Le public est celui qui signe, qui compare ou qui devra vivre avec le choix. Aucun bagage technique n\'est demandé : les notions sont expliquées à partir des factures et des écrans des participants.',
            'items' => [
                ['titre' => 'Dirigeants et associés', 'texte' => 'Ils engagent la dépense et la responsabilité des données. La journée leur donne les quelques chiffres et les quelques clauses à exiger, sans entrer dans la configuration des machines.'],
                ['titre' => 'Responsables informatiques et référents techniques', 'texte' => 'Ils comparent les offres et préparent les migrations. Ils repartent avec une grille commune à présenter à la direction, ce qui évite les débats où chacun défend son fournisseur préféré.'],
                ['titre' => 'Acheteurs et directeurs administratifs et financiers', 'texte' => 'Ils voient passer les factures en euros ou en dollars, les reconductions tacites et les cartes bancaires rattachées aux comptes. L\'exercice de coût sur trois ans s\'appuie sur leur comptabilité.'],
                ['titre' => 'Porteurs d\'un projet de site, de boutique ou d\'ERP', 'texte' => 'Le choix d\'hébergement se fait souvent trop tard, au moment de la mise en ligne. Suivie avant la consultation des prestataires, la formation permet d\'inscrire les exigences d\'exploitation dans le cahier des charges.'],
                ['titre' => 'Niveau requis', 'texte' => 'Savoir lire une facture et naviguer sur un site marchand suffit. Un court questionnaire envoyé avant la session recense les services utilisés et les contrats en cours, pour adapter les exemples.'],
                ['titre' => 'Documents à apporter', 'texte' => 'Les factures des douze derniers mois pour l\'hébergement, les noms de domaine, la messagerie et les logiciels en ligne, les contrats ou conditions acceptées en ligne, et un accès en lecture aux espaces clients. Aucun mot de passe n\'est demandé ni affiché.'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Mutualisé, VPS, cloud public ou logiciel en ligne : qu\'achète-t-on vraiment ?',
            'options'  => ['Hébergement mutualisé', 'Serveur privé virtuel (VPS)', 'Cloud public', 'Logiciel en ligne (SaaS)'],
            'criteres' => [
                ['critere' => 'Ce que vous louez', 'valeurs' => ['Une part d\'un serveur partagé avec d\'autres clients, préconfiguré pour des sites web', 'Une machine virtuelle avec ses propres processeurs, mémoire et disque', 'Des ressources à la demande : machines, stockage, bases de données, réseau', 'L\'usage d\'une application prête à l\'emploi, par utilisateur ou par volume']],
                ['critere' => 'Qui administre le système', 'valeurs' => ['L\'hébergeur', 'Vous ou votre prestataire : mises à jour, pare-feu, surveillance', 'Vous ou votre prestataire, avec des services gérés en option', 'L\'éditeur']],
                ['critere' => 'Compétence nécessaire chez vous', 'valeurs' => ['Faible', 'Réelle, ou un contrat de maintenance', 'Élevée pour concevoir et maîtriser la facture', 'Faible côté technique, forte côté paramétrage et droits']],
                ['critere' => 'Mode de facturation courant', 'valeurs' => ['Pack payé d\'avance sur une ou plusieurs années, prix de renouvellement plus élevé', 'Mensuel sans engagement ou remise contre un engagement de 6 à 24 mois', 'À l\'heure ou à l\'usage, parfois avec plafond mensuel', 'Par utilisateur et par mois, remise en paiement annuel']],
                ['critere' => 'Ce qui se complique au départ', 'valeurs' => ['Peu de chose si le site est standard : fichiers et base de données s\'exportent', 'Rien n\'est prévu par défaut : il faut copier soi-même le système et les données', 'Les services propres au fournisseur n\'ont pas toujours d\'équivalent ailleurs', 'Le format d\'export et les paramétrages, souvent impossibles à transporter']],
                ['critere' => 'Usage typique en PME', 'valeurs' => ['Site vitrine, petit site WordPress, messagerie liée au domaine', 'Application métier, plusieurs sites, outil comme n8n ou Odoo auto-hébergé', 'Application à forte charge ou à architecture répartie', 'Comptabilité, ERP, CRM, suite bureautique, outils collaboratifs']],
            ],
            'verdict'  => 'Pour une petite structure, la question n\'est pas de choisir la technologie la plus moderne, mais de savoir qui fera le travail d\'administration. Sans personne pour tenir un serveur à jour, un VPS bon marché devient l\'option la plus risquée ; un mutualisé ou un logiciel en ligne, bien choisis et avec une sortie prévue, couvrent la plupart des besoins.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi le prix mensuel affiché ne suffit-il jamais à comparer deux offres ?',
            'paragraphes' => [
                'Les pages de tarifs sont construites pour afficher le chiffre le plus bas possible. Le montant mis en avant est souvent un prix mensuel calculé sur un pack payé d\'avance pour plusieurs années, valable seulement pour la première période. Hostinger l\'écrit lui-même sur sa page d\'hébergement web consultée le 5 octobre 2026 : tous les packs sont payés d\'avance, et le tarif mensuel correspond au prix total du pack divisé par le nombre de mois inclus. Comparer ce chiffre au prix mensuel sans engagement d\'un autre fournisseur, c\'est comparer deux choses différentes.',
                'Viennent ensuite les éléments offerts « la première année » : nom de domaine, boîtes mail, certificats ou options. Ils réapparaissent sur la facture du treizième mois. La taxe change aussi la donne : certaines pages affichent des prix hors TVA, d\'autres les deux montants, d\'autres ne précisent rien. Pour une entreprise installée au Bénin ou en Côte d\'Ivoire, s\'ajoutent la devise de facturation, le taux de change et les frais bancaires d\'un paiement international. La formation apprend à ramener toutes les offres à une seule unité : le coût total sur 36 mois, en francs CFA.',
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices fait-on sur vos factures, vos contrats et vos services ?',
            'items' => [
                ['titre' => 'La carte des services', 'duree' => '30 minutes', 'texte' => 'Chaque participant liste les services en ligne de son organisation : site, messagerie, nom de domaine, logiciel de gestion, stockage de fichiers, outils de paiement. Pour chacun, il note la famille d\'hébergement, le titulaire du compte, le moyen de paiement et la date du prochain renouvellement. Les trous apparaissent vite.'],
                ['titre' => 'La lecture d\'une page de tarifs', 'duree' => '25 minutes', 'texte' => 'Sur la page officielle d\'un fournisseur ouverte en séance, le groupe repère le prix d\'appel, la durée payée d\'avance, le prix de renouvellement, la mention hors taxes ou toutes taxes comprises et les éléments offerts la première année seulement.'],
                ['titre' => 'Le coût sur 36 mois', 'duree' => '45 minutes', 'texte' => 'Dans le tableur remis, chacun reconstitue le coût de trois offres sur trois ans, puis le convertit en francs CFA au cours de référence de la BCEAO. Le même calcul est refait sur une facture réelle de l\'entreprise.'],
                ['titre' => 'La carte des données', 'duree' => '30 minutes', 'texte' => 'Pour deux services choisis, on retrouve le pays ou la région où les données sont stockées, dans l\'espace client ou dans la documentation du fournisseur, puis la règle qui s\'applique : loi n° 2017-20, RGPD ou les deux.'],
                ['titre' => 'La mesure de latence', 'duree' => '25 minutes', 'texte' => 'Depuis la salle, puis depuis un téléphone en 4G, les participants mesurent le temps de réponse de serveurs de test situés dans différentes régions et le temps de chargement complet de leur propre site. Les écarts entre régions se constatent au lieu de se supposer.'],
                ['titre' => 'Le test de sortie', 'duree' => '30 minutes', 'texte' => 'Sur un service de l\'entreprise, on cherche comment exporter ses données : menu concerné, format obtenu, délai, frais éventuels. Si l\'export n\'existe pas ou reste incomplet, la réponse est notée dans la grille comme un risque à traiter.'],
                ['titre' => 'La grille de décision', 'duree' => '35 minutes', 'texte' => 'Pour un projet réel, site, ERP ou messagerie, le groupe remplit la grille finale : besoin, famille retenue, coût sur 36 mois, localisation, engagement de disponibilité, latence mesurée, conditions de sortie. Elle sert ensuite de support de décision en comité de direction.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que coûtent les offres d\'entrée de gamme, selon les pages officielles des fournisseurs ?',
            'legende' => 'Prix relevés le 5 octobre 2026 sur les pages officielles de Hostinger (prix hors TVA), d\'OVHcloud (HT et TTC, catalogue public des VPS), d\'AWS Lightsail et d\'Odoo. Ils servent d\'exercice de lecture, pas de recommandation : les fournisseurs changent leurs offres et leurs promotions sans préavis.',
            'entetes' => ['Offre', 'Prix affiché et durée', 'Taxe', 'Ce que le prix ne dit pas'],
            'lignes'  => [
                ['Hostinger, hébergement web Premium (mutualisé)', '2,99 € par mois sur un pack de 48 mois payé d\'avance, soit 143,52 € ; renouvellement à 9,99 € par mois', 'Hors TVA, mention « les prix n\'incluent pas la TVA »', 'Nom de domaine offert un an ; deux boîtes mail par site gratuites un an, puis 0,59 € par mois et par boîte, avec engagement de 12 mois ; sauvegardes hebdomadaires sur cette formule'],
                ['OVHcloud, hébergement web Perso (mutualisé)', '2,99 € par mois la première année, soit 35,88 € pour 12 mois ; renouvellement à 5,99 € par mois', 'HT, soit 3,59 € TTC avec la TVA française', 'Domaine offert la première année ; dix adresses e-mail incluses ; la page parle de disponibilité « observée » de 99,9 %, pas d\'un engagement'],
                ['Hostinger, VPS KVM 1', '5,49 € par mois, pack payé d\'avance ; renouvellement à 11,99 € par mois pour deux ans', 'Hors TVA', 'Un cœur virtuel, 4 Go de mémoire, 50 Go de disque ; sauvegardes hebdomadaires ; l\'administration du système reste à votre charge'],
                ['OVHcloud, VPS-1', '3,81 € par mois avec 12 mois payés d\'avance ; 4,26 € sur 6 mois ; 4,49 € par mois sans engagement', 'HT, soit 4,57 € TTC pour l\'offre à 12 mois', 'Deux cœurs virtuels, 4 Go de mémoire, 40 Go de disque, sauvegarde quotidienne ; ni nom de domaine ni messagerie inclus ; engagement de disponibilité de 99,9 %'],
                ['AWS Lightsail, instance Linux de 7 dollars', '7 USD par mois, facturés à l\'heure, sans engagement, plafonnés au prix mensuel', 'La page ne mentionne pas de taxe', 'Prix en dollars, donc soumis au change ; 2 To de trafic sortant inclus, dépassement facturé ; instantanés de sauvegarde à 0,05 USD par Go et par mois'],
                ['Odoo, offre Standard (logiciel en ligne)', '19,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 24,90 € ; en mensuel 24,90 € puis 31,10 €', 'La page ne précise pas hors taxes ou toutes taxes comprises : à lire sur le devis', 'Hébergement Odoo Online compris, jusqu\'à 100 Go ; la remise ne vaut que pour les utilisateurs de la commande initiale ; l\'offre Standard est liée à Odoo Online'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment calculer le coût complet sur trois ans, exemple chiffré à l\'appui ?',
            'paragraphes' => [
                'Prenons un site vitrine avec deux boîtes mail, et deux offres mutualisées relevées le 5 octobre 2026. Chez OVHcloud, la formule Perso coûte 35,88 € HT la première année, puis 5,99 € HT par mois pendant les 24 mois suivants, soit 143,76 € : 179,64 € HT sur trois ans, dix adresses comprises. Chez Hostinger, le pack Premium de 48 mois coûte 143,52 € hors TVA, payés le premier jour ; les deux boîtes mail, gratuites la première année, ajoutent 0,59 € par mois chacune pendant 24 mois, soit 28,32 €. Total : 171,84 € hors TVA, avec une quatrième année déjà payée.',
                'Au cours de référence publié par la BCEAO pour le 2 octobre 2026, 655,957 francs CFA pour un euro, cela représente environ 117 800 FCFA pour la première offre et 112 700 FCFA pour la seconde, avant taxes, frais bancaires et renouvellement du nom de domaine à partir de la deuxième année. L\'écart est faible ; ce qui distingue vraiment les deux offres, c\'est la trésorerie mobilisée le premier jour et ce qui se passe ensuite. Au 49e mois, le Premium de Hostinger passe à 9,99 € hors TVA par mois, soit 119,88 € par an : plus de trois fois le coût annuel moyen des quatre premières années.',
                'Le calcul change d\'échelle avec un logiciel en ligne. Pour cinq utilisateurs d\'Odoo Standard en paiement annuel, la première année coûte 1 194 €, puis 1 494 € pour chacune des deux suivantes : 4 182 € sur trois ans, soit environ 2 743 000 FCFA, sans hébergement à gérer. Pour un serveur virtuel, le prix de la machine est presque secondaire : le VPS-1 d\'OVHcloud revient à 137,16 € HT sur trois ans avec des engagements annuels, mais les heures passées à le mettre à jour, à le surveiller et à le réparer, en interne ou chez un prestataire, dépassent vite ce montant. Ce coût invisible entre dans la grille.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Dans quels pays vos données peuvent-elles être stockées, selon les fournisseurs ?',
            'legende' => 'Emplacements publiés par les fournisseurs et consultés le 5 octobre 2026. Ils évoluent : la liste qui fait foi est celle de l\'espace client au moment de la commande, et l\'emplacement choisi doit figurer dans votre inventaire.',
            'entetes' => ['Fournisseur et offre', 'Emplacements publiés', 'Afrique', 'Point d\'attention'],
            'lignes'  => [
                ['Hostinger, hébergement web et cloud', 'France, Allemagne, Lituanie, Pays-Bas, Royaume-Uni ; Inde, Indonésie, Malaisie ; États-Unis ; Brésil', 'Aucun centre de données ; le CDN de Hostinger dispose d\'emplacements supplémentaires, dont Johannesburg', 'L\'emplacement se choisit à la commande ; un changement ultérieur peut empêcher de revenir au choix initial'],
                ['Hostinger, VPS', 'France, Allemagne, Lituanie, Royaume-Uni ; Inde, Indonésie, Malaisie ; États-Unis ; Brésil', 'Aucun', 'L\'emplacement d\'un VPS est figé après l\'installation : en changer impose de sauvegarder puis de réinstaller'],
                ['OVHcloud, VPS', 'Centres de données en Europe, au Canada et en Asie-Pacifique, plus des Local Zones européennes', 'Aucun dans le catalogue public des VPS', 'Pas de migration directe entre une Local Zone et un centre de données : nouveau VPS, transfert, puis résiliation'],
                ['AWS Lightsail', '19 régions : États-Unis, Canada, Europe, Asie-Pacifique, Brésil', 'Aucune région Lightsail en Afrique', 'Les transferts entre régions passent par l\'internet public et sont facturés'],
                ['AWS, services hors Lightsail', '34 régions, dont Afrique (Le Cap)', 'Région af-south-1, à activer explicitement dans le compte', 'Une région proche sur la carte n\'est pas forcément la plus rapide depuis l\'Afrique de l\'Ouest : il faut mesurer'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que disent la loi n° 2017-20 et le RGPD quand vos données partent à l\'étranger ?',
            'paragraphes' => [
                'Aucun des fournisseurs ci-dessus ne propose de centre de données au Bénin, ni même en Afrique de l\'Ouest. Héberger le fichier clients d\'une entreprise béninoise en France, en Allemagne ou aux États-Unis revient donc, le plus souvent, à transférer des données personnelles hors du pays. Le <a href="https://sgg.gouv.bj/doc/loi-2017-20/">code du numérique, loi n° 2017-20</a>, encadre ce geste à son article 391 : le transfert vers un État tiers n\'est possible que si l\'Autorité de protection constate un niveau de protection équivalent, et le responsable du traitement doit obtenir l\'autorisation préalable de l\'Autorité avant tout transfert effectif.',
                'L\'article 392 prévoit des exceptions quand le pays de destination n\'offre pas de protection adéquate : consentement exprès de la personne, exécution d\'un contrat conclu avec elle ou dans son intérêt, sauvegarde d\'un intérêt public important ou d\'un droit en justice, notamment. Le conseil des ministres peut aussi autoriser un transfert par décret, après avis conforme de l\'Autorité, si le responsable apporte des garanties suffisantes. La formation ne remplace pas un conseil juridique ; elle apprend à poser la question au bon moment, avant de choisir la région, et à garder la trace de la réponse.',
                'Pour une entreprise installée dans l\'Union européenne, le raisonnement est symétrique. La CNIL rappelle que le transfert de données hors de l\'Union et de l\'Espace économique européen est possible à condition d\'assurer un niveau de protection suffisant et approprié, par une décision d\'adéquation de la Commission européenne, des clauses contractuelles types, des règles d\'entreprise contraignantes ou, dans des cas particuliers, les dérogations de l\'article 49 du RGPD. Une société française qui confie sa gestion à un prestataire hébergé hors de l\'Union doit donc vérifier ce cadre, et l\'écrire dans le contrat.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment juger la latence depuis Cotonou, Abidjan ou Dakar sans se fier à la carte ?',
            'paragraphes' => [
                'La latence est le temps qu\'un paquet de données met pour faire l\'aller-retour entre l\'utilisateur et le serveur. Pour un site vitrine consulté quelques secondes, elle compte peu ; pour un ERP où un comptable enchaîne des centaines d\'écrans par jour, ou pour une caisse connectée, elle se ressent à chaque clic. Le réflexe courant consiste à choisir la région la plus proche sur la carte. Or le trajet réel dépend des câbles sous-marins et des accords entre opérateurs, pas de la distance à vol d\'oiseau : une région située en Afrique australe peut se révéler plus lente, depuis le golfe de Guinée, qu\'un centre de données européen.',
                'La seule réponse fiable vient de la mesure. Pendant la formation, les participants lancent des tests de temps de réponse vers des adresses de test fournies par les hébergeurs, depuis la connexion du bureau puis depuis un téléphone en 4G, à plusieurs moments de la journée. Ils mesurent aussi le temps de chargement complet de leur site actuel avec les outils de développement du navigateur. Les résultats, notés dans la grille, valent pour leur ville et leur opérateur, ce qu\'aucune brochure ne peut dire. Un réseau de diffusion de contenu, comme celui que Hostinger annonce avec un emplacement à Johannesburg, réduit le temps d\'affichage des images et des fichiers statiques, pas celui des opérations sur une base de données.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que valent les engagements de disponibilité affichés par les fournisseurs ?',
            'legende' => 'Mentions relevées le 5 octobre 2026 et conversion en durée d\'arrêt possible. Le calcul porte sur un mois de 30 jours, soit 43 200 minutes, et sur une année de 365 jours.',
            'entetes' => ['Mention affichée', 'Où elle figure', 'Ce qu\'elle signifie', 'Arrêt possible'],
            'lignes'  => [
                ['Engagement de niveau de service (SLA) de 99,9 %', 'Page des VPS d\'OVHcloud', 'Un engagement contractuel : à vérifier dans les conditions, notamment la compensation prévue en cas de manquement', '43 minutes 12 secondes par mois, environ 8 heures 46 minutes par an'],
                ['Disponibilité observée de 99,9 %', 'Page de l\'hébergement web d\'OVHcloud', 'Un constat sur le passé, pas une promesse pour l\'avenir', 'Aucun plafond garanti'],
                ['Aucun taux affiché', 'Page de l\'hébergement web de Hostinger consultée le 5 octobre 2026', 'L\'engagement éventuel se cherche dans les conditions de service', 'À établir avant la signature'],
                ['Stockage « conçu pour » 99,99 % de disponibilité', 'FAQ de Lightsail, qui précise ne pas garantir de SLA pour ce stockage', 'Un objectif de conception, sans engagement contractuel', 'L\'objectif équivaut à 4 minutes 19 secondes par mois'],
                ['Engagement de 99,95 %, si un contrat le prévoit', 'Exemple de calcul', 'Moitié moins d\'arrêt toléré qu\'à 99,9 %', '21 minutes 36 secondes par mois'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment préparer la sortie avant même de signer, et que change le Data Act ?',
            'paragraphes' => [
                'La réversibilité se négocie à l\'entrée, jamais à la sortie. Une fois les données installées et les équipes habituées, le fournisseur n\'a plus de raison de faciliter un départ. Avant de signer, il faut donc savoir quelles données s\'exportent, dans quel format lisible ailleurs, en combien de temps, à quel prix, et ce qui devient impossible à transporter : paramétrages, automatismes, historiques. OVHcloud l\'écrit dans la foire aux questions de ses VPS : il n\'existe pas de migration directe entre une Local Zone et un centre de données, il faut souscrire un nouveau VPS, transférer ses données puis résilier l\'ancien. C\'est le schéma de presque toutes les sorties.',
                'Dans l\'Union européenne, le <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32023R2854">règlement (UE) 2023/2854 sur les données</a>, applicable depuis le 12 septembre 2025, impose aux fournisseurs de services de traitement de données un contrat écrit qui organise le changement de fournisseur. Son article 25 exige notamment un préavis maximal de deux mois pour lancer le changement, une période transitoire de trente jours calendaires au plus, pendant laquelle le service continue, une période d\'au moins trente jours pour récupérer les données, puis l\'effacement complet des données exportables. Si la transition est techniquement impossible dans ce délai, le fournisseur doit le justifier sous quatorze jours ouvrables et proposer une autre période, de sept mois au plus.',
                'L\'article 29 organise la fin des frais de changement. Du 11 janvier 2024 au 12 janvier 2027, le fournisseur peut encore facturer des frais réduits, qui ne dépassent pas ses coûts directement liés au changement ; à compter du 12 janvier 2027, il ne peut plus en imposer aucun. La Commission européenne précise, sur sa page consacrée au règlement, que cette suppression couvre aussi les frais de sortie des données. L\'article 31 écarte certaines de ces obligations pour les services conçus sur mesure pour un client et non proposés à grande échelle, ainsi que pour les versions d\'essai.',
                'Deux réserves s\'imposent. D\'abord, le texte peut encore bouger : la proposition d\'omnibus numérique déposée par la Commission le 19 novembre 2025 prévoit des exemptions ciblées à certaines règles de changement de fournisseur pour les petites entreprises ; selon le Parlement européen, au 20 septembre 2026, elle restait en négociation, le vote du mandat du Conseil prévu le 26 juin ayant été annulé. Ensuite, une entreprise installée à Cotonou ou à Dakar ne doit pas tenir pour acquis qu\'elle peut invoquer ce règlement : les mêmes garanties se demandent alors noir sur blanc dans le contrat.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelles questions poser à un hébergeur ou à un éditeur avant de signer ?',
            'items' => [
                'Quel est le coût total sur 36 mois, renouvellements, options et taxes compris, et dans quelle devise serai-je facturé ?',
                'Quels éléments ne sont offerts que la première année, et à quel prix seront-ils facturés ensuite ?',
                'Dans quel pays, et dans quel centre de données, mes données seront-elles stockées, et puis-je imposer cet emplacement ?',
                'Quel engagement de disponibilité figure au contrat, comment est-il mesuré, et que se passe-t-il s\'il n\'est pas tenu ?',
                'Qui administre le système, applique les mises à jour et surveille le service, et qu\'est-ce qui reste à ma charge ?',
                'Comment exporter toutes mes données, dans quel format, en combien de temps et pour quels frais ?',
                'Quel préavis dois-je respecter pour partir, et la reconduction est-elle tacite ?',
                'Pendant combien de temps mes données restent-elles accessibles après la résiliation, et comment leur effacement est-il confirmé ?',
                'Le compte, le nom de domaine et le moyen de paiement seront-ils au nom de l\'entreprise, et non d\'un salarié ou d\'un prestataire ?',
                'Quels moyens de paiement sont acceptés depuis mon pays, et que devient le service si un prélèvement échoue ?',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que retenir de l\'histoire de TSB pour un changement d\'hébergement ?',
            'paragraphes' => [
                'L\'histoire de <a href="/histoires/tsb-migration">TSB</a>, banque britannique qui a basculé ses clients vers une nouvelle plateforme informatique en 2018, est racontée en détail sur ce site. Pour un décideur qui change d\'hébergeur, elle tient en une question : que fait-on si la nouvelle installation ne fonctionne pas le lundi matin ? Une PME n\'a pas la taille d\'une banque, mais le mécanisme est le même. Une migration réussie garde l\'ancien service en état de marche jusqu\'à la validation du nouveau, prévoit une date de retour arrière, et ne résilie le contrat précédent qu\'après une période d\'observation.',
                'C\'est l\'un des intérêts de la période transitoire prévue par le règlement européen : elle laisse le temps de vérifier le nouveau service avant de perdre l\'ancien. Hors de l\'Union, ce délai se négocie. Dans la formation, l\'exercice de sortie se termine par un mini-plan de bascule : ordre des opérations, personne qui valide, critère de retour arrière, date de résiliation. Il tient sur une page et évite la tentation de tout changer en un week-end.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation se déroule-t-elle, concrètement ?',
            'intro' => 'Le principe est simple : aucune notion n\'est présentée sans être appliquée, dans l\'heure, à un service réel de l\'entreprise ou à une page officielle ouverte en séance.',
            'items' => [
                ['titre' => 'Des groupes restreints', 'texte' => 'Chaque participant travaille sur ses propres factures et ses propres contrats. Pour pouvoir relire les calculs de chacun et répondre aux cas particuliers, le groupe reste petit.'],
                ['titre' => 'Des pages consultées le jour même', 'texte' => 'Les tarifs et les conditions changent souvent. Les offres étudiées sont ouvertes en direct sur les sites des fournisseurs, avec la date de consultation notée dans la grille, plutôt que recopiées d\'un support figé.'],
                ['titre' => 'Aucun accès sensible exposé', 'texte' => 'Les espaces clients sont consultés en lecture, par le participant lui-même, et jamais projetés. Aucun mot de passe n\'est demandé ; les montants confidentiels peuvent être arrondis avant d\'être partagés avec le groupe.'],
                ['titre' => 'Une neutralité affichée', 'texte' => 'Richard SALANON n\'est partenaire d\'aucun hébergeur ni d\'aucun éditeur et ne touche aucune commission. Les fournisseurs cités servent d\'exemples de lecture ; d\'autres, africains ou européens, peuvent être étudiés à la demande.'],
                ['titre' => 'Des supports qui servent après la session', 'texte' => 'Le tableur de coût sur 36 mois, la grille de décision, la liste des questions de sortie, la fiche de mesure de latence et le modèle de clause « exploitation et sortie » pour un cahier des charges. Ils sont modifiables et restent à l\'entreprise.'],
                ['titre' => 'Une évaluation sur un livrable', 'texte' => 'La réussite se mesure à la grille remplie pour un service réel en fin de journée, présentée au groupe en cinq minutes. Un questionnaire de satisfaction existe aussi, mais il ne dit pas si la décision a été mieux préparée.'],
                ['titre' => 'Un suivi pour la décision réelle', 'texte' => 'Pendant les semaines qui suivent, un canal direct permet de poser une question sur une offre reçue ou une clause ambiguë. Le périmètre et la durée de ce suivi sont précisés dans le devis.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon votre activité et votre pays ?',
            'items' => [
                ['secteur' => 'Cabinet comptable, à Cotonou', 'probleme' => 'Le cabinet hésite entre Odoo en ligne et une installation sur un serveur virtuel proposée par un prestataire, et doit tenir compte des données de ses clients.', 'solution' => 'Coût sur trois ans des deux scénarios, heures d\'administration comprises ; carte des données et question du transfert hors du Bénin au regard des articles 391 et 392 ; conditions d\'export comparées ; lecture du <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo et Dolibarr</a> si le choix du logiciel n\'est pas arrêté.'],
                ['secteur' => 'Boutique en ligne, à Abidjan', 'probleme' => 'Le site, sur un mutualisé acheté en promotion, ralentit pendant les soldes, et le renouvellement arrive à un prix bien supérieur.', 'solution' => 'Lecture de la facture de renouvellement, mesure du temps de chargement depuis des téléphones en 4G, comparaison avec une formule supérieure et avec un VPS en tenant compte de qui l\'administrera, calendrier de bascule avec retour arrière.'],
                ['secteur' => 'ONG ou projet financé, à Dakar', 'probleme' => 'Le bailleur demande où sont hébergées les données des bénéficiaires et exige une sortie organisée en fin de projet.', 'solution' => 'Inventaire des services et des pays de stockage, réponses écrites aux questions du bailleur, clause de récupération et d\'effacement des données, et calendrier de fin de projet aligné sur le préavis du fournisseur.'],
                ['secteur' => 'École privée, à Lomé', 'probleme' => 'Le site, les adresses mail et le domaine ont été créés par un ancien prestataire, avec sa carte bancaire, et personne ne connaît la date de renouvellement.', 'solution' => 'Cartographie des comptes et de leurs titulaires, transfert du domaine et des abonnements au nom de l\'établissement, échéancier des renouvellements, choix d\'une offre dont le coût sur trois ans tient dans le budget annuel.'],
                ['secteur' => 'PME industrielle, en France ou en Belgique', 'probleme' => 'L\'entreprise veut quitter un logiciel de gestion en ligne dont le contrat se reconduit chaque année, et craint de perdre ses historiques.', 'solution' => 'Lecture du contrat au regard des articles 25 et 29 du règlement sur les données, calcul de l\'intérêt d\'attendre le 12 janvier 2027, demande écrite des formats d\'export, plan de bascule avec période transitoire.'],
                ['secteur' => 'Groupe régional avec des filiales dans plusieurs pays', 'probleme' => 'Chaque filiale a choisi son hébergeur et ses outils ; la direction ne connaît ni le coût total ni l\'emplacement des données.', 'solution' => 'Inventaire consolidé, unité commune de comparaison en francs CFA ou en euros, règle de localisation par type de données, et grille de décision commune pour les prochains renouvellements.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : quel format choisir ?',
            'legende' => 'Le format se décide au premier échange, selon le nombre de décideurs concernés, la confidentialité des contrats étudiés et la dispersion des participants.',
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', 'Une direction, son responsable informatique et ses acheteurs, sur leurs propres contrats', 'Une journée, plus la demi-journée d\'atelier', 'Dans vos locaux ou une salle louée ; les factures et contrats restent dans l\'entreprise'],
                ['Inter-entreprises', 'Dirigeants et responsables de plusieurs structures, réseau professionnel, incubateur', 'Une journée', 'Exercices sur des offres publiques et des contrats anonymisés ; chacun refait le calcul sur ses chiffres de retour au bureau'],
                ['À distance', 'Équipes réparties entre plusieurs villes ou pays', 'Trois séances de deux heures et demie environ', 'Visioconférence et tableur partagé ; mesures de latence faites par chaque participant depuis sa propre connexion'],
                ['Hybride', 'Organisations qui préparent une consultation ou une migration', 'Une journée en salle, puis une séance à distance', 'Séance à distance calée sur la réception des offres des fournisseurs, pour les comparer avec la grille'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et de quoi dépend le devis ?',
            'intro'      => 'Aucun tarif n\'est publié : le prix est fixé sur devis. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements d\'hébergement ou de logiciels que vous choisirez ensuite restent facturés par leurs fournisseurs.',
            'items'      => [
                ['offre' => 'Journée décideurs', 'prix' => 'Sur devis', 'inclus' => ['Les quatre familles d\'hébergement comparées', 'Coût sur 36 mois et carte des données', 'Disponibilité, latence et réversibilité', 'Tableur et grille de décision remis']],
                ['offre' => 'Journée et atelier sur vos contrats', 'prix' => 'Sur devis', 'inclus' => ['La journée décideurs', 'Inventaire et calendrier de vos abonnements', 'Lecture commentée de vos contrats', 'Clause « exploitation et sortie » pour votre cahier des charges']],
                ['offre' => 'Session inter-entreprises', 'prix' => 'Sur devis', 'inclus' => ['Une journée pour plusieurs structures', 'Offres publiques et cas anonymisés', 'Coût partagé entre les participants']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'L\'ajout de la demi-journée d\'atelier sur les contrats de l\'entreprise.',
                'La préparation : analyse préalable de vos factures, de vos contrats ou de votre cahier des charges.',
                'Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou ou hors du Bénin.',
                'Le mode : en salle, à distance ou hybride.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Un fonds de formation peut-il financer cette journée ?',
            'intro' => 'La réponse appartient toujours au fonds, et aucune prise en charge n\'est promise. Voici ce que disent les dispositifs publics consultés le 5 octobre 2026, à vérifier avec votre propre fonds avant de vous engager.',
            'items' => [
                ['titre' => 'Côte d\'Ivoire', 'texte' => 'La page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> sur le plan de formation réserve ce dépôt aux entreprises à jour du paiement des deux taxes, et ne règle qu\'après son propre contrôle et l\'approbation de sa commission permanente.'],
                ['titre' => 'Bénin', 'texte' => 'Le FODEFCA fonctionne selon les statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> ; ses conditions et la part restant à la charge de l\'entreprise se demandent directement au fonds.'],
                ['titre' => 'Sénégal', 'texte' => 'Le <a href="https://www.3fpt.sn/">3FPT</a> dispose d\'un guichet pour le personnel des entreprises et les organisations professionnelles, avec dépôt des demandes en ligne.'],
                ['titre' => 'France', 'texte' => 'Selon <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a>, l\'accès aux fonds publics ou mutualisés, dont ceux des OPCO, suppose depuis le 1er janvier 2022 un prestataire certifié Qualiopi. Richard SALANON ne détient pas cette certification.'],
                ['titre' => 'Dans tous les cas', 'texte' => 'Envoyez au fonds le programme et le devis, attendez une réponse écrite, et prévoyez le budget sans aide. Les feuilles de présence et les attestations nominatives sont remises quelle que soit l\'issue.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle erreur coûte le plus cher, des mois après la signature ?',
            'texte' => 'Laisser le renouvellement se faire tout seul sur la carte bancaire de quelqu\'un qui n\'est plus là. Le jour où le paiement échoue, parce que la carte a expiré ou que le salarié a quitté l\'entreprise, le site, la messagerie ou le logiciel peuvent être suspendus sans que personne ne lise l\'avertissement, envoyé à une adresse que plus personne ne consulte. À l\'inverse, une reconduction tacite oubliée engage pour une nouvelle période au prix fort. Chaque abonnement doit avoir un titulaire au nom de l\'entreprise, un moyen de paiement suivi et une date de préavis inscrite à l\'agenda de la direction.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on après la formation, et comment les éviter ?',
            'intro' => 'La grille de décision ne protège que si elle sert vraiment au moment de choisir. Voici ce qui se produit le plus souvent dans les mois qui suivent, et la parade travaillée pendant la journée.',
            'items' => [
                ['titre' => 'Revenir au prix mensuel affiché', 'texte' => 'Sous la pression d\'une promotion, on compare de nouveau les chiffres en gros caractères. La règle reste la même : aucune décision sans le coût sur 36 mois, renouvellement compris.'],
                ['titre' => 'Prendre un VPS sans administrateur', 'texte' => 'Le serveur virtuel paraît plus puissant pour le même prix. Sans personne pour appliquer les mises à jour et surveiller les journaux, il devient la porte d\'entrée la plus probable. Le nom de l\'administrateur figure dans la grille, ou l\'option est écartée.'],
                ['titre' => 'Oublier la question de la localisation', 'texte' => 'La région est choisie par défaut lors de la commande, souvent aux États-Unis ou en Europe. Elle doit être choisie en connaissance de cause et notée dans l\'inventaire des traitements.'],
                ['titre' => 'Tester l\'export trop tard', 'texte' => 'On découvre le format d\'export le jour du départ. Un export d\'essai, fait dans le premier mois puis une fois par an, montre ce qui se récupère vraiment.'],
                ['titre' => 'Confondre disponibilité et sauvegarde', 'texte' => 'Un service disponible à 99,9 % peut perdre des données ; une sauvegarde ne rend pas un service disponible. Les deux se traitent séparément, la seconde dans la formation consacrée à la sécurité des données.'],
                ['titre' => 'Laisser les comptes au nom du prestataire', 'texte' => 'Le prestataire crée les comptes « pour aller plus vite ». L\'entreprise doit en rester titulaire et lui déléguer des accès, qu\'elle peut retirer.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le contexte de l\'Afrique de l\'Ouest pour le choix d\'un hébergement ?',
            'paragraphes' => [
                'Trois réalités pèsent davantage qu\'en Europe. D\'abord la facturation : la plupart des offres internationales sont libellées en euros ou en dollars, réglées par carte ou par prélèvement, ce qui expose au change et aux frais bancaires. Le franc CFA est arrimé à l\'euro, 655,957 FCFA pour un euro au cours de référence de la BCEAO du 2 octobre 2026, mais le dollar fluctue : la BCEAO l\'affichait le même jour à 584,37 FCFA. Une instance Lightsail à 7 dollars par mois représente ainsi environ 147 000 FCFA sur trois ans à ce cours, et ce montant bougera avec lui.',
                'Ensuite la connectivité des utilisateurs. Un ERP fluide sur la fibre du siège peut devenir pénible pour une agence connectée en 4G ou pour des commerciaux en déplacement. C\'est pourquoi les mesures de la formation se font aussi depuis un téléphone, et pourquoi la grille distingue les services consultés en continu, sensibles à la latence, de ceux que l\'on ouvre quelques fois par jour.',
                'Enfin le cadre juridique, qui se construit vite. Au Bénin, l\'autorisation préalable de l\'Autorité de protection avant tout transfert de données personnelles hors du pays, prévue par l\'article 391 de la loi n° 2017-20, concerne directement le choix d\'un hébergeur étranger. Les autres pays de la zone ont leurs propres textes et autorités : chaque session commence par ceux du pays des participants, et les groupes répartis entre plusieurs pays travaillent sur la règle la plus exigeante de leur périmètre.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi suivre cette formation avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Les questions de cette formation font partie de son travail ordinaire. Chaque site, application ou ERP qu\'il livre doit être hébergé quelque part, renouvelé à temps et transmissible le jour où le client change de prestataire. Son propre site, richardsalanon.com, est hébergé chez Hostinger, comme l\'indiquent ses mentions légales : il s\'en sert en séance comme d\'un exemple concret de facture, de renouvellement et d\'emplacement de serveur, pas comme d\'une recommandation. Il a aussi créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, du Bénin au Burkina Faso, du Gabon à la RD Congo, de la Belgique au Canada. Il n\'est partenaire d\'aucun hébergeur, d\'aucun fournisseur de cloud ni d\'aucun éditeur, et ne perçoit aucune commission sur les offres étudiées.',
                'Ses engagements sont vérifiables : réponse sous 24 heures, programme écrit avant la session, exercices sur vos factures et vos contrats, aucun mot de passe vu, supports qui restent à l\'entreprise. Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur la page des <a href="/zones/">zones d\'intervention</a>. Les autres formations du domaine figurent sur la page <a href="/formations/domaine/cybersecurite-it">formations en cybersécurité et IT</a>, dont <a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>, et l\'ensemble du <a href="/formations/">catalogue des formations</a> sur sa propre page.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de choisir un hébergement ou un cloud ?',
            'texte' => 'Comparez toujours un coût total sur trois ans, jamais un prix mensuel d\'appel. Nommez la personne qui administrera le service avant de choisir sa famille. Sachez dans quel pays vivent vos données et quelle autorisation leur transfert demande. Traduisez la disponibilité en minutes d\'arrêt, mesurez la latence depuis vos bureaux, et testez l\'export avant d\'en avoir besoin.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous choisir votre hébergement ou votre cloud en connaissant le coût réel et la sortie ?',
            'texte'  => 'Indiquez les services concernés, le nombre de décideurs à former, l\'échéance de vos contrats ou de votre projet, la ville et le format souhaité : vous recevez une réponse sous 24 heures, puis un programme et un devis détaillé. La formation prépare bien une <a href="/services/audit-etude-de-projet">étude de projet</a> ou la mise en place d\'un <a href="/services/integration-odoo">ERP Odoo</a>.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation cloud et hébergement'],
        ],
    ],

    'faq' => [
        ['q' => 'Combien de temps dure la formation ?', 'r' => 'Une journée, en deux demi-journées : le matin sur les familles d\'hébergement et le coût sur trois ans, l\'après-midi sur la localisation des données, la disponibilité, la latence et la sortie. Une demi-journée facultative est consacrée aux contrats et aux abonnements de votre organisation.'],
        ['q' => 'Faut-il des connaissances techniques pour la suivre ?', 'r' => 'Non. Savoir lire une facture et naviguer sur un site marchand suffit. Les notions de serveur, de région ou de latence sont expliquées à partir des écrans et des factures des participants, sans installation ni ligne de commande.'],
        ['q' => 'La formation nous dira-t-elle quel hébergeur choisir ?', 'r' => 'Elle vous donne la méthode et la grille pour décider, et les applique à vos besoins réels. Le choix vous appartient. Richard SALANON n\'est partenaire d\'aucun fournisseur et ne touche aucune commission, ce qui lui permet de vous dire quand l\'offre la plus simple suffit.'],
        ['q' => 'Un VPS est-il toujours plus économique qu\'un hébergement mutualisé ?', 'r' => 'Pas une fois le travail compté. OVHcloud précise que l\'utilisateur d\'un VPS est entièrement responsable de la configuration et de la maintenance du serveur. Si personne ne peut s\'en charger, il faut ajouter le coût d\'un prestataire, qui dépasse souvent l\'écart de prix entre les deux offres.'],
        ['q' => 'Peut-on héberger les données de nos clients béninois en Europe ?', 'r' => 'C\'est possible, mais c\'est un transfert de données personnelles hors du Bénin. L\'article 391 de la loi n° 2017-20 le soumet à l\'appréciation de l\'Autorité de protection et à son autorisation préalable, et l\'article 392 prévoit des exceptions. La formation apprend à poser la question avant de choisir la région, pas après.'],
        ['q' => 'Le Data Act s\'applique-t-il à notre contrat d\'hébergement ?', 'r' => 'Il s\'applique depuis le 12 septembre 2025 aux fournisseurs de services de traitement de données, avec des clauses obligatoires de changement de fournisseur et la suppression des frais de changement à partir du 12 janvier 2027. Une entreprise installée hors de l\'Union doit vérifier avec un juriste si elle peut l\'invoquer, et demander ces garanties dans son contrat.'],
        ['q' => 'Faut-il attendre le 12 janvier 2027 pour changer de fournisseur de cloud ?', 'r' => 'Pas forcément. D\'ici là, les frais de changement restent autorisés mais ne doivent pas dépasser les coûts directement liés à l\'opération. Si votre contrat se reconduit avant cette date ou si le service vous pénalise déjà, attendre peut coûter plus cher que les frais économisés. Le calcul se fait sur votre cas.'],
        ['q' => 'Que vaut un taux de disponibilité de 99,9 % ?', 'r' => 'Il tolère environ 43 minutes d\'arrêt sur un mois de 30 jours, près de 8 heures 46 minutes sur un an. Encore faut-il qu\'il s\'agisse d\'un engagement contractuel et non d\'une disponibilité « observée », et savoir ce que le fournisseur verse si l\'engagement n\'est pas tenu.'],
        ['q' => 'Choisir un serveur en Afrique du Sud améliore-t-il la vitesse depuis l\'Afrique de l\'Ouest ?', 'r' => 'Pas nécessairement. La vitesse dépend du trajet réel des données entre votre opérateur et le centre de données. La formation fait mesurer le temps de réponse de plusieurs régions depuis vos bureaux et depuis un téléphone, pour décider sur des chiffres plutôt que sur une carte.'],
        ['q' => 'La formation traite-t-elle des sauvegardes et des incidents ?', 'r' => 'Seulement pour rappeler qu\'ils ne se confondent pas avec la disponibilité. La politique de sauvegarde, les tests de restauration et la conduite d\'un incident sont traités dans la formation consacrée à la sécurité des données et aux sauvegardes pour dirigeants.'],
        ['q' => 'La formation peut-elle se faire à distance ?', 'r' => 'Oui, en trois séances de deux heures et demie environ, par visioconférence, avec un tableur partagé. Chaque participant mesure la latence depuis sa propre connexion, ce qui enrichit la comparaison quand les équipes sont réparties entre plusieurs villes ou pays.'],
        ['q' => 'Combien coûte la formation, et peut-elle être financée ?', 'r' => 'Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits. Un fonds comme le FDFP, le FODEFCA, le 3FPT ou un OPCO peut être sollicité, sans garantie : Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds.'],
    ],

    'sources' => [
        ['titre' => 'Hostinger, hébergement web : offres, durées et prix hors TVA', 'url' => 'https://www.hostinger.com/fr/hebergement-web', 'date' => '2026-10-05'],
        ['titre' => 'Hostinger, hébergement VPS : offres et prix de renouvellement', 'url' => 'https://www.hostinger.com/fr/vps', 'date' => '2026-10-05'],
        ['titre' => 'Hostinger, emplacements des serveurs par type d\'offre', 'url' => 'https://www.hostinger.com/support/1583267-where-are-hostinger-servers-located/', 'date' => '2026-10-05'],
        ['titre' => 'OVHcloud, hébergement web : prix HT et TTC, renouvellement', 'url' => 'https://www.ovhcloud.com/fr/web-hosting/', 'date' => '2026-10-05'],
        ['titre' => 'OVHcloud, serveurs privés virtuels (VPS) : prix, SLA et foire aux questions', 'url' => 'https://www.ovhcloud.com/fr/vps/', 'date' => '2026-10-05'],
        ['titre' => 'OVHcloud, catalogue public des VPS (prix mensuels, 6 et 12 mois)', 'url' => 'https://eu.api.ovh.com/v1/order/catalog/public/vps?ovhSubsidiary=FR', 'date' => '2026-10-05'],
        ['titre' => 'AWS, tarification d\'Amazon Lightsail', 'url' => 'https://aws.amazon.com/fr/lightsail/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'AWS, questions fréquentes sur Amazon Lightsail (facturation horaire, stockage)', 'url' => 'https://aws.amazon.com/fr/lightsail/faq/', 'date' => '2026-10-05'],
        ['titre' => 'AWS, régions et zones de disponibilité de Lightsail', 'url' => 'https://docs.aws.amazon.com/lightsail/latest/userguide/understanding-regions-and-availability-zones-in-amazon-lightsail.html', 'date' => '2026-10-05'],
        ['titre' => 'AWS, liste des régions AWS', 'url' => 'https://docs.aws.amazon.com/global-infrastructure/latest/regions/aws-regions.html', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, tarifs', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, règlement (UE) 2023/2854 sur les données (articles 25, 29, 31 et 50)', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32023R2854', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, le règlement sur les données (Data Act) expliqué', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/data-act-explained', 'date' => '2026-10-05'],
        ['titre' => 'Parlement européen, train législatif : proposition de règlement omnibus numérique (mise à jour du 20 septembre 2026)', 'url' => 'https://www.europarl.europa.eu/legislative-train/package-digital-package/file-digital-package', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, transférer des données hors de l\'Union européenne', 'url' => 'https://www.cnil.fr/fr/transferer-des-donnees-hors-de-lue', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 391 et 392)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'BCEAO, cours de référence des principales devises contre le franc CFA (2 octobre 2026)', 'url' => 'https://www.bceao.int/fr/cours/cours-de-reference-des-principales-devises-contre-Franc-CFA', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['securite-donnees-dirigeants', 'cybersecurite-employes', 'gestion-projet-agile', 'microsoft-365-google-workspace', 'adoption-erp', 'strategie-transformation-digitale'],
        'services'    => ['maintenance-support', 'refonte-migration-de-site', 'audit-etude-de-projet'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
