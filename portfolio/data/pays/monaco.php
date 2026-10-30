<?php
// ============================================================
// data/pays/monaco.php · Page pays « Monaco » (vague 1D).
// Richard accompagne les entreprises de Monaco à distance.
// Faits relevés le 2026-10-06 : APDP (loi n° 1.565 du 3 décembre 2024),
// MonEntreprise (gouv.mc : TVA, factures, fiscalité, aide aux formations),
// IMSEE (population, emploi, PIB, indicateurs sectoriels), DataReportal (Digital 2026), Monaco Cloud, DGFiP (calendrier de la
// facturation électronique), Wikipédia (identité, SEPA).
// Clés de fiche absentes : mobile_money, operateurs, agregateurs (pas de
// mobile money à Monaco), ohada (hors OHADA), ecommerce (texte non confirmé).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Sites, applications, ERP et IA pour les entreprises de Monaco : devis en euros, TVA au taux français et données traitées selon la loi n° 1.565',
    'title'   => 'Développeur web à Monaco, devis en euros | Richard SALANON',
    'meta'    => 'Sites, boutiques, Odoo, Dolibarr, automatisation et IA pour les entreprises de Monaco : loi n° 1.565, APDP, TVA française, devis en euros sur demande.',
    'en_bref' => 'Richard SALANON peut accompagner à distance les entreprises de la Principauté : site et boutique en ligne, application sur mesure, Odoo ou Dolibarr, automatisation, WhatsApp et IA. Les projets tiennent compte de la loi n° 1.565 sur les données personnelles, de l’APDP et de la TVA perçue aux taux français. Les échanges se font en français depuis Cotonou, et le devis, établi après cadrage, est exprimé en euros. Le premier retour suit dans la journée ouvrée.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale'  => ['v' => 'Monaco, cité-État formée d’une seule commune', 'source' => 'https://fr.wikipedia.org/wiki/Monaco', 'date' => '2026-10-06'],
        'villes'    => ['v' => ['Monte-Carlo', 'La Condamine', 'Fontvieille', 'Monaco-Ville', 'Larvotto'], 'source' => 'https://fr.wikipedia.org/wiki/Monaco', 'date' => '2026-10-06'],
        'fuseau'    => ['v' => 'UTC+1 l’hiver, UTC+2 l’été : même heure que Cotonou en hiver, une heure d’avance en été', 'source' => 'https://data.iana.org/time-zones/tzdb/europe', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+377', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues'   => ['v' => ['Français (langue officielle)', 'Monégasque (dialecte ligurien, langue autochtone)'], 'source' => 'https://fr.wikipedia.org/wiki/Monaco', 'date' => '2026-10-06'],
        'population' => ['v' => '38 857 résidents au recensement de 2025 ; 65 117 salariés en 2025', 'source' => 'https://imsee.mc/', 'date' => '2026-10-06'],
        'internet'  => ['v' => '37,9 mille internautes fin 2025, soit 99,0 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-monaco', 'date' => '2026-10-06'],
        'mobile'    => ['v' => '39,9 mille connexions mobiles fin 2025, soit 104 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-monaco', 'date' => '2026-10-06'],
        'secteurs'  => ['v' => ['Activités financières et d’assurance', 'Hébergement et restauration', 'Économie maritime et yachting', 'Activités immobilières'], 'source' => 'https://imsee.mc/', 'date' => '2026-10-06'],
        'devise'    => ['v' => 'Euro (EUR), monnaie officielle de Monaco en vertu d’une convention monétaire conclue avec l’Union européenne', 'source' => 'https://eur-lex.europa.eu/FR/legal-content/summary/agreements-on-monetary-relations-monaco-san-marino-the-vatican-and-andorra.html', 'date' => '2026-10-06'],
        'donnees'   => ['v' => 'Loi n° 1.565 du 3 décembre 2024, qui remplace la loi n° 1.165 du 23 décembre 1993 sur les informations nominatives', 'source' => 'https://www.apdp.mc/faq', 'date' => '2026-10-06'],
        'autorite'  => ['v' => 'APDP (Autorité de protection des données personnelles), qui succède à la CCIN', 'source' => 'https://www.apdp.mc/faq', 'date' => '2026-10-06'],
        'facturation' => ['v' => 'Facture électronique admise avec l’accord du destinataire et une signature électronique ; mentions fixées par le Code des taxes sur le chiffre d’affaires', 'source' => 'https://monentreprise.gouv.mc/Thematiques/Obligations-legales-et-Fiscalite/Obligations-legales-et-comptables/Factures/Factures-Mentions-obligatoires', 'date' => '2026-10-06'],
        'tva'       => ['v' => 'Mêmes bases et mêmes taux qu’en France : 20 % au taux normal, 10 % au taux réduit, 5,5 % pour les produits de première nécessité', 'source' => 'https://monentreprise.gouv.mc/Thematiques/Obligations-legales-et-Fiscalite/Fiscalite/La-Taxe-sur-la-valeur-ajoutee-TVA/TVA', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Aide du Gouvernement aux formations organisées par des groupements professionnels, sur une partie des coûts hors taxes ; demande au Département des Finances et de l’Économie', 'source' => 'https://monentreprise.gouv.mc/Thematiques/Emploi/Aides/Aide-aux-employeurs/Demander-une-aide-aux-formations', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun l’hiver, une heure l’été'],
        ['l' => 'Devis', 'v' => 'Sur devis, en euros'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est le numérique à Monaco, et qu’est-ce que cela change pour un projet ?',
            'paragraphes' => [
                'L’<a href="https://imsee.mc/">IMSEE</a>, l’institut de statistique de la Principauté, comptait 38 857 résidents au recensement de 2025 et 65 117 salariés la même année, pour un produit intérieur brut de 10 279 millions d’euros en 2024. Le rapport <a href="https://datareportal.com/reports/digital-2026-monaco">Digital 2026 de DataReportal</a> recense 37,9 mille internautes fin 2025, soit 99,0 % de la population, et 39,9 mille connexions mobiles, soit 104 %. Le public est donc entièrement connecté, et il se compose de très peu de personnes.',
                'Cette étroitesse est la première donnée d’un projet monégasque. Aucun site ne se jugera au volume de visites : un groupe hôtelier, une société de courtage de yachts ou un cabinet de gestion de patrimoine cherche des demandes rares, de grande valeur, qui arrivent de l’étranger autant que de la Principauté. Les 65 117 salariés sont près de 1,7 fois plus nombreux que les 38 857 résidents : une partie des employés vient travailler de l’extérieur de la Principauté, ce qui élargit l’audience bien au-delà du recensement.',
                'Le deuxième fait tient au cadre juridique. Monaco n’appartient pas à l’Union européenne, mais le pays utilise l’euro, partage une union douanière avec la France depuis la convention du 18 mai 1963 et applique la TVA aux taux français. Un projet web y croise donc trois régimes à la fois : le droit monégasque pour les données, le droit fiscal français pour la TVA, et le droit européen dès que des clients de l’Union consultent le site.',
                'Le troisième fait est l’attente de souveraineté. L’État a fait du cloud un objet de politique publique avec Monaco Cloud, né du programme Extended Monaco, dont les services sont qualifiés par l’Agence monégasque de sécurité numérique. Pour un client qui manie des données patrimoniales ou des dossiers de clients de yachts, la question « où est hébergé le serveur ? » se pose avant même celle du prix.',
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels sont les faits à connaître avant de lancer un projet numérique à Monaco ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels moyens de paiement intégrer sur un site ou une application monégasque ?',
            'paragraphes' => [
                'À Monaco, le paiement se fait en euros, par carte bancaire et par virement. D’après la page sur l’<a href="https://en.wikipedia.org/wiki/Single_Euro_Payments_Area">espace unique de paiement en euros</a>, la Principauté fait partie des quatre micro-États couverts par le SEPA avec Andorre, Saint-Marin et le Vatican. Un client monégasque peut donc régler un prestataire de l’Union par virement SEPA, en euros et avec un IBAN.',
                'Sur un site, la carte reste le geste naturel du visiteur. Le choix du prestataire de paiement se fait au cadrage, avec l’entreprise et sa banque. Richard intègre l’interface du prestataire retenu par l’entreprise, et les numéros de carte restent chez le prestataire.',
                'Pour les clients professionnels, le virement avec référence reste le moyen le plus courant. Un paiement en plusieurs échéances, sur un chantier de rénovation de résidence ou un projet événementiel, s’appuie sur des factures d’acompte, puis sur un rapprochement automatique des relevés dans l’ERP. C’est l’un des usages où Odoo ou Dolibarr rendent le plus de service : le comptable voit à chaque instant ce qui est encaissé et ce qui reste dû.',
                'Pour une clientèle internationale, l’interface propose le montant en euros et, si l’entreprise le souhaite, un second affichage dans la devise du visiteur à titre indicatif. Le débit se fait en euros. Une facture peut être libellée dans une autre monnaie, mais la taxe à payer se détermine en euros par le mécanisme de conversion de l’article 35 du Code des taxes sur le chiffre d’affaires, ce qui s’étudie avec le comptable avant toute mise en ligne.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique à Monaco ?',
            'paragraphes' => [
                'Depuis la loi n° 1.565 du 3 décembre 2024, la protection des données à Monaco suit une logique proche du RGPD. L’<a href="https://www.apdp.mc/faq">APDP</a> explique que le texte remplace la loi n° 1.165 du 23 décembre 1993 et que l’Autorité de protection des données personnelles succède à la Commission de contrôle des informations nominatives, la CCIN. Les informations nominatives deviennent des données personnelles, et le responsable du traitement doit pouvoir démontrer lui-même sa conformité.',
                'Cette responsabilisation supprime un grand nombre de formalités préalables : la page des <a href="https://www.apdp.mc/professionnels/connaitre-vos-obligations">obligations des professionnels</a> le dit expressément. En échange, l’entreprise tient un registre des traitements dès 50 salariés, ou plus tôt si le traitement n’est pas occasionnel, désigne un délégué à la protection des données dans les cas prévus, analyse les risques et prévoit la protection des données dès la conception et par défaut. Un site ou une application développés pour Monaco intègrent ces points dès la première maquette.',
                'Selon la page des <a href="https://www.apdp.mc/professionnels/connaitre-vos-obligations">obligations des professionnels</a>, les violations de données susceptibles d’engendrer un risque sont à notifier à l’APDP dans les meilleurs délais et, si possible, dans les soixante-douze heures après en avoir pris connaissance. Le manquement à l’obligation de nommer un représentant, de tenir un registre ou de désigner un délégué est puni, selon sa foire aux questions, d’une amende administrative qui peut atteindre 5 000 000 euros ou, pour une entreprise, 2 % du chiffre d’affaires annuel mondial.',
                'Le texte s’applique aussi à un responsable de traitement établi hors de Monaco qui propose ses services à des personnes de la Principauté : il doit nommer un représentant à Monaco ou, à défaut, dans un État membre de l’Union européenne. Une boutique en ligne installée en France qui vend à des Monégasques est donc concernée, ce que beaucoup d’éditeurs ignorent.',
                'Pour les transferts hors de la Principauté, le registre mentionne le pays destinataire et les garanties retenues. Le transfert vers un État qui n’assure pas un niveau de protection adéquat exige l’autorisation de l’APDP lorsque aucune garantie appropriée n’est en place, qu’aucune dérogation de l’article 99 ne joue et que les quatre conditions de cet article ne sont pas réunies. Un code de conduite approuvé ou une certification comptent parmi les garanties appropriées.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que prévoir pour la TVA et la facturation électronique à Monaco ?',
            'paragraphes' => [
                'La page de <a href="https://monentreprise.gouv.mc/Thematiques/Obligations-legales-et-Fiscalite/Fiscalite/La-Taxe-sur-la-valeur-ajoutee-TVA/TVA">MonEntreprise sur la TVA</a> indique que la taxe est perçue sur les mêmes bases et aux mêmes taux qu’en France : 20 % au taux normal, 10 % au taux réduit, 5,5 % pour les produits de première nécessité. La Principauté est incorporée au territoire douanier européen, bien qu’elle demeure un État tiers. Une facture monégasque porte donc le numéro individuel de TVA intracommunautaire de l’assujetti, comme le prévoit le Code des taxes sur le chiffre d’affaires.',
                'La Direction des Services Fiscaux gère un téléservice, l’<a href="https://monentreprise.gouv.mc/en/themes/tax/tax/statements/how-to-register-for-e-vat">e-TVA</a>, pour déclarer et payer la taxe en ligne. Un module de facturation intégré à un site ou à un ERP doit connaître ces taux et savoir ajouter les mentions d’exonération, par exemple « exonération de TVA, article 31, I, du Code des Taxes » pour une livraison intracommunautaire, ou « TVA non applicable, article 87 du Code des Taxes » pour une franchise en base.',
                'La page <a href="https://monentreprise.gouv.mc/Thematiques/Obligations-legales-et-Fiscalite/Obligations-legales-et-comptables/Factures/Factures-Mentions-obligatoires">Factures</a> du même portail précise que les montants peuvent être libellés en toute monnaie, à condition que la taxe soit déterminée en euros, que la Direction peut exiger une traduction en français d’une facture rédigée en langue étrangère, et que l’envoi par voie électronique est possible avec l’acceptation du destinataire et une signature électronique garantissant l’origine et l’intégrité.',
                'Côté français, la direction générale des Finances publiques indique dans sa <a href="https://www.impots.gouv.fr/sites/default/files/media/1_metier/2_professionnel/EV/2_gestion/290_facturation_electronique/faq_tout_savoir_facturation-electronique.pdf">foire aux questions</a> que, depuis le 1er septembre 2026, toutes les entreprises doivent pouvoir recevoir des factures électroniques et que les grandes entreprises, les entreprises de taille intermédiaire et les administrations les émettent par cette voie ; l’obligation d’émission s’étend au plus tard au 1er septembre 2027 aux moyennes, petites et très petites entreprises. Le portail monégasque ne publie pas de calendrier propre : le cas d’une entreprise de Monaco qui facture un client français se confirme auprès de la Direction des Services Fiscaux.',
                'Reste la question de la signature. Le portail présente des <a href="https://monentreprise.gouv.mc/en/themes/digital/electronic-signatures-and-stamp-certificates/electronic-signature-and-stamp-certificates-for-business">certificats de signature et de cachet électronique</a> délivrés aux entreprises par la Direction de l’Expansion Économique, avec la même valeur juridique qu’une signature manuscrite. Un outil de facturation peut être prévu pour s’y raccorder, ce qui distingue l’envoi électronique d’un simple PDF envoyé par courriel.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services numériques pour les entreprises monégasques, selon leur besoin ?',
            'legende' => 'Besoins fréquents dans la Principauté et service correspondant ; le détail figure dans chaque page de service, le prix dans le devis établi après cadrage.',
            'entetes' => ['Besoin typique à Monaco', 'Service', 'Page'],
            'lignes'  => [
                ['Un site bilingue français et anglais pour un hôtel, un restaurant ou un club, avec réservation directe', 'Réservation en ligne', '<a href="/services/systeme-de-reservation-en-ligne">Système de réservation en ligne</a>'],
                ['Une vitrine sobre pour un cabinet de gestion de patrimoine ou de conseil', 'Site vitrine', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Une page de lancement pour un événement, un gala ou un salon', 'Landing page', '<a href="/services/landing-page-haute-conversion">Landing page à forte conversion</a>'],
                ['Un portail où les clients d’un cabinet déposent leurs pièces et suivent leur dossier', 'Espace client', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Facturer en euros avec les mentions de TVA du Code des taxes, sans ressaisie', 'ERP', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Un outil de gestion léger pour une petite structure ou un artisan', 'ERP léger', '<a href="/services/integration-dolibarr">Intégration Dolibarr</a>'],
                ['Relier le site, l’agenda des bateaux et la facturation d’un courtier ou d’un chantier', 'API et intégrations', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Répondre aux demandes de devis ou de disponibilités à toute heure, dans plusieurs langues', 'Agent IA', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbots</a>'],
                ['Se faire trouver par des clients qui cherchent depuis l’étranger', 'Référencement', '<a href="/services/referencement-naturel-seo">Référencement naturel</a>'],
                ['Mettre à jour un site sans interrompre le service, corriger et sécuriser', 'Maintenance', '<a href="/services/maintenance-support">Maintenance et support</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique dans les secteurs porteurs de Monaco ?',
            'items' => [
                ['secteur' => 'Banque et gestion de fortune', 'probleme' => 'Un cabinet échange avec ses clients par courriel, avec des pièces d’identité et des relevés qui voyagent en pièces jointes, alors que la loi n° 1.565 impose sécurité et protection des données dès la conception.', 'solution' => 'Un espace client à accès nominatif où chaque dépôt est journalisé, hébergé sur un cloud dont la juridiction est choisie avec la conformité du cabinet, avec registre des traitements et circuit de notification des violations préparés.'],
                ['secteur' => 'Hôtellerie de luxe', 'probleme' => 'Un établissement reçoit ses demandes de séjour par courriel, téléphone et plateformes de réservation, dans plusieurs langues, et perd les demandes qui arrivent la nuit depuis un autre fuseau horaire.', 'solution' => 'Un site multilingue avec formulaire de demande et réservation directe, relié au logiciel de gestion de l’hôtel, plus un assistant qui accuse réception en quelques secondes et transmet la demande à l’équipe de la conciergerie.'],
                ['secteur' => 'Yachting', 'probleme' => 'Un courtier ou une société de gestion de bateaux suit ses annonces, ses contrats d’affrètement et ses interventions de maintenance dans plusieurs fichiers, que personne ne tient à jour de la même façon.', 'solution' => 'Une application web où chaque bateau a sa fiche, son calendrier d’affrètement, ses devis fournisseurs et ses factures, avec export vers l’ERP et envoi automatique des documents au propriétaire.'],
                ['secteur' => 'Événementiel', 'probleme' => 'L’organisation d’un gala, d’un salon ou d’un grand événement sportif suppose des listes d’invités, des accréditations et des prestataires qui changent jusqu’à la dernière semaine.', 'solution' => 'Une page de lancement avec inscription, une base d’invités partagée entre l’équipe et les prestataires, des rappels automatiques et un tableau de bord de présence le jour de l’événement.'],
                ['secteur' => 'Immobilier et services aux résidents', 'probleme' => 'Une agence ou un syndic répond aux mêmes questions de locataires et de copropriétaires et transmet des demandes d’intervention par téléphone.', 'solution' => 'Un portail de signalement avec suivi de l’intervention, des modèles de courrier générés depuis l’ERP et un assistant WhatsApp qui oriente les demandes simples.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes monégasques, et qui peut aider à financer la formation ?',
            'paragraphes' => [
                'Richard forme à distance, en visioconférence, par petits groupes ou en tête-à-tête, en français. Le format convient à une structure où l’on ne peut pas immobiliser une équipe entière : une session d’une demi-journée sur Excel, sur l’outil de réservation ou sur l’IA générative, répétée à deux horaires, couvre le personnel d’un hôtel ou d’un cabinet.',
                'Six fiches du catalogue conviennent aux équipes monégasques. L’IA au quotidien se travaille avec <a href="/formations/ia-en-entreprise">l’IA en entreprise</a> ; la décision et le budget, avec <a href="/formations/ia-generative-dirigeants">l’IA générative pour dirigeants</a> ; le cadre de la loi n° 1.565, avec <a href="/formations/ia-ethique-conformite">éthique et conformité de l’IA</a> ; l’outil de gestion, avec <a href="/formations/odoo-utilisateurs">Odoo pour les utilisateurs</a> ; les tableaux, avec <a href="/formations/excel-google-sheets">Excel et Google Sheets</a> ; la prudence face au hameçonnage, avec <a href="/formations/cybersecurite-employes">la cybersécurité pour les employés</a>.',
                'Du côté du financement, le portail <a href="https://monentreprise.gouv.mc/Thematiques/Emploi/Aides/Aide-aux-employeurs/Demander-une-aide-aux-formations">MonEntreprise</a> explique que le Gouvernement participe à certaines formations à l’initiative de groupements de professionnels, comme la Fédération Patronale Monégasque ou l’Association des Industries Hôtelières Monégasques, en prenant en charge une partie des coûts hors taxes des stages. Ces formations doivent intéresser un nombre significatif d’entreprises et peuvent être généralistes, par exemple en langues ou en informatique. La demande s’adresse au Département des Finances et de l’Économie.',
                'Pour une entreprise isolée, la voie est donc de passer par son groupement : proposer à la fédération ou à l’association de branche un module collectif plutôt qu’une session individuelle. Richard prépare le programme et le calendrier ; le groupement dépose la demande et reste maître de l’éligibilité, qui se confirme auprès du Département avant d’engager la dépense.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment travailler avec Richard depuis Cotonou quand le client est monégasque ?',
            'items' => [
                ['titre' => 'Premier message et réponse', 'texte' => 'L’entreprise expose son activité, ses outils et son besoin par le formulaire de contact ou par WhatsApp. Richard répond en français, avec ses premières questions.', 'duree' => 'sous 24 heures'],
                ['titre' => 'Cadrage par visioconférence', 'texte' => 'Cotonou est en UTC+1 toute l’année ; la Principauté passe en UTC+2 l’été. Les rendez-vous se fixent en indiquant l’heure de Monaco et celle de Cotonou, pour éviter toute erreur au changement d’heure de mars et d’octobre. Le cadrage liste les flux, les données personnelles traitées, l’hébergement et les mentions de facturation.', 'duree' => 'selon le projet'],
                ['titre' => 'Devis en euros', 'texte' => 'Le devis détaille le périmètre, les livrables et les échéances, en euros. Le règlement se fait par virement SEPA.', 'duree' => 'après le cadrage'],
                ['titre' => 'Réalisation et suivi', 'texte' => 'Le travail peut avancer par étapes courtes, avec une version consultable en ligne à chaque étape. Le suivi peut passer par un canal écrit partagé, que l’entreprise choisit, et par une revue régulière dont le rythme et la durée se fixent avec elle.', 'duree' => 'selon le projet'],
                ['titre' => 'Livraison, formation et suites', 'texte' => 'Richard remet le code, la documentation et les accès, forme les utilisateurs à distance et reste joignable pour la maintenance et les évolutions.', 'duree' => 'à la livraison'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte un projet numérique à Monaco ?',
            'paragraphes' => [
                'Pour les entreprises monégasques, les projets se chiffrent sur devis, en euros, après le cadrage. Le prix dépend de ce qui fait la particularité de la Principauté, plus que de la taille du site.',
                'Le premier facteur est le nombre de langues : un site en français, en anglais et en italien se rédige, se relit et se teste trois fois. Le deuxième est l’hébergement. Un serveur dans un cloud souverain monégasque, un hébergeur français ou un fournisseur international n’ont ni le même coût mensuel, ni les mêmes démarches de conformité à documenter.',
                'Le troisième facteur est le niveau d’exigence sur les données. Un cabinet qui reçoit des pièces d’identité et des relevés bancaires demande de la journalisation, des droits d’accès fins et une analyse d’impact, ce que ne demande pas un site de présentation. Le quatrième est le nombre d’outils à relier : réservation, ERP, comptabilité, messagerie, outil du courtier. Chaque connexion se teste et se documente.',
                'Le dernier tient à la formation et au suivi après la livraison. Une équipe qui change souvent, comme dans l’hôtellerie ou l’événementiel, bénéficie de sessions répétées et d’un support écrit, ce qui s’ajoute au devis plutôt que de l’alourdir. L’entreprise reçoit le détail avant de s’engager.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs éviter pour un projet numérique à Monaco ?',
            'intro' => 'Ces erreurs reviennent dans les projets liés à la Principauté ; chacune se corrige au cadrage.',
            'items' => [
                ['titre' => 'Croire que le RGPD suffit', 'texte' => 'La loi n° 1.565 s’inspire du règlement européen mais elle a son autorité, l’APDP, son délai de notification des violations et ses sanctions. Un site conforme au RGPD doit encore désigner un représentant à Monaco lorsqu’il s’adresse à des personnes de la Principauté.'],
                ['titre' => 'Facturer comme si Monaco était hors de France pour la TVA', 'texte' => 'La TVA est perçue aux mêmes taux qu’en France. Un modèle de facture qui applique un autre régime sans raison expose à des redressements ; le paramétrage se valide avec le comptable.'],
                ['titre' => 'Oublier la traduction en français', 'texte' => 'La Direction des Services Fiscaux peut exiger une traduction en français d’une facture rédigée en langue étrangère. Les modèles bilingues évitent la demande.'],
                ['titre' => 'Confondre cloud souverain et cloud localisé', 'texte' => 'Monaco Cloud met en avant des données stockées à Monaco, sous juridiction monégasque, et une entité hors de portée du Cloud Act. Un hébergement simplement situé en Europe n’offre pas les mêmes garanties ; le choix se justifie par le niveau de sensibilité des données.'],
                ['titre' => 'Prévoir une seule langue', 'texte' => 'La clientèle des hôtels, des yachts et des cabinets est internationale. Un site en français seul ferme la porte aux visiteurs anglophones : prévoir au moins le français et l’anglais.'],
                ['titre' => 'Négliger le registre et la notification', 'texte' => 'Sans registre tenu à jour ni procédure de notification, une fuite de données devient un manquement supplémentaire. Le circuit se prépare avant la mise en ligne.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quels points confirmer auprès des administrations monégasques avant de s’engager ?',
            'texte' => 'La loi n° 1.565, ses arrêtés d’application et le calendrier français de la facturation électronique évoluent. Ces informations datent du 6 octobre 2026 et ne remplacent ni un avocat, ni un expert-comptable, ni la Direction des Services Fiscaux. Le calendrier de la facturation électronique pour les entreprises monégasques, les seuils de désignation d’un délégué à la protection des données et l’éligibilité d’une formation à l’aide du Gouvernement sont à confirmer auprès des administrations concernées.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier un projet monégasque à Richard SALANON ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Richard peut accompagner à distance les entreprises à Monaco. Formé à EPITECH en 2022, il cumule plus de six ans d’expérience et a mené des missions à distance en France, en Belgique et en Suisse, des pays dont les règles de TVA et de facturation sont proches de celles de la Principauté. Il est aussi l’auteur de Wapy, assistant WhatsApp doté d’intelligence artificielle, et l’un des fondateurs d’<a href="https://audyxa.com">Audyxa</a>.',
                'Pour juger de la méthode sur des cas concrets, les <a href="/realisations/">réalisations</a> décrivent des projets menés pour des clients d’Afrique et d’Europe ; son parcours se retrouve dans <a href="/richard-salanon">sa présentation</a> et dans <a href="/a-propos/">l’à-propos</a> du site.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez un projet numérique à Monaco ?',
            'texte'  => 'Décrivez votre activité, vos outils actuels, les données que vous traitez et votre situation de TVA : vous recevez une réponse sous 24 heures et, après un premier échange, un devis en euros.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Richard SALANON intervient-il sur place à Monaco ?', 'r' => 'L’intervention se fait à distance, en visioconférence, par écrit et par WhatsApp. Le décalage avec Cotonou est nul l’hiver, puisque Monaco est alors en UTC+1, et d’une heure l’été, en UTC+2.'],
        ['q' => 'Richard SALANON accompagne-t-il les entreprises monégasques ?', 'r' => 'Richard peut accompagner à distance les entreprises à Monaco : cadrage en visioconférence, développement, formation et suivi. Ses projets sont décrits sur la page des réalisations.'],
        ['q' => 'Quelle loi protège les données personnelles à Monaco ?', 'r' => 'La loi n° 1.565 du 3 décembre 2024, qui remplace la loi n° 1.165 du 23 décembre 1993. Selon l’APDP, elle reprend les principes du RGPD et de la Convention 108+ du Conseil de l’Europe, et les informations nominatives deviennent des données personnelles.'],
        ['q' => 'Qu’est devenue la CCIN à Monaco ?', 'r' => 'L’Autorité de protection des données personnelles, l’APDP, lui succède. D’après la foire aux questions de l’APDP, elle dispose de pouvoirs propres : recommandations, décisions, propositions de réglementation et sanctions, prononcées par sa formation restreinte.'],
        ['q' => 'Une entreprise doit-elle tenir un registre des traitements à Monaco ?', 'r' => 'Oui, dès 50 salariés, selon l’APDP, et le seuil ne joue pas si le traitement n’est pas occasionnel. Le registre remplace une grande partie des formalités préalables de l’ancienne loi.'],
        ['q' => 'Sous quel délai notifier une violation de données à l’APDP ?', 'r' => 'Dans les meilleurs délais et, si possible, dans les soixante-douze heures après en avoir pris connaissance, lorsque la violation est susceptible d’engendrer un risque pour les droits et libertés des personnes.'],
        ['q' => 'Peut-on transférer des données de Monaco vers un autre pays ?', 'r' => 'Oui. Le transfert vers un État qui n’assure pas un niveau de protection adéquat est soumis à l’autorisation de l’APDP si aucune garantie appropriée n’est en place et qu’aucune dérogation de l’article 99 ne s’applique. Le registre mentionne le pays destinataire.'],
        ['q' => 'Une entreprise établie hors de Monaco est-elle concernée par la loi n° 1.565 ?', 'r' => 'Oui, si elle propose des produits ou des services à des personnes situées à Monaco ou suit leur comportement : elle doit nommer un représentant à Monaco ou, à défaut, dans un État membre de l’Union européenne.'],
        ['q' => 'Quel est le taux de TVA à Monaco ?', 'r' => 'La TVA est perçue sur les mêmes bases et aux mêmes taux qu’en France, selon le portail MonEntreprise : 20 % au taux normal, 10 % au taux réduit, 5,5 % pour les produits de première nécessité. Un téléservice, l’e-TVA, permet de déclarer et de payer en ligne.'],
        ['q' => 'La facture électronique est-elle obligatoire à Monaco ?', 'r' => 'Le portail monégasque admet la facture électronique avec l’accord du destinataire et une signature électronique, sans publier de calendrier propre. Côté France, la réception est obligatoire pour toutes les entreprises depuis le 1er septembre 2026 et l’émission s’étend aux moyennes, petites et très petites entreprises au plus tard au 1er septembre 2027 ; à confirmer auprès de la Direction des Services Fiscaux.'],
        ['q' => 'Monaco est-il dans l’Union européenne et dans l’espace SEPA ?', 'r' => 'Monaco n’est pas membre de l’Union européenne mais utilise l’euro et fait partie du SEPA. Un virement entre une banque monégasque et une banque de l’Union suit donc les mêmes règles qu’un virement national.'],
        ['q' => 'Qu’est-ce que Monaco Cloud ?', 'r' => 'L’opérateur du cloud souverain de l’État monégasque, né du programme Extended Monaco. Il indique stocker les données à Monaco, sous juridiction monégasque, avec un actionnariat monégasque et des services qualifiés par l’Agence monégasque de sécurité numérique.'],
        ['q' => 'Les formations de Richard sont-elles finançables à Monaco ?', 'r' => 'Le Gouvernement monégasque participe à certaines formations organisées à l’initiative de groupements professionnels, sur une partie des coûts hors taxes. La demande se fait auprès du Département des Finances et de l’Économie, qui confirme l’éligibilité.'],
        ['q' => 'En quelle devise Richard établit-il ses devis pour Monaco ?', 'r' => 'En euros, sur devis, après le cadrage. Le règlement se fait par virement SEPA.'],
    ],

    'sources' => [
        ['titre' => 'APDP : foire aux questions (loi n° 1.565 du 3 décembre 2024)', 'url' => 'https://www.apdp.mc/faq', 'date' => '2026-10-06'],
        ['titre' => 'APDP : obligations des professionnels', 'url' => 'https://www.apdp.mc/professionnels/connaitre-vos-obligations', 'date' => '2026-10-06'],
        ['titre' => 'APDP : espace professionnels', 'url' => 'https://www.apdp.mc/professionnels', 'date' => '2026-10-06'],
        ['titre' => 'MonEntreprise : la TVA à Monaco', 'url' => 'https://monentreprise.gouv.mc/Thematiques/Obligations-legales-et-Fiscalite/Fiscalite/La-Taxe-sur-la-valeur-ajoutee-TVA/TVA', 'date' => '2026-10-06'],
        ['titre' => 'MonEntreprise : introduction à la fiscalité monégasque', 'url' => 'https://monentreprise.gouv.mc/Thematiques/Obligations-legales-et-Fiscalite/Fiscalite/Introduction-a-la-fiscalite-monegasque/La-fiscalite-monegasque', 'date' => '2026-10-06'],
        ['titre' => 'MonEntreprise : factures, mentions obligatoires', 'url' => 'https://monentreprise.gouv.mc/Thematiques/Obligations-legales-et-Fiscalite/Obligations-legales-et-comptables/Factures/Factures-Mentions-obligatoires', 'date' => '2026-10-06'],
        ['titre' => 'MonEntreprise : demander une aide aux formations', 'url' => 'https://monentreprise.gouv.mc/Thematiques/Emploi/Aides/Aide-aux-employeurs/Demander-une-aide-aux-formations', 'date' => '2026-10-06'],
        ['titre' => 'IMSEE : institut monégasque de la statistique', 'url' => 'https://imsee.mc/', 'date' => '2026-10-06'],
        ['titre' => 'MonEntreprise : e-TVA', 'url' => 'https://monentreprise.gouv.mc/en/themes/tax/tax/statements/how-to-register-for-e-vat', 'date' => '2026-10-06'],
        ['titre' => 'MonEntreprise : certificats de signature et de cachet électronique', 'url' => 'https://monentreprise.gouv.mc/en/themes/digital/electronic-signatures-and-stamp-certificates/electronic-signature-and-stamp-certificates-for-business', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, Digital 2026 : Monaco', 'url' => 'https://datareportal.com/reports/digital-2026-monaco', 'date' => '2026-10-06'],
        ['titre' => 'Monaco Cloud : accueil', 'url' => 'https://monacocloud.mc/', 'date' => '2026-10-06'],
        ['titre' => 'Monaco Cloud : pourquoi nous choisir', 'url' => 'https://monacocloud.mc/pourquoi-nous-choisir', 'date' => '2026-10-06'],
        ['titre' => 'DGFiP : facturation électronique, foire aux questions (échéances)', 'url' => 'https://www.impots.gouv.fr/sites/default/files/media/1_metier/2_professionnel/EV/2_gestion/290_facturation_electronique/faq_tout_savoir_facturation-electronique.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia : Monaco', 'url' => 'https://fr.wikipedia.org/wiki/Monaco', 'date' => '2026-10-06'],
        ['titre' => 'Wikipedia : Single Euro Payments Area', 'url' => 'https://en.wikipedia.org/wiki/Single_Euro_Payments_Area', 'date' => '2026-10-06'],
        ['titre' => 'UIT, plan de numérotation E.164 : codes de pays (+377)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base de données des fuseaux horaires : Europe (zone Monaco)', 'url' => 'https://data.iana.org/time-zones/tzdb/europe', 'date' => '2026-10-06'],
        ['titre' => 'EUR-Lex, accords monétaires avec Monaco, Saint-Marin, le Vatican et Andorre', 'url' => 'https://eur-lex.europa.eu/FR/legal-content/summary/agreements-on-monetary-relations-monaco-san-marino-the-vatican-and-andorra.html', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['site-vitrine-professionnel', 'site-e-commerce', 'systeme-de-reservation-en-ligne', 'integration-odoo', 'integration-dolibarr', 'api-rest-integrations', 'agents-ia-chatbot-whatsapp', 'saas-espace-client', 'referencement-naturel-seo'],
        'formations'  => ['ia-en-entreprise', 'ia-generative-dirigeants', 'ia-ethique-conformite', 'odoo-utilisateurs', 'cybersecurite-employes', 'excel-google-sheets'],
        'comparatifs' => ['odoo-vs-dolibarr'],
        'metiers'     => ['banques-microfinance', 'hotellerie-restauration', 'immobilier'],
    ],
];
