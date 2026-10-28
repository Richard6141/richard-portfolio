<?php
// ============================================================
// data/metiers/banques-microfinance/niger.php · Formation IA du personnel des banques et des
// institutions de microfinance du Niger (couple métier + pays, statut « peut former »).
// Sources lues le 27/10/2026 : BCEAO (indicateurs des SFD au 30/09/2025 publiés le 22/01/2026, liste
// des établissements de monnaie électronique au 28/02/2026, tableau de bord de l'inclusion financière
// 2025 daté de septembre 2026), Commission bancaire de l'UMOA (liste des établissements agréés au
// Niger mise à jour le 29/06/2026, panorama au 31/12/2025), Financial Afrik (31/08/2026 : début de
// l'article seulement, accès réservé ; 05/03/2026), economie-ivoirienne.ci (tableau d'après la
// Commission bancaire, fin 2024), Banque mondiale (API), loi n° 2023-31 du 4 juillet 2023 (en-tête et
// article 6), document du Fonds commun sectoriel de l'éducation (mai 2020), IANA.
// Non lus et donc non cités : texte de la loi n° 2022-59 au-delà de son intitulé, loi n° 2019-03,
// textes de l'UMOA sur la lutte contre le blanchiment et sur les SFD, rapport 2025 de la Commission
// bancaire pays par pays (le résumé lu ne donne pas de chiffre du Niger), classement complet des
// banques nigériennes de 2025 (article réservé aux abonnés), texte de création du FAFPA.
// Écarts signalés : 37 SFD (BCEAO, hors caisses affiliées aux réseaux, et tableau de bord 2025) et 4
// SFD relevant de l'article 44 (Commission bancaire) viennent de périmètres différents ; 99 points de
// service (échantillon de 8 SFD) et 170 (tableau de bord 2025) également. Le décompte des
// établissements financiers diffère entre deux publications : seul le nombre de banques (14) est repris.
// Aucun projet client du Niger dans projets-clients.php (vérifié). Aucun propos sur la sécurité ou la politique.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les équipes des banques et des IMF du Niger : dossiers de crédit, états d'arriérés et explications aux clients de la monnaie électronique préparés avec un assistant, sur des cas inventés",
    'title'   => "Formation IA banque et microfinance Niger | Richard SALANON",
    'meta'    => "Formation IA pour le personnel des banques et de la microfinance au Niger : crédit, arriérés, monnaie électronique, données. À distance, devis en FCFA.",
    'en_bref' => "Qui peut former à l'IA les salariés des banques et des institutions de microfinance nigériennes ? Richard SALANON, consultant basé à Cotonou, peut conduire la session par visioconférence, en français, autour de dossiers fictifs de crédit, d'arriérés et de relation client. Niamey vit à la même heure légale que Cotonou. Le devis est libellé en FCFA, et aucune donnée de client réel ne sert aux exercices.",
    'publie'  => '2027-01-01',
    'maj'     => '2027-01-01',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Comment choisir la personne qui initiera à l'IA vos agents de Niamey, de Zinder ou de Maradi, et que lui demander avant de signer ?",
            'paragraphes' => [
                "Depuis Cotonou, Richard SALANON peut animer à distance une session pour les salariés des banques et des institutions de microfinance du Niger. Le programme part d'une semaine ordinaire : un chargé de clientèle prépare une réponse, un agent de crédit monte un dossier, un responsable d'agence présente ses arriérés au comité. Les exercices s'appuient sur ChatGPT, Claude ou Gemini et sur des cas fictifs. Il n'exerce pas le métier de banquier ni celui de juriste, et ne détient aucune certification d'éditeur d'IA. Les devis sont en FCFA.",
                "Pour départager deux propositions, comparez ce que chaque agent saura exécuter seul le lendemain matin. Une présentation d'outil séduit le temps d'un après-midi, puis l'agent se retrouve devant un champ de saisie sans savoir quoi y écrire. Une formation de métier le fait rédiger la synthèse d'un dossier et trier un export de portefeuille, avant de lui faire reprendre l'exercice seul, montre en main, en confrontant chaque chiffre à celui du logiciel de l'établissement.",
                "Avant de retenir un intervenant, interrogez-le. Construit-il ses exercices avec des dossiers fictifs, ou réclame-t-il des pièces réelles ? Le support passe-t-il par votre conformité avant la première séance ? Sait-il dire où va un texte saisi dans un assistant en ligne ? Et que garde l'établissement ensuite : des diapositives, ou des supports et des exercices corrigés qu'il peut modifier ?",
                "Cette formation ne dispense personne de lire les circulaires de la BCEAO ni de suivre les consignes de la hiérarchie. Elle intervient une fois ces règles connues, pour aider chaque agent à produire plus vite ses écrits et ses tableaux, sans lui retirer la décision ni le contrôle.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quatorze banques et un seul établissement de monnaie électronique : quelle est la carte du secteur financier nigérien, et où se décide l'usage d'un assistant ?",
            'paragraphes' => [
                "La liste des établissements agréés au Niger, mise à jour par la Commission bancaire de l'UMOA le 29 juin 2026, recense quatorze banques : dix banques de droit nigérien, parmi lesquelles la Banque agricole du Niger, la Banque de l'habitat du Niger, la Banque islamique du Niger, la Société nigérienne de banque (SONIBANK) ou la Banque commerciale du Niger, et quatre succursales de banques étrangères. Elle compte aussi un établissement financier de crédit, cinq établissements de paiement et un établissement de monnaie électronique, Airtel Money Niger. Le panorama de la Commission bancaire au 31 décembre 2025 confirme les quatorze banques, dont quatre succursales.",
                "Côté taille, un tableau repris par economie-ivoirienne.ci d'après la Commission bancaire donne au Niger un total de bilan de 2 430 milliards de FCFA à la fin de 2024, soit 3,4 % du système bancaire de l'UMOA. Ce total date de 2024. Financial Afrik, qui publie le 31 août 2026 un classement des dix premières banques nigériennes fondé sur le rapport 2025 de la Commission bancaire, décrit un marché à deux vitesses : SONIBANK en tête, suivie d'un groupe de banques privées régionales où figurent BOA Niger, Ecobank Niger et Coris Bank International Niger. Le classement complet est réservé aux abonnés du média.",
                "Ce qu'il faut en retenir pour un projet de formation tient en peu de mots. Dans un pays qui compte quatorze banques, les règles sur les outils numériques peuvent se fixer au siège, parfois dans une maison mère installée dans un autre pays de l'UMOA ou de l'Afrique de l'Ouest. L'agent d'une succursale ne choisit donc pas toujours son assistant : l'atelier de départ réunit ceux qui décident, avant ceux qui exécutent.",
                "Dans l'édition 2025 de son tableau de bord de l'inclusion financière, datée de septembre 2026, la BCEAO indique pour le Niger 490 points de services bancaires et 1 349 461 comptes bancaires, contre 170 points de services et 1 180 131 comptes pour les institutions de microfinance. Banque et microfinance se partagent donc un nombre voisin de comptes avec des réseaux de taille très différente, ce qui invite à ne pas traiter les deux publics de la même façon.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que montrent les indicateurs de la microfinance au Niger fin 2025, et pourquoi trois décomptes d'institutions coexistent-ils ?",
            'paragraphes' => [
                "La publication de la BCEAO du 22 janvier 2026, qui arrête les données au 30 septembre 2025, attribue au Niger 37 systèmes financiers décentralisés (SFD), dont 8 forment l'échantillon de la BCEAO. Ces huit institutions totalisent 99 points de service, 314 251 membres ou clients, 26 449,1 millions de FCFA de dépôts et 12 541,3 millions de FCFA de crédits en cours. Les créances en souffrance s'élèvent à 1 351,5 millions, ce qui donne un taux de dégradation du portefeuille de 10,8 %, contre 10,2 % pour l'ensemble de l'Union selon la même publication. Les dépôts de l'échantillon pèsent ainsi un peu plus de deux fois ses crédits en cours, un rapport calculé à partir de ces deux chiffres.",
                "Un lecteur pressé voit parfois trois nombres différents. La BCEAO compte 37 SFD, en excluant les caisses affiliées aux réseaux. Le tableau de bord 2025 reprend ce chiffre de 37 institutions, mais avec 170 points de service et 1 180 131 comptes, un périmètre plus large que l'échantillon de huit. La Commission bancaire, elle, recense 4 SFD couverts par l'article 44 à la fin de 2025 : deux institutions de premier niveau affiliées à un réseau, une association et un réseau. On cite un de ces nombres avec sa source et sa date, jamais l'écart entre deux.",
                "Pour l'agent de crédit d'une institution nigérienne, cela rappelle une chose concrète : l'échantillon est modeste, et l'assistant ne remplace pas le rapport de l'institution. Quand un directeur lui demande de comparer son portefeuille au secteur, il vérifie de quelle source vient chaque chiffre avant de le placer dans une présentation.",
                "Le taux de 10,8 % décrit un échantillon de huit institutions, il ne résume ni chaque caisse ni le métier. C'est précisément pourquoi la formation insiste sur un travail ordinaire du recouvrement : classer les arriérés par ancienneté, repérer les agences où le retard s'allonge, préparer le message de rappel, tout en laissant la décision de rééchelonner à la personne habilitée.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels huit chiffres du Niger retenir avant d'ouvrir la première séance, et que valent leurs sources ?",
            'items' => [
                ['valeur' => '14', 'libelle' => "Banques agréées au Niger au 29 juin 2026, dont quatre succursales de banques étrangères.", 'source' => "Commission bancaire de l'UMOA, liste des établissements agréés (Niger)", 'url' => 'https://www.bceao.int/sites/default/files/inline-files/6%20-%20Liste%20Niger_2026.pdf'],
                ['valeur' => '2 430 milliards', 'libelle' => "Total de bilan du système bancaire nigérien à fin 2024, soit 3,4 % de celui de l'UMOA.", 'source' => "economie-ivoirienne.ci d'après la Commission bancaire", 'url' => 'https://economie-ivoirienne.ci/banques-et-finances/presentation-du-systeme-bancaire-ivoirien.html'],
                ['valeur' => '37', 'libelle' => "SFD du Niger à fin septembre 2025, hors caisses affiliées aux réseaux ; l'échantillon en retient 8, avec 99 points de service et 314 251 membres ou clients.", 'source' => "BCEAO, indicateurs des SFD de l'UMOA, 22 janvier 2026", 'url' => 'https://www.bceao.int/sites/default/files/2026-02/Indicateurs%20au%2030%20septembre%202025.pdf'],
                ['valeur' => '10,8 %', 'libelle' => "Taux de dégradation du portefeuille des 8 SFD de l'échantillon : 1 351,5 millions de FCFA de créances en souffrance sur 12 541,3 millions de crédits en cours.", 'source' => "BCEAO, tableau des SFD de l'UMOA, 22 janvier 2026", 'url' => 'https://www.bceao.int/sites/default/files/2026-02/Indicateurs%20au%2030%20septembre%202025.pdf'],
                ['valeur' => '9', 'libelle' => "Lignes nigériennes de la liste BCEAO au 28 février 2026 : un établissement de monnaie électronique et huit partenariats associant un établissement à un prestataire.", 'source' => "BCEAO, établissements de monnaie électronique", 'url' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique'],
                ['valeur' => '1 138 126', 'libelle' => "Comptes de monnaie électronique actifs au Niger en 2025, sur 10 490 289 comptes ouverts, selon le tableau de bord de l'inclusion financière.", 'source' => "BCEAO, tableau de bord de l'inclusion financière 2025", 'url' => 'https://www.bceao.int/sites/default/files/2026-10/Tableau%20de%20bord%20de%20l%27inclusion%20financi%C3%A8re%20dans%20l%27UEMOA-2025.pdf'],
                ['valeur' => '4', 'libelle' => "Institutions du Niger autorisées à ouvrir les services du PI-SPI au public, parmi plus de 70 dans l'Union, d'après la liste publiée depuis le 24 février 2026.", 'source' => "Financial Afrik, 5 mars 2026", 'url' => 'https://www.financialafrik.com/2026/03/05/paiements-instantanes-pi-spi-dans-luemoa-liste-actualisee-des-etablissements-autorises-par-la-bceao/'],
                ['valeur' => '14,8 %', 'libelle' => "Adultes nigériens titulaires d'un compte (institution financière ou monnaie mobile) en 2024, contre 11,7 % en 2022.", 'source' => "Banque mondiale, Global Findex", 'url' => 'https://data.worldbank.org/indicator/FX.OWN.TOTL.ZS?locations=NE'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels textes lire avant de laisser un assistant approcher un dossier de banque ou de SFD au Niger ?",
            'intro' => "Seuls l'intitulé et la date de chaque texte figurent ici. La conformité les lit, et un juriste tranche lorsqu'un cas prête à doute.",
            'items' => [
                ['titre' => "Les données personnelles", 'texte' => "La loi n° 2022-59 du 16 décembre 2022 relative à la protection des données à caractère personnel a été modifiée par la loi n° 2023-31 du 4 juillet 2023. L'article 6 de ce second texte crée la Haute Autorité de Protection des Données à caractère Personnel (HAPDP) et la rattache à la Présidence de la République. Aucun autre article n'est commenté ici. Avant tout essai, la question reste celle-ci : quel assistant l'établissement admet-il, et quelles données y entrent ? Les exercices n'emploient que des données inventées."],
                ['titre' => "Les règles de l'UMOA et de la BCEAO", 'texte' => "Vigilance sur la clientèle, déclaration de soupçon, règles propres à la monnaie électronique et aux SFD relèvent de textes communs aux huit États de l'Union, que cette page ne résume pas. Un dossier jugé suspect n'est jamais confié à l'assistant : la déclaration se décide auprès du responsable de la conformité."],
                ['titre' => "Le paiement instantané", 'texte' => "Selon Financial Afrik (5 mars 2026), la liste des acteurs habilités à proposer le PI-SPI au public comprend plus de 70 institutions dans l'Union, quatre étant nigériennes ; l'article n'en donne pas les noms. Pour un client, l'agent ne cite que ce que son établissement a confirmé par écrit."],
                ['titre' => "Les politiques internes", 'texte' => "Charte d'usage des outils, règle sur les téléphones personnels, liste des assistants admis : ces documents se rédigent dans chaque établissement ; la formation n'en fournit pas de modèle prêt à signer."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Wave au nom de deux banques, MyNITA, Amanata : que dit la liste nigérienne de la monnaie électronique, et que doit savoir dire l'agent ?",
            'paragraphes' => [
                "La liste de la BCEAO arrêtée au 28 février 2026 comporte neuf lignes pour le Niger. La première est l'établissement de monnaie électronique Airtel Niger, pour Airtel Money. Les huit autres associent un établissement et un prestataire : BOA-Niger et Orange Niger pour Orange Money, Banque Atlantique Niger et Atlantique Telecom pour Moov Flooz, Ecobank Niger et Wave Mobile Money pour Wave, Coris Niger et M2I pour Coris Money, NITA et 2iSoft pour MyNITA, BIA Niger et Wave Mobile Money pour Wave également, Amana Transfert d'Argent Finance et 2iSoft pour Amanata, enfin Al Izza Transfert d'Argent International et Al Izza pour Al Izza Business Pay.",
                "Deux détails frappent. D'abord, Wave apparaît deux fois, adossé à deux banques différentes : un client qui dit « mon compte Wave » ne désigne donc pas forcément le même partenaire bancaire qu'un autre. Ensuite, plusieurs lignes associent un établissement de transfert d'argent plutôt qu'une banque, ce que la liste des établissements de paiement du 29 juin 2026 rend lisible : on y trouve Al-Izza, Amana, le Bureau national d'intermédiation financière (BNIF Afuwa), Niger Transfert d'Argent (NITA) et iFutur. Un assistant généraliste peut confondre ces maisons et prêter à l'une ce que fait l'autre.",
                "L'exercice central consiste donc à reformuler une fiche déjà approuvée par la conformité pour un client qui hésite entre deux services, sans y ajouter un seul fait. L'agent compare ensuite chaque nom d'opérateur à la liste officielle avant de diffuser le texte.",
                "Les volumes expliquent l'enjeu. Le tableau de bord 2025 compte, pour le Niger, 9 émetteurs de monnaie électronique, 66 713 points de services actifs, 10 490 289 comptes ouverts dont 1 138 126 actifs, soit environ 11 % : ce rapport se calcule à partir de ces deux chiffres. Un compte ouvert n'est pas un client régulier : le tableau de bord tient un compte pour inactif après trois mois sans utilisation.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que dit la monétique nigérienne de la place de la carte face au mobile ?",
            'paragraphes' => [
                "Dans le même tableau de bord, les établissements du Niger ont émis 304 548 cartes en 2025, dont 229 900 adossées à un compte bancaire et 74 648 prépayées, et exploitent 277 guichets automatiques et 265 terminaux de paiement. Les transactions monétiques recensées pour le Niger portent sur 3 614 840 opérations, pour 349 milliards de FCFA. Ces nombres concernent le pays seul ; les totaux de l'Union, bien plus grands, ne se transposent pas.",
                "Ces écarts font attendre deux types de questions de la part des clients : celle de qui veut savoir où retirer, et celle du commerçant qui demande s'il peut encaisser autrement qu'en espèces. Les réponses dépendent des produits de l'établissement, que seul le support officiel décrit. L'assistant sert à mettre ces réponses en forme, jamais à décider ce que la banque propose.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans une agence ou un guichet de SFD nigérien, quelles tâches confier en partie à l'assistant, et que revérifie l'agent ?",
            'legende' => "Huit exercices sur dossiers fictifs. Seuls les outils tolérés par la direction servent ; les conditions d'usage des éditeurs changent.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', "Contrôle par l'humain"],
            'lignes'  => [
                ["Synthèse d'un dossier de crédit pour un négociant en céréales de Maradi ou de Zinder", "Claude ou ChatGPT, par l'abonnement professionnel de la structure", "Plan de synthèse : activité, cycle d'achat et de vente, besoin, garanties, questions pour la visite", "L'agent écrit lui-même les constats de la visite et recalcule l'échéancier dans le tableur"],
                ["Classement des arriérés d'une agence selon l'ancienneté du retard", "Excel ou Google Sheets, formules proposées par l'assistant", "Trois tranches d'ancienneté et la part de l'encours dans chacune", "L'agent refait deux totaux à la main et rapproche les colonnes de l'export du logiciel"],
                ["Message de rappel à un emprunteur dont l'échéance est passée", "ChatGPT ou Gemini, pour le ton", "Quelques phrases polies, utilisables aussi comme trame d'appel", "La direction approuve le modèle une fois ; la somme due vient du logiciel"],
                ["Fiche expliquant à un client la différence entre son compte et son portefeuille mobile", "Assistant, à partir d'un texte validé par la conformité", "Trois lignes : qui tient les fonds, qui exécute l'opération, qui traite une réclamation", "Chaque nom d'opérateur est rapproché de la liste de la BCEAO avant diffusion"],
                ["Réponse à un client qui demande pourquoi son transfert n'est pas arrivé", "Assistant, pour reformuler la procédure de l'établissement", "Réponse courte avec les étapes de vérification, sans promesse de délai", "Un collègue relit ; le dossier de réclamation garde la trace de l'échange"],
                ["Tableau de bord mensuel d'une agence : dépôts, crédits décaissés, retards", "Tableur avec aide à la mise en forme", "Une page de lecture pour le comité", "L'auteur confronte chaque total à la situation produite par le système d'information"],
                ["Relevé écrit après un comité de crédit", "Logiciel de traitement de texte, si la direction l'autorise", "Tableau court : décision prise, personne responsable, date butoir", "Le secrétaire confronte chaque ligne au procès-verbal signé"],
                ["Fiche d'accueil pour le nouvel agent d'une caisse éloignée", "Claude ou ChatGPT, depuis un compte ouvert par l'établissement", "Une dizaine de repères, chacun relié à un chapitre du manuel interne", "L'auteur rouvre le manuel à chaque renvoi avant de remettre la fiche"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un réseau électrique à 21,3 %, un internet à 15,6 % : comment organiser une séance à distance avec des agences nigériennes ?",
            'paragraphes' => [
                "Les indicateurs de la Banque mondiale placent l'accès à l'électricité du Niger à 21,3 % de la population en 2024, contre 20,1 % en 2023. La part des habitants utilisant internet s'établit à 15,6 % en 2024, après 13,0 % en 2023, et le pays compte 60,6 abonnements de téléphonie mobile pour 100 habitants en 2024, contre 65,7 en 2023. On cite une série avec son producteur. Quelle que soit la série retenue, ces moyennes ne disent rien d'une agence précise.",
                "Au cadrage, chaque établissement indique donc quels postes disposent d'un ordinateur, d'une connexion stable et d'un secours en cas de coupure de courant. Les pièces d'exercice sont envoyées avant la séance, les participants peuvent les ouvrir sur leur poste, et les cas se travaillent sur les tableurs de l'établissement, pas sur un outil à installer. Les assistants étant accessibles en ligne, chaque participant doit disposer d'une liaison stable ; une solution de repli est prévue en cas de coupure. Chaque séance à distance dure 2 h 30.",
                "La langue de la formation est le français, celle de la plupart des documents bancaires. Au guichet, l'échange avec un client peut se tenir dans une langue nationale : un montant, une échéance ou un taux ne passent pas par un assistant généraliste sans la relecture d'un collègue qui la parle.",
                "Pour la planification, la base de l'IANA classe Africa/Niamey comme un lien vers Africa/Lagos, tout comme Africa/Porto-Novo, la zone de Cotonou. Niamey et Cotonou sont donc toutes deux à UTC+1, sans décalage et sans changement d'heure : une séance fixée à 10 h à Cotonou commence à 10 h à Niamey.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Siège à Niamey, agences à l'intérieur du pays ou petite SFD : quelle formule choisir ?",
            'legende' => "Chaque formule se déroule en visioconférence depuis Cotonou, avec les durées et les effectifs de la fiche du parcours IA en entreprise.",
            'entetes' => ['Formule', 'Durée', 'Effectif', 'Cas typique'],
            'lignes'  => [
                ["Atelier découverte pour la direction, la conformité et le contrôle interne", "Une demi-journée", "12 personnes au plus", "Trancher, avant tout déploiement, ce qu'un agent peut soumettre à un assistant et ce qui reste hors de l'outil"],
                ["Formation complète pour un poste", "2 jours, en 4 demi-journées", "10 personnes au plus, par métier", "Agents de crédit ou chargés de clientèle qui ont déjà adopté un assistant, chacun selon ses habitudes"],
                ["Séances à distance", "5 à 6 séances de 2 h 30", "8 personnes au plus", "Agences dispersées, dont le personnel ne peut s'absenter plusieurs jours d'affilée"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant 3 mois", "Le groupe déjà formé", "Mettre à jour les consignes de travail dès qu'un produit, une procédure ou une liste d'opérateurs évolue"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que fait un participant nigérien pendant la session : quatre scénarios de banque et de microfinance ?",
            'intro' => "Tous les dossiers sont inventés. Pour chaque cas : la situation, la consigne remise, puis ce que la personne contrôle avant de se servir du résultat.",
            'items' => [
                ['titre' => "Scénario 1 : un négociant en céréales demande une ligne de crédit avant la soudure", 'texte' => "Situation : un agent de crédit imaginaire d'une agence de Maradi reçoit le dossier d'un négociant fictif. Consigne : demander à l'assistant un plan de note et une liste de questions pour la visite du magasin, puis rédiger lui-même ce qu'il a constaté sur place. Contrôles : il refait l'échéancier dans le tableur et rattache chaque montant cité à une pièce du dossier."],
                ['titre' => "Scénario 2 : une cliente croit son transfert perdu", 'texte' => "Situation : une cliente imaginaire écrit qu'un envoi par portefeuille mobile n'est pas arrivé. Consigne : composer avec l'assistant trois phrases d'explication, à partir de la procédure approuvée de l'établissement, sans promettre de délai. Contrôles : chaque mot est comparé au document officiel, un collègue relit, l'échange est consigné dans le dossier de réclamation."],
                ['titre' => "Scénario 3 : deux « Wave » dans la même agence", 'texte' => "Situation : deux clients fictifs disent avoir un compte Wave, l'un par une banque, l'autre par une autre. Consigne : rédiger une fiche de trois lignes qui distingue les deux partenaires bancaires de la liste de la BCEAO, en partant d'un texte validé par la conformité. Contrôles : les noms sont vérifiés dans la liste du 28 février 2026, et aucun service n'est annoncé sans confirmation de la direction."],
                ['titre' => "Scénario 4 : une responsable d'agence prépare sa part du comité", 'texte' => "Situation : une responsable fictive d'une agence de Tahoua doit exposer au comité les arriérés du mois écoulé. Consigne : monter le tableau avec les formules suggérées par l'assistant, puis écrire un commentaire de trois lignes qui ne préjuge pas de la décision du comité. Contrôles : deux totaux refaits à la main, deux mois comparés, chaque titre de colonne relu."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut payer la formation IA d'une banque ou d'une SFD nigérienne, et que prévoir si personne ne la finance ?",
            'paragraphes' => [
                "Aucune prise en charge n'est acquise. Le Fonds d'appui à la formation professionnelle et à l'apprentissage (FAFPA) est cité par un document du Fonds commun sectoriel de l'éducation, daté de mai 2020, comme la structure chargée de la mise en œuvre de formations dans le cadre d'un contrat de performance avec le ministère (MEPT) : une première vague de 108 actions a bénéficié à 3 240 personnes en 2019, dans six régions, au profit de jeunes, de femmes et de personnes déjà actives. Ce texte ne parle ni de formation en entreprise ni d'établissements financiers.",
                "Avant de monter un dossier, la direction demande donc au fonds, par écrit, si une ligne existe pour des salariés d'un établissement financier et si un prestataire installé hors du Niger peut y prétendre. À défaut de réponse favorable, la dépense se prévoit dans le budget annuel de formation, échelonnée en trois temps : un atelier pour la direction et la conformité, une session par poste, puis un suivi mensuel. Les licences d'assistants, souscrites par l'établissement, ne figurent pas au devis.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Combien prévoir pour former les agents d'une banque ou d'une SFD du Niger ?",
            'intro' => "Aucun montant n'est publié : le devis, en FCFA, est dressé après le cadrage, formule par formule. Les offres des éditeurs varient ; seule leur page officielle fait foi.",
            'items' => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée réunissant direction et conformité', 'État des lieux des usages en cours', 'Règles de base sur les données', 'Avis sur la suite à donner']],
                ['offre' => 'Formation complète pour un poste', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées bâties sur vos procédures, avec des cas fictifs', 'Épreuve finale chronomètre en main', 'Attestation nominative', 'Canal direct durant le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Trois demi-journées à un mois d\'intervalle', 'Corrections apportées au fil des séances', 'Tâches supplémentaires intégrées au fil des mois']],
            ],
            'variations' => [
                "Le nombre de groupes à former et leur taille.",
                "Le nombre de séances en ligne et leur durée.",
                "Le temps de préparation des cas fictifs avec votre conformité.",
                "L'écart d'équipement entre le siège de Niamey et les agences de l'intérieur.",
                "L'ampleur du suivi après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels faux pas guettent une banque ou une SFD du Niger qui s'équipe d'un assistant d'IA ?",
            'intro' => "Mieux vaut les écarter dès la rédaction des règles d'usage.",
            'items' => [
                ['titre' => "Coller une pièce d'identité dans l'assistant de son téléphone", 'texte' => "Une pièce ou un relevé collé dans un assistant personnel quitte le système de l'établissement. La conformité se reporte à la loi n° 2022-59 et à la HAPDP ; l'outil admis est choisi par la direction, jamais par l'agence."],
                ['titre' => "Confondre 37, 8, 4 et 99", 'texte' => "Le nombre de SFD, d'institutions de l'échantillon, de SFD couverts par l'article 44 et de points de service dépend de la source et du périmètre. Une présentation retient un seul chiffre, avec sa source, et n'en retranche pas un autre."],
                ['titre' => "Prendre un Wave pour l'autre", 'texte' => "La liste de la BCEAO cite Wave avec deux banques. Écrite de mémoire, une réponse de l'assistant risque de les mêler : on la compare à la fiche validée."],
                ['titre' => "Appliquer à une seule banque un chiffre de tout le secteur", 'texte' => "Le taux de dégradation de 10,8 % décrit huit SFD, le total de 2 430 milliards décrit tout le système bancaire à fin 2024. Aucun des deux ne qualifie un établissement particulier."],
                ['titre' => "Laisser l'assistant classer les emprunteurs", 'texte' => "La décision de crédit reste humaine et motivée. L'assistant aide à constituer le dossier, il ne hiérarchise pas les demandeurs et ne remplace pas la visite."],
                ['titre' => "Négliger les établissements de paiement", 'texte' => "Les transferts d'argent passent aussi par des maisons distinctes des banques. Un support qui ne mentionne que les banques laisse l'agent sans réponse quand le client évoque l'une d'elles."],
                ['titre' => "Ne former que les guichets", 'texte' => "Direction, conformité, contrôle interne et agents de crédit utilisent les mêmes outils. Les inviter dès le premier atelier évite des consignes que personne ne met en œuvre."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier à Richard SALANON la formation IA des équipes d'une banque ou d'une SFD du Niger ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Le Niger fait partie des quinze pays où Richard a travaillé, sur place ou à distance. Il peut former à distance les agents des banques et des SFD nigériennes, Niamey et Cotonou étant à la même heure légale. La page des <a href=\"/realisations/\">réalisations</a> présente l'ensemble de ses projets.",
                "Formé à " . fait('formation')['nom'] . " en " . fait('formation')['annee'] . ", Richard cumule " . $ans . " ans dans le numérique et annonce plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées, publics confondus. Il est l'auteur de <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fonde <a href=\"https://audyxa.com\">Audyxa</a>.",
                "Banquier, il ne l'est pas ; il ne tient la conformité d'aucun établissement et ne détient aucune certification d'éditeur d'IA. Accorder un prêt, recouvrer, exercer la vigilance, déclarer un soupçon ou lire un texte de loi appartient aux professionnels et aux autorités. En amont de la session : un questionnaire, un ou deux entretiens de cadrage, des documents à télécharger. En aval : des supports, une épreuve finale chronomètre en main, une attestation nominative, une réponse à la première demande sous 24 heures et un canal direct pendant le mois suivant. Pour aller plus loin, voir les formations <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>, <a href=\"/formations/cybersecurite-employes\">cybersécurité pour les employés</a>, <a href=\"/formations/chatbot-whatsapp\">chatbot WhatsApp</a> et <a href=\"/formations/gouvernance-ia\">gouverner l'IA dans l'entreprise</a>, ou le parcours général <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Souhaitez-vous organiser une formation IA pour les agents de votre banque ou de votre SFD au Niger ?",
            'texte'  => "Indiquez votre établissement (banque ou SFD, étendue du réseau), le nombre d'agents et d'agences, les postes visés, les travaux les plus longs et votre ville. Une réponse vous parvient sous 24 heures, suivie d'une proposition et d'un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former à l'IA le personnel d'une banque ou d'une SFD au Niger ?", 'r' => "Richard SALANON, qui travaille depuis Cotonou. La session se tient en ligne, en français, avec ChatGPT, Claude ou Gemini et des dossiers fictifs. Les règles de l'établissement s'appliquent en priorité, et aucun éditeur ne l'a certifié."],
        ['q' => "Combien de banques sont agréées au Niger ?", 'r' => "Quatorze au 29 juin 2026 selon la liste de la Commission bancaire de l'UMOA, dont quatre succursales de banques étrangères. Le panorama au 31 décembre 2025 donne le même nombre."],
        ['q' => "Combien de SFD le Niger compte-t-il ?", 'r' => "La BCEAO en recense 37 à fin septembre 2025, dont 8 dans son échantillon. La Commission bancaire recense 4 SFD couverts par l'article 44 à la fin de 2025 : les périmètres diffèrent, on cite donc un chiffre avec sa source."],
        ['q' => "Que dit la BCEAO des arriérés des SFD nigériens ?", 'r' => "Sur les 8 SFD de l'échantillon, 1 351,5 millions de FCFA de créances sont en souffrance pour 12 541,3 millions de crédits en cours à fin septembre 2025, soit 10,8 %. Une formation n'agit pas sur ce taux ; elle abrège la préparation des dossiers."],
        ['q' => "Quels services de monnaie électronique figurent sur la liste de la BCEAO pour le Niger ?", 'r' => "Neuf lignes au 28 février 2026 : Airtel Money, Orange Money, Moov Flooz, Wave (deux fois, avec deux banques), Coris Money, MyNITA, Amanata et Al Izza Business Pay. Airtel Niger est le seul établissement de monnaie électronique de la liste, les autres associent un établissement et un prestataire."],
        ['q' => "Quelle loi encadre les données personnelles au Niger ?", 'r' => "La loi n° 2022-59 du 16 décembre 2022, modifiée par la loi n° 2023-31 du 4 juillet 2023, dont l'article 6 crée la HAPDP. La lecture revient à la conformité ; les exercices reposent sur des données imaginaires."],
        ['q' => "Que sait-on du PI-SPI au Niger ?", 'r' => "Quatre institutions nigériennes apparaissent dans la liste de plus de 70 acteurs que Financial Afrik commente le 5 mars 2026. Leurs noms n'y figurent pas : on ne les devine pas, on les demande à la direction."],
        ['q' => "Peut-on suivre la formation avec une connexion irrégulière ?", 'r' => "Une liaison stable est requise de chaque participant, et une solution de repli est prévue en cas de coupure. La Banque mondiale place l'accès à l'électricité à 21,3 % et l'usage d'internet à 15,6 % en 2024 : le cadrage vérifie, poste par poste, ce dont chaque agence dispose."],
        ['q' => "Quel est le décalage horaire entre Cotonou et Niamey ?", 'r' => "Aucun : la base de l'IANA classe Africa/Niamey comme un lien vers Africa/Lagos, comme Africa/Porto-Novo. Niamey et Cotonou sont à UTC+1 en toute saison."],
        ['q' => "Le FAFPA peut-il financer cette formation ?", 'r' => "Aucune prise en charge n'est confirmée. Un document de mai 2020 cite le fonds comme chargé de formations pour des jeunes, des femmes et des personnes déjà actives. Interrogez-le par écrit sur les lignes ouvertes aux salariés d'un établissement financier."],
        ['q' => "Quel prix pour une session destinée à une banque ou une SFD du Niger ?", 'r' => "Aucun montant n'est affiché. Le devis en FCFA vient après le cadrage et dépend des effectifs, du nombre de séances, de la préparation des cas fictifs et du suivi ; les licences d'outils restent à la charge de l'établissement."],
        ['q' => "Les participants reçoivent-ils une attestation ?", 'r' => "Oui : une attestation nominative est remise avec les supports. Elle n'est ni un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "Commission bancaire de l'UMOA, liste des établissements agréés au Niger (mise à jour au 29 juin 2026)", 'url' => 'https://www.bceao.int/sites/default/files/inline-files/6%20-%20Liste%20Niger_2026.pdf', 'date' => '2026-10-27'],
        ['titre' => "Commission bancaire de l'UMOA, panorama des établissements assujettis au 31 décembre 2025", 'url' => 'https://cb-umoa.org/index%2Ephp/en/landscape-reporting-institutions', 'date' => '2026-10-27'],
        ['titre' => "BCEAO, principaux indicateurs des SFD de l'UMOA au 30 septembre 2025 (22 janvier 2026)", 'url' => 'https://www.bceao.int/sites/default/files/2026-02/Indicateurs%20au%2030%20septembre%202025.pdf', 'date' => '2026-10-27'],
        ['titre' => "BCEAO, établissements de monnaie électronique (données au 28 février 2026)", 'url' => 'https://www.bceao.int/fr/content/etablissements-de-monnaie-electronique', 'date' => '2026-10-27'],
        ['titre' => "BCEAO, tableau de bord de l'inclusion financière dans l'UEMOA, année 2025 (septembre 2026)", 'url' => 'https://www.bceao.int/sites/default/files/2026-10/Tableau%20de%20bord%20de%20l%27inclusion%20financi%C3%A8re%20dans%20l%27UEMOA-2025.pdf', 'date' => '2026-10-27'],
        ['titre' => "economie-ivoirienne.ci, total de bilan des systèmes bancaires de l'UMOA à fin 2024 (d'après la Commission bancaire)", 'url' => 'https://economie-ivoirienne.ci/banques-et-finances/presentation-du-systeme-bancaire-ivoirien.html', 'date' => '2026-10-27'],
        ['titre' => "Financial Afrik, Niger : top 10 des banques, SONIBANK en tête (31 août 2026)", 'url' => 'https://www.financialafrik.com/en/2026/08/31/niger-top-10-banking-sonibank-reigns-coris-bank-accelerates-boa-and-ecobank-resist/', 'date' => '2026-10-27'],
        ['titre' => "Financial Afrik, PI-SPI : liste actualisée des établissements autorisés (5 mars 2026)", 'url' => 'https://www.financialafrik.com/2026/03/05/paiements-instantanes-pi-spi-dans-luemoa-liste-actualisee-des-etablissements-autorises-par-la-bceao/', 'date' => '2026-10-27'],
        ['titre' => "Loi n° 2023-31 du 4 juillet 2023 modifiant la loi n° 2022-59 relative à la protection des données à caractère personnel", 'url' => 'https://www.dataguidance.com/sites/default/files/loi_ndeg_2023-31_modifiant_la_loi_ndeg_2022-59.pdf', 'date' => '2026-10-27'],
        ['titre' => "Fonds commun sectoriel de l'éducation du Niger, formation professionnalisante de courte durée (mai 2020)", 'url' => 'https://www.bundesreisezentrale.admin.ch/content/dam/countries/countries-content/niger/fr/formation-profesionnalisante-de-courte-duree_FR.pdf', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, titulaires d'un compte au Niger (Global Findex)", 'url' => 'https://data.worldbank.org/indicator/FX.OWN.TOTL.ZS?locations=NE', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, individus utilisant internet au Niger", 'url' => 'https://data.worldbank.org/indicator/IT.NET.USER.ZS?locations=NE', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, accès à l'électricité au Niger", 'url' => 'https://data.worldbank.org/indicator/EG.ELC.ACCS.ZS?locations=NE', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, abonnements mobiles pour 100 habitants au Niger", 'url' => 'https://data.worldbank.org/indicator/IT.CEL.SETS.P2?locations=NE', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Niamey, Africa/Porto-Novo)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : zone Africa/Lagos", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'cybersecurite-employes', 'chatbot-whatsapp', 'gouvernance-ia', 'ia-audit-controle'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
