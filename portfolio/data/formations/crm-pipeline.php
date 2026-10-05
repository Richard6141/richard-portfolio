<?php
// ============================================================
// data/formations/crm-pipeline.php · Fiche formation « CRM : pipeline
// commercial et reporting » (vague 1B, lot B, domaine erp-gestion).
// Aucune ancienne page. Angle propre : ce qui se passe APRÈS le premier
// rendez-vous, quel que soit l'outil : étapes et critères de passage,
// prochaine action datée, relances commerciales, motifs de perte, rapports,
// indicateurs et prévision. Sœurs non traitées : marketing-digital-b2b
// (acquisition jusqu'au rendez-vous), whatsapp-odoo-dolibarr-crm (messages
// reliés aux logiciels), odoo-utilisateurs et dolibarr-utilisateurs (écrans
// par poste, recouvrement des factures), odoo-dirigeants et
// power-bi-looker-studio (tableaux de bord de direction).
// Faits relevés le 05/10/2026 : documentation Odoo 20.0 (rapport Prévision,
// score prédictif, motifs de perte, activités), dépôt GitHub de Dolibarr
// 24.0.1 (statuts d'opportunité par défaut, libellés français), DoliCloud,
// HubSpot (tarifs lus dans le navigateur, outil de prévision, pipelines),
// Pipedrive (tarifs, fonction « rotting »), CNIL (référentiel gestion
// commerciale, zones bloc-notes), loi n° 2017-20 (PDF du SGG, art. 383, 437,
// 440 et 448), DataReportal, FDFP, 3FPT. Tarifs d'Odoo : fait déjà vérifié
// du catalogue, repris tel quel.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation CRM : pipeline commercial et reporting, pour conduire chaque affaire du premier rendez-vous à la signature, relancer au bon moment et annoncer des prévisions de ventes crédibles",
    'title'   => 'Formation CRM, pipeline et reporting | Richard SALANON',
    'meta'    => "Formation CRM pour équipes commerciales : étapes et critères de passage, relances, motifs de perte, prévision et rapports sur Odoo, Dolibarr ou HubSpot.",
    'en_bref' => "Cette formation apprend aux commerciaux, aux responsables des ventes et à la direction commerciale à tenir un pipeline qui dit la vérité : des étapes définies par des faits vérifiables, une prochaine action datée sur chaque affaire, des relances qui ont un motif, des motifs de perte exploitables et un rapport hebdomadaire lisible. Elle s'applique à l'outil de l'entreprise, qu'il s'agisse du CRM d'Odoo, de Dolibarr, de HubSpot, de Pipedrive ou d'un simple tableur. Elle dure deux jours en quatre demi-journées, suivis d'une revue de pipeline un mois plus tard, dans vos locaux, en inter-entreprises, à distance ou en formule hybride. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'erp-gestion',
    'forte'   => false,
    'duree'   => '2 jours en quatre demi-journées, puis une revue de pipeline à un mois',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : partir des affaires réellement gagnées et perdues pour dessiner les étapes de votre vente",
            'duree'  => '3 h 30',
            'points' => [
                "Relecture collective des dix dernières affaires signées et des dix dernières perdues : ce qui s'est passé entre le premier rendez-vous et la décision, dans quel ordre, avec qui.",
                "Distinguer un contact, une piste et une affaire : à partir de quel fait une demande mérite d'entrer dans le pipeline, et pourquoi tout ce qui bouge n'y a pas sa place.",
                "Écriture des étapes, cinq à sept au plus, chacune nommée par ce que le client a fait et non par ce que le vendeur espère.",
                "Pour chaque étape, le critère de passage : la preuve observable qui autorise à déplacer l'affaire (besoin confirmé par écrit, décideur rencontré, proposition remise, accord de principe sur le budget).",
                "Transposition dans votre outil : étapes du CRM d'Odoo, statuts d'opportunité de Dolibarr, étapes de transaction de HubSpot ou de Pipedrive, colonnes d'un tableur.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : tenir chaque affaire, du montant à la prochaine action datée",
            'duree'  => '3 h 30',
            'points' => [
                "La fiche d'affaire minimale : compte, interlocuteurs et leur rôle dans la décision, montant estimé, date de décision attendue, étape, prochaine action, source.",
                "La règle centrale de la formation : aucune affaire ouverte sans activité planifiée, avec une date et un responsable.",
                "Types d'activités utiles (appel, rendez-vous, envoi de proposition, relance, démonstration) et enchaînement d'une activité sur la suivante.",
                "Le compte rendu de rendez-vous en cinq lignes : ce que le client a dit, ce qui a été promis de part et d'autre, ce qui reste à obtenir, la suite fixée, la date.",
                "Ce qu'on n'écrit jamais dans une note sur un prospect, puisque la personne peut demander à la lire.",
                "Nettoyage en direct du pipeline existant : affaires sans action, dates dépassées, montants ronds jamais revus, doublons.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : relancer avec un motif, et savoir déclarer une affaire perdue",
            'duree'  => '3 h 30',
            'points' => [
                "Le calendrier de relance après une proposition : premier contact rapproché, puis des relances espacées, chacune portant un élément nouveau.",
                "Relancer pour faire avancer, pas pour prendre des nouvelles : question de décision, information utile, étape suivante proposée.",
                "Les automatismes de l'outil : enchaînement d'activités, plans d'activités, séquences ou rappels, et la limite au-delà de laquelle ils remplacent le jugement.",
                "La liste des motifs de perte, courte et fermée, écrite par l'équipe, et la note de clôture qui l'accompagne.",
                "Le droit de s'arrêter : affaire perdue, mise en sommeil avec une date de reprise, ou opposition du prospect à être recontacté, et ce que chacune change dans la base.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : indicateurs, prévision et revue de pipeline hebdomadaire",
            'duree'  => '3 h 30',
            'points' => [
                "Les indicateurs qui servent à décider : taux de transformation par étape, durée du cycle, montant moyen, ancienneté des affaires, affaires sans prochaine action, motifs de perte.",
                "Valeur brute et valeur pondérée du pipeline, et pourquoi les probabilités doivent venir de votre historique plutôt que des réglages par défaut.",
                "Prévision du mois et du trimestre : affaires engagées, probables et possibles, et l'écart entre ce qui a été annoncé et ce qui a été signé.",
                "Construction du rapport du lundi dans votre outil, sur une page, puis revue de pipeline jouée en trente minutes, affaire par affaire.",
                "Évaluation : chaque participant présente trois de ses affaires réelles, avec étape justifiée, prochaine action datée et prévision argumentée.",
            ],
        ],
        [
            'titre'  => "Un mois plus tard, à distance : revue du pipeline réel",
            'duree'  => '2 h',
            'points' => [
                "Comparaison entre la prévision annoncée à la fin de la formation et les signatures réelles du mois.",
                "Liste des affaires restées dans la même étape depuis la formation, et décision sur chacune.",
                "Ajustement des critères de passage et des motifs de perte qui n'ont pas résisté au terrain.",
                "Mise à jour du rapport hebdomadaire et passage de relais au responsable des ventes.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en quatre demi-journées, puis 2 h de revue à un mois'],
        ['l' => 'Public', 'v' => 'Commerciaux, responsables des ventes, direction commerciale'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saura faire votre équipe commerciale à la fin de la formation, et où s'arrête-t-elle ?",
            'paragraphes' => [
                "Le premier rendez-vous est passé, le client a montré de l'intérêt, et c'est souvent là que la vente se perd. La proposition part avec dix jours de retard, la relance attend que quelqu'un y pense, et l'affaire reste affichée « en négociation » pendant un trimestre alors que le client a choisi un concurrent depuis longtemps. Cette formation porte sur cette partie du cycle : conduire chaque affaire jusqu'à la décision, la suivre dans un outil partagé et en tirer des chiffres sur lesquels la direction peut compter.",
                "À la fin des deux jours, chaque participant sait dire pourquoi une affaire se trouve à telle étape en citant un fait, tenir une prochaine action datée sur chacune de ses affaires, rédiger un compte rendu de rendez-vous exploitable par un collègue, relancer un client avec un motif, clore une affaire perdue avec un motif choisi dans une liste, et lire le rapport hebdomadaire de l'équipe. Le responsable des ventes sait en plus animer une revue de pipeline de trente minutes et construire une prévision du mois qu'il peut défendre devant la direction.",
                "Ces objectifs se vérifient sur des affaires réelles, pas sur un questionnaire. La dernière demi-journée se termine par la présentation, par chacun, de trois de ses affaires en cours : étape justifiée, interlocuteurs identifiés, prochaine action fixée, date de décision réaliste. Ce qui manque est noté et repris lors de la revue à un mois.",
                "Plusieurs sujets voisins ont leur propre formation. Trouver les comptes à viser, écrire l'offre d'entrée et obtenir le premier rendez-vous relève du <a href=\"/formations/marketing-digital-b2b\">marketing digital B2B</a>. Envoyer devis et relances par WhatsApp depuis le logiciel relève de la formation <a href=\"/formations/whatsapp-odoo-dolibarr-crm\">WhatsApp relié à Odoo, Dolibarr et au CRM</a>. Les écrans de vente d'Odoo ou de Dolibarr, la facture et le recouvrement sont traités poste par poste dans <a href=\"/formations/odoo-utilisateurs\">Odoo pour vos équipes</a> et <a href=\"/formations/dolibarr-utilisateurs\">Dolibarr pour vos équipes</a>. Les tableaux de bord de direction relèvent d'Odoo pour dirigeants et de la formation Power BI et Looker Studio.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi un CRM bien installé affiche-t-il quand même un pipeline faux ?",
            'paragraphes' => [
                "Le scénario se répète d'une entreprise à l'autre. Le CRM a été choisi avec soin, les étapes portent des noms clairs, les vendeurs saisissent leurs affaires. Pourtant, en fin de trimestre, le montant annoncé en réunion n'a qu'un lointain rapport avec ce qui est signé. En ouvrant la base, on trouve les mêmes symptômes : des affaires à 70 % depuis six mois, des dates de décision repoussées au dernier jour de chaque mois, des montants arrondis au million sans devis derrière, et une colonne « proposition envoyée » qui ne se vide jamais.",
                "Rien de cela n'est un défaut du logiciel. Chaque vendeur interprète les étapes à sa manière : pour l'un, « qualifié » veut dire que le client a répondu au téléphone, pour l'autre qu'un budget a été confirmé. Personne n'ose déclarer une affaire perdue, parce que cela se voit dans les chiffres et que l'espoir ne coûte rien. Et la direction, faute de critères communs, finit par appliquer sa propre décote au pipeline, ce qui revient à ne plus le lire.",
                "La formation remplace ces impressions par des règles écrites et partagées : une affaire change d'étape quand un fait précis le justifie, elle porte toujours une prochaine action datée, elle sort du pipeline quand le client a dit non ou ne répond plus après un nombre de relances fixé à l'avance. Ces règles tiennent sur une page. Leur force vient de ce qu'elles sont écrites par l'équipe elle-même, à partir de ses propres affaires, et non importées d'un manuel de vente.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quel matériel ?",
            'intro' => "Elle s'adresse à ceux qui suivent des affaires dans la durée, en vente entre professionnels comme en vente complexe aux particuliers (immobilier, formation, équipement). Elle donne le meilleur résultat quand les commerciaux et leur responsable la suivent ensemble.",
            'items' => [
                ['titre' => 'Les commerciaux et chargés d\'affaires', 'texte' => "Ceux qui rencontrent les clients, préparent les propositions et relancent. Ils repartent avec un pipeline personnel nettoyé, une prochaine action sur chaque affaire et une méthode de compte rendu que leurs collègues peuvent reprendre en cas d'absence."],
                ['titre' => 'Le responsable des ventes', 'texte' => "Celui qui anime l'équipe et répond de la prévision. Il apprend à conduire la revue hebdomadaire, à repérer les affaires qui stagnent sans accuser personne, et à annoncer un chiffre en séparant ce qui est engagé de ce qui reste incertain."],
                ['titre' => 'La direction commerciale ou générale', 'texte' => "Dans une PME, c'est souvent le dirigeant qui lit le pipeline. Une demi-journée lui suffit : les indicateurs, la prévision, la revue de pipeline. Sa présence ce jour-là dit à l'équipe que les règles valent aussi pour ses propres affaires."],
                ['titre' => 'L\'assistante commerciale ou administratrice du CRM', 'texte' => "Celle qui paramètre les étapes, les listes de motifs et les rapports. Elle suit toute la formation et devient la gardienne des règles écrites : c'est elle qui ajuste l'outil quand l'équipe décide d'un changement."],
                ['titre' => 'Prérequis', 'texte' => "Un outil de suivi commercial choisi ou à l'essai, avec un compte par participant, et le fichier des clients et prospects de l'entreprise. Aucune connaissance technique n'est demandée. Une équipe sans outil peut suivre la formation sur un tableur, à condition d'accepter qu'il reste provisoire."],
                ['titre' => 'Ce qu\'il faut préparer', 'texte' => "Une extraction des affaires ouvertes, gagnées et perdues sur les douze derniers mois quand elle existe, les modèles de proposition en usage, et l'objectif de vente du trimestre. Les données sont relues avant la session et les champs inutiles retirés."],
                ['titre' => 'Matériel', 'texte' => "Un ordinateur par participant, connecté à l'outil avec ses propres droits, et le téléphone sur lequel l'application mobile du CRM est installée quand l'équipe travaille sur le terrain. Un grand écran pour la revue de pipeline jouée en fin de deuxième jour."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment écrire des étapes dont on peut vérifier qu'elles sont franchies ?",
            'legende' => "Exemple de pipeline pour une entreprise qui vend des prestations ou des équipements à d'autres entreprises, après le premier rendez-vous. Il sert de point de départ en séance ; chaque équipe réécrit ses étapes à partir de ses propres affaires gagnées et perdues.",
            'entetes' => ['Étape', 'Critère de passage (le fait qui autorise à y entrer)', 'Prochaine action attendue', 'Signal d\'alerte'],
            'lignes'  => [
                ['Découverte faite', "Un rendez-vous a eu lieu et le besoin a été reformulé par écrit au client, qui ne l'a pas contesté", "Valider le périmètre et identifier qui décide", "Aucun interlocuteur autre que le premier contact après trois semaines"],
                ['Besoin qualifié', "Le client a confirmé une échéance, un ordre de grandeur de budget et le nom de la personne qui signe", "Préparer la proposition, ou une démonstration si elle est demandée", "Budget « à voir » ou décideur inconnu : l'affaire n'a rien à faire ici"],
                ['Proposition remise', "Une proposition chiffrée a été envoyée ou présentée, avec une date de réponse convenue avec le client", "Relance datée, questions sur la proposition, rendez-vous de présentation", "Date de réponse dépassée sans nouvel échange"],
                ['Négociation', "Le client discute les conditions (prix, délais, périmètre, paiement) : il a donc choisi de travailler avec vous, sous réserve", "Version finale de la proposition, réponse aux objections, circuit de signature connu", "Les mêmes points rediscutés à chaque échange, ou un nouvel interlocuteur qui remet tout en cause"],
                ['Accord verbal', "Le décideur a annoncé son accord ; il reste la signature, le bon de commande ou l'acompte", "Envoi des documents à signer, suivi du circuit interne du client", "Plus de deux semaines sans pièce signée"],
                ['Gagnée ou perdue', "Pièce signée, commande ou acompte reçus ; ou refus explicite, ou absence de réponse après le nombre de relances fixé", "Passage au devis, à la commande et à la facture dans l'ERP ; ou motif de perte et note de clôture", "Une affaire perdue sans motif ne sert à rien pour la suite"],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices les participants font-ils sur les affaires et l'outil de l'entreprise ?",
            'items' => [
                ['titre' => "L'autopsie de vingt affaires", 'duree' => '1 heure', 'texte' => "Dix gagnées, dix perdues, tirées de votre historique. Pour chacune, le groupe retrace sur une frise ce qui s'est passé après le premier rendez-vous. Les points communs des affaires gagnées deviennent les critères de passage ; les moments où les affaires perdues ont décroché deviennent les signaux d'alerte."],
                ['titre' => "La réécriture des étapes", 'duree' => '45 minutes', 'texte' => "Chaque groupe propose ses étapes et leurs critères, puis les confronte à celles des autres groupes. La version retenue tient sur une page et porte la date du jour. Elle est saisie dans l'outil avant la fin de la matinée, pour que l'après-midi se déroule déjà avec les nouvelles étapes."],
                ['titre' => "Le grand nettoyage", 'duree' => '1 h 15', 'texte' => "Chaque commercial ouvre son pipeline et traite ses affaires une à une : étape justifiée ou corrigée, montant revu, date de décision réaliste, prochaine action datée, ou clôture avec un motif. Le nombre d'affaires ouvertes avant et après l'exercice est noté au tableau, pour mesurer l'écart entre le pipeline affiché et le pipeline réel."],
                ['titre' => "Le compte rendu échangé", 'duree' => '40 minutes', 'texte' => "Chaque participant rédige le compte rendu de son dernier rendez-vous réel, puis le passe à son voisin, qui doit dire, sans poser de question, quelle est la prochaine étape et qui décide chez le client. Si le voisin hésite, le compte rendu est réécrit."],
                ['titre' => "La relance qui apporte quelque chose", 'duree' => '45 minutes', 'texte' => "Sur trois propositions restées sans réponse, chacun écrit une relance qui contient un élément nouveau : une question de décision, une information utile au client, une option sur le périmètre. Les relances du type « je reviens vers vous » sont relues à voix haute, puis réécrites."],
                ['titre' => "La revue de pipeline jouée", 'duree' => '45 minutes', 'texte' => "Le responsable des ventes conduit une revue réelle de trente minutes, chronométrée, sur le pipeline nettoyé. Le formateur l'interrompt quand la discussion dérive vers l'anecdote ou quand une affaire avance sans fait nouveau. Le groupe en tire l'ordre du jour type de la réunion du lundi."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels indicateurs commerciaux suivre, et comment ne pas se tromper en les lisant ?",
            'legende' => "Indicateurs construits en séance dans l'outil de l'entreprise. Ils ne valent que si les règles de saisie sont tenues ; c'est pourquoi la formation les aborde le deuxième jour, après les étapes et la prochaine action.",
            'entetes' => ['Indicateur', 'Calcul', 'Ce qu\'il révèle', 'Piège de lecture'],
            'lignes'  => [
                ['Taux de transformation global', "Affaires gagnées divisées par affaires clôturées (gagnées et perdues) sur une période", "La part des affaires sérieuses qui aboutit", "Il monte artificiellement si les affaires perdues restent ouvertes au lieu d'être clôturées"],
                ['Passage d\'étape à étape', "Nombre d'affaires passées à l'étape suivante divisé par le nombre entrées dans l'étape", "L'endroit précis où les affaires se perdent", "Trop peu d'affaires par étape pour conclure : on lit au moins un trimestre"],
                ['Durée moyenne du cycle', "Jours entre l'entrée dans le pipeline et la signature, pour les affaires gagnées", "Le délai réel à prévoir entre un rendez-vous et un encaissement", "La moyenne masque les écarts : regarder aussi l'affaire la plus longue et la plus courte"],
                ['Montant moyen gagné', "Total signé divisé par le nombre d'affaires gagnées", "La taille réelle des affaires, à comparer aux montants saisis à l'ouverture", "Un gros contrat isolé déforme tout un trimestre"],
                ['Ancienneté dans l\'étape', "Jours écoulés depuis la dernière entrée dans l'étape actuelle", "Les affaires qui stagnent", "Une affaire peut bouger dans l'outil sans avancer chez le client"],
                ['Affaires sans prochaine action', "Affaires ouvertes sans activité planifiée, ou avec une activité en retard", "Le respect de la règle centrale", "Une activité fictive planifiée dans six mois fait disparaître l'alerte"],
                ['Motifs de perte', "Répartition des affaires perdues par motif, sur le trimestre", "Ce qu'il faut corriger dans l'offre, le prix ou le suivi", "Un motif « autre » qui dépasse les autres signale une liste mal faite"],
                ['Couverture de l\'objectif', "Valeur pondérée du pipeline attendue sur la période, rapportée à l'objectif restant", "Si le pipeline suffit à atteindre l'objectif, ou s'il faut prospecter maintenant", "Elle dépend entièrement de probabilités réalistes"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment annoncer une prévision de ventes sans se raconter d'histoires ?",
            'paragraphes' => [
                "La plupart des outils calculent une valeur pondérée : le montant de chaque affaire multiplié par une probabilité, puis additionné. Selon la documentation d'Odoo 20.0, le rapport Prévision du CRM range les opportunités par mois de clôture attendue et affiche en tête de chaque mois un revenu calculé ainsi. Dans Dolibarr, une fois activée l'option qui sert à suivre les affaires par les projets, les statuts livrés par défaut dans la version 24.0.1 portent des probabilités de 0 % (prospection), 20 % (qualification), 40 % (proposition) et 60 % (négociation), et le logiciel calcule un montant pondéré des opportunités.",
                "Prenons un exemple fictif. Une équipe a douze affaires ouvertes pour 60 millions de FCFA : trois en qualification pour 15 millions, cinq au stade de la proposition pour 30 millions, quatre en négociation pour 15 millions. Avec les probabilités par défaut de Dolibarr, la valeur pondérée atteint 3 + 12 + 9, soit 24 millions. Mais si l'historique de cette équipe montre qu'une proposition sur cinq seulement aboutit, la ligne des propositions vaut 6 millions et non 12. La prévision tombe à 18 millions, et c'est celle-là qu'il faut annoncer.",
                "D'où la règle enseignée : les probabilités se calibrent sur vos affaires passées, pas sur les réglages d'usine. Odoo calcule la sienne par un modèle statistique qui tient toujours compte de l'étape et de l'équipe, et sa documentation précise qu'une probabilité ne peut pas être fixée à la main à 100 %. HubSpot propose, dans son outil de prévision, des catégories (pipeline, meilleur cas, engagé) que le responsable attribue affaire par affaire. Quel que soit l'outil, la formation fait annoncer deux chiffres : ce qui est engagé, sur lequel on s'engage, et ce qui est probable, présenté comme tel.",
                "Une prévision se juge après coup. Chaque fin de mois, on compare ce qui avait été annoncé et ce qui a été signé, affaire par affaire. Les écarts répétés montrent qui surestime, quelle étape est trop optimiste et quel type de client décide plus lentement que prévu. C'est ce travail, mené pendant la revue à un mois, qui rend la prévision suivante plus fiable.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle menée pour que les règles tiennent au-delà de la session ?",
            'intro' => "Un pipeline se dégrade vite quand personne ne le regarde. La méthode vise donc moins à montrer des écrans qu'à installer un rythme : saisir le jour même, revoir chaque lundi, clore sans regret.",
            'items' => [
                ['titre' => 'Vos affaires, jamais un cas d\'école', 'texte' => "Les exercices portent sur votre historique et votre pipeline en cours, dans votre outil. Le nettoyage fait en séance est réel : l'équipe repart avec une base plus juste qu'à son arrivée."],
                ['titre' => 'Des groupes de trois à huit personnes', 'texte' => "Assez pour que la revue de pipeline jouée ressemble à une vraie réunion, assez peu pour que le formateur relise chaque fiche d'affaire et chaque compte rendu. Au-delà, l'équipe est répartie en deux sessions."],
                ['titre' => 'Des règles écrites par l\'équipe', 'texte' => "Les étapes, les critères de passage, la liste des motifs de perte et le calendrier de relance sont rédigés par les participants, validés par le responsable des ventes et datés. Une règle imposée de l'extérieur ne survit pas à la première fin de mois difficile."],
                ['titre' => 'L\'outil réglé pendant la session', 'texte' => "Étapes renommées, champs obligatoires, liste de motifs, filtre des affaires sans prochaine action, rapport du lundi : ce qui peut être réglé dans l'outil l'est en séance, avec l'administrateur, pour que rien ne reste à faire le lendemain."],
                ['titre' => 'Des supports qui restent à l\'entreprise', 'texte' => "La charte du pipeline sur une page, le modèle de compte rendu, le calendrier de relance, l'ordre du jour de la revue hebdomadaire et une fiche réflexe par geste dans votre outil, en format modifiable."],
                ['titre' => 'Une évaluation sur des affaires réelles', 'texte' => "Chaque participant présente trois affaires en cours. Le résultat est remis au responsable des ventes avec les feuilles de présence ; il indique qui applique déjà les règles et qui doit être accompagné."],
                ['titre' => 'La revue à un mois', 'texte' => "Deux heures à distance pour confronter la prévision annoncée aux signatures, traiter les affaires restées immobiles et corriger les règles qui ont mal vieilli. Un canal reste ouvert entre-temps pour les questions d'application."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Sur quels outils la formation se déroule-t-elle, et que coûtent-ils ?",
            'legende' => "Prix publics relevés le 5 octobre 2026 sur les pages officielles d'Odoo, de DoliCloud, de HubSpot et de Pipedrive, hors taxes, affichés en euros. Ils changent souvent et dépendent du pays ; ces sommes se règlent à l'éditeur, jamais au formateur. La méthode enseignée est la même dans chaque outil.",
            'entetes' => ['Outil', 'Version ou offre', 'Prix publié par l\'éditeur', 'Ce que cela change pour la formation'],
            'lignes'  => [
                ['CRM d\'Odoo', 'Odoo 20.0, sortie en septembre 2026 ; versions antérieures acceptées', "Une application gratuite ; formule Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 € (24,90 €, puis 31,10 € en paiement mensuel) ; Personnalisé à 35,90 €, puis 44,90 €", "Le CRM peut être l'application gratuite d'une petite équipe ; dès qu'il faut le relier aux devis et aux factures, il faut un plan payant"],
                ['Dolibarr', '24.0.1, publiée sur GitHub le 7 septembre 2026', "Logiciel libre et gratuit ; hébergement DoliCloud Basic à 14 € HT par utilisateur et par mois, Premium à 30 € HT par mois plus 15 € HT par utilisateur, avec un essai de 30 jours", "Le suivi des affaires passe par les projets et leurs statuts d'opportunité, à activer dans la configuration avant la session"],
                ['HubSpot', 'Outils gratuits, Starter, Pro, Entreprise', "Outils gratuits à 0 €, jusqu'à 2 utilisateurs ; Starter à 7 € par mois et par licence en facturation annuelle, avec une remise de 65 % à durée limitée ; Pro à 90 € ; Entreprise à 175 €", "L'outil de prévision exige Sales Hub ou Service Hub en version Professional ou Enterprise ; avant, la prévision se fait par un rapport"],
                ['Pipedrive', 'Lite, Growth, Premium, Ultimate', "Par poste et par mois : Lite 14 €, Growth 39 €, Premium 59 €, Ultimate 79 € en facturation annuelle ; 24 €, 49 €, 79 € et 99 € en facturation mensuelle ; essai de 14 jours sans carte", "Le rapport de prévision de revenus des affaires commence à la formule Growth"],
                ['Tableur', 'Excel ou Google Sheets', "Outil déjà présent dans la plupart des entreprises", "Solution d'attente pour une équipe sans CRM : une ligne par affaire, des listes fermées pour l'étape et le motif de perte, une colonne de prochaine action datée ; les formules relèvent de la formation <a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Odoo, Dolibarr, HubSpot ou Pipedrive : où se règlent les éléments du pipeline ?",
            'options'  => ['Odoo 20.0', 'Dolibarr 24.0.1', 'HubSpot', 'Pipedrive'],
            'criteres' => [
                ['critere' => 'Étapes', 'valeurs' => ["Étapes du pipeline, par équipe commerciale", "Statuts d'opportunité d'un dictionnaire, appliqués aux projets suivis comme affaires", "Étapes de transaction ; aucun pipeline personnalisé dans l'offre gratuite, 15 en Starter, 100 en Professional selon la tarification par licence", "Étapes modifiables depuis la vue du pipeline"]],
                ['critere' => 'Probabilité', 'valeurs' => ["Calculée par un modèle prédictif (étape, équipe et variables choisies) ; modifiable à la main, sauf à 100 %", "Pourcentage attaché à chaque statut, de 0 % à 100 % par défaut", "Probabilité par étape, utilisée pour le montant pondéré", "Probabilité par étape, à définir par l'équipe"]],
                ['critere' => 'Faire respecter un critère', 'valeurs' => ["Champs à rendre obligatoires par le paramétrage", "Discipline de l'équipe et relecture du responsable", "Propriétés conditionnelles d'étape, qui peuvent être rendues obligatoires", "Champs obligatoires propres à un pipeline"]],
                ['critere' => 'Affaires qui stagnent', 'valeurs' => ["Activités en retard signalées, filtres sur les dates", "Filtres sur les dates et les statuts", "Rapports et filtres sur la date de dernière activité", "Fonction de pourrissement : l'affaire devient rouge après un nombre de jours sans mise à jour fixé par étape"]],
                ['critere' => 'Motifs de perte', 'valeurs' => ["Liste configurable ; motif et note de clôture facultatifs par défaut", "Statut « Perdu » et note sur le projet", "Propriété de motif de perte sur la transaction", "Motif de perte à la clôture"]],
                ['critere' => 'Prévision', 'valeurs' => ["Rapport Prévision par mois de clôture attendue, revenu proratisé", "Montant pondéré des opportunités par statut", "Outil de prévision en Professional et Enterprise, avec catégories", "Rapport de prévision à partir de Growth"]],
            ],
            'verdict'  => "Les quatre outils permettent d'appliquer la même méthode. Ce qui change, c'est la part que l'outil impose et la part qui repose sur la discipline : Dolibarr demande plus de rigueur de l'équipe, HubSpot et Pipedrive en imposent davantage selon la formule payée. Le choix de l'outil se fait avant la formation ; pour Odoo et Dolibarr, le comparatif publié sur ce site aide à trancher.",
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon votre secteur, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Distribution d'équipements médicaux, à Abidjan, sous Odoo", 'probleme' => "La moitié du pipeline est faite d'appels d'offres d'hôpitaux et de cliniques. Ils restent tous à la même probabilité, quelle que soit la date d'ouverture des plis, et la prévision du trimestre se trompe chaque fois du simple au double.", 'solution' => "Une étape propre aux appels d'offres, avec pour critère le dossier déposé et la date d'ouverture des plis saisie comme date de clôture attendue. Les probabilités sont recalculées sur les appels d'offres des deux dernières années, et le rapport Prévision est lu par mois d'attribution plutôt que par mois de dépôt."],
                ['secteur' => "Bureau d'études et de conseil, à Cotonou, sous Dolibarr", 'probleme' => "Les propositions partent, puis plus personne ne sait lesquelles attendent une réponse. Les associés découvrent en réunion qu'un client a signé ailleurs il y a deux mois.", 'solution' => "Activation du suivi des affaires par les projets, statuts d'opportunité réécrits avec l'équipe, date de réponse obligatoire à chaque proposition et calendrier de relance commun. Les motifs de perte, saisis pendant trois mois, montrent si l'on perd sur le prix, sur le délai ou faute de relance."],
                ['secteur' => "Éditeur de logiciel en démarrage, à Dakar, sous HubSpot", 'probleme' => "Deux fondateurs vendent avec les outils gratuits. Ils confondent les essais gratuits ouverts par des curieux et les vraies affaires, et leur pipeline affiche un montant qui rassure les investisseurs mais ne se transforme pas.", 'solution' => "Séparation entre les contacts en essai, suivis comme pistes, et les affaires, qui n'entrent dans le pipeline qu'après un rendez-vous avec un décideur. Rapport du lundi construit avec les outils gratuits, en attendant de savoir si une formule payante se justifie."],
                ['secteur' => "Agence événementielle, à Lomé, sous Pipedrive", 'probleme' => "Les demandes pour les fêtes de fin d'année arrivent toutes en septembre, et une partie dort dans le pipeline pendant que l'équipe court après les plus gros budgets.", 'solution' => "Fonction de pourrissement réglée étape par étape, avec un délai court pour les devis événementiels, et revue quotidienne de dix minutes en période haute. Les affaires sans réponse après trois relances sont closes, ce qui libère du temps pour celles qui répondent."],
                ['secteur' => "Société de services informatiques, à Lyon", 'probleme' => "Chaque commercial annonce sa prévision à sa façon ; la direction applique une décote au jugé et le plan de recrutement se décide sur un chiffre que personne ne croit.", 'solution' => "Deux chiffres annoncés chaque mois, l'engagé et le probable, avec une définition écrite de chacun. La comparaison mensuelle entre annonce et signature est tenue pendant un trimestre, puis les probabilités par étape sont révisées sur ces résultats."],
                ['secteur' => "Fabricant de matériaux de construction, à Douala, sans CRM", 'probleme' => "Les commerciaux terrain suivent leurs chantiers dans des carnets ; quand l'un d'eux part, ses clients et ses affaires en cours partent avec lui.", 'solution' => "Tableur commun pendant la formation, une ligne par affaire, avec listes fermées pour l'étape et le motif de perte. Après trois mois de discipline, l'entreprise choisit son CRM en connaissant déjà ses étapes, ses champs et ses rapports : le paramétrage prend alors quelques jours."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir, et comment s'organise la formation ?",
            'legende' => "Le programme représente deux jours de formation et une revue de deux heures à un mois. Le format se décide au premier échange, selon la dispersion de l'équipe et la confidentialité des affaires.",
            'entetes' => ['Format', 'Pour qui', 'Organisation', 'Point d\'attention'],
            'lignes'  => [
                ['Intra-entreprise', "Une équipe commerciale et son responsable, sur le même outil", "Deux jours dans vos locaux, consécutifs ou séparés d'une semaine, sur votre pipeline réel", "Bloquer l'agenda des commerciaux : une revue de pipeline sans eux n'a pas de sens"],
                ['Inter-entreprises', "Un ou deux commerciaux, ou un dirigeant qui vend seul", "Deux jours ; chacun travaille sur son propre pipeline, exporté et anonymisé si besoin", "Aucune affaire d'un participant n'est montrée aux autres sans son accord"],
                ['À distance', "Équipes réparties entre plusieurs villes ou pays, en Afrique, en Europe ou au Canada", "Quatre séances de trois heures, espacées d'une semaine, avec du nettoyage de pipeline à faire entre deux séances", "Caméra allumée pour la revue jouée, et partage d'écran de l'outil"],
                ['Hybride', "Équipes qui veulent poser les règles ensemble, puis les appliquer chacun de leur côté", "Première journée en salle, puis deux séances à distance consacrées aux relances, aux indicateurs et à la prévision", "Le délai entre les séances doit permettre au moins une vraie revue du lundi"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est publié pour cette formation : elle est chiffrée sur devis. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, et la facture mentionne l'intitulé, les dates, la durée et le nombre de participants.",
            'items'      => [
                ['offre' => 'Programme complet', 'prix' => 'Sur devis', 'inclus' => ['Deux jours en quatre demi-journées', 'Charte du pipeline écrite par l\'équipe', 'Outil réglé pendant la session', 'Évaluation sur trois affaires réelles par participant']],
                ['offre' => 'Demi-journée de direction', 'prix' => 'Sur devis', 'inclus' => ['Indicateurs et prévision', 'Revue de pipeline jouée', 'Pour un dirigeant ou un responsable des ventes seul']],
                ['offre' => 'Revue à un mois', 'prix' => 'Sur devis', 'inclus' => ['Deux heures à distance', 'Prévision comparée aux signatures', 'Correction des règles', 'Mise à jour du rapport hebdomadaire']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, la revue jouée demandant des groupes de taille raisonnable.",
                "L'outil : un CRM déjà réglé ou à configurer pendant la session, un tableur à structurer, ou plusieurs outils dans la même équipe.",
                "La préparation : extraction et relecture de l'historique des affaires, anonymisation pour une session inter-entreprises.",
                "Le format et le lieu : vos locaux à Cotonou, un déplacement dans une autre ville ou un autre pays, ou des séances à distance.",
                "L'ajout de la revue à un mois et de séances de suivi supplémentaires.",
                "La langue des séances et des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il prendre en charge une partie de cette formation ?",
            'paragraphes' => [
                "Aucune prise en charge n'est promise : seul le fonds décide, selon ses règles et votre situation. En Côte d'Ivoire, la page du FDFP consacrée au plan de formation, relue le 5 octobre 2026, ouvre le dépôt d'un plan à toute entreprise qui justifie du paiement régulier de ses deux taxes de formation. Elle range parmi les formations intra celles qu'un formateur extérieur donne aux salariés d'une seule entreprise, signale que les formations liées à l'informatique suivent des dispositions particulières et prévoit un paiement après le suivi, le contrôle et l'avis de la Commission permanente du fonds.",
                "Au Sénégal, le 3FPT consacre un guichet au financement du personnel des entreprises et des membres des organisations professionnelles. Au Bénin, les statuts du FODEFCA ont été approuvés par le décret n° 2022-286 du 11 mai 2022, et ses conditions se demandent à ses services. En France, France Compétences rappelle que l'accès aux fonds publics et mutualisés, dont ceux des OPCO, exige depuis le 1er janvier 2022 la certification Qualiopi, que Richard SALANON ne détient pas. Le programme, le devis, les feuilles de présence et l'évaluation remis à l'entreprise servent à constituer un dossier quand le fonds l'accepte ; le budget se prévoit sans attendre sa réponse.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quel usage du CRM ruine la confiance de l'équipe en quelques semaines ?",
            'texte' => "En faire un outil de contrôle des personnes plutôt que de conduite des affaires. Quand la direction note les commerciaux sur le nombre d'appels saisis ou d'activités créées, le CRM se remplit d'activités fictives et le pipeline perd toute valeur. Quand une affaire déclarée perdue vaut un reproche en réunion, plus personne ne la déclare, et le pipeline gonfle. La revue hebdomadaire porte donc sur les affaires et leurs prochaines étapes, jamais sur le classement des vendeurs, et une perte bien documentée y est traitée comme une information utile.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles dérives voit-on dans les mois qui suivent la formation, et comment les éviter ?",
            'intro' => "Les règles posées en séance s'usent si personne ne les rappelle. Voici les dérives les plus courantes, et le garde-fou que l'équipe met en place avant de quitter la salle.",
            'items' => [
                ['titre' => 'La revue du lundi qui saute', 'texte' => "Une semaine chargée, puis deux, et la réunion disparaît. Elle est inscrite à l'agenda pour le trimestre, dure trente minutes au plus et commence par la liste des affaires sans prochaine action, extraite par l'outil."],
                ['titre' => 'La saisie du vendredi soir', 'texte' => "Les comptes rendus s'accumulent et sont écrits de mémoire en fin de semaine, sans les engagements précis. La règle : le compte rendu est saisi le jour du rendez-vous, depuis l'application mobile si nécessaire."],
                ['titre' => 'La date de décision repoussée sans raison', 'texte' => "À chaque fin de mois, les affaires non signées glissent au mois suivant. Toute date déplacée appelle une note : ce que le client a dit, et pourquoi la nouvelle date est crédible."],
                ['titre' => 'Les étapes qui se multiplient', 'texte' => "Chacun ajoute l'étape qui lui manque, et le pipeline compte bientôt onze colonnes. Une nouvelle étape se décide en revue, avec son critère écrit, ou ne se crée pas."],
                ['titre' => 'Le motif « autre » qui gagne', 'texte' => "Faute de temps, les affaires perdues partent avec le motif par défaut. La liste est revue chaque trimestre, et tout motif « autre » exige une note de clôture."],
                ['titre' => 'Les automatismes qui relancent à la place du vendeur', 'texte' => "Une séquence de relances programmées continue d'écrire à un client qui a déjà répondu au téléphone. Chaque échange hors outil est saisi le jour même, et toute séquence est suspendue dès qu'une réponse arrive."],
                ['titre' => 'Les prospects gardés par habitude', 'texte' => "Des contacts sans échange depuis des années restent dans la base « au cas où ». Une purge trimestrielle applique la durée de conservation décidée et enregistre les oppositions."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que dit la loi sur les données des prospects conservées dans le CRM ?",
            'paragraphes' => [
                "Un CRM est avant tout un fichier de personnes : interlocuteurs, décideurs, assistants, avec leurs coordonnées et ce que les commerciaux ont noté sur eux. Au Bénin, l'article 383 de la loi n° 2017-20 portant code du numérique exige des données adéquates, pertinentes et non excessives au regard de la finalité, exactes et mises à jour, et conservées pas plus longtemps que nécessaire. L'article 437 permet à toute personne d'obtenir la communication de ses données et de leur origine, avec une copie remise au plus tard dans les soixante jours de sa demande.",
                "Le même code donne au prospect, à l'article 440, le droit de s'opposer gratuitement et sans justification à l'utilisation de ses données à des fins de prospection ; le responsable du fichier doit lui dire, dans les trente jours, quelle suite il a donnée. L'article 448 lui ouvre une réclamation auprès de l'Autorité de protection des données. Dans l'outil, ces règles deviennent des gestes concrets : un champ qui indique l'origine du contact, une étiquette d'opposition respectée par tous, et un export complet d'une fiche que l'administrateur sait produire.",
                "En Europe, le référentiel de la CNIL sur la gestion des activités commerciales admet de conserver les données d'un prospect non client trois ans après leur collecte ou après le dernier contact venu de lui. À l'issue de ce délai, l'entreprise peut lui demander s'il souhaite continuer à recevoir ses sollicitations ; faute de réponse positive et explicite, les données sont supprimées ou archivées. Le même référentiel recommande d'éviter les zones de commentaires libres ou de les encadrer strictement.",
                "Ce dernier point touche directement le compte rendu de rendez-vous. La CNIL rappelle, dans sa page sur les zones bloc-notes publiée le 28 février 2019, que la personne concernée peut lire ces commentaires en exerçant son droit d'accès, qu'ils ne doivent être ni inappropriés, ni subjectifs, ni insultants, et elle conseille de préférer des menus déroulants proposant des appréciations objectives. La formation applique cette règle : on note ce que le client a dit et décidé, jamais un jugement sur sa personne ou sa vie privée.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Terrain, connexion, langues, devises : que change le contexte local pour le suivi des affaires ?",
            'paragraphes' => [
                "En Afrique francophone, beaucoup d'affaires se conduisent sur le terrain, d'une visite de chantier à un rendez-vous chez un client, et se poursuivent au téléphone. Le rapport Digital 2026 de DataReportal consacré à la Côte d'Ivoire, publié le 8 novembre 2025, compte 49,7 millions de connexions mobiles, soit 151 % de la population, pour 13,4 millions d'internautes, soit 40,7 %. Le téléphone est donc souvent le seul poste de travail d'un commercial en déplacement : la formation fait saisir le compte rendu et la prochaine action depuis l'application mobile, ou au plus tard le soir même.",
                "Les négociations se poursuivent aussi sur les messageries. Une remise accordée dans une conversation WhatsApp, un accord donné par message vocal, une date promise par SMS : si rien n'est reporté dans l'affaire, le pipeline ignore ce que sait le vendeur. La règle enseignée est simple, tout engagement pris hors de l'outil y est résumé le jour même ; relier directement la messagerie au logiciel fait l'objet d'une formation distincte, citée plus haut.",
                "La devise et la langue comptent également. Une entreprise qui vend en francs CFA d'Afrique de l'Ouest, en francs CFA d'Afrique centrale et en euros doit saisir chaque affaire dans sa devise et vérifier comment l'outil convertit les montants dans les rapports, sous peine d'additionner des valeurs qui ne se comparent pas. Les étapes, les motifs et les modèles de compte rendu sont rédigés en français, et doublés en anglais quand l'équipe suit des clients du Ghana, du Nigeria ou du Canada anglophone.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi suivre cette formation avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il installe et paramètre des CRM chez ses clients, dans Odoo comme dans Dolibarr, et construit les automatisations qui les relient aux devis, aux factures et aux messageries. Il voit donc, d'un projet à l'autre, ce qui distingue un pipeline tenu d'un pipeline abandonné, et ce qui relève de l'outil ou des habitudes de l'équipe. Créateur de <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>, il mène lui-même ses ventes auprès d'entreprises, du premier échange au devis.",
                "Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique et des missions menées dans " . count((array) fait('pays_travailles')) . " pays, en Afrique de l'Ouest et centrale, en Europe et au Canada. Il déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes aux outils numériques, à l'IA et aux logiciels de gestion. Il n'est partenaire ni certifié d'aucun éditeur de CRM, ce qui lui laisse la liberté de conseiller un tableur bien tenu plutôt qu'un abonnement prématuré.",
                "Ce qu'il s'engage à faire se vérifie : une réponse sous 24 heures, un cadrage gratuit, des exercices sur vos affaires et votre outil, une évaluation sur des cas réels, des supports qui restent à l'entreprise, et aucune promesse de chiffre d'affaires. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur la page des <a href=\"/zones/\">zones d'intervention</a>, et la mise en place d'un CRM dans Odoo ou Dolibarr sur les pages <a href=\"/services/integration-odoo\">intégration Odoo</a> et <a href=\"/services/integration-dolibarr\">intégration Dolibarr</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre équipe commerciale ?",
            'texte' => "Un pipeline fiable tient à quatre règles : des étapes franchies sur un fait, une prochaine action datée sur chaque affaire, des pertes déclarées avec un motif, une revue chaque semaine. L'outil vient ensuite. Les autres formations aux logiciels de gestion sont réunies sur la page <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>, et l'organisation plus large des processus relève de la <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>. L'ensemble du catalogue figure sur la page des <a href=\"/formations/\">formations</a>.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre pipeline dit-il vraiment ce que vous allez signer ce trimestre ?",
            'texte'  => "Indiquez votre outil de suivi commercial, le nombre de commerciaux, la durée habituelle de vos ventes et ce qui vous gêne aujourd'hui dans vos prévisions : vous recevez une réponse sous 24 heures, puis un programme adapté et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander cette formation'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il avoir déjà un CRM pour suivre la formation ?", 'r' => "Il faut au moins un outil choisi ou à l'essai, avec un compte par participant. Une équipe sans CRM peut se former sur un tableur structuré pendant la session ; elle choisira ensuite son outil en connaissant déjà ses étapes, ses champs et ses rapports, ce qui simplifie beaucoup le paramétrage."],
        ['q' => "En quoi cette formation diffère-t-elle d'une formation au CRM d'Odoo ?", 'r' => "Une formation à Odoo apprend les écrans d'un logiciel. Celle-ci apprend une méthode de suivi des affaires qui vaut dans n'importe quel outil : étapes définies par des faits, prochaine action datée, relances motivées, motifs de perte, revue hebdomadaire et prévision. Elle se déroule dans votre outil, mais ses règles survivent à un changement de logiciel."],
        ['q' => "Combien d'étapes doit compter un pipeline ?", 'r' => "Cinq à sept dans la plupart des cas, entre le premier rendez-vous et la décision. En dessous, on ne voit pas où les affaires se perdent ; au-dessus, les vendeurs ne savent plus où placer une affaire. Chaque étape doit avoir un critère de passage que deux personnes appliqueraient de la même façon."],
        ['q' => "Faut-il garder les probabilités proposées par l'outil ?", 'r' => "Elles servent de point de départ, pas de vérité. Dolibarr livre par exemple 20 % pour la qualification, 40 % pour la proposition et 60 % pour la négociation. Après quelques mois de saisie disciplinée, on les remplace par les taux observés dans votre historique ; Odoo, lui, recalcule sa probabilité à partir des affaires gagnées et perdues."],
        ['q' => "Combien de fois relancer un client qui ne répond pas ?", 'r' => "Le nombre se fixe à l'avance, par écrit, selon la durée habituelle de vos ventes, et chaque relance doit apporter un élément nouveau. Au-delà, l'affaire est close avec le motif correspondant, ou mise en sommeil avec une date de reprise. Si la personne s'oppose à être recontactée, son choix est enregistré et respecté par toute l'équipe."],
        ['q' => "Que peut-on écrire dans les notes sur un prospect ?", 'r' => "Ce que le client a dit, demandé et décidé, ce qui a été promis de part et d'autre, et la suite convenue. Jamais d'appréciation sur sa personne, sa santé ou sa vie privée : la CNIL rappelle que la personne peut lire ces commentaires en exerçant son droit d'accès, et la loi béninoise exige des données adéquates et non excessives."],
        ['q' => "Combien de temps peut-on garder un prospect dans le CRM ?", 'r' => "En Europe, le référentiel de la CNIL retient trois ans à compter de la collecte ou du dernier contact venu du prospect, une simple ouverture d'e-mail ne comptant pas. Au Bénin, l'article 383 du code du numérique interdit de conserver les données au-delà de ce que la finalité exige. La formation fait fixer une durée écrite et une purge régulière."],
        ['q' => "Le responsable des ventes doit-il suivre toute la formation ?", 'r' => "Oui, ou au minimum la deuxième journée. C'est lui qui valide les règles, anime la revue hebdomadaire et répond de la prévision. Sans lui, les commerciaux appliquent les règles quelques semaines, puis reviennent à leurs habitudes dès que la réunion du lundi reprend son ancien cours."],
        ['q' => "La formation peut-elle se faire entièrement à distance ?", 'r' => "Oui, en quatre séances de trois heures espacées d'une semaine, avec partage d'écran de l'outil. L'espacement est un avantage : entre deux séances, chacun nettoie son pipeline et tient une vraie revue du lundi, dont les difficultés sont reprises à la séance suivante."],
        ['q' => "Nos affaires restent-elles confidentielles pendant la session ?", 'r' => "Oui. En intra, on travaille sur votre outil, dans vos locaux ou par partage d'écran, et rien n'est copié ailleurs. En inter-entreprises, chacun travaille sur son propre pipeline, exporté et anonymisé si nécessaire, et aucune affaire n'est montrée aux autres participants sans l'accord de son entreprise."],
        ['q' => "Combien coûte la formation, et les licences sont-elles comprises ?", 'r' => "La formation est chiffrée sur devis, après un cadrage gratuit ; le prix dépend du nombre de participants, de l'outil et de sa préparation, du format, du lieu et de la revue à un mois. Les abonnements d'Odoo, de HubSpot, de Pipedrive ou de DoliCloud se règlent directement aux éditeurs et ne figurent pas dans le devis."],
        ['q' => "Que reste-t-il à l'équipe après la formation ?", 'r' => "La charte du pipeline sur une page, les étapes et les motifs de perte réglés dans l'outil, le modèle de compte rendu, le calendrier de relance, le rapport du lundi, une fiche réflexe par geste, le résultat de l'évaluation de chaque participant et, si elle est retenue, la revue à un mois."],
    ],

    'sources' => [
        ['titre' => "Odoo 20.0, documentation du CRM : rapport Prévision (Forecast report)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/crm/performance/forecast_report.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation du CRM : score prédictif des pistes (Predictive lead scoring)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/crm/track_leads/lead_scoring.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation du CRM : opportunités perdues et motifs de perte", 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/crm/pipeline/lost_opportunities.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation du CRM : activités, enchaînements et plans d'activités", 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/crm/optimize/utilize_activities.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page Tarification", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "GitHub, publication de Dolibarr 24.0.1 (7 septembre 2026)", 'url' => 'https://github.com/Dolibarr/dolibarr/releases/tag/24.0.1', 'date' => '2026-10-05'],
        ['titre' => "GitHub, Dolibarr 24.0.1 : statuts d'opportunité livrés par défaut et leurs probabilités (llx_c_lead_status.sql)", 'url' => 'https://github.com/Dolibarr/dolibarr/blob/24.0.1/htdocs/install/mysql/data/llx_c_lead_status.sql', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, module Projets (suivi des opportunités, statut et probabilité)", 'url' => 'https://wiki.dolibarr.org/index.php/Module_Projets', 'date' => '2026-10-05'],
        ['titre' => "DoliCloud, tarifs des offres Basic et Premium", 'url' => 'https://www.dolicloud.com/fr/fr-faq-pricing.php', 'date' => '2026-10-05'],
        ['titre' => "HubSpot, tarifs (page en français lue dans un navigateur)", 'url' => 'https://www.hubspot.fr/pricing/sales', 'date' => '2026-10-05'],
        ['titre' => "HubSpot, base de connaissances : configurer l'outil de prévision", 'url' => 'https://knowledge.hubspot.com/forecast/set-up-the-forecast-tool', 'date' => '2026-10-05'],
        ['titre' => "HubSpot, base de connaissances : pipelines et étapes de transaction (mise à jour du 8 septembre 2026)", 'url' => 'https://knowledge.hubspot.com/deals/set-up-and-customize-your-deal-pipelines-and-deal-stages', 'date' => '2026-10-05'],
        ['titre' => "Pipedrive, offres et tarifs", 'url' => 'https://www.pipedrive.com/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => "Pipedrive, base de connaissances : la fonction de pourrissement des affaires (The Rotting feature)", 'url' => 'https://support.pipedrive.com/en/article/the-rotting-feature', 'date' => '2026-10-05'],
        ['titre' => "CNIL, référentiel relatif aux traitements de données mis en œuvre aux fins de gestion des activités commerciales", 'url' => 'https://www.cnil.fr/sites/cnil/files/atoms/files/referentiel_traitements-donnees-caractere-personnel_gestion-activites-commerciales.pdf', 'date' => '2026-10-05'],
        ['titre' => "CNIL, zones bloc-notes et commentaires : les bons réflexes pour ne pas déraper (28 février 2019)", 'url' => 'https://www.cnil.fr/fr/zones-bloc-note-et-commentaires-les-bons-reflexes-pour-ne-pas-deraper', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 383, 437, 440 et 448)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "DataReportal, Digital 2026 Côte d'Ivoire (8 novembre 2025)", 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['marketing-digital-b2b', 'whatsapp-odoo-dolibarr-crm', 'odoo-utilisateurs', 'dolibarr-utilisateurs', 'odoo-dirigeants', 'power-bi-looker-studio'],
        'services'    => ['integration-odoo', 'digitalisation-d-entreprise', 'integration-dolibarr'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
