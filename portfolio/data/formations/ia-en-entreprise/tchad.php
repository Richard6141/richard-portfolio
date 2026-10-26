<?php
// ============================================================
// data/formations/ia-en-entreprise/tchad.php · Page « formation IA par pays » : Tchad.
// Faits externes relevés le 25/10/2026 : Banque mondiale, UIT, ARCEP (via EcoMatin),
// Droit Médias Finance et OSIRIS (stratégies IA et données), DLA Piper (loi 007/PR/2015),
// Alwihda Info (loi de finances 2026), Tchadinfos (FONAP), tarifs OpenAI, Anthropic,
// Google et Microsoft, aide NotebookLM, politique de confidentialité de DeepSeek.
// Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formateur IA en entreprise au Tchad : vos équipes utilisent ChatGPT, Claude et Gemini sur leurs propres documents, en français, avec une règle claire sur les données',
    'title'   => 'Formateur IA en entreprise au Tchad | Richard SALANON',
    'meta'    => 'Formation IA en entreprise au Tchad : ChatGPT, Claude et Gemini sur vos documents, règles ANSICE sur les données, séances à distance, devis en FCFA.',
    'en_bref' => 'Au Tchad, une équipe peut se former à l\'IA auprès d\'écoles, de cabinets ou de formateurs indépendants ; Richard SALANON intervient à distance depuis Cotonou, en français, à la même heure qu\'à N\'Djamena, sur les documents de l\'entreprise et avec un devis en FCFA. La formation apprend à rédiger, résumer et structurer des informations avec un assistant, puis à vérifier chaque résultat avant de l\'utiliser. Elle pose aussi les règles à suivre pour les données personnelles, sous le contrôle de l\'ANSICE. Le format, de l\'atelier d\'une demi-journée à l\'accompagnement mensuel, se choisit après un premier échange.',
    'publie'  => '2026-11-16',
    'maj'     => '2026-11-16',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former les équipes à l\'IA au Tchad, et comment choisir ?',
            'paragraphes' => [
                'Au Tchad, une équipe peut se former à l\'IA auprès d\'écoles et d\'universités, de cabinets de conseil ou de formateurs indépendants. Richard SALANON propose une formation à distance, en français, depuis Cotonou, à la même heure qu\'à N\'Djamena : des exercices sur les documents de l\'entreprise, des règles de données posées dès le premier matin et un devis en FCFA.',
                'Un formateur IA d\'entreprise ne prépare pas des étudiants à un diplôme ; il aide des salariés à changer une partie précise de leur semaine. Le critère de choix le plus utile tient donc en une question : à la fin de la session, que saura faire chaque participant tout seul, sur son poste, le lundi suivant ? Une démonstration d\'outil impressionne pendant une heure, puis s\'oublie. Une formation qui travaille sur vos devis, vos bordereaux, vos messages clients et vos rapports laisse des habitudes.',
                'Plusieurs points permettent de comparer les offres sans dénigrer personne. Le programme est-il écrit, demi-journée par demi-journée ? Les exercices utilisent-ils des documents de votre entreprise, anonymisés si nécessaire, ou seulement des exemples génériques ? La session traite-t-elle des données personnelles et de la loi tchadienne, ou ignore-t-elle le sujet ? Le formateur accepte-t-il de dire qu\'une formation plus courte suffit ? Les supports restent-ils chez vous ? Un devis qui répond à ces cinq questions est comparable à un autre.',
                'Un dernier repère concerne les promesses. Aucun formateur sérieux ne peut garantir un gain de temps chiffré avant d\'avoir vu les tâches de l\'équipe : le gain dépend du travail, de la qualité des documents de départ et de la régularité de l\'usage. Richard n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun ; sa valeur tient à la méthode, à l\'expérience du terrain en Afrique francophone et à l\'évaluation finale sur une tâche réelle de chaque participant.',
                'Cette page s\'adresse aux dirigeants et aux responsables d\'équipe de N\'Djamena, de Moundou, d\'Abéché, de Sarh ou d\'ailleurs au Tchad, qui cherchent un formateur IA, une formation IA pour leurs équipes ou un consultant IA, et qui veulent savoir à quoi ressemble concrètement une session, ce qu\'elle exige de l\'entreprise et ce qu\'elle ne peut pas promettre.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en est l\'IA au Tchad : connexion, téléphones et politiques publiques ?',
            'paragraphes' => [
                'Le Tchad a plus de téléphones que d\'internautes, et c\'est la donnée qui commande une formation. Selon l\'<a href="https://ecomatin.net/tchad-le-nombre-dabonnes-a-la-telephonie-mobile-frole-15-millions-arcep">ARCEP, dont EcoMatin relaie l\'observatoire présenté le 1er octobre 2025</a>, le pays comptait 14,8 millions d\'abonnés mobiles en 2024, soit 79,3 % de pénétration, répartis entre Airtel (7,4 millions) et Moov Africa (7,3 millions). Pour la même année, la <a href="https://api.worldbank.org/v2/country/TD/indicator/IT.NET.USER.ZS?format=json&mrv=5">Banque mondiale</a> estime à 12,63 % la part des habitants qui utilisent internet, contre 8,34 % en 2020.',
                'Pour une équipe, cela veut dire qu\'un assistant d\'IA sera souvent utilisé depuis un téléphone ou un ordinateur relié à un partage de connexion, avec des coupures. L\'ARCEP elle-même note la persistance de zones blanches. La formation prévoit donc des documents téléchargés avant la séance, des séances plus courtes, des consignes préparées hors ligne puis collées en une fois, et une solution de repli quand la visioconférence tombe. À l\'échelle du continent, l\'<a href="https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/">Union internationale des télécommunications</a> indique que 36 % de la population africaine utilisait internet en 2025, contre 74 % dans le monde : ceux qui sont connectés ont un avantage, et l\'écart se creuse si les entreprises n\'apprennent pas à s\'en servir.',
                'Côté politiques publiques, les textes sont en cours d\'écriture. Selon <a href="https://www.osiris.sn/tchad-la-strategie-de-gouvernance-des-donnees-validee-celle-de-l-ia-en.html">OSIRIS, qui cite l\'Agence Ecofin dans un article du 12 octobre 2026</a>, le ministère des Télécommunications, de l\'Économie numérique et de la Digitalisation a ouvert le 8 octobre 2026 la prévalidation d\'une stratégie nationale de l\'IA pour 2026-2030, avec l\'appui de la Commission économique des Nations unies pour l\'Afrique. Le document n\'est pas définitivement adopté ; il doit traiter de l\'éthique et des droits des citoyens, dans un cadre adapté aux capacités du pays.',
                'Un second chantier est lancé par le PNUD : d\'après <a href="https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1375-tchad-une-strategie-nationale-en-preparation-pour-la-transformation-digitale-et-lintelligence-artiificielle">Droit Médias Finance</a>, il a publié le 21 août 2026 un appel pour recruter un cabinet chargé d\'élaborer une stratégie nationale de transformation digitale et d\'IA pour 2026-2031. Les deux calendriers ne coïncident pas dans les articles consultés ; une entreprise qui prépare un projet d\'envergure suit donc les annonces du ministère plutôt qu\'une date reprise dans la presse.',
                'Selon OSIRIS, la stratégie de gouvernance des données a reçu une validation technique, après un diagnostic de mai 2026 qui évalue la maturité du pays à 30,27 % selon l\'outil d\'autoévaluation de l\'Union africaine, avec des manques sur le cadre juridique, la coordination, l\'interopérabilité et les compétences. Pour une entreprise, la conclusion est pratique : la règle sur les données personnelles existe déjà (voir plus bas), l\'encadrement spécifique de l\'IA n\'est pas encore fixé, et il vaut mieux former les équipes maintenant à des gestes prudents que d\'attendre un texte.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres retenir pour décider d\'une formation IA au Tchad ?',
            'items' => [
                ['valeur' => '12,63 %', 'libelle' => 'Part de la population tchadienne qui utilisait internet en 2024, contre 8,34 % en 2020', 'source' => 'Banque mondiale, indicateur IT.NET.USER.ZS', 'url' => 'https://api.worldbank.org/v2/country/TD/indicator/IT.NET.USER.ZS?format=json&mrv=5'],
                ['valeur' => '79,3 %', 'libelle' => 'Pénétration de la téléphonie mobile en 2024, soit 14,8 millions d\'abonnés (observatoire présenté le 1er octobre 2025)', 'source' => 'ARCEP, d\'après EcoMatin', 'url' => 'https://ecomatin.net/tchad-le-nombre-dabonnes-a-la-telephonie-mobile-frole-15-millions-arcep'],
                ['valeur' => '30,27 %', 'libelle' => 'Maturité de la gouvernance des données du Tchad mesurée en mai 2026 avec l\'outil d\'autoévaluation de l\'Union africaine', 'source' => 'OSIRIS, d\'après l\'Agence Ecofin (12 octobre 2026)', 'url' => 'https://www.osiris.sn/tchad-la-strategie-de-gouvernance-des-donnees-validee-celle-de-l-ia-en.html'],
                ['valeur' => '35 %', 'libelle' => 'Plafond du nouveau crédit d\'impôt pour les dépenses de formation professionnelle prévu par la loi de finances 2026, conditions d\'application à confirmer', 'source' => 'Alwihda Info', 'url' => 'https://www.alwihdainfo.com/tchad-loi-de-finances-2026-une-reforme-fiscale-numerique-et-economique-de-grande-ampleur-a147103/'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d\'IA une équipe tchadienne peut-elle utiliser, et à quel coût ?',
            'legende' => 'Prix publics relevés le 25 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée. Les prix changent souvent et varient selon les pays : ceux de Google ont été affichés en euros. Ces montants sont ceux des éditeurs et ne font pas partie du prix de la formation.',
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Coût de l\'éditeur', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédiger, reformuler, analyser un tableau, discuter d\'un document ; très répandu, donc facile à partager entre collègues', 'Gratuit ; Go 8 dollars par mois ; Plus 20 dollars par mois ; Business 20 dollars par utilisateur et par mois en facturation annuelle, 25 dollars au mois, à partir de 2 utilisateurs', 'Les réponses courtes passent mieux sur un téléphone ; préparer les consignes hors ligne et les coller en une fois'],
                ['Claude (Anthropic)', 'Lire de longs documents, résumer en citant les passages, rédiger avec un ton soigné en français', 'Gratuit ; Pro 17 dollars par mois en abonnement annuel (200 dollars payés d\'avance) ou 20 dollars au mois ; Team 20 dollars par siège et par mois en annuel, 25 dollars au mois', 'Déposer un fichier demande un envoi complet : le préparer et le compresser avant la séance'],
                ['Gemini (Google)', 'Travailler dans Gmail, Docs et Drive pour les équipes déjà sur Google ; recherche approfondie ; traduction', 'Gratuit ; Google AI Plus 4,69 euros par mois ; Google AI Pro 18,87 euros par mois (prix affichés en euros)', 'Pratique sur téléphone Android, où l\'application est souvent déjà installée'],
                ['Copilot (Microsoft)', 'Rédiger et résumer dans Word, Outlook, Teams et Excel pour les équipes sur Microsoft 365', 'Copilot Chat inclus sans surcoût dans les abonnements Microsoft 365 éligibles ; Microsoft 365 Copilot Business 21 dollars par utilisateur et par mois en annuel, 18 dollars en promotion jusqu\'au 31 décembre 2026 pour les clients éligibles, 25,20 dollars au mois', 'Demande une licence Microsoft 365 déjà payée ; sinon, ne pas l\'acheter pour la formation'],
                ['DeepSeek', 'Répondre à des questions techniques, écrire du code, raisonner pas à pas ; utile pour comparer une réponse avec celle d\'un autre assistant', 'Tarifs non relevés sur la page consultée ; sa politique de confidentialité précise que les données sont traitées et conservées en Chine', 'Réservé à des textes publics ou sans aucune donnée sensible : les saisies peuvent servir à entraîner les modèles'],
                ['NotebookLM (Google)', 'Interroger uniquement les documents que l\'on a déposés, avec renvoi à la source ; idéal pour un dossier, un cahier des charges, un règlement', 'Offre gratuite avec un compte Google : 100 carnets et 50 sources par carnet, selon la page d\'aide consultée ; plans payants avec les offres Google AI', 'Les sources se préparent avant la séance ; une fois chargées, les questions restent légères'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il payer pour commencer, et quel outil garder ensuite ?',
            'paragraphes' => [
                'Non. Les versions gratuites suffisent pour apprendre la méthode, qui consiste à formuler une demande complète, fournir un document, exiger les passages sources et vérifier la réponse. Elles ont des limites d\'usage qui se font sentir sur une séance dense ; c\'est une raison de plus de faire alterner deux assistants pendant les exercices, ce qui montre aussi que la méthode ne dépend pas d\'un éditeur.',
                'Le choix d\'un abonnement se fait après la formation, d\'après ce qui a vraiment servi. Une équipe dont les courriels vivent dans Gmail commence naturellement par Gemini ; une équipe équipée de Microsoft 365 par Copilot Chat, déjà inclus ; une équipe qui lit beaucoup de documents longs par Claude ou NotebookLM. Pour un budget au Tchad, deux points comptent : les prix sont affichés en dollars ou en euros, alors que l\'entreprise raisonne en FCFA, et le paiement exige une carte acceptée à l\'étranger. L\'entreprise vérifie avec sa banque, avant de choisir, qu\'elle peut régler un abonnement en ligne dans une devise étrangère.',
                'Le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> détaille les offres d\'équipe, leurs conditions sur les données et leur coût pour dix personnes. Une règle vaut ici dans tous les cas : un document de l\'entreprise ne se traite pas dans le compte personnel d\'un salarié, que l\'entreprise ne contrôle pas et qui part avec lui s\'il quitte son poste.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données et de conformité suivre au Tchad avant d\'envoyer un document à un outil d\'IA ?',
            'paragraphes' => [
                'Envoyer un document contenant des noms, des téléphones ou des montants à un assistant d\'IA est un traitement de données personnelles au sens de la loi n° 007/PR/2015 du 10 février 2015, précisée par le décret n° 075/PR/2019 du 21 janvier 2019. L\'ANSICE, Agence nationale de sécurité informatique et de certification électronique, veille à son application. La formation apprend donc à décider, document par document, ce qui peut partir, ce qui s\'anonymise et ce qui reste chez l\'entreprise.',
                'Voici ce que précise la fiche tchadienne de <a href="https://www.dlapiperdataprotection.com/?t=law&c=TD">DLA Piper</a>, mise à jour le 19 mars 2026. Tout traitement doit faire l\'objet d\'une déclaration écrite à l\'ANSICE, hors cas d\'autorisation préalable : données génétiques ou biométriques, recherche en santé, infractions et condamnations, interconnexion de fichiers, numéros d\'identification nationaux. Le transfert vers un pays hors CEMAC et CEEAC n\'est permis que si ce pays offre une protection suffisante, et le responsable du traitement informe l\'ANSICE avant tout transfert, sauf exceptions, comme l\'exécution d\'un contrat.',
                'Pour l\'IA, la conséquence est directe : la plupart des assistants sont hébergés hors de la CEMAC et de la CEEAC, et DeepSeek précise dans sa politique de confidentialité que les données sont traitées et conservées en Chine. Coller un fichier de clients dans un assistant est donc un geste à examiner avec l\'ANSICE en tête, pas un réflexe. Les sanctions possibles vont de l\'avertissement à l\'interdiction du traitement, et un juge peut prononcer de 1 à 5 ans de prison et une amende de 1 à 10 millions de FCFA, d\'après la même fiche.',
                'La loi n\'impose pas de délégué à la protection des données, et elle ne prévoit pas de protocole obligatoire de notification des fuites. Cela ne dispense pas l\'entreprise d\'écrire sa propre règle. La formation aide à rédiger une page simple : quels assistants sont autorisés, avec quels comptes, quelles catégories de documents sont interdites, qui valide les envois à l\'extérieur, et à qui signaler une erreur.',
                'Le cadre évolue. Selon <a href="https://www.osiris.sn/le-tchad-reforme-son-organe-national-de-cybersecurite-pour-le-rendre-plus.html">OSIRIS</a>, le Sénat a adopté le 13 mars 2026 la réforme de l\'ANSICE, qui touche la cybersécurité, la protection des données, la sécurité des transactions électroniques et introduit des dispositions sur la régulation des systèmes d\'intelligence artificielle. Les textes d\'application ne sont pas détaillés dans l\'article ; l\'entreprise qui déploie un assistant à grande échelle les vérifie auprès de l\'ANSICE. À la date de consultation, aucune règle spécifique du pays sur l\'usage d\'un assistant par un salarié n\'a été relevée.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment classer ses documents avant de les confier à un assistant ?',
            'intro' => 'La séance du premier matin sert à construire un tri que chaque participant peut appliquer en quelques secondes. Il repose sur trois niveaux, ajustés à chaque entreprise.',
            'items' => [
                ['titre' => 'Niveau 1 : ce qui peut partir tel quel', 'texte' => 'Textes publics, modèles de courrier sans nom, descriptions de produits, procédures générales, brouillons sans donnée. Ils se traitent dans un compte professionnel ou gratuit sans précaution particulière.'],
                ['titre' => 'Niveau 2 : ce qui s\'anonymise d\'abord', 'texte' => 'Courriels de clients, comptes rendus de réunion, extraits de tableur. Les noms, numéros de téléphone, adresses et montants sensibles sont remplacés par des repères (client A, montant X), puis restitués à la main après la réponse.'],
                ['titre' => 'Niveau 3 : ce qui ne sort jamais', 'texte' => 'Données de santé, pièces d\'identité, dossiers du personnel, contrats confidentiels, listes de bénéficiaires d\'une action humanitaire, identifiants et mots de passe. Pour ces documents, l\'assistant ne sert qu\'à préparer un modèle vide.'],
                ['titre' => 'Une personne responsable', 'texte' => 'Un nom est inscrit pour trancher les cas douteux et tenir le registre des assistants autorisés. Sans ce nom, la règle écrite reste lettre morte.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats pour quelles équipes, et comment cela se passe-t-il depuis Cotonou ?',
            'legende' => 'Toutes les formules se donnent à distance, en français, en visioconférence avec partage d\'écran. Elles peuvent se combiner : un atelier pour un service pilote, puis la formation complète, puis l\'accompagnement.',
            'entetes' => ['Format', 'Durée et rythme', 'Groupe', 'Quand le choisir', 'Organisation au Tchad'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Direction ou équipe qui veut voir l\'IA sur ses documents avant de s\'engager', 'Heure de N\'Djamena identique à celle de Cotonou ; un seul écran suffit pour un groupe réuni dans une salle'],
                ['Formation complète', 'Deux jours, découpés en séances de 2 h 30 à 3 h 30', '10 personnes au plus, par métier', 'Usage déjà commencé en désordre, ou tâche volumineuse qui justifie l\'effort', 'Séances plus courtes et documents envoyés la veille pour absorber une coupure de connexion'],
                ['Séances à distance étalées', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties entre N\'Djamena, Moundou, Abéché ou des chantiers', 'Chaque participant a son poste ; un point de reprise est prévu si le réseau tombe'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant trois mois', 'Le groupe déjà formé', 'Ancrer les habitudes, étendre l\'usage à d\'autres tâches, mesurer ce qui sert', 'Rendez-vous fixé chaque mois à la même heure locale, avec compte rendu écrit'],
                ['Session de direction', 'Une demi-journée', 'Dirigeants et cadres', 'Choisir les outils, le budget et les règles avant de former les équipes', 'À planifier avant la formation des équipes ; voir la formation pour dirigeants en bas de page'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que faut-il prévoir côté langue, matériel et connexion ?',
            'paragraphes' => [
                'Le français est la langue de travail de la formation, et c\'est l\'une des deux langues officielles du pays avec l\'arabe. Les assistants écrivent bien en français, mais ils ont tendance à produire un français de rédaction générale ; on leur fournit donc un modèle de courrier de l\'entreprise et le vocabulaire de son secteur. Un texte en arabe produit ou traduit par un assistant doit être relu par un locuteur qui connaît le métier avant tout envoi, car les nuances commerciales ne se devinent pas.',
                'Chaque participant a besoin d\'un ordinateur, avec un navigateur à jour, un traitement de texte et un tableur. Un téléphone convient pour certains exercices, par exemple transformer des messages WhatsApp en tableau, mais pas pour comparer deux versions d\'un contrat. Une salle commune avec un écran et une connexion partagée fonctionne si les documents ont été téléchargés avant la séance.',
                'Pour la connexion, la règle est de ne rien laisser dépendre d\'un seul moment. Les documents d\'exercice sont envoyés la veille. Les consignes sont écrites hors ligne, puis collées. Chaque séance dure au plus trois heures et demie, avec une pause. Si la visioconférence s\'interrompt, la séance reprend après un message écrit sur WhatsApp qui rappelle l\'exercice en cours. Un participant dont la ligne est trop instable travaille depuis un autre site de l\'entreprise ou à un autre créneau.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel programme type pour quel métier au Tchad ?',
            'items' => [
                ['secteur' => 'Commerce et distribution à N\'Djamena', 'probleme' => 'Un grossiste reçoit ses commandes par messages WhatsApp en vrac, répond aux mêmes questions de prix toute la journée et note les paiements par Airtel Money ou Moov Money sur un cahier.', 'solution' => 'Tâche : transformer vingt messages en tableau de commandes et rédiger les réponses types. Outil : ChatGPT ou Gemini sur un jeu de messages anonymisés. Résultat attendu : un tableau que le vendeur vérifie ligne par ligne contre les messages, et une bibliothèque de réponses relues avant envoi.'],
                ['secteur' => 'Sous-traitance pétrolière', 'probleme' => 'Une PME fournisseur de sites pétroliers prépare des offres, des bordereaux et des attestations à destination de donneurs d\'ordre exigeants, souvent en français et en anglais.', 'solution' => 'Tâche : résumer un appel d\'offres, extraire les exigences et rédiger une offre dans le bon registre. Outil : Claude pour lire le dossier avec renvoi aux pages, NotebookLM pour l\'interroger. Résultat attendu : une liste d\'exigences contrôlée sur le document d\'origine et une offre relue par le responsable.'],
                ['secteur' => 'Élevage, négoce de bétail et gomme arabique', 'probleme' => 'Un négociant suit ses achats, ses convois et ses acomptes sur des notes dispersées, et prépare des pièces pour des acheteurs qui demandent des documents réguliers.', 'solution' => 'Tâche : transformer des notes manuscrites photographiées en tableau d\'achats par fournisseur, puis rédiger un courrier à l\'acheteur. Outil : un assistant qui lit les images, avec recalcul des totaux à la main. Résultat attendu : un tableau exact et un courrier propre dans le ton de l\'entreprise.'],
                ['secteur' => 'Coton et groupements de producteurs', 'probleme' => 'Un groupement relève des pesées, des avances et des livraisons dans plusieurs villages et doit rendre des comptes à ses membres et à ses partenaires.', 'solution' => 'Tâche : consolider des relevés en un état par village et rédiger un bilan de campagne lisible. Outil : tableur et assistant, avec formules vérifiées. Résultat attendu : un bilan dont chaque chiffre est retrouvé dans un relevé source.'],
                ['secteur' => 'Cabinets comptables et services financiers', 'probleme' => 'Les équipes tiennent leurs comptes selon le SYSCOHADA et doivent suivre la facturation électronique et e-Tax, pendant que les clients écrivent à toute heure.', 'solution' => 'Tâche : résumer un texte fiscal, préparer des courriers de relance et une liste de pièces à demander. Outil : Claude ou NotebookLM chargé du texte officiel. Résultat attendu : une note dont chaque règle renvoie à son article, validée par le professionnel.'],
                ['secteur' => 'ONG, projets de développement et organisations humanitaires', 'probleme' => 'Les rapports de mission, les comptes rendus et les demandes de financement prennent des jours, et les fiches de bénéficiaires contiennent des données sensibles.', 'solution' => 'Tâche : rédiger un rapport à partir de notes anonymisées et produire un tableau d\'indicateurs. Outil : Claude, avec renvoi aux pages. Résultat attendu : un rapport vérifiable ; aucune donnée nominative de bénéficiaire n\'entre dans un assistant en ligne.'],
                ['secteur' => 'Administration, écoles et centres de santé', 'probleme' => 'Les agents rédigent des notes et des courriers normés, et manipulent des données d\'élèves, d\'usagers ou de patients.', 'solution' => 'Tâche : préparer un premier jet de note ou de supports de cours à partir d\'un modèle validé. Outil : un assistant sur documents sans donnée personnelle. Résultat attendu : un texte relu et signé par la personne responsable ; aucun dossier médical ni note d\'élève identifiable.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment financer une formation IA au Tchad, ou la budgétiser ?',
            'paragraphes' => [
                'Une prise en charge n\'est jamais garantie, et il faut le dire avant de signer. Le dispositif le plus récent est un crédit d\'impôt : selon <a href="https://www.alwihdainfo.com/tchad-loi-de-finances-2026-une-reforme-fiscale-numerique-et-economique-de-grande-ampleur-a147103/">Alwihda Info</a>, la loi de finances 2026, adoptée le 26 décembre 2025, crée un crédit d\'impôt pour la formation professionnelle pouvant atteindre 35 % des dépenses engagées. L\'article ne précise pas les conditions d\'éligibilité : dépenses retenues, prestataires acceptés et justificatifs sont à confirmer auprès de la direction générale des impôts.',
                'Le Fonds national d\'appui à la formation professionnelle, le FONAP, a validé le 13 octobre 2025 à N\'Djamena le programme ProFIEJ, selon <a href="https://tchadinfos.com/2025/10/13/tchad-connexion-2030-le-fonap-valide-un-programme-de-formation-en-entrepreneuriat-agropastoral-et-energie-solaire-en-faveur-des-jeunes/">Tchadinfos</a>. Ce projet de 2026 à 2030 vise 59 000 jeunes de 14 à 35 ans et dépasse 46,7 milliards de FCFA ; l\'article ne désigne pas les entreprises comme bénéficiaires. Une entreprise qui espère un appui pour former ses salariés écrit donc directement au fonds pour savoir si elle peut y prétendre.',
                'Richard n\'affiche aucun agrément d\'un fonds de formation ni aucune certification qualité. Pour constituer un dossier de crédit d\'impôt ou de demande de prise en charge, il remet un programme daté, un devis détaillé, une facture et une attestation nominative de fin de formation pour chaque participant. Prévoyez le budget comme si aucune aide ne s\'appliquait, et considérez toute aide obtenue comme un gain.',
                'Pour budgétiser sans attendre, trois lignes suffisent : le prix de la formation, sur devis ; les abonnements éventuels aux assistants, après la formation, au nom de l\'entreprise ; et le temps des salariés, car chaque demi-journée de formation est une demi-journée qui ne produit pas autre chose. Une direction qui a déjà fixé la valeur d\'une heure de travail de l\'équipe peut ainsi comparer le coût d\'une session au temps libéré par la tâche cible.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA en entreprise au Tchad ?',
            'intro'      => 'Aucun prix n\'est affiché : chaque devis est établi après un premier échange, sur devis, en FCFA. Il se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon ce qui est le plus simple pour votre entreprise. Les abonnements aux assistants restent à part.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée à distance', 'Deux tâches travaillées sur vos documents', 'Règles de données de base', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Deux jours en séances à distance', 'Exercices construits sur vos documents', 'Bibliothèque de consignes et mode opératoire par tâche', 'Évaluation sur la tâche cible et attestation nominative']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Nouvelles tâches et corrections', 'Bilan écrit']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes : cinq personnes d\'un même service ou trois services différents n\'appellent pas le même travail.',
                'La durée et le nombre de séances, de l\'atelier d\'une demi-journée à l\'accompagnement sur trois mois.',
                'La distance : toutes les sessions se donnent à distance, sans frais de déplacement ; c\'est le mode retenu pour le Tchad.',
                'La préparation sur vos documents : collecte, anonymisation, choix des tâches, et nombre d\'allers-retours avant la séance.',
                'La connexion de l\'équipe : une séance découpée en créneaux plus courts demande plus de séances que la même formation donnée d\'un seul tenant.',
                'Les supports : en français, parfois avec des exemples bilingues, et le temps de relecture d\'un texte en arabe par vos soins.',
                'L\'accompagnement après la session et le canal direct pour les questions d\'application.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs fréquentes guettent les équipes tchadiennes qui démarrent avec l\'IA ?',
            'intro' => 'Une formation se juge un mois plus tard, sur ce que l\'équipe fait encore. Ces écarts reviennent souvent dans les équipes qui démarrent ; chacun se prévient dès la session.',
            'items' => [
                ['titre' => 'Envoyer un fichier de clients à un assistant sans y penser', 'texte' => 'Sous la pression d\'un délai, on colle une liste complète. Or la loi de 2015 encadre le traitement des données personnelles et le transfert hors CEMAC et CEEAC. Le tri en trois niveaux s\'applique avant le premier envoi, et un nom est désigné pour trancher.'],
                ['titre' => 'Utiliser un assistant gratuit hébergé hors du pays comme coffre-fort', 'texte' => 'Une conversation n\'est pas un archivage. Les documents de l\'entreprise restent dans ses propres dossiers ; l\'assistant n\'en reçoit qu\'une copie anonymisée, le temps d\'une tâche.'],
                ['titre' => 'Faire confiance à un chiffre précis', 'texte' => 'Un assistant peut citer un taux, un article de loi ou une date avec aplomb et se tromper, par exemple sur la TVA ou la facturation électronique. Toute référence fiscale se retrouve dans le texte officiel ou chez le comptable avant d\'être reprise.'],
                ['titre' => 'Traduire en arabe sans relecture', 'texte' => 'Un courrier commercial ou administratif traduit par un assistant garde souvent des tournures qu\'un locuteur du secteur n\'emploierait pas. La relecture par une personne qui connaît le métier est une étape, pas une option.'],
                ['titre' => 'Dépendre d\'une seule connexion', 'texte' => 'Une formation conçue pour un débit stable déçoit quand le réseau tombe. Documents téléchargés d\'avance, séances courtes et consignes écrites hors ligne réduisent l\'impact d\'une coupure.'],
                ['titre' => 'Payer plusieurs abonnements sans règle commune', 'texte' => 'Les tarifs sont en devises étrangères ; trois abonnements pour trois personnes pèsent vite. L\'entreprise retient un outil principal après la formation, d\'après les mesures faites pendant la session.'],
                ['titre' => 'Attendre la loi sur l\'IA pour agir', 'texte' => 'La stratégie nationale n\'est pas adoptée à la date de consultation. Les règles de données, elles, existent déjà. Une règle interne simple protège dès maintenant et se corrige quand les textes évolueront.'],
                ['titre' => 'Former tout le monde sur tout', 'texte' => 'Une session qui prétend changer tous les usages n\'en change aucun. Deux ou trois tâches par groupe, mesurées avant et après, donnent une base solide pour étendre ensuite.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes tchadiennes à l\'IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises au Tchad. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP, et être intervenu dans ' . count((array) fait('pays_travailles')) . ' pays, dont plusieurs d\'Afrique centrale et de l\'Ouest. Il a conçu <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Il forme comme il travaille : sur les outils que l\'équipe utilisera réellement, avec des documents de l\'entreprise, une règle de données écrite dès le départ et une évaluation individuelle sur une tâche réelle. Il ne promet aucun gain chiffré, ne se présente ni comme certifié ni comme partenaire d\'un éditeur d\'IA, et peut dire en cadrage qu\'un atelier court suffit. Son travail autour de WhatsApp, des automatisations et des intégrations d\'IA lui permet aussi de prolonger la formation par un projet quand l\'équipe veut aller au-delà de l\'usage quotidien.',
                'Les projets livrés sont présentés sur la page <a href="/realisations/">réalisations</a>. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>. Pour les dirigeants qui veulent décider avant de former, la formation <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a> traite budget, outils et règles ; pour apprendre à écrire de bonnes consignes, voir <a href="/formations/prompt-engineering">prompt engineering</a> ; pour aller vers des assistants qui agissent dans vos logiciels, les formations <a href="/formations/agents-ia-assistants">agents IA et assistants</a> et <a href="/formations/n8n">n8n</a> prolongent cette base.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe tchadienne à l\'IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps, les outils déjà en place et la qualité de votre connexion : Richard répond sous 24 heures, puis propose un format et un devis en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA au Tchad ?", 'r' => "Les trois appellations se côtoient sur le marché, et aucune ne fait l’objet d’un diplôme ou d’un agrément officiel. Un formateur IA apprend aux équipes à se servir d’outils comme ChatGPT, Claude, Gemini, Copilot, DeepSeek ou NotebookLM sur leurs propres documents ; un consultant IA aide la direction à choisir les usages, les outils et les règles de données ; un expert ou spécialiste de l’IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant au Tchad : il forme les équipes et les accompagne dans le choix des outils, sans être certifié par un éditeur. Ce qui compte pour une entreprise, c’est ce que l’équipe sait faire seule après la session."],
        ['q' => "Comment digitaliser une entreprise avec l’IA au Tchad ?", 'r' => "Choisissez d’abord un usage précis et un responsable, avant tout abonnement : une tâche qui revient chaque semaine, un jeu de documents d’exercice et une règle claire sur les données confidentielles. Ensuite, formez l’équipe qui fera cette tâche sur ses propres documents, puis étendez à d’autres usages. Pour une entreprise au Tchad, la digitalisation par l’IA avance par petites étapes, avec un devis fixé après un échange de cadrage et sans promesse de gain chiffré."],
        ['q' => 'Qui peut former mon équipe à l\'IA à N\'Djamena ?', 'r' => 'Des écoles, des cabinets ou des formateurs indépendants. Richard SALANON intervient à distance, depuis Cotonou, en français, à la même heure qu\'à N\'Djamena, avec des exercices sur vos documents et un devis en FCFA. Comparez les programmes, les documents utilisés et la place faite aux données personnelles.'],
        ['q' => 'La formation se fait-elle à distance, sans déplacement ?', 'r' => 'Oui, entièrement à distance, en visioconférence avec partage d\'écran. N\'Djamena et Cotonou sont à la même heure toute l\'année. Les documents sont envoyés la veille et les séances sont assez courtes pour tenir compte d\'une coupure de connexion.'],
        ['q' => 'Que faire si la connexion coupe pendant la séance ?', 'r' => 'La séance reprend après un message écrit qui rappelle l\'exercice en cours. Les documents sont téléchargés d\'avance, les consignes sont préparées hors ligne et collées en une fois, et le participant dont la ligne est instable peut travailler depuis un autre site ou à un autre créneau.'],
        ['q' => 'Faut-il déclarer l\'usage d\'un assistant d\'IA à l\'ANSICE ?', 'r' => 'La loi n° 007/PR/2015 impose une déclaration écrite à l\'ANSICE pour tout traitement de données personnelles, et une autorisation pour certaines catégories. Envoyer des données de clients à un assistant en est un. Aucune règle propre à l\'IA n\'a été relevée à la date de consultation ; confirmez les formalités auprès de l\'ANSICE.'],
        ['q' => 'Peut-on envoyer des données tchadiennes à ChatGPT ou à Claude ?', 'r' => 'Cela dépend des données. Les textes publics ou anonymisés ne posent pas de difficulté particulière. Les données personnelles relèvent de la loi de 2015 : le transfert hors CEMAC et CEEAC suppose une protection suffisante et l\'information préalable de l\'ANSICE, sauf exceptions. La formation apprend à trier avant d\'envoyer.'],
        ['q' => 'DeepSeek est-il adapté au travail de mon équipe ?', 'r' => 'Pour des textes publics, des questions techniques ou une comparaison de réponses, oui. Pour des documents de l\'entreprise, il faut être prudent : sa politique de confidentialité précise que les données sont traitées et conservées en Chine et que les saisies peuvent servir à entraîner les modèles. La formation le range dans le niveau le plus prudent.'],
        ['q' => 'La formation peut-elle se donner en arabe ?', 'r' => 'Le français est la langue de la formation. Les assistants savent produire de l\'arabe, mais un texte destiné à un client ou à l\'administration doit être relu par un locuteur qui connaît le métier. La formation montre comment demander une version bilingue et comment la faire contrôler.'],
        ['q' => 'Existe-t-il une aide pour financer la formation au Tchad ?', 'r' => 'La loi de finances 2026 crée un crédit d\'impôt pour la formation professionnelle pouvant atteindre 35 % des dépenses engagées ; ses conditions sont à confirmer auprès de la direction générale des impôts. Le FONAP finance un programme tourné vers les jeunes ; une entreprise lui demande si elle peut y prétendre. Aucune prise en charge n\'est garantie.'],
        ['q' => 'Y a-t-il une stratégie nationale de l\'IA au Tchad ?', 'r' => 'Elle est en préparation. Selon OSIRIS, la prévalidation d\'une stratégie 2026-2030 a commencé le 8 octobre 2026 et le document n\'est pas adopté. Un appel du PNUD du 21 août 2026 vise une stratégie de transformation digitale et d\'IA pour 2026-2031. Suivez les annonces du ministère chargé de l\'économie numérique.'],
        ['q' => 'Combien coûte une formation IA en entreprise ?', 'r' => 'Le prix est fixé sur devis, en FCFA, après un premier échange. Il dépend du nombre de participants, de la durée, du nombre de séances, de la préparation sur vos documents et de l\'accompagnement après la session. Les abonnements aux assistants sont à part et affichés en dollars ou en euros.'],
        ['q' => 'Faut-il acheter des abonnements avant de commencer ?', 'r' => 'Non. Les versions gratuites suffisent pour apprendre la méthode. Les abonnements se choisissent après la formation, d\'après les outils qui ont servi. Vérifiez avec votre banque que votre carte accepte un paiement en ligne en dollars ou en euros.'],
        ['q' => 'Reçoit-on une attestation de formation ?', 'r' => 'Oui, une attestation nominative de fin de formation avec le programme, les supports et les exercices corrigés. Ce n\'est ni un diplôme ni une certification d\'éditeur. Elle peut accompagner un dossier de demande d\'aide, dont l\'acceptation reste à la décision de l\'organisme concerné.'],
    ],

    'sources' => [
        ['titre' => 'Banque mondiale, part de la population utilisant internet au Tchad (série 2020-2024)', 'url' => 'https://api.worldbank.org/v2/country/TD/indicator/IT.NET.USER.ZS?format=json&mrv=5', 'date' => '2026-10-25'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-25'],
        ['titre' => 'EcoMatin, abonnés à la téléphonie mobile au Tchad (observatoire de l\'ARCEP)', 'url' => 'https://ecomatin.net/tchad-le-nombre-dabonnes-a-la-telephonie-mobile-frole-15-millions-arcep', 'date' => '2026-10-25'],
        ['titre' => 'OSIRIS, stratégie de gouvernance des données validée, stratégie de l\'IA en préparation (12 octobre 2026)', 'url' => 'https://www.osiris.sn/tchad-la-strategie-de-gouvernance-des-donnees-validee-celle-de-l-ia-en.html', 'date' => '2026-10-25'],
        ['titre' => 'Droit Médias Finance, stratégie nationale de transformation digitale et d\'IA en préparation', 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1375-tchad-une-strategie-nationale-en-preparation-pour-la-transformation-digitale-et-lintelligence-artiificielle', 'date' => '2026-10-25'],
        ['titre' => 'OSIRIS, réforme de l\'ANSICE adoptée par le Sénat tchadien', 'url' => 'https://www.osiris.sn/le-tchad-reforme-son-organe-national-de-cybersecurite-pour-le-rendre-plus.html', 'date' => '2026-10-25'],
        ['titre' => 'DLA Piper, protection des données au Tchad (mise à jour du 19 mars 2026)', 'url' => 'https://www.dlapiperdataprotection.com/?t=law&c=TD', 'date' => '2026-10-25'],
        ['titre' => 'Alwihda Info, loi de finances 2026 du Tchad', 'url' => 'https://www.alwihdainfo.com/tchad-loi-de-finances-2026-une-reforme-fiscale-numerique-et-economique-de-grande-ampleur-a147103/', 'date' => '2026-10-25'],
        ['titre' => 'Tchadinfos, le FONAP valide le programme ProFIEJ', 'url' => 'https://tchadinfos.com/2025/10/13/tchad-connexion-2030-le-fonap-valide-un-programme-de-formation-en-entrepreneuriat-agropastoral-et-energie-solaire-en-faveur-des-jeunes/', 'date' => '2026-10-25'],
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres Free, Go, Plus et Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Anthropic, tarifs de Claude', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, abonnements Gemini et Google AI', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Aide Google, plans et limites de NotebookLM', 'url' => 'https://support.google.com/notebooklm/answer/16213268', 'date' => '2026-10-25'],
        ['titre' => 'DeepSeek, politique de confidentialité', 'url' => 'https://cdn.deepseek.com/policies/en-US/deepseek-privacy-policy.html', 'date' => '2026-10-25'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
