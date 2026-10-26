<?php
// ============================================================
// data/formations/ia-en-entreprise/benin.php · Page « formation IA par pays » :
// Bénin, le pays de Richard (Cotonou). Intervention sur place et à distance.
// Faits externes relevés le 25/10/2026 : DataReportal, ARCEP Bénin
// (interconnexion mobile money, observatoire des services financiers mobiles),
// Code du numérique (articles 391, 405, 407, 426), décret n° 2022-286 (FODEFCA),
// Edicom (e-MECeF), CIO Mag (stratégie nationale IA et mégadonnées),
// Constitution, INSAE via citypopulation, gouv.bj (Abomey-Calavi), Bpifrance,
// et les pages tarifaires d'OpenAI, Anthropic, Google, Microsoft.
// Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formateur IA en entreprise au Bénin : vos équipes utilisent ChatGPT, Claude et Gemini sur leurs propres documents, avec une règle claire sur les données personnelles',
    'title'   => 'Formateur IA en entreprise au Bénin | Richard SALANON',
    'meta'    => 'Formation IA en entreprise au Bénin : Richard SALANON, basé à Cotonou, forme vos équipes à ChatGPT, Claude et Gemini, sur place ou à distance. Sur devis.',
    'en_bref' => 'Richard SALANON, consultant en digitalisation basé à Cotonou, forme les équipes des entreprises béninoises à l\'IA : ChatGPT, Claude, Gemini et Copilot, sur leurs propres documents, dans leurs locaux à Cotonou et dans les autres villes du pays ou à distance, avec une règle claire sur les données personnelles prévue par le Code du numérique. La formation se prépare sur vos documents réels, se mesure sur une tâche de chaque participant et se prolonge par un suivi. Elle se règle sur devis, en FCFA, par Mobile Money (MTN, Moov), carte, PayPal, virement ou espèces. Les abonnements aux assistants restent à part.',
    'publie'  => '2026-11-23',
    'maj'     => '2026-11-23',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former mes équipes à l\'IA au Bénin, et comment choisir un formateur ?',
            'paragraphes' => [
                'Richard SALANON, consultant en digitalisation et développeur logiciel installé à Cotonou, forme les équipes des entreprises béninoises à l\'IA, dans leurs locaux ou à distance. Il travaille sur les documents de l\'entreprise, dans les comptes que l\'équipe gardera, avec les ordinateurs et la connexion qu\'elle a vraiment. Pour un dirigeant de Cotonou, de Parakou ou de Natitingou, la première question n\'est donc pas « quel outil », mais « qui vient chez moi et sur quoi travaille-t-on ».',
                'Un formateur IA d\'entreprise ne présente pas un logiciel : il change une façon de travailler. La différence se voit en une heure. Dans une démonstration d\'outil, le formateur montre un résultat spectaculaire sur un texte qu\'il a choisi, et les participants repartent avec l\'impression que c\'est facile. Dans une formation qui change le travail, chaque participant apporte son compte rendu de réunion, sa réponse à un client ou son tableau de stock, le traite avec l\'assistant, relit le résultat ligne à ligne et mesure le temps gagné ou perdu.',
                'Pour choisir, posez cinq questions à n\'importe quel prestataire, Richard compris. Travaille-t-il sur nos documents, ou sur des exemples de catalogue ? Que dit-il de nos données personnelles, avant le premier exercice ? Comment évalue-t-il la fin de la session ? Que reçoit chaque participant en repartant ? Que se passe-t-il le mois suivant, quand les questions arrivent ? Un prestataire qui répond précisément à ces cinq points sait former ; un prestataire qui répond « nos outils sont puissants » vend une licence.',
                'Il y a enfin une raison pratique de préférer quelqu\'un qui vit au Bénin : le fuseau est le vôtre, le français est la langue de travail, les opérateurs et les usages de paiement sont ceux que l\'équipe connaît, et aucun décalage horaire n\'est à négocier. Richard est à Cotonou, ce qui rend le présentiel simple à Cotonou et possible dans les autres villes, selon ce que le devis prévoit.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en est l\'intelligence artificielle au Bénin, pour une entreprise ?',
            'paragraphes' => [
                'Le pays est connecté d\'abord par le téléphone, et l\'IA y arrive par le téléphone. Selon DataReportal (Digital 2026), le Bénin comptait 14,9 millions d\'habitants fin 2025, dont 51,4 % en ville, 4,80 millions d\'internautes (32,2 % de la population) et 16,4 millions de connexions mobiles actives. Pour une formation, cela signifie que la moitié du travail consiste à rendre l\'usage possible sur une connexion mobile et sur le matériel de l\'équipe, avant de parler de consignes.',
                'Les pouvoirs publics ont un cadre. Selon CIO Mag, le Conseil des ministres a adopté le 18 janvier 2023 la stratégie nationale de l\'intelligence artificielle et des mégadonnées pour 2023-2027 : quatre programmes, trois phases et 123 actions touchant le secteur public comme le secteur privé, avec l\'éducation, la santé, l\'agriculture, le cadre de vie et le tourisme parmi les secteurs ciblés. Pour une entreprise, ce texte donne une direction, pas une obligation : aucune règle de la stratégie ne dit ce qu\'une PME peut envoyer à un assistant en ligne. Cette règle vient du Code du numérique, traité plus bas.',
                'Reste l\'écart entre le téléphone et l\'ordinateur. Un assistant d\'IA se pilote très bien depuis un smartphone pour répondre à un client ou reformuler un message, mais il demande un écran large pour relire un rapport, contrôler un tableau ou comparer deux versions d\'un contrat. Une organisation utile consiste à séparer les deux usages : le téléphone pour les petites tâches du terrain, l\'ordinateur pour les documents que l\'on doit vérifier.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés retenir sur le Bénin avant de former une équipe ?',
            'items' => [
                ['valeur' => '32,2 %', 'libelle' => 'Part des habitants qui utilisaient internet fin 2025, soit 4,80 millions de personnes, sur 14,9 millions d\'habitants', 'source' => 'DataReportal, Digital 2026 : Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '16,4 millions', 'libelle' => 'Connexions mobiles actives fin 2025, soit 110 % de la population ; certaines cartes SIM ne servent qu\'à la voix et aux SMS', 'source' => 'DataReportal, Digital 2026 : Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '10 926 793', 'libelle' => 'Comptes de mobile money actifs au 30 juin 2025, contre 18 448 508 comptes dormants', 'source' => 'ARCEP Bénin, observatoire des services financiers mobiles', 'url' => 'https://arcep.bj/wp-content/uploads/2025/10/Tableau-de-bord-SFM-T2_2025.pdf'],
                ['valeur' => '123 actions', 'libelle' => 'Prévues par la stratégie nationale de l\'IA et des mégadonnées 2023-2027, adoptée le 18 janvier 2023', 'source' => 'CIO Mag', 'url' => 'https://cio-mag.com/ia-et-megadonnees-le-benin-se-dote-dune-strategie-nationale/'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d\'IA une équipe béninoise peut-elle utiliser, et à quel coût ?',
            'legende' => 'Prix publics relevés le 25 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée (dollars américains, sauf Google, dont la page est affichée en euros pour le Bénin). Ces montants sont ceux des éditeurs et ne font pas partie du prix de la formation ; les éditeurs peuvent les modifier à tout moment.',
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Prix de l\'éditeur', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédaction, reformulation, tableaux à partir de messages, usage polyvalent au quotidien', 'Gratuit ; Go 8 $ par mois ; Plus 20 $ par mois ; Business 20 $ par utilisateur et par mois en annuel, 25 $ en mensuel, à partir de 2 utilisateurs', 'Les réponses courtes passent bien sur mobile ; les fichiers lourds se préparent à l\'avance'],
                ['Claude (Anthropic)', 'Lecture de documents longs, synthèses avec citations, rédaction en français soignée', 'Gratuit (jusqu\'à 5 projets) ; Pro 17 $ par mois en annuel ou 20 $ au mois ; Team 20 $ par siège et par mois en annuel, 25 $ au mois', 'Les documents se téléversent une fois ; on travaille ensuite par messages courts'],
                ['Gemini (Google)', 'Intégré aux comptes Google, utile aux équipes qui vivent dans Gmail, Docs et Drive', 'Gratuit ; Google AI Plus 4,69 € par mois ; Google AI Pro 18,87 € par mois (prix affichés pour le Bénin)', 'Déjà présent sur beaucoup de téléphones Android, donc sans installation'],
                ['Copilot (Microsoft)', 'Pour les équipes sous Microsoft 365 : courriels, réunions, fichiers Word et Excel', 'Copilot Chat inclus dans les forfaits Microsoft 365 éligibles ; Microsoft 365 Copilot Business 21 $ par utilisateur et par mois en annuel (18 $ en promotion du 1er juillet au 31 décembre 2026, pour la première année des clients éligibles), 25,20 $ au mois', 'Demande une connexion stable pour synchroniser les fichiers'],
                ['DeepSeek', 'Assistant alternatif, aussi proposé aux développeurs par une interface de programmation', 'La page de l\'éditeur décrit l\'accès par interface de programmation ; lisez ses conditions avant tout usage professionnel', 'À réserver à des textes sans donnée sensible, tant que l\'entreprise n\'a pas lu les conditions de traitement des données'],
                ['NotebookLM (Google)', 'Interroger un ensemble de sources que l\'on choisit : rapports, notes, contrats', 'Formule Standard gratuite avec un compte Gmail : 50 sources par bloc-notes et 100 blocs-notes ; formules Plus, Pro et Ultra payantes', 'Les sources sont chargées une fois ; les questions ensuite sont courtes'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il payer un abonnement pour se former, et que faire quand la connexion coupe ?',
            'paragraphes' => [
                'Non, rien n\'est à acheter avant la formation. Les versions gratuites suffisent pour apprendre la méthode, qui consiste à donner le contexte, fournir un modèle, préciser la forme attendue puis vérifier. Elles ont des limites d\'usage qui se font sentir sur une journée dense ; un groupe peut alors alterner entre deux assistants, ce qui montre aussi que la méthode ne dépend pas d\'un éditeur. Les abonnements se décident après la session, sur ce qui a réellement servi et sur le nombre de personnes qui s\'en servent chaque semaine.',
                'La connexion est la contrainte la plus concrète au Bénin, où 32,2 % seulement de la population utilisait internet fin 2025 selon DataReportal. La formation s\'organise donc autour d\'elle : documents d\'exercice téléchargés sur chaque poste la veille, consignes rédigées dans un traitement de texte puis collées d\'un coup, exercices de relecture qui n\'exigent aucune connexion, et une solution de repli prévue pour les séances à distance, comme un partage de la connexion d\'un téléphone. Une coupure de dix minutes ne doit pas arrêter une demi-journée.',
                'Pour une équipe qui compare les offres payantes, le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> détaille leurs conditions d\'équipe et leur coût pour dix personnes.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles règles de données faut-il respecter au Bénin avant d\'envoyer un document à un assistant d\'IA ?',
            'intro' => 'Aucun texte béninois ne traite spécifiquement des assistants d\'IA, mais le Code du numérique (loi n° 2017-20 du 20 avril 2018) s\'applique dès qu\'un document contient des données personnelles, ce qui est le cas de la plupart des documents d\'une entreprise. La protection est confiée à l\'Autorité de protection des données à caractère personnel, l\'APDP. Cette synthèse ne remplace pas un conseil juridique.',
            'items' => [
                ['titre' => 'Déclarer avant de traiter', 'texte' => 'L\'article 405 impose que les traitements de données personnelles, automatisés ou non, fassent l\'objet d\'une déclaration préalable auprès de l\'Autorité, ou soient inscrits dans un registre tenu par la personne que le responsable du traitement a désignée. Si votre équipe se met à résumer des fiches clients avec un assistant, ce nouveau traitement entre dans cette logique : il se décrit avant d\'être lancé.'],
                ['titre' => 'Le transfert vers l\'étranger', 'texte' => 'La plupart des assistants sont hébergés hors du Bénin. L\'article 391 pose le principe : le transfert de données personnelles vers un État tiers n\'est possible que si l\'Autorité constate un niveau de protection équivalent, sous réserve des dérogations que la loi prévoit, et l\'article 407 range le transfert envisagé vers un État tiers parmi les traitements qui demandent son autorisation préalable. Coller la fiche d\'un client dans un assistant en ligne n\'est donc pas un geste anodin.'],
                ['titre' => 'La sécurité des données', 'texte' => 'L\'article 426 oblige le responsable du traitement, et son sous-traitant, à mettre en œuvre des mesures techniques et d\'organisation appropriées contre la destruction, la perte, l\'altération, la diffusion ou l\'accès non autorisés. Dans une équipe, cela se traduit par des gestes simples : comptes professionnels, mots de passe individuels, aucun partage de compte entre collègues.'],
                ['titre' => 'Le tri en trois couleurs', 'texte' => 'La formation commence par classer les documents du service : ce qui peut être confié à l\'assistant, ce qui s\'anonymise d\'abord en remplaçant noms, numéros et montants, et ce qui ne sort jamais, comme un dossier médical ou une liste de salaires. C\'est la manière la plus rapide de rendre la règle applicable le lundi suivant.'],
                ['titre' => 'Les données de santé, d\'école et de paie', 'texte' => 'Les cliniques, les écoles privées et les services de paie manipulent des informations sensibles. La règle de départ est stricte : aucun élément identifiable d\'un patient, d\'un élève ou d\'un salarié dans un assistant en ligne. Les exercices utilisent des copies anonymisées.'],
                ['titre' => 'Les factures restent dans le système certifié', 'texte' => 'Une facture normalisée est émise sur la plateforme <a href="https://edicomgroup.com/blog/electronic-invoicing-benin-facture-normalisee">e-MECeF de la Direction générale des impôts</a>, qui lui attribue un numéro et un code, et elle n\'a de valeur légale qu\'après validation. Un assistant peut préparer le texte d\'un devis ou d\'une relance ; il n\'émet pas la facture. Les contribuables concernés vérifient leurs obligations auprès de leur comptable ou de la DGI.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Dans quelles villes du Bénin Richard forme-t-il, et que change le lieu ?',
            'intro' => 'Richard vit à Cotonou. Quatre grandes villes ont leur page locale, avec le contexte de leurs entreprises ; chacune se distingue par un fait qui change la façon de former.',
            'items' => [
                ['titre' => 'Cotonou : le port et la proximité', 'texte' => 'Cotonou est le port par où transite le commerce du Niger, du Burkina Faso et du Mali, selon la fiche pays de Bpifrance, et le siège du FODEFCA, fixé à Akpakpa par ses statuts. Transitaires, importateurs, cabinets et PME y sont proches de Richard, ce qui facilite les séances en salle. Voir la page <a href="/formation-ia-entreprise-cotonou">formation IA en entreprise à Cotonou</a>.'],
                ['titre' => 'Abomey-Calavi : la ville des étudiants', 'texte' => 'Abomey-Calavi est la deuxième commune la plus peuplée du pays après Cotonou, d\'après le recensement de 2013 cité par le gouvernement, et elle donne son nom à l\'Université d\'Abomey-Calavi, née en 1969 sous le nom d\'Université du Dahomey, selon le gouvernement. La page locale part des écoles, des cliniques et des petites entreprises de la commune, où les équipes administratives manipulent des listes d\'élèves, de patients ou de clients. Voir <a href="/formation-ia-entreprise-abomey-calavi">formation IA en entreprise à Abomey-Calavi</a>.'],
                ['titre' => 'Porto-Novo : la capitale administrative', 'texte' => 'Porto-Novo est la capitale de la République du Bénin selon la Constitution. Les services qui travaillent avec les administrations rédigent des notes, des comptes rendus et des courriers normés : un terrain pour apprendre à résumer et à reformuler, avec une règle ferme sur ce qu\'on ne confie pas à un assistant. Voir <a href="/formation-ia-entreprise-porto-novo">formation IA en entreprise à Porto-Novo</a>.'],
                ['titre' => 'Parakou : le nord du pays', 'texte' => 'Parakou comptait 255 478 habitants au recensement de 2013, contre 149 819 en 2002, d\'après l\'Institut national de la statistique repris par City Population. Bpifrance estime que la production de coton pourrait atteindre près de 632 000 tonnes en 2025/26 : la page locale part donc du négoce agricole, et les exercices portent sur les achats, le stock et la correspondance avec les fournisseurs. Voir <a href="/formation-ia-entreprise-parakou">formation IA en entreprise à Parakou</a>.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour quelle équipe, à Cotonou, ailleurs au Bénin ou à distance ?',
            'legende' => 'Les formats se combinent : un atelier pour une direction, puis la formation complète pour un service pilote, puis l\'accompagnement mensuel. Le Bénin est à UTC+1 toute l\'année, comme Richard : aucun décalage à gérer.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte, sur place', 'Une demi-journée', '12 personnes au plus', 'Une direction ou une équipe qui n\'a jamais utilisé d\'assistant et veut voir sur ses documents avant d\'investir'],
                ['Formation complète, sur place', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un service qui utilise déjà l\'IA dans le désordre, ou une tâche volumineuse comme le suivi des commandes reçues sur WhatsApp'],
                ['Session mutualisée', '1 à 2 jours', 'Plusieurs structures d\'un même réseau', 'Une association, un réseau de pharmacies ou de cabinets : une ou deux personnes par structure, sur des documents fictifs ou publics'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties entre Cotonou, Parakou ou Natitingou, ou entre le Bénin et une filiale étrangère ; séances courtes, plus faciles à tenir avec une connexion mobile'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Prise en main à Cotonou ou dans votre ville, puis mise en pratique suivie à distance'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Ancrer les habitudes, mesurer ce qui sert et étendre l\'usage à d\'autres tâches'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment s\'organise concrètement une session au Bénin : langue, matériel, connexion ?',
            'paragraphes' => [
                'La langue de travail est le français, et l\'anglais est possible pour les échanges avec des fournisseurs ou des partenaires. Les assistants écrivent par défaut un français de France : pour un courrier administratif béninois, on leur fournit un modèle maison et le vocabulaire de l\'entreprise. Pour un texte en fon, en yoruba ou en une autre langue nationale, un locuteur relit le résultat avant tout usage.',
                'Chaque participant vient avec son ordinateur, ; le téléphone sert aux exercices courts. La veille, Richard vérifie les comptes, les réglages de confidentialité et le téléchargement des documents d\'exercice sur chaque poste. Si la salle n\'a pas de connexion fiable, le partage de connexion d\'un téléphone sert de secours et les exercices hors ligne prennent le relais.',
                'Une session sur place se prépare comme une réunion importante : une salle où chacun voit l\'écran, des prises pour les ordinateurs, et un responsable qui reste jusqu\'au bout pour décider, à la fin, de ce que l\'équipe adopte. À distance, les participants reçoivent le lien et les documents à l\'avance, et chacun partage son écran à son tour.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel programme pour quel métier : que fait chaque équipe béninoise avec l\'assistant ?',
            'items' => [
                ['secteur' => 'Transit, import-export et logistique à Cotonou', 'probleme' => 'Les dossiers de transit circulent par courriel et par WhatsApp, et chaque client demande où en est son conteneur.', 'solution' => 'Tâche : résumer un dossier et rédiger l\'information client. Outil : Claude ou ChatGPT sur des pièces anonymisées. Résultat attendu : un statut clair pour chaque dossier, des courriers bilingues relus, et la vérification ligne à ligne des quantités et des numéros.'],
                ['secteur' => 'Négoce agricole, coton et anacarde', 'probleme' => 'Les achats auprès des producteurs se notent sur des cahiers, et le stock ne se connaît qu\'en fin de campagne.', 'solution' => 'Tâche : transformer des notes et des messages vocaux transcrits en tableau d\'achats. Outil : ChatGPT ou Gemini sur mobile pour la saisie, ordinateur pour le contrôle. Résultat attendu : un tableau propre, des totaux recalculés à la main sur deux lignes, un récapitulatif hebdomadaire.'],
                ['secteur' => 'Commerce, hôtellerie et restauration', 'probleme' => 'Les commandes et les réservations arrivent sur WhatsApp à toute heure, avec des acomptes par mobile money à rapprocher.', 'solution' => 'Tâche : classer les demandes, préparer les réponses et les relances. Outil : ChatGPT ou Gemini. Résultat attendu : des réponses dans le ton de la maison, relues avant envoi, qui ne promettent ni remise ni délai que le gérant n\'a pas décidé.'],
                ['secteur' => 'Santé privée et écoles privées', 'probleme' => 'Les équipes produisent des courriers, des convocations et des supports, mais manipulent des données de patients ou d\'élèves.', 'solution' => 'Tâche : supports de cours, courriers aux parents, comptes rendus administratifs. Outil : Copilot ou Claude sur des textes sans donnée identifiable. Résultat attendu : des documents prêts plus vite, et une frontière claire : aucun dossier médical, aucune note d\'élève identifiable.'],
                ['secteur' => 'ONG, projets et cabinets de conseil', 'probleme' => 'Les rapports aux bailleurs et les comptes rendus de mission prennent des jours.', 'solution' => 'Tâche : synthèse d\'un rapport de 40 pages avec renvoi aux pages, tableau d\'indicateurs. Outil : Claude ou NotebookLM sur des sources choisies. Résultat attendu : un projet de rapport dont chaque chiffre est retrouvé dans la source.'],
                ['secteur' => 'Comptabilité, administration et finances', 'probleme' => 'Les exports de tableur s\'accumulent et les relances de paiement attendent la fin de semaine.', 'solution' => 'Tâche : totaux par poste, écarts, commentaire, relances. Outil : ChatGPT ou Copilot dans Excel. Résultat attendu : un commentaire de tableau vérifié, des relances courtoises et fermes ; la facture normalisée reste émise par le système certifié.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer une formation IA au Bénin, et le FODEFCA peut-il la prendre en charge ?',
            'paragraphes' => [
                'Le dispositif à connaître est le Fonds de développement de la formation professionnelle continue et de l\'apprentissage, le FODEFCA. Le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> en approuve les statuts. L\'article 5 lui donne pour mission le financement d\'actions de formation initiale et continue dans le secteur privé et le présente comme le principal guichet de financement de la formation professionnelle continue ; il mentionne aussi la mise en place d\'un système d\'assurance qualité pour la sélection des organismes de formation agréés.',
                'Côté ressources, l\'article 35 cite notamment la taxe d\'apprentissage, présentée comme principale source de financement, puis les dotations de l\'État, les ressources des partenaires et les contributions des bénéficiaires, qui s\'établissent selon les cas de 10 à 30 % du coût total de la formation. Autrement dit, une prise en charge, si elle est accordée, n\'est pas intégrale : prévoyez la part de l\'entreprise. Le siège du fonds est à Cotonou, ce qui permet de s\'y renseigner directement.',
                'Aucune prise en charge n\'est garantie, et elle ne se décide pas ici. Les conditions pratiques (agrément de l\'organisme, formulaire, calendrier, plafonds) se confirment auprès du fonds par écrit, programme et devis à l\'appui, avant de signer. Richard n\'affiche aucun agrément de ce fonds : si votre financement l\'exige, dites-le dès le premier échange, et sinon, budgétisez la formation sans prise en charge. Le programme, les feuilles de présence et l\'attestation nominative remis en fin de session servent dans tous les cas, pour vos dossiers internes.',
                'Pour budgétiser, comptez trois lignes : la formation sur devis, les abonnements éventuels aux assistants une fois les usages choisis, et le temps des participants, que l\'on libère mieux en deux demi-journées par semaine qu\'en deux jours d\'un bloc quand le service ne peut pas fermer.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA en entreprise au Bénin ?',
            'intro'      => 'Le prix se fixe sur devis, en FCFA, après un échange de cadrage, et le devis détaille chaque poste. Richard accepte le Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces. Les abonnements aux assistants restent au nom de l\'entreprise et ne sont pas compris.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée sur vos documents', 'Premiers gestes sur deux tâches', 'Règles de données de base', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Exercices construits sur vos documents', 'Bibliothèque de consignes et modes opératoires', 'Évaluation sur la tâche cible et attestation', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Corrections et nouvelles tâches', 'Bilan écrit à trois mois']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, par métier.',
                'La durée : atelier, deux jours ou accompagnement mensuel.',
                'Le lieu : vos locaux à Cotonou, une salle louée, un déplacement dans une autre ville du Bénin, ou la distance.',
                'La préparation sur vos documents : collecte, anonymisation, exercices sur mesure.',
                'La langue des supports, en français ou en anglais.',
                'L\'accompagnement après la session.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent les équipes béninoises qui démarrent l\'IA ?',
            'intro' => 'Une formation se juge un mois plus tard, sur ce que l\'équipe fait encore. Voici les écarts les plus fréquents dans le contexte du pays.',
            'items' => [
                ['titre' => 'Envoyer sans relire', 'texte' => 'Une réponse de client générée en dix secondes part avec un délai faux ou une remise jamais accordée. Rien ne part au nom de l\'entreprise sans avoir été lu en entier par une personne qui connaît la source.'],
                ['titre' => 'Coller des fiches clients dans un compte personnel', 'texte' => 'Sous la pression d\'un délai, on choisit le chemin le plus court. Les articles 391 et 407 du Code du numérique rappellent pourtant qu\'un transfert vers l\'étranger n\'est pas banal : on anonymise d\'abord.'],
                ['titre' => 'Croire une référence parce qu\'elle est précise', 'texte' => 'Un assistant peut citer un article de loi, un décret ou une étude qui n\'existent pas. Tout texte juridique béninois se retrouve sur le site du Secrétariat général du gouvernement avant d\'être repris.'],
                ['titre' => 'Passer par l\'assistant pour une facture', 'texte' => 'Une facture normalisée vient du système certifié de la DGI, pas d\'un modèle généré. L\'assistant prépare le texte autour, jamais le document fiscal.'],
                ['titre' => 'Partager un seul compte entre collègues', 'texte' => 'Un compte partagé mélange les historiques et laisse partir les documents avec la personne. Un compte par personne, ou un compte d\'équipe administré par l\'entreprise, évite cette situation.'],
                ['titre' => 'Tout apprendre sur le téléphone', 'texte' => 'Le téléphone convient aux petites tâches ; la relecture d\'un tableau ou d\'un rapport demande un écran large. Les exercices de vérification se font sur ordinateur.'],
                ['titre' => 'Empiler les abonnements', 'texte' => 'Trois assistants payés par trois services, sans règle commune, coûtent plus et se contrôlent moins. L\'entreprise retient un outil principal après avoir mesuré, pendant la session, le temps de chaque tâche.'],
                ['titre' => 'Interdire sans former', 'texte' => 'L\'interdiction déplace l\'usage vers les téléphones personnels, sans aucune règle. Mieux vaut écrire ce qui est permis, avec quelles données, et le faire appliquer ; la formation <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a> aide à rédiger ce cadre.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelles règles faut-il confirmer auprès de l\'administration avant de signer ?',
            'texte' => 'Trois points ne se décident pas dans une formation. Le texte du Code du numérique se lit à la source, sur le site du Secrétariat général du gouvernement, et ses éventuels textes d\'application se vérifient auprès de l\'APDP. La prise en charge par le FODEFCA se demande au fonds, par écrit. Les obligations de facturation normalisée se confirment auprès de la Direction générale des impôts ou de votre comptable. Richard signale ce qui change la conduite d\'une formation ; il ne remplace ni un avocat ni un expert-comptable.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à l\'IA avec Richard SALANON au Bénin ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Bénin, le pays où il est basé, à Cotonou. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Avec ' . $ans . ' ans d\'expérience et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP, et avoir travaillé dans ' . count((array) fait('pays_travailles')) . ' pays.',
                'Sa façon de former se résume en engagements vérifiables : un cadrage qui peut conclure qu\'un atelier suffit, des exercices construits sur vos documents, une évaluation de chaque participant sur sa tâche réelle, des supports qui restent à l\'entreprise, un canal direct le mois suivant, et aucun chiffre de gain promis à l\'avance. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun. Les demandes reçoivent une réponse sous 24 heures.',
                'Parce qu\'il construit lui-même des outils d\'IA pour des entreprises, il sait aussi dire quand une formation ne suffit pas et quand une automatisation ou un assistant branché sur vos logiciels est la bonne réponse. Ce travail relève alors d\'une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, et d\'autres travaux figurent sur la page <a href="/realisations/">réalisations</a>.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels projets Richard a-t-il menés au Bénin, en lien avec l\'IA et le numérique ?',
            'legende' => 'Projets de Cotonou présentés dans les réalisations, avec leur cadre de réalisation.',
            'entetes' => ['Projet', 'Secteur', 'Ce qui a été construit', 'Cadre'],
            'lignes'  => [
                ['Wapy', 'Logiciel en ligne', 'Un assistant WhatsApp à intelligence artificielle qui répond aux clients des entreprises d\'Afrique francophone, conçu, développé et amélioré par Richard.', 'Produit de Richard'],
                ['OBA TV', 'Médias', 'Une chaîne en ligne avec direct, replays, grille des programmes, rédaction autonome et abonnement premium payé par mobile money (MTN MoMo, Moov Money).', 'Client direct'],
                ['GC Pro Consulting', 'Formation et conseil en gestion', 'Un site bilingue de plus de cent pages : catalogue de formations, inscriptions, demandes de devis en ligne et pages locales par ville.', 'Client direct'],
                ['IK Fashion House', 'Mode féminine sur mesure', 'Une boutique en ligne avec commande sur mesure à distance, payée avec FedaPay, et une page de lancement de collection.', 'Réalisé en sous-traitance pour Digital Développement'],
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Choisissez deux ou trois tâches réelles par groupe, classez vos documents avant le premier exercice, anonymisez ce qui contient des données personnelles, faites relire chaque résultat par une personne qui connaît la source, laissez la facture au système certifié, et mesurez le temps de la tâche avant, puis un mois et trois mois après la formation.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe à l\'IA au Bénin ?',
            'texte'  => 'Indiquez le nombre de personnes, leur ville, leurs postes, les tâches qui leur prennent le plus de temps et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA au Bénin ?", 'r' => "Ces trois titres décrivent des rôles voisins et aucun n’est réglementé. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek ou NotebookLM sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant au Bénin : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA au Bénin ?", 'r' => "Commencez par une tâche répétitive et mesurable, par exemple la rédaction de courriers, le résumé de comptes rendus ou le classement de documents, et par la règle sur les données qui peuvent quitter l’entreprise. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise au Bénin, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => 'Qui peut former mes équipes à l\'IA à Cotonou ou ailleurs au Bénin ?', 'r' => 'Richard SALANON, basé à Cotonou, forme les équipes en présentiel à Cotonou et, selon le devis, dans d\'autres villes, ou à distance. Il travaille sur vos documents et dans vos comptes, avec une évaluation sur une tâche réelle de chaque participant.'],
        ['q' => 'Faut-il déclarer à l\'APDP l\'usage d\'un assistant d\'IA dans mon entreprise ?', 'r' => 'L\'article 405 du Code du numérique impose une déclaration préalable auprès de l\'Autorité, ou une inscription dans un registre tenu par la personne désignée, pour les traitements de données personnelles. Si l\'assistant traite des données personnelles, ce traitement entre dans cette logique ; confirmez votre cas auprès de l\'APDP.'],
        ['q' => 'Puis-je envoyer la fiche d\'un client à ChatGPT ou à Claude ?', 'r' => 'Seulement après anonymisation, dans le doute. Les articles 391 et 407 du Code du numérique encadrent le transfert de données personnelles vers un État tiers, et la plupart des assistants sont hébergés à l\'étranger. La formation apprend à remplacer noms, numéros et montants avant de soumettre un texte.'],
        ['q' => 'Un assistant d\'IA peut-il établir mes factures normalisées e-MECeF ?', 'r' => 'Non. La facture normalisée est émise par le système de la Direction générale des impôts, qui lui attribue un numéro et un code, et elle n\'a de valeur légale qu\'après validation. L\'assistant peut aider à rédiger un devis ou une relance, pas à produire le document fiscal.'],
        ['q' => 'Le FODEFCA peut-il financer la formation de mon équipe ?', 'r' => 'Le décret n° 2022-286 en fait le principal guichet de financement de la formation continue du secteur privé, avec une contribution des bénéficiaires de 10 à 30 % du coût dans les cas qu\'il prévoit. Aucune prise en charge n\'est garantie : interrogez le fonds, programme et devis à l\'appui. Richard n\'affiche aucun agrément de ce fonds.'],
        ['q' => 'Peut-on régler la formation par MTN MoMo ou Moov Money ?', 'r' => 'Oui : Richard accepte le Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces. Le devis est rédigé en FCFA. Les abonnements aux assistants se paient à part, à l\'éditeur.'],
        ['q' => 'La formation fonctionne-t-elle avec une connexion mobile lente ?', 'r' => 'Oui, à condition de la préparer : documents téléchargés la veille, consignes rédigées hors ligne puis collées, exercices de relecture sans connexion et solution de repli en cas de coupure. Avec 32,2 % d\'internautes fin 2025 selon DataReportal, la connexion est une contrainte à intégrer, pas une exception.'],
        ['q' => 'Faut-il commencer par un atelier ou par la formation de deux jours ?', 'r' => 'Un atelier d\'une demi-journée suffit à une direction qui veut voir sur ses documents avant d\'investir. La formation de deux jours convient à un service qui utilise déjà l\'IA sans méthode. Le cadrage tranche, et il peut conclure que l\'atelier suffit.'],
        ['q' => 'Quelle différence entre un consultant IA et un formateur IA ?', 'r' => 'Le formateur apprend à vos équipes à utiliser les assistants sur leurs tâches. Le consultant cadre un projet : quels processus, quels outils, quelles données. Richard fait les deux, et le cadrage d\'une formation dit si la réponse est une formation ou une intégration de l\'IA dans vos logiciels.'],
        ['q' => 'Quel assistant choisir entre ChatGPT, Claude, Gemini, Copilot, DeepSeek et NotebookLM ?', 'r' => 'Celui que l\'équipe utilisera chaque semaine sur ses documents. Une équipe sous Microsoft 365 commence souvent par Copilot Chat, une équipe sur Google par Gemini ou NotebookLM, d\'autres retiennent ChatGPT ou Claude. La session fait comparer deux assistants sur vos propres textes avant tout abonnement.'],
        ['q' => 'La formation est-elle certifiante ?', 'r' => 'Non. Richard n\'est certifié par aucun éditeur d\'IA. Chaque participant reçoit une attestation nominative de fin de formation, avec le programme et les supports ; ce n\'est ni un diplôme ni une certification d\'éditeur.'],
        ['q' => 'Que dit la stratégie nationale béninoise d\'IA pour mon entreprise ?', 'r' => 'La stratégie nationale de l\'IA et des mégadonnées 2023-2027, adoptée le 18 janvier 2023, fixe 123 actions pour les secteurs public et privé. Elle donne une direction ; les règles sur les données personnelles viennent du Code du numérique.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Bénin (population, internautes, connexions mobiles)', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-25'],
        ['titre' => 'ARCEP Bénin, observatoire des services financiers mobiles au 30 juin 2025', 'url' => 'https://arcep.bj/wp-content/uploads/2025/10/Tableau-de-bord-SFM-T2_2025.pdf', 'date' => '2026-10-25'],
        ['titre' => 'CIO Mag, IA et mégadonnées : le Bénin se dote d\'une stratégie nationale', 'url' => 'https://cio-mag.com/ia-et-megadonnees-le-benin-se-dote-dune-strategie-nationale/', 'date' => '2026-10-25'],
        ['titre' => 'Secrétariat général du gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant Code du numérique (articles 391, 405, 407 et 426)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/download', 'date' => '2026-10-25'],
        ['titre' => 'Secrétariat général du gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA (articles 4, 5 et 35)', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/download', 'date' => '2026-10-25'],
        ['titre' => 'Edicom, la facture normalisée au Bénin et la plateforme e-MECeF', 'url' => 'https://edicomgroup.com/blog/electronic-invoicing-benin-facture-normalisee', 'date' => '2026-10-25'],
        ['titre' => 'Cour constitutionnelle du Bénin, Constitution (capitale : Porto-Novo)', 'url' => 'https://courconstitutionnelle.bj/files/documents/1677952525_constitution_de_.pdf', 'date' => '2026-10-25'],
        ['titre' => 'Gouvernement du Bénin, Abomey-Calavi, cœur de la plus grande cité estudiantine du Bénin', 'url' => 'https://www.gouv.bj/article/1064/destination-benin---abomey-calavi-coeur-plus-grande-cite-estudiantine-benin--symbole-projets-pharaoniques-gouvernement.', 'date' => '2026-10-25'],
        ['titre' => 'City Population, Parakou (recensements de l\'INSAE)', 'url' => 'https://www.citypopulation.de/en/benin/admin/borgou/045__parakou', 'date' => '2026-10-25'],
        ['titre' => 'Bpifrance, fiche pays Bénin, mai 2026 (port de Cotonou, coton)', 'url' => 'https://assurance-export.bpifrance.fr/storage/sites/26/2025/07/fiche_pays_benin_052026_dif.pdf', 'date' => '2026-10-25'],
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres Free, Go, Plus et Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Anthropic, tarifs de Claude (Free, Pro, Team)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, abonnements Gemini et Google AI (prix affichés pour le Bénin)', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, aide NotebookLM : formules et limites', 'url' => 'https://support.google.com/notebooklm/answer/16213268', 'date' => '2026-10-25'],
        ['titre' => 'DeepSeek, documentation de l\'interface de programmation', 'url' => 'https://api-docs.deepseek.com/quick_start/pricing', 'date' => '2026-10-25'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite', 'gouvernance-ia'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
