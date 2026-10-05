<?php
// ============================================================
// data/metiers/commerciaux.php · Page « formations par métier » :
// commerciaux et vendeurs, terrain ou sédentaires (vague 1C, univers
// Commerce et communication, non prioritaire, statut F : Richard a déjà
// formé ce public). Angle propre : la semaine du commercial (prospection,
// préparation des rendez-vous, devis et propositions, négociation, suivi
// des affaires, tournées, reporting, données des prospects). La page oriente
// vers crm-pipeline, marketing-digital-b2b, linkedin-reseaux-sociaux et
// whatsapp-business sans reprendre leur texte, ni celui de la page des
// commerçants (boutique, caisse, stock, livraison).
// Faits relevés le 05/10/2026 : Acte uniforme OHADA portant sur le droit
// commercial général (articles 216 à 219, 234, 235, 240 à 245 et 249),
// loi béninoise n° 2017-20 (articles 332, 334 et 401), CNIL (géolocalisation
// des véhicules des salariés, écoute et enregistrement des appels,
// prospection téléphonique depuis le 11 août 2026, questions-réponses sur le
// règlement européen sur l'IA mises à jour le 17 août 2026), Eurostat
// (11 décembre 2025), DataReportal Digital 2026 Bénin, FDFP, 3FPT, décret
// FODEFCA, France Compétences ; faits vérifiés du catalogue (article 4 du
// règlement sur l'IA, tarifs de Meta pour WhatsApp, tarifs d'Odoo).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'       => "Formation numérique et IA pour commerciaux : prospecter dans les règles, préparer chaque rendez-vous, envoyer des devis justes et suivre ses affaires sans y laisser ses soirées",
    'title'       => 'Formation numérique et IA des commerciaux | Richard SALANON',
    'meta'        => "Formation des commerciaux terrain et sédentaires : prospection, rendez-vous, devis, suivi des affaires, tournées et IA, sur vos outils. Prix sur devis.",
    'en_bref'     => "Cette page présente le parcours conçu pour les commerciaux, les vendeurs terrain et sédentaires, les chargés d'affaires et leur responsable : tenir un fichier de prospects propre et légal, préparer un rendez-vous en vingt minutes, chiffrer et faire valider un devis, suivre ses affaires et ses tournées, rendre compte en dix minutes, et se servir de l'IA sans lui confier ni les prix ni les clients. Le parcours type dure deux jours en quatre demi-journées, suivis d'une séance de suivi à distance. Il se tient dans vos locaux, entre entreprises, à distance ou en formule hybride, sur vos outils et vos comptes réels. Son prix est fixé sur devis.",
    'publie'      => '2026-10-22',
    'maj'         => '2026-10-05',
    'univers'     => 'Commerce et communication',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : le fichier et l'agenda du commercial, d'où viennent les contacts et où passe la semaine",
            'duree'  => '3 h 30',
            'points' => [
                "Inventaire des endroits où dorment aujourd'hui les contacts : téléphone personnel, cartes de visite, carnet, groupes WhatsApp, tableur, CRM, boîte de réception.",
                "La fiche minimale d'un compte et de ses interlocuteurs, avec l'origine de chaque contact et, quand la loi l'exige, la preuve de son accord.",
                "Le principe qui protège l'entreprise et le vendeur : le numéro, la messagerie et le fichier appartiennent à l'entreprise, pas à la personne qui les utilise.",
                "Le plan de semaine en blocs : prospection, rendez-vous, tournée, administration des ventes, temps de réponse aux clients.",
                "La tournée construite sur le potentiel des comptes et la géographie, et non sur l'habitude ou l'accueil le plus chaleureux.",
                "Exercice de contrôle : chacun reconstruit sa semaine passée à partir de son agenda et de son téléphone, puis replanifie la suivante.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : préparer un rendez-vous en vingt minutes et en rendre compte le jour même, avec l'IA comme assistant",
            'duree'  => '3 h 30',
            'points' => [
                "La fiche de préparation : ce que l'on sait du compte, l'historique d'achats, les réclamations en cours, l'objectif du rendez-vous et l'étape suivante visée.",
                "Recherche sur le compte à partir de sources publiques avec un assistant d'IA, puis vérification de chaque affirmation à la source.",
                "Entraînement aux objections avec un assistant qui joue l'acheteur pressé, le directeur financier méfiant ou le gérant qui compare trois offres.",
                "Le compte rendu dicté en note vocale à la sortie du rendez-vous, transcrit, mis en forme et relu avant d'entrer dans l'outil.",
                "Ce que l'on ne dicte et ne saisit jamais : santé, opinions, vie privée, appréciations sur la personne.",
                "Exercice de contrôle : un rendez-vous réel de la semaine préparé, joué à deux, puis rapporté en cinq lignes relues par un collègue.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : du besoin au devis, chiffrer juste, faire valider, envoyer et garder la trace",
            'duree'  => '3 h 30',
            'points' => [
                "La grille de prix et de remise à jour, et la règle écrite : jusqu'où le commercial accorde seul une remise, et qui valide au-delà.",
                "Le modèle de devis ou de proposition dans l'outil de l'entreprise : désignation, quantités, prix, durée de validité, conditions de paiement et de livraison, acompte.",
                "Ce qu'une proposition engage : l'offre, son délai d'acceptation et la contre-proposition, selon l'Acte uniforme OHADA sur le droit commercial général.",
                "Le texte qui accompagne le devis, préparé avec un assistant d'IA à partir du compte rendu, sans qu'il invente un prix, un délai ou une garantie.",
                "L'envoi par e-mail ou par WhatsApp, la copie systématique dans l'outil et la numérotation des versions quand le client renégocie.",
                "Exercice de contrôle : un devis réel établi, contrôlé par le responsable des ventes, puis comparé à la grille de remise.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : suivre ses affaires, rendre compte en dix minutes et fixer les règles d'usage de l'IA",
            'duree'  => '3 h 30',
            'points' => [
                "La liste personnelle des affaires ouvertes, chacune avec sa prochaine action datée ; la méthode complète du pipeline relève de la formation CRM du catalogue.",
                "Le rapport de la semaine tiré de l'outil plutôt que réécrit : visites, rendez-vous tenus, devis émis, montants signés, encaissements attendus.",
                "Les chiffres que le commercial lit lui-même chaque lundi, avant que son responsable ne les lui demande.",
                "La charte d'usage de l'IA de l'équipe, sur une page : outils autorisés, données interdites, relecture obligatoire, traçabilité.",
                "Le cycle de vie des données des prospects : oppositions enregistrées, purge régulière, passation du portefeuille quand un commercial part.",
                "Exercice de contrôle : chacun présente sa semaine suivante planifiée, trois affaires suivies et son rapport généré par l'outil.",
            ],
        ],
        [
            'titre'  => "Séance de suivi, quatre semaines plus tard : ce que le terrain a gardé",
            'duree'  => '2 h, à distance',
            'points' => [
                "Lecture des rapports des quatre semaines et des comptes rendus saisis depuis la session.",
                "Revue des devis envoyés : versions, remises accordées, délais de réponse, signatures obtenues ou perdues.",
                "Correction de la charte d'usage de l'IA à partir des cas réellement rencontrés.",
                "Décision écrite sur la suite : formation complémentaire, réglage de l'outil, ou rien de plus pour l'instant.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Commerciaux terrain et sédentaires, vendeurs, chargés d\'affaires, responsables des ventes'],
        ['l' => 'Durée', 'v' => 'Deux jours en quatre demi-journées, puis une séance de suivi de deux heures'],
        ['l' => 'Formats', 'v' => 'Intra, inter-entreprises, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que changent l'IA, la digitalisation et l'automatisation pour un commercial ?",
            'paragraphes' => [
                "Un commercial vend avec trois ressources rares : son temps, sa mémoire des clients et la confiance qu'on lui accorde. Le numérique touche les trois. Sur le terrain, à Cotonou, à Abidjan ou à Douala, une bonne part de la journée se perd entre deux rendez-vous, dans les embouteillages, dans la recherche d'un prix à jour ou dans la reconstitution, le soir, de ce qui a été promis le matin. Au bureau, le vendeur sédentaire jongle entre le téléphone, la messagerie, les e-mails et un logiciel que personne ne lui a vraiment appris à utiliser.",
                "La digitalisation, pour un commercial, consiste d'abord à rassembler ce qui est dispersé : un seul fichier de comptes et de contacts, un agenda qui dit où il sera, un modèle de devis qui sort les bons prix, une liste d'affaires ouvertes avec leur prochaine étape. L'automatisation vient ensuite, pour ce qui se répète sans demander de jugement : le rappel d'un rendez-vous, l'enregistrement d'un devis dans l'outil, le rapport de la semaine qui se calcule seul au lieu d'être recopié le vendredi soir.",
                "L'intelligence artificielle, elle, change surtout le travail d'écriture et de préparation. Un assistant résume en deux minutes le site et les publications d'un compte avant une visite, transforme une note vocale dictée dans la voiture en compte rendu structuré, propose le texte qui accompagne un devis ou joue l'acheteur difficile pour s'entraîner. Il fait gagner un temps réel, à une condition : que le commercial vérifie tout ce qui touche à un prix, à une promesse ou à une personne, parce que c'est lui, et l'entreprise derrière lui, qui en répondent.",
                "Richard SALANON n'est pas commercial de métier et ne prétend pas apprendre à vendre à ceux qui le font tous les jours : l'écoute, la négociation, le sens du moment restent les vôtres. Il forme à l'usage des outils qui soutiennent ce métier, sur votre fichier, votre agenda, vos modèles de devis et vos téléphones, et vous oriente vers les formations détaillées du catalogue quand une étape mérite plus de temps.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Où passe la semaine d'un commercial, et qu'est-ce qui peut changer à chaque étape ?",
            'legende' => "Situation la plus fréquente avant la formation, apport des outils et de l'IA, et ce qui reste la responsabilité du commercial. Les étapes valent pour la vente terrain comme pour la vente au téléphone.",
            'entetes' => ['Étape', 'Ce qui coince le plus souvent', 'Avec des outils numériques', 'Ce que l\'IA peut apporter', 'Ce qui reste au commercial'],
            'lignes'  => [
                ['Prospection', 'Des numéros récupérés partout, sans origine ni accord', 'Fichier unique, origine de chaque contact, liste des oppositions', 'Résumer ce qu\'un compte publie, proposer un premier message à réécrire', 'Choisir à qui écrire, et par quel canal la loi le permet'],
                ['Préparation du rendez-vous', 'On arrive chez le client sans relire l\'historique', 'Fiche du compte ouverte sur le téléphone avant d\'entrer', 'Lister les questions utiles, simuler les objections', 'Fixer l\'objectif du rendez-vous'],
                ['Rendez-vous', 'Les engagements se notent sur un coin de carnet', 'Prise de notes dans l\'application mobile ou note vocale', 'Rien pendant l\'échange : le client parle à une personne', 'Écouter, questionner, conclure sur une étape suivante'],
                ['Compte rendu', 'Écrit de mémoire le vendredi, quand il l\'est', 'Saisi le jour même, rattaché au compte', 'Transcrire et structurer la note vocale', 'Relire, corriger, retirer toute appréciation sur la personne'],
                ['Devis et proposition', 'Prix recopiés d\'un ancien devis, remise improvisée', 'Modèle relié à la grille de prix, validation au-delà d\'un seuil', 'Rédiger le texte d\'accompagnement', 'Chiffrer, faire valider, signer'],
                ['Négociation', 'Remise accordée au téléphone, absente du document', 'Nouvelle version numérotée du devis à chaque concession', 'Préparer les arguments et les contreparties possibles', 'Décider de la concession dans la limite fixée'],
                ['Relance et suivi', 'On relance quand on y pense', 'Prochaine action datée sur chaque affaire', 'Proposer une relance qui apporte une information nouvelle', 'Juger du bon moment, ou clore l\'affaire'],
                ['Tournée', 'Itinéraire dicté par l\'habitude', 'Comptes classés par potentiel et par zone, fréquence de visite écrite', 'Regrouper les visites d\'une zone', 'Arbitrer entre clients fidèles et comptes à conquérir'],
                ['Reporting', 'Tableau recopié à la main pour le chef', 'Rapport tiré de l\'outil, lu chaque lundi', 'Résumer la semaine en quelques lignes à partir des chiffres', 'Expliquer les écarts et annoncer ce qui vient'],
                ['Passage à l\'administration des ventes', 'Commande transmise par message, perdue en route', 'Devis accepté transformé en commande dans l\'ERP', 'Aucun rôle utile : la saisie doit être exacte', 'Vérifier conditions, livraison et acompte'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ne doivent jamais faire l'IA et l'automatisation dans le travail d'un commercial, et quels textes le disent ?",
            'intro' => "Un commercial engage son entreprise par ce qu'il écrit, envoie et promet, qu'il l'ait rédigé lui-même ou fait rédiger par un assistant. Voici les limites qui reviennent à chaque session, avec les textes qui les fondent.",
            'items' => [
                ['titre' => 'Envoyer une offre que personne n\'a validée', 'texte' => "Dans l'espace OHADA, l'article 240 de l'Acte uniforme portant sur le droit commercial général admet une vente commerciale écrite ou verbale, prouvée par tous moyens : un message WhatsApp peut suffire. L'article 241 fait d'une proposition adressée à une personne déterminée une offre dès qu'elle désigne les marchandises, la quantité et le prix et montre la volonté d'être lié. Un devis rédigé par une IA et parti sans relecture engage donc l'entreprise comme s'il avait été signé à la main."],
                ['titre' => 'Écrire à des inconnus sans pouvoir prouver leur accord', 'texte' => "Au Bénin, l'article 332 de la loi n° 2017-20 portant code du numérique interdit la prospection par courrier électronique ou SMS vers une personne physique qui n'y a pas consenti, précise que l'absence de réponse ne vaut pas consentement et met la preuve de cet accord à la charge de celui qui prospecte. Une automatisation qui envoie des messages en série ne sait pas apporter cette preuve. Le fichier, lui, doit garder l'origine de chaque contact et la date de son accord."],
                ['titre' => 'Appeler les particuliers comme avant le 11 août 2026', 'texte' => "En France, la CNIL rappelle dans sa page sur la prospection téléphonique, publiée le 10 juin 2026, que les règles ont changé le 11 août 2026 avec la loi du 30 juin 2025 : un consommateur ne peut plus être démarché au téléphone sans son consentement préalable, sauf appel lié à un contrat en cours, et les appels restent limités du lundi au vendredi, de 10 h à 13 h et de 14 h à 20 h. Entre professionnels, l'appel lié à l'activité de la personne reste possible, avec un droit d'opposition simple."],
                ['titre' => 'Livrer à un assistant les secrets du client ou du mandant', 'texte' => "Les grilles de prix, les marges, les conditions accordées à un grand compte et les comptes rendus de négociation ne se collent pas dans un assistant grand public. Pour l'agent commercial, l'article 219 de l'Acte uniforme est explicite : il ne peut, même après la fin du contrat, utiliser ni révéler les informations reçues à titre confidentiel de son mandant. Le même réflexe vaut pour un salarié : on anonymise, on résume, ou l'on passe par l'outil validé par l'entreprise."],
                ['titre' => 'Écouter, enregistrer ou analyser les appels sans le dire', 'texte' => "La fiche de la CNIL sur l'écoute et l'enregistrement des appels au travail, publiée en 2009 et signalée en cours de mise à jour, exclut tout enregistrement permanent ou systématique hors obligation légale, impose d'informer les salariés et leurs interlocuteurs, et limite la conservation à six mois pour les enregistrements, un an pour les documents d'analyse. Le règlement européen sur l'IA interdit en outre, depuis le 2 février 2025, la reconnaissance des émotions sur le lieu de travail, comme le rappelle la CNIL dans ses questions-réponses mises à jour le 17 août 2026."],
                ['titre' => 'Suivre le commercial à la trace', 'texte' => "Un téléphone ou un véhicule géolocalisé peut servir à organiser une tournée ou à protéger un salarié isolé, pas à le surveiller en continu. Dans sa fiche sur la géolocalisation des véhicules des salariés, publiée le 30 mai 2023, la CNIL écarte ce dispositif pour les employés libres d'organiser leurs déplacements, et cite les VRP, ainsi que le contrôle permanent ou celui des pauses et des trajets domicile-travail. Le salarié doit pouvoir couper la localisation hors de son temps de travail."],
                ['titre' => 'Décider seule d\'une prime, d\'une sanction ou d\'un crédit', 'texte' => "Un score calculé par un logiciel peut éclairer une décision ; il ne la prend pas. L'article 401 de la loi béninoise n° 2017-20 interdit qu'une décision produisant des effets juridiques à l'égard d'une personne, ou l'affectant de manière significative, repose sur le seul fondement d'un traitement automatisé destiné à évaluer certains aspects de sa personnalité. Le classement automatique des vendeurs ou le refus d'un délai de paiement à un client par un algorithme passent donc toujours par un humain qui peut entendre l'intéressé."],
                ['titre' => 'Laisser l\'équipe se servir de l\'IA sans formation', 'texte' => "En Europe, l'article 4 du règlement sur l'IA oblige depuis le 2 février 2025 les entreprises qui utilisent ces outils à veiller à leur maîtrise par le personnel, avec un contrôle et des sanctions possibles depuis le 3 août 2026, selon les questions-réponses de la Commission mises à jour le 27 juillet 2026. Une équipe commerciale qui rédige ses propositions avec un assistant entre dans ce cadre : la charte écrite et la formation font partie de l'obligation."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Une proposition commerciale engage-t-elle l'entreprise ? Ce que l'OHADA dit de l'offre, de l'acceptation et de la négociation",
            'paragraphes' => [
                "Le Livre 8 de l'Acte uniforme portant sur le droit commercial général, adopté à Lomé le 15 décembre 2010, régit la vente de marchandises entre commerçants dans les États parties (article 234). Il ne s'applique pas, en principe, aux achats faits pour un usage personnel ou familial, ni aux contrats où la part principale est un service (article 235). Pour un commercial qui vend des équipements, des fournitures ou des produits à d'autres entreprises, c'est le texte qui dit quand un échange devient un contrat. La formation le présente en une demi-heure, sans le transformer en cours de droit.",
                "Trois règles changent les habitudes. D'abord, une proposition envoyée à un client nommé est une offre si elle est assez précise et montre la volonté d'être lié (article 241) ; en revanche, une annonce adressée à tous, comme une diffusion de catalogue, n'est qu'une invitation à faire une offre. Ensuite, l'offre doit être acceptée dans le délai qu'elle fixe ou, à défaut, dans un délai raisonnable, et le silence du client ne vaut jamais acceptation (article 243). Enfin, une réponse qui modifie l'offre la rejette et devient une contre-proposition (article 245), sauf modifications non substantielles.",
                "D'où trois réflexes enseignés. Chaque devis porte une durée de validité, parce qu'une offre sans délai reste ouverte plus longtemps qu'on ne le croit. Chaque concession faite pendant la négociation donne lieu à une nouvelle version numérotée, pour savoir quelle offre le client a acceptée. Et toute offre que l'on veut retirer l'est par écrit, avant l'acceptation, comme le permet l'article 242, sauf si elle avait été annoncée irrévocable pendant un délai fixé.",
                "L'article 249 ajoute une règle de conduite : les parties sont libres de négocier, mais celle qui entame ou poursuit une négociation sans intention d'aboutir répond du préjudice causé. Les agents commerciaux, mandataires qui négocient au nom de producteurs ou de commerçants sans contrat de travail (article 216), doivent en plus loyauté et information à leur mandant (article 217). Cette partie de la formation n'est pas un avis juridique : en cas de litige, l'entreprise consulte son conseil.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et systèmes un commercial doit-il savoir manier ?",
            'legende' => "Prix et règles relevés le 5 octobre 2026 sur les pages officielles citées dans les sources. Les abonnements des éditeurs ne sont jamais compris dans le devis de la formation et se règlent directement à eux.",
            'entetes' => ['Outil ou système', 'Ce qu\'il apporte au commercial', 'Ce qu\'il coûte ou impose', 'Où l\'apprendre en détail'],
            'lignes'  => [
                ['CRM d\'Odoo et module Ventes', 'Comptes, affaires, activités, devis tirés de la liste de prix, application mobile', 'Une application gratuite ; Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 €', '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Dolibarr', 'Tiers, propositions commerciales, commandes, suivi des opportunités par les projets', 'Logiciel libre ; hébergement et paramétrage à prévoir', '<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['CRM en ligne (HubSpot, Pipedrive)', 'Pipeline, rappels, rapports, applications mobiles', 'Offres gratuites ou par poste et par mois, détaillées dans la fiche CRM du catalogue', '<a href="/formations/crm-pipeline">CRM : pipeline commercial et reporting</a>'],
                ['Application WhatsApp Business', 'Échanges avec les clients qui ont donné leur numéro, catalogue, étiquettes', 'Gratuite ; la plateforme de Meta facture au-delà de 1 000 messages de service par mois et par numéro depuis le 1er octobre 2026', '<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>'],
                ['WhatsApp relié au CRM ou à l\'ERP', 'Historique des conversations rattaché au compte, devis envoyés depuis le logiciel', 'Raccordement à l\'API de Meta, coûts par message', '<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>'],
                ['LinkedIn', 'Trouver les bons interlocuteurs, soigner son profil, suivre l\'actualité des comptes', 'Compte de base gratuit ; automatisation des invitations et des messages interdite par ses conditions', '<a href="/formations/linkedin-reseaux-sociaux">LinkedIn et réseaux sociaux d\'entreprise</a>'],
                ['Assistant d\'IA (ChatGPT, Claude, Gemini, Copilot)', 'Préparer, résumer, rédiger, transcrire, s\'entraîner', 'Versions gratuites limitées, offres professionnelles par utilisateur ; règles de données à fixer', '<a href="/formations/ia-en-entreprise">IA en entreprise</a> et <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>'],
                ['Tableur partagé', 'Liste de comptes, grille de remise, plan de tournée, tant qu\'il n\'y a pas de CRM', 'Souvent déjà en place ; risque de versions multiples', '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Acte uniforme OHADA sur le droit commercial général', 'Savoir quand une proposition devient une offre, et ce que doit un agent commercial', 'Applicable aux ventes entre commerçants des États parties de l\'OHADA', 'Ce parcours, puis votre conseil juridique'],
                ['Loi n° 2017-20 au Bénin, RGPD en Europe', 'Savoir qui l\'on peut contacter, quoi garder et combien de temps', 'Consentement, information, opposition, durée de conservation', '<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon le type de vente, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => 'Distribution de boissons et de produits de grande consommation, à Cotonou', 'probleme' => "Six vendeurs terrain visitent chacun une centaine de points de vente par semaine, notent les commandes sur des carnets et les envoient par photo le soir ; les ruptures et les erreurs de quantité se découvrent à la livraison.", 'solution' => "Fichier des points de vente classé par zone et par potentiel, fréquence de visite écrite, prise de commande dans l'application mobile de l'ERP avec un mode de secours sans réseau, et rapport du soir tiré de l'outil au lieu des photos de carnets."],
                ['secteur' => "Vente sédentaire d'abonnements internet aux entreprises, à Abidjan", 'probleme' => "Une équipe de téléconseillers rappelle des listes de numéros d'origine inconnue, relance des sociétés qui ont déjà refusé et ne sait pas quels appels ont abouti à un devis.", 'solution' => "Tri du fichier selon l'origine des contacts, liste des oppositions partagée par toute l'équipe, script d'appel tourné vers un rendez-vous technique, et devis émis depuis l'outil avec une durée de validité, pour savoir lesquels attendent une réponse."],
                ['secteur' => 'Matériel agricole et intrants, à Bobo-Dioulasso', 'probleme' => "Les commerciaux parcourent de longues distances pour voir des coopératives et des exploitants, avec une connexion intermittente ; les promesses faites en brousse ne remontent jamais jusqu'au siège.", 'solution' => "Compte rendu dicté en note vocale dans la voiture, transcrit et relu au retour de connexion, grille de remise imprimée et à jour, et devis établis le jour même au bureau le plus proche plutôt qu'une semaine plus tard au siège."],
                ['secteur' => "Chargés d'affaires en équipements industriels, à Douala", 'probleme' => "Les propositions techniques de quarante pages sont réécrites à partir d'anciens dossiers, avec des prix périmés et des clauses qui ne correspondent plus aux conditions de l'entreprise.", 'solution' => "Bibliothèque de paragraphes validés par la direction technique et la direction financière, assistant d'IA utilisé pour adapter la présentation au client sans toucher aux prix ni aux clauses, et relecture croisée avant envoi."],
                ['secteur' => 'Agents commerciaux multicartes, à Lyon', 'probleme' => "Trois agents représentent chacun plusieurs fabricants, tiennent leurs clients dans des tableurs différents et se demandent ce qu'ils peuvent confier à un assistant d'IA sans trahir la confidentialité due à leurs mandants.", 'solution' => "Séparation stricte des données par mandant, règles écrites sur les informations qui ne sortent jamais, assistant d'IA réservé aux textes anonymisés, et rapport mensuel par mandant généré à partir d'un seul fichier."],
                ['secteur' => "Équipe de vente d'un éditeur de logiciels, à Bruxelles", 'probleme' => "Les vendeurs veulent un outil qui enregistre, transcrit et note automatiquement chaque appel, y compris le ton de la voix, et le directeur commercial envisage d'en tirer les primes.", 'solution' => "Lecture des règles européennes : information des interlocuteurs, pas d'enregistrement systématique sans base solide, aucune déduction d'émotions sur le lieu de travail, primes décidées par un humain. L'équipe garde la transcription sur demande, relue par le vendeur, et abandonne la note automatique."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels usages de l'IA servent vraiment un commercial, et avec quelles précautions ?",
            'legende' => "Usages travaillés pendant le parcours sur des assistants courants. Le choix de l'assistant compte moins que deux règles : ce qui en sort est relu, et ce qui y entre ne comporte rien de confidentiel.",
            'entetes' => ['Usage', 'Ce que l\'on donne à l\'assistant', 'Ce que l\'on vérifie', 'Ce qu\'on ne lui confie jamais'],
            'lignes'  => [
                ['Préparer un rendez-vous', 'Le nom du compte, son secteur, ses pages publiques, l\'objectif de la visite', 'Chaque fait cité, à sa source ; les dates ; le nom des dirigeants', 'L\'historique des prix et des remises accordées à ce client'],
                ['S\'entraîner aux objections', 'Le profil de l\'acheteur, les trois objections les plus fréquentes, l\'offre en termes généraux', 'Que les réponses restent dans ce que l\'entreprise peut tenir', 'Le droit de promettre une remise ou un délai pendant le jeu'],
                ['Structurer un compte rendu', 'La note vocale ou les notes brutes du rendez-vous', 'Les engagements, les montants, les dates, les noms', 'Une appréciation sur la personne, sa santé ou sa vie privée'],
                ['Rédiger le texte d\'un devis', 'Le besoin exprimé, la solution retenue, les bénéfices pour le client', 'Qu\'aucun prix, délai, garantie ou référence n\'a été ajouté', 'La grille de marge et les conditions des autres clients'],
                ['Résumer un cahier des charges ou un appel d\'offres', 'Le document public, ou une version dont les données sensibles ont été retirées', 'Les exigences éliminatoires, relues dans le texte d\'origine', 'Un dossier marqué confidentiel par l\'acheteur'],
                ['Préparer le rapport de la semaine', 'L\'export des chiffres de l\'outil, sans coordonnées de clients', 'Les totaux, recoupés avec l\'outil', 'La rédaction d\'une explication que le commercial n\'a pas donnée'],
                ['Adapter un message pour un client anglophone', 'Le texte français validé et le registre souhaité', 'Le sens, relu par une personne qui parle la langue', 'Une clause contractuelle sans relecture'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type pour une équipe commerciale, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment le parcours se prépare-t-il et se déroule-t-il dans une équipe commerciale ?",
            'items' => [
                ['titre' => 'Le premier échange', 'duree' => '30 minutes', 'texte' => "Ce que vous vendez, à qui, sur quel territoire, avec combien de commerciaux terrain et sédentaires, et ce qui coince : fichier, rendez-vous, devis, relances, rapports, usage de l'IA. Cet échange, le cadrage et le devis sont gratuits."],
                ['titre' => 'La lecture des outils', 'duree' => '1 heure', 'texte' => "Un tour de l'outil de suivi commercial, des modèles de devis, de la grille de remise et d'un export anonymisé des affaires. Rien n'est copié hors de l'entreprise sans votre accord."],
                ['titre' => 'Deux entretiens avec le terrain', 'duree' => '2 fois 20 minutes', 'texte' => "Un commercial terrain et un vendeur sédentaire racontent leur semaine type. Leurs réponses fixent les exercices : on ne forme pas de la même façon une équipe qui roule toute la journée et une équipe qui téléphone depuis un plateau."],
                ['titre' => 'Le choix des demi-journées', 'duree' => 'Selon le devis', 'texte' => "Le programme type est ajusté. Une équipe de distribution insiste sur la tournée et la prise de commande, une équipe de vente complexe sur la proposition et la négociation, un plateau téléphonique sur le fichier et les règles d'appel."],
                ['titre' => 'Un calendrier qui respecte les objectifs', 'duree' => 'Hors périodes de clôture', 'texte' => "Pas de session la dernière semaine du mois ni pendant la saison haute. Les commerciaux terrain se forment souvent le lundi matin ou le vendredi après-midi, quand les clients reçoivent peu."],
                ['titre' => 'La pratique sur vos comptes', 'duree' => 'Pendant chaque séance', 'texte' => "Les rendez-vous préparés sont ceux de la semaine, les devis portent sur de vrais clients, les rapports sortent de votre outil. Ce qui est fait en séance sert dès le lendemain."],
                ['titre' => 'La séance de suivi', 'duree' => '2 heures, à distance', 'texte' => "Quatre semaines plus tard, on relit ce qui a été réellement saisi, envoyé et rapporté, on corrige les règles qui n'ont pas tenu, et l'on décide par écrit de la suite."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Intra, inter-entreprises, à distance ou hybride : quel format pour des commerciaux ?",
            'legende' => "Le format se choisit au premier échange, selon la dispersion de l'équipe sur le territoire, la part de vente terrain et la confidentialité des comptes.",
            'entetes' => ['Format', 'Situation typique', 'Rythme habituel', 'Points d\'organisation'],
            'lignes'  => [
                ['Intra, dans vos locaux', 'Une équipe commerciale et son responsable, sur le même outil et la même offre', 'Quatre demi-journées, souvent couplées à la réunion commerciale', 'Travail sur le fichier, les devis et l\'outil réels ; le responsable assiste au moins au deuxième jour'],
                ['Inter-entreprises', 'Un ou deux vendeurs par structure, un dirigeant qui vend seul, des agents commerciaux indépendants', 'Deux journées en salle', 'Chacun travaille sur ses propres comptes ; aucun nom de client n\'est montré aux autres participants'],
                ['À distance', 'Équipes réparties entre plusieurs villes ou pays, en Afrique, en Europe ou au Canada', 'Quatre séances de deux heures et demie, espacées d\'une semaine', 'Partage d\'écran de l\'outil, exercices à faire sur le terrain entre deux séances'],
                ['Hybride', 'Lancement de saison, arrivée d\'un nouvel outil de suivi, nouvelle équipe à intégrer', 'Une journée ensemble, puis deux séances courtes à distance', 'Fichier, devis et règles posés en salle ; rapports et usage de l\'IA repris à distance sur des cas réels'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe commerciale, et comment la régler ?",
            'intro'      => "Aucun tarif n'est publié : chaque parcours est chiffré sur devis, après un premier échange, un cadrage et un devis gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux logiciels restent payés par l'entreprise à leurs éditeurs.",
            'items'      => [
                ['offre' => 'Parcours équipe commerciale', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur vos comptes et votre outil', 'Fiche de préparation, modèle de compte rendu, modèle de devis relu', 'Charte d\'usage de l\'IA de l\'équipe', 'Séance de suivi à distance']],
                ['offre' => 'Atelier IA pour commerciaux', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée centrée sur la préparation, les comptes rendus et les textes de devis', 'Règles de données et de relecture', 'Pour une équipe déjà organisée sur le reste']],
                ['offre' => 'Session inter-entreprises', 'prix' => 'Sur devis', 'inclus' => ['Deux journées pour des vendeurs de plusieurs structures', 'Exercices sur les comptes de chacun, sans partage', 'Coût réparti entre les participants']],
                ['offre' => 'Module à la carte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée ciblée : fichier et données, devis et négociation, tournée, ou rapport hebdomadaire']],
            ],
            'variations' => [
                "Le nombre de commerciaux à former et leur répartition entre terrain et sédentaires.",
                "Le nombre de demi-journées retenues et l'ajout de la séance de suivi.",
                "L'outil : CRM déjà réglé, logiciel à configurer pendant la session, ou simple tableur.",
                "La préparation : export et anonymisation des affaires, reprise des modèles de devis, grille de remise à reconstruire.",
                "Le lieu : vos locaux à Cotonou, une autre ville ou un autre pays, ou la distance.",
                "La langue des séances et des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Une formation de commerciaux peut-elle être financée ?",
            'paragraphes' => [
                "Parfois, et cela se vérifie toujours avant de signer, jamais après. Le guichet dépend du pays, du statut de la personne formée et de la situation de l'entreprise à l'égard des taxes de formation. Un vendeur salarié, un agent commercial indépendant et un dirigeant qui vend lui-même ne frappent pas à la même porte. Le réflexe utile consiste à écrire au fonds, programme et devis en pièce jointe, et à garder sa réponse.",
                "En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> sur le plan de formation, relue le 5 octobre 2026, ouvre ce plan à toute entreprise qui justifie du paiement régulier de ses deux taxes, range le perfectionnement parmi les actions possibles et prévoit un règlement après suivi, contrôle et approbation de la Commission permanente. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> propose un guichet pour le personnel des entreprises et un autre pour les demandes individuelles, une piste pour un commercial indépendant. Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>.",
                "En France et dans les fonds mutualisés qui en dépendent, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que la certification Qualiopi conditionne l'accès aux financements publics et mutualisés depuis le 1er janvier 2022. Richard SALANON ne détient ni cette certification ni l'agrément d'un fonds africain : budgétez la formation sans prise en charge. Le programme, les feuilles de présence et le résultat des exercices vous sont remis dans tous les cas, pour vos dossiers internes.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi le portefeuille de clients ne doit-il jamais vivre sur le téléphone personnel d'un commercial ?",
            'texte' => "Parce que le jour où ce commercial part, tombe malade ou perd son téléphone, l'entreprise perd avec lui l'historique des échanges, les devis envoyés par message, les promesses faites et parfois le seul numéro d'un acheteur important. Le vendeur, lui, se retrouve détenteur de données qui ne lui appartiennent pas, et qu'il n'a pas le droit d'emporter chez un concurrent. La règle posée dès la première demi-journée protège les deux : un numéro et une messagerie professionnels, un fichier partagé dans l'outil de l'entreprise, des devis enregistrés au moment de leur envoi, et une passation écrite du portefeuille à chaque départ.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on chez les commerciaux qui se digitalisent, et comment les éviter ?",
            'intro' => "Ces erreurs viennent rarement d'une mauvaise volonté. Elles naissent d'outils imposés sans explication, ou d'outils adoptés sans règles. Chacune a sa parade, travaillée pendant le parcours.",
            'items' => [
                ['titre' => 'Un outil choisi sans les commerciaux', 'texte' => "La direction achète un CRM pour mieux suivre l'activité, et les vendeurs le vivent comme un mouchard. Ils saisissent le minimum, en retard. Les règles de saisie se décident avec eux, à partir de ce qui les aide à vendre, et le premier rapport qu'ils voient est le leur."],
                ['titre' => 'Le compte rendu écrit par l\'IA que personne ne relit', 'texte' => "La transcription automatique produit un texte propre, mais elle a confondu deux montants et attribué une promesse au mauvais interlocuteur. Six mois plus tard, c'est ce texte qui fait foi. Aucun compte rendu n'entre dans l'outil sans avoir été relu par la personne qui était au rendez-vous."],
                ['titre' => 'La remise accordée au téléphone, absente du devis', 'texte' => "Le client se souvient d'une remise de dix points, le devis n'en porte que cinq, et la facture déclenche un litige. Toute concession donne lieu à une nouvelle version du devis, envoyée par écrit le jour même."],
                ['titre' => 'Le devis envoyé depuis le téléphone personnel', 'texte' => "Une photo de devis part sur WhatsApp, sans copie dans l'outil ni numéro de version. Personne d'autre ne sait qu'elle existe. On envoie depuis le logiciel, ou l'on y dépose le document dans l'heure."],
                ['titre' => 'La tournée qui suit l\'habitude', 'texte' => "Le commercial revoit chaque semaine les clients qui l'accueillent bien, et jamais ceux qui pourraient acheter davantage. Les comptes sont classés une fois par trimestre selon leur potentiel, et la fréquence de visite en découle."],
                ['titre' => 'Le rapport qui raconte au lieu de compter', 'texte' => "Une page de récit sur la semaine, sans un chiffre vérifiable. Le rapport sort de l'outil, avec les mêmes indicateurs chaque lundi ; le commentaire du commercial s'ajoute ensuite, en trois lignes."],
                ['titre' => 'Former les vendeurs sans leur responsable', 'texte' => "Les commerciaux reviennent avec des règles que leur responsable ne connaît pas, et la réunion du lundi les efface. Le responsable des ventes suit au minimum la deuxième journée et la séance de suivi."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés un commercial doit-il connaître avant de s'équiper ?",
            'items' => [
                ['valeur' => '20,0 %', 'libelle' => 'Part des entreprises de l\'Union européenne de 10 salariés ou plus qui utilisaient au moins une technologie d\'IA en 2025, contre 13,5 % en 2024', 'source' => 'Eurostat, publication du 11 décembre 2025', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2'],
                ['valeur' => '11,8 %', 'libelle' => 'Part des entreprises européennes qui utilisaient l\'IA pour analyser du langage écrit en 2025, l\'usage qui a le plus progressé en un an (+4,9 points)', 'source' => 'Eurostat, publication du 11 décembre 2025', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2'],
                ['valeur' => '16,4 millions', 'libelle' => 'Connexions mobiles au Bénin fin 2025, soit 110 % de la population, pour 4,80 millions d\'internautes, soit 32,2 %', 'source' => 'DataReportal, Digital 2026 Bénin, 8 novembre 2025', 'url' => 'https://datareportal.com/reports/digital-2026-benin'],
                ['valeur' => '6 mois', 'libelle' => 'Durée maximale de conservation des enregistrements d\'appels de salariés en France ; un an pour les documents d\'analyse qui en sont tirés', 'source' => 'CNIL, écoute et enregistrement des appels sur le lieu de travail', 'url' => 'https://www.cnil.fr/fr/lecoute-et-lenregistrement-des-appels-sur-le-lieu-de-travail'],
                ['valeur' => '2 mois', 'libelle' => 'Durée de conservation des données de géolocalisation d\'un véhicule de salarié en règle générale ; un an quand elles servent à optimiser les tournées ou à prouver une intervention', 'source' => 'CNIL, géolocalisation des véhicules des salariés, 30 mai 2023', 'url' => 'https://www.cnil.fr/fr/la-geolocalisation-des-vehicules-des-salaries'],
                ['valeur' => '1 000', 'libelle' => 'Messages de service gratuits par mois et par numéro professionnel sur la plateforme WhatsApp Business depuis le 1er octobre 2026, facturés au-delà', 'source' => 'Meta, tarification de la plateforme WhatsApp Business, lue le 5 octobre 2026', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Tournées sans réseau, langues, acomptes : que change le terrain africain ou européen pour un commercial ?",
            'paragraphes' => [
                "Selon le rapport Digital 2026 de DataReportal consacré au Bénin, publié le 8 novembre 2025, le pays comptait fin 2025 16,4 millions de connexions mobiles, soit 110 % de la population, mais 4,80 millions d'internautes, soit 32,2 %. Pour un commercial, l'écart dit deux choses : presque tous ses clients ont un téléphone, beaucoup n'ont pas d'accès régulier à internet, et lui-même travaille souvent hors couverture. Un outil qui ne fonctionne qu'en ligne fait perdre la commande prise au fond d'un marché. La formation prévoit toujours le mode sans réseau, la synchronisation du soir et la façon de rattraper la saisie sans doublon.",
                "La langue du rendez-vous n'est pas toujours celle du compte rendu. Une négociation menée en fon, en yoruba, en dioula, en wolof ou en lingala se résume ensuite en français dans l'outil. Les assistants qui transcrivent une note vocale font des erreurs sur les noms propres, les montants et les échanges qui mêlent deux langues : la relecture par le commercial lui-même n'est pas une précaution de forme. Pour les clients anglophones du Ghana, du Nigeria ou du Canada, les modèles de devis et de messages se préparent dans les deux langues, relus par quelqu'un qui parle la seconde.",
                "L'argent suit des chemins particuliers. En Afrique de l'Ouest et du Centre, l'acompte d'une commande arrive souvent par mobile money, parfois en espèces remises au vendeur. La règle enseignée tient en une phrase : l'acompte se règle sur le compte marchand de l'entreprise, jamais sur le numéro personnel du commercial, et la commande ne part qu'après vérification de l'encaissement par une autre personne. Une entreprise qui vend en francs CFA d'Afrique de l'Ouest, en francs CFA d'Afrique centrale et en euros saisit chaque devis dans sa devise et vérifie ce que l'outil additionne.",
                "En Europe, le cadre se resserre surtout sur les données et les appels. Le RGPD impose d'informer les prospects et de ne garder que ce qui sert ; en France, la prospection téléphonique des particuliers exige leur accord préalable depuis le 11 août 2026, tandis que les appels entre professionnels restent possibles s'ils portent sur leur activité. Un vendeur sédentaire qui appelait hier des consommateurs à partir d'une liste achetée doit aujourd'hui pouvoir montrer, pour chaque numéro, l'accord de la personne. La formation fait trier le fichier avant toute nouvelle campagne d'appels.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour un commercial ?",
            'legende' => "Chaque formation a sa propre fiche et son programme détaillé. Le parcours de cette page en pose les premiers gestes et dit à qui confier la suite.",
            'entetes' => ['Formation', 'Le besoin du commercial', 'Qui l\'envoyer suivre', 'Durée indiquée sur la fiche'],
            'lignes'  => [
                ['<a href="/formations/crm-pipeline">CRM : pipeline commercial et reporting</a>', 'Étapes de vente vérifiables, relances, motifs de perte, prévision', 'Toute l\'équipe et son responsable des ventes', 'Deux jours en quatre demi-journées, puis une revue à un mois'],
                ['<a href="/formations/marketing-digital-b2b">Marketing digital B2B</a>', 'Choisir les comptes à viser, bâtir une offre d\'entrée, obtenir le premier rendez-vous', 'Commerciaux qui prospectent des entreprises, avec le marketing', 'Deux jours, ou une journée resserrée'],
                ['<a href="/formations/linkedin-reseaux-sociaux">LinkedIn et réseaux sociaux d\'entreprise</a>', 'Un profil qui inspire confiance avant le rendez-vous, une présence régulière', 'Commerciaux en vente entre professionnels et leur dirigeant', 'Deux jours en quatre demi-journées, ou un jour resserré'],
                ['<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>', 'Catalogue, réponses rapides et étiquettes sur le numéro de l\'entreprise', 'Vendeurs qui suivent leurs clients par message', 'Une demi-journée, ou une journée complète'],
                ['<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>', 'Conversations et devis rattachés au compte dans le logiciel', 'Équipes qui vendent surtout par message', 'Deux jours, ou une journée et demie'],
                ['<a href="/formations/ia-en-entreprise">IA en entreprise</a>', 'Usage quotidien des assistants sur ses propres documents', 'Tout commercial qui rédige beaucoup', 'Deux jours, ou un atelier d\'une demi-journée'],
                ['<a href="/formations/prompt-engineering">Prompt engineering professionnel</a>', 'Des consignes fiables et partagées pour préparer, résumer, rédiger', 'La personne qui tient les modèles de l\'équipe', 'Deux jours, ou six séances à distance'],
                ['<a href="/formations/emailing-automation">Emailing et marketing automation</a>', 'Listes, consentement, séquences et délivrabilité', 'Vendeurs sédentaires qui écrivent à de nombreux clients', 'Deux jours en quatre demi-journées'],
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', 'Devis, commandes et stock dans Odoo, poste par poste', 'Commerciaux et administration des ventes sous Odoo', 'Deux à trois jours en demi-journées'],
                ['<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>', 'Du devis au règlement dans un logiciel libre', 'Équipes commerciales sous Dolibarr', 'Deux jours'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Ce que la loi permet de faire des données des prospects avec l\'IA', 'Responsable des ventes et personne qui tient le fichier', 'Un jour de socle, ou deux jours en quatre demi-journées'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre équipe commerciale avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des commerciaux, terrain et sédentaires, sur leurs propres outils : le fichier de l'entreprise, l'application mobile du CRM, les modèles de devis, le numéro WhatsApp professionnel, l'assistant d'IA choisi par la direction. Il ne vend aucun logiciel de CRM et n'est partenaire ni certifié d'aucun éditeur, ce qui lui laisse la liberté de recommander un tableur bien tenu quand un abonnement serait prématuré. Il ne vous apprend pas à vendre : il vous apprend à ne plus perdre de temps, de traces ni de clients entre deux ventes.",
                "Il installe et paramètre lui-même Odoo et Dolibarr, relie WhatsApp aux logiciels de gestion et conçoit des automatisations, ce qui lui fait voir, d'un projet à l'autre, où les données commerciales se perdent. Créateur de <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>, il compte " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . ") et des missions dans " . count((array) fait('pays_travailles')) . " pays. Il déclare plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées au numérique, à l'IA et aux logiciels de gestion.",
                "Ce que vous pouvez vérifier : une réponse sous 24 heures, un programme écrit avant la session, des exercices sur vos comptes et vos devis, des supports modifiables qui restent à l'équipe, et un avis franc quand la formation n'est pas la bonne réponse. Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur la page des <a href=\"/zones/\">zones d'intervention</a>. Si le besoin est d'installer ou de régler l'outil plutôt que de former, les services <a href=\"/services/integration-odoo\">intégration Odoo</a> et <a href=\"/services/integration-whatsapp\">intégration WhatsApp</a> prennent le relais ; le catalogue complet se trouve sur la page des <a href=\"/formations/\">formations</a>, et les formations commerciales sur la page <a href=\"/formations/domaine/marketing-visibilite\">marketing et visibilité</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre équipe commerciale ?",
            'texte' => "Un fichier qui appartient à l'entreprise et dit d'où vient chaque contact, un rendez-vous préparé et rapporté le jour même, un devis daté, validé et versionné, une prochaine action sur chaque affaire, un rapport qui sort de l'outil. L'IA prépare, résume et rédige ; elle ne promet, ne chiffre, n'écoute et ne juge jamais à la place du commercial.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former vos commerciaux au numérique et à l'IA ?",
            'texte'  => "Indiquez ce que vous vendez, le nombre de commerciaux terrain et sédentaires, votre outil de suivi, les villes ou pays couverts et le format souhaité : vous recevez une réponse sous 24 heures, puis un programme ajusté à votre équipe et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mes commerciaux'],
        ],
    ],

    'faq' => [
        ['q' => "Nos commerciaux passent leurs journées sur la route : la formation est-elle faite pour eux ?", 'r' => "Oui. Une bonne part du parcours porte sur le téléphone : fiche du compte ouverte avant d'entrer, compte rendu dicté en note vocale, mode sans réseau, synchronisation du soir. Les séances se placent aux moments où les clients reçoivent peu, souvent le lundi matin ou le vendredi après-midi."],
        ['q' => "Faut-il avoir un CRM avant de commencer ?", 'r' => "Non. Le parcours fonctionne avec un tableur partagé, et il aide justement à savoir quoi demander à un outil avant d'en payer un. Si l'équipe utilise déjà Odoo, Dolibarr, HubSpot ou Pipedrive, les exercices se font dedans, avec un compte par participant."],
        ['q' => "Quelle différence avec la formation CRM du catalogue ?", 'r' => "La formation CRM approfondit la conduite des affaires après le premier rendez-vous : étapes, relances, motifs de perte, prévision. Ce parcours couvre toute la semaine du commercial, du fichier à la tournée, des devis au rapport, et l'usage de l'IA à chaque étape. Beaucoup d'équipes suivent ce parcours, puis la formation CRM pour leur responsable des ventes."],
        ['q' => "L'IA peut-elle rédiger nos devis et nos propositions ?", 'r' => "Elle peut rédiger le texte qui présente la solution et ses bénéfices, à partir de votre compte rendu. Les prix, les quantités, les délais, les garanties et les clauses sortent de vos grilles et de vos modèles validés, jamais de l'assistant. Dans l'espace OHADA, une proposition précise envoyée à un client nommé vaut offre : elle est relue avant de partir."],
        ['q' => "Peut-on enregistrer les appels de nos vendeurs et les faire analyser par une IA ?", 'r' => "Pas n'importe comment. En France, la CNIL exclut l'enregistrement permanent hors obligation légale, impose d'informer salariés et clients et limite la conservation à six mois. En Europe, déduire les émotions d'une personne sur le lieu de travail par l'IA est interdit depuis le 2 février 2025. Une transcription ponctuelle, annoncée et relue par le vendeur reste possible."],
        ['q' => "Peut-on géolocaliser les commerciaux terrain ?", 'r' => "Pour organiser une tournée ou protéger un salarié isolé, oui, dans un cadre écrit. Pas pour surveiller en continu un commercial libre d'organiser ses déplacements : la CNIL le refuse expressément pour les VRP. Le salarié doit pouvoir couper la localisation hors de son temps de travail, et les données ne se gardent pas indéfiniment."],
        ['q' => "Quels numéros a-t-on le droit d'appeler ou de contacter par message ?", 'r' => "Cela dépend du pays et du destinataire. Au Bénin, un message électronique ou un SMS de prospection vers une personne physique exige son consentement, que l'entreprise doit pouvoir prouver. En France, les particuliers ne se démarchent plus au téléphone sans accord préalable depuis le 11 août 2026, alors qu'un professionnel peut être appelé sur un sujet lié à son activité."],
        ['q' => "Nos commerciaux utilisent leur WhatsApp personnel : est-ce un problème ?", 'r' => "Oui, pour l'entreprise comme pour eux. Les échanges, les devis envoyés et les promesses faites partent avec le téléphone ou avec la personne. Le parcours installe un numéro professionnel, un fichier partagé et une passation écrite du portefeuille, et la formation WhatsApp Business du catalogue en détaille les réglages."],
        ['q' => "Le responsable des ventes doit-il être présent ?", 'r' => "Au moins pour la deuxième journée et la séance de suivi. C'est lui qui fixe la grille de remise, valide les devis au-delà du seuil, anime la réunion du lundi et décide des règles d'usage de l'IA. Sans lui, ces règles ne survivent pas à la première fin de mois difficile."],
        ['q' => "Nos agents commerciaux sont indépendants : peuvent-ils suivre la formation ?", 'r' => "Oui, en session inter-entreprises ou au sein du réseau de leur mandant. Le parcours tient compte de leur situation : plusieurs mandants, données à séparer, informations confidentielles qu'ils ne peuvent ni utiliser ni révéler, même après la fin du contrat, selon l'article 219 de l'Acte uniforme OHADA sur le droit commercial général."],
        ['q' => "La formation peut-elle se faire entièrement à distance ?", 'r' => "Oui, en quatre séances de deux heures et demie espacées d'une semaine. L'espacement aide : entre deux séances, chacun prépare de vrais rendez-vous, envoie de vrais devis et produit un vrai rapport, dont les difficultés sont reprises à la séance suivante."],
        ['q' => "Que reste-t-il à l'équipe après la formation ?", 'r' => "La fiche de préparation de rendez-vous, le modèle de compte rendu, le modèle de devis relu et sa règle de validation, le plan de tournée, le rapport hebdomadaire réglé dans l'outil, la charte d'usage de l'IA et une fiche par geste appris, dans un format modifiable pour former les nouveaux arrivants."],
    ],

    'sources' => [
        ['titre' => "OHADA, Acte uniforme révisé portant sur le droit commercial général (adopté le 15 décembre 2010 à Lomé), articles 216 à 219, 234, 235, 240 à 245 et 249", 'url' => 'https://jurisprudence-ohada.com/wp-content/uploads/2024/08/AUDCG-2010_fr.pdf', 'date' => '2026-10-05'],
        ['titre' => "OHADA, présentation de l'Acte uniforme portant sur le droit commercial général", 'url' => 'https://www.ohada.org/droit-commercial-general/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 332, 334 et 401)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, prospection commerciale par téléphone (hors automate d'appel) : quelles sont les règles ? (10 juin 2026)", 'url' => 'https://www.cnil.fr/fr/prospection-commerciale-par-telephone-hors-automate-dappel-quelles-sont-les-regles', 'date' => '2026-10-05'],
        ['titre' => "CNIL, la géolocalisation des véhicules des salariés (30 mai 2023)", 'url' => 'https://www.cnil.fr/fr/la-geolocalisation-des-vehicules-des-salaries', 'date' => '2026-10-05'],
        ['titre' => "CNIL, l'écoute et l'enregistrement des appels sur le lieu de travail (fiche signalée en cours de mise à jour)", 'url' => 'https://www.cnil.fr/fr/lecoute-et-lenregistrement-des-appels-sur-le-lieu-de-travail', 'date' => '2026-10-05'],
        ['titre' => "CNIL, entrée en vigueur du règlement européen sur l'IA : les premières questions-réponses (mise à jour du 17 août 2026)", 'url' => 'https://www.cnil.fr/fr/entree-en-vigueur-du-reglement-europeen-sur-lia-les-premieres-questions-reponses-de-la-cnil', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, questions et réponses sur la maîtrise de l'IA (article 4 du règlement sur l'IA)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "Eurostat, utilisation de l'intelligence artificielle par les entreprises de l'UE en 2025 (11 décembre 2025)", 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2', 'date' => '2026-10-05'],
        ['titre' => "DataReportal, Digital 2026 Bénin (8 novembre 2025)", 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business (version française lue dans un navigateur)", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page des tarifs (version française, lue dans un navigateur)", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "LinkedIn, conditions d'utilisation", 'url' => 'https://www.linkedin.com/legal/user-agreement', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['crm-pipeline', 'marketing-digital-b2b', 'linkedin-reseaux-sociaux', 'whatsapp-business', 'whatsapp-odoo-dolibarr-crm', 'ia-en-entreprise'],
        'services'    => ['formation-en-entreprise', 'integration-odoo', 'integration-whatsapp'],
        'comparatifs' => ['odoo-vs-dolibarr', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
