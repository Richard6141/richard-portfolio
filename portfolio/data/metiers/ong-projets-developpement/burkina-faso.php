<?php
// ============================================================
// data/metiers/ong-projets-developpement/burkina-faso.php · Page métier + pays :
// ONG et projets de développement au Burkina Faso. Statut de la ligne du métier : F ;
// la tâche impose la formule « Richard peut former ». Déjà travaillé au Burkina Faso : oui.
// Faits externes lus le 27/10/2026 : Burkina24 (plan national de réponse humanitaire 2026,
// 17 février 2026), OCHA via AllAfrica (17 février 2026), Wakatsera (loi sur la liberté
// d'association, 17 juillet 2025), ICNL (loi n° 011-2025/ALT), loi n° 001-2021/AN (titre et
// date lus en tête du PDF), Burkina24 (langues, 25 janvier 2024), DataReportal (Digital 2026),
// KoboToolbox (KoboCollect), AllAfrica/Sidwaya (inclusion financière, 22 juillet 2026), IANA.
// Non établi et donc retiré : conditions d'accès des ONG au FAFPA (page illisible), articles
// des lois (titre et date seulement), décompte officiel des ONG, tout propos sur la sécurité
// ou la politique. Aucun projet client du Burkina Faso dans projets-clients.php (vérifié).
// Aucune pratique de Richard hors faits.php et fiche ia-en-entreprise. Aucune somme pour
// une formation. Aucune certification d'éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Apprendre l'IA aux équipes d'ONG et de projets de développement du Burkina Faso : suivi-évaluation, programme et gestion rédigent plans, rapports et notes aux partenaires avec ChatGPT, Claude, Gemini ou Copilot, et pointent chaque chiffre avant diffusion",
    'title'   => "Formation IA des ONG au Burkina Faso | Richard SALANON",
    'meta'    => "Formation IA pour ONG et projets de développement au Burkina Faso : rapports aux bailleurs, chiffres des plans de réponse, données de terrain. Devis FCFA.",
    'en_bref' => "Richard SALANON, consultant en digitalisation installé à Cotonou, peut animer en visioconférence une formation à l'IA destinée aux ONG et aux projets de développement burkinabè : ChatGPT, Claude, Gemini ou Copilot servent à rédiger et à analyser des documents que l'équipe fournit elle-même, en français. Ouagadougou est à UTC+0 et Cotonou à UTC+1, soit une heure d'écart. Les cas pratiques s'appuient sur vos rapports, vos tableaux de suivi et vos courriers, privés de tout nom. Un échange de cadrage précède le devis, libellé en FCFA.",
    'publie'  => '2026-12-25',
    'maj'     => '2026-12-25',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut apprendre l'IA aux équipes d'ONG de Ouagadougou et de Bobo-Dioulasso, et comment trier les offres ?",
            'paragraphes' => [
                "Richard SALANON, consultant en digitalisation basé à Cotonou, peut former à distance les structures burkinabè qui portent des projets de développement ou d'aide, qu'elles soient installées à Ouagadougou, à Bobo-Dioulasso ou dans une ville de province, à utiliser ChatGPT, Claude, Gemini ou Copilot dans leurs tâches de rédaction et d'analyse. Les séances se tiennent en français, avec une heure d'écart seulement, et le devis est libellé en FCFA.",
                "Une équipe d'ONG du Burkina Faso jongle avec plusieurs documents de référence qui ne disent pas tous la même chose : un plan national, un plan de réponse des partenaires humanitaires, une convention de financement, un cadre logique, un rapport à remettre à l'administration. Le bon formateur se reconnaît à sa capacité de partir de ce tas de pièces et de montrer comment l'assistant y aide sans y ajouter un seul nombre inventé.",
                "Quatre questions suffisent pour distinguer une démonstration d'outil d'une formation sur vos tâches. Le formateur travaille-t-il sur vos pièces rendues anonymes, ou seulement sur des exemples tirés d'un manuel ? Dit-il clairement ce qui reste hors d'un service hébergé à l'étranger ? Garde-t-il un groupe assez petit pour regarder le travail de chacun ? Remet-il des supports que votre équipe peut modifier et compléter ? Une offre qui élude ces points montre un logiciel, elle n'enseigne pas un métier.",
                "Les limites sont nettes. Richard enseigne l'usage des assistants ; il ne remplace ni un évaluateur, ni un chargé de programme, ni un juriste, ni un spécialiste de l'action humanitaire. Le choix des indicateurs, les méthodes d'enquête, la protection des personnes assistées et la lecture des textes applicables relèvent de votre organisation, de vos partenaires financiers et de vos conseils.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels documents de référence et quels chiffres reviennent dans le travail des ONG au Burkina Faso en 2026 ?",
            'paragraphes' => [
                "Le travail d'une ONG burkinabè en 2026 s'ancre sur deux cadres de réponse présentés le même jour, avec des périmètres distincts. Le 17 février 2026, un communiqué d'OCHA repris par AllAfrica indique qu'environ 4,5 millions de personnes auront besoin d'une assistance humanitaire et de protection en 2026, que le plan de réponse humanitaire des partenaires en cible 2,7 millions parmi les plus vulnérables, et qu'il demande 658,5 millions de dollars américains.",
                "Le même 17 février 2026, selon Burkina24, le plan national de réponse humanitaire a été présenté aux partenaires à Ouagadougou. Il est chiffré à 769 841 825 700 FCFA et vise 4 474 321 personnes vulnérables : 2 236 069 personnes des communautés d'accueil, 1 294 232 déplacés internes, 902 042 retournés et 41 979 réfugiés. L'article donne aussi des chiffres par secteur : 1 878 344 enfants ayant besoin d'une réponse en éducation, 2 173 703 personnes dans le besoin en santé, plus de 3,5 millions de personnes en insécurité alimentaire aiguë et près de 1,3 million d'enfants de moins de cinq ans exposés à la malnutrition.",
                "Pour une personne qui rédige, la conséquence est pratique : 2,7 millions, 4,47 millions et 4,5 millions ne désignent pas la même chose (cible d'un plan des partenaires, cible du plan national, besoins estimés). Un rapport qui les mélange induit son lecteur en erreur. Un assistant d'IA aide à rédiger un encadré qui explique la différence, mais il ne choisit pas le bon chiffre à votre place : celui-ci se lit dans le document, avec sa date et son périmètre.",
                "Ces chiffres décrivent des plans et des estimations, pas l'activité de votre organisation. Les appels à projets, les conditions des bailleurs et les montants disponibles changent ; chacun se lit sur la page officielle de son émetteur à la date de votre dossier.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que savoir de la loi sur la liberté d'association et de la loi sur les données personnelles avant d'utiliser un assistant ?",
            'paragraphes' => [
                "Deux textes concernent directement le travail d'une ONG qui s'équipe d'un assistant : la loi sur la liberté d'association adoptée en 2025 et la loi n° 001-2021/AN portant protection des personnes à l'égard du traitement des données à caractère personnel, adoptée le 30 mars 2021, dont le titre et la date figurent en tête du texte publié par l'Assemblée nationale. Aucun de ces textes ne vise l'IA par son nom dans le titre. Cette page les cite sans les interpréter : seul un juriste dit ce qui s'applique à votre structure.",
                "Pour la liberté d'association, Wakatsera rapporte que l'Assemblée législative de transition l'a adoptée le 17 juillet 2025, qu'elle compte 7 titres et 85 articles et qu'elle vise à corriger les insuffisances relevées dans la loi n° 064-2015/CNT du 20 octobre 2015. D'après la fiche de l'ICNL, mise à jour le 21 juin 2026, la loi n° 011-2025/ALT oblige chaque organisation, association, ONG ou syndicat, à remettre chaque année au ministère chargé des libertés publiques et au ministère de l'Économie et des Finances son plan de dépenses annuel, l'état de ses comptes et ses rapports financiers, par l'intermédiaire des institutions de suivi.",
                "Cette obligation a une retombée sur la rédaction : le rapport financier et le rapport d'activités annuels sont des documents officiels, relus par l'administration. Ils méritent le niveau de contrôle d'un rapport de bailleur. Un assistant peut proposer un plan, reformuler un chapitre narratif ou vérifier la cohérence des intitulés ; les montants, eux, sortent de votre comptabilité et personne d'autre que la personne qui signe n'en répond.",
                "Pour les données personnelles, la règle de travail enseignée tient en trois piles que l'équipe écrit elle-même : ce qui peut être saisi tel quel (textes publics, documents déjà publiés), ce qui n'est saisi qu'après retrait des identités (extraits de fiches, réponses ouvertes), et ce qui ne quitte jamais l'organisation (listes nominatives de personnes assistées, numéros de téléphone, photos, données de santé). L'hébergement des données et leur éventuel transfert à l'étranger se discutent avec le juriste de l'organisation ou avec la commission chargée des données personnelles, avant l'usage et non après.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'une ONG burkinabè déléguer à un assistant, avec quel outil, et quoi vérifier ensuite ?",
            'legende' => "Chaque exercice se bâtit sur des documents que l'équipe envoie avant la session, nom des personnes retiré. On utilise l'assistant déjà présent dans la structure. La colonne de droite liste les vérifications que le participant fait seul avant de se servir du texte.",
            'entetes' => ["Travail à confier", "Outil", "Résultat attendu", "Point de contrôle humain"],
            'lignes'  => [
                ["Encadré expliquant, dans une note de projet, la différence entre cible du plan des partenaires, cible du plan national et besoins estimés", "Claude ou ChatGPT", "Dix lignes claires, avec le périmètre de chaque chiffre", "Chaque nombre est pointé dans le document source, avec sa date ; aucun total n'est calculé par l'outil"],
                ["Rapport annuel d'activités et rapport financier destinés aux ministères concernés", "ChatGPT ou Claude", "Plan complet et premier jet des chapitres narratifs", "Les budgets et l'état des comptes viennent de la comptabilité ; la personne qui signe relit chaque page"],
                ["Fiche de suivi d'un projet d'éducation ou de santé à présenter à un comité de pilotage", "Gemini ou Copilot", "Fiche d'une page : activités, réalisations, écarts, prochaines étapes", "Les chiffres sont repris du tableau de suivi et comparés aux cibles du cadre logique"],
                ["Questionnaire de ménages à rendre plus court avant la collecte sur tablettes", "ChatGPT", "Questions d'une seule idée, sans suggestion de réponse", "Lecture devant les enquêteurs ; chaque question reste rattachée à un indicateur"],
                ["Regroupement des réponses ouvertes recueillies en discussions de groupe, déjà anonymisées", "Claude ou ChatGPT", "Thèmes illustrés de courtes citations", "Un échantillon est relu par l'équipe, qui choisit les intitulés des thèmes et supprime toute citation absente des réponses"],
                ["Compte rendu d'une réunion de coordination de secteur", "Copilot ou Gemini", "Tableau des décisions, responsables et échéances", "Chaque décision est retrouvée dans les notes ; une échéance non dite reste vide et se demande"],
                ["Message d'information à destination des relais communautaires après un changement de calendrier", "ChatGPT ou Gemini", "Texte bref, sans jargon, prêt à être traduit par un locuteur", "Dates, lieux et contacts viennent de la coordination ; un locuteur de la langue cible relit avant l'envoi"],
                ["Résumé en deux pages d'un rapport d'évaluation reçu d'un partenaire technique", "Claude", "Synthèse avec conclusions, limites et recommandations", "Le résumé cite les pages du rapport ; toute conclusion absente du rapport est supprimée"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de connexion, de langue et de collecte pèsent sur la formation au Burkina Faso ?",
            'paragraphes' => [
                "DataReportal (Digital 2026, chiffres d'octobre 2025) recense au Burkina Faso 5,42 millions d'internautes, soit 22,4 % de la population de 24,2 millions d'habitants, et, à la fin de 2025, 29,3 millions de connexions mobiles, soit 121 % de cette population. Le rapport avertit que certaines connexions n'offrent que la voix et les SMS, que d'autres n'incluent pas d'accès à Internet, et que beaucoup de personnes possèdent plusieurs connexions.",
                "Ces chiffres rappellent qu'un téléphone n'est pas une connexion de travail. Les assistants d'IA exigent un accès en ligne : chaque participant se connecte avec un ordinateur et un réseau stable pendant la séance. Les documents sont téléchargés à l'avance, et la solution de repli de la fiche de formation, prévue en cas de coupure, est annoncée dès le début de la session.",
                "La collecte de terrain obéit à une autre logique. Selon la documentation de KoboToolbox, KoboCollect permet de remplir et d'envoyer des formulaires depuis un appareil mobile même hors connexion ; les formulaires sont souvent finalisés hors ligne puis téléversés ensemble dès qu'un accès existe, et l'application convient surtout aux équipes d'enquêteurs équipées de téléphones ou de tablettes Android. Sur le terrain, l'assistant reste fermé. Il aide en amont à alléger le questionnaire, puis en aval à résumer des données regroupées et privées de noms. L'apprentissage de KoboToolbox ne fait pas partie de la prestation de Richard.",
                "Côté langues, Burkina24 rapporte que la loi de modification de la Constitution promulguée le 22 janvier 2024 officialise les langues nationales et range le français et l'anglais parmi les langues de travail. Pour une ONG, le français domine les documents internes et administratifs, l'anglais apparaît dans les échanges avec certains partenaires, et les langues nationales dominent les échanges avec les communautés. Les assistants écrivent correctement en français et en anglais ; pour une langue nationale, un locuteur relit toujours le texte produit avant tout usage.",
                "Un élément d'ordre financier compte pour les paiements de proximité : selon un article de Sidwaya repris par AllAfrica le 22 juillet 2026, la direction de l'inclusion financière et de la microfinance de la BCEAO attribue à l'essor du mobile money la hausse du taux d'inclusion financière du Burkina Faso, de 41 % en 2015 à 81,8 % en 2025. La formation n'enseigne aucun service de paiement mobile : elle protège seulement les listes de bénéficiaires et de numéros qui y sont associées.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format pour une équipe burkinabè, et que change l'écart d'une heure avec Cotonou ?",
            'legende' => "Toutes les formules se déroulent en visioconférence. Selon la base des fuseaux horaires de l'IANA, Africa/Ouagadougou est rattachée à Africa/Abidjan (heure de Greenwich, UTC+0) et Africa/Porto-Novo à Africa/Lagos (UTC+1). Cotonou a donc une heure d'avance : une séance fixée à 9 h à Ouagadougou commence à 10 h à Cotonou.",
            'entetes' => ["Format", "Durée", "Groupe", "Quand le choisir"],
            'lignes'  => [
                ["Atelier découverte", "Une demi-journée", "Jusqu'à 12 personnes", "Une direction qui souhaite voir l'outil sur ses propres pièces avant d'investir"],
                ["Formation complète", "Deux jours, soit 4 demi-journées de 3 h 30", "Jusqu'à 10 personnes, réunies par fonction", "Une cellule de suivi-évaluation ou de rédaction dont les membres testent chacun l'outil dans leur coin"],
                ["Séances à distance", "De 5 à 6 séances de 2 h 30", "Jusqu'à 8 personnes", "Du personnel dispersé entre Ouagadougou, Bobo-Dioulasso et d'autres villes, ou dépendant d'un siège à l'étranger"],
                ["Accompagnement mensuel", "Trois mois, avec une demi-journée chaque mois", "Les personnes déjà formées", "Élargir à de nouveaux travaux et corriger les habitudes qui se sont dégradées"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ferait un participant burkinabè dans quatre séances de travail ?",
            'intro' => "Quatre situations imaginées, sans aucune donnée réelle : un encadré de chiffres à clarifier, un rapport annuel à rendre à l'administration, un questionnaire à raccourcir, une liste de bénéficiaires qu'un collègue voudrait coller dans un assistant. Dans chacune, le participant contrôle le résultat avant de l'employer.",
            'items' => [
                ['titre' => "Trois chiffres qui ne désignent pas la même chose", 'texte' => "Situation : un coordinateur de projet fictif, à Ouagadougou, prépare une note pour un comité et hésite entre 2,7 millions, 4,47 millions et 4,5 millions de personnes. Consigne donnée : coller les trois passages sources avec leur date et demander un encadré qui dise ce que chaque nombre mesure, sans en calculer d'autre. Vérifications du participant : il pointe les trois nombres dans les documents, retire toute phrase qui compare ou additionne les périmètres, et fait relire l'encadré à un collègue du suivi-évaluation."],
                ['titre' => "Un rapport annuel destiné à l'administration", 'texte' => "Situation : l'association fictive d'une comptable de Bobo-Dioulasso doit remettre son rapport d'activités et son rapport financier de l'année, et le brouillon du narratif date de trois semaines. Consigne donnée : fournir le plan attendu par le ministère, les comptes rendus de l'année et le tableau des activités, demander un premier jet par chapitre et signaler chaque donnée manquante au lieu de la deviner. Vérifications de la participante : les montants viennent de la comptabilité et non de l'outil, les dates figurent dans les comptes rendus, et la personne qui signe relit chaque page."],
                ['titre' => "Un questionnaire de ménages à raccourcir", 'texte' => "Situation : un projet fictif d'appui à la scolarisation veut interroger des familles avec une cinquantaine de questions rédigées par quatre personnes, avec des sigles différents d'une partie à l'autre. Consigne donnée : repérer les questions doubles, le jargon et les formulations qui orientent la réponse, puis proposer des versions plus courtes en français. Vérifications du participant : chaque question conservée sert un indicateur du cadre logique, la version courte est lue devant les enquêteurs, et un locuteur de la langue d'enquête relit la traduction avant l'essai sur tablette."],
                ['titre' => "Une liste de personnes assistées à ne pas exposer", 'texte' => "Situation : à la veille d'une réunion, un collègue suggère d'envoyer à un assistant en ligne le tableau des familles inscrites à une distribution (noms, villages, téléphones, composition du ménage) pour obtenir un récapitulatif par commune. Consigne donnée : classer chaque colonne dans l'une des trois piles de la formation, puis refaire la demande sur des données codées. Vérifications du participant : les noms et les téléphones sont retirés, les villages remplacés par des codes, aucune combinaison de détails ne permet de reconnaître un foyer, et la question d'un transfert à l'étranger est posée par écrit au juriste de l'organisation."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment budgéter une formation IA quand on dépend d'un bailleur ou d'un fonds de projet ?",
            'paragraphes' => [
                "La première démarche est interne : rouvrir la convention de financement et chercher une ligne de renforcement des capacités, de formation ou de fonctionnement. Selon les bailleurs, la dépense est déjà prévue, ou elle suppose une demande de modification budgétaire avant tout engagement. La décision revient au bailleur, et cette page ne vaut promesse de prise en charge. Joignez à la demande le programme et le devis en FCFA.",
                "Aucun dispositif public de financement de la formation continue n'est présenté ici comme ouvert aux ONG : les conditions d'accès d'un fonds de formation pour une organisation à but non lucratif, et pour un prestataire établi à l'étranger, ne sont pas établies à la date de cette page. Interrogez le fonds concerné par écrit avant de bâtir un budget autour de lui.",
                "Aucun agrément de fonds ni aucune certification d'éditeur n'est revendiqué par Richard. À la fin, une attestation est délivrée au nom de chaque participant ; le programme, les supports et les feuilles de présence l'accompagnent, ce qu'exigent la plupart des justificatifs de dépense. À défaut de financeur, la structure inscrit la dépense à son fonctionnement et la répartit sur un format court puis un suivi mensuel.",
                "Un conseil de budgétisation : séparer ce qui relève de la formation (les séances, la préparation de vos pièces) de ce qui relève des abonnements aux assistants, que l'organisation souscrit à son nom. Un compte d'organisation, confié à un responsable, évite de payer des abonnements dispersés par carte personnelle.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Quel budget prévoir pour former une équipe d'ONG burkinabè à l'IA, et de quoi dépend le devis ?",
            'intro' => "Pas de grille publique : le prix naît du devis en FCFA que vous recevez après le cadrage, poste par poste. Les licences des assistants sont souscrites par votre organisation. Pour payer, la fiche de l'entreprise cite Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces ; le choix se fait à la signature.",
            'items' => [
                ['offre' => "Atelier découverte", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée sur des documents de votre structure, noms retirés", "Deux tâches prises en main", "Règles de base sur les fichiers de personnes assistées", "Avis sur la suite à donner"]],
                ['offre' => "Formation complète", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Quatre demi-journées à distance, un groupe par fonction", "Cas construits à partir de vos rapports et de vos suivis", "Épreuve finale chronomètre en main, attestation à chaque nom", "Canal direct durant le mois suivant"]],
                ['offre' => "Accompagnement mensuel", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée chaque mois, trois fois", "Bilan de l'usage réel", "Corrections et travaux ajoutés"]],
            ],
            'variations' => [
                "Le nombre de participants, réunis en groupes par fonction (programme, suivi-évaluation, finances, communication).",
                "Le total des séances en visioconférence et leur longueur.",
                "Le temps passé à rassembler vos pièces et à en effacer les noms avant la session.",
                "La part de la formation consacrée aux rapports de bailleurs, aux documents administratifs ou à la collecte.",
                "La décision de prolonger par un suivi mensuel.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs guettent une ONG burkinabè qui se met à l'IA ?",
            'intro' => "Les premiers pas se heurtent souvent aux mêmes écueils : chiffres confondus, comptes personnels, fichiers de bénéficiaires exposés, citations embellies, traductions non relues. Quelques règles écrites avant de commencer en évitent la plupart.",
            'items' => [
                ['titre' => "Laisser l'assistant choisir le chiffre de référence", 'texte' => "Avec deux cadres de réponse et plusieurs estimations, l'outil peut citer le nombre qui sonne le mieux. Le chiffre se prend dans le document officiel daté, il se colle dans la consigne et il se pointe dans le résultat."],
                ['titre' => "Considérer le rapport annuel comme une simple formalité", 'texte' => "Un document remis chaque année à l'administration reste un document officiel. Un premier jet d'assistant se relit comme un texte signé, montants vérifiés dans la comptabilité."],
                ['titre' => "Verser une liste nominative dans un compte gratuit", 'texte' => "Le délai serré invite au raccourci. Le tri en trois piles se fait vite ; la question d'un départ des données vers l'étranger se règle avant l'envoi et non au retour."],
                ['titre' => "Embellir la parole d'une personne interrogée", 'texte' => "Une phrase vraisemblable fabriquée par l'outil n'a été dite par personne. Un verbatim a été prononcé, consigné avec l'accord de son auteur et recopié sans retouche."],
                ['titre' => "Envoyer une traduction en langue nationale sans relecteur", 'texte' => "Un terme maladroit dans une consigne de distribution ou une question d'enquête modifie ce qu'on obtient. Avant tout essai, un locuteur relit la version traduite."],
                ['titre' => "Un abonnement par agent", 'texte' => "Quand chaque agent s'abonne seul, l'organisation ignore qui utilise quoi et où dorment ses conversations. Un compte unique, ouvert au nom de la structure et tenu par un responsable, rend les coûts lisibles et protège les historiques lors d'un départ."],
                ['titre' => "Reporter les règles de données à plus tard", 'texte' => "Le classement en trois piles se rédige avant le premier essai sur des données réelles, se fait signer par la direction et se révise quand un texte ou un partenaire l'exige."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former une équipe d'ONG burkinabè avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Le Burkina Faso fait partie des " . count((array) fait('pays_travailles')) . " pays où Richard a travaillé, sur place ou à distance. Auprès des structures burkinabè qui portent des projets, son rôle serait d'enseigner à distance les gestes de l'assistant sur des pièces tirées de votre quotidien : rapports, tableaux de suivi, courriers. Ses projets figurent sur la page des <a href='/realisations/'>réalisations</a>.",
                "Il ne prétend pas évaluer des projets ni connaître l'action humanitaire de l'intérieur. Son parcours : " . $ans . " ans dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), et plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées, selon sa déclaration, au numérique, à l'IA, à l'automatisation et aux ERP. Il développe aussi <a href='https://wapy.pro'>Wapy</a>, assistant WhatsApp doté d'intelligence artificielle destiné aux entreprises francophones d'Afrique, et co-fonde <a href='https://audyxa.com'>Audyxa</a>.",
                "Chaque promesse se vérifie : une réponse en 24 heures, un ou deux échanges de cadrage dont l'un peut aboutir à la conclusion qu'un atelier suffit, un questionnaire à remplir avant la session, des pièces envoyées en amont, des supports que vous pouvez modifier, une attestation par participant. Aucune certification d'éditeur n'est revendiquée, aucun partenariat non plus. La méthode de base est détaillée dans <a href='/formations/ia-en-entreprise'>IA en entreprise</a> ; les règles sur les données dans <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a> ; la lecture d'un indicateur avant publication dans <a href='/formations/data-literacy'>décider avec les données</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre prochain rapport aux ministères ou à un bailleur approche-t-il ?",
            'texte'  => "Indiquez la taille de votre équipe, les fonctions à former, la ville, l'échéance du prochain document officiel ou de bailleur et les logiciels en place. Vous recevez une première réponse sous 24 heures, puis une proposition et un devis ligne par ligne en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => "Demander une formation IA pour mon équipe"],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former mon ONG à l'IA à Ouagadougou, à Bobo-Dioulasso ou ailleurs au Burkina Faso ?", 'r' => "Richard SALANON, qui travaille depuis Cotonou, peut animer à distance une formation à l'IA pour des équipes burkinabè d'ONG ou de projets : ChatGPT, Claude, Gemini ou Copilot, appliqués à vos propres pièces et en français. Aucun éditeur ne l'a certifié. Tarification : devis en FCFA."],
        ['q' => "Pourquoi les chiffres de la réponse humanitaire 2026 au Burkina Faso diffèrent-ils d'un document à l'autre ?", 'r' => "Ils décrivent des périmètres distincts. Selon OCHA (17 février 2026), environ 4,5 millions de personnes ont besoin d'une assistance et le plan des partenaires en cible 2,7 millions pour 658,5 millions de dollars américains. Selon Burkina24, le plan national vise 4 474 321 personnes pour 769 841 825 700 FCFA."],
        ['q' => "Un assistant d'IA peut-il rédiger le rapport annuel d'une association ou d'une ONG ?", 'r' => "Il peut proposer un plan et un premier jet des chapitres narratifs, à partir de pièces anonymisées. Les budgets, les comptes et les montants viennent de la comptabilité, et la personne qui signe relit l'ensemble avant la remise aux ministères."],
        ['q' => "Que prévoit la loi n° 011-2025/ALT sur les rapports financiers des organisations ?", 'r' => "Selon la fiche de l'ICNL mise à jour le 21 juin 2026, chaque association, ONG ou syndicat remet chaque année au ministère chargé des libertés publiques et à celui de l'Économie et des Finances son plan de dépenses, l'état de ses comptes et ses rapports financiers, par l'intermédiaire des institutions de suivi. Le texte n'est pas interprété ici : consultez un juriste."],
        ['q' => "Une liste de bénéficiaires peut-elle être collée dans ChatGPT ou Claude ?", 'r' => "Pas telle quelle. Les équipes formées classent d'abord chaque colonne d'un fichier selon trois piles, puis ne soumettent à l'outil que des extraits codés. La loi n° 001-2021/AN du 30 mars 2021 est le texte à faire lire par un juriste pour votre structure."],
        ['q' => "Les séances peuvent-elles se tenir en langue nationale ?", 'r' => "Les séances se tiennent en français. Burkina24 rapporte que la modification de la Constitution promulguée le 22 janvier 2024 officialise les langues nationales ; pour un texte destiné aux communautés, un locuteur relit toujours la production de l'assistant avant tout usage."],
        ['q' => "Que dit-on de la connexion pour suivre une formation à distance au Burkina Faso ?", 'r' => "Selon DataReportal (octobre 2025), 22,4 % des habitants étaient internautes et 29,3 millions de connexions mobiles étaient comptées à la fin de 2025, dont certaines sans accès à Internet. Chaque participant doit disposer d'un ordinateur et d'un réseau fiable ; les documents sont envoyés en amont et un plan de secours est annoncé pour les coupures."],
        ['q' => "Quel est l'écart d'heure entre Ouagadougou et Cotonou ?", 'r' => "Oui, exactement une heure. D'après les fichiers de l'IANA, Africa/Ouagadougou renvoie à Africa/Abidjan (UTC+0) tandis qu'Africa/Porto-Novo renvoie à Africa/Lagos (UTC+1). Neuf heures à Ouagadougou correspondent à dix heures à Cotonou."],
        ['q' => "Un fonds public finance-t-il une formation IA pour une ONG burkinabè ?", 'r' => "Les conditions d'accès d'une ONG à un fonds public de formation ne sont pas établies à la date de cette page, et rien ne garantit une prise en charge. Posez la question par écrit au fonds ou au bailleur, en joignant le programme et le devis en FCFA."],
        ['q' => "Quel est le prix, et en quelle monnaie ?", 'r' => "Le site n'affiche aucun montant. Après le premier échange, un devis en FCFA détaille les postes ; il varie avec le nombre de participants, le format, la préparation de vos documents et l'éventuel accompagnement. Vous gardez à votre charge les licences des assistants."],
        ['q' => "Une attestation est-elle remise à la fin ?", 'r' => "Oui, une attestation à son nom est remise à chaque participant avec le programme, les supports et les feuilles de présence. Il ne s'agit ni d'un diplôme ni d'un titre d'éditeur."],
    ],

    'sources' => [
        ['titre' => "Burkina24, le plan national de réponse humanitaire 2026 présenté aux partenaires (17 février 2026)", 'url' => 'https://burkina24.com/?p=432843', 'date' => '2026-10-27'],
        ['titre' => "OCHA, communiqué sur le plan de réponse humanitaire 2026 du Burkina Faso (AllAfrica, 17 février 2026)", 'url' => 'https://fr.allafrica.com/stories/202602180535.html', 'date' => '2026-10-27'],
        ['titre' => "Wakatsera, le Burkina adopte une nouvelle loi sur la liberté d'association (17 juillet 2025)", 'url' => 'https://www.wakatsera.com/le-burkina-adopte-une-nouvelle-loi-sur-la-liberte-dassociation/', 'date' => '2026-10-27'],
        ['titre' => "ICNL, Civic Freedom Monitor : Burkina Faso (mise à jour du 21 juin 2026)", 'url' => 'https://www.icnl.org/resources/civic-freedom-monitor/burkina-faso', 'date' => '2026-10-27'],
        ['titre' => "Assemblée nationale, loi n° 001-2021/AN du 30 mars 2021 portant protection des personnes à l'égard du traitement des données à caractère personnel", 'url' => 'https://assembleenationale.bf/storage/Loi/kDsWHXOTUCQFVESChh8BlBdiZnCrdTsOpXe1rzmH.pdf', 'date' => '2026-10-27'],
        ['titre' => "Burkina24, loi portant modification de la Constitution promulguée le 22 janvier 2024 (25 janvier 2024)", 'url' => 'https://burkina24.com/2024/01/25/burkina-faso-le-capitaine-ibrahim-traore-a-promulgue-la-loi-portant-modification-de-la-constitution/', 'date' => '2026-10-27'],
        ['titre' => "DataReportal, Digital 2026 : Burkina Faso", 'url' => 'https://datareportal.com/reports/digital-2026-burkina-faso', 'date' => '2026-10-27'],
        ['titre' => "KoboToolbox, documentation : collecter des données avec KoboCollect", 'url' => 'https://support.kobotoolbox.org/data_collection_kobocollect.html', 'date' => '2026-10-27'],
        ['titre' => "Sidwaya via AllAfrica, inclusion financière et mobile money selon la BCEAO (22 juillet 2026)", 'url' => 'https://fr.allafrica.com/stories/202607220564.html', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Ouagadougou vers Africa/Abidjan, Africa/Porto-Novo vers Africa/Lagos)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : zones Africa/Abidjan et Africa/Lagos", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['data-literacy', 'power-bi-looker-studio', 'ia-en-entreprise', 'outils-collaboratifs', 'ia-ethique-conformite'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
