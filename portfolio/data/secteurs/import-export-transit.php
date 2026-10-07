<?php
// ============================================================
// data/secteurs/import-export-transit.php · Page secteur « Import-export et
// transit » (vague 1E, univers « Direction et gestion »). Deux déclinaisons
// locales (Cotonou, Lomé).
// Faits externes relevés le 07/10/2026 : gouv.bj (factures normalisées, mesures
// pour les importateurs), douanes du Bénin (GUCE), Ecofin (port de Cotonou),
// Le360 et AllAfrica (port de Lomé), Bureau Veritas (SEGUCE Togo), Osiris
// (Dakar, GUCE-CI, IPDCP), douane.gouv.fr (DELTA T, ICS2), impots.gouv.fr,
// trans.info (eFTI), Dredgewire (Anvers-Bruges), OMD (accord de l'OMC),
// douane suisse (Système harmonisé), documentation Odoo 20.0, wiki Dolibarr,
// loi n° 2017-20 (article 391, lu dans le PDF du SGG), CNIL.
// ============================================================
declare(strict_types=1);

$tarifs = fait('tarifs_depart');
$eur = static fn(string $fcfa): string => number_format((float) preg_replace('/\D/', '', $fcfa) / 655.957, 2, ',', "\u{202F}") . "\u{00A0}€";
$landing = (string) $tarifs['Landing page'];
$vitrine = (string) $tarifs['Site vitrine'];
$seo     = (string) $tarifs['Référencement naturel'];

return [
    'titre'   => 'Import-export et transit : des dossiers suivis de l’enregistrement à la livraison, des coûts de revient justes et des clients informés sans relance',
    'title'   => 'Digitaliser import-export et transit | Richard SALANON',
    'meta'    => 'Dossiers de transit, coût de revient rendu, suivi des conteneurs, WhatsApp, Odoo et IA : ce que Richard SALANON met en place pour l’import-export.',
    'en_bref' => 'Richard SALANON digitalise les importateurs, exportateurs, transitaires, commissionnaires en douane et acheteurs d’Afrique francophone et d’Europe : suivi des dossiers par statuts, coût de revient rendu dans Odoo ou Dolibarr, échanges avec le guichet unique et les systèmes douaniers, notifications WhatsApp aux clients, automatisations et assistants IA relus par un humain. Le travail se mène à distance, avec une présence sur place au Bénin. Le prix se fixe sur devis après un diagnostic d’un dossier réel, de la commande au paiement.',
    'publie'  => '2026-11-05',
    'maj'     => '2026-11-05',
    'univers' => 'Direction et gestion',
    'locales' => ['digitaliser-import-export-cotonou', 'digitaliser-transit-lome'],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Importateurs, exportateurs, transitaires, commissionnaires en douane, logisticiens et acheteurs'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation de l’import-export et du transit en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Le secteur a deux étages. En haut, l’État et les ports ont déjà numérisé la déclaration : au Bénin, un communiqué du gouvernement de mars 2020 annonçait un portail électronique pour toutes les formalités de commerce extérieur, la généralisation du système douanier SYDONIA World à toutes les unités de douane et le paiement par mobile money des certificats, licences et permis (<a href="https://www.gouv.bj/actualite/538/commerce-exterieur-dinnovantes-mesures-au-profit-des-importateurs-et-exportateurs">publication du gouvernement béninois</a>). En bas, chez l’importateur ou le transitaire, le dossier voyage encore par courriel, tableur et messagerie, et la déclaration reste la seule étape réellement outillée.',
                'Les volumes expliquent la pression. Selon l’<a href="https://www.ecofinagency.com/news-infrastructures/1409-48662-benin-cotonou-port-handles-6-7-million-tons-in-h1-2025-despite-q2-slowdown">agence Ecofin</a>, le port autonome de Cotonou a manutentionné 6,7 millions de tonnes de janvier à juin 2025, dont 4,1 millions de tonnes d’importations, avec 404 navires contre 338 un an plus tôt. À Lomé, d’après <a href="https://afrique.le360.ma/economie/togo-le-trafic-de-conteneurs-au-port-de-lome-en-hausse-de-16-en-2025_CZ55MVGPVJDRPOLJMFCX5EY7OY/">Le360</a>, le trafic de conteneurs a progressé de 16 % en 2025, à 2,4 millions d’EVP contre 2,06 millions en 2024.',
                'Les guichets uniques existent aussi ailleurs. En Côte d’Ivoire, la société qui exploite le guichet a fêté ses dix ans les 2 et 3 juin 2025 à Abidjan, selon <a href="https://cio-mag.com/?p=58155">CIO Mag</a> : sa plateforme numérique centralise les procédures d’importation, d’exportation et de transit. Au Sénégal, le port de Dakar et la douane ont signé deux protocoles le 3 juin 2025 pour une dématérialisation complète des procédures d’enlèvement des marchandises autour de la plateforme ORBUS Infinity, rapporte <a href="https://osiris.sn/senegal-digitalisation-des-procedures-du-pad-et-des-douanes.html">Osiris</a>. Les échanges avec l’administration sont donc de plus en plus structurés, et l’entreprise doit pouvoir leur répondre avec des données propres.',
                'En Europe, le mouvement est comparable mais réglementaire. La douane française précise que DELTA T, son système de transit relié au système européen NCTS, est utilisé par tous les opérateurs depuis 2021 et est passé en phase 6 le 2 février 2026, avec le dépôt obligatoire d’une déclaration sommaire d’entrée dans ICS2 pour les marchandises non Union (<a href="https://www.douane.gouv.fr/fiche/le-transit-delta-t">douane.gouv.fr</a>). Et à la mi-2027, les autorités de tous les États membres devront accepter l’information de transport électronique du règlement eFTI, que les entreprises restent libres d’adopter, d’après <a href="https://trans.info/fr/reglement-efti-transport-europe-451478">trans.info</a>.',
                'La conséquence pour un client de Richard est simple : le retard n’est plus à la frontière, il est entre les murs. Un conteneur peut être déclaré en quelques heures sur le guichet unique et rester introuvable dans les fichiers de l’entreprise, parce que le numéro de dossier, la facture du fournisseur, les frais de port et l’échéance du client vivent dans quatre outils qui ne se parlent pas.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus de l’import-export gagnent à être digitalisés, et à quels signes le moment est-il venu ?',
            'intro' => 'Un dossier d’importation traverse une douzaine d’étapes entre la commande au fournisseur et l’encaissement du client. Les processus ci-dessous sont ceux où le temps et l’argent se perdent le plus souvent ; trois signes suffisent à justifier un diagnostic.',
            'items' => [
                ['titre' => 'Le dossier de transit', 'texte' => 'Facture du fournisseur, liste de colisage, connaissement ou lettre de transport, déclaration, quittances, bon à enlever, preuve de livraison : sans dossier unique, chacun cherche ses pièces et le client rappelle pour savoir où en est sa marchandise. Signe : plus d’un appel de relance par dossier.'],
                ['titre' => 'Le suivi des conteneurs et des camions', 'texte' => 'Date d’arrivée du navire, franchise de stockage, détention du conteneur, départ du camion, passage de frontière, déchargement. Chaque jalon manqué se paie en surestaries ou en pénalités. Signe : des frais de stationnement découverts à la facture du port.'],
                ['titre' => 'Le coût de revient rendu', 'texte' => 'Fret, assurance, droits et taxes, manutention, transport local : si ces frais arrivent par morceaux après la revente, la marge calculée au départ est fausse. Signe : un prix de vente fixé avant de connaître tous les frais du conteneur.'],
                ['titre' => 'La facturation et le recouvrement', 'texte' => 'Débours, honoraires, avances de droits, factures normalisées là où la loi l’exige, relances. Signe : des avances de droits payées pour un client et recouvrées des semaines plus tard sans état à jour.'],
                ['titre' => 'Les achats à l’étranger', 'texte' => 'Demandes de prix, commandes, acomptes aux fournisseurs, suivi de production, inspections avant embarquement. Signe : un même fournisseur relancé par trois personnes différentes.'],
                ['titre' => 'Le stock en entrepôt sous douane ou en dépôt', 'texte' => 'Entrées partielles, lots, sorties vers les revendeurs. Signe : un stock théorique qui ne tombe jamais juste à l’inventaire.'],
                ['titre' => 'L’information du client', 'texte' => 'Avis d’arrivée, statut de la déclaration, date de livraison. Signe : le téléphone de l’agence sert de tableau de bord.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Une activité de quelques dossiers par mois, tenue par une seule personne, se contente d’un tableur bien construit. Mieux vaut aussi attendre quand la classification tarifaire ou les circuits internes changent chaque semaine : on outille un processus stable, pas un chantier en cours.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour l’import-export et le transit ?',
            'legende' => 'Chaque ligne associe un besoin courant du secteur à un service de Richard ; le périmètre exact se fixe au diagnostic.',
            'entetes' => ['Besoin typique du secteur', 'Ce que Richard met en place', 'Service'],
            'lignes'  => [
                ['Gérer commandes d’achat, réceptions partielles et coût de revient rendu', 'Odoo paramétré pour le négoce : achats, inventaire, frais d’approche rattachés aux réceptions, facturation', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Suivre chaque dossier avec ses statuts, pièces jointes et échéances', 'Application web de gestion de dossiers, à vos étapes et vos rôles, reliée à vos outils', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Donner aux clients un espace de suivi de leurs marchandises', 'Espace client avec statuts, documents à télécharger et historique, sans appeler l’agence', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Faire parler entre eux l’ERP, le suivi, la comptabilité et les plateformes externes', 'Connecteurs REST, webhooks, import de fichiers d’agents maritimes, export vers le comptable', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Supprimer les ressaisies entre messagerie, tableur et ERP', 'Flux n8n ou Make : un courriel d’avis d’arrivée crée ou met à jour le dossier', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Prévenir les clients à chaque jalon', 'Messages WhatsApp à modèles approuvés : arrivée, déclaration déposée, camion parti, livraison', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Choisir un ERP léger pour un transitaire de taille moyenne', 'Dolibarr pour devis, factures, tiers et expéditions, quand Odoo serait surdimensionné', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Classer et lire des documents (factures, listes de colisage) plus vite', 'Extraction de champs par IA avec contrôle humain avant toute écriture dans le dossier', '<a href="/services/integration-ia-entreprise">Intégration de l’IA en entreprise</a>'],
                ['Garder l’outil en état entre deux montées de version et deux réformes', 'Support, correctifs, mise à jour des taux, des formats et des connecteurs', '<a href="/services/maintenance-support">Maintenance et support</a>'],
                ['Présenter l’entreprise à des fournisseurs et des clients étrangers', 'Site vitrine bilingue avec formulaire de demande de cotation', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels logiciels existent déjà, et faut-il les garder, les relier ou les remplacer ?',
            'legende' => 'Conseil de lecture : le choix dépend de la taille de l’activité, du nombre de personnes sur les dossiers et des outils déjà payés. Les systèmes officiels ne se remplacent pas par un outil privé ; le travail porte sur ce qui se passe autour.',
            'entetes' => ['Outil', 'Ce qu’il fait', 'Orientation, selon la situation', 'Raison'],
            'lignes'  => [
                ['Guichet unique du commerce extérieur (Bénin, Togo, Côte d’Ivoire, Sénégal)', 'Plateforme électronique pour les formalités et les documents du commerce extérieur, avec selon les pays le paiement des frais', 'Le choix dépend de votre rôle : en général, garder et alimenter depuis vos données', 'C’est le canal officiel ; au Togo, par exemple, le guichet unique SEGUCE délivre un document de frais unique qui autorise le paiement des factures en un point unique, selon <a href="https://www.republicoftogo.com/toutes-les-rubriques/eco-finance/seguce-en-phase-avec-ses-objectifs">République togolaise</a> et <a href="https://verigates.bureauveritas.com/node/61">Bureau Veritas</a>, l’un de ses exploitants'],
                ['SYDONIA ou GAINDE côté douane, DELTA T côté France', 'Système de déclaration et de transit de l’administration', 'Le choix dépend peu de vous, car il est imposé : préparer en amont les données qu’on y saisit', 'Il est imposé ; l’erreur de saisie se corrige mieux en amont, dans votre dossier'],
                ['Tableur de suivi des dossiers', 'Liste de conteneurs, dates, statuts', 'À remplacer si plusieurs personnes l’éditent ; à garder si une seule personne tient quelques dossiers', 'Pas d’historique, pas de droits par rôle, doublons de lignes'],
                ['Odoo (achats, inventaire, facturation)', 'Coût de revient, stock, factures, comptabilité', 'À relier au suivi, ou à remplacer par Odoo si l’outil en place ne gère pas les frais par réception', 'Les frais logistiques s’y répartissent par réception : voir le tableau suivant'],
                ['Dolibarr (expéditions, tiers, factures)', 'Bordereaux d’expédition, quantités expédiées et restantes, preuve de livraison', 'Peut convenir à une structure légère', 'Le wiki du module décrit un cycle simple de la commande à l’expédition'],
                ['Logiciel de transit spécialisé du marché', 'Déclarations, tarif, dossiers de transit', 'Le choix dépend du contrat et de la qualité des exports : souvent à garder et relier par fichier ou API', 'Cœur de métier déjà payé, souvent éprouvé par vos déclarants'],
                ['Comptabilité du cabinet ou de l’entreprise', 'Écritures, déclarations fiscales', 'En général à garder, alimenté par export contrôlé', 'Le comptable garde son logiciel ; on lui livre des écritures propres'],
                ['Messageries et WhatsApp personnel', 'Échanges avec clients, chauffeurs, agents', 'À encadrer plutôt qu’à bannir, si les équipes s’en servent déjà', 'Messages à modèles et historique rattaché au dossier, au lieu de captures d’écran'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Odoo ou Dolibarr calculent-ils un coût de revient rendu ?',
            'paragraphes' => [
                'Dans Odoo 20.0, la <a href="https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/inventory/inventory_valuation/landed_costs.html">documentation des coûts logistiques</a> décrit un mécanisme précis. Le frais (fret, assurance, droits, taxes) se saisit comme un produit de type service marqué « coût logistique ». On l’ajoute à la facture du fournisseur ou du transitaire, puis on crée un enregistrement de coûts rattaché à la réception déjà validée. Le montant se répartit selon cinq clés : à parts égales, par quantité, par coût courant, par poids ou par volume. Le coût de revient de chaque article est alors recalculé.',
                'Deux conditions comptent pour un négociant. D’abord, les articles doivent appartenir à une catégorie valorisée en coût moyen pondéré ou en premier entré, premier sorti, faute de quoi la fonction ne s’applique pas. Ensuite, la clé de répartition doit refléter la réalité : un conteneur mêlant des cartons légers et des machines lourdes se répartit au poids pour le fret, à la valeur pour l’assurance, et parfois à la main pour les droits, calculés par ligne tarifaire.',
                'Dolibarr suit une logique plus simple. Selon le <a href="https://wiki.dolibarr.org/index.php?title=Module_Exp%C3%A9ditions">wiki du module Expéditions</a>, on crée des expéditions à partir d’une commande client, on suit les quantités expédiées et restantes, on édite un bordereau et l’on accède à la preuve de distribution. C’est suffisant pour un transitaire qui facture surtout des prestations et des débours, moins pour un importateur qui veut un coût de revient article par article. Le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> détaille ce choix.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l’IA dans l’import-export, et que ne doit-elle jamais faire ?',
            'intro' => 'L’IA sert bien là où le travail consiste à lire, trier et rédiger des documents répétitifs. Elle ne remplace pas la personne qui engage sa responsabilité devant la douane ou devant le client.',
            'items' => [
                ['titre' => 'Lire factures, listes de colisage et connaissements', 'texte' => 'Extraire fournisseur, quantités, poids, incoterm et montants vers les champs du dossier. Un humain valide avant que les données ne partent dans la déclaration.'],
                ['titre' => 'Préparer des brouillons de classement tarifaire', 'texte' => 'Proposer des codes à partir d’une description, en citant les dossiers déjà traités. Le déclarant tranche : la déclaration engage sa responsabilité.'],
                ['titre' => 'Résumer les échanges d’un dossier', 'texte' => 'Condenser vingt courriels et messages en une chronologie lisible pour le collègue qui reprend le dossier.'],
                ['titre' => 'Répondre aux questions courantes des clients', 'texte' => 'Un assistant sur WhatsApp donne le statut d’un dossier à partir des données de l’ERP, et passe la main à un agent dès qu’il y a un litige ou un montant.'],
                ['titre' => 'Alerter sur les anomalies', 'texte' => 'Poids déclaré très éloigné de la liste de colisage, facture sans numéro de connaissement, franchise de stockage qui expire dans deux jours.'],
                ['titre' => 'Jamais décider seule d’une valeur en douane ou d’un code', 'texte' => 'Une erreur de valeur ou d’origine peut entraîner redressement et amende. La machine propose, une personne habilitée signe.'],
                ['titre' => 'Jamais recevoir de données qu’elle n’a pas à voir', 'texte' => 'Contrats de prix confidentiels, coordonnées bancaires des fournisseurs, pièces d’identité des chauffeurs : tri préalable et choix d’un fournisseur d’IA dont les conditions de conservation sont connues.'],
                ['titre' => 'Jamais écrire dans les systèmes officiels', 'texte' => 'Aucun robot ne dépose une déclaration à votre place : le dépôt reste l’acte d’une personne identifiée, dans le système de l’administration.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi un assistant IA ne doit-il pas répondre seul sur une valeur ou un délai ?',
            'texte' => 'Une réponse fausse sur un délai de franchise, un taux de droit ou un statut de déclaration se transforme vite en litige écrit, que le client conservera. Les réponses de l’assistant se limitent aux données lues dans l’ERP, citent leur date de mise à jour, et laissent à un agent tout ce qui touche à l’argent, au droit ou à un retard. Tout échange est consigné dans le dossier, pour pouvoir l’expliquer à la douane comme au client.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Facturation, paiements et données personnelles : quelles règles s’appliquent à un dossier d’import-export ?',
            'paragraphes' => [
                'Au Bénin, la facturation normalisée est obligatoire depuis le 29 février 2020 pour les entreprises assujetties à la TVA, selon la page du gouvernement <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">« Tout savoir sur les factures normalisées »</a>. La facture passe par une unité de facturation ou un module de contrôle, ou par un logiciel validé figurant sur la liste de la DGI. La première infraction est punie d’une amende égale à dix fois le montant de la facture, avec un minimum d’un million de FCFA par opération. Un ERP relié au système e-MECeF évite la double saisie ; le choix du logiciel se vérifie sur la liste officielle.',
                'En France, le calendrier est fixé par <a href="https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation">impots.gouv.fr</a> : depuis le 1er septembre 2026, toute entreprise doit pouvoir recevoir des factures électroniques, et les grandes et moyennes entreprises doivent en émettre ; les petites et moyennes entreprises et les microentreprises suivent le 1er septembre 2027. Le périmètre exact pour les prestations de transit, notamment à l’exportation, se confirme auprès de l’administration ou du cabinet comptable avant de choisir le format des factures.',
                'Pour les données personnelles, un dossier de transit contient des noms, téléphones et pièces d’identité de chauffeurs, de destinataires et de déclarants. Pour un transitaire béninois qui envoie un dossier à un partenaire à l’étranger, l’article 391 de la loi n° 2017-20 (code du numérique) pose une condition : l’Autorité doit avoir constaté, chez le destinataire, une protection équivalente. Le texte figure sur le site du <a href="https://sgg.gouv.bj/doc/loi-2017-20/">Secrétariat général du Gouvernement</a>. Au Togo, la loi n° 2019-014 a créé l’instance de protection, l’IPDCP, qui a démarré ses activités à Lomé le 28 mars 2025, rapporte <a href="https://cio-mag.com/protection-des-donnees-personnelles-au-togo-lipdcp-entame-sa-mission/">CIO Mag</a>.',
                'Pour un exportateur d’Abidjan, l’autorité compétente est l’ARTCI, qui agit comme autorité de protection des données au titre de la loi n° 2013-450 du 19 juin 2013, <a href="https://osiris.sn/protection-des-donnees-a-caractere-personnel-l-artci-met-en-place-un-cadre.html">selon Osiris</a> ; au Sénégal, la loi n° 2008-12 du 25 janvier 2008 encadre la protection des données, avec la Commission de protection des données personnelles pour autorité, d’après <a href="https://osiris.sn/loi-no-2008-12-du-25-janvier-2008-sur-la-protection-des-donnees-a-caractere.html">Osiris</a>. En Europe, les articles 45 et 46 du RGPD, présentés par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre5">CNIL</a>, subordonnent un transfert hors de l’Union à une décision d’adéquation ou à des garanties appropriées, comme des clauses contractuelles types. Un transitaire belge ou français qui confie un dossier à un prestataire hors Union doit donc signer ces clauses.',
                'Reste le secteur lui-même. Au Bénin, le décret n° 99-563 du 22 novembre 1999 fixe les conditions d’application des articles 97 à 106 du code des douanes alors en vigueur, relatifs aux personnes habilitées à déclarer en détail et à l’exercice de la profession de commissionnaire en douane. La profession étant réglementée, tout outil qui prépare une déclaration doit laisser l’agréé maître de la signature ; l’état actuel des textes se confirme auprès de la douane avant de lancer le projet.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères datés retenir avant de lancer un projet ?',
            'items' => [
                ['valeur' => '6,7 Mt', 'libelle' => 'Marchandises manutentionnées par le port de Cotonou au premier semestre 2025', 'source' => 'Ecofin Agency', 'url' => 'https://www.ecofinagency.com/news-infrastructures/1409-48662-benin-cotonou-port-handles-6-7-million-tons-in-h1-2025-despite-q2-slowdown'],
                ['valeur' => '2,4 M d’EVP', 'libelle' => 'Conteneurs traités par le port de Lomé en 2025, en hausse de 16 %', 'source' => 'Le360', 'url' => 'https://afrique.le360.ma/economie/togo-le-trafic-de-conteneurs-au-port-de-lome-en-hausse-de-16-en-2025_CZ55MVGPVJDRPOLJMFCX5EY7OY/'],
                ['valeur' => '22 février 2017', 'libelle' => 'Entrée en vigueur de l’accord de l’OMC sur la facilitation des échanges, après plus de 110 ratifications', 'source' => 'Organisation mondiale des douanes', 'url' => 'https://www.wcoomd.org/fr/media/newsroom/2017/february/wco-welcomes-entry-into-force-of-the-wto-trade-facilitation-agreement.aspx'],
                ['valeur' => '1er septembre 2027', 'libelle' => 'Date à laquelle les PME françaises devront émettre des factures électroniques', 'source' => 'impots.gouv.fr', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation'],
                ['valeur' => '1er janvier 2028', 'libelle' => 'Intégration des modifications de la huitième révision du Système harmonisé au tarif douanier suisse, occasion de revoir les codes des fiches articles', 'source' => 'Douane suisse', 'url' => 'https://www.bazg.admin.ch/fr/revision-systeme-harmonise-modifications-2028'],
                ['valeur' => '266,5 Mt', 'libelle' => 'Fret maritime du port d’Anvers-Bruges en 2025, en baisse de 4,1 %, avec environ 25 jours de grèves', 'source' => 'Dredgewire', 'url' => 'https://dredgewire.com/port-of-antwerp-bruges-ends-2025-with-resilience-in-a-turbulent-trading-climate/'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la digitalisation d’un importateur ou d’un transitaire, pays par pays ?',
            'items' => [
                ['secteur' => 'Importateur-grossiste, Cotonou (Bénin)', 'probleme' => 'Les conteneurs arrivent au port, les frais tombent en plusieurs factures et les revendeurs de l’intérieur paient en plusieurs versements ; la marge n’est connue qu’à la fin de la campagne.', 'solution' => 'Odoo avec achats, réceptions partielles et frais logistiques répartis par poids et par valeur, factures normalisées reliées au système e-MECeF, encours par revendeur et notification WhatsApp à chaque arrivée.'],
                ['secteur' => 'Transitaire agréé, Lomé (Togo)', 'probleme' => 'Les dossiers circulent entre le bureau, le port et les camions par messagerie ; les clients du Sahel demandent chaque jour où en est leur marchandise.', 'solution' => 'Application de dossiers avec statuts correspondant aux étapes du guichet unique, pièces jointes classées, état des débours par client et lien de suivi envoyé par message. Les déclarations restent saisies par le déclarant dans le système officiel.'],
                ['secteur' => 'Exportateur de produits agricoles, Abidjan (Côte d’Ivoire)', 'probleme' => 'Chaque lot exige des certificats, des factures et un connaissement ; les pièces se retrouvent par dossier dans plusieurs boîtes de messagerie.', 'solution' => 'Dossier d’exportation unique avec liste de pièces attendues par destination, rappel des échéances, export des données vers le comptable et conservation des preuves de livraison.'],
                ['secteur' => 'Commissionnaire de transport, Dakar (Sénégal)', 'probleme' => 'Plusieurs plateformes à alimenter, des avis d’arrivée à ressaisir et des clients qui comparent les délais annoncés aux délais réels.', 'solution' => 'Automatisation qui lit les avis reçus par courriel, crée ou met à jour le dossier et alimente un tableau de délais par étape, pour comprendre où les jours se perdent, sans toucher aux plateformes officielles.'],
                ['secteur' => 'Transitaire, Le Havre (France)', 'probleme' => 'La déclaration sommaire d’entrée, le transit et la facturation électronique imposent des données plus structurées qu’une saisie à la main.', 'solution' => 'Dossier structuré dès la prise de commande, contrôles de complétude avant dépôt dans ICS2 et DELTA T, et préparation des factures dans le format que le circuit de facturation électronique exigera.'],
                ['secteur' => 'Centrale d’achat, Anvers (Belgique)', 'probleme' => 'Des commandes passées en Asie et livrées en Afrique de l’Ouest, avec des acomptes, des inspections et des retards d’escale ou de grève.', 'solution' => 'Suivi des commandes fournisseurs par jalons, alerte automatique quand un navire est retardé, répartition des surcoûts sur les lignes concernées et message prêt à partir au client final.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet d’import-export ou de transit, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez votre activité : import, export, transit, nombre de dossiers par mois, outils actuels. Cet échange établit si un projet se justifie ou si un tableur mieux construit suffit.'],
                ['titre' => 'Diagnostic sur un dossier réel', 'duree' => 'Selon le projet', 'texte' => 'On suit un dossier de la commande à l’encaissement, pièces en main : qui fait quoi, quel document, quel système, à quel moment. Le diagnostic liste les pertes (relances, frais découverts tard, ressaisies) et propose un ordre de traitement.'],
                ['titre' => 'Données de référence', 'duree' => 'Selon le projet', 'texte' => 'Tiers, articles, codes tarifaires, incoterms, ports, transporteurs, clés de répartition des frais : ces listes sont nettoyées avant toute configuration, car elles conditionnent la justesse des coûts de revient.'],
                ['titre' => 'Premier palier en production', 'duree' => 'Selon le projet ; une application sur mesure se livre en 1 à 3 mois', 'texte' => 'Souvent le dossier avec ses statuts et ses pièces, ou la réception avec ses frais. Un seul palier à la fois, utilisé réellement par l’équipe avant d’ouvrir le suivant.'],
                ['titre' => 'Raccordements', 'duree' => 'Selon le projet', 'texte' => 'WhatsApp, comptabilité, import des avis d’arrivée, système de facturation normalisée, ERP existant : chaque connecteur est testé avec de vraies données, sur une base de test.'],
                ['titre' => 'Recette et formation', 'duree' => 'Selon le projet', 'texte' => 'Chaque rôle, déclarant, comptable, agent d’accueil, acheteur, déroule un scénario complet. La formation se fait sur vos dossiers, avec un guide court par poste.'],
                ['titre' => 'Suivi et évolutions', 'duree' => 'Selon le projet', 'texte' => 'Contrôle régulier des écarts entre le terrain et l’outil, mise à jour des formats lors d’une réforme, nouveaux paliers (portail client, assistant IA, tableaux de bord) selon les priorités.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la digitalisation d’une activité d’import-export ou de transit ?',
            'intro'      => "Les seuls tarifs de départ affichés sur ce site sont : landing page à partir de {$landing} (environ " . $eur($landing) . "), site vitrine à partir de {$vitrine} (environ " . $eur($vitrine) . "), référencement naturel à partir de {$seo} (environ " . $eur($seo) . "), au taux de 655,957 FCFA pour 1 €. Tout le reste se chiffre sur devis, après le diagnostic d’un dossier réel. Le paiement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => 'Diagnostic d’un dossier réel', 'prix' => 'Sur devis', 'inclus' => ['Analyse d’une opération de la commande à l’encaissement', 'Liste des pertes et ordre de traitement', 'Choix argumenté de l’outil', 'Plan par paliers']],
                ['offre' => 'Suivi des dossiers et espace client', 'prix' => 'Sur devis', 'inclus' => ['Statuts à vos étapes', 'Pièces jointes et rôles', 'Lien de suivi ou espace client', 'Notifications WhatsApp à modèles approuvés']],
                ['offre' => 'ERP : achats, stock, coût de revient, facturation', 'prix' => 'Sur devis', 'inclus' => ['Paramétrage Odoo ou Dolibarr', 'Frais logistiques répartis', 'Reprise des tiers et des articles', 'Formation par poste']],
                ['offre' => 'Automatisations et IA relue', 'prix' => 'Sur devis', 'inclus' => ['Lecture des avis et factures', 'Alertes sur jalons et anomalies', 'Contrôle humain avant écriture', 'Journal des actions']],
            ],
            'variations' => [
                'Le nombre de dossiers par mois et d’utilisateurs, qui commande la robustesse attendue.',
                'La part d’import, d’export et de transit pour compte de tiers, qui change les statuts et les documents.',
                'L’existence d’un logiciel de transit ou d’un ERP à relier plutôt qu’à remplacer.',
                'Le nombre de pays et de guichets uniques concernés, chacun avec ses formats.',
                'Le raccordement à un système de facturation normalisée ou électronique.',
                'Le volume de documents à lire par IA et le niveau de contrôle exigé.',
                'Le nombre de clients à informer par WhatsApp et les modèles de messages à faire approuver.',
                'Les sites à visiter, les personnes à former et la reprise de l’historique.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font dérailler un projet dans l’import-export et le transit ?',
            'intro' => 'Ces erreurs reviennent dans les projets du secteur ; toutes se préviennent au diagnostic.',
            'items' => [
                ['titre' => 'Vouloir remplacer le système douanier', 'texte' => 'SYDONIA, GAINDE, DELTA T ou un guichet unique sont des canaux officiels. Un projet réussi prépare les données avant le dépôt et récupère les statuts après, sans prétendre s’y substituer.'],
                ['titre' => 'Répartir tous les frais de la même façon', 'texte' => 'Fret au poids, assurance à la valeur, droits par ligne tarifaire : une clé unique fausse le coût de revient de chaque article et donc les prix de vente.'],
                ['titre' => 'Laisser les codes tarifaires à l’abandon', 'texte' => 'Une révision du Système harmonisé, comme celle qui entre dans le tarif suisse en 2028, invite à reprendre les fiches articles ; sans responsable, les codes se périment.'],
                ['titre' => 'Notifier le client sur un statut non fiable', 'texte' => 'Un message WhatsApp « déclaration déposée » envoyé trop tôt ruine la confiance. Les notifications ne partent que sur un jalon validé dans le dossier.'],
                ['titre' => 'Négliger la sauvegarde et le plan de repli', 'texte' => 'Un armateur de premier rang a dû prendre des commandes par messagerie et tableur pendant la remise en route de son informatique après une attaque ; son récit est résumé dans l’histoire <a href="/histoires/maersk-notpetya">Maersk et NotPetya</a>. Chez un transitaire, une panne un jour d’arrivée de navire coûte des surestaries.'],
                ['titre' => 'Mélanger données du client et données de l’entreprise', 'texte' => 'Chaque client doit voir ses seuls dossiers ; un espace client mal cloisonné expose des tarifs et des noms de fournisseurs aux concurrents.'],
                ['titre' => 'Ignorer l’adoption côté terrain', 'texte' => 'Le chauffeur, l’agent de quai et le déclarant n’ont pas les mêmes contraintes de téléphone et de réseau. Un écran conçu pour le bureau reste vide au port.'],
                ['titre' => 'Confier les clés au seul prestataire', 'texte' => 'Comptes administrateurs, hébergement, code, clés d’API, modèles WhatsApp : tout doit être ouvert au nom de votre entreprise.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes d’un importateur ou d’un transitaire ?',
            'paragraphes' => [
                'Un outil livré sans formation redevient un cahier au bout d’un mois. Richard a déjà formé des acheteurs, et peut former des logisticiens et transitaires, publics que ce secteur emploie en nombre : les premiers pour le cycle des achats à l’étranger, les seconds pour le dossier d’expédition de bout en bout. Les pages <a href="/formations/metier/acheteurs">formations pour acheteurs</a> et <a href="/formations/metier/logisticiens-transitaires">formations pour logisticiens et transitaires</a> présentent ces parcours.',
                'Côté outils, la fiche <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> prépare les postes d’achat, de stock et de facturation, la fiche <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a> consolide les tableaux de suivi qui subsistent, et <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a> couvre les notifications aux clients. La fiche <a href="/formations/ia-processus-metier">IA dans les processus métier</a> apprend à choisir les étapes confiées à l’IA et celles qui restent humaines. Les formations se déroulent sur vos dossiers, pas sur des cas d’école.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la digitalisation de votre activité d’import-export à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Ce profil sert un secteur à deux faces. Du côté du dossier, Richard conçoit des applications web, des espaces clients et des intégrations sur mesure ; du côté de la gestion, il déploie Odoo et Dolibarr avec la comptabilité SYSCOHADA ; du côté du client final, il relie WhatsApp aux logiciels de gestion, ce qui est le canal que les clients du transit utilisent déjà. Il est aussi le créateur de <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et co-fondateur d’<a href="https://audyxa.com">Audyxa</a>.',
                'Sa méthode tient en quelques engagements : un diagnostic sur un dossier réel, un palier en production avant d’ouvrir le suivant, des accès et du code à votre nom, une IA toujours relue par un humain, et une réponse sous 24 heures. Les pages locales <a href="/digitaliser-import-export-cotonou">L’import-export à Cotonou</a> et <a href="/digitaliser-transit-lome">Le transit à Lomé</a> déclinent cette offre pour les entreprises de ces deux villes portuaires. Les projets menés par Richard sont présentés sur <a href="/realisations/">les réalisations</a>, et son parcours complet sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez savoir par où commencer pour vos dossiers de transit ?',
            'texte'  => 'Décrivez votre activité, le nombre de dossiers par mois, vos outils actuels et le point qui vous coûte le plus : vous recevez une réponse sous 24 heures et, après un premier échange, un plan par paliers avec un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon activité'],
        ],
    ],

    'faq' => [
        ['q' => 'Le guichet unique du commerce extérieur remplace-t-il un logiciel de gestion pour mon entreprise ?', 'r' => 'Non. Il sert aux formalités et aux paiements officiels, pas à tenir vos achats, votre stock, votre coût de revient ou vos relances. Le travail consiste à préparer vos données avant d’alimenter le guichet et à récupérer les statuts après, pas à le remplacer.'],
        ['q' => 'Odoo sait-il répartir les frais de fret et de douane sur le coût de revient ?', 'r' => 'Oui, par la fonction de coûts logistiques décrite dans la documentation d’Odoo 20.0. Le frais se saisit comme un service marqué coût logistique, se rattache à une réception validée et se répartit à parts égales, par quantité, par coût courant, par poids ou par volume. Les articles doivent être valorisés en coût moyen ou en premier entré, premier sorti.'],
        ['q' => 'Dolibarr suffit-il pour un transitaire ?', 'r' => 'Souvent, pour une structure légère qui facture surtout des prestations et des débours : le module Expéditions suit les quantités expédiées et restantes, édite un bordereau et donne accès à la preuve de distribution. Un importateur qui veut un coût de revient précis article par article gagnera plutôt à utiliser Odoo.'],
        ['q' => 'Peut-on automatiser le dépôt des déclarations en douane ?', 'r' => 'Non, et ce n’est pas ce que Richard propose. Le dépôt reste l’acte d’un déclarant identifié dans le système de l’administration. L’automatisation porte sur la préparation des données, les contrôles de complétude et le suivi des statuts, pour que le déclarant dépose plus vite et sans ressaisie.'],
        ['q' => 'L’IA peut-elle choisir le code tarifaire d’une marchandise ?', 'r' => 'Elle peut proposer un brouillon à partir d’une description et de dossiers antérieurs, jamais trancher. Une erreur de classement ou de valeur engage la responsabilité du déclarant et peut conduire à un redressement. Un humain habilité valide chaque code avant la déclaration.'],
        ['q' => 'Puis-je prévenir mes clients sur WhatsApp à chaque étape d’un dossier ?', 'r' => 'Oui, avec l’API WhatsApp Business : des modèles de messages approuvés par Meta (arrivée du navire, déclaration déposée, livraison) partent automatiquement quand le jalon est validé dans le dossier. Le client peut répondre, et la conversation se rattache au dossier.'],
        ['q' => 'Ma facture doit-elle être normalisée au Bénin ?', 'r' => 'Si votre entreprise est assujettie à la TVA, oui, depuis le 29 février 2020, d’après le gouvernement béninois. La facture passe par une unité de facturation, un module de contrôle ou un logiciel validé. Vérifiez sur la liste officielle de la DGI que votre ERP figure parmi les logiciels validés avant le démarrage.'],
        ['q' => 'Quelles règles de données personnelles s’appliquent à un dossier de transit ?', 'r' => 'Celles du pays où l’entreprise est établie : loi n° 2017-20 au Bénin, loi n° 2019-014 au Togo, loi n° 2013-450 en Côte d’Ivoire, loi n° 2008-12 au Sénégal, RGPD en Europe. Les dossiers contiennent des noms, téléphones et pièces de chauffeurs et de destinataires : on limite l’accès par rôle et l’on encadre tout transfert vers un autre pays.'],
        ['q' => 'Que se passe-t-il pour mes outils quand le Système harmonisé change ?', 'r' => 'Les codes des fiches articles sont à revoir. Les modifications de la huitième révision entrent par exemple dans le tarif douanier suisse le 1er janvier 2028, selon la douane suisse. On prévoit une procédure de correspondance entre anciens et nouveaux codes, et un responsable de la mise à jour dans l’entreprise.'],
        ['q' => 'Combien coûte un projet pour un transitaire ou un importateur ?', 'r' => 'Le prix se fixe sur devis après le diagnostic d’un dossier réel. Il dépend du nombre d’utilisateurs, de dossiers et de pays, des raccordements (facturation normalisée, WhatsApp, comptabilité) et de la reprise de l’historique. Les tarifs de départ publiés sur le site concernent seulement la landing page, le site vitrine et le référencement naturel.'],
        ['q' => 'Faut-il un serveur propre ou un hébergement en ligne ?', 'r' => 'Cela dépend de la connexion et des données. Un hébergement en ligne convient quand l’accès est stable. Quand les coupures durent des heures, un serveur au bureau avec onduleur et sauvegarde chiffrée hors du site peut être plus sûr. Le choix se fait au diagnostic, avec vos contraintes de réseau.'],
        ['q' => 'Intervenez-vous sur place ?', 'r' => 'Au Bénin, oui, et à distance partout ailleurs, en visioconférence pour le diagnostic et la formation, avec un paramétrage mené à distance. Pour un client installé en Europe ou au Canada, le règlement passe par carte, PayPal ou virement.'],
    ],

    'sources' => [
        ['titre' => 'Gouvernement du Bénin, « Tout savoir sur les factures normalisées au Bénin »', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, « Commerce extérieur : d’innovantes mesures au profit des importateurs et exportateurs »', 'url' => 'https://www.gouv.bj/actualite/538/commerce-exterieur-dinnovantes-mesures-au-profit-des-importateurs-et-exportateurs', 'date' => '2026-10-07'],
        ['titre' => 'Douanes du Bénin, dématérialisation des procédures de dédouanement via le GUCE', 'url' => 'https://douanes.gouv.bj/en/dematerialisation-des-procedures-de-dedouanement-via-le-guichet-unique-du-commerce-exterieur-guce-mise-en-service-officielle-du-site-de-reprise-informatique-du-guce/', 'date' => '2026-10-07'],
        ['titre' => 'Ecofin Agency, port de Cotonou : 6,7 millions de tonnes au premier semestre 2025', 'url' => 'https://www.ecofinagency.com/news-infrastructures/1409-48662-benin-cotonou-port-handles-6-7-million-tons-in-h1-2025-despite-q2-slowdown', 'date' => '2026-10-07'],
        ['titre' => 'Le360, le trafic de conteneurs au port de Lomé en hausse de 16 % en 2025', 'url' => 'https://afrique.le360.ma/economie/togo-le-trafic-de-conteneurs-au-port-de-lome-en-hausse-de-16-en-2025_CZ55MVGPVJDRPOLJMFCX5EY7OY/', 'date' => '2026-10-07'],
        ['titre' => 'Bureau Veritas, SEGUCE Togo : guichet unique et document de frais unique', 'url' => 'https://verigates.bureauveritas.com/node/61', 'date' => '2026-10-07'],
        ['titre' => 'CIO Mag, le guichet unique du commerce extérieur de Côte d’Ivoire célèbre ses dix ans', 'url' => 'https://cio-mag.com/?p=58155', 'date' => '2026-10-07'],
        ['titre' => 'Osiris, Sénégal : digitalisation des procédures du port de Dakar et des douanes', 'url' => 'https://osiris.sn/senegal-digitalisation-des-procedures-du-pad-et-des-douanes.html', 'date' => '2026-10-07'],
        ['titre' => 'douane.gouv.fr, le transit DELTA T et la phase 6 (ICS2)', 'url' => 'https://www.douane.gouv.fr/fiche/le-transit-delta-t', 'date' => '2026-10-07'],
        ['titre' => 'impots.gouv.fr, calendrier de la réforme de la facturation électronique', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-07'],
        ['titre' => 'trans.info, règlement eFTI : ce qui change dans le transport en Europe', 'url' => 'https://trans.info/fr/reglement-efti-transport-europe-451478', 'date' => '2026-10-07'],
        ['titre' => 'Dredgewire, port d’Anvers-Bruges : résultats 2025', 'url' => 'https://dredgewire.com/port-of-antwerp-bruges-ends-2025-with-resilience-in-a-turbulent-trading-climate/', 'date' => '2026-10-07'],
        ['titre' => 'Organisation mondiale des douanes, entrée en vigueur de l’accord de l’OMC sur la facilitation des échanges', 'url' => 'https://www.wcoomd.org/fr/media/newsroom/2017/february/wco-welcomes-entry-into-force-of-the-wto-trade-facilitation-agreement.aspx', 'date' => '2026-10-07'],
        ['titre' => 'Douane suisse, révision du Système harmonisé : modifications 2028', 'url' => 'https://www.bazg.admin.ch/fr/revision-systeme-harmonise-modifications-2028', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, coûts logistiques', 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/inventory/inventory_valuation/landed_costs.html', 'date' => '2026-10-07'],
        ['titre' => 'Wiki Dolibarr, module Expéditions', 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_Exp%C3%A9ditions', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 99-563 du 22 novembre 1999 (commissionnaires en douane)', 'url' => 'https://sgg.gouv.bj/doc/decret-1999-563/download', 'date' => '2026-10-07'],
        ['titre' => 'République togolaise, SEGUCE en phase avec ses objectifs (document de frais unique)', 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/eco-finance/seguce-en-phase-avec-ses-objectifs', 'date' => '2026-10-07'],
        ['titre' => 'Osiris, Côte d’Ivoire : l’ARTCI autorité de protection des données (loi n° 2013-450)', 'url' => 'https://osiris.sn/protection-des-donnees-a-caractere-personnel-l-artci-met-en-place-un-cadre.html', 'date' => '2026-10-07'],
        ['titre' => 'CIO Mag, au Togo, l’IPDCP entame sa mission (loi n° 2019-014)', 'url' => 'https://cio-mag.com/protection-des-donnees-personnelles-au-togo-lipdcp-entame-sa-mission/', 'date' => '2026-10-07'],
        ['titre' => 'Osiris, loi n° 2008-12 du 25 janvier 2008 sur la protection des données (Sénégal)', 'url' => 'https://osiris.sn/loi-no-2008-12-du-25-janvier-2008-sur-la-protection-des-donnees-a-caractere.html', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre V (articles 45 et 46, transferts hors de l’Union)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre5', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['integration-odoo', 'application-web-sur-mesure', 'api-rest-integrations', 'automatisation-ia', 'integration-whatsapp', 'saas-espace-client', 'integration-dolibarr', 'integration-ia-entreprise'],
        'metiers'     => ['logisticiens-transitaires', 'acheteurs'],
        'formations'  => ['odoo-utilisateurs', 'excel-google-sheets', 'whatsapp-odoo-dolibarr-crm', 'ia-processus-metier', 'digitalisation-processus', 'adoption-erp'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'histoires'   => ['maersk-notpetya'],
    ],

];
