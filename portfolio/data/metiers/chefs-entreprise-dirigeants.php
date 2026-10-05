<?php
// ============================================================
// data/metiers/chefs-entreprise-dirigeants.php · Page « formations par
// métier » pour les chefs d'entreprise et dirigeants (vague 1C, univers
// Direction et gestion, prioritaire, statut F : déjà formés). Angle propre :
// le métier de dirigeant (décider, piloter, choisir les outils, digitaliser
// l'entreprise) ; la page oriente vers les fiches ia-generative-dirigeants
// (décisions sur l'IA), strategie-transformation-digitale (feuille de route
// en comité), digitaliser-son-entreprise (petite structure) et gouvernance-ia
// (charte), sans reprendre leur texte. Faits externes relevés le 05/10/2026 :
// OHADA (AUSCGIE, article 161 ; AUDCIF), loi béninoise n° 2017-20 (articles
// 426 et 427, PDF du SGG), RGPD (articles 24 et 83), directive NIS 2
// (article 20), Commission européenne (article 4 du règlement sur l'IA, fait
// vérifié du catalogue), DGI du Bénin (factures normalisées), Baromètre France
// Num 2026, Microsoft Work Trend Index 2024, Interpol (rapport Afrique 2025),
// Service-public (FAF des indépendants), FDFP, 3FPT, FODEFCA, France
// Compétences ; tarifs Odoo, n8n et WhatsApp repris des faits vérifiés.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation numérique et IA pour chefs d'entreprise et dirigeants : décider des bons outils, piloter sur des chiffres fiables et digitaliser l'entreprise sans perdre la main",
    'title'   => "Formation dirigeants : numérique et IA | Richard SALANON",
    'meta'    => "Formation des chefs d'entreprise au numérique et à l'IA : choisir les outils, piloter sur des chiffres fiables, connaître ses responsabilités. Sur devis.",
    'en_bref' => "Cette page s'adresse aux chefs d'entreprise, gérants, associés et directeurs généraux qui doivent décider de ce que leur entreprise fait du numérique et de l'intelligence artificielle, sans devenir techniciens. Elle décrit ce que ces outils changent dans le métier de dirigeant, ce qu'ils ne doivent jamais faire à sa place, et un parcours type de deux heures à trois jours construit sur les chiffres et les outils de l'entreprise. La formation se tient dans vos locaux, à distance, en hybride ou entre dirigeants de plusieurs entreprises, et son prix est fixé sur devis.",
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Direction et gestion',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : lire son entreprise en chiffres, avec les outils qu'elle utilise déjà",
            'duree'  => '3 h 30',
            'points' => [
                "Inventaire des endroits où vivent les chiffres de l'entreprise : caisse, commandes reçues sur WhatsApp, relevés Mobile Money et bancaires, factures normalisées, tableur du comptable.",
                "Les cinq chiffres qu'un dirigeant devrait voir chaque lundi sans avoir à les demander : encaissements, créances échues, stock critique, devis en attente, trésorerie prévue à quatre semaines.",
                "Exercice : reconstituer la semaine écoulée à partir de ces sources, en notant chaque chiffre introuvable ou contradictoire.",
                "Construction d'un tableau de bord d'une page dans un tableur partagé, alimenté par les équipes et non par le dirigeant lui-même.",
                "Ce qu'un logiciel de gestion comme Odoo ou Dolibarr ajoute à ce tableau, et les signes qui montrent qu'il devient nécessaire.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : se servir de l'IA dans son propre travail de dirigeant, avec des règles personnelles",
            'duree'  => '3 h 30',
            'points' => [
                "Préparer un rendez-vous avec un banquier, un bailleur ou un gros client : synthèse des pièces, questions probables, points faibles du dossier.",
                "Rédiger et relire courriers, notes aux équipes et comptes rendus de conseil, en gardant la voix et la signature du dirigeant.",
                "Parcourir un contrat ou un appel d'offres avec un assistant pour repérer clauses et échéances, sans remplacer l'avis d'un avocat ou d'un juriste.",
                "Ce qui n'entre jamais dans un assistant en ligne : données de salariés et de clients, comptes non publiés, projets de cession ou de levée de fonds, mots de passe.",
                "Exercice de vérification sur trois réponses volontairement fausses : chiffres, dates, articles de loi inventés.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : choisir, acheter et garder la maîtrise d'un outil numérique",
            'duree'  => '3 h 30',
            'points' => [
                "Écrire le besoin sur une page avant de recevoir le premier commercial : problème à résoudre, volumes, utilisateurs, contraintes fiscales.",
                "Comparer trois offres sur la même grille : coût sur trois ans, sort des données, conditions de sortie, assistance, références vérifiables.",
                "Les comptes qui doivent être au nom de l'entreprise : nom de domaine, messagerie, numéro WhatsApp Business, logiciel de gestion, abonnements d'IA.",
                "Lire un devis de prestataire : forfait ou temps passé, recette, maintenance, propriété du code et des paramétrages.",
                "Jeu de rôle : le dirigeant face à un vendeur qui presse de signer avant la fin du mois.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : tenir son rôle de responsable, des données personnelles aux virements",
            'duree'  => '3 h 30',
            'points' => [
                "Ce que les textes mettent à la charge de la direction : protection des données, sécurité des systèmes, facturation, information des équipes sur l'IA.",
                "Fraude au faux virement et au changement de coordonnées bancaires : le circuit de validation que le dirigeant s'applique à lui-même.",
                "Sauvegardes, accès, départ d'un salarié : les questions à poser chaque trimestre à la personne qui gère l'informatique.",
                "Exercice : la première heure après une messagerie piratée ou un téléphone professionnel volé.",
                "Rédaction, sur une page, des règles de départ de l'entreprise pour l'IA et pour les accès.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin, en option : arbitrer entre les chantiers numériques et lancer le premier",
            'duree'  => '3 h 30',
            'points' => [
                "Classer les demandes en attente (logiciel, site, automatisation, IA) selon leur effet sur la trésorerie, le temps des équipes et le risque.",
                "Retenir un seul chantier, nommer son responsable, relever la mesure de départ et fixer la date de décision.",
                "Le rôle du dirigeant pendant le chantier : point hebdomadaire de quinze minutes, décisions réservées, signaux de dérive.",
                "Annoncer le changement aux équipes : ce qui change pour chacun, ce qui ne change pas, à qui poser ses questions.",
                "Plan des trente prochains jours, relu par l'associé ou par un autre dirigeant du groupe.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, à distance : point de suivi",
            'duree'  => '2 h',
            'points' => [
                "Lecture du tableau de bord tenu pendant le mois : ce qui a été rempli, ce qui ne l'a pas été, et pourquoi.",
                "Questions apparues dans l'usage quotidien de l'IA et des outils.",
                "Avancement du premier chantier et décision de poursuivre, de corriger ou d'attendre.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Chefs d'entreprise, gérants, associés et directeurs généraux, sans prérequis technique"],
        ['l' => 'Durée', 'v' => "De 2 heures à 3 jours en demi-journées, puis 2 heures de suivi à un mois"],
        ['l' => 'Formats', 'v' => "Intra, groupe de dirigeants, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que changent l'intelligence artificielle, la digitalisation et l'automatisation dans le métier de dirigeant ?",
            'paragraphes' => [
                "Le métier de dirigeant n'a pas changé de nature : il consiste toujours à décider avec des informations incomplètes, à répartir des moyens rares et à répondre de ses choix devant les associés, les salariés, les clients, l'administration fiscale et la banque. Ce qui change, c'est la vitesse et la provenance des informations. Les commandes arrivent sur WhatsApp, les paiements par Mobile Money, les factures doivent sortir d'un système certifié, et un assistant d'IA rédige en une minute la note qui prenait une heure. Chaque outil promet du temps ; chacun ajoute aussi une décision à prendre.",
                "Trois glissements touchent directement le chef d'entreprise. Le premier concerne le pilotage : les chiffres existent, souvent en double, dispersés entre la caisse, le téléphone du commercial et le tableur du comptable, et le travail du dirigeant devient de choisir lesquels font foi. Le deuxième concerne les achats : abonnements, licences et prestations se signent désormais chaque mois, pour des sommes modestes, sans l'arbitrage que l'on réservait aux gros investissements. Le troisième concerne l'organisation : l'automatisation supprime des ressaisies, mais elle déplace le contrôle, qui doit être pensé avant la mise en service et non après le premier incident.",
                "L'intelligence artificielle générative ajoute une particularité : elle entre dans l'entreprise avant que la direction l'ait décidé. Selon le Work Trend Index publié en mai 2024 par Microsoft et LinkedIn, à partir d'une enquête menée auprès de 31 000 personnes dans 31 pays, 78 % des personnes qui utilisent l'IA au travail y apportaient leurs propres outils, et 80 % dans les petites et moyennes entreprises. Le dirigeant ne choisit donc pas entre l'IA et son absence ; il choisit entre un usage qu'il encadre et un usage qu'il ignore.",
                "Cette page décrit la formation que Richard SALANON propose aux dirigeants pour tenir ce rôle : savoir ce qu'un outil fait réellement, lire ses propres chiffres, acheter sans dépendre du discours du vendeur, connaître ses responsabilités et lancer un chantier à la fois. Elle ne transforme pas un dirigeant en technicien. Elle ne traite ni de l'animation d'une équipe au quotidien ni de la finance d'entreprise : son objet est l'usage que la direction fait du numérique et de l'IA, et les décisions qui ne peuvent revenir qu'à elle.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles décisions du dirigeant changent avec le numérique, et que garde-t-il entre ses mains ?",
            'legende' => "Les outils accélèrent la préparation de la décision ; ils ne la prennent pas. La troisième colonne liste ce que la formation apprend à garder sous le contrôle direct de la direction.",
            'entetes' => ['Décision', "Ce que le numérique ou l'IA change", 'Ce qui reste au dirigeant'],
            'lignes'  => [
                ['Suivre la trésorerie', "Les encaissements Mobile Money et bancaires peuvent remonter chaque jour dans un tableur ou un logiciel de gestion", "Décider quel chiffre fait foi, à quel rythme le regarder, et quoi faire quand il baisse"],
                ['Fixer un prix ou accorder une remise', "Un assistant compare des grilles, simule des marges et rédige la proposition", "Valider le prix final : aucun prix ni délai ne part chez le client sans une personne qui l'engage"],
                ['Recruter', "Des outils rédigent les annonces et proposent de trier les candidatures", "Lire les candidatures écartées comme celles retenues, et répondre d'une décision qui touche une personne"],
                ['Choisir un logiciel', "Démonstrations, essais gratuits et comparatifs en ligne se multiplient", "Écrire le besoin, comparer sur une même grille, garder les comptes au nom de l'entreprise"],
                ['Répondre aux clients', "Réponses rapides sur WhatsApp, modèles de messages, robots conversationnels", "Fixer ce qu'un robot peut promettre et à quel moment la conversation passe à un humain"],
                ['Autoriser un paiement', "Virements en ligne et paiements mobiles validés depuis un téléphone", "Imposer un double contrôle aux paiements inhabituels, y compris à ceux qu'il ordonne lui-même"],
                ["Parler au nom de l'entreprise", "Textes, visuels et vidéos produits en quelques minutes", "Relire ce qui sort sous le nom de l'entreprise et en assumer chaque phrase"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que l'IA et les outils numériques ne doivent-ils jamais faire à la place du dirigeant, et quels textes le disent ?",
            'intro' => "Un outil ne signe rien, ne répond de rien et n'a pas de patrimoine. Les textes qui encadrent la vie des entreprises, en zone OHADA comme en Europe, désignent toujours une personne responsable, et cette personne est très souvent le dirigeant. Voici les limites que la formation pose, avec les textes qui les fondent ; leur lecture juridique détaillée reste l'affaire de votre avocat ou de votre juriste.",
            'items' => [
                ['titre' => "Engager l'entreprise à sa place", 'texte' => "L'article 161 de l'Acte uniforme OHADA relatif au droit des sociétés commerciales et du groupement d'intérêt économique, en vigueur depuis le 5 mai 2014, rend chaque dirigeant social responsable individuellement envers les tiers des fautes qu'il commet dans l'exercice de ses fonctions, et solidairement quand plusieurs dirigeants ont participé aux mêmes faits. Un engagement rédigé par une IA et envoyé sans relecture reste un acte de gestion."],
                ['titre' => 'Exposer des données personnelles', 'texte' => "Au Bénin, l'article 426 de la loi n° 2017-20 portant code du numérique impose au responsable du traitement et à son sous-traitant des mesures techniques et organisationnelles appropriées pour protéger les données, et l'article 427 l'oblige à notifier sans délai à l'Autorité et à la personne concernée toute rupture de sécurité. Un fichier de clients collé dans un assistant en ligne engage la direction, même quand c'est un salarié qui l'a fait."],
                ['titre' => 'Remplacer la preuve de conformité', 'texte' => "En Europe, l'article 24 du RGPD demande au responsable du traitement de mettre en œuvre des mesures appropriées et d'être en mesure de démontrer que le traitement est conforme ; l'article 83 prévoit, pour les manquements les plus graves, des amendes pouvant atteindre 20 millions d'euros ou 4 % du chiffre d'affaires annuel mondial. Démontrer suppose des règles écrites et datées, pas des habitudes."],
                ['titre' => 'Porter seuls la cybersécurité', 'texte' => "Pour les entités essentielles et importantes de l'Union européenne, l'article 20 de la directive NIS 2 du 14 décembre 2022 prévoit que les organes de direction approuvent les mesures de gestion des risques, supervisent leur mise en œuvre, peuvent être tenus responsables de leur violation et suivent une formation. Toutes les PME ne sont pas visées, mais le texte dit clairement où se situe la responsabilité."],
                ['titre' => "Laisser les équipes découvrir l'IA seules", 'texte' => "L'article 4 du règlement européen sur l'IA impose aux fournisseurs et aux utilisateurs professionnels de systèmes d'IA de développer la maîtrise de l'IA de leur personnel. Selon les questions et réponses de la Commission européenne mises à jour le 27 juillet 2026, l'obligation s'applique depuis le 2 février 2025, et son contrôle comme ses sanctions depuis le 3 août 2026."],
                ['titre' => 'Vendre hors du circuit de facturation légal', 'texte' => "Au Bénin, le directeur général des Impôts rappelait le 27 février 2020 que vendre sans facture normalisée expose à une amende de dix fois le montant de la facture, d'au moins un million de francs CFA par opération, puis en cas de récidive à vingt fois le montant, d'au moins deux millions, avec une fermeture administrative de trois mois. Un outil de vente branché à côté du système certifié fait porter ce risque au dirigeant."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Qui répond d'une erreur commise par un outil, un salarié pressé ou un prestataire ?",
            'texte' => "L'entreprise d'abord, et souvent son dirigeant. Un prestataire répond de ce que prévoit son contrat, un salarié applique les règles qu'on lui a données, et l'outil ne répond de rien. L'histoire de <a href=\"/histoires/british-airways-piratage\">British Airways</a> montre une compagnie sanctionnée pour une page de paiement modifiée à partir de l'accès d'un sous-traitant ; celle de <a href=\"/histoires/maersk-notpetya\">Maersk et NotPetya</a>, une reprise qui n'a tenu qu'à une copie restée hors ligne par hasard. La formation en tire trois règles de direction : chaque outil a un responsable nommé dans l'entreprise, chaque accès critique est au nom de l'entreprise, et chaque paiement inhabituel passe par une deuxième personne.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment l'IA sert-elle concrètement le travail personnel d'un dirigeant ?",
            'paragraphes' => [
                "Avant de décider pour toute l'entreprise, la formation commence par le bureau du dirigeant. Un chef d'entreprise qui s'est servi lui-même d'un assistant, avec méthode, pose ensuite des règles plus justes : il sait ce que l'outil fait bien, où il se trompe et combien de temps prend la relecture. Il cesse aussi de dépendre de l'enthousiasme ou de la méfiance des autres pour juger une proposition.",
                "Les usages travaillés en séance sont ceux de la semaine d'un dirigeant. Préparer un rendez-vous bancaire : décrire la structure du dossier, demander à l'assistant les dix questions qu'un chargé d'affaires posera, puis répondre soi-même. Transformer trente minutes de notes dictées après une réunion en compte rendu à diffuser. Résumer un appel d'offres de quatre-vingts pages en conditions éliminatoires, pièces exigées et dates. Reformuler une réponse à un client mécontent pour qu'elle reste ferme sans être blessante.",
                "Chaque exercice se termine par une vérification. Les assistants inventent parfois un article de loi, une date ou un taux, et le font avec assurance. Ils connaissent mal les règles fiscales et sociales propres au Bénin, au Sénégal ou à la Côte d'Ivoire tant qu'on ne leur fournit pas le texte. Le dirigeant apprend donc à exiger les sources, à recouper les chiffres et à ne jamais envoyer tel quel un document qui engage l'entreprise.",
                "Reste la question du compte utilisé. Un compte personnel gratuit, un abonnement individuel payé par carte et une offre d'équipe administrée par l'entreprise n'offrent pas les mêmes garanties sur les données ni les mêmes possibilités de contrôle. Ce choix est une décision de direction, avec un coût et des conditions à lire ; le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide à le préparer, et la séance permet de le trancher.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "Quelles situations types de dirigeants la formation traite-t-elle, selon l'entreprise et le pays ?",
            'items' => [
                ['secteur' => 'Négoce de matériaux de construction, à Cotonou', 'probleme' => "Le gérant suit ses ventes au téléphone : commandes reçues sur WhatsApp, paiements Mobile Money vérifiés à la main, factures normalisées émises en fin de journée, et des écarts de caisse découverts une semaine trop tard.", 'solution' => "Tableau du lundi bâti sur les relevés existants, règle écrite « aucune livraison sans facture normalisée », puis comparaison entre un logiciel de caisse relié à la facturation et Dolibarr, avec un seul chantier lancé pour le trimestre."],
                ['secteur' => "Société de conseil, à Abidjan", 'probleme' => "Les associés reçoivent chaque semaine des offres d'outils d'IA, et trois consultants rédigent déjà les rapports des clients avec des comptes gratuits personnels.", 'solution' => "Règles de départ écrites pendant la séance, abonnement d'équipe administré pour les seuls rédacteurs, aucune donnée de client dans un compte personnel, puis formation du groupe chargé de la charte complète."],
                ['secteur' => 'Entreprise de bâtiment, à Douala', 'probleme' => "Les chefs de chantier envoient photos et métrés sur WhatsApp, chaque conducteur de travaux a son propre modèle de devis, et le dirigeant découvre les dépassements au moment de facturer.", 'solution' => "Inventaire des sources de chiffres, modèle de devis unique, point hebdomadaire de quinze minutes sur les cinq plus gros chantiers, et décision sur un logiciel de gestion repoussée tant que les devis ne sont pas homogènes."],
                ['secteur' => 'Transport et logistique, à Dakar', 'probleme' => "Un courriel imitant un fournisseur habituel annonce un changement de compte bancaire la veille d'un règlement important ; la comptable hésite et appelle le directeur, qui est en déplacement.", 'solution' => "Mise en situation pendant la formation, circuit de vérification par rappel sur un numéro déjà connu, double validation de tout changement de coordonnées et de tout virement inhabituel, y compris quand l'ordre vient du dirigeant."],
                ['secteur' => 'PME industrielle familiale, en France', 'probleme' => "La génération qui reprend veut un logiciel de gestion intégré et de l'IA ; le fondateur veut d'abord savoir ce que cela coûtera, qui en sera responsable et ce qui se passera si le projet échoue.", 'solution' => "Parcours dirigeant suivi ensemble par le fondateur et le repreneur, trois offres comparées sur la même grille et sur trois ans, puis formation du comité de direction pour construire la feuille de route."],
                ['secteur' => 'Commerce en ligne familial, en Belgique', 'probleme' => "La boutique vend sur son site et par WhatsApp ; pendant les fêtes, un robot de réponse a promis à des dizaines de clients un délai de livraison que personne ne pouvait tenir.", 'solution' => "Liste écrite de ce qu'un robot peut promettre et de ce qui passe à un humain, relecture des réponses types par la gérante, et suivi hebdomadaire des réclamations dans le tableau de bord."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et systèmes un dirigeant doit-il connaître, sans forcément les manipuler ?",
            'legende' => "Repères publics relevés le 5 octobre 2026 sur les pages officielles ou celles des éditeurs, et règles pratiques quand aucun chiffre public ne s'applique. Ils servent à situer un ordre de grandeur et ne font pas partie du prix de la formation ; aucun outil n'est imposé.",
            'entetes' => ['Outil ou système', 'Ce que le dirigeant doit en savoir', 'Repère public ou règle pratique'],
            'lignes'  => [
                ['Comptabilité SYSCOHADA', "Les états financiers que produit son comptable, ce qu'un logiciel doit savoir en sortir, et qui arrête les comptes", "Acte uniforme relatif au droit comptable et à l'information financière adopté le 26 janvier 2017, applicable depuis le 1er janvier 2018 aux comptes personnels des entités, selon l'OHADA"],
                ['Logiciels de gestion Odoo et Dolibarr', "Ce qu'ils centralisent (ventes, achats, stock, factures), qui les paramètre, ce que coûtent la maintenance et la sortie ; le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> détaille leurs différences", "Odoo : une application gratuite, offre Standard à 19,90 euros par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 euros ; Dolibarr est un logiciel libre, dont le coût tient surtout à l'hébergement et au paramétrage"],
                ['Facturation normalisée', "Au Bénin comme en Côte d'Ivoire, la facture sort d'un système certifié ou validé par l'administration fiscale : tout outil de vente doit s'y raccorder", "Au Bénin, amende de dix fois le montant de la facture, d'au moins un million de francs CFA par opération (Direction générale des Impôts, 27 février 2020)"],
                ['WhatsApp Business et son API', "Différence entre l'application et l'API, titulaire du numéro, coût des messages envoyés par un robot ou un logiciel", "Depuis le 1er octobre 2026, chaque numéro professionnel dispose d'un quota mensuel de 1 000 messages de service gratuits, facturés au-delà (page de tarification de Meta)"],
                ['Mobile Money et paiements', "Comptes marchands au nom de l'entreprise, plafonds, rapprochement des encaissements avec les factures", "Le rapprochement se fait au moins chaque semaine ; un écart non expliqué est une question de direction, pas seulement de comptabilité"],
                ["Assistants d'IA (ChatGPT, Claude, Gemini, Copilot)", "Compte personnel ou offre professionnelle administrée, usage des données, console de gestion des accès", "Prix par siège et conditions à comparer chez chaque éditeur au moment de l'achat, puis à chaque renouvellement"],
                ['Automatisation (n8n, Make)', "Ce qu'un flux fait sans contrôle humain, qui le surveille et qui reçoit l'alerte quand il échoue", "n8n Cloud : formule Starter à 20 euros par mois en paiement annuel, pour 2 500 exécutions par mois"],
                ['Tableur et tableau de bord', "Le premier outil de pilotage, souvent suffisant pendant des mois avant tout logiciel", "Excel ou Google Sheets, déjà compris dans la plupart des suites bureautiques payées par l'entreprise"],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment un dirigeant choisit-il un outil sans dépendre du discours du vendeur ?",
            'items' => [
                ['titre' => "Écrire le problème, pas le nom de l'outil", 'duree' => 'Une heure', 'texte' => "« Nous perdons des commandes passées sur WhatsApp » ouvre plusieurs réponses ; « il nous faut un CRM » n'en laisse qu'une, souvent la plus chère. La page de besoin décrit la situation, les volumes, les personnes concernées et les obligations fiscales à respecter."],
                ['titre' => 'Mesurer avant d\'acheter', 'duree' => 'Une à deux semaines', 'texte' => "Combien de commandes par jour, combien d'heures de ressaisie, combien d'erreurs de facturation par mois. Sans cette mesure de départ, personne ne pourra dire dans trois mois si l'achat a servi."],
                ['titre' => 'Consulter trois offres sur la même grille', 'duree' => 'Deux à trois semaines', 'texte' => "Même description du besoin envoyée à chacun, mêmes questions posées : coût sur trois ans, hébergement des données, assistance, conditions de sortie. Les réponses deviennent comparables, et les silences aussi."],
                ['titre' => 'Exiger un essai sur ses propres données', 'duree' => 'Quelques jours', 'texte' => "Une démonstration préparée par le vendeur prouve que l'outil fonctionne chez lui. Un essai sur vos produits, vos clients anonymisés et vos cas difficiles montre s'il fonctionne chez vous."],
                ['titre' => 'Vérifier les comptes, le contrat et la sortie', 'duree' => 'Une réunion', 'texte' => "Qui sera administrateur, à quel nom sont les comptes, dans quel format récupère-t-on les données, que devient le paramétrage si l'on change de prestataire. Ces points se règlent avant la signature, jamais après."],
                ['titre' => 'Nommer un responsable et une date de décision', 'duree' => 'Le jour de la signature', 'texte' => "Une personne de l'entreprise suit l'outil, et une date est fixée pour décider de continuer, de corriger ou d'arrêter, au vu de la mesure de départ."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type d'un parcours dirigeant, demi-journée par demi-journée ?",
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Session courte, parcours dirigeant, groupe de pairs ou formation de comité : quel format retenir ?",
            'options'  => ["Session d'ouverture", 'Parcours dirigeant', 'Groupe de dirigeants', 'Formation du comité de direction'],
            'criteres' => [
                ['critere' => 'Pour qui', 'valeurs' => ["Le dirigeant et un ou deux proches collaborateurs", "Le dirigeant seul, ou avec son associé", "Six à dix dirigeants de structures différentes, souvent d'un même réseau", "L'équipe de direction au complet"]],
                ['critere' => 'Durée', 'valeurs' => ['2 heures', "2 à 3 jours en demi-journées, puis 2 heures de suivi à un mois", '2 jours, plus un suivi collectif à distance', "Selon la formation retenue, en général 2 jours"]],
                ['critere' => "Ce qu'on en retire", 'valeurs' => ["Les règles de départ sur l'IA et les accès, et une idée claire de la suite", "Un tableau de bord, une méthode d'achat, ses règles de responsable et un premier chantier", "La même méthode, et la confrontation avec des dirigeants qui vivent les mêmes difficultés", "Des décisions partagées par toute la direction : feuille de route, choix sur l'IA ou charte"]],
                ['critere' => 'Confidentialité', 'valeurs' => ['Complète', "Complète : on travaille sur vos chiffres", "Chacun garde ses chiffres pour lui ; seule la méthode est commune", 'Complète']],
                ['critere' => 'Quand le choisir', 'valeurs' => ["Urgence : l'IA est déjà utilisée sans règle, ou une décision d'achat est imminente", "Le dirigeant veut reprendre la main sur ses outils et ses chiffres avant d'engager l'équipe", "Petite entreprise sans comité, ou dirigeant isolé qui veut échanger avec des pairs", "Plusieurs directeurs doivent arbitrer ensemble des budgets et des priorités"]],
            ],
            'verdict'  => "Le parcours dirigeant convient au chef d'entreprise qui veut d'abord maîtriser son propre rôle. Quand la décision engage toute une direction, mieux vaut la formation de comité : <a href=\"/formations/strategie-transformation-digitale\">Stratégie de transformation digitale</a> pour la feuille de route, <a href=\"/formations/ia-generative-dirigeants\">IA générative pour dirigeants</a> pour les choix propres à l'IA. Les formats se combinent : une session d'ouverture, puis l'un ou l'autre.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelle formation du catalogue choisir selon votre situation de dirigeant ?",
            'legende' => "Chaque fiche détaille son programme, ses formats et ses prérequis. Le parcours dirigeant décrit plus haut peut précéder l'une d'elles ou s'y substituer quand la direction tient en une ou deux personnes.",
            'entetes' => ['Votre situation', 'Formation conseillée', 'Ce que le dirigeant en retire'],
            'lignes'  => [
                ["Vous dirigez une structure de quelques personnes et ne savez pas par où commencer", "<a href=\"/formations/digitaliser-son-entreprise\">Digitaliser son entreprise pas à pas</a>", "Un premier chantier simple, des outils accessibles et un budget sur douze mois"],
                ["Votre comité doit décider quoi faire de l'IA générative", "<a href=\"/formations/ia-generative-dirigeants\">IA générative pour dirigeants</a>", "Des cas d'usage classés, un budget et un projet pilote mesurable"],
                ["Plusieurs directeurs doivent s'accorder sur les chantiers numériques", "<a href=\"/formations/strategie-transformation-digitale\">Stratégie de transformation digitale</a>", "Une feuille de route construite par le comité, chiffrée sur trois ans"],
                ["L'IA est déjà utilisée par les équipes, sans règle écrite", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>", "Un inventaire des usages, une charte et des rôles de contrôle"],
                ["Vous craignez la perte de vos données ou un piratage", "<a href=\"/formations/securite-donnees-dirigeants\">Sécurité des données et sauvegardes pour dirigeants</a>", "Des décisions sur les sauvegardes, les accès, les prestataires et la réponse à un incident"],
                ["Votre entreprise tourne déjà sous Odoo", "<a href=\"/formations/odoo-dirigeants\">Odoo pour dirigeants</a>", "La lecture des tableaux de bord, des marges et des validations, sans rien saisir"],
                ["Les chiffres existent, mais personne ne sait les lire ni les questionner", "<a href=\"/formations/data-literacy\">Décider avec les données</a>", "Lire un indicateur, une moyenne ou un graphique et en connaître les limites"],
                ["Un outil a été acheté, mais les équipes ne l'utilisent pas", "<a href=\"/formations/conduite-du-changement\">Conduite du changement numérique</a>", "Une méthode pour faire adopter l'outil et mesurer l'usage réel"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation s'organise-t-elle avec un dirigeant qui a peu de temps ?",
            'intro' => "Un chef d'entreprise ne bloque pas trois jours sans raison. L'organisation part de son agenda et de ce qu'il doit avoir décidé à la fin, pas d'un programme fixé d'avance.",
            'items' => [
                ['titre' => 'Un entretien de cadrage', 'texte' => "Une heure, en personne ou en visioconférence, pour comprendre l'entreprise, les outils en place, les décisions en attente et ce qui motive la demande. Le premier échange, le cadrage et le devis sont gratuits."],
                ['titre' => 'Des demi-journées plutôt que des journées', 'texte' => "Les séances de 3 h 30 se placent le matin ou l'après-midi, sur plusieurs semaines si besoin, pour que l'entreprise continue de tourner. À distance, elles se découpent en séances de deux heures."],
                ['titre' => 'Vos chiffres, vos outils, vos dossiers', 'texte' => "Les exercices utilisent vos relevés, vos devis en attente et vos abonnements réels. Ce qui est confidentiel reste sur vos ordinateurs ; le formateur voit ce que vous choisissez de montrer."],
                ['titre' => "Un travail entre deux séances", 'texte' => "Une heure ou deux : faire remplir le tableau du lundi par l'équipe, demander un devis à un deuxième prestataire, vérifier à quel nom sont les comptes. C'est souvent là que le dirigeant découvre l'essentiel."],
                ['titre' => 'Des documents qui restent', 'texte' => "Le tableau de bord, la grille de comparaison des offres, les règles de départ sur l'IA et les accès, le plan des trente jours et les supports, en fichiers modifiables, avec une attestation de formation."],
                ['titre' => 'Un suivi à un mois', 'texte' => "Deux heures à distance pour relire le tableau tenu pendant le mois et l'avancement du premier chantier ; entre-temps, les questions passent par courriel ou WhatsApp, selon ce que prévoit le devis."],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'un dirigeant, et qu'est-ce qui fait varier le prix ?",
            'intro'      => "Aucun tarif n'est publié : chaque formule est chiffrée sur devis, après un premier échange, un cadrage et un devis qui ne coûtent rien. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier indiqué sur le devis. Les abonnements aux logiciels et aux outils d'IA ne sont jamais inclus et restent au nom de l'entreprise.",
            'items'      => [
                ['offre' => "Session d'ouverture", 'prix' => 'Sur devis', 'inclus' => ['Deux heures avec le dirigeant et ses proches', "Règles de départ sur l'IA et les accès", 'Conseil sur la suite à donner']],
                ['offre' => 'Parcours dirigeant', 'prix' => 'Sur devis', 'inclus' => ['Entretien de cadrage', 'Deux à trois jours en demi-journées', 'Tableau de bord, grille d\'achat et plan des trente jours', 'Suivi de deux heures à un mois']],
                ['offre' => 'Groupe de dirigeants', 'prix' => 'Sur devis', 'inclus' => ['Deux jours entre dirigeants de plusieurs structures', 'Travail de chacun sur son entreprise', 'Suivi collectif à distance']],
                ['offre' => 'Accompagnement individuel à distance', 'prix' => 'Sur devis', 'inclus' => ['Séances de deux heures espacées', 'Relecture des décisions et des devis reçus', 'Questions entre les séances']],
            ],
            'variations' => [
                'La formule et le nombre de demi-journées.',
                "Le nombre de dirigeants et d'associés présents.",
                "La préparation : analyse des chiffres, des abonnements et des devis transmis.",
                'Le lieu : Cotonou, une autre ville du Bénin, un autre pays, ou à distance.',
                'La durée du suivi après la formation.',
                'La langue des séances et des supports, français ou anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un chef d'entreprise peut-il faire financer sa propre formation ?",
            'paragraphes' => [
                "La réponse dépend du pays, du fonds et surtout du statut du dirigeant, ce qui rend la question plus délicate que pour un salarié. Un directeur général salarié, un gérant non salarié et un entrepreneur individuel ne relèvent pas toujours des mêmes dispositifs. Aucune prise en charge n'est promise ici : la démarche consiste à interroger le fonds par écrit, programme et devis joints, avant de signer.",
                "En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> consultée le 5 octobre 2026 indique que toute entreprise qui justifie du paiement régulier des deux taxes peut déposer un plan de formation, le règlement intervenant après le contrôle du fonds et l'approbation de sa Commission permanente. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> affiche deux guichets qui peuvent concerner un dirigeant : le financement du personnel des entreprises et des membres des organisations professionnelles, et celui des demandes individuelles. Au Bénin, le FODEFCA a vu ses statuts approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>.",
                "En France, la fiche de Service-public sur la <a href=\"https://entreprendre.service-public.gouv.fr/vosdroits/F31148\">prise en charge des formations des travailleurs indépendants</a>, vérifiée le 1er septembre 2025, précise que les indépendants qui ont versé la contribution à la formation professionnelle peuvent, sous conditions, être financés par un fonds d'assurance formation choisi selon leur activité : l'Agefice pour les commerçants et dirigeants non salariés du commerce, de l'industrie et des services, le FAFCEA pour les artisans, le FIF-PL pour les professions libérales.",
                "Ces fonds sont des fonds mutualisés. Or <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que, depuis le 1er janvier 2022, tout prestataire qui veut accéder aux fonds publics ou mutualisés doit être certifié Qualiopi. Richard SALANON ne revendique ni cette certification ni l'agrément d'un fonds : un dirigeant français finance donc en principe cette formation sur le budget de son entreprise, sauf confirmation écrite contraire de son fonds. Le programme, les feuilles de présence et l'attestation sont remis dans tous les cas.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres publics éclairent les décisions d'un dirigeant sur le numérique et l'IA ?",
            'items' => [
                ['valeur' => '40 %', 'libelle' => "Des TPE et PME françaises utilisaient au moins une solution d'IA en 2026, contre 13 % en 2024 (baromètre publié le 17 septembre 2026, enquête auprès de 9 655 entreprises)", 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '19 %', 'libelle' => "Des TPE et PME françaises recouraient en 2026 à des solutions d'IA payantes ; 68 % des entreprises utilisatrices jugeaient l'effet de l'IA positif", 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '53 %', 'libelle' => "Des dirigeants de TPE et PME françaises redoutaient en 2026 la perte de données ou le piratage, 16 points de plus qu'il y a sept ans", 'source' => 'Baromètre France Num 2026, DGE et Crédoc', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '78 %', 'libelle' => "Des personnes qui utilisent l'IA au travail y apportaient leurs propres outils, 80 % dans les petites et moyennes entreprises (enquête auprès de 31 000 personnes dans 31 pays, publiée en mai 2024)", 'source' => 'Microsoft et LinkedIn, Work Trend Index 2024', 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/ai-at-work-is-here-now-comes-the-hard-part'],
                ['valeur' => '60 %', 'libelle' => "Des dirigeants interrogés craignaient que la direction de leur organisation n'ait ni plan ni vision pour mettre en œuvre l'IA (même enquête, mai 2024)", 'source' => 'Microsoft et LinkedIn, Work Trend Index 2024', 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/ai-at-work-is-here-now-comes-the-hard-part'],
                ['valeur' => '30 %', 'libelle' => "La cybercriminalité représentait plus de 30 % de la criminalité signalée en Afrique de l'Ouest et de l'Est, selon le rapport publié le 23 juin 2025, qui cite aussi la fraude par compromission de messagerie parmi les menaces les plus répandues", 'source' => "Interpol, Africa Cyberthreat Assessment Report 2025", 'url' => 'https://www.interpol.int/en/News-and-Events/News/2025/New-INTERPOL-report-warns-of-sharp-rise-in-cybercrime-in-Africa'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs de dirigeant font échouer la digitalisation d'une entreprise ?",
            'intro' => "Les projets numériques échouent rarement pour une raison technique. Ils échouent sur des décisions de direction prises trop vite, déléguées sans contrôle ou jamais prises. Celles-ci reviennent d'une entreprise à l'autre, quel que soit le pays.",
            'items' => [
                ['titre' => 'Signer pendant la démonstration', 'texte' => "La démonstration est faite pour séduire, et la remise « valable jusqu'à vendredi » pour presser. Une décision d'achat se prend après la comparaison et l'essai sur vos données, jamais dans la salle du vendeur."],
                ['titre' => "Laisser les comptes au nom d'une personne", 'texte' => "Le nom de domaine enregistré par le neveu, le numéro WhatsApp sur la puce du commercial, l'administrateur du logiciel chez le prestataire : le jour d'un départ ou d'un litige, l'entreprise ne contrôle plus ses propres outils."],
                ['titre' => 'Ne jamais ouvrir les outils soi-même', 'texte' => "Un dirigeant qui continue de demander ses chiffres par téléphone signale à toute l'équipe que le logiciel est facultatif. Regarder soi-même le tableau du lundi, chaque lundi, vaut toutes les notes de service."],
                ['titre' => 'Copier ce que fait un concurrent', 'texte' => "L'application d'un concurrent répond à ses clients et à son organisation. Elle ne dit rien de ce dont votre entreprise a besoin, ni de ce qu'elle a coûté, ni de son usage réel."],
                ['titre' => "Dire oui à chaque abonnement", 'texte' => "Dix abonnements à quelques euros ou quelques milliers de francs CFA chacun, souscrits par des personnes différentes, finissent par peser autant qu'un logiciel de gestion, sans en avoir la cohérence. Un inventaire trimestriel suffit à le voir."],
                ["titre" => "Interdire l'IA sans rien proposer", 'texte' => "L'interdiction pure déplace l'usage vers les téléphones personnels, sans aucune règle. Mieux vaut un outil autorisé, des données interdites listées, et une personne à qui poser ses questions."],
                ['titre' => "Confondre activité et résultat", 'texte' => "Une page publiée chaque jour, un robot qui répond la nuit, un tableau de bord coloré : ce sont des activités. Le résultat se lit dans les ventes, les délais, les erreurs évitées, mesurés avant et après."],
                ['titre' => "S'exempter des règles qu'on impose", 'texte' => "Les fraudeurs imitent d'abord le dirigeant : un ordre de virement urgent « du directeur » contourne tous les contrôles si le directeur lui-même a l'habitude de les contourner. La règle de double validation s'applique d'abord en haut."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, moyens de paiement, langue : que change le contexte de l'Afrique francophone et de l'Europe pour un dirigeant ?",
            'paragraphes' => [
                "En Afrique francophone, une grande partie de l'activité passe déjà par le téléphone : commandes et service client sur WhatsApp, encaissements par Mobile Money, validations à distance. La digitalisation n'y part donc pas de zéro ; elle consiste souvent à relier ce qui existe, à le mettre au nom de l'entreprise et à le rendre lisible pour la direction. Les choix d'outils tiennent compte des coupures de connexion et d'électricité : un outil qui fonctionne sur téléphone et tolère une coupure vaut mieux, pour une équipe de terrain, qu'un logiciel puissant qui exige une connexion parfaite.",
                "Les abonnements des grands éditeurs se paient en euros ou en dollars, par carte bancaire internationale, rarement par Mobile Money. Pour le dirigeant, cela soulève des questions d'intendance qui bloquent plus de projets qu'on ne le croit : quelle carte utiliser, au nom de qui, qui surveille les renouvellements automatiques, comment le comptable enregistre ces dépenses en devises. La formation les traite comme des décisions à part entière.",
                "En Europe, le cadre est plus dense et plus contrôlé : RGPD, règlement européen sur l'IA, directive NIS 2 pour les entités concernées, sans oublier les obligations fiscales propres à chaque pays. Le dirigeant d'une PME n'a pas besoin de les connaître en détail, mais il doit savoir lesquelles s'appliquent à son entreprise, qui les suit, et quelle trace écrite il pourra montrer. La formation se donne en français ; les supports peuvent être remis en anglais pour un associé, une maison mère ou un financeur anglophone.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi préparer vos décisions numériques avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard SALANON a déjà formé des chefs d'entreprise et des dirigeants à l'usage du numérique et de l'intelligence artificielle. Il n'exerce pas leur métier et ne prétend pas diriger leur entreprise à leur place : il forme à l'usage des outils, à la lecture de ce qu'ils produisent et aux décisions qu'ils imposent. Formé à " . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique, déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes, et a travaillé pour des structures de " . count((array) fait('pays_travailles')) . " pays d'Afrique francophone, d'Europe et du Canada.",
                "Il voit aussi l'autre côté de la table : il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il sait donc ce qu'un éditeur ou un prestataire met derrière une démonstration, et quelles questions le font hésiter. Il n'est certifié par aucun éditeur, présente les outils à partir de leurs prix publics et ne promet aucun gain chiffré.",
                "Parce qu'il réalise aussi des projets, il le dit d'emblée : la formation ne crée aucune obligation de lui confier la suite, et les documents produits peuvent être remis à n'importe quel prestataire. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur la page des <a href=\"/zones/\">zones d'intervention</a>. Pour faire piloter un projet plutôt que se former, la page <a href=\"/services/consultant-digitalisation\">consultant en digitalisation</a> décrit la mission ; le <a href=\"/formations/\">catalogue des formations</a> et les <a href=\"/formations/domaine/transformation-digitale\">formations en transformation digitale</a> présentent les autres suites possibles.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'engager votre entreprise dans un nouvel outil ou dans l'IA ?",
            'texte' => "Regardez vos chiffres chaque lundi dans un tableau d'une page, écrivez le problème avant de recevoir un vendeur, comparez trois offres sur la même grille, gardez chaque compte au nom de l'entreprise, posez par écrit ce que l'IA ne doit jamais recevoir, appliquez-vous la double validation des paiements, et ne lancez qu'un chantier à la fois, avec un responsable et une date de décision.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous reprendre la main sur les décisions numériques de votre entreprise ?",
            'texte'  => "Décrivez votre entreprise, les outils en place, les décisions en attente et le temps dont vous disposez : vous recevez une réponse sous 24 heures, puis une proposition de format et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un parcours dirigeant'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il être à l'aise avec l'informatique pour suivre la formation ?", 'r' => "Non. Savoir lire un tableau et se servir d'un smartphone suffit. Les outils sont montrés à l'écran sur vos propres cas, et les exercices portent sur des décisions, pas sur des manipulations. Les dirigeants les plus à l'aise y gagnent une méthode ; les autres, la capacité de juger ce qu'on leur propose."],
        ['q' => "Quelle différence avec la formation IA générative pour dirigeants ?", 'r' => "Cette dernière réunit un comité de direction pour décider des usages de l'IA, de leur budget et d'un projet pilote. Le parcours décrit ici est centré sur le métier de dirigeant dans son ensemble : chiffres, achats d'outils, responsabilités, IA dans son propre travail. Les deux se complètent, et l'analyse de votre demande dit par laquelle commencer."],
        ['q' => "Je dirige seul une entreprise de quelques personnes : par quoi commencer ?", 'r' => "Souvent par la session d'ouverture de deux heures, puis par la formation Digitaliser son entreprise pas à pas, conçue pour les petites structures. Le parcours dirigeant convient quand l'entreprise a déjà plusieurs outils et des chiffres dispersés à remettre en ordre."],
        ['q' => "Puis-je venir avec mon associé ou mon bras droit ?", 'r' => "Oui, et c'est conseillé : la personne qui fera vivre le tableau de bord et les règles au quotidien doit les avoir construits avec vous. Au-delà de trois personnes, la formation de comité est plus adaptée qu'un parcours dirigeant."],
        ['q' => "Mes chiffres et mes contrats sont confidentiels : que voit le formateur ?", 'r' => "Ce que vous choisissez de montrer. Les exercices se font sur vos fichiers, sur vos ordinateurs ; rien n'est déposé dans un outil d'IA en ligne sans votre accord, et les démonstrations utilisent des documents non confidentiels ou anonymisés."],
        ['q' => "Le formateur me recommandera-t-il un logiciel ou un prestataire ?", 'r' => "Il présente les familles d'outils, leurs prix publics et les questions à poser, puis vous aide à comparer les offres que vous recevez. Le choix reste le vôtre. La formation ne vous oblige pas à confier la suite à Richard SALANON, et les documents produits peuvent servir avec n'importe quel prestataire."],
        ['q' => "Combien de temps faut-il y consacrer ?", 'r' => "De deux heures pour la session d'ouverture à trois jours en demi-journées pour le parcours complet, plus une à deux heures de travail entre les séances et deux heures de suivi à un mois. Les séances se placent selon votre agenda, sur plusieurs semaines si nécessaire."],
        ['q' => "La formation peut-elle se faire à distance, depuis l'Europe ou le Canada ?", 'r' => "Oui. Les demi-journées sont alors découpées en séances de deux heures en visioconférence, avec partage d'écran et exercices préparés entre les séances. Le fuseau horaire du dirigeant est pris en compte dans le calendrier."],
        ['q' => "Combien coûte la formation, et comment la payer ?", 'r' => "Le prix est fixé sur devis, après un premier échange, un cadrage et un devis gratuits. Il dépend de la formule, du nombre de demi-journées, de la préparation, du lieu et du suivi. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Un fonds de formation peut-il la prendre en charge ?", 'r' => "Cela dépend du pays, du fonds et du statut du dirigeant. Richard SALANON n'affiche ni certification Qualiopi ni agrément d'un fonds, ce qui exclut en principe les fonds publics ou mutualisés français. Interrogez le fonds par écrit avec le programme et le devis avant de signer, et prévoyez le budget sans prise en charge."],
        ['q' => "Que reste-t-il à l'entreprise après la formation ?", 'r' => "Un tableau de bord d'une page tenu par l'équipe, une grille pour comparer les offres, les règles de départ sur l'IA et les accès, la liste des comptes à remettre au nom de l'entreprise, un plan pour les trente jours suivants, les supports et une attestation."],
    ],

    'sources' => [
        ['titre' => "OHADA, Acte uniforme relatif au droit des sociétés commerciales et du groupement d'intérêt économique : présentation, dates d'adoption et d'entrée en vigueur", 'url' => 'https://www.ohada.org/droit-des-societes-commerciales-et-du-gie/', 'date' => '2026-10-05'],
        ['titre' => "Droitguinéen, texte de l'article 161 de l'AUSCGIE sur la responsabilité des dirigeants sociaux envers les tiers", 'url' => 'https://droitguineen.com/lois/acte-uniforme-societes-commerciales-auscgie/article/161', 'date' => '2026-10-05'],
        ['titre' => "OHADA, Acte uniforme relatif au droit comptable et à l'information financière (AUDCIF) et SYSCOHADA révisé", 'url' => 'https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 426 et 427)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "Gouvernement du Bénin, tout savoir sur les factures normalisées (entretien avec le directeur général des Impôts, 27 février 2020)", 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement (UE) 2016/679 (RGPD), articles 24 et 83", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32016R0679', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, directive (UE) 2022/2555 du 14 décembre 2022 (NIS 2), article 20 sur la gouvernance", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32022L2555', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "France Num (DGE), Baromètre France Num 2026 : le numérique et l'intelligence artificielle dans les TPE et PME", 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le', 'date' => '2026-10-05'],
        ['titre' => "Microsoft et LinkedIn, Work Trend Index 2024 : AI at work is here. Now comes the hard part", 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/ai-at-work-is-here-now-comes-the-hard-part', 'date' => '2026-10-05'],
        ['titre' => "Interpol, New INTERPOL report warns of sharp rise in cybercrime in Africa (23 juin 2025)", 'url' => 'https://www.interpol.int/en/News-and-Events/News/2025/New-INTERPOL-report-warns-of-sharp-rise-in-cybercrime-in-Africa', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs des offres", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "n8n, tarifs de n8n Cloud", 'url' => 'https://n8n.io/pricing', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business", 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "Service-public Entreprendre, prise en charge des formations des travailleurs indépendants (vérifiée le 1er septembre 2025)", 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F31148', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'strategie-transformation-digitale', 'digitaliser-son-entreprise', 'gouvernance-ia', 'securite-donnees-dirigeants', 'odoo-dirigeants'],
        'services'    => ['consultant-digitalisation', 'digitalisation-d-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
