<?php
// ============================================================
// data/secteurs/cabinets-conseil.php · Secteur « Cabinets de conseil et de formation ».
// Faits externes relevés le 07/10/2026 : DREETS Normandie (Qualiopi), FDFP,
// gouv.bj (FODEFCA, facture normalisée), Eurostat, GSMA, documentation Odoo 20.0,
// CNIL, impots.gouv.fr, ARTCI, CDP du Sénégal, SGG du Bénin.
// Projets rattachés : GC Pro (direct), INOVIS et AT Consulting (sous-traitance).
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Cabinets de conseil et organismes de formation : des missions mieux vendues, mieux suivies et mieux livrées grâce au numérique',
    'title'   => 'Cabinets de conseil et de formation | Richard SALANON',
    'meta'    => 'Site, rendez-vous, suivi des missions et des temps, espace client, inscriptions aux formations et IA : Richard SALANON équipe cabinets et organismes.',
    'en_bref' => 'Richard SALANON équipe les cabinets de conseil en gestion, d’études et de QHSE ainsi que les organismes de formation professionnelle : site qui fait venir les demandes, devis et propositions, suivi des missions et des temps, espace client pour les livrables, catalogue et inscriptions aux formations, assistants d’IA pour les rapports avec relecture humaine. Le travail se fait à distance, avec des déplacements possibles au Bénin, par étapes courtes. Les tarifs de départ publiés sont de 150 000 FCFA pour une landing page et de 300 000 FCFA pour un site vitrine ; tout le reste est chiffré sur devis après cadrage.',
    'publie'  => '2026-11-19',
    'maj'     => '2026-11-19',
    'univers' => 'Direction et gestion',
    'locales' => [],

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Cabinets de conseil, bureaux d’études, cabinets QHSE et organismes de formation'],
        ['l' => 'Intervention', 'v' => 'À distance ; sur place au Bénin'],
        ['l' => 'Devis', 'v' => 'Sur devis'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Où en est la digitalisation des cabinets de conseil et de formation en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Un cabinet vend du temps et du savoir, deux choses qui se numérisent mal quand elles vivent dans des boîtes mail, des classeurs Word et la mémoire du consultant principal. En Europe, l’avance vient de l’outillage : selon Eurostat, 19,95 % des entreprises de l’Union européenne utilisaient des technologies d’intelligence artificielle en 2025, et la part monte à 40,43 % dans les activités professionnelles, scientifiques et techniques, le secteur auquel appartiennent le conseil et les études. Les usages les plus cités y sont l’analyse de textes, puis la génération d’images, de sons ou de vidéos.',
                'En Afrique francophone, le point de départ est différent. Le paiement et la relation client passent d’abord par le téléphone : d’après le rapport 2025 de la GSMA, l’Afrique subsaharienne comptait 1,1 milliard de comptes de mobile money enregistrés et plus de 280 millions de comptes actifs sur 30 jours à la fin de 2024. Un organisme de formation qui encaisse un acompte par Mobile Money et confirme l’inscription par WhatsApp est déjà numérique, même sans site. Ce qui manque le plus souvent, c’est le fil qui relie la demande, la proposition, la mission, la facture et le livrable.',
                'Les organismes de formation ont une contrainte supplémentaire : leurs financeurs exigent des preuves. Feuilles d’émargement, attestations, évaluations à chaud et à froid, programmes à jour, tout doit pouvoir être produit à la demande d’un fonds ou d’un auditeur. Un dossier tenu à la main fait perdre des heures à chaque dossier de prise en charge ; un dossier tenu dans un outil se sort en quelques clics.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Dans un cabinet de conseil ou un organisme de formation, quel travail gagne à passer par un outil, et à quels signes le voit-on ?',
            'intro' => 'Quand les associés passent plus de temps à retrouver une information qu’à conseiller, l’outil devient rentable. Ces signes reviennent chez les cabinets et les organismes qui demandent un cadrage ; trois suffisent à justifier un échange.',
            'items' => [
                ['titre' => 'Les demandes arrivent par dix canaux et se perdent', 'texte' => 'Un prospect écrit sur WhatsApp, un autre par le formulaire du site, un troisième par un appel à l’associé. Personne ne sait lequel a reçu une proposition, ni depuis combien de jours elle attend une réponse.'],
                ['titre' => 'Chaque proposition commerciale est réécrite de zéro', 'texte' => 'Le consultant copie l’ancienne offre, change le nom du client et oublie une ligne de l’ancien client. Une bibliothèque de modèles par type de mission règle ce risque et fait gagner une demi-journée par offre.'],
                ['titre' => 'Les temps ne sont connus qu’en fin de mois', 'texte' => 'Sans saisie quotidienne, un forfait glisse en dépassement sans que personne ne s’en aperçoive, et la rentabilité réelle d’une mission ne se lit qu’après coup, quand il est trop tard pour renégocier.'],
                ['titre' => 'Les livrables circulent par pièces jointes', 'texte' => 'Le client cherche la dernière version du rapport dans ses mails, un collaborateur modifie un fichier périmé, un document confidentiel part au mauvais destinataire.'],
                ['titre' => 'Les inscriptions aux formations se gèrent sur un cahier', 'texte' => 'Les stagiaires s’inscrivent par téléphone, les places restantes se comptent à la main, et la convocation, l’émargement et l’attestation sont refaits à chaque session.'],
                ['titre' => 'L’évaluation et le suivi des stagiaires prennent des heures', 'texte' => 'Les fiches papier se ressaisissent, les résultats n’alimentent aucun indicateur, et le bilan d’une session se fait de mémoire au moment de remettre le dossier au financeur.'],
                ['titre' => 'Le savoir du cabinet vit dans la tête de deux personnes', 'texte' => 'Méthodes, grilles d’analyse, anciens rapports : quand un associé part ou prend un congé long, le cabinet repart presque de zéro sur le sujet qu’il maîtrisait.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Un cabinet d’une personne qui facture trois missions par an n’a pas besoin d’un ERP : un site clair, un modèle de devis et un tableur bien tenu suffisent. Le chantier devient utile quand plusieurs personnes alimentent les mêmes dossiers.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels services de Richard conviennent à un cabinet ou à un organisme de formation ?',
            'legende' => 'Correspondance entre un besoin courant du secteur et le service qui y répond ; le périmètre exact de chaque projet figure dans le devis.',
            'entetes' => ['Besoin typique du cabinet ou de l’organisme', 'Ce qui est mis en place', 'Service'],
            'lignes'  => [
                ['Être trouvé par des dirigeants qui cherchent un conseil ou une formation', 'Site vitrine bilingue si besoin, pages par expertise et par ville desservie, références présentées avec l’accord des clients', '<a href="/services/site-vitrine-professionnel">Site vitrine professionnel</a>'],
                ['Promouvoir une session ou un séminaire précis', 'Page unique avec programme, dates, prix et formulaire d’inscription', '<a href="/services/landing-page-haute-conversion">Landing page à forte conversion</a>'],
                ['Apparaître sur « formation en gestion de projet à Cotonou » ou « cabinet QHSE à Abidjan »', 'Pages ciblées, balisage, contenus d’expertise sourcés, suivi des positions', '<a href="/services/referencement-naturel-seo">Référencement naturel (SEO)</a>'],
                ['Donner aux clients un accès sécurisé à leurs livrables et à l’avancement des missions', 'Espace client avec comptes, dépôt et téléchargement de documents, historique, notifications', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Suivre les missions, les temps passés et la facturation', 'Projets, feuilles de temps, devis, factures et indicateurs dans un ERP ou une application', '<a href="/services/integration-odoo">Intégration Odoo</a>'],
                ['Relier le formulaire, le tableur, le devis et le mail sans ressaisie', 'Flux n8n ou Make : demande reçue, fiche créée, accusé envoyé, rappel programmé', '<a href="/services/automatisation-ia">Automatisation et IA</a>'],
                ['Aider les consultants à rédiger et à synthétiser sans exposer les données des clients', 'Assistant sur les documents du cabinet, gabarits de rapport, relecture humaine obligatoire', '<a href="/services/integration-ia-entreprise">Intégration de l’IA en entreprise</a>'],
                ['Répondre aux questions des prospects et des stagiaires sur WhatsApp', 'Parcours de réponse, envoi de programmes, confirmation d’inscription, passage à un humain', '<a href="/services/integration-whatsapp">Intégration WhatsApp</a>'],
                ['Gérer le catalogue, les sessions et les inscriptions d’un organisme de formation', 'Catalogue de formations, calendrier des sessions, inscription en ligne, paiement, attestation', '<a href="/services/saas-espace-client">SaaS et espace client</a>'],
                ['Faire former ses consultants et assistants à ces outils', 'Séances sur les documents du cabinet, par métier', '<a href="/services/formation-en-entreprise">Formation en entreprise</a>'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels logiciels existent pour un cabinet de conseil, et quand garder l’existant ou le remplacer ?',
            'paragraphes' => [
                'Un cabinet de conseil a besoin de quatre briques : un fichier de contacts et d’opportunités, un outil de propositions et de facturation, un suivi des projets avec les temps passés, et un espace où déposer les livrables. Un ERP comme Odoo réunit les trois premières. Selon la documentation d’Odoo 20.0, l’application Feuilles de temps permet de saisir les heures par chronomètre, par grille ou depuis les tâches, de les valider par un responsable et, pour un projet facturable, de les rattacher à une ligne de commande pour facturer le temps réellement passé.',
                'Pour un organisme de formation, la documentation d’Odoo 20.0 présente une application eLearning où l’on charge des contenus, gère des participants, délivre des certifications par questionnaire et vend l’accès à un cours en ligne depuis le site. C’est utile pour une partie à distance ; les sessions en salle, l’émargement par demi-journée et les dossiers de prise en charge demandent en revanche un paramétrage propre au pays et au financeur. Les logiciels spécialisés dans la gestion d’organismes de formation, nombreux en France, couvrent ces points mieux qu’un ERP standard quand le cabinet est certifié et facture à des financeurs.',
                'La règle de Richard : garder l’existant s’il tient, et le relier. Un logiciel de gestion de formation qui produit déjà vos attestations et vos dossiers de financeur reste en place ; on lui ajoute un site, un formulaire d’inscription et un flux qui crée les fiches sans ressaisie. On remplace quand les données sont réparties dans quatre fichiers, que plus personne ne sait lequel fait foi, ou que l’éditeur n’assure plus de mise à jour. Le choix entre Odoo et Dolibarr se prépare avec le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo ou Dolibarr</a> ; Dolibarr, plus léger, convient à un petit cabinet qui n’a besoin que de devis, de facturation et d’un suivi simple des projets.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel outil pour quel besoin : tableur, ERP, logiciel de formation ou application sur mesure ?',
            'legende' => 'Aide à la décision de départ ; le choix définitif se fait au cadrage, sur vos volumes réels.',
            'entetes' => ['Situation du cabinet', 'Solution la plus économe', 'Quand passer à autre chose'],
            'lignes'  => [
                ['Un à trois consultants, quelques missions par an', 'Site vitrine, modèles de devis, tableur partagé', 'Quand les temps passés échappent à tout contrôle'],
                ['Cinq à vingt personnes, missions en parallèle', 'ERP avec projets, feuilles de temps et facturation', 'Quand le suivi demande des règles propres (forfaits mixtes, sous-traitants)'],
                ['Organisme de formation certifié, dossiers de financeurs', 'Logiciel de gestion de formation relié au site et à WhatsApp', 'Quand le catalogue en ligne ou le paiement par Mobile Money manque'],
                ['Cabinet avec espace client et livrables sensibles', 'Application web sur mesure ou espace client dédié', 'Quand la volumétrie ou les rôles dépassent un simple partage de fichiers'],
                ['Plusieurs pays, plusieurs devises', 'ERP avec une société par entité', 'Quand les refacturations internes se font encore à la main'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que peut faire l’IA dans un cabinet de conseil, et que ne doit-elle jamais faire ?',
            'intro' => 'L’IA est utile pour préparer, synthétiser et mettre en forme. Elle ne remplace ni le jugement du consultant ni l’engagement de signature. Voici la répartition proposée par Richard.',
            'items' => [
                ['titre' => 'Rédiger le premier jet d’un rapport', 'texte' => 'À partir des notes d’entretien et des chiffres fournis par le consultant, un assistant produit une trame, des tableaux et un résumé. Le consultant relit chaque phrase, vérifie chaque chiffre contre sa source et signe.'],
                ['titre' => 'Synthétiser des documents volumineux', 'texte' => 'Procès-verbaux, rapports d’activité, procédures de l’entreprise cliente : l’assistant les résume avec renvoi au passage d’origine, pour que le consultant retrouve la source en un clic.'],
                ['titre' => 'Préparer les supports de formation', 'texte' => 'Plans de séance, études de cas, quiz et corrigés sont proposés par l’assistant, puis adaptés par le formateur au public et à son contexte.'],
                ['titre' => 'Répondre aux premières questions des prospects', 'texte' => 'Programmes, dates, prix publiés, modalités d’inscription : un assistant WhatsApp répond ; tout devis, toute dérogation et toute question sensible passent à un humain.'],
                ['titre' => 'Ce que l’IA ne doit jamais faire : envoyer des données de clients sans cadre', 'texte' => 'Un cabinet est tenu à la confidentialité envers ses clients. Aucun document d’un client ne part vers un outil d’IA sans accord, sans contrat d’hébergement connu et sans suppression des données nominatives quand c’est possible.'],
                ['titre' => 'Ce que l’IA ne doit jamais faire : décider ou signer', 'texte' => 'Une recommandation, un avis d’audit, une note d’évaluation d’un stagiaire engagent un professionnel nommé. L’IA propose, l’humain décide, et la trace de cette décision est conservée.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que risque un cabinet qui laisse l’IA écrire sans relecture ?',
            'texte' => 'Un assistant peut inventer une source, une loi ou un chiffre avec assurance. Dans un rapport remis à un client, cette erreur engage le cabinet. Chaque donnée chiffrée d’un livrable doit renvoyer à un document vérifiable, chaque citation à une page, et le nom du relecteur humain doit figurer dans la trace du dossier. L’histoire d’<a href="/histoires/air-canada-chatbot">Air Canada</a>, condamnée pour ce que disait son chatbot, rappelle qu’une entreprise répond de ce que dit son assistant.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles obligations légales encadrent un cabinet ou un organisme de formation : certification, facturation, données personnelles ?',
            'paragraphes' => [
                'La certification qualité s’impose en France à qui veut être financé. Selon la page de la DREETS Normandie, tous les organismes de formation doivent être certifiés Qualiopi depuis le 1er janvier 2022 pour accéder aux fonds des OPCO, de l’État, des régions, de la Caisse des dépôts, de France Travail ou de l’Agefiph. La certification est valable trois ans, avec un audit de surveillance autour de 18 mois et un audit de renouvellement à trois ans. Pour un organisme basé hors de France, la question se pose seulement s’il vise ces financements : à confirmer auprès du financeur avant de lancer un projet. Les preuves demandées (programmes, évaluations, émargements, suivi des réclamations) se tiennent bien mieux dans un outil que dans des dossiers papier.',
                'En Afrique de l’Ouest, le financement de la formation passe par des fonds nationaux. Le FDFP, en Côte d’Ivoire, est l’institution de gestion de la formation professionnelle et finance quatre types d’actions : intégration, perfectionnement, promotion et reconversion ; son site indique que plus de 1 200 entreprises sont enrôlées sur sa plateforme FDFP Connect, et publie une procédure d’habilitation ainsi que la liste des opérateurs de formation habilités : un organisme qui vise ces financements commence donc par vérifier son habilitation. Au Bénin, le FODEFCA, établissement public créé par le décret n° 99-053 du 12 février 1999, a pour objet la formation professionnelle continue et l’apprentissage. Les conditions d’accès des prestataires et les pièces à fournir se confirment auprès du fonds avant de construire l’outil de dossier.',
                'La facturation dépend du pays. Au Bénin, selon le portail du gouvernement, les entreprises assujetties à la TVA émettent des factures normalisées, avec un identifiant de machine, une signature et un code électronique ; les consultants individuels, artisans et professions libérales ne sont en principe concernés qu’au-delà d’un chiffre d’affaires de 50 millions de FCFA. Côté français, le site impots.gouv.fr fixe deux dates : réception des factures électroniques par toutes les entreprises dès le 1er septembre 2026, émission par les PME et les micro-entreprises à partir du 1er septembre 2027. Un cabinet qui facture ses missions depuis un logiciel vérifie donc, avant de basculer ses envois, que l’outil suit ce calendrier.',
                'Les données personnelles s’ajoutent. Au Bénin, la loi n° 2017-20 portant code du numérique encadre les traitements, y compris les listes de stagiaires et les dossiers de clients. Les formalités à accomplir auprès de l’autorité béninoise se confirment avant la mise en service d’un fichier. En Côte d’Ivoire, la loi n° 2013-450 du 19 juin 2013 confie la protection des données à l’ARTCI ; les traitements s’y déclarent en principe, et les cas soumis à autorisation se confirment auprès de l’autorité. Au Sénégal, la loi n° 2008-12 prévoit une déclaration à la Commission de protection des données personnelles, et une autorisation préalable pour certains traitements sensibles, comme les données biométriques ou les numéros d’identification nationaux. En Europe, l’article 28 du RGPD, présenté par la CNIL, impose un contrat écrit avec tout sous-traitant, l’article 32 une sécurité adaptée au risque et l’article 33 la notification d’une violation de données dans les 72 heures quand c’est possible. Un cabinet qui confie des données à un prestataire à distance doit fixer ce cadre par écrit.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la digitalisation d’un cabinet ou d’un organisme de formation, pays par pays ?',
            'items' => [
                ['secteur' => 'Cabinet de conseil en gestion, Bénin', 'probleme' => 'Les demandes arrivent par WhatsApp, par mail et par téléphone, et les propositions sont réécrites à chaque fois.', 'solution' => 'Un formulaire de demande sur le site crée une fiche dans un tableau partagé, un modèle de proposition par type de mission est rempli en quelques minutes, et un rappel part automatiquement si le prospect n’a pas répondu au bout de quelques jours.'],
                ['secteur' => 'Organisme de formation QHSE, Côte d’Ivoire', 'probleme' => 'Les stagiaires s’inscrivent par téléphone, les fiches d’évaluation se remplissent sur papier et le dossier du financeur se reconstitue en fin de session.', 'solution' => 'Catalogue en ligne avec dates de session, inscription par formulaire, fiche d’évaluation remplie sur téléphone ou ordinateur, et export des listes et des évaluations pour le dossier du fonds, après vérification des pièces demandées auprès du FDFP.'],
                ['secteur' => 'Bureau d’études, Sénégal', 'probleme' => 'Les rapports de mission sont transmis par pièces jointes et plusieurs versions circulent chez le client.', 'solution' => 'Espace client avec un compte par interlocuteur, une version de référence par livrable, un journal des téléchargements et des droits limités à la mission concernée.'],
                ['secteur' => 'Cabinet de conseil, France', 'probleme' => 'Devis, temps passés et factures vivent dans trois outils, alors que la facturation électronique devient obligatoire à l’émission en 2027 pour les PME.', 'solution' => 'Projets et feuilles de temps reliés à la facturation dans un ERP, avec vérification de la conformité de la facture électronique avant la bascule des envois.'],
                ['secteur' => 'Centre de formation professionnelle, Cameroun', 'probleme' => 'Le centre vend des places par WhatsApp et se retrouve avec des acomptes impossibles à rapprocher des inscrits.', 'solution' => 'Paiement par Mobile Money depuis la page d’inscription, rapprochement automatique de chaque paiement avec la fiche du stagiaire et confirmation envoyée sur WhatsApp.'],
                ['secteur' => 'Cabinet d’audit qualité et formation, Belgique', 'probleme' => 'Les consultants veulent gagner du temps sur les comptes rendus d’audit sans exposer les données des clients.', 'solution' => 'Assistant d’IA sur un espace de documents du cabinet, gabarit de compte rendu, relecture et signature par le consultant, avec contrat de sous-traitance et sécurité vérifiés par écrit.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un projet de digitalisation pour un cabinet, du diagnostic au suivi ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez vos missions ou vos sessions, l’équipe qui les porte, les outils en place et ce qui coince. Après un premier échange gratuit, Richard dit sans détour si un site et un modèle de proposition suffisent, ou si un outil de suivi des missions se justifie.'],
                ['titre' => 'Diagnostic', 'duree' => 'Selon le projet', 'texte' => 'Une mission réelle est suivie de la demande du client à la facture, et une session de formation de l’inscription à l’attestation. Le diagnostic liste les ressaisies, les pertes de temps et les pièces que les financeurs réclament.'],
                ['titre' => 'Cadrage et priorités', 'duree' => 'Selon le projet', 'texte' => 'Les chantiers sont classés par gain et par effort : en général le site et le formulaire de demande d’abord, puis le suivi des missions, puis l’espace client et l’IA. Chaque palier a son devis.'],
                ['titre' => 'Réalisation par paliers', 'duree' => 'Site vitrine : 1 à 3 semaines ; application sur mesure : 1 à 3 mois', 'texte' => 'Chaque palier est mis en service avant d’ouvrir le suivant. Les données existantes (clients, catalogue, références) sont reprises avec contrôle des totaux, et vos équipes testent sur des cas réels.'],
                ['titre' => 'Recette et formation', 'duree' => 'Selon le projet', 'texte' => 'Chaque rôle déroule un scénario : l’associé envoie une proposition, le consultant saisit ses temps, l’assistante ouvre une session de formation, le client dépose un retour dans son espace. Les équipes sont formées sur leurs propres documents.'],
                ['titre' => 'Suivi', 'duree' => 'Selon le projet', 'texte' => 'Les premières semaines révèlent des réglages à reprendre. La <a href="/services/maintenance-support">maintenance</a> couvre ensuite l’assistance, les correctifs et les évolutions, comme l’ajout d’un financeur ou d’un pays.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la digitalisation d’un cabinet de conseil ou de formation ?',
            'intro'      => 'Pour un cabinet, trois points de départ sont publiés : la landing page d’une session, le site vitrine et le référencement naturel, convertis à 655,957 FCFA pour 1 €. Le suivi des missions, l’espace client, les inscriptions et l’IA sont chiffrés sur devis après le cadrage. Le règlement accepte Mobile Money (MTN, Moov), carte, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Landing page pour une session ou un séminaire', 'prix' => 'À partir de 150 000 FCFA (environ 229 €)', 'inclus' => ['Programme, dates, prix et formulaire d’inscription', 'Page pensée pour le téléphone']],
                ['offre' => 'Site vitrine du cabinet ou de l’organisme', 'prix' => 'À partir de 300 000 FCFA (environ 457 €)', 'inclus' => ['Pages par expertise et par formation', 'Formulaire de demande de devis']],
                ['offre' => 'Référencement naturel', 'prix' => 'À partir de 75 000 FCFA (environ 114 €)', 'inclus' => ['Pages ciblées sur vos expertises', 'Suivi des positions']],
                ['offre' => 'Suivi des missions, espace client, inscriptions, IA', 'prix' => 'Sur devis', 'inclus' => ['Cadrage et paliers', 'Reprise des données', 'Formation des équipes']],
            ],
            'variations' => [
                'Le nombre d’utilisateurs : associés, consultants, assistantes, formateurs.',
                'Le nombre de langues du site et de villes ou de pays desservis.',
                'Le nombre de formations, de sessions par an et de financeurs à gérer.',
                'Les documents à produire : attestations, émargements, rapports, certificats.',
                'Les connecteurs : WhatsApp, Mobile Money, ERP, comptabilité.',
                'L’état des données existantes : fichiers propres ou années de tableurs à dédoublonner.',
                'L’usage de l’IA : volume de documents, exigences de confidentialité, hébergement des données.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs fréquentes font échouer la digitalisation d’un cabinet ?',
            'intro' => 'Les causes suivantes reviennent d’un cabinet à l’autre, presque toutes se règlent pendant le cadrage.',
            'items' => [
                ['titre' => 'Acheter un ERP avant de décrire ses missions', 'texte' => 'Un cabinet qui facture trois types de mission n’a pas besoin des quarante applications d’un ERP. On commence par une mission réelle suivie de bout en bout.'],
                ['titre' => 'Oublier la saisie des temps', 'texte' => 'Si saisir ses heures prend plus de deux minutes par jour, les consultants cessent de le faire. Le chronomètre, la grille hebdomadaire ou la saisie depuis la tâche doivent être testés avec eux.'],
                ['titre' => 'Mettre des livrables confidentiels dans un espace partagé mal réglé', 'texte' => 'Un lien public, un dossier partagé trop large ou un ancien collaborateur resté inscrit exposent un rapport. Les droits se règlent par client et par mission, et se revoient à chaque départ.'],
                ['titre' => 'Envoyer des documents clients à un assistant d’IA sans cadre', 'texte' => 'Sans contrat, sans anonymisation et sans accord du client, c’est une fuite de données. L’assistant s’installe sur un périmètre de documents défini par écrit.'],
                ['titre' => 'Découvrir les pièces du financeur en fin de session', 'texte' => 'Si l’émargement, le programme ou l’évaluation n’ont pas été capturés pendant la session, le dossier ne se reconstitue pas. Les pièces se définissent au cadrage avec le fonds.'],
                ['titre' => 'Annoncer un agrément ou une certification qu’on n’a pas', 'texte' => 'Un site qui affiche une certification absente ou périmée expose l’organisme. Les mentions se vérifient auprès de l’organisme certificateur.'],
                ['titre' => 'Négliger les références clients', 'texte' => 'Citer un client sans son accord, ou publier un rapport confidentiel comme exemple, abîme la confiance. On ne publie que ce que le client a autorisé.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment former les équipes d’un cabinet de conseil à ces outils ?',
            'paragraphes' => [
                'Un outil adopté vaut plus qu’un outil parfait. Richard a déjà formé des chefs d’entreprise et dirigeants, des managers, des professionnels des ressources humaines et des assistants de direction et secrétaires, soit les quatre publics qui font tourner un cabinet : celui qui décide, celui qui encadre une équipe de consultants, celle qui recrute et suit la formation du personnel, et celle qui tient l’agenda, le courrier et les archives.',
                'Les parcours par métier sont décrits sur les pages <a href="/formations/metier/chefs-entreprise-dirigeants">Formation pour chefs d’entreprise et dirigeants</a>, <a href="/formations/metier/managers">Formation pour managers</a>, <a href="/formations/metier/ressources-humaines">Formation pour les ressources humaines</a> et <a href="/formations/metier/assistants-direction">Formation pour assistants de direction</a>. Les fiches de formation complètent ces parcours, notamment <a href="/formations/ia-en-entreprise">IA en entreprise</a> et <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la digitalisation de votre cabinet à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Dans ce secteur, Richard a livré un site bilingue de plus de cent pages pour GC Pro Consulting, à Cotonou : catalogue de formations, inscriptions et demandes de devis en ligne, pages locales pour chaque ville desservie. GC Pro est un client direct. Il a aussi travaillé avec INOVIS Côte d’Ivoire, à Abidjan : un site ancien et lent remplacé par un site rapide qui présente les références du cabinet, de 2,26 Mo à 577 Ko pour la page d’accueil. Ce projet a été réalisé en sous-traitance pour Digital Développement.',
                'Pour AT Consulting International, à Abidjan, il a réalisé un catalogue de dix-sept formations et une fiche d’évaluation des stagiaires remplie en ligne, également réalisé en sous-traitance pour Digital Développement. Ces projets sont présentés sur la page <a href="/realisations/">Réalisations</a>.',
                'Richard cumule plus de 6 ans de métier et une formation à EPITECH (2022). Pour un cabinet, il propose de procéder un palier à la fois, avec un devis par palier et les accès remis à votre nom. Il crée aussi <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp à IA, et co-fonde <a href="https://audyxa.com">Audyxa</a>. Son parcours complet figure sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez savoir par où commencer pour votre cabinet ou votre organisme de formation ?',
            'texte'  => 'Décrivez vos missions ou vos sessions de formation, l’équipe, vos outils et vos financeurs : réponse sous 24 heures, puis un plan par paliers chiffré à l’issue d’un premier échange gratuit.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet'],
        ],
    ],

    'faq' => [
        ['q' => 'Un petit cabinet de conseil a-t-il besoin d’un ERP ?', 'r' => 'Pas forcément. Un cabinet d’un à trois consultants s’en sort avec un site clair, des modèles de devis et un tableur partagé. Un ERP se justifie quand plusieurs personnes saisissent des temps et des factures sur les mêmes missions, et que la rentabilité d’une mission ne se lit plus qu’en fin d’année.'],
        ['q' => 'Peut-on suivre les temps passés et les facturer dans Odoo ?', 'r' => 'Oui. Selon la documentation d’Odoo 20.0, l’application Feuilles de temps permet de saisir les heures par chronomètre, par grille ou depuis les tâches, de les faire valider par un responsable et de facturer le temps passé quand le projet est rattaché à une ligne de commande.'],
        ['q' => 'Un organisme de formation hors de France doit-il être certifié Qualiopi ?', 'r' => 'La certification est exigée des organismes qui veulent accéder aux fonds publics ou mutualisés français, comme ceux des OPCO, selon la DREETS Normandie. Un organisme qui ne vise pas ces financements n’y est pas tenu ; la question se confirme auprès du financeur concerné avant de lancer le projet.'],
        ['q' => 'Comment un organisme ivoirien ou béninois prépare-t-il un dossier pour le FDFP ou le FODEFCA ?', 'r' => 'Le FDFP finance des actions d’intégration, de perfectionnement, de promotion et de reconversion ; le FODEFCA finance la formation continue et l’apprentissage au Bénin. Les pièces et les conditions d’éligibilité se confirment auprès du fonds. On configure ensuite l’outil pour produire listes, émargements et évaluations dans le format demandé.'],
        ['q' => 'Peut-on mettre un espace client pour les livrables d’un cabinet ?', 'r' => 'Oui. Chaque client a un compte, voit uniquement les documents de ses missions et reçoit une notification quand un livrable est déposé. On conserve l’historique des versions et des téléchargements. Les droits se revoient à chaque départ ou changement d’interlocuteur.'],
        ['q' => 'L’IA peut-elle rédiger les rapports d’un cabinet ?', 'r' => 'Elle peut préparer un premier jet et un résumé à partir des notes et des chiffres du consultant. Elle ne signe rien : le consultant relit chaque phrase, contrôle chaque chiffre contre sa source et reste responsable du rapport remis au client.'],
        ['q' => 'Peut-on mettre les documents d’un client dans ChatGPT ou un autre assistant ?', 'r' => 'Seulement avec l’accord du client, un contrat qui fixe le traitement et l’hébergement des données, et l’anonymisation quand c’est possible. À défaut, on utilise un assistant installé sur un périmètre de documents du cabinet défini par écrit.'],
        ['q' => 'Peut-on encaisser les inscriptions aux formations par Mobile Money ?', 'r' => 'Oui, avec un agrégateur de paiement relié au formulaire d’inscription : chaque paiement se rapproche automatiquement de la fiche du stagiaire, et la confirmation part par WhatsApp.'],
        ['q' => 'Qui garde la main sur le site et les outils après la livraison ?', 'r' => 'Le cabinet. Les comptes d’administration, l’hébergement, le code et la documentation sont remis à votre nom, et une formation permet à votre assistante ou à votre responsable de gérer le catalogue et les sessions.'],
        ['q' => 'Combien coûte un site pour un cabinet de conseil ou un organisme de formation ?', 'r' => 'Pour une landing page, le tarif de départ publié est de 150 000 FCFA (environ 229 €) ; pour un site vitrine, 300 000 FCFA (environ 457 €), au taux de 655,957 FCFA pour 1 €. Le suivi des missions, l’espace client, les inscriptions en ligne et l’IA se chiffrent sur devis, après un premier échange gratuit.'],
    ],

    'sources' => [
        ['titre' => 'DREETS Normandie, Qualiopi : la certification qualité des organismes de formation', 'url' => 'https://normandie.dreets.gouv.fr/QUALIOPI-la-certification-qualite-des-organismes-de-formation', 'date' => '2026-10-07'],
        ['titre' => 'FDFP, Fonds de Formation Professionnelle de Côte d’Ivoire', 'url' => 'https://www.fdfp.ci', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, stratégie nationale EFTP : synergie entre le CPPE et le FODEFCA (rappel du décret n° 99-053 du 12 février 1999)', 'url' => 'https://www.gouv.bj/article/1528/mise-oeuvre-strategie-nationale-eftp-plaidoyer-ministre-kouaro-yves-chabi-synergie-actions-entre-cppe-fodefca/', 'date' => '2026-10-07'],
        ['titre' => 'Eurostat, utilisation de l’intelligence artificielle dans les entreprises', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=Use_of_artificial_intelligence_in_enterprises', 'date' => '2026-10-07'],
        ['titre' => 'GSMA, The State of the Industry Report on Mobile Money 2025', 'url' => 'https://gsma.com/sotir/wp-content/uploads/2025/04/The-State-of-the-Industry-Report-2025_English.pdf', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, feuilles de temps', 'url' => 'https://www.odoo.com/documentation/20.0/applications/services/timesheets.html', 'date' => '2026-10-07'],
        ['titre' => 'Documentation Odoo 20.0, eLearning', 'url' => 'https://www.odoo.com/documentation/20.0/applications/websites/elearning.html', 'date' => '2026-10-07'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées', 'url' => 'https://www.gouv.bj/actualite/522/tout-savoir-sur-les-factures-normalisees-au-benin/', 'date' => '2026-10-07'],
        ['titre' => 'impots.gouv.fr, réforme de la facturation électronique : à partir de quand suis-je concerné', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-07'],
        ['titre' => 'CNIL, RGPD chapitre IV (articles 28, 32 et 33)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-07'],
        ['titre' => 'ARTCI, autorité de protection des données de Côte d’Ivoire (loi n° 2013-450)', 'url' => 'https://www.artci.ci', 'date' => '2026-10-07'],
        ['titre' => 'Autorité de protection des données personnelles de Côte d’Ivoire', 'url' => 'https://www.autoritedeprotection.ci', 'date' => '2026-10-07'],
        ['titre' => 'Sénégal, loi n° 2008-12 sur la protection des données à caractère personnel (texte intégral, WIPO Lex)', 'url' => 'https://www.wipo.int/wipolex/edocs/lexdocs/laws/fr/sn/sn009fr.pdf', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'services'    => ['site-vitrine-professionnel', 'saas-espace-client', 'automatisation-ia', 'integration-ia-entreprise', 'referencement-naturel-seo', 'landing-page-haute-conversion', 'integration-odoo', 'integration-whatsapp'],
        'metiers'     => ['chefs-entreprise-dirigeants', 'managers', 'ressources-humaines', 'assistants-direction'],
        'formations'  => ['ia-en-entreprise', 'ia-generative-dirigeants', 'odoo-utilisateurs', 'conduite-du-changement', 'gouvernance-ia'],
        'comparatifs' => ['odoo-vs-dolibarr'],
        'histoires'   => ['air-canada-chatbot', 'hertz-accenture'],
    ],
];
                
