<?php
// ============================================================
// data/metiers/hotellerie-restauration.php · Page « formations par métier » :
// hôtellerie et restauration (hôtels, résidences, maisons d'hôtes,
// restaurants, maquis, bars et traiteurs). Vague 1C, univers Commerce et
// communication, non prioritaire, statut F : Richard a déjà formé ce public.
// Angle propre : réservations et plateformes, avis conformes aux règles de
// Google, fiche d'établissement, commandes WhatsApp, achats et stocks de
// denrées, hygiène et traçabilité, équipes en relais, données des clients.
// La page oriente vers visibilite-google, whatsapp-business, e-commerce et
// excel-google-sheets sans reprendre leur texte, ni celui des pages des
// commerçants (caisse, crédit, registres OHADA) et des commerciaux.
// Faits relevés le 05/10/2026 : aide Airbnb sur les frais de service,
// Commission européenne (Booking contrôleur d'accès, 13 mai 2024 ; avis
// trompeurs, 20 janvier 2022), site du règlement sur les marchés numériques,
// règlement de Google Maps sur les contenus, aide Google Business Profile
// (réservations via un fournisseur), politique de la messagerie WhatsApp
// Business (23 septembre 2026), Service Public Entreprendre (hygiène, bar et
// restaurant, allergènes), OMS (aide-mémoire du 4 juin 2026, Cinq clefs),
// ONU Tourisme (17 septembre 2026), AKTO ; faits vérifiés du catalogue
// (tarifs de Meta, tarifs d'Odoo, article 4 du règlement sur l'IA).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'       => "Formation numérique et IA pour l'hôtellerie et la restauration : des réservations sans doublon, des avis conformes aux règles de Google, des commandes WhatsApp suivies et des achats qui collent aux ventes",
    'title'       => 'Formation numérique hôtels et restaurants | Richard SALANON',
    'meta'        => 'Formation des hôtels, restaurants, maquis et traiteurs : réservations, avis Google conformes, commandes WhatsApp, stocks, hygiène et IA. Sur devis.',
    'en_bref'     => "Cette page présente le parcours conçu pour les hôtels, résidences et maisons d'hôtes, les restaurants, maquis et bars, et les traiteurs : tenir un seul planning des chambres, des tables et des commandes, lire les règles des plateformes de réservation, obtenir des avis sans enfreindre celles de Google, suivre les commandes WhatsApp, relier les achats de denrées aux ventes, prouver l'hygiène et la traçabilité, organiser la relève des équipes et protéger les données des clients. Le parcours type tient en quatre demi-journées, suivies d'une séance à distance, dans l'établissement, entre plusieurs établissements, à distance ou en hybride. Le prix est fixé sur devis.",
    'publie'      => '2026-10-22',
    'maj'         => '2026-10-05',
    'univers'     => 'Commerce et communication',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : un seul planning pour les chambres, les tables et les commandes',
            'duree'  => '3 h 30',
            'points' => [
                "Recensement des canaux par lesquels arrivent les demandes : téléphone de la réception, WhatsApp, clients de passage, Booking.com, Airbnb, Google, agences, groupes et événements.",
                "Le planning qui fait foi : où il vit, qui a le droit de le modifier, à quel moment une demande devient une réservation ferme.",
                "Fermer une chambre ou un créneau sur tous les canaux dès qu'il part, puis vérifier chaque soir que les calendriers concordent.",
                "Acompte, garantie, annulation et absence sans prévenir : la règle écrite par la direction, envoyée au client avec chaque confirmation.",
                "Confirmation, rappel de la veille et plan d'accès préparés en réponses rapides, identiques pour toute l'équipe.",
                "Exercice de contrôle : une semaine de demandes reçues par cinq canaux, à saisir sans doublon ni chambre promise deux fois.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : la fiche Google, les avis et les plateformes, dans les règles",
            'duree'  => '3 h 30',
            'points' => [
                "La fiche regardée comme un voyageur fatigué ou un client affamé : horaires des jours fériés, carte, photos réelles, bouton de réservation ou de commande.",
                "Ce que le règlement de Google Maps interdit : contrepartie, tri des clients, quotas d'avis fixés au personnel, avis de l'équipe ou des proches.",
                "La demande d'avis envoyée à chaque client de la même façon, après le départ ou le repas, avec le lien de la fiche.",
                "Répondre à un avis sur la propreté, l'attente, une intoxication alléguée ou une note contestée, sans rien révéler du client.",
                "Retrouver les conditions de chaque plateforme dans son extranet ou son centre d'aide : commission ou frais, annulation, versement, litiges.",
                "Exercice de contrôle : le revenu net d'une même nuit ou d'un même repas, calculé canal par canal.",
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : achats, stock de denrées, fiches techniques et traçabilité',
            'duree'  => '3 h 30',
            'points' => [
                "La fiche technique d'un plat ou d'un cocktail : ingrédients, grammages, coût de la portion, allergènes.",
                "Passer du planning des réservations à la liste d'achats du marché ou du fournisseur, sans acheter au jugé.",
                "La réception des marchandises : contrôle visuel, température, date limite, lot noté, photo du bon de livraison.",
                "L'inventaire des denrées et des boissons : rotation, pertes, casse, repas du personnel et consommations offertes.",
                "Le registre des températures et du nettoyage tenu sur téléphone, avec l'heure et le nom de la personne.",
                "Exercice de contrôle : un lot suspect à retrouver, du fournisseur jusqu'aux assiettes servies.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : équipes en relais, données des clients et IA encadrée",
            'duree'  => '3 h 30',
            'points' => [
                "Le cahier de consignes numérique lu à chaque relève : arrivées, incidents, clients à rappeler, ruptures en cuisine ou au bar.",
                "Le planning des équipes du matin, du soir et de nuit, partagé sans circulation de captures d'écran.",
                "Les comptes de l'établissement : qui accède à la fiche, aux plateformes et au WhatsApp, et ce qui se passe au départ d'un saisonnier.",
                "Les données des clients : pièces d'identité, cartes, allergies, préférences ; ce que l'on garde, où et pour combien de temps.",
                "L'IA pour répondre en plusieurs langues, décrire, préparer une réponse à un avis et lire les ventes, avec la charte d'usage de la maison.",
                "Exercice de contrôle : la réponse à un voyageur anglophone et à un avis difficile, préparées avec l'IA, relues et validées par la direction.",
            ],
        ],
        [
            'titre'  => 'Séance de suivi, quatre semaines plus tard : ce que le service a confirmé',
            'duree'  => '2 h, à distance',
            'points' => [
                "Lecture du planning : doublons évités ou survenus depuis la session, et leur cause.",
                "Point sur les avis reçus, les réponses publiées et le délai moyen de réponse.",
                "Revue des pertes, des écarts d'inventaire et des registres de températures.",
                "Décision écrite sur la suite : formation complémentaire, logiciel hôtelier ou de caisse, ou rien de plus pour l'instant.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Hôtels, résidences, maisons d'hôtes, restaurants, maquis, bars et traiteurs : direction, réception, salle et cuisine"],
        ['l' => 'Durée', 'v' => 'Quatre demi-journées sur deux jours, et un suivi de deux heures à distance'],
        ['l' => 'Formats', 'v' => "Dans l'établissement, entre établissements, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que changent l'IA, la digitalisation et l'automatisation pour un hôtel, un restaurant, un maquis ou un traiteur ?",
            'paragraphes' => [
                "Un hôtel, un restaurant, un maquis ou un traiteur vend une marchandise qui ne se garde pas. Une chambre vide ce soir ne se revendra jamais ; une sauce préparée pour quatre-vingts couverts qui n'en voit que quarante finit jetée. Le métier consiste à ajuster chaque jour ce que l'on prépare à ce qui sera réellement consommé. Or l'information qui permet cet ajustement arrive de partout : un appel à la réception, un message WhatsApp à 23 heures, une réservation tombée d'une plateforme, un groupe annoncé par un habitué, une commande de mariage pour dans trois semaines.",
                "La digitalisation, ici, ramène ces informations à un seul endroit que toute l'équipe consulte : un planning unique des chambres ou des tables, la liste des commandes à préparer, une fiche technique par plat avec ses quantités et son coût, un registre des achats et des températures, un cahier de consignes que l'équipe du soir lit avant de prendre le relais. Rien de cela n'exige un logiciel coûteux le premier mois. Un agenda partagé, un tableur bien construit et l'application WhatsApp Business bien réglée suffisent à beaucoup d'établissements modestes.",
                "L'automatisation arrive ensuite, pour les messages qui se répètent sans demander de jugement : la confirmation d'une réservation, le rappel de la veille, l'itinéraire envoyé au client qui approche, la demande d'avis après le départ. L'intelligence artificielle aide surtout à écrire et à lire : répondre en anglais à un voyageur, décrire un plat ou une chambre sans rien inventer, proposer une réponse à un avis difficile, repérer dans les ventes de la semaine les plats qui ne partent plus. Elle travaille sur ce qu'on lui donne ; si le planning est faux ou la fiche technique absente, elle se trompe avec aplomb.",
                "Richard SALANON n'est ni hôtelier, ni cuisinier, ni traiteur, et ne prétend pas apprendre l'accueil, la cuisine ou la tenue d'une salle à ceux qui en vivent. Il forme à l'usage des outils qui soutiennent ce métier, sur vos réservations, votre fiche Google, votre téléphone de commande et vos bons d'achat, puis oriente vers les formations détaillées du catalogue quand un sujet réclame plus de temps.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Du premier message du client jusqu'à son avis, où le numérique change-t-il le travail de l'établissement ?",
            'legende' => "Situation la plus fréquente avant la formation, apport d'un outil partagé et de l'IA, et ce qui reste toujours à l'équipe. Les étapes valent pour une nuitée comme pour un repas ou une prestation de traiteur.",
            'entetes' => ['Étape du séjour ou du repas', 'Ce qui se perd le plus souvent', 'Avec un outil simple et partagé', "Ce que l'IA peut proposer", "Ce qui reste à l'équipe"],
            'lignes'  => [
                ['Recherche du client', "Horaires faux sur la carte, photos de l'ancienne salle, numéro qui ne répond plus", 'Fiche Google à jour, horaires des fêtes saisis à l\'avance, carte en ligne', "Rédiger la présentation de l'établissement à partir de faits fournis", 'Choisir ce que l\'on promet, puis le tenir'],
                ['Demande de réservation', 'Message lu sans confirmation, appel noté sur un bout de papier', 'Planning unique des chambres ou des tables, réservation saisie pendant l\'appel', 'Proposer une réponse dans la langue du client, relue avant envoi', 'Accepter, refuser, proposer une autre date'],
                ['Acompte et garantie', 'Une capture d\'écran prise pour un paiement', 'Acompte vérifié sur le compte, conditions d\'annulation écrites et envoyées', 'Aucun rôle : la vérification reste humaine', 'Fixer la règle d\'annulation et l\'appliquer'],
                ['Arrivée ou installation', 'Un client attendu que l\'équipe du soir ne connaît pas', 'Liste des arrivées du jour, consignes lues à la relève', 'Résumer les demandes particulières d\'un groupe', 'Accueillir, vérifier l\'identité quand la loi l\'exige'],
                ['Commande en salle, à emporter ou livrée', 'Bon perdu entre la salle et la cuisine, commande WhatsApp oubliée', 'Bon numéroté, étiquette par étape sur WhatsApp, heure promise notée', 'Rien pendant le coup de feu : il faut aller vite', 'Annoncer un délai réaliste, prévenir d\'un retard'],
                ['Préparation et achats', 'Courses au marché sans liste, denrées oubliées au fond de la chambre froide', 'Fiches techniques, inventaire des denrées, registre des achats et des températures', 'Proposer une liste d\'achats à partir des réservations et des ventes passées', 'Juger la fraîcheur, refuser une livraison douteuse'],
                ['Départ ou addition', 'Note recalculée à la main, extras oubliés', 'Note tirée de la caisse ou du planning, facture conforme aux règles du pays', 'Aucun rôle utile', 'Encaisser, remercier, régler un désaccord'],
                ['Avis et retour du client', 'Avis négatifs sans réponse, demande d\'avis réservée aux clients contents', 'Même demande d\'avis pour tous, réponse publiée dans la semaine', 'Proposer un brouillon de réponse, sans détail privé', 'Relire, signer, corriger ce que l\'avis a révélé'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ne doivent jamais faire l'IA et l'automatisation dans un hôtel ou un restaurant, et quels textes le disent ?",
            'intro' => "L'établissement répond de ce qu'il affiche, promet, sert et conserve, que le texte vienne d'un salarié, d'un logiciel ou d'un assistant. Voici les limites rappelées à chaque session, avec les textes qui les posent.",
            'items' => [
                ['titre' => 'Écrire, acheter ou trier des avis', 'texte' => "Le règlement de Google Maps sur les contenus ajoutés par les utilisateurs interdit d'offrir un avantage contre un avis, qu'il s'agisse d'un paiement, d'une remise ou d'un produit offert, de solliciter les avis positifs de façon sélective, de demander au personnel un certain nombre d'avis et d'obliger le client à rédiger son avis sur place. Dans l'Union européenne, la directive (UE) 2019/2161, applicable depuis le 28 mai 2022, interdit d'acheter, de vendre ou de soumettre de faux avis. Un assistant qui « rédige quelques avis pour démarrer » fabrique une infraction, pas un lancement."],
                ['titre' => 'Annoncer une composition ou un allergène que personne n\'a vérifié', 'texte' => "Une IA qui rédige la carte peut ajouter « sans gluten » ou oublier l'arachide d'une sauce. En France, la fiche de Service Public Entreprendre sur les allergènes, vérifiée le 23 octobre 2025, exige pour les plats non préemballés une mention écrite et visible, près des produits ou du lieu de consommation, couvrant les quatorze familles d'allergènes du règlement (UE) n° 1169/2011 ; une information seulement orale ne suffit pas. Chaque mention sort de la fiche technique validée par le chef, jamais d'un texte généré."],
                ['titre' => 'Promettre à la place de la direction', 'texte' => "Un robot de réservation qui accorde une annulation gratuite, une chambre supérieure ou un menu de groupe au mauvais prix engage l'établissement. Le tribunal de Colombie-Britannique l'a jugé pour Air Canada en février 2024, comme le raconte la page <a href=\"/histoires/air-canada-chatbot\">Air Canada et son chatbot</a>. Les réponses automatiques se limitent donc aux conditions écrites par la direction ; le reste passe à un humain."],
                ['titre' => 'Réclamer une carte bancaire ou une pièce d\'identité par message', 'texte' => "La politique de la messagerie WhatsApp Business, mise à jour le 23 septembre 2026, demande de ne pas partager ni faire partager en entier un numéro de carte bancaire, de compte bancaire ou de carte d'identité. Une photo de passeport envoyée au téléphone de la réception, puis collée dans un assistant pour « remplir la fiche », sort deux fois du cadre. La garantie se prend par un lien de paiement ou au comptoir ; l'affaire <a href=\"/histoires/british-airways-piratage\">British Airways</a> montre ce que coûte une saisie de carte mal protégée."],
                ['titre' => 'Promouvoir l\'alcool sans lire les règles', 'texte' => "Bars, maquis et caves vendent des boissons alcoolisées. La même politique de WhatsApp exige que tout message qui en fait la promotion respecte les lois locales, les codes et licences applicables, les restrictions d'âge et de lieu, et n'atteigne aucune personne de moins de 18 ans ; elle renvoie à une liste de pays où ces messages sont admis. Avant de mettre une bière ou un cocktail dans un statut ou une diffusion, l'établissement vérifie à la source ce qui vaut pour son pays."],
                ['titre' => 'Disperser les données des clients', 'texte' => "Noms, numéros, dates de séjour, allergies, chambre occupée : le fichier d'un hôtel ou d'un traiteur en dit long. Au Bénin, la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 portant code du numérique</a> encadre leur collecte et leur conservation ; en Europe, le RGPD limite le traitement à ce que la finalité exige. Aucun export de réservations ne part dans un assistant en ligne sans anonymisation, et aucun ancien saisonnier ne garde l'accès à la messagerie de la maison."],
                ['titre' => 'Laisser l\'équipe utiliser l\'IA sans y être formée', 'texte' => "En Europe, l'article 4 du règlement sur l'IA oblige depuis le 2 février 2025 les entreprises qui utilisent ces outils à veiller à leur maîtrise par le personnel ; selon les questions et réponses de la Commission mises à jour le 27 juillet 2026, contrôle et sanctions sont possibles depuis le 3 août 2026. Une réception qui répond aux voyageurs avec un assistant entre dans ce cadre : des règles écrites et une formation courte font partie de l'obligation."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Booking.com, Airbnb, Google : que faut-il lire dans les règles et les tarifs des plateformes de réservation ?',
            'paragraphes' => [
                "Une plateforme de réservation apporte des clients qu'un petit établissement n'aurait jamais touchés seul, en particulier les voyageurs étrangers. Elle a un prix qui ne se résume pas à un pourcentage : conditions d'annulation, délai de versement, frais facturés au voyageur qui renchérissent le prix affiché, traitement des litiges. La formation n'apprend aucun chiffre par cœur, car ces règles changent ; elle apprend à les retrouver dans l'extranet ou le centre d'aide de chaque plateforme, et à les comparer canal par canal le jour où l'on décide.",
                "Un exemple montre pourquoi. Sur sa page d'aide consacrée aux frais de service, consultée le 5 octobre 2026, Airbnb indique faire passer tous les hôtes de logements aux « frais uniques » : pour la plupart d'entre eux, ils s'élèvent à 15,5 %, en général entre 14 et 16 %. Avec les « frais partagés », progressivement supprimés, la plupart des hôtes payaient 3 % et le voyageur entre 14,1 et 16,5 % du sous-total. Le changement ne vaut que pour les nouvelles réservations, et un compte passé aux frais uniques ne revient pas en arrière. Un hôte qui n'a pas revu ses prix encaisse moins pour la même nuit.",
                "Booking a été désigné contrôleur d'accès pour Booking.com par la Commission européenne le 13 mai 2024, au titre du règlement sur les marchés numériques, avec six mois pour se mettre en conformité. Parmi les obligations que le site officiel de ce règlement résume figure celle de laisser les entreprises utilisatrices promouvoir leur offre et conclure des contrats avec leurs clients en dehors de la plateforme. Pour un hôtel européen, c'est une raison de plus de soigner ses réservations directes ; pour un hôtel africain, les conditions restent celles de son contrat, et la commission se vérifie sur ses factures.",
                "Google ne facture pas la fiche d'établissement, mais sa page d'aide sur les réservations via un fournisseur précise que ce fournisseur partenaire peut, lui, facturer, et que ses services de réservation apparaissent sur la fiche dans un délai d'une semaine. L'exercice du programme consiste à calculer, pour une même chambre ou une même table, ce qui reste à l'établissement selon le canal : appel direct, WhatsApp, site, Google, plateforme. Le tableau obtenu sert à fixer prix et quotas, et à ne pas dépendre d'un seul distributeur, comme l'enseigne la <a href=\"/histoires/thomas-cook\">chute de Thomas Cook</a>.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils et systèmes un hôtel, un restaurant ou un traiteur doit-il savoir manier ?',
            'legende' => "Règles et prix relevés le 5 octobre 2026 sur les pages officielles citées dans les sources. Abonnements, commissions et frais restent payés par l'établissement à chaque éditeur, en dehors du devis de formation.",
            'entetes' => ['Outil ou système', "Son rôle dans l'établissement", "Ce qu'il coûte ou impose", "Où l'apprendre en détail"],
            'lignes'  => [
                ["Fiche d'établissement Google", 'Être trouvé, afficher horaires, carte, photos et avis, proposer un bouton de réservation', 'Sans frais pour la fiche ; le fournisseur de réservation partenaire peut facturer', '<a href="/formations/visibilite-google">Visibilité Google : fiche, avis, SEO local</a>'],
                ["Plateformes d'hébergement (Booking.com, Airbnb, Expedia)", 'Remplir les chambres avec une clientèle lointaine ou étrangère', 'Commission ou frais par réservation ; chez Airbnb, frais uniques de 15,5 % pour la plupart des hôtes ; conditions à relire dans chaque extranet', 'Ce parcours, puis le service <a href="/services/systeme-de-reservation-en-ligne">système de réservation en ligne</a> pour les réservations directes'],
                ['Gestionnaire de canaux et logiciel hôtelier', 'Tenir un seul calendrier de disponibilités pour tous les canaux', "Abonnement fixé par l'éditeur ; synchronisation à tester avant la haute saison", 'Ce parcours, pour savoir quoi exiger avant de signer'],
                ['Point de vente Odoo en mode restaurant', 'Plan de salle, commandes transmises en cuisine, notes partagées, stock qui baisse à chaque vente', 'Une application gratuite ; offre Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 €', '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Dolibarr et son point de vente TakePOS', 'Factures, achats, stocks et caisse dans un logiciel libre', 'Logiciel libre ; hébergement et paramétrage à prévoir', '<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['Application WhatsApp Business', 'Carte en catalogue, prise de commande, confirmations, étiquettes par créneau de retrait', 'Gratuite ; la plateforme de Meta facture au-delà de 1 000 messages de service par mois et par numéro depuis le 1er octobre 2026', '<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>'],
                ['Robot de réservation ou de commande sur WhatsApp', 'Répondre la nuit, prendre une commande simple, envoyer un rappel', 'Passe par la plateforme de Meta, avec modèles de messages approuvés et coûts par message', '<a href="/formations/chatbot-whatsapp">Chatbot WhatsApp et API WhatsApp Business</a>'],
                ['Tableur partagé', 'Fiches techniques, inventaire des denrées, registre des températures, planning des équipes', 'Souvent déjà disponible ; risque de versions multiples sur plusieurs téléphones', '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Passerelle de paiement', 'Encaisser un acompte à distance par mobile money ou par carte, avec un relevé', 'Commission par transaction ; règles de remboursement propres à chaque passerelle', '<a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">Comparatif FedaPay, KkiaPay et CinetPay</a>'],
                ["Assistant d'IA (ChatGPT, Claude, Gemini, Copilot)", 'Traduire, décrire, proposer des réponses, lire des ventes', 'Versions gratuites limitées, offres professionnelles par utilisateur ; règles de données à écrire', '<a href="/formations/ia-en-entreprise">IA en entreprise</a> et <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Hygiène, traçabilité, allergènes : que le numérique aide-t-il à prouver en cuisine ?',
            'paragraphes' => [
                "Selon l'aide-mémoire de l'Organisation mondiale de la santé sur la sécurité sanitaire des aliments, mis à jour le 4 juin 2026, environ 866 millions de personnes tombent malades chaque année après avoir consommé des aliments contaminés, et 1,52 million en meurent. Une cuisine de restaurant ou de traiteur, qui prépare en volume et parfois la veille, est en première ligne. Le numérique ne cuit rien et ne lave aucune main ; il sert à prouver que les gestes ont été faits, à la bonne heure, par la bonne personne, et à retrouver vite un lot quand un problème survient.",
                "En France, la fiche de Service Public Entreprendre sur les règles d'hygiène, vérifiée le 12 mars 2024, rend obligatoire dans la restauration commerciale une formation à l'hygiène alimentaire d'au moins 14 heures, suivie par une personne au moins de l'établissement. La même fiche cite les documents à tenir : fiches de réception des produits, relevés de températures, coordonnées des fournisseurs, fiches de non-conformité. Ce sont précisément les papiers que l'on oublie un soir de rush, et qu'un formulaire sur téléphone, horodaté et accompagné d'une photo, rend plus faciles à remplir et à montrer lors d'un contrôle.",
                "En Afrique de l'Ouest et du Centre, les textes et les autorités sanitaires varient d'un pays à l'autre ; la formation ne prétend pas les résumer, elle apprend à les demander et à ranger ce qu'ils exigent. Elle s'appuie sur une base commune à toutes les cuisines, le manuel de l'OMS « Cinq clefs pour des aliments plus sûrs », publié en 2006 et traduit dans des dizaines de langues : prendre l'habitude de la propreté, séparer le cru du cuit, bien cuire, maintenir les aliments à bonne température, utiliser de l'eau et des produits sûrs. Chaque clef devient une ligne de contrôle dans le registre numérique de l'établissement.",
                "Les allergènes demandent une rigueur à part, parce qu'une erreur ne se rattrape pas. La fiche technique de chaque plat liste tous ses ingrédients, sauces et garnitures comprises, et c'est elle qui alimente la carte, le catalogue WhatsApp et les réponses aux clients. Un assistant d'IA peut mettre cette information en forme ou la traduire pour un client anglophone ; il ne peut pas la deviner. Chez un traiteur, la même discipline vaut pour le transport : heure de sortie de cuisine, température à la livraison, heure de service, et consigne écrite pour ce qui revient.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon l'établissement, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => 'Hôtel de vingt-quatre chambres, à Cotonou', 'probleme' => "Les réservations arrivent par Booking.com, Airbnb, le téléphone de la réception et le WhatsApp du gérant ; deux fois dans le mois, la même chambre a été promise à deux clients.", 'solution' => "Un calendrier unique qui fait foi, saisie au moment de la demande, fermeture des disponibilités sur tous les canaux dès qu'une chambre part, conditions d'annulation envoyées en réponse rapide, et relève du soir qui commence par la liste des arrivées."],
                ['secteur' => 'Maquis et bar, à Abidjan', 'probleme' => "Les commandes à emporter arrivent en notes vocales, la casse et les boissons offertes ne sont notées nulle part, et le patron découvre l'écart de stock à la fin du mois.", 'solution' => "Étiquette WhatsApp par créneau de retrait, bon numéroté pour chaque commande, inventaire hebdomadaire des boissons avec une colonne pour la casse et une pour les offerts, et lecture des règles de WhatsApp sur l'alcool avant toute promotion."],
                ['secteur' => 'Traiteur événementiel, à Dakar', 'probleme' => "Le devis d'un mariage de quatre cents invités se calcule de tête, les allergies des convives se transmettent oralement, et l'acompte arrive en trois versements sans trace claire.", 'solution' => "Fiches techniques à la portion qui donnent les quantités d'achat, devis tiré d'un modèle, registre des acomptes, liste écrite des allergies remise à la cuisine, et relevé des températures au départ et à l'arrivée."],
                ['secteur' => 'Restaurant de quartier, à Lomé', 'probleme' => "La fiche Google a été créée par un client, avec d'anciens horaires et des photos d'avant les travaux ; trois avis négatifs attendent une réponse depuis un an.", 'solution' => "Reprise de la fiche, carte et photos à jour, même phrase de demande d'avis pour tous les clients du jour, brouillons de réponse préparés avec l'IA sans aucun détail sur les clients, puis relus et publiés par le gérant."],
                ['secteur' => "Lodge au bord du lac Ahémé, au Bénin", 'probleme' => "Une clientèle étrangère qui écrit en anglais, en allemand ou en néerlandais, des réservations prises des mois à l'avance et une connexion instable au bord de l'eau.", 'solution' => "Réponses types rédigées, traduites avec un assistant puis relues, planning tenu hors connexion et synchronisé chaque soir, acompte demandé par lien de paiement, et aucune copie de passeport reçue par message."],
                ['secteur' => 'Bistrot, à Bordeaux', 'probleme' => "La carte change chaque semaine, les serveurs répondent de mémoire aux questions sur les allergènes, et l'équipe traduit la carte en anglais avec un assistant d'IA sans règle commune.", 'solution' => "Fiche technique comme source unique des allergènes, mention écrite à côté des plats, traductions relues par un locuteur, et règles d'usage de l'IA écrites pour toute l'équipe au titre de l'article 4 du règlement européen."],
                ['secteur' => "Chambres d'hôtes, en Savoie", 'probleme' => "Le propriétaire a vu changer les frais d'Airbnb, ne sait plus ce que lui rapporte une nuit selon la plateforme et garde depuis des années les coordonnées de tous ses anciens clients.", 'solution' => "Tableau du revenu net par nuit et par canal, prix revus en conséquence, réservations directes encouragées par la fiche Google et le site, et tri des données anciennes conformément au RGPD."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels usages de l'IA font gagner du temps à un établissement, et à quelles conditions ?",
            'legende' => "Usages travaillés pendant la seconde journée sur des assistants courants. Deux règles valent pour tous : rien de confidentiel n'entre dans l'assistant, rien de ce qui en sort n'est publié sans relecture.",
            'entetes' => ['Usage', "Ce que l'on fournit à l'assistant", "Ce que l'on contrôle avant usage", "Ce qu'on ne lui confie jamais"],
            'lignes'  => [
                ['Répondre à une demande dans une autre langue', 'Le message du client sans son nom, les disponibilités, les conditions écrites', 'Dates, prix, conditions d\'annulation, ton de la réponse', 'La décision d\'accepter un groupe ou de baisser un prix'],
                ['Décrire une chambre ou un plat', 'Les faits : surface, équipements, ingrédients tirés de la fiche technique', 'Qu\'aucun équipement ni ingrédient n\'a été ajouté', 'La liste des allergènes, qui vient de la fiche validée'],
                ['Préparer la réponse à un avis', 'Le texte de l\'avis et les faits vérifiés par le gérant', 'Qu\'aucune information sur le séjour, le repas ou la santé du client n\'apparaît', 'Le droit de publier sans relecture'],
                ['Établir la liste d\'achats', 'Réservations de la semaine, ventes passées par plat, fiches techniques', 'Les quantités, recoupées avec l\'inventaire réel', 'La commande au fournisseur sans validation'],
                ['Chiffrer un devis de traiteur', 'Nombre d\'invités, menu retenu, fiches techniques à la portion', 'Quantités et prix recalculés par le responsable', 'Les conditions accordées aux autres clients'],
                ['Esquisser le planning des équipes', 'Effectifs, horaires d\'ouverture, contraintes connues', 'Repos, durée du travail, équité entre salariés', 'Le choix final, et toute appréciation sur une personne'],
                ['Résumer les avis du mois', 'Avis publics et remarques recueillies, sans nom', 'Que le résumé reflète les avis, chiffres recomptés', 'Les messages privés des clients avec leur numéro'],
                ['Traduire la carte ou le livret d\'accueil', 'Le texte déjà validé', 'Le sens, relu par une personne qui parle la langue', 'Les mentions d\'allergènes ou les conditions de vente sans relecture'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type pour un hôtel ou un restaurant, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment le parcours s'organise-t-il autour des services et de la saison ?",
            'items' => [
                ['titre' => 'Le premier échange', 'duree' => '30 minutes', 'texte' => "Type d'établissement, nombre de chambres ou de couverts, canaux de réservation et de commande, taille des équipes, ce qui coince aujourd'hui. Cet échange, le cadrage qui suit et le devis ne vous coûtent rien."],
                ['titre' => 'Une observation pendant un service', 'duree' => '1 à 2 heures', 'texte' => "Avant la session, un passage pendant un service ou une arrivée de groupe, ou un appel vidéo pour un établissement éloigné, montre où l'information se perd : entre la réception et le ménage, entre la salle et la cuisine, entre le téléphone et le planning."],
                ['titre' => 'Le choix des demi-journées', 'duree' => 'Selon le devis', 'texte' => "Le programme type est ajusté. Un hôtel insiste sur le planning et les plateformes, un restaurant sur les commandes et les fiches techniques, un traiteur sur les devis, les achats et le transport. Les demi-journées sans objet sont retirées."],
                ['titre' => 'Des horaires calés entre deux services', 'duree' => 'Basse saison de préférence', 'texte' => "On ne ferme pas la salle pour se former. Les séances se placent entre le déjeuner et le dîner, le jour de fermeture ou hors saison, et le personnel passe par roulement pour que le service continue."],
                ['titre' => 'La pratique sur vos propres réservations', 'duree' => 'Pendant chaque séance', 'texte' => "Le planning se construit sur les réservations du mois, la fiche technique sur un plat de la carte, la réponse sur un avis réellement reçu. Ce qui est produit en séance sert dès le service suivant."],
                ['titre' => 'Le suivi', 'duree' => '2 heures, à distance', 'texte' => "Quatre semaines plus tard, on relit le planning, les avis, les inventaires et les registres réellement tenus, on corrige ce qui n'a pas pris, et l'on décide par écrit de la suite."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans l'établissement, entre établissements, à distance ou en hybride : quel format retenir ?",
            'legende' => "Le format se décide au premier échange, selon la taille de l'équipe, le rythme des services, la saison et la qualité de la connexion.",
            'entetes' => ['Format', 'Situation typique', 'Rythme habituel', "Points d'organisation"],
            'lignes'  => [
                ["Intra, dans l'établissement", "Un hôtel, un restaurant ou un traiteur et ses équipes de réception, de salle et de cuisine", "Quatre demi-journées, entre deux services ou en basse saison", "Travail sur le planning, la fiche et le téléphone réels ; personnel formé par roulement"],
                ['Inter, entre établissements', "Association d'hôteliers ou de restaurateurs, office de tourisme, réseau de maquis ou de franchisés", 'Deux journées en salle', "Chacun travaille sur son propre établissement ; aucun chiffre ni avis d'un participant n'est montré aux autres sans accord"],
                ['À distance', "Lodges et hôtels éloignés, établissements en Europe ou au Canada, gérants souvent en déplacement", 'Quatre séances de deux heures et demie, à une semaine d\'intervalle', "Partage d'écran, exercices à faire pendant un vrai service entre deux séances"],
                ['Hybride', "Ouverture d'un établissement, changement de logiciel de caisse ou hôtelier, arrivée d'une nouvelle équipe avant la saison", 'Une journée sur place, puis deux séances courtes à distance', "Planning et fiches techniques posés sur place ; avis, plateformes et IA repris à distance sur des cas réels"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation pour un établissement, et comment la régler ?",
            'intro'      => "Aucun tarif n'est publié : chaque parcours est chiffré sur devis, après un premier échange, un cadrage et un devis qui ne sont pas facturés. Le règlement se fait par virement, en espèces, par carte bancaire, par PayPal ou par Mobile Money (MTN, Moov). Les commissions des plateformes et les abonnements aux logiciels restent payés par l'établissement à leurs éditeurs.",
            'items'      => [
                ['offre' => 'Parcours hôtel ou résidence', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur votre planning, vos plateformes et votre fiche', 'Conditions d\'annulation et réponses types écrites pour la réception', 'Séance de suivi à distance']],
                ['offre' => 'Parcours restaurant, maquis ou bar', 'prix' => 'Sur devis', 'inclus' => ['Commandes WhatsApp, fiches techniques, inventaire des denrées et des boissons', 'Registre des températures et des allergènes', 'Usage encadré de l\'IA pour la carte et les avis']],
                ['offre' => 'Parcours traiteur', 'prix' => 'Sur devis', 'inclus' => ['Devis à la portion, acomptes, achats et transport', 'Liste des allergies des convives et relevés de températures', 'Séances placées hors des grandes dates de la saison']],
                ['offre' => 'Module à la carte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée ciblée : avis et fiche Google, plateformes, achats et stock, ou IA', 'Pour un établissement déjà organisé sur le reste']],
            ],
            'variations' => [
                "Le nombre de personnes à former et le roulement nécessaire pour ne pas interrompre le service.",
                "Le nombre de demi-journées retenues et l'ajout de la séance de suivi.",
                "Le lieu : l'établissement, une salle d'association, une ville éloignée de Cotonou, ou la distance.",
                "L'état de départ : cahier et téléphone seuls, tableur, logiciel de caisse ou hôtelier déjà installé.",
                "La préparation : fiches techniques à reconstruire, fiche Google à reprendre, réservations à reprendre sur plusieurs canaux.",
                "La langue des séances et des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un hôtel ou un restaurant peut-il faire financer la formation de ses équipes ?",
            'paragraphes' => [
                "La question se pose avant la signature, jamais après. Le guichet dépend du pays, de la forme de l'établissement et de sa situation au regard des taxes de formation : un hôtel qui emploie trente salariés déclarés, un restaurant tenu en famille et un traiteur qui travaille avec des extras ne frappent pas à la même porte. Le geste utile reste partout le même : écrire au fonds, joindre le programme et le devis, et conserver sa réponse écrite.",
                "En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> accepte le plan de formation de toute entreprise qui justifie du paiement régulier de ses deux taxes, puis le suit, le contrôle et le fait approuver par sa Commission permanente avant tout règlement. Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> tient un guichet pour le personnel des entreprises et les membres des organisations professionnelles, piste sérieuse pour une association d'hôteliers ou de restaurateurs qui forme ses membres ensemble.",
                "En France, les hôtels, cafés et restaurants, comme la restauration rapide, figurent parmi les branches suivies par <a href=\"https://www.akto.fr/\">AKTO</a>, qui se présente comme l'opérateur de compétences des branches professionnelles des services. Mais <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que l'accès aux fonds publics et mutualisés exige, depuis le 1er janvier 2022, un prestataire certifié Qualiopi. Richard SALANON n'affiche ni cette certification ni l'agrément d'un fonds africain : prévoyez le budget sans prise en charge. Programme, feuilles de présence et résultats des exercices vous sont remis dans tous les cas.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi une même chambre ne doit-elle jamais être en vente sur deux calendriers qui ne se parlent pas ?',
            'texte' => "Parce que le surbooking ne prévient pas. Une chambre réservée sur une plateforme à 14 heures, puis promise au téléphone à 14 h 30 par un réceptionniste qui regardait le cahier, produit à 22 heures un client sans chambre, un relogement à payer ailleurs et un avis cinglant que tout le monde lira. La règle posée dès la première demi-journée tient en trois gestes : un seul calendrier fait foi, toute réservation y entre au moment où elle est acceptée, et quelqu'un vérifie chaque soir que les canaux affichent les mêmes disponibilités. Un gestionnaire de canaux automatise le troisième geste ; il ne remplace jamais les deux premiers.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les hôtels et les restaurants qui se digitalisent, et comment les éviter ?",
            'intro' => "Ces erreurs viennent rarement de la négligence. Elles naissent du rythme du service, qui pousse à remettre à plus tard tout ce qui n'est pas le client présent. Chacune a sa parade, travaillée pendant le parcours.",
            'items' => [
                ['titre' => 'Demander un avis aux seuls clients ravis', 'texte' => "Le serveur tend le QR code à la table qui a complimenté le chef et l'oublie à celle qui a attendu quarante minutes. C'est exactement la sollicitation sélective que Google interdit. La même phrase se dit à chaque table et part dans chaque message de départ, sans exception."],
                ['titre' => 'Offrir le café contre une étoile', 'texte' => "Un digestif, une remise sur la prochaine nuit ou un dessert en échange d'un avis restent une contrepartie, même modeste. Les avis obtenus ainsi peuvent être retirés et la fiche sanctionnée. Le geste commercial existe, mais il ne se lie jamais à l'avis."],
                ['titre' => 'Deux cartes qui ne disent pas la même chose', 'texte' => "Le prix a changé en salle, pas sur la fiche Google ni dans le catalogue WhatsApp, et un client exige l'ancien tarif. La fiche technique et la carte de la salle font foi ; chaque changement se reporte le jour même sur tous les supports, par une personne désignée."],
                ['titre' => 'Le téléphone de commande dans la poche du chef de salle', 'texte' => "Le numéro que les clients connaissent appartient à un salarié, qui part en emportant les conversations et les habitués. Le numéro, la fiche et les comptes des plateformes appartiennent à l'établissement, avec un second administrateur de confiance."],
                ['titre' => 'Ouvrir tous les canaux de réservation la même semaine', 'texte' => "Trois plateformes, un site et un robot WhatsApp lancés ensemble multiplient les doublons. On commence par le planning unique et les réservations directes, puis on ajoute un canal à la fois, en vérifiant la synchronisation à chaque étape."],
                ['titre' => 'Remplir les registres en fin de semaine', 'texte' => "Des relevés de températures écrits le dimanche pour toute la semaine ne prouvent rien, et le jour d'un incident ils se retournent contre l'établissement. Le relevé se fait au moment du geste, sur le téléphone, avec l'heure ; une ligne manquante vaut mieux qu'une ligne inventée."],
                ['titre' => 'Laisser l\'IA répondre seule aux avis', 'texte' => "Des réponses toutes identiques, ou qui remercient pour un séjour que le client n'a pas fait, se repèrent vite et abîment la réputation plus qu'un silence. L'assistant propose un brouillon ; le gérant le corrige avec ce qu'il sait du service et le signe."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés un hôtelier ou un restaurateur doit-il connaître avant de s'équiper ?",
            'items' => [
                ['valeur' => '866 millions', 'libelle' => 'Personnes qui tombent malades chaque année après avoir consommé des aliments contaminés ; 1,52 million en meurent', 'source' => 'OMS, aide-mémoire sur la sécurité sanitaire des aliments, 4 juin 2026', 'url' => 'https://www.who.int/fr/news-room/fact-sheets/detail/food-safety'],
                ['valeur' => '690 millions', 'libelle' => 'Touristes internationaux entre janvier et juin 2026 dans le monde, soit +0,4 % ; les arrivées en Afrique progressent de 4 %', 'source' => 'ONU Tourisme, communiqué du 17 septembre 2026', 'url' => 'https://www.untourism.int/news/international-tourism-holds-steady-with-04-growth-in-first-half-of-2026-as-middle-east-conflict-and-rising-costs-weigh-on-momentum'],
                ['valeur' => '71 %', 'libelle' => 'Part des consommateurs européens qui jugent les avis importants pour choisir un logement de vacances, selon l\'enquête de surveillance des marchés 2020', 'source' => 'Commission européenne, communiqué du 20 janvier 2022', 'url' => 'https://ec.europa.eu/commission/presscorner/detail/fr/ip_22_394'],
                ['valeur' => '55 %', 'libelle' => 'Part au moins des 223 grands sites contrôlés en Europe, plateformes de réservation comprises, qui enfreignaient potentiellement les règles sur les avis', 'source' => 'Commission européenne et autorités nationales, opération de contrôle publiée le 20 janvier 2022', 'url' => 'https://ec.europa.eu/commission/presscorner/detail/fr/ip_22_394'],
                ['valeur' => '15,5 %', 'libelle' => 'Frais uniques prélevés à la plupart des hôtes de logements par Airbnb, en général entre 14 et 16 %, contre 3 % dans l\'ancien système de frais partagés', 'source' => 'Airbnb, page d\'aide sur les frais de service, consultée le 5 octobre 2026', 'url' => 'https://www.airbnb.fr/help/article/1857'],
                ['valeur' => '14 heures', 'libelle' => 'Durée minimale de la formation à l\'hygiène alimentaire exigée en France dans la restauration commerciale, pour une personne au moins de l\'établissement', 'source' => 'Service Public Entreprendre, règles d\'hygiène, vérifié le 12 mars 2024', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F32189'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Coupures, langues, saisons, clientèle étrangère : que change le pays où l'on reçoit ?",
            'paragraphes' => [
                "Un planning qui n'existe qu'en ligne s'arrête avec la connexion, et une réception ne peut pas répondre « revenez quand le réseau sera là ». La formation prévoit toujours le mode dégradé : le planning du lendemain exporté chaque soir, un cahier de secours daté, la saisie rattrapée dès le retour du réseau, sans doublon. Le même raisonnement vaut pour la caisse d'un maquis pendant une coupure d'électricité : on décide à l'avance qui note, sur quel support, et qui ressaisit ensuite.",
                "La clientèle d'un hôtel de Cotonou, de Dakar ou de Douala mêle voyageurs d'affaires, diaspora en vacances, touristes et missions d'organisations internationales. Les messages arrivent en français, en anglais, parfois en portugais ou en allemand, et les avis aussi. Un assistant d'IA aide beaucoup à comprendre et à répondre, si une personne relit les dates, les montants et les promesses. Les réponses types se préparent une fois pour toutes dans les deux ou trois langues les plus fréquentes de la maison, plutôt que traduites à la volée pendant le service.",
                "Selon le communiqué d'ONU Tourisme du 17 septembre 2026, environ 690 millions de touristes ont voyagé à l'étranger entre janvier et juin 2026, un niveau presque stable dans le monde mais en hausse de 4 % pour l'Afrique. Les pointes d'un établissement suivent aussi le calendrier local : fêtes religieuses, vacances de la diaspora, festivals, saison des conférences. La formation se place en dehors de ces pointes et apprend à les préparer : horaires exceptionnels sur la fiche, quotas par canal, achats anticipés, équipes renforcées.",
                "En France, la fiche de Service Public Entreprendre consacrée aux bars et restaurants, vérifiée le 18 février 2025, rappelle qu'une addition doit toujours être remise, que la carte et le menu du jour s'affichent à l'extérieur pendant le service, que le prix de tous les plats et boissons figure sur la carte, avec la mention « prix service compris » le cas échéant, et que la possibilité d'obtenir gratuitement de l'eau potable doit être affichée. La carte publiée sur la fiche Google ou dans le catalogue WhatsApp doit dire la même chose que celle de la salle.",
                "L'argent, enfin, suit des chemins variés : mobile money pour la clientèle locale, carte pour les voyageurs étrangers, virement pour les entreprises et les organisations qui logent leurs équipes. Chaque acompte se vérifie sur le compte de l'établissement avant que la chambre ou la date soit bloquée. Les pièces d'identité et les fiches des voyageurs se rangent là où la loi du pays le demande, jamais dans la galerie de photos d'un téléphone ni dans une conversation WhatsApp, et se détruisent une fois leur durée de conservation écoulée.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles formations du catalogue prolongent ce parcours pour un hôtel, un restaurant ou un traiteur ?',
            'legende' => "Chaque formation a sa fiche et son programme détaillé. Le parcours de cette page en pose les premiers gestes pour un établissement ; la fiche approfondit un outil ou un sujet.",
            'entetes' => ['Formation', "Ce qu'elle règle dans l'établissement", 'Pour quel poste', 'Durée annoncée sur sa fiche'],
            'lignes'  => [
                ['<a href="/formations/visibilite-google">Visibilité Google : fiche, avis, SEO local</a>', "Fiche d'établissement, demande d'avis conforme, réponses, horaires des fêtes", 'Gérant et personne qui tiendra la fiche', '1 jour, ou une demi-journée en format resserré'],
                ['<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>', 'Carte en catalogue, réponses rapides, étiquettes par créneau, relevé des commandes', 'Réception, caisse, personne qui tient le téléphone de commande', 'Une demi-journée ou une journée, puis une séance de suivi'],
                ['<a href="/formations/e-commerce">Vendre en ligne : e-commerce</a>', 'Vente en ligne de plats, de coffrets ou de bons cadeaux : paiement, livraison, retours', 'Traiteurs et restaurants qui vendent sur un site', 'Deux jours, puis une séance de suivi à distance'],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', 'Fiches techniques, inventaire, registre des achats et planning qui tombent juste', 'Gérant, économe, chef de cuisine', '2 jours en quatre demi-journées, plus un retour à un mois'],
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', 'Point de vente, achats et stock dans un même logiciel', "Équipes d'un établissement qui passe à Odoo", '2 à 3 jours en demi-journées, répartis sur 5 à 6 semaines'],
                ['<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>', 'Du devis au règlement, caisse comprise, dans un logiciel libre', 'Traiteurs et restaurants sous Dolibarr', '2 jours en quatre demi-journées'],
                ['<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>', 'Commandes et réservations reçues par message rattachées au logiciel de gestion', 'Établissements qui reçoivent beaucoup de commandes à distance', 'Deux jours, ou une journée et demie selon les rôles'],
                ['<a href="/formations/chatbot-whatsapp">Chatbot WhatsApp et API WhatsApp Business</a>', 'Robot de réservation ou de commande conforme aux règles de Meta', 'Gérant et personne chargée des outils', 'Deux jours, puis une séance de suivi à distance'],
                ['<a href="/formations/contenu-avec-ia">Créer du contenu avec l\'IA</a>', 'Photos, textes et vidéos courtes pour les réseaux, avec relecture et droits', "Personne qui publie pour l'établissement", '2 jours en 4 demi-journées, ou 1 jour resserré'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Faux messages au nom des plateformes, mots de passe, téléphones perdus, comptes piratés', "Tous ceux qui touchent un compte de l'établissement", 'Une journée, puis un suivi de deux heures'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Ce que la loi permet de faire des données des clients avec l'IA", 'Direction et responsable de la réception', '1 jour de socle, ou 2 jours en 4 demi-journées'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre établissement avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des hôteliers, des restaurateurs et des traiteurs, sur leurs propres outils : le planning de la réception, la fiche Google, le téléphone de commande, le tableur des achats, l'assistant d'IA retenu par la direction. Il ne touche aucune commission d'une plateforme de réservation, ne revend aucun logiciel de caisse ou hôtelier, et n'est ni partenaire ni certifié d'un éditeur. Il peut donc conseiller de garder un tableur bien tenu quand un abonnement serait prématuré, ou de réduire la part d'une plateforme quand elle pèse trop sur les marges.",
                "Créateur de <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>, il compte " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . ") et des missions dans " . count((array) fait('pays_travailles')) . " pays. Il déclare plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées au numérique, à l'IA, à l'automatisation et aux logiciels de gestion. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur celle des <a href=\"/zones/\">zones d'intervention</a>.",
                "Ses engagements se vérifient : réponse sous 24 heures, programme écrit avant la première séance, exercices sur vos réservations, vos avis et vos fiches techniques, supports modifiables qui restent à la maison, et avis franc quand une formation n'est pas la bonne réponse. Quand il s'agit d'installer plutôt que de former, les services <a href=\"/services/seo-local-google-business\">SEO local et fiche Google</a>, <a href=\"/services/systeme-de-reservation-en-ligne\">système de réservation en ligne</a> et <a href=\"/services/integration-whatsapp\">intégration WhatsApp</a> prennent le relais. Le catalogue complet figure sur la page des <a href=\"/formations/\">formations</a>, et les formations à la visibilité sur la page <a href=\"/formations/domaine/marketing-visibilite\">marketing et visibilité</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre établissement ?",
            'texte' => "Un seul planning qui fait foi pour les chambres, les tables et les commandes ; des conditions d'annulation écrites ; la même demande d'avis pour tous, sans contrepartie ; une fiche technique par plat, source unique des allergènes ; des achats tirés des réservations ; des registres remplis au moment du geste ; une relève écrite entre les équipes. L'IA traduit, décrit et propose ; elle ne promet rien, ne compose aucune liste d'allergènes et ne publie aucun avis à la place de l'équipe.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre réception, votre salle ou votre cuisine au numérique et à l'IA ?",
            'texte'  => "Indiquez le type d'établissement, le nombre de chambres ou de couverts, la ville, vos canaux de réservation et de commande et le format souhaité : vous recevez une réponse sous 24 heures, puis un programme ajusté à votre maison et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon établissement'],
        ],
    ],

    'faq' => [
        ['q' => "Notre hôtel ne travaille qu'avec le téléphone et un cahier : la formation est-elle adaptée ?", 'r' => "Oui. Le parcours commence par un planning partagé tenu sur téléphone ou dans un tableur, puis par des conditions écrites et des réponses types. Un logiciel hôtelier ou un gestionnaire de canaux ne se justifie qu'ensuite, quand les plateformes et le nombre de chambres le demandent, et la formation apprend à le choisir sur des critères concrets."],
        ['q' => "Faut-il rester sur Booking.com ou Airbnb ?", 'r' => "La formation ne tranche pas à votre place. Elle vous fait calculer ce qui reste à l'établissement pour une même nuit selon le canal, relire les conditions de chaque plateforme dans son extranet et mesurer la part de chacune. La plupart des établissements gardent les plateformes pour la visibilité et développent en parallèle les réservations directes, pour ne pas dépendre d'un seul distributeur."],
        ['q' => "Peut-on offrir un dessert ou une remise contre un avis Google ?", 'r' => "Non. Le règlement de Google Maps interdit toute contrepartie à un avis, paiement, remise ou produit offert, ainsi que la sollicitation des seuls clients satisfaits et les quotas d'avis fixés au personnel. Dans l'Union européenne, l'achat et la soumission de faux avis sont interdits depuis le 28 mai 2022. La formation apprend à demander un avis à tous, de la même façon."],
        ['q' => "Comment répondre à un client qui accuse le restaurant de l'avoir rendu malade ?", 'r' => "Publiquement, avec calme et sans rien révéler de sa santé ni de sa commande, en proposant un échange privé. En interne, on ressort les relevés de températures, les bons de réception et les lots du jour concerné : ce sont eux qui permettent de répondre sur des faits. L'avis ne se signale à Google que s'il enfreint son règlement."],
        ['q' => "L'IA peut-elle rédiger notre carte et les descriptions de nos chambres ?", 'r' => "Elle peut mettre en forme et traduire ce que vous lui donnez : ingrédients tirés de la fiche technique, équipements réels de la chambre. Elle ne doit rien ajouter, et les allergènes viennent toujours de la fiche validée par le chef, jamais d'un texte généré. Chaque texte est relu par la personne qui en répond avant publication."],
        ['q' => "Peut-on demander la carte bancaire d'un client sur WhatsApp pour garantir une réservation ?", 'r' => "Non. La politique de la messagerie WhatsApp Business demande de ne pas faire partager en entier un numéro de carte, de compte bancaire ou de pièce d'identité. La garantie se prend par un lien de paiement d'une passerelle, par un terminal au comptoir ou par un acompte en mobile money vérifié sur le compte de l'établissement."],
        ['q' => "Un maquis ou un bar peut-il faire la promotion de ses boissons sur WhatsApp ?", 'r' => "Avec beaucoup de prudence. La politique de WhatsApp exige que les messages qui font la promotion de l'alcool respectent les lois locales et les restrictions d'âge, n'atteignent aucune personne de moins de 18 ans, et renvoie à une liste de pays où ils sont admis. On vérifie cette liste et la loi de son pays avant tout statut ou diffusion."],
        ['q' => "Nos serveurs et réceptionnistes changent souvent : comment garder les bonnes pratiques ?", 'r' => "En les sortant des têtes. Chaque geste appris devient une fiche d'une page, les réponses types sont enregistrées sur le téléphone de l'établissement, et les comptes appartiennent à la maison, pas aux personnes. Un nouvel arrivant se forme alors en une heure avec son responsable, sans refaire la session."],
        ['q' => "Faut-il un logiciel hôtelier ou un gestionnaire de canaux ?", 'r' => "Pas toujours. Il devient utile quand plusieurs plateformes vendent les mêmes chambres et que la vérification du soir prend trop de temps. On le juge sur sa synchronisation avec vos canaux, son fonctionnement en cas de coupure, l'export de vos données et son coût réel, et on le teste avant la haute saison, jamais pendant."],
        ['q' => "Les traiteurs sont-ils concernés autant que les restaurants ?", 'r' => "Oui, avec leurs propres priorités : devis calculés à la portion, acomptes suivis, achats tirés du nombre d'invités, allergies des convives transmises par écrit à la cuisine, et températures relevées au départ et à l'arrivée. Le parcours traiteur remplace une partie du travail sur le planning des chambres par ces sujets."],
        ['q' => "La formation peut-elle se tenir pendant la haute saison ?", 'r' => "On l'évite. Les séances se placent de préférence en basse saison, entre le déjeuner et le dîner ou le jour de fermeture, et le personnel passe par roulement. À distance, quatre séances de deux heures et demie, espacées d'une semaine, laissent le temps d'appliquer chaque étape pendant un vrai service."],
        ['q' => "Que reste-t-il à l'établissement après la formation ?", 'r' => "Le planning unique et sa règle de mise à jour, les conditions d'annulation écrites, les réponses types dans vos langues, le kit de demande d'avis, des fiches techniques modèles, la grille d'inventaire, le registre des températures, le cahier de consignes de la relève et la charte d'usage de l'IA, tous dans un format modifiable."],
        ['q' => "La formation peut-elle être financée ?", 'r' => "Cela dépend du pays et du fonds : FDFP en Côte d'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal. En France, l'opérateur de compétences de la branche, AKTO, comme tout fonds mutualisé, exige un organisme certifié Qualiopi, ce que Richard SALANON n'affiche pas. Interrogez le fonds par écrit avant de signer et prévoyez le budget sans prise en charge."],
    ],

    'sources' => [
        ['titre' => 'Airbnb, centre d\'aide : frais de service (frais partagés et frais uniques)', 'url' => 'https://www.airbnb.fr/help/article/1857', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, la Commission désigne Booking comme contrôleur d\'accès (13 mai 2024)', 'url' => 'https://ec.europa.eu/commission/presscorner/detail/fr/ip_24_2561', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, présentation du règlement sur les marchés numériques et des obligations des contrôleurs d\'accès', 'url' => 'https://digital-markets-act.ec.europa.eu/about-dma_en', 'date' => '2026-10-05'],
        ['titre' => 'Règlement relatif aux contenus ajoutés par les utilisateurs dans Google Maps, contenus interdits et soumis à des restrictions', 'url' => 'https://support.google.com/contributionpolicy/answer/7400114?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Fiche d\'établissement Google, configurer les réservations via un fournisseur', 'url' => 'https://support.google.com/business/answer/7475773?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, protection des consommateurs contre les avis trompeurs : 55 % des sites web contrôlés enfreignent les règles de l\'UE (20 janvier 2022)', 'url' => 'https://ec.europa.eu/commission/presscorner/detail/fr/ip_22_394', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, politique de la messagerie WhatsApp Business (mise à jour du 23 septembre 2026)', 'url' => 'https://whatsappbusiness.com/fr/policy/', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (version française lue dans un navigateur)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Service Public Entreprendre, règles d\'hygiène dans la restauration et les commerces alimentaires (vérifié le 12 mars 2024)', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F32189', 'date' => '2026-10-05'],
        ['titre' => 'Service Public Entreprendre, réglementation dans un bar ou un restaurant (vérifié le 18 février 2025)', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F22387', 'date' => '2026-10-05'],
        ['titre' => 'Service Public Entreprendre, information sur les allergènes (vérifié le 23 octobre 2025)', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F32192', 'date' => '2026-10-05'],
        ['titre' => 'Organisation mondiale de la santé, aide-mémoire sur la sécurité sanitaire des aliments (4 juin 2026)', 'url' => 'https://www.who.int/fr/news-room/fact-sheets/detail/food-safety', 'date' => '2026-10-05'],
        ['titre' => 'Organisation mondiale de la santé, Cinq clefs pour des aliments plus sûrs : manuel (2006)', 'url' => 'https://www.who.int/fr/publications/i/item/9789241594639', 'date' => '2026-10-05'],
        ['titre' => 'ONU Tourisme, le tourisme international progresse de 0,4 % au premier semestre 2026 (17 septembre 2026)', 'url' => 'https://www.untourism.int/news/international-tourism-holds-steady-with-04-growth-in-first-half-of-2026-as-middle-east-conflict-and-rising-costs-weigh-on-momentum', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, page des tarifs (version française, lue dans un navigateur)', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, règlement général sur la protection des données (RGPD)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'AKTO, opérateur de compétences des branches professionnelles des services', 'url' => 'https://www.akto.fr/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['visibilite-google', 'whatsapp-business', 'e-commerce', 'excel-google-sheets', 'odoo-utilisateurs', 'contenu-avec-ia'],
        'services'    => ['seo-local-google-business', 'systeme-de-reservation-en-ligne', 'integration-whatsapp'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
    ],
];
