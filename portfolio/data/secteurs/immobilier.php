<?php
// ============================================================
// data/secteurs/immobilier.php · Page secteur « Immobilier et gestion
// locative » (agences, promoteurs, gestionnaires de biens, syndics).
// Aucun projet client rattaché ; pas de page locale. Public « Immobilier » :
// statut F au questionnaire (Richard a déjà formé ce public).
// Faits externes relevés le 07/10/2026 (ANDF et cadastre.bj, ARCEP, CNIL,
// impots.gouv.fr, documentation Odoo 20.0, SGG du Bénin, ARTCI, CDP, Tracfin).
// Article 391 de la loi n° 2017-20 : constat d'équivalence ET autorisation
// préalable de l'Autorité avant tout transfert effectif (deux conditions).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Immobilier et gestion locative : des demandes suivies jusqu\'à la visite, des loyers encaissés et justifiés, des biens vérifiés avant la signature',
    'title'   => 'Digitalisation de l\'immobilier et IA | Richard SALANON',
    'meta'    => 'Agences, promoteurs, syndics et gestionnaires : site, WhatsApp, loyers par mobile money, quittances, vérification foncière et IA relue. Sur devis.',
    'en_bref' => 'Richard SALANON équipe les agences immobilières, les promoteurs, les gestionnaires de biens et les syndics : site d\'annonces visible sur Google, réponse aux prospects sur WhatsApp, suivi des visites et des mandats, gestion locative avec baux, quittances et relances de loyers, espace propriétaire et locataire, rédaction d\'annonces assistée par IA et relue par un humain. Le travail se fait à distance, et sur place au Bénin. Trois tarifs de départ existent (landing page, site vitrine, référencement) ; pour la gestion locative et les espaces propriétaire ou locataire, le devis suit un premier échange gratuit.',
    'publie'  => '2026-11-19',
    'maj'     => '2026-11-19',
    'univers' => 'Technique et terrain',
    'locales' => [],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Agences, promoteurs, gestionnaires de biens, syndics et propriétaires bailleurs'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation de l\'immobilier en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Le foncier béninois est devenu l\'un des chantiers numériques les plus visibles de la région. Selon <a href="https://cio-mag.com/le-benin-dematerialise-sa-gestion-fonciere-et-domaniale/">CIO Mag</a>, le cadastre national a été mis en ligne le 9 avril 2019 à l\'adresse cadastre.bj, avec une couverture initiale de 16,5 % du territoire et une priorité donnée à Cotonou ; un propriétaire y consulte le numéro de son titre, le quartier, le lot ou le plan de situation. Le site de l\'<a href="https://www.andf.bj/">Agence nationale du domaine et du foncier</a> présente en outre des services en ligne pour les attestations, les descriptions de biens et les demandes de titre.',
                'La même agence a lancé l\'e-notaire le 1er avril 2020. D\'après le <a href="https://www.gouv.bj/article/578/dematerialisation-foncier-agence-nationale-domaine-foncier-lance-plate-forme-notaire/">portail du gouvernement béninois</a>, cette plateforme réservée aux notaires permet d\'accomplir les opérations foncières depuis leur étude, sans se déplacer. Le même article indique que le délai de transfert de propriété est passé de 120 jours à 6 jours, et qu\'un titre foncier peut désormais changer de propriétaire en 72 heures. Pour une agence, la conséquence est directe : l\'acheteur peut vérifier un bien avant de payer, et attend désormais de l\'intermédiaire la même rigueur numérique.',
                'Côté paiement, le terrain est prêt. Le rapport d\'activités 2023 de l\'ARCEP, relayé par <a href="https://cio-mag.com/?p=55616">CIO Mag</a>, donne un taux de pénétration des services financiers par téléphonie mobile de 89 % au Bénin au 31 décembre 2023, contre 66 % en 2022. Un loyer qui se règle par MTN ou Moov depuis le téléphone du locataire n\'a plus rien d\'exotique ; ce qui manque souvent, c\'est l\'outil qui rattache chaque versement au bon bail et émet la quittance.',
                'En Europe, la pression vient de la réglementation. Selon <a href="https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation">impots.gouv.fr</a>, toute entreprise française doit pouvoir recevoir des factures électroniques depuis le 1er septembre 2026, et les petites et moyennes entreprises devront en émettre à partir du 1er septembre 2027. Un syndic ou un gestionnaire qui reçoit chaque semaine des factures de plombiers, d\'ascensoristes et de prestataires de nettoyage est concerné au premier chef.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus d\'une agence ou d\'un gestionnaire gagnent à être digitalisés, et à quels signes le moment est-il venu ?',
            'intro' => 'Une agence immobilière brasse des demandes, des visites, des pièces et des encaissements, souvent dans des cahiers, des tableurs et des conversations WhatsApp personnelles. Trois des signes ci-dessous suffisent à justifier un cadrage.',
            'items' => [
                ['titre' => 'Les demandes se perdent entre l\'annonce et la visite', 'texte' => 'Un prospect écrit sur WhatsApp à 22 heures, un autre appelle l\'agent déjà en visite. Sans file unique, personne ne sait qui a été rappelé, quel bien intéressait qui, ni pourquoi la visite n\'a pas eu lieu.'],
                ['titre' => 'Les annonces ne correspondent plus aux biens', 'texte' => 'Le logement est loué depuis trois semaines et l\'annonce circule encore sur trois sites et un groupe Facebook. Chaque appel inutile coûte du temps à l\'agent et de la crédibilité à l\'agence.'],
                ['titre' => 'Les mandats vivent dans un classeur', 'texte' => 'Date de fin, exclusivité, honoraires convenus, propriétaire à relancer : quand l\'échéance d\'un mandat se découvre le jour où un concurrent place le bien, le registre n\'est plus un outil de gestion.'],
                ['titre' => 'Les loyers se suivent dans un tableur et dans la tête du comptable', 'texte' => 'Un locataire paie moitié en espèces, moitié par mobile money, un autre avec deux semaines de retard. Sans imputation par bail, la reddition des comptes au propriétaire devient une enquête mensuelle.'],
                ['titre' => 'Les états des lieux se contestent', 'texte' => 'Photos sur un téléphone d\'agent parti depuis, rubriques remplies à la main, signature illisible : à la sortie du locataire, le dépôt de garantie se discute sans pièce probante.'],
                ['titre' => 'Les propriétaires appellent pour savoir où en est leur bien', 'texte' => 'Quand un bailleur doit téléphoner pour connaître l\'état des loyers, des travaux ou des visites, un espace en ligne qui répond à sa place libère l\'agence et rassure le propriétaire.'],
                ['titre' => 'Les dossiers de candidats circulent partout', 'texte' => 'Pièces d\'identité et bulletins de salaire envoyés par message, copiés dans trois téléphones, jamais effacés : le risque est celui d\'une fuite, et il retombe sur l\'agence.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Une agence qui gère quatre biens et connaît chaque locataire n\'a pas besoin d\'un logiciel de gestion locative : une fiche Google soignée et un modèle de quittance suffisent. Mieux vaut attendre que les volumes justifient l\'outil.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour une agence, un promoteur, un syndic ou un gestionnaire de biens ?',
            'legende' => 'Besoins typiques du secteur immobilier et services correspondants ; le périmètre exact de chaque service figure dans son devis.',
            'entetes' => ['Besoin typique du secteur', 'Service', 'Lien'],
            'lignes'  => [
                ['Vitrine d\'agence avec fiches de biens, filtres par quartier et formulaire de visite', 'Site vitrine professionnel', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Espace propriétaire et espace locataire : loyers, quittances, documents, demandes de travaux', 'Espace client en ligne', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Répondre aux prospects et aux locataires sur WhatsApp, avec modèles de messages et historique', 'Intégration de WhatsApp Business', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Assistant qui qualifie une demande (budget, quartier, dates) et propose un créneau de visite', 'Agent IA sur WhatsApp', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots WhatsApp</a>'],
                ['Apparaître sur Google Maps pour « agence immobilière » dans son quartier, avec des avis conformes', 'Référencement local', '<a href="/services/seo-local-google-business">SEO local et Google Business Profile</a>'],
                ['Logiciel de gestion de mandats, de baux, de loyers et de relances adapté à vos pratiques', 'Application sur mesure', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Relier le CRM, la comptabilité et la caisse au lieu de ressaisir chaque loyer', 'Intégration Odoo', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Gestion légère d\'un petit parc locatif dans un ERP libre et économe en serveur', 'Intégration Dolibarr', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Rappel automatique d\'un loyer en retard, alerte de fin de mandat, quittance envoyée au paiement', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation avec n8n et Make</a>'],
                ['Annonces rédigées avec l\'IA, relues par l\'agent, et assistant interne sur vos modèles de documents', 'Intégration de l\'IA', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Corriger, mettre à jour et sauvegarder l\'outil une fois en production', 'Maintenance et support', '<a href="/services/maintenance-support">Maintenance et support</a>'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Logiciels métier, ERP et intégrations : que garder, que relier, que remplacer ?',
            'paragraphes' => [
                'Le marché propose des logiciels spécialisés de gestion locative et de syndic, souvent conçus pour le droit français. Leur force est de connaître les régularisations de charges, les appels de fonds et les déclarations de revenus fonciers ; leur limite est qu\'ils ne savent ni encaisser par mobile money, ni émettre une quittance au format d\'un autre pays. Une agence installée à Cotonou, Abidjan ou Dakar y trouve rarement ses habitudes : loyers payés en espèces au bureau, avances de plusieurs mois, cautions remises en main propre.',
                'Les ERP généralistes couvrent une partie du chemin. L\'application Location d\'Odoo, selon la <a href="https://www.odoo.com/documentation/20.0/applications/sales/rental.html">documentation 20.0</a>, planifie des locations de biens et de services, gère les cautions, enregistre le retrait et le retour du produit et facture depuis la même commande : elle vise la location de courte durée de matériel ou d\'espaces, pas le bail d\'habitation de trois ans. L\'application Abonnements, d\'après sa <a href="https://www.odoo.com/documentation/20.0/applications/sales/subscriptions.html">documentation</a>, facture de façon récurrente et automatique avec renouvellement ; elle se prête mieux à un loyer mensuel, à condition d\'y greffer le bail, les charges et la quittance.',
                'Le choix entre Odoo et Dolibarr suit la taille du parc et l\'équipe disponible : le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> détaille les deux logiciels. Pour un gestionnaire de plusieurs centaines de lots, un module de bail et de loyers écrit sur mesure et relié à l\'ERP, ou une <a href="/services/application-web-sur-mesure">application web sur mesure</a>, évite de forcer un outil conçu pour vendre des produits à gérer des locataires.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quand garder son logiciel actuel et le relier, quand le remplacer ?',
            'legende' => 'Repères de décision pour un parc géré par une agence ou un gestionnaire ; l\'arbitrage final se fait au cadrage, sur vos chiffres.',
            'entetes' => ['Situation', 'Garder et relier', 'Remplacer'],
            'lignes'  => [
                ['Un logiciel de gestion locative que l\'équipe maîtrise, mais sans mobile money', 'Oui : un connecteur ou une automatisation rapproche chaque paiement du bon bail', 'Non, tant que le reste fonctionne'],
                ['Un tableur de loyers que seule la comptable comprend', 'Non', 'Oui : un outil avec un bail par ligne, des échéances et des quittances générées'],
                ['Une comptabilité tenue dans un logiciel agréé par le cabinet', 'Oui : exporter les écritures de loyers et de commissions chaque mois', 'Non'],
                ['Un site vitrine qui affiche encore des biens loués', 'Oui, si les fiches se mettent à jour depuis un fichier ou un outil unique', 'Oui, si chaque fiche se saisit à la main sur deux sites'],
                ['Plusieurs outils qui ne se parlent pas (CRM, loyers, caisse, site)', 'Pour les plus récents, via l\'API ou n8n', 'Pour ceux qui n\'offrent aucun export'],
                ['Un parc qui grossit de dix à cinquante lots par an', 'Pas toujours : le logiciel d\'hier atteint ses limites', 'À étudier avec un ERP ou une application sur mesure'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l\'IA dans l\'immobilier, et que ne doit-elle jamais faire ?',
            'intro' => 'L\'IA sert à gagner du temps sur ce qui se rédige, se trie et se résume. Elle ne signe rien, ne fixe aucun loyer et ne tranche aucun litige.',
            'items' => [
                ['titre' => 'Rédiger une annonce, avec relecture humaine', 'texte' => 'À partir d\'une fiche (surface, quartier, étage, état), l\'IA propose un texte attractif. L\'agent vérifie chaque donnée avant publication : une superficie gonflée ou un « vue mer » inventé engage l\'agence, pas l\'outil.'],
                ['titre' => 'Répondre aux premières questions sur WhatsApp', 'texte' => 'Disponibilité, quartier, charges comprises ou non, horaires de visite : un assistant répond avec les informations de la fiche et passe la main à un agent dès qu\'une négociation ou un cas particulier apparaît.'],
                ['titre' => 'Trier et résumer les demandes', 'texte' => 'Les dizaines de messages reçus pour un bien se ramènent à une liste de prospects qualifiés avec leur budget, leurs dates et leurs questions. L\'agent garde le choix de qui visiter.'],
                ['titre' => 'Relire un bail ou un état des lieux', 'texte' => 'L\'IA signale les champs vides et les incohérences de dates ou de montants. Elle ne remplace ni le notaire ni le juriste, et son avis ne figure jamais comme conseil juridique.'],
                ['titre' => 'Ce qu\'elle ne doit jamais faire : décider d\'un candidat', 'texte' => 'Refuser un dossier sur la base d\'un score calculé par une IA expose à une discrimination que personne ne peut expliquer. La décision d\'attribution reste humaine et motivée.'],
                ['titre' => 'Ce qu\'elle ne doit jamais recevoir : les pièces des locataires', 'texte' => 'Passeports, bulletins de salaire et relevés ne se collent pas dans un assistant public. Les données personnelles passent par un outil dont l\'hébergement et la sous-traitance sont connus du contrat.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui répond d\'une information inventée par un assistant ?',
            'texte' => 'L\'agence, toujours. Un assistant qui annonce un loyer ou une disponibilité fausse, ou promet un bien déjà loué, a des conséquences commerciales et parfois juridiques pour celle qui l\'a mis en ligne. Les assistants de l\'agence ne répondent donc qu\'à partir de fiches à jour, signalent qu\'ils sont des assistants, et renvoient vers un agent chaque fois que la question sort de leur périmètre. Le cas d\'Air Canada, détaillé dans <a href="/histoires/air-canada-chatbot">cette histoire</a>, rappelle qu\'une entreprise répond de ce que dit son chatbot.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Loyers, quittances, données des locataires, blanchiment : quelles règles pèsent sur le secteur ?',
            'paragraphes' => [
                'Au Bénin, le bail d\'habitation relève de la loi n° 2018-12 du 2 juillet 2018, publiée par le <a href="https://sgg.gouv.bj/doc/loi-2018-12/">Secrétariat général du Gouvernement</a>. Ce texte fixe le loyer annuel maximal à 8 % de la valeur réelle du logement, plafonne le cautionnement et le dépôt de garantie à trois mois de loyer (le dépôt est remboursé en fin de bail), soumet l\'agent immobilier à des conditions d\'exercice et exige un mandat écrit, inscrit sur un registre des mandats. Un outil de gestion locative béninois doit donc refuser, par construction, une garantie supérieure à trois mois, et conserver le bail et le registre des mandats à côté de chaque quittance.',
                'Le foncier suit le code foncier et domanial (loi n° 2013-01 du 14 août 2013), modifié et complété par la loi n° 2017-15 du 10 août 2017, et l\'ANDF fonctionne selon le décret n° 2015-010 du 29 janvier 2015 portant ses attributions et son organisation. Avant de promettre un terrain, un lot ou une villa, l\'agence consulte donc le <a href="https://www.andf.bj/">site de l\'ANDF</a> et cadastre.bj, et conserve la preuve de cette vérification dans le dossier du bien.',
                'En France, la quittance de loyer est une obligation sur demande : l\'article 21 de la loi du 6 juillet 1989 impose de la remettre gratuitement au locataire qui la réclame, et son envoi par voie dématérialisée suppose l\'accord exprès du locataire, comme le rappelle le <a href="https://www.legalplace.fr/guides/quittance-loyer-obligatoire/">guide LegalPlace</a>. Un espace locataire qui génère la quittance au paiement doit donc offrir le choix du support, et non l\'imposer.',
                'Le dossier du candidat est encadré en France par le décret n° 2015-1437 du 5 novembre 2015. La <a href="https://cnil.fr/fr/location-dun-bien-immobilier-quels-justificatifs">CNIL</a> rappelle que livret de famille, carte Vitale, relevés bancaires, contrat de mariage, jugement de divorce et casier judiciaire ne peuvent être exigés, avec une amende pouvant atteindre 3 000 euros, ou 15 000 euros pour une personne morale. Elle ajoute que les agences ne devraient pas conditionner une visite à des justificatifs financiers, ce qu\'un formulaire en ligne mal conçu fait pourtant sans le dire.',
                'Pour les données personnelles, le Bénin applique la loi n° 2017-20 portant code du numérique. L\'article 391, publié par le <a href="https://sgg.gouv.bj/doc/loi-2017-20/">Secrétariat général du Gouvernement</a>, encadre l\'envoi de données hors du pays par deux exigences cumulatives : un constat d\'équivalence de protection émis par l\'Autorité pour l\'État de destination, puis l\'autorisation préalable de cette même Autorité, à obtenir avant tout transfert effectif. Un logiciel de gestion installé à l\'étranger et chargé des pièces d\'identité des locataires est concerné ; des dérogations existent à l\'article 392, notamment le consentement exprès du locataire.',
                'En Côte d\'Ivoire, la protection des données relève de la loi n° 2013-450 du 19 juin 2013 ; selon la page <a href="https://artci.ci/protection-des-donnees/">protection des données de l\'ARTCI</a>, les transferts hors du pays sont soumis à des restrictions et à des garanties. Une agence qui tient un fichier de locataires, ou qui l\'héberge à l\'étranger, confirme auprès de l\'ARTCI les formalités à accomplir. Côté sénégalais, la loi n° 2008-12 du 25 janvier 2008 a institué la <a href="https://www.wipo.int/wipolex/zh/legislation/details/6229">Commission de protection des données personnelles</a>, qui veille à ce que les données soient collectées pour des finalités déterminées et sans excès. Un parc de locataires dans plusieurs pays suppose donc plusieurs régimes, à vérifier un par un.',
                'Reste la lutte contre le blanchiment, qui touche surtout les ventes. En France, d\'après <a href="https://www.economie.gouv.fr/node/3234077">Tracfin</a>, les professionnels de l\'immobilier doivent identifier leurs clients et leurs bénéficiaires effectifs, adapter leur vigilance au risque et déclarer leurs soupçons, déclaration confidentielle dont l\'existence ne se révèle pas au client. Au Bénin, la loi n° 2018-17 du 25 juillet 2018 porte sur la lutte contre le blanchiment de capitaux et le financement du terrorisme ; l\'assujettissement exact des agences immobilières et les modalités de déclaration sont à confirmer auprès de la CENTIF avant de configurer un outil de contrôle.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet immobilier selon la ville et le pays ?',
            'items' => [
                ['secteur' => 'Agence de vente et de location, Cotonou', 'probleme' => 'Les prospects écrivent sur le WhatsApp personnel des agents, les annonces restent en ligne après la signature, et un acheteur demande si le terrain est bien titré.', 'solution' => 'Un numéro WhatsApp Business unique relié à une liste de demandes, des fiches de biens qui passent en « loué » ou « vendu » d\'un seul geste sur le site et sur la fiche Google, et une case obligatoire « vérification ANDF faite, preuve jointe » avant toute promesse de vente.'],
                ['secteur' => 'Gestionnaire de loyers, Abidjan', 'probleme' => 'Cent cinquante locataires paient par mobile money, en espèces ou par virement, et le comptable rapproche chaque versement à la main en fin de mois.', 'solution' => 'Un bail par ligne avec échéances, un rapprochement des paiements mobiles par automatisation, une quittance générée au paiement, une relance par WhatsApp à J+5, et une reddition mensuelle au propriétaire exportée vers la comptabilité.'],
                ['secteur' => 'Promoteur de programmes neufs, Dakar', 'probleme' => 'Des centaines de demandes arrivent à chaque lancement, les réservations se suivent sur papier et les acquéreurs réclament l\'avancement du chantier.', 'solution' => 'Une page par programme avec plans et lots disponibles, un assistant WhatsApp qui qualifie la demande et propose une visite du bureau de vente, un espace acquéreur avec le calendrier d\'appels de fonds et des photos de chantier datées.'],
                ['secteur' => 'Syndic de copropriété, Lyon', 'probleme' => 'Les factures de prestataires arrivent par courriel dans plusieurs boîtes, les copropriétaires appellent pour un ascenseur en panne, et la réception des factures électroniques est obligatoire depuis le 1er septembre 2026.', 'solution' => 'Une boîte de réception unique pour les factures, rattachées à l\'immeuble et au fournisseur, un portail de signalement avec suivi des interventions, et une boîte de réception configurée pour recevoir des factures électroniques, obligation en vigueur depuis le 1er septembre 2026.'],
                ['secteur' => 'Agence locative, Bruxelles', 'probleme' => 'Les candidats locataires envoient pièces d\'identité et fiches de paie par messagerie, et l\'agence ne sait plus quels dossiers sont encore dans quels téléphones.', 'solution' => 'Un formulaire unique avec la liste exacte des pièces utiles, un espace sécurisé dont l\'accès est limité par rôle, une durée de conservation fixée à la clôture du dossier, puis la suppression des dossiers refusés selon la règle choisie avec l\'agence.'],
                ['secteur' => 'Cabinet de gestion de parc, Lomé', 'probleme' => 'Un propriétaire de la diaspora veut suivre ses biens depuis la France sans appeler l\'agent chaque semaine.', 'solution' => 'Un espace propriétaire en ligne : loyers encaissés, travaux en cours avec devis et photos, relevé mensuel et documents téléchargeables, avec un fuseau horaire et une langue adaptés.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet immobilier, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange gratuit', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vente, location, gestion ou syndic ; nombre de biens et de locataires ; outil du moment. Richard dit si un site et WhatsApp suffisent ou si un outil de gestion s\'impose.'],
                ['titre' => 'Diagnostic sur un bien suivi de bout en bout', 'duree' => 'Selon le projet', 'texte' => 'On suit un bien réel, de l\'annonce à la quittance de sortie : demande, visite, mandat, bail, état des lieux, loyers, travaux, restitution du dépôt. Chaque point de friction est noté avec la personne qui le vit.'],
                ['titre' => 'Cadrage des règles du pays', 'duree' => 'Selon le projet', 'texte' => 'Plafond de caution, mandat écrit, mentions du bail, durée de conservation des pièces, hébergement des données, assujettissement à la lutte contre le blanchiment : les règles de chaque pays sont fixées avec votre juriste ou votre notaire avant la première ligne de code.'],
                ['titre' => 'Premier palier : visibilité et demandes', 'duree' => 'Selon le projet', 'texte' => 'Site ou fiches de biens, fiche Google, numéro WhatsApp Business et suivi des demandes. Les agents se servent de l\'outil en situation réelle avant d\'ouvrir la suite.'],
                ['titre' => 'Deuxième palier : mandats, baux et loyers', 'duree' => 'Selon le projet', 'texte' => 'Registre des mandats, baux, échéances, rapprochement des paiements mobiles, quittances, relances. La reprise des données des locataires actuels se fait par lots, contrôlée avec vous.'],
                ['titre' => 'Espace propriétaire et automatisations', 'duree' => 'Selon le projet', 'texte' => 'Relevés mensuels, suivi des travaux, alertes de fin de mandat, de fin de bail et de retard. Chaque envoi automatique est d\'abord testé sur de faux dossiers.'],
                ['titre' => 'Formation des équipes', 'duree' => 'Selon le projet', 'texte' => 'Une séance par métier : agent commercial, gestionnaire locatif, comptable, assistante. Un référent interne prend la main sur l\'outil pour les modifications courantes.'],
                ['titre' => 'Suivi et évolution', 'duree' => 'Selon le projet', 'texte' => 'Contrôles réguliers des paiements rapprochés, des sauvegardes et des accès ; ajustements après le premier trimestre de vraie utilisation, avec les chiffres de l\'agence.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte un projet de digitalisation pour une agence ou un gestionnaire de biens ?',
            'intro'      => 'Trois tarifs de départ s\'appliquent à l\'agence ou au promoteur qui veut d\'abord être visible : la landing page à partir de 150 000 FCFA (environ 229 euros), le site vitrine à partir de 300 000 FCFA (environ 457 euros) et le référencement naturel à partir de 75 000 FCFA (environ 114 euros), au taux de 655,957 FCFA pour 1 euro. Pour la gestion des baux et des loyers, l\'espace propriétaire et les relances automatiques, aucun prix de départ n\'est publié : un devis les chiffre après un premier échange gratuit. Le règlement peut se faire par Mobile Money (MTN, Moov), carte, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Landing page d\'un programme ou d\'un bien', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Une page de présentation avec formulaire et bouton WhatsApp', 'Photos, plans et localisation', 'Texte relu par vous avant publication']],
                ['offre' => 'Site vitrine d\'agence', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Fiches de biens avec filtres', 'Formulaire de visite', 'Référencement de base et fiche Google reliée']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Optimisation des pages de biens et de quartiers', 'Suivi des demandes reçues depuis Google']],
                ['offre' => 'Gestion locative, WhatsApp, espaces propriétaire et locataire', 'prix' => 'Sur devis', 'inclus' => ['Registre des mandats, baux, loyers et quittances', 'Rapprochement des paiements mobiles', 'Assistants et automatisations', 'Formation par métier']],
            ],
            'variations' => [
                'Le nombre de biens, de lots, de locataires et de propriétaires à gérer.',
                'Le nombre de pays et de régimes de données personnelles à respecter.',
                'La reprise des données : tableur propre ou années de cahiers à ressaisir.',
                'Le rapprochement des paiements : un seul opérateur de mobile money ou plusieurs, plus espèces et virements.',
                'Les espaces en ligne : propriétaire seul, ou propriétaire, locataire et acquéreur.',
                'Les raccordements à votre comptabilité, à votre site et aux portails d\'annonces.',
                'L\'hébergement des données et la sauvegarde exigés par vos contrats.',
                'Le nombre de séances de formation et de sites à visiter au Bénin.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer un projet de digitalisation immobilière ?',
            'intro' => 'Les échecs viennent rarement de la technique. Les causes ci-dessous reviennent d\'une agence à l\'autre, et la plupart se règlent pendant le cadrage.',
            'items' => [
                ['titre' => 'Acheter un logiciel français pour un parc béninois', 'texte' => 'Sans mobile money, sans caution plafonnée selon la loi locale et sans quittance au bon format, l\'outil force à tout ressaisir à côté, et l\'équipe retourne au tableur.'],
                ['titre' => 'Laisser l\'annonce vivre sur plusieurs supports', 'texte' => 'Une fiche saisie séparément sur le site, la fiche Google et trois portails se périme à chaque modification oubliée. Une source unique de vérité pour chaque bien évite les visites inutiles.'],
                ['titre' => 'Promettre un bien sans vérifier le titre', 'texte' => 'Un lot proposé sans consultation de l\'ANDF ni du cadastre en ligne expose l\'acheteur comme l\'agence. La vérification et sa preuve entrent dans la fiche du bien, pas dans la mémoire de l\'agent.'],
                ['titre' => 'Demander trop de pièces, trop tôt', 'texte' => 'Réclamer un relevé bancaire dès la prise de rendez-vous est interdit en France et inutile ailleurs. Mieux vaut un formulaire à deux étapes : identité d\'abord, justificatifs après la visite.'],
                ['titre' => 'Garder les dossiers refusés indéfiniment', 'texte' => 'Une durée de conservation fixée et appliquée à l\'ouverture protège les candidats et l\'agence. Les copies de pièces d\'identité dans les messageries personnelles échappent à toute règle.'],
                ['titre' => 'Laisser l\'IA répondre sur des biens périmés', 'texte' => 'Un assistant branché sur une fiche vieille de trois mois promet un logement déjà loué. La fiche doit être à jour, et l\'assistant doit renvoyer vers un agent en cas de doute.'],
                ['titre' => 'Oublier l\'hébergement des données', 'texte' => 'Placer les pièces d\'identité des locataires sur un service étranger sans examiner la règle de transfert du pays est une faute de conformité, même si l\'outil est pratique.'],
                ['titre' => 'Confondre la caution et le dépôt avec un loyer', 'texte' => 'Un dépôt de garantie n\'est pas un revenu : il se suit à part, jusqu\'à la restitution, avec l\'état des lieux de sortie comme pièce justificative.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes d\'une agence ou d\'un gestionnaire ?',
            'paragraphes' => [
                'Richard a déjà formé des professionnels de l\'immobilier, et la formation fait partie de chaque projet : un outil que personne n\'utilise ne règle rien. La page <a href="/formations/metier/immobilier">formations pour l\'immobilier</a> détaille ce public : agences, agents indépendants, promoteurs, administrateurs et gestionnaires de biens.',
                'Selon les besoins, les équipes suivent la formation <a href="/formations/visibilite-google">Visibilité Google : fiche, avis, SEO local</a> pour apparaître dans leur quartier, la formation <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a> pour répondre vite et proprement aux prospects, ou la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> avant d\'utiliser un assistant sur des dossiers de locataires. Les gestionnaires qui tiennent des tableaux de loyers peuvent suivre la formation <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la digitalisation de votre agence à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Pour un professionnel de l\'immobilier, trois savoir-faire comptent : un site qui sort sur Google Maps, un assistant WhatsApp qui qualifie les demandes, et un outil de loyers qui suit le mobile money. Richard les réunit, après plus de six années dans le numérique, un cursus à EPITECH (2022) et plus de 50 projets menés à terme, dont <a href="https://wapy.pro">Wapy</a>, son assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone.',
                'Sa méthode, proposée à chaque agence : partir d\'un bien suivi de bout en bout, ouvrir les fonctions une à une, remettre les accès et un code à votre nom, des règles locales validées avec votre juriste, et une réponse sous 24 heures. Ses projets livrés se découvrent sur la page <a href="/realisations/">réalisations</a>, et son parcours sur <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez savoir par où commencer pour votre agence ou votre parc de biens ?',
            'texte'  => 'Indiquez combien de biens et de locataires vous gérez, avec quels outils et sous quelles contraintes (mobile money, titre foncier, dossiers de candidats) : Richard répond sous 24 heures, puis propose après un premier échange gratuit un plan par étapes chiffré sur devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet immobilier'],
        ],
    ],

    'faq' => [
        ['q' => 'Comment suivre les loyers payés par mobile money pour plusieurs locataires ?', 'r' => 'En attribuant à chaque bail une référence que le locataire indique à chaque versement, puis en rapprochant les paiements reçus de cette référence par une automatisation. Chaque versement est imputé au bon bail, la quittance part au paiement complet, et les retards déclenchent une relance. Les espèces et les virements s\'ajoutent à la même liste.'],
        ['q' => 'Comment éviter qu\'une annonce reste en ligne alors que le bien est loué ?', 'r' => 'En gardant une seule fiche de référence par bien, dont l\'état (disponible, sous option, loué, vendu) se modifie en un geste. Le site et la fiche Google se mettent à jour depuis cette source, et un rappel signale les annonces sans mouvement depuis longtemps.'],
        ['q' => 'Peut-on vérifier un titre foncier en ligne au Bénin ?', 'r' => 'Le cadastre national est en ligne depuis le 9 avril 2019 sur cadastre.bj, et un propriétaire y consulte le numéro de son titre, le quartier, le lot ou le plan de situation, selon CIO Mag. La consultation éclaire la décision, mais ne remplace ni le notaire ni la confirmation auprès de l\'ANDF avant une vente.'],
        ['q' => 'Quelles pièces peut-on demander à un candidat locataire en France ?', 'r' => 'Seules celles de la liste du décret n° 2015-1437 du 5 novembre 2015. La CNIL cite comme interdits le livret de famille, la carte Vitale, les relevés bancaires, le contrat de mariage, le jugement de divorce et le casier judiciaire. Un formulaire en ligne ne doit pas demander plus.'],
        ['q' => 'La quittance de loyer est-elle obligatoire ?', 'r' => 'En France, elle est remise gratuitement sur demande du locataire, selon l\'article 21 de la loi du 6 juillet 1989, et son envoi dématérialisé exige l\'accord exprès du locataire. Dans les autres pays, la règle suit le droit local, à valider avec votre juriste avant de configurer l\'envoi automatique.'],
        ['q' => 'L\'IA peut-elle rédiger mes annonces immobilières ?', 'r' => 'Oui, à partir d\'une fiche vérifiée, avec relecture par l\'agent avant publication. L\'IA ne doit jamais inventer une superficie, une vue ou un équipement : une annonce trompeuse engage l\'agence, pas l\'outil. Les données des clients ne se collent pas dans un assistant public.'],
        ['q' => 'Un assistant WhatsApp peut-il remplacer mes agents commerciaux ?', 'r' => 'Non. Il répond aux premières questions, qualifie la demande, propose un créneau de visite et transmet la conversation à un agent dès qu\'une négociation commence. La visite, le prix et la décision restent humains.'],
        ['q' => 'Les données des locataires peuvent-elles être hébergées à l\'étranger ?', 'r' => 'Au Bénin, l\'article 391 de la loi n° 2017-20 exige deux choses : que l\'Autorité ait constaté un niveau de protection équivalent dans l\'État de destination, et que le responsable du traitement ait obtenu son autorisation préalable avant tout transfert effectif. Les autres pays ont leurs règles, à vérifier au cas par cas.'],
        ['q' => 'Odoo ou Dolibarr : lequel pour un parc locatif ?', 'r' => 'Pour un petit parc, Dolibarr suffit souvent par sa légèreté ; pour un parc qui grandit, Odoo relie mieux la comptabilité, les contrats et les relances. Dans les deux cas, bail, charges et quittance demandent un paramétrage ou un module à part. Le comparatif Odoo ou Dolibarr détaille les deux logiciels.'],
        ['q' => 'Combien coûte un site d\'agence immobilière ?', 'r' => 'Le site vitrine démarre à 300 000 FCFA, soit environ 457 euros, et la landing page à 150 000 FCFA, soit environ 229 euros. Une gestion locative, un espace propriétaire ou des automatisations se chiffrent sur devis, après un premier échange gratuit.'],
        ['q' => 'Intervenez-vous en dehors du Bénin ?', 'r' => 'Oui : les échanges et le développement se font en ligne, avec des visites sur place quand le projet est au Bénin. Un gestionnaire de Bruxelles ou de Lyon règle par carte bancaire, PayPal ou virement.'],
    ],

    'sources' => [
        ['titre' => 'ANDF, Agence nationale du domaine et du foncier du Bénin (missions et services en ligne)', 'url' => 'https://www.andf.bj/', 'date' => '2026-10-07'],
        ['titre' => 'CIO Mag, le Bénin dématérialise sa gestion foncière et domaniale (cadastre en ligne le 9 avril 2019)', 'url' => 'https://cio-mag.com/le-benin-dematerialise-sa-gestion-fonciere-et-domaniale/', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, plateforme e-notaire de l\'ANDF', 'url' => 'https://www.gouv.bj/article/578/dematerialisation-foncier-agence-nationale-domaine-foncier-lance-plate-forme-notaire/', 'date' => '2026-10-07'],
        ['titre' => 'CIO Mag, taux de pénétration des services financiers par mobile au Bénin (rapport ARCEP 2023)', 'url' => 'https://cio-mag.com/?p=55616', 'date' => '2026-10-07'],
        ['titre' => 'impots.gouv.fr, calendrier de la réforme de la facturation électronique', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, location d\'un bien immobilier : justificatifs que l\'on peut demander aux candidats', 'url' => 'https://cnil.fr/fr/location-dun-bien-immobilier-quels-justificatifs', 'date' => '2026-10-07'],
        ['titre' => 'LegalPlace, quittance de loyer : obligation et article 21 de la loi du 6 juillet 1989', 'url' => 'https://www.legalplace.fr/guides/quittance-loyer-obligatoire/', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, application Location', 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/rental.html', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, application Abonnements', 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/subscriptions.html', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 391 et 392)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2018-12 du 2 juillet 2018 portant régime juridique du bail à usage d\'habitation domestique', 'url' => 'https://sgg.gouv.bj/doc/loi-2018-12/', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2015-010 du 29 janvier 2015 portant attributions, organisation et fonctionnement de l\'ANDF', 'url' => 'https://sgg.gouv.bj/doc/decret-2015-010/', 'date' => '2026-10-07'],
        ['titre' => 'ARTCI, protection des données à caractère personnel en Côte d\'Ivoire (loi n° 2013-450)', 'url' => 'https://artci.ci/protection-des-donnees/', 'date' => '2026-10-07'],
        ['titre' => 'OMPI, loi sénégalaise n° 2008-12 sur la protection des données à caractère personnel', 'url' => 'https://www.wipo.int/wipolex/zh/legislation/details/6229', 'date' => '2026-10-07'],
        ['titre' => 'Économie.gouv.fr, Tracfin et les professionnels de l\'immobilier', 'url' => 'https://www.economie.gouv.fr/node/3234077', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['site-vitrine-professionnel', 'saas-espace-client', 'integration-whatsapp', 'agents-ia-chatbot-whatsapp', 'seo-local-google-business', 'application-web-sur-mesure', 'integration-odoo', 'automatisation-ia'],
        'metiers'     => ['immobilier'],
        'formations'  => ['visibilite-google', 'whatsapp-business', 'ia-ethique-conformite', 'excel-google-sheets', 'crm-pipeline'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
        'histoires'   => ['air-canada-chatbot'],
    ],
];
