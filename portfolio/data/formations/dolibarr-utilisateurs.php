<?php
// ============================================================
// data/formations/dolibarr-utilisateurs.php · Fiche formation « Dolibarr pour
// vos équipes » (vague 1B, lot A, domaine ERP et outils de gestion).
// Reprend l'ancienne page /formation-dolibarr (cycle de vente complet,
// produits et stock, achats, suivi et exports ; une journée pour la personne
// qui tient la gestion, une demi-journée par groupe de métier, mise à niveau
// type d'une journée et demie ; second utilisateur, convention de nommage,
// sauvegarde testée, reprise limitée) ; ses prix sont ignorés.
// Angle propre : le cycle complet d'une PME dans Dolibarr, du devis au
// règlement. Sœurs non traitées : dolibarr-ia, adoption-erp, crm-pipeline.
// Le pilier /services/integration-dolibarr (prestation) n'est pas repris.
// Sources consultées le 05/10/2026 (wiki et dépôt de Dolibarr, DoliCloud,
// gouv.bj, impots.gouv.fr, BCEAO, CNIL, FDFP, SGG, 3FPT, France Compétences).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Dolibarr pour vos équipes : tenir tout le cycle de gestion, du devis signé au règlement encaissé, sans ressaisie ni facture effacée',
    'title'   => 'Formation Dolibarr : du devis au règlement | Richard SALANON',
    'meta'    => 'Formation Dolibarr sur votre instance : devis, commandes, factures, avoirs, achats, stock et règlements Mobile Money, en séance individuelle ou par métier.',
    'en_bref' => 'Une formation pratique pour que Dolibarr porte toute la gestion courante d\'une PME, d\'une association ou d\'un commerce : tiers, articles, devis, commandes, factures, avoirs, règlements, achats, stock et exports pour le comptable. Elle s\'adresse à la personne qui tient la gestion au quotidien et aux équipes qui se partagent ventes, achats et stock, qu\'elles découvrent l\'outil ou qu\'elles héritent d\'une instance mal exploitée. Le parcours complet dure deux jours en quatre demi-journées ; une personne qui cumule les rôles devient autonome en une journée, et une équipe compte une demi-journée par groupe de métier. Intra, inter, à distance ou hybride, toujours sur votre propre instance ; le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'erp-gestion',
    'forte'   => true,
    'duree'   => '2 jours (4 demi-journées) ; 1 jour en séance individuelle',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : votre instance, vos tiers et vos articles',
            'duree'  => '3 h 30',
            'points' => [
                'Tour guidé de votre Dolibarr tel qu\'il est installé : modules activés, menus utiles à chaque poste, ce qui a été masqué et pourquoi.',
                'Tiers : prospect, client, fournisseur, ou les deux à la fois ; chercher avant de créer, repérer et fusionner les doublons existants.',
                'Écriture en séance de la convention de nommage des tiers et des articles, validée par la direction avant la pause.',
                'Articles et services : référence, libellé, prix de vente, taux de taxe, unité, catégorie, et ce qui distingue un produit stocké d\'un service.',
                'Décision de reprise : quels clients actifs, quels articles vivants et quelles factures impayées entrent dans le système dès le premier jour.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : le cycle de vente, du devis au règlement',
            'duree'  => '3 h 30',
            'points' => [
                'Le devis : brouillon à référence provisoire, validation et numéro définitif, envoi du PDF par courriel, classement en signé ou refusé.',
                'La commande client issue du devis signé, puis l\'expédition et le bon de livraison quand votre activité les utilise.',
                'La facture créée depuis la commande, la facture d\'acompte pour les ventes payées d\'avance, la relecture avant validation.',
                'Les règlements : total ou partiel, en espèces, par virement, par carte ou par Mobile Money, et la lecture du reste à payer.',
                'Exercice sans aide : une vente réelle de votre semaine déroulée par chacun, du premier au dernier écran, jusqu\'à la relance d\'un impayé.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : corriger proprement, acheter, tenir le stock',
            'duree'  => '3 h 30',
            'points' => [
                'Corriger une facture validée : avoir, facture de remplacement, classement en payée partiellement avec escompte ou en abandonnée.',
                'Le circuit d\'achat : commande fournisseur, réception, facture d\'achat comparée à ce qui a été reçu, règlement du fournisseur.',
                'Le stock : à quel moment il bouge chez vous (commande, expédition ou facture, selon la règle choisie), stock réel et stock prévisionnel.',
                'Corrections motivées, transferts entre entrepôts, inventaire d\'une famille d\'articles et seuils d\'alerte avant rupture.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : suivre, exporter, assurer la continuité',
            'duree'  => '3 h 30',
            'points' => [
                'Les listes filtrées qui remplacent le cahier : devis en attente de réponse, commandes à livrer, factures échues triées par ancienneté.',
                'Les exports attendus par votre comptable, dans le format convenu avec lui, et les chiffres de l\'activité à consulter chaque semaine.',
                'Un second utilisateur formé au minimum vital : émettre une facture et encaisser un règlement quand la titulaire est absente.',
                'Comptes nominatifs, droits par groupe de métier, sauvegarde vérifiée par une restauration réelle.',
                'Évaluation individuelle sur un cas tiré au sort, puis présentation des modules utiles selon votre activité : projets, contrats, banque, adhérents, caisse.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées ; 1 jour pour une personne seule ; une demi-journée par groupe de métier'],
        ['l' => 'Public', 'v' => 'Gérants, assistantes de direction, comptables, vendeurs, magasiniers et acheteurs'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride ; séance individuelle ou groupes de six au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire dans Dolibarr à la fin de la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Dolibarr s\'installe en quelques minutes et ses écrans paraissent évidents. C\'est sa qualité, et c\'est aussi son piège : chacun s\'y met sans méthode, prend ses habitudes, et six mois plus tard un même client existe en trois exemplaires, les articles portent des références improvisées et plus personne ne sait ce que signifie le statut d\'une facture. Bien conduit, le logiciel porte toute la gestion d\'une petite entreprise ; laissé à l\'improvisation, il se réduit à une imprimante de factures un peu plus élégante, pendant que le stock reste sur un cahier et les relances dans la tête de quelqu\'un. La formation vise le premier scénario, sur votre instance et avec vos données.',
                'À la fin, chaque participant sait faire seul, sur son poste, six opérations vérifiées en fin de session. Créer un tiers ou un article sans doublon, en appliquant la convention écrite le premier matin. Dérouler une vente entière, du devis validé au règlement enregistré, en passant par la commande et l\'expédition quand votre activité les utilise. Corriger une facture validée par un avoir ou une facture de remplacement, sans jamais casser la numérotation. Enregistrer un paiement partiel et lire le reste à payer. Mener un achat de la commande fournisseur à l\'entrée en stock. Sortir la liste des impayés et l\'export attendu par le comptable.',
                'L\'installation, l\'hébergement et le paramétrage de fond, c\'est-à-dire les modules, la numérotation, les modèles de documents et les droits, relèvent de l\'<a href="/services/integration-dolibarr">intégration Dolibarr</a> : si l\'instance n\'existe pas encore, ou si ses réglages rendent les bons gestes impossibles, on commence par là. La tenue comptable en partie double, avec ses journaux et ses clôtures, se décide avec votre expert-comptable ; la formation s\'arrête aux pièces et aux exports qu\'il attend. Le choix d\'un ERP, la conduite d\'un projet de changement de logiciel, le pipeline commercial et l\'IA branchée sur Dolibarr ont leurs propres fiches, proposées en bas de page.',
                'Dolibarr équipe surtout des structures de petite taille, souvent sans service informatique, où une même personne prépare les devis, facture, suit le stock et relance. Cela change la pédagogie : des sessions plus courtes, plus individuelles, qui vont plus loin pour chaque personne puisque chacune tient plusieurs rôles. Une entreprise équipée d\'Odoo trouvera le même travail d\'adoption dans la <a href="/formations/odoo-utilisateurs">formation Odoo pour vos équipes</a>, et le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo et Dolibarr</a> aide à trancher quand le choix n\'est pas fait. Relier Dolibarr à WhatsApp pour les commandes et les relances est l\'objet de la formation <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi un logiciel aussi simple d\'apparence mérite-t-il une vraie formation ?',
            'paragraphes' => [
                'Le passage du cahier ou du tableur à Dolibarr est plus culturel que technique. Le cahier accepte tout : une rature, une ligne sautée, un montant corrigé au stylo trois jours plus tard. Dolibarr impose un ordre et garde la trace de chaque étape. Une facture validée reçoit son numéro définitif ; une commande validée s\'annule mais ne s\'efface plus, puisque le <a href="https://wiki.dolibarr.org/index.php/Module_Commandes_Clients">wiki du module Commandes clients</a>, consulté le 5 octobre 2026, précise qu\'une commande ne peut être supprimée qu\'à l\'état de brouillon. Cette rigueur rend les chiffres fiables, et c\'est elle qui déroute pendant les premières semaines.',
                'Ce qu\'elle rapporte se démontre pendant la session, sur vos documents : des relances qui partent chaque lundi depuis une liste au lieu de dépendre d\'un souvenir, un chiffre d\'affaires du mois consultable en deux clics, un historique client qui reste en place quand le vendeur s\'en va, un comptable qui reçoit un fichier au lieu d\'un carton de pièces. Les participants comprennent pourquoi ils cliquent à tel endroit, et c\'est cette compréhension qui les fait tenir quand la pression du comptoir revient.',
                'Le second piège tient à la souplesse de l\'outil. Il offre souvent plusieurs chemins vers un même résultat : facturer directement sans devis ni commande, encaisser sans rattacher le paiement à la bonne pièce, sortir un article du stock à la main. Certains raccourcis sont légitimes, comme la vente simple au comptoir ; d\'autres coupent le fil entre ce qui a été promis, livré et facturé. La formation trace, pour votre activité, le chemin normal et les raccourcis autorisés, puis l\'écrit sur une fiche réflexe d\'une page.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'Les utilisateurs de Dolibarr sont rarement des informaticiens. Ce sont des personnes qui gèrent, vendent, achètent ou rangent, et qui ont besoin d\'un outil qui fonctionne même quand elles ne sont pas là.',
            'items' => [
                ['titre' => 'La personne qui tient la gestion au quotidien', 'texte' => 'Assistante de direction, comptable, ou gérant lui-même dans les plus petites structures : elle cumule devis, factures, achats et relances. C\'est le cas type, traité en séance individuelle ou à deux, et le format qui va le plus loin pour une seule personne.'],
                ['titre' => 'Les équipes réparties par métier', 'texte' => 'Vendeurs, magasiniers, acheteurs, responsable administratif : chacun suit la demi-journée de son métier, puis une séance commune montre comment les documents passent d\'un poste à l\'autre et qui valide quoi.'],
                ['titre' => 'Les structures qui viennent d\'être équipées', 'texte' => 'Former avant que les habitudes se prennent coûte bien moins cher que nettoyer après. Une journée de formation au démarrage évite des semaines de doublons à fusionner et de statuts à reprendre.'],
                ['titre' => 'Les instances héritées', 'texte' => 'Un Dolibarr installé il y a des années par un prestataire reparti depuis, qui ne sert plus qu\'à imprimer quelques factures. On le remet au centre de la gestion, après un état des lieux qui dit ce qui peut être gardé.'],
                ['titre' => 'Les équipes qui quittent le tableur', 'texte' => 'Elles perdent la liberté d\'Excel et gagnent un référentiel unique. La formation aide à accepter cet échange et à garder un tableur seulement là où il sert encore ; le socle tableur lui-même relève de la <a href="/formations/excel-google-sheets">formation Excel et Google Sheets</a>.'],
                ['titre' => 'Prérequis', 'texte' => 'Savoir utiliser un navigateur, un clavier et une messagerie. Aucune notion comptable n\'est exigée pour le cycle de vente ; pour la partie exports, connaître ce que sont une taxe sur la valeur ajoutée, une échéance et un client débiteur fait gagner du temps.'],
                ['titre' => 'Matériel', 'texte' => 'Un ordinateur par participant avec un navigateur récent et un accès à l\'instance ou à sa copie de test, un téléphone pour l\'usage mobile, et vos documents actuels (un devis, une facture, un bon de livraison) envoyés une semaine avant la session.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur leur propre instance ?',
            'items' => [
                ['titre' => 'Lister vos opérations courantes', 'duree' => 'Avant la session', 'texte' => 'Vous notez, dans vos mots et sans vocabulaire logiciel, les dix opérations les plus fréquentes de votre gestion : « un client commande par téléphone », « un revendeur règle en trois fois », « un fournisseur livre la moitié de la commande ». Cette liste, et non le menu de Dolibarr, fixe l\'ordre des exercices.'],
                ['titre' => 'Faire l\'état des lieux de l\'instance', 'duree' => '45 minutes, au début', 'texte' => 'Modules activés, règles de numérotation, modèles de documents, droits, nombre de tiers en double, articles sans référence. Si un réglage de fond rend un geste faux, il est signalé avant de construire le programme, chiffré séparément, et vous décidez.'],
                ['titre' => 'Écrire la convention de nommage', 'duree' => '30 minutes', 'texte' => 'Comment s\'écrit le nom d\'un client (raison sociale, sigle, ville), comment se construit une référence d\'article (famille, modèle, taille), qui a le droit de créer un tiers. Une page, validée en séance, imprimée et posée à côté du poste.'],
                ['titre' => 'Dérouler une vente réelle de bout en bout', 'duree' => '1 h 30', 'texte' => 'Un devis tiré de votre semaine, validé, envoyé, signé, transformé en commande, livré, facturé, puis réglé en deux fois, dont une par Mobile Money. Chaque participant le fait seul pendant que le formateur passe derrière chaque écran.'],
                ['titre' => 'Réparer des erreurs préparées', 'duree' => '45 minutes', 'texte' => 'Une facture validée porte un mauvais prix, une autre a été émise au mauvais client, une troisième ne sera jamais payée. Chacun choisit le geste adapté, avoir, remplacement ou abandon, et explique son choix au groupe.'],
                ['titre' => 'Boucler un achat', 'duree' => '1 heure', 'texte' => 'Commande fournisseur, réception partielle, facture d\'achat comparée aux quantités reçues, règlement. L\'exercice montre comment éviter de payer deux fois, ou de payer une marchandise qui n\'est jamais arrivée.'],
                ['titre' => 'Compter une famille d\'articles', 'duree' => '45 minutes', 'texte' => 'Un inventaire réel sur un rayon, l\'écart constaté, la correction saisie avec son motif. On voit qu\'un stock juste dépend d\'abord de la règle de mouvement choisie et de la discipline des réceptions, pas du comptage de fin d\'année.'],
                ['titre' => 'Évaluation sans aide', 'duree' => '45 minutes, en fin de parcours', 'texte' => 'Un cas tiré au sort parmi vos opérations courantes, exécuté seul du premier au dernier écran. Le résultat est binaire : acquis, ou à revoir pendant la séance de retour.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel geste choisir quand une facture déjà validée est fausse ?',
            'legende' => 'Les corrections prévues par Dolibarr pour une facture client validée, d\'après le wiki du module Factures clients consulté le 5 octobre 2026, avec la situation de terrain où chacune s\'applique.',
            'entetes' => ['Situation', 'Geste dans Dolibarr', 'Ce qui se passe', 'Erreur à éviter'],
            'lignes'  => [
                ['Un prix ou une quantité faux, facture pas encore payée', 'Facture de remplacement', 'Une seule remplaçante par facture ; dès qu\'elle est validée, l\'originale passe d\'elle-même à l\'état « abandonnée »', 'Effacer la facture et la refaire : la suite des numéros présente un trou'],
                ['Marchandise retournée, remise accordée après coup, facture déjà réglée', 'Facture d\'avoir', 'Un document négatif rattaché à la facture d\'origine, remboursé ou déduit d\'un achat suivant', 'Corriger le montant dans un tableur à part, que personne ne retrouvera'],
                ['Le client a payé un peu moins pour un règlement anticipé', 'Paiement saisi, puis « classer payée partiellement » avec le motif d\'escompte', 'Le solde est fermé avec une raison écrite et lisible par le comptable', 'Laisser la facture ouverte : la relance part pour un reste qui n\'existe pas'],
                ['Une facture ne sera jamais payée : client disparu, erreur de destinataire', 'Classement en « abandonnée », avec le motif', 'La pièce quitte la liste des impayés sans disparaître de l\'historique', 'La laisser des mois dans les impayés, ce qui fausse toute la trésorerie prévisionnelle'],
                ['La facture est encore en brouillon', 'Modifier ou supprimer librement', 'Un brouillon ne porte qu\'une référence provisoire, sans numéro définitif', 'Valider « pour voir le PDF » avant d\'avoir relu les lignes'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels statuts traverse chaque document, et que disent-ils à l\'équipe ?',
            'legende' => 'Les étapes des documents de vente et d\'achat telles que les décrit le wiki de Dolibarr (pages consultées le 5 octobre 2026), et la question de gestion à laquelle chaque liste répond.',
            'entetes' => ['Document', 'Statuts successifs', 'Ce que l\'équipe en tire'],
            'lignes'  => [
                ['Devis (proposition commerciale)', 'Brouillon, validé, puis signé ou refusé, enfin facturé', 'Les devis validés sans réponse forment la liste des relances commerciales ; un devis signé fait passer le prospect au rang de client automatiquement'],
                ['Commande client', 'Brouillon, validée, expédition en cours, livrée, puis traitée une fois livrée et facturée ; annulée le cas échéant', 'Les commandes validées non livrées disent ce qui reste à préparer ; une fois validée, une commande s\'annule mais ne se supprime plus'],
                ['Facture client', 'Brouillon, validée et impayée, payée partiellement, payée, ou abandonnée', 'Les factures validées non soldées, triées par échéance, remplacent le cahier des relances'],
                ['Facture fournisseur', 'Brouillon, validée, règlement commencé, payée', 'Le wiki qualifie la validation d\'irréversible : une erreur se corrige par un avoir ou une facture de remplacement, et une facture réglée doit être classée payée pour sortir des dettes'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée, et que se passe-t-il ensuite ?',
            'items' => [
                ['titre' => 'Sur votre instance ou sur sa copie fidèle', 'texte' => 'Les exercices se font sur une copie de test de votre Dolibarr, avec vos tiers, vos articles et vos modèles de documents. Les captures des fiches réflexes viennent de vos écrans : un support qui montre un autre paramétrage fait perdre du temps à chaque page.'],
                ['titre' => 'Des groupes très petits', 'texte' => 'Séance individuelle ou à deux pour la personne qui tient la gestion, six participants au plus pour une demi-journée par métier. Chacun garde les mains sur le clavier ; le formateur ne montre que le premier geste, puis observe.'],
                ['titre' => 'Un rythme compatible avec le comptoir', 'texte' => 'Deux heures de calme par participant valent mieux qu\'une journée interrompue toutes les cinq minutes. En boutique, les séances se placent hors des heures d\'affluence, et le remplaçant au comptoir est prévu à l\'avance.'],
                ['titre' => 'Toujours un second utilisateur', 'texte' => 'Même dans une équipe de trois personnes, une deuxième personne apprend le minimum vital : émettre une facture et encaisser un paiement. Une heure suffit, et la facturation ne s\'arrête plus quand la titulaire est en congé ou malade.'],
                ['titre' => 'Des supports qui restent chez vous', 'texte' => 'Fiches réflexes du cycle complet capturées sur votre instance (devis, commande, facture, avoir, règlement, relance), convention de nommage, procédure de sauvegarde d\'une page, et liste de ce qui a été volontairement laissé hors du système lors de la reprise.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Un canal direct pour les questions d\'usage, et une séance de retour environ un mois plus tard pour traiter ce que le travail réel a fait apparaître. Les journées peuvent aussi s\'étaler : le cycle de vente d\'abord, deux semaines de pratique, puis la suite.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils et quelles versions sont utilisés, et à quel coût ?',
            'legende' => 'Prix publiés par les éditeurs, relevés le 5 octobre 2026 sur leurs pages officielles, hors taxes. Ils se paient à l\'éditeur ou à l\'hébergeur, jamais au formateur ; la formation porte sur la version installée chez vous.',
            'entetes' => ['Outil', 'Version ou offre', 'Coût publié', 'Rôle dans la formation'],
            'lignes'  => [
                ['Dolibarr ERP CRM', '24.0.1, publiée sur GitHub le 7 septembre 2026', 'Gratuit, logiciel libre', 'Le logiciel enseigné ; une version plus ancienne est acceptée, les écarts d\'écrans sont signalés dans les supports'],
                ['DoliCloud Basic', 'Hébergement en ligne de Dolibarr', '14 € par mois et par utilisateur, hors taxes', 'Une façon d\'héberger l\'instance : 4 Go d\'espace, 2 000 appels d\'API par mois, sauvegardes quotidiennes'],
                ['DoliCloud Premium', 'Hébergement en ligne de Dolibarr', '30 € par mois, plus 15 € par mois et par utilisateur, hors taxes', '20 Go d\'espace et 20 000 appels d\'API par mois, utile quand d\'autres outils se connectent'],
                ['Hébergement à votre nom ou serveur au bureau', 'Instance installée par votre intégrateur', 'Selon l\'hébergeur choisi', 'La formation est identique ; seul le chemin d\'accès change'],
                ['DoliStore', 'Place de marché officielle des modules', 'Modules gratuits ou payants', 'Présentée quand un besoin dépasse le cœur du logiciel ; rien n\'y est acheté pendant la formation'],
                ['Navigateur et téléphone', 'Version récente', 'Gratuit', 'Dolibarr s\'ouvre dans le navigateur, y compris sur téléphone pour consulter un prix, un stock ou saisir une commande'],
                ['Tableur', 'Excel, LibreOffice Calc ou Google Sheets', 'Selon la suite utilisée', 'Ouvrir les exports et préparer les fichiers de reprise des tiers et des articles'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation selon votre activité, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Quincaillerie ou commerce de détail à Cotonou', 'probleme' => 'Le Dolibarr installé l\'an dernier sert à imprimer quelques factures ; le stock se tient sur un cahier et les ventes à crédit des artisans dans la mémoire du gérant.', 'solution' => 'Une journée individuelle pour la gérante sur le cycle complet et les paiements partiels, une demi-journée pour le magasinier sur les réceptions et l\'inventaire, et un vendeur formé au minimum vital de facturation.'],
                ['secteur' => 'Cabinet de services ou bureau d\'études à Abidjan', 'probleme' => 'Les devis partent d\'un modèle de traitement de texte sans numérotation, et personne ne sait quelles missions rapportent vraiment.', 'solution' => 'Devis, factures d\'acompte et relances dans Dolibarr, puis présentation du module Projets pour rattacher temps passé et dépenses à chaque affaire, une fois le cycle de vente acquis.'],
                ['secteur' => 'Association, coopérative ou ordre professionnel à Dakar', 'probleme' => 'Les cotisations sont suivies dans un tableur partagé, les relances s\'oublient, la liste des membres n\'est jamais à jour.', 'solution' => 'Module Adhérents pour les cotisations et les rappels, factures pour les prestations vendues, exports pour le trésorier ; dolibarr.org cite d\'ailleurs les associations parmi les publics du logiciel.'],
                ['secteur' => 'Négoce avec importations à Lomé ou à Ouagadougou', 'probleme' => 'Achats en euros chez des fournisseurs étrangers, ventes en francs CFA, et des factures d\'achat réglées deux fois faute de comparaison avec les réceptions.', 'solution' => 'Demi-journée achats et stock pour l\'acheteur et le magasinier : commande fournisseur, réception partielle, contrôle de chaque facture contre les quantités reçues avant tout paiement.'],
                ['secteur' => 'Boutique avec comptoir à Libreville', 'probleme' => 'Les ventes au comptoir ne font pas baisser le stock, et la caisse du soir ne correspond jamais aux factures du jour.', 'solution' => 'Remise en ordre des articles et des mouvements d\'abord ; le point de vente TakePOS n\'est présenté qu\'ensuite, et la formation dit franchement quand ce prérequis n\'est pas atteint.'],
                ['secteur' => 'TPE ou PME en France ou en Belgique', 'probleme' => 'Factures envoyées en PDF par courriel, réforme française de la facturation électronique qui approche, fichier clients soumis au RGPD.', 'solution' => 'Séances à distance de deux à trois heures, avec un point sur ce que la réforme change dans l\'émission et la réception des factures, et la liste des questions à poser à l\'intégrateur et à l\'expert-comptable.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir, et combien de temps prévoir ?',
            'legende' => 'Les formats possibles et leur durée habituelle. La durée exacte se fixe après l\'état des lieux de votre instance et la liste de vos opérations courantes.',
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Organisation'],
            'lignes'  => [
                ['Séance individuelle ou à deux', 'La personne qui tient la gestion, et son second', '1 journée', 'Les deux premières demi-journées resserrées autour de vos opérations, puis une heure pour le second utilisateur'],
                ['Intra par métier', 'Une équipe qui se partage ventes, achats et stock', 'Une demi-journée par groupe de métier, plus une séance commune', 'Groupes de six au plus, sur une copie de votre instance'],
                ['Mise à niveau d\'une instance héritée', 'Une structure équipée depuis longtemps qui sous-utilise l\'outil', '1 jour et demi', 'État des lieux le premier matin, cycle complet ensuite, second utilisateur et sauvegarde pour finir'],
                ['Parcours complet', 'Une équipe ou une personne qui veut couvrir tout le programme', '2 jours, en 4 demi-journées', 'Consécutifs, ou séparés par deux semaines de pratique réelle'],
                ['Inter-entreprises', 'Une ou deux personnes de structures différentes', '1 à 2 jours', 'Sur une instance de démonstration commune, sans aucune donnée interne'],
                ['À distance', 'Équipes réparties, structures en Europe ou au Canada', 'Séances de 2 à 3 heures', 'Visioconférence avec partage d\'écran, prise en main sur votre instance'],
                ['Hybride', 'Premier démarrage, équipe peu à l\'aise avec l\'ordinateur', 'Une journée en salle, puis des séances courtes', 'Prise en main sur place, à Cotonou ou dans vos locaux, suivi en visioconférence'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation Dolibarr, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Aucun montant n\'est publié : le devis est établi après un premier échange et un état des lieux de votre instance, et toute remise en ordre de fond est chiffrée à part, avant engagement. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Séance individuelle d\'une journée', 'prix' => 'Sur devis', 'inclus' => ['Cycle complet sur vos données', 'Fiches réflexes capturées sur votre instance', 'Second utilisateur formé au minimum vital', 'Séance de retour à un mois']],
                ['offre' => 'Formation intra par métier', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée par groupe de métier', 'Séance commune sur l\'enchaînement des documents', 'Convention de nommage écrite', 'Évaluation individuelle']],
                ['offre' => 'Mise à niveau d\'une instance héritée', 'prix' => 'Sur devis', 'inclus' => ['État des lieux de l\'instance', 'Décision de reprise écrite', 'Cycle complet sur les données réelles', 'Sauvegarde testée par une restauration']],
                ['offre' => 'Parcours complet de deux jours', 'prix' => 'Sur devis', 'inclus' => ['Les quatre demi-journées du programme', 'Exercices sur votre activité', 'Supports et attestation', 'Présentation des modules utiles à votre secteur']],
                ['offre' => 'Accompagnement après formation', 'prix' => 'Sur devis', 'inclus' => ['Canal direct pour les questions', 'Séances de suivi espacées', 'Relecture des premières semaines d\'usage']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes de métier.',
                'L\'état de l\'instance : doublons à fusionner, réglages à reprendre avant de former.',
                'Le nombre de modules couverts au-delà du cycle de vente : achats, stock, projets, adhérents, caisse.',
                'La préparation d\'une copie de test fidèle à votre paramétrage.',
                'Le lieu et les déplacements hors de Cotonou.',
                'Le mode : sur place, à distance ou hybride.',
                'La durée de l\'accompagnement après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il prendre en charge la formation ?',
            'paragraphes' => [
                'Peut-être, mais jamais d\'office : chaque fonds fixe ses propres conditions, relevées ici sur leurs sites officiels le 5 octobre 2026, et seule une réponse écrite du fonds engage quelque chose pour votre dossier. En Côte d\'Ivoire, la page des <a href="https://fdfp.ci/procedures-dhabilitation/">procédures d\'habilitation du FDFP</a> exige l\'habilitation de tout opérateur de formation privé, centres de formation internes compris, qui veut bénéficier de ses financements ; elle en exonère les structures situées hors du pays et les structures publiques, et l\'habilitation vaut une année. Demandez au FDFP comment une formation donnée par un prestataire installé au Bénin peut entrer dans votre plan.',
                'Au Bénin, le Secrétariat général du Gouvernement publie le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>, qui approuve les statuts du fonds de développement de la formation professionnelle continue et de l\'apprentissage ; les conditions en vigueur s\'obtiennent auprès du fonds. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> affiche quatre guichets, dont un consacré au financement du personnel des entreprises et des membres des organisations professionnelles, et une demande de financement en ligne.',
                'En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que depuis le 1er janvier 2022, l\'accès aux fonds des OPCO, des régions, de France Travail, de l\'Agefiph, de la Caisse des dépôts et de l\'État suppose la certification Qualiopi, délivrée par des organismes accrédités par le COFRAC. Richard SALANON ne détient ni cette certification, ni habilitation, ni agrément d\'un fonds : budgétez la formation sans prise en charge, et interrogez le fonds avant de signer. Le programme, les feuilles de présence et l\'attestation remis en fin de session restent utiles à tout dossier.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle habitude abîme le plus vite un Dolibarr bien démarré ?',
            'texte' => 'Contourner le logiciel dès qu\'il résiste. Une facture validée contient une erreur, le client attend, et quelqu\'un la refait à côté dans un traitement de texte, ou demande à l\'administrateur de l\'effacer. Chaque contournement casse la suite des numéros, sépare ce qui a été facturé de ce qui a été encaissé, et un contrôle qui remarque un trou dans la séquence pose des questions désagréables. La facture de remplacement ou l\'avoir prennent une minute et laissent un historique propre. C\'est pourquoi l\'exercice des erreurs préparées est obligatoire, et pourquoi la fiche réflexe de correction est la première affichée à côté du poste.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles autres erreurs voit-on dans les mois qui suivent, et comment les éviter ?',
            'intro' => 'Ces erreurs figuraient déjà sur l\'ancienne page de cette formation ; elles restent les plus fréquentes une fois le formateur parti.',
            'items' => [
                ['titre' => 'Facturer hors de la séquence', 'texte' => 'Créer la facture directement, sans devis ni commande, alors que votre activité les utilise : on perd le lien entre ce qui a été promis, livré et facturé. La séquence s\'ancre en formation, avec les raccourcis permis pour les ventes simples.'],
                ['titre' => 'Coder les articles au fil de l\'eau', 'texte' => 'Des références improvisées un jour de rush, et six mois plus tard trois codes pour le même produit, avec trois stocks faux. La convention écrite le premier matin se relit chaque fois qu\'un nouvel article arrive.'],
                ['titre' => 'Oublier les paiements partiels', 'texte' => 'Un client règle la moitié par Mobile Money, le versement n\'est pas saisi, et la relance part pour le montant total : la relation commerciale en souffre. Saisir chaque versement, même petit, fait partie des exercices obligatoires.'],
                ['titre' => 'Payer un fournisseur sans classer sa facture', 'texte' => 'Selon le wiki des factures fournisseurs, une facture qui n\'est pas classée payée reste considérée comme impayée malgré le règlement saisi. Le geste se fait au moment du paiement, jamais « plus tard ».'],
                ['titre' => 'Vouloir ressaisir tout l\'historique', 'texte' => 'Recopier trois ans de cahier épuise l\'équipe avant le premier jour d\'usage réel, pour un gain minime. On reprend les tiers actifs, les articles vivants et les impayés en cours ; le papier reste consultable en archive.'],
                ['titre' => 'Laisser une seule personne savoir', 'texte' => 'Quand la titulaire part en congé, la facturation s\'arrête. Le second utilisateur formé au minimum vital est une assurance qui coûte une heure de session.'],
                ['titre' => 'Croire à une sauvegarde jamais restaurée', 'texte' => 'Toute la gestion vit sur un serveur dont personne ne vérifie les copies. Une sauvegarde qui n\'a jamais été restaurée reste une hypothèse ; la formation se termine par une restauration réelle sur une machine de test.'],
                ['titre' => 'Ouvrir la caisse avant de tenir le stock', 'texte' => 'Le point de vente branché sur des articles mal codifiés multiplie les écarts à chaque vente. On discipline d\'abord les références et les mouvements, puis on ouvre la caisse.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Facture normalisée, facturation électronique, Mobile Money : que change le contexte local ?',
            'paragraphes' => [
                'Au Bénin, une facture produite par Dolibarr ne suffit pas toujours. L\'article du <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">portail du Gouvernement sur les factures normalisées</a>, publié le 27 février 2020 et consulté le 5 octobre 2026, la définit comme une facture qui porte, en plus des mentions habituelles, des éléments de sécurité de la DGI : numéro d\'identification de la machine, signature et code électronique, produits par des machines certifiées. Les entreprises assujetties à la TVA sont concernées, et la non-délivrance est punie d\'une amende de dix fois le montant de la facture, au moins 1 000 000 FCFA. La formation montre où la facture normalisée s\'insère dans votre circuit ; la façon de la relier à Dolibarr se décide avec votre intégrateur et votre comptable.',
                'En France, la page d\'<a href="https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation">impots.gouv.fr sur la réforme de la facturation électronique</a>, modifiée le 16 janvier 2026, fixe le calendrier : depuis le 1er septembre 2026, toutes les entreprises doivent recevoir leurs factures sous forme électronique, et les grandes entreprises comme les entreprises de taille intermédiaire doivent les émettre ainsi ; les PME et les micro-entreprises suivront le 1er septembre 2027. Pour une petite structure française équipée de Dolibarr, la session ajoute un point sur la réception des factures d\'achat et la liste des questions à poser à l\'intégrateur avant l\'échéance.',
                'Le Mobile Money est souvent le premier moyen d\'encaissement. Le <a href="https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024">rapport de la BCEAO sur les services financiers numériques</a>, publié le 13 mars 2026, compte 248 millions de comptes de monnaie électronique dans l\'UEMOA en 2024, contre 209 millions en 2023, et 3 705 726 points marchands, contre 1 752 454 l\'année précédente. Dans les exercices, un encaissement MTN ou Moov se saisit comme un mode de règlement à part, sur un compte propre à chaque opérateur, pour que le total de la journée se compare au relevé du portefeuille. L\'encaissement en ligne relève d\'un agrégateur, présenté dans le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a>.',
                'La connexion pèse sur l\'organisation : une instance hébergée en ligne ne se consulte plus quand le réseau tombe. Les supports sont envoyés en PDF avant la session, les exercices de lecture se préparent hors ligne, et chaque séance à distance prévoit une solution de repli. La langue compte aussi : l\'interface est en français, mais les fiches réflexes reprennent le vocabulaire de vos propres documents, pour qu\'un « bon de sortie » ne devienne pas une « expédition » incomprise.',
                'Un ERP est un fichier de personnes. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre la protection des données personnelles ; en Europe, le RGPD s\'applique. La fiche de la <a href="https://www.cnil.fr/fr/securite-gerer-les-habilitations">CNIL sur la gestion des habilitations</a>, mise à jour le 13 mars 2024, recommande des profils qui séparent les tâches, un accès limité aux seules données nécessaires, le retrait des droits au départ d\'une personne et une revue au moins annuelle. La formation applique ces règles à Dolibarr : un compte par personne, jamais de compte partagé, des droits par groupe de métier. Les réflexes de sécurité au-delà de l\'ERP relèvent de la formation <a href="/formations/cybersecurite-employes">cybersécurité pour les employés</a>.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres publiés faut-il connaître avant de former votre équipe ?',
            'items' => [
                ['valeur' => '24.0.1', 'libelle' => 'Version stable de Dolibarr publiée le 7 septembre 2026, relevée le 5 octobre 2026', 'source' => 'Dépôt GitHub de Dolibarr', 'url' => 'https://github.com/Dolibarr/dolibarr/releases/tag/24.0.1'],
                ['valeur' => '14 €', 'libelle' => 'Prix mensuel hors taxes par utilisateur de l\'offre DoliCloud Basic, avec une TVA nulle pour les utilisateurs situés hors d\'Europe (5 octobre 2026)', 'source' => 'DoliCloud, page des tarifs', 'url' => 'https://www.dolicloud.com/fr/fr-faq-pricing.php'],
                ['valeur' => '248 millions', 'libelle' => 'Comptes de monnaie électronique dans l\'UEMOA en 2024, contre 209 millions en 2023 (rapport publié le 13 mars 2026)', 'source' => 'BCEAO, services financiers numériques 2024', 'url' => 'https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024'],
                ['valeur' => '3 705 726', 'libelle' => 'Points marchands acceptant la monnaie électronique dans l\'UEMOA en 2024, plus du double de 2023', 'source' => 'BCEAO, services financiers numériques 2024', 'url' => 'https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024'],
                ['valeur' => '10 fois', 'libelle' => 'Montant de la facture retenu pour l\'amende en cas de non-délivrance d\'une facture normalisée au Bénin, avec un minimum de 1 000 000 FCFA (article du 27 février 2020)', 'source' => 'Gouvernement du Bénin, factures normalisées', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin'],
                ['valeur' => '1er septembre 2027', 'libelle' => 'Date à laquelle les PME et micro-entreprises françaises devront émettre leurs factures sous forme électronique (page modifiée le 16 janvier 2026)', 'source' => 'impots.gouv.fr', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi se former à Dolibarr avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il déploie Dolibarr et Odoo pour des entreprises, ce qui lui fait voir les instances le jour de l\'installation et plusieurs mois après, avec les doublons, les statuts mal compris et les sauvegardes jamais vérifiées que décrit cette page. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il enseigne depuis ce terrain. Il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Ses missions l\'ont mené dans quinze pays : onze en Afrique francophone (Bénin, Togo, Côte d\'Ivoire, Burkina Faso, Sénégal, Mali, Niger, Cameroun, Tchad, Gabon et RD Congo), puis la France, la Belgique, la Suisse et le Canada. Sa manière de former tient en engagements que vous pouvez vérifier : un état des lieux de l\'instance avant d\'écrire le programme, des exercices sur vos données, un second utilisateur toujours formé, une sauvegarde restaurée avant la fin, une séance de retour, une réponse sous 24 heures. Son parcours est sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/erp-gestion">ERP et outils de gestion</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Faites d\'abord l\'état des lieux de votre instance, écrivez la convention de nommage avant de créer le moindre article, apprenez à corriger par avoir ou remplacement plutôt qu\'à effacer, saisissez chaque paiement partiel, formez toujours un second utilisateur et restaurez une sauvegarde au moins une fois. Le reste du catalogue est sur la page <a href="/formations/">formations</a>.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous que Dolibarr tienne enfin toute votre gestion ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, la version et l\'hébergement de votre Dolibarr, et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition de programme construite sur vos opérations et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation Dolibarr'],
        ],
    ],

    'faq' => [
        ['q' => 'Une seule personne gère tout chez nous : le format convient-il ?', 'r' => 'C\'est même le cas type. Une journée en séance individuelle couvre le cycle complet sur vos données, et la personne repart avec ses fiches réflexes. Une heure supplémentaire forme un second utilisateur au minimum vital, pour que la facturation continue pendant ses absences.'],
        ['q' => 'Notre Dolibarr est mal paramétré depuis le début : faut-il le corriger avant de former ?', 'r' => 'Oui si les défauts rendent les gestes faux, sinon la formation installerait de mauvaises habitudes. L\'état des lieux fait au début le dit clairement, et la remise en ordre éventuelle est chiffrée à part, avant tout engagement.'],
        ['q' => 'La comptabilité est-elle couverte ?', 'r' => 'La formation couvre la facturation, les paiements, les achats et les exports attendus par le comptable. La tenue comptable complète dans Dolibarr se cadre avec votre expert-comptable, pour rester alignée sur ses écritures et sur le référentiel applicable dans votre pays.'],
        ['q' => 'Faut-il ressaisir tout notre historique papier ?', 'r' => 'Non. On reprend les tiers actifs, les articles encore vendus et les factures impayées en cours. Ressaisir des années d\'historique épuise l\'équipe pour un bénéfice faible, et le papier reste consultable en archive.'],
        ['q' => 'Comment enregistre-t-on un paiement par Mobile Money ?', 'r' => 'Comme un mode de règlement à part entière, sur un compte propre à chaque opérateur, MTN ou Moov. On suit ainsi ce qui entre par ce canal et on compare le total du jour au relevé du portefeuille. Le paramétrage et le geste d\'encaissement font partie des exercices.'],
        ['q' => 'Peut-on supprimer une facture validée par erreur ?', 'r' => 'Il ne faut pas chercher à le faire. Une facture validée porte un numéro définitif ; on la corrige par une facture de remplacement si elle n\'est pas payée, par un avoir sinon, ou on la classe abandonnée avec un motif. Seul un brouillon se supprime librement.'],
        ['q' => 'Nos vendeurs sont sur le terrain : peuvent-ils utiliser Dolibarr ?', 'r' => 'Oui, depuis le navigateur du téléphone, pour les gestes simples : consulter un prix, vérifier un stock, saisir une commande. La saisie lourde reste au bureau. La répartition exacte entre terrain et bureau se décide pendant l\'état des lieux.'],
        ['q' => 'Quelle version de Dolibarr faut-il avoir ?', 'r' => 'Celle que vous utilisez. La version stable publiée le 7 septembre 2026 est la 24.0.1 ; une instance plus ancienne reste formable, les écarts d\'écrans étant signalés dans les supports. Une montée de version se prépare avec votre intégrateur, pas pendant la session.'],
        ['q' => 'La formation se fait-elle à distance ou sur place ?', 'r' => 'Les deux. À distance, en séances de deux à trois heures avec prise en main sur votre instance ; sur place à Cotonou ou dans vos locaux ; ou en formule hybride, avec une première journée en salle puis un suivi en visioconférence.'],
        ['q' => 'Combien coûte la formation Dolibarr ?', 'r' => 'Le prix est fixé sur devis, après un premier échange et l\'état des lieux de votre instance. Il dépend du nombre de participants, des modules couverts, du lieu, du mode et de l\'accompagnement. L\'hébergement ou les modules payants éventuels se règlent à part, directement à leurs éditeurs.'],
        ['q' => 'Peut-on étaler les sessions plutôt que tout faire d\'affilée ?', 'r' => 'Oui, et c\'est souvent préférable : une journée sur le cycle de vente, deux semaines de pratique réelle, puis la suite. Les questions nées de l\'usage nourrissent les séances suivantes au lieu d\'un programme théorique.'],
        ['q' => 'Que se passe-t-il si nous changeons un jour d\'hébergeur ou de prestataire ?', 'r' => 'Rien de grave : Dolibarr est un logiciel libre, la base s\'exporte entièrement et une instance standard se reprend par n\'importe quel prestataire compétent. La sauvegarde vérifiée pendant la formation est justement ce qui rend ce changement sans douleur.'],
        ['q' => 'La formation peut-elle être financée par le FDFP, le 3FPT ou un OPCO ?', 'r' => 'Cela dépend des règles de chaque fonds. Le FDFP exige l\'habilitation des opérateurs privés, sauf de ceux situés hors de Côte d\'Ivoire, et les OPCO exigent la certification Qualiopi, que Richard SALANON ne détient pas. Interrogez le fonds par écrit avant de signer et prévoyez le budget sans prise en charge.'],
    ],

    'sources' => [
        ['titre' => 'dolibarr.org, présentation du logiciel et de l\'association Dolibarr', 'url' => 'https://www.dolibarr.org/', 'date' => '2026-10-05'],
        ['titre' => 'GitHub, publication de Dolibarr 24.0.1', 'url' => 'https://github.com/Dolibarr/dolibarr/releases/tag/24.0.1', 'date' => '2026-10-05'],
        ['titre' => 'Wiki Dolibarr, module Propositions commerciales (devis)', 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_Propositions_commerciales_-_Devis', 'date' => '2026-10-05'],
        ['titre' => 'Wiki Dolibarr, module Commandes clients', 'url' => 'https://wiki.dolibarr.org/index.php/Module_Commandes_Clients', 'date' => '2026-10-05'],
        ['titre' => 'Wiki Dolibarr, module Factures clients (remplacement, avoir, acompte, escompte)', 'url' => 'https://wiki.dolibarr.org/index.php/Module_Factures_Clients', 'date' => '2026-10-05'],
        ['titre' => 'Wiki Dolibarr, module Factures fournisseurs', 'url' => 'https://wiki.dolibarr.org/index.php/Module_Fournisseurs_Factures', 'date' => '2026-10-05'],
        ['titre' => 'Wiki Dolibarr, module Stock', 'url' => 'https://wiki.dolibarr.org/index.php/Module_Stock', 'date' => '2026-10-05'],
        ['titre' => 'DoliCloud, tarifs des offres Basic et Premium', 'url' => 'https://www.dolicloud.com/fr/fr-faq-pricing.php', 'date' => '2026-10-05'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées (27 février 2020)', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-05'],
        ['titre' => 'impots.gouv.fr, à partir de quand suis-je concerné par la réforme de la facturation électronique ?', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-05'],
        ['titre' => 'BCEAO, rapport annuel sur les services financiers numériques dans l\'UEMOA, 2024', 'url' => 'https://www.bceao.int/fr/publications/rapport-annuel-sur-les-services-financiers-numeriques-dans-luemoa-2024', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, sécurité : gérer les habilitations', 'url' => 'https://www.cnil.fr/fr/securite-gerer-les-habilitations', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 (statuts du fonds de développement de la formation professionnelle continue et de l\'apprentissage)', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['dolibarr-ia', 'adoption-erp', 'crm-pipeline', 'odoo-utilisateurs', 'whatsapp-odoo-dolibarr-crm', 'excel-google-sheets'],
        'services'    => ['integration-dolibarr'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
