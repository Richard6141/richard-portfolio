<?php
// ============================================================
// data/metiers/directeurs-financiers.php · Page « formations par métier »
// pour les directeurs administratifs et financiers (vague 1C, univers
// « Chiffre et finance », non prioritaire, statut F : Richard a déjà formé
// ce public). Angle propre : la direction financière vue depuis ses
// responsabilités (trésorerie et prévision, clôtures, pilotage et tableaux
// de bord, relation avec les banques et les commissaires aux comptes,
// arbitrage des outils et des budgets numériques, sécurité des paiements et
// fraude au président). La page oriente vers odoo-dirigeants,
// power-bi-looker-studio, data-literacy et ia-generative-dirigeants, sans
// reprendre leur texte, ni celui des pages experts-comptables et
// auditeurs-controleurs-gestion.
// Sources lues le 05/10/2026 : règlement (UE) 2024/886, article 5 quater
// (vérification du bénéficiaire), règlement (UE) n° 596/2014, article 10,
// rapport annuel 2025 de l'IC3 (FBI), The Guardian du 17/05/2024 (Arup),
// portail PI-SPI de la BCEAO (FAQ, entreprises, chiffres clés), AUSCGIE
// articles 138, 140, 718, 720 et 890 (droitguineen.com), documentation
// d'Odoo 20.0 (import des relevés, clôture annuelle et dates de
// verrouillage), tarifs de Power BI. Faits repris du catalogue : article 4
// du règlement sur l'IA, tarifs d'Odoo et de n8n, gratuité du cadrage,
// financements. Richard n'est ni DAF ni expert-comptable : la page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour directeurs administratifs et financiers : une trésorerie prévue semaine après semaine, des clôtures plus courtes, des tableaux de bord que le conseil peut croire et des virements protégés contre la fraude au président",
    'title'   => "Formation IA pour directeurs financiers | Richard SALANON",
    'meta'    => "Former DAF et directeurs financiers à l'IA et aux outils : trésorerie, prévision, clôtures, tableaux de bord, banques, fraude au président. Sur devis.",
    'en_bref' => "Ce parcours s'adresse aux directeurs administratifs et financiers et à leurs équipes, qui veulent se servir de l'intelligence artificielle, de l'automatisation et des logiciels de gestion pour prévoir la trésorerie, raccourcir les clôtures, piloter avec des tableaux de bord fiables, préparer les dossiers des banques et des commissaires aux comptes, et arbitrer les dépenses numériques. Il traite aussi ce que ces outils ne doivent jamais faire, comme valider un paiement ou sortir une information non publiée, et la défense contre la fraude au président. Il dure deux jours et demi en cinq demi-journées, plus un suivi après la première clôture, en intra, en inter, à distance ou en hybride, sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Chiffre et finance',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : cartographier les flux de la direction financière et ce qu'ils coûtent en heures",
            'duree'  => '3 h 30',
            'points' => [
                "Relevé des sources de chiffres réellement utilisées : relevés des banques, portails de paiement, comptes de monnaie électronique, logiciel de gestion, paie, classeurs des agences, messages des commerciaux.",
                "Calendrier annuel de la fonction posé sur une seule page : clôtures mensuelles, prévision, budget, comités, réunions avec les banquiers, visites des commissaires aux comptes, assemblée générale.",
                "Heures passées sur un mois ordinaire, notées par poste : collecte, ressaisie, rapprochements, mise en forme, relances, réponses aux questions de la direction générale.",
                "Inventaire des abonnements numériques payés par la direction financière et par les autres services, avec le nom de celui qui les a commandés et ce qu'ils coûtent sur l'année.",
                "Lecture de l'article 138 de l'Acte uniforme sur les sociétés commerciales : le rapport de gestion expose l'évolution de la situation de trésorerie et le plan de financement, ce qui fixe le niveau d'exigence de tout le parcours.",
                "Choix de trois chantiers mesurables pour la suite, par exemple la prévision à 13 semaines, le délai de clôture et le contrôle des nouveaux bénéficiaires de virement.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : tenir la position de trésorerie au jour le jour et la prévoir sur 13 semaines",
            'duree'  => '3 h 30',
            'points' => [
                "Position consolidée de chaque matin : soldes des comptes bancaires, des caisses et des comptes de monnaie électronique, remises en cours, paiements programmés.",
                "Import des relevés dans le logiciel de gestion au format CAMT.053, OFX ou CSV, puis rapprochement automatique par règles, avec la liste des opérations qui restent à expliquer.",
                "Prévision glissante à 13 semaines : encaissements estimés d'après les délais de paiement réellement constatés par client, et non d'après les échéances des factures ; décaissements engagés, salaires, impôts, échéances d'emprunt.",
                "L'assistant d'IA rédige la liste des hypothèses à confirmer et le commentaire de l'écart entre prévu et réalisé ; le tableur fait tous les calculs, et chaque hypothèse porte le nom de la personne qui l'a donnée.",
                "Trois scénarios (retard d'un gros client, hausse d'un prix d'achat, report d'un financement) et le seuil d'alerte qui déclenche un appel au banquier.",
                "Exercice : construire la prévision d'une société fictive à partir de six mois d'historique, puis la confronter à la semaine suivante révélée en séance.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : raccourcir la clôture et préparer le dossier des commissaires aux comptes",
            'duree'  => '3 h 30',
            'points' => [
                "Calendrier de clôture en jours ouvrés, une tâche par ligne, un responsable par tâche, et les dépendances qui allongent le délai sans que personne le voie.",
                "Contrôles automatiques avant clôture : comptes d'attente non soldés, banques non rapprochées, factures fournisseurs reçues mais non saisies, créances et dettes anciennes à provisionner.",
                "Date de verrouillage des écritures dans le logiciel, exceptions réservées à l'administrateur et traçabilité de chaque déverrouillage.",
                "Liste des documents attendus par le commissaire aux comptes, préparée dès le début de l'exercice : l'article 718 de l'Acte uniforme lui permet à toute époque de se faire communiquer sur place les pièces qu'il juge utiles.",
                "Premier jet des notes annexes et du rapport de gestion par l'assistant, à partir de chiffres déjà arrêtés ; relecture ligne par ligne par la personne qui signe.",
                "Exercice : réduire de quatre jours le calendrier de clôture d'un cas fictif, en justifiant chaque tâche supprimée ou déplacée.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : piloter avec la direction générale, le conseil et les banques",
            'duree'  => '3 h 30',
            'points' => [
                "Le tableau de bord mensuel du directeur général et celui du conseil : peu d'indicateurs, toujours les mêmes, avec la date des données et la source de chaque chiffre.",
                "Besoin en fonds de roulement, délais clients et fournisseurs, rotation des stocks, ratios suivis par les banques : où les trouver dans le logiciel, comment les recalculer pour les vérifier.",
                "Dossier de demande de financement : historique, prévisionnel, plan de remboursement, garanties ; ce que l'assistant met en forme, ce que le directeur financier défend devant le comité de crédit.",
                "Préparer un rendez-vous bancaire avec l'IA : questions probables de l'analyste, points faibles du dossier, réponses chiffrées à vérifier une par une.",
                "Exercice : une page de synthèse pour le conseil, présentée en cinq minutes à un « administrateur » qui pose les questions difficiles.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : arbitrer les outils et les budgets numériques, puis verrouiller les paiements",
            'duree'  => '3 h 30',
            'points' => [
                "Coût complet d'un outil sur trois ans : licences, intégration, formation, temps interne, sortie et récupération des données ; grille de comparaison entre tableur, logiciel de gestion, outil de visualisation et assistant d'IA.",
                "Charte d'usage de l'IA propre à la direction financière : outils autorisés, données qui ne sortent jamais (paie, résultats non publiés, coordonnées bancaires), relecture et traçabilité.",
                "Scénarios de fraude au président et à ses variantes : faux dirigeant en visioconférence, faux fournisseur qui change d'IBAN, faux avocat d'une opération confidentielle.",
                "Procédure de paiement non dérogeable : double validation, contre-appel sur un numéro déjà connu, délai de carence pour tout nouveau bénéficiaire, alerte de vérification du nom du bénéficiaire jamais ignorée.",
                "Évaluation sur un dossier fil rouge, de la prévision à la page du conseil, puis plan à 90 jours : qui fait quoi, avec quel outil, et quelle mesure prouvera le résultat.",
            ],
        ],
        [
            'titre'  => "Six semaines plus tard, à distance : revue de la première clôture et de la prévision",
            'duree'  => '2 h',
            'points' => [
                "Écart entre la prévision de trésorerie et le réalisé, semaine par semaine, et hypothèses à corriger.",
                "Délai de la clôture qui a suivi la formation, comparé à celui qui avait été mesuré avant.",
                "Revue des paiements à des bénéficiaires nouveaux ou modifiés depuis la session : contre-appels faits, alertes reçues, exceptions accordées.",
                "Abonnements résiliés, maintenus ou ajoutés depuis l'inventaire, et décisions encore en attente.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Directeurs administratifs et financiers, responsables financiers, trésoriers, chefs comptables et contrôleurs qui leur rendent compte"],
        ['l' => 'Durée', 'v' => "2 jours et demi en 5 demi-journées, plus 2 h de suivi après la première clôture"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent au travail d'un directeur administratif et financier ?",
            'paragraphes' => [
                "Un directeur financier passe moins de temps à produire des chiffres qu'à répondre de leur exactitude : devant le directeur général qui décide, devant le conseil qui arrête les comptes, devant le banquier qui prête et devant le commissaire aux comptes qui certifie. Sa journée se partage entre la trésorerie, la clôture, le pilotage, la relation avec les partenaires financiers et l'administration générale. Les outils numériques ne changent pas cette responsabilité. Ils changent la vitesse à laquelle l'information arrive, la quantité de travail manuel qui la sépare d'une décision, et le nombre de façons dont un fraudeur peut se faire passer pour quelqu'un d'autre.",
                "Côté trésorerie, la donnée bancaire devient immédiate. Dans l'UEMOA, la BCEAO exploite la Plateforme interopérable du système de paiement instantané (PI-SPI), sur laquelle un client peut régler une entreprise quel que soit l'établissement qui tient son compte ; selon le portail de la plateforme, consulté le 5 octobre 2026, les fonds y sont disponibles pour le bénéficiaire en moins de 10 secondes, à toute heure. En zone euro, le règlement (UE) 2024/886 du 13 mars 2024 oblige les banques à proposer l'envoi de virements instantanés depuis le 9 octobre 2025. Un encaissement visible tout de suite permet une position de trésorerie quotidienne ; un décaissement parti en dix secondes ne se rattrape plus.",
                "Côté clôture, les logiciels de gestion importent les relevés, proposent les rapprochements et verrouillent les périodes. La documentation d'Odoo 20.0 recommande, avant de clore un exercice, de rapprocher toutes les banques, de solder les comptes d'attente, de revoir les créances et les dettes de plus de 60 jours pour décider d'éventuelles provisions, puis de fixer une date de verrouillage que seuls les administrateurs peuvent lever. Ce qui prenait trois semaines de pointage peut tenir en quelques jours, à condition que le circuit ait été dessiné et que chacun sache qui valide quoi.",
                "Côté pilotage, les assistants d'IA apportent une capacité nouvelle : écrire. Ils rédigent un commentaire d'écart, une note au conseil, un dossier de financement ou la liste des questions qu'un analyste de crédit posera. C'est utile et c'est risqué, parce qu'un texte fluide inspire confiance même quand le chiffre qu'il commente est faux. La règle enseignée dans tout le parcours tient en une phrase : le tableur, le logiciel de gestion ou la requête calculent, l'assistant rédige, et le directeur financier signe ce qu'il a vérifié.",
                "Il faut enfin dire qui parle. Richard SALANON n'est ni directeur financier, ni expert-comptable, ni commissaire aux comptes. Il conçoit et déploie des logiciels de gestion, des automatisations et des intégrations d'IA, et il forme les équipes à s'en servir. Les règles comptables, fiscales, bancaires et de gouvernance citées sur cette page servent à tracer les limites de l'outil ; leur interprétation revient aux professionnels de l'entreprise et à ses conseils.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles missions du directeur financier l'outil peut-il préparer, et quelles décisions restent les siennes ?",
            'legende' => "Partage enseigné pendant le parcours, mission par mission. La dernière colonne indique la fiche du catalogue qui approfondit l'outil correspondant.",
            'entetes' => ['Mission', "Ce que l'outil prépare", 'Ce que le directeur financier décide', 'Fiche à consulter'],
            'lignes'  => [
                ['Position de trésorerie quotidienne', "Import des relevés, soldes consolidés par banque et par compte de monnaie électronique, opérations non rapprochées mises en évidence", "Placer, tirer sur une ligne, retarder un paiement, appeler un client", "<a href=\"/formations/odoo-dirigeants\">Odoo pour dirigeants</a>"],
                ['Prévision à 13 semaines', "Délais de paiement constatés par client, échéancier des engagements, trois scénarios chiffrés, premier jet du commentaire d'écart", "Retenir les hypothèses, fixer le seuil d'alerte, décider d'un financement de court terme", "<a href=\"/formations/data-literacy\">Décider avec les données</a>"],
                ['Clôture mensuelle', "Liste des tâches, contrôles automatiques avant clôture, relances des services en retard, verrouillage de la période", "Juger qu'un mois est clos, accepter ou refuser une écriture tardive", "<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ['Comptes annuels et rapport de gestion', "Tableaux de passage, mise en forme des annexes, premier jet du rapport sur des chiffres déjà arrêtés", "Proposer l'arrêté des comptes au conseil, assumer les estimations et les provisions", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ['Relation avec les commissaires aux comptes', "Liste des documents demandés, dossier partagé, suivi des points ouverts et des réponses", "Expliquer les choix comptables, répondre des contrôles internes, discuter des ajustements proposés", "<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>"],
                ['Tableaux de bord de la direction et du conseil', "Indicateurs actualisés depuis les sources, comparaison au budget et à l'année précédente", "Choisir les indicateurs, valider avant diffusion, porter le message", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
                ['Relation bancaire et financements', "Mise en forme du dossier, prévisionnel, plan de remboursement, liste des questions probables du comité de crédit", "Négocier, accepter des garanties ou des engagements, signer", "<a href=\"/formations/ia-generative-dirigeants\">IA générative pour dirigeants</a>"],
                ['Budget et dépenses numériques', "Inventaire des abonnements, coût complet sur trois ans, comparaison d'offres", "Acheter, résilier, choisir un prestataire, arbitrer entre deux projets", "<a href=\"/formations/adoption-erp\">Réussir l'adoption d'un ERP</a>"],
                ['Paiements fournisseurs et paie', "Propositions de paiement groupées, contrôle des coordonnées bancaires connues, alertes sur tout changement", "Valider à deux, ordonner le contre-appel, bloquer un paiement douteux", "<a href=\"/formations/cybersecurite-employes\">Cybersécurité pour les employés</a>"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que l'IA et l'automatisation ne doivent-elles jamais faire dans une direction financière, et quels textes le rappellent ?",
            'intro' => "Le directeur financier n'est pas, en tant que tel, soumis à un secret professionnel comparable à celui de l'avocat ou de l'expert-comptable, mais il porte d'autres obligations, écrites dans le droit des sociétés, le droit des marchés, le droit des données et les règles de paiement. Le parcours les transforme en interdits concrets, outil par outil.",
            'items' => [
                ['titre' => "Arrêter des comptes ou présenter un chiffre que personne n'a vérifié", 'texte' => "Dans l'espace OHADA, l'article 137 de l'Acte uniforme relatif au droit des sociétés commerciales confie l'établissement et l'arrêté des états financiers de synthèse au gérant, au conseil d'administration ou à l'administrateur général, et l'article 890 prévoit une sanction pénale contre les dirigeants qui présentent sciemment des états ne donnant pas une image fidèle. Un assistant ne signe rien et ne répond de rien. Le directeur financier qui prépare ces états doit pouvoir refaire chaque total à partir de la comptabilité, sans l'aide de l'outil qui l'a mis en forme."],
                ['titre' => "Faire sortir une information non publiée", 'texte' => "Pour une société dont les titres sont cotés dans l'Union européenne, des résultats ou une opération non encore annoncés relèvent en règle générale de l'information privilégiée. L'article 10 du règlement (UE) n° 596/2014 sur les abus de marché qualifie de divulgation illicite le fait de communiquer une telle information à une autre personne, hors du cadre normal du travail. Coller un projet de communiqué de résultats dans un assistant grand public, dont on ne connaît ni les conditions ni l'hébergement, est une question à trancher avec le juriste de l'entreprise avant de le faire, pas après."],
                ['titre' => "Envoyer la paie ou les coordonnées des tiers vers un service sans garantie", 'texte' => "Une direction financière détient des salaires, des numéros de compte, des identités de clients et de fournisseurs. Au Bénin, la loi n° 2017-20 du 20 avril 2018 portant code du numérique encadre la collecte et le transfert de ces données ; en Europe, le règlement général sur la protection des données impose au responsable du traitement des mesures de sécurité appropriées. Le parcours enseigne à travailler sur des fichiers pseudonymisés, à décrire un fichier à l'assistant plutôt que de le lui confier, et à réserver les données nominatives aux outils couverts par un contrat."],
                ['titre' => "Valider un paiement sur la foi d'un message, d'un appel ou d'une vidéo", 'texte' => "Aucune automatisation ne crée un bénéficiaire, ne modifie un IBAN ni ne lève un blocage. Le rapport annuel 2025 du centre de plaintes de l'internet du FBI (IC3) indique que les escroqueries visant les entreprises qui effectuent des virements ont causé plus de 3 milliards de dollars de pertes déclarées en 2025, et que des courriels rédigés par des chatbots ou des voix clonées servent déjà à imiter un dirigeant. Une demande urgente et confidentielle, même portée par une voix ou un visage familiers, suit la procédure de contre-appel comme les autres."],
                ['titre' => "Ignorer l'alerte de vérification du bénéficiaire", 'texte' => "Depuis le 9 octobre 2025, les prestataires de paiement de la zone euro doivent vérifier, avant tout virement, la concordance entre l'identifiant du compte et le nom du bénéficiaire indiqués par le payeur (article 5 quater ajouté par le règlement (UE) 2024/886). Le même article permet aux entreprises de renoncer à ce service pour leurs ordres groupés, et prévoit qu'elles soient informées des conséquences, sur la responsabilité de la banque et sur leur droit au remboursement, quand elles passent outre une alerte. Renoncer au contrôle pour gagner du temps sur un fichier de paiements est une décision de direction, jamais un réglage technique."],
                ['titre' => "Opposer l'outil au commissaire aux comptes", 'texte' => "L'article 720 de l'Acte uniforme prévoit que le secret professionnel ne peut être opposé au commissaire aux comptes, sauf par les auxiliaires de justice, et l'article 718 lui permet de se faire communiquer à toute époque les pièces qu'il estime utiles. Un chiffre produit par une automatisation doit donc pouvoir être expliqué au commissaire : source, règle de calcul, personne qui l'a contrôlé. « C'est l'outil qui l'a calculé » n'est pas une piste d'audit."],
                ['titre' => "Décider d'un financement, d'une couverture ou d'un placement", 'texte' => "L'outil chiffre des scénarios et rédige le dossier ; il ne choisit pas entre un découvert et un crédit de campagne, entre une banque et une autre, entre couvrir un risque de change ou le porter. Ces décisions engagent la société, souvent avec l'accord du conseil, et se prennent sur des hypothèses dont le directeur financier connaît l'origine."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi une visioconférence ne suffit-elle plus à authentifier un ordre de virement ?",
            'texte' => "Au début de 2024, une salariée du bureau de Hong Kong du groupe d'ingénierie Arup a été invitée à une visioconférence où plusieurs participants avaient l'apparence et la voix de dirigeants de l'entreprise. Convaincue, elle a effectué 15 virements vers cinq comptes locaux, pour un total de 200 millions de dollars de Hong Kong, soit environ 20 millions de livres selon The Guardian du 17 mai 2024 ; Arup a confirmé que de fausses voix et de fausses images avaient été utilisées. La leçon pour une direction financière tient en une règle : l'authenticité d'une demande ne se juge jamais par le canal qui l'apporte. On rappelle soi-même, sur un numéro déjà connu, une personne qu'on a choisie.",
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères datés un directeur financier doit-il avoir en tête avant de s'outiller ?",
            'items' => [
                ['valeur' => '60 jours', 'libelle' => "Ancienneté au-delà de laquelle la documentation d'Odoo 20.0 recommande, avant de clore un exercice, de revoir les créances et les dettes échues pour décider d'une provision, puis de verrouiller la période close.", 'source' => "Odoo 20.0, documentation de la clôture annuelle", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/accounting/reporting/year_end.html'],
                ['valeur' => 'Plus de 30 millions de dollars', 'libelle' => "Pertes déclarées en 2025 par des entreprises pour des fraudes de ce type impliquant l'IA : courriels rédigés par des chatbots, voix clonées demandant un virement (même rapport de l'IC3).", 'source' => 'FBI, IC3, rapport annuel 2025', 'url' => 'https://www.ic3.gov/AnnualReport/Reports/2025_IC3Report.pdf'],
                ['valeur' => '9 octobre 2025', 'libelle' => "Date à laquelle les prestataires de paiement de la zone euro ont dû offrir la vérification du nom du bénéficiaire avant chaque virement ; le 9 juillet 2027 pour les États membres hors zone euro (règlement (UE) 2024/886, article 5 quater).", 'source' => 'EUR-Lex, règlement (UE) 2024/886', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32024R0886'],
                ['valeur' => 'Moins de 10 secondes', 'libelle' => "Délai dans lequel un paiement passé par la PI-SPI de la BCEAO est disponible pour le bénéficiaire, à toute heure ; le portail de la plateforme annonce plus de 70 institutions financières participantes (consulté le 5 octobre 2026).", 'source' => 'BCEAO, portail PI-SPI', 'url' => 'https://pispi.bceao.int/foire-aux-questions'],
                ['valeur' => '45 jours et 6 mois', 'libelle' => "Dans l'espace OHADA, les états financiers de synthèse et le rapport de gestion sont adressés aux commissaires aux comptes 45 jours au moins avant l'assemblée, qui se tient dans les six mois de la clôture (article 140 de l'Acte uniforme sur les sociétés commerciales).", 'source' => 'AUSCGIE, article 140', 'url' => 'https://droitguineen.com/lois/acte-uniforme-societes-commerciales-auscgie/article/140'],
                ['valeur' => '3 août 2026', 'libelle' => "Début du contrôle et des sanctions de l'obligation de maîtrise de l'IA (article 4 du règlement européen sur l'IA), applicable depuis le 2 février 2025 aux entreprises qui utilisent ces systèmes, selon la Commission (mise à jour du 27 juillet 2026).", 'source' => 'Commission européenne', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment construire une prévision de trésorerie à 13 semaines avec l'IA, sans lui confier un seul calcul ?",
            'items' => [
                ['titre' => "Partir de la position d'ouverture rapprochée", 'texte' => "La prévision commence par un solde juste : chaque compte bancaire, chaque caisse et chaque compte de monnaie électronique rapproché au dernier jour, les chèques et les remises en cours identifiés. Un écart non expliqué au départ se retrouve multiplié treize fois à l'arrivée.", 'duree' => '30 min'],
                ['titre' => "Mesurer les délais de paiement réels", 'texte' => "Le logiciel de gestion sait dire, client par client, combien de jours séparent la facture de l'encaissement. On remplace l'échéance théorique par ce délai constaté, et l'on isole les dix clients qui pèsent le plus. L'assistant peut écrire la formule ou la requête ; le tableur l'exécute.", 'duree' => '45 min'],
                ['titre' => "Lister les décaissements engagés", 'texte' => "Salaires et charges, impôts, loyers, échéances d'emprunt, commandes fournisseurs confirmées, dépenses d'investissement votées. Chaque ligne porte sa date et sa source : un contrat, une commande, un échéancier bancaire, jamais un souvenir.", 'duree' => '45 min'],
                ['titre' => "Faire écrire les hypothèses, pas les chiffres", 'texte' => "L'assistant rédige la liste des questions à poser aux commerciaux et aux acheteurs : ce client paiera-t-il avant la fin du mois, cette commande sera-t-elle livrée, ce marché public sera-t-il réglé ? Chaque réponse est notée avec le nom de la personne et la date. Le montant reste saisi par le service financier.", 'duree' => '30 min'],
                ['titre' => "Bâtir trois scénarios et un seuil d'alerte", 'texte' => "Un scénario central, un scénario dégradé (gros client en retard, hausse d'un prix d'achat, financement reporté) et un scénario favorable. Le seuil d'alerte est fixé par le directeur financier : au-dessous, on appelle le banquier avant d'en avoir besoin.", 'duree' => '30 min'],
                ['titre' => "Comparer chaque semaine le prévu au réalisé", 'texte' => "Le lundi, la semaine écoulée remplace la prévision. L'assistant propose un premier commentaire des écarts ; le trésorier vérifie chaque cause auprès de la personne concernée avant que la note parte au directeur général. Au bout de six semaines, on sait quelles hypothèses sont fiables et lesquelles ne le sont pas.", 'duree' => '20 min par semaine'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces chantiers dans des directions financières d'Afrique francophone et d'Europe ?",
            'items' => [
                ['secteur' => "Distributeur de produits de grande consommation, à Abidjan", 'probleme' => "Situation type : sept comptes dans cinq banques, des encaissements par monnaie électronique dans les agences, et une position de trésorerie reconstituée chaque vendredi à la main. Le directeur financier découvre les tensions trop tard pour négocier.", 'solution' => "Import quotidien des relevés dans le logiciel de gestion, rapprochement par règles, position consolidée envoyée chaque matin à la direction, et prévision à 13 semaines fondée sur les délais de paiement réellement constatés par client."],
                ['secteur' => "Industrie agroalimentaire, à Dakar", 'probleme' => "Situation type : le crédit de campagne se renégocie chaque année avec un dossier monté en urgence : historique incomplet, prévisionnel refait trois fois, questions du comité de crédit découvertes en séance.", 'solution' => "Dossier de financement tenu à jour tout au long de l'année, prévisionnel relié aux données de gestion, liste des questions probables préparée avec l'assistant et réponses chiffrées vérifiées une par une avant le rendez-vous."],
                ['secteur' => "Société de services informatiques, à Cotonou", 'probleme' => "Situation type : les clients paient par virement, par monnaie électronique et bientôt par paiement instantané, mais les références de paiement ne permettent pas de savoir quelle facture est réglée. Le lettrage prend deux jours par mois.", 'solution' => "Référence de facture imposée sur chaque mode de paiement, règles de rapprochement automatique dans le logiciel, liste des encaissements non identifiés traitée chaque jour, et relance des retards préparée à partir de la balance âgée."],
                ['secteur' => "Groupe de distribution de matériaux, à Ouagadougou", 'probleme' => "Situation type : un fournisseur habituel « change de banque » par un courriel au bon logo, juste avant une échéance importante. Le comptable a déjà préparé le virement.", 'solution' => "Procédure écrite : tout changement de coordonnées bancaires est validé par contre-appel sur le numéro du fichier fournisseurs, par une personne différente de celle qui a reçu la demande, avec un délai de carence avant le premier paiement. La formation l'a fait répéter sur ce cas exact."],
                ['secteur' => "PME industrielle familiale, à Bordeaux", 'probleme' => "Situation type : la clôture mensuelle dure quinze jours ouvrés, le commissaire aux comptes réclame chaque année les mêmes pièces, et le conseil reçoit des chiffres déjà anciens.", 'solution' => "Calendrier de clôture en jours ouvrés, contrôles automatiques avant clôture, verrouillage des périodes, dossier partagé avec le commissaire aux comptes ouvert dès le début de l'exercice, et tableau de bord du conseil actualisé depuis le logiciel."],
                ['secteur' => "Filiale d'un groupe de négoce, à Luxembourg", 'probleme' => "Situation type : la direction financière paie par fichiers groupés et envisage de renoncer à la vérification du bénéficiaire pour éviter les rejets, alors que le groupe a déjà subi une tentative de fraude au président.", 'solution' => "Décision écrite du comité de direction, après lecture de l'article 5 quater du règlement européen : vérification maintenue sur tous les fichiers, fichier fournisseurs nettoyé pour supprimer les noms divergents, et règle de contre-appel étendue aux demandes reçues par visioconférence."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et systèmes une direction financière doit-elle savoir choisir, utiliser et contrôler ?",
            'legende' => "Outils courants dans les directions financières de la zone OHADA et d'Europe. Prix relevés le 5 octobre 2026 sur les pages des éditeurs ; ils se règlent à l'éditeur, le parcours n'en impose aucun.",
            'entetes' => ['Outil ou système', 'Usage pour la direction financière', 'Point de vigilance', 'Formation liée'],
            'lignes'  => [
                ["SYSCOHADA révisé et tableau des flux de trésorerie", "Cadre des états financiers que le rapport de gestion et le dossier bancaire doivent retrouver", "Une prévision de trésorerie se rapproche des flux réels de l'exercice, sinon les banquiers relèvent l'écart", "<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ['Odoo', "Import des relevés (CAMT.053, CSV, XLSX, OFX, QIF, CODA), rapprochement par règles, balances âgées, verrouillage des périodes, tableaux de bord", "Formule Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 € ; les droits de validation se règlent avant la mise en service", "<a href=\"/formations/odoo-dirigeants\">Odoo pour dirigeants</a>"],
                ['Dolibarr', "Gestion du devis au règlement dans beaucoup de PME, exports pour la trésorerie et le reporting", "Le directeur financier lit les données avec un compte qui ne peut rien modifier", "<a href=\"/formations/dolibarr-utilisateurs\">Dolibarr pour vos équipes</a>"],
                ['Portails bancaires et paiement instantané', "Relevés, ordres de virement, fichiers groupés, PI-SPI dans l'UEMOA, virements instantanés en euros", "Habilitations par personne, double validation, liste des bénéficiaires figée ; un paiement instantané parti ne revient pas", "<a href=\"/formations/securite-donnees-dirigeants\">Sécurité des données et sauvegardes pour dirigeants</a>"],
                ['Encaissement en ligne', "Paiement des factures par carte ou monnaie électronique depuis un lien", "Référence de facture obligatoire pour le rapprochement ; le <a href=\"/comparatifs/fedapay-vs-kkiapay-vs-cinetpay\">comparatif FedaPay, Kkiapay et CinetPay</a> détaille les offres de la zone", "<a href=\"/formations/e-commerce\">Vendre en ligne : e-commerce</a>"],
                ['Tableur', "Prévision, scénarios, calendrier de clôture, contrôles", "Hypothèses en tête de feuille, aucun montant saisi dans une formule, une version datée par semaine", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ['Power BI ou Looker Studio', "Tableaux de bord de la direction générale et du conseil, actualisés depuis les sources", "Power BI Pro à 12,10 € HT par utilisateur et par mois en paiement annuel, Premium par utilisateur à 20,80 € HT ; droits de lecture à définir avant le partage", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
                ["Assistants d'IA en offre professionnelle", "Commentaires d'écarts, notes au conseil, dossiers de financement, préparation des rendez-vous", "Pas de compte personnel pour des données de l'entreprise ; le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide à choisir", "<a href=\"/formations/ia-generative-dirigeants\">IA générative pour dirigeants</a>"],
                ['n8n ou Make', "Collecte des relevés, alertes de seuil, relances de clôture, envoi de la position du matin", "n8n Cloud Starter à 20 € par mois en paiement annuel pour 2 500 exécutions ; aucune automatisation ne crée ni ne modifie un bénéficiaire", "<a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a>"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type d'un parcours pour directeurs financiers, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Qui, dans la direction financière, suit quelles demi-journées du parcours ?",
            'legende' => "Le directeur financier n'a pas besoin de manipuler chaque outil, mais il doit savoir ce que chacun produit et comment le contrôler. La première matinée et la dernière réunissent toute l'équipe ; le reste se répartit selon les postes.",
            'entetes' => ['Poste', 'Ce que la personne saura faire', 'Demi-journées conseillées', 'Fiche qui prolonge le parcours'],
            'lignes'  => [
                ["Directeur administratif et financier", "Fixer les règles d'usage, lire une prévision et ses hypothèses, arbitrer les outils, tenir la procédure de paiement", "Jour 1 matin, jour 2 après-midi, jour 3 matin", "<a href=\"/formations/ia-generative-dirigeants\">IA générative pour dirigeants</a>"],
                ["Trésorier ou responsable de la trésorerie", "Tenir la position quotidienne, construire et commenter la prévision à 13 semaines, préparer les rendez-vous bancaires", "Jour 1, jour 2 après-midi, jour 3 matin", "<a href=\"/formations/data-literacy\">Décider avec les données</a>"],
                ["Chef comptable", "Organiser la clôture en jours ouvrés, automatiser les contrôles, préparer le dossier des commissaires aux comptes", "Jour 1 matin, jour 2 matin, jour 3 matin", "<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ["Contrôleur de gestion rattaché au DAF", "Produire les tableaux de bord de la direction et du conseil, rapprocher gestion et comptabilité", "Jour 1 matin, jour 2 après-midi", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
                ["Responsable administratif d'une PME", "Tenir seul trésorerie, clôture et paiements avec des outils simples et des contrôles écrits", "Tout le parcours, en accompagnement individuel", "<a href=\"/formations/odoo-dirigeants\">Odoo pour dirigeants</a>"],
                ["Comptable fournisseurs ou assistant de paiement", "Reconnaître une demande frauduleuse, appliquer le contre-appel, signaler plutôt que payer", "Jour 3 matin", "<a href=\"/formations/cybersecurite-employes\">Cybersécurité pour les employés</a>"],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Intra, inter, à distance ou accompagnement du seul DAF : quel format convient à votre direction financière ?",
            'options'  => ['Intra, direction financière', 'Inter-entreprises', 'À distance', 'Hybride', 'Accompagnement du DAF seul'],
            'criteres' => [
                ['critere' => 'Organisation', 'valeurs' => ["Cinq demi-journées dans vos locaux, réparties sur deux à trois semaines", "Deux jours et demi avec des directions financières de plusieurs entreprises", "Créneaux de deux heures en visioconférence, écran partagé", "Première journée sur place, suite à distance calée sur les clôtures", "Demi-journées à la carte, sur place ou en ligne"]],
                ['critere' => 'Données utilisées', 'valeurs' => ["Vos relevés, vos exports et votre calendrier, pseudonymisés", "Jeu de données fictif d'une société multi-banques, aucune donnée réelle partagée", "Fichiers déposés la veille dans un dossier commun", "Vos chiffres du mois en cours", "Vos propres fichiers, débarrassés des noms"]],
                ['critere' => 'Confidentialité', 'valeurs' => ["Maximale : rien ne sort de l'entreprise", "Aucun chiffre de votre entreprise n'est montré aux autres", "Partage d'écran limité aux fichiers préparés", "Comme l'intra", "Maximale"]],
                ['critere' => 'Quand le retenir', 'valeurs' => ["Une équipe qui veut une procédure commune, de la trésorerie aux paiements", "Un ou deux participants, ou un DAF qui prend son poste", "Équipes réparties entre un siège et des filiales", "Quand on veut voir la prévision tenir sur plusieurs semaines réelles", "DAF de PME sans équipe, ou directeur qui veut d'abord décider seul"]],
            ],
            'verdict'  => "Pour une direction financière de plusieurs personnes, l'intra hybride donne le meilleur résultat : le diagnostic se fait sur place, la prévision et la clôture se travaillent ensuite sur les vraies semaines. Le calendrier évite toujours les périodes de clôture annuelle et de préparation de l'assemblée.",
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une direction financière, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun tarif n'est affiché, parce qu'une PME dont le responsable administratif tient seul la trésorerie ne se forme pas comme un groupe qui consolide plusieurs filiales et plusieurs banques. Le prix est fixé sur devis, une fois connus les postes, les systèmes et les chantiers retenus ; le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les logiciels, les outils de visualisation et les assistants d'IA se paient directement à leurs éditeurs, jamais dans le devis de formation.",
            'items'      => [
                ['offre' => 'Cadrage', 'prix' => 'Gratuit', 'inclus' => ["Échange avec le directeur financier", "Relevé des banques, des logiciels et des formats d'export", "Proposition de parcours et devis écrit"]],
                ['offre' => 'Parcours type intra', 'prix' => 'Sur devis', 'inclus' => ["Cinq demi-journées sur vos fichiers pseudonymisés", "Modèle de prévision à 13 semaines et calendrier de clôture", "Charte d'usage de l'IA et procédure de paiement écrites", "Évaluation sur un dossier fil rouge et attestation nominative"]],
                ['offre' => 'Module ciblé', 'prix' => 'Sur devis', 'inclus' => ["Une demi-journée ou une formation du catalogue sur un seul chantier", "Exercices construits sur vos exports", "Supports et corrigés modifiables"]],
                ['offre' => 'Suivi après la première clôture', 'prix' => 'Sur devis', 'inclus' => ["Séance de deux heures à distance", "Revue de la prévision et des paiements sensibles", "Bilan écrit des indicateurs suivis"]],
            ],
            'variations' => [
                "Le nombre de participants, et le fait de réunir ou non le directeur financier, la trésorerie, la comptabilité et le contrôle de gestion.",
                "Le nombre de banques, de sociétés et de devises à couvrir dans les exercices.",
                "La préparation des jeux d'exercice, quand il faut pseudonymiser des relevés, une paie ou un fichier fournisseurs.",
                "La mise en place éventuelle, pendant le parcours, d'une automatisation ou d'un tableau de bord sur vos systèmes.",
                "Le lieu des séances, au Bénin, ailleurs en Afrique, en Europe, au Canada ou entièrement en ligne.",
                "Le suivi retenu après la première clôture.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation d'une direction financière ?",
            'paragraphes' => [
                "Le directeur financier est souvent celui qui instruit les demandes de prise en charge des autres services ; pour son propre service, les règles sont les mêmes, et aucune prise en charge n'est promise ici. En Côte d'Ivoire, le plan de formation du FDFP est ouvert aux entreprises qui s'acquittent régulièrement de leurs taxes de formation, et le remboursement suit le contrôle du fonds. Au Bénin, le FODEFCA, dont les statuts ont été approuvés par le décret n° 2022-286, finance la formation continue des salariés du secteur privé avec une participation de l'entreprise. Au Sénégal, le 3FPT ouvre un guichet au personnel des entreprises.",
                "La demande se dépose avant de fixer les dates, avec le programme détaillé et le devis ; les feuilles de présence et l'attestation remises en fin de session servent ensuite de justificatifs. Chaque fonds a ses calendriers et ses plafonds, et la réponse écrite du fonds fait foi, pas l'avis du formateur.",
                "En France, France Compétences rappelle que depuis le 1er janvier 2022, l'accès aux fonds publics ou mutualisés suppose un prestataire certifié Qualiopi. Richard SALANON n'a pas cette certification : une entreprise française règle la formation sur son budget propre. En Belgique, en Suisse, au Luxembourg et au Canada, les dispositifs se vérifient au cas par cas, avant la commande. Pour les entreprises européennes, l'article 4 du règlement sur l'IA, qui oblige depuis le 2 février 2025 les utilisateurs professionnels à veiller à la maîtrise de l'IA par leur personnel, avec un contrôle à partir du 3 août 2026, aide à justifier la dépense en interne.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on quand une direction financière s'outille trop vite ?",
            'intro' => "Elles se révèlent rarement pendant la formation. Elles apparaissent à la première tension de trésorerie, à la première clôture serrée ou au premier appel d'un faux dirigeant.",
            'items' => [
                ['titre' => "Prévoir à partir des échéances au lieu des paiements constatés", 'texte' => "Une prévision qui suppose que chaque client paie à l'échéance de sa facture est fausse dès la deuxième semaine dans la plupart des entreprises. Le délai réellement observé, client par client, se calcule une fois par trimestre et remplace l'échéance théorique."],
                ['titre' => "Laisser l'assistant donner un chiffre", 'texte' => "Un total, un ratio ou un taux de croissance tapé dans la réponse d'un assistant n'a pas de formule et ne se vérifie pas. Le calcul reste dans le tableur, la requête ou le logiciel de gestion ; l'assistant ne reçoit que des chiffres déjà calculés, pour les commenter."],
                ['titre' => "Acheter un outil de plus au lieu d'en résilier deux", 'texte' => "L'inventaire du premier matin révèle presque toujours des abonnements en double : deux outils de signature, trois espaces de stockage, des licences attribuées à des personnes parties. Le budget numérique d'une direction financière commence par ce qu'elle arrête de payer."],
                ['titre' => "Choisir un logiciel sur une démonstration", 'texte' => "Une démonstration montre ce que le logiciel fait de mieux, pas ce qu'il fera de vos données. Avant de signer, on fait importer un vrai relevé, sortir une vraie balance âgée et exporter toutes les données dans un format lisible ailleurs. L'<a href=\"/histoires/hertz-accenture\">histoire de Hertz et Accenture</a> rappelle ce que coûte un projet mal cadré par écrit."],
                ['titre' => "Basculer tout le système financier en une seule fois", 'texte' => "Changer de logiciel de gestion la veille d'une clôture annuelle, sans période en parallèle ni chemin de retour, met en danger les paiements et la relation avec le commissaire aux comptes. L'<a href=\"/histoires/tsb-migration\">histoire de la migration de TSB</a> montre ce qu'une bascule d'un seul week-end peut produire."],
                ['titre' => "Renoncer aux contrôles de paiement pour aller plus vite", 'texte' => "Désactiver la vérification du bénéficiaire sur les fichiers groupés, autoriser un seul signataire pendant les congés, accepter un changement d'IBAN par courriel : chaque raccourci est une porte ouverte. Une exception se décide par écrit, pour une durée limitée, et se revoit à la séance de suivi."],
                ['titre' => "Oublier la continuité", 'texte' => "Si le logiciel de gestion ou le portail bancaire tombe le jour de la paie, qui paie, depuis quel poste, avec quelles habilitations ? L'<a href=\"/histoires/maersk-notpetya\">histoire de Maersk et de NotPetya</a> rappelle qu'une copie hors ligne et une procédure de secours se testent avant d'en avoir besoin."],
                ['titre' => "Ne rien mesurer", 'texte' => "Sans le délai de clôture, l'écart de prévision et le nombre de paiements sensibles contrôlés notés avant la session, personne ne pourra dire six semaines plus tard si les outils ont servi."],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => "Que vérifier avant de valider un virement inhabituel ou urgent ?",
            'items' => [
                "La demande arrive-t-elle par le circuit habituel, ou par un canal nouveau (messagerie personnelle, visioconférence imprévue, numéro inconnu) ?",
                "Le bénéficiaire figure-t-il déjà dans le fichier fournisseurs, avec les mêmes coordonnées bancaires depuis plus de trois mois ?",
                "Un changement de coordonnées a-t-il été confirmé par un appel passé par nous, sur le numéro enregistré avant la demande ?",
                "La banque a-t-elle signalé une divergence entre le nom du bénéficiaire et le compte, et cette alerte a-t-elle été lue jusqu'au bout ?",
                "Deux personnes distinctes ont-elles validé l'ordre, dont une qui n'a pas reçu la demande ?",
                "L'urgence ou la confidentialité invoquée empêche-t-elle de joindre un autre dirigeant ? Si oui, le paiement attend.",
                "Le montant, la devise et le pays du compte sont-ils cohérents avec l'historique de ce bénéficiaire ?",
                "La demande, le contre-appel et les deux validations sont-ils conservés dans le dossier du paiement ?",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue se rattachent au métier de directeur financier ?",
            'legende' => "Fiches du catalogue qui prolongent le parcours, de la plus proche des décisions du DAF à la plus opérationnelle. Chacune a sa page, avec son programme, ses prérequis et ses formats.",
            'entetes' => ['Formation', 'Pour qui dans la direction financière', 'Ce qu\'elle apporte', 'Durée'],
            'lignes'  => [
                ["<a href=\"/formations/odoo-dirigeants\">Odoo pour dirigeants</a>", "DAF et directeurs généraux d'entreprises sous Odoo", "Lire la synthèse de direction, les balances âgées et le budget, régler les validations et les droits", "2 jours en 4 demi-journées, plus 2 h de suivi"],
                ["<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>", "Contrôleurs et responsables du reporting de la direction financière", "Indicateurs calculables, modèle de données, rapports qui s'actualisent seuls", "3 jours en 6 demi-journées, plus 2 h de suivi"],
                ["<a href=\"/formations/data-literacy\">Décider avec les données (data literacy)</a>", "DAF, trésoriers, membres du comité de direction", "Questionner un indicateur, repérer un chiffre fragile, rédiger une note de décision", "2 jours en 4 demi-journées, plus 2 h de suivi"],
                ["<a href=\"/formations/ia-generative-dirigeants\">IA générative pour dirigeants</a>", "DAF qui porte la décision et le budget de l'IA", "Choisir les usages, construire le budget, cadrer un projet pilote", "1 jour en 2 demi-journées, ou 2 heures"],
                ["<a href=\"/formations/securite-donnees-dirigeants\">Sécurité des données et sauvegardes pour dirigeants</a>", "DAF et référent informatique", "Sauvegardes, accès, prestataires, réaction à un incident", "2 jours en 4 demi-journées, plus 2 h de point d'étape"],
                ["<a href=\"/formations/cybersecurite-employes\">Cybersécurité pour les employés</a>", "Toute l'équipe, comptables fournisseurs en priorité", "Hameçonnage, mots de passe, double authentification, fraude au virement", "1 jour, plus une demi-journée pour les postes sensibles"],
                ["<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>", "DAF membre du groupe qui encadre l'IA", "Charte, inventaire des usages, rôles et contrôles", "2 jours en 4 demi-journées"],
                ["<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>", "Chef comptable et équipe comptable sous Odoo", "Plan, journaux, taxes, rapprochements, verrouillage et états OHADA", "3 jours, plus une demi-journée à la première clôture"],
                ["<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>", "Trésorerie et comptabilité", "Classeurs de prévision fiables, formules, contrôles", "2 jours en 4 demi-journées"],
                ["<a href=\"/formations/adoption-erp\">Réussir l'adoption d'un ERP</a>", "DAF qui pilote un changement de logiciel de gestion", "Choix, reprise des données, rôles, adoption", "3 jours en 6 demi-journées"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre direction financière avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des directeurs financiers. Son travail de développeur et d'intégrateur le place à l'endroit exact où naissent les chiffres qu'un DAF doit défendre : paramétrage d'Odoo et de Dolibarr, import des relevés, règles de rapprochement, exports vers un tableau de bord, automatisations qui envoient une alerte ou une relance, assistants d'IA reliés à des logiciels en service. Il sait ce qu'un outil calcule vraiment et ce qu'il laisse croire. Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience, déclare plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées et a travaillé dans " . count((array) fait('pays_travailles')) . " pays d'Afrique, d'Europe et d'Amérique du Nord. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle, et co-fondé <a href=\"https://audyxa.com\">Audyxa</a>.",
                "Il n'est ni directeur financier, ni expert-comptable, ni commissaire aux comptes, et aucun éditeur ne l'a certifié. Il enseigne l'outil, la méthode et les contrôles ; le choix d'un financement, l'arrêté des comptes, les positions fiscales et la décision de payer restent à la direction financière et à ses conseils. Les séances se tiennent en petit groupe, sur vos exports pseudonymisés et vos propres logiciels ; chaque participant repart avec des fichiers modifiables, et aucun gain de temps n'est annoncé avant d'avoir été mesuré chez vous.",
                "Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. Toutes les <a href=\"/formations/\">formations</a> sont classées par domaine, dont <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a> et <a href=\"/formations/domaine/transformation-digitale\">transformation digitale</a>. Quand le besoin dépasse la formation, par exemple relier les banques au logiciel de gestion ou construire le tableau de bord du conseil, il relève de l'<a href=\"/services/integration-odoo\">intégration Odoo</a>, de l'<a href=\"/services/api-rest-integrations\">intégration d'API</a> ou d'une mission de <a href=\"/services/consultant-digitalisation\">conseil en digitalisation</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former votre direction financière ?",
            'texte' => "Prévoyez la trésorerie à partir des paiements constatés et non des échéances, faites calculer par le tableur et rédiger par l'assistant, verrouillez les périodes closes, ouvrez le dossier des commissaires aux comptes dès le début de l'exercice, comptez ce que coûtent vraiment vos abonnements, et ne laissez aucun canal, ni courriel, ni appel, ni visage à l'écran, remplacer le contre-appel et la double validation : c'est la procédure, et non l'outil, qui protège la trésorerie.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre direction financière à la prévision, aux clôtures et à la sécurité des paiements ?",
            'texte'  => "Indiquez la taille de l'équipe et ses postes, vos banques et votre logiciel de gestion, le pays, et le chantier qui vous coûte le plus aujourd'hui : prévision, clôture, tableaux de bord ou paiements. Vous recevez une réponse sous " . fait('delai_reponse') . ", puis une proposition de parcours et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un parcours pour directeurs financiers'],
        ],
    ],

    'faq' => [
        ['q' => "L'IA peut-elle faire la prévision de trésorerie à la place du trésorier ?", 'r' => "Non. Elle aide à lister les hypothèses, à écrire les questions à poser aux commerciaux et à commenter les écarts. Les montants, eux, viennent des relevés, des factures, des commandes et des échéanciers, et sont calculés dans le tableur ou le logiciel de gestion. Une prévision dont personne ne sait refaire les chiffres ne sert pas à négocier avec une banque."],
        ['q' => "Par quel chantier une direction financière doit-elle commencer ?", 'r' => "Le plus souvent par la position de trésorerie quotidienne et la procédure de paiement : ce sont les deux chantiers les plus rapides à mettre en place et ceux qui protègent le plus. La prévision à 13 semaines vient ensuite, puis la clôture et les tableaux de bord. La demi-journée de cartographie qui ouvre le parcours sert à confirmer cet ordre chez vous."],
        ['q' => "Comment se protéger de la fraude au président quand la voix ou le visage sont imités ?", 'r' => "En ne faisant jamais confiance au canal qui apporte la demande. Toute demande urgente ou confidentielle de paiement est vérifiée par un appel passé par vous, sur un numéro déjà enregistré, à une personne que vous choisissez ; deux personnes valident, dont une qui n'a pas reçu la demande. Le cas d'Arup à Hong Kong, où 15 virements sont partis après une fausse visioconférence, sert d'exercice en séance."],
        ['q' => "Faut-il renoncer à la vérification du bénéficiaire pour nos fichiers de paiements groupés ?", 'r' => "Le règlement (UE) 2024/886 le permet aux entreprises de la zone euro, mais il prévoit aussi qu'elles soient informées des conséquences sur la responsabilité de la banque et sur leur droit au remboursement. Le parcours recommande de garder la vérification et de nettoyer plutôt le fichier fournisseurs, pour que les noms enregistrés correspondent à ceux des comptes. La décision appartient à la direction, par écrit."],
        ['q' => "Peut-on donner nos résultats non publiés à un assistant d'IA pour préparer la communication ?", 'r' => "Pas sans précaution. Pour une société cotée dans l'Union européenne, ces résultats sont en général une information privilégiée, et l'article 10 du règlement sur les abus de marché vise leur divulgation hors du cadre normal du travail. On travaille alors sur des montants fictifs ou avec un outil couvert par un contrat qui exclut toute réutilisation, après avis du juriste."],
        ['q' => "Notre commissaire aux comptes acceptera-t-il des chiffres produits par une automatisation ?", 'r' => "Il appréciera les chiffres selon ses propres normes, et l'article 718 de l'Acte uniforme lui permet de demander à tout moment les pièces qu'il juge utiles. Ce qu'il faut pouvoir lui montrer : la source des données, la règle appliquée, la personne qui a contrôlé le résultat et les périodes verrouillées. Le parcours apprend à tenir cette documentation au fil de l'exercice."],
        ['q' => "Nos banques n'exportent pas de fichiers standard : la formation reste-t-elle utile ?", 'r' => "Oui. Selon la banque, les relevés arrivent dans un format standard, en tableur ou seulement en PDF ; les exercices partent de ce que vos banques fournissent réellement. Odoo 20.0 accepte plusieurs formats d'import, dont CAMT.053, CSV, XLSX et OFX, et un tableau de correspondance suffit souvent pour un relevé non standard."],
        ['q' => "Comment arbitrer entre un tableur, un logiciel de gestion et un outil de tableaux de bord ?", 'r' => "En comparant le coût complet sur trois ans, et pas seulement le prix de la licence : intégration, formation, temps interne, maintenance, sortie des données. Le tableur reste le bon outil pour une prévision et des scénarios ; le logiciel de gestion porte les écritures et les paiements ; l'outil de visualisation sert quand plusieurs personnes lisent les mêmes indicateurs chaque mois."],
        ['q' => "Le directeur financier doit-il suivre tout le parcours ?", 'r' => "Il suit au moins la première matinée, l'après-midi consacré au pilotage et la dernière matinée, celle des outils et des paiements. Les séances sur la clôture et la prévision peuvent être confiées au chef comptable et au trésorier, à condition que le DAF sache relire ce qu'ils produisent."],
        ['q' => "Richard SALANON a-t-il été directeur financier ?", 'r' => "Non, et il le dit dès la première séance. Il est consultant en digitalisation et développeur ; il a déjà formé des directeurs financiers à l'usage des outils, de l'IA et des automatisations. Les décisions financières, comptables et fiscales restent celles de votre direction et de ses conseils."],
        ['q' => "Combien coûte le parcours, et comment le payer ?", 'r' => "Il est chiffré sur devis selon le nombre de participants, de banques, de sociétés et de devises, le lieu et le suivi retenu. Le premier échange, le cadrage et le devis sont gratuits ; le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "EUR-Lex, règlement (UE) 2024/886 du 13 mars 2024 sur les virements instantanés en euros, articles 5 ter et 5 quater (vérification du bénéficiaire)", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32024R0886', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement (UE) n° 596/2014 sur les abus de marché, article 10 (divulgation illicite d'informations privilégiées)", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32014R0596', 'date' => '2026-10-05'],
        ['titre' => "FBI, Internet Crime Complaint Center (IC3), rapport annuel 2025 : compromission de messagerie d'entreprise et fraudes utilisant l'IA", 'url' => 'https://www.ic3.gov/AnnualReport/Reports/2025_IC3Report.pdf', 'date' => '2026-10-05'],
        ['titre' => "The Guardian, UK engineering firm Arup falls victim to £20m deepfake scam (17 mai 2024)", 'url' => 'https://www.theguardian.com/technology/article/2024/may/17/uk-engineering-arup-deepfake-scam-hong-kong-ai-video', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, portail de la Plateforme interopérable du système de paiement instantané (PI-SPI) : foire aux questions et glossaire", 'url' => 'https://pispi.bceao.int/foire-aux-questions', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, portail PI-SPI : chiffres clés", 'url' => 'https://pispi.bceao.int/chiffres-cles', 'date' => '2026-10-05'],
        ['titre' => "Acte uniforme relatif au droit des sociétés commerciales et du GIE, article 137 (établissement et arrêté des états financiers de synthèse), texte publié par Droitguinéen", 'url' => 'https://droitguineen.com/lois/acte-uniforme-societes-commerciales-auscgie/article/137', 'date' => '2026-10-05'],
        ['titre' => "Acte uniforme relatif au droit des sociétés commerciales et du GIE, article 138 (rapport de gestion)", 'url' => 'https://droitguineen.com/lois/acte-uniforme-societes-commerciales-auscgie/article/138', 'date' => '2026-10-05'],
        ['titre' => "Acte uniforme relatif au droit des sociétés commerciales et du GIE, article 140 (envoi aux commissaires aux comptes et délai de l'assemblée)", 'url' => 'https://droitguineen.com/lois/acte-uniforme-societes-commerciales-auscgie/article/140', 'date' => '2026-10-05'],
        ['titre' => "Acte uniforme relatif au droit des sociétés commerciales et du GIE, article 718 (vérifications du commissaire aux comptes)", 'url' => 'https://droitguineen.com/lois/acte-uniforme-societes-commerciales-auscgie/article/718', 'date' => '2026-10-05'],
        ['titre' => "Acte uniforme relatif au droit des sociétés commerciales et du GIE, article 720 (secret professionnel inopposable au commissaire aux comptes)", 'url' => 'https://droitguineen.com/lois/acte-uniforme-societes-commerciales-auscgie/article/720', 'date' => '2026-10-05'],
        ['titre' => "Acte uniforme relatif au droit des sociétés commerciales et du GIE, article 890 (états financiers ne donnant pas une image fidèle)", 'url' => 'https://droitguineen.com/lois/acte-uniforme-societes-commerciales-auscgie/article/890', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : transactions bancaires et formats d'import des relevés", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/accounting/bank/transactions.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : clôture de fin d'exercice et dates de verrouillage", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/accounting/reporting/year_end.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page Tarification", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, tarification de Power BI (Pro et Premium par utilisateur)", 'url' => 'https://www.microsoft.com/fr-fr/power-platform/products/power-bi/pricing', 'date' => '2026-10-05'],
        ['titre' => "n8n, tarifs de n8n Cloud", 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, règlement général sur la protection des données, chapitre IV (responsable du traitement et sécurité)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-dirigeants', 'power-bi-looker-studio', 'data-literacy', 'ia-generative-dirigeants', 'securite-donnees-dirigeants', 'cybersecurite-employes'],
        'services'    => ['formation-en-entreprise', 'integration-odoo', 'consultant-digitalisation'],
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
