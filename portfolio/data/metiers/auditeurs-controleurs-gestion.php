<?php
// ============================================================
// data/metiers/auditeurs-controleurs-gestion.php · Page « formations par
// métier » pour les auditeurs internes et les contrôleurs de gestion (vague
// 1C, univers « Chiffre et finance », prioritaire, statut F : Richard a déjà
// formé ce public). Angle propre : audit interne (plan fondé sur les risques,
// missions, suivi des recommandations) et contrôle de gestion (budget,
// prévision, reporting mensuel, analyse des écarts), avec les tests sur
// populations traités en renvoi. La page parle des deux métiers et oriente
// vers ia-audit-controle, power-bi-looker-studio, sql-analystes et
// data-literacy, sans en reprendre le texte ; elle ne reprend rien de la page
// experts-comptables.
// Sources lues le 05/10/2026 : Normes internationales d'audit interne de
// l'IIA en français (normes 2.2, 4.2, 9.4, 10.3, 15.2), page des exigences
// thématiques de l'IIA, COSO (cadre de 2013, guide 2026 sur l'IA générative),
// circulaire n° 03-2017/CB/C de la Commission bancaire de l'UMOA (articles 14,
// 16, 20, 26, 27), Acte uniforme relatif au droit comptable (articles 14, 16,
// 69), EUR-Lex (règlement sur l'IA, annexe III, point 4), page de la
// Commission sur le cadre réglementaire de l'IA (mise à jour du 03/08/2026),
// CNIL (RGPD, article 22), ACFE (Occupational Fraud 2026, PDF), documentation
// d'Odoo 20.0 (budgets analytiques), Microsoft (Python dans Excel, tarifs de
// Power BI). Faits repris du catalogue : article 4 du règlement sur l'IA,
// tarifs d'Odoo et de n8n, gratuité du cadrage, financements.
// Richard n'est ni auditeur ni contrôleur de gestion : la page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et données pour auditeurs internes et contrôleurs de gestion : un plan d'audit, un budget et un reporting préparés par les outils, des écarts expliqués et des recommandations suivies, sous un jugement qui reste humain",
    'title'   => "Formation IA pour auditeurs et contrôleurs | Richard SALANON",
    'meta'    => "Former auditeurs internes et contrôleurs de gestion à l'IA et aux données : plan d'audit, suivi des recommandations, budget, reporting, écarts. Sur devis.",
    'en_bref' => "Directions de l'audit interne, services de contrôle interne, équipes de contrôle de gestion : ce parcours apprend à vos professionnels à se servir de l'intelligence artificielle, de l'automatisation et de l'analyse de données pour le plan d'audit, le suivi des recommandations, le budget, la prévision et le reporting mensuel. La page montre aussi où s'arrêtent ces outils, d'après les normes de l'IIA, la circulaire de la Commission bancaire de l'UMOA sur le contrôle interne et le droit des données personnelles, puis oriente chaque poste vers la formation du catalogue qui lui convient. Comptez trois jours répartis en six demi-journées, sur place, en session inter-entreprises, en visioconférence ou en formule mixte, pour un prix établi sur devis.",
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Chiffre et finance',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : deux métiers qui vérifient, une même matière première, les données",
            'duree'  => '3 h 30',
            'points' => [
                "Tour de table par fonction : ce que l'audit interne livre au comité d'audit, ce que le contrôle de gestion livre à la direction, et les fichiers que les deux équipes retravaillent chaque mois sans se le dire.",
                "Relevé du temps passé sur un trimestre ordinaire : préparation des missions, relances des audités, collecte des chiffres des entités, mise en forme du reporting, commentaires d'écarts.",
                "Lecture des normes 4.2 et 10.3 de l'IIA : l'usage d'outils adéquats fait partie de la conscience professionnelle, et le responsable de l'audit interne doit former son équipe aux technologies qu'il introduit.",
                "Inventaire sans reproche des assistants, macros et comptes en ligne déjà utilisés, y compris ceux qu'un collaborateur a ouverts seul.",
                "Choix de trois chantiers pour le parcours, chacun avec un indicateur mesuré avant la session : délai de production du reporting, nombre de recommandations sans réponse, durée de préparation d'une mission.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : des chiffres qui se rapprochent avant d'être commentés",
            'duree'  => '3 h 30',
            'points' => [
                "Le référentiel commun : centres de coûts, axes analytiques, entités, devises, et le dictionnaire qui dit ce que recouvre chaque indicateur.",
                "Rapprocher chaque mois le résultat analytique du résultat de la comptabilité générale, et documenter l'écart résiduel au lieu de le répartir à la main.",
                "Où se trouvent les données : export du logiciel de gestion, requête en lecture seule, classeur d'une filiale, message d'un chef d'agence. Les dernières sont les plus fragiles.",
                "Automatiser la collecte des chiffres des entités dans un dossier unique, avec un contrôle de complétude à l'arrivée et une relance quand une entité manque.",
                "Exercice : rapprocher le résultat analytique d'un mois fictif de la balance, retrouver les trois écarts plantés et écrire leur explication.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : budget et prévision, l'assistant écrit les hypothèses, le tableur calcule",
            'duree'  => '3 h 30',
            'points' => [
                "Les trois façons de construire un budget rencontrées dans les services : reconduction corrigée, construction par les volumes, base zéro pour quelques lignes choisies.",
                "Faire rédiger par l'assistant la liste des hypothèses à confirmer auprès de chaque responsable, puis les faire valider par écrit avant tout calcul.",
                "Scénarios bas, central et haut dans le tableur, avec des hypothèses visibles en tête de feuille et aucun chiffre saisi en dur dans les formules.",
                "Prévision glissante mensuelle : réel à date plus reste à faire, et l'écart entre la dernière prévision et le budget expliqué en une phrase par ligne significative.",
                "Exercice : budget d'une agence ou d'un service en trois scénarios, présenté en dix minutes à un « directeur » joué par un autre participant.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : le reporting mensuel qui se prépare seul et le commentaire d'écarts qui se vérifie",
            'duree'  => '3 h 30',
            'points' => [
                "Calendrier de clôture de gestion : qui envoie quoi, à quel jour ouvré, sous quel format, et ce qui se passe quand une entité est en retard.",
                "Tableau de bord alimenté par les exports, avec quelques indicateurs par destinataire plutôt qu'une page identique pour tout le monde.",
                "Premier jet du commentaire d'écarts par l'assistant à partir des écarts calculés, puis vérification de chaque cause auprès du responsable opérationnel avant diffusion.",
                "Seuils de significativité fixés par le contrôleur : au-delà, un écart est expliqué ; en deçà, il est simplement montré.",
                "Exercice : reporting d'un mois avec son commentaire, dans lequel l'assistant a glissé une cause plausible mais fausse que le participant doit débusquer.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : audit interne, du plan fondé sur les risques au suivi des recommandations",
            'duree'  => '3 h 30',
            'points' => [
                "Mise à jour annuelle de la cartographie des risques et du plan d'audit (norme 9.4 de l'IIA, article 20 de la circulaire de la Commission bancaire pour les banques) : ce que l'assistant aide à structurer, ce que le responsable de l'audit décide.",
                "Préparation d'une mission : prise de connaissance des procédures, questionnaire de contrôle interne, programme de travail proposé par l'assistant puis corrigé par le chef de mission.",
                "Les tests sur des populations entières, présentés en une heure pour savoir quand les demander ; leur méthode complète relève de la formation dédiée à l'audit.",
                "Suivi des recommandations : tableau unique, relances automatiques avant échéance, preuves de mise en œuvre exigées, état de retard remonté au responsable de l'audit (norme 15.2).",
                "Exercice : à partir d'un tableau de suivi fictif, préparer l'état des recommandations pour le prochain comité d'audit.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi : rendre compte, fixer les règles communes, évaluer",
            'duree'  => '3 h 30',
            'points' => [
                "Note au comité d'audit et note mensuelle à la direction : ce que l'outil met en forme, ce que l'auteur affirme et signe.",
                "Charte d'usage de l'IA commune aux deux fonctions : outils autorisés, données interdites, pseudonymisation, relecture, traçabilité des consignes.",
                "Règle d'indépendance : l'auditeur interne qui a construit un flux automatisé pour un service n'audite pas ce flux dans les douze mois qui suivent (norme 2.2).",
                "Évaluation sur un dossier fil rouge : un mois de reporting à rapprocher et commenter, puis trois recommandations à suivre et à présenter.",
                "Plan à trois mois : qui tient la bibliothèque de requêtes et de consignes, quelle mesure prouvera que l'outil a servi.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Auditeurs internes, chefs de mission, responsables du contrôle interne, contrôleurs de gestion et analystes financiers"],
        ['l' => 'Durée', 'v' => "Parcours type de 3 jours en 6 demi-journées, découpé selon les postes"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "En quoi l'intelligence artificielle et l'automatisation transforment-elles le travail d'un auditeur interne et d'un contrôleur de gestion ?",
            'paragraphes' => [
                "Les deux métiers ne font pas la même chose, mais ils partagent une position : aucun des deux ne fabrique le chiffre qu'il examine. Le contrôleur de gestion le reçoit des opérations, le rapproche, l'explique et le projette ; l'auditeur interne vérifie que les processus qui le produisent sont maîtrisés et rend compte à un comité qui ne voit pas le détail. Pendant longtemps, la plus grande part de leur temps est allée à la collecte, à la mise en forme et aux relances. C'est précisément ce que les outils numériques savent désormais préparer, et ce qui laisse plus de place à l'analyse.",
                "Pour l'audit interne, le texte de référence l'assume. Les Normes internationales d'audit interne de l'IIA, publiées le 9 janvier 2024, rangent l'usage de techniques, d'outils et de technologies adéquats parmi les éléments de la conscience professionnelle (norme 4.2). La norme 10.3 demande au responsable de l'audit interne d'évaluer régulièrement les technologies de sa fonction et, lorsqu'il en introduit de nouvelles, de mettre en place des formations adéquates pour que les auditeurs s'en servent efficacement. Former l'équipe n'y est donc pas présenté comme un confort, mais comme une exigence.",
                "Pour le contrôle de gestion, le changement vient d'abord des logiciels de gestion. Un ERP comme Odoo tient des budgets analytiques et affiche, ligne par ligne, le réalisé, l'engagé et le théorique ; une commande d'achat qui dépasse l'enveloppe apparaît en rouge, selon la documentation d'Odoo 20.0. Le contrôleur n'a plus à reconstruire chaque mois ce que le système calcule déjà. Il lui reste à décider de ce qu'on mesure, à vérifier que le système dit vrai et à expliquer les écarts à ceux qui doivent agir.",
                "Les assistants d'IA ajoutent une capacité nouvelle, la rédaction : un programme de travail, un questionnaire de contrôle interne, un premier commentaire d'écarts, une note au comité. C'est aussi leur piège. Le guide publié en 2026 par le COSO sur le contrôle interne de l'IA générative le résume en une phrase : ses réponses sont probabilistes et peuvent être fausses avec assurance, et les contrôles doivent les traiter comme des affirmations à valider, non comme des faits. Pour deux métiers dont la valeur tient à la fiabilité de ce qu'ils affirment, la règle s'applique sans exception.",
                "Reste à dire qui parle. Richard SALANON n'exerce ni l'audit interne ni le contrôle de gestion : son terrain, ce sont les assistants d'IA, les tableurs, les requêtes, les tableaux de bord, les automatisations, Odoo et Dolibarr. Les normes, les méthodes de calcul des coûts et les arbitrages budgétaires appartiennent aux professionnels et à leur organisation. Quand cette page en cite un texte, c'est pour montrer où l'outil doit s'arrêter, pas pour dire comment l'appliquer.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans l'audit interne et le contrôle de gestion, quel travail l'outil prépare-t-il et quel jugement garde le professionnel ?",
            'legende' => "Le partage proposé pendant le parcours, de la cartographie des risques au calcul des coûts. À droite, la fiche de formation qui creuse chaque usage.",
            'entetes' => ['Activité', "Travail préparé par l'outil", 'Jugement du professionnel', 'Fiche à consulter'],
            'lignes'  => [
                ["Plan d'audit annuel", "Mise à jour de la cartographie des risques à partir des incidents, des constats passés et des changements de systèmes ; brouillon de plan classé par risque", "Pondérer les risques, arbitrer avec le comité d'audit, justifier ce qui n'est pas audité", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>"],
                ["Préparation d'une mission", "Synthèse des procédures, questionnaire de contrôle interne, programme de travail type", "Choisir les risques à couvrir, adapter le programme à l'entité, fixer l'étendue des tests", "<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>"],
                ["Tests sur les populations", "Requêtes et scripts qui examinent toutes les transactions d'une période", "Définir l'anomalie recherchée, éprouver le test, investiguer les exceptions, conclure", "<a href=\"/formations/sql-analystes\">SQL pour analystes métiers</a>"],
                ["Suivi des recommandations", "Tableau unique, relances avant échéance, état des retards pour le comité", "Juger si la preuve de mise en œuvre suffit, décider d'un audit de suivi", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Budget annuel", "Liste des hypothèses à confirmer, gabarits par entité, consolidation, scénarios chiffrés", "Négocier avec les responsables, proposer des arbitrages, défendre le budget devant la direction", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Prévision glissante", "Réel à date, reste à faire par extrapolation, comparaison avec le budget", "Corriger l'extrapolation par ce que l'on sait du terrain, signaler la dérive à temps", "<a href=\"/formations/data-literacy\">Décider avec les données</a>"],
                ["Reporting mensuel", "Collecte automatique des chiffres des entités, contrôles de complétude, tableau de bord actualisé", "Choisir les indicateurs, valider les chiffres avant diffusion, adapter le message au lecteur", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
                ["Analyse des écarts", "Calcul des écarts sur volume, prix et composition, premier jet du commentaire", "Vérifier chaque cause auprès des opérationnels, distinguer l'écart ponctuel de la tendance", "<a href=\"/formations/data-literacy\">Décider avec les données</a>"],
                ["Calcul des coûts", "Ventilation des charges selon les clés définies, coût de revient par produit ou par service", "Choisir les clés de répartition, les faire accepter, les revoir quand l'activité change", "<a href=\"/formations/odoo-dirigeants\">Odoo pour dirigeants</a>"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles lignes rouges un service d'audit interne ou de contrôle de gestion doit-il fixer à l'IA et aux automatisations ?",
            'intro' => "Chacune s'appuie sur une norme professionnelle, une réglementation sectorielle ou le droit des données. Pendant la formation, elles deviennent des consignes écrites que l'équipe garde après la session.",
            'items' => [
                ['titre' => "Faire auditer un outil par celui qui l'a construit", 'texte' => "La norme 2.2 de l'IIA demande aux auditeurs internes de s'abstenir d'auditer des activités dont ils étaient responsables, et présume l'objectivité altérée en deçà de 12 mois. Un auditeur qui a monté pour la comptabilité un flux de rapprochement automatique, ou qui a écrit les consignes de l'assistant du service achats, ne peut pas ensuite en évaluer le contrôle. Le parcours enseigne à tenir le registre de ce que chacun a construit, pour que le plan d'audit en tienne compte."],
                ['titre' => "Laisser sortir des données confidentielles sans le savoir", 'texte' => "L'article 16 de la circulaire n° 03-2017/CB/C de la Commission bancaire de l'UMOA impose aux auditeurs internes des banques de garder la confidentialité des informations reçues dans leur mission. Or certains outils envoient les données hors du poste sans que l'utilisateur s'en aperçoive : Microsoft précise que les calculs de Python dans Excel s'exécutent dans son cloud. Avant d'activer une fonction, on vérifie où partent les données. Au Bénin, la loi n° 2017-20 portant code du numérique encadre ces transferts ; en Europe, le RGPD."],
                ['titre' => "Noter des personnes sans regard humain", 'texte' => "Un contrôleur de gestion qui construit un classement automatique des vendeurs ou des agents ne fait plus seulement du reporting. L'annexe III, point 4 b), du règlement européen sur l'IA classe à haut risque les systèmes destinés à suivre et évaluer les performances et le comportement des personnes dans leurs relations de travail ; selon la Commission, ces règles s'appliqueront à partir du 2 décembre 2027. L'article 22 du RGPD donne déjà le droit de ne pas faire l'objet d'une décision fondée exclusivement sur un traitement automatisé."],
                ['titre' => "Diffuser un chiffre que personne ne sait refaire", 'texte' => "Un total produit par un assistant, sans formule ni requête conservée, ne se vérifie pas le mois suivant. L'article 69 de l'Acte uniforme relatif au droit comptable charge l'entité de mettre en place une organisation comptable qui permette aussi bien un contrôle interne fiable que le contrôle externe. Un reporting qui ne se rapproche pas des comptes sort de ce cadre. Les calculs se font dans le tableur, la requête ou l'ERP, et la rédaction seule est confiée à l'assistant."],
                ['titre' => "Arrêter un budget ou une allocation à la place de la direction", 'texte' => "L'outil chiffre des scénarios, il ne choisit pas entre eux. Réduire l'enveloppe d'une agence, geler un recrutement ou maintenir un investissement engage la direction, qui en répond devant le conseil. Le contrôleur présente les options et leurs conséquences ; l'assistant l'aide à les écrire clairement, jamais à trancher."],
                ['titre' => "Modifier un flux en production sans contrôle des changements", 'texte' => "Le guide 2026 du COSO rappelle que les modèles, les consignes et les données évoluent souvent, et que l'évaluation des risques et le contrôle des changements doivent suivre ce rythme. Une automatisation de reporting retouchée la veille d'un comité peut fausser tous les chiffres sans erreur visible. L'<a href=\"/histoires/knight-capital\">histoire de Knight Capital</a> montre ce que coûte une mise en service mal contrôlée : plus de 460 millions de dollars de perte en environ 45 minutes."],
                ['titre' => "Taire une déficience parce que l'outil ne l'a pas signalée", 'texte' => "Un tableau de bord sans alerte ne prouve pas que tout va bien. Dans les banques de l'UMOA, l'article 14 de la même circulaire veut que les déficiences importantes soient communiquées sans délai, par le responsable de l'audit interne, aux organes de gouvernance et à la Commission bancaire. L'outil aide à repérer ; la décision de signaler reste un acte professionnel, et son absence aussi."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi un commentaire d'écarts rédigé par l'IA peut-il être plus dangereux qu'un chiffre faux ?",
            'texte' => "Un chiffre faux finit souvent par se voir : il ne se rapproche pas de la balance, ou il choque un lecteur attentif. Une explication fausse, elle, rassure. Demandez à un assistant pourquoi la marge d'une agence a baissé de deux points : il proposera une hausse des prix d'achat, un effet de mélange ou une remise exceptionnelle, avec la même assurance, sans avoir parlé à personne. Si ce texte part tel quel au comité de direction, la décision portera sur une cause inventée. Dans le parcours, aucune cause n'entre dans un commentaire sans le nom de la personne qui l'a confirmée et la date de l'échange.",
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères datés un auditeur ou un contrôleur de gestion doit-il connaître avant de s'outiller ?",
            'items' => [
                ['valeur' => '70 %', 'libelle' => "Part des fraudes de l'étude 2026 de l'ACFE dues à trois faiblesses de contrôle : l'absence de contrôle interne (33 %), le contournement de contrôles existants (19 %) et l'absence de revue par la direction (18 %).", 'source' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/-/media/files/acfe/pdfs/rttn/2026/2026-report-to-the-nations.pdf'],
                ['valeur' => '84 000 contre 186 000 dollars', 'libelle' => "Perte médiane des fraudes selon que la revue par la direction existait ou non dans l'organisation victime, soit 55 % de moins ; elle était en place dans 71 % des cas étudiés (ACFE, édition 2026).", 'source' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/-/media/files/acfe/pdfs/rttn/2026/2026-report-to-the-nations.pdf'],
                ['valeur' => '12 mois', 'libelle' => "Durée médiane d'une fraude avant sa détection dans l'étude 2026 de l'ACFE ; 24 mois pour les fraudes aux états financiers et 18 mois pour les remboursements de frais.", 'source' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/-/media/files/acfe/pdfs/rttn/2026/2026-report-to-the-nations.pdf'],
                ['valeur' => '5 février 2026', 'libelle' => "Entrée en vigueur de l'exigence thématique de l'IIA sur la cybersécurité ; celle sur les tiers s'applique depuis le 15 septembre 2026, celle sur le comportement organisationnel le 15 décembre 2026.", 'source' => "IIA, exigences thématiques", 'url' => 'https://www.theiia.org/en/standards/2024-standards/topical-requirements/'],
                ['valeur' => '31 août et 28 février', 'libelle' => "Dates limites d'envoi à la Commission bancaire des rapports semestriels sur le contrôle interne des banques de l'UMOA, arrêtés au 30 juin et au 31 décembre (circulaire n° 03-2017/CB/C, en vigueur depuis le 2 juillet 2018).", 'source' => 'BCEAO, circulaire n° 03-2017/CB/C', 'url' => 'https://www.bceao.int/sites/default/files/2018-03/CIRCULAIRE%20N%C2%B003-2017_CB_C%20RELATIVE%20AU%20CONTROLE%20INTERNE%20DES%20ETABLISSEMENTS%20DE%20CREDIT%20ET%20DES%20COMPAGNIES%20FINANCIERES%20DANS%20L%27UMOA.pdf'],
                ['valeur' => '2 décembre 2027', 'libelle' => "Application des règles du règlement européen sur l'IA aux systèmes à haut risque dans l'emploi, dont ceux qui évaluent les performances des personnes (page de la Commission mise à jour le 3 août 2026).", 'source' => 'Commission européenne, cadre réglementaire de l\'IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "Quelles situations d'audit et de contrôle de gestion le parcours traite-t-il, en Afrique francophone comme en Europe ?",
            'items' => [
                ['secteur' => "Direction de l'audit interne d'une banque, à Niamey", 'probleme' => "Les recommandations des missions sont suivies dans des courriels. À chaque rapport semestriel destiné à la Commission bancaire, l'équipe passe deux semaines à retrouver qui a promis quoi, et pour quand.", 'solution' => "Un tableau de suivi unique, alimenté à la clôture de chaque mission, des relances automatiques quinze jours avant chaque échéance, des preuves de mise en œuvre rangées avec la recommandation, et l'état des retards préparé chaque mois au lieu de deux fois par an."],
                ['secteur' => "Contrôle de gestion d'une société d'égrenage, à Bobo-Dioulasso", 'probleme' => "Le budget de campagne repose sur un tonnage et un prix d'achat fixés une fois pour toutes, et la direction découvre en cours de campagne qu'il ne tient plus.", 'solution' => "Trois scénarios de tonnage et de prix dans le tableur, une prévision mise à jour chaque mois avec les volumes réellement collectés, et une note d'une page à la direction dont l'assistant rédige le premier jet et le contrôleur chaque chiffre."],
                ['secteur' => "Clinique privée, à Libreville", 'probleme' => "La direction veut connaître le coût de chaque service, mais les charges de personnel et de plateau technique sont saisies en un seul bloc, et les dossiers des patients ne doivent pas sortir de l'établissement.", 'solution' => "Axes analytiques par service dans le logiciel de gestion, clés de répartition décidées avec les chefs de service, données agrégées par mois sans aucun nom de patient, et aucun envoi vers un assistant en ligne."],
                ['secteur' => "Filiale d'un groupe de distribution, à Kinshasa", 'probleme' => "Le siège exige un reporting en euros au cinquième jour ouvré, alors que les ventes sont tenues en francs congolais et en dollars, avec des taux de conversion qui varient d'un fichier à l'autre.", 'solution' => "Un seul fichier de taux par mois, validé par le contrôleur, une consolidation automatique qui refuse un fichier sans devise renseignée, et un contrôle de rapprochement avec la comptabilité locale avant tout envoi."],
                ['secteur' => "Audit interne d'une intercommunalité, à Nantes", 'probleme' => "Le plan d'audit est reconduit d'une année sur l'autre, sans lien visible avec les risques, et le comité demande sur quoi il repose.", 'solution' => "Cartographie des risques mise à jour avec les directions, assistant utilisé pour structurer les entretiens et regrouper les risques cités, pondération décidée par la responsable de l'audit, et justification écrite des domaines laissés hors du plan."],
                ['secteur' => "Contrôleur de gestion d'une PME industrielle, à Neuchâtel", 'probleme' => "La prévision de trésorerie et de marge se refait chaque mois à la main, et le contrôleur voudrait utiliser Python dans Excel pour l'automatiser.", 'solution' => "Vérification préalable avec la direction, puisque ces calculs s'exécutent dans le cloud de Microsoft, choix de données agrégées sans noms de clients, script documenté et relu par un second collaborateur, et prévision comparée chaque mois au réel."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et systèmes un auditeur interne ou un contrôleur de gestion doit-il savoir manier ?",
            'legende' => "Ce que les participants ont réellement sous la main, du siège d'Abidjan à la filiale de Lyon. Les tarifs cités ont été lus le 5 octobre 2026 chez chaque éditeur et lui sont réglés directement par l'organisation ; la formation n'en impose aucun.",
            'entetes' => ['Outil ou système', 'Usage dans le métier', "Point d'attention", 'Formation liée'],
            'lignes'  => [
                ["SYSCOHADA révisé et Acte uniforme relatif au droit comptable", "Cadre des comptes que le reporting doit retrouver ; manuel des procédures comptables exigé par l'article 16", "La comptabilité de gestion se rapproche chaque mois de la comptabilité générale, faute de quoi les deux chiffres divergent", "<a href=\"/formations/ia-comptables-syscohada\">IA pour comptables (SYSCOHADA)</a>"],
                ['Odoo', "Comptabilité analytique par plans et comptes, budgets analytiques avec réalisé, engagé et théorique", "La gestion des budgets s'active dans les réglages, après la création des plans analytiques. Côté prix, Odoo affiche 19,90 € mensuels par utilisateur sur la formule Standard la première année si l'on paie à l'année, 24,90 € ensuite", "<a href=\"/formations/odoo-dirigeants\">Odoo pour dirigeants</a>"],
                ['Dolibarr', "Gestion du devis au règlement dans beaucoup de PME, exports pour le reporting", "Le contrôleur part souvent des exports ou de la base, à lire avec un compte qui ne peut rien modifier", "<a href=\"/formations/sql-analystes\">SQL pour analystes métiers</a>"],
                ['Tableur, Power Query et Python dans Excel', "Budget, prévision, rapprochements, tests simples, suivi des recommandations", "Python dans Excel exige un abonnement Microsoft 365 éligible et s'exécute dans le cloud de Microsoft : données à choisir en conséquence", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ['Power BI et Looker Studio', "Tableaux de bord de la direction et du comité, actualisés depuis les sources", "Power BI Pro à 12,10 € HT par utilisateur et par mois en paiement annuel ; hors capacité dédiée, le lecteur d'un rapport partagé a lui aussi besoin d'une licence Pro", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
                ['Requêtes SQL en lecture', "Interroger la base du logiciel de gestion sans attendre un export", "Toujours sur une copie ou avec un compte en lecture seule, jamais sur la production en période de clôture", "<a href=\"/formations/sql-analystes\">SQL pour analystes métiers</a>"],
                ["Assistants d'IA en offre professionnelle", "Programmes de travail, questionnaires, premiers jets de notes et de commentaires", "Pas de compte gratuit pour des données de l'organisation ; le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide au choix", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>"],
                ['n8n ou Make', "Collecte des chiffres des entités, relances des recommandations, alertes de clôture", "L'offre Starter de n8n Cloud revient à 20 € mensuels, facturés à l'année, et couvre 2 500 exécutions ; installé sur un serveur interne, n8n ne fait sortir aucun chiffre ; voir le <a href=\"/comparatifs/n8n-vs-make-vs-zapier\">comparatif n8n, Make et Zapier</a>", "<a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a>"],
                ['WhatsApp', "Remontée des chiffres journaliers par les agences, rappels aux audités", "Un message n'est pas une source : le chiffre est ressaisi ou importé dans un fichier daté, et l'original est conservé", "<a href=\"/formations/whatsapp-odoo-dolibarr-crm\">WhatsApp relié à Odoo, Dolibarr et au CRM</a>"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type d'un parcours pour auditeurs et contrôleurs de gestion, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours se découpe-t-il selon le poste de chacun ?",
            'legende' => "Un responsable de l'audit n'a pas besoin des séances sur la prévision, ni un analyste de celles sur le plan d'audit. Le tableau indique les séances à retenir par fonction et la fiche qui prolonge le parcours ; la première matinée et la dernière après-midi réunissent tout le monde.",
            'entetes' => ['Fonction', 'Compétence visée en fin de parcours', 'Séances à suivre', 'Fiche qui prolonge'],
            'lignes'  => [
                ["Responsable de l'audit interne", "Fixer les règles d'usage, intégrer les outils au plan d'audit, rendre compte au comité de leurs limites", "Jour 1 matin, jour 3", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>"],
                ["Chef de mission et auditeur interne", "Préparer une mission avec l'assistant, demander les bons tests, suivre les recommandations", "Jour 1, jour 3 matin", "<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>"],
                ["Responsable du contrôle interne", "Tenir la cartographie des risques, tester les contrôles clés, préparer les rapports réglementaires", "Jour 1 matin, jour 3", "<a href=\"/formations/ia-processus-metier\">IA dans les processus métier</a>"],
                ["Contrôleur de gestion", "Construire le budget et la prévision, produire le reporting, commenter les écarts", "Jour 1 après-midi, jour 2, jour 3 après-midi", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
                ["Contrôleur de gestion opérationnel, en usine ou en agence", "Suivre les coûts et les volumes de son site, expliquer ses écarts au contrôle central", "Jour 1 après-midi, jour 2 après-midi", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Analyste financier ou chargé de reporting", "Interroger les données lui-même, automatiser la collecte, fiabiliser les chiffres", "Jour 1 après-midi, jour 2", "<a href=\"/formations/sql-analystes\">SQL pour analystes métiers</a>"],
                ["Directeur administratif et financier", "Lire les tableaux, questionner les écarts, arbitrer les outils et leur budget", "Jour 1 matin, jour 2 après-midi", "<a href=\"/formations/data-literacy\">Décider avec les données</a>"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour un service d'audit interne, une équipe de contrôle de gestion ou un analyste seul ?",
            'legende' => "Le calendrier évite la préparation budgétaire de fin d'année, les clôtures et les semaines de comité d'audit. Dans les banques de l'UMOA, il évite aussi juillet-août et janvier-février, mois de préparation des rapports semestriels sur le contrôle interne.",
            'entetes' => ['Format', 'Organisation', 'Données utilisées', 'Quand le retenir'],
            'lignes'  => [
                ['Intra, audit et contrôle de gestion ensemble', "Six demi-journées dans vos locaux, avec les deux équipes pour la première matinée et la dernière après-midi", "Extraits pseudonymisés de vos systèmes, votre tableau de suivi des recommandations, votre reporting", "Une organisation qui veut un référentiel et des règles communs aux deux fonctions"],
                ['Intra, une seule fonction', "Quatre à six demi-journées réparties sur deux ou trois semaines", "Les fichiers et le calendrier de la fonction concernée", "Une équipe de contrôle de gestion avant la campagne budgétaire, un service d'audit avant son plan annuel"],
                ['Inter', "Deux à trois jours réunissant des professionnels de plusieurs organisations", "Jeux de données fictifs reproduisant un groupe multi-entités, aucune donnée réelle partagée", "Une ou deux personnes par structure, ou un auditeur qui vient de prendre son poste"],
                ['À distance', "Neuf ou dix créneaux de deux heures en ligne, écran partagé, un exercice à rendre entre deux créneaux", "Classeurs et extractions déposés la veille dans un dossier commun", "Équipes réparties entre un siège et des filiales dans plusieurs pays"],
                ['Hybride', "Première journée sur place pour le diagnostic, puis séances à distance calées sur les clôtures mensuelles", "Le reporting réel des mois qui suivent", "Quand on veut voir l'outil tenir sur deux ou trois clôtures successives"],
                ['Accompagnement individuel', "Quelques demi-journées choisies selon le chantier, chez vous ou en ligne", "Les classeurs de la personne, débarrassés des noms", "Contrôleur de gestion seul dans une PME, auditeur unique d'une organisation de taille moyenne"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe d'audit ou de contrôle de gestion ?",
            'intro'      => "Cette page n'affiche pas de tarif, parce qu'un service de quatre auditeurs sous un seul ERP ne se forme pas au même coût qu'une direction financière qui consolide douze filiales. Chaque proposition est chiffrée sur devis, une fois connus les fonctions, les systèmes sources et les fichiers d'exercice ; ce premier travail, échange compris, ne coûte rien. Vous pouvez régler par Mobile Money (MTN, Moov), par carte bancaire, par PayPal, par virement ou en espèces. Licences de tableurs, de Power BI, de n8n ou d'assistants d'IA : elles se paient à chaque éditeur, jamais dans le devis de formation.",
            'items'      => [
                ['offre' => 'Cadrage', 'prix' => 'Gratuit', 'inclus' => ["Échange avec le responsable de l'audit ou le contrôleur de gestion principal", "Relevé des systèmes sources et des formats d'export", "Proposition de parcours et devis écrit"]],
                ['offre' => 'Parcours type intra', 'prix' => 'Sur devis', 'inclus' => ["Six demi-journées sur vos fichiers pseudonymisés", "Charte d'usage de l'IA commune aux deux fonctions", "Bibliothèque de requêtes, de gabarits et de consignes", "Évaluation sur un dossier fil rouge et attestation nominative"]],
                ['offre' => 'Formation du catalogue', 'prix' => 'Sur devis', 'inclus' => ["Une formation ciblée sur un outil ou une méthode", "Exercices construits sur vos données", "Supports et corrigés modifiables"]],
                ['offre' => 'Suivi après la session', 'prix' => 'Sur devis', 'inclus' => ["Séance après la première clôture ou le premier comité", "Révision des consignes et des flux", "Bilan écrit des indicateurs suivis"]],
            ],
            'variations' => [
                "La taille du groupe, et le fait de réunir audit et contrôle de gestion ou une seule des deux fonctions.",
                "La diversité des sources de chiffres : un logiciel de gestion unique, ou plusieurs logiciels et les classeurs des filiales.",
                "Le travail de préparation des jeux d'exercice, quand il faut retirer des fichiers réels tout ce qui identifie une personne.",
                "La mise en place, si vous la demandez, d'un serveur n8n interne ou d'un modèle d'IA local pendant le parcours.",
                "Les déplacements : séances au Bénin, ailleurs en Afrique, en Europe, ou entièrement en ligne.",
                "Les séances de suivi prévues après la formation, et la rédaction de supports bilingues.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation des auditeurs et des contrôleurs de gestion ?",
            'paragraphes' => [
                "Le budget de formation se justifie d'abord par les textes que la fonction applique. Pour l'audit interne, la norme 10.3 de l'IIA fait de la formation aux technologies introduites une responsabilité du responsable de l'audit interne. Dans les banques et compagnies financières de l'UMOA, l'article 16 de la circulaire n° 03-2017/CB/C demande à l'établissement de prendre les dispositions pour que ses auditeurs maintiennent leurs connaissances à jour, et à la fonction d'audit de disposer de compétences en sécurité des systèmes d'information. Le programme, les feuilles de présence et l'attestation remis en fin de session documentent cet effort.",
                "Un fonds de formation continue peut ensuite être sollicité, sans qu'aucune prise en charge soit promise ici. En Côte d'Ivoire, le plan de formation du FDFP s'adresse aux entreprises à jour de leurs taxes de formation, et le remboursement suit le contrôle du fonds. Au Bénin, le FODEFCA, dont les statuts ont été approuvés par le décret n° 2022-286, finance la formation continue du secteur privé en laissant une part du coût au bénéficiaire. Au Sénégal, le 3FPT ouvre un guichet au personnel des entreprises. Chaque fonds a ses règles, ses calendriers et ses justificatifs : la demande se fait par écrit, programme et devis joints, avant de fixer les dates.",
                "En France, France Compétences rappelle que depuis le 1er janvier 2022, l'accès aux fonds publics ou mutualisés suppose un prestataire certifié Qualiopi. Richard SALANON ne détient pas cette certification : une organisation française finance la session sur son budget propre. Ailleurs en Europe et au Canada, les règles de chaque dispositif se vérifient au cas par cas, avant la commande et jamais après.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on quand un service d'audit ou de contrôle de gestion s'outille ?",
            'intro' => "Elles apparaissent rarement pendant la formation. Elles arrivent à la première clôture tendue ou au premier comité, quand l'outil semble avoir fait le travail.",
            'items' => [
                ['titre' => "Automatiser un reporting que personne ne lit", 'texte' => "Avant d'automatiser, on demande à chaque destinataire quelles décisions il prend avec le document. Les pages qui ne servent à aucune décision sont supprimées, pas accélérées."],
                ['titre' => "Laisser deux référentiels vivre côte à côte", 'texte' => "Le contrôle de gestion découpe par centres de coûts, l'audit par processus, la comptabilité par comptes, et chaque fonction garde sa table de correspondance. Une table unique, tenue par un responsable nommé, évite trois versions du même chiffre en comité."],
                ['titre' => "Confier la collecte et oublier le contrôle de complétude", 'texte' => "Un flux qui rassemble les fichiers des entités ne dit pas qu'une entité manque. Le contrôle à l'arrivée compte les fichiers attendus, vérifie la période et la devise, et bloque la consolidation tant qu'il manque une pièce."],
                ['titre' => "Publier un commentaire d'écarts sans source", 'texte' => "Le premier jet de l'assistant sert de liste de questions. Chaque cause retenue porte le nom de la personne qui l'a confirmée ; les autres sont effacées avant diffusion."],
                ['titre' => "Mélanger l'audit et le conseil sans le dire", 'texte' => "L'audit interne qui aide un service à construire son outil fait du conseil. C'est utile, mais cela se note au registre des missions, et l'audit de cet outil revient à une autre personne ou attend douze mois."],
                ['titre' => "Relancer les audités par un robot sans prévenir", 'texte' => "Une relance automatique mal annoncée passe pour du harcèlement. Le comité de direction valide le principe, les audités reçoivent le calendrier, et le premier message part avec le nom de l'auditeur responsable."],
                ['titre' => "Bâtir toute la consolidation autour d'un seul collaborateur", 'texte' => "Si l'analyste qui a écrit les requêtes de consolidation quitte l'entreprise en mars, le reporting d'avril ne sort pas. Une fiche par flux, rangée avec les fichiers, dit d'où viennent les données et comment relancer le traitement, et un binôme est formé à le dépanner."],
                ['titre' => "Ne rien mesurer", 'texte' => "Sans le délai de production du reporting et le nombre de recommandations en retard notés avant la session, personne ne saura dire trois mois plus tard si les outils ont servi."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue se rattachent à l'audit interne et au contrôle de gestion ?",
            'legende' => "Dix fiches du catalogue prolongent ce parcours, rangées de la plus spécifique à l'audit à la plus générale. Le programme complet, les prérequis et les formats de chacune figurent sur sa propre page.",
            'entetes' => ['Formation', 'Public visé', 'Apport pour le métier', 'Durée'],
            'lignes'  => [
                ["<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>", "Auditeurs internes, contrôleurs internes, responsables conformité", "Tests sur des populations entières, revue de contrats, dossier de travail qu'un autre auditeur refait", "3 jours en 6 demi-journées, revue de dossier à distance en option"],
                ["<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>", "Contrôleurs de gestion, chargés de reporting", "Indicateurs calculables, modèle de données, rapports qui s'actualisent seuls", "3 jours en 6 demi-journées, plus 2 h de suivi à distance"],
                ["<a href=\"/formations/sql-analystes\">SQL pour analystes métiers</a>", "Contrôleurs de gestion, analystes, auditeurs qui extraient eux-mêmes", "Requêtes de lecture sur Odoo, Dolibarr ou une application métier", "3 jours en 6 demi-journées, plus une demi-journée optionnelle"],
                ["<a href=\"/formations/data-literacy\">Décider avec les données (data literacy)</a>", "Directeurs financiers, membres de comités, contrôleurs qui présentent", "Lire un indicateur, questionner un écart, repérer un chiffre fragile", "2 jours en 4 demi-journées, plus 2 h de suivi à un mois"],
                ["<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>", "Toute l'équipe", "Classeurs fiables, formules, tableaux croisés et contrôles", "2 jours en 4 demi-journées, plus un retour à un mois"],
                ["<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>", "Responsables de l'audit interne, directions financières", "Charte, inventaire des usages, rôles et contrôle de l'IA", "2 jours en 4 demi-journées, revue à 3 mois en option"],
                ["<a href=\"/formations/ia-processus-metier\">IA dans les processus métier</a>", "Responsables du contrôle interne", "Choisir les étapes confiées à l'IA et garder des points de validation humains", "2 jours en 4 demi-journées, point d'étape en option"],
                ["<a href=\"/formations/odoo-dirigeants\">Odoo pour dirigeants</a>", "Contrôleurs de gestion et directions d'entreprises sous Odoo", "Tableaux de bord, rapports et validations dans Odoo", "2 jours en 4 demi-journées, plus 2 h de suivi"],
                ["<a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a>", "Référent automatisation du service", "Collecte des chiffres, relances, alertes de clôture", "2 jours en 4 demi-journées, ou atelier d'une demi-journée"],
                ["<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>", "Tout auditeur ou contrôleur qui utilise un assistant", "Données personnelles, secret, biais, règlement européen sur l'IA", "1 jour de socle, ou 2 jours"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos auditeurs et vos contrôleurs de gestion avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des auditeurs et des contrôleurs de gestion. Son métier de développeur le place du côté où naissent les chiffres que ces professionnels examinent : paramétrage d'Odoo et de Dolibarr, exports, requêtes, flux qui alimentent un tableau de bord, IA branchée sur des logiciels en service. Une consolidation qui se casse un jour de clôture, une extraction à laquelle il manque une filiale, il en a réparé. Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience, plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées selon ses propres chiffres et des missions dans " . count((array) fait('pays_travailles')) . " pays. On lui doit <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp doté d'IA, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Aucun titre d'auditeur, de commissaire aux comptes ou de contrôleur de gestion ne figure à son parcours, et aucun éditeur ne l'a certifié. Ce qu'il transmet tient à l'outil, à la façon de s'en servir et aux contrôles qui l'encadrent ; évaluer un risque, arbitrer un budget ou conclure une mission reste le travail de vos équipes, selon leurs normes. Les groupes restent petits, les exercices tournent sur vos classeurs débarrassés des données nominatives et sur vos propres logiciels, chaque participant repart avec des fichiers qu'il peut modifier, et personne ne vous annonce d'avance combien d'heures vous gagnerez.",
                "Pour en savoir plus sur lui, lisez la page <a href=\"/richard-salanon\">Richard SALANON</a> ; la liste des pays couverts se trouve sur celle des <a href=\"/zones/\">zones d'intervention</a>. L'ensemble des <a href=\"/formations/\">formations</a> est rangé par domaine, notamment <a href=\"/formations/domaine/ia-systemes-existants\">IA dans vos systèmes existants</a> et <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>. Si votre besoin est de construire plutôt que d'apprendre, par exemple un reporting branché en direct sur l'ERP, voyez la <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a> ou l'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former votre service d'audit ou de contrôle de gestion ?",
            'texte' => "Rapprochez chaque chiffre des comptes avant de le commenter, faites calculer par le tableur et rédiger par l'assistant, ne laissez entrer dans un commentaire que des causes confirmées par quelqu'un, suivez chaque recommandation dans un seul tableau, n'auditez jamais un outil que vous avez construit, et vérifiez où partent les données avant d'activer une fonction : la méthode, et non l'outil, fait la fiabilité du service.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre service d'audit interne ou de contrôle de gestion à l'IA et aux données ?",
            'texte'  => "Décrivez votre équipe (audit, contrôle de gestion ou les deux), les logiciels qui produisent vos chiffres, le pays, et ce qui vous coûte le plus de temps entre une clôture et un comité. Une réponse vous parvient sous " . fait('delai_reponse') . ", suivie d'un programme ajusté à vos fonctions et d'un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un parcours audit et contrôle de gestion'],
        ],
    ],

    'faq' => [
        ['q' => "L'IA va-t-elle remplacer les auditeurs internes et les contrôleurs de gestion ?", 'r' => "Elle remplace une partie de la collecte, de la mise en forme et de la rédaction, pas le jugement. Pondérer un risque, conclure une mission, arbitrer un budget ou expliquer un écart restent des actes professionnels. Le guide 2026 du COSO rappelle que les réponses de l'IA générative peuvent être fausses avec assurance et doivent être validées."],
        ['q' => "Par quoi un service doit-il commencer ?", 'r' => "Par la demi-journée d'inventaire et de règles qui ouvre le parcours type : elle dit quels outils sont autorisés et quelles données ne sortent jamais. Ensuite, le contrôle de gestion commence généralement par la collecte et le rapprochement des chiffres, l'audit interne par le suivi des recommandations, deux chantiers rapides à mesurer."],
        ['q' => "Faut-il former l'audit interne et le contrôle de gestion ensemble ?", 'r' => "Pour la première matinée et la dernière après-midi, oui : les deux fonctions travaillent sur les mêmes extractions et gagnent à partager un référentiel et une charte. Pour le reste, les besoins divergent, et chaque équipe suit les demi-journées de son métier."],
        ['q' => "Un auditeur interne peut-il aider un service à automatiser ses contrôles ?", 'r' => "Oui, à titre de conseil, mais la norme 2.2 de l'IIA présume son objectivité altérée s'il audite ensuite une activité dont il a eu la responsabilité dans les 12 mois précédents. Le parcours apprend à noter ces interventions, pour que l'audit de l'outil revienne à quelqu'un d'autre."],
        ['q' => "Peut-on utiliser un assistant d'IA sur la paie ou les données des clients ?", 'r' => "Seulement sous trois conditions travaillées en séance : un outil autorisé par l'organisation avec des conditions écrites, des données pseudonymisées ou agrégées, et une trace de ce qui a été transmis. À défaut, l'assistant écrit la formule ou la requête à partir d'une description du fichier, et les données restent sur le poste."],
        ['q' => "Un classement automatique des commerciaux par performance pose-t-il problème ?", 'r' => "Il peut en poser. Le règlement européen sur l'IA classe à haut risque les systèmes destinés à évaluer les performances des personnes au travail, avec des règles applicables à partir du 2 décembre 2027 selon la Commission, et le RGPD protège contre les décisions fondées exclusivement sur un traitement automatisé. Le tableau peut éclairer un manager, pas décider à sa place."],
        ['q' => "Nos chiffres viennent de SAP, de Sage ou d'un logiciel maison : est-ce un obstacle ?", 'r' => "Non. Les exercices partent de ce que vos systèmes savent exporter, ou d'une copie de leur base interrogée en lecture. Odoo et Dolibarr ne servent d'exemples que si l'organisation ou ses filiales les ont adoptés."],
        ['q' => "Faut-il savoir programmer ?", 'r' => "Non. Il faut maîtriser un tableur, ses filtres et ses tableaux croisés, et connaître ses propres données. Les requêtes et les petits scripts sont écrits avec l'assistant, puis expliqués ligne par ligne pour que le participant sache les relire et les corriger."],
        ['q' => "Le parcours convient-il à un établissement de crédit de l'UMOA ?", 'r' => "Oui, et il tient compte de la circulaire n° 03-2017/CB/C : confidentialité des informations, suivi des mesures correctrices, rapports semestriels sur le contrôle interne. Le calendrier des séances évite les mois de préparation de ces rapports. Les questions d'interprétation de la circulaire restent à trancher avec la conformité de l'établissement."],
        ['q' => "Le formateur a-t-il exercé l'audit ou le contrôle de gestion ?", 'r' => "Non, et il le dit d'emblée. Richard SALANON vient du développement et de la digitalisation : il apprend aux équipes à manier et à contrôler les assistants d'IA, les tableurs, les requêtes, les tableaux de bord et les automatisations. Les normes d'audit et les méthodes de gestion restent celles de vos professionnels."],
        ['q' => "Quel budget prévoir ?", 'r' => "Aucun tarif n'est affiché : chaque parcours fait l'objet d'un devis qui dépend de la taille du groupe, du nombre de sources de chiffres, de la préparation des fichiers, du lieu et du suivi souhaité. L'échange initial et le devis sont sans frais, et vous réglez par Mobile Money, carte, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "IIA, Normes internationales d'audit interne, version française publiée le 9 janvier 2024 (normes 2.2, 4.2, 9.4, 10.3 et 15.2)", 'url' => 'https://www.theiia.org/globalassets/site/standards/editable-versions/global-internal-audit-standards-french.pdf', 'date' => '2026-10-05'],
        ['titre' => "IIA, exigences thématiques (cybersécurité, tiers, comportement organisationnel, résilience) et leurs dates d'entrée en vigueur", 'url' => 'https://www.theiia.org/en/standards/2024-standards/topical-requirements/', 'date' => '2026-10-05'],
        ['titre' => "COSO, Internal Control : cadre intégré de 2013 et guides complémentaires", 'url' => 'https://www.coso.org/internal-control', 'date' => '2026-10-05'],
        ['titre' => "COSO, Achieving Effective Internal Control Over Generative AI (2026)", 'url' => 'https://www.coso.org/_files/ugd/719ba0_08f358f2c8f946fa9d26bd51d37b7117.pdf', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, circulaire n° 03-2017/CB/C relative au contrôle interne des établissements de crédit et des compagnies financières dans l'UMOA (articles 14, 16, 20, 26 et 27)", 'url' => 'https://www.bceao.int/sites/default/files/2018-03/CIRCULAIRE%20N%C2%B003-2017_CB_C%20RELATIVE%20AU%20CONTROLE%20INTERNE%20DES%20ETABLISSEMENTS%20DE%20CREDIT%20ET%20DES%20COMPAGNIES%20FINANCIERES%20DANS%20L%27UMOA.pdf', 'date' => '2026-10-05'],
        ['titre' => "OHADA, bibliothèque numérique : Acte uniforme relatif au droit comptable et à l'information financière (articles 14, 16 et 69)", 'url' => 'https://biblio.ohada.org/doc_num.php?explnum_id=2061', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement (UE) 2024/1689 sur l'intelligence artificielle, annexe III, point 4", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32024R1689', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, cadre réglementaire de l'IA : calendrier d'application (mise à jour du 3 août 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "CNIL, règlement général sur la protection des données, chapitre III (article 22)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre3', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "ACFE, Occupational Fraud 2026 : A Report to the Nations (rapport complet)", 'url' => 'https://www.acfe.com/-/media/files/acfe/pdfs/rttn/2026/2026-report-to-the-nations.pdf', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : budgets analytiques", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/accounting/reporting/budget.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page Tarification", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, présentation de Python dans Excel", 'url' => 'https://support.microsoft.com/fr-fr/office/pr%C3%A9sentation-de-python-dans-excel-55643c2e-ff56-4168-b1ce-9428c8308545', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, tarification de Power BI", 'url' => 'https://www.microsoft.com/fr-fr/power-platform/products/power-bi/pricing', 'date' => '2026-10-05'],
        ['titre' => "n8n, tarifs de n8n Cloud", 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-audit-controle', 'power-bi-looker-studio', 'sql-analystes', 'data-literacy', 'excel-google-sheets', 'gouvernance-ia'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise', 'digitalisation-d-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'n8n-vs-make-vs-zapier'],
    ],
];
