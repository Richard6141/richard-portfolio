<?php
// ============================================================
// data/metiers/assistants-direction.php · Page « formations par métier »
// pour les assistants de direction et les secrétaires (vague 1C, univers
// « Direction et gestion », prioritaire, statut F : Richard a déjà formé
// ce public). Angle propre : le secrétariat de direction au quotidien
// (agenda, courrier papier et courriels, comptes rendus de réunion,
// classement et archivage, préparation de dossiers, accueil,
// confidentialité des informations de direction). La page oriente vers
// les fiches ia-en-entreprise, microsoft-365-google-workspace,
// excel-google-sheets et outils-collaboratifs, sans en reprendre le texte.
// Sources lues le 05/10/2026 : loi béninoise n° 2017-20 (articles 266 à
// 271, 284, 285, 384 à 386, 415, PDF du SGG), AUDCIF (article 24, JO OHADA
// du 15/02/2017), Service-public Entreprendre (durées de conservation,
// vérifiée le 01/07/2024), code pénal français (article 226-1, Légifrance),
// CNIL (RGPD, article 28), Cybermalveillance.gouv.fr (fiche FOVI, mise à
// jour du 15/09/2026), FBI IC3 (rapport annuel 2025), OIT (indice du
// 20/05/2025), Microsoft Work Trend Index (09/05/2023), Microsoft Learn
// (Copilot dans les réunions Teams, 11/08/2026), aide Google Meet
// (« Prendre des notes pour moi »), documentation d'Odoo 20.0 (Documents),
// DataReportal (Sénégal, 08/11/2025). Faits repris des fiches déjà
// vérifiées : FDFP, 3FPT, FODEFCA, France Compétences, article 4 du
// règlement européen sur l'IA. Richard n'exerce pas le métier d'assistant
// et n'est certifié par aucun éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour assistants de direction et secrétaires : tenir l'agenda, le courrier, les comptes rendus et les archives de la direction plus vite, sans laisser sortir ce qu'elle vous confie",
    'title'   => "Formation IA pour assistants de direction | Richard SALANON",
    'meta'    => "Former assistants de direction et secrétaires à l'IA et aux outils : agenda, courrier, comptes rendus, archives, sans exposer la direction. Sur devis.",
    'en_bref' => "Cette page s'adresse aux assistantes et assistants de direction, aux secrétaires, aux chargés d'accueil et aux office managers qui veulent se servir de l'intelligence artificielle et des outils bureautiques pour le travail qu'ils font vraiment : agenda du dirigeant, courrier papier et courriels, comptes rendus, dossiers de réunion, classement et archivage. Elle décrit ce que ces outils changent au poste, ce qu'ils ne doivent jamais faire avec les informations de la direction, et un parcours type de deux jours en quatre demi-journées. La formation se tient en intra, en inter, à distance ou en formule hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-15',
    'maj'     => '2026-10-05',

    'univers'     => 'Direction et gestion',
    'prioritaire' => true,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : l'agenda du dirigeant, ses règles et ce qu'on peut confier à un assistant d'IA",
            'duree'  => '3 h 30',
            'points' => [
                "Relevé de la semaine type du dirigeant : rendez-vous fixes, réunions récurrentes, déplacements, plages de travail protégées, demandes qui arrivent par téléphone, par courriel ou sur WhatsApp.",
                "Écriture des règles d'agenda que l'assistant applique sans redemander : durées standard, temps de trajet, marges entre deux réunions, personnes prioritaires, créneaux jamais proposés.",
                "Préparer une fiche de rendez-vous en dix minutes : qui vient, pourquoi, historique des échanges, pièces à imprimer, question à trancher.",
                "Organiser un déplacement : itinéraire, horaires, fuseaux, coordonnées sur place, et ce qui ne s'envoie pas en clair dans une conversation de groupe.",
                "Ce qu'un assistant d'IA peut recevoir d'un agenda (des créneaux, des contraintes) et ce qu'il ne reçoit jamais (noms de visiteurs, objets sensibles, lieux de rendez-vous confidentiels).",
                "Exercice : traiter dix demandes de rendez-vous réelles, anonymisées, en appliquant les règles écrites le matin même.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : le courrier papier, les courriels et les demandes urgentes qui n'en sont pas",
            'duree'  => '3 h 30',
            'points' => [
                "Le registre du courrier arrivée et départ dans un tableur structuré : numéro d'ordre, date, expéditeur, objet, destinataire interne, suite donnée, date de clôture.",
                "Numériser un courrier entrant, le nommer selon une règle commune, le ranger au bon endroit et le relier à sa ligne du registre.",
                "Trier la boîte de la direction : ce que l'assistant traite seul, ce qu'il prépare pour signature, ce qu'il transmet tel quel, ce qu'il signale.",
                "Rédiger avec un assistant d'IA une réponse à partir d'un courrier déjà validé, puis la relire avec la grille du secrétariat : noms, dates, montants, engagements.",
                "La demande de virement « urgente et confidentielle » au nom du dirigeant : reconnaître le scénario, appliquer le contre-appel, prévenir la comptabilité.",
                "Exercice : traiter une pile de quinze courriers et courriels fictifs en quarante minutes, registre tenu à jour.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : préparer, tenir et suivre une réunion, de l'ordre du jour au relevé de décisions",
            'duree'  => '3 h 30',
            'points' => [
                "Construire un ordre du jour qui tient en une page et un dossier de séance numéroté, envoyé au bon moment aux bonnes personnes.",
                "Prendre des notes utiles pendant la réunion : décisions, actions, responsables, échéances, points reportés.",
                "Transcription automatique et notes générées par l'IA dans Teams ou Meet : réglages, information des participants, ce qui est conservé et où.",
                "Du brouillon au compte rendu : ce que l'assistant d'IA met en forme, ce que l'assistant de direction vérifie phrase par phrase avant diffusion.",
                "Le procès-verbal d'un conseil ou d'une assemblée : pourquoi il ne se rédige pas comme un compte rendu de réunion d'équipe, et qui le valide.",
                "Le tableau de suivi des décisions, relu chaque semaine avec le dirigeant, et les relances qui partent d'elles-mêmes.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : classer, archiver, protéger, puis évaluation sur un cas complet",
            'duree'  => '3 h 30',
            'points' => [
                "Un plan de classement de la direction en trois niveaux au plus, écrit et partagé, qui remplace les dossiers « Divers » et « À trier ».",
                "Règles de nommage des fichiers (date à l'envers, objet, version) et suppression des copies en double sur le bureau, la clé USB et la messagerie.",
                "Durées de conservation par type de document, d'après les textes du pays : pièces comptables, contrats, correspondance, procès-verbaux.",
                "Archiver un document numérisé pour qu'il garde sa valeur : format, intégrité, date, et ce que dit la loi sur la copie électronique.",
                "Qui voit quoi : dossiers de la direction, dossiers d'équipe, dossiers ouverts à un cabinet extérieur, et revue des accès à chaque départ.",
                "Évaluation : chaque participant traite seul une journée simulée de secrétariat (agenda, courrier, compte rendu, classement) et reçoit sa fiche réflexe.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Assistants de direction, secrétaires, chargés d'accueil, office managers, assistants d'équipe"],
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, ou modules séparés d'une demi-journée"],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus en salle'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent au travail d'un assistant de direction ?",
            'paragraphes' => [
                "Un assistant de direction vit au carrefour de toutes les informations de l'entreprise. Il voit passer l'agenda du dirigeant, les courriers des banques et de l'administration, les convocations du conseil, les projets de contrat, les relances des clients mécontents et les messages des proches du patron. Il les trie, les range, les fait circuler et les retrouve en trente secondes quand on les lui demande. C'est un métier d'écriture, de mémoire et de discrétion, et ce sont précisément ces trois choses que les outils numériques transforment aujourd'hui.",
                "L'écriture d'abord. Un assistant d'IA rédige un premier jet de courrier, reformule une note trop longue, traduit une invitation en anglais ou met au propre des notes de réunion prises à la volée. La mémoire ensuite. Un registre du courrier tenu dans un tableur, des fichiers nommés selon une règle commune et un plan de classement partagé remplacent les piles et les souvenirs personnels. Le temps enfin. Des rappels automatiques, des réponses types et des formulaires évitent de relancer à la main ce qui peut l'être sans risque.",
                "Le Work Trend Index publié le 9 mai 2023 par Microsoft, à partir d'une enquête menée auprès de 31 000 personnes dans 31 pays, mesure bien le terrain : le salarié moyen y passait 57 % de son temps dans Microsoft 365 à communiquer (réunions, courriels, messagerie instantanée), 62 % des répondants disaient perdre trop de temps à chercher de l'information, 55 % trouvaient floues les suites à donner en fin de réunion et 56 % jugeaient difficile d'en résumer le contenu. Ce sont les tâches que les directions confient déjà à leur secrétariat.",
                "Le dernier changement est le moins visible. Plus l'assistant gagne du temps avec les outils, plus il fait transiter d'informations de direction par des services extérieurs : un assistant d'IA hébergé à l'étranger, un robot de transcription invité dans une réunion, un lien de partage envoyé à un cabinet. La formation apprend donc les deux gestes ensemble : aller plus vite sur ce qui se répète, et savoir exactement ce qui ne quitte jamais le bureau de la direction. Richard SALANON n'exerce pas ce métier ; il forme à l'usage des outils, sur les documents et les habitudes du secrétariat.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles tâches du secrétariat un outil peut-il préparer, et qu'est-ce qui reste à l'assistant ou au dirigeant ?",
            'legende' => "Répartition proposée en formation et ajustée avec chaque direction. La dernière colonne donne le garde-fou à installer dès que l'outil intervient.",
            'entetes' => ['Tâche', "Ce que l'outil prépare", "Ce que l'assistant ou le dirigeant garde", 'Garde-fou'],
            'lignes'  => [
                ['Agenda du dirigeant', "Proposition de créneaux selon les règles écrites, rappels, temps de trajet", "L'arbitrage entre deux demandes, les rendez-vous sensibles, l'annulation", "Règles d'agenda validées par le dirigeant et relues chaque trimestre"],
                ['Courrier papier entrant', "Numérisation, lecture du texte scanné, proposition d'objet et de destinataire", "L'ouverture du pli, le tri du confidentiel, l'enregistrement au registre", "Courrier marqué « personnel » ou « confidentiel » remis fermé à son destinataire"],
                ['Courriels de la direction', "Tri par règles, brouillons de réponse, modèles pour les demandes répétées", "Toute réponse qui engage la direction, toute demande de paiement", "Contre-appel sur un numéro déjà connu avant tout virement ou changement de coordonnées bancaires"],
                ['Compte rendu de réunion', "Transcription, mise en forme des notes, tableau des décisions et des actions", "La relecture complète, la validation par le président de séance, la diffusion", "Participants informés avant toute transcription ou tout enregistrement"],
                ['Dossier de réunion ou de rendez-vous', "Synthèse des pièces, liste des points ouverts, historique des échanges", "Le choix des pièces transmises et le niveau de détail donné au dirigeant", "Chaque chiffre de la synthèse retrouvé dans le document source"],
                ['Classement et archivage', "Nommage automatique, rangement par règles, recherche dans les fichiers", "Le plan de classement, les durées de conservation, la destruction", "Liste écrite de ce qui se garde, combien de temps, et qui peut le détruire"],
                ['Accueil et standard', "Réponses types sur WhatsApp, prise de rendez-vous en ligne, registre des visiteurs", "L'accueil des visiteurs sensibles, l'appréciation d'une situation tendue", "Aucune information sur la présence ou l'emploi du temps du dirigeant donnée à un inconnu"],
                ['Signature et parapheur', "Circuit de validation, relances, signature électronique quand elle est admise", "La signature elle-même, qui reste celle du signataire", "Aucune signature apposée par l'assistant au nom du dirigeant sans délégation écrite"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qu'est-ce qu'un outil ne doit jamais faire au secrétariat de direction, et quels textes le disent ?",
            'intro' => "Le secrétariat manipule des informations qui ne lui appartiennent pas : celles de la direction, des salariés, des clients, des visiteurs. Chacune des limites ci-dessous repose sur un texte lu dans sa version officielle pendant la formation. Leur interprétation détaillée reste l'affaire du juriste ou du conseil de l'entreprise.",
            'items' => [
                ['titre' => "Enregistrer une réunion à l'insu des participants", 'texte' => "En France, l'article 226-1 du code pénal punit d'un an d'emprisonnement et de 45 000 euros d'amende le fait de capter, enregistrer ou transmettre sans le consentement de leur auteur des paroles prononcées à titre privé ou confidentiel. Le consentement n'est présumé que si l'enregistrement a lieu au vu et au su des intéressés, qui pouvaient s'y opposer. Un robot de transcription ajouté discrètement à une réunion de direction ne remplit pas cette condition."],
                ['titre' => "Confier des informations à un service sans garanties écrites", 'texte' => "Au Bénin, l'article 386 de la loi n° 2017-20 portant code du numérique impose, quand un traitement est confié à un sous-traitant, de choisir un prestataire qui apporte des garanties suffisantes et de fixer par contrat ses obligations de sécurité et de confidentialité ; l'article 385 pose le principe de confidentialité des données. En Europe, l'article 28 du RGPD exige lui aussi des garanties suffisantes et un contrat. Un compte gratuit d'assistant d'IA ouvert à titre personnel ne répond à aucune de ces conditions."],
                ['titre' => "Collecter sans prévenir", 'texte' => "L'article 384 de la loi n° 2017-20 fait de la transparence un principe, et l'article 415 impose d'informer la personne, au plus tard lors de la collecte, de l'identité du responsable, des finalités et des destinataires de ses données. Un registre des visiteurs, une prise de rendez-vous en ligne ou une transcription de réunion sont des collectes : les personnes concernées doivent savoir ce qui est noté, pourquoi et qui le lira."],
                ['titre' => "Détruire trop tôt ce que la loi fait garder", 'texte' => "L'article 24 de l'Acte uniforme OHADA relatif au droit comptable et à l'information financière impose de conserver dix ans les livres comptables et les pièces justificatives. En France, Service-public rappelle cinq ans pour les contrats et la correspondance commerciale, dix ans pour les pièces justificatives comme les factures. Un nettoyage de dossiers lancé par un outil de rangement automatique peut effacer en une minute ce qu'un contrôle fiscal réclamera trois ans plus tard."],
                ['titre' => "Tenir pour original une copie mal conservée", 'texte' => "Au Bénin, l'article 268 du code du numérique donne à la preuve électronique la même force probante que la preuve papier, à condition que son auteur soit identifiable et qu'elle soit conservée dans des conditions qui garantissent son intégrité et sa pérennité ; l'article 271 accorde à la copie électronique la valeur de l'acte si son intégrité est préservée. Un scan renommé, recadré puis réenregistré trois fois n'apporte plus cette garantie."],
                ['titre' => "Signer à la place du dirigeant", 'texte' => "Les articles 284 et 285 de la loi n° 2017-20 définissent la signature électronique comme ce qui identifie le signataire et manifeste son consentement, et réservent l'équivalence avec la signature manuscrite au procédé qualifié que le signataire garde sous son contrôle exclusif. Un assistant qui détient le code ou le certificat du dirigeant ne signe pas pour lui : il le prive de la preuve qu'il a lui-même consenti. L'article 267 exclut en outre certains actes, notamment de famille et de succession, de la forme électronique."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi le secrétariat de direction est-il la première cible de la fraude au président ?",
            'texte' => "Parce qu'il connaît la voix, le style et l'agenda du dirigeant, et qu'il a souvent la main sur les échanges avec la banque ou la comptabilité. Cybermalveillance.gouv.fr, dans sa fiche sur les faux ordres de virement mise à jour le 15 septembre 2026, décrit une demande présentée comme émanant d'un dirigeant, au caractère « urgent et confidentiel », et recommande une procédure de vérification et de validation hiérarchique interne non dérogeable, ainsi que la limitation des informations publiées sur les collaborateurs habilités. Le FBI signale en outre le clonage de voix parmi les procédés de ces fraudes. La formation fait répéter le contre-appel jusqu'au réflexe, même quand l'appel semble venir du dirigeant en voyage.",
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans un secrétariat de direction, de Cotonou à Genève ?",
            'items' => [
                ['secteur' => "Direction générale d'une PME de distribution, à Cotonou", 'probleme' => "L'assistante reçoit chaque jour une trentaine de plis, des appels et des messages WhatsApp pour le directeur ; trois mois plus tard, personne ne sait si la lettre de la banque a reçu une réponse.", 'solution' => "Un registre arrivée et départ dans un tableur partagé, un numéro d'ordre reporté au crayon sur chaque pli, la numérisation rangée sous ce même numéro et une colonne « suite donnée » relue chaque vendredi avec le directeur."],
                ['secteur' => "Secrétariat d'un groupe industriel, à Abidjan", 'probleme' => "Les comptes rendus des comités de direction arrivent dix jours après la réunion, quand les décisions ont déjà été oubliées ou contestées.", 'solution' => "Un modèle de relevé de décisions en une page, des notes structurées pendant la séance, la mise en forme assistée sur un compte professionnel de l'entreprise, puis la validation par le président du comité sous quarante-huit heures."],
                ['secteur' => "Cabinet de conseil, à Dakar", 'probleme' => "Un associé a invité un robot de prise de notes gratuit à une réunion avec un client, qui découvre ensuite l'enregistrement dans un courriel automatique.", 'solution' => "Une règle écrite : aucune transcription sans annonce en début de séance et sans accord du client, uniquement avec l'outil autorisé par le cabinet. L'assistante de direction tient la liste des réunions transcrites et la durée de conservation des fichiers."],
                ['secteur' => "Direction d'une entreprise de BTP, à Douala", 'probleme' => "Le directeur général voyage beaucoup ; ses rendez-vous se négocient par téléphone avec plusieurs interlocuteurs qui se marchent dessus, et l'assistante n'a jamais la version à jour.", 'solution' => "Un seul agenda de référence, des règles écrites (durées, marges, interlocuteurs prioritaires), une fiche de rendez-vous type et un point de dix minutes chaque matin, en présentiel ou par appel, pour arbitrer les demandes de la veille."],
                ['secteur' => "Siège d'une PME familiale, à Lyon", 'probleme' => "Le serveur de fichiers contient vingt ans de documents sans ordre, et l'entreprise ne sait plus quels contrats et quelles factures elle doit encore garder.", 'solution' => "Un plan de classement à trois niveaux, une table de conservation construite d'après Service-public, une campagne de tri menée service par service, et la destruction de ce qui a dépassé sa durée, décidée par écrit par la direction."],
                ['secteur' => "Fondation privée, à Genève", 'probleme' => "L'assistante prépare les dossiers du conseil de fondation en français et en anglais, avec des pièces confidentielles sur des donateurs.", 'solution' => "Les synthèses et traductions passent par l'assistant d'IA de l'organisation, après retrait des noms et des montants individuels ; le dossier final est relu en entier et transmis par un espace partagé dont les accès expirent après la séance."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils et systèmes un secrétariat de direction travaille-t-il, et que faut-il en savoir ?",
            'legende' => "Informations lues le 5 octobre 2026 sur les pages officielles des éditeurs. Les licences restent au nom de l'entreprise et ne font pas partie du prix de la formation ; aucun outil n'est imposé.",
            'entetes' => ['Outil ou système', 'Usage au secrétariat', "Ce qu'il faut savoir", 'Formation liée'],
            'lignes'  => [
                ['Outlook ou Gmail, agenda partagé', "Agenda du dirigeant, invitations, délégation, adresse commune de la direction", "La délégation d'agenda et de messagerie se règle dans la suite, sans jamais connaître le mot de passe du dirigeant", '<a href="/formations/microsoft-365-google-workspace">Microsoft 365 et Google Workspace avancés</a>'],
                ['Copilot dans les réunions Teams', "Questions sur la réunion en cours, récapitulatif, tâches de suivi", "Selon Microsoft Learn (page du 11 août 2026), il demande une licence complémentaire ; l'organisateur peut le limiter à la durée de la réunion, sans transcription conservée, ou le désactiver, ce qui coupe aussi l'enregistrement", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['Prise de notes de Google Meet', "Notes de réunion organisées dans un document Google Docs", "Selon l'aide de Google, la fonction demande une édition de Workspace ou un forfait d'IA éligible, informe tous les participants et range les notes dans le Drive de l'organisateur ; une seule langue à la fois, dont le français", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['Tableur (Excel, Google Sheets)', "Registre du courrier, suivi des décisions, liste des contrats et de leurs échéances, table de conservation", "Un registre ne sert que s'il a une ligne par pli, des listes de choix et une colonne de suite donnée remplie jusqu'au bout", '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Odoo Documents', "Classement des pièces de l'entreprise, partage, tri des documents entrants", "La documentation d'Odoo 20.0 indique que les éléments mis à la corbeille y restent 30 jours par défaut, que les fichiers comptables sont centralisés d'office par journal, et que le tri automatique par IA exige l'application Odoo AI", '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Dolibarr', "Pièces jointes rangées sur la fiche du tiers, de la commande ou de la facture", "Le document retrouve son contexte : on cherche le client, pas le nom du fichier", '<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['Notion, Trello, Asana ou Planner', "Suivi des dossiers de la direction, des actions décidées en réunion, des échéances", "Un outil de suivi n'est utile que si le dirigeant le consulte lui-même ; sinon, le tableau des décisions dans le tableur suffit", '<a href="/formations/outils-collaboratifs">Outils collaboratifs</a>'],
                ['WhatsApp Business', "Confirmations de rendez-vous, plans d'accès, réponses types de l'accueil", "Pratique pour joindre les visiteurs ; inadapté pour transmettre un dossier de conseil, un contrat ou un relevé", '<a href="/formations/whatsapp-business">WhatsApp Business</a>'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Que contient le parcours type d'un secrétariat de direction, demi-journée par demi-journée ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment le parcours s'adapte-t-il au poste de chacun dans le secrétariat ?",
            'legende' => "Les quatre demi-journées peuvent être suivies séparément. Les combinaisons ci-dessous sont les plus fréquentes ; elles se fixent au premier échange.",
            'entetes' => ['Poste', 'Demi-journées conseillées', 'Ce que la personne repart en sachant faire'],
            'lignes'  => [
                ['Assistant de direction générale', 'Les quatre', "Tenir l'agenda par règles écrites, traiter le courrier de la direction, produire un relevé de décisions sous 48 heures, classer et protéger les dossiers sensibles"],
                ["Secrétaire d'accueil et standard", 'Jour 1 matin et après-midi', "Prendre et confirmer les rendez-vous, tenir le registre du courrier et des visiteurs, filtrer les appels et les demandes urgentes"],
                ["Assistant d'équipe ou de plusieurs managers", 'Jour 1 matin, jour 2 matin', "Arbitrer entre plusieurs agendas, préparer les réunions d'équipe, suivre les actions décidées"],
                ['Office manager', 'Jour 1 après-midi, jour 2 après-midi', "Organiser le courrier, le classement et l'archivage de tout le bureau, régler les accès aux dossiers partagés"],
                ['Assistant bilingue', 'Jour 1 après-midi, jour 2 matin', "Rédiger et traduire courriers et comptes rendus avec l'IA, puis contrôler les termes, les noms et les chiffres dans les deux langues"],
                ['Secrétaire de séance d\'un conseil ou d\'un comité', 'Jour 2 matin et après-midi', "Préparer le dossier de séance, distinguer compte rendu et procès-verbal, archiver les registres et les pièces"],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la formation se prépare-t-elle sans que le formateur lise l'agenda ou le courrier de la direction ?",
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => "Vous décrivez le secrétariat : nombre de personnes, dirigeants servis, volume de courrier et de réunions, suite bureautique, assistants d'IA déjà utilisés, et ce qui a motivé la demande. Le premier échange, le cadrage et le devis sont gratuits."],
                ['titre' => 'Choix des situations de travail', 'duree' => 'Deux semaines avant', 'texte' => "On retient avec vous trois à cinq situations qui reviennent chaque semaine : une demande de rendez-vous difficile, un courrier type, une réunion à résumer, un dossier à classer. Les exercices partent de ces situations, pas d'un manuel."],
                ['titre' => 'Préparation des documents', 'duree' => 'Une semaine avant', 'texte' => "Le secrétariat remplace lui-même les noms, les montants et les objets sensibles dans les documents choisis. Le formateur reçoit des pièces déjà neutralisées ; aucun agenda réel, aucun courrier confidentiel ni aucun compte rendu de conseil ne lui est transmis."],
                ['titre' => 'Accord de la direction', 'duree' => 'Avant la session', 'texte' => "Le dirigeant servi valide les règles qui seront travaillées : ce que l'assistant peut décider seul dans l'agenda, ce qui peut passer par un assistant d'IA, quelles réunions peuvent être transcrites. Sans cet accord, l'assistant formé appliquerait des règles que personne n'a décidées."],
                ['titre' => 'Animation', 'duree' => 'Demi-journées de 3 h 30', 'texte' => "Chaque séquence part d'une situation du secrétariat, passe par la règle ou le texte qui s'applique, puis par le geste dans l'outil, sur le poste et le compte de chaque participant."],
                ['titre' => 'Supports et suivi', 'duree' => 'Fin de session, puis le mois suivant', 'texte' => "Les règles d'agenda, le modèle de registre du courrier, le gabarit de relevé de décisions, le plan de classement et la table de conservation construits en séance, une fiche réflexe et une attestation nominative. Un canal direct reste ouvert le mois suivant pour les questions d'application."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format retenir pour une assistante seule, un pool de secrétariat ou des assistants répartis sur plusieurs sites ?",
            'legende' => "Les formats se combinent : un atelier commun avec le dirigeant, puis des demi-journées ciblées selon les postes.",
            'entetes' => ['Format', 'Durée', 'Groupe', 'Situation type'],
            'lignes'  => [
                ["Atelier dirigeant et assistant", 'Deux heures', "Le dirigeant et la ou les personnes qui tiennent son agenda", "Écrire ensemble les règles d'agenda, de courrier et de confidentialité avant de former le reste du secrétariat"],
                ['Parcours complet, intra', '2 jours en 4 demi-journées', '10 personnes au plus', "Pool de secrétariat d'une entreprise ou d'un groupe qui veut harmoniser ses pratiques"],
                ['Module isolé', 'Une demi-journée', "4 à 10 personnes d'un même poste", "Une équipe d'accueil avant l'ouverture d'un nouveau site, des secrétaires de séance avant la saison des assemblées"],
                ['Session mutualisée, inter', '1 ou 2 jours', 'Une ou deux personnes par structure', "Assistantes uniques de PME, de cabinets ou d'associations ; les exercices utilisent des documents fictifs"],
                ['À distance', 'Séances de 2 heures', '8 personnes au plus', "Assistants répartis entre un siège et des filiales, ou dans plusieurs pays"],
                ['Hybride', 'Une demi-journée en salle, puis séances à distance', '10 personnes au plus', "Prise en main en présence, puis application sur la semaine réelle avec un retour à distance"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'un secrétariat de direction, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "Aucun montant n'est affiché : chaque formule est chiffrée sur devis après le premier échange, et le devis détaille ce qu'il comprend. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les abonnements à la suite bureautique ou aux assistants d'IA restent payés par l'entreprise à l'éditeur.",
            'items'      => [
                ['offre' => 'Atelier dirigeant et assistant', 'prix' => 'Sur devis', 'inclus' => ["Deux heures à deux", "Règles d'agenda, de courrier et de confidentialité écrites", 'Conseil sur la suite à donner']],
                ['offre' => 'Module ciblé', 'prix' => 'Sur devis', 'inclus' => ['Agenda, courrier, réunions ou classement', 'Exercices sur vos situations, documents neutralisés', 'Modèles modifiables et attestation']],
                ['offre' => 'Parcours secrétariat complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Registre, gabarit de relevé de décisions, plan de classement et table de conservation construits en séance', 'Évaluation sur une journée simulée', 'Canal direct le mois suivant']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes.",
                "Le nombre de demi-journées et les modules retenus.",
                "La suite utilisée : Microsoft 365, Google Workspace, ou les deux.",
                "Le temps de préparation des situations de travail et des modèles.",
                "Le lieu : vos bureaux à Cotonou, une autre ville du Bénin, un autre pays, ou la distance.",
                "La langue des séances et des supports, français ou anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut financer la formation d'une assistante ou d'un secrétariat ?",
            'paragraphes' => [
                "Le plus souvent, l'entreprise elle-même, sur son budget de fonctionnement. Un fonds de formation peut parfois intervenir, selon le pays et les règles du fonds, mais rien n'est automatique et aucune prise en charge n'est promise ici. La bonne démarche consiste à poser la question au fonds par écrit, programme et devis joints, avant de signer quoi que ce soit.",
                "En Côte d'Ivoire, la page du <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> consultée le 5 octobre 2026 réserve le dépôt d'un plan de formation aux entreprises à jour de leurs deux taxes ; une session bureautique et IA pour le secrétariat s'y inscrit comme une action parmi d'autres. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> dispose d'un guichet consacré au personnel des entreprises.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que depuis le 1er janvier 2022, seul un prestataire certifié Qualiopi accède aux fonds publics et mutualisés, dont ceux des opérateurs de compétences. Richard SALANON n'a pas cette certification : prévoyez la dépense sans financement, sauf réponse écrite contraire de votre fonds. Le programme, les feuilles de présence signées et l'attestation sont remis dans tous les cas, et servent aussi de trace interne des actions de maîtrise de l'IA qu'attend l'article 4 du règlement européen sur l'IA, applicable depuis le 2 février 2025.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les secrétariats qui s'outillent seuls ?",
            'intro' => "Aucune de ces erreurs ne vient d'un manque de sérieux. Elles naissent presque toujours d'une bonne intention : rendre service vite, à un dirigeant pressé, avec l'outil qui se trouvait sous la main.",
            'items' => [
                ['titre' => "Coller le compte rendu du conseil dans un assistant gratuit", 'texte' => "Pour gagner une heure, on confie à un compte personnel des décisions stratégiques, des noms et des chiffres non publiés. Le même travail se fait sur un compte professionnel administré, ou sur des notes dont on a d'abord retiré ce qui identifie les personnes et les montants."],
                ['titre' => "Laisser un robot de transcription s'inviter partout", 'texte' => "Certains outils rejoignent automatiquement toutes les réunions de l'agenda, y compris celles où l'on parle d'un licenciement ou d'une cession. On désactive cette option, on choisit les réunions transcrites une par une et on l'annonce à l'ouverture de la séance."],
                ['titre' => "Diffuser le compte rendu généré sans relecture", 'texte' => "La transcription a mal compris un nom, inversé un chiffre ou transformé une hypothèse en décision. Le compte rendu part ainsi à quinze destinataires. Une relecture complète, puis la validation du président de séance, restent obligatoires avant toute diffusion."],
                ['titre' => "Tenir l'agenda sans règles écrites", 'texte' => "Chaque arbitrage se refait au téléphone et chaque absence de l'assistant désorganise la semaine. Dix règles écrites et validées par le dirigeant suffisent à rendre l'agenda prévisible, transmissible à un remplaçant et utilisable par un outil."],
                ['titre' => "Numériser sans registre", 'texte' => "Le scanner produit des fichiers « Scan_0457.pdf » que personne ne retrouvera. Un courrier numérisé n'est rangé que s'il porte le numéro de sa ligne au registre, une date et un objet lisible dans son nom."],
                ['titre' => "Créer un dossier « Direction » ouvert à tous", 'texte' => "Pour faciliter les remplacements, le dossier partagé de la direction a été ouvert à tout le service. On distingue plutôt un espace réservé au dirigeant et à son assistant, un espace d'équipe, et des liens temporaires pour l'extérieur."],
                ['titre' => "Céder à l'urgence d'un message qui imite le patron", 'texte' => "Un courriel ou un message vocal demande un virement discret avant la fin de la journée. La règle apprise en formation ne souffre aucune exception : contre-appel sur un numéro déjà connu, et deuxième validation par la comptabilité."],
                ['titre' => "Tout garder par peur de jeter", 'texte' => "Les dossiers s'accumulent, la recherche devient impossible et des données personnelles dorment dix ans de trop. La table de conservation dit ce qui se garde et combien de temps ; la destruction se décide par écrit et se trace."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés et datés un secrétariat de direction doit-il connaître ?",
            'items' => [
                ['valeur' => '62 %', 'libelle' => "Des 31 000 personnes interrogées dans 31 pays disaient perdre trop de temps à chercher de l'information dans leur journée de travail (enquête publiée le 9 mai 2023)", 'source' => 'Microsoft, Work Trend Index 2023', 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/will-ai-fix-work'],
                ['valeur' => '56 %', 'libelle' => "Des mêmes répondants jugeaient difficile de résumer ce qui s'était dit en réunion, et 55 % trouvaient floues les suites à donner", 'source' => 'Microsoft, Work Trend Index 2023', 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/will-ai-fix-work'],
                ['valeur' => '9,6 %', 'libelle' => "De l'emploi féminin des pays à revenu élevé se trouve dans la catégorie la plus exposée à l'IA générative, contre 3,5 % de l'emploi masculin ; les métiers de bureau restent les plus exposés (étude du 20 mai 2025)", 'source' => "Organisation internationale du Travail, indice d'exposition à l'IA générative", 'url' => 'https://www.ilo.org/publications/generative-ai-and-jobs-refined-global-index-occupational-exposure'],
                ['valeur' => '3,05 milliards $', 'libelle' => "Pertes déclarées au FBI en 2025 pour la compromission de messagerie d'entreprise, contre 2,77 milliards en 2024 ; plus de 30 millions de dollars concernent des fraudes où l'IA est intervenue", 'source' => "FBI, rapport annuel 2025 de l'Internet Crime Complaint Center", 'url' => 'https://www.ic3.gov/AnnualReport/Reports/2025_IC3Report.pdf'],
                ['valeur' => '10 ans', 'libelle' => "Durée de conservation des livres comptables et des pièces justificatives fixée par l'article 24 de l'Acte uniforme relatif au droit comptable (Journal officiel de l'OHADA du 15 février 2017)", 'source' => "OHADA, Acte uniforme relatif au droit comptable et à l'information financière", 'url' => 'https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/'],
                ['valeur' => '5 ans', 'libelle' => "Durée de conservation des contrats commerciaux et de la correspondance commerciale, papier ou électronique, en France (fiche vérifiée le 1er juillet 2024)", 'source' => "Service-public Entreprendre, durée de conservation des documents", 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F10029'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour un secrétariat ?",
            'legende' => "Chaque fiche a son propre programme. Le parcours du secrétariat en reprend les gestes utiles au poste ; les fiches permettent d'aller plus loin sur un outil.",
            'entetes' => ['Formation', "Ce qu'elle apporte au secrétariat", 'Pour qui en priorité'],
            'lignes'  => [
                ['<a href="/formations/ia-en-entreprise">IA en entreprise : productivité des équipes</a>', "La méthode complète pour rédiger, synthétiser et analyser avec un assistant, sur une tâche mesurée avant et après", "Assistants de direction, assistants bilingues"],
                ['<a href="/formations/microsoft-365-google-workspace">Microsoft 365 et Google Workspace avancés</a>', "Boîtes communes, délégation d'agenda, partage de fichiers et droits d'accès réglés proprement", "Tout le secrétariat, et le référent qui administre la suite"],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', "Des registres et des tableaux de suivi fiables : listes de choix, contrôles, tableaux croisés", 'Secrétaires et office managers'],
                ['<a href="/formations/outils-collaboratifs">Outils collaboratifs : Notion, Trello, Asana, Teams</a>', "Suivre les dossiers et les actions de la direction dans un outil partagé, et choisir lequel", 'Assistants de plusieurs managers, office managers'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', "Les réflexes face à l'hameçonnage, aux faux ordres de virement et aux mots de passe partagés", 'Tout le secrétariat, très exposé'],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Les règles sur les données personnelles, le secret et la transparence, lues pays par pays", 'Assistant de direction générale, secrétaire de séance'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Courrier papier, connexion, langues : que change le terrain africain ou européen pour un secrétariat ?",
            'paragraphes' => [
                "En Afrique de l'Ouest et du Centre, le courrier papier reste au cœur du secrétariat de direction : lettres des administrations, des banques et des partenaires, plis remis en main propre, cachet de l'entreprise, décharge signée. La digitalisation n'y remplace pas le papier du jour au lendemain ; elle double chaque pli d'une ligne au registre et d'une copie numérique bien nommée. C'est pourquoi le code du numérique béninois, avec ses articles 268 à 271 sur la preuve, la conservation et la copie électronique, compte autant pour une assistante de Cotonou que la dernière fonction d'IA de sa messagerie.",
                "La connexion décide aussi des outils. Selon le rapport Digital 2026 de DataReportal publié le 8 novembre 2025, le Sénégal comptait 11,5 millions d'internautes à la fin de 2025, soit 60,6 % de la population, et 23,3 millions de connexions mobiles, 122 % de la population. Le téléphone est donc partout, l'ordinateur bien relié moins souvent. La formation privilégie des gestes qui tolèrent une coupure : documents préparés hors ligne, registre synchronisé quand le réseau revient, confirmation de rendez-vous par message plutôt que par un portail lourd.",
                "La langue compte enfin. Les assistants d'IA écrivent un français correct, mais calqué sur les usages de France ; une lettre à un ministère à Lomé ou à un notaire à Yaoundé obéit à d'autres formules. Le secrétariat apprend à leur fournir ses propres modèles et à relire les titres, les formules d'appel et les références. Au Cameroun, en Suisse, en Belgique ou au Canada, le bilinguisme du poste fait de la traduction assistée un vrai gain, à condition qu'un relecteur maîtrise les deux langues.",
                "En Europe, la question n'est pas l'accès aux outils mais la densité des règles : RGPD, droit pénal de l'enregistrement, durées de conservation, et pour les entreprises qui en relèvent le règlement européen sur l'IA. Un secrétariat qui sert une direction installée entre Abidjan et Paris applique la règle la plus stricte des deux par défaut, et garde une trace écrite de ses choix.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre secrétariat de direction avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des assistants de direction et des secrétaires à ces outils. Il n'exerce pas leur métier et ne prétend pas savoir mieux qu'eux comment servir leur direction : il apporte la maîtrise des assistants d'IA, des suites bureautiques, des tableurs, des outils de classement et des automatisations simples, et il construit chaque exercice à partir des situations réelles du secrétariat. Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il compte " . $ans . " ans d'expérience dans le numérique et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes.",
                "Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a> ; il a travaillé dans " . count((array) fait('pays_travailles')) . " pays, dont le Bénin, le Togo, la Côte d'Ivoire, le Sénégal, le Gabon, la France, la Belgique, la Suisse et le Canada. Il n'est certifié par aucun éditeur et ne revend aucune licence : il n'a aucun intérêt à faire changer de suite ou d'abonnement. Les questions de droit soulevées en séance sont renvoyées au conseil de l'entreprise.",
                "Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. Quand la formation révèle un besoin d'outillage, comme un registre du courrier relié au classement ou un circuit de validation des documents, il relève d'une mission de <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a> ou d'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA</a>. L'organisation des sessions pour plusieurs services est décrite sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>, et l'offre entière dans le <a href=\"/formations/\">catalogue des formations</a>, notamment le domaine <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>. Pour choisir un assistant d'IA, le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> détaille les offres.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre secrétariat ?",
            'texte' => "Faites écrire et valider par le dirigeant les règles d'agenda, de courrier et de confidentialité avant de former qui que ce soit. Outillez d'abord ce qui se répète : registre, modèles, mise en forme des notes, classement. Gardez à une personne chaque signature, chaque diffusion de compte rendu et chaque paiement. Annoncez toute transcription, contre-appelez toute demande de virement inhabituelle, et donnez à chaque type de document une durée de conservation écrite.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre secrétariat de direction à l'IA et aux outils numériques ?",
            'texte'  => "Indiquez le nombre de personnes, les dirigeants servis, la suite bureautique utilisée, le volume de courrier et de réunions, et ce que vous voulez améliorer en priorité : vous recevez une réponse sous 24 heures, puis un programme ajusté et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon secrétariat'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il déjà utiliser un assistant d'IA pour suivre la formation ?", 'r' => "Non. Savoir envoyer un courriel, ouvrir un fichier partagé et remplir un tableau suffit. Les premières heures partent des règles du secrétariat, pas de l'outil ; les participants qui utilisent déjà ChatGPT, Claude, Gemini ou Copilot y trouvent surtout la méthode pour le faire sans exposer la direction."],
        ['q' => "Peut-on faire rédiger les comptes rendus de réunion par l'IA ?", 'r' => "La mise en forme, oui : à partir de notes ou d'une transcription, l'outil produit un brouillon et un tableau des décisions. La relecture complète, la correction des noms et des chiffres, puis la validation par le président de séance restent le travail de l'assistant. Rien n'est diffusé sans ces trois étapes."],
        ['q' => "A-t-on le droit de transcrire ou d'enregistrer une réunion de direction ?", 'r' => "À condition que les participants le sachent et puissent s'y opposer. En France, l'article 226-1 du code pénal sanctionne l'enregistrement de paroles privées ou confidentielles sans consentement ; au Bénin, la loi n° 2017-20 impose d'informer les personnes au moment de la collecte. Teams et Meet préviennent les participants, mais l'annonce orale en début de séance reste la règle enseignée."],
        ['q' => "L'assistante peut-elle gérer l'agenda du dirigeant sans connaître son mot de passe ?", 'r' => "Oui, et c'est la seule bonne pratique. Microsoft 365 et Google Workspace permettent de déléguer l'agenda et la messagerie à un autre compte. Le réglage détaillé de ces délégations relève de la formation Microsoft 365 et Google Workspace avancés ; ce parcours-ci travaille les règles d'agenda que l'assistant applique une fois l'accès ouvert."],
        ['q' => "Un scan a-t-il la même valeur que le courrier original ?", 'r' => "Au Bénin, l'article 271 de la loi n° 2017-20 donne à la copie électronique la valeur de l'acte si son intégrité est préservée, et l'article 269 fixe les conditions d'une conservation électronique conforme. Cela suppose un fichier non retouché, daté et rangé de façon traçable. Pour les originaux qui portent une signature ou un cachet, la direction décide avec son conseil de ce qui se garde en papier."],
        ['q' => "Combien de temps garder le courrier, les contrats et les factures ?", 'r' => "Cela dépend du document et du pays. En zone OHADA, l'article 24 de l'Acte uniforme relatif au droit comptable impose dix ans pour les pièces comptables. En France, Service-public indique cinq ans pour les contrats et la correspondance commerciale, dix ans pour les factures. La formation fait construire une table de conservation propre à l'entreprise, à faire valider par son comptable ou son juriste."],
        ['q' => "Que faire si le dirigeant demande un virement urgent par message vocal ?", 'r' => "Appliquer la procédure prévue, même si la voix paraît familière : rappeler le dirigeant sur un numéro déjà connu, et faire valider le paiement par la comptabilité. Cybermalveillance.gouv.fr décrit cette fraude, présentée comme « urgente et confidentielle », et le FBI signale le clonage de voix parmi les procédés de la compromission de messagerie d'entreprise."],
        ['q' => "Quels documents ne doivent jamais passer par un assistant d'IA en ligne ?", 'r' => "Ceux que la direction a classés comme tels pendant la préparation : en général les dossiers de conseil ou d'assemblée non publiés, les projets de cession ou de recrutement de cadres, les données de santé, les relevés bancaires, les mots de passe. Les autres passent par un compte professionnel administré par l'entreprise, après retrait des noms et des montants quand c'est possible."],
        ['q' => "La formation peut-elle être suivie par une assistante seule dans sa structure ?", 'r' => "Oui, en session mutualisée avec d'autres structures ou à distance, en séances de deux heures. Un atelier de deux heures avec son dirigeant est alors conseillé en ouverture, pour écrire ensemble les règles qu'elle appliquera ensuite."],
        ['q' => "La formation couvre-t-elle Odoo ou Dolibarr ?", 'r' => "Elle montre comment le secrétariat y range et retrouve les documents rattachés aux clients, aux commandes ou aux factures, quand l'entreprise utilise déjà l'un de ces logiciels. La prise en main complète relève des formations Odoo pour vos équipes ou Dolibarr pour vos équipes, et le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo ou Dolibarr</a> aide à choisir entre les deux."],
        ['q' => "Combien coûte la formation, et comment la régler ?", 'r' => "Le prix est fixé sur devis, après un premier échange gratuit. Il dépend du nombre de participants, des modules retenus, de la suite utilisée, du lieu et du format. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Que reçoivent les participants à la fin ?", 'r' => "Les règles d'agenda validées, le modèle de registre du courrier, le gabarit de relevé de décisions, le plan de classement, la table de conservation, une fiche réflexe et une attestation nominative de fin de formation. Ce n'est ni un diplôme ni une certification."],
    ],

    'sources' => [
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 266 à 271, 284, 285, 384 à 386 et 415)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "OHADA, Acte uniforme relatif au droit comptable et à l'information financière (article 24, Journal officiel de l'OHADA, numéro spécial du 15 février 2017)", 'url' => 'https://www.ohada.org/acte-uniforme-relatif-au-droit-comptable-et-a-linformation-financiere-audcif/', 'date' => '2026-10-05'],
        ['titre' => "Service-public Entreprendre, durée de conservation des documents de l'entreprise (vérifiée le 1er juillet 2024)", 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F10029', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, article 226-1 du code pénal (atteinte à l'intimité de la vie privée), version en vigueur depuis le 23 mars 2024", 'url' => 'https://www.legifrance.gouv.fr/codes/article_lc/LEGIARTI000042193566', 'date' => '2026-10-05'],
        ['titre' => "CNIL, RGPD, chapitre 4 : responsable du traitement et sous-traitant (article 28)", 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => "Cybermalveillance.gouv.fr, la fraude au virement bancaire (FOVI) ou au faux ordre de virement (mise à jour du 15 septembre 2026)", 'url' => 'https://www.cybermalveillance.gouv.fr/tous-nos-contenus/fiches-reflexes/escroquerie-faux-ordres-virement-fovi', 'date' => '2026-10-05'],
        ['titre' => "FBI, Internet Crime Complaint Center, rapport annuel 2025", 'url' => 'https://www.ic3.gov/AnnualReport/Reports/2025_IC3Report.pdf', 'date' => '2026-10-05'],
        ['titre' => "Organisation internationale du Travail, Generative AI and jobs: a refined global index of occupational exposure (20 mai 2025)", 'url' => 'https://www.ilo.org/publications/generative-ai-and-jobs-refined-global-index-occupational-exposure', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, Work Trend Index 2023 : Will AI fix work? (9 mai 2023)", 'url' => 'https://www.microsoft.com/en-us/worklab/work-trend-index/will-ai-fix-work', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, gérer Microsoft Copilot dans les réunions et événements Teams (11 août 2026)", 'url' => 'https://learn.microsoft.com/fr-fr/microsoftteams/copilot-teams-transcription', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Meet, utiliser « Prendre des notes pour moi »", 'url' => 'https://support.google.com/meet/answer/14754931?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation de l'application Documents", 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/documents.html', 'date' => '2026-10-05'],
        ['titre' => "DataReportal, rapport Digital 2026 consacré au Sénégal (8 novembre 2025)", 'url' => 'https://datareportal.com/reports/digital-2026-senegal', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'microsoft-365-google-workspace', 'excel-google-sheets', 'outils-collaboratifs', 'cybersecurite-employes', 'ia-ethique-conformite'],
        'services'    => ['formation-en-entreprise', 'digitalisation-d-entreprise', 'integration-ia-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini', 'odoo-vs-dolibarr'],
    ],
];




