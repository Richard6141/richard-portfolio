<?php
// ============================================================
// data/formations/ia-processus-metier.php · Fiche formation « IA dans les
// processus métier : cartographier, automatiser, contrôler » (vague 1B,
// lot A, domaine ia-systemes-existants). Angle propre : les responsables
// métier (achats, finance, service client, RH, logistique) cartographient un
// processus, choisissent les étapes à confier à l'IA ou à l'automatisation et
// conçoivent le contrôle humain (validations, échantillons, traçabilité,
// indicateurs). Ne traite pas la technique d'intégration
// (integrer-ia-logiciels-existants), la digitalisation sans IA
// (digitalisation-processus), l'audit (ia-audit-controle), la charte
// (gouvernance-ia) ni la construction de flux n8n (n8n). Aucune ancienne page.
// Faits externes relevés le 05/10/2026 : Commission européenne (calendrier du
// règlement sur l'IA, article 14), CNIL (article 22 du RGPD), SGG du Bénin
// (loi n° 2017-20, articles 401 et 428, PDF officiel), OMPI (loi sénégalaise
// n° 2008-12, article 48), ISO (ISO/IEC 19510), OMG (BPMN 2.0.2), McKinsey
// (12 mars 2025, par recherche, site inaccessible en lecture directe),
// Microsoft, n8n, Make, draw.io, Bizagi, UIT, fonds de formation.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA dans les processus métier : cartographier un processus, choisir les étapes à confier à l'IA ou à l'automatisation, et garder le contrôle humain sur chaque décision",
    'title'   => "Formation IA dans les processus métier | Richard SALANON",
    'meta'    => "Formation pour responsables métier : cartographier un processus, choisir les étapes à confier à l'IA, prévoir validations, échantillons et indicateurs.",
    'en_bref' => "Cette formation apprend aux responsables métier (achats, finance, service client, ressources humaines, logistique) à cartographier un de leurs processus, à décider étape par étape ce qui peut être confié à une règle automatique, à l'IA ou à une personne, puis à organiser le contrôle humain : points de validation, contrôles par échantillon, journal des décisions et indicateurs. Elle dure deux jours, en quatre demi-journées, avec un point d'étape à distance en option. Elle se tient en intra, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',

    'domaine' => 'ia-systemes-existants',
    'forte'   => true,
    'duree'   => "2 jours en 4 demi-journées, point d'étape à distance en option",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : cartographier le processus tel qu'il se passe vraiment",
            'duree'  => '3 h 30',
            'points' => [
                "Choisir le processus de travail parmi ceux apportés par les participants : il doit être fréquent, coûteux en temps et connu de quelqu'un dans la salle.",
                "Fixer ses bornes : l'événement qui le déclenche, le résultat qui le termine, le client interne ou externe qui attend ce résultat.",
                "Dessiner les couloirs : une ligne par acteur (personne, service, logiciel, partenaire), avec cinq symboles seulement, empruntés à la notation BPMN.",
                "Relever pour chaque étape le volume mensuel, la durée de traitement, le temps d'attente, les outils ouverts et les ressaisies.",
                "Faire apparaître les exceptions : dossier incomplet, montant hors tolérance, client inconnu, pièce illisible, et la part de dossiers qu'elles représentent.",
                "Restitution croisée : chaque groupe présente sa carte à un autre, qui doit pouvoir la suivre sans explication orale.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : décider, étape par étape, ce qui revient à une règle, à l'IA ou à une personne",
            'duree'  => '3 h 30',
            'points' => [
                "Les sept verbes d'un processus : recevoir, lire, classer, rapprocher, rédiger, décider, agir ; ce que l'IA fait bien et mal pour chacun.",
                "La grille de décision en sept critères : volume, stabilité de la règle, qualité des données d'entrée, réversibilité, effet sur une personne, coût d'une erreur, facilité à la repérer.",
                "Le principe « la règle d'abord » : tout ce qu'une condition simple sait trancher n'est pas confié à un modèle de langage.",
                "Essai sur vingt dossiers réels anonymisés : l'assistant d'IA de l'entreprise lit ou classe, les participants comptent les réponses justes, fausses et douteuses.",
                "Dessin de la carte cible : chaque étape reçoit une couleur (humain, règle, IA sous contrôle) et une phrase de justification.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : concevoir le contrôle humain et le droit d'arrêter la machine",
            'duree'  => '3 h 30',
            'points' => [
                "Les quatre modes de contrôle : validation avant action, validation au-delà d'un seuil, contrôle par échantillon après coup, surveillance par indicateurs.",
                "Fixer les seuils : montant, catégorie de client, niveau de confiance déclaré, nouveauté du fournisseur ou du cas.",
                "Dimensionner un échantillon : combien de dossiers relire, tirés comment, à quel rythme, et quand augmenter ou réduire la relecture.",
                "Le biais d'automatisation : pourquoi un valideur finit par tout approuver, et les parades (cas pièges, rotation, motif obligatoire).",
                "Le droit de reprise et l'arrêt : qui peut suspendre l'étape d'IA, comment le travail continue à la main pendant ce temps.",
                "Exercice : chaque groupe écrit la fiche de contrôle de sa carte cible, puis un autre groupe tente de la prendre en défaut.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : tracer, mesurer et préparer la mise en service",
            'duree'  => '3 h 30',
            'points' => [
                "Le journal des décisions : les champs à conserver pour retrouver, des mois plus tard, qui a décidé quoi, sur quelle proposition de l'IA.",
                "Les indicateurs du processus : taux de correction, taux de reprise manuelle, délai de bout en bout, file d'attente, erreurs découvertes en aval.",
                "Le tableau de bord d'une page, construit dans le tableur de l'entreprise, avec un seuil d'alerte et un responsable par indicateur.",
                "La mise en service en marche parallèle : l'ancien et le nouveau circuit traitent les mêmes dossiers jusqu'à ce que les résultats concordent.",
                "Présentation de la carte cible, de la fiche de contrôle et du plan de mise en service à un membre de la direction, qui tranche.",
            ],
        ],
        [
            'titre'  => "Point d'étape à distance, en option : relire les premiers chiffres",
            'duree'  => '2 h',
            'points' => [
                "Lecture des indicateurs des premières semaines et des corrections relevées dans le journal.",
                "Ajustement des seuils et de la taille des échantillons selon les erreurs réellement observées.",
                "Décision sur les étapes suivantes à transformer, ou sur une étape à rendre à la main.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées ; point d'étape à distance en option"],
        ['l' => 'Public', 'v' => "Responsables achats, finance, service client, RH, logistique et leurs adjoints, 10 personnes au plus"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saurez-vous faire à la fin de la formation, et que laisse-t-elle à d'autres ?",
            'paragraphes' => [
                "La plupart des projets d'IA décevants ont le même point de départ : on a branché un outil sur un processus que personne n'avait dessiné. La formation prend l'ordre inverse. Pendant deux jours, chaque responsable travaille sur un processus de son propre service, le met à plat, puis décide avec méthode quelles étapes peuvent passer à une règle automatique, lesquelles peuvent être préparées par l'IA, et lesquelles doivent rester entre des mains humaines. Le résultat n'est pas une démonstration, mais un dossier de décision que la direction peut accepter ou refuser.",
                "Les objectifs se vérifient en fin de session. Chaque participant sait produire la carte d'un processus en couloirs, lisible par un collègue qui ne le connaît pas. Il sait chiffrer ce processus : volumes, durées, temps d'attente, part des exceptions. Il sait justifier en une phrase le sort de chaque étape à l'aide d'une grille commune. Il sait écrire une fiche de contrôle avec ses seuils, son échantillon et son droit d'arrêt. Il sait enfin définir les champs du journal des décisions et cinq indicateurs, avec la personne qui les lit.",
                "Plusieurs sujets voisins sont volontairement laissés de côté. La partie technique, c'est-à-dire les API des modèles, les connecteurs et la sécurité des échanges, relève de la formation <a href=\"/formations/integrer-ia-logiciels-existants\">Intégrer l'IA dans ses logiciels existants</a>. La construction pas à pas d'un flux automatique s'apprend dans la formation <a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a>. La charte d'usage, l'inventaire des outils et le comité qui les encadre sont l'objet de la formation <a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>.",
                "Deux autres fiches, présentées en bas de page, complètent le tableau : la digitalisation d'un processus sans intelligence artificielle, pour les services qui travaillent encore sur papier, et l'usage de l'IA par les auditeurs et les contrôleurs internes, qui vérifient les processus des autres. Ici, le point de vue est celui du responsable qui fait tourner le processus chaque jour et qui devra répondre de ses résultats. Si vous préférez confier la conception et la mise en place à un prestataire, la mission d'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a> s'en charge.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quelle préparation ?",
            'intro' => "Le public est celui qui possède un processus : il en connaît les exceptions, il en subit les retards et il signera la décision de le transformer. Aucune compétence technique n'est demandée ; une bonne connaissance du terrain l'est.",
            'items' => [
                ['titre' => 'Achats et approvisionnements', 'texte' => "Acheteurs, responsables des approvisionnements, gestionnaires des factures fournisseurs : demandes d'achat, comparaison des offres, rapprochement entre commande, réception et facture, relance des fournisseurs en retard."],
                ['titre' => 'Finance et administration', 'texte' => "Responsables administratifs et financiers, trésoriers, contrôleurs de gestion : notes de frais, encaissements, relances de clients, préparation des dossiers de paiement. Les gestes propres à la comptabilité OHADA sont traités dans la formation <a href=\"/formations/ia-comptables-syscohada\">IA pour comptables</a>."],
                ['titre' => 'Service client et relation usagers', 'texte' => "Responsables du service client, d'un centre d'appels ou d'un guichet : tri des demandes reçues par courriel, formulaire ou WhatsApp, réponses types, réclamations, escalade vers un spécialiste."],
                ['titre' => 'Ressources humaines', 'texte' => "Responsables RH et chargés de recrutement : réception des candidatures, questions des salariés, dossiers administratifs. C'est le métier où le contrôle humain est le plus encadré par la loi, et la formation y consacre des exercices propres."],
                ['titre' => 'Logistique et opérations', 'texte' => "Responsables d'entrepôt, de transport ou de transit : bons de livraison, preuves de livraison, documents de dédouanement, incidents de transport, réapprovisionnement."],
                ['titre' => 'Prérequis et niveau', 'texte' => "Être responsable ou adjoint d'un processus, ou le pratiquer chaque jour. Savoir utiliser un tableur et avoir déjà essayé un assistant d'IA aide, sans être exigé ; la formation <a href=\"/formations/ia-en-entreprise\">IA en entreprise</a> donne ces bases à ceux qui partent de zéro."],
                ['titre' => 'La préparation demandée', 'texte' => "Un processus choisi par participant ou par binôme, avec ses volumes approximatifs ; vingt à trente dossiers récents, anonymisés, qui serviront aux essais ; les modèles de documents utilisés ; l'accès à l'assistant d'IA déjà autorisé dans l'entreprise, s'il en existe un."],
                ['titre' => 'Le matériel', 'texte' => "Un ordinateur portable par binôme au moins, un tableur, un navigateur récent, et pour la matinée de cartographie du papier kraft, des notes adhésives et des feutres : un processus se dessine mieux au mur qu'à l'écran."],
            ],
        ],
        ['type' => 'programme', 'titre' => 'Quel est le programme, demi-journée par demi-journée ?'],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices fait-on sur le processus que vous apportez ?",
            'items' => [
                ['titre' => 'Le mur du processus', 'duree' => '1 h 30, jour 1', 'texte' => "Le binôme dessine son processus au mur, couloir par couloir, en partant d'un dossier réel suivi du début à la fin. On compte les passages de main en main ; au-delà de six, on cherche presque toujours une étape qui ne sert plus personne."],
                ['titre' => 'La chasse aux ressaisies', 'duree' => '45 minutes, jour 1', 'texte' => "Chaque information recopiée d'un outil à l'autre est marquée d'une pastille rouge. Ces pastilles désignent souvent les meilleures candidates à une règle automatique, bien avant l'IA : un numéro de commande ne se devine pas, il se transmet."],
                ['titre' => "L'épreuve des vingt dossiers", 'duree' => '1 h 15, jour 1', 'texte' => "Sur vingt dossiers anonymisés, l'assistant d'IA lit, classe ou résume. Les participants notent chaque réponse : juste, fausse, ou juste mais incomplète. Le taux obtenu sur leurs propres pièces remplace les promesses entendues ailleurs, et fixe le niveau de contrôle de départ."],
                ['titre' => 'La fiche de contrôle', 'duree' => '1 h 30, jour 2', 'texte' => "Pour chaque étape confiée à l'IA, le groupe écrit qui valide, à partir de quel seuil, combien de dossiers sont relus après coup, ce qui déclenche l'arrêt et qui reprend la main. La fiche tient sur une page."],
                ['titre' => "L'attaque de la fiche", 'duree' => '45 minutes, jour 2', 'texte' => "Un autre groupe reçoit la fiche et cherche le dossier qui passerait entre les mailles : un fournisseur nouveau sous le seuil, une demande urgente classée à tort, une candidature mal lue. Chaque trou trouvé est corrigé avant la fin de la journée."],
                ['titre' => 'Le dossier de décision', 'duree' => '1 heure, jour 2', 'texte' => "Carte actuelle, carte cible, fiche de contrôle, indicateurs et plan de mise en service sont réunis en un document de quelques pages, présenté à un membre de la direction présent pour la dernière heure."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment décider qu'une étape peut être confiée à l'IA ?",
            'legende' => "La grille de décision utilisée en formation. Chaque étape de la carte est notée sur les sept critères ; une seule réponse dans la colonne de droite suffit pour garder une validation humaine avant toute action.",
            'entetes' => ['Critère', 'Question posée', 'Favorable à une règle ou à l\'IA', 'Impose une décision humaine'],
            'lignes'  => [
                ['Volume', "Combien de fois l'étape se répète-t-elle par mois ?", "Des centaines de dossiers semblables", "Quelques cas par mois, tous différents"],
                ['Stabilité de la règle', "La manière de trancher est-elle écrite et identique pour tous ?", "Une règle stable, que deux agents appliquent de la même façon", "Une appréciation qui change selon la personne ou le moment"],
                ['Qualité des entrées', "Les documents arrivent-ils lisibles et complets ?", "Formulaires, fichiers structurés, PDF produits par un logiciel", "Photos floues, écritures manuscrites, pièces souvent manquantes"],
                ['Réversibilité', "Peut-on annuler l'action sans dommage ?", "Un classement, un brouillon, une étiquette", "Un paiement, un refus, un message envoyé au client"],
                ['Effet sur une personne', "Le résultat pèse-t-il sur un candidat, un salarié, un client, un usager ?", "Aucun effet individuel", "Un effet juridique ou important pour la personne"],
                ['Coût d\'une erreur', "Que coûte une erreur qui passe inaperçue ?", "Une minute de correction", "Une pénalité, un litige, un client perdu"],
                ['Détectabilité', "Une erreur serait-elle repérée plus loin dans le processus ?", "Oui, par un contrôle automatique ou l'étape suivante", "Non, elle sortirait de l'entreprise telle quelle"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi commencer par les règles avant de penser à l'IA ?",
            'paragraphes' => [
                "Dans un processus réel, beaucoup d'étapes que l'on croit « intelligentes » se résument à une condition. Une facture dont le montant correspond à la commande à 1 % près, dont le fournisseur est connu et dont la réception est enregistrée, n'a besoin d'aucun modèle de langage : une règle la laisse passer. Le modèle n'a d'utilité que là où la règle échoue, par exemple pour lire une facture arrivée en image, ou pour comprendre une demande client écrite librement.",
                "Ce partage n'est pas une question de goût. Une règle donne toujours la même réponse et se vérifie une fois pour toutes ; une étape d'IA peut se tromper sur un cas qu'elle traitait bien la veille, et doit donc être surveillée en permanence. Chaque étape confiée à l'IA ajoute ainsi une charge de contrôle. Le calcul enseigné en formation compare le temps gagné au temps de relecture, d'échantillonnage et de correction : quand le second mange le premier, l'étape reste manuelle, ou passe à une règle.",
                "L'exercice produit souvent une carte cible plus sobre que prévu : deux ou trois étapes confiées à l'IA, cinq ou six à des règles, le reste aux personnes. C'est une bonne nouvelle. Les participants y gagnent un processus plus rapide, dont le contrôle reste à la portée de l'équipe, et la direction un projet que l'on peut mesurer au bout de quelques semaines.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels modes de contrôle humain choisir, et pour quelles étapes ?",
            'legende' => "Les quatre modes travaillés le deuxième matin. Ils se combinent : une même étape peut être validée au-dessus d'un seuil et contrôlée par échantillon en dessous.",
            'entetes' => ['Mode de contrôle', 'Principe', 'Exemple', 'Point faible à surveiller'],
            'lignes'  => [
                ['Validation avant action', "Une personne approuve chaque proposition avant qu'elle produise un effet", "Tout refus de remboursement préparé par l'IA est relu et signé par le responsable du service client", "Le valideur submergé finit par approuver sans lire"],
                ['Validation au-delà d\'un seuil', "Seuls les dossiers qui dépassent un montant, une catégorie ou un niveau d'incertitude passent par une personne", "Les factures de plus d'un montant fixé, ou d'un fournisseur créé depuis moins de trois mois, attendent l'acheteur", "Le seuil mal placé laisse passer les petites erreurs répétées"],
                ['Contrôle par échantillon', "Une part des dossiers traités sans validation est relue après coup", "Chaque semaine, quinze demandes classées automatiquement sont tirées au hasard et vérifiées", "Un échantillon trop petit ou toujours tiré au même moment ne voit rien"],
                ['Surveillance par indicateurs', "On suit des taux et des délais, et l'on enquête quand ils dérivent", "Le taux de demandes reclassées par les agents passe de 3 % à 9 % en deux semaines", "Un indicateur que personne ne lit ne protège de rien"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment dimensionner un contrôle par échantillon sans y passer ses journées ?",
            'paragraphes' => [
                "La question revient dans tous les groupes : combien de dossiers faut-il relire ? La réponse enseignée part du risque, pas d'une règle universelle. Au démarrage, on relit beaucoup, souvent tous les dossiers pendant la marche parallèle, puis une part fixe chaque semaine. Si le taux d'erreur reste bas pendant plusieurs semaines consécutives, la part relue diminue. À la première erreur grave, elle remonte aussitôt à son niveau de départ, et l'on cherche la cause avant de redescendre.",
                "La manière de tirer compte autant que la quantité. Un tirage au hasard évite que le relecteur choisisse les dossiers faciles. Un tirage ciblé ajoute les cas à risque : nouveaux fournisseurs, montants ronds, clients qui se sont déjà plaints, demandes reçues la nuit. La formation fait construire les deux dans le tableur de l'entreprise, avec une colonne de tirage, une colonne de résultat et une colonne de motif quand le dossier est corrigé.",
                "Le relecteur doit enfin être quelqu'un d'autre que la personne qui a validé. Ce principe de séparation, bien connu des services financiers, vaut aussi pour l'IA : celui qui a laissé passer une proposition fausse ne la verra pas mieux une seconde fois. Dans une petite équipe, on alterne les rôles d'une semaine à l'autre. Les résultats de l'échantillon alimentent directement les indicateurs du tableau de bord.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que faut-il garder dans le journal des décisions pour assurer la traçabilité ?",
            'legende' => "Les champs minimaux d'un journal par dossier. Ils permettent de répondre, des mois plus tard, à un client, à un auditeur ou à un juge qui demande comment une décision a été prise.",
            'entetes' => ['Champ', 'Pourquoi le garder', 'Exemple'],
            'lignes'  => [
                ['Identifiant du dossier', "Relier la décision à la pièce d'origine", "Facture F-2026-0412 du fournisseur 118"],
                ['Date et heure de chaque étape', "Mesurer les délais et reconstituer l'ordre des événements", "Reçue le 6 à 9 h 12, validée le 6 à 15 h 40"],
                ['Proposition de l\'IA', "Savoir ce que l'outil a suggéré, et pas seulement ce qui a été décidé", "Classement « réclamation », montant lu 1 250 000"],
                ['Version de la consigne ou du réglage', "Expliquer un changement de comportement après une modification", "Consigne de tri, version 3 du 2 octobre"],
                ['Décision finale et son auteur', "Nommer la personne qui a engagé l'entreprise", "Validée par l'acheteuse, compte nominatif"],
                ['Correction et motif', "Nourrir les indicateurs et repérer les erreurs qui se répètent", "Montant corrigé : l'IA avait lu la TVA comme le total"],
                ['Mode de contrôle appliqué', "Prouver que la règle prévue a été suivie", "Au-dessus du seuil : validation avant paiement"],
                ['Durée de conservation', "Garder assez longtemps sans garder pour toujours", "Fixée avec le référent des données et le service juridique"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels indicateurs suivre pour savoir si le processus transformé tient ses promesses ?",
            'legende' => "Le tableau de bord d'une page construit le deuxième après-midi. Les seuils d'alerte sont fixés par le groupe à partir des chiffres mesurés avant la transformation ; ceux indiqués ici sont des exemples.",
            'entetes' => ['Indicateur', 'Ce qu\'il mesure', 'Exemple de seuil d\'alerte', 'Qui le lit'],
            'lignes'  => [
                ['Taux de correction', "Part des propositions de l'IA modifiées par un valideur ou un relecteur", "Hausse de plus de moitié par rapport au mois précédent", "Le responsable du processus, chaque semaine"],
                ['Taux de reprise manuelle', "Part des dossiers rendus à une personne parce que l'IA n'a pas su trancher", "Plus d'un dossier sur cinq", "Le responsable du processus"],
                ['Délai de bout en bout', "Temps entre l'arrivée du dossier et son résultat final", "Retour au niveau d'avant la transformation", "Le responsable et la direction, chaque mois"],
                ['File de validation', "Nombre de dossiers qui attendent un valideur", "Plus d'une journée de travail en attente", "Le chef d'équipe, chaque jour"],
                ['Erreurs découvertes en aval', "Erreurs trouvées après la sortie du processus : client, comptabilité, entrepôt", "Une seule erreur grave", "Le responsable, avec enquête immédiate"],
                ['Taux d\'approbation sans modification', "Part des validations accordées sans aucun changement", "Proche de 100 % pendant des semaines, signe possible de validation machinale", "Le responsable, avec des cas pièges glissés dans la file"],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Que disent les chiffres et les textes sur la refonte des processus et le contrôle humain ?",
            'items' => [
                ['valeur' => '21 %', 'libelle' => "Répondants dont l'organisation utilise l'IA générative et qui déclarent avoir fondamentalement repensé au moins certains processus de travail ; l'enquête retient la refonte des processus comme le facteur au plus fort effet sur le résultat (rapport du 12 mars 2025, 1 491 participants)", 'source' => "McKinsey, The state of AI : How organizations are rewiring to capture value", 'url' => 'https://www.mckinsey.com/capabilities/quantumblack/our-insights/the-state-of-ai-how-organizations-are-rewiring-to-capture-value'],
                ['valeur' => '27 %', 'libelle' => "Répondants dont les salariés relisent la totalité des contenus produits par l'IA générative avant usage ; une part comparable déclare en vérifier 20 % ou moins (12 mars 2025)", 'source' => "McKinsey, The state of AI : How organizations are rewiring to capture value", 'url' => 'https://www.mckinsey.com/capabilities/quantumblack/our-insights/the-state-of-ai-how-organizations-are-rewiring-to-capture-value'],
                ['valeur' => '2 décembre 2027', 'libelle' => "Date d'application, après l'omnibus, des règles du règlement européen sur l'IA pour les systèmes à haut risque de l'annexe III, parmi lesquels le tri des CV et l'évaluation de la solvabilité (page mise à jour le 3 août 2026)", 'source' => "Commission européenne, cadre réglementaire de l'IA", 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai'],
                ['valeur' => '36 %', 'libelle' => "Part moyenne de la population qui utilise Internet en Afrique, contre 88 à 93 % en Europe, dans la CEI et dans les Amériques (15 octobre 2025)", 'source' => "UIT, Facts and Figures 2025", 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que disent la loi et le règlement européen sur les décisions confiées à une machine ?",
            'paragraphes' => [
                "Les responsables RH, crédit ou service client doivent connaître une règle commune à plusieurs pays : une décision importante sur une personne ne repose pas sur le seul traitement automatisé. Au Bénin, l'article 401 de la loi n° 2017-20 du 20 avril 2018 portant code du numérique, lue dans sa version publiée par le Secrétariat général du Gouvernement, interdit qu'une décision produisant des effets juridiques à l'égard d'une personne, ou l'affectant de manière significative, soit prise sur ce seul fondement. Les exceptions, contrat ou texte, doivent au moins permettre à l'intéressé de faire valoir son point de vue.",
                "L'article 428 de la même loi exige une analyse d'impact sur la protection des données, en particulier pour l'évaluation systématique d'aspects personnels fondée sur un traitement automatisé et suivie de décisions qui produisent de tels effets. Au Sénégal, l'article 48 de la loi n° 2008-12 du 25 janvier 2008, publiée par l'OMPI, pose une interdiction voisine pour les décisions fondées sur un profil. Dans l'Union européenne, l'article 22 du RGPD, dans la version publiée par la CNIL, donne à la personne le droit de ne pas faire l'objet d'une telle décision, et, dans les cas permis, d'obtenir une intervention humaine, d'exprimer son point de vue et de contester.",
                "Le règlement européen sur l'IA ajoute des exigences pour les systèmes à haut risque. Son article 14, consulté sur le service d'assistance de la Commission dans la version consolidée au 27 juillet 2026, demande que les personnes chargées de la surveillance comprennent les capacités et les limites du système, restent conscientes du biais d'automatisation, puissent ignorer, annuler ou inverser sa sortie, et interrompre son fonctionnement. Ce sont exactement les gestes travaillés le deuxième matin, même pour des usages qui ne relèvent pas du haut risque.",
                "Pour tous les usages, enfin, l'article 4 s'applique. Selon les questions et réponses de la Commission mises à jour le 27 juillet 2026, l'obligation de maîtrise de l'IA est applicable depuis le 2 février 2025, avec contrôle et sanctions à partir du 3 août 2026 ; l'omnibus numérique sur l'IA, entré en vigueur mi-juillet 2026, la maintient pour les fournisseurs et les utilisateurs professionnels mais n'impose plus de niveau « suffisant », et la formation du personnel à la surveillance humaine reste obligatoire pour les systèmes à haut risque. La formation ne remplace pas l'avis d'un juriste sur un cas précis.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble un processus transformé, selon le métier et le pays ?",
            'items' => [
                ['secteur' => "Achats d'un distributeur de matériaux, à Cotonou", 'probleme' => "Deux personnes rapprochent à la main commandes, bons de réception et factures fournisseurs ; les écarts sont découverts au moment du paiement, et les retards de règlement abîment la relation avec les fournisseurs.", 'solution' => "Une règle valide les factures conformes à la commande et à la réception ; l'IA lit les factures reçues en image et propose les montants ; tout écart, tout nouveau fournisseur et tout montant au-dessus du seuil attend l'acheteuse ; quinze factures validées automatiquement sont relues chaque semaine par la comptable."],
                ['secteur' => "Service client d'un opérateur de services, à Abidjan", 'probleme' => "Plusieurs centaines de messages par jour arrivent par courriel et par WhatsApp ; les réclamations urgentes se perdent au milieu des questions simples.", 'solution' => "L'IA classe chaque message et propose une réponse type pour les questions simples ; la catégorie « incertain » va directement à un agent ; aucune réponse sur un remboursement ne part sans validation ; le taux de messages reclassés par les agents est suivi chaque semaine. Le raccordement aux logiciels relève de la formation <a href=\"/formations/whatsapp-odoo-dolibarr-crm\">WhatsApp relié à Odoo, Dolibarr et au CRM</a>."],
                ['secteur' => "Ressources humaines d'une ONG, à Dakar", 'probleme' => "Chaque offre de poste reçoit des centaines de candidatures, et l'équipe envisage un tri automatique par l'IA.", 'solution' => "Le groupe classe l'étape en « décision humaine » au vu de l'article 48 de la loi sénégalaise ; l'IA se limite à vérifier la présence des pièces demandées et à résumer chaque dossier selon une grille commune ; chaque candidature est lue par un recruteur, et un dossier écarté par chacun des deux recruteurs est relu par un tiers."],
                ['secteur' => "Logistique d'un transitaire, à Lomé", 'probleme' => "Les documents d'un dossier d'import arrivent en plusieurs fois, souvent en photo ; les erreurs de saisie dans la déclaration coûtent des pénalités et des jours de stationnement.", 'solution' => "L'IA extrait les données des documents et les compare entre eux ; toute incohérence de poids, de valeur ou de désignation bloque le dossier jusqu'à la vérification d'un déclarant ; le journal conserve la proposition de l'IA et la correction, et les erreurs découvertes en aval sont suivies chaque mois."],
                ['secteur' => "Finance d'une PME de services, à Lyon", 'probleme' => "Les notes de frais sont contrôlées une par une par la responsable administrative, qui y passe deux jours par mois.", 'solution' => "Une règle valide les dépenses conformes à la politique de frais ; l'IA lit les justificatifs et signale les anomalies, comme une date qui ne correspond pas au déplacement ; au-delà d'un montant ou au moindre doute, la responsable tranche ; un échantillon mensuel vérifie les dépenses validées sans intervention."],
                ['secteur' => "Service usagers d'une mutuelle, à Bruxelles", 'probleme' => "Les demandes de remboursement incomplètes reviennent plusieurs fois, et l'équipe veut automatiser les réponses.", 'solution' => "L'IA rédige le brouillon de la demande de pièces manquantes à partir d'une liste fermée ; aucune décision de refus n'est automatisée, conformément à l'article 22 du RGPD ; le droit de l'usager à une intervention humaine est indiqué dans chaque message, et un agent relit les refus avant envoi."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle animée pour aboutir à une décision, et pas seulement à des idées ?",
            'intro' => "Les deux jours fonctionnent comme un atelier de conception. Le formateur apporte la méthode, les grilles et les questions difficiles ; les participants apportent leurs processus, leurs pièces et leurs chiffres, et repartent avec des documents qu'ils peuvent défendre.",
            'items' => [
                ['titre' => 'Dix personnes au plus, en binômes', 'texte' => "Chaque binôme travaille sur un processus. Au-delà de cinq processus dans la salle, les restitutions deviennent superficielles ; un service plus nombreux est réparti en deux sessions."],
                ['titre' => 'Des métiers mélangés quand c\'est possible', 'texte' => "Un acheteur voit dans le processus du service client des failles que l'équipe ne voit plus, et l'inverse. Les restitutions croisées entre métiers font partie de la méthode."],
                ['titre' => 'Vos pièces, anonymisées', 'texte' => "Les essais se font sur des dossiers réels dont les noms, numéros et coordonnées ont été remplacés avant la session. Une mesure faite sur vos propres documents vaut mieux que n'importe quel chiffre de démonstration."],
                ['titre' => 'Les outils déjà autorisés chez vous', 'texte' => "L'assistant d'IA utilisé pour les essais est celui que l'entreprise a déjà validé. S'il n'en existe aucun, les essais se font sur des données fictives, et la question du choix de l'outil est notée pour la direction."],
                ['titre' => 'Des supports qui servent le lundi suivant', 'texte' => "La grille de décision, le modèle de fiche de contrôle, le tableur d'échantillonnage, le modèle de journal des décisions, le tableau de bord d'une page et les cartes produites en séance, photographiées et mises au propre, avec une attestation nominative."],
                ['titre' => 'Un suivi fondé sur les chiffres', 'texte' => "Le point d'étape à distance, s'il est retenu, part des indicateurs et du journal des premières semaines. Les modalités d'échange entre la session et ce point sont fixées dans le devis."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils travaille-t-on, et combien coûtent-ils à l'entreprise ?",
            'legende' => "Prix publiés par les éditeurs et relevés le 5 octobre 2026 sur leurs pages officielles, hors taxes, payés aux éditeurs et non à Richard SALANON. La formation n'exige l'achat d'aucun de ces outils : le papier, le tableur et l'assistant déjà autorisé suffisent.",
            'entetes' => ['Besoin', 'Outil', 'Ce que publie l\'éditeur', 'Usage en formation'],
            'lignes'  => [
                ['Cartographier', "Papier, notes adhésives, puis draw.io (diagrams.net)", "draw.io se présente comme gratuit, sans inscription, sous licence Apache 2.0, avec enregistrement sur l'appareil ou dans Google Drive et OneDrive", "Mise au propre des cartes dessinées au mur"],
                ['Cartographier et simuler', "Bizagi Modeler", "Modeleur gratuit, export en PDF, Word et Excel, fonction de simulation des processus", "Pour les équipes qui veulent tester l'effet d'un seuil sur la file d'attente"],
                ['Notation', "BPMN, réduite à cinq symboles", "Norme ISO/IEC 19510:2013, publiée en juillet 2013, identique à BPMN 2.0.1 de l'OMG et confirmée en 2022", "Langage commun entre métiers et équipe technique"],
                ['Automatiser dans Microsoft 365', "Power Automate", "Premium à 13,00 € HT par utilisateur et par mois en paiement annuel ; Process à 130,00 € HT par robot et par mois ; essai gratuit de 30 jours", "Exemple de mise en œuvre, montré en démonstration"],
                ['Automatiser hors suite bureautique', "n8n Cloud ou Make", "n8n Starter affiché à 20 € par mois pour 2 500 exécutions ; Make Core à 9 dollars par mois pour 10 000 crédits", "Exemples de flux avec validation humaine ; comparés dans le <a href=\"/comparatifs/n8n-vs-make-vs-zapier\">comparatif n8n, Make et Zapier</a>"],
                ['Processus dans l\'ERP', "Odoo", "Une application gratuite ; Standard à 19,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 24,90 € ; Odoo 20.0 est la dernière version", "Pour les participants dont le processus vit dans Odoo ; ses fonctions d'IA ont leur formation, <a href=\"/formations/odoo-ia\">Odoo et IA</a>"],
                ['Journal, échantillon, tableau de bord', "Excel, Google Sheets ou LibreOffice Calc", "Inclus dans les suites déjà utilisées, ou gratuit avec LibreOffice", "Tous les modèles remis sont des fichiers de tableur modifiables"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour votre équipe ?",
            'legende' => "Les formats se combinent. Le premier échange, le cadrage et le devis sont gratuits ; ils servent à choisir le format et les processus travaillés.",
            'entetes' => ['Format', 'Durée et rythme', 'Ce que l\'on y fait', 'Pour qui'],
            'lignes'  => [
                ['Intra, dans vos locaux', "2 jours en 4 demi-journées", "Le programme complet sur vos processus et vos pièces, dossier de décision présenté à la direction", "Une équipe de direction métier, ou plusieurs services d'une même organisation"],
                ['Intra avec point d\'étape', "2 jours, puis 2 heures à distance après les premières semaines", "Même programme, puis lecture des premiers indicateurs et ajustement des seuils", "Les équipes qui mettent en service la carte cible juste après la session"],
                ['Inter-entreprises', "2 jours", "Même méthode, sur des processus apportés par chacun et des pièces fictives ou très anonymisées", "Un ou deux responsables par structure, un réseau ou une fédération professionnelle"],
                ['À distance', "5 séances de 2 h 30 sur deux à trois semaines", "Cartographie sur tableau blanc partagé, travail entre les séances, restitutions en visioconférence", "Équipes réparties sur plusieurs sites ou plusieurs pays"],
                ['Hybride', "Une journée sur place, puis 3 séances à distance", "Cartographie et grille en salle, fiches de contrôle et indicateurs à distance", "Équipes qui veulent dessiner ensemble mais espacer la suite"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui en fait varier le prix ?",
            'intro'      => "Le prix est établi sur devis, après un premier échange gratuit sur le nombre de participants et les processus visés. Les abonnements éventuels aux outils restent payés directement aux éditeurs, au nom de votre entreprise. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => 'Formation en intra', 'prix' => 'Sur devis', 'inclus' => ["Quatre demi-journées sur vos processus", "Grille de décision, fiche de contrôle, journal et tableau de bord", "Dossier de décision présenté à la direction", "Attestation nominative"]],
                ['offre' => "Formation et point d'étape", 'prix' => 'Sur devis', 'inclus' => ["Tout le contenu de la formation", "Point d'étape de deux heures à distance", "Ajustement des seuils et des échantillons sur les chiffres réels"]],
                ['offre' => 'Session inter-entreprises', 'prix' => 'Sur devis', 'inclus' => ["Deux jours en groupe mixte", "Travail sur le processus de chaque participant", "Modèles remis en fichiers modifiables", "Attestation nominative"]],
            ],
            'variations' => [
                "Le nombre de participants, de binômes et de processus travaillés.",
                "La préparation : analyse des pièces transmises, anonymisation, préparation des essais sur vingt dossiers.",
                "Le format et le lieu : Cotonou, une autre ville, un autre pays, ou à distance.",
                "Le point d'étape à distance et le suivi retenu.",
                "La langue de travail et des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il financer la session ?",
            'paragraphes' => [
                "Peut-être, selon le pays et le dossier, mais aucune prise en charge n'est promise ici. En Côte d'Ivoire, le FDFP, sur sa page consacrée au plan de formation consultée le 5 octobre 2026, réserve le dépôt d'un plan aux entreprises qui justifient du paiement régulier des deux taxes ; il range une formation assurée par un intervenant extérieur pour une seule entreprise dans la catégorie « intra », et ne règle qu'après le suivi et le contrôle de ses services, puis l'approbation de sa Commission permanente.",
                "Au Sénégal, le 3FPT ouvre un guichet de financement du personnel des entreprises et des membres des organisations professionnelles. Au Bénin, le décret n° 2022-286 du 11 mai 2022 a approuvé les statuts du Fonds de développement de la formation professionnelle continue et de l'apprentissage, le FODEFCA. En France, France Compétences rappelle que, depuis le 1er janvier 2022, l'accès aux fonds publics ou mutualisés suppose un prestataire certifié Qualiopi ; Richard SALANON ne détient pas cette certification et ne revendique l'agrément d'aucun fonds.",
                "Le bon ordre est donc d'écrire au fonds, programme et devis joints, et d'attendre sa réponse avant de compter sur lui. Pour cette formation, il est utile de préciser que les participants sont responsables des processus concernés : le lien entre la formation et le poste est alors évident. Le programme détaillé, les feuilles d'émargement et les attestations sont fournis dans tous les cas, ainsi que la liste des documents produits pendant la session. La page consacrée à la <a href=\"/services/formation-en-entreprise\">formation en entreprise</a> rassemble les règles connues de chaque dispositif.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi une validation humaine peut-elle ne plus rien valider du tout ?",
            'texte' => "Parce qu'au bout de quelques semaines, le valideur qui voit passer des propositions presque toujours justes cesse de les lire. Le règlement européen sur l'IA nomme ce travers : son article 14 demande que les personnes chargées de la surveillance restent conscientes du biais d'automatisation, cette tendance à se fier sans examen à la sortie du système. Les parades enseignées sont concrètes : glisser chaque semaine quelques dossiers pièges dont l'erreur est connue, exiger un motif écrit pour toute validation au-delà du seuil, faire tourner les valideurs, et surveiller le taux d'approbation sans modification. Une validation qui approuve tout n'est plus un contrôle. L'histoire de <a href=\"/histoires/knight-capital\">Knight Capital</a> rappelle aussi ce que coûte un système automatique que personne ne sait arrêter à temps.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on le plus souvent après la formation, et comment les éviter ?",
            'intro' => "Les processus transformés se dégradent rarement le premier jour. Ils dérivent dans les semaines qui suivent, pour des raisons que la session apprend à anticiper.",
            'items' => [
                ['titre' => 'Transformer le processus de la direction, pas celui du terrain', 'texte' => "La carte dessinée depuis un bureau oublie les contournements que les agents ont inventés. On suit un dossier réel de bout en bout, avec la personne qui le traite, avant de dessiner la moindre case."],
                ['titre' => 'Confier à l\'IA ce qu\'une règle faisait mieux', 'texte' => "Un contrôle de montant ou de date confié à un modèle de langage devient incertain et coûteux. Tout ce qui se tranche par une condition reste une condition."],
                ['titre' => 'Supprimer le contrôle après un bon mois', 'texte' => "Les premiers résultats rassurent, et l'échantillon disparaît. On réduit le contrôle progressivement, sur des chiffres, et on le remonte à la première erreur grave."],
                ['titre' => 'Oublier les exceptions', 'texte' => "Le circuit prévu pour le cas normal ne dit rien du dossier incomplet ou du client inconnu. Chaque exception de la carte reçoit un destinataire humain nommé."],
                ['titre' => 'Un journal que personne ne peut lire', 'texte' => "Des milliers de lignes sans motif de correction ne servent à rien. Les champs sont fixés à l'avance, et le motif est choisi dans une liste courte plutôt que tapé librement."],
                ['titre' => 'Changer la consigne sans le noter', 'texte' => "Une retouche de la consigne ou d'un réglage change le comportement de l'étape d'IA. Chaque modification reçoit un numéro de version, une date et un auteur, repris dans le journal."],
                ['titre' => 'Laisser le valideur seul face à la file', 'texte' => "Une file de validation qui déborde pousse à approuver vite. Le chef d'équipe suit la file chaque jour et redistribue la charge avant qu'elle ne devienne une pression."],
                ['titre' => 'Oublier de prévenir les personnes concernées', 'texte' => "Clients, candidats ou usagers doivent savoir, quand la loi le prévoit, comment obtenir l'examen de leur dossier par une personne. La phrase est rédigée avec le juriste et figure dans les messages envoyés."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, langues, données : que change le terrain en Afrique francophone et en Europe ?",
            'paragraphes' => [
                "Un processus qui dépend d'une étape d'IA en ligne dépend aussi de la connexion. L'UIT estimait, dans ses chiffres publiés le 15 octobre 2025, que 36 % de la population africaine utilisait Internet, contre 88 à 93 % en Europe, dans la CEI et dans les Amériques. À Cotonou, à Bamako ou à N'Djamena, chaque carte cible prévoit donc un mode dégradé : quand l'étape d'IA ne répond pas, les dossiers s'accumulent dans une file visible et l'équipe sait les traiter à la main, avec les mêmes règles.",
                "Les langues comptent aussi. Les demandes des clients arrivent souvent dans un français mêlé d'expressions locales, parfois en anglais dans les zones frontalières, parfois en messages vocaux. L'épreuve des vingt dossiers se fait sur ces messages réels, et non sur des textes propres. Quand le taux de réponses justes chute sur une catégorie de demandes, cette catégorie reste au circuit humain. Les montants posent un problème voisin : francs CFA sans décimales, espaces entre les milliers, euros avec virgule ; une erreur de lecture se règle par une règle de contrôle, pas par la confiance.",
                "Reste la question des données. Au Bénin, l'article 391 de la loi n° 2017-20 n'autorise le transfert de données personnelles vers un État tiers que si celui-ci assure un niveau de protection jugé équivalent ; une étape d'IA hébergée hors du pays doit donc être examinée avec le référent des données avant de recevoir des dossiers nominatifs. Dans l'Union européenne, le RGPD encadre la même question. La formation <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a> apprend ces réflexes à chaque salarié ; ici, ils sont inscrits dans la fiche de contrôle.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi travailler vos processus avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il conçoit lui-même des processus où l'IA intervient : il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il connaît donc, côté construction, les endroits où un modèle se trompe, et côté métier, les questions qu'un responsable doit poser avant d'accepter qu'il traite ses dossiers. Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), fort de " . $ans . " ans d'expérience dans le numérique, il déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a travaillé pour des structures de " . count((array) fait('pays_travailles')) . " pays.",
                "Sa manière de former tient en quelques engagements vérifiables : partir de vos pièces et de vos chiffres, dire franchement quand une étape doit rester humaine, citer les textes avec leur date de lecture et renvoyer au juriste ce qui relève d'un avis. Il n'est certifié par aucun éditeur d'IA ni d'automatisation et ne se présente comme partenaire officiel d'aucun ; la session se conclut par une attestation et par les documents que vous avez produits. Son parcours est sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur la page des <a href=\"/zones/\">zones d'intervention</a>.",
                "Les formations voisines sont réunies sur la page <a href=\"/formations/domaine/ia-systemes-existants\">IA dans vos systèmes existants</a>, et l'ensemble du catalogue sur la page des <a href=\"/formations/\">formations</a>. Pour faire construire les flux définis pendant la session, le service d'<a href=\"/services/automatisation-ia\">automatisation et IA</a> prend le relais.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de confier une étape de vos processus à l'IA ?",
            'texte' => "Dessinez d'abord le processus réel avec ceux qui le font ; confiez aux règles tout ce qu'une condition sait trancher ; réservez l'IA aux étapes de lecture, de classement ou de rédaction où elle a fait ses preuves sur vos propres dossiers ; gardez une personne nommée devant toute décision qui engage l'entreprise ou pèse sur quelqu'un ; relisez un échantillon, tenez le journal, suivez cinq indicateurs, et sachez arrêter la machine.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Quel processus voulez-vous transformer sans en perdre le contrôle ?",
            'texte'  => "Indiquez les services concernés, le nombre de participants, un ou deux processus qui vous coûtent du temps et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition de programme et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Organiser la formation IA et processus'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il être technicien pour suivre la formation ?", 'r' => "Non. La formation s'adresse aux responsables métier. On y dessine des processus, on y décide qui fait quoi et on y écrit des fiches de contrôle ; aucune ligne de code n'est demandée. Les questions techniques soulevées pendant la session sont notées pour l'équipe informatique ou pour la formation consacrée à l'intégration de l'IA dans les logiciels."],
        ['q' => "Quelle différence avec la formation n8n ?", 'r' => "La formation n8n apprend à construire et entretenir des flux automatiques dans un outil précis. Celle-ci se place avant : elle décide quelles étapes méritent d'être automatisées ou confiées à l'IA, et comment les contrôler. Les deux s'enchaînent bien : la carte cible et la fiche de contrôle produites ici deviennent le cahier des charges des flux."],
        ['q' => "Quels processus se prêtent le mieux à l'exercice ?", 'r' => "Ceux qui se répètent souvent, traversent plusieurs personnes ou plusieurs outils, et dont les retards ou les erreurs coûtent : rapprochement des factures, traitement des demandes clients, dossiers de candidature, documents de transport, notes de frais. Un processus rare ou entièrement fait de jugements reste un mauvais candidat."],
        ['q' => "L'IA peut-elle trier les candidatures à notre place ?", 'r' => "Pas seule. Les lois béninoise et sénégalaise, comme le RGPD en Europe, refusent qu'une décision importante sur une personne repose uniquement sur un traitement automatisé, et le règlement européen sur l'IA classe le tri des CV parmi les usages à haut risque. L'IA peut vérifier les pièces ou résumer un dossier ; un recruteur décide."],
        ['q' => "Combien de dossiers faut-il relire après la mise en service ?", 'r' => "Il n'existe pas de chiffre universel. On relit beaucoup au départ, souvent tout pendant la marche parallèle, puis une part fixe chaque semaine, tirée au hasard et complétée par les cas à risque. La part diminue si les erreurs restent rares, et remonte immédiatement après une erreur grave."],
        ['q' => "Repart-on avec un processus automatisé qui fonctionne ?", 'r' => "On repart avec la carte du processus actuel, la carte cible, la fiche de contrôle, le modèle de journal, le tableau de bord et un plan de mise en service validé ou non par la direction. La construction technique vient ensuite, par votre équipe, par la formation n8n ou par une mission confiée à un prestataire."],
        ['q' => "Doit-on déjà disposer d'un outil d'IA ?", 'r' => "Non. Si l'entreprise a déjà autorisé un assistant, les essais se font avec lui sur des pièces anonymisées. Sinon, ils se font sur des données fictives, et le choix d'un outil est noté comme décision à prendre par la direction, avec les questions à poser au fournisseur."],
        ['q' => "Nos processus sont encore sur papier : la formation a-t-elle un sens ?", 'r' => "Oui pour la cartographie et la grille de décision, qui montrent souvent qu'il faut d'abord numériser certaines étapes avant de penser à l'IA. La fiche consacrée à la digitalisation des processus, sans IA, peut alors venir en premier ; elle figure en bas de page."],
        ['q' => "Qui doit valider les étapes confiées à l'IA ?", 'r' => "Une personne nommée, qui a l'autorité de refuser la proposition et le temps de la lire. Ce n'est pas forcément le responsable lui-même : un acheteur, un agent confirmé ou un recruteur peuvent tenir ce rôle. Le relecteur de l'échantillon, lui, doit être une autre personne que le valideur."],
        ['q' => "Que se passe-t-il si l'outil d'IA tombe en panne ou si la connexion coupe ?", 'r' => "Le processus continue à la main. La carte cible prévoit un mode dégradé, avec une file visible des dossiers en attente et les mêmes règles appliquées par l'équipe. La personne autorisée à suspendre l'étape d'IA est nommée dans la fiche de contrôle."],
        ['q' => "La formation peut-elle réunir plusieurs services ou plusieurs pays ?", 'r' => "Oui. Le mélange des métiers est même recherché, et la formule à distance ou hybride convient aux équipes réparties entre plusieurs sites. Les différences de droit entre pays sont relevées processus par processus, en particulier pour les décisions qui touchent des personnes."],
        ['q' => "Combien coûte la formation ?", 'r' => "Le prix est fixé sur devis, après un premier échange gratuit. Il dépend du nombre de participants et de processus, de la préparation des pièces, du format, du lieu et du point d'étape éventuel. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "Commission européenne, cadre réglementaire de l'IA : calendrier d'application et cas à haut risque (mise à jour du 3 août 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, service d'assistance sur le règlement sur l'IA : article 14, surveillance humaine", 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-14', 'date' => '2026-10-05'],
        ['titre' => "CNIL, RGPD chapitre III : droits de la personne concernée (article 22, décision individuelle automatisée)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre3', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 391, 401 et 428)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "OMPI, WIPO Lex : loi sénégalaise n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel (article 48)", 'url' => 'https://www.wipo.int/edocs/lexdocs/laws/fr/sn/sn009fr.pdf', 'date' => '2026-10-05'],
        ['titre' => "McKinsey, The state of AI : How organizations are rewiring to capture value (12 mars 2025)", 'url' => 'https://www.mckinsey.com/capabilities/quantumblack/our-insights/the-state-of-ai-how-organizations-are-rewiring-to-capture-value', 'date' => '2026-10-05'],
        ['titre' => "ISO, ISO/IEC 19510:2013, Business Process Model and Notation", 'url' => 'https://www.iso.org/standard/62652.html', 'date' => '2026-10-05'],
        ['titre' => "OMG, Business Process Model and Notation, version 2.0.2", 'url' => 'https://www.omg.org/spec/BPMN/2.0.2/About-BPMN', 'date' => '2026-10-05'],
        ['titre' => "n8n Docs, Human-in-the-loop for AI tool calls (validation humaine avant action)", 'url' => 'https://docs.n8n.io/build/integrate-ai/ai-examples/human-in-the-loop-for-tools', 'date' => '2026-10-05'],
        ['titre' => "n8n, Plans and Pricing", 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Make, Pricing", 'url' => 'https://www.make.com/en/pricing', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, tarifs de Power Automate", 'url' => 'https://www.microsoft.com/fr-fr/power-platform/products/power-automate/pricing', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "draw.io, page d'accueil (licence et stockage)", 'url' => 'https://www.drawio.com/', 'date' => '2026-10-05'],
        ['titre' => "Bizagi, Modeler", 'url' => 'https://www.bizagi.com/en/platform/modeler', 'date' => '2026-10-05'],
        ['titre' => "UIT, Facts and Figures 2025 : usage d'Internet (15 octobre 2025)", 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['integrer-ia-logiciels-existants', 'digitalisation-processus', 'ia-audit-controle', 'gouvernance-ia', 'n8n', 'odoo-ia'],
        'services'    => ['integration-ia-entreprise', 'automatisation-ia'],
        'comparatifs' => ['n8n-vs-make-vs-zapier'],
    ],
];
