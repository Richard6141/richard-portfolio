<?php
// ============================================================
// data/metiers/ressources-humaines/burkina-faso.php · Formation IA pour les
// responsables RH et les gestionnaires de paie au Burkina Faso.
// Statut F du métier, mais texte au conditionnel : Richard peut former ce
// public. Pays : « Déjà travaillé » = oui (faits.php). Aucun projet client du
// Burkina Faso dans projets-clients.php : aucun projet cité.
// Sources lues le 27/10/2026 : CNSS du Burkina (cotisations sociales,
// immatriculation de l'employeur et du travailleur, conditions d'utilisation de
// la plateforme eCNSS, article de mars 2025, page d'accueil), code général des
// impôts édition 2023 (articles 105, 112, 113, 115, 116, 227 à 230), DGI (page
// d'accueil), Osiris (eSINTAX, 16/04/2018), loi n° 001-2021/AN du 30 mars 2021
// (articles 8, 10, 12, 15, 16, 19, 31, 42), bulletin de droit comparé du travail
// et de la sécurité sociale 2010 (Comptrasec), L'Économiste du Faso
// (17/02/2025), Burkina24 (17/06/2026), Sidwaya (06/11/2019), Banque mondiale
// (API, internet 2024), base IANA des fuseaux.
// Non repris car non lus à la source : texte intégral du code du travail de 2008
// (copie du ministère inaccessible), durées d'essai et de CDD, SMIG, barème
// actuel de l'IUTS, calendrier de la déclaration annuelle.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les services du personnel burkinabè : dossiers d'embauche, déclarations CNSS, retenues d'IUTS et fichiers des salariés préparés avec un assistant, sous la loi de 2021 sur les données personnelles",
    'title'   => "Formation IA pour les RH au Burkina Faso | Richard SALANON",
    'meta'    => "Formation IA pour responsables RH et gestionnaires de paie au Burkina Faso : CNSS, IUTS, loi de 2021 sur les données. À distance, devis en FCFA.",
    'en_bref' => "Depuis Cotonou, Richard SALANON, consultant en digitalisation, peut animer en visioconférence des séances d'IA pour les chargés de recrutement, de dossiers du personnel et de paie des entreprises burkinabè : un assistant travaille sur des modèles anonymisés d'embauche, de tableau de rémunérations, de rapprochement CNSS et de retenue d'impôt, sous le regard de la loi de 2021 sur les données. Ouagadougou, à UTC+0, a une heure de retard sur Cotonou, à UTC+1. Les barèmes et échéances publiés par la CNSS et par la DGI servent de fil conducteur. Les devis se font en FCFA, sans aucun montant affiché ici.",
    'publie'  => '2026-12-23',
    'maj'     => '2026-12-23',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former un service du personnel burkinabè à l'IA, et comment départager les offres ?",
            'paragraphes' => [
                "Les entreprises de Ouagadougou, de Bobo-Dioulasso ou de Koudougou qui veulent initier leurs équipes RH ont le choix entre une école, un cabinet de conseil en ressources humaines, un éditeur de logiciel de paie et un formateur indépendant. Richard SALANON se place sur un créneau précis : montrer, en visioconférence depuis Cotonou, ce qu'un assistant d'IA apporte pour écrire, vérifier et ranger les papiers d'un service du personnel.",
                "Il enseigne l'outil, non le métier. Le droit social, la paie et la fiscalité restent aux spécialistes de l'entreprise, à l'inspection du travail, à la CNSS et au receveur des impôts de rattachement. Les extraits évoqués plus loin se relisent à la source avec les participants, et toute question d'application est renvoyée à l'organisme compétent.",
                "Trois questions aident à départager les offres. La séance s'appuie-t-elle sur vos modèles anonymisés, ou sur un catalogue d'astuces ? Le formateur dit-il d'où vient chaque barème, avec la date de lecture ? Et la dernière demi-journée laisse-t-elle chaque participant refaire seul une tâche de son poste contre la montre, plutôt que cocher un formulaire de satisfaction ?",
                "Avant le premier exercice, chaque pièce du service reçoit une étiquette : utilisable telle quelle, à anonymiser d'abord, ou à ne jamais sortir. Un bulletin nominatif, un certificat médical d'aptitude ou la copie d'une carte nationale d'identité n'ont pas leur place dans un assistant hébergé à l'étranger.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles démarches un employeur burkinabè fait-il déjà en ligne, et lesquelles passent encore par le papier ?",
            'paragraphes' => [
                "À la CNSS, la plateforme eCNSS est présentée dans un article du site de la caisse comme composée de deux portails, l'un interne et l'autre externe, avec des espaces dédiés aux employeurs, aux assurés, aux banques et à la caisse elle-même, et des fonctionnalités de télédéclaration et de télépaiement. Un atelier tenu les 13 et 14 mars 2025 à Ouagadougou préparait l'ajout d'un module de déclaration en ligne des accidents du travail et des maladies professionnelles.",
                "L'immatriculation, elle, garde une part de papier. D'après la page de la CNSS consacrée à l'employeur, la demande des entreprises se fait aux guichets uniques du Centre des formalités des entreprises (CEFORE), sur un formulaire commun à quatre administrations : la direction générale des impôts, le greffe commercial du tribunal de grande instance, la chambre de commerce et d'industrie du Burkina Faso et la CNSS. L'État et ses démembrements, les ONG, les associations et les employeurs de gens de maison s'immatriculent directement auprès de la caisse. Le formulaire est imprimé, rempli, signé et cacheté par l'employeur.",
                "Côté fiscalité, le site de la direction générale des impôts (DGI) présente, le 27 octobre 2026, un menu de services en ligne qui comprend eSINTAX, SYC@D, eCADASTRE et eDocument. Osiris rapportait le 16 avril 2018 que le portail eSINTAX avait ouvert le 12 avril 2018 pour les grandes et moyennes entreprises, avec la déclaration en ligne depuis un ordinateur, un smartphone ou une tablette, le paiement devant suivre. Quelles retenues de salaire relèvent aujourd'hui de ce portail, c'est le receveur des impôts de rattachement qui le confirme.",
                "Pour le recrutement, L'Économiste du Faso a publié le 17 février 2025 les chiffres de l'Agence nationale pour l'emploi pour le quatrième trimestre 2024 : 3 518 demandeurs d'emploi enregistrés et 76 postes pourvus d'octobre à décembre. Le même article indique que l'agence et l'Agence nationale pour la promotion des technologies de l'information et de la communication se sont réunies à Koudougou du 30 novembre au 6 décembre 2024 pour finaliser le développement des plateformes de l'agence, qui comprennent l'enregistrement des demandeurs d'emploi, le recrutement en ligne, la délivrance de la carte de demandeur d'emploi et de la carte de travail, ainsi que l'intégration d'un système de paiement mobile. Ces plateformes sont décrites comme en cours de développement à cette date.",
                "Ce paysage trace la frontière du travail avec l'IA : aucun de ces portails n'est ouvert à l'assistant, et aucun identifiant ne lui est donné. Son rôle se joue en amont, à la construction du tableau des rémunérations et au contrôle des totaux, puis en aval, au classement des justificatifs. Seuls l'employeur et ses agents mandatés dialoguent avec la caisse ou le centre des impôts.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels taux, quel plafond et quels délais la CNSS fixe-t-elle, et que reste-t-il à l'assistant ?",
            'paragraphes' => [
                "La page « Cotisations sociales » de la CNSS indique que les cotisations sont assises sur l'ensemble des rémunérations, indemnités, primes, gratifications et avantages en nature compris, remboursements de frais et prestations familiales exclus, dans la limite d'un plafond de 800 000 FCFA fixé par l'arrêté n° 2022-067/MFPTPS/SG/DGPS du 30 août 2022. La même page précise qu'en aucun cas le salaire donnant lieu à cotisation ne doit être inférieur au SMIG en vigueur ni supérieur à ce plafond.",
                "Le taux d'appel de l'ensemble des branches est de 21,5 %, fixé par le décret n° 2023-0129/PRES-TRANS/PM/MFPTPS/MEFP du 24 février 2023. L'employeur supporte 16 %, répartis en 6 % pour les prestations familiales, 1,5 % pour les risques professionnels et 8,5 % pour l'assurance vieillesse. Le travailleur supporte 5,5 % au titre de l'assurance vieillesse, précomptés sur sa rémunération à chaque paie. La page ne porte pas de date de mise à jour : le service paie confirme les valeurs auprès de la caisse avant de les figer.",
                "Le rythme dépend de l'effectif. Les cotisations se paient chaque mois dans une entreprise de 20 salariés ou plus, dans les 15 premiers jours qui suivent la fin du mois concerné, et chaque trimestre en dessous de 20 salariés, dans les 30 jours qui suivent la fin du trimestre. L'employeur produit une déclaration mensuelle ou trimestrielle indiquant, pour chaque salarié, le montant total des rémunérations perçues. La caisse se réserve le droit d'un contrôle à tout moment par ses contrôleurs assermentés.",
                "Jamais la formation ne confie à l'assistant le calcul d'une cotisation réelle. Elle montre où ranger chaque taux et le plafond dans des cellules isolées du classeur, comment se faire commenter une formule par l'outil, puis comment recalculer deux lignes sans lui. Un salarié fictif payé 1 200 000 FCFA illustre la règle : l'assiette est ramenée à 800 000 FCFA, ce qui donne 44 000 FCFA pour sa part et 128 000 FCFA pour la part patronale à 16 %. Ce calcul se refait avant de faire confiance à un tableau.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment s'immatricule un salarié à la CNSS, et quel rôle donner à l'assistant dans le dossier d'embauche ?",
            'paragraphes' => [
                "Selon la page « Immatriculation travailleur » de la CNSS, l'immatriculation identifie et enregistre le travailleur et lui attribue un numéro ; sans elle, il ne peut pas bénéficier des prestations. L'obligation pèse sur l'employeur, mais le travailleur a le droit d'exiger qu'il le déclare.",
                "À l'embauche, si le salarié est déjà immatriculé, l'employeur remplit un bulletin d'entrée délivré par la caisse. Sinon, il demande une copie de la carte nationale d'identité et un extrait d'acte de naissance, ou un jugement supplétif, puis remplit un imprimé fourni par la CNSS et le transmet avec ces pièces dans le mois qui suit l'embauche. Une carte d'immatriculation parvient au travailleur par l'intermédiaire de son employeur.",
                "La liste des personnes concernées dépasse les seuls permanents : travailleurs occasionnels et temporaires, apprentis titulaires d'un contrat d'apprentissage, stagiaires titulaires d'un contrat de stage, élèves et étudiants des centres de formation professionnelle, fonctionnaires détachés et volontaires nationaux. Un service qui reçoit des stagiaires a donc intérêt à tenir un suivi de leurs pièces comme pour les autres.",
                "Dans cette séquence, l'assistant a deux usages sûrs. Il aide à construire un tableau de suivi des embauches avec une colonne par pièce attendue et la date limite du mois suivant. Il rédige aussi la liste de relance envoyée au salarié dont le dossier est incomplet. Les copies de pièces d'identité, elles, ne lui sont jamais montrées : le service manipule des modèles vides.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que disent le code du travail de 2008 et ses arrêtés sur le contrat, l'essai, le stage et les délégués du personnel ?",
            'paragraphes' => [
                "Le code du travail est la loi n° 028-2008/AN du 13 mai 2008, publiée au Journal officiel du Burkina Faso, numéro spécial 3, du 23 juin 2008. Cette page ne résume pas ses articles : pour une situation particulière, les participants sont renvoyés à la copie officielle et à l'inspection du travail.",
                "Un bulletin de droit comparé du travail et de la sécurité sociale, publié en 2010 par Paul Kiemde, de l'université Ouagadougou II, résume les textes d'application pris en décembre 2009 et en mai 2010. L'arrêté n° 2009-21/MTSS/SG/DGT/DER du 18 décembre 2009, pris en application de l'article 46 du code, fixe les modalités d'établissement et les formes du contrat de travail et de l'engagement à l'essai. D'après ce résumé, il indique les mentions obligatoires du contrat et précise le cas du travailleur déplacé hors de sa résidence habituelle.",
                "Le même bulletin rapporte que le contrat de stage figure aux articles 10 à 12 du code, avec un arrêté conjoint n° 2010-12 du 18 mai 2010, et qu'un arrêté du 18 décembre 2009 sur les délégués du personnel, pris en application de l'article 309, prévoit leur élection dans tout établissement de plus de dix travailleurs. L'arrêté conjoint n° 2010-11 du 18 mai 2010 traite, pour sa part, des frais de placement mis à la charge de certains demandeurs d'emploi par les bureaux privés.",
                "Ce résumé date de 2010 et peut avoir été dépassé par des textes plus récents. La formation en tire seulement une habitude : avant de faire rédiger un contrat, une clause d'essai ou une note sur les délégués, le participant ouvre le texte en vigueur et note le numéro de l'article. L'assistant propose une trame, le juriste ou l'inspection du travail valide la règle.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que doit retenir l'employeur chaque mois au titre de l'IUTS et de la taxe patronale, et comment un tableur aide-t-il à s'y retrouver ?",
            'paragraphes' => [
                "Dans l'édition 2023 du code général des impôts, à jour de la loi de finances 2023, l'article 112 dispose que l'impôt unique sur les traitements et salaires (IUTS) est calculé et retenu mensuellement par l'employeur pour le compte du Trésor public, selon un barème par tranches de revenu mensuel imposable. L'article 113 prévoit une réduction d'impôt pour charges de famille, de 8 % pour une charge à 14 % pour quatre. Le barème et les réductions se relisent dans le texte en vigueur, car les lois de finances peuvent les modifier.",
                "L'article 115 oblige l'employeur à consigner, pour chaque paiement imposable, la date, la nature, le montant et la retenue opérée, à conserver ces documents jusqu'à l'expiration de la troisième année suivant celle de la retenue et à remettre à chaque bénéficiaire une pièce justificative mentionnant le montant retenu. L'article 116 fixe la déclaration et le versement de la retenue d'un mois dans les dix premiers jours du mois suivant, à la caisse du receveur des impôts de rattachement, sur un formulaire conforme au modèle de l'administration. Le même article prévoit un versement semestriel quand les retenues mensuelles n'excèdent pas 5 000 FCFA, règle que le service paie confirme pour sa propre situation.",
                "La taxe patronale et d'apprentissage (TPA) est un autre prélèvement sur la masse salariale. L'article 227 la met à la charge des personnes qui paient des rémunérations et énumère des exonérations, parmi lesquelles les entreprises privées d'enseignement et de soins de santé et les associations à but non lucratif sous conditions ; l'article 229 fixe son taux à 3 % de la base imposable ; l'article 230 demande de déclarer et de verser l'impôt du mois précédent au plus tard le 10 du mois suivant.",
                "Un tableur bien construit sépare les colonnes : rémunération brute, avantages en nature, part salariale CNSS, revenu imposable, charges de famille, retenue d'IUTS, base de la TPA. L'assistant aide à nommer les colonnes, à expliquer une formule et à rédiger la note qui justifie un écart avec le mois précédent. Il n'est pas la source du barème, et c'est à la ligne de l'article 112 que le participant revient quand un doute surgit.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que prévoit la loi n° 001-2021/AN du 30 mars 2021 pour les fichiers du personnel et pour les décisions prises avec une IA ?",
            'paragraphes' => [
                "La loi n° 001-2021/AN du 30 mars 2021 protège les données à caractère personnel au Burkina Faso, et son autorité de contrôle est la Commission de l'informatique et des libertés (CIL). Un dossier de salarié, un tableau de paie et la boîte qui reçoit les candidatures contiennent des données personnelles. Le texte lu à l'Assemblée nationale comporte plusieurs articles utiles à un service du personnel.",
                "Pour la collecte, l'article 8 pose trois exigences : des finalités déterminées, des données adéquates et non excessives, et une conservation qui ne dépasse pas ce que ces finalités demandent. L'article 10 charge le responsable du traitement d'organiser la sécurité contre la perte, l'altération, la diffusion et l'accès de personnes non autorisées. L'article 12 interdit, sauf dérogation légale, de traiter sans consentement exprès les données qui révèlent entre autres les activités syndicales, la santé, la religion ou l'origine ethnique.",
                "Pour la décision, l'article 15 écarte les décisions administratives ou privées qui, impliquant une appréciation sur un comportement humain, reposeraient uniquement sur un traitement automatisé définissant le profil ou la personnalité de la personne. Selon l'article 19, chacun peut connaître et contester les informations et les raisonnements des traitements dont les résultats lui sont opposés ; si ce traitement relève de l'intelligence artificielle, les critères et la nature des données lui sont indiqués dès la collecte.",
                "L'article 31 place sous autorisation de l'autorité de contrôle plusieurs catégories, dont les aides à la décision fondées sur l'intelligence artificielle à des fins prédictives et les envois de données à l'étranger. Pour ces envois, l'article 42 exige en outre, avant le transfert, l'autorisation de l'autorité, une clause de confidentialité, une clause de réversibilité et des mesures de sécurité qui incluent le chiffrement.",
                "Ces articles sont rendus tels qu'ils figurent au texte, sans interprétation : dire si un usage précis tombe sous l'un d'eux revient à la CIL ou au conseil de l'entreprise. L'habitude retenue en séance tient en quatre gestes : pas de dossier nominatif dans un assistant en ligne, des cas inventés pour s'exercer, une personne désignée pour décider, et jamais de classement de candidats abandonné à la seule machine.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles dix tâches d'un service du personnel burkinabè peut-on déléguer en partie à l'IA, avec quel outil, et sous quel contrôle ?",
            'legende' => "Chaque ligne devient un exercice bâti sur un modèle de pièce vidé de ses données réelles. Les outils sont ceux déjà installés dans l'entreprise, ou des versions gratuites ouvertes le temps de la séance.",
            'entetes' => ['Geste', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ['Annonce de poste pour une PME de Bobo-Dioulasso', 'ChatGPT, Claude, Gemini ou Copilot', 'Annonce claire, version courte pour téléphone, grille de tri des candidatures', 'Salaire annoncé repris de la direction, aucun critère sans lien avec le poste, relecture du texte par un collègue'],
                ['Suivi des dossiers d\'embauche', 'Tableur, assistant pour les formules', 'Une ligne par salarié, une colonne par pièce, échéance du mois suivant', 'Bulletin d\'entrée ou pièces d\'identité confirmés dans le dossier papier, jamais déduits par l\'outil'],
                ['Relance d\'un candidat ou d\'un salarié au dossier incomplet', 'Assistant d\'IA, messagerie ou WhatsApp', 'Message poli avec la liste des pièces manquantes', 'Aucun nom ni numéro dans l\'assistant, envoi par la personne désignée'],
                ['Tableau des rémunérations du mois', 'Excel ou Google Sheets', 'Brut, avantages en nature, part salariale, revenu imposable, retenue, par salarié', 'Deux bulletins refaits à la main, masse salariale comparée à celle du mois précédent'],
                ['Rapprochement avant la déclaration CNSS', 'Tableur de contrôle', 'Liste des écarts d\'effectif et de montant, note de deux phrases', 'Taux, plafond et périodicité relus sur la page de la CNSS ; la déclaration reste faite sur la plateforme par la personne mandatée'],
                ['Retenue d\'IUTS et base de la TPA', 'Tableur de rapprochement', 'Total à verser, liste des salariés concernés', 'Barème relu dans le texte en vigueur, échéance du 10 du mois suivant confirmée au centre des impôts'],
                ['Note de service sur la discipline ou les horaires', 'Assistant d\'IA, traitement de texte', 'Projet de note en langage simple', 'Texte relu par la direction et, si besoin, par l\'inspection du travail ; aucune décision prise par l\'outil'],
                ['Contrat de stage et suivi du stagiaire', 'Assistant d\'IA, modèle du service', 'Trame de contrat et fiche d\'objectifs', 'Mentions vérifiées dans le texte en vigueur ; stagiaire inscrit sur la liste CNSS si le contrat de stage le justifie'],
                ['Compte rendu d\'un entretien annuel', 'Assistant d\'IA, notes anonymisées', 'Synthèse neutre, actions et échéances', 'Aucune appréciation de personnalité décidée par l\'outil (article 15) ; le manager signe'],
                ['Plan de formation du personnel', 'Tableur, assistant d\'IA', 'Tableau des besoins par poste, calendrier, budget en FCFA saisi par le service', 'Montants issus des devis reçus, jamais de l\'assistant'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel est le calendrier d'un employeur burkinabè, de l'embauche au versement du mois suivant ?",
            'legende' => "Ce calendrier rassemble des repères lus le 27 octobre 2026 sur les pages de la CNSS et dans l'édition 2023 du code général des impôts. Chaque échéance se vérifie auprès de l'organisme avant d'entrer dans le tableur.",
            'entetes' => ['Moment', 'Obligation relevée', 'Organisme', 'Appui de l\'assistant'],
            'lignes'  => [
                ['Création de l\'entreprise', 'Formulaire commun aux quatre administrations déposé au guichet du CEFORE (ou directement à la CNSS pour l\'État, les ONG, les associations et les gens de maison)', 'CNSS', 'Dresser la liste des pièces demandées'],
                ['Embauche', 'Bulletin d\'entrée, ou imprimé avec copie de la carte d\'identité et extrait d\'acte de naissance, transmis dans le mois qui suit l\'embauche', 'CNSS', 'Suivre les dossiers incomplets dans un tableau'],
                ['Chaque paie', 'Part salariale de 5,5 % précomptée dans la limite du plafond de 800 000 FCFA ; pièce justificative de la retenue d\'IUTS remise au salarié', 'CNSS ; code général des impôts, article 115', 'Contrôler que le bulletin et le tableau reprennent les mêmes lignes'],
                ['Jusqu\'au 10 du mois suivant', 'Déclaration et versement de l\'IUTS retenu ; déclaration et versement de la TPA du mois précédent', 'Code général des impôts, articles 116 et 230', 'Rappeler l\'échéance à ceux qui saisissent les variables'],
                ['15 premiers jours du mois suivant', 'Paiement des cotisations pour les employeurs de 20 salariés ou plus', 'CNSS', 'Comparer le total du tableau à la déclaration préparée'],
                ['30 jours après la fin du trimestre', 'Paiement des cotisations pour les employeurs de moins de 20 salariés', 'CNSS', 'Poser l\'échéance dans l\'agenda du service'],
                ['Chaque année', 'Conservation des documents de paie jusqu\'à l\'expiration de la troisième année suivant celle des retenues', 'Code général des impôts, article 115', 'Tenir une table des durées de conservation du service'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qui détient les accès à eCNSS et aux services fiscaux, et que doit-on ne jamais confier à l'assistant ?",
            'intro' => "Les conditions d'utilisation de la plateforme eCNSS donnent des repères concrets sur les accès. La formation les transforme en gestes de service, sans ouvrir de portail réel pendant la séance.",
            'items' => [
                ['titre' => "Un administrateur de compte par employeur", 'texte' => "Les conditions d'utilisation de la CNSS précisent que chaque employeur adhérent a un administrateur chargé de gérer le compte, soit le premier responsable de l'entreprise, soit un salarié mandaté. Le modèle de mandat se télécharge sur la plateforme. La page ne prévoit pas de remplaçant ; le service peut en désigner un de lui-même, qui connaisse la procédure."],
                ['titre' => "Un identifiant et un code qui restent personnels", 'texte' => "La plateforme utilise le numéro d'identification unique de sécurité sociale comme identifiant, un code secret personnel et une adresse électronique unique, et recommande de garder le code secret et de le changer régulièrement. Aucun de ces éléments ne se colle dans un assistant d'IA, même pour comprendre une démarche."],
                ['titre' => "Une adresse de messagerie qui ne finit pas en courrier indésirable", 'texte' => "Les mêmes conditions invitent l'utilisateur à tenir son adresse à jour et à veiller à ce que les messages de la caisse ne soient pas classés en indésirables. Le tableur de suivi du service note qui reçoit ces messages et qui les lit."],
                ['titre' => "Des schémas dessinés pour la séance", 'texte' => "Pour décrire à un nouveau collègue la suite déclaration, paiement, preuve de paiement, l'exercice passe par un schéma fait exprès. Une capture d'écran réelle, avec un nom d'entreprise ou un numéro, ne va pas dans l'outil."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain prévoir pour former un service RH à Ouagadougou, à Bobo-Dioulasso ou en province ?",
            'paragraphes' => [
                "L'heure est le premier point à régler. La base de fuseaux horaires de l'IANA classe Africa/Ouagadougou comme un lien vers Africa/Abidjan, à l'heure de Greenwich, soit UTC+0, et Africa/Porto-Novo comme un lien vers Africa/Lagos, à UTC+1. Ces fuseaux n'ont pas d'heure d'été, de sorte que l'écart d'une heure entre les deux villes vaut toute l'année : 9 h à Ouagadougou, c'est 10 h à Cotonou, d'où la séance est animée.",
                "Vient ensuite le réseau. La Banque mondiale donne 28,3 % d'utilisateurs d'internet parmi les Burkinabè en 2024, contre 25,4 % en 2023. Dans une même entreprise, le siège de Bobo-Dioulasso peut être bien connecté et une antenne l'être beaucoup moins. D'où les documents d'exercice téléchargés avant la séance, les supports écrits remis à chacun et, si la ligne tombe, la solution de repli prévue par la fiche de la formation IA en entreprise.",
                "Avant la session, un questionnaire recense pour chaque participant le poste, le navigateur, le tableur et le logiciel de paie. Séances et supports sont en français. Les exercices reprennent le classeur ou le logiciel réellement employé par le service : Richard ne suppose ni un logiciel de paie, ni une version d'Excel, ni un abonnement à un assistant.",
                "Le contexte national fait l'objet d'une feuille de route. Burkina24 a rapporté qu'un atelier de validation d'une feuille de route nationale de l'intelligence artificielle à l'horizon 2030, organisé à Ouagadougou par le ministère chargé de la transition digitale, s'est tenu le 17 juin 2026. Le texte cite parmi ses secteurs prioritaires la santé, la culture, l'éducation et l'agriculture, et mentionne l'éthique, la protection des données et la sécurité parmi les points de vigilance. Elle ne porte pas sur les ressources humaines en particulier : un service RH s'appuie sur les textes de son métier.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Atelier, deux jours ou séances courtes : quel format convient à un service du personnel burkinabè ?",
            'legende' => "Durées et effectifs reprennent la fiche IA en entreprise. Le travail se fait en visioconférence depuis Cotonou, avec une heure d'avance sur Ouagadougou.",
            'entetes' => ['Format', 'Durée', 'Effectif', 'Situation type'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Un service qui n\'a pas encore essayé d\'assistant, ou une direction qui veut regarder avant de s\'engager'],
                ['Formation complète', '2 jours en 4 demi-journées', '10 personnes au plus, un seul métier par groupe', 'Recrutement et paie déjà outillés, sans règle partagée entre collègues'],
                ['Séances à distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipe dispersée entre la capitale, Bobo-Dioulasso et les antennes, ou emploi du temps qui interdit les longues journées'],
                ['Session mutualisée', '1 à 2 jours', 'Une ou deux personnes par structure', 'Plusieurs structures d\'un même réseau ; cas inventés plutôt que dossiers internes'],
                ['Accompagnement mensuel', 'Une demi-journée par mois, trois mois de suite', 'Le groupe déjà formé', 'Ancrer les habitudes et élargir à de nouvelles tâches, comme le plan de formation'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quelles étapes une entreprise burkinabè parcourt-elle entre le premier message et le suivi qui suit la formation ?",
            'items' => [
                ['titre' => "Le premier message", 'duree' => "Réponse sous 24 heures", 'texte' => "Vous donnez l'effectif, les postes, la ville, le logiciel de paie et la taille du fichier du personnel. Un ou deux entretiens de cadrage décident de la formule et des tâches retenues."],
                ['titre' => "La préparation", 'duree' => "Questionnaire et documents", 'texte' => "Chaque participant répond à un questionnaire sur son poste et son matériel. Le service télécharge à l'avance les fichiers d'exercice : suivi des embauches, classeur de rémunérations, modèle de note de service, tous vidés de noms réels."],
                ['titre' => "Les séances", 'duree' => "Demi-journées ou séances de 2 h 30", 'texte' => "Chaque séquence démarre par une tâche du service, passe par la page de la CNSS ou l'article de loi concerné, puis se termine par le geste refait dans l'outil sur la pièce fictive."],
                ['titre' => "L'épreuve finale", 'duree' => "Dernière demi-journée", 'texte' => "Seul devant son écran et chronomètre en main, chacun traite une tâche de son poste, par exemple le contrôle d'un tableau de rémunérations inventé, et explique ce qu'il a vérifié."],
                ['titre' => "La remise", 'duree' => "Fin de session", 'texte' => "Les participants emportent les supports, les exercices corrigés et une attestation à leur nom."],
                ['titre' => "Le suivi", 'duree' => "Le mois suivant", 'texte' => "Un canal direct reste ouvert pendant un mois pour les questions d'application, avec un accompagnement mensuel possible ensuite."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quels scénarios travaille-t-on en séance avec une équipe RH burkinabè, et que doit contrôler chaque participant ?",
            'intro' => "Tous les cas ci-dessous sont inventés : sociétés, salariés et montants n'existent que dans l'exercice.",
            'items' => [
                ['titre' => "Séance 1 : l'embauche d'un chauffeur-livreur à Bobo-Dioulasso", 'texte' => "Situation : une société fictive, Houet Distribution SARL, recrute un chauffeur-livreur. Consigne : construire le tableau de suivi du dossier et le message de relance pour les pièces manquantes. Le participant vérifie la liste des pièces demandée par la CNSS (copie de la carte d'identité, extrait d'acte de naissance ou bulletin d'entrée), l'échéance du mois suivant l'embauche, et qu'aucun nom réel n'est entré dans l'assistant."],
                ['titre' => "Séance 2 : la déclaration CNSS d'une entreprise de 24 salariés", 'texte' => "Situation : un tableau fictif de 24 salariés contient deux erreurs d'heures et une rémunération de 1 200 000 FCFA. Consigne : relever les écarts par rapport à octobre et résumer le dossier en deux phrases. Le participant constate que 24 salariés imposent le paiement mensuel, relit le plafond de 800 000 FCFA sur la page de la CNSS, refait la part salariale de 5,5 % et la part patronale de 16 % de cette ligne, et laisse la déclaration à la personne mandatée sur la plateforme."],
                ['titre' => "Séance 3 : la retenue d'IUTS et la TPA du mois", 'texte' => "Situation : une société fictive de négoce affiche, pour octobre, une masse salariale de 10 000 000 FCFA et une retenue à verser. Consigne : préparer le récapitulatif et le rappel d'échéance. Le participant vérifie le 10 du mois suivant, les articles 116 et 230, la base de la TPA et son taux de 3 %, soit 300 000 FCFA sur cet exemple, puis refait le calcul à la main. Le barème de l'IUTS se relit dans le texte en vigueur."],
                ['titre' => "Séance 4 : une grille d'entretien sans décision automatique", 'texte' => "Situation : un service doit présélectionner douze candidatures fictives pour un poste de comptable. Consigne : proposer une grille de critères écrite avant la lecture des CV, puis résumer chaque candidature. Le participant contrôle que la décision revient à une personne nommée, que les critères peuvent être expliqués au candidat qui le demande, et que les articles 15 et 19 de la loi de 2021 ont été relus avec le conseil de l'entreprise."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Sur quel budget financer la formation d'un service du personnel burkinabè, et le FAFPA peut-il aider ?",
            'paragraphes' => [
                "Le 6 novembre 2019, Sidwaya rendait compte d'un atelier tenu le 30 octobre 2019 à Bobo-Dioulasso, où le Fonds d'appui à la formation professionnelle et à l'apprentissage (FAFPA) et le Conseil national du patronat burkinabè exposaient les procédures de financement de la formation continue. Le fonds s'y présente comme un moyen, pour les entreprises, d'investir dans la formation de leurs salariés grâce à la subvention d'une grande partie du coût, et l'article cite une enveloppe de 500 millions de FCFA réservée en 2019 aux plans de formation des entreprises.",
                "L'article date de 2019 et ne donne ni les critères d'éligibilité ni un taux de prise en charge. Les règles du jour se demandent au FAFPA lui-même, par écrit, devis et programme joints, en demandant si un prestataire installé hors du Burkina Faso ou travaillant seul peut être retenu. Aucune prise en charge n'est annoncée ici, et Richard SALANON n'affiche aucun agrément d'un fonds public.",
                "La démarche la plus sûre consiste à inscrire la formation au budget de l'entreprise, en FCFA, et à tenir une aide éventuelle pour un complément. Devis, programme, feuilles de présence et attestation nominative servent de toute façon au plan de formation du service.",
                "La dépense peut aussi se répartir : un atelier d'une demi-journée avec une équipe pilote, puis, si la direction est convaincue, la formation complète ou le suivi mensuel.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Quel prix prévoir pour former une équipe RH burkinabè, et de quoi dépend le devis ?",
            'intro'      => "Aucun montant n'est affiché sur cette page. Le devis se rédige en FCFA une fois le cadrage achevé ; les abonnements aux assistants restent à la charge de l'entreprise.",
            'items'      => [
                ['offre' => 'Atelier découverte pour le personnel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée en visioconférence', 'Deux tâches sur pièces inventées', 'Premières règles sur les données personnelles']],
                ['offre' => 'Formation complète recrutement et paie', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Deux jours répartis en quatre demi-journées', 'Exercices bâtis sur votre classeur de rémunérations', 'Épreuve chronométrée, attestation nominative', 'Canal direct pendant un mois']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois, trois mois de suite', 'Retour sur les cas du mois et tâches nouvelles']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes par poste.",
                "La formule choisie et le nombre de séances en visioconférence.",
                "Le temps nécessaire pour monter des exercices à partir de vos modèles.",
                "Les outils à couvrir : un tableur seul, ou aussi le logiciel de paie en service.",
                "Le suivi souhaité après la dernière séance.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs guettent un service du personnel burkinabè qui s'essaie à l'IA ?",
            'intro' => "Elles naissent de la pression des échéances : le 10 pour l'impôt, le 15 pour la caisse, un poste à pourvoir.",
            'items' => [
                ['titre' => "Fixer un taux de mémoire", 'texte' => "Un assistant répond avec assurance, quitte à citer le taux d'un autre pays ou d'une autre année. Les 21,5 % et les 800 000 FCFA se relisent sur la page de la CNSS, avec leur texte de référence."],
                ['titre' => "Oublier le seuil de 20 salariés", 'texte' => "Une entreprise qui passe de 19 à 20 salariés change de rythme de paiement, du trimestre au mois. Le tableur affiche l'effectif du mois et l'échéance correspondante."],
                ['titre' => "Mélanger l'IUTS et les cotisations", 'texte' => "Les deux retenues figurent sur le bulletin, mais l'une va au receveur des impôts et l'autre à la CNSS, avec des échéances différentes. Deux colonnes, deux totaux, deux rappels."],
                ['titre' => "Verser un dossier complet dans un compte personnel", 'texte' => "Nom, numéro de sécurité sociale et situation familiale partent vers un serveur étranger, alors qu'un tel transfert est soumis aux conditions de l'article 42 de la loi de 2021. Pour s'exercer, on prend un dossier inventé."],
                ['titre' => "Laisser le classement décider", 'texte' => "Le résumé de l'outil devient un tri, puis une liste que plus personne ne remet en cause. Or l'article 15 écarte la décision fondée sur le seul traitement automatisé d'un profil. Une grille écrite et un décideur nommé gardent la main."],
                ['titre' => "Confier eCNSS à une seule personne", 'texte' => "Le jour où l'administrateur du compte part en congé ou quitte l'entreprise, la déclaration s'arrête. Un mandat, un remplaçant et une procédure écrite préviennent le blocage."],
                ['titre' => "Se fier à un résumé ancien", 'texte' => "Un bulletin de 2010 ou un barème de 2023 renseigne sur la structure d'un texte, pas sur sa version actuelle. Le participant note la date de ce qu'il lit et vérifie auprès de l'organisme."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi se former avec Richard SALANON quand on gère les RH ou la paie au Burkina Faso ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Le Burkina Faso figure parmi les " . count((array) fait('pays_travailles')) . " pays où Richard a travaillé. Auprès d'un service du personnel burkinabè, il peut conduire en visioconférence des séances sur les assistants d'IA et les tableurs. Il n'occupe pas de poste RH : les cas pratiques viennent de vos modèles vidés de leurs données, et le droit reste l'affaire du conseil de l'entreprise.",
                "Il compte " . $ans . " ans dans le numérique et sort de " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "). Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle, et co-fonde <a href='https://audyxa.com'>Audyxa</a>. Aucun éditeur d'IA ni de logiciel de paie ne l'a certifié.",
                "Ses travaux sont décrits sur la page des <a href='/realisations/'>réalisations</a>, son parcours sur la page <a href='/richard-salanon'>Richard SALANON</a> et les pays servis sur les <a href='/zones/'>zones d'intervention</a>. Pour prolonger cette page, trois formations s'imposent, <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a>, <a href='/formations/excel-google-sheets'>Excel et Google Sheets pour la gestion</a> et <a href='/formations/ia-en-entreprise'>IA en entreprise</a>, et le fonctionnement des sessions est détaillé sur la page <a href='/services/formation-en-entreprise'>formation en entreprise</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Un service du personnel burkinabè à former à l'IA : par où commencer ?",
            'texte'  => "Écrivez l'effectif, les postes, la ville et le logiciel de paie utilisé. Vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon équipe RH'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les responsables RH à l'IA au Burkina Faso ?", 'r' => "Richard SALANON, qui travaille depuis Cotonou, peut conduire en visioconférence des séances pour des équipes RH et paie du Burkina Faso, avec un assistant d'IA essayé sur leurs modèles vidés de données réelles. Il transmet la maîtrise de l'outil, pas celle du droit social, de la paie ou de la fiscalité."],
        ['q' => "Quels taux de cotisation la CNSS du Burkina applique-t-elle ?", 'r' => "La page « Cotisations sociales » de la CNSS indique 21,5 % au total, dont 16 % à la charge de l'employeur et 5,5 % à celle du travailleur, dans la limite d'un plafond de 800 000 FCFA. Les valeurs étant révisables, confirmez-les auprès de la caisse avant de les paramétrer."],
        ['q' => "Un employeur paie-t-il ses cotisations chaque mois ou chaque trimestre ?", 'r' => "D'après la CNSS, le paiement est mensuel pour une entreprise de 20 salariés et plus, dans les 15 premiers jours qui suivent le mois concerné, et trimestriel en dessous de 20 salariés, dans les 30 jours qui suivent la fin du trimestre."],
        ['q' => "Comment immatricule-t-on un nouveau salarié à la CNSS ?", 'r' => "La CNSS demande un bulletin d'entrée si le salarié est déjà immatriculé. Sinon, il faut une copie de sa carte nationale d'identité et un extrait d'acte de naissance, avec l'imprimé de la caisse, transmis dans le mois qui suit l'embauche."],
        ['q' => "Quand verser la retenue d'IUTS et la TPA ?", 'r' => "Dans l'édition 2023 du code général des impôts, l'article 116 prévoit la déclaration et le versement de la retenue d'IUTS dans les dix premiers jours du mois suivant, et l'article 230 demande de verser la TPA du mois précédent au plus tard le 10. Confirmez l'échéance auprès de votre centre des impôts."],
        ['q' => "Un assistant d'IA peut-il se connecter à eCNSS à ma place ?", 'r' => "Non, et il ne reçoit aucun identifiant. La CNSS prévoit un administrateur de compte par employeur et un code secret personnel. L'outil prépare le tableau et vérifie les totaux ; la télédéclaration revient à la personne mandatée."],
        ['q' => "Peut-on copier des CV ou des bulletins de paie dans un assistant en ligne ?", 'r' => "Pas avec les identités. La loi n° 001-2021/AN soumet l'envoi de données vers l'étranger à l'autorisation de la CIL (article 42) et place sous autorisation les aides à la décision par IA à des fins prédictives (article 31). Les exercices emploient donc des cas inventés."],
        ['q' => "Une IA peut-elle choisir les candidats à ma place ?", 'r' => "L'article 15 de la loi de 2021 écarte les décisions privées qui, portant sur un comportement humain, ne reposeraient que sur le traitement automatisé du profil d'une personne. Pour un cas précis, interrogez la CIL ou votre conseil."],
        ['q' => "Y a-t-il un décalage horaire entre Ouagadougou et Cotonou ?", 'r' => "Une heure. Dans la base IANA, Africa/Ouagadougou est un lien vers Africa/Abidjan (UTC+0) et Africa/Porto-Novo un lien vers Africa/Lagos (UTC+1), sans heure d'été dans l'une ni l'autre."],
        ['q' => "Le FAFPA peut-il financer la formation d'un service RH ?", 'r' => "Sidwaya, en novembre 2019, présentait le FAFPA comme un fonds subventionnant une grande partie du coût de la formation continue des salariés, sans détailler les conditions. Écrivez-lui avant de compter sur une aide ; rien n'est promis ici."],
        ['q' => "Comment le prix est-il fixé pour une équipe RH burkinabè ?", 'r' => "Aucune grille n'est publiée : un devis en FCFA suit le cadrage. Il dépend du nombre de participants, de la formule, du travail de préparation sur vos modèles et des outils à couvrir."],
        ['q' => "Qu'emportent les participants à l'issue de la formation ?", 'r' => "Les supports, les exercices corrigés et une attestation nominative, qui constate une présence et une épreuve finale. Ce document n'est ni un diplôme ni un titre d'éditeur."],
    ],

    'sources' => [
        ['titre' => "CNSS du Burkina Faso, cotisations sociales (taux, plafond, périodicité, délais)", 'url' => 'https://cnssbf.org/cotisations-sociales/', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Burkina Faso, immatriculation de l'employeur", 'url' => 'https://cnssbf.org/immatriculation-de-lemployeur/', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Burkina Faso, immatriculation du travailleur", 'url' => 'https://cnssbf.org/immatriculation-travailleur/', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Burkina Faso, conditions générales d'utilisation de la plateforme eCNSS", 'url' => 'https://cnssbf.org/conditions-generales-dutilisation-de-la-plateforme-ecnss/', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Burkina Faso, plateforme eCNSS : atelier de mars 2025 sur le module accidents du travail", 'url' => 'https://cnssbf.org/plateforme-ecnss-un-atelier-pour-lajout-du-module-complementaire-accidents-du-travail-et-maladies-professionnelles/', 'date' => '2026-10-27'],
        ['titre' => "Direction générale des impôts du Burkina Faso, code général des impôts 2023 (articles 105 à 116 et 227 à 230)", 'url' => 'https://dgi.bf/wp-content/uploads/2023/10/CODE-GENERAL-DES-IMPOTS-2023-A-JOUR-AVEC-LA-LOI-DE-FINANCE-2023.pdf', 'date' => '2026-10-27'],
        ['titre' => "Direction générale des impôts du Burkina Faso, page d'accueil et services en ligne", 'url' => 'https://dgi.bf', 'date' => '2026-10-27'],
        ['titre' => "Osiris, le Burkina Faso se dote d'un portail de déclaration et de paiement des impôts (16 avril 2018)", 'url' => 'https://www.osiris.sn/le-burkina-faso-se-dote-d-un-portail-de-declaration-et-de-paiement-des-impots.html', 'date' => '2026-10-27'],
        ['titre' => "Loi n° 001-2021/AN du 30 mars 2021 portant protection des données à caractère personnel (Assemblée nationale)", 'url' => 'https://assembleenationale.bf/storage/Loi/kDsWHXOTUCQFVESChh8BlBdiZnCrdTsOpXe1rzmH.pdf', 'date' => '2026-10-27'],
        ['titre' => "Bulletin de droit comparé du travail et de la sécurité sociale 2010, chronique Burkina Faso (Comptrasec)", 'url' => 'https://comptrasec.fr/wp-content/uploads/2022/05/Burkina.pdf', 'date' => '2026-10-27'],
        ['titre' => "L'Économiste du Faso : emploi au Burkina Faso, tendances du quatrième trimestre 2024 (17 février 2025)", 'url' => 'https://leconomistedufaso.com/?p=19820', 'date' => '2026-10-27'],
        ['titre' => "Burkina24 : atelier de validation de la feuille de route nationale de l'IA (17 juin 2026)", 'url' => 'https://burkina24.com/?p=444515', 'date' => '2026-10-27'],
        ['titre' => "Sidwaya : le FAFPA sensibilise des entreprises des Hauts-Bassins (6 novembre 2019)", 'url' => 'https://www.sidwaya.info/formation-continue-et-competitivite-des-entreprises-le-fafpa-sensibilise-des-entreprises-des-hauts-bassins/', 'date' => '2026-10-27'],
        ['titre' => "Banque mondiale, individus utilisant internet au Burkina Faso (% de la population)", 'url' => 'https://data.worldbank.org/indicator/IT.NET.USER.ZS?locations=BF', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Ouagadougou, Africa/Porto-Novo)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : Afrique (Africa/Abidjan, Africa/Lagos)", 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'ia-en-entreprise', 'excel-google-sheets', 'digitalisation-processus'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
