<?php
// ============================================================
// data/metiers/ong-projets-developpement/senegal.php · Page métier + pays :
// ONG et projets de développement au Sénégal. Statut de la ligne du métier : F ;
// la tâche impose la formule « Richard peut former ».
// Faits externes lus le 26/10/2026 : Le Soleil (financements 2025-2026 de l'État,
// 3 août 2026 ; enquête ENTICS 2024, 18 juillet 2025), Senego (suspension de l'aide
// américaine, 22 février et 28 mars 2025), AllAfrica (CONGAD à Kolda, 20 mai 2026 ;
// 3FPT, 15 juillet 2026), Osiris (échantillon de l'enquête de 2024),
// GTAI (programme indicatif 2021-2027 de l'Union européenne), WIPO Lex (loi n° 2008-12,
// articles 2, 4 et 49, lus dans le PDF), ICNL (décret n° 96-103, titre et date seulement), ANSD (RGPH-5, langues), documentation
// KoboToolbox (traductions, collecte hors connexion), site du 3FPT.
// Non établi et donc retiré : liste des formalités de la CDP (page non lisible),
// décret de 2022 sur les modalités d'intervention des ONG (texte non lu).
// Aucune pratique de Richard hors faits.php et fiche ia-en-entreprise ; il ne forme
// pas à un outil de collecte. Aucune somme pour une formation. Aucune certification.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les ONG et les projets de développement au Sénégal : vos équipes de suivi-évaluation, de terrain et de coordination rédigent, résument et vérifient avec ChatGPT, Claude, Gemini ou Copilot, sans exposer les données des bénéficiaires",
    'title'   => "Formation IA des équipes d'ONG au Sénégal | Richard SALANON",
    'meta'    => "Formation IA pour ONG et projets de développement au Sénégal : rapports aux bailleurs, suivi-évaluation, données des bénéficiaires. À distance, en FCFA.",
    'en_bref' => "Richard SALANON, consultant en digitalisation basé à Cotonou, peut former à distance les équipes d'ONG et de projets de développement du Sénégal à utiliser ChatGPT, Claude, Gemini ou Copilot sur leurs propres documents, en vérifiant chaque chiffre et en protégeant les données des bénéficiaires. Les séances suivent les heures de bureau de Dakar, une heure de moins qu'à Cotonou, en français. Les exercices partent des rapports, des fiches d'activité et des tableaux d'indicateurs de votre projet, anonymisés. Le devis est établi en FCFA, après un échange de cadrage.",
    'publie'  => '2026-12-13',
    'maj'     => '2026-12-13',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les équipes d'ONG et de projets au Sénégal à l'IA, et comment choisir ?",
            'paragraphes' => [
                "Richard SALANON, consultant en digitalisation basé à Cotonou, peut former à distance les équipes d'ONG et de projets de développement du Sénégal à l'usage quotidien des assistants d'IA, sur leurs propres documents et dans leurs propres comptes. Les séances suivent les heures de bureau de Dakar, en français, et le devis est établi en FCFA après un échange de cadrage.",
                "Pour une ONG, la question du choix se pose autrement que pour une entreprise commerciale. Le texte produit sert rarement à vendre : il rend compte. Un rapport trimestriel, une note de situation, un compte rendu de mission, une réponse à une observation de bailleur engagent l'organisation devant celui qui la finance. Une formation utile part donc de ces écrits-là, pas d'une démonstration générale de ce que « sait faire » un assistant.",
                "Quatre questions permettent de distinguer une formation sur les tâches du métier d'une présentation d'outil. Les exercices se font-ils sur vos fiches d'activité et vos tableaux d'indicateurs, anonymisés, ou sur des exemples génériques ? Que dit le formateur des données de bénéficiaires qui ne doivent jamais entrer dans un assistant ? Combien de personnes par groupe, et qui regarde le travail de chacun ? Que reste-t-il à l'équipe après la session : une méthode de vérification, des modes opératoires, des supports modifiables ?",
                "Un point de périmètre doit être dit clairement. Richard n'exerce ni le suivi-évaluation, ni la gestion de projet, ni l'évaluation : il forme à l'usage des assistants d'IA. Il ne conçoit pas votre cadre de résultats et ne choisit pas vos indicateurs. La formation ne porte pas sur un logiciel de collecte en particulier : cette prise en main relève de la documentation de l'éditeur et de votre équipe de suivi-évaluation. Ce que la formation apporte, c'est la manière de préparer, de rédiger et de contrôler les écrits qui entourent ces outils.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est le financement des ONG au Sénégal, et pourquoi cela change-t-il les écrits d'un projet ?",
            'paragraphes' => [
                "Les écrits d'un projet dépendent de qui le finance, et chaque bailleur a ses propres exigences de compte rendu. Quelques faits datés situent le contexte dans lequel les équipes rédigent : les accords de l'État en 2026, le programme européen 2021-2027, la suspension de l'aide américaine en 2025 et un atelier du CONGAD en 2026.",
                "Du côté des institutions de financement, Le Soleil a publié le 3 août 2026 un bilan des accords signés par l'État sénégalais. Pour 2026, il cite notamment une convention de 22 milliards de FCFA avec l'Association internationale de développement du groupe de la Banque mondiale, signée le 5 mai 2026, pour le cadastre et le foncier, et un accord de prêt de 50 milliards de FCFA de la Banque ouest-africaine de développement, sans date de signature précisée. Pour 2025, il compte près de 50 milliards de FCFA de l'Agence française de développement, répartis sur trois projets. Ces montants concernent l'État, pas des ONG ; ils ne disent rien du financement des organisations.",
                "L'Union européenne finance, selon la fiche de projet de Germany Trade and Invest, le programme indicatif pluriannuel 2021-2027 du Sénégal à hauteur de 222 millions d'euros, dans le cadre de l'instrument NDICI. La fiche liste parmi ses secteurs l'éducation, la santé, le développement rural et la réduction de la pauvreté, sans ventiler le montant.",
                "Les ONG ont aussi connu une période de recomposition. Le 22 février 2025, Senego a rapporté la suspension de 90 jours de l'aide publique américaine et recueilli la réaction de plusieurs organisations. Le directeur de 3D a estimé que la santé, l'éducation et la gouvernance seraient fortement touchées ; le président de la COSCE a indiqué que ses principales activités seraient peu affectées, ses nouveaux financeurs comprenant l'Union européenne et le Royaume-Uni. Le 28 mars 2025, le Conseil des organisations non gouvernementales d'appui au développement, le CONGAD, a annoncé une étude sur les conséquences sociales de cette suspension et appelé les partenaires financiers à se mobiliser.",
                "Le 20 mai 2026, AllAfrica a rendu compte d'un atelier de deux jours du CONGAD à Kolda, organisé avec la GIZ, pour des responsables d'organisations de Ziguinchor, Sédhiou, Kolda et Kédougou. Un membre du conseil d'administration y a relevé que le retrait de certains bailleurs pousse les organisations à chercher des financements, et qu'il leur faut donc des règles sur l'origine des fonds. Pour une équipe, la conséquence pratique est simple : plus de bailleurs différents, c'est plus de formats de rapport, plus de langues de rédaction et plus de chiffres à tenir cohérents d'un document à l'autre. Un assistant peut aider sur ce travail, à condition que chaque nombre soit vérifié.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles encadrent les ONG et les données des bénéficiaires au Sénégal ?",
            'paragraphes' => [
                "Deux textes se lisent ensemble : le décret n° 96-103 de 1996 sur les modalités d'intervention des ONG, et la loi n° 2008-12 sur les données personnelles. Aucun n'est une règle sur l'IA. Cette page les cite sans interprétation ; seul un juriste, ou la CDP, dit ce qui s'applique à votre cas.",
                "Pour le cadre des ONG, la bibliothèque juridique de l'ICNL publie le décret n° 96-103 du 8 février 1996, qui modifie le décret n° 89-775 du 30 juin 1989 fixant les modalités d'intervention des organisations non gouvernementales. Cette page n'en cite que le titre et la date : le régime en vigueur se confirme auprès de l'administration compétente avant de s'appuyer sur ce texte.",
                "Pour les données personnelles, la loi n° 2008-12 du 25 janvier 2008 est référencée par WIPO Lex. Selon son article 4, les données sensibles comprennent notamment celles qui relèvent de la santé, de la vie sexuelle ou raciale, des opinions ou activités religieuses ou philosophiques et des mesures d'ordre social. Une fiche de bénéficiaire d'un projet de santé, de protection sociale ou d'appui aux personnes vulnérables entre donc très vite dans cette catégorie. L'article 2 vise aussi un traitement mis en oeuvre par un responsable établi ou non sur le territoire sénégalais, lorsqu'il utilise des moyens de traitement situés dans le pays, hors simple transit.",
                "L'article 49 de la même loi encadre le transfert de données vers un pays tiers, c'est-à-dire, selon l'article 4, tout État autre que le Sénégal. Il ne l'autorise que si cet État assure un niveau de protection suffisant, et exige d'informer au préalable la Commission des données personnelles, la CDP. D'autres articles de la loi traitent des cas particuliers : seul le texte complet permet de les apprécier. Coller une liste de ménages dans un assistant hébergé hors du pays n'est pas un geste neutre : la question du transfert se pose avant l'usage.",
                "La CDP confirme le texte applicable à votre situation. La formation n'attend pas cette confirmation pour agir : elle fait écrire des règles d'équipe sur ce qui peut entrer dans un assistant, ce qu'on anonymise d'abord, et ce qui ne sort jamais du projet.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'un projet confier à l'IA, avec quels outils, et que contrôle la personne ?",
            'legende' => "Exemples d'exercices construits à la préparation, sur les documents que le projet fournit, anonymisés. Les outils sont ChatGPT, Claude, Gemini ou Copilot, selon ce que l'organisation utilise déjà. La dernière colonne est ce que le participant apprend à contrôler seul avant d'utiliser le résultat.",
            'entetes' => ["Tâche du projet", "Outil", "Résultat attendu", "Point de contrôle humain"],
            'lignes'  => [
                ["Section « résultats du trimestre » d'un rapport à un bailleur, à partir des fiches d'activité", "Claude ou ChatGPT", "Premier jet structuré selon le plan imposé par le bailleur", "Chaque nombre est retrouvé dans la base du projet ; aucun chiffre n'a été complété par l'assistant"],
                ["Synthèse d'un rapport d'activité de 40 pages pour la direction ou le comité de pilotage", "Claude ou Copilot", "Résumé avec renvoi aux pages, tableau des indicateurs", "Chaque chiffre repris à la bonne page du rapport source"],
                ["Version anglaise d'une note de synthèse pour un partenaire ou un bailleur anglophone", "ChatGPT ou Gemini", "Traduction dans le ton de l'organisation", "Relecture par une personne bilingue : sigles, noms de lieux, noms propres, dates"],
                ["Compte rendu d'une mission de terrain à partir de notes brutes", "Copilot ou Gemini", "Décisions, actions, responsables et échéances en tableau", "Aucune décision ajoutée ni oubliée ; chaque échéance correspond aux notes"],
                ["Reformulation d'un questionnaire pour des questions plus courtes et plus claires", "ChatGPT", "Liste de questions simplifiées, une idée par question", "Test auprès d'enquêteurs ; toute traduction en langue nationale relue par un locuteur"],
                ["Classement de réponses ouvertes déjà anonymisées par thème", "ChatGPT ou Claude", "Proposition de thèmes avec exemples", "Un échantillon relu à la main ; les thèmes sont nommés et validés par l'équipe, jamais par l'outil seul"],
                ["Messages de coordination reçus par WhatsApp, avec abréviations et fautes", "ChatGPT", "Tableau des activités réalisées par lieu et par date", "Recoupement avec les fiches d'activité ; aucun nom de bénéficiaire dans le tableau"],
                ["Réponse à une observation écrite d'un bailleur sur un rapport", "Claude ou ChatGPT", "Projet de courrier argumenté et courtois", "Engagements pris au nom de l'organisation validés par la direction avant tout envoi"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain pèsent sur la formation, et comment s'y adapte-t-elle ?",
            'paragraphes' => [
                "La connexion et les langues sont les deux contraintes. Selon Le Soleil du 18 juillet 2025, 43,8 % des ménages de Dakar ont un abonnement internet à domicile, contre 3 % en milieu rural. La formation se tient donc avec un ordinateur et une connexion stable, documents téléchargés à l'avance, et une solution de repli est prévue.",
                "L'enquête nationale sur les technologies de l'information et de la communication, menée en 2024 par l'Autorité de régulation des télécommunications et des postes avec l'Agence nationale de la statistique et de la démographie et présentée le 17 juillet 2025, relève un écart net entre la capitale et les campagnes. Dans le même article, 95,7 % des personnes interrogées ont un téléphone portable et 16 % un ordinateur. Osiris indique que l'échantillon comptait 1 719 ménages répartis dans 117 districts de recensement.",
                "Ces chiffres décrivent les ménages, pas les bureaux de projet, mais ils disent ce que les équipes de terrain vivent : le téléphone est l'appareil commun, l'ordinateur et la connexion fixe sont concentrés en ville. La formation en tient compte de deux façons. Les séances ont lieu avec un ordinateur par participant et une connexion stable, comme le demande la fiche de la formation IA en entreprise, puisque les assistants travaillent en ligne. Pour le terrain, les exercices portent sur ce qui se prépare au bureau et se contrôle sans réseau : consignes rédigées hors ligne, documents téléchargés avant la séance, relectures sur fichier local.",
                "La collecte elle-même relève de la documentation des éditeurs d'outils, qui décrivent bien ce point. Celle de KoboToolbox précise qu'une fois les formulaires téléchargés dans l'application KoboCollect, aucune connexion n'est nécessaire pour collecter, que les fiches sont souvent remplies hors ligne puis envoyées en lot au retour du réseau, et que l'application convient aux équipes d'enquêteurs sur téléphone ou tablette Android. Un assistant d'IA n'entre pas dans cette boucle de terrain : il intervient avant, pour clarifier un questionnaire, et après, pour résumer ou rédiger à partir de données déjà consolidées et anonymisées.",
                "Les langues sont la deuxième contrainte. Selon la page du rapport définitif du cinquième recensement, publiée par Vie publique, 97,6 % des personnes de 3 ans ou plus utilisent une langue nationale, dont le wolof à 53,5 % et le pulaar à 26,3 %. La même documentation de KoboToolbox indique qu'un formulaire peut contenir autant de traductions que nécessaire, que la langue se choisit au moment de la collecte, et que le texte non traduit apparaît comme un champ vide. Les assistants d'IA écrivent bien en français ; pour un texte en wolof ou en pulaar, le résultat est relu par un locuteur avant tout usage, et une traduction de questionnaire se teste à voix haute avec les enquêteurs.",
                "En cas de coupure pendant une séance à distance, une solution de repli est prévue. Les documents d'exercice sont téléchargés à l'avance, pour ne pas dépendre d'une connexion fragile.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats pour une équipe d'ONG, et comment la formation se déroule-t-elle à distance ?",
            'legende' => "Tous les formats se donnent en visioconférence pour le Sénégal. Les séances se calent sur les heures de bureau de Dakar, qui vit à l'heure GMT toute l'année : une séance à 9 h à Dakar se tient à 10 h à Cotonou, qui est à GMT+1. Les formats peuvent se combiner.",
            'entetes' => ["Format", "Durée", "Groupe", "Quand le choisir"],
            'lignes'  => [
                ["Atelier découverte", "Une demi-journée", "12 personnes au plus", "Une direction ou un comité de projet qui veut voir avant d'investir, ou une équipe qui n'a jamais utilisé d'assistant"],
                ["Formation complète", "2 jours, en 4 demi-journées de 3 h 30", "10 personnes au plus, par fonction", "Une équipe de suivi-évaluation ou de coordination qui utilise déjà l'IA dans le désordre, ou un rapport volumineux à reprendre avec méthode"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Une équipe répartie entre Dakar et des antennes régionales, ou entre le Sénégal et un siège à l'étranger"],
                ["Session mutualisée", "1 à 2 jours", "Plusieurs structures d'un même réseau", "Une ou deux personnes par organisation ; les exercices se font sur des documents publics ou fictifs, sans dossier interne"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Étendre l'usage à d'autres tâches et corriger ce qui ne tient pas dans la durée"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À quoi ressemblent quatre séances pour une équipe d'ONG sénégalaise ?",
            'intro' => "Quatre séances types, construites sur des dossiers fictifs, montrent ce que fait une équipe d'ONG sénégalaise : un rapport trimestriel, un questionnaire de ménages, une liste de bénéficiaires à protéger et une note bilingue. Aucune donnée réelle n'est utilisée en séance, et chaque participant contrôle le résultat avant de s'en servir.",
            'items' => [
                ['titre' => "Le rapport trimestriel d'un projet de santé communautaire", 'texte' => "Situation : une chargée de suivi-évaluation doit rendre un rapport narratif de dix pages à un bailleur, avec des fiches d'activité écrites par six animateurs dans des formats différents. Consigne donnée : fournir à l'assistant les fiches anonymisées et le tableau d'indicateurs déjà calculé, lui demander un plan conforme à celui du bailleur, puis un premier jet par section, en lui interdisant tout chiffre absent du tableau. Ce que la participante contrôle : chaque nombre du texte renvoie à une cellule du tableau, chaque activité citée à une fiche, et aucune phrase n'explique un retard que l'assistant ne connaissait pas. Un collègue relit en cherchant la source de chaque affirmation."],
                ['titre' => "Un questionnaire de ménages à clarifier avant la collecte", 'texte' => "Situation : un projet agricole prépare une enquête dans plusieurs villages, avec un questionnaire de quatre-vingts questions écrit à plusieurs mains, dont des formulations ambiguës. Consigne donnée : demander à l'assistant de repérer les questions doubles, les termes techniques et les formulations qui orientent la réponse, puis de proposer des versions plus courtes, sans modifier le sens des indicateurs visés. Ce que le participant contrôle : chaque question retenue sert toujours un indicateur du cadre de résultats ; la version simplifiée est lue à voix haute aux enquêteurs ; les traductions en wolof ou en pulaar sont relues par un locuteur avant le test sur le terrain, et l'équipe ne les prend pas pour acquises."],
                ['titre' => "Une liste de bénéficiaires qu'un collègue veut coller dans un assistant", 'texte' => "Situation : pressé par une échéance, un coordinateur propose de coller dans un assistant en ligne un tableau de ménages avec noms, villages et numéros de téléphone, pour obtenir un résumé par commune. Consigne donnée : appliquer la grille en trois couleurs de la formation, vert pour ce qui est public, orange pour ce qu'on anonymise d'abord, rouge pour ce qui ne sort jamais du projet. Ce que le participant contrôle : il retire noms et téléphones, remplace les villages par des codes, vérifie qu'aucune donnée de santé ou de situation sociale ne reste identifiable, et constate que le résumé par commune se fait aussi bien sur la version anonymisée. La question d'un éventuel transfert hors du Sénégal est posée avant l'usage, comme le prévoit la loi."],
                ['titre' => "Une note de synthèse bilingue pour un comité de pilotage", 'texte' => "Situation : un bailleur anglophone demande une synthèse de deux pages à partir d'un rapport de quarante pages rédigé en français. Consigne donnée : demander un résumé qui cite la page de chaque point, puis une version anglaise, en fournissant la liste des sigles du projet. Ce que le participant contrôle : chaque chiffre est retrouvé à la bonne page du rapport source, les sigles et les noms de lieux sont inchangés, et une personne bilingue relit l'anglais avant l'envoi."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment budgéter ou faire financer la formation d'une équipe d'ONG au Sénégal ?",
            'paragraphes' => [
                "La convention de financement du projet est le premier endroit à regarder : certaines prévoient une ligne de renforcement des capacités, d'autres imposent de demander une réallocation au bailleur. La décision appartient au bailleur ; aucune prise en charge n'est promise sur cette page. Le devis, en FCFA, peut être joint à la demande.",
                "Le Fonds de financement de la formation professionnelle et technique, le 3FPT, est la piste publique à examiner. Son site présente des guichets de financement pour le personnel des entreprises et pour les membres des organisations professionnelles, pour les demandes individuelles et pour les établissements de formation, ainsi qu'un bouton de demande de financement en ligne. Il ne détaille pas les critères d'éligibilité : une ONG vérifie par écrit auprès du fonds si elle entre dans l'un de ces publics, et dans quelles conditions.",
                "Selon AllAfrica, qui reprend Le Soleil le 15 juillet 2026, le fonds a signé une convention de 86 861 300 FCFA avec le CNP, la CNES et l'UPIC, avec une prise en charge de près de 90 %, pour 911 bénéficiaires de 36 entreprises. Cet exemple montre que le fonds finance de la formation réelle ; il ne dit rien de l'éligibilité d'une formation à l'IA donnée par Richard, ni de celle d'une ONG.",
                "Richard n'affiche ni agrément d'un fonds ni certification d'éditeur. Il remet, pour chaque formation, un programme détaillé, un devis, des feuilles de présence et une attestation nominative de fin de formation, qui servent dans toute demande. Si une aide conditionne votre décision, envoyez ces pièces au fonds ou au bailleur et attendez sa réponse avant de signer. Sinon, budgétez la dépense comme une ligne de formation interne, étalée si besoin sur un format court puis un accompagnement mensuel.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Combien coûte une formation IA pour une équipe d'ONG au Sénégal ?",
            'intro' => "Aucune somme n'est publiée : le prix est fixé sur devis, en FCFA, après l'échange de cadrage, et le devis détaille chaque poste. Les abonnements aux assistants restent au nom de l'organisation. Parmi les modes de règlement (Mobile Money MTN et Moov, carte bancaire, PayPal, virement, espèces), ceux qui conviennent depuis le Sénégal se précisent au devis.",
            'items' => [
                ['offre' => "Atelier découverte", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée sur vos documents anonymisés", "Premiers gestes sur deux tâches du projet", "Règles de données de base pour les bénéficiaires", "Recommandation pour la suite"]],
                ['offre' => "Formation complète", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Quatre demi-journées à distance, par fonction", "Exercices construits sur vos rapports et vos tableaux", "Épreuve finale sur une tâche réelle et attestation", "Canal direct le mois suivant"]],
                ['offre' => "Accompagnement mensuel", 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée par mois pendant trois mois", "Mesure de ce qui sert", "Corrections et nouvelles tâches"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par fonction : suivi-évaluation, coordination, administration et finances.",
                "Le nombre de séances à distance et leur durée.",
                "La préparation des exercices sur vos documents, et leur anonymisation avant la session.",
                "La langue des supports, en français ou avec des passages en anglais pour un bailleur anglophone.",
                "L'accompagnement après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les équipes d'ONG sénégalaises qui démarrent l'IA ?",
            'intro' => "Sept erreurs reviennent d'un projet à l'autre quand une équipe d'ONG démarre l'IA : chiffres inventés, données de bénéficiaires exposées, témoignages arrondis, traductions non relues, comptes éparpillés, règles repoussées, rapports sans relecture. Elles se préviennent à la préparation, par des règles écrites.",
            'items' => [
                ['titre' => "Laisser l'assistant compléter un tableau d'indicateurs", 'texte' => "Un assistant à qui l'on demande de rédiger des résultats comble volontiers les trous avec des nombres plausibles. Il ne reçoit que des chiffres déjà calculés, et chaque nombre du texte final est pointé contre la base du projet."],
                ['titre' => "Coller une liste de bénéficiaires dans un compte gratuit", 'texte' => "Sous la pression d'une échéance, on prend le chemin le plus court. La grille verte, orange, rouge sert à décider vite, et la question d'un transfert vers un pays tiers se pose avant, pas après."],
                ['titre' => "Inventer ou arrondir la parole d'un bénéficiaire", 'texte' => "Un témoignage reconstruit par un assistant trompe le lecteur et trahit la personne. Une citation a été dite, recueillie avec un consentement, et rapportée fidèlement."],
                ['titre' => "Traduire vers une langue nationale sans relecture", 'texte' => "Un texte en wolof ou en pulaar produit par un assistant est relu par un locuteur avant tout usage. Une question mal traduite fausse la réponse de toute une enquête."],
                ['titre' => "Un compte payé par chaque salarié", 'texte' => "Trois abonnements sur trois cartes personnelles, sans règle commune, coûtent plus et se contrôlent moins. Un compte au nom de l'organisation, géré par une personne, règle le coût, les accès et le départ d'un salarié avec ses conversations."],
                ['titre' => "Repousser l'écriture des règles de données", 'texte' => "Les règles d'équipe s'écrivent avant le premier usage sur des données réelles : ce qui peut entrer dans un assistant, ce qu'on anonymise d'abord, ce qui ne sort jamais. On les ajuste ensuite si le cadre évolue."],
                ['titre' => "Envoyer un rapport au bailleur sans relecture croisée", 'texte' => "Au bout de quelques jours, les textes de l'assistant paraissent fiables et la relecture saute. Un rapport engage l'organisation : une personne nommée vérifie, signe et en répond."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former une équipe d'ONG sénégalaise avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà travaillé au Sénégal, comme dans " . (count((array) fait('pays_travailles')) - 1) . " autres pays dont le Bénin, la Côte d'Ivoire, le Togo et le Mali. Pour les équipes d'ONG et de projets, il peut former à distance à l'usage des assistants d'IA, en partant de vos rapports et de vos tableaux. La page des <a href='/realisations/'>réalisations</a> présente ses projets ; aucun n'est situé au Sénégal.",
                "Il n'est ni évaluateur ni spécialiste du suivi-évaluation, et la formation ne prétend pas l'être. Avec " . $ans . " ans d'expérience dans le numérique et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il déclare plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées au numérique, à l'IA, à l'automatisation et aux ERP. Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href='https://audyxa.com'>Audyxa</a>.",
                "Sa façon de former tient en engagements vérifiables : une réponse sous 24 heures, un ou deux entretiens de cadrage qui peuvent conclure qu'un atelier court suffit, un questionnaire avant la session, des exercices construits sur vos documents, une épreuve finale sur une tâche réelle, des supports modifiables et une attestation nominative. Il n'est certifié par aucun éditeur d'IA et ne se présente comme partenaire d'aucun. Pour le socle de la méthode, voir la formation <a href='/formations/ia-en-entreprise'>IA en entreprise</a> ; pour les règles de données en détail, <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a> ; pour lire un indicateur avant de le rapporter, <a href='/formations/data-literacy'>décider avec les données</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre prochain rapport à un bailleur approche-t-il ?",
            'texte'  => "Indiquez le nombre de personnes, leurs fonctions, le bailleur et le format du prochain rapport, les outils déjà en place et la ville. Vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => "Demander une formation IA pour mon équipe"],
        ],
    ],

    'faq' => [
        ['q' => "Un formateur IA peut-il remplacer une formation en suivi-évaluation pour mon équipe ?", 'r' => "Non. Richard peut former à l'usage des assistants d'IA ; il ne traite ni la conception d'un cadre de résultats, ni les méthodes d'évaluation, ni l'échantillonnage d'une enquête. Ces méthodes restent celles de votre organisation et de votre bailleur."],
        ['q' => "Qui peut former mon équipe d'ONG à l'IA à Dakar ou dans les régions du Sénégal ?", 'r' => "Richard SALANON peut former à distance, depuis Cotonou, les équipes d'ONG et de projets sénégalaises à ChatGPT, Claude, Gemini et Copilot sur leurs propres documents. Les séances suivent vos heures de bureau, en français. Il n'est certifié par aucun éditeur d'IA, et le devis est établi en FCFA."],
        ['q' => "Peut-on utiliser un assistant d'IA pour rédiger un rapport à un bailleur ?", 'r' => "Oui, pour un premier jet, une reformulation ou une traduction, à partir de fiches anonymisées et d'un tableau d'indicateurs déjà calculé. Chaque chiffre est ensuite vérifié contre la base du projet, et une personne nommée valide le rapport avant l'envoi."],
        ['q' => "Peut-on mettre une liste de bénéficiaires dans ChatGPT ou Claude ?", 'r' => "Non. La loi n° 2008-12 range notamment les données de santé et celles qui relèvent des mesures d'ordre social parmi les données sensibles, et son article 49 encadre le transfert vers un pays tiers. On travaille sur des extraits anonymisés, ou sur des outils encadrés par un contrat. Pour un cas précis, la CDP ou votre juriste tranche."],
        ['q' => "Quelle loi protège les données des bénéficiaires d'un projet au Sénégal ?", 'r' => "La loi n° 2008-12 du 25 janvier 2008, référencée par WIPO Lex, dont l'application relève de la Commission des données personnelles (CDP). La CDP confirme le texte applicable à votre situation."],
        ['q' => "Une ONG étrangère qui collecte au Sénégal est-elle concernée par cette loi ?", 'r' => "L'article 2 de la loi vise un traitement mis en oeuvre par un responsable établi ou non sur le territoire sénégalais, lorsqu'il utilise des moyens de traitement situés dans le pays, hors simple transit. Faites confirmer l'application à votre projet par un juriste ou par la CDP."],
        ['q' => "Le 3FPT peut-il financer une formation IA pour une équipe d'ONG ?", 'r' => "Son site ouvre des guichets pour le personnel des entreprises, les membres d'organisations professionnelles, les demandes individuelles et les établissements de formation, sans publier les critères. Aucune prise en charge n'est garantie : interrogez le fonds par écrit, programme et devis à l'appui."],
        ['q' => "Que dit-on de la connexion en zone rurale au Sénégal pour une formation à distance ?", 'r' => "Selon l'enquête ARTP et ANSD présentée en juillet 2025, 43,8 % des ménages de Dakar ont un abonnement internet à domicile contre 3 % en milieu rural. La formation se tient avec un ordinateur et une connexion stable, documents téléchargés à l'avance, et une solution de repli par téléphone en cas de coupure."],
        ['q' => "Les assistants d'IA savent-ils travailler en wolof ou en pulaar ?", 'r' => "Ils écrivent bien en français. Pour un texte en wolof ou en pulaar, le résultat est relu par un locuteur avant tout usage, et une traduction de questionnaire se teste à voix haute avec les enquêteurs. Selon l'ANSD, le wolof est utilisé par 53,5 % des personnes de 3 ans ou plus et le pulaar par 26,3 %."],
        ['q' => "Quel est le décalage horaire entre Dakar et Cotonou ?", 'r' => "Une heure : Dakar vit à l'heure GMT et Cotonou à GMT+1, toute l'année. Une séance à 9 h à Dakar se tient à 10 h à Cotonou."],
        ['q' => "Combien coûte la formation, et en quelle monnaie ?", 'r' => "Le prix est fixé sur devis, en FCFA, après l'échange de cadrage. Il varie selon le nombre de participants, le nombre de séances, la préparation sur vos documents et l'accompagnement après la session. Les abonnements aux assistants restent à votre charge."],
        ['q' => "Reçoit-on une attestation en fin de formation ?", 'r' => "Oui, une attestation nominative, avec le programme, les supports et les feuilles de présence. Ce n'est ni un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "Le Soleil, accords et conventions financiers du Sénégal en 2026 : un portefeuille de bailleurs diversifié (3 août 2026)", 'url' => 'https://lesoleil.sn/actualites/economie/accords-et-conventions-financiers-du-senegal-un-portefeuille-de-bailleurs-assez-diversifie-en-2026/', 'date' => '2026-10-26'],
        ['titre' => "Germany Trade and Invest, programme indicatif pluriannuel 2021-2027 de l'Union européenne pour le Sénégal (222 millions d'euros)", 'url' => 'https://www.gtai.de/de/trade/senegal/entwicklungsprojekte/-mehrjahresrichtprogramm-senegal-2021-2027-784904', 'date' => '2026-10-26'],
        ['titre' => "Senego, suspension de l'aide américaine : un impact majeur sur les ONG sénégalaises (22 février 2025)", 'url' => 'https://senego.com/suspension-de-laide-americaine-un-impact-majeur-sur-les-ong-senegalaises_1807857.html', 'date' => '2026-10-26'],
        ['titre' => "Senego, suspension de la coopération USAID : le CONGAD soutient ONG et populations vulnérables (28 mars 2025)", 'url' => 'https://senego.com/suspension-cooperation-usaid-le-congad-soutient-ong-et-populations-vulnerables_1820360.html', 'date' => '2026-10-26'],
        ['titre' => "AllAfrica, atelier du CONGAD à Kolda avec la GIZ sur le financement des organisations (20 mai 2026)", 'url' => 'https://fr.allafrica.com/stories/202605200698.html', 'date' => '2026-10-26'],
        ['titre' => "ICNL, décret n° 96-103 du 8 février 1996 modifiant le décret n° 89-775 du 30 juin 1989 fixant les modalités d'intervention des ONG", 'url' => 'https://www.icnl.org/research/library/senegal_decree/', 'date' => '2026-10-26'],
        ['titre' => "WIPO Lex, loi n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel (articles 2, 4 et 49)", 'url' => 'https://www.wipo.int/wipolex/fr/legislation/details/6229', 'date' => '2026-10-26'],
        ['titre' => "WIPO Lex, texte intégral en PDF de la loi n° 2008-12 (articles 2, 4 et 49)", 'url' => 'https://www.wipo.int/wipolex/edocs/lexdocs/laws/fr/sn/sn009fr.pdf', 'date' => '2026-10-26'],
        ['titre' => "Le Soleil, accès à internet : enquête ARTP et ANSD, abonnements à domicile à Dakar et en milieu rural (18 juillet 2025)", 'url' => 'https://lesoleil.sn/actualites/technologie/acces-a-internet-le-senegal-a-enregistre-une-progression-de-194-en-2024/', 'date' => '2026-10-26'],
        ['titre' => "Osiris, le Sénégal cherche à réduire les disparités d'accès à internet en milieu rural (échantillon de l'enquête de 2024)", 'url' => 'https://osiris.sn/le-senegal-cherche-a-reduire-les-disparites-d-acces-a-internet-en-milieu-rural.html', 'date' => '2026-10-26'],
        ['titre' => "Vie publique du Sénégal, RGPH-5 2023 : état et structure de la population, rapport définitif de l'ANSD (langues nationales)", 'url' => 'https://www.vie-publique.sn/documents/10517/etat-structure-urbanisation-caracteristiques-socioculturelles-population-rgph-5-2023-ansd', 'date' => '2026-10-26'],
        ['titre' => "KoboToolbox, documentation : ajouter des traductions et des langues à un formulaire", 'url' => 'https://support.kobotoolbox.org/language_dashboard.html', 'date' => '2026-10-26'],
        ['titre' => "KoboToolbox, documentation : collecter des données avec KoboCollect, hors connexion", 'url' => 'https://support.kobotoolbox.org/data_collection_kobocollect.html', 'date' => '2026-10-26'],
        ['titre' => "3FPT, site du fonds : guichets de financement et demande en ligne", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-26'],
        ['titre' => "AllAfrica et Le Soleil, conventions de financement entre le 3FPT et des organisations patronales (15 juillet 2026)", 'url' => 'https://fr.allafrica.com/stories/202607160216.html', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['data-literacy', 'power-bi-looker-studio', 'ia-en-entreprise', 'outils-collaboratifs', 'ia-ethique-conformite'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
