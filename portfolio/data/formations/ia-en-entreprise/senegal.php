<?php
// ============================================================
// data/formations/ia-en-entreprise/senegal.php · Formation IA en entreprise au Sénégal.
// Faits externes consultés le 25/10/2026 : tarifs des éditeurs, UIT, ARTP (via Le Soleil),
// BCEAO (via Le Soleil), ANSD (région de Thiès), 3FPT (site, conventions de juillet 2026,
// bilan de Saint-Louis du 9 octobre 2026), CDP (formalités), WIPO Lex, OCDE.AI, New Deal
// Technologique, Orange Sonatel (Magal 2026), politique de DeepSeek, aide Google Workspace.
// Non confirmé et donc retiré : adoption d'une nouvelle loi sur les données personnelles,
// conditions d'éligibilité et agrément des organismes de formation au 3FPT.
// Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formateur IA en entreprise au Sénégal : vos équipes de Dakar, Thiès, Saint-Louis ou Touba utilisent ChatGPT, Claude et Gemini sur leurs propres documents, avec une règle claire sur les données',
    'title'   => 'Formation IA pour les équipes au Sénégal | Richard SALANON',
    'meta'    => 'Formation IA pour vos équipes au Sénégal : ChatGPT, Claude et Gemini sur vos documents, règles de la CDP, piste 3FPT. À distance, devis en FCFA.',
    'en_bref' => 'Richard SALANON forme à distance, depuis Cotonou, les équipes des entreprises sénégalaises à utiliser ChatGPT, Claude, Gemini ou Copilot sur leurs propres documents, en vérifiant chaque résultat et en respectant la loi sur les données personnelles. Les séances suivent vos heures de bureau à Dakar, avec une heure de moins qu\'à Cotonou, en français, avec des exercices bâtis sur vos fichiers. Le devis est établi en FCFA, après un échange de cadrage. Les formats vont de l\'atelier d\'une demi-journée à l\'accompagnement mensuel.',
    'publie'  => '2026-11-25',
    'maj'     => '2026-11-25',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former mes équipes à l\'IA au Sénégal, et comment choisir ?',
            'paragraphes' => [
                'Richard SALANON, consultant en digitalisation basé à Cotonou, forme à distance les équipes des entreprises sénégalaises à l\'usage quotidien des assistants d\'IA : rédiger, résumer, analyser et vérifier à partir de leurs propres documents, dans leurs propres comptes. Les séances ont lieu en visioconférence aux heures de bureau de Dakar, en français, et le devis est établi en FCFA après un échange de cadrage.',
                'Un formateur IA d\'entreprise n\'est pas un présentateur d\'outil. Il ne montre pas ce que ChatGPT sait faire sur des exemples choisis pour impressionner ; il prend la tâche que votre assistante, votre comptable ou votre commercial répète chaque semaine, la refait avec l\'assistant sur un vrai document, puis montre comment vérifier le résultat avant de l\'envoyer. La différence se juge un mois plus tard : l\'équipe a-t-elle gardé un geste précis, ou seulement le souvenir d\'une belle démonstration ?',
                'Pour choisir, posez cinq questions à n\'importe quel prestataire. Les exercices se font-ils sur vos documents, anonymisés, ou sur des exemples génériques ? Que dit-il des données qu\'il ne faut jamais confier à un assistant ? Combien de personnes par groupe, et qui regarde le travail de chacun ? Que reste-t-il à l\'entreprise après la session : consignes, modes opératoires, supports modifiables ? Et comment mesure-t-on le résultat : un temps de tâche avant et après, ou un questionnaire de satisfaction ?',
                'Ces critères comptent davantage au Sénégal qu\'ailleurs sur un point : la plupart des équipes y travaillent déjà avec WhatsApp, Wave et Orange Money, et rapportent à l\'IA les mêmes habitudes de rapidité. Sans règle écrite, un document de client part vite dans le compte gratuit d\'un salarié. Une bonne formation installe le réflexe inverse : classer d\'abord, confier ensuite.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en est l\'IA au Sénégal, et que dit la politique publique ?',
            'paragraphes' => [
                'Le pays est connecté par le téléphone. Selon le rapport du premier trimestre 2025 de l\'Autorité de régulation des télécommunications et des postes, relayé par Le Soleil le 8 juillet 2025, le Sénégal comptait 21 734 871 lignes internet, dont 20 950 396 par le mobile et 784 475 par le fixe, avec 18 189 870 abonnés au haut débit mobile. Ces chiffres comptent des lignes, non des personnes, mais ils disent l\'essentiel : un assistant d\'IA doit fonctionner sur un téléphone ou un ordinateur relié par données mobiles.',
                'L\'argent circule déjà par le téléphone. D\'après la Banque centrale des États de l\'Afrique de l\'Ouest, citée par Le Soleil le 23 mars 2026, le Sénégal représentait 24,1 % des transactions de monnaie électronique de l\'UEMOA en 2024, contre 22,7 % en 2023, ce qui en fait le premier pays de l\'union. Une équipe habituée à payer, facturer et relancer par Wave, Orange Money ou Free Money adopte vite un outil qui s\'utilise sur le même écran.',
                'Côté politique publique, le New Deal Technologique a été lancé officiellement le 24 février 2025 par le président Bassirou Diomaye Faye, selon Osiris. Agence Ecofin, reprise par Osiris le même jour, le chiffre à 1 105 milliards de FCFA avec un horizon de 2034, autour de quatre piliers : souveraineté numérique, numérisation des services publics, économie numérique et leadership africain. L\'IA s\'inscrit dans l\'axe de l\'économie numérique, et une initiative nommée AI Factory du Sénégal, présentée en août 2026 selon Osiris, vise à développer les capacités nationales, soutenir les start-up et former des talents locaux.',
                'Le pays dispose aussi d\'une stratégie nationale d\'IA publiée en 2023 par le ministère chargé du numérique, qui court jusqu\'en 2028 selon le répertoire de l\'OCDE.AI. Elle compte six orientations stratégiques et 52 actions, dont la formation d\'environ 90 000 personnes à la science des données et à l\'IA d\'ici 2028. Pour une entreprise, le message est simple : la montée en compétences des équipes est un objectif public, pas une lubie de direction, et elle se prépare dès maintenant.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d\'IA utiliser au Sénégal, et à quel coût ?',
            'legende' => 'Prix publics consultés le 25 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée. La page de Google consultée affichait des prix en euros ; celle d\'OpenAI, d\'Anthropic et de Microsoft en dollars. Selon votre statut fiscal, des taxes peuvent s\'y ajouter : faites confirmer le traitement par votre comptable. Ces montants sont ceux des éditeurs : ils ne font pas partie du prix de la formation.',
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Prix de l\'éditeur', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédaction, reformulation, analyse de fichiers, tableaux à partir de messages en vrac', 'Gratuit ; Go 8 dollars par mois ; Plus 20 dollars par mois ; Business 20 dollars par utilisateur et par mois en annuel, 25 dollars en mensuel, à partir de 2 utilisateurs', 'Application mobile utilisable ; préparer les documents à l\'avance sur le poste'],
                ['Claude (Anthropic)', 'Lecture de documents longs, synthèse avec citations, ton posé en français', 'Gratuit ; Pro 17 dollars par mois en annuel (200 dollars payés d\'avance) ou 20 dollars au mois ; Team 20 dollars par siège et par mois en annuel, 25 dollars au mois', 'Les projets permettent de réutiliser un même contexte sans le coller à chaque séance'],
                ['Gemini (Google)', 'Intégration à Gmail, Docs et Drive pour les équipes déjà sur Google', 'Gratuit ; Google AI Plus 4,69 euros par mois ; Google AI Pro 18,87 euros par mois (page affichée pour le Bénin) ; édition Business à partir de 21 dollars par siège et par mois', 'Souple sur téléphone, déjà présent sur beaucoup d\'appareils Android'],
                ['Copilot (Microsoft)', 'Résumés de réunions, de courriels et de fichiers dans Word, Excel, Outlook', 'Copilot Chat sans surcoût avec les abonnements Microsoft 365 éligibles ; Copilot Business 21 dollars par utilisateur et par mois en annuel (18 dollars en promotion du 1er juillet au 31 décembre 2026, première année), 25,20 dollars au mois', 'Utile surtout si Microsoft 365 est déjà payé'],
                ['DeepSeek', 'Questions générales et rédaction, accès gratuit', 'Aucun prix relevé pour l\'usage gratuit', 'Sa politique indique que les données sont traitées et stockées en Chine : aucun document de l\'entreprise ne s\'y confie'],
                ['NotebookLM (Google)', 'Interroger un lot de documents choisis et obtenir des réponses qui renvoient aux sources', 'Prix non relevé', 'Le compte professionnel Google Workspace change les garanties : voir la section sur les données'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il un abonnement pour commencer, et lequel garder ensuite ?',
            'paragraphes' => [
                'Non. Les versions gratuites suffisent pour apprendre la méthode : formuler une demande complète, fournir un document, vérifier la réponse. Le choix d\'un abonnement se fait après la formation, sur ce qui a servi. Une entreprise sénégalaise déjà sur Microsoft 365 commence souvent par Copilot Chat, qui est inclus ; une entreprise sur Google Workspace par Gemini ; les autres comparent ChatGPT et Claude sur leurs propres documents en français.',
                'Un point de budget à régler tôt : les éditeurs facturent en dollars ou en euros, et des taxes peuvent s\'y ajouter selon votre statut fiscal, à faire confirmer par votre comptable. Le plus simple est de désigner un compte d\'entreprise, géré par une personne, plutôt que de laisser chacun payer sur sa carte personnelle. Cette règle traite d\'un coup trois problèmes : le coût, le contrôle des accès et le départ d\'un salarié avec ses conversations.',
                'Pour comparer les offres d\'équipe, leurs conditions sur les données et leur coût pour dix personnes, le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> détaille chaque cas.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données et de conformité s\'appliquent à l\'IA au Sénégal ?',
            'paragraphes' => [
                'La protection des données personnelles repose sur la loi n° 2008-12 du 25 janvier 2008, que la base WIPO Lex référence, et sur la Commission de protection des données personnelles, la CDP. Le site de la CDP propose des formulaires de formalités préalables : demande d\'avis, demande d\'autorisation (qui couvre les données sensibles et les transferts vers un pays tiers), déclaration normale et déclaration simplifiée. Or coller un fichier de clients dans un assistant hébergé hors du pays est précisément un transfert de données : la question se pose avant l\'usage, pas après une plainte.',
                'Un projet de loi qui remplacerait le texte de 2008 est annoncé depuis plusieurs années. Dans un article de l\'APS repris par Osiris le 28 mars 2026, un expert en cybersécurité et en gouvernance de l\'IA indique qu\'un projet de loi serait déjà dans le circuit et que l\'Assemblée nationale doit encore le voter, et il juge la loi de 2008 dépassée face à l\'IA générative. Tant qu\'un texte nouveau n\'est pas publié, c\'est la loi de 2008 qui sert de référence ; la CDP confirme le texte applicable.',
                'Concrètement, la formation applique une règle simple en trois couleurs. Vert : un document public ou sans donnée personnelle, qui peut aller dans un assistant. Orange : un document utile mais nominatif, qu\'on anonymise d\'abord en remplaçant noms, numéros de téléphone et montants. Rouge : dossiers de santé, notes d\'élèves, fichiers de paie, contrats sensibles, qui ne sortent jamais de l\'entreprise. Chaque équipe repart avec cette grille appliquée à ses propres documents.',
                'Les éditeurs ne se valent pas sur ce point. La politique de DeepSeek précise qu\'elle collecte les textes, fichiers et historiques saisis et les stocke en République populaire de Chine. Pour NotebookLM, l\'aide de Google Workspace indique que, dans les éditions de niveau entreprise, les fichiers importés et les sorties ne sont pas examinés par des humains et que les données ne servent pas à l\'entraînement, sauf retour de l\'utilisateur. Un compte professionnel et un compte personnel gratuit n\'offrent donc pas les mêmes garanties.',
                'Richard n\'est pas juriste et le dit : la formation donne les réflexes, votre conseil ou la CDP tranche les cas limites. Le sujet de fond, y compris la gouvernance interne, se prolonge dans la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats pour quelles équipes, et comment la formation se déroule-t-elle à distance ?',
            'legende' => 'Tous les formats se donnent en visioconférence pour le Sénégal. Les séances se calent sur vos heures de bureau à Dakar, qui a une heure de moins que Cotonou toute l\'année. Les formats peuvent se combiner.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction qui veut voir avant d\'investir, ou une équipe qui n\'a jamais utilisé d\'assistant'],
                ['Formation complète', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Un usage déjà commencé dans le désordre, ou une tâche volumineuse à reprendre avec méthode'],
                ['Session par métier', 'Une à deux journées, en séances courtes', '10 personnes au plus', 'Un service homogène : comptabilité, service client, ressources humaines, commercial'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Ancrer les habitudes, mesurer ce qui sert, étendre à d\'autres tâches'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que faut-il prévoir côté matériel, connexion et langue ?',
            'intro' => 'Les séances à distance tiennent à quelques conditions simples, à vérifier avec l\'équipe avant la première.',
            'items' => [
                ['titre' => 'Fuseau et horaires', 'texte' => 'Dakar vit à l\'heure GMT, sans changement d\'heure : une séance à 9 h à Dakar se tient à 10 h à Cotonou. Les journées de bureau se recoupent entièrement ; le calendrier des séances se fixe avec vous, selon les horaires propres à chaque entreprise.'],
                ['titre' => 'Poste et connexion', 'texte' => 'Un ordinateur par participant, avec navigateur à jour, traitement de texte et tableur, et une connexion stable. Les documents d\'exercice sont envoyés à l\'avance et téléchargés sur chaque poste, pour ne pas dépendre d\'un réseau qui ralentit en fin de journée.'],
                ['titre' => 'Plan de repli', 'texte' => 'Si la connexion d\'un participant coupe, il garde ses documents en local, rejoint la séance depuis son téléphone en données mobiles et reprend l\'exercice là où il s\'est arrêté. Les supports écrits permettent de rattraper sans perdre le fil.'],
                ['titre' => 'Langue', 'texte' => 'Les séances et les supports sont en français. Les assistants écrivent un français de France par défaut ; on leur fournit un modèle maison et le vocabulaire de l\'entreprise. Pour un texte en wolof, en pular ou en sérère, le résultat est relu par un locuteur avant tout usage.'],
                ['titre' => 'Les comptes', 'texte' => 'Soit ceux que l\'entreprise a ouverts, soit des comptes gratuits créés au début de la session, avec des documents anonymisés. Rien n\'est à acheter avant d\'avoir vu ce qui sert vraiment.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel programme pour quel métier au Sénégal ?',
            'legende' => 'Exemples d\'exercices bâtis à la préparation, sur les documents fournis par l\'entreprise et anonymisés. La dernière colonne est ce que le participant apprend à contrôler seul.',
            'entetes' => ['Secteur', 'Tâche travaillée', 'Outil et résultat attendu', 'Ce que le participant vérifie'],
            'lignes'  => [
                ['Commerce et distribution à Dakar', 'Trente commandes reçues en messages WhatsApp, avec fautes et abréviations', 'ChatGPT ou Claude : un tableau de commandes par client et par produit, prêt à saisir', 'Quantités, prix, adresses de livraison, et le montant réglé par Wave ou Orange Money'],
                ['Transport, port et logistique', 'Dossier de transit : factures, connaissements et courriels avec le client', 'Claude : synthèse du dossier avec renvoi aux pages, et courrier de relance bilingue', 'Chaque numéro de conteneur, date et montant retrouvé dans la pièce d\'origine'],
                ['Hôtellerie, restauration et tourisme', 'Avis de clients en français et en anglais, demandes de réservation, réponses types', 'Gemini ou ChatGPT : réponses courtoises dans le ton de la maison, classement des avis par motif', 'Tarifs, dates et promesses faites au nom de l\'établissement'],
                ['Agriculture, pêche et agro-industrie', 'Relevés de lots et de campagnes notés sur carnet, rapport mensuel pour la direction', 'ChatGPT : tableau des volumes et des marges par lot, plan du rapport, commentaire', 'Recalcul de deux totaux à la main et cohérence des unités et des périodes'],
                ['Énergie, projets et administration', 'Rapport d\'activité de 40 pages, note de synthèse destinée à un donneur d\'ordre', 'Claude ou NotebookLM : résumé qui cite les passages, tableau des indicateurs', 'Chaque chiffre repris à la bonne page, aucune donnée nominative dans un outil en ligne'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se financer ou se faire financer la formation au Sénégal ?',
            'paragraphes' => [
                'Le Fonds de financement de la formation professionnelle et technique, le 3FPT, est la première piste à examiner. Son site présente un guichet de financement du personnel des entreprises et des membres des organisations professionnelles, et un bouton de demande de financement qui renvoie vers sa plateforme en ligne. La page ne détaille ni les conditions d\'éligibilité ni les plafonds : ils se vérifient auprès du fonds, par écrit, avant toute inscription.',
                'Le fonds travaille beaucoup par les organisations patronales. Selon Le Soleil, repris par AllAfrica le 15 juillet 2026, il a signé des conventions avec le Conseil national du patronat, la Confédération nationale des employeurs du Sénégal et l\'Union des prestataires industriels et commerçants, pour 86 861 300 FCFA, pris en charge à près de 90 %, au profit de 911 professionnels de 36 entreprises. Si votre entreprise adhère à l\'une de ces organisations, c\'est le premier interlocuteur à interroger.',
                'Le fonds finance aussi sur le terrain, loin de la capitale : à Saint-Louis, il a accompagné la formation de 1 604 personnes en 2025 pour 518,5 millions de FCFA, selon Le Soleil du 9 octobre 2026. Ces exemples montrent que le 3FPT finance de la formation réelle, mais ils ne disent rien de l\'éligibilité d\'une formation à l\'IA donnée par Richard : aucune prise en charge n\'est promise.',
                'Richard n\'affiche ni agrément d\'un fonds ni certification d\'éditeur. Il remet pour chaque formation un programme détaillé, un devis, des feuilles de présence et une attestation nominative de fin de formation, qui servent dans toute demande de financement. Si l\'obtention d\'une aide conditionne votre décision, envoyez ces pièces au fonds et attendez sa réponse avant de signer. Sinon, inscrivez la dépense au budget de l\'année comme une ligne de formation interne, étalée si besoin sur un format court puis un accompagnement mensuel.',
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûte une formation IA au Sénégal ?',
            'intro' => 'Le prix est fixé sur devis, en FCFA, après l\'échange de cadrage, et le devis détaille chaque poste. Les modes de règlement de la fiche de Richard sont Mobile Money (MTN, Moov), carte bancaire, PayPal, virement et espèces ; ceux qui conviennent depuis le Sénégal se précisent au devis. Les abonnements aux assistants restent au nom de l\'entreprise et ne sont pas compris.',
            'items' => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée sur vos documents anonymisés', 'Premiers gestes sur deux tâches', 'Règles de données de base', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Séances à distance sur vos tâches cibles', 'Bibliothèque de consignes et modes opératoires', 'Évaluation sur une tâche réelle et attestation', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Corrections et nouvelles tâches']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, par service ou par métier.',
                'La durée et le nombre de séances à distance.',
                'La préparation des exercices sur vos documents, et leur anonymisation avant la session.',
                'La langue des supports, en français ou avec des passages en anglais.',
                'L\'accompagnement après la session et la mesure du résultat.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font les équipes sénégalaises qui démarrent l\'IA ?',
            'intro' => 'Ces écarts reviennent d\'une entreprise à l\'autre ; ils se préviennent à la préparation.',
            'items' => [
                ['titre' => 'Coller des données de clients dans un compte personnel', 'texte' => 'Par habitude de la messagerie, on envoie un fichier au premier outil ouvert. Un transfert à l\'étranger relève des formalités de la CDP : la grille verte, orange, rouge évite cette erreur.'],
                ['titre' => 'Prendre un outil gratuit pour un outil sûr', 'texte' => 'Gratuit ne veut pas dire confidentiel. Selon sa politique, DeepSeek stocke en Chine ce que l\'on y saisit ; un document d\'entreprise n\'y a pas sa place.'],
                ['titre' => 'Ne pas vérifier un chiffre précis', 'texte' => 'Un assistant cite un article de loi, un montant ou une date avec assurance, parfois à tort. Dans un dossier de transit ou une facture, chaque nombre se retrouve dans la pièce d\'origine.'],
                ['titre' => 'Laisser chacun payer son abonnement', 'texte' => 'Trois abonnements sur trois cartes personnelles, sans règle commune, coûtent plus et se contrôlent moins. Un compte d\'entreprise et une personne responsable règlent la question.'],
                ['titre' => 'Compter sur une connexion parfaite', 'texte' => 'Une séance planifiée en fin d\'après-midi sans documents préchargés échoue quand le réseau ralentit. Les fichiers sont téléchargés avant, et un plan de repli est prévu.'],
                ['titre' => 'Attendre la loi nouvelle pour agir', 'texte' => 'Le texte en préparation ne dispense pas d\'appliquer la loi de 2008 aujourd\'hui. Mieux vaut poser les règles maintenant et les ajuster ensuite.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Dakar, Thiès, Saint-Louis, Touba : la formation change-t-elle d\'une ville à l\'autre ?',
            'intro' => 'La méthode reste la même, mais les exemples, les contraintes et les interlocuteurs changent avec la ville. Chaque ville gagne à partir d\'un fait qui lui est propre.',
            'items' => [
                ['titre' => 'Dakar', 'texte' => 'La capitale concentre les sièges d\'entreprises, les organisations patronales et les bailleurs. C\'est à Dakar que le 3FPT a signé en juillet 2026 ses conventions avec trois organisations d\'employeurs. Une page dédiée détaille l\'offre locale : <a href="/formation-ia-entreprise-dakar">formation IA en entreprise à Dakar</a>.'],
                ['titre' => 'Thiès', 'texte' => 'Selon l\'ANSD, la région de Thiès comptait 2 463 677 habitants au recensement de 2023, soit 13,7 % de la population du pays, dont 57 % en milieu urbain, et pesait 11,1 % du produit intérieur brut en 2022. Les 11 977 immatriculations au NINEA de 2023 y relèvent surtout du commerce : les équipes de vente et de gestion y trouvent des tâches très concrètes à reprendre avec un assistant.'],
                ['titre' => 'Saint-Louis', 'texte' => 'Le bilan du 3FPT publié par Le Soleil le 9 octobre 2026 situe à Saint-Louis une activité réelle de formation : 1 604 personnes formées en 2025 dans la région, pour 518,5 millions de FCFA. Une entreprise de Saint-Louis, d\'agriculture, d\'énergie ou de tourisme, qui prépare une demande de financement trouve donc un fonds déjà présent localement.'],
                ['titre' => 'Touba', 'texte' => 'Pour le Grand Magal 2026, Orange Sonatel a annoncé plus de 915 opérations techniques, dont 27 nouveaux secteurs 5G, et annonce que, d\'ici fin décembre 2026, un million de clients de Touba et des environs pourront accéder à l\'internet très haut débit, selon Osiris du 22 juillet 2026. Pour les commerçants, transporteurs et prestataires de la ville, un assistant qui répond aux clients et prépare les devis hors des pics d\'activité devient un outil réaliste, à condition de fixer d\'abord les règles de données.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à l\'IA avec Richard SALANON au Sénégal ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Sénégal, comme dans quatorze autres pays dont le Bénin, la Côte d\'Ivoire, le Togo et le Mali. Il travaille avec le franc CFA, le mobile money et le référentiel SYSCOHADA dans les ERP, comme dans le reste de l\'UEMOA que partagent Dakar et Abidjan. Parmi ses réalisations ouest-africaines figure une commande de repas à Abidjan avec paiement Wave, livraison et suivi par WhatsApp, réalisée en sous-traitance pour Digital Développement ; l\'ensemble est visible sur la page des <a href="/realisations/">réalisations</a>.',
                'Il utilise lui-même ces assistants chaque jour pour rédiger, analyser et développer. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Sa façon de former tient en engagements vérifiables : une réponse sous 24 heures, un cadrage qui peut conclure qu\'un atelier court suffit, des exercices construits sur vos documents, une évaluation sur une tâche réelle, des supports qui restent à l\'entreprise. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun. Pour aller plus loin, voir les formations <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>, <a href="/formations/prompt-engineering">prompt engineering</a>, <a href="/formations/agents-ia-assistants">agents IA et assistants</a> et <a href="/formations/n8n">automatisation avec n8n</a>, ou le parcours général <a href="/formations/ia-en-entreprise">IA en entreprise</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe sénégalaise à l\'IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps, les outils déjà en place et la ville. Vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA au Sénégal ?", 'r' => "Ces trois titres décrivent des rôles voisins et aucun n’est réglementé. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM, Perplexity ou Mistral sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant au Sénégal : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA au Sénégal ?", 'r' => "Commencez par une tâche répétitive et mesurable, par exemple la rédaction de courriers, le résumé de comptes rendus ou le classement de documents, et par la règle sur les données qui peuvent quitter l’entreprise. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise au Sénégal, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => 'Qui peut former les équipes de mon entreprise à l\'IA à Dakar ou ailleurs au Sénégal ?', 'r' => 'Richard SALANON forme à distance, depuis Cotonou, les équipes sénégalaises à ChatGPT, Claude, Gemini et Copilot sur leurs propres documents. Les séances suivent vos heures de bureau, en français. Il n\'est certifié par aucun éditeur d\'IA, et le devis est établi en FCFA.'],
        ['q' => 'Quelle loi encadre l\'envoi de données de clients à un outil d\'IA au Sénégal ?', 'r' => 'La loi n° 2008-12 du 25 janvier 2008 sur les données à caractère personnel, appliquée par la Commission de protection des données personnelles. Le site de la CDP propose des formulaires de déclaration, de demande d\'autorisation (y compris pour les transferts vers un pays tiers) et de demande d\'avis. Un projet de nouvelle loi est annoncé : la CDP confirme le texte applicable.'],
        ['q' => 'Le 3FPT peut-il financer une formation IA pour mon personnel ?', 'r' => 'Son site ouvre un guichet pour le personnel des entreprises, avec une demande en ligne, mais ne publie pas les conditions. Aucune prise en charge n\'est garantie. Interrogez le fonds par écrit, programme et devis à l\'appui, avant de signer.'],
        ['q' => 'Quelles conventions le 3FPT a-t-il signées avec les organisations patronales ?', 'r' => 'Selon Le Soleil, en juillet 2026, avec le Conseil national du patronat, la Confédération nationale des employeurs du Sénégal et l\'Union des prestataires industriels et commerçants : 86 861 300 FCFA, pris en charge à près de 90 %, pour 911 professionnels de 36 entreprises.'],
        ['q' => 'Quelle est la stratégie numérique actuelle du Sénégal et quelle place y tient l\'IA ?', 'r' => 'Le New Deal Technologique, lancé officiellement le 24 février 2025, chiffré à 1 105 milliards de FCFA avec un horizon de 2034. L\'IA s\'inscrit dans l\'axe de l\'économie numérique. Une stratégie nationale d\'IA de 2023 court jusqu\'en 2028 selon l\'OCDE.AI.'],
        ['q' => 'Peut-on utiliser DeepSeek pour les documents de l\'entreprise ?', 'r' => 'Non. Sa politique de confidentialité indique que les textes, fichiers et historiques saisis sont traités et stockés en République populaire de Chine. Réservez-le à des questions sans donnée d\'entreprise et sans donnée personnelle.'],
        ['q' => 'La formation peut-elle se donner à Thiès, Saint-Louis ou Touba ?', 'r' => 'Oui, à distance, partout où une connexion stable existe. Les séances sont calées sur vos heures de bureau. Richard ne se déplace pas pour le Sénégal : les documents sont envoyés à l\'avance et téléchargés sur chaque poste pour résister aux coupures.'],
        ['q' => 'Quel est le décalage horaire entre Dakar et Cotonou ?', 'r' => 'Une heure : Dakar vit à l\'heure GMT et Cotonou à GMT+1, toute l\'année. Une séance à 9 h à Dakar se tient à 10 h à Cotonou.'],
        ['q' => 'Combien coûte la formation, et en quelle monnaie ?', 'r' => 'Le prix est fixé sur devis, en FCFA, après l\'échange de cadrage. Il varie selon le nombre de participants, le nombre de séances, la préparation sur vos documents et l\'accompagnement après la session. Les abonnements aux outils restent à votre charge.'],
        ['q' => 'Faut-il acheter ChatGPT ou Claude avant de commencer ?', 'r' => 'Non. Les versions gratuites suffisent pour apprendre la méthode, avec des documents anonymisés. L\'abonnement se décide après la formation, sur ce qui a servi, et se prend au nom de l\'entreprise.'],
        ['q' => 'Reçoit-on une attestation en fin de formation ?', 'r' => 'Oui, une attestation nominative, avec le programme, les supports et les feuilles de présence. Ce n\'est ni un diplôme ni une certification d\'éditeur.'],
    ],

    'sources' => [
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres Free, Go, Plus, Pro et Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Anthropic, tarifs de Claude (Free, Pro, Max, Team, Enterprise)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, abonnements Gemini et Google AI (prix en euros affichés pour le Bénin)', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
        ['titre' => 'DeepSeek, politique de confidentialité (stockage des données en Chine)', 'url' => 'https://cdn.deepseek.com/policies/en-US/deepseek-privacy-policy.html', 'date' => '2026-10-25'],
        ['titre' => 'Google Workspace, aide : activer NotebookLM pour les utilisateurs et confidentialité des sources', 'url' => 'https://knowledge.workspace.google.com/admin/users/access/turn-notebooklm-on-or-off-for-users?hl=fr', 'date' => '2026-10-25'],
        ['titre' => 'Le Soleil, rapport de l\'ARTP du premier trimestre 2025 sur internet et la téléphonie (8 juillet 2025)', 'url' => 'https://lesoleil.sn/actualites/economie/telecommunication-linternet-et-la-telephonie-fixe-en-pleine-expansion-au-senegal/', 'date' => '2026-10-25'],
        ['titre' => 'Le Soleil, transactions de monnaie électronique dans l\'UEMOA en 2024 (rapport BCEAO)', 'url' => 'https://lesoleil.sn/actualites/economie/volume-des-transactions-electroniques-le-senegal-leader-de-luemoa-avec-24-des-parts/', 'date' => '2026-10-25'],
        ['titre' => 'Osiris, lancement du New Deal Technologique (25 février 2025)', 'url' => 'https://www.osiris.sn/le-pays-lance-sa-strategie-numerique-le-new-deal-technologique.html', 'date' => '2026-10-25'],
        ['titre' => 'Osiris, New Deal Technologique : 1 105 milliards de FCFA pour un hub numérique (Agence Ecofin)', 'url' => 'https://www.osiris.sn/new-deal-technologique-1-7-milliard-pour-transformer-le-senegal-en-hub.html', 'date' => '2026-10-25'],
        ['titre' => 'Osiris, l\'AI Factory du Sénégal présentée dans le cadre du New Deal Technologique (3 août 2026)', 'url' => 'https://www.osiris.sn/new-deal-technologique-le-senegal-devoile-la-senegal-ai-factory-devant-la.html', 'date' => '2026-10-25'],
        ['titre' => 'OCDE.AI, stratégie nationale d\'intelligence artificielle et feuille de route du Sénégal', 'url' => 'https://oecd.ai/en/dashboards/policy-initiatives/senegal-national-artificial-intelligence-strategy-and-road-map', 'date' => '2026-10-25'],
        ['titre' => 'WIPO Lex, loi n° 2008-12 sur la protection des données à caractère personnel', 'url' => 'https://www.wipo.int/wipolex/fr/legislation/details/6229', 'date' => '2026-10-25'],
        ['titre' => 'CDP du Sénégal, formalités préalables : formulaires d\'avis, d\'autorisation et de déclaration', 'url' => 'https://www.cdp.sn/conformite/formalites', 'date' => '2026-10-25'],
        ['titre' => 'Osiris, la législation sénégalaise sur les données personnelles doit être modernisée (APS, 28 mars 2026)', 'url' => 'https://www.osiris.sn/donnees-personnelles-la-legislation-senegalaise-doit-etre-modernisee-et-adaptee.html', 'date' => '2026-10-25'],
        ['titre' => '3FPT, site du fonds : guichet de financement du personnel des entreprises', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-25'],
        ['titre' => 'AllAfrica et Le Soleil, conventions de financement entre le 3FPT et des organisations patronales (juillet 2026)', 'url' => 'https://fr.allafrica.com/stories/202607160216.html', 'date' => '2026-10-25'],
        ['titre' => 'AllAfrica et Le Soleil, le 3FPT à Saint-Louis : bilan depuis 2017 et résultats de 2025 (9 octobre 2026)', 'url' => 'https://fr.allafrica.com/stories/202610090460.html', 'date' => '2026-10-25'],
        ['titre' => 'ANSD via Vie publique du Sénégal, situation économique et sociale de la région de Thiès 2022-2023', 'url' => 'https://www.vie-publique.sn/documents/9687/situation-economique-et-sociale-ses-region-thies-2022-2023-ansd', 'date' => '2026-10-25'],
        ['titre' => 'Osiris, Magal 2026 : Orange renforce ses investissements dans la connectivité à Touba (22 juillet 2026)', 'url' => 'https://osiris.sn/magal-2026-orange-renforce-ses-investissements-dans-la-connectivite-a-touba.html', 'date' => '2026-10-25'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
