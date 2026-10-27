<?php
// ============================================================
// data/metiers/enseignants-etablissements/mali.php · Formation IA pour les
// enseignants, directeurs d’établissements et formateurs du Mali.
// Formulation imposée : « Richard peut former ». Pays : déjà travaillé = oui.
// Aucun projet client du Mali dans projets-clients.php (vérifié) : aucun
// projet n’est cité.
// Sources lues le 27/10/2026 : APA (rentrée, 1er octobre 2026), Digital
// Business Africa (instituts de formation des maîtres, 5 août 2026 ; EDUMALI,
// 9 mars 2026), Osiris (AGEFAU, 24 juillet 2026 ; CIAR-Mali, 21 septembre
// 2026 ; téléphonie, 19 mai 2024), Afrikinfos-Mali (DEF, 19 juin 2026),
// Bamacours (orientation du DEF), DataReportal, TheGlobalEconomy (Banque
// mondiale), Data Protection Africa, Constitution de 2023 (article 31),
// OIT (FAFPA, 28 juillet 2026), IANA. Lois : titre et date seulement.
// Fiche parente ia-en-entreprise pour les formats. Aucune certification
// attribuée à Richard. Aucun propos sur la sécurité ou la politique.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Formation IA pour enseignants, directeurs d’écoles et formateurs au Mali : préparer les leçons, les compositions et le suivi des élèves plus vite, du fondamental au lycée, sans confier à l’outil la note ni le dossier d’un enfant',
    'title'   => 'Formation IA enseignants au Mali | Richard SALANON',
    'meta'    => 'Formation IA pour enseignants et directeurs d’école au Mali : leçons, compositions, DEF et dossiers d’élèves, séances à distance, devis en FCFA.',
    'en_bref' => 'Qui peut former les enseignants et les directions d’école du Mali à l’IA ? Richard SALANON, consultant installé à Cotonou, peut animer en français, à distance, des séances pour les maîtres, directeurs, censeurs et économes des écoles publiques, privées et communautaires, à partir de leurs propres leçons, sujets et circulaires. La note et le dossier de l’élève restent hors de l’outil. L’année 2026-2027 a ouvert le 1er octobre 2026. Bamako (UTC+0) retarde d’une heure sur Cotonou (UTC+1), et le devis est établi en FCFA.',
    'publie'  => '2026-12-30',
    'maj'     => '2026-12-30',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut initier les enseignants et les chefs d’établissement maliens à l’IA, et sur quoi juger une proposition ?',
            'paragraphes' => [
                'Un maître de Ségou qui prépare trois niveaux dans une même salle, une directrice de lycée privé de Bamako et un promoteur d’école à Sikasso ont en commun la même interrogation : que peut faire un assistant d’IA pour leur travail sans toucher à ce qui relève d’eux seuls ? Richard SALANON peut les former à distance, en français, à partir de leurs fiches de préparation, de leurs sujets de composition et de leurs notes aux parents. Il n’enseigne pas et ne donne aucun cours de pédagogie : il apprend à se servir de l’outil.',
                'Trois voies existent au Mali. La première est publique : les instituts de formation des maîtres, qui préparent les futurs enseignants, et le Centre d’intelligence artificielle et de robotique, tourné vers les étudiants. La deuxième passe par les plateformes privées de soutien scolaire, qui s’adressent surtout aux élèves. La troisième est la formation courte d’une équipe en poste, centrée sur ses documents. C’est la seule des trois qui part de la leçon du lendemain.',
                'Pour trancher entre deux propositions, regardez quatre choses. Les exercices portent-ils sur vos fiches et vos sujets, rendus anonymes ? Une règle écrite fixe-t-elle ce qui ne va jamais dans l’assistant ? Une épreuve finale, chronomètre en main, vérifie-t-elle que chaque participant sait faire seul une tâche de son école ? Le prestataire dit-il clairement qu’un détecteur de texte généré ne prouve pas à lui seul qu’un élève a triché ? Une offre qui promet de corriger les compositions à la place du maître vend le contraire d’une formation.',
                'Richard n’est certifié par aucun éditeur d’IA et ne se présente comme partenaire d’aucun. La suite de la page s’appuie sur la presse malienne et africaine, sur des communiqués d’institutions et sur quelques bases publiques, chacune citée avec sa date dans la liste des sources.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels équipements et quelles initiatives numériques touchent aujourd’hui l’école malienne ?',
            'paragraphes' => [
                'Le 30 juillet 2026, d’après Digital Business Africa (article du 5 août), le bureau de l’UNESCO au Mali et l’Institut international pour le renforcement des capacités en Afrique (IICBA) ont remis au ministère de l’Éducation nationale un lot de matériel destiné à huit instituts de formation des maîtres : 40 ordinateurs portables, 16 ordinateurs tout-en-un, 32 tablettes, 8 vidéoprojecteurs, 8 tableaux interactifs, 8 imprimantes multifonctions et 8 dispositifs de sauvegarde. L’opération est financée par le Japon. Elle concerne la formation initiale des futurs enseignants, pas les maîtres déjà en classe.',
                'Du côté de la connexion, Osiris rapporte que l’Agence de gestion du fonds d’accès universel (AGEFAU) a signé le 22 juillet 2026, à Bamako, deux conventions de quatre ans renouvelables, l’une avec le ministère de l’Éducation nationale et l’autre avec le ministère chargé de la formation professionnelle. Celle de l’éducation prévoit des centres d’accès universel dans des établissements publics, des points Wi-Fi et du matériel informatique pour des élèves distingués. L’article indique une connexion de tous les établissements secondaires, techniques et professionnels d’ici la fin de 2026 : c’est un objectif annoncé, non un constat.',
                'Dans le privé, la plateforme EDUMALI a été lancée le 7 mars 2026 par de jeunes Maliens, selon Digital Business Africa. Elle propose des vidéos par chapitre conformes au programme national, des exercices corrigés par des tuteurs, des examens blancs pour le DEF et le baccalauréat, et un espace de suivi pour les parents. Pour un enseignant, cela signifie que des élèves arrivent déjà avec un second support de cours, dont le contenu mérite d’être connu.',
                'Enfin, le CIAR-Mali, créé par ordonnance du 4 août 2023, a vu son nouveau site de Kati-Sirakoro Niaré inauguré le 21 septembre 2026, d’après l’article d’APA repris par Osiris. Son cycle préparatoire a ouvert 40 places supplémentaires pour 2026-2027. Ces dispositifs visent les futurs enseignants et les étudiants ; la formation proposée ici s’adresse aux maîtres déjà en poste, sur leurs propres tâches.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment loger des séances dans l’année 2026-2027, entre trimestres, compositions et résultats du DEF ?',
            'paragraphes' => [
                'Selon APA, une décision du ministère de l’Éducation nationale, signée le 14 septembre 2026 à Bamako par son secrétaire général, a fixé l’ouverture des classes au 1er octobre 2026. L’année compte trois trimestres : le premier va du 1er octobre au 23 décembre 2026, avec reprise le 4 janvier 2027 ; le deuxième s’achève le 24 mars 2027, avec reprise le 5 avril ; les cours finissent le 30 juin 2027 et les grandes vacances courent du 1er juillet au 30 septembre 2027. Les académies arrêtent elles-mêmes le calendrier de leurs évaluations.',
                'Pour une équipe, les creux se situent donc dans les derniers jours avant chaque reprise, et avant les compositions de fin de trimestre, que chaque académie place à sa manière. La formation ne fixe aucune date à la place de l’école : elle propose des demi-journées que la direction cale après avoir pris connaissance du calendrier de son académie.',
                'Les résultats du DEF 2026 donnent un repère sur le rythme des examens. D’après la presse malienne (Afrikinfos-Mali), ils ont été proclamés le 19 juin 2026, avec un taux de réussite national de 65,40 %, contre 53,02 % en 2025. Les effectifs de candidats cités varient d’un média à l’autre et le ministère reste la référence : ce taux décrit un examen, pas l’effet d’un outil.',
                'Ensuite vient l’orientation. D’après Bamacours, la commission nationale s’est réunie du 10 au 18 août 2026, et chaque admis consulte son affectation sur le portail porteduc avec son numéro de place, sans saisir son nom. Pour un directeur de lycée, c’est une raison de plus de ne jamais déposer une liste d’élèves, avec numéros de place, dans un assistant en ligne.',
                'En séance, on distingue trois situations. Pour un cours, l’assistant suggère et le programme tranche. Pour un devoir, on rédige la consigne comme si chaque élève pouvait interroger une application. Pour une composition ou un examen officiel, seules comptent les règles de l’organisateur, et rien de ce qu’on apprend ici ne les contourne.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que retenir du cadre malien sur les données des élèves et sur la langue des supports, et que confier à un juriste ?',
            'paragraphes' => [
                'La protection des données personnelles relève de la loi n° 2013-015 du 21 mai 2013, modifiée par la loi n° 2017-070 du 18 décembre 2017. Elle a créé l’Autorité de protection des données à caractère personnel (APDP), lancée en 2016. Richard n’est pas juriste et ne commente aucun article : les formalités d’une école, publique ou privée, se demandent à l’APDP ou à un conseil.',
                'Selon la fiche de Data Protection Africa, un transfert de données vers un autre pays n’est permis que si celui-ci offre une protection juridique suffisante. Pour une école, la conséquence pratique est simple : un registre d’inscription, un relevé de notes ou une liste de contacts de parents décrit presque toujours des mineurs, et le coller dans un assistant hébergé à l’étranger revient à l’envoyer au loin. Cette fiche ne détaille pas de règle propre aux enfants : la prudence vient donc de la direction de l’école, et le juriste précise ce que la loi impose.',
                'Chaque établissement dresse trois listes courtes. Ce que l’assistant reçoit tel quel : le programme officiel, la progression annuelle, une leçon rédigée par l’enseignant. Ce qu’il ne reçoit qu’anonymisé : des extraits de copies, des erreurs relevées en classe. Ce qu’il ne reçoit jamais : bulletins, listes avec numéros de place, situations familiales, sujets d’une composition à venir.',
                'Reste la langue. L’article 31 de la Constitution de 2023 dispose que les langues nationales sont les langues officielles du Mali, qu’une loi organique en détermine l’emploi, et que le français est la langue de travail. Les séances se tiennent donc en français. Un support destiné à des élèves dans une langue nationale se fait relire par un locuteur avant distribution, car les assistants sont inégaux d’une langue à l’autre.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels travaux d’un enseignant ou d’une direction au Mali l’IA peut-elle ébaucher, et que vérifie l’adulte avant tout usage ?',
            'legende' => 'Huit travaux de l’école malienne, traités sur des pièces anonymisées. La dernière colonne donne le geste qui précède toute distribution.',
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ['Progression trimestrielle pour une classe de 9e année préparant le DEF', 'Assistant, traitement de texte', 'Découpage des trois trimestres du 1er octobre au 30 juin, séquences, évaluations de fin de période', 'Notions confrontées au programme officiel ; dates comparées à la décision du ministère et au calendrier de l’académie'],
                ['Série d’exercices de révision en mathématiques ou en sciences', 'Assistant et tableur', 'Exercices gradués, corrigé détaillé, barème', 'Corrigé refait par l’enseignant ; unités et données chiffrées relues une à une'],
                ['Dictée, rédaction ou compréhension de texte sur un sujet de la vie locale', 'Assistant', 'Texte court adapté au niveau, questions, grille de notation', 'Vocabulaire et faits vérifiés ; texte relu à voix haute avant la classe'],
                ['Sujet de composition de fin de trimestre', 'Assistant, relecture par un collègue', 'Sujet à deux versions, barème, durée', 'Sujet jamais rédigé dans un compte partagé ; version définitive gardée hors de l’outil'],
                ['Appréciations types pour le carnet de notes', 'Assistant, à partir d’erreurs recopiées sans nom', 'Formules pour les difficultés récurrentes', 'La note et l’appréciation individuelle restent écrites par l’enseignant'],
                ['Convocation à une réunion de parents ou information sur les frais', 'Assistant, puis envoi par le canal de l’école', 'Texte simple en français, date, lieu, ordre du jour', 'Montants et dates relus par la direction ; aucun cas individuel dans un message collectif'],
                ['Suivi des frais de scolarité d’une école privée ou communautaire', 'Tableur, assistant pour les relances', 'Tableau par famille, reçus numérotés, relances individuelles', 'Remises et délais décidés par la direction ; aucune liste de familles diffusée'],
                ['Règle de l’école sur l’usage de l’IA par élèves et enseignants', 'Assistant, document partagé', 'Note datée, personne responsable nommée, trois listes de données', 'Signature du chef d’établissement ; instructions de l’autorité pour une école publique'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Courant, connexion, téléphone : comment la formation tient-elle compte de la réalité d’un établissement malien ?',
            'paragraphes' => [
                'D’après DataReportal (Digital 2026), le Mali comptait en octobre 2025 environ 8,91 millions d’internautes, soit 35,1 % de la population de 25,4 millions d’habitants, et 23,2 millions de connexions mobiles. Selon Osiris, le parc d’abonnés mobiles dépassait 25 millions fin 2023 et près de 17 millions de personnes détenaient un compte mobile lié aux transferts d’argent, l’article ne précisant pas l’année de ce second chiffre. Ces moyennes nationales ne disent rien de la salle des maîtres de votre école.',
                'Le courant compte autant que le réseau. D’après les données de la Banque mondiale relayées par TheGlobalEconomy, 49,5 % de la population avait accès à l’électricité en 2024. Ce chiffre concerne la population et non les écoles : chaque participant prévoit donc un appareil chargé la veille et, si possible, une seconde manière de se connecter.',
                'Le déroulé en tient compte : questionnaire avant la session, documents à télécharger à l’avance, supports remis aux participants. Si la connexion tombe pendant une séance, la solution de repli décrite dans la fiche IA en entreprise s’applique.',
                'Les assistants fonctionnent mieux sur des consignes courtes et précises que sur des fichiers lourds. Un enseignant qui prépare sa leçon sur téléphone rédige sa consigne hors ligne, puis la colle d’un seul geste quand le réseau revient. Cette habitude se travaille en séance, sur un exemple de sa classe.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formule choisir pour une école, un groupe scolaire ou un centre de formation du Mali ?',
            'legende' => 'Tout se fait en visioconférence depuis Cotonou. Dans la base IANA, Africa/Bamako renvoie à Africa/Abidjan (GMT, UTC+0) et Africa/Porto-Novo à Africa/Lagos (UTC+1) : Bamako est à UTC+0, Cotonou à UTC+1, soit une heure d’écart. Durées et effectifs sont ceux de la fiche IA en entreprise.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Situation type'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction qui veut voir l’outil sur une leçon et un message aux parents avant d’y engager ses enseignants'],
                ['Formation complète', '2 jours, en 4 demi-journées', '10 personnes au plus, par discipline ou par fonction', 'Un lycée ou un groupe scolaire qui souhaite harmoniser préparation, évaluations et gestion, du bureau des maîtres à l’économat'],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Enseignants dispersés entre Bamako, Ségou, Sikasso ou Kayes, dont les emplois du temps ne se recoupent pas'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Garder l’habitude acquise et traiter une nouvelle tâche à chaque rendez-vous'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À quoi ressemble une séance avec un enseignant ou une direction du Mali ?',
            'intro' => 'Quatre cas bâtis sur des dossiers fictifs. Dans chacun, le participant dit ce qu’il contrôle avant d’exploiter la réponse. Aucun nom ni numéro de place réel n’apparaît.',
            'items' => [
                ['titre' => 'Une révision du DEF dans un second cycle de Ségou', 'texte' => 'Situation : un professeur de mathématiques de 9e année veut renouveler ses exercices sur les fractions et la proportionnalité. Consigne : préciser le niveau, la notion, le nombre d’exercices et un décor de marché local, puis demander le corrigé détaillé. Contrôle : corrigés refaits à la main, prix vraisemblables, un exercice par série repris à l’oral avec la classe.'],
                ['titre' => 'Une composition de fin de trimestre dans un lycée de Bamako', 'texte' => 'Situation : une professeure d’histoire-géographie prépare le sujet du premier trimestre, qui s’achève le 23 décembre 2026. Consigne : demander deux versions d’un même sujet avec barème en points, sur un chapitre précis. Contrôle : faits et dates comparés au manuel, sujet définitif conservé hors de l’outil, jamais collé dans un groupe de messagerie.'],
                ['titre' => 'Un devoir de français repensé, dans un collège de Sikasso', 'texte' => 'Situation : une rédaction faite à la maison revient en copies presque identiques. Consigne : soumettre le sujet à l’assistant pendant la séance, observer le résultat, puis refondre le devoir à partir d’un texte lu en classe, suivi d’une brève explication orale. Contrôle : les élèves connaissent la règle avant d’écrire, et un détecteur ne vaut jamais preuve.'],
                ['titre' => 'Les frais et les reçus d’une école privée de Kati', 'texte' => 'Situation : une économe suit les paiements par tranches sur un cahier et reçoit des captures d’écran de virements. Consigne : bâtir, pour une école imaginaire, un tableau par famille et un modèle de relance individuelle. Contrôle : chaque montant relu, aucun nom d’élève dans un envoi collectif, remises décidées par la direction.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment budgéter la formation d’une équipe éducative au Mali, et quel appui interroger ?',
            'paragraphes' => [
                'Le statut de l’école décide. Un établissement public suit les règles de dépense de sa tutelle : une formation venue de l’extérieur remonte la voie hiérarchique avec programme et devis, et rien ne s’engage avant l’accord écrit de l’autorité compétente.',
                'Une école privée ou communautaire arrête son propre budget. Quand les marges sont étroites, mieux vaut commencer par un atelier découverte, puis étaler la suite sur l’exercice : l’année s’étend du 1er octobre 2026 au 30 juin 2027, et les grandes vacances du 1er juillet au 30 septembre 2027 laissent un temps de préparation avant la rentrée suivante.',
                'Le Fonds d’appui à la formation professionnelle et à l’apprentissage (FAFPA) est l’organisme public à interroger, mais il est en réforme. Selon l’Organisation internationale du Travail (28 juillet 2026), la taxe de formation, qui couvrait 83 % des activités de formation sur la période étudiée, a été remplacée par une subvention de l’État, et le budget du fonds est passé de 9,5 milliards de FCFA en 2015 à 2,8 milliards en 2022. Un atelier a réuni les parties à Bamako les 30 juin et 1er juillet 2026. Aucune prise en charge n’est promise ici : écrivez au fonds, programme et devis joints, pour savoir si des lignes sont ouvertes à une école et si un prestataire doit être habilité.',
                'Le programme, les feuilles de présence et l’attestation nominative de fin de formation sont remis dans tous les cas.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation d’une équipe éducative malienne, et qu’est-ce qui fait varier le devis ?',
            'intro'      => 'Aucun tarif n’est affiché : après un ou deux entretiens de cadrage, le devis, libellé en FCFA, détaille chaque poste. Les abonnements aux assistants restent à la charge de l’établissement ; leurs formules évoluent et la page de l’éditeur fait foi.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée à distance', 'Deux travaux de votre école traités en pratique', 'Conseil sur la suite']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Exercices construits sur vos pièces anonymisées', 'Épreuve finale chronométrée sur la tâche visée', 'Supports remis et attestation nominative', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Reprises et tâches nouvelles']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'La durée de la formule retenue.',
                'Les outils abordés : assistant, tableur, traitement de texte, messagerie.',
                'Le nombre d’entretiens de cadrage avec la direction.',
                'Le suivi qui prolonge la session.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs guettent une école malienne qui commence avec l’IA ?',
            'intro' => 'Elles viennent moins de la négligence que de la charge : classes nombreuses, copies à rendre, compositions à préparer, outil adopté parce qu’il était gratuit ce jour-là.',
            'items' => [
                ['titre' => 'Se fier à un détecteur', 'texte' => 'Le pourcentage d’un site ne démontre aucune fraude. En cas de doute, la procédure écrite de l’école prévoit un entretien avec l’élève, la lecture de ses brouillons et des questions sur son devoir.'],
                ['titre' => 'Déposer un sujet à venir dans un assistant', 'texte' => 'Un sujet de composition ne se rédige ni ne circule dans un compte d’outil ou un groupe de messagerie avant l’épreuve.'],
                ['titre' => 'Coller une liste avec numéros de place', 'texte' => 'Le numéro de place ouvre la consultation de l’orientation sur le portail du ministère. Les listes d’élèves, avec noms, numéros et contacts de parents, restent hors des assistants ; l’exercice se fait sur des données fictives.'],
                ['titre' => 'Imprimer sans relire', 'texte' => 'Une date ou une formule fausse photocopiée à plusieurs dizaines d’exemplaires oblige à reprendre la séance : le corrigé se refait avant d’imprimer.'],
                ['titre' => 'Croire que l’outil connaît le programme malien', 'texte' => 'L’assistant ne remplace ni le manuel ni le document officiel de l’année. Chaque contenu se compare à ce que prescrit le ministère.'],
                ['titre' => 'Laisser un élève répéter ce que dit l’outil', 'texte' => 'Une plateforme de soutien ou un assistant donne une réponse, pas la compréhension. Une question orale de deux minutes en classe suffit à le vérifier.'],
                ['titre' => 'Publier la liste des familles en retard', 'texte' => 'Une liste de retardataires diffusée dans un groupe humilie des enfants. Les relances restent individuelles et confidentielles.'],
                ['titre' => 'Compter sur un financement sans écrire', 'texte' => 'Le FAFPA est en réforme : sans réponse écrite, la formation se budgète sans prise en charge.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former les équipes éducatives maliennes avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Mali, parmi les pays où il a exercé. Installé à Cotonou, une heure en avance sur Bamako, il peut conduire cette formation à distance, en français. Il a étudié à ' . fait('formation')['nom'] . ' en ' . fait('formation')['annee'] . ', propose l’assistant WhatsApp à IA <a href="https://wapy.pro">Wapy</a> et co-fonde <a href="https://audyxa.com">Audyxa</a>.',
                'Ses engagements : répondre sous ' . fait('delai_reponse') . ', mener un ou deux entretiens de cadrage, envoyer un questionnaire avant la session, mettre des documents à télécharger à l’avance, remettre des supports et une attestation nominative. Il n’enseigne pas et n’exerce pas ce métier. Voir aussi ses <a href="/realisations/">réalisations</a>, la page <a href="/richard-salanon">Richard SALANON</a>, la fiche <a href="/formations/ia-en-entreprise">IA en entreprise</a> pour la formule de base et les <a href="/zones/">zones d’intervention</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe éducative malienne à l’IA ?',
            'texte'  => 'Indiquez le niveau d’enseignement, le statut de l’école, le nombre de participants et ce qui vous prend le plus de temps : réponse sous 24 heures, puis proposition et devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],
    'faq' => [
        ['q' => 'Qui peut former les enseignants maliens à l’IA en plus des dispositifs publics ?', 'r' => 'Richard SALANON forme à distance, en français, maîtres, directeurs et formateurs sur leurs propres documents. Il n’enseigne pas et vient en complément des instituts de formation des maîtres et du CIAR-Mali.'],
        ['q' => 'Un programme public prépare-t-il tous les maîtres du Mali à l’IA ?', 'r' => 'Les initiatives récentes concernent l’équipement de huit instituts de formation des maîtres en juillet 2026 et le CIAR-Mali pour les étudiants. Elles ne s’adressent pas aux enseignants déjà en poste, que cette formation vise.'],
        ['q' => 'Quelles dates scolaires retenir pour placer les séances en 2026-2027 ?', 'r' => 'Selon APA, les classes ont ouvert le 1er octobre 2026 ; le premier trimestre court jusqu’au 23 décembre, avec reprise le 4 janvier 2027, le deuxième jusqu’au 24 mars, avec reprise le 5 avril, et les cours finissent le 30 juin 2027. Chaque académie fixe ses évaluations.'],
        ['q' => 'Peut-on utiliser l’IA pour préparer le DEF ou le baccalauréat au Mali ?', 'r' => 'En révision, avec des exercices et des corrigés relus par l’enseignant. Le jour de l’examen, seul le règlement de l’organisateur compte, et la formation ne propose aucun contournement.'],
        ['q' => 'Le score d’un détecteur d’IA prouve-t-il qu’un élève a triché ?', 'r' => 'Non, il peut seulement ouvrir une discussion. Les séances entraînent à mener l’entretien, lire les brouillons et poser des questions sur le contenu, selon la procédure écrite de l’école.'],
        ['q' => 'Peut-on mettre le nom d’un élève ou son numéro de place dans un assistant ?', 'r' => 'Non, ni dans un service ouvert à tous. La loi n° 2013-015 du 21 mai 2013 est contrôlée par l’APDP ; les exercices emploient des données fictives, et pour les formalités de votre école, rapprochez-vous de l’autorité ou de votre conseil.'],
        ['q' => 'Une coupure d’électricité à Bamako ou en région interrompt-elle la formation ?', 'r' => 'Chaque participant télécharge les documents avant la séance, et la solution de repli de la fiche IA en entreprise s’applique. Un téléphone chargé suffit pour rédiger une consigne, pas pour manier un tableur de notes.'],
        ['q' => 'Un directeur d’école communautaire ou publique peut-il s’inscrire comme un promoteur privé ?', 'r' => 'Oui, la formule est la même. Seul change le circuit de décision : accord écrit de la tutelle pour le public, décision du promoteur ou du comité de gestion ailleurs.'],
        ['q' => 'À quelle heure se tient une séance du matin pour un enseignant de Bamako ?', 'r' => 'Bamako est à UTC+0 et Cotonou à UTC+1 d’après les liens de zones de la base IANA, soit une heure d’écart : une séance fixée à 8 h à Bamako débute à 9 h pour le formateur.'],
        ['q' => 'Quel budget prévoir pour une équipe de lycée, et un appui public est-il acquis ?', 'r' => 'Le chiffrage se fait sur devis, en FCFA, après le cadrage. Rien n’est garanti côté financement : le FAFPA, en réforme selon l’OIT, se sollicite par écrit avant tout engagement.'],
    ],

    'sources' => [
        ['titre' => 'APA, Mali : la rentrée scolaire débute ce jeudi 1er octobre (1er octobre 2026)', 'url' => 'https://fr.apanews.net/education/mali-la-rentree-scolaire-debute-ce-jeudi-1er-octobre/', 'date' => '2026-10-27'],
        ['titre' => 'Digital Business Africa, Mali : l’UNESCO équipe huit instituts de formation des maîtres (5 août 2026)', 'url' => 'https://www.digitalbusiness.africa/mali-lunesco-equipe-huit-instituts-de-formation-des-maitres-pour-accelerer-la-pedagogie-numerique/', 'date' => '2026-10-27'],
        ['titre' => 'Osiris, Mali : deux accords pour accélérer la connectivité des écoles et la formation (24 juillet 2026)', 'url' => 'https://osiris.sn/mali-deux-accords-pour-accelerer-la-connectivite-des-ecoles-et-la-formation.html', 'date' => '2026-10-27'],
        ['titre' => 'Digital Business Africa, Mali : la plateforme de soutien scolaire EDUMALI officiellement lancée (9 mars 2026)', 'url' => 'https://www.digitalbusiness.africa/mali-la-plateforme-de-soutien-scolaire-edumali-officiellement-lancee-visitez/', 'date' => '2026-10-27'],
        ['titre' => 'Osiris (APA), un centre public d’intelligence artificielle inauguré près de Bamako (21 septembre 2026)', 'url' => 'https://osiris.sn/mali-un-centre-public-d-intelligence-artificielle-inaugure-pres-de-bamako.html', 'date' => '2026-10-27'],
        ['titre' => 'Afrikinfos-Mali, le taux de réussite national du DEF 2026 atteint 65,40 % (19 juin 2026)', 'url' => 'https://afrikinfos-mali.com/2026/06/19/mali-le-taux-de-reussite-national-du-def-2026-atteint-6540/', 'date' => '2026-10-27'],
        ['titre' => 'Bamacours, orientation du DEF au Mali et portail porteduc', 'url' => 'https://bamacours.com/orientation-du-def-mali/', 'date' => '2026-10-27'],
        ['titre' => 'DataReportal, Digital 2026 : Mali', 'url' => 'https://datareportal.com/reports/digital-2026-mali', 'date' => '2026-10-27'],
        ['titre' => 'Osiris, le marché du mobile et des services financiers numériques au Mali (19 mai 2024)', 'url' => 'https://osiris.sn/mali-le-marche-du-mobile-et-les-services-financiers-numeriques-au-beau-fixe.html', 'date' => '2026-10-27'],
        ['titre' => 'TheGlobalEconomy, Mali : accès à l’électricité (données de la Banque mondiale)', 'url' => 'https://www.theglobaleconomy.com/Mali/Access_to_electricity/', 'date' => '2026-10-27'],
        ['titre' => 'Data Protection Africa, fiche du Mali : loi n° 2013-015 et APDP', 'url' => 'https://dataprotection.africa/?p=1335', 'date' => '2026-10-27'],
        ['titre' => 'Constitution du Mali de 2023, article 31 sur les langues', 'url' => 'https://axl.cefan.ulaval.ca/afrique/mali-const-2023.htm', 'date' => '2026-10-27'],
        ['titre' => 'OIT, réforme du Fonds d’appui à la formation professionnelle et à l’apprentissage du Mali (28 juillet 2026)', 'url' => 'https://www.ilo.org/resource/news/ilo-helps-advance-reform-malis-vocational-training-fund', 'date' => '2026-10-27'],
        ['titre' => 'IANA, base des fuseaux horaires : liens de zones (Africa/Bamako, Africa/Porto-Novo)', 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-en-entreprise', 'contenu-avec-ia', 'outils-collaboratifs', 'microsoft-365-google-workspace', 'ia-ethique-conformite'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
