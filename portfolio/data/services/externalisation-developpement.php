<?php
// ============================================================
// data/services/externalisation-developpement.php · Pilier « Externalisation
// du développement » (vague 1A). Nouveau slug, matrice prévue pour l'Europe
// francophone et le Canada (spec 6.2 et 6.8 ; redirections.php, ligne 26).
// Reprend des anciennes pages /externaliser-developpement-web-{ville} les
// informations qui concordent avec faits.php : cadrage en deux à trois
// séances, livraisons toutes les deux semaines, point hebdomadaire, paiement
// par jalons, droit applicable au choix du client, transfert complet en fin
// de mission. Écarte ce qui ne concorde pas (« zéro à deux heures » de
// décalage avec Paris, services de transfert absents de la fiche).
// Faits externes relevés sur les pages officielles le 04/10/2026.
// Ne reprend aucune phrase de developpeur-web-freelance.php.
// ============================================================
declare(strict_types=1);

$reponse  = 'sous ' . fait('delai_reponse');
$enum     = static fn(array $v): string => count($v) > 1 ? implode(', ', array_slice($v, 0, -1)) . ' et ' . $v[count($v) - 1] : (string) ($v[0] ?? '');
$moyens   = $enum(array_values(fait('paiements')));
$plage    = fait('horaires');
$ouvre    = (int) substr($plage['ouverture'], 0, 2);
$ferme    = (int) substr($plage['fermeture'], 0, 2);
$creneau  = static fn(int $decalage): string => 'de ' . (($ouvre + $decalage + 24) % 24) . ' h à ' . (($ferme + $decalage + 24) % 24) . ' h';
$paysVus  = $enum(array_values(fait('pays_travailles')));
$annees   = (int) fait('experience_ans');
$livres   = 'plus de ' . rtrim((string) fait('projets_livres'), '+');
$formes   = 'plus de ' . rtrim((string) fait('personnes_formees'), '+');

return [
    'titre'   => 'Externalisation du développement web et logiciel à Cotonou : un développeur full stack francophone qui rejoint votre production, à l\'heure de l\'Europe',
    'title'   => 'Externalisation du développement web | Richard SALANON',
    'meta'    => 'Agences, ESN et PME d\'Europe ou du Canada : confiez des lots de développement web à Cotonou, en UTC+1, en régie, au forfait ou en marque blanche.',
    'en_bref' => 'Vous confiez à Richard SALANON, développeur full stack installé à Cotonou, une partie de votre production web ou logicielle : lots au forfait, régie au temps passé, développeur dédié à votre équipe ou marque blanche pour agence, sur votre propre dépôt et selon vos conventions. Le service s\'adresse aux agences web, ESN, startups et PME d\'Europe francophone et du Canada qui manquent de bras sans vouloir recruter. Le cadrage tient en deux à trois séances de visioconférence, puis les livraisons arrivent toutes les deux semaines. Le prix est établi sur devis, gratuit après cadrage, et la première réponse arrive ' . $reponse . '.',
    'publie'  => '2026-10-04',
    'maj'     => '2026-10-04',
    'famille' => 'Applications et IA',
    'matrice' => true,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => 'Cadrage en 2 à 3 séances, puis une livraison toutes les deux semaines'],
        ['l' => 'Pour qui', 'v' => 'Agences web, ESN, startups et PME d\'Europe francophone et du Canada'],
        ['l' => 'Livrables', 'v' => 'Code versé sur votre dépôt, revues, tests, documentation et relevés de temps'],
        ['l' => 'Réponse', 'v' => $reponse],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que signifie externaliser son développement vers Cotonou, et qu\'est-ce que cela n\'inclut pas ?',
            'paragraphes' => [
                'Externaliser, ici, veut dire sortir de vos murs une partie de la production sans en perdre le pilotage. Une agence parisienne confie l\'intégration de trois maquettes, une ESN bruxelloise le back-end d\'une API, une startup genevoise la reprise de son espace client, une agence montréalaise la maintenance de sites WordPress : le travail est fait depuis Cotonou, versé dans leurs outils, relu et validé par elles. Vous gardez le client final, l\'architecture générale et les priorités ; Richard SALANON prend en charge l\'exécution technique, avec ses propres méthodes de contrôle.',
                'Le vocabulaire du secteur range ce modèle dans deux cases à la fois. Par la distance, le Bénin relève de l\'offshore : il est hors de l\'Union européenne, avec les conséquences juridiques que cela emporte pour les données personnelles. Par l\'horloge et la langue, il se rapproche du nearshore : Cotonou vit à la même heure que Paris en hiver, à une heure d\'écart en été, et l\'on y travaille en français. C\'est cette combinaison, peu courante parmi les destinations d\'externalisation, qui intéresse les équipes francophones.',
                'Le périmètre a des limites claires. Il s\'agit d\'un développeur, pas d\'un plateau de vingt personnes : un projet qui exige cinq profils en parallèle dès la semaine prochaine relève d\'une autre organisation. Ce n\'est pas non plus un prêt de personnel : vous achetez une prestation décrite par des livrables, pas la mise à disposition d\'un salarié que vous dirigeriez heure par heure. Enfin, la relation commerciale avec votre propre client reste la vôtre ; en marque blanche, elle le reste entièrement.',
                'Cette page s\'adresse à l\'entreprise qui externalise une partie de sa production et qui a déjà une équipe, des outils et des clients. Si vous êtes le client final d\'un projet et cherchez une personne pour le mener de bout en bout, la page <a href="/services/developpeur-web-freelance">développeur web freelance</a> décrit cette autre relation. Pour un logiciel complet conçu de zéro, voyez l\'<a href="/services/application-web-sur-mesure">application web sur mesure</a>.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles équipes ont intérêt à externaliser, et à quels signes le besoin est-il mûr ?',
            'intro' => 'L\'externalisation rend service quand la demande dépasse la capacité de l\'équipe sans justifier un recrutement durable. Ces situations reviennent dans la plupart des demandes venues d\'Europe et du Canada.',
            'items' => [
                ['titre' => 'L\'agence refuse des projets qu\'elle saurait vendre', 'texte' => 'Les commerciaux signent, les chefs de projet planifient, mais les intégrateurs et les développeurs back-end sont pris jusqu\'au trimestre suivant. Chaque devis décliné est une marge perdue et parfois un client qui ne reviendra pas.'],
                ['titre' => 'Une ESN doit staffer un profil PHP ou Node.js pour quelques mois', 'texte' => 'Le client a besoin d\'un renfort Laravel ou Node.js sur une durée trop courte pour une embauche. Un développeur externe, intégré au rituel de l\'équipe projet, comble l\'écart sans engager la structure au-delà de la mission.'],
                ['titre' => 'Les tickets de maintenance s\'accumulent', 'texte' => 'Mises à jour de WordPress et de ses extensions, corrections mineures, petites évolutions demandées par les clients : ce travail peu visible mobilise des développeurs seniors qui seraient plus utiles sur les nouveaux projets.'],
                ['titre' => 'La startup a un directeur technique, mais pas assez de mains', 'texte' => 'L\'architecture est décidée, les priorités sont claires, le produit doit avancer plus vite que le recrutement. Un développeur externe exécute des lots bien délimités pendant que l\'équipe interne garde les décisions structurantes.'],
                ['titre' => 'Une PME tient un ERP ou une application maison', 'texte' => 'Odoo, Dolibarr ou un outil développé il y a quelques années, avec un informaticien interne qui gère l\'exploitation mais pas les développements. Les modules spécifiques, les connecteurs et les montées de version peuvent se confier à l\'extérieur.'],
                ['titre' => 'Vos clients sont aussi en Afrique francophone', 'texte' => 'Paiement par mobile money, connexions lentes, envoi des reçus sur WhatsApp : une agence européenne qui répond à un appel d\'offres à Abidjan ou à Dakar gagne à travailler avec quelqu\'un qui connaît ces contraintes de l\'intérieur.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Personne chez vous ne peut relire le code ni répondre aux questions dans la journée ; le besoin est de produire tout un logiciel sans cahier des charges ; vous cherchez le prix le plus bas sans regarder la qualité. Dans ces cas, l\'externalisation déçoit, quel que soit le prestataire.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Régie, forfait, développeur dédié ou marque blanche : quel mode d\'engagement choisir ?',
            'legende' => 'Les quatre façons de travailler avec Richard SALANON en externalisation. Le mode retenu, le taux ou le prix et l\'échéancier sont écrits au devis ; plusieurs modes peuvent se combiner sur un même compte.',
            'entetes' => ['Mode', 'Principe', 'Quand le choisir', 'Qui pilote', 'Point à verrouiller'],
            'lignes'  => [
                ['Régie (temps passé)', 'Le temps réellement consacré à vos tickets, à un taux journalier fixé au devis', 'Backlog vivant, priorités qui changent chaque semaine, reprise de code existant', 'Vous : vous ordonnez les tickets, il les réalise', 'Un plafond de jours par mois et un relevé du temps par ticket'],
                ['Forfait par lot', 'Un prix ferme pour un lot décrit : maquettes, critères d\'acceptation, livrables', 'Intégration d\'une maquette validée, module au périmètre stable, connecteur bien spécifié', 'Lui, dans le cadre du lot', 'Des critères d\'acceptation écrits avant le chiffrage, et un avenant pour tout ajout'],
                ['Développeur dédié', 'Une part fixe de sa semaine réservée à votre équipe, sur plusieurs mois', 'Produit en développement continu, besoin régulier qui ne justifie pas un poste', 'Vous, au sein de vos rituels', 'La part de semaine réservée, le préavis de fin et la passation'],
                ['Marque blanche (agences)', 'Le travail est livré sous le nom de l\'agence, qui garde seule la relation avec son client', 'Agence qui vend un projet et en sous-traite tout ou partie de la réalisation', 'L\'agence, qui reste le seul interlocuteur de son client', 'Confidentialité, chaîne des droits sur le code, règles de sous-traitance du pays'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment fonctionne la marque blanche pour une agence, et que faut-il régler au contrat ?',
            'paragraphes' => [
                'En marque blanche, votre client ne voit que votre agence. Le développement est versé sur votre dépôt, les démonstrations passent par vos chefs de projet, les e-mails partent de vos adresses, et Richard SALANON ne contacte jamais votre client sans votre demande. Il a déjà travaillé ainsi, en sous-traitance pour l\'agence Digital Développement : c\'est un fonctionnement qu\'il connaît de l\'intérieur, avec ses contraintes de discrétion et de délais.',
                'La discrétion se formalise au contrat. Une clause de confidentialité couvre le nom de vos clients, leurs données et vos méthodes ; une clause de non-sollicitation interdit au prestataire de démarcher directement votre client pendant la mission et pendant une durée convenue ensuite. Le contrat précise aussi ce que le développeur peut montrer dans son propre portfolio : souvent rien, parfois une capture anonymisée avec votre accord écrit.',
                'Marque blanche ne veut pas dire sous-traitance clandestine. En France, la <a href="https://www.legifrance.gouv.fr/loda/id/JORFTEXT000000889241">loi n° 75-1334 du 31 décembre 1975 relative à la sous-traitance</a>, consultée sur Légifrance le 4 octobre 2026, impose à l\'entrepreneur principal, dans son article 3, de faire accepter chaque sous-traitant et agréer ses conditions de paiement par le maître de l\'ouvrage, lorsque la loi s\'applique au contrat. Votre conseil vérifiera si c\'est votre cas ; certains contrats-cadres de vos clients interdisent aussi toute sous-traitance non déclarée.',
                'Les données personnelles imposent la même transparence, pour une autre raison : si le projet touche à des fichiers de clients ou d\'utilisateurs, votre client, responsable du traitement, doit avoir autorisé le recours à un sous-traitant ultérieur. La marque blanche reste donc possible face au public et aux utilisateurs finaux, mais pas dans les documents de conformité que votre client est en droit de consulter.',
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule une externalisation, du premier échange à la fin de mission ?',
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse ' . $reponse, 'texte' => 'Vous décrivez le contexte : nature des lots, technologies en place, volume prévisible, échéances, outils de l\'équipe et contraintes de votre client. Un premier appel permet de dire tout de suite si le besoin correspond, ou s\'il demande une autre organisation.'],
                ['titre' => 'Cadrage', 'duree' => '2 à 3 séances de visioconférence', 'texte' => 'Lecture du code ou des maquettes, revue des conventions (nommage, branches, tests), choix du mode d\'engagement, des canaux de communication et des horaires de recouvrement. Le cadrage se conclut par un devis gratuit et un calendrier daté.'],
                ['titre' => 'Contrat et conformité', 'duree' => 'Quelques jours, en parallèle', 'texte' => 'Contrat de prestation avec cession des droits, confidentialité et non-sollicitation ; contrat de sous-traitance des données personnelles et clauses contractuelles types si des données de résidents européens sont concernées ; justificatifs d\'identification pour votre obligation de vigilance.'],
                ['titre' => 'Intégration à vos outils', 'duree' => '1 à 2 jours', 'texte' => 'Comptes nominatifs sur votre dépôt, votre gestionnaire de tickets et votre messagerie d\'équipe, environnement de développement installé à partir de votre documentation, ou d\'une documentation rédigée à cette occasion si elle manque.'],
                ['titre' => 'Premier lot court', 'duree' => '1 à 2 semaines', 'texte' => 'Un lot volontairement restreint, payé comme les autres, qui sert de test aux deux parties : qualité du code, respect des conventions, rythme des échanges. C\'est le meilleur moment pour ajuster la façon de travailler, avant d\'engager les lots importants.'],
                ['titre' => 'Cycles de production', 'duree' => 'Livraison toutes les deux semaines', 'texte' => 'Chaque cycle livre un incrément testable sur votre serveur de recette, accompagné de ses demandes de fusion relues, de ses tests et d\'une note de version. Un point hebdomadaire à heure fixe fait le tour de l\'avancement, des blocages et des prochaines priorités.'],
                ['titre' => 'Recette et mise en production', 'duree' => 'À chaque lot', 'texte' => 'Votre équipe valide selon les critères d\'acceptation, les anomalies sont corrigées dans le même cycle, puis la mise en production se fait selon votre procédure, par vous ou par lui si vous le décidez.'],
                ['titre' => 'Fin de mission et passation', 'duree' => '1 à 3 jours', 'texte' => 'Documentation mise à jour, dernières demandes de fusion intégrées, accès retirés et liste des comptes fermés, séance de passation à la personne qui reprend. La mission se termine sans rien laisser sur les machines du prestataire.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que recevez-vous concrètement à chaque cycle et en fin de mission ?',
            'legende' => 'Livrables d\'une externalisation. Leur liste exacte figure au devis ; ils sont produits dans vos outils, pas dans ceux du prestataire.',
            'entetes' => ['Livrable', 'Contenu', 'Ce qu\'il vous permet'],
            'lignes'  => [
                ['Demandes de fusion (pull requests)', 'Une modification par sujet, avec description, ticket lié, captures si l\'interface change', 'Relire, commenter et accepter chaque changement avant qu\'il atteigne la branche principale'],
                ['Tests automatisés', 'Tests unitaires et fonctionnels qui couvrent le code livré, exécutés par votre intégration continue', 'Savoir qu\'une évolution future ne casse pas ce qui fonctionnait'],
                ['Note de version', 'Ce qui a changé, ce qu\'il faut tester, les migrations de base de données et les réglages à prévoir', 'Préparer la recette et la mise en production sans questions de dernière minute'],
                ['Relevé du temps', 'En régie, le temps passé par ticket et par jour, rapproché du plafond convenu', 'Refacturer votre client avec précision et repérer tôt une dérive'],
                ['Comptes rendus écrits', 'Décisions, questions ouvertes et prochaines priorités, après chaque point hebdomadaire', 'Garder la trace de ce qui a été décidé, sans dépendre de la mémoire de chacun'],
                ['Documentation technique', 'Installation, architecture des modules livrés, variables de configuration sans les secrets', 'Faire reprendre le code par n\'importe quel développeur de votre équipe'],
                ['Dossier de conformité', 'Contrat de sous-traitance des données, clauses contractuelles types, liste des accès accordés et retirés', 'Répondre à votre client ou à son délégué à la protection des données'],
                ['Factures par jalon', 'Une facture par cycle ou par lot validé, rattachée au devis', 'Payer ce que vous avez vu fonctionner, et rien d\'autre'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Sur quelles technologies pouvez-vous confier des lots, et pourquoi celles-là ?',
            'legende' => 'Technologies du parcours de Richard SALANON, avec les lots qu\'on lui confie le plus souvent en externalisation et ce que votre équipe doit fournir pour démarrer vite.',
            'entetes' => ['Technologie', 'Lots typiques', 'Pourquoi elle s\'externalise bien', 'À fournir au démarrage'],
            'lignes'  => [
                ['PHP et Laravel', 'API, back-offices, espaces clients, files de tâches, migrations de versions', 'Un cadre très structuré : un lot s\'insère dans une architecture connue, avec des conventions partagées par toute la communauté', 'Version de PHP et de Laravel, conventions maison, accès à la base de recette'],
                ['Node.js (Express, NestJS)', 'Services temps réel, notifications, passerelles entre logiciels', 'Des modules bien découpés, faciles à confier un par un et à tester isolément', 'Version de Node.js, gestionnaire de paquets, règles de typage'],
                ['Vue.js et React', 'Intégration de maquettes, composants d\'interface, tableaux de bord', 'Le travail part d\'une maquette validée et se juge à l\'écran, ce qui rend la recette simple', 'Fichiers de maquette, bibliothèque de composants, navigateurs à couvrir'],
                ['Python et Flask', 'Petites API, traitements de fichiers, services qui appellent un modèle d\'IA', 'Des services courts et autonomes, branchés sur le reste par une API', 'Environnement Python, jeux de données anonymisés'],
                ['WordPress', 'Thèmes sur mesure, extensions, maintenance de parcs de sites', 'Un volume de tâches répétitives que les agences préfèrent sortir de leur planning', 'Accès à une copie de recette, liste des extensions autorisées'],
                ['Flutter', 'Applications Android et iOS adossées à une API existante', 'Une seule base de code pour deux systèmes, donc un seul développeur à coordonner', 'Comptes développeur des magasins d\'applications, au nom de votre client'],
                ['n8n et Make', 'Automatisations entre CRM, facturation, messagerie et outils d\'IA', 'Des scénarios documentés que votre équipe peut relire et modifier sans coder', 'Comptes de service dédiés, jamais des comptes personnels'],
                ['Odoo et Dolibarr', 'Modules spécifiques, connecteurs, montées de version, reprises de données', 'Des écosystèmes ouverts où l\'agence garde la relation et confie la technique', 'Version installée, liste des modules tiers, base de test'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la qualité du code se contrôle-t-elle quand le développeur travaille à distance ?',
            'intro' => 'La distance ne se compense pas par la confiance mais par des règles que votre équipe peut vérifier à tout moment, dans ses propres outils. Celles-ci s\'appliquent par défaut, et s\'alignent sur les vôtres quand vous en avez déjà.',
            'items' => [
                ['titre' => 'Vos conventions avant les siennes', 'texte' => 'Style de code, nommage des branches, format des messages de commit, structure des dossiers : si votre équipe a des règles, elles s\'appliquent ; sinon, celles de la communauté du cadre utilisé, écrites dans le dépôt pour que tout le monde les partage.'],
                ['titre' => 'Une demande de fusion par sujet', 'texte' => 'Aucun envoi direct sur la branche principale. Chaque modification passe par une demande de fusion courte, liée à son ticket, que l\'un de vos développeurs relit. Une revue de deux cents lignes se fait sérieusement ; une revue de deux mille lignes se survole.'],
                ['titre' => 'Des tests qui accompagnent le code', 'texte' => 'Chaque correction d\'anomalie arrive avec le test qui la reproduisait, chaque nouvelle fonction avec ses tests unitaires ou fonctionnels. Votre intégration continue les exécute à chaque envoi, ce qui rend la revue moins dépendante de la relecture humaine.'],
                ['titre' => 'Des secrets qui ne voyagent pas', 'texte' => 'Mots de passe, clés d\'API et certificats restent dans votre coffre ou vos variables d\'environnement, jamais dans le code ni dans une messagerie. Les dépendances ajoutées sont signalées dans la demande de fusion, avec leur licence.'],
                ['titre' => 'L\'accessibilité prévue dès la maquette', 'texte' => 'Selon la <a href="https://www.economie.gouv.fr/dgccrf/les-fiches-pratiques/professionnels-vos-produits-et-services-doivent-etre-conformes-la-directive-accessibilite">DGCCRF</a>, consultée le 4 octobre 2026, la directive européenne « Accessibilité » s\'applique depuis le 28 juin 2025 à certains services, dont le commerce électronique, les microentreprises de moins de 10 salariés en étant dispensées pour les services. Si votre client est concerné, les critères d\'accessibilité figurent dans les critères d\'acceptation de chaque lot.'],
                ['titre' => 'Une documentation tenue au fil de l\'eau', 'texte' => 'Le fichier d\'installation, les décisions d\'architecture et la note de version sont mis à jour dans la même demande de fusion que le code. Une documentation écrite en fin de mission est presque toujours incomplète.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel décalage horaire entre Cotonou, l\'Europe et le Canada, et comment s\'organiser ?',
            'paragraphes' => [
                'La base de données des fuseaux horaires de l\'IANA, version 2026e publiée le 29 septembre 2026, rattache Porto-Novo, capitale du Bénin, au fuseau de Lagos, défini à une heure d\'avance sur le temps universel, sans heure d\'été. Cotonou reste donc à UTC+1 toute l\'année. Les règles européennes de la même base font passer l\'Europe centrale à l\'heure d\'été le dernier dimanche de mars et la ramènent à l\'heure d\'hiver le dernier dimanche d\'octobre, à 1 h du temps universel ; Paris, Bruxelles et Genève suivent ce calendrier.',
                'Pour le Canada, la base applique depuis 2007 une heure avancée du deuxième dimanche de mars au premier dimanche de novembre ; Montréal suit l\'heure de l\'Est, à UTC-5 en hiver et UTC-4 en été. Les provinces n\'ont pas toutes la même règle : la version 2026e enregistre le passage du Manitoba à une heure permanente de UTC-5 à partir du 1er novembre 2026. Pour une équipe à Winnipeg, l\'écart avec Cotonou sera alors de six heures toute l\'année.',
                'Joignable ' . ($plage['jours'] === ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] ? 'tous les jours' : 'en semaine') . ' ' . $creneau(0) . ', heure de Cotonou, Richard SALANON recouvre toute la journée de bureau d\'une équipe européenne. Avec Montréal, le recouvrement porte sur la matinée et le début d\'après-midi : on y place le point hebdomadaire et les revues en direct, et l\'on garde l\'après-midi québécois pour les échanges écrits, qui trouvent leur réponse au début de la journée suivante.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'À quelles heures pouvez-vous joindre votre développeur selon votre ville ?',
            'legende' => 'Plage de disponibilité de Richard SALANON (' . $creneau(0) . ' à Cotonou, UTC+1) convertie en heure locale, et recouvrement avec une journée de bureau de 9 h à 18 h. Calcul fait à partir des règles de la base IANA 2026e.',
            'entetes' => ['Ville', 'Période', 'Écart avec Cotonou', 'Plage joignable, heure locale', 'Recouvrement avec 9 h à 18 h'],
            'lignes'  => [
                ['Paris, Bruxelles, Genève', 'Fin octobre à fin mars', 'Aucun', $creneau(0), 'Toute la journée'],
                ['Paris, Bruxelles, Genève', 'Fin mars à fin octobre', 'Une heure d\'avance', $creneau(1), 'Toute la journée'],
                ['Montréal, Québec', 'Début novembre à mi-mars', 'Six heures de retard', $creneau(-6), 'de 9 h à ' . min(18, $ferme - 6) . ' h'],
                ['Montréal, Québec', 'Mi-mars à début novembre', 'Cinq heures de retard', $creneau(-5), 'de 9 h à ' . min(18, $ferme - 5) . ' h'],
                ['Winnipeg, à partir du 1er novembre 2026', 'Toute l\'année', 'Six heures de retard', $creneau(-6), 'de 9 h à ' . min(18, $ferme - 6) . ' h'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui possède le code produit en sous-traitance, et comment l\'écrire dans le contrat ?',
            'paragraphes' => [
                'Pour une agence, la question se pose en chaîne. Votre client attend de vous les droits sur le logiciel livré ; vous ne pouvez lui céder que ce que vous détenez ; et ce qu\'un sous-traitant indépendant a écrit lui appartient tant qu\'aucune cession écrite ne vous l\'a transféré. Un maillon manquant, et c\'est votre agence qui se retrouve en défaut vis-à-vis de son client, parfois des années plus tard, lors d\'une revente ou d\'un audit.',
                'En droit français, l\'<a href="https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278958">article L131-3 du Code de la propriété intellectuelle</a>, consulté le 4 octobre 2026, exige que chaque droit cédé soit mentionné distinctement et que son domaine d\'exploitation soit délimité. Le contrat de sous-traitance reprend donc la même liste que celle que vous accordez à votre client : reproduction, adaptation, modification, traduction, diffusion, pour tous pays et pour la durée des droits, avec la faculté de les céder à votre tour.',
                'La cession prend effet au paiement de chaque lot, et pas seulement en fin de mission : vous pouvez ainsi livrer votre client au fil des jalons sans attendre le solde. Les bibliothèques libres utilisées restent sous leur licence d\'origine ; la demande de fusion qui en ajoute une le signale, pour que vous vérifiiez sa compatibilité avec le contrat de votre client. L\'historique Git, horodaté, documente enfin qui a écrit quoi et quand.',
                'Le droit applicable et la juridiction se choisissent au contrat. Le droit français, belge, suisse ou québécois peut être retenu, avec un tribunal situé au siège de votre entreprise : c\'est souvent la solution la plus simple pour vous, puisque le contrat de votre client relève déjà de ce droit. Rien n\'empêche de s\'appuyer sur votre propre modèle de contrat de sous-traitance, relu par les deux parties.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que change le RGPD quand une partie du développement est confiée au Bénin ?',
            'paragraphes' => [
                'Trois rôles se superposent. Votre client, qui décide des finalités, est responsable du traitement ; votre agence, qui travaille pour lui, est son sous-traitant ; Richard SALANON devient un sous-traitant ultérieur. L\'article 28 du RGPD, publié par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4">CNIL</a>, interdit au sous-traitant d\'en recruter un autre sans l\'autorisation écrite préalable, spécifique ou générale, du responsable, et impose au second les mêmes obligations que celles du contrat initial. Le sous-traitant initial demeure pleinement responsable devant son client de l\'exécution par le second.',
                'S\'y ajoute la question du transfert hors de l\'Union. La <a href="https://commission.europa.eu/law/law-topic/data-protection/international-dimension-data-protection/adequacy-decisions_en">liste des décisions d\'adéquation de la Commission européenne</a>, consultée le 4 octobre 2026, ne comprend pas le Bénin. Les données de résidents européens consultées ou traitées depuis Cotonou doivent donc être couvertes par des garanties appropriées, en pratique les clauses contractuelles types de la Commission, signées entre l\'exportateur et le prestataire.',
                'Selon la <a href="https://commission.europa.eu/law/law-topic/data-protection/international-dimension-data-protection/standard-contractual-clauses-scc_en">page de la Commission sur les clauses contractuelles types</a>, les clauses actuelles ont été adoptées le 4 juin 2021 par la décision d\'exécution 2021/914 et remplacent les trois jeux de clauses adoptés sous l\'ancienne directive ; des questions-réponses les accompagnent depuis le 25 mai 2022. Elles prévoient un module pour le cas où un sous-traitant établi dans l\'Union confie lui-même une partie du travail à un sous-traitant situé hors de l\'Union, qui correspond au schéma d\'une agence et de son prestataire.',
                'Les clauses ne suffisent pas seules. La CNIL a publié le 9 juillet 2025 la version finale de son <a href="https://www.cnil.fr/fr/analyse-dimpact-des-transferts-des-donnees-la-cnil-publie-la-version-finale-de-son-guide-aitd">guide d\'analyse d\'impact des transferts de données</a> : quand un transfert repose sur un outil de l\'article 46, comme les clauses types, l\'exportateur doit mener cette analyse avant le transfert, avec l\'assistance de l\'importateur. Richard SALANON fournit les informations qui le concernent : lieu de travail, outils, mesures de sécurité, cadre légal béninois.',
                'La mesure la plus efficace reste de ne rien transférer. Le développement et les tests se font sur des copies anonymisées ou sur des données fictives générées pour l\'occasion ; la base de production reste chez l\'hébergeur européen que votre client a choisi ; quand un accès réel est indispensable, il passe par un compte nominatif, journalisé, protégé par une double authentification et retiré à la fin de la mission. Moins il y a de données exposées, plus le dossier de conformité est léger.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Suisse, Québec, Bénin : quelles règles de données s\'ajoutent selon le pays ?',
            'paragraphes' => [
                'En Suisse, la loi fédérale sur la protection des données révisée est en vigueur depuis le 1er septembre 2023. Selon le <a href="https://www.edoeb.admin.ch/fr/communication-de-donnees-a-letranger">Préposé fédéral à la protection des données et à la transparence</a>, son article 16 n\'autorise une communication à l\'étranger que vers un État dont le niveau de protection est adéquat, d\'après la liste que le Conseil fédéral publie à l\'annexe 1 de l\'ordonnance ; le Bénin n\'y figure pas. Le Préposé a reconnu les clauses contractuelles types de l\'Union, moyennant des adaptations au droit suisse, et leur emploi n\'a pas à lui être notifié.',
                'Au Québec, la Loi 25 a ajouté une étape préalable. La <a href="https://cai.gouv.qc.ca/evaluation-facteurs-relatifs-vie-privee/communication-renseignements-personnels-exterieur-quebec">Commission d\'accès à l\'information</a> demande une évaluation des facteurs relatifs à la vie privée avant de confier à une personne située hors du Québec la tâche de recueillir, d\'utiliser, de communiquer ou de conserver des renseignements personnels pour votre compte. L\'évaluation tient compte de la sensibilité des renseignements, de la finalité et des mesures de protection, y compris contractuelles ; la communication fait ensuite l\'objet d\'une entente écrite.',
                'Côté béninois, le prestataire a ses propres obligations. La <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> encadre la sous-traitance de données personnelles : contrat écrit, sécurité, confidentialité, traitement limité aux instructions reçues. Les deux régimes se cumulent sans se contredire, et le contrat de sous-traitance peut les viser ensemble. Pour le reste, la conformité juridique de votre traitement reste votre décision, prise avec votre délégué à la protection des données ou votre conseil.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi ne faut-il pas ouvrir l\'accès à votre production dès le premier jour ?',
            'texte' => 'Parce qu\'un accès à la base réelle depuis le Bénin constitue d\'emblée un sujet de transfert hors de l\'Union, avec ses clauses, son analyse d\'impact et l\'autorisation de votre client, alors que la plupart des lots n\'en ont pas besoin. Commencez par une base de recette anonymisée et un dépôt de code ; n\'ouvrez la production qu\'au cas par cas, par un compte nominatif à durée limitée, une fois le dossier de conformité signé. Et quand la mission s\'arrête, fermez les accès le jour même, liste à l\'appui.',
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères chiffrés encadrent une externalisation vers le Bénin ?',
            'items' => [
                ['valeur' => 'UTC+1', 'libelle' => 'Heure du Bénin toute l\'année, sans heure d\'été (fuseau de Lagos, auquel Porto-Novo est rattaché)', 'source' => 'IANA, base des fuseaux horaires 2026e', 'url' => 'https://data.iana.org/time-zones/tzdb/africa'],
                ['valeur' => '57,5 %', 'libelle' => 'Part des entreprises de l\'UE ayant recruté ou tenté de recruter des spécialistes des TIC en 2023 qui ont eu du mal à pourvoir ces postes', 'source' => 'Eurostat, données extraites en juin 2025', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=ICT_specialists_-_statistics_on_hard-to-fill_vacancies_in_enterprises'],
                ['valeur' => '5 000 euros HT', 'libelle' => 'Montant d\'une opération à partir duquel un donneur d\'ordre français doit vérifier la situation de son cocontractant', 'source' => 'Code du travail, article R8222-1', 'url' => 'https://code.travail.gouv.fr/code-du-travail/r8222-1'],
                ['valeur' => '6 mois', 'libelle' => 'Rythme de remise des justificatifs par un cocontractant établi à l\'étranger, jusqu\'à la fin du contrat', 'source' => 'Code du travail, article D8222-7', 'url' => 'https://code.travail.gouv.fr/code-du-travail/d8222-7'],
                ['valeur' => '4 juin 2021', 'libelle' => 'Adoption des clauses contractuelles types actuelles pour les transferts hors de l\'Union (décision 2021/914)', 'source' => 'Commission européenne', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/international-dimension-data-protection/standard-contractual-clauses-scc_en'],
                ['valeur' => '655,957 FCFA', 'libelle' => 'Parité fixe du franc CFA pour un euro, en vigueur depuis le 1er janvier 1999', 'source' => 'BCEAO, histoire du franc CFA', 'url' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble une externalisation selon le type d\'entreprise et le pays ?',
            'items' => [
                ['secteur' => 'Agence web, Paris', 'probleme' => 'Trois sites vendus pour la même rentrée, des intégrateurs occupés jusqu\'en décembre, et un client final qui ne doit connaître que l\'agence.', 'solution' => 'Marque blanche en régie plafonnée : intégration des maquettes en thème WordPress sur mesure, travail versé sur le GitLab de l\'agence, recette par ses chefs de projet. Contrat avec cession des droits lot par lot, confidentialité, non-sollicitation, et vérification avec le conseil de l\'agence de la loi de 1975 sur la sous-traitance.'],
                ['secteur' => 'ESN, Bruxelles', 'probleme' => 'Un client demande un renfort Laravel sur une API pendant quelques mois, trop peu pour une embauche, trop longtemps pour un dépannage.', 'solution' => 'Développeur dédié une part fixe de la semaine, intégré au point quotidien de l\'équipe projet, à la même heure qu\'à Bruxelles en hiver. Tests livrés avec chaque demande de fusion, données de recette anonymisées, contrat de sous-traitance des données et clauses types pour le cas où un accès réel deviendrait nécessaire.'],
                ['secteur' => 'Éditeur de logiciel, Genève', 'probleme' => 'Une feuille de route chargée et un module d\'export comptable que l\'équipe interne n\'a jamais le temps d\'écrire.', 'solution' => 'Forfait sur un lot décrit par ses critères d\'acceptation, développé sur des données fictives. Les clauses contractuelles types de l\'Union, adaptées au droit suisse comme l\'admet le Préposé fédéral, sont prêtes si un accès réel devient indispensable.'],
                ['secteur' => 'Agence numérique, Montréal', 'probleme' => 'Un parc de sites WordPress à maintenir en français, et une équipe locale absorbée par les nouveaux projets.', 'solution' => 'Maintenance en régie mensuelle : mises à jour, corrections et petites évolutions, avec un point fixe le matin, heure de Montréal. L\'agence mène son évaluation des facteurs relatifs à la vie privée avant d\'ouvrir les accès, et l\'entente écrite reprend les mesures de protection convenues.'],
                ['secteur' => 'PME industrielle, région lyonnaise', 'probleme' => 'Un Odoo exploité par l\'informaticien interne, des modules spécifiques jamais portés et une montée de version repoussée chaque année.', 'solution' => 'Inventaire des modules, portage sur une base de test neutralisée, puis montée de version planifiée avec l\'informaticien, qui garde l\'exploitation. Le code des modules reste dans le dépôt de la PME.', 'lien' => ['url' => '/services/integration-odoo', 'texte' => 'Voir l\'intégration Odoo']],
                ['secteur' => 'Agence ou ESN, Abidjan ou Dakar', 'probleme' => 'Un appel d\'offres gagné pour une plateforme de commande, avec paiement par mobile money et reçus envoyés sur WhatsApp, et pas de développeur back-end libre.', 'solution' => 'Lots au forfait sur l\'API et le paiement, branchés sur un agrégateur qui accepte MTN, Moov et la carte bancaire, avec rapprochement automatique des paiements. Le choix de l\'agrégateur s\'appuie sur le comparatif publié sur ce site.', 'lien' => ['url' => '/comparatifs/fedapay-vs-kkiapay-vs-cinetpay', 'texte' => 'Comparer FedaPay, Kkiapay et CinetPay']],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte l\'externalisation du développement, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Aucun tarif d\'externalisation n\'est publié : les seuls prix de départ affichés sur ce site concernent la landing page, le site vitrine et le référencement naturel. Chaque engagement est chiffré sur devis, gratuit après le cadrage, avec un taux journalier pour la régie et un prix ferme pour les lots au forfait. La devise est fixée au devis, et la prestation se règle par ' . $moyens . '.',
            'items'      => [
                ['offre' => 'Lot au forfait', 'prix' => 'Sur devis', 'inclus' => ['Critères d\'acceptation écrits avant le chiffrage', 'Demandes de fusion relues, tests et note de version', 'Recette et corrections dans le même lot', 'Cession des droits au paiement du lot']],
                ['offre' => 'Régie au temps passé', 'prix' => 'Sur devis', 'inclus' => ['Taux journalier et plafond mensuel fixés au devis', 'Relevé du temps par ticket', 'Point hebdomadaire et compte rendu écrit', 'Facture à chaque fin de période']],
                ['offre' => 'Développeur dédié', 'prix' => 'Sur devis', 'inclus' => ['Part de semaine réservée sur plusieurs mois', 'Participation à vos rituels d\'équipe', 'Préavis de fin et passation prévus au contrat']],
                ['offre' => 'Marque blanche pour agence', 'prix' => 'Sur devis', 'inclus' => ['Aucun contact avec votre client sans votre demande', 'Confidentialité et non-sollicitation', 'Documents de conformité au nom de votre chaîne de sous-traitance']],
                ['offre' => 'Maintenance de parc', 'prix' => 'Sur devis', 'inclus' => ['Mises à jour, corrections et petites évolutions', 'Forfait mensuel ou intervention à la demande', 'Liste écrite des tâches incluses']],
            ],
            'variations' => [
                'Le mode d\'engagement : un forfait intègre la part d\'incertitude du périmètre, une régie la laisse de votre côté.',
                'Le volume réservé et sa régularité : quelques jours ponctuels ou une part fixe de chaque semaine pendant des mois.',
                'L\'état du code repris : dépôt testé et documenté, ou application sans tests ni documentation à comprendre d\'abord.',
                'La technologie et sa version : une application à jour se reprend plus vite qu\'un code resté sur des versions anciennes.',
                'Les exigences de conformité : données fictives seulement, ou accès réel avec clauses types, analyse d\'impact et journalisation.',
                'Les contraintes de calendrier : une échéance ferme imposée par votre client réduit la marge d\'ajustement.',
                'Les outils imposés : environnement d\'entreprise, réseau privé virtuel, poste dédié ou procédures de sécurité de votre client.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se passent la facturation et le paiement entre l\'Europe, le Canada et le Bénin ?',
            'paragraphes' => [
                'La facturation suit les jalons du devis : une facture par lot validé au forfait, une facture par période en régie, chacune rattachée au devis et au relevé de temps qui la justifie. Elle porte le statut du prestataire, ' . mb_strtolower((string) fait('statut')) . ' au Bénin, et son identifiant fiscal unique, l\'IFU ' . fait('ifu') . '. Le paiement intégral d\'avance n\'est jamais demandé : vous réglez ce que votre équipe a vu et validé.',
                'Les règlements acceptés sont les suivants : ' . $moyens . '. Depuis l\'Europe ou le Canada, la carte bancaire, PayPal et le virement international sont les plus pratiques ; le Bénin ne fait pas partie de l\'espace SEPA décrit par la <a href="https://www.ecb.europa.eu/paym/integration/retail/sepa/html/index.en.html">Banque centrale européenne</a>, et un virement suit donc le circuit international, avec ses frais. Le mobile money sert surtout aux clients d\'Afrique de l\'Ouest. Pour un devis en euros, la <a href="https://www.bceao.int/fr/content/histoire-du-franc-cfa">parité fixe publiée par la BCEAO</a> supprime le risque de change ; pour le franc suisse ou le dollar canadien, mieux vaut fixer la devise au devis.',
                'En France, un contrat d\'au moins 5 000 euros hors taxes déclenche l\'obligation de vigilance du donneur d\'ordre, selon l\'article R8222-1 du Code du travail. L\'article D8222-7 précise ce qu\'il faut obtenir d\'un cocontractant établi à l\'étranger, à la signature puis tous les six mois : un document d\'identification avec son numéro individuel, ainsi que des justificatifs de sa situation sociale. Richard SALANON remet son IFU et son statut ; votre conseil indiquera la pièce sociale attendue d\'un prestataire établi hors de l\'Union.',
                'La TVA dépend de votre pays. Pour une entreprise française, le <a href="https://bofip.impots.gouv.fr/bofip/3218-PGP.html/identifiant=BOI-TVA-DECLA-10-10-20-20240529">BOFiP</a> fait du preneur assujetti le redevable de la taxe quand le prestataire n\'est pas établi en France : la facture est émise hors taxes et votre comptabilité autoliquide. En Belgique, en Suisse ou au Canada, faites valider le traitement par votre comptable à partir du devis, avant la première facture plutôt qu\'à la clôture.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels sont les risques d\'une externalisation, et comment chacun se réduit-il ?',
            'intro' => 'Une externalisation échoue rarement pour une question de compétence. Elle échoue parce qu\'un risque connu n\'a pas été traité au départ. Voici les principaux, avec la réponse prévue pour chacun.',
            'items' => [
                ['titre' => 'Dépendre d\'une seule personne', 'texte' => 'Si le développeur s\'arrête, le travail doit pouvoir continuer. D\'où un code versé chaque jour sur votre dépôt, une documentation tenue à jour dans les demandes de fusion et aucun savoir gardé hors de vos outils. Un autre développeur, chez vous ou ailleurs, reprend sans attendre.'],
                ['titre' => 'Un besoin mal compris', 'texte' => 'Un ticket de deux lignes laisse trop de place à l\'interprétation. Les critères d\'acceptation écrits, les maquettes et les questions posées avant de coder coûtent quelques minutes ; un lot à refaire coûte une semaine.'],
                ['titre' => 'Une qualité qui baisse sans bruit', 'texte' => 'Des revues bâclées laissent passer des raccourcis qui s\'accumulent. Gardez des demandes de fusion courtes, une intégration continue qui bloque en cas d\'échec des tests, et une revue de code par votre équipe sur chaque changement.'],
                ['titre' => 'Des coupures d\'électricité ou de réseau', 'texte' => 'Elles existent à Cotonou comme ailleurs et peuvent décaler un échange de quelques heures. Le travail par jalons datés, les échanges écrits et l\'engagement de réponse ' . $reponse . ' sont pensés pour les absorber sans toucher aux livraisons.'],
                ['titre' => 'Des accès trop larges', 'texte' => 'Un compte partagé ou un accès administrateur donné « pour aller plus vite » expose votre client. Chaque accès est nominatif, limité à ce que le lot exige, protégé par une double authentification et retiré en fin de mission.'],
                ['titre' => 'Une régie qui ressemble à un emploi', 'texte' => 'Imposer des horaires, des méthodes de travail et un rattachement hiérarchique à un prestataire brouille la frontière avec le salariat. Vous fixez les priorités et les livrables ; l\'organisation du travail reste celle du prestataire.'],
                ['titre' => 'Un temps de coordination oublié', 'texte' => 'Externaliser ne supprime pas tout le travail interne : quelqu\'un doit rédiger les tickets, relire le code et arbitrer. Prévoyez ce temps dans votre planning et désignez un référent, sinon le lot attend sa revue.'],
                ['titre' => 'Une fin de mission improvisée', 'texte' => 'Accès oubliés, documentation incomplète, branche jamais fusionnée : la passation se prévoit dès le contrat, avec un préavis, une liste de contrôle et quelques jours réservés pour la mener.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier une partie de votre production à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Développeur full stack avec ' . $annees . ' ans d\'expérience dans le numérique, formé à ' . fait('formation')['nom'] . ' à Cotonou (promotion ' . fait('formation')['annee'] . '), il a livré ' . $livres . ' projets et travaillé, sur place ou à distance, pour des organisations des pays suivants : ' . $paysVus . '. Il connaît la sous-traitance de l\'intérieur : il a déjà travaillé en sous-traitance pour l\'agence Digital Développement, et sait ce qu\'une agence attend d\'un prestataire qui travaille sous son nom.',
                'Il a créé <a href="' . fait('produits')[0]['url'] . '">' . fait('produits')[0]['nom'] . '</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est ' . mb_strtolower((string) fait('affiliations')[0]['role']) . ' d\'<a href="' . fait('affiliations')[0]['url'] . '">' . fait('affiliations')[0]['nom'] . '</a>. Maintenir ses propres produits en production impose la discipline qu\'une équipe attend d\'un renfort : tests, versions suivies, documentation, et attention à ce qui casse après la livraison.',
                'Sa façon de travailler tient en engagements vérifiables : réponse ' . $reponse . ', cadrage gratuit en deux à trois séances, premier lot court pour se tester mutuellement, travail versé dans vos outils, demandes de fusion relues, livraison toutes les deux semaines, point hebdomadaire et compte rendu écrit. Il travaille en français et en anglais, et a formé ' . $formes . ' personnes au numérique. Son parcours figure sur la page <a href="/richard-salanon">Richard SALANON</a> et dans la présentation <a href="/a-propos/">à propos</a> ; les pays desservis sont listés sur la page <a href="/zones/">zones d\'intervention</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'externaliser une partie de votre développement ?',
            'texte' => 'Commencez par un lot court, gardez le code et les accès dans vos outils, écrivez la cession des droits lot par lot, traitez les données personnelles avant le premier accès plutôt qu\'après, et réservez du temps interne pour relire le code : l\'externalisation réussit quand elle prolonge votre équipe, pas quand elle la remplace.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Vous avez des lots à confier ou une équipe à renforcer ?',
            'texte'  => 'Décrivez la nature des lots, les technologies en place, le volume prévisible, vos outils et le pays de vos clients. Vous recevez une réponse ' . $reponse . ', puis une proposition de cadrage gratuit en visioconférence, sans engagement.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon besoin d\'externalisation'],
        ],
    ],

    'faq' => [
        ['q' => 'Quelle différence entre externaliser son développement et engager un développeur freelance ?', 'r' => 'L\'externalisation s\'adresse à une entreprise qui a déjà une équipe, des outils et des clients, et qui confie une partie de sa production : lots, tickets, maintenance, modules. Le travail se fait dans ses outils et selon ses conventions. Engager un freelance pour son propre projet est une autre relation, décrite sur la page développeur web freelance.'],
        ['q' => 'Le Bénin, c\'est du nearshore ou de l\'offshore pour une entreprise européenne ?', 'r' => 'Les deux à la fois. Juridiquement, c\'est un pays tiers à l\'Union, sans décision d\'adéquation, ce qui compte pour les données personnelles. Pour le travail au quotidien, Cotonou est à la même heure que Paris en hiver, à une heure d\'écart en été, et l\'on y travaille en français : l\'organisation ressemble à celle d\'un prestataire européen.'],
        ['q' => 'Quel est le décalage horaire avec Paris, Genève et Montréal ?', 'r' => 'Cotonou est à UTC+1 toute l\'année. Paris, Bruxelles et Genève ont la même heure en hiver et une heure d\'avance en été. Montréal a six heures de retard en hiver et cinq en été, ce qui laisse la matinée et le début d\'après-midi québécois pour les réunions.'],
        ['q' => 'Peut-on travailler en marque blanche, sans que notre client voie le prestataire ?', 'r' => 'Face au public et aux utilisateurs, oui : le travail est livré sous le nom de l\'agence, qui reste le seul interlocuteur. Mais si le contrat de votre client ou la loi applicable impose de déclarer les sous-traitants, ou si des données personnelles sont traitées, votre client doit l\'avoir autorisé. La confidentialité et la non-sollicitation s\'écrivent au contrat.'],
        ['q' => 'Qui est propriétaire du code produit pour notre compte ?', 'r' => 'Votre entreprise, une fois la cession écrite et le lot payé. Le contrat nomme chaque droit cédé, pour tous pays et pour la durée des droits, avec la faculté de les céder à votre propre client. Les bibliothèques libres restent sous leur licence, signalée à chaque ajout.'],
        ['q' => 'Faut-il signer des clauses contractuelles types pour travailler avec un développeur au Bénin ?', 'r' => 'Seulement si des données personnelles de résidents européens sont consultées ou traitées depuis le Bénin, qui n\'a pas de décision d\'adéquation. Dans ce cas, les clauses de la Commission, adoptées en 2021, s\'ajoutent au contrat de sous-traitance de l\'article 28 et à une analyse d\'impact du transfert. Travailler sur des données anonymisées évite souvent toute la question.'],
        ['q' => 'En quelle devise facturez-vous, et comment payer ?', 'r' => 'La devise est fixée au devis, en euros ou en francs CFA le plus souvent, avec une facture par lot validé ou par période de régie. Les moyens de paiement acceptés sont ' . $moyens . '. Depuis l\'Europe ou le Canada, la carte bancaire, PayPal ou le virement international sont les plus simples.'],
        ['q' => 'Quels justificatifs fournissez-vous pour notre obligation de vigilance ?', 'r' => 'Le statut d\'' . mb_strtolower((string) fait('statut')) . ' et l\'identifiant fiscal unique (IFU), à la signature puis à chaque renouvellement demandé. En France, le Code du travail impose ces vérifications pour toute opération d\'au moins 5 000 euros hors taxes ; votre conseil précisera la pièce sociale attendue d\'un prestataire établi hors de l\'Union.'],
        ['q' => 'Peut-on commencer par un petit lot pour tester la collaboration ?', 'r' => 'C\'est même recommandé. Le premier lot, d\'une à deux semaines, est payé comme les autres et sert de test aux deux parties : qualité du code, respect de vos conventions, rythme des échanges. Les ajustements se font à ce moment, avant d\'engager des lots plus lourds.'],
        ['q' => 'Que se passe-t-il en cas de coupure d\'Internet ou d\'indisponibilité ?', 'r' => 'Une coupure peut retarder un échange de quelques heures ; l\'engagement de réponse ' . $reponse . ' et les jalons datés en tiennent compte. Comme le code est versé chaque jour sur votre dépôt avec sa documentation, une indisponibilité plus longue ne bloque pas votre équipe : elle peut reprendre le travail là où il en est.'],
        ['q' => 'Combien coûte l\'externalisation de notre développement ?', 'r' => 'Le prix est fixé sur devis, gratuit après le cadrage : un taux journalier et un plafond mensuel pour la régie, un prix ferme pour les lots au forfait. Il dépend surtout du volume réservé, de l\'état du code repris, des exigences de conformité et des outils imposés par votre client.'],
        ['q' => 'Travaillez-vous avec des entreprises du Québec soumises à la Loi 25 ?', 'r' => 'Oui. Avant de confier hors du Québec un traitement de renseignements personnels, l\'entreprise mène une évaluation des facteurs relatifs à la vie privée et signe une entente écrite. Richard SALANON fournit les informations nécessaires sur ses mesures de protection, et le travail se fait de préférence sur des données fictives.'],
    ],

    'sources' => [
        ['titre' => 'IANA, base de données des fuseaux horaires (version 2026e du 29 septembre 2026)', 'url' => 'https://www.iana.org/time-zones', 'date' => '2026-10-04'],
        ['titre' => 'IANA, tzdb, fichier « africa » (zone Africa/Lagos, UTC+1)', 'url' => 'https://data.iana.org/time-zones/tzdb/africa', 'date' => '2026-10-04'],
        ['titre' => 'IANA, tzdb, fichier « europe » (règles de l\'heure d\'été dans l\'Union)', 'url' => 'https://data.iana.org/time-zones/tzdb/europe', 'date' => '2026-10-04'],
        ['titre' => 'IANA, tzdb, fichier « northamerica » (règles du Canada et du Manitoba)', 'url' => 'https://data.iana.org/time-zones/tzdb/northamerica', 'date' => '2026-10-04'],
        ['titre' => 'Légifrance, loi n° 75-1334 du 31 décembre 1975 relative à la sous-traitance', 'url' => 'https://www.legifrance.gouv.fr/loda/id/JORFTEXT000000889241', 'date' => '2026-10-04'],
        ['titre' => 'Légifrance, article L131-3 du Code de la propriété intellectuelle', 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006278958', 'date' => '2026-10-04'],
        ['titre' => 'Code du travail, article R8222-1 (seuil de 5 000 euros hors taxes)', 'url' => 'https://code.travail.gouv.fr/code-du-travail/r8222-1', 'date' => '2026-10-04'],
        ['titre' => 'Code du travail, article D8222-7 (cocontractant établi à l\'étranger)', 'url' => 'https://code.travail.gouv.fr/code-du-travail/d8222-7', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, RGPD, chapitre IV (article 28, sous-traitant)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, transférer des données hors de l\'Union européenne', 'url' => 'https://www.cnil.fr/fr/transferer-des-donnees-hors-de-lue', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, version finale du guide d\'analyse d\'impact des transferts de données (9 juillet 2025)', 'url' => 'https://www.cnil.fr/fr/analyse-dimpact-des-transferts-des-donnees-la-cnil-publie-la-version-finale-de-son-guide-aitd', 'date' => '2026-10-04'],
        ['titre' => 'Commission européenne, décisions d\'adéquation', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/international-dimension-data-protection/adequacy-decisions_en', 'date' => '2026-10-04'],
        ['titre' => 'Commission européenne, clauses contractuelles types (décision d\'exécution 2021/914)', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/international-dimension-data-protection/standard-contractual-clauses-scc_en', 'date' => '2026-10-04'],
        ['titre' => 'Préposé fédéral à la protection des données et à la transparence, communication de données à l\'étranger', 'url' => 'https://www.edoeb.admin.ch/fr/communication-de-donnees-a-letranger', 'date' => '2026-10-04'],
        ['titre' => 'Commission d\'accès à l\'information du Québec, communication de renseignements personnels à l\'extérieur du Québec', 'url' => 'https://cai.gouv.qc.ca/evaluation-facteurs-relatifs-vie-privee/communication-renseignements-personnels-exterieur-quebec', 'date' => '2026-10-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-04'],
        ['titre' => 'Eurostat, spécialistes des TIC : postes difficiles à pourvoir dans les entreprises', 'url' => 'https://ec.europa.eu/eurostat/statistics-explained/index.php?title=ICT_specialists_-_statistics_on_hard-to-fill_vacancies_in_enterprises', 'date' => '2026-10-04'],
        ['titre' => 'DGCCRF, produits et services conformes à la directive « Accessibilité »', 'url' => 'https://www.economie.gouv.fr/dgccrf/les-fiches-pratiques/professionnels-vos-produits-et-services-doivent-etre-conformes-la-directive-accessibilite', 'date' => '2026-10-04'],
        ['titre' => 'BCEAO, histoire du franc CFA et parité avec l\'euro', 'url' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa', 'date' => '2026-10-04'],
        ['titre' => 'Banque centrale européenne, espace unique de paiement en euros (SEPA)', 'url' => 'https://www.ecb.europa.eu/paym/integration/retail/sepa/html/index.en.html', 'date' => '2026-10-04'],
        ['titre' => 'BOFiP, TVA, détermination du redevable (BOI-TVA-DECLA-10-10-20)', 'url' => 'https://bofip.impots.gouv.fr/bofip/3218-PGP.html/identifiant=BOI-TVA-DECLA-10-10-20-20240529', 'date' => '2026-10-04'],
    ],

    'liens' => [
        'services'    => ['developpeur-web-freelance', 'application-web-sur-mesure', 'api-rest-integrations', 'saas-espace-client', 'integration-odoo', 'maintenance-support'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay', 'odoo-vs-dolibarr'],
    ],
];
