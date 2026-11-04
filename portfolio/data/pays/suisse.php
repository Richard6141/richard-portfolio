<?php
// ============================================================
// data/pays/suisse.php · Page pays « Suisse » (vague 1D, tranche 3).
// Faits externes revérifiés le 06/10/2026 sur les pages citées dans 'fiche' et 'sources'
// (Fedlex : LPD état au 07.07.2025, OPDo état au 01.12.2025, CO état au 01.10.2026,
// LCD état au 01.01.2025, Constitution état au 03.03.2024 ; AFC, PFPDT, OFJ, OFS, SIX, TWINT, BNS).
// Pas d'OHADA, pas de montant chiffré (devis sur mesure en CHF). 'ohada' absente par construction
// (la Suisse n'est pas membre).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Cadrer TWINT, QR-facture et conformité nLPD avant de coder : la méthode de Richard pour les PME romandes',
    'title'   => 'Consultant digitalisation et IA en Suisse | Richard SALANON',
    'meta'    => 'Création de site WordPress et e-commerce, application mobile, SEO, Google Ads, IA et formations en Suisse : TWINT, devis en francs suisses. Devis gratuit.',
    'en_bref' => 'Depuis Cotonou, Richard SALANON prend en charge pour des entreprises suisses, surtout romandes : applications web et mobiles, boutiques qui encaissent par TWINT et par carte, automatisations, intégrations d\'IA, Odoo et Dolibarr avec QR-facture, et formation des équipes. Chaque projet est cadré selon la nouvelle loi sur la protection des données (nLPD), avec un contrat adapté au droit suisse des obligations. Les échanges se font en français, avec zéro ou une heure d\'écart selon la saison, et les devis sont établis en francs suisses. Des entreprises suisses lui ont déjà confié des projets.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale'   => ['v' => 'Berne, « ville fédérale » depuis 1848 : siège permanent du gouvernement et du Parlement', 'source' => 'https://fr.wikipedia.org/wiki/Berne', 'date' => '2026-10-06'],
        'villes'     => ['v' => ['Zurich', 'Genève', 'Bâle', 'Lausanne', 'Berne'], 'source' => 'https://fr.wikipedia.org/wiki/Liste_des_villes_de_Suisse', 'date' => '2026-10-06'],
        'fuseau'     => ['v' => 'La Suisse suit l\'heure d\'Europe centrale (UTC+1) l\'hiver et l\'heure d\'été (UTC+2) ; Cotonou garde UTC+1 toute l\'année : écart de zéro ou une heure', 'source' => 'https://data.iana.org/time-zones/tzdb/europe', 'date' => '2026-10-06'],
        'indicatif'  => ['v' => '+41', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues'    => ['v' => 'Langues nationales : allemand, français, italien, romanche ; les cantons fixent leurs langues officielles (Constitution, art. 4 et 70)', 'source' => 'https://www.fedlex.admin.ch/filestore/fedlex.data.admin.ch/eli/cc/1999/404/20240303/fr/html/fedlex-data-admin-ch-eli-cc-1999-404-20240303-fr-html-1.html', 'date' => '2026-10-06'],
        'population' => ['v' => '9 092 436 habitants en 2025', 'source' => 'https://data.worldbank.org/indicator/SP.POP.TOTL?locations=CH', 'date' => '2026-10-06'],
        'internet'   => ['v' => '98 % de la population utilise internet au moins une fois par semaine en 2025, contre 93 % dans l\'Union européenne', 'source' => 'https://ec.europa.eu/eurostat/databrowser/view/isoc_ci_ifp_fu/default/table', 'date' => '2026-10-06'],
        'mobile'     => ['v' => '129,5 abonnements de téléphonie mobile par centaine d\'habitants en 2024', 'source' => 'https://data.worldbank.org/indicator/IT.CEL.SETS.P2?locations=CH', 'date' => '2026-10-06'],
        'mobile_money' => ['v' => 'TWINT : plus de 6 millions d\'utilisateurs et 901 millions de transactions en 2025', 'source' => 'https://www.twint.ch/fr/', 'date' => '2026-10-06'],
        'secteurs'   => ['v' => ['Instruments de précision', 'Chimie et pharmacie', 'Horlogerie', 'Banques et assurances'], 'source' => 'https://www.tresor.economie.gouv.fr/Articles/2017/11/17/suisse-presentation-pays', 'date' => '2026-10-06'],
        'devise'     => ['v' => 'Franc suisse (CHF) ; la Banque nationale suisse, banque centrale indépendante, a le monopole d\'émission des billets', 'source' => 'https://www.snb.ch/fr', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['TWINT'], 'source' => 'https://www.twint.ch/fr/clients-commerciaux/produits/twint-dans-la-boutique-en-ligne/', 'date' => '2026-10-06'],
        'agregateurs' => ['v' => ['Payrexx', 'Wallee', 'Stripe', 'Planet (jadis Datatrans)', 'SaferPay de Worldline', 'PostFinance Checkout Flex'], 'source' => 'https://www.twint.ch/fr/clients-commerciaux/produits/twint-dans-la-boutique-en-ligne/', 'date' => '2026-10-06'],
        'donnees'    => ['v' => 'Loi fédérale sur la protection des données (LPD, RS 235.1), nouvelle version en vigueur depuis le 1er septembre 2023', 'source' => 'https://www.fedlex.admin.ch/filestore/fedlex.data.admin.ch/eli/cc/2022/491/20250707/fr/html/fedlex-data-admin-ch-eli-cc-2022-491-20250707-fr-html-1.html', 'date' => '2026-10-06'],
        'autorite'   => ['v' => 'Préposé fédéral à la protection des données et à la transparence (PFPDT), autorité indépendante basée à Berne', 'source' => 'https://www.edoeb.admin.ch/fr/contact', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'QR-facture, qui a remplacé les bulletins de versement le 1er octobre 2022 ; directives en version 2.3 depuis le 22 novembre 2025, version 2.4 annoncée pour le 14 novembre 2026', 'source' => 'https://www.six-group.com/fr/products-services/banking-services/payment-standardization/standards/qr-bill.html', 'date' => '2026-10-06'],
        'tva'        => ['v' => 'Impôt sur les acquisitions : dû par le destinataire inscrit, et par le non-inscrit au-delà de 10 000 francs par année civile de prestations étrangères', 'source' => 'https://www.estv.admin.ch/fr/impot-sur-les-acquisitions-tva', 'date' => '2026-10-06'],
        'ecommerce'  => ['v' => 'Loi contre la concurrence déloyale (LCD), art. 3, al. 1, let. s : identité, étapes de commande, correction des erreurs, confirmation', 'source' => 'https://www.fedlex.admin.ch/filestore/fedlex.data.admin.ch/eli/cc/1988/223_223_223/20250101/fr/html/fedlex-data-admin-ch-eli-cc-1988-223_223_223-20250101-fr-html-1.html', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Chèque annuel de formation du canton de Genève, sous conditions de domicile et de revenu déterminant unifié', 'source' => 'https://www.ge.ch/beneficier-cheque-annuel-formation/conditions-obtention-cheque-annuel-formation', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun de fin octobre à fin mars, une heure d\'avance en heure d\'été'],
        ['l' => 'Devis', 'v' => 'En francs suisses (CHF)'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Dans un pays où 98 % des habitants vont en ligne chaque semaine, qu\'est-ce qui fait gagner un projet ?',
            'paragraphes' => [
                'Le pays compte 9 092 436 habitants en 2025 selon la Banque mondiale, dont 85,7 % vivent en zone urbaine, toujours selon la Banque mondiale. Selon Eurostat, 98 % des Suisses utilisent internet au moins une fois par semaine en 2025, contre 93 % dans l\'Union européenne. La Banque mondiale compte par ailleurs 129,5 abonnements mobiles pour 100 habitants en 2024. Ici, personne ne se demande si les clients sont en ligne : ils y sont tous, et ils comparent.',
                'Cette saturation déplace la difficulté. Une boutique ou un portail client ne se distingue plus par sa seule existence, mais par la fluidité de son parcours, la qualité de sa langue et la fiabilité de ses règlements. Un site qui ne propose pas TWINT, ou une facture qui ne se règle pas d\'un scan depuis l\'application de la banque, est jugé sur-le-champ.',
                'Le paiement mobile en est la preuve. TWINT annonce sur son site plus de 6 millions d\'utilisateurs et 901 millions de transactions en 2025, et eBill revendique quatre millions d\'utilisateurs. Un projet livré depuis Cotonou doit donc se mesurer à des standards locaux très précis, et Richard les cadre avant d\'écrire la première ligne de code.',
                'Il y a enfin la question des langues. La Constitution fédérale désigne quatre langues nationales, l\'allemand, le français, l\'italien et le romanche, et laisse aux cantons le choix de leurs langues officielles. Une entreprise de Genève ou de Lausanne qui vend dans le reste du pays prévoit souvent plusieurs versions, ce qui pèse sur la structure des contenus, le référencement et la maintenance.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères connaître avant de confier un projet depuis la Suisse ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer pour encaisser en Suisse ?',
            'paragraphes' => [
                'Le premier est TWINT. D\'après TWINT, 84 % des boutiques en ligne du pays l\'acceptent, et l\'application propose des variantes qui comptent pour un projet : lien de paiement, express checkout, option « Payer plus tard » (le client règle tout de suite ou dans les 30 jours, le commerçant est payé comme d\'habitude) et paiement automatisé pour les abonnements. La carte bancaire s\'ajoute par un prestataire de paiement, et PostFinance Checkout Flex figure parmi ceux que TWINT recense.',
                'On ne branche pas TWINT directement : le commerçant s\'inscrit auprès de TWINT, puis un prestataire de services de paiement fait le lien avec le site. La page de TWINT cite notamment Adyen, Mollie, Payrexx, Planet (jadis Datatrans), PostFinance Checkout Flex, SaferPay de Worldline, Stripe, Unzer et Wallee. Pour Odoo, elle mentionne un raccordement par Payrexx ou par Wallee ; pour PrestaShop, WooCommerce et Shopify, des modules existent, dont certains certifiés par TWINT.',
                'Entre entreprises, l\'encaissement passe plutôt par la facture. Depuis le 1er octobre 2022, la QR-facture a définitivement remplacé les bulletins de versement suisses, selon SIX. Elle se compose d\'une section de paiement et d\'un récépissé, avec un code QR à croix suisse qui contient toutes les données de règlement. Depuis le 22 novembre 2025, la version 2.3 des directives est en vigueur : elle introduit l\'adresse structurée et les caractères accentués dans le code QR, et SIX annonce déjà la version 2.4 pour le 14 novembre 2026.',
                'L\'eBill, qui revendique quatre millions d\'utilisateurs enregistrés, complète ce dispositif : le client reçoit la facture dans son e-banking et la valide en quelques clics. Pour Richard, cela se traduit en trois chantiers : choisir un prestataire de paiement, produire des QR-factures valides depuis l\'ERP ou l\'application, et tester le tout avec un compte réel avant la mise en ligne. Les frais d\'encaissement dépendent du contrat signé avec TWINT ou le prestataire, et se demandent par écrit avant tout devis.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'TWINT, carte ou QR-facture : quel moyen de paiement pour quel type d\'activité suisse ?',
            'options'  => ['TWINT', 'Carte bancaire via un prestataire', 'QR-facture et eBill'],
            'criteres' => [
                ['critere' => 'Public visé', 'valeurs' => ['Particuliers, achats courants et achats en ligne', 'Clients étrangers et paniers plus élevés', 'Entreprises, associations, abonnés réguliers']],
                ['critere' => 'Démarche', 'valeurs' => ['Inscription auprès de TWINT, puis prestataire ou module', 'Contrat avec le prestataire de paiement', 'Compte bancaire avec IBAN, génération du code QR']],
                ['critere' => 'Intégration au site ou à l\'ERP', 'valeurs' => ['Plugins, lien de paiement, express checkout', 'Plugins et API du prestataire', 'Modèle de document dans l\'ERP et fichiers bancaires']],
                ['critere' => 'Rapprochement comptable', 'valeurs' => ['Relevé du portail commerçant', 'Relevé du prestataire', 'Référence structurée sur chaque facture']],
                ['critere' => 'Profil typique', 'valeurs' => ['Boutique romande avec clientèle locale', 'Vente vers l\'Europe', 'Fiduciaire, atelier, cabinet, fournisseur B2B']],
            ],
            'verdict'  => 'Une boutique suisse combine presque toujours TWINT et la carte, et une activité B2B ajoute la QR-facture. Le cadrage fixe ces trois flux ensemble, car chacun alimente la même comptabilité. Pour comparer les agrégateurs africains que Richard utilise ailleurs, voir le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KKiaPay et CinetPay</a> ; en Suisse, le choix se fait parmi les prestataires listés plus haut.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change la nLPD quand le développement est confié à un prestataire de Cotonou ?',
            'paragraphes' => [
                'La loi fédérale sur la protection des données (LPD, RS 235.1) est entrée en vigueur dans sa nouvelle version le 1er septembre 2023. Le Préposé fédéral à la protection des données et à la transparence (PFPDT) en surveille l\'application. Confier un développement à Cotonou relève de la sous-traitance, régie par l\'article 9 : un contrat ou la loi doit la prévoir, le sous-traitant ne fait que ce que vous pourriez faire vous-même, et vous devez vous assurer qu\'il garantit la sécurité des données.',
                'La question centrale est la communication à l\'étranger. L\'article 5 définit la communication comme le fait de transmettre des données personnelles ou de les rendre accessibles : un accès à distance à une base de clients depuis le Bénin en fait partie. L\'article 16 l\'autorise si le Conseil fédéral a reconnu au pays un niveau de protection adéquat. Dans l\'annexe 1 de l\'ordonnance (OPDo), version du 1er décembre 2025, la liste compte 44 entrées, dont les États-Unis depuis le 15 septembre 2024, et le Bénin n\'y figure pas.',
                'Sans décision d\'adéquation, l\'article 16, alinéa 2, offre d\'autres garanties : un traité, des clauses de protection insérées dans le contrat et préalablement communiquées au PFPDT, des clauses types établies ou reconnues par le PFPDT, ou des règles d\'entreprise contraignantes. Selon le PFPDT, l\'utilisation de clauses types reconnues n\'est pas soumise à notification. L\'article 17 prévoit aussi des dérogations, par exemple le consentement exprès ou la nécessité d\'exécuter un contrat.',
                'Le contrat avec Richard intègre donc ces garanties, et le travail se conçoit pour en limiter l\'exposition : environnement de développement alimenté de données fictives ou anonymisées, accès nominatifs et journalisés, hébergement de la production chez vous ou chez un hébergeur de votre choix. Le PFPDT rappelle aussi que le principe de responsabilité demeure chez celui qui transfère : le choix du mécanisme se valide avec votre juriste ou votre conseiller à la protection des données.',
                'Les sanctions visent des personnes privées. L\'article 61 punit d\'une amende de 250 000 francs au plus, sur plainte, les personnes privées qui, intentionnellement, communiquent des données à l\'étranger en violation de l\'article 16 sans que l\'article 17 s\'applique, confient un traitement à un sous-traitant sans respecter l\'article 9, ou ignorent les exigences minimales de sécurité. Autant écrire ces points noir sur blanc dès la signature.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles autres obligations changent un projet : sécurité, registre, violations et IA ?',
            'paragraphes' => [
                'Plusieurs devoirs de la LPD touchent directement un logiciel. L\'article 7 impose la protection des données dès la conception et par défaut. L\'article 19 exige d\'informer la personne concernée lors de la collecte, d\'où des mentions claires sur chaque formulaire. L\'article 22 demande une analyse d\'impact préalable quand le traitement présente un risque élevé. Ces trois exigences se traduisent en fonctionnalités : paramètres de confidentialité, texte d\'information, journal des accès.',
                'Le registre des activités de traitement (art. 12) a une exception : selon l\'article 24 de l\'OPDo, les entreprises de moins de 250 collaborateurs en sont déliées, sauf traitement de données sensibles à grande échelle ou profilage à risque élevé. En cas de violation de la sécurité, l\'article 24 de la loi veut une annonce au PFPDT dans les meilleurs délais quand le risque est élevé, et le sous-traitant doit prévenir le responsable. Un plan d\'alerte est donc prévu au contrat.',
                'Pour l\'intelligence artificielle, la Suisse ne dispose, selon l\'Office fédéral de la justice, d\'aucune législation propre. Le Conseil fédéral a chargé le 12 février 2025 le Département de justice et police d\'élaborer d\'ici fin 2026 un avant-projet destiné à la consultation, sur la transparence, la protection des données, la non-discrimination et la surveillance. Le 27 octobre 2025, l\'office a réuni près de 60 parties prenantes pour en discuter.',
                'En attendant, le PFPDT a rappelé le 24 septembre 2025 que la LPD s\'applique directement aux traitements qui recourent à l\'IA. Les utilisateurs doivent savoir s\'ils parlent à une machine et si leurs saisies servent à entraîner un programme, et une analyse d\'impact est exigée en cas de risque élevé. Un assistant ou un agent livré par Richard reçoit donc un texte de transparence, une option de relecture humaine et une règle claire sur la réutilisation des données.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se déclare la TVA sur une prestation facturée depuis l\'étranger ?',
            'paragraphes' => [
                'Selon l\'Administration fédérale des contributions (AFC), l\'impôt sur les acquisitions peut être dû sur certaines prestations de services fournies par des entreprises étrangères, celles qui suivent le principe du lieu du destinataire. Sa liste d\'exemples cite la publicité, le conseil, les prestations de management, le traitement de données, la location de personnel, la cession de droits immatériels et les cours interactifs à distance.',
                'La règle diffère selon votre statut. Un destinataire inscrit au registre des assujettis à la TVA déclare et impose ces acquisitions. Un destinataire non inscrit n\'est redevable que s\'il en acquiert pour plus de 10 000 francs par année civile. Le taux normal de la TVA est de 8,1 %. La déclaration se fait en ligne depuis le 1er janvier 2025, dans le portail de l\'AFC. L\'inscription au registre devient obligatoire quand la limite légale de chiffre d\'affaires de 100 000 francs est atteinte.',
                'Pour votre projet, cela veut dire que le devis de Richard est établi en francs suisses, hors toute TVA suisse, et que l\'imposition se règle chez vous. Savoir si une prestation précise de développement, de formation ou d\'intégration entre dans ces catégories reste une question de qualification fiscale : l\'AFC publie à ce sujet les brochures Info TVA 02 et 14, et votre fiduciaire tranche. Mieux vaut le vérifier avant la commande, pas à la clôture.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel contrat choisir entre forfait et régie, et qu\'impose le commerce électronique ?',
            'paragraphes' => [
                'Le droit suisse des obligations (RS 220) distingue deux logiques. Le contrat d\'entreprise, défini à l\'article 363, engage l\'entrepreneur à exécuter un ouvrage moyennant un prix. Le mandat, défini à l\'article 394, l\'engage à gérer une affaire ou à rendre des services. Un site, un module ou une automatisation aux livrables précis se prêtent au forfait ; l\'évolution continue d\'un produit ou le conseil se prêtent plutôt à la régie. La qualification définitive revient à votre juriste.',
                'Les articles suivants donnent des repères pratiques. Après la livraison, le maître vérifie l\'ouvrage aussitôt que possible et signale les défauts (art. 367) ; l\'ouvrage est tacitement accepté si le maître omet de le faire à temps (art. 370). Tant qu\'il n\'est pas terminé, le maître peut se départir du contrat en payant le travail fait et en indemnisant l\'entrepreneur (art. 377), alors que le mandat se révoque en tout temps (art. 404). Ces règles gagnent à être reprises dans la recette.',
                'Pour une boutique, l\'article 3, alinéa 1, lettre s, de la loi contre la concurrence déloyale fixe quatre obligations à celui qui vend par commerce électronique : indiquer clairement son identité et son adresse de contact, y compris l\'e-mail ; indiquer les étapes techniques de la conclusion du contrat ; fournir des outils pour détecter et corriger les erreurs de saisie avant l\'envoi ; confirmer sans délai la commande par courrier électronique. Chacune devient un point de la recette.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour les entreprises suisses, selon le besoin du moment ?',
            'legende' => 'Dix situations courantes d\'entreprises suisses, chacune reliée au service qui y répond.',
            'entetes' => ['Besoin typique en Suisse', 'Service', 'Page'],
            'lignes'  => [
                ['Une équipe de développement trop petite pour un pic de charge, qui veut déléguer un module ou une application complète', 'Externalisation du développement', '<a href="/services/externalisation-developpement">Externalisation du développement</a>'],
                ['Un portail client ou un outil interne taillé pour un processus que les logiciels du marché ne couvrent pas', 'Application web sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Une boutique qui encaisse par TWINT et par carte, en plusieurs langues nationales', 'Site e-commerce', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Un ERP qui édite des QR-factures et tient stocks, achats et comptabilité', 'Intégration Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Un logiciel de gestion plus léger pour une petite structure, une association ou un artisan', 'Intégration Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Des tâches répétitives entre la banque, la comptabilité et la messagerie à enchaîner sans ressaisie', 'Automatisation et IA', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Un assistant à brancher sur vos documents, avec les garanties de transparence que demande le PFPDT', 'Intégration de l\'IA en entreprise', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Des applications déjà en place à relier par API : banque, CRM, plateforme de paiement', 'API REST et intégrations', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Un logiciel livré qu\'il faut maintenir, corriger et mettre à jour après la mise en ligne', 'Maintenance et support', '<a href="/services/maintenance-support">Maintenance et support</a>'],
                ['Des équipes de Genève ou de Lausanne à former sur l\'IA, n8n ou Odoo, en visioconférence et sur leurs propres dossiers', 'Formation en entreprise', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quels cas concrets pour les banques, ateliers, horlogers et laboratoires suisses ?',
            'items' => [
                ['secteur' => 'Banques, assurances et fiduciaires', 'probleme' => 'Le Secrétariat d\'État aux questions financières internationales publie chaque année les chiffres clés de la place financière, qui compte banques, assurances, institutions de prévoyance et fintech. Les petites structures du secteur échangent encore pièces et justificatifs avec leurs clients par e-mail, ce qui expose des données que la nLPD veut protégées.', 'solution' => 'Un espace client avec dépôt de pièces, droits par dossier, journal des accès et texte d\'information conforme à l\'article 19 de la LPD, plus des relances automatisées qui évitent de courir après chaque document manquant.'],
                ['secteur' => 'Instruments de précision', 'probleme' => 'Des ateliers et des PME industrielles gèrent devis, bons de commande et suivi de fabrication dans des tableurs, puis refont chaque facture à la main pour y ajouter la section de paiement de la QR-facture.', 'solution' => 'Un déploiement d\'Odoo ou de Dolibarr qui relie devis, stock et production, avec des factures dont la section de paiement est contrôlée au portail de validation de SIX avant la mise en service.'],
                ['secteur' => 'Horlogerie et vente en ligne', 'probleme' => 'Une petite marque qui vend par catalogue et par e-mail perd des commandes en ligne face à des boutiques qui proposent TWINT, présent selon TWINT dans 84 % des boutiques du pays. Elle doit aussi respecter l\'article 3 de la loi contre la concurrence déloyale sur la confirmation des commandes.', 'solution' => 'Une boutique multilingue avec TWINT, carte et express checkout, un parcours de commande qui confirme chaque achat par courrier électronique, et un suivi des envois relié à la comptabilité.'],
                ['secteur' => 'Chimie et pharmacie', 'probleme' => 'Les équipes cherchent des procédures et des fiches dans des dossiers partagés dont l\'organisation a plus de dix ans. Placer ces documents dans un outil d\'IA publié par un tiers poserait un problème de confidentialité et, pour les données personnelles, d\'analyse d\'impact.', 'solution' => 'Un assistant interrogeant uniquement vos documents, hébergé selon vos règles, avec citation de la source et mention indiquant à l\'utilisateur qu\'il parle à une machine, comme le demande le PFPDT.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment former les équipes suisses, et avec quel financement ?',
            'intro' => 'La formation se donne en visioconférence, en français, sur vos propres documents et vos outils, avec des exercices tirés de votre quotidien. Les séances se placent sur les créneaux de Genève et de Lausanne.',
            'items' => [
                ['titre' => 'Le chèque annuel de formation de Genève', 'texte' => 'Le canton de Genève octroie ce chèque aux personnes majeures domiciliées et contribuables dans le canton depuis un an au moins, ou titulaires d\'un permis de frontalier depuis un an. Il dépend du revenu déterminant unifié, plafonné à 72 000 francs pour une personne célibataire et à 116 000 francs pour un couple marié. La demande se dépose avant le début du cours, le chèque est personnel et non transférable, et l\'organisme de formation en déduit le montant du prix. Le cours doit être utile sur le plan professionnel, ce que le canton apprécie à l\'examen de la demande.'],
                ['titre' => 'Lausanne et les autres cantons', 'texte' => 'Pour le canton de Vaud et les autres cantons, l\'office cantonal compétent indique les aides ouvertes aux salariés et aux entreprises. Elles se demandent avant l\'inscription, jamais après la première séance.'],
                ['titre' => 'IA en entreprise', 'texte' => 'Pour rédiger, résumer et analyser sans faire sortir de données sensibles, et pour connaître les obligations de transparence de la LPD. <a href="/formations/ia-en-entreprise">Voir la formation</a>, et <a href="/formations/ia-ethique-conformite">IA, éthique et conformité</a> pour les juristes et les responsables de la conformité.'],
                ['titre' => 'Automatisation avec n8n', 'texte' => 'Pour relier banque, comptabilité et messagerie sans écrire de code. <a href="/formations/n8n">Voir la formation</a>.'],
                ['titre' => 'Odoo pour vos équipes', 'texte' => 'Pour les achats, les ventes, le stock et la facturation avec QR-facture. <a href="/formations/odoo-utilisateurs">Voir la formation</a>.'],
                ['titre' => 'Développement web et vibecoding', 'texte' => 'Pour les équipes techniques qui veulent coder avec des assistants sans produire de code jetable : <a href="/formations/developpement-web">développement web</a> et <a href="/formations/vibecoding">vibecoding</a>. Les formats à distance sont détaillés sur la page <a href="/formation-ia-entreprise-geneve">formation IA à Genève</a> et sur celle de <a href="/formation-ia-entreprise-lausanne">Lausanne</a>.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se passe une collaboration avec Richard depuis Cotonou ?',
            'intro' => 'Le travail est entièrement à distance : cadrage en visioconférence, livraisons par étapes, suivi écrit.',
            'items' => [
                ['titre' => 'Fuseau horaire', 'texte' => 'Cotonou reste à UTC+1 toute l\'année, alors que la Suisse passe à UTC+2 en heure d\'été. Les horaires publiés de Richard, de 7 h à 20 h à Cotonou, couvrent donc de 8 h à 21 h à Genève en été et de 7 h à 20 h en hiver : la journée suisse entière est accessible.'],
                ['titre' => 'Langue', 'texte' => 'Les échanges, la documentation et les livrables sont en français. Les interfaces peuvent prévoir l\'allemand ou l\'italien, avec des contenus traduits par vos soins ou par un traducteur de votre choix.'],
                ['titre' => 'Devis et facturation', 'texte' => 'Le devis est établi en francs suisses : chaque projet est chiffré sur mesure après un cadrage. La facture ne comporte pas de TVA suisse ; l\'impôt sur les acquisitions se traite chez vous avec votre fiduciaire.'],
                ['titre' => 'Suivi', 'texte' => 'Le projet peut prévoir un échange régulier en visioconférence, un tableau de suivi partagé, un dépôt de code à votre nom et des démonstrations à chaque étape. La messagerie sert aux questions courtes, jamais aux échanges de données personnelles.'],
                ['titre' => 'Données', 'texte' => 'Le contrat reprend les garanties de l\'article 16 de la LPD et décrit qui accède à quoi, depuis où, avec quelle journalisation.'],
                ['titre' => 'Entièrement à distance', 'texte' => 'Cadrage, livraisons et formation se règlent par visioconférence. Les pages <a href="/externaliser-developpement-web-geneve">externaliser le développement à Genève</a> et <a href="/externaliser-developpement-web-lausanne">à Lausanne</a> détaillent le fonctionnement pour chaque ville.'],
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûte un projet pour une entreprise suisse ?',
            'items' => [
                ['offre' => 'Application web, portail client ou outil interne', 'prix' => 'Sur devis, en francs suisses', 'inclus' => ['Cadrage préalable', 'Développement par étapes avec démonstrations', 'Documentation et dépôt de code à votre nom']],
                ['offre' => 'Boutique en ligne avec TWINT et carte', 'prix' => 'Sur devis, en francs suisses', 'inclus' => ['Choix du prestataire de paiement', 'Parcours de commande conforme à la LCD', 'Mise en ligne et recette']],
                ['offre' => 'ERP avec QR-facture', 'prix' => 'Sur devis, en francs suisses', 'inclus' => ['Paramétrage Odoo ou Dolibarr', 'Contrôle des QR-factures', 'Formation des équipes']],
                ['offre' => 'Automatisation ou intégration d\'IA', 'prix' => 'Sur devis, en francs suisses', 'inclus' => ['Flux documentés', 'Texte de transparence', 'Garde-fous et relecture humaine']],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce qui fait varier le prix d\'un projet en Suisse ?',
            'paragraphes' => [
                'Le premier facteur est le nombre de langues : chaque version supplémentaire multiplie les gabarits, les tests et le référencement. Vient ensuite le moyen de paiement : TWINT seul se branche en quelques jours via un module, alors que TWINT, carte et QR-facture reliés à une comptabilité demandent un vrai chantier d\'intégration et de recette bancaire.',
                'La documentation juridique pèse aussi. Un projet qui manipule des données de clients ou de patients demande un contrat de sous-traitance, une annexe sur la communication à l\'étranger, peut-être une analyse d\'impact. Le temps passé avec votre juriste, ou votre conseiller à la protection des données, se compte à part de celui du développement.',
                'Le niveau d\'hébergement et la reprise des données entrent aussi dans la balance, tout comme le choix entre forfait et régie évoqué plus haut. Le devis est établi sur mesure en francs suisses et le paiement se règle par virement ou par les moyens convenus au contrat. Comparer deux devis suppose de comparer ce qu\'ils incluent.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs éviter quand on externalise un projet depuis la Suisse ?',
            'intro' => 'Huit points de vigilance propres au droit, aux paiements et aux usages suisses, à régler avant la première ligne de code.',
            'items' => [
                ['titre' => 'Supposer que le Bénin figure sur la liste des États adéquats', 'texte' => 'L\'annexe 1 de l\'OPDo, dans sa version du 1er décembre 2025, n\'inclut pas le Bénin. Il faut donc des clauses, ou une dérogation de l\'article 17, avant tout accès à des données personnelles.'],
                ['titre' => 'Donner l\'accès à la production dès le premier jour', 'texte' => 'Un environnement de développement à données fictives limite la communication à l\'étranger au strict nécessaire.'],
                ['titre' => 'Découvrir l\'impôt sur les acquisitions à la clôture', 'texte' => 'Si l\'entreprise n\'est pas inscrite à la TVA, le seuil de 10 000 francs par année civile se surveille en cours d\'année, pas en mars suivant.'],
                ['titre' => 'Livrer une facture sans adresse structurée', 'texte' => 'Les directives 2.3, en vigueur depuis le 22 novembre 2025, introduisent l\'adresse structurée dans la QR-facture. Un modèle ancien se contrôle au portail de validation de SIX avant l\'envoi.'],
                ['titre' => 'Attendre une loi sur l\'IA pour se conformer', 'texte' => 'Le PFPDT a rappelé le 24 septembre 2025 que la LPD s\'applique déjà aux traitements qui recourent à l\'IA, avec transparence et analyse d\'impact.'],
                ['titre' => 'Ne proposer que la carte', 'texte' => 'Selon TWINT, 84 % des boutiques en ligne suisses l\'utilisent : un site sans TWINT se remarque aussitôt à la caisse.'],
                ['titre' => 'Compter sur le chèque genevois sans le vérifier', 'texte' => 'Il est personnel, soumis à conditions de domicile et de revenu, et demandé avant le début du cours.'],
                ['titre' => 'Ne prévoir qu\'une seule langue', 'texte' => 'Un site pensé en français uniquement coûte cher à traduire après coup, car les gabarits n\'ont pas été conçus pour des textes plus longs.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi une PME suisse peut-elle confier son projet à un développeur de Cotonou ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard a déjà travaillé avec des entreprises en Suisse, comme dans treize autres pays dont la France et la Belgique. Parmi ses projets réalisés en sous-traitance pour Digital Développement : une boutique à deux devises et deux zones de livraison dont le back-office suit stocks, coupons et ventes, pour Laura Cosmetics (Paris et Abidjan), et une refonte avec suivi des demandes et simulateurs fiscaux pour Impulse Finance, à Argenteuil, livrée en trois jours. Ces projets figurent sur la page des <a href="/realisations/">réalisations</a>.',
                'Formé à EPITECH en 2022, il a créé Wapy, un assistant WhatsApp à IA, et co-fonde <a href="https://audyxa.com">Audyxa</a>. Le détail de son parcours est sur <a href="/richard-salanon">sa page personnelle</a> et dans <a href="/a-propos/">À propos</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quel projet voulez-vous lancer depuis la Suisse ?',
            'texte'  => 'Décrivez votre activité, la nature de vos données et ce que vous voulez déléguer. Richard répond sous 24 heures, puis propose un cadrage et un devis en francs suisses.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Dans quelle devise Richard chiffre-t-il un projet suisse ?', 'r' => 'En francs suisses (CHF). Chaque projet est chiffré sur mesure après un cadrage. Le franc suisse est la monnaie du devis et de la facture ; la Banque nationale suisse a le monopole d\'émission des billets, et le taux de conversion en euros se vérifie le jour du paiement.'],
        ['q' => 'Peut-on transférer des données personnelles suisses au Bénin ?', 'r' => 'L\'article 16 de la LPD l\'autorise si le Conseil fédéral a reconnu un niveau de protection adéquat, ce qui n\'est pas le cas du Bénin dans l\'annexe 1 de l\'OPDo (version du 1er décembre 2025). Le contrat prévoit alors des clauses de protection ou des clauses types reconnues par le PFPDT.'],
        ['q' => 'Un accès à distance depuis Cotonou compte-t-il comme une communication à l\'étranger ?', 'r' => 'Oui, la loi définit la communication comme le fait de transmettre des données ou de les rendre accessibles (art. 5). C\'est pourquoi le développement se fait de préférence sur des données fictives et que les accès à la production sont nominatifs et journalisés.'],
        ['q' => 'Faut-il payer la TVA suisse sur la facture d\'un prestataire étranger ?', 'r' => 'Le prestataire n\'ajoute pas de TVA suisse. Selon l\'AFC, c\'est au destinataire de déclarer l\'impôt sur les acquisitions pour certaines prestations : s\'il est inscrit, toujours ; sinon, au-delà de 10 000 francs par année civile. Votre fiduciaire confirme la qualification.'],
        ['q' => 'Qu\'est-ce que la QR-facture, et peut-elle être produite depuis un ERP ?', 'r' => 'C\'est le document de paiement qui a remplacé les bulletins de versement le 1er octobre 2022, avec un code QR à croix suisse. Les directives 2.3, en vigueur depuis le 22 novembre 2025, introduisent l\'adresse structurée. Richard paramètre le modèle dans l\'ERP et le contrôle au portail de validation de SIX.'],
        ['q' => 'Comment accepter TWINT sur un site ?', 'r' => 'Le commerçant s\'inscrit auprès de TWINT, puis un prestataire de paiement ou un module d\'e-commerce active TWINT sur le site. Une vente sans boutique passe par le lien de paiement TWINT. Les frais dépendent du contrat et se demandent par écrit avant le devis.'],
        ['q' => 'La Suisse a-t-elle une loi sur l\'intelligence artificielle ?', 'r' => 'Pas encore. Le Conseil fédéral a demandé le 12 février 2025 un avant-projet pour fin 2026. D\'ici là, la LPD s\'applique directement aux traitements recourant à l\'IA, rappelle le PFPDT depuis le 24 septembre 2025 : transparence et analyse d\'impact en cas de risque élevé.'],
        ['q' => 'Quel décalage horaire entre Cotonou et la Suisse ?', 'r' => 'Aucun de fin octobre à fin mars, quand la Suisse est à UTC+1 comme Cotonou. Une heure d\'écart en heure d\'été, la Suisse passant à UTC+2. Les réunions se placent dans la journée suisse sans difficulté.'],
        ['q' => 'Le chèque annuel de formation genevois peut-il financer une formation de Richard ?', 'r' => 'Il s\'adresse à des personnes domiciliées à Genève depuis un an, dans la limite d\'un revenu déterminant unifié, et se demande avant le cours. Le cours doit être utile sur le plan professionnel, ce que le canton apprécie à l\'examen de la demande.'],
        ['q' => 'Richard SALANON se déplace-t-il à Genève ou à Lausanne ?', 'r' => 'Le travail se fait entièrement à distance : visioconférence pour le cadrage, démonstrations à chaque étape, formation en ligne. Le budget va aux livrables plutôt qu\'aux trajets.'],
    ],

    'sources' => [
        ['titre' => 'Fedlex, loi fédérale sur la protection des données (LPD, RS 235.1), état au 7 juillet 2025', 'url' => 'https://www.fedlex.admin.ch/filestore/fedlex.data.admin.ch/eli/cc/2022/491/20250707/fr/html/fedlex-data-admin-ch-eli-cc-2022-491-20250707-fr-html-1.html', 'date' => '2026-10-06'],
        ['titre' => 'Fedlex, ordonnance sur la protection des données (OPDo, RS 235.11), état au 1er décembre 2025 : annexe 1 et article 24', 'url' => 'https://www.fedlex.admin.ch/filestore/fedlex.data.admin.ch/eli/cc/2022/568/20251201/fr/html/fedlex-data-admin-ch-eli-cc-2022-568-20251201-fr-html-1.html', 'date' => '2026-10-06'],
        ['titre' => 'PFPDT, communication de données à l\'étranger', 'url' => 'https://www.edoeb.admin.ch/fr/communication-de-donnees-a-letranger', 'date' => '2026-10-06'],
        ['titre' => 'PFPDT, IA et protection des données (24 septembre 2025)', 'url' => 'https://www.edoeb.admin.ch/fr/ia-et-protection-des-donnees', 'date' => '2026-10-06'],
        ['titre' => 'PFPDT, contact et présentation de l\'autorité', 'url' => 'https://www.edoeb.admin.ch/fr/contact', 'date' => '2026-10-06'],
        ['titre' => 'Office fédéral de la justice, intelligence artificielle (décision du Conseil fédéral du 12 février 2025)', 'url' => 'https://www.bj.admin.ch/fr/intelligence-artificielle', 'date' => '2026-10-06'],
        ['titre' => 'AFC, assujettissement à l\'impôt sur les acquisitions', 'url' => 'https://www.estv.admin.ch/fr/impot-sur-les-acquisitions-tva', 'date' => '2026-10-06'],
        ['titre' => 'AFC, taxe sur la valeur ajoutée : taux et inscription', 'url' => 'https://www.estv.admin.ch/fr/taxe-sur-la-valeur-ajoutee', 'date' => '2026-10-06'],
        ['titre' => 'Fedlex, Code des obligations (RS 220), état au 1er octobre 2026', 'url' => 'https://www.fedlex.admin.ch/filestore/fedlex.data.admin.ch/eli/cc/27/317_321_377/20261001/fr/html/fedlex-data-admin-ch-eli-cc-27-317_321_377-20261001-fr-html-1.html', 'date' => '2026-10-06'],
        ['titre' => 'Fedlex, loi contre la concurrence déloyale (LCD, RS 241), état au 1er janvier 2025', 'url' => 'https://www.fedlex.admin.ch/filestore/fedlex.data.admin.ch/eli/cc/1988/223_223_223/20250101/fr/html/fedlex-data-admin-ch-eli-cc-1988-223_223_223-20250101-fr-html-1.html', 'date' => '2026-10-06'],
        ['titre' => 'Fedlex, Constitution fédérale (RS 101), état au 3 mars 2024 : articles 4 et 70', 'url' => 'https://www.fedlex.admin.ch/filestore/fedlex.data.admin.ch/eli/cc/1999/404/20240303/fr/html/fedlex-data-admin-ch-eli-cc-1999-404-20240303-fr-html-1.html', 'date' => '2026-10-06'],
        ['titre' => 'SIX, QR-facture : standard et calendrier', 'url' => 'https://www.six-group.com/fr/products-services/banking-services/payment-standardization/standards/qr-bill.html', 'date' => '2026-10-06'],
        ['titre' => 'eBill, la facture numérique pour la Suisse', 'url' => 'https://www.ebill.ch/fr/home.html', 'date' => '2026-10-06'],
        ['titre' => 'TWINT, utilisateurs et transactions en 2025', 'url' => 'https://www.twint.ch/fr/', 'date' => '2026-10-06'],
        ['titre' => 'TWINT, encaisser en ligne : prestataires de paiement et modules', 'url' => 'https://www.twint.ch/fr/clients-commerciaux/produits/twint-dans-la-boutique-en-ligne/', 'date' => '2026-10-06'],
        ['titre' => 'Eurostat, fréquence d\'utilisation d\'internet par les particuliers (2025)', 'url' => 'https://ec.europa.eu/eurostat/databrowser/view/isoc_ci_ifp_fu/default/table', 'date' => '2026-10-06'],
        ['titre' => 'Banque mondiale, part de la population urbaine en Suisse', 'url' => 'https://data.worldbank.org/indicator/SP.URB.TOTL.IN.ZS?locations=CH', 'date' => '2026-10-06'],
        ['titre' => 'Banque mondiale, population de la Suisse', 'url' => 'https://data.worldbank.org/indicator/SP.POP.TOTL?locations=CH', 'date' => '2026-10-06'],
        ['titre' => 'Banque mondiale, téléphonie mobile cellulaire en Suisse : abonnements par tranche de 100 personnes', 'url' => 'https://data.worldbank.org/indicator/IT.CEL.SETS.P2?locations=CH', 'date' => '2026-10-06'],
        ['titre' => 'Banque nationale suisse, billets et monnaies', 'url' => 'https://www.snb.ch/fr', 'date' => '2026-10-06'],
        ['titre' => 'Canton de Genève, chèque annuel de formation : conditions d\'obtention', 'url' => 'https://www.ge.ch/beneficier-cheque-annuel-formation/conditions-obtention-cheque-annuel-formation', 'date' => '2026-10-06'],
        ['titre' => 'Canton de Genève, chèque annuel de formation : présentation et demande', 'url' => 'https://www.ge.ch/beneficier-cheque-annuel-formation', 'date' => '2026-10-06'],
        ['titre' => 'Canton de Genève, chèque annuel de formation : questions et réponses', 'url' => 'https://www.ge.ch/beneficier-cheque-annuel-formation/questions-reponses-propos-du-caf', 'date' => '2026-10-06'],
        ['titre' => 'Secrétariat d\'État aux questions financières internationales, chiffres clés de la place financière', 'url' => 'https://www.sif.admin.ch/fr/chiffres-cles', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, Berne', 'url' => 'https://fr.wikipedia.org/wiki/Berne', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, liste des villes de Suisse', 'url' => 'https://fr.wikipedia.org/wiki/Liste_des_villes_de_Suisse', 'date' => '2026-10-06'],
        ['titre' => 'Direction générale du Trésor, Suisse : présentation du pays', 'url' => 'https://www.tresor.economie.gouv.fr/Articles/2017/11/17/suisse-presentation-pays', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base de données des fuseaux horaires : Europe (zone Europe/Zurich)', 'url' => 'https://data.iana.org/time-zones/tzdb/europe', 'date' => '2026-10-06'],
        ['titre' => 'UIT, plan de numérotation E.164 : codes de pays (+41)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['externalisation-developpement', 'application-web-sur-mesure', 'integration-odoo', 'integration-dolibarr', 'site-e-commerce', 'automatisation-ia', 'integration-ia-entreprise', 'api-rest-integrations', 'maintenance-support', 'formation-en-entreprise', 'creation-site-wordpress', 'publicite-en-ligne-google-facebook-ads', 'tunnel-de-vente', 'marketplace-et-plateforme-e-learning'],
        'formations'  => ['ia-en-entreprise', 'ia-ethique-conformite', 'n8n', 'odoo-utilisateurs', 'securite-donnees-dirigeants'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
        'metiers'     => ['experts-comptables', 'chefs-entreprise-dirigeants', 'directeurs-financiers'],
    ],
];
