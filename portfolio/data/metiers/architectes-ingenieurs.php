<?php
// ============================================================
// data/metiers/architectes-ingenieurs.php · Page « formations par métier »
// pour les cabinets d'architecture et les bureaux d'études (vague 1C,
// univers « Technique et terrain », non prioritaire, statut F : Richard a
// déjà formé ce public).
// Angle propre : la conception et les études, pas le chantier (devis,
// métrés, journal de chantier, sous-traitants, situations : page btp).
// Chaîne traitée : programme et réglementation, esquisse et avant-projets,
// plans et maquette numérique (BIM, IFC, BCF), indices de révision et
// registre des documents, notes de calcul et hypothèses, coordination entre
// intervenants, temps passé par phase et honoraires, candidatures et
// concours de maîtrise d'œuvre, propriété intellectuelle, secret,
// responsabilité et assurance.
// Sources lues le 05/10/2026 : Légifrance (loi n° 77-2, articles 3 et 16 ;
// code de déontologie des architectes, articles 4, 5, 11 et 14, version du
// 01/07/2026 ; décret n° 2026-568 ; code civil 1792-1 ; code des assurances
// L241-1 ; CPI L112-2 ; code de la commande publique R2162-18, R2172-2,
// R2172-4, R2431-4), UEMOA (directive n° 01/2013/CM/UEMOA, articles 4, 5,
// 18, 21, 22, 23, 24, recueil de l'e-docucenter), loi béninoise n° 2020-26
// (articles 32, 36 et 37, PDF du SGG), loi n° 2017-20 (articles 425 et
// 426), gouv.bj (permis de construire en ligne, 12/03/2020), ISO 19650-1 et
// ISO 16739-1 (pages de l'ISO lues dans le navigateur), buildingSMART
// (BCF), EUR-Lex (directive 2014/24/UE, article 22, paragraphe 4), JRC
// (Eurocodes de deuxième génération), RIBA (rapports IA 2025 et 2026),
// Ordre des architectes (formation continue), Opco EP, Opco Atlas.
// Faits repris des fiches déjà vérifiées : FDFP, FODEFCA, 3FPT, France
// Compétences, article 4 du règlement européen sur l'IA, tarifs d'Odoo.
// Richard n'exerce pas ces métiers et n'est certifié par aucun éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour architectes, ingénieurs et bureaux d'études : des études, des plans et des notes de calcul mieux tenus et mieux coordonnés, sans qu'aucun outil ne signe à la place de l'homme de l'art",
    'title'   => "Formation IA architectes et ingénieurs | Richard SALANON",
    'meta'    => "Former architectes, ingénieurs et bureaux d'études à l'IA et aux outils : plans, notes de calcul, BIM, versions, suivi de projet, candidatures. Sur devis.",
    'en_bref' => "Cette page s'adresse aux cabinets d'architecture et aux bureaux d'études : architectes, ingénieurs de structure, de fluides ou de voirie, chefs de projet, projeteurs, modeleurs BIM, économistes et secrétariats techniques qui veulent se servir de l'intelligence artificielle, de la maquette numérique et des outils de gestion de projet sans perdre la maîtrise de ce qu'ils signent. Elle décrit ce que ces outils changent dans les études, ce qu'ils ne doivent jamais faire, et un parcours de deux jours en quatre demi-journées, complété par un retour à distance. Les séances se tiennent en intra, en inter, à distance ou en formule hybride ; le prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Technique et terrain',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : programme, réglementation et pièces écrites, l'assistant d'IA comme lecteur rapide et rédacteur sous contrôle",
            'duree'  => '3 h 30',
            'points' => [
                "Faire résumer par un assistant d'IA le programme d'un maître d'ouvrage, puis comparer sa synthèse au texte : surfaces, effectifs, contraintes, exclusions, ce qu'il a oublié ou ajouté.",
                "Interroger un règlement d'urbanisme, une norme ou un guide technique avec un assistant, et exiger pour chaque réponse la référence exacte de l'article, à vérifier sur la source officielle.",
                "Préparer le squelette d'une notice descriptive ou d'un cahier des clauses techniques à partir des pièces d'un projet comparable du cabinet, et marquer tout ce qui reste à décider.",
                "Ce qui ne sort jamais du cabinet : le nom du client, l'adresse du terrain d'un particulier, les plans d'un bâtiment sensible, les prix des entreprises reçus en consultation.",
                "Les comptes professionnels administrés par le cabinet, et la différence entre un assistant grand public et un espace d'entreprise dont l'éditeur s'engage par contrat.",
                "Exercice : à partir d'un programme anonymisé de quatre pages, produire en une heure une synthèse vérifiée et la liste des questions à poser au maître d'ouvrage.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : plans, maquette numérique et versions, savoir à tout moment quel document fait foi",
            'duree'  => '3 h 30',
            'points' => [
                "Une règle de nommage commune : projet, phase, lot, type de document, numéro, indice de révision ; et un registre des documents émis, tenu à chaque diffusion.",
                "Les états d'un document : en cours chez son auteur, partagé pour coordination, diffusé pour approbation, bon pour exécution, archivé ; qui a le droit de faire passer un plan d'un état à l'autre.",
                "Échanger une maquette au format ouvert IFC, signaler un conflit entre structure et réseaux avec une remarque au format BCF, puis vérifier que la remarque est levée dans l'indice suivant.",
                "Les images produites par un générateur d'IA : esquisse d'intention, oui ; image présentée comme le projet réel au client, au jury ou au service instructeur, non.",
                "Les plans qui circulent sur WhatsApp ou par courriel : comment empêcher qu'un indice périmé parte vers une entreprise ou un service instructeur.",
                "Exercice : une semaine de coordination simulée, douze fichiers aux noms incohérents à reclasser, et le registre des documents à reconstituer.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : notes de calcul, hypothèses et vérifications, ce que l'outil calcule et ce que l'ingénieur justifie",
            'duree'  => '3 h 30',
            'points' => [
                "La page de garde d'une note de calcul qu'on peut relire dans cinq ans : normes et annexes nationales appliquées, logiciel et version, hypothèses de charges, de sol et de matériaux, auteur, vérificateur.",
                "Construire un tableur de prédimensionnement protégé, avec unités affichées, cellules de saisie distinctes des formules et un contrôle par ordre de grandeur.",
                "Demander à un assistant d'IA de relire une note pour y repérer une incohérence d'unités, une hypothèse oubliée ou une contradiction avec les plans, sans lui demander le résultat.",
                "Pourquoi un assistant d'IA cite parfois un article de norme qui n'existe pas, ou mélange deux générations d'Eurocodes, et comment le vérifier.",
                "Lire une série de résultats de calcul comme un tableau de données : valeurs extrêmes, écarts entre deux variantes, graphiques qui trompent.",
                "Exercice : une note de calcul simulée contenant trois erreurs volontaires, à retrouver en binôme architecte et ingénieur.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : suivi de projet, temps passé, réunions de coordination et candidatures, puis évaluation",
            'duree'  => '3 h 30',
            'points' => [
                "Le tableau de bord d'un projet : phases de la mission, livrables attendus, dates de remise, temps passé par phase comparé aux honoraires, dans le tableur, Odoo ou Dolibarr.",
                "Transformer les notes d'une réunion de coordination en compte rendu avec un assistant, puis relire tout ce qui attribue une action, un délai ou une responsabilité à un intervenant.",
                "Monter un dossier de candidature à une consultation de maîtrise d'œuvre : références vérifiables, curriculum des intervenants, moyens, note méthodologique relue.",
                "Les fichiers qui trahissent un candidat dans un concours anonyme : nom de l'auteur dans les propriétés d'un PDF, calque oublié, cartouche du cabinet sur une vue.",
                "Les règles écrites du cabinet sur l'IA : outils autorisés, données interdites, mentions à porter, relecteur désigné.",
                "Évaluation : chaque participant présente l'état d'un projet simulé, son registre des documents et sa note de calcul relue, comme en réunion de lancement de phase.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, à distance : retour sur les projets du cabinet",
            'duree'  => '2 heures',
            'points' => [
                "Les règles de nommage et le registre des documents réellement tenus depuis la formation.",
                "Une pièce écrite ou une note de calcul préparée avec un assistant d'IA, relue ensemble.",
                "Les règles d'usage de l'IA à préciser après un mois de pratique sur de vrais projets.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Architectes, ingénieurs, chefs de projet, projeteurs et modeleurs BIM, économistes, secrétariats techniques des cabinets et bureaux d'études"],
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, puis un retour à distance de deux heures environ"],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 participants au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent pour un cabinet d'architecture ou un bureau d'études ?",
            'paragraphes' => [
                "Un projet d'architecture ou d'ingénierie est d'abord une longue suite de documents. Un programme arrive, puis un relevé, une esquisse, des avant-projets, des notes de calcul, des plans de structure et de réseaux, des pièces écrites, des comptes rendus de coordination, des visas, et chaque document existe en plusieurs indices. Le temps d'un cabinet part autant dans la recherche de la bonne version, la relecture d'un règlement et la mise en forme d'une notice que dans la conception elle-même. C'est cette part que l'intelligence artificielle, la digitalisation et l'automatisation transforment, à condition de commencer par les habitudes de l'agence plutôt que par un logiciel de plus.",
                "Le premier changement touche la lecture et l'écriture. Un assistant d'IA résume un programme de quarante pages, retrouve dans un règlement d'urbanisme la règle de prospect applicable, prépare la trame d'un cahier des clauses techniques, traduit la fiche d'un produit importé ou reformule une note méthodologique. Selon le rapport du Royal Institute of British Architects publié le 22 juillet 2026, 74 % des cabinets britanniques interrogés utilisaient déjà l'IA en 2026, contre 41 % en 2024. Le même assistant invente pourtant un article de norme avec aplomb : la formation apprend à lui demander ses références et à les vérifier à la source.",
                "Le deuxième changement concerne la maquette numérique. La série de normes ISO 19650 décrit depuis décembre 2018 la gestion de l'information d'un ouvrage au moyen du BIM, y compris l'échange, l'enregistrement et le contrôle des versions. Le format ouvert IFC, normalisé par l'ISO 16739-1 dont l'édition de mars 2024 couvre aussi les ponts, les routes et les voies ferrées, permet à l'architecte, à l'ingénieur structure et au bureau d'études fluides de travailler sur des logiciels différents. Encore faut-il que chacun sache quel fichier fait foi, qui l'a modifié et quand.",
                "Le troisième changement porte sur la conduite du projet : temps passé par phase, honoraires consommés, planning des remises, coordination avec les autres intervenants, candidatures aux consultations de maîtrise d'œuvre. Un tableur bien tenu ou un logiciel de gestion comme Odoo ou Dolibarr montre tôt qu'une phase dépasse son budget, au lieu de le découvrir à la facture finale. Richard SALANON n'est ni architecte ni ingénieur : il forme à l'usage des outils, sur les projets, les gabarits et les logiciels que le cabinet emploie déjà, et laisse aux concepteurs tout ce qui relève de l'art de bâtir.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "De l'esquisse à la réception, quelles tâches confier à un outil, et lesquelles restent à l'architecte ou à l'ingénieur ?",
            'legende' => "Partage proposé en ouverture de formation, puis ajusté avec les associés de chaque cabinet. La dernière colonne indique le contrôle à prévoir dès qu'un outil intervient.",
            'entetes' => ['Moment du projet', "Ce que l'outil prépare", "Ce que garde l'architecte ou l'ingénieur", 'Contrôle à prévoir'],
            'lignes'  => [
                ['Analyse du programme et du site', "Synthèse du programme, tableau des surfaces, liste des contraintes citées dans les pièces reçues", "La lecture critique du programme et les questions au maître d'ouvrage", "Chaque chiffre de la synthèse retrouvé dans le document d'origine"],
                ["Règles d'urbanisme et normes", "Recherche des articles applicables, comparaison de deux versions d'un règlement", "L'interprétation d'une règle ambiguë et le choix de consulter le service instructeur", "Référence exacte de chaque article, vérifiée sur le texte officiel en vigueur"],
                ['Esquisse et images', "Variantes rapides, images d'ambiance, études d'ensoleillement ou de volumes", "Le parti architectural, la composition, l'insertion dans le site", "Aucune image générée présentée comme le projet sans le dire"],
                ['Avant-projets et maquette', "Modélisation répétitive, nomenclatures, quantités, détection de conflits entre lots", "Les arbitrages entre lots et l'acceptation d'une solution technique", "Un modèle de référence par lot, avec son responsable nommé"],
                ['Notes de calcul', "Calcul aux éléments finis, tableaux de vérification, mise en page de la note", "Les hypothèses, le modèle retenu, la lecture des résultats et la signature", "Relecture par un second ingénieur et contrôle par ordre de grandeur"],
                ['Pièces écrites', "Trame du CCTP, notice descriptive, bordereau à partir de projets antérieurs", "Les prescriptions propres au projet et les choix de matériaux", "Toute clause reprise d'un ancien projet relue pour le projet en cours"],
                ['Coordination', "Comptes rendus, listes d'actions, remarques sur la maquette, relances", "Ce qui est écrit sur les responsabilités et les délais de chacun", "Compte rendu relu par le chef de projet avant diffusion"],
                ["Visa des études d'exécution", "Comparaison entre plans d'exécution reçus et plans du projet, liste des écarts", "L'avis donné et les réserves formulées", "Aucun visa émis sans examen humain des écarts signalés"],
                ['Candidatures et concours', "Mise à jour des références, curriculum des intervenants, mise en page du dossier", "Le choix de candidater, l'équipe proposée, le contenu de la note méthodologique", "Références vérifiables et fichiers nettoyés avant un dépôt anonyme"],
                ['Suivi des honoraires', "Temps passé par phase, alertes de dépassement, échéancier de facturation", "La renégociation d'une mission qui change de périmètre", "Pointage hebdomadaire, jamais reconstitué de mémoire en fin de phase"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ne doit jamais faire un outil numérique ou un assistant d'IA dans un cabinet d'architecture ou un bureau d'études, et quels textes le disent ?",
            'intro' => "Les textes cités ont été lus dans leur version publiée par les autorités qui les ont adoptés. Ils sont présentés pour ce qu'ils demandent aux professionnels ; leur application à un projet précis relève de l'Ordre, de l'assureur ou du conseil juridique du cabinet, pas du formateur.",
            'items' => [
                ['titre' => "Faire signer un projet que personne n'a réellement établi", 'texte' => "En France, l'article 5 du code de déontologie des architectes interdit à l'architecte qui n'a pas établi un projet d'y apposer sa signature et proscrit la signature de complaisance. Un plan produit en grande partie par un générateur ne change rien à cette règle : celui qui signe doit avoir conçu, contrôlé et assumé chaque pièce. L'article 3 de la loi n° 77-2 du 3 janvier 1977 sur l'architecture rend d'ailleurs obligatoire le recours à un architecte pour établir le projet architectural d'une demande de permis de construire, dans les cas que la loi prévoit."],
                ['titre' => "Confier les pièces d'un client à un service d'IA sans garantie", 'texte' => "Depuis le décret n° 2026-568 du 26 juin 2026, entré en vigueur le 1er juillet 2026, l'article 14 du même code énonce simplement que l'architecte est tenu au secret dans l'exercice de son activité et que tout manquement est fautif. Un programme confidentiel, les plans d'une banque ou d'une maison particulière collés dans un assistant grand public qui peut réutiliser les données ne respectent pas cette exigence. La règle enseignée : compte d'entreprise administré, données anonymisées, documents sensibles hors de tout service d'IA."],
                ['titre' => "Laisser croire qu'un logiciel porte la responsabilité d'un ouvrage", 'texte' => "L'article 1792-1 du code civil répute constructeur de l'ouvrage tout architecte, entrepreneur, technicien ou autre personne liée au maître de l'ouvrage par un contrat de louage d'ouvrage. L'article L241-1 du code des assurances impose à toute personne dont la responsabilité décennale peut être engagée d'être assurée, et l'article 16 de la loi de 1977 exige que l'architecte soit couvert par une assurance. Aucun éditeur de logiciel ni de modèle d'IA ne figure dans cette chaîne : une erreur de calcul sortie d'un outil reste celle du bureau d'études qui l'a remise."],
                ['titre' => "Ignorer les règles de la profession dans l'espace de l'UEMOA", 'texte' => "La directive n° 01/2013/CM/UEMOA du 26 septembre 2013 harmonise la profession d'architecte dans les États membres. Son article 4 confie à l'architecte l'élaboration des pièces graphiques et écrites du projet ; son article 18 rend la profession incompatible avec toute fonction d'entrepreneur ou de fournisseur de matériaux et exige une intégrité qui ne laisse aucun doute ; son article 22 impose à l'architecte non ressortissant d'un État membre de s'associer à un architecte inscrit à l'Ordre d'un État membre. Chaque État fixe le seuil à partir duquel le recours à l'architecte est obligatoire (article 5)."],
                ['titre' => "Reproduire l'œuvre d'un autre parce qu'un générateur l'a proposée", 'texte' => "L'article L112-2 du code de la propriété intellectuelle range parmi les œuvres de l'esprit les œuvres d'architecture ainsi que les plans, croquis et ouvrages plastiques relatifs à l'architecture. Dans l'UEMOA, l'article 24 de la directive de 2013 place l'œuvre architecturale sous la protection de l'accord de Bangui instituant l'OAPI, et précise qu'aucune œuvre de l'architecte ne peut être reproduite sans son autorisation ni sans référence à son nom. Une façade obtenue en demandant à un générateur « dans le style » d'un confrère identifiable se vérifie avant de quitter l'agence."],
                ['titre' => "Lever l'anonymat d'un concours par négligence", 'texte' => "En France, l'article R2162-18 du code de la commande publique prévoit que le jury examine de manière anonyme les plans et projets des participants. Au Bénin, l'article 32 de la loi n° 2020-26 portant code des marchés publics prévoit la même règle lors de l'analyse des offres d'un concours. Un nom de cabinet laissé dans les propriétés d'un PDF, dans l'en-tête d'un fichier de maquette ou sur un calque masqué peut suffire à rompre cet anonymat. Le nettoyage des fichiers fait partie de la préparation du rendu."],
                ['titre' => "Stocker les données des clients sans mesures de sécurité", 'texte' => "Au Bénin, l'article 425 de la loi n° 2017-20 portant code du numérique rend confidentiel le traitement des données personnelles, et l'article 426 demande au responsable du traitement et à son sous-traitant des mesures techniques et organisationnelles adaptées : pseudonymisation, chiffrement, capacité à rétablir l'accès aux données après un incident, tests réguliers. Le même article exige que le contrat avec le sous-traitant consigne par écrit ces exigences. Une plateforme de partage de plans ou de maquettes peut devenir un sous-traitant au sens de ce texte dès qu'elle héberge l'adresse et le nom d'un client."],
                ['titre' => "Remettre une offre ou une note méthodologique qu'aucun associé n'a relue", 'texte' => "L'article 11 du code de déontologie des architectes exige une convention écrite préalable avec le client, qui définit la nature et l'étendue des missions. Une note méthodologique ou une proposition d'honoraires rédigée avec un assistant d'IA engage donc le cabinet sur des missions, des délais et des moyens. Un outil peut proposer une trame et vérifier que rien ne manque ; il ne décide pas du périmètre de la mission, de l'équipe ni du prix remis."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi une image produite par un générateur d'IA ne doit-elle jamais passer pour le projet ?",
            'texte' => "Parce qu'elle montre ce que le modèle sait dessiner, pas ce que le cabinet sait construire. Une perspective générée ignore l'épaisseur réelle des planchers, la trame de la structure, les gaines, la réglementation incendie et le budget. Présentée à un client particulier, elle fixe une attente que le projet ne tiendra pas ; remise à un jury ou jointe à un dossier administratif, elle décrit un ouvrage qui n'existe pas. Le Royal Institute of British Architects relevait en juin 2025 que 67 % des architectes interrogés craignaient que l'IA augmente le risque d'imitation de leur travail. La formation apprend à réserver ces images à l'intention, à les signaler comme telles et à produire les vues du projet depuis la maquette.",
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans une agence d'architecture ou un bureau d'études, de Cotonou à Bruxelles ?",
            'items' => [
                ['secteur' => "Cabinet d'architecture de six personnes, à Cotonou, sur des marchés publics", 'probleme' => "Chaque avis à manifestation d'intérêt mobilise deux personnes pendant une semaine pour retrouver les attestations de bonne exécution, les curriculum à jour et les photos des références ; un dossier a été écarté pour une pièce manquante.", 'solution' => "Une bibliothèque des références tenue dans un tableur partagé, avec pour chaque projet le maître d'ouvrage, le montant, la mission, l'attestation numérisée et les photos libres de droits, un curriculum par intervenant mis à jour chaque trimestre et une liste de contrôle des pièces cochée par une seconde personne."],
                ['secteur' => "Bureau d'études structure, à Abidjan, qui travaille pour plusieurs architectes", 'probleme' => "Un plan de ferraillage d'indice B est parti sur le chantier alors que l'indice D existait ; les plans circulaient par messagerie et chacun gardait sa copie.", 'solution' => "Une règle de nommage avec indice obligatoire, un dossier partagé où seul le dernier indice diffusé figure dans le répertoire « bon pour exécution », un registre des documents envoyé avec chaque diffusion et un message type qui renvoie vers le lien plutôt que d'attacher le fichier."],
                ['secteur' => "Agence d'architecture, à Dakar, avec des clients installés à l'étranger", 'probleme' => "Les clients reçoivent des images d'ambiance très séduisantes produites avec un générateur, puis contestent le projet chiffré, plus sobre, et retardent la validation de l'avant-projet.", 'solution' => "Des images générées réservées aux planches d'intention, marquées comme telles, des vues tirées de la maquette dès l'avant-projet sommaire, et un compte rendu de validation de phase signé par le client avant de lancer la suivante."],
                ['secteur' => "Bureau d'études voirie et réseaux, à Lomé", 'probleme' => "Les levés topographiques, les profils en long et les notes hydrauliques sont refaits à chaque changement d'implantation, et personne ne sait plus quelles hypothèses de pluie ont servi au dimensionnement des caniveaux.", 'solution' => "Une page de garde normalisée pour chaque note de calcul, avec la source des données de pluie, la version du logiciel, l'auteur et le vérificateur, et un tableur de contrôle qui recalcule trois sections à la main pour chaque variante."],
                ['secteur' => "Maîtrise d'œuvre groupée, à Ouagadougou, architecte et ingénieurs de trois structures", 'probleme' => "Les réunions de coordination se terminent sans compte rendu commun ; chaque structure note ce qui la concerne, et les conflits entre gaines et poutres se découvrent au chantier.", 'solution' => "Un compte rendu préparé à partir des notes vocales avec un assistant d'IA, relu par le chef de projet et diffusé sous quarante-huit heures, des remarques de coordination échangées au format BCF sur la maquette, et une liste d'actions suivie dans un outil partagé par les trois structures."],
                ['secteur' => "Agence d'architecture de douze personnes, à Bruxelles", 'probleme' => "Les collaborateurs utilisent trois assistants d'IA différents sur leurs comptes personnels ; un concours approche, et l'agence ignore ce qui a été envoyé à ces services.", 'solution' => "Une charte d'une page validée par les associés, un seul espace d'IA d'entreprise administré par l'agence, la liste des données interdites, une mention des images générées dans les rendus et une vérification de l'anonymat des fichiers avant chaque dépôt."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils travaillent les architectes et les ingénieurs, et que faut-il en savoir avant de s'y former ?",
            'legende' => "Informations lues le 5 octobre 2026 sur les pages des organismes de normalisation, des éditeurs et des administrations. Les licences restent au nom du cabinet ; la formation s'appuie sur les logiciels déjà installés et n'en impose aucun.",
            'entetes' => ['Outil ou format', "Usage dans l'agence ou le bureau d'études", 'Point à connaître', 'Formation liée'],
            'lignes'  => [
                ['Logiciels de dessin et de maquette (AutoCAD, Revit, ArchiCAD, Allplan, SketchUp)', "Esquisses, plans, maquette numérique, nomenclatures, quantités", "La formation porte sur l'organisation des fichiers, des versions et des échanges, pas sur la manipulation du logiciel, qui relève de l'éditeur ou d'un spécialiste", '<a href="/formations/outils-collaboratifs">Outils collaboratifs</a>'],
                ['Format IFC', "Échanger la maquette entre architecte, structure, fluides et économiste, quel que soit le logiciel", "Normalisé par l'ISO 16739-1 ; l'édition 2 de mars 2024 étend le schéma aux ponts, routes, voies ferrées, voies navigables et installations portuaires", '<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>'],
                ['Format BCF', "Signaler un conflit ou une question directement sur une vue de la maquette, et suivre sa levée", "Standard ouvert de buildingSMART International ; un fichier BCF peut faire l'aller-retour entre logiciels tant qu'une seule copie circule", '<a href="/formations/outils-collaboratifs">Outils collaboratifs</a>'],
                ['Logiciels de calcul (structure, hydraulique, thermique)', "Notes de calcul, vérifications réglementaires, variantes", "Selon le Centre commun de recherche de la Commission européenne, les Eurocodes de deuxième génération doivent être transposés en normes nationales au plus tard le 30 septembre 2027, et les normes nationales contraires retirées le 30 mars 2028", '<a href="/formations/data-literacy">Décider avec les données</a>'],
                ['Espaces de stockage partagé (Google Drive, OneDrive, SharePoint, plateformes de projet)', "Dossiers par projet et par phase, diffusion aux intervenants, archives", "La norme ISO 19650-1 traite l'échange, l'enregistrement et le contrôle de version de l'information ; des droits par projet et des comptes retirés au départ d'un collaborateur", '<a href="/formations/microsoft-365-google-workspace">Microsoft 365 et Google Workspace avancés</a>'],
                ['Tableur (Excel, Google Sheets)', "Prédimensionnement, tableau des surfaces, temps passé, échéancier des honoraires", "Cellules de saisie séparées des formules, unités affichées, feuilles protégées et contrôle par ordre de grandeur", '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Odoo (Projet, Feuilles de temps) ou Dolibarr (Projets)', "Temps passé par projet et par phase, facturation des honoraires, suivi des tâches", "L'offre Standard d'Odoo coûte 19,90 euros par utilisateur et par mois en paiement annuel les douze premiers mois, puis 24,90 euros ; Dolibarr est un logiciel libre, hébergé par le cabinet ou par un prestataire", '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Outils de suivi (Trello, Notion, Asana, Teams)', "Listes d'actions issues des réunions de coordination, planning des remises", "Un seul outil partagé avec les autres intervenants, sinon chaque structure garde sa propre liste", '<a href="/formations/gestion-projet-agile">Gestion de projet IT agile</a>'],
                ["Assistants d'IA (ChatGPT, Claude, Gemini, Copilot)", "Synthèses de programmes, trames de pièces écrites, comptes rendus, traductions, relecture de notes", "Espace d'entreprise administré, aucune pièce confidentielle, références vérifiées à la source ; le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide à choisir", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['Recherche dans les archives du cabinet', "Retrouver un détail, une clause ou une note de calcul dans les projets passés", "Un assistant relié aux documents internes répond avec la source citée ; il n'indexe que les dossiers autorisés", '<a href="/formations/rag-chatbot-documents">RAG : chatbot sur vos documents internes</a>'],
                ['Permis de construire en ligne au Bénin', "Dépôt des pièces graphiques et écrites du projet", "Selon le portail du gouvernement (12 mars 2020), la demande se fait en ligne depuis le 11 mars 2020, avec un délai de 14 jours annoncé à Cotonou et un délai maximal ramené de 45 à 25 jours ; le dossier déposé doit correspondre au dernier indice validé", '<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Que fait-on concrètement à chacune des quatre demi-journées du parcours architectes et ingénieurs ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles demi-journées suivre selon le poste occupé dans l'agence ou le bureau d'études ?",
            'legende' => "Les demi-journées se suivent ensemble ou séparément. Ces choix sont des points de départ, arrêtés au premier échange avec les associés.",
            'entetes' => ['Poste', 'Séquences conseillées', 'Ce que la personne saura faire à la sortie'],
            'lignes'  => [
                ['Architecte associé ou gérant du bureau', 'Jour 1 matin, jour 2 après-midi', "Fixer les règles d'usage de l'IA, lire le temps passé par phase, décider des candidatures sur des données fiables"],
                ['Chef de projet', 'Les quatre', "Tenir le registre des documents, conduire la coordination, relire ce que produisent les outils avant toute diffusion"],
                ['Ingénieur structure, fluides ou voirie', 'Jour 1 après-midi, jour 2 matin', "Documenter ses hypothèses, faire relire une note de calcul par un assistant sans lui confier le résultat, échanger ses remarques sur la maquette"],
                ['Projeteur, dessinateur ou modeleur BIM', 'Jour 1 après-midi', "Nommer, indicer et diffuser les plans selon la règle commune, exporter et contrôler un fichier IFC"],
                ['Économiste de la construction', 'Jour 1 matin, jour 2 matin', "Préparer les trames de pièces écrites, extraire des quantités de la maquette et les rapprocher de l'estimation"],
                ['Secrétariat technique ou assistant de direction', 'Jour 1 matin, jour 2 après-midi', "Tenir la bibliothèque des références, monter un dossier de candidature complet, nettoyer les fichiers d'un rendu anonyme"],
                ['Jeune diplômé ou stagiaire', 'Jour 1 matin, jour 1 après-midi', "Utiliser un assistant d'IA dans les règles du cabinet et comprendre pourquoi chaque version compte"],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la formation se prépare-t-elle à partir des projets du cabinet ?",
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => "Vous décrivez le cabinet : architecture, ingénierie ou les deux, taille de l'équipe, part des marchés publics et privés, logiciels installés, usage actuel de l'IA, et ce qui vous fait perdre le plus de temps. Ce premier échange est gratuit, comme le cadrage et le devis qui suivent."],
                ['titre' => 'Deux projets supports', 'duree' => 'Deux semaines avant', 'texte' => "On choisit un projet livré et un projet en cours. Pour chacun, le cabinet rassemble un programme, quelques plans à plusieurs indices, une note de calcul, un compte rendu de coordination et, si possible, un dossier de candidature. Les exercices partent de ces pièces."],
                ['titre' => 'Anonymisation', 'duree' => 'Une semaine avant', 'texte' => "Le cabinet retire lui-même le nom des clients, l'adresse des terrains de particuliers et les données des bâtiments sensibles. Le formateur ne reçoit aucun identifiant de plateforme publique, de portail administratif ni de licence."],
                ['titre' => 'Règles fixées par les associés', 'duree' => 'Avant la session', 'texte' => "Outils d'IA autorisés, données interdites, règle de nommage, relecteur des notes de calcul, mention des images générées : ces règles sont arrêtées par les associés, puis travaillées et éprouvées en séance."],
                ['titre' => 'Animation', 'duree' => 'Demi-journées de 3 h 30', 'texte' => "En salle, sur les postes et les logiciels des participants. Les architectes et les ingénieurs travaillent ensemble sur les exercices de coordination, et séparément quand le sujet le demande."],
                ['titre' => 'Supports et suivi', 'duree' => 'En fin de session, puis un mois après', 'texte' => "Règle de nommage, modèle de registre des documents, page de garde de note de calcul, charte d'usage de l'IA, liste de contrôle d'un dossier de candidature, attestation nominative ; puis une séance à distance de deux heures sur les projets réels."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelle formule choisir pour une agence ou un bureau d'études, selon sa taille et son organisation ?",
            'legende' => "Les formules se combinent : une séance avec les associés, puis des demi-journées par poste, en salle ou à distance.",
            'entetes' => ['Formule', 'Durée', 'Participants', 'Pour quel cabinet'],
            'lignes'  => [
                ['Séance avec les associés', 'Deux heures', 'Associés, chef de projet principal', "Écrire la charte d'usage de l'IA et la règle de versions avant de former l'équipe"],
                ['Parcours complet en intra', '2 jours en 4 demi-journées', '10 personnes au plus', "Agence ou bureau d'études qui veut une méthode commune entre conception et calcul"],
                ['Demi-journée isolée', '3 h 30', '4 à 10 personnes', "Projeteurs avant un changement de règle de nommage, secrétariat avant une saison de candidatures"],
                ['Session inter', '1 ou 2 jours', 'Une à trois personnes par structure', "Architectes et ingénieurs indépendants ; les exercices portent sur des projets fictifs"],
                ['À distance', 'Séances de 2 heures', '8 personnes au plus', "Équipes réparties entre plusieurs villes ou plusieurs pays, ou maîtrise d'œuvre groupée"],
                ['Hybride', 'Une demi-journée en salle, puis séances à distance', '10 personnes au plus', "Prise en main en présentiel, puis application aux projets de la semaine"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Quel budget prévoir pour former une agence ou un bureau d'études, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est affiché pour les formations : chaque formule est chiffrée après le premier échange, dans un devis détaillé. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les licences des logiciels de conception et de calcul, les abonnements aux assistants d'IA et aux plateformes de partage restent payés par le cabinet à leurs éditeurs.",
            'items'      => [
                ['offre' => 'Séance avec les associés', 'prix' => 'Sur devis', 'inclus' => ['Deux heures de travail sur les règles du cabinet', "Charte d'usage de l'IA et règle de versions rédigées", 'Choix des demi-journées utiles à chaque poste']],
                ['offre' => 'Demi-journée ciblée', 'prix' => 'Sur devis', 'inclus' => ['Pièces écrites, versions et maquette, notes de calcul, ou suivi et candidatures', 'Exercices sur vos projets supports', 'Modèles modifiables et attestation']],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Registre des documents, page de garde de note de calcul et tableau de suivi construits en séance', 'Évaluation sur un projet simulé', 'Retour à distance un mois après']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes.",
                "Les demi-journées retenues, et la séparation ou non entre architectes et ingénieurs.",
                "Les outils couverts : tableur, Odoo, Dolibarr, plateforme de partage, assistants d'IA en place.",
                "Le temps de préparation à partir des deux projets supports.",
                "Le lieu : vos locaux, une autre ville, un autre pays, ou la distance.",
                "La langue des séances et des supports, français ou anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation d'un cabinet d'architecture ou d'un bureau d'études, en Afrique francophone ou en Europe ?",
            'paragraphes' => [
                "Dans la plupart des cas, le cabinet règle la formation sur son budget. Un fonds de formation professionnelle peut en prendre une partie en charge selon le pays, les cotisations versées par la structure, sa taille et parfois le statut du formateur. Aucune prise en charge n'est promise ici : le cabinet transmet le programme et le devis au fonds concerné, attend sa réponse écrite, puis fixe les dates.",
                "En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">plan de formation du FDFP</a> est ouvert aux entreprises à jour de la taxe d'apprentissage et de la taxe additionnelle à la formation continue. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> dispose d'un guichet pour la formation des salariés. Les conditions qui touchent au prestataire et le reste à charge se vérifient auprès de chaque fonds, au cas par cas.",
                "En France, les entreprises d'architecture relèvent de l'<a href=\"https://www.opcoep.fr/branches-professionnelles\">Opco EP</a>, et les bureaux d'études techniques et cabinets d'ingénieurs-conseils de l'<a href=\"https://www.opco-atlas.fr/atlas/bureaux-etudes-techniques-cabinet-ingenieurs-societes-de-conseil.html\">Opco Atlas</a>. France Compétences rappelle que, depuis le 1er janvier 2022, les fonds publics et mutualisés ne financent que des prestataires certifiés Qualiopi ; Richard SALANON ne l'est pas. Sauf réponse écrite contraire de l'opérateur, le cabinet finance donc la session lui-même. Programme, feuilles de présence et attestations sont fournis dans tous les cas.",
                "L'Ordre des architectes indique que l'obligation de formation continue est de 20 heures par an, contrôlée sur une période de trois ans, soit 60 heures. Savoir si une session donnée peut être déclarée à ce titre, et dans quelle catégorie, relève de l'Ordre : l'architecte le vérifie avant de s'inscrire. Dans l'Union européenne, ces mêmes pièces documentent l'effort de maîtrise de l'IA que l'article 4 du règlement européen sur l'IA attend, depuis le 2 février 2025, des structures qui utilisent ces systèmes.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Plans, maquettes et notes de calcul : comment garder la trace de la version qui fait foi ?",
            'paragraphes' => [
                "Dans un litige comme dans une réunion de coordination, la première question est presque toujours la même : quel document la personne avait-elle sous les yeux, à quelle date, et était-il diffusé pour exécution ? Un cabinet qui répond en fouillant les courriels et les conversations perd une demi-journée et parfois sa position. La réponse tient en trois outils simples : une règle de nommage avec indice de révision, un registre des documents émis tenu à chaque diffusion, et un espace partagé où seul le dernier indice validé se trouve dans le dossier destiné aux entreprises.",
                "La norme ISO 19650-1, publiée en décembre 2018 et confirmée par l'ISO en 2024, recommande un cadre de gestion de l'information qui couvre l'échange, l'enregistrement, le contrôle de version et l'organisation, pour tout le cycle de vie de l'ouvrage. Elle s'adapte, précise l'ISO, à des projets d'échelle et de complexité diverses. La formation n'en fait pas un cours de normalisation : elle en retient les gestes utiles à une agence de cinq personnes comme à un bureau d'études de cinquante, en distinguant ce qui est en cours, partagé, diffusé et archivé.",
                "Les marchés publics poussent dans le même sens. L'article 22, paragraphe 4, de la directive 2014/24/UE sur la passation des marchés publics permet aux États membres d'exiger, pour les marchés de travaux et les concours, des outils de modélisation électronique des données du bâtiment, à condition d'offrir d'autres moyens d'accès tant que ces outils ne sont pas communément disponibles. Un cabinet qui sait déjà produire, contrôler et indicer une maquette au format IFC n'aura pas à improviser le jour où un maître d'ouvrage l'exigera.",
                "Les notes de calcul demandent la même discipline. Le Centre commun de recherche de la Commission européenne fixe au 30 septembre 2027 la date à laquelle les Eurocodes de deuxième génération doivent être transposés en normes nationales, et au 30 mars 2028 le retrait des normes nationales contraires. Pendant cette transition, une note doit dire quelle génération et quelle annexe nationale elle applique, avec quel logiciel et dans quelle version. Un assistant d'IA qui mélange deux générations de textes produit une note fausse qui a l'air juste : la page de garde et la relecture par un second ingénieur restent le meilleur garde-fou.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Candidatures et concours de maîtrise d'œuvre : que peut apporter l'outil, et que fixent les textes ?",
            'paragraphes' => [
                "Répondre à une consultation de maîtrise d'œuvre, c'est d'abord rassembler vite des pièces exactes : références avec attestations, qualifications, curriculum des intervenants, moyens, note méthodologique. Au Bénin, l'article 36 de la loi n° 2020-26 portant code des marchés publics range la maîtrise d'œuvre parmi les prestations intellectuelles, attribuées sur une liste restreinte de cinq à huit candidats retenus après un avis à manifestation d'intérêt, avec au moins deux consultants nationaux quand ils remplissent les critères, et un délai de réception d'au moins dix jours calendaires. Le dossier se prépare donc avant l'avis, pas pendant.",
                "Le même article prévoit une enveloppe unique contenant deux enveloppes distinctes, la proposition technique et la proposition financière ; seules les offres techniquement qualifiées voient leur proposition financière ouverte. L'article 37 décrit les méthodes de sélection, dont la sélection au moindre coût, la sélection dans le cadre d'un budget déterminé et la sélection fondée sur la qualité et le coût. La qualité de la proposition technique conditionne tout le reste : c'est là qu'un assistant d'IA aide à structurer, à vérifier qu'aucun point des termes de référence n'est oublié et à relire, sans écrire à la place de l'équipe.",
                "En France, l'article R2172-2 du code de la commande publique impose aux acheteurs concernés, à partir des seuils de procédure formalisée, de négocier les marchés de maîtrise d'œuvre avec le ou les lauréats d'un concours restreint, sauf exceptions comme la réhabilitation d'ouvrages existants ou les ouvrages d'infrastructure. L'article R2172-4 accorde aux participants qui ont remis des prestations conformes une prime égale au prix estimé des études, avec un abattement de 20 % au plus. Pour une construction neuve de bâtiment, l'article R2431-4 décrit la mission de base, de l'esquisse à l'assistance lors de la réception.",
                "Dans l'UEMOA, l'article 23 de la directive n° 01/2013/CM/UEMOA définit le concours d'architecture comme la procédure par laquelle le maître d'ouvrage choisit un projet après mise en concurrence et avis d'un jury, laisse à chaque État le seuil qui le rend obligatoire, et demande que les deux tiers au moins du jury soient des architectes inscrits à l'Ordre. Dans tous ces cadres, le jury juge un projet qui doit rester anonyme et exact : les rendus, images comprises, décrivent ce que l'équipe propose réellement de construire.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs font les cabinets d'architecture et les bureaux d'études qui s'outillent sans méthode ?",
            'intro' => "La plupart tiennent à une même cause : l'outil arrive avant la règle. Un logiciel de plus ou un assistant d'IA adopté sans accord sur les versions, les données et la relecture accélère le désordre au lieu de le réduire.",
            'items' => [
                ['titre' => "Envoyer des fichiers au lieu de liens", 'texte' => "Un plan joint à un message vit sa propre vie dans la messagerie du destinataire, même après trois nouveaux indices. Envoyer un lien vers l'espace partagé, accompagné du registre des documents, garantit que chacun ouvre la dernière version diffusée."],
                ['titre' => "Laisser chacun choisir son assistant d'IA", 'texte' => "Trois collaborateurs, trois comptes personnels, trois politiques de réutilisation des données. Le cabinet choisit un espace d'entreprise, l'administre, et écrit sur une page ce qu'on peut y mettre et ce qui n'y entre jamais."],
                ['titre' => "Croire une référence réglementaire sans l'ouvrir", 'texte' => "Un assistant cite un article de règlement ou de norme avec un numéro précis, et l'article n'existe pas ou dit autre chose. Toute référence reprise dans une notice, une note de calcul ou un courrier au service instructeur se lit d'abord dans le texte officiel en vigueur."],
                ['titre' => "Reprendre un ancien CCTP sans le relire", 'texte' => "La trame d'un projet précédent fait gagner des jours, et elle importe aussi des matériaux, des normes ou des marques qui n'ont rien à faire dans le nouveau dossier. Chaque article repris est relu pour le projet en cours, et les clauses non vérifiées restent surlignées jusqu'à leur validation."],
                ['titre' => "Pointer les heures en fin de phase", 'texte' => "Les heures reconstituées de mémoire donnent une rentabilité de projet imaginaire, et le dépassement d'honoraires se découvre trop tard pour renégocier. Le temps se saisit chaque semaine, par projet et par phase, même dans un simple tableur."],
                ['titre' => "Montrer au client une image générée comme si c'était le projet", 'texte' => "Le client s'attache à une image que le projet chiffré ne peut pas tenir, et la validation de phase se transforme en négociation. Les images générées restent sur les planches d'intention, signalées comme telles, et les vues du projet sortent de la maquette."],
                ['titre' => "Oublier les métadonnées avant un rendu anonyme", 'texte' => "Nom du cabinet dans les propriétés des PDF, auteur dans l'en-tête du fichier de maquette, cartouche sur une vue exportée : l'anonymat se perd par un détail. Une liste de nettoyage des fichiers est passée par une seconde personne avant chaque dépôt."],
                ['titre' => "Acheter une plateforme BIM avant d'avoir une règle de versions", 'texte' => "L'abonnement démarre, les fichiers y sont déposés sans nommage ni états, et la plateforme reproduit le désordre du serveur précédent. La règle s'écrit et s'éprouve d'abord sur l'espace partagé existant ; la plateforme vient ensuite, quand le cabinet sait ce qu'il en attend."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés et datés un cabinet d'architecture ou un bureau d'études doit-il connaître ?",
            'items' => [
                ['valeur' => '74 %', 'libelle' => "Part des cabinets d'architecture britanniques interrogés qui utilisaient l'IA en 2026, contre 59 % en 2025 et 41 % en 2024 (rapport publié le 22 juillet 2026)", 'source' => 'Royal Institute of British Architects, rapport IA 2026', 'url' => 'https://www.riba.org/news/ai-adoption-reaches-tipping-point-across-uk-architecture/'],
                ['valeur' => '17 %', 'libelle' => "Part des répondants du même rapport qui estiment que leurs projets sont meilleurs grâce à l'IA, alors que 75 % des cabinets qui l'utilisent constatent des gains de productivité et que 61 % craignent qu'elle complique l'apprentissage des débutants", 'source' => 'Royal Institute of British Architects, rapport IA 2026', 'url' => 'https://www.riba.org/news/ai-adoption-reaches-tipping-point-across-uk-architecture/'],
                ['valeur' => '67 %', 'libelle' => "Part des architectes interrogés qui craignaient en 2025 que l'IA augmente le risque d'imitation de leur travail (rapport publié le 27 juin 2025)", 'source' => 'Royal Institute of British Architects, rapport IA 2025', 'url' => 'https://www.riba.org/news/second-riba-ai-report-shows-surge-in-usage-among-uk-architects/'],
                ['valeur' => '20 heures', 'libelle' => "Obligation annuelle de formation continue d'un architecte inscrit à l'Ordre en France, contrôlée sur trois ans, soit 60 heures par période", 'source' => 'Ordre des architectes, la formation continue', 'url' => 'https://www.architectes.org/faq/les-exercices-professionnels/la-formation-continue'],
                ['valeur' => '5 à 8', 'libelle' => "Nombre de candidats de la liste restreinte établie après un avis à manifestation d'intérêt pour une prestation intellectuelle au Bénin, maîtrise d'œuvre comprise (article 36 de la loi n° 2020-26)", 'source' => 'Secrétariat général du Gouvernement du Bénin', 'url' => 'https://sgg.gouv.bj/doc/loi-2020-26/'],
                ['valeur' => '20 %', 'libelle' => "Abattement maximal appliqué au prix estimé des études pour calculer la prime d'un concours de maîtrise d'œuvre en France (article R2172-4 du code de la commande publique)", 'source' => 'Légifrance, code de la commande publique', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000038327420'],
                ['valeur' => '30 mars 2028', 'libelle' => "Date limite de retrait des normes nationales contraires aux Eurocodes de deuxième génération, transposés en normes nationales au plus tard le 30 septembre 2027", 'source' => 'Commission européenne, Centre commun de recherche', 'url' => 'https://eurocodes.jrc.ec.europa.eu/second-generation-eurocodes'],
                ['valeur' => '24 mois', 'libelle' => "Durée du stage professionnel rémunéré exigé avant l'exercice de la profession d'architecte dans l'UEMOA (article 17 de la directive n° 01/2013/CM/UEMOA)", 'source' => 'UEMOA, recueil des textes sur la libre circulation', 'url' => 'https://e-docucenter.uemoa.int/sites/default/files/2024-08/Recueil_texte_libre_circulation_edocucenter_12.pdf'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour les architectes et les ingénieurs ?",
            'legende' => "Chaque fiche a son propre programme. Le parcours architectes et ingénieurs en reprend les gestes utiles aux études ; ces formations permettent d'aller plus loin sur un outil ou une méthode.",
            'entetes' => ['Formation', 'Apport pour le cabinet ou le bureau d\'études', 'Public prioritaire'],
            'lignes'  => [
                ['<a href="/formations/ia-en-entreprise">IA en entreprise : productivité des équipes</a>', "Usage quotidien des assistants sur les documents du cabinet : synthèses, rédaction, analyse", "Toute l'équipe, en commençant par les chefs de projet"],
                ['<a href="/formations/gestion-projet-agile">Gestion de projet IT agile</a>', "Mener un projet numérique du cabinet par itérations : plateforme de partage, outil de suivi, assistant interne", 'Associés, responsable des outils'],
                ['<a href="/formations/outils-collaboratifs">Outils collaboratifs : Notion, Trello, Asana, Teams</a>', "Listes d'actions de coordination, planning des remises, échanges avec les autres intervenants", 'Chefs de projet, secrétariat technique'],
                ['<a href="/formations/data-literacy">Décider avec les données</a>', "Lire des résultats de calcul, des tableaux de temps passé et des indicateurs sans se laisser tromper par un graphique", 'Ingénieurs, associés'],
                ['<a href="/formations/rag-chatbot-documents">RAG : chatbot sur vos documents internes</a>', "Interroger les archives du cabinet, détails, notes et pièces écrites, avec la source citée", 'Responsable des outils, chefs de projet'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Secret, données des clients, droits sur les images et les plans, obligations du règlement européen", 'Associés, toute personne qui utilise un assistant'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Fichiers lourds, électricité, connexion, langues : que change le contexte local pour un cabinet qui s'outille, en Afrique francophone ou en Europe ?",
            'paragraphes' => [
                "Une maquette numérique pèse vite plusieurs centaines de mégaoctets, et une planche de rendu autant. Dans beaucoup de villes d'Afrique francophone, la connexion d'un cabinet supporte mal la synchronisation permanente de tels fichiers, et une coupure d'électricité au milieu d'un enregistrement peut corrompre un modèle. La formation part de gestes adaptés : travail local avec synchronisation programmée, onduleur sur les postes de modélisation, sauvegarde quotidienne hors du poste, exports PDF et IFC allégés pour la diffusion, liens de téléchargement plutôt que pièces jointes.",
                "Les échanges avec les maîtres d'ouvrage et les entreprises passent souvent par WhatsApp, y compris pour envoyer des plans. L'application reste utile pour prévenir qu'un nouvel indice est disponible ; elle ne doit pas devenir l'endroit où l'indice vit. Pour les clients qui suivent leur projet depuis l'étranger, un point de phase illustré, envoyé à date fixe et relu par le chef de projet, remplace avantageusement une série de photos et de messages vocaux sans contexte.",
                "Les assistants d'IA traitent bien le français écrit et parlé ; leur qualité varie fortement dans les autres langues parlées sur les chantiers et dans les réunions, et se teste avant tout usage. Dans l'UEMOA, l'architecte qui exerce dans un autre État membre se soumet aux règles du pays d'accueil, et l'article 21 de la directive de 2013 prévoit que ce pays accepte, pour l'assurance professionnelle, les attestations délivrées dans les autres États membres, valables au moins trois mois.",
                "En Europe, la question est moins celle du réseau que celle de la densité des règles : secret professionnel, protection des données des clients, obligation de formation continue, maîtrise de l'IA exigée des utilisateurs professionnels, transition vers les Eurocodes de deuxième génération. Un cabinet qui travaille à la fois en Afrique et en Europe applique par défaut la règle la plus exigeante des deux pays concernés, et note par écrit le choix qu'il a fait.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre cabinet d'architecture ou votre bureau d'études avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des architectes et des ingénieurs à ces outils. Il ne conçoit aucun bâtiment, ne calcule aucune structure et ne signe aucun plan : il apporte la maîtrise des assistants d'IA, des tableurs, des espaces de travail partagés, des logiciels de gestion comme Odoo et Dolibarr et des automatisations, et il construit les exercices sur les programmes, les plans et les notes du cabinet. Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il travaille dans le numérique depuis " . $ans . " ans et indique avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes.",
                "Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il a travaillé dans " . count((array) fait('pays_travailles')) . " pays, dont le Bénin, la Côte d'Ivoire, le Sénégal, le Burkina Faso, la France, la Belgique, la Suisse et le Canada. Il n'est certifié par aucun éditeur et ne revend aucune licence. Les questions de conception, de calcul, de droit de la commande publique ou de déontologie soulevées en séance sont renvoyées aux associés, à l'Ordre ou au conseil du cabinet.",
                "Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. Quand la formation révèle un besoin d'outillage, comme un assistant interne relié aux archives du cabinet ou un suivi des temps à paramétrer, il relève d'une mission d'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a> ou de <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>. L'histoire de la <a href=\"/histoires/tsb-migration\">migration informatique de TSB</a> rappelle ce que coûte un basculement mal préparé. L'ensemble de l'offre est réuni dans le <a href=\"/formations/\">catalogue des formations</a>, notamment le domaine <a href=\"/formations/domaine/intelligence-artificielle\">intelligence artificielle</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire une équipe d'architectes ou d'ingénieurs ?",
            'texte' => "Un document porte toujours son indice et figure au registre, un plan se partage par un lien et non par une pièce jointe, une note de calcul dit quelles normes, quelles hypothèses et quel logiciel elle applique, une référence réglementaire se lit dans le texte officiel, une image générée reste une intention, un rendu anonyme se nettoie avant le dépôt, et aucune pièce confidentielle n'entre dans un assistant que le cabinet n'administre pas. L'outil cherche, trie, met en forme et rappelle ; l'architecte et l'ingénieur conçoivent, vérifient et signent.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre agence ou votre bureau d'études à l'IA et aux outils numériques des études ?",
            'texte'  => "Décrivez votre structure (architecture, ingénierie ou les deux), la taille de l'équipe, les logiciels installés, l'usage actuel de l'IA, les postes à former et la difficulté à régler en priorité : vous recevez une réponse sous 24 heures, puis un programme construit sur vos projets et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon cabinet'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il maîtriser le BIM pour suivre la formation ?", 'r' => "Non. La formation ne remplace pas l'apprentissage d'un logiciel de modélisation. Elle porte sur ce qui entoure la maquette : nommage, indices, échanges au format IFC, remarques au format BCF, diffusion. Un projeteur qui modélise déjà en tirera davantage, mais un architecte qui travaille encore en plans 2D suit sans difficulté."],
        ['q' => "Un assistant d'IA peut-il rédiger nos CCTP ou nos notices descriptives ?", 'r' => "Il peut proposer une trame, reprendre la structure d'un projet antérieur, vérifier qu'aucun lot n'est oublié et reformuler un article confus. Les prescriptions propres au projet, les choix de matériaux et les références normatives restent décidés et relus par l'architecte, l'ingénieur ou l'économiste qui en répond."],
        ['q' => "Peut-on confier une note de calcul à l'IA ?", 'r' => "Non pour le résultat, oui pour la relecture. Un assistant peut repérer une incohérence d'unités, une hypothèse absente ou une contradiction avec les plans. Le modèle de calcul, les hypothèses, la lecture des résultats et la signature appartiennent à l'ingénieur, qui en porte la responsabilité professionnelle."],
        ['q' => "Peut-on utiliser des images générées par l'IA dans un concours ou une présentation client ?", 'r' => "Comme images d'intention, signalées comme telles, oui. Comme représentation du projet, non : elles ignorent la structure, la réglementation et le budget. Dans un concours, elles doivent aussi respecter le règlement de la consultation et ne rien laisser paraître qui lève l'anonymat."],
        ['q' => "Nos programmes et nos plans sont confidentiels : comment utiliser l'IA sans les exposer ?", 'r' => "En choisissant un espace d'entreprise administré par le cabinet, dont l'éditeur s'engage par contrat sur l'usage des données, en anonymisant ce qui peut l'être et en gardant hors de tout service d'IA les pièces sensibles. En France, l'architecte est tenu au secret par l'article 14 de son code de déontologie ; au Bénin, la loi n° 2017-20 impose la confidentialité et la sécurité des données des clients."],
        ['q' => "Qui est responsable si un logiciel ou un assistant d'IA commet une erreur dans nos études ?", 'r' => "Le professionnel qui a remis l'étude. En France, le code civil répute constructeur l'architecte ou le technicien lié au maître de l'ouvrage, et le code des assurances impose l'assurance de la responsabilité décennale. L'outil ne figure dans aucune de ces chaînes de responsabilité ; d'où la relecture systématique enseignée en formation."],
        ['q' => "La formation compte-t-elle pour l'obligation de formation continue des architectes ?", 'r' => "En France, l'obligation est de 20 heures par an, contrôlée sur trois ans. La possibilité de déclarer une session et la catégorie retenue relèvent de l'Ordre des architectes : vérifiez-le avant l'inscription. Programme, feuilles de présence et attestation nominative sont fournis pour cette démarche."],
        ['q' => "Faut-il un logiciel de gestion de projet pour suivre les honoraires ?", 'r' => "Pas pour commencer. Un tableur qui croise le temps passé par phase et les honoraires de chaque phase suffit souvent dans une petite agence. Odoo ou Dolibarr prennent le relais quand plusieurs projets et plusieurs personnes pointent en même temps, ou quand le cabinet veut facturer directement à partir des phases."],
        ['q' => "Pouvez-vous nous aider à répondre à un avis à manifestation d'intérêt ?", 'r' => "La formation apprend à préparer le dossier : bibliothèque des références, curriculum à jour, liste de contrôle des pièces, note méthodologique relue. Elle ne rédige pas votre offre et ne décide ni de l'équipe proposée ni du prix ; ces choix restent ceux des associés."],
        ['q' => "Architectes et ingénieurs peuvent-ils suivre la formation ensemble ?", 'r' => "Oui, et c'est souvent le plus utile pour la journée consacrée aux versions et à la coordination. La demi-journée sur les notes de calcul peut se suivre séparément par les ingénieurs, et celle sur les pièces écrites par les architectes et les économistes."],
        ['q' => "Richard SALANON a-t-il déjà formé des architectes et des ingénieurs ?", 'r' => "Oui, Richard a déjà formé des architectes et des ingénieurs à l'usage des outils numériques et de l'IA. Il ne cite aucune structure formée, n'exerce ni l'architecture ni l'ingénierie, et renvoie les questions de conception, de calcul ou de déontologie aux personnes compétentes."],
        ['q' => "Combien coûte la formation, et comment la régler ?", 'r' => "Le prix est fixé sur devis, après un premier échange gratuit. Il dépend du nombre de participants, des demi-journées retenues, des outils couverts, du lieu et du format. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Que reçoivent les participants à la fin ?", 'r' => "Une règle de nommage, un modèle de registre des documents, une page de garde de note de calcul, une charte d'usage de l'IA, une liste de contrôle pour les candidatures et une attestation nominative. Ce n'est ni un diplôme, ni une certification, ni une qualification professionnelle."],
    ],

    'sources' => [
        ['titre' => "Légifrance, loi n° 77-2 du 3 janvier 1977 sur l'architecture (articles 3 et 16)", 'url' => 'https://www.legifrance.gouv.fr/loda/id/JORFTEXT000000522423', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de déontologie des architectes, titre II, devoirs professionnels (articles 4, 5, 11 et 14, version du 1er juillet 2026)", 'url' => 'https://www.legifrance.gouv.fr/codes/section_lc/LEGITEXT000006074232/LEGISCTA000006108696/', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, décret n° 2026-568 du 26 juin 2026 relatif au code de déontologie des architectes", 'url' => 'https://www.legifrance.gouv.fr/jorf/id/JORFTEXT000054341539', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code civil, article 1792-1 (personnes réputées constructeurs de l'ouvrage)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006443512', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code des assurances, article L241-1 (assurance de la responsabilité décennale)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000031010281', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de la propriété intellectuelle, article L112-2 (œuvres d'architecture, plans et croquis)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278875', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de la commande publique, marchés de maîtrise d'œuvre (articles R2172-1 à R2172-6)", 'url' => 'https://www.legifrance.gouv.fr/codes/section_lc/LEGITEXT000037701019/LEGISCTA000037724578/', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de la commande publique, article R2172-4 (prime des concours)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000038327420', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de la commande publique, article R2162-18 (examen anonyme des projets par le jury)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000037730321', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code de la commande publique, article R2431-4 (mission de base pour une construction neuve de bâtiment)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000037728187', 'date' => '2026-10-05'],
        ['titre' => "UEMOA, recueil des textes communautaires sur la libre circulation et le droit d'établissement : directive n° 01/2013/CM/UEMOA relative à l'harmonisation des règles régissant la profession d'architecte (articles 4, 5, 17, 18, 21, 22, 23 et 24)", 'url' => 'https://e-docucenter.uemoa.int/sites/default/files/2024-08/Recueil_texte_libre_circulation_edocucenter_12.pdf', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2020-26 du 29 septembre 2020 portant code des marchés publics (articles 32, 36 et 37)", 'url' => 'https://sgg.gouv.bj/doc/loi-2020-26/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 425 et 426)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "Gouvernement du Bénin, la dématérialisation du processus d'obtention du permis de construire (12 mars 2020)", 'url' => 'https://www.gouv.bj/article/547/amelioration-du-climat-des-affaires-au-benin-la-dematerialisation-du-processus-dobtention-du-permis-de-construire-desormais-une-realite/', 'date' => '2026-10-05'],
        ['titre' => "ISO, ISO 19650-1:2018, gestion de l'information par la modélisation des informations de la construction (BIM), concepts et principes", 'url' => 'https://www.iso.org/fr/standard/68078.html', 'date' => '2026-10-05'],
        ['titre' => "ISO, ISO 16739-1:2024, classes IFC pour le partage des données dans le secteur de la construction", 'url' => 'https://www.iso.org/fr/standard/84123.html', 'date' => '2026-10-05'],
        ['titre' => "buildingSMART International, BIM Collaboration Format (BCF)", 'url' => 'https://technical.buildingsmart.org/standards/bcf/', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, directive 2014/24/UE du 26 février 2014 sur la passation des marchés publics (article 22, paragraphe 4)", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32014L0024', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, Centre commun de recherche, Eurocodes de deuxième génération (dates de publication et de retrait)", 'url' => 'https://eurocodes.jrc.ec.europa.eu/second-generation-eurocodes', 'date' => '2026-10-05'],
        ['titre' => "Royal Institute of British Architects, rapport sur l'IA 2026 (22 juillet 2026)", 'url' => 'https://www.riba.org/news/ai-adoption-reaches-tipping-point-across-uk-architecture/', 'date' => '2026-10-05'],
        ['titre' => "Royal Institute of British Architects, deuxième rapport sur l'IA (27 juin 2025)", 'url' => 'https://www.riba.org/news/second-riba-ai-report-shows-surge-in-usage-among-uk-architects/', 'date' => '2026-10-05'],
        ['titre' => "Ordre des architectes, la formation continue (période triennale)", 'url' => 'https://www.architectes.org/faq/les-exercices-professionnels/la-formation-continue', 'date' => '2026-10-05'],
        ['titre' => "Opco EP, branches professionnelles (entreprises d'architecture)", 'url' => 'https://www.opcoep.fr/branches-professionnelles', 'date' => '2026-10-05'],
        ['titre' => "Opco Atlas, branche des bureaux d'études techniques, des cabinets d'ingénieurs-conseils et des sociétés de conseils", 'url' => 'https://www.opco-atlas.fr/atlas/bureaux-etudes-techniques-cabinet-ingenieurs-societes-de-conseil.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs (offres Standard et Personnalisé)", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'gestion-projet-agile', 'outils-collaboratifs', 'data-literacy', 'rag-chatbot-documents', 'ia-ethique-conformite'],
        'services'    => ['integration-ia-entreprise', 'digitalisation-d-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
