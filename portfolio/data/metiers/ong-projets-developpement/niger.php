<?php
// ============================================================
// data/metiers/ong-projets-developpement/niger.php · Page métier + pays :
// ONG et projets de développement au Niger. Statut de la ligne du métier : F ;
// la tâche impose la formule « Richard peut former ». Déjà travaillé au Niger : oui
// (liste pays_travailles de faits.php).
// Faits externes lus le 27/10/2026 : page du plan 2026 sur humanitarianaction.info
// (aperçu chiffré du jour et article du 8 décembre 2025), bulletin du PAM de mars 2026 sur
// ReliefWeb, ARCEP Niger (observatoire du troisième trimestre 2025), DataReportal (Digital
// 2026), liste BCEAO du 28/02/2026, DLA Piper, ICNL (titre et date du décret de 1992), Le360
// (programme Haské, 14/09/2022), Wikipédia (langues), KoboToolbox, IANA.
// Non établi et donc retiré : conditions d'accès des ONG à un fonds de formation (FAFPA
// compris), articles des textes (titre et date seulement), décompte des ONG, texte actuel sur
// les associations, tout propos sur la sécurité ou la politique. Aucun projet client du Niger
// dans projets-clients.php (vérifié). Aucune pratique de Richard hors faits.php et fiche
// ia-en-entreprise. Aucune somme pour une formation. Aucune certification d'éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Une formation IA pour les ONG et projets nigériens : coordinateurs, chargés de suivi-évaluation et gestionnaires de Niamey, Maradi ou Zinder transforment leurs pièces en notes, tableaux et questionnaires avec ChatGPT, Claude, Gemini ou Copilot, puis contrôlent chaque nombre avant de l'envoyer",
    'title'   => "Formation IA pour ONG et projets au Niger | Richard SALANON",
    'meta'    => "Formation IA pour ONG et projets de développement au Niger : plan 2026, notes aux bailleurs, collecte hors ligne, protection des données. Devis en FCFA.",
    'en_bref' => "Richard SALANON, consultant en digitalisation installé à Cotonou, peut former en visioconférence les équipes d'ONG et de projets nigériens, de Niamey à Agadez, à employer ChatGPT, Claude, Gemini ou Copilot sur leurs rapports, tableaux de suivi et questionnaires. Niamey et Cotonou ont la même heure légale : aucun décalage ne complique les séances. Les exercices partent de vos pièces, personnes non identifiables. Le devis, sur demande, est libellé en FCFA.",
    'publie'  => '2027-01-02',
    'maj'     => '2027-01-02',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut apprendre l'IA à une équipe d'ONG installée à Niamey, à Maradi ou à Zinder, et sur quels critères le départager ?",
            'paragraphes' => [
                "Richard SALANON, consultant en digitalisation établi à Cotonou, peut former à distance le personnel d'organisations non gouvernementales et de projets nigériens, qu'il travaille au siège à Niamey ou dans une antenne régionale. Les séances se tiennent en visioconférence, en français, à la même heure qu'à Cotonou, et le devis se rédige en FCFA, la monnaie commune des deux pays.",
                "Dans une structure nigérienne, le bureau du coordinateur voit passer des pièces de natures très différentes : une fiche de plan de réponse avec ses clusters, une convention de financement, un cadre de résultats, des fichiers de collecte alimentés par des enquêteurs, des courriers à une direction régionale. Un formateur utile commence par ce tas de papiers. Un formateur qui montre seulement ce que « sait faire » un robot de conversation laisse les participants seuls devant la première vraie tâche.",
                "Trois questions aident à comparer les propositions. Les exercices partent-ils de pièces que vos agents ont d'abord dépouillées de toute identité ? Le formateur dit-il, avant toute démonstration, quelles données de bénéficiaires ne quittent jamais l'organisation ? Les supports remis sont-ils des fichiers que vous pouvez modifier ? Sans ces trois réponses, la proposition vend un outil, pas une pratique de travail.",
                "Le rôle de Richard s'arrête à l'enseignement des assistants d'IA. Évaluer un programme, guider l'enregistrement d'une organisation, dire le droit, juger la stratégie ou l'action de terrain ne lui revient pas.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi le plan de réponse 2026 du Niger affiche-t-il 449, 674 puis 675,6 millions de dollars, et que retenir pour rédiger ?",
            'paragraphes' => [
                "Le même plan existe en plusieurs états, et c'est la première difficulté pour une équipe qui rédige. L'article de présentation daté du 8 décembre 2025 sur humanitarianaction.info indique 2,6 millions de personnes dans le besoin dans 32 des 63 départements du pays, dont 1,6 million ciblées, pour 449 millions de dollars, soit 25 % de moins que le budget de 2025. Il précise que ces départements se répartissent entre cinq régions : Diffa, Dosso, Maradi, Tahoua et Tillabéri.",
                "La page du plan lui-même, publiée le 27 février 2026 et lue le 27 octobre 2026, donne d'autres nombres : 3,1 millions de personnes dans le besoin, 2 millions ciblées, 0,9 million atteintes (46,3 %), 675,6 millions de dollars requis, dont 134,8 millions reçus, soit 20 %. Elle ajoute une version « hyper-priorisée » de 415 000 personnes pour 96,5 millions de dollars. Entre les deux, un bulletin du PAM de mars 2026 sur ReliefWeb parle de 674 millions de dollars pour 3,1 millions de personnes dans le besoin.",
                "Aucun de ces nombres n'est faux : ils portent des dates et des périmètres différents. La page ajoute un historique utile à une note de contexte. Le plan 2025 y figure avec 2,6 millions de personnes dans le besoin, 2,1 millions ciblées, 603 millions de dollars et 28 % de financement ; celui de 2024 avec 4,5 millions, 3 millions, 662,2 millions et 55,1 %. Un lecteur qui compare des plans de nature différente, ou des dates différentes, tire de mauvaises conclusions.",
                "Pour qui rédige à Niamey, la règle est simple : un nombre ne s'écrit jamais sans trois mentions, celui qui le publie, le jour de lecture et ce qu'il mesure. Un assistant peut mettre ces trois colonnes en forme ; il ne sait pas laquelle des lignes est la plus récente. Cette page ne commente aucun chiffre : elle montre comment les manipuler sans les mélanger.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où se joue l'écart entre besoins et ressources, grappe par grappe, et comment le dire sans se tromper de ligne ?",
            'paragraphes' => [
                "La même page ventile les besoins par cluster, avec ses propres dates de lecture. Le 27 octobre 2026, la sécurité alimentaire demande 258,3 millions de dollars et en a reçu 36,8 millions (14,3 %). La protection demande 67,9 millions pour 20 millions reçus (29,5 %), l'éducation 61,3 millions pour 8,2 millions (13,4 %), la nutrition 48,9 millions pour 4,5 millions (9,3 %), la réponse aux réfugiés 120,4 millions pour 17,2 millions (14,3 %). Le poste « transfert d'espèces à usages multiples » demande 1,3 million, avec 14 000 dollars reçus.",
                "Ces lignes servent à écrire une note de plaidoyer honnête : la structure cite son cluster, la date, le montant requis et le montant reçu. Elle ne les additionne pas à la main et ne les compare pas à un autre plan sans le dire. Le bulletin du PAM ajoute une donnée qui n'est pas un financement : le Cadre Harmonisé de décembre 2025 projette 2,4 millions de personnes en insécurité alimentaire sévère en 2026, un indicateur d'une autre nature que le nombre de personnes dans le besoin du plan.",
                "Un autre chiffre sert aux équipes de coordination. Selon l'article de décembre 2025, 77 organisations humanitaires étaient opérationnelles en juin 2025 d'après la matrice « qui fait quoi où », soit 31 % de moins qu'en 2024. Le même texte indique que OCHA Niger comptait s'appuyer sur le Fonds humanitaire régional FHRAOC pour financer directement des ONG nationales et locales, dans une logique de localisation. Aucun critère d'accès n'est lu ici : ils se vérifient auprès de l'émetteur de chaque appel.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels documents juridiques faire lire à un conseil avant qu'une équipe nigérienne ne se serve d'un assistant ?",
            'paragraphes' => [
                "Trois repères reviennent. Le premier est le cadre des associations et des ONG : l'ordonnance n° 84-06 du 1er mars 1984 portant régime des associations, et le décret n° 92-292/PM/MF/P du 25 septembre 1992 portant statut des organisations non gouvernementales, dont l'en-tête de la fiche de l'ICNL précise qu'il fixe des règles d'application d'un article de l'ordonnance. Seuls les intitulés et les dates sont donnés ici, aucun article n'est commenté : le texte qui s'applique aujourd'hui à votre structure se demande à l'administration et à un juriste.",
                "Le deuxième est la protection des données : la loi n° 2022-59 du 16 décembre 2022 relative à la protection des données à caractère personnel, modifiée par la loi n° 2023-31 du 4 juillet 2023, et la Haute Autorité de Protection des Données à caractère Personnel, la HAPDP. Un résumé de DLA Piper, modifié le 6 janvier 2025, mentionne des formalités préalables auprès de la HAPDP et, pour certains traitements, comme les données médicales ou la recherche scientifique, une autorisation. Lisez ce résumé comme une orientation, non comme un avis : la procédure qui vous concerne se confirme auprès de l'autorité.",
                "Le troisième est la convention qui lie votre projet à son financeur : c'est elle qui fixe qui peut recevoir quelles données, dans quels outils, et ce qui exige un accord écrit. Un assistant d'IA n'est pas un sous-traitant que l'on a choisi après analyse ; il suffit parfois qu'un agent y colle un tableau pour changer la nature d'un traitement.",
                "La règle d'atelier est donc la même partout, et elle s'écrit sur une page. Première pile : ce qui se saisit tel quel, comme les textes publics. Deuxième pile : les extraits dont les identités ont été retirées. Troisième pile : ce qui ne sort pas, comme les listes nominatives, les numéros de téléphone, les photos et les dossiers de santé. La direction valide ce classement, puis le révise si un partenaire l'exige.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Parmi les travaux courants d'une ONG nigérienne, lesquels un assistant peut-il préparer, avec quel outil, et sous quel contrôle ?",
            'legende' => "Les exercices s'appuient sur des pièces transmises avant la séance, dont les personnes ont été effacées. L'outil est celui que votre structure utilise déjà. La colonne de droite décrit la vérification que le participant fait seul avant tout usage du texte.",
            'entetes' => ["Travail à confier", "Outil", "Résultat attendu", "Point de contrôle humain"],
            'lignes'  => [
                ["Tableau « émetteur, date, ce qu'il mesure » pour les trois lectures du plan 2026 (449 millions en décembre 2025, 674 millions chez le PAM en mars 2026, 675,6 millions le 27 octobre 2026)", "Claude ou ChatGPT", "Une page qui range chaque nombre avec sa date et son périmètre", "Chaque montant est pointé dans sa source ; l'outil n'additionne ni ne compare rien"],
                ["Paragraphe de plaidoyer sur un cluster, par exemple la nutrition (48,9 millions requis, 4,5 millions reçus au 27 octobre 2026)", "ChatGPT ou Gemini", "Trois phrases, avec le cluster, la date et les deux montants", "Les montants sont relus sur la page du plan le jour de l'envoi ; la date figure dans la phrase"],
                ["Fiche de suivi par département pour un comité de pilotage régional", "Copilot ou Gemini", "Une page par département : activités, réalisations, écarts et suite à donner", "Chaque valeur provient du fichier de suivi et se compare aux cibles prévues dans le cadre de résultats"],
                ["Questionnaire de ménages à raccourcir avant son chargement dans KoboCollect", "ChatGPT", "Chaque question porte sur un seul point et ne glisse aucune réponse", "Lecture à voix haute par les enquêteurs dans la langue de l'enquête ; une question sans indicateur disparaît"],
                ["Première description d'un traitement de données, destinée au conseil juridique ou à la HAPDP", "Claude", "Quatre rubriques : but poursuivi, catégories de données, accès, durée de garde", "Un juriste valide chaque rubrique ; l'outil ne formule ni devoir ni démarche"],
                ["Compte rendu d'une réunion de coordination entre organisations d'un même département", "Copilot ou Gemini", "Liste à trois colonnes : décision, personne chargée, échéance", "On retrouve chaque décision dans les notes ; une échéance non annoncée reste vide"],
                ["Résumé de deux pages d'un appel à propositions, avec la liste des pièces demandées", "Claude", "Objet, dates, pièces, questions à poser à l'émetteur", "Dates et critères sont repris du texte de l'appel ; ce qui n'y figure pas est retiré"],
                ["Classement par thèmes des propos de groupes de discussion, une fois les identités retirées", "Claude ou ChatGPT", "Une demi-douzaine de thèmes, deux citations chacun", "Un agent de suivi-évaluation relit une part des propos au hasard ; toute citation absente des notes est ôtée"],
                ["Texte pour les relais de village sur un changement de jours de distribution", "ChatGPT ou Gemini", "Court, simple, facile à traduire", "Jours et sites sont copiés du planning ; une personne parlant la langue visée relit avant l'envoi"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que changent le réseau, l'électricité et les langues pour une formation à distance auprès d'équipes nigériennes ?",
            'paragraphes' => [
                "DataReportal (Digital 2026, données de fin 2025) compte 28,1 millions d'habitants au Niger, dont 17,5 % en ville, 6,52 millions d'internautes (23,2 %) et 17,4 millions de connexions mobiles cellulaires (61,7 %). Le rapport avertit qu'un même abonné peut cumuler des connexions et que certaines n'écoutent que la voix ou les SMS. L'ARCEP, de son côté, a recensé 17 737 818 lignes mobiles à la fin de septembre 2025 et 8 488 371 abonnés à l'internet mobile, contre 57 936 abonnés à l'internet fixe. Ce sont des mesures différentes, qui ne s'additionnent pas.",
                "Le téléphone reste donc le premier terminal des équipes. Sur le parc internet mobile, l'observatoire attribue 58 % à Celtel (Airtel), 26 % à Moov Africa, 13 % à Zamani Com et 3 % à Niger Telecoms. Une séance de formation, elle, demande un ordinateur et une liaison stable chez chaque participant. Les pièces arrivent avant la séance, chacun écrit ses demandes dans un éditeur de texte avant de les coller d'un bloc, et la solution de repli que prévoit la fiche de formation lors d'une coupure est présentée au début.",
                "L'électricité compte autant que le réseau, mais le chiffre le plus récent lu ici est ancien. Lors du lancement du programme Haské avec la Banque mondiale, rapporté par Le360 le 14 septembre 2022, le taux d'accès national était de 17,5 %, avec des objectifs de 30 % en 2026 et de 80 % en 2035. Cette valeur n'est pas celle d'aujourd'hui : elle explique seulement pourquoi une antenne régionale prévoit batterie et horaires de recharge avant une séance.",
                "Pour la collecte, la documentation de KoboToolbox indique qu'une fois les formulaires téléchargés, KoboCollect fonctionne sans connexion, que les mises à jour demandent un accès en ligne et que les formulaires terminés sont souvent envoyés en lot quand le réseau revient. L'assistant se place en amont, pour raccourcir le questionnaire, et en aval, sur des réponses déjà dépersonnalisées. L'apprentissage de KoboToolbox lui-même ne fait pas partie des séances de Richard.",
                "Les langues comptent aussi. D'après l'article de Wikipédia consacré aux langues du pays, le haoussa est la langue nationale et le français une langue de travail ; l'article cite aussi le zarma, le tamajaq, le peul et le kanouri. Richard anime en français. Un message pour les villages rédigé dans l'une de ces langues est toujours relu par une personne qui la parle : l'assistant aligne des phrases élégantes qui peuvent dévier du sens voulu.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels services d'argent mobile un projet de transferts rencontre-t-il, et que doit protéger une séance de formation ?",
            'paragraphes' => [
                "La liste des établissements de monnaie électronique publiée par la BCEAO, arrêtée au 28 février 2026, recense au Niger un établissement, Airtel Money, émis par Airtel Niger, et huit partenariats entre une banque et un opérateur ou un prestataire technique : Orange Money, Moov Flooz, Wave (deux fois), Coris Money, MyNITA, Amanata et Al Izza Business Pay. Un projet qui verse de l'argent à des ménages travaille donc, selon la zone, avec l'un ou l'autre de ces services.",
                "La formation ne montre ni paiement ni compte marchand. Elle protège ce qui entoure ces versements : le registre des ménages, les numéros de téléphone liés à chaque compte, les noms des villages, les dates de passage. Un fichier de transferts est un fichier de personnes. Il se range dans la troisième pile et ne se colle pas dans un assistant en ligne ; seuls des extraits codés, sans nom ni numéro, y entrent.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format pour une équipe nigérienne, et que faire de l'absence de décalage avec Cotonou ?",
            'legende' => "Les durées et les effectifs viennent de la fiche de formation. Richard anime les séances en visioconférence depuis Cotonou ; la répartition des autres formats se règle lors du cadrage. Dans la base des fuseaux horaires de l'IANA, Africa/Niamey et Africa/Porto-Novo sont toutes deux liées à Africa/Lagos, soit UTC+1. L'écart est nul : 9 h à Niamey correspond à 9 h à Cotonou.",
            'entetes' => ["Format", "Durée", "Groupe", "Quand le choisir"],
            'lignes'  => [
                ["Atelier découverte", "Une demi-journée", "12 personnes au plus", "Une direction qui souhaite voir l'assistant à l'œuvre sur ses propres pièces avant de dépenser"],
                ["Formation complète", "Deux jours, soit 4 demi-journées de 3 h 30", "10 personnes au plus, par fonction", "Un pôle de suivi-évaluation, de finances ou de plaidoyer dont les agents écrivent tous les mois"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Un personnel dispersé entre Niamey, Agadez, Diffa ou Zinder, ou dépendant d'un siège situé à l'étranger"],
                ["Accompagnement mensuel", "Trois mois, une demi-journée par mois", "Les personnes déjà formées", "Ajouter des tâches et redresser les réflexes pris après la session"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles séances de travail une équipe nigérienne pourrait-elle suivre ?",
            'intro' => "Quatre histoires imaginaires, sans aucune donnée réelle : trois lectures d'un plan à ordonner, une enquête à essayer en deux langues, un registre de ménages à présenter à un juriste, un appel de fonds à résumer. Chaque fois, la personne vérifie le résultat avant de s'en servir.",
            'items' => [
                ['titre' => "Trois lectures d'un même plan à ranger", 'texte' => "Situation : un chargé de plaidoyer fictif, à Niamey, prépare un courrier à un partenaire et trouve 449 millions de dollars dans un article, 674 dans un bulletin et 675,6 sur la page du plan. Consigne : fournir les trois extraits datés et réclamer une grille « émetteur, date, objet mesuré », sans les rapprocher. Vérifications du participant : il rouvre chaque page, supprime toute phrase qui présente les trois montants comme simultanés et écrit la date de lecture dans le courrier."],
                ['titre' => "Un questionnaire à tester en haoussa et en zarma", 'texte' => "Situation : une ONG fictive de Maradi prépare une enquête de ménages et son questionnaire de cinquante questions mêle des sigles de trois projets. Consigne : détecter les doublons et les formulations orientées, puis suggérer des questions plus brèves. Vérifications du participant : chaque question garde un indicateur, deux enquêteurs lisent la version courte à voix haute dans la langue de l'enquête, et un locuteur relit la traduction avant le passage sur tablette."],
                ['titre' => "Un registre de ménages à décrire pour le juriste", 'texte' => "Situation : un gestionnaire de données fictif, à Tahoua, lance un registre de ménages bénéficiaires d'un transfert et ne sait pas par où commencer. Consigne : exposer simplement le but du registre, les types de données, les personnes habilitées et la durée de garde, puis dresser la liste des trous. Vérifications : rien de nominatif n'est parti vers l'outil, aucune obligation légale n'est affirmée, et la fiche est soumise à un juriste ou à la HAPDP avant le démarrage."],
                ['titre' => "Un appel à propositions à résumer", 'texte' => "Situation : l'association fictive d'un chef-lieu du département de Dosso reçoit un appel de fonds de dix pages et son équipe n'a que deux jours. Consigne donnée : résumer l'objet, les dates, les pièces exigées et les questions à poser à l'émetteur. Vérifications de la participante : chaque date et chaque critère est repris du texte de l'appel, ce qui n'y figure pas est retiré, et les questions sont envoyées à l'émetteur avant le dépôt."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Sur quelle ligne budgétaire loger une formation à l'IA quand on gère un projet ou une organisation au Niger ?",
            'paragraphes' => [
                "Commencez par relire votre accord avec le financeur : un poste d'appui aux capacités, de formation ou de frais courants peut déjà accueillir la dépense. À défaut, un avenant budgétaire est parfois à obtenir avant de signer. Le financeur tranche seul ; rien ici n'annonce une prise en charge. Joignez à la demande le programme et un devis en FCFA.",
                "Aucun fonds public de formation n'est annoncé ici comme ouvert aux ONG ou à un prestataire basé à l'étranger : ces conditions ne sont pas établies. Interrogez l'organisme avant de bâtir un plan de financement sur lui. Le fonds régional cité par OCHA soutient des organisations nationales et locales dans leurs actions ; rien n'indique qu'il règle une formation.",
                "Aucun agrément de fonds ni diplôme d'éditeur n'est revendiqué par Richard. Chaque stagiaire repart avec une attestation à son nom, jointe au programme, aux supports et aux feuilles de présence ; au financeur de dire s'il les admet comme justificatif. Sans bailleur, la dépense peut passer en frais de fonctionnement, répartie entre un format bref et un suivi mensuel.",
                "Autre précaution : isoler la formation du coût des abonnements. Ceux-ci sont pris au nom de la structure, sur un compte confié à un responsable, et non sur la carte bancaire d'un agent.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Quel budget réserver à la formation d'une équipe d'ONG au Niger, et de quoi dépend le devis ?",
            'intro' => "Aucune grille n'est publiée : le montant ressort d'un devis en FCFA, détaillé par poste une fois le cadrage terminé. Vous gardez à votre charge les licences des assistants. La fiche de l'entreprise liste Mobile Money, carte bancaire, PayPal, virement et espèces ; ceux qui fonctionnent depuis le Niger se précisent avec le devis.",
            'items' => [
                ['offre' => "Atelier découverte", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée autour de pièces de votre organisation, sans personne identifiable", "Deux tâches prises en main", "Premières règles sur les fichiers de bénéficiaires", "Recommandation sur la suite"]],
                ['offre' => "Formation complète", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Quatre demi-journées de 3 h 30, un groupe par fonction", "Cas tirés de vos notes et de vos tableaux de suivi", "Épreuve finale chronomètre en main, attestation nominative", "Canal direct le mois suivant"]],
                ['offre' => "Accompagnement mensuel", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Trois mois, à raison d'une demi-journée mensuelle", "Bilan de ce qui sert vraiment", "Correctifs et tâches supplémentaires"]],
            ],
            'variations' => [
                "L'effectif et son découpage par métier : programme, suivi-évaluation, finances ou plaidoyer.",
                "Le nombre de séances à distance, leur durée et les sites à connecter.",
                "Le temps nécessaire pour rassembler les pièces et en effacer les identités avant d'ouvrir la session.",
                "Le poids donné aux courriers aux partenaires, aux appels à propositions ou à l'enquête de terrain.",
                "La décision de poursuivre avec un accompagnement mensuel.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels faux pas attendent une ONG du Niger à ses premiers essais avec l'IA ?",
            'intro' => "Les débuts butent presque toujours sur les mêmes points : un montant sans sa date, un registre de ménages envoyé trop vite, une citation retouchée, une traduction non relue, des comptes dispersés. Des règles écrites avant le premier essai en évitent la plupart.",
            'items' => [
                ['titre' => "Choisir une lecture du plan au hasard", 'texte' => "Entre 449 et 675,6 millions de dollars, le même plan a changé de base. Le montant se prend dans la page de l'émetteur le jour de l'envoi et se date dans la phrase."],
                ['titre' => "Confondre financement reçu et besoin couvert", 'texte' => "Un taux de 20 % de financement ne dit rien du nombre de personnes aidées, que la page chiffre à part. Chaque indicateur garde son propre intitulé."],
                ['titre' => "Demander à l'assistant ce que la loi exige", 'texte' => "Un assistant énonce parfois un devoir inexistant, ou en omet un réel. C'est un juriste qui lit les textes ; l'outil aide tout au plus à préparer les questions à lui poser."],
                ['titre' => "Verser un registre de ménages dans un compte gratuit", 'texte' => "Un nom, un numéro ou un village ne sert jamais de donnée d'essai. Le classement en trois piles précède l'envoi."],
                ['titre' => "Retoucher la parole d'une personne interrogée", 'texte' => "L'outil peut fabriquer une phrase vraisemblable que nul n'a prononcée. Toute citation sort d'un entretien réel, accordée par la personne, et se reprend telle quelle."],
                ['titre' => "Diffuser une traduction sans locuteur", 'texte' => "Un mot mal choisi dans une annonce de distribution ou une question d'enquête fausse les réponses. Une personne qui parle la langue relit d'abord."],
                ['titre' => "Laisser chaque agent s'abonner à son nom", 'texte' => "La direction perd la trace des usages et des conversations. Un seul compte, ouvert au nom de la structure, clarifie les coûts et conserve les historiques quand un agent s'en va."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce qui justifie de choisir Richard SALANON pour former une équipe d'ONG au Niger ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Le Niger figure parmi les " . count((array) fait('pays_travailles')) . " pays où Richard a travaillé, sur place ou à distance. Auprès des organisations nigériennes qui portent des projets, il peut former à distance aux gestes de l'assistant, sur des pièces de votre quotidien : notes, tableaux de suivi, courriers. Ses projets sont présentés sur la page des <a href='/realisations/'>réalisations</a>.",
                "Richard n'a ni la mission d'évaluer des projets ni celle de piloter une action humanitaire. Repères : " . $ans . " ans dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), un total déclaré de plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées au numérique, à l'IA, à l'automatisation et aux ERP. Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à base d'IA destiné aux entreprises d'Afrique francophone, et fait partie des fondateurs d'<a href='https://audyxa.com'>Audyxa</a>.",
                "Côté méthode, un premier message reçoit une réponse sous 24 heures, puis vient un échange de cadrage, parfois deux ; l'un d'eux peut aboutir à un simple atelier. Un questionnaire précède la session, vos pièces arrivent avant elle et les supports restent modifiables. Richard ne détient aucun diplôme d'éditeur. Pour approfondir : le tronc commun dans <a href='/formations/ia-en-entreprise'>IA en entreprise</a>, le traitement des données dans <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a>, la lecture d'un chiffre dans <a href='/formations/data-literacy'>décider avec les données</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Une note à un partenaire ou un dossier de candidature est-il en préparation ?",
            'texte'  => "Indiquez la taille de l'équipe, les fonctions concernées, la ville, la prochaine échéance et les logiciels en place. Une première réponse arrive sous 24 heures, puis une proposition et un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => "Demander une formation IA pour mon équipe"],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former mon ONG à l'IA à Niamey, à Maradi ou à Zinder ?", 'r' => "Depuis Cotonou, Richard SALANON peut animer en visioconférence une session sur l'IA pour du personnel nigérien d'associations et de projets. Les outils vus : ChatGPT, Claude, Gemini, Copilot, sur vos pièces. Il ne détient aucune certification d'éditeur. Le devis est en FCFA."],
        ['q' => "Pourquoi le plan 2026 du Niger apparaît-il à 449, 674 puis 675,6 millions de dollars ?", 'r' => "Ces nombres viennent de trois lectures : l'article du 8 décembre 2025 de humanitarianaction.info (449 millions), un bulletin du PAM de mars 2026 (674 millions) et la page du plan lue le 27 octobre 2026 (675,6 millions). Écrivez toujours l'émetteur et la date à côté d'un montant."],
        ['q' => "Quelle part du plan humanitaire 2026 du Niger était financée ?", 'r' => "Sur la page du plan lue le 27 octobre 2026, 134,8 millions de dollars étaient reçus pour 675,6 millions requis, soit 20 %. Ce taux évolue : la source à citer est la page de l'émetteur, relue le jour de l'envoi."],
        ['q' => "Un assistant d'IA peut-il me dire si mon projet doit déclarer un traitement à la HAPDP ?", 'r' => "Non. Il peut aider à décrire le traitement (finalité, catégories, durée), mais l'obligation et la procédure se demandent à la HAPDP ou à un juriste. Les textes à lui faire lire sont la loi n° 2022-59 du 16 décembre 2022 et la loi n° 2023-31 du 4 juillet 2023."],
        ['q' => "Peut-on coller un registre de ménages bénéficiaires dans ChatGPT ou Claude ?", 'r' => "Non, pas en l'état. Le fichier est trié colonne par colonne dans les trois piles de la formation ; seuls des extraits codés, sans nom ni numéro, sont ensuite proposés à l'assistant. Un transfert hors du pays se discute par écrit avec le juriste avant le premier essai."],
        ['q' => "KoboCollect fonctionne-t-il sans connexion, et où l'IA intervient-elle ?", 'r' => "La documentation de KoboToolbox indique qu'une fois les formulaires téléchargés, la saisie se fait sans réseau et l'envoi attend une connexion. L'IA entre en jeu avant, pour rédiger et alléger le questionnaire, et après, sur des données déjà anonymisées."],
        ['q' => "Les séances peuvent-elles se tenir en haoussa ou en zarma ?", 'r' => "Elles se déroulent en français, langue de travail d'après l'article de Wikipédia sur les langues du Niger. Tout message pour les communautés rédigé en haoussa, en zarma ou dans une autre langue nationale passe par un locuteur, qui le contrôle avant l'envoi."],
        ['q' => "Que dit-on de l'internet au Niger pour suivre une formation à distance ?", 'r' => "DataReportal (fin 2025) compte 6,52 millions d'internautes, soit 23,2 % des habitants, et l'ARCEP 8 488 371 abonnés à l'internet mobile fin septembre 2025. Il faut un ordinateur et un réseau stable par participant, des documents reçus avant la séance et une solution de repli connue de tous."],
        ['q' => "Quel est le décalage horaire entre Niamey et Cotonou ?", 'r' => "Aucun. Dans la base IANA, Africa/Niamey et Africa/Porto-Novo sont toutes deux liées à Africa/Lagos (UTC+1) : une réunion à 14 h à Niamey débute à 14 h à Cotonou, toute l'année."],
        ['q' => "Un fonds public finance-t-il une formation IA pour une ONG nigérienne ?", 'r' => "Rien ne permet d'affirmer qu'une ONG nigérienne y a accès : les règles d'un fonds public ne sont pas établies ici et aucune prise en charge n'est promise. Interrogez le fonds, ou votre bailleur, par courrier, avec le programme et le devis."],
        ['q' => "Quel est le prix, et en quelle monnaie ?", 'r' => "Aucun montant n'est publié. Le devis, en FCFA et poste par poste, suit l'échange de cadrage et varie selon l'effectif, le format, le travail préalable sur vos pièces et un éventuel suivi. Les abonnements aux assistants sont souscrits par vous."],
        ['q' => "Reçoit-on une attestation à la fin ?", 'r' => "Chaque participant repart avec une attestation à son nom, accompagnée du programme, des supports et des feuilles de présence. Ce document n'a valeur ni de diplôme ni de certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "OCHA, Niger : besoins humanitaires et plan de réponse 2026 (humanitarianaction.info, plan publié le 27 février 2026, chiffres lus le 27 octobre 2026)", 'url' => 'https://humanitarianaction.info/plan/1513', 'date' => '2026-10-27'],
        ['titre' => "OCHA, Niger : article de présentation du plan 2026 (humanitarianaction.info, 8 décembre 2025)", 'url' => 'https://humanitarianaction.info/plan/1513/article/niger-4', 'date' => '2026-10-27'],
        ['titre' => "PAM, bulletin pays Niger, mars 2026 (ReliefWeb)", 'url' => 'https://reliefweb.int/report/niger/wfp-niger-country-brief-march-2026', 'date' => '2026-10-27'],
        ['titre' => "ARCEP Niger, observatoire des communications électroniques, troisième trimestre 2025", 'url' => 'https://arcep.ne/wp-content/uploads/2026/01/Rapport-dObservatoire-des-CE_T3-FIN_09_25.pdf', 'date' => '2026-10-27'],
        ['titre' => "DataReportal, Digital 2026 : Niger", 'url' => 'https://datareportal.com/reports/digital-2026-niger', 'date' => '2026-10-27'],
        ['titre' => "BCEAO, établissements de monnaie électronique (liste au 28 février 2026, entrées du Niger)", 'url' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique', 'date' => '2026-10-27'],
        ['titre' => "DLA Piper, protection des données au Niger (page modifiée le 6 janvier 2025)", 'url' => 'https://www.dlapiperdataprotection.com/index.html?c=NE&t=law', 'date' => '2026-10-27'],
        ['titre' => "ICNL, décret n° 92-292/PM/MF/P du 25 septembre 1992 portant statut des organisations non gouvernementales", 'url' => 'https://www.icnl.org/resources/library/decret-no-92-292-statut-des-organisations-non-gouvernementales-ong', 'date' => '2026-10-27'],
        ['titre' => "Le360, Niger et Banque mondiale : programme Haské pour l'électrification (14 septembre 2022)", 'url' => 'https://afrique.le360.ma/autres-pays/economie/2022/09/14/39299-niger-banque-mondiale-lancement-dun-programme-pour-atteindre-un-taux-delectrification-de-80/', 'date' => '2026-10-27'],
        ['titre' => "KoboToolbox, documentation : collecter des données avec KoboCollect", 'url' => 'https://support.kobotoolbox.org/data_collection_kobocollect.html', 'date' => '2026-10-27'],
        ['titre' => "Wikipédia, les langues au Niger", 'url' => 'https://fr.wikipedia.org/wiki/Langues_au_Niger', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Niamey et Africa/Porto-Novo vers Africa/Lagos)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : zone Africa/Lagos (UTC+1, WAT)", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['data-literacy', 'power-bi-looker-studio', 'ia-en-entreprise', 'outils-collaboratifs', 'ia-ethique-conformite'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
