<?php
// ============================================================
// data/formations/e-commerce.php · Fiche formation « Vendre en ligne :
// e-commerce » (vague 1B, lot A, domaine marketing-visibilite).
// Angle propre : faire TOURNER une boutique en ligne au quotidien (catalogue,
// fiches produits, encaissement, mobile money, livraison, service client,
// retours, indicateurs), quelle que soit la plateforme. La création de la
// boutique relève du pilier site-e-commerce ; l'administration de WordPress,
// de wordpress-woocommerce ; l'application WhatsApp, de whatsapp-business.
// Faits relevés le 05/10/2026 : tarifs FedaPay, KkiaPay et Shopify, fiche
// WooCommerce sur wordpress.org, documentation FedaPay (comptes, remboursements),
// loi n° 2017-20 (art. 338 à 356 et 415), directive (UE) 2023/2673 lue dans un
// navigateur, justice.fr, Baymard, Fevad, GSMA, observatoire ARCEP Bénin T1 2026.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation e-commerce : faire tourner une boutique en ligne, du catalogue à l\'encaissement, de la livraison au service client',
    'title'   => 'Formation e-commerce : gérer sa boutique | Richard SALANON',
    'meta'    => 'Formation e-commerce pour commerçants et équipes : catalogue, fiches produits, mobile money, livraison, retours, service client et indicateurs, sur devis.',
    'en_bref' => 'Cette formation apprend au commerçant et à son équipe à faire tourner une boutique en ligne au quotidien : catalogue et fiches produits, encaissement par mobile money et par carte, préparation et livraison, service client, retours et remboursements, indicateurs de la semaine. Elle dure deux jours, suivis d\'une séance de suivi à distance, et se déroule sur votre propre boutique, qu\'elle tourne sous WooCommerce, Shopify, Odoo ou une plateforme sur mesure. Elle s\'organise en intra, en inter, à distance ou en hybride, et son prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'marketing-visibilite',
    'forte'   => true,
    'duree'   => 'Deux jours, puis une séance de suivi à distance',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : un catalogue tenu à jour et des fiches qui répondent aux questions',
            'duree'  => '3 h 30',
            'points' => [
                'Faire l\'inventaire de ce que la boutique vend vraiment : familles, références actives, articles saisonniers, articles à retirer.',
                'Construire le prix de vente en ligne à partir du coût d\'achat, de la commission de la passerelle, de l\'emballage et de la part de livraison prise en charge.',
                'Organiser les catégories et les variantes (taille, couleur, contenance, pointure) pour que le client trouve en trois gestes.',
                'Rédiger une fiche produit à partir des questions réelles des clients : dimensions, matière, usage, entretien, compatibilité, délai dans sa ville.',
                'Photographier et alléger les images pour un téléphone et un forfait de données modestes.',
                'Tenir le stock : saisie des entrées, seuil d\'alerte, article épuisé masqué ou signalé, inventaire tournant.',
                'Exercice de contrôle : dix fiches reprises sur la boutique réelle, vérifiées sur un téléphone par un autre participant.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : encaisser, vérifier, rapprocher et rembourser',
            'duree'  => '3 h 30',
            'points' => [
                'Lire le tableau de bord de la passerelle : statuts d\'une transaction, montant net, commission, identifiant à reporter sur la commande.',
                'Connaître les limites de son compte marchand : type de compte, plafonds, moyens de paiement ouverts, délais et frais de retrait.',
                'Accompagner un client dont le paiement mobile money reste en attente, échoue ou part deux fois.',
                'Fixer les règles du paiement à la livraison : confirmation préalable, plafond, acompte, remise de l\'argent par le livreur.',
                'Rapprocher chaque soir les paiements reçus et les commandes payées, puis chaque semaine les retraits et le relevé bancaire.',
                'Rembourser selon le moyen utilisé et documenter l\'accord du client quand un autre moyen s\'impose.',
                'Exercice de contrôle : une journée de transactions fictives à rapprocher, avec deux anomalies cachées à retrouver.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : préparer, livrer, traiter les retours et les rétractations',
            'duree'  => '3 h 30',
            'points' => [
                'Dessiner le circuit d\'une commande dans votre boutique : statuts, responsable de chaque étape, délai cible.',
                'Préparer et emballer : bon de préparation, contrôle avant fermeture du colis, photo de l\'emballage pour les envois fragiles.',
                'Organiser la livraison locale : zones et tarifs, appel avant passage, preuve de remise, retour de l\'argent du paiement à la livraison.',
                'Prévenir un client quand un article manque, dans le délai fixé par la loi, et lui proposer un choix clair.',
                'Appliquer le droit de rétractation selon le pays du client, et reconnaître les biens qui en sont exclus.',
                'Rédiger la procédure de retour de la boutique : demande, renvoi, contrôle de l\'article, remboursement, remise en stock.',
                'Exercice de contrôle : cinq demandes de retour réelles ou réalistes, tranchées et justifiées par écrit.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : service client, données des clients et indicateurs de la semaine',
            'duree'  => '3 h 30',
            'points' => [
                'Choisir les canaux de contact qui seront tenus, avec un délai de réponse annoncé et respecté.',
                'Écrire les modèles de réponse aux questions qui reviennent : suivi de colis, retard, paiement débité sans commande, article abîmé.',
                'Traiter une réclamation jusqu\'à sa clôture et garder la trace de la décision.',
                'Protéger les données des clients : ce que voit le livreur, ce que l\'on garde, combien de temps, qui y a accès.',
                'Suivre les indicateurs utiles : commandes, chiffre encaissé, panier moyen, taux de conversion, délai d\'expédition, taux de retour, paniers abandonnés.',
                'Monter le tableau de bord hebdomadaire et fixer les routines du jour, de la semaine et du mois.',
                'Exercice de contrôle : la revue de la semaine présentée par un participant, chiffres et décisions compris.',
            ],
        ],
        [
            'titre'  => 'Séance de suivi, trois à quatre semaines plus tard : les chiffres de vos premières semaines',
            'duree'  => '2 h, à distance',
            'points' => [
                'Lecture des tableaux de bord remplis depuis la session et des écarts de rapprochement constatés.',
                'Revue des réclamations et des retours traités : ce qui a été bien tranché, ce qui doit changer dans la procédure.',
                'Correction des fiches produits qui génèrent le plus de questions ou de retours.',
                'Liste écrite des décisions à prendre : moyen de paiement à ajouter, zone de livraison à ouvrir, tâche à automatiser.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => 'Deux jours, puis une séance de suivi de deux heures à distance'],
        ['l' => 'Public', 'v' => 'Commerçants, gérants de boutique en ligne, équipes de préparation et de service client'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saura faire votre équipe après ces deux jours, et que laisse de côté la formation ?',
            'paragraphes' => [
                'Une boutique en ligne qui vient d\'ouvrir ressemble à un magasin dont on aurait reçu les clés sans le mode d\'emploi. Les premières commandes arrivent, puis les questions : ce paiement est-il vraiment passé, qui appelle le livreur, que répondre à la cliente qui veut rendre une paire de chaussures, pourquoi la boutique a-t-elle encaissé un article qui n\'est plus en rayon ? Cette formation répond à ces questions sur votre propre boutique, avec vos produits, vos commandes et votre compte de paiement, pour que la vente en ligne devienne un travail organisé plutôt qu\'une suite d\'urgences.',
                'À la fin des deux jours, chaque participant sait faire seul huit choses, vérifiées par un exercice : créer ou corriger une fiche produit complète ; mettre à jour un prix et un stock sans erreur ; lire une transaction dans le tableau de bord de la passerelle ; rapprocher les paiements d\'une journée et les commandes payées ; faire avancer une commande jusqu\'à la livraison avec la bonne preuve ; trancher une demande de retour selon le pays du client ; répondre à une réclamation avec un modèle adapté ; remplir et commenter le tableau des indicateurs de la semaine.',
                'La formation ne crée pas la boutique et ne la paramètre pas techniquement : le choix de la plateforme, l\'intégration de la passerelle, les pages légales et le développement relèvent du service de <a href="/services/site-e-commerce">création de site e-commerce</a>. Elle n\'enseigne pas non plus l\'administration de WordPress ni la gestion de ses extensions, objet de la formation WordPress et WooCommerce. La vente par l\'application WhatsApp Business a sa propre formation, <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>, et la visibilité sur Google la sienne, <a href="/formations/visibilite-google">visibilité Google</a>.',
                'Le référencement des fiches, la publicité payante, la mesure fine avec Google Analytics 4 et l\'emailing sont seulement situés dans le travail de la boutique, pour que l\'équipe sache quand y recourir. Chacun de ces sujets fait l\'objet d\'une formation distincte du catalogue, présentée sur la page des <a href="/formations/domaine/marketing-visibilite">formations marketing et visibilité</a>. Ce qui reste au centre, ce sont les gestes qui décident si un client commande une deuxième fois : la fiche juste, l\'encaissement vérifié, le colis remis à l\'heure, la réponse rapide et le retour traité sans dispute.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui devrait suivre cette formation, avec quel niveau, et que faut-il préparer ?',
            'intro' => 'La formation s\'adresse aux personnes qui vendent déjà en ligne ou qui ouvrent une boutique dans les semaines qui viennent. Aucune compétence technique n\'est demandée, mais un accès réel à la boutique est indispensable.',
            'items' => [
                ['titre' => 'Le commerçant ou le gérant', 'texte' => 'Il fixe les prix, décide des moyens de paiement et des zones de livraison, et doit savoir lire chaque semaine si la boutique gagne de l\'argent. Les décisions de la formation lui reviennent ; sa présence au moins le premier matin et le dernier après-midi change beaucoup le résultat.'],
                ['titre' => 'La personne qui tient le catalogue', 'texte' => 'Elle crée les fiches, change les prix, reçoit le stock et retire les articles épuisés. C\'est souvent un vendeur du magasin à qui l\'on confie la boutique sans lui en expliquer la logique.'],
                ['titre' => 'L\'équipe de préparation et de livraison', 'texte' => 'Magasinier, préparateur, coursier ou responsable des expéditions : ceux qui transforment une commande payée en colis remis, et qui vivent les adresses imprécises et les clients absents.'],
                ['titre' => 'Le service client', 'texte' => 'La personne qui répond au téléphone, sur WhatsApp, par courriel ou sur les réseaux sociaux, et qui reçoit les réclamations, les demandes de retour et les questions de paiement.'],
                ['titre' => 'Le niveau attendu', 'texte' => 'Savoir se servir d\'un téléphone et d\'un navigateur, ouvrir un tableur, envoyer une photo. Un court questionnaire préalable permet de séparer ceux qui découvrent l\'espace d\'administration de ceux qui le pratiquent déjà.'],
                ['titre' => 'Ce qu\'il faut préparer', 'texte' => 'Un accès administrateur ou gestionnaire à la boutique, ou à sa copie de test si elle n\'est pas encore ouverte ; un accès en lecture au tableau de bord de la passerelle ; la liste des prix à jour ; une vingtaine de commandes récentes ; les réclamations du dernier mois ; un ordinateur portable par binôme et le téléphone de travail.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur leur propre boutique ?',
            'items' => [
                ['titre' => 'Le client mystère', 'duree' => '30 minutes', 'texte' => 'Chaque participant commande un article de la boutique sur le téléphone d\'un autre, jusqu\'à l\'écran de paiement. Il note tout ce qui l\'a fait hésiter : prix de livraison introuvable, photo floue, taille absente, champ d\'adresse inadapté. Cette liste sert de fil rouge aux deux journées.'],
                ['titre' => 'Le calcul de la marge par article', 'duree' => '45 minutes', 'texte' => 'Sur cinq produits phares, le groupe reconstitue ce qui reste après la commission de la passerelle, l\'emballage, la part de livraison offerte et les retours probables. Plusieurs boutiques découvrent à cette étape un article vendu à perte depuis des mois.'],
                ['titre' => 'Dix fiches reprises', 'duree' => '1 heure', 'texte' => 'À partir des questions réellement posées par les clients, chacun réécrit dix fiches : titre clair, description utile, variantes complètes, photos allégées, stock juste. Un autre participant les relit sur son téléphone.'],
                ['titre' => 'Le rapprochement de la journée', 'duree' => '45 minutes', 'texte' => 'Un export des transactions de la passerelle et la liste des commandes payées sont comparés ligne à ligne. Les écarts sont classés : paiement sans commande, commande payée sans transaction, doublon, montant différent. Chaque écart reçoit une action et un responsable.'],
                ['titre' => 'Le circuit de commande affiché', 'duree' => '40 minutes', 'texte' => 'Le groupe dessine le parcours d\'une commande de la boutique, statut par statut, avec la personne qui agit et le délai visé. Le schéma est imprimé et affiché au poste de préparation.'],
                ['titre' => 'Cinq retours à trancher', 'duree' => '45 minutes', 'texte' => 'Article personnalisé, denrée entamée, colis arrivé en retard, client qui change d\'avis, article abîmé : chaque cas est tranché par écrit, avec la règle appliquée et le message envoyé au client.'],
                ['titre' => 'La revue du lundi', 'duree' => '40 minutes', 'texte' => 'Le tableau de bord hebdomadaire est rempli avec les chiffres réels de la boutique, puis un participant le présente au groupe comme il le ferait devant le gérant : ce qui a bougé, pourquoi, et les trois décisions de la semaine.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que se passe-t-il entre le clic sur « payer » et le colis remis, et qui s\'en occupe ?',
            'legende' => 'Circuit type d\'une commande, tel qu\'il est construit pendant la formation. Les noms des statuts varient selon la plateforme ; les délais cibles sont fixés par chaque boutique, puis annoncés au client.',
            'entetes' => ['Étape', 'Ce qui la déclenche', 'Qui agit', 'Ce que l\'on vérifie', 'Ce que reçoit le client'],
            'lignes'  => [
                ['Commande en attente de paiement', 'Le client a validé son panier', 'Personne, sauf relance', 'Le paiement mobile money peut prendre une à deux minutes : on n\'annule pas trop tôt', 'Le récapitulatif de sa commande'],
                ['Commande payée', 'La passerelle confirme la transaction', 'La personne chargée des commandes', 'Montant et identifiant de transaction présents dans le tableau de bord de la passerelle', 'L\'accusé de réception avec facture ou justificatif'],
                ['En préparation', 'Prise en charge le jour même ou le lendemain', 'Préparateur ou magasinier', 'Article, taille et couleur conformes, état contrôlé avant fermeture du colis', 'Un message si un article manque, avec un choix clair'],
                ['Remise au livreur', 'Le colis quitte la boutique', 'Responsable des expéditions', 'Nom du livreur ou numéro de suivi, montant à encaisser si paiement à la livraison', 'Le délai de passage et le contact du livreur'],
                ['Livrée', 'Le client a reçu le colis', 'Livreur, puis service client', 'Preuve de remise : signature, photo ou code ; argent du paiement à la livraison rendu le jour même', 'Une confirmation et le rappel de la procédure de retour'],
                ['Retour demandé', 'Le client exerce son droit ou signale un défaut', 'Service client', 'Date de la demande, état de l\'article, règle applicable selon son pays', 'Les instructions de renvoi et le délai de remboursement'],
                ['Remboursée ou clôturée', 'Article reçu et contrôlé, ou réclamation résolue', 'Gérant ou personne habilitée', 'Moyen de remboursement, accord écrit du client si un autre moyen est utilisé, remise en stock', 'La preuve du remboursement'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi le prix en ligne ne peut-il pas être celui du magasin ?',
            'paragraphes' => [
                'Une vente en ligne coûte des frais que la caisse du magasin ne connaît pas. Au Bénin, la page tarifs de <a href="https://www.fedapay.com/pricing">FedaPay</a>, consultée le 5 octobre 2026, indique une commission de 1,80 % sur les paiements MTN, Moov et Celtiis, de 3,60 % sur les cartes Visa et Mastercard, et de 4,00 % sur BMO et Coris Money ; le retrait vers un compte bancaire coûte 3 500 XOF, celui vers le mobile money 0 XOF, hors frais entre réseaux. Sur un article de 15 000 FCFA, la commission représente 270 FCFA en mobile money et 540 FCFA par carte.',
                'Chez <a href="https://kkiapay.me/tarifs/">KkiaPay</a>, la même date, le partage est différent selon l\'offre : dans l\'offre Intégration, facturée 9 900 FCFA HT par mois, c\'est le client qui supporte la commission de 1,5 % sur le mobile money, et 2,1 % ou 3 % sur la carte selon qu\'elle est émise dans l\'UEMOA ou ailleurs. Dans l\'offre TPE, à 4 900 FCFA HT par mois, le marchand paie 1 % sur le mobile money. Pendant la formation, on ne choisit pas la passerelle à la place du gérant ; on lui apprend à lire ce qu\'il paie déjà.',
                'À ces commissions s\'ajoutent l\'emballage, la part de la livraison que la boutique prend en charge, les colis refusés à la porte et les retours. L\'exercice de marge consiste à poser ces lignes pour chaque produit phare, puis à décider : relever le prix en ligne, fixer un montant minimal de commande, faire payer la livraison, ou retirer l\'article de la boutique. Le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a> aide le gérant qui envisage de changer de passerelle.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle menée, et que reste-t-il à l\'équipe ensuite ?',
            'intro' => 'Le principe est simple : rien n\'est montré sur une boutique de démonstration quand la vôtre existe. Chaque notion est appliquée dans l\'heure sur vos produits, vos commandes et vos transactions.',
            'items' => [
                ['titre' => 'Des groupes de petite taille', 'texte' => 'Le formateur doit voir chaque écran, surtout au moment du rapprochement et des remboursements. Les groupes sont constitués d\'après le questionnaire préalable et le poste occupé, pour que le préparateur ne passe pas l\'après-midi sur des réglages qui ne le concernent pas.'],
                ['titre' => 'Votre boutique, ou sa copie de test', 'texte' => 'Les fiches sont corrigées sur la boutique réelle ; les manipulations risquées, comme un remboursement ou un changement de statut en série, se font d\'abord sur la copie de test ou sur des commandes fictives créées pour l\'occasion.'],
                ['titre' => 'Des droits d\'accès réfléchis', 'texte' => 'Chacun travaille avec son propre compte et le rôle qui correspond à son poste. C\'est l\'occasion de supprimer les mots de passe partagés et les comptes d\'anciens employés encore actifs.'],
                ['titre' => 'Des données clients protégées', 'texte' => 'Les commandes réelles servent d\'exemples, mais les noms, numéros et adresses projetés au groupe sont masqués. Aucun fichier de clients ne quitte les postes de l\'entreprise.'],
                ['titre' => 'Des supports qui servent le lundi suivant', 'texte' => 'Le circuit de commande affiché, la procédure de retour écrite, la feuille de rapprochement quotidien, les modèles de réponses et le tableau de bord hebdomadaire. Ils sont remis dans un format modifiable, pour former un nouvel employé sans refaire la session.'],
                ['titre' => 'Une évaluation sur une tâche réelle', 'texte' => 'Chaque demi-journée se termine par un exercice fait seul et corrigé : dix fiches, une journée rapprochée, cinq retours tranchés, une revue de semaine. Le questionnaire de satisfaction existe aussi, mais il ne mesure pas ce que l\'équipe sait faire.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Un canal direct pour les questions pendant les semaines qui suivent, puis la séance de suivi à distance, qui part des tableaux de bord réellement remplis.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Sur quelles plateformes et quels outils la formation s\'appuie-t-elle, et à quel coût chez l\'éditeur ?',
            'legende' => 'Versions et prix relevés le 5 octobre 2026 sur les pages officielles citées dans les sources. Les prix des éditeurs changent souvent et ne sont jamais compris dans le devis de la formation.',
            'entetes' => ['Outil', 'Version ou offre', 'Prix publié par l\'éditeur', 'Ce que l\'équipe y apprend'],
            'lignes'  => [
                ['WooCommerce', 'Version 11.1.2, fiche mise à jour le 22 septembre 2026, WordPress 7.0 au minimum, plus de 7 millions d\'installations actives', 'Extension gratuite ; hébergement et extensions payantes à part', 'Commandes, statuts, stock, remboursements, fiches et variantes, du point de vue du gestionnaire'],
                ['Shopify', 'Plans Basic, Grow et Advanced', 'Basic à 27 € par mois en annuel, 36 € en mensuel ; 2 % de frais sur le plan Basic avec une passerelle tierce ; 3 jours d\'essai puis 1 € par mois pendant 3 mois', 'Les mêmes gestes dans l\'interface Shopify, pour les boutiques tournées vers l\'Europe'],
                ['Odoo eCommerce', 'Odoo 20.0, dernière version publiée en septembre 2026', 'Standard à 19,90 € par utilisateur et par mois en annuel pendant 12 mois, puis 24,90 €', 'Commandes en ligne reliées au stock et à la facturation de l\'entreprise'],
                ['Tableau de bord FedaPay', 'Comptes Travailleur indépendant, Business, Marketplace', '1,80 % par paiement MTN, Moov ou Celtiis au Bénin, 3,60 % par carte ; aucun abonnement mentionné', 'Lecture des transactions, export, remboursement, retraits'],
                ['Tableau de bord KkiaPay', 'Offres TPE, App Mobile, Intégration, Push Up', 'Intégration : 9 900 FCFA HT par mois, 1,5 % à la charge du client sur le mobile money', 'Lecture des transactions et rapprochement avec les commandes'],
                ['Application WhatsApp Business et plateforme de Meta', 'Application gratuite ; plateforme facturée par message depuis le 1er juillet 2025', 'Depuis le 1er octobre 2026, 1 000 messages de service gratuits par mois et par numéro, facturés au-delà', 'Avis de commande et réponses au client, sans transformer WhatsApp en second carnet de commandes'],
                ['Tableur (Excel ou Google Sheets)', 'Versions courantes', 'Selon l\'abonnement déjà détenu par l\'entreprise', 'Feuille de rapprochement quotidien et tableau de bord hebdomadaire'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon le commerce, à Cotonou, Abidjan ou Bruxelles ?',
            'items' => [
                ['secteur' => 'Couture et pagnes sur mesure, à Lomé', 'probleme' => 'Les clientes commandent une tenue sur mesure, puis demandent à la rendre parce que la coupe ne leur plaît plus, et l\'atelier ne sait pas ce qu\'il doit accepter.', 'solution' => 'Fiches qui séparent prêt-à-porter et sur mesure, acompte en mobile money avant la coupe, mention claire des biens exclus de la rétractation, et procédure de retouche distincte de la procédure de retour.'],
                ['secteur' => 'Électroménager et téléphonie, à Abidjan', 'probleme' => 'Une partie des clients paie à la livraison, refuse parfois le colis à la porte, et le livreur rapporte l\'argent avec plusieurs jours de retard.', 'solution' => 'Confirmation par appel avant chaque expédition, plafond pour le paiement à la livraison, acompte au-delà, remise de l\'argent le soir même contre un reçu, et suivi du taux de refus dans le tableau hebdomadaire.'],
                ['secteur' => 'Produits du terroir pour la diaspora, depuis Cotonou', 'probleme' => 'Les acheteurs paient par carte depuis Paris ou Montréal pour faire livrer un proche au Bénin, et les litiges naissent quand le destinataire est injoignable.', 'solution' => 'Coordonnées du payeur et du destinataire séparées sur la commande, appel du destinataire avant le départ, photo de remise envoyée à l\'acheteur, et modèle de réponse prêt pour les livraisons reportées.'],
                ['secteur' => 'Matériel pour salons de coiffure, à Douala', 'probleme' => 'Des clients professionnels recommandent les mêmes produits chaque mois, mais le stock en ligne ne suit pas les ventes faites au comptoir.', 'solution' => 'Inventaire tournant hebdomadaire, seuil d\'alerte par référence, article épuisé masqué automatiquement, et commande type proposée aux clients réguliers par le service client.'],
                ['secteur' => 'Épicerie africaine en ligne, à Bruxelles', 'probleme' => 'Des clients veulent renvoyer des denrées ouvertes, d\'autres réclament le remboursement des frais de port, et l\'équipe répond au cas par cas.', 'solution' => 'Lecture des exceptions au droit de rétractation de l\'Union européenne, procédure écrite pour les produits périssables, fonction de rétractation en ligne vérifiée et modèle de réponse pour chaque situation.'],
                ['secteur' => 'Maroquinerie artisanale, à Lyon ou à Genève', 'probleme' => 'La boutique Shopify tourne, mais les commandes s\'expédient avec une semaine de retard pendant les marchés et les salons.', 'solution' => 'Délai d\'expédition annoncé selon la charge réelle, statut « en fabrication » distinct, message automatique en cas de retard, et indicateur de délai d\'expédition suivi chaque lundi.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Retour, rétractation, retard : que doit faire l\'équipe selon le pays du client ?',
            'legende' => 'Règles lues le 5 octobre 2026 dans la loi béninoise n° 2017-20 portant code du numérique (articles 345 à 356), sur les fiches de justice.fr consacrées à la rétractation (mise à jour du 1er janvier 2026) et aux règles du commerce en ligne (mise à jour du 21 janvier 2026), et dans la directive (UE) 2023/2673. La formation apprend à les appliquer ; elle ne remplace pas l\'avis d\'un juriste.',
            'entetes' => ['Situation', 'Client au Bénin', 'Client en France ou dans l\'Union européenne', 'Ce que fait l\'équipe'],
            'lignes'  => [
                ['Le client change d\'avis', '15 jours ouvrables pour se rétracter, sans justification ; article renvoyé à ses frais dans le même délai (articles 348 et 350)', '14 jours à compter du lendemain de la réception ; frais de retour à sa charge s\'il en a été informé', 'Accuser réception de la demande, donner l\'adresse de retour, noter les dates'],
                ['Information préalable manquante', 'Délai porté à 90 jours (article 348)', 'Délai prolongé de 12 mois', 'Vérifier que les pages de la boutique donnent bien les informations exigées'],
                ['Article sur mesure, personnalisé ou périssable', 'Pas de rétractation pour le sur mesure, les denrées périssables et les biens d\'hygiène descellés (article 355)', 'Mêmes grandes exceptions : biens périssables, confectionnés sur mesure, descellés pour raison d\'hygiène', 'Annoncer l\'exception sur la fiche produit avant l\'achat, pas après la réclamation'],
                ['Article indisponible après paiement', 'Prévenir sans délai, au moins 24 heures avant la livraison prévue, et rembourser l\'intégralité (article 345)', 'Si l\'article ne peut pas être livré dans le délai, le client peut annuler et doit être remboursé sous 14 jours, sans être forcé d\'accepter un avoir', 'Message type prêt, remboursement lancé le jour même'],
                ['Livraison en retard', 'Exécution sous 30 jours ouvrables sauf accord ; résolution de plein droit en cas de retard (article 356)', 'À défaut de date annoncée, livraison au plus tard 30 jours après la commande', 'N\'annoncer que des délais tenables, prévenir avant l\'échéance'],
                ['Frais de livraison au remboursement', 'Remboursés si la rétractation suit un retard ou un manquement du vendeur (article 352)', 'Frais d\'envoi initiaux remboursés avec le prix', 'Calculer le montant exact avant de rembourser'],
                ['Délai et moyen de remboursement', '30 jours ouvrables au plus après réception du bien, par le même moyen de paiement sauf accord exprès du client (articles 351 et 353)', '14 jours, avec possibilité d\'attendre le retour du bien ou la preuve d\'expédition', 'Rembourser par le moyen d\'origine, ou garder l\'accord écrit du client'],
                ['Commande passée en ligne', 'Notification de la rétractation par courrier postal ou électronique avec accusé de réception', 'Depuis le 19 juin 2026, fonction de rétractation en ligne portant la mention « renoncer au contrat ici » ou une formule analogue', 'Savoir où se trouve cette fonction et répondre à chaque demande reçue'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi décider de la procédure de remboursement avant la première vente ?',
            'texte' => 'La loi béninoise impose de rembourser par le moyen de paiement utilisé pour la commande, sauf accord exprès du client (article 353 de la loi n° 2017-20). Or la documentation du tableau de bord de FedaPay, consultée le 5 octobre 2026, précise que le remboursement depuis le tableau de bord n\'est possible que par MTN Mobile Money, sur une transaction au statut « approuvé ». Un client qui a payé par Moov, par Celtiis ou par carte devra donc être remboursé autrement, avec son accord écrit et une preuve conservée. Une boutique qui découvre cette limite le jour du premier litige perd du temps et la confiance du client.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés l\'équipe d\'une boutique en ligne doit-elle connaître ?',
            'items' => [
                ['valeur' => '11 560 567', 'libelle' => 'Abonnements Internet mobile actifs au Bénin au 31 mars 2026, contre 128 222 abonnements Internet fixe : la boutique se consulte d\'abord sur un téléphone', 'source' => 'ARCEP Bénin, observatoire de l\'Internet, tableau de bord au 31 mars 2026', 'url' => 'https://arcep.bj/wp-content/uploads/2026/05/Observatoire_Internet_T1_2026_TaB.pdf'],
                ['valeur' => '4 243 087', 'libelle' => 'Abonnements Internet mobile actifs chez Celtiis au 31 mars 2026, contre 4 770 635 chez Spacetel Bénin (MTN) et 2 546 845 chez Moov Africa Bénin', 'source' => 'ARCEP Bénin, observatoire de l\'Internet, 31 mars 2026', 'url' => 'https://arcep.bj/wp-content/uploads/2026/05/Observatoire_Internet_T1_2026_TaB.pdf'],
                ['valeur' => '155 Md$', 'libelle' => 'Paiements marchands par mobile money dans le monde en 2025, en hausse de près de moitié, l\'usage qui progresse le plus vite', 'source' => 'GSMA, rapport 2026 sur le mobile money, consulté le 5 octobre 2026', 'url' => 'https://www.gsma.com/sotir/'],
                ['valeur' => '3,2 milliards', 'libelle' => 'Transactions en ligne en France en 2025, en hausse de 10 %, pour un panier moyen de 62 euros, en baisse de 3 %', 'source' => 'Fevad, bilan du e-commerce publié le 11 février 2026', 'url' => 'https://www.fevad.com/bilan-du-e-commerce-en-france-les-francais-ont-depense-pres-de-200-milliards-deuros-sur-internet-en-2025/'],
                ['valeur' => '13 %', 'libelle' => 'Acheteurs ayant abandonné une commande à cause d\'une politique de retour jugée insatisfaisante, selon la compilation mise à jour le 22 septembre 2025', 'source' => 'Baymard Institute', 'url' => 'https://baymard.com/lists/cart-abandonment-rate'],
                ['valeur' => '9 %', 'libelle' => 'Acheteurs ayant abandonné faute de moyens de paiement suffisants ; 10 % après un refus de leur carte', 'source' => 'Baymard Institute, compilation de 50 études mise à jour le 22 septembre 2025', 'url' => 'https://baymard.com/lists/cart-abandonment-rate'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment tenir un service client qui fait revenir les acheteurs ?',
            'paragraphes' => [
                'Le service client d\'une boutique en ligne commence par une promesse que l\'équipe peut tenir. Il vaut mieux deux canaux suivis tous les jours, par exemple le téléphone et WhatsApp, que cinq canaux ouverts où les messages s\'accumulent. La formation fixe avec le gérant les canaux retenus, les heures de réponse, le délai annoncé au client et la personne qui remplace le titulaire pendant ses congés. Cette organisation est écrite sur la page de contact de la boutique et dans le message de confirmation de commande.',
                'Les questions se ressemblent d\'une boutique à l\'autre : où est mon colis, pourquoi mon compte a été débité sans confirmation, puis-je changer la taille, quand serai-je remboursé. Chaque participant rédige ses modèles de réponse à partir des messages réellement reçus, avec les informations à vérifier avant d\'envoyer. Le cas du paiement débité sans commande est travaillé en détail, parce qu\'il inquiète le client plus que tout autre : on cherche la transaction dans le tableau de bord de la passerelle avant de répondre, jamais l\'inverse.',
                'Une réclamation se traite jusqu\'à sa clôture, avec une trace. La loi béninoise met la preuve de l\'information préalable, de la confirmation et du respect des délais à la charge du vendeur (article 341 de la loi n° 2017-20) : un échange perdu dans un téléphone personnel ne protège personne. La formation installe un registre simple, dans la boutique ou dans un tableur, où chaque réclamation reçoit une date, une décision et la preuve envoyée. La lecture de ce registre à la séance de suivi montre souvent quelles fiches produits il faut corriger.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels indicateurs suivre chaque semaine, et comment les calculer sans outil compliqué ?',
            'legende' => 'Tableau de bord hebdomadaire construit pendant la formation. Les valeurs de référence sont fixées par chaque boutique à partir de ses propres semaines, jamais à partir d\'une moyenne trouvée en ligne.',
            'entetes' => ['Indicateur', 'Calcul', 'Où le lire', 'Ce qui doit alerter'],
            'lignes'  => [
                ['Commandes payées', 'Nombre de commandes passées au statut payé dans la semaine', 'Liste des commandes de la boutique, filtrée par statut', 'Une baisse nette sans changement de prix, de stock ou de saison'],
                ['Chiffre encaissé', 'Somme des transactions réussies, moins les remboursements', 'Export du tableau de bord de la passerelle', 'Un écart avec le total des commandes payées'],
                ['Panier moyen', 'Chiffre encaissé divisé par le nombre de commandes payées', 'Calcul dans le tableur', 'Un panier qui ne couvre plus le coût de la livraison offerte'],
                ['Taux de conversion', 'Commandes payées divisées par le nombre de visites de la boutique', 'Statistiques de la plateforme ou de l\'outil de mesure', 'Des visites en hausse avec des commandes stables'],
                ['Paniers abandonnés', 'Commandes restées en attente de paiement ou paniers non validés', 'Commandes en attente, rapport de la plateforme', 'Des abandons concentrés sur un moyen de paiement ou une zone de livraison'],
                ['Délai d\'expédition', 'Temps entre le paiement et la remise au livreur', 'Dates des statuts de commande', 'Un délai supérieur à celui annoncé sur la boutique'],
                ['Taux de retour et de refus', 'Retours et colis refusés divisés par les commandes livrées', 'Registre des retours et des réclamations', 'Un même produit qui revient plusieurs fois'],
                ['Réclamations ouvertes', 'Réclamations sans décision à la fin de la semaine', 'Registre des réclamations', 'Une réclamation de plus de quelques jours sans réponse'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Téléphone, adresses, opérateurs, données des clients : que change le terrain ?',
            'paragraphes' => [
                'Au Bénin, l\'<a href="https://arcep.bj/wp-content/uploads/2026/05/Observatoire_Internet_T1_2026_TaB.pdf">observatoire de l\'Internet de l\'ARCEP</a> recense, au 31 mars 2026, 11 560 567 abonnements Internet mobile actifs pour 128 222 abonnements fixes. Chaque fiche est donc relue sur un téléphone ordinaire, avec des photos légères. Le même tableau montre que Celtiis compte 4 243 087 abonnements Internet mobile, près de Spacetel Bénin (MTN) à 4 770 635 : une boutique qui n\'accepterait que deux opérateurs se priverait d\'une part importante des téléphones du pays. On vérifie donc en formation quels opérateurs la passerelle accepte réellement.',
                'L\'adresse de livraison se décrit rarement par une rue et un numéro à Cotonou, à Abidjan ou à Lomé. Le livreur s\'appuie sur un quartier, un repère et un appel ; l\'équipe apprend à exiger un numéro joignable, à confirmer le repère avant le départ et à noter ce qui a fonctionné pour la prochaine commande du même client. La langue compte aussi : un message de confirmation clair en français, puis un appel dans la langue du client quand le livreur ne trouve pas, évitent bien des colis refusés.',
                'Les données des clients circulent plus qu\'on ne le croit : le livreur voit un nom, un numéro et une adresse, la passerelle un montant, le tableur partagé tout l\'historique. L\'article 415 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20</a> impose d\'informer la personne, dès la collecte, notamment des finalités, des destinataires, de la durée de conservation, de son droit de s\'opposer à la prospection et des transferts vers d\'autres États. L\'équipe apprend à ne transmettre au livreur que le nécessaire et à retirer les accès des personnes qui quittent l\'entreprise.',
                'Pour les clients situés dans l\'Union européenne, le <a href="https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32016R0679">RGPD</a> s\'applique même à une boutique établie à Cotonou, dès lors qu\'elle leur propose des biens (article 3). En cas de violation de données, son article 33 prévoit une notification à l\'autorité de contrôle dans les meilleurs délais et, si possible, dans les 72 heures. L\'histoire de <a href="/histoires/british-airways-piratage">la page de paiement de British Airways</a> rappelle pourquoi une équipe de boutique ne demande jamais un numéro de carte par message et signale tout comportement anormal de la page de paiement.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : comment organiser la formation ?',
            'legende' => 'Le format se choisit au premier échange, selon le nombre de personnes, leurs postes et l\'état de la boutique. Dans tous les cas, on travaille sur votre boutique ou sur sa copie de test.',
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', 'Une boutique et son équipe, ou une enseigne qui vend en ligne pour plusieurs magasins', 'Deux jours, puis la séance de suivi', 'Dans vos locaux, sur vos postes, avec des groupes séparés par métier l\'après-midi si besoin'],
                ['Inter-entreprises', 'Commerçants d\'une même association, d\'un incubateur ou d\'un réseau de vendeurs', 'Deux jours', 'Salle commune ; chacun travaille sur sa boutique, et les exemples projetés sont anonymisés'],
                ['À distance', 'Boutiques hors de Cotonou, équipes dispersées, commerçants en Europe ou au Canada', 'Quatre séances de trois heures environ', 'Visioconférence avec partage d\'écran, exercices préparés la veille, tableaux de bord relus entre deux séances'],
                ['Hybride', 'Équipes qui ouvrent leur boutique et veulent un accompagnement dans la durée', 'Un jour en salle, puis séances courtes à distance', 'Catalogue et circuit de commande en salle, encaissement, retours et indicateurs à distance sur les premières vraies commandes'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation e-commerce, et comment la régler ?',
            'intro'      => 'Aucun tarif n\'est publié : le prix est fixé sur devis, après un premier échange gratuit qui précise la boutique, le nombre de participants, leurs postes et le format. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements des plateformes et les commissions des passerelles restent payés par la boutique à leurs éditeurs.',
            'items'      => [
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Deux jours sur votre boutique', 'Les quatre exercices de contrôle', 'Circuit de commande, procédure de retour, tableau de bord', 'Séance de suivi à distance']],
                ['offre' => 'Session pour plusieurs commerçants', 'prix' => 'Sur devis', 'inclus' => ['Deux jours en salle commune', 'Travail de chacun sur sa propre boutique', 'Coût partagé entre les participants']],
                ['offre' => 'Parcours à distance', 'prix' => 'Sur devis', 'inclus' => ['Quatre séances en visioconférence', 'Exercices entre les séances', 'Relecture des premiers tableaux de bord']],
                ['offre' => 'Accompagnement à l\'ouverture', 'prix' => 'Sur devis', 'inclus' => ['Formation hybride au lancement', 'Revue des premières commandes réelles', 'Corrections de la procédure de retour et des modèles de réponse']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, car chaque écran doit être suivi.',
                'Le nombre de postes à former : gérant, catalogue, préparation, service client.',
                'L\'état de la boutique : en ligne depuis des mois, en cours d\'ouverture, ou encore sur une copie de test.',
                'La plateforme et le nombre de passerelles de paiement à couvrir.',
                'Le lieu et le mode : vos locaux, une salle louée, un déplacement hors de Cotonou, la distance ou l\'hybride.',
                'La préparation demandée : reprise de fiches, modèles de réponses rédigés à partir de vos messages, tableau de bord préparé avec vos données.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il financer tout ou partie de la session ?',
            'paragraphes' => [
                'C\'est possible dans certains pays, jamais automatique. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> consacrée au plan de formation, lue le 5 octobre 2026, réserve le dépôt d\'un plan aux entreprises qui justifient du paiement régulier des deux taxes, distingue les formations intra et interentreprises, et soumet à des dispositions particulières les actions liées à l\'utilisation de l\'ordinateur. Le règlement n\'intervient qu\'après le suivi et le contrôle du fonds. Une boutique ivoirienne doit donc poser la question au FDFP avant de signer le devis.',
                'Au Bénin, le FODEFCA est régi par des statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> ouvre un guichet pour le personnel des entreprises et les membres des organisations professionnelles, utile à une association de commerçants qui se forme en groupe. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que les prestataires qui veulent accéder aux fonds publics ou mutualisés, dont ceux des OPCO, doivent être certifiés Qualiopi depuis le 1er janvier 2022.',
                'Richard SALANON ne se présente ni comme certifié Qualiopi ni comme agréé par un fonds. Si le financement conditionne la décision, transmettez le programme et le devis au fonds concerné, demandez une réponse écrite et bâtissez le budget sans prise en charge. Le programme, les feuilles d\'émargement et les résultats des exercices de contrôle, remis à la fin de la session, constituent dans tous les cas le dossier dont un fonds a besoin.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent dans les semaines qui suivent, et quelle parade apprend-on ?',
            'intro' => 'Une boutique bien réglée se dérègle vite quand le rythme des ventes s\'accélère. Voici les dérives observées le plus souvent après une session, et le geste qui les évite.',
            'items' => [
                ['titre' => 'Le stock en ligne décroche du rayon', 'texte' => 'Les ventes du comptoir ne sont pas reportées, et la boutique encaisse un article absent. Un inventaire tournant chaque semaine sur les meilleures ventes et un seuil d\'alerte par référence limitent les remboursements forcés.'],
                ['titre' => 'Le rapprochement est remis à plus tard', 'texte' => 'Une semaine sans rapprochement suffit pour qu\'un doublon ou un paiement orphelin devienne introuvable. La feuille du soir prend dix minutes si elle est faite chaque jour, une demi-journée si on l\'oublie.'],
                ['titre' => 'Le délai annoncé n\'est plus tenu', 'texte' => 'Une promotion double les commandes, le délai affiché reste le même, et les réclamations explosent. On ajuste le délai annoncé avant la promotion, pas après les plaintes.'],
                ['titre' => 'Les retours se négocient au cas par cas', 'texte' => 'Sans procédure écrite, chaque vendeur décide selon son humeur et le client compare. La procédure de la boutique est appliquée par tous, et seul le gérant peut y déroger.'],
                ['titre' => 'Les fiches ne bougent plus', 'texte' => 'Les questions des clients révèlent ce qui manque aux fiches, mais personne ne les corrige. Les trois fiches qui ont suscité le plus de questions sont reprises chaque semaine.'],
                ['titre' => 'Les accès restent ouverts', 'texte' => 'Un ancien vendeur garde son accès à la boutique ou au tableau de bord de la passerelle. Chaque départ déclenche la fermeture de ses comptes le jour même ; la formation <a href="/formations/cybersecurite-employes">cybersécurité pour les employés</a> approfondit ces réflexes.'],
                ['titre' => 'Le tableau de bord n\'est plus lu', 'texte' => 'Rempli mais jamais commenté, il cesse vite d\'être rempli. La revue du lundi dure vingt minutes, se termine par trois décisions écrites, et le gérant y assiste.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre à faire tourner votre boutique avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il connaît la vente en ligne par les deux bouts : il construit des boutiques et branche leurs paiements, puis il voit ce qui se passe quand les commerçants les reprennent en main. Les difficultés qui reviennent dans cette formation, le paiement en attente, le remboursement impossible par le tableau de bord, le stock qui décroche, sont celles qu\'il rencontre dans ses propres projets. Il a aussi créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, ce qui l\'aide à situer la place de WhatsApp dans le service client.',
                'Fort de ' . $ans . ' ans d\'expérience dans le numérique, formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . ') et co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>, il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP. Il a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, d\'Afrique de l\'Ouest et centrale jusqu\'en Europe et au Canada. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page <a href="/zones/">zones d\'intervention</a>.',
                'Sa façon de former se vérifie : une réponse sous 24 heures, un programme écrit avant la session, des exercices sur votre boutique et vos transactions, une évaluation sur des tâches réelles, des supports modifiables laissés à l\'équipe, et un avis franc quand le problème tient à la boutique plutôt qu\'à l\'équipe. Dans ce cas, le service <a href="/services/site-e-commerce">site e-commerce</a> ou le <a href="/services/maintenance-support">contrat de maintenance</a> prennent le relais. Le catalogue complet se trouve sur la page des <a href="/formations/">formations</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Une boutique en ligne se gagne dans les gestes de tous les jours : des fiches qui répondent avant le client, un paiement vérifié dans la passerelle avant toute expédition, un délai annoncé que l\'on tient, une procédure de retour écrite et un remboursement prévu avant la première vente, puis vingt minutes de chiffres chaque lundi.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous que votre équipe fasse tourner votre boutique sans urgences ?',
            'texte'  => 'Indiquez votre plateforme, votre passerelle de paiement, le nombre de personnes à former, leurs postes, la ville et le format souhaité : vous recevez une réponse sous 24 heures, puis un programme ajusté et un devis détaillé. La formation se complète bien avec <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a> et <a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation e-commerce'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il déjà avoir une boutique en ligne pour suivre la formation ?', 'r' => 'Non, mais il faut au moins une boutique en cours d\'ouverture ou sa copie de test. Les exercices portent sur vos produits, vos paiements et vos commandes. Si vous n\'avez encore rien, le premier pas est la création de la boutique, décrite sur la page du service site e-commerce ; la formation intervient ensuite, au moment de l\'ouverture.'],
        ['q' => 'La formation dépend-elle de la plateforme utilisée ?', 'r' => 'Non. Les gestes enseignés sont les mêmes sous WooCommerce, Shopify, Odoo eCommerce ou une boutique sur mesure : seuls les écrans changent. Le formateur prépare la session sur votre plateforme à partir des accès fournis. L\'administration technique de WordPress et de ses extensions relève d\'une formation distincte.'],
        ['q' => 'Combien de temps dure la formation ?', 'r' => 'Deux jours, découpés en quatre demi-journées : catalogue, encaissement, livraison et retours, service client et indicateurs. Une séance de suivi de deux heures à distance a lieu trois à quatre semaines plus tard, sur les chiffres réels de la boutique. À distance, la formation se fait en quatre séances d\'environ trois heures.'],
        ['q' => 'Qui, dans l\'équipe, doit y participer ?', 'r' => 'Le gérant au moins pour la première et la dernière demi-journée, la personne qui tient le catalogue, celle qui prépare et expédie, et celle qui répond aux clients. Dans une petite boutique, ce sont parfois les deux mêmes personnes ; dans une enseigne, les groupes peuvent être séparés par métier l\'après-midi.'],
        ['q' => 'Comment savoir si un paiement mobile money est vraiment passé ?', 'r' => 'En le retrouvant dans le tableau de bord de la passerelle, avec son montant et son identifiant de transaction, jamais sur une capture d\'écran envoyée par le client ni sur la seule page de retour de la boutique. La formation apprend à faire ce contrôle commande par commande, puis à rapprocher chaque soir l\'ensemble des paiements reçus.'],
        ['q' => 'Peut-on rembourser un client par mobile money ?', 'r' => 'Cela dépend de la passerelle et de l\'opérateur. Le 5 octobre 2026, la documentation du tableau de bord de FedaPay indiquait que le remboursement n\'y est possible que par MTN Mobile Money. Comme la loi béninoise impose de rembourser par le moyen de paiement d\'origine sauf accord exprès du client, la procédure de remboursement se décide avant la première vente.'],
        ['q' => 'Un client peut-il renvoyer un article commandé en ligne ?', 'r' => 'En général oui. Au Bénin, le consommateur dispose de 15 jours ouvrables pour se rétracter, en France de 14 jours. Certains biens en sont exclus : articles sur mesure ou personnalisés, denrées périssables, produits d\'hygiène descellés. La formation apprend à annoncer ces règles sur la boutique avant l\'achat et à trancher chaque demande.'],
        ['q' => 'Que faire quand un article payé n\'est plus en stock ?', 'r' => 'Prévenir le client sans délai et, selon la loi béninoise, au moins 24 heures avant la date de livraison prévue, puis lui rembourser l\'intégralité des sommes perçues s\'il ne choisit pas un autre article. Un message type et une procédure de remboursement prêts évitent que l\'incident tourne au litige.'],
        ['q' => 'Le paiement à la livraison est-il une bonne idée ?', 'r' => 'Il rassure les nouveaux clients, mais il expose aux colis refusés et à l\'argent rapporté en retard. La formation apprend à l\'encadrer : confirmation avant expédition, montant maximal, acompte au-delà, argent rendu le soir même contre un reçu, et suivi du taux de refus dans le tableau hebdomadaire.'],
        ['q' => 'Quels indicateurs un petit commerçant doit-il suivre ?', 'r' => 'Huit suffisent : commandes payées, chiffre encaissé, panier moyen, taux de conversion, paniers abandonnés, délai d\'expédition, taux de retour et réclamations ouvertes. Ils se calculent à partir de la boutique, de l\'export de la passerelle et d\'un tableur, sans outil payant. Leur intérêt vient de la revue hebdomadaire qui en tire des décisions.'],
        ['q' => 'La formation couvre-t-elle la publicité et le référencement de la boutique ?', 'r' => 'Seulement pour situer leur place. La publicité payante, le référencement naturel, Google Analytics 4 et l\'emailing font chacun l\'objet d\'une formation distincte du catalogue. Cette formation se concentre sur ce qui se passe une fois le visiteur arrivé : la fiche, le paiement, la livraison, le service et le retour.'],
        ['q' => 'La formation peut-elle être financée ?', 'r' => 'Parfois, selon le pays et le fonds : FDFP en Côte d\'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, OPCO en France, ces derniers exigeant un prestataire certifié Qualiopi. Richard SALANON n\'affiche ni certification Qualiopi ni agrément. Soumettez le programme et le devis au fonds, obtenez une réponse écrite et prévoyez le budget sans prise en charge.'],
    ],

    'sources' => [
        ['titre' => 'FedaPay, page tarifs (commissions par moyen de paiement au Bénin, retraits)', 'url' => 'https://www.fedapay.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, documentation : types de comptes et plafonds', 'url' => 'https://docs.fedapay.com/fr/introduction/compte', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, documentation du tableau de bord : remboursements uniquement par MTN Mobile Money', 'url' => 'https://docs.fedapay.com/dashboard/fr/dashboard-fr', 'date' => '2026-10-05'],
        ['titre' => 'KkiaPay, page tarifs (offres TPE, App Mobile, Intégration, Push Up)', 'url' => 'https://kkiapay.me/tarifs/', 'date' => '2026-10-05'],
        ['titre' => 'Shopify, tarifs des plans en France', 'url' => 'https://www.shopify.com/fr/tarifs', 'date' => '2026-10-05'],
        ['titre' => 'WordPress.org, extension WooCommerce (version 11.1.2)', 'url' => 'https://wordpress.org/plugins/woocommerce/', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, page des tarifs (version française, lue dans un navigateur)', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (version française lue dans un navigateur)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 341 à 356 et 415)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Justice.fr, achat à distance : droit de rétractation du consommateur', 'url' => 'https://www.justice.fr/fiche/achat-distance-droit-retractation-consommateur', 'date' => '2026-10-05'],
        ['titre' => 'Justice.fr, faire du commerce en ligne : règles à respecter', 'url' => 'https://www.justice.fr/fiche/faire-commerce-ligne-e-commerce-regles-respecter', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, directive (UE) 2023/2673, article 11 bis : fonction de rétractation (lue dans un navigateur)', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32023L2673', 'date' => '2026-10-05'],
        ['titre' => 'EUR-Lex, règlement (UE) 2016/679, dit RGPD, articles 3 et 33 (lu dans un navigateur)', 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/HTML/?uri=CELEX:32016R0679', 'date' => '2026-10-05'],
        ['titre' => 'ARCEP Bénin, observatoire de l\'Internet, tableau de bord au 31 mars 2026', 'url' => 'https://arcep.bj/wp-content/uploads/2026/05/Observatoire_Internet_T1_2026_TaB.pdf', 'date' => '2026-10-05'],
        ['titre' => 'GSMA, The State of the Industry Report on Mobile Money 2026', 'url' => 'https://www.gsma.com/sotir/', 'date' => '2026-10-05'],
        ['titre' => 'Fevad, bilan du e-commerce en France en 2025 (11 février 2026)', 'url' => 'https://www.fevad.com/bilan-du-e-commerce-en-france-les-francais-ont-depense-pres-de-200-milliards-deuros-sur-internet-en-2025/', 'date' => '2026-10-05'],
        ['titre' => 'Baymard Institute, statistiques d\'abandon de panier (mise à jour du 22 septembre 2025)', 'url' => 'https://baymard.com/lists/cart-abandonment-rate', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['wordpress-woocommerce', 'whatsapp-business', 'visibilite-google', 'publicite-meta-google-ads', 'analytics-ga4', 'emailing-automation'],
        'services'    => ['site-e-commerce', 'integration-whatsapp', 'maintenance-support'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
