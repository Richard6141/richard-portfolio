<?php
// ============================================================
// data/metiers/ressources-humaines/togo.php · Formation IA pour les
// responsables RH et les gestionnaires de paie au Togo.
// Statut P dans le texte : Richard peut former ce public. Pays : « Déjà
// travaillé » = oui (faits.php). Aucun projet client situé au Togo.
// Sources lues le 27/10/2026 : Journal officiel du 18 juin 2021 (loi
// n° 2021-012 portant code du travail, articles 4, 37, 39, 44, 78, 96,
// 163, 164, 166), Journal officiel du 29 octobre 2019 (loi n° 2019-014,
// articles 2, 6, 8, 15, 16, 18, 19, 21, 27, 28, 51, 52), site de la CNSS du
// Togo (pages Employeurs, immatriculation de l'employeur et du travailleur,
// cotisations sociales, AMU), manuel des services en ligne de la CNSS,
// CIO Mag (24/07/2019 et 29/03/2025), observatoire ARCEP du T1 2026,
// base IANA des fuseaux, République du Togo (FNAFPP, 30/06/2010).
// Non repris car non confirmés : SMIG (sources divergentes), barème et
// calendrier de la retenue d'impôt sur les salaires, conditions du FNAFPP.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA des équipes RH et paie au Togo : annonces, contrats, bulletins et dossiers du personnel avec un assistant, sous le code du travail de 2021, la CNSS et la loi sur les données",
    'title'   => "Formation IA pour les RH au Togo | Richard SALANON",
    'meta'    => "Formation IA pour responsables RH et gestionnaires de paie au Togo : code du travail, CNSS, loi sur les données. À distance depuis Cotonou, devis en FCFA.",
    'en_bref' => "Depuis Cotonou, Richard SALANON anime à distance des séances pour les équipes RH, le recrutement et la paie des entreprises togolaises : un assistant d'IA appliqué à leurs propres documents, chaque résultat étant vérifié dans le code du travail de 2021, auprès de la CNSS et selon la loi de 2019 sur les données personnelles. Lomé a une heure de moins que Cotonou ; le devis, en FCFA, ne porte aucun montant sur cette page.",
    'publie'  => '2026-12-15',
    'maj'     => '2026-12-15',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui forme les équipes RH et paie à l'IA au Togo, et sur quels critères choisir ?",
            'paragraphes' => [
                "Richard SALANON intervient à distance, depuis Cotonou, auprès des responsables RH, des chargés de recrutement et des gestionnaires de paie togolais, pour apprendre à se servir d'un assistant d'IA sur les modèles de leur propre service. Pour comparer les formateurs, regardez ce qu'ils font de vos pièces réelles, comment ils lisent les textes du Togo et comment ils jugent un résultat.",
                "Richard enseigne les outils sans exercer la profession, et reste étranger au droit social comme à la gestion de paie. Les règles se lisent avec les participants dans les textes togolais ; un cas limite retourne à votre conseil ou à l'administration compétente.",
                "Une démonstration d'outil fait écrire à l'assistant une belle annonce sur un exemple inventé. Une formation part de l'annonce que votre service publie, du tableau où vous relevez heures et primes, du courrier remis à un salarié sur le départ, puis reprend ces mêmes tâches avec l'assistant en insistant sur la vérification avant toute signature.",
                "Cinq questions permettent de départager les offres. Travaille-t-on sur vos modèles, les noms étant remplacés par des données inventées ? Le formateur indique-t-il le texte togolais qui gouverne chaque geste, et la limite de son intervention ? Quelle est la taille du groupe, et qui relit le travail de chacun ? Que garde l'équipe ensuite : supports modifiables, exercices corrigés ? Et la réussite se mesure-t-elle sur une tâche reprise seul, chronomètre en main, ou sur une simple enquête de satisfaction ?",
                "Un service RH tient des données qui engagent le revenu et la carrière de personnes réelles. La première règle enseignée est un tri préalable, avant toute ouverture de l'assistant : les pièces qui peuvent y entrer telles quelles, celles qu'on remplace par des données inventées, celles qui restent dans le service.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en est le numérique dans la gestion du personnel au Togo, et que changent la CNSS en ligne et le mobile ?",
            'paragraphes' => [
                "Pour un service RH togolais, le numérique passe d'abord par la Caisse nationale de sécurité sociale. Son site présente aujourd'hui, sur la page Employeurs, une plateforme de déclaration des rémunérations et des cotisations, appelée DRC, et une interface de demande d'immatriculation des travailleurs, appelée DIT, toutes deux accessibles depuis son portail de services en ligne. Ces pages étaient en ligne le 27 octobre 2026.",
                "Cette dématérialisation n'est pas récente. Selon CIO Mag, le 24 juillet 2019, la CNSS permettait déjà d'immatriculer employeurs et salariés, de télédéclarer les cotisations, de consulter le compte employeur, de demander un quitus et de déposer une réclamation en ligne, et trois banques (Orabank, UTB et Ecobank) venaient de rejoindre sa plateforme de paiement en ligne le 23 juillet 2019. Le manuel d'utilisation des services en ligne ajoute que l'employeur choisit pour payer entre le virement ou dépôt bancaire et le paiement mobile.",
                "Le terrain mobile pèse sur les outils retenus. Dans son observatoire du premier trimestre 2026, l'ARCEP compte 9 947 573 abonnements à la téléphonie mobile, soit un taux de pénétration de 113,49 %, et 5 464 688 abonnements de données mobiles à haut débit (3G ou 4G), soit 62,35 %. La fibre à domicile reste très minoritaire : 145 344 abonnements, soit 1,66 % de la population selon cette autorité. Un formulaire ou un tableau de présence doit donc se lire sur un téléphone avant de se lire sur un grand écran.",
                "La CNSS publie aussi une page sur l'Assurance maladie universelle, qui mentionne une feuille de soins électronique. Pour un service RH, la conséquence est pratique : les échanges avec l'organisme se font de plus en plus par des portails, avec des identifiants personnels. Qui les détient, qui peut déclarer, qui peut payer, voilà des questions de méthode que l'IA ne règle pas et que la formation pose dès le premier jour.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles du code du travail de 2021 encadrent le recrutement, le contrat, l'essai et la paie au Togo ?",
            'paragraphes' => [
                "Le code du travail togolais est la loi n° 2021-012 du 18 juin 2021, publiée au Journal officiel de la République togolaise. Les articles cités ci-dessous ont été lus dans ce Journal officiel. Ils servent de repères pour les exercices et ne constituent pas un avis juridique : pour un cas précis, la confirmation vient de l'inspection du travail ou de votre propre conseil.",
                "Côté recrutement, l'article 4 interdit toute discrimination directe ou indirecte en matière d'emploi et de profession, et en dresse la liste des critères : sexe, couleur, religion, ethnie, race, opinion politique ou philosophique, activités syndicales ou mutualistes, origine, mœurs, statut juridique, ascendance nationale, apparence physique, âge, situation de famille, état de grossesse ou de santé, perte d'autonomie ou handicap. Il précise que toute disposition discriminatoire figurant dans une offre d'emploi, un contrat ou un barème de salaire est nulle de plein droit. L'article 39 ajoute qu'aucune personne ne peut être écartée d'une procédure de recrutement pour ces motifs, sauf inaptitude constatée par le médecin-inspecteur du travail. Ces deux articles servent à relire chaque annonce et chaque grille d'entretien.",
                "Côté contrat, l'article 37 pose que les contrats de travail sont conclus librement et constatés dans la forme que les parties adoptent. Lorsqu'il est écrit, le contrat est rédigé dans la langue officielle du pays et exempt de droits de timbre et d'enregistrement. À défaut d'écrit, la preuve de son existence se fait par tous moyens. Il mentionne la convention collective sectorielle dont il relève ou, à défaut, la convention interprofessionnelle.",
                "Pour l'essai, l'article 44 exige que la période d'essai soit expressément stipulée par écrit au contrat et que son renouvellement éventuel soit notifié. Sous réserve de stipulations plus favorables, il fixe les durées maximales : un mois non renouvelable pour un contrat à durée déterminée, et, pour un contrat à durée indéterminée, huit jours renouvelables une fois pour les travailleurs payés à l'heure, un mois renouvelable une fois pour les ouvriers et employés, trois mois renouvelables une fois pour les agents de maîtrise et techniciens, six mois non renouvelables pour les cadres. L'essai commence le premier jour travaillé.",
                "Côté rupture, l'article 78 prévoit que, sous réserve des règles disciplinaires des conventions collectives ou du règlement intérieur, l'employeur qui envisage de licencier convoque le travailleur à un entretien par lettre recommandée, remise en main propre ou tout autre moyen vérifiable, la lettre devant parvenir au moins quarante-huit heures avant l'entretien. Selon l'article 96, l'employeur doit remettre au travailleur qui le demande, à l'issue du contrat, un certificat de travail indiquant la date d'entrée, la date de départ, la nature des emplois occupés et le temps pendant lequel ils l'ont été.",
                "Côté paie, l'article 163 dispose que le paiement du salaire est constaté par un bulletin de salaire ou tout autre support vérifiable par des tiers. L'article 164 fixe des intervalles de paiement d'au plus quinze jours pour les travailleurs engagés à la journée ou à la semaine et d'un mois pour ceux engagés au mois, le versement mensuel intervenant huit jours au plus après la clôture du mois travaillé. L'article 166 réclame un état établi ou certifié par l'employeur, signé par chaque intéressé (ou par des témoins s'il ne sait pas lire), conservée comme une pièce comptable et présentée à toute réquisition de l'inspecteur du travail, ainsi qu'un bulletin individuel remis au moment du paiement dont la forme est fixée par arrêté du ministre chargé du travail.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que demande la CNSS à un employeur togolais, et où l'IA peut-elle aider sans fixer un taux ?",
            'paragraphes' => [
                "Selon la page d'immatriculation de l'employeur, l'employeur s'immatricule à la CNSS dans les huit jours qui suivent l'embauche du premier travailleur, en adressant une demande d'immatriculation et un état de recensement dûment rempli et signé. Un numéro matricule lui est attribué, à rappeler dans toutes les correspondances. Le travailleur, lui, est immatriculé dès son engagement : l'employeur dépose l'imprimé signé par les deux parties, une copie légalisée de l'acte de naissance et une photo d'identité, et un numéro d'assurance est attribué. Si l'employeur s'en abstient, le salarié peut s'adresser directement à la CNSS.",
                "Sur sa page des cotisations, la CNSS indique que les taux sont fixés par décret et que les cotisations financent trois branches : prestations familiales, risques professionnels, pensions de vieillesse. Elle affiche un taux global de 21,5 % pour un salarié, dont 17,50 % à la charge de l'employeur et 4 % à celle du travailleur. Ces chiffres sont rappelés ici à titre de lecture du 27 octobre 2026 : la formation ne les grave pas dans le marbre : elle montre comment les relever sur le document de la caisse et les placer dans une cellule modifiable du classeur.",
                "Le recouvrement suit un rythme que le service paie doit connaître. D'après la même page, la CNSS envoie à l'employeur trois appels de cotisations mensuels (ADC) au début de chaque trimestre. L'employeur remplit l'appel du mois et le retourne avec le paiement au plus tard le 15 du mois suivant celui auquel il se rapporte. Un retard expose à des majorations, et le défaut de retour de la déclaration nominative des rémunérations dans les délais expose à des pénalités. Le manuel des services en ligne décrit cette déclaration nominative des rémunérations : elle se remplit en ligne ou se prépare dans un fichier Excel modèle, puis se charge sur le portail.",
                "Le manuel et la page Employeurs n'ont pas la même ancienneté, et la plateforme DRC y est présentée comme nouvelle. Le service paie confirme donc auprès de la CNSS quel circuit s'applique à son entreprise. Dans tous les cas, l'IA intervient avant et après : éclairer une formule, bâtir un classeur dont le détail égale le total, rédiger la note qui explique un écart. Calculer une cotisation puis transmettre à l'organisme revient à la personne désignée pour cela.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que change la loi n° 2019-014 sur les données personnelles pour un service RH togolais qui s'équipe d'une IA ?",
            'paragraphes' => [
                "Le fichier du personnel, le tableur de paie et la boîte de candidatures entrent dans le champ de la loi n° 2019-014 du 29 octobre 2019. Son article 2, lu dans le Journal officiel du même jour, vise la collecte, le traitement, la transmission et la conservation de données personnelles, quel qu'en soit l'auteur : personne physique, État ou personne morale de droit public ou privé.",
                "Pour les formalités, l'article 6 prévoit qu'en dehors des cas des articles 5, 8 et 9, les traitements font l'objet d'une déclaration auprès de l'Instance de protection des données à caractère personnel, qui délivre un récépissé sous un mois au plus, prorogeable une fois. L'article 8 soumet à autorisation, notamment, les traitements de données relatives aux infractions et condamnations, ceux qui reposent sur un numéro d'identification national et ceux qui comportent des données biométriques. CIO Mag (29 mars 2025) rapporte que l'Instance a lancé sa mission à Lomé le vendredi 28 mars 2025, avec une campagne de sensibilisation du public. Pour savoir si un traitement précis est soumis à déclaration ou à autorisation, interrogez l'Instance ou votre conseil.",
                "Sur le fond, l'article 15 impose une collecte licite, loyale et non frauduleuse. L'article 16 exige des finalités précises, des données adéquates, pertinentes et non excessives, et une durée de conservation bornée par ce que ces finalités réclament. L'article 18 pose le principe de transparence. L'article 21 écarte la collecte et le traitement des données révélant, entre autres, l'appartenance syndicale ou la santé de la personne, l'article 22 prévoyant des exceptions que le service fait lire par son conseil.",
                "Deux dispositions concernent de près un assistant en ligne. D'après l'article 27, nul ne peut faire l'objet d'une décision à effets juridiques fondée uniquement sur un traitement automatisé qui dresse son profil ou apprécie sa personnalité, le texte précisant des cas particuliers. D'après l'article 28, des données ne partent vers un pays tiers que si celui-ci offre une protection suffisante, l'Instance devant être informée au préalable et rendant un avis motivé. Les articles 51 et 52 imposent confidentialité et sécurité, y compris l'accès limité aux seules personnes autorisées.",
                "La formation ne commente pas ces articles à la place d'un juriste. Elle les parcourt avec les participants pour en dégager des réflexes : jamais de dossier nominatif dans un assistant en ligne, une personne nommée pour trancher sur un candidat ou un salarié, une liste écrite de qui ouvre quel fichier.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que confier à l'IA dans un service RH togolais, avec quel outil, et que vérifie la personne avant d'utiliser le résultat ?",
            'legende' => "Exercices bâtis sur les pièces du service, noms remplacés par des données inventées. Les outils nommés sont ceux que l'équipe possède déjà ou ouvre gratuitement pour l'exercice ; la colonne de droite dit ce que l'humain contrôle.",
            'entetes' => ['Tâche du service', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ['Annonce de poste pour une entreprise de Lomé ou de Kara', 'ChatGPT, Claude, Gemini ou Copilot', 'Annonce complète, puis version courte lisible sur téléphone', 'Aucun critère de la liste de l\'article 4 (sexe, âge, origine, religion, situation de famille, etc.) ; chaque exigence rattachée au poste ; rémunération et lieu validés par la direction'],
                ['Contrat de travail avec période d\'essai', 'Assistant d\'IA avec un traitement de texte', 'Trame de contrat claire, clauses réécrites en langage courant', 'Essai stipulé par écrit et durée dans les limites de l\'article 44 ; convention collective mentionnée (article 37) ; rédaction finale par le juriste'],
                ['Saisie des variables de paie du mois', 'Excel ou Google Sheets, l\'assistant servant à décrire les formules', 'Une ligne par salarié et un écart calculé par rapport au mois précédent', 'Deux bulletins recalculés à la main ; total comparé à celui du mois précédent'],
                ['Bulletin individuel et pièce de paiement', 'Tableur et modèle approuvé par le responsable', 'Bulletin et état de paiement tirés des mêmes lignes', 'Forme du bulletin conforme à l\'arrêté ; pièce émargée et conservée comme pièce comptable (article 166)'],
                ['Appel de cotisations et déclaration nominative des rémunérations', 'Tableur de rapprochement', 'Écarts relevés sur les effectifs, les numéros d\'assurance et les montants', 'Taux et échéances lus sur la page de la CNSS ; échéance du 15 du mois suivant vérifiée sur l\'appel reçu'],
                ['Immatriculation d\'un nouvel embauché', 'Liste de contrôle dans un tableur', 'Liste des pièces à réunir et suivi des numéros reçus', 'Acte de naissance légalisé et photo présents ; délai pour l\'employeur de huit jours suivant la première embauche'],
                ['Convocation à un entretien préalable', 'Assistant d\'IA', 'Courrier clair indiquant la date, l\'heure, le lieu et les motifs', 'Lettre parvenue au moins quarante-huit heures avant (article 78) ; preuve de remise conservée ; décision réservée à la direction'],
                ['Certificat de travail de fin de contrat', 'Assistant d\'IA et modèle du service', 'Certificat reprenant dates d\'entrée et de départ, emplois occupés et durées', 'Mentions de l\'article 96 ; dates reprises du dossier, jamais de l\'assistant'],
                ['Plan de formation du personnel', 'Feuille partagée, l\'assistant résumant les demandes des chefs de service', 'Grille croisant besoins, actions prévues et justificatifs à fournir', 'Montants comparés aux devis reçus ; aucune prise en charge promise'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles échéances jalonnent le mois d'un service RH au Togo, et lesquelles relèvent d'un texte ?",
            'legende' => "Repères lus le 27 octobre 2026 dans le code du travail de 2021 et sur le site de la CNSS. Chaque ligne cite sa source ; les cas particuliers se confirment auprès de l'organisme ou du conseil de l'entreprise.",
            'entetes' => ['Moment', 'Ce que prévoit le texte ou la page', 'Où le lire', 'Rôle possible de l\'assistant'],
            'lignes'  => [
                ['Premier travailleur embauché', 'Immatriculation de l\'employeur à la CNSS dans les huit jours suivant l\'embauche', 'Page d\'immatriculation de l\'employeur', 'Préparer la liste des pièces et le courrier de demande, sans remplir l\'état de recensement à la place du service'],
                ['Engagement de chaque salarié', 'Immatriculation du travailleur dès son engagement, avec acte de naissance légalisé et photo', 'Page d\'immatriculation du travailleur', 'Tenir un suivi des dossiers incomplets'],
                ['Premier jour travaillé', 'Début de l\'essai, stipulé par écrit au contrat', 'Code du travail, article 44', 'Calculer la date de fin à partir des durées lues dans le contrat, puis la faire vérifier'],
                ['Fin du mois de travail', 'Paiement mensuel au plus tard huit jours après la fin du mois', 'Code du travail, article 164', 'Rappeler la date aux personnes qui saisissent les variables'],
                ['Chaque paiement', 'Bulletin individuel remis au moment du paiement et pièce émargée conservée', 'Code du travail, article 166', 'Contrôler que le bulletin et la pièce reprennent les mêmes lignes'],
                ['Mois suivant', 'Appel de cotisations rempli et retourné avec le paiement au plus tard le 15', 'Page des cotisations sociales de la CNSS', 'Rapprocher le total de l\'appel de la masse salariale du tableau'],
                ['Avant un licenciement envisagé', 'Convocation à un entretien parvenue au moins 48 heures avant', 'Code du travail, article 78', 'Mettre en forme la lettre, jamais décider du motif'],
                ['Fin du contrat', 'Certificat de travail remis à la demande du travailleur', 'Code du travail, article 96', 'Préparer le projet à partir du dossier'],
            ],
        ],
        [
            'type'        => 'points',
            'titre'       => "Qui doit détenir les accès au portail de la CNSS dans une entreprise togolaise, et que fait l'IA de ces identifiants ?",
            'intro'       => "Le manuel des services en ligne de la CNSS décrit un compte employeur créé à partir du numéro employeur, avec un code envoyé par message sur le téléphone portable indiqué à l'inscription, puis une connexion par adresse électronique et mot de passe. Ces accès engagent l'entreprise : voici les gestes que la formation fait adopter.",
            'items'       => [
                ['titre' => "Un compte, un responsable nommé", 'texte' => "L'adresse et le téléphone de l'inscription appartiennent à l'entreprise, pas à une personne de passage. Le départ du titulaire d'origine se prépare avant qu'il n'arrive."],
                ['titre' => "Jamais d'identifiant dans un assistant", 'texte' => "Un mot de passe, un code reçu par SMS ou une capture d'écran du tableau de bord ne se colle dans aucun assistant en ligne, même pour demander de l'aide sur une démarche."],
                ['titre' => "Des écrans fictifs pour apprendre", 'texte' => "Pour expliquer un onglet comme la déclaration de cotisation, le paiement ou la demande de quitus social, l'exercice utilise un schéma refait à la main, jamais l'écran réel."],
                ['titre' => "Une trace de ce qui a été déclaré", 'texte' => "Le portail garde un historique des opérations, que le service complète par son propre journal : date, auteur, fichier envoyé, preuve de paiement."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles réalités locales faut-il prévoir pour former à Lomé comme dans le reste du Togo ?",
            'paragraphes' => [
                "D'après la base IANA des fuseaux horaires, Lomé suit le fuseau d'Abidjan (UTC+0) et Cotonou celui de Lagos (UTC+1) : quand il est 9 h à Lomé, il est 10 h à Cotonou, où la séance est animée. Les pièces d'exercice sont téléchargées avant la séance, un plan de secours existe si la connexion tombe, et les cas pratiques reprennent le tableur ou le logiciel de paie réellement employé.",
                "On place volontiers les séances le matin, loin des fins de mois chargées où toute l'équipe est happée par la paie, et à l'écart des jours où l'appel de cotisations de la CNSS doit partir. Les dates se choisissent avec le responsable du service dès le premier échange.",
                "Connexion et matériel varient d'un site à l'autre. Un court questionnaire préalable recense l'ordinateur, le navigateur et le tableur de chaque participant ; les fichiers d'exercice arrivent ensuite par avance sur chaque poste. Si le réseau coupe, un plan de repli existe et les supports écrits servent à rattraper le fil.",
                "Un service paie travaille avec un tableur, un logiciel d'éditeur ou un module de progiciel tel qu'Odoo ou Dolibarr, que Richard déploie par ailleurs. Aucun paramétrage togolais n'est présumé : avant d'acheter, demandez à l'éditeur ce que son outil calcule pour le Togo et ce qu'il laisse à régler soi-même.",
                "Les séances et les supports sont en français. L'article 37 du code du travail demande que le contrat écrit soit rédigé dans la langue officielle de la République togolaise. Si un message vise des salariés plus à l'aise dans une autre langue, un locuteur relit le texte de l'assistant avant diffusion. Le versement des salaires par téléphone dépend de l'entreprise, de sa banque et des opérateurs : ce circuit n'est pas enseigné ici, seulement la vérification des listes avant l'envoi.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelle formule et quelle durée retenir pour une équipe RH et paie togolaise ?",
            'legende' => "Cinq formules reprises de la fiche IA en entreprise, à combiner selon l'effectif du service. Les visioconférences sont animées depuis Cotonou, où il est une heure de plus qu'à Lomé.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Quand le choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Service sans aucune pratique des assistants, ou direction qui souhaite observer avant de trancher'],
                ['Formation complète', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Service dont le recrutement et la paie recourent déjà à des outils sans méthode commune'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Équipes dispersées entre Lomé et le reste du pays, ou agendas incompatibles avec des journées complètes'],
                ['Session mutualisée', '1 à 2 jours', 'Une ou deux personnes par structure', 'Petites entreprises ou groupements d\'employeurs ; cas pratiques sur des pièces inventées'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant 3 mois', 'Le groupe déjà formé', 'Consolider les réflexes, ajouter des tâches, rectifier ce qui ne tient pas'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "De la première prise de contact à la dernière séance, comment se passe la formation d'une entreprise togolaise ?",
            'items' => [
                ['titre' => "Votre demande", 'duree' => "Réponse sous 24 heures", 'texte' => "Écrivez en précisant le nombre de personnes, leurs postes, la ville, le logiciel de paie ou le tableur en service et l'événement qui motive la demande : une embauche en série, un écart de paie, un doute sur les CV reçus. Un ou deux échanges de cadrage arrêtent ensuite la formule."],
                ['titre' => "Avant la session", 'duree' => "Questionnaire et documents", 'texte' => "Chaque participant remplit un court questionnaire sur son poste et son équipement. Le service télécharge à l'avance les documents d'exercice, préparés à partir de ses modèles : une annonce, un contrat type, un tableau d'heures, une lettre de fin de contrat, tous débarrassés des noms réels."],
                ['titre' => "Pendant la session", 'duree' => "Demi-journées ou séances de 2 h 30", 'texte' => "Chaque séance commence par la tâche, se poursuit par la lecture de l'article togolais correspondant, puis par le geste dans l'outil. La pratique l'emporte sur l'exposé."],
                ['titre' => "L'épreuve finale", 'duree' => "Dernière demi-journée", 'texte' => "Chacun refait seul, chronomètre en main, une tâche de son poste, par exemple contrôler un tableau de paie fictif ou corriger une annonce, puis explique ce qu'il a vérifié avant de rendre."],
                ['titre' => "À la fin", 'duree' => "Fin de session", 'texte' => "Chacun repart avec les supports, les corrigés des exercices et son attestation nominative de fin de formation."],
                ['titre' => "Après la formation", 'duree' => "Le mois suivant", 'texte' => "Pour les questions d'application, un canal direct reste ouvert et ne donne lieu à aucune facture en plus. Si le service le souhaite, l'accompagnement mensuel prend ensuite le relais."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quatre séances pour un service RH togolais : quel travail, et quels contrôles pour le participant ?",
            'intro' => "Quatre séances types donnent la mesure du travail : une annonce, un contrôle de paie avant la CNSS, une fin de contrat et une convocation. Chaque séance part d'une situation fictive, donne une consigne et liste ce que le participant vérifie avant d'utiliser le résultat. Sociétés, salariés et montants sont inventés pour l'exercice.",
            'items' => [
                ['titre' => "Séance 1 : l'annonce d'un poste d'assistant de gestion", 'texte' => "Situation : une société fictive de transit à Lomé, Atlantique Transit SARL, doit publier une annonce. Consigne donnée : rédiger l'annonce à partir d'une fiche de poste de six lignes, puis proposer cinq critères d'évaluation liés aux missions. Le participant contrôle qu'aucun critère de la liste de l'article 4 n'a été introduit, par exemple l'âge, la situation de famille ou l'apparence physique, et que le salaire annoncé est celui que la direction a validé."],
                ['titre' => "Séance 2 : le contrôle de la paie avant l'appel de cotisations", 'texte' => "Situation : un tableau fictif de 35 salariés, avec trois erreurs glissées dans les heures et un numéro d'assurance en double. Consigne : demander à l'assistant de lister les incohérences avec le mois précédent, puis de rédiger une note de deux phrases pour la direction. Le participant vérifie chaque écart dans le tableau, recalcule deux bulletins à la main, contrôle que le total correspond à l'appel de cotisations reçu et laisse à la CNSS le soin de fixer taux et échéance."],
                ['titre' => "Séance 3 : une fin de contrat à préparer", 'texte' => "Situation : une salariée fictive quitte la société à la fin de son contrat ; il faut le courrier de clôture et le certificat de travail. Consigne : reformuler un courrier existant dans un ton simple, puis remplir un certificat à partir de la fiche de poste. Le participant contrôle que le certificat ne comporte que les mentions de l'article 96, que les dates viennent du dossier et non de l'assistant, et qu'aucune donnée de santé ou de syndicat ne s'y glisse (article 21 de la loi 2019-014)."],
                ['titre' => "Séance 4 : la convocation à un entretien préalable", 'texte' => "Situation : un responsable fictif doit convoquer un salarié à un entretien avant une éventuelle sanction. Consigne : rédiger une lettre neutre, avec date, heure, lieu et motifs, puis une version courte à lire à voix haute. Le participant vérifie la date de remise par rapport aux quarante-huit heures de l'article 78, garde la preuve de remise et laisse la décision à la direction, jamais à l'assistant."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment lire ensemble le code du travail et la loi sur les données dans un dossier de candidature togolais ?",
            'paragraphes' => [
                "Un dossier de candidature réunit deux séries de règles que le service RH lit souvent séparément. Le code du travail dit ce qu'on a le droit de retenir ou d'écarter : l'article 4 énumère les critères interdits, l'article 39 protège la personne contre l'éviction d'une procédure de recrutement, et l'article 5 admet les différences fondées sur une exigence professionnelle essentielle et déterminante, à condition que l'objectif soit légitime et l'exigence proportionnée.",
                "La loi de 2019 dit, elle, ce qu'on a le droit de collecter, de garder et d'envoyer ailleurs. Une photo, une situation de famille ou un état de santé figurent sur beaucoup de CV togolais ; l'article 16 invite à ne demander que les données pertinentes et non excessives, et l'article 21 interdit la collecte de celles qui révèlent la santé ou l'appartenance syndicale, sous les exceptions de l'article 22 que le conseil de l'entreprise apprécie.",
                "En séance, les deux lectures se font sur la même annonce et le même formulaire. Pour chaque champ, le participant répond à deux questions écrites : ce critère figure-t-il dans la liste de l'article 4, et cette donnée est-elle nécessaire à la finalité du recrutement ? Le champ qui échoue à l'une des deux est retiré du formulaire, puis du modèle que l'assistant reçoit.",
                "Reste le sort du dossier une fois le poste pourvu. Aucun chiffre de durée n'est tiré ici de la loi : elle parle d'une durée qui n'excède pas la période nécessaire aux finalités. Le service fixe donc lui-même, avec son conseil, la durée de chaque type de pièce, l'inscrit dans une table d'une ligne par document et la relit une fois par an.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter la formation d'un service RH au Togo ?",
            'paragraphes' => [
                "Le Fonds national d'apprentissage, de formation et de perfectionnement professionnels, le FNAFPP, a été créé par une loi adoptée par les députés, d'après un article de République du Togo daté du 30 juin 2010. Cet article indique qu'il accorde un appui financier aux institutions, organismes et entreprises qui conçoivent et mettent en œuvre des programmes d'apprentissage, et que ses ressources vont en priorité aux projets collectifs de formation.",
                "Le même article ne donne ni conditions d'éligibilité ni procédure de demande, et ces points ne sont pas confirmés ici. Si le service souhaite explorer cette piste, il interroge le fonds par écrit, programme et devis en main, et attend sa réponse avant de signer. Aucune prise en charge n'est promise, et Richard SALANON n'affiche ni agrément d'un fonds ni certification d'éditeur.",
                "Les pièces que Richard remet servent dans tous les cas : programme détaillé, devis, feuilles de présence, attestation nominative de fin de formation. Si aucun financement n'est obtenu ou demandé, la dépense s'inscrit au budget de l'année comme une ligne de formation interne. On peut l'étaler en commençant par un atelier d'une demi-journée, puis la formation complète ou l'accompagnement mensuel.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une formation IA pour un service RH au Togo ?",
            'intro'      => "Aucun tarif n'est publié ici : le prix est fixé sur devis, en FCFA, après le premier échange. Le devis détaille chaque poste ; les abonnements aux assistants restent au nom de l'entreprise. Règlement possible par Mobile Money, carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => 'Atelier découverte RH', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée à distance', 'Règles de données de base', 'Deux tâches travaillées sur des modèles fictifs']],
                ['offre' => 'Formation complète RH et paie', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Quatre demi-journées', 'Exercices sur vos modèles', 'Épreuve finale et attestation', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ['Une demi-journée par mois pendant trois mois', 'Corrections et nouvelles tâches']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par poste (recrutement, paie, administration du personnel).",
                "Le nombre de séances à distance et le format retenu.",
                "La préparation des exercices sur vos modèles et leur remplacement par des données fictives.",
                "Les logiciels à couvrir : tableur seul, ou aussi un module de paie, Odoo ou Dolibarr.",
                "L'accompagnement après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les services RH togolais qui démarrent l'IA ?",
            'intro' => "Les erreurs naissent de la pression des échéances : une paie qui doit partir, un appel de cotisations à retourner avant le 15, un poste à pourvoir pour lundi. Elles touchent les taux repris sans contrôle, les dossiers nominatifs collés dans un compte personnel, la liste courte laissée à l'outil et les durées de conservation oubliées.",
            'items' => [
                ['titre' => "Demander un taux ou une échéance à l'assistant", 'texte' => "Un assistant répond avec assurance, parfois à partir du droit d'un autre pays. Un taux de cotisation ou une date limite se lit sur la page de la CNSS et sur l'appel de cotisations reçu."],
                ['titre' => "Appliquer une durée d'essai venue d'ailleurs", 'texte' => "Les durées de l'article 44 dépendent de la catégorie et du type de contrat. Un modèle venu d'un autre pays ou d'un assistant peut en afficher d'autres : la durée se vérifie dans le texte togolais et dans la convention applicable."],
                ['titre' => "Coller un dossier nominatif dans un compte personnel", 'texte' => "Nom, téléphone, situation de santé ou de syndicat partent chez un éditeur étranger. L'article 21 de la loi 2019-014 interdit la collecte de certaines données et l'article 28 encadre le transfert vers un pays tiers. Un résumé aux données fictives rend le même service."],
                ['titre' => "Laisser l'outil faire la liste courte", 'texte' => "Le résumé devient un classement que personne ne remet en cause. L'article 27 de la loi pose qu'une décision aux effets juridiques ne se prend pas sur le seul fondement d'un traitement automatisé : un décideur nommé et une grille écrite avant la lecture évitent l'impasse."],
                ['titre' => "Mélanger fichier de travail et pièces de paie", 'texte' => "Le bulletin et la pièce de paiement émargée (article 166) se présentent à l'inspecteur du travail. Un tableau de travail modifiable ne les remplace pas ; il les alimente."],
                ['titre' => "Garder tous les CV sans durée", 'texte' => "L'article 16 limite la conservation à la période nécessaire aux finalités. Une table simple, une ligne par type de document avec sa durée, fixe la règle du service."],
                ['titre' => "Former les RH sans les managers qui recrutent", 'texte' => "Les managers rédigent les demandes de recrutement et les comptes rendus d'entretien. Une demi-journée commune permet d'aligner les pratiques sur les critères interdits de l'article 4."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi se former avec Richard SALANON quand on gère les RH ou la paie au Togo ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut former des responsables RH et des gestionnaires de paie à l'usage des assistants d'IA, des tableurs et des formulaires. Il ne pratique pas la profession et n'est ni juriste en droit social ni gestionnaire de paie ; il construit les exercices à partir de vos modèles et renvoie les questions de droit à votre conseil. Richard a déjà travaillé au Togo, comme dans quatorze autres pays.",
                "Il compte " . $ans . " ans d'expérience dans le numérique et s'est formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "). Il a créé <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fonde <a href='https://audyxa.com'>Audyxa</a>. Il n'est certifié par aucun éditeur d'IA ni de logiciel de paie et ne se présente comme partenaire d'aucun.",
                "Ses projets sont présentés sur la page des <a href='/realisations/'>réalisations</a>. Son parcours est sur la page <a href='/richard-salanon'>Richard SALANON</a> et les pays servis sur celle des <a href='/zones/'>zones d'intervention</a>. Pour aller plus loin, voir les formations <a href='/formations/ia-ethique-conformite'>IA, éthique et conformité des données</a>, <a href='/formations/excel-google-sheets'>Excel et Google Sheets pour la gestion</a> et <a href='/formations/ia-en-entreprise'>IA en entreprise</a>, ainsi que l'organisation des sessions décrite sur la page <a href='/services/formation-en-entreprise'>formation en entreprise</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre service RH ou votre équipe paie au Togo ?",
            'texte'  => "Indiquez la taille du service, les postes, les logiciels utilisés et ce qui motive la demande. Vous recevez une réponse sous 24 heures, puis une proposition et un devis détaillé en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA pour les RH'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les responsables RH à l'IA au Togo ?", 'r' => "Richard SALANON, installé à Cotonou, forme à distance les responsables RH, chargés de recrutement et gestionnaires de paie togolais à manier un assistant d'IA sur leurs propres modèles. Il ne pratique pas la profession et n'a aucune certification d'éditeur. Le devis est établi en FCFA après un échange de cadrage."],
        ['q' => "Que dit le code du travail togolais sur le bulletin de paie ?", 'r' => "Selon l'article 163 de la loi n° 2021-012, le paiement du salaire est constaté par un bulletin de salaire ou tout autre support vérifiable par des tiers. L'article 166 demande en outre une pièce émargée et un bulletin individuel remis au moment du paiement. Pour un cas précis, adressez-vous à l'inspection du travail ou à votre conseil."],
        ['q' => "La période d'essai doit-elle être écrite, et pour combien de temps ?", 'r' => "L'article 44 du code du travail exige qu'elle soit expressément stipulée par écrit. Ses durées maximales varient selon le type de contrat et la catégorie du travailleur, de huit jours à six mois pour un contrat à durée indéterminée, sous réserve de stipulations plus favorables. Un assistant peut aider à rédiger, le texte final se fait relire par un juriste."],
        ['q' => "Un assistant d'IA peut-il me donner les taux de cotisation de la CNSS ?", 'r' => "Il peut en fournir, mais ils peuvent venir du droit d'un autre pays ou d'une année passée. La formation enseigne à lire taux et échéances sur la page de la CNSS et sur l'appel de cotisations, puis à les saisir dans une cellule paramétrable. Les taux sont fixés par décret : seul l'organisme fait foi."],
        ['q' => "Un service RH peut-il confier la sélection des candidats à un assistant ?", 'r' => "L'article 27 de la loi n° 2019-014 dispose qu'aucune décision produisant des effets juridiques à l'égard d'une personne ne peut être prise sur le seul fondement d'un traitement automatisé destiné à définir son profil. La formation apprend à utiliser l'assistant pour résumer et préparer, en gardant la décision à une personne nommée."],
        ['q' => "Peut-on déposer des CV ou des bulletins dans ChatGPT, Claude ou Gemini ?", 'r' => "Pas tels quels. La loi n° 2019-014 encadre la collecte, la conservation et le transfert de données vers un pays tiers (articles 16 et 28). La formation apprend à remplacer les noms et les numéros par des données fictives. Pour un cas précis, l'Instance de protection des données ou votre conseil tranche."],
        ['q' => "Dans quel délai un employeur togolais doit-il s'immatriculer à la CNSS ?", 'r' => "Selon la page de la CNSS consultée le 27 octobre 2026, l'employeur s'immatricule dans les huit jours suivant la date d'embauche du premier travailleur. Le travailleur est immatriculé dès son engagement. Confirmez les pièces et les formulaires auprès de la CNSS."],
        ['q' => "La formation IA peut-elle être financée par le FNAFPP ?", 'r' => "Le FNAFPP a été créé par une loi de 2010 et soutient d'abord des projets collectifs de formation, d'après la presse togolaise. Ses conditions pour une formation de ce type ne sont pas confirmées : interrogez le fonds par écrit avant de budgéter. Aucune prise en charge n'est garantie."],
        ['q' => "Quel est le décalage horaire entre Lomé et Cotonou ?", 'r' => "Une heure, selon la base IANA : Lomé est à UTC+0, Cotonou à UTC+1. À 9 h à Lomé correspondent donc 10 h à Cotonou."],
        ['q' => "Combien coûte la formation, et en quelle monnaie ?", 'r' => "Le prix est fixé sur devis, en FCFA, après l'échange de cadrage. Il varie selon le nombre de participants, les séances, la préparation sur vos modèles et l'accompagnement. Les abonnements aux assistants restent au nom de l'entreprise."],
        ['q' => "Quels formats existent pour une équipe RH ?", 'r' => "Un atelier d'une demi-journée pour 12 personnes au plus, une formation de deux jours en quatre demi-journées pour 10 personnes au plus, des séances à distance de 2 h 30 pour 8 personnes au plus, et un accompagnement mensuel d'une demi-journée pendant trois mois."],
        ['q' => "Reçoit-on une attestation de fin de formation ?", 'r' => "Oui, une attestation nominative, avec le programme, les supports et les feuilles de présence. Ce n'est ni un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "Journal officiel de la République togolaise du 18 juin 2021 (loi n° 2021-012 portant code du travail)", 'url' => 'https://faolex.fao.org/docs/pdf/tog213551.pdf', 'date' => '2026-10-27'],
        ['titre' => "Journal officiel de la République togolaise du 29 octobre 2019 (loi n° 2019-014 relative à la protection des données à caractère personnel)", 'url' => 'https://www.afapdp.org/wp-content/uploads/2020/02/TOGO-JOS_29_10_2019-64E-ANNEE-N°26-TER.pdf', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Togo, espace employeurs (plateformes DRC et DIT)", 'url' => 'https://cnss.tg/employeurs/', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Togo, immatriculation de l'employeur", 'url' => 'https://cnss.tg/employeurs/immatriculation-de-lemployeur/', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Togo, immatriculation du travailleur", 'url' => 'https://cnss.tg/employeurs/immatriculation-du-travailleur/', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Togo, cotisations sociales (branches, taux, appels de cotisations)", 'url' => 'https://cnss.tg/employeurs/cotisations-sociales/', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Togo, manuel d'utilisation des services en ligne", 'url' => 'https://cnss.tg/cnss-media/2021/04/Manuel-de-procedure-des-services-en-ligne.pdf', 'date' => '2026-10-27'],
        ['titre' => "CNSS du Togo, Assurance maladie universelle", 'url' => 'https://cnss.tg/espace-assures/assurance-maladie-universelle/', 'date' => '2026-10-27'],
        ['titre' => "CIO Mag, la CNSS accélère sa dématérialisation (24 juillet 2019)", 'url' => 'https://cio-mag.com/togo-la-caisse-nationale-de-securite-sociale-accelere-sa-dematerialisation/', 'date' => '2026-10-27'],
        ['titre' => "CIO Mag, au Togo, l'IPDCP entame sa mission (29 mars 2025)", 'url' => 'https://cio-mag.com/etiquette/protection-des-donnees-personnelles', 'date' => '2026-10-27'],
        ['titre' => "ARCEP Togo, observatoire des marchés des communications électroniques, premier trimestre 2026", 'url' => 'https://arcep.tg/wp-content/uploads/2026/06/Obs-marches_T1-2026.pdf', 'date' => '2026-10-27'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Lome, Africa/Porto-Novo)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-27'],
        ['titre' => "République du Togo, miser sur la formation professionnelle (FNAFPP, 30 juin 2010)", 'url' => 'https://www.republicoftogo.com/toutes-les-rubriques/politique/miser-sur-la-formation-professionnelle', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations' => ['ia-ethique-conformite', 'ia-en-entreprise', 'excel-google-sheets', 'digitalisation-processus', 'gouvernance-ia'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
