<?php
// ============================================================
// data/secteurs/banques-microfinance.php · Page secteur « Banques, microfinance
// et assurances » (vague 1E). Coeur : institutions de microfinance (SFD), banques
// et assureurs d'Afrique francophone et d'Europe. Richard ne remplace ni le coeur
// bancaire ni l'éditeur agréé : il construit autour. Faits externes relevés le
// 07/10/2026 (BCEAO, GSMA, BEAC, Commission bancaire de l'UMOA, CIMA, CNIL, SGG
// du Bénin, presse économique). Publics du questionnaire : « Banques et
// microfinance » = F, « Directeurs financiers » = F, « Assurances » = P.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Banques, microfinance et assurances : des applications, des interfaces et des assistants construits autour de votre cœur bancaire agréé, sans jamais le remplacer ni confier la décision à l\'IA',
    'title'   => 'Banques, IMF et assurances : digital et IA | Richard SALANON',
    'meta'    => 'Ouverture de compte, crédit, recouvrement, PI-SPI, mobile money, sinistres, sécurité et IA encadrée pour banques, IMF et assureurs : sur devis.',
    'en_bref' => 'Richard SALANON équipe les institutions de microfinance, les banques et les assureurs d\'Afrique francophone et d\'Europe : applications web et mobiles autour du cœur bancaire ou du logiciel d\'assurance, interfaces avec les paiements instantanés et le mobile money, automatisation des dossiers, assistants WhatsApp et IA internes encadrés. Il ne remplace pas l\'éditeur agréé : il construit à côté et relie. Chaque projet commence par un premier échange gratuit, se déroule par paliers et se chiffre sur devis. Les seuls tarifs de départ publiés concernent les sites, à partir de 300 000 FCFA pour un site vitrine.',
    'publie'  => '2026-11-05',
    'maj'     => '2026-11-05',
    'univers' => 'Chiffre et finance',
    'locales' => [],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Institutions de microfinance, banques, assureurs, courtiers et directions financières'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation des banques, de la microfinance et des assurances en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Dans l\'Union monétaire ouest-africaine, le mouvement est massif. Selon le rapport annuel 2025 de la BCEAO, le taux d\'inclusion financière de l\'Union s\'établit à 76,1 % au 31 décembre 2025, avec un objectif de 90 % de la population adulte à l\'horizon 2030, et les paiements électroniques sont passés de 260 millions à plus de 11 milliards d\'opérations entre 2014 et 2024. Les institutions de microfinance, que l\'on appelle systèmes financiers décentralisés (SFD), sont au cœur de cette hausse : elles servent des clients que les agences bancaires n\'atteignaient pas, avec des agents de terrain, des carnets et, de plus en plus, un téléphone.',
                'À l\'échelle du monde, le rapport 2026 de la GSMA sur le mobile money, tel que le relaie la presse spécialisée, compte 593 millions de comptes actifs et plus de 2 000 milliards de dollars de transactions en 2025, dont environ 1 400 milliards de dollars pour l\'Afrique subsaharienne, qui abrite 347 millions de ces comptes actifs. Pour une banque, une IMF ou un assureur, cela signifie que le téléphone du client est devenu le premier guichet, et que le portefeuille électronique est à la fois un concurrent et un partenaire.',
                'L\'interopérabilité des paiements est le grand chantier du moment. La plateforme PI-SPI de la BCEAO relie banques, établissements de monnaie électronique, établissements de paiement et institutions de microfinance, de façon instantanée et continue, dans les huit pays de l\'Union. Elle a été lancée le 30 septembre 2025 ; selon le communiqué de la BCEAO du 25 juin 2026, quatre-vingts participants y étaient connectés au 24 juin 2026 et soixante-quatorze autres institutions étaient en phase de test réel. Selon la presse financière (Financial Afrik, 1er octobre 2026), la liste publiée par la BCEAO au 30 septembre 2026 compte 175 participants autorisés à ouvrir le service au public.',
                'Le communiqué du 25 juin 2026 fixe deux échéances d\'ouverture effective des services : le 30 septembre 2026, désormais passée, pour les banques, les établissements de monnaie électronique et de paiement, et le 30 juin 2027 pour les institutions de microfinance supervisées par la Commission bancaire de l\'UMOA. Autrement dit, à la date de cette page, les SFD de l\'Union ont encore un peu moins d\'une année pour ouvrir un service effectif, et c\'est précisément le type de chantier où un développeur, un cœur bancaire et un prestataire de paiement doivent travailler ensemble. En Afrique centrale, la BEAC a pris la même direction dès 2018 avec l\'instruction n° 001/GR/2018 sur l\'interopérabilité, dont le GIMAC a tiré son écosystème GIMACPAY.',
                'En Europe, la pression vient de la résilience plutôt que du paiement. Le règlement européen 2022/2554, dit DORA, s\'applique depuis le 17 janvier 2025 aux banques, assureurs, établissements de paiement et à une vingtaine de catégories d\'entités financières : gestion du risque lié aux technologies de l\'information, notification des incidents majeurs, registre des contrats avec les prestataires technologiques. Toute entreprise qui construit un logiciel pour un assureur ou une banque française ou belge entre donc dans la chaîne de sous-traitance que ce texte encadre.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus gagnent à être digitalisés, et à quels signes sait-on que le moment est venu ?',
            'intro' => 'Dans une institution financière, la digitalisation ne commence pas par un site : elle commence par les dossiers qui circulent entre l\'agence, le siège et le client. Les situations suivantes reviennent le plus souvent ; trois d\'entre elles suffisent à justifier un premier diagnostic.',
            'items' => [
                ['titre' => 'L\'ouverture de compte et la connaissance du client se font sur papier', 'texte' => 'Photocopies de pièces d\'identité, formulaire rempli à la main, saisie au siège deux jours plus tard : le client attend, les erreurs de saisie s\'accumulent et les pièces manquantes ne sont découvertes qu\'au contrôle. Un parcours numérique pose les pièces requises dès la première étape et trace qui a vérifié quoi.'],
                ['titre' => 'Le dossier de crédit voyage de bureau en bureau', 'texte' => 'Demande, visite, analyse, comité, décaissement : chaque étape produit un document, souvent recopié dans un tableur. Quand un directeur d\'agence ne peut pas dire en une minute où en est un dossier, c\'est que le circuit n\'est pas tracé.'],
                ['titre' => 'Les agents de crédit saisissent le soir ce qu\'ils ont collecté le jour', 'texte' => 'Dans la microfinance de terrain, les remboursements encaissés en tournée sont notés sur un carnet, puis ressaisis au bureau. Les écarts de caisse apparaissent le lendemain, parfois la semaine suivante. Une application mobile qui fonctionne sans connexion règle l\'essentiel du problème.'],
                ['titre' => 'Le recouvrement dépend de la mémoire des agents', 'texte' => 'Les retards se repèrent à la lecture d\'une liste imprimée, et les relances partent quand un agent y pense. Un tableau des échéances, des rappels envoyés au bon moment et un historique des promesses de paiement raccourcissent le délai d\'encaissement.'],
                ['titre' => 'Les clients écrivent sur WhatsApp, et personne ne suit les messages', 'texte' => 'Demandes de solde, de relevé, de statut de dossier ou de sinistre arrivent sur le numéro personnel d\'un agent. Un canal officiel, avec une file de traitement et une authentification, protège le client comme l\'institution.'],
                ['titre' => 'Les déclarations réglementaires se préparent à la main', 'texte' => 'Chaque état envoyé à la BCEAO, à la COBAC ou à l\'ACPR repose sur des extractions qu\'un collaborateur compile en fin de mois. Quand deux personnes obtiennent deux totaux différents, le contrôle interne passe plus de temps à réconcilier qu\'à analyser.'],
                ['titre' => 'Les sinistres et les souscriptions traînent', 'texte' => 'Chez un assureur ou un courtier, un dossier de sinistre rassemble photos, constats, devis et pièces médicales dispersés entre messagerie et classeurs. Le délai de règlement se joue dans cette dispersion.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Si le cœur bancaire est en cours de remplacement, ou si l\'institution n\'a pas encore de responsable désigné pour les données et la sécurité, mieux vaut attendre ou commencer par un audit. Un nouvel outil posé sur un système instable n\'apporte que des surprises.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour une banque, une IMF ou un assureur ?',
            'legende' => 'Besoins typiques du secteur et services correspondants ; chaque réalisation est cadrée puis chiffrée sur devis.',
            'entetes' => ['Besoin typique', 'Ce que Richard construit', 'Service'],
            'lignes'  => [
                ['Parcours d\'ouverture de compte ou de souscription en ligne, avec dépôt des pièces', 'Portail web relié au cœur bancaire ou au logiciel d\'assurance par ses interfaces', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Collecte des remboursements et des dépôts en tournée, y compris hors connexion', 'Application Android et iOS qui synchronise avec le logiciel de l\'institution', '<a href="/services/application-mobile-android-ios">Application mobile Android et iOS</a>'],
                ['Raccordement à PI-SPI, à un opérateur de mobile money ou à GIMACPAY', 'Connecteurs vers les interfaces du participant ou du prestataire de paiement, avec rapprochement', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Questions fréquentes des clients : horaires, pièces à fournir, statut d\'un dossier', 'Assistant WhatsApp ou web avec transfert à un agent, sans accès aux opérations', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots WhatsApp</a>'],
                ['Aide aux analystes crédit, aux gestionnaires de sinistres et aux équipes conformité', 'Assistant interne qui résume et classe les pièces, la décision restant humaine', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Relances de remboursement, alertes d\'échéance, rapports mensuels', 'Scénarios n8n ou Make qui lisent les échéances et envoient les rappels', '<a href="/services/automatisation-ia">Automatisation avec l\'IA</a>'],
                ['Envoi de relevés, de rappels et de confirmations sur le canal préféré du client', 'Messages WhatsApp Business par modèles approuvés, avec consentement tracé', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Espace en ligne pour les sociétaires, les emprunteurs ou les assurés', 'Espace client avec consultation, demandes et pièces, connecté aux données de l\'institution', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Choix entre construire, acheter ou relier, avant de signer avec un éditeur', 'Étude de l\'existant, cartographie des flux, estimation et plan par paliers', '<a href="/services/audit-etude-de-projet">Audit et étude de projet</a>'],
                ['Plan de digitalisation sur deux ou trois ans pour un comité de direction', 'Priorités, budget, risques et indicateurs de suivi présentés à la direction', '<a href="/services/consultant-digitalisation">Consultant en digitalisation</a>'],
                ['Correctifs, surveillance et montée de version après la mise en service', 'Suivi des applications livrées, tests, mises à jour et assistance', '<a href="/services/maintenance-support">Maintenance et support</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Cœur bancaire, logiciel de microfinance, ERP : que garder et relier, que remplacer ?',
            'legende' => 'Repères généraux ; le choix exact se décide après l\'étude de l\'existant et se confirme auprès de l\'éditeur et de l\'autorité de tutelle.',
            'entetes' => ['Situation', 'Ce qui existe', 'Garder et relier quand', 'Remplacer quand'],
            'lignes'  => [
                ['Banque de détail', 'Cœur bancaire d\'un éditeur du marché (<a href="https://www.temenos.com/products/core-banking/">Temenos Core Banking</a> ou <a href="https://www.oracle.com/financial-services/banking/flexcube/">Oracle FLEXCUBE</a>, par exemple)', 'Le cœur tient la comptabilité, les comptes et les arrêtés : Richard construit les portails, les connecteurs et les assistants autour, par les interfaces de l\'éditeur', 'Le cœur n\'est plus maintenu par l\'éditeur ou ne peut plus recevoir les exigences réglementaires ; ce chantier relève de l\'éditeur et d\'un intégrateur agréé, pas d\'un développement sur mesure'],
                ['Institution de microfinance', 'Logiciel de SFD d\'un éditeur local ou régional, ou socle ouvert comme <a href="https://fineract.apache.org/">Apache Fineract</a> et <a href="https://mifos.org/">Mifos</a>', 'Les écritures, les échéanciers et les états réglementaires sont fiables : on ajoute l\'application de collecte mobile et les rapports', 'Le logiciel est installé sur un seul poste, sans sauvegarde, ou ne produit pas les états demandés par le régulateur'],
                ['Assureur ou courtier', 'Logiciel de gestion de contrats et de sinistres', 'Le logiciel gère primes et provisions : on ajoute le portail de déclaration, la messagerie et l\'extraction de pièces', 'Les contrats vivent dans des tableurs, ou l\'éditeur ne propose plus de mises à jour'],
                ['Comptabilité interne et achats d\'une IMF ou d\'un courtier', 'Logiciel comptable d\'entreprise ou tableurs', 'Pour la comptabilité d\'exploitation, les achats, les immobilisations et les ressources humaines du siège, Odoo ou Dolibarr peuvent suffire, après vérification du plan comptable applicable', 'Le plan comptable réglementaire de l\'institution exige un module que l\'ERP n\'offre pas : le garder dans l\'outil agréé et relier'],
                ['Paiements et mobile money', 'Interfaces d\'un opérateur, d\'un agrégateur ou de PI-SPI', 'Le prestataire fournit des interfaces documentées : on branche et on rapproche chaque paiement de son dossier', 'Aucun prestataire ne couvre le canal voulu : l\'étude compare les options avant de développer'],
                ['Tableaux de bord de direction', 'Extractions manuelles et tableurs', 'Les données sont fiables à la source : un entrepôt léger et des tableaux de bord remplacent les tableurs', 'Les données source sont incohérentes : la qualité des données précède tout tableau de bord'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l\'IA dans une banque, une IMF ou une assurance, et que ne doit-elle jamais faire ?',
            'intro' => 'L\'IA est utile quand elle prépare le travail d\'une personne qui reste responsable, et dangereuse quand elle remplace cette personne sur un acte que la loi ou le contrat lui réserve. Voici où Richard place la frontière, à confirmer avec le responsable de la conformité de chaque institution.',
            'items' => [
                ['titre' => 'Résumer un dossier de crédit ou de sinistre', 'texte' => 'L\'assistant lit les pièces déposées, en tire une synthèse et signale les pièces manquantes. L\'analyste ou le gestionnaire ouvre les pièces d\'origine, vérifie, puis décide. Chaque synthèse mentionne les documents d\'où elle vient.'],
                ['titre' => 'Répondre aux questions courantes des clients', 'texte' => 'Pièces à fournir, horaires d\'agence, étapes d\'un dossier, produits proposés : un assistant WhatsApp ou web répond à partir de documents validés par l\'institution, et passe la main à un agent dès qu\'une question touche un compte, un litige ou une réclamation.'],
                ['titre' => 'Aider l\'agent dans les procédures internes', 'texte' => 'Un assistant interne retrouve le paragraphe d\'une procédure, d\'une circulaire ou d\'un contrat-type et cite sa source. Le gain est surtout visible pour les agences éloignées, qui n\'ont pas de juriste à portée de main.'],
                ['titre' => 'Repérer des anomalies pour les contrôleurs', 'texte' => 'Une règle ou un modèle signale un écart de caisse, un remboursement inhabituel, un doublon de dossier. Le signal est une piste donnée à un contrôleur, jamais une conclusion.'],
                ['titre' => 'Ne jamais décider seule d\'un refus ou d\'un octroi', 'texte' => 'L\'article 22 du RGPD reconnaît à la personne le droit de ne pas faire l\'objet d\'une décision fondée exclusivement sur un traitement automatisé, y compris un profilage, quand elle produit des effets juridiques ou l\'affecte de manière significative. Un score peut éclairer un comité ; il ne remplace pas son avis.'],
                ['titre' => 'Ne jamais conclure sur une alerte de blanchiment', 'texte' => 'Classer une opération comme suspecte, et décider de la déclarer à la cellule nationale de renseignement financier, reste l\'acte d\'un responsable désigné. L\'IA peut préparer le dossier ; elle ne signe pas la déclaration.'],
                ['titre' => 'Ne jamais recevoir de données de clients dans un outil public', 'texte' => 'Numéros de compte, pièces d\'identité, montants de crédit ou données de santé d\'un assuré ne se collent pas dans un assistant grand public. Les assistants construits pour une institution tournent sur un environnement choisi, avec des accès par rôle et un journal des questions.'],
                ['titre' => 'Ne jamais affirmer un solde ou un statut sans authentification', 'texte' => 'Un assistant ne lit un compte qu\'après authentification du client par le canal sécurisé de l\'institution, et ne communique que ce que ce canal autorise. Avant cela, il oriente et explique.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que faire quand un modèle d\'IA évalue la solvabilité d\'une personne ?',
            'texte' => 'Le règlement européen sur l\'IA (règlement 2024/1689) classe parmi les systèmes à haut risque ceux qui évaluent la solvabilité des personnes physiques ou établissent leur score de crédit, ainsi que ceux qui servent à l\'évaluation des risques et à la tarification en assurance vie et en assurance santé. Ces systèmes appellent gestion des risques, documentation, qualité des données et contrôle humain. Le règlement (UE) 2026/1744, publié au Journal officiel le 24 juillet 2026, a reporté l\'application de ces obligations pour les systèmes de l\'annexe III au 2 décembre 2027 ; le calendrier se confirme sur le texte en vigueur avant tout projet destiné à des clients européens. Pour l\'Afrique, l\'exigence de fond est la même : un score éclaire, un humain décide, et le client peut demander pourquoi.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Paiements, données personnelles, tutelle : quelles règles encadrent un projet dans ce secteur ?',
            'legende' => 'Règles relevées le 07/10/2026 sur les sources officielles ou relayées par la presse spécialisée, indiquées dans le texte ; chaque institution confirme auprès de son autorité de tutelle avant de lancer le projet.',
            'entetes' => ['Domaine', 'Ce que dit la règle', 'Ce que cela change pour le projet'],
            'lignes'  => [
                ['Paiement instantané dans l\'UMOA', 'Le <a href="https://www.bceao.int/sites/default/files/2026-06/Communiqu%C3%A9_Prolongation_d%C3%A9lai_Connexion_%C3%A0_PI-SPI-25062026.pdf">communiqué de la BCEAO du 25 juin 2026</a> fixe l\'ouverture effective des services PI-SPI au 30 septembre 2026 pour les banques et les établissements de monnaie électronique et de paiement, et au 30 juin 2027 pour les institutions de microfinance supervisées par la Commission bancaire de l\'UMOA', 'Le raccordement se prépare avec le calendrier de l\'institution : tests, rapprochement des paiements, gestion des rejets et des litiges'],
                ['Paiement en Afrique centrale', 'Règlements de la CEMAC du 21 décembre 2016 (systèmes, moyens et incidents de paiement) et du 21 décembre 2018 (services de paiement), instruction BEAC 001/GR/2018 sur l\'interopérabilité, selon le <a href="https://www.beac.int/wp-content/uploads/2021/11/Rapport-sur-la-situation-des-services-de-paiement-%C3%A9lectronique-dans-la-CEMAC_compressed-1.pdf">rapport de la BEAC sur les services de paiement électronique</a>', 'Les connecteurs vers GIMACPAY et les émetteurs de monnaie électronique suivent ces textes ; l\'agrément du prestataire se vérifie avant de brancher'],
                ['Lutte contre le blanchiment dans l\'UMOA', 'L\'<a href="https://www.cb-umoa.org/sites/default/files/2025-08/Instruction%20n%C2%B0001-03-2025%20du%2018%20mars%2025%20portant%20modalit%C3%A9s%20de%20mise%20en%20oeuvre%20par%20les%20IF%20de%20leurs%20obligations%20en%20mati%C3%A8re%20de%20lutte%20contre%20le%20blanchiment%20de%20capitaux.pdf">instruction n° 001-03-2025 de la BCEAO</a>, publiée en 2025, précise comment les institutions financières (banques, établissements de monnaie électronique et de paiement, institutions de microfinance) organisent leur contrôle interne et leur conformité aux exigences de la loi uniforme de lutte contre le blanchiment, le financement du terrorisme et de la prolifération', 'Les parcours d\'ouverture de compte gardent la trace des pièces et des contrôles ; les alertes vont au responsable désigné, et aucun automatisme ne décide d\'une déclaration'],
                ['Assurance dans la zone CIMA', 'Le <a href="https://cima-afrique.org/wp-content/uploads/2019/07/Trait%C3%A9-CIMA.pdf">traité CIMA</a>, signé à Yaoundé le 10 juillet 1992 par quatorze gouvernements, institue une organisation autour d\'un code des assurances commun et d\'une Commission régionale de contrôle des assurances', 'Souscription et sinistres en ligne respectent le code commun ; les formulaires et les délais se calent sur lui, à confirmer auprès de l\'autorité nationale'],
                ['Données personnelles au Bénin', 'La <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> n\'autorise, en son article 391, un transfert vers un État tiers que si l\'Autorité de protection des données constate un niveau de protection équivalent et l\'a autorisé au préalable ; l\'article 392 prévoit des exceptions, dont le consentement exprès', 'Le lieu d\'hébergement des dossiers de clients se décide au cadrage ; un hébergement hors du pays se justifie par écrit'],
                ['Données personnelles en Côte d\'Ivoire et au Sénégal', 'La loi n° 2013-450 du 19 juin 2013 en Côte d\'Ivoire, relayée par la presse spécialisée sur l\'<a href="https://osiris.sn/L-ARTCI-rappelle-les-limites.html">autorité ARTCI</a>, et la <a href="https://osiris.sn/loi-no-2008-12-du-25-janvier-2008-sur-la-protection-des-donnees-a-caractere.html">loi n° 2008-12 du 25 janvier 2008</a> au Sénégal, dont l\'application relève de la Commission de protection des données personnelles', 'Déclarations ou autorisations préalables selon le traitement ; à vérifier auprès de l\'autorité du pays du client avant toute collecte'],
                ['Données personnelles au Cameroun', 'La <a href="https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026">loi n° 2024/017 du 23 décembre 2024</a> a pris effet le 23 juin 2026 ; d\'après la même source, banques et assureurs de grande taille doivent nommer un délégué à la protection des données', 'Le consentement se recueille de façon claire et révocable ; l\'institution désigne son délégué avant de lancer un nouveau traitement'],
                ['Décision automatisée en Europe', 'L\'article 22 du RGPD, présenté par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre3">CNIL</a>, ouvre le droit de ne pas faire l\'objet d\'une décision fondée exclusivement sur un traitement automatisé, avec intervention humaine possible', 'Tout score de crédit ou de tarification s\'accompagne d\'une voie de recours et d\'un agent qui peut réviser'],
                ['Résilience numérique en Europe', 'Le règlement DORA, <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32022R2554">règlement (UE) 2022/2554</a>, s\'applique depuis le 17 janvier 2025 ; l\'<a href="https://www.eiopa.europa.eu/digital-operational-resilience-act-dora_en">EIOPA</a> en présente la portée pour les assureurs : risques informatiques, incidents, registre des prestataires', 'Un développeur qui travaille pour une banque ou un assureur européen figure dans le registre de ses prestataires, avec contrat, sécurité et plan de sortie'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui contrôle quoi, et comment facturer la prestation ?',
            'paragraphes' => [
                'La tutelle varie selon le pays et le métier. Dans l\'Union ouest-africaine, la BCEAO et la Commission bancaire de l\'UMOA encadrent banques, établissements de monnaie électronique et institutions de microfinance ; en Afrique centrale, la BEAC et la COBAC jouent ce rôle ; pour l\'assurance, la CIMA et sa commission régionale de contrôle, avec les directions nationales des assurances ; en France, l\'ACPR contrôle banques et assurances. Un projet numérique qui touche un service réglementé se déclare ou s\'annonce à la tutelle concernée : Richard le rappelle dès le cadrage, mais la démarche appartient à l\'institution.',
                'Pour les paiements reçus par une institution, le choix de l\'agrégateur ou de l\'opérateur se fait après comparaison ; le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a> donne les repères pour les agrégateurs d\'Afrique de l\'Ouest. Pour une banque ou un SFD, la règle est encore plus simple : les paiements réglementés passent par un participant agréé, et le projet de Richard se branche sur ses interfaces sans jamais les contourner.',
                'La prestation de Richard se règle, selon sa fiche, par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les institutions européennes règlent plutôt par virement ou par carte, sur facture ; les conditions, les jalons et les accès sont fixés dans le devis. Une institution qui exige un contrat de sous-traitance, une clause de confidentialité ou un plan de sortie le précise dès le premier échange, et le devis en tient compte.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi peut ressembler un projet dans une IMF, une banque ou une compagnie d\'assurance ?',
            'items' => [
                ['secteur' => 'Institution de microfinance de terrain, Bénin', 'probleme' => 'Les agents de crédit notent les remboursements en tournée sur un carnet, ressaisis au bureau ; les écarts de caisse ne se voient que le lendemain.', 'solution' => 'Application mobile qui fonctionne hors connexion : liste des échéances du jour, encaissement enregistré sur place, reçu envoyé au client, synchronisation avec le logiciel de l\'IMF dès que le réseau revient. La comptabilité reste dans l\'outil agréé ; l\'application ne fait que collecter et transmettre.'],
                ['secteur' => 'Banque de détail, Sénégal', 'probleme' => 'L\'ouverture d\'un compte demande trois passages en agence et des photocopies que le siège ressaisit.', 'solution' => 'Portail de pré-ouverture : le client dépose ses pièces, le conseiller les vérifie sur un écran unique, l\'ouverture se fait dans le cœur bancaire par les interfaces de l\'éditeur. Chaque étape est journalisée pour le contrôle interne, et les paiements instantanés passent par le participant agréé de la banque.'],
                ['secteur' => 'IMF d\'Afrique centrale, Cameroun', 'probleme' => 'Les remboursements arrivent par plusieurs canaux et leur rapprochement avec les dossiers se fait à la main le lundi.', 'solution' => 'Connecteur vers l\'émetteur de monnaie électronique ou l\'écosystème GIMACPAY, selon l\'agrément du prestataire, avec rapprochement automatique des paiements reçus et liste des écarts pour le gestionnaire. Les cas ambigus ne sont jamais imputés sans validation.'],
                ['secteur' => 'Compagnie d\'assurance, Côte d\'Ivoire', 'probleme' => 'Les déclarations de sinistre arrivent par appel, par message et par agence, avec des pièces incomplètes qui retardent le règlement.', 'solution' => 'Canal WhatsApp officiel avec questions guidées, dépôt de photos et de constat, numéro de dossier remis tout de suite, puis file de traitement pour les gestionnaires. L\'assistant ne promet aucune indemnisation : il collecte et oriente, et le gestionnaire décide selon le code CIMA et le contrat.'],
                ['secteur' => 'Courtier en assurance, France', 'probleme' => 'Les relances d\'échéance et les envois de pièces se font depuis une messagerie partagée, sans historique unique.', 'solution' => 'Espace client et automatisations qui envoient les rappels, tracent les accusés et rangent les pièces par contrat. Le contrat de sous-traitance, l\'hébergement en Europe et la place du prestataire dans le registre de l\'assureur sont réglés avant la première ligne de code.'],
                ['secteur' => 'Direction financière d\'un établissement de paiement, Belgique', 'probleme' => 'La trésorerie se reconstitue chaque matin à partir de relevés de plusieurs banques saisis dans un tableur.', 'solution' => 'Collecte quotidienne des relevés, rapprochement avec les écritures, tableau de bord de trésorerie et alertes sur les écarts. Les virements restent validés dans les outils bancaires ; le projet ne détient aucun moyen de paiement.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange gratuit', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez l\'institution, son logiciel actuel, le processus qui coince et la tutelle concernée. Richard dit franchement si le besoin relève d\'un développement autour du cœur, d\'un module de l\'éditeur ou d\'un simple réglage.'],
                ['titre' => 'Diagnostic de l\'existant', 'duree' => 'Selon le projet', 'texte' => 'Cartographie du parcours réel, des logiciels, des interfaces disponibles chez l\'éditeur, des données concernées et des exigences de la tutelle. Le résultat est une note courte avec les options, les risques et un ordre de réalisation proposé.'],
                ['titre' => 'Cadrage de sécurité et de conformité', 'duree' => 'Selon le projet', 'texte' => 'Avec le responsable informatique et le responsable conformité : qui accède à quoi, où sont hébergées les données, quels journaux sont conservés, quels sous-traitants interviennent. Les choix sont écrits avant le développement.'],
                ['titre' => 'Prototype sur un seul parcours', 'duree' => 'Selon le projet', 'texte' => 'Un parcours complet est monté sur des données fictives, présenté aux agents et à la direction, puis ajusté. Les agents de terrain l\'essaient avant que le reste soit construit.'],
                ['titre' => 'Développement par paliers et recette', 'duree' => 'Selon le projet', 'texte' => 'Chaque palier est livré, testé avec les interfaces de l\'éditeur ou du prestataire de paiement, puis recetté par les utilisateurs sur des cas réels anonymisés. Les anomalies sont corrigées avant d\'ouvrir le palier suivant.'],
                ['titre' => 'Mise en service et formation', 'duree' => 'Selon le projet', 'texte' => 'Démarrage sur une agence ou un portefeuille pilote, formation des agents sur leurs propres écrans, guide court par rôle, puis extension progressive. La formation s\'appuie sur les pages métier du site.'],
                ['titre' => 'Suivi et évolutions', 'duree' => 'Après la mise en service', 'texte' => 'Surveillance, correctifs, montée de version quand l\'éditeur ou le prestataire change ses interfaces, et revue périodique des accès. Le code, la documentation et les comptes restent au nom de l\'institution.'],
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûte un projet pour une banque, une IMF ou un assureur ?',
            'intro' => 'Le prix d\'un projet financier dépend de l\'environnement bien plus que de l\'écran. Les seuls tarifs de départ publiés sur ce site concernent la landing page, le site vitrine et le référencement naturel ; tout le reste se chiffre sur devis, après le premier échange gratuit et le diagnostic. Les montants en euros sont calculés à 655,957 FCFA pour 1 €.',
            'items' => [
                ['offre' => 'Landing page pour un produit d\'épargne, de crédit ou d\'assurance', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Une page de présentation d\'une offre, avec formulaire de contact', 'Mentions légales à fournir par l\'institution', 'Pas d\'accès aux comptes ni aux données de clients']],
                ['offre' => 'Site vitrine d\'une IMF, d\'un courtier ou d\'une agence', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Présentation des services, des agences et des contacts', 'Pages légales et formulaires', 'Aucun parcours connecté au cœur bancaire']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Optimisation pour être trouvé sur des recherches locales', 'Contenu et balisage de pages existantes']],
                ['offre' => 'Application, intégration, assistant ou automatisation', 'prix' => 'Sur devis', 'inclus' => ['Portails, applications mobiles, connecteurs, assistants WhatsApp et IA internes', 'Chiffrage par palier après diagnostic', 'Paiement par Mobile Money, carte, PayPal, virement ou espèces']],
            ],
            'variations' => [
                'Le nombre de parcours et de profils d\'utilisateurs : client, agent, analyste, contrôleur, direction.',
                'La qualité des interfaces offertes par l\'éditeur du cœur bancaire ou du logiciel de microfinance, et leur coût éventuel chez lui.',
                'Le raccordement aux paiements : PI-SPI, opérateurs de mobile money, GIMACPAY, cartes, avec leurs homologations.',
                'Le niveau de sécurité exigé : authentification forte, journalisation, hébergement choisi, tests d\'intrusion.',
                'Le mode hors connexion pour les agents de terrain, qui demande une synchronisation soignée.',
                'La reprise des données de clients et de dossiers, et le nettoyage qu\'elle réclame.',
                'Le nombre de langues, d\'agences et de pays où le service est déployé.',
                'Le niveau de documentation exigé par la tutelle ou par un audit.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer un projet numérique dans une institution financière ?',
            'intro' => 'Les échecs notables du secteur viennent rarement du code. Ils viennent d\'un calendrier tenu à tout prix, d\'un périmètre flou ou d\'un prestataire laissé seul face à un système qu\'il ne connaît pas.',
            'items' => [
                ['titre' => 'Basculer tous les clients en une seule fois', 'texte' => 'L\'histoire de <a href="/histoires/tsb-migration">la migration de TSB en avril 2018</a> rappelle ce qui arrive quand une banque change de plateforme sans retour arrière possible. Une bascule par agence, par portefeuille ou par produit limite les dégâts d\'une erreur.'],
                ['titre' => 'Mettre en production sans vérifier chaque serveur', 'texte' => 'Le cas de <a href="/histoires/knight-capital">Knight Capital</a> montre qu\'un déploiement incomplet peut coûter très cher en quelques minutes. Pour une application de paiement ou de crédit, la liste de contrôle de mise en production est un livrable à part entière.'],
                ['titre' => 'Contourner le cœur bancaire ou l\'éditeur', 'texte' => 'Écrire dans la base de données de l\'éditeur, faute d\'interface, rompt le support et masque des écarts. Mieux vaut demander à l\'éditeur ses interfaces, ou le dire clairement dans l\'étude : c\'est un risque, pas un détail.'],
                ['titre' => 'Brancher un prestataire de paiement non agréé', 'texte' => 'Un connecteur qui marche en test ne prouve pas que le prestataire a l\'agrément voulu pour le pays. L\'institution vérifie l\'agrément auprès de la tutelle avant l\'intégration, pas après les premiers encaissements.'],
                ['titre' => 'Laisser un assistant répondre sur des sujets réglementés', 'texte' => 'Un assistant qui explique un taux, un délai de carence ou une exclusion de garantie engage l\'institution. Il répond à partir de textes validés, cite sa source et renvoie les cas particuliers à un agent.'],
                ['titre' => 'Oublier l\'agent de terrain', 'texte' => 'Une application conçue au siège, qui exige une connexion constante et dix écrans pour un encaissement, est abandonnée en une semaine. Les agents essaient le prototype avant que la direction en valide le périmètre.'],
                ['titre' => 'Négliger la sauvegarde et le plan de reprise', 'texte' => 'Le règlement DORA et les exigences des autorités de la zone insistent sur la résilience. Une application sans sauvegarde testée ni procédure de restauration n\'a rien à faire dans une chaîne financière.'],
                ['titre' => 'Confier les accès au seul prestataire', 'texte' => 'Comptes d\'administration, clés d\'interface, hébergement et dépôt de code se créent au nom de l\'institution. Un prestataire qui garde les clés rend chaque changement plus cher et chaque audit plus difficile.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes des banques, des IMF et des assurances ?',
            'paragraphes' => [
                'Un outil que les équipes n\'adoptent pas ne sert à rien, et un assistant IA mal utilisé crée du risque. Richard a déjà formé des équipes de la banque et de la microfinance, ainsi que des directeurs financiers ; il peut aussi former des professionnels de l\'assurance. Chaque session part des dossiers réels de l\'institution, sans données de clients, et s\'achève par des règles d\'usage que la direction valide.',
                'Pour les agences bancaires et les IMF, la page <a href="/formations/metier/banques-microfinance">formation pour les banques et la microfinance</a> décrit les sujets : vigilance, crédit, mobile money, relation client, secret et cybersécurité. Pour les compagnies, les agents et les courtiers, la page <a href="/formations/metier/assurances">formation pour les assurances</a> traite souscription, sinistres et réclamations. Pour les directions financières, la page <a href="/formations/metier/directeurs-financiers">formation pour les directeurs financiers</a> porte sur la trésorerie, les clôtures et la fraude au président.',
                'Plusieurs fiches complètent ces parcours : <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> pour les règles sur les données personnelles et le secret, <a href="/formations/cybersecurite-employes">cybersécurité pour les employés</a> pour l\'hameçonnage et les mots de passe, <a href="/formations/ia-processus-metier">IA dans les processus métier</a> pour choisir les étapes à confier à l\'IA, <a href="/formations/gouvernance-ia">gouverner l\'IA dans l\'entreprise</a> pour la charte et les rôles, et <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a> pour les comités de direction. Le <a href="/formations/">hub des formations</a> les regroupe toutes.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet de ce secteur à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Avec plus de 6 ans d\'expérience dans le numérique, une formation à EPITECH (2022) et plus de 50 projets livrés, Richard intervient auprès d\'organisations du Bénin, de Côte d\'Ivoire, du Togo, du Sénégal, du Burkina Faso, du Mali, du Niger, du Cameroun, du Tchad, du Gabon, de RD Congo, de France, de Belgique, de Suisse et du Canada. Ce parcours lui donne l\'habitude de travailler avec des équipes dispersées, des réseaux inégaux et des exigences différentes d\'un pays à l\'autre.',
                'Sa position dans le secteur financier est claire : Richard ne remplace ni le cœur bancaire ni l\'éditeur agréé, et ne le prétend pas. Il construit autour, avec les interfaces que l\'éditeur ou le prestataire de paiement met à disposition, et il le dit dès le diagnostic quand un besoin relève de l\'éditeur. Côté produits, il a lancé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à IA pour les entreprises francophones d\'Afrique, ce qui lui donne l\'expérience concrète d\'un assistant en production ; il co-fonde aussi <a href="https://audyxa.com">Audyxa</a>.',
                'Il s\'engage sur des points vérifiables : un premier échange gratuit, un diagnostic écrit, un palier livré à la fois, des accès et du code au nom de l\'institution, une réponse sous 24 heures. Pour voir ce qu\'il livre, consultez les <a href="/realisations/">réalisations</a> ; son parcours figure sur <a href="/richard-salanon">sa page personnelle</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez savoir par où commencer dans votre institution ?',
            'texte'  => 'Décrivez votre activité (banque, IMF, assurance ou courtage), votre logiciel actuel, le processus qui coince et votre autorité de tutelle : la réponse arrive sous 24 heures ; le premier échange est gratuit, et le devis suit le diagnostic, palier par palier.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard remplace-t-il notre cœur bancaire ou notre logiciel de microfinance ?', 'r' => 'Non. Un cœur bancaire est un produit d\'éditeur, agréé et suivi par la tutelle. Richard construit autour : portails, applications mobiles, connecteurs vers les paiements, assistants et automatisations, en passant par les interfaces que l\'éditeur met à disposition. Quand le besoin relève de l\'éditeur, il le dit dès le diagnostic.'],
        ['q' => 'Une IMF peut-elle se raccorder à PI-SPI avec l\'aide d\'un développeur externe ?', 'r' => 'Oui, dans le cadre fixé par la BCEAO : la banque centrale a fixé au 30 juin 2027 l\'échéance pour les institutions de microfinance. Le raccordement se fait par un participant autorisé et son éditeur ; un développeur peut préparer les connecteurs, le rapprochement des paiements et la gestion des rejets, après vérification du calendrier de l\'institution.'],
        ['q' => 'Comment encaisser les remboursements par mobile money sans perdre le suivi des dossiers ?', 'r' => 'En reliant l\'opérateur ou l\'agrégateur au logiciel de l\'institution par ses interfaces, puis en rapprochant chaque paiement reçu de son dossier. Les paiements qui ne correspondent à aucun dossier sont mis de côté pour un gestionnaire, jamais imputés au hasard. Le choix du prestataire se fait après comparaison et vérification de son agrément.'],
        ['q' => 'Un assistant WhatsApp peut-il donner le solde d\'un client ?', 'r' => 'Seulement après authentification du client par le canal sécurisé de l\'institution, et pour ce que ce canal autorise. Avant cela, l\'assistant explique les produits, les pièces à fournir et l\'état d\'un dossier selon des textes validés, puis passe la main à un agent pour tout ce qui touche un compte ou un litige.'],
        ['q' => 'L\'IA peut-elle décider d\'accorder ou de refuser un crédit ?', 'r' => 'Elle peut éclairer l\'analyse, pas décider seule. L\'article 22 du RGPD ouvre le droit de ne pas faire l\'objet d\'une décision fondée exclusivement sur un traitement automatisé, et le règlement européen sur l\'IA classe l\'évaluation de la solvabilité des personnes physiques parmi les usages à haut risque. En Afrique, la même prudence s\'impose : un humain décide, et le client peut demander pourquoi.'],
        ['q' => 'Les données de nos clients peuvent-elles être hébergées hors de notre pays ?', 'r' => 'Cela dépend de la loi du pays et de l\'autorisation de l\'autorité de protection des données. Au Bénin, l\'article 391 de la loi n° 2017-20 subordonne le transfert vers un État tiers à la constatation d\'un niveau de protection équivalent et à l\'autorisation préalable de l\'Autorité. Le lieu d\'hébergement se décide au cadrage et se justifie par écrit.'],
        ['q' => 'Comment un assureur de la zone CIMA peut-il digitaliser les sinistres ?', 'r' => 'Par un canal de déclaration guidé (WhatsApp, portail ou application) qui collecte les pièces, donne un numéro de dossier et alimente une file de traitement, sans jamais promettre une indemnisation. Le code des assurances de la CIMA et le contrat restent la référence ; le gestionnaire décide.'],
        ['q' => 'Que change DORA pour un développeur qui travaille avec une banque européenne ?', 'r' => 'Le règlement 2022/2554, applicable depuis le 17 janvier 2025, oblige banques et assureurs à tenir un registre de leurs prestataires technologiques et à encadrer ces relations par contrat. Un développeur figure donc dans cette chaîne : il prévoit sécurité, notification d\'incident et plan de sortie, et la banque en garde la maîtrise.'],
        ['q' => 'Combien coûte un projet pour une banque, une IMF ou un assureur ?', 'r' => 'Tout se chiffre sur devis, après un premier échange gratuit et un diagnostic. Les seuls tarifs de départ publiés concernent les sites : landing page à partir de 150 000 FCFA (environ 229 €), site vitrine à partir de 300 000 FCFA (environ 457 €), référencement naturel à partir de 75 000 FCFA (environ 114 €).'],
        ['q' => 'Intervenez-vous hors du Bénin, et comment travaillez-vous avec une institution réglementée ?', 'r' => 'Oui. Richard intervient à distance dans les pays de la zone et en Europe, et sur place au Bénin. Il propose de signer les contrats de sous-traitance et de confidentialité exigés, de travailler sur des données fictives ou anonymisées jusqu\'à la recette, et de laisser l\'institution propriétaire des accès, du code et de la documentation.'],
    ],

    'sources' => [
        ['titre' => 'BCEAO, communiqué du 25 juin 2026 sur le délai de connexion à PI-SPI', 'url' => 'https://www.bceao.int/sites/default/files/2026-06/Communiqu%C3%A9_Prolongation_d%C3%A9lai_Connexion_%C3%A0_PI-SPI-25062026.pdf', 'date' => '2026-10-07'],
        ['titre' => 'BCEAO, rapport annuel 2025 : inclusion financière, PI-SPI, paiements électroniques', 'url' => 'https://ns2.bceao.int/sites/default/files/2026-07/Rapport_Annuel_2025_BCEAO_vf.pdf', 'date' => '2026-10-07'],
        ['titre' => 'Financial Afrik, BCEAO : liste des 175 participants autorisés à ouvrir les services de PI-SPI au public au 30 septembre 2026', 'url' => 'https://www.financialafrik.com/2026/10/01/bceao-liste-des-175-participants-autorises-a-ouvrir-les-services-de-pi-spi-au-public-au-30-septembre-2026/', 'date' => '2026-10-07'],
        ['titre' => 'Connecting Africa, 1 400 milliards de dollars de mobile money en Afrique subsaharienne en 2025 (rapport GSMA 2026)', 'url' => 'https://www.connectingafrica.com/mobile-money/-1-4t-flowed-through-mobile-money-in-sub-saharan-africa-in-2025-gsma', 'date' => '2026-10-07'],
        ['titre' => 'BEAC, rapport sur la situation des services de paiement électronique dans la CEMAC', 'url' => 'https://www.beac.int/wp-content/uploads/2021/11/Rapport-sur-la-situation-des-services-de-paiement-%C3%A9lectronique-dans-la-CEMAC_compressed-1.pdf', 'date' => '2026-10-07'],
        ['titre' => 'Commission bancaire de l\'UMOA,instruction n° 001-03-2025 sur la conformité aux exigences de lutte contre le blanchiment', 'url' => 'https://www.cb-umoa.org/sites/default/files/2025-08/Instruction%20n%C2%B0001-03-2025%20du%2018%20mars%2025%20portant%20modalit%C3%A9s%20de%20mise%20en%20oeuvre%20par%20les%20IF%20de%20leurs%20obligations%20en%20mati%C3%A8re%20de%20lutte%20contre%20le%20blanchiment%20de%20capitaux.pdf', 'date' => '2026-10-07'],
        ['titre' => 'CIMA, traité instituant une organisation intégrée de l\'industrie des assurances', 'url' => 'https://cima-afrique.org/wp-content/uploads/2019/07/Trait%C3%A9-CIMA.pdf', 'date' => '2026-10-07'],
        ['titre' => 'SGG du Bénin, texte de la loi n° 2017-20, code du numérique : transferts de données, articles 391 et 392', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'Osiris, l\'ARTCI rappelle les limites de la protection des données en Côte d\'Ivoire (loi n° 2013-450)', 'url' => 'https://osiris.sn/L-ARTCI-rappelle-les-limites.html', 'date' => '2026-10-07'],
        ['titre' => 'Osiris, loi sénégalaise n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel', 'url' => 'https://osiris.sn/loi-no-2008-12-du-25-janvier-2008-sur-la-protection-des-donnees-a-caractere.html', 'date' => '2026-10-07'],
        ['titre' => 'DroitMediasFinance, entrée en vigueur au Cameroun de la loi 2024/017 sur les données personnelles', 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, texte du RGPD, chapitre III : droits des personnes et article 22', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre3', 'date' => '2026-10-07'],
        ['titre' => 'EUR-Lex, règlement (UE) 2022/2554 sur la résilience opérationnelle numérique (DORA)', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32022R2554', 'date' => '2026-10-07'],
        ['titre' => 'EIOPA, Digital Operational Resilience Act (DORA)', 'url' => 'https://www.eiopa.europa.eu/digital-operational-resilience-act-dora_en', 'date' => '2026-10-07'],
        ['titre' => 'EUR-Lex, règlement (UE) 2024/1689 sur l\'intelligence artificielle, annexe III', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32024R1689', 'date' => '2026-10-07'],
        ['titre' => 'EUR-Lex, règlement (UE) 2026/1744 (omnibus numérique sur l\'IA) : report des obligations pour les systèmes à haut risque', 'url' => 'https://eur-lex.europa.eu/eli/reg/2026/1744/oj', 'date' => '2026-10-07'],
        ['titre' => 'Temenos, Core Banking', 'url' => 'https://www.temenos.com/products/core-banking/', 'date' => '2026-10-07'],
        ['titre' => 'Oracle, FLEXCUBE for Core Banking', 'url' => 'https://www.oracle.com/financial-services/banking/flexcube/', 'date' => '2026-10-07'],
        ['titre' => 'Apache Fineract, logiciel libre de cœur bancaire', 'url' => 'https://fineract.apache.org/', 'date' => '2026-10-07'],
        ['titre' => 'Mifos Initiative, plateforme libre pour l\'inclusion financière', 'url' => 'https://mifos.org/', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['application-web-sur-mesure', 'application-mobile-android-ios', 'api-rest-integrations', 'agents-ia-chatbot-whatsapp', 'integration-ia-entreprise', 'audit-etude-de-projet', 'automatisation-ia', 'integration-whatsapp'],
        'metiers'     => ['banques-microfinance', 'assurances', 'directeurs-financiers'],
        'formations'  => ['ia-ethique-conformite', 'cybersecurite-employes', 'gouvernance-ia', 'ia-processus-metier', 'ia-generative-dirigeants', 'chatbot-whatsapp'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
        'histoires'   => ['tsb-migration', 'knight-capital'],
    ],

];
