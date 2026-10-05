<?php
// ============================================================
// data/formations/ia-audit-controle.php · Fiche formation « IA pour l'audit,
// le contrôle et la conformité » (vague 1B, lot B, domaine
// ia-systemes-existants). Angle propre : auditeurs internes et externes,
// contrôleurs internes et de gestion, responsables conformité ; analyser des
// populations entières plutôt que des échantillons, détecter des anomalies,
// revoir contrats et pièces, documenter des travaux que l'on peut refaire,
// protéger le secret, connaître les limites de l'IA comme élément probant.
// Ne traite pas la conception des contrôles d'un processus par le métier
// (ia-processus-metier), la charte et le comité (gouvernance-ia), ni la
// tenue des comptes (ia-comptables-syscohada). Aucune ancienne page.
// Faits externes lus le 05/10/2026 : IIA (Normes internationales d'audit
// interne, version française, normes 5.2, 10.3, 14.1, 14.2, 14.6 ; cadre
// d'audit de l'IA du 13/09/2024), IAASB (manuel 2023-2024 : ISA 230, 500,
// 530 ; exposé-sondage du 05/08/2026 sur ISA 330, 500 et 520), ACFE
// (Occupational Fraud 2026), OHADA (règlement n° 01/2017/CM/OHADA, code
// d'éthique, article 717 de l'AUSCGIE cité par le code), loi béninoise
// n° 2017-20, RGPD, Commission européenne (article 4, fait vérifié du
// catalogue), tarifs OpenAI, Anthropic, Microsoft, versions Python, pandas,
// LibreOffice. Richard n'est ni auditeur ni expert-comptable : la page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA pour l\'audit, le contrôle et la conformité : analyser des populations entières, repérer les anomalies, revoir contrats et pièces, et documenter chaque test pour qu\'un autre auditeur puisse le refaire',
    'title'   => 'Formation IA pour l\'audit et le contrôle | Richard SALANON',
    'meta'    => 'Formation IA pour auditeurs et contrôleurs : tests sur populations entières, anomalies, revue de contrats, dossiers de travail traçables et secret.',
    'en_bref' => 'Cette formation apprend aux auditeurs internes et externes, aux contrôleurs internes et de gestion et aux responsables conformité à se servir de l\'intelligence artificielle pour tester des populations entières de transactions, repérer les anomalies, revoir des contrats et des pièces, puis documenter chaque test de façon qu\'un autre auditeur puisse le refaire. Elle dure trois jours, en six demi-journées, avec une revue de dossier à distance en option. Elle se tient en intra, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'ia-systemes-existants',
    'forte'   => false,
    'duree'   => '3 jours en 6 demi-journées, revue de dossier à distance en option',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : ce que l\'IA change dans une mission d\'audit, et ce que les normes ne lui délèguent pas',
            'duree'  => '3 h 30',
            'points' => [
                'Trois usages à ne pas confondre : l\'assistant qui rédige, l\'assistant qui écrit un programme d\'analyse, et le programme lui-même, exécuté sur la population ; seul le dernier produit un résultat que l\'on peut refaire.',
                'Lecture des exigences qui encadrent l\'outil : informations pertinentes, fiables et suffisantes (norme 14.1 de l\'IIA), documentation qui permet de réitérer les travaux (norme 14.6), documentation lisible par un auditeur expérimenté extérieur à la mission (ISA 230).',
                'Ce qu\'un modèle de langage fait mal dans une mission : compter, additionner, garantir qu\'il a lu toutes les lignes, redonner la même réponse deux fois.',
                'Les règles de la mission avant le premier fichier : quelles données sortent du service, dans quel outil, sous quel compte, et ce qui reste sur un poste interne.',
                'Atelier de pseudonymisation d\'un extrait réel : noms de tiers, comptes bancaires et identifiants fiscaux remplacés par des codes, table de correspondance conservée hors de l\'outil.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : obtenir une population complète et prouver qu\'elle l\'est',
            'duree'  => '3 h 30',
            'points' => [
                'Rédiger la demande d\'extraction : tables, champs, période, format, et la personne qui exécute la requête en lecture seule.',
                'Les contrôles de complétude : nombre de lignes, totaux rapprochés de la balance ou du grand livre, bornes de dates, continuité des numéros de pièces.',
                'L\'empreinte numérique du fichier reçu, notée au dossier, pour démontrer plus tard que la population analysée n\'a pas changé.',
                'Le dictionnaire des champs : ce que signifie chaque colonne, ses valeurs possibles et ses pièges (dates au format texte, montants négatifs, devises).',
                'Mise en forme avec Power Query ou un script Python écrit avec l\'assistant, relu ligne par ligne, puis exécuté par le participant.',
                'Exercice : une extraction volontairement incomplète, dont chaque binôme doit trouver le trou avant d\'aller plus loin.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : tester toute la population et repérer les anomalies',
            'duree'  => '3 h 30',
            'points' => [
                'Les tests exhaustifs classiques : doublons exacts et approchés, fractionnement sous un seuil d\'autorisation, écritures saisies un jour non ouvré, fournisseurs créés puis payés dans la semaine.',
                'Les rapprochements entre fichiers : fichier fournisseurs et fichier du personnel (comptes bancaires, téléphones, adresses communs), utilisateurs qui créent et valident la même opération.',
                'Les tests de distribution : montants ronds, montants juste sous un seuil, analyse des premiers chiffres selon la loi de Benford, et ce qu\'elle ne prouve pas.',
                'Faire écrire chaque test par l\'assistant, puis l\'éprouver sur un jeu de contrôle où les anomalies ont été plantées à l\'avance.',
                'Paramétrer les tolérances : écart de dates, écart de montant, ressemblance de libellés, et noter chaque réglage au dossier.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : de l\'exception au constat, et le retour raisonné à l\'échantillon',
            'duree'  => '3 h 30',
            'points' => [
                'Trier les exceptions : vraies anomalies, faux positifs explicables, données de mauvaise qualité ; la proportion de chaque catégorie sert elle-même de constat.',
                'Investiguer une exception : pièce, approbation, entretien, et ce que l\'on demande à la personne concernée sans l\'accuser.',
                'Quand l\'échantillon reste le bon choix : contrôle qui laisse une trace papier, pièce hors système, test de conformité sur un geste humain.',
                'Le tirage reproductible : aléatoire avec graine notée, systématique, ou par unité monétaire, fait par un programme et jamais « choisi » par l\'assistant.',
                'Exercice : les exceptions d\'un test de la matinée, triées, investiguées sur pièces fictives et résumées en une page.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : revoir des contrats et des pièces avec l\'IA',
            'duree'  => '3 h 30',
            'points' => [
                'La grille d\'extraction : parties, objet, durée, montant, révision des prix, pénalités, résiliation, exclusivité, clause de confidentialité, signataires.',
                'Extraire les clauses d\'un lot de contrats vers un tableau, avec la page et le paragraphe d\'origine pour chaque valeur.',
                'Confronter les contrats aux paiements : prix facturé contre prix convenu, contrat échu encore payé, avenant sans signature.',
                'Contrôler l\'extraction : relecture d\'un sous-ensemble par l\'auditeur, comptage des erreurs, décision de relire davantage si elles dépassent le seuil fixé.',
                'Les pièges des pièces : scans de mauvaise qualité, tableaux mal lus, contrats en anglais ou bilingues, annexes absentes du fichier.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : documenter, faire revoir, conclure, puis évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Le dossier de travail d\'un test assisté par l\'IA : objectif, source, empreinte du fichier, script, version de l\'outil, résultat, exceptions, revue.',
                'La revue par un pair qui refait le test à partir du seul dossier, sans aide orale de son auteur.',
                'Rédiger le constat (critère, situation constatée, cause, effet, recommandation) : l\'assistant propose une formulation, l\'auditeur répond de chaque mot.',
                'Plan d\'usage du service : tests à reconduire chaque trimestre, outils autorisés, règles de confidentialité, personne qui tient la bibliothèque de scripts.',
                'Évaluation : chaque participant reçoit une population inconnue, conduit un test complet et remet un dossier qu\'un autre participant doit pouvoir refaire.',
            ],
        ],
        [
            'titre'  => 'Revue de dossier à distance, en option : un premier test réel relu avec le formateur',
            'duree'  => '2 h 30',
            'points' => [
                'Relecture d\'un dossier de travail produit sur une mission réelle, après pseudonymisation des données.',
                'Vérification que le test se refait à l\'identique à partir du dossier, et correction des manques.',
                'Choix des tests à industrialiser dans la bibliothèque du service.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '3 jours en 6 demi-journées ; revue de dossier à distance en option'],
        ['l' => 'Public', 'v' => 'Auditeurs internes et externes, contrôleurs internes et de gestion, responsables conformité, 8 personnes au plus'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et que laisse-t-elle à d\'autres ?',
            'paragraphes' => [
                'Un service d\'audit teste depuis toujours une petite partie de ce qu\'il contrôle : vingt-cinq factures sur dix mille, une quarantaine de paiements sur une année. L\'échantillon n\'était pas un choix de principe, mais une limite de temps. Les outils d\'analyse de données, et désormais les assistants d\'IA qui écrivent ces analyses à la demande, déplacent cette limite : un auditeur qui ne programme pas peut faire tester toute une population en une matinée. Le risque change aussi de nature. Un test faux sur dix mille lignes produit dix mille conclusions fausses, et une réponse d\'assistant que personne ne peut refaire ne vaut rien dans un dossier.',
                'Les objectifs se vérifient le dernier après-midi. Chaque participant sait demander une extraction et prouver qu\'elle est complète, par les totaux, les bornes et l\'empreinte du fichier. Il sait faire écrire par l\'assistant un test de doublons, de fractionnement ou de rapprochement entre fichiers, puis l\'éprouver sur un jeu où les anomalies sont connues. Il sait trier des exceptions, revenir à un échantillon tiré par un programme quand c\'est le bon choix, extraire les clauses d\'un lot de contrats en contrôlant l\'extraction, et constituer un dossier qu\'un collègue refait sans lui.',
                'La formation laisse plusieurs sujets à d\'autres. Le responsable qui conçoit les points de validation de son propre circuit apprend sa méthode dans <a href="/formations/ia-processus-metier">IA dans les processus métier</a> ; ici, on vérifie les contrôles des autres. La charte, l\'inventaire des usages et le comité qui encadre l\'IA relèvent de <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>. La préparation de la saisie et de la clôture par les services comptables est l\'objet de <a href="/formations/ia-comptables-syscohada">IA pour comptables</a>, et l\'écriture de requêtes sur une base de données a sa propre fiche, présentée en bas de page.',
                'Elle n\'enseigne pas l\'audit. Les participants connaissent leurs normes, leurs programmes de travail et leurs critères ; la formation leur apprend à faire travailler un outil sur ce qu\'ils savent déjà juger. Elle ne délivre aucune certification professionnelle et ne promet aucune réduction de durée des missions : le gain dépend de la qualité des données, des droits d\'extraction obtenus et de la régularité de l\'usage. Elle ne remplace pas non plus l\'avis d\'un juriste sur une question de secret ou de données personnelles.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'Le public est celui qui vérifie : il ne tient pas le processus, il en teste la fiabilité et en rend compte à une direction, à un comité d\'audit ou à un régulateur. Une pratique réelle de l\'audit ou du contrôle est exigée ; la programmation ne l\'est pas.',
            'items' => [
                ['titre' => 'Auditeurs internes', 'texte' => 'Membres d\'une direction de l\'audit interne, d\'une inspection générale ou d\'une cellule d\'audit de groupe : missions sur les achats, la paie, la trésorerie, les ventes, les accès informatiques. Ce sont eux qui tirent le plus parti des tests exhaustifs reconduits d\'une mission à l\'autre.'],
                ['titre' => 'Auditeurs externes et collaborateurs de cabinet', 'texte' => 'Commissaires aux comptes, collaborateurs de cabinets d\'audit et d\'expertise : la formation insiste pour eux sur la séparation des dossiers de clients, le secret et la documentation que contrôlera la revue qualité du cabinet.'],
                ['titre' => 'Contrôleurs internes et contrôleurs de gestion', 'texte' => 'Tests de fonctionnement des contrôles clés, analyse des écarts budgétaires, contrôle des notes de frais ou des remises commerciales : ils travaillent sur les mêmes extractions que l\'audit, souvent plus souvent que lui.'],
                ['titre' => 'Responsables conformité', 'texte' => 'Revue des contrats de tiers, contrôle des conflits d\'intérêts, suivi des engagements contractuels, preuves à fournir à un bailleur ou à un régulateur sectoriel. La partie sur les contrats et sur la traçabilité leur est particulièrement utile.'],
                ['titre' => 'Le niveau attendu', 'texte' => 'Avoir conduit ou participé à des missions d\'audit ou de contrôle, savoir lire un programme de travail et une balance, utiliser les filtres, les tableaux croisés et les formules de recherche d\'un tableur. Un questionnaire court avant la session vérifie ce niveau ; une heure de remise à niveau sur le tableur est prévue si besoin.'],
                ['titre' => 'La préparation demandée', 'texte' => 'Une population de pièces extraite de l\'ERP ou du tableur, pseudonymisée, d\'au moins quelques milliers de lignes ; un programme de travail récent ; une dizaine de contrats types sans nom de partie ; le nom de l\'assistant d\'IA autorisé par la direction de l\'audit, s\'il y en a un.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur portable par participant, avec Excel et Power Query ou LibreOffice Calc, un navigateur à jour et, si le service l\'accepte, Python installé à l\'avance. Un dossier partagé reçoit les feuilles de travail de la session ; les fichiers d\'exercice sont copiés en local pour travailler sans connexion.'],
            ],
        ],
        ['type' => 'programme', 'titre' => 'Quel est le programme, demi-journée par demi-journée ?'],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices fait-on sur les données et les dossiers que vous apportez ?',
            'items' => [
                ['titre' => 'L\'extraction trouée', 'duree' => '1 heure, jour 1', 'texte' => 'Le binôme reçoit une extraction des paiements à laquelle il manque, sans le savoir, deux jours de décembre. Il doit trouver le trou par les seuls contrôles de complétude : nombre de lignes, totaux contre le grand livre, bornes de dates. Ceux qui sautent l\'étape testent ensuite une population fausse, et le voient.'],
                ['titre' => 'Le jeu de contrôle planté', 'duree' => '1 h 15, jour 2', 'texte' => 'Avant de lancer un test sur la vraie population, chaque participant le fait tourner sur une copie où le formateur a glissé dix anomalies connues : deux doublons, un fractionnement, un fournisseur qui partage le compte bancaire d\'un salarié. Un test qui n\'en retrouve que huit ne part pas en production.'],
                ['titre' => 'Le tri des exceptions', 'duree' => '1 h 30, jour 2', 'texte' => 'Le test sur la population entière sort plusieurs centaines d\'exceptions. Le groupe apprend à les classer, à expliquer les faux positifs par une règle écrite, et à ne garder pour l\'investigation que ce qui résiste. La part de faux positifs devient une information sur la qualité des données du client.'],
                ['titre' => 'Le lot de contrats', 'duree' => '1 h 30, jour 3', 'texte' => 'Une dizaine de contrats types passent dans la grille d\'extraction. Chaque binôme relit lui-même trois contrats tirés au hasard, compte les valeurs fausses ou manquantes de l\'assistant, et décide s\'il faut tout relire. Les résultats sont comparés d\'un binôme à l\'autre.'],
                ['titre' => 'Le dossier refait par un autre', 'duree' => '1 heure, jour 3', 'texte' => 'Un participant remet son dossier de travail à un collègue qui ne l\'a pas vu travailler. Le collègue doit refaire le test et retrouver exactement le même nombre d\'exceptions. Chaque écart révèle un oubli de documentation : un filtre non noté, un fichier modifié, une tolérance réglée à la main.'],
                ['titre' => 'L\'évaluation finale', 'duree' => '1 heure, jour 3', 'texte' => 'Une population inconnue, un objectif de test, une heure : chaque participant conduit le test complet, de la complétude au constat, avec l\'assistant de son choix parmi ceux autorisés. La note porte sur la justesse du résultat et sur la capacité d\'un tiers à le refaire.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Faut-il tester toute la population, des éléments choisis ou un échantillon ?',
            'legende' => 'Les trois moyens de sélection décrits par la norme ISA 500 (paragraphe A63 du manuel 2023-2024 de l\'IAASB), rapprochés de la norme 14.1 de l\'IIA, qui invite à envisager de tester une population complète ou un échantillon représentatif. La formation apprend à choisir, test par test, et à écrire ce choix au dossier.',
            'entetes' => ['Moyen', 'Ce que disent les normes', 'Quand le choisir', 'Ce que l\'IA apporte, et sa limite'],
            'lignes'  => [
                ['Toute la population', 'ISA 500 (A64) cite la population faite de peu d\'éléments de forte valeur, le risque important que d\'autres moyens ne couvrent pas, et le calcul répétitif fait par un système, qui rend l\'examen à 100 % économique', 'Données complètes dans un système, règle de test écrite, anomalie recherchée définissable par une condition', 'L\'assistant écrit la requête ou le script ; c\'est le programme qui parcourt les lignes, jamais l\'assistant qui « lit » le fichier'],
                ['Des éléments choisis', 'ISA 500 range dans ce moyen la sélection d\'éléments clés ou de forte valeur ; il ne permet pas de conclure sur le reste de la population', 'Exceptions sorties d\'un test exhaustif, montants les plus élevés, tiers à risque', 'L\'assistant aide à classer et à décrire les exceptions ; l\'auditeur décide lesquelles investiguer'],
                ['Un échantillon', 'ISA 530 le définit comme l\'application de procédures à moins de 100 % des éléments, chaque unité ayant une chance d\'être sélectionnée, pour conclure sur toute la population', 'Pièces papier, contrôles manuels sans trace informatique, attributs que seul un humain apprécie', 'Le tirage se fait par un programme dont la graine est notée ; un assistant à qui l\'on demande « choisis 25 factures » ne fait pas un tirage aléatoire'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels tests d\'anomalies fait-on écrire à l\'IA, et que vérifie l\'auditeur avant de s\'y fier ?',
            'legende' => 'Les tests travaillés le deuxième jour. L\'assistant propose la formule, la requête ou le script ; la dernière colonne décrit l\'épreuve que le participant fait subir au test avant de le lancer sur la population réelle.',
            'entetes' => ['Test', 'Anomalie recherchée', 'Données nécessaires', 'Épreuve avant usage'],
            'lignes'  => [
                ['Doublons exacts et approchés', 'Une même facture payée deux fois, parfois avec un numéro légèrement modifié', 'Fournisseur, numéro de facture, date, montant', 'Retrouver les doublons plantés, y compris celui dont le numéro diffère d\'un caractère'],
                ['Fractionnement', 'Une dépense découpée pour rester sous le seuil d\'approbation', 'Seuils de la délégation de pouvoirs, demandeur, fournisseur, dates', 'Vérifier que la fenêtre de dates et le seuil viennent du document de délégation, pas d\'une hypothèse de l\'outil'],
                ['Jours non ouvrés et heures inhabituelles', 'Écritures ou paiements saisis un dimanche, un jour férié ou la nuit', 'Date et heure de saisie, calendrier des jours fériés du pays', 'Contrôler que le calendrier est celui du pays et de l\'année, pas un calendrier générique'],
                ['Tiers et personnel', 'Un fournisseur qui partage un compte bancaire, un téléphone ou une adresse avec un salarié', 'Fichier fournisseurs, fichier du personnel, pseudonymisés avec la même clé', 'S\'assurer que la pseudonymisation n\'a pas cassé les correspondances'],
                ['Séparation des tâches', 'Un même utilisateur crée le fournisseur, saisit la facture et valide le paiement', 'Journaux d\'utilisateurs de l\'ERP, matrice des droits', 'Tester sur un utilisateur fictif aux droits connus'],
                ['Montants ronds et seuils', 'Des montants ronds en série, ou concentrés juste sous un seuil', 'Montants, seuils internes', 'Fixer la définition d\'un montant rond pour la devise : un franc CFA n\'a pas de centimes'],
                ['Premiers chiffres (loi de Benford)', 'Une distribution des premiers chiffres qui s\'écarte de la distribution attendue', 'Montants nombreux, non plafonnés, non attribués par une règle', 'Écarter les populations où la loi ne s\'applique pas ; un écart oriente l\'investigation, il ne prouve rien'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi l\'assistant écrit-il le test sans jamais en être le résultat ?',
            'paragraphes' => [
                'Un modèle de langage produit du texte probable. Quand on lui confie un fichier de vingt mille lignes en lui demandant combien de factures sont en double, il peut répondre un nombre plausible sans avoir comparé chaque ligne, tronquer le fichier sans le dire, ou donner un autre nombre si l\'on repose la question le lendemain. Rien de cela n\'est acceptable dans un dossier d\'audit, où chaque conclusion doit pouvoir être refaite à l\'identique. La règle enseignée dès la première matinée est donc simple : l\'assistant écrit le test, un programme l\'exécute, l\'auditeur vérifie le programme.',
                'Concrètement, la demande faite à l\'assistant n\'est jamais « trouve les doublons », mais « écris la formule, la requête ou le script qui trouve les doublons selon cette définition ». Le résultat est un objet stable : une étape Power Query, une formule de tableur, quelques lignes de Python. On peut le relire, le tester sur un jeu dont on connaît la réponse, le ranger au dossier et le relancer l\'an prochain sur la population suivante. Plusieurs assistants exécutent eux-mêmes du code ; même alors, c\'est le code produit et son résultat qui vont au dossier, pas la conversation.',
                'Cette discipline règle aussi la question de la confidentialité. Un assistant à qui l\'on décrit la structure d\'un fichier, ses colonnes et trois lignes fictives peut écrire un script complet sans jamais voir les données réelles, qui restent sur le poste de l\'auditeur. C\'est la méthode par défaut de la formation pour les populations sensibles : la paie, les comptes de clients, les transactions d\'une banque. Seuls les participants dont le service a autorisé un outil pour les données réelles l\'utilisent sur des extraits pseudonymisés.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Une réponse d\'IA peut-elle servir d\'élément probant ?',
            'paragraphes' => [
                'Pas à elle seule. La norme 14.1 de l\'IIA, dans sa version française publiée par l\'Institut, demande des informations pertinentes, fiables et suffisantes, et précise qu\'une information est d\'autant plus fiable qu\'elle est obtenue directement par l\'auditeur ou d\'une source indépendante, corroborée, et tirée d\'un système doté de contrôles efficaces. Une phrase générée par un assistant ne remplit aucune de ces conditions : elle n\'est ni une source, ni une observation, ni une pièce. Elle peut orienter une recherche, résumer un document que l\'auditeur a lu, proposer une hypothèse ; la preuve reste la pièce, l\'extraction contrôlée ou la confirmation obtenue.',
                'Côté audit externe, la norme ISA 500 demande, lorsqu\'on utilise une information produite par l\'entité, d\'évaluer si elle est suffisamment fiable, en obtenant au besoin des éléments sur son exactitude et son exhaustivité. Une extraction de l\'ERP est exactement cela, d\'où le temps consacré le premier après-midi aux contrôles de complétude. Le sujet bouge : le 5 août 2026, l\'IAASB a publié un exposé-sondage qui révise ISA 330, ISA 500 et ISA 520 pour tenir compte de l\'usage croissant de la technologie, avec une nouvelle définition de l\'élément probant ; les commentaires sont attendus jusqu\'au 15 décembre 2026.',
                'Tant que ces textes restent des propositions, la formation s\'en tient aux normes en vigueur et à une prudence simple. Ce que l\'IA a produit est traité comme le travail d\'un assistant débutant : utile, rapide, et revu avant de compter. Les participants apprennent à écrire au dossier ce que l\'outil a fait, ce que l\'auditeur a vérifié et sur quoi repose la conclusion. Pour les questions d\'interprétation des normes, ils restent tenus par la doctrine de leur ordre professionnel, de leur direction de l\'audit ou de leur cabinet.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Un test qui ne trouve aucune anomalie prouve-t-il que tout va bien ?',
            'texte' => 'Non. Zéro exception peut signifier une population saine, mais aussi une extraction incomplète, un filtre oublié, une jointure qui a perdu la moitié des lignes ou une tolérance trop étroite. Un assistant d\'IA ajoute un risque de plus : un script qui tourne sans erreur et ne teste rien. Avant de conclure à l\'absence d\'anomalie, la formation impose trois vérifications : la complétude de la population est prouvée, le test a retrouvé les anomalies plantées dans le jeu de contrôle, et le nombre de lignes examinées figure au dossier. L\'histoire de <a href="/histoires/thomas-cook">Thomas Cook</a> rappelle, à travers la sanction prononcée contre son auditeur, que l\'esprit critique ne se délègue à aucun outil.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que doit contenir le dossier de travail d\'un test mené avec l\'IA pour qu\'un autre auditeur le refasse ?',
            'legende' => 'Modèle remis en formation. Les premières lignes reprennent ce que demandent la norme 14.6 de l\'IIA (une personne informée et compétente doit pouvoir réitérer les travaux et obtenir les mêmes résultats) et la norme ISA 230 (un auditeur expérimenté, sans lien avec la mission, doit comprendre la nature, le calendrier et l\'étendue des procédures, leurs résultats et les jugements importants). Les suivantes sont propres à l\'usage d\'un outil d\'IA.',
            'entetes' => ['Rubrique', 'Contenu attendu', 'Exemple'],
            'lignes'  => [
                ['Objectif et critère', 'Ce que le test cherche à démontrer, et la règle de référence', 'Aucun paiement fournisseur au-delà du seuil sans double signature, selon la délégation de pouvoirs en vigueur'],
                ['Source et extraction', 'Système, tables, période, auteur et date de la requête, droits utilisés', 'ERP, paiements du 1er janvier au 31 décembre, requête exécutée en lecture seule par l\'administrateur'],
                ['Complétude', 'Nombre de lignes, totaux rapprochés, écarts expliqués', '18 412 lignes ; total égal au grand livre du compte de banque, à zéro près'],
                ['Empreinte du fichier', 'Valeur calculée à la réception, recalculée avant l\'analyse', 'Empreinte SHA-256 notée le jour de la réception, identique au moment du test'],
                ['Outil et version', 'Assistant utilisé, offre, date ; logiciel d\'exécution et version', 'Assistant en offre d\'équipe, consigne du 6 octobre ; script exécuté avec Python 3.14 et pandas 3.0'],
                ['Consigne et script', 'Texte de la demande faite à l\'assistant, script ou formule retenus, modifications apportées par l\'auditeur', 'Consigne n° 3 ; script corrigé pour traiter les montants négatifs'],
                ['Épreuve du test', 'Jeu de contrôle utilisé et résultat obtenu', 'Dix anomalies plantées, dix retrouvées'],
                ['Résultats et exceptions', 'Nombre d\'exceptions, tri, investigations, conclusions', '212 exceptions, 197 faux positifs expliqués, 15 investiguées, 3 constats'],
                ['Auteur et revue', 'Qui a fait le travail, qui l\'a revu, quand et jusqu\'où', 'Réalisé par l\'auditeur A le 8 ; revu et refait par l\'auditeur B le 10'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment revoir des contrats et des pièces avec l\'IA sans laisser passer une clause ?',
            'paragraphes' => [
                'La revue de contrats est l\'usage où l\'assistant fait gagner le plus de temps à un responsable conformité ou à un auditeur, et celui où il se trompe le plus discrètement. Il lit vite, résume bien, mais peut attribuer à un contrat la pénalité d\'un autre, ignorer une annexe, ou déclarer « aucune clause de révision des prix » parce qu\'elle figure dans un tableau mal reconnu. La méthode enseignée part donc d\'une grille fermée : une liste de questions précises, la même pour tous les contrats, et pour chaque réponse la page et le paragraphe où elle se trouve.',
                'Le tableau obtenu n\'est pas une conclusion, mais une liste de vérifications. L\'auditeur relit lui-même un sous-ensemble de contrats tirés au hasard, compare ligne à ligne et compte les erreurs. Si elles dépassent le seuil fixé avant l\'exercice, tout le lot est relu, ou la grille est reformulée et l\'extraction refaite. Les valeurs qui portent un risque, comme un montant plafond, une date d\'échéance ou une clause d\'exclusivité, sont vérifiées sur la pièce dans tous les cas. Ce partage permet de lire cent contrats au lieu de dix, sans prétendre que la machine les a lus à la place de l\'auditeur.',
                'L\'intérêt principal vient ensuite, quand on confronte les contrats aux paiements. Un prix unitaire facturé au-dessus du prix convenu, un contrat échu qui continue d\'être réglé, un fournisseur payé sans contrat au-delà du seuil prévu par la politique d\'achats : ces écarts ne se voient qu\'en croisant les deux sources. Les pièces posent des questions voisines. Une facture photographiée, un reçu manuscrit ou un relevé en mauvais état se lisent mal ; la formation apprend à mesurer le taux d\'erreur de lecture sur ses propres documents avant de décider ce qui peut être confié à l\'outil.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment protéger le secret professionnel et les données quand l\'IA entre dans la mission ?',
            'paragraphes' => [
                'L\'auditeur manipule ce que l\'organisation a de plus confidentiel : paie, comptes de clients, contrats, soupçons de fraude. La norme 5.2 de l\'IIA lui demande de respecter la confidentialité, la vie privée et la propriété de l\'information recueillie, de ne rien divulguer à des parties non habilitées et de gérer le risque d\'une divulgation par inadvertance ; le responsable de l\'audit interne doit s\'assurer que les personnes qui collaborent avec la fonction respectent les mêmes exigences. Un service d\'IA hébergé à l\'extérieur entre dans ce cadre : ce qu\'il fait des données se vérifie avant d\'y verser le moindre fichier.',
                'Pour la profession comptable de la zone OHADA, le code d\'éthique publié en application du règlement n° 01/2017/CM/OHADA fait de la confidentialité un principe fondamental et cite l\'article 717 de l\'Acte uniforme relatif aux sociétés commerciales, qui astreint le commissaire aux comptes et ses collaborateurs au secret pour les faits dont ils ont connaissance en raison de leurs fonctions. Le même code demande de prendre garde à une révélation par inadvertance. Une conversation avec un assistant grand public, ouverte sur un compte personnel, en est une forme moderne.',
                'Les lois sur les données personnelles s\'ajoutent au secret. Au Bénin, la loi n° 2017-20 portant code du numérique soumet, à son article 391, le transfert de données personnelles vers un État tiers à une protection jugée équivalente ; dans l\'Union européenne, le RGPD impose la minimisation des données et un contrat avec tout sous-traitant. D\'où trois réponses travaillées en séance : faire écrire le test sans montrer les données réelles, pseudonymiser l\'extrait quand l\'outil doit les voir, ou garder l\'analyse sur un modèle installé dans le service. Le choix est noté au dossier pour chaque test.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Que disent les chiffres sur la fraude et sur l\'analyse des données ?',
            'items' => [
                ['valeur' => '5 %', 'libelle' => 'Part de leur chiffre d\'affaires que les organisations perdraient chaque année à la fraude interne, selon l\'estimation des enquêteurs certifiés interrogés pour l\'étude Occupational Fraud 2026, fondée sur 2 402 cas dans 143 pays et territoires (enquête de juillet à septembre 2025)', 'source' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/fraud-resources/report-to-the-nations'],
                ['valeur' => '3 %', 'libelle' => 'Fraudes détectées en premier lieu par la surveillance automatisée des transactions et des données, contre 43 % par un signalement et 15 % par l\'audit interne (ACFE, édition 2026)', 'source' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/fraud-resources/report-to-the-nations'],
                ['valeur' => '70 000 contre 150 000 dollars', 'libelle' => 'Perte médiane des fraudes selon que l\'organisation pratiquait ou non une surveillance proactive de ses données (soit 53 % de moins), avec une détection en 9 mois au lieu de 16 (ACFE, édition 2026)', 'source' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/fraud-resources/report-to-the-nations'],
                ['valeur' => '56 %', 'libelle' => 'Part des cas d\'Afrique subsaharienne de l\'étude 2026 qui comportaient de la corruption ; la surveillance proactive des données n\'y était en place que dans 46 % des cas (ACFE, focus régional)', 'source' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/fraud-resources/report-to-the-nations'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle conduite : groupes, données, supports et suivi ?',
            'intro' => 'Un auditeur fait confiance à un outil quand il l\'a vu se tromper, puis a appris à le prendre en défaut. Les trois jours sont construits autour de cette expérience, sur les données de l\'organisation et dans le respect de ses règles de confidentialité.',
            'items' => [
                ['titre' => 'Huit participants au plus', 'texte' => 'Les tests se construisent écran par écran. Au-delà de huit personnes, le formateur ne peut plus suivre les scripts de chacun, et une jointure ratée passe inaperçue jusqu\'au dossier.'],
                ['titre' => 'Des binômes auditeur et contrôleur', 'texte' => 'Quand le groupe s\'y prête, un auditeur travaille avec un contrôleur interne ou de gestion. Le premier apporte la rigueur de la preuve, le second la connaissance des données et des écarts habituels.'],
                ['titre' => 'Vos extractions, pseudonymisées', 'texte' => 'Les exercices portent sur une population réelle de l\'organisation, rendue non identifiante avant la session. À défaut, un jeu fictif reproduit la structure de votre ERP, avec ses défauts : dates en texte, doublons de fiches, devises mélangées.'],
                ['titre' => 'Des anomalies plantées', 'texte' => 'Chaque jeu d\'exercice contient des anomalies connues du seul formateur. Un test n\'est jamais déclaré bon parce qu\'il « tourne », mais parce qu\'il les retrouve toutes.'],
                ['titre' => 'Le fond reste aux auditeurs', 'texte' => 'Le formateur n\'est pas auditeur et ne tranche aucune question de normes. Il montre comment faire travailler l\'outil, le contrôler et tracer son usage ; les participants jugent la pertinence des tests au regard de leurs propres référentiels.'],
                ['titre' => 'Une bibliothèque qui reste au service', 'texte' => 'Les scripts et formules validés pendant la session, leurs jeux de contrôle, le modèle de dossier de travail, la grille de revue des contrats et une attestation nominative sont remis dans des formats modifiables. Ils appartiennent à l\'organisation.'],
                ['titre' => 'Un suivi sur un vrai dossier', 'texte' => 'La revue de dossier à distance, si elle est retenue, porte sur le premier test réel conduit après la session. Les modalités d\'échange entre la session et cette revue sont fixées dans le devis.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Avec quels outils travaille-t-on, et combien coûtent-ils à l\'organisation ?',
            'legende' => 'Versions et prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes, payés par l\'organisation aux éditeurs et non à Richard SALANON. La formation n\'exige l\'achat d\'aucun outil ; elle s\'adapte à ceux que la direction de l\'audit a déjà autorisés. Les logiciels d\'audit spécialisés du marché, dont les tarifs ne sont pas publiés, peuvent servir de support si le service en possède un.',
            'entetes' => ['Outil', 'Usage en formation', 'Version ou prix relevé', 'Point d\'attention pour un auditeur'],
            'lignes'  => [
                ['Excel avec Power Query', 'Mise en forme des extractions, tests simples, rapprochements', 'Inclus dans les abonnements Microsoft 365 déjà utilisés', 'Chaque étape de requête est enregistrée : c\'est une trace utile au dossier, à condition de ne pas retoucher les cellules à la main'],
                ['LibreOffice Calc', 'Même usage, sans abonnement', 'Version 26.8.0, gratuite, sous licence Mozilla Public License 2.0', 'Convient aux services sans suite Microsoft ; les formules sont presque toutes transposables'],
                ['Python et pandas', 'Tests exhaustifs sur des populations volumineuses, rapprochements entre fichiers, tirages reproductibles', 'Python 3.14.8 du 30 septembre 2026 ; pandas 3.0.6 du 17 septembre 2026, sous licence BSD, gratuits', 'Le script se relit, se versionne et se relance ; c\'est l\'outil le plus traçable, mais il demande une installation validée par l\'informatique'],
                ['ChatGPT Business (OpenAI)', 'Écriture des tests, revue de contrats pseudonymisés, rédaction', '20 dollars par utilisateur et par mois en paiement annuel, 25 dollars au mois, à partir de 2 utilisateurs', 'L\'éditeur annonce l\'absence d\'entraînement sur les données de l\'offre Business par défaut ; à vérifier dans le contrat signé'],
                ['Claude Team (Anthropic)', 'Écriture et exécution de code, lecture de documents longs', 'Siège standard à 20 dollars par mois en annuel, 25 dollars au mois, 2 sièges au minimum', 'L\'éditeur indique ne pas entraîner ses modèles sur le contenu des offres Team et Enterprise par défaut'],
                ['Microsoft 365 Copilot', 'Copilot dans Excel et Word pour les services déjà équipés', '21 dollars par utilisateur et par mois en annuel (18 dollars en promotion jusqu\'au 31 décembre 2026), 25,20 dollars au mois', 'Les droits d\'accès de Copilot suivent ceux de l\'utilisateur : un auditeur aux droits larges expose davantage de documents'],
                ['Modèle installé en local (par exemple avec Ollama)', 'Analyses sur les données que le secret interdit de transmettre', 'Logiciel libre ; le coût est celui du poste', 'Moins performant qu\'un grand assistant en ligne, mais les données ne quittent pas le service'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation selon le métier, le secteur et le pays ?',
            'items' => [
                ['secteur' => 'Audit interne d\'une banque, à Abidjan', 'probleme' => 'La mission annuelle sur les frais généraux teste une soixantaine de paiements sur plusieurs dizaines de milliers, et le comité d\'audit demande comment le reste est couvert.', 'solution' => 'Tests exhaustifs de doublons, de fractionnement et de rapprochement entre fichier fournisseurs et fichier du personnel, écrits avec l\'assistant sur une structure de fichier fictive et exécutés en interne ; échantillon conservé pour les pièces papier ; dossier refait par un second auditeur.'],
                ['secteur' => 'Contrôle de gestion d\'un groupe de distribution, à Douala', 'probleme' => 'Les remises accordées par les agences dépassent le budget, sans que l\'on sache lesquelles respectent la politique commerciale.', 'solution' => 'Extraction des factures de vente avec leurs remises, test de chaque ligne contre la grille de remises autorisées, exceptions triées par agence et par vendeur ; le contrôleur présente les écarts au comité de direction avec la règle de test écrite en annexe.'],
                ['secteur' => 'Conformité d\'une organisation financée par des bailleurs, à Dakar', 'probleme' => 'Chaque bailleur exige la preuve que les dépenses respectent la convention de financement, et la revue des contrats de prestataires se fait à la main.', 'solution' => 'Grille d\'extraction appliquée à tous les contrats de prestataires, confrontation avec les paiements et les plafonds de la convention, relecture par sondage des extractions, dossier de preuve remis au bailleur avec la méthode.'],
                ['secteur' => 'Cabinet d\'audit et d\'expertise, à Cotonou', 'probleme' => 'Les collaborateurs utilisent des assistants grand public pour gagner du temps, et l\'associé craint pour le secret des dossiers et pour la revue qualité.', 'solution' => 'Tests écrits sans données réelles, modèle installé au cabinet pour les dossiers sensibles, modèle de dossier de travail commun à toutes les missions, et bibliothèque de scripts revue par l\'associé avant tout usage chez un client.'],
                ['secteur' => 'Contrôle interne d\'une société de services, à Lyon', 'probleme' => 'Le test annuel de séparation des tâches dans l\'ERP repose sur des captures d\'écran des droits, longues à produire et impossibles à refaire.', 'solution' => 'Extraction des journaux d\'utilisateurs et de la matrice des droits, test de toutes les opérations créées et validées par la même personne, exceptions justifiées par les responsables, résultat comparé d\'une année sur l\'autre avec le même script.'],
                ['secteur' => 'Inspection d\'un établissement public, à Bruxelles', 'probleme' => 'L\'équipe doit revoir plusieurs centaines de marchés et de bons de commande, et le RGPD encadre les données des fournisseurs personnes physiques.', 'solution' => 'Pseudonymisation des personnes physiques avant toute analyse, grille de revue des marchés, rapprochement des montants engagés et payés, et mention au dossier de l\'outil utilisé et des données qu\'il a vues.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour un service d\'audit, de contrôle ou de conformité ?',
            'legende' => 'Le calendrier évite les périodes de clôture, de rapport annuel et de comité d\'audit : un service ne se forme pas la semaine où il rend ses conclusions. Le premier échange, le cadrage et le devis sont gratuits.',
            'entetes' => ['Format', 'Durée et rythme', 'Données utilisées', 'Quand le choisir'],
            'lignes'  => [
                ['Intra, dans vos locaux', '3 jours en 6 demi-journées', 'Vos extractions pseudonymisées, vos contrats types, votre programme de travail', 'Un service qui veut repartir avec une bibliothèque de tests sur ses propres systèmes'],
                ['Intra avec revue de dossier', '3 jours, puis 2 h 30 à distance après le premier test réel', 'Les mêmes, puis un dossier de mission réel', 'Un service qui veut vérifier que la méthode tient en conditions réelles'],
                ['Inter-entreprises', '3 jours', 'Jeux fictifs communs ; aucune donnée d\'une organisation n\'est montrée aux autres', 'Un ou deux auditeurs par structure, ou les membres d\'une association professionnelle'],
                ['À distance', '7 séances de 2 h 30 sur trois à quatre semaines', 'Jeux fictifs ou extractions préparées à l\'avance, partage d\'écran', 'Équipes réparties entre plusieurs filiales ou plusieurs pays'],
                ['Hybride', 'Deux jours sur place, puis 3 séances à distance', 'Extractions réelles en salle, contrats et dossiers à distance', 'Services qui veulent construire les tests ensemble et espacer la suite'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et qu\'est-ce qui en fait varier le prix ?',
            'intro'      => 'Le prix est établi sur devis, après un premier échange, un cadrage et un devis gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux outils d\'IA et aux logiciels d\'analyse restent payés directement aux éditeurs, au nom de l\'organisation.',
            'items'      => [
                ['offre' => 'Formation intra', 'prix' => 'Sur devis', 'inclus' => ['Six demi-journées sur vos extractions pseudonymisées', 'Bibliothèque de tests avec leurs jeux de contrôle', 'Modèle de dossier de travail et grille de revue des contrats', 'Évaluation finale et attestation nominative']],
                ['offre' => 'Formation et revue de dossier', 'prix' => 'Sur devis', 'inclus' => ['Tout le contenu de la formation intra', 'Revue à distance du premier dossier réel', 'Correction des tests et de la documentation']],
                ['offre' => 'Session inter-entreprises', 'prix' => 'Sur devis', 'inclus' => ['Trois jours sur des jeux fictifs communs', 'Supports, scripts et corrigés', 'Modèles modifiables', 'Attestation nominative']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'La préparation : analyse et pseudonymisation des extractions, construction des jeux de contrôle à partir de vos systèmes.',
                'Le nombre de systèmes sources : un ERP seul, ou ERP, paie et banque.',
                'L\'installation éventuelle de Python ou d\'un modèle local sur les postes du service.',
                'Le format et le lieu : Cotonou, une autre ville, un autre pays, ou à distance.',
                'La revue de dossier et le suivi retenus, et la langue des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'La formation peut-elle être financée par un fonds de formation continue ?',
            'paragraphes' => [
                'Cela dépend du pays, du fonds et du dossier de l\'organisation, et aucune prise en charge n\'est promise ici. En Côte d\'Ivoire, la page du FDFP sur le plan de formation, consultée le 5 octobre 2026, ouvre ce dispositif aux entreprises qui justifient du paiement régulier de leurs deux taxes de formation, et le remboursement n\'intervient qu\'après contrôle du fonds et approbation de sa Commission permanente. Au Sénégal, le 3FPT propose un guichet pour le personnel des entreprises, avec une demande en ligne.',
                'Au Bénin, le décret n° 2022-286 du 11 mai 2022 a approuvé les statuts du FODEFCA, guichet de la formation professionnelle continue du secteur privé, qui laisse une part du coût à la charge du bénéficiaire. En France, France Compétences rappelle que l\'accès aux fonds publics ou mutualisés exige, depuis le 1er janvier 2022, un prestataire certifié Qualiopi ; Richard SALANON ne détient pas cette certification et n\'est agréé par aucun fonds africain. Le budget se construit donc sans aide, puis le fonds est interrogé par écrit, programme et devis en main.',
                'Pour une formation d\'auditeurs, le lien avec le poste se démontre facilement : le programme montre des tests et des dossiers de travail, et les participants exercent des fonctions de contrôle. Les feuilles de présence, le programme détaillé, la liste des documents produits et les attestations sont fournis dans tous les cas. Les règles connues de chaque dispositif sont rassemblées sur la page consacrée à la <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on après la formation, et comment les éviter ?',
            'intro' => 'Les écarts apparaissent à la première mission réelle, quand le calendrier presse et que l\'outil semble avoir fait le travail. Ce sont presque toujours les mêmes.',
            'items' => [
                ['titre' => 'Demander le résultat à l\'assistant', 'texte' => 'Sous la pression, on colle le fichier et l\'on demande combien d\'anomalies il contient. La réponse ne se refait pas et ne prouve rien. On demande le test, on l\'exécute, on garde le script.'],
                ['titre' => 'Sauter la complétude', 'texte' => 'Une extraction reçue un vendredi soir part directement en analyse. Le lundi, on découvre qu\'il manquait une filiale. Aucun test ne commence avant le rapprochement des totaux et des bornes de dates.'],
                ['titre' => 'Oublier le jeu de contrôle', 'texte' => 'Un script modifié pour une nouvelle population n\'est pas un script éprouvé. Chaque modification repasse par le jeu où les anomalies sont connues, même pour une correction mineure.'],
                ['titre' => 'Noyer le comité sous les exceptions', 'texte' => 'Cinq cents lignes en annexe d\'un rapport ne disent rien. Les exceptions sont triées, les faux positifs expliqués par une règle, et le constat porte sur ce qui résiste à l\'investigation.'],
                ['titre' => 'Traiter un écart statistique comme une fraude', 'texte' => 'Une distribution des premiers chiffres inhabituelle ou une série de montants ronds orientent la recherche. Elles n\'accusent personne. Le constat repose sur des pièces, pas sur un indicateur.'],
                ['titre' => 'Laisser les scripts sur le poste de leur auteur', 'texte' => 'L\'auditeur qui a écrit les tests change de poste, et la bibliothèque part avec lui. Les scripts, leurs jeux de contrôle et leur notice sont rangés dans le dossier permanent du service, avec un responsable nommé.'],
                ['titre' => 'Changer d\'outil sans le noter', 'texte' => 'Une nouvelle version de l\'assistant ou du tableur peut modifier un comportement. La version utilisée figure au dossier, et un test reconduit d\'une année sur l\'autre est relancé sur le jeu de contrôle après chaque mise à jour.'],
                ['titre' => 'Croire que l\'IA a lu tous les contrats', 'texte' => 'Une extraction de clauses sans relecture par sondage reste une hypothèse. Le taux d\'erreur mesuré sur le sous-ensemble relu figure au dossier, à côté de la décision qu\'il a entraînée.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, droit OHADA, données : que change le terrain en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Dans beaucoup de services d\'audit d\'Afrique de l\'Ouest et centrale, la connexion reste irrégulière et les extractions sont lourdes. La méthode de la formation en tient compte : les populations ne transitent pas par un assistant en ligne, seuls la description des colonnes et quelques lignes fictives le font, et le script s\'exécute sur le poste. Un test reste donc utilisable quand le réseau tombe. Les fichiers d\'exercice sont copiés en local avant la session, et les séances à distance se préparent avec des extractions envoyées à l\'avance.',
                'Le droit des affaires est commun à une grande partie de la clientèle. Selon la page de l\'OHADA consultée le 5 octobre 2026, le règlement n° 01/2017/CM/OHADA, adopté à Conakry le 8 juin 2017 et entré en vigueur le 1er janvier 2018, harmonise les normes, le code d\'éthique et le système d\'assurance qualité des professionnels de la comptabilité et de l\'audit. Ce code définit la mission d\'audit en référence, à titre d\'exemple, aux normes internationales d\'audit ISA. Des auditeurs de plusieurs pays de la zone peuvent ainsi partager une session et une même bibliothèque de tests, chacun vérifiant auprès de son ordre les textes qui le lient.',
                'Les données suivent les lois nationales. Une population de paie ou de clients contient des données personnelles, et leur envoi vers un service hébergé hors du pays relève, au Bénin, de la loi n° 2017-20, comme du RGPD en Europe. Les monnaies comptent aussi : un franc CFA sans décimales, des montants en euros avec virgule, des séparateurs de milliers différents d\'un logiciel à l\'autre ; une conversion mal faite produit de faux doublons ou en masque de vrais. Enfin, le règlement européen sur l\'IA concerne les services d\'audit installés en Europe ou qui y interviennent.',
                'Selon les questions et réponses de la Commission européenne mises à jour le 27 juillet 2026, l\'obligation de maîtrise de l\'IA de son article 4 est applicable depuis le 2 février 2025, avec contrôle et sanctions à partir du 3 août 2026 ; l\'omnibus numérique sur l\'IA, entré en vigueur mi-juillet 2026, la maintient pour les fournisseurs et les utilisateurs professionnels mais n\'impose plus de niveau « suffisant ». Un service d\'audit qui utilise ces outils a donc intérêt à garder la trace de la formation de ses membres, ce que l\'attestation et le programme permettent.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi suivre cette formation avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il construit lui-même les systèmes que les auditeurs examinent : il déploie Odoo et Dolibarr, écrit les extractions et les connecteurs qui relient un logiciel de gestion à d\'autres outils, et intègre l\'IA dans des logiciels existants. Il sait donc où se cachent les tables utiles, comment se fabrique une extraction incomplète et ce qu\'un script peut prouver ou non. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays.',
                'Un point doit être clair : Richard SALANON n\'est ni auditeur, ni commissaire aux comptes, ni expert-comptable, et ne signe aucune opinion. Il forme à l\'usage des outils, à leur contrôle et à la traçabilité de leur emploi ; l\'appréciation des risques, le choix des procédures et les conclusions restent l\'affaire des auditeurs formés et de leurs normes. Il n\'est certifié par aucun éditeur et ne se présente comme partenaire officiel d\'aucun. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, et les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>.',
                'Les autres formations du domaine sont réunies sur la page <a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>, et l\'ensemble du catalogue sur celle des <a href="/formations/">formations</a>. Quand un test doit devenir un contrôle automatique branché sur l\'ERP, il relève d\'une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>. Pour choisir l\'assistant que le service autorisera, le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> résume les offres.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de confier une partie de vos tests à l\'IA ?',
            'texte' => 'Prouvez d\'abord que la population est complète ; faites écrire le test par l\'assistant, mais exécutez-le avec un programme ; éprouvez-le sur des anomalies plantées ; triez les exceptions avant de conclure ; relisez par sondage tout ce que l\'outil a extrait des contrats ; gardez les données sensibles hors des services non autorisés ; et constituez un dossier qu\'un collègue refait sans vous.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quels contrôles voulez-vous étendre à toute la population ?',
            'texte'  => 'Indiquez le nombre d\'auditeurs ou de contrôleurs, les systèmes d\'où viennent vos données, deux ou trois tests que vous menez aujourd\'hui par échantillon et vos contraintes de confidentialité : vous recevez une réponse sous ' . fait('delai_reponse') . ', puis une proposition de programme et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation IA pour l\'audit'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir programmer pour suivre la formation ?', 'r' => 'Non. Les scripts et les formules sont écrits avec l\'aide de l\'assistant, puis expliqués ligne par ligne pour que l\'auditeur sache les relire, les éprouver et les corriger. Il faut en revanche être à l\'aise avec un tableur et connaître la pratique de l\'audit ou du contrôle.'],
        ['q' => 'L\'IA peut-elle remplacer l\'échantillonnage ?', 'r' => 'Souvent pour les tests portant sur des données complètes dans un système, que l\'on peut alors examiner à 100 %. Pas pour les pièces papier, les contrôles manuels sans trace ou les attributs qu\'un humain doit apprécier. La norme ISA 500 laisse le choix entre population entière, éléments choisis et échantillon, selon le risque et l\'efficacité.'],
        ['q' => 'Une réponse d\'assistant peut-elle figurer dans un dossier de travail ?', 'r' => 'Comme trace de ce qui a été demandé, oui ; comme preuve, non. Le dossier conserve la consigne, le script retenu, son exécution et son résultat, ainsi que la vérification faite par l\'auditeur. L\'élément probant reste la pièce, l\'extraction contrôlée ou la confirmation obtenue.'],
        ['q' => 'Nos données ne doivent pas quitter le service : la formation est-elle possible ?', 'r' => 'Oui. La méthode par défaut fait écrire les tests sur une description du fichier et quelques lignes fictives, sans montrer les données réelles. Les scripts s\'exécutent sur vos postes. Pour aller plus loin, un modèle installé en local peut être envisagé au cadrage.'],
        ['q' => 'Quelle différence avec la formation IA dans les processus métier ?', 'r' => 'Celle-là s\'adresse aux responsables qui font tourner un processus et conçoivent ses points de validation. Celle-ci s\'adresse à ceux qui vérifient les processus des autres : elle porte sur l\'extraction, les tests exhaustifs, la revue de contrats et la documentation d\'audit.'],
        ['q' => 'Les auditeurs externes et les commissaires aux comptes sont-ils concernés ?', 'r' => 'Oui. Ils y trouvent la méthode de test, la documentation compatible avec la norme ISA 230 et les règles de secret. Les choix de procédures et l\'opinion restent régis par leurs normes et par la doctrine de leur cabinet et de leur ordre.'],
        ['q' => 'Faut-il un logiciel d\'audit spécialisé ?', 'r' => 'Non. Un tableur avec Power Query ou LibreOffice Calc, et Python si l\'informatique l\'autorise, suffisent. Si le service possède déjà un logiciel d\'analyse d\'audit, les exercices peuvent s\'y faire, et l\'assistant aide à en écrire les requêtes.'],
        ['q' => 'La formation couvre-t-elle la détection de la fraude ?', 'r' => 'Elle couvre les tests qui font apparaître des anomalies souvent liées à la fraude : doublons, fractionnement, tiers liés au personnel, séparation des tâches. Elle ne forme pas à l\'enquête, ni aux entretiens d\'investigation, ni aux suites disciplinaires ou judiciaires.'],
        ['q' => 'Qui forme, et est-il auditeur ?', 'r' => 'Richard SALANON, consultant en digitalisation et développeur logiciel. Il n\'est ni auditeur, ni commissaire aux comptes, ni expert-comptable : il forme à l\'usage et au contrôle des outils, et les questions de normes restent tranchées par les participants et leurs référentiels.'],
        ['q' => 'Combien de personnes par groupe ?', 'r' => 'Huit au plus en salle, six à distance. La construction des tests demande de suivre l\'écran de chacun ; au-delà, une erreur de jointure ou un filtre oublié passe inaperçu.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits. Il dépend du nombre de participants, de la préparation des extractions, du nombre de systèmes, du format, du lieu et de la revue de dossier. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Reçoit-on une attestation ?', 'r' => 'Oui, une attestation nominative de fin de formation, avec le programme, les supports, les scripts validés et les feuilles de présence. Ce n\'est ni un diplôme, ni une certification professionnelle d\'auditeur, ni une validation de formation continue par un ordre.'],
    ],

    'sources' => [
        ['titre' => 'IIA, Normes internationales d\'audit interne, version française (publiées le 9 janvier 2024, en vigueur depuis le 9 janvier 2025) : normes 5.2, 10.3, 14.1, 14.2 et 14.6', 'url' => 'https://www.theiia.org/globalassets/site/standards/editable-versions/global-internal-audit-standards-french.pdf', 'date' => '2026-10-05'],
        ['titre' => 'IIA, Global Internal Audit Standards : documents complets et dates de publication et d\'entrée en vigueur', 'url' => 'https://www.theiia.org/en/standards/2024-standards/global-internal-audit-standards/free-documents/complete-global-internal-audit-standards/', 'date' => '2026-10-05'],
        ['titre' => 'IIA, Artificial Intelligence Auditing Framework (13 septembre 2024)', 'url' => 'https://www.theiia.org/en/content/tools/professional/2023/the-iias-updated-ai-auditing-framework/', 'date' => '2026-10-05'],
        ['titre' => 'IAASB, manuel 2023-2024 des normes internationales (ISA 230, ISA 500, ISA 530), publié le 29 août 2024', 'url' => 'https://www.iaasb.org/publications/2023-2024-handbook-international-quality-management-auditing-review-other-assurance-and-related', 'date' => '2026-10-05'],
        ['titre' => 'IAASB, exposé-sondage du 5 août 2026 : révisions proposées d\'ISA 330, ISA 500 et ISA 520 (commentaires jusqu\'au 15 décembre 2026)', 'url' => 'https://www.iaasb.org/publications/proposed-revisions-audit-evidence-risk-response-isa-330-isa-500-isa-520', 'date' => '2026-10-05'],
        ['titre' => 'ACFE, Occupational Fraud 2026 : A Report to the Nations', 'url' => 'https://www.acfe.com/fraud-resources/report-to-the-nations', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, mise en ligne du règlement n° 01/2017/CM/OHADA portant harmonisation des pratiques des professionnels de la comptabilité et de l\'audit', 'url' => 'https://www.ohada.org/mise-en-ligne-du-reglement-portant-harmonisation-des-pratiques-des-professionnels-de-la-comptabilite-et-de-l-audit-dans-les-etats-membres-de-l-ohada/', 'date' => '2026-10-05'],
        ['titre' => 'Code d\'éthique des professionnels de la comptabilité et de l\'audit, espace OHADA (section 140, définition de la mission d\'audit), publié par l\'ONECCA du Burkina Faso', 'url' => 'https://www.oneccabf.org/wp-content/uploads/OHADA_Code-dethique-des-professionnels-de-la-comptabilite-et-de-laudit.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, règlement (UE) 2016/679 (RGPD), articles 5 et 28', 'url' => 'https://eur-lex.europa.eu/eli/reg/2016/679/oj', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 du règlement sur l\'IA (mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres, dont Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, tarifs de Claude (Team et Enterprise)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Python, page des téléchargements (Python 3.14.8 du 30 septembre 2026)', 'url' => 'https://www.python.org/downloads/', 'date' => '2026-10-05'],
        ['titre' => 'PyPI, pandas 3.0.6 (17 septembre 2026, licence BSD)', 'url' => 'https://pypi.org/project/pandas/', 'date' => '2026-10-05'],
        ['titre' => 'LibreOffice, page de téléchargement (version 26.8.0)', 'url' => 'https://www.libreoffice.org/download/download-libreoffice/', 'date' => '2026-10-05'],
        ['titre' => 'Ollama, dépôt officiel', 'url' => 'https://github.com/ollama/ollama', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-processus-metier', 'gouvernance-ia', 'ia-comptables-syscohada', 'sql-analystes', 'excel-google-sheets', 'ia-droit-ohada'],
        'services'    => ['integration-ia-entreprise', 'consultant-digitalisation'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
