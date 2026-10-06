<?php
// ============================================================
// data/pays/canada.php · Page pays « Canada » (vague 1D, tranche 3, devis en CAD).
// Faits externes vérifiés le 06/10/2026 : Commission d'accès à l'information du Québec,
// Justice Canada (LPRPDE, langues officielles), LEGISinfo (C-27, C-36), Revenu Québec,
// Agence du revenu du Canada, OQLF, ministère de l'Emploi et de la Solidarité sociale
// du Québec, Statistique Canada, DataReportal, Interac, Montréal International, IANA.
// Clés de fiche absentes faute de source confirmée : facturation, ecommerce, agregateurs.
// Clé 'ohada' absente : le Canada n'est pas membre de l'OHADA.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => "Des logiciels, des automatisations et de l'IA conformes à la Loi 25 pour les entreprises québécoises et canadiennes, réalisés à distance depuis Cotonou",
    'title'   => "Développeur et consultant IA au Canada | Richard SALANON",
    'meta'    => "Sites, applications, automatisation, IA et formations pour les entreprises du Québec et du Canada : Loi 25, français, taxes et devis en dollars canadiens.",
    'en_bref' => "Richard SALANON réalise pour les entreprises du Canada, surtout francophones et québécoises, des sites, des applications, des automatisations et des intégrations d'IA, et forme les équipes. Il travaille à distance depuis Cotonou, avec cinq ou six heures d'écart selon la saison, en français et sur devis en dollars canadiens. Chaque projet est cadré pour la Loi 25, la Charte de la langue française et le régime de la TPS et de la TVQ.",
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'fiche' => [
        'capitale' => ['v' => 'Ottawa, dans la région de la capitale nationale', 'source' => 'https://fr.wikipedia.org/wiki/Ottawa', 'date' => '2026-10-06'],
        'villes' => ['v' => ['Montréal', 'Québec', 'Toronto', 'Vancouver'], 'source' => 'https://www150.statcan.gc.ca/n1/daily-quotidien/260114/dq260114a-fra.htm', 'date' => '2026-10-06'],
        'fuseau' => ['v' => 'Montréal et Québec : UTC-5 en hiver, UTC-4 du deuxième dimanche de mars au premier dimanche de novembre ; Cotonou : UTC+1', 'source' => 'https://data.iana.org/time-zones/tzdb/northamerica', 'date' => '2026-10-06'],
        'indicatif' => ['v' => '+1', 'source' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        'langues' => ['v' => ['Français et anglais (langues officielles du Canada)'], 'source' => 'https://laws-lois.justice.gc.ca/fra/lois/o-3.01/page-1.html', 'date' => '2026-10-06'],
        'population' => ['v' => '41 651 653 habitants au 1er juillet 2025', 'source' => 'https://www150.statcan.gc.ca/n1/daily-quotidien/250924/dq250924a-fra.htm', 'date' => '2026-10-06'],
        'internet' => ['v' => '38,2 millions d\'internautes, soit 95,1 % de la population, fin 2025', 'source' => 'https://datareportal.com/reports/digital-2026-canada', 'date' => '2026-10-06'],
        'mobile' => ['v' => '42,4 millions de connexions mobiles actives fin 2025, soit 106 % de la population', 'source' => 'https://datareportal.com/reports/digital-2026-canada', 'date' => '2026-10-06'],
        'secteurs' => ['v' => ['Intelligence artificielle à Montréal : plus de 1 400 chercheurs et experts à Mila, 60 000 travailleurs aux compétences liées à l\'IA'], 'source' => 'https://www.montrealinternational.com/fr/secteurs/intelligence-artificielle/', 'date' => '2026-10-06'],
        'devise' => ['v' => 'Dollar canadien (CAD)', 'source' => 'https://www.banqueducanada.ca/taux/taux-de-change/', 'date' => '2026-10-06'],
        'operateurs' => ['v' => ['Débit Interac : 6,5 milliards d\'opérations en 2023', 'Virement Interac : 1,16 milliard d\'opérations en 2023'], 'source' => 'https://www.interac.ca/en/content/business/interac-by-the-numbers/', 'date' => '2026-10-06'],
        'donnees' => ['v' => 'Fédéral : LPRPDE ; Québec, Alberta et Colombie-Britannique : lois du secteur privé essentiellement similaires', 'source' => 'https://www.priv.gc.ca/fr/sujets-lies-a-la-protection-de-la-vie-privee/lois-sur-la-protection-des-renseignements-personnels-au-canada/02_05_d_15/', 'date' => '2026-10-06'],
        'autorite' => ['v' => 'Commission d\'accès à l\'information du Québec ; Commissariat à la protection de la vie privée du Canada pour le fédéral', 'source' => 'https://www.priv.gc.ca/fr/a-propos-du-commissariat/ce-que-nous-faisons/collaboration-avec-les-provinces-et-les-territoires/lois-et-organismes-de-surveillance-provinciaux-et-territoriaux-en-matiere-de-protection-de-la-vie-privee/', 'date' => '2026-10-06'],
        'tva' => ['v' => 'TPS fédérale et TVQ ; un service acquis d\'un non-résident non inscrit pour une utilisation commerciale à 90 % ou plus n\'entraîne ni TPS ni TVQ à verser', 'source' => 'https://www.revenuquebec.ca/fr/entreprises/taxes/tpstvh-et-tvq/situations-particulieres-liees-a-la-tpstvh-et-a-la-tvq/importations/achat-de-services-ou-de-biens-meubles-incorporels-a-lexterieur-du-canada/', 'date' => '2026-10-06'],
        'financement' => ['v' => 'Québec : loi du 1 % pour les employeurs dont la masse salariale dépasse 2 000 000 $ (seuil en vigueur depuis 2015)', 'source' => 'https://cdn-contenu.quebec.ca/cdn-contenu/adm/min/emploi-solidarite-sociale/publications-adm/rapport/RA_Rapport_quinquennal_LDRCMO_2018-2023.pdf', 'date' => '2026-10-06'],
    ],

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Cinq heures en heure d\'été, six heures en heure normale (Montréal en retard)'],
        ['l' => 'Devis', 'v' => 'En dollars canadiens (CAD)'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que pèse le numérique canadien, et qu'en déduire pour votre projet ?",
            'paragraphes' => [
                "Le Canada comptait 41 651 653 habitants au 1er juillet 2025, selon l'estimation de Statistique Canada. DataReportal, dans son rapport Digital 2026, compte 38,2 millions d'internautes à la fin de 2025, soit 95,1 % de la population, et 42,4 millions de connexions mobiles actives, soit 106 % des habitants, d'après les données de GSMA Intelligence. Ces chiffres tranchent avec ceux de bien des marchés où Richard intervient : le public est connecté, équipé d'un téléphone récent et habitué à payer en ligne.",
                "Pour un projet, la question n'est donc pas de savoir si les clients sont en ligne, mais ce qu'ils exigent de l'entreprise. Un site québécois qui traite des renseignements personnels doit répondre à la Loi 25. Une interface destinée à des consommateurs du Québec se présente d'abord en français. Un logiciel facturé par un prestataire étranger pose la question de la TPS et de la TVQ. La valeur d'un projet se joue autant dans ces choix juridiques que dans la technique.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi Montréal compte-t-elle autant pour les projets d\'IA et d\'automatisation ?',
            'paragraphes' => [
                "Montréal International décrit le Grand Montréal comme l'un des pôles d'intelligence artificielle les plus dynamiques au monde : plus de 1 400 chercheurs et experts à Mila, 60 000 travailleurs aux compétences liées à l'IA et plus de 20 000 étudiants dans des programmes liés à l'IA au Québec. L'organisme y chiffre aussi à 37 % l'avantage-coût moyen par rapport aux grandes villes d'Amérique du Nord.",
                "Cette concentration de talents a deux effets pour une entreprise qui cherche un prestataire. Elle fait monter le coût d'un développeur local, ce qui explique l'intérêt de confier une partie du travail à une équipe à distance. Elle élève aussi le niveau d'exigence : les dirigeants montréalais connaissent les modèles de langage, posent des questions précises sur la confidentialité des données et attendent un cadrage sérieux avant d'autoriser le moindre test sur des données réelles.",
            ],
        ],
        [
            'type'  => 'fiche',
            'titre' => 'Quels repères retenir pour travailler avec une entreprise canadienne ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment un site canadien encaisse-t-il ses clients, et que faut-il brancher ?',
            'paragraphes' => [
                "Au Canada, l'essentiel des paiements se règle par carte, par Débit Interac et par Virement Interac. Interac publie, pour 2023, 6,5 milliards d'opérations par Débit Interac et 1,16 milliard par Virement Interac. Le client attend de pouvoir payer avec sa carte, son compte bancaire ou un portefeuille sur son téléphone, sans créer de compte supplémentaire.",
                "Pour un site marchand, le travail consiste à brancher une passerelle de paiement par carte, à proposer le virement ou le débit lorsque le fournisseur le permet, et à rapprocher chaque encaissement de sa commande et de sa facture. Les frais et les délais de versement dépendent de chaque fournisseur et figurent dans son contrat : ils ne se déduisent pas d'une page de présentation. Richard prépare le dossier technique, teste en environnement d'essai et vérifie les cas d'échec avant la mise en ligne.",
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'Comment choisir entre carte, Interac et facturation à terme ?',
            'intro'  => 'Le montage dépend de ce que vous vendez et à qui. Voici les options courantes pour une entreprise canadienne.',
            'items'  => [
                ['titre' => 'Carte de crédit ou de débit en ligne', 'texte' => "C'est le moyen par défaut d'une boutique ou d'un abonnement. La passerelle gère la saisie sécurisée du numéro de carte, ce qui évite à votre site de le stocker. Le rapprochement se fait par un identifiant de transaction renvoyé à chaque paiement."],
                ['titre' => 'Virement Interac pour les ventes entre entreprises', 'texte' => "Pour des montants plus élevés ou des clients qui préfèrent leur banque, le virement évite les frais de carte. Il demande un suivi des paiements reçus, car la confirmation n'arrive pas toujours dans la même seconde que la commande."],
                ['titre' => 'Facture à 30 jours et relances automatisées', 'texte' => "Entre entreprises, la facture payable à terme reste très courante. Le logiciel émet la facture, calcule les taxes, envoie des rappels et marque le règlement quand il arrive : un flux n8n ou une fonction d'Odoo s'en charge."],
                ['titre' => 'Abonnements récurrents', 'texte' => "Pour un service en ligne, le prélèvement récurrent par carte suppose de gérer les cartes expirées, les paiements refusés et le droit du client de résilier. Ces cas se prévoient dans la conception, pas après la première relance."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales changent un projet numérique au Québec et au Canada ?',
            'paragraphes' => [
                "Deux régimes de protection des renseignements personnels se superposent. Au Québec, la loi sur les renseignements personnels dans le secteur privé, profondément modifiée par la Loi 25, est appliquée par la Commission d'accès à l'information. Pour les activités commerciales relevant du fédéral, c'est la Loi sur la protection des renseignements personnels et les documents électroniques, la LPRPDE, qui s'applique, sous la surveillance du Commissariat à la protection de la vie privée du Canada. Le Canada n'est pas membre de l'OHADA : aucun plan comptable commun n'est imposé, et la tenue des comptes se règle avec votre comptable.",
                "La Commission d'accès à l'information précise que la loi vise les renseignements qu'une entreprise recueille, détient, utilise ou communique, quel que soit le support, qu'elle les conserve elle-même ou les confie à un tiers, et qu'elle s'étend aux organisations hors Québec qui exercent des activités commerciales au Québec. Votre entreprise reste donc responsable des données de vos clients même lorsqu'un prestataire les héberge ou les manipule pour son compte.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que prévoit la Loi 25 quand un prestataire situé hors du Québec touche à vos données ?',
            'intro' => 'La Commission d\'accès à l\'information décrit ces obligations pour les entreprises privées ; elles conditionnent la façon dont Richard organise son accès à vos systèmes.',
            'items' => [
                ['titre' => 'Une évaluation des facteurs relatifs à la vie privée', 'texte' => "Depuis septembre 2023, avant de communiquer un renseignement personnel à l'extérieur du Québec, ou de confier à un tiers hors Québec la tâche de le recueillir, de l'utiliser, de le communiquer ou de le conserver pour votre compte, l'entreprise réalise une évaluation des facteurs relatifs à la vie privée. La communication n'a lieu que si l'évaluation démontre une protection adéquate."],
                ['titre' => 'Une entente écrite', 'texte' => "La communication hors Québec fait toujours l'objet d'une entente écrite. Pour un projet confié à Cotonou, le contrat de service précise donc les données accessibles, les finalités, la durée de conservation et la restitution ou la destruction à la fin du mandat."],
                ['titre' => 'Un responsable désigné et publié', 'texte' => "La personne qui a la plus haute autorité dans l'entreprise est par défaut responsable de la protection des renseignements personnels, et peut déléguer par écrit. Le titre et les coordonnées du responsable figurent sur le site de l'entreprise : un site que Richard livre contient donc une page ou un lien prévus pour cela."],
                ['titre' => 'Des incidents consignés et déclarés', 'texte' => "Un incident de confidentialité (accès non autorisé, perte, cyberattaque) oblige à réduire les risques, à tenir un registre et, s'il présente un risque de préjudice sérieux, à aviser la Commission et les personnes concernées. L'entreprise reste responsable de ces démarches quand un tiers conserve les données."],
                ['titre' => 'Des décisions automatisées expliquées', 'texte' => "Une décision fondée exclusivement sur un traitement automatisé, par exemple un octroi de crédit ou la priorité donnée à une demande, doit être signalée à la personne au plus tard lors de la décision. Sur demande, l'entreprise explique les renseignements utilisés et les principaux facteurs, et la personne peut présenter ses observations à un employé capable de réviser."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que risque une entreprise qui ne respecte pas la Loi 25 ?',
            'paragraphes' => [
                "Selon la Commission d'accès à l'information, elle peut imposer des sanctions administratives pécuniaires pouvant atteindre 2 % du chiffre d'affaires mondial ou 10 millions de dollars, notamment pour une collecte ou une communication contraires à la loi, une information insuffisante des personnes, l'absence de déclaration d'un incident à risque de préjudice sérieux ou des mesures de sécurité négligées. Elle peut aussi engager des poursuites pénales : pour une entreprise, l'amende va de 15 000 $ à 25 millions de dollars ou, si ce montant est plus élevé, 4 % du chiffre d'affaires mondial de l'exercice précédent, et elle double en cas de récidive.",
                "Ces montants expliquent le soin pris dans la préparation d'un projet. Richard travaille de préférence sur des données fictives ou de test, limite les accès aux seules personnes qui en ont besoin, et consigne dans le cadrage ce qui est stocké, où et pour combien de temps. Les renseignements réels ne sont ouverts qu'après l'évaluation et l'entente écrites décrites plus haut.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que dit la LPRPDE sur les données confiées à un prestataire à l\'étranger ?',
            'paragraphes' => [
                "Le texte de la LPRPDE pose, dans son annexe 1, que l'organisation est responsable des renseignements personnels qu'elle a en sa possession ou sous sa garde, y compris ceux confiés à une tierce partie aux fins de traitement, et qu'elle doit fournir par contrat ou autrement un degré comparable de protection. La loi définit aussi l'atteinte aux mesures de sécurité et exige une déclaration au Commissariat lorsqu'une atteinte présente un risque réel de préjudice grave pour une personne.",
                "En pratique, le contrat avec Richard reprend ces deux points : une clause de protection comparable, et une obligation de signaler sans délai toute atteinte à votre responsable, pour que vous puissiez déclarer à votre tour. La même clause sert pour la Loi 25, ce qui évite de maintenir deux textes différents.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en est l\'encadrement fédéral de l\'IA et de la vie privée en 2026 ?',
            'paragraphes' => [
                "Le projet de loi C-27, qui comprenait la Loi sur l'intelligence artificielle et les données, apparaît sur LEGISinfo comme un texte d'une session antérieure, dont la dernière étape est la deuxième lecture et le renvoi en comité le 24 avril 2023 : la session s'est terminée le 6 janvier 2025 et il n'a pas été adopté. Le 15 juin 2026, le ministre de l'Intelligence artificielle et de l'Innovation numérique a déposé le projet de loi C-36, qui édicte la Loi visant à protéger la vie privée et les données des consommateurs et modifie la LPRPDE. LEGISinfo indique que la première lecture est terminée et qu'aucune activité de deuxième lecture n'a eu lieu.",
                "Le 4 juin 2026, le premier ministre a présenté une stratégie nationale en matière d'IA intitulée « L'IA pour tous », citée dans la fiche de LEGISinfo. Pour une entreprise, la conséquence est simple : en attendant un texte fédéral adopté, les règles qui s'appliquent à un projet d'IA sont celles de la vie privée, de la protection des consommateurs et des contrats. Richard suit ce dossier et adapte le cadrage dès qu'une loi est promulguée.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que prévoit la Charte de la langue française pour un site, un logiciel ou des conditions d\'utilisation ?',
            'paragraphes' => [
                "L'Office québécois de la langue française rappelle que toutes les entreprises ont des obligations touchant la langue du travail et la langue du commerce et des affaires : les travailleurs ont le droit d'exercer en français, et les consommateurs ont le droit d'être informés et servis en français. Les entreprises qui emploient 25 personnes ou plus au Québec pendant six mois doivent s'inscrire à l'Office et entreprendre une démarche de francisation. La loi appelée Loi sur la langue officielle et commune du Québec, le français a ajouté des obligations en vigueur depuis le 1er juin 2025 pour les marques de commerce et les noms d'entreprise.",
                "Un point touche directement un service en ligne : depuis le 1er juin 2023, tout nouveau contrat d'adhésion, c'est-à-dire dont les clauses essentielles sont imposées par une partie, doit d'abord être remis en français. Pour un contrat conclu par un moyen technologique, l'obligation est remplie si les clauses types en français sont remises, ou si le moyen technologique est disponible en français et que la version française du contrat y est accessible. Les conditions d'utilisation d'un site ou d'une application destinés au Québec sont donc rédigées et livrées en français. Richard prévoit l'interface, les messages d'erreur, les courriels et les contrats en français dès la conception.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'TPS et TVQ : comment facturer un service rendu par un prestataire non résident ?',
            'legende' => 'Règles de Revenu Québec et de l\'Agence du revenu du Canada sur les services acquis d\'un non-résident, état au 6 octobre 2026',
            'entetes' => ['Situation', 'Ce que disent les sources', 'Ce que cela change'],
            'lignes'  => [
                ['Usage commercial exclusif (90 % ou plus), prestataire non inscrit', "Revenu Québec indique que vous ne payez généralement ni TPS ni TVQ sur des services rendus hors du Canada par un non-résident qui n'exploite pas d'entreprise au Canada et n'est pas tenu de s'inscrire, si vous les acquérez pour un usage exclusif (90 % ou plus) dans vos activités commerciales. L'exemple de la page est un conseiller en informatique des États-Unis qui crée un système pour une entreprise.", "La facture du prestataire ne comporte pas de taxe. Votre comptable conserve la preuve de l'usage commercial."],
                ['Usage commercial inférieur à 90 %', "La TPS et la TVQ s'appliquent, et l'acheteur doit les remettre lui-même à Revenu Québec. L'Agence du revenu du Canada décrit la même logique pour la TPS : autocotisation si l'usage commercial est inférieur à 90 %, avec déclaration à la ligne 405 du formulaire.", "Prévoir l'autocotisation dans la déclaration de taxes de l'entreprise."],
                ['Prestataire inscrit aux fichiers de taxes', "Si le non-résident est inscrit et que la vente est considérée comme effectuée au Québec, l'acheteur lui remet la TPS et la TVQ payables.", "La taxe figure alors sur la facture, et un inscrit peut en demander le crédit de taxe sur les intrants."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi valider la fiscalité de chaque projet avec un comptable québécois ?',
            'paragraphes' => [
                "Les pages officielles décrivent la règle générale, pas votre dossier. Selon qui vous êtes (inscrit ou non, usage commercial exclusif ou mixte, prestataire inscrit ou non), le traitement de la TPS et de la TVQ change. Richard n'établit pas votre position fiscale : il indique sur le devis la nature des services, le pays de réalisation et la devise, et fournit les mentions dont votre comptable a besoin pour appliquer la règle.",
                "Un logiciel de facturation bien structuré, qui sépare le montant, les taxes et les identifiants, se raccorde plus facilement à toute exigence future de facturation électronique. C'est le choix retenu pour les modules de facturation d'Odoo ou de Dolibarr déployés pour une entreprise canadienne.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelle prestation de Richard répond à quelle situation d'une entreprise canadienne ?",
            'legende' => 'Du besoin québécois ou canadien à la prestation qui le résout',
            'entetes' => ['Votre situation', 'Prestation', 'Détail'],
            'lignes'  => [
                ['Confier une partie du développement à une équipe externe sans recruter à Montréal', 'Développement externalisé', '<a href="/services/externalisation-developpement">Externalisation du développement</a> et <a href="/externaliser-developpement-web-montreal">à Montréal</a>'],
                ['Piloter un projet d\'équipe à Québec avec des livrables suivis', 'Développement web externalisé', '<a href="/externaliser-developpement-web-quebec">Externaliser le développement web à Québec</a>'],
                ['Relier un modèle de langage à vos outils sans exposer des renseignements personnels', 'Intégration d\'IA', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Supprimer les saisies répétées entre le CRM, la facturation et le courriel', 'Automatisation', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Répondre aux clients sur WhatsApp ou sur le site avec des garde-fous', 'Assistant conversationnel', '<a href="/services/agents-ia-chatbot-whatsapp">Agents IA et chatbot WhatsApp</a>'],
                ['Relier le logiciel de gestion, la boutique et le service de paiement', 'Interfaces de programmation', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Déployer un ERP avec facturation, taxes et inventaire', 'ERP complet', '<a href="/services/integration-odoo">Intégration d\'Odoo</a>'],
                ['Équiper une petite structure d\'un ERP léger et hébergé chez vous', 'ERP modulaire', '<a href="/services/integration-dolibarr">Intégration de Dolibarr</a>'],
                ['Créer un site bilingue ou entièrement en français pour le Québec', 'Site vitrine', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Vendre en ligne avec paiement par carte et Interac', 'Boutique en ligne', '<a href="/services/site-e-commerce">Site e-commerce</a>'],
                ['Bâtir un espace client ou un logiciel par abonnement', 'Logiciel en ligne', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Former les équipes à l\'IA avec un cadre de confidentialité', 'Formation', '<a href="/formation-ia-entreprise-montreal">Formation IA à Montréal</a> et <a href="/formation-ia-entreprise-quebec">à Québec</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un projet numérique dans les secteurs porteurs du Canada ?',
            'items' => [
                [
                    'secteur'  => 'Entreprises d\'intelligence artificielle et de logiciel à Montréal',
                    'probleme' => 'Une jeune entreprise du Grand Montréal, où Montréal International recense 60 000 travailleurs aux compétences liées à l\'IA, cherche des mains supplémentaires pour l\'interface, les tests et l\'intégration, sans alourdir sa masse salariale.',
                    'solution' => 'Une équipe externe de Richard prend un lot borné : composants web, connecteurs, automatisation de la recette. Le dépôt de code reste chez le client, les accès sont limités, et les données de test sont fictives.',
                    'lien'     => ['url' => '/externaliser-developpement-web-montreal', 'texte' => 'Externaliser le développement à Montréal'],
                ],
                [
                    'secteur'  => 'Cabinets et services professionnels du Québec',
                    'probleme' => 'Un cabinet de comptabilité, de droit ou de conseil reçoit chaque jour des courriels, des pièces et des demandes de clients, et le secret professionnel lui interdit toute fuite vers un outil mal contrôlé.',
                    'solution' => 'Un flux d\'automatisation qui classe les pièces, extrait les champs utiles et prépare une réponse pour validation humaine, hébergé où le cabinet l\'a choisi, avec journal des accès et évaluation des facteurs relatifs à la vie privée jointe au dossier.',
                    'lien'     => ['url' => '/services/automatisation-ia', 'texte' => 'Automatisation et IA'],
                ],
                [
                    'secteur'  => 'Commerce de détail et vente en ligne au Québec',
                    'probleme' => 'Une boutique québécoise vend sur un modèle de site qui offre une interface en anglais, des courriels de commande non traduits et des conditions de vente rédigées dans une autre langue.',
                    'solution' => 'Une boutique dont tous les parcours existent en français, avec paiement par carte et Interac, courriels transactionnels, conditions de vente remises en français et une version anglaise ajoutée sans affaiblir la première.',
                    'lien'     => ['url' => '/services/site-e-commerce', 'texte' => 'Site e-commerce'],
                ],
                [
                    'secteur'  => 'Entreprises québécoises assujetties à la loi du 1 %',
                    'probleme' => 'Une entreprise dont la masse salariale dépasse 2 000 000 $ doit consacrer l\'équivalent de 1 % à la formation admissible, et ses équipes n\'ont jamais reçu de formation structurée sur l\'IA ou l\'automatisation.',
                    'solution' => 'Un parcours à distance, avec des exercices sur les outils de l\'entreprise, une attestation de présence à prévoir et un contenu décrit assez précisément pour être déclaré. L\'admissibilité de la dépense se confirme avec le comptable avant le premier atelier.',
                    'lien'     => ['url' => '/formation-ia-entreprise-quebec', 'texte' => 'Formation IA à Québec'],
                ],
                [
                    'secteur'  => 'Organisations qui testent des agents conversationnels auprès du public',
                    'probleme' => 'Un assistant en ligne qui répond aux clients peut inventer une règle que l\'entreprise n\'a jamais adoptée, comme l\'a montré la décision Moffatt c. Air Canada rendue en Colombie-Britannique en 2024.',
                    'solution' => 'Un assistant limité à des sources validées, qui cite le document utilisé, transmet à un humain dès qu\'il hésite et conserve l\'historique des échanges, avec une information claire du client sur la nature automatisée de la réponse.',
                    'lien'     => ['url' => '/histoires/air-canada-chatbot', 'texte' => 'L\'histoire d\'Air Canada et de son chatbot'],
                ],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut suivre une formation de Richard au Canada, et avec quel soutien financier ?',
            'paragraphes' => [
                "Chaque session se tient en visioconférence, sur les outils que l'équipe utilise déjà, avec des règles de confidentialité fixées avant le premier exercice. Les parcours sur l'IA sont décrits sur les pages <a href=\"/formation-ia-entreprise-montreal\">formation IA en entreprise à Montréal</a> et <a href=\"/formation-ia-entreprise-quebec\">à Québec</a>. Pour la conformité, la fiche <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a> prépare les équipes à reconnaître un renseignement personnel et à décider quoi ne jamais saisir dans un assistant.",
                "Au Québec, la loi favorisant le développement et la reconnaissance des compétences de la main-d'œuvre, dite loi du 1 %, applique la logique « former ou payer » : l'employeur dont la masse salariale d'une année civile dépasse le montant fixé par règlement, soit 2 000 000 $ depuis 2015 selon le rapport quinquennal du ministère de l'Emploi, doit consacrer à des dépenses de formation admissibles au moins 1 % de cette masse. Il rend compte de son investissement par des déclarations annuelles prévues par la loi, dont une transmise à Revenu Québec. Les dépenses admissibles sont définies par règlement et le gouvernement a élargi en avril 2026 les formations admissibles, notamment la formation informelle comme le coaching entre collègues : vérifiez la version en vigueur avant de budgéter.",
                "Pour les PME québécoises, que la mesure vise en priorité (6 à 99 employés), le guide de la Mesure de formation de la main-d'œuvre de Services Québec, dans sa version mise à jour le 28 juin 2023, prévoit une aide d'au plus 40 % des dépenses admissibles, portée à 65 % pour la formation liée à une nouvelle technologie visant à accroître la productivité, aux technologies de l'information et à d'autres situations listées. Le même guide admet la formation à distance, en ligne synchrone ou asynchrone, mais traite avec réserve la formation hors du Québec : elle n'est acceptée pour les formateurs que lorsqu'il est clairement démontré qu'il n'y a pas d'alternative. Une formation donnée à distance depuis Cotonou se soumet donc à Services Québec avant toute inscription.",
                "Autres parcours utiles : <a href=\"/formations/gouvernance-ia\">gouverner l'IA dans l'entreprise</a> pour une charte et un inventaire des usages, <a href=\"/formations/ia-en-entreprise\">l'IA en entreprise</a> pour les équipes, <a href=\"/formations/integrer-ia-logiciels-existants\">l'intégration de l'IA dans les logiciels existants</a> pour les profils techniques et <a href=\"/formations/n8n\">n8n</a> pour automatiser. Le catalogue est sur <a href=\"/formations/\">la page des formations</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment travailler avec Richard depuis Montréal ou Québec, malgré la distance ?',
            'paragraphes' => [
                "Le décalage dépend de la saison. Cotonou est à UTC+1 toute l'année. Montréal et Québec sont à UTC-4 de la mi-mars au début de novembre, puis à UTC-5 : l'écart est de cinq heures pendant l'heure d'été et de six heures pendant l'heure normale. En 2026, l'heure d'été se termine le dimanche 1er novembre ; elle reprendra le dimanche 14 mars 2027. Un rendez-vous fixé à 9 h à Montréal tombe donc à 14 h à Cotonou en été, à 15 h en hiver.",
                "Les plages de Richard vont de 7 h à 20 h heure de Cotonou, soit de 2 h à 15 h à Montréal en été et de 1 h à 14 h en hiver. La matinée québécoise est la meilleure fenêtre de travail commun : les points d'équipe se placent entre 9 h et 12 h, heure de Montréal, et le reste de la journée du client sert à relire ce que Richard a livré en fin de soirée à Cotonou. Une partie de la Côte-Nord et les Îles-de-la-Madeleine suivent un autre fuseau : précisez-le au cadrage.",
                "La langue de travail est le français, y compris pour la documentation, les interfaces et les contrats. Les devis sont libellés en dollars canadiens, ce qui évite de raisonner en devise étrangère. Le suivi peut passer par des visioconférences, un tableau de tâches partagé et des comptes rendus écrits, et toute demande reçoit une réponse sous 24 heures. Un contrat de service signé avant le premier accès aux données fixe le périmètre, la confidentialité, la propriété du code et la clause de protection décrite plus haut.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien coûte un projet numérique pour une entreprise canadienne ?',
            'paragraphes' => [
                "Les projets pour le Canada se chiffrent sur devis, en dollars canadiens. Le devis suit un cadrage, au cours duquel Richard décrit le périmètre, les livrables, le calendrier et ce qui reste à votre charge. Un même mot, « site » ou « assistant », recouvre des projets très différents selon les exigences de conformité et les intégrations à réaliser.",
                "Plusieurs éléments propres au Canada font varier le montant. La présence de renseignements personnels : un projet qui en traite demande une évaluation, un contrat plus détaillé, un journal des accès et des tests sur données fictives, donc plus de travail. Le bilinguisme : une interface française complète, avec une version anglaise, double le contenu à rédiger, à tester et à tenir à jour. Les intégrations : raccorder un CRM, un logiciel comptable ou une passerelle de paiement existants coûte plus ou moins selon la qualité de leur interface. Enfin la formation, qui s'ajoute à la réalisation lorsque l'équipe doit devenir autonome.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi un contrat de sous-traitance sans évaluation des facteurs relatifs à la vie privée est-il risqué au Québec ?',
            'texte' => 'La Commission d\'accès à l\'information indique qu\'avant de confier à un tiers hors du Québec la tâche de recueillir, d\'utiliser, de communiquer ou de conserver des renseignements personnels, l\'entreprise réalise une évaluation et conclut une entente écrite, et qu\'elle demeure toujours responsable des renseignements confiés. Un prestataire qui accepte d\'ouvrir votre base de clients dès la signature, sans évaluation, vous expose à une sanction qui peut atteindre 10 millions de dollars ou 2 % du chiffre d\'affaires mondial. Demandez cette étape avant le premier accès.',
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quels pièges guettent un projet numérique mené pour le Canada ?',
            'intro'  => 'Chacun de ces pièges découle d\'une règle canadienne vue plus haut et se désamorce au cadrage.',
            'items'  => [
                ['titre' => 'Livrer une interface en anglais à des clients du Québec', 'texte' => "Les consommateurs ont le droit d'être informés et servis en français, et un nouveau contrat d'adhésion se remet d'abord en français. Un modèle de site américain traduit à moitié, des courriels non traduits ou des conditions d'utilisation uniquement en anglais exposent l'entreprise."],
                ['titre' => 'Croire que la Loi 25 ne vise que les grandes entreprises', 'texte' => "La Commission d'accès à l'information applique la loi à toute entreprise privée qui recueille des renseignements personnels, et les amendes prévues vont d'un minimum de 15 000 $ à 25 millions de dollars ou 4 % du chiffre d'affaires mondial. La taille de l'entreprise ne la dispense pas du responsable désigné ni du registre des incidents."],
                ['titre' => 'Oublier que l\'entreprise reste responsable face à un prestataire', 'texte' => "Confier l'hébergement ou le traitement à un tiers ne transfère pas la responsabilité : la LPRPDE et la loi québécoise disent toutes deux que l'organisation répond des renseignements confiés. Il faut donc un contrat, un registre et un point de contact pour les incidents."],
                ['titre' => 'Prendre une règle de taxe pour acquise', 'texte' => "La règle sur les services acquis d'un non-résident dépend de l'inscription de l'acheteur, du prestataire et de l'usage commercial. Un devis qui ne précise pas la devise, le pays de réalisation et la nature des services complique le travail du comptable."],
                ['titre' => 'Attendre une loi fédérale sur l\'IA pour encadrer ses usages', 'texte' => "Le projet de loi C-36, qui n'a pas dépassé la première lecture, ne tient pas lieu de loi sur l'IA. Les décisions automatisées sont déjà encadrées au Québec : information de la personne, explication sur demande et possibilité de présenter ses observations à un humain."],
                ['titre' => 'Planifier les réunions sans tenir compte du changement d\'heure', 'texte' => "L'écart passe de cinq à six heures le 1er novembre 2026 et revient à cinq heures le 14 mars 2027. Un rendez-vous récurrent fixé en heure de Cotonou glisse d'une heure pour l'équipe québécoise ; fixez-le en heure de Montréal."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier son projet numérique canadien à Richard SALANON ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                "Richard a déjà travaillé avec des entreprises au Canada. Après plus de six ans de métier, une formation à EPITECH en 2022, la conception de Wapy, assistant WhatsApp à IA pour les entreprises d'Afrique francophone, et la co-fondation d'Audyxa, il travaille en français, et des devis en dollars canadiens. Pour un client québécois, chaque projet est cadré selon la Loi 25 dès le départ.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment Richard intervient-il auprès d\'une entreprise canadienne ?',
            'legende' => 'Mode de travail de Richard pour les entreprises du Canada',
            'entetes' => ['Question', 'Réponse'],
            'lignes'  => [
                ['Mode de travail', 'À distance depuis Cotonou, en français, avec des devis en dollars canadiens.'],
                ['Pages pour Montréal et Québec', '<a href="/externaliser-developpement-web-montreal">Externaliser le développement à Montréal</a>, <a href="/externaliser-developpement-web-quebec">à Québec</a>, <a href="/formation-ia-entreprise-montreal">formation IA à Montréal</a> et <a href="/formation-ia-entreprise-quebec">à Québec</a>.'],
                ['Pour aller plus loin', '<a href="/richard-salanon">Le parcours de Richard</a> et <a href="/a-propos/">la page À propos</a>.'],
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous dirigez une entreprise au Canada et avez un projet numérique ?',
            'texte'  => 'Indiquez où vous êtes, ce que le projet doit accomplir et quelles données il touchera : la réponse arrive sous 24 heures, puis un devis en dollars canadiens suit le premier échange.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis'],
        ],
    ],

    'faq' => [
        ['q' => 'Quel est le décalage horaire entre Montréal et Cotonou ?', 'r' => "Cinq heures en heure d'été et six heures en heure normale, Montréal étant en retard sur Cotonou. Cotonou reste à UTC+1 toute l'année, Montréal passe de UTC-5 à UTC-4 du deuxième dimanche de mars au premier dimanche de novembre. L'heure d'été se termine le 1er novembre 2026 et reprend le 14 mars 2027."],
        ['q' => 'La Loi 25 s\'applique-t-elle si le prestataire est au Bénin ?', 'r' => "La loi québécoise s'applique à l'entreprise qui confie des renseignements personnels. Avant de confier à un tiers hors du Québec la tâche de les recueillir, de les utiliser, de les communiquer ou de les conserver, elle réalise une évaluation des facteurs relatifs à la vie privée et conclut une entente écrite, selon la Commission d'accès à l'information."],
        ['q' => 'Qu\'est-ce qu\'une évaluation des facteurs relatifs à la vie privée ?', 'r' => "C'est une analyse qui doit démontrer que les renseignements bénéficieront d'une protection adéquate avant leur communication hors du Québec. La Commission d'accès à l'information publie un guide sur l'évaluation. Richard fournit les éléments techniques à joindre : emplacement des données, accès, chiffrement, durée de conservation."],
        ['q' => 'Quelle autorité contrôle la protection des données au Canada ?', 'r' => "Au Québec, la Commission d'accès à l'information surveille la loi sur le secteur privé. Pour les activités relevant de la LPRPDE, c'est le Commissariat à la protection de la vie privée du Canada. Une entreprise québécoise peut avoir affaire aux deux selon la nature des données et des échanges hors du Québec."],
        ['q' => 'Que risque une entreprise qui ne respecte pas la loi québécoise ?', 'r' => "La Commission peut imposer des sanctions administratives pécuniaires pouvant atteindre 2 % du chiffre d'affaires mondial ou 10 millions de dollars. Des amendes pénales sont aussi prévues : de 15 000 $ à 25 millions de dollars ou 4 % du chiffre d'affaires mondial pour une entreprise, doublées en cas de récidive."],
        ['q' => 'Un site destiné au Québec doit-il être en français ?', 'r' => "Les consommateurs ont le droit d'être informés et servis en français, selon l'Office québécois de la langue française, et tout nouveau contrat d'adhésion doit d'abord être remis en français depuis le 1er juin 2023."],
        ['q' => 'Faut-il payer la TPS et la TVQ sur la facture de Richard ?', 'r' => "Cela dépend de votre situation. Revenu Québec indique que vous ne payez généralement ni TPS ni TVQ sur des services rendus hors du Canada par un non-résident non inscrit, si vous les acquérez pour un usage commercial exclusif (90 % ou plus). Sinon, vous les remettez vous-même. Validez avec votre comptable."],
        ['q' => 'Le Canada a-t-il une loi sur l\'intelligence artificielle ?', 'r' => "Pas à ce jour au fédéral : le projet de loi C-27, qui incluait une loi sur l'IA, n'a pas été adopté. Le projet de loi C-36, déposé le 15 juin 2026, porte sur la vie privée et les données des consommateurs et n'a pas dépassé la première lecture à la Chambre des communes. Les décisions automatisées sont déjà encadrées au Québec."],
        ['q' => 'La formation peut-elle compter dans la loi du 1 % ?', 'r' => "La loi du 1 % s'applique aux employeurs québécois dont la masse salariale dépasse 2 000 000 $. Elle vise des dépenses de formation admissibles définies par règlement. Vérifiez auprès de votre comptable ou de Services Québec qu'une formation donnée à distance par un formateur hors du Québec est admise dans votre dossier."],
        ['q' => 'En quelle monnaie sont établis les devis pour le Canada ?', 'r' => "En dollars canadiens. Chaque projet se chiffre sur devis après un cadrage, selon les exigences de conformité, le bilinguisme et les intégrations."],
        ['q' => 'Richard se déplace-t-il à Montréal ou à Québec ?', 'r' => "Non, l'intervention se fait à distance depuis Cotonou : visioconférences, tableau de tâches partagé et comptes rendus écrits. Les rendez-vous se placent le matin heure de Montréal, qui correspond à l'après-midi à Cotonou."],
    ],

    'sources' => [
        ['titre' => 'Commissariat à la protection de la vie privée du Canada, aperçu des lois sur la protection des renseignements personnels au Canada', 'url' => 'https://www.priv.gc.ca/fr/sujets-lies-a-la-protection-de-la-vie-privee/lois-sur-la-protection-des-renseignements-personnels-au-canada/02_05_d_15/', 'date' => '2026-10-06'],
        ['titre' => 'Commissariat à la protection de la vie privée du Canada, lois et organismes de surveillance provinciaux et territoriaux', 'url' => 'https://www.priv.gc.ca/fr/a-propos-du-commissariat/ce-que-nous-faisons/collaboration-avec-les-provinces-et-les-territoires/lois-et-organismes-de-surveillance-provinciaux-et-territoriaux-en-matiere-de-protection-de-la-vie-privee/', 'date' => '2026-10-06'],
        ['titre' => 'Commission d\'accès à l\'information du Québec, utilisation et communication de renseignements personnels (entreprises privées)', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/information-entreprises-privees/utilisation-communication-renseignements-personnels', 'date' => '2026-10-06'],
        ['titre' => 'Commission d\'accès à l\'information du Québec, sanctions applicables aux entreprises', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/information-entreprises-privees/sanctions-entreprises-poursuites', 'date' => '2026-10-06'],
        ['titre' => 'Commission d\'accès à l\'information du Québec, incidents de confidentialité et mesures de sécurité', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/information-entreprises-privees/incidents-confidentialite-mesures-securite-entreprises', 'date' => '2026-10-06'],
        ['titre' => 'Commission d\'accès à l\'information du Québec, responsabilité des entreprises', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/information-entreprises-privees/responsable-protection-renseignements-personnels-entreprise', 'date' => '2026-10-06'],
        ['titre' => 'Commission d\'accès à l\'information du Québec, champ d\'application de la loi', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/information-entreprises-privees/champ-application-loi_entreprises', 'date' => '2026-10-06'],
        ['titre' => 'Commission d\'accès à l\'information du Québec, principaux changements apportés par la Loi 25', 'url' => 'https://www.cai.gouv.qc.ca/protection-renseignements-personnels/sujets-et-domaines-dinteret/principaux-changements-loi-25', 'date' => '2026-10-06'],
        ['titre' => 'Commissariat à la protection de la vie privée du Canada, la LPRPDE', 'url' => 'https://www.priv.gc.ca/fr/sujets-lies-a-la-protection-de-la-vie-privee/lois-sur-la-protection-des-renseignements-personnels-au-canada/la-loi-sur-la-protection-des-renseignements-personnels-et-les-documents-electroniques-lprpde/', 'date' => '2026-10-06'],
        ['titre' => 'Justice Canada, Loi sur la protection des renseignements personnels et les documents électroniques (texte complet)', 'url' => 'https://laws-lois.justice.gc.ca/fra/lois/p-8.6/TexteComplet.html', 'date' => '2026-10-06'],
        ['titre' => 'Parlement du Canada, LEGISinfo : projet de loi C-36 (45e législature)', 'url' => 'https://www.parl.ca/legisinfo/fr/projet-de-loi/45-1/c-36', 'date' => '2026-10-06'],
        ['titre' => 'Parlement du Canada, LEGISinfo : projet de loi C-27 (44e législature)', 'url' => 'https://www.parl.ca/legisinfo/fr/projet-de-loi/44-1/c-27', 'date' => '2026-10-06'],
        ['titre' => 'Office québécois de la langue française, obligations des entreprises', 'url' => 'https://www.oqlf.gouv.qc.ca/francisation/entreprises/', 'date' => '2026-10-06'],
        ['titre' => 'Office québécois de la langue française, contrats d\'adhésion', 'url' => 'https://www.oqlf.gouv.qc.ca/francisation/entreprises/contrats-adhesion.html', 'date' => '2026-10-06'],
        ['titre' => 'Revenu Québec, achat de services ou de biens meubles incorporels à l\'extérieur du Canada', 'url' => 'https://www.revenuquebec.ca/fr/entreprises/taxes/tpstvh-et-tvq/situations-particulieres-liees-a-la-tpstvh-et-a-la-tvq/importations/achat-de-services-ou-de-biens-meubles-incorporels-a-lexterieur-du-canada/', 'date' => '2026-10-06'],
        ['titre' => 'Agence du revenu du Canada, TPS/TVH sur les importations et exportations', 'url' => 'https://www.canada.ca/en/revenue-agency/services/tax/businesses/topics/gst-hst-businesses/charge-collect-imports-exports.html', 'date' => '2026-10-06'],
        ['titre' => 'Ministère de l\'Emploi et de la Solidarité sociale du Québec, rapport quinquennal sur la Loi favorisant le développement et la reconnaissance des compétences de la main-d\'œuvre', 'url' => 'https://cdn-contenu.quebec.ca/cdn-contenu/adm/min/emploi-solidarite-sociale/publications-adm/rapport/RA_Rapport_quinquennal_LDRCMO_2018-2023.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Services Québec, guide de la Mesure de formation de la main-d\'œuvre, volet entreprises', 'url' => 'https://cdn-contenu.quebec.ca/cdn-contenu/adm/min/emploi-solidarite-sociale/gmse/02Guide_MFOR_volet_entreprises.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Statistique Canada, estimations de la population du Canada : âge et genre, 1er juillet 2025', 'url' => 'https://www150.statcan.gc.ca/n1/daily-quotidien/250924/dq250924a-fra.htm', 'date' => '2026-10-06'],
        ['titre' => 'Statistique Canada, estimations de la population : régions infraprovinciales, 2025', 'url' => 'https://www150.statcan.gc.ca/n1/daily-quotidien/260114/dq260114a-fra.htm', 'date' => '2026-10-06'],
        ['titre' => 'DataReportal, rapport Digital 2026 sur le Canada (chiffres de fin 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-canada', 'date' => '2026-10-06'],
        ['titre' => 'Montréal International, intelligence artificielle', 'url' => 'https://www.montrealinternational.com/fr/secteurs/intelligence-artificielle/', 'date' => '2026-10-06'],
        ['titre' => 'Interac, chiffres clés (volumes d\'opérations 2023)', 'url' => 'https://www.interac.ca/en/content/business/interac-by-the-numbers/', 'date' => '2026-10-06'],
        ['titre' => 'Justice Canada, Loi sur les langues officielles', 'url' => 'https://laws-lois.justice.gc.ca/fra/lois/o-3.01/page-1.html', 'date' => '2026-10-06'],
        ['titre' => 'Wikipédia, Ottawa (capitale du Canada)', 'url' => 'https://fr.wikipedia.org/wiki/Ottawa', 'date' => '2026-10-06'],
        ['titre' => 'UIT, plan de numérotation E.164 : codes de pays (+1)', 'url' => 'https://www.itu.int/dms_pub/itu-t/opb/sp/T-SP-E.164D-2016-PDF-E.pdf', 'date' => '2026-10-06'],
        ['titre' => 'Infobref, assouplissement de la loi du 1 % en avril 2026', 'url' => 'https://infobref.com/assouplissement-loi-formation-2026-04/', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base de données des fuseaux horaires (Amérique du Nord)', 'url' => 'https://data.iana.org/time-zones/tzdb/northamerica', 'date' => '2026-10-06'],
        ['titre' => 'Banque du Canada, taux de change', 'url' => 'https://www.banqueducanada.ca/taux/taux-de-change/', 'date' => '2026-10-06'],
        ['titre' => 'IANA, base de données des fuseaux horaires : Afrique (Cotonou, zone Africa/Lagos)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-06'],
    ],

    'liens' => [
        'services'    => ['externalisation-developpement', 'integration-ia-entreprise', 'automatisation-ia', 'agents-ia-chatbot-whatsapp', 'api-rest-integrations', 'integration-odoo', 'integration-dolibarr', 'site-vitrine-professionnel', 'site-e-commerce', 'saas-espace-client'],
        'formations'  => ['ia-ethique-conformite', 'gouvernance-ia', 'ia-en-entreprise', 'integrer-ia-logiciels-existants', 'n8n', 'ia-generative-dirigeants'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'n8n-vs-make-vs-zapier'],
        'metiers'     => ['juristes-entreprise', 'chefs-entreprise-dirigeants', 'ressources-humaines'],
    ],
];
