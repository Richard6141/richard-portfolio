<?php
// ============================================================
// data/metiers/industrie.php · Page « formations par métier » pour
// l'industrie manufacturière : usines, ateliers de fabrication, services
// maintenance, qualité, magasin et sécurité (vague 1C, univers « Technique
// et terrain », non prioritaire, statut P : Richard PEUT former ce public,
// il ne l'a jamais formé).
// Angle propre : l'usine et ses données de terrain (ordres de fabrication,
// nomenclatures, temps et rebuts, historique des pannes, maintenance
// préventive, contrôles qualité et non-conformités, stocks de matières et
// de pièces de rechange, sécurité au travail, normes ISO). La page sœur
// « agro-industrie » traite la collecte, le négoce agricole et l'export :
// rien ici sur les campagnes, la collecte ou la traçabilité des récoltes.
// Sources lues à la source le 05/10/2026 : ISO (fiches ISO 9001:2015
// annulée, ISO 9001:2026 publiée le 16 septembre 2026, ISO 14001:2026,
// ISO 45001:2018 et ISO/IEC 42001:2023), OIT (Conventions n° 155 et 187
// fondamentales depuis juin 2022, fiche C155 de février 2025, estimations
// de novembre 2023), EUR-Lex (règlement (UE) 2023/1230 sur les machines :
// article 54, annexe I points 5 et 6, annexe III points 1.1.9 et 1.2.1 ;
// directive (UE) 2016/943, article 2 ; directive (UE) 2022/2555 dite NIS 2,
// article 2 et annexe II), Service-Public (document unique d'évaluation
// des risques, vérifié le 22 juillet 2026), CNIL (vidéosurveillance au
// travail ; accès aux locaux et contrôle des horaires, mis à jour le
// 17 juin 2026), ANSSI (guide ANSSI-PA-107 du 10 mars 2025 et guide des
// mesures détaillées), documentation d'Odoo 20.0 (Maintenance, TRS,
// points de contrôle qualité, nomenclatures, numéros de série), wiki de
// Dolibarr (modules BOM et Ordres de fabrication), OHADA (AUDCIF), loi
// béninoise n° 2017-20 (PDF du SGG : articles 383, 394 et 407).
// Faits repris des fiches déjà vérifiées : FDFP, FODEFCA, 3FPT, France
// Compétences, article 4 du règlement européen sur l'IA, tarifs d'Odoo,
// quota WhatsApp de Meta. Richard n'exerce pas ces métiers et n'est
// certifié par aucun éditeur ni organisme de certification.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour l'industrie : fiabiliser production, maintenance, qualité et stocks avec les bons outils, sans jamais confier à un logiciel une décision de sécurité",
    'title'   => "Formation IA et numérique pour l'industrie | Richard SALANON",
    'meta'    => "Former chefs d'atelier, maintenance, qualité et magasin à l'IA et aux outils : ordres de fabrication, pannes, contrôles, stocks, sécurité. Sur devis.",
    'en_bref' => "Cette page s'adresse aux usines et aux ateliers de fabrication qui veulent mettre l'intelligence artificielle, un logiciel de gestion comme Odoo ou Dolibarr et des tableaux de bord au service du travail réel : ordres de fabrication, historique des pannes, contrôles qualité, stocks de matières et de pièces de rechange, sécurité des équipes. Elle décrit ce que ces outils changent, ce qu'ils ne doivent jamais décider à la place du chef d'atelier, du responsable maintenance ou du responsable qualité, et un parcours type de deux jours en quatre demi-journées. La formation se tient dans l'usine, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Technique et terrain',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : de l'ordre de fabrication au produit fini, des données de production qui tiennent debout",
            'duree'  => '3 h 30',
            'points' => [
                "Suivre au tableau un ordre de fabrication réel, anonymisé : nomenclature, gamme, poste de charge, matières sorties du magasin, temps passés, quantités bonnes, rebuts, retouches.",
                "Repérer les trois endroits où la donnée se perd : la fiche suiveuse remplie en fin de poste, le cahier du chef d'équipe, le fichier que personne ne relit.",
                "Distinguer arrêt, ralentissement et attente de matière, pour que le taux de rendement synthétique mesure quelque chose de vrai.",
                "Faire résumer par un assistant d'IA une semaine de rapports de poste, puis vérifier chaque chiffre qu'il avance contre la source.",
                "Ce qui ne sort jamais de l'usine par un compte d'IA personnel : formulations, recettes, plans, réglages des machines, prix des fournisseurs.",
                "Exercice : reconstituer la consommation réelle de matière d'un lot à partir de trois sources qui ne concordent pas, et expliquer l'écart.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : maintenance, historique des pannes et préventif, l'outil qui prévient sans toucher aux sécurités",
            'duree'  => '3 h 30',
            'points' => [
                "Une fiche par équipement : repère, emplacement, fabricant, date de mise en service, pièces critiques, procédure de consignation associée.",
                "Une demande d'intervention bien écrite : symptôme, conditions d'apparition, arrêt ou non de la ligne, et ce qui a été fait, en mots que le technicien suivant comprendra.",
                "Lire les indicateurs que calcule un logiciel de maintenance, temps moyen entre pannes et temps moyen de réparation, et comprendre qu'ils ne valent que ce que vaut l'historique saisi.",
                "Utiliser un assistant d'IA pour regrouper des pannes décrites en texte libre, traduire une notice du fabricant ou préparer une gamme de préventif, avec relecture par le responsable maintenance.",
                "La règle absolue : aucun outil, aucun script, aucune suggestion d'IA ne modifie un réglage de sécurité, un automate ou une procédure de consignation.",
                "Exercice : à partir de six mois de pannes réelles, choisir les trois équipements qui méritent un plan préventif et le rédiger.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : qualité, contrôles et normes ISO, ce que l'IA rédige et ce que le responsable qualité signe",
            'duree'  => '3 h 30',
            'points' => [
                "Placer les points de contrôle là où ils servent : réception des matières, en cours de fabrication, produit fini, avant expédition.",
                "Une non-conformité qui se traite jusqu'au bout : constat, isolement du lot, cause, action corrective, vérification de l'efficacité, clôture datée.",
                "Faire préparer par un assistant d'IA le brouillon d'une procédure, d'une instruction de poste ou d'une analyse des causes, puis le confronter au terrain avec l'opérateur.",
                "Ce qu'un auditeur attend d'une information documentée : version, date, auteur, approbation, et la preuve que la règle est appliquée.",
                "Les numéros de lot et de série : retrouver en quelques minutes quelles matières sont entrées dans quel produit, et chez quel client il est parti.",
                "Exercice : traiter une réclamation client fictive, du retour du produit à la fiche de non-conformité clôturée.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : stocks de matières et de pièces, sécurité au travail, tableau de bord, puis évaluation",
            'duree'  => '3 h 30',
            'points' => [
                "Le magasin de pièces de rechange : article codifié, emplacement, seuil de réapprovisionnement fixé selon le délai réel du fournisseur, pièces critiques identifiées.",
                "L'inventaire tournant des matières premières et des consommables, et l'explication écrite de chaque écart avant tout ajustement.",
                "La sécurité au travail dans les outils : déclaration des presque-accidents, suivi des équipements de protection, habilitations à jour, sans transformer ces données en outil de surveillance des personnes.",
                "Un tableau de bord de cinq indicateurs que la direction lit vraiment, avec la définition écrite de chacun.",
                "Évaluation : chaque participant traite seul un cas complet, de l'ordre de fabrication à l'action corrective, et repart avec sa fiche réflexe.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, à distance : retour sur les données réelles de l'usine",
            'duree'  => '2 heures',
            'points' => [
                "Les rapports de poste, demandes d'intervention et fiches de non-conformité saisis depuis la formation, relus ensemble.",
                "Les indicateurs qui ont bougé, et ceux qui ont bougé parce que la saisie a changé, pas l'atelier.",
                "Les règles d'usage de l'IA qui ont tenu, et celles qu'il faut préciser avec la direction.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Chefs de production et d'atelier, méthodes, maintenance, qualité, magasiniers, responsables sécurité et direction d'usine"],
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, plus un retour à distance un mois après"],
        ['l' => 'Formats', 'v' => "Dans l'usine, en inter, à distance ou hybride, 10 personnes au plus en salle"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent pour une usine ou un atelier de fabrication ?",
            'paragraphes' => [
                "Dans une usine, l'information circule mal bien avant que les machines tombent en panne. Le chef d'équipe note les arrêts sur un cahier, le magasinier sort les matières sur des bons papier, le technicien de maintenance répare sans laisser de trace écrite, et le responsable qualité découvre un lot douteux quand le client appelle. Chacun fait bien son travail ; personne ne voit l'ensemble. L'intelligence artificielle, la digitalisation et l'automatisation changent d'abord cela : la façon dont la production, la maintenance, la qualité, le magasin et la sécurité partagent ce qu'ils savent.",
                "Le premier changement est la donnée de terrain. Un ordre de fabrication tenu dans un logiciel relie la nomenclature, les matières réellement consommées, les temps passés et les quantités produites. Odoo, dans sa version 20.0, calcule par exemple un taux de rendement synthétique par poste de charge en séparant le temps pleinement productif des pertes dues à la vitesse réduite, au manque de composants et aux pannes. Dolibarr propose de son côté des nomenclatures et des ordres de fabrication dans sa distribution standard. Ces calculs ne valent que si les opérateurs saisissent juste, au bon moment : c'est le premier sujet de la formation.",
                "Le deuxième changement est l'arrivée des assistants d'IA dans les bureaux de l'usine. Ils résument des rapports de poste, regroupent des descriptions de pannes rédigées par vingt personnes différentes, traduisent la notice d'une machine livrée avec une documentation en anglais ou en chinois, proposent le brouillon d'une procédure ou d'une analyse des causes. Ils le font vite et avec aplomb, y compris quand ils se trompent sur une valeur de couple de serrage ou sur une température de consigne. Dans une usine, une erreur de ce type ne reste pas sur le papier : elle passe dans la matière, puis chez le client.",
                "Le troisième changement touche la sécurité et la conformité. Les machines elles-mêmes embarquent des logiciels, parfois des fonctions qui apprennent, et les textes européens commencent à en tirer les conséquences. Les normes de management évoluent aussi : l'ISO a publié la sixième édition d'ISO 9001 le 16 septembre 2026. La formation part de ces chantiers avec une règle constante : l'outil prépare, compte et signale ; le chef d'atelier, le responsable maintenance et le responsable qualité décident. Richard SALANON n'est ni ingénieur de production ni auditeur qualité ; il forme à l'usage des outils, sur les données et les logiciels que l'usine utilise déjà.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'une usine un outil peut-il préparer, et que garde la personne responsable ?",
            'legende' => "Répartition proposée en formation, puis ajustée avec la direction de chaque site. La dernière colonne indique le contrôle à mettre en place dès qu'un outil intervient dans la tâche.",
            'entetes' => ['Tâche', "Ce que l'outil prépare", 'Ce que la personne garde', 'Garde-fou'],
            'lignes'  => [
                ['Lancement des ordres de fabrication', "Besoins en matières tirés de la nomenclature, disponibilité en stock, charge des postes", "L'ordre de passage des fabrications et les arbitrages entre clients", "Aucun ordre lancé sur une nomenclature non validée par les méthodes"],
                ['Suivi de production', "Totaux de quantités, de temps et de rebuts par poste, par équipe et par lot", "L'explication des écarts et la décision d'arrêter ou de poursuivre", "Saisie au poste pendant la fabrication, pas reconstituée le lendemain"],
                ['Rapports de poste', "Synthèse des faits marquants de la semaine, classement des arrêts par cause", "La lecture critique et les actions décidées en réunion", "Chaque chiffre de la synthèse se retrouve dans la source"],
                ['Maintenance corrective', "Regroupement des pannes, historique par équipement, temps moyens calculés", "Le diagnostic, la réparation et la remise en service", "Remise en service signée par le technicien habilité, après essai"],
                ['Maintenance préventive', "Calendrier des interventions, rappels, liste des pièces à préparer", "Le contenu des gammes et les fréquences retenues", "Gamme relue contre la notice du fabricant, jamais copiée d'un assistant"],
                ['Contrôle qualité', "Points de contrôle déclenchés à la réception, en fabrication ou avant livraison", "Le verdict sur le lot : libéré, retouché, déclassé ou rebuté", "Le verdict porte un nom et une date, jamais seulement un statut automatique"],
                ['Procédures et instructions de poste', "Brouillon, mise en forme, traduction, comparaison avec la version précédente", "Le contenu technique et l'approbation", "Validation par l'opérateur expérimenté et par le responsable qualité"],
                ['Stocks de matières et de pièces', "Mouvements, seuils, propositions de réapprovisionnement, inventaire tournant", "Le comptage physique et l'arbitrage des achats urgents", "Aucun ajustement d'inventaire sans écart expliqué par écrit"],
                ['Sécurité au travail', "Registre des presque-accidents, échéances des habilitations et des vérifications", "L'évaluation des risques et les mesures de prévention", "Les données servent la prévention, jamais la sanction automatique"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qu'est-ce qu'un outil ne doit jamais faire dans une usine, et quels textes le disent ?",
            'intro' => "Dans un atelier, une décision mal prise blesse quelqu'un ou détruit un lot entier. Les limites ci-dessous s'appuient sur des textes lus dans leur version officielle ; leur application à un site précis relève de l'employeur, de l'inspection du travail, du fabricant de la machine ou de l'organisme de certification, pas du formateur.",
            'items' => [
                ['titre' => "Décider qu'une machine ou un poste est sûr", 'texte' => "La Convention n° 155 de l'Organisation internationale du Travail charge l'employeur de faire en sorte, dans la mesure où c'est raisonnable et pratiquement réalisable, que les lieux de travail, les machines et les procédés soient sûrs (article 16). Son article 19 prévoit que le travailleur signale tout danger grave et imminent, et que l'employeur ne peut exiger qu'il reprenne le travail tant que la situation n'est pas corrigée. Depuis juin 2022, cette convention compte parmi les conventions fondamentales de l'OIT. Un tableau de bord peut signaler un risque ; il ne lève jamais une alerte posée par un opérateur."],
                ['titre' => "Écrire l'évaluation des risques à la place de l'employeur", 'texte' => "En France, Service-Public rappelle que l'employeur établit le document unique d'évaluation des risques professionnels dès le premier salarié, qu'il le met à jour au moins une fois par an à partir de onze salariés et à chaque changement important des conditions de travail, et qu'il en conserve les versions pendant quarante ans. Un assistant d'IA sait produire une liste de dangers génériques en trente secondes. Il ne connaît ni la presse qui se coince le lundi matin, ni l'allée encombrée derrière le four : l'évaluation se fait poste par poste, avec ceux qui y travaillent."],
                ['titre' => "Modifier un réglage de sécurité ou laisser une machine fixer ses propres limites", 'texte' => "Le règlement (UE) 2023/1230 sur les machines, applicable à partir du 14 janvier 2027, exige que les limites des fonctions de sécurité soient établies dans l'évaluation des risques du fabricant et qu'aucune modification des réglages ou des règles générée par la machine ou par les opérateurs ne soit permise, y compris pendant une phase d'apprentissage, lorsqu'elle pourrait créer une situation dangereuse (annexe III, point 1.2.1). Son annexe I range les composants de sécurité à comportement auto-évolutif fondés sur l'apprentissage automatique parmi les produits soumis à une évaluation de conformité particulière. Dans un atelier, personne ne « corrige » un automate de sécurité sur la suggestion d'un assistant."],
                ['titre' => "Brancher un appareil ou un logiciel sur une machine sans trace", 'texte' => "Le même règlement demande qu'un appareil raccordé à une machine ne crée pas de situation dangereuse, que les logiciels essentiels à sa sécurité soient protégés contre la corruption accidentelle ou intentionnelle, et que la machine garde la preuve des interventions, légitimes ou non (annexe III, point 1.1.9). Le journal des versions des logiciels de sécurité téléchargés doit rester actif cinq ans. L'ANSSI rappelle de son côté que les clés USB et les consoles de maintenance propagent des virus jusque sur des systèmes industriels réputés isolés. Une clé apportée de la maison pour « récupérer les données de la machine » n'a rien d'anodin."],
                ['titre' => "Confier une formulation, un plan ou un réglage à un assistant gratuit", 'texte' => "La directive (UE) 2016/943 ne protège comme secret d'affaires qu'une information qui a fait l'objet, de la part de son détenteur, de dispositions raisonnables destinées à la garder secrète (article 2). Coller la formulation d'une peinture, le plan d'une pièce fourni par un client ou les paramètres d'une extrudeuse dans un compte d'IA personnel affaiblit précisément ces dispositions, en Europe comme ailleurs. La formation fait écrire une règle simple : ce qui fait la valeur de l'usine ne passe que par des outils administrés par l'entreprise, avec des conditions d'utilisation lues par la direction."],
                ['titre' => "Filmer les opérateurs à leur poste", 'texte' => "En France, la CNIL admet des caméras sur un lieu de travail pour la sécurité des biens et des personnes, mais elles ne doivent pas filmer les salariés sur leur poste de travail, sauf circonstances particulières ; les images se conservent en principe un mois au plus, et les représentants du personnel sont informés et consultés avant l'installation. Une caméra « intelligente » qui chronomètre chaque geste d'un opérateur change la nature du dispositif. Au Bénin, l'article 383 de la loi n° 2017-20 portant code du numérique exige des données collectées pour des finalités déterminées, explicites et légitimes, et non excessives au regard de ces finalités."],
                ['titre' => "Pointer les équipes par empreinte digitale ou reconnaissance faciale", 'texte' => "La CNIL juge excessive l'installation de dispositifs biométriques pour contrôler les horaires, comme la prise systématique d'une photographie à chaque pointage, et rappelle qu'un relevé de badges installé pour la sécurité d'un bâtiment ne sert pas à vérifier les horaires des salariés. Au Bénin, la loi n° 2017-20 classe les données biométriques qui identifient une personne parmi les données sensibles (article 394) et soumet leur traitement à l'autorisation préalable de l'Autorité de protection des données (article 407). Avant d'acheter une pointeuse à empreinte, l'usine se demande ce qu'un badge ou un code ne permettrait pas."],
                ['titre' => "Mettre des outils d'IA entre les mains des équipes sans les former", 'texte' => "Dans l'Union européenne, l'article 4 du règlement sur l'IA impose depuis le 2 février 2025 aux entreprises qui utilisent ces systèmes une démarche de maîtrise de l'IA pour leur personnel ; le contrôle et les sanctions s'appliquent depuis le 3 août 2026. L'omnibus numérique entré en vigueur à la mi-juillet 2026 maintient l'obligation sans plus exiger un niveau « suffisant », et la formation à la surveillance humaine reste obligatoire pour les systèmes à haut risque. Hors d'Europe, aucun texte n'impose cette formation, mais le risque est le même."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi la date de « prochaine panne » affichée par un logiciel de maintenance reste-t-elle une estimation ?",
            'texte' => "Parce qu'elle se calcule à partir de ce que l'équipe a bien voulu saisir. Selon la documentation d'Odoo 20.0, le temps moyen entre pannes est calculé automatiquement à partir des pannes précédentes, la date estimée de la prochaine panne à partir de ce temps moyen et de la dernière panne, et le temps moyen de réparation à partir de la durée des demandes passées. Si les petites réparations du samedi ne sont jamais enregistrées, la machine paraît plus fiable qu'elle ne l'est. Le calcul aide à planifier ; il ne remplace ni la notice du fabricant, ni les vérifications périodiques imposées, ni l'avis du technicien.",
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans une usine, de Cotonou à Lyon ?",
            'items' => [
                ['secteur' => "Fabricant de tôles et de profilés métalliques, à Cotonou", 'probleme' => "Situation type : la production se compte en fin de journée sur un cahier ; les chutes de bobines ne sont pesées nulle part et la direction découvre la consommation réelle d'acier à l'inventaire de fin d'année.", 'solution' => "Des ordres de fabrication tirés de nomenclatures validées par les méthodes, une saisie des quantités bonnes et des chutes à chaque fin de poste sur une tablette de l'atelier, puis une synthèse hebdomadaire préparée par un assistant d'IA et contrôlée chiffre par chiffre par le chef de production."],
                ['secteur' => "Usine de sacs et d'emballages plastiques, à Abidjan", 'probleme' => "Situation type : les extrudeuses tombent en panne pour les mêmes raisons à quelques semaines d'intervalle ; les techniciens réparent, mais rien n'est écrit et chaque équipe recommence le diagnostic.", 'solution' => "Une fiche par équipement, des demandes d'intervention créées depuis le téléphone avec une photo, un regroupement mensuel des pannes décrites en texte libre, et un plan préventif limité aux trois machines qui arrêtent le plus la ligne."],
                ['secteur' => "Fabricant de peintures, à Dakar", 'probleme' => "Situation type : un client signale des écarts de teinte sur deux livraisons ; impossible de savoir quels lots de pigments sont entrés dans quels lots de peinture, ni quels autres clients ont été livrés.", 'solution' => "Des numéros de lot attribués dès la réception des matières et reportés sur chaque ordre de fabrication, un contrôle à réception avec mesure et verdict signé, et la réclamation traitée jusqu'à une fiche de non-conformité clôturée avec vérification de l'action corrective."],
                ['secteur' => "Atelier de mécanique et de chaudronnerie, à Douala", 'probleme' => "Situation type : chaque arrêt de machine déclenche un achat urgent de roulements ou de courroies, souvent déjà présents au fond du magasin sous une autre désignation.", 'solution' => "Une codification unique des pièces de rechange dans Dolibarr, déjà utilisé pour la facturation, une liste des pièces critiques par équipement, des seuils fixés sur le délai réel des fournisseurs et un inventaire tournant mensuel par famille."],
                ['secteur' => "Fabricant de matelas et de mousses, à Ouagadougou", 'probleme' => "Situation type : les presque-accidents près des cuves de produits chimiques ne remontent pas, les vérifications des extincteurs sont oubliées, et une consigne de sécurité risque d'être recopiée telle quelle depuis une réponse d'assistant d'IA.", 'solution' => "Un registre simple des presque-accidents ouvert à tous, des rappels automatiques pour les vérifications périodiques, et la consigne réécrite avec les opérateurs du poste puis validée par le responsable sécurité ; l'assistant ne sert plus qu'à la mise en forme et à la traduction."],
                ['secteur' => "Sous-traitant en usinage de précision, près de Lyon", 'probleme' => "Situation type : l'entreprise, certifiée selon ISO 9001:2015, prépare sa transition vers l'édition 2026 ; des techniciens utilisent des comptes d'IA personnels et y collent des plans confidentiels de clients pour rédiger des gammes.", 'solution' => "Une charte d'usage de l'IA validée par la direction, un compte professionnel administré, une interdiction écrite de transmettre les plans des clients, des procédures relues et approuvées par le responsable qualité, et un calendrier de transition fixé avec l'organisme de certification."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels logiciels et systèmes une usine travaille-t-elle, et que faut-il en savoir avant de former les équipes ?",
            'legende' => "Informations lues le 5 octobre 2026 dans la documentation des éditeurs et sur les pages officielles. Les licences restent au nom de l'usine ; la formation s'appuie sur les outils déjà en place et n'en impose aucun.",
            'entetes' => ['Outil ou système', "Usage à l'usine", "Ce qu'il faut savoir", 'Formation liée'],
            'lignes'  => [
                ['Odoo, application Fabrication', "Nomenclatures, gammes, postes de charge, ordres de fabrication, rebuts", "Selon la documentation d'Odoo 20.0, la nomenclature fixe les composants et leurs quantités, et le taux de rendement synthétique rapporte le temps pleinement productif d'un poste à son temps d'activité. L'offre Standard coûte 19,90 € par utilisateur et par mois en paiement annuel la première année, puis 24,90 €", '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Odoo, application Maintenance', "Fiches équipements, demandes d'intervention, calendrier du préventif", "Le temps moyen entre pannes, la prochaine panne estimée et le temps moyen de réparation se calculent seuls à partir de l'historique ; le temps moyen attendu se saisit à la main", '<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>'],
                ['Odoo, application Qualité', "Points de contrôle à la réception, en fabrication et à la livraison, alertes qualité", "Un point de contrôle se déclenche à chaque opération, au hasard sur un pourcentage, périodiquement ou à la demande ; les contrôles prennent la forme d'instructions, de réussite ou d'échec, de mesure avec tolérance ou de photo", '<a href="/formations/ia-processus-metier">IA dans les processus métier</a>'],
                ['Lots et numéros de série', "Relier matières et produits finis, retrouver les clients livrés", "La documentation d'Odoo présente les numéros de série comme le moyen de localiser les produits pour le service après-vente ou en cas de rappel", '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Dolibarr, modules Nomenclatures et Ordres de fabrication', "Nomenclatures et ordres de fabrication dans un logiciel souvent déjà utilisé pour la facturation", "Selon le wiki de Dolibarr, les deux modules sont livrés avec la distribution et s'activent par un administrateur ; les ordres de fabrication exigent le module des nomenclatures", '<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['Comptabilité SYSCOHADA', "Valorisation des stocks, coût de production, inventaire de clôture", "L'Acte uniforme relatif au droit comptable et à l'information financière, adopté le 26 janvier 2017, s'applique aux comptes personnels des entités depuis le 1er janvier 2018 ; les chiffres de l'atelier finissent dans ces comptes", '<a href="/formations/odoo-comptabilite-syscohada">Odoo comptabilité SYSCOHADA</a>'],
                ['Automates, supervision et logiciels des machines', "Pilotage des lignes, alarmes, réglages", "Hors du périmètre de la formation : on n'y touche pas. L'ANSSI classe les systèmes industriels en quatre niveaux selon la gravité des conséquences d'une attaque", '<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>'],
                ['Tableur (Excel, Google Sheets)', "Rapports de poste, suivi des arrêts, plan de préventif de départ", "Suffisant pour une petite unité ; dès que trois personnes saisissent le même fichier, les versions divergent", '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Power BI ou Looker Studio', "Tableau de bord de la direction d'usine", "Utile quand les données de production, de maintenance et de qualité existent déjà ; il ne corrige pas une saisie fausse", '<a href="/formations/power-bi-looker-studio">Tableaux de bord Power BI et Looker Studio</a>'],
                ["Assistants d'IA (ChatGPT, Claude, Gemini, Copilot)", "Synthèses, traductions de notices, brouillons de procédures, regroupement de pannes", "Sur un compte professionnel administré ; jamais pour une valeur de réglage, une consigne de sécurité ou un verdict qualité", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['WhatsApp', "Groupes d'équipe, photos de pannes, alertes entre postes", "Pratique mais dispersé ; relié au logiciel de gestion, il garde l'historique. Pour les envois automatiques, Meta accorde depuis le 1er octobre 2026 un quota mensuel de 1 000 messages de service gratuits par numéro professionnel", '<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Que contient le parcours type d'une usine ou d'un atelier, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles demi-journées suivre selon le poste occupé dans l'usine ?",
            'legende' => "Chaque demi-journée peut être suivie seule. Les combinaisons ci-dessous sont des suggestions ; elles se fixent lors du premier échange avec la direction du site.",
            'entetes' => ['Poste', 'Demi-journées conseillées', 'Ce que la personne sait faire en sortant'],
            'lignes'  => [
                ["Chef de production ou chef d'atelier", 'Les quatre', "Lancer et suivre des ordres de fabrication fiables, lire un taux de rendement, animer une réunion d'atelier à partir de chiffres vérifiés"],
                ['Technicien ou responsable maintenance', 'Jour 1 après-midi, jour 2 après-midi', "Tenir l'historique de chaque équipement, bâtir un préventif sur les machines critiques, gérer les pièces de rechange"],
                ['Responsable qualité ou technicien de laboratoire', 'Jour 1 matin, jour 2 matin', "Placer des points de contrôle utiles, traiter une non-conformité jusqu'à sa clôture, faire relire par l'IA sans lui déléguer l'approbation"],
                ['Magasinier ou gestionnaire de stocks', 'Jour 1 matin, jour 2 après-midi', "Sortir les matières sur ordre de fabrication, suivre les lots, mener un inventaire tournant et expliquer un écart"],
                ['Responsable sécurité ou animateur prévention', 'Jour 1 après-midi, jour 2 après-midi', "Tenir le registre des presque-accidents et les échéances des vérifications, sans glisser vers la surveillance des personnes"],
                ['Bureau des méthodes', 'Jour 1 matin et après-midi', "Tenir nomenclatures et gammes à jour, rédiger des instructions de poste avec l'aide de l'IA et les faire valider"],
                ["Direction d'usine", 'Jour 1 matin, jour 2 après-midi, plus atelier de direction', "Fixer les règles d'usage de l'IA, choisir cinq indicateurs, arbitrer entre tableur, Odoo et Dolibarr"],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la formation se prépare-t-elle sans exposer les secrets de fabrication ni toucher aux machines ?",
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => "Vous décrivez l'usine : produits, nombre de lignes et d'équipes, organisation en postes, logiciels en place, certifications visées ou détenues, et ce qui coûte le plus aujourd'hui en arrêts, en rebuts ou en réclamations. Cet échange, le cadrage qui suit et le devis ne coûtent rien."],
                ['titre' => "Visite de l'atelier, sur place ou en vidéo", 'duree' => 'Deux à trois semaines avant', 'texte' => "Une heure pour voir le chemin d'un ordre de fabrication, du magasin à l'expédition, et repérer où l'information se perd. Aucune photo de machine ni de procédé n'est conservée par le formateur."],
                ['titre' => 'Choix des données de travail', 'duree' => 'Deux semaines avant', 'texte' => "On retient trois mois de rapports de poste, un extrait de l'historique des pannes, deux ou trois fiches de non-conformité et un état de stock. Les exercices partent de ces données, pas d'un cas d'école."],
                ['titre' => 'Neutralisation', 'duree' => 'Une semaine avant', 'texte' => "L'usine retire elle-même les formulations, les cotes des plans, les noms des clients et les prix d'achat. Le formateur ne reçoit aucun accès aux automates, à la supervision ni aux logiciels des machines : les démonstrations dans les outils de gestion se font sur les postes de l'équipe."],
                ['titre' => 'Accord de la direction et du responsable sécurité', 'duree' => 'Avant la session', 'texte' => "Le directeur d'usine et le responsable sécurité valident les règles qui seront travaillées : ce qu'un outil peut calculer ou rédiger, qui vérifie, qui décide, ce qui reste interdit. Sans eux, la formation diffuserait des règles que personne n'a arrêtées."],
                ['titre' => 'Animation', 'duree' => 'Demi-journées de 3 h 30', 'texte' => "Les séances se calent sur les horaires des postes, de préférence dans une salle proche de l'atelier pour aller vérifier une donnée sur place. Chaque séquence part d'un fait de l'usine, passe par la règle, puis par le geste dans l'outil."],
                ['titre' => 'Supports et suivi', 'duree' => 'Fin de session, puis un mois après', 'texte' => "Modèle de rapport de poste, modèle de demande d'intervention, trame de fiche de non-conformité, charte d'usage de l'IA, fiche réflexe sécurité et attestation nominative ; puis un retour à distance d'environ deux heures."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour une usine qui tourne en continu ou en équipes ?",
            'legende' => "Les formats se combinent. Dans une usine en trois-huit, la même demi-journée peut être donnée deux fois pour que les équipes du matin et de l'après-midi la suivent sans arrêter la production.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Situation type'],
            'lignes'  => [
                ['Atelier de direction', 'Deux heures', "Directeur d'usine, responsables production, maintenance, qualité et sécurité", "Écrire les règles d'usage de l'IA et choisir les indicateurs avant de former les équipes"],
                ['Parcours complet sur site', '2 jours en 4 demi-journées', '10 personnes au plus', "Usine qui veut aligner production, maintenance, qualité et magasin sur les mêmes données"],
                ['Demi-journée dédoublée', "Une demi-journée, donnée deux fois", "Deux groupes de 8 personnes", "Équipes postées : la séance du matin et celle de l'après-midi suivent le même contenu"],
                ['Module isolé', 'Une demi-journée', "4 à 10 personnes d'un même service", "Maintenance avant le lancement d'un préventif, qualité avant un audit de certification"],
                ['Session inter', '1 ou 2 jours', 'Une à trois personnes par entreprise', "Petites unités de fabrication ; les exercices utilisent des données fictives"],
                ['À distance', 'Séances de 2 heures', '8 personnes au plus', "Usines réparties sur plusieurs sites, ou siège en Europe et unité de production en Afrique"],
                ['Hybride', 'Une demi-journée sur site, puis séances à distance', '10 personnes au plus', "Prise en main sur place, puis application aux données réelles de la semaine"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation des équipes d'une usine, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun tarif n'est publié : chaque formule est chiffrée après le premier échange, et le devis précise ce qu'il couvre. Le paiement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les licences d'Odoo, de Dolibarr hébergé, des outils de tableau de bord et des assistants d'IA sont réglées par l'usine directement à leurs éditeurs.",
            'items'      => [
                ['offre' => 'Atelier de direction', 'prix' => 'Sur devis', 'inclus' => ["Deux heures avec la direction d'usine et les responsables de service", "Charte d'usage de l'IA et liste des indicateurs rédigées", 'Recommandation sur les modules à suivre ensuite']],
                ['offre' => 'Module ciblé', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée : production, maintenance, qualité ou stocks et sécurité', "Exercices sur les données neutralisées de l'usine", 'Modèles modifiables et attestation']],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées, dédoublées si les équipes sont postées', 'Rapport de poste, demande d\'intervention et fiche de non-conformité construits en séance', 'Évaluation sur un cas complet', 'Retour à distance un mois après']],
            ],
            'variations' => [
                "Le nombre de participants, de groupes et de séances dédoublées pour les équipes postées.",
                "Le nombre de demi-journées et les modules retenus.",
                "Les logiciels couverts : tableur, Odoo, Dolibarr, outil de tableau de bord.",
                "Le temps de préparation des données de travail et des modèles.",
                "Le lieu : usine à Cotonou ou dans une zone industrielle, autre pays, ou distance.",
                "La langue des séances et des supports, français ou anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il prendre en charge une partie du coût pour une usine ?",
            'paragraphes' => [
                "Le cas le plus courant reste simple : l'usine paie la formation sur son budget. Selon le pays, la taille de l'entreprise, ses cotisations et la situation du prestataire, un fonds de formation professionnelle peut en rembourser une part, mais rien n'est garanti ici. La bonne méthode consiste à transmettre le programme et le devis au fonds concerné, puis à attendre sa réponse écrite avant de signer.",
                "En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> indique sur sa page du plan de formation, lue le 5 octobre 2026, que toute entreprise qui justifie du paiement régulier de la taxe d'apprentissage et de la taxe additionnelle à la formation professionnelle continue peut déposer un plan ; le fonds publie aussi une liste d'opérateurs de formation habilités, à consulter avant tout dépôt. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> ouvre un guichet au personnel des entreprises et aux membres des organisations professionnelles.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que, depuis le 1er janvier 2022, seuls les prestataires certifiés Qualiopi accèdent aux fonds publics ou mutualisés distribués par les opérateurs de compétences, les régions, France Travail ou l'État. Richard SALANON ne détient pas cette certification : une usine française règle donc la session sur ses fonds propres, sauf réponse écrite contraire de son opérateur. Le programme, les feuilles d'émargement et les attestations restent remis dans tous les cas, et documentent la démarche de maîtrise de l'IA attendue des entreprises européennes qui utilisent ces outils.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les usines qui s'outillent seules ?",
            'intro' => "Elles viennent rarement d'un mauvais logiciel. Elles viennent d'une saisie faite trop tard, d'une définition jamais écrite ou d'un outil utilisé pour ce qu'il ne sait pas faire, souvent sous la pression d'une commande à livrer.",
            'items' => [
                ['titre' => "Saisir la production le lendemain", 'texte' => "Le chef d'équipe reconstitue de mémoire les quantités et les arrêts de la veille ; les chiffres sont ronds, les petits arrêts ont disparu et le taux de rendement paraît excellent. La saisie se fait au poste, pendant ou juste après l'ordre de fabrication, même sur une feuille qui sera reprise le jour même."],
                ['titre' => "Calculer un taux de rendement sans définir les arrêts", 'texte' => "Un changement de format compte comme une panne dans une équipe et comme du temps normal dans l'autre. Avant le premier tableau de bord, la direction écrit la liste des causes d'arrêt, avec un exemple pour chacune, et tout le monde s'y tient."],
                ['titre' => "Reprendre une gamme de maintenance proposée par un assistant", 'texte' => "La gamme est bien présentée, mais la fréquence de graissage ou le couple de serrage ne correspond pas à la machine installée. Toute gamme se vérifie contre la notice du fabricant et l'expérience du technicien avant d'entrer dans le calendrier."],
                ['titre' => "Ajuster l'inventaire pour que le stock tombe juste", 'texte' => "L'écart entre le stock théorique et le comptage est corrigé d'un clic, sans explication, et la consommation réelle de matière n'est jamais connue. Chaque ajustement porte une cause écrite : rebut non déclaré, erreur de nomenclature, sortie non saisie, perte."],
                ['titre' => "Publier une procédure que personne n'applique", 'texte' => "Une procédure générée en dix minutes, impeccable sur le papier, décrit une organisation qui n'existe pas. Le premier auditeur qui interroge un opérateur le voit tout de suite. Une procédure se rédige avec ceux qui l'appliquent, puis se vérifie sur le terrain."],
                ['titre' => "Garder l'historique des pannes dans un groupe WhatsApp", 'texte' => "Photos, messages vocaux et solutions trouvées s'empilent dans le fil de discussion, puis disparaissent avec le téléphone d'un technicien qui quitte l'usine. Ce qui compte est reporté dans la fiche de l'équipement, le jour même."],
                ['titre' => "Laisser le fournisseur d'une machine se connecter à distance sans règle", 'texte' => "La télémaintenance rend service, mais un accès ouvert en permanence relie la ligne de production à l'extérieur. L'accès s'ouvre sur demande, pour une durée connue, avec une trace de l'intervention et l'accord du responsable maintenance."],
                ['titre' => "Se servir des déclarations de sécurité pour sanctionner", 'texte' => "Le registre des presque-accidents devient une liste de fautifs, et plus personne ne déclare rien. Les données de sécurité servent à corriger les situations dangereuses ; la question disciplinaire, quand elle se pose, suit une autre procédure."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "ISO 9001:2026, ISO 14001:2026, ISO 45001 : que changent les nouvelles éditions et les outils d'IA pour une usine certifiée ou qui veut l'être ?",
            'paragraphes' => [
                "L'ISO a publié le 16 septembre 2026 la sixième édition d'ISO 9001, qui remplace celle de 2015. Selon la fiche de l'ISO, la norme compte plus d'un million de certificats délivrés dans 189 pays ; l'édition 2026 insiste sur la culture de la qualité et le leadership, et sépare plus nettement les risques des opportunités. Les organismes certifiés passent à la nouvelle version dans le délai fixé par leur cycle de certification, à préciser avec leur organisme certificateur. La certification n'est pas une obligation légale, mais beaucoup de clients industriels l'exigent de leurs fournisseurs.",
                "La norme environnementale ISO 14001 a connu la même révision : son édition 2026 a été publiée en avril. ISO 45001, la norme de management de la santé et de la sécurité au travail, date de 2018 ; l'ISO l'a confirmée en 2024 et annonce son remplacement par une nouvelle version dans les mois à venir. Une usine qui vise plusieurs certifications a intérêt à tenir un seul jeu de documents, d'enregistrements et d'indicateurs, plutôt qu'un classeur par norme.",
                "Un assistant d'IA ne pose aucun problème de principe pour rédiger une procédure. L'auditeur regarde autre chose : la version en vigueur, son approbation, et surtout la preuve qu'elle est appliquée. La formation installe donc une habitude : tout document préparé avec l'IA est relu par celui qui l'appliquera, approuvé par celui qui en répond, et daté. ISO/IEC 42001, publiée en décembre 2023, propose un système de management de l'IA pour les organismes qui fournissent ou utilisent des produits fondés sur l'IA ; une usine qui se sert d'assistants n'a pas besoin de cette certification, mais sa logique d'inventaire des usages et de responsabilités inspire la charte écrite en séance.",
                "En Europe, deux textes de plus concernent les industriels. La directive (UE) 2022/2555, dite NIS 2, range dans son annexe II la fabrication d'équipements électriques, de machines, de véhicules, d'autres matériels de transport, de produits informatiques et électroniques et de dispositifs médicaux parmi les autres secteurs critiques ; elle vise en principe les entreprises moyennes et grandes. Le règlement sur les machines s'applique, lui, à partir du 14 janvier 2027. Une usine africaine qui livre des clients européens recevra leurs questionnaires : mieux vaut savoir y répondre avec des faits.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés et datés un responsable d'usine doit-il garder en tête ?",
            'items' => [
                ['valeur' => '3 millions', 'libelle' => "Ordre de grandeur des décès liés au travail chaque année dans le monde, dont 2,6 millions dus à des maladies et 330 000 à des accidents (estimations publiées en novembre 2023)", 'source' => 'Organisation internationale du Travail', 'url' => 'https://www.ilo.org/resource/news/nearly-3-million-people-die-work-related-accidents-and-diseases'],
                ['valeur' => '395 millions', 'libelle' => "Travailleurs victimes d'un accident du travail non mortel, selon les mêmes estimations de novembre 2023", 'source' => 'Organisation internationale du Travail', 'url' => 'https://www.ilo.org/resource/news/nearly-3-million-people-die-work-related-accidents-and-diseases'],
                ['valeur' => '189 pays', 'libelle' => "Pays où des certificats ISO 9001 ont été délivrés, pour plus d'un million de certificats (fiche consultée le 5 octobre 2026)", 'source' => 'ISO, fiche ISO 9001:2026', 'url' => 'https://www.iso.org/fr/standard/9001'],
                ['valeur' => '16 septembre 2026', 'libelle' => "Publication de la sixième édition d'ISO 9001, qui remplace l'édition 2015", 'source' => 'ISO, fiche ISO 9001:2026', 'url' => 'https://www.iso.org/fr/standard/9001'],
                ['valeur' => '14 janvier 2027', 'libelle' => "Date d'application du règlement (UE) 2023/1230 sur les machines, qui abroge la directive 2006/42/CE à la même date", 'source' => 'EUR-Lex, règlement (UE) 2023/1230', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32023R1230'],
                ['valeur' => '5 ans', 'libelle' => "Durée pendant laquelle le journal des versions de logiciels de sécurité téléchargés sur une machine doit rester actif (annexe III, point 1.2.1)", 'source' => 'EUR-Lex, règlement (UE) 2023/1230', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32023R1230'],
                ['valeur' => '40 ans', 'libelle' => "Durée de conservation des versions du document unique d'évaluation des risques professionnels en France (page vérifiée le 22 juillet 2026)", 'source' => 'Service-Public', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F35360'],
                ['valeur' => '4 classes', 'libelle' => "Niveaux de cybersécurité des systèmes industriels, définis selon la gravité des conséquences d'une attaque (guide ANSSI-PA-107 du 10 mars 2025)", 'source' => 'ANSSI', 'url' => 'https://messervices.cyber.gouv.fr/documents-guides/anssi-guide-systemes_industriels-methode_de_classification_v2-0.pdf.pdf'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour une usine ?",
            'legende' => "Chaque fiche a son propre programme. Le parcours industriel en reprend ce qui sert à l'atelier ; les fiches permettent d'approfondir un outil ou une méthode avec un groupe ciblé.",
            'entetes' => ['Formation', "Ce qu'elle apporte à l'usine", 'Pour qui en priorité'],
            'lignes'  => [
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', "La prise en main d'Odoo par poste : achats de matières, réceptions, stock, ventes et facturation", 'Magasiniers, acheteurs, administration des ventes'],
                ['<a href="/formations/ia-processus-metier">IA dans les processus métier</a>', "Choisir les étapes d'un processus de production ou de qualité à confier à l'IA, et garder un contrôle humain traçable", 'Direction, responsable qualité, méthodes'],
                ['<a href="/formations/power-bi-looker-studio">Tableaux de bord Power BI et Looker Studio</a>', "Construire le tableau de bord de l'usine à partir des données de production, de maintenance et de qualité", "Contrôle de gestion industriel, direction d'usine"],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', "Dessiner le chemin d'un ordre de fabrication ou d'une demande d'intervention, mesurer ses délais, le simplifier avant de l'outiller", 'Responsables de service, méthodes'],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', "Des rapports de poste et des suivis d'arrêts fiables tant que l'usine n'a pas de logiciel de gestion", "Chefs d'équipe, assistants de production"],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', "Les bons réflexes face aux clés USB, aux faux courriels de fournisseurs et aux mots de passe partagés au poste", "Toute l'usine, en priorité maintenance et bureaux"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Coupures de courant, poussière, équipes postées, langues : que change le terrain africain ou européen pour une usine qui s'outille ?",
            'paragraphes' => [
                "Dans beaucoup d'usines d'Afrique de l'Ouest et centrale, le réseau électrique et la connexion décident de l'organisation autant que les machines. Quand le groupe électrogène démarre, le serveur local redémarre parfois, et la saisie en cours se perd. La formation prévoit donc des gestes qui supportent ces interruptions : une feuille de secours au format exact de l'écran, reprise le jour même, des tablettes qui gardent les saisies hors connexion quand l'outil le permet, et un onduleur sur le poste qui sert à la saisie de production.",
                "L'atelier n'est pas un bureau. La poussière, la chaleur, l'huile et les gants rendent un clavier peu pratique ; un écran trop chargé n'est pas lu. Les choix enseignés en tiennent compte : peu de champs à saisir, des listes plutôt que du texte libre pour les causes d'arrêt, une photo plutôt qu'une longue description de panne, et un poste de saisie placé là où l'opérateur passe de toute façon.",
                "Les opérateurs ne lisent pas tous le français avec aisance, et les notices des machines arrivent souvent en anglais ou en chinois. Les assistants d'IA traduisent bien une notice générale, moins bien une valeur technique ou une abréviation propre au fabricant. La règle tient en deux temps : la traduction aide à comprendre, puis l'instruction de poste est rédigée et illustrée de photos de la machine réelle, relue par un opérateur expérimenté, et validée par le responsable du service.",
                "En Europe, l'enjeu n'est pas l'accès aux outils mais l'empilement des exigences : sécurité des machines, protection des données des salariés, cybersécurité, normes de management, attentes des donneurs d'ordres. Un groupe qui possède une unité de production en Afrique et un siège en Europe gagne à appliquer partout la règle la plus exigeante des deux, et à écrire une seule fois ce qu'il a décidé, pour chaque site.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier la formation de vos équipes d'usine à Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut former des équipes industrielles à ces outils : chefs d'atelier, techniciens de maintenance, responsables qualité, magasiniers et directions d'usine. Il n'est ni ingénieur de production, ni préventeur, ni auditeur qualité, et ne prétend pas connaître une machine mieux que ceux qui la conduisent. Il apporte la maîtrise des assistants d'IA, des logiciels de gestion comme Odoo et Dolibarr, des tableurs, des tableaux de bord et des automatisations, et il bâtit chaque exercice sur les données de l'usine. Passé par " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il travaille depuis " . $ans . " ans dans le numérique et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes.",
                "Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle destiné aux entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il a travaillé dans " . count((array) fait('pays_travailles')) . " pays, parmi lesquels le Bénin, la Côte d'Ivoire, le Sénégal, le Burkina Faso, le Gabon, la France, la Suisse et le Canada. Aucun éditeur ni organisme de certification ne l'a certifié, il ne revend aucune licence, et les questions de sécurité des machines ou de certification soulevées en séance sont renvoyées au responsable sécurité, au fabricant ou à l'organisme certificateur.",
                "Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. Quand la formation fait apparaître un besoin d'outillage, comme des ordres de fabrication à paramétrer ou des rapports de poste à automatiser, il relève d'une mission d'<a href=\"/services/integration-odoo\">intégration Odoo</a> ou de <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>. Le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo ou Dolibarr</a> aide à choisir un logiciel, et l'histoire de <a href=\"/histoires/maersk-notpetya\">Maersk face à NotPetya</a> montre ce que coûte une informatique d'exploitation à l'arrêt. Le reste de l'offre figure dans le <a href=\"/formations/\">catalogue des formations</a>, en particulier le domaine <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire les équipes d'une usine ?",
            'texte' => "Une saisie faite au poste et pas le lendemain, des causes d'arrêt définies par écrit, une fiche par équipement, aucune gamme ni consigne recopiée d'un assistant sans vérification, un verdict qualité qui porte un nom, des écarts d'inventaire expliqués, des données de sécurité qui servent la prévention, et rien de ce qui fait la valeur de l'usine dans un compte d'IA personnel. L'outil compte, rédige et signale ; les responsables de l'usine décident.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former les équipes de votre usine à l'IA et aux outils numériques ?",
            'texte'  => "Décrivez votre production, l'organisation des équipes, les logiciels en place, les certifications détenues ou visées, le nombre de personnes à former et ce qui vous coûte le plus aujourd'hui : arrêts, rebuts, réclamations ou ruptures de pièces. Vous recevez une réponse sous 24 heures, puis un programme ajusté à votre site et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon usine'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il déjà utiliser un logiciel de gestion pour suivre la formation ?", 'r' => "Non. Une usine qui suit sa production sur un tableur, ou même sur papier, peut suivre le parcours : les premières heures portent sur la donnée de terrain, pas sur un logiciel. Les exercices se font dans l'outil que l'usine utilise, tableur, Odoo ou Dolibarr, et la question du choix d'un logiciel se traite à part."],
        ['q' => "Un assistant d'IA peut-il prévoir les pannes de nos machines ?", 'r' => "Pas à partir de rien. Un logiciel de maintenance calcule un temps moyen entre pannes et une date estimée de la prochaine panne à partir de l'historique saisi ; une vraie maintenance prédictive suppose en plus des capteurs et un projet dédié. La formation commence par le préalable de l'un comme de l'autre : un historique des pannes complet, écrit dans des termes que tout le monde comprend."],
        ['q' => "Peut-on laisser l'IA rédiger nos procédures et nos instructions de poste ?", 'r' => "Comme brouillon, oui : elle met en forme, harmonise, traduit et compare deux versions. Le contenu technique, en revanche, se vérifie avec l'opérateur qui applique la procédure, puis le document est approuvé, daté et versionné par le responsable qui en répond. Un auditeur demandera surtout la preuve que la règle écrite est appliquée."],
        ['q' => "Notre certificat ISO 9001:2015 est-il encore valable ?", 'r' => "La fiche de l'ISO indique que l'édition 2015 a été remplacée par ISO 9001:2026, publiée le 16 septembre 2026, et que les organismes certifiés passent à la nouvelle version dans le délai défini par leur cycle de certification. Le calendrier exact se fixe avec votre organisme certificateur. La formation prépare les équipes à tenir des enregistrements fiables ; elle ne remplace ni un accompagnement à la certification, ni un audit."],
        ['q' => "Le formateur aura-t-il accès à nos machines, à nos automates ou à nos formulations ?", 'r' => "Non. Il ne reçoit aucun accès aux automates, à la supervision ni aux logiciels des machines, et les données de travail sont neutralisées par l'usine avant la session : formulations, cotes des plans, noms des clients et prix d'achat retirés. Les démonstrations dans les logiciels de gestion se font sur les postes de l'équipe."],
        ['q' => "La formation traite-t-elle de la sécurité des machines ?", 'r' => "Elle traite de l'usage des outils numériques au service de la sécurité : registre des presque-accidents, échéances des habilitations et des vérifications, règles qui interdisent à un outil de toucher à un réglage de sécurité. La conformité d'une machine relève de son fabricant, et l'évaluation des risques de l'employeur ; le règlement européen sur les machines, applicable à partir du 14 janvier 2027, en fixe les exigences pour les machines mises sur le marché de l'Union."],
        ['q' => "Peut-on installer des caméras intelligentes ou une pointeuse biométrique dans l'atelier ?", 'r' => "La question se pose avant l'achat, pas après. En France, la CNIL interdit en principe de filmer les salariés à leur poste et juge excessif un contrôle biométrique des horaires. Au Bénin, la loi n° 2017-20 exige une finalité précise et des données non excessives (article 383), et un traitement biométrique y requiert l'autorisation préalable de l'Autorité de protection des données (article 407). La formation aide à poser les bonnes questions ; la réponse pour votre site relève de votre conseil ou de l'autorité de protection des données."],
        ['q' => "Odoo ou Dolibarr pour une usine ?", 'r' => "Odoo propose des applications distinctes pour la fabrication, la maintenance et la qualité, avec un calcul du taux de rendement par poste et des points de contrôle paramétrables. Dolibarr offre des nomenclatures et des ordres de fabrication plus simples, souvent suffisants pour un petit atelier qui l'utilise déjà pour facturer. Le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo ou Dolibarr</a> détaille les critères de choix."],
        ['q' => "Comment former des équipes postées sans arrêter la production ?", 'r' => "En dédoublant les demi-journées : le même contenu est donné à l'équipe du matin et à celle de l'après-midi, dans une salle proche de l'atelier. Les séances à distance de deux heures complètent le dispositif pour l'équipe de nuit ou pour un second site."],
        ['q' => "Les opérateurs qui lisent peu le français peuvent-ils suivre ?", 'r' => "Oui. Les séances destinées aux opérateurs reposent sur des écrans réels, des photos de leurs machines et des exercices au poste plutôt que sur de longs documents. Quand une langue locale aide davantage, l'usine désigne un relais qui reformule ; les modèles remis sont conçus avec peu de texte et beaucoup de listes de choix."],
        ['q' => "Combien coûte la formation, et comment la régler ?", 'r' => "Le prix est fixé sur devis, après un premier échange gratuit. Il dépend du nombre de participants et de groupes, des modules retenus, des logiciels couverts, du lieu et du format. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Que reçoivent les participants à la fin ?", 'r' => "Le modèle de rapport de poste, le modèle de demande d'intervention, la trame de fiche de non-conformité, la charte d'usage de l'IA, une fiche réflexe sécurité et une attestation nominative de fin de formation. Ce n'est ni un diplôme, ni une habilitation, ni une qualification d'auditeur ISO."],
    ],

    'sources' => [
        ['titre' => "ISO, fiche ISO 9001:2026, systèmes de management de la qualité (publiée le 16 septembre 2026, sixième édition)", 'url' => 'https://www.iso.org/fr/standard/9001', 'date' => '2026-10-05'],
        ['titre' => "ISO, fiche ISO 9001:2015 (annulée et remplacée par ISO 9001:2026)", 'url' => 'https://www.iso.org/fr/standard/62085.html', 'date' => '2026-10-05'],
        ['titre' => "ISO, fiche ISO 14001:2026, systèmes de management environnemental (avril 2026)", 'url' => 'https://www.iso.org/fr/standard/14001', 'date' => '2026-10-05'],
        ['titre' => "ISO, fiche ISO 45001:2018, santé et sécurité au travail (confirmée en 2024, révision annoncée)", 'url' => 'https://www.iso.org/fr/standard/45001', 'date' => '2026-10-05'],
        ['titre' => "ISO, fiche ISO/IEC 42001:2023, système de management de l'intelligence artificielle", 'url' => 'https://www.iso.org/fr/standard/42001', 'date' => '2026-10-05'],
        ['titre' => "Organisation internationale du Travail, un milieu de travail sûr et salubre est un principe et un droit fondamental au travail (juin 2022)", 'url' => 'https://www.ilo.org/topics-and-sectors/safety-and-health-work/safe-and-healthy-working-environment-fundamental-principle-and-right-work', 'date' => '2026-10-05'],
        ['titre' => "Organisation internationale du Travail, fiche sur la Convention n° 155, convention fondamentale (articles 13, 16, 18 et 19)", 'url' => 'https://www.ilo.org/sites/default/files/2025-02/Factsheet_C155.pdf', 'date' => '2026-10-05'],
        ['titre' => "Organisation internationale du Travail, près de trois millions de personnes meurent chaque année d'accidents et de maladies liés au travail (novembre 2023)", 'url' => 'https://www.ilo.org/resource/news/nearly-3-million-people-die-work-related-accidents-and-diseases', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement (UE) 2023/1230 sur les machines (article 54, annexe I points 5 et 6, annexe III points 1.1.9 et 1.2.1)", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32023R1230', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, directive (UE) 2016/943 sur la protection des secrets d'affaires (article 2)", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32016L0943', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, directive (UE) 2022/2555 dite NIS 2 (article 2 et annexe II)", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32022L2555', 'date' => '2026-10-05'],
        ['titre' => "Service-Public, document unique d'évaluation des risques professionnels (vérifié le 22 juillet 2026)", 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F35360', 'date' => '2026-10-05'],
        ['titre' => "CNIL, la vidéosurveillance et la vidéoprotection au travail", 'url' => 'https://www.cnil.fr/fr/la-videosurveillance-videoprotection-au-travail', 'date' => '2026-10-05'],
        ['titre' => "CNIL, l'accès aux locaux et le contrôle des horaires sur le lieu de travail (mise à jour du 17 juin 2026)", 'url' => 'https://www.cnil.fr/fr/lacces-aux-locaux-et-le-controle-des-horaires-sur-le-lieu-de-travail', 'date' => '2026-10-05'],
        ['titre' => "ANSSI, la cybersécurité des systèmes industriels : méthode de classification (ANSSI-PA-107, 10 mars 2025)", 'url' => 'https://messervices.cyber.gouv.fr/documents-guides/anssi-guide-systemes_industriels-methode_de_classification_v2-0.pdf.pdf', 'date' => '2026-10-05'],
        ['titre' => "ANSSI, la cybersécurité des systèmes industriels : mesures détaillées (version 2)", 'url' => 'https://messervices.cyber.gouv.fr/guides/la-cybersecurite-des-systemes-industriels-mesures-detaillees', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : ajouter un équipement à la maintenance (temps moyen entre pannes et de réparation)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/maintenance/add_new_equipment.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : taux de rendement synthétique (OEE)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/manufacturing/reporting/oee.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : points de contrôle qualité", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/quality/quality_management/quality_control_points.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : nomenclatures (bill of materials)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/manufacturing/basic_setup/bill_configuration.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : numéros de série", 'url' => 'https://www.odoo.com/documentation/20.0/applications/inventory_and_mrp/inventory/product_management/product_tracking/serial_numbers.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs (offre Standard, 19,90 € puis 24,90 € par utilisateur et par mois en paiement annuel)", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, module Nomenclatures (BOM)", 'url' => 'https://wiki.dolibarr.org/index.php/Module_BOM', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, module Ordres de fabrication (Manufacturing Orders)", 'url' => 'https://wiki.dolibarr.org/index.php/Module_Manufacturing_Orders', 'date' => '2026-10-05'],
        ['titre' => "OHADA, Acte uniforme relatif au droit comptable et à l'information financière (adopté le 26 janvier 2017, en vigueur le 1er janvier 2018)", 'url' => 'https://www.ohada.org/en/uniform-act-relating-to-accounting-law-and-financial-information-audcif/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 383, 394 et 407)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business (quota mensuel de 1 000 messages de service gratuits depuis le 1er octobre 2026)", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-utilisateurs', 'ia-processus-metier', 'power-bi-looker-studio', 'digitalisation-processus', 'cybersecurite-employes', 'excel-google-sheets'],
        'services'    => ['integration-odoo', 'digitalisation-d-entreprise', 'automatisation-ia'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
