<?php
// ============================================================
// data/formations/ia-droit-ohada.php · Fiche formation « IA et droit OHADA :
// recherche, rédaction, veille » (vague 1B, lot A, domaine
// ia-systemes-existants). Angle propre : avocats, juristes d'entreprise,
// notaires, magistrats et greffiers de la zone OHADA ; recherche dans les
// Actes uniformes et la jurisprudence de la CCJA, rédaction d'actes et de
// consultations, veille, secret professionnel, vérification des références.
// Sœurs non traitées : ia-ethique-conformite (lois de données pays par pays,
// gestes de chaque salarié), gouvernance-ia (charte, inventaire, rôles),
// ia-comptables-syscohada (AUDCIF). Aucune ancienne page.
// Faits externes lus le 05/10/2026 : ohada.org (présentation générale, texte
// du traité, articles 2, 10, 14, 20 et 31 ; liste des Actes uniformes ;
// chronologie ; recueil n° 36), biblio.ohada.org, ohada.com (UNIDA), Juricaf
// et AHJUCAF (CCJA, 13 juges), décision Mata v. Avianca (S.D.N.Y., 22 juin
// 2023), jugement Ayinde (High Court, 6 juin 2025), Stanford HAI (23 mai
// 2024), code de déontologie des avocats de l'espace UEMOA (5 juillet 2019),
// guide du CNB (septembre 2024), guide du CCBE (2 octobre 2025), Légifrance
// (article 66-5 de la loi n° 71-1130), CNB (formation continue), loi
// béninoise n° 2017-20 (article 395), annexe III du règlement sur l'IA,
// Commission européenne (calendrier), tarifs OpenAI et Anthropic, FDFP, 3FPT,
// FODEFCA. Le domaine juriscope.org héberge le 05/10/2026 un site sans
// rapport avec le droit africain : aucune donnée n'en est reprise.
// Richard n'est pas juriste : la page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA et droit OHADA : chercher dans les Actes uniformes et la jurisprudence de la CCJA, rédiger actes et consultations, organiser sa veille, en vérifiant chaque référence et en protégeant le secret professionnel',
    'title'   => 'Formation IA et droit OHADA pour juristes | Richard SALANON',
    'meta'    => 'Formation IA pour avocats, juristes, notaires et magistrats en zone OHADA : recherche, rédaction, veille, vérification des références et secret. Sur devis.',
    'en_bref' => 'Cette formation apprend aux avocats, juristes d\'entreprise, notaires, magistrats et greffiers de la zone OHADA à se servir d\'un assistant d\'intelligence artificielle pour chercher dans les Actes uniformes et la jurisprudence de la CCJA, préparer des actes et des consultations et tenir une veille, sans jamais citer une référence qu\'ils n\'ont pas lue dans une source officielle ni confier à l\'outil ce que couvre le secret. Elle enseigne l\'usage des outils ; le contenu juridique reste celui des professionnels présents. Elle dure deux jours, en quatre demi-journées, en intra, en inter, à distance ou en formule hybride. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'ia-systemes-existants',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : comment un assistant produit une réponse juridique, et pourquoi il invente des arrêts',
            'duree'  => '3 h 30',
            'points' => [
                'Démonstration en direct : la même question sur un article d\'un Acte uniforme posée à deux assistants, puis comparaison des réponses avec le texte officiel ouvert à l\'écran.',
                'Le mécanisme de prédiction du mot suivant, et la raison pour laquelle un numéro d\'arrêt plausible n\'est pas un numéro d\'arrêt réel.',
                'Les trois pièges propres au droit OHADA : peu de textes africains dans les données d\'entraînement, confusion entre droit français et droit uniforme, versions abrogées encore très présentes en ligne.',
                'Assistant généraliste, assistant branché sur des documents fournis, base juridique interrogée par mots-clés : ce que chacun sait faire et ce qu\'il ne garantit pas.',
                'Ce qui ne doit jamais entrer dans un outil en ligne : nom du client, pièces du dossier, stratégie, éléments d\'une procédure pénale.',
                'Exercice d\'ouverture : chaque participant soumet une question de sa pratique et relève, seul, ce qui est exact, inexact ou invérifiable dans la réponse.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : rechercher dans les Actes uniformes et la jurisprudence de la CCJA',
            'duree'  => '3 h 30',
            'points' => [
                'Carte des sources : texte du traité et Actes uniformes sur le site de l\'OHADA, Journal officiel et arrêts dans la bibliothèque numérique, base OHADATA de l\'UNIDA, Juricaf, recueils de la CCJA.',
                'Se servir de l\'IA pour formuler la recherche (mots-clés, notions voisines, articles probablement concernés), puis chercher soi-même dans les bases.',
                'Retrouver un arrêt à partir d\'une référence incomplète, contrôler sa date, sa formation, son dispositif et l\'Acte uniforme appliqué.',
                'Vérifier la version d\'un texte : Acte uniforme en vigueur, date d\'adoption, texte remplacé ; le cas de l\'arbitrage, réglé par un Acte de 1999 puis par celui de 2017.',
                'Faire résumer par l\'assistant un arrêt que l\'on a soi-même téléchargé, puis confronter le résumé aux motifs.',
                'Exercice : trois questions de droit des affaires, traitées de la recherche jusqu\'à la fiche de références vérifiées.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : rédiger actes, consultations et écritures avec l\'IA, sous contrôle',
            'duree'  => '3 h 30',
            'points' => [
                'Préparer un dossier pseudonymisé : parties remplacées par des lettres, montants arrondis, lieux élargis, détails reconnaissables supprimés.',
                'Faire produire un plan de consultation, une première version de clause ou un tableau chronologique des faits, à partir de consignes précises.',
                'Comparer deux versions d\'un contrat ou de statuts et faire lister les différences, puis vérifier chacune.',
                'Relire des conclusions adverses avec l\'assistant : arguments, pièces invoquées, références à contrôler en priorité.',
                'La règle de la note de traçabilité : outil utilisé, consigne, sources vérifiées, auteur de la relecture, jointe au dossier interne.',
                'Exercice : une consultation courte et une clause rédigées en binôme, puis relues par un autre binôme qui contrôle chaque référence.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : organiser sa veille, fixer ses règles d\'usage et évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Construire une veille : sources officielles suivies, fréquence, fiche de lecture type, résumé assisté puis relu, diffusion dans l\'équipe.',
                'Ce que disent les règles de la profession : code de déontologie des avocats de l\'espace UEMOA, guides du CNB et du CCBE, décisions de justice sur les citations inventées.',
                'Magistrats et greffiers : ce qui relève de l\'aide matérielle (chronologie, inventaire de pièces, mise en forme) et ce qui reste à la personne qui juge.',
                'Rédaction par chaque cabinet, étude ou service de ses règles d\'usage en une page, à soumettre ensuite à sa direction ou à son bâtonnier selon le cas.',
                'Évaluation : un mini-dossier inédit traité seul, de la question de droit à la note de références vérifiées, avec une erreur volontairement glissée dans une réponse d\'assistant.',
                'Remise du protocole de vérification, de la bibliothèque de consignes juridiques et du modèle de note de traçabilité.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées'],
        ['l' => 'Public', 'v' => 'Avocats, juristes d\'entreprise, notaires, magistrats et greffiers de la zone OHADA'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 8 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et que laisse-t-elle aux professionnels du droit ?',
            'paragraphes' => [
                'Un juriste qui ouvre un assistant d\'IA obtient en quelques secondes une réponse bien rédigée, avec des articles et des arrêts à l\'appui. Le problème tient en une phrase : rien dans la forme de cette réponse ne distingue une référence réelle d\'une référence inventée. En droit OHADA, où les textes ont été révisés et où la jurisprudence de la CCJA est moins présente en ligne que celle des cours françaises, le risque est plus élevé qu\'ailleurs. Cette formation part de là : l\'outil aide à chercher, à structurer et à rédiger ; le professionnel vérifie chaque référence dans une source officielle et garde la responsabilité de ce qu\'il signe.',
                'À la fin des deux jours, chaque participant sait, seul : expliquer pourquoi un assistant invente des décisions ; formuler une recherche avec l\'IA puis la mener dans les bases officielles ; retrouver et lire un arrêt de la CCJA à partir d\'une référence incomplète ; contrôler qu\'un Acte uniforme cité est bien la version en vigueur ; pseudonymiser un dossier avant de le soumettre ; produire un premier jet de consultation ou de clause et le relire ligne par ligne ; tenir une note de traçabilité ; organiser une veille hebdomadaire. L\'évaluation finale vérifie ces gestes sur un dossier que personne n\'a vu pendant la session.',
                'La formation n\'enseigne pas le droit. Richard SALANON n\'est ni avocat, ni notaire, ni magistrat : il forme à l\'usage des outils et à la méthode de vérification. Les questions de fond, la qualification des faits et le choix des arguments appartiennent aux participants, et ce sont eux qui disent, pendant les exercices, si une réponse est juridiquement juste. Les règles valables pour tous les salariés sur les données personnelles et le droit d\'auteur relèvent de la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> ; la charte et la répartition des rôles dans l\'organisation, de la formation <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>.',
                'Elle ne promet aucun gain de temps chiffré, ni aucune conformité garantie à une règle de déontologie. Ce que vaut un usage de l\'IA dans un cabinet ou une juridiction dépend de la discipline de vérification, des outils choisis et des consignes de l\'ordre ou de la hiérarchie dont relèvent les participants. Elle ne remplace pas non plus les abonnements aux bases juridiques payantes, quand le cabinet en dispose : elle apprend au contraire à les utiliser comme instance de contrôle, au même titre que les sources officielles gratuites.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quel niveau et quel matériel ?',
            'intro' => 'La formation vise les personnes qui cherchent, rédigent ou appliquent le droit des affaires dans un État membre de l\'OHADA, ou depuis l\'Europe pour des clients de la zone. Aucune compétence technique n\'est demandée ; la pratique du droit, si.',
            'items' => [
                ['titre' => 'Avocats et collaborateurs de cabinet', 'texte' => 'Recherche de jurisprudence, consultations, conclusions, actes de procédure : ce sont les usages les plus exposés aux références inventées, et ceux où le secret professionnel pèse le plus. Les associés qui relisent le travail des collaborateurs y trouvent la méthode de contrôle à imposer.'],
                ['titre' => 'Juristes d\'entreprise', 'texte' => 'Contrats, gouvernance des sociétés, recouvrement, veille réglementaire pour la direction : le juriste interne travaille souvent seul, sans base payante, et gagne beaucoup à une méthode de recherche dans les sources gratuites de l\'OHADA.'],
                ['titre' => 'Notaires et clercs', 'texte' => 'Statuts de sociétés, cessions de parts, actes de sûretés : l\'IA aide à comparer des versions et à préparer des trames, mais l\'acte authentique engage le notaire. Les exercices portent sur des trames anonymes, jamais sur un acte en cours.'],
                ['titre' => 'Magistrats, greffiers et assistants de justice', 'texte' => 'Chronologies, inventaires de pièces, recherche de textes, mise en forme : la formation distingue l\'aide matérielle de ce qui relève de la décision. Une session réservée aux juridictions peut être organisée, sur des décisions publiées uniquement.'],
                ['titre' => 'Le niveau attendu', 'texte' => 'Connaître les Actes uniformes de sa matière et savoir lire un arrêt. Avoir déjà ouvert un assistant d\'IA aide, sans être indispensable : la première demi-journée reprend les bases de l\'outil avant d\'aborder la recherche.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur portable par participant, un navigateur à jour, un accès aux bases gratuites de l\'OHADA et, s\'il existe, le compte professionnel d\'assistant du cabinet ou du service. Les textes et les arrêts des exercices sont aussi remis en fichiers, pour travailler quand la connexion faiblit.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels exercices fait-on, et quelle vérification accompagne chacun ?',
            'legende' => 'Exercices construits sur des textes et des décisions publiés, ou sur des dossiers pseudonymisés fournis par le commanditaire. La dernière colonne décrit le contrôle que le participant apprend à faire avant que le résultat serve.',
            'entetes' => ['Tâche', 'Ce que l\'IA prépare', 'Ce que le professionnel vérifie', 'Source de contrôle'],
            'lignes'  => [
                ['Question de recouvrement ou de voies d\'exécution', 'Liste des notions et des articles probablement concernés, mots-clés de recherche', 'Chaque article lu dans l\'Acte uniforme en vigueur, aucun numéro repris sans lecture', 'Site de l\'OHADA, bibliothèque numérique'],
                ['Recherche de jurisprudence de la CCJA', 'Pistes de recherche, résumé d\'un arrêt téléchargé par le participant', 'Existence de l\'arrêt, numéro, date, dispositif, motifs qui disent vraiment ce qu\'on leur prête', 'Bibliothèque numérique de l\'OHADA, base OHADATA, Juricaf'],
                ['Consultation courte', 'Plan, premier jet des parties descriptives, reformulation', 'Qualification des faits, raisonnement, références, conclusion : tout est réécrit ou validé par le juriste', 'Textes et arrêts vérifiés, relecture par un second participant'],
                ['Clause ou statuts de société', 'Trame de clause, comparaison de deux versions, liste des différences', 'Conformité à l\'Acte uniforme applicable, équilibre entre les parties, cohérence avec le reste de l\'acte', 'Texte de l\'Acte uniforme, modèle interne du cabinet ou de l\'étude'],
                ['Lecture des conclusions adverses', 'Inventaire des arguments, des pièces et des références invoquées', 'Chaque référence adverse contrôlée : une citation inventée chez l\'adversaire est un argument en défense', 'Bases officielles, pièces communiquées'],
                ['Préparation d\'un dossier pour l\'audience', 'Chronologie des faits, inventaire des pièces, tableau des prétentions', 'Exactitude des dates et des pièces, aucune appréciation laissée à l\'outil', 'Pièces du dossier, consultées hors de l\'outil'],
                ['Veille', 'Résumé des nouveaux textes et décisions publiés dans la période', 'Lecture du texte source avant toute diffusion, date de publication notée', 'Journal officiel de l\'OHADA, recueils et bases'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Où chercher le droit OHADA, et que vaut chaque source pour vérifier une réponse d\'IA ?',
            'legende' => 'Sources consultées le 5 octobre 2026. Les chiffres sont ceux qu\'affichent les sites à cette date. En formation, chaque participant ouvre lui-même ces bases et y retrouve les références d\'un exercice.',
            'entetes' => ['Source', 'Ce qu\'on y trouve', 'Accès', 'Usage en vérification'],
            'lignes'  => [
                ['<a href="https://www.ohada.org/actes-uniformes/">Site de l\'OHADA</a>', 'Texte du traité, liste des dix Actes uniformes avec leur date d\'adoption, présentation de chaque acte', 'Gratuit', 'Point de départ pour savoir quel Acte uniforme est en vigueur et depuis quand'],
                ['<a href="https://biblio.ohada.org/">Bibliothèque numérique de l\'OHADA</a>', 'Actes uniformes et règlements, Journal officiel de l\'OHADA, arrêts, ordonnances et avis, doctrine', 'Consultation possible sans compte, interface en français, anglais, portugais et espagnol', 'Contrôle du texte publié au Journal officiel et lecture des décisions de la CCJA'],
                ['Recueils de jurisprudence de la CCJA', 'Toutes les décisions rendues par la Cour pendant une période ; le n° 36, publié le 7 février 2021, couvre le mois d\'avril 2020', 'Vendus en ligne depuis le n° 27, selon le site de l\'OHADA', 'Source de référence pour une décision, mais avec un décalage de publication à connaître'],
                ['<a href="https://www.ohada.com/documentation/jurisprudence.html">Base OHADATA de l\'UNIDA</a>', '4 129 décisions de la CCJA et des juridictions nationales, référencées sous la forme OHADATA J-xx-xx', 'Site associatif ; consultation en ligne, compte proposé', 'Retrouver une décision nationale ou un commentaire, puis remonter à l\'arrêt lui-même'],
                ['<a href="https://juricaf.org/">Juricaf</a>', '1 956 159 décisions de 48 pays et institutions francophones, dont la CCJA, selon l\'AHJUCAF', 'Recherche libre', 'Vérifier l\'existence d\'un arrêt de cour suprême ou de la CCJA, et le comparer avec la jurisprudence d\'autres pays'],
                ['Bases payantes des éditeurs et Journaux officiels nationaux', 'Codes, revues, jurisprudence commentée, textes nationaux non harmonisés', 'Abonnement ou publication officielle de chaque État', 'Contrôle des matières hors OHADA : droit pénal, droit de la famille, procédure nationale'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi un assistant d\'IA invente-t-il des arrêts, et pourquoi le droit OHADA y est-il plus exposé ?',
            'paragraphes' => [
                'Un assistant conversationnel ne consulte pas une base de jurisprudence : il produit, mot après mot, la suite la plus probable d\'un texte. Quand on lui demande un arrêt, il sait à quoi ressemble une référence de la CCJA, avec son numéro, son année et la mention de la Cour, et il peut en fabriquer une parfaitement plausible. Certains outils consultent le web ou des documents fournis, ce qui réduit le risque sans le supprimer : la réponse peut citer une vraie page et lui faire dire autre chose que ce qu\'elle contient.',
                'Le droit OHADA cumule trois handicaps. Il pèse peu dans les textes publics sur lesquels les modèles ont appris, face au droit français qui partage son vocabulaire : un assistant glisse donc facilement un article du code civil ou du code de commerce français dans une réponse sur un Acte uniforme. Ensuite, les textes ont été réécrits : selon la chronologie publiée par l\'OHADA, l\'Acte uniforme relatif au droit de l\'arbitrage date du 11 mars 1999, et celui en vigueur, présenté sur la page des Actes uniformes, a été adopté le 23 novembre 2017. Les commentaires de l\'ancien texte restent nombreux en ligne.',
                'Enfin, même les pages officielles demandent une lecture attentive. Le 5 octobre 2026, la page du site de l\'OHADA consacrée au traité reproduisait un article 31 selon lequel la Cour compte sept juges ; la page de l\'AHJUCAF consacrée à la CCJA indique qu\'elle en compte treize depuis 2014, après un passage à neuf en 2008. Un assistant qui a lu l\'une et pas l\'autre répondra avec assurance, dans un sens ou dans l\'autre. La formation en tire une règle : on ne s\'arrête jamais à la première source, on cherche la version en vigueur et sa date.',
                'Les outils spécialisés ne sont pas à l\'abri. Une étude du RegLab et de l\'institut HAI de l\'université Stanford, publiée le 23 mai 2024, a soumis plus de 200 questions juridiques à des outils de recherche juridique dotés d\'IA : deux d\'entre eux ont produit une information inexacte dans plus de 17 % des cas, un troisième dans plus de 34 %. Ces outils portaient sur le droit américain ; aucune mesure équivalente n\'a été publiée pour le droit OHADA, et rien ne permet de supposer qu\'elle serait plus favorable.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres situent le droit OHADA et le risque d\'erreur des outils ?',
            'items' => [
                ['valeur' => '17', 'libelle' => 'États membres de l\'OHADA, du Bénin au Togo, avec un Secrétariat permanent à Yaoundé, la CCJA à Abidjan et l\'école de formation judiciaire (ERSUMA) à Porto-Novo (page consultée le 5 octobre 2026)', 'source' => 'OHADA, présentation générale', 'url' => 'https://www.ohada.org/en/general-overview/'],
                ['valeur' => '10', 'libelle' => 'Actes uniformes présentés sur le site de l\'OHADA, du droit commercial général à la médiation (page consultée le 5 octobre 2026)', 'source' => 'OHADA, Actes uniformes', 'url' => 'https://www.ohada.org/actes-uniformes/'],
                ['valeur' => '13 juges', 'libelle' => 'Composition de la CCJA depuis 2014, élus pour un mandat de sept ans non renouvelable (page consultée le 5 octobre 2026)', 'source' => 'AHJUCAF, fiche de la Cour commune de justice et d\'arbitrage', 'url' => 'https://www.ahjucaf.org/ohada-cour-commune'],
                ['valeur' => 'Plus de 17 %', 'libelle' => 'Part des réponses inexactes de deux outils de recherche juridique dotés d\'IA, sur plus de 200 questions ; plus de 34 % pour un troisième (étude publiée le 23 mai 2024)', 'source' => 'Stanford HAI et RegLab', 'url' => 'https://hai.stanford.edu/news/ai-trial-legal-models-hallucinate-1-out-6-or-more-benchmarking-queries'],
                ['valeur' => '5 000 dollars', 'libelle' => 'Pénalité prononcée le 22 juin 2023 par un tribunal fédéral de New York contre deux avocats et leur cabinet, pour des décisions inexistantes produites par ChatGPT', 'source' => 'Opinion and Order on Sanctions, Mata v. Avianca', 'url' => 'https://www.nhd.uscourts.gov/sites/default/files/pdf/Mata-v-Avianca-sanctions-order.PDF'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment vérifier une référence avant de la citer ?',
            'items' => [
                ['titre' => 'Exiger la référence complète', 'duree' => 'Une minute', 'texte' => 'Une réponse qui évoque « la jurisprudence constante de la CCJA » sans numéro ni date ne vaut rien. On demande à l\'outil le numéro, la date, la formation et l\'Acte uniforme appliqué, en sachant que ces éléments peuvent eux-mêmes être faux.'],
                ['titre' => 'Retrouver le texte dans une source officielle', 'duree' => 'Quelques minutes', 'texte' => 'L\'article se lit dans l\'Acte uniforme publié par l\'OHADA, l\'arrêt dans la bibliothèque numérique, un recueil ou une base reconnue. Si la décision est introuvable après une recherche sérieuse, elle n\'est pas citée, quelle que soit l\'assurance de l\'outil.'],
                ['titre' => 'Lire la décision, pas son résumé', 'duree' => 'Le temps de la lecture', 'texte' => 'On vérifie que les motifs disent ce qu\'on leur prête, que le dispositif va dans le sens attendu et que l\'arrêt n\'a pas été rendu sur un texte depuis remplacé. Un vrai arrêt mal résumé est aussi dangereux qu\'un arrêt inventé.'],
                ['titre' => 'Contrôler la version et la date', 'duree' => 'Quelques minutes', 'texte' => 'Date d\'adoption de l\'Acte uniforme, date d\'entrée en vigueur, texte remplacé, éventuel avis de la CCJA sur l\'interprétation. Pour une matière nationale, on vérifie aussi la dernière loi publiée au Journal officiel de l\'État.'],
                ['titre' => 'Noter la trace', 'duree' => 'Une minute', 'texte' => 'Dans la note de traçabilité du dossier : la source consultée, sa date de consultation, et la mention de ce qui a été produit avec un outil d\'IA. Six mois plus tard, n\'importe quel associé ou greffier doit pouvoir refaire le chemin.'],
                ['titre' => 'Faire relire avant l\'envoi', 'duree' => 'Selon l\'acte', 'texte' => 'Pour une écriture déposée, un acte signé ou une consultation remise au client, une seconde personne contrôle les références par sondage, en commençant par les plus décisives pour le raisonnement.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que disent les tribunaux des citations inventées par l\'IA ?',
            'paragraphes' => [
                'La décision fondatrice est américaine. Le 22 juin 2023, le juge P. Kevin Castel, du tribunal fédéral du district sud de New York, a rendu dans l\'affaire Mata v. Avianca une décision de sanctions contre deux avocats et leur cabinet. Ils avaient déposé un mémoire citant des décisions inexistantes, avec de fausses citations, produites par ChatGPT, puis avaient continué à les défendre après que l\'adversaire et le tribunal en eurent mis en doute l\'existence. Le juge a prononcé une pénalité de 5 000 dollars et ordonné l\'envoi d\'une lettre au client et à chacun des juges présentés à tort comme auteurs des décisions inventées.',
                'Le même juge écrit qu\'il n\'y a rien d\'intrinsèquement fautif à se faire aider par un outil d\'IA fiable, mais que les règles existantes confient aux avocats un rôle de gardien de l\'exactitude de leurs écritures. C\'est le cœur de la formation : l\'outil n\'est pas interdit, le contrôle est obligatoire. Ce qui a aggravé la sanction, selon la décision, n\'est pas seulement l\'erreur initiale, mais le refus de la reconnaître quand elle a été signalée.',
                'En Angleterre, la Divisional Court de la High Court a statué le 6 juin 2025 sur deux affaires réunies, Ayinde et Al-Haroun. Dans la première, une avocate avait cité cinq décisions inventées ; un juge avait déjà condamné l\'avocate et le centre juridique qui l\'employait à verser chacun 2 000 livres à l\'adversaire. La Cour rappelle que les assistants grand public ne sont pas capables de mener une recherche juridique fiable, que ceux qui s\'en servent ont le devoir professionnel de vérifier par des sources faisant autorité, et elle énumère ses pouvoirs : admonestation publique, condamnation aux frais, saisine de l\'autorité disciplinaire, poursuites pour outrage, jusqu\'au signalement à la police. Elle a saisi l\'autorité de régulation des solicitors.',
                'Aucune décision de ce type rendue par la CCJA ou par une juridiction d\'un État membre de l\'OHADA n\'a été trouvée dans les bases consultées le 5 octobre 2026. Ce n\'est pas une protection : les règles de loyauté envers les juridictions existent dans la zone, comme on le verra plus bas, et un juge qui ne retrouve pas un arrêt cité le fera savoir. La formation fait lire aux participants des extraits de ces deux décisions, parce qu\'elles décrivent avec précision l\'enchaînement des négligences à éviter.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles règles professionnelles encadrent l\'usage de l\'IA par les juristes ?',
            'legende' => 'Textes et guides lus le 5 octobre 2026 dans leur version officielle. Ils ne remplacent pas les règles de chaque barreau, chambre ou juridiction, que les participants apportent et qui priment pour eux.',
            'entetes' => ['Texte', 'Ce qu\'il dit', 'Conséquence pour l\'usage d\'un assistant'],
            'lignes'  => [
                ['Code de déontologie des avocats de l\'espace UEMOA, adopté à Abidjan le 5 juillet 2019 par la Conférence des barreaux, articles 5 et 8', 'L\'avocat est tenu au strict respect du secret professionnel ; il fait preuve de compétence, de diligence et de prudence, et assume la responsabilité de la mission confiée', 'Aucune pièce couverte par le secret dans un outil non maîtrisé ; la réponse de l\'outil reste sous la responsabilité de l\'avocat qui l\'utilise'],
                ['Même code, article 11', 'L\'avocat rédacteur d\'un acte juridique en assure la validité', 'Une clause préparée avec l\'IA est vérifiée comme si l\'avocat l\'avait écrite seul, ce qu\'il fait en la signant'],
                ['Même code, articles 18 et 29', 'L\'avocat se conforme aux exigences du procès équitable et se comporte loyalement ; il fait preuve de courtoisie et de respect envers les juridictions', 'Déposer une référence inventée trompe le juge et l\'adversaire, même sans intention'],
                ['Guide pratique du Conseil national des barreaux, septembre 2024', 'Ne jamais communiquer à une IA générative des données relatives aux dossiers ou aux clients ; pseudonymiser ; vérifier la véracité de tout contenu généré', 'Méthode de pseudonymisation enseignée, avec ses limites : le croisement des montants, des noms de projets ou du style d\'un contrat peut suffire à identifier un client'],
                ['Guide du CCBE sur l\'IA générative, 2 octobre 2025', 'Le devoir de compétence inclut la connaissance de l\'outil ; transparence envers le client ; vigilance sur l\'indépendance face à des réponses complaisantes', 'Informer le client quand il pourrait s\'opposer à l\'usage de l\'outil ; se méfier d\'un assistant qui conforte la thèse qu\'on lui soumet'],
                ['Loi française n° 71-1130 du 31 décembre 1971, article 66-5', 'Consultations, correspondances, notes d\'entretien et toutes les pièces du dossier sont couvertes par le secret professionnel', 'Pour un cabinet en France qui conseille des clients de la zone OHADA, le secret couvre tout le dossier, pas seulement le nom du client'],
                ['Règlement européen sur l\'IA, annexe III, point 8 a)', 'Classe à haut risque les systèmes destinés à aider une autorité judiciaire à rechercher et interpréter les faits et le droit et à les appliquer', 'Dans l\'Union européenne, régime applicable à partir du 2 décembre 2027 selon la Commission ; pour les juridictions de la zone OHADA, un repère utile sur la place de l\'outil'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment protéger le secret professionnel quand on travaille avec un assistant ?',
            'paragraphes' => [
                'La règle de départ est simple : un dossier n\'entre pas tel quel dans un assistant en ligne. Ni le nom du client, ni les pièces, ni la stratégie, ni ce qu\'il a confié en rendez-vous. Ce qui peut y entrer, c\'est une question de droit formulée de façon abstraite, un texte public, une décision publiée, ou un extrait de dossier dont on a retiré tout ce qui permet de reconnaître les personnes et l\'affaire. La formation consacre un atelier entier à cette préparation, parce qu\'une pseudonymisation mal faite donne une fausse sécurité.',
                'Le guide du Conseil national des barreaux le dit précisément : remplacer les noms par des lettres ne suffit pas quand le montant d\'un litige, le nom de code d\'un projet ou la manière de rédiger un contrat permettent de remonter au client. Dans une place comme Cotonou, Lomé ou Libreville, où les affaires importantes se comptent, une seule combinaison de faits identifie souvent une société. Les participants apprennent à arrondir, à élargir, à supprimer, puis à se poser la question qui compte : un confrère de la même ville reconnaîtrait-il le dossier ?',
                'Les données pénales demandent une prudence particulière. Au Bénin, l\'article 395 de la loi n° 2017-20 portant code du numérique réserve le traitement des données relatives aux infractions, aux condamnations pénales et aux mesures de sûreté à certaines personnes, dont les juridictions et les auxiliaires de justice, notamment les avocats, pour les stricts besoins de leurs missions et dans la mesure où la défense de leurs clients l\'exige ; ces personnes sont soumises au secret professionnel. Envoyer un dossier pénal à un service étranger n\'entre manifestement pas dans ces besoins.',
                'Trois environnements de travail sont comparés en séance. Le compte personnel gratuit est exclu pour tout ce qui touche à un dossier. L\'offre professionnelle souscrite par le cabinet ou le service, dont l\'éditeur s\'engage par contrat à ne pas entraîner ses modèles sur les contenus, convient aux textes publics et aux extraits pseudonymisés. Le modèle installé sur un poste du cabinet, sans envoi de données à l\'extérieur, est la seule option pour les rares tâches qui exigent de travailler sur le dossier réel ; il est moins performant, et ses réponses se vérifient de la même façon.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Peut-on citer un arrêt trouvé par l\'IA sans l\'avoir lu ?',
            'texte' => 'Non, jamais, même quand l\'outil affiche un lien. Une référence qui n\'a pas été ouverte et lue dans une source officielle ne figure ni dans une consultation, ni dans des conclusions, ni dans un projet de décision. La décision Mata v. Avianca montre ce que coûte l\'oubli de cette règle, et surtout ce que coûte le fait de persister quand l\'adversaire signale qu\'il ne trouve pas l\'arrêt. Si une référence se révèle fausse après le dépôt, on le dit tout de suite à la juridiction et à l\'adversaire : le silence transforme une erreur en manquement à la loyauté.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle conduite : groupes, exercices, supports et suivi ?',
            'intro' => 'Les juristes apprennent à se méfier d\'un outil en le prenant eux-mêmes en défaut. La méthode est construite pour que chaque participant découvre, sur une question de sa matière, une réponse fausse présentée avec assurance.',
            'items' => [
                ['titre' => 'Huit participants au plus', 'texte' => 'La vérification des références se fait écran par écran. Au-delà de huit personnes, le formateur ne peut plus suivre les recherches de chacun, et les erreurs de méthode passent inaperçues.'],
                ['titre' => 'Des groupes par profession', 'texte' => 'Un groupe d\'avocats, un groupe de juristes d\'entreprise, une session propre aux juridictions. Mélanger magistrats et avocats est possible sur des décisions publiées, jamais sur des dossiers en cours, et seulement si le commanditaire et les participants le souhaitent.'],
                ['titre' => 'Le juriste juge le fond', 'texte' => 'Le formateur n\'est pas juriste et ne tranche aucune question de droit. Il montre comment chercher, contrôler et tracer ; ce sont les participants qui disent si la réponse est juste, et le groupe qui confronte les avis.'],
                ['titre' => 'Des questions de leur pratique', 'texte' => 'Chacun apporte deux ou trois questions qu\'il a réellement traitées, dont il connaît la réponse. Elles deviennent les exercices de recherche : on voit tout de suite ce que l\'outil réussit et ce qu\'il invente.'],
                ['titre' => 'La relecture croisée', 'texte' => 'Un binôme rédige, un autre contrôle les références, comme entre un collaborateur et l\'associé qui relit. L\'évaluation finale contient une erreur volontairement glissée dans une réponse d\'assistant, que chacun doit trouver.'],
                ['titre' => 'Des supports qui restent', 'texte' => 'Le protocole de vérification en six étapes, la carte des sources du droit OHADA, une bibliothèque de consignes juridiques, le modèle de note de traçabilité et une attestation nominative de fin de formation, dans des formats modifiables.'],
                ['titre' => 'Un suivi d\'un mois', 'texte' => 'Un canal direct reste ouvert pendant le mois qui suit, pour les questions d\'usage des outils. Les questions de droit sont renvoyées aux confrères, à l\'ordre ou à la hiérarchie compétente.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Avec quels outils travaille-t-on, et combien coûtent-ils ?',
            'legende' => 'Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes, en dollars américains. Ils sont payés à l\'éditeur par le cabinet ou le service et ne font pas partie du prix de la formation.',
            'entetes' => ['Outil', 'Usage en formation', 'Prix de l\'éditeur', 'Point d\'attention pour un juriste'],
            'lignes'  => [
                ['Bases gratuites de l\'OHADA, OHADATA et Juricaf', 'Recherche et vérification de toutes les références', 'Gratuites ; les recueils de la CCJA sont vendus à l\'unité', 'Ce sont elles qui font foi pendant les exercices, pas l\'assistant'],
                ['ChatGPT Business (OpenAI)', 'Recherche assistée, résumé de décisions publiées, premiers jets', '20 dollars par utilisateur et par mois en facturation annuelle, 25 dollars en mensuelle, à partir de 2 utilisateurs', 'OpenAI indique ne pas entraîner ses modèles sur les données de l\'offre Business par défaut ; le compte gratuit d\'un collaborateur ne convient pas'],
                ['Claude Team (Anthropic)', 'Lecture de longs documents publics, comparaison de versions, rédaction', '20 dollars par siège et par mois en annuel, 25 dollars au mois, de 2 à 150 personnes', 'Anthropic indique ne pas entraîner ses modèles sur le contenu de l\'offre Team par défaut'],
                ['Ollama et un modèle ouvert', 'Modèle installé sur un poste du cabinet, pour les tâches qui ne peuvent pas quitter le cabinet', 'Logiciel sous licence MIT ; le coût est celui de l\'ordinateur', 'Plus lent et moins précis ; il invente aussi des références, et se vérifie de la même façon'],
                ['Traitement de texte et tableur du cabinet', 'Note de traçabilité, tableau des références, comparaison de versions', 'Ceux que le cabinet possède déjà', 'Les références vérifiées vivent dans les documents du cabinet, pas dans l\'historique d\'une conversation'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'Cabinet d\'avocats d\'affaires, à Abidjan', 'probleme' => 'Les collaborateurs cherchent la jurisprudence de la CCJA sur les procédures simplifiées de recouvrement avec un assistant grand public, et un mémoire a failli partir avec un arrêt introuvable.', 'solution' => 'Recherche formulée avec l\'IA puis menée dans les bases officielles, fiche de références vérifiées obligatoire avant toute écriture, et relecture par sondage de l\'associé sur les références décisives.'],
                ['secteur' => 'Direction juridique d\'une société industrielle, à Douala', 'probleme' => 'Une juriste seule suit les contrats, la vie sociale de plusieurs filiales et les nouveaux textes, sans abonnement à une base payante.', 'solution' => 'Veille hebdomadaire sur le Journal officiel de l\'OHADA et les bases gratuites, résumés assistés relus avant diffusion, et trames de procès-verbaux préparées à partir de modèles pseudonymisés.'],
                ['secteur' => 'Étude notariale, à Cotonou', 'probleme' => 'Les clercs préparent des statuts et des cessions de parts à partir d\'anciens modèles, dont certains reprennent des formulations antérieures à la révision des textes.', 'solution' => 'Comparaison assistée des modèles avec l\'Acte uniforme en vigueur, liste des écarts vérifiée par le notaire, et interdiction d\'utiliser un acte en cours comme matière d\'exercice.'],
                ['secteur' => 'Tribunal de commerce, en Afrique de l\'Ouest', 'probleme' => 'Les greffiers et les assistants de justice consacrent beaucoup de temps aux chronologies et aux inventaires de pièces de dossiers volumineux.', 'solution' => 'Session réservée à la juridiction, sur décisions publiées : aide à la mise en forme et aux tableaux de pièces, limites de l\'aide à la décision, et contrôle humain de chaque date et de chaque pièce.'],
                ['secteur' => 'Cabinet parisien ou bruxellois conseillant des clients de la zone OHADA', 'probleme' => 'Les mêmes avocats travaillent en droit français et en droit uniforme, et l\'assistant mélange les deux régimes dans ses réponses.', 'solution' => 'Consignes séparées par système juridique, vérification systématique que l\'article cité est bien un article d\'Acte uniforme, et respect du secret qui couvre, en France, toutes les pièces du dossier.'],
                ['secteur' => 'Service juridique d\'une banque ou d\'une institution financière, à Dakar', 'probleme' => 'Le service rédige des actes de sûretés et suit les procédures de recouvrement dans plusieurs pays de la zone.', 'solution' => 'Tableau de suivi des textes applicables par pays, recherches vérifiées pour chaque État, et aucune donnée de client emprunteur dans un outil en ligne.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour un cabinet, une étude, une direction juridique ou une juridiction ?',
            'legende' => 'Le calendrier tient compte des audiences, des vacations judiciaires et des échéances des dossiers : une équipe ne se forme pas la semaine d\'une plaidoirie importante.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Intra, dans vos locaux', '2 jours, en 4 demi-journées', '8 personnes au plus', 'Un cabinet, une étude ou une direction juridique qui veut travailler sur ses propres questions et ses modèles, en toute confidentialité'],
                ['Inter, avec un barreau, une chambre ou une association de juristes', '2 jours', 'Professionnels de plusieurs structures', 'Une ou deux personnes par structure ; exercices sur des textes et des décisions publiés uniquement'],
                ['Session réservée aux juridictions', '1 ou 2 jours', 'Magistrats, greffiers, assistants de justice', 'Usage des outils pour la recherche et la mise en forme, sur décisions publiées, à la demande de la juridiction'],
                ['À distance', '6 séances de 2 heures', '6 personnes au plus', 'Équipes réparties entre plusieurs villes ou pays ; partage d\'écran indispensable pour suivre les recherches'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '8 personnes au plus', 'Prise en main en salle, puis application guidée sur les dossiers des semaines suivantes'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et comment la régler ?',
            'intro'      => 'Le prix est fixé sur devis, après un premier échange gratuit, comme le cadrage et le devis eux-mêmes. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux assistants et aux bases payantes restent à la charge du cabinet ou du service, auprès des éditeurs.',
            'items'      => [
                ['offre' => 'Formation intra', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur vos questions de droit', 'Exercices de recherche dans les bases officielles', 'Protocole de vérification et note de traçabilité', 'Évaluation sur un dossier inédit et attestation', 'Canal direct pendant le mois suivant']],
                ['offre' => 'Session inter', 'prix' => 'Sur devis', 'inclus' => ['Deux jours sur des textes et des décisions publiés', 'Carte des sources du droit OHADA', 'Bibliothèque de consignes juridiques', 'Attestation nominative']],
                ['offre' => 'Session pour une juridiction', 'prix' => 'Sur devis', 'inclus' => ['Une ou deux journées sur décisions publiées', 'Chronologies et inventaires de pièces assistés', 'Repères sur l\'aide à la décision', 'Supports remis au greffe']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le nombre de matières couvertes par les exercices (sociétés, sûretés, recouvrement, arbitrage, travail).',
                'Le temps de préparation des questions et des modèles fournis par le commanditaire.',
                'L\'installation éventuelle d\'un modèle local sur un poste du cabinet.',
                'Le lieu, le déplacement hors de Cotonou ou du Bénin, et le mode présentiel, distance ou hybride.',
                'Le suivi retenu après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation ou l\'ordre peut-il prendre en compte la session ?',
            'paragraphes' => [
                'Rien n\'est automatique, et rien n\'est promis ici. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> lue le 5 octobre 2026 réserve le dépôt d\'un plan de formation aux entreprises qui justifient du paiement régulier des deux taxes ; un cabinet constitué en société ou une direction juridique d\'entreprise peut donc l\'interroger, programme et devis à l\'appui. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> affiche à la fois un guichet pour le personnel des entreprises et des membres des organisations professionnelles et un guichet pour les demandes individuelles, avec une demande en ligne.',
                'Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286</a> ; les conditions d\'accès se demandent au fonds au moment du projet. En France, le <a href="https://cnb.avocat.fr/les-obligations-de-formation-continue">Conseil national des barreaux</a> fixe la formation continue des avocats à 20 heures par année civile, ou 40 heures sur deux années consécutives, selon des modalités qu\'il définit : savoir si cette session peut y être imputée se vérifie auprès de l\'ordre ou de l\'école d\'avocats, avant l\'inscription.',
                'Richard SALANON ne détient ni la certification Qualiopi, exigée en France pour accéder aux fonds publics et mutualisés, ni l\'agrément d\'un fonds africain, ni une habilitation d\'école d\'avocats ou de magistrature. Le budget se construit donc d\'abord sans prise en charge. Le programme détaillé, les feuilles de présence, l\'évaluation et les attestations sont fournis dans tous les cas, pour le dossier que le participant voudrait présenter de lui-même.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on après la formation, et comment les éviter ?',
            'intro' => 'Les écarts reviennent quand les délais de procédure se resserrent. Ce sont presque toujours les mêmes, et la plupart se règlent par une habitude prise dès la première semaine.',
            'items' => [
                ['titre' => 'Faire confiance au lien affiché', 'texte' => 'Un outil qui cite une page web peut lui attribuer un contenu qu\'elle n\'a pas. Le lien s\'ouvre, la page se lit, et l\'on y retrouve la phrase exacte ; sinon, la référence tombe.'],
                ['titre' => 'Vérifier l\'existence, pas la portée', 'texte' => 'L\'arrêt existe, mais il porte sur un autre Acte uniforme, ou rejette le moyen qu\'on croit appuyer. La vérification inclut la lecture des motifs et du dispositif, pas seulement la recherche du numéro.'],
                ['titre' => 'Citer un texte remplacé', 'texte' => 'Les commentaires de textes abrogés restent en ligne et nourrissent les réponses des assistants. On contrôle toujours la date d\'adoption de l\'Acte uniforme cité et son éventuel remplacement.'],
                ['titre' => 'Pseudonymiser à moitié', 'texte' => 'Les noms ont disparu, mais le montant exact, la ville et le secteur d\'activité désignent encore le client. La question de contrôle reste la même : un confrère de la place reconnaîtrait-il l\'affaire ?'],
                ['titre' => 'Laisser l\'assistant conforter sa thèse', 'texte' => 'Un assistant tend à aller dans le sens de la question posée. On lui demande aussi les arguments contraires et les décisions défavorables, puis on les cherche soi-même dans les bases.'],
                ['titre' => 'Ne pas garder de trace', 'texte' => 'Sans note de traçabilité, personne ne sait plus, trois mois plus tard, d\'où vient une référence. La note se remplit au moment de la recherche, pas au moment où un doute apparaît.'],
                ['titre' => 'Former une seule personne du cabinet', 'texte' => 'Si seul le collaborateur formé applique le protocole, l\'associé qui relit ne sait pas quoi contrôler. Le relecteur suit la formation, ou au moins la demi-journée consacrée à la vérification.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Langues, connexion, juridictions : que change le terrain de la zone OHADA et de l\'Europe ?',
            'paragraphes' => [
                'La zone OHADA est d\'abord francophone, mais pas seulement : la bibliothèque numérique de l\'OHADA propose son interface en français, en anglais, en portugais et en espagnol, et des États comme le Cameroun, la Guinée-Bissau ou la Guinée équatoriale travaillent aussi dans d\'autres langues. Un assistant qui traduit un article d\'Acte uniforme ne remplace pas la version publiée au Journal officiel de l\'OHADA : les exercices apprennent à repartir de cette version, et à ne citer une traduction qu\'en la signalant comme telle.',
                'L\'architecture juridictionnelle compte aussi. Selon l\'article 14 du traité publié par l\'OHADA, la CCJA assure l\'interprétation et l\'application communes des Actes uniformes et se prononce, sur recours en cassation, dans les affaires qui soulèvent des questions relatives à leur application, sauf en matière de sanctions pénales ; l\'article 10 rend les Actes uniformes directement applicables nonobstant toute disposition contraire de droit interne. Un assistant qui renvoie une question d\'Acte uniforme vers la cour suprême nationale, ou qui oppose une loi nationale à un Acte uniforme, se trompe d\'architecture ; la formation apprend à le repérer.',
                'La connexion reste inégale selon les villes et les juridictions. Les textes et les décisions des exercices sont téléchargés à l\'avance et remis en fichiers, et la méthode de vérification fonctionne hors ligne une fois les sources rassemblées. Le 5 octobre 2026, l\'ancienne adresse de Juriscope, longtemps citée comme base de textes africains, menait à un site sans aucun rapport avec le droit de la zone : une adresse ancienne trouvée dans un support ou proposée par un assistant se contrôle comme une référence.',
                'En Europe, les cabinets qui conseillent des clients de la zone combinent deux cadres. Le secret professionnel de l\'avocat y couvre toutes les pièces du dossier, et le règlement européen sur l\'IA classe à haut risque les systèmes destinés à aider une autorité judiciaire à rechercher et interpréter les faits et le droit, avec une application fixée au 2 décembre 2027 par la Commission européenne dans sa page mise à jour le 3 août 2026. Les juridictions africaines ne sont pas soumises à ce règlement, mais la logique qu\'il retient, un contrôle humain réel sur ce qui touche au jugement, rejoint celle de la formation.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi suivre cette formation avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il construit lui-même des outils d\'IA et les branche sur des logiciels existants : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il sait donc comment un assistant cherche, cite et se trompe, et quelles garanties un éditeur offre réellement sur les données. Fort de ' . $ans . ' ans d\'expérience, formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, dont le Bénin, la Côte d\'Ivoire, le Sénégal, le Togo, le Gabon, la France et la Belgique.',
                'Il n\'est ni avocat, ni notaire, ni magistrat, et le dit dès la première séance : il enseigne les outils, la recherche dans les sources officielles et la méthode de vérification ; le droit reste l\'affaire des professionnels formés, de leur ordre et de leur hiérarchie. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>, et les formations voisines sur la page <a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>.',
                'Quand un cabinet ou une direction juridique veut aller plus loin, par exemple un assistant qui répond uniquement à partir de ses propres modèles et de textes vérifiés, le besoin relève d\'une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a> et de la formation <a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels existants</a>. Les prises en main générales des assistants sont l\'objet de la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>, et le choix entre les grands assistants est éclairé par le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>. L\'ensemble de l\'offre est réuni dans le <a href="/formations/">catalogue des formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre cabinet, votre étude ou votre service ?',
            'texte' => 'L\'assistant aide à chercher et à rédiger, il ne fait pas foi : aucune référence n\'est citée sans avoir été lue dans une source officielle, la version en vigueur de l\'Acte uniforme se contrôle à chaque fois, le dossier ne quitte pas le cabinet sans pseudonymisation sérieuse, chaque recherche laisse une trace, et une erreur découverte après le dépôt se signale aussitôt.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe juridique à l\'IA sans risquer une citation inventée ?',
            'texte'  => 'Indiquez votre profession, le nombre de participants, les matières traitées, les pays concernés et les outils déjà utilisés : vous recevez une réponse sous 24 heures, puis une proposition de programme et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation IA et droit OHADA'],
        ],
    ],

    'faq' => [
        ['q' => 'Le formateur est-il juriste ?', 'r' => 'Non. Richard SALANON forme à l\'usage des outils d\'IA, à la recherche dans les sources officielles et à la vérification des références. Les questions de fond sont tranchées par les participants, qui apportent leur pratique ; aucune consultation juridique n\'est donnée pendant la session.'],
        ['q' => 'Faut-il savoir utiliser un assistant d\'IA avant la formation ?', 'r' => 'Non. La première demi-journée reprend le fonctionnement des assistants et la façon de les interroger. Il faut en revanche connaître les Actes uniformes de sa matière et savoir lire un arrêt de la CCJA.'],
        ['q' => 'Un assistant d\'IA peut-il remplacer une base de jurisprudence ?', 'r' => 'Non. Il aide à formuler une recherche et à résumer une décision qu\'on a soi-même téléchargée, mais il peut inventer un arrêt plausible. La vérification se fait dans la bibliothèque numérique de l\'OHADA, la base OHADATA, Juricaf, les recueils de la CCJA ou une base d\'éditeur.'],
        ['q' => 'Que risque un avocat qui cite une décision inventée ?', 'r' => 'Aux États-Unis, la décision Mata v. Avianca du 22 juin 2023 a infligé 5 000 dollars de pénalité aux avocats et à leur cabinet ; en Angleterre, la High Court a rappelé le 6 juin 2025 qu\'elle peut aller jusqu\'à saisir l\'autorité disciplinaire ou la police. Dans la zone OHADA, les règles de loyauté du code de déontologie des avocats de l\'UEMOA s\'appliquent, avec les sanctions disciplinaires qu\'il prévoit.'],
        ['q' => 'Peut-on soumettre une pièce de dossier à ChatGPT ou à Claude ?', 'r' => 'Pas dans un compte personnel, et jamais telle quelle. Le secret professionnel interdit de confier le nom du client, les pièces ou la stratégie à un outil non maîtrisé. On travaille sur des textes publics, sur des extraits sérieusement pseudonymisés dans l\'offre professionnelle du cabinet, ou sur un modèle installé en local.'],
        ['q' => 'La formation convient-elle aux magistrats et aux greffiers ?', 'r' => 'Oui, dans une session réservée à la juridiction ou dans un groupe de même profession. Elle porte sur la recherche, les chronologies, les inventaires de pièces et la mise en forme, sur des décisions publiées. Ce qui relève de l\'appréciation des faits et de la décision reste exclu de l\'outil.'],
        ['q' => 'Et pour les notaires ?', 'r' => 'L\'IA aide à comparer des versions de statuts ou d\'actes et à préparer des trames, puis le notaire vérifie chaque clause au regard de l\'Acte uniforme en vigueur. Les exercices utilisent des trames anonymes, jamais un acte en cours.'],
        ['q' => 'Les assistants connaissent-ils les Actes uniformes révisés ?', 'r' => 'Imparfaitement. Ils ont surtout appris sur des textes de droit français et sur des commentaires anciens, et peuvent citer une version remplacée. On vérifie toujours la date d\'adoption de l\'Acte uniforme cité sur le site de l\'OHADA.'],
        ['q' => 'Doit-on dire au client qu\'on utilise l\'IA ?', 'r' => 'Le guide du CCBE du 2 octobre 2025 recommande la transparence lorsqu\'il est raisonnable de penser que le client s\'y opposerait ou poserait des conditions. Les règles de votre barreau peuvent aller plus loin : la formation aide à rédiger la mention, la décision appartient au cabinet.'],
        ['q' => 'La formation compte-t-elle dans la formation continue obligatoire des avocats ?', 'r' => 'En France, le CNB fixe l\'obligation à 20 heures par année civile ou 40 heures sur deux ans, selon ses propres modalités. Richard SALANON n\'est pas un organisme habilité par une école d\'avocats : vérifiez auprès de votre ordre avant l\'inscription. Ailleurs, la règle est celle de votre barreau.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis. Il dépend du nombre de participants, des matières couvertes, de la préparation des exercices, du lieu, du mode et du suivi retenu. Le premier échange, le cadrage et le devis sont gratuits ; le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Quelle différence avec la formation IA, éthique et conformité des données ?', 'r' => 'Celle-là s\'adresse à tous les salariés et porte sur les données personnelles, le droit d\'auteur et les biais. Celle-ci s\'adresse aux professionnels du droit et porte sur la recherche, la rédaction, la veille, le secret professionnel et la vérification des références.'],
    ],

    'sources' => [
        ['titre' => 'OHADA, présentation générale : États membres, Secrétariat permanent, CCJA et ERSUMA', 'url' => 'https://www.ohada.org/en/general-overview/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, texte du traité relatif à l\'harmonisation du droit des affaires en Afrique (articles 2, 10, 14, 20 et 31)', 'url' => 'https://www.ohada.org/traite-relatif-a-lharmonisation-du-droit-des-affaires-en-afrique/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, les Actes uniformes et leurs dates d\'adoption', 'url' => 'https://www.ohada.org/actes-uniformes/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, chronologie (adoption des Actes uniformes de 1996 à 2017)', 'url' => 'https://www.ohada.org/en/chronology/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, Recueil de jurisprudence de la CCJA n° 36 (7 février 2021)', 'url' => 'https://www.ohada.org/recueil-de-jurisprudence-n36/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, bibliothèque numérique : Actes uniformes, Journal officiel, arrêts et avis', 'url' => 'https://biblio.ohada.org/', 'date' => '2026-10-05'],
        ['titre' => 'UNIDA, OHADA.com : base de jurisprudence OHADATA', 'url' => 'https://www.ohada.com/documentation/jurisprudence.html', 'date' => '2026-10-05'],
        ['titre' => 'AHJUCAF, Juricaf : la jurisprudence francophone des cours suprêmes', 'url' => 'https://juricaf.org/', 'date' => '2026-10-05'],
        ['titre' => 'AHJUCAF, fiche de la Cour commune de justice et d\'arbitrage de l\'OHADA', 'url' => 'https://www.ahjucaf.org/ohada-cour-commune', 'date' => '2026-10-05'],
        ['titre' => 'Tribunal fédéral du district sud de New York, Mata v. Avianca, Opinion and Order on Sanctions (22 juin 2023)', 'url' => 'https://www.nhd.uscourts.gov/sites/default/files/pdf/Mata-v-Avianca-sanctions-order.PDF', 'date' => '2026-10-05'],
        ['titre' => 'Courts and Tribunals Judiciary, Ayinde v London Borough of Haringey et Al-Haroun v Qatar National Bank, [2025] EWHC 1383 (Admin), 6 juin 2025', 'url' => 'https://www.judiciary.uk/judgments/ayinde-v-london-borough-of-haringey-and-al-haroun-v-qatar-national-bank/', 'date' => '2026-10-05'],
        ['titre' => 'Stanford HAI, étude du RegLab sur les erreurs des outils de recherche juridique dotés d\'IA (23 mai 2024)', 'url' => 'https://hai.stanford.edu/news/ai-trial-legal-models-hallucinate-1-out-6-or-more-benchmarking-queries', 'date' => '2026-10-05'],
        ['titre' => 'Ordre des avocats du Sénégal, code de déontologie des avocats de l\'espace UEMOA (Abidjan, 5 juillet 2019)', 'url' => 'https://ordredesavocats.sn/admin/documentheques/201/201_1738671726362.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Conseil national des barreaux, guide pratique : utilisation des systèmes d\'intelligence artificielle générative (1re édition, septembre 2024)', 'url' => 'https://cnb.avocat.fr/medias/cnb-guidepratique-utilisation-systemes-iag-2024-68f7b1d86e4570.98487114.pdf', 'date' => '2026-10-05'],
        ['titre' => 'CCBE, guide sur l\'utilisation de l\'intelligence artificielle générative par les avocats (2 octobre 2025)', 'url' => 'https://www.ccbe.eu/fileadmin/speciality_distribution/public/documents/IT_LAW/ITL_Guides_recommendations/FR_ITL_20251002_CCBE-guide-on-the-use-of-the-use-of-generative-AI-for-lawyers.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, article 66-5 de la loi n° 71-1130 du 31 décembre 1971 (secret professionnel de l\'avocat)', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000023780802', 'date' => '2026-10-05'],
        ['titre' => 'Conseil national des barreaux, les obligations de formation continue', 'url' => 'https://cnb.avocat.fr/les-obligations-de-formation-continue', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 395)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, service d\'assistance sur le règlement sur l\'IA : annexe III, point 8', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/annex-3', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, cadre réglementaire de l\'IA : calendrier d\'application (mise à jour du 3 août 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres, dont Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, tarifs de Claude (Pro, Max, Team, Enterprise)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Ollama, dépôt officiel et licence MIT', 'url' => 'https://github.com/ollama/ollama', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-ethique-conformite', 'gouvernance-ia', 'rag-chatbot-documents', 'prompt-engineering', 'ia-audit-controle', 'ia-en-entreprise'],
        'services'    => ['integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
