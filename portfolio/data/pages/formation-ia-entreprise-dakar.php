<?php
// ============================================================
// data/pages/formation-ia-entreprise-dakar.php · Page ville « Formation IA en
// entreprise à Dakar » (Sénégal). Remplace, à sa date de publication, l'ancienne
// page du même nom. Consigne : docs/superpowers/consignes/formation-ville-ia.md.
// Faits de ville relevés le 26/10/2026 : Le Soleil via AllAfrica (parc des
// technologies numériques, port, postes haute tension), Senego (coupures Senelec,
// Wave), OSIRIS/APS (UCAD, sommet IA Corée-Sénégal, 5G Sonatel), Ecofin (BRT),
// Wikipédia (Plateau, Médina, Mermoz-Sacré-Cœur, Hann Bel-Air), BCEAO (siège).
// Retirés car non confirmés : statut actuel du parc de Diamniadio, couverture 5G
// par quartier, frais marchands de Wave et d'Orange Money, ressources d'écoles privées.
// Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA en entreprise à Dakar : vos équipes du Plateau, de Mermoz ou de Diamniadio utilisent ChatGPT, Claude et Gemini sur leurs propres documents, à distance depuis Cotonou',
    'title'   => 'Formation IA en entreprise à Dakar | Richard SALANON',
    'meta'    => 'Formation IA en entreprise à Dakar : ChatGPT, Claude et Gemini sur vos documents, du Plateau à Diamniadio. À distance, devis en FCFA, réponse sous 24 h.',
    'en_bref' => 'Richard SALANON, consultant en digitalisation basé à Cotonou, forme à distance les équipes des entreprises de Dakar, du Plateau aux Almadies et de Diamniadio, à utiliser ChatGPT, Claude, Gemini ou Copilot sur leurs propres documents, avec une heure seulement de décalage horaire et un devis en FCFA. Les exercices partent de ce que Dakar fait travailler : dossiers de port et de transit, banques et administrations du Plateau, commerce de la Médina, paiements Wave et Orange Money. Les séances tiennent compte des coupures de courant annoncées par la Senelec. Le prix est fixé sur devis.',
    'publie'  => '2026-11-27',
    'maj'     => '2026-11-27',
    'schema'  => 'WebPage',

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance, depuis Cotonou'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Une heure de moins à Dakar, toute l’année'],
        ['l' => 'Devis', 'v' => 'En FCFA (XOF), sur devis'],
        ['l' => 'Réponse', 'v' => 'Sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former les équipes à l’IA à Dakar, et comment choisir ?',
            'paragraphes' => [
                'À Dakar, une équipe peut se former à l’IA auprès d’universités, d’écoles, de cabinets ou de formateurs indépendants. Richard SALANON intervient à distance depuis Cotonou, avec une heure de décalage, sur les documents et les comptes de l’entreprise dakaroise elle-même. Le bon choix dépend de la tâche à changer, pas de la notoriété de l’outil.',
                'La capitale du Sénégal n’est pas un terrain vierge. L’Université Cheikh Anta Diop a engagé, selon l’APS du 3 avril 2026, une feuille de route pour devenir un pôle d’excellence en IA appliquée à l’éducation, avec quatre ateliers depuis la fin de 2025 et plusieurs centaines d’enseignants formés. Un sommet de deux jours sur l’IA entre Dakar et Séoul s’est ouvert le 18 juin 2026, avec des start-up sénégalaises et sud-coréennes. Les équipes dakaroises entendent donc parler d’IA partout, et beaucoup ont déjà ouvert ChatGPT.',
                'C’est justement ce qui rend le choix délicat. Une démonstration d’outil montre ce que l’assistant sait faire sur un exemple préparé ; une formation qui change le travail part d’une tâche que la personne répète chaque semaine, la traite avec l’assistant sur son propre document, puis apprend à vérifier chaque chiffre, chaque nom et chaque date avant l’envoi. À la fin, le participant doit savoir refaire seul cette tâche, de la consigne à la vérification.',
                'Trois questions aident à trancher avant de signer, quel que soit le prestataire. Les exercices se font-ils sur vos fichiers, ou sur des cas fictifs ? L’entreprise garde-t-elle la bibliothèque de consignes et les modes opératoires à la fin ? Le programme dit-il ce que la formation ne couvre pas ? Richard répond oui aux deux premières et le dit pour la troisième : la formation ne construit pas d’assistants branchés sur vos logiciels, ce que traite la formation <a href="/formations/agents-ia-assistants">Agents IA et assistants</a>.',
                'Il n’est certifié par aucun éditeur d’IA et ne se présente comme partenaire d’aucun. Pour comparer les offres d’équipe et leurs conditions sur les données, le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> donne les éléments sans que la formation y soit liée. Aucun prix d’éditeur n’est repris sur cette page : ils changent, et une équipe doit les lire à la source le jour de sa décision.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que fait vivre l’économie de Dakar, et qu’est-ce que cela change pour l’usage de l’IA ?',
            'paragraphes' => [
                'Dakar concentre l’administration, la banque, un grand port et un commerce de rue dense. Chaque quartier produit son propre type de documents, et c’est cela qui détermine ce qu’une équipe gagnera à confier à un assistant : un dossier de transit n’a rien de commun avec une commande prise par message dans un marché.',
                'Au Plateau, le cœur administratif et d’affaires, Wikipédia recense la présidence de la République, l’Assemblée nationale, les ministères de l’Économie et des Finances et de l’Éducation nationale, ainsi que des banques, des sièges de grandes sociétés et la Chambre de commerce. La Banque centrale des États de l’Afrique de l’Ouest indique elle-même que son siège est fixé à Dakar. Les équipes de ce quartier écrivent beaucoup, dans des registres formels : courriers, notes de synthèse, comptes rendus de comités, réponses à des appels d’offres. Ce sont des tâches où un assistant fait gagner du temps, à condition que la relecture soit tenue.',
                'Sandaga, décrit par la même source comme le plus grand marché de la ville, et Kermel sont au Plateau ; la Médina, créée en 1914, tout près, comptait 81 892 habitants sur environ 2 km² au recensement de 2013, soit une densité de plus de 40 000 habitants au kilomètre carré, et abrite le marché de Soumbédioune. Ici, les commandes, les prix et les relances passent par le téléphone et par WhatsApp bien plus que par des fichiers. La formation s’y concentre sur la mise en ordre de messages en vrac et sur la rédaction de réponses courtes et exactes.',
                'Plus à l’ouest, la commune de Mermoz-Sacré-Cœur, d’environ 6 km², accueille selon Wikipédia le siège de Sonatel dans la Cité Keur Gorgui depuis 2015, celui de la compagnie de transport Dakar Dem Dikk, et l’École supérieure d’économie appliquée. Un article de 2015 décrivait Point E comme un quartier central de commerces, de banques, d’écoles, de cabinets médicaux et de pharmacies, et les Almadies comme un secteur résidentiel aisé, proche des ambassades. Pour une équipe de cabinet médical ou de petite école, le sujet n’est pas le même que pour un service de grande entreprise : il touche aux dossiers de patients et d’élèves.',
                'Au sud-est, Hann Bel-Air est devenu, selon Wikipédia, un site industriel majeur, et Bel-Air borde le port de Dakar. Le Port autonome de Dakar a traité 7,64 millions de tonnes au troisième trimestre 2025, en hausse de 16 % sur un an, et 226 989 conteneurs EVP, soit 13 % de plus, selon Le Soleil du 9 novembre 2025. Ce trafic suppose des transitaires, des consignataires et des industriels qui échangent des factures, des connaissements et des courriers en plusieurs langues. À Diamniadio, enfin, le Parc des technologies numériques de 12,5 hectares est un projet de 46 milliards de FCFA, avec trois tours pour les entreprises du numérique, un centre de données de niveau Tier 3 et un centre de formation ; en novembre 2025, le ministre a obtenu des maîtres d’œuvre un engagement de livraison avant mars 2026. L’état actuel du chantier se vérifie auprès du ministère.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel quartier de Dakar, quels documents, quelle première tâche pour l’IA ?',
            'legende' => 'Repères de quartier tirés de Wikipédia et d’un article du 8 septembre 2015 sur les quartiers de Dakar ; la colonne « première tâche » est la proposition de Richard pour démarrer, à confirmer lors du cadrage.',
            'entetes' => ['Secteur de Dakar', 'Ce qui le caractérise', 'Documents typiques', 'Première tâche à confier à l’assistant'],
            'lignes'  => [
                ['Plateau', 'Présidence, Assemblée, ministères, siège de la BCEAO, banques, Chambre de commerce, marchés de Sandaga et de Kermel', 'Courriers formels, notes de synthèse, comptes rendus de comité, réponses à appel d’offres', 'Premier jet d’une note à partir d’un modèle validé, puis relecture ligne à ligne par la personne qui signe'],
                ['Médina', '81 892 habitants en 2013 sur environ 2 km², marché de Soumbédioune', 'Commandes et prix échangés par WhatsApp, notes de caisse', 'Transformer vingt messages en tableau de commandes avec montant, délai et mode de paiement'],
                ['Mermoz et Sacré-Cœur', 'Siège de Sonatel, Dakar Dem Dikk, École supérieure d’économie appliquée', 'Réponses aux clients, procédures internes, supports de cours', 'Réponses types à la clientèle dans le ton de la maison, avec vérification des conditions citées'],
                ['Point E', 'Commerces, banques, écoles, cabinets médicaux (article de 2015)', 'Convocations, courriers aux familles, comptes rendus administratifs', 'Courriers et supports sans aucune donnée identifiable de patient ou d’élève'],
                ['Almadies et Ngor', 'Résidentiel aisé, ambassades, restaurants et commerces (article de 2015)', 'Réservations, offres, correspondance bilingue', 'Réponses en français et en anglais, avec contrôle des tarifs et des dates'],
                ['Hann Bel-Air, port, zone industrielle', 'Site industriel majeur voisin du Port autonome de Dakar', 'Factures, documents de transport, rapports d’exploitation et de sécurité', 'Extraction des quantités et des montants d’un dossier, avec recalcul de chaque total'],
                ['Diamniadio', 'Parc des technologies numériques annoncé (46 milliards de FCFA), campus universitaire', 'Dossiers de projet, présentations, cahiers des charges', 'Résumé d’un cahier des charges avec renvoi à la page de chaque exigence'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres de Dakar justifient de former les équipes ?',
            'items' => [
                ['valeur' => '7,64 Mt', 'libelle' => 'Trafic total du Port autonome de Dakar au troisième trimestre 2025, en hausse de 16 % sur un an ; 226 989 conteneurs EVP, soit 13 % de plus (article du 9 novembre 2025)', 'source' => 'Le Soleil, repris par AllAfrica', 'url' => 'https://fr.allafrica.com/stories/202511100271.html'],
                ['valeur' => '46 milliards de FCFA', 'libelle' => 'Coût global annoncé du Parc des technologies numériques de Diamniadio, sur 12,5 hectares, avec trois tours, un centre de données Tier 3 et un centre de formation (article du 4 novembre 2025)', 'source' => 'Le Soleil, repris par AllAfrica', 'url' => 'https://fr.allafrica.com/stories/202511040312.html'],
                ['valeur' => '39 %', 'libelle' => 'Part des billets du BRT de Dakar achetés par voie numérique, contre 10 % au lancement en mai 2024 (article du 17 juillet 2026)', 'source' => 'Ecofin', 'url' => 'https://www.ecofinagency.com/news-digital/1707-57502-senegal-new-partnership-to-bring-more-digital-services-to-dakar-brt'],
                ['valeur' => '220 milliards de FCFA', 'libelle' => 'Investissement du programme qui a modernisé quatre postes haute tension de Dakar (Diass, Hann, Yoff, Kounoune), présenté le 4 février 2026', 'source' => 'AllAfrica', 'url' => 'https://fr.allafrica.com/stories/202602050188.html'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle connexion et quelle électricité les équipes ont-elles à Dakar, et comment la formation s’y adapte-t-elle ?',
            'paragraphes' => [
                'Une séance à distance suppose du courant et du réseau pendant toute sa durée. À Dakar, l’électricité a connu en septembre 2026 des coupures attribuées à une panne de centrale, à une forte demande et à un déficit de production, et le réseau mobile se déploie en 5G. Une solution de repli est prévue en cas de coupure, et les documents d’exercice sont placés sur chaque poste avant la séance.',
                'Dans son programme de la semaine du 21 au 27 septembre 2026, Senego rapportait des coupures depuis le 6 septembre, un déficit d’environ 150 MW, une pointe de consommation à 1 400 MW pour 1 250 MW prévus et des difficultés d’approvisionnement en combustible qui obligeaient certaines centrales à tourner au fuel. La Senelec avait par ailleurs programmé, du 21 au 27 septembre, des interventions ciblées de 8 h à 16 h, c’est-à-dire pendant la journée de bureau : Cité Mermoz 1 le 24 septembre, le secteur Aérosouterrain des Almadies Bis le 25, Liberté 6 Extension le 23. Ces coupures annoncées sont distinctes de celles du déficit de production, précise la société.',
                'Des investissements doivent améliorer la situation. Le 4 février 2026, Senelec a présenté quatre postes haute tension modernisés, financés à hauteur de 220 milliards de FCFA par un programme de coopération avec les États-Unis, le Power Compact : Hann, qui alimente notamment Sacré-Cœur, Pikine et Ouakam, Yoff, Diass et Kounoune. L’effet réel sur les usagers, souligne l’article, reste à évaluer. Une entreprise de Dakar qui planifie une formation a donc raison de regarder le calendrier des coupures annoncées pour son quartier avant de fixer la date.',
                'Côté réseau, Sonatel a annoncé en juin 2024 la 5G dans Dakar, Thiès, Saint-Louis, Diourbel, Kaolack et Louga, avec 176 sites, et l’objectif d’une couverture de toute la région de Dakar avant la fin de 2024 ; cet objectif est un engagement de l’époque, dont la réalisation se vérifie quartier par quartier. La formation prévoit donc que chaque participant ait ses documents en local, que l’ordinateur soit chargé avant la séance et que la consigne se rédige hors ligne avant d’être collée.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que changent Wave et Orange Money dans le quotidien d’une entreprise dakaroise ?',
            'paragraphes' => [
                'À Dakar, le paiement mobile fait partie du travail de bureau : on encaisse, on rembourse et on rapproche par Wave ou Orange Money. Une formation à l’IA y a un terrain précis, qui est de transformer des notifications et des relevés en tableaux contrôlés, sans jamais confier à un assistant les données d’un client identifiable.',
                'Wave a été fondée à Dakar en 2018. Selon Senego du 12 mai 2026, qui reprend des chiffres de l’entreprise, elle revendique plus de 10 millions d’utilisateurs payants actifs et plus de 2 millions de marchands dans ses pays d’activité ; ce sont des déclarations de la société, non auditées. Du côté d’Orange, le BRT de Dakar a ouvert ses paiements numériques par Orange Money, et Ecofin indique le 17 juillet 2026 que la part du numérique atteint 39 % des achats de billets. Même dans la mobilité, le geste de payer par téléphone est devenu courant.',
                'Pour un commerce de la Médina ou d’Almadies, cela donne une masse de preuves de paiement qui arrivent par captures d’écran, SMS et messages. Les exercices portent sur le classement de ces pièces en tableau, la rédaction de la relance d’un impayé et la vérification d’un solde, avec un recalcul à la main de chaque total. Les numéros de téléphone et les noms des clients sont remplacés avant tout envoi à un assistant en ligne : c’est la règle du classement en trois couleurs enseigné pendant la formation.',
                'Les frais d’encaissement et les délais de règlement de Wave et d’Orange Money ne sont pas repris ici : ils relèvent des conditions de chaque opérateur et changent. La formation n’intègre pas non plus de paiement dans un site, ce que font les missions de développement ; elle apprend à mieux écrire, trier et contrôler ce qui entoure ces paiements.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles ressources locales existent à Dakar pour se former et se repérer en IA ?',
            'paragraphes' => [
                'Dakar offre des repères publics et institutionnels sur l’IA, qu’une direction peut consulter avant de lancer un projet. Ce sont des faits datés, non des recommandations commerciales : chacun renvoie à sa source, et rien ici ne classe un organisme au-dessus d’un autre.',
                'L’Université Cheikh Anta Diop a présenté, selon l’APS du 3 avril 2026, après un atelier de trois jours à la Faculté des sciences et techniques, sa feuille de route pour faire de l’établissement un pôle d’excellence en IA appliquée à l’éducation. Elle prévoit une charte pour encadrer l’usage responsable de l’IA et la protection des données, et des modules sur l’apprentissage automatique, le traitement du langage et les contenus générés. Pour une entreprise qui recrute des diplômés, c’est un indice du vocabulaire qu’ils auront rencontré ; cela ne remplace pas une formation sur les documents d’un service.',
                'Un sommet de deux jours, ouvert le 18 juin 2026 à Dakar et organisé par le consortium sud-coréen KPC et le ministère de l’Enseignement supérieur a réuni des start-up sénégalaises et sud-coréennes autour de l’IA. Un conseiller du ministère y a déclaré que chaque université sénégalaise a déjà un incubateur, et que le gouvernement prépare un décret pour un fonds national de la recherche et de l’innovation ainsi qu’un futur incubateur à Diamniadio. Une dirigeante de start-up y a rappelé que les assistants génératifs apprennent le wolof surtout à partir de formes influencées par le français ou l’anglais : tout texte en wolof produit par un assistant doit être relu par un locuteur.',
                'À Diamniadio, le campus de l’Université Amadou Mahtar Mbow était destiné, d’après Au Sénégal (décembre 2022), à accueillir le village des athlètes des Jeux olympiques de la jeunesse, programmés du 31 octobre au 13 novembre 2026 à Dakar, Diamniadio et Saly. Ces dates sont passées à la date de cette page.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format retenir à Dakar : atelier, formation de deux jours, séances à distance ou accompagnement ?',
            'legende' => 'Effectifs et durées de la fiche de formation. Toutes les séances se donnent à distance depuis Cotonou ; les formats peuvent se combiner, par exemple un atelier découverte pour un service pilote, puis la formation complète.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir à Dakar'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction ou un service du Plateau qui veut voir ce que l’IA change sur ses courriers avant d’investir'],
                ['Formation complète', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un service de transit, de banque, de clinique ou de commerce qui a une tâche volumineuse à reprendre'],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties entre plusieurs sites de l’agglomération, de Diamniadio à Mermoz, ou entre Dakar et d’autres villes'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Une prise en main dans vos locaux, puis une mise en pratique suivie à distance'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Les équipes qui veulent étendre l’usage à d’autres tâches après la première session'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation se déroule-t-elle à distance entre Cotonou et Dakar ?',
            'intro' => 'La distance entre Cotonou et Dakar ne compte pas ; ce qui compte, ce sont les plages de travail communes et la stabilité de la connexion de chaque participant.',
            'items' => [
                ['titre' => 'Fuseau et décalage', 'texte' => 'Dakar vit à l’heure UTC+0 toute l’année, sans heure d’été ; Cotonou est à UTC+1. Une séance à 9 h à Dakar se tient à 10 h à Cotonou. Les deux villes partagent entièrement la journée de bureau, ce qui permet d’aligner les séances sur les horaires de l’entreprise.'],
                ['titre' => 'Séances courtes', 'texte' => 'Le format à distance découpe la formation en séances de 2 h 30, plus faciles à suivre en visioconférence qu’une journée entière. Le calendrier se discute avec vous, en tenant compte des coupures que la Senelec annonce pour le quartier.'],
                ['titre' => 'Poste et documents', 'texte' => 'Un ordinateur par participant, avec navigateur à jour, traitement de texte et tableur. Les documents d’exercice sont téléchargés sur chaque poste avant la séance, pour ne pas dépendre d’une connexion fragile.'],
                ['titre' => 'Plan de repli', 'texte' => 'Une solution de repli est prévue en cas de coupure. Chaque participant garde ses documents en local, de sorte qu’une interruption n’efface pas le travail déjà fait.'],
                ['titre' => 'Déplacement', 'texte' => 'Les interventions pour Dakar se font à distance. Si un déplacement est demandé, il entre comme facteur de prix au devis, au même titre que tout déplacement hors de Cotonou ou hors du Bénin.'],
                ['titre' => 'Langue et supports', 'texte' => 'Les séances et les supports sont en français, avec des exemples en anglais pour les équipes qui écrivent à des transporteurs, des bailleurs ou des fournisseurs étrangers. Tout texte en wolof est relu par un locuteur avant usage.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel programme pour quel métier à Dakar ?',
            'legende' => 'Exemples d’exercices construits à partir des secteurs de Dakar, sur des documents fournis par l’entreprise et anonymisés. La dernière colonne est ce que le participant contrôle lui-même avant d’utiliser le résultat.',
            'entetes' => ['Métier à Dakar', 'Tâche', 'Outil', 'Résultat attendu et contrôle'],
            'lignes'  => [
                ['Transit et logistique portuaire', 'Extraire les quantités, les valeurs et les références d’une facture et d’un document de transport, puis rédiger le courrier de relance au transporteur', 'ChatGPT, Claude ou Gemini, avec un tableur', 'Tableau de dossier prêt à vérifier ; chaque quantité et chaque total est recalculé à la main'],
                ['Banque, assurance et administration du Plateau', 'Rédiger le premier jet d’une note de synthèse ou d’un courrier de réponse à partir d’un modèle déjà validé', 'Copilot ou Claude, dans le compte de l’entreprise', 'Note relue par la personne qui signe ; articles de loi, montants et dates retrouvés dans la source'],
                ['Commerce de la Médina et de Sandaga', 'Mettre en ordre les commandes reçues par WhatsApp et préparer les relances de paiement', 'ChatGPT ou Gemini', 'Tableau de commandes avec montant et mode de paiement ; relance courtoise, relue avant envoi'],
                ['Télécoms et relation client à Mermoz et Sacré-Cœur', 'Classer des demandes de clients par motif et proposer des réponses dans le ton de la maison', 'Claude ou ChatGPT', 'Réponses vérifiées sur les conditions et les prix cités ; aucune promesse faite au nom de l’entreprise sans accord'],
                ['Cabinets médicaux et écoles de Point E', 'Rédiger convocations, courriers aux familles et comptes rendus administratifs', 'Gemini ou Copilot', 'Documents prêts à diffuser sans aucune donnée identifiable de patient ou d’élève'],
                ['Hôtellerie et restauration de Ngor et des Almadies', 'Répondre à des demandes de réservation en français et en anglais', 'ChatGPT ou Claude', 'Réponses bilingues, avec contrôle des tarifs, des dates et des conditions d’annulation'],
                ['Industrie et maintenance à Hann', 'Résumer un rapport d’exploitation ou de sécurité et en tirer les actions par responsable', 'Claude ou Gemini', 'Plan d’actions avec échéances ; chaque point renvoie à la page du rapport source'],
                ['Projets et organisations d’appui', 'Préparer un rapport pour un bailleur à partir de notes de mission', 'Claude ou ChatGPT', 'Rapport avec tableau d’indicateurs ; aucune donnée nominative de bénéficiaire dans un assistant en ligne'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données la ville change-t-elle pour une équipe de Dakar ?',
            'paragraphes' => [
                'Le cadre légal national, avec la loi sur les données personnelles et l’autorité qui la contrôle, est détaillé sur la page <a href="/formations/ia-en-entreprise/senegal">formation IA en entreprise au Sénégal</a>. À Dakar, ce cadre se vit au niveau du poste : les administrations et les sièges du Plateau manipulent des dossiers de personnel et des courriers à signature, les cabinets médicaux de Point E des dossiers de patients, les écoles de Mermoz et de Point E des dossiers d’élèves.',
                'La règle de la formation est la même partout : avant le premier exercice, chaque document est classé en trois couleurs, ce qu’on peut confier à l’assistant, ce qu’on anonymise d’abord, ce qui ne sort jamais. Les noms de clients, les numéros de téléphone liés à un paiement mobile, les dossiers médicaux et les notes d’élèves identifiables relèvent des deux dernières catégories. Un compte professionnel contrôlé par l’entreprise remplace le compte personnel d’un salarié pour tout ce qui n’est pas anonymisé.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA à Dakar, et comment se règle-t-elle ?',
            'intro'      => 'Le prix est fixé sur devis, en FCFA (XOF), après l’échange de cadrage, et le devis détaille chaque poste. Il se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux assistants restent au nom de l’entreprise et ne sont pas compris dans le prix de la formation.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée sur vos documents', 'Premiers gestes sur deux tâches', 'Règles de données de base']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Exercices sur vos documents', 'Bibliothèque de consignes et modes opératoires', 'Évaluation sur la tâche cible et attestation']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Bilan écrit à trois mois']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, par métier ou par site.',
                'Le format retenu, à distance, hybride ou en intra, et le nombre de demi-journées.',
                'Le temps de préparation des exercices sur vos documents et leur anonymisation.',
                'Le lieu : un déplacement hors de Cotonou entre dans le devis comme facteur de prix.',
                'L’accompagnement après la session.',
                'La langue des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font les équipes de Dakar qui démarrent l’IA ?',
            'intro' => 'Ces écarts reviennent dans les contextes décrits plus haut ; ils se préviennent dès la session.',
            'items' => [
                ['titre' => 'Coller un relevé Wave ou Orange Money dans un compte personnel', 'texte' => 'Un relevé contient des noms, des numéros et des montants. Il se pseudonymise avant tout envoi, et il ne se traite que dans un compte professionnel contrôlé par l’entreprise.'],
                ['titre' => 'Faire confiance à un chiffre de douane ou de transit parce qu’il est précis', 'texte' => 'Un assistant peut citer une quantité, un taux ou un article de texte qui n’existent pas. Dans un dossier de port, chaque total se recalcule à partir de la facture.'],
                ['titre' => 'Planifier une séance sans regarder les coupures annoncées', 'texte' => 'Les interventions de la Senelec du 21 au 27 septembre 2026 couvraient la tranche de 8 h à 16 h. Une séance placée dans un quartier concerné, sans documents préchargés, s’interrompt.'],
                ['titre' => 'Laisser un assistant écrire en wolof sans relecture', 'texte' => 'Les assistants apprennent le wolof surtout à partir de formes influencées par le français ou l’anglais. Le texte est relu par un locuteur avant d’être envoyé à un client.'],
                ['titre' => 'Laisser chacun payer son abonnement', 'texte' => 'Trois abonnements sur trois cartes personnelles, sans règle commune, coûtent plus et se contrôlent moins. Un compte d’équipe, décidé après la formation, remplace ces abonnements.'],
                ['titre' => 'Traiter les dossiers de patients ou d’élèves comme des textes ordinaires', 'texte' => 'Dans un cabinet de Point E ou une école de Mermoz, aucune donnée identifiable ne sort vers un assistant en ligne. On travaille sur des modèles et sur des cas anonymisés.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes de Dakar à l’IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Sénégal, comme dans quatorze autres pays dont le Bénin, la Côte d’Ivoire, le Togo et le Mali. Avec ' . $ans . ' ans d’expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l’IA, à l’automatisation et aux ERP. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d’Afrique francophone, et il est co-fondateur d’<a href="https://audyxa.com">Audyxa</a>.',
                'Sa façon de former tient en engagements vérifiables : une réponse sous 24 heures, un ou deux entretiens de cadrage qui peuvent conclure qu’une formation plus courte suffit, des exercices construits sur vos documents, une évaluation sur une tâche réelle, des supports qui restent à l’entreprise et aucun gain chiffré promis à l’avance. Il n’est certifié par aucun éditeur d’IA.',
                'Parmi ses projets, une commande de repas en ligne avec paiement Wave, <a href="/realisations/">réalisée à Abidjan</a> en sous-traitance pour Digital Développement, montre ce qu’il a vu de près : des commandes prises à la main sur WhatsApp, passées en ligne avec un paiement mobile. Le reste de son parcours est sur la page <a href="/richard-salanon">Richard SALANON</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>. Si le besoin dépasse l’usage quotidien des assistants, il relève d’une mission d’<a href="/services/integration-ia-entreprise">intégration de l’IA en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d’inscrire votre équipe de Dakar ?',
            'texte' => 'Choisissez deux ou trois tâches réelles par groupe, ancrées dans votre secteur, classez vos documents avant le premier exercice, anonymisez ce qui touche des clients, des patients ou des élèves, faites relire chaque résultat par une personne qui connaît la source, et regardez le calendrier des coupures annoncées avant de fixer les dates.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe de Dakar à l’usage quotidien de l’IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, le quartier ou le site, les tâches qui leur prennent le plus de temps et les outils déjà en place : vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA à Dakar'],
        ],
    ],

    'faq' => [
        ['q' => 'Y a-t-il un décalage horaire entre Dakar et Cotonou ?', 'r' => 'Une heure : Dakar est à UTC+0 toute l’année, sans heure d’été, et Cotonou à UTC+1. Une séance à 9 h à Dakar se tient à 10 h à Cotonou, et la journée de bureau est entièrement commune.'],
        ['q' => 'Richard SALANON se déplace-t-il à Dakar ?', 'r' => 'Les interventions pour Dakar se font à distance, depuis Cotonou. Si un déplacement est demandé, il entre comme facteur de prix au devis, comme tout déplacement hors de Cotonou ou hors du Bénin.'],
        ['q' => 'Que se passe-t-il si le courant est coupé pendant une séance ?', 'r' => 'Une solution de repli est prévue en cas de coupure. Les documents d’exercice sont placés sur chaque poste avant la séance, et le calendrier des coupures que la Senelec annonce pour le quartier est à connaître avant de fixer les dates.'],
        ['q' => 'Les exercices utilisent-ils nos documents de Dakar ?', 'r' => 'Oui : courriers du Plateau, dossiers de transit, commandes reçues par WhatsApp, rapports d’exploitation. Les documents sont anonymisés avant la session, et ceux qui doivent rester dans l’entreprise ne sortent pas.'],
        ['q' => 'La formation couvre-t-elle les paiements Wave et Orange Money ?', 'r' => 'Elle apprend à classer, rapprocher et rédiger autour de ces paiements, sans jamais confier à un assistant les données d’un client identifiable. L’intégration d’un paiement dans un site ou une application relève d’une mission de développement.'],
        ['q' => 'Peut-on suivre la formation depuis Diamniadio, Mermoz ou les Almadies ?', 'r' => 'Oui, dès que chaque participant dispose d’un ordinateur et d’une connexion stable. Les séances à distance accueillent huit personnes au plus, réparties entre plusieurs sites si nécessaire.'],
        ['q' => 'Le Parc des technologies numériques de Diamniadio change-t-il quelque chose à la formation ?', 'r' => 'Le parc était annoncé avec trois tours, un centre de données Tier 3 et un centre de formation, pour une livraison avant mars 2026 selon le ministre en novembre 2025. Son état actuel se vérifie auprès du ministère ; la formation se donne à distance, où que se trouvent les équipes.'],
        ['q' => 'Combien coûte une formation IA à Dakar ?', 'r' => 'Le prix est fixé sur devis, en FCFA, après l’échange de cadrage. Il dépend du nombre de participants, du format, de la préparation des exercices et de l’accompagnement. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'La formation se donne-t-elle en wolof ?', 'r' => 'Les séances et les supports sont en français. Les assistants produisent du wolof de qualité variable, surtout appris à partir de formes influencées par le français ou l’anglais : tout texte en wolof est relu par un locuteur avant usage.'],
        ['q' => 'Les règles sur les données personnelles au Sénégal sont-elles traitées ici ?', 'r' => 'Le cadre légal national est détaillé sur la page de la formation IA au Sénégal. Ici, la formation traite ce que Dakar change au poste de travail : dossiers de personnel, de patients et d’élèves, relevés de paiement mobile.'],
    ],

    'sources' => [
        ['titre' => 'Le Soleil via AllAfrica, Parc des technologies numériques de Diamniadio (4 novembre 2025)', 'url' => 'https://fr.allafrica.com/stories/202511040312.html', 'date' => '2026-10-26'],
        ['titre' => 'Le Soleil via AllAfrica, Port autonome de Dakar : résultats du troisième trimestre 2025 (9 novembre 2025)', 'url' => 'https://fr.allafrica.com/stories/202511100271.html', 'date' => '2026-10-26'],
        ['titre' => 'AllAfrica, Dakar renforce son réseau avec quatre postes haute tension (4 février 2026)', 'url' => 'https://fr.allafrica.com/stories/202602050188.html', 'date' => '2026-10-26'],
        ['titre' => 'Senego, Senelec : programme des coupures du 21 au 27 septembre à Dakar et en banlieue', 'url' => 'https://senego.com/senelec-programme-des-coupures-du-21-au-27-septembre-a-dakar-et-sa-banlieue_2003719.html', 'date' => '2026-10-26'],
        ['titre' => 'Ecofin, partenariat entre Dakar Mobilité et Sonatel pour les services numériques du BRT (17 juillet 2026)', 'url' => 'https://www.ecofinagency.com/news-digital/1707-57502-senegal-new-partnership-to-bring-more-digital-services-to-dakar-brt', 'date' => '2026-10-26'],
        ['titre' => 'Senego, Wave : l’ampleur de la fintech née à Dakar (12 mai 2026)', 'url' => 'https://senego.com/wave-le-chiffre-qui-mesure-lampleur-prise-par-la-fintech-nee-a-dakar_1960135.html', 'date' => '2026-10-26'],
        ['titre' => 'OSIRIS, l’UCAD veut accélérer l’intégration de l’IA dans ses enseignements (APS, 2 avril 2026)', 'url' => 'https://www.osiris.sn/l-ucad-veut-accelerer-l-integration-de-l-ia-dans-ses-enseignements.html', 'date' => '2026-10-26'],
        ['titre' => 'OSIRIS, acteurs sénégalais et coréens à Dakar autour de l’IA (18 juin 2026)', 'url' => 'https://www.osiris.sn/des-acteurs-senegalais-et-coreens-explorent-a-dakar-les-opportunites-de-l.html', 'date' => '2026-10-26'],
        ['titre' => 'OSIRIS, Sonatel lance ses offres 5G mobile (8 juin 2024)', 'url' => 'https://www.osiris.sn/sonatel-lance-ses-offres-5g-mobile-et-devoile-une-nouvelle-gamme-pass-internet.html', 'date' => '2026-10-26'],
        ['titre' => 'OSIRIS, Dakar Digital Show : la création de contenus numériques (3 juin 2016)', 'url' => 'https://www.osiris.sn/Dakar-digital-show-La-creation-de.html', 'date' => '2026-10-26'],
        ['titre' => 'Wikipédia, Dakar-Plateau', 'url' => 'https://fr.wikipedia.org/wiki/Dakar-Plateau', 'date' => '2026-10-26'],
        ['titre' => 'Wikipédia, Médina (Dakar)', 'url' => 'https://fr.wikipedia.org/wiki/Médina_(Dakar)', 'date' => '2026-10-26'],
        ['titre' => 'Wikipédia, Mermoz-Sacré-Cœur', 'url' => 'https://fr.wikipedia.org/wiki/Mermoz-Sacré-Cœur', 'date' => '2026-10-26'],
        ['titre' => 'Wikipédia, Hann Bel-Air', 'url' => 'https://en.wikipedia.org/wiki/Hann_Bel-Air', 'date' => '2026-10-26'],
        ['titre' => 'BCEAO, le siège de la BCEAO', 'url' => 'https://www.bceao.int/fr/content/le-siege-de-la-bceao', 'date' => '2026-10-26'],
        ['titre' => 'Au Sénégal, Jeux olympiques de la jeunesse Dakar 2026 : dates et sites (9 décembre 2022)', 'url' => 'https://au-senegal.com/la-date-officielle-des-jeux-olympiques-de-la-jeunesse-dakar-2026-devoilee,16440.html', 'date' => '2026-10-26'],
        ['titre' => 'Au Sénégal, dans quel quartier habiter à Dakar (8 septembre 2015)', 'url' => 'https://au-senegal.com/dans-quel-quartier-habiter-a-dakar,11473.html', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-en-entreprise'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
