<?php
// ============================================================
// data/pays/mauritanie.php · Page pays « Mauritanie » (vague 1D, tranche T4).
// Accompagnement à distance. Devise des devis : euro, aucun montant chiffré.
// Faits externes vérifiés le 06/10/2026 : APD (apd.mr), ARE (are.mr), ANSADE,
// DataReportal, Bpifrance, Département du Commerce américain, BPM, BMCI,
// PwC, Constitution, Trésor français, ADEA, IANA.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Vendre par WhatsApp, encaisser avec Bankily, écrire en arabe : le numérique des entreprises mauritaniennes, vu de Cotonou',
    'title'   => 'Consultant digitalisation Mauritanie | Richard SALANON',
    'meta'    => 'Richard SALANON accompagne à distance les entreprises en Mauritanie : sites, ERP, automatisation et IA. Devis en euros, réponse sous 24 heures.',
    'en_bref' => 'Richard accompagne à distance les entreprises en Mauritanie : sites et applications, outils de gestion comme Odoo et Dolibarr, automatisations, assistants WhatsApp et formation des équipes en visioconférence. Le travail se fait depuis Cotonou, avec une heure de moins à Nouakchott. Les devis sont établis en euros, après un premier échange gratuit, sans montant publié à l\'avance. Richard peut accompagner à distance les entreprises de Nouakchott, de Nouadhibou et des autres villes du pays.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale' => ['v' => 'Nouakchott', 'source' => 'https://www.primature.gov.mr/sites/default/files/2021-05/Constitution_consolidefr.pdf', 'date' => '2026-10-06'],
        'villes'   => ['v' => ['Nouakchott', 'Nouadhibou'], 'source' => 'https://centre-rachad.org/wp-content/uploads/2024/10/Depliant-RGPH5_vf.pdf', 'date' => '2026-10-06'],
        'fuseau'   => ['v' => 'UTC+0, sans changement d\'heure : Nouakchott a une heure de moins que Cotonou', 'source' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+222 ; numéros à 8 chiffres depuis le 1er janvier 2011', 'source' => 'https://www.are.mr/index.php/telecommunications-fr/plan-de-numerotation', 'date' => '2026-10-06'],
        'langues'  => ['v' => 'Arabe, langue officielle ; poular, soninké et wolof, langues nationales', 'source' => 'https://www.primature.gov.mr/sites/default/files/2021-05/Constitution_consolidefr.pdf', 'date' => '2026-10-06'],
        'population' => ['v' => '4 927 532 résidents au recensement de 2023, dont la moitié a moins de 20 ans', 'source' => 'https://centre-rachad.org/wp-content/uploads/2024/10/Depliant-RGPH5_vf.pdf', 'date' => '2026-10-06'],
        'internet' => ['v' => '2,00 millions d\'internautes, soit 37,4 % des habitants, fin 2025', 'source' => 'https://datareportal.com/reports/digital-2026-mauritania', 'date' => '2026-10-06'],
        'mobile'   => ['v' => '6,37 millions de connexions mobiles fin 2025, soit 119 % des habitants, dont 89,0 % à haut débit', 'source' => 'https://datareportal.com/reports/digital-2026-mauritania', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => 'Bankily, de la Banque Populaire de Mauritanie, près d\'un million de clients, interopérable avec d\'autres banques mobiles par le switch GIMTEL (octobre 2024)', 'source' => 'https://www.bpm.mr/actualites/Communiqu%C3%A9-de-presse-:-Aujourd%E2%80%99hui-la-famille-bankily-s%E2%80%99agrandit-avec-l%E2%80%99interop%C3%A9rabilit%C3%A9', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Agriculture, élevage et pêche : 21,5 % du PIB en 2024', 'Industries extractives : 20,8 % du PIB en 2024', 'Commerce : 10,5 % du PIB en 2024', 'Gaz : première cargaison de GNL en avril 2025'], 'source' => 'https://assurance-export.bpifrance.fr/storage/sites/26/2025/07/fiche_pays_mauritanie_01_2026.pdf', 'date' => '2026-10-06'],
        'devise'   => ['v' => 'Ouguiya (MRU), régime de change flottant administré', 'source' => 'https://assurance-export.bpifrance.fr/storage/sites/26/2025/07/fiche_pays_mauritanie_01_2026.pdf', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Mauritel (Moov Mauritel)', 'Mattel', 'Chinguitel'], 'source' => 'https://www.are.mr/index.php/l-autorite/189-publications/1484-avis-relatif-a-la-designation-des-adjudicataires-provisoires-pour-lattribution-de-licences-en-vue-de-letablissement-et-lexploitation-de-reseaux-et-services-de-communications-electroniques-mobiles-de-cinquieme-generation-5g', 'date' => '2026-10-06'],
        'donnees'  => ['v' => 'Texte publié sur le site de l\'APD : loi n° 2017-020', 'source' => 'https://www.apd.mr/fr/lois/', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'APD, qui a tenu sa réunion mensuelle ordinaire du 30 juin 2026', 'source' => 'https://www.apd.mr/fr', 'date' => '2026-10-06'],
        'tva'      => ['v' => '16 % sur les ventes locales de biens et de services, 0 % à l\'exportation (revue du 7 août 2026)', 'source' => 'https://taxsummaries.pwc.com/mauritania/corporate/other-taxes', 'date' => '2026-10-06'],
        'ecommerce' => ['v' => 'Vente surtout par WhatsApp, règlement par applications bancaires mobiles (guide commercial américain, février 2026)', 'source' => 'https://trade.gov/country-commercial-guides/mauritania-ecommerce', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Fonds FAP-FTP : contribue au financement de formations demandées par les entreprises (rapport ADEA de 2014) ; conditions à confirmer auprès de l\'INAP-FTP', 'source' => 'https://tvsd.adeanet.org/sites/default/files/documents/rapport_pays_mauritanie.pdf', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Une heure de moins à Nouakchott, toute l\'année'],
        ['l' => 'Devis', 'v' => 'En euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que disent les chiffres du numérique mauritanien, et que changent-ils pour un projet ?',
            'paragraphes' => [
                'Selon le <a href="https://datareportal.com/reports/digital-2026-mauritania">rapport Digital 2026 de DataReportal</a>, publié le 8 novembre 2025, la Mauritanie comptait 2,00 millions d\'internautes fin 2025, soit 37,4 % de sa population. Les connexions mobiles actives atteignaient 6,37 millions, soit 119 % des habitants, et 89,0 % d\'entre elles permettaient le haut débit. Le recensement de 2023, publié par l\'<a href="https://centre-rachad.org/wp-content/uploads/2024/10/Depliant-RGPH5_vf.pdf">Agence nationale de la statistique et de l\'analyse démographique et économique (ANSADE)</a>, a dénombré 4 927 532 résidents, dont la moitié a moins de 20 ans.',
                'Ces chiffres dessinent un pays où le téléphone est partout et l\'ordinateur beaucoup moins. Plus de six habitants sur dix n\'étaient pas internautes fin 2025 : un site ou une application qui suppose un grand écran et une connexion fixe passe à côté d\'une grande partie des clients. Le projet se conçoit donc d\'abord pour le mobile, avec des pages légères, des formulaires courts et un parcours qui se termine dans une conversation ou un paiement sur téléphone.',
                'Le deuxième effet touche l\'offre des opérateurs. D\'après l\'<a href="https://www.are.mr/index.php/l-autorite/189-publications/1484-avis-relatif-a-la-designation-des-adjudicataires-provisoires-pour-lattribution-de-licences-en-vue-de-letablissement-et-lexploitation-de-reseaux-et-services-de-communications-electroniques-mobiles-de-cinquieme-generation-5g">avis de l\'Autorité de régulation</a>, un appel d\'offres pour des licences 5G a été lancé le 2 décembre 2025 et quatre sociétés, Rimatel, Mattel, Mauritel et Chinguitel, ont été déclarées adjudicataires provisoires en avril 2026. Chinguitel a annoncé le lancement commercial de la 5G le 15 mai 2026, selon la <a href="https://osiris.sn/haut-debit-la-mauritanie-rejoint-le-cercle-des-pays-ayant-lance-la-5g.html">presse spécialisée</a>. Pour un projet, cela n\'autorise pas encore à supposer un réseau rapide partout : on mesure la qualité de connexion de vos clients avant de choisir ce que l\'on charge à l\'écran.',
                'Le troisième effet est linguistique. La <a href="https://www.primature.gov.mr/sites/default/files/2021-05/Constitution_consolidefr.pdf">Constitution</a> fait de l\'arabe la langue officielle et du poular, du soninké et du wolof des langues nationales. Un site pour le public mauritanien se pose donc la question de l\'arabe, avec une mise en page de droite à gauche, dès le cadrage et non en fin de projet.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels sont les repères à connaître avant de lancer un projet en Mauritanie ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour vendre en Mauritanie ?',
            'paragraphes' => [
                'Le guide du Département du Commerce américain sur le <a href="https://trade.gov/country-commercial-guides/mauritania-ecommerce">commerce électronique en Mauritanie</a>, mis à jour le 10 février 2026, décrit un marché qui ne passe pas par de grandes places de marché : les boutiques tiennent un compte WhatsApp, y montrent leurs photos et leurs informations, et encaissent par des applications bancaires mobiles. Un projet de vente en ligne commence donc moins par un panier d\'achat classique que par un catalogue qui se partage dans une conversation et un moyen de payer sans quitter le téléphone.',
                'Parmi ces applications, Bankily est celle de la <a href="https://www.bankily.mr">Banque Populaire de Mauritanie</a> : on s\'inscrit avec son numéro d\'identification national, on retire et verse de l\'argent dans un réseau d\'agents, on paie des commerçants et des factures. Masrvi est l\'application de la <a href="https://masrvi.mr">BMCI</a>, avec le paiement chez les commerçants partenaires et le règlement de factures d\'eau et d\'électricité. Les deux demandent une inscription par numéro d\'identification national, ce qui suppose que vos clients aient déjà ce compte avant de payer.',
                'Les portefeuilles ne sont plus fermés les uns aux autres. Dans un <a href="https://www.bpm.mr/actualites/Communiqu%C3%A9-de-presse-:-Aujourd%E2%80%99hui-la-famille-bankily-s%E2%80%99agrandit-avec-l%E2%80%99interop%C3%A9rabilit%C3%A9">communiqué du 21 octobre 2024</a>, la Banque Populaire de Mauritanie indique que Bankily s\'interopère avec les banques mobiles homologuées sur le switch national mobile de GIMTEL, et que les opérations par ce canal sont plafonnées à 50 000 MRU par transaction et par jour. Un client d\'une autre banque mobile peut ainsi payer sur un code commerçant Bankily. Pour un site, ce plafond est une donnée de conception : un panier supérieur se règle autrement.',
                'Le <a href="https://trade.gov/country-commercial-guides/mauritania-fintech">guide américain sur la finance numérique</a> rapporte qu\'en 2025 le commutateur national GIMTEL a été certifié dans le registre mondial des prestataires de services de Visa, ce qui prépare l\'acceptation des cartes internationales, et que le taux de détention d\'un compte atteignait 17 % en 2020 selon la Banque mondiale, près de 38 % en comptant la monnaie mobile et la microfinance.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe l\'intégration d\'un paiement mobile, et que faut-il demander à la banque ?',
            'paragraphes' => [
                'Les pages publiques de Bankily et de Masrvi s\'adressent aux clients et aux commerçants et décrivent des services, non une interface de programmation ouverte. L\'intégration d\'un paiement automatique passe donc par un échange direct avec la banque ou avec l\'opérateur du switch GIMTEL. Richard le dit au cadrage plutôt que de promettre un bouton de paiement en quelques jours : le délai dépend de la réponse de la banque, de l\'ouverture d\'un compte commerçant et des essais en conditions réelles.',
                'En attendant, deux chemins sont possibles. Le premier est le paiement déclaratif : le client règle sur le code commerçant de l\'entreprise, puis envoie la capture de confirmation dans la conversation WhatsApp, et un agent ou une automatisation rapproche le paiement de la commande. Le second, plus solide, passe par un accord avec la banque pour recevoir une notification de paiement que le site vérifie. Le premier se met en place en quelques jours ; le second se négocie.',
                'Le virement bancaire reste utile pour les montants élevés et pour les clients étrangers, notamment les Mauritaniens de l\'extérieur. Selon le guide américain, Bankily a conclu des accords avec Orange Money en Europe et avec Remitly aux États-Unis et au Canada pour recevoir des transferts de l\'étranger. Les frais figurent dans la grille tarifaire de chaque banque, à lire avant de les répercuter sur vos prix.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique en Mauritanie ?',
            'paragraphes' => [
                'La première obligation touche les données personnelles. La loi n° 2017-020 est publiée sur le site de l\'<a href="https://www.apd.mr/fr/lois/">Autorité de protection des données à caractère personnel (APD)</a>, dont le site présente les membres, les formulaires de formalités préalables, un guide de conformité et un formulaire de plainte, et annonce des réunions mensuelles ordinaires, la dernière tenue le 30 juin 2026. Tout site qui collecte des noms, des numéros de téléphone ou des commandes traite des données personnelles et relève de ce cadre, y compris quand le développeur travaille depuis l\'étranger.',
                'Avant de traiter, il faut accomplir une formalité. Selon la page sur le <a href="https://www.apd.mr/fr/formalites-prealables/regime-de-declaration/">régime de déclaration</a>, tout traitement qui ne relève pas des cas d\'autorisation fait l\'objet d\'une déclaration à l\'APD, qui délivre un récépissé : seul ce récépissé donne le droit de mettre en œuvre le traitement. Une déclaration unique peut couvrir plusieurs traitements de même finalité. Les <a href="https://www.apd.mr/fr/formalites-prealables/dispenses-de-formalites/">dispenses</a> existent, par exemple pour les traitements réalisés avec le consentement écrit de la personne concernée.',
                'Certains traitements exigent une autorisation préalable. La page sur le <a href="https://www.apd.mr/fr/formalites-prealables/regime-de-lautorisation/">régime de l\'autorisation</a> cite les données génétiques et la recherche en santé, les infractions et condamnations, l\'interconnexion de fichiers, les traitements portant sur un numéro national d\'identification ou un identifiant de portée générale, les données biométriques et les motifs d\'intérêt public. L\'APD répond dans un délai de deux mois, renouvelable une fois, et sans réponse la demande est réputée rejetée. Conséquence directe : un formulaire qui demande le numéro national d\'identification, comme le font les applications de paiement, demande un examen au cadrage.',
                'La déclaration doit aussi préciser, d\'après les <a href="https://www.apd.mr/fr/formalites-prealables/dispositions-communes/">dispositions communes</a>, l\'identité du responsable, les finalités, la durée de conservation, les destinataires, les mesures de sécurité, le recours à un sous-traitant et les transferts envisagés vers un pays tiers. Quand Richard intervient comme sous-traitant technique, le contrat doit prévoir qu\'il n\'agit que sur instruction de l\'entreprise, ce que rappelle la page sur les <a href="https://www.apd.mr/fr/obligations-responsables/">obligations des responsables de traitement</a>.',
                'Les articles 20 à 22 de la <a href="https://www.apd.mr/fr/wp-content/uploads/2023/10/Loi-2017-020-sur-la-protection-des-donnees-a-caractere-personnel.pdf">loi n° 2017-020</a> posent le principe : un transfert vers un pays tiers n\'est permis que si ce pays assure une protection suffisante, l\'APD tient la liste de ces pays, et pour un pays absent de la liste le responsable doit informer l\'APD avant tout transfert. Un site dont les données sont hébergées ou consultées hors de Mauritanie entre dans cette logique. Le cadrage demande donc où seront stockées les données, et la réponse figure dans la déclaration.',
                'D\'autres textes sont listés par l\'APD : la loi 2016-006 d\'orientation de la société d\'information, la loi 2016-007 sur la cybercriminalité, la loi 2018-022 sur les transactions électroniques et la loi 2024-011 sur l\'identification des abonnés aux services de communications électroniques. Pour la vente en ligne, la loi sur les transactions électroniques est le texte à faire lire par le juriste de l\'entreprise avant de fixer les conditions de vente.',
                'Côté fiscalité, la synthèse de <a href="https://taxsummaries.pwc.com/mauritania/corporate/other-taxes">PwC</a>, revue le 7 août 2026, indique une TVA de 16 % sur les ventes locales de biens et de services et de 0 % à l\'exportation. Les règles de facturation (mentions obligatoires, facture normalisée ou électronique) et le traitement de la TVA sur des services numériques fournis depuis l\'étranger se confirment auprès de la Direction générale des impôts avant de configurer un outil de facturation. Même précaution pour le référentiel comptable : l\'expert-comptable de l\'entreprise le valide avant le paramétrage d\'un ERP.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises de Mauritanie, selon leur besoin ?',
            'legende' => 'Besoins fréquents des entreprises mauritaniennes et service de Richard qui y répond, tous réalisables à distance ; le devis précise le périmètre.',
            'entetes' => ['Besoin typique', 'Ce que Richard propose', 'Service'],
            'lignes'  => [
                ['Un site qui présente l\'entreprise en arabe et en français', 'Site vitrine bilingue, pensé pour le mobile, avec mise en page de droite à gauche pour l\'arabe', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Vendre à des clients qui commandent déjà par WhatsApp', 'Catalogue partageable, prise de commande et rapprochement des paiements mobiles', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Répondre aux clients à toute heure sur WhatsApp', 'Assistant qui répond, qualifie la demande et passe la main à un humain', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots WhatsApp</a>'],
                ['Brancher WhatsApp à vos fichiers clients et commandes', 'Intégration de l\'API WhatsApp avec vos outils', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Suivre stocks, achats, ventes et comptabilité dans un seul outil', 'Déploiement d\'Odoo par paliers, avec reprise des données', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Gérer facturation et clients avec un outil léger', 'Mise en service de Dolibarr pour une petite structure', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Cesser de ressaisir les mêmes données chaque semaine', 'Flux n8n ou Make entre formulaires, tableurs, messageries et logiciels', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Relier un site à une banque, à un transporteur ou à un autre logiciel', 'Conception et sécurisation d\'API, connecteurs sur mesure', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Équiper des agents de terrain sur téléphone', 'Application Android et iOS pour saisir et consulter les données', '<a href="/services/application-mobile-android-ios">Application mobile</a>'],
                ['Apparaître quand on cherche une entreprise à Nouakchott ou à Nouadhibou', 'Fiche Google, avis, pages locales', '<a href="/services/seo-local-google-business">SEO local et Google Business</a>'],
                ['Ne pas lancer un projet sans l\'avoir chiffré', 'Étude, périmètre, priorités et feuille de route', '<a href="/services/audit-etude-de-projet">Audit et étude de projet</a>'],
                ['Garder l\'outil en état après la livraison', 'Correctifs, sauvegardes, mises à jour', '<a href="/services/maintenance-support">Maintenance et support</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels projets numériques pour la pêche, les mines, le gaz et l\'élevage mauritaniens ?',
            'items' => [
                ['secteur' => 'Pêche et produits de la mer', 'probleme' => 'Les poissons figurent parmi les produits exportés selon la fiche pays de Bpifrance, mais les lots, les calibres et les documents d\'expédition se suivent souvent sur papier ou dans des messages.', 'solution' => 'Un outil de gestion où chaque lot a sa fiche, son stock et ses pièces, relié à un tableau de bord d\'expéditions, avec l\'ERP Odoo ou Dolibarr selon la taille de la structure.'],
                ['secteur' => 'Mines : fer, or, cuivre', 'probleme' => 'Les entreprises sous-traitantes ou fournisseuses d\'une exploitation doivent prouver à leur donneur d\'ordre leurs documents, leurs livraisons et leurs factures, et les perdent dans des dossiers partagés.', 'solution' => 'Un espace client sécurisé où déposer et retrouver les pièces, avec des relances automatiques avant l\'échéance d\'un document.'],
                ['secteur' => 'Gaz et énergie', 'probleme' => 'La première cargaison de gaz liquéfié du champ offshore Grand Tortue Ahmeyim, partagé avec le Sénégal, est partie en avril 2025 : autour d\'un tel projet, des petites entreprises locales cherchent à se faire référencer et à répondre vite à des demandes de prix.', 'solution' => 'Un site de présentation soigné en deux langues et un formulaire de demande de devis qui alimente un suivi commercial, plutôt que des échanges dispersés.'],
                ['secteur' => 'Élevage et agroalimentaire', 'probleme' => 'La direction du Trésor français estime que l\'élevage assure l\'autosuffisance en viande rouge avec un excédent proche de 40 %, mais la collecte, la vente et le suivi des paiements restent peu outillés.', 'solution' => 'Une application mobile pour saisir collectes et ventes sur le terrain, même avec une connexion intermittente, synchronisée avec un tableau de bord.'],
                ['secteur' => 'Commerce et boutiques', 'probleme' => 'Les boutiques vendent par WhatsApp et encaissent par applications bancaires mobiles, sans lien entre la conversation, le stock et le paiement.', 'solution' => 'Un catalogue relié à un assistant WhatsApp, un stock tenu à jour et un rapprochement des paiements reçus avec les commandes.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes en Mauritanie, et comment financer la formation ?',
            'paragraphes' => [
                'Les formations de Richard se donnent en visioconférence pour les équipes en Mauritanie : des séances courtes, avec des exercices faits sur les propres documents et outils des participants. Les sujets qui reviennent le plus souvent chez les entreprises qui vendent par téléphone sont la <a href="/formations/whatsapp-business">formation WhatsApp Business pour vendre</a>, la <a href="/formations/ia-en-entreprise">formation à l\'IA en entreprise</a>, la <a href="/formations/n8n">formation n8n</a> pour automatiser, et <a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> quand un ERP est déployé.',
                'Un projet de paiement ou de collecte de données gagne à être précédé d\'une séance de sensibilisation : la <a href="/formations/cybersecurite-employes">cybersécurité pour les employés</a> traite l\'hameçonnage et les mots de passe, utiles à toute équipe qui manie des paiements mobiles, et <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> aide à relire ses usages à la lumière de la loi 2017-020.',
                'Pour le financement, la piste connue est le Fonds autonome de promotion de la formation technique et professionnelle (FAP-FTP). Un rapport pays de 2014, publié par l\'<a href="https://tvsd.adeanet.org/sites/default/files/documents/rapport_pays_mauritanie.pdf">ADEA</a>, le décrit comme un fonds dont l\'objet principal est de dynamiser la formation continue en contribuant au financement d\'actions répondant à une demande de l\'entreprise, secteur structuré comme secteur informel, avec un comité d\'attribution des financements présidé alternativement par le public et le privé. Le même rapport associe à ce dispositif l\'Institut national de promotion de la formation technique et professionnelle (INAP-FTP).',
                'Les conditions de ce fonds sont à confirmer auprès de l\'INAP-FTP avant de compter sur une prise en charge : entreprises éligibles, plafonds, justificatifs, et surtout si un organisme de formation établi hors de Mauritanie peut être retenu. Richard peut fournir sur demande le programme, la durée et le devis détaillé qui servent de pièces à ce dossier.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'paragraphes' => [
                'Richard travaille depuis Cotonou. La Mauritanie est à UTC+0 toute l\'année, sans heure d\'été, d\'après la base de fuseaux horaires de l\'IANA, alors que Cotonou est à UTC+1 : il est une heure de moins à Nouakchott. Les horaires publiés de Richard, de 7 heures à 20 heures tous les jours à Cotonou, correspondent donc à 6 heures à 19 heures à Nouakchott, ce qui laisse une longue plage commune pour des réunions de cadrage ou de recette.',
                'La langue de travail est le français, avec l\'anglais en renfort. Si votre site doit exister en arabe, les textes arabes sont fournis ou validés par une personne de votre côté, et la maquette est préparée pour recevoir une langue qui s\'écrit de droite à gauche. Les échanges courants passent par WhatsApp, très répandu dans le pays, et par visioconférence pour les points d\'étape.',
                'Le suivi peut être écrit : un document de cadrage au départ, un point d\'avancement à chaque palier, des livrables remis au fur et à mesure et des accès à votre nom. Aucun déplacement n\'est prévu : la collaboration se fait entièrement à distance, y compris la formation et la recette. La réponse à une première demande arrive sous 24 heures, et le premier échange est gratuit.',
                'Les devis sont établis en euros. Le règlement se fait par virement, carte bancaire ou PayPal, à confirmer sur le devis, et non par application de paiement mauritanienne. Pour une entreprise dont les recettes sont en ouguiya, la question de la conversion se règle donc avant la signature, et l\'on s\'accorde sur un calendrier de paiements par paliers plutôt que sur un versement unique.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte un projet numérique en Mauritanie ?',
            'paragraphes' => [
                'Le prix d\'un projet est fixé sur devis, en euros, après un premier échange gratuit : aucun montant n\'est publié pour la Mauritanie. Cette réserve tient à ce qui fait réellement varier le coût dans ce pays, et que seul un cadrage permet de chiffrer.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qu\'est-ce qui fait varier le prix dans ce pays ?',
            'intro' => 'Cinq facteurs reviennent dans les devis pour une entreprise mauritanienne ; chacun est discuté avant de s\'engager.',
            'items' => [
                ['titre' => 'Le nombre de langues', 'texte' => 'Un site en arabe et en français double le travail de rédaction et de relecture, et une mise en page de droite à gauche demande des tests supplémentaires. Une langue nationale comme le poular, le soninké ou le wolof ajoute un autre volume.'],
                ['titre' => 'Le moyen de paiement choisi', 'texte' => 'Un paiement déclaratif sur code commerçant se met en place vite. Un paiement vérifié automatiquement suppose un accord avec une banque et des essais, donc plus de temps de projet.'],
                ['titre' => 'Les formalités de données personnelles', 'texte' => 'Le dossier de déclaration à l\'APD se prépare avec l\'entreprise ; si le projet touche un numéro national d\'identification ou des données biométriques, la demande d\'autorisation allonge le calendrier.'],
                ['titre' => 'La connexion de vos clients', 'texte' => 'Une application qui doit marcher quand le réseau coupe, ou une page légère pour les petits forfaits, demande plus de conception qu\'un site ordinaire.'],
                ['titre' => 'La taille et l\'état de vos données', 'texte' => 'Reprendre des stocks et des clients depuis des cahiers ou des tableurs désordonnés prend plus de temps que partir d\'un fichier propre.'],
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Sous quelle forme le devis est-il établi ?',
            'items' => [
                ['offre' => 'Site ou page de présentation', 'prix' => 'Sur devis, en euros', 'inclus' => ['Cadrage et maquette', 'Mise en ligne', 'Version bilingue si besoin']],
                ['offre' => 'Application, ERP ou automatisation', 'prix' => 'Sur devis, en euros', 'inclus' => ['Cadrage par paliers', 'Reprise des données', 'Formation en visioconférence']],
                ['offre' => 'Formation d\'une équipe', 'prix' => 'Sur devis, en euros', 'inclus' => ['Programme adapté à vos outils', 'Séances à distance', 'Support écrit']],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on le plus souvent dans un projet pour la Mauritanie ?',
            'intro' => 'Chacune de ces erreurs vient d\'un fait du pays et se corrige au cadrage.',
            'items' => [
                ['titre' => 'Concevoir pour un ordinateur', 'texte' => 'Fin 2025, 37,4 % des habitants étaient internautes selon DataReportal, alors que les connexions mobiles dépassaient la population. Le parcours se teste d\'abord sur un téléphone d\'entrée de gamme.'],
                ['titre' => 'Ne prévoir que la carte bancaire', 'texte' => 'Le guide américain décrit un commerce qui passe par WhatsApp et des applications bancaires mobiles. La carte internationale se prépare, avec la certification de GIMTEL chez Visa, mais ne suffit pas à elle seule.'],
                ['titre' => 'Oublier le plafond des paiements interopérables', 'texte' => 'Les opérations par le switch GIMTEL sont plafonnées à 50 000 MRU par transaction et par jour d\'après la Banque Populaire de Mauritanie, en octobre 2024. Un panier plus élevé doit avoir une autre voie.'],
                ['titre' => 'Lancer le site avant la déclaration à l\'APD', 'texte' => 'Seul le récépissé donne le droit de mettre en œuvre le traitement. Il se demande avant l\'ouverture du formulaire, pas après la première plainte.'],
                ['titre' => 'Demander le numéro national d\'identification sans examen', 'texte' => 'Les traitements portant sur un identifiant de portée générale relèvent de l\'autorisation de l\'APD, avec deux mois de délai possible, renouvelable une fois.'],
                ['titre' => 'Copier le paramétrage d\'un pays voisin', 'texte' => 'Taux de TVA, plan comptable, factures et obligations de déclaration se vérifient pour la Mauritanie avec l\'expert-comptable et la direction des impôts, et non par analogie avec un autre pays.'],
                ['titre' => 'Laisser l\'arabe pour la fin', 'texte' => 'Une mise en page prévue pour le français se casse en arabe : boutons, tableaux et formulaires doivent être pensés dès le départ.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet en Mauritanie à Richard ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard peut accompagner à distance les entreprises en Mauritanie, avec ce qu\'il a construit au fil de plus de six ans d\'expérience : une formation à EPITECH depuis 2022, <a href="https://wapy.pro">Wapy</a>, un produit à lui qui répond aux clients sur WhatsApp grâce à l\'intelligence artificielle, et la co-fondation d\'<a href="https://audyxa.com">Audyxa</a>. Les <a href="/realisations/">réalisations</a> rassemblent des sites, des boutiques et des applications, dont des paiements par mobile money et des assistants WhatsApp.',
                'Pour une entreprise mauritanienne, ces compétences servent surtout là où le pays se distingue : la vente par WhatsApp, le paiement mobile et la présence sur le téléphone. La démarche reste la même qu\'ailleurs : un cadrage écrit, un palier en production avant d\'ouvrir le suivant, et des accès à votre nom. Pour en savoir plus sur son parcours, voir la page <a href="/richard-salanon">Richard SALANON</a> et la page <a href="/a-propos/">à propos</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez un projet en Mauritanie à cadrer ?',
            'texte'  => 'Décrivez votre activité, la ville, la langue de vos clients, le moyen de paiement que vous utilisez aujourd\'hui et le résultat attendu : vous recevez une réponse sous 24 heures et, après un premier échange gratuit, un devis en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Comment Richard accompagne-t-il une entreprise mauritanienne ?', 'r' => 'Richard peut accompagner à distance les entreprises du pays, depuis Cotonou : cadrage écrit, livraison par paliers, formation en visioconférence. La page des réalisations donne un aperçu des sites, boutiques et applications qu\'il a conçus.'],
        ['q' => 'Intervient-il sur place à Nouakchott ou à Nouadhibou ?', 'r' => 'Non. L\'intervention se fait uniquement à distance depuis Cotonou : cadrage, développement, recette et formation par visioconférence et par messagerie. Aucun déplacement n\'est prévu dans le devis.'],
        ['q' => 'Quel est le décalage horaire entre Nouakchott et Cotonou ?', 'r' => 'Une heure, toute l\'année. La Mauritanie est à UTC+0, sans changement d\'heure selon la base de fuseaux de l\'IANA, et Cotonou à UTC+1. Les horaires de Richard, de 7 heures à 20 heures à Cotonou, correspondent à 6 heures à 19 heures à Nouakchott.'],
        ['q' => 'En quelle devise est établi le devis, et faut-il payer en ouguiya ?', 'r' => 'Le devis est établi en euros, sur devis, sans montant publié. Le règlement se fait par virement, carte bancaire ou PayPal, à confirmer sur le devis ; Richard ne propose pas de paiement par application mauritanienne. L\'ouguiya (MRU) reste la monnaie de vos recettes, la conversion se règle avant la signature.'],
        ['q' => 'Existe-t-il une autorité de protection des données en Mauritanie ?', 'r' => 'Oui : l\'Autorité de protection des données à caractère personnel (APD), instituée par la loi n° 2017-020. Son site publie ses membres, ses formulaires de formalités préalables et un guide de conformité, et annonce une réunion mensuelle ordinaire tenue le 30 juin 2026.'],
        ['q' => 'Faut-il déclarer son site à l\'APD avant de collecter des données ?', 'r' => 'En règle générale oui. Selon l\'APD, tout traitement hors des cas d\'autorisation fait l\'objet d\'une déclaration, et seul le récépissé délivré donne droit de mettre en œuvre le traitement. Des dispenses existent, par exemple avec le consentement écrit de la personne concernée. Le juriste de l\'entreprise confirme le régime applicable.'],
        ['q' => 'Quels traitements demandent une autorisation préalable de l\'APD ?', 'r' => 'La page de l\'APD cite les données génétiques et de recherche en santé, les infractions et condamnations, l\'interconnexion de fichiers, les numéros nationaux d\'identification ou identifiants de portée générale, la biométrie et les traitements d\'intérêt public. L\'APD se prononce en deux mois, renouvelables une fois, et le silence vaut rejet.'],
        ['q' => 'Peut-on stocker les données d\'un site mauritanien hors du pays ?', 'r' => 'La loi 2017-020 encadre le transfert vers un pays tiers dans ses articles 20 à 22 : protection suffisante exigée, liste tenue par l\'APD, et information préalable de l\'APD pour un pays hors liste. Le lieu de stockage se choisit au cadrage et se mentionne dans la déclaration.'],
        ['q' => 'Quels moyens de paiement mobile utilisent les Mauritaniens ?', 'r' => 'Parmi les applications citées par le guide commercial américain figurent Bankily, de la Banque Populaire de Mauritanie, et Masrvi, de la BMCI. Bankily indique près d\'un million de clients en octobre 2024 et une interopérabilité avec d\'autres banques mobiles par le switch GIMTEL, plafonnée à 50 000 MRU par transaction et par jour.'],
        ['q' => 'Un site peut-il encaisser directement avec Bankily ou Masrvi ?', 'r' => 'Les pages publiques des deux services décrivent des offres pour clients et commerçants, non une interface de programmation ouverte. L\'encaissement automatique s\'obtient donc par un accord avec la banque, avec un délai qui dépend d\'elle. En attendant, un paiement sur code commerçant avec confirmation envoyée dans la conversation WhatsApp se met en place plus vite.'],
        ['q' => 'Le site doit-il être en arabe ?', 'r' => 'L\'arabe est la langue officielle et le poular, le soninké et le wolof sont des langues nationales selon la Constitution. Pour s\'adresser au grand public, une version arabe est à envisager dès le cadrage. Richard travaille en français et en anglais : les textes arabes sont fournis ou validés de votre côté.'],
        ['q' => 'Quelle TVA s\'applique, et faut-il une facture électronique ?', 'r' => 'La synthèse de PwC, revue le 7 août 2026, indique 16 % sur les ventes locales et 0 % à l\'exportation. Pour la facture électronique ou normalisée, les règles se confirment auprès de la Direction générale des impôts avant de configurer un outil de facturation.'],
        ['q' => 'La formation peut-elle être financée ?', 'r' => 'Le fonds FAP-FTP, géré avec l\'INAP-FTP, contribue au financement de formations répondant à une demande d\'entreprise selon un rapport de l\'ADEA de 2014. Les conditions, et l\'éligibilité d\'un organisme établi à l\'étranger, se confirment auprès de l\'INAP-FTP avant de s\'engager.'],
    ],

    'sources' => [
        ['titre' => 'Autorité de protection des données à caractère personnel (APD), accueil', 'url' => 'https://www.apd.mr/fr', 'date' => '2026-10-06'],
        ['titre' => 'APD, textes de loi (lois 2016-006, 2016-007, 2017-020, 2018-022, 2024-011)', 'url' => 'https://www.apd.mr/fr/lois/', 'date' => '2026-10-06'],
        ['titre' => 'Loi n° 2017-020 sur la protection des données à caractère personnel (texte publié par l\'APD)', 'url' => 'https://www.apd.mr/fr/wp-content/uploads/2023/10/Loi-2017-020-sur-la-protection-des-donnees-a-caractere-personnel.pdf', 'date' => '2026-10-06'],
        ['titre' => 'APD, régime de déclaration', 'url' => 'https://www.apd.mr/fr/formalites-prealables/regime-de-declaration/', 'date' => '2026-10-06'],
        ['titre' => 'APD, régime de l\'autorisation', 'url' => 'https://www.apd.mr/fr/formalites-prealables/regime-de-lautorisation/', 'date' => '2026-10-06'],
        ['titre' => 'APD, dispenses de formalités', 'url' => 'https://www.apd.mr/fr/formalites-prealables/dispenses-de-formalites/', 'date' => '2026-10-06'],
        ['titre' => 'APD, dispositions communes aux formalités préalables', 'url' => 'https://www.apd.mr/fr/formalites-prealables/dispositions-communes/', 'date' => '2026-10-06'],
        ['titre' => 'APD, obligations des responsables de traitement', 'url' => 'https://www.apd.mr/fr/obligations-responsables/', 'date' => '2026-10-06'],
        ['titre' => 'Autorité de régulation, avis sur les adjudicataires provisoires des licences 5G', 'url' => 'https://www.are.mr/index.php/l-autorite/189-publications/1484-avis-relatif-a-la-designation-des-adjudicataires-provisoires-pour-lattribution-de-licences-en-vue-de-letablissement-et-lexploitation-de-reseaux-et-services-de-communications-electroniques-mobiles-de-cinquieme-generation-5g', 'date' => '2026-10-06'],
        ['titre' => 'Autorité de régulation, plan national de numérotation', 'url' => 'https://www.are.mr/index.php/telecommunications-fr/plan-de-numerotation', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, Digital 2026 : Mauritanie', 'url' => 'https://datareportal.com/reports/digital-2026-mauritania', 'date' => '2026-10-06'],
        ['titre' => 'ANSADE, résultats prioritaires du recensement général de la population et de l\'habitat 2023', 'url' => 'https://centre-rachad.org/wp-content/uploads/2024/10/Depliant-RGPH5_vf.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Bpifrance, fiche pays Mauritanie, janvier 2026', 'url' => 'https://assurance-export.bpifrance.fr/storage/sites/26/2025/07/fiche_pays_mauritanie_01_2026.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Département du Commerce américain, guide pays Mauritanie : commerce électronique', 'url' => 'https://trade.gov/country-commercial-guides/mauritania-ecommerce', 'date' => '2026-10-06'],
        ['titre' => 'Département du Commerce américain, guide pays Mauritanie : finance numérique', 'url' => 'https://trade.gov/country-commercial-guides/mauritania-fintech', 'date' => '2026-10-06'],
        ['titre' => 'Banque Populaire de Mauritanie, communiqué sur l\'interopérabilité de Bankily (21 octobre 2024)', 'url' => 'https://www.bpm.mr/actualites/Communiqu%C3%A9-de-presse-:-Aujourd%E2%80%99hui-la-famille-bankily-s%E2%80%99agrandit-avec-l%E2%80%99interop%C3%A9rabilit%C3%A9', 'date' => '2026-10-06'],
        ['titre' => 'Bankily, présentation du service', 'url' => 'https://www.bankily.mr', 'date' => '2026-10-06'],
        ['titre' => 'Masrvi par BMCI, présentation du service', 'url' => 'https://masrvi.mr', 'date' => '2026-10-06'],
        ['titre' => 'PwC, Worldwide Tax Summaries : Mauritanie, autres impôts (revue du 7 août 2026)', 'url' => 'https://taxsummaries.pwc.com/mauritania/corporate/other-taxes', 'date' => '2026-10-06'],
        ['titre' => 'Constitution de la République islamique de Mauritanie, version consolidée (articles 6 et 7)', 'url' => 'https://www.primature.gov.mr/sites/default/files/2021-05/Constitution_consolidefr.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Direction générale du Trésor, Mauritanie : agriculture et politique agricole (14 janvier 2026)', 'url' => 'https://www.tresor.economie.gouv.fr/Articles/2026/01/14/mauritanie-agriculture-et-politique-agricole', 'date' => '2026-10-06'],
        ['titre' => 'ADEA, rapport pays Mauritanie sur la formation technique et professionnelle (2014)', 'url' => 'https://tvsd.adeanet.org/sites/default/files/documents/rapport_pays_mauritanie.pdf', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base de données des fuseaux horaires : Africa/Nouakchott (fichier backward)', 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-06'],
        ['titre' => 'Osiris, la Mauritanie lance la 5G commerciale (18 mai 2026)', 'url' => 'https://osiris.sn/haut-debit-la-mauritanie-rejoint-le-cercle-des-pays-ayant-lance-la-5g.html', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-vitrine-professionnel', 'site-e-commerce', 'agents-ia-chatbot-whatsapp', 'integration-whatsapp', 'integration-odoo', 'integration-dolibarr', 'automatisation-ia', 'application-mobile-android-ios', 'api-rest-integrations', 'audit-etude-de-projet', 'creation-site-wordpress', 'publicite-en-ligne-google-facebook-ads', 'tunnel-de-vente', 'marketplace-et-plateforme-e-learning'],
        'formations'  => ['whatsapp-business', 'ia-en-entreprise', 'n8n', 'odoo-utilisateurs', 'cybersecurite-employes', 'ia-ethique-conformite'],
        'comparatifs' => ['n8n-vs-make-vs-zapier'],
        'metiers'     => ['commercants-e-commercants', 'chefs-entreprise-dirigeants'],
    ],
];
