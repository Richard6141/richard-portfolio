<?php
// ============================================================
// data/metiers/commercants-e-commercants.php · Page « formations par
// métier » : commerçants et e-commerçants (vague 1C, univers Commerce et
// communication, prioritaire, statut F : Richard a déjà formé ce public).
// Angle propre : le métier de commerçant (boutique physique et en ligne,
// WhatsApp, mobile money, stock, livraison) et ses registres ; la page
// oriente vers les fiches whatsapp-business, e-commerce, visibilite-google
// et excel-google-sheets sans reprendre leur texte.
// Faits relevés le 05/10/2026 : Acte uniforme OHADA portant sur le droit
// commercial général (articles 2, 13, 14, 16, 30 à 32), gouv.bj (factures
// normalisées), communiqué de la DGI de Côte d'Ivoire du 5 septembre 2025
// (FNE), impots.gouv.fr (facturation électronique), Baromètre France Num
// 2026, GSMA (24 mars 2026), AGEFICE (critères 2026), DGCCRF (faux avis),
// faits vérifiés du catalogue (Meta, Odoo, article 4 du règlement sur l'IA).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'       => 'Formation numérique et IA pour commerçants et e-commerçants : un seul fichier de prix et de stock, une caisse qui tombe juste, des ventes WhatsApp et en ligne suivies jusqu\'à la livraison',
    'title'       => 'Formation numérique et IA pour commerçants | Richard SALANON',
    'meta'        => 'Formation des commerçants et e-commerçants : prix et stock, caisse et mobile money, WhatsApp, fiche Google, livraison et IA, sur vos outils. Sur devis.',
    'en_bref'     => 'Cette page présente le parcours de formation conçu pour les commerçants, leurs vendeurs et les e-commerçants : tenir une liste unique des articles, des prix et du stock, compter chaque soir les espèces, le mobile money et le crédit, vendre sur WhatsApp, sur Google et en ligne, puis se servir de l\'IA sans lui laisser la main sur les prix ni sur les clients. Le parcours type dure deux jours, suivis d\'une séance de suivi, et s\'organise dans la boutique, entre plusieurs commerçants, à distance ou en hybride. Il s\'appuie sur les formations du catalogue qui comptent le plus pour un commerce, et son prix est fixé sur devis.',
    'publie'      => '2026-10-15',
    'maj'         => '2026-10-05',
    'univers'     => 'Commerce et communication',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : une seule liste pour les articles, les prix et le stock',
            'duree'  => '3 h 30',
            'points' => [
                'Faire le tour du magasin et de l\'arrière-boutique : familles d\'articles, références qui tournent, invendus, articles en dépôt.',
                'Construire la liste maîtresse : code, désignation, unité de vente, prix d\'achat, prix au comptoir, prix en ligne, quantité, seuil de réassort.',
                'Décider qui a le droit de changer un prix, et comment le changement atteint le comptoir, le catalogue WhatsApp et la boutique en ligne le même jour.',
                'Choisir un code par article (code-barres du fournisseur ou code maison) et l\'étiqueter en rayon.',
                'Compter un rayon test, comparer avec la liste, nommer chaque écart : casse, vol, erreur de saisie, vente non notée.',
                'Exercice de contrôle : trois prix modifiés et un arrivage saisi, puis vérifiés par un autre participant sur tous les canaux.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : encaisser, noter, compter la caisse du soir',
            'duree'  => '3 h 30',
            'points' => [
                'Tenir le journal des recettes et des dépenses en séparant espèces, mobile money, carte et ventes à crédit.',
                'Garder la trace des achats aux fournisseurs, avec leur mode de règlement et la pièce qui les prouve.',
                'Reconnaître un paiement mobile money réellement reçu, et séparer le compte de la boutique du compte personnel.',
                'Transformer le cahier de crédit en tableau : client, montant, date promise, relance, règlement partiel.',
                'Situer la facture normalisée (MECeF ou e-MECeF au Bénin, FNE en Côte d\'Ivoire) et la facturation électronique en France dans le circuit de vente.',
                'Exercice de contrôle : une journée de ventes fictives à clôturer, avec un écart caché entre la caisse, le relevé mobile money et le cahier.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : vendre au-delà du comptoir, du message à la livraison',
            'duree'  => '3 h 30',
            'points' => [
                'Relier le catalogue WhatsApp et la fiche Google à la liste maîtresse, pour qu\'aucun canal n\'annonce un autre prix.',
                'Fixer les zones, les tarifs et les jours de livraison, puis la règle de remise de l\'argent par le livreur.',
                'Décider ce qui se vend à distance et ce qui reste au comptoir : articles fragiles, sur commande, à essayer.',
                'Savoir quand une boutique en ligne devient utile, et ce qu\'elle ajoute comme travail chaque semaine.',
                'Choisir les deux ou trois chiffres de la semaine que le patron lira chaque lundi.',
                'Exercice de contrôle : une commande reçue par message, payée à distance, livrée et notée dans les registres de la boutique.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : l\'IA au service de la boutique, avec ses garde-fous',
            'duree'  => '3 h 30',
            'points' => [
                'Rédiger avec un assistant les descriptions de vingt articles à partir de leurs caractéristiques réelles, puis les corriger.',
                'Préparer les réponses aux questions qui reviennent, les annonces de promotion et les messages de rupture de stock.',
                'Faire lire à l\'IA un export des ventes du mois pour repérer les articles qui dorment et ceux qui manquent.',
                'Ce que l\'on ne donne jamais à un assistant : numéros des clients, soldes mobile money, codes, fichiers complets.',
                'Les interdits : faux avis, photos qui trompent sur l\'article, promesses qu\'aucun humain n\'a validées.',
                'Exercice de contrôle : une promotion préparée avec l\'IA, relue, chiffrée et validée par le patron avant publication.',
            ],
        ],
        [
            'titre'  => 'Séance de suivi, trois à quatre semaines plus tard : les chiffres réels de la boutique',
            'duree'  => '2 h, à distance',
            'points' => [
                'Lecture des caisses du soir et des écarts relevés depuis la session.',
                'Point sur le crédit client : encours, relances faites, règlements obtenus.',
                'Correction de la liste maîtresse et des canaux qui affichent encore un mauvais prix.',
                'Choix écrit de la prochaine étape : formation complémentaire, logiciel de caisse, boutique en ligne, ou rien de plus pour l\'instant.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Commerçants, gérants de boutique, vendeurs, e-commerçants et leurs livreurs'],
        ['l' => 'Durée', 'v' => 'Deux jours en quatre demi-journées, puis une séance de suivi de deux heures'],
        ['l' => 'Formats', 'v' => 'Dans la boutique, entre commerçants, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que changent l\'IA, la digitalisation et l\'automatisation pour un commerçant ?',
            'paragraphes' => [
                'Un commerce tient sur trois mémoires : celle des prix, celle du stock et celle de l\'argent. Dans beaucoup de boutiques de Cotonou, de Lomé ou de Bamako, ces trois mémoires sont réparties entre la tête du patron, un cahier à spirale, le téléphone d\'une vendeuse et l\'historique d\'un compte mobile money. Tant que la boutique est petite, cela tient. Dès qu\'arrivent un deuxième vendeur, un deuxième point de vente ou des clients qui commandent par message, les écarts apparaissent : un prix différent selon la personne qui répond, un article vendu deux fois, une dette que personne ne retrouve.',
                'La digitalisation, pour un commerçant, ne consiste pas à acheter un logiciel. Elle consiste d\'abord à ramener ces mémoires dans un seul endroit, tenu à jour par des gestes simples : une liste d\'articles qui fait foi, une caisse comptée chaque soir, un registre des achats, un tableau du crédit client. L\'outil vient ensuite, et il peut rester modeste : un tableur bien construit suffit à beaucoup de boutiques pendant des années. L\'automatisation intervient plus tard encore, quand des tâches se répètent assez pour mériter d\'être confiées à une machine, comme l\'avis de commande ou le rappel d\'une dette échue.',
                'L\'intelligence artificielle, enfin, arrive dans le commerce par la petite porte : des descriptions d\'articles, des réponses aux clients, une affiche de promotion, la lecture d\'un mois de ventes. Elle fait gagner du temps sur l\'écrit et sur l\'analyse, à condition de travailler sur des chiffres justes. Une IA qui lit un cahier faux tire des conclusions fausses avec beaucoup d\'assurance. C\'est pourquoi le parcours commence par les registres et finit par l\'IA, et jamais l\'inverse.',
                'Richard SALANON n\'est pas commerçant et ne prétend pas apprendre le métier à ceux qui l\'exercent : le choix des fournisseurs, la négociation, la marge et l\'art de vendre restent les vôtres. Il forme à l\'usage des outils qui soutiennent ce métier, sur vos articles, vos ventes et vos téléphones, et vous oriente vers les formations détaillées du catalogue quand un sujet mérite plus de temps.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Qu\'est-ce qui change, tâche par tâche, dans la journée d\'une boutique ?',
            'legende' => 'Situation la plus fréquente avant la formation, et répartition des rôles après. La dernière colonne fixe ce qui ne se délègue jamais, ni à un logiciel ni à un assistant.',
            'entetes' => ['Moment de la journée', 'Avant, le plus souvent', 'Avec des outils numériques', 'Ce que l\'IA peut apporter', 'Ce qui reste au commerçant'],
            'lignes'  => [
                ['Ouverture', 'Le fond de caisse se compte de mémoire', 'Fond de caisse noté, solde mobile money relevé à l\'ouverture', 'Rien d\'utile', 'Compter, signer, confier la caisse'],
                ['Réception d\'un arrivage', 'Le bon du fournisseur finit dans un tiroir', 'Entrée en stock, achat noté avec son mode de règlement et sa pièce', 'Transcrire une facture photographiée en lignes de tableau, à vérifier', 'Contrôler les quantités reçues et la qualité'],
                ['Fixation des prix', 'Chaque vendeur connaît « à peu près » le prix', 'Un prix par article dans la liste maîtresse, repris par tous les canaux', 'Simuler l\'effet d\'une hausse du prix d\'achat sur la marge', 'Décider du prix et de la remise maximale'],
                ['Vente au comptoir', 'Le ticket est manuscrit, ou absent', 'Vente notée par mode de paiement, facture normalisée quand la loi l\'exige', 'Rien au comptoir : la vente doit rester rapide', 'Accueillir, conseiller, encaisser'],
                ['Commandes par message', 'Les demandes se perdent sous les nouveaux messages', 'Catalogue, étiquettes et relevé des commandes', 'Proposer une réponse à une question fréquente, relue avant envoi', 'Confirmer prix, délai et paiement'],
                ['Paiement mobile money', 'Le client montre un SMS ou une capture', 'Encaissement vérifié sur le compte marchand ou le tableau de bord de la passerelle', 'Aucun rôle : la vérification est humaine', 'Ne libérer l\'article qu\'après vérification'],
                ['Livraison', 'Le livreur rapporte l\'argent quand il peut', 'Liste des courses du jour, preuve de remise, argent rendu le soir', 'Regrouper les adresses d\'une tournée par quartier', 'Choisir le livreur et fixer ses règles'],
                ['Crédit client', 'Un cahier que seul le patron sait lire', 'Tableau des encours, date promise, relance datée', 'Rédiger une relance courtoise et ferme', 'Accorder ou refuser le crédit'],
                ['Clôture', 'La recette se « sent » plus qu\'elle ne se compte', 'Caisse comptée, écart expliqué, recette du jour reportée au journal', 'Résumer la semaine en quelques lignes à partir du tableau', 'Signer la caisse, décider des suites'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que ne doivent jamais faire l\'IA et l\'automatisation dans un commerce, et quels textes le disent ?',
            'intro' => 'Le commerçant reste responsable de ce que sa boutique affiche, promet et conserve, qu\'un humain, un logiciel ou un assistant l\'ait écrit. Voici les limites qui reviennent à chaque session, avec les textes qui les fondent.',
            'items' => [
                ['titre' => 'Fabriquer des avis ou des témoignages', 'texte' => 'Faire écrire par une IA des avis de « clients satisfaits » est une tromperie, pas une astuce de marketing. En France, la DGCCRF, dans sa fiche pratique sur les faux commentaires consultée le 5 octobre 2026, range la diffusion de faux avis parmi les pratiques commerciales trompeuses, punies de deux ans d\'emprisonnement et de 300 000 euros d\'amende. Les règles de Google retirent aussi ces avis et peuvent sanctionner la fiche.'],
                ['titre' => 'Promettre à la place du commerçant', 'texte' => 'Un assistant qui annonce un délai, une remise ou un droit au retour engage la boutique. Le tribunal de Colombie-Britannique l\'a rappelé à Air Canada en février 2024 : l\'entreprise répond de ce que dit son chatbot. L\'histoire est racontée dans notre page <a href="/histoires/air-canada-chatbot">Air Canada et son chatbot</a>. Toute réponse automatique se limite donc à ce que le commerçant a écrit et validé.'],
                ['titre' => 'Tenir les registres à la place du commerçant', 'texte' => 'L\'Acte uniforme OHADA portant sur le droit commercial général, adopté à Lomé le 15 décembre 2010, oblige l\'entreprenant à tenir au jour le jour un livre de ses ressources et de ses emplois, conservé cinq ans au moins (article 31). Une IA peut aider à recopier un ticket ou une facture photographiée ; elle ne remplace ni la saisie quotidienne ni le contrôle de celui qui signe.'],
                ['titre' => 'Disperser les données des clients', 'texte' => 'Copier un fichier de clients dans un assistant en ligne, le partager dans un groupe ou le laisser à un ancien vendeur expose la boutique. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> encadre la collecte et la conservation des données personnelles ; en Europe, le RGPD impose de ne traiter que les données nécessaires à la finalité annoncée. On anonymise avant de demander quoi que ce soit à une IA.'],
                ['titre' => 'Écrire en masse à ceux qui n\'ont rien demandé', 'texte' => 'Programmer des envois groupés vers des numéros récupérés ici ou là revient à faire de la prospection sans accord, ce que la loi béninoise et les règles de WhatsApp interdisent. La formation <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a> détaille les règles de diffusion ; ici, on retient seulement qu\'aucune automatisation ne doit envoyer un message que le commerçant n\'enverrait pas lui-même.'],
                ['titre' => 'Décider seule d\'un prix, d\'un crédit ou d\'un remboursement', 'texte' => 'Ces décisions engagent l\'argent de la boutique et la relation avec le client. En Europe, l\'article 4 du règlement sur l\'IA oblige depuis le 2 février 2025 les entreprises qui utilisent l\'IA à veiller à la maîtrise de ces outils par leur personnel, avec un contrôle possible depuis le 3 août 2026. Former les vendeurs fait donc partie de l\'obligation, pas du confort.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels registres, outils et obligations un commerçant doit-il savoir tenir ?',
            'legende' => 'Textes et prix relevés le 5 octobre 2026 sur les pages officielles citées dans les sources. Les prix des éditeurs ne sont jamais compris dans le devis de la formation.',
            'entetes' => ['Registre ou outil', 'À quoi il sert dans la boutique', 'Ce qu\'il impose ou ce qu\'il coûte', 'Où l\'apprendre en détail'],
            'lignes'  => [
                ['Livre des recettes et des dépenses', 'Garder la trace, jour après jour, de chaque entrée et sortie d\'argent', 'Obligatoire pour l\'entreprenant OHADA, espèces distinguées des autres règlements, conservation cinq ans (article 31)', 'Ce parcours, puis <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Registre des achats', 'Savoir ce qui a été acheté, à qui, comment et avec quelle pièce', 'Obligatoire pour l\'entreprenant qui vend des marchandises, récapitulé par année (article 32)', 'Ce parcours'],
                ['Livres de commerce', 'Tenir la comptabilité complète d\'un commerçant immatriculé', 'Tenus selon le droit comptable OHADA, avec le numéro du registre du commerce (articles 13 et 14)', 'Votre comptable, et la formation <a href="/formations/ia-comptables-syscohada">IA pour comptables</a> pour son cabinet'],
                ['Facture normalisée au Bénin', 'Délivrer une facture reconnue par l\'administration fiscale', 'MECeF ou logiciel validé par la DGI pour les assujettis à la TVA ; amende de dix fois la facture, au moins un million de FCFA', '<a href="/formations/digitaliser-son-entreprise">Digitaliser son entreprise pas à pas</a>'],
                ['Facture normalisée électronique en Côte d\'Ivoire', 'Facturer par la plateforme de la DGI', 'Fin du papier fixée au 22 décembre 2025 pour le régime de l\'entreprenant ; reçu normalisé électronique pour les grandes surfaces', '<a href="/formations/digitaliser-son-entreprise">Digitaliser son entreprise pas à pas</a>'],
                ['Caisse et point de vente', 'Encaisser vite et faire baisser le stock à chaque vente', 'Point de vente inclus dans Odoo (une application gratuite, sinon offre Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois) ; TakePOS dans Dolibarr, logiciel libre', '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a> ou <a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['Application WhatsApp Business', 'Montrer les articles, répondre, suivre les commandes', 'Gratuite ; la plateforme de Meta, elle, facture au-delà de 1 000 messages de service par mois et par numéro depuis le 1er octobre 2026', '<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>'],
                ['Passerelle de paiement', 'Encaisser mobile money et cartes à distance, avec un relevé exploitable', 'Commission par transaction, parfois abonnement ; à comparer avant de signer', '<a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">Comparatif FedaPay, KkiaPay et CinetPay</a>'],
                ['Fiche d\'établissement Google', 'Être trouvé par ceux qui cherchent une boutique dans le quartier', 'Gratuite, mais soumise aux règles de Google sur les avis', '<a href="/formations/visibilite-google">Visibilité Google</a>'],
                ['Boutique en ligne', 'Vendre sans que le client passe au magasin', 'Abonnement ou hébergement, commissions, et surtout du temps chaque semaine', '<a href="/formations/e-commerce">Vendre en ligne : e-commerce</a>'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Commerçant ou entreprenant : quelles obligations le numérique aide-t-il à tenir ?',
            'paragraphes' => [
                'Le droit OHADA distingue deux statuts. Selon l\'article 2 de l\'Acte uniforme portant sur le droit commercial général, est commerçant celui qui fait des actes de commerce par nature sa profession, et l\'article 3 range l\'achat de biens en vue de leur revente parmi ces actes. Le commerçant immatriculé tient des livres de commerce conformes au droit comptable OHADA, qui portent son numéro d\'immatriculation au registre du commerce et du crédit mobilier (articles 13 et 14).',
                'L\'entreprenant est une personne physique qui exerce sur simple déclaration, sans immatriculation. Il garde ce statut tant que son chiffre d\'affaires annuel, deux exercices de suite, ne dépasse pas les seuils du système minimal de trésorerie (article 30) ; pour une activité de négoce, l\'article 13 de l\'Acte uniforme comptable fixe ce seuil à 60 millions de francs CFA hors taxes. Ses obligations sont plus légères, mais précises : le livre quotidien de l\'article 31 et, s\'il vend des marchandises, le registre annuel des achats de l\'article 32.',
                'Ces deux registres sont exactement ceux qui manquent quand un commerçant veut demander un crédit à sa banque ou à son institution de microfinance, répondre à un contrôle ou céder sa boutique. Ils sont aussi la matière première de tout le reste : impossible de connaître sa marge, de décider d\'une promotion ou de demander une analyse à une IA sans eux. Le parcours les installe sous une forme numérique simple, avec une saisie qui prend quelques minutes par jour et une sauvegarde qui ne dépend pas d\'un seul téléphone.',
                'Les obligations nées du commerce se prescrivent par cinq ans (article 16), ce qui donne une règle pratique de conservation des pièces. La formation ne remplace ni le comptable ni le conseil juridique : elle apprend à tenir proprement ce que le comptable demandera, et à le lui transmettre sans retaper chaque ligne.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon le commerce, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Quincaillerie, à Parakou', 'probleme' => 'Situation type : plus de mille références, des prix fournisseurs qui bougent chaque mois et des vendeurs qui donnent chacun leur prix pour les clous ou le ciment.', 'solution' => 'Liste maîtresse par famille avec code maison, prix revus à chaque arrivage par une seule personne, inventaire tournant d\'une famille par semaine, et devis préparés à partir de la liste plutôt que de mémoire.'],
                ['secteur' => 'Téléphones et accessoires, à Abomey-Calavi', 'probleme' => 'Situation type : les retours sous garantie se discutent sans preuve, et le stock des coques et chargeurs ne correspond jamais au rayon.', 'solution' => 'Numéro de série ou IMEI noté à la vente, facture remise systématiquement, registre des retours avec décision écrite, et réassort des accessoires déclenché par un seuil dans le tableau.'],
                ['secteur' => 'Grossiste en vivres, à Bamako', 'probleme' => 'Situation type : les détaillants achètent à crédit, paient par morceaux en espèces ou par mobile money, et le cahier de dettes devient illisible au bout de trois mois.', 'solution' => 'Tableau du crédit par client avec plafond, date promise et paiements partiels, relevé envoyé chaque semaine au détaillant, et règle écrite : pas de nouvelle livraison au-delà du plafond sans l\'accord du patron.'],
                ['secteur' => 'Supérette de quartier, à Dakar', 'probleme' => 'Situation type : des produits périment en rayon pendant que d\'autres manquent, et la caisse du soir présente des écarts que personne n\'explique.', 'solution' => 'Dates de péremption suivies pour les familles sensibles, clôture de caisse comptée à deux, écarts notés avec leur cause, et lecture mensuelle des ventes pour réduire les commandes des articles qui dorment.'],
                ['secteur' => 'Vente en ligne de mèches et de perruques, à Abidjan', 'probleme' => 'Situation type : les ventes se font en direct sur les réseaux sociaux puis par message, les livreurs à moto se multiplient et l\'argent revient en retard.', 'solution' => 'Commande notée dès le direct, paiement vérifié avant toute sortie de stock, liste des livraisons du jour par quartier, argent du livreur remis le soir contre reçu, et facture normalisée électronique émise selon le régime fiscal de la vendeuse.'],
                ['secteur' => 'Boutique de décoration, à Lille', 'probleme' => 'Situation type : la gérante vend au magasin et sur une petite boutique en ligne, reçoit déjà ses factures fournisseurs sous forme électronique et utilise un assistant d\'IA sans règles.', 'solution' => 'Point sur la facturation électronique et la réception des factures fournisseurs, règles d\'usage de l\'IA écrites pour l\'équipe, données des clients retirées des requêtes, et un seul stock pour le magasin et la boutique en ligne.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels usages de l\'IA servent vraiment une boutique, et avec quelles précautions ?',
            'legende' => 'Usages travaillés pendant la seconde journée, sur des assistants courants (ChatGPT, Claude, Gemini, Copilot). Le choix de l\'assistant compte moins que la règle de relecture.',
            'entetes' => ['Usage', 'Ce que l\'on donne à l\'assistant', 'Ce que l\'on vérifie avant d\'utiliser la réponse', 'Ce qu\'on ne lui donne jamais'],
            'lignes'  => [
                ['Décrire un article', 'Marque, matière, dimensions, usage, entretien, tirés de l\'emballage ou de la fiche du fournisseur', 'Qu\'aucune caractéristique n\'a été inventée, que la taille et la couleur sont exactes', 'Des promesses de santé, d\'origine ou de garantie que le fournisseur ne fait pas'],
                ['Répondre aux questions courantes', 'La liste de vos règles : horaires, livraison, retours, moyens de paiement', 'Que la réponse ne promet rien de plus que vos règles écrites', 'Le nom ou le numéro du client qui a posé la question'],
                ['Préparer une promotion', 'Les articles concernés, leur prix d\'achat, la remise envisagée, la durée', 'Le calcul de marge refait à la main, la date de fin, le stock disponible', 'Le pouvoir de publier sans validation du patron'],
                ['Lire les ventes du mois', 'Un export anonymisé : articles, quantités, montants, dates', 'Les totaux, recoupés avec la caisse et le journal', 'Les soldes des comptes, les codes, le fichier des clients'],
                ['Relancer un client débiteur', 'Le montant, la date promise, le ton voulu', 'Que le montant est juste et que le message reste courtois', 'Des menaces, ou des informations sur la dette visibles par d\'autres'],
                ['Traduire ou simplifier un message', 'Le texte à adapter et le public visé', 'Le sens, relu par une personne qui parle la langue', 'Un contrat ou une condition de vente sans relecture'],
                ['Créer un visuel', 'La photo réelle de l\'article et le texte de l\'affiche', 'Que l\'article montré est bien celui qui sera livré', 'Une image qui embellit l\'article au point de tromper le client'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme type pour une boutique, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment le parcours se prépare-t-il et se déroule-t-il dans un commerce ?',
            'items' => [
                ['titre' => 'Le premier échange', 'duree' => '30 minutes', 'texte' => 'Ce que vous vendez, où, à qui, avec combien de personnes, et ce qui coince aujourd\'hui : prix, stock, caisse, crédit, commandes à distance, livraison. Cet échange, le cadrage et le devis sont gratuits.'],
                ['titre' => 'Le passage en boutique ou l\'appel vidéo', 'duree' => '1 heure', 'texte' => 'Avant la session, un tour du magasin ou de la boutique en ligne, du cahier et des téléphones permet de choisir les exercices. Rien n\'est copié sans votre accord.'],
                ['titre' => 'Le choix des demi-journées', 'duree' => 'Selon le devis', 'texte' => 'Le programme type est ajusté : une supérette insiste sur la caisse et la péremption, un vendeur en ligne sur les commandes et la livraison, un grossiste sur le crédit. Les demi-journées sans objet sont retirées.'],
                ['titre' => 'Des horaires compatibles avec la vente', 'duree' => 'Avant l\'ouverture ou le jour de fermeture', 'texte' => 'On ne ferme pas une boutique pour se former. Les séances se placent tôt le matin, le jour de fermeture ou aux heures creuses, et les vendeurs passent par roulement.'],
                ['titre' => 'La pratique sur vos propres données', 'duree' => 'Pendant chaque séance', 'texte' => 'La liste maîtresse se construit sur vos articles, la caisse se compte sur une vraie journée, le crédit se reprend sur votre cahier. Ce qui est fait en séance sert dès le lendemain.'],
                ['titre' => 'La séance de suivi', 'duree' => '2 heures, à distance', 'texte' => 'Trois à quatre semaines plus tard, on lit les caisses, les écarts et le crédit réellement tenus, on corrige, et l\'on décide par écrit de la suite.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Dans la boutique, entre commerçants, à distance ou en hybride : quel format retenir ?',
            'legende' => 'Le format se choisit au premier échange, selon le nombre de vendeurs, les horaires du commerce et la qualité de la connexion.',
            'entetes' => ['Format', 'Situation typique', 'Rythme habituel', 'Points d\'organisation'],
            'lignes'  => [
                ['Intra, dans la boutique', 'Un commerce et son équipe, ou une enseigne à plusieurs points de vente', 'Quatre demi-journées, de préférence avant l\'ouverture', 'Travail sur la caisse, le stock et les téléphones réels ; vendeurs formés par roulement'],
                ['Inter, entre commerçants', 'Association de commerçants d\'un marché, groupement de boutiques, réseau de franchisés', 'Deux journées en salle', 'Chacun apporte sa liste d\'articles et son cahier ; aucun chiffre d\'une boutique n\'est montré aux autres sans accord'],
                ['À distance', 'Vendeurs en ligne, boutiques hors de Cotonou, commerçants installés en Europe ou au Canada', 'Quatre séances de deux à trois heures', 'Partage d\'écran, exercices préparés la veille, tableaux relus entre deux séances'],
                ['Hybride', 'Boutique qui ouvre un canal de vente en ligne ou change d\'outil de caisse', 'Une journée sur place, puis séances courtes à distance', 'Liste maîtresse et caisse sur place, commandes à distance et lecture des chiffres en visioconférence'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation pour une boutique, et comment la régler ?',
            'intro'      => 'Aucun tarif n\'est publié : chaque parcours est chiffré sur devis après un premier échange gratuit. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les logiciels, abonnements et commissions de paiement restent payés par la boutique à leurs éditeurs.',
            'items'      => [
                ['offre' => 'Parcours boutique', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur vos articles et votre caisse', 'Liste maîtresse, journal, registre des achats, tableau du crédit', 'Séance de suivi à distance']],
                ['offre' => 'Parcours vendeur en ligne', 'prix' => 'Sur devis', 'inclus' => ['Commandes, paiement vérifié, livraison', 'Usage encadré de l\'IA pour les textes', 'Séances à distance possibles']],
                ['offre' => 'Session entre commerçants', 'prix' => 'Sur devis', 'inclus' => ['Deux journées pour plusieurs boutiques', 'Exercices sur les chiffres de chacun, sans partage forcé', 'Coût réparti entre les participants']],
                ['offre' => 'Module à la carte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée ciblée : caisse, crédit, IA ou vente à distance', 'Pour une boutique déjà organisée sur le reste']],
            ],
            'variations' => [
                'Le nombre de vendeurs à former et la nécessité de les faire passer par roulement.',
                'Le nombre de demi-journées retenues dans le programme type.',
                'Le lieu : la boutique, une salle louée, un marché hors de Cotonou, ou la distance.',
                'L\'état de départ : cahier seul, tableur existant, logiciel de caisse déjà installé.',
                'La préparation : liste d\'articles à reconstruire, photos à reprendre, cahier de crédit à ressaisir.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un commerçant peut-il faire financer sa formation ?',
            'paragraphes' => [
                'La réponse dépend du pays, du statut et du fonds, et elle se vérifie avant de signer. Un commerçant salarié de sa propre société, une boutique qui emploie des vendeurs déclarés et un entreprenant qui travaille seul ne relèvent pas des mêmes guichets. Le premier réflexe consiste à demander au fonds, par écrit, si la session envisagée entre dans ses règles, en joignant le programme et le devis.',
                'En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> consacrée au plan de formation, consultée le 5 octobre 2026, réserve ce plan aux entreprises à jour de leurs taxes de formation et ne règle qu\'après contrôle. Au Bénin, le FODEFCA fonctionne selon des statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> prévoit un guichet ouvert aux membres des organisations professionnelles, une piste à explorer pour une association de commerçants qui se forme en groupe.',
                'En France, un commerçant non salarié cotise en principe à l\'AGEFICE, qui finance la formation des chefs d\'entreprise du commerce, de l\'industrie et des services et de leurs conjoints collaborateurs ou associés. Ses <a href="https://communication-agefice.fr/les-criteres-de-financement-2026/">critères de financement 2026</a> exigent un organisme de formation doté d\'un numéro de déclaration d\'activité et certifié Qualiopi ; <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> pose la même condition pour les fonds des OPCO depuis le 1er janvier 2022.',
                'Richard SALANON n\'affiche ni certification Qualiopi ni agrément d\'un fonds africain. Une session qu\'il anime ne peut donc pas, en l\'état, être prise en charge par ces fonds français, et rien ne doit être promis ailleurs. Prévoyez le budget sans prise en charge ; le programme, les feuilles de présence et les résultats des exercices vous seront remis dans tous les cas.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi ne jamais mêler l\'argent de la boutique et l\'argent personnel sur le même compte mobile money ?',
            'texte' => 'Parce qu\'un seul compte pour la boutique, la famille et les dépenses du patron rend toute caisse impossible à vérifier. Le solde du soir ne dit plus ce que la boutique a gagné, un paiement de client se confond avec un transfert d\'un proche, et le livre des ressources exigé de l\'entreprenant par l\'article 31 de l\'Acte uniforme, qui distingue les espèces des autres modes de règlement, devient un exercice de reconstitution. La première décision prise pendant la formation est souvent la plus rentable : un numéro ou un compte marchand réservé à la boutique, un retrait daté quand le patron se paie, et un relevé exporté chaque semaine.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on chez les commerçants qui se digitalisent, et comment les éviter ?',
            'intro' => 'Ces erreurs ne viennent pas d\'un manque de bonne volonté, mais d\'un ordre de marche inversé. Chacune a sa parade, travaillée pendant le parcours.',
            'items' => [
                ['titre' => 'Acheter le logiciel avant d\'avoir la liste', 'texte' => 'Un logiciel de caisse installé sur des articles mal codés produit des écarts à chaque vente. On construit d\'abord la liste maîtresse dans un tableur, et l\'on choisit l\'outil quand elle tient depuis plusieurs semaines.'],
                ['titre' => 'Tout changer la même semaine', 'texte' => 'Caisse, catalogue WhatsApp, fiche Google et boutique en ligne lancés ensemble épuisent l\'équipe. Une étape par mois, dans l\'ordre : registres, puis vente à distance, puis visibilité, puis IA.'],
                ['titre' => 'Trois prix pour le même article', 'texte' => 'Le prix change au comptoir mais pas dans le catalogue ni sur la boutique en ligne, et le client choisit le plus bas. Un seul responsable des prix, une seule liste, et une vérification des canaux à chaque changement.'],
                ['titre' => 'Des comptes au nom d\'un employé', 'texte' => 'La fiche Google, la boutique en ligne ou la passerelle de paiement ont été ouvertes avec l\'adresse d\'un vendeur qui part. Chaque compte de la boutique appartient au commerçant, avec un second administrateur de confiance.'],
                ['titre' => 'Le crédit qui ne se relance pas', 'texte' => 'Le tableau du crédit est rempli, mais personne ne relance aux dates promises. Une relance par semaine, à jour fixe, et un plafond par client que seul le patron peut lever.'],
                ['titre' => 'L\'IA publiée sans relecture', 'texte' => 'Une description inventée ou une remise mal calculée finit sur le catalogue. Rien de ce qu\'écrit un assistant ne sort de la boutique sans avoir été lu par la personne qui en répond.'],
                ['titre' => 'Juger à l\'impression plutôt qu\'aux chiffres', 'texte' => 'On a « l\'impression » que les ventes en ligne marchent, ou ne marchent pas. Deux ou trois chiffres lus chaque lundi, toujours les mêmes, remplacent les impressions.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés un commerçant doit-il connaître avant de se lancer ?',
            'items' => [
                ['valeur' => '60 millions de FCFA', 'libelle' => 'Chiffre d\'affaires annuel hors taxes sous lequel une activité de négoce relève du système minimal de trésorerie, seuil qui conditionne aussi le statut d\'entreprenant', 'source' => 'Acte uniforme OHADA relatif au droit comptable, article 13 ; Acte uniforme portant sur le droit commercial général, article 30', 'url' => 'https://biblio.ohada.org/doc_num.php?explnum_id=2061'],
                ['valeur' => '5 ans', 'libelle' => 'Durée minimale de conservation du livre des ressources et des emplois de l\'entreprenant', 'source' => 'Acte uniforme portant sur le droit commercial général, article 31', 'url' => 'https://jurisprudence-ohada.com/wp-content/uploads/2024/08/AUDCG-2010_fr.pdf'],
                ['valeur' => '1 million de FCFA', 'libelle' => 'Amende minimale par opération pour une facture non normalisée au Bénin, égale à dix fois le montant de la facture ; vingt fois et fermeture de trois mois en cas de récidive', 'source' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin'],
                ['valeur' => '2 000 milliards de dollars', 'libelle' => 'Valeur des transactions passées par le mobile money dans le monde en 2025 ; la plupart des nouveaux comptes enregistrés et actifs viennent d\'Afrique subsaharienne', 'source' => 'GSMA, communiqué du 24 mars 2026', 'url' => 'https://www.gsma.com/newsroom/press-release/mobile-money-accounted-for-2-trillion-in-transactions-in-2025-doubling-since-2021-as-active-accounts-continue-to-grow/'],
                ['valeur' => '34 %', 'libelle' => 'Part des TPE et PME françaises qui proposent la vente ou le paiement en ligne en 2026 (33 % des TPE) ; 17 % réalisent plus de la moitié de leur chiffre d\'affaires en ligne', 'source' => 'Baromètre France Num 2026, publié le 17 septembre 2026', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
                ['valeur' => '40 %', 'libelle' => 'Part des TPE et PME françaises qui utilisent au moins une solution d\'IA en 2026, contre 13 % en 2024 ; seules 5 % déclarent une dépense de formation liée à l\'IA', 'source' => 'Baromètre France Num 2026, DGE', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Facture normalisée, facturation électronique, connexion : que change le pays où l\'on vend ?',
            'paragraphes' => [
                'Au Bénin, la <a href="https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin">page du gouvernement sur les factures normalisées</a> rappelle que la loi de finances 2020 prévoit ce dispositif pour toutes les entreprises, tout en précisant que l\'obligation vise, à ce stade, les assujettis à la TVA. La facture sort d\'une machine électronique certifiée ou d\'un logiciel validé par la DGI, et porte le numéro d\'identification de la machine, une signature et un code électronique. Un commerçant qui passe au logiciel de caisse doit donc vérifier ce raccordement avant d\'acheter, pas après le premier contrôle.',
                'En Côte d\'Ivoire, le <a href="https://www.fne.dgi.gouv.ci/uploads/communiques/COMMUNIQUE%20MISE%20EN%20OEUVRE%20DE%20LA%20FNE.pdf">communiqué de la DGI du 5 septembre 2025</a> a prolongé une dernière fois l\'usage de la facture normalisée papier, à la demande notamment des organisations de commerçants : jusqu\'au 1er décembre 2025 pour le réel, au 11 décembre pour les microentreprises et au 22 décembre pour l\'entreprenant. Les magasins à rayons multiples du réel en étaient exclus, car tenus de délivrer un reçu normalisé électronique. Le même texte invite tous les contribuables à s\'inscrire sur la plateforme de la FNE.',
                'En France, la <a href="https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation">page d\'impots.gouv.fr sur la réforme</a>, modifiée le 16 janvier 2026, prévoit que toutes les entreprises reçoivent leurs factures sous forme électronique depuis le 1er septembre 2026, et que les PME et microentreprises les émettront ainsi à partir du 1er septembre 2027. Une boutique française reçoit donc déjà les factures de ses fournisseurs par ce canal, et doit préparer l\'émission.',
                'La connexion et l\'électricité pèsent aussi sur le choix des outils. Une caisse qui ne fonctionne qu\'en ligne bloque la vente pendant une coupure ; un tableur hors connexion, une application qui synchronise plus tard ou un cahier de secours daté évitent de refuser un client. La formation prévoit toujours la procédure du jour sans réseau, et la façon de ressaisir ensuite les ventes sans doublon.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles formations du catalogue prolongent ce parcours pour un commerce ?',
            'legende' => 'Chaque formation a sa propre fiche, avec son programme détaillé. Le parcours de cette page en reprend les premiers gestes ; la fiche va plus loin.',
            'entetes' => ['Formation', 'Le besoin de la boutique', 'Qui l\'envoyer suivre', 'Durée indiquée sur la fiche'],
            'lignes'  => [
                ['<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>', 'Catalogue, réponses rapides, étiquettes et suivi des commandes par message', 'Vendeurs qui tiennent le téléphone de la boutique', 'Une demi-journée ou une journée, puis un suivi'],
                ['<a href="/formations/e-commerce">Vendre en ligne : e-commerce</a>', 'Faire tourner une boutique en ligne : fiches, encaissement, livraison, retours', 'Gérant et équipe de la boutique en ligne', 'Deux jours, puis un suivi à distance'],
                ['<a href="/formations/visibilite-google">Visibilité Google</a>', 'Fiche d\'établissement, avis conformes, recherche locale', 'La personne qui tiendra la fiche, et le gérant', 'Un jour, ou une demi-journée resserrée'],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', 'Des tableaux de stock, de caisse et de crédit fiables', 'Gérant et personne chargée des chiffres', 'Deux jours en quatre demi-journées'],
                ['<a href="/formations/digitaliser-son-entreprise">Digitaliser son entreprise pas à pas</a>', 'Choisir les outils et l\'ordre des étapes pour une petite structure', 'Le patron', 'Deux jours, puis un point d\'étape'],
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', 'Ventes, stock, achats et point de vente dans un même logiciel', 'Équipes d\'une boutique qui passe à Odoo', 'Deux à trois jours en demi-journées'],
                ['<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>', 'Du devis au règlement dans un logiciel libre, caisse comprise', 'Équipes d\'une boutique qui passe à Dolibarr', 'Deux jours'],
                ['<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>', 'Que les commandes reçues par message rejoignent le logiciel de gestion', 'Boutiques qui reçoivent beaucoup de commandes à distance', 'Deux jours, ou une journée et demie'],
                ['<a href="/formations/contenu-avec-ia">Créer du contenu avec l\'IA</a>', 'Textes, visuels et vidéos courtes pour les réseaux, avec relecture', 'La personne qui publie pour la boutique', 'Deux jours, ou un jour resserré'],
                ['<a href="/formations/publicite-meta-google-ads">Publicité Meta Ads et Google Ads</a>', 'Campagnes payantes et suivi de ce qu\'elles rapportent', 'Le gérant qui veut payer pour être vu', 'Deux jours, puis un bilan'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Arnaques, mots de passe, téléphones perdus, comptes piratés', 'Tous ceux qui touchent un compte de la boutique', 'Une journée, puis un suivi'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos vendeurs et vous-même avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard a déjà formé des commerçants et des e-commerçants, sur leurs propres outils : le cahier, le tableur, le téléphone de la boutique, le compte de paiement, la fiche Google. Il ne vend ni marchandises ni logiciel de caisse, et n\'a aucun intérêt à vous orienter vers un outil plutôt qu\'un autre. Il ne dit pas non plus comment acheter ou vendre : ce savoir-là est le vôtre, et la formation le respecte.',
                'Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Fort de ' . $ans . ' ans d\'expérience dans le numérique, passé par ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées au numérique, à l\'IA, à l\'automatisation et aux ERP, et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page <a href="/zones/">zones d\'intervention</a>.',
                'Ce que vous pouvez vérifier : une réponse sous 24 heures, un programme écrit avant la session, des exercices sur vos articles et vos ventes, des supports modifiables laissés à la boutique, et un avis franc quand la formation n\'est pas la bonne réponse. Si le besoin est de construire une boutique en ligne ou de relier WhatsApp à vos logiciels, les services <a href="/services/site-e-commerce">site e-commerce</a> et <a href="/services/integration-whatsapp">intégration WhatsApp</a> prennent le relais. Le catalogue complet se trouve sur la page des <a href="/formations/">formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre boutique ?',
            'texte' => 'Commencez par les registres, pas par le logiciel : une liste unique des articles et des prix, une caisse comptée chaque soir, un registre des achats, un tableau du crédit et un compte de paiement réservé à la boutique. Ouvrez ensuite la vente à distance, puis la visibilité, et confiez à l\'IA l\'écriture et l\'analyse, jamais la décision ni la signature.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre équipe de vente au numérique et à l\'IA ?',
            'texte'  => 'Indiquez ce que vous vendez, le nombre de vendeurs, la ville, vos canaux de vente et le format souhaité : vous recevez une réponse sous 24 heures, puis un programme ajusté à votre commerce et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour ma boutique'],
        ],
    ],

    'faq' => [
        ['q' => 'Je tiens une petite boutique sans ordinateur : la formation est-elle pour moi ?', 'r' => 'Oui. La liste des articles, le journal de caisse et le tableau du crédit se tiennent sur un téléphone, avec un tableur gratuit ou une application simple. L\'ordinateur devient utile plus tard, quand le nombre d\'articles ou de commandes grandit. La formation part de votre matériel actuel.'],
        ['q' => 'Par quoi commencer : WhatsApp, Google, boutique en ligne ou caisse ?', 'r' => 'Par les registres : liste des articles et des prix, caisse du soir, achats et crédit. Sans eux, chaque canal de vente ajoute du désordre. Viennent ensuite la vente par message, la fiche Google, puis la boutique en ligne si les ventes à distance le justifient. Le premier échange sert à fixer cet ordre pour votre commerce.'],
        ['q' => 'Faut-il fermer la boutique pendant la formation ?', 'r' => 'Non. Les séances se placent avant l\'ouverture, le jour de fermeture ou aux heures creuses, et les vendeurs passent par roulement. À distance, les séances de deux à trois heures se calent sur vos horaires.'],
        ['q' => 'Mes vendeurs peuvent-ils être formés sans moi ?', 'r' => 'Pour les gestes, oui. Pour les décisions, non : qui change les prix, quel plafond de crédit, quelle remise maximale, quel compte de paiement. Le patron assiste au moins à la première demi-journée et à la séance de suivi, sinon les règles décidées en formation ne tiennent pas.'],
        ['q' => 'L\'IA peut-elle écrire mes descriptions d\'articles et répondre à mes clients ?', 'r' => 'Elle peut proposer des textes à partir des caractéristiques réelles de vos articles et de vos règles écrites. Chaque texte est relu avant publication, et aucune réponse automatique ne promet un prix, un délai ou un remboursement que vous n\'avez pas validé. Les avis de clients ne s\'inventent jamais.'],
        ['q' => 'Quel logiciel de caisse ou de gestion de stock choisir ?', 'r' => 'La formation ne vend aucun logiciel. Elle vous apprend à tenir une liste propre d\'abord, puis à juger un outil sur des critères concrets : facture normalisée de votre pays, fonctionnement sans connexion, coût par utilisateur, export des données. Le comparatif Odoo et Dolibarr du site aide à départager les deux principaux logiciels libres de gestion.'],
        ['q' => 'Je suis entreprenant : quelles obligations le numérique m\'aide-t-il à tenir ?', 'r' => 'L\'Acte uniforme OHADA vous demande un livre quotidien de vos ressources et de vos emplois, conservé cinq ans, et, si vous vendez des marchandises, un registre annuel de vos achats avec leurs pièces. La formation les installe sous forme numérique, avec une saisie de quelques minutes par jour et une sauvegarde hors du téléphone.'],
        ['q' => 'Faut-il une facture normalisée pour vendre en ligne au Bénin ou en Côte d\'Ivoire ?', 'r' => 'Au Bénin, les entreprises assujetties à la TVA délivrent des factures normalisées par une machine certifiée ou un logiciel validé par la DGI. En Côte d\'Ivoire, la facture normalisée électronique a remplacé le papier fin 2025, y compris pour l\'entreprenant. Votre régime fiscal se confirme auprès de l\'administration ou de votre comptable.'],
        ['q' => 'Je vends depuis la France : que change la facturation électronique ?', 'r' => 'Depuis le 1er septembre 2026, toutes les entreprises reçoivent leurs factures sous forme électronique ; les PME et microentreprises les émettront ainsi à partir du 1er septembre 2027. La formation fait le point sur ce que cela change pour vos achats et vos ventes, puis renvoie vers votre comptable et votre plateforme pour le paramétrage.'],
        ['q' => 'La formation se fait-elle dans une langue locale ?', 'r' => 'Les séances et les supports sont en français, ou en anglais sur demande. Les messages de vos clients, souvent écrits dans un mélange de français et de langues locales, servent d\'exemples tels qu\'ils arrivent, et les réponses types se rédigent dans la langue que vos clients comprennent.'],
        ['q' => 'Que reste-t-il à la boutique après la formation ?', 'r' => 'La liste maîtresse des articles, le modèle de journal de caisse, le registre des achats, le tableau du crédit, la procédure du jour sans réseau, les règles d\'usage de l\'IA écrites pour l\'équipe et une fiche par geste appris. Tout est remis dans un format modifiable, pour former un nouveau vendeur sans refaire la session.'],
        ['q' => 'La formation peut-elle être financée ?', 'r' => 'Cela dépend du pays et du fonds : FDFP en Côte d\'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal. En France, l\'AGEFICE et les OPCO exigent un organisme certifié Qualiopi, ce que Richard SALANON n\'affiche pas. Interrogez le fonds par écrit avant de signer et prévoyez le budget sans prise en charge.'],
    ],

    'sources' => [
        ['titre' => 'OHADA, Acte uniforme portant sur le droit commercial général (adopté le 15 décembre 2010 à Lomé), présentation et plan', 'url' => 'https://www.ohada.org/droit-commercial-general/', 'date' => '2026-10-05'],
        ['titre' => 'Texte de l\'Acte uniforme révisé portant sur le droit commercial général (articles 2, 3, 13, 14, 16 et 30 à 32)', 'url' => 'https://jurisprudence-ohada.com/wp-content/uploads/2024/08/AUDCG-2010_fr.pdf', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, bibliothèque numérique : Acte uniforme relatif au droit comptable et à l\'information financière (article 13, système minimal de trésorerie)', 'url' => 'https://biblio.ohada.org/doc_num.php?explnum_id=2061', 'date' => '2026-10-05'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-05'],
        ['titre' => 'Direction générale des impôts de Côte d\'Ivoire, communiqué du 5 septembre 2025 sur la facture normalisée électronique', 'url' => 'https://www.fne.dgi.gouv.ci/uploads/communiques/COMMUNIQUE%20MISE%20EN%20OEUVRE%20DE%20LA%20FNE.pdf', 'date' => '2026-10-05'],
        ['titre' => 'impots.gouv.fr, à partir de quand suis-je concerné par la réforme de la facturation électronique ?', 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-05'],
        ['titre' => 'France Num (DGE), Baromètre France Num 2026 : le numérique et l\'intelligence artificielle dans les TPE et PME', 'url' => 'https://www.francenum.gouv.fr/guides-et-conseils/strategie-numerique/comprendre-le-numerique/barometre-france-num-2026-le', 'date' => '2026-10-05'],
        ['titre' => 'GSMA, communiqué du 24 mars 2026 sur le rapport State of the Industry on Mobile Money', 'url' => 'https://www.gsma.com/newsroom/press-release/mobile-money-accounted-for-2-trillion-in-transactions-in-2025-doubling-since-2021-as-active-accounts-continue-to-grow/', 'date' => '2026-10-05'],
        ['titre' => 'DGCCRF, avis en ligne : attention aux faux commentaires', 'url' => 'https://www.economie.gouv.fr/dgccrf/les-fiches-pratiques/avis-en-ligne-attention-aux-faux-commentaires', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (version française lue dans un navigateur)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, page des tarifs (version française, lue dans un navigateur)', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, RGPD, chapitre 2 : principes (article 5)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-05'],
        ['titre' => 'AGEFICE, critères de financement 2026', 'url' => 'https://communication-agefice.fr/les-criteres-de-financement-2026/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['whatsapp-business', 'e-commerce', 'visibilite-google', 'excel-google-sheets', 'digitaliser-son-entreprise', 'whatsapp-odoo-dolibarr-crm'],
        'services'    => ['site-e-commerce', 'integration-whatsapp', 'digitalisation-d-entreprise'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
    ],
];
