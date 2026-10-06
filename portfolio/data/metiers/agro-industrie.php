<?php
// ============================================================
// data/metiers/agro-industrie.php · Page « formations par métier » pour
// l'agro-industrie et le négoce agricole (vague 1C, univers « Technique et
// terrain », non prioritaire, statut P : Richard PEUT former ce public, il
// ne l'a jamais formé). Angle propre : la campagne de collecte, du
// producteur au conteneur (enregistrement des producteurs et des
// parcelles, pesée et ticket, paiement, constitution des lots, magasins et
// stocks, qualité à la réception, traçabilité, export, financement des
// campagnes par gage de stocks). La gestion d'usine générique relève de la
// page « industrie », écrite à part. La page oriente vers les fiches
// odoo-utilisateurs, digitalisation-processus, data-literacy et
// whatsapp-odoo-dolibarr-crm sans en reprendre le texte.
// Sources lues à la source (navigateur ou WebFetch) le 06/10/2026 et
// datées du 05/10/2026 comme le veut la consigne : règlement (UE)
// 2023/1115 (articles 2, 4, 9 et 12, EUR-Lex), page de la Commission sur
// le règlement et communiqué du 4 mai 2026, règlement (CE) n° 178/2002
// (article 18), Acte uniforme OHADA portant organisation des sûretés
// (articles 101, 110, 115, 120 à 124, PDF de la bibliothèque OHADA), AUDCIF
// (articles 16, 24 et 44),
// loi ivoirienne n° 2013-450 (articles 5 et 7, PDF de
// l'ARTCI), AIP (traçabilité du café et du cacao, 28 mai 2025 et
// 12 août 2026), FAO (indicateur 12.3.1), UIT (Facts and Figures 2025),
// KoboToolbox (tarifs « Other »), OIML R 76-1, FranceAgriMer (décision
// MEP/D2017-06), Odoo 20.0 (lots), wiki Dolibarr (module Lot/Série).
// Faits repris des fiches déjà vérifiées : quota WhatsApp de Meta, article
// 4 du règlement européen sur l'IA, FDFP, FODEFCA, 3FPT, France
// Compétences, loi béninoise n° 2017-20 (article 391), RGPD (article 22).
// Neutralité : aucun jugement sur les politiques agricoles des États.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour l'agro-industrie et le négoce agricole : tracer chaque sac du producteur au conteneur, tenir des stocks qui rassurent la banque, sans confier à un outil une pesée, une parcelle ou un paiement",
    'title'   => "Formation IA agro-industrie et négoce | Richard SALANON",
    'meta'    => "Former coopératives, acheteurs et exportateurs agricoles à l'IA et aux outils : collecte, pesées, stocks, traçabilité, export, financement. Sur devis.",
    'en_bref' => "Cette page s'adresse aux coopératives, aux acheteurs et magasiniers des maisons de négoce, aux responsables qualité, traçabilité et export de l'agro-industrie : cacao, café, cajou, coton, karité, céréales ou soja. Elle décrit ce que l'intelligence artificielle, les formulaires de terrain et les logiciels de gestion changent dans une campagne de collecte, ce qu'ils ne doivent jamais faire à la place des personnes qui pèsent, paient et signent, et un parcours type de deux jours en quatre demi-journées. La formation se tient en intra, en inter, à distance ou en formule hybride, de préférence entre deux campagnes ; son prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Technique et terrain',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : la campagne vue comme une chaîne de données, du producteur au lot",
            'duree'  => '3 h 30',
            'points' => [
                "Dessiner au tableau la campagne réelle de l'équipe : recensement des producteurs, achat bord champ ou au magasin, pesée, paiement, mise en sacs, transfert vers le magasin central, constitution des lots, chargement.",
                "Repérer à chaque étape la donnée qui naît (nom, parcelle, poids, humidité, prix, numéro de sac ou de scellé) et la personne qui en répond.",
                "Le fichier des producteurs : identifiant unique, groupement, village, téléphone, parcelles, et ce qu'il ne faut pas y mettre.",
                "Faire résumer par un assistant d'IA un contrat d'achat ou un cahier des charges d'acheteur en anglais, puis vérifier chaque clause résumée sur le texte d'origine.",
                "Ce qui ne passe jamais par un compte d'IA personnel : liste nominative des producteurs avec leurs téléphones et leurs parcelles, relevés de paiement, identifiants des plateformes officielles.",
                "Exercice : retrouver, à partir d'un numéro de lot fictif, les producteurs, les tickets de pesée et les paiements qui le composent, en moins de vingt minutes.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : collecter sur le terrain sans réseau, parcelles et pesées comprises",
            'duree'  => '3 h 30',
            'points' => [
                "Construire un formulaire de collecte sur téléphone (KoboToolbox ou outil équivalent) : listes fermées pour les villages et les groupements, contrôles de cohérence sur les poids et les prix, photo du ticket de pesée.",
                "Relever un point GPS et un polygone de parcelle : précision affichée, nombre de décimales, parcelles de plus de quatre hectares, erreurs typiques sur le terrain.",
                "Le ticket de pesée comme pièce : numéro, date, bascule utilisée, poids brut, tare des sacs, poids net, signature ou empreinte du producteur.",
                "Synchroniser au retour du réseau, repérer les doublons et les fiches incomplètes, corriger avec une trace écrite plutôt qu'en silence.",
                "Informer le producteur de ce qui est collecté, pourquoi et pour combien de temps, dans sa langue.",
                "Exercice : chaque participant enregistre un producteur fictif, deux parcelles et trois pesées, hors connexion, puis synchronise et contrôle les données d'un collègue.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : magasins, lots et stocks dans Odoo, Dolibarr ou le tableur, jusqu'à l'état exigé par la banque",
            'duree'  => '3 h 30',
            'points' => [
                "Réceptionner au magasin central avec un numéro de lot, des emplacements nommés et le rapprochement entre les poids annoncés par les points d'achat et les poids repesés.",
                "Suivre les pertes de poids (séchage, freinte, sacs abîmés) et les écarts d'inventaire, avec une explication écrite pour chacun.",
                "Valoriser un stock de produits interchangeables au coût moyen pondéré ou selon la règle du premier entré, premier sorti, et s'y tenir.",
                "Tenir un stock donné en gage séparé des autres et produire à la demande l'état des marchandises gagées et des mouvements qui les concernent.",
                "Un tableau de bord de campagne : tonnage acheté par zone, prix moyen, stock disponible, stock engagé, stock gagé, avances aux coopératives.",
                "Exercice : de vingt tickets de pesée à un lot prêt à expédier, avec son coût de revient et sa fiche de traçabilité.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : export, exigences des acheteurs, messages aux producteurs, puis évaluation",
            'duree'  => '3 h 30',
            'points' => [
                "Le dossier de traçabilité d'un lot exporté vers l'Union européenne : description, quantité en kilogrammes nets, pays de production, géolocalisation de toutes les parcelles, fournisseurs et clients, période de production.",
                "Préparer avec l'IA la réponse à un questionnaire d'acheteur, en ne citant que des données vérifiées et en signalant celles qui manquent.",
                "Des messages WhatsApp aux producteurs et aux groupements (passage du camion, prix du jour affiché, reçu de paiement) relus avant envoi dès qu'ils annoncent un montant.",
                "Les fraudes de campagne : faux reçus de paiement, changement de numéro de mobile money par message, sacs recyclés d'une campagne à l'autre, parcelles prêtées.",
                "Évaluation : chaque participant reconstitue seul la traçabilité d'un lot simulé et rédige la note qui l'accompagne, puis reçoit sa fiche réflexe.",
            ],
        ],
        [
            'titre'  => "Avant l'ouverture de la campagne suivante, à distance : la répétition générale",
            'duree'  => '2 heures',
            'points' => [
                "Les formulaires de terrain mis à jour, testés sur les téléphones des acheteurs et des délégués de collecte.",
                "Les fichiers des producteurs nettoyés : doublons fusionnés, parcelles manquantes listées, consentements à jour.",
                "Le tableau de bord de campagne vidé de ses données d'essai et la liste des personnes autorisées relue.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Coopératives, acheteurs, magasiniers, responsables qualité, traçabilité et export, direction financière des maisons de négoce et de l'agro-industrie"],
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, plus une séance à distance avant la campagne suivante"],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 12 personnes au plus en salle'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent pour l'agro-industrie et le négoce agricole ?",
            'paragraphes' => [
                "Une campagne de cacao, de cajou ou de coton se joue en quelques mois et sur des centaines de points d'achat. Un délégué de coopérative pèse des sacs devant un magasin de village, note le poids dans un carnet, paie en espèces ou par mobile money, puis un camion ramasse la marchandise vers un magasin central où tout est repesé. Plus loin, un responsable export rassemble des certificats, un acheteur européen réclame des coordonnées de parcelles, une banque demande l'état du stock qu'elle a financé. Entre ces étapes, des chiffres sont recopiés trois ou quatre fois. C'est là que l'IA, la digitalisation et l'automatisation changent le métier.",
                "Le premier changement vient des acheteurs et des réglementations. Le règlement (UE) 2023/1115 sur les produits zéro déforestation demande, pour le cacao, le café, l'huile de palme, le soja, le caoutchouc, le bois et les bovins, la géolocalisation de toutes les parcelles d'origine. Selon la Commission européenne, il s'applique aux grandes et moyennes entreprises à partir du 30 décembre 2026. En Côte d'Ivoire, l'Agence ivoirienne de presse indiquait le 12 août 2026 que le système national de traçabilité du café et du cacao, fondé sur la carte du producteur, le terminal de paiement électronique et des scellés posés sur les lots, s'applique à tous les producteurs depuis le 1er septembre 2026.",
                "Le deuxième changement est l'arrivée des outils dans la main des équipes de terrain. Un formulaire sur téléphone enregistre un producteur, une parcelle et une pesée sans réseau, puis les envoie le soir. Un logiciel de gestion relie chaque sac à un lot, chaque lot à un magasin, chaque mouvement à une pièce. Un assistant d'IA résume un contrat d'achat en anglais, traduit un cahier des charges, prépare la réponse à un questionnaire d'acheteur ou repère des incohérences dans un fichier de mille producteurs. Il le fait vite, et il se trompe avec aplomb dès qu'une donnée manque.",
                "Le troisième changement touche l'argent de la campagne. Une banque qui finance des achats sur stock attend un état fiable des marchandises gagées ; un exportateur qui perd la trace d'un lot perd aussi son prix. La formation part de ces trois chantiers avec une règle constante : l'outil enregistre, rapproche et prépare, la personne qui pèse, paie ou signe reste responsable. Richard SALANON n'exerce ni le métier d'acheteur ni celui d'exportateur ; il forme à l'usage des outils, sur les fichiers, les formulaires et les logiciels que la structure utilise déjà.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'une campagne de collecte un outil peut-il préparer, et que gardent l'acheteur, le magasinier ou le responsable qualité ?",
            'legende' => "Répartition proposée en formation, ajustée avec chaque structure. La dernière colonne donne le contrôle à installer dès qu'un outil intervient dans la tâche.",
            'entetes' => ['Tâche', "Ce que l'outil prépare", 'Ce que la personne garde', 'Garde-fou'],
            'lignes'  => [
                ['Enregistrement des producteurs', "Fiche sur téléphone, identifiant unique, détection des doublons par nom, village et téléphone", "La rencontre avec le producteur et l'explication de ce qui est collecté", "Aucun producteur créé sans être vu ; fusion des doublons validée par le responsable de zone"],
                ['Géolocalisation des parcelles', "Relevé du point ou du polygone, contrôle du nombre de décimales et de la surface calculée", "La marche du périmètre avec le producteur, sur sa parcelle réelle", "Jamais de coordonnées copiées d'une autre fiche ni tracées de mémoire sur une carte"],
                ['Pesée', "Saisie du poids brut, de la tare et du poids net, photo du ticket", "La lecture de la bascule devant le producteur", "Bascule vérifiée, ticket numéroté, poids jamais corrigé sans trace écrite"],
                ['Contrôle qualité à la réception', "Enregistrement de l'humidité, du grainage, du rendement ou des défauts mesurés", "La mesure elle-même et la décision d'accepter, de déclasser ou de refuser", "Mesure faite devant le vendeur, résultat noté avant la négociation du prix"],
                ['Paiement', "Calcul du montant, reçu, envoi par mobile money ou terminal de paiement", "La validation de chaque paiement et la remise du reçu", "Deux personnes pour les gros montants ; numéro de paiement jamais modifié sur simple message"],
                ['Constitution des lots', "Rattachement des sacs et des tickets au lot, étiquettes, numéros de scellés", "Le choix de ce qui est mélangé ou séparé", "Lots tracés jamais mélangés avec des sacs d'origine inconnue"],
                ['Stock et magasins', "Mouvements, emplacements, pertes de poids, valorisation", "Le comptage physique et l'explication des écarts", "Inventaire signé ; stock gagé tenu à part et identifié comme tel"],
                ["Dossier d'export", "Rassemblement des pièces, tableau de traçabilité, brouillon de réponse aux acheteurs", "La vérification de chaque donnée transmise et la signature", "Aucune donnée envoyée à un acheteur sans source interne identifiée"],
                ['Messages aux producteurs', "Rédaction des avis de passage, des prix affichés, des reçus", "Toute annonce de prix, de prime ou de retenue", "Relecture humaine avant envoi dès qu'un montant apparaît"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qu'est-ce qu'un outil ne doit jamais faire dans une filière agricole, et quels textes le disent ?",
            'intro' => "Les limites qui suivent reposent sur des textes lus dans leur version officielle. Leur application à un cas précis relève du conseil juridique de la structure, de sa banque ou de l'autorité compétente, pas du formateur.",
            'items' => [
                ['titre' => "Inventer ou compléter une géolocalisation", 'texte' => "L'article 9 du règlement (UE) 2023/1115 impose de recueillir la géolocalisation de toutes les parcelles sur lesquelles ont été produits les produits de base, avec la date ou la période de production. Son article 2 définit cette géolocalisation : au moins un point de latitude et de longitude avec six décimales, et un polygone pour les parcelles de plus de quatre hectares, sauf pour les bovins. Un outil qui « devine » une parcelle manquante à partir de celles du voisin fabrique une fausse preuve."],
                ['titre' => "Effacer les preuves trop tôt", 'texte' => "Le même article 9 demande de conserver ces informations cinq ans à compter de la mise sur le marché ou de l'exportation, et l'article 12 étend ce délai à l'ensemble des documents de diligence raisonnée. Dans l'espace OHADA, l'article 24 de l'Acte uniforme relatif au droit comptable impose de garder dix ans les livres comptables et les pièces justificatives, tickets de pesée et reçus de paiement compris. Un nettoyage automatique des téléphones ou du serveur doit respecter ces durées."],
                ['titre' => "Mélanger un stock gagé avec le reste du magasin", 'texte' => "Selon l'article 101 de l'Acte uniforme portant organisation des sûretés, lorsque le gage avec dépossession porte sur des choses fongibles, comme des sacs de maïs ou de fèves, le créancier ou le tiers convenu doit sauf clause contraire les tenir séparées des choses de même nature. Un logiciel de stock qui ne distingue pas le stock gagé du stock libre rend cette séparation invisible, donc invérifiable."],
                ['titre' => "Livrer un stock gagé avant que le prix soit consigné", 'texte' => "L'article 124 du même Acte uniforme laisse au débiteur qui a émis un bordereau de gage de stocks le droit de vendre ces stocks, mais il ne peut livrer les biens vendus qu'après consignation du prix auprès de l'établissement domiciliataire. Un bon de sortie généré automatiquement à la confirmation d'une commande ignore cette condition ; il faut une étape de validation qui la vérifie."],
                ['titre' => "Corriger une pesée ou un inventaire sans trace", 'texte' => "L'article 16 de l'Acte uniforme relatif au droit comptable fait reposer l'inventaire sur le relevé physique de chaque élément, avec sa nature, sa quantité et sa valeur, et demande que les données d'inventaire soient conservées de manière à justifier ce qui a été recensé. Un poids modifié dans un tableur pour « tomber juste » détruit cette justification. Toute correction se fait par une écriture d'ajustement datée, motivée et signée."],
                ['titre' => "Partager le fichier des producteurs sans formalité", 'texte' => "En Côte d'Ivoire, l'article 7 de la loi n° 2013-450 du 19 juin 2013 soumet à autorisation préalable de l'Autorité de protection les traitements portant sur un identifiant comme les numéros de téléphone, les données biométriques et tout transfert envisagé vers un pays tiers, défini par la loi comme un État non membre de la CEDEAO. Au Bénin, l'article 391 de la loi n° 2017-20 subordonne le transfert vers un État tiers à un niveau de protection équivalent constaté par l'Autorité et à son autorisation préalable."],
                ['titre' => "Exclure un producteur sur la seule décision d'un algorithme", 'texte' => "Un score de risque calculé sur des images satellites ou sur l'historique des livraisons peut aider à cibler les visites. Il ne décide pas seul. Dans l'Union européenne, l'article 22 du RGPD donne à chacun le droit de ne pas faire l'objet d'une décision fondée exclusivement sur un traitement automatisé qui l'affecte de manière significative. La formation applique la même règle partout : une exclusion se décide après une visite et un échange avec le producteur."],
                ['titre' => "Laisser un assistant annoncer un prix ou une prime", 'texte' => "Un message automatique qui annonce un prix d'achat, une prime de qualité ou une retenue engage la structure qui l'envoie. Les prix de référence d'une campagne, quand ils existent, se reprennent sur le texte officiel du jour, et toute annonce chiffrée passe par une personne habilitée avant d'atteindre un groupement de producteurs."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un polygone tracé sur une carte ou une image satellite ne prouve-t-il rien à lui seul ?",
            'texte' => "Parce qu'il décrit un contour, pas un droit ni une récolte. Un polygone dessiné au bureau sur une image satellite peut englober la parcelle du voisin, une jachère ou une forêt ; un point relevé au bord de la route plutôt que dans la plantation peut se retrouver à plusieurs centaines de mètres du lieu réel. Le règlement européen exige six décimales, ce qui correspond à une précision de l'ordre du décimètre sur le papier, bien au-delà de ce qu'un téléphone garantit sous un couvert d'arbres. La formation apprend donc à relever la parcelle en la parcourant avec le producteur, à noter la précision affichée par l'appareil, à refuser les coordonnées identiques sur deux fiches et à garder la trace de qui a relevé quoi, et quand.",
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages, en situations types, dans une coopérative, un magasin de collecte ou une maison de négoce ?",
            'items' => [
                ['secteur' => "Coopérative de cacao, dans la région de Soubré (Côte d'Ivoire)", 'probleme' => "Situation type : l'acheteur européen de la coopérative réclame la géolocalisation de toutes les parcelles avant de signer les contrats de la prochaine campagne. Le fichier des membres est un tableur de huit cents lignes, sans identifiant unique, avec des parcelles relevées par trois prestataires différents et des noms écrits de plusieurs façons.", 'solution' => "Un identifiant par producteur repris de sa carte, une fusion des doublons validée par les délégués de section, un formulaire de relevé des parcelles avec contrôle des décimales et de la surface, la liste des parcelles manquantes traitée village par village, et un tableau qui relie chaque lot vendu aux parcelles de ses fournisseurs."],
                ['secteur' => "Acheteur de noix de cajou brutes, à Korhogo (Côte d'Ivoire)", 'probleme' => "Situation type : les pisteurs mesurent l'humidité et le rendement en amandes sur des échantillons, mais les résultats restent dans leurs carnets ; au magasin central, personne ne sait plus quel lot correspond à quel résultat, et les réclamations des transformateurs ne peuvent pas être remontées.", 'solution' => "Le résultat de l'échantillon saisi sur le téléphone au moment de l'achat, avec la photo de l'étiquette du sac, le lot qui hérite des résultats de ses achats, et un tableau de bord qui compare la qualité annoncée et la qualité mesurée à l'arrivée, zone par zone."],
                ['secteur' => "Union de groupements de femmes productrices de karité, dans le nord du Bénin", 'probleme' => "Situation type : des centaines de collectrices livrent de petites quantités d'amandes ; les pesées sont notées sur des feuilles volantes, les paiements par mobile money sont faits depuis un téléphone personnel, et l'acheteur certifié biologique demande la liste des collectrices de chaque lot.", 'solution' => "Une fiche par collectrice et par groupement, une pesée saisie sur une tablette partagée et confirmée par un reçu vocal ou un SMS, des paiements faits depuis un compte de l'union avec double validation, et un lot qui garde la liste de ses collectrices pour l'acheteur."],
                ['secteur' => "Négociant en maïs et en soja, entre Bohicon et Malanville (Bénin)", 'probleme' => "Situation type : la banque qui finance les achats sur stock demande chaque mois l'état des marchandises gagées ; le négociant l'établit à la main à partir de trois magasins, avec des écarts qu'il ne sait pas expliquer et des sorties faites avant le règlement du client.", 'solution' => "Un logiciel de stock où les marchandises gagées sont dans un emplacement distinct, un bon de sortie bloqué tant que le prix n'est pas consigné, des pertes de poids enregistrées avec leur motif, et un état mensuel produit directement depuis les mouvements."],
                ['secteur' => "Coopérative de café arabica, dans l'Ouest du Cameroun", 'probleme' => "Situation type : la plupart des plantations font moins de quatre hectares ; un consultant a proposé de tracer toutes les parcelles sur une carte satellite pour gagner du temps, sans passer dans les villages.", 'solution' => "Un point relevé dans chaque plantation, de jour, par le délégué de section avec le producteur, un polygone pour les rares parcelles plus grandes, la précision du téléphone notée sur chaque fiche, et un échantillon de parcelles revisité chaque mois pour contrôler la qualité des relevés."],
                ['secteur' => "Organisme stockeur de céréales, dans le nord-est de la France", 'probleme' => "Situation type : les déclarations mensuelles de collecte et de stocks sont refaites à la main à partir du logiciel de silo, et les rappels de lots d'un client meunier mobilisent deux personnes pendant deux jours.", 'solution' => "Des états préparés depuis les mouvements du logiciel et contrôlés avant envoi, une traçabilité amont et aval testée deux fois par an sur un lot pris au hasard, et un assistant d'IA réservé à la rédaction des notes internes, sur un compte professionnel."],
                ['secteur' => "Importateur de fèves de cacao, à Anvers (Belgique)", 'probleme' => "Situation type : l'importateur doit déposer ses déclarations de diligence raisonnée pour des lots venus de plusieurs coopératives ; les fichiers de coordonnées arrivent dans des formats différents, avec des décimales tronquées.", 'solution' => "Un modèle de fichier unique envoyé aux fournisseurs avant la campagne, un contrôle automatique des formats et des décimales à la réception, les anomalies renvoyées au fournisseur par écrit, et aucune coordonnée corrigée par l'importateur lui-même."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils et systèmes une coopérative ou une maison de négoce travaille-t-elle, et que faut-il en savoir ?",
            'legende' => "Informations relevées début octobre 2026 sur les pages officielles des éditeurs et des administrations. Les licences et abonnements restent au nom de la structure ; la formation s'appuie sur les outils qu'elle utilise déjà.",
            'entetes' => ['Outil ou système', 'Usage dans la filière', "Ce qu'il faut savoir", 'Formation liée'],
            'lignes'  => [
                ['KoboToolbox et KoboCollect', "Recensement des producteurs, relevé des parcelles, fiches d'achat et de pesée sur téléphone, hors connexion", "Gratuit pour les organisations à but non lucratif ; pour une entreprise, l'offre Starter coûte 25 dollars par mois en paiement mensuel pour 1 000 soumissions, l'offre Community 99 dollars pour 5 000 soumissions", '<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>'],
                ['Odoo, Inventaire et Achats', "Réceptions par lot, emplacements, traçabilité amont et aval, achats aux producteurs", "La documentation d'Odoo 20.0 décrit les lots comme des groupes de produits reçus, stockés, expédiés ou fabriqués ensemble, suivis par un rapport de traçabilité ; l'abonnement Standard coûte 19,90 euros par utilisateur et par mois la première année en paiement annuel", '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Dolibarr, modules Stocks et Lot/Série', "Stocks par entrepôt, numéros de lot, dates limites, expéditions", "Selon le wiki de Dolibarr, le module est livré en standard ; quand un produit exige un numéro de lot, aucun mouvement de stock n'est accepté sans ce numéro", '<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['Tableur (Excel, Google Sheets)', "Fichier des producteurs, suivi des avances, tableau de bord de campagne", "Suffisant pour une petite structure ; dès que plusieurs points d'achat saisissent en même temps, il faut des droits, des listes fermées et des totaux de contrôle", '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Carte du producteur, terminal de paiement et scellés (Côte d\'Ivoire)', "Identification des producteurs de café et de cacao, enregistrement des transactions, suivi des lots", "Selon l'AIP, la carte relie chaque produit à un producteur identifié, à une parcelle géolocalisée et à une transaction ; le système s'applique à tous les producteurs depuis le 1er septembre 2026", "Procédures et formations de l'organe de régulation de la filière"],
                ["Système d'information de l'Union européenne", "Dépôt des déclarations de diligence raisonnée par les opérateurs qui mettent les produits sur le marché européen", "La Commission annonçait le 4 mai 2026 une mise à jour, avec un formulaire simplifié pour les micro et petits opérateurs primaires et des interfaces automatisées révisées", '<a href="/formations/integrations-api-no-code">Intégrations API en no-code</a>'],
                ['WhatsApp relié au logiciel de gestion', "Avis de passage du camion, reçus, rappels aux groupements", "Depuis le 1er octobre 2026, Meta accorde à chaque numéro professionnel 1 000 messages de service gratuits par mois, non reportables, facturés au-delà", '<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>'],
                ["Assistants d'IA (ChatGPT, Claude, Gemini, Copilot)", "Résumé de contrats, traduction de cahiers des charges, réponses aux questionnaires d'acheteurs, contrôle de fichiers", "Sur un compte professionnel administré, avec des fichiers sans noms ni téléphones dès que possible ; jamais pour produire une donnée de traçabilité", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['Bascules et ponts-bascules', "Pesée des sacs au point d'achat, pesée des camions au magasin central", "La recommandation internationale OIML R 76-1 (édition 2006) encadre ces instruments de pesage à fonctionnement non automatique, ponts-bascules compris ; la vérification relève de la réglementation de chaque pays", "Procédures du service de métrologie du pays"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Que contient le parcours type d'une coopérative ou d'une maison de négoce, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours s'adapte-t-il à chaque poste de la filière ?",
            'legende' => "Les demi-journées peuvent se suivre séparément ; ces combinaisons sont les plus fréquentes et se fixent au premier échange.",
            'entetes' => ['Poste', 'Demi-journées conseillées', 'Ce que la personne repart en sachant faire'],
            'lignes'  => [
                ['Délégué de coopérative, pisteur ou acheteur de terrain', 'Jour 1 après-midi, jour 2 après-midi', "Enregistrer un producteur et une parcelle, saisir une pesée et un résultat qualité hors connexion, envoyer un reçu sans erreur de montant"],
                ['Magasinier ou chef de magasin', 'Jour 1 matin, jour 2 matin', "Réceptionner par lot, repeser, expliquer une perte de poids, tenir à part un stock gagé, mener un inventaire jusqu'à sa signature"],
                ['Responsable qualité ou certification', 'Jour 1 matin et après-midi, jour 2 après-midi', "Relier les mesures aux lots, préparer un audit de certification ou une visite d'acheteur avec des données vérifiables"],
                ['Responsable traçabilité ou export', 'Les quatre', "Reconstituer l'origine d'un lot jusqu'aux parcelles, assembler le dossier d'un acheteur européen, répondre à un questionnaire sans affirmer ce qui n'est pas prouvé"],
                ['Direction financière ou trésorerie de campagne', 'Jour 2 matin', "Suivre avances, achats et stock gagé, produire l'état demandé par la banque, contrôler les paiements aux producteurs"],
                ['Conseil d\'administration ou direction de coopérative', 'Jour 1 matin, jour 2 après-midi', "Fixer les règles d'usage de l'IA, de partage du fichier des membres et de conservation des pièces, et savoir lire le tableau de bord de campagne"],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la formation se prépare-t-elle entre deux campagnes, sans que le formateur reçoive le fichier des producteurs ?",
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => "Vous décrivez les produits achetés, les zones de collecte, le nombre de points d'achat et de magasins, les acheteurs et leurs exigences, les outils en place et ce qui coûte le plus aujourd'hui : écarts de poids, lots impossibles à tracer, état de stock demandé par la banque. Le premier échange, le cadrage et le devis sont gratuits."],
                ['titre' => 'Choix de la période', 'duree' => 'Selon le calendrier agricole', 'texte' => "La formation se place de préférence pendant l'intercampagne, quand les équipes de terrain sont disponibles et que les outils peuvent être modifiés sans risque. Pendant une campagne, seules des séances courtes à distance sont proposées, sur un problème précis."],
                ['titre' => 'Fichiers d\'exercice', 'duree' => 'Deux semaines avant', 'texte' => "La structure prépare un extrait de ses fichiers où les noms, téléphones, numéros de carte et coordonnées des parcelles sont remplacés par des valeurs fictives, en gardant les défauts réels : doublons, poids aberrants, décimales manquantes. Le formateur ne reçoit aucune donnée nominative de producteur."],
                ['titre' => 'Accord du responsable', 'duree' => 'Avant la session', 'texte' => "Le directeur, le gérant de la coopérative ou le responsable de la traçabilité valide les règles qui seront enseignées : qui crée un producteur, qui corrige une pesée, qui valide un paiement, combien de temps chaque pièce se garde. La formation enseigne des règles décidées par la structure, pas des règles du formateur."],
                ['titre' => 'Animation', 'duree' => 'Demi-journées de 3 h 30', 'texte' => "Chaque séquence part d'une situation de campagne, passe par le texte ou l'exigence d'acheteur qui s'applique, puis par le geste dans l'outil, sur le téléphone ou l'ordinateur de chaque participant. Les exercices de terrain se font dehors quand le lieu le permet."],
                ['titre' => 'Supports et suite', 'duree' => 'Fin de session, puis avant la campagne', 'texte' => "Modèles de formulaire de collecte, de ticket de pesée, de fiche de lot et d'état de stock gagé, fiche réflexe sur les fraudes, attestation nominative ; puis une séance à distance d'environ deux heures pour vérifier que tout est prêt avant l'ouverture des achats."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir pour une coopérative, une maison de négoce ou un service export ?",
            'legende' => "Les formats se combinent : un atelier de direction d'abord, puis des demi-journées par poste, en salle, sur le terrain ou à distance.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Situation type'],
            'lignes'  => [
                ['Atelier de direction', 'Deux heures', "Direction, responsable traçabilité, responsable financier, élus de la coopérative", "Décider des règles de collecte, de partage des données et d'usage de l'IA avant de former les équipes"],
                ['Parcours complet, intra', '2 jours en 4 demi-journées', '12 personnes au plus', "Coopérative ou maison de négoce qui veut une même méthode du point d'achat au conteneur"],
                ['Module terrain', 'Une demi-journée', "Délégués, pisteurs, acheteurs d'une même zone", "Formulaires, parcelles et pesées, juste avant l'ouverture de la campagne"],
                ['Session inter', '1 ou 2 jours', 'Une à trois personnes par structure', "Petites coopératives et négociants indépendants, avec des fichiers fictifs communs"],
                ['À distance', 'Séances de 2 heures', '8 personnes au plus', "Équipes réparties entre un siège en ville, des magasins en zone de production et un acheteur en Europe"],
                ['Hybride', 'Une demi-journée en salle, puis séances à distance', '12 personnes au plus', "Prise en main au siège, puis application aux fichiers réels de la structure, zone par zone"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe de l'agro-industrie ou du négoce, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est affiché : chaque formule est chiffrée sur devis après le premier échange, et le devis précise ce qu'il comprend. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux logiciels, aux outils de collecte et aux assistants d'IA restent payés par la structure à leurs éditeurs.",
            'items'      => [
                ['offre' => 'Atelier de direction', 'prix' => 'Sur devis', 'inclus' => ['Deux heures avec la direction et les responsables', "Règles de collecte, de partage des données et d'usage de l'IA mises par écrit", 'Recommandations pour la suite']],
                ['offre' => 'Module ciblé', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée : terrain, magasins, export ou financement', 'Exercices sur vos fichiers rendus anonymes', 'Modèles modifiables et attestation']],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Formulaire de collecte, fiche de lot et état de stock gagé construits en séance', "Évaluation sur un lot simulé", 'Séance à distance avant la campagne suivante']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, et le nombre de zones de collecte concernées.",
                "Les modules retenus et le nombre de demi-journées.",
                "Les outils couverts : formulaire de terrain, Odoo, Dolibarr, tableur, messagerie.",
                "Le temps de préparation des fichiers d'exercice et des modèles.",
                "Le lieu : vos bureaux, un magasin en zone de production, un autre pays, ou la distance.",
                "La langue des séances et des supports, français ou anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation d'une coopérative ou d'une entreprise du négoce agricole ?",
            'paragraphes' => [
                "Le plus souvent, la structure paie elle-même. Une coopérative peut aussi trouver une part du financement auprès d'un fonds de formation professionnelle, d'un acheteur qui accompagne ses fournisseurs dans la traçabilité ou d'un programme de développement de la filière. Aucune de ces prises en charge n'est promise ici : la règle prudente consiste à envoyer le programme et le devis au financeur, puis à attendre sa réponse écrite avant de fixer les dates.",
                "En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> réserve le plan de formation aux entreprises à jour de la taxe d'apprentissage et de la taxe additionnelle à la formation continue. Au Bénin, le FODEFCA fonctionne selon des statuts approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> ouvre un guichet au personnel des entreprises. Les conditions visant l'organisme de formation, comme la part restant à la charge de la structure, se demandent directement à chaque fonds.",
                "En France, selon <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a>, les fonds publics et mutualisés ne financent depuis le 1er janvier 2022 que des prestataires certifiés Qualiopi, ce que Richard SALANON n'est pas : un négociant ou une coopérative français règle donc la formation sur ses fonds propres, sauf réponse écrite contraire de son opérateur de compétences. Feuilles d'émargement, programme et attestation sont remis dans tous les cas ; ils documentent aussi l'effort de maîtrise de l'IA que l'article 4 du règlement européen sur l'IA attend, depuis le 2 février 2025, des entreprises qui utilisent ces systèmes.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les coopératives et les maisons de négoce qui s'outillent seules ?",
            'intro' => "Elles naissent presque toutes de la pression de la campagne : un camion qui attend, un producteur qui veut être payé, un acheteur qui veut sa liste de parcelles pour vendredi.",
            'items' => [
                ['titre' => "Changer d'outil en pleine campagne", 'texte' => "Le nouveau logiciel arrive en novembre, les équipes saisissent dans deux systèmes, et en février plus personne ne sait lequel fait foi. Un changement d'outil se prépare pendant l'intercampagne, avec une date de bascule unique et l'ancien fichier gelé en lecture seule."],
                ['titre' => "Créer un producteur à chaque achat", 'texte' => "Faute de recherche avant création, le même planteur apparaît sous quatre orthographes et quatre téléphones. Les volumes par producteur deviennent faux, et la traçabilité aussi. La recherche par identifiant, téléphone et village précède toute création, et un responsable fusionne les doublons chaque semaine."],
                ['titre' => "Recopier les coordonnées d'une fiche à l'autre", 'texte' => "Pour finir plus vite, un enquêteur réutilise le point d'une parcelle voisine. Les coordonnées identiques sur deux fiches se détectent en une formule ; elles se signalent et se refont sur place, jamais au bureau."],
                ['titre' => "Payer sur un numéro reçu par message", 'texte' => "Un message prétend venir d'un producteur qui a « changé de numéro » de mobile money. Le numéro de paiement se modifie uniquement en présence du producteur ou de son délégué, avec une trace dans la fiche, et les paiements importants passent par deux validations."],
                ['titre' => "Confier le fichier des membres à un assistant gratuit", 'texte' => "Le fichier complet, noms, téléphones et parcelles, est collé dans un assistant d'IA pour « trouver les doublons ». La même recherche se fait sur un extrait sans données nominatives, ou dans le logiciel de la structure, et les données des producteurs restent sur des comptes administrés par elle."],
                ['titre' => "Laisser les pertes de poids sans explication", 'texte' => "Entre le point d'achat et le magasin central, le stock fond de deux ou trois pour cent sans que personne ne sache pourquoi : séchage, sacs percés, erreurs de saisie ou vols. Chaque écart se note avec son motif, par trajet et par magasin, pour distinguer l'inévitable de l'anormal."],
                ['titre' => "Mélanger les lots tracés et les autres", 'texte' => "Pour compléter un conteneur, des sacs sans origine connue rejoignent un lot tracé. Le lot entier perd sa valeur de preuve. Les emplacements séparés et le numéro de lot obligatoire à chaque mouvement rendent ce mélange visible avant qu'il soit fait."],
                ['titre' => "Répondre aux acheteurs avec des chiffres arrondis", 'texte' => "Un questionnaire demande la part des volumes géolocalisés ; quelqu'un répond « presque tout ». Chaque chiffre transmis se calcule depuis le fichier, avec sa date, et ce qui manque se dit clairement, accompagné du plan pour le combler."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Gage de stocks, bordereau, tiers détenteur : que demande la banque qui finance une campagne, et comment un registre de stock propre y répond-il ?",
            'paragraphes' => [
                "Dans l'espace OHADA, l'Acte uniforme portant organisation des sûretés, adopté à Lomé le 15 décembre 2010 et entré en vigueur le 15 mai 2011, prévoit à son article 120 que les matières premières, les produits d'une exploitation agricole ou industrielle et les marchandises peuvent faire l'objet d'un gage. L'article 121 permet, pour un gage de stocks sans dépossession, l'émission par le greffe d'un bordereau de gage de stocks ; l'acte doit alors nommer l'assureur qui couvre les stocks contre le vol, l'incendie et la détérioration, ainsi que l'établissement domiciliataire. Selon l'article 122, ce bordereau vaut cinq ans, sauf convention contraire ou renouvellement.",
                "L'article 110 donne au créancier un droit qui concerne directement les outils : à tout moment, et aux frais du débiteur, il peut obtenir du constituant ou du tiers convenu un état de l'ensemble des biens gagés et la comptabilité de toutes les opérations qui les concernent. Quand le gage porte sur un ensemble de biens fongibles, il peut aussi exiger que leur valeur soit maintenue. Autrement dit, la banque peut demander à tout moment ce qui est en magasin, ce qui est entré et ce qui est sorti. Un négociant qui tient ses mouvements par lot et par emplacement répond en quelques minutes ; celui qui reconstitue l'état à partir de carnets met plusieurs jours, et la confiance s'en ressent.",
                "La formation ne remplace ni le conseil juridique ni l'analyse de la banque. Elle apprend à tenir le stock de façon à ce que ces textes soient faciles à respecter : un emplacement distinct pour la marchandise gagée, un mouvement de sortie qui exige la preuve de la consignation du prix, des pertes de poids motivées, et un état mensuel produit depuis le logiciel. Pour la valorisation, l'article 44 de l'Acte uniforme relatif au droit comptable prévoit que les biens interchangeables, impossibles à identifier après leur entrée en stock, s'évaluent soit au coût moyen pondéré, soit selon la règle du premier entré, premier sorti, la même méthode s'appliquant aux stocks de même nature.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que demandent les acheteurs européens depuis le règlement sur la déforestation, et que faut-il garder pour les cinq années suivantes ?",
            'paragraphes' => [
                "Le règlement (UE) 2023/1115 interdit de mettre sur le marché européen, ou d'exporter depuis l'Union, du cacao, du café, de l'huile de palme, du soja, du caoutchouc, du bois, des bovins et certains produits dérivés s'ils ne sont pas zéro déforestation, c'est-à-dire produits sur des terres qui n'ont pas été déboisées après le 31 décembre 2020, et conformes au droit du pays de production. La Commission européenne indique qu'il s'applique le 30 décembre 2026 aux grandes et moyennes entreprises et le 30 juin 2027 aux micro et petites entreprises. Dans son communiqué du 4 mai 2026, elle annonçait des documents d'orientation mis à jour et confirmait viser l'entrée en application à la fin de l'année.",
                "Juridiquement, l'obligation pèse sur l'opérateur qui met le produit sur le marché européen, souvent un importateur ou un broyeur. Dans les faits, il ne peut la remplir qu'avec les données de ses fournisseurs : l'article 9 lui demande, pour chaque produit, une description, la quantité en kilogrammes de masse nette, le pays de production, la géolocalisation de toutes les parcelles, la date ou la période de production, les noms et adresses des fournisseurs et des clients, et des informations vérifiables sur l'absence de déforestation et sur la légalité. Une coopérative ou un exportateur africain qui sait fournir ces éléments, propres et cohérents, devient un fournisseur plus sûr.",
                "La traçabilité alimentaire, elle, est plus ancienne. L'article 18 du règlement (CE) n° 178/2002 impose depuis longtemps aux exploitants européens du secteur alimentaire de pouvoir identifier qui leur a fourni une denrée et à quelles entreprises ils l'ont livrée, et de mettre ces informations à disposition des autorités sur demande. En France, une décision de FranceAgriMer du 20 septembre 2017 oblige les collecteurs de céréales concernés à transmettre chaque mois, avant le 10 du mois suivant et sous forme dématérialisée dans l'application VISIOGrains, leurs déclarations sur les flux et les stocks. Des deux côtés, la même discipline s'impose : une entrée, une sortie, une pièce, une date.",
                "Pour l'archivage, les durées s'additionnent. Les informations de diligence raisonnée se gardent cinq ans dans l'Union ; les pièces comptables dix ans dans l'espace OHADA. Le plus simple est de garder chaque pièce de campagne, fiche de producteur, ticket de pesée, reçu, bon de transfert, au moins dix ans, dans un classement par campagne et par lot, sauvegardé hors du bureau. La formation fait construire ce plan de classement avec le responsable financier et le responsable traçabilité.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés et datés une équipe de l'agro-industrie ou du négoce doit-elle connaître ?",
            'items' => [
                ['valeur' => '13,3 %', 'libelle' => "Part de la nourriture perdue dans le monde en 2023 entre la récolte et la distribution, à la ferme, pendant le transport, le stockage, le commerce de gros et la transformation", 'source' => 'FAO, indicateur 12.3.1 des objectifs de développement durable', 'url' => 'https://www.fao.org/sustainable-development-goals-data-portal/data/indicators/1231-global-food-losses/en'],
                ['valeur' => '23,0 %', 'libelle' => "Même indicateur pour l'Afrique subsaharienne en 2023, la plus élevée des régions, contre 22,1 % en 2015", 'source' => 'FAO, indicateur 12.3.1', 'url' => 'https://www.fao.org/sustainable-development-goals-data-portal/data/indicators/1231-global-food-losses/en'],
                ['valeur' => '30 décembre 2026', 'libelle' => "Entrée en application du règlement européen sur la déforestation pour les grandes et moyennes entreprises ; le 30 juin 2027 pour les micro et petites entreprises", 'source' => 'Commission européenne', 'url' => 'https://environment.ec.europa.eu/topics/forests/deforestation/regulation-deforestation-free-products_en'],
                ['valeur' => '6 décimales', 'libelle' => "Précision minimale des coordonnées d'une parcelle, avec un polygone au-delà de 4 hectares (article 2 du règlement (UE) 2023/1115)", 'source' => 'EUR-Lex, règlement (UE) 2023/1115', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32023R1115'],
                ['valeur' => '1er septembre 2026', 'libelle' => "Date depuis laquelle le système national de traçabilité du café et du cacao s'applique à tous les producteurs en Côte d'Ivoire (article du 12 août 2026)", 'source' => 'Agence ivoirienne de presse', 'url' => 'https://www.aip.ci/cote-divoire-aip-cafe-cacao-les-nouvelles-regles-de-tracabilite-applicables-des-le-1er-septembre-2026-expliquees-aux-acteurs-de-lindenie-djuablin/'],
                ['valeur' => '58 %', 'libelle' => "Part des habitants des zones rurales qui utilisent Internet dans le monde en 2025, contre 85 % en ville ; en Afrique, l'écart entre ville et campagne atteint un rapport de 2,6", 'source' => 'UIT, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use-in-urban-and-rural-areas/'],
                ['valeur' => '5 ans', 'libelle' => "Durée de validité d'un bordereau de gage de stocks, sauf convention contraire ou renouvellement (article 122 de l'Acte uniforme portant organisation des sûretés)", 'source' => 'OHADA, Acte uniforme du 15 décembre 2010', 'url' => 'https://biblio.ohada.org/pmb/opac_css/doc_num.php?explnum_id=483'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour une coopérative ou une maison de négoce ?",
            'legende' => "Chaque fiche a son propre programme. Le parcours métier en reprend ce qui sert à la collecte, aux magasins et à l'export ; les fiches vont plus loin sur un outil ou une méthode.",
            'entetes' => ['Formation', "Ce qu'elle apporte à la filière", 'Pour qui en priorité'],
            'lignes'  => [
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', "Achats, réceptions, lots, emplacements et inventaires dans Odoo, poste par poste", 'Magasiniers, acheteurs, administration des ventes'],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', "Cartographier la chaîne de collecte, repérer les ressaisies et choisir où placer les formulaires de terrain", 'Responsables traçabilité, direction'],
                ['<a href="/formations/data-literacy">Décider avec les données</a>', "Lire un tableau de bord de campagne, questionner un écart de poids ou un rendement anormal avant de décider", 'Direction, élus de coopérative, responsables de zone'],
                ['<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>', "Envoyer avis de passage, reçus et rappels depuis le logiciel, avec l'historique rattaché au producteur ou au groupement", 'Service des achats, délégués de coopérative'],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', "Des fichiers de producteurs et de stocks fiables tant que la structure n'a pas de logiciel : listes fermées, contrôles, totaux", 'Petites coopératives, comptables de campagne'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Les règles de protection des données des producteurs et les limites d'usage des assistants d'IA, pays par pays", 'Direction, responsables traçabilité et certification'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Réseau, saisons, langues, distances : que change le terrain agricole pour les outils numériques ?",
            'paragraphes' => [
                "Les achats se font là où le réseau est le plus faible. Selon les chiffres 2025 de l'Union internationale des télécommunications, 85 % des citadins utilisent Internet dans le monde, mais 58 % seulement des habitants des zones rurales, et l'écart est particulièrement marqué en Afrique. Un outil de collecte qui exige une connexion au moment de la pesée échouera donc au premier village. La formation privilégie des formulaires qui fonctionnent hors ligne, une synchronisation le soir ou au passage au magasin central, et une procédure papier de secours numérotée, ressaisie dans les quarante-huit heures.",
                "Le calendrier agricole décide du reste. Pendant la campagne, personne n'a le temps d'apprendre un outil ni de corriger un fichier de mille producteurs ; pendant l'intercampagne, les délégués sont disponibles, les téléphones peuvent être configurés et les fichiers nettoyés. Les batteries comptent aussi : un téléphone qui relève des points GPS toute la journée se vide vite, et une batterie externe par enquêteur coûte moins cher qu'une journée de relevés perdue.",
                "Les producteurs parlent souvent baoulé, bété, dioula, fon, bariba, dendi, mooré ou bassa, et beaucoup lisent peu le français. L'information sur les données collectées, le reçu de paiement et l'avis de passage du camion gagnent à exister en message vocal dans la langue du village. L'IA aide à préparer ces textes ; une personne qui parle la langue les vérifie à voix haute avant leur diffusion, car une erreur sur un prix ou une date se propage plus vite qu'un correctif.",
                "Côté européen, l'enjeu n'est pas la connexion mais l'exigence de preuve. Un importateur d'Anvers, de Hambourg ou du Havre attend des fichiers dans un format précis, à une date précise, et pose des questions écrites auxquelles il faut répondre par écrit. Une structure qui travaille entre l'Afrique de l'Ouest et l'Europe gagne à appliquer partout la règle la plus exigeante : chaque donnée transmise a une source interne identifiée, et chaque correction laisse une trace.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre coopérative ou votre maison de négoce avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut former des coopératives, des acheteurs, des magasiniers et des équipes d'export de l'agro-industrie et du négoce agricole à ces outils. Il n'exerce aucun de ces métiers, n'est ni auditeur de certification ni expert en géomatique, et ne prétend pas connaître une filière mieux que ceux qui y achètent depuis des années : il apporte la maîtrise des formulaires de collecte, des logiciels de gestion comme Odoo et Dolibarr, des tableurs, des automatisations et des assistants d'IA, et il bâtit chaque exercice sur les fichiers de la structure. Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il cumule " . $ans . " ans d'expérience dans le numérique et compte plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées, tous secteurs confondus.",
                "Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il a travaillé dans " . count((array) fait('pays_travailles')) . " pays, dont le Bénin, la Côte d'Ivoire, le Togo, le Burkina Faso, le Mali, le Niger, la France et la Belgique. Il n'est certifié par aucun éditeur et ne revend aucune licence ; les questions juridiques, réglementaires ou de certification soulevées en séance sont renvoyées au conseil de la structure, à sa banque ou à l'organisme compétent.",
                "Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. Quand la formation fait apparaître un besoin d'outillage, comme un module de collecte relié au logiciel de stock ou des reçus envoyés automatiquement, il relève d'une mission d'<a href=\"/services/integration-odoo\">intégration Odoo</a> ou de <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>. Pour choisir un logiciel, le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo ou Dolibarr</a> pose les critères ; pour mesurer le risque d'une migration mal préparée, l'histoire de la <a href=\"/histoires/tsb-migration\">migration informatique de TSB</a> reste éclairante, et celle du <a href=\"/histoires/air-canada-chatbot\">chatbot d'Air Canada</a> montre qu'une entreprise répond de ce que son assistant automatique affirme. L'offre complète figure dans le <a href=\"/formations/\">catalogue des formations</a>, notamment le domaine <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire une équipe de l'agro-industrie ou du négoce ?",
            'texte' => "Un identifiant unique par producteur, des parcelles relevées sur place et jamais copiées, une pesée lue devant le vendeur et un ticket numéroté, un paiement validé par une personne et jamais redirigé sur simple message, des lots tracés qui ne se mélangent pas, un stock gagé tenu à part, des pièces gardées au moins dix ans, et un fichier des producteurs qui ne sort pas sans autorisation. L'outil enregistre et rapproche ; la personne qui pèse, paie et signe en répond.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre coopérative ou votre équipe de négoce à l'IA et aux outils numériques ?",
            'texte'  => "Indiquez les produits achetés, les zones et le nombre de points d'achat, les outils en place, les exigences de vos acheteurs et de votre banque, le nombre de personnes à former et la période de votre intercampagne : vous recevez une réponse sous 24 heures, puis un programme ajusté et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon équipe'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il déjà utiliser un logiciel ou un assistant d'IA pour suivre la formation ?", 'r' => "Non. Savoir se servir d'un téléphone Android, remplir un tableau et envoyer un message suffit. Les premières heures partent de la campagne réelle de l'équipe, pas de l'outil ; ceux qui utilisent déjà ChatGPT, Claude, Gemini ou Copilot y trouvent surtout une méthode pour s'en servir sans exposer les données des producteurs."],
        ['q' => "Un assistant d'IA peut-il établir la traçabilité de nos lots à notre place ?", 'r' => "Il peut contrôler un fichier, repérer des doublons ou des coordonnées identiques, résumer un cahier des charges et préparer une réponse à un acheteur. Il ne crée aucune donnée de traçabilité : un producteur, une parcelle, une pesée ou un paiement n'existent que s'ils ont été enregistrés sur le terrain par une personne identifiée."],
        ['q' => "Nos parcelles font moins de quatre hectares : faut-il quand même des polygones ?", 'r' => "Selon l'article 2 du règlement (UE) 2023/1115, un point de latitude et de longitude avec au moins six décimales suffit pour une parcelle de quatre hectares ou moins ; le polygone est exigé au-delà, sauf pour les bovins. Certains acheteurs demandent davantage dans leurs contrats : la formation apprend à relever les deux et à noter la précision obtenue."],
        ['q' => "Le règlement européen sur la déforestation s'applique-t-il à une coopérative africaine ?", 'r' => "Il vise les opérateurs et commerçants qui mettent les produits sur le marché de l'Union ou les exportent depuis celle-ci. Une coopérative qui vend à un importateur européen n'est pas soumise au texte de la même façon, mais son acheteur ne peut le respecter qu'avec ses données. L'application à votre situation précise relève de votre conseil ou de votre acheteur."],
        ['q' => "Le cajou, le coton, le karité ou les céréales sont-ils concernés par ce règlement ?", 'r' => "Ils ne figurent pas parmi les produits de base visés par le règlement européen sur la déforestation, qui couvre les bovins, le bois, le cacao, le soja, l'huile de palme, le café et le caoutchouc. Leurs acheteurs ont souvent leurs propres exigences de traçabilité, de qualité ou de certification, et la méthode enseignée s'applique de la même façon à ces filières."],
        ['q' => "Le formateur aura-t-il accès à notre fichier de producteurs ?", 'r' => "Non. Les exercices utilisent un extrait préparé par la structure, où les noms, téléphones, numéros de carte et coordonnées sont remplacés par des valeurs fictives. Les démonstrations sur les plateformes officielles ou sur les comptes de la structure se font sur les écrans de l'équipe, par l'équipe."],
        ['q' => "Peut-on garder les données des producteurs sur un service hébergé à l'étranger ?", 'r' => "C'est possible sous conditions, et elles varient selon le pays. En Côte d'Ivoire, la loi n° 2013-450 soumet à autorisation préalable de l'Autorité de protection le transfert vers un pays tiers ainsi que les traitements portant sur les numéros de téléphone ; au Bénin, la loi n° 2017-20 encadre aussi les transferts. La formation fait dresser la liste des outils utilisés et de l'endroit où ils stockent les données, à valider avec l'autorité compétente."],
        ['q' => "Combien de temps faut-il garder les tickets de pesée et les reçus de paiement ?", 'r' => "Dans l'espace OHADA, l'article 24 de l'Acte uniforme relatif au droit comptable impose dix ans pour les pièces justificatives. Les informations de traçabilité destinées au marché européen se gardent cinq ans selon le règlement (UE) 2023/1115. Garder chaque pièce de campagne au moins dix ans, classée par campagne et par lot, couvre les deux."],
        ['q' => "La formation aide-t-elle à préparer un audit de certification ?", 'r' => "Elle aide à disposer de données vérifiables le jour de l'audit : listes de membres à jour, parcelles relevées, lots reliés à leurs fournisseurs, pièces classées. Elle ne remplace ni le référentiel de l'organisme certificateur ni l'accompagnement d'un spécialiste de la certification, et elle ne garantit aucun résultat."],
        ['q' => "Couvre-t-elle Odoo, Dolibarr ou KoboToolbox ?", 'r' => "Elle couvre leur usage dans une campagne quand la structure les utilise ou les envisage : formulaires de collecte, lots, emplacements, inventaires, états de stock. La prise en main complète relève des formations Odoo pour vos équipes ou Dolibarr pour vos équipes, et le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo ou Dolibarr</a> aide à choisir entre les deux."],
        ['q' => "Combien coûte la formation, et comment la régler ?", 'r' => "Le prix est fixé sur devis, après un premier échange gratuit. Il dépend du nombre de participants, des modules, des outils couverts, du lieu et du format. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Que reçoivent les participants à la fin ?", 'r' => "Les modèles de formulaire de collecte, de ticket de pesée, de fiche de lot et d'état de stock gagé, une fiche réflexe sur les fraudes de campagne et une attestation nominative de fin de formation. Ce n'est ni un diplôme, ni une certification, ni une habilitation d'auditeur."],
    ],

    'sources' => [
        ['titre' => "EUR-Lex, règlement (UE) 2023/1115 relatif aux produits associés à la déforestation (articles 2, 3, 4, 9 et 12)", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32023R1115', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, règlement sur les produits zéro déforestation : dates d'application et produits couverts", 'url' => 'https://environment.ec.europa.eu/topics/forests/deforestation/regulation-deforestation-free-products_en', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, communiqué du 4 mai 2026 sur le réexamen de simplification du règlement sur la déforestation", 'url' => 'https://ec.europa.eu/commission/presscorner/detail/en/ip_26_941', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement (CE) n° 178/2002 établissant les principes généraux de la législation alimentaire (article 18, traçabilité)", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32002R0178', 'date' => '2026-10-05'],
        ['titre' => "OHADA, Acte uniforme portant organisation des sûretés du 15 décembre 2010 (articles 101, 110, 115, 120 à 124)", 'url' => 'https://biblio.ohada.org/pmb/opac_css/doc_num.php?explnum_id=483', 'date' => '2026-10-05'],
        ['titre' => "OHADA, organisation des sûretés : adoption, publication et entrée en vigueur", 'url' => 'https://www.ohada.org/organisation-des-suretes/', 'date' => '2026-10-05'],
        ['titre' => "OHADA, Acte uniforme relatif au droit comptable et à l'information financière (articles 16, 24 et 44)", 'url' => 'https://biblio.ohada.org/doc_num.php?explnum_id=2061', 'date' => '2026-10-05'],
        ['titre' => "Autorité de protection de Côte d'Ivoire, loi n° 2013-450 du 19 juin 2013 relative à la protection des données à caractère personnel (articles 5 et 7)", 'url' => 'https://www.autoritedeprotection.ci/lois/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (article 391)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement (UE) 2016/679 (RGPD), article 22", 'url' => 'https://eur-lex.europa.eu/eli/reg/2016/679/oj', 'date' => '2026-10-05'],
        ['titre' => "Agence ivoirienne de presse, café-cacao : les nouvelles règles de traçabilité applicables dès le 1er septembre 2026 (12 août 2026)", 'url' => 'https://www.aip.ci/cote-divoire-aip-cafe-cacao-les-nouvelles-regles-de-tracabilite-applicables-des-le-1er-septembre-2026-expliquees-aux-acteurs-de-lindenie-djuablin/', 'date' => '2026-10-05'],
        ['titre' => "Agence ivoirienne de presse, SARA 2025 : le Conseil du Café-Cacao engage les producteurs dans la traçabilité (28 mai 2025)", 'url' => 'https://www.aip.ci/cote-divoire-aip-sara-2025-le-conseil-du-cafe-cacao-engage-les-producteurs-dans-la-tracabilite-pour-un-cacao-plus-durable/', 'date' => '2026-10-05'],
        ['titre' => "FAO, indicateur 12.3.1 des objectifs de développement durable : pertes alimentaires mondiales", 'url' => 'https://www.fao.org/sustainable-development-goals-data-portal/data/indicators/1231-global-food-losses/en', 'date' => '2026-10-05'],
        ['titre' => "UIT, Facts and Figures 2025 : usage d'Internet en zones urbaines et rurales", 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use-in-urban-and-rural-areas/', 'date' => '2026-10-05'],
        ['titre' => "FranceAgriMer, décision MEP/D2017-06 du 20 septembre 2017 sur la dématérialisation des déclarations des collecteurs de céréales (VISIOGrains)", 'url' => 'https://info.agriculture.gouv.fr/boagri/document_administratif-006efff4-ebf0-408d-9779-b9aa56f593ef/telechargement', 'date' => '2026-10-05'],
        ['titre' => "OIML, recommandation R 76-1 : instruments de pesage à fonctionnement non automatique (édition 2006)", 'url' => 'https://www.oiml.org/en/files/pdf_r/r076-1-e06.pdf', 'date' => '2026-10-05'],
        ['titre' => "KoboToolbox, tarifs (catégories à but non lucratif et autres organisations)", 'url' => 'https://www.kobotoolbox.org/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : numéros de lot", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/inventory/product_management/product_tracking/lots.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, module Lot/Série", 'url' => 'https://wiki.dolibarr.org/index.php/Module_Lot/Serial', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business (quota de 1 000 messages de service gratuits depuis le 1er octobre 2026)", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-utilisateurs', 'digitalisation-processus', 'data-literacy', 'whatsapp-odoo-dolibarr-crm', 'excel-google-sheets', 'ia-ethique-conformite'],
        'services'    => ['integration-odoo', 'digitalisation-d-entreprise', 'automatisation-ia'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
