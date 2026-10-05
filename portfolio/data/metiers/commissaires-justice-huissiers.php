<?php
// ============================================================
// data/metiers/commissaires-justice-huissiers.php · Page « formations par
// métier » : commissaires de justice et huissiers (vague 1C, univers Droit
// et justice, non prioritaire, statut P : Richard peut former des
// commissaires de justice et des huissiers, jamais « a formé »).
// Angle propre : l'étude d'huissier ou de commissaire de justice (constats et
// preuves numériques, significations, recouvrement selon l'Acte uniforme OHADA
// du 17 octobre 2023, tournées, relation avec les créanciers). Les pages des
// avocats, des notaires, des magistrats et des juristes d'entreprise ne sont
// pas reprises.
// Faits externes lus le 05/10/2026 : Journal officiel de l'OHADA du
// 15 novembre 2023 (articles 1-1 à 1-16, 7, 8, 10, 45, 46, 47, 153, 154-1,
// 155 et 156 lus sur le fac-similé), communiqué du Secrétariat permanent de
// l'OHADA (15 novembre 2023), page de l'OHADA sur l'Acte uniforme, site de la
// Chambre nationale des commissaires de justice (profession, création,
// missions, chiffres au 1er janvier 2026, constat, valeur du constat,
// formation continue, collège de déontologie), Service public (fiches F2158 et
// F35106), politique de la messagerie WhatsApp Business (mise à jour du
// 23 septembre 2026), UIHJ, Commission européenne (article 4) et les « Faits
// déjà vérifiés » du catalogue (Odoo, n8n). Richard n'est ni huissier ni
// commissaire de justice : la page le dit.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation IA et numérique pour commissaires de justice et huissiers : préparer constats et significations, piloter recouvrement et tournées, conserver des preuves numériques fiables, dans le respect de l\'Acte uniforme OHADA et du secret professionnel',
    'title'   => 'Formation IA pour commissaires de justice | Richard SALANON',
    'meta'    => 'Former une étude d\'huissier ou de commissaire de justice à l\'IA : constats, preuves numériques, significations, recouvrement OHADA, tournées. Sur devis.',
    'en_bref' => 'Cette page s\'adresse aux commissaires de justice, aux huissiers de justice, à leurs clercs et au personnel des études qui veulent outiller les constats, les significations, le recouvrement, les tournées et la relation avec les créanciers sans fragiliser la force de leurs actes. Le parcours type compte six demi-journées, se découpe par poste (titulaire, rédaction, signification, comptabilité, accueil) et se tient en intra, en inter, à distance ou en formule hybride, sur les outils de l\'étude. Richard SALANON forme à l\'usage des outils ; l\'acte, la constatation et la décision d\'exécuter restent à l\'officier ministériel. Le prix est fixé sur devis.',
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Droit et justice',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : la vie d\'un dossier dans l\'étude, du mandat à la reddition des comptes',
            'duree'  => '3 h 30',
            'points' => [
                'Relevé, avec les participants, du chemin réel d\'un dossier : réception du mandat ou du titre, contrôle du caractère exécutoire, ouverture du dossier, rédaction, signification, mesures d\'exécution, encaissements, compte rendu au créancier, archivage.',
                'Pour chaque étape, ce qu\'un outil peut préparer, ce qu\'il fait sous le contrôle d\'un clerc, et ce qui reste fermé parce que l\'acte engage l\'officier ministériel.',
                'Inventaire sans reproche des outils réellement utilisés : logiciel de l\'étude, tableurs, groupes WhatsApp des significateurs, téléphones personnels, comptes gratuits d\'assistants d\'IA, clés USB.',
                'Les textes qui gouvernent l\'étude : chapitre préliminaire de l\'Acte uniforme OHADA du 17 octobre 2023, et, pour les études françaises, l\'ordonnance du 2 juin 2016 et le code de déontologie en vigueur depuis le 1er mars 2024.',
                'Exercice : chaque participant retrace trois dossiers de sa semaine passée et marque les endroits où une information a été saisie deux fois.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : modèles d\'actes, mentions obligatoires et contrôles automatiques',
            'duree'  => '3 h 30',
            'points' => [
                'Revue de la bibliothèque de modèles : ce qui relève de l\'Acte uniforme de 2023 et ce qui relève encore de celui de 1998 pour les procédures engagées avant le 16 février 2024.',
                'Liste de contrôle des mentions prescrites à peine de nullité par l\'article 1-6 (date, identification des parties, officier instrumentaire, heure de l\'acte) et par l\'article 8 pour la signification d\'une injonction de payer.',
                'Fusion automatique des données du dossier dans le modèle, puis relecture humaine ciblée sur les montants, les noms, les adresses et les délais.',
                'Usage d\'un assistant d\'IA pour reformuler un courrier au créancier ou résumer un texte public, jamais pour recevoir les données d\'un débiteur dans un compte grand public.',
                'Exercice : préparation de la signification d\'une ordonnance d\'injonction de payer fictive, contrôlée par un autre participant avec la liste des mentions.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : constats et preuves numériques',
            'duree'  => '3 h 30',
            'points' => [
                'Le constat d\'une page internet, d\'un compte de réseau social ou de messages reçus sur le téléphone du requérant : préparation du poste, captures, annexes, description des instruments.',
                'Photographies, vidéos, enregistrements et prises de vue par drone : fichiers originaux, métadonnées, empreinte numérique, rangement dans le dossier et copies de travail.',
                'Pourquoi une capture faite par le client lui-même pèse moins lourd, et ce que change l\'arrivée d\'images et de voix fabriquées par l\'IA.',
                'Ce qu\'un outil peut faire autour du constat (classer les photos, numéroter les annexes, mettre au propre une dictée) et ce qu\'il ne fait jamais : écrire les constatations.',
                'Exercice : constat fictif d\'une page web et d\'une conversation WhatsApp, de la demande au procès-verbal et à ses annexes.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : significations, délais et tournées',
            'duree'  => '3 h 30',
            'points' => [
                'Le registre des actes à signifier et ses échéances : ordonnance non avenue faute de signification dans les trois mois, avis au destinataire dans les deux jours d\'une remise en mairie, délais d\'opposition.',
                'Préparer une tournée : regroupement des adresses par quartier ou par localité, horaires légaux des mesures d\'exécution, itinéraire, liste des pièces à emporter, retour des diligences le soir même.',
                'Ce que l\'article 1-8 exige d\'une signification électronique, et pourquoi une messagerie grand public ne répond pas d\'elle-même à ces exigences.',
                'Saisie des diligences sur le terrain : téléphone de l\'étude, formulaire hors ligne, photographies conservées par l\'officier et jamais partagées dans un groupe.',
                'Exercice : planification d\'une tournée de quinze actes sur une carte, avec deux adresses introuvables et un acte urgent à intercaler.',
            ],
        ],
        [
            'titre'  => 'Jour 3, matin : recouvrement, encaissements et relation avec les créanciers',
            'duree'  => '3 h 30',
            'points' => [
                'Le tableau de suivi d\'un portefeuille de dossiers : titre, actes délivrés, mesures en cours, sommes saisies par tiers saisi, encaissements, frais, reliquat.',
                'Saisies auprès de plusieurs banques ou établissements de monnaie électronique : rapprochement des déclarations des tiers saisis et mainlevée des saisies excédentaires.',
                'Reddition des comptes et rapports périodiques aux créanciers institutionnels : extraction automatique, contrôle par la comptabilité, envoi par un canal tracé.',
                'Phase amiable : courriers, appels et rendez-vous à l\'étude, frais restant à la charge du créancier sans titre exécutoire, et interdiction du recouvrement de créances sur WhatsApp pour les entreprises.',
                'Exercice : compte rendu trimestriel d\'un créancier fictif, préparé à partir du tableau de suivi puis vérifié ligne par ligne.',
            ],
        ],
        [
            'titre'  => 'Jour 3, après-midi : données, sécurité, règle écrite de l\'étude et évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Les renseignements obtenus des administrations : usage limité à l\'exécution du titre, interdiction d\'en faire un fichier d\'informations nominatives, conséquences pour les outils de l\'étude.',
                'Sécurité de base : comptes nominatifs, double authentification, téléphones des significateurs, perte d\'un appareil en tournée, sauvegardes hors de l\'étude.',
                'Rédaction de la règle d\'usage de l\'étude en deux pages : outils autorisés, données interdites, relecture, conservation des preuves, canaux de communication.',
                'Pour les études établies dans l\'Union européenne : l\'obligation de maîtrise de l\'IA de l\'article 4 du règlement européen.',
                'Évaluation : un dossier fictif complet traité seul, avec une mention manquante, un délai mal reporté et une photo de saisie partagée par erreur à repérer.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => 'Commissaires de justice, huissiers, clercs, significateurs et personnel des études'],
        ['l' => 'Durée', 'v' => '3 jours en 6 demi-journées, modules séparables par poste'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce que l\'IA, la digitalisation et l\'automatisation changent dans une étude d\'huissier ou de commissaire de justice ?',
            'paragraphes' => [
                'Une étude d\'huissier ou de commissaire de justice vit au rythme des actes. Chaque matin arrivent des titres à exécuter, des décisions à signifier, des demandes de constat, des relances de créanciers qui veulent savoir où en est leur dossier. Chaque jour, des clercs rédigent, des significateurs partent en tournée, la comptabilité rapproche des encaissements, l\'accueil répond au téléphone. Le volume est considérable : en France, la Chambre nationale des commissaires de justice indique qu\'en 2024 près de 8,4 millions d\'actes ont été réalisés, soit environ 3 000 actes par professionnel et par an. C\'est sur ce flux que les outils numériques pèsent le plus.',
                'L\'Acte uniforme OHADA du 17 octobre 2023 a ouvert la porte. Son article 1-5 admet que les actes dressés pour la conservation ou le recouvrement des créances soient établis sur support papier ou électronique, à condition qu\'un procédé technique fiable garantisse leur accessibilité, leur origine et leur intégrité. Son article 1-8 permet la signification par voie électronique, sous des conditions précises. En France, la loi du 22 décembre 2010 avait déjà permis la signification électronique aux destinataires qui y consentent, et les huissiers de justice et commissaires-priseurs judiciaires sont devenus commissaires de justice le 1er juillet 2022. Le cadre existe ; ce qui manque souvent, c\'est l\'organisation de l\'étude qui va avec.',
                'Ce qui change n\'est pas le métier, mais le temps qu\'il absorbe. Un modèle d\'acte rempli automatiquement depuis le dossier évite de recopier dix fois un nom mal orthographié. Un registre des échéances signale l\'ordonnance qui deviendra non avenue faute d\'avoir été signifiée. Une tournée préparée sur une carte économise une demi-journée de route. Un tableau de suivi produit le compte rendu attendu par la banque créancière sans reconstituer chaque dossier à la main. L\'intelligence artificielle, elle, aide à reformuler, à classer, à résumer des textes publics ; elle ne constate rien et ne décide d\'aucune mesure.',
                'La formation ne fait pas de Richard SALANON un officier ministériel : il n\'est ni huissier ni commissaire de justice, et il forme à l\'usage des outils, à l\'organisation des flux et aux contrôles. Les titulaires et les clercs présents apportent leur droit, leurs modèles et leur pratique du terrain ; ce sont eux qui disent, pendant les exercices, si un acte préparé avec l\'outil est régulier. La profession porte des noms différents selon les pays, huissier de justice ici, commissaire de justice là ; l\'Acte uniforme parle d\'« huissier de justice ou autorité chargée de l\'exécution », et la formation s\'adresse à tous.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels travaux de l\'étude un outil peut-il préparer, et que garde l\'officier ministériel ?',
            'legende' => 'Répartition travaillée pendant la première demi-journée. La dernière colonne indique le risque que l\'étude doit maîtriser avant d\'outiller le travail concerné.',
            'entetes' => ['Travail de l\'étude', 'Ce qu\'un outil peut préparer', 'Ce qui reste au titulaire ou au clerc habilité', 'Risque à maîtriser'],
            'lignes'  => [
                ['Réception d\'un mandat ou d\'un titre', 'Création du dossier, saisie des parties, rappel des pièces manquantes', 'Vérifier que le titre est exécutoire et que la créance est certaine, liquide et exigible', 'Un dossier ouvert sur une copie non revêtue de la formule exécutoire'],
                ['Rédaction des actes', 'Modèle rempli depuis le dossier, liste des mentions obligatoires cochée', 'Relire, choisir l\'acte adapté, signer', 'Un modèle écrit sous l\'Acte uniforme de 1998 utilisé pour une procédure engagée après le 16 février 2024'],
                ['Signification', 'Registre des actes à délivrer, regroupement par secteur, édition des enveloppes et des avis', 'Remettre l\'acte, apprécier la qualité de la personne qui le reçoit, relater les diligences', 'Un avis de remise en mairie envoyé hors du délai de deux jours prévu par l\'article 1-11'],
                ['Tournées', 'Itinéraire, liste des adresses, fiche de diligences hors ligne', 'Décider sur place, respecter les heures légales, assurer sa sécurité', 'Un téléphone perdu qui contient les adresses et les photographies de la journée'],
                ['Constat', 'Classement des photographies, numérotation des annexes, mise au propre d\'une dictée', 'Constater personnellement et rédiger les constatations', 'Une phrase reformulée par un outil qui ajoute une appréciation absente des constatations'],
                ['Saisies et inventaires', 'Trame d\'inventaire, calcul des sommes, rapprochement des déclarations des tiers saisis', 'Choisir les biens, apprécier l\'insaisissabilité, décider d\'une mainlevée', 'Des saisies cumulées qui dépassent la créance sans que personne ne le voie'],
                ['Recouvrement amiable', 'Courriers types, échéanciers, rappels internes', 'Négocier, accepter un échéancier, mesurer le ton', 'Des frais réclamés au débiteur alors qu\'ils restent à la charge du créancier'],
                ['Compte rendu aux créanciers', 'Extraction du tableau de suivi, mise en forme du rapport', 'Vérifier les montants et les commentaires avant l\'envoi', 'Un rapport qui mélange les dossiers de deux créanciers'],
                ['Archivage', 'Classement des minutes et des copies, plan de conservation', 'Décider de ce qui est conservé et de qui y accède', 'Des originaux numériques écrasés par une version modifiée'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles limites l\'IA et l\'automatisation ne franchissent-elles jamais dans une étude ?',
            'intro' => 'Ces limites découlent du statut d\'officier public et ministériel, du secret professionnel et des textes cités plus bas. La formation les transforme en gestes vérifiés pendant les exercices, pour qu\'elles tiennent aussi un vendredi soir de fin de mois.',
            'items' => [
                ['titre' => 'Écrire les constatations', 'texte' => 'Le procès-verbal relate ce que l\'officier a vu, entendu ou mesuré lui-même, sans avis sur les conséquences de fait ou de droit. Un outil qui « améliore » une phrase peut y glisser une interprétation, un adjectif ou un lien de cause que personne n\'a constaté. Les constatations se dictent et se relisent par celui qui signe ; l\'outil se limite à la mise en page et aux annexes.'],
                ['titre' => 'Choisir la mesure d\'exécution', 'texte' => 'Saisir un compte, des meubles, une rémunération ou des avoirs en monnaie électronique, accorder un délai, provoquer une mainlevée : ces choix engagent l\'étude et le créancier. Un tableau peut montrer qu\'un tiers saisi a déclaré un solde ; il ne décide pas de la suite.'],
                ['titre' => 'Constituer un fichier des débiteurs', 'texte' => 'L\'article 1-4 de l\'Acte uniforme interdit que les renseignements obtenus des administrations servent à autre chose qu\'à l\'exécution du titre, et qu\'ils fassent l\'objet d\'un fichier d\'informations nominatives, sauf obligation légale. Une base qui croiserait ces renseignements d\'un dossier à l\'autre, ou qu\'un assistant d\'IA interrogerait pour « repérer les mauvais payeurs », est à proscrire.'],
                ['titre' => 'Partager les photographies d\'une saisie', 'texte' => 'L\'article 45 permet à l\'huissier de justice de photographier les objets saisis, mais les photographies sont conservées par lui et ne peuvent être communiquées qu\'à l\'occasion d\'une contestation devant la juridiction. Un groupe WhatsApp où les significateurs postent les photos de la journée contredit directement ce texte.'],
                ['titre' => 'Relancer les débiteurs par WhatsApp Business', 'texte' => 'La politique de la messagerie WhatsApp Business, mise à jour le 23 septembre 2026, range les recouvrements de créances parmi les activités interdites, même pour une entreprise munie d\'une licence, et n\'autorise à écrire qu\'aux personnes qui ont accepté de recevoir des messages. Le compte de l\'étude risque la suspension, et l\'historique avec lui.'],
                ['titre' => 'Signifier par une messagerie ordinaire', 'texte' => 'Un message lu sur un téléphone ne prouve ni l\'identité de la personne qui l\'a ouvert, ni le contenu exact reçu. L\'article 1-8 exige un moyen électronique qui atteste la date, garantit l\'identité de l\'expéditeur et du destinataire et garantit la réception effective : la question se règle avec les textes et la chambre, pas par habitude.'],
                ['titre' => 'Confier le dossier à un compte personnel', 'texte' => 'Le secret professionnel couvre ce que l\'étude apprend en exerçant. Un clerc qui colle l\'adresse, l\'employeur et le patrimoine d\'un débiteur dans un assistant gratuit pour « rédiger plus vite » fait sortir ces informations de l\'étude, sans contrat et sans contrôle. Ces traitements relèvent en outre du droit des données personnelles : au Bénin, la loi n° 2017-20 portant code du numérique, dans l\'Union européenne, le RGPD.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que prévoit l\'Acte uniforme OHADA de 2023 pour les actes, les délais et les informations que l\'étude manipule ?',
            'legende' => 'Articles lus le 5 octobre 2026 sur le fac-similé du Journal officiel de l\'OHADA du 15 novembre 2023. La troisième colonne décrit ce que la formation en tire pour l\'organisation et les outils ; l\'interprétation juridique appartient aux professionnels présents.',
            'entetes' => ['Article', 'Ce que prévoit le texte', 'Conséquence pour les outils de l\'étude'],
            'lignes'  => [
                ['Article 1-1', 'Définit l\'« huissier de justice ou autorité chargée de l\'exécution », la signification, et la monnaie électronique', 'Les modèles et le vocabulaire du logiciel de l\'étude reprennent ces définitions, quel que soit le titre porté dans le pays'],
                ['Articles 1-3 et 1-4', 'Sur autorisation du juge, renseignements sur le patrimoine, l\'adresse et l\'employeur du débiteur ; usage limité à l\'exécution, pas de fichier d\'informations nominatives', 'Ces renseignements restent dans le dossier concerné, avec des droits d\'accès limités, et n\'alimentent aucune base transversale ni aucun assistant d\'IA'],
                ['Article 1-5', 'Actes sur support papier ou électronique, équivalents si un procédé fiable garantit accessibilité, origine et intégrité', 'L\'étude qui dématérialise doit pouvoir montrer comment elle garantit l\'intégrité de ses fichiers : formats, empreintes, sauvegardes, journal des accès'],
                ['Article 1-6', 'Mentions à peine de nullité : date, identification des parties, nom et signature de l\'officier, heure de l\'acte, destinataire', 'Une liste de contrôle automatique bloque l\'édition d\'un acte auquel manque l\'une de ces mentions'],
                ['Article 1-8', 'Signification sur papier ou par voie électronique, si le moyen atteste la date, garantit l\'identité de l\'expéditeur et du destinataire et la réception effective', 'Avant tout envoi électronique, l\'étude documente le moyen utilisé et la preuve qu\'il fournit'],
                ['Articles 1-10 et 1-11', 'Remise à domicile avec relevé de la pièce d\'identité de la personne qui reçoit ; remise en mairie avec avis au destinataire au plus tard dans les deux jours, à peine de nullité', 'Le registre des significations calcule l\'échéance de l\'avis et l\'affiche au clerc chargé de l\'envoyer'],
                ['Articles 1-13 à 1-15', 'Computation des délais : jour de départ et jour d\'échéance non comptés, expiration à minuit, report au premier jour ouvrable', 'Un calcul automatique se paramètre sur ces règles et sur les jours fériés du pays, puis se vérifie sur des cas tests'],
                ['Articles 7, 8 et 10', 'Ordonnance d\'injonction de payer non avenue si elle n\'est pas signifiée dans les trois mois ; sommation à dix jours ; opposition dans les dix jours de la signification', 'Chaque ordonnance reçue entre au registre avec sa date et son échéance de trois mois, et chaque signification avec son délai d\'opposition'],
                ['Article 45', 'Photographies des objets saisis conservées par l\'huissier, communiquées seulement en cas de contestation devant la juridiction', 'Les photos quittent le téléphone pour le dossier le jour même et ne circulent dans aucun groupe de messagerie'],
                ['Article 46', 'Pas de mesure d\'exécution hors des jours ouvrables, ni avant 8 heures ou après 18 heures, sauf autorisation', 'L\'outil de planification des tournées n\'accepte pas de créneau d\'exécution en dehors de ces heures'],
                ['Article 47', 'Frais de l\'exécution forcée à la charge du débiteur ; frais de recouvrement engagés sans titre exécutoire à la charge du créancier, sauf exceptions', 'Les courriers amiables générés par l\'étude ne réclament pas au débiteur des frais qu\'il ne doit pas'],
                ['Articles 153 et 154-1', 'Saisie-attribution possible sur des avoirs en monnaie électronique ; mainlevée par l\'huissier des saisies qui dépassent manifestement la créance', 'Le tableau de suivi additionne les sommes saisies chez chaque tiers saisi et signale le dépassement'],
                ['Article 156', 'Déclaration du tiers saisi dans les deux jours, ou au plus tard dans les cinq jours si l\'acte n\'est pas signifié à personne', 'Les échéances de déclaration des banques et des établissements de monnaie électronique entrent au registre, avec relance interne'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles règles s\'appliquent aux études de France et d\'Europe, et aux plateformes qu\'elles utilisent ?',
            'legende' => 'Pages officielles lues le 5 octobre 2026. Elles situent les règles ; elles ne remplacent ni les textes eux-mêmes ni les décisions de la Chambre nationale ou des chambres régionales.',
            'entetes' => ['Texte ou source', 'Ce qu\'il dit', 'Ce que cela change pour les outils de l\'étude'],
            'lignes'  => [
                ['Ordonnance du 2 juin 2016 et fiche Service public F2158 (vérifiée le 9 juillet 2025)', 'Depuis le 1er juillet 2022, les huissiers de justice et les commissaires-priseurs judiciaires forment une seule profession, celle de commissaire de justice ; la Chambre nationale indique que la transition s\'achève en 2026', 'Modèles, en-têtes, signatures et logiciel portent le nouveau titre ; les anciens modèles se retirent au lieu de cohabiter'],
                ['Fiche Service public F2158', 'Devoirs de probité, de secret professionnel, d\'indépendance, d\'impartialité, de rigueur, de dignité et d\'humanité ; pas de contrainte inutile ni de mesure disproportionnée', 'Un message automatique au ton menaçant ou une relance répétée sort de ces devoirs, quelle que soit la machine qui l\'a écrite'],
                ['Code de déontologie des commissaires de justice, en vigueur le 1er mars 2024 (décret n° 2023-1296 du 28 décembre 2023)', 'Principes et devoirs professionnels, rapports entre confrères, rapports avec les parties et les tiers ; un collège de déontologie veille à son application', 'La règle d\'usage de l\'étude cite le code et peut être soumise à la chambre en cas de doute'],
                ['Chambre nationale, missions de la profession', 'Copie des actes signifiés conservée pendant 25 ans ; constat remis sur papier ou en format électronique et conservé 25 ans au registre des minutes', 'L\'archivage numérique se pense sur 25 ans : formats ouverts, supports renouvelés, accès retrouvables malgré les changements de logiciel'],
                ['Chambre nationale, valeur juridique du constat', 'Les constatations font foi jusqu\'à preuve du contraire ; les mentions authentiques jusqu\'à inscription de faux ; les dépôts de photos par application de smartphone ne valent que commencement de preuve', 'L\'étude ne présente pas un dépôt de fichiers comme un constat, et explique la différence au client'],
                ['Règlement européen sur l\'IA, article 4', 'Obligation de maîtrise de l\'IA pour les fournisseurs et les utilisateurs professionnels, applicable depuis le 2 février 2025, contrôlée et sanctionnée depuis le 3 août 2026', 'Une étude établie dans l\'Union qui utilise un assistant prend des mesures de maîtrise de l\'IA pour son personnel et garde la trace des formations'],
                ['Politique de la messagerie WhatsApp Business (mise à jour du 23 septembre 2026)', 'S\'applique à l\'application et à la plateforme ; contact seulement avec l\'accord du destinataire ; recouvrements de créances interdits', 'WhatsApp sert à la relation avec les créanciers et le public qui ont donné leur accord, jamais aux relances des débiteurs'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment une preuve numérique se constitue-t-elle et se conserve-t-elle dans une étude ?',
            'paragraphes' => [
                'Le constat reste l\'acte où l\'étude apporte le plus de valeur, et c\'est aussi celui que le numérique transforme le plus vite. Les demandes portent désormais sur une publication diffamatoire, un faux compte, une contrefaçon vendue en ligne, des messages reçus sur un téléphone, des malfaçons filmées sur un chantier. La Chambre nationale rappelle que le commissaire de justice se déplace pour constater, sauf quand il constate depuis son office une page internet ou des messages reçus sur le téléphone de la personne qui se présente à l\'étude. Dans ces deux cas, tout se joue sur le poste, le téléphone et la manière de capter.',
                'La force du constat tient à ce que l\'officier relate lui-même, en décrivant ses instruments. Appareil photo, dictaphone, caméra, drone, sonomètre : chacun doit apparaître dans l\'acte. La formation insiste sur ce qui entoure ces instruments : noter l\'appareil et sa date, garder les fichiers d\'origine sans les retoucher, calculer une empreinte numérique de chaque fichier au moment de la capture, ranger les originaux à part des copies de travail, et ne jamais remplacer une annexe par une version « plus lisible » produite après coup.',
                'L\'IA générative rend cette rigueur plus précieuse. Une photographie, une capture d\'écran ou un message vocal peuvent désormais être fabriqués ou modifiés en quelques secondes, et un juge sait que de tels éléments se truquent. La Chambre nationale souligne déjà qu\'une photo prise par le client lui-même peut être écartée faute de date, de lieu ou de garantie contre le montage, et qu\'un dépôt de fichiers horodatés par une application ne vaut que commencement de preuve. Le constat de l\'officier, qui voit la scène ou la page de ses propres yeux, devient l\'antidote de ces doutes, à condition que sa chaîne de conservation soit irréprochable.',
                'L\'outil a sa place autour de l\'acte, pas dans les constatations. Il peut classer cent photographies par pièce et par date, numéroter les annexes, mettre au propre une dictée faite sur place, vérifier qu\'aucune annexe citée ne manque. Il ne reformule pas ce que l\'officier a écrit, et un assistant en ligne ne reçoit pas les messages privés constatés sur le téléphone d\'un client : ce sont souvent des données personnelles de tiers, couvertes par le secret de l\'étude.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule un constat numérique bien tenu, de la demande à l\'archivage ?',
            'items' => [
                ['titre' => 'La demande', 'duree' => 'Le jour de l\'appel', 'texte' => 'L\'accueil note l\'objet (page web, compte de réseau social, messages, lieu), l\'urgence et le risque de disparition du contenu. Une fiche de demande standard évite d\'oublier l\'adresse exacte de la page ou le numéro du téléphone à examiner, et permet au titulaire de décider vite si le constat se fait à l\'étude ou sur place.'],
                ['titre' => 'La préparation du poste ou du matériel', 'duree' => 'Avant la captation', 'texte' => 'Pour une page internet, un poste dédié, à l\'heure exacte, sans session ouverte sur un compte personnel. Pour un déplacement, appareil photo chargé, carte mémoire vide, téléphone de l\'étude. Ces précautions se décrivent ensuite dans l\'acte, et la formation fournit une liste de contrôle que l\'étude adapte.'],
                ['titre' => 'La captation', 'duree' => 'Pendant le constat', 'texte' => 'L\'officier navigue, photographie, filme ou mesure lui-même, et dicte ce qu\'il constate au fur et à mesure. Chaque fichier garde son nom d\'origine. Pour des messages sur le téléphone du requérant, l\'officier consulte l\'appareil en sa présence et capture ce qu\'il voit, sans transférer la conversation vers un service extérieur.'],
                ['titre' => 'Le scellement des fichiers', 'duree' => 'Dans l\'heure qui suit', 'texte' => 'Les originaux sont copiés dans le dossier, une empreinte numérique est calculée pour chacun et reportée dans une table, puis la carte ou le téléphone est vidé. Toute copie de travail porte un nom distinct. L\'étude sait ainsi démontrer, des mois plus tard, qu\'une annexe n\'a pas changé.'],
                ['titre' => 'La rédaction', 'duree' => 'Le jour même ou le lendemain', 'texte' => 'Le procès-verbal reprend les constatations dictées, la description des instruments et la liste des annexes. Un outil peut vérifier la numérotation et la présence de chaque annexe ; la relecture du fond appartient au titulaire, qui signe et engage sa responsabilité, même quand un clerc habilité a procédé aux constatations.'],
                ['titre' => 'La remise et l\'archivage', 'duree' => 'À la remise, puis pendant des années', 'texte' => 'L\'acte est remis sur papier ou en format électronique, et la minute rejoint le registre avec ses annexes et leur table d\'empreintes. En France, la Chambre nationale indique une conservation de 25 ans ; dans les autres pays, l\'étude applique la durée de sa loi nationale et prévoit le renouvellement des supports.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Peut-on signifier un acte ou relancer un débiteur par WhatsApp ?',
            'texte' => 'Deux questions se posent, et elles sont distinctes. La première est juridique : l\'article 1-8 de l\'Acte uniforme exige un moyen qui atteste la date, garantit l\'identité de l\'expéditeur et du destinataire et la réception effective ; un téléphone partagé, un numéro réattribué ou une coche « lu » ne prouvent rien de tout cela, et la réponse se cherche dans les textes et auprès de la chambre. La seconde tient à la plateforme : WhatsApp interdit aux entreprises le recouvrement de créances et n\'autorise à écrire qu\'aux personnes qui ont donné leur accord. La formation ne tranche pas la première question ; elle montre ce que la messagerie peut faire pour l\'étude : répondre au public, informer les créanciers consentants, organiser l\'équipe.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères datés situent l\'enjeu pour une étude ?',
            'items' => [
                ['valeur' => '2 208', 'libelle' => 'Offices de commissaires de justice en France au 1er janvier 2026, un chiffre en légère progression depuis 2023, selon la page de la profession en chiffres consultée le 5 octobre 2026', 'source' => 'Chambre nationale des commissaires de justice', 'url' => 'https://commissaire-justice.fr/profession-commissaire-de-justice/la-profession-en-chiffres/'],
                ['valeur' => '67 %', 'libelle' => 'Part des émoluments, actes au tarif réglementé, dans un chiffre d\'affaires de la profession supérieur à 1,4 milliard d\'euros ; les honoraires libres en représentent un tiers (page consultée le 5 octobre 2026)', 'source' => 'Chambre nationale des commissaires de justice', 'url' => 'https://commissaire-justice.fr/profession-commissaire-de-justice/la-profession-en-chiffres/'],
                ['valeur' => '90 jours', 'libelle' => 'Délai entre la publication de l\'Acte uniforme au Journal officiel de l\'OHADA, le 15 novembre 2023, et son entrée en vigueur ; les procédures engagées avant restent soumises au texte de 1998, ce qui oblige les études à tenir deux jeux de modèles', 'source' => 'Secrétariat permanent de l\'OHADA, communiqué du 15 novembre 2023', 'url' => 'https://www.ohada.com/actualite/7010/publication-au-journal-officiel-de-lohada-de-lacte-uniforme-du-17-octobre-2023-portant-organisation-des-procedures-simplifiees-de-recouvrement-et-des-voies-dexecution.html'],
                ['valeur' => '96 pays', 'libelle' => 'Pays d\'origine des 100 organisations membres ou associées de l\'Union internationale des huissiers de justice lors de son congrès de Rio, en mai 2024 (page consultée le 5 octobre 2026)', 'source' => 'Union internationale des huissiers de justice (UIHJ)', 'url' => 'https://www.uihj.com/'],
                ['valeur' => '25 ans', 'libelle' => 'Durée de conservation des copies d\'actes signifiés et des constats au registre des minutes, indiquée par la profession française, avant versement aux archives départementales pour les constats', 'source' => 'Chambre nationale des commissaires de justice, missions et déroulement du constat', 'url' => 'https://commissaire-justice.fr/constat-commissaire-de-justice/comment-se-deroule-un-constat/'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Dans quelles situations la formation sert-elle une étude d\'Afrique francophone ou d\'Europe ?',
            'items' => [
                ['secteur' => 'Étude de trois clercs et deux significateurs, à Cotonou', 'probleme' => 'Les significateurs envoient chaque soir dans un groupe WhatsApp les photos des actes remis, des portes fermées et parfois des biens saisis ; la rédaction recopie leurs messages dans un registre papier, et un clerc a déjà perdu un téléphone en tournée.', 'solution' => 'Téléphones de l\'étude verrouillés, fiche de diligences hors ligne synchronisée au retour, photos versées au dossier puis effacées de l\'appareil, groupe réservé à l\'organisation des tournées, sans donnée de dossier.'],
                ['secteur' => 'Étude travaillant pour des banques, à Abidjan', 'probleme' => 'Plusieurs centaines d\'ordonnances d\'injonction de payer par an, des saisies-attributions lancées en parallèle auprès de plusieurs banques et d\'un établissement de monnaie électronique, et des créanciers qui réclament un état trimestriel détaillé.', 'solution' => 'Registre des ordonnances avec l\'échéance de trois mois, tableau des sommes déclarées par chaque tiers saisi avec alerte de dépassement, compte rendu trimestriel extrait automatiquement puis vérifié par la comptabilité avant envoi.'],
                ['secteur' => 'Étude couvrant une zone rurale étendue, autour de Ouagadougou', 'probleme' => 'Les déplacements mangent la semaine, les adresses sont décrites par des repères plutôt que par des rues, et les dispositions de l\'Acte uniforme de 2023 sur la saisie du bétail exigent des inventaires précis.', 'solution' => 'Tournées regroupées par localité sur une carte partagée, adresses enrichies de coordonnées et de repères relevés lors du premier passage, trame d\'inventaire photographique tenue par l\'officier et conservée au dossier.'],
                ['secteur' => 'Étude sollicitée pour des constats en ligne, à Lomé', 'probleme' => 'Les demandes de constat de publications sur Facebook, TikTok et WhatsApp se multiplient, mais les captures sont faites sur le téléphone personnel d\'un clerc et rangées sans méthode.', 'solution' => 'Poste de constat dédié, procédure écrite de captation, table d\'empreintes des fichiers, modèle de procès-verbal décrivant le matériel, explication au client de la différence entre un constat et ses propres captures.'],
                ['secteur' => 'Office de commissaires de justice, à Lyon', 'probleme' => 'L\'office a fusionné des pratiques d\'anciens huissiers et d\'un ancien commissaire-priseur, utilise un logiciel métier et voit ses clercs tester des assistants d\'IA chacun de leur côté.', 'solution' => 'Inventaire des outils et des comptes, règle d\'usage de deux pages citant le code de déontologie, compte professionnel administré pour les usages autorisés, formation tracée de tout le personnel au titre de l\'article 4 du règlement européen.'],
                ['secteur' => 'Étude d\'huissiers de justice, à Liège', 'probleme' => 'L\'étude reçoit des dossiers de créanciers étrangers et des pièces en plusieurs langues, traduites dans le navigateur sans savoir où partent les textes.', 'solution' => 'Inventaire des fonctions de traduction et d\'IA intégrées aux logiciels, choix d\'un outil aux conditions lues, pièces sensibles traduites hors des services non maîtrisés, relecture par une personne qui connaît la langue.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils et systèmes une étude utilise-t-elle, et avec quelles précautions ?',
            'legende' => 'Outils rencontrés dans les études de la zone OHADA et d\'Europe. Les prix cités ont été relevés le 5 octobre 2026 ; ils sont payés par l\'étude aux éditeurs et ne font pas partie du prix de la formation.',
            'entetes' => ['Outil ou système', 'Usage dans l\'étude', 'Coût ou accès', 'Précaution enseignée'],
            'lignes'  => [
                ['Journal officiel et bibliothèque numérique de l\'OHADA', 'Texte de l\'Acte uniforme de 2023, dates de publication et d\'entrée en vigueur', 'Consultation gratuite', 'Les modèles se contrôlent contre le texte publié, jamais contre un résumé produit par un assistant'],
                ['Logiciel métier de l\'étude', 'Dossiers, modèles d\'actes, registre, comptabilité de l\'étude, statistiques', 'Abonnement ou licence d\'éditeur, selon l\'offre', 'Vérifier l\'export complet des dossiers et des minutes, et les droits d\'accès par poste'],
                ['Tableur partagé (Excel, Google Sheets)', 'Suivi provisoire d\'un portefeuille, tournées, encaissements', 'Inclus dans les suites bureautiques', 'Un seul fichier de référence, des colonnes verrouillées, aucune donnée obtenue des administrations hors du dossier concerné'],
                ['Dolibarr', 'Tiers, dossiers suivis comme des projets, documents joints, factures et règlements', 'Logiciel libre ; coût d\'hébergement et de paramétrage', 'Adapté à une petite étude sans logiciel métier, à condition de sauvegarder hors de l\'étude ; comparaison dans le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo et Dolibarr</a>'],
                ['Odoo', 'Dossiers, documents, feuilles de temps, facturation, tableaux de bord', 'Une application gratuite ; offre Standard à 19,90 € par utilisateur et par mois la première année en paiement annuel, puis 24,90 €', 'Le paramétrage doit séparer strictement les dossiers et les fonds de chaque créancier'],
                ['Appareil photo, caméra, dictaphone, drone', 'Constats, inventaires, saisies', 'Matériel de l\'étude', 'Fichiers d\'origine conservés, empreintes calculées, instruments décrits dans l\'acte, photos de saisie jamais diffusées'],
                ['Assistant d\'IA en offre professionnelle', 'Reformulation de courriers aux créanciers, résumé de textes publics, aide à la mise en page', 'Abonnement par utilisateur ; offres comparées dans le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a>', 'Aucune donnée de débiteur, aucun message constaté, aucune constatation à réécrire'],
                ['WhatsApp et WhatsApp Business', 'Accueil du public, rendez-vous de constat, information des créanciers qui l\'ont accepté, organisation interne', 'Application gratuite ; l\'API est facturée par message au-delà du quota mensuel de messages de service gratuits', 'Numéro de l\'étude, sauvegarde chiffrée, aucune relance de débiteur, aucune photo de saisie'],
                ['Automatisation (n8n, Make)', 'Rappels d\'échéances, alertes de délais, accusés de réception internes', 'n8n Cloud à partir de 20 € par mois en paiement annuel, ou installation sur un serveur de l\'étude', 'Aucune chaîne ne délivre un acte ni ne déclenche une mesure d\'exécution sans décision humaine'],
                ['Application de cartographie et d\'itinéraire', 'Préparation des tournées, repères des adresses difficiles', 'Gratuite ou incluse dans le téléphone', 'Historique de localisation réglé par l\'étude, adresses des débiteurs non enregistrées dans un compte personnel'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme type, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation s\'organise-t-elle sans arrêter l\'étude ?',
            'intro' => 'Une étude ne ferme pas pour se former : les actes urgents partent, les tournées continuent, l\'accueil répond. L\'organisation tient compte de ces contraintes et de la place de chacun dans la chaîne des actes.',
            'items' => [
                ['titre' => 'Un découpage par poste', 'texte' => 'Le titulaire ou les associés suivent la première et la dernière demi-journée, parce qu\'ils fixent la règle et signent les actes. Les clercs de rédaction suivent tout le parcours. Les significateurs suivent les tournées, la sécurité et la preuve numérique. La comptabilité rejoint la journée du recouvrement, l\'accueil celle des constats et de la relation avec le public.'],
                ['titre' => 'Les outils de l\'étude', 'texte' => 'Les exercices se font dans le logiciel, les modèles, les téléphones et les comptes que l\'étude utilise. Une étude sans logiciel de gestion voit la démonstration dans Dolibarr ou Odoo, sans engagement de les adopter ensuite.'],
                ['titre' => 'Des dossiers fictifs ou neutralisés', 'texte' => 'Aucun dossier en cours ne sert de matière. L\'étude peut fournir des dossiers clos dont les noms, les adresses, les montants et les renseignements patrimoniaux ont été retirés, ou le formateur construit avec elle des dossiers fictifs proches de sa pratique.'],
                ['titre' => 'Des groupes restreints', 'texte' => 'Huit personnes au plus par groupe, chacune sur son poste ou son téléphone de travail, pour que les erreurs de manipulation se voient. Une grande étude est répartie par poste plutôt que par ancienneté.'],
                ['titre' => 'Un calendrier qui épouse l\'activité', 'texte' => 'Les demi-journées s\'écartent des jours de forte délivrance et des fins de mois où se préparent les comptes rendus aux créanciers. Elles peuvent s\'étaler sur plusieurs semaines, ce qui laisse le temps d\'essayer une liste de contrôle ou un registre entre deux séances.'],
                ['titre' => 'Des supports que l\'étude garde', 'texte' => 'Carte des travaux, liste de contrôle des mentions, procédure de constat numérique avec table d\'empreintes, trame de tournée, modèle de tableau de suivi, trame de règle d\'usage, dans des formats modifiables, avec une attestation nominative de fin de formation.'],
                ['titre' => 'Un suivi limité aux outils', 'texte' => 'Un canal reste ouvert pour les questions d\'usage des outils pendant une période fixée au devis. Les questions de procédure, de déontologie et de régularité des actes sont renvoyées au titulaire, à la chambre ou aux confrères.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format retenir selon la taille et l\'organisation de l\'étude ?',
            'legende' => 'Formats indicatifs, ajustés après un premier échange sur l\'effectif, le volume d\'actes, les zones couvertes et les outils en place.',
            'entetes' => ['Situation', 'Format conseillé', 'Durée', 'Priorités'],
            'lignes'  => [
                ['Titulaire seul avec un ou deux clercs', 'Séances sur place ou à distance', '4 à 6 séances de 2 heures', 'Modèles et mentions, registre des échéances, constat numérique, règle d\'usage'],
                ['Étude de 4 à 12 personnes', 'Intra, dans les locaux de l\'étude', '3 jours en 6 demi-journées', 'Le parcours complet, avec une règle d\'usage adoptée à la fin'],
                ['Étude à plusieurs bureaux ou à fort volume pour des créanciers institutionnels', 'Intra par groupes de postes, ou hybride', '3 jours par groupe, plus une demi-journée pour les associés', 'Tableau de suivi, comptes rendus aux créanciers, sécurité des téléphones de tournée'],
                ['Significateurs et clercs de terrain seulement', 'Intra, module dédié', '1 jour', 'Tournées, diligences, photographies, téléphone perdu, conduite à tenir'],
                ['Professionnels de plusieurs études, à l\'initiative d\'une chambre ou d\'une association', 'Inter, sur dossiers fictifs uniquement', '2 jours', 'Constat numérique, preuve, règle d\'usage, échanges de pratiques'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation d\'une étude, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Aucun montant n\'est affiché : chaque parcours fait l\'objet d\'un devis, et le premier échange, le cadrage comme le devis lui-même sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les licences du logiciel métier, des assistants d\'IA ou des outils d\'automatisation restent payées par l\'étude aux éditeurs.',
            'items'      => [
                ['offre' => 'Parcours étude complet', 'prix' => 'Sur devis', 'inclus' => ['Six demi-journées sur les outils de l\'étude', 'Liste de contrôle des mentions et registre des échéances', 'Procédure de constat numérique et table d\'empreintes', 'Règle d\'usage, évaluation finale et attestation']],
                ['offre' => 'Module terrain', 'prix' => 'Sur devis', 'inclus' => ['Une journée pour significateurs et clercs de terrain', 'Préparation des tournées et diligences hors ligne', 'Photographies et téléphones de l\'étude', 'Conduite à tenir après la perte d\'un appareil']],
                ['offre' => 'Module recouvrement et créanciers', 'prix' => 'Sur devis', 'inclus' => ['Une à deux demi-journées', 'Tableau de suivi et rapprochement des saisies', 'Compte rendu périodique aux créanciers', 'Canaux de relance conformes']],
            ],
            'variations' => [
                'Le nombre de participants, de postes et de groupes.',
                'La préparation des dossiers neutralisés et la revue des modèles d\'actes de l\'étude.',
                'Le paramétrage éventuel d\'un registre, d\'un tableau de suivi ou d\'alertes pendant la session.',
                'Le lieu, le déplacement hors de Cotonou ou du Bénin, et le choix entre présentiel, distance et hybride.',
                'La durée du suivi retenu après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui peut financer la formation d\'une étude, et que vaut-elle pour la formation continue obligatoire ?',
            'paragraphes' => [
                'Aucune prise en charge n\'est promise ici ; ce qui suit indique seulement où poser la question. En Côte d\'Ivoire, le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> réserve son plan de formation aux entreprises à jour de leurs taxes de formation : une étude constituée en société, ou qui emploie des clercs, peut se renseigner, programme et devis en main. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> propose des guichets pour le personnel des entreprises. Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286</a>, et ses conditions se demandent au fonds au moment du projet.',
                'En France, la formation continue des commissaires de justice est obligatoire, en application de l\'article 13 de l\'ordonnance du 2 juin 2016, et chaque professionnel en déclare le suivi à la Chambre nationale. Pour qu\'une action compte, l\'organisme qui la dispense doit être reconnu par la Chambre nationale, qui exige un certificat Qualiopi, puis faire habiliter l\'action elle-même. Richard SALANON n\'est pas certifié Qualiopi et n\'est habilité par aucune chambre : une session avec lui ne peut pas être présentée comme une formation habilitée, et savoir si elle peut compter autrement se demande à la Chambre nationale avant l\'inscription.',
                'Les fonds mutualisés qui financent la formation des salariés exigent eux aussi, en France, un organisme certifié Qualiopi, et Richard ne détient pas davantage d\'agrément d\'un fonds africain. Le budget se construit donc d\'abord sans financement extérieur. Le programme détaillé, les feuilles d\'émargement, les résultats de l\'évaluation et une attestation par participant sont remis dans tous les cas, pour toute démarche que l\'étude voudrait engager. Pour une étude établie dans l\'Union européenne, ces traces servent aussi à rendre compte des mesures de maîtrise de l\'IA prévues par l\'article 4 du règlement européen.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les études qui se numérisent, et comment les éviter ?',
            'intro' => 'Elles reviennent d\'une étude à l\'autre, à Douala comme à Bordeaux. Presque aucune n\'est technique : ce sont des habitudes de travail qui se corrigent par une règle écrite et par quelques contrôles automatiques bien placés.',
            'items' => [
                ['titre' => 'Laisser le groupe WhatsApp devenir le registre', 'texte' => 'Quand les diligences, les photos et les adresses vivent dans une conversation, l\'étude ne sait plus prouver ce qui a été fait, ni à qui ces données ont été montrées. Le groupe sert à organiser la journée ; le dossier reçoit tout le reste, le jour même.'],
                ['titre' => 'Garder des modèles des deux Actes uniformes sans les distinguer', 'texte' => 'Les procédures engagées avant le 16 février 2024 restent soumises au texte de 1998, les autres au texte de 2023. Deux bibliothèques mêlées produisent un jour une mention erronée. Chaque modèle porte le texte dont il relève et la date de sa dernière revue.'],
                ['titre' => 'Faire confiance au calcul automatique des délais sans l\'avoir testé', 'texte' => 'Un tableur qui oublie un jour férié national ou compte le jour de départ reproduit l\'erreur dans tous les dossiers. Le calcul se paramètre sur les articles 1-13 à 1-15 et sur le calendrier du pays, puis se vérifie sur une série de cas dont on connaît la réponse.'],
                ['titre' => 'Retoucher une annexe de constat', 'texte' => 'Recadrer, éclaircir ou compresser une photographie pour l\'acte paraît anodin. Si l\'original n\'est pas conservé à part avec son empreinte, l\'étude ne peut plus démontrer que l\'annexe reflète ce qui a été constaté.'],
                ['titre' => 'Croiser les renseignements d\'un dossier à l\'autre', 'texte' => 'Retrouver l\'employeur d\'un débiteur grâce à un ancien dossier semble efficace ; l\'article 1-4 l\'interdit pour les renseignements obtenus des administrations. Les droits d\'accès du logiciel enferment ces informations dans leur dossier.'],
                ['titre' => 'Oublier les téléphones de tournée', 'texte' => 'Le téléphone du significateur contient des adresses, des noms, des photos et parfois l\'accès au logiciel. Sans verrouillage, sans effacement à distance et sans consigne en cas de perte, il est le point faible de l\'étude. L\'<a href="/histoires/maersk-notpetya">histoire de Maersk</a> rappelle qu\'un seul ordinateur compromis peut immobiliser toute une organisation, et qu\'une copie isolée des données décide de la reprise.'],
                ['titre' => 'Former le titulaire et oublier les clercs', 'texte' => 'Ce sont les clercs qui rédigent, délivrent, photographient et répondent au téléphone. Une règle d\'usage que seuls les associés connaissent reste lettre morte dès la première tournée.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles formations du catalogue prolongent ce parcours selon le besoin de l\'étude ?',
            'legende' => 'Fiches du catalogue qui approfondissent un volet de cette page. Chacune a son propre programme ; une étude en combine souvent deux, par exemple la cybersécurité pour les significateurs et l\'IA au quotidien pour les clercs de rédaction.',
            'entetes' => ['Formation', 'Pour qui dans l\'étude', 'Ce qu\'elle apporte de plus', 'Durée indicative'],
            'lignes'  => [
                ['<a href="/formations/ia-en-entreprise">IA en entreprise : productivité des équipes</a>', 'Clercs de rédaction, accueil, comptabilité', 'L\'usage quotidien d\'un assistant pour rédiger, synthétiser et analyser, avec la vérification de chaque résultat', '2 jours, ou atelier d\'une demi-journée'],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', 'Titulaire, premier clerc', 'La mesure d\'un circuit réel, par exemple de la réception du titre à la reddition des comptes, avant de choisir l\'outil', '2 jours séparés par une semaine de relevé'],
                ['<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>', 'Accueil et secrétariat', 'Le profil, les réponses rapides et les étiquettes pour répondre au public et aux créanciers qui ont donné leur accord, jamais pour relancer des débiteurs', 'Une demi-journée ou une journée'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', 'Tout le personnel, significateurs en premier', 'Hameçonnage, mots de passe, double authentification, téléphone perdu, signalement immédiat', '1 jour, plus une demi-journée pour les postes sensibles'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', 'Titulaire et clercs', 'Les données personnelles, le secret et les règles de chaque pays appliqués aux outils d\'IA', '1 jour de socle, ou 2 jours'],
                ['<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>', 'Petite étude sans logiciel métier', 'La prise en main d\'un outil libre pour les tiers, les dossiers, les documents et les règlements', '2 jours'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la formation de votre étude à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Richard peut former des commissaires de justice et des huissiers : le parcours décrit ici est construit pour eux, à partir de la chaîne réelle des actes, des tournées et des comptes rendus aux créanciers. Il conçoit lui-même des assistants d\'IA, des automatisations et des intégrations avec des logiciels de gestion : il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Il sait où partent les données confiées à un outil. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), fort de ' . $ans . ' ans d\'expérience, il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, dont le Togo, le Burkina Faso et la France.',
                'Il n\'est ni huissier ni commissaire de justice, et le dit dès l\'ouverture : il enseigne les outils, l\'organisation de l\'étude et les contrôles ; la régularité des actes, la déontologie et les choix d\'exécution restent aux officiers ministériels, à leur chambre et à leurs confrères. Aucun éditeur ne l\'a certifié et il ne se présente comme partenaire d\'aucun. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur celle des <a href="/zones/">zones d\'intervention</a>, et l\'ensemble de l\'offre dans le <a href="/formations/">catalogue des formations</a>, dont le domaine <a href="/formations/domaine/transformation-digitale">transformation digitale</a>.',
                'Quand l\'étude veut aller au-delà de la formation, par exemple un registre des échéances relié à ses modèles, un tableau de suivi qui produit seul les comptes rendus aux créanciers, ou des sauvegardes hors de l\'étude, le besoin relève d\'une mission de <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a> ou de <a href="/services/maintenance-support">maintenance et support</a>. La façon dont Richard organise ses sessions est décrite sur la page <a href="/services/formation-en-entreprise">formation en entreprise</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'engager l\'étude dans la formation ?',
            'texte' => 'L\'outil prépare, range et rappelle ; l\'officier constate, signifie et décide. Les modèles portent le texte dont ils relèvent, chaque acte passe une liste de contrôle des mentions, chaque échéance entre dans un registre, les fichiers d\'un constat gardent leur original et leur empreinte, les photos de saisie restent au dossier, les renseignements sur un débiteur ne quittent pas le sien, et WhatsApp ne sert jamais à relancer quelqu\'un qui n\'a rien accepté.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous former votre étude à l\'IA et au numérique sans affaiblir la force de vos actes ?',
            'texte'  => 'Indiquez l\'effectif de l\'étude et les postes à former, le volume approximatif d\'actes, les zones de tournée, les créanciers suivis et les outils déjà en place : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation pour mon étude'],
        ],
    ],

    'faq' => [
        ['q' => 'Le formateur est-il huissier ou commissaire de justice ?', 'r' => 'Non. Richard SALANON forme à l\'usage des outils numériques et d\'IA, à l\'organisation de l\'étude et aux contrôles. Il ne se prononce ni sur la régularité d\'un acte ni sur une question de procédure ou de déontologie : ce sont les titulaires et les clercs présents qui jugent du fond pendant les exercices.'],
        ['q' => 'La formation concerne-t-elle les huissiers de justice comme les commissaires de justice ?', 'r' => 'Oui. Selon les pays, la profession porte l\'un ou l\'autre nom ; en France, les huissiers de justice et les commissaires-priseurs judiciaires sont devenus commissaires de justice le 1er juillet 2022. L\'Acte uniforme OHADA parle d\'« huissier de justice ou autorité chargée de l\'exécution ». Le parcours s\'adapte aux textes du pays de l\'étude.'],
        ['q' => 'Peut-on travailler sur nos vrais dossiers pendant la session ?', 'r' => 'Pas sur des dossiers en cours. L\'étude peut fournir des dossiers clos dont les noms, les adresses, les montants et les renseignements patrimoniaux ont été retirés, ou travailler sur des dossiers fictifs construits pour ressembler à sa pratique. Le secret professionnel s\'applique aussi pendant la formation.'],
        ['q' => 'Un clerc peut-il utiliser ChatGPT pour rédiger un acte ?', 'r' => 'Pas avec les données d\'un débiteur dans un compte personnel ou gratuit. Les actes se rédigent à partir des modèles de l\'étude, remplis depuis le dossier et contrôlés par une liste des mentions. Un assistant professionnel, aux conditions lues, peut aider à reformuler un courrier au créancier ou à résumer un texte public.'],
        ['q' => 'L\'IA peut-elle aider à rédiger un procès-verbal de constat ?', 'r' => 'Elle peut aider autour du constat : classer les photographies, numéroter les annexes, mettre au propre une dictée faite sur place, vérifier qu\'aucune annexe ne manque. Elle ne reformule pas les constatations, qui relatent ce que l\'officier a lui-même vu ou entendu, sans appréciation ajoutée.'],
        ['q' => 'Une signification peut-elle se faire par voie électronique dans la zone OHADA ?', 'r' => 'L\'article 1-8 de l\'Acte uniforme du 17 octobre 2023 le permet, si le moyen électronique atteste la date de l\'acte, garantit l\'identité de l\'expéditeur et du destinataire et garantit la réception effective. Savoir quel outil remplit ces conditions dans un pays donné est une question juridique que l\'étude règle avec sa chambre ; la formation montre comment documenter le moyen retenu.'],
        ['q' => 'Peut-on relancer les débiteurs sur WhatsApp ?', 'r' => 'La politique de la messagerie WhatsApp Business, mise à jour le 23 septembre 2026, interdit le recouvrement de créances sur l\'application comme sur la plateforme et n\'autorise à écrire qu\'aux personnes qui ont donné leur accord. L\'étude garde WhatsApp pour le public et les créanciers qui l\'ont accepté, et relance les débiteurs par courrier, appel ou rendez-vous.'],
        ['q' => 'Les photos prises lors d\'une saisie peuvent-elles être envoyées au créancier ?', 'r' => 'L\'article 45 de l\'Acte uniforme prévoit que l\'huissier conserve les photographies des objets saisis et ne les communique qu\'à l\'occasion d\'une contestation devant la juridiction. La formation en tire une règle pratique : les photos passent du téléphone au dossier le jour même et ne circulent ni dans un groupe ni dans un rapport au créancier.'],
        ['q' => 'Peut-on constituer une base des débiteurs pour gagner du temps d\'un dossier à l\'autre ?', 'r' => 'Pas avec les renseignements obtenus des administrations : l\'article 1-4 les réserve à l\'exécution du titre pour lequel ils ont été demandés et interdit d\'en faire un fichier d\'informations nominatives, sauf obligation légale. Le logiciel de l\'étude doit enfermer ces informations dans leur dossier.'],
        ['q' => 'La formation compte-t-elle pour la formation continue obligatoire en France ?', 'r' => 'La Chambre nationale reconnaît les organismes certifiés Qualiopi et habilite leurs actions. Richard SALANON n\'est ni certifié Qualiopi ni habilité : la session ne peut pas être présentée comme une formation habilitée. Vérifiez auprès de la Chambre nationale avant l\'inscription si elle peut compter autrement.'],
        ['q' => 'Faut-il déjà disposer d\'un logiciel métier ?', 'r' => 'Non. La première demi-journée part de l\'organisation actuelle, même tenue sur papier, dans un tableur et sur WhatsApp. Si l\'étude n\'a pas d\'outil de gestion, la démonstration se fait dans Dolibarr ou Odoo, sans engagement de les adopter.'],
        ['q' => 'Combien coûte la formation ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de participants et de postes, la préparation des dossiers et la revue des modèles, le paramétrage éventuel d\'un outil, le lieu, le format et le suivi retenu. Le premier échange, le cadrage et le devis sont gratuits.'],
    ],

    'sources' => [
        ['titre' => 'OHADA, Journal officiel, numéro spécial du 15 novembre 2023 : Acte uniforme portant organisation des procédures simplifiées de recouvrement et des voies d\'exécution (articles 1-1 à 1-16, 7, 8, 10, 45, 46, 47, 153, 154-1 et 156)', 'url' => 'https://www.ohada.com/uploads/actualite/7010/J.O._special_AUVE_15.11.2023.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat permanent de l\'OHADA, communiqué du 15 novembre 2023 sur la publication et l\'entrée en vigueur de l\'Acte uniforme du 17 octobre 2023', 'url' => 'https://www.ohada.com/actualite/7010/publication-au-journal-officiel-de-lohada-de-lacte-uniforme-du-17-octobre-2023-portant-organisation-des-procedures-simplifiees-de-recouvrement-et-des-voies-dexecution.html', 'date' => '2026-10-05'],
        ['titre' => 'OHADA, Acte uniforme portant organisation des procédures simplifiées de recouvrement et des voies d\'exécution : dates d\'adoption, de publication et d\'entrée en vigueur', 'url' => 'https://www.ohada.org/organisation-des-procedures-simplifiees-de-recouvrement-et-des-voies-dexecution/', 'date' => '2026-10-05'],
        ['titre' => 'Chambre nationale des commissaires de justice, la profession de commissaire de justice', 'url' => 'https://commissaire-justice.fr/profession-commissaire-de-justice/', 'date' => '2026-10-05'],
        ['titre' => 'Chambre nationale des commissaires de justice, création de la profession (lois de 2010 et de 2015)', 'url' => 'https://commissaire-justice.fr/profession-commissaire-de-justice/creation-de-la-profession-commissaire-de-justice/', 'date' => '2026-10-05'],
        ['titre' => 'Chambre nationale des commissaires de justice, les missions du commissaire de justice', 'url' => 'https://commissaire-justice.fr/profession-commissaire-de-justice/missions-commissaire-de-justice/', 'date' => '2026-10-05'],
        ['titre' => 'Chambre nationale des commissaires de justice, la profession en chiffres (offices au 1er janvier 2026, actes de 2024)', 'url' => 'https://commissaire-justice.fr/profession-commissaire-de-justice/la-profession-en-chiffres/', 'date' => '2026-10-05'],
        ['titre' => 'Chambre nationale des commissaires de justice, valeur juridique du constat', 'url' => 'https://commissaire-justice.fr/constat-commissaire-de-justice/valeur-juridique-du-constat/', 'date' => '2026-10-05'],
        ['titre' => 'Chambre nationale des commissaires de justice, comment se déroule un constat', 'url' => 'https://commissaire-justice.fr/constat-commissaire-de-justice/comment-se-deroule-un-constat/', 'date' => '2026-10-05'],
        ['titre' => 'Chambre nationale des commissaires de justice, la formation continue des commissaires de justice', 'url' => 'https://commissaire-justice.fr/profession-commissaire-de-justice/formation-continue-des-commissaires-de-justice/', 'date' => '2026-10-05'],
        ['titre' => 'Chambre nationale des commissaires de justice, le collège de déontologie (code de déontologie en vigueur le 1er mars 2024)', 'url' => 'https://commissaire-justice.fr/institutions/college-de-deontologie/', 'date' => '2026-10-05'],
        ['titre' => 'Service public, commissaire de justice (anciennement huissier de justice et commissaire-priseur), fiche F2158 vérifiée le 9 juillet 2025', 'url' => 'https://www.service-public.gouv.fr/particuliers/vosdroits/F2158', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, politique de la messagerie WhatsApp Business (dernière mise à jour le 23 septembre 2026)', 'url' => 'https://whatsappbusiness.com/fr/policy/', 'date' => '2026-10-05'],
        ['titre' => 'Union internationale des huissiers de justice (UIHJ), présentation', 'url' => 'https://www.uihj.com/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA, mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, tarifs des offres', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'n8n, tarifs de n8n Cloud', 'url' => 'https://n8n.io/pricing', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'digitalisation-processus', 'whatsapp-business', 'cybersecurite-employes', 'ia-ethique-conformite', 'dolibarr-utilisateurs'],
        'services'    => ['digitalisation-d-entreprise', 'formation-en-entreprise', 'maintenance-support'],
        'comparatifs' => ['odoo-vs-dolibarr', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
