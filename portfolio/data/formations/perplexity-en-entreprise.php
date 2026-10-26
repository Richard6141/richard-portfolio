<?php
// ============================================================
// data/formations/perplexity-en-entreprise.php · Fiche formation « Perplexity en
// entreprise » (domaine intelligence-artificielle, fiche forte).
// Angle propre : Perplexity comme moteur de réponse avec sources : recherche
// documentaire et veille, vérification des sources, projets (espaces de travail),
// recherche approfondie, comparaison avec un moteur classique, limites (erreurs
// de sources, données sensibles). Richard enseigne Perplexity (fait donné par lui) ;
// rien d’autre n’est affirmé sur sa pratique.
// Faits externes lus le 26/10/2026 : centre d’aide de Perplexity (moteur de
// réponse, Pro Search, mode Research, projets, fichiers joints, confidentialité,
// données collectées, entraînement par des tiers), billet Deep Research, Commission
// européenne (protection des données), SGG du Bénin (loi n° 2017-20, titre et date).
// Aucun prix d’éditeur ni limite d’abonnement chiffrée : la page officielle fait foi.
// Aucune certification ni aucun partenariat attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Perplexity en entreprise : vos équipes apprennent à mener une recherche documentaire et une veille avec un moteur de réponse, à vérifier chaque source et à protéger leurs données',
    'title'   => 'Formation Perplexity IA en entreprise | Richard SALANON',
    'meta'    => 'Formation Perplexity pour vos équipes : recherche documentaire, veille, contrôle des sources, recherche approfondie et règles de données. Sur devis.',
    'en_bref' => 'Cette formation apprend aux équipes qui cherchent, lisent et résument de l’information (veille, études de marché, appels d’offres, dossiers juridiques et réglementaires, rapports aux bailleurs) à travailler avec Perplexity, un moteur de réponse qui cite ses sources : poser une bonne question, vérifier les sources, organiser les recherches en projets, lancer une recherche approfondie et savoir ce qu’on ne lui confie pas. Deux formes : quatre demi-journées étalées sur deux jours, ou une seule demi-journée pour découvrir l’outil. On peut l’organiser chez vous, en visioconférence ou en mélangeant les deux, pour une seule équipe ou pour plusieurs structures réunies. Tarif établi au cas par cas, sur devis.',
    'publie'  => '2026-11-12',
    'maj'     => '2026-11-12',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, ou atelier d’une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Premier matin : saisir ce qu’est un moteur de réponse, fixer les règles sur les données',
            'duree'  => '3 h 30',
            'points' => [
                'Ce qu’est un moteur de réponse : il cherche sur le web, choisit des sources et rédige une synthèse, là où un moteur classique renvoie une liste de liens.',
                'La même question posée à un moteur classique et à Perplexity, sur un sujet réel du service : ce qui change dans le temps passé et dans la confiance accordée.',
                'Lire une réponse de Perplexity : texte, sources numérotées, questions de suivi, et ce que chaque élément permet de contrôler.',
                'Classer les informations de l’entreprise en trois familles : ce qu’on peut taper dans une recherche en ligne, ce qu’on anonymise d’abord, ce qui n’en sort jamais.',
                'Ouvrir les réglages du compte et contrôler deux points : l’emploi des requêtes pour améliorer les modèles, et la conservation de l’historique.',
                'Premier exercice : répondre à une question de l’équipe, puis ouvrir chaque source citée et dire si elle dit bien ce que la réponse lui prête.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : poser de bonnes questions et vérifier les sources',
            'duree'  => '3 h 30',
            'points' => [
                'Formuler une question de recherche : sujet, période, pays, type de source attendu, forme de la réponse.',
                'Passer d’une recherche rapide à une recherche plus poussée (Pro Search) quand la question est complexe, et lire la différence.',
                'Orienter la recherche vers des sources précises : web, travaux académiques, finance, ou fichiers joints, selon les options proposées par l’éditeur.',
                'Grille de vérification d’une source : qui publie, quand, est-ce la source d’origine ou un relais, la phrase citée figure-t-elle vraiment dans la page.',
                'Repérer les signes d’une réponse fragile : source unique, page ancienne, chiffre sans date, forum ou blog cité comme preuve.',
                'Exercice croisé : chaque participant contrôle la réponse d’un collègue en revenant aux pages sources.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : recherche approfondie, veille et projets',
            'duree'  => '3 h 30',
            'points' => [
                'Lancer une recherche approfondie (mode Research, dit aussi Deep Research) sur une question de l’entreprise, et en relire le rapport avec son plan de sources.',
                'Savoir quand elle sert et quand une recherche rapide suffit : le temps d’attente et la lecture du rapport ont un coût.',
                'Construire une veille régulière : questions types, période, sources à surveiller, format de la note remise à l’équipe.',
                'Créer un projet Perplexity : instructions permanentes, fichiers de référence, recherches rangées par sujet.',
                'Joindre un fichier (rapport, cahier des charges, tableau) à une recherche et le croiser avec ce que dit le web.',
                'Exporter ou partager un résultat sans exposer plus que nécessaire, et décider qui peut le voir.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : rédiger la note, contrôler et évaluer',
            'duree'  => '3 h 30',
            'points' => [
                'Transformer des recherches en note de synthèse, en fiche de veille ou en argumentaire, avec les références en bas de page.',
                'Comparer deux ou trois réponses sur la même question et expliquer les écarts entre elles.',
                'Rédiger la fiche de tâche : question type, réglages, vérifications obligatoires, personne qui valide.',
                'Mettre au propre la bibliothèque de questions de l’équipe, une fiche par tâche de recherche.',
                'Épreuve finale : en autonomie, la tâche cible est menée du début à la fin, sources contrôlées, chronomètre lancé.',
                'Feuille de route des trente jours suivants, et règles de l’équipe couchées par écrit pour les données comme pour les sources.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou atelier d’une demi-journée'],
        ['l' => 'Public', 'v' => 'Équipes de veille, d’études, juridiques, commerciales, de projets et de direction, sans prérequis technique'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Quelles compétences acquérir sur Perplexity, et quelles limites a ce programme ?',
            'paragraphes' => [
                'Dans beaucoup d’équipes, la recherche d’information se fait encore ainsi : dix onglets ouverts, des résultats lus en diagonale, un résumé recopié dans un document, et personne ne sait plus d’où vient un chiffre. Perplexity change la méthode, mais pas l’exigence. Le centre d’aide de l’éditeur le présente comme un moteur de réponse : il cherche sur le web, repère des sources et les synthétise dans une réponse rédigée. Ce que la formation apprend, c’est à tirer parti de ce gain de temps sans perdre la traçabilité.',
                'Le deuxième soir, sept gestes sont acquis. Écrire une question de recherche nette (sujet, période, pays, forme voulue pour la réponse). Lire la réponse en ouvrant les sources qui l’appuient. Passer chaque source à la grille de contrôle. Trancher entre recherche rapide, recherche plus poussée et recherche approfondie. Ranger ses recherches dans un projet doté d’instructions permanentes. Croiser un fichier de l’entreprise avec ce que dit le web. Et écrire une note de synthèse où chaque affirmation renvoie à une page qu’on peut retrouver.',
                'La formation ne couvre pas tout l’univers de l’IA. Elle n’est pas un cours général sur les assistants de rédaction : l’usage quotidien de ChatGPT, Claude, Gemini et Copilot sur ses propres documents relève de la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>. Elle n’apprend pas non plus à construire un robot qui répond à partir de vos archives internes avec citations, sujet de la formation <a href="/formations/rag-chatbot-documents">chatbot sur vos documents</a>. Elle ne remplace pas enfin l’avis d’un juriste, d’un expert-comptable ou d’un professionnel de santé : Perplexity aide à chercher, il ne rend aucun avis.',
                'Aucun gain de temps chiffré n’est promis : le résultat varie selon la question, selon les sources que le web offre sur le sujet et selon la fréquence d’usage. Chacun chronomètre donc sa tâche cible dès le premier matin, la refait au terme du deuxième jour, et l’entreprise pourra renouveler ce relevé par la suite.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui peut suivre cette formation, et que faut-il apporter ?',
            'intro' => 'Elle concerne les métiers où l’on passe ses journées à trouver, confronter et résumer des informations. Pas de bagage technique requis : savoir écrire une question et ouvrir une page web suffit.',
            'items' => [
                ['titre' => 'Les publics habituels', 'texte' => 'Responsables de veille et d’études, chargés de communication, juristes d’entreprise, chargés de projet et de financement, équipes commerciales qui préparent un rendez-vous, assistantes et assistants de direction, dirigeants qui veulent s’informer sans passer une soirée sur les moteurs de recherche.'],
                ['titre' => 'Le niveau de départ', 'texte' => 'Débutants complets ou équipes qui se servent déjà de Perplexity comme d’un moteur de recherche un peu plus malin : les deux profils sont accueillis. Quelques questions envoyées en amont aident à rapprocher les niveaux dans chaque groupe et à prévoir, au besoin, une remise à niveau.'],
                ['titre' => 'Un groupe par type de recherche', 'texte' => 'Un juriste cherche des textes officiels, un commercial cherche des informations sur une entreprise, un chargé de projet cherche des données de contexte. Quand c’est possible, les groupes sont composés par famille de recherches ; pour l’atelier découverte, un groupe mêlé fonctionne bien.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur par participant avec un navigateur récent et une connexion stable, car Perplexity ne fonctionne qu’en ligne. Un tableur et un traitement de texte servent à rédiger les notes.'],
                ['titre' => 'Les comptes', 'texte' => 'Les comptes déjà ouverts par l’entreprise conviennent, tout comme des comptes gratuits ouverts en début de séance. Inutile de souscrire quoi que ce soit avant d’avoir constaté ce qui est réellement utile ; les formules et leurs limites changent, et seule la page de l’éditeur fait foi.'],
                ['titre' => 'Les questions à préparer', 'texte' => 'Trois à cinq questions réelles par participant, liées à sa tâche : une veille sur un marché, la vérification d’une réglementation, la préparation d’un rendez-vous, la recherche d’un fournisseur. Les questions qui contiennent des noms de clients ou des informations internes sont reformulées avant la session.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Que contient chaque demi-journée du programme ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles recherches chaque métier fait-il pendant la formation ?',
            'legende' => 'Exercices types, bâtis pendant la préparation avec les questions que l’entreprise nous confie. Dans la colonne de droite : les points à examiner avant de faire confiance au résultat.',
            'entetes' => ['Poste', 'Question de départ', 'Ce que Perplexity produit', 'Ce que le participant vérifie'],
            'lignes'  => [
                ['Veille et études', 'Quelles évolutions récentes dans le secteur de l’équipe, sur les six derniers mois ?', 'Synthèse datée avec sources numérotées, pistes à approfondir', 'Date de chaque source, présence d’une source d’origine, absence de page de relais'],
                ['Juridique et conformité', 'Que dit la réglementation applicable à tel traitement de données dans tel pays ?', 'Résumé avec renvoi aux textes officiels cités', 'Lecture du texte lui-même, version en vigueur, avis d’un professionnel avant toute décision'],
                ['Commercial', 'Que sait-on publiquement d’un prospect, de son marché et de ses concurrents ?', 'Fiche de préparation de rendez-vous avec liens', 'Ancienneté des informations, homonymes, chiffres d’affaires annoncés par des tiers'],
                ['Chargé de projet et de financement', 'Quels appels à propositions ou programmes correspondent à notre projet ?', 'Liste de pistes avec liens vers les pages officielles', 'Date limite, conditions d’éligibilité, existence réelle du programme sur le site de l’organisme'],
                ['Achats', 'Quels fournisseurs et quelles références pour tel équipement ?', 'Tableau comparatif avec les liens des fabricants', 'Caractéristiques sur la fiche du fabricant, conditions de livraison, avis non vérifiés'],
                ['Communication et direction', 'Quels sont les sujets d’actualité à surveiller cette semaine sur notre métier ?', 'Note de veille hebdomadaire de deux pages', 'Fiabilité du média, pas de rumeur reprise comme un fait, mention des sources dans la note'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'En quoi un moteur de réponse diffère-t-il d’un moteur de recherche classique ?',
            'paragraphes' => [
                'Un moteur classique renvoie une liste de pages, et c’est à la personne de lire, comparer et conclure. Un moteur de réponse fait ce premier travail à sa place et présente une synthèse : le centre d’aide de Perplexity décrit cette différence en disant que l’on n’a plus à trier une liste de liens. Le gain est réel, surtout pour une question large ou récente. Le risque l’est aussi : la synthèse donne l’impression d’une certitude que la liste de liens, plus inconfortable, ne donnait pas.',
                'La formation fait donc de cette différence un exercice, pas un slogan. Chaque participant pose la même question aux deux types d’outils, chronomètre en main, puis compare : le temps passé, la qualité de la réponse, la possibilité de retrouver l’origine d’un chiffre. Selon la question, Perplexity peut faire gagner du temps sur la première lecture, tandis qu’un moteur classique reste préférable pour trouver une page précise, un site officiel ou un document que l’on connaît déjà. Les deux se complètent ; aucun n’est « meilleur » en général.',
                'L’éditeur lui-même invite à la prudence. Son centre d’aide indique viser l’exactitude et encourage à revérifier les sources pour s’en assurer. La formation prend cette phrase au pied de la lettre et en fait une règle de travail : une réponse n’est pas une preuve, elle est un point de départ qu’il faut recouper.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel outil de recherche choisir selon la question posée ?',
            'legende' => 'Repères travaillés en formation à partir des descriptions du centre d’aide de Perplexity. Ils servent à choisir, pas à remplacer le jugement de la personne qui cherche.',
            'entetes' => ['Besoin', 'Outil le plus adapté', 'Pourquoi', 'Précaution'],
            'lignes'  => [
                ['Retrouver un site officiel ou un document connu', 'Moteur de recherche classique', 'On sait ce que l’on cherche, la liste de liens suffit', 'Vérifier l’adresse du site avant d’y saisir quoi que ce soit'],
                ['Comprendre un sujet nouveau en quelques minutes', 'Perplexity, recherche rapide', 'Une synthèse avec sources donne un panorama', 'Ouvrir au moins deux sources et vérifier la date'],
                ['Question complexe avec plusieurs angles', 'Perplexity, Pro Search', 'La page de l’éditeur indique qu’il mène plusieurs recherches et propose des liens vers les sources originales', 'Plus lent ; relire les liens avant de reprendre un chiffre'],
                ['Dossier à documenter en profondeur', 'Perplexity, mode Research (Deep Research)', 'Il enchaîne de nombreuses recherches et rédige un rapport, avec un temps d’attente de quelques minutes', 'Un rapport long se relit ; il ne s’envoie pas tel quel'],
                ['Analyse d’un document interne', 'Assistant de rédaction sur compte d’entreprise', 'Le document reste dans un cadre contrôlé par l’entreprise', 'Voir la formation IA en entreprise ; ne jamais coller un document sensible dans une recherche en ligne'],
                ['Texte de loi ou norme officielle', 'Site officiel, puis Perplexity pour s’orienter', 'Seule la source officielle fait foi', 'Perplexity peut résumer ou citer de travers ; citer le texte, pas le résumé'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment vérifier une source citée par Perplexity ?',
            'intro' => 'Une source citée n’est pas une source confirmée. La formation apprend une grille de contrôle qui prend deux minutes par source et que chacun garde à côté de son poste.',
            'items' => [
                ['titre' => 'Ouvrir la page, pas seulement le lien', 'texte' => 'Le premier réflexe est de cliquer. On vérifie que la page existe, qu’elle traite bien du sujet et que la phrase ou le chiffre repris par la réponse s’y trouve réellement. Une réponse peut résumer une page de façon approximative.'],
                ['titre' => 'Chercher l’origine', 'texte' => 'Un chiffre cité par un blog vient d’une étude, d’un rapport ou d’un communiqué. On remonte à ce document d’origine : l’organisme, la date, la méthode. Si on ne le trouve pas, le chiffre sort de la note.'],
                ['titre' => 'Regarder la date', 'texte' => 'Une page de plusieurs années peut décrire une règle abrogée ou un tarif dépassé. La date de publication et la date de mise à jour comptent plus que le rang de la source dans la liste.'],
                ['titre' => 'Juger l’auteur', 'texte' => 'Administration, organisme international, éditeur du produit, presse identifiée, blog anonyme, forum : ce ne sont pas les mêmes garanties. Pour une décision, on s’appuie sur la source officielle ou sur le texte lui-même.'],
                ['titre' => 'Recouper', 'texte' => 'Une affirmation importante se retrouve dans deux sources indépendantes, ou dans une source officielle. Deux pages qui se recopient l’une l’autre ne comptent que pour une.'],
                ['titre' => 'Tenir la trace', 'texte' => 'Chaque note garde le titre de la page, l’adresse, la date de consultation et la phrase reprise. C’est ce qui permet à un collègue, dans six mois, de refaire le contrôle.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment mener une recherche approfondie sans se perdre dans le rapport ?',
            'items' => [
                ['titre' => 'Écrire la question en une phrase', 'texte' => 'Sujet, public concerné, période, pays, décision que la recherche doit éclairer. Une question floue produit un rapport long et peu utile ; on la reformule avant de lancer.', 'duree' => '15 min'],
                ['titre' => 'Choisir le mode', 'texte' => 'Une recherche rapide pour un fait, une recherche plus poussée pour une question à plusieurs angles, le mode Research pour un dossier. Le centre d’aide précise que Research lance de nombreuses recherches, lit de nombreuses sources et rédige un rapport en quelques minutes.', 'duree' => '10 min'],
                ['titre' => 'Lancer et laisser travailler', 'texte' => 'Pendant l’attente, le participant prépare ses critères de lecture : ce que le rapport doit contenir pour être utile, ce qui le rendrait suspect. Les modèles sont choisis automatiquement dans ce mode, selon l’éditeur.', 'duree' => '10 min'],
                ['titre' => 'Lire le rapport par les sources', 'texte' => 'On commence par la liste des références plutôt que par le texte. Combien de sources, de quels types, de quelles dates ? Un rapport appuyé sur trois blogs ne vaut pas un rapport appuyé sur des textes officiels.', 'duree' => '30 min'],
                ['titre' => 'Contrôler les affirmations clés', 'texte' => 'On choisit cinq affirmations qui comptent pour la décision et on les retrouve dans leur source. Une seule erreur sérieuse suffit à relire le reste avec méfiance.', 'duree' => '40 min'],
                ['titre' => 'Rédiger la note finale', 'texte' => 'Le rapport est une matière première. La note remise à la direction est écrite par la personne, avec ses références, ses réserves et sa recommandation.', 'duree' => '30 min'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment organiser sa veille et ses recherches en projets ?',
            'intro' => 'Le centre d’aide de Perplexity décrit les projets comme des espaces de travail où l’on regroupe des instructions et des fichiers pour qu’ils s’appliquent à toutes les recherches du projet. La formation en tire une organisation simple pour une équipe.',
            'items' => [
                ['titre' => 'Un projet par sujet de veille', 'texte' => 'Réglementation du secteur, concurrents, financements, actualité d’un pays. Chaque projet a un nom clair et regroupe ses recherches, au lieu de les disperser dans un historique unique.'],
                ['titre' => 'Des instructions permanentes courtes', 'texte' => 'Le métier du lecteur, la zone géographique, le niveau de détail, la langue, les types de sources à privilégier, ce qu’il ne faut jamais faire (citer un forum comme preuve). Quelques lignes, testées sur trois questions avant d’être partagées.'],
                ['titre' => 'Des fichiers de référence', 'texte' => 'Glossaire du métier, liste de concurrents, cahier des charges, charte de ton. Le centre d’aide indique que les fichiers déposés dans un projet restent jusqu’à ce que l’utilisateur les supprime ; il faut donc un responsable qui retire les documents périmés.'],
                ['titre' => 'Des droits clairs', 'texte' => 'Un projet peut être partagé avec des personnes invitées, avec un rôle de lecture ou de modification. On décide qui modifie les instructions, car elles orientent toutes les recherches. Les conditions de partage selon la formule se lisent sur la page de l’éditeur.'],
                ['titre' => 'Un rythme de veille', 'texte' => 'Une fréquence (chaque semaine, chaque mois), un jour, une personne qui lance les recherches types et une note courte qui circule. Sans responsable ni calendrier, une veille s’arrête au bout de deux semaines.'],
                ['titre' => 'Une archive des notes', 'texte' => 'Une fois validées, les notes sont classées dans l’espace documentaire de l’entreprise, et pas uniquement dans l’historique de l’outil. Elles survivent à un changement de compte ou de collaborateur.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se passent les deux jours : effectifs, exercices, documents remis, après-session ?',
            'intro' => 'Le matériel de travail, ce sont les vraies questions de recherche de l’équipe, jamais des cas de démonstration.',
            'items' => [
                ['titre' => 'Avant la session', 'texte' => 'Un entretien de cadrage identifie les recherches visées, ce dont vous disposez déjà et les règles à poser sur les données. Il arrive qu’il en ressorte qu’un atelier plus court suffira.'],
                ['titre' => 'Des effectifs limités', 'texte' => 'Le plafond est de dix personnes pour les deux jours, douze pour l’atelier découverte et huit en séances à distance. Au-delà, relire les questions et les sources de chacun devient impossible.'],
                ['titre' => 'Mise en pratique', 'texte' => 'On passe l’essentiel du temps à chercher, sur ses propres sujets. Après chaque démonstration vient un exercice en solo, puis un échange à deux : chacun reprend les pages sources de son voisin pour les contrôler.'],
                ['titre' => 'Documents remis', 'texte' => 'Programme et supports de la session, grille de contrôle des sources, bibliothèque de questions classées par métier, fiches de tâches complétées en séance et liste des règles de données propres à l’entreprise.'],
                ['titre' => 'Validation des acquis', 'texte' => 'En autonomie, chaque participant mène sa tâche cible de la question jusqu’à la note contrôlée. Il reçoit ensuite une attestation nominative ; ce n’est ni un diplôme ni une certification de l’éditeur.'],
                ['titre' => 'Après la session', 'texte' => 'Pendant les quatre semaines suivantes, un canal direct répond aux questions d’application sans supplément. Pour étendre l’usage à d’autres recherches, un accompagnement mensuel est possible, sur devis.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils et quelles fonctions de Perplexity la formation utilise-t-elle ?',
            'legende' => 'Fonctions décrites par le centre d’aide de Perplexity, consulté le 26 octobre 2026. Les formules, les limites d’utilisation et les noms de fonctions évoluent ; la page officielle de l’éditeur fait foi, et aucun prix n’est repris ici.',
            'entetes' => ['Fonction', 'Ce que décrit l’éditeur', 'Usage en formation', 'À savoir'],
            'lignes'  => [
                ['Recherche rapide', 'Réponses rapides, avec des citations de base', 'Faits simples, première orientation', 'Ouvrir les sources pour tout ce qui sert à décider'],
                ['Pro Search', 'Plusieurs recherches, synthèse organisée, liens vers les sources, choix du modèle et de la source de recherche', 'Questions complexes, comparaisons', 'Plus lent ; l’accès dépend de la formule'],
                ['Research (Deep Research)', 'Nombreuses recherches et lectures, rapport exportable en PDF ou en document, convertible en page partageable', 'Dossiers documentaires, veille de fond', 'Les limites se renouvellent selon une fenêtre glissante, d’après l’éditeur ; leurs valeurs changent'],
                ['Projets', 'Instructions, fichiers et recherches regroupés, partage avec des personnes invitées', 'Veille par sujet, bibliothèque de l’équipe', 'Les capacités de partage varient selon la formule'],
                ['Fichiers joints', 'Texte, PDF, images, audio et vidéo ; les fichiers longs sont résumés en extrayant les parties importantes', 'Croiser un document interne avec le web', 'Taille maximale par fichier fixée par l’éditeur ; conservation limitée dans le temps'],
                ['Pages', 'Rapport de recherche convertible en page partageable', 'Remettre une synthèse lisible', 'Vérifier qui peut voir la page avant de la partager'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que deviennent les données saisies dans Perplexity ?',
            'paragraphes' => [
                'Une recherche est une donnée. Selon le centre d’aide de Perplexity, l’éditeur collecte des données liées à l’appareil et aux interactions, et indique que les requêtes et les retours des utilisateurs peuvent servir à améliorer les modèles ; la même page explique que l’on peut s’y opposer en désactivant l’option « AI Data Usage » dans les paramètres du profil. La formation fait ouvrir ce réglage à chaque participant et le fait décider en équipe.',
                'Pour les fichiers joints à une recherche, la page consacrée à la sécurité indique qu’ils servent à personnaliser les réponses et qu’ils sont conservés 30 jours, avec une durée plus courte pour certaines formules d’entreprise ; supprimer une conversation supprime aussi les fichiers qui y sont attachés. Une conversation rendue publique par lien expose ses fichiers à toute personne qui l’ouvre. Ces durées sont celles de l’éditeur à la date de consultation : elles peuvent changer, et le texte officiel prévaut.',
                'Concernant les modèles de tiers, l’éditeur affirme que ses contrats avec les fournisseurs de modèles interdisent d’utiliser les données de Perplexity pour entraîner leurs propres modèles. Une garantie contractuelle annoncée par l’éditeur n’est pas une vérification indépendante : l’entreprise qui traite des données sensibles lit les conditions de sa formule professionnelle et décide d’après elles.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelles informations ne faut-il jamais taper dans une recherche ?',
            'items' => [
                'Le nom, le téléphone, l’adresse ou la situation d’un client, d’un patient, d’un élève ou d’un bénéficiaire.',
                'Un contrat, une offre commerciale ou une grille de prix qui n’est pas publique.',
                'Des identifiants, des mots de passe, des numéros de compte ou de carte.',
                'Un dossier juridique ou disciplinaire concernant une personne nommée.',
                'Des informations stratégiques non annoncées (fusion, levée de fonds, recrutement).',
                'Tout document classé « jamais » dans le classement de l’entreprise.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles sont les limites de Perplexity, et comment les gérer ?',
            'intro' => 'Un moteur de réponse peut se tromper de plusieurs façons. La formation les nomme, pour qu’on les reconnaisse quand elles se présentent.',
            'items' => [
                ['titre' => 'Une source mal résumée', 'texte' => 'La page existe, mais elle ne dit pas exactement ce que la réponse lui prête. Parade : lire la phrase dans la page, pas dans la réponse.'],
                ['titre' => 'Une source de mauvaise qualité', 'texte' => 'Le moteur peut s’appuyer sur un forum, un blog ou un site de relais. Parade : fixer dans les instructions de projet les types de sources à privilégier, et remonter à l’origine.'],
                ['titre' => 'Une information ancienne', 'texte' => 'Un tarif, un taux, une règle ou une adresse changent. Parade : exiger la date de chaque source, et revérifier ce qui a plus d’un an.'],
                ['titre' => 'Un sujet peu documenté en ligne', 'texte' => 'Un marché local, une petite entreprise ou une réglementation récente d’un pays d’Afrique peuvent avoir peu de pages publiées. Une réponse fluide sur un sujet pauvre en sources doit éveiller la méfiance. Parade : chercher sur les sites des institutions nationales et demander à un professionnel local.'],
                ['titre' => 'Un rapport long qui paraît complet', 'texte' => 'La présentation soignée d’un rapport de recherche approfondie rassure. Le style soigné d’un rapport ne prouve pas que chaque affirmation est exacte. Parade : contrôler les cinq affirmations clés.'],
                ['titre' => 'Une question trop vague', 'texte' => 'Une question sans période ni pays donne une réponse générale, souvent américaine ou européenne. Parade : toujours préciser le pays, la langue et la date.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Dans quels métiers et quels pays cette formation trouve-t-elle son usage ?',
            'items' => [
                ['secteur' => 'Cabinet juridique ou conseil, à Cotonou, Abidjan ou Dakar', 'probleme' => 'Les clients demandent ce que dit la réglementation d’un pays voisin, les textes sont dispersés sur plusieurs sites officiels et le temps de recherche n’est jamais facturé.', 'solution' => 'Les juristes apprennent à utiliser Perplexity pour s’orienter, puis à ouvrir le texte officiel lui-même et à citer l’article, pas le résumé. Aucun nom de client n’est saisi ; la note finale reste signée et relue par le professionnel.'],
                ['secteur' => 'Organisations non gouvernementales et programmes financés, Afrique de l’Ouest et centrale', 'probleme' => 'Il faut dénicher des appels à propositions, rassembler des données de contexte par pays et sourcer les rapports, en ayant très peu d’heures à y consacrer.', 'solution' => 'Chaque bailleur ou programme a son projet, avec mots-clés et sources officielles ; toute donnée de contexte est retrouvée à sa source avant de figurer dans un rapport. Rien sur les bénéficiaires n’est tapé dans une recherche.'],
                ['secteur' => 'Commerce, import-export et distribution, à Lomé, Douala ou Cotonou', 'probleme' => 'Il faut trouver des fournisseurs, comparer des références et suivre la réglementation douanière ou les évolutions d’un marché.', 'solution' => 'Questions précises avec pays, produit et date, tableaux comparatifs avec liens des fabricants, vérification des conditions sur les fiches officielles, puis note de veille hebdomadaire courte pour la direction.'],
                ['secteur' => 'Petite structure ou cabinet en France, Belgique ou Suisse', 'probleme' => 'La direction souhaite suivre un secteur, ses concurrents et ses appels d’offres, mais nul ne peut lire cinquante pages par semaine ; de plus, le RGPD couvre les données des clients.', 'solution' => 'Formation en visioconférence, un projet de veille par thème, consignes écrites sur ce qui peut être tapé dans une recherche, et une note hebdomadaire qui indique ses sources et leur date de consultation.'],
                ['secteur' => 'Entreprise ou organisme public au Canada', 'probleme' => 'Les équipes cherchent des sources en français et en anglais, parfois sur des sujets traités surtout dans l’autre langue.', 'solution' => 'Questions posées dans les deux langues, comparaison des réponses, citation des sources dans leur langue d’origine et traduction relue par un locuteur du métier.'],
                ['secteur' => 'Écoles, universités et centres de formation', 'probleme' => 'Les enseignants et les responsables pédagogiques préparent des cours et des dossiers à partir de sources en ligne dont ils ne mesurent pas toujours la fiabilité.', 'solution' => 'Grille de vérification des sources appliquée aux supports de cours, recherche de ressources officielles, aucune donnée d’élève saisie dans l’outil.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Atelier, formation complète, distance ou accompagnement : quel format choisir ?',
            'legende' => 'Rien n’empêche d’enchaîner : atelier découverte puis formation complète avec une équipe pilote, ou formation complète prolongée par l’accompagnement mensuel.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Équipe novice face aux moteurs de réponse, ou direction qui préfère voir l’outil avant de s’engager'],
                ['Formation complète, intra', 'Deux jours, soit quatre demi-journées', 'Dix personnes maximum, réunies par métier', 'Équipe qui recherche ou surveille un sujet toutes les semaines et veut une méthode partagée'],
                ['Session mutualisée, inter', 'Une à deux journées', 'Organisations issues d’un même réseau', 'Un ou deux représentants par organisation, avec des questions publiques ou inventées pour l’occasion'],
                ['À distance', 'Cinq ou six séances de 2 h 30', 'Huit personnes maximum', 'Collaborateurs dispersés entre sites ou pays, qui suivent plus facilement des séances brèves en visio'],
                ['Hybride', 'Une journée en salle, puis séances à distance', 'Dix personnes maximum', 'Démarrage en présentiel, puis entraînement à distance sur les tâches de veille'],
                ['Accompagnement mensuel', 'Une demi-journée mensuelle, trois mois durant', 'Le groupe déjà formé', 'Installer une veille régulière et élargir l’usage à de nouvelles recherches'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Quel est le tarif de la formation Perplexity, et quels moyens de paiement ?',
            'intro'      => 'Aucun tarif public : un devis détaillé poste par poste suit l’entretien de cadrage. Paiement possible par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Si vous souscrivez à Perplexity, l’abonnement reste à votre nom et n’entre pas dans ce montant ; formules et limites évoluent, la page de l’éditeur fait foi.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée sur vos questions', 'Premiers gestes de recherche et de vérification', 'Socle de règles sur les données', 'Conseil sur la suite à donner']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées de travail', 'Exercices sur vos questions de recherche', 'Projets, recherche approfondie et bibliothèque de questions', 'Contrôle sur la tâche cible, puis attestation']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis', 'inclus' => ['Trois demi-journées, une par mois', 'Revue des veilles en cours', 'Tâches nouvelles et ajustements', 'Compte rendu écrit au troisième mois']],
            ],
            'variations' => [
                'Combien de participants, répartis en combien de groupes.',
                'Le format choisi et le nombre de demi-journées qu’il suppose.',
                'Le travail de préparation des exercices à partir de vos questions, y compris leur reformulation.',
                'L’endroit : chez vous, dans une salle louée, ou un déplacement au-delà de Cotonou, voire du Bénin.',
                'Présentiel, visioconférence ou formule mixte.',
                'Un suivi prévu après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il prendre en charge la session ?',
            'paragraphes' => [
                'Tout varie selon le dispositif et votre situation ; rien n’est garanti. Des fonds existent pour la formation continue du secteur privé : FDFP en Côte d’Ivoire, 3FPT au Sénégal, FODEFCA au Bénin, opérateurs de compétences (OPCO) en France. Chacun impose ses propres conditions, formulaires et attentes vis-à-vis de l’organisme de formation.',
                'Avant de signer, écrivez au fonds en joignant programme et devis. Richard SALANON n’affiche ni certification de qualité ni agrément reconnu par ces fonds : à l’entreprise de vérifier si une prise en charge demeure envisageable, et de bâtir son budget sans elle si la décision en dépend. Programme, feuilles de présence et attestation, remis à l’issue de la session, restent utiles dans tous les cas.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui est responsable de ce que Perplexity a affirmé ?',
            'texte' => 'Toujours l’entreprise, et la personne qui s’appuie sur la réponse. Une note qui cite une source inexistante ou un chiffre déformé engage celui qui la signe, comme s’il avait fait l’erreur seul. L’histoire d’<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> rappelle qu’une entreprise répond de ce que dit son assistant. La formation fait de la vérification des sources un geste obligatoire avant tout envoi, toute décision et toute citation.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels dérapages guettent l’équipe une fois la formation terminée ?',
            'intro' => 'Le vrai test a lieu quatre semaines après : que fait encore l’équipe de ce qu’elle a appris ? Voici les dérapages fréquents avec Perplexity, que l’on désamorce dès la session.',
            'items' => [
                ['titre' => 'Ne plus ouvrir les sources', 'texte' => 'Au bout de quelques semaines, les réponses paraissent fiables et on cesse de cliquer. La grille de vérification reste affichée, et les notes sont relues par une autre personne.'],
                ['titre' => 'Citer Perplexity au lieu de la source', 'texte' => 'Une note qui écrit « selon Perplexity » n’a aucune valeur de preuve. On cite la page d’origine, son auteur et sa date.'],
                ['titre' => 'Taper des données sensibles dans une recherche', 'texte' => 'Sous la pression d’un délai, on colle un nom de client ou un extrait de contrat. La règle écrite en trois familles sert à décider vite.'],
                ['titre' => 'Lancer une recherche approfondie pour tout', 'texte' => 'Elle prend du temps et produit un long rapport à relire. Pour un fait simple, une recherche rapide et deux sources suffisent.'],
                ['titre' => 'Laisser les instructions de projet grossir', 'texte' => 'Chaque membre y glisse sa consigne et le tout finit par se contredire. Une personne désignée reprend le texte à chaque trimestre.'],
                ['titre' => 'Partager un résultat sans réfléchir', 'texte' => 'Une conversation rendue publique par lien est visible de toute personne qui l’ouvre, fichiers joints compris. On partage avec des personnes nommées, et on retire le lien quand il n’a plus d’utilité.'],
                ['titre' => 'Se fier à une seule formule ou à un seul outil', 'texte' => 'Les fonctions, les noms et les limites changent. La méthode (question précise, sources vérifiées, note rédigée par une personne) reste valable quel que soit l’outil.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'Perplexity ne fonctionne qu’en ligne, et une recherche approfondie demande une connexion stable pendant plusieurs minutes. Une connexion peut couper ou ralentir. Les documents d’exercice sont téléchargés sur chaque poste avant la session, les résultats importants sont sauvegardés dans les dossiers de l’entreprise, et un plan B est prévu si la ligne tombe.',
                'La langue compte autant. La présence d’un sujet sur le web n’est pas la même en français, en anglais ou dans une langue africaine, et un sujet très local est souvent mieux documenté sur un site institutionnel que dans la presse en ligne. Les participants apprennent à poser la même question en français et en anglais quand le sujet le justifie, à préciser le pays dans la question, et à faire relire par un locuteur du métier tout texte dans une langue nationale.',
                'Côté béninois, les données personnelles relèvent de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> ; une recherche ou un fichier transmis à un service hébergé à l’étranger constitue un traitement soumis à ce cadre. D’où la règle interne : elle liste ce qui peut sortir et ce qui reste en dedans, et si l’on hésite, mieux vaut interroger l’autorité compétente. Cette page ne tient pas lieu d’avis juridique ; le texte complet est consultable chez le Secrétariat général du Gouvernement.',
                'En Europe, le RGPD s’applique aux mêmes gestes. La <a href="https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en">Commission européenne</a> rappelle que sont des données personnelles celles qui concernent une personne identifiée ou identifiable, que des données seulement pseudonymisées restent soumises au règlement et que l’anonymisation doit être irréversible. Remplacer un nom par un code dans une recherche ne suffit donc pas toujours : la formation apprend à retirer ce qui permet de reconnaître la personne. Pour aller plus loin, voyez la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à Perplexity avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Perplexity figure parmi les outils d’IA qu’il enseigne, et il intègre l’IA dans les logiciels de ses clients. On lui doit <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et il co-fonde <a href="https://audyxa.com">Audyxa</a>. Son bilan : plus de ' . $ans . ' ans d’expérience, plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées, et un passage par EPITECH en 2022.',
                'Quatre principes guident la session : des exercices bâtis sur vos questions, un contrôle final sur une tâche réelle, des supports qui restent chez vous, et aucune économie de temps annoncée d’avance. Aucun éditeur ne l’a certifié et il ne représente pas Perplexity : l’outil est enseigné comme un produit du marché, et le cadrage peut aboutir à recommander une formation plus courte. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a> ; les pays couverts sont listés dans les <a href="/zones/">zones d’intervention</a>.',
                'Si votre besoin dépasse la recherche d’information, par exemple relier l’IA à vos documents internes ou à vos logiciels, il s’agit plutôt d’une mission d’<a href="/services/integration-ia-entreprise">intégration de l’IA en entreprise</a>. Les autres formations du domaine sont rassemblées sur la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d’inscrire votre équipe ?',
            'texte' => 'Retenez deux ou trois recherches concrètes par groupe et travaillez sur vos propres questions. Triez les informations avant le premier exercice, ouvrez les sources de toute réponse qui compte, et faites relire la note par quelqu’un qui connaît le sujet. L’offre de l’éditeur bouge : consultez sa page officielle le jour où vous décidez.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe à la recherche et à la veille avec Perplexity ?',
            'texte'  => 'Décrivez en quelques lignes l’effectif, les postes, les recherches les plus chronophages, l’outillage existant et le format envisagé. Réponse sous 24 heures, suivie d’une proposition et d’un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation Perplexity'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il des connaissances techniques pour suivre la formation ?', 'r' => 'Non. On dialogue avec Perplexity en français, à l’écrit. Ce qui compte, c’est de formuler une question précise et de contrôler les sources, deux savoir-faire qui viennent en s’exerçant sur ses propres recherches.'],
        ['q' => 'Perplexity remplace-t-il Google ou un moteur de recherche classique ?', 'r' => 'Non, il le complète. Un moteur de réponse rédige une synthèse avec des sources, un moteur classique reste préférable pour retrouver un site ou un document précis. La formation fait comparer les deux sur vos questions.'],
        ['q' => 'Peut-on se fier aux sources que Perplexity cite ?', 'r' => 'Pas sans les ouvrir. L’éditeur dit viser l’exactitude et invite à revérifier les sources. La formation apprend une grille de contrôle : la page existe-t-elle, dit-elle ce que la réponse lui prête, de quand date-t-elle, quelle est l’origine du chiffre.'],
        ['q' => 'Qu’est-ce que la recherche approfondie, et quand l’utiliser ?', 'r' => 'C’est un mode (Research ou Deep Research) qui, selon l’éditeur, enchaîne de nombreuses recherches et rédige un rapport en quelques minutes. Il sert aux dossiers documentaires ; pour un fait simple, une recherche rapide suffit.'],
        ['q' => 'Faut-il acheter un abonnement avant la session ?', 'r' => 'Non. Un compte gratuit suffit pour apprendre la méthode, avec ses limites. Les formules et leurs limites évoluent ; la page officielle de l’éditeur fait foi, et l’abonnement se décide après la formation, au nom de l’entreprise.'],
        ['q' => 'Nos documents sont confidentiels : est-ce compatible ?', 'r' => 'Oui, à condition de poser des règles. Avant la séance, on trie vos informations en trois familles : celles qu’on peut saisir dans une recherche, celles qu’on anonymise d’abord et celles qui ne quittent jamais l’entreprise. Les exercices reposent sur des questions publiques ou reformulées.'],
        ['q' => 'Perplexity utilise-t-il nos recherches pour entraîner ses modèles ?', 'r' => 'Selon son centre d’aide, les requêtes peuvent servir à améliorer les modèles, et une option des paramètres du profil permet de s’y opposer. La formation fait vérifier ce réglage compte par compte.'],
        ['q' => 'La formation couvre-t-elle aussi ChatGPT, Claude ou Gemini ?', 'r' => 'Non, elle se concentre sur Perplexity. L’usage quotidien des assistants de rédaction est traité dans la formation IA en entreprise ; un comparatif aide à choisir entre assistants.'],
        ['q' => 'Quel est l’effectif d’un groupe ?', 'r' => 'Le plafond est de dix pour les deux jours, douze pour l’atelier découverte et huit pour une séance à distance.'],
        ['q' => 'Peut-on tout suivre en visioconférence ?', 'r' => 'Oui : cinq à six séances de deux heures et demie, écran partagé. Chaque participant doit disposer d’une connexion stable, et un plan B est prévu si elle lâche.'],
        ['q' => 'Quel budget prévoir ?', 'r' => 'Le tarif s’établit sur devis une fois l’échange de cadrage passé ; il varie avec l’effectif, le format, la préparation des exercices, le lieu et le suivi. Paiement par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Un fonds de formation peut-il financer la session ?', 'r' => 'Selon les règles de chaque fonds, sans aucune garantie. Richard SALANON n’affiche ni certification de qualité ni agrément ; écrivez au fonds avant de signer, en joignant programme et devis.'],
        ['q' => 'Richard SALANON est-il certifié par Perplexity ?', 'r' => 'Non. Aucun éditeur ne l’a certifié et il ne représente pas Perplexity : l’outil est enseigné comme un produit du marché, à partir des questions et des comptes de l’entreprise.'],
        ['q' => 'Que remet-on à la fin ?', 'r' => 'Chaque participant repart avec une attestation à son nom. Elle ne vaut ni diplôme ni certification de l’éditeur.'],
    ],

    'sources' => [
        ['titre' => 'Centre d’aide de Perplexity, What is an answer engine, and how does Perplexity work as one?', 'url' => 'https://www.perplexity.ai/help-center/en/articles/10354917-what-is-an-answer-engine-and-how-does-perplexity-work-as-one', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Perplexity, What is Pro Search?', 'url' => 'https://www.perplexity.ai/help-center/en/articles/10352903-what-is-pro-search', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Perplexity, What is Research mode?', 'url' => 'https://www.perplexity.ai/help-center/en/articles/10738684-what-is-research-mode', 'date' => '2026-10-26'],
        ['titre' => 'Perplexity, Introducing Perplexity Deep Research', 'url' => 'https://www.perplexity.ai/hub/blog/introducing-perplexity-deep-research', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Perplexity, What are Projects?', 'url' => 'https://www.perplexity.ai/help-center/en/articles/10352961-what-are-spaces', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Perplexity, File Uploads', 'url' => 'https://www.perplexity.ai/help-center/en/articles/10354807-file-uploads', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Perplexity, Security and Privacy with File Uploads', 'url' => 'https://www.perplexity.ai/help-center/en/articles/10354810-security-and-privacy-with-file-uploads', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Perplexity, What data does Perplexity collect about me?', 'url' => 'https://www.perplexity.ai/help-center/en/articles/10354855-what-data-does-perplexity-collect-about-me', 'date' => '2026-10-26'],
        ['titre' => 'Centre d’aide de Perplexity, Are third-party model providers training on my data?', 'url' => 'https://www.perplexity.ai/help-center/en/articles/10354963-are-third-party-model-providers-training-on-my-data', 'date' => '2026-10-26'],
        ['titre' => 'Commission européenne, la protection des données expliquée (RGPD)', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'prompt-engineering', 'rag-chatbot-documents', 'ia-ethique-conformite', 'ia-generative-dirigeants', 'agents-ia-assistants'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
