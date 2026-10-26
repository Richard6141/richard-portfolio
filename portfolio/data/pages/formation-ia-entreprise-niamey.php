<?php
// ============================================================
// data/pages/formation-ia-entreprise-niamey.php · Page ville « Formation IA en entreprise à Niamey ».
// Faits de ville relevés le 26/10/2026 : Wikipédia (Niamey, Grand Marché, pont Kennedy, université Abdou Moumouni),
// Le360 (troisième pont, août 2024), Connaissance des énergies / AFP (délestages de juin 2023, centrale solaire de
// novembre 2023), Ecofin (mars 2026 : importations du Nigeria, projet algérien de Gorou Banda ; janvier 2026 : plateforme
// de l'ARCEP), IGF Niger 2026, ITWeb (CIPMEN). Faits nationaux repris de la fiche pays (ARCEP, DataReportal, lois).
// Aucune certification ni aucun agrément attribué à Richard. Aucune somme pour la formation.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA en entreprise à Niamey : vos équipes utilisent ChatGPT, Claude et Gemini sur leurs propres documents, avec des séances qui résistent aux coupures de courant et de réseau",
    'title'   => "Formation IA en entreprise à Niamey | Richard SALANON",
    'meta'    => "Formation IA en entreprise à Niamey : ChatGPT, Claude et Gemini sur vos documents, séances à distance depuis Cotonou à la même heure, devis en FCFA.",
    'en_bref' => "À Niamey, une équipe peut être formée à l'IA par Richard SALANON, consultant basé à Cotonou, qui anime en français et à distance, à la même heure légale qu'à Niamey, des ateliers et des formations sur ChatGPT, Claude et Gemini, à partir des documents réels de l'entreprise plutôt que d'une démonstration générale. Chaque séance est conçue pour une journée où le courant ou le réseau peuvent faiblir. Les exemples viennent des métiers de la ville : commerce, finance, projets, transport, enseignement. Le devis est établi en FCFA, sur demande.",
    'publie'  => '2026-11-04',
    'maj'     => '2026-11-04',
    'schema'  => 'WebPage',

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qui forme les équipes à l'IA à Niamey, et comment choisir ?",
            'paragraphes' => [
                "Trois profils proposent aujourd'hui de former à l'IA depuis ou vers Niamey : des établissements d'enseignement supérieur, dont les programmes s'adressent d'abord aux étudiants, des cabinets installés à l'étranger qui interviennent par visioconférence, et des consultants indépendants qui travaillent sur les dossiers de l'entreprise. Pour une équipe en poste, le critère décisif est l'usage de ses propres documents.",
                "Au 26 octobre 2026, une recherche « formation IA Niamey » renvoie surtout vers une boutique d'applications, une encyclopédie et des institutions internationales. Une direction qui cherche un prestataire pour ses salariés doit donc construire elle-même sa grille de comparaison. Elle peut s'appuyer sur la différence entre une démonstration d'outil et une formation qui change le travail.",
                "Une démonstration dure une heure et montre ce que l'outil sait faire sur des exemples choisis par l'animateur. Une formation d'entreprise part de l'autre bout : elle prend deux ou trois tâches qu'une personne du service répète chaque semaine, par exemple le compte rendu d'une réunion de direction, la réponse à un client qui écrit sur WhatsApp ou le tableau de suivi d'un chantier, et les refait avec l'assistant sur de vrais fichiers. Elle se termine par un exercice que la personne réussit seule. Ce qui compte, c'est ce que l'équipe fait encore un mois plus tard.",
                "À Niamey, quatre questions permettent de départager des offres sans dénigrer personne. L'animateur travaille-t-il lui-même avec ces outils sur des projets réels ? Les exercices utilisent-ils vos documents, anonymisés quand il le faut ? Que devient la séance quand le courant saute pendant une chaleur d'avril ? Le devis, en FCFA, détaille-t-il la préparation, les supports remis et le suivi après la session ? Un prestataire, nigérien ou étranger, qui répond précisément à ces quatre points mérite un entretien.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que fait vivre l'économie de Niamey, et qu'est-ce que cela change pour une équipe qui veut utiliser l'IA ?",
            'paragraphes' => [
                "Niamey vit d'abord de ce qu'une capitale concentre : l'administration, le commerce, la banque, les projets des organisations partenaires et le transport. La ville comptait 1 802 910 habitants en 2018, répartis en cinq communes : les communes I à IV sur la rive gauche du fleuve Niger, la commune V sur la rive droite (Wikipédia, consulté le 26 octobre 2026). Wikipédia ajoute que Niamey abrite la plupart des industries du pays.",
                "Le Grand Marché donne l'échelle du commerce. Reconstruit après l'incendie du 30 mars 1982 et rouvert le 5 janvier 1987, il comptait environ 4 000 boutiques, des étals simples aux bâtiments en dur, et vend en gros comme au détail des marchandises venues de tout le pays et de l'étranger (Wikipédia, page anglaise sur le Grand Marché de Niamey). Un nouvel incendie, en mai 2009, a détruit environ 1 500 étals. Un commerçant de ce marché ne rédige pas de rapports : il répond à des clients, tient ses prix à jour et suit ses commandes. C'est là que l'assistant lui fait gagner du temps, sur les réponses types et le classement des demandes.",
                "Le fleuve structure aussi les déplacements, donc le travail des équipes de transport et de livraison. Le pont Kennedy, ouvert en 1970, a longtemps été le principal franchissement entre les deux rives. Le pont Général Seyni Kountché, inauguré en 2021, a détourné une partie de la circulation, notamment des camions qui traversaient le centre, selon des usagers interrogés par Le360 en août 2024. Pour une entreprise de livraison, de distribution ou de maintenance, la tournée de la journée, la liste des colis et le message au client sont des tâches à fort volume d'écriture, que l'assistant sait préparer.",
                "Enfin, la capitale concentre des établissements d'enseignement supérieur : Wikipédia cite l'université Abdou Moumouni, l'EMIG, l'EAMAC, l'ESSCOM et l'African Development University. Leurs services administratifs produisent des convocations, des procès-verbaux et des notes de service à la chaîne. Pour toutes ces équipes, la conséquence pratique est la même : on commence par la tâche écrite la plus répétitive, pas par l'outil.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels lieux et quels flux de Niamey fournissent les premières tâches à confier à l'assistant ?",
            'legende' => "Repères de la ville relevés le 26 octobre 2026, avec la tâche d'écriture ou de classement qu'ils produisent dans une équipe.",
            'entetes' => ['Repère de Niamey', 'Fait relevé', 'Tâche que l\'équipe peut préparer avec l\'assistant'],
            'lignes'  => [
                ['Grand Marché', "Environ 4 000 boutiques à la réouverture de 1987, gestion par la société SOCOGEM selon Wikipédia", "Réponses types aux acheteurs, liste de prix à jour, relances de paiement, tableau des commandes du jour"],
                ['Les trois ponts sur le fleuve', "Pont Kennedy (1970), pont Général Seyni Kountché (2021)", "Plan de tournée, message d'information aux clients en cas de retard, rapport de livraison"],
                ['Aéroport international Diori Hamani', "À 12 kilomètres au sud-est du centre, en rénovation selon Wikipédia", "Courriers aux transitaires, dossiers de réception de marchandises, comptes rendus de voyage"],
                ['Établissements d\'enseignement supérieur', "Université Abdou Moumouni, EMIG, EAMAC, ESSCOM, African Development University", "Notes de service, procès-verbaux de jury, supports de cours, courriers aux familles"],
                ['Ministères et administrations', "Capitale administrative du pays ; le ministère des Finances figure parmi les bâtiments cités par Wikipédia", "Notes de synthèse, comptes rendus de réunion, courriers normés à partir d'un modèle validé"],
                ['Les cinq communes', "Quatre sur la rive gauche, une sur la rive droite", "Constitution de groupes de formation par site, séances décalées pour les équipes éloignées du centre"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelle connexion, quelle électricité et quel équipement les équipes ont-elles à Niamey, et comment la formation s'y adapte-t-elle ?",
            'paragraphes' => [
                "Les équipes de Niamey se connectent d'abord par le téléphone mobile, et c'est l'électricité qui décide le plus souvent de l'organisation d'une séance. Les deux sujets se préparent avant la formation, pas pendant. Voici ce que les sources publiques permettent d'affirmer, et ce que la formation en tire.",
                "Sur l'électricité, le fait le plus récent est celui du 3 mars 2026 : Ecofin rapporte que, en avril 2025, le Nigeria avait réduit de 42 % ses exportations d'électricité vers le Niger, ramenant l'approvisionnement quotidien d'environ 80 mégawatts à 46. Le même article précise que seulement 20 % de la population avait accès à l'électricité en 2023 selon la Banque mondiale, que plus de 100 mégawatts solaires et thermiques ont été achevés en 2024 et 2025 selon les déclarations officielles, et que l'Algérie, par l'intermédiaire de Sonelgaz, prépare une centrale à gaz d'environ 40 mégawatts à Gorou Banda, sans date de début de chantier annoncée.",
                "Les coupures de 2023 donnent un ordre de grandeur de ce qui peut arriver. En juin 2023, selon l'AFP, des délestages ont frappé Niamey de jour comme de nuit pendant près d'une semaine, la plus longue coupure ayant duré près de dix heures et paralysé des centres de santé et des commerces, avec des interruptions de l'eau dans plusieurs quartiers. La Société nigérienne d'électricité, la Nigelec, a ensuite mis en service en novembre 2023 une centrale photovoltaïque de 30 mégawatts, plus de 55 000 panneaux, et le service s'est amélioré à Niamey, à Dosso et à Tillabéri, d'après la dépêche.",
                "Pour le réseau, l'ARCEP a inauguré à Niamey, le 28 janvier 2026, une plateforme de suivi qui contrôle le trafic (TRAFSCAN), la qualité de service (QUALCOP) et les infrastructures critiques comme la fibre (NETFIX), selon Ecofin. Le même article donne 11,2 millions d'abonnés à internet fin du premier trimestre 2025, dont 8,3 millions en mobile. À l'échelle du pays, l'internet fixe reste rare : la fiche pays du Niger détaille ces chiffres. Un bureau de Niamey travaille donc souvent avec un modem mobile ou un partage de connexion de téléphone.",
                "La formation en tire des règles simples, appliquées à chaque groupe. Les séances sont découpées en blocs de moins de deux heures et demie. Les documents d'exercice sont envoyés la veille, pour qu'aucune séance ne dépende d'un téléchargement en direct. Les ordinateurs sont chargés avant le début, et un téléphone en partage de connexion sert de secours. Chaque exercice est enregistré au fil de l'eau. Quand quelqu'un décroche, le groupe poursuit : le support écrit permet de rattraper le passage manqué.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles ressources locales existent à Niamey pour se repérer dans l'IA et le numérique ?",
            'paragraphes' => [
                "Plusieurs repères existent à Niamey pour une équipe qui veut comprendre l'environnement numérique avant de se former. Aucun n'est une recommandation commerciale : ce sont des institutions et des événements dont l'existence est établie à la date de consultation.",
                "L'université Abdou Moumouni est le principal établissement public d'enseignement supérieur de la ville. Elle date de 1974 et son effectif est estimé à environ 25 000 étudiants, un chiffre que Wikipédia donne sans date (consulté le 26 octobre 2026). Elle rassemble des facultés d'agronomie, de lettres et sciences humaines et de sciences, ainsi que l'École normale supérieure et l'École nationale de santé publique. Pour connaître les cursus numériques en vigueur cette année, le plus sûr est de s'adresser directement à l'université ou aux établissements privés cités plus haut.",
                "Côté entrepreneuriat, Orange Niger et des partenaires locaux ont lancé en 2014 l'incubateur de PME CIPMEN, présenté par ITWeb le 26 mai 2014 comme le troisième incubateur d'Orange et tourné vers les technologies de l'information, les énergies renouvelables et l'environnement. Cette annonce date de plus de dix ans : l'activité actuelle de la structure se confirme directement auprès d'elle avant toute démarche.",
                "Pour l'actualité des politiques numériques, le Forum sur la gouvernance de l'internet du Niger a eu lieu à Niamey du 21 au 24 avril 2026. Selon la page du Forum sur la gouvernance de l'internet des Nations unies, c'est un bon point d'entrée pour suivre qui travaille sur ces sujets dans la capitale.",
                "Enfin, la Chambre de commerce, d'industrie et d'artisanat du Niger, la CCIAN, a vu ses statuts approuvés par le décret n° 2010-52/PCSRD du 18 mars 2010. Elle réunit les entreprises de la place et reste l'interlocuteur naturel pour connaître les rencontres d'affaires organisées à Niamey.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels formats de formation sont possibles à Niamey, et pour quelle équipe ?",
            'legende' => "Durées et tailles de groupe de la fiche de formation en entreprise. Tous les formats se donnent à distance depuis Cotonou, en français. Le déplacement éventuel est un facteur de prix qui se traite au devis.",
            'entetes' => ['Format', 'Durée et effectif', 'Équipe concernée à Niamey', 'Organisation concrète'],
            'lignes'  => [
                ['Atelier découverte', "Une demi-journée, 12 personnes au plus", "Direction ou service qui n'a jamais travaillé avec un assistant et veut voir avant de décider", "Deux blocs courts avec une pause, documents envoyés la veille, une tâche réelle traitée en direct par groupe"],
                ['Formation complète', "Deux jours en quatre demi-journées, 10 personnes au plus par groupe", "Service dont les tâches écrites sont répétitives : commercial, administration, comptabilité, secrétariat", "Matinées de préférence, avant la chaleur de l'après-midi ; exercice final sur la tâche cible de chaque participant"],
                ['Séances à distance étalées', "Cinq à six séances de 2 h 30, 8 personnes au plus", "Équipe répartie entre plusieurs sites de la ville ou plusieurs régions du pays", "Une séance par jour ou par semaine ; chacun se connecte de son poste ; exercices à terminer hors ligne"],
                ['Session de direction', "Une demi-journée, petit groupe", "Dirigeants qui décident des outils, du budget et de la règle sur les données", "Séance en petit groupe, parcours de la formation <a href='/formations/ia-generative-dirigeants'>IA générative pour dirigeants</a>"],
                ['Accompagnement mensuel', "Une demi-journée par mois pendant trois mois", "Équipe déjà formée qui veut étendre l'usage à d'autres tâches", "Bilan des usages du mois, consignes corrigées, nouvelle tâche ajoutée"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment se passe une formation à distance depuis Cotonou, avec quel décalage horaire et à quelles heures ?",
            'paragraphes' => [
                "Il n'y a aucun décalage horaire : Cotonou et Niamey sont toutes deux à UTC+1 en toute saison, sans passage à l'heure d'été (base de données des fuseaux horaires de l'IANA). Une séance annoncée à 9 heures commence à 9 heures des deux côtés. Richard SALANON est joignable de 7 h à 20 h tous les jours, d'après sa fiche, ce qui laisse une large marge pour placer les séances.",
                "Le climat de Niamey influence le choix des plages. Selon Wikipédia, la température maximale moyenne annuelle y est de 36,2 °C et le record, en avril, de 45,6 °C. Une salle sans climatisation devient pénible en début d'après-midi, et la consommation électrique monte avec la chaleur. Les matinées, de 8 h 30 à 12 h, sont donc la plage la plus sûre, une reprise à 15 h 30 ou 16 h servant aux équipes qui ne peuvent pas se libérer le matin.",
                "Le déroulé d'une séance à distance reste simple. Chaque participant rejoint la visioconférence depuis son poste, partage son écran quand il travaille, et dépose son exercice dans un dossier partagé qui appartient à l'entreprise. Le formateur circule d'un écran à l'autre comme dans une salle, lit les demandes et les réponses, corrige au bon moment. Les supports sont légers, pour passer sur une connexion modeste.",
                "Un déplacement à Niamey n'est pas exclu en principe : la fiche de formation en entreprise prévoit que le lieu, notamment un déplacement hors de Cotonou ou hors du Bénin, fait varier le prix. Il se convient au préalable et figure au devis ; la plupart des équipes n'en ont pas besoin pour apprendre à se servir d'un assistant, puisque l'essentiel de la formation est de la pratique sur écran.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "Que fait chaque métier de Niamey avec l'IA pendant la formation ?",
            'items' => [
                ['secteur' => "Commerce du Grand Marché et vente par messagerie", 'probleme' => "Un commerçant répond à des dizaines de messages par jour, avec des prix qui changent selon les arrivages, et note ses commandes dans des fils de discussion où rien ne se retrouve.", 'solution' => "Tâche : rédiger des réponses types, classer les demandes par motif et dresser le tableau des commandes de la journée. Outil : ChatGPT ou Gemini sur téléphone, tableur pour le tableau. Résultat attendu : une bibliothèque de réponses relues par le gérant, et un tableau dont deux totaux sont recalculés à la main avant livraison."],
                ['secteur' => "Banques, microfinance et monnaie électronique", 'probleme' => "Les équipes commerciales et de conformité rédigent des courriers, des notes d'information et des comptes rendus de visite, en manipulant des informations de clients protégées par la loi.", 'solution' => "Tâche : produire une note d'information à la clientèle et un compte rendu de visite à partir de notes anonymisées. Outil : Copilot Chat si la licence Microsoft 365 existe, sinon un assistant sur compte d'entreprise. Résultat attendu : des textes cohérents, sans nom ni numéro de client déposé dans l'outil."],
                ['secteur' => "Projets de développement, organisations internationales et bailleurs", 'probleme' => "Les chargés de projet produisent des rapports, des tableaux d'indicateurs et des procès-verbaux dans des délais serrés, parfois en anglais, avec des informations sensibles sur des bénéficiaires.", 'solution' => "Tâche : résumer un rapport long en citant les pages, préparer un tableau d'indicateurs et un procès-verbal de réunion. Outil : Claude ou NotebookLM sur des documents non nominatifs. Résultat attendu : une synthèse dont chaque chiffre est retrouvé à la bonne page de la source."],
                ['secteur' => "Transport, distribution et maintenance autour des ponts et de l'aéroport", 'probleme' => "Une entreprise de livraison ou de maintenance jongle entre plusieurs rives du fleuve, des horaires de camions et des transitaires, et rédige à la main bons, rapports d'intervention et messages de retard.", 'solution' => "Tâche : transformer les notes d'une tournée en rapport d'intervention structuré et rédiger l'avis de retard au client. Outil : ChatGPT ou Claude sur un modèle de rapport de la société. Résultat attendu : un rapport complet relu par le responsable, avec contrôle des dates, des quantités et des engagements de délai."],
                ['secteur' => "Établissements d'enseignement supérieur et écoles privées", 'probleme' => "Les services administratifs produisent convocations, procès-verbaux de jury, notes de service et courriers aux familles, avec des modèles stricts et plusieurs signataires.", 'solution' => "Tâche : préparer le premier jet d'une note de service ou d'un courrier aux parents à partir d'un modèle validé, et mettre en forme un procès-verbal. Outil : un assistant sur compte d'établissement. Résultat attendu : un texte au format maison, sans note d'étudiant identifiable envoyée à l'outil."],
                ['secteur' => "Cabinets comptables et sociétés assujetties à la TVA", 'probleme' => "Les relances de paiement, le commentaire des tableaux de dépenses et la préparation de la clôture occupent les équipes à chaque fin de mois.", 'solution' => "Tâche : rédiger les relances, commenter un tableau de dépenses et vérifier la cohérence d'un export. Outil : un assistant sur compte d'entreprise et le tableur de la société. Résultat attendu : des relances utilisables et un contrôle chiffré fait à la main, jamais délégué à l'assistant."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quelles règles sur les données une équipe de Niamey doit-elle appliquer avant d'envoyer un document à un assistant ?",
            'paragraphes' => [
                "À Niamey, ce sont les secteurs de la ville qui décident du degré de prudence. Une banque ou un établissement de monnaie électronique manipule des identités et des soldes ; une clinique ou un centre de santé, des dossiers de patients ; une école ou une université, des notes et des dossiers d'étudiants ; un projet financé par un partenaire étranger, des listes de bénéficiaires. Dans chacun de ces lieux, la règle de la formation est la même : le document est classé avant d'ouvrir l'outil, les noms et les numéros sont remplacés, et ce qui est nominatif ne sort pas de l'entreprise.",
                "Pour une administration ou un service rattaché à une collectivité de la capitale, il faut en outre relire le cadre interne de l'institution : un ministère ou une mairie peut imposer des circuits de validation et de confidentialité plus stricts que la loi. Le cadre légal national, avec la loi sur les données personnelles, l'autorité de contrôle et les formalités, est détaillé sur la page <a href='/formations/ia-en-entreprise/niger'>formation IA en entreprise au Niger</a>, qui s'applique à Niamey comme au reste du pays.",
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte une formation IA à Niamey ?",
            'intro'      => "Aucune somme n'est affichée ici : le prix est fixé sur devis, en FCFA, après un échange de cadrage. Le devis détaille la préparation, l'animation, les supports et le suivi. Les abonnements aux assistants restent à la charge de l'entreprise et ne sont pas inclus.",
            'items'      => [
                ['offre' => "Atelier découverte", 'prix' => "Sur devis, en FCFA", 'inclus' => ["Une demi-journée à distance", "Deux tâches travaillées sur vos documents", "Règle de classement des données", "Conseil sur la suite à donner"]],
                ['offre' => "Formation complète", 'prix' => "Sur devis, en FCFA", 'inclus' => ["Quatre demi-journées à distance", "Exercices bâtis sur vos documents anonymisés", "Bibliothèque de consignes et modes opératoires", "Évaluation sur la tâche cible et attestation nominative", "Canal direct le mois suivant"]],
                ['offre' => "Accompagnement mensuel", 'prix' => "Sur devis, en FCFA", 'inclus' => ["Une demi-journée par mois pendant trois mois", "Mesure de ce qui sert vraiment", "Nouvelles tâches ajoutées", "Bilan écrit à trois mois"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, par service ou par site de la ville.",
                "Le nombre de demi-journées et le format retenu.",
                "Le temps de préparation et d'anonymisation des documents de l'entreprise.",
                "La langue des supports, en français ou en anglais pour les équipes qui répondent à des bailleurs.",
                "Un éventuel déplacement convenu au préalable, plutôt qu'une session à distance.",
                "L'accompagnement après la session.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment budgéter la formation, hors du prix de la formation elle-même ?",
            'paragraphes' => [
                "Le devis est libellé en FCFA, la monnaie que Niamey et Cotonou partagent, donc sans conversion. Richard accepte Mobile Money (MTN, Moov), la carte bancaire, PayPal, le virement et les espèces ; le mode de règlement se fixe au devis. Une entreprise qui règle par virement depuis sa banque de Niamey vérifie auparavant les frais prélevés des deux côtés.",
                "Trois lignes composent le budget réel. La première est la formation. La deuxième, les abonnements aux assistants, que les éditeurs facturent en dollars ou en euros : une carte internationale devient alors nécessaire, ce que toutes les entreprises de la ville ne possèdent pas, et la question se règle avant l'achat. Pour comparer les offres d'équipe, le <a href='/comparatifs/chatgpt-vs-claude-vs-gemini'>comparatif de ChatGPT, Claude et Gemini</a> donne les conditions à jour. La troisième ligne est la plus oubliée : le temps des salariés. Huit personnes qui suivent quatre demi-journées mobilisent plusieurs journées de travail, à prévoir dans le planning avant la première séance.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs reviennent chez les équipes de Niamey qui démarrent l'IA ?",
            'intro' => "Ces écarts naissent des conditions de la ville autant que de l'outil. Chacun se prévient pendant la session.",
            'items' => [
                ['titre' => "Planifier la séance sans penser au courant", 'texte' => "Une coupure de plusieurs heures est arrivée en 2023, et l'approvisionnement en électricité importée a encore baissé en 2025. On charge les ordinateurs, on découpe la séance et on enregistre le travail au fur et à mesure."],
                ['titre' => "Tout traiter depuis le téléphone personnel", 'texte' => "Quand le poste de bureau est instable, des salariés collent des documents de l'entreprise dans une application de leur téléphone. Une règle écrite et un compte d'entreprise remplacent cette habitude."],
                ['titre' => "Envoyer des listes de clients, d'élèves ou de bénéficiaires", 'texte' => "Une liste nominative ne se soumet jamais à un assistant sans anonymisation, quelle que soit la pression du délai."],
                ['titre' => "Réserver les outils à la direction", 'texte' => "Quand seul le dirigeant s'en sert, les tâches répétitives restent entre les mains des équipes qui n'ont ni accès ni méthode. Les groupes se composent par métier."],
                ['titre' => "Déléguer les calculs à l'assistant", 'texte' => "Un total de stock, une marge ou un montant de TVA se recalcule dans le tableur. L'assistant structure et rédige, il ne garantit pas un chiffre."],
                ['titre' => "Envoyer un texte sans relecture à un client ou à un bailleur", 'texte' => "Une phrase maladroite ou un chiffre inventé abîme la confiance plus vite qu'un retard. Une personne nommée relit et peut dire d'où vient chaque fait."],
                ['titre' => "Acheter plusieurs abonnements avant d'avoir mesuré", 'texte' => "En devises, chaque abonnement pèse sur la trésorerie. On apprend avec les versions gratuites, on mesure le temps gagné sur une tâche, puis on décide."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos équipes de Niamey à l'IA avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Avec " . $ans . " ans d'expérience dans le numérique et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), Richard déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique, à l'IA, à l'automatisation et aux ERP. Il a conçu <a href='https://wapy.pro'>Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href='https://audyxa.com'>Audyxa</a>. Il n'est certifié par aucun éditeur d'IA et ne se présente comme partenaire d'aucun.",
                "Richard a déjà travaillé avec des entreprises au Niger. Pour Niamey, il forme à distance, en français, à la même heure légale que la ville, avec des séances pensées pour une journée où le courant ou le réseau peuvent faiblir. Sa façon de former tient en quelques engagements : un cadrage qui peut conclure qu'un atelier d'une demi-journée suffit, des exercices bâtis sur vos documents, une évaluation sur une tâche réelle, des supports qui restent à l'entreprise et aucun gain chiffré promis à l'avance.",
                "Parmi ses réalisations figurent la web TV OBA TV et le site de GC Pro Consulting, deux projets menés en direct à Cotonou, ainsi que la boutique en ligne d'IK Fashion House, à Cotonou, réalisée en sous-traitance pour Digital Développement. Elles se consultent sur la page des <a href='/realisations/'>réalisations</a>. Quand le besoin va au-delà de l'usage quotidien, il peut relier l'IA à vos logiciels par une mission d'<a href='/services/integration-ia-entreprise'>intégration de l'IA en entreprise</a> ou par un <a href='/services/agents-ia-chatbot-whatsapp'>assistant WhatsApp</a>. Son parcours est détaillé sur la page <a href='/richard-salanon'>Richard SALANON</a>.",
            ],
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre équipe de Niamey à l'IA ?",
            'texte'  => "Indiquez le nombre de personnes, leurs postes, les tâches qui leur prennent le plus de temps, les outils déjà en place et le créneau qui vous convient : vous recevez une réponse sous 24 heures, puis un devis en FCFA.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation IA à Niamey'],
        ],
    ],

    'faq' => [
        ['q' => "Qui peut former mon équipe à l'IA à Niamey ?", 'r' => "Richard SALANON, consultant basé à Cotonou, anime en français et à distance, à la même heure qu'à Niamey, des ateliers et des formations sur ChatGPT, Claude et Gemini, avec les documents de l'entreprise. Le devis est établi en FCFA."],
        ['q' => "Y a-t-il un décalage horaire entre Niamey et Cotonou ?", 'r' => "Non. Les deux villes sont à UTC+1 sans heure d'été. Richard est joignable de 7 h à 20 h, ce qui permet de placer les séances le matin, avant la chaleur, ou en fin d'après-midi."],
        ['q' => "Que se passe-t-il si le courant coupe pendant la séance à Niamey ?", 'r' => "Les séances durent au plus deux heures et demie, les documents sont envoyés la veille, les ordinateurs sont chargés à l'avance et le travail est enregistré au fur et à mesure. Un téléphone en partage de connexion sert de secours."],
        ['q' => "Quelle est la meilleure heure pour une séance à Niamey ?", 'r' => "Le matin, de 8 h 30 à 12 h, avant la chaleur : la température maximale moyenne annuelle est de 36,2 °C et le record, en avril, de 45,6 °C. Une reprise à 15 h 30 ou 16 h convient aux équipes qui ne peuvent pas se libérer plus tôt."],
        ['q' => "La formation se fait-elle sur mes propres documents ?", 'r' => "Oui. Trois à cinq documents réels par participant, liés à sa tâche cible, sont préparés avant la session. Ceux qui contiennent des données personnelles sont anonymisés avec l'aide du formateur, et ceux qui ne doivent pas sortir restent dans l'entreprise."],
        ['q' => "Un déplacement à Niamey est-il possible ?", 'r' => "Il peut se convenir au préalable et figure alors au devis, car le lieu fait varier le prix. La formation étant surtout de la pratique sur écran, la plupart des équipes de la ville la suivent à distance."],
        ['q' => "Faut-il un abonnement payant pour commencer ?", 'r' => "Non. Les versions gratuites de ChatGPT, Claude et Gemini suffisent pour apprendre la méthode. Les abonnements, facturés en dollars ou en euros par les éditeurs et réglés avec une carte internationale, se décident après les premières semaines."],
        ['q' => "Quels métiers de Niamey peuvent en profiter ?", 'r' => "Les commerçants et vendeurs par messagerie, les banques et la microfinance, les chargés de projet, les entreprises de transport et de maintenance, les services administratifs des écoles et universités, et les cabinets comptables. Chaque groupe travaille sur ses tâches écrites les plus répétitives."],
        ['q' => "Quelle loi s'applique aux données confiées à un assistant d'IA à Niamey ?", 'r' => "Le cadre est national : la loi n° 2022-59, modifiée par la loi n° 2023-31, contrôlée par la HAPDP. La page sur la formation IA en entreprise au Niger le détaille, et la formation apprend à classer et anonymiser avant tout envoi."],
        ['q' => "Combien coûte la formation à Niamey ?", 'r' => "Le prix est fixé sur devis, en FCFA, après un échange de cadrage. Il dépend du nombre de participants, du nombre de demi-journées, de la préparation des documents et d'un éventuel déplacement. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Richard est-il certifié par OpenAI, Anthropic ou Google ?", 'r' => "Non. Il n'est certifié par aucun éditeur et ne se présente comme partenaire d'aucun. L'attestation remise est une attestation nominative de fin de formation, pas un diplôme ni une certification d'éditeur."],
    ],

    'sources' => [
        ['titre' => "Wikipédia, Niamey (population 2018, communes, climat, aéroport, établissements d'enseignement)", 'url' => 'https://fr.wikipedia.org/wiki/Niamey', 'date' => '2026-10-26'],
        ['titre' => "Wikipédia, Niamey Grand Market (histoire, incendies de 1982 et de 2009, nombre de boutiques)", 'url' => 'https://en.wikipedia.org/wiki/Niamey_Grand_Market', 'date' => '2026-10-26'],
        ['titre' => "Wikipédia, pont Kennedy de Niamey (ouvert en 1970)", 'url' => 'https://en.wikipedia.org/wiki/Kennedy_Bridge_(Niamey)', 'date' => '2026-10-26'],
        ['titre' => "Le360 Afrique, Niamey : un troisième pont qui fluidifie la circulation et fait pousser les commerces (12 août 2024)", 'url' => 'https://afrique.le360.ma/economie/niamey-un-troisieme-pont-qui-fluidifie-la-circulation-et-fait-pousser-les-commerces_NA4N6CMOCNG7NI33NO43YB65DE/', 'date' => '2026-10-26'],
        ['titre' => "Connaissance des énergies (AFP), délestages à Niamey en juin 2023", 'url' => 'https://www.connaissancedesenergies.org/afp/au-niger-la-capitale-niamey-subit-dimportants-delestages-delectricite-depuis-pres-dune-semaine-230615', 'date' => '2026-10-26'],
        ['titre' => "Connaissance des énergies (AFP), centrale photovoltaïque de 30 mégawatts mise en service en novembre 2023", 'url' => 'https://www.connaissancedesenergies.org/afp/le-niger-sous-sanctions-met-en-service-une-nouvelle-centrale-photovoltaique-pour-compenser-dimportantes-penuries-delectricite-231126', 'date' => '2026-10-26'],
        ['titre' => "Ecofin Agency, l'Algérie accélère un projet de centrale au Niger (3 mars 2026)", 'url' => 'https://www.ecofinagency.com/news-industry/0303-53424-algeria-accelerates-power-plant-project-in-niger-to-ease-power-shortages', 'date' => '2026-10-26'],
        ['titre' => "Ecofin Agency, l'ARCEP du Niger lance une plateforme de suivi des réseaux mobiles (28 janvier 2026)", 'url' => 'https://www.ecofinagency.com/news-digital/3001-52433-niger-launches-real-time-monitoring-platform-for-mobile-networks', 'date' => '2026-10-26'],
        ['titre' => "Wikipédia, université Abdou Moumouni (1974, effectif estimé, facultés)", 'url' => 'https://en.wikipedia.org/wiki/Abdou_Moumouni_University', 'date' => '2026-10-26'],
        ['titre' => "ITWeb Africa, Orange lance l'incubateur CIPMEN au Niger (26 mai 2014)", 'url' => 'https://itweb.africa/article/orange-launches-niger-startup-hub/lwrKxq3KGk2qmg1o', 'date' => '2026-10-26'],
        ['titre' => "Internet Governance Forum, IGF Niger 2026 (Niamey, 21 au 24 avril 2026)", 'url' => 'https://intgovforum.org/en/content/niger-igf-2026', 'date' => '2026-10-26'],
        ['titre' => "UNEP LEAP, décret n° 2010-52/PCSRD du 18 mars 2010 approuvant les statuts de la chambre de commerce, d'industrie et d'artisanat du Niger", 'url' => 'https://leap.unep.org/en/countries/ne/national-legislation/decret-ndeg-2010-52pcsrd-du-18-mars-2010-portant-approbation-des', 'date' => '2026-10-26'],
        ['titre' => "IANA, base des fuseaux horaires : liens de zones (Africa/Niamey)", 'url' => 'https://data.iana.org/time-zones/tzdb/backward', 'date' => '2026-10-26'],
        ['titre' => "ARCEP Niger, observatoire des communications électroniques, troisième trimestre 2025", 'url' => 'https://arcep.ne/wp-content/uploads/2026/01/Rapport-dObservatoire-des-CE_T3-FIN_09_25.pdf', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-generative-dirigeants', 'prompt-engineering', 'agents-ia-assistants', 'n8n', 'ia-en-entreprise'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise', 'agents-ia-chatbot-whatsapp'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
