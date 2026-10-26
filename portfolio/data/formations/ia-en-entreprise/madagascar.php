<?php
// ============================================================
// data/formations/ia-en-entreprise/madagascar.php · Page « formation IA par pays » :
// Madagascar. Pays hors de la liste des pays travaillés : « peut accompagner
// à distance ». Devis en euros, aucun montant pour la formation.
// Faits consultés le 25/10/2026 : DataReportal, DLA Piper, Newsmada, Edicom,
// FMFP, L'Express de Madagascar, Afrik, Osiris, tarifs OpenAI, Anthropic,
// Google et Microsoft. Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formateur IA en entreprise à Madagascar : vos équipes utilisent ChatGPT, Claude et Gemini sur leurs propres documents, avec une règle claire sur les données et sur les coupures de réseau",
    'title'   => "Formation IA en entreprise à Madagascar | Richard SALANON",
    'meta'    => "Formation IA pour vos équipes à Madagascar : ChatGPT, Claude et Gemini sur vos documents, règles de données, financement FMFP, à distance. Sur devis.",
    'en_bref' => "Pour former des équipes à l'IA à Madagascar, Richard SALANON intervient à distance depuis Cotonou, en français, sur les documents et les comptes de l'entreprise, avec un devis en euros. Les cabinets, les centres d'appels et les exportateurs d'Antananarivo, de Toamasina ou d'Antsirabe y apprennent à rédiger, synthétiser et analyser avec ChatGPT, Claude ou Gemini. La formation tient compte d'un réseau qui coupe, de la loi de 2014 sur les données personnelles et du FMFP. Le prix est fixé sur devis.",
    'publie'  => '2026-11-17',
    'maj'     => '2026-11-17',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les équipes à l'IA à Madagascar, et comment choisir ?",
            'paragraphes' => [
                "Un formateur IA d'entreprise apprend à des salariés à se servir d'un assistant (ChatGPT, Claude, Gemini, Copilot) sur leur travail réel, avec une règle sur les données et une vérification de chaque résultat. À Madagascar, Richard SALANON le fait à distance depuis Cotonou, en français, en euros, sur vos documents. Pour choisir, demandez qui animera, sur quels documents, et comment le résultat sera mesuré.",
                "Un dirigeant d'Antananarivo qui cherche un prestataire trouve surtout des pages d'écoles, des cours en ligne et des réponses d'assistants, rarement une offre de formation construite pour une équipe précise. Le critère utile n'est pas le nom de l'outil enseigné, mais ce que les participants savent faire seuls le lendemain : écrire un compte rendu, résumer un dossier, ranger des messages en tableau, et dire quels fichiers ne doivent jamais quitter l'entreprise.",
                "La différence entre une démonstration d'outil et une formation qui change le travail tient à trois choses. La première est le matériau : une démonstration utilise des exemples fournis par l'animateur, une formation utilise vos courriers, vos tableaux et vos messages, anonymisés au besoin. La deuxième est l'évaluation : chaque participant réalise seul une tâche de son poste, de la consigne à la vérification. La troisième est le suivi : sans question possible dans les semaines suivantes, l'équipe revient à ses habitudes.",
                "Les formateurs et les écoles ne se valent pas par principe, ils répondent à des besoins différents. Une école ou une université convient à une personne qui veut un cursus long. Un atelier public convient pour découvrir. Une formation d'entreprise convient quand une équipe de dix personnes doit changer sa façon de travailler sur des documents confidentiels. C'est ce dernier cas que traite cette page.",
                "Pour un service qui compte aussi des collègues sur d'autres sites, le format à distance présente un avantage concret à Madagascar : il évite les déplacements entre Antananarivo, Toamasina et Antsirabe, et permet de réunir des participants qui ne sont jamais dans la même salle. Il demande en échange une préparation sérieuse sur la connexion et l'électricité, détaillée plus bas.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est l'IA à Madagascar, et que décident les pouvoirs publics ?",
            'paragraphes' => [
                "Dans son étude <a href=\"https://datareportal.com/reports/digital-2026-madagascar\">Digital 2026</a>, publiée le 8 novembre 2025, DataReportal compte 32,9 millions d'habitants à Madagascar en octobre 2025 et 6,71 millions d'internautes, soit 20,4 % de la population. Les connexions cellulaires atteignent 21,8 millions, soit 66,2 % de la population, mais certaines peuvent se limiter à la voix et aux SMS. Le même rapport relève 4,15 millions d'identités sur les réseaux sociaux en octobre 2025. Un assistant d'IA fonctionnant en ligne, la formation s'adresse donc d'abord aux salariés de bureau et aux équipes qui disposent d'une connexion régulière.",
                "Côté public, aucune stratégie nationale de l'IA publiée ne peut être citée à ce jour ; les initiatives documentées sont d'une autre nature. Le 31 mai 2024, à Marrakech, le ministère du Développement numérique a signé une convention avec DATUM Consulting (groupe ArkeUp) et l'ESTIA pour étudier la faisabilité d'un institut international d'intelligence artificielle appliquée pour l'océan Indien, rapporte <a href=\"https://www.osiris.sn/madagascar-se-projette-en-hub-international-d-intelligence-artificielle.html\">Osiris</a>, qui rattache le projet au Plan stratégique du numérique 2023-2028 et cite un déficit de 40 000 techniciens. L'<a href=\"https://www.lexpress.mg/2024/06/technologies-un-institut-dintelligence.html\">Express de Madagascar</a> précise que le projet en était alors au stade de l'étude.",
                "L'administration des douanes est le cas public le mieux documenté. Selon <a href=\"https://www.afrik.com/madagascar-l-intelligence-artificielle-redefinit-les-frontieres-douanieres\">Afrik</a> (4 mai 2025), la douane malgache centralise ses données dans un système unifié et a reçu deux semaines de formation à Antananarivo par des experts du FMI, dans le cadre d'une stratégie numérique qui court jusqu'en 2029. Les gains de recettes annoncés par cet article ne sont pas repris ici : ils relèvent de l'administration. Retenez le signal : l'IA entre dans les services publics du pays, et les entreprises qui travaillent avec eux seront interrogées sur leurs propres pratiques.",
                "Pour un dirigeant, la conclusion pratique est modeste et utile. Il n'existe pas encore de règle spécifique sur l'usage d'un assistant d'IA par une entreprise malgache ; ce sont la loi sur les données personnelles et les contrats avec vos clients qui encadrent l'usage. Une entreprise qui écrit sa propre règle maintenant aura de l'avance sur celles qui attendront un texte.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils d'IA utiliser à Madagascar, et à quel coût ?",
            'legende' => "Prix publics relevés le 25 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée. Les montants varient selon les pays et changent souvent : ils sont ceux des éditeurs et ne font pas partie du prix de la formation. Ces prix sont facturés en devises étrangères, ce qui compte pour une entreprise qui compte en ariary.",
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Prix de l\'éditeur', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédaction, reformulation, tableaux à partir de messages, analyse de fichiers', 'Gratuit ; Go 8 dollars par mois ; Plus 20 dollars par mois ; Business 20 dollars par utilisateur et par mois en annuel, 25 dollars en mensuel, à partir de 2 utilisateurs', 'Rédiger la consigne hors ligne, la coller en une fois, enregistrer la réponse sur le poste'],
                ['Claude (Anthropic)', 'Lecture de documents longs, synthèses avec citations, textes en français soignés', 'Gratuit ; Pro 17 dollars par mois en annuel (200 dollars payés d\'avance) ou 20 dollars au mois ; Team 20 dollars par siège et par mois en annuel, 25 dollars au mois', 'Préparer et télécharger les documents avant la séance'],
                ['Gemini (Google)', 'Équipes déjà sur Gmail, Docs et Sheets ; résumés de fichiers Google', 'Gratuit ; Google AI Plus 4,69 euros par mois ; Google AI Pro 18,87 euros par mois (prix affichés en euros pour le Bénin le jour de la consultation)', 'S\'intègre aux outils Google déjà ouverts, sans nouvelle application'],
                ['Copilot (Microsoft)', 'Équipes sur Microsoft 365 : Word, Excel, Outlook, Teams', 'Copilot Chat inclus sans surcoût dans les abonnements Microsoft 365 éligibles ; Microsoft 365 Copilot Business 25,20 dollars par utilisateur et par mois au mois, 21 dollars en annuel (18 dollars en promotion du 1er juillet au 31 décembre 2026, première année)', 'Utile seulement si la licence existe déjà'],
                ['DeepSeek', 'Assistant de conversation et API pour développeurs', 'Interface d\'API facturée à l\'usage, selon la documentation de l\'éditeur', 'À tester sur des textes publics ; ne pas lui confier de documents d\'entreprise sans avoir lu ses conditions sur les données'],
                ['NotebookLM (Google)', 'Interroger un ensemble de documents choisis et obtenir des réponses avec renvois aux sources', 'Offre et limites à vérifier sur la page de l\'éditeur le jour de l\'achat', 'Convient à un dossier précis : contrat, appel d\'offres, rapport'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Faut-il payer un abonnement, et que faire quand le réseau coupe ?",
            'paragraphes' => [
                "Non, pas pour apprendre. Les versions gratuites suffisent pour acquérir la méthode : formuler une demande, fournir un document, vérifier la réponse. Les abonnements se décident après la formation, sur ce qui a servi. Le point à garder en tête à Madagascar est le mode de règlement : un abonnement est facturé en dollars ou en euros, et l'ariary a varié de 9,3 % face à l'euro au premier semestre 2026, de 5 309,31 à 4 810,95 ariary pour un euro selon Newsmada. Un abonnement à vingt personnes se budgète donc avec une marge de change.",
                "Les coupures d'électricité et de réseau sont un sujet d'organisation, pas un obstacle. La formation s'y adapte : documents d'exercice téléchargés la veille sur chaque poste, consignes écrites dans un traitement de texte puis collées d'un seul geste, réponses enregistrées localement, exercices de relecture qui n'exigent aucune connexion, et séances de deux heures et demie plus faciles à reprendre qu'une journée entière.",
                "Un onduleur sur le poste de l'animateur et un partage de connexion par téléphone en secours sont prévus. Pour les participants, la liste du matériel est envoyée avant la session : un ordinateur chargé, un navigateur à jour, un forfait de données vérifié, et un lieu où le courant est le plus stable de la journée.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles de données respecter avant d'envoyer un document à un assistant d'IA ?",
            'paragraphes' => [
                "À Madagascar, la loi n° 2014-038 sur la protection des données à caractère personnel, adoptée le 16 décembre 2014 et promulguée le 9 janvier 2015, selon <a href=\"https://www.dlapiperdataprotection.com/?c=MG&t=law\">DLA Piper</a>, s'applique dès qu'un fichier contient un nom, un numéro de téléphone, une adresse ou tout autre élément qui identifie une personne. Coller la liste de vos clients, la fiche d'un salarié ou un dossier médical dans un assistant hébergé à l'étranger est un traitement de données et, le plus souvent, un transfert hors du pays. Selon DLA Piper, l'application de la loi n'est pas encore pleinement effective faute de décret d'application : la prudence reste de mise.",
                "L'autorité compétente est la Commission malagasy de l'informatique et des libertés (CMIL), instituée par le décret n° 2023-1541. Selon <a href=\"https://newsmada.com/?p=166918\">Newsmada</a> (30 janvier 2026), elle prévoit en 2026 le lancement d'un portail de télé-déclaration et le recrutement de 104 agents. Le principe, d'après DLA Piper, est une déclaration préalable à la CMIL pour tout traitement, sauf exemption ou autorisation, et la sanction financière peut atteindre 5 % du chiffre d'affaires hors taxes du dernier exercice. Le défaut de formalités est puni à l'article 62 de six mois à deux ans d'emprisonnement.",
                "Les transferts vers un pays étranger ne sont admis que si ce pays offre une protection suffisante, ou dans des cas limités comme le consentement de la personne informée ou l'exécution d'un contrat. Le destinataire ne peut pas retransférer les données sans accord. Pour votre équipe, cela se traduit par une règle de travail simple, que la formation fait appliquer : on classe chaque document avant de le soumettre.",
                "La formation applique donc un classement en trois couleurs. Vert : un texte public, un modèle de courrier, une consigne. Orange : un document réel dont on remplace d'abord les noms, les numéros de téléphone, les montants et les références. Rouge : un dossier qui ne sort jamais, comme un dossier de patient, une fiche de paie ou un contrat client soumis à confidentialité. Un centre d'appels qui travaille pour un donneur d'ordre étranger vérifie en plus son contrat, car ce client peut interdire tout envoi à un service tiers.",
                "Les formulaires et la procédure de la CMIL évoluent encore, et la procédure exacte de déclaration se confirme auprès de la commission ou d'un juriste local avant de déployer un assistant sur des données de clients. Richard n'est pas juriste : il aide l'équipe à appliquer la règle au quotidien et à préparer la note qui décrit quelles données vont vers quel outil.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour quelle équipe, et comment se déroule la formation à distance ?",
            'legende' => "Séances en visioconférence depuis Cotonou. Antananarivo est en UTC+3 et Cotonou en UTC+1 : deux heures d'écart toute l'année. Richard est joignable de 7 h à 20 h, heure de Cotonou, soit de 9 h à 22 h à Antananarivo.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir à Madagascar'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée, en deux séances', '12 personnes au plus', 'Une direction ou un service qui n\'a jamais utilisé d\'assistant et veut voir avant de décider'],
                ['Formation de deux jours', 'Quatre demi-journées de 3 h 30, ou cinq à six séances de 2 h 30 à distance', '8 à 10 personnes par métier', 'Une équipe qui a commencé en désordre, ou un service dont une tâche volumineuse justifie l\'effort'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant trois mois', 'Le groupe déjà formé', 'Fixer l\'usage et étendre à d\'autres tâches après les premières semaines'],
                ['Plusieurs sites', 'Séances communes en visioconférence', '8 personnes au plus par session', 'Antananarivo, Toamasina et Antsirabe dans le même groupe, sans déplacement'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quel matériel, quelle langue et quel fuseau faut-il prévoir ?",
            'intro' => "La formation à distance fonctionne quand la logistique est réglée avant le premier jour. Voici ce qui compte pour une équipe malgache.",
            'items' => [
                ['titre' => 'La langue', 'texte' => "Le français est la langue de travail. Le malagasy est langue nationale et officielle avec le français selon la Constitution de 2010. Les assistants écrivent en malagasy, mais la qualité varie : tout texte en malagasy destiné à un client est relu par un locuteur avant envoi."],
                ['titre' => 'Le fuseau', 'texte' => "Les séances se placent entre 9 h et 17 h à Antananarivo, soit entre 7 h et 15 h à Cotonou. Un créneau le matin évite la fatigue de fin de journée et les coupures de l'après-midi, que l'équipe connaît mieux que quiconque."],
                ['titre' => 'Le matériel', 'texte' => "Un ordinateur par participant, un navigateur à jour, un tableur et un traitement de texte. Un téléphone suffit pour regarder l'écran partagé, pas pour analyser un tableau."],
                ['titre' => 'La connexion', 'texte' => "Une connexion stable pour chaque participant, avec un forfait de données vérifié. Les enregistrements des séances sont envoyés pour être revus hors séance, et les exercices peuvent être terminés plus tard."],
                ['titre' => 'Les comptes', 'texte' => "Les comptes d'équipe que l'entreprise possède déjà, ou des comptes gratuits créés au début. Aucun abonnement n'est à acheter avant d'avoir vu ce qui sert."],
                ['titre' => 'Les documents', 'texte' => "Trois à cinq documents réels par participant, déjà anonymisés ou prêts à l'être avec l'aide de l'animateur, envoyés quelques jours à l'avance."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble le programme selon les métiers de Madagascar ?",
            'items' => [
                ['secteur' => 'Centres d\'appels et externalisation de la relation client', 'probleme' => "Les rapports de qualité et les comptes rendus d'appel se rédigent encore à la main.", 'solution' => "Tâche : résumer des échanges et rédiger les rapports de qualité à partir de notes. Outil : Claude ou ChatGPT, sur des textes anonymisés. Résultat attendu : un rapport structuré que le superviseur relit, sans aucune donnée de client du donneur d'ordre envoyée sans son accord."],
                ['secteur' => 'Exportation de vêtements, de vanille et de girofle', 'probleme' => "Les commandes, les lots et les expéditions passent par des tableurs et des courriels, souvent en français avec des acheteurs qui écrivent en anglais.", 'solution' => "Tâche : relances et confirmations bilingues, résumé d'un dossier de commande, tableau des lots. Outil : ChatGPT ou Claude. Résultat attendu : des courriers prêts à relire, et un tableau dont chaque quantité est recontrôlée sur le document source."],
                ['secteur' => 'Tourisme, hôtellerie et artisanat', 'probleme' => "Les demandes arrivent par Messenger, courriel et téléphone, dans plusieurs langues, et personne n'a de vue d'ensemble.", 'solution' => "Tâche : répondre aux demandes en français ou en anglais, classer les messages par motif, rédiger les descriptions de circuits. Outil : Gemini ou ChatGPT. Résultat attendu : des réponses cohérentes avec les tarifs publiés, relues avant envoi."],
                ['secteur' => 'Mines, nickel et sous-traitance industrielle', 'probleme' => "Les rapports de production, les bons de travail et les dossiers fournisseurs sont volumineux et souvent rédigés dans des formats différents.", 'solution' => "Tâche : synthèse de rapports, tableau des écarts, comparaison de deux versions d'un cahier des charges. Outil : Claude ou NotebookLM sur un dossier choisi. Résultat attendu : une synthèse avec renvoi aux pages, chaque chiffre retrouvé dans la source."],
                ['secteur' => 'Cabinets comptables et services administratifs', 'probleme' => "Les cabinets préparent des courriers, des notes et des tableaux pour des clients dont les données sont confidentielles,.", 'solution' => "Tâche : notes de synthèse, courriers aux clients, tableaux de suivi. Outil : Copilot ou ChatGPT sur comptes professionnels. Résultat attendu : un premier jet gagné sur le courrier, tandis que les calculs sont refaits dans le tableur."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer une formation IA à Madagascar, notamment avec le FMFP ?",
            'paragraphes' => [
                "Le Fonds malgache de formation professionnelle (FMFP) est le premier organisme à interroger. D'après l'Agence française de développement, il reçoit une contribution obligatoire de 1 % de la masse salariale brute plafonnée des entreprises du secteur formel. La page des guichets du <a href=\"https://www.fmfp.mg\">FMFP</a>, consultée le 25 octobre 2026, distingue la requête individuelle d'entreprise (REI), la requête collective d'entreprises (RCE), le projet interentreprises sectoriel (PIS), le projet interentreprises inter-sectoriel (PII) et un guichet d'équité pour le secteur informel.",
                "L'entreprise doit être cotisante. Une requête individuelle s'appuie sur un plan de formation ou un besoin clairement motivé, avec un formulaire, un cahier des charges, un budget détaillé et une lettre de demande de financement. Pour un PIS, il faut au moins deux entreprises cotisantes du même secteur ou un groupement sectoriel. Le fonds recense aussi des cabinets de formation dans une base consultable sur son site ; la condition exacte de référencement d'un prestataire n'y est pas précisée, et se demande directement au FMFP.",
                "Aucune prise en charge n'est garantie : l'éligibilité d'un thème et d'un organisme relève du fonds, dont les appels à projets ont chacun leurs dates. Richard SALANON n'affiche aucun agrément d'un fonds. Il peut préparer avec vous les pièces utiles : objectifs mesurables, programme, durée, évaluation, budget et calendrier. Si aucun financement n'est obtenu, budgétisez la formation sur les fonds propres, en prévoyant le règlement en euros.",
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => "Combien coûte une formation IA pour une équipe à Madagascar ?",
            'intro' => "Le prix est fixé sur devis, en euros, après un échange de cadrage sous 24 heures. Le règlement se fait par carte bancaire, PayPal ou virement international, et l'entreprise convertit en ariary au moment de payer. Les abonnements aux assistants restent à son nom et ne sont pas compris.",
            'items' => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en euros', 'inclus' => ['Une demi-journée sur vos documents', 'Premiers gestes sur deux tâches', 'Règle de classement des données', 'Recommandation pour la suite']],
                ['offre' => 'Formation de deux jours', 'prix' => 'Sur devis, en euros', 'inclus' => ['Quatre demi-journées ou cinq à six séances à distance', 'Exercices sur vos documents', 'Bibliothèque de consignes et modes opératoires', 'Évaluation sur la tâche cible et attestation', 'Supports téléchargeables et enregistrements']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en euros', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Corrections et nouvelles tâches', 'Bilan écrit']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par métier ou par site.",
                "La durée retenue et le nombre de séances.",
                "Le mode : tout à distance, ou séances réparties pour tenir compte des coupures.",
                "La préparation des exercices sur vos documents et leur anonymisation.",
                "Le dossier de demande au FMFP, si vous le souhaitez.",
                "L'accompagnement après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs font les équipes qui démarrent l'IA à Madagascar ?",
            'intro' => "Ces écarts reviennent d'une entreprise à l'autre ; ceux-ci sont liés au contexte du pays et se préviennent dès la session.",
            'items' => [
                ['titre' => 'Bâtir l\'usage sur une connexion supposée parfaite', 'texte' => "Avec 20,4 % d'internautes fin 2025 selon DataReportal et des coupures d'électricité connues, un exercice qui exige la ligne pendant trois heures échoue. Les documents se préparent la veille et les consignes s'écrivent hors ligne."],
                ['titre' => 'Coller des données de clients dans un compte personnel', 'texte' => "La loi de 2014 encadre le transfert de données hors du pays. Un compte gratuit de salarié n'appartient pas à l'entreprise et part avec lui."],
                ['titre' => 'Envoyer sans relire', 'texte' => "Un délai, un prix ou une remise cités à tort engagent l'entreprise. La grille de relecture reste près du poste, et rien ne part sans qu'une personne ait retrouvé chaque fait dans sa source."],
                ['titre' => 'Faire confiance à une référence parce qu\'elle est précise', 'texte' => "Un assistant peut citer un article de loi ou un chiffre qui n'existe pas. Pour tout texte fiscal malgache, comme le décret du 2 juillet 2025 sur la facture électronique, on revient au texte officiel."],
                ['titre' => 'Se fier au malagasy sans relecture', 'texte' => "Les assistants produisent du malagasy de qualité inégale. Un texte destiné à un client ou à un agent de terrain passe par un locuteur."],
                ['titre' => 'Payer un abonnement en devises sans prévoir le change', 'texte' => "L'ariary a varié de 9,3 % face à l'euro au premier semestre 2026. Le budget des abonnements prévoit un écart."],
                ['titre' => 'Multiplier les outils', 'texte' => "Trois assistants payés par trois services, sans règle commune, coûtent plus cher et se contrôlent moins. L'entreprise retient un outil principal après la formation."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi choisir Richard SALANON pour former vos équipes à Madagascar ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut accompagner à distance les entreprises à Madagascar, en français, avec un devis en euros. Il utilise lui-même ces assistants chaque jour pour rédiger, analyser et développer, et il intègre l'IA dans des logiciels pour ses clients. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Avec " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . ") et plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées selon lui, il construit les exercices sur vos documents, évalue chaque participant sur une tâche réelle et laisse à l'entreprise ses supports. Il n'est certifié par aucun éditeur d'IA et ne se présente comme partenaire d'aucun.",
                "Ses projets livrés à des entreprises d'Afrique de l'Ouest et du Centre, d'Europe et du Canada sont présentés sur la page des <a href=\"/realisations/\">réalisations</a> ; son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>. Quand le besoin dépasse l'usage quotidien des assistants, la mission relève de l'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a>, ou de la <a href=\"/formations/ia-en-entreprise\">fiche générale de la formation</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre équipe à l'IA à Madagascar ?",
            'texte'  => "Indiquez le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps, vos outils et votre connexion : vous recevez une réponse sous 24 heures, puis une proposition et un devis en euros.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA à Madagascar ?", 'r' => "Les trois appellations se côtoient sur le marché, et aucune ne fait l’objet d’un diplôme ou d’un agrément officiel. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek ou NotebookLM sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant à Madagascar : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA à Madagascar ?", 'r' => "Choisissez d’abord un usage précis et un responsable, avant tout abonnement : une tâche qui revient chaque semaine, un jeu de documents d’exercice et une règle claire sur les données confidentielles. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise à Madagascar, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => "Qui peut former mes équipes à l'IA à Antananarivo ou ailleurs à Madagascar ?", 'r' => "Richard SALANON intervient à distance depuis Cotonou, en français, sur les documents et les comptes de votre entreprise, avec un devis en euros. La formation vise des équipes de bureau, de dix personnes au plus par groupe, et se termine par une évaluation sur une tâche réelle de chaque participant."],
        ['q' => "La formation fonctionne-t-elle avec les coupures de courant et de réseau ?", 'r' => "Oui, si on la prépare : documents téléchargés la veille, consignes rédigées hors ligne, séances de deux heures et demie, enregistrements envoyés après chaque séance et exercices à terminer hors séance. Une connexion stable reste nécessaire pendant les séances en ligne."],
        ['q' => "Mes équipes peuvent-elles envoyer des données de clients à ChatGPT ou à Claude ?", 'r' => "Pas sans précaution. La loi n° 2014-038 encadre le transfert de données personnelles hors de Madagascar. La formation apprend à classer les documents en trois couleurs, à anonymiser les noms et les numéros, et à garder en interne ce qui ne doit pas sortir."],
        ['q' => "Faut-il déclarer l'usage d'un assistant d'IA à la CMIL ?", 'r' => "La loi impose en principe une déclaration préalable pour les traitements de données personnelles, sauf exemption ou autorisation. La CMIL annonçait pour 2026 un portail de télé-déclaration : la procédure à jour se confirme auprès d'elle ou d'un juriste local."],
        ['q' => "Le FMFP peut-il financer la formation ?", 'r' => "Peut-être, si votre entreprise cotise au fonds et que le thème et le prestataire sont retenus. Les guichets (REI, RCE, PIS, PII) ont chacun leurs pièces. Aucune prise en charge n'est garantie : interrogez le FMFP avant de signer."],
        ['q' => "Le devis est-il en ariary ou en euros ?", 'r' => "En euros, sans montant affiché d'avance. L'ariary a varié de 9,3 % face à l'euro au premier semestre 2026 selon Newsmada, ce qui justifie un prix fixé en euros. Le règlement se fait par carte bancaire, PayPal ou virement."],
        ['q' => "Les assistants comprennent-ils le malagasy ?", 'r' => "Ils écrivent en malagasy avec une qualité inégale. La formation se donne en français ; tout texte en malagasy destiné à un client est relu par un locuteur avant envoi."],
        ['q' => "Peut-on réunir des participants d'Antananarivo, de Toamasina et d'Antsirabe ?", 'r' => "Oui, par visioconférence, à raison de huit personnes au plus par session à distance. Le décalage avec Cotonou est de deux heures toute l'année, et les créneaux se placent le matin à Antananarivo."],
        ['q' => "Faut-il acheter des abonnements avant la session ?", 'r' => "Non. Les versions gratuites suffisent pour apprendre. L'abonnement se décide ensuite, sur ce qui a servi, en prévoyant l'écart de change puisque les éditeurs facturent en dollars ou en euros."],
        ['q' => "Reçoit-on une attestation ?", 'r' => "Oui, une attestation nominative de fin de formation avec le programme et les exercices corrigés. Ce n'est ni un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Madagascar (population, internautes, connexions mobiles)', 'url' => 'https://datareportal.com/reports/digital-2026-madagascar', 'date' => '2026-10-25'],
        ['titre' => 'DLA Piper, protection des données à Madagascar (loi n° 2014-038, CMIL, transferts, sanctions)', 'url' => 'https://www.dlapiperdataprotection.com/?c=MG&t=law', 'date' => '2026-10-25'],
        ['titre' => 'Newsmada, la CMIL et ses projets pour 2026 (30 janvier 2026)', 'url' => 'https://newsmada.com/?p=166918', 'date' => '2026-10-25'],
        ['titre' => 'FMFP, guichets de financement de la formation', 'url' => 'https://www.fmfp.mg', 'date' => '2026-10-25'],
        ['titre' => 'Osiris, Madagascar et le projet d\'institut d\'IA appliquée pour l\'océan Indien (3 juin 2024)', 'url' => 'https://www.osiris.sn/madagascar-se-projette-en-hub-international-d-intelligence-artificielle.html', 'date' => '2026-10-25'],
        ['titre' => 'L\'Express de Madagascar, un institut d\'intelligence artificielle en gestation (juin 2024)', 'url' => 'https://www.lexpress.mg/2024/06/technologies-un-institut-dintelligence.html', 'date' => '2026-10-25'],
        ['titre' => 'Afrik, l\'IA dans l\'administration des douanes de Madagascar (4 mai 2025)', 'url' => 'https://www.afrik.com/madagascar-l-intelligence-artificielle-redefinit-les-frontieres-douanieres', 'date' => '2026-10-25'],
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres Free, Go, Plus et Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Anthropic, tarifs de Claude (Free, Pro, Team)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, abonnements Gemini et Google AI', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
        ['titre' => 'DeepSeek, documentation de l\'API', 'url' => 'https://api-docs.deepseek.com/quick_start/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Newsmada, l\'ariary face à l\'euro et au dollar au premier semestre 2026 (données de la Banque centrale)', 'url' => 'https://newsmada.com/?p=190471', 'date' => '2026-10-25'],
        ['titre' => 'AFD, Fonds malgache de financement de la formation professionnelle (FMFP)', 'url' => 'https://www.afd.fr/fr/carte-des-projets/fonds-malgache-de-financement-de-la-formation-professionnelle-fmfp', 'date' => '2026-10-25'],
        ['titre' => 'Edicom, la facture électronique obligatoire à Madagascar (6 octobre 2025)', 'url' => 'https://edicomgroup.com/fr/blog/madagascar-avance-mise-facture-electronique-obligatoire', 'date' => '2026-10-25'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
