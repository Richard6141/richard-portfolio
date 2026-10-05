<?php
// ============================================================
// data/formations/adoption-erp.php · Fiche formation « Réussir l'adoption
// d'un ERP » (vague 1B, lot B, domaine erp-gestion). Aucune ancienne page.
// Angle propre : le projet ERP mené côté entreprise cliente, quel que soit le
// logiciel (choisir, cadrer, reprendre les données, désigner les rôles et les
// référents, tester, basculer, faire adopter, mesurer l'usage).
// Sœurs non traitées : odoo-utilisateurs et dolibarr-utilisateurs (gestes par
// poste), odoo-dirigeants (pilotage dans Odoo), odoo-comptabilite-syscohada
// (tenue comptable), conduite-du-changement (adoption de tout outil :
// communication, relais). Piliers integration-odoo, integration-dolibarr et
// audit-etude-de-projet (prestations) non repris.
// Sources consultées le 05/10/2026 : documentation d'Odoo (import de
// données, support des versions), page Tarification d'Odoo (fait vérifié du
// catalogue), wiki Dolibarr (module Imports), GitHub (Dolibarr 24.0.1,
// ERPNext), DoliCloud, AUDCIF (articles 22 et 24), Légifrance (L123-22),
// loi n° 2017-20 (articles 383 et 426), CNIL (RGPD, articles 5 et 28),
// FCA (TSB, 20/12/2022), impots.gouv.fr, DataReportal, FDFP, FODEFCA, 3FPT,
// France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Réussir l'adoption d'un ERP : choisir le logiciel, reprendre les données, répartir les rôles, basculer et vérifier que l'équipe s'en sert vraiment",
    'title'   => "Adoption d'un ERP : formation projet | Richard SALANON",
    'meta'    => "Formation au projet ERP côté entreprise : choisir Odoo, Dolibarr ou un autre, reprendre les données, désigner les référents, basculer, mesurer l'usage.",
    'en_bref' => "Une formation-action pour la direction, le chef de projet interne et les futurs référents d'une entreprise qui s'équipe d'un ERP, ou qui change d'ERP. Elle apprend à mener le projet du côté de l'entreprise, quel que soit le logiciel : décrire les processus réels, choisir l'outil et l'intégrateur, décider de la reprise des données, répartir les rôles, tester, autoriser la bascule, puis mesurer l'usage. Elle dure 3 jours en six demi-journées, calées sur les étapes de votre projet, sur place, à distance, en formule hybride ou en inter-entreprises. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'erp-gestion',
    'forte'   => false,
    'duree'   => "3 jours en 6 demi-journées, réparties sur la durée du projet",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : partir de vos processus réels et écrire ce que le projet doit changer",
            'duree'  => '3 h 30',
            'points' => [
                "Raconter une commande, un achat et une fin de mois tels qu'ils se passent aujourd'hui, avec les fichiers, les cahiers et les messages qui les accompagnent.",
                "Repérer les ressaisies, les validations orales et les informations qui n'existent que dans la tête d'une personne.",
                "Chiffrer le point de départ avec vos propres relevés : volumes mensuels, délai entre livraison et facture, nombre de fichiers clients en circulation.",
                "Rédiger trois à cinq objectifs vérifiables, chacun relié à une mesure qui sera refaite après le démarrage.",
                "Tracer le périmètre du premier palier, et la liste écrite de ce qui attendra.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : choisir le logiciel et l'intégrateur sur vos propres scénarios",
            'duree'  => '3 h 30',
            'points' => [
                "Construire une grille de choix pondérée à partir des objectifs du matin, et non d'une liste de fonctions recopiée d'une brochure.",
                "Écrire les scénarios de démonstration que chaque candidat devra dérouler devant vous, avec vos articles et vos cas difficiles.",
                "Comparer le coût sur trois ans : licences ou hébergement, paramétrage, reprise, formation, support, montées de version.",
                "Questions à poser à l'intégrateur : qui fait le travail, propriété des adaptations, accès administrateur, restitution des données en fin de contrat.",
                "Exercice : noter deux offres fictives construites sur votre cas, puis justifier le choix devant le groupe.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : désigner les rôles, libérer le temps et fixer les règles de décision",
            'duree'  => '3 h 30',
            'points' => [
                "Le dirigeant commanditaire, le chef de projet interne, les référents métier, l'administrateur fonctionnel, le comptable, le prestataire : ce que chacun décide et produit.",
                "Inscrire noir sur blanc le temps libéré pour le chef de projet et les référents, et ce qui sera retiré de leur charge habituelle.",
                "Le journal des décisions de paramétrage : qui tranche, sous quel délai, et comment on revient sur une décision.",
                "Le rythme du comité de projet et l'ordre du jour type d'une réunion de suivi de trente minutes.",
                "Exercice : remplir la matrice des rôles de votre entreprise, nom par nom.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : préparer la reprise des données",
            'duree'  => '3 h 30',
            'points' => [
                "Inventaire des données à reprendre, à nettoyer, à archiver ou à abandonner, objet par objet.",
                "Règles de nettoyage : doublons, codes articles, unités, coordonnées incomplètes, clients inactifs.",
                "Qui nettoie quoi, dans quel fichier, avant quelle date, et qui valide le fichier final.",
                "Contrôles de concordance après chaque import d'essai : nombres de fiches, totaux des soldes, valeur du stock, impayés.",
                "La date de gel des anciens fichiers et le traitement des opérations saisies entre le dernier export et le démarrage.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin, avant la bascule : recette, décision et plan de démarrage",
            'duree'  => '3 h 30',
            'points' => [
                "Relire les scénarios de recette écrits par les référents : cas courants, cas limites, erreurs volontaires.",
                "Trier les anomalies relevées entre bloquantes, gênantes et cosmétiques, et décider de ce qui doit être corrigé avant le démarrage.",
                "Fixer les critères de décision de la bascule et la personne qui signe.",
                "Choisir la date, la méthode de démarrage et le chemin de retour si le premier jour tourne mal.",
                "Préparer l'organisation des deux premières semaines : permanence des référents, canal unique pour les questions, point quotidien de quinze minutes.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi, six semaines après le démarrage : mesurer l'usage et fermer les anciens outils",
            'duree'  => '3 h 30',
            'points' => [
                "Relever les indicateurs d'usage fixés le premier jour et les comparer au point de départ.",
                "Chercher les contournements : documents restés en brouillon, factures émises hors du logiciel, tableurs encore alimentés.",
                "Classer chaque contournement : manque de formation, réglage à reprendre, ou besoin réel non couvert.",
                "Fixer la date d'arrêt de chaque ancien fichier, et la personne qui l'archive.",
                "Décider du palier suivant, ou décider d'attendre que le premier soit stable.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "3 jours en 6 demi-journées, étalés selon les étapes du projet"],
        ['l' => 'Public', 'v' => "Direction, chef de projet interne, futurs référents métier"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saura faire votre équipe projet à la fin, et que la formation ne couvre-t-elle pas ?",
            'paragraphes' => [
                "La plupart des projets ERP qui déçoivent ne butent pas sur le logiciel. Ils butent sur des décisions que personne n'a prises dans l'entreprise : quel processus on garde, quelles données on reprend, qui tranche quand deux services ne sont pas d'accord, à partir de quel jour l'ancien fichier cesse de faire foi. L'intégrateur paramètre ce qu'on lui demande ; il ne peut pas décider à la place de la direction. Cette formation prépare ceux qui portent le projet du côté de l'entreprise à prendre ces décisions au bon moment, par écrit, et à vérifier ensuite qu'elles ont produit l'usage attendu.",
                "À la fin du parcours, l'équipe projet dispose de documents qu'elle a produits elle-même sur son propre cas. Une carte des processus réels avec leurs points de ressaisie. Des objectifs chiffrés à partir de ses relevés. Une grille de choix et des scénarios de démonstration utilisables face à n'importe quel éditeur ou intégrateur. Une matrice des rôles avec des noms. Un inventaire des données assorti de règles de nettoyage et de contrôles. Un cahier de recette, des critères de bascule et un tableau d'indicateurs d'usage. Chaque document est relu en séance ; c'est lui, et non une impression de fin de journée, qui dit si l'objectif est atteint.",
                "La formation vaut pour Odoo, Dolibarr ou tout autre progiciel de gestion, y compris un logiciel propriétaire déjà choisi par une maison mère. Elle n'apprend pas les écrans : les gestes de chaque poste relèvent de la <a href=\"/formations/odoo-utilisateurs\">formation Odoo pour vos équipes</a> ou de la <a href=\"/formations/dolibarr-utilisateurs\">formation Dolibarr pour vos équipes</a>, une fois le logiciel paramétré. La lecture des tableaux de bord par la direction fait l'objet de la formation Odoo pour dirigeants. La communication interne et l'accompagnement humain de tout changement d'outil sont traités dans la formation Conduite du changement numérique, proposée en bas de page.",
                "Elle ne remplace pas non plus le travail technique. Installer, paramétrer et importer relèvent d'un intégrateur, qu'il s'agisse de l'<a href=\"/services/integration-odoo\">intégration Odoo</a>, de l'<a href=\"/services/integration-dolibarr\">intégration Dolibarr</a> ou d'un autre prestataire. Rédiger un cahier des charges complet ou auditer un existant technique relève d'une mission d'<a href=\"/services/audit-etude-de-projet\">audit et d'étude de projet</a>. La formation donne à l'entreprise ce qu'il lui faut pour commander ces travaux, les suivre et les recevoir sans dépendre entièrement de celui qui les exécute.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis, et à quel moment du projet la suivre ?",
            'intro' => "Le groupe idéal réunit les personnes qui décideront et celles qui feront vivre le logiciel au quotidien. Former le chef de projet seul revient à lui confier des décisions qu'il n'a pas le pouvoir de prendre.",
            'items' => [
                ['titre' => "Le dirigeant commanditaire", 'texte' => "Gérant, directeur général ou associé : il fixe les objectifs, arbitre les conflits entre services et signe la décision de bascule. Sa présence est demandée aux demi-journées 1, 3 et 5. Sans elle, les arbitrages remontent par message et attendent des semaines."],
                ['titre' => "Le chef de projet interne", 'texte' => "Un salarié de l'entreprise, pas le prestataire. Il tient le calendrier, le journal des décisions et la liste des anomalies, et il suit les six demi-journées. Il n'a pas besoin d'être informaticien ; il doit connaître les métiers et être écouté par eux."],
                ['titre' => "Les futurs référents métier", 'texte' => "Une personne par grand flux : ventes, achats et stock, facturation et encaissements, comptabilité. Ils décrivent les processus, écrivent les scénarios de recette et deviennent le premier recours de leurs collègues après le démarrage."],
                ['titre' => "Le comptable ou le responsable financier", 'texte' => "Interne ou cabinet extérieur, il valide les soldes d'ouverture, le traitement des factures en cours et ce qui restera archivé dans l'ancien système. Sa présence à la demi-journée sur la reprise évite la plupart des mauvaises surprises de la première clôture."],
                ['titre' => "Le responsable informatique, s'il existe", 'texte' => "Il apporte les contraintes d'hébergement, de sauvegarde, d'accès et de sécurité. Dans une PME sans service informatique, ce rôle est souvent tenu par l'administrateur fonctionnel désigné pendant la formation."],
                ['titre' => "Prérequis", 'texte' => "Aucun logiciel n'est requis : la formation peut commencer avant tout choix. Il faut apporter la liste des processus à outiller, une idée des volumes (clients, articles, factures par mois, utilisateurs) et les fichiers qui servent aujourd'hui à gérer l'activité."],
                ['titre' => "Matériel", 'texte' => "Une salle avec un écran de projection, un ordinateur par binôme, un tableur et un accès aux fichiers actuels de l'entreprise. Si un logiciel est déjà choisi, un accès à sa base d'essai rend les demi-journées 4 et 5 plus concrètes."],
                ['titre' => "Le bon moment", 'texte' => "Les demi-journées 1 et 2 se placent avant toute signature, la 3 et la 4 pendant le cadrage ou le début du paramétrage, la 5 quelques jours avant la date de démarrage envisagée, la 6 environ six semaines après. Une entreprise déjà engagée avec un intégrateur peut commencer à la demi-journée 3."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels documents l'équipe produit-elle sur son propre projet pendant la formation ?",
            'items' => [
                ['titre' => "La carte des processus tels qu'ils sont", 'duree' => "Demi-journée 1", 'texte' => "Une page par flux principal, dessinée avec les participants : qui reçoit la demande, où elle est notée, qui valide, ce qui est recopié et dans quel fichier. Les points rouges marquent les ressaisies et les validations orales. Cette carte sert ensuite de base aux scénarios de démonstration et de recette."],
                ['titre' => "Les objectifs et leur point de départ", 'duree' => "Demi-journée 1", 'texte' => "Trois à cinq phrases du type « facturer le jour de la livraison » ou « un seul fichier clients », chacune avec la mesure actuelle relevée par l'entreprise et la façon de la refaire après le démarrage. Un objectif sans mesure est réécrit ou retiré."],
                ['titre' => "La grille de choix et les scénarios de démonstration", 'duree' => "Demi-journée 2", 'texte' => "Une grille pondérée, cinq à dix critères au plus, et trois scénarios écrits que chaque candidat déroule devant vous avec vos données d'exemple. On note ce qui a été montré à l'écran, pas ce qui a été promis à l'oral."],
                ['titre' => "La matrice des rôles", 'duree' => "Demi-journée 3", 'texte' => "Pour chaque activité du projet, qui décide, qui exécute, qui est consulté, qui est informé. Les noms remplacent les fonctions, et le temps libéré pour chacun est écrit en face. Le document est signé par le dirigeant avant d'être diffusé."],
                ['titre' => "L'inventaire des données et les règles de reprise", 'duree' => "Demi-journée 4", 'texte' => "Un tableau par objet (clients, fournisseurs, articles, stocks, pièces ouvertes, soldes) avec la source, le volume, le responsable du nettoyage, la règle appliquée et le contrôle qui prouvera que la reprise est juste."],
                ['titre' => "Le cahier de recette et les critères de bascule", 'duree' => "Demi-journée 5", 'texte' => "Les scénarios écrits par les référents, avec le résultat attendu, le résultat obtenu et la personne qui a testé. En dernière page, la liste des conditions à réunir avant de démarrer, et la place de la signature du dirigeant."],
                ['titre' => "Le tableau d'usage et le plan d'arrêt des anciens outils", 'duree' => "Demi-journée 6", 'texte' => "Les indicateurs relevés six semaines après le démarrage, comparés au point de départ, la liste des contournements trouvés et leur traitement, puis le calendrier d'arrêt de chaque fichier encore alimenté."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Qui fait quoi dans un projet ERP, du côté de l'entreprise ?",
            'legende' => "La répartition travaillée pendant la troisième demi-journée. Les temps indiqués sont des recommandations de départ, à ajuster au cadrage selon la taille de l'entreprise et le périmètre du premier palier.",
            'entetes' => ['Rôle', 'Qui, en général', 'Ce qu\'il décide ou produit', 'Temps à réserver'],
            'lignes'  => [
                ['Commanditaire', "Le dirigeant ou un associé", "Fixe les objectifs, tranche les désaccords entre services, valide le budget, signe la bascule et l'arrêt des anciens outils", "Le comité de projet, et une réponse à chaque arbitrage dans la semaine"],
                ['Chef de projet interne', "Un cadre qui connaît plusieurs services", "Tient le calendrier, le journal des décisions, la liste des anomalies ; prépare les comités ; reçoit les livrables de l'intégrateur", "Un temps fixe chaque semaine, retiré de sa charge habituelle et écrit dans la matrice"],
                ['Référent métier', "Une personne par flux, reconnue par ses collègues", "Décrit le processus, valide le paramétrage de son flux, écrit et joue les scénarios de recette, répond aux questions après le démarrage", "Des créneaux réguliers pendant le paramétrage, davantage pendant la recette et les deux semaines de démarrage"],
                ['Administrateur fonctionnel', "Le chef de projet, un référent ou l'informaticien", "Crée les comptes, attribue les droits par poste, retire les accès au départ d'un salarié, tient la documentation du paramétrage", "Quelques heures par mois une fois le logiciel stabilisé"],
                ['Comptable', "Le service comptable ou le cabinet", "Valide le plan de comptes, les taxes, les soldes d'ouverture et la règle de traitement des pièces en cours", "Les séances sur la reprise et la première clôture après le démarrage"],
                ['Intégrateur', "Le prestataire choisi", "Paramètre, importe, corrige, forme les utilisateurs selon le contrat ; ne décide pas des processus à la place de l'entreprise", "Selon le contrat, avec un interlocuteur nommé et joignable"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles données reprendre dans le nouvel ERP, et lesquelles laisser dans l'ancien système ?",
            'legende' => "Point de départ de la discussion menée pendant la quatrième demi-journée. La décision finale appartient à l'entreprise, après avis du comptable pour tout ce qui touche aux soldes et aux pièces.",
            'entetes' => ['Données', 'Recommandation habituelle', 'Contrôle après import d\'essai'],
            'lignes'  => [
                ['Clients et fournisseurs', "Reprendre les tiers actifs, après fusion des doublons et application d'une règle d'écriture des noms ; laisser les tiers dormants dans l'archive", "Nombre de fiches importées égal au nombre de lignes du fichier validé ; dix fiches tirées au hasard relues à l'écran"],
                ['Articles et services', "Reprendre ce qui se vend ou s'achète encore, avec une codification unique, une unité et un taux de taxe vérifiés", "Aucun code en double ; prix de vente de vingt articles comparés au tarif en vigueur"],
                ['Stocks', "Reprendre les quantités issues d'un comptage fait juste avant le démarrage, pas d'un fichier ancien", "Valeur totale du stock importé égale à celle de l'inventaire signé"],
                ['Factures clients et fournisseurs non soldées', "Reprendre chaque pièce ouverte avec son reste dû et son échéance, pour que les relances et les paiements continuent", "Total des impayés clients et des dettes fournisseurs identique à la balance âgée de l'ancien système"],
                ['Soldes comptables', "Reprendre une balance d'ouverture validée par le comptable, à une date de début de période", "Balance d'ouverture du nouvel ERP identique, compte par compte, à la balance de clôture de l'ancien"],
                ['Historique des ventes et des achats', "Le plus souvent, ne pas le reprendre pièce par pièce ; garder l'ancien système ou ses exports consultables", "L'archive s'ouvre, et une personne nommée sait où chercher une ancienne facture"],
                ['Commandes, devis et contrats en cours', "Reprendre ce qui sera livré, facturé ou renouvelé après le démarrage, et rien d'autre", "Liste des commandes ouvertes rapprochée de celle du service commercial"],
                ['Données des salariés', "Reprendre seulement ce que le module retenu exige, avec des droits d'accès restreints", "Liste des personnes habilitées à consulter ces fiches, validée par la direction"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi une reprise de données se prépare-t-elle avec la rigueur d'une clôture comptable ?",
            'paragraphes' => [
                "Parce qu'une erreur d'import ne s'efface pas d'un clic. La documentation d'Odoo consacrée à l'import de données, consultée le 5 octobre 2026, prévient que les imports sont définitifs et ne peuvent pas être annulés ; elle demande de cliquer sur Tester avant d'importer, conseille de conserver la colonne d'identifiant externe qui relie les enregistrements entre eux, et recommande de traiter les gros fichiers par lots plus petits. Le wiki de Dolibarr, consulté le même jour, décrit un assistant d'import en cinq étapes qui se termine par une simulation : elle vérifie les valeurs et affiche un rapport d'erreurs avant l'import final, et chaque ligne importée garde une clé qui indique la date de l'import.",
                "Ces protections ne servent que si l'entreprise a décidé à l'avance ce qu'un import juste doit donner. D'où la règle enseignée pendant la quatrième demi-journée : aucun fichier n'entre dans la base définitive sans un import d'essai sur une base de test, suivi d'un contrôle de concordance signé par le référent du flux. On compare des nombres de fiches, des totaux, une valeur de stock, une balance. Si l'écart n'est pas expliqué, le fichier repart au nettoyage. Ce travail paraît lent ; il coûte beaucoup moins que trois mois de corrections à la main après le démarrage.",
                "Le droit comptable va dans le même sens. Dans l'espace OHADA, l'article 22 de l'Acte uniforme relatif au droit comptable et à l'information financière exige que chaque donnée entrée dans le système de traitement par transmission depuis un autre système soit appuyée d'une pièce justificative probante, et que l'organisation comptable permette de reconstituer le chemin de révision. L'article 24 impose de conserver les livres comptables et les pièces justificatives pendant dix ans. En France, l'article L123-22 du Code de commerce, consulté sur Légifrance, fixe la même durée de dix ans.",
                "Deux conséquences pratiques en découlent. D'abord, les fichiers de reprise validés, les rapports de contrôle et la balance d'ouverture signée sont archivés avec le dossier du projet : ce sont les pièces qui justifient les soldes de départ. Ensuite, l'ancien système ne disparaît pas le jour de la bascule. Il reste consultable en lecture, ou ses exports complets sont conservés dans un format ouvert, pendant toute la durée légale. La personne chargée de cette archive est nommée dans la matrice des rôles, et l'abonnement de l'ancien logiciel n'est résilié qu'une fois l'export vérifié.",
            ],
        ],
        [
            'type'    => 'comparaison',
            'titre'   => "Démarrer d'un coup, par paliers ou avec une double saisie temporaire : comment choisir ?",
            'options' => ['Tout le même jour', 'Par paliers', 'Double saisie temporaire'],
            'criteres' => [
                ['critere' => 'Principe', 'valeurs' => ["Tous les flux et tous les utilisateurs passent sur le nouvel ERP à une date unique", "Un flux ou un site démarre, se stabilise, puis le suivant le rejoint", "Les mêmes opérations sont saisies dans l'ancien outil et dans le nouveau pendant une période courte"]],
                ['critere' => 'Quand le retenir', 'valeurs' => ["Petite structure, un seul site, peu de flux, logiciels anciens impossibles à faire cohabiter", "Plusieurs sites ou plusieurs flux liés, équipe qui découvre ce type de logiciel", "Flux à fort enjeu, comme la facturation ou la paie, sur une ou deux périodes au plus"]],
                ['critere' => 'Risque principal', 'valeurs' => ["Un défaut touche toute l'activité en même temps, sans repli simple", "Des passerelles provisoires entre ancien et nouvel outil, à surveiller", "Une charge doublée qui épuise l'équipe et des écarts qu'on n'a pas le temps d'expliquer"]],
                ['critere' => 'Ce qu\'il faut prévoir', 'valeurs' => ["Une répétition générale complète et un chemin de retour écrit", "L'ordre des paliers et la date de fin de chaque passerelle", "Une date de fin ferme et une personne qui compare les deux résultats chaque jour"]],
            ],
            'verdict' => "Pour une PME, le démarrage par paliers reste le choix le plus sûr, avec un premier palier qui touche le flux le plus simple à contrôler. La double saisie se limite à une période courte et à un flux précis. L'<a href=\"/histoires/tsb-migration\">histoire de la banque TSB</a> montre à grande échelle le coût d'une bascule unique sans retour possible.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que retenir de la migration ratée de TSB pour une PME qui change de logiciel ?",
            'paragraphes' => [
                "Selon le communiqué de la FCA, l'autorité britannique des marchés financiers, publié le 20 décembre 2022, la migration informatique menée par la banque TSB en avril 2018 a perturbé toutes ses agences et environ 5,2 millions de clients, avec des difficultés qui ont duré jusqu'en décembre 2018. La FCA et la PRA lui ont infligé ensemble 48,65 millions de livres d'amende, en lui reprochant de ne pas avoir organisé et contrôlé correctement le programme de migration, ni géré les risques liés à son prestataire informatique.",
                "Une PME de vingt personnes n'a pas la taille d'une banque, mais les mécanismes se retrouvent à petite échelle : une date de démarrage fixée avant de connaître le travail restant, des tests raccourcis pour tenir cette date, un prestataire dont personne ne vérifie vraiment l'avancement, et aucun plan pour revenir en arrière. La cinquième demi-journée s'appuie sur ce cas pour construire des critères de bascule que le dirigeant ne peut pas contourner sous la pression du calendrier.",
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => "Quelles conditions réunir avant d'autoriser le démarrage ?",
            'items' => [
                "Chaque scénario de recette prévu a été joué par un référent, sur une base qui contient les données reprises, et son résultat est noté.",
                "Aucune anomalie classée bloquante ne reste ouverte ; les anomalies gênantes ont une date de correction et un contournement écrit.",
                "Les contrôles de concordance de la reprise sont signés : tiers, articles, stock, pièces ouvertes, balance d'ouverture.",
                "Chaque utilisateur a un compte nominatif, avec les droits de son poste, et s'est connecté au moins une fois.",
                "Les utilisateurs de chaque poste ont été formés aux gestes de leur poste dans les jours qui précèdent.",
                "Les documents imprimés ou envoyés aux clients (devis, factures, bons de livraison) ont été vérifiés par la direction.",
                "La date de démarrage évite une fin de mois, une clôture, un inventaire et la haute saison.",
                "Le chemin de retour est écrit : jusqu'à quand on peut revenir en arrière, comment, et qui le décide.",
                "Les référents sont disponibles à plein temps pour leurs collègues pendant les premiers jours.",
                "Le dirigeant a signé la décision de démarrer, au vu de cette liste.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle menée pour que le projet avance entre deux séances ?",
            'intro' => "Il s'agit d'une formation-action : chaque demi-journée part du projet réel de l'entreprise et se termine par un document qui servira la semaine suivante. Les principes ci-dessous valent pour toutes les séances.",
            'items' => [
                ['titre' => "Un seul projet sur la table : le vôtre", 'texte' => "En intra, tous les exercices portent sur vos processus, vos fichiers et vos volumes. Les exemples tirés d'autres secteurs ne servent qu'à éclairer un point, jamais à remplir le temps."],
                ['titre' => "Des petits groupes qui décident", 'texte' => "Quatre à huit personnes, celles qui portent le projet. Au-delà, la séance devient une réunion d'information et les décisions repartent en couloir."],
                ['titre' => "Des séances calées sur le calendrier du projet", 'texte' => "Les six demi-journées sont espacées pour tomber au moment où la décision se prend. Entre deux séances, l'équipe complète les documents commencés ensemble, et la séance suivante commence par leur relecture."],
                ['titre' => "Des documents, pas des diapositives", 'texte' => "Les supports remis sont des modèles remplis par l'équipe : carte des processus, grille de choix, matrice des rôles, inventaire des données, cahier de recette, tableau d'usage. Ils restent à l'entreprise, au format modifiable."],
                ['titre' => "Un regard indépendant de l'intégrateur", 'texte' => "La formation ne vend ni le logiciel ni son paramétrage. Quand l'entreprise a déjà un prestataire, il peut être invité à une partie de la troisième ou de la cinquième demi-journée pour présenter son plan, que l'équipe relit avec la grille vue en séance."],
                ['titre' => "Un suivi sur l'usage réel", 'texte' => "La sixième demi-journée a lieu sur les chiffres de l'entreprise, six semaines après le démarrage. Entre-temps, le chef de projet dispose d'un canal direct pour les questions de méthode."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels logiciels et quels outils la formation utilise-t-elle, et quels coûts d'éditeur prévoir ?",
            'legende' => "Prix et versions relevés le 5 octobre 2026 sur les pages officielles citées dans les sources, hors taxes sauf mention contraire. Ils se paient à l'éditeur ou à l'hébergeur, jamais au formateur, et peuvent changer : vérifiez-les au moment de commander.",
            'entetes' => ['Logiciel ou outil', 'Version ou offre', 'Coût publié', 'Usage pendant la formation'],
            'lignes'  => [
                ['Odoo Online', "Odoo 20.0, sortie en septembre 2026, support standard prévu jusqu'en septembre 2029", "Une application gratuite ; Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 € (en mensuel : 24,90 €, puis 31,10 €) ; Personnalisé à 35,90 €, puis 44,90 € (en mensuel : 44,90 €, puis 56,90 €) ; utilisateur léger à 7,90 €", "Candidat fréquent de la grille de choix ; une base d'essai sert aux scénarios de démonstration et aux imports d'essai"],
                ['Dolibarr', "24.0.1, publiée sur GitHub le 7 septembre 2026", "Logiciel libre, sans licence à payer", "Second candidat fréquent ; son assistant d'import avec simulation sert d'exemple à la quatrième demi-journée"],
                ['DoliCloud', "Hébergement de Dolibarr par l'éditeur du service", "Basic à 14 € par utilisateur et par mois ; Premium à 30 € par mois plus 15 € par utilisateur ; test gratuit de 30 jours ou plus, sans engagement", "Permet de tester Dolibarr sur vos scénarios avant toute décision"],
                ['ERPNext', "Progiciel libre publié sous licence GPL-3.0", "Sans licence à payer ; hébergement et intégration à chiffrer", "Exemple de candidat libre hors Odoo et Dolibarr, quand l'entreprise le cite"],
                ['Logiciels propriétaires', "Sage, SAP Business One, Microsoft Dynamics 365 Business Central ou un logiciel local", "Tarifs fixés par l'éditeur ou son revendeur, à obtenir par écrit", "La grille de choix et les scénarios s'appliquent de la même façon ; aucun éditeur n'est favorisé"],
                ['Tableur', "Excel, LibreOffice Calc ou Google Sheets", "Selon la suite déjà utilisée", "Inventaire des données, fichiers de reprise, contrôles de concordance et tableau d'usage"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble ce projet selon l'entreprise, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Négoce de matériaux, à Cotonou", 'probleme' => "Trois dépôts, un fichier de stock par dépôt et des ventes à crédit suivies dans un cahier ; le dirigeant hésite entre deux offres qu'il ne sait pas comparer.", 'solution' => "Carte des processus des trois dépôts, scénarios de démonstration construits sur un transfert entre dépôts et une vente payée en trois fois, puis démarrage par paliers : le dépôt principal d'abord, les deux autres après un mois de stabilité."],
                ['secteur' => "Industrie agroalimentaire, à Abidjan", 'probleme' => "Un ancien logiciel installé sur un seul poste arrive en fin de vie ; les lots et les dates de péremption ne sont tracés que sur papier.", 'solution' => "Inventaire des données centré sur les articles et les lots, comptage complet juste avant la reprise, recette jouée par le responsable qualité, ancien logiciel conservé en lecture pour les archives comptables."],
                ['secteur' => "ONG ou projet financé, à Dakar ou à Ouagadougou", 'probleme' => "Le bailleur exige une traçabilité des achats ; la reprise des engagements en cours et des pièces justificatives inquiète l'équipe financière.", 'solution' => "Rôles séparés entre demande, validation et paiement dans la matrice, reprise limitée aux engagements ouverts, archive des exercices clos organisée pour le contrôle du bailleur."],
                ['secteur' => "Groupe de distribution, à Douala et à Libreville", 'probleme' => "Deux sociétés dans deux pays, deux plans de taxes, et une maison mère qui impose un logiciel sans consulter les équipes locales.", 'solution' => "Formation centrée sur les demi-journées 3 à 6 : référents par pays, scénarios de recette propres à chaque fiscalité, démarrage décalé entre les deux sociétés et indicateurs d'usage suivis séparément."],
                ['secteur' => "PME de services, en France", 'probleme' => "Les devis sortent d'un traitement de texte, les factures d'un autre outil, et, selon impots.gouv.fr, l'entreprise devra émettre ses factures sous forme électronique à partir du 1er septembre 2027.",'solution' => "Formation à distance en séances courtes, objectifs reliés à l'échéance, choix entre deux logiciels sur des scénarios de facturation, et calendrier de démarrage fixé plusieurs mois avant la date légale."],
                ['secteur' => "Entreprise artisanale, en Belgique", 'probleme' => "L'ERP est installé depuis un an, mais l'équipe continue de tenir ses chantiers dans des tableurs ; personne ne sait pourquoi.", 'solution' => "Seule la sixième demi-journée est suivie, sous forme d'atelier : relevé des contournements, tri entre formation, réglage et besoin non couvert, puis calendrier d'arrêt des tableurs."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Intra, inter, à distance ou hybride : quel format pour former une équipe projet ?",
            'options'  => ['Intra dans vos locaux', 'Inter-entreprises', 'À distance', 'Hybride'],
            'criteres' => [
                ['critere' => 'Matière de travail', 'valeurs' => ["Votre projet, vos fichiers, vos décisions", "Un cas d'entreprise fictif, puis le projet de chacun en exercice individuel", "Votre projet, documents partagés à l'écran", "Votre projet, en salle pour les décisions, à distance pour les relectures"]],
                ['critere' => 'Pour qui', 'valeurs' => ["Une équipe projet constituée, dirigeant compris", "Un dirigeant ou un chef de projet seul, avant de constituer son équipe", "Des équipes réparties entre plusieurs sites ou pays, ou une entreprise en Europe ou au Canada", "Un projet qui dure plusieurs mois, avec des séances espacées"]],
                ['critere' => 'Rythme', 'valeurs' => ["Six demi-journées espacées selon le projet", "Deux journées regroupées", "Séances de deux à trois heures", "Démarrage en salle, suite en séances courtes"]],
                ['critere' => 'Limite', 'valeurs' => ["Mobilise les décideurs au même moment", "Les décisions propres à votre entreprise ne se prennent pas en séance", "Les arbitrages délicats passent moins bien à l'écran", "Deux organisations à caler"]],
            ],
            'verdict'  => "L'intra ou l'hybride conviennent le mieux, parce que la formation y produit les décisions du projet. L'inter sert surtout au dirigeant qui veut comprendre la démarche avant de lancer son entreprise dans un choix ; la distance convient aux équipes réparties et aux séances de relecture.",
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le prix ?",
            'intro'      => "Aucun montant n'est publié : chaque proposition est établie sur devis, après un premier échange, un cadrage et un devis gratuits, avec une réponse sous 24 heures. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => "Parcours complet", 'prix' => 'Sur devis', 'inclus' => ["Les six demi-journées, calées sur votre calendrier", "Modèles de documents remplis sur votre projet", "Relecture des documents entre deux séances", "Canal direct pour les questions de méthode"]],
                ['offre' => "Projet déjà engagé avec un intégrateur", 'prix' => 'Sur devis', 'inclus' => ["Demi-journées 3 à 6", "Relecture du plan de l'intégrateur avec l'équipe", "Cahier de recette et critères de bascule", "Mesure de l'usage après démarrage"]],
                ['offre' => "Atelier de reprise en main", 'prix' => 'Sur devis', 'inclus' => ["Pour un ERP déjà en service mais mal utilisé", "Relevé des contournements", "Plan d'arrêt des fichiers parallèles", "Choix des formations utilisateurs à prévoir"]],
            ],
            'variations' => [
                "Le nombre de demi-journées retenues et leur espacement dans le calendrier du projet.",
                "Le nombre de sites, de sociétés ou de pays concernés par le projet.",
                "Le volume et l'état des données à inventorier, et le nombre de fichiers sources.",
                "La relecture de documents entre les séances : plan de l'intégrateur, contrat, fichiers de reprise.",
                "Le lieu : vos locaux à Cotonou ou ailleurs, une autre ville ou un autre pays, ou la visioconférence.",
                "Les licences et l'hébergement du logiciel retenu restent à votre charge et ne figurent jamais dans le devis de formation.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il financer une partie du parcours ?",
            'paragraphes' => [
                "Rien n'est promis ici : la réponse appartient au fonds, qui applique ses propres règles à l'entreprise, à l'action et au prestataire. Les éléments qui suivent ont été relevés le 5 octobre 2026 sur les sites officiels ; ils aident à formuler la demande avant de signer, pas à préjuger de la réponse. Une formation-action sur un projet ERP peut d'ailleurs être classée différemment d'une formation aux gestes d'un logiciel : posez la question avec le programme détaillé en main.",
                "En Côte d'Ivoire, la page du FDFP sur les procédures d'habilitation indique que l'habilitation, prononcée pour une année, s'impose à tout opérateur de formation privé qui veut bénéficier de ses financements, et en dispense les structures situées hors du pays. Au Bénin, le décret n° 2022-286 du 11 mai 2022 approuve les statuts du Fonds de développement de la formation professionnelle continue et de l'apprentissage, auprès duquel se renseigner. Au Sénégal, le 3FPT affiche un guichet de financement du personnel des entreprises et des membres des organisations professionnelles.",
                "En France, France Compétences rappelle que depuis le 1er janvier 2022, les prestataires d'actions de développement des compétences doivent être certifiés Qualiopi pour accéder aux fonds des OPCO, des régions, de France Travail, de l'Agefiph, de la Caisse des dépôts ou de l'État. Richard SALANON n'affiche ni cette certification ni l'agrément d'un fonds africain. Prévoyez donc le budget sans prise en charge, sauf réponse écrite contraire du fonds. Le programme, les feuilles de présence et les documents produits pendant le parcours restent utiles si un dossier est recevable.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quel piège fait échouer un projet ERP avant même la première saisie ?",
            'texte' => "Confier tout le projet au prestataire et garder l'équipe à l'écart jusqu'au jour de la formation des utilisateurs. L'intégrateur paramètre alors ce qu'il a compris en deux réunions, les référents découvrent les écrans à la recette, et chaque écart avec le travail réel devient une demande de modification payante ou un contournement silencieux. Le remède est simple à énoncer et difficile à tenir : nommer un chef de projet interne, libérer réellement son temps et celui des référents, et faire valider chaque choix de paramétrage par la personne qui vivra avec.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on après la formation, et comment les éviter ?",
            'intro' => "Même une équipe bien préparée peut retomber dans ces travers quand le calendrier se tend. Les connaître à l'avance permet de les repérer au comité de projet, avant qu'ils ne coûtent cher.",
            'items' => [
                ['titre' => "Repousser sans cesse la date d'arrêt des anciens fichiers", 'texte' => "Tant que le tableur de suivi reste alimenté, il reste la référence, et l'ERP passe pour un doublon. Une date d'arrêt est fixée pour chaque fichier, annoncée par le dirigeant et tenue, sauf décision écrite du comité."],
                ['titre' => "Laisser le périmètre gonfler en cours de route", 'texte' => "Chaque service ajoute « juste une fonction », et le premier palier n'en finit plus. Toute demande nouvelle passe par le journal des décisions et part, par défaut, dans la liste du palier suivant."],
                ['titre' => "Reprendre l'historique « au cas où »", 'texte' => "Importer des années de ventes multiplie le nettoyage et les erreurs, pour un usage rare. L'historique reste consultable dans l'archive ; seules les pièces ouvertes entrent dans le nouvel outil."],
                ['titre' => "Réduire la recette pour tenir la date", 'texte' => "C'est la tentation de la dernière semaine. Les critères de bascule servent précisément à l'empêcher : si un scénario n'a pas été joué, on décale le démarrage, pas le test."],
                ['titre' => "Laisser les référents seuls après le démarrage", 'texte' => "Ils répondent aux questions de leurs collègues en plus de leur travail, s'épuisent et finissent par faire à leur place. Leur charge habituelle est allégée pendant les premières semaines, et les questions récurrentes remontent au chef de projet."],
                ['titre' => "Mesurer l'usage par impression", 'texte' => "« Ça a l'air de marcher » ne dit rien. On relève les indicateurs fixés au départ : part des factures émises depuis l'ERP, documents restés en brouillon, doublons créés, délai entre livraison et facture."],
                ['titre' => "Confondre un besoin non couvert et une mauvaise habitude", 'texte' => "Un contournement n'est pas toujours de la résistance : il révèle parfois un écran ou un rapport qui manque. Chaque contournement est classé avant d'être corrigé, pour former, régler ou développer selon le cas."],
                ['titre' => "Garder un compte administrateur partagé", 'texte' => "Pratique pendant le projet, dangereux ensuite : on ne sait plus qui a modifié un réglage. L'administrateur fonctionnel a son propre compte, et les accès du prestataire sont revus à la fin du contrat."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Données personnelles, archives, connexion : que change le contexte local pour un projet ERP ?",
            'paragraphes' => [
                "Un ERP réunit dans une même base les clients, les fournisseurs et souvent les salariés : la reprise est donc aussi une opération sur des données personnelles. Au Bénin, l'article 383 de la loi n° 2017-20 du 20 avril 2018 portant code du numérique demande des données adéquates, pertinentes et non excessives, exactes et mises à jour, conservées pas plus longtemps que nécessaire. C'est un argument juridique pour ne pas reprendre les fiches dormantes et pour corriger les coordonnées fausses avant l'import plutôt qu'après. En Europe, l'article 5 du RGPD, publié par la CNIL, pose les mêmes principes de minimisation, d'exactitude et de limitation de la conservation.",
                "Le prestataire qui importe et paramètre accède à ces données. L'article 426 de la loi béninoise soumet le choix du sous-traitant et le contrat qui le lie au responsable du traitement aux dispositions du code, et demande que les clauses relatives à la protection des données soient consignées par écrit. En Europe, l'article 28 du RGPD exige un contrat qui prévoit notamment des instructions documentées, la confidentialité des personnes autorisées, des mesures de sécurité, et la suppression ou le renvoi des données au terme de la prestation, au choix du client. La deuxième demi-journée transforme ces textes en questions concrètes à poser à l'intégrateur avant de signer.",
                "Les obligations comptables pèsent sur le calendrier. Dans l'espace OHADA, la conservation des livres et des pièces pendant dix ans prévue par l'article 24 de l'Acte uniforme oblige à organiser l'archive de l'ancien système avant de résilier son abonnement. En France, selon impots.gouv.fr (page modifiée le 16 janvier 2026), toutes les entreprises doivent pouvoir recevoir des factures électroniques depuis le 1er septembre 2026, et les PME et micro-entreprises devront les émettre à partir du 1er septembre 2027 : un projet ERP lancé tard laisse peu de marge pour la recette.",
                "La connexion influe sur le choix et sur le démarrage. Selon le rapport Digital 2026 de DataReportal consacré au Bénin, le pays comptait 4,80 millions d'internautes fin 2025, soit 32,2 % de la population. Un ERP en ligne reste un bon choix pour beaucoup de PME, à condition de tester les scénarios de démonstration depuis vos propres locaux et vos propres connexions, de prévoir une connexion de secours le jour du démarrage et de vérifier les sauvegardes. Les séances se tiennent en français, et en anglais quand une partie de l'équipe ou la maison mère le demande.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi préparer votre projet ERP avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il voit les projets ERP des deux côtés. Avec " . $ans . " ans d'expérience dans le numérique et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il déploie Odoo et Dolibarr, reprend des données issues de tableurs ou d'anciens logiciels, et forme ensuite les équipes qui doivent s'en servir. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux logiciels de gestion.",
                "Il a travaillé au Bénin, en Côte d'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Il n'est rattaché à aucun éditeur et n'affiche aucune certification d'éditeur : la grille de choix enseignée ne favorise ni Odoo, ni Dolibarr, ni un autre logiciel, et elle peut conclure qu'un tableur bien tenu suffit encore. Quand il est aussi pressenti comme intégrateur, il le dit dès le premier échange, pour que l'entreprise garde la main sur sa décision.",
                "Sa façon de former tient à quelques engagements vérifiables : une réponse sous 24 heures, un cadrage gratuit qui peut déconseiller la formation, des séances placées au moment où les décisions se prennent, des documents produits par l'équipe et laissés à l'entreprise, et aucune promesse de résultat. Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays où il intervient sur la page <a href=\"/zones/\">zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de lancer votre projet ERP ?",
            'texte' => "Décrivez vos processus tels qu'ils sont avant de regarder un logiciel, choisissez sur vos propres scénarios, nommez un chef de projet interne et libérez son temps, reprenez peu de données mais des données contrôlées, ne démarrez qu'une fois les critères réunis, puis mesurez l'usage et arrêtez les anciens fichiers. Les formations aux gestes de chaque logiciel sont sur la page <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>, le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> aide à poser le choix, et l'ensemble du catalogue figure sur la page des <a href=\"/formations/\">formations</a>.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous préparer votre projet ERP avant de signer ?",
            'texte'  => "Décrivez votre activité, le nombre d'utilisateurs, les outils actuels, le logiciel envisagé s'il y en a un et la date visée : vous recevez une réponse sous 24 heures, une proposition de calendrier des séances et un devis, sans engagement.",
            'bouton' => ['url' => '/contact', 'texte' => 'Préparer mon projet ERP'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il avoir choisi le logiciel avant de suivre la formation ?", 'r' => "Non. Les deux premières demi-journées servent justement à préparer ce choix, avec une grille et des scénarios construits sur votre activité. Si le logiciel est déjà retenu, ou imposé par une maison mère, la formation commence à la troisième demi-journée, sur les rôles et la reprise."],
        ['q' => "La formation est-elle utile si nous avons déjà un intégrateur ?", 'r' => "Oui, c'est même un cas fréquent. Elle prépare l'équipe à tenir son rôle face au prestataire : décider des processus, valider le paramétrage, contrôler la reprise, écrire la recette et autoriser le démarrage. Le prestataire peut être invité à une partie des séances pour présenter son plan."],
        ['q' => "Vaut-elle pour un autre logiciel qu'Odoo ou Dolibarr ?", 'r' => "Oui. La méthode ne dépend pas du logiciel : Sage, SAP Business One, Microsoft Dynamics 365 Business Central, ERPNext ou un logiciel local se choisissent, se reprennent et se démarrent avec les mêmes documents. Les exemples d'import s'appuient sur Odoo et Dolibarr parce que leur documentation est publique."],
        ['q' => "Qui doit y participer au minimum ?", 'r' => "Le dirigeant pour les séances de décision, le chef de projet interne pour tout le parcours, et un référent par grand flux. Le comptable rejoint la séance sur la reprise. Former le chef de projet seul le laisse sans pouvoir sur les arbitrages."],
        ['q' => "Combien de temps faut-il prévoir pour le projet lui-même ?", 'r' => "Cela dépend du périmètre, du nombre de sites et de l'état des données, et c'est l'une des questions travaillées en séance. La formation n'avance pas de durée type : elle apprend à construire un calendrier à partir du travail restant, et non l'inverse."],
        ['q' => "Que faire de l'historique de l'ancien logiciel ?", 'r' => "Le plus souvent, le laisser dans l'ancien système en lecture, ou dans des exports complets et lisibles, et ne reprendre que les pièces ouvertes. Dans l'espace OHADA comme en France, les livres et pièces se conservent dix ans : l'archive est organisée avant de résilier l'ancien abonnement."],
        ['q' => "Comment savoir si l'équipe utilise vraiment le nouvel ERP ?", 'r' => "En comparant, six semaines après le démarrage, les indicateurs fixés le premier jour à leur point de départ : factures émises depuis l'ERP, documents laissés en brouillon, doublons créés, fichiers parallèles encore alimentés. C'est l'objet de la sixième demi-journée."],
        ['q' => "Notre ERP est en service depuis un an, mais mal utilisé : la formation convient-elle ?", 'r' => "Oui, sous la forme de l'atelier de reprise en main, qui part de la sixième demi-journée : relevé des contournements, tri entre formation, réglage et besoin non couvert, puis plan d'arrêt des fichiers parallèles et choix des formations utilisateurs à prévoir."],
        ['q' => "La formation peut-elle se faire entièrement à distance ?", 'r' => "Oui, en séances de deux à trois heures avec des documents partagés à l'écran. Pour les séances où le dirigeant arbitre, une rencontre en salle reste préférable, d'où la formule hybride souvent proposée."],
        ['q' => "Combien coûte la formation ?", 'r' => "Le prix est fixé sur devis, après un premier échange et un cadrage gratuits. Il dépend du nombre de séances, du nombre de sites ou de sociétés, de l'état des données et du lieu. Les licences et l'hébergement du logiciel choisi ne figurent pas dans le devis."],
        ['q' => "Un fonds de formation peut-il prendre en charge le coût ?", 'r' => "Peut-être, selon le pays et les règles du fonds : FDFP en Côte d'Ivoire, fonds de formation continue au Bénin, 3FPT au Sénégal, OPCO en France. Richard SALANON n'affiche ni certification Qualiopi ni agrément d'un fonds : interrogez le fonds par écrit avant de signer."],
        ['q' => "Nos documents internes restent-ils confidentiels ?", 'r' => "Oui. Les fichiers de l'entreprise ne servent qu'à ses propres séances, un engagement de confidentialité peut être signé avant le cadrage, et rien de ce qui est vu chez un client n'est réutilisé ailleurs. En inter-entreprises, chacun travaille sur un cas fictif et sur son propre projet."],
    ],

    'sources' => [
        ['titre' => "Odoo, documentation : import et export de données (Export and import data)", 'url' => 'https://www.odoo.com/documentation/master/applications/essentials/export_import_data.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, documentation : support standard et étendu des versions", 'url' => 'https://www.odoo.com/documentation/master/administration/standard_extended_support.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page Tarification", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, module Imports (assistant d'import et simulation)", 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_Imports', 'date' => '2026-10-05'],
        ['titre' => "GitHub, publication de Dolibarr 24.0.1 (7 septembre 2026)", 'url' => 'https://github.com/Dolibarr/dolibarr/releases/tag/24.0.1', 'date' => '2026-10-05'],
        ['titre' => "DoliCloud, tarifs des offres Basic et Premium", 'url' => 'https://www.dolicloud.com/fr/fr-faq-pricing.php', 'date' => '2026-10-05'],
        ['titre' => "GitHub, dépôt d'ERPNext (licence GPL-3.0)", 'url' => 'https://github.com/frappe/erpnext', 'date' => '2026-10-05'],
        ['titre' => "OHADA, Acte uniforme relatif au droit comptable et à l'information financière (articles 22 et 24)", 'url' => 'https://biblio.ohada.org/doc_num.php?explnum_id=2061', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, Code de commerce, article L123-22", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006219327', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 383 et 426)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, RGPD, chapitre 2 : principes (article 5)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre2', 'date' => '2026-10-05'],
        ['titre' => "CNIL, RGPD, chapitre 4 : responsable du traitement et sous-traitant (article 28)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => "FCA, communiqué du 20 décembre 2022 : TSB sanctionnée de 48,65 millions de livres", 'url' => 'https://www.fca.org.uk/news/press-releases/tsb-fined-48m-operational-resilience-failings', 'date' => '2026-10-05'],
        ['titre' => "impots.gouv.fr, à partir de quand suis-je concerné par la réforme de la facturation électronique ?", 'url' => 'https://www.impots.gouv.fr/professionnel/questions/partir-de-quand-suis-je-concerne-par-la-reforme-de-la-facturation', 'date' => '2026-10-05'],
        ['titre' => "DataReportal, rapport Digital 2026 consacré au Bénin", 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => "FDFP, procédures d'habilitation des opérateurs de formation", 'url' => 'https://fdfp.ci/procedures-dhabilitation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-utilisateurs', 'dolibarr-utilisateurs', 'odoo-dirigeants', 'conduite-du-changement', 'odoo-comptabilite-syscohada', 'excel-google-sheets'],
        'services'    => ['integration-odoo', 'integration-dolibarr', 'audit-etude-de-projet'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
