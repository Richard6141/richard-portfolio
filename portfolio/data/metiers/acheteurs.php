<?php
// ============================================================
// data/metiers/acheteurs.php · Page « formations par métier » pour les
// acheteurs (vague 1C, univers Direction et gestion, non prioritaire,
// statut F : Richard a déjà formé ce public). Angle propre : le cycle
// d'achat en entreprise et dans le secteur public (expression du besoin,
// consultation et appels d'offres, comparaison des offres, sélection et
// évaluation des fournisseurs, contrats, suivi des commandes et des
// livraisons, prévention des conflits d'intérêts et de la fraude). La page
// oriente vers ia-processus-metier, excel-google-sheets, odoo-utilisateurs
// et crm-pipeline sans reprendre leur texte.
// Textes lus à la source le 05/10/2026 : loi béninoise n° 2020-26 portant
// code des marchés publics (articles 23, 24, 51, 61, 64, 67, 73, 81, 125,
// PDF du SGG) ; décrets n° 2020-599 (seuils), n° 2020-601 (code
// d'éthique et de déontologie) et n° 2025-169 (système d'information de la
// commande publique, PDF de l'ARMP) ; liste des directives de l'UEMOA publiée
// par l'ARMP du Bénin ; code de la commande publique (L3, L2132-1, L2141-10,
// R2122-8 version du 1er avril 2026) et avis du 13 janvier 2026 sur les
// seuils ; code pénal (432-14) ; loi Sapin II (article 17) ; Commission
// européenne (marchés publics, article 4 du règlement sur l'IA) ; ACFE 2026 ;
// documentation Odoo 20.0 (appels d'offres, politiques de contrôle) ; wiki
// Dolibarr ; DGFiP (guide de démarrage de la facturation électronique) ;
// Gouvernement du Bénin (factures normalisées) ; fonds de formation.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation numérique et IA pour acheteurs : exprimer le besoin, consulter, comparer les offres et suivre les fournisseurs plus sûrement, en gardant la trace de chaque décision et la porte fermée aux conflits d'intérêts",
    'title'   => "Formation IA et numérique pour acheteurs | Richard SALANON",
    'meta'    => "Formation des acheteurs privés et publics à l'IA, au tableur et à Odoo : besoin, appels d'offres, comparaison des offres, suivi fournisseurs. Sur devis.",
    'en_bref' => "Cette page s'adresse aux acheteurs d'entreprise, aux approvisionneurs, aux responsables achats et aux équipes chargées des marchés publics, au Bénin, en Afrique de l'Ouest comme en Europe. Elle décrit ce que l'intelligence artificielle, le tableur, les logiciels de gestion et les plateformes de commande publique changent à chaque étape de l'achat, et les règles qui interdisent de leur confier la confidentialité des offres, le choix du fournisseur ou la gestion d'un conflit d'intérêts. Le parcours type tient en deux jours, plus une demi-journée facultative sur la commande publique, en intra, en inter, à distance ou en hybride ; son prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Direction et gestion',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : de la demande interne au dossier de consultation",
            'duree'  => '3 h 30',
            'points' => [
                "Relevé des canaux par lesquels arrivent aujourd'hui les demandes d'achat : appel du chef d'atelier, message WhatsApp, courriel, bon papier, tableur partagé.",
                "Une fiche d'expression du besoin d'une page : quantité, usage, délai, contraintes, budget connu, nom du demandeur et du valideur.",
                "Rédiger un cahier des charges avec un assistant d'IA à partir d'une fiche réelle, puis le purger de toute marque, référence ou provenance non justifiée.",
                "Préparer une demande de prix identique pour trois fournisseurs : mêmes lignes, mêmes unités, même date limite, mêmes pièces demandées.",
                "Pour les acheteurs publics : situer le besoin dans le plan de passation et dans le tableau des seuils de son pays, avant d'ouvrir la moindre consultation.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : comparer des offres que l'on n'a pas écrites soi-même",
            'duree'  => '3 h 30',
            'points' => [
                "Fixer les critères et leur poids avant l'ouverture des offres, et les dater dans le classeur.",
                "Extraire les prix de devis reçus en PDF ou en photo avec un assistant, puis contrôler chaque ligne contre la pièce d'origine.",
                "Construire le tableau comparatif dans Excel ou Google Sheets : prix unitaire, quantités, transport, droits, délai, garantie, pièces de rechange, conditions de paiement.",
                "Repérer une offre anormalement basse, une ligne oubliée, une unité différente ou un total qui ne tombe pas juste.",
                "Ce qui ne passe jamais dans un assistant en ligne : prix et contenu des offres pendant la consultation, coordonnées bancaires, pièces administratives des candidats.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : commander, recevoir, rapprocher et relancer",
            'duree'  => '3 h 30',
            'points' => [
                "Le bon de commande dans le logiciel de l'entreprise (Odoo, Dolibarr ou tableur structuré) : une commande, un numéro, un fournisseur, un valideur.",
                "Réception partielle, réception non conforme, retour : ce qui doit être saisi pour que la facture soit contrôlée sur ce qui est vraiment arrivé.",
                "Rapprochement entre commande, réception et facture, et traitement des écarts avant que la comptabilité ne paie.",
                "Relances automatiques des livraisons en retard, préparées par un flux simple et relues par l'acheteur avant envoi.",
                "Tableau de bord fournisseurs d'une page : délais tenus, quantités conformes, litiges ouverts, montants commandés par fournisseur.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : intégrité de la fonction achats et évaluation finale",
            'duree'  => '3 h 30',
            'points' => [
                "Le fichier fournisseurs : qui crée une fiche, qui modifie des coordonnées bancaires, qui vérifie, et comment repérer les doublons.",
                "Conflits d'intérêts, cadeaux et invitations : la déclaration, l'abstention, la trace écrite, et ce que disent les textes du pays des participants.",
                "Signaux d'alerte dans les données d'achat : commandes découpées juste sous un seuil, fournisseur toujours retenu, prix qui montent sans avenant.",
                "Registre des contrats et des avenants, avec échéances et reconductions, tenu dans un fichier partagé ou dans le logiciel.",
                "Évaluation individuelle sur un dossier complet, de la demande d'achat au paiement, et remise des modèles construits pendant les deux jours.",
            ],
        ],
        [
            'titre'  => "Demi-journée facultative : la commande publique, au Bénin, dans l'UEMOA ou en France",
            'duree'  => '3 h 30',
            'points' => [
                "Lecture guidée du code et des décrets applicables à l'autorité contractante des participants, articles en main.",
                "Plan de passation, seuils, procédures de sollicitation de prix, publicité : ce que l'outil numérique impose et ce qu'il trace.",
                "La plateforme électronique de la commande publique : comptes, rôles, horodatage, pièces à déposer, archivage.",
                "Rédiger un procès-verbal d'évaluation et des motifs de rejet clairs, sans recopier une synthèse produite par l'IA.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Acheteurs, approvisionneurs, responsables achats, agents des cellules de passation des marchés publics"],
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, plus une demi-journée facultative sur la commande publique"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride, 10 personnes au plus"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que changent l'intelligence artificielle, la digitalisation et l'automatisation dans le métier d'acheteur ?",
            'paragraphes' => [
                "Acheter, c'est transformer une demande souvent floue en engagement précis, puis vérifier que ce qui a été promis arrive, au bon prix et à temps. Entre les deux, l'acheteur passe ses journées à écrire, à recopier, à comparer et à relancer : une fiche de besoin mal remplie, trois devis aux présentations incompatibles, un fournisseur qui livre la moitié de la commande et facture la totalité. Ces tâches sont exactement celles où un assistant d'IA, un tableur bien construit et un logiciel de gestion font gagner des heures chaque semaine.",
                "Le premier changement touche l'écrit. Un assistant transforme en quelques minutes une demande dictée par un chef d'atelier en cahier des charges structuré, propose des questions à poser aux fournisseurs, résume un dossier d'appel d'offres de soixante pages ou reformule une lettre de réclamation. Le deuxième touche la comparaison : les devis arrivent en PDF, en photo prise sur un téléphone ou en tableau, et l'outil sait en extraire les lignes pour les ranger dans une grille commune. Le troisième touche le suivi : réceptions, factures et relances peuvent être reliées entre elles, au lieu de vivre dans trois fichiers différents.",
                "La fonction achats a pourtant une particularité que les autres services connaissent moins : elle engage l'argent de l'organisation auprès de tiers qui ont tout intérêt à être choisis. Une erreur de lecture dans un tableau comparatif peut écarter le bon fournisseur ; un devis confidentiel collé dans un assistant en ligne peut sortir de l'entreprise ; une commande découpée pour rester sous un seuil peut constituer une infraction dans le secteur public. Les outils accélèrent le travail, mais ils ne protègent ni contre la fraude, ni contre le favoritisme, ni contre l'erreur de bonne foi : c'est la manière de les utiliser qui le fait.",
                "Cette page décrit la formation que Richard SALANON propose aux acheteurs du privé et du public pour tenir ces deux exigences ensemble : aller plus vite sur ce qui se répète, et rendre chaque décision vérifiable par un contrôleur, un auditeur, un bailleur ou un juge. Elle ne traite ni de la négociation commerciale en elle-même, ni de la comptabilité fournisseurs, ni de la stratégie achats d'un grand groupe ; elle porte sur l'usage des outils numériques et de l'IA dans le cycle d'achat, de la demande au paiement.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles étapes du cycle d'achat un outil peut-il préparer, et que doit garder l'acheteur ?",
            'legende' => "Répartition travaillée en formation, étape par étape, puis ajustée aux règles internes de chaque organisation et, dans le secteur public, au code de son pays.",
            'entetes' => ["Étape de l'achat", "Travail préparé par l'outil", "Décision gardée par une personne", 'Contrôle à prévoir'],
            'lignes'  => [
                ['Expression du besoin', "Une fiche structurée à partir d'une demande orale ou d'un message, des questions de clarification", "Le besoin validé, son budget et son caractère réel", "Le demandeur et le valideur signent la fiche avant toute consultation ; au Bénin, l'article 23 du code exige un besoin déterminé avec précision avant tout appel à concurrence"],
                ['Cahier des charges', "Un premier texte, une liste de spécifications, une grille de conformité", "Les exigences retenues et leur justification", "Aucune marque ni provenance sans la mention « ou équivalent » quand le droit l'impose"],
                ['Consultation', "La demande de prix, les relances, le suivi des réponses reçues", "La liste des fournisseurs consultés et la date limite", "Les mêmes informations envoyées à tous, au même moment"],
                ['Comparaison des offres', "L'extraction des lignes de devis dans un tableau, les totaux, les écarts", "Le classement et le choix", "Chaque valeur extraite vérifiée contre la pièce d'origine"],
                ['Contrat et commande', "Le bon de commande, un résumé des clauses, le calendrier des échéances", "La signature et l'acceptation des conditions", "Registre des contrats et des avenants tenu à jour"],
                ['Réception et facture', "Le rapprochement entre commande, réception et facture, la liste des écarts", "Le bon à payer", "Aucune facture payée sur des quantités non reçues"],
                ['Évaluation des fournisseurs', "Les indicateurs de délai, de conformité et de litiges, tirés des données saisies", "La note, le maintien ou l'arrêt de la relation", "Les chiffres relus avec le fournisseur avant toute décision"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que l'IA et les outils numériques ne doivent-ils jamais faire dans un service achats ou une cellule des marchés, et quels textes le disent ?",
            'intro' => "Ces limites ne sont pas des précautions de formateur. Chacune s'appuie sur un texte lu à la source, dans sa version publiée au 5 octobre 2026 ; leur application à un dossier précis reste l'affaire du juriste de l'organisation ou de l'organe de contrôle compétent.",
            'items' => [
                ['titre' => "Laisser sortir le contenu des offres", 'texte' => "Au Bénin, l'article 67 de la loi n° 2020-26 du 29 septembre 2020 portant code des marchés publics interdit à l'autorité contractante de divulguer les renseignements confiés à titre confidentiel par les soumissionnaires, dont les secrets techniques ou commerciaux. En France, l'article L2132-1 du code de la commande publique cite expressément la communication, en cours de consultation, du montant total ou du prix détaillé des offres. Coller un devis dans un assistant grand public revient à le confier à un tiers."],
                ['titre' => "Écrire un cahier des charges taillé pour une marque", 'texte' => "L'article 51 du code béninois interdit les spécifications qui mentionnent des produits d'une fabrication ou d'une provenance déterminée et qui ont pour effet de favoriser ou d'éliminer certaines entreprises ; l'indication d'une marque n'est admise qu'avec la mention « ou équivalent », quand aucune description précise n'est possible. Un assistant à qui l'on donne la brochure d'un fournisseur reproduit fidèlement ses références : la relecture doit les chercher."],
                ['titre' => "Découper un achat pour passer sous un seuil", 'texte' => "Le décret béninois n° 2020-599 du 23 décembre 2020 interdit de fractionner les dépenses ou de sous-estimer la valeur des marchés pour les soustraire aux règles applicables. L'article 125 du code punit de cinq à dix ans d'emprisonnement l'agent qui organise un tel fractionnement ou informe un soumissionnaire, avant la soumission, des conditions d'attribution. Un tableur qui additionne les commandes par famille d'achat rend ce découpage visible."],
                ['titre' => "Choisir l'offre à la place de ceux qui en répondent", 'texte' => "Au Bénin, l'article 73 confie à la commission d'ouverture et d'évaluation des offres la détermination de l'offre conforme économiquement la plus avantageuse, sur des critères annoncés dans le dossier. En France, l'article L3 du code de la commande publique impose l'égalité de traitement des candidats et la transparence des procédures. Un classement produit par une IA, même juste, ne remplace ni la commission ni la motivation écrite du choix."],
                ['titre' => "Ignorer un lien entre un agent et un candidat", 'texte' => "L'article 61 du code béninois répute en conflit d'intérêts le candidat qui a une relation professionnelle ou familiale étroite avec un agent qui prépare le dossier, évalue les offres ou supervise l'exécution. L'article 15 du décret n° 2020-601 demande alors à l'agent de s'abstenir aussitôt et de déclarer ses intérêts à son supérieur. En France, l'article L2141-10 permet d'exclure le candidat concerné quand aucun autre remède n'existe."],
                ['titre' => "Accepter une pièce sans en vérifier l'authenticité", 'texte' => "L'article 64 du code béninois sanctionne par le rejet de l'offre toute fausse pièce ou mention inexacte sur les capacités techniques et financières. Les outils d'IA rendent la fabrication d'une attestation, d'un CV ou d'un relevé plus facile que jamais : l'acheteur vérifie auprès de l'émetteur les pièces qui conditionnent l'attribution, au lieu de se fier à leur apparence."],
                ['titre' => "Retenir toujours le même fournisseur sous le seuil", 'texte' => "Depuis le 1er avril 2026, l'article R2122-8 du code de la commande publique, modifié par le décret n° 2025-1386 du 29 décembre 2025, permet en France de passer sans publicité ni mise en concurrence les marchés inférieurs à 60 000 euros hors taxes pour les fournitures et services et à 100 000 euros pour les travaux. Le même article demande de ne pas contracter systématiquement avec un même opérateur lorsque plusieurs offres peuvent répondre au besoin."],
                ['titre' => "Laisser les équipes découvrir l'IA sans formation", 'texte' => "L'article 4 du règlement européen sur l'IA demande aux utilisateurs professionnels de développer la maîtrise de l'IA de leur personnel. Selon les questions et réponses de la Commission européenne mises à jour le 27 juillet 2026, l'obligation s'applique depuis le 2 février 2025, et son contrôle comme ses sanctions depuis le 3 août 2026. Un acheteur européen qui utilise un assistant pour analyser des offres est directement concerné."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un tableau comparatif produit par l'IA n'est-il pas encore une analyse des offres ?",
            'texte' => "Parce que l'extraction automatique se trompe d'une manière difficile à voir : elle lit la TVA comme le total, saute une ligne coupée entre deux pages, confond le prix unitaire et le prix par lot, ou complète avec assurance une valeur illisible. Le tableau obtenu est propre, aligné, crédible, et c'est précisément ce qui le rend dangereux. La formation impose une règle simple : chaque cellule extraite garde la référence de la page d'origine, une seconde personne contrôle les montants qui décident du classement, et le procès-verbal ou la note de choix est rédigé par l'acheteur à partir des pièces, pas recopié depuis la synthèse de l'outil.",
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Achat en entreprise, marché public au Bénin, marché public en France : qu'est-ce qui change pour l'acheteur outillé ?",
            'options'  => ['Entreprise privée', 'Marché public au Bénin', 'Marché public en France'],
            'criteres' => [
                ['critere' => 'Source des règles', 'valeurs' => ["Procédure achats interne, contrats, droit commercial ; en France, article 17 de la loi Sapin II pour les sociétés d'au moins 500 salariés réalisant plus de 100 millions d'euros de chiffre d'affaires, qui doivent évaluer leurs fournisseurs de premier rang", "Loi n° 2020-26 du 29 septembre 2020 et ses décrets d'application du 23 décembre 2020 ; l'ARMP publie aussi les directives n° 04/2005/CM/UEMOA et n° 05/2005/CM/UEMOA", "Code de la commande publique, en vigueur depuis le 1er avril 2019, et ses annexes"]],
                ['critere' => 'Petits achats', 'valeurs' => ["Seuils de validation fixés par la direction", "Sous 4 millions de francs CFA hors taxes, achat sur simple facture après consultation de trois fournisseurs (décret n° 2020-599)", "Sous 60 000 euros hors taxes en fournitures et services, 100 000 euros en travaux, marché possible sans publicité ni mise en concurrence (R2122-8)"]],
                ['critere' => 'Procédure formalisée', 'valeurs' => ["Appel d'offres décidé par l'entreprise, sans obligation légale générale", "À partir de 70 millions de francs CFA hors taxes pour les fournitures et services, 100 millions pour les travaux, seuils réduits pour les communes sans statut particulier (décret n° 2020-599)", "Depuis le 1er janvier 2026, 140 000 euros hors taxes pour les fournitures et services des autorités centrales, 216 000 euros pour les autres pouvoirs adjudicateurs, 5 404 000 euros pour les travaux"]],
                ['critere' => 'Canal des échanges', 'valeurs' => ["Courriel, WhatsApp, portail fournisseur ou logiciel de gestion, au choix de l'entreprise", "Système d'information de la commande publique créé par le décret n° 2025-169 : tous les échanges y passent, quel que soit le seuil, sauf dérogation prévue", "Plateformes de dématérialisation ; les informations confidentielles des candidats sont protégées par l'article L2132-1"]],
                ['critere' => "Conflit d'intérêts", 'valeurs' => ["Règles internes, déclaration à la direction ou au déontologue", "Article 61 du code, déclaration et abstention de l'article 15 du décret n° 2020-601, cadeaux interdits par son article 6", "Exclusion possible du candidat (L2141-10) ; délit de favoritisme puni de deux ans d'emprisonnement et de 200 000 euros d'amende (article 432-14 du code pénal)"]],
                ['critere' => 'Ce que la formation y ajoute', 'valeurs' => ["Une procédure écrite, des grilles et un fichier fournisseurs contrôlé", "La pratique des seuils et de la plateforme, et du plan de passation où tout marché au-dessus du seuil de dispense doit figurer, à peine de nullité (article 24 du code)", "La traçabilité des choix sous les seuils et la protection des offres reçues"]],
            ],
            'verdict'  => "Les trois cadres demandent la même discipline : un besoin écrit avant la consultation, des fournisseurs traités à égalité, des offres protégées, un choix motivé et une trace de chaque étape. Ce qui change, ce sont les seuils, les organes et les sanctions. Un acheteur qui travaille pour une entreprise privée liée à des marchés publics, ou pour un projet financé par un bailleur, gagne à appliquer par défaut la règle la plus exigeante des trois.",
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans un service achats, de Cotonou à Liège ?",
            'items' => [
                ['secteur' => "Cellule de passation des marchés d'un établissement public, au Bénin", 'probleme' => "Situation type : l'équipe connaît le code, mais prépare ses dossiers dans des fichiers épars et découvre tard que deux demandes de cotation portant sur des fournitures homogènes dépassent ensemble le seuil applicable.", 'solution' => "Un classeur du plan de passation additionne automatiquement les besoins par famille homogène et signale toute famille qui approche un seuil. Les dossiers sont déposés sur la plateforme publique, et l'assistant d'IA ne sert qu'à relire la clarté des spécifications, sans aucune offre reçue."],
                ['secteur' => "Service achats d'un industriel de l'agroalimentaire, à Abidjan", 'probleme' => "Situation type : les achats de pièces de maintenance passent par une vingtaine de demandeurs ; la direction ignore combien elle dépense par fournisseur et par famille.", 'solution' => "Les exports du logiciel de gestion sont nettoyés dans un tableau structuré, puis analysés par tableaux croisés : une poignée de familles concentre l'essentiel de la dépense, avec des prix différents pour la même référence. Deux consultations groupées sont lancées sur cette base."],
                ['secteur' => "Distributeur de pièces détachées, à Lomé", 'probleme' => "Situation type : les devis des fournisseurs étrangers arrivent en photos sur WhatsApp, en dollars ou en euros, avec des conditions de transport différentes ; la comparaison prend une demi-journée par dossier.", 'solution' => "L'assistant extrait les lignes des photos dans une grille commune, avec la référence de chaque image. L'acheteur ajoute transport, droits et change dans des colonnes calculées, puis contrôle les montants qui départagent les offres avant de décider."],
                ['secteur' => "Clinique privée, à Dakar", 'probleme' => "Situation type : les consommables manquent régulièrement alors que des commandes urgentes partent sans comparaison, chez le fournisseur qui répond le premier.", 'solution' => "Seuils de réapprovisionnement par article, commandes groupées chaque semaine, relances automatiques des livraisons en retard relues par l'approvisionneuse. Les achats urgents gardent une trace écrite du motif et sont revus chaque mois par la direction."],
                ['secteur' => "Établissement public, en France", 'probleme' => "Situation type : sous le seuil de 60 000 euros, l'acheteuse retient souvent le même prestataire par habitude, sans pouvoir montrer ensuite pourquoi.", 'solution' => "Une fiche de choix d'une page accompagne chaque achat sans publicité : besoin, opérateurs sollicités, offres reçues, motif du choix. Un tableau annuel par fournisseur fait apparaître la répétition et provoque une mise en concurrence quand plusieurs offres sont possibles."],
                ['secteur' => "PME industrielle, à Liège", 'probleme' => "Situation type : l'entreprise évalue ses fournisseurs une fois par an, de mémoire, et les retards de livraison ne sont discutés qu'au moment d'un litige.", 'solution' => "Les dates promises et les dates de réception saisies dans l'ERP alimentent un taux de livraison à l'heure par fournisseur. Une revue trimestrielle partage ces chiffres avec chaque fournisseur important, qui peut les contester avant toute décision."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils et systèmes un acheteur travaille-t-il, et que faut-il en savoir avant de s'y former ?",
            'legende' => "Informations relevées le 5 octobre 2026 sur les pages officielles des éditeurs et des administrations. Les abonnements restent au nom de l'organisation et ne font pas partie du prix de la formation ; aucun outil n'est imposé.",
            'entetes' => ['Outil ou système', "Usage dans les achats", 'Ce que dit la source officielle', 'Formation liée'],
            'lignes'  => [
                ['Excel ou Google Sheets', "Plan des achats, tableau comparatif, analyse des dépenses, registre des contrats", "Le tableur reste l'outil commun à toutes les organisations ; sa fiabilité dépend de sa structure et de ses contrôles", '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Odoo, application Achats', "Demandes de prix, commandes, réceptions, factures fournisseurs", "La documentation d'Odoo 20.0 décrit les appels d'offres par demandes de prix alternatives, à comparer ligne à ligne, et le rapprochement à trois, qui indique si une facture fournisseur doit être payée au vu des quantités réellement reçues ; offre Standard à 19,90 euros par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 euros", '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Dolibarr', "Demandes de prix fournisseurs, commandes et factures fournisseurs", "Le wiki de Dolibarr présente les demandes de prix fournisseurs comme semblables en de nombreux points aux propositions commerciales faites aux clients", '<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['Plateforme de la commande publique du Bénin', "Plans de passation, avis, dépôt des offres, suivi de l'exécution", "Le décret n° 2025-169 du 9 avril 2025 prévoit l'horodatage des offres, leur confidentialité par cryptographie, la signature électronique, l'archivage et l'hébergement au Bénin ; le portail des marchés publics donne accès au SIGMaP", "Demi-journée facultative du parcours"],
                ['Facture normalisée au Bénin', "Contrôle des factures reçues des fournisseurs", "Selon le Gouvernement du Bénin, une facture normalisée porte, outre les mentions classiques, le numéro d'identification de la machine, la signature et le code électronique de la DGI", '<a href="/formations/ia-comptables-syscohada">IA pour comptables</a>'],
                ['Facturation électronique en France', "Réception des factures fournisseurs par une plateforme agréée", "Selon le guide de démarrage de la DGFiP, les entreprises concernées doivent pouvoir recevoir des factures électroniques depuis le 1er septembre 2026 ; grandes entreprises et ETI émettent les leurs depuis cette date", '<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>'],
                ["Assistants d'IA (ChatGPT, Claude, Gemini, Copilot)", "Cahiers des charges, questions aux fournisseurs, résumés de dossiers, courriers", "Les garanties sur les données dépendent de l'offre souscrite : compte personnel et compte administré par l'organisation ne se valent pas", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['CRM et pipeline', "Suivi des consultations en cours, relances, motifs d'échec, rapport hebdomadaire", "La logique d'étapes et de prochaine action datée s'applique aux consultations comme aux affaires commerciales", '<a href="/formations/crm-pipeline">CRM : pipeline et reporting</a>'],
                ['Automatisation (n8n, Make)', "Relances de livraison, alertes d'échéance de contrat, accusés de réception", "n8n Cloud affiche sa formule Starter à 20 euros par mois en paiement annuel, pour 2 500 exécutions mensuelles", '<a href="/formations/n8n">n8n de zéro à l\'autonomie</a>'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Que contient le parcours type des acheteurs, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment construit-on en séance une grille de comparaison des offres qui résiste à un contrôle ?",
            'items' => [
                ['titre' => "Écrire les critères avant d'ouvrir les offres", 'duree' => '30 minutes', 'texte' => "Prix, coût d'utilisation, délai, garantie, service après-vente, conformité technique : chaque critère reçoit une définition et un poids, puis le fichier est daté et enregistré. Dans le secteur public, ce sont les critères annoncés dans le dossier, et aucun autre. Une grille modifiée après l'ouverture des plis ne protège plus personne."],
                ['titre' => "Raisonner en coût complet", 'duree' => '45 minutes', 'texte' => "L'article 73 du code béninois cite parmi les éléments du coût global l'utilisation, l'entretien, la réparation, le rendement, les conditions de livraison, le service après-vente et la disponibilité des pièces de rechange. Le classeur ajoute donc des colonnes pour le transport, les droits, la consommation et les pièces sur la durée d'usage, au lieu de comparer des prix d'achat seuls."],
                ['titre' => "Extraire les offres avec l'outil", 'duree' => '30 minutes', 'texte' => "Les devis sont lus par l'assistant autorisé dans l'organisation, ou saisis à la main quand aucun outil n'est autorisé. Chaque ligne garde le nom du fichier et la page d'origine dans une colonne dédiée, pour que le contrôle soit possible sans rouvrir tous les documents."],
                ['titre' => "Faire contrôler par une deuxième personne", 'duree' => '45 minutes', 'texte' => "Un binôme reprend les montants qui décident du classement, les quantités et les unités. Les écarts trouvés sont notés avec leur cause : TVA prise pour un total, ligne oubliée, prix par carton lu comme un prix unitaire. Cette liste devient la fiche des pièges à surveiller dans l'organisation."],
                ['titre' => "Traiter les anomalies par écrit", 'duree' => '30 minutes', 'texte' => "Une offre très inférieure aux autres n'est pas écartée d'office : l'article 81 du code béninois exige de demander d'abord des justifications écrites. Une ligne manquante ou une incohérence donne lieu à une question écrite, envoyée selon les règles de la procédure, et la réponse rejoint le dossier."],
                ['titre' => "Rédiger la note de choix", 'duree' => '30 minutes', 'texte' => "L'acheteur écrit lui-même, en quelques paragraphes, pourquoi l'offre retenue l'emporte au regard des critères. Les motifs de rejet adressés aux autres candidats en découlent. L'assistant peut relire la clarté du texte ; il ne fournit ni les arguments ni les chiffres."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours s'adapte-t-il au poste de chacun dans la chaîne d'achat ?",
            'legende' => "Les demi-journées peuvent être suivies séparément. Les combinaisons ci-dessous sont celles qui reviennent le plus souvent ; elles se fixent au premier échange.",
            'entetes' => ['Poste', 'Demi-journées conseillées', 'Ce que la personne sait faire en sortant'],
            'lignes'  => [
                ['Responsable achats ou directeur des achats', "Les quatre, et la demi-journée publique si l'organisation y est soumise", "Fixer les règles d'usage de l'IA dans le service, organiser la séparation des tâches, lire le tableau de bord fournisseurs"],
                ['Acheteur ou acheteuse', "Jour 1 matin et après-midi, jour 2 après-midi", "Écrire un cahier des charges neutre, consulter à égalité, comparer en coût complet, motiver un choix"],
                ['Approvisionneur ou gestionnaire de stock', "Jour 1 matin, jour 2 matin", "Transformer un seuil de stock en demande d'achat, suivre les livraisons, relancer, enregistrer une réception partielle"],
                ['Personne responsable des marchés publics et membres de commission', "Jour 1 après-midi, jour 2 après-midi, demi-journée publique", "Appliquer les seuils, tenir le plan de passation, évaluer les offres et rédiger un procès-verbal sans s'appuyer sur une synthèse automatique"],
                ['Comptable fournisseurs', "Jour 2 matin et après-midi", "Bloquer une facture sans réception, contrôler une facture normalisée ou électronique, refuser une modification de coordonnées non vérifiée"],
                ['Demandeur interne ou prescripteur technique', "Jour 1 matin", "Exprimer un besoin sans désigner de fournisseur, rédiger des spécifications acceptables, comprendre les délais de la procédure"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation se prépare-t-elle sans qu'une seule offre confidentielle ne circule ?",
            'intro' => "Les exercices portent sur les dossiers de l'organisation, parce qu'un cas inventé n'apprend pas à reconnaître ses propres pièges. La préparation est organisée pour que rien de confidentiel ne quitte les ordinateurs du service.",
            'items' => [
                ['titre' => 'Un premier échange', 'texte' => "Vous décrivez le service : effectif, familles d'achat, volumes, logiciel en place, soumission ou non à un code des marchés publics, usage actuel des assistants d'IA. Le premier échange, le cadrage et le devis ne coûtent rien, et une réponse arrive sous 24 heures."],
                ['titre' => 'Des dossiers clos, rendus anonymes par le service', 'texte' => "On retient deux ou trois consultations terminées, dont une difficile. Le service remplace lui-même les noms des fournisseurs, les montants exacts et les coordonnées. Le formateur ne reçoit aucune offre en cours d'évaluation, ni aucun dossier soumis à une obligation de confidentialité active."],
                ['titre' => "Les outils déjà autorisés", 'texte' => "Les manipulations se font dans le tableur, le logiciel de gestion et l'assistant d'IA que l'organisation utilise déjà, sur les comptes des participants. Quand aucun assistant n'est autorisé, les démonstrations se font sur des données fictives et la question du choix d'un outil est notée pour la direction."],
                ['titre' => "La lecture des règles internes", 'texte' => "Procédure achats, délégations de signature, charte informatique, code d'éthique, seuils de validation : ces documents sont lus avant la session, pour que les exercices respectent ce que l'organisation a déjà décidé. Les contradictions repérées sont signalées au responsable, pas exposées devant le groupe."],
                ['titre' => 'Des séances surtout pratiques', 'texte' => "Chaque séquence part d'une situation du service, passe par la règle qui s'applique, puis par le geste dans l'outil. Le temps de manipulation dépasse largement le temps d'exposé, en groupes de dix personnes au plus."],
                ['titre' => 'Des modèles qui restent au service', 'texte' => "Fiche d'expression du besoin, gabarit de demande de prix, grille de comparaison, registre des contrats, tableau de bord fournisseurs, fiche réflexe sur les conflits d'intérêts : tout est remis en fichiers modifiables, avec une attestation nominative de fin de formation."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour un acheteur seul, une direction des achats ou une cellule des marchés ?",
            'legende' => "Les formats se combinent : un atelier commun, puis des demi-journées ciblées par poste ou un suivi à distance.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Situation type'],
            'lignes'  => [
                ['Atelier de lancement', 'Une demi-journée', "Tout le service achats, avec un ou deux prescripteurs", "Poser les règles d'usage de l'IA sur les offres et choisir les trois chantiers à outiller en premier"],
                ['Parcours complet, intra', '2 jours en 4 demi-journées', '10 personnes au plus', "Direction des achats d'une entreprise moyenne ou d'un groupe, qui veut revoir tout le cycle d'achat"],
                ['Parcours public, intra', "2 jours et demi, demi-journée publique comprise", '10 personnes au plus', "Cellule de passation, commission d'évaluation, service financier d'une autorité contractante"],
                ['Session inter-entreprises', '1 ou 2 jours', 'Une ou deux personnes par structure', "PME, associations professionnelles, projets financés ; les exercices utilisent des dossiers fictifs"],
                ['À distance', 'Séances de 2 heures', '8 personnes au plus', "Équipes réparties entre plusieurs sites ou plusieurs pays, ou acheteur seul dans sa structure"],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', "Grille de comparaison construite en présence, puis appliquée aux consultations du mois avec un retour à distance"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe achats, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun tarif n'est affiché : chaque formule fait l'objet d'un devis détaillé, établi après un premier échange, un cadrage et une proposition gratuits. Le paiement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces ; une autorité contractante applique ses propres règles d'achat pour commander la formation.",
            'items'      => [
                ['offre' => 'Atelier de lancement', 'prix' => 'Sur devis', 'inclus' => ["Une demi-journée pour tout le service", "Règles d'usage de l'IA sur les besoins, les offres et les contrats", 'Liste des trois premiers chantiers']],
                ['offre' => 'Parcours acheteurs', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur vos dossiers clos', 'Grille de comparaison, registre des contrats et tableau de bord fournisseurs', 'Évaluation sur un dossier complet', 'Supports modifiables et attestation']],
                ['offre' => 'Parcours commande publique', 'prix' => 'Sur devis', 'inclus' => ['Le parcours acheteurs', 'La demi-journée sur le code et la plateforme du pays', 'Modèle de procès-verbal et de motifs de rejet']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le nombre de demi-journées et le choix des modules.',
                "Le pays ou les pays dont les textes de commande publique sont étudiés.",
                "La préparation : anonymisation des dossiers, construction des exercices sur vos consultations.",
                'Le lieu : vos locaux à Cotonou, une autre ville du Bénin, un autre pays, ou la distance.',
                "Les logiciels couverts : tableur seul, ou aussi Odoo, Dolibarr ou la plateforme publique.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Une formation d'acheteurs peut-elle être prise en charge par un fonds ou par un budget public ?",
            'paragraphes' => [
                "Cela dépend du pays, de l'employeur et du dispositif, et rien n'est promis ici. La règle pratique est la même partout : écrire au fonds avant de signer, avec le programme et le devis, puis attendre sa réponse écrite. Un service achats est bien placé pour le faire, puisqu'il connaît la valeur d'une pièce justificative et d'un calendrier tenu.",
                "En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> présente le plan de formation comme ouvert aux entreprises à jour des deux taxes qui le financent ; une action en intra y figure parmi d'autres, et le paiement suit le contrôle des services du fonds puis la décision de sa Commission permanente. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> annonce un guichet pour le personnel des entreprises. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a> ; ses conditions se demandent directement au fonds.",
                "Une administration, une collectivité ou un établissement public finance en général la formation de ses agents sur son budget, selon ses propres procédures de commande : une demande de cotation ou un achat sur facture après consultation, selon le montant. Le devis indique alors les éléments dont la cellule de passation a besoin, sans traitement de faveur.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que l'accès aux fonds publics ou mutualisés suppose, depuis le 1er janvier 2022, un prestataire certifié Qualiopi. Richard SALANON n'a pas cette certification : une entreprise française prévoit donc la dépense sur son propre budget. Le programme, les feuilles de présence et les attestations sont fournis dans tous les cas, et servent aussi de trace des mesures prises au titre de l'article 4 du règlement européen sur l'IA.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les services achats qui s'outillent trop vite ?",
            'intro' => "Aucune de ces erreurs ne vient de la malhonnêteté. Elles naissent de l'urgence, d'une livraison attendue pour hier ou d'un outil adopté sans règle, et elles ouvrent ensuite la porte à ceux qui voudraient en profiter.",
            'items' => [
                ['titre' => "Comparer des devis qui ne répondent pas à la même question", 'texte' => "Un fournisseur chiffre la livraison, l'autre non ; l'un compte par carton, l'autre à l'unité. Quand la demande de prix n'a pas fixé les lignes et les unités, aucun outil ne rend les offres comparables. Le gabarit commun envoyé à tous règle le problème à la source."],
                ['titre' => "Confier la même personne à toutes les étapes", 'texte' => "Celui qui crée le fournisseur, passe la commande, réceptionne et valide la facture peut tout faire, y compris l'erreur que personne ne verra. Dans une petite équipe, on sépare au moins la création des fiches fournisseurs et la validation des paiements."],
                ['titre' => "Laisser modifier un compte bancaire sur simple courriel", 'texte' => "Le changement de coordonnées d'un fournisseur est le geste le plus visé par les fraudeurs. Toute modification passe par une personne désignée, une vérification par un canal déjà connu et une trace dans le logiciel, jamais par le seul acheteur qui reçoit la demande."],
                ['titre' => "Payer une facture avant la réception", 'texte' => "La marchandise est annoncée, le fournisseur insiste, la facture est réglée. Le rapprochement entre commande, réception et facture, quand le logiciel le permet, bloque ce réflexe sans dépendre de la vigilance de chacun."],
                ['titre' => "Tenir les contrats dans les boîtes de courriel", 'texte' => "Reconductions tacites, révisions de prix, garanties qui expirent : sans registre, l'organisation découvre ses engagements au moment où ils jouent contre elle. Un registre simple, avec une alerte trois mois avant chaque échéance, suffit dans la plupart des cas."],
                ['titre' => "Accepter les cadeaux de fin d'année sans règle", 'texte' => "Un panier, une invitation, un téléphone offert pour « faciliter les échanges » : sans règle écrite, chacun décide seul de ce qui est acceptable. Une règle courte, un registre des cadeaux reçus et une personne à qui en parler protègent d'abord l'acheteur. Pour les agents publics béninois, l'article 10 du décret n° 2020-601 va plus loin : refuser l'avantage indu proposé, chercher à en identifier l'auteur, réunir témoins ou preuves."],
                ['titre' => "Acheter un service informatique sur une promesse", 'texte' => "Un logiciel, un site ou une automatisation s'achètent comme le reste : besoin écrit, livraisons vérifiables, recette, propriété des paramétrages. L'histoire de <a href=\"/histoires/hertz-accenture\">Hertz et Accenture</a> montre ce qu'il en coûte de payer un projet numérique sans étapes contrôlables."],
                ['titre' => "Croire le tableau parce qu'il est propre", 'texte' => "Une grille générée en une minute, bien alignée et colorée, inspire confiance. Elle peut pourtant contenir une TVA prise pour un total ou une ligne oubliée. Le contrôle par une deuxième personne des montants décisifs reste obligatoire, quel que soit l'outil."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres datés aident à mesurer les enjeux numériques de la fonction achats ?",
            'items' => [
                ['valeur' => '15 %', 'libelle' => "Part du PIB de l'Union européenne que plus de 250 000 autorités publiques consacrent chaque année à l'achat de services, de travaux et de fournitures, soit environ 2 600 milliards d'euros (page de la Commission européenne consultée le 5 octobre 2026)", 'source' => 'Commission européenne, marchés publics', 'url' => 'https://single-market-economy.ec.europa.eu/single-market/public-procurement_en'],
                ['valeur' => '45 %', 'libelle' => "Part des 2 402 cas de fraude interne étudiés dans 143 pays et territoires qui comportaient de la corruption, avec une perte médiane de 150 000 dollars (étude de l'ACFE publiée en 2026)", 'source' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/-/media/files/acfe/pdfs/rttn/2026/infographics/key-findings.pdf'],
                ['valeur' => '21 %', 'libelle' => "Part des cas de la même étude 2026 relevant de fraudes à la facturation, avec une perte médiane de 90 000 dollars", 'source' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/-/media/files/acfe/pdfs/rttn/2026/infographics/key-findings.pdf'],
                ['valeur' => '43 %', 'libelle' => "Part des fraudes détectées grâce à un signalement dans l'étude 2026 de l'ACFE ; près d'un tiers de ces signalements venaient de clients et de fournisseurs", 'source' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/-/media/files/acfe/pdfs/rttn/2026/infographics/key-findings.pdf'],
                ['valeur' => '300 000 $', 'libelle' => "Perte médiane associée, dans l'édition 2026 de l'ACFE, au signal comportemental « relation anormalement proche avec un fournisseur ou un client »", 'source' => 'ACFE, Report to the Nations 2026, page de présentation', 'url' => 'https://www.acfe.com/fraud-resources/report-to-the-nations'],
                ['valeur' => '4 000 000 FCFA', 'libelle' => "Seuil de dispense hors taxes fixé au Bénin par le décret n° 2020-599 du 23 décembre 2020 : en dessous, achat sur simple facture après consultation de trois fournisseurs", 'source' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2020-599', 'url' => 'https://sgg.gouv.bj/doc/decret-2020-599/'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour une équipe achats ?",
            'legende' => "Chaque fiche décrit son propre programme et ses formats. Le parcours acheteurs en reprend les gestes utiles au service ; les fiches permettent d'approfondir un outil ou une méthode.",
            'entetes' => ['Formation', 'Ce qu\'elle apporte aux acheteurs', 'Pour qui en priorité'],
            'lignes'  => [
                ['<a href="/formations/ia-processus-metier">IA dans les processus métier</a>', "Cartographier le processus d'achat, choisir les étapes à confier à une règle ou à l'IA, fixer les seuils de validation et les échantillons de contrôle", 'Responsable achats, contrôle interne'],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', "Tableaux structurés, formules de recherche, tableaux croisés pour l'analyse des dépenses, contrôles de totaux", 'Acheteurs, approvisionneurs, cellules de passation'],
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', "Le parcours achats et réceptions dans Odoo, de la demande de prix à la facture contrôlée", 'Services équipés ou en cours d\'équipement'],
                ['<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>', "Le cycle complet d'une PME dans Dolibarr, demandes de prix fournisseurs comprises", 'PME et associations sous Dolibarr'],
                ['<a href="/formations/crm-pipeline">CRM : pipeline commercial et reporting</a>', "Une méthode d'étapes, de relances datées et de rapports, transposable au suivi des consultations et des fournisseurs stratégiques", 'Responsables achats qui suivent de nombreuses consultations'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', "Les réflexes face aux faux changements de coordonnées bancaires et aux pièces jointes piégées", 'Acheteurs et comptables fournisseurs'],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>', "La charte d'usage de l'IA, l'inventaire des outils et les rôles de contrôle, côté direction", 'Direction des achats avec la direction générale'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Importations, devises, connexion, plateformes publiques : que change le terrain africain ou européen pour un acheteur ?",
            'paragraphes' => [
                "En Afrique de l'Ouest, une grande partie des achats se négocie encore par téléphone et par WhatsApp, avec des fournisseurs locaux qui envoient un devis en photo et des fournisseurs étrangers qui facturent en dollars, en euros ou en yuans. L'acheteur doit donc comparer des offres qui n'ont ni la même devise, ni les mêmes conditions de transport, ni les mêmes délais de dédouanement. La formation part de cette réalité : la grille de comparaison prévoit le change, le fret, les droits et le délai réel de mise à disposition, et l'assistant d'IA sert à remettre en ordre des pièces hétérogènes, pas à deviner ce qui manque.",
                "La connexion et l'électricité comptent aussi. Un dépôt d'offre sur une plateforme publique se prépare plusieurs jours avant la date limite, pièces numérisées et signées, car une coupure la veille ne justifie aucun retard. Au Bénin, le décret n° 2025-169 du 9 avril 2025 fait passer tous les échanges de la commande publique par un système d'information unique, avec horodatage : l'heure enregistrée par le système fait foi, pas celle de l'ordinateur de l'agent. Les cellules de passation gagnent à répéter la procédure sur un dossier d'essai avant de la vivre sous contrainte.",
                "Les fournisseurs eux-mêmes changent. Au Bénin, les factures de vente sortent d'un système certifié par la DGI, et en France la réception des factures électroniques par une plateforme agréée est généralisée depuis le 1er septembre 2026 pour les entreprises concernées. L'acheteur et le comptable fournisseurs doivent savoir reconnaître une facture conforme, et ce que le guide de la DGFiP recommande pour éviter les doubles paiements quand une même facture arrive par plusieurs canaux.",
                "En Europe, les obligations portent davantage sur la preuve : critères écrits, égalité de traitement, confidentialité des offres, évaluation des fournisseurs de premier rang pour les grandes entreprises soumises à la loi Sapin II, maîtrise de l'IA au sens du règlement européen. Les équipes qui achètent pour un siège européen et pour des filiales africaines tiennent les deux cadres en même temps ; la formation leur apprend à appliquer la règle la plus stricte quand un même dossier sert aux deux. Elle se donne en français, avec des supports en anglais sur demande.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos acheteurs avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des acheteurs à ces outils. Il n'exerce pas leur métier, ne négocie pas à leur place et ne choisit aucun fournisseur : son apport porte sur l'usage du tableur, des logiciels de gestion, des assistants d'IA et des automatisations dans le cycle d'achat, et sur la manière de garder chaque décision traçable. Les règles de commande publique présentées en séance sont lues dans les textes officiels du pays concerné ; les questions d'interprétation sont renvoyées au juriste de l'organisation ou à l'organe de régulation.",
                "Son parcours tient en quelques faits vérifiables : une formation à " . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . "), " . $ans . " ans d'expérience dans le numérique, plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées selon ses propres chiffres, des missions dans " . count((array) fait('pays_travailles')) . " pays, du Bénin au Canada. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fondé <a href=\"https://audyxa.com\">Audyxa</a> : il connaît aussi le point de vue du prestataire qui établit un devis et attend la décision de l'acheteur. Il n'est certifié par aucun éditeur et ne promet aucune économie chiffrée.",
                "Sa présentation complète figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays servis sur celle des <a href=\"/zones/\">zones d'intervention</a>. Quand la formation fait apparaître un besoin d'outillage, comme le paramétrage des achats dans un ERP ou un circuit de validation automatisé, il relève d'une mission d'<a href=\"/services/integration-odoo\">intégration d'Odoo</a> ou de <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>, sans obligation de la lui confier. Le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> aide à choisir un logiciel, et le <a href=\"/formations/\">catalogue des formations</a>, notamment le domaine <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>, présente les suites possibles.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'outiller votre service achats ?",
            'texte' => "Écrivez le besoin avant de consulter, envoyez la même demande à tous, fixez les critères avant d'ouvrir les offres, gardez les devis hors des assistants grand public, faites contrôler par une deuxième personne les montants qui décident du choix, séparez la création des fournisseurs et la validation des paiements, et tenez un registre des contrats. L'outil prépare ; l'acheteur décide, motive et signe.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former vos acheteurs à l'IA et aux outils numériques ?",
            'texte'  => "Décrivez votre service, vos familles d'achat, vos logiciels et, s'il y a lieu, le code des marchés publics qui s'applique à vous : vous recevez une réponse sous 24 heures, puis une proposition de format et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un parcours acheteurs'],
        ],
    ],

    'faq' => [
        ['q' => "Un acheteur peut-il coller un devis reçu dans ChatGPT, Claude ou Gemini pour le comparer ?", 'r' => "Pas dans un compte personnel, et pas pendant une consultation publique : le code béninois (article 67) et le code français (article L2132-1) protègent le contenu des offres. Dans le privé, on passe par l'assistant administré par l'entreprise, dont les conditions ont été lues, et l'on retire ce qui identifie le fournisseur quand c'est possible."],
        ['q' => "L'IA peut-elle classer les offres d'un appel d'offres public ?", 'r' => "Elle peut aider à extraire et à mettre en forme les données, sous contrôle. Le classement et la proposition d'attribution reviennent à la commission ou à l'acheteur désigné, sur les critères annoncés dans le dossier, avec une motivation écrite. Un classement automatique ne figure jamais tel quel dans un procès-verbal."],
        ['q' => "La formation couvre-t-elle le code des marchés publics de mon pays ?", 'r' => "Elle en lit les articles qui touchent aux outils : seuils, plan de passation, publicité, confidentialité, conflits d'intérêts, échanges électroniques. Les textes du Bénin, de l'espace UEMOA et de la France sont préparés d'avance ; pour un autre pays, ils sont lus à la source avant la session. Elle ne remplace pas une formation juridique complète."],
        ['q' => "Faut-il déjà utiliser Odoo ou Dolibarr pour suivre le parcours ?", 'r' => "Non. Les exercices se font d'abord dans le tableur, que tout service possède. Quand l'organisation utilise Odoo, Dolibarr ou un autre logiciel, les gestes de commande, de réception et de rapprochement sont montrés dans cet outil, sur ses propres écrans."],
        ['q' => "Nos acheteurs ne sont pas à l'aise avec l'informatique : est-ce un obstacle ?", 'r' => "Non. Savoir ouvrir un tableur et envoyer un courriel suffit. Les débutants complets peuvent suivre au préalable une demi-journée de mise à niveau sur le tableur, et les groupes sont constitués par niveau quand l'écart est important."],
        ['q' => "Comment éviter que l'assistant d'IA n'écrive un cahier des charges favorable à un fournisseur ?", 'r' => "En partant d'une fiche de besoin écrite par le demandeur, pas de la brochure d'un fournisseur, puis en relisant le texte produit à la recherche de marques, de références et de caractéristiques propres à un seul produit. La formation fait faire cette relecture sur vos propres cahiers des charges."],
        ['q' => "Que faire quand un fournisseur demande de changer ses coordonnées bancaires ?", 'r' => "Ne rien modifier sur la seule foi du message. La demande est transmise à la personne chargée du fichier fournisseurs, qui vérifie par un canal déjà connu, puis enregistre la modification avec sa trace. L'acheteur qui reçoit la demande ne la traite jamais seul."],
        ['q' => "Combien de temps faut-il prévoir ?", 'r' => "Deux jours en quatre demi-journées pour le parcours complet, plus une demi-journée pour la commande publique si elle vous concerne. À distance, le parcours est découpé en séances de deux heures. Un atelier de lancement d'une demi-journée peut précéder le reste."],
        ['q' => "Combien coûte la formation, et comment la payer ?", 'r' => "Le prix est fixé sur devis, après un premier échange, un cadrage et une proposition gratuits. Il dépend du nombre de participants, des modules, des pays étudiés, de la préparation et du lieu. Le paiement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "La formation peut-elle être financée par un fonds ?", 'r' => "Parfois, selon le pays et le dispositif, sans aucune garantie. Interrogez le fonds par écrit avec le programme et le devis avant de signer. En France, faute de certification Qualiopi, les fonds publics ou mutualisés sont en principe exclus et la dépense se prévoit sur le budget de l'entreprise."],
        ['q' => "Que garde le service après la formation ?", 'r' => "La fiche d'expression du besoin, le gabarit de demande de prix, la grille de comparaison en coût complet, le registre des contrats, le tableau de bord fournisseurs, la fiche réflexe sur les conflits d'intérêts et les cadeaux, les supports et une attestation nominative."],
    ],

    'sources' => [
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2020-26 du 29 septembre 2020 portant code des marchés publics (articles 23, 24, 51, 61, 64, 67, 73, 81 et 125)", 'url' => 'https://sgg.gouv.bj/doc/loi-2020-26/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2020-599 du 23 décembre 2020 fixant les seuils de passation, de sollicitation de prix, de dispense et de contrôle des marchés publics", 'url' => 'https://sgg.gouv.bj/doc/decret-2020-599/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2020-601 du 23 décembre 2020 portant code éthique et de déontologie dans la commande publique (articles 6, 10 et 15)", 'url' => 'https://sgg.gouv.bj/doc/decret-2020-601/', 'date' => '2026-10-05'],
        ['titre' => "ARMP du Bénin, décret n° 2025-169 du 9 avril 2025 portant mise en place d'un système d'information et de gestion électronique de la commande publique (articles 2 à 5)", 'url' => 'https://armp.bj/decret-n2025-169-du-09-avril-2025-portant-mise-en-place-dun-systeme-dinformation-et-de-gestion-electronique-de-la-commande-publique-en-republique-du-benin/', 'date' => '2026-10-05'],
        ['titre' => "ARMP du Bénin, directives de l'UEMOA n° 04/2005/CM/UEMOA et n° 05/2005/CM/UEMOA sur les marchés publics", 'url' => 'https://armp.bj/category/reglementations/directives-uemoa/', 'date' => '2026-10-05'],
        ['titre' => "Portail des marchés publics du Bénin et accès au SIGMaP", 'url' => 'https://www.marches-publics.bj/', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de la commande publique, article L3", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000037703236', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de la commande publique, article L2132-1 (informations confidentielles)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000037703579', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de la commande publique, article L2141-10 (conflit d'intérêts)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000037703611', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de la commande publique, article R2122-8 dans sa version du 1er avril 2026 (décret n° 2025-1386 du 29 décembre 2025)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000053222294', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, avis du 13 janvier 2026 relatif aux seuils de procédure et à la liste des autorités publiques centrales en droit de la commande publique", 'url' => 'https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000053346567', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code pénal, article 432-14 (délit de favoritisme)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000033611461', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, loi n° 2016-1691 du 9 décembre 2016 dite Sapin II, article 17", 'url' => 'https://www.legifrance.gouv.fr/loda/id/JORFTEXT000033558528', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, marchés publics dans le marché unique", 'url' => 'https://single-market-economy.ec.europa.eu/single-market/public-procurement_en', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "ACFE, Occupational Fraud 2026 : A Report to the Nations, chiffres clés", 'url' => 'https://www.acfe.com/-/media/files/acfe/pdfs/rttn/2026/infographics/key-findings.pdf', 'date' => '2026-10-05'],
        ['titre' => "ACFE, Report to the Nations, page de présentation de l'édition 2026", 'url' => 'https://www.acfe.com/fraud-resources/report-to-the-nations', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : appels d'offres (Call for tenders)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/purchase/manage_deals/calls_for_tenders.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : politiques de contrôle et rapprochement à trois (Control policies)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/purchase/manage_deals/control_bills.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs des offres", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Wiki de Dolibarr, module Demande de prix fournisseur", 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_Demande_de_prix_fournisseur', 'date' => '2026-10-05'],
        ['titre' => "n8n, tarifs de n8n Cloud", 'url' => 'https://n8n.io/pricing', 'date' => '2026-10-05'],
        ['titre' => "DGFiP, facturation électronique : guide pratique de démarrage au 1er septembre 2026", 'url' => 'https://www.impots.gouv.fr/professionnel/je-passe-la-facturation-electronique', 'date' => '2026-10-05'],
        ['titre' => "Gouvernement du Bénin, tout savoir sur les factures normalisées", 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-processus-metier', 'excel-google-sheets', 'odoo-utilisateurs', 'crm-pipeline', 'dolibarr-utilisateurs', 'cybersecurite-employes'],
        'services'    => ['digitalisation-d-entreprise', 'integration-odoo', 'formation-en-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
