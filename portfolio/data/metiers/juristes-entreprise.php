<?php
// ============================================================
// data/metiers/juristes-entreprise.php · Page « formations par métier » :
// juristes d'entreprise (vague 1C, univers Droit et justice, prioritaire,
// statut P : Richard peut former des juristes d'entreprise, jamais « a formé »).
// Angle propre : la direction juridique d'une entreprise (demandes internes,
// cycle de vie des contrats, conformité et veille, contentieux suivis avec
// des avocats extérieurs, confidentialité des avis juridiques internes,
// contrats passés avec les éditeurs d'IA). La recherche dans les Actes
// uniformes et la vérification des références relèvent de ia-droit-ohada ;
// la vie du cabinet d'avocats, de la page métier des avocats : rien n'en
// est repris.
// Faits externes lus le 05/10/2026 : Vie publique (loi n° 2026-122 du
// 23 février 2026, page modifiée le 25 février 2026), Conseil
// constitutionnel (décision n° 2026-900 DC du 18 février 2026), Justel
// (loi belge du 1er mars 2000, article 5 modifié par la loi du 14 mars 2023),
// Fedlex (code de procédure civile suisse, article 167a, en vigueur le
// 1er janvier 2025), EUR-Lex (arrêt Akzo Nobel C-550/07 P du 14 septembre
// 2010 ; règlement eIDAS consolidé, article 25 ; RGPD, article 28), AFA
// (article 17 de la loi Sapin II), OHADA (AUDCG du 15 décembre 2010, liste
// des Actes uniformes), ACC (Chief Legal Officers Survey 2026), WorldCC
// (19 juin 2026), Civil Resolution Tribunal (Moffatt v. Air Canada), et les
// « Faits déjà vérifiés » du catalogue (Odoo, n8n, article 4).
// Richard n'est pas juriste : la page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA et numérique pour juristes d\'entreprise : traiter les demandes internes, tenir le cycle de vie des contrats, organiser conformité et veille et suivre les contentieux, sans fragiliser la confidentialité des avis juridiques',
    'title'   => 'Formation IA pour juristes d\'entreprise | Richard SALANON',
    'meta'    => 'Former une direction juridique à l\'IA et au numérique : demandes, contrats, conformité, veille, contentieux et confidentialité des avis. Sur devis.',
    'en_bref' => 'Cette page s\'adresse aux directions juridiques, aux juristes d\'entreprise, aux responsables conformité et aux assistants juridiques qui veulent outiller leur travail quotidien : le guichet des demandes internes, les contrats de la demande à l\'échéance, la veille et la conformité, le suivi des contentieux confiés aux avocats. Le parcours type compte six demi-journées, se recompose selon la taille du service et se tient en intra, en inter, à distance ou en formule hybride, sur les outils de l\'entreprise. Richard SALANON forme à l\'usage des outils ; l\'analyse juridique reste aux juristes. Le prix est fixé sur devis.',
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Droit et justice',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : la direction juridique telle qu\'elle travaille, et la carte de ce qui peut être outillé',
            'duree'  => '3 h 30',
            'points' => [
                'Relevé des flux réels du service sur un mois : demandes reçues par courriel, par téléphone, dans les couloirs et sur WhatsApp, contrats en cours de revue, échéances, dossiers confiés aux avocats, questions de conformité.',
                'Pour chaque flux, ce qu\'un outil peut recevoir, trier ou préparer, et ce qui reste à l\'appréciation du juriste.',
                'Inventaire des outils déjà en place, y compris les fonctions d\'IA arrivées avec la messagerie, la suite bureautique ou le logiciel de gestion.',
                'Les règles propres à la fonction : confidentialité des avis selon le pays, secret des affaires, données personnelles des salariés, des clients et des cocontractants.',
                'Exercice : chaque participant reconstitue le chemin de trois demandes qu\'il a traitées la semaine précédente, du premier message à la réponse.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : le guichet des demandes internes',
            'duree'  => '3 h 30',
            'points' => [
                'Un point d\'entrée unique : formulaire court, catégories de demandes, pièces exigées dès le départ, niveau d\'urgence déclaré et justifié.',
                'Tri assisté des demandes par catégorie et par délai, sous le contrôle d\'un juriste qui valide chaque affectation.',
                'La base de réponses validées : questions qui reviennent (signature d\'un bon de commande, clause de confidentialité standard, délégations), réponses écrites et datées par un juriste.',
                'Tableau de suivi : demandes ouvertes, délais promis, temps passé par direction cliente, à présenter à la direction générale.',
                'Exercice : construire le formulaire et les dix premières réponses validées du service, à partir des demandes réelles relevées le matin.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : rédiger, revoir et négocier les contrats avec l\'IA',
            'duree'  => '3 h 30',
            'points' => [
                'Bibliothèque de modèles et grille de négociation : position de départ, positions de repli acceptables, points sur lesquels le juriste ne cède jamais sans arbitrage.',
                'Revue d\'un contrat proposé par un cocontractant : l\'assistant compare chaque clause à la grille et signale les écarts, le juriste qualifie chaque écart.',
                'Comparaison de deux versions et tableau des modifications, puis contrôle ligne à ligne des changements que l\'outil n\'a pas vus.',
                'Préparer le contrat avant tout envoi à un assistant en ligne : noms, prix, volumes et données personnelles retirés ou neutralisés.',
                'Exercice en binôme : revue d\'un contrat de prestation fictif contre la grille du service, puis relecture croisée par un autre binôme.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : de la signature à l\'échéance, le registre des contrats',
            'duree'  => '3 h 30',
            'points' => [
                'Circuit de validation : qui approuve quoi, selon le montant et le risque, et contrôle des délégations de signature avant l\'envoi.',
                'Signature électronique : ce que dit le règlement eIDAS en Europe, ce qu\'il faut vérifier dans la loi de chaque État de la zone OHADA, archivage de la preuve.',
                'Registre unique des contrats : extraction assistée des données clés (parties, durée, préavis, reconduction, révision de prix, garanties, loi applicable, juridiction ou arbitrage), puis vérification humaine.',
                'Alertes d\'échéance automatiques, avenants rattachés au contrat d\'origine, fin de contrat et restitution des données.',
                'Démonstration dans l\'outil de l\'entreprise, ou dans Odoo ou Dolibarr quand le service n\'en a pas.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : conformité, veille et contrats des éditeurs d\'IA',
            'duree'  => '3 h 30',
            'points' => [
                'Registre des obligations : texte, obligation, service responsable, preuve attendue, date de contrôle.',
                'Veille sur plusieurs ordres juridiques : Journal officiel de l\'OHADA, journaux officiels nationaux, EUR-Lex et autorités de régulation, avec résumé assisté puis relu avant diffusion.',
                'Évaluation des tiers (clients, fournisseurs, intermédiaires) : collecte et synthèse assistées, décision humaine et traçable.',
                'Les contrats des outils d\'IA eux-mêmes : usage des données, sous-traitants, hébergement et transferts, conservation, réversibilité, responsabilité.',
                'Exercice : analyse des conditions d\'un assistant d\'IA réellement envisagé par l\'entreprise, et liste des points à négocier.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : contentieux, confidentialité des avis, règle d\'usage et évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Le registre des contentieux suivis avec les avocats : chronologie, échéances communiquées par le conseil, budget d\'honoraires, information de la direction financière.',
                'Synthèse assistée des écritures reçues du conseil pour la direction générale, relue par le juriste, et circuit sûr d\'échange de pièces avec l\'avocat.',
                'Avis juridiques internes : où les rédiger, où classer les versions de travail, comment les marquer quand la loi du pays le prévoit.',
                'Rédaction de la règle d\'usage de la direction juridique en deux pages.',
                'Évaluation : une semaine fictive de la direction juridique traitée seul, avec une échéance mal extraite et une donnée sensible glissée dans une demande à repérer.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Directeurs juridiques, juristes, responsables conformité et assistants juridiques'],
        ['l' => 'Durée', 'v' => '3 jours en 6 demi-journées, socle de 2 jours possible'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que changent l\'IA, la digitalisation et l\'automatisation pour une direction juridique ?',
            'paragraphes' => [
                'Le juriste d\'entreprise ne plaide pas et ne choisit pas ses dossiers : il répond à ses collègues. Les ventes veulent un contrat pour vendredi, les achats demandent si une clause de pénalité est acceptable, les ressources humaines s\'inquiètent d\'un licenciement, la direction générale veut savoir ce que change un nouveau texte. Le service vit sous un flux continu de demandes, souvent arrivées par des canaux informels, et sous un stock de contrats dont il faut surveiller les échéances. C\'est sur ce flux et sur ce stock que les outils numériques et l\'IA changent le plus le travail.',
                'Les directions juridiques ont commencé à s\'équiper. L\'enquête mondiale de l\'Association of Corporate Counsel publiée le 29 janvier 2026, menée auprès de 1 049 directeurs juridiques de 43 pays, relève que 36 % des services en sont au déploiement effectif de l\'IA générative, et que 47 % des répondants citent la maîtrise de la technologie et de l\'IA comme la compétence que leur directeur général attend d\'eux en priorité. La même enquête montre que 64 % d\'entre eux supervisent la conformité : le juriste est souvent aussi celui qui doit encadrer les usages de l\'IA dans le reste de l\'entreprise.',
                'Ce qui change n\'est pas la nature du métier, mais la répartition du temps. Un assistant prépare une première revue d\'un contrat proposé par un fournisseur, extrait les dates d\'un lot de conventions, résume un nouveau règlement ou classe les demandes reçues dans la semaine. Le juriste garde ce qui fait sa valeur : qualifier un risque, arbitrer entre la sécurité et la vitesse que réclame l\'activité, négocier, et dire non quand il le faut. La formation apprend à placer la frontière au bon endroit, tâche par tâche.',
                'Elle ne fait pas de Richard SALANON un juriste : il ne l\'est pas, et il forme à l\'usage des outils, à l\'organisation des flux et à la méthode de contrôle. Les participants apportent leur droit, leurs modèles et leurs arbitrages ; ce sont eux qui disent, pendant les exercices, si une analyse produite avec l\'outil tient. La recherche approfondie dans les Actes uniformes et la jurisprudence de la CCJA fait l\'objet d\'une formation distincte, citée plus bas, que cette page ne reprend pas.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment le cycle de vie d\'un contrat s\'outille-t-il, de la demande à l\'échéance ?',
            'items' => [
                ['titre' => 'La demande de contrat', 'duree' => 'Le jour où le besoin naît', 'texte' => 'Le service demandeur remplit un formulaire : cocontractant, objet, montant, durée, date souhaitée, contrat proposé par l\'autre partie ou non. Le formulaire évite le contrat découvert la veille de sa signature et donne au juriste les éléments pour décider s\'il part d\'un modèle ou s\'il revoit le papier du cocontractant.'],
                ['titre' => 'La rédaction ou la revue', 'duree' => 'Quelques heures à quelques jours', 'texte' => 'À partir du modèle du service, l\'assistant peut proposer une adaptation ; face au contrat d\'un tiers, il compare chaque clause à la grille de négociation et liste les écarts. Le juriste qualifie chaque écart, décide de ce qui se négocie, et reprend lui-même les clauses de responsabilité, de résiliation et de juridiction.'],
                ['titre' => 'La négociation', 'duree' => 'Selon le cocontractant', 'texte' => 'Chaque version reçue est comparée à la précédente, et le tableau des modifications est contrôlé à la main sur les clauses sensibles : un outil de comparaison ne voit pas toujours une définition modifiée dont dépendent dix autres articles. Les concessions accordées sont notées pour servir de référence aux négociations suivantes.'],
                ['titre' => 'La validation et la signature', 'duree' => 'Avant tout envoi pour signature', 'texte' => 'Le circuit d\'approbation vérifie que le signataire dispose d\'une délégation couvrant ce montant et cet engagement. La signature électronique accélère l\'étape, à condition de connaître la valeur que lui donne la loi applicable et de conserver le fichier de preuve fourni par le prestataire.'],
                ['titre' => 'L\'enregistrement', 'duree' => 'Le jour de la signature', 'texte' => 'Le contrat signé rejoint un registre unique, avec ses données clés extraites par l\'outil puis vérifiées par une personne : durée, préavis, reconduction tacite, révision de prix, garanties, plafonds de responsabilité, loi applicable, juridiction ou arbitrage. Un contrat qui dort dans une boîte de messagerie n\'existe pas pour le service.'],
                ['titre' => 'Le suivi des obligations', 'duree' => 'Pendant toute la durée du contrat', 'texte' => 'Des alertes automatiques rappellent les préavis, les dates de révision et la fin des garanties au juriste et au service opérationnel concerné. Les avenants sont rattachés au contrat d\'origine, pour que la version en vigueur soit toujours reconstituable sans fouiller les courriels.'],
                ['titre' => 'La fin ou le renouvellement', 'duree' => 'Avant la date du préavis', 'texte' => 'Le service décide de renouveler, de renégocier ou de résilier, en temps utile. À la fin du contrat, on vérifie la restitution ou la destruction des données confiées au cocontractant, puis le contrat rejoint l\'archive avec sa durée de conservation.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que l\'IA et l\'automatisation ne doivent-elles jamais faire dans une direction juridique ?',
            'intro' => 'Ces limites tiennent à la responsabilité du juriste envers son employeur, au secret des affaires, aux données personnelles et, selon le pays, à la protection des avis internes. La formation les transforme en gestes de travail, vérifiés pendant les exercices.',
            'items' => [
                ['titre' => 'Rendre un avis sans juriste', 'texte' => 'Un assistant interne peut renvoyer vers une réponse déjà validée par le service ; il ne formule pas d\'avis nouveau sur une situation qu\'aucun juriste n\'a examinée. La décision du tribunal de Colombie-Britannique dans l\'affaire Moffatt contre Air Canada, racontée dans l\'<a href="/histoires/air-canada-chatbot">histoire du chatbot d\'Air Canada</a>, montre qu\'une entreprise répond de ce que dit son robot.'],
                ['titre' => 'Accepter seul une clause', 'texte' => 'L\'outil signale qu\'une clause s\'écarte de la grille ; il ne décide pas qu\'elle est acceptable. Une limitation de responsabilité, une clause d\'exclusivité ou une compétence juridictionnelle étrangère s\'arbitrent par un juriste, et parfois par la direction.'],
                ['titre' => 'Signer ou envoyer à la signature', 'texte' => 'Aucune chaîne automatique ne va jusqu\'à l\'envoi d\'un contrat pour signature sans contrôle humain de la version finale et de la délégation du signataire. Une version de travail partie par erreur engage autant qu\'une version relue.'],
                ['titre' => 'Recevoir les secrets de l\'entreprise dans un compte personnel', 'texte' => 'Prix, marges, projets d\'acquisition, contentieux en cours, enquêtes internes : rien de cela n\'entre dans un assistant ouvert à titre personnel par un juriste ou un stagiaire. Seuls les comptes administrés par l\'entreprise, aux conditions lues, reçoivent des extraits neutralisés.'],
                ['titre' => 'Traiter une alerte interne ou une enquête', 'texte' => 'Les signalements de salariés et les enquêtes internes portent sur des personnes nommées et exigent une confidentialité stricte. Ils ne passent par aucun outil en ligne, et aucun tri automatique ne décide de la suite donnée à une alerte.'],
                ['titre' => 'Décider d\'un tiers à la place du service', 'texte' => 'L\'évaluation d\'un fournisseur ou d\'un intermédiaire peut s\'appuyer sur une synthèse assistée de sources publiques. Le refus ou l\'acceptation d\'un tiers reste une décision humaine, motivée et datée, d\'autant que la synthèse peut confondre deux sociétés au nom voisin.'],
                ['titre' => 'Laisser les avis internes hors du classement prévu', 'texte' => 'Un avis préparé dans l\'historique d\'un assistant, puis copié dans un courriel, laisse des versions de travail partout. Là où la loi protège les avis internes sous conditions, ce désordre complique la démonstration de la protection ; partout ailleurs, il disperse des documents sensibles.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Les avis du juriste d\'entreprise sont-ils confidentiels, et que cela change-t-il pour les outils ?',
            'legende' => 'Textes et décision lus le 5 octobre 2026 dans leur version publiée. Le tableau situe la question ; il ne dit pas si un avis donné est protégé, ce qui relève de l\'analyse juridique de l\'entreprise et, au besoin, de son avocat.',
            'entetes' => ['Pays ou ordre juridique', 'Ce que prévoit le texte', 'Conséquence pour l\'organisation des avis et des outils'],
            'lignes'  => [
                ['France : loi n° 2026-122 du 23 février 2026', 'Confidentialité des consultations des juristes d\'entreprise à cinq conditions : diplôme de master en droit ou équivalent, formation aux règles éthiques, consultation destinée à la direction ou aux organes d\'administration ou de surveillance, avis fondé sur une règle de droit, mention « confidentiel - consultation juridique - juriste d\'entreprise » avec auteur identifié et classement à part. Exclue en matière pénale et fiscale ; la loi s\'applique à une date fixée par décret', 'Un espace de classement dédié aux consultations, des versions de travail qui y restent, une mention apposée systématiquement, et aucun brouillon d\'avis laissé dans l\'historique d\'un assistant en ligne'],
                ['France : décision du Conseil constitutionnel n° 2026-900 DC du 18 février 2026', 'Loi jugée conforme, avec deux réserves : l\'autorité administrative peut contester la confidentialité dans le cadre de son droit de communication, et le juge peut la lever quand le document vise à faciliter une fraude à la loi ou aux droits d\'un tiers', 'La protection n\'est jamais acquise d\'avance : le service doit pouvoir montrer, document par document, que les conditions sont remplies'],
                ['Belgique : loi du 1er mars 2000 créant un Institut des juristes d\'entreprise, article 5', 'Les avis rendus par le juriste d\'entreprise au profit de son employeur, dans le cadre de son activité de conseil juridique, sont confidentiels ; depuis la loi du 14 mars 2023, en vigueur le 1er juin 2023, la protection couvre aussi la demande d\'avis, les échanges internes à son sujet, les projets d\'avis et les documents préparatoires', 'Les échanges préparatoires comptent : une demande d\'avis transmise à un assistant en ligne sort du circuit interne que la loi décrit'],
                ['Suisse : code de procédure civile, article 167a, en vigueur depuis le 1er janvier 2025', 'Droit de refuser de collaborer et de produire des documents liés à l\'activité du service juridique interne, si l\'entreprise est inscrite au registre du commerce, si le responsable du service détient un brevet d\'avocat ou une qualification équivalente, et si l\'activité serait propre à un avocat', 'Le droit vise le service juridique interne : les documents produits en dehors de ce service, ou par un outil que personne n\'y supervise, se défendent moins bien'],
                ['Union européenne : arrêt Akzo Nobel, Cour de justice, 14 septembre 2010 (C-550/07 P)', 'Dans une vérification de la Commission en matière de concurrence, la confidentialité ne couvre pas les échanges avec des avocats liés à l\'entreprise par un rapport d\'emploi', 'Pour un sujet de concurrence européen, ce qui doit rester protégé passe par un avocat indépendant ; la loi française de 2026 n\'est pas opposable aux autorités de l\'Union'],
                ['États de la zone OHADA', 'Aucun des Actes uniformes listés par l\'OHADA n\'est consacré à la confidentialité des avis internes ; la question relève du droit de chaque État', 'Le service vérifie la règle de son pays avec son conseil avant de supposer une protection ; en attendant, il traite ses avis comme des documents sensibles, rédigés et conservés dans ses propres outils'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change la confidentialité des avis internes pour un juriste qui travaille avec un assistant d\'IA ?',
            'paragraphes' => [
                'La loi française du 23 février 2026 protège les consultations, et précise, selon la présentation qu\'en fait Vie publique, que toutes leurs versions de travail sont couvertes. Elle exige aussi que la consultation soit identifiée, marquée et classée à part dans les dossiers de l\'entreprise. Ces deux exigences dessinent un mode de travail : un avis naît, mûrit et se range dans un espace que le service maîtrise. Un premier jet demandé à un assistant en ligne, retouché dans un courriel puis collé dans un traitement de texte, laisse des versions dans trois endroits, dont un chez un tiers.',
                'La formation ne tranche pas la question de savoir si une conversation avec un assistant fait perdre la protection : c\'est une question de droit, que les juristes présents analysent pour leur propre pays. Elle en tire une organisation prudente, valable partout. Les avis se rédigent dans les outils de l\'entreprise ; l\'assistant sert à structurer un raisonnement sur des faits neutralisés, jamais à recevoir le dossier ; le texte final et ses versions sont classés dans l\'espace dédié, avec la mention requise là où elle existe ; le registre des avis indique l\'auteur, le destinataire et la date.',
                'La loi rappelle aussi ses limites, que le service doit connaître avant de s\'y fier. La confidentialité ne joue ni en matière pénale ni en matière fiscale, elle n\'est pas opposable aux autorités de l\'Union européenne, et un juge peut la lever. Sa désignation frauduleuse est punie d\'un an d\'emprisonnement et de 15 000 euros d\'amende. Enfin, selon la même page de Vie publique, la loi s\'applique à une date fixée par le décret qui doit en préciser les conditions : avant d\'apposer la mention, le service vérifie que ce décret est paru et que ses juristes remplissent les conditions de diplôme et de formation.',
                'Pour une direction juridique de groupe, l\'enjeu est concret. Une filiale belge bénéficie déjà d\'une protection étendue aux échanges préparatoires, une filiale suisse peut refuser de produire certains documents dans un procès civil, une filiale ivoirienne ou camerounaise vérifie la règle locale, et le siège français organise ses consultations selon la loi de 2026. Un même outil d\'IA, utilisé de la même façon dans tout le groupe, n\'a pas les mêmes conséquences partout : la règle d\'usage du service en tient compte.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que vérifier dans le contrat d\'un éditeur d\'IA avant que l\'entreprise ne l\'accepte ?',
            'legende' => 'Grille travaillée pendant la demi-journée consacrée à la conformité, sur les conditions réelles de l\'outil envisagé par l\'entreprise. Les références juridiques ont été lues le 5 octobre 2026 ; elles indiquent où chercher, pas la réponse pour un contrat donné.',
            'entetes' => ['Point du contrat', 'Question posée par le juriste', 'Où se trouve souvent la réponse', 'Référence utile'],
            'lignes'  => [
                ['Usage des données confiées', 'L\'éditeur entraîne-t-il ses modèles sur nos contenus, par défaut ou sur option ?', 'Conditions de l\'offre professionnelle, page de confidentialité, réglages de la console d\'administration', 'Les engagements diffèrent souvent entre offres gratuites, individuelles et d\'équipe'],
                ['Qualité de sous-traitant', 'L\'éditeur traite-t-il les données personnelles pour notre compte, et le contrat le dit-il ?', 'Avenant relatif à la protection des données, souvent appelé DPA', 'RGPD, article 28 : contrat obligatoire, traitement sur instruction documentée, confidentialité du personnel, sécurité, sort des données en fin de contrat'],
                ['Sous-traitants ultérieurs', 'Qui d\'autre traite nos données, et serons-nous prévenus d\'un changement ?', 'Liste publiée des sous-traitants, clause de notification', 'RGPD, article 28, paragraphe 2 : autorisation écrite et droit d\'objection'],
                ['Hébergement et transferts', 'Dans quels pays les données sont-elles traitées et stockées ?', 'Annexe sur la localisation, clauses de transfert', 'Bénin : article 391 de la loi n° 2017-20 sur les transferts vers un État tiers ; règles équivalentes à vérifier dans chaque pays'],
                ['Conservation et suppression', 'Combien de temps les conversations et les fichiers sont-ils gardés, et comment les supprimer ?', 'Politique de conservation, réglages de l\'administrateur', 'Cohérence avec la durée de conservation des dossiers du service'],
                ['Confidentialité et secret des affaires', 'Le contrat engage-t-il l\'éditeur à la confidentialité sur nos contenus ?', 'Clause de confidentialité des conditions commerciales', 'À rapprocher des clauses de confidentialité que l\'entreprise a elle-même signées avec ses partenaires'],
                ['Responsabilité et garanties', 'Que se passe-t-il si une réponse erronée cause un dommage ?', 'Clauses de limitation de responsabilité, souvent très protectrices de l\'éditeur', 'Le risque reste à l\'entreprise : d\'où la relecture humaine de tout ce qui sort'],
                ['Réversibilité', 'Pouvons-nous récupérer nos consignes, nos documents et nos historiques si nous changeons d\'outil ?', 'Fonctions d\'export, clause de fin de contrat', 'RGPD, article 28, paragraphe 3, point g : suppression ou restitution au terme de la prestation'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Un assistant interne peut-il répondre seul aux questions juridiques des salariés ?',
            'texte' => 'Seulement s\'il se contente de restituer des réponses que le service a écrites, validées et datées, et s\'il renvoie vers un juriste dès que la question sort de cette base. Un assistant qui improvise sur une question de licenciement, de pénalité contractuelle ou de conformité donne un avis que personne n\'a relu, et l\'entreprise en répond. La base de réponses se relit à chaque changement de texte, chaque réponse porte sa date de validation, et les questions restées sans réponse alimentent la liste de travail du service.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères datés situent l\'enjeu pour une direction juridique ?',
            'items' => [
                ['valeur' => '36 %', 'libelle' => 'Directions juridiques en déploiement effectif de l\'IA générative, selon 1 049 directeurs juridiques de 43 pays et 20 secteurs interrogés (résultats publiés le 29 janvier 2026)', 'source' => 'Association of Corporate Counsel, 2026 Chief Legal Officers Survey', 'url' => 'https://www.acc.com/sites/default/files/2026-01/2026-ACC-Chief-Legal-Officers-Survey-Key-Findings.pdf'],
                ['valeur' => '64 %', 'libelle' => 'Directeurs juridiques de la même enquête qui supervisent la conformité ; 62 % ont aussi la charge du secrétariat juridique des sociétés (29 janvier 2026)', 'source' => 'Association of Corporate Counsel, 2026 Chief Legal Officers Survey', 'url' => 'https://www.acc.com/sites/default/files/2026-01/2026-ACC-Chief-Legal-Officers-Survey-Key-Findings.pdf'],
                ['valeur' => '8,6 %', 'libelle' => 'Érosion moyenne de la valeur des contrats estimée par l\'association mondiale des professionnels du contrat, un peu plus de 3 % chez les meilleurs et plus de 20 % chez les moins bons (article du 19 juin 2026 citant son rapport sur le rendement de l\'excellence contractuelle)', 'source' => 'World Commerce & Contracting', 'url' => 'https://www.worldcc.com/resource/from-value-leakage-to-better-outcomes-why-contracting-needs-integration.html'],
                ['valeur' => '500 salariés', 'libelle' => 'Seuil d\'effectif, avec plus de 100 millions d\'euros de chiffre d\'affaires et un siège en France, à partir duquel une société doit mettre en place les huit mesures anticorruption de l\'article 17 de la loi Sapin II du 9 décembre 2016 (page consultée le 5 octobre 2026)', 'source' => 'Agence française anticorruption', 'url' => 'https://www.agence-francaise-anticorruption.gouv.fr/acteurs-economiques/connaitre-les-obligations-des-entreprises/les-entreprises-qui-ont-lobligation'],
                ['valeur' => '3 août 2026', 'libelle' => 'Début du contrôle et des sanctions de l\'obligation de maîtrise de l\'IA imposée aux utilisateurs professionnels établis dans l\'Union européenne, applicable depuis le 2 février 2025 (questions et réponses mises à jour le 27 juillet 2026)', 'source' => 'Commission européenne, article 4 du règlement sur l\'IA', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation dans des directions juridiques d\'Afrique francophone et d\'Europe ?',
            'items' => [
                ['secteur' => 'Société de distribution, à Cotonou', 'probleme' => 'Deux juristes reçoivent les demandes des agences par WhatsApp, par téléphone et dans les couloirs ; personne ne sait combien de demandes attendent, et les mêmes questions sur les conditions générales de vente reviennent chaque semaine.', 'solution' => 'Formulaire unique de demande, tri assisté validé par un juriste, base de vingt réponses validées et datées sur les conditions de vente, tableau mensuel des délais présenté à la direction générale.'],
                ['secteur' => 'Filiale d\'un groupe français, à Abidjan', 'probleme' => 'Le siège, assujetti à l\'article 17 de la loi Sapin II, demande l\'évaluation de tous les intermédiaires et fournisseurs de premier rang de la filiale, avec une équipe juridique de trois personnes.', 'solution' => 'Questionnaire d\'évaluation standard, synthèse assistée des sources publiques sur chaque tiers, décision motivée par un juriste, registre des évaluations avec date de revue, aucune donnée sur des personnes physiques versée dans un outil non administré.'],
                ['secteur' => 'Entreprise de travaux publics, à Dakar', 'probleme' => 'Des centaines de contrats de sous-traitance et de marchés, des garanties de bonne exécution et des retenues dont les dates de libération se perdent dans les classeurs.', 'solution' => 'Registre des contrats alimenté par extraction assistée des dates et des montants de garantie, vérification humaine de chaque ligne, alertes envoyées au juriste et au conducteur de travaux avant chaque échéance.'],
                ['secteur' => 'Groupe minier présent dans plusieurs États de la zone OHADA, à Libreville et à Douala', 'probleme' => 'La veille réglementaire couvre plusieurs codes miniers, fiscaux et du travail, en plus des Actes uniformes, et repose sur la lecture de journaux officiels par une seule juriste.', 'solution' => 'Liste des sources par pays, résumés assistés relus avant diffusion, registre des obligations avec un responsable par obligation, et note mensuelle à la direction sur les textes qui changent une procédure interne.'],
                ['secteur' => 'Entreprise de taille intermédiaire, à Lyon', 'probleme' => 'La direction juridique veut préparer l\'application de la loi du 23 février 2026 alors que ses juristes rédigent leurs avis dans des fichiers dispersés et testent un assistant d\'IA chacun de leur côté.', 'solution' => 'Espace de classement dédié aux consultations, modèle d\'avis portant la mention prévue, règle interdisant la rédaction d\'un avis dans un assistant en ligne, compte d\'équipe administré pour les usages autorisés, registre des avis.'],
                ['secteur' => 'Direction juridique d\'un groupe de services, à Bruxelles', 'probleme' => 'Les juristes membres de l\'Institut des juristes d\'entreprise rendent des avis protégés, mais les demandes et les projets d\'avis circulent dans une messagerie dont une fonction d\'IA est désormais activée.', 'solution' => 'Inventaire des fonctions d\'IA actives dans la suite bureautique, circuit interne des demandes d\'avis tenu hors de ces fonctions, comptes et réglages revus avec l\'informatique, information écrite des services demandeurs.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Avec quels outils et systèmes une direction juridique travaille-t-elle, et que faut-il en savoir ?',
            'legende' => 'Outils rencontrés dans les directions juridiques de la zone OHADA et d\'Europe. Les prix cités ont été relevés le 5 octobre 2026 et sont payés par l\'entreprise aux éditeurs ; ils ne font pas partie du prix de la formation.',
            'entetes' => ['Outil ou système', 'Usage dans la direction juridique', 'Coût ou accès', 'Point d\'attention'],
            'lignes'  => [
                ['Site et bibliothèque numérique de l\'OHADA, journaux officiels nationaux', 'Textes en vigueur, dates d\'adoption, veille sur le Journal officiel de l\'OHADA', 'Consultation gratuite', 'L\'Acte uniforme portant sur le droit commercial général, adopté le 15 décembre 2010, a refondu la prescription et pris en compte les procédures électroniques : les anciens modèles se contrôlent'],
                ['EUR-Lex et sites des autorités européennes', 'Veille sur les règlements de l\'Union, versions consolidées', 'Gratuit', 'Toujours lire la version consolidée et sa date, comme celle du règlement eIDAS au 18 octobre 2024'],
                ['Assistant d\'IA en offre d\'équipe', 'Première revue de contrats neutralisés, résumés de textes publics, tri des demandes', 'Abonnement par utilisateur ; offres comparées dans le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>', 'Compte administré par l\'entreprise, conditions de l\'éditeur lues par le juriste lui-même'],
                ['Odoo', 'Documents, signature, circuits de validation, contrats rattachés aux clients et aux fournisseurs', 'Une application gratuite ; offre Standard à 19,90 € par utilisateur et par mois la première année en paiement annuel, puis 24,90 €', 'Utile quand l\'entreprise l\'utilise déjà pour ses ventes et ses achats : le contrat vit à côté des commandes et des factures'],
                ['Dolibarr', 'Module de contrats, tiers, documents joints, échéances', 'Logiciel libre ; coût d\'hébergement et de paramétrage', 'Convient à une PME qui veut un registre simple, à condition de sauvegarder sérieusement'],
                ['Signature électronique (DocuSign, Youtrust, anciennement Yousign, ou Odoo Sign)', 'Signature à distance, horodatage, fichier de preuve', 'Abonnement d\'éditeur selon le volume', 'En Europe, l\'article 25 du règlement eIDAS interdit de refuser une signature électronique comme preuve au seul motif de sa forme ; dans la zone OHADA, la loi de chaque État sur les transactions électroniques se vérifie'],
                ['Formulaires et messagerie interne (Microsoft Forms, Google Forms, Teams)', 'Guichet des demandes internes, suivi des délais', 'Inclus dans les suites bureautiques', 'Les demandes contiennent souvent des données personnelles : droits d\'accès limités au service'],
                ['Automatisation (n8n, Make)', 'Alertes d\'échéance, relances des demandeurs, accusés de réception', 'n8n Cloud à partir de 20 € par mois en paiement annuel, ou installation sur un serveur de l\'entreprise', 'Aucune automatisation ne valide une clause ni n\'envoie un contrat à la signature'],
                ['Logiciel de gestion des contrats dédié', 'Registre, circuits, extraction des données, tableaux de bord', 'Abonnement d\'éditeur, souvent sur devis', 'Se choisit après avoir écrit le processus, jamais avant ; vérifier l\'export complet des données'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme type, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation s\'organise-t-elle dans une direction juridique ?',
            'intro' => 'Une direction juridique ne ferme pas pour se former : les demandes continuent d\'arriver et les échéances tombent. L\'organisation part du calendrier du service et du rôle de chacun.',
            'items' => [
                ['titre' => 'Des participants choisis par rôle', 'texte' => 'Le directeur juridique suit au moins la première et la dernière demi-journée, parce qu\'il arbitre la règle d\'usage et le choix des outils. Les juristes suivent tout le parcours ; les assistants juridiques suivent le guichet et le registre des contrats ; le responsable conformité rejoint la troisième journée.'],
                ['titre' => 'Des correspondants métiers invités', 'texte' => 'Un acheteur, un commercial ou un responsable des ressources humaines peuvent assister à la demi-journée du guichet : ce sont eux qui rempliront le formulaire, et leurs objections améliorent sa première version.'],
                ['titre' => 'Les modèles et les outils du service', 'texte' => 'Les exercices partent des modèles de contrats, de la grille de négociation s\'il en existe une et des outils réellement utilisés. Un service sans outil de gestion voit la démonstration dans Odoo ou Dolibarr, sans engagement de les adopter.'],
                ['titre' => 'Des contrats fictifs ou neutralisés', 'texte' => 'Aucun contrat en négociation ni aucun dossier contentieux en cours ne sert de matière. Le service fournit des contrats échus dont les noms, les prix et les volumes ont été retirés, ou le formateur construit avec lui des contrats fictifs proches de sa pratique.'],
                ['titre' => 'Des groupes restreints', 'texte' => 'Huit personnes au plus, chacune sur son poste, pour que les erreurs de méthode se voient pendant les exercices. Une direction juridique de groupe est répartie par pays ou par spécialité.'],
                ['titre' => 'Un calendrier qui évite les pics', 'texte' => 'Les demi-journées s\'écartent des assemblées générales, des clôtures et des grandes négociations. Elles peuvent s\'étaler sur plusieurs semaines, ce qui laisse le temps d\'essayer le formulaire et le registre entre deux séances.'],
                ['titre' => 'Des supports que le service garde', 'texte' => 'Carte des flux, formulaire de demande, trame de base de réponses, grille de revue des contrats, modèle de registre, grille d\'analyse des contrats d\'éditeurs d\'IA, trame de règle d\'usage, dans des formats modifiables, avec une attestation nominative de fin de formation.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir selon la taille et l\'organisation du service juridique ?',
            'legende' => 'Formats indicatifs, ajustés après un premier échange sur l\'effectif, les pays couverts, le volume de contrats et les outils en place.',
            'entetes' => ['Situation', 'Format conseillé', 'Durée', 'Priorités'],
            'lignes'  => [
                ['Juriste unique dans une PME', 'Séances individuelles à distance ou sur place', '5 séances de 2 heures', 'Guichet simple, registre des contrats, contrats des outils d\'IA'],
                ['Direction juridique de 3 à 8 personnes', 'Intra, dans les locaux de l\'entreprise', '3 jours en 6 demi-journées', 'Le parcours complet et une règle d\'usage adoptée à la fin'],
                ['Direction juridique de groupe, plusieurs pays', 'Intra par pays, ou hybride avec une séance commune', '2 jours par équipe pays, plus une demi-journée commune', 'Règle d\'usage commune, déclinaisons locales sur la confidentialité et les données'],
                ['Service conformité rattaché ou non au juridique', 'Intra, module dédié', '2 jours', 'Registre des obligations, veille, évaluation des tiers, contrats des éditeurs'],
                ['Juristes de plusieurs entreprises, par une association professionnelle', 'Inter, sur contrats fictifs uniquement', '2 jours', 'Méthode de revue des contrats, guichet, échanges de pratiques'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation d\'une direction juridique, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Aucun tarif n\'est affiché : chaque parcours fait l\'objet d\'un devis, et le premier échange, le cadrage comme le devis lui-même ne sont pas facturés. Paiement par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les licences des assistants, de l\'outil de gestion ou de la signature électronique sont réglées par l\'entreprise directement aux éditeurs.',
            'items'      => [
                ['offre' => 'Parcours direction juridique', 'prix' => 'Sur devis', 'inclus' => ['Six demi-journées sur les modèles et les outils du service', 'Formulaire de demande et base de réponses validées', 'Grille de revue et modèle de registre des contrats', 'Règle d\'usage, évaluation finale et attestation']],
                ['offre' => 'Socle contrats et demandes', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Guichet des demandes internes', 'Revue, signature et registre des contrats', 'Supports modifiables']],
                ['offre' => 'Module conformité et outils d\'IA', 'prix' => 'Sur devis', 'inclus' => ['Une à deux demi-journées', 'Registre des obligations et veille', 'Analyse des conditions d\'un éditeur d\'IA', 'Liste des points à négocier']],
            ],
            'variations' => [
                'L\'effectif à former, le nombre de groupes et de pays couverts.',
                'La préparation des contrats neutralisés et de la grille de négociation avec le service.',
                'Le paramétrage éventuel d\'un registre, d\'un formulaire ou d\'alertes d\'échéance pendant la session.',
                'Le lieu, le déplacement hors de Cotonou ou du Bénin, et le choix entre présentiel, distance et hybride.',
                'L\'accompagnement retenu après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'L\'entreprise peut-elle faire financer la formation de ses juristes ?',
            'paragraphes' => [
                'Le juriste d\'entreprise est salarié : la question du financement se pose donc à l\'employeur, et aucune prise en charge n\'est promise ici. En Côte d\'Ivoire, le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> réserve son plan de formation aux entreprises à jour de leurs taxes de formation ; la direction juridique peut demander au service des ressources humaines d\'y inscrire la session, programme à l\'appui. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> ouvre un guichet pour le personnel des entreprises. Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286</a>, et ses conditions se demandent au fonds au moment du projet.',
                'En France, les fonds mutualisés de la formation exigent un organisme certifié Qualiopi, ce que Richard SALANON n\'est pas ; il ne détient pas non plus d\'agrément d\'un fonds africain. Le budget se construit donc sur le plan de formation de l\'entreprise, sans financement extérieur garanti. Le programme détaillé, les feuilles d\'émargement, les résultats de l\'évaluation et une attestation par participant sont remis dans tous les cas, ce qui permet au service des ressources humaines de présenter toute demande qu\'il jugerait possible.',
                'Pour une entreprise établie dans l\'Union européenne, la session peut aussi s\'inscrire dans les mesures de maîtrise de l\'IA prévues par l\'article 4 du règlement européen : les traces de formation des juristes, qui encadrent souvent eux-mêmes les usages des autres services, font partie de ce que l\'entreprise conserve pour en rendre compte.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs commettent les directions juridiques qui s\'équipent, et comment les éviter ?',
            'intro' => 'Elles se ressemblent d\'une entreprise à l\'autre, à Douala comme à Bruxelles. Presque aucune n\'est technique : ce sont des erreurs d\'organisation, qui se corrigent par une règle écrite et une habitude prise dès les premières semaines.',
            'items' => [
                ['titre' => 'Choisir un logiciel de contrats avant d\'avoir écrit le processus', 'texte' => 'Un outil acheté avant de savoir qui demande, qui valide et qui signe reproduit le désordre existant, en plus cher. Le circuit se dessine d\'abord sur papier, avec les services demandeurs ; l\'outil se choisit ensuite.'],
                ['titre' => 'Faire confiance aux données extraites sans les relire', 'texte' => 'Une date de préavis mal lue, une reconduction tacite manquée, un plafond de responsabilité confondu avec un montant de commande : l\'extraction assistée se vérifie ligne par ligne au moment de l\'enregistrement, pas le jour où l\'échéance est dépassée.'],
                ['titre' => 'Ouvrir un guichet sans délai promis', 'texte' => 'Un formulaire qui ne dit pas quand la réponse arrivera renvoie les demandeurs vers le téléphone et le couloir. Chaque catégorie de demande a son délai annoncé, et le tableau de suivi montre s\'il est tenu.'],
                ['titre' => 'Laisser vieillir la base de réponses', 'texte' => 'Une réponse validée il y a deux ans, avant un nouveau texte, devient une erreur diffusée en série. Chaque réponse porte sa date, et la veille déclenche la relecture des réponses touchées.'],
                ['titre' => 'Accepter les conditions d\'un éditeur d\'IA sans les lire', 'texte' => 'Le juriste qui revoit tous les contrats fournisseurs laisse parfois passer celui de l\'assistant qu\'il utilise lui-même, accepté d\'un clic. Les conditions de l\'outil passent par la même grille que n\'importe quel sous-traitant.'],
                ['titre' => 'Disperser les avis internes', 'texte' => 'Des avis dans les courriels, des projets dans l\'historique d\'un assistant, des versions sur un ordinateur portable : le jour où il faut montrer qu\'un avis remplit les conditions d\'une protection, ou simplement le retrouver, rien n\'est rangé. Un espace unique et un registre règlent la question.'],
                ['titre' => 'Former les juristes et oublier les assistants juridiques', 'texte' => 'Ce sont souvent eux qui tiennent le registre, reçoivent les demandes et préparent les signatures. Sans eux dans la formation, les nouveaux circuits restent théoriques.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles formations du catalogue prolongent ce parcours selon le besoin du service ?',
            'legende' => 'Fiches du catalogue qui approfondissent un volet de cette page. Chacune a son propre programme ; une direction juridique en combine souvent deux.',
            'entetes' => ['Formation', 'Pour qui dans le service', 'Ce qu\'elle apporte de plus', 'Durée indicative'],
            'lignes'  => [
                ['<a href="/formations/ia-droit-ohada">IA et droit OHADA : recherche, rédaction, veille</a>', 'Juristes qui cherchent et rédigent en droit uniforme', 'La recherche dans les Actes uniformes et la jurisprudence de la CCJA, et la vérification de chaque référence citée', '2 jours'],
                ['<a href="/formations/gouvernance-ia">Gouverner l\'IA dans l\'entreprise</a>', 'Directeur juridique, responsable conformité', 'La charte de l\'entreprise, l\'inventaire des usages et les rôles, quand le juridique pilote l\'encadrement de l\'IA pour tous les services', '2 jours'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Tous les salariés, juristes compris', 'Les gestes de chaque salarié face aux données personnelles, au secret des affaires et au droit d\'auteur, pays par pays', '1 à 2 jours'],
                ['<a href="/formations/ia-audit-controle">IA pour l\'audit, le contrôle et la conformité</a>', 'Responsables conformité et contrôle interne', 'Les tests sur des populations entières et la revue d\'un lot de contrats confrontés aux paiements', '3 jours'],
                ['<a href="/formations/rag-chatbot-documents">RAG : chatbot sur vos documents internes</a>', 'Services qui veulent un assistant limité à leurs réponses validées', 'La construction d\'un assistant qui cite ses sources internes et s\'arrête là où la base s\'arrête', '3 jours'],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', 'Directeur juridique et assistants juridiques', 'La cartographie et l\'outillage d\'un processus, utiles pour le circuit des contrats et des demandes', '2 jours'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former votre direction juridique avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard peut former des juristes d\'entreprise : le parcours décrit ici est construit pour eux, à partir de leurs flux réels de demandes, de contrats et d\'échéances. Il conçoit lui-même des assistants d\'IA et les relie à des logiciels de gestion : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il sait donc ce que contiennent les conditions d\'un éditeur, où partent les données et ce qu\'un circuit automatisé peut laisser passer. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), fort de ' . $ans . ' ans d\'expérience, il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, dont le Gabon, la Belgique et la Suisse.',
                'Il n\'est pas juriste et le dit dès l\'ouverture : il enseigne les outils, l\'organisation du service et la méthode de contrôle ; l\'analyse juridique, les arbitrages et la confidentialité des avis restent l\'affaire des juristes, de leur direction et de leurs avocats. Aucun éditeur ne l\'a certifié et il ne se présente comme partenaire d\'aucun. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>, et l\'ensemble de l\'offre dans le <a href="/formations/">catalogue des formations</a>, dont le domaine <a href="/formations/domaine/ia-systemes-existants">IA dans vos systèmes existants</a>.',
                'Quand le service veut aller au-delà de la formation, par exemple un registre des contrats relié aux achats et aux ventes dans Odoo, un formulaire de demandes branché sur des alertes automatiques ou un assistant limité aux réponses validées, le besoin relève d\'une mission d\'<a href="/services/integration-ia-entreprise">intégration de l\'IA en entreprise</a> ou de <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a>. La façon dont Richard organise ses sessions est décrite sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'engager la direction juridique dans la formation ?',
            'texte' => 'L\'outil reçoit, trie, compare et rappelle ; le juriste qualifie, arbitre et répond. Les demandes passent par un guichet unique, chaque contrat signé entre dans un registre vérifié par une personne, aucune clause n\'est acceptée ni aucun contrat envoyé à la signature sans contrôle humain, les avis internes se rédigent et se rangent dans les outils de l\'entreprise, et les conditions des éditeurs d\'IA passent par la même grille que celles de n\'importe quel fournisseur.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous outiller votre direction juridique sans fragiliser la confidentialité de ses avis ?',
            'texte'  => 'Indiquez l\'effectif du service, les pays couverts, le volume approximatif de contrats et de demandes, et les outils déjà en place : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation pour ma direction juridique'],
        ],
    ],

    'faq' => [
        ['q' => 'Le formateur est-il juriste ?', 'r' => 'Non. Richard SALANON forme à l\'usage des outils, à l\'organisation des flux du service et à la méthode de contrôle. Il ne donne aucun avis juridique : ce sont les juristes présents qui jugent du fond des exercices et de la portée des textes étudiés.'],
        ['q' => 'En quoi cette formation diffère-t-elle de la formation IA et droit OHADA ?', 'r' => 'La formation IA et droit OHADA approfondit la recherche dans les Actes uniformes et la jurisprudence de la CCJA, et la vérification des références, pour tous les professionnels du droit. Ce parcours porte sur le fonctionnement d\'une direction juridique : demandes internes, cycle de vie des contrats, conformité, veille, contentieux suivis avec les avocats et confidentialité des avis.'],
        ['q' => 'Faut-il déjà disposer d\'un logiciel de gestion des contrats ?', 'r' => 'Non. La première demi-journée part de l\'organisation actuelle, même tenue dans un tableur et une messagerie. Si le service n\'a pas d\'outil, la démonstration se fait dans Odoo ou Dolibarr, et la formation aide à écrire le processus avant de choisir un logiciel.'],
        ['q' => 'Peut-on travailler sur nos vrais contrats pendant la session ?', 'r' => 'Pas sur des contrats en négociation. Le service peut fournir des contrats échus dont les noms, les prix et les volumes ont été retirés, ou travailler sur des contrats fictifs construits pour ressembler à sa pratique. La confidentialité des affaires de l\'entreprise s\'applique aussi pendant la formation.'],
        ['q' => 'Un juriste peut-il soumettre un contrat fournisseur à ChatGPT ou à Claude ?', 'r' => 'Pas dans un compte personnel, et pas tel quel. Le contrat passe par un compte administré par l\'entreprise, dont les conditions ont été lues, après retrait des noms, des prix, des volumes et des données personnelles. Les clauses sensibles se relisent de toute façon par le juriste lui-même.'],
        ['q' => 'La loi française sur la confidentialité des consultations des juristes d\'entreprise s\'applique-t-elle déjà ?', 'r' => 'La loi n° 2026-122 du 23 février 2026 a été promulguée et validée par le Conseil constitutionnel avec deux réserves. Selon Vie publique, elle s\'applique à une date fixée par un décret qui doit en préciser les conditions : le service vérifie la parution de ce décret avant d\'apposer la mention prévue.'],
        ['q' => 'Rédiger un avis avec un assistant d\'IA fait-il perdre sa confidentialité ?', 'r' => 'C\'est une question de droit propre à chaque pays, que la formation ne tranche pas. Elle enseigne une organisation prudente : avis rédigés dans les outils de l\'entreprise, assistant utilisé seulement sur des faits neutralisés, versions de travail classées dans l\'espace dédié, registre des avis tenu à jour.'],
        ['q' => 'Les avis des juristes d\'entreprise sont-ils protégés dans les pays de la zone OHADA ?', 'r' => 'Aucun Acte uniforme n\'est consacré à cette question, qui relève du droit de chaque État. La direction juridique la vérifie pour son pays avec son conseil ; en attendant, elle traite ses avis comme des documents sensibles et les garde hors des outils qu\'elle ne maîtrise pas.'],
        ['q' => 'Un assistant d\'IA peut-il répondre directement aux questions juridiques des salariés ?', 'r' => 'Seulement à partir de réponses écrites et validées par le service, avec un renvoi vers un juriste dès que la question sort de cette base. L\'entreprise répond de ce que dit son assistant, comme l\'a rappelé la décision du tribunal de Colombie-Britannique dans l\'affaire Moffatt contre Air Canada.'],
        ['q' => 'Une signature électronique a-t-elle la même valeur qu\'une signature manuscrite ?', 'r' => 'Dans l\'Union européenne, l\'article 25 du règlement eIDAS donne cet effet à la signature électronique qualifiée et interdit d\'écarter une autre signature électronique comme preuve au seul motif de sa forme. Dans la zone OHADA, la valeur dépend de la loi de chaque État sur les transactions électroniques, à vérifier avant de généraliser l\'outil.'],
        ['q' => 'La formation aide-t-elle à négocier le contrat de notre fournisseur d\'IA ?', 'r' => 'Elle fournit une grille d\'analyse appliquée en séance aux conditions de l\'outil que l\'entreprise envisage : usage des données, sous-traitants, hébergement, conservation, responsabilité, réversibilité. La négociation et l\'appréciation juridique restent celles des juristes.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est établi sur devis, selon l\'effectif, les pays couverts, la préparation des contrats d\'exercice, le paramétrage éventuel d\'un outil, le lieu, le format et l\'accompagnement retenu. Le premier échange, le cadrage et le devis ne sont pas facturés.'],
    ],

    'sources' => [
        ['titre' => 'Vie publique, loi du 23 février 2026 relative à la confidentialité des consultations des juristes d\'entreprise (page modifiée le 25 février 2026)', 'url' => 'https://www.vie-publique.fr/loi/293979-confidentialite-consultations-juriste-entreprise-loi-23-fevrier-2026', 'date' => '2026-10-05'],
        ['titre' => 'Conseil constitutionnel, décision n° 2026-900 DC du 18 février 2026, loi relative à la confidentialité des consultations des juristes d\'entreprise', 'url' => 'https://www.conseil-constitutionnel.fr/decision/2026/2026900DC.htm', 'date' => '2026-10-05'],
        ['titre' => 'Justel, loi belge du 1er mars 2000 créant un Institut des juristes d\'entreprise, article 5 (modifié par la loi du 14 mars 2023)', 'url' => 'https://www.ejustice.just.fgov.be/eli/loi/2000/03/01/2000009248/justel', 'date' => '2026-10-05'],
        ['titre' => 'Fedlex, code de procédure civile suisse, article 167a (droit de refus concernant l\'activité du service juridique interne, en vigueur depuis le 1er janvier 2025)', 'url' => 'https://www.fedlex.admin.ch/eli/cc/2010/262/fr', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, Cour de justice, arrêt du 14 septembre 2010, Akzo Nobel Chemicals et Akcros Chemicals contre Commission, C-550/07 P', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:62007CJ0550', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, règlement (UE) n° 910/2014 (eIDAS), version consolidée au 18 octobre 2024, article 25', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:02014R0910-20241018', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, règlement (UE) 2016/679 (RGPD), article 28 : sous-traitant', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32016R0679', 'date' => '2026-10-05'],
        ['titre' => 'Agence française anticorruption, les entreprises qui ont l\'obligation de mettre en place un dispositif anticorruption (article 17 de la loi Sapin II)', 'url' => 'https://www.agence-francaise-anticorruption.gouv.fr/acteurs-economiques/connaitre-les-obligations-des-entreprises/les-entreprises-qui-ont-lobligation', 'date' => '2026-10-05'],
        ['titre' => 'Association of Corporate Counsel, 2026 Chief Legal Officers Survey, principaux résultats (29 janvier 2026)', 'url' => 'https://www.acc.com/sites/default/files/2026-01/2026-ACC-Chief-Legal-Officers-Survey-Key-Findings.pdf', 'date' => '2026-10-05'],
        ['titre' => 'World Commerce & Contracting, From value leakage to better outcomes: why contracting needs integration (19 juin 2026)', 'url' => 'https://www.worldcc.com/resource/from-value-leakage-to-better-outcomes-why-contracting-needs-integration.html', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, Acte uniforme portant sur le droit commercial général (15 décembre 2010) : présentation et innovations', 'url' => 'https://www.ohada.org/droit-commercial-general/', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, les Actes uniformes', 'url' => 'https://www.ohada.org/actes-uniformes/', 'date' => '2026-10-05'],
        ['titre' => 'Civil Resolution Tribunal de Colombie-Britannique, Moffatt v. Air Canada, 2024 BCCRT 149 (14 février 2024)', 'url' => 'https://decisions.civilresolutionbc.ca/crt/crtd/en/item/525448/index.do', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA, mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, tarifs des offres', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'n8n, tarifs de n8n Cloud', 'url' => 'https://n8n.io/pricing', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-droit-ohada', 'gouvernance-ia', 'ia-ethique-conformite', 'ia-audit-controle', 'rag-chatbot-documents', 'digitalisation-processus'],
        'services'    => ['integration-ia-entreprise', 'digitalisation-d-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'odoo-vs-dolibarr'],
    ],
];
