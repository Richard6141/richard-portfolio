<?php
// ============================================================
// data/formations/ia-en-entreprise/cameroun.php · Formation IA en entreprise, Cameroun.
// Faits relevés le 2026-10-25 : DataReportal 2026, Droit, médias et finance (lois de 2010
// et de 2024), Digital Business Africa, Ecomatin (FNE, fonds de formation), Ecofin,
// Business in Cameroon, tarifs OpenAI, Anthropic, Google, Microsoft.
// Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formateur IA en entreprise au Cameroun : vos équipes de Douala, Yaoundé, Bafoussam ou Garoua utilisent ChatGPT, Claude et Gemini sur leurs documents, en français comme en anglais, avec une règle claire sur les données',
    'title'   => 'Consultant et formateur IA au Cameroun | Richard SALANON',
    'meta'    => 'Formation IA pour les équipes au Cameroun : ChatGPT, Claude et Gemini sur vos documents, loi de 2024 sur les données, à distance, devis en FCFA.',
    'en_bref' => 'Richard SALANON, basé à Cotonou, forme à distance les équipes des entreprises camerounaises à l’IA : ChatGPT, Claude, Gemini et Copilot servent à rédiger, synthétiser et analyser leurs propres documents, en français ou en anglais, au même fuseau que Douala et Yaoundé. La formation intègre la loi de 2024 sur les données personnelles, entrée en vigueur le 23 juin 2026. Elle se donne en atelier d’une demi-journée, en deux jours ou en accompagnement mensuel. Le devis est établi en FCFA.',
    'publie'  => '2026-11-27',
    'maj'     => '2026-11-27',

    'faits_hero' => [
        ['l' => 'Intervention', 'v' => 'À distance, en français ou en anglais'],
        ['l' => 'Décalage avec Cotonou', 'v' => 'Aucun (UTC+1 des deux côtés)'],
        ['l' => 'Devis', 'v' => 'Sur devis, en FCFA'],
        ['l' => 'Réponse', 'v' => 'Sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former mes équipes à l’IA au Cameroun, et comment choisir ?',
            'paragraphes' => [
                'Une équipe camerounaise peut se former auprès d’une école, d’un centre de formation ou d’un formateur indépendant. Pour un usage quotidien en entreprise, le bon choix est celui qui travaille sur vos documents réels, dans vos comptes, en français et en anglais, et qui explique ce que la loi de 2024 sur les données change avant le premier exercice. Richard SALANON propose ce format, à distance.',
                'Un formateur IA d’entreprise n’enseigne pas la théorie des réseaux de neurones. Il aide un service à confier des tâches précises à un assistant, à vérifier ce que celui-ci produit et à fixer des règles écrites pour l’équipe. La différence se voit le lundi suivant : une démonstration d’outil laisse de beaux souvenirs, une formation laisse des consignes qui marchent sur les dossiers du service et un geste de vérification que chacun sait refaire.',
                'Pour comparer plusieurs offres au Cameroun, quatre questions suffisent. Les exercices se font-ils sur vos propres documents ou sur des exemples génériques ? Le formateur sait-il travailler dans les deux langues officielles du pays ? Les règles de protection des données sont-elles traitées comme un chapitre à part entière, avec la loi camerounaise et non seulement un rappel général ? Que reste-t-il à l’équipe un mois plus tard : un support, une bibliothèque de consignes, un contact pour les questions ?',
                'Le contexte camerounais ajoute une exigence propre : une équipe de Douala peut compter autant de collègues anglophones que francophones, et un dossier peut arriver de Buea ou de Bamenda en anglais, pendant qu’un courrier est attendu en français à Yaoundé. Selon l’article premier de la Constitution, l’anglais et le français ont le même statut. Une formation qui ne gère qu’une langue laisse la moitié des gestes sans méthode.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Où en est l’IA au Cameroun, entre connexions mobiles et stratégie nationale ?',
            'items' => [
                ['valeur' => '41,9 %', 'libelle' => 'Part de la population camerounaise qui utilisait internet en octobre 2025, soit 12,6 millions de personnes sur 30,1 millions d’habitants', 'source' => 'DataReportal, Digital 2026 : Cameroon', 'url' => 'https://datareportal.com/reports/digital-2026-cameroon'],
                ['valeur' => '96,4 %', 'libelle' => 'Part de la population représentée par les connexions mobiles cellulaires en octobre 2025, soit 29,0 millions de connexions', 'source' => 'DataReportal, Digital 2026 : Cameroon', 'url' => 'https://datareportal.com/reports/digital-2026-cameroon'],
                ['valeur' => '11,01 Mbit/s', 'libelle' => 'Débit médian en accès fixe, en hausse de 10,9 % sur les douze mois jusqu’en août 2025', 'source' => 'DataReportal, Digital 2026 : Cameroon', 'url' => 'https://datareportal.com/reports/digital-2026-cameroon'],
                ['valeur' => '65,1 %', 'libelle' => 'Part du Cameroun dans les comptes de mobile money de la zone CEMAC fin 2024, soit 30,9 millions de comptes (l’article note lui-même que certains totaux régionaux ne se recoupent pas)', 'source' => 'Ecofin Agency', 'url' => 'https://www.ecofinagency.com/news/0705-55325-cameroon-retains-lead-in-central-african-mobile-money-in-2024-as-regional-rivals-gain-ground'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que changent ces chiffres pour une équipe qui démarre l’IA ?',
            'paragraphes' => [
                'Un assistant d’IA se pilote en ligne, mais ce qui compte, c’est l’appareil et la connexion de chaque salarié. Avec 41,9 % d’internautes et 96,4 % de connexions mobiles en octobre 2025, selon DataReportal, beaucoup de collaborateurs découvrent l’IA sur un téléphone. Pour rédiger un courrier ou résumer une note, le téléphone suffit. Pour analyser un tableau ou relire un rapport de trente pages, il faut un ordinateur : l’entreprise doit le savoir avant de choisir ses participants.',
                'Le pays s’est aussi doté d’un cadre public. La Stratégie nationale de l’intelligence artificielle a été adoptée le 8 juillet 2025, à l’issue des deuxièmes Concertations nationales sur l’IA tenues au Palais des Congrès de Yaoundé, sous l’impulsion du ministère des Postes et Télécommunications (MINPOSTEL), selon la presse camerounaise. Ses orientations rapportées comprennent l’intégration de l’IA dans les secteurs clés, le renforcement des capacités nationales, la protection des données et la mise en place d’un cadre juridique et éthique.',
                'Le budget, le calendrier détaillé et les cibles chiffrées de cette stratégie ne figurent pas dans les articles consultés : une entreprise qui espère une aide publique précise ne doit pas s’appuyer dessus. En revanche, elle donne un signal utile à un dirigeant : former les équipes à l’IA n’est plus un sujet marginal à Yaoundé, et les règles à venir sur l’usage de l’IA se préparent mieux avec des équipes déjà formées et des pratiques écrites.',
                'Une remarque sur le mobile money. Avec 30,9 millions de comptes fin 2024, le Cameroun est le premier marché de la zone CEMAC. Cela compte pour les abonnements : les éditeurs d’IA facturent en dollars ou en euros par carte. MTN MoMo a lancé le 19 décembre 2025 une carte virtuelle adossée à Mastercard et à Access Bank Cameroun, alimentée depuis le portefeuille MoMo, qui permet de payer des outils en ligne sans compte bancaire classique, selon Business in Cameroon. Les plafonds et les frais ne sont pas détaillés : à vérifier auprès de l’opérateur avant de budgéter.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d’IA utiliser au Cameroun, et à quel coût ?',
            'legende' => 'Tarifs lus sur les pages des éditeurs le 25 octobre 2026, hors taxes, dans la devise affichée. Les montants varient selon les pays : la page de Google a été affichée pour le Bénin, et rien ne garantit les mêmes montants au Cameroun. Pour les prix en euros, 1 € vaut 655,957 FCFA. Ces coûts sont ceux des éditeurs et ne font pas partie du prix de la formation.',
            'entetes' => ['Outil', 'Ce qu’il fait bien pour une équipe', 'Coût de l’éditeur', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédaction souple, reformulation, tableaux à partir de messages en vrac, analyse de fichiers', 'Gratuit ; Go 8 $ par mois ; Plus 20 $ par mois ; Business 20 $ par utilisateur et par mois en facturation annuelle, 25 $ au mois, à partir de 2 utilisateurs', 'L’application mobile suffit pour un message ; les longues conversations avec fichiers demandent une connexion stable'],
                ['Claude (Anthropic)', 'Lecture de longs documents, respect d’un modèle de courrier, rédaction nuancée en français', 'Gratuit ; Pro 17 $ par mois en annuel (200 $ payés d’avance) ou 20 $ au mois ; Team 20 $ par siège et par mois en annuel, 25 $ au mois', 'Préparer le document à l’avance en un seul fichier évite les envois répétés'],
                ['Gemini (Google)', 'Intégration à Gmail, Docs et Drive pour les équipes déjà sur Google, recherche et synthèse', 'Gratuit ; Google AI Plus 4,69 € par mois (environ 3 076 FCFA) ; Google AI Pro 18,87 € par mois (environ 12 378 FCFA) ; offre Business à 21 $ par siège et par mois', 'Les documents déjà dans Drive n’ont pas à être renvoyés'],
                ['Copilot (Microsoft)', 'Assistant des équipes qui vivent dans Word, Excel, Outlook et Teams', 'Complément Copilot Business à 18 $ par utilisateur et par mois en annuel jusqu’au 31 décembre 2026 pour la première année (21 $ ensuite), 25,20 $ au mois ; Business Standard avec Copilot 23,50 $ en annuel', 'Utile surtout si la licence Microsoft 365 existe déjà'],
                ['DeepSeek', 'Questions générales et raisonnement ; à réserver à des textes publics', 'Aucun tarif relevé pour l’usage en ligne ; sa politique de confidentialité, citée par Futura-Sciences en janvier 2025, indique un stockage des données sur des serveurs situés en Chine', 'Hors de la liste des outils pour documents d’entreprise tant que la politique n’a pas été relue'],
                ['NotebookLM (Google)', 'Interroger une série de documents fournis et obtenir des réponses reliées aux passages sources', 'La page des abonnements de Google présente un assistant de recherche et de rédaction, « Gemini Notebook », dans chaque offre, y compris gratuite', 'Bon pour préparer un dossier à l’avance, puis relire hors ligne les extraits retenus'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel outil choisir, et comment payer son abonnement depuis le Cameroun ?',
            'paragraphes' => [
                'Aucun abonnement n’est exigé pour suivre la formation. Les versions gratuites suffisent à apprendre à formuler une demande, à fournir un document et à vérifier la réponse. Le choix d’un outil payant vient après, sur la base de ce qui a servi. Une équipe sous Microsoft 365 regarde Copilot ; une équipe sous Google Workspace regarde Gemini ; les autres comparent ChatGPT et Claude sur leurs propres documents. Le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> détaille les offres d’équipe.',
                'Le paiement est une vraie question locale. Les éditeurs réclament une carte bancaire internationale, que tous les salariés ne possèdent pas. L’entreprise peut ouvrir un compte d’équipe avec sa propre carte et laisser l’administrateur ajouter les utilisateurs, ce qui évite que les documents de la société vivent dans des comptes personnels. La carte virtuelle MoMo évoquée plus haut peut dépanner, avec les réserves de plafond déjà dites.',
                'Une règle vaut pour tous les outils : les documents de l’entreprise ne se traitent pas dans le compte personnel gratuit d’un salarié, que la société ne contrôle pas. Pendant la formation, les exercices sur compte gratuit portent donc sur des copies anonymisées ; les dossiers sensibles attendent un compte professionnel, ou ne quittent pas l’entreprise.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données et de conformité au Cameroun avant d’envoyer un document à un outil d’IA ?',
            'paragraphes' => [
                'La règle centrale est la loi n° 2024/017 du 23 décembre 2024 sur la protection des données à caractère personnel, entrée en vigueur le 23 juin 2026 après dix-huit mois de transition, selon Droit, médias et finance. Avant d’envoyer à un assistant un document qui contient des noms, des numéros ou des informations de clients, de patients ou d’élèves, il faut un motif légitime, un consentement lorsque la loi l’exige, et la certitude que seules les données nécessaires partent.',
                'Le texte, tel que résumé par ce média, exige un consentement explicite, libre et éclairé, sans case précochée et révocable à tout moment, limite la collecte à ce qui est nécessaire, impose des mesures de sécurité comme le chiffrement et des audits, et reconnaît aux personnes des droits d’accès, de rectification et d’effacement. Les grandes organisations de télécoms, de banque et d’assurance doivent nommer un délégué à la protection des données. Les sanctions peuvent atteindre une part significative du chiffre d’affaires et, pour les cas les plus graves, des peines de prison.',
                'Le point qui touche directement l’IA est le transfert à l’étranger. Les principaux assistants sont hébergés hors du Cameroun. D’après le même article, une entreprise doit démontrer que le pays de destination offre une protection équivalente ou supérieure, et obtenir l’autorisation préalable de l’autorité avant le transfert. Coller une liste de clients dans un assistant en ligne peut donc relever de cette règle. Le plus simple, pour une équipe, est de ne pas envoyer de données personnelles dans l’outil, ou de les remplacer d’abord par des codes.',
                'L’autorité compétente est l’Autorité de protection des données à caractère personnel, un organisme public indépendant selon l’article 53 de la loi, d’après Digital Business Africa. Ses missions annoncées comprennent la délivrance des autorisations, la publication d’un référentiel de mesures techniques, le traitement des plaintes et l’établissement de la liste des pays offrant une protection équivalente. Le calendrier de sa mise en place complète n’est pas précisé dans les articles lus : la liste des pays admis et la procédure de dépôt se confirment auprès d’elle avant tout traitement de masse.',
                'La loi relative à la cybersécurité et à la cybercriminalité, datée de 2010, reste le cadre pénal des atteintes aux systèmes informatiques. Son examen a eu lieu du 28 au 30 mai 2024 à Yaoundé, avec le Conseil de l’Europe, dans le cadre du projet GLACY-e. L’Agence nationale des technologies de l’information et de la communication (ANTIC) a traité 32 500 réquisitions judiciaires en 2025, en hausse de 30 % sur 2024, selon Digital Business Africa : l’hameçonnage et l’usurpation de comptes sont une réalité, et une équipe qui utilise l’IA doit aussi protéger ses accès.',
                'Aucune loi camerounaise propre à l’IA n’est retenue dans les sources lues. La Stratégie nationale de 2025 annonce un cadre juridique et éthique, mais son contenu n’est pas encore applicable. En attendant, ce sont la loi de 2024 et vos engagements envers vos clients qui comptent. Richard n’est pas juriste : la formation donne des réflexes concrets, et un avocat ou le responsable conformité de l’entreprise valide la politique écrite.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels documents peut-on confier à un assistant d’IA dans une entreprise camerounaise ?',
            'legende' => 'Grille de départ travaillée avec l’équipe pendant la formation, à adapter avec le juriste ou le responsable conformité. Elle ne remplace pas un avis juridique.',
            'entetes' => ['Type de document', 'Exemple au Cameroun', 'Règle proposée'],
            'lignes'  => [
                ['Texte public ou sans nom', 'Plaquette commerciale, annonce, modèle de courrier', 'Peut être soumis à l’assistant, relu avant diffusion'],
                ['Données internes sans personne identifiable', 'Totaux mensuels, liste de produits, procédure du service', 'Compte professionnel de l’entreprise, jamais le compte personnel'],
                ['Données personnelles', 'Fichier de clients avec numéros de téléphone ou de mobile money, dossiers d’élèves ou de patients', 'Remplacer les noms et numéros par des codes ; aucun envoi tel quel à un outil hébergé à l’étranger'],
                ['Secrets de l’entreprise', 'Offres de soumission, contrats, comptes non publiés', 'Ne sortent pas de l’entreprise sans décision écrite de la direction'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format retenir pour une équipe camerounaise : atelier, deux jours ou accompagnement ?',
            'legende' => 'Les formats se combinent. Tous se donnent à distance, au même fuseau que Cotonou (UTC+1), en français ou en anglais.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction ou une équipe qui veut voir l’IA sur ses documents avant d’investir'],
                ['Formation complète', '2 jours en 4 demi-journées', '10 personnes au plus, par métier', 'Un usage déjà commencé dans le désordre, ou une tâche répétitive volumineuse'],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties entre Douala, Yaoundé et d’autres villes, qui ne peuvent pas se libérer deux jours de suite'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Ancrer les habitudes et étendre l’usage à de nouvelles tâches'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment s’organise une formation à distance entre Cotonou et le Cameroun ?',
            'paragraphes' => [
                'Le Cameroun et le Bénin sont tous deux en UTC+1, d’après la base de fuseaux de l’IANA : les séances se calent sur les horaires de bureau de Douala et de Yaoundé sans compensation. Chaque participant a besoin d’un ordinateur, d’un navigateur à jour et d’une connexion suffisante pour la visioconférence. Les documents d’exercice sont envoyés à l’avance pour que la séance ne dépende pas d’un téléchargement lent.',
                'La langue se décide avec l’entreprise. Un groupe peut se faire en français, en anglais, ou en deux groupes parallèles quand l’équipe est mixte : les consignes écrites, les exemples et les supports suivent alors la langue du groupe. Richard travaille en français et en anglais (fiche de faits). Les supports peuvent être remis dans l’une ou l’autre langue, ou dans les deux pour les structures bilingues.',
                'Les coupures font partie du plan. Une solution de repli est prévue : exercices de relecture qui ne demandent pas de connexion, séance reprise le lendemain si une zone est touchée, consignes préparées hors ligne puis collées en une fois. Avec un débit fixe médian de 11,01 Mbit/s selon DataReportal, une équipe de bureau suit sans difficulté ; un site isolé peut demander de déplacer l’exercice sur un autre créneau.',
                'Le règlement se précise au devis, établi en FCFA. Les modes de paiement indiqués sur la fiche de Richard sont le Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces. Un paiement par Orange Money ou MTN MoMo depuis le Cameroun n’est pas garanti d’avance : le mode de règlement est convenu par écrit avant la signature.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel programme pour quel métier au Cameroun, de Douala à Garoua ?',
            'items' => [
                ['secteur' => 'Commerce et logistique à Douala', 'probleme' => 'Douala compte 3 816 500 habitants en projection 2025 selon le BUCREP, et ses entreprises traitent des commandes, des factures et des échanges avec des fournisseurs en deux langues.', 'solution' => 'Tâche : transformer des commandes reçues par WhatsApp en tableau et rédiger les réponses aux clients. Outil : ChatGPT ou Claude. Résultat attendu : un tableau de commandes relu ligne à ligne, des réponses dans le ton de la maison, en français ou en anglais.'],
                ['secteur' => 'Administration, ONG et projets à Yaoundé', 'probleme' => 'Yaoundé, capitale, compte 3 762 900 habitants en projection 2025 ; les services y produisent des comptes rendus, des notes de synthèse et des rapports pour des bailleurs.', 'solution' => 'Tâche : résumer un rapport de quarante pages en citant chaque page. Outil : Claude ou NotebookLM sur des documents sans données nominatives. Résultat attendu : une note vérifiée et un tableau d’indicateurs dont chaque chiffre est retrouvé dans la source.'],
                ['secteur' => 'Commerce et marchés à Bafoussam', 'probleme' => 'Bafoussam, chef-lieu de la région de l’Ouest, est connue pour ses marchés ; les commerçants y gèrent clients, stocks et relances sur leur téléphone.', 'solution' => 'Tâche : préparer fiches produits, messages de relance et réponses aux clients. Outil : Gemini ou ChatGPT sur téléphone, avec relecture sur ordinateur. Résultat attendu : des modèles de messages réutilisables et un catalogue propre.'],
                ['secteur' => 'Filière coton et agro-industrie à Garoua', 'probleme' => 'Garoua, capitale de la région du Nord, abrite le siège de la Sodecoton, principale entreprise cotonnière du pays ; les équipes y rédigent des rapports de campagne et des procédures.', 'solution' => 'Tâche : structurer des relevés de campagne en tableau et résumer des procédures. Outil : un tableur avec l’assistant, et recalcul à la main de deux totaux. Résultat attendu : un rapport de campagne vérifié et une procédure mise à jour.'],
                ['secteur' => 'Établissements bilingues à Bamenda et à Buea', 'probleme' => 'Écoles, centres de formation et cliniques produisent des supports, des convocations et des courriers dans deux langues, et manipulent des données d’élèves ou de patients.', 'solution' => 'Tâche : rédiger et traduire des supports et des courriers. Outil : Claude ou ChatGPT, avec relecture par un locuteur de la langue cible. Résultat attendu : des documents bilingues relus, sans aucun dossier identifiable soumis à l’assistant.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer une formation IA au Cameroun, ou la budgéter ?',
            'paragraphes' => [
                'Aucun dispositif public de prise en charge d’une formation à l’IA pour une entreprise privée n’est confirmé dans les sources lues, et aucune prise en charge n’est promise ici. Le Fonds national de l’emploi (FNE), réorganisé par un décret signé le 28 août 2023, a pour mission principale, selon Ecomatin, la promotion de l’emploi des jeunes, et il dépend du ministère de l’Emploi et de la Formation professionnelle pour la technique et du ministère des Finances pour les finances. Sa mission ne couvre pas, dans cet article, la formation des salariés d’une PME.',
                'Un fonds national de financement de la formation professionnelle a été proposé en décembre 2024 par le ministre de l’Emploi et de la Formation professionnelle, d’après Ecomatin. À la date de cet article, il n’était pas créé, et le budget 2025 du ministère était de 33,1 milliards de FCFA. Avant d’y compter, il faut vérifier auprès du ministère que ce fonds existe, ce qu’il prend en charge et quelles conditions il fixe.',
                'La démarche prudente consiste à budgéter la formation sur les ressources propres de l’entreprise, en FCFA, et à demander à votre direction financière, à votre organisme professionnel ou au ministère si un cofinancement existe. Un devis détaillé (objectifs, durée, participants, livrables), l’attestation nominative remise en fin de session et les feuilles de présence servent de pièces si un financeur en demande. Richard n’affiche ni agrément ni certification d’un organisme public.',
                'Un budget se construit sur trois lignes : la formation, les abonnements aux assistants retenus après la session, et le temps des participants. Les abonnements restent au nom de l’entreprise. Le temps de la tâche cible est mesuré avant et après, pour que la décision d’étendre la démarche repose sur un constat de l’équipe et non sur une promesse.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA pour une équipe au Cameroun ?',
            'intro'      => 'Le prix est fixé sur devis, en FCFA, après un échange de cadrage, et le devis détaille chaque poste. Aucun montant n’est annoncé à l’avance sur cette page.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée à distance', 'Exercices sur vos documents', 'Règles de données de la loi de 2024']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Bibliothèque de consignes et modes opératoires', 'Évaluation sur la tâche cible et attestation']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Bilan écrit']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le nombre de langues : un groupe francophone et un groupe anglophone comptent deux jeux de supports.',
                'La durée et le format retenus.',
                'La préparation sur vos documents, et leur anonymisation avant la session.',
                'La distance, qui évite les frais de déplacement entre Douala, Yaoundé, Bafoussam et Garoua.',
                'L’accompagnement après la session.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent chez les équipes camerounaises qui démarrent l’IA ?',
            'intro' => 'Ces écarts se préviennent dès la session ; ils se mesurent un mois plus tard.',
            'items' => [
                ['titre' => 'Coller un fichier de clients tel quel', 'texte' => 'Un fichier de numéros de mobile money ou de téléphones envoyé à un outil hébergé à l’étranger relève du transfert encadré par la loi de 2024. On remplace d’abord les identités par des codes.'],
                ['titre' => 'Former une seule langue', 'texte' => 'Une équipe mixte laisse sans méthode ses collègues anglophones ou francophones. Les consignes et les modèles de courrier sont tenus dans les deux langues.'],
                ['titre' => 'Utiliser un compte personnel pour le travail', 'texte' => 'Le compte part avec le salarié. L’entreprise ouvre un compte d’équipe et désigne un administrateur.'],
                ['titre' => 'Croire une référence parce qu’elle est précise', 'texte' => 'Un assistant peut citer un article de loi ou un chiffre qui n’existent pas. Toute référence se retrouve dans la source officielle avant d’être reprise.'],
                ['titre' => 'Compter sur une aide publique non confirmée', 'texte' => 'Le fonds national de formation évoqué en 2024 n’était qu’une proposition. On budgète sur fonds propres, et un financement éventuel est une bonne surprise.'],
                ['titre' => 'Se fier à une connexion parfaite', 'texte' => 'Les coupures existent. Les documents sont préparés à l’avance et les gestes de vérification s’exercent aussi hors ligne.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes camerounaises à l’IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Cameroun, qu’il accompagne à distance depuis Cotonou. Son portfolio compte KossKoss Select, un concept-store cosmétique camerounais, pour lequel il a réalisé une boutique lancée avec un diagnostic beauté en cinq étapes, quatorze routines de soin et le paiement par Orange Money et MTN MoMo. Les autres projets figurent sur la page des <a href="/realisations/">réalisations</a>.',
                'Il compte ' . $ans . ' ans d’expérience, une formation à ' . fait('formation')['nom'] . ' en ' . fait('formation')['annee'] . ', et déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l’IA, à l’automatisation et aux ERP. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et il est co-fondateur d’<a href="https://audyxa.com">Audyxa</a>. Il n’est certifié par aucun éditeur d’IA et ne se présente comme partenaire d’aucun.',
                'Sa façon de former : des exercices sur vos documents, une évaluation sur une tâche réelle, des supports qui restent à l’entreprise, une réponse sous 24 heures et aucun gain chiffré promis. Pour le fonctionnement général, voir la <a href="/formations/ia-en-entreprise">fiche IA en entreprise</a> ; pour les dirigeants, <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a> ; pour rédiger des consignes plus solides, <a href="/formations/prompt-engineering">prompt engineering</a> ; pour des assistants qui agissent, <a href="/formations/agents-ia-assistants">agents IA et assistants</a> ; pour relier vos outils, <a href="/formations/n8n">n8n</a>. Son parcours est sur <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe camerounaise à l’IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, leur langue de travail, les tâches qui leur prennent le plus de temps et le format souhaité : vous recevez une réponse sous 24 heures, puis un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA au Cameroun ?", 'r' => "Ces trois titres décrivent des rôles voisins et aucun n’est réglementé. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek, NotebookLM, Perplexity ou Mistral sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant au Cameroun : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA au Cameroun ?", 'r' => "Commencez par une tâche répétitive et mesurable, par exemple la rédaction de courriers, le résumé de comptes rendus ou le classement de documents, et par la règle sur les données qui peuvent quitter l’entreprise. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise au Cameroun, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => 'Qui peut former mes équipes à l’IA au Cameroun ?', 'r' => 'Des écoles, des centres de formation et des formateurs indépendants. Richard SALANON forme à distance, depuis Cotonou, en français ou en anglais, sur vos documents, avec la loi camerounaise de 2024 sur les données intégrée au programme.'],
        ['q' => 'La formation se donne-t-elle en anglais pour les équipes anglophones ?', 'r' => 'Oui. Le français et l’anglais ont le même statut dans la Constitution, et Richard travaille dans les deux langues. Un groupe peut être anglophone, francophone ou mixte, avec des supports dans la langue du groupe.'],
        ['q' => 'La loi sur les données personnelles s’applique-t-elle déjà ?', 'r' => 'Oui. La loi n° 2024/017 du 23 décembre 2024 est entrée en vigueur le 23 juin 2026. Elle exige un consentement explicite et encadre le transfert de données vers l’étranger, ce qui concerne les assistants d’IA hébergés hors du pays.'],
        ['q' => 'Quelle autorité contrôle la protection des données au Cameroun ?', 'r' => 'L’Autorité de protection des données à caractère personnel, organisme public indépendant selon la loi de 2024. Sa mise en place complète et sa procédure de dépôt se confirment auprès d’elle avant un traitement de masse.'],
        ['q' => 'Peut-on envoyer des données de clients à ChatGPT ou à Claude ?', 'r' => 'Pas telles quelles. Des données personnelles envoyées à un outil hébergé à l’étranger relèvent du transfert encadré par la loi de 2024. On remplace les identités par des codes, ou on garde le document dans l’entreprise.'],
        ['q' => 'La formation est-elle finançable par le FNE ?', 'r' => 'Rien ne le confirme. Le FNE a pour mission principale la promotion de l’emploi des jeunes, selon Ecomatin. Aucune prise en charge n’est promise : budgétisez sur fonds propres et interrogez le ministère de l’Emploi et de la Formation professionnelle.'],
        ['q' => 'Existe-t-il une stratégie nationale sur l’IA au Cameroun ?', 'r' => 'Oui, la Stratégie nationale de l’intelligence artificielle, adoptée le 8 juillet 2025 à Yaoundé sous l’impulsion du MINPOSTEL. Son budget et son calendrier détaillé ne sont pas publiés dans les articles consultés.'],
        ['q' => 'Comment payer un abonnement d’IA sans carte bancaire ?', 'r' => 'MTN MoMo a lancé le 19 décembre 2025 une carte virtuelle Mastercard alimentée depuis le portefeuille MoMo, selon Business in Cameroon. Ses plafonds et frais se vérifient auprès de l’opérateur. Les abonnements ne sont pas nécessaires pour suivre la formation.'],
        ['q' => 'Y a-t-il un décalage horaire avec le Cameroun ?', 'r' => 'Non. Le Cameroun et le Bénin sont en UTC+1, et les séances se tiennent aux horaires de bureau de Douala et de Yaoundé.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, en FCFA. Il dépend du nombre de participants et de groupes, du nombre de langues, de la durée, de la préparation sur vos documents et de l’accompagnement retenu.'],
        ['q' => 'Quelle différence avec une formation d’école ?', 'r' => 'Une école transmet un cursus. Cette formation part de vos documents et de vos tâches, fixe des règles de données et laisse à l’équipe une bibliothèque de consignes. Elle n’est ni un diplôme ni une certification d’éditeur.'],
    ],

    'sources' => [
        ['titre' => 'DataReportal, Digital 2026 : Cameroon', 'url' => 'https://datareportal.com/reports/digital-2026-cameroon', 'date' => '2026-10-25'],
        ['titre' => 'Droit, médias et finance : la loi sur les données personnelles entre en vigueur le 23 juin 2026', 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1297-cameroun-la-loi-sur-la-protection-des-donnees-a-caractere-personnel-entre-en-vigueur-ce-23-juin-2026', 'date' => '2026-10-25'],
        ['titre' => 'Droit, médias et finance : la loi de 2010 sur la cybersécurité et la cybercriminalité, examen de mai 2024', 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/789-cameroun-la-loi-n-2010-012-du-2-decembre-2010-relative-a-la-cybersecurite-et-la-cybercriminalite-objet-dun-examen-approfondi', 'date' => '2026-10-25'],
        ['titre' => 'Digital Business Africa : l’autorité de protection des données créée', 'url' => 'https://www.digitalbusiness.africa/cameroun-lautorite-de-protection-des-donnees-a-caractere-personnel-creee/', 'date' => '2026-10-25'],
        ['titre' => 'Digital Business Africa : chiffres de l’ANTIC pour 2025', 'url' => 'https://www.digitalbusiness.africa/cybersecurite-au-cameroun-en-2025-faux-comptes-piratages-vulnerabilites-200-requisitions-judiciaires-par-jour-les-chiffres-alarmants-de-lantic/', 'date' => '2026-10-25'],
        ['titre' => 'Camer.be : le Cameroun se dote d’une stratégie pour l’IA', 'url' => 'https://www.camer.be/89958/11:1/le-cameroun-se-dote-dune-strategie-pour-lia-enjeux-et-perspectives-dun-tournant-numerique-cameroon.html', 'date' => '2026-10-25'],
        ['titre' => 'Ecomatin : le FNE réorganisé 33 ans après sa création', 'url' => 'https://ecomatin.net/paul-biya-reorganise-le-fonds-national-de-lemploi-33-ans-apres-sa-creation', 'date' => '2026-10-25'],
        ['titre' => 'Ecomatin : vers un fonds national de financement de la formation professionnelle', 'url' => 'https://ecomatin.net/cameroun-vers-la-creation-dun-fonds-national-pour-financer-la-formation-professionnelle', 'date' => '2026-10-25'],
        ['titre' => 'Ecofin Agency : le Cameroun garde la tête du mobile money en Afrique centrale en 2024', 'url' => 'https://www.ecofinagency.com/news/0705-55325-cameroon-retains-lead-in-central-african-mobile-money-in-2024-as-regional-rivals-gain-ground', 'date' => '2026-10-25'],
        ['titre' => 'Business in Cameroon : MTN lance la carte virtuelle MoMo', 'url' => 'https://www.businessincameroon.com/finance/2412-15553-mtn-launches-mastercard-backed-virtual-momo-prepaid-card-in-cameroon', 'date' => '2026-10-25'],
        ['titre' => 'Constitution du Cameroun, Constitute Project (article 1)', 'url' => 'https://www.constituteproject.org/constitution/Cameroon_2008', 'date' => '2026-10-25'],
        ['titre' => 'CityPopulation : villes du Cameroun, données du BUCREP', 'url' => 'https://citypopulation.de/en/cameroon/cities/', 'date' => '2026-10-25'],
        ['titre' => 'Wikipédia : Garoua', 'url' => 'https://fr.wikipedia.org/wiki/Garoua', 'date' => '2026-10-25'],
        ['titre' => 'Wikipédia : Bafoussam', 'url' => 'https://fr.wikipedia.org/wiki/Bafoussam', 'date' => '2026-10-25'],
        ['titre' => 'OpenAI, ChatGPT : tarifs', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Anthropic, tarifs de Claude', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, abonnements Gemini et Google AI (prix affichés pour le Bénin)', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Futura-Sciences : DeepSeek et la collecte de données personnelles', 'url' => 'https://www.futura-sciences.com/tech/actualites/technologie-deepseek-inquietudes-collecte-vos-donnees-personnelles-chine-119245/', 'date' => '2026-10-25'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
