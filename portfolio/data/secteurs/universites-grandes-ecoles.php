<?php
// ============================================================
// data/secteurs/universites-grandes-ecoles.php · Page secteur « Universités et
// grandes écoles » (vague 1E, univers « Secteur public et éducation »).
// Cœur : l'enseignement supérieur public et privé (universités, grandes écoles,
// instituts privés), pas le primaire ni le secondaire. Public « Universités et
// chercheurs » : statut F au questionnaire (Richard a déjà formé ce public).
// Aucun projet client rattaché, aucune page locale. Faits externes relevés le
// 07/10/2026 : UNESCO, Commission européenne et règlement sur l'IA, CNIL, EHEA,
// CAMES, GSMA, Moodle, gouv.bj, Parcoursup, lois de protection des données.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Universités et grandes écoles : des inscriptions, des notes, des paiements de scolarité et des diplômes qui tiennent debout, avec une IA encadrée',
    'title'   => 'Digitaliser une université ou grande école | Richard SALANON',
    'meta'    => 'Admissions en ligne, système LMD, notes et crédits, enseignement à distance, scolarité par mobile money, diplômes vérifiables et IA encadrée. Sur devis.',
    'en_bref' => 'Richard SALANON conçoit pour les universités publiques, les grandes écoles et les instituts privés d\'enseignement supérieur d\'Afrique francophone et d\'Europe : dossiers d\'admission et d\'inscription en ligne, gestion des notes et des crédits du système LMD, espaces étudiants, plateformes d\'enseignement à distance, encaissement des frais de scolarité par mobile money, attestations et diplômes vérifiables, outils de recherche et assistants d\'IA encadrés. Il relie vos logiciels existants au lieu de tout remplacer quand c\'est possible. Un site vitrine d\'établissement démarre à 300 000 FCFA ; tout le reste est établi sur devis une fois le premier échange gratuit passé.',
    'publie'  => '2026-11-19',
    'maj'     => '2026-11-19',
    'univers' => 'Secteur public et éducation',
    'locales' => [],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Universités publiques, grandes écoles, instituts privés d\'enseignement supérieur et laboratoires'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation de l\'enseignement supérieur en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Le point de départ n\'est pas le même des deux côtés, mais le goulot d\'étranglement est identique : la rentrée. En France, selon le <a href="https://www.parcoursup.gouv.fr/sites/default/files/database/documents/2026-05/livret-phase-admission-parcoursup-2026-1167.pdf">livret de la phase d\'admission 2026 de Parcoursup</a>, 1 046 000 candidats ont confirmé au moins un vœu et 14,1 millions de vœux et sous-vœux ont été confirmés en phase principale. Chaque établissement reçoit donc ses dossiers par une plateforme nationale, puis doit enchaîner sur ses propres inscriptions administratives.',
                'Au Bénin, l\'orientation des nouveaux bacheliers passe par la plateforme apresmonbac.bj. Selon le <a href="https://www.gouv.bj/article/2735/campagne-orientation-nouveaux-bacheliers-rendez-vous-aout-2024-campus-universites-publiques-benin/">portail du gouvernement</a>, le lancement de la campagne 2024 a réuni environ 2 000 nouveaux bacheliers, sur neuf sites répartis entre les quatre universités publiques, avec une période d\'inscription du 27 août au 9 septembre 2024 pour les séries classiques et des résultats publiés le 20 septembre. La plateforme permet à chaque candidat de voir qui est déjà inscrit devant lui selon sa moyenne pondérée, ce qui montre qu\'une procédure transparente est possible.',
                'L\'enseignement à distance est le second marqueur. Moodle, plateforme libre d\'apprentissage, compte 147 656 sites enregistrés dans 237 pays et 534,7 millions d\'utilisateurs selon ses <a href="https://stats.moodle.org/">statistiques publiques</a>, consultées le 7 octobre 2026. Dans l\'espace francophone d\'Afrique, l\'<a href="https://anaqsup.sn/wp-content/uploads/2024/12/Rapport-de%CC%81valuation-institutionnelle-externe-en-vue-de-lhabilitation-_-UVS.pdf">Université virtuelle du Sénégal</a>, créée en 2013 par décret, dispose d\'espaces numériques ouverts, au nombre de 13 lors de son évaluation institutionnelle, répartis sur le territoire national : l\'équipement du campus fait partie de l\'offre, pas seulement le cours en ligne.',
                'Reste le paiement. D\'après le <a href="https://www.gsma.com/sotir/wp-content/plugins/plugin_gsma_sotir/reports/The-State-of-the-Industry-Report-2026_English.pdf">rapport 2026 de la GSMA</a>, le monde comptait 2,3 milliards de comptes de monnaie mobile enregistrés en 2025 et 593 millions de comptes actifs sur 30 jours, avec plus de 2 000 milliards de dollars de transactions sur l\'année. Pour un étudiant béninois ou ivoirien, régler une scolarité depuis son téléphone est devenu un attendu ordinaire, à condition que le reçu arrive dans le dossier académique.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels processus universitaires gagnent à être digitalisés, et à quels signes le moment est-il venu ?',
            'intro' => 'Un établissement supérieur empile des procédures qui se répondent : candidature, inscription, scolarité, examens, diplôme, recherche. Les signes suivants reviennent le plus souvent ; trois d\'entre eux justifient un diagnostic.',
            'items' => [
                ['titre' => 'Les files d\'attente de rentrée', 'texte' => 'Des étudiants qui passent des journées à la scolarité, au service financier puis à la bibliothèque pour une seule inscription. Un dossier complet en ligne, un paiement et une carte numérique réduisent ce parcours à une démarche.'],
                ['titre' => 'Les notes qui circulent par tableur', 'texte' => 'Chaque enseignant envoie son fichier, le secrétariat ressaisit, le jury délibère sur une version dont personne ne garantit qu\'elle est la dernière. Les réclamations de fin de semestre en sont la trace.'],
                ['titre' => 'Des crédits et des semestres mal suivis', 'texte' => 'Le système LMD (licence, master, doctorat) repose sur des unités d\'enseignement, des crédits capitalisables et des règles de compensation. Calculées à la main, ces règles produisent des erreurs de validation que l\'étudiant ne découvre qu\'au diplôme.'],
                ['titre' => 'Des frais de scolarité encaissés sans rapprochement', 'texte' => 'Espèces au guichet, virement, mobile money sur un numéro personnel : la comptabilité ne sait plus quel étudiant est à jour avant les examens, et la direction ne connaît pas son encours.'],
                ['titre' => 'Des attestations demandées trois fois par an', 'texte' => 'Attestation d\'inscription, relevé de notes, certificat de scolarité : chaque demande mobilise un agent, un tampon et parfois une signature de doyen. Une version numérique vérifiable libère ce temps.'],
                ['titre' => 'Des cours en ligne improvisés', 'texte' => 'Groupes de messagerie, liens de visioconférence et dossiers partagés tiennent lieu de plateforme. L\'enseignant ne sait pas qui a suivi, l\'étudiant ne retrouve pas ses supports.'],
                ['titre' => 'Des laboratoires sans gestion de leurs données', 'texte' => 'Jeux de données sur des disques personnels, publications sans archivage ouvert, thèses sans suivi d\'avancement : la recherche dépend de la mémoire d\'un doctorant ou d\'un directeur.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Si le règlement des études change chaque semestre, mieux vaut le stabiliser avant de l\'écrire dans un logiciel. Si personne ne peut piloter le projet côté scolarité, commencez par une seule procédure, la plus douloureuse.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services pour une université, une grande école ou un institut privé ?',
            'legende' => 'Correspondance entre un besoin d\'établissement d\'enseignement supérieur et le service de Richard qui y répond ; le périmètre exact se fixe sur devis.',
            'entetes' => ['Besoin typique de l\'établissement', 'Service', 'Lien'],
            'lignes'  => [
                ['Portail de candidature, dossier d\'inscription en ligne, pièces à téléverser, suivi du dossier', 'Espace étudiant et plateforme en ligne', '<a href="/services/saas-espace-client">Plateforme et espace client (SaaS)</a>'],
                ['Gestion des notes, des unités d\'enseignement, des crédits et des jurys au format LMD', 'Application sur mesure reliée à l\'existant', '<a href="/services/application-web-sur-mesure">Application web sur mesure</a>'],
                ['Site de l\'établissement, pages de filières, calendrier, annuaire des enseignants', 'Site institutionnel', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Être trouvé par les bacheliers qui comparent les filières et les écoles', 'Référencement des pages de formation', '<a href="/services/referencement-naturel-seo">Référencement naturel (SEO)</a>'],
                ['Assistant d\'orientation sur le règlement des études et les filières, avec réponses citées', 'Assistant d\'IA sur vos propres textes', '<a href="/services/integration-ia-entreprise">Intégration de l\'IA en entreprise</a>'],
                ['Échange de données entre la scolarité, la comptabilité, la bibliothèque et la plateforme de cours', 'API et connecteurs', '<a href="/services/api-rest-integrations">API REST et intégrations</a>'],
                ['Comptabilité, achats et immobilisations d\'un institut privé', 'ERP paramétré pour l\'OHADA', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Relances de scolarité, convocations aux examens et alertes envoyées par messagerie', 'Messages automatisés', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Application d\'emploi du temps, de présence ou d\'annonces sur téléphone', 'Application mobile', '<a href="/services/application-mobile-android-ios">Application mobile Android et iOS</a>'],
                ['Montée en compétence du personnel administratif et des enseignants', 'Formation sur site ou à distance', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
                ['Correctifs, sauvegardes et évolutions après chaque rentrée', 'Maintenance', '<a href="/services/maintenance-support">Maintenance et support</a>'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels logiciels de scolarité, de cours et de gestion existent, et faut-il les garder ou les remplacer ?',
            'legende' => 'Panorama de logiciels et de plateformes courants dans l\'enseignement supérieur ; la conservation ou le remplacement se décide après un diagnostic de ce qui fonctionne.',
            'entetes' => ['Domaine', 'Ce qui existe', 'Garder et relier quand', 'Remplacer quand'],
            'lignes'  => [
                ['Scolarité et dossiers étudiants', 'En France, Pégase, projet commun de l\'Amue et de l\'association Cocktail, appelé à succéder à Apogée ; en Afrique, souvent un logiciel local ou un tableur', 'Le logiciel tient les inscriptions et les notes ; il manque seulement un portail ou une API', 'Plus aucun éditeur ne le maintient, ou les règles LMD sont codées à la main'],
                ['Enseignement à distance', 'Moodle, Open edX, Chamilo : plateformes libres', 'La plateforme existe et les enseignants la connaissent ; on ajoute la connexion unique et le rapprochement avec la scolarité', 'Elle n\'est plus mise à jour ou son hébergement échappe à l\'établissement'],
                ['Comptabilité et paiement', 'Logiciel comptable local, Odoo, Dolibarr, agrégateurs de mobile money', 'La comptabilité est tenue et validée par l\'expert-comptable ; on y envoie les paiements rapprochés', 'La saisie des encaissements se fait encore sur papier ou sur plusieurs fichiers'],
                ['Bibliothèque et ressources', 'Systèmes intégrés de bibliothèque, dépôts d\'archives ouvertes', 'Le catalogue est à jour ; on y relie l\'identité de l\'étudiant', 'Le catalogue n\'est consultable qu\'au guichet'],
                ['Gestion complète d\'un institut privé', 'Modules d\'éducation libres pour Odoo, comme <a href="https://github.com/openeducat/openeducat_erp">OpenEduCat</a>, à évaluer avant tout engagement', 'Un module couvre déjà vos filières et vos règles de calcul', 'Vos règles de validation et de crédits diffèrent des modules disponibles : application sur mesure'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l\'IA dans une université, et que ne doit-elle jamais faire ?',
            'intro' => 'Le règlement européen sur l\'intelligence artificielle range parmi les usages à haut risque ceux qui décident de l\'accès à un établissement, évaluent les acquis, déterminent le niveau d\'enseignement accessible ou surveillent les comportements interdits pendant les épreuves, selon son <a href="https://artificialintelligenceact.eu/annex/3/">annexe III</a>. Cette liste sert de boussole même hors d\'Europe.',
            'items' => [
                ['titre' => 'Répondre aux questions courantes des candidats', 'texte' => 'Un assistant qui cite le règlement des études, le calendrier des inscriptions et les pièces à fournir, et qui renvoie à un agent dès que le cas est particulier, soulage la scolarité sans décider de rien.'],
                ['titre' => 'Aider à rechercher et résumer de la littérature', 'texte' => 'Pour un laboratoire, l\'IA prépare des pistes de lecture et des résumés de corpus ; chaque référence se vérifie ensuite une à une, car un assistant peut inventer une source.'],
                ['titre' => 'Préparer des brouillons de supports de cours', 'texte' => 'L\'enseignant garde la maîtrise du contenu et du ton ; l\'IA propose des plans, des exercices et des variantes de sujets.'],
                ['titre' => 'Ne jamais décider seule d\'une admission', 'texte' => 'Classer des dossiers, refuser un candidat ou attribuer une place relève d\'une décision humaine motivée. Côté européen, l\'article 22 du RGPD donne à chacun le droit d\'échapper à une décision prise seulement par un algorithme, avec intervention humaine possible, d\'après la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre3">CNIL</a>.'],
                ['titre' => 'Ne jamais prononcer seule une sanction pour fraude', 'texte' => 'Les détecteurs de textes générés par IA se trompent. Une accusation de plagiat appuyée sur un score se confirme par un entretien, la comparaison des brouillons et l\'avis d\'une commission.'],
                ['titre' => 'Ne jamais recevoir les données sensibles des étudiants', 'texte' => 'Dossiers médicaux, situations de handicap, situations sociales, notes nominatives : ces données ne se collent pas dans un assistant public. Elles passent par un outil contractualisé, hébergé et journalisé.'],
                ['titre' => 'Ne jamais noter à la place de l\'enseignant', 'texte' => 'Un assistant peut proposer une grille et repérer des incohérences ; la note reste celle du correcteur, qui peut en répondre devant un jury.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles encadrent les paiements, les données des étudiants et la reconnaissance des diplômes ?',
            'paragraphes' => [
                'Paiement et facturation d\'abord. Les frais de scolarité encaissés par un institut privé relèvent de sa comptabilité et de la fiscalité de son pays ; leur éventuel assujettissement à la facture normalisée dépend du statut de l\'établissement et se confirme auprès de l\'expert-comptable et de l\'administration fiscale avant de brancher un outil. Côté technique, un agrégateur de mobile money doit renvoyer à l\'établissement un identifiant de paiement que l\'on rattache au matricule, jamais à un simple nom.',
                'Données personnelles ensuite. Pour un établissement béninois qui héberge ses fichiers d\'étudiants à l\'étranger, le <a href="https://sgg.gouv.bj/doc/loi-2017-20/">code du numérique (loi n° 2017-20)</a> prévoit, à son article 391, qu\'un transfert vers un État tiers ne peut avoir lieu que lorsque l\'Autorité constate que cet État assure un niveau de protection équivalent, et seulement après son autorisation préalable. Au Sénégal, la <a href="https://www.wipo.int/wipolex/zh/legislation/details/6229">loi n° 2008-12</a> du 25 janvier 2008 crée la Commission des données personnelles. En Côte d\'Ivoire, l\'ARTCI exerce la mission de protection des données dans le cadre de la loi n° 2013-450 du 19 juin 2013, comme l\'indique sa <a href="https://artci.ci/protection-des-donnees/">page consacrée à la protection des données</a> : une université privée d\'Abidjan s\'y adresse pour ses déclarations ou autorisations de traitement.',
                'En Europe, le RGPD pose des principes que tout dossier d\'étudiant doit respecter : finalité précise, minimisation des données et durée de conservation justifiée (article 5), et interdiction de principe de traiter des données de santé ou biométriques sauf exception (article 9), d\'après la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2">CNIL</a>. Une université qui garde indéfiniment les copies d\'examen de ses anciens étudiants, ou qui scanne des visages pour surveiller les épreuves, s\'expose sur ces deux articles.',
                'Reste la reconnaissance. Le <a href="https://www.lecames.org/pred/">programme PRED du CAMES</a> s\'appuie sur la convention de 1972, par laquelle les États parties affirment leur volonté de reconnaître les grades et diplômes de leurs établissements comme valables de plein droit ou équivalents, sous réserve de critères scientifiques, pédagogiques et institutionnels. En Europe, l\'<a href="https://ehea.info/page-members">espace européen de l\'enseignement supérieur</a> compte 49 membres, dont deux sont suspendus, avec trois cycles et un système commun de crédits. Quant à la vérification d\'un diplôme, la Commission européenne met à disposition les <a href="https://europass.europa.eu/en/european-digital-credentials-learning">diplômes numériques européens</a> : un document signé par un sceau électronique, que n\'importe quel tiers peut contrôler. L\'agence nationale d\'assurance qualité du pays (comme l\'ANAQ-Sup au Sénégal, qui évalue les établissements en vue de leur habilitation) et le ministère de tutelle interviennent dans l\'habilitation des filières : à confirmer avant l\'ouverture d\'un nouveau parcours.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la digitalisation d\'un établissement supérieur selon le pays et le type d\'école ?',
            'items' => [
                ['secteur' => 'Université publique, Bénin', 'probleme' => 'Entre l\'orientation nationale et l\'inscription administrative, les pièces sont redemandées à chaque guichet, et les étudiants repartent avec des reçus papier.', 'solution' => 'Un dossier d\'inscription unique rattaché au numéro d\'orientation, avec pièces téléversées une fois, paiement par mobile money rapproché du matricule, et une carte étudiante numérique générée à la validation.'],
                ['secteur' => 'Établissement à distance, Sénégal', 'probleme' => 'Les étudiants suivent leurs cours sur une plateforme, passent leurs devoirs par messagerie et ne retrouvent pas leurs notes dans un seul espace.', 'solution' => 'Connexion unique entre la plateforme de cours et la scolarité, publication des notes validées par l\'enseignant, et alertes envoyées par messagerie lorsqu\'un devoir est noté ou une session d\'examen ouverte.'],
                ['secteur' => 'Institut privé, Côte d\'Ivoire', 'probleme' => 'Des échéanciers de scolarité en plusieurs tranches, payés en espèces ou par mobile money, que la comptabilité rapproche à la main avant chaque examen.', 'solution' => 'Un échéancier par étudiant, chaque paiement imputé à sa tranche par un agrégateur, une liste des étudiants à jour pour la direction, et un reçu automatique. Le choix de l\'agrégateur se fait avec le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a>.'],
                ['secteur' => 'Université, France', 'probleme' => 'Après la phase d\'admission nationale, la scolarité doit réconcilier le logiciel de scolarité, la plateforme de cours et les attestations demandées en nombre.', 'solution' => 'Une API entre le logiciel de scolarité (Pégase, ou son prédécesseur) et un portail étudiant, des attestations signées avec un sceau électronique, et un assistant qui renvoie vers la page du règlement plutôt que d\'inventer une règle.'],
                ['secteur' => 'Grande école, Belgique ou Suisse', 'probleme' => 'Des étudiants internationaux dont le dossier mêle diplômes de plusieurs pays, crédits ECTS et pièces en plusieurs langues.', 'solution' => 'Un dossier d\'équivalence avec les pièces classées par pays, les crédits convertis par un responsable de programme (jamais par l\'IA), et un suivi de dossier par étapes visible du candidat.'],
                ['secteur' => 'Laboratoire de recherche, Cameroun', 'probleme' => 'Des jeux de données d\'enquêtes conservés sur des disques personnels, et des mémoires dont personne ne suit l\'avancement.', 'solution' => 'Un entrepôt de données avec droits par projet, un suivi des mémoires et thèses par étapes, et un assistant de recherche bibliographique dont chaque référence est contrôlée avant citation.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet universitaire, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous présentez votre établissement, ses effectifs, ses filières et le point noir de la rentrée. Cet échange gratuit permet de dire si un portail, une intégration ou un simple site suffit.'],
                ['titre' => 'Diagnostic des procédures', 'duree' => 'Selon le projet', 'texte' => 'Richard propose de suivre un étudiant de l\'orientation jusqu\'à l\'attestation de diplôme : pièces, paiement, inscription, notes, jury. Le diagnostic liste les logiciels en place, les fichiers qui circulent et les règles écrites nulle part.'],
                ['titre' => 'Cadrage et choix du premier palier', 'duree' => 'Selon le projet', 'texte' => 'La procédure la plus douloureuse passe en premier, souvent l\'inscription ou les notes. Le cadrage fixe les données, les droits par fonction, le calendrier calé hors période d\'examens et la part de l\'existant conservée.'],
                ['titre' => 'Construction et essai sur données de test', 'duree' => 'Selon le projet', 'texte' => 'La scolarité teste sur un échantillon anonymisé de dossiers et de notes. Les règles de calcul des crédits sont vérifiées cas par cas avec les responsables de filière.'],
                ['titre' => 'Formation et bascule', 'duree' => 'Selon le projet', 'texte' => 'Chaque fonction (scolarité, enseignants, comptabilité, étudiants relais) reçoit sa prise en main sur ses propres écrans. La bascule se cale entre deux sessions, jamais en pleine délibération.'],
                ['titre' => 'Suivi après la rentrée', 'duree' => 'Selon le projet', 'texte' => 'Les premières semaines de rentrée révèlent les réglages à reprendre. La <a href="/services/maintenance-support">maintenance</a> assure sauvegardes, correctifs et évolutions avant la rentrée suivante.'],
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûte un projet pour une université ou une grande école, et qu\'est-ce qui fait varier le devis ?',
            'intro' => 'Trois tarifs de départ seulement sont affichés sur ce site : une landing page (150 000 FCFA, environ 229 euros), un site vitrine (300 000 FCFA, environ 457 euros) et le référencement naturel (75 000 FCFA, environ 114 euros), au taux de 655,957 FCFA pour 1 euro. Tout ce qui touche à la scolarité, aux notes, aux paiements et à l\'IA se chiffre sur devis, après le premier échange gratuit et le diagnostic. Modes de paiement acceptés : Mobile Money (MTN, Moov), carte bancaire, PayPal, virement, espèces.',
            'items' => [
                ['offre' => 'Site d\'établissement ou de faculté', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Pages de filières, calendrier, annuaire, contact', 'Mise en page pour téléphone', 'Bases du référencement des pages de formation']],
                ['offre' => 'Portail d\'inscription et espace étudiant', 'prix' => 'Sur devis', 'inclus' => ['Dossier en ligne et pièces téléversées', 'Suivi de dossier et notifications', 'Rapprochement avec le paiement']],
                ['offre' => 'Notes, crédits et jurys', 'prix' => 'Sur devis', 'inclus' => ['Règles LMD de l\'établissement', 'Saisie par enseignant, validation par jury', 'Relevés de notes et attestations']],
                ['offre' => 'Assistant d\'IA et intégrations', 'prix' => 'Sur devis', 'inclus' => ['Assistant sur vos textes avec réponses citées', 'Connecteurs vers vos logiciels existants', 'Journal des usages et règles d\'escalade']],
            ],
            'variations' => [
                'Le nombre d\'étudiants et de filières, donc le volume de dossiers à la rentrée.',
                'La complexité des règles de crédits, de compensation et de rattrapage.',
                'Le logiciel de scolarité existant : API disponible ou export de fichiers seulement.',
                'La reprise de l\'historique des étudiants et la qualité des fichiers.',
                'Le nombre de canaux de paiement et d\'agrégateurs à brancher.',
                'La part d\'IA : simple assistant d\'information ou outil de recherche sur des documents internes.',
                'Les exigences de sécurité, d\'hébergement et de journalisation des données des étudiants.',
                'Le nombre de personnes à former et de campus à couvrir.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs fréquentes font échouer la digitalisation d\'un établissement supérieur ?',
            'intro' => 'Les échecs viennent rarement de la technique. La migration de TSB en 2018 (<a href="/histoires/tsb-migration">l\'histoire de TSB</a>) rappelle le coût d\'une bascule totale sans retour arrière ; les causes ci-dessous reviennent dans le monde universitaire.',
            'items' => [
                ['titre' => 'Basculer toute la scolarité en une rentrée', 'texte' => 'Commencer par l\'inscription ou les notes, puis ouvrir le palier suivant après la session. Une bascule générale en septembre expose toutes les filières à la fois.'],
                ['titre' => 'Coder les règles LMD sans les écrire d\'abord', 'texte' => 'Chaque faculté a ses coefficients, ses compensations et ses rattrapages. Sans règlement écrit et validé, le logiciel fige l\'habitude de la personne qui l\'a expliquée.'],
                ['titre' => 'Encaisser sans identifiant de paiement', 'texte' => 'Un paiement qui arrive sur un numéro sans référence se rapproche à la main. Imposez un code lié au matricule dès le premier encaissement.'],
                ['titre' => 'Laisser un chatbot inventer des règles', 'texte' => 'Un assistant d\'admission qui annonce une date ou une pièce erronée engage l\'établissement, comme l\'a rappelé la décision visée dans l\'<a href="/histoires/air-canada-chatbot">histoire d\'Air Canada</a> : il répond sur les textes validés, ou il passe la main.'],
                ['titre' => 'S\'appuyer sur un détecteur d\'IA pour sanctionner', 'texte' => 'Un score ne prouve pas une fraude. Prévoyez un entretien, l\'historique des brouillons et un recours devant une commission.'],
                ['titre' => 'Oublier la durée de conservation', 'texte' => 'Copies d\'examen, dossiers de candidats refusés et photos d\'identité s\'accumulent. Fixez des durées par type de document et supprimez à l\'échéance.'],
                ['titre' => 'Former uniquement la scolarité', 'texte' => 'Les enseignants saisissent les notes, les étudiants font les démarches : sans formation par fonction, le secrétariat devient le guichet de dépannage de tout le monde.'],
                ['titre' => 'Choisir un outil sans vérifier l\'habilitation des filières', 'texte' => 'Une nouvelle filière ou un parcours à distance relève du ministère et de l\'agence d\'assurance qualité. Le calendrier du projet suit celui de l\'habilitation.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes d\'une université, d\'une école ou d\'un laboratoire ?',
            'paragraphes' => [
                'La formation est un service à part, qui accompagne le projet sans se confondre avec lui. Richard a déjà formé des enseignants-chercheurs et des équipes universitaires, et il adapte le contenu à chaque fonction : personnel de scolarité, enseignants, doctorants, direction. Le programme complet pour ce public figure sur la page <a href="/formations/metier/universites-chercheurs">formation pour les universités et chercheurs</a>.',
                'Pour monter en compétence sur l\'IA au quotidien, la fiche <a href="/formations/ia-en-entreprise">IA en entreprise</a> couvre les usages d\'équipe, <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> traite le secret, les biais et la protection des données, et <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a> aide une direction à écrire une charte et à inventorier les usages. Pour cartographier les étapes à confier à l\'IA, voyez <a href="/formations/ia-processus-metier">IA dans les processus métier</a>. L\'ensemble des parcours se trouve dans le <a href="/formations/domaine/intelligence-artificielle">domaine intelligence artificielle</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la digitalisation d\'un établissement supérieur à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Avec plus de 6 ans d\'expérience dans le numérique, une formation à EPITECH (2022), plus de 50 projets livrés et plus de 200 personnes formées, Richard maîtrise les briques dont un établissement supérieur a besoin : applications web sur mesure, automatisations, assistants d\'IA et intégrations avec des logiciels existants. Ses réalisations sont présentées sur la page <a href="/realisations/">réalisations</a>.',
                'Il développe aussi ses propres produits : <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Pour un établissement, il propose de commencer par une procédure réelle, d\'ouvrir un palier à la fois, de remettre accès et code au nom de l\'établissement et de ne jamais laisser l\'IA trancher une admission ou une note. Plus de détails sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Quelle procédure de votre établissement voulez-vous alléger en premier ?',
            'texte'  => 'Indiquez vos effectifs, vos logiciels de scolarité et la démarche qui pèse le plus à la rentrée. Une réponse arrive sous 24 heures ; l\'échange qui suit est gratuit et débouche sur un plan par paliers chiffré.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon établissement'],
        ],
    ],

    'faq' => [
        ['q' => 'Un portail d\'inscription en ligne peut-il se brancher sur notre logiciel de scolarité actuel ?', 'r' => 'Souvent oui, si le logiciel offre une API ou au moins des exports réguliers. On garde alors le logiciel pour les notes et les inscriptions, et le portail le complète. Si seul un fichier tableur existe, le portail devient la source des inscriptions.'],
        ['q' => 'Peut-on encaisser les frais de scolarité par mobile money et les rapprocher du matricule ?', 'r' => 'Oui, avec un agrégateur de paiement qui renvoie un identifiant de transaction. On associe chaque paiement à un matricule et à une tranche, puis on génère un reçu. Le choix de l\'agrégateur est détaillé dans le comparatif FedaPay, Kkiapay et CinetPay publié sur ce site.'],
        ['q' => 'Comment gérer les notes et les crédits du système LMD dans un outil ?', 'r' => 'En écrivant d\'abord les règles de chaque filière : coefficients, seuils de validation, compensation, rattrapage. L\'outil les applique ensuite, les jurys valident, et chaque modification de note laisse une trace. Les cas particuliers restent décidés par un responsable.'],
        ['q' => 'Une plateforme d\'enseignement à distance est-elle plus utile qu\'un simple groupe de messagerie ?', 'r' => 'Oui dès que l\'enseignant veut savoir qui a suivi un cours, collecter des devoirs ou publier des notes. Une plateforme libre comme Moodle fournit ces fonctions, et on la relie à la scolarité pour que les inscrits y soient créés automatiquement.'],
        ['q' => 'Les diplômes et attestations peuvent-ils être vérifiés sans passer par la scolarité ?', 'r' => 'Oui : une attestation peut porter un code ou un sceau électronique que le destinataire contrôle en ligne. En Europe, la Commission met à disposition les diplômes numériques européens. Le format retenu se choisit avec la direction des études et le service juridique.'],
        ['q' => 'L\'IA peut-elle classer les dossiers de candidature ?', 'r' => 'Elle peut aider à contrôler qu\'un dossier est complet, mais ne doit pas décider d\'une admission. Le règlement européen sur l\'IA classe parmi les usages à haut risque ceux qui déterminent l\'accès à un établissement, et le RGPD protège contre les décisions exclusivement automatisées.'],
        ['q' => 'Comment encadrer l\'usage de l\'IA générative par les étudiants et les enseignants-chercheurs ?', 'r' => 'Par une charte écrite qui distingue les usages permis, les usages à déclarer et les usages interdits, et par une formation du personnel. Le guide de l\'UNESCO sur l\'IA générative recommande une approche centrée sur l\'humain et la protection de la vie privée.'],
        ['q' => 'Quelles données d\'étudiants ne doivent jamais être envoyées à un assistant d\'IA public ?', 'r' => 'Les données de santé, de handicap, de situation sociale, les notes nominatives et les pièces d\'identité. Elles passent par un outil contractualisé, hébergé dans un lieu connu et journalisé, avec une durée de conservation définie.'],
        ['q' => 'Faut-il une autorisation pour héberger les données des étudiants hors du pays ?', 'r' => 'Cela dépend du pays. Au Bénin, l\'article 391 du code du numérique ne permet le transfert que lorsque l\'Autorité constate un niveau de protection équivalent dans l\'État de destination et l\'a autorisé au préalable. Faites confirmer la règle de votre pays par l\'autorité avant de choisir l\'hébergement.'],
        ['q' => 'Combien coûte un site d\'établissement et le reste du projet ?', 'r' => 'Un site vitrine démarre à 300 000 FCFA, soit environ 457 euros. Le portail d\'inscription, les notes, les paiements et l\'IA sont chiffrés sur devis, une fois le diagnostic réalisé.'],
        ['q' => 'Intervenez-vous hors du Bénin ?', 'r' => 'Oui. Le travail se fait à distance pour l\'Afrique francophone, l\'Europe et le Canada, et sur place au Bénin ; un établissement européen peut payer par carte, PayPal ou virement.'],
    ],

    'sources' => [
        ['titre' => 'UNESCO, guide pour l\'IA générative : éducation et recherche (version de septembre 2023, révisée en janvier 2026)', 'url' => 'https://www.unesco.org/en/articles/guidance-generative-ai-education-and-research', 'date' => '2026-10-07'],
        ['titre' => 'Règlement européen sur l\'IA, annexe III, point 3 : éducation et formation professionnelle', 'url' => 'https://artificialintelligenceact.eu/annex/3/', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre II (articles 5, 6 et 9)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre III (articles 15 et 22)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre3', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, campagne d\'orientation des nouveaux bacheliers (août 2024)', 'url' => 'https://www.gouv.bj/article/2735/campagne-orientation-nouveaux-bacheliers-rendez-vous-aout-2024-campus-universites-publiques-benin/', 'date' => '2026-10-07'],
        ['titre' => 'Parcoursup, livret de la phase d\'admission 2026', 'url' => 'https://www.parcoursup.gouv.fr/sites/default/files/database/documents/2026-05/livret-phase-admission-parcoursup-2026-1167.pdf', 'date' => '2026-10-07'],
        ['titre' => 'GSMA, State of the Industry Report on Mobile Money 2026', 'url' => 'https://www.gsma.com/sotir/wp-content/plugins/plugin_gsma_sotir/reports/The-State-of-the-Industry-Report-2026_English.pdf', 'date' => '2026-10-07'],
        ['titre' => 'ARTCI, protection des données (loi n° 2013-450)', 'url' => 'https://artci.ci/protection-des-donnees/', 'date' => '2026-10-07'],
        ['titre' => 'OpenEduCat, module d\'éducation pour Odoo (dépôt officiel)', 'url' => 'https://github.com/openeducat/openeducat_erp', 'date' => '2026-10-07'],
        ['titre' => 'Moodle, statistiques des sites enregistrés', 'url' => 'https://stats.moodle.org/', 'date' => '2026-10-07'],
        ['titre' => 'CAMES, programme de reconnaissance et d\'équivalence des diplômes (PRED)', 'url' => 'https://www.lecames.org/pred/', 'date' => '2026-10-07'],
        ['titre' => 'Espace européen de l\'enseignement supérieur, liste des membres', 'url' => 'https://ehea.info/page-members', 'date' => '2026-10-07'],
        ['titre' => 'Europass, diplômes numériques européens (European Digital Credentials for Learning)', 'url' => 'https://europass.europa.eu/en/european-digital-credentials-learning', 'date' => '2026-10-07'],
        ['titre' => 'PC-Scol, présentation de Pégase, système d\'information de scolarité', 'url' => 'https://www.pc-scol.fr/loutil-pegase/', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'WIPO Lex, Sénégal, loi n° 2008-12 sur la protection des données à caractère personnel', 'url' => 'https://www.wipo.int/wipolex/zh/legislation/details/6229', 'date' => '2026-10-07'],
        ['titre' => 'ANAQ-Sup du Sénégal, rapport d\'évaluation institutionnelle de l\'Université virtuelle du Sénégal en vue de l\'habilitation', 'url' => 'https://anaqsup.sn/wp-content/uploads/2024/12/Rapport-de%CC%81valuation-institutionnelle-externe-en-vue-de-lhabilitation-_-UVS.pdf', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'     => ['saas-espace-client', 'application-web-sur-mesure', 'integration-ia-entreprise', 'site-vitrine-professionnel', 'referencement-naturel-seo', 'api-rest-integrations', 'integration-odoo', 'formation-en-entreprise', 'maintenance-support'],
        'metiers'      => ['universites-chercheurs'],
        'formations'   => ['ia-en-entreprise', 'ia-ethique-conformite', 'gouvernance-ia', 'ia-processus-metier', 'rag-chatbot-documents', 'data-literacy'],
        'comparatifs'  => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
        'histoires'    => ['tsb-migration', 'air-canada-chatbot'],
    ],

];
