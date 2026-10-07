<?php
// ============================================================
// data/secteurs/cabinets-comptables.php · Page secteur « Cabinets comptables
// et d'audit » (vague secteurs). Faits externes relevés le 07/10/2026 sur
// impots.gouv.fr, la DGI de Côte d'Ivoire, le site de l'OHADA, le gouvernement
// du Bénin, le SGG du Bénin, Légifrance, la CNIL, la Commission européenne,
// le portail e-facture de la Belgique, l'ARTCI et la CDP. Projet rattaché : Impulse Finance.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => "Cabinets comptables et d'audit : des pièces qui arrivent classées, des déclarations qui partent à l'heure et une IA qui prépare la révision sans toucher au secret",
    'title'   => "Cabinets comptables : digitalisation et IA | Richard SALANON",
    'meta'    => "Portail client, collecte des pièces, Odoo, Dolibarr, SYSCOHADA, facture électronique et IA sous secret professionnel pour cabinets comptables et d'audit.",
    'en_bref' => "Richard SALANON équipe les cabinets d'expertise comptable, de commissariat aux comptes et d'audit, en Afrique francophone et en Europe : portail client pour la collecte des pièces, raccordement des logiciels de cabinet, d'Odoo ou de Dolibarr aux factures normalisées, automatisation des relances et des rapprochements, assistants d'IA branchés sur vos dossiers sous contrôle du collaborateur. Le travail se fait à distance, et sur place au Bénin, par paliers. Un site vitrine de cabinet démarre à 300 000 FCFA (environ 457 euros) ; tout le reste se chiffre sur devis, après un premier échange gratuit.",
    'publie'  => '2026-11-05',
    'maj'     => '2026-11-05',
    'univers' => 'Chiffre et finance',
    'locales' => [],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => "Cabinets d'expertise comptable, d'audit et de conseil fiscal, de la structure à deux personnes au cabinet multisite"],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Où en est la digitalisation des cabinets comptables en Afrique francophone et en Europe ?",
            'paragraphes' => [
                "La profession change de rythme, et c'est la réglementation qui fixe le calendrier. En France, selon <a href='https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation'>impots.gouv.fr</a> (page modifiée le 16 janvier 2026), toutes les entreprises doivent pouvoir recevoir des factures électroniques depuis le 1er septembre 2026, les grandes entreprises et les entreprises de taille intermédiaire doivent déjà en émettre, et les PME comme les micro-entreprises suivront au 1er septembre 2027. Pour un cabinet, cela veut dire des dossiers clients dont les pièces arriveront sous forme de données et non de photos.",
                "En Belgique, les entreprises assujetties à la TVA doivent depuis le 1er janvier 2026 échanger des factures électroniques structurées par le réseau Peppol, d'après le <a href='https://efacture.belgium.be/fr/article/pour-qui-la-facturation-electronique-deviendra-t-elle-obligatoire'>portail e-facture des autorités belges</a> : l'envoi d'un PDF par courriel ne suffit plus entre entreprises. Selon <a href='https://www.lalibre.be/dernieres-depeches/2026/08/03/pas-encore-damende-pour-les-societes-non-inscrites-sur-le-portail-de-facturation-peppol-4PDAF4S2BJCUNLC33AEVLND5NU/'>La Libre</a> (3 août 2026), le SPF Finances privilégiait encore le dialogue aux sanctions, avec 89 % des entreprises concernées déjà inscrites à la mi-juillet.",
                "En Afrique de l'Ouest, la facture normalisée a été posée par l'administration avant les cabinets. Au Bénin, la Direction générale des impôts a rendu obligatoires les machines électroniques certifiées de facturation, ou un logiciel validé par elle ; en Côte d'Ivoire, la Direction générale des impôts a mis fin à la facture normalisée physique le 1er décembre 2025 pour les régimes du réel et le 11 décembre 2025 pour les microentreprises : seules les factures normalisées électroniques justifient désormais les charges et la TVA déductible ; au Sénégal, la loi de finances pour 2025 prévoit la facture électronique pour les assujettis à la TVA, les modalités devant être fixées par arrêté. Le cabinet y gagne un flux de données plus propre, à condition d'avoir un outil capable de le lire.",
                "Côté référentiel, la mise à jour est déjà faite : l'acte uniforme sur le droit comptable et l'information financière, adopté à Brazzaville le 26 janvier 2017, est en vigueur depuis le 1er janvier 2018 pour les comptes individuels et le 1er janvier 2019 pour les comptes consolidés, d'après la <a href='https://www.ohada.org/en/ohada-accounting-law/'>commission de normalisation comptable de l'OHADA</a>. Beaucoup de logiciels de cabinet et d'ERP livrent le plan de comptes, mais le plus dur, la collecte et le contrôle, reste manuel dans bien des structures.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels processus d'un cabinet gagnent à être digitalisés, et à quels signes le moment est-il venu ?",
            'intro' => "Un cabinet ne manque pas d'outils, il manque de continuité entre eux. Les situations suivantes reviennent dans les cabinets de toute taille ; trois d'entre elles suffisent à justifier un diagnostic.",
            'items' => [
                ['titre' => "Les pièces arrivent par WhatsApp, par courriel et en sac plastique", 'texte' => "Chaque client envoie à sa manière, les collaborateurs relancent un par un, et la saisie de janvier attend les relevés de décembre. Un portail de dépôt avec liste des pièces attendues par client remplace la chasse aux documents."],
                ['titre' => "La saisie et le rapprochement bancaire occupent les juniors toute la semaine", 'texte' => "Recopier des factures et pointer des relevés est le travail le plus répétitif du cabinet et celui où l'automatisation rend le plus. Il se confie à des règles de rapprochement et à une lecture automatique, relues par un collaborateur."],
                ['titre' => "Le suivi des échéances tient dans un tableur", 'texte' => "Liasses, déclarations de TVA, acomptes, dépôts de comptes : une échéance oubliée coûte des pénalités au client et de la confiance au cabinet. Un tableau de bord alimenté par le logiciel, avec alertes par client et par collaborateur, évite le tableur parallèle."],
                ['titre' => "Les clients demandent leur situation en cours d'année", 'texte' => "Chiffre d'affaires, trésorerie, TVA à payer : le dirigeant veut un chiffre à jour sans attendre le bilan. Un portail ou un tableau de bord partagé répond sans mobiliser le collaborateur."],
                ['titre' => "Un client passe à la facture normalisée ou électronique", 'texte' => "Au Bénin ou en Côte d'Ivoire, ses ventes sortent d'un logiciel raccordé à l'administration ; en France ou en Belgique, d'une plateforme agréée ou du réseau Peppol. Si le cabinet continue de ressaisir, il perd l'avantage du flux de données."],
                ['titre' => "La mission d'audit repose sur des échantillons faits à la main", 'texte' => "Les contrôles de cohérence, les rapprochements et la préparation des demandes d'information peuvent être préparés par des scripts, de sorte que l'auditeur consacre son temps à ce qui demande du jugement."],
                ['titre' => "Le cabinet grandit ou ouvre un deuxième site", 'texte' => "Les méthodes de travail propres à chaque associé se retrouvent dans des dossiers difficiles à reprendre. La procédure de clôture, le contrôle qualité et la lettre de mission ont besoin d'un outil commun."],
                ['titre' => "Les contre-signaux", 'texte' => "Un cabinet de très petite taille qui n'a que dix dossiers n'a pas besoin d'un portail sur mesure : un outil du marché configuré proprement suffit. Mieux vaut le dire au premier échange que vendre une application inutile."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels services pour un cabinet comptable ou d'audit ?",
            'legende' => "Besoins typiques d'un cabinet et service du site qui y répond. Chaque projet commence par un premier échange gratuit ; le prix est fixé sur devis, sauf le site vitrine dont le tarif de départ est publié.",
            'entetes' => ['Besoin typique du cabinet', 'Service', 'Lien'],
            'lignes'  => [
                ["Déployer un ERP gérant la comptabilité du cabinet ou celle d'un client, avec le plan SYSCOHADA", "Intégration et déploiement d'Odoo", "<a href='/services/integration-odoo'>Intégration Odoo</a>"],
                ["Équiper un cabinet ou une PME cliente d'un outil libre, léger, hébergeable sur un serveur PHP", "Intégration et déploiement de Dolibarr", "<a href='/services/integration-dolibarr'>Intégration Dolibarr</a>"],
                ["Relancer les clients, classer les pièces reçues, alerter avant chaque échéance", "Automatisation de processus avec n8n ou Make", "<a href='/services/automatisation-ia'>Automatisation et IA</a>"],
                ["Faire lire les factures, résumer un dossier, préparer une revue analytique sous contrôle humain", "Intégration de l'IA dans les logiciels et les processus", "<a href='/services/integration-ia-entreprise'>Intégration de l'IA en entreprise</a>"],
                ["Présenter le cabinet, ses missions, ses honoraires et prendre rendez-vous", "Site vitrine de cabinet", "<a href='/services/site-vitrine-professionnel'>Site vitrine professionnel</a>"],
                ["Offrir à chaque client un espace pour déposer ses pièces et suivre ses déclarations", "Plateforme avec espace client", "<a href='/services/saas-espace-client'>SaaS et espace client</a>"],
                ["Faire parler le logiciel du cabinet avec la banque, la facturation du client ou l'administration", "Intégrations et API", "<a href='/services/api-rest-integrations'>API et intégrations</a>"],
                ["Ajouter un simulateur, un suivi de demandes ou un module propre au cabinet", "Application web sur mesure", "<a href='/services/application-web-sur-mesure'>Application web sur mesure</a>"],
                ["Envoyer les rappels d'échéance et les questions simples aux clients par WhatsApp", "Intégration de WhatsApp Business", "<a href='/services/integration-whatsapp'>Intégration WhatsApp</a>"],
                ["Garder l'ensemble à jour, sauvegardé et supporté après la livraison", "Maintenance et support", "<a href='/services/maintenance-support'>Maintenance et support</a>"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels logiciels de cabinet, ERP et intégrations existent, et quand faut-il garder l'existant ?",
            'legende' => "Les plans de comptes SYSCOHADA livrés par Odoo et Dolibarr sont documentés dans le comparatif Odoo ou Dolibarr du site ; les états financiers prêts à l'emploi y sont présentés comme une limite à vérifier. Le choix se fait au cadrage.",
            'entetes' => ['Situation du cabinet', 'Ce qui existe', 'Garder et relier, ou remplacer ?'],
            'lignes'  => [
                ["Cabinet en zone OHADA avec un logiciel de comptabilité installé et maîtrisé", "Logiciels de cabinet du marché, plan SYSCOHADA révisé et états produits", "Garder le logiciel, ajouter un portail de dépôt, des relances et une récupération automatique des relevés bancaires et des factures"],
                ["Cabinet qui tient les comptes de clients dans un tableur", "Odoo avec la localisation du pays du client ; Dolibarr pour les petites structures", "Remplacer progressivement, un client pilote d'abord, avec validation du plan de comptes avant la première écriture"],
                ["Cabinet français ou belge déjà équipé d'un logiciel de production et de liasses", "Logiciels de cabinet avec connecteurs de plateformes de facturation", "Garder, et brancher la réception des factures électroniques sur le logiciel plutôt que d'en changer"],
                ["Client PME assujetti en Afrique de l'Ouest dont les factures partent d'un outil validé par l'administration", "Logiciels de facturation validés par la DGI ; modules tiers pour Odoo", "Garder l'outil de facturation du client et exporter ses écritures vers le cabinet par un flux contrôlé"],
                ["Cabinet d'audit avec des feuilles de travail dans des classeurs partagés", "Logiciels d'audit, tableurs, scripts d'analyse de données", "Relier avant de remplacer : un script d'analyse des balances et des écritures vaut mieux qu'un nouveau progiciel"],
                ["Cabinet qui veut un espace client propre à sa marque", "Portails des éditeurs de logiciels, application web sur mesure", "Choisir le portail de l'éditeur si les besoins sont standard ; développer si les parcours sont propres au cabinet"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que peut faire l'IA dans un cabinet comptable, et que ne doit-elle jamais faire ?",
            'intro' => "L'IA prépare et propose ; l'expert-comptable, le commissaire aux comptes ou le fiscaliste décide et signe. Plus l'outil a accès aux messageries et aux dossiers de vos clients, plus la vigilance doit être grande.",
            'items' => [
                ['titre' => "Lire des factures et proposer des imputations", 'texte' => "La lecture automatique d'une facture fournisseur et la proposition d'un compte sont relues par le collaborateur avant validation. L'outil apprend les habitudes du dossier, il ne les décide pas."],
                ['titre' => "Proposer des rapprochements bancaires", 'texte' => "Les règles classiques résolvent la majorité des lignes ; l'IA suggère un rapprochement pour les libellés ambigus, avec un score visible. Le collaborateur confirme les cas douteux."],
                ['titre' => "Résumer un dossier, un courrier de l'administration ou une lettre de mission", 'texte' => "Gagner dix minutes de lecture sur un courrier long est un bon usage, à condition que le résumé cite le passage d'origine pour qu'on puisse le vérifier."],
                ['titre' => "Préparer une revue analytique", 'texte' => "Comparer les comptes de l'année à ceux de l'an dernier, faire ressortir les écarts et les rapprocher des explications du dirigeant : l'outil prépare le tableau, le collaborateur écrit la conclusion."],
                ['titre' => "Répondre aux questions simples des clients", 'texte' => "Un assistant branché sur la base de connaissances du cabinet répond aux questions de date et de pièces à fournir. Toute question d'interprétation fiscale ou comptable remonte à un humain."],
                ['titre' => "Ce qu'elle ne fait jamais : envoyer des données de client à un service non encadré", 'texte' => "Le secret professionnel interdit de coller un dossier dans un assistant public. Un contrat de sous-traitance, un hébergement connu et des données minimisées sont la condition de tout usage."],
                ['titre' => "Ce qu'elle ne fait jamais : signer, trancher, conseiller seule", 'texte' => "Une position fiscale, une opinion d'audit, une écriture de régularisation engagent la responsabilité du professionnel. L'IA n'est ni un associé ni un second signataire."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Que risque un cabinet qui colle les données d'un client dans un assistant d'IA grand public ?",
            'texte' => "En France, la révélation d'une information secrète par une personne qui la détient par profession est punie d'un an d'emprisonnement et de 15 000 euros d'amende, selon l'<a href='https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006417944'>article 226-13 du code pénal</a> ; le professionnel de l'expertise comptable y est tenu pour les comptes, la paie et les échanges de ses clients. Aucun gain de temps ne justifie de transmettre une balance, un contrat ou une paie à un service dont on ne connaît ni l'hébergement ni les conditions de réutilisation. Choisissez un outil sous contrat, minimisez les données et gardez une trace de ce que l'IA a lu.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles obligations de paiement, de facturation et de données encadrent le cabinet et ses clients ?",
            'paragraphes' => [
                "Au Bénin, la <a href='https://www.gouv.bj/article/522/'>page du gouvernement</a> reprenant les propos du directeur général des impôts rappelle qu'une facture normalisée porte, en plus des mentions classiques, le numéro d'identification de la machine, une signature et un code électronique de la DGI. Elle précise que la DGI n'impose aucun logiciel, mais que tout logiciel de facturation doit être validé avant usage. Pour un cabinet, cela signifie un contrôle à faire chez chaque client : l'outil qui produit ses factures est-il validé, et ses écritures arrivent-elles dans le dossier sans ressaisie ?",
                "La même page détaille les sanctions de la loi de finances 2020 : une amende de dix fois le montant de la facture non délivrée, avec un minimum de 1 000 000 FCFA par opération, portée à vingt fois et 2 000 000 FCFA minimum en cas de récidive, avec trois mois de fermeture administrative. Le texte date de 2020 et les règles ont pu évoluer depuis ; la situation du client se confirme auprès de la DGI avant de lancer un projet.",
                "En Côte d'Ivoire, le communiqué de la <a href='https://www.fne.dgi.gouv.ci/uploads/communiques/pdf_69793fb80d317_FIN_DE_L_USAGE_DE_LA_FACT_NOR_PHYSIQUE.pdf'>Direction générale des impôts du 27 janvier 2026</a> fixe la fin de la facture normalisée physique au 1er décembre 2025 (régimes du réel normal et simplifié), au 11 décembre 2025 (microentreprises) et au 13 février 2026 pour les contribuables de la taxe d'État de l'entreprenant. Seules les factures normalisées électroniques sont admises pour justifier les charges et déduire la TVA : un cabinet ivoirien contrôle donc que ses clients émettent bien par la plateforme de la DGI. Au Sénégal, la loi de finances pour 2025 (loi n° 2025-02 du 28 décembre 2024) prévoit, selon une synthèse d'un cabinet d'avocats, une facture électronique pour les assujettis à la TVA, émise par un portail public ou une plateforme de dématérialisation ; un arrêté du ministre des Finances en fixe les conditions. Sanctions et calendrier se confirment auprès de la DGID avant de lancer un projet.",
                "Pour les données personnelles, le cabinet traite les salaires, les identités et les comptes de ses clients. Au Bénin, la <a href='https://sgg.gouv.bj/doc/loi-2017-20/'>loi n° 2017-20 portant code du numérique</a> encadre ces traitements et leurs transferts. Au Sénégal, la loi n° 2008-12 du 25 janvier 2008, publiée par la <a href='https://www.cdp.sn/legislation/textes-legislatifs'>Commission de protection des données personnelles</a>, régit ces traitements. En Côte d'Ivoire, la loi n° 2013-450 du 19 juin 2013, rappelée par l'<a href='https://artci.ci/en/data-protection/'>ARTCI</a>, protège les données des clients ; les formalités de déclaration d'un cabinet se confirment auprès de cette autorité.",
                "En Europe, le RGPD place le cabinet en position de sous-traitant de son client pour la tenue de sa comptabilité : l'article 28, que reproduit la CNIL à partir du <a href='https://eur-lex.europa.eu/eli/reg/2016/679/oj/fra'>texte du RGPD</a>, demande un contrat qui fixe l'objet, la durée, la nature et la finalité du traitement. Dès qu'un assistant d'IA entre dans le circuit, le fournisseur de cet assistant devient lui-même sous-traitant ultérieur. Enfin, la Commission européenne rappelle dans ses <a href='https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers'>questions et réponses sur la maîtrise de l'IA</a> (mise à jour le 27 juillet 2026) que l'obligation de former au numérique les personnes qui utilisent l'IA, posée par l'article 4 du règlement, vaut depuis le 2 février 2025 et que les autorités nationales la contrôlent à partir du 3 août 2026. Un cabinet qui équipe ses collaborateurs d'un assistant d'IA l'inscrit donc à son plan de formation.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles règles retenir pays par pays avant de lancer un projet ?",
            'legende' => "Résumé des règles citées ci-dessus. Les dates et sanctions se confirment auprès de l'administration du pays concerné avant la mise en service.",
            'entetes' => ['Pays', 'Règle', 'Ce que cela change pour le cabinet'],
            'lignes'  => [
                ['Bénin', "Facture normalisée par machine certifiée ou logiciel validé par la DGI ; loi n° 2017-20 sur le numérique", "Vérifier l'outil de facturation de chaque client et le sort de ses données personnelles"],
                ["Côte d'Ivoire", "Fin de la facture normalisée physique le 1er décembre 2025 pour les régimes du réel ; loi n° 2013-450 et ARTCI", "Récupérer les factures par le flux plutôt que par la saisie ; confirmer auprès de l'ARTCI les formalités du cabinet"],
                ['Sénégal', "Facture électronique pour les assujettis à la TVA (loi n° 2025-02) ; loi n° 2008-12 et Commission de protection des données", "Suivre l'arrêté d'application et confirmer les formalités auprès de la CDP"],
                ['France', "Réception de factures électroniques dès le 1er septembre 2026, émission des PME au 1er septembre 2027 ; RGPD ; secret professionnel de l'article 226-13 du code pénal", "Brancher la réception sur le logiciel de production ; contrat de sous-traitance avec chaque client et chaque fournisseur d'IA"],
                ['Belgique', "Facture électronique structurée par Peppol entre assujettis depuis le 1er janvier 2026", "Vérifier que le logiciel du cabinet et ceux des clients envoient et reçoivent en Peppol"],
                ['Espace OHADA', "AUDCIF en vigueur depuis le 1er janvier 2018 (comptes individuels) et le 1er janvier 2019 (comptes consolidés)", "Valider avec le cabinet le plan de comptes et les états produits avant la première écriture"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble un projet dans un cabinet comptable ou d'audit ?",
            'items' => [
                ['secteur' => "Cabinet d'expertise comptable à Cotonou", 'probleme' => "Les pièces de soixante clients arrivent par WhatsApp, les relevés bancaires en photo, et les déclarations de TVA se préparent dans l'urgence le dernier jour.", 'solution' => "Un espace de dépôt par client avec la liste des pièces du mois, des relances automatiques par WhatsApp la veille de chaque échéance, et un tableau de bord par collaborateur. Le client assujetti est contrôlé sur un point : son outil de facturation est-il validé par la DGI, et ses factures normalisées arrivent-elles dans le dossier sans ressaisie ?"],
                ['secteur' => "Cabinet à Abidjan avec des clients en facture normalisée électronique", 'probleme' => "Chaque client émet ses factures depuis un outil différent, et le cabinet les ressaisit dans son logiciel.", 'solution' => "Une automatisation n8n ou Make récupère les factures par l'interface de chaque outil ou par un dossier partagé, les classe par client et les propose en écritures à valider. Les cas où le flux ne correspond pas à la pièce remontent au collaborateur."],
                ['secteur' => "Cabinet de commissariat aux comptes à Dakar", 'probleme' => "Les contrôles de cohérence sur les balances et les journaux sont refaits à la main à chaque mission.", 'solution' => "Un script d'analyse lit la balance et les écritures exportées, signale les séquences rompues, les montants ronds et les comptes inhabituels, et prépare les demandes d'information. L'auditeur examine les alertes et motive ses conclusions."],
                ['secteur' => "Cabinet à Lyon ou Lille, clients PME de services", 'probleme' => "Le cabinet découvre la réforme de la facturation électronique et craint de perdre son temps à retraiter des flux.", 'solution' => "Un état des lieux des logiciels de chaque client et du cabinet, un branchement de la réception des factures sur le logiciel de production, et une procédure de contrôle des rejets. Le calendrier suit les dates d'impots.gouv.fr."],
                ['secteur' => "Cabinet à Bruxelles ou Liège, clients assujettis à la TVA", 'probleme' => "Les clients reçoivent des factures Peppol qu'ils ne savent pas transmettre au cabinet.", 'solution' => "Un point d'entrée unique côté cabinet : un accès Peppol ou une passerelle vers le logiciel, une documentation courte à destination du client et un contrôle des factures reçues avant la déclaration de TVA."],
                ['secteur' => "Cabinet de conseil fiscal, Abidjan ou Paris", 'probleme' => "La veille sur les lois de finances et les circulaires se fait par abonnements dispersés, et les clients concernés sont prévenus trop tard.", 'solution' => "Un flux de veille classé par thème, résumé par l'IA avec renvoi au texte d'origine, et une liste des clients concernés. Le fiscaliste valide chaque note avant l'envoi : l'outil ne rédige aucune position."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment se déroule un projet dans un cabinet, du premier dossier pilote au suivi ?",
            'items' => [
                ['titre' => "Premier échange", 'duree' => 'Réponse sous 24 heures', 'texte' => "Vous décrivez la taille du cabinet, ses logiciels, le nombre de dossiers et l'étape qui coince. Richard indique d'emblée si un logiciel du marché répond au besoin ou si un développement s'impose. Seuls le premier échange et le devis sont gratuits."],
                ['titre' => "Diagnostic sur un dossier réel", 'duree' => 'Selon le projet', 'texte' => "On suit un dossier de bout en bout : réception des pièces, saisie, rapprochement, déclaration, archivage. Le diagnostic mesure où le temps passe et classe les gains par effort."],
                ['titre' => "Cadrage des règles et des données", 'duree' => 'Selon le projet', 'texte' => "Plan de comptes, pays concernés, outils de facturation des clients, données personnelles traitées, contrat de sous-traitance, hébergement des données. Les règles de secret professionnel sont posées avant tout usage de l'IA."],
                ['titre' => "Maquette puis premier palier", 'duree' => 'Selon le projet', 'texte' => "Un palier utile et limité : par exemple le portail de dépôt avec relances, ou la récupération des factures d'un client pilote. Il est testé par les collaborateurs sur de vraies pièces."],
                ['titre' => "Formation des équipes", 'duree' => 'Selon le projet', 'texte' => "Les collaborateurs apprennent sur leurs dossiers, avec un référent désigné dans le cabinet. Les usages de l'IA autorisés et interdits sont écrits dans une charte courte."],
                ['titre' => "Extension aux autres dossiers", 'duree' => 'Selon le projet', 'texte' => "Une fois le palier stabilisé, on ouvre les autres clients puis les paliers suivants : tableau de bord, assistant, analyse des écritures."],
                ['titre' => "Suivi et maintenance", 'duree' => 'Dans la durée', 'texte' => "Les règles de facturation et les logiciels évoluent. Un suivi couvre les correctifs, les adaptations de calendrier réglementaire et l'accompagnement des nouveaux collaborateurs. Cette méthode est proposée et s'ajuste à chaque cabinet."],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte un projet pour un cabinet comptable ou d'audit ?",
            'intro'      => "Le tarif de départ d'un site vitrine de cabinet est de 300 000 FCFA, soit environ 457 euros au taux de 655,957 FCFA pour un euro. Les autres prestations se chiffrent sur devis, après un premier échange gratuit. Moyens de règlement acceptés : Mobile Money (MTN, Moov), carte bancaire, PayPal, virement, espèces.",
            'items'      => [
                ['offre' => "Site vitrine de cabinet", 'prix' => "À partir de 300 000 FCFA (environ 457 euros)", 'inclus' => ["Présentation des missions et des associés", "Prise de rendez-vous et formulaire de contact", "Pages adaptées à la recherche locale", "Mentions légales et déclarations de données"]],
                ['offre' => "Portail client et collecte des pièces", 'prix' => 'Sur devis', 'inclus' => ["Espace de dépôt par client", "Liste des pièces attendues et relances", "Tableau de bord par collaborateur", "Droits d'accès par client et par rôle"]],
                ['offre' => "Automatisation et intégration", 'prix' => 'Sur devis', 'inclus' => ["Récupération des factures et des relevés", "Passerelle vers le logiciel du cabinet ou Odoo ou Dolibarr", "Alertes d'échéance", "Documentation et suivi"]],
                ['offre' => "Assistant d'IA sous contrôle", 'prix' => 'Sur devis', 'inclus' => ["Lecture des factures et revue analytique préparée", "Charte d'usage et journal des consultations", "Hébergement et contrat de sous-traitance", "Formation des équipes"]],
            ],
            'variations' => [
                "Le nombre de dossiers clients et de collaborateurs concernés.",
                "Le nombre de pays, donc de plans de comptes, de déclarations et de règles de facturation à couvrir.",
                "Le logiciel de cabinet existant et la qualité de ses exports.",
                "Les outils de facturation des clients à raccorder et leur validation par l'administration.",
                "La part d'IA : lecture de pièces, revue analytique, assistant client.",
                "L'hébergement des données et les exigences du contrat de sous-traitance.",
                "Les développements spécifiques : simulateurs, modules de suivi, tableaux de bord.",
                "La formation, le nombre de séances et de participants.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs fréquentes guettent les cabinets qui se digitalisent ?",
            'intro' => "Presque toutes se décident avant la première ligne de code.",
            'items' => [
                ['titre' => "Changer de logiciel de cabinet avant de changer la collecte", 'texte' => "Le retard vient presque toujours des pièces, pas du logiciel. Remplacer l'outil de production sans résoudre la collecte déplace le problème."],
                ['titre' => "Brancher un assistant d'IA sur les dossiers sans cadre", 'texte' => "Un cabinet qui ouvre sa messagerie à un assistant externe sans contrat ni charte met son secret professionnel en jeu. Le cadre se pose d'abord, l'outil ensuite."],
                ['titre' => "Croire qu'un module SYSCOHADA livre des états prêts", 'texte' => "Un plan de comptes n'est pas un bilan. Demandez un exercice d'essai complet, relu par votre expert-comptable, avant de promettre quoi que ce soit à un client."],
                ['titre' => "Ignorer l'outil de facturation de ses clients", 'texte' => "Au Bénin ou en Côte d'Ivoire, la facture normalisée d'un client lui appartient, mais ses écritures arrivent chez vous. Ne pas regarder son outil, c'est hériter de ses erreurs."],
                ['titre' => "Tout confier à un prestataire sans garder les accès", 'texte' => "Comptes administrateurs, dépôt de code, hébergement et clés d'API doivent être ouverts au nom du cabinet. L'histoire de la <a href='/histoires/tsb-migration'>migration de TSB</a> rappelle ce que coûte une bascule sans retour arrière."],
                ['titre' => "Laisser un assistant répondre seul aux clients", 'texte' => "Une entreprise répond de ce que dit son assistant, comme le montre l'histoire d'<a href='/histoires/air-canada-chatbot'>Air Canada</a>. Les questions d'interprétation montent à un humain."],
                ['titre' => "Former tout le monde de la même façon", 'texte' => "Le collaborateur de saisie, l'auditeur et le fiscaliste n'ont pas les mêmes besoins. Une formation par poste, sur leurs dossiers, installe les habitudes."],
                ['titre' => "Ne pas revoir le dispositif quand la règle change", 'texte' => "Calendrier français, Peppol belge, facture normalisée ivoirienne : les règles bougent. Prévoyez une revue annuelle, avec les dates à jour."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment former les équipes du cabinet ?",
            'paragraphes' => [
                "Richard a déjà formé des experts-comptables et comptables, des auditeurs et contrôleurs de gestion, et des fiscalistes. Chaque public a sa page, qui détaille le programme : <a href='/formations/metier/experts-comptables'>formation des experts-comptables</a>, <a href='/formations/metier/auditeurs-controleurs-gestion'>formation des auditeurs et contrôleurs de gestion</a> et <a href='/formations/metier/fiscalistes'>formation des fiscalistes</a>.",
                "Les fiches de formation les plus utiles à un cabinet sont <a href='/formations/ia-comptables-syscohada'>IA pour comptables (SYSCOHADA)</a>, <a href='/formations/odoo-comptabilite-syscohada'>Odoo comptabilité SYSCOHADA</a> et <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a>. La première sert les collaborateurs de saisie et de révision, la deuxième les cabinets qui tiennent des dossiers dans Odoo, la troisième les associés qui doivent cadrer l'usage.",
                "La formation vient après le projet ou avec lui : un portail ou un assistant que les collaborateurs n'utilisent pas ne change rien. Elle se fait sur vos dossiers, avec un référent interne. L'ensemble des parcours figure sur la page <a href='/formations/'>des formations</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier la digitalisation de votre cabinet à Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Dans l'expertise comptable, Richard a conduit le projet d'Impulse Finance, cabinet à Argenteuil : sortie d'un WordPress devenu ingérable sans perdre le référencement, avec suivi des demandes et simulateurs fiscaux, livrée en trois jours. Ce projet a été réalisé en sous-traitance pour Digital Développement. Il est présenté avec les autres sur la page <a href='/realisations/'>des réalisations</a>.",
                "Ce parcours compte pour un cabinet : un simulateur fiscal, un suivi de demandes ou un portail de dépôt sont des applications web, pas des gadgets. Richard les développe lui-même et sait aussi relier Odoo, Dolibarr, WhatsApp ou n8n, ce qui évite d'opposer l'outil du marché au développement sur mesure.",
                "Sa méthode : un cadrage sur un dossier réel, un palier à la fois, des accès à votre nom, des usages d'IA écrits avant d'être déployés, et une réponse sous 24 heures. Son parcours complet figure sur la page <a href='/richard-salanon'>Richard SALANON</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Vous voulez savoir par où commencer pour votre cabinet ?",
            'texte'  => "Décrivez le cabinet, ses logiciels, le nombre de dossiers et vos contraintes de facturation électronique ou de secret professionnel : une réponse arrive sous 24 heures ; un premier échange gratuit débouche sur un plan par paliers, puis sur un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon cabinet'],
        ],
    ],

    'faq' => [
        ['q' => "Un portail client est-il utile pour un petit cabinet comptable ?", 'r' => "Oui, dès que les pièces arrivent par plusieurs canaux. Un espace de dépôt avec la liste des pièces du mois et des relances automatiques réduit le temps passé à les réclamer. Pour un cabinet de quelques dossiers, un portail d'éditeur configuré proprement suffit souvent, et Richard le dit au cadrage plutôt que de proposer un développement."],
        ['q' => "Peut-on utiliser Odoo ou Dolibarr pour tenir la comptabilité des clients d'un cabinet ?", 'r' => "Les deux livrent un plan de comptes SYSCOHADA, mais le comparatif Odoo ou Dolibarr du site rappelle que les états financiers prêts à l'emploi ne sont pas documentés. Le plan de comptes et les états se valident avec l'expert-comptable sur un exercice d'essai avant la première écriture."],
        ['q' => "Que change la facture normalisée au Bénin pour un cabinet ?", 'r' => "Selon la DGI, la facture normalisée porte un numéro de machine, une signature et un code électronique, et les logiciels de facturation doivent être validés par la DGI avant usage. Le cabinet vérifie l'outil de chaque client assujetti et s'assure que ses écritures arrivent dans le dossier sans ressaisie."],
        ['q' => "Où en est la facture électronique en France pour un cabinet comptable ?", 'r' => "Selon impots.gouv.fr, toutes les entreprises doivent pouvoir recevoir des factures électroniques depuis le 1er septembre 2026 ; les grandes entreprises et les entreprises de taille intermédiaire émettent déjà, et les PME ainsi que les micro-entreprises émettront à partir du 1er septembre 2027. Le cabinet branche la réception sur son logiciel de production."],
        ['q' => "L'IA peut-elle faire la révision des comptes d'un client ?", 'r' => "Elle peut préparer : lecture des factures, propositions d'imputation, revue analytique, détection d'écarts. La conclusion, la signature et l'opinion restent au professionnel. Chaque résultat de l'outil doit renvoyer à la pièce d'origine pour pouvoir être vérifié."],
        ['q' => "L'usage d'un assistant d'IA est-il compatible avec le secret professionnel ?", 'r' => "À condition de ne transmettre aucune donnée de client à un service non encadré. En France, l'article 226-13 du code pénal punit la révélation d'un secret professionnel d'un an d'emprisonnement et de 15 000 euros d'amende. Un contrat de sous-traitance, un hébergement connu, des données minimisées et une charte écrite sont les conditions de tout usage."],
        ['q' => "Un cabinet doit-il déclarer ses traitements de données personnelles ?", 'r' => "Cela varie selon le pays du client : loi n° 2013-450 et ARTCI en Côte d'Ivoire, loi n° 2008-12 et Commission de protection des données personnelles au Sénégal, loi n° 2017-20 au Bénin, RGPD en Europe. La formalité exacte se confirme auprès de l'autorité du pays avant le premier traitement."],
        ['q' => "Que prévoit la Belgique pour les factures entre entreprises ?", 'r' => "Depuis le 1er janvier 2026, les factures entre assujettis à la TVA passent par le réseau Peppol sous forme structurée : un PDF envoyé par courriel ne suffit plus, selon le portail e-facture des autorités belges. Le SPF Finances privilégiait encore le dialogue aux amendes en août 2026."],
        ['q' => "Combien coûte la digitalisation d'un cabinet ?", 'r' => "Le site vitrine démarre à 300 000 FCFA, soit environ 457 euros. Le portail client, les automatisations, l'intégration d'un ERP et les assistants d'IA sont chiffrés sur devis, après un premier échange gratuit, selon le nombre de dossiers, de pays, de logiciels à raccorder et la part d'IA."],
        ['q' => "Richard SALANON a-t-il travaillé avec un cabinet comptable ?", 'r' => "Il a conduit le projet d'Impulse Finance, cabinet d'expertise comptable à Argenteuil : refonte, suivi des demandes et simulateurs fiscaux, livré en trois jours, réalisé en sous-traitance pour Digital Développement. Il a aussi formé des experts-comptables, des auditeurs et des fiscalistes."],
        ['q' => "Intervenez-vous hors du Bénin ?", 'r' => "Oui. Richard intervient à distance pour les cabinets de la zone OHADA comme d'Europe, et sur place au Bénin. Un cabinet situé hors d'Afrique règle par carte bancaire, PayPal ou virement."],
    ],

    'sources' => [
        ['titre' => "impots.gouv.fr, calendrier de la réforme de la facturation électronique en France", 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-07'],
        ['titre' => "Gouvernement du Bénin, les factures normalisées et les sanctions de la loi de finances 2020", 'url' => 'https://www.gouv.bj/article/522/', 'date' => '2026-10-07'],
        ['titre' => "OHADA, droit comptable : acte uniforme révisé (AUDCIF)", 'url' => 'https://www.ohada.org/en/ohada-accounting-law/', 'date' => '2026-10-07'],
        ['titre' => "SGG du Bénin, loi n° 2017-20 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => "CNIL, règlement général sur la protection des données, article 28 (sous-traitant)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4#Article28', 'date' => '2026-10-07'],
        ['titre' => "EUR-Lex, règlement (UE) 2016/679", 'url' => 'https://eur-lex.europa.eu/eli/reg/2016/679/oj/fra', 'date' => '2026-10-07'],
        ['titre' => "Commission européenne, questions et réponses sur la maîtrise de l'IA (article 4)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-07'],
        ['titre' => "Légifrance, code pénal, article 226-13 (secret professionnel)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006417944', 'date' => '2026-10-07'],
        ['titre' => "Direction générale des impôts de Côte d'Ivoire, communiqué du 27 janvier 2026 sur la fin de la facture physique", 'url' => 'https://www.fne.dgi.gouv.ci/uploads/communiques/pdf_69793fb80d317_FIN_DE_L_USAGE_DE_LA_FACT_NOR_PHYSIQUE.pdf', 'date' => '2026-10-07'],
        ['titre' => "Portail e-facture de la Belgique : qui doit facturer par voie électronique", 'url' => 'https://efacture.belgium.be/fr/article/pour-qui-la-facturation-electronique-deviendra-t-elle-obligatoire', 'date' => '2026-10-07'],
        ['titre' => "La Libre, Peppol : pas encore d'amende pour les sociétés non inscrites (3 août 2026)", 'url' => 'https://www.lalibre.be/dernieres-depeches/2026/08/03/pas-encore-damende-pour-les-societes-non-inscrites-sur-le-portail-de-facturation-peppol-4PDAF4S2BJCUNLC33AEVLND5NU/', 'date' => '2026-10-07'],
        ['titre' => "Deloitte Société d'Avocats, Sénégal : loi de finances pour 2025", 'url' => 'https://blog.avocats.deloitte.fr/senegal-les-principales-mesures-importantes-de-la-loi-de-finances-pour-2025/', 'date' => '2026-10-07'],
        ['titre' => "Commission de protection des données personnelles du Sénégal, textes législatifs", 'url' => 'https://www.cdp.sn/legislation/textes-legislatifs', 'date' => '2026-10-07'],
        ['titre' => "ARTCI, protection des données personnelles en Côte d'Ivoire", 'url' => 'https://artci.ci/en/data-protection/', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['integration-odoo', 'integration-dolibarr', 'automatisation-ia', 'integration-ia-entreprise', 'site-vitrine-professionnel', 'saas-espace-client', 'api-rest-integrations'],
        'metiers'     => ['experts-comptables', 'auditeurs-controleurs-gestion', 'fiscalistes'],
        'formations'  => ['ia-comptables-syscohada', 'odoo-comptabilite-syscohada', 'ia-ethique-conformite', 'ia-audit-controle', 'ia-processus-metier'],
        'comparatifs' => ['odoo-vs-dolibarr'],
        'histoires'   => ['tsb-migration', 'air-canada-chatbot'],
    ],

];
