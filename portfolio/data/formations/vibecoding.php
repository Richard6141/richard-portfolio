<?php
// ============================================================
// data/formations/vibecoding.php · Fiche formation « Vibecoding : coder avec
// Claude, Cursor, Copilot » (vague 1B, lot A, domaine développement).
// Reprend l'ancienne page /formation-vibecoding (quatre modules, atelier d'une
// demi-journée ou formation de deux jours, dix participants au plus, projet
// support de chaque participant, revue croisée, livrables) ; son prix est ignoré.
// Angle propre : apprendre à développer avec des assistants de code sans
// produire du code jetable (cadrage, revue, tests). La prestation de
// développement relève du pilier /services/vibe-coding, jamais repris ici.
// Sources consultées le 05/10/2026 (tarifs des éditeurs, documentations,
// DORA, Stack Overflow, UIT, CNIL, fonds de formation).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation vibecoding : coder avec Claude, Cursor et Copilot, puis livrer un code relu, testé et versionné',
    'title'   => 'Formation vibecoding : coder avec l\'IA | Richard SALANON',
    'meta'    => 'Formation vibecoding sur votre propre projet : cadrer, faire écrire le code par Claude, Cursor ou Copilot, le relire, le tester et le mettre en ligne.',
    'en_bref' => 'Une formation pratique pour apprendre à construire une application avec des assistants de code (Claude Code, Cursor, GitHub Copilot, ChatGPT) sans fabriquer du code jetable : cadrer avant de générer, relire, tester, versionner et mettre en ligne. Elle s\'adresse aux développeurs, aux porteurs de projet, aux équipes métier et aux personnes en reconversion, chacun travaillant sur son propre projet. Elle dure deux jours, en quatre demi-journées, ou une demi-journée en atelier découverte, en intra, en inter, à distance ou en formule hybride, avec dix participants au plus. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'developpement',
    'forte'   => true,
    'duree'   => '2 jours (4 demi-journées), ou atelier découverte d\'une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : les outils, leurs différences et un poste de travail propre',
            'duree'  => '3 h 30',
            'points' => [
                'Ce que font réellement Claude Code, Cursor, GitHub Copilot et ChatGPT : compléter une ligne, discuter d\'un fichier, ou agir dans tout le dépôt.',
                'Lequel choisir selon le point de départ : page blanche, code existant, dépôt déjà hébergé sur GitHub.',
                'Installation vérifiée sur chaque poste : éditeur, Git, compte de l\'assistant, dépôt du projet support créé au nom du participant.',
                'Premier aller-retour complet : une demande courte, une modification proposée, la différence lue ligne par ligne, puis acceptée ou refusée.',
                'Les permissions de l\'agent : ce qu\'il peut lire, modifier ou exécuter sans demander, et pourquoi on commence en mode manuel.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : spécifier avant de générer',
            'duree'  => '3 h 30',
            'points' => [
                'Transformer le besoin flou du participant en fiche d\'une page : utilisateurs, parcours, données, et surtout ce qui doit rester interdit.',
                'Découper en tâches vérifiables, une fonctionnalité à la fois, chacune avec son critère de réussite écrit à l\'avance.',
                'Le fichier de consignes du projet (CLAUDE.md, AGENTS.md, règles de Cursor, instructions de Copilot) : quoi y mettre, quoi en retirer.',
                'Explorer, planifier, puis seulement coder : faire lire le code et proposer un plan avant toute modification.',
                'Exercice : construire la première fonctionnalité du projet support et la valider contre son critère.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : relire, tester, corriger',
            'duree'  => '3 h 30',
            'points' => [
                'Lire une différence générée : ce qui a changé, ce qui n\'aurait pas dû changer, ce qui manque.',
                'Les défauts classiques du code produit par un assistant : saisies non validées, secrets en clair, dépendances inutiles ou inventées, code mort, contrôles faits seulement dans l\'interface.',
                'Faire écrire les tests par l\'assistant, puis les vérifier autrement : un test qui ne peut pas échouer ne prouve rien.',
                'Corriger sans tourner en rond : au deuxième échec sur le même problème, on repart d\'une session propre avec une consigne réécrite.',
                'Revue croisée : chaque participant relit le code généré d\'un autre et rédige trois remarques précises.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : du prototype à la production',
            'duree'  => '3 h 30',
            'points' => [
                'Versionnage avec Git : branches, messages de commit lisibles, retour arrière quand l\'assistant a tout cassé.',
                'Secrets dans des variables d\'environnement, protection à l\'envoi activée, fichier .env jamais publié.',
                'Mise en ligne réelle : hébergement, nom de domaine, certificat, sauvegarde testée par une restauration.',
                'La liste de contrôle avant mise en production, appliquée au projet de chaque participant.',
                'Situer son projet : ce qui peut continuer en autonomie, et ce qui doit être relu par un développeur expérimenté avant d\'accueillir de vrais utilisateurs.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou atelier découverte d\'une demi-journée'],
        ['l' => 'Public', 'v' => 'Développeurs, porteurs de projet, équipes métier, étudiants et personnes en reconversion'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride ; dix participants au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et que ne couvre-t-elle pas ?',
            'paragraphes' => [
                'Le mot « vibecoding » vient d\'Andrej Karpathy, qui l\'a lancé en février 2025 pour décrire une pratique où l\'on décrit ce que l\'on veut à une IA, où l\'on accepte ses modifications sans les lire et où l\'on finit par oublier que le code existe. Il la réservait lui-même aux projets jetables du week-end. Cette formation part de ce constat et enseigne l\'inverse : garder la vitesse de l\'assistant, mais rester l\'auteur responsable de ce qui est livré. On y apprend moins à taper des consignes qu\'à conduire un projet : spécifier, faire produire, relire, tester, corriger, recommencer.',
                'À la fin des deux jours, chaque participant sait faire cinq choses, vérifiées sur son propre projet. Écrire une fiche d\'une page qui décrit les utilisateurs, les parcours et les interdits de son application. Découper cette fiche en tâches courtes, chacune avec un critère de réussite. Faire produire le code par un assistant dans un dépôt Git, en lisant chaque différence avant de l\'accepter. Repérer dans un code généré les cinq défauts les plus fréquents et les faire corriger. Mettre en ligne une version qui tourne ailleurs que sur son ordinateur, avec ses secrets protégés et une sauvegarde restaurée au moins une fois.',
                'La formation ne couvre pas tout. Elle n\'enseigne pas les bases du web : quelqu\'un qui veut comprendre HTML, CSS, PHP et MySQL ligne par ligne trouvera ce socle dans la <a href="/formations/developpement-web">formation au développement web</a>, qui se combine bien avec celle-ci. Elle n\'apprend pas un framework en profondeur, ni la publication d\'une application mobile dans les magasins. Elle ne livre pas non plus une application terminée à votre place : si c\'est un résultat qu\'il vous faut, un prototype ou la reprise d\'un code généré, c\'est le rôle de la prestation de <a href="/services/vibe-coding">développement en vibe coding</a>.',
                'Elle ne fait pas davantage de promesse sur la vitesse. Un prototype construit en deux jours reste un prototype. Un module entier est consacré à ce qui sépare une démonstration convaincante d\'un outil que l\'on peut confier à de vrais utilisateurs, avec leurs données, et la formation dit clairement quand un projet dépasse ce que l\'on peut tenir seul.',
                'Le développement assisté par l\'IA réussit bien sur les applications de gestion, les sites, les tableaux de bord et les petits utilitaires : des problèmes balisés, dont les modèles ont vu des milliers d\'exemples. Il reste fragile sur les systèmes à forte charge, le temps réel, les exigences de sécurité élevées et les logiques métier très particulières. Il ne remplace pas non plus la connaissance du métier : l\'outil d\'une pharmacie encode des règles de péremption, celui d\'un transitaire des régimes douaniers, et l\'assistant applique ce qu\'on lui décrit, erreurs comprises. Les participants qui progressent le plus sont ceux qui connaissent leur métier à fond et apprennent à le décrire précisément.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'Le groupe est composé après un premier échange, pour que les niveaux restent proches. Chaque participant vient avec un vrai besoin : c\'est sur ce projet que l\'on travaille, pas sur un exercice inventé.',
            'items' => [
                ['titre' => 'Développeurs et équipes techniques', 'texte' => 'Ils veulent intégrer ces outils sans dégrader la qualité de leur base de code. Pour eux, la formation insiste sur les fichiers de consignes partagés, la revue des différences, les tests et les règles d\'équipe sur ce que l\'agent peut faire seul.'],
                ['titre' => 'Entrepreneurs et porteurs de projet', 'texte' => 'Ils veulent construire un premier outil, un tableau de bord ou un site sans recruter tout de suite. Ils passent plus de temps sur la spécification et sur la lecture du code, et apprennent à reconnaître le moment où il faut faire appel à un développeur.'],
                ['titre' => 'Équipes métier outillées', 'texte' => 'Comptabilité, logistique, ressources humaines, commerce : des personnes qui connaissent leurs règles mieux que personne et veulent bâtir leurs petits utilitaires internes plutôt que d\'attendre le service informatique.'],
                ['titre' => 'Étudiants et personnes en reconversion', 'texte' => 'Ils apprennent le développement par la pratique, avec l\'IA comme accélérateur et non comme béquille. La revue croisée et l\'obligation d\'expliquer chaque modification les obligent à comprendre ce qu\'ils acceptent.'],
                ['titre' => 'Prérequis', 'texte' => 'Savoir coder n\'est pas exigé, mais le parcours diffère : un développeur ira plus vite sur la partie production, un débutant complet passera plus de temps à lire le code généré. Il faut être à l\'aise avec un ordinateur, l\'installation d\'un logiciel et la gestion de fichiers.'],
                ['titre' => 'Matériel', 'texte' => 'Un ordinateur portable personnel ou professionnel avec droits d\'installation, une connexion stable, un compte GitHub et un compte sur l\'assistant retenu. Les formules gratuites suffisent pour une partie des exercices ; la liste précise et les liens arrivent une semaine avant la session.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices font les participants sur leur propre projet ?',
            'items' => [
                ['titre' => 'Choisir et cadrer le projet support', 'duree' => 'Avant la session, puis 45 minutes le premier jour', 'texte' => 'Un outil de stock et de caisse, un portail de commandes, un tableau de bord, un site vitrine, un générateur de reçus : chacun arrive avec un besoin réel de son activité. On réduit ce besoin à trois parcours au plus, assez petits pour être en ligne à la fin du deuxième jour.'],
                ['titre' => 'Rédiger la fiche du projet', 'duree' => '1 heure', 'texte' => 'Qui se connecte, ce qu\'il voit, ce qu\'il peut modifier, ce qui doit lui être refusé, quelles données sont stockées. La fiche est relue par un autre participant, qui cherche ce qui est ambigu : chaque phrase floue deviendra une décision prise par l\'assistant à votre place.'],
                ['titre' => 'Écrire le fichier de consignes', 'duree' => '30 minutes', 'texte' => 'Langage, framework, commandes de test, conventions de nommage, dossiers à ne jamais toucher. Le fichier reste court : on retire toute ligne dont l\'absence ne changerait rien au comportement de l\'assistant.'],
                ['titre' => 'Générer une fonctionnalité à la fois', 'duree' => 'Par blocs de 45 minutes', 'texte' => 'Plan demandé d\'abord, code ensuite, différence lue avant d\'accepter, commit après chaque étape validée. Le formateur passe sur chaque poste et demande au participant d\'expliquer la dernière modification acceptée.'],
                ['titre' => 'Casser volontairement', 'duree' => '30 minutes', 'texte' => 'Saisir une valeur absurde, ouvrir une page sans être connecté, demander les données d\'un autre utilisateur. Chaque faille trouvée devient un test, puis une correction demandée à l\'assistant et vérifiée par le test.'],
                ['titre' => 'Revue croisée', 'duree' => '1 heure', 'texte' => 'Les participants échangent leurs dépôts et relisent le code généré des autres. C\'est l\'exercice qui ancre le réflexe le plus important : ne jamais déployer ce qu\'on n\'a pas lu, et savoir expliquer chaque ligne que l\'on a acceptée.'],
                ['titre' => 'Mise en ligne et liste de contrôle', 'duree' => '1 h 30', 'texte' => 'Le projet part sur un hébergement réel, avec un nom de domaine ou une adresse de démonstration. La liste de contrôle est cochée ligne par ligne, et ce qui reste ouvert est écrit noir sur blanc dans le dépôt.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée, et que se passe-t-il après ?',
            'intro' => 'La méthode est celle d\'un atelier, pas d\'une conférence : peu de diapositives, beaucoup de temps sur le poste de chacun, et une règle commune à tous les exercices.',
            'items' => [
                ['titre' => 'Dix participants au plus', 'texte' => 'La pratique guidée exige que le formateur passe sur chaque écran plusieurs fois par demi-journée. Au-delà d\'une dizaine de postes, ce n\'est plus possible, et les participants les plus lents décrochent sans que personne ne le voie.'],
                ['titre' => 'Démonstration courte, pratique longue', 'texte' => 'Chaque séquence commence par une démonstration de dix à quinze minutes sur un vrai projet, puis laisse le reste du temps à la pratique. Les erreurs rencontrées sont montrées à tout le groupe, avec l\'accord de leur auteur.'],
                ['titre' => 'Sur vos outils et vos données de test', 'texte' => 'En intra, les exercices partent d\'un besoin interne réel, avec des données fictives ou anonymisées. Aucun fichier client n\'est collé dans un assistant pendant la formation : c\'est l\'une des règles enseignées, et elle s\'applique dès le premier exercice.'],
                ['titre' => 'Un formateur qui pratique', 'texte' => 'Richard SALANON développe ses propres projets avec ces outils, ce site compris. Les exemples, les erreurs et la liste de contrôle viennent de ce travail, pas d\'un tutoriel recopié.'],
                ['titre' => 'Supports remis', 'texte' => 'Chaque participant garde son dépôt, sa fiche de projet, son fichier de consignes, sa bibliothèque de demandes réutilisables, la liste de contrôle avant mise en production et l\'accès aux corrections de la session.'],
                ['titre' => 'Suivi après la session', 'texte' => 'Un canal direct reste ouvert pour les questions d\'application, et un accompagnement mensuel peut être prévu au devis : relecture d\'une branche, aide sur un blocage, revue de la liste de contrôle avant une vraie mise en service.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils sont utilisés, dans quelles versions et à quel coût ?',
            'legende' => 'Tarifs relevés le 5 octobre 2026 sur les pages officielles des éditeurs, en dollars américains, hors taxes ; ils changent souvent et se vérifient au moment de l\'achat. Ces abonnements sont payés directement aux éditeurs, en dehors du prix de la formation.',
            'entetes' => ['Outil', 'Ce qu\'on en fait pendant la formation', 'Formules et coût de l\'éditeur'],
            'lignes'  => [
                ['Claude Code (Anthropic)', 'Agent qui lit le dépôt, propose un plan, modifie les fichiers et lance les tests ; utilisé pour les tâches de plusieurs fichiers et la revue', 'Non inclus dans la formule gratuite de Claude ; inclus dans Pro à 20 dollars par mois, ou 17 dollars par mois en paiement annuel, et dans les formules Max à partir de 100 dollars par mois'],
                ['Cursor', 'Éditeur de code avec agent intégré ; utilisé pour travailler fichier par fichier et suivre les différences', 'Formule Hobby gratuite aux requêtes d\'agent limitées ; formule individuelle à 20 dollars par mois ; Teams à 40 dollars par utilisateur et par mois'],
                ['GitHub Copilot', 'Complétion dans l\'éditeur et discussion sur le code ; utile quand le dépôt est déjà sur GitHub', 'Gratuit avec 2 000 complétions et 50 requêtes de discussion par mois ; Pro à 10 dollars, Pro+ à 39 dollars, Max à 100 dollars par mois'],
                ['ChatGPT ou Claude en conversation', 'Rédiger et critiquer la fiche du projet, expliquer un message d\'erreur, comparer deux approches avant de coder', 'Formules gratuites suffisantes pour cet usage ; le choix entre assistants est détaillé dans le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>'],
                ['Git et GitHub', 'Versionner chaque étape, revenir en arrière, ouvrir une requête de fusion, activer la protection contre l\'envoi de secrets', 'Git est gratuit ; un compte GitHub gratuit suffit pour la formation'],
                ['Visual Studio Code', 'Éditeur de référence pour les participants qui n\'utilisent pas Cursor ; accueille l\'extension Copilot et celle de Claude Code', 'Gratuit'],
                ['Hébergement de démonstration', 'Mettre le projet support en ligne le deuxième jour', 'Formule gratuite ou d\'entrée de gamme selon le projet ; le choix est fait avec chaque participant, à son nom'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation selon votre métier, en Afrique francophone ou en Europe ?',
            'items' => [
                ['secteur' => 'Commerce et distribution, Cotonou ou Lomé', 'probleme' => 'Le gérant suit son stock sur un cahier et ses commandes sur WhatsApp ; aucun logiciel du marché ne colle à sa façon de travailler, et un développement sur mesure dépasse son budget.', 'solution' => 'Il construit pendant la formation un outil de stock et de caisse limité à trois écrans (entrées, sorties, alerte de seuil), versionné et en ligne, et repart avec la liste de ce qu\'il ne doit pas ajouter seul, à commencer par le paiement.'],
                ['secteur' => 'Équipe informatique d\'une PME, Abidjan ou Dakar', 'probleme' => 'Les développeurs utilisent déjà des assistants, chacun à sa façon ; certains acceptent tout, d\'autres refusent tout, et personne ne sait ce que l\'agent a le droit de faire dans le dépôt.', 'solution' => 'Session intra centrée sur un fichier de consignes commun, des règles de permissions écrites, une revue obligatoire des différences et des tests demandés à chaque tâche. L\'équipe repart avec ses règles versionnées dans le dépôt.'],
                ['secteur' => 'ONG ou projet de terrain, Afrique de l\'Ouest', 'probleme' => 'Un chargé de suivi veut un tableau de bord qui lise les fichiers de collecte, mais les données concernent des bénéficiaires et la connexion de l\'équipe est irrégulière.', 'solution' => 'Projet support bâti sur des données fictives de même forme que les vraies, page légère qui reste lisible sur un réseau lent, et règle écrite : aucun fichier réel dans un assistant en ligne sans décision de la direction.'],
                ['secteur' => 'Étudiants et reconversion, Bénin', 'probleme' => 'Les apprenants produisent vite des sites avec l\'IA mais ne savent pas expliquer ce qu\'ils ont livré, ce qui se voit dès le premier entretien technique.', 'solution' => 'Parcours où chaque modification acceptée doit être expliquée à voix haute, revue croisée systématique, puis complément par la formation au développement web pour consolider les bases.'],
                ['secteur' => 'Cabinet ou PME, France ou Belgique', 'probleme' => 'Un associé a commencé un outil interne avec un assistant ; il fonctionne, mais chaque nouvelle demande casse une autre partie et personne n\'ose plus y toucher.', 'solution' => 'Le projet bloqué devient le projet support : diagnostic de ce qui coince, mise sous Git, premiers tests, découpage en tâches courtes. Le RGPD impose des données de test fictives pendant tous les exercices.'],
                ['secteur' => 'Association ou petite structure, Suisse ou Canada', 'probleme' => 'Les bénévoles ont besoin d\'un formulaire d\'inscription et d\'un suivi des présences, sans budget de développement ni service informatique.', 'solution' => 'Formation à distance en quatre séances calées sur le fuseau horaire du groupe, outil construit et mis en ligne, liste de contrôle remise à la personne qui assurera la suite.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats choisir, et comment la formation est-elle organisée ?',
            'legende' => 'Le format se décide au premier échange, selon le nombre de personnes, leur niveau, leur dispersion et la connexion disponible.',
            'entetes' => ['Format', 'Pour qui', 'Organisation', 'Durée'],
            'lignes'  => [
                ['Atelier découverte', 'Dirigeants, curieux, équipes qui veulent comprendre avant d\'investir', 'Démonstration des outils, premier résultat produit par chacun, règles de base pour ne pas se mettre en danger', 'Une demi-journée'],
                ['Formation complète intra', 'Une équipe d\'une même organisation', 'Projet interne commun ou projets individuels, données de test fournies par l\'organisation, règles d\'équipe écrites en fin de session', 'Deux jours, en quatre demi-journées'],
                ['Formation inter', 'Une ou deux personnes par structure, porteurs de projet', 'Chacun sur son propre projet, sans aucun document interne partagé avec le groupe', 'Deux jours'],
                ['À distance', 'Participants dispersés, en Afrique, en Europe ou au Canada', 'Visioconférence avec partage d\'écran, séances de trois heures et demie au plus, exercices envoyés à l\'avance', 'Quatre séances, sur une à deux semaines'],
                ['Hybride', 'Équipes qui préfèrent démarrer ensemble', 'Premier jour en salle à Cotonou, Abomey-Calavi ou chez vous, deuxième jour à distance, suivi en ligne', 'Deux jours, espacés de quelques jours'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation vibecoding, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Aucun tarif n\'est publié pour cette formation : le prix est fixé sur devis, après un premier échange qui vérifie aussi que la formation est la bonne réponse. Quand un simple accompagnement de projet suffit, il est proposé à la place. La formation se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces ; les abonnements aux assistants restent payés aux éditeurs.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée', 'Démonstration des quatre outils', 'Premier résultat sur le poste de chacun', 'Liste des règles de base']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Deux jours sur le projet de chaque participant', 'Revue croisée', 'Mise en ligne réelle', 'Supports, liste de contrôle et attestation']],
                ['offre' => 'Accompagnement après la formation', 'prix' => 'Sur devis', 'inclus' => ['Séances mensuelles', 'Relecture d\'une branche ou d\'un projet', 'Canal direct pour les questions']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, dix au plus par groupe.',
                'Le format : atelier, deux jours, ou deux jours suivis d\'un accompagnement.',
                'Le mode : présentiel à Cotonou ou chez vous, distance, ou formule hybride avec déplacement.',
                'La préparation d\'un projet interne commun et de ses données de test, en intra.',
                'La langue des séances et des supports, en français ou en anglais.',
                'La durée de l\'accompagnement mensuel prévu après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Peut-on faire financer la formation par un fonds de formation continue ?',
            'paragraphes' => [
                'Parfois, sans aucune garantie : chaque fonds a ses règles, relevées ici sur leurs pages officielles le 5 octobre 2026, et seule une réponse écrite du fonds vaut pour votre dossier. En Côte d\'Ivoire, la page des <a href="https://fdfp.ci/procedures-dhabilitation/">procédures d\'habilitation du FDFP</a> impose l\'habilitation à tout opérateur de formation privé qui prétend à ses financements, sauf aux structures qui opèrent hors du territoire ivoirien, et la prononce pour une année. Au Bénin, les statuts du fonds de développement de la formation professionnelle continue et de l\'apprentissage ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>.',
                'Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> présente un guichet de financement du personnel des entreprises et des membres des organisations professionnelles, avec une demande en ligne. En France, selon <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a>, la certification Qualiopi conditionne depuis le 1er janvier 2022 l\'accès aux fonds publics ou mutualisés, dont ceux des OPCO. Richard SALANON n\'affiche ni certification Qualiopi ni habilitation ou agrément d\'un fonds : interrogez le fonds avec le programme et le devis avant de signer, et prévoyez le budget sans prise en charge. Le programme, les feuilles de présence et l\'attestation servent quel que soit le dispositif.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle erreur coûte le plus cher dans les semaines qui suivent la formation ?',
            'texte' => 'Revenir à l\'acceptation aveugle dès que la pression monte. Pendant la formation, chaque différence est lue parce que le formateur le demande ; une semaine plus tard, un client attend, l\'assistant propose une correction qui semble marcher, et on l\'accepte sans la lire. C\'est ainsi que les secrets se retrouvent dans un dépôt public et qu\'une règle d\'accès disparaît sans bruit. La parade est mécanique, pas morale : des tests qui tournent avant chaque commit, la protection à l\'envoi activée, et une règle simple, celle de Simon Willison, qui refuse de valider un code qu\'il ne pourrait pas expliquer exactement à quelqu\'un d\'autre.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles autres erreurs voit-on après une formation, et comment les éviter ?',
            'intro' => 'Ces erreurs étaient déjà celles de l\'ancienne page de cette formation ; elles restent les plus fréquentes chez les personnes qui pratiquent seules après la session.',
            'items' => [
                ['titre' => 'Tout demander d\'un coup', 'texte' => 'Décrire toute l\'application en un paragraphe produit une masse de code enchevêtré, impossible à corriger. Une fonctionnalité à la fois, testée avant de passer à la suivante, donne un bien meilleur résultat avec le même outil.'],
                ['titre' => 'Travailler sans Git', 'texte' => 'Sans versionnage, la modification qui casse tout devient irréversible. Un commit après chaque étape validée permet de revenir en arrière en une commande, et les assistants travaillent mieux sur un projet correctement versionné.'],
                ['titre' => 'Laisser les secrets dans le code', 'texte' => 'Clés d\'API, mots de passe de base de données, identifiants de paiement : les assistants les écrivent volontiers en dur. Ils vivent dans des variables d\'environnement, et un fichier .env n\'est jamais publié.'],
                ['titre' => 'Confondre prototype et produit', 'texte' => 'Montrer un prototype comme s\'il était fini, puis découvrir que la sécurité, les sauvegardes et les cas limites restent à faire. La liste de contrôle remise en fin de session sert précisément à séparer les deux.'],
                ['titre' => 'Laisser grossir le fichier de consignes', 'texte' => 'On y ajoute une règle à chaque déception, jusqu\'à ce que l\'assistant n\'en suive plus aucune. On le relit chaque mois et on retire ce qui ne change rien.'],
                ['titre' => 'Corriger en boucle dans la même conversation', 'texte' => 'Après deux corrections ratées, la conversation est encombrée de pistes fausses. Mieux vaut repartir d\'une session propre avec une consigne réécrite, qui intègre ce que l\'échec a appris.'],
                ['titre' => 'Installer une bibliothèque parce que l\'IA l\'a citée', 'texte' => 'Un nom plausible ne prouve pas qu\'un paquet existe, ni qu\'il est sérieux. Chaque dépendance se vérifie sur le registre officiel avant installation.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que recommandent les éditeurs eux-mêmes pour travailler avec un assistant de code ?',
            'paragraphes' => [
                'La méthode enseignée n\'est pas une opinion de formateur : elle recoupe ce que les éditeurs écrivent dans leur documentation, consultée le 5 octobre 2026. Le <a href="https://code.claude.com/docs/en/best-practices">guide des bonnes pratiques de Claude Code</a> recommande d\'explorer, puis de planifier, puis de coder, puis de valider par un commit, et de donner à l\'agent un moyen de vérifier son travail : des tests, une compilation, une capture d\'écran à comparer. Il ajoute une consigne que la formation applique à la lettre : si l\'on ne peut pas vérifier un résultat, on ne le livre pas.',
                'Les trois grands outils lisent un fichier de consignes placé dans le dépôt, et tous demandent qu\'il reste court. La <a href="https://code.claude.com/docs/en/memory">documentation de Claude Code</a> vise moins de 200 lignes par fichier CLAUDE.md, car un fichier plus long consomme du contexte et réduit le respect des règles. <a href="https://docs.github.com/en/copilot/how-tos/configure-custom-instructions/add-repository-instructions">GitHub</a> limite les instructions de Copilot à deux pages, non spécifiques à une tâche. <a href="https://cursor.com/docs/context/rules">Cursor</a> conseille des règles de moins de 500 lignes, découpées en fichiers composables.',
                'Un format commun émerge : le fichier <a href="https://agents.md/">AGENTS.md</a>, que son site présente comme un format ouvert pour guider les agents de code, lu par plus de 20 outils et utilisé, selon la même page, par plus de 60 000 projets open source. C\'est pourquoi la formation fait écrire ce fichier dès le premier après-midi : un participant qui change d\'outil dans six mois garde ses règles, ses commandes de test et ses interdits, et l\'assistant suivant les applique sans tout réapprendre.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres publiés justifient d\'apprendre à relire plutôt qu\'à générer plus vite ?',
            'items' => [
                ['valeur' => '90 %', 'libelle' => 'Professionnels de la technologie qui déclarent utiliser l\'IA au travail, sur près de 5 000 répondants (rapport DORA publié le 23 septembre 2025)', 'source' => 'Google Cloud, rapport DORA 2025', 'url' => 'https://cloud.google.com/blog/products/ai-machine-learning/announcing-the-2025-dora-report'],
                ['valeur' => '30 %', 'libelle' => 'Répondants qui accordent peu ou pas de confiance au code généré par l\'IA, dans la même enquête DORA de 2025', 'source' => 'Google Cloud, rapport DORA 2025', 'url' => 'https://cloud.google.com/blog/products/ai-machine-learning/announcing-the-2025-dora-report'],
                ['valeur' => '45,2 %', 'libelle' => 'Développeurs pour qui déboguer un code généré par l\'IA prend plus de temps, deuxième frustration citée en 2025', 'source' => 'Stack Overflow, enquête 2025 auprès des développeurs', 'url' => 'https://survey.stackoverflow.co/2025/ai'],
                ['valeur' => '31 %', 'libelle' => 'Développeurs qui utilisent régulièrement des agents d\'IA en 2025, quand l\'usage des assistants est devenu courant', 'source' => 'Stack Overflow, enquête 2025 auprès des développeurs', 'url' => 'https://survey.stackoverflow.co/2025/ai'],
                ['valeur' => '36 %', 'libelle' => 'Part de la population africaine qui utilise Internet en 2025, contre 88 à 93 % en Europe, dans la Communauté des États indépendants et dans les Amériques', 'source' => 'UIT, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
                ['valeur' => '200 lignes', 'libelle' => 'Taille maximale visée par fichier de consignes CLAUDE.md, au-delà de laquelle les règles sont moins bien suivies', 'source' => 'Documentation de Claude Code', 'url' => 'https://code.claude.com/docs/en/memory'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que retenir de ces chiffres pour votre équipe ?',
            'paragraphes' => [
                'Le rapport DORA 2025 résume son enquête en une formule : l\'IA ne répare pas une équipe, elle amplifie ce qui existe déjà. Une équipe qui teste, relit et versionne devient plus rapide ; une équipe qui livre sans contrôle livre plus vite ses problèmes. Le même rapport observe que l\'adoption de l\'IA reste associée à une moindre stabilité des livraisons. Former quelqu\'un à générer du code sans lui apprendre à le vérifier revient donc à accélérer ses erreurs.',
                'L\'enquête de Stack Overflow dit la même chose à l\'échelle du développeur : près d\'un sur deux trouve que déboguer un code généré prend plus de temps. C\'est le coût caché que la formation apprend à réduire, non en évitant l\'IA, mais en découpant les tâches assez finement pour que chaque différence reste lisible, et en faisant écrire les tests avant d\'accepter le code qu\'ils vérifient.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'La connexion pèse sur l\'organisation. Selon les <a href="https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/">données 2025 de l\'Union internationale des télécommunications</a>, 36 % de la population africaine utilise Internet, contre 88 à 93 % en Europe. Les assistants de code fonctionnent en ligne : une coupure interrompt la génération, pas la relecture. Les séances alternent donc génération et travail hors ligne (lecture des différences, écriture des tests, fiche du projet), les installations sont faites avant le premier jour, et chaque séance à distance prévoit un partage de connexion de secours.',
                'Côté langue, les assistants comprennent très bien les consignes en français, et la formation se donne en français ou en anglais. Ce qu\'ils produisent se vérifie pourtant : textes d\'interface traduits mot à mot, dates au format américain, montants en francs CFA affichés avec des centimes, numéros de téléphone refusés parce que le format attendu est étranger. Ces détails font partie de la relecture, au même titre que la sécurité.',
                'Les données personnelles imposent la règle la plus stricte. Au Bénin, l\'article 391 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> ne permet de transférer des données personnelles vers un État tiers que s\'il assure un niveau de protection équivalent ; coller un fichier clients dans un assistant hébergé à l\'étranger peut constituer un tel transfert. En France, la <a href="https://www.cnil.fr/fr/tester-vos-applications">CNIL</a> écrit que les données réelles de production ne doivent pas être utilisées pendant le développement et les tests, et recommande un jeu de données fictives. Le cadre juridique complet est traité dans la <a href="/formations/ia-ethique-conformite">formation IA, éthique et conformité</a>.',
                'En Europe, l\'article 4 du règlement sur l\'IA demande aux fournisseurs et aux utilisateurs professionnels de systèmes d\'IA de prendre des mesures pour développer la maîtrise de l\'IA de leur personnel. Selon les <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">questions et réponses de la Commission européenne</a>, mises à jour le 27 juillet 2026, l\'obligation s\'applique depuis le 2 février 2025, sans certificat ni formation imposée ; l\'organisation peut garder une trace interne des actions menées. Le programme, les feuilles de présence et l\'attestation remis en fin de session constituent une telle trace.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi se former au vibecoding avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Le vibe coding figure parmi ses compétences, à côté du développement d\'applications web et mobiles. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il enseigne ce qu\'il pratique : ses propres projets sont développés avec ces assistants, ce site compris. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP.',
                'Il a travaillé au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Sa façon de former tient en quelques engagements vérifiables : dix participants au plus, chacun sur son propre projet, aucune donnée réelle dans un assistant pendant les exercices, une mise en ligne réelle avant la fin, et une réponse franche quand un projet dépasse ce que l\'on peut tenir seul. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/developpement">formations au développement</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de s\'inscrire ?',
            'texte' => 'Venez avec un vrai projet, petit ; écrivez ce qui doit être interdit avant de générer quoi que ce soit ; lisez chaque différence avant de l\'accepter ; faites écrire les tests et vérifiez qu\'ils peuvent échouer ; versionnez chaque étape ; et ne mettez jamais de données réelles dans un assistant sans décision écrite. Le reste du catalogue est sur la page <a href="/formations/">formations</a>.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous apprendre à coder avec l\'IA sur votre propre projet ?',
            'texte'  => 'Indiquez le nombre de participants, leur niveau, le projet que chacun veut construire et le format souhaité (atelier, deux jours, distance ou hybride) : vous recevez une réponse sous 24 heures, puis une proposition de programme et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation vibecoding'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il déjà savoir coder pour suivre la formation vibecoding ?', 'r' => 'Non, mais le parcours n\'est pas le même. Un développeur avancera plus vite sur la mise en production et les règles d\'équipe ; un débutant complet passera plus de temps à lire et à expliquer le code généré. Le premier échange sert à composer un groupe cohérent, quitte à conseiller d\'abord la formation au développement web.'],
        ['q' => 'Quels abonnements faut-il acheter avant la session ?', 'r' => 'Aucun n\'est exigé pour s\'inscrire. Les formules gratuites de Cursor, de GitHub Copilot et des assistants en conversation suffisent pour une partie des exercices ; Claude Code demande une formule payante de Claude. La liste exacte arrive une semaine avant la session, et le choix des abonnements se décide en fin de formation, selon ce qui a réellement servi.'],
        ['q' => 'Combien de participants par session ?', 'r' => 'Dix au plus. La pratique guidée demande que le formateur passe plusieurs fois sur chaque poste et demande à chacun d\'expliquer sa dernière modification ; au-delà d\'une dizaine de personnes, ce suivi devient impossible.'],
        ['q' => 'La formation peut-elle se faire entièrement à distance ?', 'r' => 'Oui, en visioconférence avec partage d\'écran, en quatre séances de trois heures et demie au plus. Elle se donne aussi sur place, à Cotonou, à Abomey-Calavi ou dans vos locaux, ou en formule hybride avec un premier jour en salle.'],
        ['q' => 'Combien coûte la formation vibecoding ?', 'r' => 'Le prix est fixé sur devis, après un premier échange. Il dépend du nombre de participants, du format (atelier d\'une demi-journée ou deux jours), du mode, de la préparation d\'un projet interne en intra et de l\'accompagnement éventuel. Les abonnements aux assistants se paient à part, directement aux éditeurs.'],
        ['q' => 'Quelle différence avec la formation au développement web ?', 'r' => 'La formation au développement web construit les fondations : HTML, CSS, JavaScript, PHP et MySQL, jusqu\'à un premier site dynamique. La formation vibecoding apprend à produire avec un assistant en s\'appuyant sur ces fondations, ou en s\'en passant pour des projets simples. Les deux se combinent, dans un sens comme dans l\'autre.'],
        ['q' => 'Quelle différence avec la prestation de vibe coding ?', 'r' => 'La prestation livre un résultat : un prototype, un MVP ou la reprise d\'une application générée, construits par Richard SALANON. La formation transmet la méthode pour que vous construisiez vous-même. Une équipe peut aussi faire reprendre une application puis se former pour la faire évoluer.'],
        ['q' => 'J\'ai déjà commencé un projet avec l\'IA et je suis bloqué : la formation peut-elle servir ?', 'r' => 'Oui, et c\'est un bon point de départ : un projet bloqué contient presque toutes les leçons de la formation. Il devient votre projet support ; on le met sous Git, on diagnostique ce qui coince, on écrit les premiers tests et on découpe la suite en tâches courtes.'],
        ['q' => 'Peut-on construire une application mobile pendant la formation ?', 'r' => 'Les mêmes outils génèrent du code mobile, et le sujet est abordé si le projet d\'un participant s\'y prête. La publication dans les magasins d\'applications demande en revanche des comptes, des règles et des délais propres, que deux jours ne couvrent pas ; la formation le dit dès le cadrage.'],
        ['q' => 'Le paiement en ligne est-il traité ?', 'r' => 'Il est présenté comme une partie à part, à ajouter en second palier. Mobile Money ou carte bancaire se branchent techniquement avec un assistant, mais l\'argent exige une relecture renforcée, des notifications vérifiées et des tests stricts ; pour un premier projet, on construit d\'abord le reste.'],
        ['q' => 'Une entreprise peut-elle envoyer toute son équipe ?', 'r' => 'Oui, en intra. L\'équipe peut travailler sur un projet interne commun, avec des données de test fournies par l\'organisation, et repart avec un fichier de consignes et des règles de permissions écrites pour le dépôt. La revue croisée entre collègues installe une habitude de relecture qui survit à la formation.'],
        ['q' => 'Que reçoit chaque participant à la fin ?', 'r' => 'Son projet support en ligne et versionné, sa fiche de projet, son fichier de consignes, sa bibliothèque de demandes réutilisables, la liste de contrôle avant mise en production, l\'accès aux corrections de la session et une attestation de formation.'],
        ['q' => 'La formation peut-elle être financée par le FDFP, le 3FPT ou un OPCO ?', 'r' => 'Cela dépend des règles de chaque fonds. Le FDFP exige l\'habilitation des opérateurs privés, sauf ceux qui opèrent hors de Côte d\'Ivoire, et les OPCO exigent la certification Qualiopi, que Richard SALANON n\'affiche pas. Interrogez le fonds par écrit avant de signer et prévoyez le budget sans prise en charge.'],
    ],

    'sources' => [
        ['titre' => 'Simon Willison, « Not all AI-assisted programming is vibe coding (but vibe coding rocks) », 19 mars 2025', 'url' => 'https://simonwillison.net/2025/Mar/19/vibe-coding/', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, tarifs de Claude (Free, Pro, Max, Team)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Cursor, tarifs', 'url' => 'https://cursor.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'GitHub, plans et tarifs de Copilot', 'url' => 'https://github.com/features/copilot/plans', 'date' => '2026-10-05'],
        ['titre' => 'Claude Code, documentation : bonnes pratiques', 'url' => 'https://code.claude.com/docs/en/best-practices', 'date' => '2026-10-05'],
        ['titre' => 'Claude Code, documentation : fichiers CLAUDE.md et mémoire du projet', 'url' => 'https://code.claude.com/docs/en/memory', 'date' => '2026-10-05'],
        ['titre' => 'Cursor, documentation : règles', 'url' => 'https://cursor.com/docs/context/rules', 'date' => '2026-10-05'],
        ['titre' => 'GitHub Docs, instructions personnalisées de dépôt pour Copilot', 'url' => 'https://docs.github.com/en/copilot/how-tos/configure-custom-instructions/add-repository-instructions', 'date' => '2026-10-05'],
        ['titre' => 'AGENTS.md, format ouvert de consignes pour les agents de code', 'url' => 'https://agents.md/', 'date' => '2026-10-05'],
        ['titre' => 'GitHub Docs, protection à l\'envoi (push protection) de l\'analyse des secrets', 'url' => 'https://docs.github.com/en/code-security/secret-scanning/introduction/about-push-protection', 'date' => '2026-10-05'],
        ['titre' => 'Google Cloud, annonce du rapport DORA 2025 sur le développement logiciel assisté par l\'IA (23 septembre 2025)', 'url' => 'https://cloud.google.com/blog/products/ai-machine-learning/announcing-the-2025-dora-report', 'date' => '2026-10-05'],
        ['titre' => 'Stack Overflow, Developer Survey 2025, section IA', 'url' => 'https://survey.stackoverflow.co/2025/ai', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, guide RGPD du développeur : tester vos applications', 'url' => 'https://www.cnil.fr/fr/tester-vos-applications', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 du règlement sur l\'IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du fonds de développement de la formation professionnelle continue et de l\'apprentissage', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['developpement-web', 'laravel-php', 'nextjs-react', 'api-rest', 'creer-son-saas', 'flutter'],
        'services'    => ['vibe-coding'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
