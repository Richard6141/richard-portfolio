<?php
// ============================================================
// data/metiers/logisticiens-transitaires.php · Page « formations par
// métier » pour les logisticiens, les transitaires et les commissionnaires
// en douane (vague 1C, univers « Direction et gestion », non prioritaire,
// statut P : Richard PEUT former ce public, il ne l'a jamais formé).
// Angle propre : le dossier d'expédition de bout en bout (documents de
// transport, concordance facture, liste de colisage et connaissement,
// classement tarifaire, déclaration dans le système douanier, guichet
// unique, jalons et franchises, stock et coût de revient rendu,
// information du client, preuves de livraison). La page oriente vers les
// fiches odoo-utilisateurs, excel-google-sheets, digitalisation-processus
// et whatsapp-odoo-dolibarr-crm sans en reprendre le texte.
// Sources lues à la source le 05/10/2026 : SEGUB (accueil, attributs et
// services du GUCE, article du 04/02/2025 sur CustomsWebb), Douanes du
// Bénin (CDES de Sèmè-Kraké du 11/09/2026, note circulaire n° 122 du
// 02/09/2026), loi n° 2014-20 portant code des douanes du Bénin (PDF du
// SGG : articles 142, 143, 145, 148, 149, 153, 154, 342, 346, 462), loi
// n° 2017-20 (article 391), OTR du Togo (décisions anticipées SH 2022),
// CNUCED (SYDONIA, 102 pays et territoires), OMD (Système harmonisé), OMC
// (AFE : articles 3 et 10, page française), code des douanes de l'Union
// (articles 6, 15 et 33, EUR-Lex lu dans le navigateur), douane.gouv.fr
// (RDE), Acte uniforme OHADA sur le transport de marchandises par route
// (articles 2, 4 et 5, PDF de la bibliothèque OHADA), CNUDCI (statut de
// la loi type sur les documents transférables électroniques), DCSA
// (connaissement, suivi des conteneurs), Commission européenne (eFTI),
// CNIL (géolocalisation des véhicules des salariés), documentation
// d'Odoo 20.0 (coûts logistiques, réception en trois étapes), wiki de
// Dolibarr (module Expéditions). Faits repris des fiches déjà vérifiées :
// FDFP, FODEFCA, 3FPT, France Compétences, article 4 du règlement européen
// sur l'IA, quota WhatsApp de Meta. Richard n'exerce pas ces métiers et
// n'est certifié par aucun éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour logisticiens et transitaires : tenir stocks, expéditions et dossiers de dédouanement à jour, sans confier à un outil ce qu'engage une déclaration en douane",
    'title'   => "Formation IA logisticiens et transitaires | Richard SALANON",
    'meta'    => "Former logisticiens, transitaires et commissionnaires en douane à l'IA et aux outils : stocks, transport, dédouanement, suivi et documents. Sur devis.",
    'en_bref' => "Cette page s'adresse aux logisticiens, responsables d'entrepôt et de transport, transitaires, déclarants et commissionnaires en douane qui veulent se servir de l'intelligence artificielle, des logiciels de gestion et des guichets uniques pour le travail réel d'un dossier : documents d'expédition, classement des marchandises, stocks, suivi des conteneurs et information des clients. Elle décrit ce que ces outils changent, ce qu'ils ne doivent jamais faire à la place du déclarant, et un parcours type de deux jours en quatre demi-journées. La formation se tient en intra, en inter, à distance ou en formule hybride ; son prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Direction et gestion',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : le dossier d'expédition de bout en bout, et ce qu'un assistant d'IA peut y lire",
            'duree'  => '3 h 30',
            'points' => [
                "Reconstituer au tableau un dossier d'import réel, anonymisé : pro forma, facture commerciale, liste de colisage, connaissement ou lettre de transport aérien, certificat d'origine, intention d'importation, déclaration, bon à enlever, bon de livraison.",
                "Un numéro de dossier interne relié au numéro de connaissement et au numéro de conteneur, un dossier unique par expédition, des fichiers nommés selon une règle commune.",
                "Faire extraire par un assistant d'IA les lignes d'une facture en anglais et d'une liste de colisage photographiée : désignations, quantités, poids bruts et nets, valeurs, devise.",
                "La grille de concordance : nombre de colis, poids, valeur et désignation doivent tomber juste entre facture, liste de colisage et connaissement, sinon le dossier s'arrête.",
                "Ce qui ne passe jamais par un compte d'IA personnel : identifiants du guichet unique, copies de pièces d'identité des particuliers, relevés bancaires des clients.",
                "Exercice : trois dossiers anonymisés, dont deux contiennent une incohérence volontaire, à repérer en quarante minutes.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : classement tarifaire, valeur et origine, l'IA comme aide à la recherche et jamais comme déclarant",
            'duree'  => '3 h 30',
            'points' => [
                "Lire une position du Système harmonisé à six chiffres, puis ses subdivisions nationales dans le tarif en vigueur, et repérer les notes de section et de chapitre qui changent tout.",
                "Demander à un assistant d'IA des pistes de classement avec leur raisonnement, puis les confronter au référentiel officiel des codes publié par l'administration.",
                "Rédiger une description de marchandise exploitable : matière, usage, présentation, marque, référence, au lieu de « pièces détachées » ou « divers ».",
                "Quand demander une décision anticipée de classement, et comment la conserver pour les expéditions suivantes.",
                "La fiche de classement interne : article, code retenu, source consultée, date, auteur, validation par le déclarant.",
                "Exercice : dix articles d'un client fictif à documenter, avec une fiche de classement complète pour chacun.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : stock, entrepôt et coût de revient dans Odoo, Dolibarr ou le tableur",
            'duree'  => '3 h 30',
            'points' => [
                "Réceptionner en une, deux ou trois étapes selon l'entrepôt : quai, contrôle qualité, rangement, avec des emplacements nommés et des lots suivis.",
                "Le coût de revient rendu : fret, assurance, droits et taxes, frais de transit et de magasinage répartis sur les articles selon la valeur, le poids, le volume ou la quantité.",
                "Le tableau des jalons d'une expédition : navire annoncé, manifeste, déclaration déposée, liquidation, bon à enlever, sortie du port, livraison au client.",
                "Calculer chaque matin les jours de franchise restants avant magasinage et surestaries, et faire remonter les dossiers en alerte.",
                "Preuves de livraison : photo, signature, heure, et ce que la géolocalisation des véhicules permet ou interdit.",
                "Exercice : un conteneur de trois références, du connaissement au coût de revient unitaire de chaque article en stock.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : informer le client sans tout ressaisir, sécuriser les accès, puis évaluation sur un dossier complet",
            'duree'  => '3 h 30',
            'points' => [
                "Des messages de suivi rédigés à partir des jalons, envoyés par courriel ou par WhatsApp, avec une relecture obligatoire dès qu'ils annoncent une date ou un montant.",
                "Les relances automatiques des pièces manquantes, l'alerte de fin de franchise et le point hebdomadaire au client, construits avec les outils déjà en place.",
                "Les fraudes du métier : changement de coordonnées bancaires d'un transporteur, faux connaissement, faux avis d'arrivée, accès au guichet unique partagés entre collègues.",
                "Le plan de continuité : que faire si le système douanier, la messagerie ou le serveur tombe la veille de la fin de franchise.",
                "Évaluation : chaque participant traite seul un dossier simulé, des documents fournisseurs jusqu'au message de livraison au client, et reçoit sa fiche réflexe.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, à distance : retour sur les dossiers réels",
            'duree'  => '2 heures',
            'points' => [
                "Les incohérences relevées depuis la formation, et celles qu'un outil a laissées passer.",
                "Les fiches de classement créées, relues avec le déclarant responsable.",
                "Les règles de nommage, de jalons et de messages qui ont tenu, et celles qu'il faut simplifier.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Logisticiens, magasiniers, responsables transport, transitaires, déclarants et commissionnaires en douane"],
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, plus un retour à distance un mois après"],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus en salle'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent pour un logisticien, un transitaire ou un commissionnaire en douane ?",
            'paragraphes' => [
                "Un dossier de transit ressemble rarement à ce que montrent les logiciels. Il commence par une facture envoyée en anglais par un fournisseur de Canton ou d'Anvers, continue par une liste de colisage photographiée sur WhatsApp, un connaissement qui arrive trois jours avant le navire, un client qui appelle pour savoir quand son conteneur sortira, et se termine par une déclaration en douane, des frais de magasinage et une livraison au dépôt. Entre ces étapes, le logisticien, le transitaire et le commissionnaire en douane recopient, vérifient et relancent. C'est ce travail que l'IA, la digitalisation et l'automatisation transforment.",
                "Le premier changement vient de l'administration. Au Bénin, le Guichet unique du commerce extérieur centralise depuis le 1er janvier 2018 les formalités du commerce international : intentions d'importation, manifestes, certificats d'origine, paiement électronique, suivi des mouvements jusqu'à la libération de la marchandise. Selon la SEGUB, qui l'exploite, le système douanier CustomsWebb, lancé en juillet 2022, remplace progressivement SydoniaWorld. Ailleurs, la famille SYDONIA de la CNUCED tourne ou s'installe dans 102 pays et territoires. Le transitaire qui travaille encore sur papier ressaisit donc à la main ce que l'administration attend déjà sous forme de données.",
                "Le deuxième changement est l'arrivée des assistants d'IA dans le dossier. Un assistant lit une facture en anglais ou en chinois, en extrait les lignes, compare la liste de colisage au connaissement, rédige la relance qui réclame le certificat manquant et propose des pistes de classement tarifaire. Il le fait vite, et il se trompe avec la même assurance quand une désignation est vague. La douane s'outille aussi : la SEGUB cite la gestion des risques assistée par intelligence artificielle parmi les innovations de CustomsWebb. Une incohérence laissée passer chez le transitaire a donc de bonnes chances d'être repérée de l'autre côté du guichet.",
                "Le troisième changement touche l'entrepôt et la route : un stock tenu dans un logiciel plutôt que sur un cahier, un coût de revient qui intègre le fret, l'assurance et les droits, des jalons d'expédition visibles par le client, des preuves de livraison photographiées. La formation part de ces trois chantiers avec une règle constante : l'outil prépare, la personne habilitée vérifie et signe. Richard SALANON n'exerce ni le métier de transitaire ni celui de commissionnaire en douane ; il forme à l'usage des outils, sur les dossiers et les systèmes que l'équipe utilise déjà.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'une maison de transit ou d'un entrepôt un outil peut-il préparer, et que garde la personne habilitée ?",
            'legende' => "Répartition proposée en formation et ajustée avec chaque entreprise. La dernière colonne donne le contrôle à installer dès qu'un outil intervient dans la tâche.",
            'entetes' => ['Tâche', "Ce que l'outil prépare", 'Ce que la personne garde', 'Garde-fou'],
            'lignes'  => [
                ['Réception des documents du dossier', "Rangement par numéro de dossier, lecture des PDF et des photos, liste des pièces manquantes", "La décision qu'une pièce est complète, lisible et utilisable", "Une pièce floue ou tronquée est redemandée au client, jamais reconstituée"],
                ["Données d'une facture et d'une liste de colisage", "Extraction des lignes, quantités, poids, valeurs et devises", "Le contrôle ligne à ligne avant toute reprise dans la déclaration", "Concordance des totaux entre facture, liste de colisage et connaissement"],
                ['Classement tarifaire', "Pistes de positions du Système harmonisé, avec leur raisonnement", "Le choix de la position du tarif national et sa justification", "Fiche de classement datée, avec la source consultée et le nom du déclarant"],
                ['Valeur en douane et origine', "Calcul préparatoire à partir de l'incoterm, du fret et de l'assurance", "Les éléments retenus et les pièces qui les prouvent", "Aucun élément de valeur ni aucune origine sans document à l'appui"],
                ['Déclaration dans le système douanier', "Préremplissage à partir des seules données vérifiées", "La validation, sous le code personnel du déclarant", "Le code d'identification n'est ni prêté, ni confié à un automate"],
                ["Jalons d'une expédition", "Mise à jour des statuts, calcul des jours de franchise restants, alertes", "L'arbitrage quand un jalon dérape : magasinage, surestaries, priorités", "Une seule source des statuts, relue chaque matin par le chef de dossier"],
                ['Information du client', "Messages de suivi rédigés depuis les jalons, relances de pièces", "Toute annonce de date, de montant ou de pénalité", "Aucun message qui engage un délai ou un coût sans relecture"],
                ['Stock et inventaire', "Mouvements, lots, seuils, coût de revient réparti sur les articles", "Le comptage physique et l'explication des écarts", "Inventaire validé, jamais ajusté sans écart expliqué par écrit"],
                ['Débours et prestations', "Rapprochement des frais payés pour le client avec leurs justificatifs", "La facture au client et la séparation entre débours et honoraires", "Chaque débours relié à sa quittance, à son bordereau ou à son reçu"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qu'est-ce qu'un outil ne doit jamais faire dans un dossier de transit ou de dédouanement, et quels textes le disent ?",
            'intro' => "Chaque déclaration engage le déclarant et son client. Les limites ci-dessous reposent sur des textes lus dans leur version officielle ; leur application à un cas précis relève du conseil juridique de l'entreprise ou de l'administration des douanes, pas du formateur.",
            'items' => [
                ['titre' => "Valider une déclaration à la place du déclarant", 'texte' => "Au Bénin, l'article 153 de la loi n° 2014-20 du 12 septembre 2014 portant code des douanes exige que la déclaration faite par voie électronique ou par écrit soit signée ou validée par le déclarant. L'article 154 précise que, dans les bureaux équipés de systèmes informatiques, la signature peut être remplacée par un code d'identification de l'intéressé. Ce code vaut signature : il ne se prête ni à un collègue pressé, ni à un robot qui soumettrait les déclarations en série."],
                ['titre' => "Faire passer l'erreur d'un outil pour un renseignement du client", 'texte' => "L'article 346 du même code rend pénalement responsables les signataires des déclarations pour les omissions et inexactitudes relevées. Il écarte les peines d'emprisonnement pour les transitaires lorsqu'il est établi qu'ils se sont limités à reproduire les renseignements communiqués par leurs mandants, sans raison valable d'en douter. Une donnée mal lue par un assistant d'IA n'a jamais été communiquée par le mandant : elle a été produite dans la maison de transit."],
                ['titre' => "Oublier la responsabilité du représentant en Europe", 'texte' => "Dans l'Union européenne, l'article 15 du code des douanes de l'Union rend la personne qui dépose une déclaration responsable de l'exactitude et du caractère complet des renseignements, ainsi que de l'authenticité, de l'exactitude et de la validité des documents joints ; le représentant en douane de l'article 18 est lié lui aussi. En France, la douane rappelle que depuis le 1er janvier 2018, agir en représentation directe ou indirecte suppose d'être d'abord enregistré comme représentant en douane enregistré."],
                ['titre' => "Ouvrir le système douanier à qui n'est pas agréé", 'texte' => "L'article 145 du code béninois interdit de faire profession d'accomplir pour autrui les formalités de déclaration en détail sans agrément de commissionnaire en douane, et l'article 143 réserve la déclaration au propriétaire des marchandises ou à une personne habilitée. Parmi les mesures applicables au contrevenant, l'article 342 cite le retrait de l'agrément et l'interdiction d'accès aux systèmes informatiques de l'administration. Un prestataire extérieur qui « aide » avec les identifiants du cabinet expose l'agrément de tout le cabinet."],
                ['titre' => "Retoucher des données dans le système de la douane", 'texte' => "L'article 462 assimile à un acte de contrebande toute manœuvre effectuée par des procédés informatiques ou électroniques tendant à altérer une ou plusieurs données du système informatique des douanes, lorsque cette altération a pour effet d'éluder un droit ou d'obtenir indûment un avantage. Un script maison qui « corrige » des champs après validation, ou une extension de navigateur qui modifie des valeurs à la volée, n'a donc aucune place dans une maison de transit, même avec de bonnes intentions."],
                ['titre' => "Effacer trop tôt les répertoires et les pièces", 'texte' => "Les articles 148 et 149 du code béninois imposent aux commissionnaires des répertoires annuels cotés et paraphés, distincts pour l'importation et l'exportation, et la conservation de ces répertoires, de la correspondance et des pièces comptables pendant trois ans à compter de l'enregistrement des déclarations. Une règle de nettoyage automatique de la messagerie ou du serveur partagé doit donc respecter ce délai, et la numérisation ne dispense pas de tenir le répertoire."],
                ['titre' => "Envoyer les dossiers des clients vers un service étranger sans cadre", 'texte' => "Un dossier de transit contient des noms, des numéros de téléphone, des adresses et parfois la copie d'une pièce d'identité, pour un déménagement ou un véhicule importé par un particulier. Au Bénin, l'article 391 de la loi n° 2017-20 portant code du numérique ne permet le transfert de données personnelles vers un État tiers que si l'Autorité constate un niveau de protection équivalent, et impose son autorisation préalable avant tout transfert effectif. Coller ces pièces dans un assistant d'IA gratuit hébergé à l'étranger ne remplit pas ces conditions."],
                ['titre' => "Surveiller les chauffeurs en permanence", 'texte' => "En France, la CNIL admet la géolocalisation des véhicules des salariés pour suivre et facturer une prestation de transport, protéger les marchandises ou mieux répartir les tournées, mais pas pour contrôler les limitations de vitesse, ni pour surveiller un salarié en permanence, ni en dehors du temps de travail. Les données se gardent en principe deux mois, un an pour optimiser les tournées ou prouver une intervention, et le nom du conducteur n'a pas à être communiqué au client sauf intérêt indispensable."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un code tarifaire proposé par un assistant d'IA reste-t-il une simple piste ?",
            'texte' => "Parce que la nomenclature est immense et que le dernier mot appartient à la douane. Selon l'Organisation mondiale des douanes, le Système harmonisé compte plus de 5 000 groupes de marchandises identifiés par un code à six chiffres et sert de base aux tarifs de plus de 200 pays et économies. Le tarif national y ajoute ses subdivisions, que l'assistant ne connaît pas toujours dans leur version en vigueur. Quand l'enjeu est réel, la voie sûre reste la décision anticipée prévue par l'article 3 de l'Accord de l'OMC sur la facilitation des échanges, que les douanes du Bénin et du Togo publient.",
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans une maison de transit, un entrepôt ou une flotte, de Cotonou à Marseille ?",
            'items' => [
                ['secteur' => "Maison de transit, à Cotonou", 'probleme' => "Les pièces d'un même dossier arrivent par courriel, par WhatsApp et sur papier ; deux personnes ressaisissent la même facture, l'une dans le système douanier, l'autre dans le tableur de facturation des débours, avec des écarts que personne ne voit avant le client.", 'solution' => "Un numéro de dossier unique reporté sur chaque pièce, un dossier partagé par expédition, une extraction assistée suivie de la grille de concordance signée par le chef de dossier, puis une seule reprise des données vérifiées, qui alimente aussi la facture des débours."],
                ['secteur' => "Négoce de pièces détachées, à Niamey, avec un passage par le port de Cotonou", 'probleme' => "Les factures des fournisseurs décrivent les marchandises en deux mots (« spare parts », « accessories ») ; chaque arrivage relance les discussions sur le classement et retarde la sortie des camions.", 'solution' => "Une fiche par article avec matière, usage, marque et référence, un code validé par le déclarant et réutilisé à chaque arrivage, et une demande de décision anticipée pour les trois familles qui posent toujours question. L'assistant d'IA ne sert qu'à préparer les descriptions et à signaler les articles nouveaux."],
                ['secteur' => "Distributeur de produits importés, à Abidjan", 'probleme' => "Les prix de vente sont calculés sur le prix du fournisseur ; fret, droits, transit et magasinage arrivent plus tard, sur d'autres factures, et la marge réelle n'apparaît qu'à la clôture de l'exercice.", 'solution' => "Des coûts logistiques rattachés à chaque réception dans le logiciel de gestion, répartis selon la valeur pour les droits et selon le poids pour le fret, une réception en deux étapes pour contrôler avant de ranger, et un inventaire tournant par famille de produits."],
                ['secteur' => "Transporteur routier, à Ouagadougou", 'probleme' => "Des clients contestent des colis manquants à l'arrivée ; les lettres de voiture se perdent dans les cabines et les réserves des destinataires ne sont notées nulle part.", 'solution' => "Une lettre de voiture établie en un original et au moins deux copies, photographiée à la prise en charge et à la livraison, les réserves saisies sur le téléphone du chauffeur et rattachées au dossier, et une géolocalisation limitée aux heures de service, connue des conducteurs."],
                ['secteur' => "Commissionnaire en douane spécialisé dans le fret aérien, à Dakar", 'probleme' => "De jeunes déclarants cherchent les codes tarifaires dans un assistant d'IA gratuit et recopient la première réponse ; deux redressements en trois mois, et des données de clients passées par un compte personnel.", 'solution' => "Un assistant autorisé sur un compte professionnel, une bibliothèque interne des articles déjà classés, une fiche de classement obligatoire pour tout article nouveau, relue par un déclarant expérimenté avant le dépôt de la déclaration."],
                ['secteur' => "Représentant en douane enregistré, à Marseille", 'probleme' => "Le cabinet dédouane pour des importateurs français et des exportateurs d'Afrique de l'Ouest ; les mandats de représentation directe ou indirecte sont rangés dans les courriels, et chaque client envoie ses documents dans un format différent.", 'solution' => "Un registre des mandats tenu dans le logiciel du cabinet, une liste des pièces exigées par type d'opération envoyée à l'ouverture du dossier, l'extraction assistée réservée aux documents des clients qui l'ont acceptée par écrit, et une vérification humaine avant tout dépôt."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils et systèmes un logisticien ou un transitaire travaille-t-il, et que faut-il en savoir ?",
            'legende' => "Informations lues le 5 octobre 2026 sur les pages officielles des administrations et des éditeurs. Les licences et les abonnements restent au nom de l'entreprise ; aucun outil n'est imposé, la formation s'appuie sur ceux que l'équipe utilise.",
            'entetes' => ['Outil ou système', 'Usage dans le métier', "Ce qu'il faut savoir", 'Formation liée'],
            'lignes'  => [
                ["Guichet unique du commerce extérieur du Bénin", "Intentions d'importation et d'exportation, manifestes, bookings, certificats d'origine CEDEAO et UEMOA, paiement, suivi des mouvements et des relâches", "Exploité par la SEGUB, qui assure une assistance en ligne et des formations module par module ; les comptes s'obtiennent et se désactivent par procédure écrite", '<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>'],
                ['CustomsWebb, système douanier du Bénin', "Saisie, enregistrement et soumission des déclarations, liquidation, paiement, laissez-passer", "Lancé en juillet 2022 ; la note circulaire n° 122 du 2 septembre 2026 dématérialise la demande et le paiement des laissez-passer sur la plateforme", '<a href="/formations/ia-processus-metier">IA dans les processus métier</a>'],
                ['SYDONIA World et systèmes nationaux', "Déclarations, manifestes et transit dans de nombreux pays d'Afrique francophone", "Selon la CNUCED, des systèmes SYDONIA tournent ou s'installent dans 102 pays et territoires ; écrans, procédures et calendriers changent d'un pays à l'autre", "Guides et formations de l'administration du pays"],
                ['Odoo, Inventaire et Achats', "Réceptions en une à trois étapes, emplacements, lots, coût de revient rendu", "Selon la documentation d'Odoo 20.0, les coûts logistiques couvrent expédition, assurance, droits de douane et taxes, se répartissent à parts égales ou selon la quantité, le coût, le poids ou le volume, et ne s'appliquent qu'à des transferts validés", '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Dolibarr, module Expéditions', "Expéditions créées depuis la commande client, quantités expédiées et restantes, bordereau", "Selon le wiki de Dolibarr, le module est livré en standard ; une expédition validée ne change plus de quantité, et le stock peut être décrémenté à la validation ou à la clôture", '<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['Tableur (Excel, Google Sheets)', "Tableau des jalons, calcul des franchises, fiche de classement, suivi des débours", "Suffisant pour démarrer ; dès que plusieurs personnes saisissent le même fichier, un logiciel de gestion devient plus sûr", '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['WhatsApp relié au logiciel de gestion', "Avis d'arrivée, relances de pièces, confirmations de livraison", "Depuis le 1er octobre 2026, Meta accorde à chaque numéro professionnel 1 000 messages de service gratuits par mois, non reportables, facturés au-delà", '<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>'],
                ["Assistants d'IA (ChatGPT, Claude, Gemini, Copilot)", "Lecture de documents, traduction, comparaison de pièces, rédaction de relances", "Sur un compte professionnel administré, avec des pièces neutralisées quand c'est possible ; jamais pour valider une déclaration ni pour trancher un classement", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['Standards de la DCSA', "Suivi des conteneurs, connaissement électronique", "La Digital Container Shipping Association publie un standard d'événements de suivi que transitaires et chargeurs peuvent recevoir de plusieurs fournisseurs sans intégration propre à chacun, et un standard de connaissement électronique", '<a href="/formations/integrations-api-no-code">Intégrations API en no-code</a>'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Que contient le parcours type d'une maison de transit ou d'un service logistique, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours s'adapte-t-il à chaque poste de la chaîne logistique ?",
            'legende' => "Les quatre demi-journées peuvent être suivies séparément. Les combinaisons ci-dessous sont les plus courantes ; elles se fixent au premier échange.",
            'entetes' => ['Poste', 'Demi-journées conseillées', 'Ce que la personne repart en sachant faire'],
            'lignes'  => [
                ['Déclarant ou commissionnaire en douane agréé', 'Jour 1 matin et après-midi, jour 2 après-midi', "Contrôler un dossier avec la grille de concordance, documenter un classement, garder la main sur la validation et sur son code personnel"],
                ['Chef de dossier ou agent de transit', 'Les quatre', "Ouvrir et tenir un dossier unique, suivre jalons et franchises, informer le client sans engager l'entreprise à la légère"],
                ["Magasinier ou responsable d'entrepôt", 'Jour 2 matin', "Réceptionner par étapes, suivre les lots, mener un inventaire jusqu'à sa validation et expliquer un écart"],
                ['Responsable transport ou exploitation', 'Jour 2 matin et après-midi', "Organiser les tournées, recueillir des preuves de livraison, régler la géolocalisation dans les limites admises"],
                ["Service import-export d'une entreprise industrielle ou commerciale", 'Jour 1 matin, jour 2 matin', "Remettre au transitaire un dossier complet et cohérent, calculer le coût de revient rendu des produits importés"],
                ["Direction d'une maison de transit", 'Jour 1 après-midi, jour 2 après-midi', "Fixer les règles d'usage de l'IA, la gestion des accès au système douanier, la conservation des répertoires et la réponse aux incidents"],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la formation se prépare-t-elle sans que le formateur voie les dossiers des clients ni les accès au système douanier ?",
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => "Vous décrivez l'activité (import, export, transit, entreposage, transport), les ports et corridors utilisés, le système douanier, les logiciels, le nombre de personnes et ce qui coûte aujourd'hui le plus en temps ou en pénalités. Le premier échange, le cadrage et le devis sont gratuits."],
                ['titre' => 'Choix des dossiers types', 'duree' => 'Deux semaines avant', 'texte' => "On retient trois à cinq dossiers récents et représentatifs : un conteneur complet, un groupage, une expédition aérienne, un transit vers un pays voisin, un litige de livraison. Les exercices partent de ces dossiers, pas d'un manuel."],
                ['titre' => 'Neutralisation', 'duree' => 'Une semaine avant', 'texte' => "L'entreprise remplace elle-même les noms, les numéros de contribuable, les téléphones, les valeurs et les références de conteneur. Le formateur ne reçoit aucun identifiant du guichet unique ni du système douanier : les démonstrations sur ces plateformes se font sur les écrans de l'équipe, par l'équipe."],
                ['titre' => 'Accord du responsable des déclarations', 'duree' => 'Avant la session', 'texte' => "Le déclarant ou le commissionnaire responsable valide les règles qui seront travaillées : ce qu'un outil peut préparer, qui vérifie, qui valide, combien de temps on garde chaque pièce. Sans cet accord, la formation enseignerait des règles que personne n'a décidées."],
                ['titre' => 'Animation', 'duree' => 'Demi-journées de 3 h 30', 'texte' => "Chaque séquence part d'un dossier, passe par le texte ou la règle qui s'applique, puis par le geste dans l'outil, sur le poste de chaque participant."],
                ['titre' => 'Supports et suivi', 'duree' => 'Fin de session, puis un mois après', 'texte' => "Grille de concordance, modèle de fiche de classement, tableau des jalons et des franchises, modèles de messages au client, fiche réflexe sur les fraudes, attestation nominative ; puis un retour à distance d'environ deux heures sur les dossiers réels."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir pour une maison de transit, un entrepôt ou un service import-export ?",
            'legende' => "Les formats se combinent : un atelier avec la direction, puis des demi-journées ciblées selon les postes, en salle ou à distance.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Situation type'],
            'lignes'  => [
                ['Atelier de direction', 'Deux heures', "Dirigeant, déclarant responsable, responsable informatique", "Fixer les règles d'usage de l'IA et d'accès au système douanier avant de former les équipes"],
                ['Parcours complet, intra', '2 jours en 4 demi-journées', '10 personnes au plus', "Maison de transit ou service logistique qui veut harmoniser la tenue de ses dossiers"],
                ['Module isolé', 'Une demi-journée', "4 à 10 personnes d'un même poste", "Déclarants avant une révision du tarif, magasiniers avant un inventaire annuel"],
                ['Session inter', '1 ou 2 jours', 'Une à trois personnes par structure', "Petits transitaires, importateurs et transporteurs ; les exercices utilisent des dossiers fictifs"],
                ['À distance', 'Séances de 2 heures', '8 personnes au plus', "Équipes réparties entre un port, un poste frontière et un dépôt à l'intérieur, ou entre l'Afrique et l'Europe"],
                ['Hybride', 'Une demi-journée en salle, puis séances à distance', '10 personnes au plus', "Prise en main sur place, puis application aux dossiers réels de la semaine avec un retour à distance"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe de transit ou de logistique, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est affiché : chaque formule est chiffrée sur devis après le premier échange, et le devis détaille ce qu'il comprend. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux logiciels et aux assistants d'IA, comme les frais liés au guichet unique, restent payés par l'entreprise à leurs fournisseurs.",
            'items'      => [
                ['offre' => 'Atelier de direction', 'prix' => 'Sur devis', 'inclus' => ['Deux heures avec la direction et le déclarant responsable', "Règles d'usage de l'IA et des accès au système douanier écrites", 'Conseil sur la suite à donner']],
                ['offre' => 'Module ciblé', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée : dossier, classement, entrepôt ou suivi client', 'Exercices sur vos dossiers neutralisés', 'Modèles modifiables et attestation']],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Grille de concordance, fiche de classement, tableau des jalons et modèles de messages construits en séance', 'Évaluation sur un dossier simulé', 'Retour à distance un mois après']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes.",
                "Le nombre de demi-journées et les modules retenus.",
                "Les logiciels et systèmes couverts : Odoo, Dolibarr, tableur, guichet unique d'un ou de plusieurs pays.",
                "Le temps de préparation des dossiers types et des modèles.",
                "Le lieu : vos bureaux à Cotonou, une zone portuaire ou frontalière, un autre pays, ou la distance.",
                "La langue des séances et des supports, français ou anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation d'une maison de transit ou d'un service logistique ?",
            'paragraphes' => [
                "Dans la plupart des cas, la maison de transit ou l'entreprise paie la formation sur son propre budget. Un fonds de formation professionnelle peut parfois en prendre une part, selon le pays, la situation de l'entreprise et celle du prestataire, mais aucune prise en charge n'est annoncée ici. La démarche utile tient en une règle : écrire au fonds avec le programme et le devis, puis attendre sa réponse avant de s'engager.",
                "En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> consultée le 5 octobre 2026 ouvre le plan de formation aux entreprises à jour de la taxe d'apprentissage et de la taxe additionnelle à la formation continue. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> dispose d'un guichet réservé au personnel des entreprises. Dans chacun de ces pays, les conditions qui visent le prestataire et la part laissée à l'entreprise se demandent au fonds lui-même.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que l'accès aux fonds publics et mutualisés exige, depuis le 1er janvier 2022, un prestataire certifié Qualiopi. Richard SALANON ne l'est pas : un transitaire ou un logisticien français finance donc la session sur ses fonds propres, sauf réponse écrite contraire de son opérateur de compétences. Le programme, les feuilles d'émargement et l'attestation sont remis dans tous les cas ; ils gardent aussi la trace de l'effort de maîtrise de l'IA que l'article 4 du règlement européen sur l'IA demande, depuis le 2 février 2025, aux entreprises qui utilisent ces systèmes.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les maisons de transit et les entrepôts qui s'outillent seuls ?",
            'intro' => "Elles naissent presque toujours de l'urgence : un navire à quai, une franchise qui expire, un client au téléphone. L'outil sous la main paraît alors la solution la plus rapide, et il l'est, jusqu'au contrôle suivant.",
            'items' => [
                ['titre' => "Recopier le code proposé par l'assistant", 'texte' => "Le code paraît plausible et il est saisi tel quel. Il lui manque la subdivision nationale, ou il vient d'une autre version de la nomenclature. Toute proposition passe par la fiche de classement et par le référentiel officiel des codes avant d'entrer dans une déclaration."],
                ['titre' => "Croire une extraction sans recompter", 'texte' => "Un poids lu 1 250 au lieu de 12 500 sur une photo prise de travers, un nombre de colis oublié en bas de page, une devise mal reconnue. Les totaux de la grille de concordance se recomptent sur la pièce d'origine avant toute saisie, quel que soit l'outil qui les a lus."],
                ['titre' => "Faire circuler le code du déclarant", 'texte' => "Pour dépanner un samedi, le code d'accès au système douanier passe dans un groupe de messagerie. Chaque personne habilitée dispose de son propre accès, et les comptes des personnes qui quittent l'entreprise se désactivent le jour même du départ, auprès du guichet unique comme dans les logiciels internes."],
                ['titre' => "Garder les jalons dans la tête du chef de dossier", 'texte' => "Le jour où il est absent, plus personne ne sait quel conteneur entre en magasinage le lendemain. Le tableau des jalons est partagé, tenu à jour et relu chaque matin, même lorsqu'il ne compte que dix lignes."],
                ['titre' => "Laisser un message automatique promettre une date", 'texte' => "« Votre conteneur sortira jeudi » part tout seul ; une visite physique est ordonnée, et le client a déjà prévenu ses propres acheteurs. Les messages automatiques annoncent un jalon atteint ; une date à venir, un montant ou une pénalité se relisent avant envoi."],
                ['titre' => "Accepter une nouvelle domiciliation bancaire par courriel", 'texte' => "Un message imitant un agent maritime ou un transporteur annonce un nouveau compte pour régler le fret ou les frais portuaires. Les coordonnées bancaires des partenaires sont verrouillées dans le logiciel, et leur modification passe par un appel au numéro figurant au contrat, puis par une seconde validation."],
                ['titre' => "Calculer la marge sans les frais d'approche", 'texte' => "Le coût de revient s'arrête au prix du fournisseur, et des produits importés se vendent à perte sans que personne ne le voie. Les frais d'approche se rattachent à la réception dès qu'ils sont connus, quitte à corriger quand la facture définitive du transitaire arrive."],
                ['titre' => "Tout numériser, sauf le répertoire", 'texte' => "Les dossiers sont scannés et rangés, mais le répertoire coté et paraphé n'est plus tenu. Le code des douanes béninois l'exige toujours : la numérisation s'organise autour de lui, jamais à sa place."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Lettre de voiture, connaissement, documents électroniques : que dit le droit quand le papier disparaît ?",
            'paragraphes' => [
                "Dans l'espace OHADA, l'Acte uniforme relatif aux contrats de transport de marchandises par route, adopté le 22 mars 2003 à Yaoundé et en vigueur depuis le 1er janvier 2004, définit la lettre de voiture comme l'écrit qui constate le contrat de transport. Son article 2 précise que l'exigence d'un écrit est satisfaite quel que soit le support, pour autant que l'intégrité, la stabilité et la pérennité de l'écrit soient assurées. Une lettre de voiture électronique est donc envisageable, à condition que le fichier ne puisse pas être modifié en silence et qu'il reste lisible aussi longtemps qu'il peut servir de preuve.",
                "L'article 4 du même texte énumère ce que la lettre de voiture doit contenir : lieu et date d'établissement, transporteur, expéditeur et destinataire, lieu et date de prise en charge, lieu prévu de livraison, nature de la marchandise et emballage, nombre de colis, poids brut, instructions pour les formalités de douane, frais. L'article 5 lui donne force probante jusqu'à preuve du contraire et prévoit un original et au moins deux copies. C'est une liste de contrôle qu'un outil vérifie en quelques secondes avant le départ du camion : un champ vide se voit au dépôt, pas au poste frontière.",
                "En mer, le connaissement original reste le titre qui donne droit à la marchandise. La loi type de la CNUDCI sur les documents transférables électroniques, adoptée en 2017, permet de lui donner une forme électronique ; selon la page de suivi de la CNUDCI consultée le 5 octobre 2026, treize juridictions ont légiféré sur sa base, dont le Royaume-Uni en 2023 et la France en 2024. La liste ne compte aucun pays d'Afrique de l'Ouest ou centrale : un connaissement électronique reçu à Cotonou ou à Abidjan se traite donc avec prudence, en vérifiant ce que la banque, l'armateur et la douane acceptent.",
                "Dans l'Union européenne, le règlement (UE) 2020/1056 sur les informations électroniques relatives au transport de marchandises oblige les autorités des États membres, à partir du 9 juillet 2027, à accepter les informations que les opérateurs transmettent par des plateformes certifiées. Un transitaire qui travaille avec l'Europe gagne donc à tenir dès maintenant des données propres et structurées plutôt que des PDF scannés. La formation ne traite pas la mise en place technique de ces échanges ; elle apprend à produire des données justes, ce que tous ces systèmes supposent.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés et datés un logisticien ou un transitaire doit-il connaître ?",
            'items' => [
                ['valeur' => '102', 'libelle' => "Pays et territoires où des systèmes SYDONIA tournent ou sont en cours d'installation (page consultée le 5 octobre 2026)", 'source' => 'CNUCED, programme SYDONIA', 'url' => 'https://asycuda.org/en/user-countries/'],
                ['valeur' => '98 %', 'libelle' => "Part des marchandises du commerce international classées selon le Système harmonisé, qui compte plus de 5 000 groupes de marchandises (page consultée le 5 octobre 2026)", 'source' => 'Organisation mondiale des douanes', 'url' => 'https://www.wcoomd.org/en/topics/nomenclature/overview/what-is-the-harmonized-system.aspx'],
                ['valeur' => '14,3 %', 'libelle' => "Baisse moyenne des coûts du commerce attendue de la mise en œuvre complète de l'Accord sur la facilitation des échanges, entré en vigueur le 22 février 2017", 'source' => 'Organisation mondiale du commerce', 'url' => 'https://www.wto.org/french/tratop_f/tradfa_f/tradfa_f.htm'],
                ['valeur' => '59 000', 'libelle' => "Déclarations traitées par CustomsWebb au Bénin, avec 44 bureaux sur 49 opérationnels et plus de 700 utilisateurs (bilan présenté le 29 janvier 2025)", 'source' => 'SEGUB, article du 4 février 2025', 'url' => 'https://segub.bj/actualites/83-customswebb-benin-bilan-prometteur-lors-de-la-eme-revue-des-finances-publiques/'],
                ['valeur' => '600 000', 'libelle' => "Paiements traités en moyenne chaque année par le guichet unique du Bénin, qui affiche aussi plus de 6 000 utilisateurs formés (site consulté le 5 octobre 2026)", 'source' => "SEGUB, chiffres clés", 'url' => 'https://segub.bj/'],
                ['valeur' => '12 à 36 h', 'libelle' => "Temps de séjour actuel des marchandises à la frontière de Sèmè-Kraké, que le projet lancé le 11 septembre 2026 vise à ramener sous trois heures", 'source' => 'Direction générale des douanes du Bénin', 'url' => 'https://douanes.gouv.bj/modernisation-de-la-frontiere-seme-krake-les-douanes-beninoises-et-nigerianes-lancent-un-systeme-dechange-de-donnees/'],
                ['valeur' => '9 juillet 2027', 'libelle' => "Date à partir de laquelle les autorités des États membres de l'Union devront accepter les informations de transport transmises par des plateformes eFTI certifiées", 'source' => 'Commission européenne, règlement eFTI', 'url' => 'https://transport.ec.europa.eu/transport-themes/logistics-and-multimodal-transport/efti-regulation_en'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour une maison de transit ou un service logistique ?",
            'legende' => "Chaque fiche a son propre programme. Le parcours métier en reprend les gestes utiles au transit et à la logistique ; les fiches permettent d'aller plus loin sur un outil ou une méthode.",
            'entetes' => ['Formation', "Ce qu'elle apporte au métier", 'Pour qui en priorité'],
            'lignes'  => [
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', "La prise en main d'Odoo poste par poste : achats, réceptions, stock, inventaire, facturation", 'Magasiniers, acheteurs, administration des ventes'],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', "Des tableaux de jalons, de franchises et de débours fiables, avec des totaux de contrôle", 'Chefs de dossier, assistants de transit'],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', "Dessiner le circuit d'un dossier, mesurer ses délais et ses erreurs, le simplifier avant de l'outiller", "Responsables d'exploitation, direction"],
                ['<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>', "Envoyer avis d'arrivée et relances depuis le logiciel, avec l'historique rattaché au client", 'Service client, chefs de dossier'],
                ['<a href="/formations/ia-processus-metier">IA dans les processus métier</a>', "Choisir les étapes d'un processus à confier à l'IA et garder un contrôle humain traçable", 'Direction, déclarant responsable'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', "Les réflexes face aux faux courriels, aux changements de coordonnées bancaires et aux mots de passe partagés", "Toute l'équipe, en priorité ceux qui règlent les fournisseurs"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Ports, frontières, connexion, langues : que change le terrain africain ou européen pour un transitaire ?",
            'paragraphes' => [
                "En Afrique de l'Ouest, une grande partie du travail se joue sur les corridors : marchandises débarquées à Cotonou, à Lomé ou à Abidjan et destinées au Niger, au Burkina Faso ou au Mali. Les systèmes des administrations commencent à se parler. Le 11 septembre 2026, les douanes du Bénin et du Nigeria ont lancé à Sèmè-Kraké le moteur d'interopérabilité CDES, qui doit permettre à CustomsWebb et au système nigérian B'Odogwu d'échanger les déclarations, chaque administration gardant ses compétences sur le risque, la liquidation et la mainlevée. Plus les données circulent, plus une erreur saisie au départ se retrouve à l'arrivée.",
                "La connexion décide encore de l'organisation. Un poste frontière, un parc à camions ou un magasin sous douane n'ont pas toujours un réseau stable, et la franchise court pendant la coupure. La formation privilégie donc des gestes qui la supportent : dossiers préparés hors ligne puis synchronisés, fiches de classement consultables sur le téléphone, partage de connexion prévu à l'avance, et un ordre de priorité écrit pour les dossiers dont la franchise expire le jour même.",
                "Les documents arrivent en anglais, en chinois, en portugais ou en arabe, et les assistants d'IA traduisent bien les désignations courantes. Ils traduisent moins bien les termes techniques, les abréviations propres à un fournisseur et les unités de mesure. La règle enseignée tient en une phrase : la traduction aide à comprendre, mais la désignation qui entre dans la déclaration est rédigée et relue par le déclarant, dans le vocabulaire du tarif national.",
                "En Europe, la question n'est pas l'accès aux outils mais la densité des règles : représentation en douane encadrée, données des salariés et des clients protégées, documents de transport électroniques en cours de généralisation. Un transitaire installé entre Cotonou et Marseille applique par défaut la règle la plus stricte des deux pays, et garde une trace écrite des choix faits pour chaque client.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre équipe de transit ou de logistique avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut former des logisticiens, des transitaires et des commissionnaires en douane à ces outils. Il n'exerce aucun de ces métiers, n'est pas agréé en douane et ne prétend pas connaître le tarif mieux qu'un déclarant : il apporte la maîtrise des assistants d'IA, des logiciels de gestion comme Odoo et Dolibarr, des tableurs et des automatisations, et il construit chaque exercice à partir des dossiers de l'équipe. Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes.",
                "Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il a travaillé dans " . count((array) fait('pays_travailles')) . " pays, dont le Bénin, le Togo, la Côte d'Ivoire, le Niger, le Burkina Faso, le Mali, la France et la Belgique. Il n'est certifié par aucun éditeur et ne revend aucune licence ; les questions de droit douanier soulevées en séance sont renvoyées au déclarant responsable ou au conseil de l'entreprise.",
                "Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. Quand la formation révèle un besoin d'outillage, comme des coûts logistiques à paramétrer ou des relances de pièces à automatiser, il relève d'une mission d'<a href=\"/services/integration-odoo\">intégration Odoo</a> ou d'<a href=\"/services/automatisation-ia\">automatisation</a>. Pour choisir un logiciel, le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo ou Dolibarr</a> pose les critères ; pour mesurer ce que coûte un système logistique à l'arrêt, l'histoire de <a href=\"/histoires/maersk-notpetya\">Maersk face à NotPetya</a> reste la plus parlante. L'offre entière figure dans le <a href=\"/formations/\">catalogue des formations</a>, notamment le domaine <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire une équipe de transit ou de logistique ?",
            'texte' => "Un numéro de dossier unique, une grille de concordance avant toute saisie, une fiche de classement pour chaque article nouveau, un code personnel qui ne se prête jamais, un tableau des jalons relu chaque matin, des messages au client relus dès qu'ils annoncent une date ou un montant, et des répertoires conservés au moins trois ans. L'outil prépare ; le déclarant vérifie, valide et signe.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre équipe de transit ou de logistique à l'IA et aux outils numériques ?",
            'texte'  => "Indiquez votre activité (transit, entreposage, transport, import-export), les ports et pays concernés, le système douanier et les logiciels utilisés, le nombre de personnes et ce que vous voulez améliorer en priorité : vous recevez une réponse sous 24 heures, puis un programme ajusté et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon équipe'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il déjà utiliser un assistant d'IA pour suivre la formation ?", 'r' => "Non. Savoir ouvrir le système douanier ou le logiciel de gestion de l'entreprise, envoyer un courriel et remplir un tableau suffit. Les premières heures partent du dossier d'expédition, pas de l'outil ; les participants qui utilisent déjà ChatGPT, Claude, Gemini ou Copilot y trouvent surtout une méthode pour le faire sans exposer les clients ni l'agrément."],
        ['q' => "Un assistant d'IA peut-il classer nos marchandises à notre place ?", 'r' => "Il peut proposer des pistes de positions et expliquer son raisonnement, ce qui fait gagner du temps sur un article inconnu. Le choix du code, sa vérification dans le tarif en vigueur et sa justification restent au déclarant. Pour un article qui revient souvent ou qui pose doute, la décision anticipée de l'administration est la seule réponse qui engage la douane ; dans l'Union européenne, une décision de renseignement tarifaire contraignant vaut trois ans selon l'article 33 du code des douanes de l'Union."],
        ['q' => "Peut-on laisser un outil remplir la déclaration dans CustomsWebb ou dans SYDONIA ?", 'r' => "Le préremplissage à partir de données déjà vérifiées fait gagner du temps, quand le système et la direction l'autorisent. La validation, elle, reste un acte du déclarant : au Bénin, l'article 153 du code des douanes exige une déclaration signée ou validée par le déclarant, et l'article 154 fait du code d'identification l'équivalent de sa signature. Aucun automate ne valide sous ce code."],
        ['q' => "Le transitaire est-il responsable si l'outil se trompe ?", 'r' => "Les textes visent la personne qui signe ou dépose la déclaration, pas l'outil. L'article 346 du code béninois rend les signataires pénalement responsables des inexactitudes, et l'article 15 du code des douanes de l'Union rend le déclarant et son représentant responsables de l'exactitude des renseignements. L'application à un cas précis relève de votre conseil ; la formation apprend à ne jamais laisser une donnée non vérifiée entrer dans une déclaration."],
        ['q' => "Le formateur aura-t-il accès à notre guichet unique ou à notre système douanier ?", 'r' => "Non. Aucun identifiant ne lui est transmis. Les démonstrations sur ces plateformes se font sur les écrans de l'équipe, par l'équipe, et les exercices utilisent des dossiers neutralisés par l'entreprise elle-même avant la session."],
        ['q' => "Combien de temps faut-il garder les dossiers de dédouanement ?", 'r' => "Au Bénin, l'article 149 du code des douanes impose de conserver trois ans, à compter de l'enregistrement des déclarations, les répertoires des commissionnaires, la correspondance et les pièces comptables qui s'y rapportent. D'autres textes, comptables ou fiscaux, peuvent imposer des durées plus longues : la formation fait construire une table de conservation que le responsable des déclarations et le comptable valident."],
        ['q' => "Une lettre de voiture électronique est-elle valable dans l'espace OHADA ?", 'r' => "L'article 2 de l'Acte uniforme relatif aux contrats de transport de marchandises par route admet un écrit sur tout support, pourvu que son intégrité, sa stabilité et sa pérennité soient assurées. Reste à vérifier que vos clients, vos assureurs et les autorités rencontrées sur la route l'acceptent : la formation montre comment produire un document qui remplisse ces conditions et comment garder la preuve des réserves à la livraison."],
        ['q' => "Peut-on géolocaliser nos camions et nos chauffeurs ?", 'r' => "Oui, pour suivre une prestation, protéger la marchandise ou organiser les tournées, avec des limites. En France, la CNIL exclut le contrôle des limitations de vitesse, la surveillance permanente et la collecte en dehors du temps de travail, et fixe des durées de conservation courtes. Au Bénin, la loi n° 2017-20 encadre aussi ces données : les chauffeurs doivent savoir ce qui est collecté, pourquoi et pendant combien de temps."],
        ['q' => "La formation couvre-t-elle Odoo ou Dolibarr ?", 'r' => "Elle couvre leur usage logistique quand l'entreprise les utilise déjà : réceptions par étapes, lots, inventaire, coûts logistiques, expéditions. La prise en main complète relève des formations Odoo pour vos équipes ou Dolibarr pour vos équipes, et le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo ou Dolibarr</a> aide à choisir entre les deux."],
        ['q' => "Peut-on former un seul déclarant ou une petite maison de transit ?", 'r' => "Oui, en session inter avec d'autres structures, ou à distance en séances de deux heures. Un atelier de deux heures avec le dirigeant est alors conseillé en ouverture, pour écrire ensemble les règles d'usage de l'IA et d'accès au système douanier que le déclarant appliquera ensuite."],
        ['q' => "Combien coûte la formation, et comment la régler ?", 'r' => "Le prix est fixé sur devis, après un premier échange gratuit. Il dépend du nombre de participants, des modules retenus, des systèmes couverts, du lieu et du format. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Que reçoivent les participants à la fin ?", 'r' => "La grille de concordance, le modèle de fiche de classement, le tableau des jalons et des franchises, les modèles de messages au client, une fiche réflexe sur les fraudes et une attestation nominative de fin de formation. Ce n'est ni un diplôme, ni un agrément de commissionnaire en douane, ni une certification."],
    ],

    'sources' => [
        ['titre' => "SEGUB, Société d'exploitation du guichet unique du Bénin : accueil et chiffres clés", 'url' => 'https://segub.bj/', 'date' => '2026-10-05'],
        ['titre' => "SEGUB, attributs du Guichet unique du commerce extérieur (lancé le 1er janvier 2018)", 'url' => 'https://segub.bj/attributs-du-guce/', 'date' => '2026-10-05'],
        ['titre' => "SEGUB, services offerts par le Guichet unique du commerce extérieur", 'url' => 'https://segub.bj/guce-services-offerts/', 'date' => '2026-10-05'],
        ['titre' => "SEGUB, « CustomsWebb Bénin : bilan prometteur lors de la 15e revue des finances publiques » (4 février 2025)", 'url' => 'https://segub.bj/actualites/83-customswebb-benin-bilan-prometteur-lors-de-la-eme-revue-des-finances-publiques/', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des douanes du Bénin, modernisation de la frontière Sèmè-Kraké et lancement du CDES (11 septembre 2026)", 'url' => 'https://douanes.gouv.bj/modernisation-de-la-frontiere-seme-krake-les-douanes-beninoises-et-nigerianes-lancent-un-systeme-dechange-de-donnees/', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des douanes du Bénin, note circulaire n° 122 du 2 septembre 2026 relative à la dématérialisation de la demande et du paiement des laissez-passer sur Customs Webb", 'url' => 'https://douanes.gouv.bj/note-circulaire-n122-du-02-09-2026-relative-dematerialisation-demande-et-paiement-laissez-passer-sur-plateforme-customs-webb/', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des douanes du Bénin, décisions anticipées", 'url' => 'https://douanes.gouv.bj/decisions-anticipees/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2014-20 du 12 septembre 2014 portant code des douanes (articles 142, 143, 145, 148, 149, 153, 154, 342, 346 et 462)", 'url' => 'https://sgg.gouv.bj/doc/loi-2014-20/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "Office togolais des recettes, décision anticipée de maintien de la validité des avis de classement tarifaire lors de la migration du SH 2017 vers le SH 2022", 'url' => 'https://www.otr.tg/index.php/fr/douanes/reglementation-douaniere/legislation-douaniere/cadre-de-partenariat-prive-cpp/626-decision-anticipee-de-maintien-de-la-validite-d-avis-de-classement-tarifaire-migration-du-systeme-harmonise-sh-2017-vers-le-systeme-harmonise-sh-2022.html', 'date' => '2026-10-05'],
        ['titre' => "CNUCED, SYDONIA : pays utilisateurs (102 pays et territoires)", 'url' => 'https://asycuda.org/en/user-countries/', 'date' => '2026-10-05'],
        ['titre' => "Organisation mondiale des douanes, qu'est-ce que le Système harmonisé ?", 'url' => 'https://www.wcoomd.org/en/topics/nomenclature/overview/what-is-the-harmonized-system.aspx', 'date' => '2026-10-05'],
        ['titre' => "Organisation mondiale du commerce, Accord sur la facilitation des échanges (entré en vigueur le 22 février 2017)", 'url' => 'https://www.wto.org/french/tratop_f/tradfa_f/tradfa_f.htm', 'date' => '2026-10-05'],
        ['titre' => "Organisation mondiale du commerce, texte de l'Accord sur la facilitation des échanges (articles 3 et 10)", 'url' => 'https://www.wto.org/french/docs_f/legal_f/tfa-nov14_f.htm', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement (UE) n° 952/2013 établissant le code des douanes de l'Union (articles 6, 15, 18 et 33)", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32013R0952', 'date' => '2026-10-05'],
        ['titre' => "Douane française, devenir représentant en douane enregistré (RDE)", 'url' => 'https://www.douane.gouv.fr/demarche/devenir-representant-en-douane-enregistre-rde', 'date' => '2026-10-05'],
        ['titre' => "OHADA, Acte uniforme relatif aux contrats de transport de marchandises par route (articles 2, 4 et 5)", 'url' => 'https://www.ohada.org/contrats-de-transport-de-marchandises-par-route/', 'date' => '2026-10-05'],
        ['titre' => "CNUDCI, état de la loi type sur les documents transférables électroniques (2017)", 'url' => 'https://uncitral.un.org/en/texts/ecommerce/modellaw/electronic_transferable_records/status', 'date' => '2026-10-05'],
        ['titre' => "DCSA, standard du connaissement (Bill of Lading)", 'url' => 'https://dcsa.org/standards/bill-of-lading', 'date' => '2026-10-05'],
        ['titre' => "DCSA, standard de suivi des conteneurs (Track and Trace)", 'url' => 'https://dcsa.org/standards/track-and-trace', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, règlement eFTI (UE) 2020/1056 sur les informations électroniques relatives au transport de marchandises", 'url' => 'https://transport.ec.europa.eu/transport-themes/logistics-and-multimodal-transport/efti-regulation_en', 'date' => '2026-10-05'],
        ['titre' => "CNIL, la géolocalisation des véhicules des salariés", 'url' => 'https://www.cnil.fr/fr/la-geolocalisation-des-vehicules-des-salaries', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : coûts logistiques (Landed costs)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/inventory/inventory_valuation/landed_costs.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : réception en trois étapes", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/inventory/shipping_receiving/daily_operations/receipts_three_steps.html', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, module Expéditions", 'url' => 'https://wiki.dolibarr.org/index.php/Module_Exp%C3%A9ditions', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business (quota de 1 000 messages de service gratuits depuis le 1er octobre 2026)", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-utilisateurs', 'excel-google-sheets', 'digitalisation-processus', 'whatsapp-odoo-dolibarr-crm', 'ia-processus-metier', 'cybersecurite-employes'],
        'services'    => ['integration-odoo', 'automatisation-ia', 'digitalisation-d-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
