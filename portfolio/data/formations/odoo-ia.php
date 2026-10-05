<?php
// ============================================================
// data/formations/odoo-ia.php · Fiche formation « Odoo et IA » (vague 1B,
// lot A, domaine ia-systemes-existants). Angle propre : les fonctions d'IA
// intégrées à Odoo 20.0 (Ask AI, rédaction, transcription, numérisation des
// factures, tri des documents, champs IA, agents, actions serveur IA, modèles
// d'e-mail, Live Chat) avec le plan et les crédits qu'elles exigent, puis l'IA
// reliée à Odoo de l'extérieur (serveur MCP, API JSON-2, nœud Odoo de n8n).
// Sœurs non traitées : odoo-utilisateurs (gestes par poste),
// odoo-comptabilite-syscohada, ia-comptables-syscohada, whatsapp-odoo-
// dolibarr-crm, integrer-ia-logiciels-existants (technique générale : API
// des modèles, coûts des modèles), dolibarr-ia, agents-ia-assistants.
// Sources consultées le 05/10/2026 : documentation d'Odoo 20.0 (pages IA,
// serveur MCP et outils, API JSON-2, API RPC, numérisation, achats intégrés),
// catalogue IAP (Odoo AI, Document Digitization), politique de
// confidentialité IAP du 22/09/2026, page Tarification d'Odoo (lue dans un
// navigateur), dépôt public d'Odoo (branche 20.0), n8n Docs, loi n° 2017-20
// (articles 391 et 428), RGPD, Commission européenne (article 4), FDFP,
// FODEFCA, 3FPT, France Compétences. Tarifs d'Odoo : faits vérifiés du
// catalogue, repris tels quels.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Odoo et IA : utiliser les fonctions d'intelligence artificielle d'Odoo 20.0 et relier un assistant externe à votre base, sans perdre le contrôle des données ni des coûts",
    'title'   => 'Formation Odoo et IA : agents, MCP, API | Richard SALANON',
    'meta'    => "Formation Odoo et IA : fonctions IA d'Odoo 20.0, plan et crédits requis, agents, numérisation, serveur MCP et API JSON-2, sur votre propre base.",
    'en_bref' => "Cette formation apprend à une équipe qui travaille sous Odoo à se servir des fonctions d'intelligence artificielle de la version 20.0 (Ask AI, rédaction, transcription, numérisation des factures fournisseurs, tri des documents, champs IA, agents, Live Chat) et, pour le référent technique, à relier un assistant externe à la base par le serveur MCP ou l'API JSON-2. Elle s'adresse aux référents Odoo, aux responsables métier et aux administrateurs. Elle dure deux jours, plus une demi-journée technique facultative et une séance de suivi à distance, dans vos locaux, en inter-entreprises, à distance ou en formule hybride. Le prix est établi sur devis.",
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'ia-systemes-existants',
    'forte'   => true,
    'duree'   => 'Deux jours, plus une demi-journée technique facultative et une séance de suivi',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : faire l'inventaire de l'IA présente dans votre Odoo, et de ce qu'elle coûte",
            'duree'  => '3 h 30',
            'points' => [
                "Tour de la base avec le référent : version, hébergement (Odoo Online, Odoo.sh ou votre serveur), plan d'abonnement, applications installées, présence ou non de l'application IA.",
                "Les fonctions d'IA décrites par la documentation d'Odoo 20.0, rangées en trois familles : aide à l'utilisateur, traitement des documents, automatisation par agents et actions serveur.",
                "Ce que chaque famille exige : une application précise, Studio, le plan Personnalisé, des crédits d'achats intégrés, ou rien de plus que l'abonnement.",
                "Lire le solde des crédits Odoo AI et Document Digitization, régler un seuil d'alerte et désigner la personne qui reçoit le courriel quand le solde baisse.",
                "Où partent les données quand Odoo appelle un modèle d'IA : fournisseur choisi par Odoo, serveurs intermédiaires, durée de conservation, engagements écrits de l'éditeur.",
                "Exercice de contrôle : chaque participant remplit la fiche d'inventaire de son service, fonction par fonction, avec le prérequis manquant quand il y en a un.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : l'IA au quotidien, demander, rédiger, résumer, transcrire",
            'duree'  => '3 h 30',
            'points' => [
                "Ouvrir Ask AI depuis la palette de commandes (Ctrl + K) ou le bouton IA, et comprendre pourquoi les suggestions changent d'un écran à l'autre.",
                "Les trois sorties d'une réponse : l'envoyer comme message, la consigner comme note dans le fil du document, ou la copier ; et ce que chacune laisse comme trace.",
                "Rédiger et réécrire dans les champs Description et Notes, le compositeur d'e-mails et les articles Knowledge, avec une grille de relecture avant tout envoi.",
                "Transcrire une réunion dans une note : enregistrement, transcription, résumé, puis suppression automatique de l'audio ; recueillir l'accord des participants avant de lancer l'enregistrement.",
                "Les invites par défaut : créer, pour un modèle de document, des boutons métier comme « Résumer le ticket » ou « Préparer la relance », rattachés au bon agent.",
                "Exercice de contrôle : sur cinq documents réels de votre base, un résumé, une relance et une note, relus et corrigés en binôme avant d'être consignés.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : factures fournisseurs, documents et champs IA",
            'duree'  => '3 h 30',
            'points' => [
                "Activer la numérisation des documents, choisir le traitement automatique ou à la demande, et brancher l'alias de courriel du journal des achats.",
                "Contrôler une facture numérisée champ par champ : fournisseur, référence, dates, lignes, taxes, totaux ; relancer la lecture, créer le fournisseur absent, rapprocher le bon de commande.",
                "La validation automatique proposée après trois factures confirmées sans retouche : pourquoi la refuser au départ, et à quelles conditions l'accepter pour un fournisseur.",
                "Le tri automatique de l'application Documents : une consigne par dossier, les actions permises (déplacer, étiqueter, créer une activité ou une facture), et le contrôle des pièces de plusieurs pages.",
                "Les champs IA, ajoutés par Studio ou comme champs de propriétés : types de champs, consigne avec /field, calcul manuel et remplissage quotidien des champs vides.",
                "Exercice de contrôle : vingt factures fournisseurs réelles numérisées, puis le relevé des champs corrects, corrigés ou manquants, fournisseur par fournisseur.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : agents, actions serveur IA et Live Chat, l'IA qui agit sous contrôle",
            'duree'  => '3 h 30',
            'points' => [
                "Anatomie d'un agent : consigne système, style de réponse, compétences et outils, sources indexées, option « Restrict to Sources », bouton de test.",
                "Les compétences fournies par l'application IA, de la simple consultation (View Builder, Information retrieval) à l'écriture (Create Records, Update Records), et le niveau de risque de chacune.",
                "Brancher un agent sur un canal de Live Chat : règles d'escalade vers un humain, compétence de création de pistes, priorité de l'agent sur le chatbot.",
                "Les actions serveur de type IA : l'action décide, l'outil exécute ; déclarer les arguments dans le schéma IA et mettre les règles métier dans le code de l'outil.",
                "Les consignes insérées dans les modèles d'e-mail, évaluées à l'envoi pour chaque destinataire : intérêt, coût et relecture avant un envoi en nombre.",
                "Exercice de contrôle : un agent de support limité à vos sources, soumis à quinze questions dont cinq pièges, avec le journal des réponses fausses ou hors sujet.",
            ],
        ],
        [
            'titre'  => "Demi-journée technique facultative : relier un assistant externe à Odoo par le serveur MCP et l'API JSON-2",
            'duree'  => '3 h 30',
            'points' => [
                "Créer un utilisateur technique aux droits minimaux, puis une clé d'API à portée MCP et à durée courte, conservée dans un coffre et non dans un courriel.",
                "Déclarer le serveur MCP de la base (adresse terminée par /mcp) dans un client documenté par Odoo : Claude Desktop ou Claude Code, Antigravity, Codex.",
                "Lire la liste des outils exposés par défaut, en exposer d'autres un par un, et marquer comme « Readonly Tool » seulement ceux qui n'écrivent rien.",
                "L'API JSON-2 : appel d'une méthode d'un modèle à l'adresse /json/2, authentification par clé, une transaction par appel, et préférence pour les méthodes métier qui font tout d'un coup.",
                "Les anciennes intégrations XML-RPC et JSON-RPC : ce qui a déjà disparu dans Odoo 20, ce qui disparaîtra dans Odoo 22, et l'inventaire à faire maintenant.",
                "Exercice de contrôle : sur une base de test, dix questions en lecture seule puis une écriture soumise à approbation, et la vérification de la trace laissée par l'utilisateur technique.",
            ],
        ],
        [
            'titre'  => "Séance de suivi, trois à quatre semaines plus tard : ce que montrent l'usage réel et les crédits consommés",
            'duree'  => '2 h, à distance',
            'points' => [
                "Lecture des soldes de crédits et de leur évolution, rapportée au nombre de factures numérisées et de conversations avec les agents.",
                "Revue de dix factures numérisées tirées au hasard et de dix réponses d'agent, avec leurs corrections.",
                "Ajustement des consignes des dossiers, des champs IA et des invites par défaut qui ont produit des résultats faibles.",
                "Liste écrite des demandes à confier à l'intégrateur, distinguées de ce que le référent corrige seul.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => 'Deux jours, plus une demi-journée technique facultative et 2 h de suivi'],
        ['l' => 'Public', 'v' => 'Référents Odoo, responsables métier, administrateurs et intégrateurs internes'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saura faire votre équipe à la fin de la formation, et que la formation ne couvre-t-elle pas ?",
            'paragraphes' => [
                "Depuis deux versions, Odoo ne se contente plus d'accueillir l'intelligence artificielle par des modules tiers : il l'a placée au cœur du logiciel. La documentation de la version 20.0, sortie en septembre 2026, décrit un assistant que l'on appelle depuis n'importe quel écran, des agents configurables, des champs qui se remplissent seuls, un tri automatique des documents et un serveur MCP qui laisse un assistant extérieur lire et modifier la base. Ces fonctions sont puissantes, inégalement gratuites, et rarement connues des équipes qui paient déjà l'abonnement. Cette formation leur apprend à s'en servir sur leur propre base, avec des garde-fous écrits.",
                "À la fin des deux jours, chaque participant sait faire seul six choses, vérifiées par un exercice : dire quelles fonctions d'IA sa base contient et ce que chacune exige ; obtenir d'Ask AI un résumé ou un brouillon et le relire avant de l'utiliser ; contrôler une facture fournisseur numérisée et corriger ce que la lecture automatique a manqué ; écrire la consigne d'un dossier de l'application Documents ; régler et tester un agent limité à des sources choisies ; lire la consommation des crédits. Le référent sait en plus créer un champ IA, une invite par défaut et une action serveur de type IA.",
                "La demi-journée technique s'adresse à la personne qui administre la base ou à votre intégrateur interne. Elle apprend à relier un assistant externe à Odoo par le serveur MCP, avec un utilisateur technique aux droits minimaux, des clés courtes et des outils exposés un par un, puis à appeler l'API JSON-2 sans casser la cohérence des données. Elle ne remplace pas un projet d'intégration : elle donne au client de ce projet de quoi le comprendre, le vérifier et en garder la maîtrise.",
                "Plusieurs sujets voisins ont leur propre fiche. Les gestes de base de chaque poste (devis, réception, inventaire, facture) relèvent de la <a href=\"/formations/odoo-utilisateurs\">formation Odoo pour vos équipes</a>, la tenue de la comptabilité OHADA de la formation <a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>, et l'usage des assistants par les comptables de la formation <a href=\"/formations/ia-comptables-syscohada\">IA pour comptables</a>. La technique générale de l'IA dans un logiciel, choix des modèles et coût de leurs API compris, est traitée dans <a href=\"/formations/integrer-ia-logiciels-existants\">Intégrer l'IA dans ses logiciels existants</a>, et la messagerie dans <a href=\"/formations/whatsapp-odoo-dolibarr-crm\">WhatsApp relié à Odoo, Dolibarr et au CRM</a>.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles fonctions d'IA trouve-t-on dans Odoo 20.0, et qu'exige chacune ?",
            'legende' => "Fonctions décrites par la documentation officielle d'Odoo 20.0 et prérequis relevés dans cette documentation, sur la page Tarification d'Odoo et dans le catalogue des achats intégrés, consultés le 5 octobre 2026. La disponibilité exacte se vérifie sur votre base pendant le cadrage, car elle dépend des applications installées et de votre abonnement.",
            'entetes' => ['Fonction', 'Où elle se trouve', 'Ce qu\'elle fait', 'Ce qu\'elle exige'],
            'lignes'  => [
                ['Ask AI et bouton IA', 'Palette de commandes (Ctrl + K) et bouton en haut à droite de chaque écran', 'Répond en langage courant, ouvre une vue, résume un fil, propose une relance, traduit', 'Crédits Odoo AI ; les invites proposées dépendent de l\'écran et des applications installées'],
                ['Rédiger et améliorer un texte', 'Champs Description et Notes, compositeur d\'e-mails, modèles d\'e-mail, articles Knowledge', 'Produit un brouillon ou réécrit une sélection, avec le bouton « Use this » pour l\'insérer', 'Crédits Odoo AI ; relecture humaine recommandée par l\'éditeur lui-même'],
                ['Transcription vocale', 'Commande /Voice Transcript dans les notes, descriptions et articles Knowledge', 'Transcrit une réunion ou une dictée, puis en tire un résumé ; l\'audio est supprimé après traitement', "Accès au microphone accordé par le navigateur ; service d'IA d'Odoo appelé à distance"],
                ['Numérisation des documents', 'Comptabilité, journal des achats, alias de courriel', 'Lit une facture fournisseur et remplit le brouillon : fournisseur, référence, dates, lignes, taxes, totaux', 'Crédits Document Digitization, un par document ; les fichiers XML n\'en consomment pas'],
                ['Tri automatique des documents', 'Application Documents, action « AI Auto-sort » d\'un dossier', 'Classe, étiquette, crée une activité ou une facture selon la consigne du dossier', 'Application Documents ; actions possibles selon les applications installées'],
                ['Champs IA', 'Studio, ou champs de propriétés d\'un formulaire', 'Calcule la valeur d\'un champ à partir d\'une consigne et du contenu du document', 'Studio fait passer au plan Personnalisé ; les champs de propriétés s\'ajoutent sans Studio'],
                ['Agents IA', 'Application IA', 'Assistants dotés d\'une consigne, de compétences, d\'outils et de sources indexées', 'Application IA ; la page de tarifs range l\'IA agentique dans le plan Personnalisé'],
                ['Agent de Live Chat', 'Règles d\'un canal de Live Chat', 'Répond aux visiteurs, collecte leurs coordonnées et crée une piste quand il faut un humain', 'Applications Live Chat et IA'],
                ['Actions serveur IA', 'Paramètres techniques, actions serveur de type IA', 'Laisse l\'IA choisir l\'outil à lancer et ses arguments pendant une automatisation', 'Mode développeur ; outils écrits et déclarés par un administrateur'],
                ['Serveur MCP', 'Adresse de la base suivie de /mcp', 'Laisse un assistant externe interroger la base et, si on l\'autorise, la modifier', 'Clé d\'API à portée MCP, Node.js et un client compatible'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quel matériel ?",
            'intro' => "Le public est celui qui décide comment l'IA entre dans Odoo, ou qui s'en sert chaque jour dans un service précis. Tout le monde suit le premier jour ; le deuxième se répartit selon les fonctions utilisées chez vous.",
            'items' => [
                ['titre' => 'Le référent Odoo', 'texte' => "Administrateur fonctionnel ou utilisateur avancé, il suit tout le parcours. C'est lui qui écrira les consignes des dossiers, des champs IA et des agents, qui surveillera les crédits et qui répondra aux questions de ses collègues après la session."],
                ['titre' => 'Achats et comptabilité fournisseurs', 'texte' => "Ils reçoivent les factures, les numérisent et les valident. Leur priorité : contrôler ce que la lecture automatique a rempli, rapprocher la commande, et ne jamais laisser une facture se valider seule tant que le fournisseur n'a pas fait ses preuves."],
                ['titre' => 'Ventes, support et accueil', 'texte' => "Ils utilisent Ask AI pour résumer un fil, préparer une relance ou répondre à un ticket, et travaillent à côté de l'agent du Live Chat. Ils apprennent à relire, à reprendre la main et à repérer une réponse inventée."],
                ['titre' => 'Communication et site web', 'texte' => "Ils produisent des textes, des fiches produit et des images. La formation leur montre la génération d'images, les champs de description et les limites à respecter sur les marques, les logos et les droits."],
                ['titre' => "L'administrateur ou l'intégrateur interne", 'texte' => "Il suit la demi-journée technique : utilisateur dédié, clés d'API, serveur MCP, outils exposés, API JSON-2. Il doit pouvoir activer le mode développeur et installer Node.js sur un poste de test."],
                ['titre' => 'La direction', 'texte' => "Une heure à la fin du premier jour suffit souvent : ce que coûtent les crédits, où partent les données, quelles fonctions demandent le plan Personnalisé, et quelles règles écrire avant d'aller plus loin."],
                ['titre' => 'Prérequis', 'texte' => "Savoir se servir d'Odoo dans son propre poste. Aucune notion de programmation n'est demandée, sauf pour la demi-journée technique, où lire un fichier de configuration et une commande en terminal doit être familier."],
                ['titre' => 'Matériel et accès', 'texte' => "Un ordinateur par participant avec son compte nominatif, une copie de test de votre base quand l'hébergement le permet, un micro pour la transcription, une vingtaine de vraies factures fournisseurs en PDF, et quelques crédits d'essai ou achetés avant la session."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices les participants font-ils sur votre propre base ?",
            'items' => [
                ['titre' => "Relever les usages possibles avant la session", 'duree' => 'Avant la formation', 'texte' => "Chaque responsable de service note trois tâches répétitives de sa semaine dans Odoo : saisir des factures, résumer des tickets, rédiger des relances, classer des contrats. Cette liste choisit les fonctions travaillées en priorité et les documents qui serviront d'exercices."],
                ['titre' => "La fiche d'inventaire de votre base", 'duree' => '45 minutes', 'texte' => "Pour chaque fonction du tableau ci-dessus, le groupe vérifie dans votre Odoo si elle est disponible, ce qui manque (application, plan, crédits, droits), et qui en serait responsable. La fiche remplie devient la feuille de route remise à la direction."],
                ['titre' => 'Résumer et relancer sur cinq vrais dossiers', 'duree' => '1 heure', 'texte' => "Une opportunité, un ticket, une tâche de projet, une commande en retard et un fil de discussion interne. Ask AI produit un résumé et un brouillon ; le binôme relève chaque affirmation fausse, chaque oubli et chaque formule à reprendre avant d'enregistrer."],
                ['titre' => 'Mesurer la numérisation sur vingt factures', 'duree' => '1 h 15', 'texte' => "Vingt factures réelles de vos fournisseurs, scannées ou reçues en PDF, passent par la numérisation. Pour chacune, le participant compte les champs justes, corrigés ou vides. Le tableau obtenu dit, fournisseur par fournisseur, où l'automatisme est fiable et où il faut une vérification systématique."],
                ['titre' => "Écrire la consigne d'un dossier", 'duree' => '45 minutes', 'texte' => "Par petits groupes, rédaction de la consigne de tri d'un dossier de l'application Documents : contrôle préalable des pièces de plusieurs pages, critères de classement, actions permises. Les autres groupes déposent des documents pièges et notent les erreurs de classement."],
                ['titre' => "Tester un agent jusqu'à le prendre en défaut", 'duree' => '1 h 15', 'texte' => "Un agent de support reçoit comme sources vos conditions de vente et votre foire aux questions, avec l'option qui le limite à ces sources. Les participants posent quinze questions, dont des questions hors sujet, des demandes de remise et des pièges sur les délais. Chaque réponse fausse modifie la consigne ou les sources."],
                ['titre' => "Brancher un assistant externe en lecture seule", 'duree' => '1 h 30, demi-journée technique', 'texte' => "Sur une base de test, l'administrateur crée l'utilisateur technique et la clé, déclare le serveur MCP dans un client, pose dix questions de reporting, puis autorise une seule écriture. Le groupe vérifie ensuite, dans les champs de suivi, que l'écriture porte bien le nom de l'utilisateur technique."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que coûtent Odoo et ses fonctions d'IA, en dehors de la formation ?",
            'legende' => "Prix publiés par l'éditeur, hors taxes, relevés le 5 octobre 2026 sur la page Tarification d'Odoo (version française, lue dans un navigateur) et dans le catalogue des achats intégrés. Le montant affiché peut varier selon le pays depuis lequel la page est consultée. Ces sommes se paient à Odoo, jamais au formateur.",
            'entetes' => ['Élément', 'Prix publié', 'Ce qu\'il couvre selon l\'éditeur', 'Ce que la formation en fait'],
            'lignes'  => [
                ['Une application gratuite', '0 €', 'Une seule application, utilisateurs illimités, sur Odoo Online', "Rarement suffisante pour l'IA : la numérisation suppose la comptabilité, les agents l'application IA"],
                ['Plan Standard', "19,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 24,90 € ; en mensuel, 24,90 €, puis 31,10 €", 'Toutes les applications, hébergement sur Odoo Online', "Les fonctions d'aide à l'utilisateur et la numérisation se travaillent ; l'API externe n'y est pas accessible"],
                ['Plan Personnalisé', "35,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 44,90 € ; en mensuel, 44,90 €, puis 56,90 €", 'Toutes les applications, Studio, IA agentique, multi-société, API externe, hébergement au choix', 'Champs IA par Studio, agents, accès par l\'API JSON-2'],
                ['Utilisateur léger', '7,90 € par utilisateur et par mois', 'Accès limité à des fonctions essentielles, sur demande auprès d\'un conseiller Odoo', 'Hors du périmètre des postes formés ici'],
                ['Crédits Odoo AI', '1 € le crédit, en packs de 10 à 1 000 crédits ; 20 crédits offerts', 'Consommation variable selon la fonction, la complexité et la taille de la demande ; crédits sans date d\'expiration', 'Lecture du solde, seuil d\'alerte, estimation de la consommation par service'],
                ['Crédits Document Digitization', '15 € les 100 documents, 120 € les 1 000, 1 000 € les 10 000, 5 000 € les 100 000 ; 200 crédits offerts', 'Un crédit par document, dans la limite de 8 pages par facture', 'Calcul du coût réel à partir de votre volume mensuel de factures'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Plan Standard ou Personnalisé : que change le plan pour l'IA d'Odoo ?",
            'paragraphes' => [
                "La page Tarification d'Odoo, lue le 5 octobre 2026, liste sous le plan Personnalisé quatre éléments que le plan Standard n'a pas : Studio et l'IA agentique, la gestion de plusieurs sociétés, l'API externe, et le choix de l'hébergement. Sa foire aux questions précise que ce plan s'adresse aux entreprises qui doivent personnaliser Odoo par Studio, l'IA agentique, des développements ou l'API, et qu'installer Studio ou ajouter une société fait passer automatiquement au plan Personnalisé. La documentation des champs IA le rappelle à sa façon : installer Studio peut modifier le plan tarifaire de la base.",
                "La même page range hors des plans les crédits d'achats intégrés, dont l'IA qui lit les factures fournisseurs et les notes de frais. Ces crédits s'achètent à part, service par service. Pour l'API, la documentation de l'API JSON-2 d'Odoo 20.0 est nette : l'accès aux données par l'API externe n'existe que sur le plan Personnalisé, ni sur l'application gratuite, ni sur le plan Standard. Le nœud Odoo de n8n, dont la documentation de l'outil reprend la même exigence, ne fonctionne donc pas sur une base Standard hébergée par l'éditeur.",
                "Deux nuances évitent les mauvaises surprises. La documentation du serveur MCP ne mentionne pas de plan : la formation vérifie donc ce point sur votre abonnement avant toute démonstration, plutôt que de le supposer. Ensuite, le dépôt public de l'édition Community, branche 20.0, ne contient aucun module d'IA, alors qu'il contient le module qui porte l'API JSON-2 : une base Community installée sur votre serveur peut être reliée à une IA externe par l'API, mais elle ne dispose pas des fonctions d'IA décrites dans cette fiche.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où partent vos données quand Odoo appelle un modèle d'IA ?",
            'paragraphes' => [
                "La question revient dans chaque groupe, et la réponse se trouve dans la politique de confidentialité des achats intégrés d'Odoo, mise à jour le 22 septembre 2026. Quand un utilisateur se sert d'une fonction d'IA, Odoo transmet sa demande, l'historique utile de la conversation, le contexte du document ouvert et les extraits des sources de l'agent à un fournisseur de modèles. Pour Odoo 20, ce fournisseur est choisi automatiquement par Odoo, entre OpenAI et Google (Gemini), avec une inférence qualifiée de mondiale : le traitement n'est pas cantonné à une région.",
                "La même politique indique que ces fournisseurs sont utilisés dans un cadre professionnel où les informations transmises ne sont ni conservées ni utilisées pour entraîner des modèles, et que le service intermédiaire d'Odoo ne garde la conversation que le temps de la traiter. Les outils d'un agent n'accèdent aux données d'Odoo que dans la limite des droits de l'utilisateur connecté. C'est un point que la formation fait vérifier concrètement : un agent consulté par un stagiaire ne doit pas voir ce qu'un directeur financier voit.",
                "La numérisation suit d'autres règles. Selon la même politique, les fichiers envoyés et les données extraites sont conservés six mois sur les serveurs d'Odoo, situés en Belgique et en France, pour améliorer le service, puis les fichiers sont supprimés et les données rendues anonymes ; une partie de la lecture peut passer par Google Vision. La transcription vocale, elle, supprime l'enregistrement audio une fois le texte produit, selon la documentation d'Odoo 20.0. Ces trois régimes différents justifient une règle simple, écrite pendant la formation : quelles données peuvent passer par quelle fonction.",
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Fonctions intégrées, agents, serveur MCP ou API : quelle voie choisir pour quel besoin ?",
            'options'  => ['Fonctions intégrées', 'Agents de l\'application IA', 'Serveur MCP et assistant externe', 'API JSON-2 ou flux n8n'],
            'criteres' => [
                ['critere' => 'Besoin typique', 'valeurs' => ['Résumer, rédiger, transcrire, numériser une facture', 'Répondre à partir de vos documents, agir dans la base avec des compétences choisies', 'Interroger la base en langage courant depuis un assistant de bureau ou de développement', 'Faire circuler des données entre Odoo et un autre logiciel, avec une IA dans le flux']],
                ['critere' => 'Qui le met en place', 'valeurs' => ['Chaque utilisateur, après activation', 'Le référent, dans l\'application IA', "L'administrateur, poste par poste", "L'intégrateur ou un référent technique"]],
                ['critere' => 'Prérequis principal', 'valeurs' => ['Crédits Odoo AI ou Document Digitization', 'Application IA ; IA agentique rangée dans le plan Personnalisé', 'Clé à portée MCP, Node.js, client compatible ; plan à vérifier sur votre abonnement', 'Plan Personnalisé, utilisateur technique et clé d\'API']],
                ['critere' => 'Contrôle', 'valeurs' => ['Relecture par l\'utilisateur avant usage', 'Consigne, sources limitées, compétences en lecture ou en écriture', 'Outils exposés un par un, approbation des écritures par le client', 'Droits de l\'utilisateur technique, journal d\'exécution du flux']],
                ['critere' => 'Risque principal', 'valeurs' => ['Texte faux envoyé sans relecture', 'Réponse inventée ou écriture non voulue', 'Clé trop large ou outil d\'écriture exposé sans approbation', 'Appels successifs incohérents, ancienne API abandonnée']],
            ],
            'verdict'  => "Commencez par les fonctions intégrées, qui ne demandent que de la méthode et des crédits ; passez aux agents quand vos sources sont propres ; réservez le serveur MCP et l'API aux équipes qui ont un administrateur capable de tenir les clés et les droits.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Relier une IA externe à Odoo : que faut-il savoir du serveur MCP et de l'API JSON-2 ?",
            'paragraphes' => [
                "Le Model Context Protocol est un standard ouvert qui permet à un modèle de langage d'agir sur une application extérieure. Selon la documentation d'Odoo 20.0, la base devient un serveur MCP distant : l'utilisateur crée dans ses préférences une clé d'API à portée MCP, avec une date d'expiration, puis déclare dans son client l'adresse de la base suivie de /mcp. La documentation décrit cette configuration pour Claude Desktop et Claude Code, Google Antigravity et Codex, au moyen de la commande npx, ce qui suppose Node.js sur le poste. Le client récupère ensuite la liste des outils que la base lui expose.",
                "Par défaut, une base n'expose que cinq outils de lecture : la liste des modèles, la liste des champs, le contexte initial, la recherche et le regroupement avec calculs. Les autres, dont la création et la mise à jour d'enregistrements, restent cachés tant qu'un administrateur ne coche pas « Available in MCP » sur l'action serveur correspondante. L'option « Readonly Tool » signale seulement au client qu'un outil peut être lancé sans approbation ; elle ne masque rien. La formation fait donc exposer les outils un par un, en commençant par la lecture, et garder l'approbation humaine sur toute écriture.",
                "L'API JSON-2, apparue avec la version 19.0, appelle une méthode d'un modèle à l'adresse /json/2, avec une clé d'API transmise comme jeton. Sa documentation fixe des règles utiles à tout client : une clé ne peut pas durer plus de trois mois, une durée d'un jour est conseillée pour un usage interactif, et un utilisateur technique dédié, aux droits minimaux, est recommandé pour une intégration durable. Chaque appel s'exécute dans sa propre transaction : deux appels successifs peuvent voir la base changer entre eux, d'où la préférence pour les méthodes métier qui confirment une commande en une fois.",
                "Les intégrations anciennes méritent un inventaire. Selon la documentation de l'API RPC d'Odoo 20.0, les points d'accès XML-RPC et JSON-RPC sont dépréciés ; leur service de gestion des bases a été retiré dans Odoo 20, et les services restants doivent disparaître dans Odoo 22, à l'automne 2028, et dès la version 21.1 d'Odoo Online, à l'hiver 2027. Un flux d'automatisation ou un connecteur écrit il y a quelques années peut donc cesser de fonctionner à une mise à jour. Pour la conception d'un flux complet, la formation <a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a> prend le relais.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle menée pour que l'usage tienne après la session ?",
            'intro' => "La méthode suit une règle : on ne montre aucune fonction que les participants ne puissent pas refaire tout de suite, dans votre base, avec des documents de votre activité. Les écritures automatiques se testent toujours sur une copie ou sur des documents marqués comme essais.",
            'items' => [
                ['titre' => 'Sur votre base, à votre version', 'texte' => "Les écrans d'IA ont beaucoup changé entre les versions 18, 19 et 20. Les exercices se font sur votre installation, avec vos applications et votre plan, pour que rien ne paraisse étranger le lendemain. Une base encore en version 18 ou 19 est formée sur ce qu'elle contient réellement."],
                ['titre' => 'Des groupes de trois à six personnes', 'texte' => "Une consigne d'agent ou de dossier se juge sur les réponses qu'elle produit. En petit groupe, chacun soumet ses propres cas, et le formateur peut lire chaque écran et chaque réponse obtenue."],
                ['titre' => 'Mesurer avant de croire', 'texte' => "Chaque fonction est évaluée par un relevé chiffré fait par les participants : champs justes sur vingt factures, réponses exactes sur quinze questions, temps passé à relire. Ces chiffres sont les vôtres ; la formation n'en promet aucun à l'avance."],
                ['titre' => 'Des crédits suivis pendant la session', 'texte' => "Le solde des crédits est relevé au début et à la fin de chaque demi-journée. Les participants voient ce qu'a coûté chaque exercice, ce qui ancre mieux qu'un tarif lu sur une page."],
                ['titre' => 'Une charte d\'usage écrite ensemble', 'texte' => "Fonctions autorisées, données exclues, relecture obligatoire, personne qui crée les agents et qui expose les outils : une page, rédigée par le groupe et validée par la direction, remise avec les supports."],
                ['titre' => 'Des supports tirés de vos écrans', 'texte' => "Fiches réflexes capturées dans votre base, consignes des dossiers et des agents en version modifiable, fiche d'inventaire des fonctions, procédure de création d'une clé et d'un utilisateur technique. Tout reste à l'entreprise."],
                ['titre' => 'Un suivi sur les chiffres réels', 'texte' => "Un canal direct pour les questions d'usage pendant quelques semaines, puis la séance de suivi à distance, qui part des crédits consommés et d'un échantillon de factures et de réponses tirées au hasard."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon votre activité, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => 'Négoce de matériaux, à Abidjan', 'probleme' => "Trois cents factures fournisseurs par mois sont saisies à la main, avec des erreurs de référence qui bloquent les rapprochements de fin de mois.", 'solution' => "Numérisation activée à la demande, alias de courriel du journal des achats, relevé de fiabilité par fournisseur sur vingt factures, puis validation automatique refusée tant qu'un fournisseur n'a pas montré des lectures justes. Le coût en crédits est calculé sur le volume réel."],
                ['secteur' => 'Société de services informatiques, à Dakar', 'probleme' => "Les techniciens passent du temps à relire de longs tickets avant de comprendre la demande, et les réponses aux questions fréquentes varient d'un agent à l'autre.", 'solution' => "Champ IA de résumé sur les tickets du Helpdesk, invite par défaut « Proposer une réponse » rattachée à un agent limité à la base de connaissances, et relecture obligatoire avant tout envoi au client."],
                ['secteur' => 'Boutique en ligne, à Cotonou', 'probleme' => "Les fiches produit du site restent sans description ni visuel cohérent, faute de temps pour les rédiger.", 'solution' => "Champ IA de description alimenté par les caractéristiques du produit, images générées pour les ambiances mais jamais pour représenter un produit réel de façon trompeuse, et relecture par la personne chargée du site avant publication."],
                ['secteur' => 'ONG ou projet financé, à Ouagadougou', 'probleme' => "Les comptes rendus de réunions avec les partenaires arrivent tard, et les pièces justificatives s'accumulent dans un dossier partagé sans ordre.", 'solution' => "Transcription vocale des réunions dans les notes du projet, avec l'accord des participants, et tri automatique des pièces dans l'application Documents par type et par bailleur, avec une étiquette « à vérifier » pour les cas douteux."],
                ['secteur' => 'Distributeur, à Lomé ou à Douala', 'probleme' => "Les visiteurs du site posent les mêmes questions de prix et de délais le soir et le week-end, et repartent sans laisser de coordonnées.", 'solution' => "Agent de Live Chat limité aux conditions de vente et aux délais publiés, règles d'escalade vers un commercial pour toute remise ou tout devis, et création de piste testée sur des conversations piégées avant la mise en service."],
                ['secteur' => 'PME industrielle, en France ou en Belgique', 'probleme' => "La direction veut interroger Odoo en langage courant depuis un assistant de bureau, sans ouvrir de rapport, mais le responsable informatique craint pour les données.", 'solution' => "Utilisateur technique en lecture seule, clé à portée MCP limitée à un mois, seuls les outils de lecture exposés, analyse préalable au regard du RGPD, et revue mensuelle des clés actives."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quel réglage transforme un agent utile en risque pour vos données ?",
            'texte' => "Donner l'écriture avant d'avoir mesuré la lecture. Un agent doté des compétences Create Records et Update Records, un outil d'écriture exposé au serveur MCP sans approbation, ou une clé d'API créée sur un compte administrateur suffisent à laisser une IA modifier des commandes, des fiches clients ou des prix. La documentation d'Odoo 20.0 le dit sans détour : un outil appelé par une action serveur IA s'exécute sans condition, sauf si son propre code l'en empêche. La formation impose donc un ordre : lecture d'abord, écritures limitées ensuite, toujours avec un utilisateur aux droits minimaux et une trace de qui a fait quoi.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?",
            'intro' => "Les difficultés qui apparaissent après l'activation de l'IA dans Odoo se ressemblent d'une entreprise à l'autre. Voici les plus fréquentes, et la parade travaillée pendant la session.",
            'items' => [
                ['titre' => 'Le brouillon envoyé tel quel', 'texte' => "Une relance rédigée par Ask AI part avec un montant inventé ou un délai que personne n'a promis. La documentation d'Odoo recommande elle-même de relire avant d'enregistrer ou d'envoyer. La règle de la charte : tout texte produit par l'IA est relu par celui qui l'envoie, et il en répond."],
                ['titre' => 'La facture validée sans contrôle', 'texte' => "La validation automatique est acceptée pour un fournisseur après trois factures sans retouche, puis le fournisseur change la mise en page de ses factures. On réserve cette option aux fournisseurs stables, et l'on contrôle un échantillon chaque mois."],
                ['titre' => 'Les crédits épuisés en fin de mois', 'texte' => "Selon le catalogue d'Odoo, la fonction s'arrête quand le solde est vide. Une numérisation interrompue un jour de clôture désorganise toute la comptabilité fournisseurs. Le seuil d'alerte et la personne destinataire sont réglés pendant la formation, avec une estimation de la consommation mensuelle."],
                ['titre' => 'Le champ IA qui consomme en silence', 'texte' => "Une action planifiée remplit chaque jour les champs IA vides. Un champ ajouté à un modèle de plusieurs milliers d'enregistrements peut donc consommer bien plus que prévu. On teste un champ sur un petit lot avant de l'ajouter à un modèle volumineux."],
                ['titre' => 'Les sources périmées', 'texte' => "Un agent continue de citer d'anciens tarifs parce que l'article de la base de connaissances a changé sans que la source soit retraitée. Toute mise à jour d'une source s'accompagne du bouton de retraitement, et la liste des sources est revue chaque trimestre."],
                ['titre' => "L'agent qui promet à la place de l'entreprise", 'texte' => "Un agent de Live Chat accorde une remise ou annonce un délai qu'aucun document ne prévoit. L'histoire du <a href=\"/histoires/air-canada-chatbot\">chatbot d'Air Canada</a> rappelle qu'un tribunal a tenu une entreprise pour responsable de ce qu'affirmait son assistant. Les règles d'escalade vers un humain sont donc testées avant l'ouverture du canal."],
                ['titre' => 'La clé oubliée', 'texte' => "Une clé d'API créée pour un essai reste active sur le compte d'un salarié parti. On crée les clés sur un utilisateur technique, avec une expiration courte, et la liste des clés actives est relue chaque mois par l'administrateur."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans vos locaux, en inter-entreprises, à distance ou en formule hybride : quel format choisir ?",
            'legende' => "Le format se décide au premier échange, selon le nombre de services concernés, l'existence d'une copie de test de la base et la présence d'un administrateur pour la demi-journée technique. Dans tous les cas, les exercices portent sur votre installation.",
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', "Une entreprise qui veut activer l'IA d'Odoo dans plusieurs services à la fois", 'Deux jours, plus la demi-journée technique si un administrateur la suit', 'Dans vos locaux, groupes par service, copie de test préparée une semaine avant'],
                ['Inter-entreprises', "Référents de plusieurs entreprises sous Odoo 20.0, par exemple d'un même réseau ou d'une même filière", 'Deux jours', "Base de démonstration commune pour les fonctions, puis une séance individuelle sur la base de chacun"],
                ['À distance', 'Équipes réparties entre plusieurs villes, entreprises en Europe ou au Canada', 'Cinq séances de deux heures et demie', "Visioconférence, partage d'écran, exercices et documents envoyés la veille"],
                ['Hybride', 'Équipes qui veulent un lancement commun puis un travail par service', 'Une journée en salle, puis deux séances à distance', "Inventaire et usages quotidiens sur place, agents et API à distance"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et comment se règle-t-elle ?",
            'intro'      => "Aucun tarif n'est publié : le prix est fixé sur devis, après un premier échange gratuit sur votre version d'Odoo, votre plan, les services concernés et le format. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements et les crédits d'Odoo restent à régler à l'éditeur.",
            'items'      => [
                ['offre' => 'Usages quotidiens', 'prix' => 'Sur devis', 'inclus' => ["Première journée pour tous", "Inventaire des fonctions de votre base", "Charte d'usage écrite par le groupe"]],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Les deux jours', 'Numérisation, documents et champs IA', 'Agents, actions serveur IA et Live Chat', 'Évaluation individuelle']],
                ['offre' => 'Demi-journée technique', 'prix' => 'Sur devis', 'inclus' => ['Utilisateur technique et clés', 'Serveur MCP et outils exposés', 'API JSON-2 et inventaire des anciennes intégrations']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Séance à distance', 'Revue des crédits consommés', 'Échantillon de factures et de réponses vérifié']],
            ],
            'variations' => [
                'Le nombre de services et de groupes à former, chaque groupe ayant sa demi-journée.',
                "Le plan et l'état de votre base : version, applications installées, application IA présente ou non.",
                'La préparation : copie de test de la base, documents d\'exercice, sources à nettoyer avant de les confier à un agent.',
                'La demi-journée technique et le nombre de postes sur lesquels configurer un client MCP.',
                'Le lieu et le mode : vos locaux, une salle, un déplacement hors de Cotonou, la visioconférence.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation continue peut-il prendre en charge une partie du coût ?",
            'paragraphes' => [
                "Parfois, selon le pays et le fonds, et la décision appartient toujours à ce fonds. En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP consacrée au plan de formation</a>, lue le 5 octobre 2026, ouvre ce plan aux entreprises qui justifient du paiement régulier de leurs deux taxes de formation, et place le règlement après le suivi et le contrôle du fonds. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> annonce un guichet pour le personnel des entreprises. Au Bénin, le FODEFCA tient ses statuts du <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>, et ses conditions se demandent à ses services.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que l'accès aux fonds publics ou mutualisés, ceux des OPCO compris, exige depuis le 1er janvier 2022 la certification Qualiopi. Richard SALANON ne la possède pas, et n'a l'agrément d'aucun fonds. Le plus sûr consiste à adresser le programme et le devis au fonds avant de signer, à attendre sa réponse écrite, et à bâtir le budget comme si aucune prise en charge n'était acquise. Le programme, les feuilles de présence et l'évaluation remis en fin de session servent à votre dossier.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, langue, données personnelles : que change le contexte local ?",
            'paragraphes' => [
                "Chaque fonction d'IA d'Odoo est un service distant. Le catalogue des achats intégrés le décrit ainsi : un service qu'Odoo exécute sur ses propres serveurs et que votre base appelle quand vous en avez besoin. Même une base installée sur un serveur à Cotonou ou à Abidjan a donc besoin d'Internet pour résumer un ticket ou lire une facture. Une coupure ne bloque pas la saisie, mais suspend l'IA ; les équipes doivent savoir reprendre la main sans elle. La numérisation à la demande, plutôt qu'automatique, aide aussi à étaler les envois quand la connexion est fragile.",
                "La langue compte pour la qualité des résultats. Les consignes des agents, des dossiers et des champs IA s'écrivent en français, avec le vocabulaire de vos documents : intitulés de comptes, noms de produits, formules de vos conditions de vente. La formation les teste sur des cas réels plutôt que sur des exemples génériques, car une consigne qui fonctionne sur une facture européenne peut échouer sur une facture normalisée béninoise ou sur un bordereau manuscrit numérisé.",
                "Au Bénin, la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 portant code du numérique</a> encadre l'envoi de données personnelles hors du pays : son article 391 exige que l'Autorité de protection ait reconnu au pays destinataire un niveau de protection équivalent. Son article 428 impose une analyse d'impact avant un traitement à risque élevé reposant sur de nouvelles technologies, notamment l'évaluation systématique de personnes par un traitement automatisé qui fonde des décisions à leur égard. Classer des candidatures ou noter des clients avec un champ IA entre dans cette réflexion.",
                "En Europe, l'<a href=\"https://eur-lex.europa.eu/eli/reg/2016/679/oj\">article 22 du RGPD</a> donne à chacun le droit de ne pas faire l'objet d'une décision fondée exclusivement sur un traitement automatisé qui produit des effets juridiques ou l'affecte de manière significative. S'y ajoute l'article 4 du règlement européen sur l'IA : selon les <a href=\"https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers\">questions et réponses de la Commission européenne</a> mises à jour le 27 juillet 2026, l'obligation de maîtrise de l'IA s'applique depuis le 2 février 2025, son contrôle et ses sanctions depuis le 3 août 2026, et l'omnibus numérique la maintient pour les utilisateurs professionnels sans plus imposer de niveau « suffisant ». La charte écrite en formation en garde la trace. Le cadre d'ensemble relève de la formation <a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi suivre cette formation avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Cette formation réunit les deux métiers qu'il exerce le plus souvent : déployer Odoo et intégrer l'intelligence artificielle dans des logiciels qui existent déjà. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il connaît donc les deux côtés d'un branchement : ce que l'IA promet dans une démonstration, et ce qu'il faut de droits, de clés et de relecture pour qu'elle reste fiable dans une base de production.",
                "Ses faits tiennent en quelques lignes : " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées selon ses propres déclarations, et des missions dans " . count((array) fait('pays_travailles')) . " pays, d'Afrique de l'Ouest et centrale jusqu'en Europe et au Canada. Le détail figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur la page des <a href=\"/zones/\">zones d'intervention</a>.",
                "Il n'a aucun lien commercial avec l'éditeur d'Odoo et n'affiche aucune certification de sa part. Sa façon de former se vérifie : une réponse sous 24 heures, un programme écrit avant la session, des exercices sur votre base, des chiffres relevés par vos équipes plutôt que promis par lui, des supports qui restent chez vous, et un avis franc quand une fonction d'IA ne vaut pas son coût pour votre volume. Les autres formations du domaine sont réunies sur la page <a href=\"/formations/domaine/ia-systemes-existants\">IA dans vos systèmes existants</a>, le catalogue complet sur la page <a href=\"/formations/\">formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'activer l'IA dans votre Odoo ?",
            'texte' => "Faites l'inventaire de ce que votre plan permet, suivez les crédits dès le premier jour, mesurez chaque fonction sur vos propres documents, relisez tout ce qui sort de l'IA, et n'accordez l'écriture qu'après avoir mesuré la lecture. Pour le reste, agents, serveur MCP et API se règlent mieux avec un utilisateur technique, des clés courtes et une charte écrite.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre équipe se sert-elle vraiment de l'IA que contient déjà votre Odoo ?",
            'texte'  => "Indiquez votre version d'Odoo, votre plan, votre hébergement, les services concernés et ce que vous attendez de l'IA : vous recevez une réponse sous 24 heures, puis un programme et un devis détaillés. Si la base elle-même doit d'abord être remise en ordre, le service d'<a href=\"/services/integration-odoo\">intégration Odoo</a> peut précéder la formation, et le service d'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a> prendre en charge un projet sur mesure.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander cette formation'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il l'application IA pour utiliser l'intelligence artificielle dans Odoo ?", 'r' => "Pas pour tout. Selon la documentation d'Odoo 20.0, de nombreuses fonctions s'utilisent sans elle, comme le tri automatique des documents ; créer et personnaliser des agents l'exige en revanche. La formation commence par vérifier ce que votre base contient réellement."],
        ['q' => "Le plan Standard suffit-il ?", 'r' => "Pour les usages quotidiens et la numérisation, souvent oui, avec des crédits. La page de tarifs d'Odoo range l'IA agentique, Studio et l'API externe dans le plan Personnalisé, et la documentation de l'API JSON-2 réserve l'accès externe aux données à ce plan. Installer Studio fait passer automatiquement au plan Personnalisé."],
        ['q' => "Combien coûtent les crédits d'IA ?", 'r' => "Le 5 octobre 2026, le catalogue d'Odoo affichait le crédit Odoo AI à 1 €, avec 20 crédits offerts, et une consommation variable selon la fonction et la taille de la demande. La numérisation coûte un crédit par document, de 15 € les 100 documents à 5 000 € les 100 000, avec 200 crédits offerts."],
        ['q' => "Nos données servent-elles à entraîner les modèles ?", 'r' => "Selon la politique de confidentialité des achats intégrés d'Odoo, mise à jour le 22 septembre 2026, les informations transmises aux fournisseurs d'IA, choisis par Odoo entre OpenAI et Google pour la version 20, ne sont ni conservées ni utilisées pour l'entraînement. Les documents numérisés sont, eux, conservés six mois pour améliorer le service."],
        ['q' => "Peut-on choisir le modèle d'IA utilisé par Odoo ?", 'r' => "Pour Odoo 20, la politique de confidentialité indique que le fournisseur est sélectionné automatiquement par Odoo ; en version 19, l'administrateur peut le configurer. Pour utiliser un modèle de votre choix, la voie est d'y relier un assistant externe par le serveur MCP ou l'API."],
        ['q' => "Notre Odoo est en édition Community : la formation est-elle utile ?", 'r' => "En partie. Le dépôt public de l'édition Community, branche 20.0, ne contient pas de module d'IA : les fonctions intégrées décrites ici n'y sont pas. En revanche, l'API JSON-2 en fait partie, et la demi-journée technique sur l'IA reliée par l'API s'applique pleinement."],
        ['q' => "Qu'est-ce que le serveur MCP d'Odoo, en une phrase ?", 'r' => "C'est une adresse de votre base, terminée par /mcp, à laquelle un assistant comme Claude, Antigravity ou Codex se connecte avec une clé d'API pour lire vos données et, si vous l'autorisez outil par outil, les modifier."],
        ['q' => "Un assistant externe peut-il modifier nos factures ?", 'r' => "Seulement si un administrateur expose un outil d'écriture et si la clé utilisée en a les droits. Par défaut, la base n'expose que cinq outils de lecture. La formation recommande un utilisateur technique aux droits minimaux et l'approbation humaine de chaque écriture."],
        ['q' => "Nos intégrations XML-RPC vont-elles cesser de fonctionner ?", 'r' => "Selon la documentation d'Odoo 20.0, ces points d'accès sont dépréciés : le service de gestion des bases a déjà été retiré dans Odoo 20, et les services restants doivent disparaître dans Odoo 22, à l'automne 2028. Un inventaire des connecteurs existants s'impose avant la prochaine mise à jour."],
        ['q' => "La numérisation des factures fonctionne-t-elle avec nos factures africaines ?", 'r' => "La formation le mesure plutôt que de le promettre : vingt de vos factures réelles sont numérisées, et chaque champ est vérifié. Le résultat dit, fournisseur par fournisseur, où la lecture automatique est fiable et où une vérification systématique reste nécessaire."],
        ['q' => "Faut-il savoir programmer pour suivre la formation ?", 'r' => "Non pour les deux jours. La demi-journée technique demande en revanche d'être à l'aise avec un fichier de configuration, une commande en terminal et les droits d'accès d'Odoo ; elle s'adresse à l'administrateur de la base ou à l'intégrateur interne."],
        ['q' => "Un fonds de formation peut-il financer la session ?", 'r' => "Cela dépend du pays et du fonds : FDFP en Côte d'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, OPCO en France. Richard SALANON n'est pas certifié Qualiopi et n'a l'agrément d'aucun fonds. Soumettez le programme et le devis avant de signer, et prévoyez le budget sans prise en charge."],
    ],

    'sources' => [
        ['titre' => "Odoo 20.0, documentation : l'IA dans Odoo (Ask AI, bouton IA, demandes courantes)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : agents IA (compétences, outils, sources, création)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/agents.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : invites par défaut", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/default_prompts.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : tri des documents par l'IA", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/document_sort.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : champs IA (Studio, champs de propriétés, action planifiée)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/fields.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : génération d'images", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/generate_images.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : agent IA du Live Chat", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/live-chat.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : actions serveur IA", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/server-actions.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : IA dans les modèles d'e-mail", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/email-templates.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : transcription vocale", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/voice.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : écrire et améliorer un texte avec l'IA", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/improve_text.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : l'IA dans les processus de support (Helpdesk)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/support_operations.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : serveur MCP d'Odoo", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/mcp_server.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : outils disponibles par le serveur MCP", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/ai/mcp_server/mcp_tools.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : API externe JSON-2 (plan requis, clés, droits, transactions)", 'url' => 'https://www.odoo.com/documentation/20.0/developer/reference/external_api.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : API RPC externe (dépréciation de XML-RPC et JSON-RPC)", 'url' => 'https://www.odoo.com/documentation/20.0/developer/reference/external_rpc_api.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : numérisation des documents (factures fournisseurs)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/finance/accounting/vendor_bills/invoice_digitization.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : achats intégrés (IAP)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/essentials/in_app_purchase.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo IAP, service Odoo AI (prix des crédits et conditions)", 'url' => 'https://iap.odoo.com/iap/in-app-services/867', 'date' => '2026-10-05'],
        ['titre' => "Odoo IAP, service Document Digitization (prix des packs et limites de pages)", 'url' => 'https://iap.odoo.com/iap/in-app-services/259', 'date' => '2026-10-05'],
        ['titre' => "Odoo, politique de confidentialité des achats intégrés (mise à jour du 22 septembre 2026)", 'url' => 'https://iap.odoo.com/privacy', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page Tarification (plans Standard et Personnalisé, IA agentique, API externe)", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Odoo, dépôt public de l'édition Community, branche 20.0 (liste des modules)", 'url' => 'https://github.com/odoo/odoo/tree/20.0/addons', 'date' => '2026-10-05'],
        ['titre' => "n8n Docs, nœud Odoo (opérations, usage comme outil d'agent IA)", 'url' => 'https://docs.n8n.io/integrations/builtin/app-nodes/n8n-nodes-base.odoo/', 'date' => '2026-10-05'],
        ['titre' => "n8n Docs, identifiants Odoo (clé d'API, plan Personnalisé requis)", 'url' => 'https://docs.n8n.io/integrations/builtin/credentials/odoo/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 391 et 428)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement (UE) 2016/679 (RGPD), article 22", 'url' => 'https://eur-lex.europa.eu/eli/reg/2016/679/oj', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-utilisateurs', 'odoo-comptabilite-syscohada', 'integrer-ia-logiciels-existants', 'dolibarr-ia', 'agents-ia-assistants', 'whatsapp-odoo-dolibarr-crm'],
        'services'    => ['integration-odoo', 'integration-ia-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
