<?php
// ============================================================
// data/formations/strategie-transformation-digitale.php · Fiche formation
// « Stratégie de transformation digitale » (vague 1B, lot A, domaine
// transformation-digitale). Angle propre : l'équipe de direction bâtit
// elle-même sa feuille de route numérique (diagnostic, priorités, budget,
// indicateurs, gouvernance). Ne traite pas : la mission de conseil où
// Richard rédige la feuille de route (pilier consultant-digitalisation), la
// petite structure pas à pas (digitaliser-son-entreprise), la cartographie
// fine d'un processus (digitalisation-processus), l'adoption d'un outil
// (conduite-du-changement), les décisions propres à l'IA
// (ia-generative-dirigeants). Aucune ancienne page. Faits externes relevés
// le 05/10/2026 : BCG (octobre 2020), Eurostat (Digital Decade, extraction de
// juin 2026), Baromètre France Num 2026, impots.gouv.fr, DGI de Côte
// d'Ivoire, gouvernement du Bénin, SGG du Bénin, CNIL, UIT, présidence du
// Sénégal, réseau EDIH, France Num, Google, Atlassian (Trello), Odoo (fait
// vérifié du catalogue), FDFP, 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation stratégie de transformation digitale : construire en comité de direction votre feuille de route numérique, du diagnostic aux priorités, au budget et aux indicateurs',
    'title'   => 'Stratégie de transformation digitale | Richard SALANON',
    'meta'    => 'Formation stratégie de transformation digitale : votre direction bâtit sa feuille de route, diagnostic, priorités, budget et indicateurs. Sur devis.',
    'en_bref' => 'Cette formation apprend à une équipe de direction à construire elle-même sa feuille de route numérique : diagnostic de l\'entreprise, choix et ordre des chantiers, coût complet sur trois ans, indicateurs et gouvernance. Elle s\'adresse aux dirigeants, associés et directeurs de PME, d\'ONG, d\'établissements scolaires ou de santé, en Afrique francophone comme en Europe. Elle dure deux jours en quatre demi-journées, avec une revue trimestrielle en option, dans vos locaux, à distance, en hybride ou en session inter-entreprises. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'transformation-digitale',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, revue trimestrielle en option',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : établir la position numérique de l\'entreprise, chiffres à l\'appui',
            'duree'  => '3 h 30',
            'points' => [
                'Lecture croisée des questionnaires remplis avant la session : où les membres du comité voient-ils l\'entreprise, et où leurs réponses divergent-elles ?',
                'Notation de l\'entreprise sur six dimensions (stratégie, équipement, compétences, données, automatisation et IA, numérique responsable), avec preuves exigées pour chaque note.',
                'Inventaire des logiciels, abonnements, noms de domaine et comptes administrateurs : qui paie, qui détient l\'accès, qui saurait le reprendre demain.',
                'Les obligations externes datées qui s\'imposent à la feuille de route : facture normalisée, facture électronique, protection des données, exigences de bailleurs ou de donneurs d\'ordre.',
                'Exercice : le schéma des flux d\'information entre vente, achat, stock, comptabilité et relation client, dessiné par le comité sur une seule page.',
                'Synthèse du matin : les cinq constats que la direction accepte de signer.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : partir des objectifs de l\'entreprise pour faire émerger les chantiers',
            'duree'  => '3 h 30',
            'points' => [
                'Rappel des trois objectifs d\'entreprise des trois prochaines années : croissance, marge, qualité de service, ouverture d\'un site, conformité.',
                'Pour chaque objectif, la question qui fâche : qu\'est-ce qui, dans la façon dont l\'information circule aujourd\'hui, empêche de l\'atteindre ?',
                'Constitution de la liste longue : dix à quinze chantiers candidats, chacun décrit sur une fiche normalisée (problème, résultat attendu, responsable pressenti).',
                'Repérage des dépendances : ce qui doit exister avant le reste, comme une base clients unique avant un CRM, ou une facturation propre avant un tableau de bord.',
                'Distinction entre chantier, outil et projet : pourquoi « acheter un ERP » n\'est pas un objectif de feuille de route.',
                'Travail à faire avant le jour 2 : chiffrer les heures perdues et les volumes pour les chantiers retenus, avec les équipes concernées.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : prioriser, chiffrer le coût complet et découper en vagues',
            'duree'  => '3 h 30',
            'points' => [
                'Grille de priorisation à cinq critères : valeur, urgence imposée de l\'extérieur, effort, risque, dépendances ; notation en séance, désaccords tranchés par écrit.',
                'Coût complet sur trois ans d\'un chantier : licences, mise en place, reprise des données, formation, temps interne, maintenance, coût de sortie.',
                'Trois scénarios de budget (prudent, central, ambitieux) et ce que chacun repousse ou abandonne.',
                'Acheter un logiciel du marché, paramétrer l\'existant ou faire développer : les critères de décision pour un comité qui n\'est pas technique.',
                'Découpage en vagues trimestrielles, avec au plus deux chantiers lourds menés en même temps.',
                'Exercice : le comité arbitre entre deux chantiers de valeur proche quand le budget ne permet d\'en lancer qu\'un.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : fixer les indicateurs, organiser le pilotage et présenter la feuille de route',
            'duree'  => '3 h 30',
            'points' => [
                'Trois familles d\'indicateurs : résultat pour l\'entreprise, adoption par les équipes, avancement du chantier ; une valeur de départ relevée pour chacun.',
                'Le tableau de bord de la feuille de route sur une page, mis à jour une fois par mois en dix minutes.',
                'Rôles : sponsor en direction, responsable de chantier nommé, comité trimestriel, et ce qui remonte jusqu\'au conseil d\'administration.',
                'Règles d\'arrêt et de révision : à quelles conditions un chantier est suspendu, réduit ou remplacé.',
                'Le plan des quatre-vingt-dix premiers jours : décisions, budgets engagés, consultations de prestataires à lancer.',
                'Restitution : chaque membre présente une partie de la feuille de route au reste du comité, comme il devra le faire devant les équipes.',
            ],
        ],
        [
            'titre'  => 'Revue trimestrielle, en option : relire la feuille de route trois mois plus tard',
            'duree'  => '3 h',
            'points' => [
                'Lecture du tableau de bord : indicateurs de résultat, d\'adoption et d\'avancement, comparés aux valeurs de départ.',
                'Écarts de budget et de calendrier, et leurs causes réelles.',
                'Ce que les premiers mois ont appris sur l\'entreprise, ses prestataires et ses équipes.',
                'Mise à jour de la vague suivante : chantiers confirmés, décalés, abandonnés ou ajoutés.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées de 3 h 30 ; revue trimestrielle en option'],
        ['l' => 'Public', 'v' => 'Comités de direction, dirigeants et associés, 4 à 10 décideurs par groupe'],
        ['l' => 'Formats', 'v' => 'Intra, inter-entreprises, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saura produire votre équipe de direction à la fin des deux jours, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Beaucoup de directions ont déjà une liste d\'envies numériques : un logiciel de gestion, un site qui vend, des tableaux de bord, un peu d\'intelligence artificielle. Ce qui leur manque rarement, c\'est l\'idée ; ce qui leur manque souvent, c\'est l\'ordre, le prix réel et la façon de savoir si cela marche. Cette formation donne au comité une méthode pour transformer cette liste en feuille de route qu\'il a construite, qu\'il comprend et qu\'il saura réviser seul.',
                'À la sortie, le comité dispose de documents concrets, rédigés en séance sur ses propres chiffres : un diagnostic noté sur six dimensions, avec les preuves de chaque note ; une liste longue de chantiers décrits sur des fiches identiques ; une grille de priorisation remplie et argumentée ; le coût complet sur trois ans des chantiers retenus, en trois scénarios ; un découpage en vagues trimestrielles ; un tableau d\'indicateurs avec leurs valeurs de départ ; une organisation de pilotage ; un plan pour les quatre-vingt-dix premiers jours.',
                'L\'objectif mesurable est simple : à la fin de la seconde journée, chaque membre du comité doit pouvoir expliquer en cinq minutes pourquoi tel chantier passe avant tel autre, combien il coûtera sur trois ans et à quel chiffre on verra qu\'il a réussi. Si une personne en est incapable, la feuille de route n\'est pas encore partagée, et la séance de restitution sert précisément à le vérifier.',
                'La formation ne rédige pas la feuille de route à votre place. Si vous préférez confier le diagnostic, les entretiens et la rédaction à un tiers, c\'est l\'objet d\'une mission de <a href="/services/consultant-digitalisation">consultant en digitalisation</a>. Elle ne s\'adresse pas non plus au gérant d\'une très petite structure qui cherche par où commencer avec des outils simples : la formation <a href="/formations/digitaliser-son-entreprise">Digitaliser son entreprise pas à pas</a> répond à ce besoin. Les décisions propres à l\'intelligence artificielle sont traitées dans la formation <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>.',
                'Deux sujets voisins restent hors du périmètre et font l\'objet de formations distinctes du même domaine : la description fine d\'un processus métier avant de l\'outiller, et la manière de faire adopter un nouvel outil par les équipes. Les deux jours les mentionnent comme des chantiers à planifier et à budgéter, sans entrer dans leur conduite détaillée. Enfin, aucun gain n\'est promis : la méthode apprend à poser une valeur de départ pour que les résultats se constatent.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui doit être dans la salle, et que faut-il préparer avant la première demi-journée ?',
            'intro' => 'Une feuille de route numérique engage le budget, l\'organisation et parfois les emplois. Elle se construit avec ceux qui ont le pouvoir de la financer et de la faire appliquer, pas avec les seuls passionnés d\'informatique.',
            'items' => [
                ['titre' => 'Le dirigeant et ses associés', 'texte' => 'Directeur général, gérant, fondateurs. Leur présence pendant les quatre demi-journées n\'est pas négociable : une feuille de route construite en leur absence est renégociée dès leur retour.'],
                ['titre' => 'Les directeurs métiers', 'texte' => 'Finances, commercial, opérations, achats, ressources humaines. Chacun apporte les chiffres de son périmètre et repart responsable d\'au moins un chantier.'],
                ['titre' => 'Le responsable informatique ou le prestataire de confiance', 'texte' => 'Il éclaire les contraintes techniques et les coûts cachés, sans décider des priorités. Dans une structure sans service informatique, la personne qui gère aujourd\'hui les comptes et les abonnements tient ce rôle.'],
                ['titre' => 'Taille et niveau', 'texte' => 'Quatre à dix décideurs. Aucun niveau technique n\'est requis ; il faut en revanche connaître les chiffres de l\'entreprise ou pouvoir les obtenir, et accepter que des désaccords soient tranchés en séance.'],
                ['titre' => 'La préparation', 'texte' => 'Un questionnaire de diagnostic de trente minutes rempli par chaque participant, la liste des logiciels et abonnements payés, les objectifs de l\'entreprise pour les trois prochaines années, les comptes de l\'exercice écoulé et les devis numériques en attente.'],
                ['titre' => 'Le matériel', 'texte' => 'Une salle avec écran et tableau blanc, un ordinateur par binôme avec un tableur (Excel ou Google Sheets), une connexion pour consulter les outils en ligne. Les modèles de travail sont remis en fichiers modifiables et peuvent être imprimés en cas de coupure.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels exercices le comité réalise-t-il sur les données de son entreprise ?',
            'legende' => 'Chaque exercice produit une pièce de la feuille de route. Les données restent celles de l\'entreprise ; aucun cas d\'école n\'est substitué aux vôtres.',
            'entetes' => ['Exercice', 'Ce que fait le comité', 'Ce qu\'il produit', 'Moment'],
            'lignes'  => [
                ['Écart des perceptions', 'Compare les réponses de chacun au questionnaire et explique les écarts de plus de deux points', 'Une note commune par dimension, appuyée sur des faits', 'Jour 1, matin'],
                ['Inventaire des outils', 'Recense logiciels, abonnements, domaines et comptes administrateurs, avec leur titulaire réel', 'Une liste des accès à récupérer et des doublons à supprimer', 'Avant la session, complété le jour 1'],
                ['Carte des flux', 'Dessine le parcours d\'une commande, de la demande du client à l\'encaissement, en notant chaque ressaisie', 'Un schéma d\'une page, avec les ruptures repérées', 'Jour 1, matin'],
                ['Des objectifs aux chantiers', 'Relie chaque objectif de l\'entreprise aux obstacles d\'information qui le freinent', 'La liste longue de dix à quinze chantiers', 'Jour 1, après-midi'],
                ['Mesure de l\'existant', 'Fait chiffrer par les équipes les heures, erreurs et délais liés à chaque chantier', 'Des valeurs de départ pour les indicateurs', 'Entre les deux jours'],
                ['Arbitrage sous contrainte', 'Note les chantiers sur cinq critères, puis tranche quand le budget ne suffit pas', 'Une liste ordonnée et les raisons écrites des choix', 'Jour 2, matin'],
                ['Coût complet', 'Chiffre poste par poste deux chantiers retenus sur trois ans', 'Un budget en trois scénarios', 'Jour 2, matin'],
                ['Tableau de bord', 'Choisit trois indicateurs par chantier et la personne qui les relève', 'Le tableau de bord d\'une page', 'Jour 2, après-midi'],
                ['Restitution croisée', 'Chaque membre présente une partie de la feuille de route et répond aux objections des autres', 'Une feuille de route corrigée et partagée', 'Jour 2, fin d\'après-midi'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment la grille de diagnostic note-t-elle votre entreprise ?',
            'legende' => 'Les six dimensions reprennent celles du questionnaire de maturité numérique des pôles européens d\'innovation numérique (EDIH), version 2.1 du 8 février 2024, adaptées aux PME d\'Afrique francophone et d\'Europe. Chaque dimension est notée de 1 à 5 ; une note n\'est retenue que si une preuve l\'appuie.',
            'entetes' => ['Dimension', 'Question posée au comité', 'Niveau 1', 'Niveau 5'],
            'lignes'  => [
                ['Stratégie numérique', 'Le numérique figure-t-il dans les objectifs de l\'entreprise, avec un budget et un responsable ?', 'Achats au coup par coup, décidés au fil des démonstrations', 'Feuille de route écrite, budgétée, revue chaque trimestre'],
                ['Équipement et outils', 'Les outils couvrent-ils les métiers sans ressaisie entre eux ?', 'Cahiers, tableurs isolés, messageries personnelles', 'Outils reliés, comptes administrés par l\'entreprise'],
                ['Compétences et place des personnes', 'Les équipes savent-elles se servir des outils, et sont-elles consultées avant leur choix ?', 'Formation absente, outils imposés sans explication', 'Formation planifiée, utilisateurs associés aux choix'],
                ['Données', 'Existe-t-il une source de vérité pour les clients, les articles et les factures ?', 'Plusieurs fichiers clients qui se contredisent', 'Une base par sujet, propre, sauvegardée, avec un responsable'],
                ['Automatisation et IA', 'Les tâches répétitives sont-elles identifiées, et certaines déjà automatisées ou assistées ?', 'Tout est fait à la main, sans mesure', 'Automatisations suivies, usages de l\'IA encadrés par des règles'],
                ['Numérique responsable et sécurité', 'Les sauvegardes, les accès et le cycle de vie du matériel sont-ils maîtrisés ?', 'Mots de passe partagés, pas de sauvegarde testée', 'Sauvegardes testées, double authentification, matériel suivi'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi partir des objectifs de l\'entreprise plutôt que des outils ?',
            'paragraphes' => [
                'Parce que c\'est le premier facteur que l\'on retrouve dans les transformations qui réussissent. Le Boston Consulting Group a publié en octobre 2020 une étude, « Flipping the Odds of Digital Transformation Success », fondée sur 70 de ses propres missions et sur une enquête auprès de 825 cadres dirigeants : seules 30 % des transformations numériques y atteignaient ou dépassaient leurs objectifs, 44 % créaient de la valeur sans tenir leurs cibles et 26 % en créaient peu. Le premier des six facteurs de succès relevés est une stratégie intégrée, aux objectifs chiffrés.',
                'Selon la même étude, les entreprises qui réunissent les six facteurs voient leur taux de réussite passer de 30 % à 80 %. Parmi eux figurent aussi l\'engagement de la direction jusqu\'à l\'encadrement intermédiaire, une gouvernance capable de lever vite les blocages et le suivi d\'indicateurs définis à l\'avance. Ces chiffres portent sur de grandes entreprises accompagnées par un cabinet ; ils ne se transposent pas tels quels à une PME de Cotonou ou de Lyon, mais l\'ordre des facteurs, lui, se vérifie à toutes les échelles.',
                'Dans une PME, partir des outils produit un résultat reconnaissable : un logiciel de caisse acheté après un salon, un CRM inclus dans un abonnement, une application commandée parce qu\'un concurrent en a une. Chaque achat se défend isolément ; ensemble, ils dessinent un système où les clients existent en trois exemplaires. La formation inverse le raisonnement : l\'objectif d\'entreprise vient d\'abord, l\'obstacle d\'information ensuite, et l\'outil seulement à la fin, comme une réponse possible parmi d\'autres.',
                'Le calendrier compte autant que le contenu. L\'histoire de <a href="/histoires/thomas-cook">Thomas Cook</a> montre une entreprise qui avait compris le virage de la réservation en ligne, mais dont la dette ne laissait plus les moyens de le financer au bon rythme. La leçon pour un comité de direction est directe : une feuille de route se construit et se budgète quand les comptes le permettent encore, pas quand un concurrent ou une obligation légale l\'impose dans l\'urgence.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Plan pluriannuel figé, feuille de route glissante ou plan de mise en conformité : quelle forme donner à votre feuille de route ?',
            'options'  => ['Plan pluriannuel figé sur trois à cinq ans', 'Feuille de route glissante sur dix-huit mois, revue chaque trimestre', 'Plan de mise en conformité sur six mois'],
            'criteres' => [
                ['critere' => 'Situation adaptée', 'valeurs' => ['Grands groupes, administrations, programmes financés avec un cadre imposé', 'PME, ONG et établissements dont l\'activité et les outils évoluent vite', 'Échéance légale proche : facture normalisée, facture électronique, exigence d\'un bailleur']],
                ['critere' => 'Ce qu\'elle fixe', 'valeurs' => ['Tous les chantiers et leurs budgets dès le départ', 'La vague en cours en détail, les suivantes à grands traits', 'Un seul objectif et les étapes pour l\'atteindre à temps']],
                ['critere' => 'Effort de pilotage', 'valeurs' => ['Fort au départ, puis revues annuelles', 'Une demi-journée par trimestre et dix minutes par mois', 'Suivi serré, chaque semaine, jusqu\'à l\'échéance']],
                ['critere' => 'Risque principal', 'valeurs' => ['Plan dépassé avant la fin de sa première année', 'Révisions trop fréquentes qui font perdre le cap', 'Conformité atteinte sans aucun gain pour l\'activité']],
                ['critere' => 'Lien avec le budget', 'valeurs' => ['Enveloppe pluriannuelle votée en bloc', 'Budget annuel, débloqué vague par vague', 'Dépense imposée, à caser dans le budget existant']],
            ],
            'verdict'  => 'La formation construit par défaut une feuille de route glissante : c\'est la forme qui convient au plus grand nombre de PME et d\'ONG. Quand une échéance légale tombe dans les six mois, elle devient la première vague de cette feuille de route, et l\'on profite du chantier imposé pour corriger ce qui gênait déjà l\'activité. Le plan pluriannuel figé n\'est retenu que lorsqu\'un financeur ou une tutelle l\'exige.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment calcule-t-on le coût complet d\'un chantier numérique sur trois ans ?',
            'legende' => 'Modèle utilisé le deuxième jour. Le prix affiché par l\'éditeur ne représente souvent qu\'une partie du total ; les autres postes se chiffrent avec les équipes et les prestataires.',
            'entetes' => ['Poste', 'Ce qu\'il comprend', 'Question à poser avant de signer', 'Oubli le plus fréquent'],
            'lignes'  => [
                ['Licences et abonnements', 'Prix par utilisateur, modules, stockage, options', 'Quel prix après la période de lancement ou de remise ?', 'Les hausses prévues au contrat après la première année'],
                ['Mise en place', 'Paramétrage, adaptations, connexions avec les autres outils', 'Qu\'est-ce qui est au forfait, qu\'est-ce qui est facturé au temps passé ?', 'Les demandes de modification après la recette'],
                ['Reprise des données', 'Nettoyage, conversion et import des clients, articles, historiques', 'Qui nettoie, et qui valide les données reprises ?', 'Le temps des équipes pour corriger les fichiers'],
                ['Formation', 'Formation des utilisateurs, des administrateurs, des nouveaux arrivants', 'Combien de sessions, pour qui, et à quel moment ?', 'Les personnes qui arrivent après le lancement'],
                ['Temps interne', 'Heures du responsable de chantier, des utilisateurs clés, des tests', 'Combien d\'heures par semaine, et qu\'est-ce qui ne sera pas fait pendant ce temps ?', 'Le valoriser à zéro parce qu\'il ne donne pas lieu à facture'],
                ['Fonctionnement', 'Hébergement, maintenance, mises à jour, assistance', 'Que couvre le contrat de maintenance, et en combien de temps répond-on ?', 'Les mises à jour majeures non comprises'],
                ['Sortie', 'Export des données, récupération du code, transition vers un autre outil', 'Dans quel format récupère-t-on les données, et à quel prix ?', 'Découvrir le coût de sortie au moment de partir'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils sont utilisés pendant la formation, et que coûtent-ils ?',
            'legende' => 'Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée. Ces outils servent aux exercices ou d\'exemple de chiffrage ; aucun abonnement n\'est inclus dans le prix de la formation, et aucun n\'est imposé.',
            'entetes' => ['Outil', 'Usage pendant la formation', 'Version ou édition', 'Coût public'],
            'lignes'  => [
                ['Questionnaire de maturité numérique EDIH', 'Base de la grille de diagnostic en six dimensions', 'Questionnaire pour les PME, version 2.1 du 8 février 2024', 'Gratuit, publié par le réseau européen des pôles d\'innovation numérique'],
                ['EvalNumPME (CPME)', 'Préparation possible pour les entreprises françaises : un premier regard avant la session', '14 questions sur la relation client, l\'offre, le management et les modèles de création de valeur', 'Gratuit, en ligne'],
                ['Tableur : Microsoft Excel ou Google Sheets', 'Modèles de diagnostic, de priorisation, de coût complet et de tableau de bord', 'Fichiers remis compatibles avec les deux', 'Google Workspace : Business Starter à 6,80 euros et Business Standard à 13,60 euros par utilisateur et par mois, prix affichés hors offre promotionnelle ; Google Sheets reste utilisable avec un compte Google gratuit'],
                ['Trello', 'Tableau de suivi de la feuille de route, une carte par chantier', 'Offres Free, Standard et Premium', 'Gratuit jusqu\'à 10 collaborateurs et 10 tableaux par espace de travail ; Standard à 5 dollars par utilisateur et par mois en paiement annuel (6 dollars au mois) ; Premium à 10 dollars en annuel'],
                ['Odoo, exemple de chantier chiffré', 'Exercice de coût complet sur trois ans d\'un logiciel de gestion', 'Odoo 20.0, dernière version (septembre 2026)', 'Une application gratuite ; Standard 19,90 euros par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 24,90 euros (en mensuel : 24,90 euros, puis 31,10 euros) ; Personnalisé 35,90 euros puis 44,90 euros (en mensuel : 44,90 euros, puis 56,90 euros) ; utilisateur léger 7,90 euros'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels indicateurs suivre pour savoir si la feuille de route avance vraiment ?',
            'intro' => 'Un chantier peut être livré à l\'heure sans rien changer pour l\'entreprise. Le tableau de bord sépare donc trois familles d\'indicateurs, et chaque chantier en reçoit au moins un de chaque.',
            'items' => [
                ['titre' => 'Résultat pour l\'entreprise', 'texte' => 'Ce que la direction cherchait : délai entre la livraison et la facture, nombre de devis relancés, ruptures de stock, réclamations, jours de clôture comptable. Il se mesure avant le lancement, sinon il ne prouvera rien.'],
                ['titre' => 'Adoption par les équipes', 'texte' => 'Part des factures émises dans le nouvel outil, nombre d\'utilisateurs actifs chaque semaine, tableurs parallèles encore tenus. Un outil livré mais contourné est un chantier inachevé.'],
                ['titre' => 'Avancement du chantier', 'texte' => 'Jalons tenus, budget consommé face au budget prévu, points ouverts chez le prestataire. Utile pour piloter, trompeur s\'il est le seul suivi.'],
                ['titre' => 'Une valeur de départ et une cible', 'texte' => 'Chaque indicateur porte sa valeur relevée avant le chantier, sa cible et sa date. « Améliorer le suivi client » ne se mesure pas ; « relancer chaque devis sous sept jours » se vérifie.'],
                ['titre' => 'Un responsable du relevé', 'texte' => 'Un nom par indicateur. Les chiffres que tout le monde devait relever ne sont relevés par personne au troisième mois.'],
                ['titre' => 'Peu d\'indicateurs', 'texte' => 'Trois par chantier, une page pour toute la feuille de route. Un tableau de quarante lignes ne se lit plus en comité, et ce qui ne se lit plus ne se pilote plus.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment la formation s\'organise-t-elle, de la demande à la revue trimestrielle ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez l\'organisation, la composition du comité, les outils en place et ce qui déclenche la demande : une échéance légale, un projet de logiciel, une croissance, un financement. Le premier échange, le cadrage et le devis sont gratuits.'],
                ['titre' => 'Cadrage avec le dirigeant', 'duree' => 'Environ une heure, deux à trois semaines avant', 'texte' => 'On fixe les objectifs des deux jours, les sujets sensibles, la liste des participants et les documents à rassembler. On vérifie aussi que la formation est le bon format, plutôt qu\'une mission de conseil ou une formation plus courte.'],
                ['titre' => 'Préparation par les participants', 'duree' => 'Une à deux semaines avant', 'texte' => 'Chacun remplit le questionnaire de diagnostic. Le dirigeant transmet l\'inventaire des abonnements, les objectifs de l\'entreprise et les devis en attente. Le formateur prépare la synthèse des écarts de perception.'],
                ['titre' => 'Premier jour', 'duree' => 'Deux demi-journées de 3 h 30', 'texte' => 'Diagnostic, carte des flux, liste longue des chantiers. Le comité repart avec un travail précis à confier aux équipes : mesurer les heures, les volumes et les erreurs.'],
                ['titre' => 'Intersession', 'duree' => 'Une à deux semaines conseillées', 'texte' => 'Les équipes chiffrent l\'existant. Cette pause donne au deuxième jour des données réelles plutôt que des impressions ; elle peut être supprimée si le calendrier l\'impose.'],
                ['titre' => 'Deuxième jour', 'duree' => 'Deux demi-journées de 3 h 30', 'texte' => 'Priorités, coût complet, vagues, indicateurs, gouvernance, plan des quatre-vingt-dix jours et restitution croisée.'],
                ['titre' => 'Mise au propre et suivi', 'duree' => 'Documents sous 72 heures', 'texte' => 'Les travaux du comité sont remis en fichiers modifiables. Pendant un mois, les questions de mise en œuvre passent par courriel ou WhatsApp, dans les conditions prévues au devis.'],
                ['titre' => 'Revue trimestrielle', 'duree' => 'Une demi-journée, en option', 'texte' => 'Trois mois plus tard, le comité relit son tableau de bord, corrige la vague en cours et prépare la suivante. Elle peut ensuite revenir chaque trimestre, ou être menée par le comité seul.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle conduite : groupe, méthode, supports et suivi ?',
            'intro' => 'Deux jours de travail en comité ne ressemblent pas à un cours magistral. Le formateur apporte la méthode, les modèles et les questions dérangeantes ; la direction apporte ses chiffres et prend les décisions.',
            'items' => [
                ['titre' => 'Un seul comité par groupe en intra', 'texte' => 'Quatre à dix personnes qui décident ensemble. Les apports de méthode durent rarement plus de vingt minutes ; le reste du temps, le comité travaille sur ses propres documents.'],
                ['titre' => 'Vos chiffres, pas des cas d\'école', 'texte' => 'Les exercices utilisent votre inventaire, vos objectifs, vos devis et les mesures faites par vos équipes. Les informations confidentielles restent dans vos fichiers.'],
                ['titre' => 'Des désaccords écrits', 'texte' => 'Quand deux directeurs défendent deux chantiers, la grille de priorisation oblige à argumenter sur les mêmes critères, et la décision est notée avec sa raison. Six mois plus tard, on sait pourquoi on a choisi.'],
                ['titre' => 'Le formateur tient le crayon, pas la décision', 'texte' => 'Il reformule, chiffre avec le comité, signale les incohérences et les coûts oubliés. Il ne choisit ni les priorités ni les fournisseurs.'],
                ['titre' => 'Les supports remis', 'texte' => 'La grille de diagnostic, les fiches de chantier, la grille de priorisation, le modèle de coût complet, le tableau de bord, le plan des quatre-vingt-dix jours, les supports des deux jours et une attestation nominative.'],
                ['titre' => 'Le suivi', 'texte' => 'Un mois de questions par courriel ou WhatsApp, prévu au devis, puis la revue trimestrielle si elle est retenue. Les modèles sont conçus pour que le comité continue seul ensuite.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la feuille de route d\'un comité selon le secteur et le pays ?',
            'items' => [
                ['secteur' => 'Négoce et distribution, à Cotonou', 'probleme' => 'Situation type : trois points de vente, un dépôt, une facture normalisée émise à part du suivi des stocks, et un devis de logiciel de gestion qui attend depuis six mois.', 'solution' => 'Le comité place la facturation reliée au stock en première vague, parce qu\'elle combine obligation fiscale et gain quotidien, repousse le site marchand à la troisième vague et fixe comme indicateur le délai entre la livraison et la facture.'],
                ['secteur' => 'PME de services, à Abidjan', 'probleme' => 'Situation type : la facture normalisée électronique est désormais la règle, et la direction découvre que ses devis, ses contrats et ses relances vivent dans trois outils différents.', 'solution' => 'La première vague traite la conformité de la facturation ; la direction profite du chantier pour unifier sa base clients, puis programme un outil de suivi commercial à la vague suivante, mesuré par le taux de relance des devis.'],
                ['secteur' => 'ONG et programmes financés, à Dakar', 'probleme' => 'Situation type : chaque projet a son tableur de suivi, construit selon les exigences de son bailleur, et le rapport consolidé demande deux semaines par trimestre.', 'solution' => 'Le comité fait de la base unique des activités et des bénéficiaires son chantier socle, intègre les règles de protection des données dès la conception et budgète la formation des équipes de terrain, souvent oubliée.'],
                ['secteur' => 'Groupe scolaire, à Lomé', 'probleme' => 'Situation type : inscriptions sur papier, frais encaissés en espèces et par Mobile Money, relances des impayés faites à la main chaque mois.', 'solution' => 'La feuille de route commence par le registre des élèves et des paiements, puis l\'encaissement mobile rapproché automatiquement, et laisse l\'espace parents en ligne pour une vague ultérieure, une fois les données fiables.'],
                ['secteur' => 'PME industrielle, en France', 'probleme' => 'Situation type : obligée de recevoir des factures électroniques depuis septembre 2026 et de les émettre en septembre 2027, l\'entreprise risque de traiter la réforme comme un simple changement de format.', 'solution' => 'Le comité inscrit la réforme comme vague imposée, en profite pour revoir le circuit de validation des achats, et mesure le délai de traitement d\'une facture fournisseur avant et après.'],
                ['secteur' => 'Cabinet de services, en Belgique ou en Suisse', 'probleme' => 'Situation type : une dizaine d\'abonnements en ligne souscrits par différents associés, sans vue d\'ensemble des coûts, des accès ni des contrats de traitement des données.', 'solution' => 'L\'inventaire du premier jour devient le premier chantier : reprise des comptes administrateurs, suppression des doublons, vérification des contrats au regard du RGPD, avant tout nouvel achat.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Sur place, à distance ou entre dirigeants de plusieurs entreprises : quel format choisir ?',
            'legende' => 'Les durées sont celles du programme complet ; le contenu reste identique d\'un format à l\'autre, seul le rythme change.',
            'entetes' => ['Format', 'Organisation', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Intra, avec intersession', 'Deux journées séparées d\'une à deux semaines, dans vos locaux ou une salle extérieure', 'Un comité, 4 à 10 décideurs', 'Le cas le plus fréquent : les équipes ont le temps de mesurer l\'existant entre les deux jours'],
                ['Intra, condensé', 'Deux journées consécutives', 'Un comité, 4 à 10 décideurs', 'Comité difficile à réunir deux fois, ou séminaire de direction hors des locaux ; les mesures sont alors préparées avant la session'],
                ['Inter-entreprises', 'Deux journées réunissant des dirigeants de plusieurs structures', '6 à 10 dirigeants, un ou deux par structure', 'Petite entreprise sans comité, réseau professionnel, association d\'entreprises ; chacun construit sa propre feuille de route'],
                ['À distance', 'Six séances de 2 h 30 sur trois semaines, en visioconférence', '6 décideurs au plus', 'Direction répartie entre plusieurs villes ou pays ; les exercices avancent entre les séances'],
                ['Hybride', 'Premier jour sur place, second jour en deux séances à distance', '4 à 8 décideurs', 'Le diagnostic gagne à se faire en salle ; la priorisation et le chiffrage se terminent bien à distance'],
                ['Revue trimestrielle', 'Une demi-journée, sur place ou à distance', 'Le même comité', 'Dans tous les cas où la feuille de route doit tenir au-delà du premier trimestre'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et comment se règle-t-elle ?',
            'intro'      => 'Chaque formule est chiffrée sur devis, ligne par ligne, après le premier échange ; ce premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l\'échéancier indiqué sur le devis.',
            'items'      => [
                ['offre' => 'Formation de direction', 'prix' => 'Sur devis', 'inclus' => ['Cadrage avec le dirigeant', 'Questionnaire de diagnostic et synthèse des écarts', 'Quatre demi-journées en comité', 'Modèles et travaux remis en fichiers modifiables', 'Un mois de questions de mise en œuvre']],
                ['offre' => 'Formation et revue trimestrielle', 'prix' => 'Sur devis', 'inclus' => ['Tout le contenu de la formation de direction', 'Une demi-journée de revue trois mois plus tard', 'Mise à jour de la feuille de route et de la vague suivante']],
                ['offre' => 'Session inter-entreprises', 'prix' => 'Sur devis', 'inclus' => ['Deux journées entre dirigeants de plusieurs structures', 'Modèles remis à chaque participant', 'Travail de chacun sur sa propre entreprise']],
            ],
            'variations' => [
                'Le format retenu, le nombre de séances et l\'option de revue trimestrielle.',
                'La taille du comité et le nombre de groupes.',
                'La préparation : analyse des questionnaires, de l\'inventaire et des devis transmis.',
                'Le lieu : Cotonou, une autre ville du Bénin, un autre pays, ou à distance ; les déplacements sont chiffrés à part lorsqu\'ils sont demandés.',
                'La langue de travail et des supports, français ou anglais.',
                'Les exigences d\'un financeur : formats de programme, feuilles de présence, attestations particulières.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il prendre en charge la formation ?',
            'paragraphes' => [
                'Parfois, selon le pays, le statut des participants et les règles du fonds, et jamais par avance : aucune prise en charge n\'est promise ici. En Côte d\'Ivoire, le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> précise, sur la page consultée le 5 octobre 2026, qu\'une entreprise qui justifie du paiement régulier des deux taxes peut déposer un plan de formation, avec des actions internes, intra-entreprise, inter-entreprises ou à l\'étranger ; le règlement n\'intervient qu\'après le contrôle de ses services et l\'approbation de sa Commission permanente.',
                'Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> consacre un guichet au financement du personnel des entreprises et des membres des organisations professionnelles, avec une demande déposée en ligne. Au Bénin, le Fonds de développement de la formation professionnelle continue et de l\'apprentissage (FODEFCA) a vu ses statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> ; ses conditions se vérifient directement auprès de lui avant toute demande.',
                'En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, parmi lesquels ceux des opérateurs de compétences (OPCO). Aucune certification Qualiopi ni aucun agrément de fonds n\'est revendiqué pour cette formation : une entreprise française la finance donc en principe sur son budget propre.',
                'Une difficulté propre aux formations de direction s\'ajoute : un gérant non salarié, un associé ou un administrateur ne relève pas toujours du même dispositif qu\'un directeur salarié. La bonne démarche consiste à interroger le fonds par écrit, programme et devis joints, avant de compter sur une prise en charge. Le programme détaillé, les feuilles de présence et les attestations nominatives sont fournis dans tous les cas, ce qui facilite le dossier lorsqu\'il est recevable.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs les comités commettent-ils dans les mois qui suivent la formation ?',
            'intro' => 'La feuille de route sort rarement fausse de la formation. Elle s\'abîme ensuite, dans les semaines où l\'activité reprend ses droits. Ces erreurs reviennent d\'une entreprise à l\'autre, et chacune a sa parade simple.',
            'items' => [
                ['titre' => 'Ranger la feuille de route dans un tiroir', 'texte' => 'Sans date de revue fixée avant de quitter la salle, la première réunion de suivi n\'a jamais lieu. La parade : inscrire les quatre revues de l\'année dans l\'agenda du comité le dernier jour.'],
                ['titre' => 'Lancer toutes les vagues à la fois', 'texte' => 'L\'enthousiasme de la fin de session pousse à tout démarrer. Deux chantiers lourds en même temps suffisent à occuper une PME ; les autres attendent leur vague.'],
                ['titre' => 'Déléguer le pilotage au prestataire', 'texte' => 'Le prestataire réalise ; il ne peut pas arbitrer entre vos directions ni dire si son propre travail sert vos objectifs. Le responsable de chantier reste un membre de votre organisation.'],
                ['titre' => 'Oublier le temps des équipes', 'texte' => 'Un chantier de logiciel de gestion mobilise les utilisateurs clés plusieurs heures par semaine pendant des mois. Si ce temps n\'est pas libéré ailleurs, le chantier glisse sans que personne ne l\'ait décidé.'],
                ['titre' => 'Sauter le chantier socle', 'texte' => 'Une base clients en double, des articles mal codés, des accès non maîtrisés : ces chantiers peu visibles conditionnent tous les autres. Les repousser pour livrer plus vite un projet spectaculaire coûte plus cher ensuite.'],
                ['titre' => 'Changer de priorité à chaque démonstration', 'texte' => 'Une nouvelle offre séduisante n\'entre dans la feuille de route qu\'à la revue trimestrielle, notée avec la même grille que les autres chantiers. C\'est la règle qui protège le comité contre ses propres coups de cœur.'],
                ['titre' => 'Garder la feuille de route pour la direction', 'texte' => 'Les équipes qui découvrent un nouvel outil le jour de son arrivée le subissent. Une présentation de la feuille de route, des raisons des choix et du calendrier évite bien des résistances.'],
                ['titre' => 'Mesurer seulement l\'avancement', 'texte' => 'Des jalons tenus rassurent, mais ne disent rien du résultat. Chaque revue commence par les indicateurs de résultat et d\'adoption, l\'avancement vient après.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qui rend une feuille de route dangereuse plutôt qu\'utile ?',
            'texte' => 'Trois configurations reviennent dans les échecs coûteux. La bascule de tout un système en une seule fois, sans retour possible, que raconte l\'histoire de la <a href="/histoires/tsb-migration">migration informatique de TSB</a>. Le chantier confié à un prestataire sans livraisons vérifiables en cours de route, comme dans l\'affaire <a href="/histoires/hertz-accenture">Hertz et Accenture</a>. Et la dépendance à une seule personne, interne ou externe, qui détient les accès et la connaissance. La formation apprend à repérer ces trois signaux dans sa propre feuille de route et à les corriger avant de signer : découper, exiger des livraisons partielles, documenter et partager les accès.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Que disent les statistiques publiques sur la transformation numérique des entreprises ?',
            'items' => [
                ['valeur' => '71 %', 'libelle' => 'Des PME de l\'Union européenne atteignaient en 2025 au moins un niveau basique d\'intensité numérique, 19 points sous l\'objectif de plus de 90 % fixé pour 2030 (données extraites en juin 2026)', 'source' => 'Eurostat, Towards Digital Decade targets for Europe', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=Towards_Digital_Decade_targets_for_Europe'],
                ['valeur' => '63 %', 'libelle' => 'Des entreprises de l\'Union utilisaient en 2025 l\'IA, des services d\'informatique en nuage avancés ou l\'analyse de données, pour un objectif de trois sur quatre en 2030', 'source' => 'Eurostat, Towards Digital Decade targets for Europe', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=Towards_Digital_Decade_targets_for_Europe'],
                ['valeur' => '30 %', 'libelle' => 'Des transformations numériques étudiées atteignaient ou dépassaient leurs objectifs, selon une étude publiée en octobre 2020 auprès de 825 dirigeants', 'source' => 'Boston Consulting Group, Flipping the Odds of Digital Transformation Success', 'url' => 'https://web-assets.bcg.com/c7/20/907821344bbb8ade98cbe10fc2b8/bcg-flipping-the-odds-of-digital-transformation-success-oct-2020.pdf'],
                ['valeur' => '71 %', 'libelle' => 'Des dirigeants de TPE et PME françaises estimaient en 2026 que le numérique apporte un bénéfice réel à leur entreprise, 7 points de moins qu\'un an plus tôt (baromètre publié le 17 septembre 2026)', 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '21 %', 'libelle' => 'Des TPE et PME françaises avaient suivi une formation au numérique en 2025', 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '39 %', 'libelle' => 'Des TPE et PME françaises avaient subi au moins un incident de cybersécurité au cours des douze mois précédant l\'enquête de 2026', 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, obligations fiscales, données : que change le contexte local pour une feuille de route ?',
            'paragraphes' => [
                'La connectivité fixe des limites que la feuille de route doit respecter. L\'Union internationale des télécommunications indiquait le 15 octobre 2025 que 36 % de la population africaine utilisait Internet, contre 74 % de la population mondiale. Pour un comité d\'Afrique francophone, cela se traduit en critères de choix : outils capables de fonctionner hors ligne puis de se synchroniser, usage d\'abord pensé pour le téléphone, connexion de secours budgétée pour les postes critiques.',
                'Les obligations fiscales fixent souvent la première vague. Au Bénin, la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">page du gouvernement publiée le 27 février 2020</a> impose aux assujettis à la TVA une facture normalisée émise par une machine électronique certifiée ou un logiciel validé par la Direction générale des impôts, sous peine d\'une amende de dix fois le montant de la facture, d\'au moins un million de francs CFA. En Côte d\'Ivoire, un <a href="https://www.fne.dgi.gouv.ci/uploads/communiques/COMMUNIQUE%20MISE%20EN%20OEUVRE%20DE%20LA%20FNE.pdf">communiqué de la DGI du 5 septembre 2025</a> a borné l\'usage de la facture normalisée papier au 1er décembre 2025 pour les régimes du réel, au 11 décembre pour les microentreprises et au 22 décembre pour les entreprenants.',
                'Au Sénégal, la <a href="https://www.presidence.sn/fr/actualites/new-deal-technologique-une-ambition-nationale-pour-faire-du-senegal-un-leader-de-leconomie-numerique-en-afrique/">présidence de la République</a> a lancé le 24 février 2025 le New Deal Technologique, stratégie numérique nationale déclinée en douze programmes prioritaires et cinquante projets phares, dont la dématérialisation de l\'administration. Pour une entreprise, la conséquence est pratique : les démarches publiques passent progressivement en ligne, et la feuille de route doit prévoir les comptes, les signatures et les données que ces démarches exigeront.',
                'En France, le <a href="https://www.impots.gouv.fr/sites/default/files/media/1_metier/2_professionnel/EV/2_gestion/290_facturation_electronique/guide_pratique_facturation_electronique.pdf">guide pratique de la DGFiP</a> rappelle que toutes les entreprises concernées doivent pouvoir recevoir des factures électroniques depuis le 1er septembre 2026, que les grandes entreprises et les entreprises de taille intermédiaire les émettent depuis cette date, et que l\'obligation d\'émission s\'applique aux PME, TPE et microentreprises à compter du 1er septembre 2027. Une échéance de ce type a sa place dans la feuille de route, comme vague imposée.',
                'Les données personnelles traversent tous les chantiers. Au Bénin, elles relèvent de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>. Dans l\'Union européenne, le RGPD s\'applique depuis le 25 mai 2018, y compris, comme l\'explique la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees">CNIL</a>, à une entreprise non établie en Europe qui offre des biens ou des services à des personnes qui s\'y trouvent. La formation se tient en français ; les supports peuvent être remis en anglais pour une direction ou un financeur anglophone.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi construire votre feuille de route avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il voit les feuilles de route depuis l\'endroit où elles se réalisent : il développe des applications, paramètre des logiciels de gestion, relie des outils entre eux et connaît le coût réel de ce qu\'un comité inscrit dans ses vagues. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé pour des structures de ' . count((array) fait('pays_travailles')) . ' pays d\'Afrique, d\'Europe et d\'Amérique du Nord.',
                'En formation, sa règle est de laisser la décision au comité : il apporte les modèles, les prix publics et les questions qui obligent à chiffrer, puis s\'efface devant les arbitrages. Parce qu\'il réalise aussi des projets, il le dit d\'emblée : la formation ne crée aucune obligation de lui confier la suite, et les documents produits sont conçus pour être remis à n\'importe quel prestataire. Il n\'est certifié par aucun éditeur et ne promet aucun résultat chiffré.',
                'Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, et les pays où il intervient sur la page des <a href="/zones/">zones d\'intervention</a>. Pour la mise en œuvre des chantiers retenus, la page <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a> décrit la prestation ; les autres <a href="/formations/domaine/transformation-digitale">formations en transformation digitale</a> et le <a href="/formations/">catalogue complet</a> présentent les suites possibles, comme la formation <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a> pour les équipes qui tiendront les tableaux de bord.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de réunir votre comité de direction ?',
            'texte' => 'Une feuille de route utile part des objectifs de l\'entreprise, pas des outils ; elle repose sur un diagnostic prouvé, un coût complet sur trois ans, deux chantiers lourds au plus à la fois, trois indicateurs par chantier avec leur valeur de départ, un responsable nommé et une revue chaque trimestre. Le comité qui l\'a construite sait la défendre et la corriger.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous que votre comité construise sa feuille de route numérique ?',
            'texte'  => 'Décrivez votre organisation, la composition de votre comité, les outils en place et l\'échéance qui vous presse : vous recevez une réponse sous 24 heures, puis une proposition de format et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Organiser la formation de direction'],
        ],
    ],

    'faq' => [
        ['q' => 'Quelle différence avec une mission de consultant en digitalisation ?', 'r' => 'Dans une mission de conseil, le consultant mène le diagnostic, rencontre les équipes et rédige la feuille de route. Dans cette formation, c\'est le comité de direction qui la construit, avec une méthode et des modèles qu\'il garde. La formation convient à une direction qui veut savoir refaire l\'exercice seule ; la mission, à une direction qui n\'a pas le temps de le faire.'],
        ['q' => 'Faut-il des connaissances techniques pour suivre la formation ?', 'r' => 'Non. La formation porte sur des décisions de gestion : priorités, budget, indicateurs, organisation. Le responsable informatique ou le prestataire de confiance peut être présent pour éclairer les contraintes techniques, mais le comité n\'a pas besoin de maîtriser les outils pour arbitrer.'],
        ['q' => 'Notre entreprise compte huit personnes : la formation est-elle adaptée ?', 'r' => 'Pour une très petite structure, la formation Digitaliser son entreprise pas à pas est souvent plus adaptée : elle part des outils simples et des premières étapes. Celle-ci convient lorsqu\'il existe plusieurs responsables à mettre d\'accord et plusieurs chantiers à ordonner. La session inter-entreprises permet aussi à un dirigeant seul de suivre le programme.'],
        ['q' => 'Sur combien d\'années la feuille de route porte-t-elle ?', 'r' => 'Le coût complet se calcule sur trois ans, mais la feuille de route elle-même est glissante sur dix-huit mois : la vague en cours est détaillée, les suivantes sont esquissées, et l\'ensemble est revu chaque trimestre. Un plan figé sur cinq ans n\'est construit que si un financeur ou une tutelle l\'exige.'],
        ['q' => 'Le formateur choisit-il les logiciels à notre place ?', 'r' => 'Non. Il présente des familles d\'outils, des prix publics et des critères de choix, et aide le comité à chiffrer les options. Le choix d\'un logiciel ou d\'un prestataire reste une décision de la direction, prise après la formation sur la base de la grille et des consultations prévues dans le plan des quatre-vingt-dix jours.'],
        ['q' => 'Nos données confidentielles sont-elles exposées pendant la formation ?', 'r' => 'Les comptes, les objectifs et les devis restent dans vos fichiers, sur vos ordinateurs. Aucun document de l\'entreprise n\'est déposé dans un service en ligne pendant la session, et les modèles remis fonctionnent dans un tableur ordinaire.'],
        ['q' => 'Que se passe-t-il si un membre du comité manque une demi-journée ?', 'r' => 'La feuille de route perd en solidité : la personne absente risque de contester ensuite des choix faits sans elle. C\'est pourquoi le calendrier est fixé avec le dirigeant lors du cadrage. En cas d\'absence imprévue, une courte séance de rattrapage peut être prévue au devis.'],
        ['q' => 'La formation peut-elle se faire entièrement à distance ?', 'r' => 'Oui, en six séances de deux heures trente réparties sur trois semaines, avec six décideurs au plus. Le diagnostic et la carte des flux se font par partage d\'écran ; les exercices de chiffrage avancent entre les séances. Le format hybride, avec un premier jour sur place, reste préférable quand il est possible.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits. Il dépend du format, de la taille du comité, de la préparation, du lieu, de la langue et de l\'option de revue trimestrielle. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Faut-il ensuite confier les chantiers à Richard SALANON ?', 'r' => 'Non. Les fiches de chantier et le modèle de coût complet sont rédigés pour être remis à n\'importe quel prestataire ou réalisés en interne. Si vous souhaitez lui confier un chantier, il fait l\'objet d\'un devis séparé.'],
        ['q' => 'Une obligation comme la facture électronique justifie-t-elle à elle seule une feuille de route ?', 'r' => 'Elle en fournit souvent la première vague, pas la feuille de route entière. La formation apprend à traiter l\'échéance imposée en priorité, puis à en profiter pour corriger un circuit qui gênait déjà l\'activité, plutôt que de s\'arrêter à la simple conformité.'],
    ],

    'sources' => [
        ['titre' => 'Boston Consulting Group, Flipping the Odds of Digital Transformation Success (octobre 2020)', 'url' => 'https://web-assets.bcg.com/c7/20/907821344bbb8ade98cbe10fc2b8/bcg-flipping-the-odds-of-digital-transformation-success-oct-2020.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Eurostat, Statistics Explained : Towards Digital Decade targets for Europe (données extraites en juin 2026)', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=Towards_Digital_Decade_targets_for_Europe', 'date' => '2026-10-05'],
        ['titre' => 'France Num (DGE), Baromètre France Num 2026 : le numérique et l\'intelligence artificielle dans les TPE et PME', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le', 'date' => '2026-10-05'],
        ['titre' => 'DGFiP, Facturation électronique : guide pratique de démarrage au 1er septembre 2026', 'url' => 'https://www.impots.gouv.fr/sites/default/files/media/1_metier/2_professionnel/EV/2_gestion/290_facturation_electronique/guide_pratique_facturation_electronique.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Direction générale des Impôts de Côte d\'Ivoire, communiqué du 5 septembre 2025 sur la facture normalisée électronique', 'url' => 'https://www.fne.dgi.gouv.ci/uploads/communiques/COMMUNIQUE%20MISE%20EN%20OEUVRE%20DE%20LA%20FNE.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, le règlement général sur la protection des données (RGPD)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet (15 octobre 2025)', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Présidence de la République du Sénégal, New Deal Technologique', 'url' => 'https://www.presidence.sn/fr/actualites/new-deal-technologique-une-ambition-nationale-pour-faire-du-senegal-un-leader-de-leconomie-numerique-en-afrique/', 'date' => '2026-10-05'],
        ['titre' => 'Réseau européen des pôles d\'innovation numérique (EDIH), questionnaire de maturité numérique pour les PME, version 2.1', 'url' => 'https://european-digital-innovation-hubs.ec.europa.eu/system/files/2024-02/DMA%20Questionnaire%20for%20SMEs_EDIH_network_EN_v2.1.pdf', 'date' => '2026-10-05'],
        ['titre' => 'France Num, évaluez votre maturité numérique avec EvalNumPME', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/diagnostic-numerique/evaluez-votre-maturite-numerique-avec', 'date' => '2026-10-05'],
        ['titre' => 'Google, tarifs de Google Workspace (prix affichés pour la France)', 'url' => 'https://workspace.google.com/intl/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Atlassian, tarifs de Trello', 'url' => 'https://trello.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, tarifs des offres', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement de la formation professionnelle', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['digitaliser-son-entreprise', 'digitalisation-processus', 'conduite-du-changement', 'chef-de-projet-digital', 'data-literacy', 'ia-generative-dirigeants'],
        'services'    => ['consultant-digitalisation', 'digitalisation-d-entreprise', 'audit-etude-de-projet'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
