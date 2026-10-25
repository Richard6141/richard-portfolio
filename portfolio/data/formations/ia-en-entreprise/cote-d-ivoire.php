<?php
// ============================================================
// data/formations/ia-en-entreprise/cote-d-ivoire.php · Page « formation IA par pays » : Côte d'Ivoire.
// Faits externes relevés le 25/10/2026 : FDFP (plan de formation, dates clés), ARTCI, Autorité de
// protection, DGI (FNE), DataReportal, France Diplomatie, presse sur la stratégie nationale de l'IA,
// tarifs d'Anthropic, OpenAI, Google et Microsoft. Aucune certification attribuée à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formateur IA en entreprise en Côte d\'Ivoire : vos équipes d\'Abidjan et de l\'intérieur du pays utilisent ChatGPT, Claude et Gemini sur leurs documents, avec une règle claire sur les données',
    'title'   => 'Formation IA en entreprise Côte d\'Ivoire | Richard SALANON',
    'meta'    => 'Formation IA en entreprise en Côte d\'Ivoire : ChatGPT, Claude et Gemini sur vos documents, règles ARTCI sur les données, formats à distance, devis en FCFA.',
    'en_bref' => 'Pour former une équipe ivoirienne à l\'IA, Richard SALANON, consultant et formateur basé à Cotonou, intervient à distance auprès des entreprises d\'Abidjan, de Bouaké, de Yamoussoukro et de San Pedro, sur leurs propres documents. Les équipes apprennent à rédiger, synthétiser et analyser avec ChatGPT, Claude ou Gemini, et à vérifier chaque résultat. Le cadre de la loi ivoirienne sur les données personnelles est posé avant le premier exercice. Le prix est fixé sur devis, en FCFA.',
    'publie'  => '2026-11-24',
    'maj'     => '2026-11-24',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut former mes équipes à l\'IA en Côte d\'Ivoire, et comment choisir ?',
            'paragraphes' => [
                'Richard SALANON forme les équipes ivoiriennes à l\'IA en entreprise, à distance, depuis Cotonou, sur les documents réels de chaque service. Un formateur IA d\'entreprise n\'enseigne pas l\'informatique : il apprend à des assistants administratifs, des commerciaux, des comptables ou des responsables à confier une tâche précise à un assistant, puis à contrôler ce qu\'il rend.',
                'Le pays ne manque pas d\'offres de formation à l\'IA : écoles, instituts, programmes de développeurs, cursus universitaires. Elles répondent à des besoins différents, souvent longs et orientés vers un diplôme ou un métier technique. Une entreprise qui veut que ses équipes gagnent du temps dès le mois prochain pose une autre question : que saura faire chaque personne, seule, sur son poste, à la fin de la session ?',
                'Quatre critères aident à choisir. Le premier est le terrain : la session se fait-elle sur vos courriers, vos tableaux et vos messages WhatsApp, ou sur des exemples de démonstration ? Le deuxième est la vérification : apprend-on à retrouver chaque chiffre dans sa source avant d\'envoyer ? Le troisième est la règle de données : sait-on, avant le premier exercice, quels documents ne doivent jamais quitter l\'entreprise ? Le quatrième est le suivi : existe-t-il un moyen de poser des questions quand l\'équipe travaille seule, trois semaines plus tard ?',
                'Une démonstration d\'outil impressionne pendant une heure et s\'oublie en une semaine. Une formation qui change le travail part de deux ou trois tâches que chaque participant répète toutes les semaines, les refait avec l\'assistant jusqu\'à obtenir un résultat contrôlable, puis mesure le temps gagné ou perdu. C\'est ce que Richard met en place, sans promettre de gain chiffré à l\'avance : le temps gagné dépend de la tâche et de la régularité de l\'usage.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où en est l\'IA en Côte d\'Ivoire, et que change la stratégie nationale pour une entreprise ?',
            'paragraphes' => [
                'Selon DataReportal (Digital 2026), la Côte d\'Ivoire comptait 13,4 millions d\'internautes fin 2025, soit 40,7 % de la population, et 49,7 millions de connexions mobiles cellulaires, soit 151 % des habitants. L\'âge médian est de 18,3 ans et 54,3 % de la population vit en ville. Autrement dit, beaucoup de salariés ont un téléphone connecté, mais moins ont une connexion fixe fiable sur leur poste : une formation à l\'IA doit prévoir les deux situations.',
                'Sur le plan public, la presse spécialisée a rapporté que la stratégie nationale de l\'intelligence artificielle a été présentée le 13 mars 2025 et remise au Premier ministre en vue de son adoption. Elle repose sur trois piliers : compétences et infrastructures, inclusion régionale et sociale, gouvernance avec un cadre légal et éthique. Elle annonce un comité national pour l\'IA et la gouvernance des données, un hub IA avec un incubateur et un centre de formation, et un label « Safe IA ». Pour une entreprise, d\'après les sources consultées le 25 octobre 2026, ces annonces ne créent pas d\'obligation nouvelle : elles signalent que le cadre éthique et les règles d\'usage vont se préciser, et qu\'il vaut mieux écrire dès maintenant sa propre règle interne.',
                'Un second signal est récent. À Abidjan, la deuxième édition d\'IMPACT IA, du 9 au 11 septembre 2026, s\'est conclue le 11 septembre par la signature du Pacte de l\'Alliance nationale pour l\'intelligence artificielle entre le gouvernement, la CGECI et la CCI-CI. Soixante-dix-sept cas d\'usage y ont été recensés et onze retenus en priorité, dans la santé, l\'agriculture, l\'éducation, l\'administration et le secteur privé. Le message pour un dirigeant est simple : l\'adoption sort de l\'expérimentation, et les équipes qui savent déjà travailler avec un assistant auront de l\'avance.',
                'Le poids d\'Abidjan structure aussi la demande. Selon France Diplomatie, près de 80 % de l\'activité économique du pays relèverait de cette seule ville, alors que les services représentaient 56 % du produit intérieur brut en 2023 : télécommunications, transport, commerce, finance. Ce sont des métiers qui écrivent, lisent et classent beaucoup, donc exactement ceux où un assistant bien utilisé fait gagner du temps.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils d\'IA utiliser en Côte d\'Ivoire, et à quel coût ?',
            'legende' => 'Tarifs publics des éditeurs relevés le 25 octobre 2026, hors taxes, dans la devise affichée par chaque page (dollars américains pour OpenAI, Anthropic et Microsoft). Aucun tarif n\'est affiché en FCFA. Ces montants sont ceux des éditeurs : ils ne font pas partie du prix de la formation.',
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Coût d\'éditeur relevé', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Rédaction, reformulation, analyse de tableurs, traduction français et anglais', 'Gratuit ; Go 8 dollars par mois ; Plus 20 dollars par mois ; Business 20 dollars par utilisateur et par mois en facturation annuelle, 25 en mensuelle, à partir de 2 utilisateurs', 'Préparer les consignes hors ligne, les coller en une fois, télécharger les fichiers à l\'avance'],
                ['Claude (Anthropic)', 'Lecture de documents longs, synthèses avec citations, écrits en français soignés', 'Gratuit ; Pro 17 dollars par mois en abonnement annuel (200 dollars payés d\'avance) ou 20 dollars au mois ; Team 20 dollars par siège et par mois en annuel, 25 au mois, pour 2 à 150 personnes', 'Envoyer un document par message plutôt que de multiplier les échanges courts'],
                ['Gemini (Google)', 'Équipes déjà sur Gmail, Docs et Sheets ; recherche approfondie ; images', 'Gratuit ; Google AI Plus 4,69 euros par mois et Google AI Pro 18,87 euros par mois (prix affichés pour le Bénin) ; offres Gemini Enterprise à partir de 21 dollars par siège et par mois', 'Fonctionne dans le navigateur du téléphone, utile quand le poste fixe est lent'],
                ['Copilot (Microsoft)', 'Équipes sous Microsoft 365 : Word, Excel, Outlook, Teams', 'Copilot Chat inclus sans surcoût dans les forfaits Microsoft 365 admissibles ; Copilot Business 21 dollars par utilisateur et par mois en annuel, 18 dollars en promotion jusqu\'au 31 décembre 2026 pour la première année, 25,20 dollars au mois', 'Dépend de la licence Microsoft 365 de l\'entreprise'],
                ['DeepSeek', 'Modèle d\'un éditeur chinois, utilisé surtout par des développeurs via son interface de programmation', 'Interface de programmation facturée à l\'usage ; aucun abonnement d\'équipe relevé', 'À réserver à des données non sensibles, sa politique de données devant être lue avant tout usage'],
                ['NotebookLM (Google)', 'Interroger un jeu de documents que l\'on fournit et obtenir des réponses rattachées aux sources', 'Une offre gratuite existe ; les limites et les offres payantes se vérifient sur la page de l\'éditeur', 'Utile pour des dossiers de plusieurs documents, à charger à l\'avance'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il payer un abonnement pour commencer, et lequel choisir ensuite ?',
            'paragraphes' => [
                'Non. Les versions gratuites de ChatGPT, Claude et Gemini suffisent pour apprendre la méthode, qui est la même quel que soit l\'outil : donner le contexte, fournir un modèle, préciser la forme attendue, vérifier la sortie. Les limites d\'usage se font sentir sur une journée intensive, ce qui conduit souvent à alterner entre deux assistants, et montre aux participants que la méthode ne dépend pas d\'un éditeur.',
                'Le choix payant se fait après la formation, sur ce qui a réellement servi. Une entreprise ivoirienne déjà équipée de Microsoft 365 commence par Copilot Chat, inclus dans les forfaits admissibles. Une autre, sur Google Workspace, part de Gemini. D\'autres retiennent ChatGPT ou Claude pour le résultat obtenu sur leurs documents en français. Les tarifs étant en dollars ou en euros, ils s\'ajoutent à un budget en FCFA : prévoyez la conversion et le moyen de paiement international de l\'entreprise avant de souscrire.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de données et de conformité faut-il suivre en Côte d\'Ivoire avant d\'envoyer un document à un outil d\'IA ?',
            'paragraphes' => [
                'La loi n° 2013-450 du 19 juin 2013 sur la protection des données à caractère personnel s\'applique, et la page de l\'ARTCI consacrée à la protection des données la cite toujours le 25 octobre 2026. L\'ARTCI joue le rôle d\'Autorité de protection, qui publie des formulaires distincts : déclaration préalable, autorisation préalable, autorisation d\'un système de vidéosurveillance, d\'un dispositif biométrique, et demande de transfert de données hors de l\'espace CEDEAO.',
                'Pour une équipe qui utilise un assistant, la question concrète est le transfert. Coller la fiche d\'un client dans un assistant hébergé à l\'étranger revient à envoyer des données personnelles hors du pays. La page de l\'ARTCI rappelle que les transferts hors de Côte d\'Ivoire sont soumis à des restrictions et à des garanties particulières. La formation ne remplace pas votre juriste : elle apprend à ne pas poser la question trop tard, en classant les documents en trois couleurs, ceux qui peuvent être confiés à l\'assistant, ceux que l\'on anonymise d\'abord, ceux qui ne sortent jamais.',
                'Le secteur compte. Une banque, une microfinance ou un opérateur de mobile money manipule des pièces d\'identité et des numéros de compte : la règle y est plus stricte qu\'à l\'agence de voyage ou au cabinet de conseil. Aucune règle ivoirienne propre à l\'usage de l\'IA par les entreprises n\'est établie à ce jour dans les textes consultés ; la stratégie nationale annonce un cadre légal et éthique, dont le contenu est à suivre.',
                'La facture normalisée électronique de la DGI mérite une mention. Selon sa foire aux questions, toutes les entreprises en activité doivent délivrer une facture normalisée électronique ou un reçu, hors dispenses, et le sticker électronique coûte 20 francs CFA TTC par facture normalisée. Un assistant peut aider à rédiger la description d\'une prestation ou à préparer un tableau de lignes de facture, mais il ne remplace pas le circuit de certification : le document officiel se génère par la plateforme, par l\'interface de programmation ou par un terminal.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats pour quelles équipes, à distance depuis Cotonou ?',
            'legende' => 'Tous les formats se donnent à distance en Côte d\'Ivoire, sans déplacement. Le décalage horaire est d\'une heure : quand il est 9 heures à Abidjan, il est 10 heures à Cotonou, toute l\'année.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une direction qui veut voir l\'outil sur ses propres documents avant d\'investir, ou une équipe qui n\'a jamais utilisé d\'assistant'],
                ['Formation complète', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un usage déjà commencé dans le désordre, ou une tâche volumineuse qui justifie à elle seule l\'investissement'],
                ['Séances en visioconférence', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties entre Abidjan et l\'intérieur du pays ; des séances courtes tolèrent mieux une connexion irrégulière'],
                ['Session mutualisée', '1 à 2 jours', 'Plusieurs structures d\'un même réseau', 'Une ou deux personnes par organisation, sur des documents publics ou fictifs'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Ancrer les habitudes et étendre l\'usage à de nouvelles tâches'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que changent la langue, la connexion et le matériel pour une formation à distance en Côte d\'Ivoire ?',
            'paragraphes' => [
                'Le français est la langue officielle du pays selon France Diplomatie, ce qui simplifie les séances : consignes, supports et corrigés sont en français. Les assistants écrivent par défaut un français de France, et le travail consiste à leur fournir un modèle maison et le vocabulaire de l\'entreprise, qu\'il s\'agisse d\'un courrier administratif, d\'une relance de paiement ou d\'un compte rendu pour un partenaire. Pour un texte en dioula, en baoulé ou en bété, le résultat se fait relire par un locuteur avant tout usage. L\'anglais, lui, sert directement aux équipes qui échangent avec des fournisseurs ou des clients étrangers.',
                'Un ordinateur par participant reste préférable : on analyse mal un tableau ou on relit mal un rapport de quarante pages sur un téléphone. Le téléphone suffit pour certains exercices, par exemple transformer des messages vocaux ou des photos de notes en texte. Les documents d\'exercice sont envoyés à l\'avance et téléchargés sur chaque poste pour ne pas dépendre de la connexion pendant la séance. Une solution de repli est prévue en cas de coupure : séance reprise sur une autre plage, enregistrement des consignes, exercices qui ne demandent pas de connexion.',
                'Quand un exercice porte sur le nettoyage d\'une liste de contacts, l\'indicatif +225 et le format des numéros ivoiriens sont donnés à l\'assistant, et le participant vérifie le résultat sur un échantillon avant d\'importer la liste.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation selon le métier, du cacao aux services financiers ?',
            'items' => [
                ['secteur' => 'Commerce, restauration livrée et boutiques en ligne', 'probleme' => 'Les commandes arrivent en vrac par WhatsApp, les fiches produits sont incomplètes et les relances de paiement attendent la fin de semaine.', 'solution' => 'Les équipes apprennent à transformer vingt messages en tableau de commandes, à normaliser des fiches produits à partir de notes et de photos et à rédiger des relances fermes mais courtoises. Le résultat attendu est un tableau que le responsable peut contrôler en quelques minutes, avec les montants et les adresses vérifiés.'],
                ['secteur' => 'Cacao, agriculture et agroalimentaire', 'probleme' => 'Le pays est le premier producteur mondial de cacao selon France Diplomatie. Les coopératives et les exportateurs produisent des comptes rendus de campagne, des courriers aux acheteurs étrangers et des rapports pour les bailleurs.', 'solution' => 'L\'assistant prépare le premier jet d\'un rapport à partir de notes de terrain anonymisées, traduit un courrier vers l\'anglais et résume un cahier des charges d\'acheteur. Chaque chiffre de volume ou de prix est retrouvé dans le tableur source avant diffusion.'],
                ['secteur' => 'Transport, port et logistique', 'probleme' => 'Le port d\'Abidjan est le deuxième d\'Afrique subsaharienne selon France Diplomatie. Les transitaires jonglent entre dossiers de dédouanement, factures aux clients et relances par téléphone.', 'solution' => 'Extraction des informations clés d\'un document de transport, synthèse d\'un dossier, courriers bilingues aux transporteurs. Le contrôle ligne à ligne des quantités et des références occupe la place centrale de l\'exercice.'],
                ['secteur' => 'Bâtiment et travaux publics', 'probleme' => 'Les chantiers produisent des comptes rendus de réunion, des situations de travaux et des courriers à plusieurs signataires.', 'solution' => 'Compte rendu de réunion de chantier avec décisions, responsables et échéances, courrier de relance à un sous-traitant, note de synthèse pour la direction. La vérification porte sur les dates et les montants cités.'],
                ['secteur' => 'Banque, microfinance, assurance et télécoms', 'probleme' => 'Les équipes rédigent beaucoup à partir de dossiers qui contiennent des données personnelles sensibles.', 'solution' => 'L\'assistant sert aux notes internes, aux supports de formation, aux réponses types et aux comptes rendus, sur des textes sans donnée nominative. La frontière à ne pas franchir est écrite avant le premier exercice : aucune pièce d\'identité, aucun numéro de compte dans un outil en ligne.'],
                ['secteur' => 'Cabinets de conseil et de formation', 'probleme' => 'Les consultants préparent offres, supports, comptes rendus d\'atelier et attestations, souvent le soir.', 'solution' => 'Réponse à un appel d\'offres à partir d\'un modèle validé, plan d\'un support de cours, synthèse d\'évaluations de stagiaires. Le participant vérifie les références et les engagements pris au nom du cabinet.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se financer ou se faire financer en Côte d\'Ivoire, avec le FDFP ?',
            'paragraphes' => [
                'Le Fonds de Développement de la Formation Professionnelle, le FDFP, est le dispositif public de financement de la formation continue du pays. Sa page « plan de formation », consultée le 25 octobre 2026, indique que toute entreprise qui justifie du paiement régulier des deux taxes requises peut déposer un plan de formation. Les actions éligibles sont l\'intégration des nouveaux embauchés, le perfectionnement, la promotion et la reconversion. Le plan peut être interne, intra, interentreprises ou à l\'étranger. Le règlement intervient après le contrôle des services du Fonds et l\'approbation de sa Commission permanente.',
                'Deux points sont à clarifier avant de bâtir un plan sur l\'IA. D\'abord, la page cite parmi les actions à dispositions particulières les actions de formation associées à l\'utilisation de l\'ordinateur : demandez au Fonds si une formation à l\'usage d\'assistants d\'IA est concernée. Ensuite, l\'habilitation : selon la page du FDFP sur les procédures d\'habilitation, elle s\'impose aux opérateurs privés qui prétendent aux financements, à l\'exception des structures basées hors de Côte d\'Ivoire. Que cette exception s\'applique à un formateur établi au Bénin, et sous quelles conditions, seul le Fonds peut le dire.',
                'Le calendrier compte. Selon la page des dates clés de l\'exercice 2026, la date limite de financement des plans de formation était le 31 octobre 2026, les demandes de remboursement de 2025 étaient à déposer avant le 13 novembre et le renouvellement des habilitations avant le 31 décembre ; pour une session en 2027, interrogez le Fonds sur le calendrier de l\'exercice suivant. Le renouvellement des habilitations. Pour une session en 2027, interrogez le Fonds sur l\'exercice suivant. Aucune prise en charge n\'est promise : budgétisez la formation sans financement, puis déduisez-le si le Fonds l\'accorde. Richard fournit le programme, les objectifs, les feuilles de présence et l\'attestation de fin de formation que le dossier demande.',
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une formation IA en entreprise en Côte d\'Ivoire ?',
            'intro'      => 'Le prix est fixé sur devis, en FCFA, après l\'échange de cadrage, et le devis détaille chaque poste. Les abonnements aux assistants restent au nom de l\'entreprise et ne sont pas compris dans le prix de la formation.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée sur vos documents', 'Premiers gestes sur deux tâches', 'Règles de données de base']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Exercices sur vos documents', 'Bibliothèque de consignes', 'Évaluation sur la tâche cible et attestation']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Corrections et nouvelles tâches', 'Bilan écrit']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, par service ou par site.',
                'La durée : atelier, deux jours ou accompagnement sur trois mois.',
                'Le mode : séances en visioconférence continues ou réparties sur plusieurs semaines, ce qui évite tout frais de déplacement.',
                'La préparation des exercices sur vos documents et leur anonymisation, plus longue pour une banque que pour un cabinet.',
                'Les abonnements aux assistants, facturés par l\'éditeur en dollars ou en euros.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Et hors d\'Abidjan : Bouaké, Yamoussoukro, San Pedro, quelle différence pour la formation ?',
            'paragraphes' => [
                'À Abidjan, la demande vient des sièges et des directions : France Diplomatie y situe près de 80 % de l\'activité économique du pays. Les groupes y sont mixtes, avec des services juridiques, financiers et commerciaux, et la règle de données y pèse davantage, parce que les entreprises y traitent plus de dossiers clients. La formation à distance évite aux équipes les trajets dans une ville où les déplacements prennent du temps, et les séances se placent en début de matinée ou en fin d\'après-midi, hors des heures de pointe. Une page détaille l\'offre locale pour <a href="/formation-ia-entreprise-abidjan">la formation à l\'IA à Abidjan</a>.',
                'Bouaké compte, selon les tableaux du recensement de 2021 repris par le portail économique ivoirien, 832 371 habitants, et en est le deuxième pôle industriel. Pour une entreprise de Bouaké, l\'enjeu est la disponibilité d\'une compétence extérieure sans quitter la ville : la formation à distance donne accès à une méthode sans déplacer l\'équipe, à condition de vérifier la connexion de chaque poste avant la première séance.',
                'Yamoussoukro est la capitale du pays selon France Diplomatie. Ses administrations et ses structures parapubliques écrivent des courriers normés, des notes de synthèse et des comptes rendus à plusieurs signataires : un assistant prépare le premier jet à partir d\'un modèle validé, et la règle est écrite d\'avance sur ce qu\'un agent peut soumettre, car la validation reste à la personne qui signe.',
                'San Pedro est, d\'après le service du commerce américain (trade.gov), le deuxième port du pays par volume de marchandises et le premier port exportateur de cacao au monde. Les équipes qui y travaillent en logistique et en négoce produisent des documents d\'expédition, des courriers aux armateurs et aux acheteurs : l\'exercice type consiste à extraire les quantités d\'un document de transport, à rédiger la réponse en anglais et à contrôler chaque chiffre contre la pièce d\'origine.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent chez les équipes ivoiriennes qui démarrent avec l\'IA ?',
            'intro' => 'Ces écarts reviennent d\'une entreprise à l\'autre ; chacun se prévient dès la session, plutôt qu\'après un incident.',
            'items' => [
                ['titre' => 'Utiliser un compte personnel pour des dossiers de l\'entreprise', 'texte' => 'Le compte gratuit d\'un salarié part avec lui et échappe à l\'entreprise. Les dossiers clients se traitent dans un compte professionnel, ou ne sortent pas.'],
                ['titre' => 'Envoyer des données de clients à l\'étranger sans y penser', 'texte' => 'La loi de 2013 encadre le transfert de données personnelles hors de Côte d\'Ivoire. Un assistant hébergé à l\'étranger est un transfert : on anonymise d\'abord, ou on s\'abstient.'],
                ['titre' => 'Croire un chiffre ou un article de loi parce qu\'il est précis', 'texte' => 'Un assistant peut citer une disposition, un taux ou une date qui n\'existent pas. Tout ce qui touche aux impôts, à la TVA ou à la facture normalisée se retrouve dans la source officielle avant d\'être repris.'],
                ['titre' => 'Envoyer un courrier sans le relire', 'texte' => 'Au bout de quelques jours, les réponses paraissent fiables et la relecture saute. C\'est le moment où passe un délai faux ou une remise jamais accordée au client.'],
                ['titre' => 'Confier le suivi des clients à un assistant sans règle', 'texte' => 'Une relance de paiement ou une réponse sur WhatsApp engage l\'entreprise. Une personne nommée valide ce qui part au nom de la société.'],
                ['titre' => 'Concevoir la séance pour une fibre qui n\'existe pas partout', 'texte' => 'Une séance qui suppose un débit constant échoue à la première coupure. Documents téléchargés à l\'avance, consignes préparées hors ligne et repli prévu évitent de perdre la demi-journée.'],
                ['titre' => 'Interdire l\'IA sans former', 'texte' => 'L\'interdiction déplace l\'usage vers les téléphones personnels, sans aucune règle. Mieux vaut écrire ce qui est permis, avec quelles données, et le faire appliquer.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes ivoiriennes avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà travaillé avec des entreprises en Côte d\'Ivoire. Il compte ' . $ans . ' ans d\'expérience dans le numérique, une formation à ' . fait('formation')['nom'] . ' en ' . fait('formation')['annee'] . ', et déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et co-fonde <a href="https://audyxa.com">Audyxa</a>, ce qui lui donne une pratique directe de WhatsApp, un canal que les équipes ivoiriennes utilisent chaque jour avec leurs clients.',
                'Sa façon de former tient en quelques engagements : une réponse sous 24 heures, un cadrage qui peut conclure qu\'une formation plus courte suffit, des exercices construits sur vos documents, une évaluation de chaque participant sur sa tâche réelle, des supports qui restent à l\'entreprise, aucun gain chiffré promis à l\'avance. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun.',
                'Les projets ivoiriens du portfolio sont des sites et applications livrés à Abidjan, réalisés en sous-traitance pour Digital Développement : Afro Joy\'ce (commande de repas en ligne), INOVIS Côte d\'Ivoire (refonte d\'un site de conseil), AT Consulting International (catalogue de formations et évaluation en ligne) et Laura Cosmetics (boutique en deux devises), réalisés pour des clients d\'Abidjan. Ils sont décrits sur la page des <a href="/realisations/">réalisations</a>. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>. Pour brancher l\'IA sur vos logiciels plutôt que former vos équipes, voir la page <a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe ivoirienne à l\'IA ?',
            'texte'  => 'Indiquez la ville, le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps et les outils déjà en place : vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé en FCFA.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => 'Qui peut former mes équipes à l\'IA en Côte d\'Ivoire sans qu\'elles se déplacent ?', 'r' => 'Richard SALANON forme les équipes ivoiriennes à distance depuis Cotonou, avec un décalage d\'une heure seulement. Les séances se tiennent en visioconférence, sur vos documents, à Abidjan comme à Bouaké, Yamoussoukro ou San Pedro. Aucun déplacement n\'est prévu en Côte d\'Ivoire.'],
        ['q' => 'La loi ivoirienne sur les données personnelles interdit-elle d\'utiliser ChatGPT ou Claude ?', 'r' => 'Non, mais elle encadre ce qu\'on y envoie. La loi n° 2013-450 du 19 juin 2013 est citée par l\'ARTCI, et les transferts de données personnelles hors de Côte d\'Ivoire demandent des garanties. On anonymise donc d\'abord, ou on garde le document dans l\'entreprise. Votre juriste tranche les cas sensibles.'],
        ['q' => 'Faut-il déclarer à l\'ARTCI l\'usage d\'un assistant d\'IA ?', 'r' => 'Cela dépend des données traitées. L\'Autorité de protection publie des formulaires de déclaration préalable, d\'autorisation et de transfert hors de l\'espace CEDEAO. Un fichier clients envoyé à un outil étranger peut relever du transfert : faites examiner le cas par votre juriste ou votre correspondant avant de généraliser l\'usage.'],
        ['q' => 'Le FDFP peut-il financer une formation IA animée par Richard ?', 'r' => 'Peut-être, mais rien n\'est promis. Le FDFP finance des plans de formation d\'entreprises à jour de leurs taxes et exige l\'habilitation des opérateurs privés, à l\'exception des structures basées hors de Côte d\'Ivoire. Demandez au Fonds une réponse écrite pour un opérateur établi au Bénin. Richard fournit le programme et les justificatifs.'],
        ['q' => 'Quelle date limite du FDFP faut-il connaître en 2026 ?', 'r' => 'Selon la page des dates clés de l\'exercice 2026, la date limite de financement des plans de formation était le 31 octobre 2026, les demandes de remboursement de 2025 étaient à déposer avant le 13 novembre et le renouvellement des habilitations. Pour une session en 2027, interrogez le Fonds sur le calendrier suivant.'],
        ['q' => 'Que prévoit la stratégie nationale ivoirienne de l\'IA pour les entreprises ?', 'r' => 'Présentée le 13 mars 2025 selon la presse, elle prévoit trois piliers : compétences et infrastructures, inclusion régionale et sociale, gouvernance avec un cadre légal et éthique. Elle ne crée pas à ce jour d\'obligation que nous ayons relevée pour une PME : une règle interne écrite reste la meilleure protection.'],
        ['q' => 'La facture normalisée électronique de la DGI peut-elle être rédigée par un assistant ?', 'r' => 'Non. Un assistant peut aider à préparer les lignes d\'un tableau ou une description de prestation, mais la facture normalisée se génère par la plateforme de la DGI, par interface de programmation ou par terminal. Le sticker électronique est de 20 francs CFA TTC par facture normalisée selon la foire aux questions de la DGI.'],
        ['q' => 'Les équipes hors d\'Abidjan peuvent-elles suivre la formation avec leur connexion ?', 'r' => 'Oui, avec des séances courtes de deux heures et demie, des documents téléchargés à l\'avance et une solution de repli en cas de coupure. Chaque participant vérifie sa connexion avant la première séance. Un ordinateur est préférable à un téléphone pour l\'analyse de tableaux.'],
        ['q' => 'Faut-il acheter des abonnements avant la session ?', 'r' => 'Non. Les versions gratuites de ChatGPT, Claude et Gemini suffisent pour apprendre. L\'abonnement se décide après la formation, sur ce qui a servi. Les tarifs d\'éditeur sont en dollars ou en euros, à prévoir dans le budget en FCFA.'],
        ['q' => 'Combien coûte la formation, et comment la régler depuis la Côte d\'Ivoire ?', 'r' => 'Le prix est fixé sur devis, en FCFA, après l\'échange de cadrage. Il dépend du nombre de participants, de la durée, du format et de la préparation sur vos documents. Richard accepte le Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces ; le mode se fixe au devis.'],
        ['q' => 'Reçoit-on une attestation à la fin de la formation ?', 'r' => 'Oui, une attestation nominative de fin de formation par participant, avec le programme et les feuilles de présence. Ce n\'est ni un diplôme ni une certification d\'éditeur.'],
    ],

    'sources' => [
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-25'],
        ['titre' => 'FDFP, informations et dates clés de l\'exercice 2026', 'url' => 'https://fdfp.ci/informations-dates-cles-fdfp-exercice-2026/', 'date' => '2026-10-25'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-25'],
        ['titre' => 'ARTCI, protection des données (loi n° 2013-450)', 'url' => 'https://artci.ci/protection-des-donnees/', 'date' => '2026-10-25'],
        ['titre' => 'Autorité de protection (ARTCI), formulaires de déclaration, d\'autorisation et de transfert', 'url' => 'https://www.autoritedeprotection.ci/documents/', 'date' => '2026-10-25'],
        ['titre' => 'DGI, facture normalisée électronique : foire aux questions', 'url' => 'https://www.fne.dgi.gouv.ci/faq.php', 'date' => '2026-10-25'],
        ['titre' => 'DataReportal, Digital 2026 : Côte d\'Ivoire', 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-25'],
        ['titre' => 'France Diplomatie, présentation de la Côte d\'Ivoire', 'url' => 'https://www.diplomatie.gouv.fr/fr/information-par-pays/cote-d-ivoire/presentation-de-la-cote-d-ivoire', 'date' => '2026-10-25'],
        ['titre' => 'We Are Tech Africa, la Côte d\'Ivoire dévoile sa stratégie de l\'IA et de la gouvernance des données (14 mars 2025)', 'url' => 'https://www.wearetech.africa/fr/fils/actualites/tech/la-cote-d-ivoire-devoile-sa-strategie-de-l-ia-et-de-la-gouvernance-des-donnees', 'date' => '2026-10-25'],
        ['titre' => 'Osiris, l\'État et le secteur privé scellent une alliance pour accélérer l\'IA (IMPACT IA, septembre 2026)', 'url' => 'https://www.osiris.sn/cote-d-ivoire-l-etat-et-le-secteur-prive-scellent-une-alliance-pour-accelerer-l.html', 'date' => '2026-10-25'],
        ['titre' => 'Économie ivoirienne, région du Gbêkê (Bouaké, RGPH 2021)', 'url' => 'https://economie-ivoirienne.ci/pole-competitif/region-du-gbeke.html', 'date' => '2026-10-25'],
        ['titre' => 'International Trade Administration, Côte d\'Ivoire : extension et modernisation du port de San Pedro', 'url' => 'https://www.trade.gov/market-intelligence/cote-divoire-port-san-pedro-expansion-and-modernization', 'date' => '2026-10-25'],
        ['titre' => 'Anthropic, tarifs de Claude', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-25'],
        ['titre' => 'OpenAI, tarifs de ChatGPT', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, abonnements Gemini et Google AI', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-25'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-25'],
        ['titre' => 'DeepSeek, documentation de l\'interface de programmation', 'url' => 'https://api-docs.deepseek.com/quick_start/pricing', 'date' => '2026-10-25'],
        ['titre' => 'Google, NotebookLM', 'url' => 'https://notebook.google/', 'date' => '2026-10-25'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
