<?php
// ============================================================
// data/formations/gouvernance-ia.php · Fiche formation « Gouverner l'IA dans
// l'entreprise : charte, données, responsabilités » (vague 1B, lot A, domaine
// ia-systemes-existants). Angle propre : charte d'usage, inventaire des usages
// et des outils, rôles et responsabilités, contrôle, revue périodique. Ne
// traite pas les décisions de budget et de premier projet (fiche
// ia-generative-dirigeants), la prise en main quotidienne (ia-en-entreprise)
// ni le droit et l'éthique enseignés à chaque salarié (ia-ethique-conformite).
// Aucune ancienne page. Faits externes relevés le 05/10/2026 : Commission
// européenne (calendrier du règlement sur l'IA, article 4 repris de la table
// des faits vérifiés), service d'assistance de la Commission (articles 26, 50
// et 99), CNIL (18 juillet 2024), ISO (ISO/IEC 42001, page lue par recherche),
// SGG du Bénin (loi n° 2017-20, articles 428, 430, 432, 435), ARTCI (loi
// ivoirienne n° 2013-450), OMPI (loi sénégalaise n° 2008-12), Union africaine,
// IBM, Microsoft. Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Gouverner l\'IA dans l\'entreprise : rédiger la charte d\'usage, inventorier les outils et les usages, répartir les responsabilités et organiser le contrôle',
    'title'   => 'Gouvernance de l\'IA : charte et contrôle | Richard SALANON',
    'meta'    => 'Formation à la gouvernance de l\'IA : charte d\'usage, inventaire des outils, rôles, circuit de validation, contrôles et revue périodique. Sur devis.',
    'en_bref' => 'Cette formation s\'adresse au groupe qui encadrera l\'IA dans l\'organisation : un membre de la direction, le référent des données personnelles, l\'informatique, le juridique ou la conformité, les ressources humaines et quelques responsables métiers. En deux jours, répartis en quatre demi-journées, il construit sur ses propres usages l\'inventaire des outils, la classification des usages, la charte, la répartition des rôles et le plan de contrôle, avec une revue à trois mois en option. Elle se tient dans vos locaux, à distance, en formule hybride ou en session réunissant plusieurs organisations. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'ia-systemes-existants',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, revue à 3 mois en option',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : faire l\'état des lieux et lancer l\'inventaire des usages et des outils',
            'duree'  => '3 h 30',
            'points' => [
                'Ce que gouverner l\'IA veut dire pour une organisation qui utilise des outils sans les fabriquer : savoir ce qui est utilisé, par qui, avec quelles données, sous la responsabilité de qui.',
                'Lecture commune des résultats du questionnaire envoyé aux équipes avant la session : outils cités, comptes personnels, fonctions d\'IA activées dans les logiciels déjà payés.',
                'Les sources qui révèlent les usages non déclarés : relevés de cartes bancaires, notes de frais, extensions de navigateur, applications installées sur les téléphones professionnels, journaux de la messagerie.',
                'Présentation du modèle d\'inventaire en quatorze champs, puis saisie des premières lignes par le groupe à partir de ses propres constats.',
                'Repérage des fournisseurs qui ont ajouté de l\'IA dans un logiciel existant par une simple mise à jour : messagerie, suite bureautique, ERP, outil de relation client.',
                'Restitution : la carte des usages de l\'organisation, avec les trous connus et la liste des services à interroger après la session.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : classer les usages par niveau de risque et bâtir le circuit de validation',
            'duree'  => '3 h 30',
            'points' => [
                'La grille de classement en quatre niveaux : usage libre, usage encadré, usage soumis à validation, usage interdit ; les critères qui font passer d\'un niveau à l\'autre.',
                'Le repérage des usages qui touchent aux personnes : recrutement, évaluation, crédit, santé, éducation, décisions sur des clients ou des bénéficiaires.',
                'Classement en séance de chaque ligne de l\'inventaire, avec justification écrite en une phrase, pour que la décision puisse être relue par un successeur.',
                'Le formulaire de demande d\'un nouvel usage : ce que le demandeur décrit, ce que le référent vérifie, qui décide et en combien de temps.',
                'Les cas où une analyse d\'impact sur la protection des données s\'impose, et le rôle du délégué ou du référent des données dans cette analyse.',
                'Mise en situation : trois demandes réelles ou plausibles de l\'organisation instruites de bout en bout avec le formulaire.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : rédiger la charte d\'usage et fixer les rôles et responsabilités',
            'duree'  => '3 h 30',
            'points' => [
                'Le plan type d\'une charte courte, lisible en dix minutes : objet, outils autorisés, données interdites, relecture humaine, transparence, propriété des contenus, signalement, sanctions, révision.',
                'Rédaction en sous-groupes, article par article, à partir des décisions prises la veille ; relecture croisée pour chasser les phrases vagues que personne ne pourra appliquer.',
                'L\'articulation de la charte avec les textes déjà en vigueur : règlement intérieur, charte informatique, contrats de travail, politique de sécurité, accords avec les représentants du personnel.',
                'La matrice des rôles : direction, référent IA, délégué ou référent des données, informatique et sécurité, juridique, ressources humaines, responsables métiers, utilisateurs.',
                'Le temps à accorder au référent IA, la personne qui le remplace en cas d\'absence et le lien direct qu\'il doit avoir avec la direction.',
                'Restitution : la charte en version 1, la matrice des rôles et la liste des points à faire valider par la direction.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : organiser les contrôles, les incidents et la revue périodique',
            'duree'  => '3 h 30',
            'points' => [
                'Les contrôles proportionnés : comptes administrés, accès retirés au départ d\'un salarié, relecture par échantillon, revue des abonnements, suivi des conditions des fournisseurs.',
                'Ce qu\'on ne fait pas : surveiller les conversations de chacun sans base légale, sans information préalable ni proportion avec le risque.',
                'La procédure d\'incident : donnée confiée par erreur, réponse fausse envoyée à un client, contenu généré publié sans mention, outil interdit découvert ; qui prévient qui, en combien de temps.',
                'Les indicateurs suivis par le comité : nombre d\'usages inventoriés, demandes instruites, délais de réponse, incidents, personnes informées, abonnements sans titulaire.',
                'Le calendrier de revue : point mensuel du référent, revue trimestrielle de l\'inventaire, révision annuelle de la charte, revue exceptionnelle après tout incident ou changement de loi.',
                'Plan de déploiement sur 90 jours, présentation de la charte aux équipes et validation des livrables par le membre de la direction présent.',
            ],
        ],
        [
            'titre'  => 'Revue à trois mois, en option : tenir la première revue périodique avec le formateur',
            'duree'  => '3 h',
            'points' => [
                'Mise à jour de l\'inventaire : usages découverts depuis la session, outils abandonnés, nouvelles fonctions activées par les éditeurs.',
                'Lecture des indicateurs et des incidents du trimestre, avec les causes et les mesures prises.',
                'Questions remontées par les équipes sur la charte : articles mal compris, cas non prévus, règles contournées parce qu\'elles gênaient le travail.',
                'Corrections de la charte et de la matrice des rôles, datées et versionnées.',
                'Fixation de la revue suivante et transfert complet de l\'animation au référent IA.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées ; revue à trois mois en option'],
        ['l' => 'Public', 'v' => 'Direction, référent des données, informatique, juridique, ressources humaines et responsables métiers'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saura faire votre organisation à la fin de la formation, et qu\'est-ce que celle-ci ne couvre pas ?',
            'paragraphes' => [
                'Dans la plupart des organisations, l\'IA est déjà là avant toute décision : un commercial rédige ses offres avec un assistant sur son compte personnel, la messagerie propose des résumés automatiques, l\'ERP a reçu une fonction de saisie intelligente avec sa dernière mise à jour. Personne ne sait vraiment qui utilise quoi, avec quelles données. Gouverner l\'IA, c\'est remettre de l\'ordre dans cette situation : savoir ce qui existe, décider ce qui est permis, nommer des responsables, vérifier que les règles sont tenues et les revoir à date fixe.',
                'À la fin des deux jours, le groupe repart avec sept livrables construits sur sa propre situation : un inventaire des usages et des outils, rempli et daté ; la classification de chaque usage en quatre niveaux de risque ; un formulaire et un circuit de validation des nouveaux usages ; la charte d\'usage en version 1, prête à être présentée aux équipes ; une matrice qui dit qui décide, qui exécute et qui est consulté ; une procédure d\'incident ; un calendrier de contrôle et de revue avec ses indicateurs. Chaque livrable est un fichier modifiable qui appartient à l\'organisation.',
                'La formation ne remplace pas trois autres sujets, traités ailleurs. Le choix des cas d\'usage, le budget et le pilotage d\'un premier projet relèvent de la formation <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>. La prise en main des assistants par les équipes est l\'objet de la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>. Et ce que chaque salarié doit savoir du droit des données, du secret et des biais s\'apprend dans la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>, que la charte rend ensuite obligatoire pour les personnes concernées.',
                'Elle ne prépare pas non plus une certification ISO, et ne tient pas lieu d\'avis juridique : quand un usage touche au recrutement, au crédit ou à la santé, le circuit de validation prévoit justement de consulter un juriste. Enfin, elle ne promet aucune conformité clé en main. Une gouvernance de l\'IA vaut ce que valent les personnes qui la font vivre ; la session sert à leur donner une méthode, des modèles et un calendrier, puis à vérifier, trois mois plus tard, que le dispositif tient.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui doit participer, avec quels prérequis, et que faut-il préparer ?',
            'intro' => 'La gouvernance de l\'IA ne se délègue pas à une seule personne. Le groupe idéal réunit ceux qui décident, ceux qui protègent les données et ceux qui connaissent les usages du terrain. Aucune compétence technique n\'est exigée.',
            'items' => [
                ['titre' => 'Un membre de la direction', 'texte' => 'Directeur général, secrétaire général ou directeur des opérations : il valide les livrables en fin de session et porte la charte devant les équipes. Sans lui, le groupe produit un document que personne n\'a le pouvoir d\'imposer.'],
                ['titre' => 'Le référent des données personnelles', 'texte' => 'Le délégué à la protection des données quand il existe, ou la personne qui tient ce rôle sans le titre. Il apporte le registre des traitements, s\'il est tenu, et la connaissance des formalités auprès de l\'autorité de protection du pays.'],
                ['titre' => 'L\'informatique et la sécurité', 'texte' => 'Responsable informatique, administrateur des comptes ou prestataire d\'infogérance : c\'est lui qui sait quels comptes sont administrés, quels journaux existent et comment retirer un accès le jour d\'un départ.'],
                ['titre' => 'Le juridique, la conformité et les ressources humaines', 'texte' => 'Juriste interne, responsable conformité ou contrôle interne, et responsable des ressources humaines : ils relient la charte au règlement intérieur, aux contrats de travail et aux obligations sectorielles.'],
                ['titre' => 'Deux ou trois responsables métiers', 'texte' => 'Commercial, finance, service client ou programmes : ils connaissent les usages réels et empêchent le groupe d\'écrire des règles inapplicables. Ce sont souvent eux qui deviennent ensuite les relais de la charte dans leur service.'],
                ['titre' => 'La préparation demandée', 'texte' => 'Le questionnaire d\'usages diffusé aux équipes deux semaines avant ; la liste des abonnements logiciels et des relevés de cartes des six derniers mois ; le règlement intérieur et la charte informatique existante ; le registre des traitements s\'il existe ; les contrats des principaux fournisseurs de logiciels.'],
                ['titre' => 'Le matériel', 'texte' => 'Une salle avec écran, un ordinateur pour deux participants, un accès au tableur partagé qui recevra l\'inventaire. Les consoles d\'administration des outils déjà utilisés sont consultées en séance par la personne qui en détient les accès, jamais par le formateur seul.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que contient l\'inventaire des usages et des outils construit en séance ?',
            'legende' => 'Le modèle remis compte quatorze champs. Une ligne correspond à un usage, pas à un outil : le même assistant peut servir à rédiger des courriers (usage libre) et à présélectionner des candidatures (usage soumis à validation), et ces deux lignes n\'ont pas le même niveau de risque.',
            'entetes' => ['Champ', 'Question posée', 'Exemple de réponse'],
            'lignes'  => [
                ['Usage', 'Que fait-on concrètement avec l\'outil ?', 'Rédiger les premières versions des réponses aux appels d\'offres'],
                ['Service et nombre d\'utilisateurs', 'Qui s\'en sert, et combien de personnes ?', 'Direction commerciale, 4 personnes'],
                ['Outil et offre', 'Quel produit, quelle formule, quelle version ?', 'Assistant d\'IA en offre d\'équipe, ou fonction d\'IA d\'un logiciel déjà payé'],
                ['Titulaire du compte', 'Le compte appartient-il à l\'organisation ou au salarié ?', 'Compte administré par l\'informatique ; ou compte personnel gratuit'],
                ['Données confiées', 'Quelles catégories de données entrent dans l\'outil ?', 'Documents publics, prix internes, aucune donnée nominative'],
                ['Données personnelles', 'Des personnes identifiables apparaissent-elles ?', 'Oui : noms et téléphones de prospects'],
                ['Hébergement et réutilisation', 'Où sont traitées les données, et servent-elles à entraîner les modèles ?', 'Hors du pays ; réutilisation désactivée dans les réglages de l\'offre'],
                ['Effet sur des personnes', 'Le résultat influence-t-il une décision sur un client, un candidat, un salarié ?', 'Non, document relu avant envoi'],
                ['Relecture humaine', 'Qui vérifie le résultat avant usage ?', 'Le chef des ventes, sur chaque réponse'],
                ['Niveau de risque', 'Libre, encadré, soumis à validation ou interdit ?', 'Encadré'],
                ['Responsable de l\'usage', 'Quelle personne nommée en répond ?', 'La directrice commerciale'],
                ['Coût', 'Combien coûte l\'usage par mois, et sur quel budget ?', 'Quatre sièges, budget commercial'],
                ['Date de validation', 'Quand l\'usage a-t-il été validé, et par qui ?', 'Validé par le comité le 12 du mois'],
                ['Prochaine revue', 'Quand cette ligne sera-t-elle réexaminée ?', 'À la revue trimestrielle suivante'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment classer les usages de l\'IA selon leur niveau de risque ?',
            'legende' => 'Grille de départ proposée en formation, que chaque organisation ajuste à son secteur. Le niveau retenu dépend de l\'usage et des données, jamais du seul nom de l\'outil.',
            'entetes' => ['Niveau', 'Définition', 'Exemples', 'Condition', 'Qui décide'],
            'lignes'  => [
                ['1. Libre', 'Contenus publics ou internes sans donnée personnelle ni secret, résultat relu par son auteur', 'Reformuler un texte, préparer un plan de présentation, traduire une documentation publique', 'Outil figurant sur la liste autorisée, compte de l\'organisation', 'Personne : l\'usage est permis par la charte'],
                ['2. Encadré', 'Données internes ou commerciales, sans décision sur une personne', 'Synthèse de comptes rendus, premières versions d\'offres, analyse d\'un tableau de ventes', 'Compte administré, réutilisation des données désactivée, relecture par une personne nommée', 'Le responsable du service, puis inscription à l\'inventaire'],
                ['3. Soumis à validation', 'Données personnelles, données sensibles, ou résultat qui influence une décision sur une personne', 'Tri de candidatures, aide à l\'octroi d\'un crédit, réponses automatiques aux clients, analyse de dossiers de patients ou de bénéficiaires', 'Analyse préalable, avis du référent des données et du juridique, essai limité, contrôle renforcé', 'Le comité de gouvernance, avec la direction'],
                ['4. Interdit', 'Usage contraire à la loi, à la charte ou aux engagements de l\'organisation', 'Coller un dossier client dans un compte personnel gratuit, publier un visage ou une voix modifiés sans mention, décider seul d\'un licenciement sur la base d\'un score', 'Aucune', 'La charte, révisée par la direction'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que doit contenir une charte d\'usage de l\'IA, et que faut-il en laisser dehors ?',
            'intro' => 'Une charte d\'usage n\'est pas un traité. Celle que le groupe rédige en séance tient sur quatre à six pages, se lit en dix minutes et répond aux questions que se pose un salarié devant un outil. Les détails techniques vont en annexe.',
            'items' => [
                ['titre' => 'L\'objet et le champ', 'texte' => 'À qui la charte s\'applique (salariés, stagiaires, prestataires, bénévoles), sur quels appareils et quels comptes, et pour quels outils : assistants conversationnels, fonctions d\'IA intégrées aux logiciels, générateurs d\'images, de voix ou de vidéos.'],
                ['titre' => 'La liste des outils autorisés', 'texte' => 'Placée en annexe pour être mise à jour sans réécrire la charte. Un outil absent de la liste n\'est pas interdit pour autant : il passe par le formulaire de demande, ce qui évite de pousser les usages vers la clandestinité.'],
                ['titre' => 'Les données qui ne vont dans aucun outil', 'texte' => 'Écrites en clair, par catégorie et avec des exemples de l\'organisation : dossiers de santé, fichiers de bénéficiaires, salaires, mots de passe, contrats sous clause de confidentialité, données bancaires des clients.'],
                ['titre' => 'La relecture humaine', 'texte' => 'Tout contenu produit avec l\'IA et envoyé à l\'extérieur est relu par une personne qui en assume le contenu. La charte dit qui relit quoi, et rappelle que l\'auteur reste responsable du texte qu\'il signe.'],
                ['titre' => 'La transparence', 'texte' => 'Quand mentionner l\'usage de l\'IA : chatbot qui répond aux clients, image ou vidéo modifiée, texte publié pour informer le public. Les règles européennes de transparence s\'appliquent à certains de ces cas ; la charte peut aller au-delà.'],
                ['titre' => 'La propriété et la conservation', 'texte' => 'Les conversations, consignes et documents produits dans le cadre du travail appartiennent à l\'organisation, restent dans ses comptes et suivent ses règles de conservation et de suppression.'],
                ['titre' => 'Le signalement', 'texte' => 'À qui signaler une erreur, une donnée confiée par mégarde ou un usage douteux, et l\'engagement qu\'un signalement de bonne foi ne sera pas sanctionné. Sans cette promesse, les incidents restent cachés.'],
                ['titre' => 'Les sanctions et la révision', 'texte' => 'Le renvoi au règlement intérieur pour les manquements, la date de la prochaine révision et le nom de la personne qui tient la charte à jour. Une charte sans date de révision vieillit en quelques mois.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Qui fait quoi dans la gouvernance de l\'IA ?',
            'legende' => 'Matrice de départ remplie en séance. « Décide » : tranche et en répond ; « Pilote » : organise et fait avancer ; « Exécute » : réalise le travail ; « Consulté » : donne un avis avant la décision ; « Informé » : reçoit la décision. Dans une petite structure, une même personne tient souvent plusieurs colonnes ; l\'important est qu\'aucune ligne ne reste vide.',
            'entetes' => ['Activité', 'Direction', 'Référent IA', 'Référent des données', 'Informatique et sécurité', 'Juridique et RH', 'Responsables métiers'],
            'lignes'  => [
                ['Adopter et réviser la charte', 'Décide', 'Pilote', 'Consulté', 'Consulté', 'Consulté', 'Consulté'],
                ['Tenir l\'inventaire à jour', 'Informé', 'Pilote', 'Consulté', 'Exécute', 'Informé', 'Exécute'],
                ['Instruire une demande de nouvel usage', 'Décide pour le niveau 3', 'Pilote', 'Consulté', 'Consulté', 'Consulté', 'Exécute'],
                ['Choisir et administrer les comptes', 'Décide du budget', 'Consulté', 'Consulté', 'Exécute', 'Informé', 'Consulté'],
                ['Vérifier les conditions des fournisseurs', 'Informé', 'Pilote', 'Consulté', 'Exécute', 'Exécute', 'Informé'],
                ['Mener l\'analyse d\'impact sur les données', 'Décide', 'Consulté', 'Pilote', 'Consulté', 'Consulté', 'Exécute'],
                ['Informer et former les équipes', 'Décide', 'Pilote', 'Exécute', 'Exécute', 'Exécute', 'Exécute'],
                ['Traiter un incident', 'Informé, ou décide si grave', 'Pilote', 'Exécute si données personnelles', 'Exécute', 'Consulté', 'Exécute'],
                ['Tenir la revue périodique', 'Décide des suites', 'Pilote', 'Consulté', 'Consulté', 'Consulté', 'Consulté'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment une demande de nouvel usage est-elle instruite, du formulaire à l\'inventaire ?',
            'items' => [
                ['titre' => 'Demande écrite', 'duree' => 'Quinze minutes pour le demandeur', 'texte' => 'Le salarié ou le service remplit le formulaire : ce qu\'il veut faire, avec quel outil, quelles données, combien de personnes, et ce qui se passerait si l\'outil se trompait. Un formulaire trop long décourage ; celui remis en formation tient sur une page.'],
                ['titre' => 'Qualification par le référent IA', 'duree' => 'Sous trois jours ouvrés', 'texte' => 'Le référent classe la demande dans la grille. Un usage de niveau 1 est accordé tout de suite et inscrit à l\'inventaire ; un usage de niveau 2 passe au responsable du service ; un usage de niveau 3 est préparé pour le comité.'],
                ['titre' => 'Examen des données et du fournisseur', 'duree' => 'Une à deux semaines pour un niveau 3', 'texte' => 'Le référent des données vérifie la base légale, la nécessité d\'une analyse d\'impact et les transferts hors du pays ; l\'informatique vérifie l\'administration des comptes, la réutilisation des données et les journaux disponibles.'],
                ['titre' => 'Essai limité', 'duree' => 'Quelques semaines', 'texte' => 'Pour un usage sensible, un essai sur un petit périmètre, avec des données fictives ou anonymisées quand c\'est possible, et une relecture de chaque résultat. L\'essai a une date de fin écrite à l\'avance.'],
                ['titre' => 'Décision motivée', 'duree' => 'À la réunion suivante du comité', 'texte' => 'Accord, accord sous conditions ou refus, avec une phrase de justification. Un refus explique ce qui permettrait de revenir avec une nouvelle demande.'],
                ['titre' => 'Inscription et information', 'duree' => 'Le jour de la décision', 'texte' => 'L\'usage entre dans l\'inventaire avec son responsable, son niveau et sa date de revue ; les utilisateurs concernés reçoivent les conditions d\'usage par écrit.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels contrôles mettre en place sans surveiller chaque salarié ?',
            'intro' => 'Un contrôle utile vérifie que les règles sont tenues sans transformer l\'organisation en système de surveillance. Ceux qui sont travaillés en formation portent d\'abord sur les comptes, les fournisseurs et les résultats, rarement sur les personnes.',
            'items' => [
                ['titre' => 'Les comptes', 'texte' => 'Chaque mois, l\'informatique compare la liste des comptes d\'IA ouverts à celle du personnel. Un compte sans titulaire actif est fermé ; un salarié qui part rend ses accès le jour même, et ses conversations restent à l\'organisation.'],
                ['titre' => 'Les dépenses', 'texte' => 'La comptabilité signale tout abonnement à un outil d\'IA payé par carte ou en note de frais qui ne figure pas à l\'inventaire. C\'est souvent le moyen le plus simple de découvrir un usage non déclaré.'],
                ['titre' => 'Les fournisseurs', 'texte' => 'Une fois par trimestre, le référent relit les changements de conditions des principaux éditeurs : réutilisation des données, lieu d\'hébergement, nouvelles fonctions activées par défaut. Une mise à jour peut faire changer un usage de niveau.'],
                ['titre' => 'Les résultats', 'texte' => 'Pour les usages de niveau 2 et 3, le responsable relit un échantillon de productions chaque mois : réponses aux clients, synthèses, analyses. Il cherche les erreurs, les données qui n\'auraient pas dû y figurer et les mentions manquantes.'],
                ['titre' => 'Les journaux', 'texte' => 'Quand l\'outil en produit, les journaux d\'activité sont conservés selon une durée fixée à l\'avance et consultés en cas d\'incident ou de contrôle. Pour un système à haut risque au sens du règlement européen, l\'article 26 fixe un minimum de six mois.'],
                ['titre' => 'La connaissance de la charte', 'texte' => 'Un court questionnaire après la présentation de la charte, puis à chaque révision, montre ce qui a été compris. Le résultat sert à corriger la charte ou l\'information, pas à classer les salariés.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que demandent les textes à une organisation qui utilise l\'IA, et où cela se range-t-il dans la gouvernance ?',
            'legende' => 'Textes lus le 5 octobre 2026 sur les sites officiels cités dans les sources. Le tableau sert à ranger chaque obligation dans un livrable de la gouvernance ; il ne remplace pas l\'avis d\'un juriste sur une situation particulière.',
            'entetes' => ['Texte', 'Ce qu\'il demande', 'Livrable concerné'],
            'lignes'  => [
                ['Règlement européen sur l\'IA, article 4', 'Selon les questions et réponses de la Commission mises à jour le 27 juillet 2026 : obligation de maîtrise de l\'IA applicable depuis le 2 février 2025, contrôlée et sanctionnée depuis le 3 août 2026 ; l\'omnibus numérique sur l\'IA, entré en vigueur mi-juillet 2026, la maintient pour les fournisseurs et les utilisateurs professionnels, sans plus imposer de niveau « suffisant »', 'Plan d\'information et de formation, traces conservées'],
                ['Règlement européen sur l\'IA, article 26', 'Pour les systèmes à haut risque : utilisation conforme à la notice, surveillance humaine confiée à des personnes compétentes, formées et dotées de l\'autorité nécessaire, journaux conservés au moins six mois, information des représentants du personnel et des salariés concernés avant la mise en service sur le lieu de travail', 'Matrice des rôles, contrôles, procédure de validation de niveau 3'],
                ['Règlement européen sur l\'IA, article 50', 'Le déployeur d\'un système qui produit un hypertrucage (image, son ou vidéo) indique que le contenu a été généré ou manipulé ; un texte publié pour informer le public sur des questions d\'intérêt public est signalé, sauf relecture humaine et responsabilité éditoriale', 'Article « transparence » de la charte'],
                ['Règlement européen sur l\'IA, article 99', 'Amendes jusqu\'à 35 millions d\'euros ou 7 % du chiffre d\'affaires mondial pour les pratiques interdites, 15 millions ou 3 % pour d\'autres manquements, 7,5 millions ou 1 % pour des informations inexactes fournies aux autorités ; pour les PME, le plus bas des deux montants', 'Classement des usages, usages interdits'],
                ['Loi béninoise n° 2017-20 portant code du numérique, articles 428, 430, 432 et 435', 'Analyse d\'impact avant un traitement susceptible d\'engendrer un risque élevé, notamment par le recours à de nouvelles technologies ; délégué à la protection des données obligatoire dans certains cas, chargé d\'informer, de conseiller et de contrôler ; registre des activités de traitement, dont les PME sont dispensées sauf traitement à risque, non occasionnel ou portant sur des données sensibles', 'Inventaire, circuit de validation, rôle du référent des données'],
                ['Loi sénégalaise n° 2008-12 du 25 janvier 2008, articles 18, 20, 48 et 49', 'Déclaration préalable de la plupart des traitements à la Commission des données personnelles, autorisation pour certains traitements sensibles comme les données biométriques ; aucune décision produisant des effets juridiques fondée sur le seul traitement automatisé d\'aspects de la personnalité ; transfert vers un pays tiers soumis à un niveau de protection suffisant et à l\'information de la Commission', 'Classement des usages de niveau 3, inventaire des hébergements'],
                ['Loi ivoirienne n° 2013-450 du 19 juin 2013', 'Protection des données à caractère personnel, sous le contrôle de l\'ARTCI, qui exerce la fonction d\'autorité de protection', 'Inventaire, formalités à vérifier avec le référent des données'],
                ['Recommandations de la CNIL du 18 juillet 2024', 'Partir de besoins concrets, définir les usages autorisés et interdits, choisir un mode de déploiement adapté, éviter les comptes ouverts avec des adresses personnelles, former les utilisateurs, mettre en place une gouvernance associant le délégué à la protection des données, mener une analyse d\'impact quand elle s\'impose', 'Ensemble du dispositif, en France et comme référence ailleurs'],
                ['Norme ISO/IEC 42001:2023', 'Exigences pour établir, mettre en œuvre, tenir à jour et améliorer en continu un système de management de l\'IA, pour les organisations de toute taille qui fournissent ou utilisent des produits ou services fondés sur l\'IA ; norme volontaire', 'Structure de la revue périodique et de l\'amélioration continue'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Que montrent les études sur les usages non encadrés de l\'IA ?',
            'items' => [
                ['valeur' => '78 %', 'libelle' => 'Utilisateurs de l\'IA au travail qui apportent leurs propres outils, sans passer par leur employeur, selon une enquête auprès de 31 000 personnes dans 31 pays publiée le 8 mai 2024', 'source' => 'Microsoft et LinkedIn, Work Trend Index 2024', 'url' => 'https://news.microsoft.com/source/2024/05/08/microsoft-and-linkedin-release-the-2024-work-trend-index-on-the-state-of-ai-at-work/'],
                ['valeur' => '60 %', 'libelle' => 'Dirigeants interrogés dans la même enquête qui déclarent que leur entreprise n\'a ni vision ni plan pour mettre l\'IA en œuvre (8 mai 2024)', 'source' => 'Microsoft et LinkedIn, Work Trend Index 2024', 'url' => 'https://news.microsoft.com/source/2024/05/08/microsoft-and-linkedin-release-the-2024-work-trend-index-on-the-state-of-ai-at-work/'],
                ['valeur' => '63 %', 'libelle' => 'Organisations victimes d\'une violation de données qui n\'avaient pas de politique de gouvernance de l\'IA ou étaient encore en train d\'en rédiger une ; 600 organisations étudiées entre mars 2024 et février 2025 (communiqué du 30 juillet 2025)', 'source' => 'IBM, Cost of a Data Breach Report 2025', 'url' => 'https://newsroom.ibm.com/2025-07-30-ibm-report-13-of-organizations-reported-breaches-of-ai-models-or-applications,-97-of-which-reported-lacking-proper-ai-access-controls'],
                ['valeur' => '34 %', 'libelle' => 'Organisations dotées d\'une politique de gouvernance de l\'IA qui contrôlent régulièrement les usages non autorisés (30 juillet 2025)', 'source' => 'IBM, Cost of a Data Breach Report 2025', 'url' => 'https://newsroom.ibm.com/2025-07-30-ibm-report-13-of-organizations-reported-breaches-of-ai-models-or-applications,-97-of-which-reported-lacking-proper-ai-access-controls'],
                ['valeur' => '1 sur 5', 'libelle' => 'Organisations ayant subi une violation liée à des outils d\'IA utilisés sans approbation, avec un surcoût associé de 670 000 dollars (30 juillet 2025)', 'source' => 'IBM, Cost of a Data Breach Report 2025', 'url' => 'https://newsroom.ibm.com/2025-07-30-ibm-report-13-of-organizations-reported-breaches-of-ai-models-or-applications,-97-of-which-reported-lacking-proper-ai-access-controls'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi interdire l\'IA ne suffit-il pas à la gouverner ?',
            'paragraphes' => [
                'Le réflexe de nombreuses directions, devant les risques, est d\'interdire. Les chiffres ci-dessus montrent ce qui se passe ensuite : quand près de huit utilisateurs sur dix apportent déjà leurs propres outils, selon l\'enquête de Microsoft et LinkedIn publiée le 8 mai 2024, une interdiction déplace les usages vers les téléphones et les comptes personnels, là où l\'organisation ne voit plus rien. Le risque ne disparaît pas ; il devient invisible.',
                'La gouvernance enseignée ici part du constat inverse : on encadre mieux ce qu\'on connaît. L\'inventaire fait d\'abord apparaître les usages réels, le classement distingue ceux qui ne posent aucun problème de ceux qui en posent, et le circuit de validation offre une voie officielle à ceux qui veulent essayer un outil. Les interdictions restent, mais elles sont rares, précises et expliquées, ce qui les rend respectables.',
                'C\'est aussi la logique de la CNIL, qui recommande dans ses questions et réponses du 18 juillet 2024 de définir les usages autorisés et interdits en partant des besoins, plutôt qu\'une prohibition générale, et d\'éviter les comptes ouverts avec des adresses personnelles. Pour une organisation, la question utile n\'est donc pas « faut-il autoriser l\'IA ? », mais « quels usages, avec quels comptes, quelles données et quel contrôle ? ».',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'À quel rythme revoir l\'inventaire, la charte et les contrôles ?',
            'legende' => 'Calendrier remis en fin de session. Les dates sont inscrites dans les agendas des personnes concernées avant de quitter la salle ; une revue qui n\'a pas de date n\'a jamais lieu.',
            'entetes' => ['Fréquence', 'Ce qui est revu', 'Qui', 'Ce qui en sort'],
            'lignes'  => [
                ['Chaque mois', 'Comptes ouverts et fermés, abonnements payés, demandes en attente, incidents du mois', 'Référent IA et informatique, une heure', 'Comptes fermés, demandes relancées, note d\'une page au comité'],
                ['Chaque trimestre', 'Inventaire complet, niveaux de risque, conditions des fournisseurs, indicateurs, échantillons relus', 'Comité de gouvernance, deux heures', 'Inventaire daté, usages reclassés, décisions écrites'],
                ['Chaque année', 'Charte, matrice des rôles, grille de classement, plan d\'information des équipes', 'Comité et direction, une demi-journée', 'Nouvelle version de la charte, présentée aux équipes'],
                ['Après un incident', 'Cause, données touchées, personnes à prévenir, règle qui a manqué', 'Référent IA, référent des données, informatique, sous quelques jours', 'Mesures correctives, mise à jour de la charte si nécessaire'],
                ['Après un changement extérieur', 'Nouvelle loi, nouvelle date d\'application, nouvelle offre ou nouvelles conditions d\'un éditeur', 'Référent IA et juridique', 'Analyse d\'effet sur l\'inventaire et la charte'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se déroule la formation : groupe, méthode, supports et suivi ?',
            'intro' => 'Ces deux jours ressemblent davantage à un atelier de production qu\'à un cours. Le formateur apporte la méthode, les modèles et les textes ; le groupe apporte sa situation, prend les décisions et repart avec ses documents.',
            'items' => [
                ['titre' => 'Un groupe transversal et restreint', 'texte' => 'Dix personnes au plus, issues de fonctions différentes. La confrontation entre l\'informatique, le juridique et les métiers fait partie de la méthode : chacun découvre ce que les autres savent des usages réels.'],
                ['titre' => 'Votre situation comme matière', 'texte' => 'L\'inventaire est rempli avec les réponses de vos équipes, la charte est écrite à partir de vos décisions, les demandes instruites sont les vôtres. Aucun modèle n\'est recopié tel quel : une charte copiée chez une autre organisation ne correspond jamais à vos usages.'],
                ['titre' => 'Des textes lus à la source', 'texte' => 'Les obligations sont présentées à partir des textes officiels et des recommandations des autorités, avec la date de lecture. Quand un point dépasse le cadre de la formation, il est noté pour le juriste plutôt que tranché en séance.'],
                ['titre' => 'Les supports remis', 'texte' => 'Le modèle d\'inventaire, la grille de classement, le formulaire de demande, la charte en version 1, la matrice des rôles, la procédure d\'incident, le calendrier de revue et les supports de la session, dans des formats modifiables, avec une attestation nominative par participant.'],
                ['titre' => 'Un suivi organisé', 'texte' => 'La revue à trois mois, si elle est retenue, permet de tenir la première revue trimestrielle avec le formateur. Les modalités d\'échange entre la session et cette revue sont fixées dans le devis.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils utilise-t-on pour tenir la gouvernance, et combien coûtent-ils ?',
            'legende' => 'La gouvernance n\'exige aucun logiciel spécialisé pour démarrer. Les outils ci-dessous sont ceux que l\'organisation possède le plus souvent déjà ; le formateur les configure avec elle sur ses propres comptes.',
            'entetes' => ['Besoin', 'Outil utilisé en formation', 'Coût pour l\'organisation'],
            'lignes'  => [
                ['Inventaire des usages', 'Tableur partagé : Excel, Google Sheets ou LibreOffice Calc', 'Inclus dans les suites déjà utilisées, ou gratuit avec LibreOffice'],
                ['Formulaire de demande', 'Microsoft Forms, Google Forms ou formulaire papier scanné', 'Inclus dans Microsoft 365 et Google Workspace'],
                ['Charte et procédures', 'Traitement de texte avec suivi des versions', 'Inclus dans les suites bureautiques'],
                ['Administration des comptes d\'IA', 'Console d\'administration de l\'offre d\'équipe retenue, ou console Microsoft 365 et Google Workspace', 'Comprise dans les offres d\'équipe ; les prix publics de ces offres sont comparés dans le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>'],
                ['Suivi des incidents', 'Registre simple dans le tableur, ou outil de tickets déjà en place', 'Aucun coût supplémentaire dans la plupart des cas'],
                ['Cadre de référence', 'Norme ISO/IEC 42001:2023, à acheter auprès de l\'ISO ou de l\'organisme national de normalisation si l\'organisation vise une démarche formelle', 'Prix fixé par l\'éditeur de la norme ; achat non nécessaire pour suivre la formation'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la gouvernance de l\'IA selon le secteur et le pays ?',
            'items' => [
                ['secteur' => 'Institution de microfinance, au Bénin ou au Togo', 'probleme' => 'Les agents de crédit utilisent un assistant pour rédiger leurs notes d\'analyse, et un fournisseur propose un score automatique d\'octroi des prêts.', 'solution' => 'Les notes rédigées sans nom de client restent en niveau 2 ; le score d\'octroi passe en niveau 3, avec analyse d\'impact au sens de l\'article 428 de la loi béninoise, décision finale toujours humaine et relecture d\'un échantillon de dossiers chaque mois.'],
                ['secteur' => 'Cabinet d\'avocats ou étude notariale, à Dakar ou à Abidjan', 'probleme' => 'Les collaborateurs font des recherches et des premiers jets avec des assistants grand public ; le secret professionnel interdit toute fuite de dossier.', 'solution' => 'Charte qui interdit tout élément identifiant d\'un dossier dans un outil non administré, liste fermée d\'outils autorisés, et renvoi des pratiques métier vers la formation <a href="/formations/ia-droit-ohada">IA et droit OHADA</a>.'],
                ['secteur' => 'ONG et programmes financés, en Afrique de l\'Ouest et centrale', 'probleme' => 'Plusieurs bureaux pays utilisent des outils différents, et un bailleur demande comment l\'organisation encadre l\'IA dans le traitement des données de bénéficiaires.', 'solution' => 'Inventaire commun aux bureaux, charte unique traduite en explications locales, référent IA par pays, revue trimestrielle partagée et réponse écrite au bailleur appuyée sur ces documents.'],
                ['secteur' => 'PME industrielle ou de services, en France ou en Belgique', 'probleme' => 'L\'entreprise a activé les fonctions d\'IA de sa suite bureautique et doit montrer qu\'elle informe ses salariés, comme le prévoit l\'article 4 du règlement européen.', 'solution' => 'Inventaire des fonctions activées, charte courte présentée en réunion d\'équipe, plan d\'information avec traces conservées, et classement en niveau 3 de tout projet touchant au recrutement.'],
                ['secteur' => 'Clinique ou réseau de santé', 'probleme' => 'Des soignants dictent des comptes rendus à un outil de transcription installé sur leur téléphone.', 'solution' => 'Usage interdit en l\'état ; demande instruite pour un outil administré par l\'établissement, avec avis du référent des données, hébergement vérifié et relecture de chaque compte rendu par son auteur.'],
                ['secteur' => 'Groupe de distribution, à Douala ou à Libreville', 'probleme' => 'Le service client veut un robot qui réponde aux clients sur WhatsApp et sur le site.', 'solution' => 'Usage classé en niveau 3 : mention claire que le client échange avec un robot, procédure de reprise par un humain, relecture des conversations par échantillon et responsable nommé ; la réalisation technique relève de la formation <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour mettre en place votre gouvernance de l\'IA ?',
            'legende' => 'Les formats se combinent. Pour une organisation de quelques personnes, une seule journée de travail avec le dirigeant et la personne qui tient l\'administratif peut suffire ; le premier échange sert à le déterminer.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Intra, dans vos locaux', '2 jours en 4 demi-journées', '10 personnes au plus, toutes de l\'organisation', 'Le cas général : les livrables sont produits sur vos usages et validés sur place par la direction'],
                ['Intra et revue à trois mois', '2 jours, puis une demi-journée trois mois plus tard', 'Le même groupe', 'Vous voulez que la première revue trimestrielle soit tenue avec le formateur avant de voler de vos propres ailes'],
                ['Inter-organisations', '2 jours', 'Référents de plusieurs structures d\'un réseau, d\'une fédération ou d\'un groupement', 'Petites structures qui ne peuvent pas réunir un groupe complet ; chacune repart avec ses propres documents, les informations internes restent hors de la séance commune'],
                ['À distance', '5 séances de 2 h 30', '8 personnes au plus', 'Groupe réparti entre plusieurs sites ou pays ; l\'inventaire et les articles de la charte avancent entre les séances'],
                ['Hybride', 'Une journée sur place, puis 3 séances à distance', '10 personnes au plus', 'Inventaire et classement en salle, rédaction de la charte et du plan de contrôle à distance'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et comment se règle-t-elle ?',
            'intro'      => 'Le prix est établi sur devis. Le premier échange, le cadrage et le devis sont gratuits ; le devis détaille chaque poste. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux outils d\'IA et l\'achat éventuel de la norme ISO ne sont jamais compris dans le prix.',
            'items'      => [
                ['offre' => 'Formation en intra', 'prix' => 'Sur devis', 'inclus' => ['Analyse du questionnaire d\'usages', 'Quatre demi-journées de production', 'Inventaire, grille, formulaire, charte, matrice, procédure, calendrier', 'Attestation nominative par participant']],
                ['offre' => 'Formation et revue à trois mois', 'prix' => 'Sur devis', 'inclus' => ['Tout le contenu de la formation', 'Revue de trois heures à trois mois', 'Mise à jour de l\'inventaire et de la charte', 'Transfert de l\'animation au référent IA']],
                ['offre' => 'Session inter-organisations', 'prix' => 'Sur devis', 'inclus' => ['Deux jours en groupe mixte', 'Modèles adaptés à chaque structure', 'Travail individuel sur ses propres usages', 'Attestation nominative']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'La taille de l\'organisation et le nombre de services ou de bureaux à inventorier.',
                'La préparation : analyse du questionnaire, lecture des contrats fournisseurs et des documents internes.',
                'Le format et le lieu : Cotonou, une autre ville du Bénin, un autre pays, ou à distance.',
                'La revue à trois mois et le suivi retenu.',
                'La langue de travail et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il prendre en charge cette formation ?',
            'paragraphes' => [
                'C\'est possible dans certains pays, jamais garanti, et toujours à vérifier avant d\'engager la dépense. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> consultée le 5 octobre 2026 prévoit qu\'une entreprise à jour de ses deux taxes de formation dépose un plan de formation, et que le paiement intervient après contrôle par les services du fonds et approbation de sa Commission permanente. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> propose un guichet consacré au personnel des entreprises, avec une demande en ligne.',
                'Au Bénin, les statuts du FODEFCA, le fonds de la formation professionnelle continue, ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> indique que, depuis le 1er janvier 2022, l\'accès aux fonds publics et mutualisés, dont ceux des OPCO, suppose un prestataire certifié Qualiopi. Richard SALANON ne détient ni cette certification ni l\'agrément d\'un fonds.',
                'La démarche conseillée est simple : adresser au fonds, par écrit, le programme et le devis, et attendre sa réponse avant de bâtir le budget sur une prise en charge. Pour une formation de gouvernance, précisez que les participants sont des salariés qui tiendront ensuite des fonctions de contrôle : certains fonds examinent le lien entre la formation et le poste. Le programme, les feuilles de présence et les attestations sont fournis dans tous les cas.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer une gouvernance de l\'IA après la formation ?',
            'intro' => 'Une charte se juge six mois après sa signature, sur ce qui est encore appliqué. Les mêmes écarts reviennent d\'une organisation à l\'autre ; la session les anticipe.',
            'items' => [
                ['titre' => 'Une charte trop longue', 'texte' => 'Trente pages rédigées pour se protéger ne sont lues par personne. Les règles essentielles tiennent en quelques pages ; le reste va en annexe ou dans les procédures du référent.'],
                ['titre' => 'Un inventaire figé', 'texte' => 'Rempli avec soin une fois, il ne reflète plus la réalité trois mois plus tard. Sans revue trimestrielle inscrite à l\'agenda, l\'inventaire devient une photographie ancienne qui rassure à tort.'],
                ['titre' => 'Un référent sans temps ni autorité', 'texte' => 'Nommer quelqu\'un sans réduire sa charge revient à ne nommer personne. Le temps accordé au référent est fixé par écrit, et il rend compte directement à un membre de la direction.'],
                ['titre' => 'Des délais de validation trop longs', 'texte' => 'Si une demande attend six semaines, les salariés cessent de demander et utilisent l\'outil quand même. Les usages de niveau 1 et 2 doivent obtenir une réponse en quelques jours.'],
                ['titre' => 'Oublier l\'IA ajoutée aux logiciels existants', 'texte' => 'Les fonctions activées par une mise à jour de la messagerie, de l\'ERP ou de l\'outil de relation client échappent à l\'inventaire si l\'on ne cherche que les assistants connus. La revue des fournisseurs les fait apparaître.'],
                ['titre' => 'Un contrôle vécu comme une sanction', 'texte' => 'Quand la découverte d\'un usage non déclaré entraîne une punition, les usages se cachent. La charte distingue l\'usage révélé de bonne foi, qu\'on régularise, de la violation délibérée d\'une interdiction.'],
                ['titre' => 'Des comptes au nom des salariés', 'texte' => 'Un abonnement payé avec la carte personnelle d\'un salarié lui appartient, avec ses conversations et ses documents. Les comptes utilisés pour le travail sont ouverts au nom de l\'organisation, avec une adresse professionnelle.'],
                ['titre' => 'Une charte jamais présentée', 'texte' => 'Envoyée par courriel en pièce jointe, elle reste non lue. Une présentation de trente minutes par service, avec les exemples de ce service, et une question de vérification à la fin, changent la situation.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Peut-on lire les conversations des salariés avec un assistant d\'IA ?',
            'texte' => 'Techniquement, souvent oui : les consoles d\'administration donnent accès à des journaux d\'activité. Juridiquement, c\'est un traitement de données personnelles des salariés, qui doit avoir un but défini, rester proportionné, figurer dans la charte et être annoncé à l\'avance. Pour un système à haut risque utilisé sur le lieu de travail, l\'article 26 du règlement européen impose aussi d\'informer les représentants du personnel et les salariés concernés avant la mise en service. Règle retenue en formation : journaux consultés seulement en cas d\'incident ou de contrôle défini, par des personnes nommées, chaque consultation tracée ; toute autre surveillance attend l\'avis d\'un juriste du droit du travail. L\'histoire d\'<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> rappelle l\'autre face : l\'organisation répond de ce que ses outils disent.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Données, langues, connexion : que change le contexte de l\'Afrique francophone et de l\'Europe ?',
            'paragraphes' => [
                'En Afrique francophone, la gouvernance de l\'IA s\'appuie d\'abord sur les lois de protection des données, déjà en vigueur et souvent antérieures au règlement européen. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> impose, à son article 428, une analyse d\'impact avant tout traitement susceptible d\'engendrer un risque élevé, en particulier par le recours à de nouvelles technologies ; son article 435 prévoit un registre des activités de traitement, dont les PME sont dispensées sauf traitement à risque, non occasionnel ou portant sur des données sensibles.',
                'Au Sénégal, la <a href="https://www.wipo.int/edocs/lexdocs/laws/fr/sn/sn009fr.pdf">loi n° 2008-12 du 25 janvier 2008</a> a institué la Commission des données personnelles et interdit, à son article 48, qu\'une décision produisant des effets juridiques repose sur le seul traitement automatisé d\'aspects de la personnalité. En Côte d\'Ivoire, la <a href="https://www.autoritedeprotection.ci/lois/">loi n° 2013-450 du 19 juin 2013</a> protège les données à caractère personnel, et l\'ARTCI y exerce la fonction d\'autorité de protection. La formation relève, pour chaque pays du groupe, l\'autorité compétente et les formalités à confirmer avec elle.',
                'À l\'échelle du continent, le Conseil exécutif de l\'Union africaine a adopté une stratégie continentale de l\'IA lors de sa 45e session ordinaire, à Accra, les 18 et 19 juillet 2024, selon le <a href="https://au.int/en/pressreleases/20240828/african-union-committed-developing-ai-capabilities-africa">communiqué de l\'Union africaine du 28 août 2024</a>, qui appelle notamment à des cadres juridiques protégeant contre les biais et les abus. Les lois nationales sur l\'IA restent rares ; une organisation qui se dote d\'une charte et d\'un inventaire dès maintenant sera prête quand elles viendront.',
                'La langue compte aussi : la charte est écrite en français, mais sa présentation se fait dans les langues que parlent réellement les équipes, avec des exemples tirés de leur travail. Quant à la connexion, l\'Union internationale des télécommunications estimait dans ses chiffres du 15 octobre 2025 que 36 % de la population africaine utilisait Internet : quand le réseau coupe, les salariés basculent vers leur téléphone et leurs données mobiles, donc vers des comptes personnels. La charte doit prévoir ce cas plutôt que l\'ignorer.',
                'En Europe, le règlement sur l\'IA s\'ajoute au RGPD. Selon la <a href="https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai">page de la Commission européenne</a> mise à jour le 3 août 2026, le texte est entré en vigueur le 1er août 2024, les pratiques interdites et la maîtrise de l\'IA s\'appliquent depuis le 2 février 2025, les obligations de transparence entrent en application en août 2026, et l\'omnibus entré en vigueur le 27 juillet 2026 reporte au 2 décembre 2027 celles des systèmes à haut risque de l\'annexe III, comme l\'emploi ou l\'éducation. Une organisation installée en Afrique qui sert des clients européens doit regarder les deux cadres.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi construire votre gouvernance de l\'IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il conçoit et exploite lui-même des outils d\'IA : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il connaît donc les questions qu\'un fournisseur doit savoir trancher sur les données, les comptes et les journaux, et celles qu\'une organisation cliente doit lui poser. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé pour des structures de ' . count((array) fait('pays_travailles')) . ' pays, en Afrique francophone, en Europe et au Canada.',
                'Sa façon de former tient en quelques règles : produire les documents de l\'organisation pendant la session plutôt que remettre des modèles génériques, citer les textes avec leur date de lecture, renvoyer vers un juriste ce qui relève d\'un avis juridique, et ne promettre ni conformité garantie ni résultat chiffré. Il n\'est certifié par aucun éditeur d\'IA, ne revendique aucune certification ISO et ne se présente comme partenaire officiel d\'aucun fournisseur. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur la page des <a href="/zones/">zones d\'intervention</a>.',
                'Quand la gouvernance est en place, la suite dépend de vos projets : une mission de <a href="/services/consultant-digitalisation">consultant en digitalisation</a> pour accompagner le comité dans la durée, une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a> pour les usages de niveau 3 qui demandent un outil sur mesure, ou la formation <a href="/formations/ia-processus-metier">IA dans les processus métier</a> pour choisir les étapes à confier à l\'IA. Les formations voisines sont réunies sur la page <a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>, et l\'ensemble du catalogue sur la page des <a href="/formations/">formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer la gouvernance de l\'IA dans votre organisation ?',
            'texte' => 'Commencez par savoir ce qui est utilisé, classez chaque usage selon ses données et ses effets sur les personnes, écrivez une charte courte avec une voie officielle pour les nouvelles demandes, nommez un référent qui a du temps et l\'oreille de la direction, contrôlez les comptes, les fournisseurs et les résultats plutôt que les personnes, et inscrivez les dates de revue dans les agendas avant de quitter la salle.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous mettre en place la gouvernance de l\'IA dans votre organisation ?',
            'texte'  => 'Décrivez votre organisation, ses pays d\'implantation, les outils d\'IA déjà repérés et les personnes qui participeraient : vous recevez une réponse sous 24 heures, puis une proposition de format et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Organiser une formation gouvernance de l\'IA'],
        ],
    ],

    'faq' => [
        ['q' => 'Notre organisation est petite : a-t-elle besoin d\'une gouvernance de l\'IA ?', 'r' => 'Oui, mais à sa mesure. Pour une structure de dix personnes, l\'inventaire tient sur une page, la charte sur deux, et le dirigeant tient souvent lui-même le rôle de référent. L\'essentiel reste de savoir quels outils sont utilisés, avec quelles données et sur quels comptes.'],
        ['q' => 'Quelle différence avec la formation IA, éthique et conformité des données ?', 'r' => 'Celle-ci s\'adresse au groupe qui organise l\'encadrement : inventaire, charte, rôles, contrôles, revue. La formation IA, éthique et conformité des données apprend à chaque salarié ce que le droit et l\'éthique lui demandent quand il utilise un outil. La charte peut rendre cette seconde formation obligatoire pour certains postes.'],
        ['q' => 'Repart-on avec une charte prête à signer ?', 'r' => 'Avec une version 1 complète, rédigée sur vos décisions, que la direction valide et que le juriste ou le conseil de l\'organisation relit avant sa diffusion. Les points qui demandent un avis juridique sont listés à part pendant la session.'],
        ['q' => 'Qui doit devenir référent IA ?', 'r' => 'Une personne qui connaît l\'organisation, inspire confiance aux équipes et dispose de temps réservé, souvent issue de l\'organisation, du contrôle interne, de l\'informatique ou de la qualité. Ce n\'est pas forcément un profil technique ; c\'est un rôle de coordination, rattaché à la direction.'],
        ['q' => 'Faut-il un délégué à la protection des données pour suivre la formation ?', 'r' => 'Non. Si l\'organisation n\'en a pas, la personne qui s\'occupe des données personnelles en tient lieu. La formation rappelle les cas où la loi impose un délégué, comme l\'article 430 de la loi béninoise n° 2017-20, et ce que cela change pour la gouvernance.'],
        ['q' => 'La formation prépare-t-elle à la certification ISO/IEC 42001 ?', 'r' => 'Non. La norme sert de cadre de référence pour structurer la revue et l\'amélioration continue, mais une certification par un organisme tiers est un projet distinct, plus long, qui suppose un système de management complet et un audit. La formation pose les fondations qu\'un tel projet reprendrait.'],
        ['q' => 'Le règlement européen sur l\'IA concerne-t-il une organisation africaine ?', 'r' => 'Il peut la concerner quand elle met un système d\'IA sur le marché européen ou quand le résultat de ce système est utilisé dans l\'Union. Le cas se vérifie avec un juriste. Dans tous les cas, les lois nationales de protection des données s\'appliquent déjà aux usages de l\'IA qui traitent des données personnelles.'],
        ['q' => 'Faut-il interdire ChatGPT et les autres assistants grand public ?', 'r' => 'Rarement en bloc. La méthode enseignée distingue les usages : les comptes personnels gratuits sont en général exclus pour les données de l\'organisation, tandis que des comptes d\'équipe administrés peuvent être autorisés pour des usages précis. Une interdiction générale tend à déplacer les usages vers les téléphones.'],
        ['q' => 'Combien de temps faut-il pour que la gouvernance fonctionne ?', 'r' => 'Les documents sont produits en deux jours. Il faut ensuite environ trois mois pour présenter la charte, compléter l\'inventaire et tenir une première revue trimestrielle ; c\'est l\'objet de la revue à trois mois proposée en option.'],
        ['q' => 'La formation peut-elle réunir plusieurs bureaux ou pays ?', 'r' => 'Oui, à distance ou en formule hybride. L\'inventaire est commun, la charte est unique, et les différences de droit entre pays sont relevées pays par pays, avec l\'autorité de protection compétente pour chacun.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, après un premier échange gratuit. Il dépend du nombre de participants, de la taille de l\'organisation, de la préparation, du format, du lieu et de la revue à trois mois. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
    ],

    'sources' => [
        ['titre' => 'Commission européenne, cadre réglementaire de l\'IA : calendrier d\'application du règlement et omnibus (mise à jour du 3 août 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 (mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, service d\'assistance sur le règlement sur l\'IA : article 26, obligations des déployeurs de systèmes à haut risque', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-26', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, service d\'assistance sur le règlement sur l\'IA : article 50, obligations de transparence', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, service d\'assistance sur le règlement sur l\'IA : article 99, sanctions', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-99', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, les questions-réponses sur l\'utilisation d\'un système d\'IA générative (18 juillet 2024)', 'url' => 'https://www.cnil.fr/fr/les-questions-reponses-de-la-cnil-sur-lutilisation-dun-systeme-dia-generative', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, Comment déployer une IA générative ? La CNIL apporte de premières précisions (18 juillet 2024)', 'url' => 'https://www.cnil.fr/fr/comment-deployer-une-ia-generative-la-cnil-apporte-de-premieres-precisions', 'date' => '2026-10-05'],
        ['titre' => 'ISO, ISO/IEC 42001:2023, systèmes de management de l\'intelligence artificielle', 'url' => 'https://www.iso.org/standard/42001', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 428, 430, 432 et 435)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Autorité de protection de Côte d\'Ivoire (ARTCI), lois : loi n° 2013-450 du 19 juin 2013 relative à la protection des données à caractère personnel', 'url' => 'https://www.autoritedeprotection.ci/lois/', 'date' => '2026-10-05'],
        ['titre' => 'OMPI, WIPO Lex : loi sénégalaise n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel', 'url' => 'https://www.wipo.int/edocs/lexdocs/laws/fr/sn/sn009fr.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Union africaine, communiqué du 28 août 2024 sur la stratégie continentale de l\'IA', 'url' => 'https://au.int/en/pressreleases/20240828/african-union-committed-developing-ai-capabilities-africa', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft et LinkedIn, 2024 Work Trend Index (8 mai 2024)', 'url' => 'https://news.microsoft.com/source/2024/05/08/microsoft-and-linkedin-release-the-2024-work-trend-index-on-the-state-of-ai-at-work/', 'date' => '2026-10-05'],
        ['titre' => 'IBM, communiqué du 30 juillet 2025 sur le Cost of a Data Breach Report 2025', 'url' => 'https://newsroom.ibm.com/2025-07-30-ibm-report-13-of-organizations-reported-breaches-of-ai-models-or-applications,-97-of-which-reported-lacking-proper-ai-access-controls', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-ethique-conformite', 'ia-generative-dirigeants', 'ia-en-entreprise', 'ia-audit-controle', 'securite-donnees-dirigeants', 'ia-processus-metier'],
        'services'    => ['consultant-digitalisation', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
