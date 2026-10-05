<?php
// ============================================================
// data/formations/odoo-utilisateurs.php · Fiche formation « Odoo pour vos
// équipes » (vague 1B, lot A, domaine erp-gestion).
// Reprend l'ancienne page /formation-odoo (parcours par poste : ventes et CRM,
// stock et achats, facturation et paiements ; observation d'une demi-journée,
// groupes de 3 à 6 personnes du même métier, fiches réflexes capturées sur
// l'instance du client, convention de nommage, retour à un mois, 2 à 3 jours
// étalés sur 5 à 6 semaines pour une PME de dix personnes, point de vente,
// FAQ) ; ses prix sont ignorés. Angle propre : prise en main par poste.
// Sœurs non traitées : odoo-dirigeants (pilotage), odoo-comptabilite-syscohada
// (plan comptable, journaux, TVA, états), odoo-ia, adoption-erp.
// Sources consultées le 05/10/2026 : documentation et tarifs d'Odoo, SLA
// d'Odoo Online, ARCEP Bénin, loi n° 2017-20, guide CNIL 2024 (mise à jour
// 2026), FDFP, FODEFCA, 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Odoo pour vos équipes : ventes, achats, stock et facturation, chaque poste autonome sur ses propres écrans",
    'title'   => "Formation Odoo par poste : ventes, stock | Richard SALANON",
    'meta'    => "Formation Odoo par poste : ventes, achats, stock, facturation et caisse, sur votre propre base, en groupes de 3 à 6, avec un retour un mois plus tard.",
    'en_bref' => "Une formation pratique qui apprend à chaque utilisateur d'Odoo les opérations de son poste (vente, achat, réception, inventaire, facturation, encaissement, caisse) sur une copie de votre base, avec vos articles et vos clients. Elle s'adresse aux vendeurs, acheteurs, magasiniers, caissiers et équipes administratives, en groupes de 3 à 6 personnes du même métier. Pour une PME d'une dizaine d'utilisateurs, comptez 2 à 3 jours en demi-journées, répartis sur 5 à 6 semaines, sur place, à distance ou en formule mixte. Le prix est fixé sur devis, après un cadrage gratuit.",
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'erp-gestion',
    'forte'   => true,
    'duree'   => "2 à 3 jours en demi-journées, répartis sur 5 à 6 semaines",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : observer chaque poste dans votre Odoo, sans rien changer",
            'duree'  => '3 h 30',
            'points' => [
                "Le formateur s'assoit à côté de chaque poste pendant le travail habituel : qui saisit quoi, à quel moment, et ce qui se fait encore hors du logiciel.",
                "Relevé des écarts : commandes saisies après la livraison, clients en double, mots de passe partagés, inventaires ouverts depuis des mois, factures restées en brouillon.",
                "Tri de chaque écart : geste mal appris (il relève de la formation) ou paramétrage défaillant (il relève d'une correction avant toute session).",
                "Projet de convention de nommage des clients, des fournisseurs et des articles, remis à la direction pour validation le jour même.",
                "Choix des exemples réels qui serviront aux exercices : vos articles, vos clients, vos circuits de validation.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : le socle commun à tous les postes",
            'duree'  => '3 h 30',
            'points' => [
                "Connexion avec un compte nominatif, langue, fuseau horaire, double authentification quand elle est activée.",
                "Se déplacer dans Odoo : applications, vues liste, kanban et formulaire, recherche, filtres, regroupements, favoris enregistrés.",
                "Le cycle de vie d'un document : brouillon, confirmé, fait ou comptabilisé, annulé. Ce que chaque statut change dans le stock et dans les chiffres.",
                "Chercher avant de créer : retrouver un client par son téléphone, son nom ou son numéro fiscal, appliquer la convention de nommage validée.",
                "Le fil de discussion et les activités : noter un échange, planifier un rappel, mentionner un collègue au lieu d'envoyer un message hors du logiciel.",
                "Exercice de clôture : chacun retrouve seul un document précis à partir d'une information partielle.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : parcours ventes et relation client",
            'duree'  => '3 h 30',
            'points' => [
                "Du prospect au devis : opportunité dans le CRM quand l'entreprise l'utilise, puis devis à partir d'un client existant.",
                "Listes de prix, remises autorisées, conditions de paiement, envoi du devis par courriel ou en PDF.",
                "Confirmation en bon de commande, suivi de la livraison liée, livraison partielle et reliquat.",
                "Facture créée depuis la commande, et non saisie à part, pour garder le lien entre ce qui a été vendu, livré et facturé.",
                "Relances : devis sans réponse, commandes non livrées, clients à rappeler, à partir des filtres enregistrés.",
                "Exercice final : un cas complet de votre activité, du devis à la facture, réalisé seul.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : parcours achats et réceptions",
            'duree'  => '3 h 30',
            'points' => [
                "Demande de prix à un ou plusieurs fournisseurs, comparaison, confirmation en bon de commande.",
                "Réception totale ou partielle, reliquat, retour d'une marchandise non conforme.",
                "Facture fournisseur créée depuis la commande, contrôlée sur les quantités commandées ou reçues selon la règle de votre paramétrage.",
                "Règle de paiement des fournisseurs quand le rapprochement à trois (commande, réception, facture) est activé.",
                "Propositions de réapprovisionnement : lire ce que le logiciel suggère avant de commander.",
                "Exercice final : une commande fournisseur reçue en deux fois, facturée et prête à payer.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : parcours stock et inventaire",
            'duree'  => '3 h 30',
            'points' => [
                "Réceptions, livraisons et transferts internes validés au moment du mouvement physique, pas le lendemain.",
                "Emplacements, lots, numéros de série et dates de péremption, quand votre base les utilise.",
                "Règles de réapprovisionnement minimum et maximum, et lecture des quantités disponibles et prévues.",
                "Inventaire réel mené de bout en bout sur une zone du magasin : comptage, saisie, écarts, validation.",
                "Que faire d'un écart : le comprendre avant de l'ajuster, et le signaler au responsable.",
                "Exercice final : un mini-inventaire clôturé, avec la liste des écarts expliqués.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi : parcours facturation et encaissements",
            'duree'  => '3 h 30',
            'points' => [
                "Factures clients issues des commandes, factures d'acompte, conditions et échéances de paiement.",
                "Corriger une facture validée par un avoir, partiel ou total, jamais en la modifiant.",
                "Enregistrer un règlement par espèces, chèque, virement ou Mobile Money dans le journal prévu par votre paramétrage.",
                "Rapprocher un paiement et une facture, suivre les factures échues, préparer les relances.",
                "Factures fournisseurs à payer et leur échéance ; exports et pièces demandés par votre comptable.",
                "Exercice final : une vente facturée, payée en deux fois, puis corrigée par un avoir partiel.",
            ],
        ],
        [
            'titre'  => "Demi-journée facultative : parcours point de vente (caisse)",
            'duree'  => '3 h 30',
            'points' => [
                "Ouverture de la session de caisse, fonds de caisse, contrôle des moyens de paiement.",
                "Encaissements, remises, retours et remboursements, facture à la demande du client.",
                "Lien entre les ventes en caisse et le stock : pourquoi un article vendu doit exister dans la base.",
                "Clôture de la session, écarts de caisse, ce que voit le responsable le soir.",
                "Prérequis vérifié pendant l'observation : un stock déjà tenu avec discipline.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, demi-journée : retour sur l'usage réel",
            'duree'  => '3 h 30',
            'points' => [
                "Les questions apparues pendant le travail réel, traitées sur vos documents du mois.",
                "Les gestes qui ont dérivé depuis la formation, repris poste par poste.",
                "Constat chiffré relevé par l'entreprise : doublons créés, documents restés en brouillon, écarts d'inventaire, factures hors système.",
                "Mise à jour des fiches réflexes et passage de relais au référent interne.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 à 3 jours en demi-journées, sur 5 à 6 semaines"],
        ['l' => 'Public', 'v' => "Vendeurs, acheteurs, magasiniers, caissiers, équipes de facturation"],
        ['l' => 'Formats', 'v' => "Intra sur site, à distance, formule mixte ou inter"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saura faire chaque participant à la fin, et que la formation ne couvre-t-elle pas ?",
            'paragraphes' => [
                "Un Odoo installé ne garantit pas un Odoo utilisé. Dans beaucoup d'entreprises, le logiciel tourne, les licences sont payées, et pourtant les factures sortent encore d'un tableur, le stock se compte sur un cahier et une seule personne sait faire un avoir. Cette formation part de ce constat : elle apprend à chaque utilisateur les opérations de son poste, dans votre base, avec vos articles et vos clients, jusqu'à ce qu'il les exécute seul. Elle ne présente pas Odoo application par application : elle suit le chemin réel d'une vente, d'un achat, d'un mouvement de stock ou d'un encaissement chez vous.",
                "Les objectifs sont écrits avant la première session et vérifiés à la fin de chacune. Un vendeur crée un devis pour un client existant sans le dupliquer, le confirme, suit la livraison et produit la facture depuis la commande. Un acheteur passe une commande, enregistre une réception partielle et contrôle la facture du fournisseur. Un magasinier valide ses mouvements au moment où la marchandise bouge et mène un inventaire jusqu'à sa validation. Une personne de l'administration émet une facture, corrige une erreur par un avoir, enregistre un règlement Mobile Money et prépare ses relances.",
                "Le critère de réussite n'est pas un questionnaire de satisfaction. En fin de demi-journée, chaque participant réalise sans aide une tâche complète de son poste, sur un cas tiré de votre activité. S'il bloque, le geste est repris avec lui avant la session suivante, ou lors du retour à un mois. Cette exigence explique la taille des groupes, limitée à six personnes : au-delà, le formateur ne peut plus passer derrière chaque écran.",
                "Plusieurs sujets restent hors du périmètre, et la formation le dit dès le cadrage. Le paramétrage d'un Odoo qui n'est pas encore prêt relève de l'<a href=\"/services/integration-odoo\">intégration Odoo</a>. Le plan comptable, les journaux, la TVA et les états financiers selon le référentiel OHADA ont leur propre fiche : <a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>. Les fonctions d'intelligence artificielle sont traitées dans <a href=\"/formations/odoo-ia\">Odoo et IA</a>. Les tableaux de bord de direction font l'objet d'une formation distincte, Odoo pour dirigeants. La paie, qui dépend du droit social de chaque pays, n'est jamais improvisée en séance.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Pour qui est cette formation, avec quels prérequis et quel matériel ?",
            'intro' => "Chaque participant suit le socle commun, puis le parcours de son poste, et seulement celui-là. Un magasinier n'a pas besoin d'assister à la session de facturation, et l'inverse est vrai.",
            'items' => [
                ['titre' => "Vendeurs, commerciaux et accueil", 'texte' => "Ceux qui reçoivent les demandes, établissent les devis, confirment les commandes et rappellent les clients. Le parcours ventes leur apprend à travailler sur un fichier client propre et à suivre leurs commandes jusqu'à la facture, sans tableau parallèle."],
                ['titre' => "Acheteurs et responsables des approvisionnements", 'texte' => "Ceux qui consultent les fournisseurs, passent les commandes et surveillent les ruptures. Ils apprennent à lire les propositions de réapprovisionnement et à contrôler une facture fournisseur avant de la laisser payer."],
                ['titre' => "Magasiniers et responsables de dépôt", 'texte' => "Ceux qui reçoivent, rangent, préparent et livrent. Leur parcours se termine toujours par un inventaire réel validé dans Odoo, parce que c'est lui qui rend le stock affiché crédible."],
                ['titre' => "Facturation, recouvrement et secrétariat", 'texte' => "Ceux qui émettent les factures, enregistrent les règlements, relancent et transmettent les pièces au comptable. Ils repartent avec une méthode pour corriger sans casser l'historique."],
                ['titre' => "Caissiers et responsables de boutique", 'texte' => "Pour les commerces qui utilisent le point de vente d'Odoo : ouverture et clôture de caisse, encaissements, retours, et lien avec le stock."],
                ['titre' => "Le futur référent interne", 'texte' => "Une personne désignée par la direction suit tous les parcours qui la concernent, reçoit les fiches réflexes en version modifiable et devient le premier recours de ses collègues après la formation."],
                ['titre' => "Prérequis", 'texte' => "Savoir utiliser un navigateur et un clavier suffit. Aucune connaissance d'Odoo n'est demandée. Pour un participant peu à l'aise avec l'ordinateur, le cadrage prévoit une séance de mise à niveau ou un groupe à rythme adapté."],
                ['titre' => "Matériel et accès", 'texte' => "Un poste par participant, un compte nominatif avec les droits de son poste, une connexion stable (une connexion de secours en salle) et une copie de votre base, préparée avant la première session. Pour la caisse, le matériel réel : tiroir, imprimante de tickets, lecteur de codes-barres."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels exercices chaque poste réalise-t-il sur votre propre base ?",
            'legende' => "Exemples d'exercices construits pendant l'observation, avec vos articles, vos clients et vos fournisseurs. Chaque exercice se termine par une vérification que le participant fait lui-même dans Odoo.",
            'entetes' => ['Poste', 'Exercice sur votre base', 'Ce que le participant vérifie seul'],
            'lignes'  => [
                ['Vendeur', "Un client appelle pour une commande de trois articles, dont un en rupture.", "Le devis porte sur le bon client, sans doublon ; le reliquat apparaît sur la livraison."],
                ['Vendeur', "Un devis envoyé il y a dix jours est resté sans réponse.", "Le devis est retrouvé par un filtre enregistré, une activité de relance est planifiée."],
                ['Acheteur', "Un fournisseur livre la moitié d'une commande et facture la totalité.", "La facture est contrôlée sur les quantités reçues ; l'écart est signalé avant paiement."],
                ['Acheteur', "Trois articles passent sous leur seuil de stock.", "Les propositions de réapprovisionnement sont lues, ajustées puis confirmées."],
                ['Magasinier', "Une palette arrive avec un carton endommagé.", "La réception est validée sur la quantité réelle, le carton refusé est tracé."],
                ['Magasinier', "Comptage d'un rayon de votre magasin.", "Les écarts sont expliqués avant l'ajustement ; l'inventaire est validé, pas laissé ouvert."],
                ['Facturation', "Une facture validée comporte un mauvais prix.", "Un avoir partiel corrige l'erreur ; la facture d'origine reste intacte."],
                ['Facturation', "Un client règle la moitié par Mobile Money, le reste à trente jours.", "Le paiement est rapproché, le solde dû apparaît dans les factures échues."],
                ['Caisse', "Une journée de boutique simulée, avec un retour client.", "La session est clôturée, l'écart de caisse est nul ou expliqué."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment se déroule le cycle, du premier échange au retour à un mois ?",
            'items' => [
                ['titre' => "Cadrage gratuit", 'duree' => "Semaine zéro, en visioconférence", 'texte' => "Vous décrivez l'entreprise, les postes, ce qui bloque aujourd'hui. Un accès en lecture à votre base permet de voir son état réel. Vous recevez une proposition datée : parcours, participants, ordre des sessions, devis. Si un défaut de paramétrage rendrait la formation inutile, il est signalé à ce moment-là, avec un chiffrage séparé de la remise en état."],
                ['titre' => "Observation sur site", 'duree' => "Semaine 1, une demi-journée", 'texte' => "Le formateur observe le travail poste par poste, sans rien modifier. Le soir même, la direction reçoit la liste des écarts relevés, classés entre formation et paramétrage, et le projet de convention de nommage à valider."],
                ['titre' => "Préparation de la base de formation", 'duree' => "Entre la semaine 1 et la semaine 2", 'texte' => "Une copie de la base est préparée quand votre hébergement le permet, avec des accès limités aux participants. Les exercices sont rédigés sur vos cas. Les comptes nominatifs et leurs droits sont vérifiés."],
                ['titre' => "Socle commun et parcours par poste", 'duree' => "Semaines 2 à 4, une demi-journée par groupe", 'texte' => "On commence par le flux le plus critique, en général les ventes. Les sessions sont placées en dehors des heures d'affluence, pour qu'un comptoir ou un dépôt ne soit jamais vidé de tout son personnel."],
                ['titre' => "Remise des fiches réflexes", 'duree' => "À la fin de chaque parcours", 'texte' => "Chaque opération courante est capturée écran par écran dans votre base, puis imprimée ou affichée près du poste. Le référent reçoit les fichiers modifiables."],
                ['titre' => "Retour à un mois", 'duree' => "Un mois après la dernière session, une demi-journée", 'texte' => "On reprend les questions accumulées, on corrige les gestes qui ont dérivé et on compare la tenue de la base avant et après. C'est souvent ce rendez-vous qui fait passer une équipe de la formation à l'habitude."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle menée pour que les gestes restent après la session ?",
            'intro' => "La méthode tient en quelques règles simples, appliquées à chaque demi-journée. Elles viennent d'un constat répété : deux entreprises qui utilisent les mêmes applications d'Odoo ne travaillent jamais de la même façon.",
            'items' => [
                ['titre' => "Des groupes de 3 à 6 personnes du même métier", 'texte' => "Un groupe homogène avance sur des cas qui le concernent tous. Le formateur peut passer derrière chaque écran, reprendre un clic, et personne n'attend la fin d'une explication destinée à un autre service."],
                ['titre' => "Vos écrans, pas des captures génériques", 'texte' => "Les écrans d'Odoo changent d'une version à l'autre et d'un paramétrage à l'autre. On travaille donc sur votre version, avec vos champs, vos noms d'articles et vos étapes de validation, pour que rien ne paraisse étranger le lendemain."],
                ['titre' => "Démontrer peu, pratiquer beaucoup", 'texte' => "Chaque séquence commence par une démonstration de quelques minutes sur un cas réel, puis chacun refait le geste sur son poste. Le temps de pratique dépasse toujours le temps d'écoute."],
                ['titre' => "Une tâche complète, réalisée seul, en fin de session", 'texte' => "Le participant enchaîne toutes les étapes d'un cas de son poste sans aide. C'est cette tâche, et non l'impression laissée par la journée, qui dit si l'objectif est atteint."],
                ['titre' => "Des fiches réflexes tirées de votre base", 'texte' => "Une page par opération courante, capture après capture, rédigée avec le vocabulaire de vos écrans. Elles servent au quotidien et deviennent le support de formation des nouveaux arrivants."],
                ['titre' => "Une convention de nommage écrite", 'texte' => "Comment nommer un client, une société, un article, un fournisseur : quelques règles validées par la direction, qui évitent à elles seules des mois de nettoyage de doublons."],
                ['titre' => "Un compte par personne, avec les droits de son poste", 'texte' => "La formation commence par là. Un compte partagé efface toute trace de qui a fait quoi et donne souvent des droits d'administrateur à des personnes qui n'en ont pas besoin."],
                ['titre' => "Un référent, un canal, un retour", 'texte' => "Un référent interne formé en priorité, un canal direct pour les questions d'application pendant le mois qui suit, puis la demi-journée de retour. Sans ce suivi, les habitudes anciennes reviennent en quelques semaines."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Sur quelles versions et quelles éditions d'Odoo la formation porte-t-elle ?",
            'legende' => "Calendrier publié par l'éditeur sur sa page de documentation consacrée au support standard et étendu, consultée le 5 octobre 2026. Le support standard couvre les trois années qui suivent la sortie d'une version majeure ; le support étendu est payant.",
            'entetes' => ['Version', 'Sortie', 'Fin du support standard', 'Ce que cela change pour la formation'],
            'lignes'  => [
                ['Odoo 20.0', 'Septembre 2026', 'Septembre 2029 (prévue)', "Version la plus récente ; les captures des fiches réflexes sont faites sur vos écrans de cette version si vous y êtes déjà."],
                ['Odoo 19.0', 'Septembre 2025', 'Septembre 2028 (prévue)', "Version encore récente, très présente dans les bases installées en 2025 et 2026."],
                ['Odoo 18.0', 'Octobre 2024', 'Septembre 2027 (prévue)', "Formation possible sans réserve ; la date de fin de support mérite d'être inscrite dans votre calendrier."],
                ['Odoo 17.0', 'Novembre 2023', 'Septembre 2026', "Support standard terminé : la formation reste possible, mais une mise à jour se prépare avant de former une nouvelle équipe."],
                ['Odoo 16.0 et versions antérieures', "Octobre 2022 ou avant", "Septembre 2025 ou avant", "La formation porte alors sur l'existant, et le cadrage pose franchement la question de la migration."],
                ['Versions SaaS 19.1 à 19.4', 'Janvier à juillet 2026', 'Sans support étendu', "Versions intermédiaires réservées à Odoo Online ; l'interface peut différer de la version 19.0 sur quelques écrans."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Community ou Enterprise, en ligne ou sur votre serveur : qu'est-ce qui change pour vos équipes ?",
            'paragraphes' => [
                "Selon la page de comparaison des éditions publiée par l'éditeur et consultée le 5 octobre 2026, Odoo existe en deux éditions : Odoo Community, sous licence libre, et Odoo Enterprise, sous licence payante, la première servant de noyau à la seconde. La formation couvre les deux. Ce qui change pour un utilisateur, ce sont quelques écrans et quelques fonctions disponibles ou non : c'est une raison de plus pour former sur votre base et non sur une démonstration.",
                "L'hébergement change davantage pour le formateur que pour les participants. Sur Odoo Online, la base s'ouvre dans le navigateur et une copie de formation se prépare depuis l'espace de gestion des bases. Sur Odoo.sh ou sur votre propre serveur, la copie dépend de votre prestataire ou de votre informaticien, qu'il faut prévenir au moins une semaine à l'avance. Quand aucune copie n'est possible, les exercices se font sur la base réelle, limités à des documents de test clairement marqués et supprimés à la fin de la session.",
                "Pour choisir entre Odoo et un autre logiciel de gestion avant de former qui que ce soit, le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> pose les critères utiles. Si votre entreprise tourne déjà sous Dolibarr, la même démarche par poste existe dans la <a href=\"/formations/dolibarr-utilisateurs\">formation Dolibarr pour vos équipes</a>.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que coûte Odoo lui-même, en dehors de la formation ?",
            'legende' => "Tarifs de l'éditeur relevés le 5 octobre 2026 sur la page Tarification d'Odoo, affichés en euros sur la version française du site, hors taxes. Le montant et la devise peuvent différer selon le pays depuis lequel la page est consultée : vérifiez le tarif affiché pour le vôtre. Ces sommes sont dues à l'éditeur, jamais au formateur.",
            'entetes' => ['Formule de l\'éditeur', 'Prix affiché', 'Ce qu\'elle comprend selon l\'éditeur', 'Incidence sur la formation'],
            'lignes'  => [
                ['Une application gratuite', '0 €', "Une seule application, utilisateurs illimités, sur Odoo Online.", "Formation limitée au parcours de cette application, souvent les ventes ou la facturation."],
                ['Standard', "19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 € ; 24,90 € en paiement mensuel les 12 premiers mois, puis 31,10 €", "Toutes les applications, hébergement sur Odoo Online.", "Chaque participant a besoin de son propre compte : le nombre de comptes se prévoit avant la formation."],
                ['Personnalisé', "35,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 44,90 € ; 44,90 € en paiement mensuel les 12 premiers mois, puis 56,90 €", "Toutes les applications, multi-société, Studio, accès à l'API, hébergement au choix.", "Les écrans modifiés par Studio sont intégrés aux fiches réflexes."],
                ['Utilisateur léger', "7,90 € par utilisateur et par mois, sur demande auprès d'un conseiller Odoo", "Accès limité aux fonctions essentielles, sans les applications de ventes, d'achats ni de comptabilité selon la documentation des droits d'accès.", "Ne convient pas aux postes formés ici, sauf pour la caisse ou la lecture de codes-barres."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon votre métier, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Quincaillerie et matériaux de construction, à Cotonou", 'probleme' => "Le stock affiché dans Odoo ne correspond plus au dépôt, et les vendeurs vérifient chaque disponibilité en appelant le magasinier.", 'solution' => "Parcours stock en priorité, avec des réceptions validées à l'arrivée du camion, puis un inventaire réel par rayon. Parcours facturation ensuite, pour enregistrer les règlements Mobile Money au fil de l'eau."],
                ['secteur' => "Distribution de produits de grande consommation, à Abidjan", 'probleme' => "Chaque commercial terrain crée ses propres clients ; une même boutique existe sous trois noms, avec un historique éclaté.", 'solution' => "Convention de nommage validée par la direction, règle « chercher avant de créer » au socle commun, fusion des doublons menée par le référent avec une vérification préalable, puisque la fusion est irréversible."],
                ['secteur' => "Agroalimentaire, à Dakar", 'probleme' => "Les produits ont des lots et des dates de péremption, mais les sorties de stock ne précisent jamais le lot.", 'solution' => "Parcours stock centré sur la traçabilité par lot, exercices de livraison avec choix du lot, et inventaire tournant par famille de produits."],
                ['secteur' => "Boutique et restauration rapide, à Lomé", 'probleme' => "La caisse d'Odoo reste ouverte plusieurs jours de suite, les retours se font en espèces sans trace, et le stock des boissons dérive.", 'solution' => "Parcours point de vente, avec ouverture et clôture quotidiennes, procédure de retour, et lien avec le stock vérifié en fin de session."],
                ['secteur' => "ONG ou projet financé, à Ouagadougou ou à Niamey", 'probleme' => "Les achats doivent suivre une procédure : plusieurs devis, validation, réception contrôlée avant paiement, pièces conservées pour le bailleur.", 'solution' => "Parcours achats centré sur les demandes de prix, la comparaison des offres, la réception et le contrôle des factures fournisseurs avant tout règlement."],
                ['secteur' => "Entreprise d'installation technique, en France ou en Belgique", 'probleme' => "Des factures fournisseurs sont payées avant la livraison complète du matériel, et les données des clients circulent dans des fichiers partagés.", 'solution' => "Formation à distance en séances de deux à trois heures : achats avec contrôle des quantités reçues, ventes et facturation, comptes nominatifs, et règles de protection des données rappelées à chaque exercice."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Sur place, à distance, en formule mixte ou en inter : quel format choisir ?",
            'options'  => ['Intra sur site', 'Intra à distance', 'Formule mixte', 'Inter-entreprises'],
            'criteres' => [
                ['critere' => 'Base utilisée', 'valeurs' => ["Copie de votre base", "Copie de votre base, partage d'écran", "Copie de votre base", "Base de démonstration, aucune donnée d'entreprise"]],
                ['critere' => 'Taille des groupes', 'valeurs' => ["3 à 6 personnes du même métier", "3 à 5 personnes, pour garder la prise en main d'écran", "3 à 6 en salle, plus petits à distance", "Quelques personnes de structures différentes"]],
                ['critere' => 'Rythme', 'valeurs' => ["Demi-journées de 3 h 30", "Séances de 2 à 3 heures", "Lancement en salle, puis séances courtes", "Une ou deux demi-journées"]],
                ['critere' => 'Pour qui', 'valeurs' => ["Équipes peu à l'aise avec l'ordinateur, magasins, caisses", "Équipes réparties sur plusieurs sites, entreprises en Europe ou au Canada", "Déploiements où l'observation sur place compte", "Un ou deux nouveaux arrivants, petites structures d'un même réseau"]],
                ['critere' => 'Limite', 'valeurs' => ["Déplacement à prévoir hors de Cotonou et d'Abomey-Calavi", "Connexion indispensable pour chaque participant", "Deux organisations à caler", "Exercices moins proches de vos écrans réels"]],
            ],
            'verdict'  => "Pour une première prise en main, le site ou la formule mixte donnent les meilleurs résultats ; la distance convient aux équipes déjà à l'aise avec l'ordinateur ; l'inter sert surtout à former une ou deux personnes entre deux cycles.",
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation Odoo, et qu'est-ce qui fait varier le prix ?",
            'intro'      => "Aucun montant n'est publié : chaque proposition est établie sur devis, après le cadrage gratuit, parce que le travail dépend du nombre de postes, de l'état de votre base et du lieu. L'observation, les parcours et le retour à un mois figurent dans la même proposition, ligne par ligne.",
            'items'      => [
                ['offre' => "Cadrage", 'prix' => 'Gratuit', 'inclus' => ["Échange en visioconférence", "Lecture de l'état de votre base", "Proposition datée et devis"]],
                ['offre' => "Observation et parcours par poste", 'prix' => 'Sur devis', 'inclus' => ["Demi-journée d'observation", "Socle commun", "Un parcours par poste concerné", "Fiches réflexes et convention de nommage"]],
                ['offre' => "Parcours point de vente", 'prix' => 'Sur devis', 'inclus' => ["Une demi-journée", "Exercices sur votre matériel de caisse", "Fiche de clôture de caisse"]],
                ['offre' => "Retour à un mois", 'prix' => 'Sur devis', 'inclus' => ["Une demi-journée", "Questions d'usage réel", "Constat chiffré et mise à jour des fiches"]],
                ['offre' => "Session pour nouveaux arrivants", 'prix' => 'Sur devis', 'inclus' => ["Demi-journée à la demande", "Appui sur les fiches réflexes existantes"]],
            ],
            'variations' => [
                "Le nombre de postes à former et donc de parcours, puisque chaque groupe compte 3 à 6 personnes.",
                "L'état de la base : une remise en ordre préalable du paramétrage est chiffrée à part.",
                "La possibilité ou non de préparer une copie de la base pour la formation.",
                "Le lieu : vos locaux à Cotonou ou à Abomey-Calavi, une autre ville, ou la visioconférence.",
                "Le parcours point de vente et le matériel de caisse à intégrer aux exercices.",
                "Le nombre de sites ou de dépôts à couvrir pendant l'observation.",
                "La langue des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment s'organise et se règle une formation Odoo ?",
            'paragraphes' => [
                "Pour une PME d'une dizaine d'utilisateurs, le cas le plus courant réunit une demi-journée d'observation, deux ou trois parcours d'une demi-journée, éventuellement la session de direction en fin de cycle, et le retour à un mois : soit 2 à 3 jours de présence du formateur, étalés sur 5 à 6 semaines. Le calendrier exact est fixé après l'observation, quand on sait combien de groupes composer et dans quel ordre les former.",
                "Les sessions sur place se tiennent dans vos locaux, à Cotonou, à Abomey-Calavi ou dans une autre ville ; les déplacements sont alors prévus au devis. À distance, la séance se fait en visioconférence avec partage d'écran et prise en main de votre base. Les moyens de paiement acceptés sont le Mobile Money (MTN et Moov), la carte bancaire, PayPal, le virement et les espèces. Le devis précise l'échéancier, et la facture mentionne l'intitulé de la formation, les dates, la durée et le nombre de participants.",
                "Les recrutements arrivent rarement au bon moment. Les fiches réflexes servent d'abord à cela : un nouvel arrivant s'y forme seul à l'essentiel de son poste, épaulé par le référent. Pour une vague d'embauches ou un poste clé, une demi-journée supplémentaire peut être demandée à tout moment, sur la base des supports déjà produits.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il prendre en charge une partie du coût ?",
            'paragraphes' => [
                "Peut-être, mais aucune prise en charge n'est promise ici : chaque fonds applique ses propres règles au prestataire, à l'entreprise et à l'action. Les éléments ci-dessous ont été relevés le 5 octobre 2026 sur les pages officielles des fonds. Ils servent à préparer la question à poser, pas à y répondre à la place du fonds.",
                "En Côte d'Ivoire, la page du FDFP consacrée au plan de formation indique que toute entreprise qui justifie du paiement régulier de la taxe d'apprentissage et de la taxe additionnelle à la formation continue peut déposer un plan. Elle distingue les formations internes, intra (un intervenant extérieur forme les salariés d'une même entreprise), interentreprises et à l'étranger, et range les actions de formation associées à l'utilisation de l'ordinateur parmi celles soumises à des dispositions particulières. Une formation Odoo entre dans ce cas : interrogez le fonds avant de signer.",
                "La page du FDFP sur les procédures d'habilitation précise que l'habilitation, prononcée pour une année, s'impose aux opérateurs privés qui prétendent à ses financements, à l'exception des structures basées hors de Côte d'Ivoire. Un formateur installé au Bénin n'est donc pas dans la situation d'un cabinet d'Abidjan, et seul le fonds peut dire comment l'action s'inscrit dans votre plan.",
                "Au Bénin, le décret n° 2022-286 du 11 mai 2022 approuve les statuts du FODEFCA, que leur article 5 positionne comme principal guichet de financement de la formation professionnelle continue dans le secteur privé ; les mêmes statuts prévoient une contribution des bénéficiaires comprise, selon les cas, entre 10 et 30 % du coût total de la formation. Au Sénégal, le site du 3FPT présente un guichet de financement du personnel des entreprises et des membres des organisations professionnelles. En France, France Compétences rappelle que depuis le 1er janvier 2022, l'accès aux fonds publics ou mutualisés exige la certification Qualiopi. Richard SALANON ne l'affiche pas : prévoyez ce budget sans prise en charge, sauf confirmation écrite contraire.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quel piège rend une formation Odoo inutile dès la première semaine ?",
            'texte' => "Former des équipes sur une base mal paramétrée. Si les taxes sont fausses, si les droits d'accès ne correspondent pas aux postes ou si le plan comptable est mal posé, la formation grave ces erreurs dans les habitudes, et chaque correction ultérieure obligera à réapprendre. C'est pourquoi le cadrage commence par la lecture de votre base, et pourquoi un défaut de paramétrage est signalé avant la formation, chiffré à part, et non découvert pendant la première session devant les participants.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs d'utilisation coûtent le plus cher, et comment la formation les évite-t-elle ?",
            'intro' => "Ces erreurs se voient dans presque toutes les bases observées. Aucune ne vient du logiciel : ce sont des gestes, et un geste s'apprend.",
            'items' => [
                ['titre' => "Régulariser après coup", 'texte' => "La marchandise part, la saisie suit le lendemain, ou jamais. Entre-temps, le stock affiché ment, et les régularisations en série rendent l'historique illisible. La formation apprend à saisir pendant l'opération, comme une partie du geste, et non comme une paperasse d'après."],
                ['titre' => "Créer des doublons de clients ou d'articles", 'texte' => "Chaque vendeur crée son client, avec une orthographe différente. Dix minutes de règles de recherche et de nommage évitent des mois de nettoyage. La documentation d'Odoo prévient d'ailleurs que la fusion de contacts est irréversible : mieux vaut ne pas créer le doublon."],
                ['titre' => "Partager un seul compte", 'texte' => "Tout le monde travaille sous le même utilisateur, souvent administrateur. Plus aucune traçabilité, aucun droit différencié, et les erreurs deviennent anonymes. Chacun repart avec son compte et les droits de son poste."],
                ['titre' => "Laisser les documents à mi-chemin", 'texte' => "Devis jamais confirmés, livraisons jamais validées, factures restées en brouillon : les rapports comptent alors des choses qui n'existent pas. Le cycle de vie des documents est le savoir le plus rentable de toute la formation."],
                ['titre' => "Modifier une facture validée", 'texte' => "La documentation d'Odoo est claire : émettre un avoir est la seule méthode légale pour annuler, rembourser ou modifier une facture validée. Le parcours facturation fait pratiquer l'avoir partiel et total jusqu'à ce qu'il devienne un réflexe."],
                ['titre' => "Sauter l'inventaire", 'texte' => "Sans inventaire régulier et validé, l'écart entre stock théorique et stock réel grandit jusqu'à ce que plus personne ne croie le système. Le parcours stock se termine donc par un inventaire réel, mené jusqu'à la validation."],
                ['titre' => "Payer une facture fournisseur avant la réception", 'texte' => "Une facture qui arrive avant la marchandise est vite réglée par habitude. Le parcours achats apprend à la contrôler sur les quantités reçues, et à utiliser le rapprochement à trois quand votre paramétrage l'active."],
                ['titre' => "Garder un tableur « pour être sûr »", 'texte' => "La ressaisie parallèle double le travail et crée deux vérités. Si une équipe en a besoin, c'est qu'un écran ou un rapport lui manque : le retour à un mois sert à le repérer et à le traiter."],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => "À quels signes voit-on qu'une équipe contourne Odoo et qu'il est temps de la former ?",
            'items' => [
                "Les équipes ressaisissent dans un tableur ce qui existe déjà dans Odoo.",
                "Le stock affiché diffère du stock du magasin, et plus personne ne s'en étonne.",
                "Des commandes sont créées après la livraison, pour régulariser.",
                "Un même client apparaît sous plusieurs orthographes.",
                "Plusieurs personnes travaillent sous le même identifiant et le même mot de passe.",
                "Des inventaires ont été ouverts et jamais validés.",
                "Une seule personne sait faire les opérations importantes, et ses congés bloquent la facturation.",
                "Les rapports mensuels sont reconstruits à la main, avec des chiffres qui se contredisent.",
                "Les nouveaux arrivants apprennent en imitant les anciens, mauvaises habitudes comprises.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, langue, données personnelles : que change le contexte local ?",
            'paragraphes' => [
                "La connexion décide de l'organisation des séances. Au Bénin, le tableau de bord de l'Observatoire de l'internet publié par l'ARCEP recense, au 31 mars 2026, 11 560 567 abonnements actifs à l'internet mobile, contre 128 222 abonnements à l'internet fixe, soit un taux de pénétration du fixe de 0,95 %. Beaucoup de participants se connectent donc par les données mobiles. En salle, une connexion principale et une connexion de secours sont vérifiées la veille ; à distance, les fiches sont envoyées à l'avance et chaque séance prévoit un repli, comme un partage de connexion ou un report court.",
                "L'hébergement compte aussi. Le contrat de service d'Odoo Online, consulté le 5 octobre 2026, indique que les bases sont hébergées dans la région choisie (Europe, Amériques, Asie-Pacifique, Moyen-Orient et Asie du Nord, ou Océanie) et que les sauvegardes sont répliquées dans des centres de données en Europe et au Canada, sans possibilité d'en restreindre les régions. Pour une entreprise béninoise, l'article 391 de la loi n° 2017-20 portant code du numérique soumet le transfert de données personnelles vers un État tiers à un niveau de protection équivalent constaté par l'Autorité, et à son autorisation préalable : la question se règle avec votre conseil, avant la mise en service.",
                "Pendant la formation elle-même, la règle est de toucher le moins possible aux données réelles. L'article 383 de la même loi exige des données adéquates, pertinentes et non excessives, et l'article 426 cite la pseudonymisation parmi les mesures de sécurité. En Europe, le guide pratique de la CNIL sur la sécurité des données personnelles, version 2024 mise à jour en 2026, recommande un identifiant unique par utilisateur, l'interdiction des comptes partagés, une revue au moins annuelle des habilitations, et des données fictives ou anonymisées pour les tests. La copie de formation est donc limitée aux participants, puis supprimée.",
                "Les sessions se tiennent en français. Quand une partie de l'équipe lit peu le français, le rythme est adapté et les fiches réflexes deviennent très visuelles, une capture par étape, pour servir de repère sans longue lecture. Un relais interne bilingue est formé en priorité et devient le référent du groupe. Les échanges avec les clients par messagerie peuvent ensuite être reliés à Odoo : c'est le sujet de la formation <a href=\"/formations/whatsapp-odoo-dolibarr-crm\">WhatsApp relié à Odoo, Dolibarr et au CRM</a>.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi se former à Odoo avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il forme sur ce qu'il pratique. Avec " . $ans . " ans d'expérience dans le numérique et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il déploie Odoo et Dolibarr pour des entreprises, construit des automatisations et intègre l'intelligence artificielle dans des logiciels existants. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux logiciels de gestion.",
                "Il a travaillé au Bénin, en Côte d'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Il n'affiche aucune certification de l'éditeur d'Odoo : ce qu'il transmet vient de bases réelles, observées poste par poste, et non d'un catalogue de modules.",
                "Sa façon de former tient en quelques engagements vérifiables : une réponse sous 24 heures, un cadrage qui peut conclure qu'une formation n'est pas la bonne réponse, des exercices sur vos propres écrans, une tâche complète réalisée seul comme critère de réussite, et des supports qui restent à l'entreprise après son départ. Aucun résultat invérifiable n'est promis. Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays où il intervient sur la page <a href=\"/zones/\">zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former vos équipes à Odoo ?",
            'texte' => "Vérifiez d'abord que la base est prête, donnez un compte à chaque personne, formez par poste et sur vos propres écrans, terminez chaque session par une tâche réalisée seul, et revenez un mois plus tard. Les autres formations du domaine figurent sur la page <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>, et l'ensemble du catalogue sur la page des <a href=\"/formations/\">formations</a>.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous rendre vos équipes autonomes sur Odoo ?",
            'texte'  => "Indiquez le nombre d'utilisateurs, leurs postes, votre version et votre hébergement, et ce qui bloque aujourd'hui : vous recevez une réponse sous 24 heures et une proposition de cadrage gratuit.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un cadrage'],
        ],
    ],

    'faq' => [
        ['q' => "Vous n'avez pas installé notre Odoo : pouvez-vous quand même former nos équipes ?", 'r' => "Oui, c'est même le cas le plus fréquent. Un accès en lecture à votre base est demandé avant le cadrage pour en vérifier l'état : la formation porte sur votre Odoo tel qu'il est, pas sur un Odoo idéal. Si un défaut de paramétrage gêne la formation, il est signalé avant, avec un chiffrage séparé."],
        ['q' => "Quelles versions d'Odoo couvrez-vous ?", 'r' => "Les éditions Community et Enterprise des versions en usage courant, de la 20.0, sortie en septembre 2026, aux versions plus anciennes encore installées. Les écrans changent d'une version à l'autre : c'est pour cela que les exercices et les fiches réflexes sont faits sur votre base et non sur des captures génériques."],
        ['q' => "Combien de personnes par session ?", 'r' => "De 3 à 6 personnes du même métier, un peu moins à distance. Au-delà, le formateur ne peut plus reprendre chaque écran, et c'est précisément cette prise en main individuelle qui fait la valeur de la session."],
        ['q' => "La formation peut-elle se faire entièrement à distance ?", 'r' => "Oui, en visioconférence avec partage d'écran et prise en main de votre base, en séances de 2 à 3 heures. Pour une équipe peu à l'aise avec l'ordinateur ou une première prise en main, une session sur place ou une formule mixte donne de meilleurs résultats."],
        ['q' => "Nos données réelles peuvent-elles servir sans risque pendant la formation ?", 'r' => "Oui, si votre hébergement permet une copie de la base : les participants manipulent vos vrais articles et clients sans toucher à la production, la copie est réservée aux participants puis supprimée. Sans copie possible, les exercices se limitent à des documents de test clairement marqués."],
        ['q' => "Combien de temps prévoir pour une PME de dix personnes ?", 'r' => "Dans le cas courant, une demi-journée d'observation, deux ou trois parcours d'une demi-journée, le socle commun et le retour à un mois, soit 2 à 3 jours de présence répartis sur 5 à 6 semaines. Le calendrier précis est fixé au devis, après l'observation."],
        ['q' => "Que reste-t-il à l'entreprise après la formation ?", 'r' => "Les fiches réflexes de chaque poste, capturées dans votre base et modifiables, la convention de nommage validée, la liste des écarts relevés pendant l'observation, des comptes utilisateurs alignés sur les postes réels et la demi-journée de retour à un mois."],
        ['q' => "La comptabilité OHADA est-elle couverte ?", 'r' => "La formation couvre la facturation, les règlements et les exports destinés au comptable. Le plan comptable, les journaux, la TVA et les états financiers relèvent de la formation Odoo comptabilité SYSCOHADA, et du paramétrage à cadrer avec votre cabinet : former sur un plan comptable mal posé reviendrait à graver ses erreurs."],
        ['q' => "La formation couvre-t-elle le point de vente d'Odoo ?", 'r' => "Oui, sous forme d'un parcours d'une demi-journée pour les commerces qui l'utilisent : ouverture et clôture de caisse, encaissements, retours, lien avec le stock. L'observation vérifie d'abord que le stock est tenu avec discipline, sans quoi la caisse reproduit ses écarts."],
        ['q' => "Formez-vous aussi aux ressources humaines et à la paie ?", 'r' => "À l'utilisation courante : congés, notes de frais, fiches des salariés. Le paramétrage de la paie dépend du droit social de chaque pays et se cadre avec votre comptable ou votre juriste ; il n'est pas improvisé en séance."],
        ['q' => "Comment formez-vous les nouveaux arrivants, plus tard ?", 'r' => "Les fiches réflexes servent d'abord à cela : un nouvel arrivant s'y forme à l'essentiel de son poste avec l'aide du référent. Pour une vague de recrutements ou un poste clé, une demi-journée peut être ajoutée à la demande."],
        ['q' => "Nos équipes lisent peu le français : comment faites-vous ?", 'r' => "Les sessions se font en français, à un rythme adapté, avec des fiches réflexes très visuelles, une capture par étape. Un relais interne bilingue est formé en priorité et devient le référent du groupe."],
        ['q' => "Combien coûte la formation ?", 'r' => "Le prix est fixé sur devis, après un cadrage gratuit. Il dépend du nombre de postes et de parcours, de l'état de votre base, du lieu et du parcours caisse. Les licences et l'hébergement d'Odoo restent à régler à l'éditeur ou à votre hébergeur."],
        ['q' => "Nos données restent-elles confidentielles pendant l'observation et la formation ?", 'r' => "Oui. Les accès sont nominatifs et limités dans le temps, et un engagement de confidentialité peut être signé avant l'observation. Rien de ce qui est vu chez un client ne circule ailleurs."],
    ],

    'sources' => [
        ['titre' => "Odoo, documentation : support standard et étendu des versions (Standard and extended support)", 'url' => 'https://www.odoo.com/documentation/master/administration/standard_extended_support.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page Tarification", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Odoo, comparaison des éditions Community et Enterprise", 'url' => 'https://www.odoo.com/fr_FR/page/editions', 'date' => '2026-10-05'],
        ['titre' => "Odoo, contrat de niveau de service de l'hébergement Odoo Online (Cloud Hosting SLA)", 'url' => 'https://www.odoo.com/cloud-sla', 'date' => '2026-10-05'],
        ['titre' => "Odoo, documentation : fusion des contacts (Merge contacts)", 'url' => 'https://www.odoo.com/documentation/master/applications/essentials/contacts/merge.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, documentation : ajustements d'inventaire (Inventory adjustments)", 'url' => 'https://www.odoo.com/documentation/master/applications/inventory_and_mrp/inventory/warehouses_storage/inventory_management/count_products.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, documentation : avoirs et remboursements (Credit notes and refunds)", 'url' => 'https://www.odoo.com/documentation/master/applications/finance/accounting/customer_invoices/credit_notes.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, documentation : droits d'accès et rôles des utilisateurs (Access rights)", 'url' => 'https://www.odoo.com/documentation/master/applications/general/users/access_rights.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, documentation : politiques de contrôle des achats et rapprochement à trois (Control policies)", 'url' => 'https://www.odoo.com/documentation/master/applications/inventory_and_mrp/purchase/manage_deals/control_bills.html', 'date' => '2026-10-05'],
        ['titre' => "ARCEP Bénin, Observatoire de l'internet, tableau de bord au 31 mars 2026", 'url' => 'https://arcep.bj/wp-content/uploads/2026/05/Observatoire_Internet_T1_2026_TaB.pdf', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 383, 391 et 426)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, guide pratique RGPD : sécurité des données personnelles, version 2024 mise à jour en 2026", 'url' => 'https://www.cnil.fr/sites/default/files/2026-05/cnil_guide_securite_personnelle.pdf', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, procédures d'habilitation des opérateurs de formation", 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, Fonds de financement de la formation professionnelle et technique, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-dirigeants', 'odoo-comptabilite-syscohada', 'adoption-erp', 'odoo-ia', 'whatsapp-odoo-dolibarr-crm', 'dolibarr-utilisateurs'],
        'services'    => ['integration-odoo'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
