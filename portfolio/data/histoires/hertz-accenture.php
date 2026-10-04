<?php
// ============================================================
// data/histoires/hertz-accenture.php · Histoire externe : la refonte du site
// et des applications de Hertz confiée à Accenture (2016-2018), la plainte
// de 2019 et l'accord de 2021. Hertz n'est pas un client de Richard SALANON.
// Faits relevés le 03/10/2026 dans le dossier judiciaire public (tribunal
// fédéral du district sud de New York, affaire 1:19-cv-03508), les rapports
// de Hertz à la SEC et la presse. Les griefs de la plainte sont des
// allégations : aucun tribunal ne les a jugées sur le fond.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Hertz et Accenture : 32 millions de dollars versés, aucun site en ligne, une leçon de cadrage',
    'title'   => 'Hertz contre Accenture : la refonte jamais mise en ligne',
    'meta'    => 'Hertz a réclamé à Accenture les 32 millions de dollars versés pour un site et des applications jamais mis en ligne. Faits, allégations et leçons pour PME.',
    'en_bref' => 'Hertz a confié en 2016 à Accenture la refonte de son site et de ses applications mobiles, avec une mise en ligne promise pour décembre 2017 ; après deux reports, Hertz a écarté le prestataire en mai 2018 sans que rien ne soit mis en ligne. Dans sa plainte du 19 avril 2019, Hertz affirmait avoir payé plus de 32 millions de dollars, puis plus de 10 millions de plus pour faire terminer le travail ; Accenture contestait, et l\'affaire s\'est close en août 2021 par un accord dont le montant n\'a pas été rendu public. La leçon pour une PME : cadrer par écrit, découper en livraisons vérifiables, garder la main sur le code et choisir son prestataire sur des preuves.',
    'publie'  => '2026-10-03',
    'maj'     => '2026-10-03',
    'relation' => 'externe',
    'client'   => 'Hertz',

    'faits_hero' => [
        ['l' => 'Secteur', 'v' => 'Location de véhicules, États-Unis et monde'],
        ['l' => 'Période', 'v' => '2016 à 2021'],
        ['l' => 'Issue', 'v' => 'Échec'],
        ['l' => 'Leçon', 'v' => 'Cadrer, découper, garder le code'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Qui était Hertz en 2016, et pourquoi voulait-il refaire son site et ses applications ?',
            'paragraphes' => [
                'Hertz est l\'un des plus grands loueurs de véhicules au monde. Selon son <a href="https://www.sec.gov/Archives/edgar/data/1657853/000165785319000005/hghthc201810-k.htm">rapport annuel 2018 déposé auprès de la SEC</a>, le groupe exploitait les marques Hertz, Dollar et Thrifty dans environ 10 200 agences, en propre ou en franchise, employait environ 38 000 personnes au 31 décembre 2018 et réalisait un chiffre d\'affaires de 8,803 milliards de dollars en 2016, puis de 9,504 milliards en 2018. Pour un loueur, le site et l\'application ne sont pas une vitrine : c\'est là que le client réserve, modifie sa réservation et consulte son programme de fidélité.',
                'Début 2016, après une revue interne de ses outils numériques, Hertz lance ce que sa plainte du 19 avril 2019 décrit comme un projet « ambitieux » de transformation de son identité numérique. L\'objectif affiché : un nouveau site Hertz.com et une suite d\'applications mobiles bâtis sur une plateforme commune, que Hertz pourrait ensuite étendre à Dollar, à Thrifty et à ses activités hors d\'Amérique du Nord. Hertz reconnaît dans la même plainte qu\'il n\'avait ni les compétences ni les ressources internes pour mener seul un tel chantier.',
                'Le groupe n\'était pas un inconnu pour Accenture. Les deux entreprises étaient liées depuis le 14 juillet 2004 par un contrat-cadre de services de conseil, le Consulting Services Agreement, qui ne décrivait aucune mission précise mais fixait les règles communes à toutes les missions futures. En mars 2016, Hertz engage Accenture pour valider sa stratégie et planifier le projet, puis lance à l\'été 2016 un appel d\'offres auprès de plusieurs grands prestataires. Après une présentation d\'une journée avec démonstration, Accenture est retenu pour concevoir, développer, tester et déployer le nouveau site et les applications.',
                'Le contexte financier comptait aussi. Le rapport annuel 2018 de Hertz mentionne des « initiatives pluriannuelles » de modernisation de ses systèmes informatiques et financiers, dont les coûts déclarés passent de 53 millions de dollars en 2016 à 68 millions en 2017, puis à 98 millions en 2018. Ces montants couvrent l\'ensemble de la transformation informatique et financière du groupe, pas seulement la refonte confiée à Accenture ; ils montrent toutefois que le site et les applications faisaient partie d\'un effort de modernisation plus large, mené sur plusieurs fronts à la fois.',
            ],
        ],
        [
            'type'  => 'frise',
            'titre' => 'Quelles décisions et quels événements ont jalonné le projet, de 2004 à 2021 ?',
            'items' => [
                ['date' => '14 juillet 2004', 'titre' => 'Un contrat-cadre signé douze ans avant le projet', 'texte' => 'Hertz et Accenture signent le Consulting Services Agreement. Chaque mission future y sera rattachée par une lettre d\'intention ou un cahier des prestations (statement of work), selon la plainte de Hertz et le mémoire d\'Accenture.'],
                ['date' => 'Été 2016', 'titre' => 'Appel d\'offres et présentation commerciale', 'texte' => 'Hertz consulte plusieurs prestataires et retient Accenture. La présentation d\'Accenture, datée de juin 2016 selon son propre mémoire, vantait « 800 Experts » et « The best talent in the world ».'],
                ['date' => 'Août à novembre 2016', 'titre' => 'Phase 1 : le plan', 'texte' => 'Quatre lettres d\'intention et cahiers des prestations couvrent la collecte des besoins, l\'analyse de l\'existant et un « Solution Blueprint ». Hertz dit avoir payé près de 7 millions de dollars pour cette phase.'],
                ['date' => '30 janvier 2017', 'titre' => 'Phase 2 : construire, tester, déployer', 'texte' => 'Une lettre d\'intention lance la conception, le développement, les tests et le déploiement, avec une mise en ligne visée en décembre 2017. Un cahier des prestations la remplace à compter du 1er septembre 2017.'],
                ['date' => 'Septembre 2017', 'titre' => 'Premier report', 'texte' => 'Selon la plainte, Accenture annonce qu\'il ne tiendra pas décembre 2017 et demande un report à janvier 2018, puis un second report à avril 2018.'],
                ['date' => 'Janvier 2018', 'titre' => 'Un aveu de difficulté en réunion', 'texte' => 'Une diapositive d\'Accenture citée par Hertz indique que la technologie d\'interface (Angular2) « a été un défi » à livrer.'],
                ['date' => 'Mai et juin 2018', 'titre' => 'Hertz écarte Accenture', 'texte' => 'En mai 2018, Hertz demande à Accenture d\'arrêter et de transférer son travail avant fin juin. Un nouveau prestataire arrive en juin ; le travail d\'Accenture s\'achève le 28 juin 2018. Rien n\'a été mis en ligne.'],
                ['date' => '19 avril 2019', 'titre' => 'La plainte', 'texte' => 'Hertz assigne Accenture devant le tribunal fédéral du district sud de New York pour rupture de contrat, en invoquant plus de 32 millions de dollars d\'honoraires et de frais payés. Accenture répond que les accusations sont « sans fondement ».'],
                ['date' => '25 octobre 2019', 'titre' => 'Première décision du juge', 'texte' => 'Le juge William H. Pauley III rejette définitivement le volet fondé sur la loi de Floride contre les pratiques trompeuses, mais maintient l\'action pour rupture de contrat.'],
                ['date' => '22 novembre 2019', 'titre' => 'Accenture contre-attaque', 'texte' => 'Accenture répond et forme deux demandes reconventionnelles : Hertz aurait violé un engagement de ne pas le poursuivre, et refusé de payer des factures.'],
                ['date' => '22 mai 2020', 'titre' => 'Hertz se place sous la protection du chapitre 11', 'texte' => 'Frappé par l\'effondrement des voyages lié au Covid-19, Hertz demande à se réorganiser sous la protection du droit américain des faillites. Le procès est suspendu le 17 juillet 2020.'],
                ['date' => '20 juillet 2021', 'titre' => 'Un accord approuvé', 'texte' => 'Le tribunal des faillites du Delaware approuve un accord entre Hertz et Accenture qui règle ce litige et d\'autres réclamations liées à d\'autres contrats entre eux.'],
                ['date' => '9 août 2021', 'titre' => 'Fin de l\'affaire', 'texte' => 'Les parties renoncent définitivement à toutes leurs demandes ; chacune garde ses frais d\'avocats. Aucun jugement sur le fond n\'a été rendu.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que s\'est-il passé entre la signature et la rupture, selon Hertz ?',
            'paragraphes' => [
                'La <a href="https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.1.0_1.pdf">plainte déposée le 19 avril 2019</a> raconte un projet découpé en deux phases. La première, d\'août à novembre 2016, devait produire les plans : le « Solution Blueprint », un plan de livraison et des spécifications d\'architecture. Hertz dit l\'avoir payée près de 7 millions de dollars et ne lui reproche rien. La seconde, ouverte le 30 janvier 2017, devait transformer ces plans en un site et des applications prêts à servir les clients, avec une mise en ligne inscrite comme « priorité » pour décembre 2017. Hertz affirme y avoir consacré plus de 26 millions de dollars.',
                'Selon Hertz, les difficultés apparaissent pendant la construction. La plainte cite la couche d\'intégration, qui fait dialoguer l\'interface client avec les systèmes de réservation et de fidélité : l\'équipe d\'Accenture aurait eu du mal à comprendre ces systèmes anciens. Elle cite aussi le code de l\'interface, écrit avec le cadre Angular, que le remplaçant aurait jugé impossible à corriger et entièrement jeté. Le code du gestionnaire de contenu Adobe Experience Manager et le code Java sont décrits comme difficiles à maintenir. Une technologie appelée RAPID, recommandée par Accenture et achetée par Hertz, n\'aurait jamais été intégrée.',
                'La plainte ajoute des griefs de gestion. En pleine phase 2, Accenture aurait retiré des membres clés de l\'équipe, dont le responsable produit et l\'architecte des microservices, remplacés par des profils moins expérimentés. En décembre 2017, Accenture aurait promis que Hertz ne paierait pas le surcoût des retards, avant de chercher à le facturer. Hertz dit avoir fait évaluer le projet par un tiers, puis avoir fait entrer un nouveau prestataire en juin 2018. Sa réponse du 27 décembre 2019 aux demandes d\'Accenture précise qu\'il s\'agit d\'IBM, chargé d\'évaluer le travail livré puis de le terminer ou de le refaire avec d\'autres prestataires.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Sur quels points précis la plainte accusait-elle Accenture ?',
            'intro' => 'Les griefs ci-dessous viennent de la plainte du 19 avril 2019 et de la <a href="https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.23.0.pdf">plainte modifiée du 14 juin 2019</a>. Ce sont des allégations de Hertz, contestées par Accenture et jamais jugées sur le fond.',
            'items' => [
                ['titre' => 'Des spécifications non respectées', 'texte' => 'Le site devait être adaptatif, avec trois formats d\'écran : téléphone, tablette et ordinateur. Hertz affirme qu\'Accenture n\'en a livré que deux, sans le format tablette, et a demandé « des centaines de milliers de dollars » supplémentaires pour l\'ajouter.'],
                ['titre' => 'Une plateforme qui ne servait qu\'une marque', 'texte' => 'Les spécifications d\'architecture posaient l\'extensibilité comme « principe central » : un socle commun, décliné pour chaque marque par la configuration et la feuille de style. Hertz soutient que le code livré ne servait que la marque Hertz en Amérique du Nord, et qu\'Accenture l\'a décidé sans le dire.'],
                ['titre' => 'Des tests incomplets', 'texte' => 'Le cahier des prestations prévoyait des tests du code, des tests de charge et des tests de bout en bout. Hertz affirme que beaucoup de composants n\'ont pas été testés, que les tests se limitaient au « happy path », le parcours où tout se passe bien, et que des portions de code mises en commentaire faussaient les résultats.'],
                ['titre' => 'Des compétences surévaluées', 'texte' => 'La plainte modifiée oppose les promesses de la présentation commerciale (« 800 Experts ») à des développeurs qu\'elle décrit comme juniors, souvent situés à l\'étranger et peu familiers des technologies recommandées.'],
                ['titre' => 'Un guide de style inutilisable', 'texte' => 'Hertz voulait un guide de style interactif, où les développeurs copient composants et code. Il dit avoir reçu des versions PDF statiques, et une demande de paiement supplémentaire pour obtenir le format prévu.'],
                ['titre' => 'Un code à jeter', 'texte' => 'Selon Hertz, le code de l\'interface client présentait des failles de sécurité et des problèmes de performance tels que tout ce composant a été abandonné, et une part importante du reste était inutilisable.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que répondait Accenture, et que disait le contrat ?',
            'paragraphes' => [
                'Accenture a contesté dès le premier jour. À The Register, le 23 avril 2019, il déclarait que les accusations étaient « without merit », sans fondement, et qu\'il défendrait sa position. Dans son <a href="https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.30.0.pdf">mémoire du 15 juillet 2019</a>, il ajoute que chaque partie avait ses responsabilités, qu\'il « conteste fermement » les faits allégués et que la procédure aurait été déclenchée non par la qualité de son travail, mais par sa demande de paiement d\'honoraires impayés. Le 22 novembre 2019, il forme deux demandes reconventionnelles : violation d\'un engagement de ne pas le poursuivre, signé lors de la transition, et refus de payer ses dernières factures.',
                'Le même mémoire décrit un partage des rôles très différent du récit de Hertz. Selon Accenture, le cahier des prestations de la phase 2 lui confiait le code de l\'interface, le gestionnaire de contenu et la couche de microservices, tandis que Hertz gardait la préparation des environnements, les intégrations avec ses systèmes anciens via MuleSoft, la sécurité et les tests de recette. Le contenu du site, sans lequel aucune mise en ligne n\'était possible, était hors du périmètre d\'Accenture. Et le chef de projet de Hertz restait responsable de la coordination d\'ensemble, y compris des autres prestataires.',
                'Le contrat pesait lourd. Accenture rappelle qu\'il était payé en régie, au temps passé, et non au forfait : dans ce modèle, c\'est d\'abord le client qui paie le temps supplémentaire. Le contrat-cadre de 2004 excluait sa responsabilité pour les dommages indirects, comme les ventes perdues, et plafonnait sa responsabilité aux honoraires reçus pour la mission en cause ; toute action devait être engagée dans les deux ans. Hertz admet de son côté, dans sa réponse du 27 décembre 2019, qu\'Accenture avait accepté d\'annuler plusieurs millions de dollars d\'honoraires à cause des retards, et qu\'il avait lui-même suspendu le paiement des dernières factures.',
                'La <a href="https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.46.0.pdf">décision du 25 octobre 2019</a> a tranché un seul point. Hertz soutenait que la présentation commerciale l\'avait trompé. Le juge Pauley a estimé que des formules comme « 800 Experts » ou « The best talent in the world » relevaient de l\'exagération commerciale, sur laquelle une grande entreprise liée au prestataire depuis 2004 ne pouvait raisonnablement se fonder, et que les accusations sur RAPID et sur les tests n\'étaient pas assez précises. Ce volet a été rejeté définitivement. L\'action pour rupture de contrat a continué, et le juge a refusé de dire à ce stade si le plafond du contrat limitait l\'indemnisation.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qu\'est-ce qui est établi, et qu\'est-ce qui ne relève que des allégations ?',
            'texte' => 'Sont établis par les pièces publiques ou reconnus par les deux parties : le contrat-cadre de 2004, les phases, la mise en ligne visée en décembre 2017 puis repoussée à avril 2018, l\'arrêt de la mission en mai 2018, la fin du travail d\'Accenture le 28 juin 2018, l\'arrivée d\'IBM, les décisions du juge, l\'accord du 20 juillet 2021 et l\'abandon des poursuites le 9 août 2021. Les 32 et 10 millions de dollars sont des montants avancés par Hertz, non confirmés par Accenture dans les pièces consultées. Qualité du code, tests, compétences, extensibilité et format tablette restent des allégations que le procès n\'a jamais examinées. Le montant de l\'accord n\'est pas public.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Combien le projet a-t-il coûté, selon les pièces publiques ?',
            'items' => [
                ['valeur' => '32 M$', 'libelle' => 'Honoraires et frais que Hertz dit avoir versés à Accenture d\'août 2016 à mai 2018 (plainte du 19 avril 2019)', 'source' => 'Plainte de Hertz, tribunal fédéral de New York', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.1.0_1.pdf'],
                ['valeur' => '7 M$', 'libelle' => 'Coût de la phase 1, les plans, selon la plainte de 2019 ; plus de 26 millions pour la phase 2', 'source' => 'Plainte de Hertz, 19 avril 2019', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.1.0_1.pdf'],
                ['valeur' => '10 M$', 'libelle' => 'Dépenses supplémentaires que Hertz dit avoir engagées, au-delà de 10 millions, pour corriger et terminer le projet (plainte de 2019)', 'source' => 'Plainte de Hertz, 19 avril 2019', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.1.0_1.pdf'],
                ['valeur' => '2 reports', 'libelle' => 'Mise en ligne visée en décembre 2017, repoussée à janvier puis à avril 2018, jamais atteinte avec Accenture', 'source' => 'Décision du juge Pauley, 25 octobre 2019', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.46.0.pdf'],
                ['valeur' => '98 M$', 'libelle' => 'Coûts des programmes de transformation informatique et financière de Hertz en 2018, contre 53 millions en 2016 (tous projets confondus)', 'source' => 'Hertz, rapport annuel 2018 à la SEC', 'url' => 'https://www.sec.gov/Archives/edgar/data/1657853/000165785319000005/hghthc201810-k.htm'],
                ['valeur' => '28 mois', 'libelle' => 'Durée approximative de la procédure, du dépôt de la plainte le 19 avril 2019 à l\'abandon des poursuites le 9 août 2021, sans jugement sur le fond', 'source' => 'Ordonnance de clôture, tribunal fédéral de New York', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.110.0.pdf'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que pèsent ces chiffres pour Hertz, et que coûte un procès de ce type ?',
            'paragraphes' => [
                'Rapportés à l\'entreprise, les 32 millions de dollars restent modestes : environ 0,3 % des 9,504 milliards de dollars de chiffre d\'affaires de 2018, d\'après le rapport annuel de Hertz. Le coût réel est ailleurs. D\'abord le temps : en avril 2019, plus de deux ans après le lancement de la phase 2, Hertz écrivait encore dans sa plainte qu\'il prévoyait de déployer « prochainement » la nouvelle plateforme réalisée avec le remplaçant. Ensuite les ventes perdues, que la plainte chiffre en « millions de dollars » sans donner de montant, et que le contrat-cadre excluait justement de toute indemnisation selon Accenture.',
                'Le procès lui-même a mobilisé des moyens considérables. Le registre du tribunal montre des cabinets d\'avocats des deux côtés, une demande d\'Accenture pour faire passer de 10 à 20 le nombre de dépositions, rejetée en l\'état le 9 mars 2020, une citation à comparaître adressée à IBM, qui a dû fouiller les courriels de 24 personnes selon une ordonnance du 19 décembre 2019, et des discussions sur l\'examen électronique du code source en mai 2020. En novembre 2019, le juge a même ordonné à Hertz d\'ouvrir à cinq développeurs d\'Accenture l\'accès aux pages en ligne (« Live Pages ») : le code était devenu la pièce à conviction.',
                'Puis la pandémie a tout arrêté. Le 22 mai 2020, Hertz s\'est placé sous la protection du chapitre 11 du droit américain des faillites, expliquant dans son communiqué que l\'effet du Covid-19 sur la demande de voyages avait été « soudain et spectaculaire ». Accenture a déclaré sa créance le 13 octobre 2020. Le plan de réorganisation de Hertz a été confirmé le 10 juin 2021 et est entré en vigueur le 30 juin 2021 ; l\'accord avec Accenture a suivi, approuvé par le tribunal des faillites le 20 juillet 2021. La lettre commune du 5 août 2021 indique qu\'une somme devait être versée à Hertz dans les trente jours, sans en donner le montant.',
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Qu\'est-ce qui aurait pu éviter l\'impasse ?',
            'options'  => ['Ce qui a été fait, selon les pièces', 'Ce qui aurait réduit le risque'],
            'criteres' => [
                ['critere' => 'Choix du prestataire', 'valeurs' => ['Sélection après un appel d\'offres et une présentation d\'une journée avec démonstration ; promesses générales jugées « exagération commerciale » par le juge', 'Exiger des preuves vérifiables : projets comparables en production, noms et CV des personnes affectées, essai payant sur un petit lot avant l\'engagement principal']],
                ['critere' => 'Contrat', 'valeurs' => ['Contrat-cadre de 2004, signé pour d\'autres missions, complété par des lettres d\'intention et des cahiers des prestations', 'Un contrat propre au projet, avec critères d\'acceptation, pénalités ou retenues liées aux livraisons, et plafond de responsabilité négocié pour ce projet']],
                ['critere' => 'Mode de paiement', 'valeurs' => ['Régie au temps passé, selon Accenture ; désaccord sur qui paie le surcoût des reports', 'Paiement par livraison acceptée, ou régie plafonnée par lot, avec arrêt possible à chaque étape']],
                ['critere' => 'Découpage', 'valeurs' => ['Une seule phase de construction, visant la mise en ligne du site et des applications en décembre 2017', 'Des livraisons courtes mises en ligne une à une, par exemple la réservation sur une seule marque, pour mesurer l\'avancement réel']],
                ['critere' => 'Spécifications', 'valeurs' => ['Exigences écrites (trois formats d\'écran, extensibilité multimarque) dont l\'application est contestée', 'Exigences transformées en tests d\'acceptation vérifiés à chaque livraison, avec arbitrage écrit de tout écart']],
                ['critere' => 'Tests', 'valeurs' => ['Tests réalisés par le prestataire, jugés insuffisants par Hertz ; tests de recette à la charge de Hertz selon Accenture', 'Tests de recette du client dès la première livraison, sur des parcours réels et des cas d\'erreur, avec rapports conservés']],
                ['critere' => 'Maîtrise du code', 'valeurs' => ['Qualité du code découverte après l\'éviction, lors de l\'audit d\'IBM', 'Accès permanent au dépôt de code, revue indépendante dès les premiers mois, documentation et transfert de connaissances prévus au contrat']],
                ['critere' => 'Équipe', 'valeurs' => ['Départ en cours de route de profils clés, dont l\'architecte, selon la plainte', 'Personnes clés nommées au contrat, remplacement soumis à accord du client et à période de recouvrement']],
            ],
            'verdict'  => 'Aucune de ces mesures ne garantit le succès, mais chacune aurait fait apparaître plus tôt l\'écart entre ce qui était payé et ce qui fonctionnait, à un moment où il coûtait encore peu de changer de cap.',
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Quelle leçon retenir en une phrase ?',
            'texte' => 'Une refonte ne se juge ni sur la réputation du prestataire ni sur les heures facturées, mais sur ce qui fonctionne en production : découpez le projet en livraisons que vous pouvez tester, gardez l\'accès au code et aux livrables à chaque étape, et payez ce qui est accepté plutôt que le temps passé.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi une histoire de multinationale concerne-t-elle une PME de Cotonou ou de Lyon ?',
            'paragraphes' => [
                'Hertz a pu absorber l\'échec : l\'entreprise a changé de prestataire, poursuivi son projet et plaidé pendant plus de deux ans face à un groupe mondial du conseil. Une PME de Cotonou, d\'Abidjan, de Dakar, de Lomé, de Douala ou de Lyon n\'a pas ces réserves. Quand le site de réservation d\'un hôtel, la boutique en ligne d\'un distributeur ou l\'application d\'une école n\'arrive pas, ou arrive inutilisable, c\'est souvent le budget numérique de l\'année qui disparaît, et un procès contre le prestataire peut coûter plus cher et durer plus longtemps que le projet lui-même.',
                'Le mécanisme, lui, est le même à toutes les échelles. Un prestataire est choisi sur une présentation séduisante. Le contrat renvoie à des documents généraux. Le paiement suit le temps passé ou des acomptes fixes, sans lien avec ce qui fonctionne. Le client ne voit pas le code avant la fin et découvre les défauts quand il est trop tard pour changer de cap sans tout perdre. Les reports s\'enchaînent, chacun présenté comme le dernier. Chacune de ces étapes peut se reconnaître et se corriger dans un projet de 300 000 francs CFA comme dans un projet de 30 millions de dollars.',
                'L\'affaire montre aussi que le droit protège moins qu\'on ne le croit. Hertz, avec ses moyens, a vu son principal argument de tromperie écarté parce que les promesses de la présentation étaient trop générales pour engager le prestataire, et son indemnisation était menacée par un plafond signé douze ans plus tôt pour d\'autres missions. Pour une petite entreprise, la protection efficace se construit avant la signature et pendant le projet, pas au tribunal. En France, par exemple, l\'<a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278958">article L131-3 du Code de la propriété intellectuelle</a> exige que chaque droit cédé soit mentionné distinctement dans l\'acte de cession : sans clause écrite, le code payé n\'appartient pas forcément au client.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels signaux d\'alerte une PME doit-elle surveiller pendant un projet ?',
            'intro' => 'Chacun de ces signaux apparaît dans le dossier Hertz, sous forme d\'allégation ou de fait reconnu. Pris isolément, aucun n\'est une preuve d\'échec ; deux ou trois ensemble doivent déclencher une revue du projet.',
            'items' => [
                ['titre' => 'Une date de mise en ligne qui glisse', 'texte' => 'Le premier report de Hertz a été annoncé trois mois avant l\'échéance, le second peu après. Un report n\'est pas grave en soi ; un deuxième sans plan de rattrapage écrit l\'est.'],
                ['titre' => 'Rien de visible à tester', 'texte' => 'Si, après plusieurs mois, vous ne pouvez rien manipuler vous-même sur un serveur de test, vous ne savez pas où en est le projet. Les rapports d\'avancement ne remplacent pas une démonstration sur vos propres cas.'],
                ['titre' => 'Des personnes clés qui partent', 'texte' => 'La plainte de Hertz cite le départ du responsable produit et de l\'architecte. Quand celui qui a conçu le système s\'en va, une partie de la connaissance part avec lui si rien n\'est documenté.'],
                ['titre' => 'Des suppléments pour ce qui était prévu', 'texte' => 'Hertz dit avoir reçu des demandes de paiement pour le format tablette et le guide de style. Un supplément pour une exigence écrite au départ signale un désaccord sur le périmètre, à régler immédiatement par écrit.'],
                ['titre' => 'Une technologie que l\'équipe découvre', 'texte' => 'Angular et RAPID sont cités par Hertz comme des difficultés. Demandez qui, dans l\'équipe, a déjà livré un projet en production avec l\'outil proposé, et où le voir.'],
                ['titre' => 'Pas d\'accès au code', 'texte' => 'Hertz n\'a mesuré l\'état du code qu\'après l\'audit d\'IBM. Si le dépôt de code n\'est pas accessible au client dès le premier mois, la qualité reste invisible jusqu\'à la fin.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que coûte une décision prise à temps, comparée à une décision tardive ?',
            'legende' => 'Comparaison qualitative fondée sur le déroulé du projet Hertz ; aucun montant n\'est avancé, car il dépend de chaque projet.',
            'entetes' => ['Situation', 'Décision prise à temps', 'Ce qu\'elle coûte', 'Décision tardive', 'Ce qu\'elle coûte'],
            'lignes'  => [
                ['Premier report annoncé', 'Revue du projet et nouveau plan découpé en lots, avec une première livraison testable', 'Quelques jours de travail et une discussion franche', 'Accepter le report sans changer de méthode', 'Un deuxième report, puis un troisième, payés au temps passé'],
                ['Exigence ignorée (format d\'écran, fonction métier)', 'Constat écrit et correction dans le lot en cours', 'Le prix de la fonction, prévu au départ', 'Découverte à la recette finale', 'Un supplément, une dispute sur le périmètre ou une reprise complète'],
                ['Doute sur la qualité du code', 'Revue indépendante d\'un échantillon dès les premières semaines', 'Une revue ciblée de quelques jours', 'Audit après rupture, comme l\'audit d\'IBM chez Hertz', 'Une partie du code jetée, à payer une seconde fois'],
                ['Départ d\'une personne clé', 'Remplacement validé, période de recouvrement, documentation à jour', 'Le temps de transmission', 'Remplacement subi sans transmission', 'Des semaines de redécouverte et des erreurs de conception'],
                ['Projet en échec', 'Arrêt à la fin d\'un lot, code et documentation récupérés', 'Le dernier lot, au pire', 'Arrêt après des mois de reports, puis contentieux', 'Le budget, le temps perdu et des frais de procédure'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi cela ressemble-t-il dans une PME d\'Afrique francophone ou d\'Europe ?',
            'items' => [
                ['secteur' => 'Hôtellerie, Cotonou', 'probleme' => 'Un hôtel commande un site avec réservation en ligne et paiement mobile, payé à 50 % à la commande et 50 % à la livraison, sans cahier des charges détaillé.', 'solution' => 'Découper en trois lots (vitrine, réservation, paiement), payer chaque lot à sa mise en ligne de test, avec un accès administrateur et au code dès le premier lot.'],
                ['secteur' => 'Distribution, Abidjan', 'probleme' => 'Un distributeur veut une boutique en ligne reliée à son stock ; le prestataire promet tout pour une date unique, trois mois plus tard.', 'solution' => 'Exiger un premier lot en ligne au bout de quelques semaines, par exemple le catalogue, et des critères d\'acceptation écrits pour la synchronisation du stock.'],
                ['secteur' => 'Éducation, Dakar', 'probleme' => 'Une école privée fait développer une application pour les parents ; le développeur principal quitte l\'équipe à mi-parcours.', 'solution' => 'Prévoir au contrat le nom des personnes clés, la documentation au fil de l\'eau et la remise du code source à chaque lot, pour qu\'un autre développeur puisse reprendre.'],
                ['secteur' => 'Logistique, Lomé et Douala', 'probleme' => 'Une société de transit refond son application de suivi des dossiers ; le prestataire facture au temps passé sans plafond.', 'solution' => 'Passer à un budget plafonné par lot, avec arrêt possible à la fin de chaque lot sans pénalité et récupération des livrables.'],
                ['secteur' => 'Services, Lyon', 'probleme' => 'Une PME confie la refonte de son site à une agence ; le contrat ne parle ni de propriété du code ni de réversibilité.', 'solution' => 'Ajouter une clause de cession des droits conforme à l\'article L131-3, l\'accès au dépôt de code et un plan de réversibilité en cas de changement de prestataire.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Comment éviter la même erreur avant et pendant votre projet ?',
            'items' => [
                'Écrire les besoins en phrases vérifiables (formats d\'écran, parcours, volumes, langues, marques) et les joindre au contrat, plutôt que de renvoyer à des documents généraux.',
                'Demander au prestataire deux ou trois projets comparables en production, avec un contact client joignable, et ne pas se contenter d\'une présentation.',
                'Faire nommer au contrat les personnes clés, et soumettre leur remplacement à votre accord.',
                'Découper le projet en lots de quelques semaines, chacun livré sur un serveur de test que vous pouvez manipuler.',
                'Lier les paiements aux lots acceptés, ou plafonner la régie par lot, avec la possibilité d\'arrêter à la fin de chaque lot.',
                'Rédiger pour chaque lot des critères d\'acceptation et les tester vous-même, y compris les erreurs de saisie et les paiements refusés.',
                'Obtenir dès le premier mois un accès au dépôt de code, aux serveurs, aux noms de domaine et aux comptes des services tiers, à votre nom.',
                'Prévoir par écrit la cession des droits sur le code et les livrables, la documentation et un plan de réversibilité.',
                'Faire relire un échantillon du code par un regard indépendant dans les premières semaines.',
                'Traiter par écrit chaque demande de supplément : prévu au départ ou nouveau, avant d\'accepter.',
                'Au deuxième report, organiser une revue du projet et décider : continuer avec un nouveau plan, réduire le périmètre ou arrêter.',
                'Vérifier dans le contrat le plafond de responsabilité, les exclusions et le délai pour agir, avant qu\'un litige ne les rende décisifs.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Richard aide-t-il une PME à cadrer et à garder la main sur son projet ?',
            'paragraphes' => [
                'Richard SALANON est consultant en digitalisation et développeur logiciel, basé à Cotonou, au Bénin. Il crée des sites, des applications web et mobiles, des automatisations et des intégrations d\'intelligence artificielle, déploie Odoo et Dolibarr, et forme les équipes à ces outils, pour des entreprises d\'Afrique francophone, d\'Europe et du Canada.',
                'Avant tout développement, l\'<a href="/services/audit-etude-de-projet">audit et étude de projet</a> sert à écrire les besoins en exigences vérifiables, à découper le projet en lots et à estimer chacun, que vous confiiez ensuite le travail à Richard ou à un autre prestataire. Pour une entreprise qui a déjà un site ou une application, la <a href="/services/refonte-migration-de-site">refonte et migration de site</a> commence par un état des lieux de l\'existant : contenus, référencement, accès, code, pour qu\'aucune donnée ni aucun accès ne se perde au passage.',
                'Pour les projets eux-mêmes, qu\'il s\'agisse d\'un <a href="/services/site-vitrine-professionnel">site vitrine professionnel</a> ou d\'une <a href="/services/application-web-sur-mesure">application web sur mesure</a>, la méthode suit les leçons de cette histoire : des lots courts livrés sur un serveur de test, des critères d\'acceptation écrits avec vous, un dépôt de code et des accès ouverts à votre nom dès le début, et une documentation remise à chaque étape. Vous pouvez à tout moment montrer le code à un autre développeur ou changer de prestataire.',
                'Richard ne promet ni délai ni résultat avant d\'avoir étudié votre cas, et il vous dira si votre projet gagne à être réduit, reporté ou confié à quelqu\'un d\'autre. Pour mieux connaître son parcours, consultez la page <a href="/richard-salanon">Richard SALANON</a> ; pour d\'autres récits de transformations numériques, réussies ou manquées, parcourez les <a href="/histoires/">histoires</a>.',
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous voulez faire vérifier votre projet avant de signer ou de payer le prochain lot ?',
            'texte'  => 'Envoyez votre cahier des charges, le devis ou le contrat de votre prestataire, et l\'état d\'avancement : vous recevez un diagnostic qui indique les risques, ce qu\'il faut préciser par écrit et comment découper la suite.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un diagnostic'],
        ],
    ],

    'faq' => [
        ['q' => 'Pourquoi Hertz a-t-il poursuivi Accenture ?', 'r' => 'Hertz reprochait à Accenture de n\'avoir jamais livré un site et des applications utilisables après avoir reçu, selon la plainte du 19 avril 2019, plus de 32 millions de dollars d\'honoraires et de frais. La mise en ligne prévue en décembre 2017 avait été repoussée deux fois, et Hertz avait écarté Accenture en mai 2018.'],
        ['q' => 'Combien Hertz réclamait-il ?', 'r' => 'La plainte ne fixait pas un montant unique. Hertz demandait le remboursement des sommes versées, plus de 32 millions de dollars, le coût de la reprise du projet, plus de 10 millions de dollars selon lui, et réparation de ses ventes perdues, sans les chiffrer. Accenture soutenait que le contrat excluait les dommages indirects et plafonnait sa responsabilité.'],
        ['q' => 'Accenture a-t-il été condamné ?', 'r' => 'Non. Aucun jugement sur le fond n\'a été rendu. Le juge a seulement rejeté, le 25 octobre 2019, le volet fondé sur la loi de Floride contre les pratiques trompeuses. L\'affaire s\'est terminée par un accord approuvé le 20 juillet 2021 et l\'abandon des poursuites le 9 août 2021, chaque partie gardant ses frais.'],
        ['q' => 'Quel était le montant de l\'accord entre Hertz et Accenture ?', 'r' => 'Il n\'a pas été rendu public dans les pièces consultées. La lettre commune du 5 août 2021 indique seulement qu\'une somme devait être versée à Hertz dans les trente jours suivant l\'approbation, et que l\'accord réglait aussi des réclamations liées à d\'autres contrats entre les deux entreprises.'],
        ['q' => 'Que répondait Accenture aux accusations ?', 'r' => 'Accenture les jugeait sans fondement. Il soutenait que chaque partie avait ses responsabilités, que Hertz gardait notamment les intégrations avec ses systèmes anciens, la sécurité et les tests de recette, et que la procédure faisait suite à sa demande de paiement de factures impayées. Il a formé deux demandes reconventionnelles le 22 novembre 2019.'],
        ['q' => 'Pourquoi le juge a-t-il écarté l\'argument de tromperie ?', 'r' => 'Parce que les promesses citées par Hertz, comme « 800 Experts » ou « The best talent in the world », relevaient selon lui de l\'exagération commerciale, sur laquelle une entreprise avertie ne peut pas raisonnablement s\'appuyer. Les accusations sur la technologie RAPID et sur les tests ont été jugées trop imprécises.'],
        ['q' => 'Qui a terminé le site et les applications de Hertz ?', 'r' => 'Hertz a fait entrer un nouveau prestataire en juin 2018. Dans sa réponse du 27 décembre 2019, il reconnaît avoir confié à IBM l\'évaluation du travail d\'Accenture, puis avoir fait appel à d\'autres prestataires, dont IBM, pour terminer ou refaire ce qui manquait.'],
        ['q' => 'La faillite de Hertz en 2020 est-elle liée à ce projet ?', 'r' => 'Rien dans les pièces consultées ne l\'indique. Hertz a expliqué sa demande de protection du 22 mai 2020 par l\'effondrement des voyages lié au Covid-19. La faillite a en revanche suspendu le procès le 17 juillet 2020, et l\'accord avec Accenture a été approuvé par le tribunal des faillites.'],
        ['q' => 'Une PME doit-elle préférer le forfait à la régie ?', 'r' => 'Ni l\'un ni l\'autre ne protège seul. Le forfait fixe le prix mais pousse à discuter chaque écart de périmètre ; la régie s\'adapte mais fait porter au client le temps supplémentaire. Le plus sûr est de découper en lots courts, de plafonner chaque lot et de ne payer que ce qui a été testé et accepté.'],
        ['q' => 'Comment garder la main sur le code produit par un prestataire ?', 'r' => 'En l\'écrivant dans le contrat : cession des droits sur le code et les livrables, accès au dépôt de code et aux serveurs à votre nom dès le premier mois, documentation à chaque lot et plan de réversibilité. En France, l\'article L131-3 du Code de la propriété intellectuelle exige que chaque droit cédé soit mentionné distinctement.'],
    ],

    'sources' => [
        ['titre' => 'Plainte de The Hertz Corporation contre Accenture LLP, tribunal fédéral du district sud de New York, affaire 1:19-cv-03508, 19 avril 2019', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.1.0_1.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Plainte modifiée de Hertz contre Accenture, 14 juin 2019', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.23.0.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Mémoire d\'Accenture LLP à l\'appui de sa demande de rejet partiel, 15 juillet 2019', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.30.0.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Décision du juge William H. Pauley III (Memorandum and Order), 25 octobre 2019', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.46.0.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Réponse de Hertz aux demandes reconventionnelles d\'Accenture, 27 décembre 2019', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.76.0.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Rapport commun d\'étape sur la procédure de faillite, 19 octobre 2020', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.98.0.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Rapport commun d\'étape annonçant la demande d\'approbation de l\'accord, 7 juillet 2021', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.104.0.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Lettre commune au juge Paul G. Gardephe sur l\'accord approuvé, 5 août 2021', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.107.0.pdf', 'date' => '2026-10-03'],
        ['titre' => 'Ordonnance d\'abandon des poursuites avec effet définitif, 9 août 2021', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.110.0.pdf', 'date' => '2026-10-03'],
        ['titre' => 'CourtListener, registre complet de l\'affaire Hertz Corporation v. Accenture LLP', 'url' => 'https://www.courtlistener.com/docket/14970217/hertzcorporation-v-accenture-llp/', 'date' => '2026-10-03'],
        ['titre' => 'The Register, « Accenture sued over website redesign so bad it Hertz », 23 avril 2019', 'url' => 'https://www.theregister.com/2019/04/23/hertz_accenture_lawsuit', 'date' => '2026-10-03'],
        ['titre' => 'Adweek, « Hertz Sues Accenture for Breach of Contract Over Seriously Deficient Web Design Work », avril 2019', 'url' => 'https://www.adweek.com/agencies/hertz-sues-accenture-for-breach-of-contract-over-seriously-deficient-web-design-work/', 'date' => '2026-10-03'],
        ['titre' => 'Adweek, « Hertz vs. Accenture Case Will Likely Last Into 2020 », juin 2019', 'url' => 'https://www.adweek.com/agencyspy/hertz-vs-accenture-case-will-likely-last-into-2020/', 'date' => '2026-10-03'],
        ['titre' => 'Auto Rental News, « Hertz Files $32M Lawsuit Against Consulting Agency », 29 avril 2019', 'url' => 'https://www.autorentalnews.com/news/hertz-files-32m-lawsuit-against-consulting-agency', 'date' => '2026-10-03'],
        ['titre' => 'Hertz Global Holdings, rapport annuel 2018 (formulaire 10-K) déposé auprès de la SEC', 'url' => 'https://www.sec.gov/Archives/edgar/data/1657853/000165785319000005/hghthc201810-k.htm', 'date' => '2026-10-03'],
        ['titre' => 'Hertz Global Holdings, communiqué du 22 mai 2020 sur la demande de protection du chapitre 11 (SEC, pièce 99.1)', 'url' => 'https://www.sec.gov/Archives/edgar/data/1657853/000110465920065674/tm2020858d1_ex99-1.htm', 'date' => '2026-10-03'],
        ['titre' => 'Légifrance, article L131-3 du Code de la propriété intellectuelle', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278958', 'date' => '2026-10-03'],
    ],

    'liens' => [
        'services'    => ['audit-etude-de-projet', 'application-web-sur-mesure', 'site-vitrine-professionnel', 'refonte-migration-de-site'],
        'comparatifs' => [],
    ],
];
