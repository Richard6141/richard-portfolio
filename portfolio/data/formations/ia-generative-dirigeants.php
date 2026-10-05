<?php
// ============================================================
// data/formations/ia-generative-dirigeants.php · Fiche formation « IA
// générative pour dirigeants » (vague 1B, lot A, domaine
// intelligence-artificielle). Angle propre : décider, budgéter, choisir les
// outils et piloter un premier projet IA ; pas de prise en main détaillée
// (fiche ia-en-entreprise), pas de charte complète (gouvernance-ia), pas de
// feuille de route numérique globale (strategie-transformation-digitale).
// Reprend de l'ancienne page /formation-ia-entreprise la « session
// dirigeants » de deux heures (ce qu'on autorise, ce qu'on interdit, les
// données qui ne sortent jamais, cadrer l'usage avant qu'il ne s'installe
// seul), recommandée en ouverture et combinable avec les autres formats ;
// son prix est ignoré. Faits externes relevés le 05/10/2026 : Commission
// européenne (calendrier du règlement sur l'IA, article 4), Gartner, McKinsey,
// Eurostat, OpenAI, Anthropic, Microsoft, Google, EUR-Lex, UIT, SGG du Bénin,
// FDFP, 3FPT, France Compétences. Aucune certification attribuée à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA générative pour dirigeants : décider où l\'IA sert votre entreprise, fixer son budget, choisir les outils et piloter un premier projet sans perdre le contrôle',
    'title'   => 'Formation IA générative pour dirigeants | Richard SALANON',
    'meta'    => 'Formation IA générative pour dirigeants : choisir les usages utiles, budgéter les outils, fixer les règles et piloter un premier projet IA. Sur devis.',
    'en_bref' => 'Cette formation s\'adresse aux dirigeants, gérants et comités de direction qui doivent décider quoi faire de l\'IA générative : quels usages retenir, quel budget prévoir, quels outils acheter ou faire développer, quelles règles poser et comment piloter un premier projet mesurable. Elle dure une journée en deux demi-journées, ou deux heures en session d\'ouverture, avec une revue du projet pilote six semaines plus tard en option. Elle se tient dans vos locaux, à distance, en formule hybride ou en session réunissant plusieurs entreprises. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '1 jour en 2 demi-journées, ou session de 2 heures',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : mesurer ce que l\'IA générative change pour votre entreprise et poser les règles de départ',
            'duree'  => '3 h 30',
            'points' => [
                'Démonstration conduite par le formateur sur trois documents fournis par l\'entreprise : ce qu\'un assistant produit en quelques minutes, et l\'endroit précis où il se trompe.',
                'Les quatre familles d\'usages pour une organisation : produire des écrits, exploiter des documents, répondre aux clients, préparer des décisions ; pour chacune, les données qu\'elle exige et le contrôle qu\'elle impose.',
                'Ce que montrent les enquêtes publiques d\'adoption, en Europe et ailleurs : beaucoup d\'essais, peu de résultats mesurés au niveau de l\'entreprise, et les raisons de cet écart.',
                'Tour de table : qui, dans l\'entreprise, se sert déjà d\'un assistant, sur quel compte et avec quelles données.',
                'Les cinq décisions de départ : ce qu\'on autorise, ce qu\'on interdit, les données qui ne sortent jamais, qui valide un usage nouveau, sur quels comptes on travaille.',
                'Exercice en comité : chaque participant apporte trois idées d\'usage, puis le groupe les classe avec la grille de sélection.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : choisir la famille d\'outils, construire le budget et cadrer le premier projet',
            'duree'  => '3 h 30',
            'points' => [
                'Trois voies et leurs conséquences : abonnements d\'équipe, fonctions d\'IA des logiciels déjà payés, projet sur mesure branché par API.',
                'Lire une offre d\'éditeur comme un acheteur : prix par siège, engagement, usage des données, administration des comptes, export et sortie.',
                'Budget sur douze mois du cas retenu : licences, temps interne, formation des équipes, prestataire, consommation d\'API, marge pour l\'imprévu.',
                'Fiche du projet pilote : périmètre, responsable nommé, données utilisées, mesure de départ, indicateur suivi, critère d\'arrêt, durée de six à huit semaines.',
                'Les questions à poser à un éditeur ou à un prestataire avant de signer, et les réponses qui doivent faire reculer.',
                'Restitution : rédaction en séance de la note de décision d\'une page, relue et validée par la direction.',
            ],
        ],
        [
            'titre'  => 'Revue à six semaines, en option : poursuivre, corriger ou arrêter le projet pilote',
            'duree'  => '3 h',
            'points' => [
                'Lecture de l\'indicateur du pilote face à la mesure de départ, avec les chiffres réels et non les impressions.',
                'Coûts constatés face au budget : licences, heures passées, consommation, temps de relecture.',
                'Incidents relevés : erreurs envoyées, données exposées, contournements des règles, réclamations.',
                'Décision formelle : étendre, corriger ou arrêter, et ce que chaque option engage pour le trimestre suivant.',
                'Choix du deuxième cas d\'usage dans la grille, ou décision d\'attendre.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '1 jour en 2 demi-journées, ou session d\'ouverture de 2 heures ; revue à six semaines en option'],
        ['l' => 'Public', 'v' => 'Dirigeants, gérants, associés et comités de direction, sans prérequis technique'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 8 décideurs au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous décider à la fin de la journée, et qu\'est-ce que la formation ne couvre pas ?',
            'paragraphes' => [
                'Un dirigeant n\'a pas besoin de savoir rédiger la consigne parfaite. Il doit savoir répondre à cinq questions que personne d\'autre ne tranchera à sa place : où l\'IA générative apporte-t-elle quelque chose de mesurable dans son entreprise, combien cela coûte-t-il vraiment, quel type d\'outil retenir, quelles règles imposer dès maintenant, et comment savoir dans deux mois si le premier projet a réussi. Cette journée est construite autour de ces cinq décisions, sur les chiffres et les idées de votre propre comité.',
                'À la fin de la journée, la direction repart avec des livrables concrets : une liste de trois cas d\'usage classés selon une grille partagée ; les cinq règles de départ écrites et datées ; le choix argumenté d\'une famille d\'outils ; un budget sur douze mois pour le premier cas ; la fiche du projet pilote, avec son responsable, sa mesure de départ et son critère d\'arrêt ; une liste de questions à poser aux fournisseurs. Le tout tient dans une note de décision d\'une page, rédigée en séance.',
                'La formation ne fait pas de vous un utilisateur expert : la prise en main quotidienne des assistants par les équipes relève de la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>. Elle ne rédige pas non plus la charte complète, l\'inventaire des usages et la répartition des rôles de contrôle, qui sont l\'objet de la formation <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>. Et si votre question porte sur l\'ensemble du numérique (logiciels de gestion, site, processus), la <a href="/formations/strategie-transformation-digitale">formation en stratégie de transformation digitale</a> construit cette feuille de route plus large.',
                'Elle ne remplace pas davantage un avis juridique : le règlement européen sur l\'IA, la protection des données et le secret professionnel y sont abordés sous l\'angle des décisions à prendre, et détaillés pour les équipes dans la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>. Enfin, aucun gain chiffré n\'est promis : la journée apprend justement à fixer une mesure de départ, pour que le résultat du premier projet se constate au lieu de s\'affirmer.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, et que faut-il préparer avant la journée ?',
            'intro' => 'La journée vise les personnes qui engagent le budget et la responsabilité de l\'entreprise. Aucune connaissance technique n\'est attendue ; il faut en revanche connaître ses chiffres et accepter de trancher en séance.',
            'items' => [
                ['titre' => 'Dirigeants de PME et gérants', 'texte' => 'Directeurs généraux, gérants, fondateurs et associés de structures de cinq à quelques centaines de personnes, qui reçoivent des propositions d\'outils d\'IA chaque semaine et veulent une méthode pour choisir, plutôt qu\'un avis de plus.'],
                ['titre' => 'Comités de direction', 'texte' => 'Directions financière, commerciale, des ressources humaines, des opérations et des systèmes d\'information, réunies pour décider ensemble. C\'est le format le plus efficace : la décision prise en commun n\'a pas à être revendue ensuite à chaque direction.'],
                ['titre' => 'Responsables d\'ONG, d\'associations et de structures publiques', 'texte' => 'Coordinateurs de programmes, directeurs pays, secrétaires généraux, qui doivent concilier les attentes des bailleurs ou de la tutelle, des données sensibles et des moyens limités.'],
                ['titre' => 'Ce qui n\'est pas exigé', 'texte' => 'Avoir déjà utilisé ChatGPT, Claude, Gemini ou Copilot n\'est pas nécessaire. Ceux qui les utilisent déjà y gagnent une grille de lecture ; ceux qui ne les ont jamais ouverts voient en démonstration ce qu\'ils font et ne font pas.'],
                ['titre' => 'La préparation demandée', 'texte' => 'Un questionnaire de quinze minutes rempli par chaque participant ; trois idées d\'usage par personne ; quelques ordres de grandeur, comme les heures passées chaque mois sur les tâches visées ; et trois documents non confidentiels pour la démonstration du matin.'],
                ['titre' => 'Le matériel', 'texte' => 'Une salle avec un écran de projection et une connexion stable pour la démonstration ; un ordinateur pour deux participants suffit, car l\'essentiel du travail se fait sur papier, au tableau et dans le modèle de budget remis.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment la grille de sélection départage-t-elle les idées de cas d\'usage ?',
            'legende' => 'La grille est remplie en comité pendant la matinée. Chaque idée reçoit une note de 1 à 3 par critère ; une idée qui cumule deux signaux d\'alerte n\'est pas retenue comme premier projet, même si elle séduit.',
            'entetes' => ['Critère', 'Question posée en comité', 'Signal favorable', 'Signal d\'alerte'],
            'lignes'  => [
                ['Valeur', 'Que gagne l\'entreprise si cela fonctionne : des heures, des ventes, des délais, moins d\'erreurs ?', 'Un gain qu\'on sait chiffrer aujourd\'hui, même grossièrement', 'Un bénéfice décrit seulement par « modernité » ou « image »'],
                ['Fréquence', 'Combien de fois par semaine la tâche revient-elle ?', 'Une tâche quotidienne ou hebdomadaire, répétée par plusieurs personnes', 'Une tâche rare, faite deux fois par an'],
                ['Données', 'Les informations nécessaires existent-elles, propres et accessibles ?', 'Des documents ou des fichiers déjà rangés et à jour', 'Des données éparpillées, manuscrites ou contradictoires'],
                ['Sensibilité', 'Que contient la tâche : données personnelles, secret d\'affaires, santé, salaires ?', 'Des contenus publics ou internes sans données nominatives', 'Des dossiers de clients, de patients, de salariés ou de bénéficiaires'],
                ['Gravité d\'une erreur', 'Que se passe-t-il si l\'outil se trompe et que personne ne le voit ?', 'Une erreur visible et rattrapable avant tout envoi', 'Une erreur qui engage l\'entreprise : prix, contrat, décision sur une personne'],
                ['Effort de mise en route', 'Faut-il un abonnement, un réglage ou un développement ?', 'Faisable avec un outil existant en quelques semaines', 'Un projet technique de plusieurs mois avant le premier résultat'],
                ['Mesurabilité', 'Saura-t-on dire dans deux mois si cela a marché ?', 'Un indicateur simple, relevé avant le lancement', 'Aucune mesure possible, ou mesure laissée à l\'appréciation de chacun'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment la journée s\'organise-t-elle, du premier échange à la décision ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez l\'entreprise, la composition du comité, les outils déjà payés et ce qui motive la demande : une proposition reçue, un usage sauvage constaté, une demande d\'un client ou d\'un bailleur, une simple curiosité. Ce dernier cas mérite souvent la session courte de deux heures plutôt que la journée.'],
                ['titre' => 'Entretien avec le dirigeant', 'duree' => 'Une heure, deux semaines avant', 'texte' => 'Un entretien individuel pour comprendre les priorités de l\'année, les sujets sensibles à ne pas aborder devant tout le comité et le niveau de connaissance de chacun.'],
                ['titre' => 'Questionnaire et idées', 'duree' => 'Une semaine avant', 'texte' => 'Chaque participant remplit le questionnaire et envoie ses trois idées d\'usage. Le formateur les regroupe, élimine les doublons et prépare la démonstration sur les documents transmis.'],
                ['titre' => 'Journée de direction', 'duree' => 'Deux demi-journées de 3 h 30', 'texte' => 'Le matin pour comprendre et poser les règles, l\'après-midi pour chiffrer et cadrer. Le formateur anime, apporte les éléments de marché et tient le crayon ; les décisions restent au comité.'],
                ['titre' => 'Note de décision', 'duree' => 'Remise sous 48 heures', 'texte' => 'La note rédigée en séance est mise au propre, avec le budget, la fiche du projet pilote et les règles de départ. Elle sert de base à la communication interne vers les équipes.'],
                ['titre' => 'Projet pilote', 'duree' => 'Six à huit semaines', 'texte' => 'Le responsable désigné conduit le pilote. Un canal direct reste ouvert avec le formateur pour les questions de mise en œuvre pendant le mois qui suit la journée.'],
                ['titre' => 'Revue du pilote', 'duree' => 'Une demi-journée, en option', 'texte' => 'Le comité se réunit à nouveau, chiffres en main, pour étendre, corriger ou arrêter. C\'est la séance qui transforme un essai en décision de gestion.'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Faut-il acheter des abonnements, utiliser l\'IA de vos logiciels ou lancer un projet sur mesure ?',
            'options'  => ['Abonnements d\'équipe (ChatGPT, Claude, Gemini)', 'IA incluse dans les logiciels déjà payés (Microsoft 365, Google Workspace, ERP)', 'Projet sur mesure relié par API'],
            'criteres' => [
                ['critere' => 'Délai avant le premier résultat', 'valeurs' => ['Quelques jours', 'Quelques jours à quelques semaines, selon les licences', 'Plusieurs semaines à plusieurs mois']],
                ['critere' => 'Coût de départ', 'valeurs' => ['Faible : un prix par siège et par mois', 'Faible à moyen : une option ajoutée à un abonnement existant', 'Élevé : conception, développement, tests']],
                ['critere' => 'Coût dans la durée', 'valeurs' => ['Proportionnel au nombre de comptes', 'Proportionnel au nombre de licences', 'Consommation à l\'usage, souvent modeste, plus la maintenance']],
                ['critere' => 'Maîtrise des données', 'valeurs' => ['Bonne avec une offre professionnelle administrée, faible avec des comptes personnels', 'Données restant dans l\'environnement déjà contractualisé', 'Maximale si le projet est bien conçu, à vérifier dans le contrat']],
                ['critere' => 'Adaptation au métier', 'valeurs' => ['Générale : dépend de la qualité des consignes', 'Limitée aux fonctions prévues par l\'éditeur', 'Forte : l\'outil suit vos processus et vos données']],
                ['critere' => 'Compétences internes nécessaires', 'valeurs' => ['Utilisateurs formés', 'Utilisateurs formés et un administrateur', 'Un responsable de projet et un prestataire ou une équipe technique']],
                ['critere' => 'Risque principal', 'valeurs' => ['Licences achetées puis inutilisées', 'Payer une option que personne n\'active', 'Projet coûteux qui ne dépasse pas la démonstration']],
            ],
            'verdict'  => 'Pour un premier projet, la plupart des entreprises commencent par la voie la moins coûteuse qui couvre le cas retenu, souvent l\'IA déjà incluse dans leurs outils ou quelques abonnements d\'équipe. Le projet sur mesure se justifie quand le cas est fréquent, propre à votre métier et déjà prouvé à petite échelle ; il relève alors de la formation <a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels existants</a> ou d\'une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a>.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Combien coûtent les outils d\'IA générative pour une équipe de dix personnes ?',
            'legende' => 'Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée (la page de Google a été affichée en euros, pour la France). Les totaux sur douze mois sont calculés à partir de ces prix ; ils ne comprennent ni le temps interne ni la formation, et ne font pas partie du prix de la formation.',
            'entetes' => ['Poste de dépense', 'Offre', 'Prix public de l\'éditeur', 'Ordre de grandeur pour 10 personnes sur 12 mois'],
            'lignes'  => [
                ['Assistant d\'équipe', 'ChatGPT Business (OpenAI)', '20 dollars par utilisateur et par mois en facturation annuelle, 25 dollars au mois, à partir de 2 utilisateurs ; OpenAI indique ne pas entraîner ses modèles sur les données de l\'entreprise par défaut', 'Environ 2 400 dollars en annuel'],
                ['Assistant d\'équipe', 'Claude Team, siège standard (Anthropic)', '20 dollars par siège et par mois en annuel, 25 dollars au mois ; siège premium à 100 dollars en annuel', 'Environ 2 400 dollars en sièges standard'],
                ['IA dans la suite bureautique', 'Microsoft 365 Copilot Business', '21 dollars par utilisateur et par mois en annuel, ramenés à 18 dollars en promotion du 1er juillet au 31 décembre 2026 ; 25,20 dollars au mois ; nécessite un abonnement Microsoft 365 Business', 'Environ 2 520 dollars au prix normal, en plus de l\'abonnement Microsoft 365'],
                ['Suite bureautique avec IA incluse', 'Google Workspace Business Standard', '13,60 euros par utilisateur et par mois, Gemini compris dans Gmail, Docs et Meet ; formule Business Starter à 6,80 euros', 'Environ 1 632 euros, messagerie et documents compris'],
                ['Consommation d\'API pour un projet sur mesure', 'OpenAI gpt-5-mini ; Anthropic Claude Haiku 4.5 et Claude Sonnet 5.5', 'Par million de jetons, entrée puis sortie : 0,25 et 2 dollars (gpt-5-mini) ; 1 et 5 dollars (Haiku 4.5) ; 2 et 10 dollars (Sonnet 5.5)', 'Pour 3 000 questions par mois de 2 000 jetons en entrée et 500 en sortie : environ 4,50 dollars par mois avec gpt-5-mini, 27 dollars avec Sonnet 5.5'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Où passe vraiment l\'argent d\'un premier projet d\'IA ?',
            'paragraphes' => [
                'Le tableau précédent surprend souvent les comités : la consommation d\'un modèle par API coûte parfois quelques dollars par mois, quand la direction s\'attendait à des sommes importantes. L\'erreur inverse est plus fréquente encore : croire que le prix de l\'outil résume le coût du projet. Dans un premier projet, les postes lourds sont ailleurs : le temps des équipes pour préparer les données, la relecture des résultats, la formation, l\'accompagnement d\'un prestataire et le temps du responsable du pilote.',
                'La journée apprend donc à construire un budget complet sur douze mois, poste par poste, avec une ligne pour l\'imprévu. Le temps interne y est valorisé, même s\'il ne donne lieu à aucune facture : dix heures par semaine d\'un cadre pendant deux mois représentent un investissement réel. Un projet qui n\'a pas de budget de temps échoue rarement par manque d\'argent ; il échoue parce que personne n\'a eu le temps de s\'en occuper.',
                'Reste la question de la devise et du moyen de paiement. Les éditeurs facturent en dollars ou en euros, par carte bancaire internationale, et n\'acceptent pas le Mobile Money. Pour une entreprise d\'Afrique francophone, la décision porte aussi sur la carte utilisée, le titulaire des comptes, le suivi des renouvellements automatiques et le traitement comptable de ces abonnements étrangers. Ce sont des détails d\'intendance, mais ils bloquent plus de projets qu\'on ne le croit.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles questions poser à un éditeur ou à un prestataire avant de signer ?',
            'intro' => 'Les propositions commerciales autour de l\'IA se ressemblent toutes en démonstration. Ces questions, travaillées l\'après-midi, servent à les départager ; une réponse floue sur l\'une d\'elles suffit à suspendre la signature.',
            'items' => [
                ['titre' => 'Que deviennent nos données ?', 'texte' => 'Servent-elles à entraîner les modèles, où sont-elles hébergées, combien de temps sont-elles conservées, qui peut y accéder chez le fournisseur ? La réponse doit figurer dans le contrat ou dans les conditions de l\'offre, pas seulement dans la bouche du commercial.'],
                ['titre' => 'Existe-t-il un contrat de sous-traitance des données ?', 'texte' => 'En Europe, l\'article 28 du RGPD impose de ne recourir qu\'à des sous-traitants présentant des garanties suffisantes, liés par un contrat qui fixe l\'objet, la durée, la finalité et les catégories de données. En Afrique francophone, les lois nationales posent des exigences voisines.'],
                ['titre' => 'Qui administre les comptes ?', 'texte' => 'L\'entreprise doit pouvoir créer et fermer les accès, récupérer les conversations et documents d\'un salarié qui part, et voir qui utilise quoi. Sans console d\'administration, les comptes restent de fait personnels.'],
                ['titre' => 'Comment sort-on ?', 'texte' => 'Durée d\'engagement, préavis, export des données et des consignes dans un format lisible, sort des développements réalisés. Un engagement de trois ans sur un marché qui change tous les trimestres doit être justifié par une remise réelle.'],
                ['titre' => 'Combien coûtera l\'usage dans un an ?', 'texte' => 'Pour un projet facturé à la consommation, demandez une estimation sur votre volume, un plafond de dépense et une alerte. Pour un prix par siège, vérifiez le prix après la période promotionnelle.'],
                ['titre' => 'Pouvez-vous le montrer sur nos documents ?', 'texte' => 'Une démonstration sur des exemples choisis par le fournisseur ne prouve rien. Demandez un essai sur trois de vos documents, anonymisés, avec les erreurs affichées autant que les réussites.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se déroule une formation de direction : groupe, méthode, supports et suivi ?',
            'intro' => 'Une formation de dirigeants ne ressemble pas à un cours. Elle tient de l\'atelier de décision : le formateur apporte méthode, faits et contradiction, le comité apporte ses priorités et tranche.',
            'items' => [
                ['titre' => 'Un groupe de décideurs', 'texte' => 'Huit personnes au plus, idéalement le comité qui arbitrera ensuite les budgets. Mélanger dirigeants et équipes dans la même séance freine la parole des uns comme des autres.'],
                ['titre' => 'Vos idées, vos chiffres', 'texte' => 'Les exercices partent des idées envoyées par les participants et des ordres de grandeur de l\'entreprise. Aucun cas d\'école n\'est plaqué sur votre activité.'],
                ['titre' => 'Une démonstration, pas un atelier de saisie', 'texte' => 'Le formateur manipule l\'outil à l\'écran sur vos documents ; les participants observent, questionnent et repèrent les erreurs. Ceux qui veulent pratiquer peuvent le faire sur les ordinateurs disponibles, sans que la journée en dépende.'],
                ['titre' => 'Des désaccords mis sur la table', 'texte' => 'Le directeur financier qui craint les coûts, la responsable des ressources humaines inquiète pour les postes, le commercial pressé d\'avancer : la grille et le budget servent à confronter ces points de vue sur des critères communs.'],
                ['titre' => 'Les supports remis', 'texte' => 'La grille de sélection, le modèle de budget sur douze mois, la fiche de projet pilote, la liste des questions aux fournisseurs, les supports de la journée et une attestation nominative, dans des formats que l\'entreprise peut modifier.'],
                ['titre' => 'Le suivi', 'texte' => 'Un canal direct pendant le mois qui suit, pour les questions sur la mise en œuvre du pilote, sans facturation supplémentaire ; puis, si elle est retenue, la revue à six semaines.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quelles décisions la formation aide-t-elle à prendre, selon le secteur et le pays ?',
            'items' => [
                ['secteur' => 'Distribution et négoce, à Cotonou ou à Lomé', 'probleme' => 'Les vendeurs répondent déjà aux clients avec ChatGPT sur leurs comptes personnels, y compris pour annoncer des prix, et la direction l\'a découvert par hasard.', 'solution' => 'Décision de règles immédiates (aucun prix ni délai annoncé sans validation), choix d\'un abonnement d\'équipe administré, pilote de six semaines sur les réponses aux questions fréquentes, mesuré par le délai de réponse.'],
                ['secteur' => 'Cabinet d\'expertise comptable, à Abidjan ou à Douala', 'probleme' => 'Un éditeur propose un outil d\'IA comptable sur trois ans ; les associés ne savent pas comment l\'évaluer ni où iraient les données des clients.', 'solution' => 'Questions au fournisseur sur l\'hébergement et la sortie, essai sur trois dossiers anonymisés, pilote limité à un type de travaux ; la formation des collaborateurs relève ensuite de la formation <a href="/formations/ia-comptables-syscohada">IA pour comptables (SYSCOHADA)</a>.'],
                ['secteur' => 'ONG et programmes financés, à Dakar ou à Ouagadougou', 'probleme' => 'Les rapports aux bailleurs absorbent des semaines, mais les fichiers de bénéficiaires contiennent des données personnelles sensibles.', 'solution' => 'Règle écrite excluant toute donnée nominative de bénéficiaire des outils en ligne, budget d\'abonnements d\'équipe pour la seule équipe de rédaction, pilote sur un rapport trimestriel, temps de rédaction mesuré avant et après.'],
                ['secteur' => 'PME industrielle en France ou en Belgique', 'probleme' => 'Des licences Copilot ont été achetées pour tout le monde ; trois mois plus tard, une poignée de personnes s\'en servent.', 'solution' => 'Réduction des licences au groupe qui a un usage identifié, pilote sur les comptes rendus de réunions et les réponses aux appels d\'offres, information des équipes sur les risques des outils, comme le prévoit l\'article 4 du règlement européen sur l\'IA.'],
                ['secteur' => 'Établissement financier ou de microfinance', 'probleme' => 'Le conseil d\'administration demande une position sur l\'IA ; les données des clients sont soumises au secret et à une supervision stricte.', 'solution' => 'Décision de commencer par des documents internes non nominatifs (procédures, notes, veille réglementaire), aucun dossier client dans un outil grand public, et un projet sur mesure envisagé seulement après validation de la conformité.'],
                ['secteur' => 'Direction des ressources humaines d\'un groupe', 'probleme' => 'Un prestataire propose de trier automatiquement les candidatures avec l\'IA.', 'solution' => 'Le comité apprend que les systèmes d\'IA utilisés pour l\'emploi figurent parmi les usages à haut risque du règlement européen, soumis à des obligations strictes à partir du 2 décembre 2027 ; décision de maintenir une lecture humaine de chaque candidature et de traiter ce sujet avec un juriste.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour votre comité de direction ?',
            'legende' => 'La session d\'ouverture de deux heures reprend la session dirigeants proposée jusqu\'ici ; elle peut précéder toute formation des équipes. Les formats se combinent.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Session d\'ouverture', '2 heures', 'Le dirigeant et ses proches collaborateurs', 'Cadrer d\'urgence ce qui est autorisé, ce qui est interdit et les données qui ne sortent jamais, avant que l\'usage ne s\'installe seul, mal ; ou avant de former les équipes'],
                ['Journée de direction, intra', '1 jour en 2 demi-journées', '8 décideurs au plus', 'Le comité veut choisir ses cas d\'usage, son budget et son premier projet'],
                ['Journée et revue du pilote', '1 jour, puis une demi-journée six semaines plus tard', 'Le même comité', 'L\'entreprise lance réellement un projet et veut une décision fondée sur des chiffres'],
                ['Session inter-entreprises', '1 jour', 'Dirigeants de plusieurs structures, par exemple d\'un réseau ou d\'une organisation professionnelle', 'Une entreprise trop petite pour réunir un comité, ou un dirigeant qui veut confronter son cas à celui de ses pairs'],
                ['À distance', '3 séances de 2 heures', '6 décideurs au plus', 'Comité réparti entre plusieurs pays ou sites ; les exercices se préparent entre les séances'],
                ['Hybride', 'Une demi-journée sur place, puis 2 séances à distance', '8 décideurs au plus', 'Démonstration et règles en salle, budget et fiche du pilote finalisés à distance'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation pour dirigeants, et comment se règle-t-elle ?',
            'intro'      => 'Chaque formule est chiffrée sur devis, après le premier échange, avec un détail ligne par ligne. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux outils d\'IA ne sont jamais inclus : ils restent au nom de l\'entreprise.',
            'items'      => [
                ['offre' => 'Session d\'ouverture', 'prix' => 'Sur devis', 'inclus' => ['Deux heures avec le dirigeant et ses proches', 'Démonstration sur vos documents', 'Les cinq règles de départ rédigées', 'Conseil sur la suite']],
                ['offre' => 'Journée de direction', 'prix' => 'Sur devis', 'inclus' => ['Entretien préalable et questionnaire', 'Deux demi-journées en comité', 'Grille, modèle de budget, fiche de pilote', 'Note de décision mise au propre sous 48 heures', 'Canal direct pendant un mois']],
                ['offre' => 'Journée et revue du pilote', 'prix' => 'Sur devis', 'inclus' => ['Tout le contenu de la journée', 'Revue d\'une demi-journée à six semaines', 'Lecture des chiffres du pilote', 'Décision écrite de poursuite ou d\'arrêt']],
            ],
            'variations' => [
                'La formule choisie et le nombre de séances.',
                'La taille du comité et le nombre de groupes.',
                'La préparation : entretiens, analyse des idées, démonstration sur vos documents.',
                'Le lieu de la séance : Cotonou, une autre ville du Bénin, un autre pays, ou à distance.',
                'La revue du projet pilote et le suivi demandé.',
                'La langue de travail et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il financer la journée de direction ?',
            'paragraphes' => [
                'Cela se vérifie au cas par cas, et la réponse n\'est jamais acquise d\'avance. En Côte d\'Ivoire, le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> indique sur sa page consultée le 5 octobre 2026 qu\'une entreprise à jour de ses deux taxes peut déposer un plan de formation, y compris en intra ou en interentreprises ; le paiement n\'intervient qu\'après contrôle par le fonds et approbation de sa Commission permanente. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> ouvre un guichet consacré au personnel des entreprises, avec une demande en ligne.',
                'Au Bénin, le FODEFCA, dont les statuts ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>, finance la formation professionnelle continue. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que depuis le 1er janvier 2022 les prestataires qui veulent accéder aux fonds publics ou mutualisés, dont ceux des OPCO, doivent être certifiés Qualiopi. Richard SALANON ne revendique ni cette certification ni l\'agrément d\'un fonds.',
                'Pour une formation de dirigeants, une question s\'ajoute : le statut des participants. Un gérant non salarié ou un associé n\'entre pas toujours dans les mêmes dispositifs qu\'un cadre salarié. Posez la question par écrit au fonds concerné, devis et programme joints, avant de bâtir le budget sur une prise en charge. Le programme détaillé, la feuille de présence et les attestations sont fournis dans tous les cas.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs les directions commettent-elles après une première décision sur l\'IA ?',
            'intro' => 'Les échecs de projets d\'IA tiennent rarement à la technique. Ils viennent de décisions de direction prises trop vite, ou pas prises du tout. Les plus courantes se repèrent dès la journée.',
            'items' => [
                ['titre' => 'Acheter des licences pour tout le monde', 'texte' => 'L\'achat massif rassure, mais une licence sans usage identifié reste fermée. On équipe d\'abord le groupe du pilote, puis on étend selon les chiffres.'],
                ['titre' => 'Lancer cinq pilotes à la fois', 'texte' => 'Chaque pilote demande un responsable, des données et du temps de relecture. Cinq projets simultanés diluent l\'attention et aucun ne produit de mesure exploitable.'],
                ['titre' => 'Confier le sujet au seul service informatique', 'texte' => 'Le choix des usages et des règles est une décision de gestion. Le service informatique sécurise et administre ; il ne peut pas arbitrer seul entre ventes, finances et ressources humaines.'],
                ['titre' => 'Oublier la mesure de départ', 'texte' => 'Sans le temps ou le volume relevé avant le lancement, le bilan du pilote se réduit à des impressions, favorables ou non selon qui parle.'],
                ['titre' => 'Ne pas fixer de critère d\'arrêt', 'texte' => 'Un pilote sans condition d\'arrêt devient un projet permanent qui coûte sans prouver. Le critère se fixe le jour du lancement, pas au moment du bilan.'],
                ['titre' => 'Confondre démonstration et mise en service', 'texte' => 'Un outil qui impressionne sur dix exemples peut échouer sur le millième cas réel. Le passage à l\'échelle se décide après le pilote, sur vos données et vos volumes.'],
                ['titre' => 'Annoncer des suppressions de postes', 'texte' => 'Présenter l\'IA comme un moyen de réduire les effectifs produit l\'effet inverse de celui recherché : les équipes cachent leurs usages et freinent le pilote. Mieux vaut annoncer les tâches visées et ce que les personnes feront du temps libéré.'],
                ['titre' => 'Former les équipes avant d\'avoir décidé', 'texte' => 'Une équipe formée sans règles ni outil choisi revient à ses comptes personnels. La session de direction passe en premier ; la <a href="/formations/ia-en-entreprise">formation des équipes à l\'usage quotidien</a> vient ensuite, sur les outils retenus.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui répond des erreurs d\'un outil d\'IA devant les clients et devant la loi ?',
            'texte' => 'La direction, toujours. L\'outil n\'a pas de personnalité juridique : une réponse fausse donnée à un client, une donnée personnelle exposée ou une décision injuste sur un candidat engagent l\'entreprise et ceux qui la dirigent. L\'affaire racontée dans l\'histoire d\'<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> l\'illustre, comme celle de <a href="/histoires/knight-capital">Knight Capital</a> rappelle ce que coûte un système automatique mis en service sans moyen de l\'arrêter vite. D\'où deux règles posées dès la journée : chaque usage a un responsable nommé, et chaque pilote a un bouton d\'arrêt.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Que disent les études publiques aux dirigeants qui hésitent ?',
            'items' => [
                ['valeur' => '39 %', 'libelle' => 'Part des répondants qui attribuent un effet sur le résultat d\'exploitation de l\'ensemble de l\'entreprise à l\'IA, alors que 88 % disent l\'utiliser dans au moins une fonction (enquête publiée le 5 novembre 2025)', 'source' => 'McKinsey, « The state of AI in 2025 »', 'url' => 'https://www.mckinsey.com/~/media/mckinsey/business%20functions/quantumblack/our%20insights/the%20state%20of%20ai/november%202025/the-state-of-ai-in-2025.pdf'],
                ['valeur' => '28 %', 'libelle' => 'Répondants dont le directeur général supervise lui-même la gouvernance de l\'IA, l\'un des éléments les plus liés à un effet déclaré sur les résultats (rapport de mars 2025)', 'source' => 'McKinsey, « The state of AI: How organizations are rewiring to capture value »', 'url' => 'https://www.mckinsey.com/capabilities/quantumblack/our-insights/the-state-of-ai-how-organizations-are-rewiring-to-capture-value'],
                ['valeur' => '30 %', 'libelle' => 'Part minimale des projets d\'IA générative que Gartner prévoyait de voir abandonnés après la preuve de concept d\'ici fin 2025, faute de données de qualité, de contrôle des risques, de maîtrise des coûts ou de valeur claire (communiqué du 29 juillet 2024)', 'source' => 'Gartner', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2024-07-29-gartner-predicts-30-percent-of-generative-ai-projects-will-be-abandoned-after-proof-of-concept-by-end-of-2025'],
                ['valeur' => '60 %', 'libelle' => 'Part des projets d\'IA non appuyés sur des données prêtes que les organisations abandonneront jusqu\'en 2026, selon une prévision publiée le 26 février 2025', 'source' => 'Gartner', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2025-02-26-lack-of-ai-ready-data-puts-ai-projects-at-risk'],
                ['valeur' => '70,89 %', 'libelle' => 'Entreprises de l\'Union européenne ayant envisagé l\'IA sans l\'adopter qui citaient en 2025 le manque de compétences, devant le flou sur les conséquences juridiques (52,52 %) et la protection des données (48,83 %)', 'source' => 'Eurostat, Statistics Explained, données extraites en décembre 2025', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=Use_of_artificial_intelligence_in_enterprises'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, données, règles : que doit savoir un dirigeant en Afrique francophone et en Europe ?',
            'paragraphes' => [
                'Les outils d\'IA générative fonctionnent en ligne. L\'Union internationale des télécommunications estimait, dans ses chiffres publiés le 15 octobre 2025, que 36 % de la population africaine utilisait Internet, contre 74 % de la population mondiale. Pour une direction, cela se traduit en décisions concrètes : budgéter une connexion de secours pour les postes qui dépendront de l\'outil, préférer des usages qui tolèrent une coupure, et ne pas bâtir un service client sur un outil que les agents ne pourront pas joindre l\'après-midi.',
                'Côté données, l\'entreprise reste responsable de ce que ses salariés confient à un service hébergé à l\'étranger. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre la protection des données personnelles, sous le contrôle de l\'Autorité de protection des données personnelles. La Côte d\'Ivoire, le Sénégal et la plupart des pays de la zone ont leur propre autorité. La décision de direction consiste à dire, par écrit, quelles catégories de données ne vont dans aucun outil en ligne.',
                'En Europe, le règlement sur l\'IA est entré en vigueur le 1er août 2024. Selon la <a href="https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai">page de la Commission européenne</a> mise à jour le 3 août 2026, les pratiques interdites et l\'obligation de maîtrise de l\'IA s\'appliquent depuis le 2 février 2025, et le texte modificatif dit omnibus, entré en vigueur le 27 juillet 2026, reporte au 2 décembre 2027 les obligations des systèmes à haut risque dans des domaines comme l\'emploi ou l\'éducation.',
                'La <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">foire aux questions de la Commission</a>, mise à jour le 27 juillet 2026, précise que la maîtrise de l\'IA reste une obligation des fournisseurs et des utilisateurs professionnels, sans niveau imposé depuis l\'omnibus, et que la surveillance s\'applique depuis le 3 août 2026. Pour un dirigeant, la conséquence est simple : informer les salariés des risques des outils qu\'ils utilisent, et garder la trace de cette information. Le RGPD, lui, continue de s\'appliquer à chaque donnée personnelle traitée.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi préparer vos décisions sur l\'IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il construit lui-même des outils d\'IA pour des entreprises : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il connaît donc les deux côtés de la table : celui de l\'entreprise qui achète et celui de l\'équipe qui conçoit, chiffre et maintient. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé pour des structures de ' . count((array) fait('pays_travailles')) . ' pays, en Afrique francophone, en Europe et au Canada.',
                'Avec une direction, sa règle est de ne rien vendre que la journée n\'ait justifié : le premier échange peut conclure qu\'une session de deux heures suffit, ou qu\'aucun projet ne mérite encore d\'être lancé. Il n\'est certifié par aucun éditeur d\'IA, présente les offres à partir de leurs prix publics et ne promet aucun gain. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur la page des <a href="/zones/">zones d\'intervention</a>.',
                'Quand la décision est prise, la suite peut prendre plusieurs formes : un accompagnement de <a href="/services/consultant-digitalisation">consultant en digitalisation</a> pour piloter le projet, la formation <a href="/formations/ia-processus-metier">IA dans les processus métier</a> pour choisir les étapes à confier à l\'outil, ou l\'une des autres <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>. Le <a href="/formations/">catalogue des formations</a> et la page <a href="/services/formation-en-entreprise">formation en entreprise</a> présentent l\'ensemble.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de réunir votre comité de direction ?',
            'texte' => 'Décidez avant de former : posez les règles de départ, choisissez un seul premier cas avec la grille, budgétez le temps autant que les licences, relevez la mesure de départ, nommez un responsable, fixez un critère d\'arrêt, et revenez six semaines plus tard trancher sur des chiffres.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous préparer les décisions de votre direction sur l\'IA ?',
            'texte'  => 'Décrivez votre entreprise, la composition du comité, les outils déjà en place et ce qui motive la demande : vous recevez une réponse sous 24 heures, puis une proposition de format et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Organiser une formation dirigeants'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir utiliser ChatGPT pour suivre la formation ?', 'r' => 'Non. La journée porte sur les décisions, pas sur la manipulation. Les outils sont montrés à l\'écran sur vos documents, et chacun peut essayer s\'il le souhaite, mais rien dans le programme ne suppose une pratique préalable.'],
        ['q' => 'Quelle différence avec la formation IA en entreprise ?', 'r' => 'La formation IA en entreprise apprend aux équipes à se servir chaque jour d\'un assistant sur leurs documents. Celle-ci aide la direction à choisir les usages, le budget, les outils et le premier projet. Dans l\'ordre logique, la direction décide d\'abord, puis les équipes sont formées sur les outils retenus.'],
        ['q' => 'La session de deux heures suffit-elle ?', 'r' => 'Elle suffit pour poser les règles de départ et éviter que l\'usage s\'installe sans cadre. Elle ne permet pas de construire un budget ni de cadrer un projet pilote ; pour cela, la journée complète est nécessaire.'],
        ['q' => 'Repart-on avec une charte d\'usage de l\'IA ?', 'r' => 'Vous repartez avec les cinq règles de départ écrites dans la note de décision. La charte complète, avec l\'inventaire des usages, les rôles et les contrôles, est le sujet de la formation Gouverner l\'IA dans l\'entreprise.'],
        ['q' => 'Le formateur recommande-t-il un outil en particulier ?', 'r' => 'Il présente les familles d\'outils, leurs prix publics et leurs conditions, puis aide le comité à choisir selon son cas. Les essais se font sur vos documents, et le choix final revient à la direction.'],
        ['q' => 'Combien de temps faut-il prévoir pour le projet pilote ?', 'r' => 'Six à huit semaines en général, avec un responsable qui y consacre quelques heures par semaine. Plus court, la mesure manque de recul ; plus long, le pilote risque de devenir un projet permanent sans décision.'],
        ['q' => 'Peut-on réunir des dirigeants de plusieurs entreprises ?', 'r' => 'Oui, en session inter-entreprises, par exemple pour les membres d\'une organisation professionnelle ou d\'un réseau. Chaque dirigeant travaille sur ses propres idées ; les informations confidentielles restent hors de la séance commune.'],
        ['q' => 'La formation peut-elle se faire à distance ?', 'r' => 'Oui, en trois séances de deux heures, avec six décideurs au plus. Les idées et les chiffres sont préparés entre les séances, et la démonstration se fait par partage d\'écran.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est établi sur devis, après le premier échange. Il dépend de la formule, de la taille du comité, de la préparation, du lieu et de la revue du pilote. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Nos données stratégiques sont-elles exposées pendant la journée ?', 'r' => 'Non. La démonstration utilise des documents non confidentiels que vous choisissez, et les chiffres de l\'entreprise restent sur papier ou dans le modèle de budget remis, sans passer par un outil d\'IA en ligne.'],
        ['q' => 'L\'IA générative est-elle une priorité pour une petite entreprise ?', 'r' => 'Pas toujours. Si la facturation, le suivi des clients ou les fichiers de base ne sont pas en ordre, ces chantiers passent avant. La journée peut conclure qu\'il vaut mieux attendre, et cette conclusion a aussi sa valeur.'],
    ],

    'sources' => [
        ['titre' => 'Commission européenne, cadre réglementaire de l\'IA : calendrier d\'application du règlement et omnibus (mise à jour du 3 août 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 (mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'McKinsey, The state of AI in 2025: Agents, innovation, and transformation (novembre 2025)', 'url' => 'https://www.mckinsey.com/~/media/mckinsey/business%20functions/quantumblack/our%20insights/the%20state%20of%20ai/november%202025/the-state-of-ai-in-2025.pdf', 'date' => '2026-10-05'],
        ['titre' => 'McKinsey, The state of AI: How organizations are rewiring to capture value (mars 2025)', 'url' => 'https://www.mckinsey.com/capabilities/quantumblack/our-insights/the-state-of-ai-how-organizations-are-rewiring-to-capture-value', 'date' => '2026-10-05'],
        ['titre' => 'Gartner, communiqué du 29 juillet 2024 sur l\'abandon des projets d\'IA générative après la preuve de concept', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2024-07-29-gartner-predicts-30-percent-of-generative-ai-projects-will-be-abandoned-after-proof-of-concept-by-end-of-2025', 'date' => '2026-10-05'],
        ['titre' => 'Gartner, communiqué du 26 février 2025 : Lack of AI-Ready Data Puts AI Projects at Risk', 'url' => 'https://www.gartner.com/en/newsroom/press-releases/2025-02-26-lack-of-ai-ready-data-puts-ai-projects-at-risk', 'date' => '2026-10-05'],
        ['titre' => 'Eurostat, Statistics Explained : Use of artificial intelligence in enterprises', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=Use_of_artificial_intelligence_in_enterprises', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres, dont Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, tarifs de Claude : offres Team et Enterprise, prix de l\'API', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, tarifs de l\'API par million de jetons', 'url' => 'https://developers.openai.com/api/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot pour les entreprises', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Google, tarifs de Google Workspace avec Gemini (prix affichés pour la France)', 'url' => 'https://workspace.google.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, règlement (UE) 2016/679 (RGPD), article 28 sur les sous-traitants', 'url' => 'https://eur-lex.europa.eu/eli/reg/2016/679/oj', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'gouvernance-ia', 'strategie-transformation-digitale', 'ia-ethique-conformite', 'integrer-ia-logiciels-existants', 'ia-processus-metier'],
        'services'    => ['consultant-digitalisation', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
