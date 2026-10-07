<?php
// ============================================================
// data/secteurs/pharmacies.php · Page secteur « Pharmacies et grossistes »
// (vague 1E, univers Santé et social). Aucun projet du portfolio rattaché ;
// une déclinaison locale (digitaliser-clinique-abomey-calavi). Public
// « Pharmaciens » : statut P au questionnaire (« peut former », jamais
// « a formé »). Faits externes consultés le 07/10/2026 (OMS, Commission
// européenne, Ordre national des pharmaciens, SGG du Bénin pour les lois
// n° 2021-03 et 2017-20, ABMed, CNIL, Le Soleil pour l’ARP du Sénégal,
// Autorité ivoirienne de protection des données pour la loi n° 2013-450, gouv.bj, Cleiss, Odoo,
// Dolibarr, impots.gouv.fr). Tarifs : seuls ceux de fait('tarifs_depart').
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Pharmacies et grossistes : des stocks, des lots et des commandes qui ne laissent plus passer une péremption, avec une IA qui reste au comptoir',
    'title'   => 'Pharmacies et grossistes : digitalisation | Richard SALANON',
    'meta'    => 'Officines et grossistes répartiteurs : stocks et péremptions, lots, commandes, caisse, vente en ligne, WhatsApp, Odoo et Dolibarr, IA encadrée. Sur devis.',
    'en_bref' => 'Richard SALANON équipe les officines, les groupes de pharmacies et les grossistes répartiteurs : suivi des lots et des péremptions dans Odoo ou Dolibarr, commandes aux grossistes, caisse et facturation, vente en ligne là où la loi l’autorise, messages WhatsApp aux patients et aux clients, et usages de l’IA qui laissent la décision au pharmacien. Le travail se fait à distance, avec des déplacements possibles au Bénin, par paliers, en partant de votre logiciel d’officine. Après un premier échange gratuit, chaque palier se chiffre sur devis ; seuls les tarifs de départ d’un site sont affichés.',
    'publie'  => '2026-11-19',
    'maj'     => '2026-11-19',
    'univers' => 'Santé et social',
    'locales' => ['digitaliser-clinique-abomey-calavi'],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Officines, groupes de pharmacies, grossistes répartiteurs et dépositaires'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation des pharmacies et des grossistes en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Le médicament est le seul produit de commerce dont une erreur de stock peut se payer en santé publique. D’après la <a href="https://www.who.int/news-room/fact-sheets/detail/substandard-and-falsified-medical-products">fiche de l’Organisation mondiale de la santé du 3 décembre 2024</a>, une estimation de 2017 retient qu’un médicament sur dix échoue aux contrôles de qualité dans les pays à revenu faible ou intermédiaire, et les États dépensent environ 30,5 milliards de dollars par an pour ces produits. Pour une officine ou un grossiste, la digitalisation commence donc là : savoir d’où vient chaque boîte, jusqu’à quelle date elle est utilisable et à qui elle a été remise.',
                'En Europe, ce suivi est devenu une obligation technique. La <a href="https://health.ec.europa.eu/medicinal-products/falsified-medicines_en">page de la Commission européenne sur les médicaments falsifiés</a> rappelle que la directive 2011/62/UE impose sur chaque emballage un identifiant unique et un dispositif d’inviolabilité, et que le règlement délégué (UE) 2016/161 précise leur vérification depuis le 9 février 2019. Le réseau français, lui, se concentre : selon l’<a href="https://www.ordre.pharmacien.fr/les-communications/focus-sur/la-revue/tous-pharmaciens-la-revue-n-28-juillet-2025/demographie-pharmaceutique-les-grandes-tendances-au-1er-janvier-2025">Ordre national des pharmaciens</a>, il restait 20 242 officines au 1er janvier 2025, soit 260 de moins en un an.',
                'En Afrique francophone, la réglementation avance par les autorités du médicament. Au Bénin, la loi n° 2021-03 du 1er février 2021 organise les activités pharmaceutiques, de la fabrication à la délivrance, selon le texte publié par le <a href="https://sgg.gouv.bj/doc/loi-2021-03/">Secrétariat général du Gouvernement</a>, et le site de l’<a href="https://abmed.bj/">ABMed</a>, l’agence du médicament, propose déjà des formulaires en ligne pour déclarer une rupture de stock ou un effet indésirable. Au Sénégal, l’agence de réglementation pharmaceutique a saisi en octobre 2025 des médicaments falsifiés d’une valeur estimée à 30 millions de FCFA sur un marché de Dakar, d’après <a href="https://lesoleil.sn/actualites/sante/faux-medicaments-larp-saisit-une-valeur-de-30-millions-fcfa/">Le Soleil</a>.',
                'La facture est l’autre moteur. Au Bénin, la généralisation des machines électroniques certifiées de facturation date du 2 décembre 2019, selon la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">fiche du portail gouv.bj sur les factures normalisées</a> ; en France, toutes les entreprises doivent pouvoir recevoir des factures électroniques depuis le 1er septembre 2026, d’après <a href="https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation">impots.gouv.fr</a>. Entre le comptoir, le grossiste et l’administration, les pièces circulent de plus en plus sous forme de données, et le tableur ou le cahier de stock ne suivent plus.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus d’une officine ou d’un grossiste gagnent à être digitalisés, et à quels signes le moment est-il venu ?',
            'intro' => 'Une officine vend en continu des centaines de références dont la durée de vie est écrite sur la boîte ; un grossiste répartiteur livre plusieurs fois par jour des dizaines de points de vente. Les processus ci-dessous sont ceux où un outil rapporte le plus vite, et trois signes suffisent à justifier un diagnostic.',
            'items' => [
                ['titre' => 'Les lots et les dates de péremption', 'texte' => 'Une boîte périmée découverte au fond d’un tiroir est une perte sèche ; une boîte périmée délivrée est une faute. Saisir lot et date à la réception, puis sortir en priorité ce qui expire le premier, remplace la tournée mensuelle des étagères par une alerte datée.'],
                ['titre' => 'Les commandes aux grossistes', 'texte' => 'Le pharmacien commande plusieurs fois par jour, souvent à plusieurs répartiteurs. Un outil qui propose les quantités selon la rotation réelle, garde la trace des manquants et rapproche le bon de livraison de la facture évite le surstock comme la rupture.'],
                ['titre' => 'Les ruptures, les rappels de lots et les alertes', 'texte' => 'Quand une autorité ou un laboratoire retire un lot, il faut retrouver en quelques minutes ce qui reste en rayon et ce qui a déjà été délivré. Sans numéro de lot saisi à l’entrée, la recherche se fait boîte par boîte.'],
                ['titre' => 'La caisse, le tiers payant et les assurances', 'texte' => 'Une même vente se règle en espèces, par mobile money, par carte ou en partie par un assureur. Quand les dossiers de remboursement s’accumulent sur un bureau, l’encours attendu des assurances n’est plus connu avec certitude.'],
                ['titre' => 'Les ordonnances et leur conservation', 'texte' => 'L’ordonnance contient des données de santé : sa saisie, son archivage et l’accès du personnel demandent des règles écrites. Un classeur ouvert au comptoir et une photo envoyée par une messagerie personnelle sont deux fuites possibles.'],
                ['titre' => 'Le lien avec le patient', 'texte' => 'Rappeler un renouvellement, prévenir qu’un produit commandé est arrivé, communiquer les horaires de garde : ces messages prennent des heures quand on les envoie un par un, et peuvent partir seuls depuis le logiciel.'],
                ['titre' => 'Les tournées et les clients d’un grossiste', 'texte' => 'Prise de commande des officines par téléphone, livraisons par tournée, retours et avoirs : le répartiteur qui suit chaque ligne de bout en bout sait quoi livrer, à qui, et ce qu’il reste à encaisser.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Une petite officine dont le logiciel d’officine agréé couvre déjà le stock, la caisse et le tiers payant n’a pas besoin d’un ERP : un connecteur ou un tableau de bord suffit. Si personne n’a une heure par semaine pour le projet, mieux vaut commencer par un seul processus.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour une pharmacie ou un grossiste, selon le besoin ?',
            'legende' => 'Chaque ligne associe un besoin courant du secteur à la page du service qui le traite ; le périmètre exact se fixe au diagnostic.',
            'entetes' => ['Besoin typique', 'Service', 'Page'],
            'lignes'  => [
                ['Suivre lots, péremptions, entrepôts et commandes aux fournisseurs dans un seul outil', 'Déploiement d’Odoo, avec la valorisation du stock arrêtée avec le comptable', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Un outil plus léger pour une officine ou un dépôt qui facture, encaisse et suit un stock', 'Déploiement de Dolibarr, module lots et péremptions activé', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Prendre des commandes de produits de parapharmacie, d’hygiène ou de matériel, et afficher le stock réel', 'Boutique en ligne reliée au stock, sans médicament soumis à prescription', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Prévenir un patient que sa commande est arrivée, rappeler un renouvellement, répondre aux questions pratiques', 'Messages modèles et conversations depuis l’API WhatsApp Business', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Gérer les clients d’un grossiste : commandes d’officines, tournées, retours et encours', 'Application web ou portail de commande sur mesure, reliés au stock', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Relier le logiciel d’officine à la comptabilité, à un tableau de bord ou à un autre outil', 'Connecteurs et API, avec clés dédiées et journal des échanges', '<a href="/services/api-rest-integrations">API et intégrations</a>'],
                ['Rapprocher automatiquement les factures des grossistes, relancer les assureurs, classer les pièces', 'Flux n8n ou Make avec contrôle humain avant toute écriture', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Donner à l’équipe un outil de recherche dans les notices et procédures internes, sans conseil au patient', 'Assistant interne sur documents choisis, avec garde-fous', '<a href="/services/integration-ia-entreprise">Intégration de l’IA en entreprise</a>'],
                ['Garder l’outil à jour, sauvegardé et assisté après la mise en service', 'Support, correctifs et préparation des montées de version', '<a href="/services/maintenance-support">Maintenance et support</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Logiciel d’officine, Odoo, Dolibarr : que garder, que relier, que remplacer ?',
            'legende' => 'Fonctions relevées dans la documentation d’Odoo (dates d’expiration et retrait FEFO) et dans le wiki de Dolibarr (module Lot / Serial) consultés le 07/10/2026 ; la compatibilité avec un logiciel d’officine précis se vérifie auprès de son éditeur.',
            'entetes' => ['Situation', 'Ce qui existe', 'Décision conseillée'],
            'lignes'  => [
                ['Officine dont le logiciel d’officine agréé fonctionne bien (stock, caisse, tiers payant, ordonnances)', 'Un logiciel d’officine, souvent déjà branché sur les circuits de remboursement de son pays', 'Le garder ; relier ses données à un tableau de bord, à WhatsApp ou à la comptabilité par une interface'],
                ['Officine qui tient son stock sur tableur ou sur cahier', 'Aucune alerte de péremption, aucun suivi de lot', 'Passer à un outil de stock avec lots : Odoo ou Dolibarr si le tiers payant reste simple, sinon un LGO'],
                ['Groupe de pharmacies ou grossiste répartiteur', 'Un ERP gère entrepôts, transferts, achats, ventes et facturation', 'Odoo : plusieurs entrepôts, réservation par date d’expiration la plus proche, comptabilité par société'],
                ['Dépôt pharmaceutique ou petite structure qui facture et suit quelques dizaines de références', 'Dolibarr : module Lot / Serial avec date limite de vente et date de consommation recommandée', 'Dolibarr, en activant le module avant le premier mouvement de stock'],
                ['Vente de produits hors médicaments, en ligne', 'Module boutique de l’ERP ou site dédié relié au stock', 'Site relié à l’ERP ; médicaments exclus tant que la loi du pays ne l’autorise pas'],
                ['Logiciel ancien sans interface, installé sur un seul poste', 'Données enfermées, sauvegarde à la main', 'Remplacer, après une reprise de données contrôlée et une période de double saisie'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que savent faire Odoo et Dolibarr pour le suivi des lots, et où s’arrêtent-ils ?',
            'paragraphes' => [
                'La <a href="https://www.odoo.com/documentation/19.0/applications/inventory_and_mrp/inventory/product_management/product_tracking/expiration_dates.html">documentation d’Odoo sur les dates d’expiration</a> décrit quatre champs par produit : la date d’expiration, exprimée en jours après la réception des produits, puis la date de consommation conseillée, la date de retrait et la date d’alerte, exprimées en jours avant l’expiration. Pour vendre des produits périssables, elle demande de régler la stratégie de sortie de l’emplacement sur FEFO, premier expiré, premier sorti : si un lot ne suffit pas, Odoo prélève la différence sur le lot dont la date est la plus proche. C’est exactement la règle qu’un préparateur applique de tête.',
                'Dolibarr répond plus simplement. Selon le <a href="https://wiki.dolibarr.org/index.php/Module_Lot/Serial">wiki du module Lot / Serial</a>, celui-ci gère un numéro de série, une date limite de vente et une date de consommation recommandée, et il étend le module Stocks. Pour un dépôt ou une petite officine, c’est souvent suffisant ; le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> détaille les coûts et les limites de chacun.',
                'Ces deux outils ne sont pas des logiciels d’officine : leur documentation ne décrit aucune connexion native avec les caisses d’assurance maladie ni avec le dossier pharmaceutique d’un pays, et toute liaison passerait par un développement à part. Un pharmacien qui télétransmet ses feuilles de soins garde donc son logiciel d’officine pour cette fonction, et l’on y ajoute ce qui lui manque. Un grossiste, qui n’a ni comptoir ni tiers payant, y trouve en revanche l’essentiel de ce qu’il lui faut.',
                'Reste la discipline de saisie. Aucun module ne vaut mieux que la réception : si le lot et la date ne sont pas lus sur la boîte à l’arrivée, l’alerte ne sonnera jamais. Le projet prévoit donc un poste de réception avec lecteur de codes-barres, ou à défaut une saisie rapide guidée, et des contrôles de cohérence sur quelques références chaque semaine pendant les premiers mois.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l’IA dans une pharmacie ou chez un grossiste, et que ne doit-elle jamais faire ?',
            'intro' => 'Dans une officine, l’IA prépare des listes et des brouillons que le pharmacien relit. La ligne de partage est simple : tout ce qui touche au conseil, à la dispensation et à la décision reste humain.',
            'items' => [
                ['titre' => 'Prévoir les commandes', 'texte' => 'Une prévision de rotation par référence, calculée sur l’historique des ventes et signalée au pharmacien, réduit les ruptures et les surstocks. La commande n’est validée qu’après lecture par une personne.'],
                ['titre' => 'Lire les bons de livraison et les factures des grossistes', 'texte' => 'La reconnaissance de texte extrait références, lots, dates et montants, et les propose à la saisie. Les lignes douteuses sont présentées à un opérateur ; rien n’entre en stock sans lui.'],
                ['titre' => 'Répondre aux questions pratiques des patients', 'texte' => 'Horaires de garde, disponibilité d’un produit de parapharmacie, état d’une commande : un agent WhatsApp répond à ces messages. Dès qu’une question touche un symptôme, une posologie ou une interaction, il renvoie vers le comptoir.'],
                ['titre' => 'Retrouver une procédure interne', 'texte' => 'Un assistant sur les documents de l’officine (conduite à tenir en cas de rupture, consignes de rangement, procédure de rappel de lot) retrouve la bonne page, avec sa source, sans rien inventer en dehors d’elle.'],
                ['titre' => 'Repérer des anomalies', 'texte' => 'Un écart de stock répété sur une référence, un prix d’achat qui dérive, une ordonnance renouvelée trop souvent : l’IA signale, la décision et l’enquête restent au pharmacien.'],
                ['titre' => 'Ce qu’elle ne doit jamais faire', 'texte' => 'Délivrer un conseil de santé, valider une ordonnance, remplacer un médicament par un autre, ou recevoir des données de patients dans un outil public. Chaque usage est inscrit dans une charte, avec un responsable nommé.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi un assistant ne doit-il jamais répondre seul sur un médicament ?',
            'texte' => 'Un agent conversationnel qui se trompe engage celui qui le publie : l’<a href="/histoires/air-canada-chatbot">histoire d’Air Canada</a> le montre sur un tout autre sujet. En pharmacie, l’erreur touche la santé d’une personne. Les données d’une ordonnance sont des données de santé, dont le traitement est interdit par principe par l’article 9 du RGPD sauf conditions précises, d’après la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2">CNIL</a>. La règle du projet est donc écrite d’avance : aucun nom, aucune ordonnance et aucun diagnostic ne partent vers un outil d’IA grand public, et toute réponse sur un produit de santé est relue par un pharmacien.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Mobile money, facturation, données de santé : quelles règles encadrent le comptoir et la caisse ?',
            'paragraphes' => [
                'Au comptoir, le moyen de paiement se choisit au dernier moment : espèces, carte, mobile money MTN ou Moov, ou assureur qui paie une part. Le logiciel doit donc enregistrer chaque moyen séparément et clôturer la caisse par caissier, faute de quoi l’écart du soir ne s’explique plus. Pour encaisser une commande en ligne de produits hors médicament, le choix de l’agrégateur est traité dans le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a>.',
                'La facture suit la règle du pays. Au Bénin, la réforme impose des factures normalisées, émises par une machine ou un module électronique certifié, et la fiche de <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">gouv.bj</a> en décrit les éléments de sécurité ; qui y est assujetti, pour quelles ventes de médicaments, se confirme auprès de la direction générale des impôts et du comptable avant de paramétrer quoi que ce soit. En France, l’obligation d’émettre des factures électroniques atteindra les petites et moyennes entreprises le 1er septembre 2027, selon <a href="https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation">impots.gouv.fr</a>, et celle de les recevoir s’impose à toutes depuis le 1er septembre 2026.',
                'Les données d’ordonnance relèvent de la santé. En Europe, l’article 9 du RGPD, présenté sur le site de la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2">CNIL</a>, interdit par principe leur traitement, sauf conditions listées dans le même article. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> dispose, à son article 391, qu’un transfert de données vers un État tiers ne peut avoir lieu que lorsque l’Autorité constate que cet État assure un niveau de protection équivalent : un hébergement à l’étranger se décide donc avec l’autorité béninoise de protection des données. En Côte d’Ivoire, la loi n° 2013-450 du 19 juin 2013 reconnaît à toute personne dont les données sont traitées un droit d’accès, comme le rappelle l’<a href="https://www.autoritedeprotection.ci/droits-des-personnes-concernees/">Autorité de protection des données personnelles</a>.',
                'Le tiers payant ajoute une obligation de preuve. Au Bénin, le régime d’assurance maladie universelle, mis en place en avril 2012 et géré par l’ANAM d’après le <a href="https://www.cleiss.fr/actu/2013/1311benin.html">Cleiss</a>, repose sur l’adhésion volontaire ; une officine peut donc recevoir des assurés de régimes différents, avec des pièces différentes. Chaque assureur a son circuit de remboursement : le logiciel garde la trace des dossiers envoyés, payés et rejetés, pour que l’encours ne dépende plus de la mémoire d’une personne.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on vendre des médicaments en ligne, et que disent les autorités du médicament selon les pays ?',
            'paragraphes' => [
                'La réponse change de pays en pays, et la prudence consiste à la demander avant d’écrire une ligne de code. En France, la fiche de l’<a href="https://www.ordre.pharmacien.fr/je-suis/pharmacien/pharmacien/mon-exercice-professionnel/les-fiches-professionnelles/l-activite-de-vente-en-ligne-de-medicaments-a-usage-humain">Ordre national des pharmaciens</a> pose le cadre : le site est celui d’une officine, déclaré au préalable au directeur général de l’agence régionale de santé avec un dossier fixé par un arrêté du 27 février 2026, et la vente à distance est limitée aux médicaments qui ne sont pas soumis à prescription obligatoire.',
                'La même fiche rappelle qu’il est interdit d’honorer une commande de médicament sur ordonnance transmise par scan, photo ou fichier, lorsqu’elle est exécutée avec un moyen de facturer à distance. Depuis le 1er juillet 2015, chaque page de commerce électronique de médicaments affiche le logo commun européen, dont le règlement d’exécution n° 699/2014 fixe le dessin et qui renvoie vers la liste nationale des sites autorisés. Un site de pharmacie qui oublie ce logo, ou qui laisse passer une photo d’ordonnance, n’est pas conforme.',
                'En Afrique francophone, la vente en ligne de médicaments par une officine doit se vérifier pays par pays auprès de l’autorité du médicament et de l’ordre des pharmaciens : au Bénin, l’ABMed et la loi n° 2021-03 ; au Sénégal, l’agence de réglementation pharmaceutique, qui rappelle que seules les officines sont habilitées à vendre des médicaments. Au Bénin, la loi n° 2021-03 réserve aux pharmaciens la vente et la dispensation des médicaments (article 6) et interdit toute publicité sur un médicament, sauf celle destinée aux professionnels de santé (article 18) : un site vitrine ne présente donc ni prix ni offre de médicaments au grand public. En l’absence d’autorisation claire, le projet reste hors médicament : parapharmacie, hygiène, matériel, prise de rendez-vous, information sur les horaires de garde ; certains produits d’apparence courante, comme les laits infantiles ou les tests de diagnostic in vitro, relèvent aussi du monopole pharmaceutique béninois et se vérifient avant mise en ligne. L’OMS note d’ailleurs que la montée des ventes en ligne sur des sites non autorisés facilite l’arrivée de produits falsifiés.',
                'Pour le grossiste répartiteur, les obligations portent sur la traçabilité : en Europe, la Commission rappelle le renforcement de la tenue de registres des grossistes-distributeurs, et l’identifiant unique doit être vérifié selon le règlement délégué 2016/161. Au Bénin, la licence des établissements pharmaceutiques figure parmi les fonctions réglementaires de l’ABMed. Dans les deux cas, le logiciel conserve chaque mouvement avec son lot, sa date et son interlocuteur, de manière à répondre à un contrôle sans reconstituer l’histoire à la main.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la digitalisation d’une pharmacie ou d’un grossiste selon le pays ?',
            'items' => [
                ['secteur' => 'Officine de quartier, Cotonou (Bénin)', 'probleme' => 'Le stock se tient sur un cahier ; les péremptions se découvrent lors d’un rangement, et les assurés de plusieurs régimes demandent des justificatifs différents.', 'solution' => 'Lots et dates saisis à la réception dans Dolibarr ou Odoo, alerte avant l’échéance, sortie du lot le plus proche en premier, et suivi des dossiers d’assurance par assureur. Le logiciel d’officine éventuel est conservé pour la caisse.'],
                ['secteur' => 'Grossiste répartiteur, Abidjan (Côte d’Ivoire)', 'probleme' => 'Les officines commandent par téléphone et par messages ; les erreurs de préparation et les retours se règlent à la main en fin de mois.', 'solution' => 'Un portail de commande relié à Odoo, un message WhatsApp de confirmation par commande, une tournée par chauffeur, et un avoir généré à chaque retour avec le lot concerné.'],
                ['secteur' => 'Pharmacie au centre-ville, Dakar (Sénégal)', 'probleme' => 'Des produits d’origine douteuse circulent sur les marchés voisins, et les patients demandent si un produit vendu dans la rue est le même que celui du comptoir.', 'solution' => 'Un registre d’achat par fournisseur autorisé, une page d’information sur les produits vendus et l’adresse de l’autorité pour signaler un doute, et un journal des lots reçus et des lots rappelés.'],
                ['secteur' => 'Officine de ville, France', 'probleme' => 'Le logiciel d’officine fait la caisse et le tiers payant, mais la comptabilité et les relances fournisseurs se ressaisissent chaque semaine, et la facture électronique approche.', 'solution' => 'Le logiciel d’officine est conservé ; une interface exporte achats et ventes vers la comptabilité, un flux rapproche les factures des grossistes, et le circuit de facture électronique est préparé avant l’échéance.'],
                ['secteur' => 'Trois officines du même propriétaire, Lomé (Togo)', 'probleme' => 'Une officine manque d’un produit que la deuxième garde en excès, et le propriétaire ne voit les chiffres du groupe qu’en fin de mois.', 'solution' => 'Un entrepôt par officine dans Odoo, des transferts internes tracés avec leur lot, une consolidation des ventes et du stock, et un tableau de bord quotidien consultable depuis le téléphone.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet pour une pharmacie ou un grossiste, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez votre structure, votre logiciel actuel et ce qui coince. Le premier échange est gratuit ; il dit franchement si un ERP s’impose ou si un connecteur suffit.'],
                ['titre' => 'Diagnostic sur une boîte réelle', 'duree' => 'Selon le projet', 'texte' => 'On suit un produit de la commande au grossiste jusqu’à la délivrance ou à la livraison : réception, rangement, lot, date, vente, paiement, remboursement. Le diagnostic liste ce qui est digitalisé, ce qui ne l’est pas, et les règles locales à confirmer.'],
                ['titre' => 'Choix de l’outil', 'duree' => 'Selon le projet', 'texte' => 'Garder le logiciel d’officine et le relier, ou ajouter Odoo ou Dolibarr pour le stock et la facturation, ou remplacer : la décision est écrite avec ses raisons et son coût.'],
                ['titre' => 'Base d’essai et reprise des données', 'duree' => 'Selon le projet', 'texte' => 'Produits, fournisseurs, stocks d’ouverture, lots et dates sont nettoyés puis importés sur une base d’essai. Les totaux sont comparés avant et après avec le pharmacien ou le responsable d’entrepôt.'],
                ['titre' => 'Paramétrage et connecteurs', 'duree' => 'Selon le projet', 'texte' => 'Entrepôts, règles de sortie par date, alertes, caisse, droits par rôle, puis messages WhatsApp, rapprochement des factures et export comptable, un palier après l’autre.'],
                ['titre' => 'Recette et formation', 'duree' => 'Selon le projet', 'texte' => 'Chaque rôle déroule un scénario : réception avec un lot, vente, retour, rappel de lot, clôture de caisse. La formation se fait sur vos produits, avec un référent désigné dans l’officine ou l’entrepôt.'],
                ['titre' => 'Bascule et accompagnement', 'duree' => 'Selon le projet', 'texte' => 'La bascule se cale sur un inventaire, avec une période de double saisie sur les premières références. Les ajustements des premières semaines sont traités en priorité.'],
                ['titre' => 'Suivi et évolutions', 'duree' => 'Après la mise en service', 'texte' => 'Sauvegardes, montées de version et nouveaux paliers (vente en ligne hors médicament, assistant interne) se planifient dans le cadre de la <a href="/services/maintenance-support">maintenance</a>. Ces pratiques forment une méthode proposée, ajustée au cadrage.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la digitalisation d’une pharmacie ou d’un grossiste, et qu’est-ce qui fait varier le devis ?',
            'intro'      => 'Seuls trois tarifs de départ sont publiés sur ce site, tous pour des sites ou du référencement. Tout le reste, ERP, connecteurs, applications et assistants, se chiffre sur devis, après le diagnostic. Les conversions en euros utilisent 655,957 FCFA pour 1 €. Une officine béninoise règle en Mobile Money (MTN, Moov) ou en espèces, un groupe ou un répartiteur à l’étranger par carte bancaire, PayPal ou virement.',
            'items'      => [
                ['offre' => 'Site vitrine de l’officine ou du grossiste', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Présentation, horaires, adresse et services', 'Page de garde et contact', 'Plan du site et mentions légales du pays']],
                ['offre' => 'Landing page pour un service précis', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Une page conçue pour un service (retrait de commande, matériel médical)', 'Formulaire ou bouton WhatsApp', 'Suivi des demandes reçues']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Fiche d’établissement et pages locales', 'Textes qui répondent aux questions des patients', 'Suivi des demandes de contact']],
                ['offre' => 'Déploiement d’Odoo ou de Dolibarr pour le stock', 'prix' => 'Sur devis', 'inclus' => ['Entrepôts, lots, dates, alertes', 'Reprise des données, formation par rôle', 'Documentation du paramétrage']],
                ['offre' => 'Connecteurs, WhatsApp et automatisations', 'prix' => 'Sur devis', 'inclus' => ['Messages modèles et conversations', 'Rapprochement des factures et export comptable', 'Contrôle humain avant écriture']],
                ['offre' => 'Application web ou portail de commande de grossiste', 'prix' => 'Sur devis', 'inclus' => ['Commande des officines', 'Tournées, retours et avoirs', 'Lien avec le stock et la facturation']],
            ],
            'variations' => [
                'Le nombre de points de vente, d’entrepôts et de personnes à former.',
                'Le nombre de références, la propreté des fichiers à reprendre et la présence de lots et de dates déjà saisis.',
                'La conservation ou le remplacement du logiciel d’officine, et la qualité de ses interfaces.',
                'Les assureurs à traiter, avec leurs circuits de remboursement et leurs pièces.',
                'La facturation normalisée ou électronique du pays, et la comptabilité retenue.',
                'Les canaux : WhatsApp, mobile money, boutique hors médicament.',
                'Les règles de protection des données et l’hébergement choisi.',
                'La maintenance après la mise en service, et les montées de version.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font dérailler la digitalisation d’une pharmacie ou d’un grossiste ?',
            'intro' => 'Ces erreurs reviennent dans le secteur quel que soit le pays ; la plupart se décident avant la première saisie.',
            'items' => [
                ['titre' => 'Saisir les lots plus tard', 'texte' => 'Un lot noté après coup, ou jamais, rend l’alerte de péremption et la recherche en cas de rappel inutiles. La saisie se fait à la réception, avec la boîte en main.'],
                ['titre' => 'Remplacer le logiciel d’officine trop vite', 'texte' => 'Le tiers payant, la caisse et les ordonnances ont des règles que l’officine ne veut pas refaire. Le relier à un outil de stock vaut mieux que le remplacer sans nécessité.'],
                ['titre' => 'Oublier les assurés et leurs pièces', 'texte' => 'Chaque régime a son formulaire et son délai. Un tableau des dossiers envoyés, payés et rejetés évite de découvrir un mois de créances impayées à l’inventaire.'],
                ['titre' => 'Publier un site de vente sans avoir vérifié la loi', 'texte' => 'La vente en ligne de médicaments est encadrée et diffère d’un pays à l’autre. Une page qui promet un médicament sur ordonnance expose l’officine bien avant l’éditeur du site.'],
                ['titre' => 'Envoyer des ordonnances par une messagerie personnelle', 'texte' => 'Une photo d’ordonnance sur un téléphone personnel est une donnée de santé hors de tout cadre. Un canal professionnel, des accès nominatifs et une durée de conservation écrite règlent la question.'],
                ['titre' => 'Confier un conseil à un robot', 'texte' => 'Un assistant qui répond sur une posologie ou une interaction engage la responsabilité de la pharmacie. Il renvoie au comptoir dès qu’une question touche la santé.'],
                ['titre' => 'Négliger les sauvegardes', 'texte' => 'Un stock et un historique de lots enfermés sur un poste sans sauvegarde disparaissent avec le disque. Une copie chiffrée hors du local, testée par une restauration, est une règle de départ.'],
                ['titre' => 'Former un seul référent, une seule fois', 'texte' => 'Le préparateur, le pharmacien adjoint et le livreur n’utilisent pas les mêmes écrans. Une formation par rôle, reprise après le premier inventaire, ancre l’outil.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes d’une pharmacie ou d’un grossiste à ces outils ?',
            'paragraphes' => [
                'Richard peut former des pharmaciens et leurs équipes, sur place au Bénin ou à distance. La page <a href="/formations/metier/pharmaciens">formations pour pharmaciens</a> présente ce programme par métier : suivi des stocks et des péremptions, commandes aux grossistes, traçabilité des boîtes et protection des ordonnances. Cette page-ci traite du projet de digitalisation ; la formation en est la suite, pas son substitut.',
                'Plusieurs fiches de formation se combinent selon les postes. La fiche <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> prépare les préparateurs et les responsables d’entrepôt à la réception, aux transferts et aux retours. <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a> s’adresse à ceux qui écrivent aux patients ou aux officines clientes. <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a> aide quand un tableur reste en service en attendant l’ERP.',
                'Deux fiches complètent le dispositif. <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> fixe, pour toute l’équipe, ce qui ne sort jamais de l’officine ; <a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a> traite des mots de passe, de l’hameçonnage et des appareils partagés au comptoir. L’ensemble est calibré sur vos produits et vos procédures, avec des cas tirés de votre propre stock.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la digitalisation de votre pharmacie ou de votre grossiste à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Avec plus de 6 ans d’expérience dans le numérique, une formation à EPITECH (2022) et plus de 50 projets livrés, Richard SALANON connaît Odoo et Dolibarr de l’intérieur, et peut donc dire honnêtement lequel convient à une officine, à un groupe ou à un grossiste, ou si le logiciel d’officine en place doit rester. Il est aussi co-fondateur d’<a href="https://audyxa.com">Audyxa</a> et développe <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d’Afrique francophone.',
                'Ce que la page <a href="/digitaliser-clinique-abomey-calavi">digitaliser une clinique ou une pharmacie à Abomey-Calavi</a> décrit pour un cas local se décline ici à l’échelle d’une officine, d’un groupe ou d’un répartiteur. Pour voir comment Richard conduit ses projets, la page <a href="/realisations/">réalisations</a> présente ses travaux. Son parcours complet figure sur la page <a href="/richard-salanon">Richard SALANON</a>.',
                'Sa méthode tient en quelques engagements : un diagnostic sur un produit réel, un palier en production avant le suivant, des accès et du code à votre nom, une documentation du paramétrage, et une réponse sous 24 heures.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez savoir par où commencer pour votre officine ou votre dépôt ?',
            'texte'  => 'Décrivez votre structure, votre logiciel d’officine ou votre outil de stock, vos assureurs et le pays : la réponse arrive sous 24 heures ; le premier échange est gratuit et débouche sur une proposition par paliers, chiffrée sur devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet de pharmacie'],
        ],
    ],

    'faq' => [
        ['q' => 'Odoo ou Dolibarr peut-il remplacer le logiciel d’une officine ?', 'r' => 'Rarement en entier. Odoo comme Dolibarr gèrent des lots et des dates d’expiration, mais leur documentation ne décrit aucune connexion native avec les caisses d’assurance ni avec le dossier pharmaceutique d’un pays. Une officine qui télétransmet garde son logiciel d’officine ; un grossiste ou un dépôt, qui n’a pas de comptoir, peut s’en passer.'],
        ['q' => 'Comment suivre les péremptions dans Odoo ?', 'r' => 'Chaque produit reçoit une date d’expiration (en jours après la réception), une date de consommation conseillée, une date de retrait et une date d’alerte (en jours avant l’expiration), selon la documentation d’Odoo. La sortie de stock est réglée sur FEFO, qui prélève d’abord le lot dont la date est la plus proche. La saisie du lot à la réception reste indispensable.'],
        ['q' => 'Dolibarr gère-t-il les lots et les dates limites de vente ?', 'r' => 'Oui, par le module Lot / Serial, qui gère un numéro de série, une date limite de vente et une date de consommation recommandée et étend le module Stocks, d’après le wiki de Dolibarr. Le wiki précise qu’il s’active par un compte administrateur et qu’un produit géré par lot n’accepte plus de mouvement de stock sans numéro de lot : mieux vaut donc l’activer avant la saisie du stock d’ouverture.'],
        ['q' => 'Peut-on vendre des médicaments sur internet ?', 'r' => 'Cela dépend du pays. En France, seule une officine déclarée à l’agence régionale de santé peut le faire, uniquement pour les médicaments sans prescription obligatoire, avec le logo commun européen, selon l’Ordre des pharmaciens. Ailleurs, la règle se vérifie auprès de l’autorité du médicament et de l’ordre ; sans autorisation claire, le site reste hors médicament.'],
        ['q' => 'Que doit contenir un site de pharmacie en France ?', 'r' => 'Selon la fiche de l’Ordre, le site affiche notamment les coordonnées de l’ANSM, un lien vers le site de l’Ordre et du ministère de la santé, et le logo commun européen sur chaque page de commerce électronique de médicaments. Les règles techniques sur les données de santé et la présentation des médicaments figurent dans un arrêté du 28 novembre 2016 modifié.'],
        ['q' => 'Comment éviter les médicaments falsifiés dans la chaîne ?', 'r' => 'En s’approvisionnant uniquement auprès de grossistes autorisés, en gardant le lot de chaque boîte reçue et en vérifiant l’identifiant unique là où la loi l’impose, comme en Europe depuis le 9 février 2019. Selon l’OMS, une estimation de 2017 retient qu’un médicament sur dix échoue aux contrôles de qualité dans les pays à revenu faible ou intermédiaire.'],
        ['q' => 'La facture normalisée du Bénin concerne-t-elle ma pharmacie ?', 'r' => 'La généralisation des machines électroniques certifiées de facturation date du 2 décembre 2019, selon gouv.bj, mais l’assujettissement dépend de votre statut fiscal et de vos ventes. Confirmez-le auprès de la direction générale des impôts et de votre comptable avant de paramétrer le logiciel.'],
        ['q' => 'Où héberger les données d’ordonnances ?', 'r' => 'Les données de santé demandent des règles strictes. Au Bénin, la loi n° 2017-20 encadre le transfert de données vers un État tiers ; en Europe, le RGPD interdit par principe leur traitement sauf conditions listées à son article 9. L’hébergement se choisit avec l’autorité de protection des données du pays, avant la mise en service.'],
        ['q' => 'L’IA peut-elle répondre aux patients sur WhatsApp ?', 'r' => 'Pour les horaires, les disponibilités de parapharmacie et l’état d’une commande, oui. Pour un symptôme, une posologie ou une interaction, non : l’assistant renvoie au comptoir. La règle est écrite dans le paramétrage, et chaque réponse sur un produit de santé relève d’un pharmacien.'],
        ['q' => 'Pouvez-vous former mon équipe d’officine ?', 'r' => 'Richard peut former des pharmaciens et leurs équipes, sur place au Bénin ou à distance, avec des cas tirés de votre stock. La page des formations pour pharmaciens détaille le programme ; le premier échange est gratuit et sert à choisir les fiches utiles à chaque poste.'],
        ['q' => 'Intervenez-vous hors du Bénin ?', 'r' => 'Oui. Le diagnostic et la formation se font en visioconférence, ou sur place au Bénin, et le paramétrage à distance. Un groupe de pharmacies ou un grossiste établi en Europe règle par carte bancaire, PayPal ou virement.'],
    ],

    'sources' => [
        ['titre' => 'Organisation mondiale de la santé, fiche sur les produits médicaux de qualité inférieure et falsifiés (3 décembre 2024)', 'url' => 'https://www.who.int/news-room/fact-sheets/detail/substandard-and-falsified-medical-products', 'date' => '2026-10-07'],
        ['titre' => 'Commission européenne, médicaments falsifiés (directive 2011/62/UE, règlement délégué 2016/161)', 'url' => 'https://health.ec.europa.eu/medicinal-products/falsified-medicines_en', 'date' => '2026-10-07'],
        ['titre' => 'Ordre national des pharmaciens, l’activité de vente en ligne de médicaments à usage humain', 'url' => 'https://www.ordre.pharmacien.fr/je-suis/pharmacien/pharmacien/mon-exercice-professionnel/les-fiches-professionnelles/l-activite-de-vente-en-ligne-de-medicaments-a-usage-humain', 'date' => '2026-10-07'],
        ['titre' => 'Ordre national des pharmaciens, démographie pharmaceutique au 1er janvier 2025', 'url' => 'https://www.ordre.pharmacien.fr/les-communications/focus-sur/la-revue/tous-pharmaciens-la-revue-n-28-juillet-2025/demographie-pharmaceutique-les-grandes-tendances-au-1er-janvier-2025', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2021-03 du 1er février 2021 portant organisation des activités pharmaceutiques', 'url' => 'https://sgg.gouv.bj/doc/loi-2021-03/', 'date' => '2026-10-07'],
        ['titre' => 'ABMed, Agence béninoise du médicament et des autres produits de santé', 'url' => 'https://abmed.bj/', 'date' => '2026-10-07'],
        ['titre' => 'Le Soleil, faux médicaments : l’ARP saisit une valeur de 30 millions de FCFA (2 octobre 2025)', 'url' => 'https://lesoleil.sn/actualites/sante/faux-medicaments-larp-saisit-une-valeur-de-30-millions-fcfa/', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'Autorité de protection des données personnelles de Côte d’Ivoire, droits des personnes concernées (loi n° 2013-450)', 'url' => 'https://www.autoritedeprotection.ci/droits-des-personnes-concernees/', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre II (article 9, données de santé)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-07'],
        ['titre' => 'Portail gouv.bj, tout savoir sur les factures normalisées au Bénin', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-07'],
        ['titre' => 'impots.gouv.fr, à partir de quand suis-je concerné par la réforme de la facturation électronique ?', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-07'],
        ['titre' => 'Cleiss, Bénin : régime d’assurance maladie universelle (RAMU)', 'url' => 'https://www.cleiss.fr/actu/2013/1311benin.html', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo, dates d’expiration des produits', 'url' => 'https://www.odoo.com/documentation/19.0/applications/inventory_and_mrp/inventory/product_management/product_tracking/expiration_dates.html', 'date' => '2026-10-07'],
        ['titre' => 'Wiki Dolibarr, module Lot / Serial', 'url' => 'https://wiki.dolibarr.org/index.php/Module_Lot/Serial', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['integration-odoo', 'integration-dolibarr', 'site-e-commerce', 'integration-whatsapp', 'application-web-sur-mesure', 'api-rest-integrations', 'automatisation-ia', 'maintenance-support'],
        'metiers'     => ['pharmaciens'],
        'formations'  => ['odoo-utilisateurs', 'whatsapp-odoo-dolibarr-crm', 'ia-ethique-conformite', 'cybersecurite-employes', 'excel-google-sheets'],
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay'],
        'histoires'   => ['air-canada-chatbot'],
    ],
];
