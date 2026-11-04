<?php
// ============================================================
// data/services/tunnel-de-vente.php · Pilier service « Tunnel de vente en ligne ».
// Parcours complet : page de capture, page de vente, séquence d'e-mails ou de
// messages WhatsApp, paiement, remerciement, mesure, relances. Complète la page
// « landing page haute conversion » (la page seule) sans la reprendre.
// Prix : tunnel sur devis ; seul tarif de départ cité = landing page (faits.php).
// Chiffres externes relevés le 04/11/2026 : loi béninoise 2017-20 (texte PDF du
// SGG), CNIL, Meta, Google Analytics, DataReportal.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Création de tunnel de vente en ligne : conduire un inconnu de la première visite au paiement, puis à la relance',
    'title'   => 'Création de tunnel de vente en ligne | Richard SALANON',
    'meta'    => 'Tunnel de vente sur mesure : page de capture, page de vente, paiement Mobile Money et carte, e-mails ou WhatsApp, relances et suivi. Devis sous 24 h.',
    'en_bref' => 'Un tunnel de vente est le parcours qui mène un visiteur inconnu à l’achat : page de capture, page de vente, paiement en ligne, page de remerciement, puis séquence d’e-mails ou de messages WhatsApp et relances automatisées. Il sert les vendeurs de formations en ligne, les cabinets, les commerçants et les organisateurs d’événements qui veulent générer des prospects et mesurer chaque étape, au Bénin, en Afrique francophone et en Europe. La durée et le prix dépendent du nombre d’étapes et d’intégrations : ils sont fixés sur devis gratuit, une landing page seule démarrant à 150 000 FCFA.',
    'publie'  => '2026-11-09',
    'maj'     => '2026-11-09',
    'famille' => 'Sites et boutiques',
    'matrice' => false,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => 'Annoncé sur le devis, selon le nombre d’étapes, de messages et de paiements à relier'],
        ['l' => 'Pour qui', 'v' => 'Vendeurs de formations en ligne, cabinets, commerçants, organisateurs d’événements, PME qui cherchent des prospects'],
        ['l' => 'Livrables', 'v' => 'Pages de capture et de vente, paiement Mobile Money ou carte, remerciement, séquence de messages, relances, tableau de suivi'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qu’est-ce qu’un tunnel de vente en ligne, et que recouvre ce service ?',
            'paragraphes' => [
                'Un tunnel de vente, que l’on appelle aussi funnel ou entonnoir de conversion, est une suite d’étapes que le visiteur parcourt dans un ordre voulu. Il arrive par une publicité, une publication ou un lien partagé. Il laisse son adresse ou son numéro contre quelque chose d’utile. Il lit une offre, il paie, il reçoit une confirmation, puis il est suivi par des messages jusqu’à sa décision ou son rachat. À chaque étape, une partie des personnes s’arrête : le tunnel sert à voir où, et à corriger.',
                'Le service couvre la conception et la mise en place de ce parcours. Les pages d’abord : une page de capture, une page de vente, une page de paiement et une page de remerciement. Le paiement en ligne ensuite, par Mobile Money ou par carte. La séquence de messages, par e-mail ou par WhatsApp. Les relances automatisées, avec n8n ou Make. Le suivi des conversions enfin, pour savoir combien de personnes passent de chaque étape à la suivante.',
                'Il ne couvre pas tout. Il ne comprend pas la création de votre offre, de votre formation ou de votre produit : le tunnel vend ce qui existe déjà. Il ne comprend pas non plus le pilotage de vos campagnes publicitaires, qui relève de votre gestionnaire de campagnes. Et il ne promet aucun taux de conversion, parce qu’un pourcentage annoncé avant d’avoir vu votre offre, votre public et votre trafic ne repose sur rien.',
                'La frontière avec la page d’atterrissage est simple. La <a href="/services/landing-page-haute-conversion">landing page haute conversion</a> est une page unique, bâtie pour une seule action. Le tunnel enchaîne plusieurs pages et plusieurs messages, relie un paiement et garde la trace de chaque personne. Beaucoup de tunnels commencent d’ailleurs par une landing page, à laquelle on ajoute ensuite la suite du parcours.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À quels signes un tunnel de vente devient-il nécessaire ?',
            'intro' => 'Le besoin se voit dans la manière dont les ventes se font aujourd’hui, souvent à la main, une conversation après l’autre.',
            'items' => [
                ['titre' => 'Vous vendez une formation ou un accompagnement en ligne', 'texte' => 'Chaque inscription passe par dix messages privés : prix, dates, mode de paiement, lien d’accès. Un tunnel répond une fois pour toutes aux questions courantes, encaisse, puis envoie l’accès et le calendrier en réduisant les interventions manuelles.'],
                ['titre' => 'Vos prospects disparaissent après le premier contact', 'texte' => 'Les gens écrivent « je réfléchis », puis plus rien. Sans relance organisée, des ventes qui auraient pu se faire en quelques jours peuvent se perdre. Une séquence de messages garde le contact et répond aux objections dans l’ordre.'],
                ['titre' => 'Vous payez de la publicité sans savoir ce qu’elle rapporte', 'texte' => 'Vous connaissez le nombre de clics, pas le nombre de ventes. Un tunnel mesuré montre, pour chaque source, combien de personnes laissent leurs coordonnées, combien paient et combien coûte un client.'],
                ['titre' => 'Vous encaissez par transferts dispersés', 'texte' => 'Captures d’écran de paiements Mobile Money, virements sans référence, espèces notées sur un cahier. Un paiement en ligne relié à la commande évite les erreurs de rapprochement et peut déclencher la livraison.'],
                ['titre' => 'Vous voulez vendre pendant que vous travaillez ou dormez', 'texte' => 'Une offre qui demande votre présence à chaque étape plafonne vite. Le tunnel prend en charge les étapes répétitives et vous réserve les conversations qui valent un appel.'],
                ['titre' => 'Vous préparez un lancement avec une date limite', 'texte' => 'Prévente, ouverture d’inscriptions, webinaire suivi d’une offre : la succession des pages et des messages doit être prête et testée avant le premier clic payé, pas improvisée la veille.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule la création d’un tunnel de vente, du cadrage au premier bilan ?',
            'items' => [
                ['titre' => 'Échange et devis', 'texte' => 'Vous décrivez ce que vous vendez, à qui, par quel canal arrive votre trafic et comment vous vendez aujourd’hui. Le devis, gratuit, fixe le nombre d’étapes, les raccordements, le délai et les modalités de paiement.', 'duree' => 'Réponse sous 24 heures'],
                ['titre' => 'Cartographie du parcours', 'texte' => 'On dessine le tunnel sur une feuille : d’où vient la personne, ce qu’elle reçoit en échange de ses coordonnées, quelles pages elle voit, quand elle paie, ce qui se passe si elle ne paie pas. On fixe aussi les événements à mesurer à chaque étape.', 'duree' => 'Selon le devis'],
                ['titre' => 'Rédaction des pages et des messages', 'texte' => 'Page de capture, page de vente, remerciement, e-mails ou messages WhatsApp de la séquence. Tout est écrit à partir de vos informations et relu par vous, car un tunnel vend par ses mots avant de vendre par son design.', 'duree' => 'Selon le devis'],
                ['titre' => 'Construction des pages et du paiement', 'texte' => 'Les pages sont montées avec l’outil retenu, le paiement est branché et testé, et la page de remerciement est reliée à la livraison : accès, fichier, facture ou message de confirmation.', 'duree' => 'Selon le devis'],
                ['titre' => 'Automatisation des messages et des relances', 'texte' => 'La séquence est programmée, les déclencheurs sont réglés (inscription, paiement, abandon), et les scénarios n8n ou Make sont construits pour relier les outils entre eux et tenir à jour la liste des contacts.', 'duree' => 'Selon le devis'],
                ['titre' => 'Test complet du parcours', 'texte' => 'Bonne pratique avant toute diffusion : parcourir tout le tunnel sur téléphone comme le ferait un client (clic, inscription, paiement, accès, messages), puis vérifier que chaque événement est enregistré une seule fois et que chaque message part au bon moment.', 'duree' => 'Avant toute diffusion'],
                ['titre' => 'Mise en ligne et premier bilan', 'texte' => 'Le tunnel passe en ligne avec le trafic prévu. Après quelques semaines de visites suffisantes, on lit les passages d’une étape à l’autre et on corrige l’étape qui perd le plus de monde, un seul changement à la fois.', 'duree' => 'Selon le trafic reçu'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que contient un tunnel de vente ? Un exemple étape par étape',
            'legende' => 'Parcours type, à raccourcir ou à compléter selon l’offre. Un tunnel pour une place de formation n’a pas la même longueur qu’un tunnel pour un devis de plusieurs semaines.',
            'entetes' => ['Étape', 'Ce que fait le visiteur', 'Ce que le tunnel doit faire', 'L’erreur fréquente'],
            'lignes'  => [
                ['Page de capture', 'Laisse son e-mail ou son numéro WhatsApp contre un guide, un extrait, une invitation', 'Promettre une chose précise et la livrer immédiatement', 'Demander cinq informations pour un simple fichier'],
                ['Page de vente', 'Lit l’offre, compare, cherche le prix', 'Dire pour qui, ce qui est compris, le prix, le paiement, l’après-achat', 'Cacher le prix et obliger à écrire pour le connaître'],
                ['Paiement', 'Choisit son moyen et règle', 'Proposer Mobile Money et carte, confirmer le paiement', 'Un paiement qui demande de quitter la page sans retour clair'],
                ['Page de remerciement', 'Vérifie que c’est bien passé', 'Confirmer, donner l’accès, dire ce qui suit et à quelle heure', 'Une page vide qui laisse le client dans le doute'],
                ['Séquence de messages', 'Reçoit des messages dans les jours qui suivent', 'Préparer l’achat avant, accompagner l’usage après', 'Envoyer la même offre cinq fois de suite'],
                ['Relance d’abandon', 'A commencé sans finir', 'Rappeler une fois ou deux, avec une aide réelle', 'Relancer sans limite, ce qui agace et expose à des plaintes'],
                ['Suivi', 'Ne voit rien', 'Compter les passages d’une étape à l’autre et la source', 'Ne mesurer que les visites de la première page'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que recevez-vous concrètement à la livraison d’un tunnel de vente ?',
            'items' => [
                'Un schéma écrit du parcours, avec chaque page, chaque message, chaque déclencheur et l’événement mesuré à chaque étape.',
                'Une page de capture et une page de vente rédigées, adaptées au téléphone, avec leurs boutons et leurs formulaires.',
                'Un paiement en ligne branché et testé : Mobile Money, carte bancaire ou les deux, selon le prestataire retenu et votre pays.',
                'Une page de remerciement qui confirme l’achat, donne l’accès à ce qui a été acheté et annonce la suite.',
                'Une séquence de messages rédigés, par e-mail ou par WhatsApp : bienvenue, préparation de l’achat, confirmation, accompagnement, relance d’abandon.',
                'Des scénarios n8n ou Make qui relient formulaires, paiements, listes de contacts et messages, avec leur documentation.',
                'Un tableau de suivi qui compte les personnes à chaque étape, par source de trafic, lisible sans compétence technique.',
                'Les mentions légales, la politique de confidentialité et les cases de consentement nécessaires aux messages de prospection.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'E-mail ou WhatsApp : par quel canal faire avancer vos prospects dans le tunnel ?',
            'options'  => ['Séquence d’e-mails', 'Messages WhatsApp'],
            'criteres' => [
                ['critere' => 'Habitude du public', 'valeurs' => ['Naturelle pour le public professionnel, la diaspora et les acheteurs de formations', 'Souvent adaptée au grand public en Afrique francophone, à vérifier auprès de votre propre public']],
                ['critere' => 'Lecture des messages', 'valeurs' => ['Souvent lus tard, parfois jamais si la boîte est saturée ou si le message tombe en courrier indésirable', 'Vus rapidement sur le téléphone, ce qui impose de ne pas les multiplier']],
                ['critere' => 'Cadre d’envoi', 'valeurs' => ['Libre une fois le consentement obtenu, avec lien de désinscription', 'Encadré par la plateforme : messages modèles hors de la fenêtre de 24 heures, facturation par message livré']],
                ['critere' => 'Coût à l’envoi', 'valeurs' => ['Faible, selon l’outil d’envoi et le volume de la liste', 'Variable selon la catégorie de message et le pays du destinataire, à vérifier chez Meta']],
                ['critere' => 'Mesure', 'valeurs' => ['Ouvertures, clics et désabonnements dans l’outil d’envoi', 'Réponses et conversations à rapprocher d’un tableau ou d’un CRM']],
                ['critere' => 'Quand le choisir', 'valeurs' => ['Contenu long, séquence éducative, public d’entreprises, rappel de paiement avec lien', 'Offre simple, échange rapide, acheteurs mobiles, confirmation et accès à un groupe ou à un contenu']],
            ],
            'verdict'  => 'Le plus souvent, les deux se combinent : l’e-mail porte les contenus longs et sert de trace, WhatsApp sert aux confirmations, aux rappels courts et aux questions. Le choix se fait en regardant où votre public répond vraiment, pas où vous préféreriez écrire.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que dit la plateforme WhatsApp Business de Meta sur les messages d’un tunnel ?',
            'paragraphes' => [
                'Dès qu’un tunnel envoie des messages WhatsApp automatiques, les règles de la plateforme de Meta s’appliquent. La page de tarification des développeurs de Meta, consultée le 4 novembre 2026, indique que Meta facture au message, seulement lorsqu’il est livré, et que les messages envoyés par les utilisateurs aux entreprises ne sont pas facturés. Le tarif dépend de la catégorie du message et de l’indicatif du pays du destinataire.',
                'La même page distingue les messages modèles (marketing, utilitaire, authentification) des messages libres de service. Les messages marketing passent toujours par un modèle, qui peut être envoyé à tout moment. Les messages libres ne servent qu’à répondre à une personne qui a écrit, pendant une fenêtre de 24 heures qui se renouvelle à chaque nouveau message de sa part. En pratique, une confirmation de paiement envoyée juste après l’achat n’a pas le même statut qu’une offre envoyée trois jours plus tard.',
                'Meta prévoit aussi qu’un message envoyé dans une fenêtre ouverte après un clic sur une publicité « Click to WhatsApp » n’est pas facturé, et que chaque numéro professionnel dispose de 1 000 messages de service gratuits par mois. La page précise que les messages de service au-delà de ce forfait sont facturés à partir du 1er octobre 2026. Ces conditions changent : le coût d’une séquence se recalcule chez Meta au moment du devis, jamais d’après un ancien comparatif.',
                'Pour votre tunnel, cela veut dire qu’une séquence WhatsApp se pense en nombre de messages par client, en catégories et en pays visés. Quand les échanges deviennent nombreux, la page <a href="/services/integration-whatsapp">intégration WhatsApp</a> et celle des <a href="/services/agents-ia-chatbot-whatsapp">agents IA et chatbots WhatsApp</a> détaillent la mise en œuvre.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Plateforme tout-en-un, WordPress et WooCommerce, développement sur mesure : quel outil pour monter votre tunnel ?',
            'legende' => 'Repères de choix. Aucun de ces outils n’est présenté comme un partenaire : le choix se fait selon votre cas. Les fonctions, les prix et les moyens de paiement pris en charge changent souvent ; ils sont vérifiés chez l’éditeur au moment du devis.',
            'entetes' => ['Option', 'Où elle est utile', 'Points à vérifier avant de choisir'],
            'lignes'  => [
                ['Plateforme de tunnels tout-en-un (pages, e-mails et paiement dans un seul abonnement)', 'Démarrer vite avec pages, e-mails et paiement dans un même espace, sans hébergement à gérer', 'Moyens de paiement réellement disponibles dans votre pays, possibilité d’exporter vos contacts, abonnement récurrent, limites du plan choisi'],
                ['WordPress avec WooCommerce', 'Vendre des produits ou des formations sur un site que vous possédez, avec catalogue, commandes et référencement naturel', 'Poids des extensions, mises à jour régulières, extensions de paiement compatibles avec Mobile Money, hébergement'],
                ['Développement sur mesure (PHP, Laravel, Vue, React)', 'Parcours particulier, simulateur, espace client, règles de prix ou d’accès que les outils standards ne permettent pas', 'Délai de départ plus long, maintenance à prévoir, intérêt réel face à un outil du marché'],
                ['n8n ou Make', 'Relier les outils entre eux : formulaire, paiement, liste de contacts, messages, tableau de suivi', 'Hébergement et suivi pour n8n, volume d’opérations pour Make, responsable désigné quand un scénario s’arrête'],
                ['Odoo ou Dolibarr', 'Garder clients, devis, factures et suivi commercial au même endroit que les ventes du tunnel', 'Raccordement des paiements aux factures, droits d’accès, besoin réel d’un logiciel de gestion'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il créer un tunnel de vente avec WordPress, un outil du marché ou du développement sur mesure ?',
            'paragraphes' => [
                'La bonne réponse commence par ce que vous voulez changer le moins souvent. Si votre tunnel est un enchaînement classique (capture, vente, paiement, séquence), un outil du marché suffit presque toujours, et il vous évite de payer du développement pour ce qui existe déjà. Le prix récurrent d’un abonnement est alors à comparer au coût d’un développement : sur une courte période, l’outil gagne, sur plusieurs années l’écart se réduit.',
                'Le sur mesure devient utile quand une contrainte précise bloque les outils : un moyen de paiement local absent de la plateforme, un calcul de prix propre à votre métier, un espace où le client retrouve ses achats, un raccordement à votre logiciel de gestion. Richard SALANON travaille avec PHP, Laravel, Node.js, Vue et React, mais il ne recommande pas ces outils par réflexe. Quand un outil du marché fait le travail, il le dit, même si cela réduit le chantier.',
                'Un point mérite d’être posé avant toute décision : la sortie. Pouvez-vous exporter vos contacts, vos pages et vos historiques si vous changez d’outil dans deux ans ? Un tunnel enfermé chez un éditeur qui augmente ses tarifs ou ferme un moyen de paiement vous laisse sans marge. La question se pose au devis, pas après la mise en ligne.',
                'Pour un site marchand avec catalogue et panier, la page <a href="/services/site-e-commerce">site e-commerce</a> est plus adaptée. Le tunnel s’y ajoute ensuite pour vendre une offre précise avec une logique de parcours.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment encaisser en ligne : Mobile Money, carte bancaire, PayPal ?',
            'paragraphes' => [
                'Le paiement est l’étape où un tunnel gagne ou perd la vente. Un acheteur de Cotonou, de Lomé ou d’Abidjan attend de pouvoir payer par Mobile Money, tandis qu’un acheteur de France ou de Belgique préfère la carte bancaire. Un tunnel qui n’en propose qu’un seul coupe une partie de son public. Le paiement se branche par un prestataire qui regroupe les moyens, dans une même fenêtre, et renvoie un statut de paiement à votre tunnel.',
                'Trois questions guident le choix du prestataire. Quels pays et quels opérateurs sont couverts ? Quels frais sont prélevés à chaque transaction, et qui les supporte ? À quelle vitesse l’argent arrive-t-il chez vous ? Le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a> aide à les trancher. Les frais exacts se vérifient chez le prestataire, car ils évoluent.',
                'Côté fonctionnement, ce n’est jamais le clic sur « payer » qui doit déclencher la livraison. C’est la confirmation envoyée par le prestataire à votre tunnel, que l’on appelle une notification de paiement. Sans elle, un client qui ferme la page après avoir payé ne reçoit rien, ou un client qui n’a pas payé reçoit tout. Le test avant mise en ligne vérifie les deux cas : paiement réussi, paiement refusé ou abandonné.',
                'Si vous recevez aussi des paiements hors ligne, par virement ou en espèces, le tunnel prévoit un chemin pour eux : une commande enregistrée en attente, puis validée à la main. La facture, elle, peut être émise dans Odoo ou Dolibarr, avec les paiements rattachés à la bonne commande.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment obtenir un tunnel de vente automatisé avec n8n ou Make sans harceler vos prospects ?',
            'paragraphes' => [
                'Une relance automatique n’est utile que si elle apporte quelque chose à la personne qui la reçoit. Les relances d’un tunnel se déclenchent sur des événements : quelqu’un s’est inscrit mais n’a pas ouvert l’accès, quelqu’un a lu la page de vente mais n’a pas payé, un paiement a échoué, une formation commence demain. Chaque événement appelle un message différent, et un seul.',
                'n8n et Make servent de chef d’orchestre. Ils reçoivent l’événement (formulaire envoyé, paiement confirmé), l’inscrivent dans votre liste de contacts, déclenchent le bon message, puis attendent un délai avant de vérifier si la personne a agi. Si elle a agi, la relance est annulée. Si non, un second message part, avec un contenu différent. Le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a> compare les trois outils, et la page <a href="/services/automatisation-ia">automatisation</a> détaille les scénarios plus complets.',
                'Quelques règles évitent l’effet de harcèlement. Un nombre limité de relances par personne, en général deux ou trois, espacées de plusieurs jours. Un arrêt immédiat dès l’achat, la désinscription ou la réponse du prospect. Une heure d’envoi raisonnable dans le fuseau du destinataire. Et un lien ou un mot-clé de désinscription à chaque message. Le droit béninois encadre la prospection, comme le détaille la section sur les règles de consentement plus bas.',
                'Il faut aussi prévoir la panne. Un scénario peut s’arrêter si un compte expire, si un jeton d’accès est invalidé ou si un service change son interface. Bonne pratique : prévoir une alerte en cas d’erreur et une personne chargée de la lire. Un tunnel dont les relances sont en panne depuis un mois sans que personne le sache coûte des ventes que personne ne verra.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment mesurer un tunnel de vente, et quels chiffres suivre ?',
            'paragraphes' => [
                'Un tunnel se lit par ses passages d’une étape à l’autre. Sur cent personnes qui arrivent sur la page de capture, combien laissent leurs coordonnées ? Parmi elles, combien ouvrent la page de vente, combien lancent le paiement, combien le terminent ? Chacun de ces rapports s’appelle un taux de passage. Le tunnel est faible là où il perd le plus de monde, et c’est cette étape qu’on corrige en premier.',
                'Google Analytics 4 fournit les noms d’événements à utiliser. Selon l’aide de Google Analytics, consultée le 4 novembre 2026, generate_lead se déclenche quand un utilisateur envoie un formulaire, qualify_lead quand un prospect est marqué comme qualifié, close_convert_lead quand il devient client, et purchase quand il effectue un achat. Suivre ces quatre événements, du formulaire à l’achat, suffit pour le tableau de départ d’un tunnel.',
                'Deux chiffres complètent le tableau. Le coût par prospect, en divisant la dépense publicitaire par le nombre de personnes ayant laissé leurs coordonnées. Et le coût par client, en la divisant par le nombre d’achats. Un tunnel peut coûter cher par prospect mais peu par client si ses relances sont bonnes, ou l’inverse. Seul le second chiffre dit si la publicité rapporte de l’argent.',
                'Ce que la mesure ne dit pas compte aussi. Un clic sur un bouton WhatsApp n’est pas un message envoyé, et un message n’est pas une vente : ces ventes se notent dans un tableau ou un CRM, avec leur source. Les écarts entre vos ventes réelles et les ventes comptées par les outils sont normaux jusqu’à un certain point. Au-delà, ils signalent un événement en double ou un paiement qui n’est pas remonté.',
                'La page <a href="/services/landing-page-haute-conversion">landing page haute conversion</a> détaille la mesure d’une page isolée, les réglages de consentement et les tests A/B. Elle n’est pas reprise ici : le tunnel s’appuie dessus pour sa première étape.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères officiels retenir avant de construire un tunnel de vente ?',
            'items' => [
                ['valeur' => '110 %', 'libelle' => 'Connexions mobiles cellulaires rapportées à la population du Bénin fin 2025 (16,4 millions de connexions), pour 4,80 millions d’internautes, soit 32,2 % de la population en octobre 2025 : le tunnel se pense d’abord pour le téléphone', 'source' => 'DataReportal, Digital 2026 Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '24 heures', 'libelle' => 'Durée de la fenêtre de service client WhatsApp, rouverte à chaque nouveau message de l’utilisateur ; hors de cette fenêtre, seuls les modèles de message sont autorisés', 'source' => 'Meta for Developers, tarification de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing'],
                ['valeur' => '1 000', 'libelle' => 'Messages de service gratuits par mois et par numéro professionnel WhatsApp ; facturés au-delà à partir du 1er octobre 2026', 'source' => 'Meta for Developers, tarification de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing'],
                ['valeur' => '4 événements', 'libelle' => 'generate_lead, qualify_lead, close_convert_lead et purchase : les événements Google Analytics 4 qui couvrent le parcours du formulaire à l’achat', 'source' => 'Aide Google Analytics, événements recommandés', 'url' => 'https://support.google.com/analytics/answer/9267735?hl=fr'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble un tunnel de vente selon votre secteur, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Vente de formations en ligne, Cotonou, Abidjan ou Bruxelles', 'probleme' => 'Les inscriptions se font par messages privés, avec les mêmes questions de prix et de dates reposées à chaque personne.', 'solution' => 'Une page de capture avec un extrait de programme, une page de vente avec dates et prix, un paiement Mobile Money et carte, un accès envoyé dès la confirmation et une séquence de préparation avant le premier cours.'],
                ['secteur' => 'Cabinet de conseil, d’expertise comptable ou d’avocats, Lyon ou Dakar', 'probleme' => 'Les demandes arrivent par formulaire, mais les réponses tardent et personne ne relance les prospects hésitants.', 'solution' => 'Un guide téléchargeable en échange d’une adresse, une prise de rendez-vous, une séquence de trois messages qui répond aux objections courantes, et une alerte envoyée au responsable pour chaque demande qualifiée.'],
                ['secteur' => 'Commerce et marque de produits, Lomé ou Montréal', 'probleme' => 'Les clients commandent par WhatsApp après avoir vu une publicité et abandonnent au moment de payer.', 'solution' => 'Une page de commande avec paiement Mobile Money ou carte, un message de confirmation, un rappel pour les paniers non payés et une demande d’avis après livraison, avec un arrêt des relances dès l’achat.'],
                ['secteur' => 'Immobilier et promotion de lotissements', 'probleme' => 'Beaucoup de curieux demandent la brochure, peu d’acheteurs potentiels répondent ensuite.', 'solution' => 'Un formulaire en deux temps qui qualifie par le budget et le délai, un envoi de brochure, un rendez-vous de visite et un suivi des prospects qualifiés par campagne, pour comparer la qualité et non le seul volume.'],
                ['secteur' => 'Organisateurs d’événements, de séminaires et de salons', 'probleme' => 'Les billets sont vendus en espèces ou par virements, sans liste fiable ni suivi par source.', 'solution' => 'Une billetterie en ligne, une confirmation avec le billet, des rappels avant l’événement et une séquence après, avec le chiffre de vente par canal de promotion.'],
                ['secteur' => 'Services aux entreprises (PME, ONG, écoles), France ou Cameroun', 'probleme' => 'La décision se prend à plusieurs et sur plusieurs semaines, sans que l’entreprise garde le contact.', 'solution' => 'Un contenu utile contre une adresse professionnelle, une séquence éducative espacée, une démonstration à réserver et un enregistrement des contacts dans Odoo ou Dolibarr pour que le suivi commercial reste unique.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la création d’un tunnel de vente, et qu’est-ce qui fait varier le prix ?',
            'intro'      => 'Le tunnel est chiffré sur devis, après un échange gratuit. Aucun montant global n’est affiché ici : il dépend du nombre d’étapes, du paiement, des messages et des outils à relier, et un chiffre publié sans connaître votre offre serait faux dans la plupart des cas. Le seul tarif de départ publié concerne la page elle-même. Modes de règlement acceptés : Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Landing page seule', 'prix' => 'À partir de 150 000 FCFA', 'inclus' => ['Tarif de départ de la landing page, publié sur le site', 'Voir la page <a href="/services/landing-page-haute-conversion">landing page haute conversion</a>', 'Le montant exact figure sur le devis']],
                ['offre' => 'Tunnel complet : pages, paiement, remerciement, séquence de messages', 'prix' => 'Sur devis', 'inclus' => ['Schéma du parcours et événements à mesurer', 'Pages, paiement branché et testé, page de remerciement', 'Séquence d’e-mails ou de messages WhatsApp', 'Délai annoncé sur le devis']],
                ['offre' => 'Relances automatisées avec n8n ou Make', 'prix' => 'Sur devis', 'inclus' => ['Scénarios de relance d’abandon, de rappel et d’arrêt', 'Documentation des scénarios']],
                ['offre' => 'Raccordement à Odoo, Dolibarr ou à un CRM', 'prix' => 'Sur devis', 'inclus' => ['Création des contacts et des commandes', 'Rattachement des paiements aux factures']],
            ],
            'variations' => [
                'Le nombre d’étapes et de pages : un tunnel de trois pages ne représente pas le travail d’un tunnel avec vente additionnelle, rappel de panier et accès à un espace de formation.',
                'Le nombre de messages à rédiger et le canal choisi, e-mail, WhatsApp ou les deux.',
                'Le type de paiement : un prestataire avec Mobile Money et carte demande plus de réglages et de tests qu’un simple formulaire de contact.',
                'L’outil retenu : une plateforme tout-en-un se configure plus vite qu’un développement sur mesure, mais impose ses limites.',
                'Le nombre de raccordements : liste de contacts, CRM, Odoo ou Dolibarr, tableau de suivi, alertes.',
                'Les langues et les devises, quand le tunnel vise à la fois l’Afrique francophone et l’Europe.',
                'L’urgence : un lancement dans quelques jours oblige à réorganiser le planning.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que prévoir en plus du prix du tunnel ?',
            'paragraphes' => [
                'Le prix du tunnel ne couvre pas tout ce qu’un tunnel coûte à faire vivre. À prévoir en plus : l’abonnement à l’outil de pages ou d’envoi, s’il y en a un, les frais prélevés par le prestataire de paiement sur chaque transaction, le coût des messages WhatsApp selon la grille de Meta, l’hébergement et le nom de domaine, et surtout le budget publicitaire versé directement à la régie.',
                'Le devis distingue ces postes, ce qui permet de calculer le coût réel d’un client une fois le tunnel lancé. Pour un client hors de la zone franc, en France, en Belgique, en Suisse ou au Canada, le montant est établi dans la devise convenue sur le devis. Le temps de votre équipe compte aussi : un tunnel envoie des prospects, il faut quelqu’un pour répondre à ceux qui veulent parler.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font échouer un tunnel de vente, et comment les éviter ?',
            'intro' => 'Ces erreurs reviennent d’un projet à l’autre. Les connaître avant la construction coûte moins cher que de les découvrir avec de la publicité payée.',
            'items' => [
                ['titre' => 'Construire le tunnel avant d’avoir une offre qui se vend', 'texte' => 'Un tunnel amplifie ce qui existe. Si personne n’achète votre offre quand vous la proposez à la main, il ne la fera pas acheter à des inconnus. Testez d’abord auprès de quelques personnes, puis automatisez.'],
                ['titre' => 'Ajouter trop d’étapes', 'texte' => 'Chaque page supplémentaire perd une partie du public. Un tunnel court qui fonctionne vaut mieux qu’un parcours de huit pages que personne ne finit. On ajoute une étape quand les chiffres la justifient.'],
                ['titre' => 'Livrer sur le clic de paiement plutôt que sur la confirmation', 'texte' => 'La livraison se déclenche quand le prestataire confirme le paiement. Sinon, un abandon ou un paiement refusé donne accès à ce qui n’a pas été payé, ou l’inverse.'],
                ['titre' => 'Relancer sans limite ni arrêt', 'texte' => 'Un message qui continue d’arriver après l’achat ou la désinscription agace, provoque des signalements et expose à des sanctions. Chaque relance prévoit sa condition d’arrêt.'],
                ['titre' => 'Écrire des messages qui ne servent que la vente', 'texte' => 'Une séquence où chaque message ne fait que pousser l’offre épuise vite les abonnés. Mélangez les messages qui aident (réponse à une objection, exemple, mode d’emploi) et ceux qui proposent.'],
                ['titre' => 'Ne pas tester le parcours sur téléphone', 'texte' => 'Un tunnel testé sur ordinateur échoue souvent là où est le public : bouton hors écran, formulaire difficile à remplir, retour de paiement qui rouvre la mauvaise page.'],
                ['titre' => 'Enfermer ses contacts chez un éditeur', 'texte' => 'Sans possibilité d’exporter votre liste et vos historiques, vous ne pouvez plus changer d’outil. Vérifiez l’export avant de vous engager.'],
                ['titre' => 'Compter les visites au lieu des ventes', 'texte' => 'Le nombre de visiteurs flatte, le nombre de clients paie. Le tableau de suivi doit afficher les passages d’une étape à l’autre et le coût par client.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quels signaux doivent vous alerter chez un prestataire de tunnels de vente ?',
            'texte' => 'Méfiez-vous de celui qui promet un taux de conversion ou un chiffre d’affaires avant d’avoir vu votre offre, de celui qui vous impose son outil sans comparer, de celui qui garde les accès de vos comptes publicitaires, de paiement ou d’envoi, et de celui qui vous montre des résultats de clients sans pouvoir les justifier. Demandez qui détient les comptes à la fin, comment exporter vos contacts, et ce qui se passe si un scénario de relance s’arrête. Des témoignages ou des exemples de tunnels à l’appui d’une promesse doivent pouvoir être vérifiés.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelles règles de consentement respecter pour relancer vos prospects par e-mail, SMS ou WhatsApp ?',
            'paragraphes' => [
                'Un tunnel collecte des coordonnées pour écrire ensuite aux gens : il est donc soumis aux règles de la prospection directe. Au Bénin, d’après le texte de la loi n° 2017-20 du 20 avril 2018 portant code du numérique publié par le Secrétariat général du Gouvernement et consulté le 4 novembre 2026, le code interdit la prospection par systèmes automatisés de communications électroniques, courriers électroniques ou SMS auprès d’un utilisateur qui n’a pas exprimé son consentement préalable. Le texte précise que l’absence de réponse ne vaut pas consentement et que la preuve du consentement incombe à celui qui prospecte.',
                'Le code prévoit une exception pour les clients : la prospection est autorisée sans consentement préalable si les coordonnées ont été recueillies à l’occasion d’une vente ou d’une prestation de services, si elle ne porte que sur des produits ou services analogues du même fournisseur, et si la personne peut s’y opposer sans frais, au moment de la collecte et à chaque message. Pour une personne morale, les adresses électroniques impersonnelles sont admises.',
                'Le code prévoit aussi que toute personne peut refuser sans frais la prospection, que chaque message doit indiquer comment demander l’arrêt et que l’identité de l’expéditeur ne doit pas être dissimulée. Les sanctions prévues ne sont pas détaillées ici : ce texte a pu être modifié depuis, notamment par la loi n° 2020-35 du 6 janvier 2021, et doit être relu dans sa version en vigueur avant toute décision.',
                'En Europe, la CNIL expose des règles proches dans sa page sur les communications électroniques aux prospects et clients, consultée le 4 novembre 2026. Les messages promotionnels adressés à des particuliers exigent un consentement préalable libre, spécifique et informé, les cases pré-cochées ne comptent pas, et une simple création de compte sans achat ne crée pas une relation de client. La page distingue les messages transactionnels, nécessaires à l’exécution d’un contrat, des messages de prospection. Entre professionnels, le consentement n’est pas toujours nécessaire si le message concerne l’activité professionnelle du destinataire et qu’il peut s’y opposer simplement.',
                'Sur la page de capture, cela donne trois choses. Une case séparée, non cochée, pour recevoir les messages commerciaux. Une courte mention qui dit qui reçoit les données, pourquoi et pendant combien de temps. Et un enregistrement du consentement avec sa date et la page d’origine. Côté mesure, la CNIL indique dans sa page du 4 juillet 2025 que les traceurs de mesure d’audience ne sont exemptés de consentement que s’ils produisent des statistiques anonymes pour l’éditeur seul, avec une durée de vie de 13 mois au plus et des données conservées 25 mois au plus ; les traceurs publicitaires, eux, demandent un bandeau de consentement. Cette partie n’est pas un avis juridique : pour un traitement lourd, faites relire votre politique par un juriste de votre pays.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le contexte local : mobile, connexion, langue, facturation ?',
            'paragraphes' => [
                'Le téléphone est l’appareil du tunnel. Selon DataReportal, le Bénin comptait fin 2025 environ 16,4 millions de connexions mobiles pour 4,80 millions d’internautes en octobre 2025, et la source note que certaines connexions n’incluent pas d’accès à Internet. Un tunnel conçu pour un ordinateur et une fibre rapide laisse de côté une grande partie du public. Les pages sont donc légères, les boutons faciles à toucher et les formulaires courts.',
                'Le paiement doit suivre les habitudes du pays. Le Mobile Money (MTN, Moov) est un moyen de paiement très répandu, ce qui rend la carte seule souvent insuffisante. Pour la diaspora et l’Europe, la carte bancaire et PayPal complètent l’offre. L’affichage des prix suit le pays : francs CFA à Cotonou, euros à Bruxelles, avec des conditions claires sur la devise qui sera réellement débitée.',
                'La connexion fluctue. Le tunnel garde les informations saisies si la page se recharge, confirme le paiement même si le retour vers le site est interrompu, et envoie l’accès par message pour que le client ne dépende pas d’une page fermée trop vite. La langue se choisit selon le public : français soigné pour l’Afrique francophone et l’Europe, version anglaise seulement si l’offre vise des acheteurs anglophones.',
                'Enfin la facturation : un achat en ligne appelle un reçu ou une facture. Si votre entreprise émet des factures normalisées, le paiement reçu par le tunnel se rattache à la facture établie dans votre outil de gestion, ce qui se prévoit au devis, en particulier avec Odoo ou Dolibarr.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier votre tunnel de vente à Richard SALANON ?',
            'paragraphes' => [
                "Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d'Afrique francophone, d'Europe et du Canada.",
                'Il compte plus de six ans d’expérience, a travaillé dans quinze pays dont le Bénin, la Côte d’Ivoire, le Sénégal, la France, la Belgique, la Suisse et le Canada, et formé plus de 200 personnes. Il a suivi une formation à EPITECH (2022), a créé Wapy, assistant WhatsApp à intelligence artificielle, et co-fonde <a href="https://audyxa.com">Audyxa</a>, cabinet de formation et de transformation digitale. Un tunnel de vente réunit ses métiers : le développement des pages et des paiements, l’automatisation avec n8n et Make, WhatsApp, et le lien avec Odoo ou Dolibarr.',
                'Sa façon de travailler tient en quatre points. Il compare les outils du marché à votre cas. Il cherche à anticiper les cas d’échec : paiement refusé, relance qui s’arrête, consentement manquant. Et il ne promet aucun taux de conversion. Le devis est gratuit et la réponse arrive sous 24 heures. Pour son parcours, voir la page <a href="/a-propos/">à propos</a> ou la présentation de <a href="/richard-salanon">Richard SALANON</a>. Pour la formation de vos équipes à ces outils, la <a href="/formation-automatisation">formation à l’automatisation</a> prolonge le projet.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer un tunnel de vente ?',
            'texte' => 'Un tunnel ne crée pas la demande, il organise le chemin vers l’achat et montre où l’on perd les gens. Commencez par une offre qui se vend déjà, un parcours court, un paiement adapté à votre public et une relance qui s’arrête dès qu’elle n’a plus lieu d’être. Mesurez le coût par client, pas le nombre de visites.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous un tunnel de vente qui encaisse, relance et se mesure ?',
            'texte'  => 'Décrivez votre offre, votre public et la manière dont vous vendez aujourd’hui. Vous recevez une réponse sous 24 heures et un devis gratuit, avec le parcours proposé et les outils comparés.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un devis gratuit'],
        ],
    ],

    'faq' => [
        ['q' => 'Qu’est-ce qu’un tunnel de vente ?', 'r' => 'C’est le parcours en plusieurs étapes qui mène un visiteur inconnu à l’achat : une page de capture qui recueille ses coordonnées, une page de vente, un paiement en ligne, une page de remerciement, puis des messages de suivi par e-mail ou WhatsApp. À chaque étape, on mesure combien de personnes passent à la suivante, pour corriger celle qui en perd le plus.'],
        ['q' => 'Quelle différence entre un tunnel de vente, un funnel et un entonnoir de conversion ?', 'r' => 'Aucune sur le fond. « Funnel » est le mot anglais, « entonnoir de conversion » une autre façon de nommer le même parcours, qui se rétrécit à chaque étape parce que moins de personnes avancent. Le service est le même quel que soit le terme employé.'],
        ['q' => 'Quelle différence avec une landing page ?', 'r' => 'Une landing page est une page unique, construite pour une seule action. Un tunnel enchaîne plusieurs pages et plusieurs messages, relie un paiement et suit chaque personne. Beaucoup de tunnels commencent par une landing page, présentée sur la page <a href="/services/landing-page-haute-conversion">landing page haute conversion</a>.'],
        ['q' => 'Combien coûte la création d’un tunnel de vente ?', 'r' => 'Le tunnel complet est chiffré sur devis, selon le nombre d’étapes, le paiement, les messages et les raccordements. Le seul tarif de départ publié concerne la page : une landing page démarre à 150 000 FCFA. Le devis est gratuit et la réponse arrive sous 24 heures.'],
        ['q' => 'Combien de temps faut-il pour créer un tunnel ?', 'r' => 'La durée dépend du nombre de pages, du nombre de messages à rédiger, du paiement et des outils à relier. Elle est annoncée sur le devis, avant le début du travail. Un tunnel court avec un outil du marché se monte plus vite qu’un parcours sur mesure.'],
        ['q' => 'Pouvez-vous me promettre un taux de conversion ?', 'r' => 'Non. Un taux annoncé avant d’avoir vu votre offre, votre public et votre trafic ne repose sur rien. Le tunnel est livré avec un suivi qui montre les passages d’une étape à l’autre, et les corrections se décident sur ces chiffres.'],
        ['q' => 'Peut-on payer par Mobile Money dans le tunnel ?', 'r' => 'Oui, par un prestataire de paiement qui prend en charge les opérateurs de votre pays, avec la carte bancaire en complément. Les opérateurs couverts et les frais se vérifient chez le prestataire ; le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a> aide à choisir.'],
        ['q' => 'Faut-il utiliser une plateforme tout-en-un, WordPress ou un développement sur mesure ?', 'r' => 'Cela dépend de votre cas. Une plateforme tout-en-un du marché suffit pour un parcours classique ; WordPress avec WooCommerce convient si vous voulez un site marchand que vous possédez ; le sur mesure se justifie pour une contrainte précise. Aucun de ces outils n’est présenté comme un partenaire.'],
        ['q' => 'Utilisez-vous e-mail ou WhatsApp pour les messages ?', 'r' => 'Les deux, selon votre public. L’e-mail porte les contenus longs, WhatsApp les confirmations, rappels et questions. WhatsApp suit les règles de Meta : modèles de message hors de la fenêtre de 24 heures, facturation par message livré.'],
        ['q' => 'Que se passe-t-il si le paiement échoue ou est abandonné ?', 'r' => 'La livraison ne part que sur la confirmation du prestataire de paiement. En cas d’échec ou d’abandon, le tunnel peut envoyer un rappel, limité à un ou deux messages, avec un lien pour reprendre le paiement.'],
        ['q' => 'Les relances automatiques sont-elles autorisées ?', 'r' => 'Oui, sous conditions. Au Bénin, la loi n° 2017-20 interdit la prospection automatisée sans consentement préalable, avec une exception pour les clients sur des produits analogues, et impose un moyen simple de s’y opposer. En Europe, la CNIL demande un consentement préalable pour les particuliers. Le tunnel prévoit la case de consentement et l’arrêt des relances.'],
        ['q' => 'Puis-je modifier le tunnel moi-même ensuite ?', 'r' => 'En grande partie, oui. Un tunnel bien conçu permet de modifier un texte, de lire le tableau de suivi et de suspendre une relance sans développeur. Les changements de structure ou de raccordement se font sur un nouveau devis.'],
        ['q' => 'Pouvez-vous relier le tunnel à Odoo ou Dolibarr ?', 'r' => 'Oui. Les contacts, les commandes et les paiements peuvent être créés dans Odoo ou Dolibarr par un scénario n8n ou Make ou par une intégration directe, ce qui garde un suivi commercial unique. Le raccordement est chiffré sur le devis.'],
        ['q' => 'Travaillez-vous avec des clients en Europe ?', 'r' => 'Oui. Richard SALANON a travaillé en France, en Belgique, en Suisse et au Canada, depuis Cotonou. Le montant est alors établi sur devis dans la devise convenue, et les règles de consentement européennes sont intégrées au tunnel.'],
        ['q' => 'Avez-vous un exemple de tunnel de vente, et le modèle AIDA s’applique-t-il ?', 'r' => 'Un exemple simple pour une formation : une publicité mène à une page de capture (guide gratuit), puis à une page de vente, un paiement, une page de remerciement et une séquence de messages. Le modèle AIDA (attention, intérêt, désir, action) sert de fil pour rédiger ces pages : attirer l’attention dans l’annonce, nourrir l’intérêt sur la page de capture, créer le désir sur la page de vente, faciliter l’action au paiement. C’est un cadre de rédaction, pas une garantie de résultat.'],
        ['q' => 'Que signifie un tunnel de vente automatisé, et que reste-t-il à faire à la main ?', 'r' => 'Un tunnel automatisé enchaîne seul les tâches répétitives : enregistrer le contact, envoyer l’accès après le paiement, déclencher les messages et les relances. Il laisse à une personne les échanges qui demandent du jugement : questions particulières, négociation, cas de paiement litigieux. Il demande aussi un suivi, car un scénario peut s’arrêter sans prévenir.'],
        ['q' => 'Comment créer un tunnel de vente e-commerce ou un tunnel de vente avec WordPress ?', 'r' => 'Avec WordPress et WooCommerce, on monte les pages, le panier et le paiement sur un site que vous possédez, puis on ajoute les messages et les relances avec n8n ou Make. Pour une boutique avec catalogue, la page <a href="/services/site-e-commerce">site e-commerce</a> est le point de départ ; le tunnel s’y greffe pour une offre précise. Les extensions de paiement compatibles avec Mobile Money se vérifient avant de choisir.'],
        ['q' => 'Peut-on créer un tunnel de vente avec l’IA ?', 'r' => 'L’IA aide à rédiger des brouillons de pages et de messages, à proposer des variantes et à regrouper les contacts par centre d’intérêt. Elle ne remplace ni la connaissance de votre offre ni le test : tout texte est relu, et le tunnel se juge sur les passages mesurés d’une étape à l’autre. Les données personnelles envoyées à un outil d’IA suivent les mêmes règles de protection que le reste du tunnel.'],
        ['q' => 'Existe-t-il un tunnel de vente gratuit ?', 'r' => 'On peut démarrer avec des outils qui proposent une offre gratuite, mais avec des limites, par exemple sur le nombre de contacts, de messages ou de pages, ou sur les moyens de paiement disponibles. Ces limites et les conditions changent : elles se vérifient chez l’éditeur. Le temps de conception, de test et de suivi reste, lui, un coût à prévoir.'],
        ['q' => 'Faut-il passer par une agence pour un tunnel de vente ?', 'r' => 'Pas forcément. Une agence apporte plusieurs profils en même temps, un indépendant vous donne un interlocuteur unique. Richard SALANON travaille en indépendant depuis Cotonou : le devis est gratuit et la réponse arrive sous 24 heures. Demandez dans tous les cas qui détient les comptes à la fin et comment exporter vos contacts.'],
        ['q' => 'Quels moyens de paiement acceptez-vous pour la prestation ?', 'r' => 'Cinq modes sont possibles : Mobile Money (MTN et Moov), carte bancaire, PayPal, virement et espèces.'],
    ],

    'sources' => [
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (prospection directe)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-11-04'],
        ['titre' => 'CNIL, communications par voie électronique aux prospects et clients : quelles règles respecter ?', 'url' => 'https://www.cnil.fr/fr/communication-electronique-quelles-regles', 'date' => '2026-11-04'],
        ['titre' => 'CNIL, cookies et traceurs : solutions pour les outils de mesure d’audience (page du 4 juillet 2025)', 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies-solutions-pour-les-outils-de-mesure-daudience', 'date' => '2026-11-04'],
        ['titre' => 'Meta for Developers, tarification de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-11-04'],
        ['titre' => 'Aide Google Analytics, événements recommandés', 'url' => 'https://support.google.com/analytics/answer/9267735?hl=fr', 'date' => '2026-11-04'],
        ['titre' => 'DataReportal, rapport Digital 2026 consacré au Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-11-04'],
    ],

    'liens' => [
        'services'    => ['landing-page-haute-conversion', 'automatisation-ia', 'integration-whatsapp', 'agents-ia-chatbot-whatsapp', 'site-e-commerce', 'referencement-naturel-seo'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'n8n-vs-make-vs-zapier'],
    ],
];
