<?php
// ============================================================
// data/metiers/enseignants-etablissements/benin.php · Page métier + pays :
// enseignants, directeurs d'établissement et formateurs au Bénin.
// Faits externes relevés le 26/10/2026 : gouv.bj (université de vacances,
// olympiades d'IA, équipements UNICEF), Bénin Web TV (calendrier des examens,
// note du 6 mai, EducMaster, plagiat), La Nouvelle Tribune (BAC 2026),
// OSIRIS et WeAreTech (e-learning), CIO Mag (salles multimédias, Giga),
// DataReportal, Code du numérique (articles 394 et 446), page relayée par
// Setondji Hub (Université de Parakou). Statut F. Aucune certification
// ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA des enseignants et des directeurs d\'établissement au Bénin : préparer cours et évaluations plus vite, protéger les données des élèves et garder la main sur la note',
    'title'   => 'Formation IA des enseignants au Bénin | Richard SALANON',
    'meta'    => 'Formation IA pour enseignants et directeurs d\'établissement au Bénin : préparer cours et évaluations, protéger les données des élèves. Sur devis, en FCFA.',
    'en_bref' => 'Richard SALANON, consultant en digitalisation basé à Cotonou, forme les enseignants, les directeurs d\'établissement et les formateurs béninois à l\'IA, sur place dans les établissements ou à distance sans aucun décalage horaire, en s\'appuyant sur leurs propres cours, sujets et documents de gestion, avec une règle claire sur les données des élèves prévue par le Code du numérique. La formation se prépare sur des dossiers anonymisés, se termine par une épreuve finale chronomètre en main et se règle sur devis, en FCFA. Aucune prise en charge n\'est promise.',
    'publie'  => '2026-12-06',
    'maj'     => '2026-12-06',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former les enseignants et les directeurs d\'établissement à l\'IA au Bénin, et comment choisir ?',
            'paragraphes' => [
                'Richard SALANON, installé à Cotonou, forme les enseignants, les directeurs d\'établissement, les économes et les formateurs béninois à l\'usage des assistants d\'IA, dans l\'établissement ou à distance. Il travaille sur les séquences, les sujets et les documents de gestion du participant, avec le matériel et la connexion dont l\'école dispose vraiment. Il n\'enseigne pas à la place des enseignants : il forme à l\'usage des outils.',
                'Une démonstration d\'outil et une formation de métier ne se ressemblent pas. Dans la première, le formateur génère un cours spectaculaire sur un thème de son choix, et la salle repart avec l\'impression que tout est simple. Dans la seconde, chaque enseignant apporte une séquence qu\'il doit donner la semaine suivante, la traite avec l\'assistant, compare le résultat au programme officiel de sa discipline, corrige les erreurs et note le temps réellement gagné. Un directeur apporte un courrier aux parents ou un tableau de scolarités, avec des noms fictifs, et vérifie chaque montant.',
                'Pour choisir un prestataire, y compris Richard, posez cinq questions. Travaille-t-il sur nos programmes et nos documents, ou sur des exemples génériques ? Que dit-il des données des élèves avant le premier exercice ? Comment contrôle-t-il en fin de session ce que chaque participant sait faire seul ? Que reçoit chacun en repartant ? Qui répond aux questions du mois suivant ? Un prestataire qui répond avec précision à ces cinq points forme ; celui qui répond « nos outils sont puissants » vend une licence.',
                'Dernier critère, très concret au Bénin : le fuseau horaire. Le pays est à UTC+1 toute l\'année, comme Cotonou, donc aucun décalage n\'est à négocier pour une séance en fin d\'après-midi, après les cours. Le français est la langue de travail et les usages de paiement, dont le Mobile Money, sont ceux de l\'équipe.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en sont l\'IA et le numérique dans l\'enseignement béninois en 2026 ?',
            'paragraphes' => [
                'Les pouvoirs publics ont déjà mis l\'IA à l\'ordre du jour de la profession. Selon le compte rendu publié par le gouvernement, l\'Université de vacances 2026 s\'est tenue du 25 au 28 août à Natitingou, au lycée militaire des jeunes filles Général Mathieu Kérékou, sur le thème « L\'enseignant augmenté par l\'intelligence artificielle ». Elle réunissait des enseignants de la maternelle et du primaire venus des douze départements, et a été lancée par le ministre des Enseignements maternel et primaire (MEMP).',
                'Le ministre y a présenté l\'IA comme un levier pour préparer les leçons, diversifier les méthodes, différencier l\'enseignement et diagnostiquer les difficultés des apprenants. Les travaux devaient aussi examiner ses risques et ses limites, ainsi que les conditions d\'un usage adapté aux classes béninoises. Pour un enseignant, le message est clair : l\'outil est regardé comme une aide à la préparation, pas comme un remplaçant du maître.',
                'Le secondaire et le supérieur avancent aussi. Le Ministère des Enseignements secondaire, technique et de la formation professionnelle (MESTFP) a participé avec deux autres ministères aux premières Olympiades nationales d\'intelligence artificielle, tenues le 27 juin 2026 dans le cadre de la Stratégie nationale d\'intelligence artificielle et des mégadonnées 2023-2027 ; vingt jeunes ont été distingués et huit doivent représenter le Bénin aux olympiades internationales d\'Astana, du 2 au 8 août 2026. Du côté du Ministère de l\'Enseignement supérieur et de la Recherche scientifique (MESRS), le Conseil des ministres du 1er juillet 2026 a autorisé la contractualisation de prestataires pour un projet national d\'e-learning, adossé à la plateforme etudiant.bj, avec un démarrage prévu à la rentrée 2026-2027.',
                'Reste un point que les textes ne tranchent pas à la place des établissements : ce qu\'un élève ou un étudiant a le droit de faire avec un assistant dans un devoir noté. Cette règle se décide dans chaque établissement, par écrit, et c\'est l\'un des objets de la formation.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés retenir sur l\'école béninoise avant de former une équipe ?',
            'items' => [
                ['valeur' => '66,78 %', 'libelle' => 'Taux national de réussite au baccalauréat, session de juin 2026, proclamé le 8 juillet 2026 par l\'Office du baccalauréat ; 77 101 candidats ont composé', 'source' => 'La Nouvelle Tribune', 'url' => 'https://lanouvelletribune.info/2026/07/benin-le-bac-2026-affiche-un-taux-national-de-reussite-de-6678/'],
                ['valeur' => '64,14 %', 'libelle' => 'Taux de réussite au BEPC, session de juin 2026 : 130 253 inscrits, 129 462 présents, 83 370 candidats déclarés admissibles, résultats annoncés le 3 juillet 2026', 'source' => 'Gouvernement du Bénin', 'url' => 'https://www.gouv.bj/article/3575/deliberation-bepc-2026-benin-enregistre-reussite-nourrit-nouvelles-ambitions/'],
                ['valeur' => '4 universités', 'libelle' => 'Universités publiques concernées par la première phase du projet national d\'e-learning : Abomey-Calavi, Parakou, UNSTIM et Université nationale d\'agriculture, à partir de la rentrée 2026-2027', 'source' => 'OSIRIS, 3 juillet 2026', 'url' => 'https://www.osiris.sn/le-benin-investit-dans-l-e-learning-pour-moderniser-l-enseignement-superieur.html'],
                ['valeur' => '32,2 %', 'libelle' => 'Part des habitants qui utilisaient internet fin 2025 (4,80 millions de personnes) ; 78,7 % des connexions mobiles étaient en 3G, 4G ou 5G', 'source' => 'DataReportal, Digital 2026 : Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => 'Plus de 8 000', 'libelle' => 'Établissements maternels, primaires et secondaires concernés par la cartographie de l\'initiative Giga de connectivité des écoles, dont la collecte de données venait de s\'achever (juillet 2024)', 'source' => 'CIO Mag', 'url' => 'https://cio-mag.com/forum-giga-connectivite-le-benin-reitere-son-engagement-pour-lacceleration-de-la-connectivite-des-ecoles/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment les examens nationaux changent-ils la façon d\'utiliser l\'IA en classe ?',
            'paragraphes' => [
                'Les examens nationaux fixent le rythme de l\'année scolaire, et l\'IA se juge d\'abord à ce qu\'elle apporte pour s\'y préparer. Le calendrier publié par le gouvernement le 1er avril 2026 plaçait le CEP du 1er au 4 juin, le BEPC du 8 au 10 juin et le baccalauréat du 15 au 18 juin, avec une session de remplacement du baccalauréat du 13 au 16 juillet. Pour un professeur de troisième ou de terminale, cela fixe trois temps de travail : les épreuves blanches, les séances de remédiation et la correction des copies.',
                'Les écarts entre séries montrent où l\'aide à la préparation peut servir. En juin 2026, la série G2 a atteint 85,58 % de réussite et la série D 47,78 %, selon La Nouvelle Tribune. Un enseignant de mathématiques ou de sciences de la vie et de la Terre en série D a donc un intérêt concret à fabriquer davantage d\'exercices gradués. La condition est qu\'il vérifie chaque énoncé et chaque corrigé, car un assistant peut proposer un exercice dont la réponse est fausse.',
                'Dans la salle d\'examen, l\'IA ne change pas les règles : ce sont celles de l\'Office du baccalauréat et des arrêtés de l\'année, que chaque chef de centre et chaque surveillant consulte à la source. Le ministère du secondaire a d\'ailleurs rappelé le 6 mai 2026, par une note de son secrétaire général, que les directeurs départementaux doivent veiller au maintien en classe des candidats jusqu\'à la fin des examens. La formation n\'invente aucune consigne d\'examen ; elle apprend à mener la préparation et la correction en amont avec méthode.',
                'Une règle simple en découle pour un établissement : l\'IA sert à préparer les épreuves blanches et à expliquer les corrections, jamais à produire un sujet officiel ni à remplacer l\'avis du jury. Les sujets de la session restent sous la responsabilité des autorités compétentes.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles règles de données s\'appliquent à une école, un collège ou une université du Bénin ?',
            'intro' => 'Le règlement de chaque établissement dit ce qui est permis avec un assistant en classe. Le Code du numérique, loi n° 2017-20 du 20 avril 2018, s\'applique dès qu\'un document contient des données personnelles, ce qui est le cas d\'une liste de classe, d\'un bulletin ou d\'une fiche de scolarité. Cette synthèse ne remplace pas un conseil juridique : en cas de doute, adressez-vous à l\'Autorité de protection des données personnelles ou à un juriste.',
            'items' => [
                ['titre' => 'Les mineurs : l\'article 446', 'texte' => 'Cet article prévoit que, pour l\'offre directe de services de la société de l\'information à un mineur, le traitement de ses données n\'est licite que si le mineur a au moins seize ans ; en dessous, il faut le consentement ou l\'autorisation du titulaire de la responsabilité parentale. Pour une école, la conséquence pratique est simple : un élève de collège n\'ouvre pas seul un compte sur un assistant en ligne avec des données à son nom.'],
                ['titre' => 'Les données de santé : l\'article 394', 'texte' => 'L\'article 394 interdit en principe le traitement des données qui concernent la santé, ainsi que celles qui révèlent l\'origine, les opinions ou la religion, sous des exceptions que le texte énumère. Un certificat médical d\'élève, un handicap ou un suivi particulier n\'ont donc rien à faire dans un assistant en ligne, même pour « gagner du temps » sur un courrier.'],
                ['titre' => 'Le transfert vers l\'étranger', 'texte' => 'La plupart des assistants sont hébergés hors du Bénin. Le code encadre le transfert de données personnelles vers un État tiers, notamment à son article 391. Le geste de départ ne change pas : on remplace noms, matricules, téléphones et montants par des valeurs fictives avant de coller un texte dans l\'outil.'],
                ['titre' => 'Les comptes nominatifs', 'texte' => 'Un compte par enseignant, ouvert avec une adresse professionnelle ou celle de l\'établissement, évite qu\'un historique de classe reste dans le téléphone d\'un collègue muté. Le départ d\'un enseignant ou d\'une secrétaire se traduit par la fermeture de ses accès le jour même.'],
                ['titre' => 'Les plateformes officielles restent la référence', 'texte' => 'La gestion du sous-secteur maternel et primaire, dont l\'inscription des candidats, passe par la plateforme nationale EducMaster. Une lettre du ministre des Enseignements maternel et primaire datée du 16 février 2026 exigeait la mise à jour complète des données au plus tard le 23 février 2026, y compris pour les classes intermédiaires. Un assistant peut aider à préparer un tableau avant la saisie ; il ne remplace jamais la plateforme.'],
                ['titre' => 'Le tri en trois couleurs', 'texte' => 'La première demi-journée classe les documents de l\'école en trois couleurs : ce qui peut être confié à l\'assistant (programmes, textes publics), ce qui s\'anonymise d\'abord (copies, listes de classe), et ce qui ne sort jamais (dossiers de santé, décisions disciplinaires nominatives).'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles tâches de l\'enseignant et de l\'école confier à l\'IA, avec quels outils, et que contrôle l\'humain ?',
            'legende' => 'Tâches rencontrées dans les établissements béninois, travaillées sur des dossiers fictifs ou anonymisés. Les prix et les limites des assistants évoluent : la page officielle de chaque éditeur fait foi.',
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ['Fiche de préparation d\'une séquence à partir d\'un extrait du programme officiel', 'ChatGPT, Claude ou Gemini', 'Objectifs, déroulement, activités et évaluation rédigés dans le format du journal de classe', 'L\'enseignant compare chaque objectif au programme de sa discipline et retire ce qui sort du niveau'],
                ['Épreuve blanche de BEPC ou de baccalauréat avec barème', 'Claude ou ChatGPT', 'Un sujet de même forme qu\'une épreuve passée, un corrigé et un barème de correction', 'L\'enseignant refait chaque exercice à la main : un corrigé faux est la panne la plus fréquente'],
                ['Textes simplifiés pour les élèves qui lisent difficilement', 'Gemini ou ChatGPT', 'Deux versions d\'un texte du manuel, l\'une plus courte, avec les mots difficiles expliqués', 'Relecture sur le sens, sur le vocabulaire local et sur la fidélité au texte d\'origine'],
                ['Commentaires de bulletin à partir de critères anonymisés', 'Copilot ou ChatGPT', 'Des phrases types classées par niveau de résultat, à personnaliser', 'L\'enseignant choisit la phrase pour chaque élève ; aucun nom ni aucune note identifiable ne va dans l\'outil'],
                ['Courrier aux parents : réunion, absence, calendrier des compositions', 'ChatGPT, Gemini ou Copilot', 'Un message court, poli, adapté au WhatsApp ou à la lettre papier', 'Le directeur vérifie dates, lieu, montants et signature avant tout envoi'],
                ['Tableau de suivi des scolarités et relances par tranche', 'Copilot ou ChatGPT, avec un tableur', 'Un échéancier, des totaux par classe et des modèles de relance', 'L\'économe recalcule deux lignes à la main et rapproche le tableau du relevé Mobile Money'],
                ['Emploi du temps et remplacements sous contraintes', 'ChatGPT ou Claude', 'Une première grille proposée à partir des disponibilités et des salles', 'Le censeur ou le directeur des études arbitre ; l\'outil ne connaît ni les congés ni les accords tacites'],
                ['Synthèse d\'un mémoire ou d\'un article pour un enseignant du supérieur', 'Claude ou ChatGPT sur des sources choisies', 'Un résumé qui renvoie aux pages, et une liste de questions pour la soutenance', 'L\'enseignant retrouve chaque affirmation dans la source ; les références inventées sont écartées'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment repenser l\'évaluation quand chaque élève peut interroger un assistant sur son téléphone ?',
            'paragraphes' => [
                'La réponse tient en une idée : mesurer ce que l\'élève sait faire devant l\'enseignant, et traiter le devoir à la maison comme un travail d\'entraînement. Un exposé de cinq minutes sur son propre devoir, un exercice refait au tableau avec une variante de nombres, une dictée ou un calcul sans écran : ces gestes coûtent peu et montrent qui a compris.',
                'Le téléphone est déjà dans la poche de nombreux élèves et de presque tous les enseignants. Avec 16,4 millions de connexions mobiles pour 14,9 millions d\'habitants fin 2025 selon DataReportal, la question n\'est plus d\'interdire l\'appareil mais de dire ce qui est permis, pour quel travail, avec quelle mention. Un modèle de charte d\'établissement prévoit trois lignes : usage autorisé, usage autorisé avec mention de l\'outil, usage interdit.',
                'Un détecteur de texte généré ne prouve rien. Une étude publiée sur arXiv en 2023 (Liang et ses collègues) a constaté que sept détecteurs classaient à tort comme générées par une machine 61,22 % en moyenne des rédactions de candidats non anglophones. Cette étude porte sur l\'anglais, mais elle invite à la même prudence pour des élèves béninois qui écrivent en français, langue souvent différente de celle parlée à la maison. La procédure de doute que propose la formation passe par un entretien, les brouillons et une décision de l\'équipe pédagogique, jamais par un pourcentage affiché par un site.',
                'Au niveau universitaire, l\'intégrité académique est un sujet plus ancien que l\'IA. Le Conseil des ministres du 12 octobre 2022 a décidé la mise en place d\'un logiciel de détection du plagiat dans les universités publiques, afin de promouvoir une production scientifique de haute facture, selon Bénin Web TV. Un enseignant-chercheur qui encadre des mémoires y trouve un point d\'appui : la règle de la source citée vaut pour un texte humain comme pour un texte généré.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles contraintes de terrain faut-il intégrer : connexion, électricité, équipement, langues ?',
            'paragraphes' => [
                'La connexion est la contrainte la plus visible. Selon DataReportal (Digital 2026, publié le 8 novembre 2025), 32,2 % des Béninois utilisaient internet fin 2025 et la vitesse médiane de téléchargement sur le fixe était de 24,49 Mbps. Dans une salle des professeurs, la connexion réelle dépend du forfait personnel de chacun. La formation s\'organise donc sur des documents téléchargés à l\'avance, des consignes rédigées dans un traitement de texte puis collées d\'un coup, et des exercices de relecture qui ne demandent aucune connexion.',
                'Quand la séance se fait à distance et que la connexion coupe, une solution de repli est prévue, et le participant reprend grâce aux documents déjà téléchargés. Une coupure de dix minutes ne doit pas arrêter une demi-journée.',
                'L\'équipement progresse sans être uniforme. En 2019, l\'ABSU-CEP a équipé 24 salles multimédias, une école primaire et une école secondaire publiques par département, chacune avec 40 ordinateurs d\'élèves, un poste d\'enseignant et un routeur avec un abonnement de douze mois ; le directeur du CEG n° 1 d\'Allada s\'était engagé à renouveler l\'abonnement. Le 11 septembre 2026, l\'UNICEF a remis 628 équipements informatiques à 43 collèges d\'enseignement général, avec 12 salles numériques supplémentaires. Une salle équipée sert si quelqu\'un finance sa connexion : la formation demande à chaque direction de dire qui paie l\'abonnement.',
                'La langue de travail est le français, parfois l\'anglais dans les établissements bilingues. Les assistants écrivent un français général : pour un courrier administratif béninois, on leur donne un modèle de l\'établissement et le vocabulaire de la maison. Pour un support en fon, en yoruba ou en une autre langue nationale, un locuteur relit avant toute diffusion.',
                'Le téléphone convient aux petites tâches, comme reformuler un message aux parents ; l\'ordinateur sert à relire un corrigé ou un tableau. La séance sépare ces deux usages et consacre le temps de contrôle à l\'écran large.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour une équipe éducative, sur place ou à distance depuis Cotonou ?',
            'legende' => 'Durées et effectifs de la formation IA en entreprise de Richard, adaptés à un établissement. Les formats se combinent : un atelier pour la direction, puis la formation complète pour une équipe pilote, puis l\'accompagnement mensuel. Le Bénin est à UTC+1 toute l\'année, comme Cotonou : le décalage horaire est de 0 heure.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir dans un établissement'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction, un conseil d\'enseignement ou un département qui veut voir l\'outil sur ses propres documents avant de décider de la suite'],
                ['Formation complète, sur place', '2 jours, en 4 demi-journées', '10 personnes au plus, par fonction', 'Un groupe d\'enseignants de la même discipline, ou l\'équipe de direction et de gestion (directeur, censeur, économe, secrétariat), dans l\'établissement selon le devis'],
                ['Session mutualisée', '1 à 2 jours', 'Plusieurs structures d\'un même réseau', 'Un réseau d\'écoles privées, un groupe confessionnel ou une association : une ou deux personnes par école, sur des documents publics ou fictifs'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Des enseignants répartis entre Cotonou, Parakou, Natitingou ou une autre ville, joignables après les cours ; séances courtes, plus faciles à tenir avec une connexion mobile'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Une prise en main dans l\'établissement, puis une mise en pratique suivie à distance sur les tâches choisies'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Une équipe qui a commencé et veut ancrer les gestes, étendre l\'usage à d\'autres tâches'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment la formation se prépare-t-elle sans qu\'aucune donnée d\'élève ne quitte l\'établissement ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Le directeur décrit l\'établissement : public ou privé, niveaux, effectifs, disciplines, matériel et connexion. Un questionnaire avant la session précise les tâches qui prennent le plus de temps. Un ou deux entretiens de cadrage suffisent, et ils peuvent conclure qu\'un atelier d\'une demi-journée répond au besoin.'],
                ['titre' => 'Choix des documents', 'duree' => 'Avant la session', 'texte' => 'Chaque enseignant apporte une séquence à venir et un devoir déjà donné ; la direction apporte un courrier type et un tableau de scolarités. Les documents sont téléchargés à l\'avance sur chaque poste.'],
                ['titre' => 'Anonymisation par l\'établissement', 'duree' => 'Avant la session', 'texte' => 'L\'établissement remplace lui-même les noms, matricules, téléphones et montants par des valeurs fictives. Richard ne reçoit aucun dossier nominatif d\'élève.'],
                ['titre' => 'Animation', 'duree' => '4 demi-journées de 3 h 30', 'texte' => 'Chaque séquence part d\'un cas de l\'école, passe par la règle qui s\'applique, puis par le geste dans l\'outil et par la vérification. Les participants travaillent sur leurs postes ; le téléphone sert aux exercices courts.'],
                ['titre' => 'Épreuve finale', 'duree' => 'Dernière demi-journée', 'texte' => 'Chaque participant réalise seul, chronomètre en main, une tâche de sa fonction, de la consigne à la vérification. Il reçoit ensuite une attestation nominative de fin de formation, avec les supports de la session.'],
                ['titre' => 'Suivi', 'duree' => 'Le mois suivant, puis accompagnement mensuel', 'texte' => 'Un canal direct permet de poser les questions d\'application. Pour une équipe qui veut aller plus loin, l\'accompagnement mensuel prolonge la formation pendant trois mois.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble une séance : quatre scénarios d\'établissements béninois ?',
            'items' => [
                ['secteur' => 'Un professeur de SVT de collège public, à Parakou, prépare une épreuve blanche de BEPC', 'probleme' => 'Situation type, dossier fictif : trois classes de troisième, un chapitre sur la digestion à réviser, peu de temps entre deux services, et une connexion qui ne tient pas toute la matinée.', 'solution' => 'Consigne donnée : « Propose un exercice de même forme que les épreuves de BEPC de SVT, niveau troisième, avec un schéma à légender, un barème sur 20 et un corrigé détaillé. » Ce que le participant contrôle avant usage : chaque réponse du corrigé, la conformité du schéma au programme, la somme du barème. Il retire tout ce qui ne figure pas au programme de la classe. Le travail se fait hors ligne sur le fichier téléchargé à l\'avance.'],
                ['secteur' => 'Une directrice d\'école privée laïque, à Abomey-Calavi, relance les scolarités', 'probleme' => 'Situation type, dossier fictif : les scolarités se paient en tranches, par Mobile Money ou en espèces, et les familles envoient des captures d\'écran que l\'économe rapproche à la main d\'un cahier de reçus.', 'solution' => 'Consigne donnée : « À partir de ce tableau de familles fictives, prépare un échéancier par tranche et trois messages de relance, de plus en plus fermes, sans citer le nom des enfants. » Ce que la directrice contrôle : chaque montant recalculé sur deux lignes, les dates de tranche, le ton de chaque message. Aucune liste de retardataires n\'est affichée ni envoyée à un groupe : elle se traite famille par famille.'],
                ['secteur' => 'Un enseignant-chercheur de l\'Université de Parakou encadre des mémoires de licence', 'probleme' => 'Situation type, dossier fictif : plusieurs étudiants rendent un chapitre de revue de littérature très lisse, avec des références que l\'encadreur ne retrouve pas.', 'solution' => 'Consigne donnée : « Prépare une grille de soutenance de quinze minutes qui oblige l\'étudiant à justifier trois sources du chapitre, à les situer dans le document et à reformuler un argument sans notes. » Ce que l\'enseignant contrôle : que chaque référence existe en bibliothèque ou en ligne, que la grille reste la même pour tous les étudiants, et que la décision sur un doute revient à l\'équipe pédagogique, pas à un site de détection.'],
                ['secteur' => 'Une institutrice de CE2 d\'une école multigrade, en milieu rural, différencie ses exercices', 'probleme' => 'Situation type, dossier fictif : des élèves de niveaux très différents dans la même salle, un seul tableau, et un téléphone pour tout outil numérique.', 'solution' => 'Consigne donnée : « Écris trois versions d\'un exercice de lecture sur ce texte du manuel : une version courte avec les mots expliqués, une version standard, une version avec une question de réflexion en plus. » Ce que l\'institutrice contrôle : le vocabulaire local, la longueur des phrases, et l\'absence de toute information sur un élève dans la consigne. Les versions sont recopiées au tableau ou imprimées en peu d\'exemplaires.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer ou budgéter la formation d\'un établissement ou d\'une équipe au Bénin ?',
            'paragraphes' => [
                'Le financement dépend du statut de l\'établissement et de la personne qui paie. Pour un établissement privé, la formation se budgète comme une dépense de fonctionnement, au nom de l\'école ou de son association gestionnaire. Pour un établissement public, la décision appartient à la hiérarchie ; les actions de formation des maîtres, comme l\'Université de vacances 2026 de Natitingou, relèvent des ministères, et une session commandée à un prestataire se prépare par écrit avec l\'autorité compétente.',
                'Le dispositif de formation professionnelle continue à connaître est le FODEFCA, dont les statuts sont approuvés par le décret n° 2022-286 du 11 mai 2022. Chaque structure vérifie auprès du fonds si son statut et le prestataire retenu entrent dans ses conditions. Richard n\'affiche aucun agrément de ce fonds et n\'en promet aucune prise en charge : si elle conditionne votre décision, dites-le dès le premier échange.',
                'Pour budgétiser sans prise en charge, comptez trois lignes : la formation, sur devis ; les abonnements éventuels aux assistants, une fois les usages choisis, qui restent au nom de l\'établissement ou de l\'enseignant ; et le temps des participants. Deux demi-journées par semaine, après les cours, désorganisent moins un emploi du temps que deux jours consécutifs. Le programme, la feuille de présence et l\'attestation remise à chaque participant servent dans tous les cas, notamment pour un dossier interne ou pour une demande de financement.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation IA d\'une équipe éducative au Bénin ?',
            'intro'      => 'Le prix se fixe sur devis, en FCFA, après l\'échange de cadrage, et le devis détaille chaque poste. Richard accepte le Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces. Les abonnements aux assistants restent au nom de l\'établissement et ne sont pas compris ; leurs formules et leurs limites évoluent, la page officielle de chaque éditeur fait foi.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée sur des documents de l\'établissement', 'Deux tâches travaillées, l\'une d\'enseignement et l\'autre de gestion', 'Règles de données sur les élèves', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Exercices construits sur les documents de l\'équipe', 'Épreuve finale chronomètre en main et attestation', 'Supports de la session', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Corrections et nouvelles tâches', 'Extension de l\'usage à d\'autres tâches']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, par fonction.',
                'La durée : atelier, deux jours ou accompagnement mensuel.',
                'Le lieu : dans votre établissement, dans une autre ville du Bénin ou à distance.',
                'La préparation des exercices sur les programmes et les documents de l\'établissement.',
                'La langue des supports, en français ou en anglais.',
                'L\'accompagnement après la session.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent les établissements béninois qui démarrent l\'IA ?',
            'intro' => 'Une formation se juge un mois plus tard, sur ce que l\'équipe fait encore. Voici les écarts les plus fréquents dans une école, un collège ou une université du pays.',
            'items' => [
                ['titre' => 'Distribuer un corrigé sans l\'avoir refait', 'texte' => 'Un exercice généré en trente secondes porte parfois une réponse fausse. Imprimé en soixante exemplaires, l\'erreur se retrouve dans les cahiers. Le professeur refait chaque exercice avant de le distribuer.'],
                ['titre' => 'S\'écarter du programme officiel', 'texte' => 'L\'assistant propose des notions d\'un autre pays ou d\'un autre niveau. Le journal de classe se remplit à partir du programme de la discipline, pas de la seule réponse de l\'outil.'],
                ['titre' => 'Coller une liste de classe dans un compte personnel', 'texte' => 'Sous la pression d\'un délai, on prend le chemin le plus court. Le Code du numérique protège les données personnelles, et celles des mineurs en particulier : on anonymise d\'abord, toujours.'],
                ['titre' => 'Croire le détecteur de texte', 'texte' => 'Un pourcentage affiché par un site devient une accusation contre un élève. Un entretien, les brouillons et une décision collective valent mieux.'],
                ['titre' => 'Annoncer une interdiction sans règle de remplacement', 'texte' => 'Interdire l\'IA sans dire ce qui est permis pousse l\'usage vers les téléphones personnels. Une charte courte, affichée en salle des professeurs, vaut mieux ; la formation <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a> aide à la rédiger.'],
                ['titre' => 'Afficher les familles en retard de paiement', 'texte' => 'Une liste de retardataires lue dans un groupe de parents expose des enfants. Les relances se font famille par famille, avec un modèle relu par la direction.'],
                ['titre' => 'Garder l\'accès d\'un enseignant parti', 'texte' => 'Le compte d\'un professeur muté ou d\'une secrétaire partie reste ouvert, avec des historiques de classe. La procédure de départ ferme les accès le jour même.'],
                ['titre' => 'Compter sur une connexion qui n\'existe pas', 'texte' => 'Une séance bâtie sur du direct échoue quand le forfait s\'épuise. On télécharge les documents avant, on rédige hors ligne et on prévoit une solution de repli en cas de coupure.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que faut-il confirmer auprès des autorités avant de signer ?',
            'texte' => 'Trois points ne se décident pas dans une formation. Les consignes d\'examen de l\'année se confirment auprès de l\'Office du baccalauréat et de la direction compétente du ministère concerné. Le texte du Code du numérique se lit à la source, sur le site du Secrétariat général du gouvernement, et le cas particulier d\'un établissement se confirme auprès de l\'Autorité de protection des données personnelles. La prise en charge éventuelle par un fonds de formation se demande au fonds, par écrit. Richard signale ce qui change la conduite d\'une formation ; il ne remplace ni un juriste ni l\'administration.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos enseignants et vos directeurs avec Richard SALANON au Bénin ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard est basé à Cotonou, au Bénin, l\'un des pays où il a déjà travaillé. Il n\'exerce pas le métier d\'enseignant : il forme à l\'usage des outils. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Avec ' . $ans . ' ans d\'expérience et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP.',
                'Sa façon de former se résume en engagements vérifiables : un cadrage qui peut conclure qu\'un atelier suffit, des exercices construits sur les documents de l\'équipe, une épreuve finale pour chaque participant, des supports qui restent à l\'établissement, un canal direct le mois suivant et aucun chiffre de gain promis. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun. Les demandes reçoivent une réponse sous 24 heures. Le parcours complet figure sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels projets Richard a-t-il menés au Bénin, en lien avec la formation et le numérique ?',
            'legende' => 'Projets de Cotonou présentés dans les <a href="/realisations/">réalisations</a>, avec leur cadre de réalisation.',
            'entetes' => ['Projet', 'Secteur', 'Ce qui a été construit', 'Cadre'],
            'lignes'  => [
                ['GC Pro Consulting', 'Formation et conseil en gestion', 'Un site bilingue de plus de cent pages : catalogue de formations, inscriptions et demandes de devis en ligne, pages locales pour chaque ville desservie.', 'Client direct'],
                ['Wapy', 'Logiciel en ligne', 'Un assistant WhatsApp à intelligence artificielle qui répond aux clients des entreprises d\'Afrique francophone, conçu, développé et amélioré par Richard.', 'Produit de Richard'],
                ['OBA TV', 'Médias', 'Une chaîne en ligne avec direct, replays, grille des programmes et abonnement premium payé par mobile money (MTN MoMo, Moov Money).', 'Client direct'],
                ['IK Fashion House', 'Mode féminine sur mesure', 'Une boutique en ligne avec commande sur mesure à distance, payée avec FedaPay, et une page de lancement de collection.', 'Réalisé en sous-traitance pour Digital Développement'],
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Choisissez deux tâches par fonction, l\'une de classe et l\'autre de gestion. Classez vos documents en trois couleurs, anonymisez ce qui contient des noms d\'élèves, faites refaire à la main chaque corrigé avant de le distribuer, écrivez une charte d\'usage de trois lignes pour les élèves, et mesurez le temps de la tâche avant et un mois après la formation.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former vos enseignants et votre équipe de direction à l\'IA au Bénin ?',
            'texte'  => 'Indiquez le nombre de personnes, la ville, le niveau d\'enseignement, les tâches qui prennent le plus de temps et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => 'Qui peut former les enseignants à l\'IA au Bénin ?', 'r' => 'Richard SALANON, basé à Cotonou, forme les enseignants, les directeurs d\'établissement et les formateurs béninois, sur place selon le devis ou à distance. Il travaille sur les séquences et les documents de gestion des participants, avec des dossiers anonymisés, et termine par une épreuve finale individuelle.'],
        ['q' => 'Un enseignant béninois peut-il préparer ses cours avec ChatGPT, Claude ou Gemini ?', 'r' => 'Oui, comme aide à la préparation, à condition de comparer chaque objectif et chaque exercice au programme officiel de la discipline et de refaire les corrigés à la main. Le ministre des Enseignements maternel et primaire a lui-même présenté l\'IA, en août 2026, comme un levier pour préparer les séquences et différencier l\'enseignement.'],
        ['q' => 'Que s\'est-il passé à l\'Université de vacances 2026 de Natitingou ?', 'r' => 'Du 25 au 28 août 2026, des enseignants de la maternelle et du primaire des douze départements s\'y sont réunis sur le thème de l\'enseignant augmenté par l\'IA. Les travaux portaient sur le potentiel de l\'IA, ses risques, ses limites et les conditions d\'un usage adapté aux classes béninoises, d\'après le compte rendu du gouvernement.'],
        ['q' => 'Peut-on utiliser l\'IA pour préparer le BEPC ou le baccalauréat au Bénin ?', 'r' => 'Pour les épreuves blanches, les exercices gradués et les explications de corrigés, oui, sous le contrôle de l\'enseignant. Les consignes de la session elles-mêmes viennent de l\'Office du baccalauréat et du ministère : elles se confirment à la source chaque année.'],
        ['q' => 'Un élève de collège peut-il ouvrir seul un compte sur un assistant d\'IA ?', 'r' => 'L\'article 446 du Code du numérique prévoit qu\'avant seize ans, le traitement des données d\'un mineur pour une offre directe de services de la société de l\'information suppose le consentement ou l\'autorisation du titulaire de la responsabilité parentale. Confirmez votre cas auprès de l\'Autorité de protection des données personnelles.'],
        ['q' => 'Peut-on mettre des données de santé d\'un élève dans un assistant d\'IA ?', 'r' => 'Non. L\'article 394 du Code du numérique interdit en principe le traitement des données concernant la santé, avec des exceptions que le texte énumère. Un certificat médical ou un suivi particulier ne se colle jamais dans un assistant en ligne.'],
        ['q' => 'Un détecteur de texte généré suffit-il à prouver qu\'un élève a triché ?', 'r' => 'Non. Une étude de 2023 publiée sur arXiv a trouvé que sept détecteurs classaient à tort 61,22 % en moyenne des rédactions de candidats non anglophones comme générées par une machine. La procédure proposée passe par un entretien, les brouillons et une décision collective.'],
        ['q' => 'Que prévoit le Bénin pour l\'e-learning dans les universités publiques ?', 'r' => 'Le Conseil des ministres du 1er juillet 2026 a autorisé la contractualisation de prestataires pour un projet national d\'e-learning sur la plateforme etudiant.bj, d\'abord dans les universités d\'Abomey-Calavi, de Parakou, l\'UNSTIM et l\'Université nationale d\'agriculture, à partir de la rentrée 2026-2027, selon OSIRIS.'],
        ['q' => 'La formation fonctionne-t-elle avec une connexion mobile lente en salle des professeurs ?', 'r' => 'Oui, à condition de la préparer : documents téléchargés à l\'avance, consignes rédigées hors ligne puis collées, exercices de relecture sans connexion. En cas de coupure pendant une séance à distance, une solution de repli est prévue.'],
        ['q' => 'Quel est le décalage horaire entre Cotonou et un établissement du Bénin ?', 'r' => 'Aucun : le Bénin est à UTC+1 toute l\'année, comme Cotonou. Les séances à distance peuvent donc se tenir après les cours, par exemple en fin d\'après-midi, sans calcul de décalage.'],
        ['q' => 'Le FODEFCA peut-il financer la formation IA d\'un établissement scolaire ?', 'r' => 'Le décret n° 2022-286 du 11 mai 2022 approuve les statuts de ce fonds de formation continue. Aucune prise en charge n\'est garantie et Richard n\'affiche aucun agrément du fonds : interrogez-le par écrit, programme et devis à l\'appui.'],
        ['q' => 'Combien coûte la formation, et peut-on payer par Mobile Money ?', 'r' => 'Le prix est fixé sur devis, en FCFA, après le cadrage. Richard accepte le Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces. Les abonnements aux assistants se paient à part, à l\'éditeur.'],
        ['q' => 'La formation est-elle certifiante ?', 'r' => 'Non. Richard n\'est certifié par aucun éditeur d\'IA. Chaque participant reçoit une attestation nominative de fin de formation, avec le programme et les supports ; ce n\'est ni un diplôme ni une certification d\'éditeur.'],
    ],

    'sources' => [
        ['titre' => 'Gouvernement du Bénin, Université de vacances 2026 à Natitingou : l\'enseignant et l\'intelligence artificielle', 'url' => 'https://www.gouv.bj/article/3645/universite-vacances-2026-benin-accelere-transformation-numerique-prepare-enseignant-demain/', 'date' => '2026-10-26'],
        ['titre' => 'Bénin Web TV, calendrier des examens et concours 2026 fixé par le gouvernement (CEP, BEPC, BAC)', 'url' => 'https://beninwebtv.bj/benin-le-gouvernement-fixe-les-dates-des-examens-et-concours-2026/', 'date' => '2026-10-26'],
        ['titre' => 'Bénin Web TV, examens de fin d\'année 2026 : note du ministère du 6 mai 2026', 'url' => 'https://beninwebtv.bj/benin-examens-de-fin-dannee-2026-le-ministere-rappelle-certains-candidats-a-lordre/', 'date' => '2026-10-26'],
        ['titre' => 'Gouvernement du Bénin, délibération du BEPC 2026 (session de juin)', 'url' => 'https://www.gouv.bj/article/3575/deliberation-bepc-2026-benin-enregistre-reussite-nourrit-nouvelles-ambitions/', 'date' => '2026-10-26'],
        ['titre' => 'La Nouvelle Tribune, le baccalauréat 2026 affiche un taux national de réussite de 66,78 %', 'url' => 'https://lanouvelletribune.info/2026/07/benin-le-bac-2026-affiche-un-taux-national-de-reussite-de-6678/', 'date' => '2026-10-26'],
        ['titre' => 'OSIRIS, le Bénin investit dans l\'e-learning pour moderniser l\'enseignement supérieur (3 juillet 2026)', 'url' => 'https://www.osiris.sn/le-benin-investit-dans-l-e-learning-pour-moderniser-l-enseignement-superieur.html', 'date' => '2026-10-26'],
        ['titre' => 'WeAreTech Africa, le Bénin élargit l\'accès à l\'enseignement supérieur par une stratégie d\'e-learning', 'url' => 'https://www.wearetech.africa/en/fils-uk/news/tech/benin-expands-higher-education-access-through-e-learning-strategy', 'date' => '2026-10-26'],
        ['titre' => 'Bénin Web TV, logiciel de détection du plagiat dans les universités publiques (Conseil des ministres du 12 octobre 2022)', 'url' => 'https://beninwebtv.bj/benin-le-gouvernement-lance-une-traque-contre-les-enseignants-plagiaires-dans-les-universites/', 'date' => '2026-10-26'],
        ['titre' => 'Gouvernement du Bénin, Olympiades nationales d\'intelligence artificielle : lauréats distingués', 'url' => 'https://www.gouv.bj/article/3579/olympiades-nationales-intelligence-artificielle-laureats-distingues/', 'date' => '2026-10-26'],
        ['titre' => 'Bénin Web TV, EducMaster : mise à jour des données des classes intermédiaires (lettre du 16 février 2026)', 'url' => 'https://beninwebtv.bj/benin-le-ministre-karimou-exige-la-mise-a-jour-complete-des-donnees-des-classes-intermediaires-sur-educmaster/', 'date' => '2026-10-26'],
        ['titre' => 'CIO Mag, le Bénin dote ses écoles primaires et secondaires publiques de 24 salles multimédias (novembre 2019)', 'url' => 'https://cio-mag.com/le-benin-dote-ses-ecoles-primaires-et-secondaires-publiques-de-24-salles-multimedias', 'date' => '2026-10-26'],
        ['titre' => 'CIO Mag, Forum Giga connectivité : le Bénin et la connectivité des écoles (juillet 2024)', 'url' => 'https://cio-mag.com/forum-giga-connectivite-le-benin-reitere-son-engagement-pour-lacceleration-de-la-connectivite-des-ecoles/', 'date' => '2026-10-26'],
        ['titre' => 'Gouvernement du Bénin, remise de 628 équipements informatiques par l\'UNICEF (11 septembre 2026)', 'url' => 'https://www.gouv.bj/article/3663/enseignement-secondaire-gouvernement-accelere-transformation-numerique-avec-equipements-informatiques/', 'date' => '2026-10-26'],
        ['titre' => 'DataReportal, Digital 2026 : Bénin (internautes, connexions mobiles, vitesses)', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant Code du numérique (articles 391, 394 et 446)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/download', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du Fond de Développement de la Formation professionnelle continue et de l\'Apprentissage', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-26'],
        ['titre' => 'Liang, Yuksekgonul, Mao, Wu et Zou, « GPT detectors are biased against non-native English writers », arXiv 2304.02819 (2023)', 'url' => 'https://arxiv.org/abs/2304.02819', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['ia-en-entreprise', 'contenu-avec-ia', 'outils-collaboratifs', 'microsoft-365-google-workspace', 'gouvernance-ia'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
