<?php
// ============================================================
// data/formations/gestion-projet-agile.php · Fiche formation « Gestion de
// projet IT agile » (vague 1B, lot B, domaine cybersecurite-it).
// Angle propre : mener un projet numérique par itérations du côté du client
// (commanditaire, référent, lots, backlog, priorisation, revue de chaque
// livraison, recette, contrat au forfait par lots ou en régie, changements).
// Sœurs non traitées : chef-de-projet-digital (métier de chef de projet et de
// product owner), outils-collaboratifs (organisation du travail d'équipe),
// adoption-erp, conduite-du-changement, cloud-hebergement,
// securite-donnees-dirigeants. L'étude avant contrat relève du pilier
// audit-etude-de-projet. Aucune ancienne page.
// Sources lues le 05/10/2026 : Scrum Guide 2020 (versions anglaise et
// française), Manifeste agile et ses douze principes, plainte de Hertz et
// mémoire d'Accenture (CourtListener), communiqué de la FCA sur TSB, pages de
// tarifs de Jira, d'Azure DevOps et de GitHub (navigateur), DataReportal
// (Bénin 2026), CNIL (RGPD, chapitre 4), loi n° 2017-20 (articles 426 et 428,
// PDF du SGG), FDFP, décret FODEFCA, 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation gestion de projet IT agile : piloter un projet numérique côté client, du découpage en lots à la recette de chaque livraison',
    'title'   => 'Formation gestion de projet IT agile | Richard SALANON',
    'meta'    => 'Piloter un projet numérique côté client par itérations : rôles, lots, backlog, revue de chaque livraison, recette, forfait ou régie. Formation sur devis.',
    'en_bref' => 'Cette formation apprend à l\'organisation qui commande un site, une application ou un logiciel à piloter son projet par livraisons courtes : nommer un commanditaire et un référent, transformer le besoin en backlog ordonné, découper en lots utilisables, revoir et recetter chaque livraison, choisir entre forfait par lots et régie, et traiter les demandes de changement sans dérive. Elle s\'adresse aux chefs de projet côté client, aux responsables métier et aux dirigeants qui confient un développement à un prestataire, et se déroule sur deux jours en quatre demi-journées, suivis d\'une revue accompagnée de deux heures sur votre projet réel. Le prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'cybersecurite-it',
    'forte'   => false,
    'duree'   => 'Deux jours en quatre demi-journées, puis une revue accompagnée de 2 h sur votre projet',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : ce que change un projet mené par itérations pour celui qui le commande',
            'duree'  => '3 h 30',
            'points' => [
                'Tour de table : le projet de chaque participant, son prestataire, son échéance, et ce qui l\'inquiète déjà.',
                'L\'effet tunnel : pourquoi un projet livré en une seule fois, au bout de plusieurs mois, révèle ses écarts quand il est trop tard pour les corriger à bas coût.',
                'Ce que disent vraiment le Manifeste agile de 2001 et le Scrum Guide de novembre 2020, et ce qu\'ils ne disent pas : ce sont des textes de travail pour l\'équipe qui réalise, pas des clauses de contrat.',
                'Les rôles à tenir chez le client : commanditaire, référent du projet, utilisateurs clés, référent technique, et la correspondance avec les rôles du prestataire.',
                'Le temps à réserver, semaine par semaine, et ce qui arrive quand le référent n\'a « pas le temps ».',
                'Exercice : la carte des rôles de votre projet, avec un nom et un nombre d\'heures par semaine en face de chaque rôle.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : du besoin au backlog, et du backlog aux lots',
            'duree'  => '3 h 30',
            'points' => [
                'L\'objectif du projet en une phrase, et les deux ou trois indicateurs qui diront s\'il est atteint.',
                'Écrire des éléments de backlog que le prestataire peut chiffrer et que le client peut vérifier : un utilisateur, une action, un bénéfice, des critères d\'acceptation.',
                'Découper en tranches qui traversent tout le logiciel, de l\'écran à la base de données, plutôt qu\'en couches techniques invisibles pour l\'utilisateur.',
                'Le premier lot utilisable : la plus petite version que de vrais utilisateurs peuvent employer pour un vrai travail.',
                'Ordonner sans tricher : valeur, risque, dépendances, obligations légales ; une seule liste, un seul ordre, aucun ex æquo.',
                'Exercice : construire le backlog de votre projet, l\'ordonner, puis tracer la frontière des trois premiers lots.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : contrat, revue de chaque livraison et recette',
            'duree'  => '3 h 30',
            'points' => [
                'Forfait global, forfait par lots ou régie : ce que chaque formule fait porter au client et au prestataire.',
                'Les clauses qui rendent un contrat compatible avec des livraisons courtes : périmètre et prix par lot, droit d\'arrêter après chaque lot, code et comptes au nom du client, définition commune de « terminé ».',
                'Préparer une revue : ce que le prestataire doit montrer, sur quelles données, devant qui.',
                'Conduire la recette d\'une livraison : environnement de test, jeux de données anonymisés, scénarios, classement des anomalies, délai de réponse du client.',
                'Accepter, accepter avec réserves ou refuser, et l\'écrire le jour même.',
                'Exercice : revue simulée d\'une livraison volontairement incomplète, que les participants doivent détecter et refuser sans rompre la relation.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : changements, indicateurs et décisions difficiles',
            'duree'  => '3 h 30',
            'points' => [
                'Traiter une demande de changement : l\'échanger contre un élément de même taille, la reporter au lot suivant, ou la chiffrer en supplément.',
                'Le registre des décisions : une ligne par arbitrage, avec la date, l\'auteur et la conséquence sur le budget ou le délai.',
                'Suivre l\'avancement sur ce qui est accepté, pas sur ce qui est « presque fini » : lots acceptés, anomalies ouvertes, budget consommé.',
                'Reconnaître les signaux d\'alerte : deux reports successifs, démonstrations sans données réelles, livraisons jamais testées par les utilisateurs.',
                'Mettre en service par étapes et garder un chemin de retour, plutôt que tout basculer en une fois.',
                'Exercice : comité de pilotage simulé sur un projet en retard, avec trois options chiffrées à trancher : continuer, réduire ou arrêter.',
            ],
        ],
        [
            'titre'  => 'Pendant votre projet : revue accompagnée',
            'duree'  => '2 h, sur place ou à distance',
            'points' => [
                'Présence lors d\'une revue réelle de livraison avec votre prestataire, ou relecture de son enregistrement et de son compte rendu.',
                'Retour au référent : préparation, questions posées, décision prise, trace écrite.',
                'Mise à jour du backlog, du registre des décisions et de la grille de recette à partir de ce qui a été observé.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => 'Deux jours en quatre demi-journées, puis une revue accompagnée de 2 h'],
        ['l' => 'Public', 'v' => 'Chefs de projet côté client, responsables métier, dirigeants qui commandent un développement'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire à la fin de la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Une entreprise qui fait développer un site, une application ou un logiciel de gestion croit souvent que son travail s\'arrête à la signature. Le prestataire disparaît quelques semaines, revient avec un écran de démonstration, puis annonce une date de mise en ligne qui recule. Le jour de la livraison, les utilisateurs découvrent un outil qui ne correspond pas à leur façon de travailler, et chacun accuse l\'autre de ne pas avoir compris. Cette formation part d\'un constat simple : le client tient la moitié du projet. C\'est lui qui connaît le métier, qui tranche les priorités et qui seul peut dire si une livraison fait le travail attendu.',
                'À la fin des deux jours, le participant sait faire six choses, vérifiées sur son propre projet. Désigner les rôles côté client et le temps que chacun y consacre. Transformer un besoin en backlog ordonné, dont chaque élément porte ses critères d\'acceptation. Découper ce backlog en lots livrables, le premier étant utilisable seul. Préparer et conduire la revue d\'une livraison, puis l\'accepter ou la refuser par écrit. Lire un contrat au forfait par lots ou en régie et repérer ce qui y manque. Enfin, traiter une demande de changement sans faire exploser le budget ni le calendrier.',
                'La formation ne fait pas du participant un chef de projet de métier ni un product owner professionnel : la posture, la vision produit sur plusieurs années et l\'animation d\'une équipe de développement relèvent de la formation Chef de projet digital et product owner. Elle n\'apprend pas non plus à rédiger le cahier des charges complet ni à chiffrer un projet avant consultation : cette étude préalable fait l\'objet d\'une mission d\'<a href="/services/audit-etude-de-projet">audit et d\'étude de projet</a>. Le choix d\'un hébergement, les sauvegardes et les droits d\'accès ont leurs propres formations dans le domaine, et l\'adoption d\'un ERP par les équipes la sienne.',
                'Elle ne dépend d\'aucun outil ni d\'aucune méthode imposée au prestataire. Celui-ci peut travailler en Scrum, en Kanban, en cycle en V ou sans méthode déclarée : le client garde les mêmes leviers, à savoir un ordre de priorité écrit, des livraisons fréquentes qu\'il examine lui-même, et le droit de dire non à ce qui n\'est pas terminé. Les références au Scrum Guide et au Manifeste agile servent à comprendre le vocabulaire du prestataire, pas à transformer l\'entreprise cliente en équipe de développement.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quel niveau, et que faut-il apporter ?',
            'intro' => 'Le public se définit par une situation : quelqu\'un, dans l\'organisation, doit faire aboutir un projet numérique confié à un prestataire extérieur ou à une petite équipe interne, sans en être lui-même le développeur.',
            'items' => [
                ['titre' => 'Le référent du projet côté client', 'texte' => 'Responsable administratif, chargé de programme, responsable commercial ou assistante de direction à qui l\'on a confié « le projet du site » en plus de son travail. C\'est le premier public, celui qui suit les quatre demi-journées et la revue accompagnée.'],
                ['titre' => 'Le commanditaire', 'texte' => 'Dirigeant, directeur ou coordinateur qui signe le contrat et tranche quand le budget ou le délai sont en jeu. Il suit au moins le premier matin et l\'après-midi du jour 2, où l\'on simule le comité de pilotage : ses arbitrages ne se délèguent pas.'],
                ['titre' => 'Les utilisateurs clés', 'texte' => 'Deux ou trois personnes qui utiliseront l\'outil tous les jours et testeront chaque livraison : une caissière, un agent de terrain, une comptable. Leur présence le matin du jour 2, consacré à la recette, rend les exercices beaucoup plus justes.'],
                ['titre' => 'Le référent technique, s\'il existe', 'texte' => 'Informaticien interne ou prestataire de maintenance. Il apporte le regard sur l\'hébergement, les comptes et l\'exploitation, sans prendre la place du référent métier dans l\'ordre des priorités.'],
                ['titre' => 'Niveau et prérequis', 'texte' => 'Aucune connaissance en développement n\'est demandée. Il faut un projet numérique en cours ou prévu, même au stade de l\'idée, et l\'accord de la direction pour y travailler pendant la formation.'],
                ['titre' => 'Documents à apporter', 'texte' => 'Tout ce qui existe sur le projet : note d\'intention, cahier des charges, devis ou contrat du prestataire, planning annoncé, maquettes, échanges importants. S\'il n\'existe qu\'une idée, une page qui décrit le problème à résoudre et les utilisateurs concernés suffit.'],
                ['titre' => 'Matériel', 'texte' => 'Un ordinateur par participant ou par binôme, avec un tableur, et un accès à l\'outil de suivi du prestataire quand il en utilise un. Les cartes, les post-it et un mur libre servent autant que les écrans pour découper un backlog à plusieurs.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels rôles tenir côté client, et combien de temps y consacrer ?',
            'legende' => 'Répartition travaillée le premier matin. Les temps sont des ordres de grandeur pour une PME qui fait développer un outil de taille moyenne ; ils s\'ajustent à votre projet pendant l\'exercice, et sont écrits dans le contrat quand le prestataire en dépend.',
            'entetes' => ['Rôle côté client', 'Ce qu\'il décide', 'Ce qu\'il fait à chaque livraison', 'Temps à prévoir'],
            'lignes'  => [
                ['Commanditaire', 'Budget, délai, arrêt ou poursuite du projet, arbitrage final entre deux services', 'Lit le compte rendu de la revue, tranche les écarts que le référent ne peut pas trancher seul', 'Une heure par livraison, plus les comités de pilotage'],
                ['Référent du projet', 'L\'ordre du backlog, le contenu de chaque lot, l\'acceptation ou le refus d\'une livraison', 'Prépare la revue, y assiste, organise la recette, écrit la décision', 'Une à deux demi-journées par semaine pendant toute la durée du projet'],
                ['Utilisateurs clés', 'Rien seuls ; ils éclairent les décisions du référent', 'Testent la livraison sur des cas réels, signalent les anomalies avec captures et étapes', 'Quelques heures par livraison, regroupées sur deux ou trois jours'],
                ['Référent technique', 'Les exigences d\'exploitation : hébergement, sauvegardes, comptes, sécurité', 'Vérifie que le code, les accès et la documentation de la livraison sont bien remis', 'Une heure par livraison, davantage avant la mise en service'],
                ['Direction juridique ou achats', 'La forme du contrat, les avenants, les clauses de propriété et de données personnelles', 'Valide les avenants issus des demandes de changement', 'Ponctuel, surtout au début et lors des changements de périmètre'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur leur propre projet ?',
            'items' => [
                ['titre' => 'L\'objectif en une phrase', 'duree' => '30 minutes, jour 1', 'texte' => 'Chacun écrit pourquoi le projet existe, pour qui, et comment on saura qu\'il a réussi dans six mois. Les phrases sont lues à voix haute ; celles qui décrivent une solution (« avoir une application ») au lieu d\'un résultat (« réduire de moitié les appels pour suivre une commande ») sont réécrites ensemble.'],
                ['titre' => 'La carte des rôles', 'duree' => '45 minutes, jour 1', 'texte' => 'Sur une feuille, les rôles côté client et côté prestataire, avec un nom et un temps hebdomadaire. Les cases vides apparaissent vite : souvent, personne n\'est désigné pour tester, ou le commanditaire et le référent sont la même personne débordée.'],
                ['titre' => 'Le backlog sur le mur', 'duree' => '1 h 30, jour 1', 'texte' => 'Les besoins du projet, tirés du cahier des charges ou de la note d\'intention, deviennent des cartes : un utilisateur, une action, un bénéfice. Chaque carte reçoit deux ou trois critères d\'acceptation. Les cartes trop grosses sont coupées jusqu\'à tenir dans une livraison.'],
                ['titre' => 'L\'ordre et les lots', 'duree' => '1 h, jour 1', 'texte' => 'Les cartes sont rangées en une seule colonne, de la plus importante à la moins importante. Le groupe trace ensuite la frontière du premier lot, celui qu\'un vrai utilisateur peut employer seul, puis des deux suivants.'],
                ['titre' => 'La lecture du contrat', 'duree' => '45 minutes, jour 2', 'texte' => 'Sur le devis ou le contrat du prestataire, quand il existe, chaque participant cherche cinq choses : le découpage en lots, les critères de fin de chaque lot, le droit d\'arrêter, la propriété du code et des comptes, la façon dont un changement est chiffré. Ce qui manque devient une question à poser au prestataire.'],
                ['titre' => 'La revue piégée', 'duree' => '1 h 15, jour 2', 'texte' => 'Le formateur joue le prestataire et présente une livraison séduisante, mais testée seulement sur le parcours où tout va bien, avec des données fictives et un écran annoncé « pour la semaine prochaine ». Les participants doivent repérer les manques, poser les bonnes questions et rédiger une décision de refus courtoise et précise.'],
                ['titre' => 'Le comité de pilotage', 'duree' => '1 h, jour 2', 'texte' => 'Un projet fictif a deux mois de retard et a consommé 70 % du budget pour 40 % des éléments acceptés. Le commanditaire doit choisir entre continuer, réduire le périmètre ou arrêter, à partir des chiffres que le référent lui présente.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que dit le Scrum Guide 2020, et qu\'en retient un client ?',
            'legende' => 'Règles tirées de la version de novembre 2020 du Scrum Guide, dans ses versions anglaise et française publiées sur scrumguides.org, lues le 5 octobre 2026. La colonne de droite indique l\'usage qu\'en fait le client, que son prestataire applique Scrum ou non.',
            'entetes' => ['Ce que prévoit le Scrum Guide 2020', 'Ce que le client en retient'],
            'lignes'  => [
                ['Le Sprint est un événement de durée fixe, d\'un mois ou moins ; un nouveau Sprint commence dès la fin du précédent.', 'Exiger une livraison examinable au moins une fois par mois, et se méfier d\'un planning où rien n\'est montré pendant un trimestre.'],
                ['Le Product Owner est une personne et non un comité ; ceux qui veulent modifier le Product Backlog doivent le convaincre.', 'Désigner une seule personne qui ordonne les priorités côté client, et faire passer toutes les demandes par elle.'],
                ['La Sprint Review est une session de travail, que l\'équipe doit éviter de limiter à une présentation ; elle dure au plus quatre heures pour un Sprint d\'un mois.', 'Venir à la revue avec ses utilisateurs et ses questions, manipuler soi-même, et en sortir avec des décisions écrites.'],
                ['Un élément qui ne respecte pas la Definition of Done ne peut être ni publié ni même présenté lors de la Sprint Review ; il retourne au Product Backlog.', 'Refuser de compter comme livré ce qui est « presque fini », et écrire avec le prestataire, dès le départ, ce que « terminé » veut dire.'],
                ['Un Increment peut être livré aux parties prenantes avant la fin du Sprint ; la revue n\'est pas le seul moment pour délivrer de la valeur.', 'Accepter une mise à disposition anticipée quand elle sert les utilisateurs, à condition qu\'elle passe par la même recette.'],
                ['Un Sprint peut être annulé si son objectif devient obsolète, et seul le Product Owner en a le pouvoir.', 'Prévoir dans le contrat ce qui se passe quand un lot perd son sens : arrêt, échange ou report, et qui le décide.'],
                ['L\'équipe Scrum compte en général dix personnes ou moins.', 'Une petite équipe stable vaut mieux qu\'un renfort massif annoncé au moment du retard.'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Forfait global, forfait par lots ou régie : quel contrat choisir pour un projet mené par itérations ?',
            'options'  => ['Forfait global', 'Forfait par lots', 'Régie'],
            'criteres' => [
                ['critere' => 'Principe', 'valeurs' => ['Un prix fixe pour un périmètre décrit en entier avant le début', 'Un prix fixe par lot, chaque lot ayant son périmètre et ses critères de fin', 'Un prix par jour ou par mois de travail, sur un backlog que le client ordonne']],
                ['critere' => 'Qui porte le risque de dépassement', 'valeurs' => ['Le prestataire, en théorie ; en pratique, il se protège par des exclusions et des avenants', 'Le prestataire à l\'intérieur d\'un lot, le client sur le nombre de lots', 'Le client, qui paie le temps passé']],
                ['critere' => 'Place laissée au changement', 'valeurs' => ['Faible : chaque écart au cahier des charges devient un avenant', 'Bonne : le contenu des lots suivants se redéfinit après chaque livraison', 'Totale : le backlog peut être réordonné à chaque itération']],
                ['critere' => 'Ce que le client doit surveiller', 'valeurs' => ['La précision du cahier des charges et la recette finale, souvent tardive', 'Les critères d\'acceptation de chaque lot et le droit d\'arrêter entre deux lots', 'La production réelle par période, les éléments acceptés et la stabilité de l\'équipe']],
                ['critere' => 'Charge de pilotage côté client', 'valeurs' => ['Forte au début, puis faible jusqu\'à la recette', 'Régulière, à chaque fin de lot', 'Continue : le référent doit être disponible chaque semaine']],
                ['critere' => 'Situation où il convient', 'valeurs' => ['Petit projet bien connu, sans incertitude, comme un site vitrine simple', 'La plupart des projets de PME : application, portail, ERP paramétré', 'Projet exploratoire, produit appelé à évoluer longtemps, client disposant d\'un référent solide']],
            ],
            'verdict'  => 'Pour une PME, une ONG ou une administration qui découvre la conduite de projet, le forfait par lots offre le meilleur équilibre : chaque lot a un prix connu, le client peut arrêter après un lot utile, et ce qu\'il apprend à chaque livraison sert à redéfinir la suite. La régie convient aux organisations qui ont un référent disponible et qui savent lire une production. Le forfait global ne se justifie que lorsque le besoin est simple et stable. Le Manifeste agile préfère la collaboration avec les clients à la négociation contractuelle : un contrat bien découpé ne la remplace pas, il la rend possible.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que révèlent les affaires Hertz et TSB sur la part du client dans un projet ?',
            'paragraphes' => [
                'L\'histoire de <a href="/histoires/hertz-accenture">Hertz et d\'Accenture</a> se lit souvent comme la faute d\'un prestataire. Dans sa plainte du 19 avril 2019 devant le tribunal fédéral du district sud de New York, Hertz affirmait avoir payé plus de 32 millions de dollars d\'honoraires et de frais sans recevoir de site ni d\'application fonctionnels. Le mémoire d\'Accenture du 15 juillet 2019 raconte autre chose : selon lui, le cahier des prestations laissait à Hertz les intégrations avec ses anciens systèmes, la sécurité et les tests de recette par les utilisateurs, et précisait que le contrat n\'était pas à prix fixe.',
                'Le procès s\'est terminé par un accord, sans que ces versions soient départagées. Pour un client, la leçon ne dépend pas de qui avait raison. Un contrat qui n\'est pas au forfait fait porter au client le risque de la durée ; une recette confiée au client exige qu\'il l\'organise dès la première livraison ; un chef de projet côté client responsable de ses propres chantiers doit avoir le temps et l\'autorité de les tenir. La formation reprend ces trois points comme une liste de contrôle à appliquer avant de signer.',
                'L\'histoire de <a href="/histoires/tsb-migration">TSB</a> montre l\'autre face : la mise en service. En avril 2018, la banque a basculé ses clients vers une nouvelle plateforme en un seul week-end. Le 20 décembre 2022, la FCA et la PRA lui ont infligé 48,65 millions de livres d\'amendes ; le communiqué de la FCA cite Mark Steward, directeur chargé des sanctions et de la surveillance des marchés, pour qui la banque n\'avait pas correctement planifié la migration, et la gouvernance du projet n\'était pas assez robuste. Une partie importante de ses 5,2 millions de clients a été touchée. Pour une PME, l\'équivalent est une mise en ligne sans recette complète ni retour possible.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que vérifier avant d\'accepter une livraison ?',
            'items' => [
                'Chaque élément annoncé comme livré respecte ses critères d\'acceptation, vérifiés par un utilisateur du client et pas seulement par le prestataire.',
                'Les tests ont porté sur des cas réels, y compris les erreurs : paiement refusé, connexion coupée, champ mal rempli, utilisateur sans droits.',
                'Les données de test sont fictives ou anonymisées, et aucune donnée réelle de client n\'a été copiée sur l\'environnement de démonstration.',
                'La livraison fonctionne sur les appareils et la connexion de vos utilisateurs, téléphone d\'entrée de gamme compris.',
                'Le code correspondant est déposé dans un dépôt au nom de l\'organisation, avec ses instructions d\'installation.',
                'Les accès créés pour la livraison sont listés, et ceux d\'administration remis au référent technique.',
                'Les anomalies restantes sont classées, avec une date de correction pour chacune des anomalies majeures.',
                'La décision est écrite le jour de la revue : acceptée, acceptée avec réserves listées, ou refusée avec les motifs.',
                'Le backlog est mis à jour : ce qui n\'est pas terminé y retourne, et l\'ordre des lots suivants est confirmé ou modifié.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils de suivi sont utilisés, et combien coûtent-ils ?',
            'legende' => 'Prix relevés le 5 octobre 2026 sur les pages officielles des éditeurs, en dollars américains tels qu\'ils étaient affichés, hors taxes et frais de change. Ils sont dus aux éditeurs et n\'entrent pas dans le devis de formation. La formation s\'appuie d\'abord sur l\'outil déjà utilisé par le prestataire.',
            'entetes' => ['Outil', 'Prix publié', 'Intérêt pour le client', 'Place dans la formation'],
            'lignes'  => [
                ['Tableur partagé (Google Sheets, Excel en ligne)', 'Souvent déjà inclus dans la suite bureautique de l\'organisation', 'Un backlog, un registre des décisions et une grille de recette lisibles par tous, sans compte supplémentaire', 'Modèles remis aux participants ; outil par défaut des petits projets'],
                ['Jira, d\'Atlassian', 'Free gratuit jusqu\'à 10 utilisateurs, 2 Go de stockage ; Standard à 9,05 dollars par utilisateur et par mois en paiement mensuel pour une équipe de 10', 'Vue Backlog, tableaux et rapports ; l\'offre gratuite n\'inclut ni les rôles et autorisations des utilisateurs ni la collaboration externe', 'Lecture du backlog d\'un prestataire qui l\'utilise'],
                ['Azure Boards, dans Azure DevOps de Microsoft', 'Plan de base gratuit pour les 5 premiers utilisateurs, puis 6 dollars par utilisateur et par mois ; accès « parties prenantes » gratuit', 'Le niveau d\'accès gratuit des parties prenantes permet de créer et modifier des éléments de travail et d\'afficher les backlogs et tableaux', 'Montré aux clients dont le prestataire travaille avec Microsoft'],
                ['Azure Test Plans (offre De base + Test)', '52 dollars par utilisateur et par mois, essai gratuit de 30 jours', 'Planification et suivi des tests, tests d\'acceptation par les utilisateurs', 'Présenté pour les projets dont la recette est lourde ; jamais imposé'],
                ['GitHub, issues et projets', 'Offre Free à 0 dollar ; Team à 4 dollars par utilisateur et par mois, prix affiché pour les douze premiers mois', 'Suivi des demandes au plus près du code, que le client peut consulter si le dépôt est à son nom', 'Lecture d\'un tableau de projet et d\'un historique de livraisons'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation se déroule-t-elle, concrètement ?',
            'intro' => 'La méthode suit la règle qu\'elle enseigne : peu de théorie, des livraisons courtes, une vérification à chaque étape. Chaque demi-journée produit un document que l\'organisation garde pour son projet.',
            'items' => [
                ['titre' => 'Votre projet comme matière', 'texte' => 'Les exercices portent sur le projet réel de chaque participant, ou sur un projet commun en inter-entreprises. À la fin du jour 1, le backlog et le découpage en lots existent ; à la fin du jour 2, la grille de recette et le registre des décisions aussi.'],
                ['titre' => 'Des groupes réduits', 'texte' => 'Découper un projet, c\'est discuter de chaque carte. Au-delà d\'une dizaine de personnes, on forme des sous-groupes par projet, qui se retrouvent pour la revue simulée et le comité de pilotage.'],
                ['titre' => 'Le prestataire invité, si vous le souhaitez', 'texte' => 'Une demi-journée peut accueillir le chef de projet du prestataire, pour s\'accorder sur la définition de « terminé », le rythme des livraisons et la forme des revues. Il n\'assiste pas aux séances où le client prépare ses questions et lit son contrat.'],
                ['titre' => 'Des jeux de rôle tirés de cas vécus', 'texte' => 'La revue piégée et le comité de pilotage reprennent des situations que l\'on rencontre dans les projets de PME : écran « presque fini », tests limités au parcours idéal, demande urgente du directeur en plein lot.'],
                ['titre' => 'Des supports remis', 'texte' => 'Modèles de backlog, de grille de recette, de procès-verbal de revue et de registre des décisions, liste de contrôle du contrat et fiche des rôles, dans des formats modifiables qui restent à l\'organisation.'],
                ['titre' => 'Une évaluation sur un livrable', 'texte' => 'Le participant présente le backlog ordonné de son projet et son premier lot, puis rédige une décision de revue. C\'est ce travail, comparé aux objectifs fixés au cadrage, qui dit si la formation a servi ; une attestation nominative est remise.'],
                ['titre' => 'Un suivi pendant le projet', 'texte' => 'La revue accompagnée de deux heures a lieu au moment d\'une vraie livraison, et un canal direct reste ouvert pour les questions du référent dans les semaines qui suivent.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon votre organisation et votre pays ?',
            'items' => [
                ['secteur' => 'ONG de développement, à Cotonou', 'probleme' => 'Une plateforme de suivi des bénéficiaires doit être prête pour la revue annuelle du bailleur, et le prestataire travaille depuis trois mois sans rien montrer.', 'solution' => 'Désignation d\'une chargée de suivi comme référente, découpage en trois lots dont le premier couvre la saisie terrain hors connexion, revue toutes les trois semaines avec deux agents de terrain, données de test anonymisées.'],
                ['secteur' => 'Établissement public, à Abidjan', 'probleme' => 'Un portail de démarches en ligne est commandé par marché public, au forfait global, et chaque précision du besoin déclenche une discussion sur les avenants.', 'solution' => 'Lecture du marché avec la cellule de passation, proposition de livraisons intermédiaires vérifiables dans le cadre existant, grille de recette par démarche, registre des décisions signé à chaque revue.'],
                ['secteur' => 'Distributeur, à Dakar', 'probleme' => 'L\'application de prise de commande des revendeurs est demandée « pour hier » par la direction commerciale, qui ajoute une fonction à chaque réunion.', 'solution' => 'Un seul ordre de priorité tenu par le responsable des ventes, premier lot limité à la commande et au suivi de livraison, nouvelles demandes échangées contre des éléments de même taille ou reportées au lot suivant.'],
                ['secteur' => 'École privée, à Lomé', 'probleme' => 'Les inscriptions en ligne et le paiement par Mobile Money doivent fonctionner avant la rentrée, avec un prestataire payé en régie.', 'solution' => 'Suivi hebdomadaire de ce qui est accepté plutôt que des jours facturés, recette du paiement avec de petits montants réels et des cas d\'échec, mise en service d\'abord pour une seule classe, puis élargie.'],
                ['secteur' => 'PME de services, à Bruxelles ou à Lyon', 'probleme' => 'La refonte de l\'espace client est confiée à une agence au forfait par lots, mais aucun utilisateur n\'est libéré pour tester.', 'solution' => 'Deux utilisateurs clés désignés avec un temps réservé dans leur agenda, revue en visioconférence tous les quinze jours, accord de sous-traitance des données relu avant le premier lot.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Intra, inter, à distance ou hybride : quel format choisir ?',
            'legende' => 'Le format se fixe au premier échange, selon le nombre de projets concernés, la confidentialité du contrat et la dispersion des participants. Dans tous les cas, les exercices portent sur un projet réel.',
            'entetes' => ['Format', 'Pour qui', 'Déroulement', 'Point d\'attention'],
            'lignes'  => [
                ['Intra, sur place', 'Une organisation qui lance un ou deux projets, avec son commanditaire, son référent et ses utilisateurs clés', 'Quatre demi-journées dans vos locaux, puis la revue accompagnée au moment d\'une livraison', 'Le contrat et les difficultés avec le prestataire se discutent porte fermée'],
                ['Inter-entreprises', 'Référents de plusieurs structures, réseau d\'associations, chambre de commerce, groupement de PME', 'Un projet commun fictif pour les jeux de rôle, puis une heure de travail individuel sur le projet de chacun', 'Aucun contrat réel ni nom de prestataire n\'est montré aux autres participants'],
                ['À distance', 'Équipes réparties entre plusieurs villes ou pays, organisations installées en Europe ou au Canada', 'Six séances de deux heures en visioconférence, avec un tableau partagé pour le backlog', 'Prévoir un tableur ou un tableau en ligne qui reste lisible sur une connexion lente'],
                ['Hybride', 'Organisation qui veut lancer son projet en salle, puis être accompagnée pendant les premières livraisons', 'Le jour 1 sur place ; le jour 2 et la revue accompagnée à distance, calés sur le calendrier du prestataire', 'Fixer les dates à distance avant la fin du jour 1, sinon les urgences du projet les absorbent'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et de quoi dépend le devis ?',
            'intro'      => 'Aucun tarif n\'est publié pour cette formation : elle est chiffrée sur devis, après un premier échange et un cadrage gratuits, avec une réponse sous 24 heures. Elle se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux outils de suivi restent dus aux éditeurs.',
            'items'      => [
                ['offre' => 'Formation du pilote et de son équipe', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées sur votre projet', 'Backlog ordonné et découpage en lots produits en séance', 'Modèles de grille de recette, de procès-verbal de revue et de registre des décisions', 'Attestation nominative']],
                ['offre' => 'Revue accompagnée', 'prix' => 'Sur devis', 'inclus' => ['Présence à une revue réelle ou relecture de son enregistrement', 'Retour écrit au référent', 'Mise à jour du backlog et de la grille de recette']],
                ['offre' => 'Session inter-entreprises', 'prix' => 'Sur devis', 'inclus' => ['Projet commun pour les jeux de rôle', 'Temps de travail sur le projet de chacun', 'Coût partagé entre les structures']],
            ],
            'variations' => [
                'Le nombre de participants et de projets travaillés en parallèle.',
                'La préparation : lecture du contrat, du devis ou du cahier des charges avant la session.',
                'L\'ajout d\'une ou plusieurs revues accompagnées pendant le projet.',
                'La présence du prestataire pendant une demi-journée commune.',
                'Le lieu : vos locaux à Cotonou, une autre ville, un autre pays, ou la visioconférence.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il prendre en charge cette formation ?',
            'paragraphes' => [
                'La décision revient toujours au fonds, et aucune prise en charge n\'est annoncée d\'avance. En Côte d\'Ivoire, le <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> accepte le plan de formation de toute entreprise qui justifie du paiement régulier des deux taxes, selon sa page consultée le 5 octobre 2026 ; il y range les actions internes, intra, interentreprises et à l\'étranger, et ne liquide qu\'après son suivi, son contrôle et l\'approbation de sa Commission permanente. Au Bénin, le FODEFCA a ses statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a> : ses conditions se demandent directement à lui.',
                'Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> présente un guichet consacré au personnel des entreprises et aux membres des organisations professionnelles, avec une demande déposée sur sa plateforme en ligne. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que, depuis le 1er janvier 2022, seuls les prestataires certifiés Qualiopi accèdent aux fonds publics ou mutualisés. Richard SALANON n\'a pas cette certification, ni l\'agrément d\'un fonds africain. Interrogez votre fonds par écrit, programme et devis joints, et construisez le budget comme si la réponse était négative.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quelle erreur annule tout le bénéfice d\'un projet mené par itérations ?',
            'texte' => 'Accepter une livraison sans l\'avoir testée. Le prestataire montre un écran qui fonctionne, le temps presse, et le référent dit « c\'est bon » pour ne pas ralentir. Trois livraisons plus tard, les défauts se sont empilés, les utilisateurs découvrent l\'outil au moment de la mise en service, et l\'on se retrouve dans la situation que les livraisons courtes devaient éviter. Une livraison n\'est acceptée qu\'après la recette de vos utilisateurs, sur leurs cas réels, et par une décision écrite. Si le temps manque, on réduit le contenu du lot, jamais la recette.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les semaines qui suivent la formation, et comment les éviter ?',
            'intro' => 'Elles apparaissent presque toutes lors de la revue accompagnée. Chacune a une parade travaillée pendant les deux jours.',
            'items' => [
                ['titre' => 'Un référent sans temps réservé', 'texte' => 'Le référent garde tout son travail habituel, et le projet passe après le reste. Le temps hebdomadaire noté sur la carte des rôles doit être validé par le commanditaire et inscrit dans l\'agenda, comme une réunion.'],
                ['titre' => 'Plusieurs voix pour une seule liste', 'texte' => 'Le directeur commercial appelle le développeur, la comptable envoie ses demandes par WhatsApp, et le backlog n\'est plus la source de vérité. Toute demande passe par le référent, qui l\'inscrit, la classe et répond au demandeur.'],
                ['titre' => 'Des lots découpés par couches techniques', 'texte' => '« Lot 1 : la base de données ; lot 2 : les écrans » ne permet aucune recette avant la fin. Chaque lot doit livrer un parcours qu\'un utilisateur peut parcourir de bout en bout, même réduit.'],
                ['titre' => 'L\'avancement mesuré en pourcentage déclaré', 'texte' => 'Un projet « fini à 80 % » depuis deux mois ne dit rien. Le septième principe du Manifeste agile le formule ainsi : un logiciel opérationnel est la principale mesure d\'avancement. Seuls comptent les éléments acceptés en recette, rapportés au budget consommé.'],
                ['titre' => 'Les changements acceptés oralement', 'texte' => 'Une demande glissée en fin de revue devient, trois semaines plus tard, un supplément contesté. Chaque changement est inscrit au registre des décisions, avec sa conséquence sur le lot en cours.'],
                ['titre' => 'La revue réduite à une démonstration', 'texte' => 'Le prestataire présente, le client applaudit, personne ne touche à rien. Les utilisateurs clés manipulent eux-mêmes, sur leurs cas, et la revue se termine par une décision.'],
                ['titre' => 'Une mise en service en une seule fois', 'texte' => 'Après des mois de livraisons, tout bascule un lundi matin sans retour possible. On ouvre d\'abord à un service, une agence ou une classe, avec l\'ancien fonctionnement disponible quelques semaines.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que changent la connexion, la distance et les règles sur les données personnelles ?',
            'paragraphes' => [
                'Une partie des revues se tiendra à distance, parfois sur une connexion modeste. Selon le rapport Digital 2026 de DataReportal consacré au Bénin, publié le 8 novembre 2025, le pays comptait 4,80 millions d\'internautes à la fin de 2025, soit 32,2 % de la population, pour un débit fixe médian de 24,49 Mbit/s. La formation en tire des habitudes simples : demander au prestataire un enregistrement court de chaque livraison, tester sur le téléphone et la connexion des vrais utilisateurs, et garder le backlog dans un outil qui reste lisible quand le réseau faiblit.',
                'Dès qu\'un projet touche des données personnelles, le prestataire devient un sous-traitant. Au Bénin, l\'article 426 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> soumet son choix et son contrat aux règles de la loi, et demande que les éléments du contrat relatifs à la protection des données soient consignés par écrit. L\'article 428 impose une analyse d\'impact avant un traitement susceptible d\'engendrer un risque élevé, notamment par le recours à de nouvelles technologies : elle se prévoit dans les premiers lots, pas la veille de la mise en service.',
                'En Europe, l\'article 25 du RGPD, publié par la CNIL, demande au responsable du traitement de mettre en œuvre la protection des données dès la conception, c\'est-à-dire dès le choix des moyens, avec des mesures comme la pseudonymisation et la minimisation. L\'article 28 exige que le sous-traitant présente des garanties suffisantes et que la relation soit régie par un contrat qui en précise l\'objet, la durée et la nature. Concrètement, ces exigences entrent dans le backlog comme des éléments à part entière, avec leurs critères d\'acceptation, et dans la liste de contrôle de chaque revue.',
                'Les séances se tiennent en français, et peuvent se donner en anglais lorsque le prestataire ou la maison mère travaille dans cette langue. Pour les projets répartis entre plusieurs pays, le référent fixe le fuseau horaire des revues et la langue des procès-verbaux dès le premier lot, afin que chaque décision soit comprise de la même façon des deux côtés.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre à piloter un projet avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il se trouve le plus souvent de l\'autre côté de la table : c\'est lui qui livre les sites, applications et déploiements d\'Odoo ou de Dolibarr que ses clients commandent. Il voit donc ce qu\'un prestataire attend d\'un client, ce qui fait déraper une recette, et à quel moment une demande de changement devient un problème. Il a créé <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique, déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes et a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays d\'Afrique francophone, d\'Europe et du Canada. Il ne détient aucune certification Scrum et ne la présente pas comme telle : la formation s\'appuie sur les textes publics et sur la pratique des projets. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays où il intervient sur la page des <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/cybersecurite-it">cybersécurité et IT</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer votre prochain projet numérique ?',
            'texte' => 'Nommez un commanditaire et un référent, et réservez leur temps. Tenez une seule liste ordonnée, découpez-la en lots qu\'un utilisateur peut employer, et préférez un contrat qui vous laisse arrêter après chaque lot. N\'acceptez une livraison qu\'après la recette de vos utilisateurs, écrivez chaque décision, échangez les changements plutôt que de les ajouter, et mettez en service par étapes. Pour situer ce projet dans la transformation de toute l\'organisation, la formation <a href="/formations/strategie-transformation-digitale">Stratégie de transformation digitale</a> fixe les priorités de direction.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous garder la main sur votre prochain projet numérique ?',
            'texte'  => 'Décrivez le projet, le prestataire s\'il est choisi, la forme du contrat, l\'échéance et les personnes à former : vous recevez une réponse sous 24 heures, puis un programme ajusté et un devis détaillé. L\'ensemble du catalogue est présenté sur la page des <a href="/formations/">formations</a>.',
            'bouton' => ['url' => '/contact', 'texte' => 'Préparer mon projet'],
        ],
    ],
    'faq' => [
        ['q' => 'Faut-il connaître Scrum ou une méthode agile pour suivre la formation ?', 'r' => 'Non. La formation part du rôle du client et n\'emprunte aux méthodes agiles que ce qui lui sert : un ordre de priorité unique, des livraisons d\'un mois au plus, une revue où l\'on manipule, une définition commune de « terminé ». Le vocabulaire du prestataire est expliqué au fil des exercices.'],
        ['q' => 'Notre prestataire ne travaille pas en agile : la formation sert-elle quand même ?', 'r' => 'Oui. Même avec un prestataire qui suit un cycle classique, le client peut demander des livraisons intermédiaires examinables, tenir sa propre liste de priorités, organiser la recette de chaque étape et écrire ses décisions. La lecture du contrat montre où ces demandes peuvent s\'insérer.'],
        ['q' => 'Quelle différence avec la formation Chef de projet digital et product owner ?', 'r' => 'Celle-ci s\'adresse à l\'organisation qui commande un projet à un prestataire : rôles côté client, lots, revue, recette, contrat, changements. La formation Chef de projet digital et product owner traite le métier lui-même, sa posture, la gestion d\'un produit dans la durée et le travail avec une équipe de développement.'],
        ['q' => 'Le projet n\'est encore qu\'une idée : est-ce trop tôt ?', 'r' => 'C\'est le meilleur moment. Les choix qui pèsent le plus, comme la forme du contrat, le découpage en lots, la désignation du référent et le temps réservé, se font avant la signature. Si l\'idée doit d\'abord être transformée en cahier des charges chiffré, une mission d\'audit et d\'étude de projet peut précéder la formation.'],
        ['q' => 'Le projet a déjà commencé et prend du retard : peut-on encore rattraper ?', 'r' => 'Souvent, oui. La formation commence alors par l\'état réel : ce qui est accepté, ce qui est annoncé comme presque fini, ce qui reste. On reconstruit le backlog, on définit un prochain lot utilisable, et l\'on prépare le comité où le commanditaire choisira de continuer, de réduire ou d\'arrêter.'],
        ['q' => 'Forfait ou régie : lequel conseillez-vous ?', 'r' => 'Pour la plupart des PME, des ONG et des administrations, un forfait par lots : un prix connu par lot, des critères de fin écrits et le droit d\'arrêter entre deux lots. La régie demande un référent disponible chaque semaine et capable de suivre ce qui est réellement accepté. Le forfait global ne convient qu\'à un besoin simple et stable.'],
        ['q' => 'Combien de temps le référent doit-il consacrer au projet ?', 'r' => 'Pour une application de taille moyenne, il faut compter en général une à deux demi-journées par semaine pendant toute la durée du projet, davantage pendant les recettes. C\'est le temps le plus souvent sous-estimé, et celui qui conditionne la qualité des décisions.'],
        ['q' => 'Notre prestataire peut-il assister à la formation ?', 'r' => 'Oui, pendant une demi-journée commune consacrée au rythme des livraisons, à la forme des revues et à la définition de « terminé ». Les séances où le client lit son contrat et prépare ses questions se tiennent sans lui.'],
        ['q' => 'Faut-il acheter un logiciel de gestion de projet ?', 'r' => 'Non. Un tableur partagé suffit pour le backlog, le registre des décisions et la grille de recette d\'un petit projet. Si le prestataire utilise Jira, Azure DevOps ou GitHub, le référent apprend à y lire et à y commenter les éléments ; des accès gratuits existent selon les offres relevées le 5 octobre 2026.'],
        ['q' => 'La formation couvre-t-elle l\'hébergement et la sécurité de l\'outil livré ?', 'r' => 'Seulement sous l\'angle de la recette : vérifier que le code, les accès et la documentation sont remis à chaque livraison. Le choix de l\'hébergement relève de la formation Cloud et hébergement pour décideurs, les sauvegardes et les droits d\'accès de la formation Sécurité des données et sauvegardes pour dirigeants.'],
        ['q' => 'La formation peut-elle se faire à distance ?', 'r' => 'Oui, en six séances de deux heures, avec un backlog tenu dans un tableau partagé. La revue accompagnée se fait elle aussi à distance si le prestataire organise ses revues en visioconférence.'],
        ['q' => 'Combien coûte la formation, et peut-elle être financée ?', 'r' => 'Elle est chiffrée sur devis, après un premier échange et un cadrage gratuits. Le prix dépend du nombre de participants et de projets, de la préparation, des revues accompagnées, du lieu et de la langue. Un fonds comme le FDFP, le FODEFCA, le 3FPT ou un opérateur de compétences peut être interrogé, sans garantie : Richard SALANON n\'est ni certifié Qualiopi ni agréé par un fonds.'],
    ],

    'sources' => [
        ['titre' => 'Scrum Guide, version de novembre 2020 (texte anglais)', 'url' => 'https://scrumguides.org/scrum-guide.html', 'date' => '2026-10-05'],
        ['titre' => 'Scrum Guide 2020, traduction française officielle (PDF)', 'url' => 'https://scrumguides.org/docs/scrumguide/v2020/2020-Scrum-Guide-French.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Manifeste pour le développement Agile de logiciels (2001), version française', 'url' => 'https://agilemanifesto.org/iso/fr/manifesto.html', 'date' => '2026-10-05'],
        ['titre' => 'Principes sous-jacents au Manifeste agile, version française', 'url' => 'https://agilemanifesto.org/iso/fr/principles.html', 'date' => '2026-10-05'],
        ['titre' => 'Plainte de The Hertz Corporation contre Accenture LLP, tribunal fédéral du district sud de New York, 19 avril 2019', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.1.0_1.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Mémoire d\'Accenture LLP à l\'appui de sa demande de rejet partiel, 15 juillet 2019', 'url' => 'https://storage.courtlistener.com/recap/gov.uscourts.nysd.514124/gov.uscourts.nysd.514124.30.0.pdf', 'date' => '2026-10-05'],
        ['titre' => 'FCA, TSB fined £48.65m for operational resilience failings (20 décembre 2022)', 'url' => 'https://www.fca.org.uk/news/press-releases/tsb-fined-48m-operational-resilience-failings', 'date' => '2026-10-05'],
        ['titre' => 'Atlassian, tarifs de Jira (Free, Standard, Premium, Enterprise)', 'url' => 'https://www.atlassian.com/fr/software/jira/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Microsoft, tarification d\'Azure DevOps Services (plan de base, De base + Test, accès parties prenantes)', 'url' => 'https://azure.microsoft.com/fr-fr/pricing/details/devops/azure-devops-services/', 'date' => '2026-10-05'],
        ['titre' => 'GitHub, offres et tarifs (Free, Team, Enterprise)', 'url' => 'https://github.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, rapport Digital 2026 consacré au Bénin (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, RGPD, chapitre 4 : responsable du traitement et sous-traitant (articles 25 et 28)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 426 et 428)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['chef-de-projet-digital', 'cloud-hebergement', 'securite-donnees-dirigeants', 'adoption-erp', 'conduite-du-changement', 'outils-collaboratifs'],
        'services'    => ['audit-etude-de-projet', 'application-web-sur-mesure', 'formation-en-entreprise'],
        'comparatifs' => [],
    ],
];
