<?php
// ============================================================
// data/metiers/immobilier.php · Page « formations par métier » : immobilier
// (agences, agents indépendants, promoteurs, administrateurs et gestionnaires
// de biens). Vague 1C, univers Technique et terrain, non prioritaire,
// statut F : Richard a déjà formé ce public.
// Angle propre : demandes reçues par les annonces, la fiche Google et
// WhatsApp ; visites ; mandats et registre des mandats ; bail, état des
// lieux, loyers, quittances et reddition des comptes ; documents du bien
// (état descriptif, cadastre) ; dossiers des candidats locataires ; IA
// encadrée. La page oriente vers visibilite-google, whatsapp-business,
// crm-pipeline et contenu-avec-ia sans reprendre leur texte, ni celui des
// pages des commerciaux, des commerçants et de l'hôtellerie.
// Neutralité (règle du 05/10/2026) : les textes sont cités pour ce qu'ils
// exigent des professionnels, jamais jugés.
// Faits relevés le 05/10/2026 : loi béninoise n° 2018-12 du 2 juillet 2018
// (PDF du SGG), code ivoirien de la construction et de l'habitat (texte de
// l'Assemblée nationale), Service Public Entreprendre (devenir agent
// immobilier), service-public.gouv.fr (dépôt de garantie, 9 juin 2026),
// justice.fr (quittance, 25 août 2025), ministère de la Transition
// écologique (logements G, 27 décembre 2024), CNIL (justificatifs,
// 10 octobre 2025 ; référentiel de gestion locative du 6 mai 2021), ANDF et
// portail service-public.bj (état descriptif), politique de la messagerie
// WhatsApp Business (23 septembre 2026), règlement de Google Maps, Banque
// mondiale (population urbaine 2025), Notaires de France (note n° 72,
// juillet 2026), Opco EP (panorama 2025 de la branche immobilier) ; faits
// vérifiés du catalogue (tarifs de Meta, article 4 du règlement sur l'IA).
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'       => "Formation numérique et IA pour l'immobilier : des demandes suivies jusqu'à la visite, des mandats et des baux en règle, des loyers et des quittances tracés, et des propriétaires informés sans relance",
    'title'       => 'Formation numérique agences immobilières | Richard SALANON',
    'meta'        => "Formation des agences, promoteurs et gestionnaires de biens : annonces, visites, mandats, gestion locative, quittances, WhatsApp et IA encadrée. Sur devis.",
    'en_bref'     => "Cette page présente le parcours conçu pour les agences immobilières, les agents indépendants, les promoteurs et les gestionnaires de biens : recevoir toutes les demandes au même endroit, publier des annonces exactes, organiser les visites, tenir les mandats et le registre, préparer bail et état des lieux, encaisser les loyers avec une quittance et rendre des comptes clairs aux propriétaires. L'IA y trouve sa place pour rédiger, traduire et résumer, jamais pour trier les candidats ni promettre à la place de l'agence. Le parcours tient en quatre demi-journées suivies d'une séance à distance, à l'agence, entre agences, à distance ou en hybride. Le prix est fixé sur devis.",
    'publie'      => '2026-10-22',
    'maj'         => '2026-10-05',
    'univers'     => 'Technique et terrain',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : chaque demande captée, qualifiée et suivie jusqu'au rendez-vous",
            'duree'  => '3 h 30',
            'points' => [
                "Inventaire des portes d'entrée de l'agence : panneau « à louer » avec numéro, portails d'annonces, groupes de réseaux sociaux, fiche Google, WhatsApp, recommandations, passage en vitrine.",
                "Une fiche par contact dans le CRM ou le tableur commun : bien recherché, budget, quartier, date d'emménagement, source de la demande, prochaine action.",
                "Étiquettes WhatsApp par étape (nouveau, qualifié, visite prévue, dossier déposé, signé, perdu) et réponses rapides validées par la direction.",
                "Le numéro de l'agence qui reste à l'agence : un appareil, deux administrateurs, aucune conversation client sur un téléphone personnel.",
                "Les avis Google demandés à chaque client après la signature ou la remise des clés, de la même façon pour tous, sans contrepartie.",
                "Exercice de contrôle : trente demandes réelles de la semaine passée, reprises dans l'outil, avec la cause de chaque demande restée sans suite.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : des annonces exactes et des visites qui laissent une trace",
            'duree'  => '3 h 30',
            'points' => [
                "La fiche du bien qui alimente toutes les annonces : surface mesurée, pièces, eau, électricité, accès, charges, conditions financières, disponibilité réelle.",
                "Photos fidèles prises au téléphone : lumière, cadrage, ordre de lecture, et ce qu'on ne retouche jamais.",
                "L'assistant d'IA pour mettre en forme et traduire une annonce à partir de la fiche, sans ajouter un équipement absent.",
                "Le planning des visites partagé entre agents, avec confirmation la veille, point de rendez-vous et numéro du visiteur noté.",
                "Le compte rendu de visite en trois lignes, envoyé au propriétaire le jour même.",
                "Exercice de contrôle : un bien de votre portefeuille, de la fiche au compte rendu de sa première visite.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : mandat, bail, état des lieux, loyers, quittances et comptes aux propriétaires",
            'duree'  => '3 h 30',
            'points' => [
                "Le registre des mandats tenu dans l'outil : numéro d'ordre reporté sur chaque original, date, durée, mandant, bien, conditions de rémunération.",
                "Les modèles de bail et d'état des lieux paramétrés selon la loi du pays : forme écrite, exemplaires, dépôt de garantie, avance, révision.",
                "L'état des lieux contradictoire sur tablette ou téléphone, pièce par pièce, avec photos datées et signatures.",
                "L'échéancier des loyers, le rapprochement des encaissements par mobile money, virement ou espèces, et la quittance émise pour chaque paiement complet.",
                "Le relevé mensuel de gérance au propriétaire : loyers reçus, impayés, travaux, commission, solde versé.",
                "Exercice de contrôle : un mois de loyers d'un petit immeuble, du premier encaissement au relevé envoyé au propriétaire.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : documents du bien, données des candidats et IA encadrée",
            'duree'  => '3 h 30',
            'points' => [
                "Le dossier numérique du bien : titre ou certificat, état descriptif, plans, autorisations, diagnostics, procès-verbaux, rangés et datés.",
                "Les pièces que l'on peut demander à un candidat locataire, celles que l'on ne demande jamais, et la durée de conservation de chaque dossier.",
                "Les canaux interdits aux documents sensibles : pas de pièce d'identité complète ni de numéro bancaire dans une conversation WhatsApp.",
                "L'IA pour résumer un règlement de copropriété ou un cahier des charges, préparer une relance d'impayé ou un relevé, avec la charte d'usage de l'agence.",
                "Ce que l'IA ne fait jamais : trier des candidats, estimer seule un prix, rédiger un mandat ou un bail sans relecture.",
                "Exercice de contrôle : la charte d'usage de l'IA de l'agence, rédigée en séance et signée par la direction.",
            ],
        ],
        [
            'titre'  => 'Séance de suivi, cinq semaines plus tard : ce que le portefeuille a confirmé',
            'duree'  => '2 h, à distance',
            'points' => [
                "Lecture du CRM : demandes reçues, délai de première réponse, visites tenues, dossiers signés.",
                "Contrôle d'un échantillon de quittances, de relevés aux propriétaires et d'états des lieux.",
                "Revue des usages de l'IA depuis la session et des écarts à la charte.",
                "Décision écrite sur la suite : logiciel de gestion locative, formation complémentaire, ou statu quo raisonné.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Agences immobilières, agents indépendants, promoteurs, administrateurs et gestionnaires de biens : direction, négociateurs, gestion locative, accueil"],
        ['l' => 'Durée', 'v' => 'Quatre demi-journées sur deux jours, puis un suivi de deux heures à distance'],
        ['l' => 'Formats', 'v' => "À l'agence, entre agences, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que changent l'IA, la digitalisation et l'automatisation pour une agence immobilière, un promoteur ou un gestionnaire de biens ?",
            'paragraphes' => [
                "L'immobilier vit d'informations qui circulent mal. Un panneau planté devant une maison fait sonner le téléphone d'un négociateur pendant qu'il conduit ; une annonce publiée sur trois sites reste en ligne deux semaines après la signature du bail ; un propriétaire installé à Paris ou à Montréal demande chaque mois, par message vocal, si son loyer est rentré. Le métier consiste à rapprocher une demande d'un bien, puis à tenir dans la durée une relation à trois entre le propriétaire, l'occupant et l'agence. Chaque oubli coûte une affaire, une commission ou la confiance d'un mandant.",
                "La digitalisation, dans une agence, commence par une règle simple : chaque information vit à un seul endroit et toute l'équipe la consulte au même endroit. Une fiche par bien, une fiche par contact, un registre des mandats, un échéancier des loyers, un dossier par locataire. Un CRM, un logiciel de gestion locative ou un tableur partagé bien construit font l'affaire au départ. Ce qui compte, c'est que le négociateur, la personne de l'accueil et la direction lisent la même chose, et que rien ne dépende de la mémoire ou du téléphone personnel d'un salarié.",
                "L'automatisation prend ensuite les tâches répétitives sans jugement : accusé de réception d'une demande, confirmation de visite la veille, avis d'échéance, quittance envoyée après un paiement complet, relevé mensuel au propriétaire. L'intelligence artificielle aide surtout à écrire et à lire : mettre en forme une annonce à partir de la fiche du bien, répondre en anglais à un expatrié, résumer un règlement de copropriété de soixante pages, préparer le brouillon d'une relance. Elle ne connaît pas le bien et ne voit pas les fissures. Nourrie d'une fiche fausse, elle produit une annonce fausse, bien écrite.",
                "Richard SALANON n'est ni agent immobilier, ni promoteur, ni administrateur de biens, et ne prétend pas enseigner la négociation, l'estimation ou le droit immobilier à ceux qui en vivent. Il forme vos équipes à l'usage des outils qui portent ce métier, sur votre propre portefeuille : vos demandes, vos mandats, vos baux, vos encaissements. Quand un sujet demande plus de temps, il oriente vers une formation détaillée du catalogue.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Du premier appel jusqu'à la fin du bail, où le numérique change-t-il le travail d'une agence ?",
            'legende' => "Ce qui se perd le plus souvent avant la formation, ce qu'apporte un outil partagé, ce que l'IA peut proposer, et ce qui reste toujours à une personne de l'agence.",
            'entetes' => ['Étape', 'Ce qui se perd le plus souvent', 'Avec un outil simple et partagé', "Ce que l'IA peut proposer", "Ce qui reste à l'agence"],
            'lignes'  => [
                ['Prise de mandat', 'Mandat signé sur un coin de table, registre tenu en retard, durée oubliée', 'Registre des mandats numéroté, échéance du mandat signalée à l\'avance', 'Résumer les conditions convenues pour les relire avec le mandant', 'Négocier, faire signer, accomplir les formalités du pays'],
                ['Annonce', 'Surface approximative, bien déjà loué toujours en ligne', 'Une fiche du bien qui alimente toutes les annonces, retrait le jour de la signature', 'Mettre en forme et traduire à partir de la fiche', 'Vérifier chaque mention et chaque photo'],
                ['Demande entrante', 'Appel non rappelé, message vocal écouté trois jours plus tard', 'Fiche contact créée à la première prise de contact, prochaine action datée', 'Proposer une réponse dans la langue du demandeur', 'Qualifier le besoin, juger la suite à donner'],
                ['Visite', 'Rendez-vous oublié, clé introuvable, propriétaire non prévenu', 'Planning partagé, confirmation la veille, compte rendu le jour même', 'Rédiger le compte rendu à partir des notes de l\'agent', 'Faire visiter, répondre aux questions sur le bien'],
                ['Dossier du candidat', 'Pièces envoyées en photo dans une conversation, copies conservées sans limite', 'Liste fermée des pièces, dossier rangé, durée de conservation fixée', 'Aucun rôle dans le choix', 'Décider, sans critère interdit'],
                ['Bail et état des lieux', 'Modèle ancien, état des lieux sans photo ni date', 'Modèles conformes à la loi du pays, état des lieux pièce par pièce sur tablette', 'Relire la cohérence entre le bail et la fiche du bien', 'Faire signer, remettre les clés, remettre les exemplaires'],
                ['Loyers et quittances', 'Paiement reçu sur le numéro d\'un agent, quittance oubliée', 'Échéancier, rapprochement des encaissements, quittance pour chaque paiement complet', 'Préparer le brouillon d\'une relance courtoise', 'Fixer la suite d\'un impayé, appeler le locataire'],
                ['Comptes au propriétaire', 'Solde annoncé de mémoire au téléphone', 'Relevé mensuel tiré de l\'outil, pièces jointes', 'Rédiger le message d\'accompagnement du relevé', 'Valider les chiffres et verser le solde'],
                ['Fin du bail', 'Dépôt de garantie restitué sans état des lieux de sortie comparable', 'Comparaison des deux états des lieux, décompte écrit', 'Lister les écarts entre les photos d\'entrée et de sortie', 'Trancher un désaccord, restituer dans le délai'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ne doivent jamais faire l'IA et l'automatisation dans une agence immobilière, et quels textes le disent ?",
            'intro' => "L'agence répond de ce qu'elle publie, de ce qu'elle encaisse et des données qu'elle garde, que le texte soit écrit par un négociateur, par un logiciel ou par un assistant. Voici les limites posées dès la première séance, avec les textes qui les fixent.",
            'items' => [
                ['titre' => 'Classer ou écarter des candidats sur un critère interdit', 'texte' => "Au Bénin, l'article 5 de la loi n° 2018-12 du 2 juillet 2018 sur le bail à usage d'habitation domestique interdit de refuser un logement à une personne en raison de son origine ethnique, de son identité, de son sexe, de sa situation professionnelle ou matrimoniale, de son handicap, de ses opinions politiques, de sa race ou de sa religion. La politique de la messagerie WhatsApp Business interdit de son côté toute discrimination ou préférence fondée sur une caractéristique personnelle. Un assistant à qui l'on demande de « garder les meilleurs profils » reproduit ces critères sans le dire : le choix du locataire reste une décision humaine, motivée par des éléments licites."],
                ['titre' => "Réclamer ou garder des pièces que la loi n'autorise pas", 'texte' => "En France, la CNIL rappelle dans sa page du 10 octobre 2025 que le décret n° 2015-1437 du 5 novembre 2015 fixe la liste des justificatifs qu'un bailleur ou une agence peut demander, et que le livret de famille, la carte Vitale, les relevés de compte bancaire, le contrat de mariage, le jugement de divorce ou l'extrait de casier judiciaire ne peuvent pas être exigés, sous peine d'une amende pouvant atteindre 3 000 €, ou 15 000 € pour une personne morale. Son référentiel du 6 mai 2021 encadre les données de la gestion locative. Au Bénin, la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 portant code du numérique</a> régit la collecte et la conservation de ces mêmes données."],
                ['titre' => "Faire circuler pièces d'identité et numéros bancaires par messagerie", 'texte' => "La politique de la messagerie WhatsApp Business, mise à jour le 23 septembre 2026, demande de ne pas partager et de ne pas faire partager en entier un numéro de carte bancaire, de compte bancaire ou de carte d'identité. Or c'est exactement ce qui se passe quand un candidat envoie la photo de sa carte au négociateur, qui la transfère ensuite à un collègue puis la colle dans un assistant pour « remplir le bail ». Les pièces se déposent dans un espace prévu pour cela, avec un accès limité, et la conversation ne garde que les échanges commerciaux."],
                ['titre' => 'Rédiger seul un mandat ou un bail', 'texte' => "Au Bénin, la loi n° 2018-12 exige un bail écrit et signé, en autant d'exemplaires que de parties, et un état des lieux contradictoire daté, signé et annexé au bail ; elle impose que le mandat soit rédigé en autant d'originaux que de parties, enregistré, numéroté sur le registre des mandats de l'agent et limité dans le temps, sous peine de nullité. En France, la fiche « Devenir agent immobilier » de Service Public Entreprendre rappelle l'exigence d'un mandat écrit et de registres tenus. Un assistant peut relire un modèle ; il ne remplace ni ce modèle validé par un juriste, ni les formalités."],
                ['titre' => "Laisser un robot promettre ou réclamer de l'argent", 'texte' => "Un robot qui confirme une disponibilité, accorde une baisse de loyer ou annonce des « frais de dossier » engage l'agence. L'article 31 de la loi béninoise interdit à l'agent de recevoir une somme autre que celle prévue entre les parties, et un tribunal canadien a jugé en 2024 qu'une entreprise répondait des promesses de son robot conversationnel, comme le raconte l'histoire <a href=\"/histoires/air-canada-chatbot\">Air Canada et son chatbot</a>. Les réponses automatiques s'en tiennent aux conditions écrites par la direction ; tout le reste passe à un humain identifié."],
                ['titre' => "Publier un bien que l'on ne peut plus louer, ou le décrire tel qu'il n'est pas", 'texte' => "En France, le ministère de la Transition écologique rappelle dans son communiqué du 27 décembre 2024 que, depuis le 1er janvier 2025, les logements classés G au diagnostic de performance énergétique sont interdits à la location, pour les nouveaux contrats comme lors du renouvellement ou de la reconduction tacite des contrats en cours. Une annonce générée automatiquement à partir d'un vieux fichier peut remettre en ligne un tel logement. De même, une pièce meublée virtuellement par l'IA se signale comme telle sur l'annonce : le visiteur qui découvre une autre pièce que la photo ne revient pas."],
                ['titre' => "Laisser l'équipe se servir de l'IA sans formation ni règle", 'texte' => "En Europe, l'article 4 du règlement sur l'IA oblige depuis le 2 février 2025 les entreprises qui utilisent ces outils à veiller à la maîtrise de l'IA par leur personnel ; selon les questions et réponses de la Commission mises à jour le 27 juillet 2026, contrôle et sanctions sont possibles depuis le 3 août 2026. Une agence de Lille ou de Liège dont les négociateurs rédigent leurs annonces avec un assistant est concernée. Une charte d'usage écrite et une formation courte font partie de la réponse."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles règles du pays un logiciel de gestion ou un tableur de l'agence doit-il intégrer ?",
            'legende' => "Exemples tirés des textes officiels consultés le 5 octobre 2026. La formation ne remplace pas l'avis d'un juriste ou d'un notaire : elle apprend à traduire chaque règle en champ obligatoire, en plafond ou en alerte dans l'outil.",
            'entetes' => ['Pays et texte', 'Ce que le texte exige du professionnel', "Ce que l'outil doit en tirer"],
            'lignes'  => [
                ['Bénin, loi n° 2018-12 du 2 juillet 2018 (articles 7, 12 et 13)', "Bail écrit, signé par les parties ou leurs mandataires, établi en autant d'exemplaires que de parties ; état des lieux d'entrée et de sortie contradictoire, daté, signé et annexé au bail", "Modèle de bail unique, case « état des lieux signé » obligatoire avant la remise des clés"],
                ['Bénin, même loi (articles 21 et 23 à 25)', "Inscription au registre des agents immobiliers, carte professionnelle, assurance ; mandat en autant d'originaux que de parties, enregistré, portant le numéro du registre des mandats, limité dans le temps sous peine de nullité, prorogation écrite", 'Registre des mandats numéroté, champ « durée » obligatoire, alerte avant échéance'],
                ['Bénin, même loi (articles 24, 29 et 31)', "Le mandat précise la réception des fonds, la reddition des comptes et la rémunération ; commission plafonnée à 50 % du loyer mensuel pour une simple mise en relation et à 10 % du loyer mensuel, chaque mois, en gestion ; aucune autre somme que celle convenue", "Plafonds paramétrés, relevé mensuel au propriétaire, aucune ligne de frais hors mandat"],
                ['Bénin, même loi (articles 59, 67, 68, 70 et 71)', "Dépôt de garantie de trois mois de loyer, remboursé en fin de bail ; décompte daté et signé du loyer avant le premier terme ; paiement mensuel contre quittance ; hausse issue d'une clause de révision limitée à 2 % du montant annuel initial", 'Quittance générée à chaque paiement, révision plafonnée, décompte joint au dossier'],
                ["Côte d'Ivoire, code de la construction et de l'habitat (loi n° 2019-576 du 26 juin 2019)", "Bail d'habitation écrit et enregistré auprès de l'administration fiscale ; deux mois de loyer d'avance au plus ; dépôt de garantie de deux mois au plus, restitué dans le mois suivant la remise des clés ; état des lieux écrit et contradictoire ; quittance de paiement", "Suivi de l'enregistrement, plafonds d'avance et de dépôt, échéance de restitution"],
                ['Espace OHADA, Acte uniforme relatif au droit commercial général', "Les baux de locaux professionnels et commerciaux relèvent de cet Acte uniforme, comme le rappelle l'article 3 de la loi béninoise, et non de la loi sur l'habitation", 'Deux familles de modèles : habitation, et bureaux ou boutiques'],
                ['France, loi du 6 juillet 1989 (fiches officielles)', "Dépôt de garantie limité à un mois de loyer hors charges pour un logement vide et à deux mois pour un meublé, restitué sous un ou deux mois ; quittance remise gratuitement au locataire qui la demande, par courriel s'il a donné son accord", 'Plafond selon le type de location, compteur de délai de restitution, accord du locataire enregistré'],
                ['France, profession d\'agent immobilier (Service Public Entreprendre)', "Mandat écrit ; registre des mandats et registre-répertoire tenus sur papier ou sous forme électronique, conservés dix ans ; formation continue de 42 heures sur trois ans, dont au moins deux heures de déontologie", 'Registres exportables, archivage de dix ans, suivi des heures de formation de chaque collaborateur'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Annonces, fiche Google, WhatsApp : comment ne plus perdre une demande entre le panneau et la visite ?",
            'paragraphes' => [
                "Dans la plupart des agences que l'on observe avant une session, le problème n'est pas le manque de demandes. C'est leur dispersion. Un même appartement reçoit des messages sur un portail, des commentaires sous une publication, des appels sur le numéro du panneau et des notes vocales sur le WhatsApp d'un agent. Personne ne sait combien de personnes l'ont demandé, ni lesquelles ont été rappelées. Le premier travail du parcours consiste à compter, sur une semaine réelle, les demandes reçues par canal, puis celles qui ont obtenu une réponse dans la journée. Le résultat surprend presque toujours la direction.",
                "La réponse tient en trois gestes. Toute demande devient une fiche dans l'outil commun dès le premier contact, avec sa source. Chaque fiche porte une prochaine action datée : rappeler, envoyer d'autres biens, fixer une visite, relancer un dossier incomplet. Et chaque soir, quelqu'un relit les fiches sans action. L'application WhatsApp Business aide beaucoup avec ses étiquettes et ses réponses rapides, à condition que le numéro appartienne à l'agence. La politique de WhatsApp exige par ailleurs que les personnes aient donné leur numéro et leur accord avant de recevoir des messages : pas de diffusion de nouveaux biens à un fichier acheté.",
                "Le coût des messages compte aussi pour un gestionnaire qui envoie chaque mois des avis d'échéance et des quittances. Sur la plateforme WhatsApp Business de Meta, la page de tarification consultée le 5 octobre 2026 indique que, depuis le 1er octobre 2026, chaque numéro professionnel dispose d'un quota mensuel de 1 000 messages de service gratuits, non reportable, au-delà duquel ils sont facturés, et qu'un compte sans moyen de paiement cesse d'envoyer ses messages de service une fois le quota épuisé. Un portefeuille de quatre cents lots peut l'atteindre vite : le calcul se fait avant de brancher un robot.",
                "Reste la fiche Google de l'agence, souvent créée un jour puis oubliée. Le règlement de Google Maps sur les contenus ajoutés par les utilisateurs interdit d'offrir un avantage en échange d'un avis, de solliciter les seuls avis positifs, de fixer au personnel un nombre d'avis à obtenir et de publier des informations personnelles d'un tiers sans son consentement. Pour une agence, cela signifie demander un avis à chaque client après la signature ou la remise des clés, y compris au locataire mécontent du délai, et répondre sans jamais citer un loyer, une adresse précise ou un litige.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et systèmes une agence, un promoteur ou un gestionnaire de biens doit-il savoir manier ?",
            'legende' => "Coûts et règles relevés le 5 octobre 2026 sur les pages officielles citées dans les sources. Abonnements, commissions et frais restent payés par l'agence à chaque éditeur ou administration, en dehors du devis de formation.",
            'entetes' => ['Outil ou système', "Son rôle dans l'agence", "Ce qu'il coûte ou impose", "Où l'apprendre en détail"],
            'lignes'  => [
                ["Fiche d'établissement Google", "Être trouvé par les vendeurs et les bailleurs du quartier, afficher horaires, avis et photos de l'agence", "Sans frais ; règlement strict sur les avis et les données personnelles", '<a href="/formations/visibilite-google">Visibilité Google : fiche, avis, SEO local</a>'],
                ['Portails et groupes d\'annonces', 'Diffuser les biens au-delà du quartier, toucher la diaspora et les expatriés', "Abonnement ou paiement par annonce selon le portail ; retrait à faire le jour de la signature", 'Ce parcours, première demi-journée'],
                ['Application WhatsApp Business', "Répondre, étiqueter chaque contact par étape, envoyer la fiche d'un bien, confirmer une visite", 'Gratuite ; accord préalable des personnes exigé par la politique de WhatsApp', '<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>'],
                ['Plateforme WhatsApp Business et robot', 'Avis d\'échéance, quittances, rappels de visite envoyés en nombre ou depuis un logiciel', 'Quota de 1 000 messages de service gratuits par mois et par numéro depuis le 1er octobre 2026, facturation au-delà', '<a href="/formations/chatbot-whatsapp">Chatbot WhatsApp et API WhatsApp Business</a>'],
                ['CRM (Odoo, Dolibarr ou outil dédié)', 'Suivre chaque demande et chaque mandat du premier contact à la signature', "Licence ou hébergement selon l'outil ; Odoo propose une application gratuite et une offre Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois", '<a href="/formations/crm-pipeline">CRM : pipeline commercial et reporting</a>'],
                ['Logiciel de gestion locative', 'Baux, échéancier, quittances, relevés aux propriétaires, travaux', "Abonnement par lot ou par utilisateur fixé par l'éditeur ; paramétrage selon la loi du pays à vérifier avant signature", 'Ce parcours, troisième demi-journée, pour savoir quoi exiger'],
                ['Tableur partagé', 'Petit portefeuille, registre des mandats, échéancier des loyers en attendant un logiciel', 'Souvent déjà disponible ; risque de versions multiples et de formules cassées', '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Portail national des e-services du Bénin', "Demander en ligne l'état descriptif d'un titre, un extrait de plan cadastral ou un certificat d'appartenance", "État descriptif : 5 500 FCFA, durée estimée de 24 heures ; connexion avec le numéro personnel d'identification", 'Ce parcours, quatrième demi-journée'],
                ['Passerelle de paiement', 'Encaisser loyers et réservations par mobile money ou carte, avec un relevé exploitable', 'Commission par transaction, règles de remboursement propres à chaque passerelle', '<a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">Comparatif FedaPay, KkiaPay et CinetPay</a>'],
                ["Assistant d'IA (ChatGPT, Claude, Gemini, Copilot)", 'Rédiger, traduire, résumer, préparer des brouillons de relance et de compte rendu', "Versions gratuites limitées, offres professionnelles par utilisateur ; charte d'usage à écrire", '<a href="/formations/contenu-avec-ia">Créer du contenu avec l\'IA</a> et <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Titres, états descriptifs, plans, diagnostics : que change le numérique dans la vérification des documents d'un bien ?",
            'paragraphes' => [
                "Une vente ou une location sérieuse commence par les papiers du bien. Au Bénin, l'Agence nationale du domaine et du foncier propose plusieurs démarches en ligne, parmi lesquelles l'extrait de plan cadastral, l'extrait de plan parcellaire, le certificat d'appartenance, le transfert de propriété et l'état descriptif. Sur le portail service-public.bj, l'état descriptif est présenté comme le document qui renseigne sur le propriétaire, la nature, la situation, le lieu, la contenance et les inscriptions d'un titre de propriété à un instant précis. Le service coûte 5 500 FCFA pour une durée estimée de 24 heures.",
                "La même page précise que la demande peut être faite par un officier ministériel, par le propriétaire ou par un requérant muni d'une procuration. Pour une agence, la conséquence pratique est simple : la procuration du mandant se range dans le dossier du bien, avec la date de chaque état descriptif obtenu. Un état descriptif vaut à un instant précis ; celui de l'an dernier ne prouve rien sur la situation d'aujourd'hui. Le parcours apprend à dater chaque pièce, à noter qui l'a obtenue et à refaire la vérification avant chaque étape qui engage le client.",
                "En France, la note de conjoncture des Notaires de France de juillet 2026 observe que les exigences documentaires préalables à la vente se renforcent. Diagnostics, règlement de copropriété, procès-verbaux d'assemblée, plans et autorisations forment un dossier que l'acquéreur, son banquier et son notaire réclament tôt. Une agence qui tient pour chaque bien un dossier numérique complet, nommé et daté, gagne des semaines ; celle qui cherche les pièces au moment de l'avant-contrat les perd. Le promoteur, lui, y ajoute permis, plans de vente, notices descriptives et appels de fonds par acquéreur.",
                "L'IA trouve ici un usage précieux et limité. Elle sait résumer un règlement de copropriété de soixante pages, repérer dans un procès-verbal les travaux votés, comparer deux versions d'un plan de vente ou lister les pièces manquantes d'un dossier. Elle ne certifie rien : elle ne voit pas un titre falsifié, ne sait pas si une parcelle fait l'objet d'un litige et ne remplace ni le notaire, ni la vérification auprès de l'administration compétente. Chaque résumé produit par l'assistant renvoie à la page du document d'origine, que l'agent relit avant de s'en servir.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon la structure, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => 'Agence de location de quatre agents, à Cotonou', 'probleme' => "Les demandes arrivent sur les téléphones personnels des agents, les annonces des appartements loués restent en ligne, et deux candidats se présentent parfois pour la même clé.", 'solution' => "Numéro WhatsApp de l'agence avec étiquettes par étape, fiche de chaque bien qui alimente les annonces et se ferme à la signature, planning des visites partagé, registre des mandats numéroté dans l'outil."],
                ['secteur' => 'Gestionnaire de cent vingt logements, à Abidjan', 'probleme' => "Les loyers arrivent par mobile money sur trois numéros, les quittances partent quand on y pense, et les propriétaires reçoivent leur solde sans détail.", 'solution' => "Échéancier par lot, rapprochement hebdomadaire des encaissements, quittance émise pour chaque paiement complet, relevé mensuel au propriétaire avec travaux et commission, et suivi des plafonds d'avance et de dépôt prévus par le code de la construction et de l'habitat."],
                ['secteur' => 'Promoteur de villas, à Dakar', 'probleme' => "Les acquéreurs, dont beaucoup vivent en Europe, demandent l'avancement du chantier par message ; les appels de fonds et les versements se suivent dans un cahier.", 'solution' => "Fiche par acquéreur dans le CRM, photos datées du chantier envoyées à chaque étape, tableau des appels de fonds et des versements, réponses types en français et en anglais préparées avec l'IA puis relues."],
                ['secteur' => 'Agent indépendant, à Lomé', 'probleme' => "Un seul téléphone pour tout, des clés confiées par des propriétaires absents, et aucune trace écrite de ce qui a été convenu avec chacun.", 'solution' => "Mandat écrit pour chaque bien, registre tenu dans un tableur, liste des clés avec la date de chaque sortie, compte rendu de visite envoyé au propriétaire le soir même."],
                ['secteur' => 'Propriétaire de la diaspora, à Paris, avec un immeuble à Abomey-Calavi', 'probleme' => "Le gérant sur place envoie des montants par message vocal ; le propriétaire ne sait ni quel appartement est vide, ni ce qu'ont coûté les dernières réparations.", 'solution' => "Formation conjointe du propriétaire et du gérant à distance : relevé mensuel partagé, photos des travaux avec factures, état des lieux d'entrée et de sortie conservés, conformément à la loi n° 2018-12."],
                ['secteur' => 'Agence de transaction et de gestion, à Lyon', 'probleme' => "Les dossiers des candidats arrivent par courriel avec des relevés bancaires que personne n'a demandés, et une annonce rédigée par un assistant a remis en ligne un logement classé G.", 'solution' => "Liste fermée des justificatifs du décret de 2015, suppression des pièces superflues, durée de conservation fixée, contrôle de la classe énergétique avant chaque publication, charte d'usage de l'IA au titre de l'article 4 du règlement européen."],
                ['secteur' => 'Courtier immobilier, à Montréal', 'probleme' => "Les demandes venues des portails et des réseaux sociaux se perdent entre la boîte de courriel et le cellulaire, et les avis Google sont demandés aux seuls clients satisfaits.", 'solution' => "Pipeline unique des acheteurs et des vendeurs, prochaine action datée pour chaque contact, même demande d'avis envoyée à chaque transaction conclue, réponses aux avis rédigées sans aucun détail sur l'affaire."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels usages de l'IA font gagner du temps à une agence, et à quelles conditions ?",
            'legende' => "Usages travaillés pendant la quatrième demi-journée, sur des assistants courants. Deux règles valent partout : aucune pièce d'identité, aucun numéro bancaire et aucun dossier complet de candidat n'entre dans l'assistant ; rien de ce qui en sort n'est envoyé sans relecture.",
            'entetes' => ['Usage', "Ce que l'on fournit à l'assistant", "Ce que l'on vérifie avant usage", "Ce qu'on ne lui confie jamais"],
            'lignes'  => [
                ['Rédiger une annonce', 'La fiche du bien : surface mesurée, pièces, équipements réels, conditions', "Qu'aucun équipement, aucune vue, aucune surface n'a été ajouté", 'Le prix, qui reste une décision du mandant et de l\'agence'],
                ['Répondre à une demande en anglais ou en portugais', 'Le message du demandeur sans son nom, la fiche du bien, les créneaux de visite', 'Montants, dates, conditions, ton de la réponse', 'Une promesse de réservation ou de baisse de loyer'],
                ['Rédiger un compte rendu de visite', 'Les notes de l\'agent, sans le nom des visiteurs', 'Que les remarques rapportées sont exactes', 'Une appréciation sur la personne des visiteurs'],
                ['Résumer un règlement de copropriété ou un cahier des charges', 'Le document, sans données personnelles des copropriétaires', 'Chaque point du résumé, page par page', "L'avis juridique sur une clause"],
                ['Préparer une relance d\'impayé', 'Le montant, l\'échéance, le ton voulu par la direction', 'Les chiffres, recoupés avec l\'échéancier, et la conformité au bail', "L'envoi automatique d'une mise en demeure"],
                ['Rédiger le message du relevé mensuel', 'Les totaux du relevé, sans numéro de compte', 'Que le message reflète les chiffres validés', 'Le calcul du solde à verser'],
                ['Lister les pièces manquantes d\'un dossier de vente', 'La liste des pièces reçues, nommées', 'Que la liste correspond au dossier réel', 'La vérification de l\'authenticité d\'un titre'],
                ['Analyser la vacance du portefeuille', 'Un export anonymisé : lot, quartier, loyer, dates d\'entrée et de sortie', 'Les calculs, refaits sur un échantillon', 'Le choix des locataires ou des quartiers à éviter'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type pour une agence ou un gestionnaire de biens, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment le parcours s'organise-t-il autour des visites et des échéances de loyers ?",
            'items' => [
                ['titre' => 'Le premier échange', 'duree' => '30 minutes', 'texte' => "Transaction, location, gestion ou promotion ; nombre de mandats et de lots ; canaux de demandes ; outils déjà en place ; ce qui bloque aujourd'hui. Cet échange, le cadrage qui suit et le devis ne sont pas facturés."],
                ['titre' => "Une demi-journée d'observation", 'duree' => '2 à 3 heures', 'texte' => "Avant la session, une matinée à l'agence, ou un appel vidéo pour une structure éloignée, montre où l'information se perd : entre l'accueil et les négociateurs, entre le terrain et le bureau, entre la caisse et le relevé du propriétaire."],
                ['titre' => 'Le tri des demi-journées', 'duree' => 'Selon le devis', 'texte' => "Une agence de transaction insiste sur les demandes, les mandats et les annonces ; un gestionnaire sur les loyers, les quittances et les relevés ; un promoteur sur le suivi des acquéreurs et des documents. Ce qui ne sert pas est retiré."],
                ['titre' => 'Des séances placées hors des pics', 'duree' => 'Hors fin et début de mois', 'texte' => "Les premiers jours du mois appartiennent aux encaissements, et le samedi souvent aux visites. Les séances se placent en milieu de mois, en semaine, et les négociateurs passent par roulement pour que l'accueil reste ouvert."],
                ['titre' => 'La pratique sur votre portefeuille', 'duree' => 'Pendant chaque séance', 'texte' => "Le CRM se remplit avec vos demandes de la semaine, le registre avec vos mandats en cours, l'échéancier avec vos lots réels, les modèles avec les règles de votre pays. Ce qui est produit en séance sert dès le lendemain."],
                ['titre' => 'Le suivi', 'duree' => '2 heures, à distance', 'texte' => "Cinq semaines plus tard, on relit le CRM, un échantillon de quittances et de relevés, et les usages de l'IA, puis on décide par écrit de la suite."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "À l'agence, entre agences, à distance ou en hybride : quel format retenir ?",
            'legende' => "Le format se décide au premier échange, selon la taille de l'équipe, la dispersion des agents sur le terrain et la qualité de la connexion.",
            'entetes' => ['Format', 'Situation typique', 'Rythme habituel', "Points d'organisation"],
            'lignes'  => [
                ["Intra, à l'agence", "Une agence ou un cabinet de gestion et toute son équipe : direction, négociateurs, gestion locative, accueil", 'Quatre demi-journées, en milieu de mois', 'Travail sur vos outils et vos dossiers réels ; roulement pour tenir l\'accueil'],
                ['Inter, entre agences', "Groupement ou réseau d'agences, chambre ou association professionnelle, agents indépendants d'une même ville", 'Deux journées en salle', "Chacun travaille sur son propre portefeuille ; aucun mandat, loyer ou dossier d'un participant n'est montré aux autres"],
                ['À distance', "Gestionnaires et propriétaires de la diaspora, agences en Europe ou au Canada, agents dispersés", 'Quatre séances de deux heures et demie, à une semaine d\'intervalle', "Partage d'écran ; exercices réalisés sur le terrain entre deux séances"],
                ['Hybride', "Changement de logiciel de gestion, ouverture d'une agence, lancement d'un programme immobilier", 'Une journée sur place, puis deux séances courtes à distance', 'Modèles et registres posés sur place ; IA, avis et relevés repris à distance sur des cas réels'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation pour une agence ou un gestionnaire, et comment la régler ?",
            'intro'      => "Aucun tarif n'est publié : chaque parcours est chiffré sur devis, après un premier échange, un cadrage et un devis qui ne sont pas facturés. Le règlement se fait par virement, en espèces, par carte bancaire, par PayPal ou par Mobile Money (MTN, Moov). Les abonnements aux logiciels, aux portails d'annonces et les frais des démarches administratives restent payés par l'agence à leurs éditeurs ou aux services concernés.",
            'items'      => [
                ['offre' => 'Parcours agence de transaction', 'prix' => 'Sur devis', 'inclus' => ['Demandes, CRM et WhatsApp de l\'agence', 'Fiche du bien, annonces exactes, visites et comptes rendus', 'Registre des mandats et séance de suivi à distance']],
                ['offre' => 'Parcours gestion locative', 'prix' => 'Sur devis', 'inclus' => ['Modèles de bail et d\'état des lieux selon la loi du pays', 'Échéancier, quittances et relevés aux propriétaires', 'Dossiers des candidats et données personnelles']],
                ['offre' => 'Parcours promoteur', 'prix' => 'Sur devis', 'inclus' => ['Suivi des acquéreurs et des appels de fonds', 'Dossier numérique de chaque programme', 'Réponses types en plusieurs langues relues']],
                ['offre' => 'Module à la carte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée ciblée : fiche Google et avis, quittances et relevés, ou IA encadrée', 'Pour une structure déjà organisée sur le reste']],
            ],
            'variations' => [
                "Le nombre de personnes formées et le roulement nécessaire pour garder l'accueil ouvert.",
                "Le nombre de demi-journées retenues et l'ajout de la séance de suivi.",
                "Le lieu : l'agence, une salle de réseau ou d'association, une ville éloignée de Cotonou, ou la distance.",
                "L'état de départ : cahiers et téléphones, tableur, CRM ou logiciel de gestion déjà installé.",
                "La préparation : reprise des mandats en cours, modèles de bail à adapter, portefeuille de lots à saisir.",
                "La langue des séances et des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Une agence immobilière peut-elle faire financer la formation de son équipe ?",
            'paragraphes' => [
                "La question se règle avant la signature du devis. Le bon guichet dépend du pays, de la forme juridique de l'agence et de sa situation au regard des taxes de formation : une agence de quinze salariés déclarés, un agent indépendant et un réseau d'agences n'ont pas les mêmes droits. Partout, la méthode reste identique : envoyer au fonds le programme et le devis, poser la question par écrit et garder sa réponse.",
                "En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> ouvre le dépôt d'un plan de formation à toute entreprise qui justifie du paiement régulier des deux taxes ; le règlement n'intervient qu'après le suivi et le contrôle de ses services et l'approbation de sa Commission permanente. Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> dispose d'un guichet pour le personnel des entreprises et les membres des organisations professionnelles, utile à un groupement d'agences qui se forme en commun.",
                "En France, la branche de l'immobilier relève d'<a href=\"https://www.opcoep.fr/\">Opco EP</a>, l'opérateur de compétences des entreprises de proximité. Mais <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que l'accès aux fonds publics et mutualisés suppose, depuis le 1er janvier 2022, un prestataire certifié Qualiopi. Richard SALANON n'affiche ni cette certification ni l'agrément d'un fonds africain : prévoyez le budget sans prise en charge. La formation ne vaut pas non plus, à elle seule, heures de formation continue au sens de la carte professionnelle ; vérifiez ce point auprès de votre chambre de commerce avant de compter dessus.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi l'argent des loyers ne doit-il jamais passer par le numéro personnel d'un agent ?",
            'texte' => "Parce que le jour où l'agent part, l'argent et sa trace partent avec lui. Un loyer reçu sur un téléphone personnel puis reversé en espèces ne laisse qu'une capture d'écran modifiable. Au Bénin, l'article 24 de la loi n° 2018-12 veut que le mandat précise les conditions dans lesquelles l'agent reçoit les fonds et rend ses comptes ; en France, la fiche officielle sur la profession impose un compte dédié aux fonds des clients. La règle tient en trois points : un seul canal d'encaissement au nom de l'agence, un rapprochement chaque semaine, une quittance et une ligne de relevé pour chaque somme reçue.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les agences qui se digitalisent, et comment les éviter ?",
            'intro' => "Ces erreurs viennent rarement de la négligence. Elles naissent d'un métier de terrain, où l'agent passe sa journée en voiture et en visite, loin de l'écran. Chacune a sa parade, travaillée pendant le parcours.",
            'items' => [
                ['titre' => 'Acheter un logiciel avant de savoir ce qu\'on y mettra', 'texte' => "Un logiciel de gestion locative choisi sur une démonstration reste vide, parce que personne n'a décidé qui saisit quoi. On commence par les règles : une fiche par bien, une par contact, un registre, un échéancier. Le logiciel vient ensuite, et l'on vérifie qu'il sait appliquer les plafonds et les modèles de votre pays."],
                ['titre' => 'Laisser une annonce vivre après la signature', 'texte' => "Un bien loué qui reste affiché attire des demandes inutiles et donne l'image d'une agence qui publie des biens imaginaires. Le retrait de toutes les annonces fait partie de la liste de signature, au même titre que la remise des clés, et une personne est nommée pour le faire."],
                ['titre' => 'Retoucher une photo jusqu\'à mentir', 'texte' => "Ciel bleu ajouté, fissure effacée, salon meublé par l'IA dans un appartement vide : le visiteur s'en aperçoit à la porte. Les corrections de lumière et de cadrage suffisent. Une mise en scène virtuelle se présente comme telle, à côté d'une photo de l'état réel."],
                ['titre' => 'Garder tous les dossiers de candidats pour toujours', 'texte' => "Copies de cartes d'identité, bulletins de salaire et attestations s'accumulent dans les boîtes de courriel et les galeries de photos. Chaque dossier a une durée de vie fixée dans la charte de l'agence : celui du candidat non retenu se supprime, celui du locataire se range dans un espace protégé jusqu'à la fin de sa durée de conservation."],
                ['titre' => 'Confondre relance et harcèlement', 'texte' => "Un robot qui relance un locataire en retard trois fois par jour, ou qui écrit à son employeur, crée un litige au lieu d'un paiement. La relance automatique se limite à un rappel courtois à date fixe ; ce qui suit relève d'un appel humain et, le cas échéant, des procédures prévues par la loi du pays."],
                ['titre' => 'Promettre au propriétaire un relevé que personne ne tient', 'texte' => "Annoncer un relevé mensuel pour signer un mandat de gestion, puis l'envoyer un mois sur trois, détruit la confiance plus vite que l'absence de promesse. Le relevé sort de l'outil à date fixe, même quand le mois est calme, et un collaborateur le contrôle avant envoi."],
                ['titre' => 'Laisser l\'IA estimer un bien', 'texte' => "Un assistant produit volontiers un prix au mètre carré convaincant pour un quartier qu'il ne connaît pas. L'estimation reste le travail de l'agent : références de ventes et de locations réelles, visite, état du bien. L'IA peut mettre en forme l'avis de valeur une fois les chiffres établis par une personne."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés une agence ou un gestionnaire doit-il connaître avant de s'équiper ?",
            'items' => [
                ['valeur' => '53,4 %', 'libelle' => "Part de la population du Bénin vivant en ville en 2025 ; 44,7 % pour l'Afrique subsaharienne, dont la population urbaine progresse d'environ 3,6 % par an", 'source' => 'Banque mondiale, indicateurs SP.URB.TOTL.IN.ZS et SP.URB.GROW, mise à jour du 13 juillet 2026', 'url' => 'https://donnees.banquemondiale.org/indicateur/SP.URB.TOTL.IN.ZS?locations=BJ-ZG'],
                ['valeur' => '949 000', 'libelle' => 'Ventes de logements anciens en France sur les douze mois arrêtés à fin mai 2026, en hausse de 5,7 % sur un an', 'source' => 'Notaires de France, note de conjoncture immobilière n° 72, juillet 2026', 'url' => 'https://acte3.notaires.fr/wp-content/uploads/2026/09/Note-de-conjoncture-n%C2%B072-Juillet-2026.pdf'],
                ['valeur' => '93 %', 'libelle' => "Part des très petites entreprises dans la branche française de l'immobilier, qui compte 39 691 entreprises et 150 875 salariés dans le champ de son opérateur de compétences", 'source' => "Opco EP, panorama de la branche immobilier, édition 2025", 'url' => 'https://www.opcoep.fr/ressources/centre-ressources/branches/immobilier/panorama-immobilier-2025-opcoep.pdf'],
                ['valeur' => '10 %', 'libelle' => "Plafond mensuel de la commission d'un agent immobilier qui gère un logement pour le compte du bailleur, au Bénin ; 50 % d'un loyer mensuel pour une simple mise en relation", 'source' => 'Loi n° 2018-12 du 2 juillet 2018, article 29, Secrétariat général du Gouvernement du Bénin', 'url' => 'https://sgg.gouv.bj/doc/loi-2018-12/'],
                ['valeur' => '1 000', 'libelle' => "Messages de service gratuits par mois et par numéro sur la plateforme WhatsApp Business depuis le 1er octobre 2026, facturés au-delà", 'source' => 'Meta, tarification de la plateforme WhatsApp Business, lue le 5 octobre 2026', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing'],
                ['valeur' => '42 heures', 'libelle' => "Formation continue minimale d'un agent immobilier en France sur trois années consécutives d'activité, dont au moins deux heures de déontologie", 'source' => 'Service Public Entreprendre, fiche « Devenir agent immobilier »', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F32244'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Coupures, diaspora, mobile money, langues : que change le pays où l'on gère des biens ?",
            'paragraphes' => [
                "Selon la Banque mondiale, 53,4 % des habitants du Bénin vivaient en ville en 2025, et la population urbaine d'Afrique subsaharienne augmente d'environ 3,6 % par an. Les quartiers qui sortent de terre autour de Cotonou, d'Abidjan ou de Dakar se louent souvent avant d'avoir une adresse précise. Une fiche de bien utile y décrit l'accès comme le ferait un voisin : repère visible, état de la voie en saison des pluies, raccordement à l'eau et à l'électricité, compteur individuel ou partagé. Ces informations, que les portails ne demandent pas, évitent des visites inutiles.",
                "Le réseau tombe, l'électricité aussi. Un état des lieux ne peut pas attendre le retour de la connexion pour être signé, et une quittance doit pouvoir partir le soir même. La formation prévoit donc le mode dégradé : application qui fonctionne hors ligne et se synchronise ensuite, formulaire papier de secours daté et ressaisi le lendemain, export hebdomadaire du registre et de l'échéancier. Chacun sait à l'avance qui ressaisit, et où se range la version qui fait foi.",
                "Une large part des propriétaires et des acquéreurs vit loin du bien : en Europe, au Canada, dans un autre pays de la sous-région. Ils attendent des photos datées, un relevé lisible et des réponses à des heures décalées, parfois en anglais. Les messages types se préparent une fois pour toutes dans les deux langues les plus utiles à l'agence, avec l'aide d'un assistant puis la relecture d'une personne. Les appels vidéo de visite se planifient comme une visite physique, avec un compte rendu.",
                "L'argent, enfin, emprunte plusieurs chemins : mobile money pour la plupart des locataires, virement pour les entreprises qui logent leurs salariés, carte pour les expatriés, espèces au bureau. Chaque chemin doit aboutir au même échéancier, avec la référence de l'opération. En Europe, la question se pose autrement, avec le prélèvement et le virement, mais la règle de fond ne change pas : pas de somme reçue sans quittance ou reçu, pas de solde versé au propriétaire sans relevé.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour une agence ou un gestionnaire de biens ?",
            'legende' => "Chaque formation a sa fiche et son programme détaillé. Le parcours de cette page en pose les premiers gestes dans une agence ; la fiche approfondit un outil ou un sujet.",
            'entetes' => ['Formation', "Ce qu'elle règle dans l'agence", 'Pour quel poste', 'Durée annoncée sur sa fiche'],
            'lignes'  => [
                ['<a href="/formations/visibilite-google">Visibilité Google : fiche, avis, SEO local</a>', "Fiche de l'agence, demande d'avis conforme, réponses, présence sur les recherches du quartier", 'Direction et personne qui tiendra la fiche', '1 jour, ou une demi-journée en format resserré'],
                ['<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>', 'Étiquettes par étape, réponses rapides, fiche de chaque bien envoyée proprement', 'Négociateurs et accueil', 'Une demi-journée ou une journée, puis une séance de suivi'],
                ['<a href="/formations/crm-pipeline">CRM : pipeline commercial et reporting</a>', 'Chaque demande et chaque mandat suivis jusqu\'à la signature, relances et rapports', 'Direction et négociateurs', '2 jours en quatre demi-journées, puis une revue de pipeline à un mois'],
                ['<a href="/formations/contenu-avec-ia">Créer du contenu avec l\'IA</a>', 'Annonces, publications et vidéos courtes de biens, avec relecture et droits', 'Personne qui publie pour l\'agence', '2 jours en 4 demi-journées, ou 1 jour resserré'],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', 'Registre des mandats, échéancier des loyers et relevés qui tombent juste', 'Gestion locative, comptabilité', '2 jours en quatre demi-journées, plus un retour à un mois'],
                ['<a href="/formations/whatsapp-odoo-dolibarr-crm">WhatsApp relié à Odoo, Dolibarr et au CRM</a>', 'Conversations rattachées à la fiche du contact et du bien, relances depuis le logiciel', 'Agences qui reçoivent beaucoup de demandes par message', 'Deux jours, ou une journée et demie selon les rôles, puis une séance de suivi'],
                ['<a href="/formations/chatbot-whatsapp">Chatbot WhatsApp et API WhatsApp Business</a>', 'Avis d\'échéance, quittances et rappels de visite envoyés selon les règles de Meta', 'Gestionnaires de grands portefeuilles', 'Deux jours, puis une séance de suivi à distance'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Ce que la loi permet de faire des données des candidats et des locataires avec l'IA", 'Direction et responsable de la gestion locative', '1 jour de socle, ou 2 jours en 4 demi-journées'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Faux ordres de virement, comptes de portails piratés, téléphones perdus avec des dossiers', "Tous ceux qui touchent un compte ou un dossier de l'agence", 'Une journée, une demi-journée de plus pour les postes sensibles, puis un suivi de deux heures'],
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', 'CRM, facturation des honoraires et suivi des encaissements dans un même logiciel', "Équipes d'une agence qui passe à Odoo", '2 à 3 jours en demi-journées, répartis sur 5 à 6 semaines'],
                ['<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>', 'Tiers, propositions, factures et règlements dans un logiciel libre', 'Agences et promoteurs sous Dolibarr', '2 jours (4 demi-journées) ; 1 jour en séance individuelle'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre agence avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des professionnels de l'immobilier, agents, gestionnaires et équipes de promotion, sur leurs propres outils : le WhatsApp de l'agence, le tableur des loyers, le CRM, la fiche Google, l'assistant d'IA retenu par la direction. Il ne perçoit aucune commission d'un portail d'annonces ni d'un éditeur de logiciel de gestion, et n'est partenaire ni certifié d'aucun éditeur. Il peut donc recommander de garder un tableur bien tenu pour quarante lots, ou au contraire de passer à un logiciel quand les relevés prennent trois jours par mois.",
                "Créateur de <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>, il compte " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . ") et des missions dans " . count((array) fait('pays_travailles')) . " pays. Il déclare plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées au numérique, à l'IA, à l'automatisation et aux logiciels de gestion. Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays servis sur celle des <a href=\"/zones/\">zones d'intervention</a>.",
                "Ses engagements se contrôlent : réponse sous 24 heures, programme écrit remis avant la première séance, exercices sur vos mandats, vos lots et vos demandes réelles, supports modifiables qui restent à l'agence, et avis franc quand une formation n'est pas la bonne réponse. Quand il faut construire plutôt que former, les services <a href=\"/services/integration-whatsapp\">intégration WhatsApp</a>, <a href=\"/services/seo-local-google-business\">SEO local et fiche Google</a> et <a href=\"/services/saas-espace-client\">espace client en ligne</a> prennent le relais, par exemple pour ouvrir aux propriétaires un accès à leurs relevés. Le catalogue complet figure sur la page des <a href=\"/formations/\">formations</a>, et les formations aux logiciels de gestion sur la page <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre agence ?",
            'texte' => "Chaque demande devient une fiche avec une prochaine action ; chaque bien a une fiche qui alimente toutes ses annonces et se ferme à la signature ; chaque mandat porte son numéro de registre et sa durée ; chaque bail et chaque état des lieux suivent un modèle conforme à la loi du pays ; chaque somme reçue produit une quittance et une ligne de relevé ; chaque dossier de candidat a une durée de vie. L'IA rédige, traduit et résume ; elle ne choisit aucun locataire, n'estime aucun bien et ne promet rien au nom de l'agence.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former vos négociateurs et votre gestion locative au numérique et à l'IA ?",
            'texte'  => "Indiquez votre activité (transaction, location, gestion, promotion), le nombre de mandats ou de lots, la ville, vos outils actuels et le format souhaité : vous recevez une réponse sous 24 heures, puis un programme ajusté à votre agence et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon agence'],
        ],
    ],

    'faq' => [
        ['q' => "Notre agence travaille avec des cahiers et WhatsApp : la formation est-elle adaptée ?", 'r' => "Oui. Le parcours part de ce que vous avez : il installe d'abord un numéro d'agence, des étiquettes, une fiche par bien et un tableur de mandats et de loyers. Un CRM ou un logiciel de gestion locative ne vient qu'ensuite, quand le volume le justifie, et la formation apprend à le choisir sur des critères concrets."],
        ['q' => "Faut-il acheter un logiciel de gestion locative ?", 'r' => "Pas forcément tout de suite. Il devient rentable quand l'échéancier, les quittances et les relevés prennent trop de temps dans un tableur. On le juge sur sa capacité à appliquer les règles de votre pays, son fonctionnement en cas de coupure, l'export de vos données et son coût réel par lot."],
        ['q' => "L'IA peut-elle rédiger nos annonces ?", 'r' => "Elle peut mettre en forme et traduire une annonce à partir de la fiche du bien que vous lui fournissez : surface mesurée, pièces, équipements réels, conditions. Elle ne doit rien ajouter. Le négociateur relit chaque mention et chaque photo avant publication, car c'est l'agence qui répond de l'annonce."],
        ['q' => "Peut-on utiliser l'IA pour choisir entre plusieurs candidats locataires ?", 'r' => "Non. Le choix reste une décision humaine fondée sur des éléments licites. Au Bénin, la loi n° 2018-12 interdit de refuser un logement en raison de l'origine, du sexe, de la situation matrimoniale, du handicap, des opinions ou de la religion, et un outil de tri reproduit facilement ces biais. L'assistant peut, au mieux, vérifier qu'un dossier est complet."],
        ['q' => "Quelles pièces peut-on demander à un candidat locataire ?", 'r' => "Cela dépend du pays. En France, le décret du 5 novembre 2015 fixe une liste fermée, et la CNIL rappelle que relevés bancaires, livret de famille ou extrait de casier judiciaire ne peuvent pas être exigés. Ailleurs, la règle est la même dans l'esprit : ne demander que ce qui sert à la décision et le conserver pour une durée limitée."],
        ['q' => "Un candidat peut-il nous envoyer sa pièce d'identité sur WhatsApp ?", 'r' => "Mieux vaut l'éviter. La politique de la messagerie WhatsApp Business demande de ne pas faire partager en entier un numéro de carte d'identité ou de compte bancaire. Prévoyez un espace de dépôt à accès limité ou une remise au bureau, et ne gardez dans la conversation que les échanges commerciaux."],
        ['q' => "Peut-on envoyer les quittances par WhatsApp ou par courriel ?", 'r' => "Oui, si la loi du pays et le locataire le permettent. En France, la quittance est remise gratuitement au locataire qui la demande, et peut lui être envoyée par courriel s'il a donné son accord. Sur la plateforme WhatsApp Business, tenez compte du quota de 1 000 messages de service gratuits par mois et par numéro, en vigueur depuis le 1er octobre 2026."],
        ['q' => "Comment rendre des comptes à un propriétaire qui vit à l'étranger ?", 'r' => "Par un relevé mensuel à date fixe tiré de l'outil : loyers reçus, impayés, travaux avec factures et photos, commission, solde versé. Le message qui l'accompagne peut être préparé avec l'IA, mais les chiffres sont validés par une personne. Un espace en ligne où le propriétaire consulte ses relevés évite les messages vocaux du soir."],
        ['q' => "Nous sommes promoteurs : le parcours nous concerne-t-il ?", 'r' => "Oui, avec un accent différent : suivi de chaque acquéreur dans le CRM, dossier numérique du programme, photos datées du chantier, tableau des appels de fonds et des versements, réponses types en plusieurs langues. La demi-journée sur la gestion locative est remplacée par ces sujets quand vous ne louez pas."],
        ['q' => "Comment vérifier les documents d'un terrain ou d'une maison au Bénin ?", 'r' => "Le portail national des e-services propose notamment l'état descriptif d'un titre de propriété, pour 5 500 FCFA et une durée estimée de 24 heures, demandé par le propriétaire, un officier ministériel ou un requérant muni d'une procuration. La formation apprend à dater et ranger ces pièces ; la vérification juridique reste l'affaire du notaire."],
        ['q' => "La formation peut-elle se tenir à distance pour des agents dispersés ?", 'r' => "Oui. Elle se déroule alors en quatre séances de deux heures et demie, espacées d'une semaine, avec partage d'écran. Entre deux séances, chaque agent applique l'étape sur ses propres demandes ou ses lots, et la séance suivante commence par ce qui a résisté sur le terrain."],
        ['q' => "La formation peut-elle être financée ?", 'r' => "Cela dépend du pays et du fonds : FDFP en Côte d'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal. En France, la branche relève d'Opco EP, mais les fonds mutualisés exigent un organisme certifié Qualiopi, ce que Richard SALANON n'affiche pas. Interrogez le fonds par écrit avant de signer et prévoyez le budget sans prise en charge."],
    ],

    'sources' => [
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2018-12 du 2 juillet 2018 portant régime juridique du bail à usage d\'habitation domestique', 'url' => 'https://sgg.gouv.bj/doc/loi-2018-12/', 'date' => '2026-10-05'],
        ['titre' => 'Assemblée nationale de Côte d\'Ivoire, loi instituant le code de la construction et de l\'habitat (texte en PDF)', 'url' => 'https://www.assnat.ci/IMG/pdf/loi_relative_au_code_de_la_construction.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Service Public Entreprendre, devenir agent immobilier (mandat, registres, formation continue, garantie)', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F32244', 'date' => '2026-10-05'],
        ['titre' => 'Service-public.gouv.fr, dépôt de garantie dans un bail d\'habitation (vérifié le 9 juin 2026)', 'url' => 'https://www.service-public.gouv.fr/particuliers/vosdroits/F31269', 'date' => '2026-10-05'],
        ['titre' => 'Justice.fr, quittance de loyer : comment l\'obtenir ? (25 août 2025)', 'url' => 'https://www.justice.fr/fiche/quittance-loyer-obtenir', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de la Transition écologique, ce qui change au 1er janvier 2025 dans le domaine du logement (27 décembre 2024)', 'url' => 'https://www.ecologie.gouv.fr/presse/ce-qui-change-1er-janvier-2025-domaine-du-logement', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, location d\'un bien immobilier : quels justificatifs peut-on demander aux candidats ? (10 octobre 2025)', 'url' => 'https://cnil.fr/fr/location-dun-bien-immobilier-quels-justificatifs', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, publication du référentiel relatif à la gestion locative (délibération du 6 mai 2021)', 'url' => 'https://www.cnil.fr/fr/publication-du-referentiel-relatif-la-gestion-locative', 'date' => '2026-10-05'],
        ['titre' => 'Agence nationale du domaine et du foncier du Bénin, services en ligne', 'url' => 'https://andf.bj', 'date' => '2026-10-05'],
        ['titre' => 'Portail de l\'administration béninoise, e-service État descriptif (lu dans un navigateur)', 'url' => 'https://service-public.bj/public/services/service/PS00126', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, politique de la messagerie WhatsApp Business (mise à jour du 23 septembre 2026)', 'url' => 'https://whatsappbusiness.com/fr/policy/', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (version française lue dans un navigateur)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Règlement relatif aux contenus ajoutés par les utilisateurs dans Google Maps, contenus interdits et soumis à des restrictions', 'url' => 'https://support.google.com/contributionpolicy/answer/7400114?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Banque mondiale, population urbaine en pourcentage de la population totale (Bénin, Afrique subsaharienne)', 'url' => 'https://donnees.banquemondiale.org/indicateur/SP.URB.TOTL.IN.ZS?locations=BJ-ZG', 'date' => '2026-10-05'],
        ['titre' => 'Notaires de France, note de conjoncture immobilière n° 72 (juillet 2026)', 'url' => 'https://acte3.notaires.fr/wp-content/uploads/2026/09/Note-de-conjoncture-n%C2%B072-Juillet-2026.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Opco EP, panorama de branche Immobilier, édition 2025', 'url' => 'https://www.opcoep.fr/ressources/centre-ressources/branches/immobilier/panorama-immobilier-2025-opcoep.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, page des tarifs (version française, lue dans un navigateur)', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['visibilite-google', 'whatsapp-business', 'crm-pipeline', 'contenu-avec-ia', 'excel-google-sheets', 'whatsapp-odoo-dolibarr-crm'],
        'services'    => ['integration-whatsapp', 'seo-local-google-business', 'saas-espace-client'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
    ],
];
