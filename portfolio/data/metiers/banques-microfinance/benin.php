<?php
// ============================================================
// data/metiers/banques-microfinance/benin.php · Page « formation IA par métier
// et par pays » : banques et microfinance au Bénin (statut F, Déjà travaillé :
// oui). Angle propre : l'agent de banque et d'institution de microfinance (IMF)
// à Cotonou et dans le pays : loi n° 2025-14 et ANSSFD, loi n° 2024-01 et
// CENTIF, Code du numérique et APDP, mobile money interconnecté (ARCEP),
// PI-SPI, APSFD-Bénin, terrain (électricité, données mobiles, langues).
// Sources lues le 26/10/2026 : BCEAO (situation de la microfinance au
// 31/12/2025), ARCEP Bénin (SFM T2 2025, interconnexion), Financial Afrik
// (PI-SPI, 01/10/2026 et 15/04/2026), La Nouvelle Tribune, Bénin Web TV,
// Droit Médias Finance (CENTIF), CIO Mag (APDP), SGG (Code du numérique,
// décret 2022-286), MicroSave/SCBF (FECECAM), gouv.bj (SeNaMif), IANA.
// Textes cités par titre et date seulement ; aucun article de la loi 2017-20
// ni du décret 2022-286 n'est cité. Richard n'est ni banquier ni juriste.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA pour les agents de banque et de microfinance au Bénin : traiter plus vite le crédit, la relation client et les remises à l'ANSSFD, sans exposer les données des clients",
    'title'   => "Formation IA banque et microfinance Bénin | Richard SALANON",
    'meta'    => "Formation IA pour agents de banque et de microfinance au Bénin : crédit, conformité, mobile money et données, sur place ou à distance. Sur devis.",
    'en_bref' => "Richard SALANON, consultant en digitalisation basé à Cotonou, peut former les agents de banque et d'institutions de microfinance du Bénin à l'IA, sur leurs propres dossiers fictifs, dans leurs locaux ou à distance, sans décalage horaire, avec une règle claire sur les données des clients. La formation part des tâches du métier : note de crédit, relances, réclamations sur mobile money, remises à l'ANSSFD. Elle situe la loi n° 2025-14 sur la microfinance, le Code du numérique et la lutte contre le blanchiment. Le prix est fixé sur devis, en FCFA.",
    'publie'  => '2026-12-04',
    'maj'     => '2026-12-04',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui peut former les agents de banque et de microfinance à l'IA au Bénin, et comment choisir ?",
            'paragraphes' => [
                "Richard SALANON, installé à Cotonou, peut former les agents de banque et d'institution de microfinance du Bénin à l'IA, dans leurs locaux ou à distance. Il travaille sur des dossiers fictifs construits avec vos procédures, dans les comptes que l'établissement a validés, et il ne remplace ni le responsable de la conformité ni le juriste de la maison.",
                "La différence entre une démonstration d'outil et une formation se voit dès la première heure. Dans une démonstration, le formateur montre un assistant qui rédige un courrier brillant sur un cas qu'il a choisi. Dans une formation de métier, l'agent de crédit apporte sa trame de note de visite, l'agent de guichet sa liste de réclamations, l'analyste son tableau de suivi, et chacun apprend à obtenir un résultat qu'il sait contrôler avant de l'utiliser. L'outil devient secondaire ; la tâche et sa vérification passent au premier plan.",
                "Pour un établissement béninois, quatre questions aident à choisir un prestataire, Richard compris. Part-il de nos documents réels, ou d'exemples de catalogue ? Que dit-il de la confidentialité des dossiers avant le premier exercice ? Sait-il situer le cadre béninois, de la loi sur la microfinance au Code du numérique, sans prétendre l'interpréter ? Et que reçoit chaque agent en repartant ? Un prestataire qui répond précisément à ces points sait former ; celui qui vante la puissance de ses outils vend un abonnement.",
                "Une raison pratique pèse aussi : Richard vit à Cotonou, le fuseau est le vôtre, le français est la langue de travail, et il connaît des usages du terrain par ses projets : paiement par portefeuille mobile et échanges avec les clients sur WhatsApp. Il n'est ni banquier, ni conseiller en réglementation, ni certifié par un éditeur d'IA : il forme à l'usage des outils, le cadre de décision restant celui de l'établissement.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Où en sont la banque, la microfinance et le mobile money au Bénin aujourd'hui ?",
            'paragraphes' => [
                "Selon la fiche de la BCEAO sur la situation de la microfinance dans l'UMOA au 31 décembre 2025, l'encours des crédits des institutions de microfinance du Bénin a augmenté de 21,9 milliards de FCFA (8,9 %) sur le quatrième trimestre 2025, tandis que leurs dépôts ont baissé de 15,9 milliards de FCFA (7,7 %). Ce sont des variations trimestrielles, à lire avec prudence : elles rappellent que le crédit reste le cœur du travail de l'agent.",
                "Côté paiements, l'Observatoire des services financiers mobiles de l'ARCEP Bénin compte, au 30 juin 2025, 10 926 793 comptes actifs et 18 448 508 comptes dormants, soit un taux d'activité de 37,20 %. Il recense 448 706 agents distributeurs actifs et 287 036 accepteurs de paiements marchands. Au deuxième trimestre 2025, les paiements de salaires par mobile money ont atteint 941 836 opérations pour 25,67 milliards de FCFA. Pour un agent de banque ou d'IMF, cela signifie qu'une part de ses clients reçoit déjà son revenu, rembourse et épargne sur un portefeuille, et pose des questions que le guichet doit savoir traiter.",
                "Enfin, la plateforme PI-SPI de la BCEAO avance. D'après Financial Afrik, la liste publiée par la Banque centrale au 30 septembre 2026 compte 175 participants autorisés à ouvrir le service au public dans l'Union, dont 18 pour le Bénin. Le même média relevait, le 15 avril 2026, qu'aucune institution de microfinance béninoise n'était encore connectée à la plateforme à cette date. La liste évolue : l'état des lieux de votre établissement se vérifie sur la page officielle de la BCEAO.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés du Bénin retenir avant de former une équipe bancaire ou de microfinance ?",
            'items' => [
                ['valeur' => '+8,9 %', 'libelle' => "Variation de l'encours des crédits des IMF du Bénin au quatrième trimestre 2025 (21,9 milliards de FCFA), avec des dépôts en baisse de 7,7 % (15,9 milliards de FCFA) sur la même période.", 'source' => "BCEAO, situation de la microfinance dans l'UMOA au 31 décembre 2025", 'url' => 'https://www.bceao.int/sites/default/files/2026-05/Situation_de_la_microfinance_%C3%A0_fin_d%C3%A9cembre_2025.pdf'],
                ['valeur' => '37,20 %', 'libelle' => "Taux d'activité des comptes de mobile money au Bénin au 30 juin 2025, sur 10 926 793 comptes actifs et 18 448 508 comptes dormants.", 'source' => "ARCEP Bénin, observatoire des services financiers mobiles, tableau de bord au 30 juin 2025", 'url' => 'https://arcep.bj/wp-content/uploads/2025/10/Tableau-de-bord-SFM-T2_2025.pdf'],
                ['valeur' => '448 706', 'libelle' => "Agents distributeurs de monnaie mobile actifs au 30 juin 2025, à côté de 287 036 accepteurs actifs de paiements marchands.", 'source' => "ARCEP Bénin, observatoire des services financiers mobiles, tableau de bord au 30 juin 2025", 'url' => 'https://arcep.bj/wp-content/uploads/2025/10/Tableau-de-bord-SFM-T2_2025.pdf'],
                ['valeur' => '529', 'libelle' => "Déclarations d'opérations suspectes recensées par la CENTIF Bénin en 2025, contre 510 en 2024 et 443 en 2023.", 'source' => "Droit Médias Finance, rapport annuel 2025 de la CENTIF Bénin", 'url' => 'https://droitmediasfinance.com/index.php/actualites/lutte-anti-blanchiment/1354-benin-lcbft-le-centif-revele-une-mutation-des-techniques-de-blanchiment-plus-de-500-declarations-doperations-suspectes-et-7-soupcons-averes'],
                ['valeur' => '18 sur 175', 'libelle' => "Participants béninois sur la liste des participants autorisés à ouvrir PI-SPI au public dans l'UEMOA, arrêtée au 30 septembre 2026.", 'source' => "Financial Afrik, liste de la BCEAO du 30 septembre 2026", 'url' => 'https://www.financialafrik.com/2026/10/01/bceao-liste-des-175-participants-autorises-a-ouvrir-les-services-de-pi-spi-au-public-au-30-septembre-2026/'],
                ['valeur' => '50', 'libelle' => "SFD regroupés par l'APSFD-Bénin, ancien Consortium Alafia, selon un article d'août 2017 ; l'association préside la fédération des associations professionnelles de l'UEMOA.", 'source' => "La Nouvelle Tribune, 26 août 2017", 'url' => 'https://lanouvelletribune.info/2017/08/consortium-alafia-celebre-20-ans/'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles règles propres au métier encadrent l'IA dans une banque ou une IMF au Bénin ?",
            'intro' => "Quatre ensembles de textes pèsent sur le poste de travail au Bénin : la loi sur la microfinance, la loi contre le blanchiment, le Code du numérique et les instructions de la BCEAO. Cette synthèse les situe, sans les interpréter : le responsable de la conformité ou le juriste de l'établissement répond de son application.",
            'items' => [
                ['titre' => "La loi n° 2025-14 sur la microfinance et l'ANSSFD", 'texte' => "La loi n° 2025-14 a été promulguée le 2 juillet 2025, d'après La Nouvelle Tribune, et remplace le cadre antérieur du secteur. Selon cet article de presse, les systèmes financiers décentralisés deviennent des institutions de microfinance, chacune doit se doter d'un conseil d'administration, et le texte renforce les règles de gouvernance, de capital social, de transparence et de protection des clients. Bénin Web TV indique 173 articles répartis en dix titres et un délai de douze mois accordé aux IMF pour se mettre en conformité. La Nouvelle Tribune rapporte aussi que l'Agence nationale de surveillance des systèmes financiers décentralisés (ANSSFD) a tenu, le 16 juillet 2025 à Cotonou, un atelier technique avec l'association professionnelle des SFD. Ces éléments viennent de la presse et non du texte de loi, que l'établissement fait lire par son conseil."],
                ['titre' => "La remise des données sur e-Contrôle", 'texte' => "Selon Bénin Web TV, le 8 septembre 2026, l'ANSSFD a rendu obligatoire une feuille « IDENTIFIANT » dans le fichier de remise : nom de l'institution, numéro d'agrément, année, trimestre et mois. Sans elle, le fichier ne se charge pas sur la plateforme e-Contrôle. Un assistant peut aider à repérer une incohérence de format avant l'envoi ; il ne signe pas la remise, et le responsable de l'établissement répond de son exactitude."],
                ['titre' => "La loi n° 2024-01 et la CENTIF", 'texte' => "Le 12 janvier 2024, les députés ont voté à Porto-Novo la loi n° 2024-01 portant loi uniforme relative à la lutte contre le blanchiment de capitaux, en 207 articles, d'après La Nouvelle Tribune, qui rappelle aussi la loi n° 2018-17 du 25 juillet 2018 modifiée par la loi n° 2020-25 du 2 septembre 2020 ; l'établissement vérifie avec son conseil quel texte s'applique à chaque obligation. Côté chiffres, Droit Médias Finance rapporte que la CENTIF Bénin a recensé 529 déclarations d'opérations suspectes dans son rapport d'activités 2025, contre 510 en 2024 et 443 en 2023. Les obligations générales de vigilance sont déjà exposées sur la page des banques et de la microfinance."],
                ['titre' => "Le Code du numérique et l'APDP", 'texte' => "Le texte béninois à connaître est la loi n° 2017-20 du 20 avril 2018 portant Code du numérique, publiée par le Secrétariat général du gouvernement. L'Autorité de protection des données à caractère personnel (APDP) a formé des banques, des SFD et des gestionnaires de monnaie électronique début juin 2023, selon CIO Mag du 22 juin 2023. Ce que le code exige pour un assistant d'IA précis (déclaration, autorisation, décisions automatisées) se demande à l'APDP ou au juriste de l'établissement : cette page ne l'interprète pas."],
                ['titre' => "Le consentement et le responsable des données", 'texte' => "Une banque ou une IMF qui ajoute un assistant d'IA ou un robot WhatsApp ajoute un traitement de données : il se signale au responsable des données et à la conformité avant l'usage, avec sa finalité et ses destinataires. Lors de la session de l'APDP de juin 2023, le délégué à la protection des données d'une banque a expliqué, selon CIO Mag, qu'il faut désormais recueillir le consentement des clients au remplissage et à la signature des formulaires en agence."],
                ['titre' => "Les instructions de la BCEAO déjà présentées", 'texte' => "Les obligations de vigilance, d'identification à distance et de conservation des pièces issues des instructions de la BCEAO sont exposées sur la page des banques et de la microfinance en général. Pour le Bénin, retenez seulement que ces instructions s'ajoutent aux textes nationaux ci-dessus et que la formation les traite avec votre conformité, pas à sa place."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches d'une banque ou d'une IMF béninoise confier à l'IA, avec quels outils ?",
            'legende' => "Huit tâches travaillées en séance sur des dossiers fictifs. L'outil prépare un premier jet ; l'agent garde la décision, et la dernière colonne dit ce qu'il contrôle avant d'utiliser le résultat.",
            'entetes' => ['Tâche', 'Outil', 'Résultat attendu', 'Point de contrôle humain'],
            'lignes'  => [
                ["Note de visite d'une commerçante de marché demandant un microcrédit", "Assistant d'IA de l'offre professionnelle validée, tableur", "Trame de note d'analyse, questions à reposer à la cliente", "L'agent recoupe chaque chiffre avec le cahier de la cliente et écrit lui-même l'hypothèse et la recommandation ; le comité décide"],
                ["Relance d'une échéance par SMS ou WhatsApp", "Assistant d'IA, modèle de message validé par la direction", "Message court, poli, sans montant ni motif du retard", "Vérifier le numéro du titulaire, faire relire en fon ou en yoruba par un locuteur si le message est traduit"],
                ["Tri des demandes reçues sur le numéro WhatsApp de l'agence", "WhatsApp Business, assistant d'IA", "Classement par motif : horaires, pièces à apporter, suivi de demande, réclamation", "Aucune information de compte sans identification ; toute question sur une opération passe à un conseiller"],
                ["Réclamation sur un transfert envoyé vers le mauvais portefeuille", "Assistant d'IA, tableur de suivi", "Brouillon de réponse et liste des preuves à demander à l'opérateur", "Numéro de transaction, date, portefeuille de destination ; la réponse est signée par un agent"],
                ["Tableau de suivi du portefeuille par agent et par agence", "Tableur, assistant d'IA pour les formules", "Retards classés par ancienneté, échéances de la semaine", "Recalcul de deux totaux à la main et comparaison avec l'export du système central"],
                ["Contrôle du fichier de remise avant chargement sur e-Contrôle", "Tableur, assistant d'IA pour repérer les incohérences de format", "Liste des cellules à corriger, feuille « IDENTIFIANT » complète", "Le responsable valide les totaux ; le système central reste la source de vérité"],
                ["Note interne pour le responsable de la conformité à partir d'une alerte fictive", "Assistant d'IA de l'offre validée, données anonymisées", "Chronologie des opérations et incohérences de profil, sans conclusion", "L'analyste conclut ; rien n'est écrit au client ni dans un groupe de discussion"],
                ["Résumé d'un texte officiel pour un point d'équipe", "Assistant d'IA, texte copié depuis le site officiel", "Résumé court qui renvoie à l'article ou à la page source", "Chaque affirmation est retrouvée dans le texte ; le juriste valide l'interprétation"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles contraintes de terrain au Bénin, et comment la formation s'y adapte-t-elle ?",
            'paragraphes' => [
                "Les contraintes du terrain béninois sont bien documentées par les acteurs eux-mêmes. L'étude de cas de MicroSave et de la Swiss Capacity Building Facility sur FECECAM, datée de juillet 2023, relève comme défis le manque d'électricité dans certaines régions, le coût élevé des données mobiles qui limite l'usage des smartphones, l'absence de pièces d'identité chez certains demandeurs de crédit, le besoin d'employer davantage les langues locales et les besoins de confidentialité. Un agent de crédit de terrain n'est donc pas un utilisateur de bureau sur fibre : la formation se prépare pour un téléphone et une connexion mobile, pas pour un bureau équipé de fibre.",
                "Concrètement, les exercices sont conçus pour supporter l'interruption. Les documents d'exercice sont téléchargés sur chaque poste avant la session, les consignes se rédigent dans un traitement de texte puis se collent d'un coup, et plusieurs épreuves de relecture se font sans connexion. En cas de coupure, une solution de repli est prévue : une panne de dix minutes ne doit pas arrêter une demi-journée. Le questionnaire d'avant session peut aussi demander le matériel réel des participants, ordinateur ou téléphone, et la qualité de leur connexion.",
                "Le mobile money impose ses propres réflexes. Depuis janvier 2025, selon l'ARCEP, un même numéro peut être rattaché aux comptes MTN Mobile Money, Moov Money et Celtiis Cash, quel que soit le réseau de l'abonné. L'agent ne devine donc plus le portefeuille du client à partir du préfixe de son numéro : il demande lequel est concerné avant de traiter une réclamation ou de rédiger un rappel. Les graphiques de l'ARCEP attribuent à MTN Mobile Money 87,05 % de la valeur des transactions au 30 juin 2025, devant Moov Money et Celtiis Cash : les trois noms reviennent dans les réclamations, et l'agent doit les connaître.",
                "Reste la langue. Un assistant écrit un français générique ; pour un courrier d'IMF, on fournit un modèle maison et le vocabulaire de l'établissement. Un message en fon, en yoruba ou en une autre langue nationale se fait relire par un locuteur avant d'être envoyé. L'étude FECECAM rapporte la création de 168 groupes WhatsApp et 21 147 clients ayant reçu une éducation financière, et note des besoins de confidentialité de la part des clients : la formation garde ces deux points en vue pour les canaux d'agence.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats choisir pour une banque, une IMF ou un réseau d'IMF, sur place ou à distance ?",
            'legende' => "Les formats viennent de la fiche de formation IA en entreprise. Cotonou est à UTC+1 toute l'année : aucun décalage avec Richard, une heure d'avance sur Dakar, Abidjan, Bamako, Ouagadougou ou Lomé, et la même heure que Niamey ou Douala.",
            'entetes' => ['Format', 'Durée et effectif', 'Pour qui', 'Remarque pour le métier'],
            'lignes'  => [
                ["Atelier découverte", "Une demi-journée, 12 personnes au plus", "Direction, conformité, responsables d'agence", "Voir sur ses propres documents avant d'investir ; certaines institutions s'en contentent"],
                ["Formation complète sur place", "2 jours en 4 demi-journées, 10 personnes au plus par groupe", "Agents de crédit, guichet, service client, analystes", "Groupes par poste : l'agent de terrain et l'analyste n'ont pas les mêmes tâches"],
                ["Session mutualisée", "1 à 2 jours, une ou deux personnes par structure", "IMF d'un même réseau ou d'une même association professionnelle", "Dossiers fictifs uniquement : aucun dossier de client ne circule entre établissements"],
                ["À distance", "5 à 6 séances de 2 h 30, 8 personnes au plus", "Agences éloignées de Cotonou, siège et filiales dans plusieurs pays", "Documents envoyés avant chaque séance ; une heure d'écart avec Paris l'été, aucune l'hiver"],
                ["Hybride", "Une journée en salle, puis séances à distance", "Réseau d'agences", "Prise en main à Cotonou ou dans votre ville, puis pratique suivie à distance"],
                ["Accompagnement mensuel", "Une demi-journée par mois pendant trois mois", "Le groupe déjà formé", "Étendre l'usage à d'autres tâches ; un canal direct reste ouvert le mois suivant la session"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "À quoi ressemblent les scénarios de séance pour un agent de banque ou de microfinance au Bénin ?",
            'legende' => "Quatre scénarios sur dossiers entièrement fictifs. Chacun se termine par un temps de contrôle : le participant ne retient le résultat de l'outil qu'après avoir vérifié ce qui y figure.",
            'entetes' => ['Scénario', 'Situation fictive', 'Consigne donnée', 'Ce que le participant contrôle'],
            'lignes'  => [
                ["Le microcrédit de la vendeuse de pagnes", "Une commerçante fictive demande 300 000 FCFA ; l'agent a des notes manuscrites et deux photos du stock", "Transformer les notes en trame d'analyse, lister les questions manquantes", "Qu'aucun chiffre n'a été ajouté, que la capacité de remboursement est recalculée dans le tableur et que la photo ne montre aucune pièce d'identité"],
                ["Le virement vers le mauvais portefeuille", "Un client fictif a envoyé 25 000 FCFA vers un numéro rattaché à deux portefeuilles", "Classer la réclamation, rédiger la réponse en français simple et la liste des preuves à demander", "Numéro de transaction, portefeuille réellement crédité, absence de promesse de remboursement"],
                ["Les dépôts qui changent de rythme", "Un client fictif dont les dépôts passent de rares à quotidiens, sous un même montant", "Résumer les opérations en chronologie, noter les incohérences, sans conclure", "Que le résumé n'indique ni soupçon ni déclaration, et que l'analyste transmet seulement au responsable de la conformité"],
                ["Le score du fournisseur", "Un score fictif refuse une demande de prêt sans motif lisible", "Faire expliquer le score par l'assistant, puis rédiger les raisons de la décision humaine", "Qu'une personne a réellement examiné la demande et que le client reçoit une réponse motivée par l'établissement"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment financer ou budgéter la formation IA d'une banque ou d'une IMF au Bénin ?",
            'paragraphes' => [
                "Le premier financeur reste l'établissement, sur son budget de formation, et aucune prise en charge extérieure n'est acquise d'avance. Au Bénin, un fonds existe pour la formation continue et l'apprentissage : le Fonds de développement de la formation professionnelle continue et de l'apprentissage, dont les statuts ont été approuvés par le décret n° 2022-286 du 11 mai 2022. Les conditions pratiques d'une demande se confirment auprès du fonds, par écrit, avant de signer ; Richard n'affiche aucun agrément de ce fonds.",
                "Pour budgéter sans prise en charge, comptez trois lignes : la formation, chiffrée sur devis en FCFA ; les abonnements éventuels à un assistant, choisis après la session, sur ce qui a réellement servi ; et le temps des agents, qui se libère mieux en demi-journées qu'en blocs de deux jours quand l'agence ne peut pas fermer son guichet. Une IMF engagée dans la mise en conformité à la loi n° 2025-14 gagne à inscrire la formation à l'usage des outils dans le même calendrier que ses autres chantiers, plutôt qu'à la traiter à part.",
                "Les réseaux professionnels sont un autre levier de budget. L'association professionnelle des SFD (APSFD) a co-organisé la Semaine nationale de la microfinance, ouverte à Cotonou le 22 septembre 2025 devant plus de 300 participants venus d'une vingtaine de pays africains, selon le gouvernement ; une session mutualisée entre IMF d'un même réseau répartit les frais de préparation sur plusieurs structures. Le programme, la feuille de présence et l'attestation nominative remis en fin de session servent dans tous les cas pour vos dossiers internes.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une formation IA pour les agents d'une banque ou d'une IMF au Bénin ?",
            'intro'      => "Aucune somme n'est publiée : chaque proposition est chiffrée sur devis, en FCFA, après un ou deux entretiens de cadrage, et le devis détaille chaque poste. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux assistants restent au nom de l'établissement.",
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée sur dossiers fictifs construits avec vos procédures", "Premiers gestes sur deux tâches du métier", "Règles de données de base"]],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Quatre demi-journées par groupe de poste", "Épreuve finale sur la tâche cible, chronomètre en main", "Supports, exercices corrigés et attestation nominative", "Canal direct le mois suivant"]],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis, en FCFA', 'inclus' => ["Une demi-journée par mois pendant trois mois", "Nouvelles tâches et corrections"]],
            ],
            'variations' => [
                "Le nombre d'agents, de postes et de groupes.",
                "Le choix entre la salle, la distance et la formule hybride.",
                "Le temps de préparation des dossiers fictifs avec la conformité.",
                "Le lieu : vos locaux à Cotonou, une salle louée ou un déplacement hors de Cotonou.",
                "Le suivi retenu après la session.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commet une banque ou une IMF béninoise qui démarre l'IA ?",
            'intro' => "Ces erreurs viennent rarement de l'outil. Elles tiennent au périmètre flou, à la confidentialité oubliée et aux interlocuteurs qu'on n'associe pas au départ.",
            'items' => [
                ['titre' => "Deviner le portefeuille d'après le préfixe du numéro", 'texte' => "Depuis l'interconnexion de janvier 2025, un même numéro peut ouvrir un compte chez MTN, Moov ou Celtiis. Répondre à une réclamation sans demander le portefeuille concerné, c'est traiter le mauvais dossier."],
                ['titre' => "Coller une photo de pièce d'identité dans un assistant gratuit", 'texte' => "Une pièce d'identité contient des données personnelles sensibles : l'établissement fixe avec sa conformité et l'APDP ce qui peut sortir de ses systèmes. Une photo envoyée à un service en ligne depuis un téléphone personnel n'a rien d'un geste anodin."],
                ['titre' => "Laisser l'outil décider d'un refus", 'texte' => "Un refus de crédit est une décision de l'établissement, prise par une personne habilitée. Un score ou une réponse d'assistant éclaire le comité ; il ne signe pas le refus."],
                ['titre' => "Traiter l'IA hors de la mise en conformité à la loi n° 2025-14", 'texte' => "Les IMF révisent gouvernance, conseil d'administration, transparence et protection des clients. Un outil d'IA branché sur les dossiers entre dans ce chantier ; il se déclare à la direction avant d'être utilisé."],
                ['titre' => "Parler d'une alerte hors du circuit de la conformité", 'texte' => "Une alerte, une analyse ou une déclaration ne se commentent ni dans un groupe WhatsApp d'agence, ni avec le client, ni avec un assistant en ligne. L'analyste transmet au responsable désigné."],
                ['titre' => "Oublier la langue du client", 'texte' => "Un message de relance parfait en français peut rester incompris d'un emprunteur qui parle fon ou yoruba. La traduction est relue par un locuteur, et le ton reste celui de la maison."],
                ['titre' => "Croire que PI-SPI ne concerne que le service informatique", 'texte' => "Au 30 septembre 2026, 18 participants béninois figurent sur la liste de la BCEAO. Les agents expliquent l'alias et les règles à leurs clients ; la fiche d'explication se rédige avec la direction."],
                ['titre' => "Apprendre tout sur le téléphone", 'texte' => "Le téléphone convient aux petites tâches de terrain. La relecture d'un tableau de portefeuille ou d'un fichier de remise demande un écran large, et les exercices de contrôle se font sur ordinateur."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Que confirmer auprès des autorités avant de signer une formation ?",
            'texte' => "Trois points ne se décident pas en séance. Les modalités de mise en conformité à la loi n° 2025-14 se confirment auprès de l'ANSSFD, puisque les informations reprises ici viennent de la presse. Les obligations de déclaration ou d'autorisation de vos traitements se confirment auprès de l'APDP. Les conditions de prise en charge par le fonds de formation se demandent au fonds. Richard signale ce qui change la conduite d'une formation ; il ne remplace ni un juriste ni un responsable de la conformité.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos agents avec Richard SALANON au Bénin ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il a déjà travaillé avec des entreprises au Bénin, le pays où il est basé, à Cotonou. Avec " . $ans . " ans d'expérience et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux ERP. Il est le créateur de <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle, et co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Il n'est ni banquier, ni responsable de la conformité, ni certifié par un éditeur d'IA : il enseigne l'usage des outils et leurs garde-fous, pendant que l'établissement garde l'octroi des crédits, la vigilance et la lecture des textes. Aucun gain n'est promis à l'avance ; l'épreuve finale mesure, chronomètre en main, ce que chaque agent sait faire seul. Les demandes reçoivent une réponse sous 24 heures. Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et le catalogue complet sur la page des <a href=\"/formations/\">formations</a>.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels projets Richard a-t-il menés au Bénin ?",
            'legende' => "Projets de Cotonou présentés dans les réalisations, avec leur cadre. Ils illustrent son travail sur le paiement par portefeuille mobile, WhatsApp et les sites de formation ; d'autres figurent sur la page <a href=\"/realisations/\">réalisations</a>.",
            'entetes' => ['Projet', 'Secteur', 'Ce qui a été construit', 'Cadre'],
            'lignes'  => [
                ['Wapy', 'Logiciel en ligne', "Un assistant WhatsApp à intelligence artificielle qui répond aux clients des entreprises d'Afrique francophone.", 'Produit de Richard'],
                ['OBA TV', 'Médias', "Une chaîne en ligne avec direct, replays et abonnement premium payé par mobile money (MTN MoMo, Moov Money).", 'Client direct'],
                ['GC Pro Consulting', 'Formation et conseil en gestion', "Un site bilingue de plus de cent pages : catalogue de formations, inscriptions et demandes de devis en ligne.", 'Client direct'],
                ['IK Fashion House', 'Mode féminine sur mesure', "Une boutique en ligne avec commande sur mesure à distance, payée avec FedaPay.", 'Réalisé en sous-traitance pour Digital Développement'],
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former les agents de votre banque ou de votre IMF ?",
            'texte' => "Choisissez deux ou trois tâches réelles par poste, associez la conformité dès la préparation, gardez chaque décision de crédit et chaque analyse d'alerte entre des mains humaines, demandez toujours le portefeuille concerné avant de répondre sur un transfert, et ne laissez aucune pièce ni aucun dossier de client sortir vers un compte gratuit.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former les agents de votre banque ou de votre IMF au Bénin ?",
            'texte'  => "Indiquez le type d'établissement, la ville, le nombre d'agents, leurs postes et les tâches qui leur prennent le plus de temps : vous recevez une réponse sous 24 heures, puis une proposition et un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former les agents d'une IMF béninoise à l'IA ?", 'r' => "Richard SALANON, basé à Cotonou, forme les agents d'IMF et de banques sur leurs propres tâches, dans leurs locaux ou à distance, avec des dossiers fictifs construits avec vos procédures. Il enseigne l'usage des outils ; la conformité et le juriste de l'établissement gardent l'interprétation des textes."],
        ['q' => "La loi n° 2025-14 impose-t-elle une formation à l'IA ?", 'r' => "Le texte, présenté par la presse comme le nouveau cadre de la microfinance, renforce la gouvernance, la transparence et la protection des clients ; les sources lues ne parlent pas d'une obligation de formation à l'IA. Confirmez le périmètre exact auprès de l'ANSSFD ou de votre conseil."],
        ['q' => "Peut-on utiliser un assistant d'IA pour préparer la remise de données sur e-Contrôle ?", 'r' => "Pour repérer des incohérences de format dans un fichier, oui, avec des données traitées selon les règles de l'établissement. L'ANSSFD exige une feuille « IDENTIFIANT » avec le nom, le numéro d'agrément, l'année, le trimestre et le mois ; le responsable valide les totaux avant envoi."],
        ['q' => "Un agent peut-il envoyer à un assistant en ligne la photo d'une pièce d'identité ?", 'r' => "Non, pas sans accord écrit de la direction et de la conformité. La formation apprend à travailler sur des copies fictives ou anonymisées ; les règles applicables aux données se confirment auprès de l'APDP."],
        ['q' => "Un score de crédit peut-il décider d'un refus au Bénin ?", 'r' => "La formation enseigne qu'un score éclaire la décision sans la prendre : le comité examine la demande et motive sa réponse. Confirmez le cadre applicable à votre cas auprès de l'APDP ou de votre juriste."],
        ['q' => "Que change l'interconnexion du mobile money pour le guichet ?", 'r' => "Depuis janvier 2025, un même numéro peut être rattaché aux comptes MTN Mobile Money, Moov Money et Celtiis Cash. L'agent demande donc le portefeuille concerné avant de traiter une réclamation ou de rédiger un rappel."],
        ['q' => "La formation fonctionne-t-elle avec peu d'électricité ou des données mobiles coûteuses ?", 'r' => "Oui, si elle est préparée : documents téléchargés avant la session, consignes rédigées hors ligne, exercices de relecture sans connexion et solution de repli en cas de coupure. L'étude MicroSave sur FECECAM cite ces contraintes parmi les principaux défis."],
        ['q' => "Où se tiennent les formations et à quelle heure ?", 'r' => "À Cotonou ou dans votre ville selon le devis, ou à distance. Le Bénin est à UTC+1 toute l'année, comme Richard : aucun décalage au Bénin, une heure d'avance sur Dakar ou Abidjan, la même heure que Paris l'hiver."],
        ['q' => "La formation remplace-t-elle la formation obligatoire de la conformité ?", 'r' => "Non. Elle traite l'usage des outils numériques par les agents. La formation réglementaire à la lutte contre le blanchiment relève du responsable de la conformité de l'établissement."],
        ['q' => "Combien coûte la formation ?", 'r' => "Elle est chiffrée sur devis, en FCFA, selon le nombre d'agents, de groupes, le format et le suivi retenus. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "BCEAO, situation de la microfinance dans l'UMOA au 31 décembre 2025", 'url' => 'https://www.bceao.int/sites/default/files/2026-05/Situation_de_la_microfinance_%C3%A0_fin_d%C3%A9cembre_2025.pdf', 'date' => '2026-10-26'],
        ['titre' => "ARCEP Bénin, observatoire des services financiers mobiles, tableau de bord au 30 juin 2025", 'url' => 'https://arcep.bj/wp-content/uploads/2025/10/Tableau-de-bord-SFM-T2_2025.pdf', 'date' => '2026-10-26'],
        ['titre' => "ARCEP Bénin, interconnexion des plateformes de mobile money aux réseaux des opérateurs mobiles", 'url' => 'https://arcep.bj/interconnexion-des-plateformes-mobile-money-aux-reseaux-des-operateurs-mobiles/', 'date' => '2026-10-26'],
        ['titre' => "Financial Afrik, BCEAO : liste des 175 participants autorisés à ouvrir PI-SPI au public au 30 septembre 2026", 'url' => 'https://www.financialafrik.com/2026/10/01/bceao-liste-des-175-participants-autorises-a-ouvrir-les-services-de-pi-spi-au-public-au-30-septembre-2026/', 'date' => '2026-10-26'],
        ['titre' => "Financial Afrik, PI-SPI dans l'UEMOA : pourquoi les SFD restent à quai (15 avril 2026)", 'url' => 'https://www.financialafrik.com/2026/04/15/pi-spi-uemoa-pourquoi-les-sfd-restent-a-quai/', 'date' => '2026-10-26'],
        ['titre' => "La Nouvelle Tribune, Microfinance au Bénin : les institutions à l'école de la réforme (loi n° 2025-14)", 'url' => 'https://lanouvelletribune.info/2025/07/microfinance-au-benin-les-institutions-a-lecole-de-la-reforme/', 'date' => '2026-10-26'],
        ['titre' => "Bénin Web TV, les députés adoptent un nouveau cadre légal pour le secteur de la microfinance", 'url' => 'https://beninwebtv.bj/benin-les-deputes-adoptent-un-nouveau-cadre-legal-pour-le-secteur-de-la-microfinance/', 'date' => '2026-10-26'],
        ['titre' => "Bénin Web TV, une nouvelle feuille d'identification devient obligatoire sur e-Contrôle (8 septembre 2026)", 'url' => 'https://beninwebtv.bj/microfinance-au-benin-une-nouvelle-feuille-didentification-devient-obligatoire-sur-e-controle/', 'date' => '2026-10-26'],
        ['titre' => "Droit Médias Finance, rapport annuel 2025 de la CENTIF Bénin", 'url' => 'https://droitmediasfinance.com/index.php/actualites/lutte-anti-blanchiment/1354-benin-lcbft-le-centif-revele-une-mutation-des-techniques-de-blanchiment-plus-de-500-declarations-doperations-suspectes-et-7-soupcons-averes', 'date' => '2026-10-26'],
        ['titre' => "La Nouvelle Tribune, loi n° 2024-01 portant loi uniforme relative à la lutte contre le blanchiment de capitaux (18 janvier 2024)", 'url' => 'https://lanouvelletribune.info/2024/01/terrorisme-les-deputes-dotent-le-benin-dun-cadre-legislatif-approprie/', 'date' => '2026-10-26'],
        ['titre' => "Secrétariat général du gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant Code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/download', 'date' => '2026-10-26'],
        ['titre' => "CIO Mag, les acteurs du secteur financier formés sur la protection des données personnelles (22 juin 2023)", 'url' => 'https://cio-mag.com/benin-les-acteurs-du-secteur-financier-formes-sur-la-protection-des-donnees-personnelles', 'date' => '2026-10-26'],
        ['titre' => "La Nouvelle Tribune, le Consortium Alafia (APSFD-Bénin) célèbre 20 ans d'existence (26 août 2017)", 'url' => 'https://lanouvelletribune.info/2017/08/consortium-alafia-celebre-20-ans/', 'date' => '2026-10-26'],
        ['titre' => "MicroSave et Swiss Capacity Building Facility, étude de cas FECECAM (juillet 2023)", 'url' => 'https://www.microsave.net/fr/wp-content/uploads/2024/04/20240129-Case_study_Benin_FR.pdf', 'date' => '2026-10-26'],
        ['titre' => "Gouvernement du Bénin, Semaine nationale de la microfinance à Cotonou (22 septembre 2025)", 'url' => 'https://www.gouv.bj/article/3271/semaine-nationale-microfinance-cotonou-benin-coeur-reflexions-africaines-inclusion-financiere/', 'date' => '2026-10-26'],
        ['titre' => "Secrétariat général du gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/download', 'date' => '2026-10-26'],
        ['titre' => "IANA, base des fuseaux horaires : Afrique et liens de zones", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations' => ['ia-en-entreprise', 'ia-ethique-conformite', 'chatbot-whatsapp', 'gouvernance-ia', 'cybersecurite-employes'],
        'services'   => ['formation-en-entreprise', 'integration-ia-entreprise'],
    ],
];
