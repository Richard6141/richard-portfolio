<?php
// ============================================================
// data/formations/whatsapp-business.php · Fiche formation « WhatsApp
// Business pour vendre » (vague 1B, lot A, domaine automatisation).
// Angle propre : vendre avec l'APPLICATION WhatsApp Business (profil,
// catalogue, réponses rapides, étiquettes, statuts, diffusions). L'API et
// les robots relèvent de chatbot-whatsapp ; le lien avec Odoo, Dolibarr ou
// un CRM, de whatsapp-odoo-dolibarr-crm. Reprend l'ancienne page
// /formation-whatsapp-business (durées, publics, modules), prix ignorés.
// Limites et coûts relevés le 05/10/2026 sur les pages d'aide de WhatsApp,
// la politique de messagerie (mise à jour du 23/09/2026) et la page de
// tarification de Meta (version française lue dans un navigateur le 05/10/2026) :
// depuis le 1er octobre 2026, 1 000 messages de service gratuits par mois et par
// numéro, facturés au-delà ; la version anglaise lue par WebFetch était périmée.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation WhatsApp Business pour vendre : un catalogue, des réponses rapides et des étiquettes qui transforment vos conversations en commandes suivies',
    'title'   => 'Formation WhatsApp Business pour vendre | Richard SALANON',
    'meta'    => 'Formation WhatsApp Business pour commerces et vendeurs : profil, catalogue, réponses rapides, étiquettes, diffusions et suivi des commandes, sur devis.',
    'en_bref' => 'Cette formation apprend aux commerçants, aux vendeurs et aux équipes de service client à vendre avec l\'application gratuite WhatsApp Business : profil complet, catalogue avec prix, réponses rapides, messages d\'accueil et d\'absence, étiquettes de suivi, statuts et diffusions conformes aux règles de WhatsApp. Elle dure une demi-journée pour le socle, ou une journée complète avec le suivi des commandes, sur place ou à distance, et se fait sur le téléphone qui sert réellement à vendre. Le prix est fixé sur devis, selon le nombre de participants et le format retenu.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'automatisation',
    'forte'   => true,
    'duree'   => 'Une demi-journée ou une journée, puis une séance de suivi',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : un profil et un catalogue qui répondent avant vous',
            'duree'  => '3 h 30',
            'points' => [
                'Choisir le numéro qui portera la vente : numéro personnel professionnalisé ou numéro dédié, et passage de WhatsApp Messenger à WhatsApp Business sans perdre l\'historique des discussions.',
                'Remplir chaque champ du profil professionnel : catégorie, description, adresse, horaires, site web, adresse électronique, puis vérifier ce que voit un client.',
                'Photographier ses produits au téléphone : lumière du jour, fond neutre, un article par image, plusieurs angles, poids des fichiers.',
                'Créer les premiers articles du catalogue avec prix, description et code, puis les ranger en collections par famille de produits.',
                'Comprendre l\'examen des articles par WhatsApp, les produits que la politique de messagerie interdit et la demande de nouvel examen en cas de refus.',
                'Récupérer le lien court de l\'entreprise, rédiger le message prérempli et construire le lien wa.me à poser sur Facebook, Instagram, l\'affiche et la carte de visite.',
                'Écrire le message d\'accueil et le message d\'absence calé sur les horaires d\'ouverture.',
                'Exercice de contrôle : un client test trouve le prix, la disponibilité et l\'adresse sans poser une seule question.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : répondre, étiqueter, suivre et relancer sans perdre de commande',
            'duree'  => '3 h 30',
            'points' => [
                'Relire ses vingt dernières conversations et en tirer les dix questions qui reviennent le plus.',
                'Transformer ces questions en réponses rapides avec raccourci, photo ou vidéo, et utiliser les réponses par défaut tirées du profil.',
                'Bâtir le jeu d\'étiquettes, ou de listes selon la version de l\'application, qui suit une commande du premier contact à la livraison payée.',
                'Recevoir un panier composé dans le catalogue et le confirmer proprement : quantités, prix, délai, mode de paiement, lieu de retrait.',
                'Encadrer la confirmation d\'un paiement Mobile Money pour que l\'étiquette « payé » corresponde toujours à un encaissement vérifié.',
                'Tenir le relevé du soir et le tableau hebdomadaire des commandes WhatsApp dans un tableur simple.',
                'Statuts, listes de diffusion et diffusions d\'entreprise : qui peut les recevoir, ce qu\'elles coûtent et comment éviter les signalements.',
                'Partager le compte entre plusieurs vendeurs grâce aux appareils connectés, et fixer les règles communes de l\'équipe.',
                'Exercice de contrôle : une série de messages de clients traitée de bout en bout, étiquettes et relevé compris.',
            ],
        ],
        [
            'titre'  => 'Séance de suivi, deux à trois semaines plus tard : ce qui tient et ce qui coince',
            'duree'  => '2 h, à distance',
            'points' => [
                'Lecture des premiers relevés de commandes et des étiquettes réellement utilisées par chacun.',
                'Correction des réponses rapides qui ne servent pas, ajout de celles qui manquent.',
                'Mise à jour du catalogue : ruptures, nouveaux prix, articles à masquer ou à réafficher.',
                'Décision écrite sur la suite : rester sur l\'application, ou préparer le passage à la plateforme de Meta si les volumes l\'exigent.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => 'Une demi-journée pour le socle, une journée complète avec le suivi des commandes'],
        ['l' => 'Public', 'v' => 'Commerces, vendeurs en ligne, prestataires sur rendez-vous, équipes qui partagent un numéro'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et que ne couvre-t-elle pas ?',
            'paragraphes' => [
                'Dans beaucoup de commerces de Cotonou, d\'Abidjan ou de Dakar, WhatsApp est déjà le premier canal de vente, mais il se tient à la main : les prix se donnent un par un, les commandes se perdent sous les nouveaux messages, et tout repose sur la mémoire de la personne qui a le téléphone. L\'application WhatsApp Business, gratuite, contient pourtant de quoi mettre de l\'ordre. Cette formation apprend à s\'en servir pour vendre, avec les fonctions natives de l\'application, sur votre propre téléphone et vos propres conversations, jamais sur une démonstration.',
                'À la fin de la session, chaque participant sait faire seul sept choses, vérifiées par un exercice : publier un profil professionnel complet ; créer et mettre à jour des articles de catalogue avec photos et prix ; enregistrer et utiliser des réponses rapides ; programmer un message d\'accueil et un message d\'absence ; étiqueter une conversation à chaque étape d\'une commande ; produire le relevé des commandes de la semaine ; et dire, pour un envoi groupé, s\'il respecte les règles de WhatsApp. Ces objectifs figurent dans le programme écrit remis avant la session.',
                'La formation ne couvre pas la plateforme de Meta, souvent appelée « API WhatsApp Business », ni les robots qui répondent seuls : ces sujets demandent des modèles de messages approuvés, une facturation par message et un développement. Ils relèvent de la formation consacrée au chatbot WhatsApp et à l\'API, ou du service <a href="/services/agents-ia-chatbot-whatsapp">agents IA et chatbot WhatsApp</a>. Elle ne relie pas non plus WhatsApp à Odoo, à Dolibarr ou à un CRM : c\'est l\'objet de la formation <a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a> et du service d\'<a href="/services/integration-whatsapp">intégration WhatsApp</a>.',
                'Elle dit en revanche franchement où s\'arrête l\'application gratuite. Quand une boutique reçoit plus de messages que deux personnes ne peuvent en traiter, quand elle veut envoyer ses factures sans intervention humaine, ou écrire à des clients qui n\'ont pas enregistré son numéro, l\'outil atteint sa limite. Les participants apprennent à reconnaître ce seuil, pour ne pas payer trop tôt un outil complexe, ni s\'acharner trop longtemps sur un téléphone saturé.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, à quel niveau, et que faut-il apporter ?',
            'intro' => 'Le public est celui qui vend déjà par WhatsApp, avec ou sans boutique physique. Aucun prérequis technique n\'est demandé ; le matériel, lui, compte beaucoup, car tout se construit sur le téléphone de travail.',
            'items' => [
                ['titre' => 'Commerces et boutiques', 'texte' => 'Prêt-à-porter, alimentaire, cosmétique, quincaillerie, téléphonie, pièces détachées : toute boutique dont les clients demandent les prix ou passent commande par WhatsApp, avec ou sans vitrine sur rue.'],
                ['titre' => 'Vendeurs en ligne qui livrent', 'texte' => 'Personnes qui attirent les clients sur Facebook, Instagram ou TikTok, concluent sur WhatsApp, puis livrent par moto, par transporteur ou en point de retrait, et perdent le fil dès que les volumes montent.'],
                ['titre' => 'Prestataires sur rendez-vous', 'texte' => 'Salons de coiffure, instituts de beauté, cabinets, garages, centres de formation, photographes : les devis, les créneaux et les rappels passent par la messagerie.'],
                ['titre' => 'Équipes de deux à cinq personnes sur un même numéro', 'texte' => 'Plusieurs vendeurs répondent sur le compte de l\'entreprise et ont besoin de règles communes pour ne pas se contredire sur un prix, ni oublier un client qui attend.'],
                ['titre' => 'Niveau requis', 'texte' => 'Savoir utiliser WhatsApp au quotidien suffit. Le court test de positionnement sert surtout à repérer qui doit d\'abord apprendre à libérer de l\'espace sur son téléphone, à retrouver ses photos ou à faire une sauvegarde.'],
                ['titre' => 'Matériel à apporter', 'texte' => 'Le téléphone qui sert vraiment à vendre, chargé, avec de l\'espace libre et l\'accès au code reçu par SMS ; une vingtaine de photos de produits ; la liste de prix à jour ; si possible un ordinateur portable pour essayer WhatsApp sur un appareil connecté.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur leurs propres comptes ?',
            'items' => [
                ['titre' => 'Audit du profil actuel', 'duree' => '20 minutes', 'texte' => 'Chacun ouvre son profil tel que le voit un client, depuis le téléphone d\'un autre participant, et note ce qui manque : horaires, adresse, description, lien vers le site. Les corrections se font aussitôt.'],
                ['titre' => 'Vingt articles au catalogue', 'duree' => '1 heure', 'texte' => 'Photos prises dans la salle ou importées, noms clairs, prix réels, une collection par famille de produits. Les articles soumis à l\'examen de WhatsApp sont suivis jusqu\'à leur validation ou leur refus motivé.'],
                ['titre' => 'Dix réponses rapides', 'duree' => '40 minutes', 'texte' => 'À partir des conversations réelles, chacun écrit les dix réponses qui lui feront gagner le plus de temps : frais de livraison, délais, moyens de paiement, retours, adresse, disponibilité d\'un article.'],
                ['titre' => 'Le jeu d\'étiquettes', 'duree' => '30 minutes', 'texte' => 'Les étiquettes de suivi sont créées, puis posées sur trente conversations récentes. Le groupe vérifie qu\'une commande n\'a jamais deux statuts contradictoires au même moment.'],
                ['titre' => 'La journée simulée', 'duree' => '45 minutes', 'texte' => 'Le formateur et les autres participants jouent les clients : demande de prix vue en statut, négociation, panier, paiement annoncé, retrait reporté. Chaque vendeur traite la série avec ses outils, puis compare son résultat à celui des autres.'],
                ['titre' => 'Le relevé du vendredi', 'duree' => '30 minutes', 'texte' => 'À partir des étiquettes, chacun remplit le tableau de la semaine : commandes reçues, payées, livrées, à relancer, et le montant total. C\'est souvent la première fois qu\'un commerce chiffre ce que lui rapporte WhatsApp.'],
                ['titre' => 'La diffusion de test', 'duree' => '20 minutes', 'texte' => 'Rédaction d\'un message groupé conforme : destinataires qui ont donné leur accord, contenu utile, moyen clair de ne plus rien recevoir. Envoi à une petite liste de volontaires, puis lecture des réponses.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'À quoi ressemble la journée d\'un vendeur, avant et après la formation ?',
            'paragraphes' => [
                'Une cliente voit une robe dans le statut du matin et écrit à 9 heures pour en demander le prix. La vendeuse répond à 11 heures, entre deux clients au comptoir. La cliente demande la taille au-dessus, négocie, annonce qu\'elle passera samedi. Son message disparaît ensuite sous une quarantaine d\'autres. Samedi, personne ne sait si la robe est réservée, si un acompte a été versé, ni à qui. Le soir, la gérante ignore combien de commandes attendent ; à la fin du mois, elle ne sait pas combien WhatsApp a rapporté.',
                'La même scène, une fois l\'application réglée : le statut renvoie vers l\'article du catalogue, avec son prix et ses tailles. Le message d\'accueil annonce les horaires et le délai de réponse. La vendeuse répond par une réponse rapide qui donne la disponibilité et les moyens de paiement, puis pose l\'étiquette « réservé, retrait samedi ». Le vendredi, la liste des réservations s\'affiche d\'un geste, et chaque cliente reçoit un rappel personnel.',
                'Rien de cela ne demande d\'abonnement : ce sont des fonctions gratuites, rarement utilisées au-delà du nom de la boutique. Ce que la formation installe surtout, c\'est la discipline qui les fait tenir : une étiquette posée à chaque étape, un relevé chaque semaine, des réponses rapides corrigées dès que les prix changent. Le simple fait de compter les commandes WhatsApp de la semaine change souvent la façon dont la direction regarde ce canal.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles fonctions de l\'application apprend-on, et avec quelles limites ?',
            'legende' => 'Fonctions et limites indiquées par les pages d\'aide officielles de WhatsApp, consultées le 5 octobre 2026. Certaines fonctions sont déployées progressivement : les étiquettes deviennent des « listes » sur une partie des téléphones.',
            'entetes' => ['Fonction', 'Ce qu\'elle apporte à la vente', 'Limite officielle', 'Ce que l\'on en fait en formation'],
            'lignes'  => [
                ['Profil professionnel', 'Présente l\'entreprise : catégorie, description, adresse, horaires, site', 'La politique de messagerie exige des coordonnées exactes et à jour', 'Profil complet, vérifié depuis le téléphone d\'un client'],
                ['Catalogue et panier', 'Montre produits et services avec photos, prix et description ; le client compose un panier qu\'il envoie en message', 'Jusqu\'à 10 images ou vidéos par article, vidéo de 50 Mo au plus ; chaque article est examiné avant d\'être visible', 'Vingt premiers articles et des collections par famille'],
                ['Réponses rapides', 'Raccourcis pour les messages envoyés souvent, avec image ou vidéo', '50 réponses rapides au maximum', 'Les dix réponses les plus utiles, rédigées sur vos conversations'],
                ['Étiquettes ou listes', 'Classent les conversations par étape de commande ou par type de client', '20 étiquettes, ou 20 listes, au maximum', 'Un jeu d\'étiquettes qui suit chaque commande'],
                ['Message d\'accueil', 'Accueille automatiquement un nouveau client', 'Envoyé au premier message ou après 14 jours sans échange, si le téléphone est connecté à Internet', 'Un accueil qui annonce horaires et délais'],
                ['Message d\'absence', 'Répond en dehors des heures d\'ouverture', 'Programmable selon les horaires du profil, téléphone connecté', 'Des soirées qui ne sont plus dévorées par le téléphone'],
                ['Lien court et lien wa.me', 'Ouvre une discussion avec la boutique en un clic, avec un message prérempli', 'Numéro au format international complet, sans zéro initial, parenthèse ni tiret', 'Liens posés sur les réseaux sociaux, les affiches et les cartes'],
                ['Listes de diffusion', 'Un même message envoyé individuellement à plusieurs clients', '256 contacts par liste ; seuls ceux qui ont enregistré votre numéro le reçoivent', 'Une liste construite sur l\'accord des clients'],
                ['Appareils connectés', 'Plusieurs personnes répondent sur le même compte', 'Jusqu\'à quatre appareils ; le téléphone principal doit se connecter au moins tous les 14 jours', 'Les règles communes de l\'équipe de vente'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils et quelles offres de Meta sont présentés, et combien coûtent-ils ?',
            'legende' => 'Prix et conditions publiés par WhatsApp et Meta, relevés le 5 octobre 2026. Les offres payantes varient selon les pays et les comptes : l\'application affiche le montant exact, taxes estimées comprises, avant tout paiement.',
            'entetes' => ['Outil ou offre', 'Prix de l\'éditeur', 'Disponibilité', 'Place dans la formation'],
            'lignes'  => [
                ['Application WhatsApp Business, sur Android et iPhone', 'Gratuite ; Meta précise que l\'application gratuite le reste, les abonnements étant facultatifs', 'Partout où WhatsApp est disponible', 'Le cœur de la formation'],
                ['WhatsApp sur ordinateur, comme appareil connecté', 'Gratuit', 'Jusqu\'à quatre appareils reliés au téléphone principal', 'Répondre au bureau avec un clavier, à plusieurs'],
                ['Diffusions d\'entreprise, autrefois appelées messages marketing', 'Payées pour chaque message distribué dans les cinq jours suivant l\'envoi, selon l\'indicatif du destinataire', 'Certains pays seulement ; la période d\'essai gratuite a pris fin le 30 avril 2026', 'Savoir quand elles valent leur prix, et quand une liste de diffusion suffit'],
                ['Meta One et Meta Verified', 'Abonnements optionnels ; Meta annonçait le 15 septembre 2026 des forfaits pour les entreprises à partir de 14,99 dollars par mois', 'Selon les régions et les comptes ; essai gratuit de 7 jours pour Meta One', 'Badge vérifié, appareils supplémentaires et assistant de Meta : présentés, jamais imposés'],
                ['Plateforme WhatsApp Business, dite API Cloud', 'Facturation par message depuis le 1er juillet 2025 ; depuis le 1er octobre 2026, réponses libres dans la fenêtre de service de 24 heures gratuites jusqu\'à 1 000 par mois et par numéro, facturées au-delà', 'Par un développeur ou un fournisseur partenaire de Meta', 'Seulement pour reconnaître le moment où elle devient nécessaire'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation se déroule-t-elle, concrètement ?',
            'intro' => 'La méthode tient en une règle : ce qui est appris doit déjà fonctionner sur le téléphone de chacun à la fin de la séance. Il n\'y a donc rien à « mettre en place plus tard ».',
            'items' => [
                ['titre' => 'Sur votre téléphone, pas sur un exemple', 'texte' => 'Le profil, le catalogue, les réponses rapides et les étiquettes se construisent sur le compte réel de la boutique. Le formateur montre le geste sur son propre écran, puis passe derrière chaque participant.'],
                ['titre' => 'Des groupes réduits', 'texte' => 'La pratique exige que chaque écran soit regardé. Les groupes sont composés après le test de positionnement, pour que la personne qui découvre le catalogue ne soit pas noyée parmi des vendeurs déjà rodés.'],
                ['titre' => 'Vos conversations, avec discrétion', 'texte' => 'Les questions des clients servent de matière, mais aucune conversation n\'est projetée sans accord, et les exemples partagés au groupe sont anonymisés. Les numéros des clients ne quittent jamais votre téléphone.'],
                ['titre' => 'Démonstration courte, pratique longue', 'texte' => 'Chaque fonction est montrée en quelques minutes, puis appliquée tout de suite sur un cas réel de la boutique. Les questions qui reviennent sont notées et rejoignent les supports.'],
                ['titre' => 'Des supports qui restent', 'texte' => 'Une fiche réflexe d\'une page par fonction, le guide des étiquettes de la boutique, le modèle de relevé hebdomadaire et la fiche des règles de diffusion. Ils sont modifiables, pour former un nouveau vendeur sans refaire la session.'],
                ['titre' => 'Une évaluation sur une tâche réelle', 'texte' => 'La réussite se mesure à un exercice exécuté seul en fin de séance : une série de messages traitée de bout en bout. Le questionnaire d\'avis existe aussi, mais il ne dit pas si la formation a servi.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Un canal direct pour les questions d\'application pendant quelques semaines et, quand elle est retenue, la séance de suivi à distance, qui reprend les relevés et corrige ce qui n\'a pas pris.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon votre activité et votre pays ?',
            'items' => [
                ['secteur' => 'Prêt-à-porter, à Cotonou', 'probleme' => 'Les clientes réservent un article pour trois jours puis ne viennent pas, et la pièce reste bloquée pendant qu\'une autre l\'aurait achetée.', 'solution' => 'Catalogue rangé par collections avec tailles et coloris, étiquette « réservé jusqu\'au » datée, relance personnelle la veille de l\'échéance et remise en vente le lendemain, annoncée dans le statut.'],
                ['secteur' => 'Traiteur et alimentaire, à Abidjan', 'probleme' => 'Les commandes du jour arrivent après l\'heure limite, et la cuisine découvre le volume à midi.', 'solution' => 'Message d\'absence programmé après l\'heure limite, réponse rapide avec le menu du jour, statut publié chaque matin, étiquette par créneau de livraison et relevé lu par la cuisine à heure fixe.'],
                ['secteur' => 'Cosmétique et soins, à Dakar', 'probleme' => 'Les mêmes conseils se tapent dix fois par jour, et certains articles du catalogue sont refusés sans que la boutique comprenne pourquoi.', 'solution' => 'Réponses rapides de conseil avec photo, lecture de la politique de messagerie sur les produits de santé, demande de nouvel examen motivée, relance de réapprovisionnement envoyée seulement aux clientes qui l\'ont acceptée.'],
                ['secteur' => 'Salon de coiffure ou cabinet, à Lomé', 'probleme' => 'Des créneaux restent vides faute de rappel, et la gérante répond aux demandes de rendez-vous jusqu\'à minuit.', 'solution' => 'Créneaux annoncés dans une réponse rapide, confirmation la veille, liste d\'attente étiquetée pour les désistements, message d\'absence calé sur les horaires du profil.'],
                ['secteur' => 'Vente en ligne avec livraison, à Douala', 'probleme' => 'Entre le paiement Mobile Money, la remise au livreur et la réception, les commandes se perdent et les litiges se multiplient.', 'solution' => 'Une étiquette par étape (payé, remis au livreur, livré), vérification de l\'encaissement avant toute expédition, confirmation de réception, et un seuil écrit à partir duquel le passage à l\'automatisation se justifie.'],
                ['secteur' => 'Boutique ou artisan, en France ou en Belgique', 'probleme' => 'Les commandes arrivent par Instagram et WhatsApp, une partie de la clientèle est à l\'étranger, et le RGPD s\'applique aux numéros collectés.', 'solution' => 'Formation à distance en deux séances, mention d\'information sur les supports de vente, accord des clients noté avant toute diffusion, et horaires d\'absence adaptés aux fuseaux des clients.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que permettent vraiment les règles de WhatsApp quand on vend ?',
            'paragraphes' => [
                'La <a href="https://whatsappbusiness.com/fr/policy/">politique de la messagerie WhatsApp Business</a>, mise à jour le 23 septembre 2026, s\'applique à l\'application comme à la plateforme. Son principe est simple : une entreprise ne peut contacter quelqu\'un que si cette personne lui a donné son numéro et a accepté de recevoir ses messages. Elle doit respecter la volonté de qui veut arrêter, exprimée sur WhatsApp ou ailleurs, et ne jamais tromper ni surprendre ses interlocuteurs. La formation traduit cette règle en gestes : noter l\'accord, proposer la sortie, retirer sans discuter.',
                'Les listes de diffusion de l\'application suivent la même logique. Selon la page d\'aide de WhatsApp, un message envoyé à une liste n\'atteint que les personnes qui ont enregistré votre numéro dans leur carnet d\'adresses. C\'est une protection plus qu\'une gêne : le client qui vous a enregistré vous connaît. Les diffusions d\'entreprise, payantes, peuvent toucher des numéros qui ne vous ont pas enregistré, mais l\'accord du destinataire reste exigé par la politique de messagerie.',
                'Le catalogue a ses interdits. La politique écarte notamment l\'alcool et le tabac, les médicaments et les produits médicaux et de santé, les animaux vivants hors bétail, les prêts entre particuliers et le recouvrement de créances, même pour une entreprise munie d\'une licence locale. Elle interdit aussi de demander en entier un numéro de carte bancaire, de compte bancaire ou de pièce d\'identité. Une pharmacie, une boutique de compléments ou un vendeur de boissons doivent le savoir avant de photographier tout leur rayon.',
                'Le bannissement, enfin, n\'arrive presque jamais par hasard. La <a href="https://faq.whatsapp.com/465883178708358/?locale=fr_FR">page d\'aide sur les bannissements</a> cite le spam et les arnaques ; un examen peut être demandé dans l\'application, et la plupart sont traités en 24 heures, mais sans cette option le bannissement est définitif. Tant que le compte est banni, l\'historique et les sauvegardes restent inaccessibles. Les versions modifiées de WhatsApp, comme GB WhatsApp ou FM WhatsApp, exposent elles aussi le compte à une suspension temporaire ou définitive.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : quel format choisir ?',
            'legende' => 'Le format se décide au premier échange, selon le nombre de vendeurs, leur dispersion et la qualité de la connexion. Dans tous les cas, chacun travaille sur son propre téléphone.',
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', 'Une boutique, une enseigne à plusieurs points de vente, une équipe de service client', 'Demi-journée pour le socle, journée complète avec le suivi des commandes', 'Dans vos locaux, hors des heures d\'affluence, sur vos comptes et vos conversations'],
                ['Inter-entreprises', 'Commerçants d\'un même marché, membres d\'une association ou d\'un réseau de franchisés', 'Demi-journée ou journée', 'Salle commune, coût partagé, exemples choisis pour que personne n\'expose ses clients'],
                ['À distance', 'Vendeurs dispersés, boutiques hors de Cotonou, entreprises en Europe ou au Canada', 'Deux séances de deux à trois heures', 'Visioconférence, WhatsApp ouvert sur ordinateur ou téléphone filmé, exercices envoyés la veille'],
                ['Hybride', 'Équipes qui veulent un démarrage en salle puis un accompagnement', 'Demi-journée en salle, puis séances courtes à distance', 'Prise en main sur place, relecture des relevés et corrections à distance'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation WhatsApp Business, et comment se règle-t-elle ?',
            'intro'      => 'Aucun tarif n\'est publié : le prix est fixé sur devis, après un premier échange qui précise le nombre de vendeurs, leur niveau et le format utile. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, et la facture mentionne l\'intitulé, les dates, la durée et le nombre de participants.',
            'items'      => [
                ['offre' => 'Demi-journée socle', 'prix' => 'Sur devis', 'inclus' => ['Profil, catalogue, accueil et absence', 'Premières réponses rapides', 'Fiche réflexe et liens prêts à diffuser']],
                ['offre' => 'Journée complète', 'prix' => 'Sur devis', 'inclus' => ['Le socle du matin', 'Étiquettes et suivi des commandes', 'Relevé hebdomadaire et règles de diffusion', 'Évaluation sur une série de messages']],
                ['offre' => 'Session collective', 'prix' => 'Sur devis', 'inclus' => ['Plusieurs commerces d\'un même réseau', 'Contenu commun sans conversation privée exposée', 'Coût partagé entre les participants']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Séance de suivi à distance', 'Canal direct pour les questions', 'Relecture des relevés de commandes']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, car chaque écran doit être vu.',
                'La durée : demi-journée, journée complète, séance de suivi.',
                'Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou.',
                'Le mode : présentiel, à distance ou hybride.',
                'La préparation : photos à reprendre, catalogue à construire à partir de zéro, plusieurs numéros à organiser.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Cette formation peut-elle être financée par un fonds de formation ?',
            'paragraphes' => [
                'Parfois, mais rien ne doit être tenu pour acquis. En Côte d\'Ivoire, la page du FDFP sur le <a href="https://fdfp.ci/plan-de-formation/">plan de formation</a>, consultée le 5 octobre 2026, ouvre le dépôt d\'un plan à toute entreprise qui justifie du paiement régulier de ses deux taxes de formation ; le règlement intervient après le suivi et le contrôle du fonds. Sa page sur les <a href="https://fdfp.ci/procedures-dhabilitation/">procédures d\'habilitation</a> impose l\'habilitation aux opérateurs privés, sauf aux structures basées hors de Côte d\'Ivoire. Interrogez le fonds sur votre cas avant de signer.',
                'Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> tient un guichet de financement du personnel des entreprises et des membres des organisations professionnelles, avec une demande en ligne ; pour une association de commerçants, cette voie mérite d\'être regardée. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que, depuis le 1er janvier 2022, l\'accès aux fonds des OPCO et aux autres fonds publics ou mutualisés exige un prestataire certifié Qualiopi.',
                'Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds de formation. Si un financement conditionne votre décision, envoyez au fonds le programme et le devis, obtenez sa réponse écrite, et prévoyez le budget sans prise en charge. Le programme, les feuilles de présence et le résultat de l\'évaluation remis en fin de session vous serviront dans tous les cas.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle erreur peut faire perdre d\'un coup le numéro et tout le carnet de clients ?',
            'texte' => 'Faire tourner toute l\'activité sur un seul téléphone, avec un numéro qui n\'est pas au nom de l\'entreprise, une version modifiée de WhatsApp installée « pour avoir plus de fonctions », et des envois groupés à des numéros récupérés dans des groupes. Un signalement de trop, et le numéro est banni : plus d\'historique, plus de sauvegarde accessible, plus de catalogue. La formation commence donc par le numéro, l\'application officielle et la sauvegarde, avant toute fonction de vente.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?',
            'intro' => 'Les réglages tiennent rarement tout seuls. Voici ce qui se défait le plus souvent après la session, et la parade apprise en formation.',
            'items' => [
                ['titre' => 'Le catalogue se fige', 'texte' => 'Les prix changent, les ruptures s\'accumulent, et les clients commandent des articles introuvables. Un créneau fixe chaque semaine sert à masquer, réafficher et corriger.'],
                ['titre' => 'Les étiquettes sont abandonnées au premier jour chargé', 'texte' => 'Une seule étiquette oubliée suffit à fausser le relevé. On en garde peu, avec des noms sans ambiguïté, et l\'étiquette se pose au moment même où l\'on répond.'],
                ['titre' => 'Les réponses rapides donnent d\'anciens prix', 'texte' => 'Une réponse rapide périmée engage la boutique sur un tarif dépassé. Chaque changement de prix déclenche la relecture des réponses concernées.'],
                ['titre' => 'Le prix reste « en privé »', 'texte' => 'Refuser d\'afficher les prix pour forcer la conversation noie la vendeuse sous des demandes sans suite. Le catalogue avec prix filtre les curieux ; les activités à devis gardent leur logique, article par article.'],
                ['titre' => 'Les diffusions deviennent quotidiennes', 'texte' => 'Trop de messages font bloquer et signaler la boutique. Un rythme écrit, un contenu utile et une sortie proposée à chaque envoi protègent le numéro.'],
                ['titre' => 'Le paiement est cru sur parole', 'texte' => 'Une capture d\'écran se falsifie. L\'étiquette « payé » se pose seulement après vérification de l\'encaissement sur le compte Mobile Money ou bancaire.'],
                ['titre' => 'Personne ne sauvegarde', 'texte' => 'Un téléphone volé ou tombé à l\'eau emporte des mois de conversations. La sauvegarde régulière est activée pendant la session et vérifiée à la séance de suivi.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, numéros, langue, données : que change le contexte local ?',
            'paragraphes' => [
                'La connexion pèse sur deux réglages précis. Selon les pages d\'aide de WhatsApp, le message d\'accueil et le message d\'absence ne partent que si le téléphone est connecté à Internet : un téléphone éteint la nuit ne répond à personne. On choisit donc l\'appareil qui reste en ligne, ou l\'on accepte cette limite en connaissance de cause. Le catalogue se prépare de préférence sur une connexion stable, car chaque article peut porter jusqu\'à dix images ou vidéos.',
                'Au Bénin, les numéros sont passés de 8 à 10 chiffres le 30 novembre 2024, par l\'ajout du préfixe 01, comme l\'a annoncé l\'<a href="https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/">ARCEP Bénin</a>. Un lien wa.me ou une carte de visite restés à l\'ancien format envoient le client nulle part, et un client qui a gardé l\'ancien numéro dans son carnet peut ne plus recevoir vos listes de diffusion. La vérification de ces formats fait partie de la session.',
                'Les réponses rapides s\'écrivent dans la langue de vos clients. Le français couvre l\'essentiel, mais une formule d\'accueil en fon, en yoruba, en wolof ou en dioula, ou une note vocale courte, rapproche souvent davantage qu\'un long texte. Les montants s\'écrivent comme sur vos tickets de caisse, en francs CFA sans décimales en Afrique de l\'Ouest et centrale.',
                'Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> interdit, à son article 332, la prospection directe par systèmes automatisés de communications électroniques, courriels ou SMS sans consentement préalable, libre, spécifique et informé ; le silence ne vaut pas accord, et la preuve pèse sur l\'expéditeur. L\'article 334 oblige à accuser réception d\'une demande d\'arrêt et à tenir la liste des refus, l\'article 336 à indiquer dans chaque message le moyen de ne plus en recevoir. Une diffusion promotionnelle à toute une liste s\'en approche assez pour appliquer ces règles.',
                'En Europe, le RGPD s\'applique aux numéros collectés. La <a href="https://www.cnil.fr/fr/la-prospection-commerciale-par-sms-mms">CNIL</a>, dans sa page sur la prospection par SMS et MMS mise à jour le 10 juin 2026, exige l\'accord préalable des particuliers, sauf pour un client existant à qui l\'on propose des produits analogues, et admet l\'intérêt légitime envers des professionnels sollicités sur leur métier et libres de s\'opposer. La page ne traite pas des messageries instantanées : appliquer la même prudence à WhatsApp reste la voie la plus sûre.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi se former à WhatsApp Business avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'WhatsApp n\'est pas pour lui un sujet de formation parmi d\'autres : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il relie WhatsApp aux logiciels de ses clients. Il connaît donc les deux côtés, l\'application gratuite que l\'on tient à la main et la plateforme de Meta qui prend le relais quand les volumes grandissent. C\'est ce qui lui permet de dire, pour une boutique donnée, si l\'application suffit encore.',
                'Avec ' . $ans . ' ans d\'expérience dans le numérique, une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . ') et la co-fondation d\'<a href="https://audyxa.com">Audyxa</a>, il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP. Il a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, du Bénin au Togo, du Sénégal au Gabon, de la France au Canada. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page <a href="/zones/">zones d\'intervention</a>.',
                'Sa façon de former tient en quelques engagements vérifiables : une réponse sous 24 heures, un programme écrit avant la session, des exercices sur vos comptes et vos conversations, une évaluation sur une tâche réelle, des supports qui restent à la boutique, et une réponse franche quand la formation n\'est pas la bonne réponse. Les autres formations du domaine figurent sur la page <a href="/formations/domaine/automatisation">formations à l\'automatisation</a>, l\'ensemble du catalogue sur la page <a href="/formations/">formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Décidez d\'abord du numéro qui portera la vente, installez l\'application officielle et la sauvegarde, puis affichez vos prix dans le catalogue, posez une étiquette à chaque étape d\'une commande et comptez vos ventes WhatsApp chaque semaine. N\'écrivez qu\'à ceux qui l\'ont accepté, et passez à la plateforme de Meta seulement quand l\'application ne suffit plus.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous que votre équipe vende mieux sur WhatsApp ?',
            'texte'  => 'Indiquez le nombre de vendeurs, votre activité, la ville, le format souhaité et la date visée : vous recevez une réponse sous 24 heures, puis un programme et un devis détaillé. La formation se combine bien avec la <a href="/formations/visibilite-google">formation à la visibilité sur Google</a> ou la formation <a href="/formations/e-commerce">vendre en ligne</a>.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation WhatsApp Business'],
        ],
    ],

    'faq' => [
        ['q' => 'L\'application WhatsApp Business est-elle vraiment gratuite ?', 'r' => 'Oui. Le profil, le catalogue, les réponses rapides, les étiquettes, les messages d\'accueil et d\'absence et les listes de diffusion ne coûtent rien. Sont payants, et facultatifs, les diffusions d\'entreprise, facturées par message distribué dans certains pays, et les abonnements comme Meta One ou Meta Verified. La plateforme de Meta, ou API, facture à part ses modèles de messages.'],
        ['q' => 'Combien de temps dure la formation ?', 'r' => 'Une demi-journée suffit pour le socle : profil, catalogue, accueil, absence et premières réponses rapides. Une journée complète ajoute les étiquettes, le suivi des commandes, le relevé hebdomadaire et les règles de diffusion. Une séance de suivi de deux heures, à distance, peut se tenir deux à trois semaines plus tard.'],
        ['q' => 'Peut-on garder notre numéro actuel ?', 'r' => 'Oui. Un compte WhatsApp Messenger peut passer à WhatsApp Business sur le même téléphone en emportant l\'historique des discussions ; la manipulation se fait ensemble, après une sauvegarde. Attention au retour en arrière : les articles du catalogue et les collections ne repassent pas dans WhatsApp Messenger.'],
        ['q' => 'Plusieurs vendeurs peuvent-ils répondre sur le même numéro ?', 'r' => 'Oui, dans une certaine mesure. L\'application permet de connecter jusqu\'à quatre appareils au téléphone principal, qui doit lui-même se connecter au moins tous les 14 jours. Au-delà de quelques vendeurs, ou si chacun doit avoir sa propre boîte de réception, il faut regarder les abonnements de Meta ou la plateforme.'],
        ['q' => 'Que repart-on avec, concrètement ?', 'r' => 'Un profil professionnel complet, un catalogue amorcé avec vos produits et vos prix, vos réponses rapides enregistrées, un jeu d\'étiquettes posé sur vos conversations, les liens prêts à diffuser, le modèle de relevé hebdomadaire et une fiche des règles de diffusion. Tout est fait sur vos téléphones pendant la session.'],
        ['q' => 'Pourquoi certains clients ne reçoivent-ils pas nos listes de diffusion ?', 'r' => 'Parce qu\'un message de liste de diffusion n\'arrive qu\'aux personnes qui ont enregistré votre numéro dans leur carnet d\'adresses. Au Bénin, un client qui a gardé votre ancien numéro à 8 chiffres peut aussi être concerné. La formation apprend à faire enregistrer le bon numéro au moment de l\'achat.'],
        ['q' => 'Les robots WhatsApp qu\'on nous propose sont-ils sans risque ?', 'r' => 'Pas toujours. Certains pilotent l\'application par des moyens non officiels, ce que WhatsApp sanctionne par des restrictions ou un bannissement. Les solutions conformes passent par la plateforme de Meta ; elles sont traitées dans la formation au chatbot WhatsApp et à l\'API et dans le service agents IA et chatbot WhatsApp, pas dans cette formation.'],
        ['q' => 'WhatsApp peut-il encaisser les paiements de nos clients ?', 'r' => 'Dans la plupart des commerces d\'Afrique de l\'Ouest, le paiement se fait par Mobile Money, par carte via un lien de paiement, ou en boutique, en dehors de WhatsApp. La formation montre comment confirmer proprement le paiement dans la conversation, pour que l\'étiquette « payé » corresponde toujours à un encaissement vérifié.'],
        ['q' => 'Sommes-nous obligés d\'afficher tous nos prix dans le catalogue ?', 'r' => 'Non, le prix est un champ facultatif. La recommandation reste de l\'afficher, parce qu\'un prix visible filtre les demandes sans suite, mais une activité à devis ou à prix négociés peut publier ses articles sans prix et répondre par une réponse rapide qui explique comment le devis est établi.'],
        ['q' => 'Faut-il un smartphone récent pour suivre la formation ?', 'r' => 'Non. WhatsApp Business fonctionne sur des téléphones modestes. Il faut surtout de l\'espace de stockage pour les photos du catalogue, une batterie chargée, l\'accès au code reçu par SMS et une connexion correcte le jour de la session.'],
        ['q' => 'Quand faut-il passer de l\'application à la plateforme de Meta ?', 'r' => 'Quand deux personnes ne suffisent plus à répondre, quand des factures ou des rappels doivent partir sans intervention humaine, quand chaque échange doit rejoindre un logiciel de gestion, ou quand vous devez écrire en nombre à des clients consentants qui n\'ont pas enregistré votre numéro. La séance de suivi aide à trancher, chiffres en main.'],
        ['q' => 'La formation peut-elle être financée ?', 'r' => 'Cela dépend du fonds et de votre situation : FDFP en Côte d\'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, OPCO en France. Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds. Interrogez le fonds par écrit avec le programme et le devis avant de signer, et prévoyez le budget sans prise en charge.'],
    ],

    'sources' => [
        ['titre' => 'WhatsApp, pages d\'aide : comment créer et gérer un catalogue', 'url' => 'https://faq.whatsapp.com/833697274483076/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : comment utiliser les réponses rapides', 'url' => 'https://faq.whatsapp.com/1791149784551042/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : comment utiliser les étiquettes', 'url' => 'https://faq.whatsapp.com/3398508707096369/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : comment utiliser les listes', 'url' => 'https://faq.whatsapp.com/2861038884085362/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : comment utiliser les messages d\'accueil', 'url' => 'https://faq.whatsapp.com/604590423442323/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : comment utiliser des messages d\'absence', 'url' => 'https://faq.whatsapp.com/2565868990219715/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : comment utiliser les listes de diffusion (256 contacts par liste)', 'url' => 'https://faq.whatsapp.com/861663048350950/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : listes de diffusion sur l\'application WhatsApp Business', 'url' => 'https://faq.whatsapp.com/653415899610349/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : à propos des diffusions d\'entreprise', 'url' => 'https://faq.whatsapp.com/1524953031793983/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : tarifs des messages marketing', 'url' => 'https://faq.whatsapp.com/1022626499062292/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : comment connecter un appareil', 'url' => 'https://faq.whatsapp.com/1317564962315842/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : passage de WhatsApp Messenger à l\'application WhatsApp Business', 'url' => 'https://faq.whatsapp.com/223728052339165/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : comment créer des liens courts', 'url' => 'https://faq.whatsapp.com/502291734918768/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : comment utiliser les liens clic vers WhatsApp', 'url' => 'https://faq.whatsapp.com/5913398998672934/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : à propos des bannissements de comptes', 'url' => 'https://faq.whatsapp.com/465883178708358/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : à propos des applications non officielles', 'url' => 'https://faq.whatsapp.com/1217634902127718/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, pages d\'aide : à propos de Meta Verified for Business sur WhatsApp', 'url' => 'https://faq.whatsapp.com/3872729742954601/?locale=fr_FR', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp Business, Meta One sur l\'application WhatsApp Business', 'url' => 'https://whatsappbusiness.com/fr/products/business-app-meta-one/', 'date' => '2026-10-05'],
        ['titre' => 'Meta, Introducing Meta One (15 septembre 2026)', 'url' => 'https://about.fb.com/news/2026/09/introducing-meta-one-subscription-service-more-features-ai/', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, politique de la messagerie WhatsApp Business (mise à jour du 23 septembre 2026)', 'url' => 'https://whatsappbusiness.com/fr/policy/', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (facturation par message depuis le 1er juillet 2025)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'ARCEP Bénin, passage des numéros de 8 à 10 chiffres au 30 novembre 2024', 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 332, 334 et 336)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, la prospection commerciale par SMS et MMS', 'url' => 'https://www.cnil.fr/fr/la-prospection-commerciale-par-sms-mms', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['chatbot-whatsapp', 'whatsapp-odoo-dolibarr-crm', 'n8n', 'e-commerce', 'visibilite-google', 'digitaliser-son-entreprise'],
        'services'    => ['integration-whatsapp', 'agents-ia-chatbot-whatsapp', 'site-e-commerce'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
