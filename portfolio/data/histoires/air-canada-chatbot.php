<?php
// ============================================================
// data/histoires/air-canada-chatbot.php · Histoire externe : la décision
// Moffatt c. Air Canada (2024 BCCRT 149) du Civil Resolution Tribunal de
// Colombie-Britannique, rendue le 14 février 2024. Air Canada n'est pas un
// client. Faits relevés le 3 octobre 2026 dans le texte de la décision
// publiée par le tribunal et dans la presse citée en sources.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Air Canada : l\'entreprise répond de ce que dit son chatbot',
    'title'   => 'Air Canada condamnée pour son chatbot : la leçon PME',
    'meta'    => 'Le chatbot d\'Air Canada a inventé une règle de remboursement et la compagnie a dû payer : la décision de 2024 et les garde-fous pour votre assistant.',
    'en_bref' => 'En novembre 2022, le chatbot du site d\'Air Canada a affirmé à un passager endeuillé qu\'il pourrait demander le tarif de deuil après son voyage, ce que la politique de la compagnie excluait. Le 14 février 2024, le Civil Resolution Tribunal de Colombie-Britannique a rejeté l\'argument selon lequel le chatbot serait une entité distincte et a condamné Air Canada à payer 812,02 dollars canadiens. La leçon vaut pour toute entreprise qui confie son accueil à un assistant, sur son site ou sur WhatsApp : ce que dit l\'assistant engage l\'entreprise.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',
    'relation' => 'externe',
    'client'   => 'Air Canada',

    'faits_hero' => [
        ['l' => 'Secteur', 'v' => 'Transport aérien, service client en ligne'],
        ['l' => 'Période', 'v' => 'Novembre 2022 à février 2024'],
        ['l' => 'Issue', 'v' => 'Échec'],
        ['l' => 'Leçon', 'v' => 'L\'entreprise répond de son chatbot'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui était Air Canada, et pourquoi avait-elle placé un chatbot sur son site ?',
            'paragraphes' => [
                'Air Canada est la première compagnie aérienne du Canada. Selon le communiqué qui accompagne son rapport annuel, publié le 26 mars 2024, elle a transporté 46 millions de passagers en 2023, pour des produits d\'exploitation record de 21,8 milliards de dollars canadiens, avec environ 39 000 employés et des vols directs vers plus de 180 aéroports. C\'est une entreprise dotée d\'un service juridique, d\'un service client structuré et de moyens techniques importants : rien à voir, en apparence, avec une PME de Cotonou ou de Lyon.',
                'Son site web est pourtant le premier guichet de la plupart de ses clients, et la compagnie y avait installé un assistant conversationnel. En mars 2023, son directeur des systèmes d\'information, Mel Crocker, expliquait au Globe and Mail, selon le compte rendu qu\'en a fait Ars Technica le 16 février 2024, que ce chatbot avait été lancé comme une « expérience » d\'intelligence artificielle, d\'abord pour soulager le centre d\'appels lors des retards et des annulations. L\'ambition affichée était d\'automatiser, à terme, tous les services qui ne demandent pas d\'intervention humaine.',
                'Comme beaucoup de transporteurs, Air Canada propose un tarif pour les voyages liés au décès ou au décès imminent d\'un proche, que sa page française appelle « tarif pour urgence familiale ». La page consultée le 3 octobre 2026 précise que la demande se fait par téléphone, que le voyage doit avoir lieu dans les 10 jours suivant la réservation et ne pas dépasser 60 jours, et que la politique « ne donne pas droit à un remboursement pour des voyages déjà effectués ». Le tribunal a relevé que la page de l\'époque disait déjà, en substance, la même chose.',
                'Un point mérite d\'être noté dès le départ : la décision précise qu\'Air Canada n\'a fourni aucune information sur la nature de son chatbot. On ignore donc, d\'après les pièces publiques, s\'il reposait sur un grand modèle de langage, sur des réponses rédigées à l\'avance ou sur un mélange des deux. La presse a parlé d\'intelligence artificielle ; le tribunal, lui, s\'est contenté de constater que le passager ne parlait pas à un employé, et que cela ne changeait rien à la responsabilité de la compagnie.',
            ],
        ],
        [
            'type'  => 'frise',
            'titre' => 'Comment l\'affaire s\'est-elle déroulée, de la réservation à la décision ?',
            'items' => [
                ['date' => '11 novembre 2022', 'titre' => 'Un décès, une conversation avec le chatbot', 'texte' => 'La grand-mère de Jake Moffatt meurt en Ontario. Le jour même, il consulte le site d\'Air Canada, interroge le chatbot sur le tarif de deuil et reçoit une réponse l\'invitant à soumettre son billet dans les 90 jours suivant son émission pour obtenir le tarif réduit, même après le voyage. Il réserve un aller Vancouver-Toronto pour le lendemain, à 794,98 dollars, et un agent joint par téléphone lui indique un tarif de deuil d\'environ 380 dollars par trajet.'],
                ['date' => '16 novembre 2022', 'titre' => 'Le billet retour, toujours au plein tarif', 'texte' => 'S\'appuyant sur la même réponse du chatbot, il réserve le retour Toronto-Vancouver du 18 novembre pour 845,38 dollars, selon les montants retenus par la décision.'],
                ['date' => '17 novembre 2022', 'titre' => 'Première demande de tarif de deuil', 'texte' => 'Il dépose sa première demande, bien avant la limite de 90 jours annoncée par le chatbot. Les échanges de courriels avec la compagnie se poursuivent en décembre 2022 et en février 2023.'],
                ['date' => '5 février 2023', 'titre' => 'La capture d\'écran envoyée à la compagnie', 'texte' => 'Il transmet à Air Canada la capture de la réponse du chatbot, confirme avoir rempli le formulaire de remboursement et fourni le certificat de décès.'],
                ['date' => '8 février 2023', 'titre' => 'Air Canada reconnaît des « mots trompeurs »', 'texte' => 'Un représentant admet que le chatbot a employé des « misleading words », renvoie au lien vers la page sur les voyages pour deuil et indique que le problème a été noté pour mettre le chatbot à jour. Le remboursement reste refusé ; la compagnie propose un bon d\'achat de 200 dollars, que le passager dit ne pas avoir accepté.'],
                ['date' => 'Mars 2023', 'titre' => 'Le chatbot présenté comme une expérience', 'texte' => 'Le directeur des systèmes d\'information d\'Air Canada décrit au Globe and Mail le chatbot comme une expérience d\'intelligence artificielle destinée à alléger le centre d\'appels, selon Ars Technica.'],
                ['date' => '2023', 'titre' => 'Le litige porté devant le tribunal', 'texte' => 'Jake Moffatt saisit le Civil Resolution Tribunal de Colombie-Britannique, compétent pour la plupart des petites créances jusqu\'à 5 000 dollars ; le dossier porte le numéro SC-2023-005609. Il réclame 880 dollars.'],
                ['date' => '14 février 2024', 'titre' => 'La décision 2024 BCCRT 149', 'texte' => 'Le membre du tribunal Christopher C. Rivers retient une déclaration inexacte faite par négligence et ordonne à Air Canada de payer 812,02 dollars dans les 14 jours.'],
                ['date' => '15 et 16 février 2024', 'titre' => 'L\'affaire fait le tour du monde', 'texte' => 'CBC News, The Guardian et Ars Technica publient la décision. Air Canada déclare à Ars Technica qu\'elle se conformera à la décision et considère l\'affaire close ; le même jour, le journaliste ne trouve plus de chatbot sur le site de la compagnie.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que s\'est-il réellement passé entre le chatbot, la page officielle et le service client ?',
            'paragraphes' => [
                'Le cœur de l\'affaire tient en une contradiction. La réponse du chatbot, reproduite au paragraphe 15 de la décision, annonçait un tarif réduit en cas de décès d\'un proche, puis invitait le client qui avait « déjà voyagé » à soumettre son billet dans les 90 jours. Dans cette même réponse, les mots « bereavement fares » formaient un lien vers la page « Bereavement travel », qui disait le contraire : la politique ne s\'applique pas aux demandes présentées une fois le voyage terminé. L\'assistant renvoyait donc vers la règle qu\'il venait de contredire.',
                'Le passager a fait ce qu\'un client prudent fait. Il a lu la réponse, appelé la compagnie pour connaître le montant approximatif du tarif réduit, réservé ses deux vols, puis déposé sa demande six jours après la première réservation. L\'agent au téléphone lui a donné un ordre de grandeur, environ 380 dollars par trajet, sans rien dire de la possibilité ou non d\'une demande après coup, selon le paragraphe 19 de la décision. Personne, à aucun moment, n\'a corrigé l\'information du chatbot avant l\'achat.',
                'Viennent ensuite près de trois mois d\'échanges. Le 8 février 2023, un représentant d\'Air Canada reconnaît par écrit que le chatbot a employé des mots trompeurs et annonce une mise à jour de l\'outil, mais maintient le refus de rembourser l\'écart et propose un bon d\'achat de 200 dollars. Pour la compagnie, l\'affaire relevait d\'un défaut à corriger dans le chatbot ; pour le client, d\'une promesse à honorer. C\'est cet écart de lecture, plus que l\'erreur elle-même, qui a conduit le dossier devant le tribunal.',
                'Devant le tribunal, Air Canada, représentée par un employé, a avancé trois lignes de défense : le passager n\'avait pas suivi la procédure, la compagnie ne pouvait pas être tenue responsable des informations données par le chatbot, et son tarif intérieur, c\'est-à-dire ses conditions de transport, la protégeait. La deuxième ligne a retenu l\'attention du monde entier. Selon le paragraphe 27 de la décision, la compagnie soutenait en substance que le chatbot était une entité juridique distincte, responsable de ses propres actes.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Pourquoi la défense d\'Air Canada n\'a-t-elle pas tenu devant le tribunal ?',
            'intro' => 'Le tribunal a examiné la demande sous l\'angle de la déclaration inexacte faite par négligence, qui suppose cinq éléments : un devoir de prudence, une déclaration fausse ou trompeuse, une négligence, une confiance raisonnable du client et un préjudice. Chacun des arguments de la compagnie a été écarté pour une raison précise.',
            'items' => [
                ['titre' => 'Un chatbot n\'est pas une personne distincte', 'texte' => 'Le tribunal qualifie l\'argument de « remarquable » : même interactif, le chatbot reste une partie du site d\'Air Canada, et la compagnie répond de toutes les informations publiées sur ce site, qu\'elles viennent d\'une page fixe ou d\'un chatbot (paragraphe 27).'],
                ['titre' => 'Une page juste ne rattrape pas une réponse fausse', 'texte' => 'Air Canada soutenait que la bonne information figurait ailleurs sur son site. Le tribunal répond qu\'elle n\'explique ni pourquoi la page « Bereavement travel » serait plus fiable que le chatbot, ni pourquoi un client devrait vérifier une partie du site à l\'aide d\'une autre (paragraphe 28).'],
                ['titre' => 'Le client pouvait raisonnablement faire confiance', 'texte' => 'Rien ne permettait au passager de savoir qu\'une section du site était exacte et l\'autre non. Il a en outre convaincu le tribunal qu\'il n\'aurait pas pris ces vols de dernière minute au plein tarif s\'il avait connu la règle réelle (paragraphes 29 et 30).'],
                ['titre' => 'Un contrat se produit, il ne s\'invoque pas', 'texte' => 'La compagnie s\'appuyait sur son tarif intérieur sans en fournir le texte. Le tribunal rappelle qu\'un plaideur averti doit produire le contrat qu\'il invoque ; faute de quoi, la défense contractuelle n\'est pas prouvée (paragraphe 31).'],
                ['titre' => 'Le silence sur le prix a joué contre la compagnie', 'texte' => 'Air Canada était la mieux placée pour dire ce qu\'aurait coûté le tarif de deuil, mais n\'a produit aucune preuve. Le tribunal en a tiré une inférence défavorable et retenu le montant de 380 dollars par trajet avancé par le passager, taxes et frais en sus (paragraphes 35 à 37).'],
                ['titre' => 'Un bon d\'achat refusé n\'éteint pas la dette', 'texte' => 'La compagnie demandait de déduire le bon de 200 dollars proposé à titre de geste commercial. Le passager affirmait ne pas l\'avoir accepté et Air Canada n\'a rien prouvé d\'autre : aucune compensation n\'a été admise (paragraphe 41).'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qui est établi, et qu\'est-ce qui reste discuté ?',
            'texte' => 'Établis par la décision : la réponse du chatbot, le lien vers une page contraire, les dates, les montants, l\'aveu de « mots trompeurs » et l\'ordonnance de 812,02 dollars. Incertains : la technologie du chatbot, sur laquelle Air Canada n\'a rien dit, et l\'effet qu\'aurait eu un avertissement, qui aurait pu éviter la condamnation selon des experts cités par le Vancouver Sun et repris par Ars Technica ; le tribunal n\'a pas eu à le trancher. Business Law Today rappelle en février 2024 qu\'il s\'agit d\'un tribunal des petites créances, pas d\'une cour. Les deux billets du paragraphe 18 totalisent 1 640,36 dollars, chiffre repris par Ars Technica, mais la décision écrit 1 630,36 dollars ; l\'ordonnance reste inchangée.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quelles conséquences mesurables la décision a-t-elle eues ?',
            'items' => [
                ['valeur' => '812,02 $ CA', 'libelle' => 'Total qu\'Air Canada doit payer dans les 14 jours, selon la décision du 14 février 2024', 'source' => 'Civil Resolution Tribunal, 2024 BCCRT 149, paragraphe 44', 'url' => 'https://decisions.civilresolutionbc.ca/crt/crtd/en/item/525448/index.do'],
                ['valeur' => '650,88 $ CA', 'libelle' => 'Dommages : écart entre le prix payé et le coût des deux vols au tarif de deuil, taxes comprises', 'source' => 'Civil Resolution Tribunal, 2024 BCCRT 149, paragraphe 40', 'url' => 'https://decisions.civilresolutionbc.ca/crt/crtd/en/item/525448/index.do'],
                ['valeur' => '979,48 $ CA', 'libelle' => 'Ce que les deux trajets auraient dû coûter au tarif de deuil retenu, frais et taxes compris', 'source' => 'Civil Resolution Tribunal, 2024 BCCRT 149, paragraphes 38 à 40', 'url' => 'https://decisions.civilresolutionbc.ca/crt/crtd/en/item/525448/index.do'],
                ['valeur' => '36,14 $ et 125 $ CA', 'libelle' => 'Intérêts courus depuis le 17 novembre 2022, puis frais de procédure remboursés au passager', 'source' => 'Civil Resolution Tribunal, 2024 BCCRT 149, paragraphes 42 et 43', 'url' => 'https://decisions.civilresolutionbc.ca/crt/crtd/en/item/525448/index.do'],
                ['valeur' => '200 $ CA', 'libelle' => 'Bon d\'achat proposé par Air Canada pendant le litige, refusé et non déduit', 'source' => 'Civil Resolution Tribunal, 2024 BCCRT 149, paragraphe 41', 'url' => 'https://decisions.civilresolutionbc.ca/crt/crtd/en/item/525448/index.do'],
                ['valeur' => '15 mois', 'libelle' => 'Entre la première demande du passager, le 17 novembre 2022, et la décision du 14 février 2024', 'source' => 'Civil Resolution Tribunal, 2024 BCCRT 149, paragraphe 20', 'url' => 'https://decisions.civilresolutionbc.ca/crt/crtd/en/item/525448/index.do'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi une condamnation de 812 dollars a-t-elle coûté bien plus cher à Air Canada ?',
            'paragraphes' => [
                'Pour une compagnie qui annonçait, deux jours après la décision, des produits d\'exploitation record pour 2023, la somme est dérisoire. Le coût réel est ailleurs. CBC News a publié l\'affaire le 15 février 2024, The Guardian et Ars Technica le 16, BBC Travel le 23, et l\'analyse de Business Law Today relève des reprises jusqu\'au Washington Post. Selon CBC, une recherche dans la base canadienne de jurisprudence CanLII ne faisait apparaître aucun cas antérieur de mauvais conseil donné par un chatbot : l\'affaire Moffatt semblait être la première.',
                'Être le premier cas d\'école est une position inconfortable. Plus d\'un an après, en avril 2025, Ars Technica rappelait encore l\'affaire Air Canada pour expliquer un incident chez un tout autre éditeur. La phrase du tribunal sur le chatbot « entité distincte » est devenue l\'exemple type de ce qu\'il ne faut pas plaider. Interrogé par BBC Travel le 23 février 2024, Gabor Lukacs, président de l\'association Air Passenger Rights, y voyait un principe de bon sens : qui confie une partie de son activité à l\'intelligence artificielle répond de ce qu\'elle fait.',
                'L\'outil lui-même en a payé le prix. Le 16 février 2024, Ars Technica n\'a plus trouvé de chatbot sur le site d\'Air Canada, et la compagnie n\'a pas répondu à sa question sur ce point. Un investissement présenté un an plus tôt comme le début d\'une automatisation du service client semblait donc arrêté, au moins temporairement. La spécialiste de l\'aérien Marisa Garcia résumait l\'enjeu auprès de BBC Travel : les compagnies doivent réparer vite les erreurs de leurs chatbots plutôt que de laisser un litige de petites créances tourner au désastre d\'image.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Qu\'est-ce qui a été fait, et qu\'est-ce qui aurait évité le problème ?',
            'options'  => ['Ce qui a été fait, d\'après la décision', 'Ce qui aurait évité le problème'],
            'criteres' => [
                ['critere' => 'Source des réponses', 'valeurs' => ['Le chatbot donne une règle qui contredit la page officielle vers laquelle il renvoie', 'Une seule source de vérité pour les politiques tarifaires, que le chatbot cite au lieu de reformuler']],
                ['critere' => 'Sujets engageants', 'valeurs' => ['L\'assistant répond librement sur un remboursement et un délai de 90 jours', 'Tarifs, remboursements et exceptions limités à des réponses validées, ou renvoyés vers un humain']],
                ['critere' => 'Cohérence des canaux', 'valeurs' => ['Le chatbot, la page et l\'agent au téléphone ne disent pas la même chose', 'Les mêmes règles alimentent le site, le chatbot et le script des conseillers']],
                ['critere' => 'Escalade vers un humain', 'valeurs' => ['Aucune correction avant l\'achat, malgré l\'appel téléphonique du client', 'Une confirmation humaine obligatoire avant tout achat fondé sur une exception tarifaire']],
                ['critere' => 'Traitement de la réclamation', 'valeurs' => ['Aveu de l\'erreur, refus de payer l\'écart, bon d\'achat de 200 dollars', 'Honorer la réponse donnée, puis corriger l\'outil : l\'écart réclamé était de 880 dollars']],
                ['critere' => 'Défense devant le juge', 'valeurs' => ['Chatbot présenté comme une entité distincte ; tarif invoqué sans être produit', 'Reconnaître la responsabilité de l\'entreprise et discuter seulement le montant, pièces à l\'appui']],
                ['critere' => 'Preuves et journaux', 'valeurs' => ['C\'est le client qui produit la capture d\'écran ; la compagnie ne dit rien de son outil', 'Conversations journalisées, version du chatbot et sources consultées retrouvables pour chaque réponse']],
            ],
            'verdict'  => 'Chaque décision prise par Air Canada après l\'erreur a augmenté son coût : la réponse fausse était un défaut technique, le refus d\'honorer cette réponse en a fait un litige, et la défense de l\'« entité distincte » en a fait un symbole.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels garde-fous un chatbot ou un agent IA doit-il avoir avant de parler aux clients ?',
            'intro' => 'Aucun de ces garde-fous ne demande une grande entreprise. Ils reposent sur des choix de conception faits avant la mise en ligne, et sur une routine de contrôle tenue ensuite.',
            'items' => [
                ['titre' => 'Une source de vérité unique', 'texte' => 'Les prix, délais, conditions de retour et exceptions vivent dans un seul document ou une seule base, tenue par une personne nommée. Le chatbot lit cette source ; il ne garde pas sa propre version des règles dans une consigne écrite un jour et oubliée ensuite.'],
                ['titre' => 'Des réponses ancrées et vérifiables', 'texte' => 'Sur les sujets qui engagent l\'entreprise, l\'assistant reprend le texte validé et indique d\'où il vient. S\'il ne trouve pas la réponse dans la source, il le dit et propose un conseiller, au lieu de compléter avec une formule plausible.'],
                ['titre' => 'Une liste de sujets réservés', 'texte' => 'Remboursements, remises, garanties, délais légaux, conseils médicaux ou financiers : ces sujets sont listés à l\'avance. L\'assistant y répond seulement par des formulations approuvées, ou transmet la conversation à un humain.'],
                ['titre' => 'Une escalade humaine visible', 'texte' => 'Un bouton ou un mot clé permet de parler à une personne, avec un délai de réponse annoncé. L\'escalade se déclenche aussi d\'elle-même quand le client parle d\'argent, de litige, d\'urgence ou de deuil.'],
                ['titre' => 'Une journalisation complète', 'texte' => 'Chaque échange est conservé avec la date, la version de l\'assistant et les sources consultées, pendant une durée fixée et annoncée. En cas de contestation, l\'entreprise peut montrer ce qui a été dit et pourquoi, au lieu de découvrir la conversation dans la capture d\'écran du client.'],
                ['titre' => 'Des tests avant chaque changement', 'texte' => 'Une série de questions pièges, rédigées à partir des vraies demandes des clients, est rejouée avant chaque mise à jour des prix, des politiques ou du modèle. Une réponse qui change sans raison bloque la mise en production.'],
                ['titre' => 'Une identité annoncée', 'texte' => 'Le client sait qu\'il parle à un assistant automatique, pas à « Sam » ou à « Aïcha ». Cela ne supprime pas la responsabilité de l\'entreprise, mais évite d\'ajouter la tromperie sur l\'interlocuteur à l\'erreur sur le fond.'],
                ['titre' => 'Une règle de réclamation décidée à froid', 'texte' => 'L\'entreprise décide avant le lancement ce qu\'elle fera quand l\'assistant se trompe : en règle générale, honorer la réponse quand le client a agi de bonne foi, corriger la source, puis vérifier les conversations semblables.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Air Canada est-elle un cas isolé ?',
            'paragraphes' => [
                'Non. En janvier 2024, un mois avant la décision Moffatt, le transporteur de colis DPD a dû désactiver une partie de son assistant en ligne après une mise à jour : un client avait obtenu qu\'il l\'insulte et dénigre l\'entreprise. Selon la BBC, le 19 janvier 2024, une des publications consacrées à l\'incident avait été vue 800 000 fois en 24 heures. DPD expliquait utiliser un élément d\'intelligence artificielle dans sa messagerie depuis plusieurs années, en complément de conseillers humains joignables par téléphone et par WhatsApp.',
                'En mars 2024, l\'enquête de The Markup sur le chatbot MyCity, lancé par la ville de New York en octobre 2023 pour renseigner les entrepreneurs, a montré qu\'il affirmait, entre autres, qu\'un employeur pouvait prendre une partie des pourboires de ses salariés ou qu\'un restaurant pouvait refuser les espèces, deux réponses contraires aux règles de la ville. Le site affichait une mise en garde sur des contenus possiblement incorrects, mais l\'utilisateur ordinaire n\'avait aucun moyen de repérer l\'erreur. Le fait que l\'outil soit présenté comme officiel lui donnait au contraire une autorité supplémentaire.',
                'En avril 2025, l\'éditeur du logiciel Cursor a vu son assistant de support, signé « Sam », inventer une règle limitant l\'usage à un seul appareil par abonnement. Selon Ars Technica, le 17 avril 2025, plusieurs utilisateurs ont annoncé résilier leur abonnement avant qu\'un représentant ne démente sur Reddit. La suite contraste avec Air Canada : le cofondateur s\'est excusé, l\'utilisateur a été remboursé, et les réponses rédigées par l\'IA sont désormais signalées comme telles. Même erreur de départ, mais un démenti public en trois heures et aucune tentative de rejeter la faute sur l\'outil.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Quelle est la leçon à retenir en une idée ?',
            'texte' => 'Un assistant automatique n\'est pas un tiers : c\'est votre entreprise qui parle, avec votre logo et votre autorité. Avant de le laisser répondre, décidez sur quoi il a le droit de s\'engager, d\'où viennent ses réponses, quand il passe la main à un humain, et ce que vous ferez le jour où il se trompera.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels signaux doivent alerter une PME de Cotonou, d\'Abidjan, de Dakar, de Lomé, de Douala ou de Lyon ?',
            'intro' => 'Une PME n\'a ni le budget ni le service juridique d\'Air Canada, mais elle installe souvent un assistant plus vite, sur son site ou sur WhatsApp, avec moins de contrôles. Ces signaux montrent que l\'assistant parle déjà plus qu\'il ne devrait.',
            'items' => [
                ['titre' => 'L\'assistant cite des prix', 'texte' => 'Il annonce des tarifs, des frais de livraison ou des remises alors qu\'il n\'est relié à aucun catalogue à jour. Le jour où les prix changent, il continue de donner les anciens, et le client garde la capture.'],
                ['titre' => 'Personne ne lit les conversations', 'texte' => 'Les échanges sont stockés quelque part, mais aucun membre de l\'équipe ne les relit chaque semaine. Les erreurs ne remontent que par les plaintes, c\'est-à-dire trop tard et seulement en partie.'],
                ['titre' => 'Les canaux se contredisent', 'texte' => 'Le site dit une chose, l\'assistant WhatsApp une autre, et le vendeur au comptoir une troisième. C\'est exactement la situation d\'Air Canada, où la page, le chatbot et l\'agent au téléphone ne tenaient pas le même discours.'],
                ['titre' => 'La consigne date du lancement', 'texte' => 'Les instructions données au modèle ont été écrites une fois, par un prestataire, et personne en interne ne sait les modifier. Les promotions, les horaires et les conditions ont changé depuis.'],
                ['titre' => 'Aucune porte de sortie', 'texte' => 'Le client qui veut parler à quelqu\'un tourne en rond, ou l\'assistant promet un rappel que personne n\'est chargé de faire. La frustration s\'ajoute alors à l\'erreur.'],
                ['titre' => 'L\'assistant se fait passer pour un employé', 'texte' => 'Il porte un prénom, se présente comme membre de l\'équipe et ne dit jamais qu\'il est automatique. Le jour de l\'erreur, le client se sent trompé deux fois, comme l\'ont exprimé les utilisateurs de Cursor en 2025.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que coûte une action à temps comparée à une action tardive ?',
            'legende' => 'Comparaison qualitative, sans montant : les coûts réels dépendent de votre volume de conversations, de vos outils et de vos prix. Le principe vient de l\'affaire Moffatt, où chaque étape repoussée a alourdi la facture.',
            'entetes' => ['Décision', 'Prise avant la mise en ligne', 'Prise après un incident'],
            'lignes'  => [
                ['Rassembler les règles dans une source unique', 'Quelques jours de travail interne pour écrire et valider prix, délais et conditions', 'Le même travail, fait dans l\'urgence, pendant qu\'il faut aussi répondre aux clients mécontents'],
                ['Limiter les sujets engageants', 'Une liste de sujets réservés et de réponses validées, intégrée dès la conception', 'Une refonte de l\'assistant, parfois sa mise hors ligne, comme l\'ont fait DPD et, selon Ars Technica, Air Canada'],
                ['Prévoir l\'escalade humaine', 'Un circuit simple : qui reprend la conversation, dans quel délai, sur quel outil', 'Des conversations perdues, des rappels promis et non faits, et des clients qui partent'],
                ['Journaliser les échanges', 'Un paramétrage au lancement, avec une durée de conservation décidée', 'Aucune preuve de ce qui a été dit, sauf la capture d\'écran du client'],
                ['Honorer une erreur de bonne foi', 'Le coût de la remise ou du remboursement promis, souvent modeste', 'Le même montant, plus le temps passé, les frais éventuels de procédure et l\'atteinte à la réputation'],
                ['Annoncer que l\'interlocuteur est un assistant', 'Une phrase d\'accueil et un libellé visible', 'Un soupçon de tromperie qui s\'ajoute au litige, et en Europe un manquement possible au règlement sur l\'IA'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles encadrent déjà un chatbot en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'La décision Moffatt relève du droit de la Colombie-Britannique : elle ne s\'impose ni à un juge de Cotonou ni à un juge de Lyon. Son raisonnement repose pourtant sur une idée qu\'un dirigeant prudent devrait tenir pour acquise partout : l\'information donnée au client sur le site de l\'entreprise, par un écran fixe ou par un assistant, est l\'information de l\'entreprise. Mieux vaut concevoir l\'outil en partant de cette hypothèse qu\'espérer qu\'un tribunal en retiendra une autre.',
                'Dans l\'Union européenne, l\'article 50 du règlement sur l\'intelligence artificielle impose aux fournisseurs de systèmes destinés à dialoguer avec des personnes de les informer qu\'elles interagissent avec une IA, sauf si c\'est évident. La Commission européenne indique que ces règles de transparence s\'appliquent depuis août 2026 et cite précisément les chatbots en exemple. Une entreprise de Lyon qui développe ou fait développer son propre assistant doit donc l\'annoncer clairement dès le premier message.',
                'Les conversations contiennent des données personnelles. La CNIL, dans ses conseils du 19 février 2021, demande de fixer une durée de conservation adaptée à la finalité, rappelle qu\'une conversation sans intervention humaine ne peut à elle seule fonder une décision importante pour la personne, et recommande d\'inviter les utilisateurs à ne pas confier de données sensibles. Au Bénin, le livre V de la loi n° 2017-20 du 20 avril 2018 portant code du numérique encadre ces traitements, sous le contrôle de l\'Autorité de protection des données personnelles.',
                'WhatsApp a aussi fixé ses propres règles. Depuis le 15 janvier 2026, les conditions de la plateforme WhatsApp Business interdisent aux fournisseurs d\'assistants d\'IA généralistes de s\'en servir pour distribuer leurs outils, selon TechCrunch. Meta a précisé au même média que les entreprises qui utilisent l\'IA pour servir leurs propres clients ne sont pas concernées. Un assistant WhatsApp de PME reste donc permis, à condition de passer par l\'API officielle et de se limiter au service de l\'entreprise.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble ce risque dans une PME, secteur par secteur ?',
            'items' => [
                ['secteur' => 'Hôtellerie à Cotonou', 'probleme' => 'L\'assistant WhatsApp de l\'hôtel affirme que l\'annulation est gratuite jusqu\'à la veille, alors que la règle a changé pour la haute saison.', 'solution' => 'Les conditions d\'annulation sont lues dans le logiciel de réservation, avec leurs dates de validité ; toute demande d\'exception part vers la réception, qui confirme par écrit.'],
                ['secteur' => 'Commerce en ligne à Abidjan', 'probleme' => 'Le chatbot du site promet la livraison gratuite dans tout Abidjan et des retours sous 15 jours, des conditions copiées d\'une ancienne campagne.', 'solution' => 'Frais de livraison et politique de retour viennent d\'une page unique, mise à jour par le responsable commercial ; l\'assistant la cite et renvoie vers elle, sans reformuler.'],
                ['secteur' => 'Clinique à Dakar', 'probleme' => 'Les patients demandent à l\'assistant de prise de rendez-vous si un symptôme est grave ou si un médicament convient.', 'solution' => 'L\'assistant ne donne aucun avis médical : il prend le rendez-vous, oriente vers les urgences selon une liste validée par les médecins et invite à ne pas écrire de détails de santé inutiles.'],
                ['secteur' => 'Microfinance à Lomé', 'probleme' => 'Un client obtient de l\'assistant un taux d\'intérêt « indicatif » qu\'il présente ensuite comme une promesse au guichet.', 'solution' => 'Les taux et les conditions de crédit sont réservés aux conseillers ; l\'assistant explique les étapes et les pièces à fournir, puis transmet le dossier à un humain.'],
                ['secteur' => 'Pièces détachées à Douala', 'probleme' => 'L\'assistant confirme qu\'une pièce est compatible avec un modèle de véhicule et qu\'elle est en stock, sans consulter l\'inventaire.', 'solution' => 'Compatibilité et stock sont interrogés en direct dans le logiciel de gestion ; sans réponse certaine, l\'assistant propose une vérification par un vendeur avec photo de la plaque.'],
                ['secteur' => 'Agence de voyages à Lyon', 'probleme' => 'L\'assistant du site résume les conditions de remboursement d\'un forfait de façon plus généreuse que le contrat.', 'solution' => 'Le texte contractuel est la seule source citée, l\'assistant se présente comme une IA dès le premier message et toute question de remboursement est transmise à un conseiller.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Comment éviter la même erreur avec votre propre assistant ?',
            'items' => [
                'Nommer un responsable interne de l\'assistant, chargé de ses règles, de ses mises à jour et de la relecture des conversations.',
                'Rassembler prix, délais, conditions de retour et exceptions dans une source unique que l\'assistant consulte à chaque réponse.',
                'Dresser la liste des sujets réservés (remboursements, remises, garanties, santé, crédit) et des réponses validées pour chacun.',
                'Prévoir une escalade vers un humain, visible pour le client et déclenchée automatiquement sur les sujets sensibles.',
                'Annoncer dès le premier message que le client parle à un assistant automatique.',
                'Journaliser chaque conversation avec la date, la version de l\'assistant et les sources consultées, pour une durée décidée et annoncée.',
                'Rejouer une série de questions pièges avant chaque changement de prix, de politique ou de modèle.',
                'Vérifier que le site, l\'assistant, WhatsApp et le personnel donnent la même réponse aux mêmes questions.',
                'Décider à l\'avance qu\'une réponse erronée donnée de bonne foi sera honorée, puis corrigée à la source.',
                'Ne jamais plaider que l\'assistant « s\'est trompé tout seul » : c\'est l\'entreprise qui a parlé.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Richard SALANON aide-t-il à déployer un assistant qui n\'engage pas l\'entreprise à son insu ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Sur ce sujet précis, son travail commence avant l\'outil. Pour un <a href="/services/agents-ia-chatbot-whatsapp">agent IA ou un chatbot WhatsApp</a>, il fait d\'abord écrire la source de vérité avec l\'équipe : prix, délais, conditions, exceptions, et la liste des sujets que l\'assistant n\'a pas le droit de trancher seul. L\'assistant est ensuite construit pour lire cette source, citer ses réponses, annoncer qu\'il est automatique et passer la main à un humain sur les sujets sensibles.',
                'Quand l\'assistant doit s\'appuyer sur un logiciel existant (ERP, site marchand, outil de réservation), l\'<a href="/services/integration-ia-entreprise">intégration de l\'IA dans l\'entreprise</a> consiste à le brancher sur les données réelles plutôt que sur une copie figée. L\'<a href="/services/automatisation-ia">automatisation avec l\'IA</a> sert à organiser l\'escalade, la journalisation des conversations et les alertes à l\'équipe. Le choix du modèle de langage se fait selon vos contraintes ; le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> détaille les critères.',
                'Sa façon de travailler tient en quelques principes vérifiables : une série de questions pièges rédigée avec vous et rejouée à chaque mise à jour, des accès et des journaux à votre nom, une personne de votre équipe formée pour modifier les règles sans dépendre du prestataire, et une réponse sous 24 heures. Intérêt déclaré : il édite <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, et les autres récits sont réunis dans les <a href="/histoires/">histoires</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre assistant dit-il vraiment ce que votre entreprise accepte de promettre ?',
            'texte'  => 'Décrivez votre assistant actuel ou votre projet (site, WhatsApp, sujets traités, volume de conversations) : vous recevez un diagnostic des réponses à risque, des garde-fous manquants et un devis pour les poser.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un diagnostic'],
        ],
    ],

    'faq' => [
        ['q' => 'Qu\'a décidé le tribunal dans l\'affaire Moffatt c. Air Canada ?', 'r' => 'Le 14 février 2024, le Civil Resolution Tribunal de Colombie-Britannique a jugé qu\'Air Canada avait fait une déclaration inexacte par négligence, par l\'intermédiaire du chatbot de son site, sur la procédure du tarif de deuil. Il l\'a condamnée à payer 812,02 dollars canadiens dans les 14 jours : 650,88 dollars de dommages, 36,14 dollars d\'intérêts et 125 dollars de frais.'],
        ['q' => 'Qu\'avait répondu exactement le chatbot d\'Air Canada ?', 'r' => 'Selon la capture citée au paragraphe 15 de la décision, le chatbot indiquait qu\'un client devant voyager immédiatement, ou ayant déjà voyagé, pouvait soumettre son billet pour obtenir le tarif réduit dans les 90 jours suivant son émission, au moyen du formulaire de remboursement. La page officielle vers laquelle il renvoyait excluait au contraire les demandes présentées après le voyage.'],
        ['q' => 'Air Canada a-t-elle vraiment soutenu que son chatbot était une entité distincte ?', 'r' => 'C\'est ainsi que le tribunal a résumé sa position au paragraphe 27 : la compagnie soutenait ne pas pouvoir être tenue responsable des informations données par ses agents ou représentants, chatbot compris, sans expliquer pourquoi. Le tribunal a jugé l\'argument « remarquable » et rappelé que le chatbot n\'est qu\'une partie du site d\'Air Canada.'],
        ['q' => 'Un avertissement du type « les réponses peuvent être inexactes » aurait-il suffi ?', 'r' => 'Personne ne peut l\'affirmer. Des experts cités par le Vancouver Sun, selon Ars Technica, pensaient qu\'un tel avertissement aurait pu changer l\'issue, mais le tribunal n\'a pas eu à trancher la question. L\'enquête de The Markup sur le chatbot de New York montre aussi qu\'une mise en garde n\'aide pas l\'utilisateur à repérer l\'erreur. Le plus sûr reste d\'empêcher la réponse fausse.'],
        ['q' => 'Cette décision s\'applique-t-elle au Bénin, en Côte d\'Ivoire ou en France ?', 'r' => 'Non, elle relève du droit de la Colombie-Britannique et émane d\'un tribunal des petites créances. Mais son raisonnement, selon lequel l\'entreprise répond de toutes les informations publiées sur son site, est celui qu\'un client ou un juge tiendra le plus naturellement. Concevez votre assistant comme si ce principe s\'appliquait chez vous.'],
        ['q' => 'Une PME est-elle responsable de ce que dit son assistant WhatsApp ?', 'r' => 'Il faut partir de ce principe. Pour le client, l\'assistant parle au nom de l\'entreprise, avec son nom et son numéro. La décision Moffatt n\'a fait aucune différence entre une page fixe et un chatbot ; rien ne justifie d\'en faire une entre un site et une messagerie. Limitez donc les sujets sur lesquels l\'assistant peut s\'engager.'],
        ['q' => 'Faut-il dire au client qu\'il parle à une intelligence artificielle ?', 'r' => 'Dans l\'Union européenne, l\'article 50 du règlement sur l\'IA l\'exige, sauf si c\'est évident, et la Commission européenne indique que ces règles de transparence s\'appliquent depuis août 2026. Ailleurs, c\'est une bonne pratique : l\'affaire Cursor, en avril 2025, a montré que des clients découvrant après coup que « Sam » était un robot se sentaient trompés.'],
        ['q' => 'Combien de temps conserver les conversations d\'un chatbot ?', 'r' => 'Le temps nécessaire à la finalité, ni plus ni moins. La CNIL, dans ses conseils du 19 février 2021, distingue un chatbot d\'aide à l\'achat, dont les données peuvent être effacées en fin de conversation, d\'un échange lié à une réclamation, qui justifie une conservation plus longue. Fixez la durée par écrit et annoncez-la.'],
        ['q' => 'Qu\'est-ce qu\'une source de vérité pour un chatbot ?', 'r' => 'C\'est le document ou la base unique où figurent les règles que l\'assistant a le droit d\'énoncer : prix, délais, conditions, exceptions. Il y lit ses réponses au lieu de les inventer, et une seule personne la met à jour. Chez Air Canada, le chatbot et la page officielle disaient deux choses différentes : il n\'y avait pas, en pratique, de source unique.'],
        ['q' => 'Que faire si notre assistant a déjà donné une information fausse à un client ?', 'r' => 'Retrouver la conversation, vérifier si le client a agi de bonne foi sur cette base, et en règle générale honorer ce qui a été dit, comme l\'a fait l\'éditeur de Cursor en remboursant l\'utilisateur. Corrigez ensuite la source, rejouez les questions semblables et relisez les conversations récentes sur le même sujet.'],
    ],

    'sources' => [
        ['titre' => 'Civil Resolution Tribunal, Moffatt v. Air Canada, 2024 BCCRT 149, décision du 14 février 2024', 'url' => 'https://decisions.civilresolutionbc.ca/crt/crtd/en/item/525448/index.do', 'date' => '2026-10-03'],
        ['titre' => 'Civil Resolution Tribunal, compétence en matière de petites créances (jusqu\'à 5 000 dollars)', 'url' => 'https://civilresolutionbc.ca/solution-explorer/small-claims/', 'date' => '2026-10-03'],
        ['titre' => 'CBC News, « Air Canada found liable for chatbot\'s bad advice on plane tickets », 15 février 2024', 'url' => 'https://www.cbc.ca/news/canada/british-columbia/air-canada-chatbot-lawsuit-1.7116416', 'date' => '2026-10-03'],
        ['titre' => 'The Guardian, « Air Canada ordered to pay customer who was misled by airline\'s chatbot », 16 février 2024', 'url' => 'https://www.theguardian.com/world/2024/feb/16/air-canada-chatbot-lawsuit', 'date' => '2026-10-03'],
        ['titre' => 'Ars Technica, « Air Canada must honor refund policy invented by airline\'s chatbot », 16 février 2024', 'url' => 'https://arstechnica.com/tech-policy/2024/02/air-canada-must-honor-refund-policy-invented-by-airlines-chatbot/', 'date' => '2026-10-03'],
        ['titre' => 'BBC Travel, « Airline held liable for its chatbot giving passenger bad advice », 23 février 2024', 'url' => 'https://www.bbc.com/travel/article/20240222-air-canada-chatbot-misinformation-what-travellers-should-know', 'date' => '2026-10-03'],
        ['titre' => 'Business Law Today (American Bar Association), « BC Tribunal Confirms Companies Remain Liable for Information Provided by AI Chatbot », février 2024', 'url' => 'https://businesslawtoday.org/2024/02/bc-tribunal-confirms-companies-remain-liable-for-information-provided-by-ai-chatbot/', 'date' => '2026-10-03'],
        ['titre' => 'Air Canada, tarifs pour urgence familiale (politique de voyage pour deuil)', 'url' => 'https://www.aircanada.com/ca/fr/aco/home/plan/special-assistance/bereavement-fares.html', 'date' => '2026-10-03'],
        ['titre' => 'Air Canada, communiqué sur la publication du rapport annuel 2023, 26 mars 2024', 'url' => 'https://www.newswire.ca/news-releases/air-canada-issues-annual-report-highlighting-its-achievements-in-2023-828731674.html', 'date' => '2026-10-03'],
        ['titre' => 'BBC News, « DPD error caused chatbot to swear at customer », 19 janvier 2024', 'url' => 'https://www.bbc.com/news/technology-68025677', 'date' => '2026-10-03'],
        ['titre' => 'The Markup, « NYC\'s AI Chatbot Tells Businesses to Break the Law », 29 mars 2024', 'url' => 'https://themarkup.org/news/2024/03/29/nycs-ai-chatbot-tells-businesses-to-break-the-law', 'date' => '2026-10-03'],
        ['titre' => 'Ars Technica, « Company apologizes after AI support agent invents policy that causes user uproar », 17 avril 2025', 'url' => 'https://arstechnica.com/ai/2025/04/cursor-ai-support-bot-invents-fake-policy-and-triggers-user-uproar/', 'date' => '2026-10-03'],
        ['titre' => 'CNIL, « Chatbots : les conseils de la CNIL pour respecter les droits des personnes », 19 février 2021', 'url' => 'https://www.cnil.fr/fr/chatbots-les-conseils-de-la-cnil-pour-respecter-les-droits-des-personnes', 'date' => '2026-10-03'],
        ['titre' => 'Commission européenne, cadre réglementaire de l\'IA (règles de transparence et chatbots)', 'url' => 'https://digital-strategy.ec.europa.eu/fr/policies/regulatory-framework-ai', 'date' => '2026-10-03'],
        ['titre' => 'Commission européenne, AI Act Service Desk, article 50 du règlement (UE) 2024/1689', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50', 'date' => '2026-10-03'],
        ['titre' => 'TechCrunch, « WhatsApp changes its terms to bar general-purpose chatbots from its platform », 18 octobre 2025, mis à jour le 15 janvier 2026', 'url' => 'https://techcrunch.com/2025/10/18/whatssapp-changes-its-terms-to-bar-general-purpose-chatbots-from-its-platform/', 'date' => '2026-10-03'],
        ['titre' => 'Secrétariat général du gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/download', 'date' => '2026-10-03'],
    ],

    'liens' => [
        'services'    => ['agents-ia-chatbot-whatsapp', 'integration-ia-entreprise', 'automatisation-ia'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
