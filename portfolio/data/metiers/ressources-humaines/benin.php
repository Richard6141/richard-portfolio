<?php
// ============================================================
// data/metiers/ressources-humaines/benin.php · Page métier + pays :
// ressources humaines au Bénin (statut F : Richard a déjà formé ce public ;
// Déjà travaillé au Bénin : oui). Public : responsables RH et gestionnaires de paie.
// Sources lues le 26/10/2026 : SGG du Bénin (loi n° 98-004 portant code du
// travail, articles 62, 94, 137, 141, 142, 145, 158, 224, 225, 226, 279, 282,
// 283 et 285 ; loi n° 2017-05, articles 8, 12, 13 et 28 ; loi n° 2017-20,
// articles 404, 405, 406, 407, 412, 415, 430, 433, 435 et 437), gouv.bj
// (entretien de la DGI sur la facture normalisée ; visite au FODEFCA),
// CIO Mag via Osiris (formulaire unique DGI-CNSS de février 2020), Bénin Web TV
// (plateforme CNSS des employés de maison), ARCEP Bénin (observatoire des
// services financiers mobiles au 30/06/2025), DataReportal (Digital 2026),
// base de fuseaux IANA. Décret FODEFCA 2022-286 : titre et date seulement.
// Richard n'est ni juriste ni gestionnaire de paie, ni certifié par un éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les responsables RH et gestionnaires de paie au Bénin : préparer annonces, variables de paie et déclarations du personnel plus vite, avec une règle claire sur les données des salariés",
    'title'   => "Formation IA RH et paie au Bénin | Richard SALANON",
    'meta'    => "Formation IA pour responsables RH et gestionnaires de paie au Bénin : annonces, variables de paie et dossiers du personnel, à Cotonou ou à distance.",
    'en_bref' => "Au Bénin, les responsables RH et les gestionnaires de paie peuvent être formés à l'IA par Richard SALANON, consultant en digitalisation basé à Cotonou, sur leurs propres documents : annonces, tableaux de variables de paie, fichiers du personnel. La formation se donne à Cotonou ou à distance, sans décalage horaire. Elle porte sur les gestes du service, de la fiche de poste à la déclaration annuelle de main-d'œuvre, et sur ce que le code du travail et le code du numérique imposent. Le prix est fixé sur devis, en FCFA.",
    'publie'  => '2026-12-03',
    'maj'     => '2026-12-03',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former un service RH béninois à l'IA, et comment distinguer une formation d'une démonstration d'outil ?",
            'paragraphes' => [
                "Richard SALANON, consultant en digitalisation installé à Cotonou, forme les responsables des ressources humaines et les gestionnaires de paie des entreprises béninoises à l'usage des assistants d'IA, du tableur et des formulaires. Il vient dans les locaux du service à Cotonou, ou travaille à distance avec une équipe répartie entre plusieurs villes. Il n'exerce pas le métier : il apprend à des professionnels qui ont déjà la compétence RH à s'équiper sans en perdre le contrôle.",
                "La différence entre une démonstration et une formation se voit au premier exercice. Dans une démonstration, le formateur écrit une annonce de poste fictive pour un secteur de son choix, et la salle applaudit. Dans une formation pour un service RH, la gestionnaire apporte son tableau d'heures supplémentaires du mois, le responsable sa fiche de poste réelle, et chacun repart avec un geste qu'il a refait seul sur ses propres documents rendus anonymes.",
                "Cinq questions permettent de comparer les prestataires. Le formateur connaît-il les textes que votre service applique, ou récite-t-il un cours général sur le droit français ? Que dit-il des données des salariés avant le premier exercice ? Travaille-t-il sur vos modèles ou sur les siens ? Comment mesure-t-il ce que chaque participant sait faire à la fin ? Qui répond aux questions le mois suivant ? Un prestataire qui ne sait pas répondre précisément à la première question risque de vous faire appliquer des règles qui ne sont pas les vôtres.",
                "Un service RH béninois dépend en effet de textes du pays : le code du travail de 1998, la loi de 2017 sur l'embauche et la résiliation du contrat, le code du numérique, et les formalités propres à la caisse de sécurité sociale et à la direction générale des impôts. Les assistants d'IA, eux, répondent souvent avec les règles d'un autre pays. Former un service RH au Bénin, c'est d'abord apprendre à revenir au texte béninois à chaque réponse d'un assistant.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en sont le numérique et l'IA dans les services RH au Bénin ?",
            'paragraphes' => [
                "Le service RH béninois travaille d'abord avec un téléphone. Selon DataReportal (Digital 2026), le Bénin comptait fin 2025 environ 16,4 millions de connexions mobiles cellulaires, soit 110 % de la population, et 4,80 millions d'internautes, soit 32,2 % des 14,9 millions d'habitants. Pour un gestionnaire de paie, cela invite à ne pas supposer que tous les salariés disposent d'une adresse électronique : la circulation des documents se pense aussi pour des personnes qui n'ont que leur téléphone.",
                "Le mobile money est déjà entré dans la paie. D'après l'observatoire des services financiers mobiles de l'ARCEP, arrêté au 30 juin 2025, le tableau des transactions du deuxième trimestre 2025 compte 941 836 paiements de salaires par mobile money, pour 25,67 milliards de FCFA. Le même document recense 10 926 793 comptes actifs et 18 448 508 comptes dormants à cette date. Un service qui verse une partie des salaires par ce canal doit donc rapprocher ses états de paie des relevés de l'opérateur, ce qui est une tâche de contrôle que le tableur sait faire et que l'IA ne remplace pas.",
                "Du côté de l'administration, deux outils de déclaration en ligne ont été annoncés. Selon un article de CIO Mag du 6 février 2020, repris par Osiris, la direction générale des impôts et la CNSS ont lancé en février 2020 un formulaire unique de déclaration et de paiement en ligne des impôts sur salaires et des cotisations de sécurité sociale, sur la plateforme e-services, en quatorze étapes, pour les moyennes et grandes entreprises. Le 16 novembre 2023, la CNSS a lancé avec la DGI et l'ASIN une plateforme de déclaration des employés de maison, selon Bénin Web TV. L'état actuel de ces dispositifs se confirme auprès de la CNSS et de la DGI avant toute organisation du travail.",
                "Aucun texte béninois ne traite des assistants d'IA dans les services RH. Le cadre qui s'applique est celui du travail et celui du numérique, lus dans leur version officielle. Cette absence de règle spécifique ne signifie pas absence de règle : les gestes d'un service RH touchent des données de personnes, et le code du numérique s'y applique dès qu'un fichier contient un nom.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles règles du code du travail et du code du numérique encadrent le travail d'un service RH au Bénin ?",
            'intro' => "Les repères ci-dessous sont lus dans les textes publiés par le Secrétariat général du gouvernement. Ils décrivent ce que les textes disent aux employeurs, sans interprétation : pour un cas précis, le service interroge son conseil juridique ou l'inspection du travail.",
            'items' => [
                ['titre' => "Recruter, puis le faire savoir", 'texte' => "La loi n° 2017-05 du 29 août 2017 prévoit que l'employeur recrute librement son personnel, qu'il fait connaître aux services du ministère chargé du travail les postes pourvus, et qu'il procède à l'immatriculation et à l'affiliation des travailleurs auprès des structures de protection sociale. Une annonce, un choix de candidat et une déclaration d'embauche forment donc un seul circuit, que le service peut suivre dans un tableau."],
                ['titre' => "Écrire ce qui doit l'être", 'texte' => "Selon la même loi, la période d'essai doit être expressément prévue par écrit dans une clause du contrat (article 8) et le contrat à durée déterminée est un contrat écrit (article 12). L'article 13 ajoute qu'à partir du quatrième terme, toute décision de non-renouvellement est précédée d'un préavis. Un assistant peut reformuler une clause ; seul le service décide de ce qu'elle contient."],
                ['titre' => "Motiver et notifier un licenciement", 'texte' => "L'article 28 de la loi n° 2017-05 exige un motif légitime, une notification écrite avec l'indication du motif, et la possibilité pour le travailleur de s'exprimer avant la décision, sauf licenciement collectif pour motif économique. Une lettre rédigée par un assistant ne remplace aucune de ces étapes, et aucun dossier nominatif n'y est collé."],
                ['titre' => "Le règlement intérieur et les délégués", 'texte' => "L'article 137 du code du travail rend le règlement intérieur obligatoire à partir de quinze salariés, limite son contenu à l'organisation technique du travail, à la discipline et à l'hygiène et à la sécurité, et le fait communiquer aux délégués du personnel et à l'inspecteur du travail. Les délégués du personnel sont mis en place à partir de onze salariés (article 94). Un assistant interne qui répond aux salariés ne doit pas dire autre chose que ce règlement."],
                ['titre' => "Durée du travail et heures supplémentaires", 'texte' => "La durée légale est de quarante heures par semaine hors établissements agricoles (article 142). L'article 145 permet à l'employeur d'imposer des heures supplémentaires dans une limite de deux cent quarante heures par année civile et par salarié, sous réserve de l'affichage et de la communication à l'inspecteur du travail. Ce plafond se suit dans le tableau de paie, salarié par salarié, et non à l'oreille."],
                ['titre' => "Preuve de paiement et bulletin", 'texte' => "L'article 224 oblige l'employeur à délivrer, au moment du paiement, un bulletin individuel ou un document équivalent. D'après l'article 226, en cas de contestation, le non-paiement est présumé si l'employeur ne produit ni le registre de paiement émargé, ni le double du bulletin émargé. La numérisation d'un état de paie ne dispense donc pas de conserver la pièce signée."],
                ['titre' => "Certificat, registre et déclaration annuelle", 'texte' => "L'article 62 impose de tenir à la disposition du travailleur un certificat de travail qui indique exclusivement les dates d'entrée et de sortie, la nature et les dates des emplois et la catégorie professionnelle, sans renseignement tendancieux. L'article 285 prévoit un registre d'employeur, et les articles 282 et 283 une déclaration annuelle sur la situation de la main-d'œuvre, en triple exemplaire, au plus tard le 31 mars de l'année suivante."],
                ['titre' => "Un fichier du personnel est un traitement de données", 'texte' => "L'article 405 du code du numérique impose une déclaration préalable à l'autorité de protection, l'APDP, ou l'inscription du traitement dans un registre tenu par la personne désignée. L'article 406 prévoit des normes de simplification, et l'article 407 range parmi les traitements soumis à autorisation ceux qui portent sur un numéro national d'identification, sur des données biométriques ou sur une interconnexion de fichiers. Un pointage biométrique ou un croisement de fichiers du personnel se discute donc avant l'achat, pas après."],
                ['titre' => "Le consentement du salarié ne suffit pas toujours", 'texte' => "L'article 404 maintient l'interdiction de traiter certaines données sensibles lorsque le responsable du traitement est l'employeur présent ou potentiel de la personne, même avec un consentement écrit, ou lorsque la personne est dans une situation de dépendance qui l'empêche de refuser librement."],
                ['titre' => "Informer, conserver, répondre", 'texte' => "L'article 415 énumère les informations à fournir à la personne lors de la collecte, l'article 433 limite la conservation à la période requise pour les finalités, l'article 435 impose un registre des activités de traitement et l'article 437 donne à toute personne un droit d'accès aux informations sur le traitement de ses données. L'article 430 prévoit la désignation d'un délégué à la protection des données dans les cas qu'il énumère. Un salarié qui demande ce qu'on garde sur lui doit pouvoir être renseigné par le service."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'un service RH béninois confier à l'IA, avec quel outil et quel contrôle humain ?",
            'legende' => "Tâches et documents propres à un service RH et de paie au Bénin. Les outils nommés sont ceux que les participants ont déjà ; l'abonnement éventuel reste au nom de l'entreprise.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ['Annonce de poste à partir de la fiche de poste', 'ChatGPT, Claude ou Gemini sur un texte sans donnée de personne', 'Une annonce lisible, des variantes pour un site d\'emploi et pour un message WhatsApp', 'Relecture des critères : aucun critère étranger au poste, salaire annoncé décidé par la direction'],
                ['Suivi du circuit d\'embauche', 'Tableur partagé avec liste de choix', 'Une ligne par recrutement : poste, date, déclaration au ministère du travail, immatriculation à la caisse', 'Le responsable vérifie que chaque embauche a ses deux déclarations avant la première paie'],
                ['Contrat à durée déterminée et période d\'essai', 'Modèle validé par le conseil, assistant pour reformuler les passages obscurs', 'Un contrat écrit avec clause d\'essai explicite, lisible par le salarié', 'Le juriste valide le modèle une fois ; le service ne laisse jamais l\'assistant ajouter une clause'],
                ['Tableau des heures et des heures supplémentaires', 'Excel ou Google Sheets, formules et mise en forme conditionnelle', 'Cumul par salarié et alerte avant le plafond annuel de l\'article 145', 'Le gestionnaire recalcule trois lignes à la main chaque mois'],
                ['Rapprochement des salaires versés par mobile money', 'Tableur, avec l\'export de l\'opérateur', 'La liste des paiements du mois, rapprochée de l\'état de paie, avec les écarts expliqués', 'Aucun virement n\'est validé tant qu\'un écart reste inexpliqué'],
                ['Données pour la déclaration CNSS et les impôts sur salaires', 'Tableur structuré, une ligne par salarié et par mois', 'Un fichier dont le détail égale le total, prêt à être saisi sur le portail de l\'organisme', 'La personne habilitée saisit et paie ; le format exigé est vérifié auprès de l\'organisme'],
                ['Certificat de travail et attestation', 'Modèle rempli à partir de la fiche du salarié', 'Un document limité aux mentions de l\'article 62, sans commentaire sur la personne', 'Signature par le responsable, après relecture des dates d\'entrée et de sortie'],
                ['Plan de formation du personnel', 'Tableur partagé, assistant pour synthétiser les besoins recueillis', 'Les besoins par poste, les dates, le coût et les pièces à garder', 'La direction arbitre ; le service vérifie auprès du fonds les conditions de prise en charge'],
                ['Réponses types aux questions des salariés', 'Assistant, à partir du seul règlement intérieur du service', 'Une fiche de réponses sur les horaires, les congés et les absences', 'Chaque réponse est relue par le responsable ; en cas de doute, renvoi au texte'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que change le terrain béninois : connexion, électricité, langues et logiciels réellement utilisés ?",
            'paragraphes' => [
                "Un service RH de Cotonou, de Porto-Novo ou de Parakou peut travailler avec un tableur plus qu'avec un logiciel de paie, et échanger avec les salariés par téléphone. La formation part du matériel et des outils que le service possède déjà, ce que le questionnaire avant la session permet de préciser. Les exercices sont construits dans le tableur que le service utilise déjà, et les formulaires choisis fonctionnent sur un téléphone ordinaire. Ce choix évite d'enseigner un outil que le service ne pourra pas garder.",
                "La connexion est la contrainte la plus concrète. Avec 32,2 % d'internautes fin 2025 selon DataReportal, un service ne peut pas supposer que tous ses salariés consultent un message en ligne. Pour une demi-journée, les documents d'exercice sont téléchargés sur chaque poste à l'avance, les consignes sont rédigées dans un traitement de texte puis collées en une seule fois dans l'assistant, et les exercices de relecture et de rapprochement se font sans connexion. En cas de coupure, la solution de repli prévue pour les séances à distance prend le relais : par exemple le partage de connexion d'un téléphone, pendant que le groupe poursuit les exercices hors ligne.",
                "Une coupure d'électricité ou de connexion peut interrompre une séance : les participants prennent l'habitude de sauvegarder leur fichier à chaque étape pour reprendre sans perte, et les tableaux de paie se sauvegardent de la même façon. Cette discipline sert aussi le service le jour où le logiciel plante à la veille d'un paiement.",
                "Le français est la langue de travail, et l'anglais reste possible pour les échanges avec un partenaire ou un bailleur. Les assistants peuvent rédiger un français qui n'est pas celui du service : les modèles de lettres du service, son vocabulaire et ses références au code du travail béninois leur sont fournis. Pour un texte à destination de salariés qui lisent surtout une autre langue du pays, un locuteur relit la version finale avant diffusion.",
                "Enfin, les salaires circulent aussi par le téléphone. Un gestionnaire de paie qui verse par mobile money garde pour chaque paiement la trace exigée par l'article 224 du code du travail, bulletin ou document équivalent, et rapproche les montants avec le relevé de l'opérateur. La formation fait construire le classeur qui relie les trois : état de paie, bulletin et relevé.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour un service RH au Bénin, à Cotonou, dans une autre ville ou à distance ?",
            'legende' => "Effectifs et durées de la formation IA en entreprise de Richard. Le Bénin est à UTC+1 toute l'année, comme Cotonou : aucun décalage horaire ne s'ajoute pour les séances à distance. Les formats se combinent.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Un responsable RH, un comptable et un dirigeant qui veulent voir l\'IA sur une fiche de poste et un tableau de paie fictif avant de décider'],
                ['Formation complète, dans vos locaux', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un service RH ou paie qui a déjà essayé un assistant dans le désordre, à Cotonou ou dans une autre ville selon le devis'],
                ['Session mutualisée', '1 à 2 jours', 'Une ou deux personnes par structure', 'Un RH unique de PME, un cabinet comptable qui tient la paie de plusieurs clients, une association : exercices sur documents fictifs'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Un siège à Cotonou et des agences à Parakou ou Natitingou ; séances plus courtes, plus faciles à tenir sur une connexion mobile'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Prise en main à Cotonou, puis application sur la paie du mois avec un retour à distance'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Ancrer les habitudes après la formation, étendre à une tâche de plus, faire le point sur ce qui sert vraiment'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent trois séances de formation pour un service RH au Bénin ?",
            'items' => [
                ['secteur' => "Séance 1 : recruter quatre agents commerciaux pour une PME de distribution de Cotonou (dossiers fictifs)", 'probleme' => "Situation : la direction demande une annonce pour lundi, et les candidatures arriveront par WhatsApp, par courriel et en main propre.", 'solution' => "Consigne donnée : rédiger l'annonce à partir de la fiche de poste, puis construire la grille d'évaluation avant de lire la moindre candidature. Ce que le participant contrôle : qu'aucun critère étranger au poste ne figure dans l'annonce, que le salaire annoncé est celui que la direction a validé, et que le tableau de suivi prévoit pour chaque recrutement la communication du poste au ministère du travail et l'affiliation à la caisse, comme le prévoit la loi n° 2017-05."],
                ['secteur' => "Séance 2 : clôturer la paie d'un mois avec des salaires versés en partie par mobile money (classeur fictif de trente salariés)", 'probleme' => "Situation : le total de l'état de paie ne tombe pas sur la somme des virements et des paiements par opérateur, et trois salariés ont dépassé leur horaire.", 'solution' => "Consigne donnée : demander à l'assistant d'expliquer la formule de cumul des heures et de proposer une colonne d'alerte avant le plafond de deux cent quarante heures, puis rapprocher l'état de paie de l'export de l'opérateur. Ce que le participant contrôle : trois lignes recalculées à la main, chaque écart expliqué par écrit, et le double du bulletin classé avec la pièce émargée, car l'article 226 du code du travail fait peser sur l'employeur la preuve du paiement."],
                ['secteur' => "Séance 3 : préparer la déclaration annuelle de main-d'œuvre et répondre à un salarié qui demande ce que le service garde sur lui", 'probleme' => "Situation : le 31 mars approche, le registre d'employeur n'est pas à jour, et un salarié a écrit pour connaître les informations conservées à son sujet.", 'solution' => "Consigne donnée : lister dans un tableau les champs du fichier du personnel, leur finalité et leur durée de conservation, puis rédiger une réponse au salarié à partir de ce tableau. Ce que le participant contrôle : que la réponse ne contient aucune donnée d'un autre salarié, que les durées figurent dans le registre des traitements prévu à l'article 435 du code du numérique, et que le responsable relit la lettre avant l'envoi."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter la formation d'un service RH au Bénin ?",
            'paragraphes' => [
                "Le dispositif public à connaître est le Fonds de développement de la formation professionnelle continue et de l'apprentissage, le FODEFCA. Ses statuts ont été approuvés par le décret n° 2022-286 du 11 mai 2022. Selon un article du gouvernement du Bénin sur la visite du ministre Kouaro Yves Chabi le 28 octobre 2021, il a été créé en 1999 comme établissement public à caractère social, avec une mission économique, satisfaire les besoins en main-d'œuvre qualifiée en vue d'améliorer la productivité des travailleurs, et une mission sociale, assurer la promotion des travailleurs. Les conditions de prise en charge d'une formation précise se demandent au fonds, par écrit.",
                "Aucune prise en charge n'est garantie, et Richard SALANON n'affiche aucun agrément de ce fonds. Si votre dossier de financement l'exige, dites-le dès le premier échange ; sinon, budgétez la formation sans prise en charge. Quelle que soit l'option, le service garde le programme, les supports et l'attestation nominative remis en fin de formation, des pièces qu'un service RH sait ranger et qu'un fonds peut demander.",
                "Pour budgéter, trois lignes suffisent. La première est la formation, sur devis, en FCFA. La deuxième est l'abonnement éventuel à un assistant professionnel, à décider seulement après la formation, sur les tâches qui ont servi. La troisième est le temps des participants : quatre demi-journées pèsent moins sur une paie à clôturer que deux jours entiers consécutifs, et un service qui ne peut pas fermer peut préférer cette formule ou la formule à distance.",
                "Un achat de formation ou d'abonnement se règle aussi par une pièce comptable en règle. D'après un entretien de la direction générale des impôts du 27 février 2020, publié sur le site du gouvernement, la facture normalisée concernait alors les entreprises assujetties à la TVA, avec un numéro d'identification de la machine, une signature et un code électronique. Le service demande à son comptable quelle pièce exiger de chaque fournisseur, et la rapproche du devis.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'un service RH ou paie au Bénin ?",
            'intro'      => "Aucun tarif n'est publié : le prix est fixé sur devis, en FCFA, après un échange de cadrage. Richard accepte le Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces. Les abonnements aux assistants restent au nom de l'entreprise.",
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée sur une fiche de poste et un tableau de paie fictifs', 'Règle de données pour le service', 'Recommandation pour la suite']],
                ['offre' => 'Formation complète RH et paie', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Exercices sur vos modèles, avec des données fictives', 'Épreuve finale sur une tâche réelle, chronomètre en main', 'Attestation nominative et supports remis', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Mesure de ce qui sert', 'Nouvelles tâches à outiller']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par poste.",
                "Le nombre de demi-journées et le choix entre recrutement, paie et dossiers du personnel.",
                "Le lieu : vos locaux à Cotonou, une autre ville du Bénin selon le devis, ou la distance.",
                "La préparation des exercices sur vos modèles et des données fictives.",
                "Le tableur ou le logiciel à couvrir : tableur seul, ou aussi Odoo ou Dolibarr.",
                "L'accompagnement après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les services RH béninois qui démarrent l'IA ?",
            'intro' => "Ces erreurs viennent de la pression des échéances : la paie du mois, l'inspecteur du travail, un poste à pourvoir.",
            'items' => [
                ['titre' => "Coller un état de paie dans un assistant en ligne", 'texte' => "La liste des salaires est un fichier de personnes. Les articles 405 et 407 du code du numérique placent les fichiers de personnes dans les traitements à déclarer, et certains à autoriser. On travaille sur une copie dont les noms sont remplacés par des numéros."],
                ['titre' => "Croire l'assistant sur un délai ou un taux", 'texte' => "Un assistant cite volontiers un préavis, un plafond ou un taux qui sont ceux d'un autre pays. Tout chiffre juridique ou de cotisation se retrouve dans le texte béninois ou auprès de la caisse avant d'être utilisé."],
                ['titre' => "Numériser sans conserver la pièce signée", 'texte' => "L'article 226 du code du travail fait peser sur l'employeur la preuve du paiement. Le tableur ne remplace pas le registre émargé ou le double du bulletin émargé."],
                ['titre' => "Laisser le CV d'un candidat dans le tableau pour toujours", 'texte' => "L'article 433 du code du numérique limite la conservation à la période requise par la finalité. Le tableau de suivi des recrutements porte une date de purge, par colonne."],
                ['titre' => "Acheter un pointage biométrique sans lire l'article 407", 'texte' => "Les traitements de données biométriques figurent parmi ceux qui demandent une autorisation préalable de l'autorité. La question se pose avant la commande."],
                ['titre' => "Attendre le 31 mars", 'texte' => "La déclaration annuelle de main-d'œuvre se prépare tout au long de l'année dans un tableau tenu à jour. Le faire en mars, à partir de souvenirs, multiplie les oublis."],
                ['titre' => "Répondre aux salariés avec un assistant non relu", 'texte' => "Une réponse sur les congés ou les primes engage l'employeur. Elle repose sur le règlement intérieur et le code du travail, relus par le responsable avant diffusion."],
                ['titre' => "Former la paie sans former le responsable", 'texte' => "Si le responsable n'a pas vu les règles de données et les contrôles, il refuse ou autorise sans critère. Une demi-journée commune règle l'essentiel."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre service RH au Bénin avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des professionnels des ressources humaines, et il a déjà travaillé avec des entreprises au Bénin, le pays où il vit, à Cotonou. Il n'exerce pas le métier : il forme à l'usage des assistants d'IA, du tableur et des formulaires, sur les documents du service. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience, déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et avoir travaillé dans " . count((array) fait('pays_travailles')) . " pays. Il n'est ni juriste en droit social, ni gestionnaire de paie, ni délégué à la protection des données, et n'est certifié par aucun éditeur : les textes sont lus dans leur version officielle, et les questions de droit sont renvoyées au conseil de l'entreprise. Il répond aux demandes sous 24 heures.",
                "Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>. L'organisation des sessions pour plusieurs services est décrite sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>, et les travaux livrés sur la page <a href=\"/realisations/\">réalisations</a>.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels projets Richard a-t-il menés à Cotonou ?",
            'legende' => "Projets de Cotonou présentés dans les réalisations, avec leur cadre de réalisation.",
            'entetes' => ['Projet', 'Secteur', 'Ce qui a été construit', 'Cadre'],
            'lignes'  => [
                ['Wapy', 'Logiciel en ligne', 'Un assistant WhatsApp à intelligence artificielle qui répond aux clients des entreprises d\'Afrique francophone, conçu, développé et amélioré par Richard.', 'Produit de Richard'],
                ['OBA TV', 'Médias', 'Une chaîne en ligne avec direct, replays, grille des programmes, rédaction autonome et abonnement premium payé par mobile money (MTN MoMo, Moov Money).', 'Client direct'],
                ['GC Pro Consulting', 'Formation et conseil en gestion', 'Un site bilingue de plus de cent pages : catalogue de formations, inscriptions, demandes de devis en ligne et pages locales par ville.', 'Client direct'],
                ['IK Fashion House', 'Mode féminine sur mesure', 'Une boutique en ligne avec commande sur mesure à distance, payée avec FedaPay, et une page de lancement de collection.', 'Réalisé en sous-traitance pour Digital Développement'],
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre service RH ?",
            'texte' => "Outillez ce qui se répète : annonces, tableaux d'heures, rapprochements, suivi des déclarations. Gardez à une personne nommée le choix des candidats, les contrats, les lettres de rupture et le paiement. Lisez le texte béninois plutôt que la réponse d'un assistant, rendez anonymes les fichiers d'exercice, et conservez la pièce signée même quand le tableau est parfait.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre service RH ou paie à l'IA au Bénin ?",
            'texte'  => "Indiquez la taille du service, la ville, les postes concernés, le tableur ou le logiciel de paie en place et la tâche qui vous prend le plus de temps : vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon service RH'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les responsables RH et les gestionnaires de paie à l'IA au Bénin ?", 'r' => "Richard SALANON, basé à Cotonou, forme les services RH et paie dans leurs locaux ou à distance, sur leurs propres documents rendus anonymes. Il n'exerce pas le métier : il forme à l'usage des outils, et renvoie les questions de droit au conseil de l'entreprise."],
        ['q' => "Un assistant d'IA peut-il calculer la paie d'une entreprise béninoise ?", 'r' => "Il peut expliquer une formule de tableur, rédiger une note aux salariés ou signaler un écart. Les règles de calcul, les cotisations et les retenues relèvent du gestionnaire de paie ou du cabinet, qui les vérifie auprès de la CNSS et de l'administration fiscale."],
        ['q' => "Faut-il déclarer à l'APDP un fichier du personnel ?", 'r' => "L'article 405 de la loi n° 2017-20 prévoit une déclaration préalable auprès de l'autorité ou l'inscription dans un registre tenu par la personne désignée par le responsable du traitement. L'article 412 fixe à soixante jours, prorogeables de trente, le délai de réponse de l'autorité. Votre cas se confirme auprès de l'APDP."],
        ['q' => "Un pointage biométrique des salariés demande-t-il une autorisation ?", 'r' => "L'article 407 range les traitements de données biométriques parmi ceux qui sont mis en œuvre après autorisation préalable de l'autorité. La formation fait poser la question avant l'achat, avec le juriste de l'entreprise."],
        ['q' => "Peut-on utiliser un assistant d'IA pour rédiger un contrat de travail au Bénin ?", 'r' => "Pour reformuler une clause obscure, oui, à partir d'un modèle validé. La période d'essai doit être prévue par écrit (article 8 de la loi n° 2017-05) et le contrat à durée déterminée est écrit (article 12) : le contenu reste décidé par le service et validé par un juriste."],
        ['q' => "Jusqu'à quand déposer la déclaration annuelle de main-d'œuvre ?", 'r' => "Les articles 282 et 283 du code du travail prévoient une déclaration annuelle sur la situation de la main-d'œuvre, en triple exemplaire, au plus tard le 31 mars de l'année suivante. Les modalités actuelles se confirment auprès de l'inspection du travail."],
        ['q' => "Les salaires versés par mobile money se contrôlent-ils avec un tableur ?", 'r' => "Oui : l'export de l'opérateur se rapproche de l'état de paie, ligne par ligne. L'ARCEP compte 941 836 paiements de salaires par mobile money au deuxième trimestre 2025. Chaque écart s'explique avant validation."],
        ['q' => "La formation fonctionne-t-elle avec une connexion mobile lente ?", 'r' => "Oui, si elle est préparée : documents téléchargés à l'avance, consignes rédigées hors ligne, exercices de rapprochement sans connexion, et solution de repli en cas de coupure pour les séances à distance."],
        ['q' => "Le FODEFCA peut-il financer la formation d'un service RH ?", 'r' => "Cela dépend du fonds, et rien n'est garanti. Ses statuts ont été approuvés par le décret n° 2022-286 du 11 mai 2022. Richard n'affiche aucun agrément de ce fonds : interrogez-le par écrit, programme et devis à l'appui."],
        ['q' => "Combien coûte la formation, et peut-on la régler par Mobile Money ?", 'r' => "Le prix est fixé sur devis, en FCFA, après un échange de cadrage. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces."],
        ['q' => "La formation est-elle certifiante ?", 'r' => "Non. Richard n'est certifié par aucun éditeur. Chaque participant reçoit une attestation nominative de fin de formation, avec le programme et les supports ; ce n'est ni un diplôme ni une certification."],
    ],

    'sources' => [
        ['titre' => 'Secrétariat général du gouvernement du Bénin, loi n° 98-004 du 27 janvier 1998 portant code du travail (articles 62, 94, 137, 141, 142, 145, 158, 224 à 226, 279, 282, 283 et 285)', 'url' => 'https://sgg.gouv.bj/doc/loi-98-004/download', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du gouvernement du Bénin, loi n° 2017-05 du 29 août 2017 fixant les conditions et la procédure d\'embauche, de placement de la main-d\'œuvre et de résiliation du contrat de travail (articles 8, 12, 13 et 28)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-05/download', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 404 à 407, 412, 415, 430, 433, 435 et 437)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/download', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-26'],
        ['titre' => 'Gouvernement du Bénin, tout savoir sur les factures normalisées au Bénin (entretien de la DGI)', 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-26'],
        ['titre' => 'Gouvernement du Bénin, visite du ministre au CPPE et au FODEFCA (28 octobre 2021)', 'url' => 'https://www.gouv.bj/article/1528/mise-oeuvre-strategie-nationale-eftp-plaidoyer-ministre-kouaro-yves-chabi-synergie-actions-entre-cppe-fodefca/', 'date' => '2026-10-26'],
        ['titre' => 'Osiris, Bénin : la déclaration des impôts et des cotisations sociales en ligne (CIO Mag, 6 février 2020)', 'url' => 'https://www.osiris.sn/Benin-la-declaration-des-impots-et.html', 'date' => '2026-10-26'],
        ['titre' => 'Bénin Web TV, la CNSS lance la plateforme de déclaration des employés de maison (17 novembre 2023)', 'url' => 'https://beninwebtv.bj/benin-la-cnss-lance-la-plateforme-de-declaration-des-employes-de-maison/', 'date' => '2026-10-26'],
        ['titre' => 'ARCEP Bénin, observatoire des services financiers mobiles, tableau de bord au 30 juin 2025', 'url' => 'https://arcep.bj/wp-content/uploads/2025/10/Tableau-de-bord-SFM-T2_2025.pdf', 'date' => '2026-10-26'],
        ['titre' => 'DataReportal, Digital 2026 : Bénin', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-26'],
        ['titre' => 'IANA, base de fuseaux horaires, Afrique (Africa/Lagos, WAT, UTC+1, fuseau appliqué au Bénin)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'ia-en-entreprise', 'excel-google-sheets', 'digitalisation-processus', 'gouvernance-ia'],
        'services'  => ['formation-en-entreprise', 'digitalisation-d-entreprise'],
    ],
];
