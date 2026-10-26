<?php
// ============================================================
// data/formations/ia-en-entreprise/mali.php · Page « formation IA en entreprise » du Mali.
// Faits externes relevés le 26/10/2026 : politique de confidentialité DeepSeek, DataReportal,
// Osiris (téléphonie, CIAR-Mali, économie numérique), La Nouvelle Tribune, Data Protection Africa,
// Droit, médias et finance (APDP), DGI du Mali, OHADA, Constitution de 2023, OIT (FAFPA), Banque mondiale.
// Aucun tarif, quota ni promotion d'éditeur dans le texte.
// Aucune certification ni aucun agrément attribué à Richard. Aucune somme pour la formation.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA en entreprise au Mali : vos équipes de Bamako et des régions utilisent ChatGPT, Claude et Gemini sur leurs propres documents, avec une règle écrite sur les données personnelles",
    'title'   => "Formation IA en entreprise au Mali | Richard SALANON",
    'meta'    => "Formation IA pour les équipes au Mali : ChatGPT, Claude et Gemini sur vos documents, règles de l'APDP, séances à distance depuis Cotonou, devis en FCFA.",
    'en_bref' => "Au Mali, les équipes peuvent se former à l'IA auprès d'écoles et de centres publics comme le CIAR-Mali, de cabinets privés, ou d'un formateur d'entreprise qui intervient à distance : Richard SALANON, consultant basé à Cotonou, anime en français, avec une heure d'écart seulement, des formations sur ChatGPT, Claude et Gemini à partir de vos propres documents. Chaque groupe commence par fixer ce qui ne quitte jamais l'entreprise, puis traite deux ou trois tâches réelles. Le devis est établi en FCFA.",
    'publie'  => '2026-11-28',
    'maj'     => '2026-11-28',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui forme les équipes à l'IA au Mali, et comment choisir ?",
            'paragraphes' => [
                "Au Mali, trois voies existent : les établissements publics ou universitaires, les cabinets privés, et les formateurs d'entreprise qui interviennent à distance. Le bon choix dépend de ce que l'équipe doit savoir faire seule après la session. Le nom de l'outil enseigné compte moins que le travail réel sur lequel on s'exerce.",
                "Le Centre d'intelligence artificielle et de robotique du Mali, le CIAR-Mali, illustre la première voie. Son nouveau site de Sirakoro Niaré, à Kati, près de Bamako, a été inauguré le 21 septembre 2026, et sa mission, selon l'agence APA reprise par Osiris, couvre la formation initiale et continue ainsi que la recherche. Ce type de centre forme des spécialistes ; il ne remplace pas la séance qui apprend à un service comptable à rédiger ses relances.",
                "Un formateur IA d'entreprise répond à une autre demande. Il part d'une tâche que la personne répète chaque semaine, comme le compte rendu d'une réunion de direction, la réponse à un client qui écrit sur WhatsApp ou le tableau de suivi d'un chantier, la refait avec un assistant sur de vrais fichiers, puis apprend à contrôler chaque ligne du résultat. Une démonstration d'outil laisse un bon souvenir le jour même ; une formation se juge un mois plus tard, à ce que l'équipe fait encore.",
                "Pour comparer des offres, posez cinq questions. Les exercices se feront-ils sur nos documents, anonymisés au besoin ? Que saura faire chaque participant seul à la fin, et comment le vérifie-t-on ? Que dit le prestataire de la loi malienne sur les données personnelles ? Que se passe-t-il si la connexion ou le courant coupent ? Que reste-t-il à l'entreprise après la session : des supports de séance ? Un prestataire sérieux répond par écrit, sans critiquer ses confrères.",
                "Richard SALANON appartient à la troisième voie. Il forme depuis Cotonou, en français, sur les comptes et les documents de l'entreprise. Il ne délivre aucun diplôme : il répond à un besoin précis, celui d'une équipe qui veut gagner du temps avec l'IA sans exposer ses données ni diffuser un texte non vérifié.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est l'IA au Mali, et que font les pouvoirs publics ?",
            'paragraphes' => [
                "L'IA arrive dans les entreprises maliennes par le téléphone et par le français. Selon DataReportal, qui date ses chiffres d'octobre 2025, le Mali comptait 8,91 millions d'internautes, soit 35,1 % de la population, et 23,2 millions de connexions mobiles. Deux comptages circulent : Osiris rapportait 13 millions de clients internet fin 2023, un total d'abonnements. Retenez l'ordre de grandeur : beaucoup de lignes, moins d'utilisateurs réguliers.",
                "Sur le plan public, le pays n'affiche pas de stratégie nationale consacrée à l'IA dans les documents consultés. Les textes voisins existent : la Politique nationale de développement de l'économie numérique 2024-2028, dont l'élaboration a été lancée le 29 décembre 2023 selon Osiris, touche la connectivité, la cybersécurité et les compétences numériques, mais l'article ne mentionne pas l'IA. Pour une entreprise, aucune règle publique ne dit encore ce qu'un salarié peut coller dans un assistant : la règle se construit avec la loi sur les données.",
                "L'IA occupe pourtant la scène institutionnelle. Le gouvernement a décidé en avril 2026 d'organiser chaque année un Forum national de l'intelligence artificielle, qui doit réunir chercheurs, entreprises, institutions et Maliens de l'étranger, d'après La Nouvelle Tribune.",
                "Le même article note que le CIAR-Mali comptait 94 apprenants en mars 2026, dont 54 en licence, et que les documents publics ne détaillent pas encore de système d'IA déployé à grande échelle. Une formation d'entreprise courte, ancrée dans les tâches du service, répond à un autre besoin que ce cursus : celui de salariés déjà en poste.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres retenir avant de planifier une formation au Mali ?",
            'items' => [
                ['valeur' => '35,1 %', 'libelle' => "Part de la population malienne qui utilisait internet d'après les données d'octobre 2025, soit 8,91 millions de personnes, sur 25,4 millions d'habitants", 'source' => 'DataReportal, Digital 2026 : Mali', 'url' => 'https://datareportal.com/reports/digital-2026-mali'],
                ['valeur' => '109 %', 'libelle' => "Téledensité mobile fin 2023, soit plus de 25 millions d'abonnés : un chiffre de cartes SIM, pas de personnes, avec près de 17 millions de comptes de monnaie électronique (article du 19 mai 2024)", 'source' => 'Osiris, le marché du mobile au Mali', 'url' => 'https://osiris.sn/mali-le-marche-du-mobile-et-les-services-financiers-numeriques-au-beau-fixe.html'],
                ['valeur' => '94', 'libelle' => "Apprenants du CIAR-Mali en mars 2026, dont 54 en licence et 40 en formation préparatoire ; le centre a inauguré son nouveau site le 21 septembre 2026", 'source' => 'La Nouvelle Tribune, septembre 2026', 'url' => 'https://lanouvelletribune.info/2026/09/mali-ce-que-va-reellement-faire-le-nouveau-centre-dintelligence-artificielle-et-de-robotique/'],
                ['valeur' => '2,8 milliards', 'libelle' => "De FCFA : budget annuel du fonds de formation professionnelle FAFPA en 2022, contre 9,5 milliards en 2015", 'source' => "Organisation internationale du Travail, 28 juillet 2026", 'url' => 'https://www.ilo.org/resource/news/ilo-helps-advance-reform-malis-vocational-training-fund'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils d'IA une équipe malienne peut-elle utiliser, et à quel coût ?",
            'legende' => "Aucun tarif d'éditeur n'est reproduit ici : les formules et limites évoluent, la page officielle de chaque éditeur fait foi. Les abonnements ne font pas partie du prix de la formation.",
            'entetes' => ['Outil', 'Ce qu\'il fait bien pour une équipe', 'Coût chez l\'éditeur', 'Avec une connexion limitée'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', "Courriers, reformulations, tableaux tirés de messages en vrac ; l'outil que beaucoup de salariés ont déjà essayé", "Formules gratuite et payantes ; voir la page de l'éditeur","L'application mobile suffit pour les premiers essais ; rédiger la consigne hors ligne puis la coller d'un seul geste"],
                ['Claude (Anthropic)', "Lecture de dossiers longs, synthèse avec renvoi aux passages, français soigné", "Formules gratuite et payantes ; voir la page de l'éditeur","Téléverser un fichier lourd consomme plus de données qu'un message ; préparer les pièces la veille"],
                ['Gemini (Google)', "Équipes déjà sur Gmail, Docs ou Drive ; résumé de pièces jointes dans l'écosystème Google", "Formules gratuite et payantes ; voir la page de l'éditeur","Se lance depuis un compte Google que beaucoup de salariés possèdent déjà sur Android"],
                ['Copilot (Microsoft)', "Équipes qui travaillent dans Word, Excel, Outlook et Teams avec une licence Microsoft 365", "Dépend de la licence Microsoft 365 détenue ; voir la page de l'éditeur","Dépend de la licence que l'entreprise détient ; à vérifier avant la séance"],
                ['DeepSeek', "Questions techniques et contenus publics", "Voir la page de l'éditeur ; sa politique de confidentialité, mise à jour le 10 février 2026, indique que les données personnelles sont collectées, traitées et stockées en République populaire de Chine", "À réserver aux textes publics ; ne rien y déposer de confidentiel"],
                ['NotebookLM (Google)', "Poser des questions à un ensemble de documents choisis et obtenir des réponses qui renvoient à ces sources", "Formules gratuite et payantes, avec des limites qui évoluent ; voir la page de l'éditeur","Les sources se chargent une fois ; les questions suivantes pèsent peu"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quel outil choisir pour débuter, et faut-il payer dès le départ ?",
            'paragraphes' => [
                "Non, il n'y a rien à acheter avant la première séance. Les versions gratuites de ChatGPT, Claude et Gemini permettent d'apprendre la méthode, avec des plafonds d'usage qui se font sentir sur une journée chargée. Les formules et leurs limites évoluent, la page de chaque éditeur fait foi, et la décision d'abonnement vient après quelques semaines, quand l'entreprise sait ce qui sert vraiment.",
                "Le plus simple est de partir de l'existant : un compte Google pour Gemini et NotebookLM, une licence Microsoft 365 pour Copilot Chat. Pour comparer les offres d'équipe de ChatGPT, Claude et Gemini, leurs conditions sur les données et leur coût pour dix personnes, le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif de ces trois assistants</a> détaille chaque point.",
                "Les abonnements se règlent en devises étrangères, ce qui suppose un moyen de paiement international. La question se tranche avant l'achat. Le compte gratuit sert à apprendre sur des documents anonymisés ; il ne remplace pas un compte d'entreprise pour un dossier sensible.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles de données et de conformité s'appliquent au Mali ?",
            'paragraphes' => [
                "Les données personnelles relèvent de la loi n° 2013-015 du 21 mai 2013, modifiée par la loi n° 2017-070 du 18 décembre 2017, et l'autorité compétente est l'APDP, créée par ce texte et active depuis 2016. Avant d'envoyer des dossiers nominatifs à un assistant d'IA, une entreprise vérifie les formalités auprès de l'APDP : le traitement lui appartient, même si l'outil fait le travail.",
                "Le contrôle est réel. Selon Droit, médias et finance, l'APDP a communiqué un 18 juin sur une société qui avait refusé une mission de contrôle, avec une amende prévue entre cinq et vingt millions de FCFA, et qui avait reçu une mise en demeure pour déclarations non accomplies. Le même article rappelle qu'en mars 2025 l'autorité avait mis en demeure une centaine d'organismes. Un fichier de clients saisi dans un assistant doit donc pouvoir être expliqué à l'autorité.",
                "Les transferts hors du Mali comptent aussi : d'après la fiche de Data Protection Africa, un transfert n'est permis que si le pays destinataire offre une protection suffisante. Coller une liste de clients dans un assistant hébergé à l'étranger est un transfert. D'où la règle enseignée en séance : on remplace les noms et les numéros avant d'écrire à l'outil, et les dossiers qui ne peuvent pas être anonymisés ne sortent pas.",
                "Trois familles de documents guident les participants. Les documents publics (plaquette, appel d'offres publié) peuvent être soumis. Les documents internes sans donnée personnelle demandent un compte professionnel et un historique réglé. Les documents qui contiennent des noms, des salaires, des numéros de compte ou des dossiers de bénéficiaires sont anonymisés d'abord, ou restent dans l'entreprise.",
                "D'autres textes touchent le travail rédigé avec un assistant. Le décret n° 2022-0733 PT du 25 novembre 2022 fait de la facture normalisée, qui porte des mentions obligatoires et un autocollant de sécurité, le seul document faisant foi dans les transactions commerciales, selon la Direction générale des impôts : l'assistant peut préparer un brouillon de devis, jamais la facture elle-même. Le Mali est membre de l'OHADA depuis l'entrée en vigueur du traité, le 18 septembre 1995, d'où le SYSCOHADA pour les tableaux comptables.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que faire avant d'envoyer un document à un assistant, concrètement ?",
            'intro' => "Cinq réflexes composent la règle que chaque participant apprend à appliquer. Ils se retiennent facilement.",
            'items' => [
                ['titre' => "Classer d'abord", 'texte' => "Public, interne ou sensible : la réponse se donne avant d'ouvrir l'outil, pas après avoir collé le texte."],
                ['titre' => "Masquer les identités", 'texte' => "Un client devient « Client A », un numéro disparaît, un montant garde son ordre de grandeur. L'assistant n'a pas besoin du nom pour reformuler un courrier."],
                ['titre' => "Choisir le bon compte", 'texte' => "Le compte de l'entreprise pour le travail, jamais le compte personnel d'un salarié, que la société ne contrôle pas."],
                ['titre' => "Vérifier le réglage de l'historique", 'texte' => "Selon l'offre, les conversations peuvent servir à entraîner les modèles ; l'option se contrôle et se désactive quand c'est possible."],
                ['titre' => "Tenir un journal", 'texte' => "Noter quel document est passé dans quel outil, par qui et quand, dans un tableur partagé. Cette trace aide en cas de question d'un bailleur ou de l'APDP."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir selon l'équipe, et comment l'organiser depuis Cotonou ?",
            'legende' => "Tous les formats se donnent à distance, en français. Les durées et les effectifs sont ceux de la fiche de formation en entreprise ; l'heure légale de Bamako (UTC+0 toute l'année) retarde d'une heure sur celle de Cotonou.",
            'entetes' => ['Format', 'Durée et groupe', 'Pour quelle équipe', 'Organisation pour une équipe à Bamako ou en région'],
            'lignes'  => [
                ['Atelier découverte', "Une demi-journée, 12 personnes au plus", "Direction ou service qui veut voir l'outil à l'œuvre avant d'investir", "Documents envoyés la veille ; un participant par poste ; un téléphone en partage de connexion comme solution de repli"],
                ['Formation complète', "Deux jours en quatre demi-journées, 10 personnes au plus", "Service qui utilise déjà l'IA sans méthode, ou tâches répétitives bien identifiées", "Demi-journées placées le matin ou l'après-midi selon le réseau de la ville ; évaluation finale sur une tâche réelle, chronomètre en main"],
                ['Séances à distance étalées', "Cinq à six séances de 2 h 30, 8 personnes au plus", "Équipe répartie entre Bamako, Sikasso, Ségou, Kayes ou un chantier", "Une séance par jour ou par semaine ; chacun se connecte de son lieu de travail ; exercices terminés entre deux séances"],
                ['Session de direction', "Une demi-journée, petit groupe", "Dirigeants qui arbitrent budget, outils et règles", "Entretien en visioconférence, support écrit remis ensuite, voir aussi la formation <a href=\"/formations/ia-generative-dirigeants\">IA générative pour dirigeants</a>"],
                ['Accompagnement mensuel', "Une demi-journée par mois pendant trois mois", "Équipe déjà formée qui étend l'usage à d'autres tâches", "Point sur ce qui sert, nouvelle tâche ajoutée à chaque rendez-vous"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quel matériel, quelle langue et quels horaires prévoir pour une séance à Bamako ?",
            'paragraphes' => [
                "Bamako vit à l'heure de Greenwich toute l'année, Cotonou à UTC+1 : un rendez-vous fixé à 9 h à Bamako débute à 10 h à Cotonou, et les journées se recouvrent presque entièrement. Richard est joignable de 7 h à 20 h, ce qui laisse choisir une séance matinale ou de fin d'après-midi selon le rythme de l'entreprise.",
                "Chaque participant a besoin d'un ordinateur, d'un navigateur à jour et d'écouteurs ; un téléphone sert de secours pour partager sa connexion. Un questionnaire envoyé avant la séance précise le niveau de chacun, et les documents d'exercice sont téléchargés à l'avance sur les postes, afin qu'une coupure n'interrompe personne. Si la connexion tombe en cours de séance, une solution de repli est prévue et les supports permettent de rattraper le passage manqué.",
                "La langue de travail est le français, que l'article 31 de la Constitution de 2023 désigne comme langue de travail, alors que les langues nationales sont les langues officielles. Si votre public s'exprime surtout dans une langue nationale, on décide au cadrage ce qui doit être traduit. Un texte produit par un assistant dans l'une de ces langues se fait relire par un locuteur avant tout usage, car la qualité varie fortement selon la langue et le sujet.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "Que fait chaque métier malien avec l'IA pendant la formation ?",
            'items' => [
                ['secteur' => "Agriculture et coton", 'probleme' => "La Banque mondiale note que l'agriculture reste la première source de revenus des ménages ruraux pauvres, et que la croissance agricole ralentirait à 3,8 % en 2026 avec le recul du coton. Coopératives et négociants notent achats, pesées et avances dans des cahiers.", 'solution' => "Tâche : transformer des notes de collecte et des messages vocaux transcrits en tableau de stocks par site, puis résumer un rapport de campagne. Outil : ChatGPT pour structurer, tableur pour calculer. Résultat attendu : un tableau dont deux totaux sont recalculés à la main avant d'être diffusés."],
                ['secteur' => "Mines : or et lithium, et sous-traitance", 'probleme' => "Toujours selon la Banque mondiale, l'or reste le premier produit d'exportation et le lithium s'impose peu à peu. Autour des sites, des prestataires de transport, de maintenance et de restauration répondent à des donneurs d'ordre exigeants.", 'solution' => "Tâche : transformer les notes d'une intervention en rapport structuré et rédiger la réponse à une consultation, parfois en anglais. Outil : Claude sur un modèle de rapport de l'entreprise. Résultat attendu : un premier jet complet, avec quantités, dates et délais contrôlés par le responsable."],
                ['secteur' => "Commerce de gros et de détail à Bamako", 'probleme' => "Les commerçants vendent déjà par messagerie et encaissent par portefeuille mobile, puisque près de 17 millions de comptes de monnaie électronique existaient fin 2023. Les réponses, les prix et les commandes se perdent dans les fils de discussion.", 'solution' => "Tâche : bâtir une bibliothèque de réponses types, classer les demandes par motif, dresser le tableau des commandes du jour. Outil : ChatGPT ou Gemini. Résultat attendu : des réponses relues par le gérant et un tableau qui correspond aux messages reçus."],
                ['secteur' => "Banque, microfinance et monnaie électronique", 'probleme' => "Les équipes rédigent des notes d'information et des comptes rendus de visite tout en manipulant des informations clients protégées par la loi de 2013.", 'solution' => "Tâche : produire une note client et un compte rendu à partir de notes anonymisées. Outil : Copilot Chat si la licence Microsoft 365 existe, sinon un assistant sur compte d'entreprise. Résultat attendu : des textes cohérents, sans nom ni numéro de client dans l'outil."],
                ['secteur' => "ONG et projets de développement", 'probleme' => "Les programmes produisent des rapports pour plusieurs bailleurs, chacun avec son format, et manipulent des listes de bénéficiaires sensibles.", 'solution' => "Tâche : résumer un rapport long en citant les pages et préparer un tableau d'indicateurs. Outil : Claude ou NotebookLM sur des documents sans données nominatives. Résultat attendu : une synthèse dont chaque chiffre est retrouvé dans la source."],
                ['secteur' => "Écoles, centres de formation et cabinets comptables", 'probleme' => "Les centres doivent justifier inscriptions et présences, et les cabinets tiennent des comptes SYSCOHADA tout en relançant leurs clients chaque fin de mois.", 'solution' => "Tâche : rédiger convocations, supports de cours, relances et commentaires de tableaux de dépenses. Outil : un assistant sur compte d'entreprise et le tableur du service. Résultat attendu : des textes utilisables et un contrôle des chiffres fait à la main, jamais délégué."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer une formation IA, ou la faire financer, au Mali ?",
            'paragraphes' => [
                "Aucun financement n'est acquis d'avance, et le plus prudent consiste à budgéter la formation comme une dépense de l'entreprise. Le Fonds d'appui à la formation professionnelle et à l'apprentissage, le FAFPA, est l'organisme public à interroger, mais il traverse une réforme de fond qui rend toute promesse hasardeuse.",
                "Selon l'Organisation internationale du Travail (28 juillet 2026), la taxe de formation professionnelle, qui finançait 83 % des activités de formation sur la période étudiée, a été remplacée par une subvention de l'État, dont les participants ont discuté la capacité à rester le principal mécanisme de financement. Le budget du fonds est passé de 9,5 milliards de FCFA en 2015 à 2,8 milliards en 2022. Un atelier de validation du diagnostic s'est tenu à Bamako les 30 juin et 1er juillet 2026, et l'une des priorités de la réforme est de diversifier et de sécuriser le financement, y compris par un possible retour de la contribution des entreprises.",
                "Concrètement, écrivez au fonds avec le programme, le public, la durée et le devis, et posez trois questions : quelles lignes sont ouvertes aux entreprises, un prestataire doit-il être habilité, quel est le délai d'instruction. Richard n'affiche aucun agrément d'un fonds public ; si une prise en charge conditionne votre décision, la réponse écrite précède la signature.",
                "Les organisations qui exécutent un projet pour un bailleur ont souvent une autre piste : la ligne de renforcement des capacités du budget. Relisez la convention pour savoir si la formation d'un salarié à l'IA est une dépense admise et quelles pièces la justifient. Le programme remis, les feuilles de présence et l'attestation nominative de fin de formation servent dans tous les cas.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une formation IA pour une équipe malienne ?",
            'intro'      => "Aucune somme n'est affichée sur cette page : le prix se fixe sur devis, en FCFA, après l'échange de cadrage, et chaque poste y figure. Les abonnements aux assistants restent au nom de l'entreprise et ne sont pas compris.",
            'items'      => [
                ['offre' => "Atelier découverte", 'prix' => "Sur devis, en FCFA", 'inclus' => ["Une demi-journée à distance", "Deux tâches travaillées sur vos documents", "Règle de classement des données travaillée en séance", "Recommandation pour la suite"]],
                ['offre' => "Formation complète", 'prix' => "Sur devis, en FCFA", 'inclus' => ["Quatre demi-journées à distance", "Exercices préparés sur vos documents anonymisés", "Supports de séance", "Évaluation sur la tâche cible et attestation", "Canal direct après la session"]],
                ['offre' => "Accompagnement mensuel", 'prix' => "Sur devis, en FCFA", 'inclus' => ["Une demi-journée par mois pendant trois mois", "Point sur ce qui sert", "Nouvelles tâches ajoutées"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes à former.",
                "La durée retenue et le nombre de demi-journées.",
                "Le mode : séances à distance seules, ou combinées à un accompagnement mensuel.",
                "Le temps de préparation des exercices sur les documents de l'entreprise, anonymisation comprise.",
                "La langue des supports, en français ou en anglais.",
                "Le suivi demandé après la session.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment régler la formation et la budgéter depuis le Mali ?",
            'paragraphes' => [
                "Le devis est libellé en FCFA, la monnaie du Mali comme celle du Bénin, sans conversion à prévoir. Richard accepte Mobile Money (MTN, Moov), carte bancaire, PayPal, virement et espèces ; le mode se fixe au devis. Une société qui paie par virement depuis sa banque malienne demande les frais avant l'émission de la facture.",
                "Un budget complet compte trois lignes : la formation, les abonnements aux assistants, réglés en devises étrangères, et le temps des salariés mobilisés pendant les séances. La troisième est la plus oubliée. Quatre demi-journées pour dix personnes représentent plusieurs journées de travail ; il vaut mieux l'inscrire au planning avant la première séance.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs reviennent chez les équipes maliennes qui démarrent l'IA ?",
            'intro' => "Ces écarts naissent autant du contexte que de l'outil. Chacun se prévient pendant la session.",
            'items' => [
                ['titre' => "Confondre abonnés et internautes", 'texte' => "109 % de téledensité mobile fin 2023 ne signifie pas que chaque salarié est en ligne en continu : DataReportal compte 35,1 % d'internautes. Une séance qui suppose un débit constant échoue à la première coupure."],
                ['titre' => "Coller un fichier de clients dans un compte personnel", 'texte' => "La loi de 2013 encadre ces données et l'APDP contrôle. Un fichier nominatif se masque d'abord, ou ne sort pas."],
                ['titre' => "Déposer un document interne dans DeepSeek", 'texte' => "Sa politique de confidentialité place le traitement des données en Chine. L'outil convient à des contenus publics, pas à une offre commerciale ni à un rapport de bailleur."],
                ['titre' => "Déléguer la facture à l'assistant", 'texte' => "La facture normalisée du décret de 2022 suit ses mentions et son autocollant. L'assistant peut rédiger le message qui l'accompagne, pas la remplacer."],
                ['titre' => "Laisser l'assistant calculer", 'texte' => "Un total de stock, une marge ou une TVA se recalcule dans le tableur. L'assistant sert à structurer et à rédiger, pas à garantir un chiffre."],
                ['titre' => "Compter sur le FAFPA sans lui écrire", 'texte' => "Le fonds est en pleine réforme : sans réponse écrite, la formation se budgète sans prise en charge."],
                ['titre' => "Souscrire plusieurs abonnements avant de mesurer", 'texte' => "Avec un paiement en devises, chaque abonnement pèse sur la trésorerie. On mesure le temps gagné sur une tâche avec les versions gratuites, puis on décide."],
                ['titre' => "Former tout le monde de la même façon", 'texte' => "Un comptable, une commerciale et un conducteur de travaux n'ont pas les mêmes tâches : les groupes se composent par métier, et les décideurs relèvent d'une séance à part."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Qui répond d'un texte rédigé avec un assistant dans votre société ?",
            'texte' => "La personne qui le signe et l'entreprise qui l'envoie. Une offre, une relance ou un rapport rédigé avec l'aide d'un assistant engage l'entreprise comme s'il avait été écrit à la main. Dans chaque service, une personne nommée relit, connaît la source de chaque fait et sait dire d'où vient un chiffre. Si personne ne sait répondre à « d'où vient ce nombre ? », le document ne part pas.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos équipes maliennes à l'IA avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà travaillé avec des entreprises au Mali. Avec " . $ans . " ans d'expérience dans le numérique et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes, dans " . count((array) fait('pays_travailles')) . " pays. Il a conçu <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fonde <a href=\"https://audyxa.com\">Audyxa</a>. Il n'est certifié par aucun éditeur d'IA et ne se présente comme partenaire d'aucun.",
                "Sa manière de travailler tient en peu de points : un ou deux entretiens de cadrage, qui peuvent conclure qu'un atelier d'une demi-journée suffit ; des exercices construits sur vos documents ; des supports qui restent à l'entreprise ; une épreuve finale sur une tâche réelle, chronomètre en main ; un canal direct après la session, et un accompagnement mensuel si l'équipe le souhaite. Il ne promet aucun gain chiffré.",
                "Quand le besoin dépasse l'usage quotidien, il peut relier l'IA à vos outils par une mission d'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a>, ou déployer un <a href=\"/services/agents-ia-chatbot-whatsapp\">assistant WhatsApp</a> pour vos clients. Parmi ses réalisations au Bénin, la web TV OBA TV et le site de GC Pro Consulting ont été menés en direct, et la boutique en ligne d'IK Fashion House a été réalisée en sous-traitance pour Digital Développement. Elles se consultent sur la page des <a href=\"/realisations/\">réalisations</a>.",
                "Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays servis sur celle des <a href=\"/zones/\">zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de lancer une formation IA au Mali ?",
            'texte' => "Choisissez deux ou trois tâches réelles par groupe, préparez les documents et les comptes avant la séance, classez les données au regard de la loi de 2013 et de l'APDP, prévoyez une coupure de réseau, mesurez le temps de la tâche avant et un mois après, et écrivez au FAFPA avant de compter sur un financement.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre équipe au Mali à l'IA ?",
            'texte'  => "Indiquez votre ville, le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps et les outils déjà en place : la réponse arrive sous 24 heures, puis un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Quelle différence entre un formateur IA, un consultant IA et un expert IA au Mali ?", 'r' => "Ces titres ne sont pas réglementés. Un formateur IA apprend aux équipes à utiliser ChatGPT, Claude, Gemini, Copilot, DeepSeek ou NotebookLM sur leurs documents ; un consultant IA conseille la direction sur les usages, les outils et les règles ; un expert IA est plutôt un profil technique ou de recherche. Richard SALANON intervient comme formateur et comme consultant, sans certification d'éditeur. Pour une entreprise malienne, l'essentiel est ce que l'équipe sait faire seule après la session."],
        ['q' => "Qui peut former les équipes à l'IA au Mali ?", 'r' => "Des établissements comme le CIAR-Mali, des cabinets privés ou un formateur d'entreprise à distance. Richard SALANON, consultant basé à Cotonou, anime en français, avec une heure d'écart avec Bamako, des formations sur vos propres documents, avec un devis en FCFA."],
        ['q' => "La formation peut-elle se faire entièrement à distance depuis Bamako ?", 'r' => "Oui, en visioconférence avec partage d'écran, documents envoyés à l'avance et solution de repli en cas de coupure. Chaque participant a besoin d'un ordinateur et d'un téléphone de secours."],
        ['q' => "Quelle loi s'applique aux données confiées à un assistant d'IA au Mali ?", 'r' => "La loi n° 2013-015 du 21 mai 2013, modifiée par la loi n° 2017-070 du 18 décembre 2017, contrôlée par l'APDP. Les formalités applicables à votre traitement se confirment auprès de l'autorité avant tout envoi de dossiers nominatifs."],
        ['q' => "Peut-on envoyer des données de clients à un assistant hébergé à l'étranger ?", 'r' => "Le transfert hors du Mali n'est permis que vers un pays qui assure une protection suffisante, d'après la fiche de Data Protection Africa. La règle enseignée est de masquer les identités avant d'écrire à l'outil, et de garder en interne les dossiers qui ne peuvent pas l'être."],
        ['q' => "Peut-on utiliser DeepSeek avec des documents de l'entreprise ?", 'r' => "Mieux vaut le réserver aux contenus publics. Sa politique de confidentialité, mise à jour le 10 février 2026, indique que les données personnelles sont collectées, traitées et stockées en République populaire de Chine."],
        ['q' => "Le FAFPA finance-t-il une formation à l'IA ?", 'r' => "Cela dépend des conditions du fonds, qui est en cours de réforme en 2026 d'après l'OIT. Demandez-lui par écrit quelles lignes sont ouvertes et si un prestataire doit être habilité. Aucune prise en charge n'est garantie."],
        ['q' => "Un assistant d'IA peut-il préparer une facture normalisée ?", 'r' => "Il peut rédiger un brouillon de devis ou un message d'accompagnement. La facture normalisée du décret n° 2022-0733 PT du 25 novembre 2022, avec ses mentions obligatoires et son autocollant, relève du système de la Direction générale des impôts."],
        ['q' => "En quelle langue se donne la formation ?", 'r' => "En français, langue de travail selon la Constitution de 2023. Un texte produit par un assistant dans une langue nationale est relu par un locuteur avant tout usage, et les supports peuvent être fournis en anglais pour les équipes qui répondent à des appels internationaux."],
        ['q' => "Faut-il un abonnement payant pour suivre la formation ?", 'r' => "Non. Les versions gratuites suffisent pour apprendre la méthode. Les formules et leurs limites évoluent, la page de chaque éditeur fait foi, et la décision d'abonnement vient après les premières semaines."],
        ['q' => "Combien coûte la formation ?", 'r' => "Le prix est fixé sur devis, en FCFA, après un échange de cadrage. Il dépend du nombre de participants, de la durée, du mode de séance et de la préparation sur vos documents. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Richard est-il certifié par OpenAI, Anthropic ou Google ?", 'r' => "Non. Il n'est certifié par aucun éditeur et ne se présente comme partenaire d'aucun. L'attestation remise est une attestation nominative de fin de formation, pas un diplôme."],
    ],

    'sources' => [
        ['titre' => "DeepSeek, politique de confidentialité (mise à jour le 10 février 2026)", 'url' => 'https://cdn.deepseek.com/policies/en-US/deepseek-privacy-policy.html', 'date' => '2026-10-26'],
        ['titre' => "DataReportal, Digital 2026 : Mali", 'url' => 'https://datareportal.com/reports/digital-2026-mali', 'date' => '2026-10-26'],
        ['titre' => "Osiris, le marché du mobile et des services financiers numériques au Mali (19 mai 2024)", 'url' => 'https://osiris.sn/mali-le-marche-du-mobile-et-les-services-financiers-numeriques-au-beau-fixe.html', 'date' => '2026-10-26'],
        ['titre' => "Osiris, un centre public d'intelligence artificielle inauguré près de Bamako (21 septembre 2026)", 'url' => 'https://osiris.sn/mali-un-centre-public-d-intelligence-artificielle-inaugure-pres-de-bamako.html', 'date' => '2026-10-26'],
        ['titre' => "La Nouvelle Tribune, ce que va réellement faire le CIAR-Mali (septembre 2026)", 'url' => 'https://lanouvelletribune.info/2026/09/mali-ce-que-va-reellement-faire-le-nouveau-centre-dintelligence-artificielle-et-de-robotique/', 'date' => '2026-10-26'],
        ['titre' => "Osiris, la Politique nationale de développement de l'économie numérique du Mali 2024-2028", 'url' => 'https://www.osiris.sn/transformation-digitale-le-mali-attend-son-document-de-politique-nationale-de.html', 'date' => '2026-10-26'],
        ['titre' => "Data Protection Africa, fiche du Mali : loi n° 2013-015 et APDP", 'url' => 'https://dataprotection.africa/?p=1335', 'date' => '2026-10-26'],
        ['titre' => "Droit, médias et finance, l'APDP sanctionne une société (communiqué du 18 juin)", 'url' => 'https://droitmediasfinance.com/index.php/actualites/droit-tech-fintech/1026-mali-lautorite-de-protection-des-donnees-a-caractere-personnel-inflige-une-sanction-pecuniaire-a-la-societe-aminata-konate-sarl-sak', 'date' => '2026-10-26'],
        ['titre' => "DGI du Mali, décret instituant le système sécurisé de facture normalisée", 'url' => 'https://www.dgi.gouv.ml/institution-du-systeme-securise-de-factures-normalisee-le-president-de-la-transition-signe-le-decret/', 'date' => '2026-10-26'],
        ['titre' => "OHADA, le Mali, État membre", 'url' => 'https://www.ohada.com/etats-membres/mali.html', 'date' => '2026-10-26'],
        ['titre' => "Constitution du Mali de 2023, article 31 sur les langues", 'url' => 'https://axl.cefan.ulaval.ca/afrique/mali-const-2023.htm', 'date' => '2026-10-26'],
        ['titre' => "OIT, réforme du Fonds d'appui à la formation professionnelle et à l'apprentissage du Mali (28 juillet 2026)", 'url' => 'https://www.ilo.org/resource/news/ilo-helps-advance-reform-malis-vocational-training-fund', 'date' => '2026-10-26'],
        ['titre' => "Banque mondiale, Mali : vue d'ensemble", 'url' => 'https://www.banquemondiale.org/fr/country/mali/overview', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-ethique-conformite', 'securite-donnees-dirigeants'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise', 'agents-ia-chatbot-whatsapp'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
