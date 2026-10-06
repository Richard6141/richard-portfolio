<?php
// ============================================================
// data/metiers/banques-microfinance.php · Page « formations par métier »
// pour les banques et la microfinance (vague 1C, univers « Chiffre et
// finance », prioritaire, statut F : Richard a déjà formé ce public).
// Angle propre : l'agence bancaire et l'institution de microfinance (IMF)
// en zone UEMOA, en CEMAC et en Europe : conformité et lutte contre le
// blanchiment, octroi et suivi du crédit, relation client et mobile money,
// secret bancaire, cybersécurité, données des clients. La page oriente vers
// ia-ethique-conformite, cybersecurite-employes, chatbot-whatsapp et
// gouvernance-ia sans en reprendre le texte ; aucun conseil réglementaire.
// Sources lues le 05/10/2026 : BCEAO (loi uniforme LBC/FT/FP de mars 2023,
// articles 12, 13, 15, 23, 60, 63 et 113 ; instructions n° 001-03-2025 et
// n° 003-03-2025 du 18 mars 2025 ; instruction n° 002-01-2015 sur le
// consentement aux BIC ; loi SFD, articles 28 et 58 ; avis n° 0019 du
// 2 octobre 2026 sur PI-SPI ; avis n° 003-09-2024 ; situation de la
// microfinance au 31 décembre 2025 ; document-cadre d'inclusion financière
// 2025-2030), site PI-SPI, COBAC (règlement R-2016/04), ABE (EBA/GL/2020/06,
// points 54 et 55), CJUE (C-634/21, communiqué du 7 décembre 2023), EIOPA
// (DORA), AMLA (communiqué du 1er octobre 2026), Commission européenne
// (calendrier du règlement sur l'IA, page du 3 août 2026), ACPR (juin 2020).
// Richard n'est ni banquier ni conseiller réglementaire.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour les banques et la microfinance : des agents plus rapides sur la conformité, le crédit et la relation client, sans exposer le secret bancaire ni les données des clients",
    'title'   => "Formation IA pour banques et microfinance | Richard SALANON",
    'meta'    => "Former agences bancaires et IMF à l'IA et au numérique : vigilance LBC/FT, crédit, mobile money, relation client, secret et cybersécurité. Sur devis.",
    'en_bref' => "Cette page s'adresse aux banques, aux institutions de microfinance et aux établissements de monnaie électronique qui veulent former leurs agents à l'intelligence artificielle, à l'automatisation et aux canaux numériques, du guichet au comité de crédit. Elle décrit ce que ces outils changent au travail d'agence, ce qu'ils ne doivent jamais faire au regard du secret professionnel, des règles de lutte contre le blanchiment de la BCEAO et de la protection des données, et quelles formations du catalogue retenir selon le poste. Le parcours type compte six demi-journées, en intra, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Chiffre et finance',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : l'agence et l'IMF vues comme une suite d'opérations, et la carte de ce qui peut sortir de l'établissement",
            'duree'  => '3 h 30',
            'points' => [
                "Parcours d'un client sur une semaine : ouverture de compte, dépôt, retrait, transfert, demande de prêt, échéance manquée, réclamation ; temps passé et ressaisies à chaque étape.",
                "Classement des données manipulées : identité, pièces, soldes, opérations, notes de visite, informations reçues d'un bureau d'information sur le crédit ; ce qui relève du secret et ce qui ne quitte jamais le système de l'établissement.",
                "Inventaire, sans sanction, des outils réellement utilisés par les agents : groupes WhatsApp, téléphones personnels, comptes gratuits d'assistants d'IA, tableurs envoyés par courriel.",
                "Ce que dit chaque texte applicable, lu à la source : loi uniforme sur la lutte contre le blanchiment, loi sur les systèmes financiers décentralisés, loi de protection des données du pays, règlement européen pour les filiales et partenaires en Europe.",
                "Choix de trois chantiers pour la suite du parcours, chacun mesuré avant la session par un indicateur simple : délai d'ouverture d'un compte, délai de réponse à une demande de prêt, nombre de réclamations en attente.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : connaître son client et surveiller les opérations avec des outils, sans déléguer le jugement",
            'duree'  => '3 h 30',
            'points' => [
                "Le dossier de connaissance du client vu par l'agent : pièces attendues, mise à jour du profil, entrée en relation à distance et cas où le client doit revenir en agence.",
                "Lire une alerte du système de surveillance : pourquoi elle se déclenche, ce que l'agent vérifie, ce qu'il transmet au responsable de la conformité, et dans quels termes.",
                "Usage d'un assistant d'IA sur un dossier entièrement fictif : résumer une suite d'opérations, repérer les incohérences de profil, préparer la trame de la note interne, sans jamais conclure à la place de l'analyste.",
                "La règle de confidentialité de la déclaration de soupçon appliquée aux outils : ce qui ne s'écrit ni dans un message au client, ni dans un groupe de discussion, ni dans une consigne envoyée à un service en ligne.",
                "Exercice : un client fictif dont les dépôts changent de rythme ; chaque participant décide de ce qu'il note, de ce qu'il transmet et de ce qu'il ne dit pas au client.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : instruire une demande de crédit, de la visite au comité",
            'duree'  => '3 h 30',
            'points' => [
                "Collecte des pièces et visite de l'activité avec un téléphone professionnel : photos utiles, notes structurées, géolocalisation éventuelle, et ce qui ne se photographie pas.",
                "Calcul de la capacité de remboursement dans un tableur contrôlé, avec des formules verrouillées et une cellule d'hypothèses visible, plutôt que dans la réponse rédigée d'un assistant.",
                "Rédaction de la note d'analyse : l'assistant met en forme et pose des questions, l'agent de crédit écrit les hypothèses, les risques et sa recommandation.",
                "Consentement du client avant toute transmission à un bureau d'information sur le crédit, et conservation de ce consentement dans le dossier.",
                "Les scores proposés par des fournisseurs : ce qu'un comité doit savoir d'un modèle avant de s'en servir, et pourquoi la décision reste motivée par des personnes.",
                "Exercice en binôme : une demande de prêt d'une commerçante fictive, instruite par l'un et présentée par l'autre devant un comité simulé.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : suivre le portefeuille et recouvrer sans abîmer la relation",
            'duree'  => '3 h 30',
            'points' => [
                "Tableau de suivi du portefeuille à partir des exports du système central : encours, retards par ancienneté, échéances de la semaine, par agent et par agence.",
                "Relances automatiques avant l'échéance par SMS ou WhatsApp : ce qu'on écrit, ce qu'on n'écrit jamais (montant dû, nature du retard) sur un téléphone qui peut être partagé dans la famille.",
                "Messages de relance préparés avec l'IA, relus et validés une fois pour toutes par la direction et la conformité, puis utilisés tels quels.",
                "Traçabilité de chaque contact avec un emprunteur en retard : date, canal, réponse, engagement pris, et nom de l'agent.",
                "Exercice : le tableau de suivi d'une agence fictive de 400 prêts, avec les relances de la semaine préparées et justifiées.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin : relation client, WhatsApp, mobile money et paiements instantanés",
            'duree'  => '3 h 30',
            'points' => [
                "Ce qu'un client attend d'un numéro WhatsApp d'agence : horaires, documents à apporter, conditions d'un produit, suivi d'une demande ; ce qu'il ne doit jamais y obtenir sans authentification forte.",
                "Réponses types et robot de premier niveau : périmètre écrit, passage à un conseiller, mention que le client parle à une machine, journal des échanges.",
                "Mobile money et plateforme PI-SPI de la BCEAO : ce qui change pour les transferts entre particuliers à partir du 2 novembre 2026, et comment l'expliquer au guichet sans se tromper.",
                "Traitement des réclamations sur une opération électronique : recueil des preuves, délais internes, réponse écrite relue.",
                "Exercice : dix messages réels de clients, anonymisés, traités par chaque participant avec la réponse type adaptée ou le transfert au bon service.",
            ],
        ],
        [
            'titre'  => "Jour 3, après-midi : fraude, sécurité des postes et règles d'usage de l'établissement",
            'duree'  => '3 h 30',
            'points' => [
                "Les fraudes qui visent les agents : faux client pressé, faux collègue du siège, faux agent de mobile money, demande de changement de numéro de téléphone rattaché à un compte.",
                "Les gestes du poste de travail en agence : session verrouillée, impression et photocopie des pièces, clé USB, écran visible depuis le guichet.",
                "Rédaction, avec la direction et la conformité, des règles d'usage de l'IA propres à l'établissement : outils autorisés, données interdites, relecture obligatoire, signalement d'une erreur.",
                "Évaluation sur un dossier fil rouge, de l'ouverture du compte au premier retard de remboursement, avec les contrôles écrits à chaque étape.",
                "Plan d'action à trois mois par agence ou par service : qui fait quoi, avec quel outil, et quel contrôle le vérifie.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Chargés de clientèle, guichetiers, agents et analystes de crédit, responsables de conformité, contrôleurs internes, directeurs d'agence et dirigeants de banques et d'IMF"],
        ['l' => 'Durée', 'v' => "Parcours type de 3 jours en 6 demi-journées, découpé par poste"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent concrètement dans une agence bancaire ou une institution de microfinance ?",
            'paragraphes' => [
                "Le travail d'agence repose sur des gestes répétés : identifier un client, enregistrer une opération, instruire un prêt, relancer une échéance, répondre à une réclamation. Pendant longtemps, ces gestes se faisaient au guichet et sur papier. Ils passent désormais par le téléphone du client, par des plateformes de paiement et par des systèmes qui produisent des alertes à longueur de journée. L'agent ne manque pas d'informations ; il en reçoit trop, par trop de canaux, et doit décider vite sans rien laisser filer de ce que la loi lui demande de protéger. C'est à cet endroit précis que la formation intervient.",
                "Les chiffres de la BCEAO montrent l'ampleur du mouvement. Selon sa fiche sur la situation de la microfinance au 31 décembre 2025, les 524 institutions de microfinance de l'UMOA servent 20 378 232 clients par 4 838 points de services, avec un encours de crédits de 2 937,2 milliards de francs CFA. Le document-cadre d'inclusion financière 2025-2030 de la Banque centrale relève 209 millions de comptes de monnaie électronique ouverts à fin 2023, contre 36,5 millions en 2016, mais un taux d'activité de 34,4 % seulement pour les comptes des établissements de monnaie électronique. Le client est déjà numérique ; l'organisation de l'agence, souvent, pas encore.",
                "Trois évolutions récentes pèsent directement sur le poste de travail. La BCEAO a publié le 18 mars 2025 deux instructions qui précisent les obligations de vigilance, dont l'entrée en relation à distance avec un client. Son avis n° 0019 du 2 octobre 2026 impose de faire passer par la plateforme PI-SPI toutes les transactions de monnaie électronique interopérables dans l'UEMOA, à partir du 2 novembre 2026. Et les assistants d'IA générative sont arrivés dans les agences par les téléphones des agents, bien avant toute décision de la direction. Chacune de ces évolutions demande des gestes nouveaux, que personne n'a encore enseignés à la plupart des équipes.",
                "En Europe, le mouvement est comparable, avec d'autres textes. Le règlement DORA sur la résilience opérationnelle numérique s'applique au secteur financier depuis le 17 janvier 2025, et le règlement européen sur l'IA range l'évaluation de la solvabilité des particuliers parmi les usages à haut risque, soumis à des obligations strictes à partir du 2 décembre 2027. Le 1er octobre 2026, l'Autorité européenne de lutte contre le blanchiment (AMLA) a finalisé ses normes techniques sur la vigilance à l'égard de la clientèle, qui traitent aussi de la vérification à distance et de l'identification électronique.",
                "Une banque africaine qui a une filiale, un correspondant ou des clients en Europe rencontre donc les deux cadres à la fois. Ses agents n'ont pas à devenir juristes, mais ils doivent savoir quel ensemble de règles s'applique au dossier qu'ils ont sous les yeux, et à qui poser la question quand ils l'ignorent.",
                "Une précision s'impose dès le départ : Richard SALANON n'est ni banquier, ni responsable de la conformité, ni conseiller en réglementation. Il forme à l'usage des outils numériques, de l'IA et de l'automatisation dans le cadre que l'établissement a déjà fixé. Les textes de la BCEAO, de la Commission bancaire, de la COBAC, de l'Autorité bancaire européenne ou de l'ACPR sont cités ici pour tracer les limites de l'outil et renvoyer à la source, jamais pour les interpréter à la place de la direction de la conformité.",
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères datés une banque ou une IMF doit-elle avoir en tête avant de former ses agents ?",
            'items' => [
                ['valeur' => '20 378 232', 'libelle' => "Clients servis par les 524 institutions de microfinance de l'UMOA au 31 décembre 2025, par 4 838 points de services ; le taux brut de dégradation de leur portefeuille ressort à 7,5 %, après 10,3 % au trimestre précédent.", 'source' => "BCEAO, situation de la microfinance dans l'UMOA au 31 décembre 2025", 'url' => 'https://www.bceao.int/sites/default/files/2026-05/Situation_de_la_microfinance_%C3%A0_fin_d%C3%A9cembre_2025.pdf'],
                ['valeur' => '209 millions', 'libelle' => "Comptes de monnaie électronique ouverts dans l'UEMOA à fin 2023, contre 36,5 millions en 2016 ; le taux d'activité des comptes des établissements de monnaie électronique n'est que de 34,4 %.", 'source' => "BCEAO, document-cadre de politique et de stratégie régionale d'inclusion financière 2025-2030", 'url' => 'https://cofeb.bceao.int/sites/default/files/2025-10/DOCUMENT-CADRE%20DE%20POLITIQUE%20ET%20DE%20STRATEGIE%20REGIONALE%20D%27INCLUSION%20FINANCIERE%20DANS%20L%27UEMOA%20POUR%20LA%20PERIODE%202025-2030.pdf'],
                ['valeur' => '72,3 %', 'libelle' => "Taux global d'utilisation des services financiers dans l'UEMOA en 2023, année de référence du document-cadre, qui vise 90 % en 2030 ; le taux d'utilisation de la monnaie électronique y est de 55,9 %.", 'source' => "BCEAO, document-cadre d'inclusion financière 2025-2030, annexe 3", 'url' => 'https://cofeb.bceao.int/sites/default/files/2025-10/DOCUMENT-CADRE%20DE%20POLITIQUE%20ET%20DE%20STRATEGIE%20REGIONALE%20D%27INCLUSION%20FINANCIERE%20DANS%20L%27UEMOA%20POUR%20LA%20PERIODE%202025-2030.pdf'],
                ['valeur' => '2 novembre 2026', 'libelle' => "Entrée en vigueur de l'avis n° 0019 du 2 octobre 2026 : transferts nationaux de monnaie électronique entre particuliers gratuits jusqu'à 8 000 francs CFA cumulés par jour, frais de 0 à 0,8 % au-delà, réception gratuite ; mêmes conditions entre pays de l'UEMOA à partir du 1er juin 2027.", 'source' => "BCEAO, avis n° 0019 relatif aux transactions de monnaie électronique par PI-SPI", 'url' => 'https://www.bceao.int/sites/default/files/2026-10/AVIS%20N%C2%B0%200019%20%20DU%202%20OCTOBRE%202026%20%281%29.pdf'],
                ['valeur' => '10 ans', 'libelle' => "Durée pendant laquelle les institutions financières conservent les pièces relatives à l'identité et à la connaissance du client après la fin de la relation, et celles des opérations après leur exécution (article 23 de la loi uniforme LBC/FT/FP).", 'source' => "BCEAO, loi uniforme relative à la lutte contre le blanchiment de capitaux (version de mars 2023)", 'url' => 'https://www.bceao.int/sites/default/files/2025-02/Loi-uniforme-LBCFTFP-Mars-2023-vf.pdf'],
                ['valeur' => '2 décembre 2027', 'libelle' => "Application, dans l'Union européenne, des règles sur les systèmes d'IA à haut risque de l'annexe III, dont l'évaluation de la solvabilité des personnes, après l'omnibus entré en vigueur le 27 juillet 2026 (page mise à jour le 3 août 2026).", 'source' => "Commission européenne, cadre réglementaire de l'IA", 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches de l'agence changent avec les outils, et lesquelles restent aux agents et aux comités ?",
            'legende' => "Répartition travaillée pendant le parcours. La dernière colonne indique la formation du catalogue qui approfondit l'outil concerné.",
            'entetes' => ['Tâche', "Ce que l'outil peut préparer", "Ce qui reste à l'agent ou au comité", 'Pour aller plus loin'],
            'lignes'  => [
                ["Ouverture de compte et connaissance du client", "Liste des pièces selon le profil, contrôle de complétude du dossier, rappel des mises à jour de profil à échéance", "Vérifier l'identité, apprécier une incohérence, renvoyer le client en agence quand la vérification à distance ne suffit pas", "<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>"],
                ["Surveillance des opérations", "Alertes du système, regroupement des opérations d'un même client, trame de note pour l'analyste", "Analyser l'alerte, décider de la transmettre, et seul le service compétent décide d'une déclaration de soupçon", "<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>"],
                ["Instruction d'un prêt", "Structure de la note d'analyse, questions à poser au client, calcul de capacité dans un tableur verrouillé", "Évaluer l'activité sur place, écrire les hypothèses, recommander ou non", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Comité de crédit", "Dossier mis en forme, tableau comparatif des demandes, historique de remboursement", "Décider, motiver la décision, fixer les conditions et les garanties", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>"],
                ["Suivi et recouvrement", "Tableau des retards par ancienneté, relances préventives programmées, journal des contacts", "Choisir le ton et la mesure adaptés à chaque emprunteur, négocier un rééchelonnement", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
                ["Relation client à distance", "Réponses types sur WhatsApp, robot de premier niveau, accusé de réception d'une demande", "Toute question sur un compte, un solde ou une opération, après authentification", "<a href=\"/formations/chatbot-whatsapp\">Chatbot WhatsApp et API WhatsApp Business</a>"],
                ["Réclamations", "Classement par motif, rappel des délais internes, brouillon de réponse", "Établir les faits, décider du geste commercial, signer la réponse", "<a href=\"/formations/ia-processus-metier\">IA dans les processus métier</a>"],
                ["Rapports internes et réglementaires", "Consolidation des exports, contrôles de cohérence entre états, mise en forme", "Valider les chiffres et répondre de leur exactitude devant l'autorité de contrôle", "<a href=\"/formations/data-literacy\">Décider avec les données</a>"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ne doivent jamais faire l'IA et l'automatisation dans une banque ou une institution de microfinance ?",
            'intro' => "Chacune de ces limites vient d'un texte que l'établissement applique déjà. Le parcours les traduit en gestes de poste ; leur interprétation fine reste l'affaire de la direction de la conformité.",
            'items' => [
                ['titre' => "Révéler, même indirectement, qu'une déclaration de soupçon existe", 'texte' => "L'article 63 de la loi uniforme relative à la lutte contre le blanchiment de capitaux, le financement du terrorisme et de la prolifération, dans la version publiée par la BCEAO, rend la déclaration de soupçon confidentielle et interdit d'en révéler l'existence ou le contenu au client ou à des tiers. Un message automatique qui bloque une opération avec un motif trop explicite, ou une consigne collée dans un assistant en ligne avec le nom du client, peut suffire à rompre cette confidentialité."],
                ['titre' => "Faire sortir des informations couvertes par le secret", 'texte' => "La loi portant réglementation des systèmes financiers décentralisés de l'UMOA soumet au secret professionnel toutes les personnes qui concourent à l'administration, à la direction ou au fonctionnement d'une IMF (article 28) ; son article 58 précise à qui ce secret n'est pas opposable : le ministre, la Banque centrale, la Commission bancaire et l'autorité judiciaire en matière pénale. Un service d'IA en ligne ne figure dans aucune de ces catégories."],
                ['titre' => "Décider seul d'un crédit", 'texte' => "Les orientations de l'Autorité bancaire européenne sur l'octroi et le suivi des prêts (EBA/GL/2020/06, point 54) exigent des établissements qui utilisent des modèles automatisés qu'ils en comprennent la méthode, les données et les limites, qu'ils préviennent les biais et qu'ils prévoient des procédures de dérogation et le jugement d'experts. Le 7 décembre 2023, la Cour de justice de l'Union a jugé, dans l'affaire SCHUFA (C-634/21), qu'un score de solvabilité constitue une décision automatisée en principe interdite par le RGPD lorsque la banque lui accorde un rôle déterminant."],
                ['titre' => "Ouvrir un compte à distance sans vérification fiable", 'texte' => "L'instruction n° 003-03-2025 de la BCEAO admet l'entrée en relation à distance sur la base de schémas d'identification électronique fiables, sous la responsabilité de l'établissement. Elle exige que la solution compare les caractéristiques physiques du client avec ses documents (article 17), qu'aucune première opération n'ait lieu avant la vérification (article 14), et qu'en cas de doute le client soit orienté vers une vérification en présentiel (article 18)."],
                ['titre' => "Partager l'historique d'un emprunteur sans son accord", 'texte' => "L'instruction n° 002-01-2015 de la BCEAO impose d'obtenir le consentement préalable du client avant de transmettre ses données à un bureau d'information sur le crédit, de le joindre au dossier d'ouverture de compte et d'en garder une copie dans chaque dossier de crédit. Pour une demande en ligne, la plateforme doit garantir notamment l'authentification du client, l'intégrité du formulaire et son archivage."],
                ['titre' => "Mettre un nouvel outil en service sans évaluer le risque", 'texte' => "L'article 15 de la loi uniforme demande aux personnes assujetties d'évaluer les risques liés aux nouveaux produits, aux nouveaux canaux de distribution et aux technologies nouvelles avant leur lancement ou leur utilisation, et de documenter cette évaluation. Un robot WhatsApp ou un outil d'IA branché sur les données des clients entre dans ce champ : il ne s'installe pas à l'initiative d'une agence."],
                ['titre' => "Effacer ou disperser les traces", 'texte' => "L'article 23 de la même loi impose de conserver dix ans les pièces d'identification, les analyses de vigilance et les documents des opérations, de façon à pouvoir reconstituer chaque opération. Une conversation WhatsApp sur le téléphone personnel d'un agent, supprimée à son départ, n'est pas une archive : ce qui compte pour le dossier entre dans le système de l'établissement."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi le téléphone personnel de l'agent de crédit est-il souvent le premier risque d'une IMF ?",
            'texte' => "Sur le terrain, l'agent de crédit photographie la pièce d'identité, la boutique, le cahier de ventes et parfois le titre foncier de l'emprunteur, puis échange avec lui sur WhatsApp depuis son propre téléphone. Ces images se retrouvent dans la galerie familiale, dans des sauvegardes en ligne et dans des groupes de discussion d'agence. Si l'agent quitte l'établissement ou perd son appareil, l'IMF ne sait plus où se trouvent les données de ses clients ni comment les effacer. Le parcours commence donc par décrire ces usages sans reproche, puis par fixer un équipement professionnel, un dossier de dépôt et une règle d'effacement écrite.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que changent les lois sur les données personnelles pour une agence qui se numérise ?",
            'paragraphes' => [
                "Une banque ou une IMF traite plus de données personnelles que presque toute autre entreprise : pièces d'identité, photographies, numéros de téléphone, revenus, dettes, adresses, parfois données biométriques lors d'une ouverture de compte à distance. Chaque nouvel outil, qu'il s'agisse d'un robot WhatsApp, d'un assistant d'IA ou d'un tableau partagé, ajoute un traitement et souvent un sous-traitant. Les lois de protection des données s'appliquent à ces traitements en plus des règles bancaires, et elles ne disent pas toujours la même chose d'un pays à l'autre.",
                "En Côte d'Ivoire, l'article 7 de la loi n° 2013-450 du 19 juin 2013 soumet à autorisation préalable de l'Autorité de protection le traitement des données biométriques et celui des numéros d'identification comme les numéros de téléphone, ce qui concerne directement la vérification d'identité par photo et le mobile money. Au Bénin, la loi n° 2017-20 portant code du numérique confie le contrôle à l'APDP, qui reçoit les déclarations de traitements et les formulaires de transfert vers l'étranger. Au Sénégal, la loi n° 2008-12 confie ce rôle à la Commission des données personnelles. Dans l'Union européenne, le RGPD s'ajoute aux règles prudentielles.",
                "L'instruction n° 003-03-2025 de la BCEAO fait le lien entre les deux mondes : lorsqu'un établissement ouvre des comptes à distance, ses procédures doivent inclure une politique de conformité aux réglementations de cybersécurité et de protection des données personnelles. Pour l'agent, la conséquence est simple et se travaille pendant le parcours : il ne choisit pas seul un outil, il utilise celui que l'établissement a déclaré, et il ne fait jamais sortir une donnée de client par un canal que personne n'a autorisé.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble l'usage de ces outils dans une banque ou une IMF, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "IMF rurale de douze agences, au Burkina Faso", 'probleme' => "Situation type : les agents de crédit rédigent leurs notes de visite le soir, à la main, puis les ressaisissent au bureau ; les comités se tiennent sur des dossiers incomplets et les décisions arrivent trois semaines après la demande.", 'solution' => "Fiche de visite structurée sur un téléphone professionnel, calcul de capacité dans un classeur verrouillé, trame de note préparée avec l'assistant à partir d'éléments sans nom, et liste de contrôle du dossier avant chaque comité."],
                ['secteur' => "Service conformité d'une banque commerciale, à Abidjan", 'probleme' => "Situation type : le système de surveillance produit des centaines d'alertes par semaine ; les analystes les traitent dans l'ordre d'arrivée et rédigent chaque note à partir de zéro.", 'solution' => "Grille de tri des alertes fixée par le responsable de la conformité, modèles de notes sans donnée identifiante, assistant utilisé seulement dans l'offre validée par l'établissement, et relecture par un second analyste avant toute transmission."],
                ['secteur' => "Établissement de monnaie électronique et réseau de distributeurs, à Dakar", 'probleme' => "Situation type : le service client reçoit sur WhatsApp des réclamations de transferts envoyés au mauvais numéro, et les distributeurs posent tous la même question sur la gratuité annoncée par la BCEAO.", 'solution' => "Fiche d'explication de l'avis n° 0019 pour les distributeurs, réponses types relues par la conformité, robot limité aux informations générales avec passage à un conseiller dès qu'une opération est en cause."],
                ['secteur' => "Banque de détail, à Douala", 'probleme' => "Situation type : les directeurs d'agence demandent des tableaux de bord ; chacun construit le sien dans un tableur différent, et les chiffres présentés à la direction ne concordent jamais.", 'solution' => "Un seul jeu d'indicateurs défini par le siège, extractions programmées du système central, contrôles de cohérence avant diffusion, dans le cadre de contrôle interne fixé par le règlement COBAC R-2016/04."],
                ['secteur' => "Coopérative d'épargne et de crédit, à Lomé", 'probleme' => "Situation type : les relances d'échéance partent par SMS depuis le téléphone du caissier, avec le montant dû et le retard en clair, parfois sur le numéro d'un proche de l'emprunteur.", 'solution' => "Relances préventives envoyées par un outil de l'établissement, texte neutre validé une fois par la direction, vérification du numéro à chaque renouvellement de prêt, journal des contacts tenu dans le dossier."],
                ['secteur' => "Établissement de crédit à la consommation, en France ou en Belgique", 'probleme' => "Situation type : un fournisseur propose un score d'octroi fondé sur l'IA ; les conseillers craignent de devoir appliquer un refus qu'ils ne savent pas expliquer.", 'solution' => "Lecture des points 54 et 55 des orientations EBA/GL/2020/06, de l'arrêt SCHUFA et du calendrier du règlement sur l'IA, procédure de dérogation au score, et formation des conseillers à expliquer une décision qu'un humain a réellement prise, dans l'esprit du document de réflexion de l'ACPR de juin 2020 sur la gouvernance des algorithmes d'IA."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils et systèmes un agent de banque ou d'IMF doit-il savoir manier aujourd'hui ?",
            'legende' => "Outils courants dans les agences de la zone UEMOA, de la CEMAC et d'Europe. Les prix cités ont été relevés le 5 octobre 2026 sur les pages des éditeurs ; ils sont payés à l'éditeur, jamais au formateur.",
            'entetes' => ['Outil ou système', 'Usage dans le métier', "Point d'attention", 'Formation liée'],
            'lignes'  => [
                ["Système central de l'établissement (core banking ou logiciel de gestion de microfinance)", "Comptes, opérations, prêts, échéanciers, exports pour le suivi", "Il reste la seule source de vérité : un tableau ou une réponse d'assistant ne remplace jamais une donnée du système", "<a href=\"/formations/digitalisation-processus\">Digitalisation des processus métiers</a>"],
                ["Outils de filtrage et de surveillance LBC/FT", "Filtrage des clients et des opérations, alertes, profils de risque", "L'article 6 de l'instruction n° 001-03-2025 prévoit un filtrage en temps réel, la mise à jour du profil sous un mois et un examen annuel du système", "<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>"],
                ["Plateforme PI-SPI de la BCEAO", "Paiements instantanés entre banques, IMF, émetteurs de monnaie électronique et établissements de paiement, avec alias et QR code", "Les agents doivent savoir expliquer l'alias (numéro de téléphone ou adresse de paiement) et les règles de gratuité en vigueur", "<a href=\"/formations/digitaliser-son-entreprise\">Digitaliser son entreprise pas à pas</a>"],
                ["Bureaux d'information sur le crédit", "Historique de crédit des emprunteurs, partagé entre établissements de l'UMOA", "Consentement préalable écrit ou électronique, conservé dans le dossier ; les dépôts du client n'y figurent jamais", "<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>"],
                ["Tableur", "Capacité de remboursement, suivi du portefeuille, contrôles avant comité", "Formules verrouillées, hypothèses visibles, aucune donnée de client envoyée par courriel personnel", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Assistants d'IA en offre professionnelle", "Notes d'analyse, réponses types, synthèse de procédures internes", "Aucune donnée identifiante dans un compte gratuit ; le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide à choisir l'offre", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>"],
                ["WhatsApp Business et son API", "Accueil, rappels d'échéance, suivi des demandes", "Meta facture les messages à l'unité depuis le 1er juillet 2025 et, depuis le 1er octobre 2026, au-delà de 1 000 messages de service par mois et par numéro", "<a href=\"/formations/whatsapp-business\">WhatsApp Business pour vendre</a>"],
                ["Agrégateurs de paiement en ligne", "Encaissement des échéances ou des frais par carte et mobile money sur un site ou une application", "Frais, délais de reversement et données transmises varient d'un acteur à l'autre : le <a href=\"/comparatifs/fedapay-vs-kkiapay-vs-cinetpay\">comparatif FedaPay, KKiaPay et CinetPay</a> les met côte à côte", "<a href=\"/formations/integrations-api-no-code\">Intégrations API en no-code et low-code</a>"],
                ["Outils d'automatisation (n8n, Make)", "Relances programmées, alertes internes, consolidation de rapports", "n8n peut être auto-hébergé pour garder les données dans l'infrastructure de l'établissement ; tout flux sur des données de clients passe par l'évaluation de risque prévue par l'article 15", "<a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a>"],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type d'un parcours pour banques et IMF, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours s'adapte-t-il à chaque poste de l'établissement ?",
            'legende' => "Chaque poste suit les demi-journées utiles à son travail, puis, si besoin, la formation du catalogue qui approfondit son outil principal.",
            'entetes' => ['Poste', "Ce qu'il doit savoir faire à la fin", 'Demi-journées du parcours type', 'Formation complémentaire'],
            'lignes'  => [
                ["Guichetier et chargé de clientèle", "Compléter un dossier client, répondre sur WhatsApp sans rien révéler du compte, repérer une demande suspecte", "Jour 1, jour 3 matin", "<a href=\"/formations/cybersecurite-employes\">Cybersécurité pour les employés</a>"],
                ["Agent de crédit de terrain", "Collecter proprement, calculer une capacité, rédiger une note qu'un comité peut suivre, relancer sans exposer l'emprunteur", "Jour 1 matin, jour 2", "<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>"],
                ["Analyste ou responsable crédit", "Relire une note préparée avec l'outil, questionner un score de fournisseur, tenir le suivi du portefeuille", "Jour 1 matin, jour 2, jour 3 après-midi", "<a href=\"/formations/data-literacy\">Décider avec les données</a>"],
                ["Responsable de la conformité et analystes LBC/FT", "Fixer ce que les agents peuvent faire avec un assistant, organiser le tri des alertes, protéger la confidentialité des déclarations", "Jour 1, jour 3 après-midi", "<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>"],
                ["Contrôleur interne ou auditeur", "Vérifier qu'un outil respecte les règles écrites, tester un échantillon de dossiers, documenter les écarts", "Jour 1 matin, jour 2 matin, jour 3 après-midi", "<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>"],
                ["Service client et centre d'appels", "Tenir les réponses types, passer la main au bon moment, traiter une réclamation sur une opération électronique", "Jour 1 matin, jour 3", "<a href=\"/formations/chatbot-whatsapp\">Chatbot WhatsApp et API WhatsApp Business</a>"],
                ["Directeur d'agence", "Piloter l'agence avec des indicateurs fiables, faire appliquer les règles d'usage, répondre d'un incident", "Jour 1 matin, jour 2 après-midi, jour 3 après-midi", "<a href=\"/formations/power-bi-looker-studio\">Tableaux de bord Power BI et Looker Studio</a>"],
                ["Direction générale et conseil", "Décider des outils autorisés, des responsabilités et des contrôles, avant que les usages ne s'installent seuls", "Jour 1 matin, jour 3 après-midi", "<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Ce parcours remplace-t-il le programme annuel de formation à la lutte contre le blanchiment ?",
            'paragraphes' => [
                "Non, et il ne le prétend pas. L'article 12 de la loi uniforme demande aux personnes assujetties d'assurer la formation continue de leur personnel concerné, et l'article 9 de l'instruction n° 001-03-2025 de la BCEAO détaille le programme attendu : cadre juridique de l'Union, détection des indices, déclarations d'opérations suspectes, vigilance à l'égard de la clientèle, conservation des documents, coopération entre autorités. Ce programme se déploie au moins une fois par an, sa mise en œuvre est documentée et sa compréhension est évaluée après coup. Son contenu réglementaire relève du responsable de la conformité de l'établissement, qui en répond devant la Commission bancaire.",
                "Le parcours décrit sur cette page traite d'autre chose : la façon dont les agents utilisent leurs outils numériques au quotidien, de la messagerie à l'assistant d'IA, sans affaiblir le dispositif que la conformité a construit. Les deux se complètent. La demi-journée consacrée à la connaissance du client et à la surveillance des opérations se prépare donc avec le responsable de la conformité, qui valide les cas d'exercice et garde la main sur toute règle citée. Le formateur apporte la pratique des outils ; l'établissement apporte ses procédures, et aucune des deux ne prend la place de l'autre.",
                "L'article 10 de la même instruction élargit le public à former : le personnel exposé au risque, mais aussi les membres des organes de gouvernance et les intermédiaires mandatés, comme les distributeurs de monnaie électronique ou les agents commerciaux. Ces personnes utilisent les mêmes téléphones, les mêmes groupes de discussion et, de plus en plus, les mêmes assistants d'IA. C'est pourquoi le parcours prévoit une demi-journée accessible aux administrateurs et une version courte pour les réseaux de distribution.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir pour un siège, un réseau d'agences ou une petite IMF ?",
            'legende' => "Les séances évitent les fins de mois, les dates de remise des états réglementaires et les périodes de forte activité, comme les veilles de fêtes ou de rentrée scolaire.",
            'entetes' => ['Format', 'Organisation', 'Données utilisées', 'Quand le retenir'],
            'lignes'  => [
                ["Intra, au siège", "Six demi-journées dans vos locaux, par groupes de postes, direction de la conformité associée à la préparation", "Dossiers fictifs construits avec vos procédures, captures de vos écrans", "Une banque ou une grande IMF qui veut une méthode commune avant de déployer un outil"],
                ["Intra, réseau d'agences", "Une demi-journée en salle par région, la suite à distance au rythme des agences", "Cas tirés des réclamations et des dossiers de crédit des agences, anonymisés", "Un réseau dispersé où les agents ne peuvent pas quitter leur guichet plusieurs jours"],
                ["Inter, entre institutions", "Deux à trois jours réunissant plusieurs IMF ou coopératives, par exemple d'une même faîtière", "Jeu de données entièrement fictif, aucun dossier réel partagé entre établissements", "Petites institutions qui forment deux ou trois personnes chacune"],
                ["À distance", "Séances de deux heures en visioconférence, avec partage d'écran et exercices sur téléphone", "Fichiers fictifs envoyés avant chaque séance", "Équipes réparties entre plusieurs pays de l'UEMOA ou de la CEMAC, ou filiales suivies depuis l'Europe"],
                ["Hybride", "Première journée sur place, suite à distance sur six à huit semaines", "Indicateurs réels de l'agence, suivis d'une séance à l'autre", "Quand le diagnostic demande d'être sur place mais que l'activité ne peut pas s'arrêter"],
                ["Séance de direction", "Une demi-journée avec la direction générale, la conformité, le contrôle interne et l'informatique", "Inventaire des usages réalisé en amont", "Avant tout projet d'IA ou de robot sur un canal client"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation des équipes d'une banque ou d'une IMF ?",
            'intro'      => "Aucun montant n'est publié : chaque proposition est chiffrée sur devis, une fois connus les postes, le nombre d'agences et les outils de l'établissement. L'échange initial, le cadrage et l'établissement du devis ne sont pas facturés. Le paiement s'effectue par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les licences des logiciels, des assistants d'IA et les frais de messagerie de Meta restent à la charge de l'établissement, auprès de chaque éditeur.",
            'items'      => [
                ['offre' => 'Cadrage', 'prix' => 'Gratuit', 'inclus' => ["Entretien avec la direction et la conformité", "Relevé des canaux et des outils en usage", "Proposition de parcours par poste et devis écrit"]],
                ['offre' => 'Parcours type', 'prix' => 'Sur devis', 'inclus' => ["Six demi-journées sur des dossiers fictifs construits avec vos procédures", "Réponses types et règles d'usage de l'IA rédigées en séance", "Évaluation sur un dossier fil rouge et attestation nominative"]],
                ['offre' => 'Module court pour un réseau', 'prix' => 'Sur devis', 'inclus' => ["Une demi-journée pour les distributeurs ou les agents commerciaux", "Fiche réflexe d'une page", "Version à distance pour les sites éloignés"]],
                ['offre' => 'Suivi', 'prix' => 'Sur devis', 'inclus' => ["Séance de retour à trois mois", "Relecture des réponses types et des règles", "Bilan des indicateurs choisis au départ"]],
            ],
            'variations' => [
                "Le nombre de participants, de groupes et d'agences à couvrir.",
                "Le nombre de pays, donc de textes de protection des données à étudier.",
                "Le temps de construction des dossiers fictifs avec la conformité.",
                "La version courte destinée aux distributeurs et intermédiaires.",
                "Les déplacements hors de Cotonou ou hors du Bénin, ou le choix de la distance.",
                "Le suivi retenu après la session.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation des agents d'une banque ou d'une IMF ?",
            'paragraphes' => [
                "Le premier financeur est presque toujours l'établissement lui-même, sur son budget de formation. Les fonds publics de formation continue peuvent intervenir dans certains pays, selon des règles qui leur sont propres, et aucune prise en charge n'est jamais acquise d'avance. En Côte d'Ivoire, le FDFP ouvre son plan de formation aux entreprises qui justifient du paiement régulier de leurs taxes de formation, et ne paie qu'après le contrôle de ses services. Au Bénin, le décret n° 2022-286 a approuvé les statuts du FODEFCA ; son article 5 prévoit un apport du bénéficiaire compris entre 10 et 30 % du coût selon les cas. Au Sénégal, le 3FPT dispose d'un guichet réservé au personnel des entreprises.",
                "Dans l'Union européenne, une filiale ou un établissement partenaire qui voudrait passer par un opérateur de compétences doit savoir que France Compétences réserve, depuis le 1er janvier 2022, l'accès aux fonds publics ou mutualisés aux prestataires certifiés Qualiopi. Richard SALANON ne détient pas cette certification : la formation est alors réglée sur les fonds propres de l'entreprise. Dans tous les pays, la règle reste la même : interroger le fonds par écrit, programme et devis joints, et attendre sa réponse avant de fixer les dates.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on quand une banque ou une IMF équipe ses agents de nouveaux outils ?",
            'intro' => "Elles tiennent rarement à la technologie choisie. Elles tiennent à l'ordre des décisions, au périmètre laissé flou et aux personnes qu'on oublie d'associer.",
            'items' => [
                ['titre' => "Laisser chaque agence inventer ses outils", 'texte' => "Un groupe WhatsApp ici, un tableur partagé là, un assistant gratuit ailleurs : au bout d'un an, l'établissement ne sait plus où sont les données de ses clients. Les canaux autorisés se décident au siège, se publient par écrit et s'appliquent à toutes les agences."],
                ['titre' => "Brancher un robot sur les comptes trop tôt", 'texte' => "Un robot qui donne des soldes ou confirme des opérations sans authentification solide devient une porte d'entrée pour la fraude. Le premier robot répond aux questions générales ; l'accès aux comptes vient ensuite, après l'évaluation de risque exigée par l'article 15 de la loi uniforme."],
                ['titre' => "Former les agents et oublier la conformité", 'texte' => "Si le responsable de la conformité découvre les nouvelles pratiques après coup, il les interdit en bloc, souvent à juste titre. Associé dès la préparation, il valide les cas d'exercice, les réponses types et les règles d'usage, qui deviennent alors applicables."],
                ['titre' => "Faire confiance au score sans le comprendre", 'texte' => "Un score acheté à un fournisseur finit par décider à la place du comité si personne ne sait l'expliquer. Les points 54 et 55 des orientations de l'Autorité bancaire européenne demandent une documentation du modèle, une surveillance de ses résultats et des procédures de dérogation : de bonnes pratiques à reprendre partout, même là où ces orientations ne s'appliquent pas."],
                ['titre' => "Tout basculer en une fois", 'texte' => "L'<a href=\"/histoires/tsb-migration\">histoire de TSB</a> rappelle ce que coûte une bascule complète sans retour possible : en avril 2018, la banque britannique a migré ses clients en un week-end et n'a retrouvé un fonctionnement normal qu'en décembre. Un nouvel outil se teste d'abord dans une agence pilote, avec un chemin de retour."],
                ['titre' => "Automatiser sans surveiller", 'texte' => "Une relance programmée qui part au mauvais fichier, un flux qui tourne sur une ancienne version : l'<a href=\"/histoires/knight-capital\">histoire de Knight Capital</a> montre qu'une automatisation mal déployée cause des dégâts en quelques minutes. Chaque flux a un responsable nommé, un journal consulté et un bouton d'arrêt connu de tous."],
                ['titre' => "Oublier les intermédiaires", 'texte' => "Distributeurs de monnaie électronique, agents commerciaux et sous-traitants manipulent des données de clients avec leurs propres téléphones. L'article 10 de l'instruction n° 001-03-2025 les inclut parmi les personnes à former en matière de LBC/FT ; il est logique de les inclure aussi dans les règles d'usage des outils."],
                ['titre' => "Ne rien mesurer", 'texte' => "Sans le délai de réponse à une demande de prêt ou le nombre de réclamations en attente relevés avant la session, personne ne saura trois mois plus tard si les outils ont servi. Trois indicateurs suffisent, notés chaque mois par agence."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue se rattachent au travail des banques et des IMF ?",
            'legende' => "Formations du catalogue utiles aux établissements de crédit, aux institutions de microfinance et aux établissements de monnaie électronique. Chacune a sa page, son programme et ses formats.",
            'entetes' => ['Formation', "Pour qui dans l'établissement", "Ce qu'elle apporte au métier", 'Durée'],
            'lignes'  => [
                ["<a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a>", "Tout agent qui utilise un assistant d'IA", "Données personnelles, secret, biais et décisions sur les personnes", "1 jour de socle, ou 2 jours"],
                ["<a href=\"/formations/cybersecurite-employes\">Cybersécurité pour les employés</a>", "Guichet, back-office, service client, direction", "Hameçonnage, mots de passe, double authentification, fraude au virement", "1 jour, plus une demi-journée pour les postes sensibles"],
                ["<a href=\"/formations/chatbot-whatsapp\">Chatbot WhatsApp et API WhatsApp Business</a>", "Équipe digitale, service client, informatique", "Plateforme de Meta, modèles de messages, robot avec reprise humaine", "2 jours, puis une séance de suivi à distance"],
                ["<a href=\"/formations/gouvernance-ia\">Gouverner l'IA dans l'entreprise</a>", "Direction générale, conformité, contrôle interne, informatique", "Inventaire des usages, charte, rôles, contrôles et revue périodique", "2 jours en 4 demi-journées, revue à 3 mois en option"],
                ["<a href=\"/formations/ia-audit-controle\">IA pour l'audit, le contrôle et la conformité</a>", "Audit interne, contrôle permanent, analystes conformité", "Tests sur des populations entières, traçabilité des travaux", "3 jours en 6 demi-journées"],
                ["<a href=\"/formations/whatsapp-business\">WhatsApp Business pour vendre</a>", "Agences et chargés de clientèle", "Numéro d'agence, étiquettes, réponses rapides, catalogue de produits", "Une demi-journée ou une journée, puis une séance de suivi"],
                ["<a href=\"/formations/excel-google-sheets\">Excel et Google Sheets pour la gestion</a>", "Agents et analystes de crédit, directeurs d'agence", "Classeurs fiables, formules verrouillées, contrôles", "2 jours en 4 demi-journées, plus un retour à un mois"],
                ["<a href=\"/formations/data-literacy\">Décider avec les données</a>", "Responsables crédit, directeurs d'agence, comités", "Lire et questionner les indicateurs du portefeuille", "2 jours en 4 demi-journées, plus 2 h de suivi à un mois"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former les équipes d'une banque ou d'une IMF avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des équipes de banques et d'institutions de microfinance. Il conçoit des assistants WhatsApp, des automatisations et des intégrations d'IA, ce qui lui permet de montrer aux agents, sur leurs propres écrans, ce qu'un outil fait réellement des données qu'on lui confie. Avec " . $ans . " ans d'expérience et une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il indique avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes, et il a mené des missions dans " . count((array) fait('pays_travailles')) . " pays : sept États de l'UEMOA, le Tchad, le Gabon et la RD Congo, ainsi que la France, la Belgique, la Suisse et le Canada. Il est le créateur de <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle, et co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Il n'est ni banquier, ni responsable de la conformité, ni certifié par un éditeur de logiciel bancaire ou d'IA. Il enseigne l'usage des outils et les garde-fous qui l'accompagnent ; l'octroi des crédits, la vigilance, les déclarations et l'interprétation des textes de la BCEAO, de la COBAC ou des autorités européennes restent l'affaire des professionnels de l'établissement. Les séances se tiennent en petits groupes, sur des dossiers fictifs construits avec vos procédures, et les supports sont remis dans un format modifiable. Aucun gain n'est annoncé à l'avance : on mesure.",
                "Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. Le catalogue complet est sur la page des <a href=\"/formations/\">formations</a> ; les formations voisines se trouvent dans les domaines <a href=\"/formations/domaine/cybersecurite-it\">cybersécurité et IT</a> et <a href=\"/formations/domaine/ia-systemes-existants\">IA dans vos systèmes existants</a>. Quand le besoin dépasse la formation, par exemple construire un assistant de premier niveau pour le service client, il relève des <a href=\"/services/agents-ia-chatbot-whatsapp\">agents IA et chatbots WhatsApp</a> ou de l'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former les agents de votre banque ou de votre IMF ?",
            'texte' => "Décrivez d'abord les outils que vos agents utilisent déjà, associez la conformité dès la préparation, gardez chaque décision de crédit, chaque analyse d'alerte et chaque réponse sur un compte entre des mains humaines, ne laissez aucune donnée de client partir vers un compte gratuit ou un téléphone personnel, et testez tout nouvel outil dans une agence pilote avant de le généraliser.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former les équipes de votre banque ou de votre IMF aux outils numériques et à l'IA ?",
            'texte'  => "Indiquez le type d'établissement, le nombre d'agences et de personnes, les postes concernés, le pays et les canaux qui vous posent problème : vous recevez une réponse sous 24 heures, puis une proposition de parcours et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un parcours pour banque ou IMF'],
        ],
    ],

    'faq' => [
        ['q' => "L'IA va-t-elle remplacer les agents de crédit et les chargés de clientèle ?", 'r' => "Elle remplace une partie de la ressaisie, de la mise en forme et des réponses répétitives, pas le métier. Visiter une activité, apprécier un emprunteur, analyser une alerte, décider d'un crédit et répondre d'une opération restent des actes humains, que les textes de la BCEAO et, en Europe, les orientations de l'Autorité bancaire européenne placent sous la responsabilité de l'établissement."],
        ['q' => "Un agent peut-il coller un relevé de compte dans ChatGPT ou un autre assistant ?", 'r' => "Pas dans un compte gratuit ou personnel, et pas avec des éléments qui identifient le client. Le secret professionnel et la loi de protection des données du pays s'y opposent. Le parcours apprend à travailler sur des données fictives ou anonymisées, et à utiliser seulement l'offre que l'établissement a validée par écrit."],
        ['q' => "Peut-on utiliser l'IA pour analyser les alertes de lutte contre le blanchiment ?", 'r' => "Pour aider l'analyste à résumer et à structurer, dans un outil validé par l'établissement, oui. Pour décider à sa place, non : la décision de transmettre une alerte et la déclaration de soupçon relèvent des personnes désignées par l'établissement, et leur existence reste confidentielle selon l'article 63 de la loi uniforme. Le responsable de la conformité fixe le cadre exact."],
        ['q' => "Un score de crédit automatique est-il interdit ?", 'r' => "Pas en soi, mais il est encadré. Dans l'Union européenne, la Cour de justice a jugé le 7 décembre 2023 qu'un score qui joue un rôle déterminant dans l'octroi est une décision automatisée au sens du RGPD, et le règlement sur l'IA classe l'évaluation de la solvabilité des particuliers parmi les usages à haut risque. Partout, le comité doit comprendre le modèle et pouvoir s'en écarter."],
        ['q' => "Nos agents répondent aux clients sur WhatsApp : est-ce compatible avec le secret bancaire ?", 'r' => "Oui, si l'établissement l'organise : un numéro professionnel d'agence, aucune information de compte sans authentification, des réponses types validées par la conformité et un journal des échanges. Le parcours y consacre la matinée du troisième jour, et la formation Chatbot WhatsApp et API WhatsApp Business approfondit la partie technique."],
        ['q' => "Que change l'avis de la BCEAO sur PI-SPI pour nos guichets ?", 'r' => "À partir du 2 novembre 2026, toutes les transactions de monnaie électronique interopérables dans l'UEMOA passent par PI-SPI ; les transferts nationaux entre particuliers sont gratuits jusqu'à 8 000 francs CFA cumulés par jour, puis soumis à des frais de 0 à 0,8 %, et la réception est gratuite. Les agents doivent pouvoir l'expliquer sans erreur, ce qui se prépare avec une fiche validée par la direction."],
        ['q' => "La formation remplace-t-elle notre programme annuel de formation LBC/FT ?", 'r' => "Non. Ce programme, prévu par l'article 9 de l'instruction n° 001-03-2025, relève du responsable de la conformité. Le parcours porte sur l'usage des outils numériques par les agents, et il se prépare avec la conformité pour ne jamais contredire ses procédures."],
        ['q' => "Le parcours convient-il à une petite IMF de quelques agences ?", 'r' => "Oui. Une petite institution peut suivre un format inter avec d'autres IMF, sur des données fictives, ou un format hybride qui limite les déplacements. Les priorités y sont souvent les mêmes : téléphones des agents de crédit, relances d'échéance et tableau de suivi du portefeuille."],
        ['q' => "Nous sommes en zone CEMAC : le parcours s'applique-t-il ?", 'r' => "Oui, avec les textes de l'Afrique centrale à la place de ceux de l'UMOA : règlements de la COBAC, dont le règlement R-2016/04 sur le contrôle interne, et réglementation de lutte contre le blanchiment applicable dans la CEMAC. Les exercices sont construits sur ces textes, lus à la source avec votre conformité."],
        ['q' => "Richard SALANON est-il banquier ou consultant en conformité ?", 'r' => "Non. Il est consultant en digitalisation et développeur, et il forme à l'usage de l'IA, de l'automatisation, de WhatsApp et des tableurs. Les questions de crédit, de conformité et de réglementation restent tranchées par les professionnels de l'établissement et par ses autorités de contrôle."],
        ['q' => "Combien coûte le parcours ?", 'r' => "Il est chiffré sur devis, selon le nombre de personnes, d'agences et de pays, la préparation des dossiers fictifs, le lieu et le suivi retenu. Le premier échange, le cadrage et le devis sont gratuits ; le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
    ],


    'sources' => [
        ['titre' => "BCEAO, loi uniforme relative à la lutte contre le blanchiment de capitaux, le financement du terrorisme et de la prolifération dans l'UMOA, version de mars 2023 (articles 12, 13, 15, 23, 60, 63 et 113)", 'url' => 'https://www.bceao.int/sites/default/files/2025-02/Loi-uniforme-LBCFTFP-Mars-2023-vf.pdf', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, instruction n° 001-03-2025 du 18 mars 2025 sur l'organisation, le contrôle interne et la conformité LBC/FT/FP des institutions financières (articles 6, 9 et 10)", 'url' => 'https://www.bceao.int/fr/reglementations/instruction-ndeg001-03-2025-du-18-mars-2025-portant-modalites-de-mise-en-oeuvre-par', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, instruction n° 003-03-2025 du 18 mars 2025 relative à l'identification, la vérification de l'identité et la connaissance de la clientèle (articles 13 à 18)", 'url' => 'https://www.bceao.int/fr/reglementations/instruction-ndeg003-03-2025-du-18-mars-2025-relative-lidentification-la', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, instruction n° 002-01-2015 relative au consentement du client avant transmission aux bureaux d'information sur le crédit", 'url' => 'https://www.bceao.int/sites/default/files/2017-12/instruction_no002-01-2015_relative_aux_modalites_d_obtention_du_consentement_du_clien_par_les_fournisseurs_de_donnes_aux_bic_dans_les_etats_membres_de_l_umoa.pdf', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, recueil des textes régissant les systèmes financiers décentralisés de l'UMOA : loi portant réglementation des SFD (articles 28 et 58)", 'url' => 'https://www.bceao.int/sites/default/files/2017-11/-recueil-des-textes-legaux-et-reglementaires-regissant-les-sfd-de-lumoa.pdf', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, avis n° 0019 du 2 octobre 2026 relatif aux transactions de monnaie électronique entre personnes physiques par PI-SPI", 'url' => 'https://www.bceao.int/sites/default/files/2026-10/AVIS%20N%C2%B0%200019%20%20DU%202%20OCTOBRE%202026%20%281%29.pdf', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, plateforme interopérable du système de paiement instantané (PI-SPI)", 'url' => 'https://pispi.bceao.int/', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, situation de la microfinance dans l'UMOA au 31 décembre 2025", 'url' => 'https://www.bceao.int/sites/default/files/2026-05/Situation_de_la_microfinance_%C3%A0_fin_d%C3%A9cembre_2025.pdf', 'date' => '2026-10-05'],
        ['titre' => "BCEAO, document-cadre de politique et de stratégie régionale d'inclusion financière dans l'UEMOA 2025-2030", 'url' => 'https://cofeb.bceao.int/sites/default/files/2025-10/DOCUMENT-CADRE%20DE%20POLITIQUE%20ET%20DE%20STRATEGIE%20REGIONALE%20D%27INCLUSION%20FINANCIERE%20DANS%20L%27UEMOA%20POUR%20LA%20PERIODE%202025-2030.pdf', 'date' => '2026-10-05'],
        ['titre' => "COBAC, règlement R-2016/04 relatif au contrôle interne dans les établissements de crédit et les holdings financières (site de la BEAC)", 'url' => 'https://www.beac.int/wp-content/uploads/2016/10/reglement_cobac_r-2016_04_relatif_au_controle_interne.pdf', 'date' => '2026-10-05'],
        ['titre' => "Autorité bancaire européenne, orientations sur l'octroi et le suivi des prêts (EBA/GL/2020/06), points 54 et 55", 'url' => 'https://www.eba.europa.eu/activities/single-rulebook/regulatory-activities/credit-risk/guidelines-loan-origination-and-monitoring', 'date' => '2026-10-05'],
        ['titre' => "Cour de justice de l'Union européenne, communiqué de presse n° 186/23 du 7 décembre 2023, affaire C-634/21 SCHUFA Holding (Scoring)", 'url' => 'https://curia.europa.eu/jcms/upload/docs/application/pdf/2023-12/cp230186fr.pdf', 'date' => '2026-10-05'],
        ['titre' => "EIOPA, Digital Operational Resilience Act (DORA), application au 17 janvier 2025", 'url' => 'https://www.eiopa.europa.eu/digital-operational-resilience-act-dora_en', 'date' => '2026-10-05'],
        ['titre' => "AMLA, communiqué du 1er octobre 2026 sur les normes techniques destinées au secteur privé (vigilance à l'égard de la clientèle)", 'url' => 'https://www.amla.europa.eu/press-release-amla-finalises-key-standards-private-sector_en', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, cadre réglementaire de l'IA : usages à haut risque et calendrier (page mise à jour le 3 août 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/policies/regulatory-framework-ai', 'date' => '2026-10-05'],
        ['titre' => "ACPR, gouvernance des algorithmes d'intelligence artificielle dans le secteur financier (document de réflexion, juin 2020)", 'url' => 'https://acpr.banque-france.fr/fr/publications-et-statistiques/publications/gouvernance-des-algorithmes-dintelligence-artificielle-dans-le-secteur-financier', 'date' => '2026-10-05'],
        ['titre' => "ARTCI, Autorité de protection : loi ivoirienne n° 2013-450 du 19 juin 2013 (article 7)", 'url' => 'https://www.autoritedeprotection.ci/lois/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "APDP, procédures de déclaration, d'autorisation et de transfert", 'url' => 'https://archive.apdp.bj/procedures/', 'date' => '2026-10-05'],
        ['titre' => "OMPI, WIPO Lex : loi sénégalaise n° 2008-12 du 25 janvier 2008 sur la protection des données à caractère personnel", 'url' => 'https://www.wipo.int/wipolex/fr/legislation/details/6229', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],


    'liens' => [
        'formations'  => ['ia-ethique-conformite', 'cybersecurite-employes', 'chatbot-whatsapp', 'gouvernance-ia', 'ia-audit-controle', 'whatsapp-business'],
        'services'    => ['formation-en-entreprise', 'integration-ia-entreprise', 'agents-ia-chatbot-whatsapp'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
