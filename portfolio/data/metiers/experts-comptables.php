<?php
// ============================================================
// data/metiers/experts-comptables.php · Page « formations par métier »
// pour les experts-comptables et comptables (vague 1C, univers « Chiffre et
// finance », prioritaire, statut F : Richard a déjà formé ce public).
// Angle propre : le cabinet et le service comptable, de la collecte des
// pièces au conseil (saisie, révision, déclarations, SYSCOHADA). La page
// parle du métier et oriente vers les fiches ia-comptables-syscohada,
// odoo-comptabilite-syscohada, excel-google-sheets et ia-audit-controle,
// sans en reprendre le texte.
// Sources lues le 05/10/2026 : FAQ de la DGFiP sur la facturation
// électronique (échéances, 34 données, 150 plateformes, Belgique), page
// impots.gouv.fr de la réforme, IESBA (révisions liées aux technologies),
// code d'éthique OHADA (sections 100, 130, 140), règlement
// n° 01/2017/CM/OHADA, dépôt de Dolibarr 24.0.1 (plans SYSCOHADA),
// cybermalveillance.gouv.fr (FOVI, mise à jour du 15/09/2026). Faits repris
// des fiches déjà vérifiées : Acte uniforme comptable, ordonnance de 1945,
// code pénal, loi n° 2017-20, RGPD, article 4 du règlement sur l'IA, tarifs
// d'Odoo, de n8n et de Meta, dispositifs de financement.
// Richard n'est ni expert-comptable ni certifié par un éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour experts-comptables et comptables : moins de ressaisie, une révision mieux documentée et plus de temps pour conseiller, sans rien céder sur le secret ni sur le SYSCOHADA",
    'title'   => "Formation IA pour experts-comptables | Richard SALANON",
    'meta'    => "Former experts-comptables et comptables à l'IA, aux ERP et à l'automatisation : collecte, saisie, révision, déclarations, conseil et secret. Sur devis.",
    'en_bref' => "Cette page s'adresse aux cabinets d'expertise comptable et aux services comptables d'entreprise qui veulent former leurs équipes à l'intelligence artificielle, à l'automatisation et aux logiciels de gestion, de la collecte des pièces jusqu'au conseil. Elle explique ce que ces outils changent au métier, ce qu'ils ne doivent jamais faire au regard du secret professionnel et du code d'éthique OHADA, et quelles formations du catalogue choisir selon le poste. Le parcours type dure trois jours en six demi-journées, en intra, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Chiffre et finance',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : le cabinet ou le service vu comme une chaîne, où se perd le temps et où naît le risque",
            'duree'  => '3 h 30',
            'points' => [
                "Cartographie, avec l'équipe, du chemin d'une pièce : réception, classement, enregistrement, révision, déclaration, archivage, et temps réellement passé à chaque étape sur un mois ordinaire.",
                "Tri des tâches : celles qui relèvent de la ressaisie, de la recherche ou de la mise en forme peuvent être outillées ; celles qui relèvent du jugement restent au professionnel.",
                "Lecture commentée des sections 130 et 140 du code d'éthique OHADA : maintien des compétences, supervision des collaborateurs, confidentialité au-delà de la fin de la mission.",
                "Inventaire sans reproche des outils déjà utilisés, y compris les comptes gratuits ouverts par les collaborateurs sur leur téléphone.",
                "Choix de trois chantiers prioritaires pour le reste du parcours, chacun avec un indicateur simple mesuré avant la session.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : collecter les pièces sans courir après les clients",
            'duree'  => '3 h 30',
            'points' => [
                "Les canaux de réception réels : WhatsApp, courriel, dépôt au cabinet, export du logiciel du client, facture certifiée par l'administration fiscale.",
                "Un point d'entrée unique par client, un dossier partagé, une règle de nommage et la liste des pièces attendues chaque mois.",
                "Construire avec un outil d'automatisation une relance hebdomadaire des pièces manquantes, et décider de ce qui ne s'automatise pas : une relance d'honoraires ou un message à un client en difficulté.",
                "Le cas des pièces reçues sur un téléphone personnel : transfert, conservation, effacement, et règle écrite pour la suite.",
                "Exercice : tableau de suivi des pièces d'un mois pour trois dossiers anonymisés, avec les relances préparées.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : produire et réviser, ce que l'outil prépare et ce que le collaborateur signe",
            'duree'  => '3 h 30',
            'points' => [
                "Rappel des méthodes de préparation de la saisie et du rapprochement, sans refaire la formation dédiée : où elles s'insèrent dans le circuit du cabinet.",
                "Révision par cycle (achats, ventes, trésorerie, immobilisations, personnel, impôts) : faire produire par l'assistant une liste de questions à partir d'une balance anonymisée, puis la trier.",
                "Comparaison N et N-1, repérage des soldes anormaux et des comptes d'attente, avec un seuil fixé par le réviseur et non par l'outil.",
                "Trace dans le dossier de travail : consigne utilisée, fichier produit, contrôle effectué, nom de la personne qui a revu.",
                "Exercice en binôme : un collaborateur prépare un cycle avec l'outil, l'autre le révise comme il le ferait pour un dossier réel.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : déclarations et échéances, ne plus rien découvrir la veille",
            'duree'  => '3 h 30',
            'points' => [
                "Calendrier fiscal et social du portefeuille de clients dans un tableur partagé, avec des alertes à quinze jours et un responsable par échéance.",
                "Contrôles de cohérence avant dépôt : chiffre d'affaires comptabilisé, chiffre d'affaires déclaré, taxe collectée, factures certifiées émises sur la période.",
                "Préparer avec l'IA une note d'explication pour le client (ce qui est dû, pourquoi, pour quand), relue et signée par le responsable du dossier.",
                "Vérifier toute règle fiscale citée par un assistant dans le texte en vigueur du pays, avant qu'elle n'entre dans un dossier.",
                "Pour les cabinets d'Europe : lire une facture électronique structurée, suivre les flux de la plateforme agréée de chaque client et préparer avec lui l'échéance d'émission de septembre 2027.",
                "Exercice : calendrier d'un trimestre pour cinq dossiers de régimes différents, avec les contrôles associés.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : du chiffre au conseil, tableaux de bord et notes au dirigeant",
            'duree'  => '3 h 30',
            'points' => [
                "Les quelques indicateurs mensuels qu'un dirigeant de PME lit vraiment : trésorerie, marge, délais de paiement des clients, charges fixes.",
                "Tableau de bord construit à partir des exports du logiciel comptable, dans le tableur ou dans un outil de visualisation.",
                "Premier jet d'une note de gestion ou d'un prévisionnel simple : chaque hypothèse est écrite par le collaborateur, l'outil ne fait que mettre en forme.",
                "Préparer un rendez-vous client avec l'assistant : questions à poser, documents à demander, points d'alerte à aborder.",
                "Exercice : note mensuelle d'un dossier, dont chaque chiffre est retrouvé dans la balance.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi : règles du cabinet, sécurité et évaluation",
            'duree'  => '3 h 30',
            'points' => [
                "Rédaction de la charte d'usage de l'IA du cabinet ou du service : outils autorisés, données interdites, anonymisation, relecture humaine obligatoire.",
                "Fraude aux faux ordres de virement et faux changement de coordonnées bancaires : procédure de contre-appel et validation à deux.",
                "Information des clients sur les outils utilisés et registre des traitements de données personnelles.",
                "Évaluation sur un dossier fil rouge, de la pièce reçue à la note au dirigeant, avec les contrôles écrits.",
                "Plan d'action à trois mois : qui fait quoi, avec quel outil, et quel contrôle garantit le résultat.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Experts-comptables, collaborateurs de cabinet, comptables, chefs comptables et responsables financiers"],
        ['l' => 'Durée', 'v' => "Parcours type de 3 jours en 6 demi-journées, modulable selon le poste"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent concrètement au métier de comptable ?",
            'paragraphes' => [
                "Le métier tient en cinq gestes qui reviennent chaque mois : recevoir les pièces, les enregistrer, réviser, déclarer, conseiller. Longtemps, l'essentiel du temps est allé aux deux premiers. Les outils numériques déplacent ce temps vers l'aval : la pièce arrive de plus en plus sous une forme structurée, son enregistrement se prépare automatiquement, et la valeur du professionnel se lit dans le contrôle, l'explication et le conseil. Ce glissement n'a rien d'une promesse commerciale. Il découle de réformes déjà en vigueur, de la facture certifiée par l'administration fiscale en Afrique de l'Ouest à la facture électronique en Europe.",
                "En France, la foire aux questions de la Direction générale des Finances publiques, consultée le 5 octobre 2026, fixe le calendrier : depuis le 1er septembre 2026, toutes les entreprises, quelle que soit leur taille, doivent pouvoir recevoir des factures électroniques, et les grandes entreprises, les entreprises de taille intermédiaire et les administrations les émettent ; au plus tard le 1er septembre 2027, l'émission s'étend aux moyennes, petites et très petites entreprises, avec la transmission de données de facturation et de paiement à l'administration. Une facture électronique y est définie comme un format structuré portant 34 données obligatoires, et non comme un PDF envoyé par courriel.",
                "Le même document cite les experts-comptables parmi les tiers de confiance vers lesquels les entreprises peuvent se tourner, et rappelle que la Belgique applique sa propre réforme depuis le 1er janvier 2026, par le réseau Peppol. En zone OHADA, le mouvement passe par la facture certifiée : plateforme e-MECeF de la Direction générale des impôts au Bénin, facture normalisée électronique en Côte d'Ivoire. Partout, la donnée arrive plus tôt et plus propre, et la saisie diminue là où ces dispositifs sont adoptés. Ce qui ne diminue pas, c'est la responsabilité de celui qui valide.",
                "Le changement ne se vit pas de la même façon des deux côtés de la profession. En cabinet, l'enjeu est de traiter des dossiers hétérogènes plus nombreux sans dégrader la révision, et de vendre du conseil plutôt que de la saisie. Dans un service comptable d'entreprise, l'enjeu est d'arrêter les comptes plus vite, de fiabiliser les rapprochements et de donner à la direction des chiffres qu'elle comprend. Le code d'éthique des professionnels de la comptabilité et de l'audit de l'espace OHADA fait d'ailleurs la distinction : sa partie B vise l'exercice en cabinet, sa partie C l'exercice en entreprise. Le parcours suit la même séparation.",
                "Une précision s'impose dès maintenant : Richard SALANON n'est pas expert-comptable. Il forme à l'usage des outils, assistants d'IA, automatisation, tableurs, Odoo et Dolibarr. Les règles comptables, fiscales et déontologiques restent celles de la profession et de ses Ordres. La page les cite avec leurs sources pour tracer les limites de l'outil, jamais pour les interpréter à la place d'un professionnel inscrit.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches du cabinet et du service comptable changent, et lesquelles restent au professionnel ?",
            'legende' => "Répartition enseignée pendant le parcours. La dernière colonne renvoie à la formation du catalogue qui approfondit chaque tâche.",
            'entetes' => ['Tâche', "Ce que l'outil peut préparer", 'Ce qui reste au professionnel', 'Pour aller plus loin'],
            'lignes'  => [
                ['Collecte des pièces', "Accusé de réception, classement par client et par mois, relance automatique des pièces manquantes", "Décider qu'un dossier est complet, exiger l'original quand une copie ne suffit pas", "<a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a>"],
                ['Saisie et rapprochement', "Extraction des données des pièces, imputation proposée d'après le plan de l'entité, rapprochement de la banque et du Mobile Money", "Valider l'écriture, trancher l'imputation d'un tiers nouveau, justifier chaque suspens", "<a href=\"/formations/ia-comptables-syscohada\">IA pour comptables (SYSCOHADA)</a>"],
                ["Tenue dans l'ERP", "Écritures générées par les ventes, les achats et le stock, relevés importés, déclaration de taxe préremplie", "Paramétrer le plan et les taxes, corriger sans effacer, verrouiller les périodes déclarées", "<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ['Révision des comptes', "Questions par cycle, comparaison N et N-1, liste des soldes anormaux et des doublons", "Apprécier ce qui est significatif, conclure sur un cycle, documenter le dossier", "<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>"],
                ['Déclarations', "Calendrier des échéances, contrôles de cohérence, brouillon de note au client", "Choisir un régime ou une position fiscale, déposer, répondre à l'administration", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ['États financiers', "Table de passage vers les modèles du SYSCOHADA, mise en forme, premier jet des notes annexes", "Préparer l'arrêté avec les dirigeants, qui répondent des comptes", "<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ['Conseil', "Tableau de bord mensuel, scénarios chiffrés, trame de note de gestion", "Recommander, hiérarchiser, porter la relation avec le dirigeant", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
                ['Gestion du cabinet', "Lettres de mission types, suivi des temps passés, relances d'honoraires", "Accepter ou refuser une mission, fixer les honoraires, superviser les collaborateurs", "<a href=\"/formations/digitalisation-processus\">Digitalisation des processus métiers</a>"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ne doivent jamais faire l'IA et l'automatisation dans un cabinet ou un service comptable ?",
            'intro' => "Ces limites ne sont pas des précautions de formateur. Elles découlent de textes que la profession applique déjà, et le parcours les traduit en règles d'usage, outil par outil.",
            'items' => [
                ['titre' => "Faire sortir un dossier du cabinet sans autorisation", 'texte' => "La section 140 du code d'éthique OHADA interdit de divulguer hors du cabinet ou de l'organisation qui emploie le professionnel des informations confidentielles sans autorisation spécifique, sauf droit ou obligation de le faire, et précise que ce devoir se poursuit après la fin de la relation avec le client. Verser une balance dans un assistant grand public revient à la confier à un tiers. En France, l'article 21 de l'ordonnance n° 45-2138 du 19 septembre 1945 soumet les experts-comptables au secret professionnel, et l'article 226-13 du code pénal en sanctionne la violation."],
                ['titre' => "Tenir lieu de compétence", 'texte' => "La section 130 du même code oblige à maintenir ses connaissances au niveau requis et à prendre des mesures raisonnables pour que les personnes placées sous son autorité disposent de la formation et de la supervision appropriées. Laisser un stagiaire travailler avec un assistant qu'il ne sait pas contrôler pose donc d'abord une question de déontologie. Le Conseil des normes internationales de déontologie comptable (IESBA) a d'ailleurs renforcé ses lignes directrices sur la confidentialité et sur la compétence face aux technologies, par des révisions publiées le 11 avril 2023 et applicables depuis le 15 décembre 2024."],
                ['titre' => "Valider une écriture ou arrêter des comptes", 'texte' => "L'Acte uniforme relatif au droit comptable et à l'information financière rend les traitements irréversibles après validation (article 22) : la validation est un acte humain, posé par quelqu'un qui a vu la pièce. Les états financiers sont arrêtés dans les quatre mois qui suivent la clôture (article 23), sous la responsabilité des dirigeants de l'entité. Aucun outil ne signe, ne valide ni n'arrête quoi que ce soit dans le parcours."],
                ['titre' => "Transférer des données personnelles sans garantie", 'texte' => "Une comptabilité contient des salaires, des noms de clients particuliers, des comptes bancaires. Au Bénin, la loi n° 2017-20 du 20 avril 2018 portant code du numérique encadre le transfert de ces données vers un État non membre de la CEDEAO, et les grands assistants sont hébergés hors de cette zone. En Europe, l'article 28 du RGPD n'autorise le recours qu'à des sous-traitants présentant des garanties suffisantes, liés par contrat. La paie et les dossiers des particuliers ne passent donc par un service en ligne qu'anonymisés, ou pas du tout."],
                ['titre' => "Trancher une question fiscale", 'texte' => "Un assistant peut citer un taux abrogé ou une exonération d'un autre pays avec la même assurance qu'une règle exacte. Le choix d'un régime ou d'une position engage le client et le professionnel qui le conseille : la règle se lit dans le texte en vigueur du pays, et l'outil ne sert qu'à rédiger l'explication une fois la décision prise."],
                ['titre' => "Payer sur la foi d'un message", 'texte' => "La fiche de cybermalveillance.gouv.fr sur les faux ordres de virement, mise à jour le 15 septembre 2026, décrit trois scénarios : le faux dirigeant pressé, le faux fournisseur qui change de coordonnées bancaires, le faux salarié qui change de compte de paie. Elle recommande une procédure de vérification et de validation hiérarchique non dérogeable. Aucune automatisation ne modifie un fichier de virement ni un RIB sans contre-appel sur un numéro déjà connu."],
                ['titre' => "Répondre aux clients sans relecture", 'texte' => "Un assistant qui répond au nom du cabinet engage le cabinet. L'<a href=\"/histoires/air-canada-chatbot\">histoire du chatbot d'Air Canada</a> le montre : un tribunal a refusé de traiter le robot comme une entité distincte de l'entreprise. Une réponse fiscale ou comptable envoyée à un client passe par un professionnel avant de partir."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi le compte gratuit d'un collaborateur est-il souvent le premier risque d'un cabinet ?",
            'texte' => "Dans beaucoup de structures, l'IA est entrée avant toute décision : un collaborateur pressé ouvre un compte gratuit sur son téléphone et y dépose une balance pour gagner une heure. Personne ne sait alors ce que l'éditeur fait de ces données, où elles sont hébergées ni comment les effacer, et le cabinet ne peut pas répondre à un client qui le demande. Le parcours ne commence donc pas par un outil nouveau, mais par l'inventaire de ceux qui sont déjà utilisés, sans sanction. On choisit ensuite une offre professionnelle aux conditions écrites, ou un traitement sur un poste du cabinet, et l'on ferme le reste.",
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères datés un comptable doit-il connaître avant de s'outiller ?",
            'items' => [
                ['valeur' => '1er septembre 2026', 'libelle' => "En France, toutes les entreprises doivent pouvoir recevoir des factures électroniques ; les grandes entreprises, les ETI et les administrations les émettent (foire aux questions de la DGFiP, consultée le 5 octobre 2026).", 'source' => 'DGFiP, Tout savoir sur la facturation électronique', 'url' => 'https://www.impots.gouv.fr/sites/default/files/media/1_metier/2_professionnel/EV/2_gestion/290_facturation_electronique/faq_tout_savoir_facturation-electronique.pdf'],
                ['valeur' => '1er septembre 2027', 'libelle' => "Au plus tard à cette date, l'obligation d'émettre des factures électroniques s'étend aux moyennes, petites et très petites entreprises, avec la transmission de données à l'administration.", 'source' => 'DGFiP, Tout savoir sur la facturation électronique', 'url' => 'https://www.impots.gouv.fr/sites/default/files/media/1_metier/2_professionnel/EV/2_gestion/290_facturation_electronique/faq_tout_savoir_facturation-electronique.pdf'],
                ['valeur' => '150', 'libelle' => "Plateformes agréées par l'État français au 1er août 2026, dont plus d'une dizaine proposaient des offres gratuites ou sans surcoût pour les plus petites structures, selon la même foire aux questions.", 'source' => 'DGFiP, Tout savoir sur la facturation électronique', 'url' => 'https://www.impots.gouv.fr/sites/default/files/media/1_metier/2_professionnel/EV/2_gestion/290_facturation_electronique/faq_tout_savoir_facturation-electronique.pdf'],
                ['valeur' => '15 décembre 2024', 'libelle' => "Entrée en application des révisions du code de déontologie de l'IESBA liées aux technologies, publiées le 11 avril 2023, sur la confidentialité, la compétence et la diligence.", 'source' => 'IESBA, Technology-related revisions to the Code', 'url' => 'https://www.ethicsboard.org/publications/final-pronouncement-technology-related-revisions-code'],
                ['valeur' => '1er janvier 2018', 'libelle' => "Entrée en vigueur du règlement n° 01/2017/CM/OHADA, adopté le 8 juin 2017 à Conakry, qui harmonise les normes, le code d'éthique et le système d'assurance qualité des professionnels de la comptabilité et de l'audit.", 'source' => 'OHADA', 'url' => 'https://www.ohada.org/mise-en-ligne-du-reglement-portant-harmonisation-des-pratiques-des-professionnels-de-la-comptabilite-et-de-l-audit-dans-les-etats-membres-de-l-ohada/'],
                ['valeur' => '3 août 2026', 'libelle' => "Début du contrôle et des sanctions de l'obligation de maîtrise de l'IA de l'article 4 du règlement européen, applicable depuis le 2 février 2025 aux utilisateurs professionnels (questions et réponses de la Commission, mise à jour du 27 juillet 2026).", 'source' => 'Commission européenne', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble l'usage de ces outils dans un cabinet ou un service comptable, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Cabinet de quatre collaborateurs, à Cotonou", 'probleme' => "Les clients envoient leurs pièces sur les téléphones personnels des collaborateurs. Rien n'est classé, la moitié du mois passe à réclamer ce qui manque, et un collaborateur en congé emporte une partie des dossiers avec lui.", 'solution' => "Un numéro professionnel unique pour la réception, un dossier partagé par client, la liste des pièces attendues et une relance automatique chaque lundi. Les téléphones personnels ne reçoivent plus de pièces, et la règle figure dans la lettre de mission."],
                ['secteur' => "Service comptable d'un distributeur, à Abidjan", 'probleme' => "Les ventes sont facturées en facture normalisée électronique, la comptabilité est tenue dans un autre logiciel, et les deux séries divergent au moment de la déclaration.", 'solution' => "Contrôle hebdomadaire de concordance dans le tableur, vérification de la numérotation continue, et une même procédure enseignée au comptable et au responsable de la facturation, pour que l'écart soit expliqué le jour où il apparaît."],
                ['secteur' => "Cabinet qui suit une trentaine de PME, à Dakar", 'probleme' => "Les échéances de chaque client sont suivies de mémoire par l'associé, et les retards se découvrent à la réception d'une pénalité.", 'solution' => "Calendrier partagé des échéances par client et par régime, alertes à quinze jours, contrôles de cohérence avant chaque dépôt, et note au client préparée avec l'IA puis relue par l'associé avant envoi."],
                ['secteur' => "Comptable unique d'une PME de services, à Douala", 'probleme' => "Les factures sortent de Dolibarr, mais la comptabilité est refaite dans un tableur parce que le module comptable n'a jamais été ouvert ni le plan relu.", 'solution' => "Lecture du plan SYSCOHADA livré par Dolibarr pour le Cameroun, relecture des comptes réellement utilisés avec l'expert-comptable externe, puis transfert des écritures au lieu de leur ressaisie."],
                ['secteur' => "Cabinet d'expertise comptable, à Lyon", 'probleme' => "Depuis le 1er septembre 2026, les clients reçoivent des factures électroniques par des plateformes différentes et posent tous la même question : laquelle choisir pour émettre en 2027 ?", 'solution' => "Formation des collaborateurs à la lecture des factures structurées et des flux de plateforme, grille de questions pour accompagner chaque client, fiches d'information rédigées avec l'IA puis validées par l'expert-comptable."],
                ['secteur' => "Cabinet à Bruxelles avec des clients en Afrique de l'Ouest", 'probleme' => "Les mêmes collaborateurs passent du plan comptable belge au SYSCOHADA, et la facturation par Peppol cohabite avec des pièces papier envoyées de Lomé.", 'solution' => "Procédures séparées par référentiel, consignes d'IA qui précisent toujours le plan de comptes du dossier, contrôle de chaque imputation proposée, et anonymisation avant tout envoi à un service en ligne."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et systèmes un comptable doit-il savoir manier aujourd'hui ?",
            'legende' => "Outils rencontrés dans les cabinets et services comptables de la zone OHADA et d'Europe. Versions et prix relevés le 5 octobre 2026 sur les pages des éditeurs ; ils sont payés à l'éditeur, jamais au formateur.",
            'entetes' => ['Outil ou système', 'Usage dans le métier', 'Point d\'attention', 'Formation liée'],
            'lignes'  => [
                ["SYSCOHADA révisé (Acte uniforme du 26 janvier 2017)", "Plan de comptes, états financiers, choix entre système normal et système minimal de trésorerie", "Les assistants d'IA le connaissent moins bien que le plan comptable français : le plan de l'entité accompagne chaque demande", "<a href=\"/formations/ia-comptables-syscohada\">IA pour comptables (SYSCOHADA)</a>"],
                ['Odoo', "ERP dont les ventes, les achats et le stock produisent les écritures ; localisation par pays de la zone OHADA", "Version 20.0 sortie en septembre 2026 ; formule Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 €", "<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ['Dolibarr', "Logiciel libre de gestion, du devis au règlement, avec un module de comptabilité en partie double", "Version 24.0.1 publiée le 7 septembre 2026 ; quinze plans SYSCOHADA, un par pays, tous livrés sous le libellé « Plan comptable Ouest-Africain », à relire avec le comptable", "<a href=\"/formations/dolibarr-utilisateurs\">Dolibarr pour vos équipes</a>"],
                ['Logiciel comptable du cabinet', "Tenue des dossiers, imports et exports", "Le format d'import décide de ce qui peut être automatisé : on le relève avant tout projet", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ['Tableur et Power Query', "Rapprochements, tables de correspondance, contrôles, calendrier des échéances", "Les calculs se font dans le tableur, jamais dans la réponse rédigée d'un assistant", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Assistants d'IA en offre professionnelle", "Lecture de pièces, questions de révision, notes et courriers aux clients", "Conditions d'usage écrites, pas de compte gratuit pour un dossier client ; le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide au choix", "<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>"],
                ['WhatsApp', "Réception des pièces et échanges courts avec les clients", "Un numéro du cabinet, pas celui d'un collaborateur ; l'API, utile pour automatiser la collecte, est payante : Meta facture les messages à l'unité depuis le 1er juillet 2025, et les messages de service au-delà de 1 000 par mois et par numéro depuis le 1er octobre 2026", "<a href=\"/formations/whatsapp-odoo-dolibarr-crm\">WhatsApp relié à Odoo, Dolibarr et au CRM</a>"],
                ['n8n ou Make', "Relances de pièces, classement automatique, alertes d'échéances", "n8n Cloud Starter à 20 € par mois en paiement annuel pour 2 500 exécutions ; auto-hébergement possible pour garder les données au cabinet", "<a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a>"],
                ["Factures certifiées et plateformes de facturation", "e-MECeF au Bénin, facture normalisée électronique en Côte d'Ivoire, plateformes agréées en France, Peppol en Belgique", "Le comptable apprend à exploiter ce qui en sort ; la connexion technique au logiciel relève d'un projet d'intégration", "<a href=\"/formations/integrations-api-no-code\">Intégrations API en no-code et low-code</a>"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type d'un parcours pour comptables, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours s'adapte-t-il au poste de chacun ?",
            'legende' => "Le parcours type se découpe selon les postes. Chacun suit les demi-journées utiles à son travail, puis la formation du catalogue qui approfondit son outil principal.",
            'entetes' => ['Poste', 'Ce qu\'il doit savoir faire à la fin', 'Demi-journées du parcours type', 'Formation complémentaire'],
            'lignes'  => [
                ["Expert-comptable associé ou chef de mission", "Fixer les règles d'usage, relire un travail préparé par l'outil, répondre d'un dossier devant le client", "Jour 1 matin, jour 2 matin, jour 3 après-midi", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>"],
                ["Collaborateur de cabinet", "Collecter, préparer, réviser un cycle, tenir le calendrier de ses dossiers", "Tout le parcours", "<a href=\"/formations/ia-comptables-syscohada\">IA pour comptables (SYSCOHADA)</a>"],
                ["Chef comptable d'entreprise", "Organiser la clôture mensuelle, contrôler les rapprochements, produire les indicateurs de la direction", "Jour 1 matin, jour 2, jour 3 matin", "<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ["Comptable unique de PME", "Tenir le mois seul, sans ressaisie, avec des contrôles simples et un archivage propre", "Jour 1 après-midi, jour 2", "<a href=\"/formations/dolibarr-utilisateurs\">Dolibarr pour vos équipes</a> ou <a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>"],
                ["Aide-comptable ou assistant de saisie", "Classer et préparer les pièces, repérer une pièce douteuse, signaler plutôt que corriger seul", "Jour 1 après-midi, jour 2 matin", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Responsable administratif et financier", "Décider des outils, lire les tableaux de bord, protéger les paiements", "Jour 1 matin, jour 3", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour un cabinet, un service comptable ou un comptable seul ?",
            'legende' => "Le calendrier évite les périodes d'arrêté des comptes et de déclarations. Pour un exercice clos le 31 décembre, l'article 23 de l'Acte uniforme laisse quatre mois pour arrêter les états financiers : les mois de janvier à avril sont les moins propices.",
            'entetes' => ['Format', 'Organisation', 'Données utilisées', 'Quand le retenir'],
            'lignes'  => [
                ['Intra cabinet', "Six demi-journées dans vos locaux, associés compris pour les séances de règles et de révision", "Dossiers du cabinet anonymisés, logiciel du cabinet", "Un cabinet qui veut une méthode commune à tous ses collaborateurs"],
                ['Intra service comptable', "Six demi-journées réparties sur trois semaines, en début de mois", "Pièces et exports de l'entreprise, anonymisés si besoin", "Une équipe comptable d'entreprise qui veut arrêter plus vite et mieux informer la direction"],
                ['Inter', "Deux à trois jours réunissant des comptables de plusieurs structures", "Jeu de données fictif reproduisant un dossier réel, aucun dossier client partagé", "Une ou deux personnes par structure, ou un cabinet qui forme un nouveau collaborateur"],
                ['À distance', "Séances de deux heures en visioconférence, avec partage d'écran", "Fichiers préparés à l'avance et téléchargés avant chaque séance", "Équipes réparties entre plusieurs villes ou pays, filiale suivie depuis l'Europe"],
                ['Hybride', "Première journée en salle, suite à distance au rythme des clôtures", "Dossiers réels du mois en cours", "Quand le diagnostic demande d'être sur place mais que le calendrier est serré"],
                ['Accompagnement individuel', "Demi-journées à la carte, sur place ou à distance", "Les dossiers du professionnel, anonymisés", "Comptable indépendant ou expert-comptable qui exerce seul"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe comptable ?",
            'intro'      => "Aucun montant n'est publié : le prix est fixé sur devis, après un échange qui précise les postes, les outils et les dossiers. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements aux logiciels et aux assistants d'IA restent payés directement aux éditeurs.",
            'items'      => [
                ['offre' => 'Cadrage', 'prix' => 'Gratuit', 'inclus' => ["Échange avec l'associé ou le chef comptable", "Relevé des outils et des formats d'import", "Proposition de parcours et devis écrit"]],
                ['offre' => 'Parcours type intra', 'prix' => 'Sur devis', 'inclus' => ["Six demi-journées sur vos dossiers anonymisés", "Charte d'usage de l'IA et modes opératoires", "Évaluation sur un dossier fil rouge et attestation"]],
                ['offre' => 'Module ou formation du catalogue', 'prix' => 'Sur devis', 'inclus' => ["Une formation ciblée sur un outil ou une tâche", "Exercices au format de votre logiciel", "Supports et corrigés modifiables"]],
                ['offre' => 'Suivi après la session', 'prix' => 'Sur devis', 'inclus' => ["Séance à la première clôture ou à trois mois", "Révision de la charte et des consignes", "Bilan écrit des indicateurs suivis"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, et la présence des associés.",
                "Le nombre de logiciels comptables et de formats d'import à couvrir.",
                "Le temps nécessaire pour anonymiser les dossiers d'exercice.",
                "L'installation éventuelle d'un outil d'automatisation ou d'un modèle d'IA sur un poste du cabinet.",
                "Le lieu des séances, à Cotonou, dans une autre ville, dans un autre pays ou à distance.",
                "Le suivi retenu après la session.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il financer la formation des comptables ?",
            'paragraphes' => [
                "Pour la profession, se former n'est pas un choix de confort. La section 130 du code d'éthique OHADA présente la formation professionnelle continue comme le moyen de développer et d'entretenir les capacités qui permettent d'exercer avec compétence. Si votre Ordre national tient un décompte des heures de formation continue, c'est à lui de dire si un parcours sur les outils numériques peut y entrer : le programme, les feuilles de présence et l'attestation remis en fin de session servent à le lui demander. Aucune validation par un Ordre n'est revendiquée ici.",
                "Le financement, lui, dépend du pays, du fonds et de la situation de la structure, et il n'est jamais promis. En Côte d'Ivoire, le plan de formation du FDFP est ouvert à l'entreprise qui justifie du paiement régulier de ses deux taxes de formation, et le paiement intervient après contrôle du fonds. Au Bénin, l'article 5 des statuts du FODEFCA, approuvés par le décret n° 2022-286, en fait le principal guichet de financement de la formation continue du secteur privé, avec un apport du bénéficiaire compris entre 10 et 30 % du coût selon les cas. Au Sénégal, le 3FPT dispose d'un guichet pour le personnel des entreprises.",
                "En France, France Compétences rappelle que depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés. Richard SALANON n'affiche pas cette certification : un cabinet français finance donc la session sur son budget propre, sans passer par son opérateur de compétences. Dans tous les cas, la question se pose au fonds par écrit, programme et devis joints, avant la signature, et la réponse est attendue avant de fixer les dates.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on quand un cabinet ou un service comptable s'outille ?",
            'intro' => "Elles ne tiennent presque jamais à l'outil choisi. Elles tiennent à l'ordre dans lequel les choses ont été faites, et à ceux qu'on a oublié de former.",
            'items' => [
                ['titre' => "Acheter l'outil avant de dessiner le circuit", 'texte' => "Un logiciel de collecte ou un assistant payé avant que le chemin des pièces ne soit écrit reproduit le désordre existant, plus vite. Le circuit se dessine d'abord sur une feuille, avec l'équipe ; l'outil vient ensuite combler un trou précis."],
                ['titre' => "Former les collaborateurs et pas les associés", 'texte' => "Ceux qui révisent et signent doivent savoir ce qu'un assistant peut inventer, faute de quoi ils relisent un travail préparé par l'outil comme s'il venait d'un collaborateur expérimenté. Les associés suivent au moins la demi-journée de règles et celle de révision."],
                ['titre' => "Tout automatiser en même temps", 'texte' => "Trois chantiers à la fois suffisent. Une relance de pièces qui fonctionne pendant deux mois convainc davantage l'équipe qu'un projet complet qui s'arrête à la première clôture difficile."],
                ['titre' => "Oublier les clients", 'texte' => "La collecte dépend d'eux. Un guide d'une page, avec le numéro de réception, la liste des pièces du mois et la date limite, change plus de choses qu'un nouvel outil. Il se remet avec la lettre de mission."],
                ['titre' => "Confondre numérisation et conservation", 'texte' => "Une photo dans une conversation n'est pas une pièce archivée. L'article 24 de l'Acte uniforme impose de conserver livres et pièces justificatives pendant dix ans, et l'article L123-22 du Code de commerce fixe la même durée en France : l'archive se range dans un espace du cabinet ou de l'entreprise, sauvegardé et daté."],
                ['titre' => "Laisser la méthode dans une seule tête", 'texte' => "Le collaborateur qui a monté l'automatisation part, et personne ne sait la réparer. Chaque flux, chaque consigne d'IA et chaque contrôle est décrit dans un mode opératoire, et deux personnes au moins savent s'en servir."],
                ['titre' => "Négliger la fraude au virement", 'texte' => "Les services comptables sont les premiers visés par les faux changements de coordonnées bancaires, et une voix ou un courriel imités sont plus faciles à produire qu'avant. La règle du contre-appel s'applique à tous, associés compris, et se rappelle à chaque arrivée."],
                ['titre' => "Ne rien mesurer", 'texte' => "Sans le temps noté avant la session sur trois tâches, impossible de savoir trois mois plus tard si l'outil a servi. La mesure est simple : une colonne dans le tableau de suivi des dossiers, remplie à chaque clôture."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue se rattachent au métier de comptable ?",
            'legende' => "Formations du catalogue utiles aux experts-comptables et aux comptables, avec leur durée. Chacune a sa page détaillée, son programme et ses formats.",
            'entetes' => ['Formation', 'Pour qui dans la profession', 'Ce qu\'elle apporte au métier', 'Durée'],
            'lignes'  => [
                ["<a href=\"/formations/ia-comptables-syscohada\">IA pour comptables (SYSCOHADA)</a>", "Comptables, aides-comptables, collaborateurs de cabinet", "Préparer la saisie, rapprocher, analyser une balance avec l'IA, sous contrôle", "2 jours en 4 demi-journées"],
                ["<a href=\"/formations/odoo-comptabilite-syscohada\">Odoo comptabilité SYSCOHADA</a>", "Comptables et chefs comptables d'entreprises sous Odoo, cabinets qui tiennent ces dossiers", "Plan, journaux, taxes, verrouillage et états OHADA dans Odoo", "3 jours, plus une demi-journée à la première clôture"],
                ["<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>", "Toute l'équipe comptable", "Classeurs fiables, formules, tableaux croisés et contrôles", "2 jours, plus un retour à un mois"],
                ["<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>", "Réviseurs, commissaires aux comptes, contrôleurs internes", "Tests sur des populations entières, dossier de travail traçable", "3 jours en 6 demi-journées"],
                ["<a href=\"/formations/dolibarr-utilisateurs\">Dolibarr pour vos équipes</a>", "Comptable unique et gérant d'une PME sous Dolibarr", "Cycle complet du devis au règlement, exports pour le cabinet", "2 jours en 4 demi-journées"],
                ["<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>", "Cabinets qui développent le conseil, responsables financiers", "Indicateurs mensuels pour les dirigeants clients", "3 jours en 6 demi-journées"],
                ["<a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a>", "Collaborateur référent pour l'automatisation", "Relances de pièces, classement, alertes d'échéances", "2 jours en 4 demi-journées"],
                ["<a href=\"/formations/cybersecurite-employes\">Cybersécurité pour les employés</a>", "Tout le cabinet ou le service", "Hameçonnage, mots de passe, fraude au virement", "1 jour, plus une demi-journée pour les postes sensibles"],
                ["<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>", "Associés, direction administrative et financière", "Charte, inventaire des usages, responsabilités", "2 jours en 4 demi-journées"],
                ["<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>", "Tout collaborateur qui utilise un assistant", "Données personnelles, secret, biais, règlement européen sur l'IA", "1 jour de socle, ou 2 jours"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former vos comptables avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des experts-comptables et des comptables. Il déploie Odoo et Dolibarr pour des entreprises de la zone OHADA, y compris leur paramétrage au SYSCOHADA, et il relie ces logiciels à des automatisations et à des outils d'IA : il connaît donc les deux bouts de la chaîne, les exports que produisent les logiciels de gestion et ce que les outils savent en faire. Fort de " . $ans . " ans d'expérience, formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes et a travaillé dans " . count((array) fait('pays_travailles')) . " pays, dont dix membres de l'OHADA, ainsi qu'en France, en Belgique, en Suisse et au Canada. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle, et co-fondé <a href=\"https://audyxa.com\">Audyxa</a>.",
                "Il n'est ni expert-comptable, ni commissaire aux comptes, ni certifié par un éditeur de logiciel ou d'IA. Il enseigne l'outil, la méthode et les garde-fous ; l'imputation, la fiscalité, la révision et l'arrêté des comptes restent l'affaire des professionnels formés et de leur Ordre. Ses séances se font en petits groupes, sur les dossiers anonymisés et les logiciels du cabinet ou de l'entreprise, avec des supports modifiables remis à la fin, et aucun gain de temps n'est promis à l'avance.",
                "Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a> et les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. Le catalogue complet figure sur la page des <a href=\"/formations/\">formations</a>, et les formations voisines sur les pages <a href=\"/formations/domaine/intelligence-artificielle\">intelligence artificielle</a> et <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>. Quand le besoin dépasse la formation, par exemple relier la collecte des pièces au logiciel comptable, il relève de l'<a href=\"/services/integration-odoo\">intégration Odoo</a>, de l'<a href=\"/services/integration-dolibarr\">intégration Dolibarr</a> ou de l'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former votre cabinet ou votre service comptable ?",
            'texte' => "Dessinez le circuit des pièces avant d'acheter un outil, formez ceux qui révisent autant que ceux qui saisissent, gardez chaque validation, chaque position fiscale et chaque paiement entre des mains humaines, n'envoyez aucun dossier identifiable vers un compte gratuit, et écrivez les règles : c'est la charte du cabinet, et non l'outil, qui protège le secret.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre cabinet ou votre service comptable aux outils numériques et à l'IA ?",
            'texte'  => "Indiquez le nombre de personnes et leurs postes, le logiciel comptable utilisé, le pays et les tâches qui pèsent le plus à chaque clôture : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un parcours pour comptables'],
        ],
    ],

    'faq' => [
        ['q' => "L'IA va-t-elle remplacer les comptables ?", 'r' => "Elle remplace une partie de la ressaisie, pas le métier. La validation des écritures, la révision, les choix fiscaux, l'arrêté des comptes et le conseil restent des actes humains, encadrés par l'Acte uniforme comptable et par le code d'éthique de la profession. Ce qui change, c'est la part du temps consacrée au contrôle et à l'explication, qui augmente."],
        ['q' => "Par quelle formation un cabinet doit-il commencer ?", 'r' => "Par la demi-journée de cartographie et de règles, qui ouvre le parcours type : elle fixe ce que le cabinet autorise et ce qu'il interdit. Ensuite, la formation IA pour comptables (SYSCOHADA) si le temps part dans la saisie et les rapprochements, ou la formation Odoo comptabilité SYSCOHADA si les dossiers sont tenus dans Odoo."],
        ['q' => "Faut-il former les associés, ou seulement les collaborateurs ?", 'r' => "Les deux. Les collaborateurs utilisent les outils, les associés relisent et signent : s'ils ne savent pas comment un assistant se trompe, ils ne peuvent pas superviser, alors que la section 130 du code d'éthique OHADA leur demande de s'assurer que leurs équipes sont formées et encadrées."],
        ['q' => "Nos clients envoient leurs pièces par WhatsApp : faut-il l'interdire ?", 'r' => "Non, il faut l'organiser. Un numéro professionnel du cabinet, et non celui d'un collaborateur, une liste des pièces attendues, un transfert régulier vers le dossier du client et l'effacement sur le téléphone une fois la pièce classée. L'archive légale, elle, reste dans un espace du cabinet."],
        ['q' => "Peut-on utiliser l'IA sur les dossiers clients sans manquer au secret professionnel ?", 'r' => "Oui, à trois conditions enseignées dans le parcours : anonymiser ce qui identifie le client et les personnes, choisir une offre professionnelle dont les conditions excluent l'usage des données pour entraîner les modèles, ou traiter les dossiers les plus sensibles sur un poste du cabinet. Un compte gratuit personnel n'est jamais une option."],
        ['q' => "Notre cabinet n'utilise ni Odoo ni Dolibarr : le parcours reste-t-il utile ?", 'r' => "Oui. Le parcours type part du logiciel comptable en place, quel qu'il soit, dès lors qu'il importe et exporte des fichiers. Odoo et Dolibarr n'interviennent que si vos clients les utilisent, ce qui est de plus en plus fréquent dans les PME de la zone OHADA."],
        ['q' => "La réforme française de la facture électronique change-t-elle quelque chose pour un cabinet ?", 'r' => "Beaucoup. Depuis le 1er septembre 2026, tous les clients doivent pouvoir recevoir des factures électroniques, et ils devront tous les émettre au plus tard le 1er septembre 2027, selon la DGFiP. Les collaborateurs doivent lire des factures structurées et conseiller sur le choix d'une plateforme agréée : le parcours y consacre une partie de la deuxième journée pour les cabinets français."],
        ['q' => "Richard SALANON est-il expert-comptable ?", 'r' => "Non. Il est consultant en digitalisation et développeur, et il forme à l'usage des outils : IA, automatisation, tableurs, Odoo et Dolibarr. Les questions comptables, fiscales et déontologiques sont tranchées par les professionnels formés et, au besoin, par leur Ordre."],
        ['q' => "Les heures de formation comptent-elles pour la formation continue exigée par l'Ordre ?", 'r' => "C'est à votre Ordre de le dire, selon ses propres règles. Le programme détaillé, les feuilles de présence et l'attestation nominative remis en fin de session permettent de lui poser la question. Aucune validation par un Ordre n'est annoncée."],
        ['q' => "Peut-on former un comptable indépendant seul ?", 'r' => "Oui, en accompagnement individuel : quelques demi-journées à la carte, sur place ou à distance, sur ses propres dossiers anonymisés. C'est souvent le format le plus efficace pour un expert-comptable qui exerce seul et n'a pas de collègue avec qui pratiquer le contrôle croisé."],
        ['q' => "Le parcours convient-il au service comptable d'une ONG ?", 'r' => "Oui pour les méthodes de collecte, de contrôle et de tableaux de bord, avec une réserve : l'article 5 de l'Acte uniforme comptable exclut les entités à but non lucratif du SYSCOHADA, qui relèvent de leur propre système comptable. Les exercices sont alors construits sur ce référentiel."],
        ['q' => "Combien coûte le parcours ?", 'r' => "Il est chiffré sur devis, selon le nombre de personnes, de logiciels et de dossiers, le lieu et le suivi retenu. Le premier échange, le cadrage et le devis sont gratuits ; le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "DGFiP, Tout savoir sur la facturation électronique (échéances, 34 données obligatoires, plateformes agréées, comparaison avec la Belgique)", 'url' => 'https://www.impots.gouv.fr/sites/default/files/media/1_metier/2_professionnel/EV/2_gestion/290_facturation_electronique/faq_tout_savoir_facturation-electronique.pdf', 'date' => '2026-10-05'],
        ['titre' => "impots.gouv.fr, Je passe à la facturation électronique", 'url' => 'https://www.impots.gouv.fr/professionnel/je-passe-la-facturation-electronique', 'date' => '2026-10-05'],
        ['titre' => "IESBA, Final pronouncement : technology-related revisions to the Code (11 avril 2023, applicables au 15 décembre 2024)", 'url' => 'https://www.ethicsboard.org/publications/final-pronouncement-technology-related-revisions-code', 'date' => '2026-10-05'],
        ['titre' => "Code d'éthique des professionnels de la comptabilité et de l'audit, espace OHADA (sections 100, 130 et 140), publié par l'ONECCA du Burkina Faso", 'url' => 'https://www.oneccabf.org/wp-content/uploads/OHADA_Code-dethique-des-professionnels-de-la-comptabilite-et-de-laudit.pdf', 'date' => '2026-10-05'],
        ['titre' => "OHADA, mise en ligne du règlement n° 01/2017/CM/OHADA portant harmonisation des pratiques des professionnels de la comptabilité et de l'audit", 'url' => 'https://www.ohada.org/mise-en-ligne-du-reglement-portant-harmonisation-des-pratiques-des-professionnels-de-la-comptabilite-et-de-l-audit-dans-les-etats-membres-de-l-ohada/', 'date' => '2026-10-05'],
        ['titre' => "OHADA, bibliothèque numérique : Acte uniforme relatif au droit comptable et à l'information financière (articles 5, 22, 23 et 24)", 'url' => 'https://biblio.ohada.org/doc_num.php?explnum_id=2061', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, ordonnance n° 45-2138 du 19 septembre 1945, article 21 (secret professionnel des experts-comptables)", 'url' => 'https://www.legifrance.gouv.fr/loda/article_lc/LEGIARTI000033678954', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, code pénal, article 226-13", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006417945', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, Code de commerce, article L123-22 (conservation des documents comptables)", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000006219327', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "CNIL, règlement général sur la protection des données, chapitre IV (article 28, sous-traitant)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "Cybermalveillance.gouv.fr, escroquerie aux faux ordres de virement (FOVI), mise à jour du 15 septembre 2026", 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/fiches-reflexes/escroquerie-faux-ordres-virement-fovi', 'date' => '2026-10-05'],
        ['titre' => "Dolibarr, dépôt officiel : plans comptables livrés avec la version 24.0.1 (llx_accounting_system.sql)", 'url' => 'https://github.com/Dolibarr/dolibarr/blob/24.0.1/htdocs/install/mysql/data/llx_accounting_system.sql', 'date' => '2026-10-05'],
        ['titre' => "Dolibarr, publication de la version 24.0.1 (7 septembre 2026)", 'url' => 'https://github.com/Dolibarr/dolibarr/releases/tag/24.0.1', 'date' => '2026-10-05'],
        ['titre' => "Odoo, page Tarification", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "n8n, tarifs de n8n Cloud", 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts du Bénin, plateforme e-MECeF", 'url' => 'https://e-mecef.impots.bj/', 'date' => '2026-10-05'],
        ['titre' => "Direction générale des impôts de Côte d'Ivoire, procédure d'interfaçage des entreprises par API à la FNE (mai 2025)", 'url' => 'https://www.dgi.gouv.ci/assets/documents/FNE-procedureapi.pdf', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA (article 5)", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-comptables-syscohada', 'odoo-comptabilite-syscohada', 'excel-google-sheets', 'ia-audit-controle', 'dolibarr-utilisateurs', 'cybersecurite-employes'],
        'services'    => ['formation-en-entreprise', 'integration-odoo', 'integration-ia-entreprise'],
        'comparatifs' => ['odoo-vs-dolibarr', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
