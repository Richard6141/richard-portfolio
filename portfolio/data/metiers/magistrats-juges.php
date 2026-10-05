<?php
// ============================================================
// data/metiers/magistrats-juges.php · Page « formations par métier » :
// magistrats et juges (vague 1C, univers Droit et justice, prioritaire,
// statut F). Angle propre : la juridiction (siège et parquet) ; recherche
// pour juger, préparation des décisions, gestion du rôle, indépendance,
// secret du délibéré, motivation humaine, publicité des débats, limites de
// l'IA dans l'acte de juger. La recherche OHADA détaillée relève de la fiche
// ia-droit-ohada ; la vie du cabinet relève de la page avocats : rien n'en
// est repris.
// Textes lus le 05/10/2026 à la source : charte éthique de la CEPEJ (3-4
// décembre 2018 : principes 1 et 5, annexe II) ; note de la CEPEJ sur l'IA
// générative (12 février 2024) ; règlement européen sur l'IA (annexe III,
// point 8 a, considérant 61, articles 26 et 86, calendrier de la Commission
// mis à jour le 3 août 2026) ; loi béninoise n° 2001-35 du 21 février 2003
// portant statut de la magistrature (articles 4, 5, 7, 9 ; loi n° 2019-12
// lue : elle ne modifie que les articles 36, 37 et 82) ; loi organique
// sénégalaise n° 2017-10 (articles 7, 9, 16) ; règlement de procédure de la
// CCJA (1996, articles 35 et 39) et règlement n° 01/2014/CM/OHADA (articles
// 3, 22, 27 bis, 40) ; décision n° 2019-778 DC (article 33 de la loi
// n° 2019-222) ; charte IA de la juridiction administrative (11 décembre
// 2025) ; Cour de cassation (rapport du 28 avril 2025) ; ministère de la
// Justice (12 mai 2026) ; guide des juges d'Angleterre et du pays de Galles
// (31 octobre 2025) ; commission judiciaire du Sénat américain (23 octobre
// 2025) ; UNESCO (lignes directrices du 3 décembre 2025, atelier de Dakar de
// février 2025) ; AIP (INFJ, 10 juin 2026) ; catalogue 2026 de l'ERSUMA ;
// portail eservices.justice.bj ; e-TribCom (Abidjan) ; Commission européenne
// (article 4, fait vérifié du catalogue). Richard n'est pas magistrat : la
// page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA et numérique pour magistrats et juges : chercher, préparer les décisions et tenir le rôle avec des outils maîtrisés, sans rien céder sur l\'indépendance, le secret du délibéré et la motivation humaine',
    'title'   => 'Formation IA et numérique pour magistrats | Richard SALANON',
    'meta'    => 'Former magistrats du siège et du parquet à l\'IA : recherche, préparation des décisions, rôle, indépendance et motivation qui reste humaine. Sur devis.',
    'en_bref' => 'Cette page s\'adresse aux magistrats du siège et du parquet, aux auditeurs de justice et aux assistants de justice qui veulent se servir de l\'intelligence artificielle et des outils numériques de leur juridiction sans toucher à ce qui fait l\'acte de juger : l\'indépendance, le secret du délibéré, la motivation et la publicité des débats. Le parcours type dure trois jours en six demi-journées, se découpe entre siège, parquet et chefs de juridiction, et se tient en session réservée à la juridiction, entre plusieurs juridictions, à distance ou en formule hybride. Richard SALANON forme à l\'usage des outils ; juger reste l\'affaire des magistrats. Le prix est fixé sur devis.',
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Droit et justice',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : la juridiction face aux outils, ce qui est ouvert et ce qui reste fermé',
            'duree'  => '3 h 30',
            'points' => [
                'Relevé, avec les participants, du chemin d\'une affaire dans leur juridiction : enrôlement, mise en état ou enquête, audience, délibéré, rédaction, prononcé, notification, publication.',
                'Pour chaque étape, ce qu\'un outil peut préparer, ce qu\'il peut faire sous contrôle, et ce qui appartient au juge seul : établir les faits, interpréter la règle, l\'appliquer, motiver.',
                'Lecture commentée des textes qui s\'imposent : statut de la magistrature du pays, règlement de procédure de la CCJA, charte éthique de la CEPEJ, et pour les juridictions de l\'Union européenne le règlement sur l\'IA.',
                'Inventaire des outils déjà présents dans les bureaux, y compris l\'IA arrivée sans annonce : traduction en ligne, correcteur, transcription du téléphone, assistant du navigateur.',
                'Exercice : chaque participant classe douze gestes de sa dernière semaine d\'audience selon cette carte, puis le groupe confronte les classements entre siège et parquet.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : chercher pour juger, et lire les écritures des parties à l\'heure de l\'IA',
            'duree'  => '3 h 30',
            'points' => [
                'Formuler une recherche de textes et de décisions publiées avec un assistant, puis la conduire dans les sources officielles ; la méthode détaillée de vérification des références OHADA renvoie à la formation IA et droit OHADA.',
                'Repérer dans des conclusions ou des mémoires les signes d\'un texte produit par une IA : références introuvables, droit étranger cité comme droit national, raisonnement brillant et faux.',
                'Ce que le juge peut demander aux parties : la source exacte d\'une référence, la vérification faite, et la confirmation par l\'avocat ou la partie qu\'elle répond de ce qu\'elle verse.',
                'Le texte caché dans un document (instructions en blanc sur blanc) et les pièces truquées : ce que le juge doit savoir avant de soumettre une pièce à un outil.',
                'Exercice : un jeu de conclusions fictives contenant trois références inventées et une citation déformée, à analyser en binôme.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : préparer le dossier et le délibéré sans livrer le dossier',
            'duree'  => '3 h 30',
            'points' => [
                'Chronologie des faits, tableau des prétentions et des moyens, inventaire des pièces : ce qu\'un outil installé sur le poste de la juridiction peut produire, et ce qu\'un service en ligne ne doit jamais recevoir.',
                'Le secret du délibéré appliqué aux outils : notes de délibéré, projets annotés, votes et désaccords ne passent par aucun service extérieur, même pseudonymisés.',
                'Pseudonymiser pour publier : ce que la publication des décisions demande, et pourquoi l\'occultation reste relue par une personne.',
                'Les biais qui guettent celui qui relit au lieu d\'écrire : ancrage sur la première proposition, confirmation de l\'idée de départ.',
                'Exercice : préparation d\'un dossier fictif de contentieux commercial, de la requête à la fiche de délibéré, avec la règle de ce qui reste hors de l\'outil.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : rédiger et motiver, l\'outil aide à la forme, le juge motive',
            'duree'  => '3 h 30',
            'points' => [
                'Trames de jugement et d\'ordonnance de la juridiction : en-têtes, visas, exposé du litige, dispositif ; ce qui se standardise sans risque et ce qui ne se standardise pas.',
                'Pourquoi la motivation ne se délègue pas : elle répond aux moyens des parties, elle est lue par le justiciable et contrôlée par la juridiction supérieure.',
                'Relire un projet produit avec un outil : chaque fait contre les pièces, chaque référence contre la source, chaque moyen des parties contre la réponse donnée.',
                'Traductions de pièces et procédure dans plusieurs langues : ce que prévoit la CCJA, et le statut d\'une traduction faite par un outil.',
                'Exercice : un projet de jugement fictif contenant une motivation creuse et un moyen oublié, à repérer et à réécrire.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : le rôle, le parquet et les chiffres de la juridiction',
            'duree'  => '3 h 30',
            'points' => [
                'Gestion du rôle et de l\'audiencement : tableaux de suivi, délais, renvois, affaires anciennes, alertes simples, dans le logiciel de la juridiction ou un tableur partagé.',
                'Le parquet : flux des procédures, orientation, suivi des réquisitions et des instructions écrites, ce que l\'outil peut trier et ce qu\'il ne décide pas.',
                'Lire les indicateurs d\'activité (stock, délai moyen et médian, taux de renvoi) sans leur faire dire ce qu\'ils ne disent pas.',
                'Pourquoi un outil qui compare les décisions de chaque juge est une impasse, et ce que la loi française interdit en la matière.',
                'Exercice : tableau de bord d\'une chambre fictive construit à partir d\'un export, puis lecture critique des chiffres par le groupe.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : la règle d\'usage de la juridiction, la sécurité et l\'évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Rédaction d\'une règle d\'usage en deux pages : outils autorisés, comptes, données interdites, relecture, mention éventuelle, signalement d\'un incident.',
                'Sécurité de base : poste professionnel, double authentification, clé USB, téléphone, départ d\'un magistrat ou d\'un assistant.',
                'Pour les juridictions établies dans l\'Union européenne : l\'obligation de maîtrise de l\'IA de l\'article 4 du règlement européen et le régime des systèmes à haut risque.',
                'Évaluation : un dossier fictif complet traité seul, avec une référence inventée dans une écriture, une erreur de date dans une chronologie produite par l\'outil, et une donnée couverte par le secret à ne pas envoyer.',
                'Remise des supports : carte des usages, règle d\'usage type, liste de contrôle de relecture d\'un projet, fiche de lecture des écritures des parties.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Magistrats du siège et du parquet, auditeurs et assistants de justice'],
        ['l' => 'Durée', 'v' => '3 jours en 6 demi-journées, découpables siège, parquet et chefs de juridiction'],
        ['l' => 'Formats', 'v' => 'Session réservée à la juridiction, inter-juridictions, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que changent l\'IA et les outils numériques dans le travail d\'une juridiction ?',
            'paragraphes' => [
                'Une juridiction ne fait pas que rendre des décisions. Avant le jugement, il y a l\'enrôlement, la mise en état, les renvois, la lecture des écritures, la recherche, la préparation de l\'audience ; après, la rédaction, le prononcé, la notification, l\'archivage et, de plus en plus, la publication. Au parquet, s\'ajoutent le flux des procédures, leur orientation et le suivi des réquisitions. L\'intelligence artificielle et la dématérialisation touchent chacune de ces étapes, et la formation se place à cette échelle : celle de la juridiction qui travaille, siège et parquet compris.',
                'Le mouvement est déjà engagé de part et d\'autre de la Méditerranée. Au Bénin, le portail des services de la Justice affichait le 5 octobre 2026 plus de 103 plateformes numériques, et le projet e-justice lancé en avril 2022 vise un système d\'information couvrant les procédures pénales et civiles et reliant les juridictions entre elles. À Abidjan, le tribunal de commerce sert de site pilote à la plateforme e-TribCom de gestion électronique des procédures. En France, le ministère de la Justice a ouvert le 12 mai 2026 à plusieurs milliers d\'agents son outil interne d\'IA générative, après une expérimentation menée avec 2 500 agents.',
                'Ce qui change pour le magistrat tient en deux mouvements. D\'un côté, des outils qui font gagner du temps sur ce qui n\'est pas juger : trier, classer, mettre en forme, traduire un document public, suivre un rôle chargé. De l\'autre, une pression nouvelle sur ce qui est juger : des écritures de parties rédigées avec des assistants qui inventent parfois des références, des projets « prêts à l\'emploi » qui orientent la réflexion, des fonctions d\'IA glissées dans les logiciels sans que personne l\'ait décidé.',
                'La formation part de la juridiction telle qu\'elle fonctionne. Elle apprend à chacun ce que l\'outil peut préparer, ce qu\'il fait sous contrôle et ce qui lui reste fermé ; elle donne une méthode de relecture et de lecture critique des écritures ; elle aboutit à une règle d\'usage écrite de la juridiction. Richard SALANON n\'est pas magistrat : il forme à l\'usage des outils, et ce sont les magistrats présents qui disent, pendant les exercices, ce que leur statut et leur pratique autorisent.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles tâches de la juridiction un outil peut-il préparer, et lesquelles restent au magistrat ?',
            'legende' => 'Répartition enseignée pendant la formation, à partir des textes cités plus bas. La dernière colonne indique le risque que la juridiction doit maîtriser avant d\'outiller la tâche.',
            'entetes' => ['Tâche de la juridiction', 'Ce qu\'un outil peut préparer', 'Ce qui reste au magistrat', 'Risque à maîtriser'],
            'lignes'  => [
                ['Gestion du rôle et audiencement', 'Tableaux des affaires, alertes sur les dossiers anciens, propositions de calendrier', 'Fixer les dates, accorder ou refuser un renvoi', 'Un tableau qui pousse à juger vite les affaires simples et laisse vieillir les autres'],
                ['Recherche de textes et de décisions publiées', 'Mots-clés, notions voisines, résumé d\'une décision publique téléchargée par le magistrat', 'Lire la source et retenir ce qui s\'applique à l\'affaire', 'Une référence inventée, ou un texte remplacé présenté comme en vigueur'],
                ['Lecture des écritures des parties', 'Inventaire des moyens et des pièces invoquées, liste des références à contrôler', 'Apprécier les moyens et y répondre', 'Un résumé qui omet le moyen décisif, ou une écriture déjà rédigée par une IA'],
                ['Préparation du dossier', 'Chronologie, tableau des prétentions, inventaire des pièces, sur un outil installé dans la juridiction', 'Établir les faits à partir des pièces', 'Une date fausse reprise dans le jugement parce que personne n\'a relu la chronologie'],
                ['Délibéré', 'Rien, en dehors de la mise en forme d\'une fiche vierge', 'Délibérer, voter, décider', 'Une note de délibéré passée par un service extérieur, en violation du secret'],
                ['Rédaction de la décision', 'Trame, en-têtes, visas, mise en forme du dispositif décidé', 'Motiver, répondre aux moyens, décider du dispositif', 'Une motivation générique qui ne répond pas aux parties'],
                ['Parquet', 'Tri des procédures entrantes par catégorie, tableaux de suivi, trames de réquisitions', 'Orienter la procédure, requérir', 'Un tri automatique qui devient une décision d\'orientation que personne n\'a prise'],
                ['Publication des décisions', 'Repérage des noms et des éléments à occulter', 'Valider l\'occultation avant diffusion', 'Une personne restée identifiable par un détail que l\'outil n\'a pas vu'],
                ['Statistiques d\'activité', 'Calcul des délais, des stocks et des flux à partir d\'un export', 'Interpréter les chiffres et décider de l\'organisation', 'Un indicateur qui compare des juges au lieu d\'éclairer la juridiction'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que l\'IA ne doit-elle jamais faire dans une juridiction ?',
            'intro' => 'Ces limites ne viennent pas de la prudence du formateur : elles découlent du statut des magistrats, des règles de procédure et des textes européens et internationaux cités plus bas. La formation les fait appliquer sur des cas concrets pour qu\'elles deviennent des réflexes de juridiction.',
            'items' => [
                ['titre' => 'Décider, ou proposer la solution', 'texte' => 'La charte de la juridiction administrative française du 11 décembre 2025 le formule sans détour : l\'IA est un outil qui jamais ne décide. Elle ne doit ni interpréter une règle, ni établir des faits, ni appliquer la règle au cas d\'espèce, ni tenir le raisonnement juridique, ni a fortiori proposer une solution au regard des données du litige.'],
                ['titre' => 'Écrire la motivation à la place du juge', 'texte' => 'La motivation est la réponse du juge aux parties. Un outil peut mettre en forme un dispositif décidé ou rappeler un plan, il ne répond pas aux moyens. Le règlement de procédure de la CCJA exige que chaque arrêt contienne les motifs : ce sont ceux de la Cour, pas ceux d\'un logiciel.'],
                ['titre' => 'Recevoir le délibéré ou le dossier', 'texte' => 'Le serment prêté au Bénin et au Sénégal engage à garder le secret des délibérations et des votes, et la CCJA délibère en chambre du conseil, sans procès-verbal. Une note de délibéré, un projet annoté, une pièce non publique ne passent par aucun service en ligne, même pour corriger l\'orthographe.'],
                ['titre' => 'Apporter au débat ce que les parties n\'ont pas vu', 'texte' => 'Le statut sénégalais interdit au magistrat de se prononcer sur la connaissance personnelle qu\'il peut avoir de l\'affaire. Une information trouvée par un assistant hors du dossier ne fonde pas la décision sans avoir été soumise à la discussion des parties : le contradictoire vaut aussi pour ce que propose une machine.'],
                ['titre' => 'Profiler les juges', 'texte' => 'La loi française du 23 mars 2019 interdit, sous peine de sanctions, de réutiliser l\'identité des magistrats et des greffiers figurant dans les décisions publiées pour évaluer, analyser, comparer ou prédire leurs pratiques. Une juridiction n\'a pas à se doter elle-même de l\'outil que la loi interdit aux autres.'],
                ['titre' => 'Prédire la dangerosité d\'une personne', 'texte' => 'La CEPEJ range parmi les usages « à envisager avec les plus extrêmes réserves » les algorithmes qui profilent les individus en matière pénale, en rappelant les dérives discriminatoires constatées à l\'étranger. Aucun score produit par un outil ne remplace l\'examen de la personne par le juge.'],
                ['titre' => 'Enfermer le juge dans la masse des précédents', 'texte' => 'Fournir à chaque juge le contenu de toutes les décisions rendues pour cadrer son choix, c\'est ce que la CEPEJ appelle la « norme issue du nombre » : selon la charte, le nombre ne saurait ajouter à la loi ou s\'y substituer. La statistique éclaire, elle ne lie pas.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels textes encadrent l\'usage de l\'IA par les juridictions, en zone OHADA et en Europe ?',
            'legende' => 'Textes lus le 5 octobre 2026 à la source, dans leur version publiée. Ils ne remplacent ni les instructions du ministère de la Justice de chaque pays, ni les règles internes des cours, que les participants apportent et qui priment pour eux.',
            'entetes' => ['Texte', 'Ce qu\'il prévoit', 'Ce que cela change pour les outils de la juridiction'],
            'lignes'  => [
                ['Loi béninoise n° 2001-35 du 21 février 2003 portant statut de la magistrature, articles 4 et 5', 'Les magistrats du siège sont indépendants et ne doivent subir aucune influence, incitation, pression ou intervention indue, directe ou indirecte ; les observations des chefs de juridiction ne doivent pas porter atteinte à cette indépendance', 'Un outil fourni par l\'administration ne peut pas devenir une consigne déguisée : le juge reste libre de s\'écarter de toute proposition'],
                ['Même loi, articles 7 et 9', 'Le parquet respecte les instructions écrites de sa hiérarchie, mais sa parole est libre à l\'audience ; le serment engage à garder le secret des délibérations et des votes et à ne donner aucune consultation à titre privé', 'Les réquisitions écrites peuvent s\'outiller, pas la parole d\'audience ; rien du délibéré n\'entre dans un service extérieur'],
                ['Loi organique sénégalaise n° 2017-10 du 17 janvier 2017, articles 7, 9 et 16', 'Parquet sous l\'autorité hiérarchique avec parole libre à l\'audience ; serment de secret des délibérations et des votes ; interdiction de se prononcer sur la connaissance personnelle de l\'affaire', 'Ce qu\'un assistant apporte hors du dossier n\'entre dans la décision qu\'après discussion par les parties'],
                ['Règlement de procédure de la CCJA (18 avril 1996, modifié le 30 janvier 2014), articles 3, 22, 35, 39 et 40', 'Déclaration de secret des délibérations ; délibéré en chambre du conseil, sans procès-verbal ; audience publique sauf huis clos ; arrêt contenant les motifs ; arrêt rendu en audience publique', 'Le délibéré reste entre les juges ; la décision prononcée publiquement est motivée par la Cour elle-même'],
                ['Même règlement, article 27 bis', 'La langue de procédure s\'impose aux mémoires, pièces et décisions ; toute pièce rédigée dans une autre langue est accompagnée d\'une traduction', 'Une traduction produite par un outil se présente comme telle et se contrôle avant d\'être versée ou utilisée'],
                ['Charte éthique de la CEPEJ (Conseil de l\'Europe, 3-4 décembre 2018), principes 1 et 5', 'Respect du droit d\'accès au juge, du procès équitable et de l\'indépendance des juges ; maîtrise par l\'utilisateur, qui doit pouvoir revenir aux données utilisées et s\'écarter du résultat', 'Pas d\'outil dont on ne peut pas retrouver les sources ; le justiciable est informé d\'un traitement de son affaire par l\'IA et peut demander un juge'],
                ['Note de la CEPEJ sur l\'IA générative (12 février 2024)', 'N\'entrer que des données non sensibles déjà publiques ; vérifier les réponses, même référencées ; reformuler tout texte destiné à un document officiel ; rester maître de la décision', 'Les neuf gestes recommandés et les six cas où s\'abstenir forment la base de la règle d\'usage de la juridiction'],
                ['Règlement européen sur l\'IA, annexe III, point 8 a), considérant 61, articles 26 et 86', 'Haut risque pour les systèmes qui aident l\'autorité judiciaire à rechercher, interpréter et appliquer le droit ; décision finale humaine ; surveillance confiée à des personnes compétentes et formées ; droit à une explication', 'Pour les juridictions de l\'Union, régime applicable à partir du 2 décembre 2027 ; l\'anonymisation des décisions et les tâches administratives n\'en relèvent pas'],
                ['Loi française n° 2019-222 du 23 mars 2019, article 33, validé par le Conseil constitutionnel (décision n° 2019-778 DC du 21 mars 2019)', 'Interdiction de réutiliser l\'identité des magistrats et des greffiers des décisions publiées pour évaluer, analyser, comparer ou prédire leurs pratiques', 'Aucun tableau de bord nominatif comparant les juges sur le contenu de leurs décisions'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment l\'indépendance du juge se joue-t-elle face à un assistant d\'IA ?',
            'paragraphes' => [
                'L\'indépendance se pense d\'ordinaire face aux pouvoirs, aux parties et à la presse. L\'assistant d\'IA ajoute une influence plus discrète : celle d\'une proposition bien rédigée, livrée en quelques secondes, qui oriente la réflexion avant même qu\'elle commence. La charte de la juridiction administrative française nomme les deux pièges qui menacent le juge devenu relecteur : le biais d\'ancrage, qui rend difficile de se défaire d\'une première proposition, et le biais de confirmation, qui pousse l\'outil à répondre dans le sens de la question posée.',
                'La parade est d\'abord une méthode de travail. Le magistrat lit le dossier et forme sa première analyse avant d\'ouvrir l\'outil ; il demande aussi à l\'assistant les arguments contraires ; il garde la possibilité, que la CEPEJ place au cœur de son cinquième principe, de revenir aux données utilisées pour produire un résultat et de s\'en écarter au vu des spécificités de l\'affaire. Un outil dont on ne peut pas retrouver les sources ne permet pas cet écart : il ne doit pas servir à préparer une décision.',
                'L\'indépendance pose aussi une question d\'organisation, que la formation aborde avec les chefs de juridiction. Quand l\'outil est fourni par le ministère, qui conserve les requêtes, qui peut les lire, combien de temps ? Un historique de conversations qui révélerait l\'état de la réflexion d\'un juge avant le délibéré n\'est pas une donnée banale. La juridiction pose ces questions par écrit avant le déploiement, et la règle d\'usage interdit d\'y saisir ce qui relève du délibéré, quelles que soient les réponses.',
                'Le parquet n\'est pas dans la même position que le siège. Au Bénin comme au Sénégal, ses magistrats sont placés sous l\'autorité de leur hiérarchie et respectent les instructions écrites, mais leur parole est libre à l\'audience. Un outil peut donc aider à préparer des réquisitions écrites dans le cadre d\'instructions connues ; il ne prépare pas la parole d\'audience, qui reste celle du magistrat qui la prononce.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la motivation et la publicité des débats restent-elles humaines ?',
            'paragraphes' => [
                'Motiver, c\'est montrer aux parties que leurs moyens ont été lus et pesés, et permettre à la juridiction supérieure de contrôler le raisonnement. Le règlement de procédure de la CCJA en fait un élément obligatoire de chaque arrêt, à côté de l\'exposé des faits et du dispositif. Un texte produit par un outil peut avoir l\'allure d\'une motivation sans en être une : il paraphrase les écritures, enchaîne des formules générales, et oublie le moyen qui gênait. La note de la CEPEJ de février 2024 demande, pour tout texte destiné à un document officiel, de le reformuler plutôt que de le reprendre.',
                'La publicité des débats a la même racine. Selon le règlement de la CCJA, l\'audience est publique sauf décision contraire et l\'arrêt est rendu en audience publique : ce qui fonde la décision doit pouvoir être entendu et discuté. Une analyse produite par un assistant et utilisée par le juge sans avoir été soumise aux parties échappe à ce débat. La règle enseignée est simple : si un élément trouvé avec l\'outil pèse sur la décision, il entre dans le débat par la voie ordinaire, réouverture des débats ou demande d\'observations, selon la procédure applicable.',
                'Le justiciable a aussi un droit à comprendre. La charte de la CEPEJ demande qu\'il soit informé clairement de tout traitement préalable de son affaire par l\'IA et qu\'il puisse s\'y opposer pour être entendu directement par un tribunal. Pour les juridictions de l\'Union européenne, l\'article 86 du règlement sur l\'IA donnera à la personne concernée par une décision fondée sur un système à haut risque le droit d\'obtenir des explications claires sur le rôle du système et les principaux éléments de la décision.',
                'Publier les décisions, enfin, n\'est pas juger. Le considérant 61 du règlement européen exclut du haut risque les tâches purement accessoires, comme l\'anonymisation ou la pseudonymisation des décisions, et la Cour de cassation française a développé en interne un outil de pseudonymisation pour diffuser ses décisions en données ouvertes. C\'est souvent par là qu\'une juridiction commence utilement : une tâche réelle, utile au public, contrôlable par une personne avant chaque diffusion.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Peut-on soumettre un projet de jugement à un assistant en ligne pour en corriger les fautes ?',
            'texte' => 'Non. Un projet de décision avant son prononcé contient des données personnelles et l\'état du délibéré ; l\'envoyer à un service en ligne revient, selon la charte de la juridiction administrative française, à le publier sur internet. Cette charte cite précisément comme usages à proscrire la correction d\'orthographe d\'un projet de conclusions, la mise en forme d\'une décision avant notification et le résumé d\'un mémoire. La correction se fait avec le correcteur hors ligne du traitement de texte ou un outil installé sur le poste de la juridiction, et la relecture reste humaine.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères datés situent l\'enjeu pour les juridictions ?',
            'items' => [
                ['valeur' => '15 principes', 'libelle' => 'Lignes directrices de l\'UNESCO pour l\'usage de l\'IA dans les cours et tribunaux, publiées le 3 décembre 2025 après des consultations d\'experts de plus de 160 pays et de plus de 36 000 acteurs judiciaires', 'source' => 'UNESCO, Guidelines for the use of AI systems in courts and tribunals', 'url' => 'https://www.unesco.org/en/articles/guidelines-use-ai-systems-courts-and-tribunals'],
                ['valeur' => '7 pays', 'libelle' => 'Écoles de formation judiciaire du Burkina Faso, du Bénin, de la Côte d\'Ivoire, de la Guinée, du Mali, du Sénégal et du Togo réunies à Dakar le 27 février 2025 pour intégrer l\'IA à leurs cursus', 'source' => 'UNESCO, bureau régional de Dakar (article du 10 mars 2025)', 'url' => 'https://www.unesco.org/fr/articles/vers-une-concertation-des-ecoles-de-formation-judiciaire-face-aux-enjeux-de-lintelligence'],
                ['valeur' => '2 décembre 2027', 'libelle' => 'Date d\'application, selon la Commission européenne (page mise à jour le 3 août 2026), des règles visant les systèmes d\'IA à haut risque de l\'annexe III, dont ceux qui aident l\'autorité judiciaire', 'source' => 'Commission européenne, cadre réglementaire de l\'IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai'],
                ['valeur' => '2 500', 'libelle' => 'Agents du ministère de la Justice français mobilisés pour tester l\'assistant d\'IA interministériel avant l\'ouverture de « Mon Assistant Justice », le 12 mai 2026', 'source' => 'Ministère de la Justice, communiqué du 12 mai 2026', 'url' => 'https://www.justice.gouv.fr/actualites/espace-presse/intelligence-artificielle-ministere-justice-deploie-son-outil-dia-generative-interne'],
                ['valeur' => '103+', 'libelle' => 'Plateformes numériques recensées sur le portail des services de la Justice du Bénin, consulté le 5 octobre 2026', 'source' => 'Ministère de la Justice et de la Législation du Bénin, eservices.justice.bj', 'url' => 'https://eservices.justice.bj/'],
                ['valeur' => '2 juges', 'libelle' => 'Juges fédéraux américains ayant reconnu en octobre 2025 que leurs collaborateurs avaient utilisé l\'IA générative pour rédiger des décisions entachées d\'erreurs', 'source' => 'Commission judiciaire du Sénat des États-Unis, communiqué du 23 octobre 2025', 'url' => 'https://www.judiciary.senate.gov/press/rep/releases/grassley-releases-judges-responses-owning-up-to-ai-use-calls-for-continued-oversight-and-regulation'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que nous apprennent les erreurs déjà commises dans des juridictions ?',
            'paragraphes' => [
                'Les citations inventées ne viennent pas seulement des parties. En octobre 2025, deux juges fédéraux américains, Henry T. Wingate dans le Mississippi et Julien Xavier Neals dans le New Jersey, ont reconnu devant la commission judiciaire du Sénat que des membres de leur équipe avaient utilisé l\'IA générative pour rédiger des décisions. Selon le communiqué du 23 octobre 2025, ces décisions citaient mal le droit de l\'État, mentionnaient des personnes étrangères à l\'affaire et prêtaient aux défendeurs des citations qu\'ils n\'avaient jamais faites.',
                'Les mesures prises ensuite ressemblent à ce que la formation enseigne. Le premier juge impose désormais une seconde relecture indépendante de tout projet de décision et l\'impression, jointe au projet final, de chaque décision citée. Le second a adopté une règle écrite interdisant à ses assistants juridiques et stagiaires d\'utiliser l\'IA pour rédiger, avec plusieurs niveaux de relecture. L\'administration des tribunaux fédéraux a, de son côté, diffusé le 31 juillet 2025 des orientations provisoires invitant notamment à se demander si l\'usage de l\'IA doit être signalé.',
                'Le guide des juges d\'Angleterre et du pays de Galles, mis à jour le 31 octobre 2025, tire la leçon en une phrase : les juges sont personnellement responsables de ce qui est produit en leur nom, et ils doivent toujours lire les pièces elles-mêmes. Il signale deux risques nouveaux pour qui juge : les pièces truquées produites par l\'IA, et le texte caché dans un document, invisible à l\'œil mais lu par la machine, qui peut détourner un outil chargé de le résumer.',
                'Ce guide rappelle aussi que des justiciables sans avocat se servent désormais d\'assistants, parfois comme seule source de conseil. Quand une écriture semble produite ainsi, il recommande de le demander, de s\'enquérir des vérifications faites et de rappeler à la partie qu\'elle répond de ce qu\'elle soumet. La formation en fait un exercice, parce que rien ne réserve cette situation aux juridictions anglaises : un assistant gratuit sur un téléphone suffit pour la produire à Cotonou comme à Bruxelles. L\'histoire de la décision rendue contre <a href="/histoires/air-canada-chatbot">Air Canada à propos de son chatbot</a> montre, de l\'autre côté, qu\'un tribunal tient une organisation pour responsable de ce que dit son assistant.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation dans des juridictions d\'Afrique francophone et d\'Europe ?',
            'items' => [
                ['secteur' => 'Tribunal de commerce, en Afrique de l\'Ouest', 'probleme' => 'La juridiction passe à une plateforme de gestion électronique des procédures, les écritures arrivent en fichiers volumineux, et plusieurs juges lisent les conclusions avec un assistant grand public ouvert sur leur téléphone.', 'solution' => 'Règle d\'usage de la juridiction, inventaire des moyens et des pièces sur un outil installé sur ses postes, fiche de contrôle des références citées par les parties, et rien du dossier dans un service en ligne.'],
                ['secteur' => 'Tribunal de première instance, au Bénin', 'probleme' => 'Le rôle est tenu dans un registre et un tableur que chacun modifie, les renvois s\'accumulent, et les nouveaux outils numériques du ministère arrivent sans formation commune.', 'solution' => 'Tableau de suivi du rôle partagé avec droits d\'accès, indicateurs de délai lus en chambre, et répartition claire entre ce que l\'outil signale et ce que le président de chambre décide.'],
                ['secteur' => 'Parquet d\'une grande juridiction, à Dakar', 'probleme' => 'Le flux des procédures dépasse les capacités de lecture, et un substitut propose de faire résumer les procès-verbaux d\'enquête par un assistant en ligne.', 'solution' => 'Rappel du secret de l\'enquête et des données pénales, tri des procédures entrantes par catégories dans un outil interne, trames de réquisitions sans données nominatives, et parole d\'audience préparée par le magistrat.'],
                ['secteur' => 'Cour d\'appel, au Cameroun', 'probleme' => 'Des pièces et des écritures arrivent en français et en anglais, et les traductions se font dans le navigateur, sans savoir où partent les textes ni ce que vaut le résultat.', 'solution' => 'Traduction automatique réservée aux documents publics ou aux extraits neutralisés, mention de la traduction comme telle, contrôle par une personne qui maîtrise les deux langues avant tout usage dans la décision.'],
                ['secteur' => 'Tribunal judiciaire, en France', 'probleme' => 'L\'outil interne du ministère est ouvert aux magistrats et aux greffes, mais chacun l\'utilise à sa façon, et certains continuent d\'employer des assistants grand public pour aller plus vite.', 'solution' => 'Carte des usages propre à la juridiction, règle d\'usage cohérente avec l\'outil institutionnel, méthode de relecture des projets et formation tracée au titre de l\'obligation de maîtrise de l\'IA.'],
                ['secteur' => 'Juridiction belge aux dossiers multilingues', 'probleme' => 'Les magistrats reçoivent des écritures dont certaines contiennent des références introuvables, et la juridiction ne sait pas comment réagir sans paraître soupçonner les avocats.', 'solution' => 'Grille de lecture des signes d\'un texte produit par une IA, demande écrite et neutre de la source des références contestées, et rappel aux parties de leur responsabilité, inspirés des guides publics des juridictions européennes.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Avec quels outils et systèmes une juridiction travaille-t-elle, et que faut-il en savoir ?',
            'legende' => 'Outils rencontrés dans les juridictions de la zone OHADA et d\'Europe, relevés le 5 octobre 2026. Leur choix et leur coût relèvent du ministère ou de la juridiction ; ils ne font pas partie du prix de la formation.',
            'entetes' => ['Outil ou système', 'Usage dans la juridiction', 'Accès', 'Point d\'attention'],
            'lignes'  => [
                ['Plateformes de gestion des procédures (e-TribCom à Abidjan, projet e-justice au Bénin)', 'Enrôlement, suivi des procédures, gestion électronique des documents, interconnexion des juridictions', 'Fournies par le ministère ou la juridiction', 'Savoir ce que la plateforme enregistre, qui y accède et ce qu\'elle calcule seule'],
                ['Portails de services aux usagers (eservices.justice.bj, e-justice.ci)', 'Casier judiciaire, certificats, informations pratiques', 'En ligne, pour le public', 'Ce sont des services aux usagers, pas des outils d\'aide à la décision'],
                ['Bases de textes et de décisions publiées (OHADA, Juricaf, bases nationales)', 'Recherche, vérification des références citées par les parties', 'Gratuites pour l\'essentiel', 'Elles font foi, jamais la réponse d\'un assistant ; la méthode détaillée relève de la formation IA et droit OHADA'],
                ['Assistant d\'IA institutionnel', 'Rédaction de notes administratives, synthèse et traduction de documents publics', 'Fourni par le ministère, comme « Mon Assistant Justice » en France depuis le 12 mai 2026', 'Lire les conditions de conservation des requêtes ; rien du délibéré, même dans un outil interne'],
                ['Assistant grand public (ChatGPT, Claude, Gemini)', 'Documents publics uniquement', 'Gratuit ou par abonnement ; les offres sont comparées dans le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>', 'Tout ce qu\'on y saisit doit être tenu pour publié, selon le guide des juges anglais'],
                ['Modèle installé sur un poste de la juridiction', 'Chronologies et inventaires sur des pièces non publiques', 'Logiciels libres ; le coût est celui du poste', 'Moins performant, il se trompe aussi : chaque date et chaque pièce se vérifient'],
                ['Traitement de texte et tableur de la juridiction', 'Trames de décisions, suivi du rôle, statistiques d\'activité', 'Ceux que la juridiction possède déjà', 'Des fonctions d\'IA y arrivent par les mises à jour : savoir lesquelles sont actives'],
                ['Visioconférence', 'Audiences à distance quand la procédure le permet, réunions, formation', 'Outil choisi par le ministère', 'Ne jamais activer une transcription ou un résumé automatique en audience sans texte qui l\'autorise'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme type, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation s\'organise-t-elle dans une juridiction ?',
            'intro' => 'Une juridiction ne ferme pas pour se former : les audiences, les délibérés et les permanences continuent. L\'organisation part de ces contraintes et de la place de chacun dans le traitement des affaires.',
            'items' => [
                ['titre' => 'Une session réservée à la juridiction', 'texte' => 'La formation se tient entre magistrats, à la demande du chef de juridiction, du ministère ou de l\'école de formation judiciaire. Les avocats et les justiciables n\'y assistent pas, et aucun dossier en cours n\'y est évoqué.'],
                ['titre' => 'Un découpage siège, parquet, chefs de juridiction', 'texte' => 'Les chefs de juridiction suivent au moins la première et la dernière demi-journée, parce qu\'ils fixent la règle d\'usage ; le siège et le parquet suivent ensemble les bases, puis séparément la préparation des décisions et le traitement des procédures.'],
                ['titre' => 'Des décisions publiées et des dossiers fictifs', 'texte' => 'Les exercices utilisent des décisions déjà publiées, des textes officiels et des dossiers fictifs construits avec les magistrats présents pour ressembler à leur contentieux. Rien d\'une affaire pendante n\'est utilisé.'],
                ['titre' => 'Des petits groupes', 'texte' => 'Huit personnes au plus par groupe, chacune sur son poste, pour que les erreurs de méthode se voient. Une cour d\'appel ou une grande juridiction est répartie en plusieurs groupes.'],
                ['titre' => 'Un calendrier qui respecte l\'audience', 'texte' => 'Les demi-journées se placent hors des jours d\'audience et peuvent s\'étaler sur plusieurs semaines. Les vacations judiciaires conviennent bien à la partie consacrée à la règle d\'usage et aux chiffres de la juridiction.'],
                ['titre' => 'Les outils de la juridiction', 'texte' => 'Les exercices se font dans les logiciels et les postes réellement utilisés, ou dans l\'outil que le ministère s\'apprête à déployer. Quand une juridiction n\'a encore aucun outil, la démonstration se fait sur des logiciels libres, sans engagement.'],
                ['titre' => 'Des supports remis et un suivi', 'texte' => 'Carte des usages, règle d\'usage type, liste de contrôle de relecture, fiche de lecture des écritures, attestation nominative. Un canal reste ouvert pour les questions d\'usage des outils pendant une durée fixée au devis ; les questions de droit et de déontologie restent à la hiérarchie et aux instances de la magistrature.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir selon la juridiction et le public à former ?',
            'legende' => 'Formats indicatifs : le parcours se recompose après un premier échange sur l\'effectif, les contentieux traités et les outils en place ou annoncés.',
            'entetes' => ['Situation', 'Format conseillé', 'Durée', 'Ce qui est privilégié'],
            'lignes'  => [
                ['Tribunal de première instance ou de commerce', 'Session réservée, dans les locaux', '3 jours en 6 demi-journées', 'Le parcours complet, avec une règle d\'usage adoptée à la fin'],
                ['Cour d\'appel ou cour suprême', 'Session réservée en plusieurs groupes, ou hybride', '2 à 3 jours par groupe', 'Lecture des écritures, préparation des décisions, motivation, publication'],
                ['Parquet', 'Session propre au parquet', '2 jours', 'Flux des procédures, réquisitions écrites, données pénales, parole d\'audience'],
                ['Chefs de juridiction et inspection', 'Séminaire court', '1 journée', 'Règle d\'usage, choix des outils, conservation des requêtes, chiffres de la juridiction'],
                ['École de formation judiciaire (auditeurs de justice, formateurs)', 'Module intégré au cursus ou session de formation de formateurs', '2 à 3 jours', 'Bonnes habitudes dès l\'entrée dans la fonction, cas pratiques réutilisables'],
                ['Juridictions de plusieurs pays', 'À distance, avec partage d\'écran', '6 à 9 séances de 2 heures', 'Une méthode commune malgré des statuts et des outils différents'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation d\'une juridiction, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Le prix est fixé sur devis. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon les règles de paiement de l\'organisme commanditaire. Les outils et leurs licences restent à la charge du ministère ou de la juridiction.',
            'items'      => [
                ['offre' => 'Parcours juridiction complet', 'prix' => 'Sur devis', 'inclus' => ['Six demi-journées sur les outils de la juridiction', 'Carte des usages et règle d\'usage adoptée en fin de parcours', 'Exercices sur décisions publiées et dossiers fictifs', 'Évaluation finale et attestation nominative']],
                ['offre' => 'Séminaire des chefs de juridiction', 'prix' => 'Sur devis', 'inclus' => ['Une journée de décision', 'Questions à poser avant tout déploiement d\'outil', 'Règle d\'usage et contrôle de la relecture', 'Lecture des indicateurs d\'activité']],
                ['offre' => 'Module pour une école de formation judiciaire', 'prix' => 'Sur devis', 'inclus' => ['Séquences pour auditeurs de justice', 'Cas pratiques réutilisables par les formateurs', 'Supports modifiables remis à l\'école', 'Session de formation de formateurs en option']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, et le découpage entre siège, parquet et chefs de juridiction.',
                'Le temps de préparation des dossiers fictifs et des décisions publiées adaptés aux contentieux de la juridiction.',
                'La prise en main d\'un outil précis annoncé par le ministère, quand il faut l\'étudier avant la session.',
                'Le lieu, le déplacement hors de Cotonou ou du Bénin, et le choix du présentiel, de la distance ou de l\'hybride.',
                'La durée du suivi retenu après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment une formation de magistrats se finance-t-elle ?',
            'paragraphes' => [
                'Aucune prise en charge n\'est garantie, et la page n\'en promet aucune. Une juridiction n\'est pas une entreprise : sa formation se finance d\'ordinaire sur le budget du ministère de la Justice, de la juridiction ou de l\'école de formation judiciaire du pays. Les fonds alimentés par les taxes de formation des entreprises, comme le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> en Côte d\'Ivoire, réservent leur plan de formation aux entreprises à jour de ces taxes ; ils ne sont pas la voie normale pour une juridiction.',
                'Les écoles de formation judiciaire d\'Afrique de l\'Ouest ont elles-mêmes inscrit l\'IA à leur agenda. Réunies à Dakar le 27 février 2025 après un atelier de l\'UNESCO et du Centre de formation judiciaire du Sénégal, celles de sept pays ont retenu l\'idée de modules sur l\'IA et l\'État de droit dans leurs cursus et de sessions de formation continue pour les magistrats et les formateurs. En Côte d\'Ivoire, selon les propos de la direction générale de l\'Institut national de formation judiciaire rapportés par l\'Agence ivoirienne de presse le 10 juin 2026, des modules sur l\'intelligence artificielle sont déjà enseignés aux auditeurs de justice.',
                'L\'École régionale supérieure de la magistrature de l\'OHADA, installée à Porto-Novo, a de son côté consacré les 22 et 23 octobre 2025 un colloque international à l\'intelligence artificielle et l\'Afrique, en six panels dont les échanges ont notamment porté sur ses interactions avec le droit et la justice. Ces institutions ont leurs propres programmes ; une intervention extérieure s\'y insère seulement à leur demande, comme module pratique sur les outils, à côté de leurs enseignements de droit et de déontologie.',
                'Richard SALANON ne détient ni la certification Qualiopi, ni l\'agrément d\'un fonds de formation, ni une habilitation d\'école de la magistrature. Le budget se construit donc sans financement extérieur présumé. Le programme, les feuilles de présence, l\'évaluation et les attestations sont fournis dans tous les cas, pour les pièces justificatives que demande le commanditaire public ou un partenaire de coopération.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent les juridictions qui s\'équipent, et comment les éviter ?',
            'intro' => 'Les mêmes faux pas reviennent d\'une juridiction à l\'autre. Aucun n\'est technique : ce sont des erreurs d\'organisation ou de méthode, qui se corrigent par une règle écrite et une habitude.',
            'items' => [
                ['titre' => 'Laisser chacun choisir son outil', 'texte' => 'Sans règle commune, un juge utilise son compte personnel, un autre l\'outil du ministère, un troisième aucun. La juridiction écrit d\'abord ce qui est permis, avec quel outil et pour quelles données, puis forme tout le monde à la même règle.'],
                ['titre' => 'Faire relire par l\'outil ce qu\'on n\'a pas lu', 'texte' => 'Le résumé d\'un mémoire de quatre-vingts pages remplace vite sa lecture. Le guide des juges anglais le rappelle : les juges doivent toujours lire les pièces elles-mêmes. Le résumé sert à retrouver, pas à se dispenser de lire.'],
                ['titre' => 'Croire qu\'un outil interne lève toutes les limites', 'texte' => 'Un assistant hébergé par l\'État protège mieux les données qu\'un service grand public, mais il ne garde pas mieux le secret du délibéré et il invente aussi des références. Les règles de relecture et de contenu interdit restent les mêmes.'],
                ['titre' => 'Ne pas former les assistants et les stagiaires', 'texte' => 'Dans les deux affaires américaines d\'octobre 2025, ce sont des collaborateurs des juges qui avaient utilisé l\'IA. Les assistants de justice, les juristes assistants et les stagiaires suivent la même formation et la même règle que les magistrats.'],
                ['titre' => 'Construire un tableau de bord qui compare les juges', 'texte' => 'Un indicateur nominatif sur le sens des décisions devient vite un instrument de pression. Les chiffres d\'activité servent à organiser la juridiction et à répartir les moyens, comme le recommande la CEPEJ pour ses outils de pilotage, avec la participation des juges à leur conception.'],
                ['titre' => 'Taire l\'usage de l\'outil quand il a pesé', 'texte' => 'La note de la CEPEJ de 2024 demande d\'indiquer quand une analyse ou un contenu a été produit par l\'IA. Ce qui a pesé sur la décision passe par le débat contradictoire ; ce qui a seulement aidé à la mise en forme n\'appelle pas de mention particulière, selon la règle que la juridiction aura fixée.'],
                ['titre' => 'Automatiser sans garder la main', 'texte' => 'La charte de la juridiction administrative française pose un principe de réversibilité : garder la capacité de faire les tâches à la main. Une juridiction qui ne sait plus tenir son rôle sans l\'outil est à la merci de la première panne ou du premier changement de prestataire.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles formations du catalogue choisir selon le besoin de la juridiction ?',
            'legende' => 'Fiches du catalogue qui prolongent cette page. Chacune a son programme, sa durée et sa FAQ ; un parcours de juridiction en combine souvent deux.',
            'entetes' => ['Formation', 'Pour qui dans la juridiction', 'Ce qu\'elle apporte', 'Durée indicative'],
            'lignes'  => [
                ['<a href="/formations/ia-droit-ohada">IA et droit OHADA : recherche, rédaction, veille</a>', 'Magistrats et assistants de justice des juridictions de la zone OHADA', 'La recherche dans les Actes uniformes et la jurisprudence de la CCJA, et le protocole de vérification des références, en profondeur', '2 jours'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Magistrats, greffes et personnels administratifs', 'Les données personnelles, le secret, le droit d\'auteur et les biais, pays par pays', '1 à 2 jours'],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise : charte, données, responsabilités</a>', 'Chefs de juridiction, inspection, direction des services judiciaires', 'La méthode pour tenir l\'inventaire des outils, la charte et les contrôles à l\'échelle d\'un ministère ou d\'une cour', '2 jours'],
                ['<a href="/formations/data-literacy">Décider avec les données (data literacy)</a>', 'Présidents de chambre, chefs de juridiction, parquet', 'Lire les délais, les stocks, les moyennes et les médianes sans se tromper ni faire dire aux chiffres ce qu\'ils ne disent pas', '2 jours'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Tous les personnels de la juridiction', 'Hameçonnage, mots de passe, double authentification, téléphones et clés USB', '1 jour'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos magistrats avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà formé des magistrats et des juges. Il conçoit lui-même des outils d\'IA et les branche sur des logiciels existants : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il peut donc expliquer à une juridiction ce que devient un texte saisi dans un assistant, ce qu\'un outil installé sur un poste change réellement, et pourquoi un modèle produit une référence plausible et fausse. Fort de ' . $ans . ' ans d\'expérience, formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, du Bénin au Tchad et de la France au Canada.',
                'Il n\'est ni magistrat ni juriste, et il le dit dès l\'ouverture de la session : il enseigne les outils, leur organisation dans la juridiction et la méthode de contrôle ; le droit, la déontologie et l\'office du juge restent aux magistrats, à leur hiérarchie et aux instances de la magistrature. Il n\'est certifié par aucun éditeur et ne se présente comme partenaire d\'aucun. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>, et l\'offre complète dans le <a href="/formations/">catalogue des formations</a>, dont le domaine <a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>.',
                'Quand un ministère ou une juridiction veut aller au-delà de la formation, par exemple outiller la gestion du rôle, préparer la pseudonymisation des décisions avant publication ou cadrer un assistant interne qui ne travaille que sur des sources vérifiées, le besoin relève d\'une mission de <a href="/services/digitalisation-d-entreprise">digitalisation</a> ou d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA</a>. La façon dont Richard conduit ses sessions est décrite sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'engager la juridiction dans la formation ?',
            'texte' => 'L\'outil prépare, le magistrat juge : rien du délibéré ni d\'une pièce non publique n\'entre dans un service extérieur, chaque référence d\'une écriture ou d\'un projet se vérifie dans la source, ce qui pèse sur la décision passe par le débat contradictoire, la motivation est écrite par le juge et répond aux parties, aucun outil ne compare les juges entre eux, et toute la juridiction, assistants compris, suit la même règle écrite.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre juridiction à l\'IA sans toucher à l\'indépendance ni au secret du délibéré ?',
            'texte'  => 'Indiquez la juridiction ou l\'institution, le nombre de magistrats à former, la répartition entre siège et parquet, le pays et les outils en place ou annoncés : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation pour ma juridiction'],
        ],
    ],

    'faq' => [
        ['q' => 'Le formateur est-il magistrat ?', 'r' => 'Non. Richard SALANON forme à l\'usage des outils d\'IA, à leur organisation dans la juridiction et à la méthode de contrôle. Il ne tranche aucune question de droit, de procédure ou de déontologie : ce sont les magistrats présents qui disent ce que leur statut et leur pratique autorisent.'],
        ['q' => 'Un juge peut-il utiliser l\'IA pour préparer une décision ?', 'r' => 'Pour la préparer matériellement, oui, sous conditions : chronologie, inventaire des pièces, trame, mise en forme, avec un outil maîtrisé et sans données couvertes par le secret dans un service extérieur. Établir les faits, interpréter et appliquer la règle, motiver et décider restent au juge, comme le rappellent la charte de la CEPEJ et le considérant 61 du règlement européen sur l\'IA.'],
        ['q' => 'Peut-on travailler sur des dossiers réels pendant la formation ?', 'r' => 'Non sur des affaires pendantes. Les exercices utilisent des décisions déjà publiées, des textes officiels et des dossiers fictifs construits avec les magistrats pour ressembler à leur contentieux. Le secret de l\'enquête, de l\'instruction et du délibéré s\'applique aussi pendant la formation.'],
        ['q' => 'Que faire face à des conclusions qui citent des décisions introuvables ?', 'r' => 'Vérifier la référence dans les sources officielles, puis demander à la partie, de façon neutre et par écrit, la source exacte et la vérification faite. Le guide des juges d\'Angleterre et du pays de Galles d\'octobre 2025 recommande aussi de rappeler à la partie qu\'elle répond de ce qu\'elle soumet. Les suites relèvent de la procédure applicable et des règles de la profession concernée.'],
        ['q' => 'Le juge doit-il indiquer qu\'il a utilisé l\'IA ?', 'r' => 'La note de la CEPEJ de février 2024 recommande d\'indiquer quand une analyse ou un contenu a été produit par l\'IA, et le guide des juges anglais estime qu\'un juge n\'a pas, en général, à décrire son travail préparatoire. La formation aide la juridiction à fixer sa propre règle ; dans tous les cas, ce qui pèse sur la décision passe par le débat contradictoire.'],
        ['q' => 'Un outil fourni par le ministère dispense-t-il de ces précautions ?', 'r' => 'Il protège mieux les données qu\'un service grand public, mais il peut se tromper de la même façon et il conserve des requêtes. Rien du délibéré n\'y entre, chaque référence se vérifie, et la juridiction demande par écrit qui peut accéder aux historiques et pendant combien de temps.'],
        ['q' => 'Le parquet est-il concerné de la même façon que le siège ?', 'r' => 'Les règles de secret et de vérification sont les mêmes ; l\'organisation diffère. Les magistrats du parquet respectent les instructions écrites de leur hiérarchie mais leur parole est libre à l\'audience, au Bénin comme au Sénégal. La formation consacre une demi-journée au flux des procédures et aux réquisitions.'],
        ['q' => 'Une juridiction peut-elle mettre un chatbot à la disposition des usagers ?', 'r' => 'La CEPEJ range l\'accès au droit par des chatbots parmi les usages à encourager, à condition de ne pas remplacer une intervention humaine. Un assistant d\'information pratique se conçoit avec soin, car l\'institution répond de ce qu\'il dit ; il ne donne ni consultation ni pronostic sur une affaire.'],
        ['q' => 'Les juridictions africaines sont-elles soumises au règlement européen sur l\'IA ?', 'r' => 'Non. Il s\'applique dans l\'Union européenne, aux systèmes à haut risque de la justice à partir du 2 décembre 2027 selon la Commission. Pour une juridiction de la zone OHADA, il reste un repère utile, comme la charte de la CEPEJ et les lignes directrices de l\'UNESCO, à côté du statut de la magistrature et des règles de procédure du pays.'],
        ['q' => 'Peut-on mesurer l\'activité des juges avec ces outils ?', 'r' => 'On peut mesurer l\'activité de la juridiction : stocks, délais, flux, renvois, pour organiser le travail et répartir les moyens. Comparer le sens des décisions de chaque juge est une autre chose : la CEPEJ le déconseille et la loi française l\'interdit pour les décisions publiées.'],
        ['q' => 'Quelle différence avec la formation IA et droit OHADA ?', 'r' => 'La formation IA et droit OHADA approfondit, pour tous les professionnels du droit de la zone, la recherche dans les Actes uniformes et la jurisprudence de la CCJA et la vérification des références. Cette page décrit un parcours propre à la juridiction : rôle, lecture des écritures, préparation des décisions, délibéré, motivation, parquet et règle d\'usage.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de participants et de groupes, la préparation des dossiers fictifs, l\'étude éventuelle d\'un outil annoncé, le lieu, le format et le suivi retenu. Le premier échange, le cadrage et le devis sont gratuits.'],
    ],

    'sources' => [
        ['titre' => 'CEPEJ, Charte éthique européenne d\'utilisation de l\'intelligence artificielle dans les systèmes judiciaires et leur environnement (3-4 décembre 2018)', 'url' => 'https://rm.coe.int/charte-ethique-fr-pour-publication-4-decembre-2018/16808f699b', 'date' => '2026-10-05'],
        ['titre' => 'CEPEJ, Use of generative AI by judicial professionals in a work-related context, note d\'information du 12 février 2024', 'url' => 'https://rm.coe.int/cepej-gt-cyberjust-2023-5final-en-note-on-generative-ai/1680ae8e01', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, service d\'assistance sur le règlement sur l\'IA : annexe III, point 8', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/annex-3', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, service d\'assistance sur le règlement sur l\'IA : considérant 61', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/recital-61', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, service d\'assistance sur le règlement sur l\'IA : article 26 (obligations des déployeurs)', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-26', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, service d\'assistance sur le règlement sur l\'IA : article 86 (droit à l\'explication)', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-86', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, cadre réglementaire de l\'IA : calendrier d\'application (mise à jour du 3 août 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4, mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2001-35 du 21 février 2003 portant statut de la magistrature (articles 4, 5, 7 et 9)', 'url' => 'https://sgg.gouv.bj/doc/loi-2001-35/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2019-12 du 25 février 2019 modifiant la loi portant statut de la magistrature', 'url' => 'https://sgg.gouv.bj/doc/loi-2019-12/', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice du Sénégal, loi organique n° 2017-10 du 17 janvier 2017 portant statut des magistrats (articles 7, 9 et 16)', 'url' => 'https://justice.sec.gouv.sn/wp-content/uploads/2020/11/Loi-2017-10-portant-Statut-des-magistrats.pdf', 'date' => '2026-10-05'],
        ['titre' => 'UNIDA, OHADA.com : règlement de procédure de la Cour commune de justice et d\'arbitrage du 18 avril 1996 (articles 35 et 39)', 'url' => 'https://www.ohada.com/uploads/actualite/1200/reglement-procedure-ccja.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Journal officiel de l\'OHADA (numéro spécial du 4 février 2014), règlement n° 01/2014/CM/OHADA modifiant le règlement de procédure de la CCJA (articles 3, 22, 27 bis et 40)', 'url' => 'https://justice.sec.gouv.sn/wp-content/uploads/textes-reglements/OHADA/CCJA-reglement-procedure-modifie-30012014-jo.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Conseil constitutionnel, décision n° 2019-778 DC du 21 mars 2019 (article 33 de la loi de programmation 2018-2022 et de réforme pour la justice)', 'url' => 'https://www.conseil-constitutionnel.fr/decision/2019/2019778DC.htm', 'date' => '2026-10-05'],
        ['titre' => 'Conseil d\'État, charte d\'utilisation de l\'intelligence artificielle au sein de la juridiction administrative (11 décembre 2025)', 'url' => 'https://www.conseil-etat.fr/qui-sommes-nous/deontologie/charte-d-utilisation-de-l-intelligence-artificielle-au-sein-de-la-juridiction-administrative', 'date' => '2026-10-05'],
        ['titre' => 'Cour de cassation, remise du rapport « Cour de cassation et intelligence artificielle : préparer la Cour de demain » (28 avril 2025)', 'url' => 'https://www.courdecassation.fr/toutes-les-actualites/2025/04/29/intelligence-artificielle-remise-du-rapport-sur-lia', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice (France), le ministère déploie son outil d\'IA générative interne (communiqué du 12 mai 2026)', 'url' => 'https://www.justice.gouv.fr/actualites/espace-presse/intelligence-artificielle-ministere-justice-deploie-son-outil-dia-generative-interne', 'date' => '2026-10-05'],
        ['titre' => 'Courts and Tribunals Judiciary, Artificial Intelligence (AI) Guidance for Judicial Office Holders (31 octobre 2025)', 'url' => 'https://www.judiciary.uk/wp-content/uploads/2025/10/Artificial-Intelligence-AI-Guidance-for-Judicial-Office-Holders-2.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Commission judiciaire du Sénat des États-Unis, réponses des juges Wingate et Neals sur l\'usage de l\'IA (communiqué du 23 octobre 2025)', 'url' => 'https://www.judiciary.senate.gov/press/rep/releases/grassley-releases-judges-responses-owning-up-to-ai-use-calls-for-continued-oversight-and-regulation', 'date' => '2026-10-05'],
        ['titre' => 'UNESCO, Guidelines for the use of AI systems in courts and tribunals (3 décembre 2025)', 'url' => 'https://www.unesco.org/en/articles/guidelines-use-ai-systems-courts-and-tribunals', 'date' => '2026-10-05'],
        ['titre' => 'UNESCO, vers une concertation des écoles de formation judiciaire face aux enjeux de l\'intelligence artificielle (10 mars 2025)', 'url' => 'https://www.unesco.org/fr/articles/vers-une-concertation-des-ecoles-de-formation-judiciaire-face-aux-enjeux-de-lintelligence', 'date' => '2026-10-05'],
        ['titre' => 'Agence ivoirienne de presse, l\'INFJ adapte la formation des magistrats aux défis du numérique et de la sécurité (10 juin 2026)', 'url' => 'https://www.aip.ci/cote-divoire-aip-linfj-adapte-la-formation-des-magistrats-aux-defis-du-numerique-et-de-la-securite/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, catalogue 2026 de l\'École régionale supérieure de la magistrature (colloque des 22 et 23 octobre 2025 sur l\'IA et l\'Afrique)', 'url' => 'https://www.ohada.org/wp-content/uploads/2026/02/Catalogue_ERSUMA-2026-vf.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice et de la Législation du Bénin, portail des services de la Justice', 'url' => 'https://eservices.justice.bj/', 'date' => '2026-10-05'],
        ['titre' => 'Ministère du Numérique et de la Digitalisation du Bénin, e-justice : le Gouvernement donne ses orientations (25 avril 2022)', 'url' => 'https://innovation.gouv.bj/publications/actualites/e-justice-le-gouvernement-donne-ses-orientations-pour-la-mise-en-oeuvre-du-projet', 'date' => '2026-10-05'],
        ['titre' => 'Tribunal de commerce d\'Abidjan, plateforme e-TribCom de gestion électronique', 'url' => 'https://etribcomweb.tcabidjan.ci/', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice et des Droits de l\'Homme de Côte d\'Ivoire, plateforme e-justice.ci', 'url' => 'https://e-justice.ci/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-droit-ohada', 'ia-ethique-conformite', 'gouvernance-ia', 'data-literacy', 'cybersecurite-employes'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise', 'digitalisation-d-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
