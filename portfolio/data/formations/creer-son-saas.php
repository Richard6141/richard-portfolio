<?php
// ============================================================
// data/formations/creer-son-saas.php · Fiche formation « Créer son SaaS de A
// à Z » (vague 1B, lot B, domaine développement, publication reportée ensuite).
// Angle propre : de l'idée au premier client payant (problème et cible, MVP,
// architecture multi-clients, abonnements, paiement par carte et mobile money
// avec les API officielles de Stripe, FedaPay et KkiaPay, conditions
// générales, données personnelles, MRR et churn). Le pilier
// /services/saas-espace-client (la prestation) n'est pas repris ; les frais
// détaillés des passerelles relèvent du comparatif FedaPay, KkiaPay, CinetPay.
// Wapy est cité comme expérience de fondateur, sans chiffre de clients ni de revenus.
// Sources consultées le 05/10/2026 : Paul Graham, Stripe (tarifs, Billing,
// disponibilité, environnements de test, webhooks, analyses), Laravel Cashier,
// FedaPay, KkiaPay, GSMA, Légifrance, CNIL, APDP, SGG du Bénin, fonds de formation.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Créer son SaaS de A à Z : valider un problème, construire un MVP multi-clients, encaisser des abonnements par carte et mobile money, puis signer le premier client payant',
    'title'   => 'Formation créer son SaaS, du MVP au client | Richard SALANON',
    'meta'    => 'Formation pour créer son SaaS : valider le problème, bâtir un MVP multi-clients, encaisser par carte ou mobile money, suivre MRR et churn. Sur devis.',
    'en_bref' => 'Une formation pour mener un logiciel vendu par abonnement de l\'idée au premier client payant : choisir un problème et une cible, découper un MVP, isoler les données de chaque client, modéliser les abonnements, encaisser par carte avec Stripe ou par mobile money avec FedaPay et KkiaPay, rédiger le cadre contractuel et suivre le MRR et le churn. Elle s\'adresse aux porteurs de produit, aux développeurs indépendants et aux éditeurs en devenir, qu\'ils codent eux-mêmes ou pilotent un développeur. Elle dure quatre jours, en huit demi-journées étalées sur quatre à six semaines pour laisser place au travail de terrain, en intra, en inter, à distance ou en formule hybride. Le prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'developpement',
    'forte'   => false,
    'duree'   => '4 jours (8 demi-journées) étalés sur 4 à 6 semaines, avec du travail de terrain entre les séances',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : le problème, la cible et la preuve d\'intérêt',
            'duree'  => '3 h 30',
            'points' => [
                'Passer d\'une idée de produit à un problème écrit en une phrase : qui le subit, à quelle fréquence, ce qu\'il coûte aujourd\'hui.',
                'Choisir une cible étroite plutôt qu\'un marché entier : un métier, une taille d\'entreprise, un pays, un canal pour la joindre.',
                'Préparer dix entretiens de découverte : questions sur le passé et les dépenses réelles, jamais sur les intentions.',
                'Lister les hypothèses qui tueraient le projet si elles étaient fausses, et la façon de tester chacune en moins de deux semaines.',
                'Exercice : chaque participant rédige sa fiche problème et la défend devant le groupe en trois minutes.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : l\'offre et le prix avant la première ligne de code',
            'duree'  => '3 h 30',
            'points' => [
                'Formuler la promesse : le résultat obtenu par le client, pas la liste des fonctions.',
                'Construire une grille de deux ou trois formules, avec la métrique qui fait monter le prix : utilisateurs, dossiers, établissements.',
                'Calculer la marge réelle d\'un abonnement : frais de passerelle, hébergement, envois de messages, temps de support.',
                'Organiser une pré-vente : page d\'attente, démonstration sur maquette, acompte ou lettre d\'engagement.',
                'Exercice : fixer un prix en francs CFA et en euros, puis le soumettre à deux prospects avant la séance suivante.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : découper le MVP',
            'duree'  => '3 h 30',
            'points' => [
                'Un seul parcours de bout en bout : de l\'inscription au premier résultat utile pour le client.',
                'La liste « pas maintenant » : ce qui attendra la deuxième version, écrit et assumé.',
                'Construire, assembler ou faire développer : code, outils sans code, prestataire, et ce que chaque voie engage pour la suite.',
                'Choisir la pile selon l\'équipe réelle : Laravel, Next.js, ou un prototype assisté par l\'IA à reprendre ensuite.',
                'Exercice : maquette des cinq écrans du parcours principal, testée sur téléphone par un autre participant.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : l\'architecture multi-clients',
            'duree'  => '3 h 30',
            'points' => [
                'Organisation, membre, rôle : le modèle de données minimal d\'un logiciel partagé par plusieurs entreprises clientes.',
                'Filtrer chaque requête par organisation de façon automatique, et pourquoi le faire au premier jour plutôt qu\'au centième client.',
                'Invitations, propriétaire du compte, départ d\'un collaborateur : les cas que le MVP doit déjà savoir traiter.',
                'Fichiers, exports et recherches : les trois endroits où les fuites entre clients se produisent le plus souvent.',
                'Exercice : écrire le test automatisé qui crée deux organisations fictives et vérifie que l\'une ne lit rien de l\'autre.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : modéliser l\'abonnement',
            'duree'  => '3 h 30',
            'points' => [
                'Les états d\'un abonnement : essai, actif, en retard, suspendu, résilié, réactivé, et les transitions autorisées entre eux.',
                'Échéance, délai de grâce, changement de formule en cours de période : des règles commerciales à trancher avant de coder.',
                'Facture et numérotation : ce que garde chaque facture (formule, prix, devise, taxes) même si la grille change ensuite.',
                'Le journal des événements d\'abonnement, source unique de tous les indicateurs calculés le dernier jour.',
                'Exercice : dessiner le diagramme d\'états de son propre produit et le confronter à six scénarios piégés.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : encaisser par carte et par mobile money, en environnement de test',
            'duree'  => '3 h 30',
            'points' => [
                'Choisir la passerelle selon le pays des clients : Stripe pour la carte et le prélèvement en Europe et au Canada, FedaPay ou KkiaPay pour le mobile money en Afrique de l\'Ouest.',
                'Ouvrir un environnement de test, créer un paiement par l\'API officielle et suivre son statut jusqu\'à la confirmation.',
                'Recevoir les notifications : vérifier la signature, répondre vite, ignorer les doublons, ne pas dépendre de l\'ordre d\'arrivée.',
                'Le renouvellement actif propre au mobile money : facture, lien de paiement, rappel, prolongation à la confirmation.',
                'Exercice : simuler un paiement réussi, refusé, abandonné et reçu en double, et vérifier l\'état de l\'abonnement après chacun.',
            ],
        ],
        [
            'titre'  => 'Jour 4, matin : conditions générales et données personnelles',
            'duree'  => '3 h 30',
            'points' => [
                'Ce que doivent trancher les conditions générales d\'un SaaS : durée, renouvellement, impayé, suspension, résiliation, sort des données, niveau de service.',
                'Vendre à des entreprises ou à des particuliers : des obligations qui ne sont pas les mêmes, en France comme ailleurs.',
                'Responsable de traitement ou sous-traitant : le rôle de l\'éditeur pour ses propres données et pour celles que ses clients déposent.',
                'Formalités au Bénin auprès de l\'APDP, contrat de sous-traitance et registre en Europe, liste des prestataires techniques.',
                'Exercice : grille de contrôle des conditions générales, à remettre ensuite à un juriste, jamais à copier d\'un autre site.',
            ],
        ],
        [
            'titre'  => 'Jour 4, après-midi : indicateurs, plan de lancement et premier client',
            'duree'  => '3 h 30',
            'points' => [
                'Calculer le MRR, le taux d\'attrition, le revenu moyen par abonné et la conversion des essais à partir du journal d\'événements.',
                'Distinguer un client perdu d\'un client en retard de paiement, cas fréquent avec le mobile money.',
                'Le plan des 90 jours : liste des prospects, rendez-vous, démonstrations, relances, et le seuil qui dira s\'il faut continuer.',
                'Le script de démonstration : partir du problème du prospect, montrer un seul parcours, demander une décision.',
                'Restitution : chaque participant présente son dossier (problème, offre, MVP, architecture, paiement, cadre juridique, indicateurs) et reçoit un retour écrit.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '4 jours en 8 demi-journées, sur 4 à 6 semaines'],
        ['l' => 'Public', 'v' => 'Porteurs de produit, développeurs indépendants, éditeurs en devenir'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride ; huit participants au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et que ne couvre-t-elle pas ?',
            'paragraphes' => [
                'Un SaaS échoue rarement parce que son code est mauvais. Il échoue parce que personne ne paie, parce qu\'un client voit les données d\'un autre, ou parce que les abonnements ne se renouvellent pas. Cette formation suit l\'ordre que l\'argent impose : d\'abord un problème que des clients veulent résoudre, puis une offre et un prix, puis le plus petit logiciel capable de tenir cette promesse, puis l\'encaissement, le cadre contractuel et la mesure. Le but n\'est pas d\'avoir un produit complet au bout de quatre jours, mais un dossier solide et un plan pour signer le premier client payant.',
                'À la fin, chaque participant sait faire six choses, vérifiées sur son propre projet. Écrire le problème et la cible en une page, après au moins cinq entretiens menés entre deux séances. Proposer une grille tarifaire dont il connaît la marge après frais. Découper un MVP en un parcours unique, avec la liste de ce qui attendra. Décrire un modèle de données multi-clients et le test qui prouve l\'isolation. Faire passer un abonnement par tous ses états dans l\'environnement de test d\'une passerelle. Calculer son MRR et son taux d\'attrition à partir d\'un journal d\'événements.',
                'La formation n\'apprend pas à programmer. Celui qui part de zéro commence par la <a href="/formations/developpement-web">formation au développement web</a> ; celui qui veut un prototype sans savoir coder passe d\'abord par la <a href="/formations/vibecoding">formation vibecoding</a>. Elle n\'enseigne pas non plus un framework en détail : Laravel et Next.js ont leurs propres fiches, reliées en bas de page. Elle ne rédige pas vos conditions générales à la place d\'un juriste, et ne promet ni clients ni chiffre d\'affaires.',
                'Elle ne livre pas davantage le logiciel. Si c\'est la plateforme elle-même qu\'il vous faut, conçue et développée pour vous, c\'est l\'objet de la prestation <a href="/services/saas-espace-client">SaaS et espace client</a>. Beaucoup de fondateurs combinent les deux : la formation pour décider en connaissance de cause et parler le même langage que l\'équipe technique, la prestation pour construire. Le premier échange sert à savoir laquelle des deux vous fera gagner du temps.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'Le niveau technique varie d\'un participant à l\'autre ; ce qui compte, c\'est d\'arriver avec un produit à vendre, même encore à l\'état d\'idée, et la volonté de parler à de vrais prospects entre les séances.',
            'items' => [
                ['titre' => 'Porteurs de produit', 'texte' => 'Experts d\'un métier qui voient un problème récurrent chez leurs pairs : gestion d\'une école, suivi de chantiers, dossiers d\'un cabinet. Ils ne codent pas forcément et piloteront un développeur ; la formation leur apprend à cadrer ce qu\'ils commandent et à juger ce qu\'on leur livre.'],
                ['titre' => 'Développeurs indépendants', 'texte' => 'Ils savent construire, mais ont souvent bâti des mois avant de chercher un acheteur. Pour eux, la formation insiste sur la recherche de clients, le prix et la vente, sans négliger l\'isolation des données et les notifications de paiement, où leur code sera relu.'],
                ['titre' => 'Éditeurs en devenir', 'texte' => 'Une agence ou une société de services qui refait le même outil pour chaque client et veut le transformer en produit vendu par abonnement. L\'enjeu est de passer d\'un code par client à une plateforme commune, sans casser les installations existantes.'],
                ['titre' => 'Équipes produit d\'une entreprise', 'texte' => 'Un service qui veut commercialiser un outil interne auprès d\'autres organisations. En intra, la formation porte directement sur ce projet, avec ses contraintes de gouvernance et de budget.'],
                ['titre' => 'Prérequis', 'texte' => 'Avoir un produit à vendre, ou au moins un problème identifié chez des clients joignables. Savoir coder, ou être prêt à piloter un développeur. Le niveau d\'entrée est donc variable : le test de positionnement règle la composition du groupe pour que chacun avance à son rythme sur son projet.'],
                ['titre' => 'Matériel et comptes', 'texte' => 'Un ordinateur, le projet et ses premiers documents (notes, maquettes, échanges avec des prospects). Un compte de test chez un prestataire de paiement est ouvert pendant la formation, sans aucune transaction réelle. Les développeurs ajoutent leur environnement habituel et un dépôt Git.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quel travail de terrain chaque participant mène-t-il entre les séances ?',
            'items' => [
                ['titre' => 'Mener cinq à dix entretiens de découverte', 'duree' => 'Entre le jour 1 et le jour 2', 'texte' => 'Des prospects de la cible, joints par téléphone, sur WhatsApp ou en rendez-vous. On leur demande comment ils gèrent le problème aujourd\'hui, ce que cela leur coûte et ce qu\'ils ont déjà essayé. Chaque entretien est résumé en cinq lignes, et le compte rendu est relu en séance pour séparer les faits des politesses.'],
                ['titre' => 'Soumettre le prix à deux prospects', 'duree' => 'Avant le jour 2', 'texte' => 'La grille préparée le premier après-midi est présentée telle quelle, avec un montant précis. La réaction compte plus que la réponse : un prospect qui négocie s\'intéresse, un prospect qui répond « c\'est intéressant » sans poser de question ne l\'est probablement pas.'],
                ['titre' => 'Mettre en ligne une page d\'attente', 'duree' => '2 à 3 heures', 'texte' => 'Une page qui décrit le problème, la promesse et le prix, avec une inscription ou une demande de démonstration. Elle sert moins à mesurer un trafic qu\'à avoir un lien à envoyer après chaque entretien. Pour la construire proprement, la prestation de <a href="/services/landing-page-haute-conversion">landing page</a> existe, mais une page simple suffit ici.'],
                ['titre' => 'Faire tester la maquette', 'duree' => 'Entre le jour 2 et le jour 3', 'texte' => 'Les cinq écrans du parcours principal sont montrés à trois utilisateurs de la cible, sur leur propre téléphone. On note où ils hésitent, ce qu\'ils cherchent sans le trouver, et les mots qu\'ils emploient pour décrire ce qu\'ils voient.'],
                ['titre' => 'Rejouer le test d\'isolation', 'duree' => '1 heure', 'texte' => 'Pour les participants qui codent, le test des deux organisations fictives est branché sur leur propre dépôt. Pour ceux qui pilotent un développeur, il devient une exigence écrite du cahier des charges, avec le résultat attendu.'],
                ['titre' => 'Simuler un mois d\'abonnements', 'duree' => '1 h 30', 'texte' => 'Dans l\'environnement de test de la passerelle choisie, on crée une dizaine d\'abonnés fictifs, on provoque des renouvellements, des échecs, une résiliation et un changement de formule, puis on vérifie que le journal d\'événements reflète exactement ce qui s\'est passé.'],
                ['titre' => 'Décrocher un engagement', 'duree' => 'Avant le jour 4', 'texte' => 'Un acte qui coûte quelque chose au prospect : un rendez-vous de démonstration accepté, des données réelles fournies pour un essai, une lettre d\'intention, un acompte. Les engagements obtenus sont comparés en séance, sans jugement : un refus argumenté vaut aussi une leçon.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée, et quel suivi après la dernière séance ?',
            'intro' => 'La formation alterne séances en groupe et travail de terrain, parce qu\'aucune décision de produit ne se valide dans une salle. Chaque séance commence par le retour du terrain de chacun.',
            'items' => [
                ['titre' => 'Huit participants au plus', 'texte' => 'Chaque projet est discuté à chaque séance : fiche problème, prix, maquette, schéma de données. Au-delà de huit projets, ce temps de critique individuelle disparaît, et c\'est lui qui fait progresser.'],
                ['titre' => 'Des séances espacées', 'texte' => 'Quatre à six semaines entre la première et la dernière demi-journée laissent le temps de mener les entretiens, de tester la maquette et de présenter un prix. Une formation ramassée en quatre jours consécutifs produirait un dossier théorique.'],
                ['titre' => 'Votre projet, pas un cas d\'école', 'texte' => 'Tous les exercices portent sur le produit du participant. En intra, ils portent sur le projet de l\'organisation, avec des données fictives ; aucune donnée réelle de prospect ou de client n\'entre dans un outil de test.'],
                ['titre' => 'Des passerelles réelles, en mode test', 'texte' => 'Les paiements se font dans les environnements de test officiels de Stripe, de FedaPay ou de KkiaPay, avec leurs propres API et leurs notifications. On y voit les vrais messages d\'erreur et les vrais délais, sans qu\'un franc ne circule.'],
                ['titre' => 'Supports remis', 'texte' => 'Fiche problème, guide d\'entretien, modèle de grille tarifaire avec calcul de marge, gabarit de découpage du MVP, schéma multi-clients commenté, diagramme d\'états d\'abonnement, grille de contrôle des conditions générales et tableur de calcul des indicateurs.'],
                ['titre' => 'Suivi après la session', 'texte' => 'Selon ce que prévoit le devis : une revue du dossier un mois après la dernière séance, une relecture du code de paiement avant l\'activation des clés de production, ou un point avant la première démonstration commerciale importante.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils utilise-t-on pendant la formation, et que coûtent-ils ?',
            'legende' => 'Tarifs et fonctions relevés le 5 octobre 2026 sur les pages officielles citées dans les sources. Les comptes s\'ouvrent au nom du participant ou de son entreprise ; les frais d\'éditeur ne font pas partie du prix de la formation. Le détail des frais par pays et par opérateur figure dans le comparatif des passerelles.',
            'entetes' => ['Outil', 'Ce qu\'on en fait en formation', 'Coût publié par l\'éditeur'],
            'lignes'  => [
                ['Stripe (environnements de test)', 'Abonnements par carte, essais, relances, portail client, notifications signées dans l\'en-tête Stripe-Signature', 'Cartes standard de l\'EEE : 1,5 % + 0,25 € par paiement en France ; Stripe Billing à l\'usage : 0,7 % du volume facturé'],
                ['FedaPay (mode test)', 'Paiement mobile money et carte par l\'API, bibliothèques officielles PHP, Node.js et Ruby, notifications signées dans l\'en-tête X-FEDAPAY-SIGNATURE', 'Au Bénin : 1,8 % pour MTN, Moov et Celtiis, 3,6 % pour Visa et Mastercard ; aucun frais tant qu\'aucun paiement n\'est reçu'],
                ['KkiaPay (mode sandbox)', 'Widget de paiement activé en test par l\'attribut sandbox, numéros de test qui simulent succès, refus, fonds insuffisants et attente', 'Offre Intégration : 9 900 FCFA HT par mois au Bénin, frais par paiement selon le pays et le moyen de paiement'],
                ['Laravel Cashier', 'Abonnements Stripe côté serveur : essais, délai de grâce, changement de formule, factures PDF, réception des notifications', 'Bibliothèque gratuite ; version 16 documentée pour Laravel 13'],
                ['Tableur', 'Grille tarifaire, calcul de marge après frais, calcul du MRR et de l\'attrition sur le journal d\'événements exporté', 'Gratuit avec un tableur en ligne ou celui déjà installé'],
                ['Outil de maquette', 'Les cinq écrans du parcours principal, testés sur téléphone', 'Formule gratuite suffisante pour l\'exercice'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi chercher le premier client avant de construire le produit ?',
            'paragraphes' => [
                'Parce que c\'est la seule information qu\'aucun développement ne peut produire. Dans son essai « Do Things that Don\'t Scale », publié en juillet 2013, Paul Graham, cofondateur de Y Combinator, écrit que la tâche la plus courante qu\'un fondateur doive accomplir au départ, sans pouvoir l\'automatiser, est de recruter ses utilisateurs à la main. Il raconte comment les fondateurs de Stripe, au lieu d\'attendre les inscriptions, proposaient d\'installer leur outil sur-le-champ, sur l\'ordinateur de la personne qu\'ils venaient de convaincre.',
                'Ce conseil vaut davantage encore pour un SaaS vendu en Afrique francophone, où la vente passe par la recommandation, la démonstration en personne et le message WhatsApp bien plus que par l\'inscription en libre-service. Les premiers clients ne viennent pas d\'une publicité : ils viennent d\'un réseau professionnel, d\'une association de métier, d\'un ancien employeur. La formation fait dresser cette liste dès le premier jour, avec un nom et un moyen de contact par ligne.',
                'Construire après avoir parlé à des clients change aussi le produit. Les entretiens font presque toujours disparaître une fonction jugée indispensable et en font apparaître une autre, souvent plus simple : un export pour le comptable, un rappel par SMS, une impression au format attendu par une administration. Le MVP qui sort de ces échanges est plus petit que celui imaginé au départ, et il se vend mieux.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le mobile money dans la conception d\'un abonnement ?',
            'paragraphes' => [
                'Le mobile money n\'est pas un moyen de paiement d\'appoint. Selon le communiqué de la GSMA du 24 mars 2026, qui présente son rapport sur l\'état de l\'industrie, plus de 2 000 milliards de dollars ont transité par les portefeuilles mobiles dans le monde en 2025, pour 2,3 milliards de comptes enregistrés et 593 millions de comptes actifs sur 30 jours, la plupart des nouveaux comptes venant d\'Afrique subsaharienne. Un SaaS qui vise des PME béninoises, ivoiriennes ou togolaises doit donc encaisser ainsi, et la carte ne vient qu\'en complément.',
                'L\'exercice du troisième jour part d\'une contrainte que les participants découvrent souvent tard : un paiement mobile money se valide sur le téléphone du client, au moment du paiement. On ne débite pas un portefeuille chaque mois comme on débite une carte enregistrée. L\'abonnement se conçoit donc comme une suite d\'échéances, chacune avec sa facture, son lien de paiement, son rappel et son délai de grâce, et l\'accès n\'est prolongé qu\'à la confirmation reçue par le serveur.',
                'Cette contrainte se transforme en choix commerciaux que la formation fait trancher : proposer une période trimestrielle ou annuelle pour réduire le nombre de validations, fixer le nombre de jours de grâce, décider qui reçoit le rappel quand l\'abonné est une entreprise, garder la carte pour les clients qui en ont une. Le guide de test de KkiaPay simule d\'ailleurs une attente d\'une à deux minutes avant la validation : l\'interface doit afficher cet état d\'attente au lieu de laisser croire à un échec.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres publiés guident les choix de paiement d\'un SaaS ?',
            'items' => [
                ['valeur' => '2 000 milliards de dollars', 'libelle' => 'Valeur des transactions passées par le mobile money dans le monde en 2025 (communiqué du 24 mars 2026)', 'source' => 'GSMA, rapport sur l\'état de l\'industrie du mobile money', 'url' => 'https://www.gsma.com/newsroom/press-release/mobile-money-accounted-for-2-trillion-in-transactions-in-2025-doubling-since-2021-as-active-accounts-continue-to-grow/'],
                ['valeur' => '593 millions', 'libelle' => 'Comptes mobile money actifs sur 30 jours en 2025, en hausse de 15 %, sur 2,3 milliards de comptes enregistrés', 'source' => 'GSMA, communiqué du 24 mars 2026', 'url' => 'https://www.gsma.com/newsroom/press-release/mobile-money-accounted-for-2-trillion-in-transactions-in-2025-doubling-since-2021-as-active-accounts-continue-to-grow/'],
                ['valeur' => '1,8 %', 'libelle' => 'Frais FedaPay sur un paiement MTN, Moov ou Celtiis au Bénin, contre 3,6 % pour une carte Visa ou Mastercard (relevé le 5 octobre 2026)', 'source' => 'FedaPay, page Tarifs', 'url' => 'https://www.fedapay.com/pricing'],
                ['valeur' => '0,7 %', 'libelle' => 'Coût de Stripe Billing en paiement à l\'usage, en plus des frais de carte (1,5 % + 0,25 € pour une carte standard de l\'EEE), relevé le 5 octobre 2026', 'source' => 'Stripe, tarifs de Billing', 'url' => 'https://stripe.com/fr/billing/pricing'],
                ['valeur' => '3 jours', 'libelle' => 'Durée pendant laquelle Stripe retente la livraison d\'une notification non acquittée en production, sans garantir l\'ordre des événements', 'source' => 'Stripe, documentation des webhooks', 'url' => 'https://docs.stripe.com/webhooks'],
                ['valeur' => '10 essais', 'libelle' => 'Nombre d\'échecs de livraison après lesquels FedaPay désactive un webhook, après 9 nouvelles tentatives à intervalles exponentiels', 'source' => 'FedaPay, documentation des webhooks', 'url' => 'https://docs.fedapay.com/fr/integration-api/webhooks'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que retenir de ces chiffres au moment de coder le paiement ?',
            'paragraphes' => [
                'Les frais pèsent sur la marge plus qu\'on ne le croit. Un abonnement payé par carte en Europe supporte, chez Stripe au 5 octobre 2026, 1,5 % plus 0,25 € de frais de carte, auxquels s\'ajoutent 0,7 % pour Stripe Billing en formule à l\'usage. Au Bénin, FedaPay prélève 1,8 % sur un paiement mobile money MTN, Moov ou Celtiis. Sur une formule à quelques milliers de francs CFA par mois, la part fixe et la fréquence des paiements comptent : c\'est l\'une des raisons de proposer un paiement trimestriel. Le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, KkiaPay et CinetPay</a> détaille le reste.',
                'Les notifications, elles, imposent une discipline de code. Stripe retente la livraison pendant trois jours en production, ne garantit pas l\'ordre des événements et peut en envoyer deux pour le même objet ; ses bibliothèques refusent par défaut une signature vieille de plus de cinq minutes. FedaPay retente neuf fois, puis désactive le point de réception après dix échecs. Le code de réception doit donc vérifier la signature, répondre immédiatement, traiter chaque événement une seule fois, et relire l\'état réel du paiement avant d\'agir.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment calcule-t-on le MRR et le churn pendant l\'exercice final ?',
            'paragraphes' => [
                'Les définitions suivent celles de la documentation des analyses de Stripe, consultée le 5 octobre 2026, parce qu\'elles sont précises et publiques. Le MRR y est la somme de la valeur mensualisée des abonnements actifs ou en retard de paiement, hors taxes et hors offres gratuites ; un abonnement annuel y compte pour un douzième. Le taux d\'attrition des abonnés rapporte les abonnés perdus sur 30 jours au nombre d\'abonnés actifs 30 jours plus tôt, augmenté des nouveaux abonnés de la période. Le revenu moyen par abonné divise le MRR par le nombre d\'abonnés actifs.',
                'L\'exercice se fait sur un journal fictif, en francs CFA. Une école de gestion compte 40 établissements abonnés à 15 000 FCFA par mois et 10 abonnés annuels à 150 000 FCFA : le MRR vaut 600 000 plus 125 000, soit 725 000 FCFA. Si 3 abonnés partent dans le mois alors que 50 étaient actifs au début et que 10 nouveaux sont arrivés, le taux d\'attrition est de 3 sur 60, soit 5 %. Ces montants sont inventés pour l\'exercice ; chaque participant refait ensuite le calcul avec les hypothèses de son propre produit.',
                'Le piège propre au mobile money vient ensuite. Un abonné dont l\'échéance est passée mais qui paiera dans trois jours n\'est pas un client perdu. Le journal garde donc deux dates, l\'échéance attendue et le paiement réel, et la règle qui fait basculer un abonné en attrition est écrite à l\'avance : fin du délai de grâce, ou résiliation explicite. Sans cette règle, le taux d\'attrition grimpe chaque fin de mois puis redescend, et plus personne ne le croit.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert la formation selon le projet, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Logiciel pour écoles privées, Cotonou ou Porto-Novo', 'probleme' => 'Un ancien directeur d\'établissement veut vendre un outil de gestion des notes et des frais de scolarité, mais hésite entre un prix par école et un prix par élève, et ne sait pas comment encaisser des écoles qui paient par mobile money.', 'solution' => 'Entretiens avec huit directeurs, grille par tranche d\'effectif, abonnement trimestriel calé sur le calendrier scolaire, renouvellement actif par FedaPay testé en mode test, et une école pilote engagée par lettre d\'intention avant le premier développement.'],
                ['secteur' => 'Cabinet comptable qui veut devenir éditeur, Abidjan', 'probleme' => 'Le cabinet a développé un outil de collecte des pièces pour ses propres clients et veut le vendre à d\'autres cabinets, sans exposer les dossiers d\'un cabinet à un autre.', 'solution' => 'Passage d\'un outil mono-client à un modèle par organisation, test d\'isolation exigé du développeur, rôle d\'éditeur sous-traitant des données déposées par les cabinets, et clauses correspondantes dans les conditions générales.'],
                ['secteur' => 'Développeur indépendant, Dakar ou Lomé', 'probleme' => 'Il a construit pendant un an un outil de réservation complet, sans aucun client payant, et ne sait plus s\'il doit continuer.', 'solution' => 'Retour au problème : dix entretiens auprès de trois métiers différents, choix d\'une seule cible, réduction du produit à un parcours, prix présenté à deux prospects. La décision de continuer ou d\'arrêter se prend sur des faits, à une date fixée d\'avance.'],
                ['secteur' => 'Fondateur en France ou en Belgique, clients des deux côtés', 'probleme' => 'Un SaaS pour artisans vendu en Europe par carte veut s\'ouvrir à des clients d\'Afrique de l\'Ouest, où Stripe n\'ouvre pas de compte marchand dans la plupart des pays.', 'solution' => 'Deux passerelles derrière une même couche de paiement dans le code : Stripe Billing en Europe, KkiaPay ou FedaPay en Afrique de l\'Ouest avec renouvellement actif ; un seul journal d\'événements pour calculer le MRR en deux devises.'],
                ['secteur' => 'Agence web qui refait le même outil, Bénin ou Togo', 'probleme' => 'L\'agence livre à chaque client une variante du même extranet, avec un code par client et des mises à jour refaites dix fois.', 'solution' => 'Inventaire des différences réelles entre clients, transformation en paramètres d\'organisation, grille de trois formules, et plan de migration des clients existants vers la plateforme commune, un par un.'],
                ['secteur' => 'Association professionnelle, Suisse ou Canada', 'probleme' => 'Une association veut proposer à ses membres un outil de suivi réglementaire payant, mais ignore si les membres paieront un abonnement en plus de leur cotisation.', 'solution' => 'Pré-vente auprès des membres avant tout développement, formule annuelle réglée par carte, conditions générales relues par un juriste du pays, et seuil d\'inscriptions fixé pour décider du lancement.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : comment la formation s\'organise-t-elle ?',
            'legende' => 'Les quatre formats couvrent le même programme. Le choix dépend du nombre de projets, de la confidentialité du produit et de la dispersion des participants.',
            'entetes' => ['Format', 'Pour qui', 'Organisation', 'Calendrier'],
            'lignes'  => [
                ['Intra-entreprise', 'Une équipe qui porte un seul produit : agence, éditeur, service interne', 'Tous les exercices sur le produit de l\'organisation ; décisions de prix et de périmètre prises en séance avec les personnes qui les assument', '8 demi-journées sur 4 à 6 semaines, dans vos locaux ou à distance'],
                ['Inter-entreprises', 'Porteurs de projet et développeurs indépendants, chacun avec son produit', 'Chaque projet reste confidentiel dans ses chiffres ; le groupe critique les fiches problème et les grilles tarifaires, pas le code interne', 'Même rythme, avec un groupe de huit au plus'],
                ['À distance', 'Fondateurs dispersés entre l\'Afrique de l\'Ouest, l\'Europe et le Canada', 'Visioconférence avec partage d\'écran, séances de trois heures et demie au plus, travail de terrain entre deux séances', 'Créneaux calés sur les fuseaux horaires du groupe'],
                ['Hybride', 'Groupes qui veulent se rencontrer au lancement', 'Première journée en salle à Cotonou ou chez vous pour les fiches problème, suite à distance, restitution finale en salle si possible', 'Sur 4 à 6 semaines'],
                ['Accompagnement individuel', 'Un fondateur seul, à un moment précis de son projet', 'Les modules utiles seulement, par exemple le paiement et l\'abonnement avant une mise en production', 'Selon le besoin, sur devis'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation Créer son SaaS, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Aucun montant n\'est publié : la formation est chiffrée sur devis, une fois le projet et le format connus. Le premier échange, le cadrage et le devis ne coûtent rien. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les frais des passerelles, de l\'hébergement et des outils restent payés directement aux éditeurs, au nom du participant.',
            'items'      => [
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Huit demi-journées sur 4 à 6 semaines', 'Critique du projet de chacun à chaque séance', 'Paiements simulés dans un environnement de test officiel', 'Supports, gabarits et attestation de fin de formation']],
                ['offre' => 'Modules ciblés', 'prix' => 'Sur devis', 'inclus' => ['Problème, offre et prix', 'Ou architecture multi-clients et abonnement', 'Ou paiement, conditions générales et indicateurs']],
                ['offre' => 'Suivi du lancement', 'prix' => 'Sur devis', 'inclus' => ['Revue du dossier un mois après la formation', 'Relecture du code de paiement avant la production', 'Point avant une démonstration commerciale']],
            ],
            'variations' => [
                'Le nombre de participants et de projets, huit au plus par groupe.',
                'La formule : formation complète, modules ciblés ou accompagnement individuel.',
                'Le mode : à distance, à Cotonou, dans vos locaux, ou hybride avec déplacement.',
                'La préparation d\'exercices sur votre propre produit et vos propres données fictives, en intra.',
                'La langue des séances et des supports, en français ou en anglais.',
                'La durée et la forme du suivi prévu après la dernière séance.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il prendre en charge cette formation ?',
            'paragraphes' => [
                'Cela dépend du fonds, du statut de l\'entreprise et du prestataire ; aucune prise en charge n\'est promise ici. Les règles relevées le 5 octobre 2026 sur les pages officielles donnent les points à vérifier. En Côte d\'Ivoire, les <a href="https://fdfp.ci/procedures-dhabilitation/">procédures d\'habilitation du FDFP</a> exigent l\'habilitation de tout opérateur de formation privé qui veut bénéficier de ses financements, exemptent les structures basées hors du pays et accordent l\'habilitation pour une année. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>.',
                'Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> ouvre un guichet pour le personnel des entreprises et des organisations professionnelles et un autre pour les demandes individuelles, avec une demande de financement en ligne. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que, depuis le 1er janvier 2022, l\'accès aux fonds publics ou mutualisés, dont ceux des OPCO, exige la certification Qualiopi. Richard SALANON n\'affiche ni certification Qualiopi ni habilitation d\'un fonds : demandez une réponse écrite au fonds, programme et devis en main, et bâtissez votre budget comme si la prise en charge était refusée.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle erreur fait perdre le plus de temps dans les mois qui suivent la formation ?',
            'texte' => 'Prendre l\'intérêt poli pour un engagement. Après la formation, les entretiens continuent, et chaque « c\'est une bonne idée, tenez-moi au courant » est noté comme un futur client. Trois mois plus tard, le produit est prêt et personne ne signe. La parade enseignée est simple à appliquer : ne compter que ce qui coûte quelque chose au prospect, comme un deuxième rendez-vous, des données réelles confiées pour un essai, une lettre d\'intention ou un acompte, et fixer à l\'avance la date et le seuil d\'engagements qui décideront de continuer, de changer de cible ou d\'arrêter.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles autres erreurs voit-on au lancement, et comment les éviter ?',
            'intro' => 'Ces erreurs reviennent chez les fondateurs qui codent comme chez ceux qui font développer. Elles sont discutées en séance à partir des dossiers des participants.',
            'items' => [
                ['titre' => 'Écrire les prix dans le code', 'texte' => 'Un tarif inscrit en dur oblige à redéployer l\'application pour une promotion ou une hausse. Les formules vivent dans la base ou chez la passerelle, et chaque facture garde le prix du jour où elle a été émise.'],
                ['titre' => 'Coder une seule passerelle partout', 'texte' => 'Le jour où un client d\'un autre pays arrive, tout le paiement est à reprendre. Une couche commune (créer un paiement, recevoir sa confirmation, prolonger l\'abonnement) permet d\'ajouter Stripe, FedaPay ou KkiaPay sans toucher au reste.'],
                ['titre' => 'Traiter deux fois la même notification', 'texte' => 'Une notification reçue en double prolonge l\'abonnement de deux mois ou envoie deux factures. On enregistre l\'identifiant de chaque événement traité et on ignore celui qui revient.'],
                ['titre' => 'Mélanger clés de test et clés de production', 'texte' => 'Des clés de production dans un poste de développement, ou de test sur le serveur en ligne : les paiements disparaissent ou partent pour de vrai. Chaque environnement a ses clés, rangées hors du code.'],
                ['titre' => 'Tenir les indicateurs à la main', 'texte' => 'Un MRR recopié chaque mois dans un tableur finit par diverger de la réalité. Les indicateurs se calculent à partir du journal d\'événements de la plateforme, jamais d\'une saisie.'],
                ['titre' => 'Copier les conditions générales d\'un concurrent', 'texte' => 'Elles décrivent un autre produit, un autre pays et parfois un autre droit. La grille de la formation liste les décisions à prendre ; un juriste du pays de vente les met en forme.'],
                ['titre' => 'Offrir l\'essai sans limite claire', 'texte' => 'Un essai gratuit sans date de fin ni conversion prévue remplit la base d\'utilisateurs qui ne paieront jamais. Durée, fonctions accessibles et moment de la demande de paiement se décident avant l\'ouverture.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, pays de vente, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'Le pays de vos clients décide de la passerelle avant même la technique. Le 5 octobre 2026, la <a href="https://stripe.com/fr/global">page de disponibilité de Stripe</a> ne cite ni le Bénin, ni le Sénégal, ni le Togo, ni le Cameroun, et range la Côte d\'Ivoire dans son « réseau étendu ». La <a href="https://docs.fedapay.com/fr/payment-methods">documentation de FedaPay</a> liste par pays des opérateurs différents : MTN, Moov, Celtiis, BMO et Coris Money au Bénin, Mixx By Yas et Moov au Togo, MTN en Côte d\'Ivoire, Airtel au Niger, Free au Sénégal. La formation fait donc vérifier, pays par pays, l\'opérateur réellement utilisé par la cible.',
                'Les données personnelles arrivent avec le premier compte créé. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> encadre les traitements, et la <a href="https://archive.apdp.bj/procedures/">page des procédures de l\'APDP</a> demande à tout responsable de traitement une déclaration, ou une autorisation pour les données sensibles ; l\'autorité dispose de deux mois pour répondre. Un éditeur qui veut ouvrir à une date précise dépose donc son dossier tôt, pendant le développement du MVP.',
                'En Europe, l\'éditeur d\'un SaaS est le plus souvent sous-traitant de ses clients pour les données qu\'ils déposent. L\'article 28 du RGPD, publié par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4">CNIL</a>, lui interdit de recruter un autre sous-traitant sans autorisation écrite et lui impose de supprimer ou de rendre les données en fin de prestation ; l\'article 30 lui fait tenir un registre des traitements menés pour chaque client. Le <a href="https://www.cnil.fr/fr/guide-rgpd-du-developpeur">guide RGPD du développeur</a> de la CNIL sert de liste de contrôle pour l\'équipe technique. Le cadre plus large est traité dans la <a href="/formations/ia-ethique-conformite">formation IA, éthique et conformité</a>.',
                'Pour les conditions générales, une règle française surprend souvent les fondateurs qui vendent aux entreprises : l\'<a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000038414469">article L441-1 du code de commerce</a>, dans sa version en vigueur depuis le 26 avril 2019, oblige le prestataire qui a établi des conditions générales de vente à les communiquer à tout acheteur professionnel qui les demande, sur un support durable, sous peine d\'une amende administrative pouvant atteindre 15 000 € pour une personne physique et 75 000 € pour une personne morale. Côté connexion, les écrans du MVP sont testés sur un Android d\'entrée de gamme et un réseau lent, puisque c\'est ainsi que beaucoup de clients les ouvriront.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre à lancer un SaaS avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il ne parle pas du lancement d\'un produit en observateur. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, qu\'il a conçu, développé et qu\'il continue de faire évoluer ; il est aussi co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Les arbitrages au cœur de la formation (ce qu\'on lance d\'abord, ce qui attend, le prix à annoncer, la façon d\'encaisser) sont ceux qu\'un fondateur affronte lui-même, et non une théorie de manuel.',
                'Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il développe des applications web et mobiles, des intégrations par API et des automatisations, et il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA et aux outils de gestion. Ses missions l\'ont mené dans ' . count(fait('pays_travailles')) . ' pays d\'Afrique francophone, d\'Europe et d\'Amérique du Nord, où il a vu les deux mondes de paiement que doit souvent réunir un SaaS.',
                'Sa façon de former tient en quelques engagements que l\'on peut vérifier : huit projets au plus par groupe, du terrain entre chaque séance, des paiements simulés sur les API officielles sans aucune transaction réelle, aucune promesse de clients ou de revenus, et une réponse franche quand le projet a d\'abord besoin d\'une autre formation, ou d\'une prestation. Son parcours est sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/developpement">formations au développement</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer son SaaS ?',
            'texte' => 'Écrivez le problème avant la solution, présentez un prix avant d\'écrire du code, ne comptez que les engagements qui coûtent quelque chose au prospect, isolez les données de chaque client dès la première table, concevez le renouvellement mobile money comme un paiement à chaque échéance, et calculez vos indicateurs à partir des événements de la plateforme. Pour l\'acquisition de clients professionnels, la <a href="/formations/marketing-digital-b2b">formation marketing digital B2B</a> prend le relais ; le reste du catalogue est sur la page <a href="/formations/">formations</a>.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez un produit à vendre par abonnement et voulez signer votre premier client ?',
            'texte'  => 'Décrivez le problème que vous résolvez, la cible, les pays de vos futurs clients, où en est votre projet et si vous codez vous-même : vous recevez une réponse sous 24 heures, puis une proposition de format et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation Créer son SaaS'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir coder pour suivre la formation Créer son SaaS ?', 'r' => 'Non, mais il faut être prêt à piloter un développeur. Les porteurs de produit qui ne codent pas font les mêmes exercices d\'architecture et de paiement sous forme d\'exigences écrites, de schémas et de scénarios de test, qu\'ils remettront à leur équipe technique. Ceux qui codent les appliquent directement dans leur dépôt.'],
        ['q' => 'Faut-il déjà avoir un produit en ligne ?', 'r' => 'Non. Un problème identifié chez des clients que vous pouvez joindre suffit pour commencer. Si un produit existe déjà, il devient le support des exercices, et la formation sert souvent à le recentrer sur un parcours et une cible avant d\'aller chercher les premiers abonnés.'],
        ['q' => 'Pourquoi la formation est-elle étalée sur plusieurs semaines ?', 'r' => 'Parce que les décisions se valident sur le terrain. Entre deux séances, chaque participant mène des entretiens, présente son prix, fait tester sa maquette et cherche un engagement. Quatre jours consécutifs laisseraient un dossier théorique, sans aucun retour de prospect.'],
        ['q' => 'Quelles passerelles de paiement utilise-t-on pendant la formation ?', 'r' => 'Celles qui correspondent aux pays de vos clients : Stripe pour la carte et le prélèvement en Europe et au Canada, FedaPay ou KkiaPay pour le mobile money en Afrique de l\'Ouest. Tous les essais se font dans leurs environnements de test officiels, sans transaction réelle ; les comptes sont ouverts à votre nom.'],
        ['q' => 'Peut-on prélever chaque mois un abonné qui paie par mobile money ?', 'r' => 'Pas comme une carte enregistrée : le paiement mobile money se valide sur le téléphone du client. La formation apprend à concevoir un renouvellement actif, avec facture, lien de paiement, rappel et délai de grâce à chaque échéance, et à proposer des périodes plus longues pour réduire le nombre de validations.'],
        ['q' => 'La formation rédige-t-elle nos conditions générales ?', 'r' => 'Non. Elle fournit une grille des décisions à prendre (durée, renouvellement, impayé, suspension, résiliation, sort des données, niveau de service) et explique les règles qui pèsent sur un SaaS. La rédaction revient à un juriste du pays où vous vendez.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Elle est chiffrée sur devis, après un premier échange gratuit. Le prix dépend du nombre de projets, de la formule (complète, modules ciblés ou accompagnement individuel), du mode, de la préparation d\'exercices sur votre produit en intra et du suivi prévu. Les frais des passerelles et des outils se paient à part, aux éditeurs.'],
        ['q' => 'Quelle différence avec la prestation SaaS et espace client ?', 'r' => 'La prestation conçoit et développe la plateforme pour vous. La formation vous apprend à décider : quelle cible, quel prix, quel MVP, quelle architecture, quel paiement, quels indicateurs. Certains fondateurs suivent la formation avant de commander le développement, pour cadrer et relire ce qui leur sera livré.'],
        ['q' => 'Quelle formation suivre avant, si je veux coder mon SaaS moi-même ?', 'r' => 'Si vous partez de zéro, la formation au développement web. Si vous écrivez déjà du PHP ou du JavaScript, la formation Laravel et PHP ou la formation Next.js et React. Pour un prototype rapide avec un assistant d\'IA, la formation vibecoding. Le test de positionnement indique l\'ordre le plus utile.'],
        ['q' => 'Peut-on suivre la formation à plusieurs fondateurs du même projet ?', 'r' => 'Oui, et c\'est souvent préférable : les décisions de prix, de périmètre et de cible se prennent alors en séance avec les personnes qui les assumeront. Un projet compte pour un seul des huit projets du groupe, quel que soit le nombre d\'associés présents.'],
        ['q' => 'La formation peut-elle être financée par le FDFP, le 3FPT ou un OPCO ?', 'r' => 'Cela dépend des règles de chaque fonds. Le FDFP exige l\'habilitation des opérateurs privés, sauf ceux basés hors de Côte d\'Ivoire, et les OPCO exigent la certification Qualiopi, que Richard SALANON n\'affiche pas. Interrogez le fonds par écrit avant de vous engager et prévoyez le budget sans prise en charge.'],
    ],

    'sources' => [
        ['titre' => 'Paul Graham, « Do Things that Don\'t Scale », juillet 2013', 'url' => 'https://paulgraham.com/ds.html', 'date' => '2026-10-05'],
        ['titre' => 'GSMA, communiqué du 24 mars 2026 sur le rapport State of the Industry on Mobile Money', 'url' => 'https://www.gsma.com/newsroom/press-release/mobile-money-accounted-for-2-trillion-in-transactions-in-2025-doubling-since-2021-as-active-accounts-continue-to-grow/', 'date' => '2026-10-05'],
        ['titre' => 'Stripe, tarifs en France (cartes, prélèvements, Billing)', 'url' => 'https://stripe.com/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Stripe, tarification de Stripe Billing', 'url' => 'https://stripe.com/fr/billing/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Stripe, disponibilité mondiale par pays', 'url' => 'https://stripe.com/fr/global', 'date' => '2026-10-05'],
        ['titre' => 'Stripe, documentation : environnements de test', 'url' => 'https://docs.stripe.com/sandboxes', 'date' => '2026-10-05'],
        ['titre' => 'Stripe, documentation : webhooks (signature, nouvelles tentatives, ordre et doublons)', 'url' => 'https://docs.stripe.com/webhooks', 'date' => '2026-10-05'],
        ['titre' => 'Stripe, documentation : analyses Billing (MRR, attrition, ARPU, conversion des essais)', 'url' => 'https://docs.stripe.com/billing/subscriptions/analytics', 'date' => '2026-10-05'],
        ['titre' => 'Laravel 13, documentation de Cashier (Stripe)', 'url' => 'https://laravel.com/docs/13.x/billing', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, page Tarifs', 'url' => 'https://www.fedapay.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, documentation : webhooks', 'url' => 'https://docs.fedapay.com/fr/integration-api/webhooks', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, documentation : librairies', 'url' => 'https://docs.fedapay.com/fr/integration-api/librairies', 'date' => '2026-10-05'],
        ['titre' => 'FedaPay, documentation : méthodes de paiement par pays', 'url' => 'https://docs.fedapay.com/fr/payment-methods', 'date' => '2026-10-05'],
        ['titre' => 'KkiaPay, page Tarifs', 'url' => 'https://kkiapay.me/tarifs/', 'date' => '2026-10-05'],
        ['titre' => 'KkiaPay, documentation : SDK JavaScript (mode sandbox)', 'url' => 'https://docs.kkiapay.me/v1/plugin-et-sdk/sdk-javascript', 'date' => '2026-10-05'],
        ['titre' => 'KkiaPay, documentation : guide de test en sandbox', 'url' => 'https://docs.kkiapay.me/v1/compte/kkiapay-sandbox-guide-de-test', 'date' => '2026-10-05'],
        ['titre' => 'Légifrance, article L441-1 du code de commerce', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000038414469', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, RGPD chapitre IV (articles 28 et 30)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, guide RGPD du développeur', 'url' => 'https://www.cnil.fr/fr/guide-rgpd-du-developpeur', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'APDP du Bénin, procédures et formalités préalables', 'url' => 'https://archive.apdp.bj/procedures/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, procédures d\'habilitation des opérateurs de formation', 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['vibecoding', 'laravel-php', 'nextjs-react', 'api-rest', 'developpement-web', 'marketing-digital-b2b'],
        'services'    => ['saas-espace-client', 'vibe-coding', 'audit-etude-de-projet'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
