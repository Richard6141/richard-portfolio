<?php
// ============================================================
// data/metiers/fiscalistes.php · Page « formations par métier » pour les
// fiscalistes (vague 1C, univers « Chiffre et finance », non prioritaire,
// statut F : Richard a déjà formé ce public). Angle propre : le fiscaliste
// de cabinet et d'entreprise, de la veille fiscale au contentieux :
// lecture des lois de finances, déclarations et télédéclaration, factures
// certifiées (e-MECeF au Bénin, FNE en Côte d'Ivoire), facturation
// électronique en France, conseil, contrôles, secret professionnel. La page
// oriente vers ia-comptables-syscohada, ia-droit-ohada et excel-google-sheets
// sans en reprendre le texte, et ne reprend rien des pages
// experts-comptables, auditeurs-controleurs-gestion et banques-microfinance.
// Sources lues le 05/10/2026 : plateforme e-MECeF de la DGI du Bénin, page
// gouv.bj sur les factures normalisées (27/02/2020), portail FNE et
// procédure d'interfaçage par API (mai 2025) de la DGI de Côte d'Ivoire,
// communiqué de la DGI du 05/09/2025, portail e-impots (version 3.7.2 du
// 06/03/2026), page SENTAX de la DGID du Sénégal, FAQ de la DGFiP et page
// impots.gouv.fr (modifiée le 01/09/2026), BOFiP, page ViDA de la
// Commission européenne, communiqué de la CJUE n° 198/22 (C-694/20),
// décision Harber v HMRC ([2023] UKFTT 1007 (TC)), documentation d'Odoo
// 20.0 (positions fiscales, déclarations de TVA), FDFP, 3FPT, France
// Compétences. sgg.gouv.bj ne répondait pas le 05/10/2026 : le décret
// n° 2022-286 (FODEFCA) et la loi n° 2017-20 sont cités comme dans les pages
// sœurs. Faits repris du catalogue : article 4 du règlement sur l'IA,
// gratuité du cadrage. Richard n'est pas fiscaliste : la page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour fiscalistes : une veille tenue chaque semaine, des déclarations rapprochées des factures certifiées et des contrôles mieux préparés, sans confier à l'outil ni une position fiscale ni le secret du client",
    'title'   => "Formation IA et numérique pour fiscalistes | Richard SALANON",
    'meta'    => "Former les fiscalistes à l'IA et au numérique : veille, déclarations, e-MECeF, FNE, facture électronique, contrôles et secret professionnel. Sur devis.",
    'en_bref' => "Cette page s'adresse aux cabinets de conseil fiscal, aux avocats fiscalistes et aux directions fiscales d'entreprise qui veulent former leurs équipes à l'intelligence artificielle, à l'automatisation et aux plateformes fiscales en ligne, de la lecture de la loi de finances jusqu'à la réponse à un contrôle. Elle montre ce que ces outils changent au métier, ce qu'ils ne doivent jamais trancher, et quelles formations du catalogue retenir selon le poste. Le parcours type tient en six demi-journées, en intra, en inter, à distance ou en formule hybride, et son prix est établi sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Chiffre et finance',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : la fonction fiscale vue comme un calendrier, des sources et des données",
            'duree'  => '3 h 30',
            'points' => [
                "Relevé, avec les participants, des obligations réellement suivies : impôts, régimes, périodicités, pays, entités, et le nom de la personne qui répond de chacune.",
                "Carte des sources officielles par pays : code général des impôts, livre de procédures fiscales, loi de finances et son annexe fiscale, doctrine publiée, conventions fiscales.",
                "Ce qu'un assistant d'IA fait bien en fiscalité (lire, comparer deux versions, structurer une note) et ce qu'il fait mal (dater une règle, citer un arrêt réel, calculer un impôt).",
                "Inventaire sans reproche des comptes d'IA, des groupes de discussion et des tableurs qui circulent déjà entre les fiscalistes et leurs clients.",
                "Choix de trois chantiers pour la suite, chacun mesuré avant la session : délai de production d'une note de veille, nombre d'écarts trouvés au dépôt, temps passé à réunir les pièces d'un contrôle.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : une veille fiscale qui part du texte officiel et finit dans une fiche d'impact",
            'duree'  => '3 h 30',
            'points' => [
                "Les sources que l'on suit, à quelle fréquence, et qui les lit : journal officiel, site de l'administration fiscale, doctrine, décisions des juridictions.",
                "Faire résumer par l'assistant un texte que l'on a soi-même téléchargé, article par article, puis confronter chaque ligne du résumé au texte publié.",
                "Comparer deux versions d'un article de code, avant et après la loi de finances, et lister les changements à vérifier.",
                "Passer du résumé à la fiche d'impact : quels clients ou quelles entités, quel impôt, à partir de quelle date, quelle décision à prendre.",
                "Exercice : la dernière loi de finances du pays des participants, transformée en trois fiches d'impact relues par un binôme.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : factures certifiées et données de facturation, ce que le fiscaliste doit savoir lire",
            'duree'  => '3 h 30',
            'points' => [
                "Ce qui rend une facture opposable selon le pays : éléments de sécurité de la facture normalisée au Bénin, sticker électronique de la FNE en Côte d'Ivoire, format structuré et plateforme agréée en France.",
                "Les canaux d'émission : e-SFE de la DGI béninoise ou système de facturation approuvé, module en ligne, application mobile, terminaux ou API pour la FNE.",
                "Contrôles mensuels dans le tableur : numérotation continue, avoirs certifiés, factures annulées, concordance entre chiffre d'affaires facturé, comptabilisé et déclaré.",
                "Les factures d'achat sans mentions de sécurité : les repérer, les signaler, laisser au fiscaliste la décision sur leur traitement.",
                "Exercice : un mois d'exports de factures certifiées rapproché de la déclaration de taxe sur la valeur ajoutée, avec la liste des écarts expliqués.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : déclarer et télédéclarer sans découvrir l'échéance la veille",
            'duree'  => '3 h 30',
            'points' => [
                "Calendrier fiscal partagé par entité et par impôt, avec deux personnes habilitées sur chaque portail et une alerte à dix jours.",
                "Portails de télédéclaration et de télépaiement : comptes, habilitations, preuves de dépôt et de paiement archivées avec la déclaration.",
                "Dans l'ERP : taxes, positions fiscales, grilles de déclaration et verrouillage de la période déclarée, avec l'exemple d'Odoo 20.0.",
                "Contrôles de cohérence avant dépôt écrits une fois pour toutes, et exécutés par une formule plutôt que par une relecture à l'œil.",
                "Exercice : préparer le dépôt mensuel de trois entités fictives de régimes différents, avec la liste des contrôles cochés.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : conseil, contrôle fiscal et contentieux, ce que l'outil structure et ce que le fiscaliste argumente",
            'duree'  => '3 h 30',
            'points' => [
                "Note de consultation : faits pseudonymisés, question posée, règles citées avec leur source vérifiée, réponse, réserves ; l'assistant propose un plan, le fiscaliste écrit la position.",
                "Simulation chiffrée de deux options dans le tableur, hypothèses visibles en tête de feuille, aucun impôt calculé dans une réponse rédigée.",
                "Préparation d'une vérification : inventaire des pièces demandées, chronologie des opérations, tableau des questions de l'administration et des réponses à apporter.",
                "Premier jet d'un courrier ou d'une réclamation : l'outil met en forme, le fiscaliste choisit les moyens, vérifie chaque référence et signe.",
                "Étude de la décision Harber v HMRC : neuf décisions inventées produites devant un tribunal fiscal, et la méthode qui évite d'en citer une.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi : secret, données, règles du cabinet ou de la direction fiscale, évaluation",
            'duree'  => '3 h 30',
            'points' => [
                "Pseudonymiser un dossier fiscal : identifiants fiscaux, noms, montants caractéristiques, montages reconnaissables.",
                "Qui est tenu à quel secret selon son statut (avocat, expert-comptable, conseil salarié d'une entreprise), et ce que cela interdit de verser dans un outil en ligne.",
                "Rédaction des règles d'usage de l'IA propres à la structure : outils admis, données exclues, relecture obligatoire, trace de chaque consigne utilisée.",
                "Évaluation sur un dossier fil rouge : une nouveauté de la loi de finances, son effet sur la déclaration du mois et la note au client.",
                "Plan à trois mois : qui tient la veille, qui contrôle les factures certifiées, quel indicateur prouvera que l'outil a servi.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Fiscalistes de cabinet, avocats fiscalistes, directeurs et responsables fiscaux, comptables chargés des déclarations"],
        ['l' => 'Durée', 'v' => "Parcours type de 3 jours en 6 demi-journées, ajusté au poste"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent concrètement au métier de fiscaliste ?",
            'paragraphes' => [
                "Le travail du fiscaliste tient en quatre verbes : lire la règle, la rapprocher des faits, déclarer, défendre. Pendant longtemps, l'administration découvrait les faits après lui, au moment d'un contrôle. Ce décalage se réduit. Les factures passent désormais par des plateformes de l'administration ou agréées par elle, les déclarations se déposent en ligne, et les données arrivent au fisc presque en même temps qu'au service fiscal de l'entreprise. Un écart entre ce qui a été facturé et ce qui a été déclaré ne dort plus trois ans dans un classeur : il se voit vite, des deux côtés.",
                "En Côte d'Ivoire, la loi de finances pour 2025 a institué la facture normalisée électronique et le reçu normalisé électronique, d'après la procédure d'interfaçage publiée par la Direction générale des impôts en mai 2025. Au Bénin, la plateforme e-MECeF permet à toute entreprise, quelle que soit sa taille, d'éditer ses factures normalisées en ligne. Au Sénégal, la page SENTAX de la Direction générale des impôts et des domaines, consultée le 5 octobre 2026, indique que la télédéclaration et le télépaiement y sont obligatoires depuis le 1er septembre 2026 pour les contribuables de la Direction des grandes entreprises.",
                "En France, la foire aux questions de la DGFiP présente la facturation électronique comme un moyen de lutter « plus efficacement et plus précocement » contre la fraude à la TVA et annonce, à terme, des déclarations de TVA préremplies. Une déclaration préremplie par l'administration ne dispense pas de la vérifier : elle oblige au contraire à savoir d'où vient chaque montant. Au niveau européen, le paquet « TVA à l'ère numérique », adopté le 11 mars 2025, prévoit une déclaration numérique des échanges entre entreprises de pays différents à partir du 1er juillet 2030.",
                "L'autre changement vient des assistants d'IA générative. Ils lisent en une minute une annexe fiscale de quarante pages, comparent deux versions d'un article, proposent le plan d'une consultation. Ils produisent aussi, avec le même aplomb, un taux abrogé, une exonération d'un pays voisin ou une décision de justice qui n'a jamais existé. En fiscalité, chaque phrase finit dans une déclaration, une note signée ou un mémoire devant un juge : l'outil peut faire gagner des heures de lecture, à condition que personne ne lui confie la règle elle-même.",
                "Le métier s'exerce sous plusieurs statuts, et le parcours en tient compte : fiscaliste de cabinet de conseil, avocat fiscaliste, collaborateur d'un cabinet d'expertise comptable, directeur ou responsable fiscal d'un groupe, comptable chargé des déclarations d'une PME. Une précision vaut pour tous : Richard SALANON n'est pas fiscaliste. Il forme à l'usage des outils, de l'IA, des tableurs, des ERP et des plateformes en ligne. Les textes fiscaux cités sur cette page servent à montrer où l'outil s'arrête ; leur interprétation appartient aux professionnels formés et, en cas de doute, à l'administration du pays.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches du fiscaliste l'outil peut-il préparer, et lesquelles lui restent ?",
            'legende' => "Partage enseigné pendant le parcours, de la veille au contentieux. La dernière colonne renvoie à la fiche du catalogue qui approfondit l'outil concerné.",
            'entetes' => ['Tâche', "Ce que l'outil prépare", 'Ce que le fiscaliste garde', 'Fiche à consulter'],
            'lignes'  => [
                ['Veille fiscale', "Résumé d'un texte téléchargé à la source, tableau comparatif de deux versions d'un article, première liste des entités concernées", "Dire si la règle s'applique, à partir de quand, et ce qu'elle change pour chaque client", "<a href=\"/formations/ia-droit-ohada\">IA et droit OHADA : recherche, rédaction, veille</a>"],
                ['Recherche', "Mots-clés, notions voisines, articles probablement concernés, plan de recherche", "Lire le texte en vigueur, la doctrine publiée et les décisions dans les bases officielles", "<a href=\"/formations/prompt-engineering\">Prompt engineering professionnel</a>"],
                ['Déclarations', "Calendrier, alertes, contrôles de cohérence, préparation des montants à partir des exports", "Choisir le régime, arrêter les montants, déposer et signer", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ['Factures certifiées', "Rapprochement des exports e-MECeF ou FNE avec la comptabilité, contrôle de la numérotation, liste des avoirs", "Décider du traitement d'une facture irrégulière, corriger par le canal prévu par l'administration", "<a href=\"/formations/ia-comptables-syscohada\">IA pour comptables (SYSCOHADA)</a>"],
                ['Paramétrage fiscal de l\'ERP', "Contrôle des taxes appliquées par client et par produit, rapport des écarts de taux", "Définir les taxes et les positions fiscales, valider le paramétrage avant la mise en service", "<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ['Conseil', "Plan de consultation, simulation de deux options dans le tableur, mise en forme de la note", "Formuler la position, mesurer le risque, l'expliquer au client et la signer", "<a href=\"/formations/ia-droit-ohada\">IA et droit OHADA : recherche, rédaction, veille</a>"],
                ['Contrôle fiscal', "Inventaire des pièces demandées, chronologie, tableau des questions et des réponses", "Choisir ce qui est communiqué, répondre au vérificateur, apprécier le risque", "<a href=\"/formations/rag-chatbot-documents\">RAG : chatbot sur vos documents internes</a>"],
                ['Contentieux', "Mise en forme d'une réclamation ou d'un mémoire, contrôle des délais saisis dans le calendrier", "Choisir les moyens, vérifier chaque référence, déposer dans le délai légal", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ne doivent jamais faire l'IA et l'automatisation dans un cabinet fiscal ou une direction fiscale ?",
            'intro' => "Ces interdits ne relèvent pas de la prudence d'un formateur : ils découlent de décisions de justice, de règles de secret et de textes fiscaux déjà appliqués. Le parcours les transforme en consignes écrites, propres à chaque structure.",
            'items' => [
                ['titre' => "Fournir une référence que personne n'a lue", 'texte' => "Le 4 décembre 2023, dans l'affaire Harber contre l'administration fiscale britannique ([2023] UKFTT 1007 (TC)), le tribunal fiscal de première instance a constaté que les neuf décisions invoquées par la contribuable n'existaient pas et avaient été produites par un système d'IA tel que ChatGPT. Il a rappelé que de fausses citations font perdre du temps à l'adversaire et au juge. Dans le parcours, aucun article, aucune doctrine et aucune décision n'entre dans une note sans avoir été ouvert dans sa source officielle."],
                ['titre' => "Arrêter une position fiscale", 'texte' => "Qualifier une opération, choisir un régime, décider qu'une charge est déductible ou qu'un montage doit être déclaré : ce sont des décisions qui engagent le contribuable et le professionnel qui le conseille. L'assistant peut lister les questions à se poser et mettre en forme la réponse retenue. Il ne choisit jamais entre deux lectures d'un texte, et sa proposition ne remplace pas une demande de position formelle à l'administration quand le doute est sérieux."],
                ['titre' => "Faire sortir un dossier couvert par le secret", 'texte' => "Le secret n'a pas la même étendue pour tous. Le 8 décembre 2022 (affaire C-694/20), la Cour de justice de l'Union européenne a jugé que l'obligation faite à un avocat d'informer les autres intermédiaires d'un dispositif fiscal transfrontière à déclarer violait le droit au respect de ses communications avec son client, protégé par l'article 7 de la Charte. Si le secret pèse ce poids face au fisc, il pèse autant face à un assistant hébergé chez un tiers. Le statut de chacun se vérifie auprès de son ordre ou de sa direction juridique."],
                ['titre' => "Transférer des données fiscales sans garantie", 'texte' => "Un dossier fiscal contient des identifiants, des revenus, des salaires, parfois la situation familiale d'un dirigeant. Au Bénin, la loi n° 2017-20 portant code du numérique encadre le transfert de données personnelles vers un État non membre de la CEDEAO ; en Europe, le RGPD impose des sous-traitants liés par contrat et présentant des garanties suffisantes. Les grands assistants étant hébergés hors de la CEDEAO, un dossier identifiable ne part vers eux qu'après pseudonymisation, ou pas du tout."],
                ['titre' => "Émettre ou corriger une facture certifiée hors du circuit agréé", 'texte' => "Au Bénin, un système de facturation propre à l'entreprise doit être approuvé par la DGI, après tests dans un environnement dédié, avant de produire des factures normalisées. En Côte d'Ivoire, la procédure d'interfaçage impose de transmettre des spécimens de factures à la DGI, qui valide la conformité avant de communiquer l'adresse de production. Une automatisation bricolée qui modifie une facture après certification, ou qui en fabrique une hors plateforme, expose l'entreprise au lieu de la protéger."],
                ['titre' => "Répondre à l'administration sans relecture", 'texte' => "Une réponse à une demande de renseignements ou à une proposition de rectification engage le contribuable. Un premier jet préparé par l'outil peut contenir un aveu involontaire, un chiffre non vérifié ou une pièce qui n'aurait pas dû être produite. Le courrier part signé par le fiscaliste qui l'a relu en entier, avec les pièces qu'il a choisies, jamais directement depuis une automatisation."],
                ['titre' => "Laisser l'échéance au seul robot", 'texte' => "Une alerte automatique qui ne se déclenche pas, un compte de télédéclaration bloqué, un mot de passe détenu par une seule personne en congé : la pénalité de retard est due quand même. Chaque échéance a un responsable nommé et un suppléant, et l'alerte n'est qu'une aide à leur mémoire."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi une décision inventée par l'IA coûte-t-elle plus cher à un fiscaliste qu'une erreur de calcul ?",
            'texte' => "Une erreur de calcul se corrige : le tableur la montre, la déclaration rectificative la répare. Une référence inventée détruit autre chose, la crédibilité de celui qui la cite. Devant un vérificateur ou un juge, un mémoire qui s'appuie sur une décision introuvable fait douter de tout le reste du dossier, y compris des arguments solides. Dans l'affaire Harber, l'appel a été rejeté et la pénalité de 3 265,11 livres pour défaut de déclaration d'une plus-value confirmée. La règle du parcours tient en une ligne : on cite ce qu'on a lu, dans la version en vigueur, et on garde la page consultée dans le dossier.",
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères datés un fiscaliste doit-il connaître avant d'outiller sa pratique ?",
            'items' => [
                ['valeur' => '26 mai 2025', 'libelle' => "Ouverture de l'achat des stickers et démarrage officiel de la génération des factures certifiées sur la plateforme FNE de Côte d'Ivoire, une semaine après le début des inscriptions, le 19 mai 2025 (portail FNE consulté le 5 octobre 2026).", 'source' => "DGI de Côte d'Ivoire, portail de la facture normalisée électronique", 'url' => 'https://www.fne.dgi.gouv.ci/'],
                ['valeur' => '3 documents', 'libelle' => "Certifiables par l'API de la FNE : la facture de vente, la facture d'avoir et le bordereau d'achat de produits agricoles ; la facture précise si l'opération est B2C, B2B, B2G ou B2F (procédure d'interfaçage de mai 2025).", 'source' => "DGI de Côte d'Ivoire, procédure d'interfaçage des entreprises par API", 'url' => 'https://www.dgi.gouv.ci/assets/documents/FNE-procedureapi.pdf'],
                ['valeur' => '10 fois le montant', 'libelle' => "Amende prévue au Bénin pour la non-délivrance d'une facture normalisée, avec un minimum d'un million de francs CFA par opération ; vingt fois et au moins deux millions en cas de récidive, avec trois mois de fermeture (gouv.bj, 27 février 2020).", 'source' => "Gouvernement du Bénin, tout savoir sur les factures normalisées", 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin'],
                ['valeur' => '1er octobre 2026', 'libelle' => "Ouverture de SENTAX aux contribuables des centres des moyennes entreprises Dakar 1 et 2 et du centre des professions réglementées, pour qui les déclarations papier ne sont plus acceptées ; obligation en vigueur depuis le 1er septembre 2026 pour les grandes entreprises.", 'source' => "DGID du Sénégal, page SENTAX", 'url' => 'https://www.dgid.sn/sentax'],
                ['valeur' => '1er juillet 2030', 'libelle' => "Entrée en application de la déclaration numérique des opérations entre entreprises de pays différents de l'Union européenne, prévue par le paquet « TVA à l'ère numérique » adopté le 11 mars 2025 et publié au Journal officiel le 25 mars 2025.", 'source' => "Commission européenne, VAT in the Digital Age", 'url' => 'https://taxation-customs.ec.europa.eu/taxation/vat/vat-digital-age-vida_en'],
                ['valeur' => '9 décisions', 'libelle' => "Décisions de tribunal invoquées par une contribuable dans l'affaire Harber, jugée le 4 décembre 2023 : aucune n'existait, et le tribunal a retenu qu'elles avaient été générées par un système d'IA tel que ChatGPT.", 'source' => "The National Archives, Harber v HMRC [2023] UKFTT 1007 (TC)", 'url' => 'https://caselaw.nationalarchives.gov.uk/ukftt/tc/2023/1007'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble l'usage de ces outils chez un fiscaliste, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Cabinet de conseil fiscal, à Cotonou", 'probleme' => "Chaque mois de janvier, les clients appellent tous la même semaine pour savoir ce que la nouvelle loi de finances change pour eux, et les réponses partent de mémoire, différentes d'un associé à l'autre.", 'solution' => "Texte officiel téléchargé et résumé article par article avec l'assistant, chaque ligne relue par un fiscaliste, puis une fiche d'impact par client signée par l'associé. Les questions reçues sur WhatsApp sont regroupées dans un tableau et traitées dans l'ordre."],
                ['secteur' => "Direction fiscale d'un distributeur, à Abidjan", 'probleme' => "L'ERP certifie ses factures auprès de la FNE par API, mais les retours de marchandises sont annulés à la main dans le logiciel, sans avoir certifié, et le chiffre d'affaires déclaré ne correspond plus aux factures certifiées.", 'solution' => "Avoirs émis par l'API comme le prévoit la procédure de la DGI, rapprochement hebdomadaire entre l'export de la plateforme et la comptabilité, et un contrôle de numérotation qui signale tout trou dans la série annuelle."],
                ['secteur' => "PME industrielle suivie au centre des moyennes entreprises, à Dakar", 'probleme' => "Depuis l'ouverture de SENTAX, les déclarations papier ne sont plus acceptées ; un seul collaborateur connaît le mot de passe du compte, et il part en congé la semaine de l'échéance.", 'solution' => "Deux habilitations par portail, calendrier partagé avec alerte à dix jours, preuves de dépôt et de paiement rangées avec chaque déclaration, et une fiche d'une page qui décrit la procédure pour le suppléant."],
                ['secteur' => "Responsable fiscal d'une filiale, à Douala", 'probleme' => "Une vérification porte sur trois exercices ; les pièces sont dispersées entre le siège, la comptabilité et des boîtes de courriel, et chaque demande du vérificateur déclenche une semaine de recherches.", 'solution' => "Inventaire numérique des pièces classé par exercice et par impôt, chronologie des opérations en cause, tableau des demandes et des réponses ; l'assistant structure les projets de réponse, la direction juridique et le responsable fiscal décident de ce qui est communiqué."],
                ['secteur' => "Avocat fiscaliste, à Paris", 'probleme' => "La veille de la doctrine et de la jurisprudence prend chaque lundi la matinée, et un collaborateur a déjà failli citer dans une consultation un arrêt proposé par un assistant, introuvable ensuite.", 'solution' => "Veille partant des publications officielles, résumés relus, protocole de vérification de chaque référence dans sa source, note de traçabilité jointe au dossier interne, et dossiers clients pseudonymisés avant tout usage d'un outil en ligne."],
                ['secteur' => "Direction fiscale d'une entreprise de taille intermédiaire, à Lille", 'probleme' => "Les factures fournisseurs arrivent par la plateforme agréée depuis septembre 2026, mais une partie est rejetée ou mal orientée parce que les fiches des clients et des fournisseurs sont incomplètes.", 'solution' => "Contrôle des quatre données d'adressage demandées par la DGFiP (SIREN du client, catégorie de l'opération, option de paiement de la TVA, adresse de livraison si elle diffère), nettoyage des fiches dans l'ERP, et préparation des filiales à l'échéance d'émission."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et plateformes un fiscaliste doit-il savoir manier aujourd'hui ?",
            'legende' => "Outils rencontrés dans les cabinets et directions fiscales de la zone OHADA et d'Europe, relevés le 5 octobre 2026 sur les pages officielles. Les abonnements éventuels se règlent aux éditeurs ou aux plateformes, jamais au formateur.",
            'entetes' => ['Outil ou plateforme', 'Usage dans le métier', "Point d'attention", 'Formation liée'],
            'lignes'  => [
                ["Codes généraux des impôts, livres de procédures fiscales, lois de finances", "Source de toute règle citée, à lire dans la version en vigueur", "Les assistants mélangent les versions et les pays ; chaque article cité se retrouve dans le texte publié", "<a href=\"/formations/ia-droit-ohada\">IA et droit OHADA : recherche, rédaction, veille</a>"],
                ["e-MECeF (Bénin)", "Factures normalisées en ligne par l'e-SFE de la DGI, ou par un système de l'entreprise approuvé après tests", "Compte ouvert à partir du numéro IFU ; une connexion, un navigateur et un compte actif suffisent", "<a href=\"/formations/ia-comptables-syscohada\">IA pour comptables (SYSCOHADA)</a>"],
                ["FNE (Côte d'Ivoire)", "Certification des factures par le module en ligne, l'application mobile, des terminaux ou l'API de l'ERP", "API REST en JSON, authentification OAuth 2.0 ou certificat ; liste des intégrateurs et éditeurs agréés publiée sur le portail ; l'usage de la facture papier, prorogé par le communiqué de la DGI du 5 septembre 2025, a pris fin le 1er décembre 2025 pour les régimes du réel", "<a href=\"/formations/integrations-api-no-code\">Intégrations API en no-code et low-code</a>"],
                ["e-impots (Côte d'Ivoire)", "Télédéclaration et télépaiement, vérification d'un numéro de compte contribuable, authentification de documents par QR code", "Espaces distincts pour les entreprises, les experts-comptables, les centres de gestion agréés et les particuliers", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["SENTAX et SEN-ETAFI (Sénégal)", "Télédéclaration et télépaiement ; dépôt des états financiers", "SENTAX remplace l'application ETAX et devient la seule voie de dépôt pour les centres concernés", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Plateformes agréées et annuaire (France)", "Réception, depuis le 1er septembre 2026, puis émission des factures électroniques ; transmission des données à l'administration", "Elles contrôlent la présence des mentions, la cohérence entre hors taxes, taux et TVA, et les doublons : un rejet se lit avant de se corriger", "<a href=\"/formations/digitalisation-processus\">Digitalisation des processus métiers</a>"],
                ["BOFiP-Impôts (France)", "Commentaires officiels des dispositions fiscales par la DGFiP, mis à jour en continu", "Les publications du 23 septembre 2026 portaient notamment sur la TVA, l'impôt sur les sociétés et les dispositifs transfrontières", "<a href=\"/formations/rag-chatbot-documents\">RAG : chatbot sur vos documents internes</a>"],
                ["Odoo 20.0", "Positions fiscales qui adaptent taxes et comptes selon le client ; déclaration de TVA par grilles, avec date de verrouillage", "Un paramétrage de taxe faux se répète sur chaque facture : il se teste avant la mise en service", "<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ["Dolibarr", "Facturation des PME, états de TVA collectée et déductible, exports pour le fiscaliste", "Ne se raccorde ni à e-MECeF ni à la FNE sans développement spécifique ; le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> fait le point", "<a href=\"/formations/dolibarr-utilisateurs\">Dolibarr pour vos équipes</a>"],
                ["Assistants d'IA en offre professionnelle", "Lecture de textes téléchargés, comparaison de versions, plans de notes, premiers jets de courriers", "Pas de compte gratuit pour un dossier client ; le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide à choisir", "<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type d'un parcours pour fiscalistes, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours se découpe-t-il selon le poste de chacun ?",
            'legende' => "Tout le monde suit la première matinée et la dernière après-midi, consacrées aux sources et aux règles d'usage. Pour le reste, chacun choisit les séances qui touchent son travail, puis la fiche du catalogue qui prolonge son outil principal.",
            'entetes' => ['Poste', 'Ce qu\'il saura faire en fin de parcours', 'Séances à suivre', 'Fiche qui prolonge'],
            'lignes'  => [
                ["Associé d'un cabinet de conseil fiscal", "Fixer les règles d'usage, relire une note préparée avec l'outil, répondre au client de la méthode suivie", "Jour 1 matin, jour 3", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>"],
                ["Fiscaliste de cabinet", "Tenir la veille, préparer consultations et simulations, vérifier chaque référence", "Tout le parcours", "<a href=\"/formations/ia-droit-ohada\">IA et droit OHADA : recherche, rédaction, veille</a>"],
                ["Avocat fiscaliste", "Pseudonymiser un dossier, préparer un mémoire sans citation inventée, protéger le secret de ses échanges", "Jour 1, jour 3", "<a href=\"/formations/ia-droit-ohada\">IA et droit OHADA : recherche, rédaction, veille</a>"],
                ["Directeur ou responsable fiscal d'entreprise", "Piloter le calendrier du groupe, contrôler les factures certifiées, préparer une vérification", "Jour 1 matin, jour 2, jour 3", "<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ["Comptable chargé des déclarations", "Préparer les montants, exécuter les contrôles avant dépôt, télédéclarer et archiver les preuves", "Jour 1 matin, jour 2", "<a href=\"/formations/ia-comptables-syscohada\">IA pour comptables (SYSCOHADA)</a>"],
                ["Responsable de la facturation", "Comprendre ce que la plateforme certifie, émettre un avoir par le bon canal, signaler une anomalie au fiscaliste", "Jour 2 matin", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Juriste chargé du contentieux fiscal", "Tenir les délais, structurer une réclamation, organiser les pièces d'un dossier contentieux", "Jour 1 matin, jour 3", "<a href=\"/formations/rag-chatbot-documents\">RAG : chatbot sur vos documents internes</a>"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour un cabinet fiscal, une direction fiscale ou un fiscaliste indépendant ?",
            'legende' => "Les dates évitent les premières semaines qui suivent l'entrée en vigueur d'une loi de finances, les grandes échéances déclaratives du pays et les périodes de vérification annoncées. Une équipe fiscale ne se forme pas la semaine où elle dépose.",
            'entetes' => ['Format', 'Organisation', 'Matière de travail', 'Pour qui'],
            'lignes'  => [
                ['Intra cabinet', "Six demi-journées dans vos locaux, associés présents pour les séances sur les sources et sur les règles", "Dossiers du cabinet pseudonymisés, dernière loi de finances, modèles de notes", "Cabinet de conseil fiscal ou d'avocats qui veut une méthode commune"],
                ['Intra direction fiscale', "Six demi-journées réparties entre deux échéances mensuelles", "Exports de l'ERP, de la plateforme de facturation et des portails fiscaux du groupe", "Direction fiscale qui gère plusieurs entités ou plusieurs pays"],
                ['Inter', "Deux à trois jours réunissant des fiscalistes de plusieurs structures", "Jeu de données fictif construit sur des textes réels, aucun dossier partagé", "Une ou deux personnes par structure, ou un fiscaliste qui prend son poste"],
                ['À distance', "Séances de deux heures, écran partagé, exercice à rendre entre deux séances", "Textes et fichiers déposés la veille dans un dossier commun", "Équipes réparties entre un siège et des filiales, ou entre l'Afrique et l'Europe"],
                ['Hybride', "Première journée sur place, puis séances à distance calées sur les déclarations des mois suivants", "Les vraies déclarations du trimestre, pseudonymisées si besoin", "Quand on veut voir la méthode tenir sur plusieurs échéances"],
                ['Accompagnement individuel', "Demi-journées choisies selon le besoin, sur place ou en ligne", "Les dossiers du fiscaliste, débarrassés des noms", "Conseil fiscal indépendant, responsable fiscal seul dans son entreprise"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe de fiscalistes ?",
            'intro'      => "Aucun tarif n'est affiché ici : un cabinet de trois fiscalistes ne se forme pas au même coût qu'une direction fiscale qui suit dix entités dans quatre pays. La proposition est chiffrée sur devis, une fois connus les postes, les pays, les plateformes et les logiciels. L'échange initial, le cadrage et le devis ne coûtent rien. Le paiement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou en espèces. Les abonnements aux assistants d'IA, aux bases juridiques ou aux plateformes de facturation restent réglés directement aux éditeurs.",
            'items'      => [
                ['offre' => 'Cadrage', 'prix' => 'Gratuit', 'inclus' => ["Échange avec l'associé ou le responsable fiscal", "Relevé des pays, des impôts suivis et des portails utilisés", "Proposition de parcours et devis écrit"]],
                ['offre' => 'Parcours type intra', 'prix' => 'Sur devis', 'inclus' => ["Six demi-journées sur vos textes et vos dossiers pseudonymisés", "Protocole de vérification des références et modèle de fiche d'impact", "Règles d'usage de l'IA de la structure", "Évaluation sur un dossier fil rouge et attestation nominative"]],
                ['offre' => 'Formation du catalogue', 'prix' => 'Sur devis', 'inclus' => ["Une formation ciblée sur un outil ou une méthode", "Exercices construits sur vos données", "Supports et corrigés modifiables"]],
                ['offre' => 'Suivi après la session', 'prix' => 'Sur devis', 'inclus' => ["Séance après la prochaine loi de finances ou la prochaine échéance annuelle", "Révision des consignes et des contrôles", "Bilan écrit des indicateurs suivis"]],
            ],
            'variations' => [
                "Le nombre de participants, de groupes et de postes différents à couvrir.",
                "Le nombre de pays et de plateformes fiscales à intégrer aux exercices.",
                "Le temps nécessaire pour pseudonymiser les dossiers et préparer les exports.",
                "La mise en place, si vous la demandez, d'alertes automatiques ou d'un modèle d'IA installé sur un poste de la structure.",
                "Le lieu des séances : Cotonou, une autre ville d'Afrique, l'Europe ou entièrement en ligne.",
                "Le suivi retenu après la formation.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation des fiscalistes ?",
            'paragraphes' => [
                "La première justification est réglementaire, côté européen. L'article 4 du règlement sur l'intelligence artificielle impose depuis le 2 février 2025 aux fournisseurs et aux utilisateurs professionnels de systèmes d'IA de veiller à la maîtrise de l'IA de leur personnel, avec un contrôle et des sanctions possibles à partir du 3 août 2026, selon les questions et réponses de la Commission mises à jour le 27 juillet 2026. Un cabinet fiscal européen dont les collaborateurs se servent d'assistants entre dans ce cadre. En Afrique francophone, la justification est surtout pratique : les plateformes fiscales changent plus vite que les habitudes des équipes.",
                "Côté financement, rien n'est promis ici : tout dépend du pays, du fonds et de la situation de l'employeur. En Côte d'Ivoire, le FDFP ouvre son plan de formation à toute entreprise qui justifie du paiement régulier de ses deux taxes, et le règlement n'intervient qu'après le suivi et le contrôle du fonds, puis l'approbation de sa Commission permanente. Au Bénin, les statuts du FODEFCA, approuvés par le décret n° 2022-286, en font le principal guichet de la formation continue du secteur privé, le bénéficiaire apportant une part du coût. Au Sénégal, le 3FPT dispose d'un guichet consacré au personnel des entreprises.",
                "En France, France Compétences rappelle que depuis le 1er janvier 2022, seuls les prestataires certifiés Qualiopi accèdent aux fonds publics ou mutualisés. Richard SALANON ne détient pas cette certification : un cabinet ou une entreprise française règle donc la session sur son propre budget. Dans tous les pays, la demande au fonds se fait par écrit, avec le programme et le devis, avant de signer et de fixer les dates. Le programme détaillé, les feuilles de présence et l'attestation nominative sont fournis dans tous les cas, y compris pour une déclaration de formation continue auprès d'un ordre professionnel, qui reste seul juge de sa prise en compte.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on quand un fiscaliste ou une direction fiscale s'outille ?",
            'intro' => "Elles n'apparaissent presque jamais pendant la formation. Elles surgissent à la loi de finances suivante, à la première échéance chargée ou au premier contrôle, quand l'outil semble avoir déjà fait le travail.",
            'items' => [
                ['titre' => "Résumer une loi de finances à partir d'un article de presse", 'texte' => "L'assistant résume ce qu'on lui donne. Si la source est un article de blog ou un résumé d'un autre cabinet, les erreurs de ce résumé passent dans la fiche d'impact. On part du texte publié par l'État, téléchargé et daté, et l'on garde ce fichier dans le dossier de veille."],
                ['titre' => "Confier la veille à un seul flux automatique", 'texte' => "Une alerte qui surveille un site cesse de fonctionner le jour où le site change de forme, sans prévenir personne. Une personne nommée vérifie chaque semaine que la veille a bien tourné, et une revue manuelle des sources a lieu au moins une fois par mois."],
                ['titre' => "Paramétrer les taxes de l'ERP sans le fiscaliste", 'texte' => "Un taux ou une position fiscale mal réglés dans le logiciel se reproduisent sur des milliers de factures, puis sur les déclarations. Le paramétrage fiscal se valide avec le fiscaliste avant la mise en service, et se teste sur quelques factures types après chaque loi de finances."],
                ['titre' => "Corriger une facture certifiée comme une facture ordinaire", 'texte' => "Supprimer une vente dans l'ERP ne supprime pas la facture certifiée par la plateforme. La correction passe par le document prévu, l'avoir certifié par exemple pour la FNE, faute de quoi la série annuelle et le chiffre d'affaires déclaré ne se rejoignent plus."],
                ['titre' => "Laisser un seul accès aux portails fiscaux", 'texte' => "Le compte de télédéclaration détenu par une seule personne est la cause la plus banale d'un retard. Deux habilitations au moins, des mots de passe dans un gestionnaire partagé, et une procédure écrite pour le suppléant."],
                ['titre' => "Citer sans ouvrir la source", 'texte' => "La tentation est forte quand la référence proposée semble plausible et que l'échéance approche. La règle ne connaît pas d'exception : une référence non ouverte dans sa source officielle sort de la note, quitte à affaiblir l'argument."],
                ['titre' => "Former les juniors et pas ceux qui signent", 'texte' => "Ceux qui relisent et signent doivent savoir comment un assistant se trompe en fiscalité, sinon ils lisent un travail préparé avec l'outil comme s'il venait d'un collaborateur chevronné. Les associés et les responsables fiscaux suivent au moins les séances sur les sources et sur les règles."],
                ['titre' => "Ne rien mesurer avant de commencer", 'texte' => "Sans le temps passé sur la veille, le nombre d'écarts trouvés au dépôt et la durée de préparation d'un contrôle notés avant la session, personne ne pourra dire six mois plus tard si les outils ont servi."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue se rattachent au métier de fiscaliste ?",
            'legende' => "Les fiches du catalogue qui prolongent le parcours, de la plus proche du métier à la plus générale. Chacune a sa page, avec son programme détaillé, ses prérequis et ses formats.",
            'entetes' => ['Formation', 'Pour qui dans la fonction fiscale', 'Apport pour le métier', 'Durée'],
            'lignes'  => [
                ["<a href=\"/formations/ia-comptables-syscohada\">IA pour comptables (SYSCOHADA)</a>", "Fiscalistes de cabinet comptable, comptables chargés des déclarations", "Préparer les montants à partir des pièces, rapprocher, contrôler avant dépôt", "2 jours en 4 demi-journées"],
                ["<a href=\"/formations/ia-droit-ohada\">IA et droit OHADA : recherche, rédaction, veille</a>", "Fiscalistes, avocats fiscalistes, juristes du contentieux", "Recherche dans les sources officielles, rédaction, veille, vérification des références", "2 jours en 4 demi-journées"],
                ["<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>", "Toute l'équipe fiscale", "Calendrier fiscal, simulations, contrôles de cohérence avant dépôt", "2 jours en quatre demi-journées, plus un retour à un mois"],
                ["<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>", "Directions fiscales d'entreprises sous Odoo", "Taxes, journaux, déclarations et verrouillage des périodes dans Odoo", "3 jours en demi-journées, plus une demi-journée à la première clôture mensuelle"],
                ["<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>", "Tout fiscaliste qui utilise un assistant", "Données personnelles, secret, biais, règlement européen sur l'IA", "1 jour de socle, ou 2 jours en 4 demi-journées"],
                ["<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>", "Associés, directeurs fiscaux et financiers", "Règles d'usage, inventaire des outils, responsabilités", "2 jours en 4 demi-journées, revue à 3 mois en option"],
                ["<a href=\"/formations/rag-chatbot-documents\">RAG : chatbot sur vos documents internes</a>", "Cabinets qui veulent interroger leurs propres notes et la doctrine téléchargée", "Réponses fondées sur les documents de la structure, avec citations vérifiables", "3 jours en 6 demi-journées, dont une journée technique facultative, puis une revue à distance"],
                ["<a href=\"/formations/prompt-engineering\">Prompt engineering professionnel</a>", "Fiscalistes qui rédigent beaucoup", "Consignes réutilisables pour résumer, comparer et structurer une note", "2 jours en 4 demi-journées, ou 6 séances de 2 heures à distance"],
                ["<a href=\"/formations/integrations-api-no-code\">Intégrations API en no-code et low-code</a>", "Référent technique d'une direction fiscale", "Comprendre une documentation d'API comme celle de la FNE avant de piloter un intégrateur", "2 jours en 4 demi-journées, ou atelier d'une demi-journée sur une seule API"],
                ["<a href=\"/formations/cybersecurite-employes\">Cybersécurité pour les employés</a>", "Tout le cabinet ou la direction fiscale", "Hameçonnage, mots de passe, double authentification sur les portails", "1 jour, une demi-journée de plus pour les postes sensibles, puis un suivi de 2 heures"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos fiscalistes avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des fiscalistes. Son métier de développeur le place là où naissent les données que le fiscaliste contrôle : paramétrage des taxes dans Odoo et Dolibarr, exports de facturation, raccordement d'un logiciel à une plateforme par API, alertes automatiques, assistants d'IA branchés sur des documents. Il sait ce qu'un ERP fait d'un taux mal saisi et ce qu'un assistant fait d'une question mal posée. Il compte " . $ans . " ans d'expérience depuis ses débuts, une formation à " . fait('formation')['nom'] . " achevée en " . fait('formation')['annee'] . ", plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées selon ses propres décomptes et des missions dans " . count((array) fait('pays_travailles')) . " pays d'Afrique, d'Europe et d'Amérique du Nord. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et cofondé <a href=\"https://audyxa.com\">Audyxa</a>.",
                "Il n'est ni fiscaliste, ni avocat, ni expert-comptable, et aucun éditeur ne l'a certifié. Il transmet l'outil, la méthode de vérification et les garde-fous ; la qualification des opérations, le choix des positions et la défense du contribuable restent le travail de vos professionnels. Les groupes restent petits, les exercices tournent sur vos textes et vos dossiers pseudonymisés, les fichiers remis en fin de session se modifient librement, et aucun gain de temps n'est annoncé avant d'avoir été mesuré chez vous.",
                "Son parcours se lit sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays couverts sur celle des <a href=\"/zones/\">zones d'intervention</a>. Le catalogue complet est rangé sur la page des <a href=\"/formations/\">formations</a>, et les fiches les plus proches du métier dans les domaines <a href=\"/formations/domaine/ia-systemes-existants\">IA dans vos systèmes existants</a> et <a href=\"/formations/domaine/intelligence-artificielle\">intelligence artificielle</a>. Si le besoin est de construire plutôt que d'apprendre, par exemple relier un ERP à la FNE ou à e-MECeF, il relève des <a href=\"/services/api-rest-integrations\">intégrations par API</a> ; un assistant interrogeant les notes du cabinet relève de l'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former votre cabinet ou votre direction fiscale ?",
            'texte' => "Partez toujours du texte officiel téléchargé, ne citez que ce que vous avez ouvert, rapprochez chaque mois les factures certifiées des montants déclarés, corrigez une facture par le canal prévu par la plateforme, gardez deux accès à chaque portail, laissez à un professionnel chaque position et chaque signature, et ne versez aucun dossier identifiable dans un outil dont vous ignorez où il garde les données.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former vos fiscalistes à l'IA, aux plateformes fiscales et à l'automatisation ?",
            'texte'  => "Précisez le nombre de personnes et leurs postes, les pays et les impôts suivis, les plateformes et le logiciel utilisés, et ce qui vous coûte le plus de temps entre deux échéances. Une réponse vous parvient sous " . fait('delai_reponse') . ", puis une proposition de parcours et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un parcours pour fiscalistes'],
        ],
    ],

    'faq' => [
        ['q' => "L'IA peut-elle remplacer le fiscaliste ?", 'r' => "Non. Elle accélère la lecture des textes, la comparaison de versions, la mise en forme des notes et le rapprochement des données. Qualifier une opération, choisir une position, signer une déclaration et défendre un dossier restent des actes du professionnel, qui en répond devant son client et devant l'administration."],
        ['q' => "Un assistant d'IA connaît-il la dernière loi de finances de mon pays ?", 'r' => "Rarement, et il ne le dit pas toujours. Ses connaissances s'arrêtent à une date et mélangent les pays. La méthode enseignée consiste à lui fournir le texte officiel téléchargé, puis à vérifier chaque article cité dans ce texte avant qu'il n'entre dans une note ou une déclaration."],
        ['q' => "Que risque-t-on à citer une décision proposée par l'IA sans la vérifier ?", 'r' => "D'abord sa crédibilité. Dans l'affaire Harber, jugée le 4 décembre 2023 par le tribunal fiscal britannique de première instance, neuf décisions invoquées par une contribuable n'existaient pas. Le tribunal a souligné le temps perdu par l'administration et par le juge, et l'appel a été rejeté."],
        ['q' => "Le parcours traite-t-il des factures normalisées e-MECeF et FNE ?", 'r' => "Oui, du point de vue du fiscaliste : ce que la plateforme certifie, comment exporter les données, comment rapprocher les factures certifiées des montants déclarés et comment corriger par le bon document. Le raccordement technique d'un logiciel à la plateforme relève d'un projet d'intégration, pas de la formation."],
        ['q' => "Peut-on utiliser l'IA sur un dossier client sans manquer au secret ?", 'r' => "Oui, sous conditions travaillées en séance : un outil autorisé par la structure et dont les conditions écrites excluent l'usage des données pour entraîner les modèles, un dossier pseudonymisé, et une trace de ce qui a été transmis. L'étendue exacte du secret dépend du statut de chacun et se vérifie auprès de son ordre ou de sa direction juridique."],
        ['q' => "Nos clients nous envoient leurs avis d'imposition par WhatsApp : est-ce un problème ?", 'r' => "Ce n'est pas un problème si le canal est organisé : un numéro de la structure plutôt que celui d'un collaborateur, un transfert régulier vers le dossier du client, puis l'effacement sur le téléphone. Un avis d'imposition contient des données personnelles et fiscales qui n'ont rien à faire dans une galerie de photos personnelle."],
        ['q' => "Le parcours convient-il à une direction fiscale de groupe présente dans plusieurs pays ?", 'r' => "Oui. Les exercices partent des pays réellement suivis, par exemple FNE en Côte d'Ivoire, e-MECeF au Bénin, SENTAX au Sénégal et plateformes agréées en France, et le calendrier fiscal est construit par entité. Le format hybride permet de suivre les équipes sur plusieurs échéances successives."],
        ['q' => "Faut-il savoir programmer ?", 'r' => "Non. Il faut maîtriser un tableur et connaître ses propres obligations fiscales. Les formules et les petites automatisations sont écrites avec l'assistant puis expliquées pas à pas. La lecture d'une documentation d'API, utile pour dialoguer avec un intégrateur, fait l'objet d'une fiche séparée du catalogue."],
        ['q' => "Richard SALANON est-il fiscaliste ?", 'r' => "Non, et il le dit dès la première séance. Il est consultant en digitalisation et développeur, et forme à l'usage des outils : IA, tableurs, ERP, automatisations et plateformes en ligne. Les questions de fond, la doctrine et la jurisprudence restent l'affaire des fiscalistes présents et de leur administration."],
        ['q' => "La formation compte-t-elle pour la formation continue d'un ordre professionnel ?", 'r' => "C'est à l'ordre concerné de le dire, selon ses propres règles. Le programme, les feuilles de présence et l'attestation nominative remis à la fin permettent de lui poser la question. Aucune validation par un ordre n'est annoncée."],
        ['q' => "Combien coûte le parcours ?", 'r' => "Il est chiffré sur devis selon le nombre de personnes, de pays et de plateformes, la préparation des dossiers, le lieu et le suivi retenu. L'échange initial, le cadrage et le devis sont gratuits, et le paiement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "Direction générale des impôts du Bénin, plateforme e-MECeF (public visé, prérequis, création de compte, e-SFE, approbation des systèmes de facturation)", 'url' => 'https://e-mecef.impots.bj/', 'date' => '2026-10-05'],
        ['titre' => "Gouvernement du Bénin, tout savoir sur les factures normalisées (27 février 2020)", 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts de Côte d'Ivoire, portail de la facture normalisée électronique (FNE)", 'url' => 'https://www.fne.dgi.gouv.ci/', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts de Côte d'Ivoire, procédure d'interfaçage des entreprises par API à la FNE (mai 2025)", 'url' => 'https://www.dgi.gouv.ci/assets/documents/FNE-procedureapi.pdf', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts de Côte d'Ivoire, communiqué du 5 septembre 2025 sur la facture normalisée électronique", 'url' => 'https://www.fne.dgi.gouv.ci/uploads/communiques/COMMUNIQUE%20MISE%20EN%20OEUVRE%20DE%20LA%20FNE.pdf', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts de Côte d'Ivoire, portail e-impots (téléprocédures fiscales, version 3.7.2 du 6 mars 2026)", 'url' => 'https://e-impots.gouv.ci/', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts et des domaines du Sénégal, SENTAX : télédéclaration et télépaiement, calendrier de mise en œuvre", 'url' => 'https://www.dgid.sn/sentax', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts et des domaines du Sénégal, services en ligne (SENTAX, SEN-ETAFI, E-SERVICES)", 'url' => 'https://www.dgid.sn/', 'date' => '2026-10-05'],
        ['titre' => "DGFiP, Tout savoir sur la facturation électronique (objectifs, données d'adressage, annuaire, contrôles des plateformes, préremplissage de la TVA)", 'url' => 'https://www.impots.gouv.fr/sites/default/files/media/1_metier/2_professionnel/EV/2_gestion/290_facturation_electronique/faq_tout_savoir_facturation-electronique.pdf', 'date' => '2026-10-05'],
        ['titre' => "impots.gouv.fr, Je passe à la facturation électronique (page modifiée le 1er septembre 2026)", 'url' => 'https://www.impots.gouv.fr/professionnel/je-passe-la-facturation-electronique', 'date' => '2026-10-05'],
        ['titre' => "BOFiP-Impôts, commentaires officiels des dispositions fiscales de la DGFiP", 'url' => 'https://bofip.impots.gouv.fr/', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, VAT in the Digital Age (ViDA) : adoption, textes et calendrier", 'url' => 'https://taxation-customs.ec.europa.eu/taxation/vat/vat-digital-age-vida_en', 'date' => '2026-10-05'],
        ['titre' => "Cour de justice de l'Union européenne, communiqué de presse n° 198/22, arrêt C-694/20, Orde van Vlaamse Balies (8 décembre 2022)", 'url' => 'https://curia.europa.eu/jcms/upload/docs/application/pdf/2022-12/cp220198fr.pdf', 'date' => '2026-10-05'],
        ['titre' => "The National Archives, Find Case Law : Harber v The Commissioners for HMRC, [2023] UKFTT 1007 (TC), 4 décembre 2023", 'url' => 'https://caselaw.nationalarchives.gov.uk/ukftt/tc/2023/1007', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : positions fiscales", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/accounting/taxes/fiscal_positions.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : déclarations de TVA", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/accounting/reporting/tax_returns.html', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, règlement général sur la protection des données, chapitre IV (article 28, sous-traitant)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-comptables-syscohada', 'ia-droit-ohada', 'excel-google-sheets', 'odoo-comptabilite-syscohada', 'ia-ethique-conformite', 'rag-chatbot-documents'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise', 'api-rest-integrations'],
        'comparatifs' => ['odoo-vs-dolibarr', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
