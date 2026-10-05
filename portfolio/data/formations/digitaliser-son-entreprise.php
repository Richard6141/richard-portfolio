<?php
// ============================================================
// data/formations/digitaliser-son-entreprise.php · Fiche formation
// « Digitaliser son entreprise pas à pas » (vague 1B, lot A, domaine
// transformation-digitale). Angle propre : le dirigeant d'une petite
// structure (commerce, artisan, cabinet, école, ONG de quelques personnes)
// avance seul, chantier par chantier, avec des outils simples et un budget
// tenu. Aucune ancienne page. Sœurs non traitées : strategie-transformation-
// digitale (feuille de route d'une direction), digitalisation-processus,
// excel-google-sheets, whatsapp-business, visibilite-google. Le pilier
// /services/digitalisation-d-entreprise (prestation) n'est pas repris.
// Sources consultées le 05/10/2026 : Baromètre France Num 2026, aide Google
// (fiche d'établissement, stockage), WhatsApp Business (Meta One), tarifs
// Google Workspace, Microsoft 365 Business Basic (lu dans un navigateur),
// Bitwarden, FedaPay (lu dans un navigateur), e-MECeF (DGI Bénin), portail
// FNE (DGI Côte d'Ivoire), impots.gouv.fr, Odoo (fait vérifié du catalogue),
// Dolibarr, DataReportal, loi n° 2017-20, CNIL, FDFP, FODEFCA, 3FPT,
// France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Digitaliser son entreprise pas à pas : choisir son premier chantier, installer des outils simples et tenir un budget numérique à sa mesure",
    'title'   => "Formation digitaliser son entreprise | Richard SALANON",
    'meta'    => "Formation pour dirigeants de petites structures : par où commencer, quels outils simples, quelles étapes et quel budget pour digitaliser seul, sur devis.",
    'en_bref' => "Cette formation apprend au dirigeant d'une petite structure (commerce, atelier, cabinet, école, association de quelques personnes) à digitaliser son activité lui-même, un chantier après l'autre : faire le point, choisir par où commencer, sécuriser ses comptes et ses fichiers, être trouvé et encaisser, facturer proprement, puis tenir un budget sur douze mois. Elle dure deux jours en quatre demi-journées, de préférence espacées d'une ou deux semaines, suivis d'un point d'étape à distance six semaines plus tard. Elle se tient dans vos locaux, en groupe de dirigeants, à distance ou en formule mixte, et son prix est fixé sur devis.",
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'transformation-digitale',
    'forte'   => true,
    'duree'   => "2 jours en quatre demi-journées, puis un point d'étape de 2 heures à six semaines",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : faire le point sur sa structure et choisir un seul premier chantier",
            'duree'  => '3 h 30',
            'points' => [
                "Tour de table : chaque dirigeant raconte une journée ordinaire et nomme la tâche qui lui vole le plus de temps.",
                "Lecture du relevé d'une semaine rempli avant la session : tâches répétées, informations cherchées, oublis, appels pour rien.",
                "Dessiner la carte de sa structure sur une seule page : qui fait quoi, sur quel support (cahier, téléphone, tableur, papier, messagerie).",
                "Les cinq familles de chantiers d'une petite structure : être trouvé, échanger et vendre, facturer et encaisser, ranger et retrouver, suivre ses chiffres.",
                "La grille des trois questions : combien d'heures perdues par semaine, combien d'argent perdu ou encaissé en retard, combien d'effort et de dépense pour corriger.",
                "Exercice : retenir un seul premier chantier, l'écrire en une phrase avec une date de fin et un signe de réussite que l'on peut constater.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : poser le socle, avec des comptes, des fichiers et des sauvegardes qui appartiennent à la structure",
            'duree'  => '3 h 30',
            'points' => [
                "L'inventaire des comptes : messagerie, page Facebook, fiche Google, WhatsApp, mobile money, banque, nom de domaine ; qui les a créés, avec quel numéro et quelle adresse.",
                "Une adresse électronique au nom de l'activité : compte gratuit bien choisi ou suite payante avec votre nom de domaine, et ce que l'on gagne vraiment à payer.",
                "Les mots de passe : un par compte, rangés dans un gestionnaire, et la double authentification activée d'abord sur la messagerie et sur l'argent.",
                "Un dossier partagé unique, quatre ou cinq sous-dossiers (clients, fournisseurs, factures, administratif, personnel) et une règle de nommage que toute l'équipe applique.",
                "La sauvegarde : ce qui doit être copié, où, à quel rythme, et la seule preuve qui compte, la restauration d'un fichier.",
                "Exercice : remplir l'inventaire des comptes de sa structure et activer la double authentification sur la messagerie principale avant de quitter la salle.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : être trouvé, répondre vite et encaisser sans courir après l'argent",
            'duree'  => '3 h 30',
            'points' => [
                "Où vos clients vous cherchent réellement : bouche-à-oreille, Google Maps, Facebook, WhatsApp, annuaires ; garder un ou deux canaux et les tenir à jour.",
                "La fiche d'établissement Google : la créer ou la revendiquer, la faire valider, remplir horaires, photos et numéro, puis vérifier ce qu'en voit un inconnu.",
                "WhatsApp Business : les trois réglages du premier jour (profil, message d'absence, quelques articles), le reste étant traité par une formation dédiée.",
                "Faut-il un site ? Rien pour l'instant, une page unique ou un site vitrine : les critères qui tranchent selon votre clientèle.",
                "Encaisser par mobile money : numéro marchand, lien de paiement d'un agrégateur, frais à intégrer dans le prix plutôt qu'à découvrir en fin de mois.",
                "Exercice du client mystère : un autre participant cherche votre structure sur son téléphone, vous écrit et simule un paiement ; chaque blocage est noté.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : facturer proprement, décider de l'outil de gestion et chiffrer son budget sur douze mois",
            'duree'  => '3 h 30',
            'points' => [
                "Devis et factures : un modèle unique, une numérotation continue, les mentions utiles, et la facture normalisée quand la loi du pays l'impose.",
                "Tableur, outil de facturation en ligne ou logiciel de gestion comme Dolibarr ou Odoo : les signes qui justifient de changer d'outil, et ceux qui disent d'attendre.",
                "Suivre les impayés : une liste des sommes dues, une date de relance, un message type, et le point hebdomadaire de dix minutes.",
                "Le budget numérique sur douze mois : ce qui se paie une fois, ce qui revient chaque mois, et les heures qu'il faudra y consacrer.",
                "Le plan à 90 jours : le premier chantier découpé en trois étapes datées, avec la personne responsable de chacune.",
                "Exercice final : chaque dirigeant présente en cinq minutes sa carte, son socle, son chantier et son budget, puis répond aux questions qu'un associé lui poserait.",
            ],
        ],
        [
            'titre'  => "Six semaines plus tard, à distance : le point d'étape",
            'duree'  => '2 h',
            'points' => [
                "Ce qui a avancé dans le plan à 90 jours, ce qui a calé, et pourquoi.",
                "Contrôle du socle : double authentification en place, sauvegarde restaurée une deuxième fois, comptes passés au nom de la structure.",
                "Révision du budget après les premières factures d'abonnement et les premiers frais de paiement.",
                "Décision écrite sur la suite : continuer seul, former un collaborateur, ou confier le chantier suivant à un prestataire.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en quatre demi-journées, puis un point d'étape à six semaines"],
        ['l' => 'Public', 'v' => "Dirigeants de commerces, ateliers, cabinets, écoles et associations de quelques personnes"],
        ['l' => 'Formats', 'v' => "Intra, groupe de dirigeants, à distance ou mixte"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saurez-vous faire à la fin de la formation, et que laisse-t-elle à d'autres ?",
            'paragraphes' => [
                "Dans une structure de deux à dix personnes, le dirigeant est aussi vendeur, comptable et responsable informatique. Le numérique y entre par petites couches : un numéro WhatsApp ouvert un jour de rush, une page Facebook créée par un neveu, un tableur commencé puis délaissé, une application payée trois mois et oubliée. Cette formation remplace l'empilement par une méthode. Elle apprend à avancer seul, dans un ordre réfléchi, avec des outils simples et peu coûteux, sans engager un projet que la structure ne pourrait ni financer ni absorber.",
                "Les objectifs sont vérifiés avant la fin des deux jours. Chaque participant repart avec six résultats concrets : la carte de sa structure tenue sur une page ; un premier chantier choisi, daté et doté d'un signe de réussite ; l'inventaire de ses comptes, avec les plus importants protégés par la double authentification ; un dossier partagé et une sauvegarde dont il a lui-même restauré un fichier ; un parcours client testé sur téléphone, de la recherche au paiement ; enfin un budget numérique sur douze mois et un plan à 90 jours.",
                "La formation ne refait pas le travail d'autres fiches du catalogue, qu'elle cite au moment utile. La feuille de route d'une direction, avec diagnostic par service, budget pluriannuel et indicateurs, relève de la formation <a href=\"/formations/strategie-transformation-digitale\">Stratégie de transformation digitale</a>. La cartographie détaillée d'un processus est traitée dans la formation consacrée à la digitalisation des processus. Les formules et les tableaux croisés sont l'objet de la formation <a href=\"/formations/excel-google-sheets\">Excel et Google Sheets</a>, la vente par messagerie celui de la formation <a href=\"/formations/whatsapp-business\">WhatsApp Business</a>.",
                "Elle se distingue aussi de la prestation. Si vous préférez qu'un professionnel mène le travail à votre place, la page <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a> décrit cette option. Ici, c'est vous qui faites, avec un formateur à côté de vous et d'autres dirigeants qui rencontrent les mêmes obstacles. Beaucoup de participants y trouvent un second bénéfice : le jour où ils font appel à un prestataire, ils savent décrire leur besoin, lire un devis et repérer l'abonnement superflu.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quel niveau, et que faut-il préparer ?",
            'intro' => "Le public se reconnaît moins à son secteur qu'à sa taille : une structure où le dirigeant décide de tout et n'a personne à qui déléguer l'informatique. Aucun diplôme ni niveau technique n'est demandé.",
            'items' => [
                ['titre' => "Commerçants et boutiques", 'texte' => "Boutique de quartier, étal de marché qui grandit, revendeur qui commence à livrer : ceux dont les clients appellent pour un prix, réservent par message et paient tantôt en espèces, tantôt par téléphone."],
                ['titre' => "Artisans et métiers techniques", 'texte' => "Couture, menuiserie, coiffure, mécanique, électricité, petit bâtiment : des devis refaits à chaque demande, des photos de réalisations perdues dans la galerie du téléphone, des rendez-vous notés sur un bout de papier."],
                ['titre' => "Cabinets et professions libérales", 'texte' => "Avocat, architecte, consultant, cabinet de santé ou d'expertise de deux ou trois personnes : beaucoup de documents, des informations confidentielles, et des clients qui attendent une réponse écrite et rapide."],
                ['titre' => "Écoles privées, crèches et centres de formation", 'texte' => "Inscriptions, frais payés par tranches, échanges avec les parents ou les apprenants : le volume de messages et de paiements dépasse vite ce qu'un secrétariat peut suivre à la main."],
                ['titre' => "Associations et ONG de quelques personnes", 'texte' => "Pièces justificatives à conserver, rapports à produire pour un bailleur, bénévoles qui changent : l'enjeu est de ne plus dépendre de la mémoire ou de l'ordinateur d'une seule personne."],
                ['titre' => "Créateurs et repreneurs", 'texte' => "Ceux qui démarrent ou reprennent une activité ont l'avantage de partir propre : comptes au bon nom, outils choisis, budget fixé avant les premières habitudes."],
                ['titre' => "Niveau requis", 'texte' => "Savoir utiliser un smartphone et WhatsApp suffit. Un dirigeant peu à l'aise avec l'ordinateur peut venir avec le collaborateur qui fera les saisies au quotidien : les décisions restent les siennes, les gestes sont appris à deux."],
                ['titre' => "Préparation et matériel", 'texte' => "Le relevé d'une semaine, envoyé à l'inscription, demande un quart d'heure par jour pendant cinq jours. Le jour venu : votre téléphone de travail, un ordinateur portable si vous en avez un, les accès à vos comptes (ou le nom de la personne qui les détient) et une dizaine de devis ou de factures récents, sans données sensibles."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels travaux pratiques réalisez-vous sur votre propre structure ?",
            'items' => [
                ['titre' => "Le relevé d'une semaine", 'duree' => "Avant la session, un quart d'heure par jour", 'texte' => "Pendant cinq jours ouvrés, vous notez chaque soir les tâches répétées, les informations que vous avez dû chercher, les clients rappelés pour rien et les paiements à vérifier. Ce relevé remplace les impressions par des faits, et il sert de matière à toute la première matinée."],
                ['titre' => "La carte d'une page", 'duree' => '45 minutes', 'texte' => "Sur une feuille, les personnes de la structure, leurs tâches et les supports qu'elles utilisent. Les flèches entre supports montrent où l'information est recopiée. La plupart des dirigeants découvrent à cette étape que la même commande est écrite trois fois."],
                ['titre' => "Le choix du premier chantier", 'duree' => '40 minutes', 'texte' => "Chaque gêne relevée passe par la grille des trois questions : heures perdues, argent en retard, effort de correction. Le chantier qui ressort est présenté au groupe, qui vérifie qu'il est assez petit pour aboutir en 90 jours."],
                ['titre' => "L'inventaire des comptes", 'duree' => '1 heure', 'texte' => "Un tableau liste chaque compte en ligne de la structure, l'adresse et le numéro qui le contrôlent, la personne qui connaît le mot de passe et l'état de la double authentification. Les comptes rattachés à un ancien salarié ou à un proche sont repérés pour être repris."],
                ['titre' => "La restauration d'un fichier", 'duree' => "20 minutes, entre les deux jours", 'texte' => "Vous supprimez volontairement une copie de travail, puis vous la récupérez depuis la sauvegarde ou la corbeille du service en ligne. Tant que ce geste n'a pas été fait une fois, la sauvegarde reste une supposition."],
                ['titre' => "Le client mystère", 'duree' => '45 minutes', 'texte' => "Un autre participant joue le client : il cherche votre structure sur Google Maps, vérifie vos horaires, vous écrit, demande un prix et simule un paiement. Il chronomètre et note chaque hésitation. La liste des blocages devient la liste des corrections de la semaine."],
                ['titre' => "La première facture propre", 'duree' => '40 minutes', 'texte' => "À partir d'une vente réelle, vous produisez une facture numérotée avec l'outil retenu, ou sur la plateforme de facturation normalisée de votre pays quand elle s'applique, puis vous la rangez au bon endroit du dossier partagé."],
                ['titre' => "Le budget et le plan à 90 jours", 'duree' => '1 heure', 'texte' => "Chaque outil envisagé est inscrit avec son coût d'éditeur, sa périodicité et le nombre d'utilisateurs. Le total annuel est comparé au gain attendu du premier chantier, puis le chantier est découpé en trois étapes datées."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Par quel chantier commencer, selon ce qui vous gêne le plus ?",
            'legende' => "Situations les plus fréquentes dans les petites structures, avec le premier chantier et l'outil le plus simple pour l'engager. La formation aide à choisir une seule ligne ; les autres attendent leur tour.",
            'entetes' => ['Ce qui vous gêne', 'Premier chantier', 'Outil simple pour démarrer', 'Signe que le chantier est réglé'],
            'lignes'  => [
                ["Les nouveaux clients ne vous trouvent pas", "Être visible là où l'on vous cherche", "Fiche d'établissement Google, profil WhatsApp Business complet", "Un inconnu trouve adresse, horaires et numéro en moins d'une minute"],
                ["Tout repose sur votre téléphone personnel", "Mettre les comptes au nom de la structure", "Adresse électronique de l'activité, gestionnaire de mots de passe", "Aucun compte important ne dépend d'une seule personne"],
                ["Les documents se perdent ou existent en dix versions", "Ranger et sauvegarder", "Dossier partagé en ligne avec règle de nommage", "Un document se retrouve en deux minutes, un fichier a été restauré"],
                ["Les devis et les factures prennent vos soirées", "Modèles et numérotation", "Outil de facturation en ligne ou application unique d'un logiciel de gestion", "La facture part le jour de la vente"],
                ["Les impayés s'accumulent sans que vous le sachiez", "Suivre les sommes dues", "Liste des factures ouvertes avec date de relance", "Le total des impayés est connu chaque lundi"],
                ["Les paiements par téléphone sont durs à vérifier", "Encaisser proprement", "Numéro marchand ou lien de paiement d'un agrégateur", "Chaque paiement reçu correspond à une vente identifiée"],
                ["Les rendez-vous se chevauchent ou sont oubliés", "Tenir un agenda partagé", "Agenda en ligne partagé, rappel la veille par message", "Plus de double réservation sur un mois complet"],
                ["Vous ne savez pas ce que vous avez gagné ce mois-ci", "Suivre trois chiffres", "Tableur simple alimenté chaque semaine", "Ventes, encaissements et dépenses du mois connus avant le 5 du mois suivant"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi un seul chantier à la fois, et comment le choisir sans se tromper ?",
            'paragraphes' => [
                "Le dirigeant d'une petite structure n'a pas de temps libre à consacrer au numérique : il le prend sur ses soirées ou sur ses ventes. Ouvrir trois chantiers en même temps revient à n'en finir aucun, et l'échec du premier essai laisse souvent une conviction durable que « le numérique, ce n'est pas pour nous ». Un chantier court et terminé produit l'inverse : un gain visible, une équipe qui y croit, et un peu de temps libéré pour le suivant.",
                "La grille des trois questions évite les choix d'humeur. Combien d'heures cette gêne coûte-t-elle chaque semaine, à vous et à votre équipe ? Combien d'argent fait-elle perdre ou retarder, en ventes manquées, en impayés, en erreurs de caisse ? Combien d'effort et de dépense faut-il pour la corriger ? Le bon premier chantier est rarement le plus spectaculaire. C'est celui qui coûte le plus pour un effort modeste, souvent la facturation, la visibilité locale ou le rangement des documents.",
                "Deux règles accompagnent le choix. D'abord, l'outil gratuit ou l'essai d'abord, l'abonnement ensuite : on prouve l'usage pendant un mois avant de payer une année. Ensuite, un chantier se termine par un signe constatable, pas par un sentiment ; « la facture part le jour de la vente » se vérifie, « on est mieux organisés » ne se vérifie pas. Ce signe est écrit dès le premier jour, avec une date.",
                "Le choix est aussi affaire d'ordre. Un tableau de bord n'a aucun sens tant que les ventes ne sont pas saisies au même endroit, et une boutique en ligne n'a pas d'intérêt si les prix changent sans que personne ne les mette à jour. Le socle de comptes, de fichiers et de sauvegardes passe donc avant tout le reste, même s'il paraît moins urgent : c'est lui qui protège les chantiers suivants.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation se déroule-t-elle, et que gardez-vous ensuite ?",
            'intro' => "La méthode part d'un constat simple : un dirigeant apprend surtout en faisant sur sa propre structure, et en voyant comment d'autres dirigeants ont résolu le même problème.",
            'items' => [
                ['titre' => "Des groupes de dirigeants, pas des amphithéâtres", 'texte' => "Huit structures au plus dans un groupe inter-entreprises, pour que chaque carte, chaque inventaire et chaque budget soit relu. En intra, le dirigeant et un ou deux collaborateurs travaillent ensemble sur la même structure."],
                ['titre' => "Vos comptes et vos documents", 'texte' => "Les exercices se font sur votre fiche Google, votre messagerie, vos devis et vos factures. Rien n'est saisi sur un exemple fictif que l'on oublie le lendemain ; ce qui est réglé en séance reste réglé."],
                ['titre' => "Montrer peu, faire beaucoup", 'texte' => "Chaque geste est montré en quelques minutes à l'écran, puis réalisé par chacun pendant que le formateur passe d'un poste à l'autre. Les questions individuelles sont traitées sur place, à côté de l'écran concerné."],
                ['titre' => "Deux jours espacés", 'texte' => "Une ou deux semaines entre le jour 1 et le jour 2 laissent le temps de reprendre les comptes, de tester la restauration et d'en parler à l'équipe. Les questions du jour 2 sont alors celles du terrain, pas celles de la théorie."],
                ['titre' => "Un carnet de bord remis à chacun", 'texte' => "Les modèles utilisés en séance restent à la structure, dans un format modifiable : relevé d'une semaine, carte d'une page, grille des trois questions, inventaire des comptes, modèle de budget sur douze mois, plan à 90 jours et liste de contrôle du client mystère."],
                ['titre' => "Une évaluation sur ce qui a été fait", 'texte' => "La réussite se mesure aux livrables réalisés : inventaire rempli, double authentification active, fichier restauré, budget chiffré, plan daté. Une attestation de fin de formation reprend ces résultats pour chaque participant."],
                ['titre' => "Un suivi qui ne laisse pas seul", 'texte' => "Le point d'étape à six semaines reprend le plan à 90 jours, et un canal direct reste ouvert entre-temps pour les questions d'application. Le plus souvent, une question bien posée débloque une semaine de travail."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils simples sont présentés, et combien coûtent-ils chez l'éditeur ?",
            'legende' => "Prix et conditions relevés le 5 octobre 2026 sur les pages officielles des éditeurs ; ils changent souvent et varient selon le pays de facturation. Aucun outil n'est imposé : la formation présente les options, vous choisissez, et vos abonnements restent à votre nom.",
            'entetes' => ['Outil', 'Usage dans une petite structure', 'Coût relevé chez l\'éditeur'],
            'lignes'  => [
                ["Fiche d'établissement Google", "Apparaître dans Google Search et Google Maps avec adresse, horaires, photos et avis", "Gratuit : l'aide de Google indique que l'on peut ajouter ou revendiquer son établissement « sans frais »"],
                ["Application WhatsApp Business", "Profil professionnel, catalogue, messages d'accueil et d'absence", "Gratuite ; WhatsApp précise que les abonnements de Meta sont facultatifs et que l'application gratuite le reste"],
                ["Compte Google personnel (Gmail, Drive)", "Démarrer un dossier partagé et une messagerie sans dépense", "Gratuit, avec jusqu'à 15 Go de stockage partagés entre Gmail, Google Drive et Google Photos"],
                ["Google Workspace Business Starter", "Adresse à votre nom de domaine, dossier partagé, agenda d'équipe", "6,80 € HT par utilisateur et par mois hors remise temporaire, avec 30 Go de stockage par personne"],
                ["Microsoft 365 Business Basic", "Adresse professionnelle, Word, Excel et PowerPoint en ligne, stockage OneDrive", "6,07 € HT par utilisateur et par mois en paiement annuel, 7,28 € HT en abonnement mensuel, avec 1 To par utilisateur"],
                ["Gestionnaire de mots de passe Bitwarden", "Un mot de passe différent par compte, partage sécurisé entre associés", "Offre gratuite ; offre Teams à 4 dollars par utilisateur et par mois, en paiement annuel, hors taxes"],
                ["Agrégateur de paiement FedaPay (Bénin)", "Lien de paiement par mobile money ou carte, sans terminal", "Aucun frais avant le premier paiement reçu ; 1,80 % par paiement MTN, Moov ou Celtiis, 3,60 % par carte Visa ou Mastercard ; retrait vers mobile money sans frais, vers un compte bancaire 3 500 FCFA"],
                ["Plateforme e-MECeF de la DGI (Bénin)", "Émettre des factures normalisées en ligne", "Compte créé à partir du numéro IFU ; la DGI met à disposition un système de facturation en ligne, l'e-SFE"],
                ["Dolibarr", "Devis, factures, clients, stock, quand le tableur ne suffit plus", "Logiciel libre téléchargeable sans frais de licence, version 24.0.1 ; l'hébergement et l'installation restent à prévoir"],
                ["Odoo", "Une application de gestion en ligne, par exemple la facturation", "Une application gratuite ; offre Standard à 19,90 € par utilisateur et par mois en paiement annuel pendant 12 mois, puis 24,90 €"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment bâtir un budget numérique réaliste sur douze mois ?",
            'paragraphes' => [
                "Le budget se construit en trois colonnes. La première reçoit ce qui se paie une fois : un ordinateur, un nom de domaine la première année, une installation, une formation. La deuxième reçoit ce qui revient chaque mois ou chaque année : abonnements, forfait de données, frais de paiement. La troisième, la plus oubliée, reçoit le temps : les heures que vous et votre équipe passerez à mettre en place puis à tenir l'outil. Un outil gratuit qui demande cinq heures par semaine n'est pas gratuit.",
                "La deuxième colonne se calcule toujours sur douze mois et par utilisateur. Une suite à 6,80 € HT par mois et par personne, prix public relevé chez Google le 5 octobre 2026, coûte 244,80 € HT par an pour trois personnes, avant taxes et frais bancaires. Payée par carte depuis l'Afrique de l'Ouest, elle ajoute souvent des frais de change et d'opération que la page de l'éditeur n'affiche pas. Ce calcul simple, fait en séance pour chaque outil envisagé, suffit à écarter bien des abonnements.",
                "Les frais de paiement se traitent comme une ligne à part. Un agrégateur qui prélève un pourcentage sur chaque encaissement coûte d'autant plus que vous vendez ; il faut donc savoir s'il est intégré dans vos prix ou s'il ronge votre marge. En France, le Baromètre France Num 2026, publié le 17 septembre 2026 par la Direction générale des Entreprises, relève que 33 % des TPE et PME n'ont réalisé aucune dépense numérique dans l'année, hors formation et recrutement, soit huit points de plus en un an.",
                "Un bon budget prévoit enfin une revue trimestrielle. On y retire les abonnements qui ne servent plus, on vérifie le nombre d'utilisateurs facturés, et l'on compare la dépense au gain constaté sur le chantier. Cette revue de quinze minutes, inscrite dans l'agenda dès la formation, évite l'accumulation silencieuse de petits prélèvements qui finissent par peser autant qu'un salaire.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la démarche selon votre métier et votre pays ?",
            'items' => [
                ['secteur' => "Boutique de cosmétiques avec deux vendeuses, à Cotonou", 'probleme' => "La gérante répond aux prix jusqu'à minuit sur son numéro personnel, les clientes paient par mobile money sur trois numéros différents, et le compte Facebook de la boutique a été ouvert par une ancienne employée.", 'solution' => "Premier chantier sur le socle : récupération du compte Facebook, numéro WhatsApp Business dédié, adresse électronique de la boutique, double authentification. Deuxième chantier : un lien de paiement unique et un relevé hebdomadaire des encaissements."],
                ['secteur' => "Atelier de menuiserie, à Lomé", 'probleme' => "Chaque devis est recalculé à la main, les photos des meubles livrés sont perdues, et les clients venus par recommandation ne trouvent pas l'atelier.", 'solution' => "Fiche d'établissement Google avec photos des réalisations et itinéraire, modèle de devis réutilisable par type de meuble, dossier partagé où chaque chantier livré a son sous-dossier de photos."],
                ['secteur' => "Cabinet de conseil de trois personnes, à Abidjan", 'probleme' => "Les dossiers clients circulent par pièces jointes, les versions se contredisent, et la question de la facture normalisée électronique reste sans réponse.", 'solution' => "Dossier partagé avec droits par dossier client, gestionnaire de mots de passe commun, vérification auprès du portail FNE de la DGI du régime fiscal applicable et choix d'un outil de facturation compatible."],
                ['secteur' => "École primaire privée, à Parakou", 'probleme' => "Les frais de scolarité sont payés par tranches, les reçus sont sur papier carbone, et le directeur découvre les retards de paiement à la fin du trimestre.", 'solution' => "Liste des familles et des tranches dans un tableur partagé, reçu numéroté pour chaque versement, relance par message à date fixe ; le passage à un logiciel de gestion est inscrit au budget de l'année suivante, pas avant."],
                ['secteur' => "Association de cinq personnes, à Ouagadougou", 'probleme' => "Les pièces justificatives d'un projet financé dorment dans l'ordinateur du trésorier, qui part à la fin de son mandat.", 'solution' => "Comptes et dossier partagé au nom de l'association, arborescence par projet et par ligne budgétaire, sauvegarde testée, passation écrite au futur trésorier pendant le point d'étape."],
                ['secteur' => "Artisan ou commerçant, en France ou en Belgique", 'probleme' => "Factures produites dans un traitement de texte, obligation française d'émettre des factures électroniques à partir de septembre 2027 pour les PME et microentreprises, et clients qui réservent en ligne.", 'solution' => "Formation à distance en séances courtes, choix d'un outil de facturation qui prépare l'échéance, agenda de réservation en ligne, registre simple des données clients selon les premières étapes recommandées par la CNIL."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Intra, groupe de dirigeants, à distance ou mixte : quel format choisir ?",
            'legende' => "Le format se décide au premier échange, selon le nombre de personnes à former, la distance et la qualité de la connexion. Dans tous les cas, le travail porte sur votre propre structure.",
            'entetes' => ['Format', 'Pour qui', 'Organisation habituelle', 'Point d\'attention'],
            'lignes'  => [
                ["Intra, dans vos locaux", "Une structure qui veut former le dirigeant et un ou deux collaborateurs ensemble", "Quatre demi-journées sur deux jours espacés, sur vos postes et vos comptes", "Prévoir des demi-journées sans clients, ou un remplaçant au comptoir"],
                ["Inter, groupe de dirigeants", "Commerçants d'un même marché, membres d'une association professionnelle, d'une chambre ou d'un incubateur", "Huit structures au plus, salle commune, entraide entre participants", "Chacun garde la main sur ses données : aucun écran n'est projeté sans accord"],
                ["À distance", "Dirigeants éloignés de Cotonou, en Europe ou au Canada", "Séances de deux à trois heures en visioconférence, travaux entre les séances", "Une connexion stable et, si possible, un ordinateur en plus du téléphone"],
                ["Mixte", "Structures qui veulent démarrer en salle puis avancer à leur rythme", "Jour 1 sur place, jour 2 et point d'étape à distance", "Deux organisations à caler, souvent le meilleur compromis hors de Cotonou"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le prix ?",
            'intro'      => "Aucun montant n'est publié : la formation est chiffrée sur devis, après un premier échange qui précise votre structure, le nombre de participants et le format. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, et la facture reprend l'intitulé, les dates, la durée et les participants.",
            'items'      => [
                ['offre' => "Groupe de dirigeants", 'prix' => 'Sur devis', 'inclus' => ["Quatre demi-journées et point d'étape", "Huit structures au plus", "Carnet de bord et attestation"]],
                ['offre' => "Intra pour une structure", 'prix' => 'Sur devis', 'inclus' => ["Dirigeant et un ou deux collaborateurs", "Travail sur vos comptes et vos documents", "Point d'étape à six semaines"]],
                ['offre' => "Parcours individuel du dirigeant", 'prix' => 'Sur devis', 'inclus' => ["Séances à distance ou sur place", "Programme resserré sur votre premier chantier", "Canal direct entre les séances"]],
                ['offre' => "Point d'étape supplémentaire", 'prix' => 'Sur devis', 'inclus' => ["Deux heures à distance", "Revue du plan et du budget", "Choix du chantier suivant"]],
            ],
            'variations' => [
                "Le format : groupe de dirigeants, intra, parcours individuel, présentiel, distance ou mixte.",
                "Le nombre de participants par structure et le nombre de groupes.",
                "Le lieu : Cotonou, une autre ville du Bénin, un autre pays ou la visioconférence.",
                "Le nombre de points d'étape après la formation.",
                "La préparation particulière : comptes à récupérer, documents à anonymiser, plusieurs sites à couvrir.",
                "La langue des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il prendre en charge une partie du coût ?",
            'paragraphes' => [
                "Peut-être, mais aucune prise en charge n'est promise ici : elle dépend du fonds, de la situation de votre structure et des conditions posées au prestataire. Les éléments ci-dessous ont été relevés le 5 octobre 2026 sur les pages officielles ; ils servent à savoir quelle question poser, et à qui, avant de signer un devis.",
                "En Côte d'Ivoire, le FDFP décrit un Projet TPE destiné aux très petites entreprises assujetties à ses taxes, dont la cotisation est comprise entre 4 320 et 10 000 francs CFA et qui sont à jour de leurs paiements. Ce projet est présenté au fonds par un opérateur de formation, avec une liste de 50 entreprises cotisantes et des contenus liés à la gestion. Le Projet interentreprises du même fonds vise les besoins communs d'un groupe d'entreprises identifiées. Une petite structure a donc intérêt à interroger son association professionnelle ou sa chambre consulaire.",
                "Au Bénin, le Fonds de développement de la formation professionnelle continue et de l'apprentissage, le FODEFCA, fonctionne selon les statuts approuvés par le décret n° 2022-286 du 11 mai 2022. Au Sénégal, le 3FPT affiche quatre guichets, dont l'un finance le personnel des entreprises et les membres des organisations professionnelles, et un autre les demandes individuelles, avec un dépôt en ligne. Les conditions applicables à votre cas, et la part qui resterait à votre charge, s'obtiennent auprès du fonds.",
                "En France, France Compétences rappelle que depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, ceux des opérateurs de compétences, de France Travail, des régions ou de l'État notamment. Richard SALANON ne revendique ni cette certification ni l'habilitation d'un fonds : prévoyez la formation sur votre budget propre, sauf réponse écrite contraire du financeur. Le programme, les feuilles de présence et l'attestation remis en fin de session restent utiles dans tous les cas.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quel réflexe peut vous faire perdre d'un coup votre page, votre fiche et vos messages ?",
            'texte' => "Laisser créer les comptes de la structure avec l'adresse ou le numéro d'une autre personne : un salarié, un stagiaire, le neveu qui « s'y connaît ». Le jour où cette personne part, change de numéro ou se brouille avec vous, la page, la fiche Google, la messagerie et parfois le nom de domaine partent avec elle, et la récupération prend des semaines quand elle réussit. La même prudence vaut pour les abonnements : la page de Microsoft 365 Business Basic, consultée le 5 octobre 2026, précise que la résiliation d'un abonnement supprime l'ensemble des données qui y sont associées. Chaque compte doit donc appartenir à la structure, avoir deux administrateurs, et chaque service payant un export régulier de ses données.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?",
            'intro' => "Le point d'étape à six semaines retrouve presque toujours les mêmes glissements. Ils se préviennent par des règles simples, écrites dans le carnet de bord avant de quitter la formation.",
            'items' => [
                ['titre' => "Ouvrir trois chantiers au retour", 'texte' => "L'enthousiasme de la formation pousse à tout lancer la même semaine. Le plan à 90 jours ne contient qu'un chantier ; les autres idées vont dans une liste d'attente relue au point d'étape."],
                ['titre' => "Payer l'année avant d'avoir prouvé l'usage", 'texte' => "La remise d'un abonnement annuel est tentante, mais un outil abandonné au bout d'un mois coûte alors douze mois. On commence par l'offre gratuite, l'essai ou le mois, et l'on passe à l'année une fois l'habitude installée."],
                ['titre' => "Garder l'ancien et le nouveau sans date de fin", 'texte' => "Le cahier continue « au cas où », le nouvel outil aussi, et l'équipe saisit deux fois. Une date de bascule est fixée dès le départ, après un cycle complet de vérification, puis tenue."],
                ['titre' => "Mettre la double authentification sur un seul téléphone", 'texte' => "Si ce téléphone est perdu, plus personne n'accède au compte. Les codes de secours sont imprimés et rangés, et un deuxième administrateur est désigné pour les comptes importants."],
                ['titre' => "Croire à la sauvegarde sans la tester", 'texte' => "Un service en ligne n'est pas une sauvegarde s'il synchronise aussi les suppressions. La restauration d'un fichier est refaite chaque trimestre, à date fixe, et notée dans le carnet de bord."],
                ['titre' => "Confier tout le numérique à la personne la plus jeune", 'texte' => "Elle va vite, mais elle part un jour avec les mots de passe et les habitudes. Le dirigeant garde l'inventaire des comptes à jour et sait refaire lui-même les gestes de base."],
                ['titre' => "Oublier de mettre à jour ce que voient les clients", 'texte' => "Horaires de fête, nouveau prix, déménagement : une fiche Google ou un message d'accueil périmé fait perdre plus de clients qu'aucune fiche du tout. Chaque changement dans la boutique déclenche la mise à jour en ligne."],
                ['titre' => "Laisser les abonnements s'accumuler", 'texte' => "De petits prélèvements oubliés finissent par former une vraie ligne de dépense. La revue trimestrielle du budget retire ce qui ne sert plus et vérifie le nombre d'utilisateurs facturés."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, factures, données personnelles : que change le contexte local pour une petite structure ?",
            'paragraphes' => [
                "Au Bénin, le téléphone passe avant Internet. Le rapport Digital 2026 de DataReportal consacré au pays, publié le 8 novembre 2025, compte 16,4 millions de connexions mobiles, soit 110 % de la population, pour 4,80 millions d'internautes, soit 32,2 %, et 2,50 millions d'identités sur les réseaux sociaux. Vos clients ont presque tous un téléphone, mais une partie seulement navigue sur le web. D'où l'ordre proposé en formation : messagerie, fiche Google et paiement par téléphone d'abord, site ensuite, et des outils qui fonctionnent sur un téléphone modeste avec peu de données.",
                "La facture obéit aux règles du pays. Au Bénin, la plateforme e-MECeF de la Direction générale des impôts, consultée le 5 octobre 2026, permet d'éditer des factures normalisées en ligne ; elle s'adresse à toute entreprise, micro, petite, moyenne ou grande, demande une connexion, un appareil avec navigateur et un compte créé à partir du numéro IFU, et un logiciel de facturation propre doit être approuvé par la DGI pour s'y relier. Un dirigeant assujetti vérifie donc ce point avant d'acheter quoi que ce soit.",
                "En Côte d'Ivoire, le portail de la facture normalisée électronique de la DGI rappelle un lancement officiel le 21 juillet 2025 et la fin de l'usage de la facture normalisée physique au 1er décembre 2025 pour les régimes RNI et RSI, au 11 décembre 2025 pour le RME et au 22 décembre 2025 pour le régime de l'entreprenant. En France, selon impots.gouv.fr, page mise à jour le 16 janvier 2026, toutes les entreprises reçoivent leurs factures sous forme électronique depuis le 1er septembre 2026, et les PME et microentreprises devront les émettre ainsi à partir du 1er septembre 2027.",
                "Les fichiers de clients, d'élèves ou de patients contiennent des données personnelles. Au Bénin, la loi n° 2017-20 du 20 avril 2018 portant code du numérique encadre leur traitement, sous le contrôle de l'Autorité de protection des données personnelles. En Europe, la CNIL résume les premières étapes du RGPD en quatre actions : tenir un registre des traitements, trier les données pour ne garder que le nécessaire, respecter les droits des personnes et sécuriser les données. Pour une petite structure, cela tient en une page : quelles listes vous tenez, pourquoi, qui y accède, combien de temps vous les gardez.",
                "La langue compte aussi. Les outils présentés existent en français et se paramètrent avec le vocabulaire de vos clients ; un message d'accueil peut saluer en fon, en wolof ou en dioula avant de passer au français. Les montants s'affichent en francs CFA sans décimales en Afrique de l'Ouest et centrale, en euros en Europe. Le formateur adapte enfin les exemples aux coupures : un document à remplir hors connexion, une sauvegarde qui reprend au retour du réseau, un téléphone chargé avant une journée de marché.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres aident un dirigeant à situer sa structure ?",
            'items' => [
                ['valeur' => '64 %', 'libelle' => "TPE et PME françaises qui disposent d'un site internet en 2026 ; 66 % ont au moins un compte gratuit sur un réseau social", 'source' => 'Baromètre France Num 2026, Direction générale des Entreprises', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '33 %', 'libelle' => "TPE et PME françaises qui n'ont réalisé aucune dépense numérique dans l'année, hors formation et recrutement, en hausse de 8 points", 'source' => 'Baromètre France Num 2026', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '39 %', 'libelle' => "TPE et PME françaises qui utilisent l'authentification multi-facteurs, contre 67 % qui sauvegardent leurs données à l'extérieur", 'source' => 'Baromètre France Num 2026', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '41 %', 'libelle' => "Dirigeants de TPE et PME françaises qui se tournent d'abord vers leur expert-comptable pour être conseillés sur le numérique, en hausse de 23 points", 'source' => 'Baromètre France Num 2026', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '16,4 millions', 'libelle' => "Connexions mobiles au Bénin, pour 4,80 millions d'internautes, d'après les données collectées en octobre 2025", 'source' => 'DataReportal, rapport Digital 2026 consacré au Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '1,80 %', 'libelle' => "Commission prélevée par FedaPay sur un paiement MTN, Moov ou Celtiis reçu au Bénin, sans frais avant le premier paiement", 'source' => 'FedaPay, page des tarifs', 'url' => 'https://www.fedapay.com/pricing'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre à digitaliser sa structure avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Son quotidien de prestataire le place sans cesse devant des petites structures au moment où elles hésitent : un commerce qui veut un site alors qu'il lui manque une fiche Google, un cabinet qui envisage un logiciel de gestion alors que ses comptes sont au nom d'un ancien associé. Ce qu'il enseigne dans cette formation vient de ces situations : l'ordre des chantiers, les comptes à reprendre en premier, les abonnements qui ne servent à rien. Il a aussi créé un produit, <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et sait ce que coûte un outil que personne n'utilise.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il exerce depuis " . $ans . " ans dans le numérique, a co-fondé <a href=\"https://audyxa.com\">Audyxa</a> et indique avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes, dirigeants et équipes. Il est intervenu dans " . count((array) fait('pays_travailles')) . " pays, en Afrique de l'Ouest et centrale comme en France, en Belgique, en Suisse et au Canada, ce qui lui permet d'adapter les exemples aux règles de facturation, de paiement et de protection des données de chaque pays.",
                "Sa manière de former se résume en engagements que vous pouvez vérifier : réponse sous 24 heures, programme écrit avant la session, exercices sur vos comptes et vos documents, aucun outil imposé, aucun abonnement revendu, évaluation sur ce que vous avez réellement fait, et franchise quand une formation n'est pas la bonne réponse. Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur la page <a href=\"/zones/\">zones d'intervention</a>, et les formations voisines sur la page <a href=\"/formations/domaine/transformation-digitale\">transformation digitale</a> du <a href=\"/formations/\">catalogue des formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de vous inscrire ?",
            'texte' => "Digitaliser une petite structure ne commence ni par un logiciel ni par un site : on fait le point sur une page, on met les comptes et les fichiers à l'abri, puis on traite une seule gêne, celle qui coûte le plus pour un effort modeste. On paie un outil après avoir prouvé qu'on s'en sert, on chiffre tout sur douze mois, et l'on ne passe au chantier suivant qu'une fois le premier constaté terminé.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Par quoi commencer dans votre structure ?",
            'texte'  => "Décrivez votre activité, le nombre de personnes, vos outils actuels et ce qui vous fait perdre le plus de temps : vous recevez une réponse sous 24 heures, puis une proposition de format et un devis. La formation se complète bien par la <a href=\"/formations/visibilite-google\">formation à la visibilité sur Google</a> ou la <a href=\"/formations/cybersecurite-employes\">formation cybersécurité pour les employés</a>.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation'],
        ],
    ],

    'faq' => [
        ['q' => "Je ne suis pas à l'aise avec l'informatique. Puis-je suivre la formation ?", 'r' => "Oui. Savoir se servir d'un smartphone et de WhatsApp suffit, et chaque geste est montré puis refait sur votre propre appareil. Si l'ordinateur vous rebute, venez avec le collaborateur qui fera les saisies : vous gardez les décisions, il apprend les manipulations avec vous."],
        ['q' => "Faut-il un site internet pour commencer ?", 'r' => "Pas forcément. Pour beaucoup de petites structures, une fiche d'établissement Google complète et un profil WhatsApp Business bien réglé apportent plus vite des clients qu'un site. Le site vient quand vos clients vous cherchent sur le web, quand vous devez présenter des réalisations ou vendre en ligne ; la page <a href=\"/services/site-vitrine-professionnel\">site vitrine professionnel</a> décrit alors cette étape."],
        ['q' => "Combien faut-il prévoir pour digitaliser une petite entreprise ?", 'r' => "Il n'y a pas de montant unique. La formation vous apprend à chiffrer vous-même un budget sur douze mois en trois colonnes : achats ponctuels, abonnements et frais récurrents, temps passé. Beaucoup de premiers chantiers démarrent avec des outils gratuits ; la formation elle-même est proposée sur devis."],
        ['q' => "Les outils gratuits suffisent-ils ?", 'r' => "Souvent pour démarrer : fiche Google, WhatsApp Business et compte Google avec 15 Go de stockage ne coûtent rien. Ils montrent leurs limites quand plusieurs personnes doivent partager des dossiers, quand l'adresse doit porter votre nom de domaine ou quand le stockage déborde. On passe alors à une suite payante, après avoir prouvé l'usage."],
        ['q' => "Combien de temps par semaine faudra-t-il y consacrer après la formation ?", 'r' => "Comptez deux à trois heures par semaine pendant le premier chantier, puis une revue de quinze minutes chaque lundi et une revue du budget chaque trimestre. Le plan à 90 jours est construit sur le temps que vous déclarez réellement disponible, pas sur un idéal."],
        ['q' => "Quelle différence avec la formation Stratégie de transformation digitale ?", 'r' => "Cette dernière s'adresse aux directions d'entreprises structurées qui bâtissent une feuille de route par service, avec budget et indicateurs. Digitaliser son entreprise pas à pas vise le dirigeant d'une petite structure qui fait lui-même, chantier par chantier, avec des outils simples."],
        ['q' => "Quelle différence avec la prestation de digitalisation d'entreprise ?", 'r' => "Dans la prestation, un professionnel mène le diagnostic, choisit et installe les outils et forme l'équipe. Dans la formation, c'est vous qui faites, accompagné. Rien n'empêche de commencer par la formation puis de confier un chantier plus lourd à un prestataire, en sachant cette fois lire son devis."],
        ['q' => "Puis-je venir avec mon associé ou un collaborateur ?", 'r' => "Oui, c'est même conseillé quand une autre personne tiendra les outils au quotidien. En groupe de dirigeants, chaque structure peut inscrire deux personnes ; en intra, le dirigeant et un ou deux collaborateurs travaillent ensemble."],
        ['q' => "Faut-il passer tout de suite à un logiciel comme Odoo ou Dolibarr ?", 'r' => "Rarement au premier chantier. Un logiciel de gestion se justifie quand plusieurs personnes saisissent ventes, stock et factures, et que les mêmes informations sont recopiées dans plusieurs fichiers. La formation vous apprend à reconnaître ce moment ; la <a href=\"/formations/dolibarr-utilisateurs\">formation Dolibarr</a>, la <a href=\"/formations/odoo-utilisateurs\">formation Odoo</a> et le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> prennent ensuite le relais."],
        ['q' => "Ma structure est en France ou en Belgique. La formation est-elle adaptée ?", 'r' => "Oui, à distance ou en formule mixte. Les exemples tiennent compte des obligations de votre pays, par exemple en France : réception des factures électroniques depuis le 1er septembre 2026 en France, émission à partir du 1er septembre 2027 pour les PME et microentreprises, RGPD pour vos fichiers de clients, et paiement par carte plutôt que par mobile money."],
        ['q' => "Que se passe-t-il après les deux jours ?", 'r' => "Vous appliquez votre plan à 90 jours. Un canal direct reste ouvert pour les questions d'application, et le point d'étape à distance, six semaines plus tard, reprend ce qui a été fait, corrige ce qui a calé et vous aide à choisir le chantier suivant."],
        ['q' => "La formation peut-elle être financée ?", 'r' => "Cela dépend du fonds et de votre situation : FDFP en Côte d'Ivoire, avec notamment un Projet TPE porté par un opérateur de formation, FODEFCA au Bénin, 3FPT au Sénégal, OPCO en France, ces derniers exigeant un prestataire certifié Qualiopi. Aucune prise en charge n'est garantie : interrogez le fonds par écrit avec le programme et le devis avant de signer."],
    ],

    'sources' => [
        ['titre' => "France Num (Direction générale des Entreprises), Baromètre France Num 2026, publié le 17 septembre 2026", 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le', 'date' => '2026-10-05'],
        ['titre' => "Aide Fiche d'établissement Google, ajouter ou revendiquer votre fiche d'établissement", 'url' => 'https://support.google.com/business/answer/2911778?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "WhatsApp Business, Meta One sur l'application WhatsApp Business (application gratuite, abonnements facultatifs)", 'url' => 'https://whatsappbusiness.com/fr/products/business-app-meta-one/', 'date' => '2026-10-05'],
        ['titre' => "Aide Google One, stockage inclus dans un compte Google (15 Go)", 'url' => 'https://support.google.com/googleone/answer/9312312?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google Workspace, tarifs", 'url' => 'https://workspace.google.com/intl/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, Microsoft 365 Business Basic (prix et conditions de résiliation)", 'url' => 'https://www.microsoft.com/fr-fr/microsoft-365/business/microsoft-365-business-basic', 'date' => '2026-10-05'],
        ['titre' => "Bitwarden, tarifs pour les entreprises", 'url' => 'https://bitwarden.com/fr-fr/pricing/business/', 'date' => '2026-10-05'],
        ['titre' => "FedaPay, tarifs au Bénin", 'url' => 'https://www.fedapay.com/pricing', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts du Bénin, plateforme e-MECeF", 'url' => 'https://e-mecef.impots.bj/', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts de Côte d'Ivoire, portail de la facture normalisée électronique (FNE)", 'url' => 'https://www.fne.dgi.gouv.ci/', 'date' => '2026-10-05'],
        ['titre' => "impots.gouv.fr, à partir de quand suis-je concerné par la réforme de la facturation électronique ?", 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Dolibarr, site officiel du projet (logiciel libre, dernière version)", 'url' => 'https://www.dolibarr.org/', 'date' => '2026-10-05'],
        ['titre' => "DataReportal, rapport Digital 2026 consacré au Bénin (8 novembre 2025)", 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, RGPD : les premières étapes", 'url' => 'https://www.cnil.fr/fr/passer-laction/rgpd-les-premieres-etapes', 'date' => '2026-10-05'],
        ['titre' => "FDFP, Projet TPE", 'url' => 'https://fdfp.ci/projet-tpe/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, Projet interentreprises", 'url' => 'https://fdfp.ci/projet-interentreprises/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['strategie-transformation-digitale', 'digitalisation-processus', 'excel-google-sheets', 'whatsapp-business', 'visibilite-google', 'cybersecurite-employes'],
        'services'    => ['digitalisation-d-entreprise', 'site-vitrine-professionnel', 'formation-en-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
