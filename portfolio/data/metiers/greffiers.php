<?php
// ============================================================
// data/metiers/greffiers.php · Page « formations par métier » : greffiers
// (vague 1C, univers Droit et justice, non prioritaire, statut F).
// Angle propre : le greffe des juridictions (enrôlement, registres,
// convocations et notifications, plumitif, mise en forme et authentification
// des décisions, copies et certificats, archives, numérisation des
// procédures, accueil du public, RCCM quand il est tenu au greffe, casier
// judiciaire). Le travail du juge (recherche pour juger, délibéré,
// motivation) relève de la page magistrats-juges ; la vie du cabinet, de la
// page avocats ; les minutes notariales, de la page notaires : rien n'en est
// repris.
// Faits externes lus le 05/10/2026 à la source : OHADA (présentation et
// sommaire de l'AUDCG du 15 décembre 2010 ; ERSUMA en bref) ; École
// nationale des greffes (métier de greffier, formation statutaire) ;
// ministère de la Justice (IA, 6 février 2025 ; rapport du 23 juin 2025 ;
// procédure pénale numérique, 21 juin 2023 ; prise de date dématérialisée ;
// effectifs au 1er décembre 2025) ; CNGTC (statut, missions, déontologie) ;
// règlement (UE) 2024/1689 lu sur EUR-Lex dans le navigateur (annexe III,
// point 8 a) ; RGPD sur le site de la CNIL (articles 10 et 55) ; portail
// service-public.bj (fiches PS00373, PS00024, PS00063) ; MonEntreprise.bj
// (coûts et délais) ; e-justice.ci (casier judiciaire, certificat de
// nationalité) ; APDP ; FDFP ; « Faits déjà vérifiés » du catalogue
// (article 4, Odoo, n8n, WhatsApp). Richard n'est pas greffier : la page
// le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA et numérique pour greffiers : tenir les registres, suivre convocations et notifications, numériser les procédures et mieux accueillir le public, sans jamais céder l\'authentification des actes',
    'title'   => 'Formation IA et numérique pour greffiers | Richard SALANON',
    'meta'    => 'Former un greffe au numérique et à l\'IA : registres, convocations, notifications, numérisation, archives, RCCM et accueil du public. Prix sur devis.',
    'en_bref' => 'Cette page s\'adresse aux greffiers, aux greffiers en chef, aux directeurs de greffe et aux agents qui tiennent les registres, les audiences, les archives et l\'accueil d\'une juridiction. Le parcours type compte cinq demi-journées pour le greffe, plus une demi-journée réservée à l\'encadrement, et se tient sur place, à distance ou en formule hybride, avec les applicatifs et les registres de la juridiction. Richard SALANON forme à l\'usage des outils ; la procédure, la signature et l\'authenticité des actes restent celles du greffier. Le prix est fixé sur devis.',
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Droit et justice',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : la chaîne du greffe, de l\'enrôlement au versement aux archives',
            'duree'  => '3 h 30',
            'points' => [
                'Dessin collectif du parcours d\'une affaire dans le greffe des participants : arrivée de l\'acte introductif, enrôlement, mise au rôle, convocations, audience, plumitif, mise en forme de la décision, signature, notification, délivrance des copies, classement, archives.',
                'Pour chaque geste, le support réel : registre papier, applicatif du ministère, tableur tenu à côté, messagerie, carnet personnel.',
                'Repérage des doubles saisies, des attentes et des pertes de pièces, mesurées sur une dizaine de dossiers récents.',
                'Les textes qui fixent ce que le greffe ne délègue pas : authentification des actes, tenue des registres, secret de l\'enquête et de l\'instruction, données des justiciables.',
                'Exercice : chaque participant classe quinze gestes de sa semaine en trois catégories, puis le groupe confronte les classements avec le chef de greffe.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : registres auxiliaires et tableaux de suivi qui ne mentent pas',
            'duree'  => '3 h 30',
            'points' => [
                'Le tableur à sa place : un outil de suivi à côté du registre officiel, jamais un registre parallèle qui le remplace en silence.',
                'Construction d\'un tableau de suivi des notifications : date d\'envoi, mode, retour, avis de réception, relance, avec des listes déroulantes et des contrôles de saisie.',
                'Statistiques mensuelles du greffe sans recopie : affaires entrées, jugées, en attente, délais moyens, par chambre ou par cabinet.',
                'Protection des colonnes de calcul, historique des versions, accès limité aux personnes du service.',
                'Exercice : reprise d\'un tableau réel du greffe, anonymisé, pour en corriger la structure et les totaux.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : les écrits du greffe avec un assistant d\'IA, sur des éléments neutralisés',
            'duree'  => '3 h 30',
            'points' => [
                'Ce qu\'un assistant d\'IA peut préparer au greffe : trames de convocations et d\'avis, lettres d\'information aux justiciables, réponses types de l\'accueil, notes de service, fiches de procédure internes.',
                'Neutraliser avant tout envoi : noms, adresses, numéros de dossier, de parquet et de registre remplacés par des repères.',
                'Mise en forme d\'un dispositif dicté, sur un exemple fictif, et pourquoi la version qui part à la signature est relue mot à mot contre la minute.',
                'Le compte à utiliser : l\'outil fourni par le ministère ou la juridiction quand il existe, jamais un compte personnel pour une pièce de procédure.',
                'Exercice en binôme : une série de convocations et de lettres produites à partir d\'une trame, puis contrôlées par un autre binôme.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : numériser les dossiers et les registres, et organiser les archives',
            'duree'  => '3 h 30',
            'points' => [
                'Plan de classement et règle de nommage des fichiers, communs à tout le greffe : juridiction, année, numéro, nature de la pièce, version.',
                'Numérisation : résolution, format, reconnaissance de caractères, contrôle page à page, journal de numérisation signé par l\'agent.',
                'La copie numérique ne remplace pas l\'original tant qu\'un texte ne le prévoit pas : ce qui se conserve, ce qui se verse, ce qui se détruit et sur quelle décision.',
                'Retrouver un dossier en moins d\'une minute : index, mots-clés, recherche dans le texte reconnu, et ses limites sur les pièces manuscrites.',
                'Exercice : numérisation et indexation d\'un dossier fictif complet, contrôlée par un autre participant.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : registres publics, services en ligne et accueil du public',
            'duree'  => '3 h 30',
            'points' => [
                'Le registre du commerce et du crédit mobilier quand il est tenu au greffe : immatriculations, mentions modificatives, inscriptions de sûretés, extraits, et le lien avec le fichier national.',
                'Casier judiciaire, certificats et copies de décisions demandés en ligne : ce que le portail fait seul, ce que le greffe vérifie, ce qu\'il délivre et à qui.',
                'Accueil du public : informer et orienter sans donner de consultation, fiches pratiques relues par un magistrat, réponses écrites conservées.',
                'Messages aux usagers par SMS ou WhatsApp : rappel d\'une date déjà notifiée selon les formes, jamais convocation ni notification en soi.',
                'Exercice : cartographie du circuit « demande de copie » du greffe, du guichet au retrait, avec les points de contrôle à garder.',
            ],
        ],
        [
            'titre'  => 'Demi-journée encadrement : sécurité des registres, règle d\'usage du greffe et évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Pour les greffiers en chef et les directeurs de greffe : comptes nominatifs, droits par service, départ ou mutation d\'un agent, mots de passe jamais partagés au guichet.',
                'Sauvegardes des fichiers locaux du greffe et test de restauration, en lien avec le service informatique du ressort.',
                'Rédaction de la règle d\'usage du greffe en deux pages : outils autorisés, données interdites, relecture, conservation, référent.',
                'Pour les greffes établis dans l\'Union européenne : l\'obligation de maîtrise de l\'IA de l\'article 4 du règlement européen et la trace des formations suivies.',
                'Évaluation : un dossier fictif traité de bout en bout, avec une adresse erronée dans une convocation et une page manquante dans une numérisation à repérer.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Greffiers, greffiers en chef, directeurs de greffe, agents de saisie, d\'archives et d\'accueil'],
        ['l' => 'Durée', 'v' => '5 demi-journées pour le greffe, plus 1 pour l\'encadrement'],
        ['l' => 'Formats', 'v' => 'Sur place, à distance ou hybride, en petits groupes'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que changent l\'IA, la digitalisation et l\'automatisation pour un greffe ?',
            'paragraphes' => [
                'Le greffe est la mémoire et la main de la juridiction. Il enregistre les affaires, prévient les parties des dates d\'audience, tient la plume pendant les débats, met en forme les décisions, les authentifie, les notifie, en délivre les copies et les conserve. L\'École nationale des greffes résume l\'enjeu en une phrase : la signature du greffier sur un jugement est indispensable pour qu\'il ait valeur d\'acte authentique, et tout acte accompli en son absence peut être frappé de nullité. Aucun outil ne change cette règle ; beaucoup changent la façon d\'y arriver.',
                'Le papier recule déjà, à des rythmes très différents. En France, la procédure pénale numérique, conduite avec le ministère de l\'Intérieur depuis 2018, a réduit d\'environ 97 % le temps que le greffe consacre aux atteintes aux biens commises par des auteurs inconnus, selon le ministère de la Justice. Au Bénin, un extrait du registre du commerce et du crédit mobilier se télécharge en ligne au lieu d\'être retiré au guichet du tribunal de commerce de Cotonou. En Côte d\'Ivoire, le bulletin n° 3 du casier judiciaire demandé sur la plateforme e-justice.ci est délivré uniquement en version numérique.',
                'La convocation elle-même change de main. En France, depuis le 1er septembre 2021, la date d\'audience se réserve uniquement de façon dématérialisée dans les procédures écrites, par une connexion entre les applicatifs des juridictions et ceux des barreaux ; le ministère de la Justice souligne que le greffe n\'a plus à convoquer les parties à l\'audience et voit sa charge allégée d\'autant.',
                'Ces changements déplacent le travail plus qu\'ils ne le suppriment. Une directrice de greffe citée par le ministère de la Justice en 2023 le dit ainsi : au lieu de simples tâches d\'enregistrement, le greffe contrôle désormais la qualité des procédures. Le greffier qui ne ressaisit plus un procès-verbal doit savoir vérifier une pièce numérique, repérer un fichier incomplet, suivre une notification électronique et répondre à un justiciable qui a lancé sa demande en ligne sans comprendre la suite.',
                'Les administrations préparent la suite. Le ministère français de la Justice a retenu en février 2025 quatre usages prioritaires de l\'IA, dont la retranscription d\'entretiens et le résumé de dossiers volumineux, et cite une expérimentation menée avec les parquets du ressort de la cour d\'appel de Paris pour concevoir des outils facilitant le travail des parquets et des greffes. Le rapport qui lui a été remis le 23 juin 2025 prévoit, pour 2026 et 2027, des modules de formation des agents sur des besoins précis.',
                'L\'intelligence artificielle arrive par-dessus. Elle peut rédiger une trame de convocation, résumer une note de service, transcrire un enregistrement, proposer un index pour des archives numérisées. Elle peut aussi exposer des données de justiciables, inventer une référence ou altérer un dispositif. La formation apprend à faire la différence sur des cas du greffe, avec ses applicatifs et ses registres. Richard SALANON n\'est pas greffier : il forme aux outils, et ce sont les greffiers présents qui disent si une pratique respecte la procédure.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels gestes du greffe un outil peut-il préparer, et lesquels restent au greffier ?',
            'legende' => 'Répartition travaillée pendant la formation. La dernière colonne indique le contrôle que le greffe garde avant d\'outiller le geste.',
            'entetes' => ['Geste du greffe', 'Ce qu\'un outil peut préparer', 'Ce qui reste au greffier', 'Contrôle à garder'],
            'lignes'  => [
                ['Enrôlement et mise au rôle', 'Pré-saisie des parties et de l\'objet à partir de l\'acte reçu, numéro proposé, rappel des pièces manquantes', 'Vérifier la saisine, inscrire au registre, attribuer le numéro', 'Une seule source du numéro d\'affaire, jamais deux registres qui divergent'],
                ['Convocations et avis d\'audience', 'Publipostage à partir d\'une trame validée, liste des destinataires, adresses reprises du dossier', 'Choisir la forme exigée par la procédure et signer', 'Adresses vérifiées contre les pièces, pas contre une saisie ancienne'],
                ['Tenue de l\'audience et plumitif', 'Rôle imprimé, ordre de passage, mise au propre de notes prises par le greffier', 'Tenir la plume, noter ce qui est dit et décidé à l\'audience', 'Aucune transcription envoyée à un service en ligne extérieur à la juridiction'],
                ['Mise en forme des décisions', 'Gabarit de la juridiction, numérotation, en-têtes, liste des parties et des conseils', 'Relire contre la minute, signer, authentifier', 'Un dispositif comparé mot à mot avec ce qui a été prononcé'],
                ['Notifications et suivi des retours', 'Tableau de suivi, alerte quand un avis de réception manque, relance à date', 'Constater la notification et en tirer les conséquences de procédure', 'Le délai qui court part de la date constatée par le greffe, pas d\'une date estimée'],
                ['Copies, expéditions et certificats', 'Demandes en ligne, préparation de la copie, contrôle du droit de la personne à la recevoir', 'Délivrer, certifier conforme, apposer la formule exécutoire quand elle est due', 'Identité et qualité du demandeur vérifiées avant toute délivrance'],
                ['Registre du commerce et du crédit mobilier', 'Contrôle de complétude des dossiers déposés, extraits téléchargeables, statistiques', 'Inscrire, refuser une formalité irrégulière, rendre compte au juge chargé de la surveillance', 'Chaque inscription rattachée à des pièces vérifiées et horodatées'],
                ['Archives et numérisation', 'Numérisation, reconnaissance de caractères, index, recherche dans les dossiers clos', 'Décider ce qui se conserve, se verse ou se détruit, selon les règles applicables', 'Original conservé tant qu\'aucun texte n\'autorise à s\'en séparer'],
                ['Accueil et information du public', 'Fiches pratiques, réponses types, prise de rendez-vous, affichage des audiences', 'Informer et orienter, jamais conseiller sur le fond', 'Fiches relues par un magistrat, réponses écrites conservées'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que l\'IA et l\'automatisation ne doivent-elles jamais faire au greffe ?',
            'intro' => 'Ces limites viennent des textes et de la fonction du greffier, présentés plus bas. La formation les applique sur des situations concrètes, pour que chacun sache trancher seul au guichet ou en fin d\'audience.',
            'items' => [
                ['titre' => 'Authentifier à la place du greffier', 'texte' => 'Une signature apposée par une chaîne automatique, un cachet ajouté à une copie sans contrôle, une formule exécutoire générée par un modèle de document : tout ce qui donne force à un acte passe par une personne habilitée, qui a lu ce qu\'elle signe.'],
                ['titre' => 'Recevoir une pièce de procédure dans un compte personnel', 'texte' => 'Un procès-verbal, une ordonnance ou une liste de témoins collés dans un assistant grand public quittent la juridiction. Le ministère français de la Justice demande à ses agents d\'exclure les données personnelles des outils d\'IA du marché ; la même prudence vaut dans chaque greffe.'],
                ['titre' => 'Transcrire une audience ou une audition dans un service extérieur', 'texte' => 'Le plumitif et les notes d\'audience sont tenus par le greffier. Une transcription automatique ne s\'envisage qu\'avec un outil fourni et encadré par l\'institution, et sa sortie se relit avant de rejoindre le dossier.'],
                ['titre' => 'Remplacer une convocation ou une notification par un message', 'texte' => 'Un SMS ou un message WhatsApp peut rappeler une date. Il ne vaut pas convocation ni notification, dont la forme est fixée par le code de procédure applicable. Une automatisation de rappels ne doit jamais faire croire au greffe que la partie a été régulièrement avisée.'],
                ['titre' => 'Délivrer un bulletin ou une copie sans contrôle d\'identité', 'texte' => 'Le bulletin n° 3 du casier judiciaire est strictement personnel, rappelle la plateforme ivoirienne e-justice.ci. Un portail peut recevoir la demande ; la vérification du droit à recevoir le document reste un geste du greffe.'],
                ['titre' => 'Corriger un registre sans trace', 'texte' => 'Un registre se rectifie par une mention datée et signée, jamais par un écrasement. Un tableur ou une base dont l\'historique est désactivé efface la preuve de ce qui a été inscrit, quand et par qui.'],
                ['titre' => 'Détruire un original parce qu\'il est scanné', 'texte' => 'Une numérisation sert à retrouver et à consulter. Sauf texte qui lui donne une valeur probante, l\'original reste la référence, et sa destruction suit les règles d\'archivage de la juridiction, pas la place disponible dans l\'armoire.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels textes encadrent les outils du greffe, en zone OHADA et en Europe ?',
            'legende' => 'Textes et pages officielles lus le 5 octobre 2026. Ils ne remplacent ni les codes de procédure, ni le statut des greffiers, ni les circulaires de chaque pays, que les participants apportent et qui priment pour eux.',
            'entetes' => ['Texte ou source', 'Ce qu\'il prévoit', 'Conséquence pour les outils du greffe'],
            'lignes'  => [
                ['Acte uniforme OHADA portant sur le droit commercial général (Lomé, 15 décembre 2010, en vigueur le 15 mai 2011)', 'Le RCCM est tenu par le greffe de la juridiction compétente en matière commerciale ou par l\'organe désigné par l\'État ; il alimente un fichier national, lui-même relié à un fichier régional tenu par la CCJA ; un livre entier traite de son informatisation', 'Une donnée mal saisie au greffe se propage au fichier national et au fichier régional : le contrôle se fait à l\'entrée, pas après'],
                ['Même Acte uniforme, livre 5', 'Procédures électroniques, validité des documents et signatures électroniques, conservation, transmission et publicité des informations sous forme électronique', 'La dématérialisation du registre a une base juridique ; elle exige des règles de conservation et de signature, pas seulement un scanner'],
                ['Missions du greffier décrites par l\'École nationale des greffes (France)', 'Le greffier assiste le magistrat, authentifie les actes juridictionnels, enregistre les affaires, prévient les parties, rédige les procès-verbaux ; il peut aussi assurer l\'accueil et l\'information du public', 'Les outils préparent ; l\'authentification et la tenue de la procédure restent des actes du greffier'],
                ['Règlement général sur la protection des données, article 10', 'Les données relatives aux condamnations pénales et aux infractions ne se traitent que sous le contrôle de l\'autorité publique ; un registre complet des condamnations ne peut être tenu que sous ce contrôle', 'Aucun extrait de casier, aucune liste de condamnés dans un outil grand public, même pour un tri rapide'],
                ['Même règlement, article 55', 'L\'autorité de contrôle n\'est pas compétente pour les traitements des juridictions dans l\'exercice de leur fonction juridictionnelle', 'Ce n\'est pas une dispense : la juridiction reste responsable de ses traitements, et ses tâches administratives restent soumises au contrôle ordinaire'],
                ['Règlement européen sur l\'IA (2024/1689), annexe III, point 8 a', 'Sont à haut risque les systèmes destinés à aider les autorités judiciaires à rechercher et interpréter les faits ou la loi et à appliquer la loi à des faits', 'Le greffier qui fait des recherches pour le magistrat se trouve de ce côté de la ligne ; celui qui tient un registre ou envoie une convocation, de l\'autre'],
                ['Même règlement, article 4', 'Obligation de maîtrise de l\'IA pour les fournisseurs et les utilisateurs professionnels, contrôlée depuis le 3 août 2026', 'Un greffe établi dans l\'Union qui utilise un assistant forme ses agents et peut garder la trace de ces formations'],
                ['Ministère de la Justice (France), travaux sur l\'IA publiés le 6 février 2025', 'Charte d\'usage en préparation : vérification systématique des résultats, attention aux biais, protection des informations confidentielles, exclusion des données personnelles, sobriété numérique', 'Ces cinq règles se transposent telles quelles dans la règle d\'usage d\'un greffe, quel que soit le pays'],
                ['Code de déontologie des greffiers des tribunaux de commerce (décret n° 2023-609, en vigueur le 1er octobre 2023)', 'Règles déontologiques des greffiers des tribunaux de commerce français, officiers publics et ministériels', 'Les greffes de commerce, qui tiennent des registres légaux, appliquent ces règles à leurs propres outils numériques'],
                ['Code du numérique du Bénin, appliqué par l\'APDP', 'Protection des données personnelles, sous le contrôle de l\'Autorité de protection des données personnelles', 'Les données des justiciables et du personnel du greffe ne quittent pas les outils maîtrisés par la juridiction'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi le greffier se trouve-t-il des deux côtés de la ligne tracée par le règlement européen ?',
            'paragraphes' => [
                'Le règlement européen sur l\'IA range parmi les systèmes à haut risque ceux qui aident l\'autorité judiciaire à rechercher et interpréter les faits et la loi. Il écarte en revanche les activités purement administratives et accessoires. Pour un magistrat, la distinction est simple. Pour un greffier, elle passe au milieu de sa journée, parce que son métier mêle les deux.',
                'D\'un côté, la mise en état, les recherches juridiques et les projets rédigés selon les directives du magistrat, que l\'École nationale des greffes cite parmi les fonctions d\'assistance du greffier. Un outil d\'IA employé pour ces tâches touche au fond de l\'affaire : il appelle les mêmes précautions que celles du juge, une source vérifiée pour chaque référence et une décision qui reste humaine.',
                'De l\'autre, l\'enrôlement, les convocations, le suivi des retours, les statistiques, l\'archivage et l\'accueil. Là, l\'outil n\'influence pas l\'issue du procès, mais il manipule des données de justiciables et produit des actes qui font courir des délais. Une erreur d\'adresse dans un publipostage n\'est pas un biais algorithmique ; elle peut pourtant priver une partie de son audience.',
                'La formation apprend donc à situer chaque usage avant de l\'adopter : touche-t-il au fond, ou à la procédure ? Quelles données y entrent ? Qui relit ? Cette question, posée à voix haute pendant les exercices, devient vite un réflexe partagé par tout le greffe.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Un rappel envoyé par WhatsApp vaut-il convocation ou notification ?',
            'texte' => 'Non. La convocation et la notification suivent les formes que fixe le code de procédure applicable : lettre recommandée, acte d\'huissier ou de commissaire de justice, remise contre émargement, voie électronique quand un texte l\'organise. Un message WhatsApp ou un SMS peut doubler l\'avis régulier pour réduire les absences, à condition que le numéro vienne du dossier, que le message ne contienne aucune information sensible et que le greffe garde l\'avis régulier comme seule preuve. Si l\'automatisation tombe en panne, rien de juridique ne doit en dépendre.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères datés montrent où en est la numérisation des greffes ?',
            'items' => [
                ['valeur' => '97 %', 'libelle' => 'Gain de temps du greffe sur les atteintes aux biens commises par des auteurs inconnus, traitées en procédure pénale numérique, soit environ un million d\'affaires par an en France (article du 21 juin 2023)', 'source' => 'Ministère de la Justice, procédure pénale numérique', 'url' => 'https://www.justice.gouv.fr/actualites/actualite/procedure-penale-numerique-justice-penale-plus-rapide-plus-efficace'],
                ['valeur' => '1 800', 'libelle' => 'Greffiers supplémentaires prévus en France par la loi de programmation 2023-2027 ; au 1er décembre 2025, 571 étaient en poste et 833 en formation à l\'École nationale des greffes (publication du 13 janvier 2026)', 'source' => 'Ministère de la Justice, renforcement des effectifs', 'url' => 'https://www.justice.gouv.fr/actualites/actualite/renforcement-historique-du-nombre-magistrats-greffiers-se-poursuit'],
                ['valeur' => '72 heures', 'libelle' => 'Délai annoncé pour un extrait B3 du casier judiciaire demandé en ligne au Bénin, pour 1 900 FCFA, service ouvert le 27 août 2025 ; la demande reste possible aux greffes des tribunaux de première instance (fiche lue le 5 octobre 2026)', 'source' => 'Portail national des services publics du Bénin, fiche PS00373', 'url' => 'https://service-public.bj/public/services/service/PS00373'],
                ['valeur' => '5 000 FCFA', 'libelle' => 'Prix d\'un extrait du RCCM du tribunal de commerce de Cotonou, téléchargé instantanément en ligne depuis janvier 2022, contre 48 heures au service RCCM du greffe (fiche lue le 5 octobre 2026)', 'source' => 'Portail national des services publics du Bénin, fiche PS00024', 'url' => 'https://service-public.bj/public/services/service/PS00024'],
                ['valeur' => '3 heures ouvrables', 'libelle' => 'Délai affiché par le guichet électronique de l\'APIEx pour l\'enregistrement d\'une création d\'entreprise au RCCM, à l\'IFU, à la CNSS et à la DGT, certificats téléchargeables avec code QR (page lue le 5 octobre 2026)', 'source' => 'MonEntreprise.bj, coûts et délais', 'url' => 'https://monentreprise.bj/informer/couts-delais'],
                ['valeur' => '18 mois', 'libelle' => 'Durée de la formation statutaire d\'un greffier recruté par concours en France, dont un axe porte sur la maîtrise des applicatifs métiers (page lue le 5 octobre 2026)', 'source' => 'École nationale des greffes, se former au métier de greffier', 'url' => 'https://www.eng.justice.fr/se-former-au-metier-greffier'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation dans des greffes d\'Afrique francophone et d\'Europe ?',
            'items' => [
                ['secteur' => 'Greffe d\'un tribunal de commerce, à Cotonou', 'probleme' => 'Les demandes d\'extraits arrivent désormais en ligne, mais les mentions modificatives et les inscriptions de sûretés se traitent encore à partir de dossiers papier, et chaque agent tient son propre tableau de suivi.', 'solution' => 'Un seul tableau de suivi partagé, protégé et historisé, une liste de contrôle de complétude pour chaque type de formalité, et une règle de nommage des pièces numérisées commune au service RCCM.'],
                ['secteur' => 'Greffe correctionnel d\'un tribunal de première instance, à Lomé', 'probleme' => 'Les convocations sont tapées une à une à partir d\'un modèle ancien, les retours de notification se perdent et plusieurs audiences sont renvoyées faute de preuve d\'avis aux prévenus.', 'solution' => 'Trame unique validée par le président, publipostage depuis un tableau vérifié, suivi des retours avec alerte à J-15, et rappel par message aux parties qui ont donné un numéro, en plus de l\'avis régulier.'],
                ['secteur' => 'Greffe d\'une cour d\'appel, à Abidjan', 'probleme' => 'Le casier judiciaire est passé au numérique pour le public, mais les demandes de copies de décisions et d\'expéditions s\'empilent au guichet, sans indication de délai pour les justiciables.', 'solution' => 'Circuit « demande de copie » redessiné, file d\'attente tenue dans un tableau, réponses écrites types préparées avec un assistant sur des éléments neutralisés, délais affichés et respectés.'],
                ['secteur' => 'Greffe d\'un tribunal de grande instance, à Dakar', 'probleme' => 'Les archives des dossiers clos occupent plusieurs salles, une partie a souffert de l\'humidité, et retrouver un jugement ancien prend parfois plusieurs jours.', 'solution' => 'Plan de classement, priorités de numérisation par ancienneté et par fréquence de demande, journal de numérisation signé, index par numéro et par nom, et originaux conservés dans un local assaini.'],
                ['secteur' => 'Service d\'accueil unique du justiciable d\'un tribunal judiciaire, en France', 'probleme' => 'Les agents d\'accueil reçoivent des questions sur toutes les procédures et certains ont commencé à faire rédiger leurs réponses par un assistant grand public, avec les noms des usagers.', 'solution' => 'Fiches pratiques relues par un magistrat, réponses types sans données personnelles, usage limité à l\'outil fourni par le ministère, et rappel de la frontière entre information et conseil.'],
                ['secteur' => 'Greffe d\'un tribunal de commerce, en France', 'probleme' => 'Le greffe, tenu par un office de greffiers, emploie des collaborateurs salariés qui veulent utiliser l\'IA pour préparer les dossiers de prévention et les réponses aux dirigeants.', 'solution' => 'Carte des usages conforme au code de déontologie de la profession, assistant en offre professionnelle aux conditions lues, aucune donnée d\'entreprise en difficulté dans un outil non maîtrisé, relecture par un greffier.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Avec quels outils et systèmes un greffe travaille-t-il, et que faut-il en savoir ?',
            'legende' => 'Outils rencontrés dans les greffes de la zone OHADA et d\'Europe. Les prix d\'éditeurs ont été relevés le 5 octobre 2026 ; ils sont payés par la juridiction ou l\'office, jamais compris dans le prix de la formation.',
            'entetes' => ['Outil ou système', 'Usage au greffe', 'Coût ou accès', 'Point d\'attention'],
            'lignes'  => [
                ['Applicatifs métiers du ministère ou de la juridiction', 'Enrôlement, registres, rôle des audiences, édition des décisions, statistiques', 'Fournis par l\'institution', 'La formation ne les paramètre pas : elle apprend à s\'en servir avec méthode et à ne pas les doubler par des fichiers personnels'],
                ['Portails de services aux usagers', 'Casier judiciaire, extraits du RCCM, copies de décisions, suivi en ligne', 'Payés par l\'usager selon les tarifs publiés', 'Le portail reçoit et encaisse ; le greffe vérifie, délivre et répond aux demandes bloquées'],
                ['Tableur (Excel, Google Sheets, LibreOffice Calc)', 'Suivi des notifications, files de demandes, statistiques mensuelles, inventaires d\'archives', 'Souvent déjà installé', 'Un outil de suivi, jamais le registre officiel ; colonnes protégées, historique activé, une seule version partagée'],
                ['Suite bureautique et trames', 'Convocations, avis, lettres, gabarits des décisions', 'Licence de l\'institution', 'Trames datées et validées, rangées en un seul endroit, retirées quand la procédure change'],
                ['Scanner et reconnaissance de caractères', 'Numérisation des dossiers, des registres anciens et des pièces reçues', 'Matériel de la juridiction ; logiciels libres possibles', 'Contrôle page à page, journal de numérisation, original conservé'],
                ['Gestion électronique des documents et archives', 'Classement, recherche, droits d\'accès, durées de conservation', 'Solution de l\'institution, ou serveur local', 'Droits par service, sauvegarde testée par une restauration, plan de classement écrit'],
                ['Assistant d\'IA fourni par l\'institution ou en offre professionnelle', 'Trames, reformulation, résumé de notes de service, index d\'archives', 'Outil interne quand il existe ; sinon abonnement professionnel, comparé dans le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>', 'Aucune pièce de procédure dans un compte personnel, relecture systématique'],
                ['WhatsApp et SMS', 'Rappels d\'audience aux parties qui ont donné leur numéro, informations pratiques', 'Application gratuite ; l\'API de WhatsApp Business offre 1 000 messages de service gratuits par mois et par numéro depuis le 1er octobre 2026, facturés au-delà', 'Un rappel, jamais une convocation ; numéro du greffe, jamais celui d\'un agent'],
                ['Automatisation (n8n, Make)', 'Alerte quand un retour de notification manque, tableau statistique rempli chaque mois', 'n8n Cloud à partir de 20 € par mois en paiement annuel, ou installation sur un serveur de la juridiction', 'Rien d\'automatique jusqu\'à la signature ou l\'envoi d\'un acte'],
                ['Logiciels de gestion (Odoo, Dolibarr)', 'Sans objet pour le cœur du greffe ; utiles à un office de greffe privé ou à un centre d\'arbitrage pour la facturation et les tiers', 'Odoo : une application gratuite, Standard à 19,90 € par utilisateur et par mois la première année en paiement annuel ; Dolibarr : logiciel libre', 'Ne pas importer une logique d\'entreprise dans un registre public'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme type, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation s\'organise-t-elle sans fermer le greffe ?',
            'intro' => 'Un greffe ne ferme pas pour se former : les audiences se tiennent, le guichet reçoit, les délais courent. L\'organisation part de ces contraintes, fixées avec le greffier en chef ou le directeur de greffe.',
            'items' => [
                ['titre' => 'Des groupes en rotation', 'texte' => 'Deux groupes alternent sur la même semaine, pour que chaque service garde au moins une personne à son poste. Les demi-journées se placent les jours sans audience du service concerné.'],
                ['titre' => 'Des groupes mêlant les fonctions', 'texte' => 'Greffiers d\'audience, agents de saisie, archivistes et agents d\'accueil travaillent ensemble sur le même dossier fictif. Chacun voit ce que son geste produit pour le suivant, et les doubles saisies sautent aux yeux.'],
                ['titre' => 'Les outils réels, sans droit d\'administration', 'texte' => 'Les exercices utilisent les applicatifs, la messagerie et les tableurs de la juridiction, avec les comptes des participants. Le formateur ne demande aucun mot de passe et ne se connecte à aucun système.'],
                ['titre' => 'Des dossiers fictifs ou anonymisés', 'texte' => 'Aucun dossier en cours ne sert de matière. La juridiction peut fournir des dossiers clos anonymisés ; sinon, des dossiers fictifs sont construits avec le greffier en chef pour coller aux procédures locales.'],
                ['titre' => 'Le service informatique dans la boucle', 'texte' => 'Le correspondant informatique du ressort est invité à la première et à la dernière demi-journée. Ce qui sort de la formation (tableaux, trames, règle d\'usage) doit être compatible avec ce qu\'il peut maintenir.'],
                ['titre' => 'Des supports que le greffe garde', 'texte' => 'Carte des gestes, tableau de suivi des notifications, trames, plan de classement, journal de numérisation, règle d\'usage, dans des formats modifiables, avec une attestation nominative par participant.'],
                ['titre' => 'Un référent après la session', 'texte' => 'Un agent volontaire est désigné référent numérique du greffe. Un canal reste ouvert avec lui pour les questions d\'usage pendant une période fixée au devis ; les questions de procédure restent au greffier en chef et aux magistrats.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir selon la juridiction et l\'effectif du greffe ?',
            'legende' => 'Formats indicatifs, ajustés après un premier échange sur l\'effectif, les services et les outils en place.',
            'entetes' => ['Situation', 'Format conseillé', 'Durée', 'Ce qui est privilégié'],
            'lignes'  => [
                ['Greffe d\'un tribunal de première instance ou d\'une section détachée, moins de 10 agents', 'Sur place, un groupe unique', '5 demi-journées, plus la demi-journée encadrement', 'Registres, convocations, numérisation, accueil'],
                ['Greffe important, plusieurs chambres ou services', 'Sur place, deux groupes en rotation', '5 demi-journées par groupe, plus l\'encadrement', 'Méthode commune entre services, statistiques, archives'],
                ['Greffe d\'un tribunal de commerce tenant le RCCM', 'Sur place ou hybride', '4 demi-journées centrées sur le registre, plus l\'encadrement', 'Complétude des dossiers, suivi des formalités, services en ligne, sécurité du registre'],
                ['Plusieurs juridictions d\'un même ressort', 'Hybride : encadrement en salle, agents à distance', '6 à 8 séances de 2 heures', 'Mêmes trames et même plan de classement dans tout le ressort'],
                ['Office de greffe privé (greffe de tribunal de commerce en France)', 'Intra, sur place ou à distance', '2 à 3 jours selon les postes', 'Usage encadré de l\'IA, déontologie de la profession, sécurité des registres légaux'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation d\'un greffe, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Le prix est fixé sur devis. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon les règles de la commande publique qui s\'appliquent à la juridiction. Les outils restent payés par l\'institution à leurs éditeurs.',
            'items'      => [
                ['offre' => 'Parcours greffe', 'prix' => 'Sur devis', 'inclus' => ['Cinq demi-journées sur les outils de la juridiction', 'Carte des gestes du greffe', 'Tableau de suivi des notifications et trames validées', 'Plan de classement et journal de numérisation', 'Attestation nominative']],
                ['offre' => 'Demi-journée encadrement', 'prix' => 'Sur devis', 'inclus' => ['Comptes, droits et départs', 'Sauvegardes et test de restauration', 'Règle d\'usage du greffe', 'Évaluation du parcours']],
                ['offre' => 'Module registre du commerce', 'prix' => 'Sur devis', 'inclus' => ['Complétude des formalités', 'Suivi et statistiques du registre', 'Services en ligne et réponses aux usagers', 'Sécurité des inscriptions']],
            ],
            'variations' => [
                'Le nombre d\'agents, de groupes et de services concernés.',
                'La préparation des dossiers fictifs et des trames à partir des procédures locales.',
                'La reprise éventuelle de tableaux ou de registres auxiliaires existants pendant la formation.',
                'Le lieu, le déplacement hors de Cotonou ou du Bénin, et le choix du présentiel, de la distance ou de l\'hybride.',
                'La durée du suivi par le référent après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment la formation d\'un greffe se finance-t-elle ?',
            'paragraphes' => [
                'Dans la plupart des pays, le greffier des juridictions est un agent public : la formation se décide et se paie sur le budget de formation du ministère de la Justice, de la cour d\'appel ou de la juridiction. Les fonds de formation professionnelle s\'adressent d\'abord aux entreprises ; en Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> consultée le 5 octobre 2026 réserve son plan de formation à toute entreprise qui justifie du paiement régulier des deux taxes de formation. Une juridiction n\'y a donc pas sa place, sauf règle contraire à vérifier.',
                'Les écoles ont leur propre rôle. En France, la formation statutaire des greffiers relève de l\'<a href="https://www.eng.justice.fr/se-former-au-metier-greffier">École nationale des greffes</a>. Dans l\'espace OHADA, l\'<a href="https://www.ohada.org/ersuma-en-bref/">ERSUMA</a>, à Porto-Novo, est chargée de former et de perfectionner notamment les greffiers en droit harmonisé et en droit des affaires. Une formation aux outils, comme celle-ci, vient en complément de ces enseignements et ne s\'y substitue pas.',
                'Quand un projet de modernisation de la justice financé par un partenaire technique comporte un volet de formation des greffes, la juridiction peut proposer d\'y inscrire une session, programme et devis à l\'appui. En France, un office de greffe de tribunal de commerce, employeur privé, peut interroger son opérateur de compétences. Richard SALANON n\'est titulaire ni de la certification Qualiopi, ni d\'un agrément de fonds, ni d\'une habilitation d\'école : aucune prise en charge n\'est promise. Le programme, les feuilles de présence et les attestations sont fournis dans tous les cas.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent les greffes qui se numérisent, et comment les éviter ?',
            'intro' => 'Les mêmes faux pas se retrouvent d\'une juridiction à l\'autre, à Dakar comme à Lyon. Aucun n\'est d\'abord technique : ce sont des questions d\'organisation, qui se règlent par une règle écrite et une habitude.',
            'items' => [
                ['titre' => 'Scanner sans plan de classement', 'texte' => 'Des milliers de fichiers nommés « scan001.pdf » ne valent guère mieux qu\'une salle d\'archives en désordre. Le plan de classement et la règle de nommage se décident avant la première page numérisée.'],
                ['titre' => 'Laisser le tableau devenir le registre', 'texte' => 'Un tableur tenu à côté de l\'applicatif finit par contenir des informations que le registre officiel ignore. Chaque donnée a une seule source ; le tableau de suivi renvoie au registre, il ne le complète pas en secret.'],
                ['titre' => 'Faire confiance à la reconnaissance de caractères', 'texte' => 'Un « 8 » lu comme un « 3 » dans un numéro de rôle, une page manuscrite rendue illisible : la recherche plein texte rate alors le dossier. Les index se contrôlent, et les pièces manuscrites se décrivent à la main.'],
                ['titre' => 'Partager un mot de passe au guichet', 'texte' => 'Un compte commun « accueil » rend impossible de savoir qui a délivré une copie ou modifié une mention. Chaque agent a son compte, et le départ d\'un agent ferme le sien le jour même.'],
                ['titre' => 'Automatiser les convocations sans vérifier les adresses', 'texte' => 'Le publipostage multiplie une adresse erronée aussi vite qu\'une adresse juste. La liste des destinataires se contrôle contre les pièces du dossier avant chaque envoi.'],
                ['titre' => 'Former seulement les plus jeunes', 'texte' => 'Les agents les plus anciens connaissent les exceptions de la procédure que les outils ignorent. Sans eux, la numérisation reproduit les erreurs ; avec eux, elle s\'appuie sur la mémoire du greffe.'],
                ['titre' => 'Oublier le justiciable qui n\'a pas Internet', 'texte' => 'Un service en ligne ne remplace pas le guichet. Le greffe garde un accueil physique et aide sur place ceux qui ne peuvent pas faire la démarche en ligne.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles formations du catalogue prolongent ce parcours pour un greffe ?',
            'legende' => 'Fiches du catalogue liées à cette page. Chacune a son programme, sa durée et sa FAQ ; un greffe en retient souvent une ou deux après le parcours.',
            'entetes' => ['Formation', 'Pour qui au greffe', 'Ce qu\'elle apporte', 'Durée indicative'],
            'lignes'  => [
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', 'Agents qui tiennent les tableaux de suivi et les statistiques', 'Formules, tableaux croisés, contrôles et protection des classeurs, en profondeur', '2 jours'],
                ['<a href="/formations/ia-en-entreprise">IA en entreprise : productivité des équipes</a>', 'Greffiers et agents qui rédigent beaucoup', 'L\'usage quotidien d\'un assistant pour rédiger, synthétiser et vérifier', '2 jours'],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', 'Greffiers en chef, directeurs de greffe, référents', 'Cartographier un circuit, le mesurer, le simplifier, puis choisir l\'outil', '2 jours'],
                ['<a href="/formations/securite-donnees-dirigeants">Sécurité des données et sauvegardes pour dirigeants</a>', 'Directeurs de greffe, chefs de juridiction', 'Sauvegardes testées, accès, prestataires, réponse à un incident', '2 jours'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Tout le greffe, accueil compris', 'Hameçonnage, mots de passe, double authentification, appareils', '1 jour'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Encadrement et référents', 'Données personnelles, secret, biais et règlement européen, pays par pays', '1 à 2 jours'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former votre greffe avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà formé des greffiers. Il construit lui-même des outils numériques et d\'IA et les relie aux logiciels de ses clients : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il sait donc ce qu\'un publipostage, une automatisation ou un assistant font réellement des données qu\'on leur confie. Avec ' . $ans . ' ans d\'expérience, formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, du Bénin au Tchad et jusqu\'en France, en Belgique, en Suisse et au Canada.',
                'Il n\'est pas greffier et le dit dès la première séance : il enseigne les outils, l\'organisation des fichiers et la méthode de contrôle ; la procédure, l\'authentification et la tenue des registres restent au greffe, sous l\'autorité des chefs de juridiction. Il n\'est certifié par aucun éditeur et ne se présente comme partenaire d\'aucun. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>, et l\'ensemble des formations dans le <a href="/formations/">catalogue</a>, dont le domaine <a href="/formations/domaine/transformation-digitale">transformation digitale</a>.',
                'Quand la juridiction veut aller plus loin que la formation, par exemple un outil de suivi des demandes de copies ou une automatisation des alertes de notification reliée à ses fichiers, le besoin relève d\'une mission de <a href="/services/digitalisation-d-entreprise">digitalisation</a> ou d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA</a>, menée avec le service informatique du ressort. La façon dont Richard organise ses sessions est décrite sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'engager le greffe dans la formation ?',
            'texte' => 'L\'outil prépare, le greffier authentifie : une seule source pour chaque numéro et chaque date, des convocations dans les formes et des rappels en plus seulement, aucune pièce de procédure dans un compte personnel, des originaux conservés après numérisation, un compte par agent, et une règle d\'usage écrite que tout le greffe applique, encadrement compris.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre greffe aux outils numériques et à l\'IA ?',
            'texte'  => 'Indiquez la juridiction, l\'effectif du greffe, les services concernés, les applicatifs et les registres en place et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation pour mon greffe'],
        ],
    ],

    'faq' => [
        ['q' => 'Le formateur est-il greffier ?', 'r' => 'Non. Richard SALANON forme à l\'usage des outils numériques et de l\'IA, à l\'organisation des fichiers et à la méthode de contrôle. Il ne tranche aucune question de procédure : ce sont les greffiers présents et le greffier en chef qui jugent, pendant les exercices, si une pratique respecte les textes.'],
        ['q' => 'La formation se fait-elle sur les applicatifs du ministère ?', 'r' => 'Oui, quand les participants y ont accès avec leurs propres comptes. Le formateur ne demande aucun mot de passe et ne paramètre rien : il montre comment s\'en servir avec méthode, et comment éviter de les doubler par des fichiers personnels.'],
        ['q' => 'Peut-on utiliser un assistant d\'IA pour mettre en forme une décision ?', 'r' => 'Seulement avec l\'outil fourni ou encadré par l\'institution, et sur la forme : gabarit, numérotation, liste des parties. Le texte qui part à la signature se relit mot à mot contre la minute, et aucune décision non publique n\'entre dans un compte grand public.'],
        ['q' => 'Un message WhatsApp peut-il remplacer une convocation ?', 'r' => 'Non. La convocation suit la forme prévue par le code de procédure applicable. Un message peut rappeler une date à une partie qui a donné son numéro, en plus de l\'avis régulier, qui reste la seule preuve que le greffe conserve.'],
        ['q' => 'Que faire des dossiers papier une fois numérisés ?', 'r' => 'Les conserver, tant qu\'aucun texte ne donne à la copie numérique la même valeur que l\'original. La numérisation sert à retrouver et à consulter vite ; la destruction ou le versement aux archives suivent les règles de la juridiction.'],
        ['q' => 'Un tableur peut-il remplacer le registre du greffe ?', 'r' => 'Non. Le tableur sert au suivi : notifications, files de demandes, statistiques. Le registre officiel reste la seule source du numéro, de la date et des mentions, et le tableau y renvoie au lieu de le concurrencer.'],
        ['q' => 'La formation couvre-t-elle le registre du commerce et du crédit mobilier ?', 'r' => 'Oui, quand le RCCM est tenu au greffe de la juridiction : complétude des dossiers, suivi des formalités, inscriptions de sûretés, extraits et services en ligne. Là où un autre organe tient le registre, le module est remplacé par d\'autres registres du greffe.'],
        ['q' => 'Les greffes des tribunaux de commerce en France sont-ils concernés ?', 'r' => 'Oui. Leurs greffiers sont des officiers publics et ministériels exerçant à titre libéral, soumis à un code de déontologie en vigueur depuis le 1er octobre 2023. La formation porte alors sur l\'usage encadré de l\'IA par l\'office et ses collaborateurs.'],
        ['q' => 'Le greffe doit-il fermer pendant la formation ?', 'r' => 'Non. Deux groupes alternent sur la même semaine, les demi-journées se placent hors des jours d\'audience du service, et chaque service garde au moins une personne à son poste.'],
        ['q' => 'Faut-il savoir se servir d\'un ordinateur ?', 'r' => 'Savoir ouvrir un fichier et saisir un texte suffit. Les agents moins à l\'aise sont placés en binôme avec un collègue, et la première demi-journée part des gestes de chacun, pas d\'un logiciel.'],
        ['q' => 'Quelle différence avec la formation IA en entreprise ?', 'r' => 'La formation IA en entreprise apprend l\'usage quotidien d\'un assistant à tous les métiers. Ce parcours part du greffe : registres, convocations, notifications, numérisation, archives, accueil et règle d\'usage, avec une demi-journée sur les écrits produits avec l\'IA.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, selon l\'effectif et le nombre de groupes, la préparation des dossiers fictifs et des trames, le lieu, le format et la durée du suivi. Le premier échange, le cadrage et le devis sont gratuits.'],
    ],

    'sources' => [
        ['titre' => 'OHADA, Acte uniforme portant sur le droit commercial général (15 décembre 2010) : présentation, RCCM et sommaire du livre 5 sur l\'informatisation', 'url' => 'https://www.ohada.org/droit-commercial-general/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, ERSUMA en bref : missions de formation des professions judiciaires, greffiers compris', 'url' => 'https://www.ohada.org/ersuma-en-bref/', 'date' => '2026-10-05'],
        ['titre' => 'École nationale des greffes, le métier de greffier', 'url' => 'https://www.eng.justice.fr/metier-greffier', 'date' => '2026-10-05'],
        ['titre' => 'École nationale des greffes, se former au métier de greffier (formation statutaire de 18 mois)', 'url' => 'https://www.eng.justice.fr/se-former-au-metier-greffier', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice (France), développer l\'IA dans la justice entre innovation et sécurisation (6 février 2025, mis à jour le 10 février 2025)', 'url' => 'https://www.justice.gouv.fr/actualites/actualite/developper-lintelligence-artificielle-ia-justice-entre-innovation-securisation', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice (France), remise du rapport « L\'IA au service de la justice » (23 juin 2025)', 'url' => 'https://www.justice.gouv.fr/actualites/actualite/remise-du-rapport-lintelligence-artificielle-au-sein-justice', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice (France), la procédure pénale numérique (21 juin 2023, mis à jour le 28 juin 2023)', 'url' => 'https://www.justice.gouv.fr/actualites/actualite/procedure-penale-numerique-justice-penale-plus-rapide-plus-efficace', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice (France), la prise de date dématérialisée déployée dans tous les tribunaux', 'url' => 'https://www.justice.gouv.fr/actualites/actualite/prise-date-dematerialisee-deployee-tous-tribunaux', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice (France), le renforcement du nombre de magistrats et de greffiers se poursuit (13 janvier 2026)', 'url' => 'https://www.justice.gouv.fr/actualites/actualite/renforcement-historique-du-nombre-magistrats-greffiers-se-poursuit', 'date' => '2026-10-05'],
        ['titre' => 'Conseil national des greffiers des tribunaux de commerce, présentation de la profession (statut, code de déontologie)', 'url' => 'https://www.cngtc.fr/fr/presentation-de-la-profession-.html', 'date' => '2026-10-05'],
        ['titre' => 'Conseil national des greffiers des tribunaux de commerce, missions du greffier', 'url' => 'https://www.cngtc.fr/fr/statut-et-missions-du-greffier.html', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, règlement (UE) 2024/1689 sur l\'intelligence artificielle (annexe III, point 8 a, et considérant 61, lus dans un navigateur)', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32024R1689', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA, mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, texte du RGPD, chapitre 2 (article 10)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, texte du RGPD, chapitre 6 (article 55)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre6', 'date' => '2026-10-05'],
        ['titre' => 'Portail national des services publics du Bénin, délivrance du casier judiciaire (extrait B3), fiche PS00373', 'url' => 'https://service-public.bj/public/services/service/PS00373', 'date' => '2026-10-05'],
        ['titre' => 'Portail national des services publics du Bénin, extrait du RCCM du tribunal de commerce de Cotonou, fiche PS00024', 'url' => 'https://service-public.bj/public/services/service/PS00024', 'date' => '2026-10-05'],
        ['titre' => 'MonEntreprise.bj (APIEx), coûts et délais des formalités de création d\'entreprise', 'url' => 'https://monentreprise.bj/informer/couts-delais', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Justice et des Droits de l\'Homme de Côte d\'Ivoire, plateforme e-justice.ci (casier judiciaire, certificat de nationalité)', 'url' => 'https://www.e-justice.ci/', 'date' => '2026-10-05'],
        ['titre' => 'APDP, Autorité de protection des données personnelles du Bénin', 'url' => 'https://apdp.bj/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, tarifs des offres', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'n8n, tarifs de n8n Cloud', 'url' => 'https://n8n.io/pricing', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'excel-google-sheets', 'digitalisation-processus', 'securite-donnees-dirigeants', 'cybersecurite-employes', 'ia-ethique-conformite'],
        'services'    => ['digitalisation-d-entreprise', 'formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
