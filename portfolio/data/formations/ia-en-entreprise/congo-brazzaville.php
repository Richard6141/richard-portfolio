<?php
// ============================================================
// data/formations/ia-en-entreprise/congo-brazzaville.php · Formation IA en entreprise, Congo-Brazzaville.
// Faits relevés le 2026-10-26 : DataReportal (Digital 2026), ARPCE via Digital Business Africa (T2 2025),
// Direction générale du Trésor (économie et numérique), Journal officiel n° 45-2019 (loi n° 29-2019),
// ITWeb Africa (commission des données), AllAfrica et Ecofin (stratégie nationale d'IA, séminaire ARPCE),
// FONEA, Comarch (TVA sur les services numériques), IANA (fuseau horaire), pages des éditeurs d'outils d'IA (aucun montant repris).
// Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA en entreprise au Congo-Brazzaville : vos équipes de Brazzaville et de Pointe-Noire utilisent ChatGPT, Claude et Gemini sur leurs documents, avec une règle claire sur les données au regard de la loi de 2019',
    'title'   => 'Formation IA en entreprise au Congo-Brazzaville, à distance',
    'meta'    => 'Formation IA pour les équipes au Congo-Brazzaville : ChatGPT, Claude et Gemini sur vos documents, loi de 2019 sur les données, à distance, devis en FCFA.',
    'en_bref' => 'Au Congo-Brazzaville, une équipe peut se former à l’IA auprès d’écoles, de centres ou d’un formateur indépendant ; pour un usage quotidien sur ses propres documents, Richard SALANON, basé à Cotonou, forme à distance, dans la même zone horaire que Brazzaville et Pointe-Noire, en français, sur ChatGPT, Claude, Gemini et Copilot, avec un devis établi en FCFA. Les exercices tiennent compte de la loi n° 29-2019 sur les données personnelles et des coupures de connexion. Trois formats existent : un atelier d’une demi-journée, deux jours, un accompagnement mensuel.',
    'publie'  => '2026-12-02',
    'maj'     => '2026-12-02',

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance, en français'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun, même zone horaire (base IANA)'],
        ['l' => 'Devis', 'v' => 'Sur devis, en FCFA'],
        ['l' => 'Réponse', 'v' => 'Sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former mes équipes à l’IA au Congo-Brazzaville, et comment choisir ?',
            'paragraphes' => [
                'Une entreprise de Brazzaville ou de Pointe-Noire peut confier la formation de ses équipes à une école, à un centre de formation, à un programme public ou à un formateur indépendant. Pour apprendre à travailler chaque jour avec un assistant d’IA sur ses propres courriers, rapports et tableaux, Richard SALANON propose une formation à distance, en français, qui se déroule sur les documents de l’entreprise.',
                'Un formateur IA d’entreprise ne fait pas un cours sur les réseaux de neurones. Il apprend à un service à confier des tâches précises à un assistant, à relire ce que celui-ci produit et à écrire pour l’équipe ce qu’on lui confie ou non. La différence entre une démonstration d’outil et une formation tient à ce qui reste le lundi suivant : un geste de vérification que chacun sait refaire, et une tâche réellement plus rapide à faire.',
                'Pour comparer les offres disponibles dans le pays, quatre questions suffisent. Les exercices se font-ils sur vos fichiers ou sur des exemples génériques ? La loi congolaise de 2019 sur les données est-elle expliquée avant de coller un seul document dans un outil ? Les séances tiennent-elles compte d’une connexion qui peut se couper ? Qu’obtient l’équipe un mois après : des supports, un contact pour les questions, un suivi ?',
                'Le contexte local pèse sur le choix. Moins de quatre habitants sur dix utilisent internet et la connexion passe surtout par le mobile : une formation utile part de ces réalités et de documents ordinaires, un compte rendu tiré de notes brutes, une liste de clients à nettoyer, un devis à rédiger à partir de notes prises à la main.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Où en est l’IA au Congo-Brazzaville, entre connexions mobiles et stratégie nationale ?',
            'items' => [
                ['valeur' => '38,4 %', 'libelle' => 'Part de la population qui utilisait internet fin 2025, soit 2,50 millions de personnes, avec environ 4,02 millions de Congolais encore hors ligne', 'source' => 'DataReportal, Digital 2026 : Republic of the Congo', 'url' => 'https://datareportal.com/reports/digital-2026-republic-of-the-congo'],
                ['valeur' => '6,51 millions', 'libelle' => 'Connexions mobiles cellulaires fin 2025, soit 99,8 % de la population, dont 69,6 % en 3G, 4G ou 5G', 'source' => 'DataReportal, Digital 2026 : Republic of the Congo', 'url' => 'https://datareportal.com/reports/digital-2026-republic-of-the-congo'],
                ['valeur' => '79,0 %', 'libelle' => 'Part de la 4G dans le trafic de données mobiles au deuxième trimestre 2025, contre 20,8 % pour la 3G, selon le rapport de l’ARPCE', 'source' => 'Digital Business Africa, T2 2025 au Congo', 'url' => 'https://www.digitalbusiness.africa/congo-au-t2-2025-la-telephonie-mobile-genere-30371-milliards-de-fcfa-linternet-mobile-17032-milliards/'],
                ['valeur' => '1 200 000', 'libelle' => 'Identités d’utilisateurs de réseaux sociaux en octobre 2025, soit 18,4 % de la population, en hausse de 17,1 % sur un an', 'source' => 'DataReportal, Digital 2026 : Republic of the Congo', 'url' => 'https://datareportal.com/reports/digital-2026-republic-of-the-congo'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change ce paysage pour une équipe qui démarre avec l’IA ?',
            'paragraphes' => [
                'Le tableau est celui d’un pays où presque tout le monde est connecté par mobile, mais où moins de quatre habitants sur dix naviguent sur internet. Pour une entreprise, la question est moins celle de l’accès que de l’habitude de se servir de l’IA pour le travail. Analyser un tableau de ventes ou relire un rapport de trente pages se fait plus facilement sur un ordinateur, et la formation le demande à chaque participant.',
                'Sur le plan des infrastructures, la Direction générale du Trésor décrit un réseau de fibre nationale d’environ 3 000 km qui relie Pointe-Noire, Dolisie, Brazzaville, Oyo et Ouesso, un câble sous-marin WACS utilisé depuis mai 2012 et la liaison 2Africa depuis août 2023. Le même document note que la téléphonie fixe est quasi inexistante, et que l’accès passe surtout par les deux opérateurs mobiles, MTN et Airtel. Les assistants d’IA, qui travaillent en ligne, dépendent donc de cette connexion mobile.',
                'La politique publique commence à s’intéresser à l’IA. Selon AllAfrica, un séminaire de cinq jours sur la régulation du numérique, organisé par l’ARPCE, s’est ouvert à Brazzaville le 12 janvier 2026, et le ministre Léon Juste Ibombo y a indiqué qu’une stratégie nationale d’IA était en cours d’élaboration avec le Centre africain de recherche en IA et le PNUD. Le 6 mai 2026, le comité technique chargé de la rédiger s’est réuni pour la première fois ; selon Ecofin, il disposait de six mois pour remettre onze livrables, avec une attention particulière au lingala et au kituba.',
                'Ce délai de six mois, compté depuis le 6 mai 2026, arrive à terme en novembre 2026. Une entreprise qui prépare sa politique d’usage de l’IA fait bien de vérifier auprès du ministère des Postes, des Télécommunications et de l’Économie numérique si le texte a été adopté, plutôt que de le considérer comme acquis. En attendant, la règle qui s’impose est celle de la loi de 2019 sur les données personnelles, traitée plus bas.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d’IA utiliser dans une entreprise congolaise, et à quel coût ?',
            'legende' => 'Relevé du 26 octobre 2026 sur les pages des éditeurs. Aucun montant n’est repris ici : les formules, les limites et les prix changent souvent et dépendent du pays (Google propose un sélecteur de pays) ; vérifiez toujours la page officielle de l’éditeur avant de vous abonner. Le prix de la formation n’inclut pas ces abonnements.',
            'entetes' => ['Outil', 'Ce qu’il fait bien pour une équipe', 'Formules et coût', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédiger, reformuler, traduire, analyser un fichier, structurer des notes', 'La page de tarifs d’OpenAI liste Free, Go, Plus, Pro, Business et Enterprise ; voir la page officielle (adresse dans les sources)', 'Préparer la demande hors ligne, la coller en une fois, garder les fichiers déjà sur le poste'],
                ['Claude (Anthropic)', 'Lire de longs documents, résumer un rapport, rédiger avec un ton soigné, travailler à partir de fichiers joints', 'La page d’Anthropic indique une offre gratuite et les offres Pro, Max, Team et Enterprise ; voir la page officielle (adresse dans les sources)', 'Même méthode : une demande complète et un fichier prêt valent mieux que dix échanges courts'],
                ['Gemini (Google)', 'Aider dans les outils Google (Gmail, Docs, Sheets), répondre à partir du web, résumer ; pratique pour qui vit déjà dans un compte Google', 'La page de Google présente une offre personnelle gratuite, des offres payantes et des éditions pour entreprises, avec un sélecteur de pays ; voir la page officielle (adresse dans les sources)', 'Les documents Google restent en ligne : pensez à les ouvrir avant la séance'],
                ['Copilot (Microsoft)', 'Résumer des courriels et des réunions, rédiger dans Word et Outlook, quand l’entreprise a Microsoft 365', 'Copilot Chat est fourni aux utilisateurs Microsoft 365 éligibles ; une licence Copilot payante ajoute un accès élargi aux contenus de l’entreprise ; voir Microsoft Learn (adresse dans les sources)', 'L’accès standard dépend de la capacité du service, selon Microsoft : la disponibilité peut varier d’un moment à l’autre'],
                ['DeepSeek', 'Assistant en ligne de l’éditeur DeepSeek ; à manier avec prudence sur les données', 'Les conditions sont celles de la politique de confidentialité de DeepSeek ; voir le texte officiel (adresse dans les sources)', 'Selon cette politique mise à jour le 10 février 2026, les données sont conservées en Chine : aucun document de l’entreprise n’y est collé'],
                ['NotebookLM (Google)', 'Interroger un ensemble de documents choisis (PDF, sites, présentations) et obtenir des réponses reliées à ces sources', 'L’aide de Google précise qu’il faut un compte Google et que la disponibilité dépend du pays ; voir l’aide Google (adresse dans les sources)', 'Les sources sont chargées une fois ; la relecture des réponses se fait ensuite sur le document d’origine'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il un abonnement, et que prévoir pour les taxes sur les services étrangers ?',
            'paragraphes' => [
                'Pour apprendre, les versions gratuites suffisent : les pages d’OpenAI, d’Anthropic et de Google en montrent une. Elles ont des limites d’usage qui se sentent sur une journée chargée. L’abonnement se décide après la formation, sur ce qui a réellement servi à l’équipe, et au nom de l’entreprise, pas d’un salarié.',
                'Un point de budget est propre au pays. Selon Comarch, seule source relevée sur ce point, qui présente le régime dans une page du 16 juillet 2026, les fournisseurs étrangers de services numériques doivent s’inscrire auprès de l’ARPCE et facturer 18 % de TVA à leurs clients situés au Congo depuis le 1er juillet 2026, sans seuil de chiffre d’affaires. La liste citée comprend les logiciels en ligne, l’hébergement, les outils de visioconférence et les formations en ligne. Les abonnements à un assistant d’IA peuvent donc arriver avec cette taxe ; confirmez le traitement exact auprès de l’administration fiscale ou de votre expert-comptable avant de fixer le budget.',
                'Pour comparer les offres d’équipe entre ChatGPT, Claude et Gemini, le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> détaille leurs conditions. Les documents de l’entreprise ne se traitent jamais dans le compte personnel gratuit d’un salarié, que l’employeur ne contrôle pas et qui part avec la personne.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données et de conformité appliquer avant d’envoyer un document à un outil d’IA ?',
            'paragraphes' => [
                'La loi n° 29-2019 du 10 octobre 2019 portant protection des données à caractère personnel, publiée au Journal officiel n° 45-2019, encadre ce que fait une équipe quand elle colle un fichier de clients dans un assistant. Son article 5 subordonne le traitement au consentement de la personne, sauf exceptions prévues par le texte. Son article 14 interdit la collecte et le traitement de données révélant l’origine ethnique ou régionale, les opinions politiques, les convictions religieuses, l’appartenance syndicale, la vie sexuelle, les données génétiques ou de santé, sous réserve des dérogations de l’article 15.',
                'Le texte prévoit aussi des formalités. Selon son article 33, les traitements font en principe l’objet d’une déclaration auprès de la commission, qui délivre un récépissé dans un délai d’un mois, prorogeable une fois ; seule la réception de ce récépissé donne droit à la mise en œuvre du traitement. L’article 23 n’autorise le transfert transfrontalier de données que vers un pays assurant un niveau de protection suffisant, et impose d’en informer préalablement la commission. Or un assistant d’IA en ligne héberge souvent ses serveurs hors du pays : coller une fiche client nominative dans un tel outil peut donc constituer un transfert.',
                'Le contrôle revient à la Commission nationale de protection des données personnelles. Selon ITWeb Africa, qui l’annonçait le 22 janvier 2026 (seule source relevée sur ce point), sa mise en place vise à encadrer les traitements et à pouvoir avertir ou sanctionner. Ses formulaires et ses délais pratiques se confirment auprès d’elle avant toute démarche. Les sanctions prévues à l’article 93, après mise en demeure, incluent une amende de un million à cent millions de francs CFA, et l’article 74 demande de notifier une violation de données à la commission dans les meilleurs délais, si possible sous soixante-douze heures, sauf absence de risque pour les personnes.',
                'Ces textes ne disent pas expressément comment utiliser un assistant d’IA : c’est la lecture que la formation en fait qui compte. Elle ne remplace pas un avis juridique, et c’est pourquoi une entreprise qui traite des données sensibles ou des fichiers de masse s’adresse aussi à un juriste. Ce que la formation apporte, c’est un réflexe de tri pratique avant chaque envoi, expliqué ci-dessous.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels fichiers une entreprise de Brazzaville ou de Pointe-Noire peut-elle soumettre à un assistant d’IA ?',
            'legende' => 'Classement en trois niveaux proposé pendant la formation. Il donne un point de départ à compléter avec votre juriste, pas une interprétation officielle de la loi de 2019.',
            'entetes' => ['Type de document', 'Exemple au Congo-Brazzaville', 'Règle proposée'],
            'lignes'  => [
                ['Texte sans donnée personnelle', 'Modèle de courrier, fiche de poste générique, plan d’un rapport, texte d’une offre commerciale', 'Peut être confié à l’assistant, avec relecture avant envoi'],
                ['Document avec noms ou numéros', 'Liste de clients avec numéros de téléphone, bon de livraison nominatif, fichier de paie d’un chantier', 'Anonymiser d’abord : remplacer noms et numéros, et conserver le tableau de correspondance dans l’entreprise'],
                ['Données sensibles ou réglementées', 'Dossier médical, informations syndicales ou religieuses, données d’un mineur, dossier disciplinaire', 'Ne sort pas de l’entreprise ; passer par le juriste ou le responsable des données avant tout usage'],
                ['Secret commercial', 'Prix d’appel d’offres à un opérateur pétrolier, marge par produit, contrat avec un grand compte', 'Compte professionnel uniquement, jamais le compte personnel d’un salarié ; la direction décide au cas par cas'],
                ['Document venant de l’étranger', 'Fichier client d’un partenaire de Kinshasa, de Libreville ou de Paris', 'Se souvenir que les règles du pays d’origine et celles du Congo peuvent se cumuler ; demander l’avis du juriste'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format retenir pour une équipe congolaise : atelier, deux jours, séances à distance ou accompagnement ?',
            'legende' => 'Tous les formats se donnent en visioconférence depuis Cotonou. Ils peuvent se combiner : un atelier pour un service pilote, puis la formation complète, puis l’accompagnement mensuel.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Un service pilote de Brazzaville ou de Pointe-Noire qui découvre l’assistant et veut le voir à l’œuvre sur ses propres pièces avant de s’engager'],
                ['Formation complète', 'Deux jours', '10 personnes au plus, du même métier si possible', 'Une équipe commerciale, administrative ou comptable qui utilise déjà l’IA dans le désordre et veut des gestes fiables'],
                ['Séances à distance', 'Plusieurs séances courtes', '8 personnes au plus', 'Des équipes réparties entre Brazzaville, Pointe-Noire et d’autres villes, ou une connexion qui supporte mal de longues séances'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant trois mois', 'Le groupe déjà formé', 'Faire durer les habitudes dans les services, reprendre les situations nouvelles rencontrées au travail, élargir à d’autres tâches'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passe une formation à distance entre Cotonou et le Congo-Brazzaville ?',
            'paragraphes' => [
                'Brazzaville et Cotonou relèvent de la même zone horaire dans la base de fuseaux IANA, celle de l’heure d’Afrique de l’Ouest : les séances tombent à la même heure des deux côtés, sans arithmétique. La langue de travail est le français. Si une équipe souhaite des exemples en lingala ou en kituba, par exemple pour des messages à des clients, un locuteur doit relire les textes produits avant tout envoi.',
                'Le matériel demandé est simple : un ordinateur par participant, un navigateur à jour, un tableur et un traitement de texte, et une connexion qui tient une visioconférence. Puisque la connexion peut se couper, la préparation en tient compte : un questionnaire avant la séance pour connaître le niveau et les outils de chacun, des documents d’exercice envoyés à l’avance et téléchargés sur le poste, et une solution de repli prévue en cas de coupure pendant la séance, afin de ne pas perdre un participant au milieu d’un exercice.',
                'Le suivi se fait ensuite par un canal direct, pour les questions qui surgissent quand chacun retrouve ses dossiers. Chaque participant reçoit les supports de séance et une attestation de fin de formation. Avant de commencer, un ou deux entretiens de cadrage permettent de choisir les tâches à travailler ; la première réponse arrive sous 24 heures.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel programme pour quel métier, du pétrole au port de Pointe-Noire ?',
            'items' => [
                ['secteur' => 'Services aux opérateurs pétroliers et gaziers', 'probleme' => 'Selon la Direction générale du Trésor, le pétrole génère la moitié du PIB du pays. Les sous-traitants de Pointe-Noire répondent à des appels d’offres, gèrent des habilitations et rédigent des rapports d’intervention pour les donneurs d’ordre.', 'solution' => 'Tâche : transformer des notes de chantier en rapport structuré, préparer la réponse à un appel d’offres à partir d’un modèle, produire une version anglaise. Outil : Claude ou ChatGPT. Résultat attendu : un rapport relu ligne à ligne dont chaque chiffre est retrouvé dans les notes, sans donnée de prix confiée à un compte personnel.'],
                ['secteur' => 'Transit, transport et port de Pointe-Noire', 'probleme' => 'La Direction générale du Trésor mentionne le port de Pointe-Noire parmi les atouts du pays. Un transitaire suit des dossiers composés de factures, de connaissements et de messages de clients, et répond sans cesse aux mêmes questions sur l’état d’une marchandise.', 'solution' => 'Tâche : résumer un dossier, extraire les références et les dates, rédiger des messages d’état en français clair. Outil : ChatGPT ou Gemini. Résultat attendu : un tableau de suivi où chaque ligne renvoie à la pièce d’origine, vérifiée avant d’être transmise au client.'],
                ['secteur' => 'Commerce, hôtellerie et restauration', 'probleme' => 'Le mobile money a enregistré plus de 238 milliards de FCFA de transactions en janvier 2024 selon la Direction générale du Trésor : les commerçants ont de nombreuses commandes, messages et preuves de paiement à trier.', 'solution' => 'Tâche : transformer vingt messages en tableau de commandes, rédiger des réponses courtoises aux réclamations, normaliser des fiches de produits. Outil : ChatGPT ou Gemini. Résultat attendu : des réponses dans le ton de la maison, avec prix et délais vérifiés par un responsable avant envoi.'],
                ['secteur' => 'Exploitation forestière et agroalimentaire', 'probleme' => 'La même source donne à la forêt 5,6 % du PIB. Les sociétés du secteur produisent des déclarations, des suivis de lots et des courriers aux administrations, souvent à partir de feuilles saisies à la main.', 'solution' => 'Tâche : saisir des carnets et des relevés dans un tableur, nettoyer une liste de lots, rédiger les courriers réglementaires à partir de modèles. Outil : un assistant avec analyse de fichiers. Résultat attendu : un tableau dont deux totaux sont recalculés à la main, et des courriers relus par la personne qui les signe.'],
                ['secteur' => 'Banques, services financiers et comptabilité', 'probleme' => 'Les équipes de conformité, de comptabilité et de relation client manipulent des données personnelles couvertes par la loi de 2019, dans des courriers répétitifs et des notes internes.', 'solution' => 'Tâche : rédiger des notes de synthèse, relire des courriers types, préparer des comptes rendus de comité. Outil : Copilot si l’entreprise a Microsoft 365, sinon un compte d’équipe. Résultat attendu : des textes préparés sans aucune donnée nominative dans l’assistant, avec une personne désignée pour valider.'],
                ['secteur' => 'Administration et établissements publics', 'probleme' => 'La Direction générale du Trésor qualifie la numérisation des services publics de timide ; beaucoup de notes, de courriers et de comptes rendus restent à produire à la main.', 'solution' => 'Tâche : préparer le premier jet d’une note à partir d’un modèle validé, résumer une réunion, traduire un résumé en anglais. Outil : Copilot ou ChatGPT. Résultat attendu : un document que le signataire a relu en entier, avec les règles de ce qui peut être soumis à l’assistant.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer une formation IA au Congo-Brazzaville, ou la budgéter ?',
            'paragraphes' => [
                'Le dispositif public à connaître est le Fonds national d’appui à l’employabilité et à l’apprentissage, le FONEA, créé par la loi n° 8-2019 du 9 avril 2019. Son site indique qu’il finance l’employabilité des demandeurs d’emploi par des formations qualifiantes, la création et la mise à niveau de centres de métiers, et l’appui aux opérateurs de formation. Ses offres durent un an au plus, s’adressent aux citoyens congolais à partir de 16 ans, et se demandent en ligne ou dans l’agence du département.',
                'Le FONEA mentionne lui-même une formation de 500 jeunes aux outils d’IA pour l’employabilité et l’entrepreneuriat, annoncée sur son site le 20 octobre 2026. Ce programme concerne des demandeurs d’emploi, pas les salariés d’une entreprise : une société qui souhaite un cofinancement de la formation de ses équipes doit lui poser la question par écrit avant d’en tenir compte, et aucune prise en charge n’est à supposer. Les coordonnées sont sur <a href="https://fonea.cg/">fonea.cg</a>.',
                'En l’absence de financement confirmé, la solution est de budgéter la formation sur les fonds propres de l’entreprise, comme une dépense de productivité. Un bon réflexe est de commencer par un atelier d’une demi-journée sur un service pilote, d’en mesurer l’effet sur une tâche cible, puis de décider du reste. Le règlement du devis se fixe avec Richard parmi les modes qu’il propose.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA pour une équipe au Congo-Brazzaville ?',
            'intro'      => 'Le prix est établi sur devis, en FCFA, après l’échange de cadrage. Il ne comprend pas les abonnements aux assistants, qui restent au nom de l’entreprise.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée en visioconférence', 'Exercices sur vos documents', 'Règles de données de la loi de 2019', 'Questionnaire avant la séance']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Deux jours à distance', 'Préparation sur vos documents', 'Épreuve finale chronomètre en main', 'Supports de séance et attestation', 'Canal direct après la session']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Trois demi-journées, une par mois', 'Traitement des cas nouveaux', 'Extension à d’autres tâches']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, et leur métier.',
                'La durée retenue : atelier, deux jours ou accompagnement.',
                'Le temps de préparation sur les documents de l’entreprise et leur anonymisation.',
                'La connexion des participants, qui peut conduire à prévoir plus de séances courtes.',
                'Les échanges de cadrage nécessaires avant la session.',
                'Un travail sur des textes en lingala ou en kituba, à relire par un locuteur.',
            ],
        ],
        [
            'type'   => 'points',
            'titre'  => 'Quelles erreurs reviennent chez les équipes congolaises qui démarrent l’IA ?',
            'intro'  => 'Ces écarts viennent de la loi, de la connexion ou des usages du pays. Chacun se prévient dès la session.',
            'items'  => [
                ['titre' => 'Coller un fichier de clients tel quel', 'texte' => 'Un tableau de noms et de numéros de téléphone envoyé à un assistant hébergé à l’étranger peut tomber sous les articles 23 et 33 de la loi de 2019. On remplace les identités avant l’envoi, ou le fichier reste dans l’entreprise.'],
                ['titre' => 'Prendre la stratégie nationale pour un texte déjà en vigueur', 'texte' => 'Le comité technique s’est réuni le 6 mai 2026 pour six mois de travaux. Tant que l’entreprise n’a pas vérifié auprès du ministère qu’un texte final est publié, sa règle interne s’appuie sur la loi de 2019, pas sur une stratégie en cours de rédaction.'],
                ['titre' => 'Utiliser un compte personnel pour un travail professionnel', 'texte' => 'Le compte part avec le salarié et l’entreprise ne le contrôle pas. L’employeur ouvre un compte d’équipe et désigne un administrateur.'],
                ['titre' => 'Coller une donnée dans un outil dont les serveurs sont en Chine', 'texte' => 'La politique de DeepSeek indique un stockage en Chine. Pour un document d’entreprise, mieux vaut un outil dont les conditions sont lues et validées.'],
                ['titre' => 'Oublier la TVA sur les abonnements étrangers', 'texte' => 'Depuis le 1er juillet 2026, selon Comarch, les services numériques étrangers livrés à un client situé au Congo sont soumis à 18 % de TVA. Un budget bâti sur des prix hors taxes peut sous-estimer la dépense : à confirmer auprès de l’administration fiscale.'],
                ['titre' => 'Se fier à une connexion parfaite', 'texte' => 'Une connexion peut se couper en pleine séance. Les documents d’exercice sont téléchargés à l’avance et une solution de repli est prévue.'],
                ['titre' => 'Croire une référence parce qu’elle est précise', 'texte' => 'Un assistant peut inventer un numéro d’article de la loi de 2019 ou un chiffre de marché, et le présenter avec aplomb. On retrouve chaque référence dans le texte d’origine avant de la reprendre.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes congolaises à l’IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard peut accompagner à distance les entreprises du Congo-Brazzaville, de Brazzaville à Pointe-Noire. Il compte ' . $ans . ' ans d’expérience dans le numérique, une formation à ' . fait('formation')['nom'] . ' suivie en ' . fait('formation')['annee'] . ', et déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l’IA, à l’automatisation et aux ERP. Son parcours couvre ' . count((array) fait('pays_travailles')) . ' pays, dont le Gabon, le Cameroun, le Tchad et la RD Congo en Afrique centrale.',
                'Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d’Afrique francophone, et il est co-fondateur d’<a href="https://audyxa.com">Audyxa</a>. Sa façon de former tient en quelques engagements : un questionnaire avant la séance, des exercices construits sur vos documents, une épreuve finale chronomètre en main, des supports remis à chacun et un canal direct après la session. Il ne se présente comme certifié par aucun éditeur d’IA.',
                'Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, et ses projets publiés figurent sur la page des <a href="/realisations/">réalisations</a>. Pour brancher l’IA sur vos logiciels plutôt que former à l’usage quotidien, voir l’<a href="/services/integration-ia-entreprise">intégration de l’IA en entreprise</a> ; pour la formation côté dirigeants, la formation <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a> ; et pour construire vos propres assistants, <a href="/formations/agents-ia-assistants">agents IA et assistants</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe congolaise à l’usage quotidien de l’IA ?',
            'texte'  => 'Dites combien de collaborateurs sont concernés à Brazzaville, à Pointe-Noire ou ailleurs, quels postes, quelles tâches pèsent le plus et quels outils sont déjà utilisés : la réponse arrive sous 24 heures, suivie d’une proposition et d’un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => 'Qui peut former mes équipes à l’IA à Brazzaville ou à Pointe-Noire ?', 'r' => 'Écoles, centres de formation, programmes publics et formateurs indépendants proposent des parcours. Richard SALANON, basé à Cotonou, forme à distance les équipes des entreprises du Congo-Brazzaville, en français, sur leurs propres documents. Comparez surtout ce que l’équipe sait faire seule un mois après la session.'],
        ['q' => 'Un formateur vient-il sur place au Congo-Brazzaville ?', 'r' => 'La formation décrite ici se donne à distance, en visioconférence depuis Cotonou, dans la même zone horaire que Brazzaville et Pointe-Noire. Chaque participant a besoin d’un ordinateur et d’une connexion qui supporte la visioconférence ; des documents d’exercice sont envoyés à l’avance et une solution de repli est prévue en cas de coupure.'],
        ['q' => 'Que dit la loi congolaise sur l’envoi de données personnelles à un outil d’IA ?', 'r' => 'La loi n° 29-2019 du 10 octobre 2019 prévoit une déclaration préalable à la commission (article 33) et n’autorise le transfert transfrontalier que vers un pays à niveau de protection suffisant, avec information de la commission (article 23). Un assistant en ligne peut impliquer un tel transfert : on anonymise avant l’envoi et on demande l’avis d’un juriste pour les cas sensibles.'],
        ['q' => 'La Commission nationale de protection des données existe-t-elle ?', 'r' => 'Selon ITWeb Africa, qui l’annonçait le 22 janvier 2026, sa mise en place vise à encadrer les traitements et à pouvoir sanctionner. Ses formulaires, ses délais et sa procédure de déclaration se confirment directement auprès d’elle avant toute démarche.'],
        ['q' => 'Le Congo-Brazzaville a-t-il une stratégie nationale pour l’IA ?', 'r' => 'Elle a été annoncée en préparation en janvier 2026 : le comité technique chargé de la rédiger s’est réuni le 6 mai 2026, avec l’appui du PNUD, et disposait de six mois pour remettre onze livrables, selon Ecofin et AllAfrica. Ce délai arrive à terme en novembre 2026 ; l’état du texte se vérifie auprès du ministère des Postes, des Télécommunications et de l’Économie numérique.'],
        ['q' => 'Les outils d’IA comprennent-ils le lingala et le kituba ?', 'r' => 'Le projet de stratégie nationale présenté en mai 2026 vise à bâtir des bases de données en lingala et en kituba pour la reconnaissance vocale et la traduction, selon Ecofin. D’ici là, la formation travaille en français ; tout texte produit dans une langue nationale est relu par un locuteur avant usage.'],
        ['q' => 'Les abonnements à ChatGPT, Claude ou Gemini sont-ils soumis à la TVA au Congo ?', 'r' => 'Selon Comarch, depuis le 1er juillet 2026, les services numériques de fournisseurs étrangers livrés à des clients situés au Congo supportent 18 % de TVA, sans seuil de chiffre d’affaires. Source unique relevée : confirmez le traitement exact auprès de l’administration fiscale ou de votre expert-comptable. La formation elle-même est facturée en FCFA, sur devis.'],
        ['q' => 'Le FONEA peut-il financer la formation IA de mes salariés ?', 'r' => 'Le FONEA finance surtout l’employabilité des demandeurs d’emploi, avec des offres de un an au plus à partir de 16 ans. Il annonce une formation de 500 jeunes aux outils d’IA, sans lien avec les salariés. Posez la question au fonds avant de compter sur lui ; aucune prise en charge n’est garantie.'],
        ['q' => 'Combien coûte la formation pour une équipe congolaise ?', 'r' => 'Le prix est fixé sur devis, en FCFA, après l’échange de cadrage. Il dépend du nombre de participants, de la durée (atelier, deux jours, accompagnement mensuel), du temps de préparation sur vos documents et de la connexion des participants. Les abonnements aux assistants restent à part.'],
        ['q' => 'Quelle différence avec la formation pour la RD Congo voisine ?', 'r' => 'Ce sont deux pays distincts, de part et d’autre du fleuve Congo, avec Brazzaville et Kinshasa pour capitales. La loi n° 29-2019 est une loi du Congo-Brazzaville : cette page ne dit rien du droit applicable en RD Congo, qui se vérifie séparément avant toute transposition.'],
        ['q' => 'Faut-il des connaissances techniques pour suivre la formation ?', 'r' => 'Non. Les assistants se pilotent en français, par écrit. La compétence décisive est de décrire précisément ce qu’on attend et de vérifier le résultat ; elle s’apprend en quelques heures, sur vos propres tâches.'],
        ['q' => 'Reçoit-on une attestation ?', 'r' => 'Oui, chaque participant reçoit une attestation de fin de formation et les supports de séance. Ce n’est ni un diplôme ni une certification d’éditeur.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Republic of the Congo', 'url' => 'https://datareportal.com/reports/digital-2026-republic-of-the-congo', 'date' => '2026-10-26'],
        ['titre' => 'Digital Business Africa, Congo T2 2025 : rapport de l’observatoire de l’ARPCE', 'url' => 'https://www.digitalbusiness.africa/congo-au-t2-2025-la-telephonie-mobile-genere-30371-milliards-de-fcfa-linternet-mobile-17032-milliards/', 'date' => '2026-10-26'],
        ['titre' => 'Direction générale du Trésor, le secteur du numérique au Congo-Brazzaville', 'url' => 'https://www.tresor.economie.gouv.fr/Pays/CG/le-secteur-du-numerique', 'date' => '2026-10-26'],
        ['titre' => 'Direction générale du Trésor, la situation économique du Congo', 'url' => 'https://www.tresor.economie.gouv.fr/Pays/CG/la-situation-economique-du-congo', 'date' => '2026-10-26'],
        ['titre' => 'Journal officiel de la République du Congo n° 45-2019 (loi n° 29-2019 sur les données personnelles)', 'url' => 'https://www.sgg.cg/JO/2019/congo-jo-2019-45.pdf', 'date' => '2026-10-26'],
        ['titre' => 'ITWeb Africa, Congo-Brazzaville met en place sa commission de protection des données (22 janvier 2026)', 'url' => 'https://itweb.africa/article/congo-brazzaville-intros-data-protection-commission/nWJadvbNzxkvbjO1', 'date' => '2026-10-26'],
        ['titre' => 'AllAfrica, séminaire de l’ARPCE sur la régulation du numérique (13 janvier 2026)', 'url' => 'https://fr.allafrica.com/stories/202601130262.html', 'date' => '2026-10-26'],
        ['titre' => 'AllAfrica, comité technique de la stratégie nationale d’IA (mai 2026)', 'url' => 'https://fr.allafrica.com/stories/202605070096.html', 'date' => '2026-10-26'],
        ['titre' => 'Ecofin Agency, le Congo construit sa stratégie d’IA autour de ses langues les plus parlées (11 mai 2026)', 'url' => 'https://www.ecofinagency.com/news-digital/1105-55470-congo-builds-ai-strategy-around-its-most-spoken-languages', 'date' => '2026-10-26'],
        ['titre' => 'FONEA, missions du Fonds national d’appui à l’employabilité et à l’apprentissage', 'url' => 'https://fonea.cg/missions', 'date' => '2026-10-26'],
        ['titre' => 'FONEA, accueil et conditions des offres', 'url' => 'https://fonea.cg/', 'date' => '2026-10-26'],
        ['titre' => 'Comarch, facture électronique certifiée et TVA sur les services numériques au Congo (16 juillet 2026)', 'url' => 'https://www.comarch.com/trade-and-services/data-management/legal-regulation-changes/republic-of-the-congo-rolls-out-certified-e-invoicing-and-digital-services-vat-rules/', 'date' => '2026-10-26'],
        ['titre' => 'OpenAI, ChatGPT : formules et tarifs', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-26'],
        ['titre' => 'Anthropic, formules de Claude', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-26'],
        ['titre' => 'Google, abonnements Gemini et Google AI', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-26'],
        ['titre' => 'Microsoft Learn, présentation de Microsoft Copilot Chat', 'url' => 'https://learn.microsoft.com/en-us/copilot/overview', 'date' => '2026-10-26'],
        ['titre' => 'DeepSeek, politique de confidentialité (mise à jour du 10 février 2026)', 'url' => 'https://cdn.deepseek.com/policies/en-US/deepseek-privacy-policy.html', 'date' => '2026-10-26'],
        ['titre' => 'Aide Google, NotebookLM', 'url' => 'https://support.google.com/notebooklm/answer/16164461', 'date' => '2026-10-26'],
        ['titre' => 'IANA, base de fuseaux horaires (zone1970.tab : Brazzaville et Cotonou dans la zone Africa/Lagos)', 'url' => 'https://data.iana.org/time-zones/tzdb/zone1970.tab', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
