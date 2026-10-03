<?php
// ============================================================
// data/histoires/tsb-migration.php · Histoire externe (non cliente) :
// la migration informatique ratée de la banque britannique TSB (avril 2018),
// le rapport Slaughter and May (19 novembre 2019) et les sanctions de la FCA
// et de la PRA (20 décembre 2022, 13 avril 2023). Faits relevés le 03/10/2026
// dans les avis de sanction, le rapport indépendant et les sources listées.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'TSB : la banque qui a basculé tous ses clients en un seul week-end',
    'title'   => 'TSB 2018 : leçons d\'une migration informatique ratée',
    'meta'    => 'En avril 2018, TSB a migré 5 millions de clients en un week-end, sans retour arrière possible. Faits sourcés, coûts publiés et leçons pour une PME.',
    'en_bref' => 'Le week-end du 20 au 22 avril 2018, la banque britannique TSB a transféré ses clients de la plateforme informatique de Lloyds vers Proteo4UK, construite par une filiale de sa maison mère espagnole Sabadell, sans possibilité de revenir en arrière. Les données ont été migrées, mais la nouvelle plateforme n\'a pas tenu : la banque n\'est revenue à un fonctionnement normal que le 10 décembre 2018, a reçu 225 492 réclamations, a publié 330,2 millions de livres de coûts liés à la migration pour 2018, puis a été sanctionnée de 48,65 millions de livres par la FCA et la PRA le 20 décembre 2022. La leçon pour une PME : migrer par étapes, tester en conditions réelles et garder un chemin de retour.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',

    'relation' => 'externe',
    'client'   => 'TSB',

    'faits_hero' => [
        ['l' => 'Secteur', 'v' => 'Banque de détail au Royaume-Uni'],
        ['l' => 'Période', 'v' => 'Mars 2015 à avril 2023'],
        ['l' => 'Issue', 'v' => 'Échec'],
        ['l' => 'Leçon', 'v' => 'Migrer par étapes, prévoir le retour'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui était TSB avant la migration, et pourquoi devait-elle changer de système ?',
            'paragraphes' => [
                'TSB est une banque de détail britannique issue d\'une séparation d\'avec Lloyds Banking Group. Selon l\'<a href="https://www.fca.org.uk/publication/final-notices/tsb-bank-plc-2022.pdf">avis de sanction de la FCA du 20 décembre 2022</a>, elle est née de cette cession en juin 2014 et comptait environ 5,2 millions de clients entre fin 2015 et fin 2018 : comptes courants, épargne, crédits immobiliers, cartes, assurance et banque des entreprises, servis en agence, par téléphone, sur internet et dans une application mobile. Le rapport indépendant de Slaughter and May date son introduction à la Bourse de Londres du 25 juin 2014.',
                'Après la séparation, TSB ne possédait pas son propre cœur informatique. Elle continuait d\'utiliser la plateforme de Lloyds dans le cadre d\'un contrat d\'externalisation qui pouvait durer jusqu\'en juillet 2024, d\'après le même avis de la FCA. Deux sorties étaient prévues : copier la plateforme de Lloyds et la confier à un autre prestataire (le « carve-out »), ou migrer vers un tout autre système. Le <a href="https://www.tsb.co.uk/content/dam/tsb-public/documents/media-centre/Slaughter-and-May-final-report.pdf">rapport Slaughter and May publié le 19 novembre 2019</a> ajoute deux raisons de partir : Lloyds était désormais un concurrent, et le prix du service de base payé à Lloyds devait fortement augmenter à partir de 2017.',
                'En mars 2015, la banque espagnole Sabadell lance une offre de rachat, déclarée inconditionnelle le 30 juin 2015 ; Sabadell annonce avoir finalisé l\'acquisition le 21 août 2015, selon la chronologie du rapport Slaughter and May. Sabadell avait déjà intégré plusieurs banques rachetées sur sa propre plateforme, Proteo. Son document d\'offre, cité par la FCA, estimait les économies informatiques à environ 160 millions de livres par an avant impôt, la troisième année pleine après l\'opération, grâce à la migration complète des services fournis par Lloyds vers Proteo.',
                'La migration n\'était donc pas un simple projet technique : elle faisait partie de la justification financière du rachat. La FCA souligne qu\'il ne s\'agissait pas de transférer des données vers un système existant et éprouvé, mais de construire une nouvelle version de Proteo adaptée au marché britannique, baptisée Proteo4UK, avec de nouveaux centres de données et un grand nombre de fournisseurs externes. La PRA, régulateur prudentiel rattaché à la Banque d\'Angleterre, écrit dans son propre avis du 20 décembre 2022 que TSB était la première grande banque britannique à entreprendre une migration de cette ampleur.',
            ],
        ],
        [
            'type'  => 'frise',
            'titre' => 'Comment la migration s\'est-elle déroulée, de 2015 à 2023 ?',
            'items' => [
                ['date' => '20 mars 2015', 'titre' => 'TSB accepte l\'offre de Sabadell', 'texte' => 'L\'acheteur prévoit dès l\'offre une migration complète vers sa plateforme Proteo, avec un objectif fixé à fin 2017 sans connaissance détaillée des besoins de TSB, selon le rapport Slaughter and May.'],
                ['date' => '1er juillet 2015', 'titre' => 'Une date de bascule fixée d\'avance', 'texte' => 'Le lendemain de l\'offre devenue inconditionnelle, Sabadell a déjà retenu le dimanche 5 novembre 2017 comme date de mise en service, relève le rapport indépendant.'],
                ['date' => 'Décembre 2015', 'titre' => 'TSB s\'engage sur Proteo4UK', 'texte' => 'La banque décide de migrer vers une version de Proteo construite pour elle, tout en conservant l\'option de copie de la plateforme de Lloyds, d\'après l\'avis de la PRA.'],
                ['date' => '15 mars 2016', 'titre' => 'Le plan directeur reprend la date de 2017', 'texte' => 'Le plan intégré présenté au conseil d\'administration garde le 5 novembre 2017, un calendrier que Slaughter and May juge « ambitieux et irréaliste ».'],
                ['date' => 'Mars 2017 à avril 2018', 'titre' => 'Des bascules partielles', 'texte' => 'L\'application mobile, les systèmes de paiement interbancaire, les distributeurs et la vente de crédits immobiliers passent par étapes sur la nouvelle plateforme. Le rapport Slaughter and May note que ces fonctions ne représentaient qu\'une petite partie du système.'],
                ['date' => '20 septembre 2017', 'titre' => 'Le conseil demande un nouveau plan', 'texte' => 'TSB reconnaît qu\'elle ne sera pas prête en novembre 2017 : retards du second centre de données, qualité des données, recette utilisateurs inachevée, énumère la FCA.'],
                ['date' => '29 septembre 2017', 'titre' => 'Le report annoncé avant d\'être planifié', 'texte' => 'Neuf jours après avoir décidé de replanifier, et avant d\'avoir fini, TSB annonce publiquement une bascule au premier trimestre 2018.'],
                ['date' => '24 octobre 2017', 'titre' => 'Le « Defender Plan » est approuvé', 'texte' => 'Le nouveau plan est validé ; dès janvier 2018, le programme s\'en écarte nettement, selon Slaughter and May.'],
                ['date' => '18 et 19 avril 2018', 'titre' => 'Feu vert à la bascule', 'texte' => 'Le conseil se réunit une dernière fois le 18 avril ; huit domaines de fonctions jugées indispensables restent alors à tester ou à contourner. Le lendemain, un sous-comité autorise la bascule du week-end.'],
                ['date' => '20 au 22 avril 2018', 'titre' => 'La bascule unique', 'texte' => 'L\'essentiel des systèmes, des services et des données clients passe sur Proteo4UK. La mise en service a lieu le dimanche 22 avril au soir.'],
                ['date' => '4 septembre 2018', 'titre' => 'Le directeur général quitte ses fonctions', 'texte' => 'Paul Pester quitte la direction générale ; le président non exécutif, Richard Meddings, devient président exécutif avec effet immédiat.'],
                ['date' => '10 décembre 2018', 'titre' => 'Retour au fonctionnement normal', 'texte' => 'Près de huit mois après la bascule, TSB retrouve une activité normale, d\'après la FCA.'],
                ['date' => '19 novembre 2019', 'titre' => 'Publication du rapport indépendant', 'texte' => 'Le conseil de TSB publie le rapport commandé à Slaughter and May le 30 avril 2018.'],
                ['date' => '20 décembre 2022', 'titre' => 'Amende de 48,65 millions de livres', 'texte' => 'La FCA (29,75 millions) et la PRA (18,9 millions) sanctionnent TSB pour des défaillances de gestion des risques opérationnels et de l\'externalisation.'],
                ['date' => '13 avril 2023', 'titre' => 'L\'ancien directeur informatique sanctionné', 'texte' => 'La PRA inflige 81 620 livres d\'amende à Carlos Abarca pour manquement à une règle de conduite des cadres dirigeants.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que s\'est-il passé le week-end du 22 avril 2018 et dans les semaines suivantes ?',
            'paragraphes' => [
                'La bascule est autorisée le dimanche 22 avril 2018 vers 13 heures. Le téléphone et la banque en ligne sont ouverts à 18 heures, l\'application mobile à 18 h 45, raconte la FCA. Les problèmes apparaissent aussitôt : connexions refusées, paiements qui échouent, service intermittent. Une quarantaine de clients signalent ensuite qu\'ils voient les comptes d\'autres personnes, souvent des proches ; à 19 heures, la banque en ligne est entièrement coupée pour chercher la cause. L\'enquête montre que des clients liés, par exemple titulaires d\'une procuration, voyaient en ligne les données des deux comptes. La FCA chiffre ce cas à 440 clients.',
                'Le lundi 23 avril, les canaux numériques rouvrent à 2 heures du matin, mais une partie de la plateforme consomme une quantité anormale de mémoire. Sur environ 900 000 tentatives de connexion ce jour-là, seules 10 % des connexions à la banque en ligne aboutissent ; dans l\'application, le taux passe d\'environ 65 % à 80 % au fil de la journée. Selon la FCA, 48 % des paiements tentés dans l\'application et 59 % de ceux tentés sur internet échouent ce lundi. Les canaux numériques sont de nouveau coupés le mardi 24 avril à 10 heures pour une heure prévue ; ils ne rouvrent que le mercredi à 3 heures du matin.',
                'L\'échec du numérique déclenche un effet de cascade. Le 23 avril, 69 000 appels arrivent avant 14 heures. Le centre d\'appels avait été renforcé pour absorber 50 % d\'appels en plus, mais une erreur de configuration des serveurs vocaux ne laisse disponible qu\'environ 25 % de la capacité téléphonique prévue. L\'attente atteint environ 90 minutes et 70 % des appelants raccrochent. En agence, l\'application de guichet plante, les lecteurs de cartes à puce, les lecteurs de chèques et les imprimantes ne répondent plus ; les files s\'allongent, car les clients privés d\'internet et de téléphone se déplacent.',
                'La FCA décrit des canaux numériques « instables et presque inutilisables » jusqu\'au jeudi 26 avril. Des défauts persistent la deuxième semaine, l\'accès à l\'application se dégrade de nouveau fin mai, et certains problèmes durent jusqu\'en juin 2018. Pendant la première semaine, 20 à 30 % des particuliers et des entreprises ne peuvent faire aucun paiement en ligne, et environ 60 000 clients voient des crédits ou des débits enregistrés en retard. Le rapport Slaughter and May ajoute que les tentatives de fraude opportunistes augmentent à partir du 30 avril et culminent le 15 mai 2018 à environ 70 fois leur niveau habituel.',
                'Un point mérite d\'être souligné : selon la FCA, la migration des données elle-même a réussi. Les enregistrements clients sont arrivés sur la nouvelle plateforme comme prévu. C\'est la plateforme, son infrastructure et l\'organisation chargée de l\'exploiter qui n\'étaient pas prêtes à servir l\'ensemble des clients en même temps. Pour un dirigeant de PME, la distinction compte : « nos données sont passées » ne veut pas dire « notre activité fonctionne ».',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Pourquoi la plateforme a-t-elle cédé dès le premier jour ?',
            'intro' => 'La FCA résume les causes directes en trois mots : configuration, capacité et code. Le rapport Slaughter and May conclut que la nouvelle plateforme n\'était pas prête à porter toute la clientèle et que le prestataire n\'était pas prêt à l\'exploiter. Derrière ces constats, six décisions pèsent lourd.',
            'items' => [
                ['titre' => 'Une seule grande bascule, sans débat sur les risques', 'texte' => 'Sabadell avait l\'habitude de migrer en un seul week-end, et TSB a repris cette méthode dans son plan de mars 2016. Slaughter and May relève que ce choix n\'a pas été réellement discuté par le conseil d\'administration et qu\'aucun avis extérieur n\'a été demandé sur ce point. Le rapport précise qu\'une bascule unique n\'était pas forcément une erreur, à condition de mettre en place les bonnes protections.'],
                ['titre' => 'Aucun retour arrière possible', 'texte' => 'Une fois la migration notifiée à Lloyds, TSB renonçait à l\'option de copie de la plateforme et ne pouvait plus l\'utiliser durablement. La FCA écrit qu\'après la bascule, revenir en arrière était techniquement presque impossible. Dès décembre 2015, le procès-verbal du conseil notait le risque de se retrouver sans infrastructure informatique.'],
                ['titre' => 'Une date fixée avant le plan', 'texte' => 'La date de novembre 2017 avait été choisie avant de connaître le travail à faire ; TSB l\'a elle-même qualifiée de « délibérément très ambitieuse » en septembre 2017. Le nouveau plan a été construit pour tenir une échéance déjà annoncée au public, plutôt qu\'à partir du travail restant.'],
                ['titre' => 'Des tests de charge réduits et des cibles abaissées', 'texte' => 'Fin février 2018, une décision prise hors des instances prévues réduit les tests de charge des canaux numériques sur les deux centres de données fonctionnant ensemble. La FCA estime que ces tests auraient probablement révélé le défaut de configuration en cause. Slaughter and May ajoute que des cibles de charge ont été abaissées après des échecs, sans que le résumé des résultats le signale.'],
                ['titre' => 'Un prestataire de la même famille, peu contrôlé', 'texte' => 'La plateforme était construite et exploitée par SABIS, filiale informatique de Sabadell, qui s\'appuyait elle-même sur 85 sous-traitants. La FCA reproche à TSB de ne pas avoir vérifié de façon formelle et complète, au départ, la capacité de SABIS à livrer et à exploiter la plateforme. Slaughter and May note qu\'avant la bascule, TSB n\'a reçu qu\'une lettre du directeur de SABIS au Royaume-Uni, et non une attestation formelle appuyée sur des preuves.'],
                ['titre' => 'Un plan de crise prévu pour 48 heures', 'texte' => 'Les guides de gestion d\'incident ne couvraient que les 48 premières heures, et les exercices de crise supposaient des incidents réglés en quelques jours, alors que beaucoup ont duré des semaines. La communication aux clients, le renfort du traitement des réclamations et la protection des clients vulnérables avaient été insuffisamment préparés, selon la FCA.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel défaut technique précis a bloqué la banque en ligne ?',
            'paragraphes' => [
                'La nouvelle plateforme tournait sur deux centres de données censés fonctionner ensemble, chacun capable de prendre le relais de l\'autre. La FCA explique qu\'après la bascule, la session d\'un client ouverte dans un centre pouvait voir sa transaction suivante envoyée vers l\'autre, où cette session n\'existait pas. Les demandes adressées au composant d\'authentification passaient par un répartiteur de charge global au lieu du répartiteur local, et ce composant avait été configuré par erreur en grappe partagée entre les deux sites. Résultat : des messages « session expirée », des connexions perdues et des paiements interrompus.',
                'TSB a déclaré, dans son communiqué du 19 novembre 2019, que des éléments des deux centres de données avaient été configurés de manière incohérente alors qu\'ils devaient être identiques. Le rapport Slaughter and May fait le lien avec les tests : la décision de mener les tests de performance sur un seul centre de données rendait impossible la détection de ces écarts avant la mise en service. La FCA précise que TSB n\'avait pas vérifié elle-même la configuration saisie par les sous-traitants, jugeant la tâche trop lourde, et qu\'elle s\'était fiée à des assurances et à une revue externe menée par sondage.',
                'Le défaut n\'est pas exotique. Une erreur de configuration entre deux serveurs, une session qui ne suit pas l\'utilisateur, un répartiteur de charge mal réglé : ces problèmes existent aussi sur un site marchand hébergé sur deux machines ou sur un ERP placé derrière un équilibreur de charge. Ils se voient rarement dans un test fonctionnel, où l\'on vérifie qu\'un écran affiche le bon montant, et presque toujours dans un test de charge réaliste, qui reproduit le nombre d\'utilisateurs simultanés du premier lundi.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qui est établi, et qu\'est-ce qui reste discuté ?',
            'texte' => 'Établi par les avis de la FCA et de la PRA du 20 décembre 2022, issus d\'un règlement amiable : la date de bascule, le retour à la normale le 10 décembre 2018, les 225 492 réclamations, les indemnités versées et les manquements reprochés. Moins solide : le chiffre de 1,9 million de clients « bloqués » correspond aux utilisateurs actifs de la banque en ligne cités par Which? le 1er mai 2018, pas à un décompte de clients privés d\'accès. Aucun coût total officiel n\'existe. Le partage des responsabilités entre TSB, Sabadell et SABIS reste discuté : TSB a comptabilisé un recouvrement provisoire de 153 millions de livres auprès de SABIS, mais les sanctions visent TSB et son ancien directeur informatique.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Combien la migration a-t-elle coûté à TSB et à ses clients ?',
            'items' => [
                ['valeur' => '225 492', 'libelle' => 'Réclamations reçues entre le 22 avril 2018 et le 7 avril 2019, soit environ 4,3 % de la clientèle', 'source' => 'FCA, avis de sanction du 20 décembre 2022', 'url' => 'https://www.fca.org.uk/publication/final-notices/tsb-bank-plc-2022.pdf'],
                ['valeur' => '32,7 M£', 'libelle' => 'Indemnités versées aux clients sur la même période', 'source' => 'FCA, communiqué du 20 décembre 2022', 'url' => 'https://www.fca.org.uk/news/press-releases/tsb-fined-48m-operational-resilience-failings'],
                ['valeur' => '330,2 M£', 'libelle' => 'Coûts liés à la migration comptabilisés pour 2018 (indemnisation, fraude, renforts, revenus abandonnés)', 'source' => 'TSB, résultats annuels publiés le 1er février 2019', 'url' => 'https://www.tsb.co.uk/news-releases/tsb-announces-2018-full-year-results/'],
                ['valeur' => '105,4 M£', 'libelle' => 'Perte avant impôt en 2018, après un bénéfice de 162,7 M£ en 2017', 'source' => 'TSB, résultats annuels publiés le 1er février 2019', 'url' => 'https://www.tsb.co.uk/news-releases/tsb-announces-2018-full-year-results/'],
                ['valeur' => '48,65 M£', 'libelle' => 'Amendes cumulées de la FCA (29,75 M£) et de la PRA (18,9 M£), le 20 décembre 2022', 'source' => 'Banque d\'Angleterre, communiqué du 20 décembre 2022', 'url' => 'https://www.bankofengland.co.uk/news/2022/december/tsb-fined-for-operational-resilience-failings'],
                ['valeur' => '232 jours', 'libelle' => 'Du 22 avril au 10 décembre 2018, avant le retour à un fonctionnement normal', 'source' => 'FCA, avis de sanction du 20 décembre 2022', 'url' => 'https://www.fca.org.uk/publication/final-notices/tsb-bank-plc-2022.pdf'],
                ['valeur' => '70 fois', 'libelle' => 'Niveau des tentatives de fraude au pic du 15 mai 2018, par rapport à la normale', 'source' => 'Slaughter and May, rapport du 19 novembre 2019', 'url' => 'https://www.tsb.co.uk/content/dam/tsb-public/documents/media-centre/Slaughter-and-May-final-report.pdf'],
                ['valeur' => '81 620 £', 'libelle' => 'Amende infligée à l\'ancien directeur informatique le 13 avril 2023', 'source' => 'Banque d\'Angleterre, communiqué du 13 avril 2023', 'url' => 'https://www.bankofengland.co.uk/news/2023/april/pra-fines-former-cio-of-tsb-bank-plc-for-breach-of-pra-senior-manager-conduct-rules'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que recouvrent exactement ces montants ?',
            'paragraphes' => [
                'Dans ses résultats annuels publiés le 1er février 2019, TSB détaille les 330,2 millions de livres de coûts liés à la migration : 125,2 millions pour l\'indemnisation des clients, la correction des comptes et les équipes affectées à ce travail, 49,1 millions de pertes liées à la fraude et aux incidents d\'exploitation, 122,4 millions de renforts et de conseils pour corriger les systèmes, et 33,5 millions de revenus abandonnés, surtout des frais auxquels la banque a renoncé. TSB y annonce aussi un recouvrement provisoire de 153 millions de livres auprès de SABIS, son prestataire informatique.',
                'Les réclamations ont dépassé toutes les prévisions. Le jeudi 26 avril 2018, quatre jours après la bascule, TSB avait enregistré 10 315 réclamations au lieu des 1 146 attendues, soit un écart de 900 %, d\'après la FCA. Le 2 mai, le total atteignait 33 101, plus de dix fois le niveau habituel, selon Slaughter and May. La banque a mis près de douze mois à traiter les réclamations liées à la migration. L\'indemnité la plus fréquente a été de 150 livres (49 910 cas) ; 22 clients classés dans la catégorie « extrême » ont reçu plus de 2 100 livres chacun.',
                'Le coût commercial apparaît dans les mêmes résultats : environ 80 000 clients sont partis en 2018, contre 50 000 l\'année précédente, selon The Register, même si TSB indique environ 140 000 ouvertures ou transferts de comptes vers elle sur l\'année. Le coût pour la direction est visible aussi : début juin 2018, la commission des finances de la Chambre des communes déclarait avoir perdu confiance dans le directeur général, Paul Pester, rapporte Mortgage Solutions le 8 juin 2018. Il a quitté son poste le 4 septembre 2018.',
                'Aucune source officielle ne publie un coût total unique. En additionnant les 330,2 millions de livres de 2018 et les 48,65 millions d\'amendes de 2022, on obtient 378,85 millions de livres de montants publiés, une addition faite pour cette page qui ne retranche pas les 153 millions recouvrés auprès de SABIS et n\'inclut ni les frais des années suivantes, ni l\'effet sur la marque. Les 32,7 millions d\'indemnités cités par la FCA ne doivent pas être ajoutés à cette somme : ils relèvent de la même catégorie de dépenses que la ligne de 125,2 millions de TSB, mesurée sur une autre période (jusqu\'au 7 avril 2019) et sans les frais d\'équipes.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Qu\'est-ce qui aurait évité la crise, décision par décision ?',
            'options'  => ['Ce que TSB a fait', 'Ce que les rapports désignent comme la bonne pratique'],
            'criteres' => [
                ['critere' => 'Date de bascule', 'valeurs' => ['Fixée par l\'acheteur en 2015, puis replanifiée vers une échéance déjà annoncée au public', 'Fixer la date à partir du travail restant, une fois la replanification terminée, et l\'annoncer ensuite']],
                ['critere' => 'Méthode', 'valeurs' => ['Une bascule principale en un week-end, quelques fonctions migrées avant', 'Comparer formellement bascule unique et migration par étapes, risques à l\'appui, devant le conseil']],
                ['critere' => 'Retour arrière', 'valeurs' => ['Impossible après la bascule : l\'ancienne plateforme ne pouvait plus être utilisée durablement', 'Garder un chemin de retour ou, à défaut, un plan de crise dimensionné pour des semaines de perturbation']],
                ['critere' => 'Tests de charge', 'valeurs' => ['Menés sur un seul centre de données, en fin de course, avec des cibles abaissées', 'Tester la configuration réelle de production, aux volumes réels, et signaler toute cible modifiée']],
                ['critere' => 'Bascules pilotes', 'valeurs' => ['Des fonctions limitées, un pilote à trop petite échelle', 'Un pilote assez large pour révéler les problèmes qui apparaîtront avec toute la clientèle']],
                ['critere' => 'Prestataire', 'valeurs' => ['Filiale de la maison mère, sans évaluation formelle de sa capacité ni attestation étayée', 'Le traiter comme un fournisseur extérieur et critique : audit, preuves de préparation, droits d\'audit exercés']],
                ['critere' => 'Défauts ouverts', 'valeurs' => ['Le conseil voit « environ 800 défauts », le nombre réel est au moins deux fois et demie plus élevé', 'Un tableau de défauts exact et partagé, avec des seuils de blocage décidés avant la bascule']],
                ['critere' => 'Plan de crise', 'valeurs' => ['Guides pour 48 heures, exercices supposant une résolution en quelques jours', 'Exercices sur un scénario de plusieurs incidents simultanés pendant des semaines, renforts de service client prêts']],
                ['critere' => 'Regard extérieur', 'valeurs' => ['Pas de conseil indépendant sur l\'ensemble du programme', 'Un conseiller indépendant de la direction et du fournisseur, avec un mandat clair']],
            ],
            'verdict'  => 'Aucun de ces points n\'exigeait une technologie différente : la plupart relevaient du calendrier, de la preuve demandée au prestataire et du droit de dire « pas encore ».',
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Quelle leçon retenir en une phrase ?',
            'texte' => 'Une migration réussit quand on peut prouver, avant la bascule, que le nouveau système tient la charge réelle et qu\'on sait revenir en arrière ou tenir des semaines en mode dégradé ; une date annoncée n\'est jamais une preuve.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi une PME de Cotonou ou de Lyon est-elle concernée par l\'échec d\'une banque britannique ?',
            'paragraphes' => [
                'Une PME ne migre pas cinq millions de clients, mais elle migre régulièrement quelque chose dont elle dépend : un site vitrine qui change d\'hébergeur, une boutique en ligne qui passe d\'une solution à une autre, une comptabilité tenue sur tableur qui part vers Odoo ou Dolibarr, une base clients déplacée vers un nouveau serveur. Dans chacun de ces cas, il existe un moment de bascule après lequel les clients, les vendeurs ou le comptable travaillent sur le nouveau système, et une question simple : que se passe-t-il le lundi matin si cela ne marche pas ?',
                'Les mécanismes décrits par la FCA se retrouvent à petite échelle. Une date fixée par un événement extérieur, comme une fin d\'abonnement, un salon ou le début de l\'exercice fiscal, plutôt que par l\'état réel du projet. Un prestataire proche, un parent ou un ami développeur, qu\'on n\'ose pas contrôler comme un fournisseur. Des tests faits avec trois utilisateurs alors que trente se connecteront ensemble. Un ancien système résilié trop tôt, qui supprime toute possibilité de retour. Et une équipe qui n\'a prévu personne pour répondre au téléphone quand les clients ne trouvent plus leur commande.',
                'La différence d\'échelle joue dans les deux sens. Une PME a moins d\'utilisateurs, donc des tests réalistes coûtent beaucoup moins cher qu\'à TSB. Mais elle a aussi moins de réserves : une semaine sans facturation, sans site marchand ou sans accès au stock peut peser plus lourd, en proportion, que les mois de crise d\'une banque adossée à un grand groupe. Les montants de cette histoire ne se transposent pas ; la logique des décisions, si.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels signaux d\'alerte doivent faire reporter une bascule ?',
            'intro' => 'Chacun de ces signaux figure, sous une forme ou une autre, dans les rapports sur TSB. Pris isolément, aucun n\'est fatal ; deux ou trois ensemble justifient de repousser la date.',
            'items' => [
                ['titre' => 'La date existait avant le plan', 'texte' => 'Si personne ne peut expliquer comment la date a été calculée à partir des tâches restantes, c\'est qu\'elle ne l\'a pas été. À TSB, la date de novembre 2017 précédait toute connaissance détaillée des besoins.'],
                ['titre' => 'Les tests se compriment', 'texte' => 'Quand la recette fonctionnelle déborde sur la période prévue pour les tests de charge, ces derniers sont faits en hâte ou réduits. C\'est exactement ce que décrit Slaughter and May pour le premier trimestre 2018.'],
                ['titre' => 'Les objectifs de test changent en silence', 'texte' => 'Une cible de charge abaissée après un échec, un périmètre de test réduit sans décision écrite : chaque changement doit être tracé et expliqué à celui qui décide de la bascule.'],
                ['titre' => 'Le prestataire répond par des promesses', 'texte' => 'Une lettre qui annonce que « tout sera prêt » n\'est pas une preuve. Demandez des résultats de tests, des captures, une démonstration sur les vraies données et une liste des points ouverts.'],
                ['titre' => 'Des fonctions sont repoussées « après la bascule »', 'texte' => 'TSB a tenu sa date en reportant des fonctions et en ajoutant des procédures manuelles. Quand la liste des reports s\'allonge, la date est tenue, mais pas le projet.'],
                ['titre' => 'L\'ancien système sera coupé le jour même', 'texte' => 'Si l\'abonnement de l\'ancien logiciel, l\'ancien hébergement ou l\'ancien serveur disparaît à la bascule, il n\'existe plus de retour arrière. Gardez-le, au moins en lecture, plusieurs semaines.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Agir avant la bascule ou réparer après : qu\'est-ce que cela change ?',
            'legende' => 'Comparaison qualitative pour une migration de site, d\'ERP ou de base de données dans une PME. Les coûts dépendent de chaque projet : aucun montant n\'est avancé ici.',
            'entetes' => ['Décision', 'Si elle est prise avant la bascule', 'Si elle est prise après un incident'],
            'lignes'  => [
                ['Reporter la date', 'Quelques jours ou semaines de prestataire et de double abonnement', 'Clients perdus, ventes bloquées, image abîmée, travail en urgence facturé plus cher'],
                ['Tester à la charge réelle', 'Une journée de tests avec le nombre réel d\'utilisateurs ou un outil qui les simule', 'Diagnostic en production, sous la pression des appels et des réclamations'],
                ['Garder l\'ancien système', 'Un abonnement ou un hébergement prolongé quelques semaines', 'Données à reconstituer à la main, parfois impossibles à récupérer'],
                ['Contrôler le prestataire', 'Une revue des preuves de préparation et des accès à votre nom', 'Dépendance totale à un prestataire débordé, sans visibilité sur sa charge'],
                ['Préparer la communication', 'Un message prêt, une personne désignée, une page d\'information', 'Messages improvisés, contradictoires, et clients qui se tournent vers les réseaux sociaux'],
                ['Prévoir les gestes commerciaux', 'Une règle de compensation décidée à froid', 'Des gestes accordés au cas par cas, plus coûteux et perçus comme inéquitables'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble une migration à risque dans une PME ?',
            'items' => [
                ['secteur' => 'Commerce en ligne, Abidjan', 'probleme' => 'Une boutique change de plateforme la veille d\'une grosse opération promotionnelle, avec un paiement mobile money reconfiguré le jour même.', 'solution' => 'Basculer après la période forte, tester des paiements réels en petite quantité, garder l\'ancienne boutique en sommeil et prévoir une page d\'attente si le paiement échoue.'],
                ['secteur' => 'Distribution, Cotonou', 'probleme' => 'Le stock et la facturation passent d\'un tableur à un ERP le 1er janvier, sans période de fonctionnement en parallèle.', 'solution' => 'Importer et contrôler les stocks à une date de clôture, faire tourner les deux outils en parallèle quelques semaines sur un périmètre réduit, puis élargir agence par agence.'],
                ['secteur' => 'Cabinet de services, Dakar', 'probleme' => 'La base clients et les dossiers partent vers un nouveau serveur géré par un prestataire unique, sans sauvegarde testée.', 'solution' => 'Restaurer une sauvegarde complète sur un serveur de test avant la bascule, vérifier les droits d\'accès de chaque profil, conserver l\'ancien serveur en lecture seule.'],
                ['secteur' => 'Établissement scolaire, Lomé', 'probleme' => 'Le nouveau portail des parents ouvre le jour de la rentrée, quand tous les comptes se connectent en même temps.', 'solution' => 'Ouvrir par classes ou par niveaux sur plusieurs jours, mesurer la tenue du serveur, et garder un canal de secours (SMS, WhatsApp) pour les informations urgentes.'],
                ['secteur' => 'Industrie légère, Douala', 'probleme' => 'La migration de l\'ERP est confiée à la filiale informatique du groupe, qu\'on ne contrôle pas comme un fournisseur.', 'solution' => 'Écrire les critères de bascule, exiger les résultats de tests et la liste des défauts ouverts, et faire signer l\'attestation de préparation par un responsable identifié.'],
                ['secteur' => 'Site vitrine, Lyon', 'probleme' => 'Une refonte change toutes les adresses des pages et l\'hébergeur en même temps, sans plan de redirections.', 'solution' => 'Dresser la liste des anciennes adresses, préparer les redirections, garder l\'ancien site accessible le temps de vérifier l\'indexation et les formulaires.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Comment éviter la même erreur, point par point ?',
            'items' => [
                'Fixer la date de bascule à partir du travail restant, puis seulement l\'annoncer aux clients et aux équipes.',
                'Écrire les critères de bascule avant de commencer : tests passés, défauts bloquants à zéro, charge réelle tenue, sauvegarde restaurée.',
                'Préférer une migration par étapes (par site, par agence, par module ou par groupe de clients) quand c\'est possible, et justifier par écrit le choix d\'une bascule unique.',
                'Tester sur une copie des vraies données, avec la configuration réelle de production, y compris les deux serveurs s\'il y en a deux.',
                'Mesurer la tenue du système avec le nombre réel d\'utilisateurs simultanés du premier jour, et noter toute cible de test modifiée.',
                'Restaurer au moins une fois une sauvegarde complète avant la bascule, pour savoir combien de temps cela prend.',
                'Garder l\'ancien système accessible, au moins en lecture, plusieurs semaines après la bascule, et ne pas résilier son abonnement le jour même.',
                'Décider à l\'avance qui peut déclencher le retour arrière, dans quel délai et selon quels signaux.',
                'Demander au prestataire des preuves de préparation (résultats de tests, liste des défauts ouverts), pas une lettre d\'intention, même s\'il fait partie du groupe.',
                'Garder à votre nom les accès administrateur, le code, les sauvegardes et la documentation de la configuration.',
                'Prévoir un plan de crise pour plusieurs semaines : renfort pour répondre aux clients, messages préparés, procédure manuelle de secours.',
                'Faire relire le plan et les résultats de tests par une personne indépendante du prestataire avant la décision finale.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Richard SALANON accompagne-t-il une migration de site, d\'ERP ou de base de données ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'TSB n\'a jamais été son client : cette page raconte une histoire publique pour en tirer une méthode. Sur une <a href="/services/refonte-migration-de-site">refonte ou une migration de site</a>, Richard commence par l\'inventaire de l\'existant (pages, adresses, formulaires, paiements, comptes, sauvegardes), écrit avec vous les critères qui autorisent la bascule et prépare le chemin de retour avant de toucher au site en production. L\'ancien site reste disponible tant que les redirections, les formulaires et les paiements n\'ont pas été vérifiés sur le nouveau.',
                'Pour un logiciel de gestion, la démarche est la même avec un enjeu de plus : la comptabilité et le stock doivent être justes à la date de bascule. Les pages <a href="/services/integration-odoo">intégration Odoo</a> et <a href="/services/integration-dolibarr">intégration Dolibarr</a> décrivent le déroulé : reprise des données sur une copie, contrôles par échantillon avec les personnes qui connaissent les chiffres, démarrage par module ou par site quand c\'est possible, formation avant la mise en service. Le <a href="/comparatifs/odoo-vs-dolibarr">comparatif Odoo et Dolibarr</a> aide à choisir l\'outil avant de planifier la migration.',
                'Après la bascule, la <a href="/services/maintenance-support">maintenance et le support</a> prennent le relais : surveillance des premiers jours, correction des défauts, sauvegardes vérifiées, mises à jour planifiées. Les accès administrateur, le code et la documentation restent à votre nom, pour que vous ne dépendiez pas d\'un seul prestataire, y compris de lui. Vous obtenez une réponse sous 24 heures, et un avis franc si la date que vous visez paraît trop serrée. Le parcours de Richard est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, et d\'autres récits publics sont réunis dans les <a href="/histoires/">histoires</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous préparez une migration et voulez un regard extérieur avant de basculer ?',
            'texte'  => 'Décrivez ce qui doit changer (site, ERP, base de données, hébergement), la date envisagée et ce qui ne doit surtout pas s\'arrêter : vous recevez un diagnostic des risques, une proposition de découpage par étapes et un plan de retour arrière.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un diagnostic de migration'],
        ],
    ],

    'faq' => [
        ['q' => 'Que s\'est-il passé chez TSB en avril 2018 ?', 'r' => 'Le week-end du 20 au 22 avril 2018, TSB a transféré l\'essentiel de ses systèmes et de ses données clients de la plateforme de Lloyds Banking Group vers Proteo4UK, une plateforme construite par SABIS, filiale de sa maison mère Sabadell. Les données ont été migrées, mais la banque en ligne, l\'application, le téléphone et les agences ont connu de graves pannes pendant des semaines.'],
        ['q' => 'Combien de clients ont été touchés ?', 'r' => 'TSB comptait environ 5,2 millions de clients selon la FCA. Le chiffre de 1,9 million souvent cité correspond aux utilisateurs actifs de la banque en ligne et de l\'application, d\'après Which? le 1er mai 2018. La FCA relève notamment 225 492 réclamations, environ 4,3 % de la clientèle, entre le 22 avril 2018 et le 7 avril 2019.'],
        ['q' => 'Combien de temps la crise a-t-elle duré ?', 'r' => 'Les canaux numériques sont restés instables jusqu\'au 26 avril 2018, des défauts ont persisté jusqu\'en juin, et la FCA indique que TSB n\'est revenue à un fonctionnement normal que le 10 décembre 2018, soit 232 jours après la bascule. La banque a mis près de douze mois à traiter les réclamations.'],
        ['q' => 'Quelle a été la cause technique principale ?', 'r' => 'La FCA cite des problèmes de configuration, de capacité et de code. Le plus visible concernait les deux centres de données : les sessions des clients passaient de l\'un à l\'autre, à cause d\'un répartiteur de charge mal configuré et d\'un composant d\'authentification réglé par erreur pour les deux sites. Les tests de performance, menés sur un seul centre, ne pouvaient pas le révéler.'],
        ['q' => 'Que dit le rapport Slaughter and May ?', 'r' => 'Publié le 19 novembre 2019, le rapport conclut que la nouvelle plateforme n\'était pas prête à servir toute la clientèle et que SABIS n\'était pas prêt à l\'exploiter. Il critique un calendrier ambitieux et irréaliste, une bascule unique insuffisamment débattue, des tests de charge défaillants et un conseil d\'administration qui n\'a pas assez interrogé la direction.'],
        ['q' => 'Quelles sanctions ont été prononcées ?', 'r' => 'Le 20 décembre 2022, la FCA a infligé 29,75 millions de livres et la PRA 18,9 millions, soit 48,65 millions au total, après une réduction de 30 % pour règlement amiable. Le 13 avril 2023, la PRA a infligé 81 620 livres à l\'ancien directeur informatique, Carlos Abarca, pour la supervision insuffisante du prestataire.'],
        ['q' => 'Combien la migration a-t-elle coûté au total ?', 'r' => 'Aucun chiffre officiel unique n\'existe. TSB a comptabilisé 330,2 millions de livres de coûts liés à la migration pour 2018, en partie compensés par un recouvrement provisoire de 153 millions auprès de SABIS, et a déclaré une perte avant impôt de 105,4 millions. Il faut y ajouter les 48,65 millions d\'amendes de 2022.'],
        ['q' => 'Pourquoi TSB ne pouvait-elle pas revenir en arrière ?', 'r' => 'En notifiant sa migration à Lloyds, TSB renonçait à l\'option de copier l\'ancienne plateforme et ne pouvait plus l\'utiliser durablement. La FCA écrit qu\'après la bascule, revenir à la plateforme de Lloyds était techniquement presque impossible, et la PRA qualifie la migration d\'irréversible.'],
        ['q' => 'Une migration en une seule fois est-elle toujours une erreur ?', 'r' => 'Non. Slaughter and May reconnaît qu\'une bascule unique est la voie la plus rapide, la moins chère et la moins complexe, et qu\'elle n\'aurait pas forcément été le mauvais choix avec les bonnes protections. Elle exige alors des tests rigoureux à pleine charge et un plan pour le cas où le retour arrière est impossible.'],
        ['q' => 'Qu\'est-ce qu\'un retour arrière pour une PME ?', 'r' => 'C\'est la possibilité de revenir à l\'ancien site, à l\'ancien logiciel ou à l\'ancienne base si la bascule échoue : ancien système gardé actif ou en lecture, sauvegarde restaurable testée, adresse ou serveur réactivable, et une personne autorisée à décider du retour selon des critères écrits à l\'avance.'],
        ['q' => 'Comment tester une migration de site ou d\'ERP sans budget de banque ?', 'r' => 'Travaillez sur une copie des vraies données, faites utiliser le nouvel outil par les personnes qui s\'en serviront, simulez le nombre réel d\'utilisateurs simultanés, restaurez une sauvegarde complète et vérifiez paiements, formulaires et états comptables. À l\'échelle d\'une PME, ces tests prennent des jours, pas des mois.'],
    ],

    'sources' => [
        ['titre' => 'FCA, avis de sanction (Final Notice) adressé à TSB Bank plc, 20 décembre 2022', 'url' => 'https://www.fca.org.uk/publication/final-notices/tsb-bank-plc-2022.pdf', 'date' => '2026-10-03'],
        ['titre' => 'FCA, communiqué « TSB fined £48.65m for operational resilience failings », 20 décembre 2022', 'url' => 'https://www.fca.org.uk/news/press-releases/tsb-fined-48m-operational-resilience-failings', 'date' => '2026-10-03'],
        ['titre' => 'Banque d\'Angleterre (PRA), communiqué sur l\'amende infligée à TSB, 20 décembre 2022', 'url' => 'https://www.bankofengland.co.uk/news/2022/december/tsb-fined-for-operational-resilience-failings', 'date' => '2026-10-03'],
        ['titre' => 'PRA, avis de sanction (Final Notice) adressé à TSB Bank plc, 20 décembre 2022', 'url' => 'https://www.bankofengland.co.uk/-/media/boe/files/prudential-regulation/regulatory-action/final-notice-from-pra-to-tsb-bank.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Banque d\'Angleterre (PRA), communiqué sur l\'amende infligée à l\'ancien directeur informatique de TSB, 13 avril 2023', 'url' => 'https://www.bankofengland.co.uk/news/2023/april/pra-fines-former-cio-of-tsb-bank-plc-for-breach-of-pra-senior-manager-conduct-rules', 'date' => '2026-10-03'],
        ['titre' => 'PRA, avis de sanction (Final Notice) adressé à Carlos Abarca, 13 avril 2023', 'url' => 'https://www.bankofengland.co.uk/-/media/boe/files/prudential-regulation/regulatory-action/final-notice-from-pra-to-former-tsb-bank-plc-cio.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Slaughter and May, rapport final de la revue indépendante de la migration de TSB, 19 novembre 2019', 'url' => 'https://www.tsb.co.uk/content/dam/tsb-public/documents/media-centre/Slaughter-and-May-final-report.pdf', 'date' => '2026-10-03'],
        ['titre' => 'TSB, communiqué sur la publication du rapport Slaughter and May, 19 novembre 2019', 'url' => 'https://www.tsb.co.uk/news-releases/slaughter-and-may/', 'date' => '2026-10-03'],
        ['titre' => 'Slaughter and May, annonce de la publication de la revue indépendante', 'url' => 'https://www.slaughterandmay.com/news/slaughter-and-may-s-independent-review-of-tsb-s-2018-migration-to-a-new-it-platform/', 'date' => '2026-10-03'],
        ['titre' => 'TSB, résultats annuels 2018, 1er février 2019', 'url' => 'https://www.tsb.co.uk/news-releases/tsb-announces-2018-full-year-results/', 'date' => '2026-10-03'],
        ['titre' => 'The Register, pertes de TSB en 2018 après la migration, 1er février 2019', 'url' => 'https://www.theregister.com/2019/02/01/tsb_fy_2018_losses/', 'date' => '2026-10-03'],
        ['titre' => 'Which?, « TSB banking glitch: what you need to know », 1er mai 2018', 'url' => 'https://www.which.co.uk/news/2018/05/tsb-banking-glitch-what-you-need-to-know/', 'date' => '2026-10-03'],
        ['titre' => 'Mortgage Solutions, la commission des finances retire sa confiance au directeur général de TSB, 8 juin 2018', 'url' => 'https://www.mortgagesolutions.co.uk/news/2018/06/08/mps-say-tsb-boss-pester-damaged-trust-banking-sector-must-go/', 'date' => '2026-10-03'],
        ['titre' => 'Mortgage Solutions, départ du directeur général de TSB, 4 septembre 2018', 'url' => 'https://www.mortgagesolutions.co.uk/mortgage-news/2018/09/04/tsb-boss-steps-issues-continue/', 'date' => '2026-10-03'],
    ],

    'liens' => [
        'services'    => ['refonte-migration-de-site', 'maintenance-support', 'integration-odoo', 'integration-dolibarr'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
