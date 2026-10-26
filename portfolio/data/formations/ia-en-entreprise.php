<?php
// ============================================================
// data/formations/ia-en-entreprise.php · Fiche formation « IA en entreprise :
// productivité des équipes » (vague 1B, lot A, domaine intelligence-artificielle).
// Angle propre : usage quotidien des assistants (ChatGPT, Claude, Gemini,
// Copilot) par les équipes pour rédiger, synthétiser et analyser sur leurs
// documents. Reprend de l'ancienne page /formation-ia-entreprise : atelier
// d'une demi-journée (12 personnes au plus), formation complète de deux jours
// (10 personnes au plus), accompagnement d'une demi-journée par mois pendant
// trois mois, tâches cibles, bibliothèque de consignes, mode opératoire par
// tâche, canal direct le mois suivant, comptes gratuits pour commencer ; ses
// prix sont ignorés, ses 19 pages de ville restent en ligne. La session
// dirigeants relève désormais de la fiche ia-generative-dirigeants.
// Faits externes relevés le 05/10/2026 : tarifs OpenAI, Anthropic, Google et
// Microsoft, Microsoft Learn, Eurostat, NBER, OIT, UIT, Commission
// européenne, SGG du Bénin (loi n° 2017-20, décret n° 2022-286), FDFP, 3FPT,
// France Compétences. Aucune certification ni aucun agrément attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA en entreprise : vos équipes apprennent à rédiger, synthétiser et analyser leurs propres documents avec ChatGPT, Claude, Gemini ou Copilot, et à vérifier chaque résultat',
    'title'   => 'Formation IA en entreprise et productivité | Richard SALANON',
    'meta'    => 'Formation IA pour vos équipes : rédiger, résumer et analyser vos documents avec ChatGPT, Claude, Gemini ou Copilot, sans exposer vos données. Sur devis.',
    'en_bref' => 'Cette formation apprend aux équipes administratives, commerciales, RH et de direction à utiliser chaque jour un assistant d\'IA (ChatGPT, Claude, Gemini ou Copilot) pour rédiger, synthétiser et analyser à partir de leurs propres documents, en vérifiant ce qu\'il produit et en protégeant les données de l\'entreprise. Elle dure deux jours, en quatre demi-journées, ou une demi-journée en atelier découverte, avec un accompagnement mensuel possible ensuite. Elle se donne dans vos locaux, à distance ou en formule hybride, en intra ou en session mutualisée. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, ou atelier d\'une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : comprendre ce que fait un assistant et poser les règles de données',
            'duree'  => '3 h 30',
            'points' => [
                'Ce qu\'est un assistant d\'IA, expliqué sans jargon : il prédit un texte plausible, il ne consulte pas une base de faits vérifiés, d\'où ses erreurs dites hallucinations.',
                'La même demande posée à ChatGPT, Claude, Gemini et Copilot, sur un document de l\'équipe : ce qui change, ce qui ne change pas.',
                'Classement des documents du service en trois couleurs : ce qu\'on peut confier à l\'assistant, ce qu\'on anonymise d\'abord, ce qui ne sort jamais.',
                'Réglages du compte : historique, partage des conversations, option d\'amélioration des modèles, connexion aux fichiers.',
                'Choix par chaque participant de sa tâche cible, celle qui lui coûte le plus de temps chaque semaine, et mesure de son temps actuel.',
                'Premier exercice : reformuler un courrier réel du service pour un autre destinataire, puis relire ligne à ligne.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : rédiger des écrits professionnels avec l\'assistant',
            'duree'  => '3 h 30',
            'points' => [
                'Les six éléments d\'une demande claire : qui écrit, à qui, dans quel but, avec quelles informations, sous quelle forme, sur quel ton.',
                'Donner un modèle : coller un courrier déjà validé pour que l\'assistant en reprenne le style, les formules et la longueur.',
                'Courriers, réponses aux clients, relances de paiement, notes internes et offres commerciales commentées, à partir des cas de l\'équipe.',
                'Écrire en anglais à un client ou à un fournisseur, et faire relire la version française de ce qui a été envoyé.',
                'Grille de relecture avant envoi : faits, chiffres, noms, dates, engagements pris au nom de l\'entreprise, ton.',
                'Début de la bibliothèque de consignes de l\'équipe, dans un document partagé qui appartient à l\'entreprise.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : synthétiser réunions, rapports et dossiers longs',
            'duree'  => '3 h 30',
            'points' => [
                'Compte rendu de réunion à partir de notes brutes, d\'un message vocal transcrit ou d\'une transcription de visioconférence.',
                'Extraire les décisions, les actions, les responsables et les échéances, sous forme de tableau prêt à diffuser.',
                'Résumer un rapport, un cahier des charges ou un appel d\'offres en exigeant le numéro de page ou la citation de chaque point.',
                'Comparer deux versions d\'un document et lister ce qui a changé, puis contrôler sur l\'original.',
                'Limites à connaître : documents trop longs, tableaux mal lus, pièces scannées, passages oubliés sans avertissement.',
                'Exercice croisé : chaque participant vérifie la synthèse produite par un collègue en revenant à la source.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : analyser et structurer des données, puis évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Transformer des messages WhatsApp, des notes manuscrites photographiées ou des courriels en tableau exploitable.',
                'Nettoyer et classer une liste : noms, téléphones, catégories de réclamations, motifs de retour, fiches produits.',
                'Analyser un fichier Excel ou CSV avec l\'assistant : totaux, tris, tableau croisé, graphique, puis recalcul d\'un chiffre à la main.',
                'Préparer le plan d\'une présentation ou d\'un rapport mensuel à partir de ces analyses.',
                'Évaluation : chaque participant exécute seul sa tâche cible de bout en bout, avec sa consigne, sa vérification et le temps mesuré.',
                'Plan d\'usage sur 30 jours, mode opératoire par tâche et mise au propre de la bibliothèque de consignes.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou atelier d\'une demi-journée'],
        ['l' => 'Public', 'v' => 'Équipes administratives, commerciales, RH, comptables et direction, sans prérequis technique'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et qu\'est-ce qu\'elle ne couvre pas ?',
            'paragraphes' => [
                'Beaucoup d\'équipes ont ouvert ChatGPT une fois, obtenu une réponse vague, puis sont revenues à leurs habitudes. Ce qui manquait n\'était pas l\'outil, mais une façon de s\'en servir sur le travail réel du service. Cette formation part donc de deux ou trois tâches que chaque participant répète chaque semaine (un compte rendu, des réponses aux clients, un tableau à remplir à partir de messages) et les reprend avec un assistant, sur ses propres documents, jusqu\'à obtenir un résultat qu\'il sait vérifier.',
                'À la fin des deux jours, chaque participant sait, seul : formuler une demande complète à un assistant ; produire un courrier ou une réponse client utilisable après relecture ; transformer des notes brutes en compte rendu avec décisions et échéances ; résumer un document long en citant ses passages ; structurer des informations éparses en tableau ; contrôler un chiffre, un nom ou une date avant envoi ; dire quelles données de son poste ne doivent jamais être confiées à un assistant. Ces objectifs sont vérifiés à la dernière demi-journée, sur sa tâche cible.',
                'La formation ne couvre pas tout ce que l\'IA permet en entreprise. Elle n\'apprend pas à construire des assistants qui agissent dans vos logiciels, ni à indexer vos archives pour un robot qui répond avec citations : ces sujets ont leurs propres formations, reliées en bas de page. Elle n\'est pas non plus un cours de droit : les obligations détaillées sur les données et le règlement européen relèvent de la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>. Les choix de budget, d\'outils et de pilotage sont traités pour les directions dans la formation <a href="/formations/ia-generative-dirigeants">IA générative pour dirigeants</a>.',
                'Elle ne promet enfin aucun gain chiffré à l\'avance. Le temps gagné dépend de la tâche, de la qualité des documents de départ et de la régularité de l\'usage après la session. C\'est pourquoi chaque participant mesure le temps de sa tâche cible le premier matin, puis le soir du deuxième jour, et que l\'entreprise peut refaire cette mesure un mois et trois mois plus tard.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'La formation vise les personnes qui écrivent, lisent et classent beaucoup dans leur journée. Aucune compétence technique n\'est demandée : si quelqu\'un sait rédiger un message et ouvrir un fichier, il peut suivre.',
            'items' => [
                ['titre' => 'Les publics habituels', 'texte' => 'Assistantes et assistants de direction, secrétariats, commerciaux et service client, ressources humaines, chargés de projet, équipes administratives et financières, responsables qui rédigent des rapports. Les juristes et les comptables y trouvent la base, puis des formations propres à leur métier.'],
                ['titre' => 'Le niveau de départ', 'texte' => 'Des personnes qui n\'ont jamais utilisé d\'assistant comme des équipes qui s\'en servent déjà sans méthode, chacun avec ses habitudes. Un court questionnaire avant la session permet de composer des groupes homogènes, ou de prévoir une heure de mise à niveau.'],
                ['titre' => 'Un groupe par métier quand c\'est possible', 'texte' => 'Les cas d\'un comptable n\'aident pas un vendeur. Pour la formation de deux jours, les groupes sont formés par service ou par famille de tâches ; pour l\'atelier découverte, un groupe mêlé fonctionne, car la diversité des exemples nourrit la séance.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur par participant, avec un navigateur à jour, un traitement de texte et un tableur. Le téléphone suffit pour certains exercices, mais pas pour analyser un tableau ou relire un long document. Une connexion stable est nécessaire, car les assistants travaillent en ligne.'],
                ['titre' => 'Les comptes', 'texte' => 'Soit les comptes d\'équipe que l\'entreprise a déjà ouverts, soit des comptes gratuits créés au début de la session. Rien n\'est à acheter avant d\'avoir vu ce qui sert vraiment ; les abonnements se décident après la formation.'],
                ['titre' => 'Les documents à préparer', 'texte' => 'Trois à cinq documents réels par participant, liés à sa tâche cible : courriers types, notes de réunion, rapports, exports de tableur, captures de messages. Ceux qui contiennent des données personnelles sont anonymisés avant la session, avec l\'aide du formateur si nécessaire.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels exercices chaque métier fait-il sur ses propres documents ?',
            'legende' => 'Exemples d\'exercices construits lors de la préparation, à partir des documents fournis par l\'entreprise. La dernière colonne est ce que le participant apprend à contrôler lui-même avant d\'utiliser le résultat.',
            'entetes' => ['Poste', 'Document de départ', 'Ce que l\'assistant produit', 'Ce que le participant vérifie'],
            'lignes'  => [
                ['Assistanat de direction', 'Notes prises pendant un comité, agenda de la semaine', 'Compte rendu structuré, liste des actions par responsable, courriel de diffusion', 'Qu\'aucune décision n\'a été ajoutée ou oubliée, que chaque échéance correspond aux notes'],
                ['Service client', 'Vingt messages reçus sur WhatsApp ou par courriel', 'Réponses proposées dans le ton de la maison, classement des demandes par motif', 'Prix, délais et conditions cités, promesses faites au nom de l\'entreprise'],
                ['Commercial', 'Fiche d\'un prospect, offre type, échange précédent', 'Relance personnalisée, offre commentée, version anglaise', 'Remises, références et noms propres ; ce qui relève du secret commercial'],
                ['Ressources humaines', 'Fiche de poste existante, notes d\'entretien anonymisées', 'Annonce de recrutement, grille d\'entretien, synthèse neutre', 'Formulations discriminantes, données personnelles restées dans le texte'],
                ['Administration et finances', 'Export de tableur des dépenses du trimestre', 'Totaux par poste, écarts, graphique, commentaire', 'Recalcul de deux totaux à la main, période et devise des chiffres'],
                ['Chargé de projet', 'Rapport d\'activité de 40 pages, cadre logique du projet', 'Résumé pour le bailleur avec renvoi aux pages, tableau des indicateurs', 'Chaque chiffre retrouvé dans le rapport source, à la bonne page'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment la formation se prépare-t-elle, puis se prolonge-t-elle ?',
            'items' => [
                ['titre' => 'Échange de cadrage', 'duree' => 'Réponse sous 24 heures, puis un ou deux entretiens', 'texte' => 'Vous décrivez l\'équipe, ses postes, les tâches qui prennent le plus de temps et les outils déjà en place (Microsoft 365, Google Workspace, comptes d\'IA existants). Ces échanges suffisent pour retenir le bon format et dire si une formation est vraiment la réponse.'],
                ['titre' => 'Choix des tâches cibles', 'duree' => 'Avant la session', 'texte' => 'Deux ou trois tâches par groupe, pas dix. Une session qui prétend changer tous les usages n\'en change aucun ; une session qui installe deux gestes solides donne envie d\'aller plus loin.'],
                ['titre' => 'Collecte et anonymisation des documents', 'duree' => '1 à 2 semaines avant', 'texte' => 'L\'entreprise transmet des exemples réels de ces tâches. Les noms, numéros et montants sensibles sont remplacés, et les documents classés « jamais » restent dans l\'entreprise.'],
                ['titre' => 'Préparation des comptes et des postes', 'duree' => 'La veille', 'texte' => 'Accès aux comptes vérifiés, réglages de confidentialité faits, documents d\'exercice téléchargés sur chaque poste pour ne pas dépendre d\'une connexion fragile.'],
                ['titre' => 'Animation', 'duree' => '4 demi-journées de 3 h 30', 'texte' => 'Une démonstration courte sur un cas de l\'équipe, puis un long temps de pratique, chacun sur son poste. Les consignes qui fonctionnent sont versées au fil de l\'eau dans la bibliothèque commune.'],
                ['titre' => 'Évaluation sur la tâche cible', 'duree' => 'Dernière demi-journée', 'texte' => 'Chaque participant réalise seul sa tâche, de la consigne à la vérification. C\'est le critère de réussite, pas un questionnaire de satisfaction.'],
                ['titre' => 'Suivi', 'duree' => 'Le mois qui suit, et jusqu\'à trois mois', 'texte' => 'Un canal direct pour les questions d\'application pendant le mois suivant, sans facturation supplémentaire. Si l\'accompagnement mensuel est retenu, une demi-journée par mois pendant trois mois pour mesurer ce qui sert, corriger et étendre à d\'autres tâches.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment apprend-on : taille des groupes, pratique, supports et suivi ?',
            'intro' => 'Un assistant d\'IA s\'apprend comme un outil de travail : en l\'utilisant sur ses propres dossiers, avec quelqu\'un qui corrige au bon moment. La méthode tient en quelques règles fixes.',
            'items' => [
                ['titre' => 'Des groupes réduits', 'texte' => 'Dix personnes au plus pour la formation de deux jours, douze pour l\'atelier découverte. Au-delà, le formateur ne peut plus regarder le travail de chacun sur ses documents, et c\'est précisément ce qui fait la valeur de la séance.'],
                ['titre' => 'Peu de démonstration, beaucoup de pratique', 'texte' => 'Chaque module commence par quelques minutes de démonstration sur un cas de l\'équipe, puis laisse la plus grande partie du temps à la pratique. Le formateur circule, lit les demandes et les réponses, et montre pourquoi une consigne échoue.'],
                ['titre' => 'Vos comptes et vos fichiers', 'texte' => 'Les exercices se font dans les outils que l\'équipe utilisera le lundi suivant : le compte ChatGPT, Claude, Gemini ou Copilot de l\'entreprise, son traitement de texte, son tableur, sa messagerie. Rien n\'est appris sur un logiciel de démonstration.'],
                ['titre' => 'La relecture en binôme', 'texte' => 'Une partie des exercices est relue par un collègue, qui doit retrouver dans la source chaque fait avancé par l\'assistant. On apprend mieux à vérifier le travail d\'un autre que le sien.'],
                ['titre' => 'Une bibliothèque de consignes', 'texte' => 'Les consignes qui donnent un bon résultat sont notées pendant la session dans un document partagé, classé par tâche. Il appartient à l\'entreprise, pas au formateur, et continue de s\'enrichir après la formation.'],
                ['titre' => 'Un mode opératoire par tâche', 'texte' => 'Pour chaque tâche travaillée, une page : quel outil, quelle consigne de départ, quels documents fournir, quelle vérification avant envoi, qui valide. C\'est le support que relit un nouvel arrivant.'],
                ['titre' => 'Des supports remis à chacun', 'texte' => 'Le programme, les supports de la session, les exercices et leurs corrigés, la grille de relecture et une attestation nominative de fin de formation. Les documents sont dans un format que l\'entreprise peut modifier.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Les questions d\'application arrivent dans les semaines qui suivent, quand chacun travaille seul. Le canal direct du mois suivant et, si elle est retenue, la demi-journée mensuelle servent à ce moment-là, où les habitudes se prennent ou se perdent.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels assistants utilise-t-on, dans quelles versions, et combien coûtent-ils ?',
            'legende' => 'Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, hors taxes, dans la devise affichée. OpenAI précise que ses prix varient selon les pays ; la page de Google a été affichée en euros, pour la France. Ces montants sont ceux des éditeurs : ils ne font pas partie du prix de la formation.',
            'entetes' => ['Assistant', 'Versions utilisées en formation', 'Prix de l\'éditeur', 'À savoir pour une équipe'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Gratuit, Go, Plus, ou l\'offre Business de l\'entreprise', 'Gratuit ; Go 8 dollars par mois ; Plus 20 dollars par mois ; Business 20 dollars par utilisateur et par mois en facturation annuelle, 25 dollars en mensuelle, à partir de 2 utilisateurs', 'L\'offre Business regroupe les comptes sous l\'administration de l\'entreprise ; les comptes personnels restent au nom de chaque salarié'],
                ['Claude (Anthropic)', 'Gratuit, Pro, ou l\'offre Team de l\'entreprise', 'Gratuit ; Pro 17 dollars par mois en abonnement annuel (200 dollars payés d\'avance) ou 20 dollars au mois ; Team 20 dollars par siège et par mois en annuel, 25 dollars au mois', 'La version gratuite permet déjà l\'analyse de fichiers et jusqu\'à 5 projets, ce qui suffit pour la plupart des exercices'],
                ['Gemini (Google)', 'Gratuit, Google AI Plus ou Pro, ou Gemini inclus dans Google Workspace', 'Gratuit ; Google AI Plus 4,99 euros par mois ; Google AI Pro 21,99 euros par mois (prix affichés pour la France)', 'Les offres individuelles ajoutent Gemini dans Gmail et Docs ; pour une équipe déjà sur Google Workspace, l\'IA passe par l\'abonnement de l\'entreprise'],
                ['Copilot (Microsoft)', 'Copilot Chat, ou Microsoft 365 Copilot si l\'entreprise a la licence', 'Copilot Chat inclus sans surcoût dans les abonnements Microsoft 365 éligibles ; Microsoft 365 Copilot Business 21 dollars par utilisateur et par mois en annuel (18 dollars en promotion jusqu\'au 31 décembre 2026), 25,20 dollars au mois', 'La licence payante s\'ajoute à un abonnement Microsoft 365 et permet à Copilot de s\'appuyer sur les courriels, réunions et fichiers de l\'utilisateur'],
                ['Tableur et traitement de texte', 'Excel, Word, Google Sheets, Google Docs, ou LibreOffice', 'Ceux que l\'entreprise possède déjà', 'Les résultats de l\'assistant y sont recopiés, contrôlés et mis en forme ; les calculs importants y sont refaits'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il payer un abonnement pour suivre la formation, et lequel garder ensuite ?',
            'paragraphes' => [
                'Non. Les versions gratuites des quatre assistants suffisent pour apprendre la méthode : formuler une demande, fournir un document, vérifier la réponse. Elles ont des limites d\'usage qui se font sentir sur une journée intensive ; c\'est pourquoi un groupe peut alterner entre deux assistants, ce qui a l\'avantage de montrer que la méthode ne dépend pas d\'un éditeur.',
                'Le choix des abonnements payants se fait après la formation, sur ce qui a réellement servi. Une équipe déjà équipée de Microsoft 365 commence souvent par Copilot Chat, déjà inclus ; une équipe sur Google Workspace par Gemini ; d\'autres retiennent ChatGPT ou Claude pour la qualité obtenue sur leurs propres documents en français. Pour comparer les offres d\'équipe, leurs conditions sur les données et leur coût pour dix personnes, le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> fait ce travail en détail.',
                'Une règle vaut dans tous les cas : les documents de l\'entreprise ne se traitent pas dans le compte personnel gratuit d\'un salarié, que l\'entreprise ne contrôle pas et qui part avec lui. Pendant la formation, les exercices sur comptes gratuits se font donc avec des documents anonymisés ; les documents sensibles attendent un compte professionnel, ou ne sortent pas.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'Commerce et distribution, à Cotonou ou à Lomé', 'probleme' => 'Les commandes arrivent par WhatsApp en vrac, les fiches produits sont incomplètes et les relances de paiement attendent la fin de semaine.', 'solution' => 'Les vendeurs apprennent à transformer les messages en tableau de commandes, à normaliser les fiches produits à partir de notes et de photos, et à rédiger des relances fermes mais courtoises, relues avant envoi.'],
                ['secteur' => 'Import-export et logistique, à Abidjan ou à Douala', 'probleme' => 'Les dossiers documentaires sont volumineux, la correspondance avec les fournisseurs se fait en anglais et une erreur de quantité coûte cher.', 'solution' => 'Extraction des informations clés d\'une facture ou d\'un document de transport, synthèse d\'un dossier, courriers bilingues ; le contrôle ligne à ligne des quantités et des montants occupe une place centrale.'],
                ['secteur' => 'ONG et projets financés, en Afrique de l\'Ouest', 'probleme' => 'Les rapports aux bailleurs et les comptes rendus de mission prennent des jours, et les fiches de bénéficiaires contiennent des données sensibles.', 'solution' => 'Rédaction des rapports à partir de sources vérifiées, tableau des indicateurs avec renvoi aux pages, et règle stricte : aucune donnée nominative de bénéficiaire dans un assistant en ligne.'],
                ['secteur' => 'Administration et structures parapubliques', 'probleme' => 'Les courriers suivent des modèles stricts, les notes de synthèse s\'accumulent et chaque document passe par plusieurs signataires.', 'solution' => 'L\'assistant prépare le premier jet d\'une note ou d\'un courrier normé à partir d\'un modèle validé ; les agents apprennent ce qu\'ils peuvent lui soumettre et à qui revient la validation.'],
                ['secteur' => 'Cabinet ou PME en France, en Belgique ou en Suisse', 'probleme' => 'L\'équipe a Microsoft 365 et Copilot Chat, mais personne ne s\'en sert au-delà de quelques questions, et le RGPD s\'applique aux données des clients.', 'solution' => 'Séances à distance de deux heures et demie sur Copilot Chat et les outils déjà payés : comptes rendus de réunions, réponses aux courriels, synthèse de dossiers, avec les réglages et les limites propres aux comptes professionnels.'],
                ['secteur' => 'Écoles, centres de santé et cliniques', 'probleme' => 'Les équipes produisent des supports, des convocations et des courriers, mais manipulent aussi des données d\'élèves ou de patients.', 'solution' => 'L\'assistant sert aux supports de cours, aux courriers et aux comptes rendus administratifs ; la formation commence par la frontière à ne pas franchir : aucun dossier médical ni aucune note d\'élève identifiable.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format retenir : atelier, formation complète, distance ou accompagnement ?',
            'legende' => 'Les formats peuvent se combiner : un atelier découverte suivi de la formation complète pour un service pilote, ou la formation complète suivie de l\'accompagnement mensuel.',
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une équipe qui n\'a jamais utilisé d\'assistant, ou une direction qui veut voir avant d\'investir ; certaines entreprises s\'en contentent, et c\'est une conclusion honorable'],
                ['Formation complète, intra', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un usage déjà commencé dans le désordre, ou une tâche volumineuse qui justifie à elle seule l\'investissement'],
                ['Session mutualisée, inter', '1 à 2 jours', 'Plusieurs structures d\'un même réseau', 'Une ou deux personnes par organisation ; les exercices se font sur des documents publics ou fictifs, sans dossier interne'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes réparties sur plusieurs sites ou pays ; séances courtes, plus faciles à suivre en visioconférence'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Prise en main en salle, puis mise en pratique suivie à distance sur les tâches cibles'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Les équipes qui partent de loin ou veulent étendre l\'usage à d\'autres tâches ; c\'est le format qui ancre le mieux les habitudes'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et comment se règle-t-elle ?',
            'intro'      => 'Le prix est fixé sur devis, après l\'échange de cadrage, et le devis détaille chaque poste. Il se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux assistants restent au nom de l\'entreprise et ne sont pas compris dans le prix de la formation.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée sur vos documents', 'Premiers gestes sur deux tâches', 'Règles de données de base', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Exercices construits sur vos documents', 'Bibliothèque de consignes et modes opératoires', 'Évaluation sur la tâche cible et attestation', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Corrections et nouvelles tâches', 'Bilan écrit à trois mois']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le format retenu et le nombre de demi-journées.',
                'Le temps de préparation des exercices sur vos documents, et leur anonymisation.',
                'Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou ou hors du Bénin.',
                'Le mode : présentiel, distance ou hybride.',
                'L\'accompagnement après la session.',
                'La langue des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'La formation peut-elle être financée par un fonds de formation ?',
            'paragraphes' => [
                'Parfois, et jamais automatiquement. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> consultée le 5 octobre 2026 indique que toute entreprise qui justifie du paiement régulier de ses deux taxes de formation peut déposer un plan de formation, en interne, en intra, en interentreprises ou à l\'étranger, et que le règlement intervient après le contrôle des services du fonds et l\'approbation de sa Commission permanente. Le statut exigé du prestataire se vérifie auprès du fonds avant de signer.',
                'Au Bénin, le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> approuve les statuts du FODEFCA, présenté à son article 5 comme le principal guichet de financement de la formation continue dans le secteur privé ; son article 35 prévoit une contribution des bénéficiaires de 10 à 30 % du coût total de la formation selon les cas. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> dispose d\'un guichet pour le personnel des entreprises et d\'une plateforme de demande en ligne.',
                'En France, selon <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a>, tout prestataire qui veut accéder aux fonds publics ou mutualisés (OPCO, régions, France Travail, État, compte personnel de formation) doit être certifié Qualiopi depuis le 1er janvier 2022. Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds : prévoyez le budget sans prise en charge, et interrogez votre fonds par écrit, programme et devis à l\'appui, si un financement conditionne votre décision. Le programme, les feuilles de présence et l\'attestation remis en fin de session servent dans tous les cas.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent après une formation, et comment les éviter ?',
            'intro' => 'Une formation à l\'IA se juge un mois plus tard, sur ce que l\'équipe fait encore. Les mêmes écarts reviennent d\'une entreprise à l\'autre ; ils se préviennent dès la session.',
            'items' => [
                ['titre' => 'Envoyer sans relire', 'texte' => 'Au bout de quelques jours, les réponses paraissent fiables et la relecture saute. C\'est le moment où passe un délai faux ou une remise jamais accordée. La grille de relecture reste affichée près du poste, et rien ne part au nom de l\'entreprise sans avoir été lu en entier.'],
                ['titre' => 'Croire une référence parce qu\'elle est précise', 'texte' => 'Un assistant peut citer un article de loi, une étude ou un chiffre qui n\'existent pas, avec une assurance parfaite. Toute référence se retrouve dans sa source avant d\'être reprise ; sinon, elle disparaît du texte.'],
                ['titre' => 'Coller un document sensible dans un compte personnel', 'texte' => 'Sous la pression d\'un délai, on prend le chemin le plus court. Le classement en trois couleurs fait pendant la formation sert à décider vite : ce document peut-il sortir, faut-il l\'anonymiser, ou reste-t-il dans l\'entreprise ?'],
                ['titre' => 'Garder ses consignes pour soi', 'texte' => 'Chacun refait dans son coin ce qu\'un collègue a déjà mis au point. La bibliothèque de consignes n\'a de valeur que si elle est tenue : un responsable la relit chaque mois et y verse les nouvelles consignes qui ont fait leurs preuves.'],
                ['titre' => 'Revenir à l\'ancienne méthode faute de temps', 'texte' => 'La première semaine, l\'assistant fait perdre du temps, le temps d\'ajuster. Le plan d\'usage sur 30 jours fixe une tâche par jour à faire avec l\'assistant, même lentement, jusqu\'à ce que le geste devienne naturel.'],
                ['titre' => 'Multiplier les outils et les abonnements', 'texte' => 'Trois assistants payés par trois services, sans règle commune, coûtent plus et se contrôlent moins. L\'entreprise retient un outil principal après la formation, sur la base des mesures faites pendant la session.'],
                ['titre' => 'Mesurer la satisfaction au lieu du temps', 'texte' => 'Une équipe contente de sa journée peut ne rien changer à son travail. On mesure le temps de la tâche cible avant, à la fin de la session, puis à un mois et à trois mois ; c\'est ce chiffre qui justifie d\'étendre la démarche, ou non.'],
                ['titre' => 'Interdire sans former', 'texte' => 'L\'interdiction seule déplace l\'usage vers les téléphones personnels, sans aucune règle. Il vaut mieux écrire ce qui est permis, avec quelles données, et le faire appliquer ; la formation <a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a> aide à rédiger ce cadre.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui est responsable de ce que l\'assistant a écrit ?',
            'texte' => 'Toujours l\'entreprise, et la personne qui envoie. Un courrier rédigé par un assistant engage celui qui le signe exactement comme s\'il l\'avait écrit seul. L\'histoire d\'<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> le montre : une compagnie aérienne a dû assumer devant un tribunal une information fausse donnée par son assistant en ligne. Dans un service, la règle est simple : l\'assistant propose, une personne nommée vérifie et décide, et cette personne connaît la source de chaque fait envoyé.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Que disent les études publiques sur l\'IA au travail ?',
            'items' => [
                ['valeur' => '14 %', 'libelle' => 'Hausse moyenne du nombre de demandes résolues par heure chez 5 179 agents de support client équipés d\'un assistant d\'IA, et 34 % pour les moins expérimentés (document de travail révisé en novembre 2023)', 'source' => 'NBER, « Generative AI at Work », document de travail 31161', 'url' => 'https://www.nber.org/papers/w31161'],
                ['valeur' => '20,0 %', 'libelle' => 'Part des entreprises de l\'Union européenne de 10 salariés ou plus qui utilisaient l\'IA en 2025, contre 13,5 % en 2024 ; l\'analyse du langage écrit était l\'usage le plus courant (publication du 11 décembre 2025)', 'source' => 'Eurostat', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2'],
                ['valeur' => '1 sur 4', 'libelle' => 'Travailleurs dans le monde dont le métier est exposé à l\'IA générative ; les emplois de bureau restent les plus exposés, et la transformation des tâches est l\'effet le plus probable (étude du 20 mai 2025)', 'source' => 'Organisation internationale du Travail, document de travail 140', 'url' => 'https://www.ilo.org/publications/generative-ai-and-jobs-refined-global-index-occupational-exposure'],
                ['valeur' => '36 %', 'libelle' => 'Part de la population qui utilise Internet en Afrique en 2025, contre 74 % dans le monde et 88 à 93 % en Europe (publication du 15 octobre 2025)', 'source' => 'Union internationale des télécommunications, Facts and Figures 2025', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'Un assistant d\'IA ne fonctionne qu\'en ligne. Or, selon l\'Union internationale des télécommunications, 36 % de la population africaine utilisait Internet en 2025, contre 88 à 93 % en Europe. Dans les entreprises formées, la connexion existe, mais elle coupe, coûte cher en données mobiles ou ralentit l\'après-midi. La formation en tient compte : documents téléchargés à l\'avance, consignes rédigées hors ligne puis collées en une fois, exercices de relecture qui ne demandent pas de connexion, et pour les séances à distance une solution de repli prévue.',
                'Les quatre assistants travaillent bien en français, mais ils écrivent par défaut un français de France, avec des usages qui ne sont pas toujours ceux d\'un courrier administratif à Cotonou, à Dakar ou à Kinshasa. On leur fournit donc un modèle maison et le vocabulaire de l\'entreprise. Pour un texte en fon, en éwé, en wolof ou en lingala, le résultat doit être relu par un locuteur avant tout usage. L\'anglais, lui, est un gain direct pour les équipes qui échangent avec des fournisseurs ou des partenaires étrangers.',
                'Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre les données personnelles. Son article 391 n\'autorise le transfert de données vers un État tiers que si l\'Autorité constate un niveau de protection équivalent ; son article 426 impose au responsable du traitement des mesures de sécurité appropriées, parmi lesquelles la pseudonymisation. Coller la fiche d\'un client dans un assistant hébergé à l\'étranger n\'est donc pas un geste anodin : la formation apprend à remplacer noms et numéros avant de soumettre un texte.',
                'En Europe, le RGPD s\'applique aux mêmes gestes, et l\'article 4 du règlement européen sur l\'IA s\'y ajoute. Selon les <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">questions et réponses de la Commission européenne</a> (mises à jour le 27 juillet 2026), il s\'applique depuis le 2 février 2025, son contrôle a commencé le 3 août 2026, et un salarié qui utilise ChatGPT pour écrire ou traduire doit être informé des risques propres à ces outils, comme les hallucinations. Aucun certificat n\'est exigé ; l\'entreprise peut garder une trace interne des formations suivies.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à l\'IA avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il utilise lui-même ces assistants chaque jour pour rédiger, analyser et développer, et il intègre l\'IA dans des logiciels pour ses clients. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP, et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, dont le Bénin, la Côte d\'Ivoire, le Sénégal, la France, la Belgique, la Suisse et le Canada.',
                'Sa façon de former se résume en quelques engagements vérifiables : une réponse sous 24 heures, un cadrage qui peut conclure qu\'une formation plus courte suffit, des exercices construits sur vos documents, une évaluation sur une tâche réelle, des supports qui restent à l\'entreprise et aucun chiffre de gain promis à l\'avance. Il n\'est certifié par aucun éditeur d\'IA et ne se présente comme partenaire d\'aucun. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page des <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>.',
                'Quand le besoin dépasse l\'usage quotidien des assistants, par exemple brancher l\'IA sur vos logiciels ou sur vos documents internes, il relève d\'une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a> ou de la formation <a href="/formations/integrer-ia-logiciels-existants">Intégrer l\'IA dans ses logiciels existants</a>. Pour les autres domaines de formation et leur organisation commune, voir la page <a href="/services/formation-en-entreprise">formation en entreprise</a> et le <a href="/formations/">catalogue des formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Choisissez deux ou trois tâches réelles par groupe, formez sur vos documents et dans les comptes que l\'équipe gardera, classez les données avant le premier exercice, faites relire chaque résultat par une personne qui connaît la source, et mesurez le temps de la tâche avant, puis un mois et trois mois après.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe à l\'usage quotidien de l\'IA ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps, les outils déjà en place et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Un formateur IA est-il la bonne personne pour une équipe qui débute ?", 'r' => "Oui, si la formation part de vos documents et de vos tâches, pas d’une démonstration d’outils. Un formateur IA se distingue d’un consultant IA, qui conseille la direction sur les usages et les outils, et d’un expert ou spécialiste de l’IA, profil plutôt technique. Pour une équipe qui débute, l’essentiel est de repartir avec une tâche que chacun sait faire seul avec ChatGPT, Claude, Gemini, Copilot, Perplexity ou Mistral, et une règle claire sur les données."],
        ['q' => 'Faut-il des connaissances techniques pour suivre la formation ?', 'r' => 'Non. Les assistants se pilotent en français, par écrit. La compétence décisive est de décrire précisément ce qu\'on attend et de vérifier le résultat, et elle s\'apprend en quelques heures. Ceux qui connaissent le mieux leur métier sont souvent les participants qui progressent le plus vite.'],
        ['q' => 'Sur quel assistant la formation se fait-elle ?', 'r' => 'Sur celui que l\'entreprise utilise déjà ou compte utiliser : ChatGPT, Claude, Gemini ou Copilot. Sans choix préalable, on travaille sur deux d\'entre eux en version gratuite, ce qui montre que la méthode ne dépend pas de l\'outil et aide à choisir ensuite.'],
        ['q' => 'Faut-il acheter des abonnements avant la session ?', 'r' => 'Non. Les versions gratuites suffisent pour apprendre. Les abonnements se décident après la formation, sur ce qui a réellement servi. Si l\'entreprise a déjà Microsoft 365, Copilot Chat est inclus dans les abonnements éligibles sans surcoût.'],
        ['q' => 'Nos documents sont confidentiels : est-ce compatible ?', 'r' => 'Oui. Avant la session, les documents sont classés : ceux qu\'on peut confier à un assistant, ceux qu\'on anonymise, ceux qui ne sortent jamais. Les exercices utilisent des copies anonymisées, et aucune donnée nominative de client, de patient ou d\'élève n\'est soumise pendant la formation.'],
        ['q' => 'Combien de personnes par session ?', 'r' => 'Dix au plus pour la formation de deux jours, douze pour l\'atelier découverte, huit pour une séance à distance. Au-delà, il devient impossible de regarder le travail de chacun sur ses propres documents.'],
        ['q' => 'La formation peut-elle se faire entièrement à distance ?', 'r' => 'Oui, en cinq à six séances de deux heures et demie en visioconférence, avec partage d\'écran et documents envoyés à l\'avance. Une connexion stable est nécessaire pour chaque participant ; une solution de repli est prévue en cas de coupure.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, après l\'échange de cadrage. Il dépend du nombre de participants et de groupes, du format, de la préparation des exercices sur vos documents, du lieu et de l\'accompagnement retenu. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Peut-on obtenir un financement du FDFP, du FODEFCA, du 3FPT ou d\'un OPCO ?', 'r' => 'Cela dépend des règles de chaque fonds et de votre situation, et aucune prise en charge n\'est garantie. Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds. Interrogez le fonds par écrit, programme et devis à l\'appui, avant de signer.'],
        ['q' => 'L\'IA va-t-elle remplacer des postes dans l\'équipe ?', 'r' => 'Elle remplace surtout des tâches : la ressaisie, le premier jet, le tri. L\'Organisation internationale du Travail estime, dans une étude du 20 mai 2025, que la transformation des emplois est l\'effet le plus probable. Le jugement métier, la relation client et la responsabilité de ce qui est envoyé restent humains.'],
        ['q' => 'Quelle différence avec la formation IA générative pour dirigeants ?', 'r' => 'Celle-ci apprend aux équipes à se servir des assistants au quotidien. La formation pour dirigeants porte sur les décisions : budget, choix des outils, règles, premier projet. Les deux se combinent bien, la session de direction en premier.'],
        ['q' => 'Que devient la formation quand les assistants changent de version ?', 'r' => 'Les écrans et les noms d\'offres changent souvent ; la méthode reste : donner le contexte, fournir un modèle, préciser la forme attendue, vérifier la sortie. La bibliothèque de consignes se met à jour en quelques minutes, et l\'accompagnement mensuel peut couvrir ces changements.'],
        ['q' => 'Reçoit-on une attestation ?', 'r' => 'Oui, une attestation nominative de fin de formation par participant, avec le programme, les supports, les exercices corrigés et les feuilles de présence. Ce n\'est ni un diplôme ni une certification d\'éditeur.'],
    ],

    'sources' => [
        ['titre' => 'OpenAI, ChatGPT : tarifs des offres Free, Go, Plus, Pro et Business', 'url' => 'https://learn.chatgpt.com/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Anthropic, tarifs de Claude (Free, Pro, Max, Team, Enterprise)', 'url' => 'https://claude.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Google, abonnements Gemini et Google AI (prix affichés pour la France)', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft, tarifs de Microsoft 365 Copilot', 'url' => 'https://www.microsoft.com/en-us/microsoft-365-copilot/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft Learn, présentation de Microsoft Copilot Chat (mise à jour le 10 septembre 2026)', 'url' => 'https://learn.microsoft.com/en-us/copilot/overview', 'date' => '2026-10-05'],
        ['titre' => 'NBER, Brynjolfsson, Li et Raymond, « Generative AI at Work », document de travail 31161', 'url' => 'https://www.nber.org/papers/w31161', 'date' => '2026-10-05'],
        ['titre' => 'Eurostat, usage de l\'intelligence artificielle par les entreprises de l\'UE en 2025', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2', 'date' => '2026-10-05'],
        ['titre' => 'Organisation internationale du Travail, Generative AI and jobs: a refined global index of occupational exposure', 'url' => 'https://www.ilo.org/publications/generative-ai-and-jobs-refined-global-index-occupational-exposure', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des télécommunications, Facts and Figures 2025 : usage d\'Internet', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 du règlement sur l\'IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 391 et 426)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA (articles 5 et 35)', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'ia-ethique-conformite', 'agents-ia-assistants', 'rag-chatbot-documents', 'contenu-avec-ia'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
