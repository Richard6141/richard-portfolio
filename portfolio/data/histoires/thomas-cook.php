<?php
// ============================================================
// data/histoires/thomas-cook.php · Histoire externe (non cliente) :
// la liquidation de Thomas Cook le 23 septembre 2019, entre dette héritée
// et passage à la réservation en ligne. Faits relevés le 03/10/2026 dans
// le rapport du liquidateur (décembre 2019), l'enquête du National Audit
// Office (mars 2020), l'audition de la commission BEIS (15 octobre 2019),
// la déclaration de Grant Shapps (25 septembre 2019) et les sources listées.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Thomas Cook : la dette qui a empêché le virage vers la réservation en ligne',
    'title'   => 'Faillite de Thomas Cook : la dette avant le numérique',
    'meta'    => 'Thomas Cook a sombré en 2019 avec 9 milliards de livres de dettes et 150 000 clients bloqués : ce qui relevait du numérique, de la dette, et les leçons.',
    'en_bref' => 'Le 23 septembre 2019, Thomas Cook, voyagiste né en 1841, a été placé en liquidation après l\'échec d\'une recapitalisation : selon le ministre des Transports Grant Shapps le 25 septembre 2019, 150 000 clients se sont retrouvés à l\'étranger sans vol retour et 9 000 salariés britanniques ont perdu leur emploi. Le National Audit Office a estimé en mars 2020 le coût pour l\'État britannique à au moins 156 millions de livres. Le groupe vendait déjà 64 % de ses voyages britanniques en ligne en 2018 selon Reuters, mais une dette héritée de 2007 l\'empêchait d\'investir au rythme du marché : une transformation numérique se finance tant que le bilan le permet, pas quand il est trop tard.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',

    'relation' => 'externe',
    'client'   => 'Thomas Cook',

    'faits_hero' => [
        ['l' => 'Secteur', 'v' => 'Voyagiste, agences de voyages et compagnie aérienne'],
        ['l' => 'Période', 'v' => '2007 à 2019'],
        ['l' => 'Issue', 'v' => 'Échec'],
        ['l' => 'Leçon', 'v' => 'La dette fige le virage numérique'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui était Thomas Cook, et quelle était sa position avant la chute ?',
            'paragraphes' => [
                'L\'histoire commence le 5 juillet 1841 : Thomas Cook, militant de la tempérance, affrète un train entre Leicester et Loughborough pour 485 voyageurs, à un shilling par personne, selon le site patrimonial de la ville de Leicester. De cette excursion naît une entreprise qui invente le voyage organisé, puis devient l\'un des plus grands voyagistes d\'Europe. En septembre 2019, le ministre britannique des Transports, Grant Shapps, parlera devant les députés d\'une marque emblématique riche de 178 ans d\'histoire.',
                'À la veille de sa faillite, le groupe servait environ 22 millions de clients par an, principalement au Royaume-Uni, en Allemagne et en Europe du Nord, selon le <a href="https://assets.publishing.service.gov.uk/media/5df37d32e5274a08e626bd77/Thomas_Cook_report_to_creditors_and_contributories.pdf">rapport du liquidateur publié en décembre 2019</a>. Il vendait des séjours tout compris, des vols secs, des voyages à la carte et des services financiers, par ses agences, ses sites web, ses centres d\'appels et des agences tierces. Il possédait aussi une compagnie aérienne et développait ses propres marques d\'hôtels.',
                'Le groupe coté, Thomas Cook Group plc, est né en 2007 de la fusion avec le voyagiste britannique MyTravel, rappelle le même rapport. Cette opération réunit deux réseaux d\'agences, deux flottes et deux systèmes informatiques, et elle laisse au bilan une dette lourde et un écart d\'acquisition (la survaleur payée au-delà des actifs). Devant la commission parlementaire chargée des entreprises (BEIS), le 15 octobre 2019, l\'ancien président Frank Meysman situera d\'ailleurs l\'origine des difficultés dans cette fusion de 2007.',
                'La position de départ est donc paradoxale. La marque est connue de tous, la demande de vacances à l\'étranger reste forte, et le forfait n\'est pas passé de mode : selon l\'association professionnelle ABTA, 51 % des Britanniques ont pris au moins un séjour organisé à l\'étranger dans l\'année, d\'après son rapport publié le 8 octobre 2019. Mais l\'entreprise porte une dette, un réseau de boutiques et une organisation conçus pour un marché où l\'on réservait en agence.',
            ],
        ],
        [
            'type'  => 'frise',
            'titre' => 'Quelles décisions et quels événements ont mené à la liquidation ?',
            'items' => [
                ['date' => '2007', 'titre' => 'Fusion avec MyTravel', 'texte' => 'Thomas Cook Group plc est constitué pour fusionner Thomas Cook et MyTravel, selon le rapport du liquidateur de décembre 2019. La dette et l\'écart d\'acquisition de cette opération pèseront jusqu\'à la fin.'],
                ['date' => '2008', 'titre' => 'Rachat de Hotels4U.com', 'texte' => 'Le groupe acquiert ce service de réservation d\'hôtels en ligne et fusionne ensuite avec les agences de voyages du groupe Co-operative, d\'après le même rapport. Il investit donc dans le web et dans les boutiques à la fois.'],
                ['date' => '22 novembre 2011', 'titre' => 'Première alerte de liquidité', 'texte' => 'L\'action perd 75 % en une séance quand le groupe renégocie une dette brute d\'un milliard de livres, rapporte le Financial Times. Le liquidateur notera qu\'il a fallu 200 millions de livres de prêts bancaires supplémentaires.'],
                ['date' => 'Mars 2013', 'titre' => 'Plan de redressement', 'texte' => 'La direction annonce 2 500 suppressions de postes et la fermeture de 195 agences, pour passer à une organisation multicanal aux outils en ligne renforcés, selon TravelMole le 7 mars 2013. Il reste alors 874 agences au Royaume-Uni.'],
                ['date' => '2015', 'titre' => 'Refinancement et arrivée de Fosun', 'texte' => 'Le groupe refinance sa dette et noue un partenariat avec le conglomérat chinois Fosun, qui détiendra 18 % du capital, selon le rapport du liquidateur. C\'est la seule année bénéficiaire sur huit, avec 61 millions de livres, rappellera un député le 15 octobre 2019.'],
                ['date' => '24 septembre 2018', 'titre' => 'Avertissement sur résultats', 'texte' => 'Après la canicule de l\'été 2018, qui retient les Britanniques chez eux, le groupe annonce une baisse de 15 % de ses bénéfices annuels. Le 28 septembre, l\'autorité de l\'aviation civile renforce sa surveillance financière, selon le National Audit Office.'],
                ['date' => '22 mars 2019', 'titre' => 'Encore 21 agences fermées', 'texte' => 'Le réseau britannique tombe à 566 agences, contre 1 132 en 2012, et 64 % des réservations britanniques de 2018 ont été faites en ligne, selon Reuters. 320 postes sont supprimés.'],
                ['date' => '16 mai 2019', 'titre' => 'Perte semestrielle de 1,5 milliard', 'texte' => 'Le groupe déprécie de 1,1 milliard de livres son écart d\'acquisition, en grande partie lié à MyTravel, d\'après le rapport du liquidateur et l\'enquête du National Audit Office.'],
                ['date' => '28 août 2019', 'titre' => 'Accord de principe', 'texte' => 'Banques, porteurs d\'obligations et Fosun s\'entendent sur une recapitalisation dont le besoin passe de 750 millions de livres en juillet à 900 millions en août, puis 1,1 milliard en septembre, selon l\'audition parlementaire du 15 octobre 2019.'],
                ['date' => '18 au 22 septembre 2019', 'titre' => 'Demande d\'aide refusée', 'texte' => 'Le groupe demande à l\'État de garantir de 150 à 250 millions de livres de prêts ; le ministère des Transports refuse le 22 septembre, selon le National Audit Office.'],
                ['date' => '23 septembre 2019', 'titre' => 'Liquidation', 'texte' => 'À 2 heures du matin, 26 sociétés du groupe sont placées en liquidation judiciaire. Tous les vols et séjours sont annulés et l\'Official Receiver, liquidateur public, est nommé.'],
                ['date' => '23 septembre au 7 octobre 2019', 'titre' => 'Opération Matterhorn', 'texte' => 'L\'autorité de l\'aviation civile affrète 746 vols depuis 54 aéroports de 18 pays pour rapatrier les clients, d\'après le National Audit Office.'],
                ['date' => '9 octobre 2019', 'titre' => 'Les agences changent de mains', 'texte' => 'Hays Travel, réseau familial sans dette, reprend les 555 agences pour 6 millions de livres, selon le National Audit Office. En novembre 2019, Fosun rachète la marque pour 11 millions de livres, rapporte Asia Times.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que s\'est-il réellement passé entre la fusion de 2007 et la liquidation de 2019 ?',
            'paragraphes' => [
                'La chute ne date pas de l\'été 2019. Dès novembre 2011, selon le Financial Times, le groupe doit renégocier une dette brute d\'un milliard de livres et sa valeur en Bourse tombe à 122 millions. La direction lance alors un plan de redressement qui ferme des agences et pousse la vente en ligne. Devant les députés, le 15 octobre 2019, Frank Meysman explique que la dette nette, proche de 900 millions de livres en 2011, avait ensuite été fortement réduite : le travail de désendettement a existé, mais il a absorbé l\'essentiel des marges.',
                'Le coût de cette dette est le fil rouge de l\'audition du 15 octobre 2019. Peter Fankhauser, directeur général depuis 2014, y chiffre à 1,2 milliard de livres le service de la dette et les frais de refinancement, une somme qui freinait selon lui la transformation. Il reconnaît qu\'un objectif de remboursement de 300 millions de livres entre 2015 et 2018 n\'a été tenu qu\'à hauteur de 100 millions. Interrogé sur la cause profonde de l\'échec, Frank Meysman répond sans détour : « Debt was the problem », la dette était le problème.',
                'Le numérique n\'est pas absent de ce récit, il en est la toile de fond. Fankhauser déclare devant la commission qu\'à son arrivée au Royaume-Uni en 2012, le groupe y héritait de 1 222 agences, et que le marché britannique générait encore 60 % de ses volumes en boutique, alors que l\'activité nordique n\'avait plus aucune agence et vendait entièrement en ligne. Il ajoute qu\'avec plus d\'investissement dans la marque et le développement du web, la réduction du réseau aurait pu aller plus loin. Le web n\'a pas été ignoré : il a été financé au compte-gouttes.',
                'La comptabilité a masqué une partie de la dégradation. Selon un député de la commission, lors de l\'audition du 15 octobre 2019, le groupe a inscrit pendant huit ans 1,8 milliard de livres de charges présentées à part, comme exceptionnelles, ce qui améliorait le résultat dit sous-jacent. L\'écart d\'acquisition de 2,5 milliards de livres conservé dans les comptes de 2018 reposait, selon une autre députée, sur une hypothèse de croissance des bénéfices de 28 % par an pendant trois ans ; six mois plus tard, le groupe en dépréciait 1,1 milliard.',
                'L\'été 2018 a servi de déclencheur. Les dirigeants citent, dans le rapport du liquidateur de décembre 2019, la canicule britannique, l\'incertitude liée au Brexit qui a retardé les réservations pour l\'Europe, une demande qui changeait de forme et la concurrence de sites en ligne aux coûts plus bas que les agences traditionnelles. La compagnie aérienne n\'a été mise en vente qu\'en février 2019, dans un marché aérien déprimé ; devant les députés, Fankhauser admet qu\'une vente plus précoce aurait probablement été une occasion à saisir.',
                'Le dernier acte se joue en quelques semaines. Le besoin de financement annoncé passe de 300 millions de livres en mai à 750 millions le 12 juillet, puis 900 millions en août, auxquels les banques ajoutent une réserve de 200 millions, selon l\'audition du 15 octobre 2019. Fosun refuse de garantir cette réserve, le groupe se tourne vers l\'État, qui refuse le 22 septembre. Le lendemain à 2 heures, les administrateurs demandent la liquidation, constatant l\'insolvabilité du groupe, d\'après le rapport du liquidateur.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels mécanismes ont rendu la chute presque inévitable ?',
            'intro' => 'Pris isolément, aucun de ces facteurs n\'aurait suffi. C\'est leur addition, sur une entreprise qui n\'avait plus de marge pour encaisser un choc, qui a fermé toutes les portes de sortie.',
            'items' => [
                ['titre' => 'Une dette héritée, jamais résorbée', 'texte' => 'La fusion de 2007 a laissé une dette que douze années de restructuration n\'ont pas effacée. Au moment de la liquidation, le rapport du liquidateur de décembre 2019 recense 1,775 milliard de livres dus aux banques et aux prêteurs, contrats de location compris.'],
                ['titre' => 'Des frais fixes calés sur l\'ancien modèle', 'texte' => 'Agences, baux, avions et contrats hôteliers se paient que les clients réservent ou non. Quand la canicule de 2018 vide les réservations de dernière minute, ces coûts restent, et la trésorerie de l\'hiver, toujours tendue chez un voyagiste, devient critique, comme l\'a expliqué le directeur financier Sten Daugaard aux députés.'],
                ['titre' => 'Un virage numérique sous-financé', 'texte' => 'Le groupe a racheté un site de réservation dès 2008, fermé des centaines d\'agences et atteint 64 % de réservations britanniques en ligne en 2018 selon Reuters. Mais ses dirigeants eux-mêmes disent n\'avoir pas pu investir assez vite dans le web, faute de moyens.'],
                ['titre' => 'Des concurrents nés en ligne', 'texte' => 'Les plateformes ne portaient ni agences ni avions. En 2019, Booking Holdings a enregistré 96,4 milliards de dollars de réservations brutes selon ses résultats publiés le 26 février 2020, et Airbnb 38 milliards de dollars de valeur brute des réservations selon son prospectus boursier de novembre 2020. Le 6 février 2019, l\'autorité britannique de la concurrence (CMA) obtenait de six de ces intermédiaires, dont Booking.com, Expedia et le comparateur trivago, des engagements sur leurs pratiques de vente : signe de leur poids dans la réservation.'],
                ['titre' => 'Des comptes qui rassuraient trop', 'texte' => 'Le régulateur de l\'audit, le Financial Reporting Council, a sanctionné le 10 avril 2025 le cabinet EY pour ses audits de 2017 et 2018 : l\'écart d\'acquisition de 2,6 milliards de livres, environ 40 % des actifs, et l\'hypothèse de continuité d\'exploitation n\'avaient pas été examinés avec assez d\'esprit critique.'],
                ['titre' => 'Des cessions trop tardives', 'texte' => 'La compagnie aérienne, rentable selon la direction, n\'a été proposée qu\'en 2019, année d\'avertissements sur résultats dans tout le secteur aérien. Les offres se sont dégradées entre les propositions indicatives et les offres fermes, a reconnu Peter Fankhauser devant la commission le 15 octobre 2019.'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qui est établi, et qu\'est-ce qui reste débattu ?',
            'texte' => '<strong>Établi :</strong> la liquidation du 23 septembre 2019, le passif d\'environ 9 milliards de livres, le refus de l\'État et le coût public, documentés par le liquidateur en décembre 2019 et par le National Audit Office en mars 2020. <strong>Débattu :</strong> le poids du numérique. Le 25 septembre 2019, Grant Shapps a reproché au groupe d\'avoir investi davantage dans les agences, alors que Reuters décrit en mars 2019 un réseau réduit de moitié depuis 2012. Fankhauser parle de 60 % des volumes britanniques réalisés en boutique, Reuters de 64 % de réservations en ligne : les périmètres diffèrent sans doute, et aucune source consultée ne permet de trancher. Les dirigeants invoquent enfin la canicule et le Brexit, que leurs concurrents ont aussi subis.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quelles conséquences mesurables la faillite a-t-elle eues ?',
            'items' => [
                ['valeur' => '150 000', 'libelle' => 'Clients à l\'étranger sans vol retour au 23 septembre 2019, avec 9 000 emplois perdus au Royaume-Uni (déclaration du 25 septembre 2019)', 'source' => 'Grant Shapps, ministère britannique des Transports', 'url' => 'https://www.gov.uk/government/speeches/thomas-cook-update'],
                ['valeur' => '746 vols', 'libelle' => 'Vols de rapatriement affrétés du 23 septembre au 7 octobre 2019, depuis 54 aéroports de 18 pays', 'source' => 'National Audit Office, mars 2020', 'url' => 'https://www.nao.org.uk/press-releases/investigation-into-governments-response-to-the-collapse-of-thomas-cook/'],
                ['valeur' => '156 M£', 'libelle' => 'Coût minimal estimé pour l\'État britannique en mars 2020 : rapatriement, indemnités de licenciement et frais de liquidation', 'source' => 'National Audit Office, mars 2020', 'url' => 'https://www.nao.org.uk/press-releases/investigation-into-governments-response-to-the-collapse-of-thomas-cook/'],
                ['valeur' => '9 Md£', 'libelle' => 'Passif total estimé des 26 sociétés liquidées, dont 5,7 milliards dus à d\'autres sociétés du groupe (décembre 2019)', 'source' => 'Official Receiver, rapport aux créanciers', 'url' => 'https://assets.publishing.service.gov.uk/media/5df37d32e5274a08e626bd77/Thomas_Cook_report_to_creditors_and_contributories.pdf'],
                ['valeur' => '176 à 244 M£', 'libelle' => 'Produit attendu de la vente des actifs : agences, créneaux d\'aéroport, marques, filiales (décembre 2019)', 'source' => 'Official Receiver, rapport aux créanciers', 'url' => 'https://assets.publishing.service.gov.uk/media/5df37d32e5274a08e626bd77/Thomas_Cook_report_to_creditors_and_contributories.pdf'],
                ['valeur' => '4,875 M£', 'libelle' => 'Amende nette infligée à EY le 10 avril 2025 pour ses audits des comptes 2017 et 2018 du groupe', 'source' => 'Financial Reporting Council', 'url' => 'https://www.frc.org.uk/news-and-events/news/2025/04/sanctions-against-ernst-young-llp-and-richard-wilson/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui a payé la facture de la liquidation, et pendant combien de temps ?',
            'paragraphes' => [
                'Le rapatriement a coûté environ 152 millions de livres, dont 83 millions à la charge du ministère des Transports, selon l\'<a href="https://www.nao.org.uk/press-releases/investigation-into-governments-response-to-the-collapse-of-thomas-cook/">enquête du National Audit Office publiée le 19 mars 2020</a>. La raison tient à la protection des voyageurs : le fonds ATOL, alimenté par une contribution de 2,50 livres par voyageur, ne couvre que les forfaits avec vol. L\'État a décidé de ramener aussi les clients non protégés, et c\'est lui qui paie leur part.',
                'Les estimations ont d\'ailleurs bougé. Le 25 septembre 2019, Grant Shapps indiquait aux députés qu\'environ 60 % des passagers bénéficiaient de la protection ATOL. En janvier 2020, avec les vraies données de réservation, l\'autorité de l\'aviation civile a conclu que 55 % des 150 000 clients n\'étaient pas protégés, ce qui a alourdi la facture publique de 22 millions de livres, rapporte le National Audit Office. Le même rapport estime à 481 millions de livres l\'appel au fonds ATOL, contre 10 millions par an en moyenne les cinq années précédentes.',
                'Les salariés et les fournisseurs ont payé aussi. Le National Audit Office compte au moins 58 millions de livres d\'indemnités de licenciement versées par le fonds public d\'assurance nationale. Le rapport du liquidateur de décembre 2019 recense 885 millions de livres dus aux fournisseurs et 585 millions dus aux clients pour des voyages et services non fournis. Près de cinq ans plus tard, le 8 juillet 2024, l\'Official Receiver annonçait reverser 280 millions de livres aux créanciers, une fraction du passif.',
                'Sur le plan des responsabilités, le bilan reste mince. Selon City A.M. du 12 janvier 2022, l\'Insolvency Service a indiqué ne pas envisager de procédure de déchéance contre les administrateurs, au vu de l\'enquête du liquidateur. Le Financial Reporting Council a en revanche sanctionné en avril 2025 l\'auditeur EY et son associé signataire, qui ont reconnu des manquements graves sur l\'écart d\'acquisition, la continuité d\'exploitation et l\'indépendance. Les rémunérations versées, discutées âprement devant les députés en octobre 2019, n\'ont pas fait l\'objet d\'une récupération documentée dans les sources consultées.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Qu\'est-ce qui a été fait, et qu\'est-ce qui aurait réduit le risque ?',
            'options'  => ['Ce qui a été fait', 'Ce qui aurait réduit le risque (analyse)'],
            'criteres' => [
                ['critere' => 'Dette de la fusion de 2007', 'valeurs' => ['Remboursement lent : 100 millions de livres rendus sur un objectif de 300 millions entre 2015 et 2018, selon Fankhauser', 'Vendre tôt des actifs non essentiels pour ramener la dette à un niveau compatible avec un hiver difficile']],
                ['critere' => 'Réseau d\'agences', 'valeurs' => ['Fermetures par vagues : 195 agences en 2013, 21 en 2019, réseau ramené à 566 boutiques', 'Fixer une cible de réseau liée à la part réelle des ventes en boutique, et renégocier les baux en conséquence']],
                ['critere' => 'Investissement numérique', 'valeurs' => ['Rachat de Hotels4U.com en 2008, ventes en ligne en hausse, mais budget web jugé insuffisant par la direction elle-même', 'Protéger un budget numérique pluriannuel, financé par les cessions plutôt que par l\'emprunt']],
                ['critere' => 'Compagnie aérienne', 'valeurs' => ['Séparée juridiquement en 2017, mise en vente en février 2019 dans un marché déprimé', 'Engager la cession dès la séparation, avant 2019, année d\'avertissements sur résultats dans tout le secteur aérien selon Fankhauser']],
                ['critere' => 'Lecture des comptes', 'valeurs' => ['Charges exceptionnelles récurrentes et écart d\'acquisition conservé jusqu\'en mai 2019', 'Piloter sur le résultat net et la trésorerie, pas sur un résultat sous-jacent qui exclut des charges présentes chaque année']],
                ['critere' => 'Plan de sauvetage', 'valeurs' => ['Besoin révisé de 300 millions de livres en mai à 1,1 milliard en septembre 2019', 'Chiffrer dès le départ le scénario défavorable, avec une réserve de trésorerie négociée avant l\'urgence']],
            ],
            'verdict'  => 'Le passage au numérique était engagé ; c\'est le rythme, bridé par la dette et les frais fixes, qui a manqué. Les colonnes de droite relèvent de l\'analyse a posteriori, pas d\'une certitude.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Qu\'est-ce qui a fonctionné après la faillite, avec les mêmes actifs ?',
            'intro' => 'Une partie de ce que possédait Thomas Cook a survécu dès qu\'elle a été séparée de la dette. C\'est sans doute l\'enseignement le plus net de cette histoire.',
            'items' => [
                ['titre' => 'Les agences, reprises sans dette', 'texte' => 'Hays Travel a racheté les 555 agences pour 6 millions de livres, selon le National Audit Office. Devant les députés le 15 octobre 2019, Fankhauser lui-même jugeait qu\'une agence de voyages, métier de commission, peut réussir avec une structure presque sans dette, et se félicitait d\'environ 2 000 emplois sauvés.'],
                ['titre' => 'La marque, relancée en ligne', 'texte' => 'Fosun a racheté la marque pour 11 millions de livres en novembre 2019, selon Asia Times, puis l\'a relancée le 16 septembre 2020 comme agence de voyages en ligne, rapporte Caixin Global ; Asia Times décrivait dès 2019 un projet sans boutiques. Le nom de 1841 a été relancé sur un site web, pas dans une vitrine.'],
                ['titre' => 'Les créneaux d\'aéroport, revendus', 'texte' => 'easyJet a acquis les créneaux de Gatwick et de Bristol pour 36 millions de livres, et Jet2.com ceux de Manchester, Birmingham et Stansted, selon le National Audit Office. Les actifs avaient de la valeur ; c\'est l\'ensemble endetté qui n\'en avait plus.'],
                ['titre' => 'Les activités hors du Royaume-Uni', 'texte' => 'Devant la commission, Frank Meysman soulignait que l\'activité scandinave continuait d\'exister après la liquidation. Le métier n\'était pas condamné partout : il l\'était sous cette structure financière.'],
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Quelle leçon retenir en une seule idée ?',
            'texte' => 'Thomas Cook n\'a pas ignoré Internet : il n\'avait plus les moyens de le financer. Une transformation numérique se paie avec la marge et la trésorerie d\'aujourd\'hui ; quand on attend que la dette ou les frais fixes l\'imposent, elle arrive trop tard et coûte plus cher.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu\'est-ce que cela change pour une PME de Cotonou, d\'Abidjan, de Dakar ou de Lyon ?',
            'paragraphes' => [
                'Une PME n\'a ni compagnie aérienne ni obligations cotées, mais elle connaît la même mécanique à son échelle. Une agence de voyages de Cotonou qui vend billets et pèlerinages au comptoir, un hôtel d\'Abidjan qui reçoit une bonne part de ses clients par une plateforme, un loueur de voitures de Dakar qui prend les réservations par téléphone : chacun porte des frais fixes calés sur un canal de vente, et chacun voit ses clients prendre l\'habitude de réserver ailleurs, sur leur téléphone, à toute heure.',
                'La différence avec Thomas Cook tient au point de départ. Une PME sans dette lourde garde la liberté de choisir le moment de son virage. Elle peut tester un module de réservation en ligne sur une seule offre, mesurer, puis élargir. Thomas Cook, d\'après ses propres dirigeants devant les députés, n\'avait plus cette liberté : chaque livre gagnée partait d\'abord dans le service de la dette. Le risque, pour une petite entreprise, est de laisser se créer la même situation en finançant un loyer, un stock ou un véhicule à crédit pendant que le canal numérique attend « l\'année prochaine ».',
                'Il ne s\'agit pas de fermer les points de vente physiques. Le rapport ABTA d\'octobre 2019 montrait que 51 % des Britanniques prenaient encore un forfait à l\'étranger, et la reprise des agences par Hays Travel prouve qu\'une boutique peut vivre quand elle n\'est pas écrasée de charges. La question utile est ailleurs : quelle part de vos ventes passe réellement par chaque canal, combien coûte chaque canal, et votre budget suit-il cette répartition, ou celle d\'il y a cinq ans ?',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels signaux d\'alerte une PME doit-elle surveiller ?',
            'intro' => 'Aucun de ces signaux n\'est grave isolément. Deux ou trois réunis, sur plusieurs mois, indiquent que le modèle de vente prend du retard sur les clients.',
            'items' => [
                ['titre' => 'Les clients demandent un lien', 'texte' => 'Ils vous écrivent sur WhatsApp pour savoir s\'il reste de la place, demandent un lien de paiement ou un devis par message, puis réservent ailleurs quand la réponse tarde. Chaque question répétée est une réservation que le client aurait aimé faire seul.'],
                ['titre' => 'La plateforme prend une part croissante', 'texte' => 'Pour un hôtel, une résidence meublée ou un circuit touristique, la part des réservations venues d\'une plateforme de réservation monte d\'année en année, et ses commissions avec elle. C\'est utile pour remplir, risqué quand c\'est le seul canal.'],
                ['titre' => 'Les charges fixes suivent l\'ancien canal', 'texte' => 'Loyer d\'une vitrine, personnel d\'accueil, standard téléphonique : si la part des ventes au comptoir baisse et que ces charges restent identiques, l\'écart se paie sur la marge, puis sur la trésorerie.'],
                ['titre' => 'La trésorerie dépend d\'une saison', 'texte' => 'Thomas Cook redoutait chaque hiver. Une PME qui encaisse l\'essentiel de son chiffre d\'affaires sur quelques mois (rentrée, fêtes, saison du pèlerinage, vacances d\'été) doit savoir combien de mois elle tient sans ventes.'],
                ['titre' => 'Le chantier numérique est toujours reporté', 'texte' => 'Le site de réservation, le paiement en ligne ou le fichier clients reviennent à chaque réunion et sont toujours repoussés faute de budget. Si le budget manque chaque année, c\'est que la structure de coûts ne laisse pas de place à l\'investissement.'],
                ['titre' => 'Les chiffres flatteurs excluent les mauvaises nouvelles', 'texte' => 'Un tableau de bord qui met de côté, chaque mois, des dépenses dites exceptionnelles reproduit à petite échelle le travers relevé par les députés britanniques. Suivez la trésorerie réelle et le résultat complet, pas seulement le chiffre d\'affaires.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Agir tôt ou agir tard : qu\'est-ce que cela change concrètement ?',
            'legende' => 'Comparaison qualitative établie par l\'auteur à partir du cas Thomas Cook ; aucun montant n\'est avancé, chaque entreprise devant chiffrer son propre cas.',
            'entetes' => ['Décision', 'Prise à temps', 'Prise sous la contrainte'],
            'lignes'  => [
                ['Ouvrir la réservation en ligne', 'Test sur une offre, ajustements avec les retours clients, coût étalé', 'Projet lancé dans l\'urgence, choix techniques subis, moins de temps pour former l\'équipe'],
                ['Réduire un point de vente ou un local', 'Fin de bail choisie, personnel redéployé vers l\'accueil en ligne', 'Fermeture imposée, indemnités, perte de clients attachés au lieu'],
                ['Vendre un actif non essentiel', 'Prix négocié sans pression, acheteurs multiples', 'Vente au rabais ou impossible, comme la compagnie aérienne en 2019'],
                ['Négocier avec la banque', 'Discussion sur un plan et des chiffres crédibles', 'Exigences croissantes de garanties, comme les 200 millions de livres de réserve demandés à Thomas Cook'],
                ['Former l\'équipe aux nouveaux outils', 'Montée en compétence progressive, outils adoptés', 'Outils installés sans adhésion, retour aux anciennes habitudes'],
                ['Diversifier les canaux de vente', 'Site propre, plateformes et comptoir se complètent', 'Dépendance à un seul canal, commissions subies'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble ce risque dans les secteurs proches du voyage ?',
            'items' => [
                ['secteur' => 'Agence de voyages, Cotonou', 'probleme' => 'Billets d\'avion, visas et pèlerinages vendus au comptoir, devis envoyés à la main, clients qui comparent les prix sur leur téléphone.', 'solution' => 'Publier les offres principales avec un formulaire de demande et un paiement d\'acompte en ligne, garder le comptoir pour le conseil, suivre la part de chaque canal chaque mois.'],
                ['secteur' => 'Hôtel, Abidjan', 'probleme' => 'Une plateforme internationale apporte l\'essentiel des réservations, et sa commission pèse sur chaque nuitée.', 'solution' => 'Conserver la plateforme pour la visibilité, ajouter un moteur de réservation sur son propre site et fidéliser les clients directs avec un contact WhatsApp et des offres de retour.'],
                ['secteur' => 'Location de voitures, Dakar', 'probleme' => 'Réservations par téléphone, disponibilités tenues sur un cahier, doubles réservations les week-ends chargés.', 'solution' => 'Calendrier de disponibilité en ligne relié au parc réel, réservation avec caution payée à l\'avance, rappels automatiques avant la prise du véhicule.'],
                ['secteur' => 'Salle d\'événements, Lomé', 'probleme' => 'Visites et réservations gérées par appels, acomptes encaissés en espèces, dates bloquées sans confirmation.', 'solution' => 'Agenda public des dates libres, demande de devis en ligne, acompte par mobile money qui confirme automatiquement la date.'],
                ['secteur' => 'Clinique ou cabinet, Douala', 'probleme' => 'Files d\'attente le matin, rendez-vous pris au guichet, patients perdus faute de réponse au téléphone.', 'solution' => 'Prise de rendez-vous en ligne par créneau, confirmation et rappel par message, accueil physique recentré sur les patients présents.'],
                ['secteur' => 'Agence réceptive, Lyon', 'probleme' => 'Groupes et séminaires vendus sur devis par courriel, catalogue figé en PDF, concurrence de plateformes d\'activités.', 'solution' => 'Catalogue en ligne avec réservation et paiement pour les offres simples, devis sur mesure réservés aux demandes complexes.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelle liste de contrôle suivre pour éviter la même erreur ?',
            'items' => [
                'Mesurer chaque mois la part des ventes par canal : comptoir, téléphone, WhatsApp, site propre, plateformes.',
                'Comparer cette répartition à celle des charges fixes, et corriger l\'écart avant qu\'il ne se creuse.',
                'Réserver chaque année un budget numérique protégé, même modeste, financé par la marge et non par un nouvel emprunt.',
                'Tester la réservation ou la commande en ligne sur une offre précise avant de l\'étendre à tout le catalogue.',
                'Ne jamais dépendre d\'une seule plateforme pour l\'essentiel des réservations ; garder un canal direct vers ses clients.',
                'Connaître le nombre de mois que l\'entreprise tient sans ventes, et le revoir avant chaque basse saison.',
                'Suivre la trésorerie réelle et le résultat complet, sans écarter durablement des dépenses présentées comme exceptionnelles.',
                'Vendre ou arrêter une activité secondaire pendant qu\'elle a encore de la valeur, pas au moment où l\'argent manque.',
                'Négocier avec la banque sur un plan chiffré et un scénario défavorable, avant l\'urgence.',
                'Former l\'équipe aux nouveaux outils et désigner un responsable interne, pour que le changement tienne dans la durée.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Richard SALANON peut-il aider une entreprise sur ce point précis ?',
            'paragraphes' => [
                'Le cas Thomas Cook pose deux questions qu\'un dirigeant de PME peut traiter sans attendre : où se font réellement mes ventes, et mon outil de vente suit-il mes clients ? La première relève du <a href="/services/consultant-digitalisation">conseil en digitalisation</a> : cartographier les canaux, les coûts et les priorités, puis décider de ce qui passe en ligne d\'abord. La seconde relève de la mise en œuvre, avec un <a href="/services/systeme-de-reservation-en-ligne">système de réservation en ligne</a> pour les métiers à créneaux ou un <a href="/services/site-e-commerce">site e-commerce</a> pour ceux qui vendent des produits ou des forfaits.',
                'La démarche commence par un diagnostic : chiffres de vente par canal, outils déjà en place, contraintes de paiement (mobile money, carte, acompte) et capacité de l\'équipe à suivre. Elle se poursuit par un premier périmètre limité, mis en service puis mesuré, avant d\'élargir. C\'est le principe de la <a href="/services/digitalisation-d-entreprise">digitalisation d\'entreprise</a> telle que Richard la conduit : relier la réservation, le paiement, la relation client et la gestion, plutôt qu\'empiler des outils. Pour le paiement, le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a> aide à choisir un agrégateur.',
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Il n\'a pas travaillé pour Thomas Cook ; cette histoire est racontée à partir de sources publiques citées en bas de page. Aucun résultat n\'est promis à l\'avance : le diagnostic sert justement à établir ce qui est faisable, à quel rythme et pour quel budget. Les relances automatiques entre réservation, paiement et messagerie peuvent s\'appuyer sur les outils présentés dans le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a>, et les autres récits sont réunis sur la page <a href="/histoires/">histoires</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre canal de vente suit-il encore vos clients ?',
            'texte'  => 'Décrivez votre activité, vos canaux de vente actuels et ce que vos clients vous demandent : vous recevez un diagnostic qui situe vos ventes en ligne et hors ligne, et propose une première étape réaliste, chiffrée sur devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un diagnostic'],
        ],
    ],

    'faq' => [
        ['q' => 'Pourquoi Thomas Cook a-t-il fait faillite en 2019 ?', 'r' => 'Le groupe a été placé en liquidation le 23 septembre 2019 après l\'échec d\'une recapitalisation et le refus de l\'État britannique de garantir de 150 à 250 millions de livres de prêts, selon le National Audit Office en mars 2020. En cause, d\'après le rapport du liquidateur de décembre 2019 : une dette historique lourde, une demande en baisse, la canicule de 2018, l\'incertitude du Brexit et la concurrence des sites en ligne.'],
        ['q' => 'La faillite de Thomas Cook est-elle due à Internet ?', 'r' => 'En partie seulement. Le groupe vendait 64 % de ses voyages britanniques en ligne en 2018 selon Reuters (mars 2019) et avait racheté un site de réservation dès 2008. Ses dirigeants ont reconnu devant les députés, le 15 octobre 2019, ne pas avoir pu investir assez vite dans le web, faute de moyens. L\'ancien président Frank Meysman a résumé : la dette était le problème.'],
        ['q' => 'Combien de voyageurs ont été rapatriés après la faillite de Thomas Cook ?', 'r' => 'Environ 150 000 clients se trouvaient à l\'étranger le 23 septembre 2019, selon le ministre des Transports Grant Shapps. L\'opération Matterhorn a affrété 746 vols depuis 54 aéroports de 18 pays jusqu\'au 7 octobre 2019, et 94 % des passagers sont rentrés à la date prévue, d\'après le National Audit Office.'],
        ['q' => 'Combien la faillite de Thomas Cook a-t-elle coûté à l\'État britannique ?', 'r' => 'Au moins 156 millions de livres selon l\'estimation du National Audit Office publiée le 19 mars 2020 : 83 millions pour le rapatriement des clients non protégés par le fonds ATOL, au moins 58 millions d\'indemnités de licenciement et de 15 à 23 millions de frais de liquidation.'],
        ['q' => 'Quelle était la dette de Thomas Cook au moment de sa faillite ?', 'r' => 'Le rapport du liquidateur de décembre 2019 estime le passif des 26 sociétés liquidées à environ 9 milliards de livres, dont 5,7 milliards dus à d\'autres sociétés du groupe, 1,775 milliard aux banques et prêteurs, 885 millions aux fournisseurs et 585 millions aux clients.'],
        ['q' => 'Pourquoi le gouvernement britannique n\'a-t-il pas sauvé Thomas Cook ?', 'r' => 'Le 25 septembre 2019, Grant Shapps a expliqué aux députés qu\'avec une perte semestrielle de 1,5 milliard de livres, rien ne garantissait qu\'une injection de 250 millions sauve l\'entreprise, et que l\'État aurait de toute façon dû payer le rapatriement. Les dirigeants estimaient au contraire que ce soutien aurait permis de boucler le plan.'],
        ['q' => 'Les dirigeants de Thomas Cook ont-ils été sanctionnés ?', 'r' => 'Non. Selon City A.M. du 12 janvier 2022, l\'Insolvency Service a indiqué ne pas envisager de procédure de déchéance contre les administrateurs. L\'auditeur EY a en revanche été sanctionné le 10 avril 2025 par le Financial Reporting Council, avec une amende nette de 4,875 millions de livres pour ses audits de 2017 et 2018.'],
        ['q' => 'Que sont devenues les agences et la marque Thomas Cook ?', 'r' => 'Hays Travel a racheté les 555 agences pour 6 millions de livres en octobre 2019, selon le National Audit Office. Fosun a acquis la marque pour 11 millions de livres en novembre 2019, selon Asia Times, puis l\'a relancée en ligne le 16 septembre 2020, selon Caixin Global.'],
        ['q' => 'Quelle leçon une PME africaine peut-elle tirer de Thomas Cook ?', 'r' => 'Financer son passage au numérique tant que la trésorerie le permet, au lieu d\'attendre qu\'une dette ou des charges fixes l\'imposent. Concrètement : mesurer la part des ventes par canal, aligner les charges sur cette répartition, tester la réservation en ligne sur une offre et garder un canal direct vers ses clients.'],
        ['q' => 'Faut-il fermer son agence ou sa boutique pour vendre en ligne ?', 'r' => 'Pas nécessairement. Selon l\'ABTA en octobre 2019, 51 % des Britanniques prenaient encore un séjour organisé à l\'étranger, et Hays Travel a repris les agences de Thomas Cook. Le comptoir reste utile pour le conseil ; ce qui doit changer, c\'est la place qu\'il occupe dans les coûts par rapport aux ventes qu\'il apporte.'],
    ],

    'sources' => [
        ['titre' => 'Official Receiver, rapport aux créanciers et associés des sociétés du groupe Thomas Cook (décembre 2019)', 'url' => 'https://assets.publishing.service.gov.uk/media/5df37d32e5274a08e626bd77/Thomas_Cook_report_to_creditors_and_contributories.pdf', 'date' => '2026-10-03'],
        ['titre' => 'National Audit Office, enquête sur la réponse du gouvernement à la faillite de Thomas Cook (19 mars 2020)', 'url' => 'https://www.nao.org.uk/press-releases/investigation-into-governments-response-to-the-collapse-of-thomas-cook/', 'date' => '2026-10-03'],
        ['titre' => 'Chambre des communes, commission BEIS, audition des anciens dirigeants de Thomas Cook (15 octobre 2019)', 'url' => 'https://committees.parliament.uk/oralevidence/9655/html/', 'date' => '2026-10-03'],
        ['titre' => 'Gouvernement britannique, déclaration de Grant Shapps aux Communes sur Thomas Cook (25 septembre 2019)', 'url' => 'https://www.gov.uk/government/speeches/thomas-cook-update', 'date' => '2026-10-03'],
        ['titre' => 'Financial Reporting Council, sanctions contre Ernst & Young LLP et Richard Wilson (10 avril 2025)', 'url' => 'https://www.frc.org.uk/news-and-events/news/2025/04/sanctions-against-ernst-young-llp-and-richard-wilson/', 'date' => '2026-10-03'],
        ['titre' => 'Gouvernement britannique, l\'Official Receiver reverse 280 millions de livres aux créanciers (8 juillet 2024)', 'url' => 'https://www.gov.uk/government/news/official-receiver-to-return-280m-recovered-from-the-thomas-cook-group-of-companies', 'date' => '2026-10-03'],
        ['titre' => 'Reuters, Thomas Cook ferme 21 agences et mise sur la vente en ligne (22 mars 2019)', 'url' => 'https://www.yahoo.com/news/thomas-cook-shut-21-stores-101604843.html', 'date' => '2026-10-03'],
        ['titre' => 'Financial Times (repris par The Globe and Mail), l\'action Thomas Cook s\'effondre sur la crainte de la dette (22 novembre 2011)', 'url' => 'https://www.theglobeandmail.com/news/world/thomas-cook-shares-plunge-on-debt-fears/article4179437', 'date' => '2026-10-03'],
        ['titre' => 'TravelMole, Thomas Cook annonce 2 500 suppressions de postes et 195 fermetures d\'agences (7 mars 2013)', 'url' => 'https://travelmole.com/news/thomas-cook-breaks-the-bad-news-to-staff', 'date' => '2026-10-03'],
        ['titre' => 'City A.M., l\'Insolvency Service n\'engage pas de poursuites contre les dirigeants de Thomas Cook (12 janvier 2022)', 'url' => 'https://www.cityam.com/?p=1826492', 'date' => '2026-10-03'],
        ['titre' => 'Competition and Markets Authority, engagements des sites de réservation d\'hôtels (6 février 2019)', 'url' => 'https://www.gov.uk/government/news/hotel-booking-sites-to-make-major-changes-after-cma-probe', 'date' => '2026-10-03'],
        ['titre' => 'Booking Holdings, résultats du quatrième trimestre et de l\'année 2019 (SEC, 26 février 2020)', 'url' => 'https://www.sec.gov/Archives/edgar/data/1075531/000107553120000009/ex991123119.htm', 'date' => '2026-10-03'],
        ['titre' => 'Airbnb, prospectus d\'introduction en Bourse, formulaire S-1 (SEC, novembre 2020)', 'url' => 'https://www.sec.gov/Archives/edgar/data/1559720/000119312520294801/d81668ds1.htm', 'date' => '2026-10-03'],
        ['titre' => 'ABTA, rapport Holiday Habits 2019 (8 octobre 2019)', 'url' => 'https://www.abta.com/news/more-brits-heading-holiday', 'date' => '2026-10-03'],
        ['titre' => 'Asia Times, Fosun rachète la marque Thomas Cook (novembre 2019)', 'url' => 'https://asiatimes.com/2019/11/fosun-injects-new-life-into-thomas-cook/', 'date' => '2026-10-03'],
        ['titre' => 'Caixin Global, la marque Thomas Cook relancée en agence en ligne (16 septembre 2020)', 'url' => 'https://www.caixinglobal.com/2020-09-16/chinese-owners-resurrect-venerable-uk-travel-brand-thomas-cook-101606094.html', 'date' => '2026-10-03'],
        ['titre' => 'Ville de Leicester, Story of Leicester : le Leicester de Thomas Cook', 'url' => 'https://storyofleicester.info/city-stories/thomas-cooks-leicester/', 'date' => '2026-10-03'],
    ],

    'liens' => [
        'services'    => ['digitalisation-d-entreprise', 'systeme-de-reservation-en-ligne', 'site-e-commerce', 'consultant-digitalisation'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'n8n-vs-make-vs-zapier'],
    ],
];
