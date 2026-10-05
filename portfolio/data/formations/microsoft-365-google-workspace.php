<?php
// ============================================================
// data/formations/microsoft-365-google-workspace.php · Fiche formation
// « Microsoft 365 et Google Workspace avancés » (vague 1B, lot B, domaine
// erp-gestion). Angle propre : messagerie, agenda, partage de fichiers,
// droits d'accès, comptes partagés, arrivées et départs de salariés,
// double authentification imposée par l'administrateur, visioconférence.
// Sœurs non traitées : excel-google-sheets (le tableur), outils-collaboratifs
// (Notion, Trello, Asana, Teams comme outil de gestion de projet),
// cybersecurite-employes (réflexes individuels des salariés).
// Sources consultées le 05/10/2026 : pages d'offres Microsoft 365 (lues
// dans le navigateur), tarifs Google Workspace (lus dans le navigateur),
// Microsoft Learn (paramètres de sécurité par défaut, MFA obligatoire,
// boîtes partagées, départ d'un employé, partage SharePoint, limites
// Teams), aide Google Workspace (validation en deux étapes, suppression
// d'un utilisateur, partage externe, Drive partagés, exigences Gmail),
// CNIL, DataReportal, ARCEP Bénin, SGG du Bénin, FDFP, 3FPT,
// France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Microsoft 365 et Google Workspace avancés : organiser la messagerie, l'agenda et le partage, régler les droits d'accès et protéger les comptes de toute l'équipe",
    'title'   => "Formation Microsoft 365, Google Workspace | Richard SALANON",
    'meta'    => "Formation Microsoft 365 et Google Workspace : messagerie, agenda, partage, droits, départs de salariés et double authentification, sur vos comptes.",
    'en_bref' => "Une formation pour les équipes qui travaillent déjà dans Microsoft 365 ou Google Workspace sans en tirer l'ordre attendu : boîtes de réception débordées, adresses partagées dont tout le monde connaît le mot de passe, fichiers partagés à n'importe qui, comptes d'anciens salariés encore ouverts. Elle s'adresse à toute l'équipe pour l'usage quotidien et au référent qui administre la suite pour les réglages de sécurité. Le programme tient sur deux jours découpés en demi-journées, la dernière étant réservée aux référents, et se prolonge par un suivi de deux heures ; il se donne sur site, en groupe inter-entreprises, en visioconférence ou en mêlant les deux. Le tarif est établi sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'erp-gestion',
    'forte'   => false,
    'duree'   => "2 jours en quatre demi-journées, dont une pour les référents, plus un suivi de 2 heures",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : une messagerie qui sert le travail au lieu de l'interrompre",
            'duree'  => '3 h 30',
            'points' => [
                "État des lieux à l'écran : nombre de messages non lus, dossiers ou libellés existants, adresses que chacun consulte en plus de la sienne.",
                "Outlook et Gmail côte à côte : dossiers contre libellés, conversations groupées, archivage, et ce que « supprimer » veut dire dans chaque outil.",
                "Règles et filtres qui trient à l'arrivée : factures fournisseurs, notifications de logiciels, copies pour information.",
                "La recherche avancée par expéditeur, période, pièce jointe ou mot exact, pour ne plus garder tout en vue « au cas où ».",
                "Signature conforme, réponse d'absence avec un contact de remplacement, modèles de réponse pour les demandes répétées.",
                "Adresses communes : boîte partagée dans Microsoft 365, groupe en boîte de réception collaborative dans Google Workspace, délégation d'une boîte à un assistant.",
                "Exercice : chacun ramène sa boîte de réception sous la barre fixée en début de séance et écrit trois règles de tri qui tournent seules.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : l'agenda partagé et la visioconférence sans incident",
            'duree'  => '3 h 30',
            'points' => [
                "Agendas personnels, agendas d'équipe et ressources réservables : salle de réunion, véhicule, vidéoprojecteur.",
                "Partager ses disponibilités sans exposer le détail de ses rendez-vous, et déléguer la gestion de son agenda.",
                "Inviter un client ou un partenaire extérieur : fuseau horaire, lien de visioconférence, ordre du jour joint.",
                "Teams et Meet : salle d'attente, rôles d'organisateur et de présentateur, partage d'écran, enregistrement et information préalable des participants.",
                "Réunions sur connexion faible : couper la vidéo entrante, rejoindre par téléphone, envoyer le support avant la réunion.",
                "Exercice : planifier une réunion avec un invité extérieur, la tenir à trois, puis retrouver l'enregistrement et le compte rendu au bon endroit.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : ranger, partager et retrouver les fichiers de l'entreprise",
            'duree'  => '3 h 30',
            'points' => [
                "Espace personnel ou espace d'équipe : OneDrive et SharePoint d'un côté, Mon Drive et les Drive partagés de l'autre, et à qui appartient chaque fichier.",
                "Les trois types de lien : personnes précises, toute l'organisation, toute personne disposant du lien. Quand choisir lequel.",
                "Lecture, commentaire ou modification : donner le droit juste, fixer une date d'expiration, retirer un accès devenu inutile.",
                "Coédition d'un même document, historique des versions et restauration d'un état antérieur.",
                "Synchronisation sur l'ordinateur et travail hors connexion, pour les journées où Internet manque.",
                "Exercice : chacun retrouve trois fichiers qu'il a partagés avec l'extérieur, vérifie qui y accède encore et corrige ce qui doit l'être.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi (référents et administrateurs) : comptes, droits et sécurité de la suite",
            'duree'  => '3 h 30',
            'points' => [
                "Le centre d'administration Microsoft 365 et la console d'administration Google : utilisateurs, licences, groupes, alias et rôles d'administrateur.",
                "Un compte nominatif par personne, deux administrateurs nommés, et des comptes d'accès d'urgence rangés hors de l'usage quotidien.",
                "Imposer la double authentification à toute l'organisation : paramètres de sécurité par défaut chez Microsoft, validation en deux étapes obligatoire chez Google.",
                "Régler le partage externe au niveau de l'organisation : domaines autorisés, expiration des liens ouverts, avertissement avant un partage hors de l'entreprise.",
                "La procédure d'arrivée et de départ d'un salarié, écrite étape par étape, avec le sort de sa messagerie, de ses fichiers et de sa licence.",
                "Messagerie sur le nom de domaine de l'entreprise : enregistrements SPF, DKIM et DMARC, et pourquoi des devis finissent dans les courriers indésirables.",
                "Exercice : simuler sur un compte de test le départ d'un salarié, de bout en bout, sans perdre un message ni un fichier.",
            ],
        ],
        [
            'titre'  => "Trois à quatre semaines plus tard : séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Relecture des réglages faits pendant la formation : double authentification, partage externe, boîtes communes.",
                "Questions apparues à l'usage et gestes à reprendre.",
                "Contrôle d'un premier départ ou d'une première arrivée traité seul par le référent, s'il y en a eu un.",
                "Mise à jour des fiches pratiques et de la procédure écrite.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "Quatre demi-journées sur 2 jours, et un suivi de 2 heures"],
        ['l' => 'Public', 'v' => "Toute l'équipe pour l'usage, le référent de la suite pour l'administration"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride, sur vos propres comptes"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'apprend-on à faire pendant ces deux jours, et que laisse la formation de côté ?",
            'paragraphes' => [
                "Beaucoup d'entreprises paient une suite bureautique en ligne depuis des années et ne s'en servent que comme d'une messagerie améliorée. Les adresses du type contact@ se consultent avec un mot de passe que tout le monde connaît, les fichiers circulent en pièce jointe, l'agenda de l'équipe n'est à jour que pour le dirigeant, et personne ne sait vraiment qui peut ouvrir le dossier des salaires. Cette formation remet de l'ordre dans ce que la suite fait déjà, sans rien acheter de plus, et donne au référent les moyens de tenir ces réglages dans la durée.",
                "Six gestes sont contrôlés sur le poste de chaque participant avant la fin de la session. Trier sa messagerie par des règles qui tournent sans lui. Travailler dans une boîte commune sans en connaître le mot de passe. Partager un agenda ou ses disponibilités avec le bon niveau de détail. Tenir une visioconférence avec un invité extérieur. Partager un fichier avec le lien adapté, puis retirer l'accès. Retrouver une version antérieure d'un document. Le référent sait en plus imposer la double authentification, régler le partage externe et traiter un départ de salarié sans perte.",
                "Plusieurs sujets voisins ont leur propre formation. Les formules, les tableaux croisés et les contrôles de classeurs relèvent de la <a href=\"/formations/excel-google-sheets\">formation au tableur, sur Excel et Google Sheets</a>. L'organisation des tâches et des projets dans Notion, Trello, Asana ou dans les équipes et canaux de Teams relève de la formation aux outils collaboratifs du catalogue. Les réflexes de chaque salarié face à un faux message, la gestion de ses mots de passe et l'activation de la double authentification sur ses comptes personnels relèvent de la <a href=\"/formations/cybersecurite-employes\">formation cybersécurité pour les employés</a>.",
                "La formation ne remplace pas non plus un chantier technique. Changer de suite, migrer dix ans de courriels de Gmail vers Outlook ou l'inverse, ou rattacher un nom de domaine à la messagerie se prépare et se réalise comme un projet, avec la <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a> ou la <a href=\"/services/maintenance-support\">maintenance et le support</a>. La formation intervient sur une suite déjà en service, ou juste après une migration, pour que les nouveaux réglages soient compris et respectés par ceux qui s'en servent.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qui suit quelle demi-journée, avec quel niveau et quel équipement ?",
            'intro' => "Deux publics suivent la formation, sur des demi-journées différentes : ceux qui utilisent la suite toute la journée, et la personne qui l'administre, souvent sans en avoir le titre. Un court questionnaire envoyé avant la session indique quelle suite, quelle offre et quels usages réels.",
            'items' => [
                ['titre' => "Assistants, secrétariat et accueil", 'texte' => "Ils tiennent les adresses communes, l'agenda du dirigeant et les réservations de salle. Ce sont eux qui gagnent le plus à la boîte partagée, à la délégation d'agenda et aux modèles de réponse."],
                ['titre' => "Commerciaux et service client", 'texte' => "Ils échangent avec l'extérieur toute la journée, envoient des devis volumineux et invitent des clients en visioconférence. Le partage par lien au lieu de la pièce jointe et la réunion bien préparée changent leur quotidien."],
                ['titre' => "Comptabilité, ressources humaines et direction", 'texte' => "Ils détiennent les fichiers les plus sensibles : paie, contrats, relevés. Pour eux, la séance insiste sur les droits d'accès, les liens qui expirent et la vérification de qui voit quoi."],
                ['titre' => "Le référent de la suite", 'texte' => "Un salarié à l'aise avec l'informatique, un responsable administratif ou le dirigeant lui-même, qui crée les comptes et paie les licences. La demi-journée d'administration lui est réservée, avec un second référent si possible pour les absences."],
                ['titre' => "Niveau attendu", 'texte' => "Savoir envoyer un courriel, ouvrir un fichier en ligne et rejoindre une réunion suffit pour les trois premières demi-journées. Le référent doit déjà s'être connecté une fois à la console d'administration, même sans y avoir rien réglé."],
                ['titre' => "Comptes et accès", 'texte' => "Un compte professionnel de la suite par participant, sur le nom de domaine de l'entreprise. Pour la demi-journée d'administration, un accès administrateur et, idéalement, un compte de test à créer et à supprimer pendant l'exercice."],
                ['titre' => "Matériel", 'texte' => "Un ordinateur par personne pour les exercices de messagerie et de partage, et son téléphone professionnel ou personnel pour la double authentification et les applications mobiles. Un casque avec micro aide beaucoup pour les exercices de visioconférence."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices les participants réalisent-ils sur leurs propres comptes ?",
            'items' => [
                ['titre' => "La boîte de réception ramenée sous contrôle", 'duree' => '45 minutes', 'texte' => "Chacun note son nombre de messages non lus, crée trois règles ou filtres adaptés à son poste, archive ce qui est traité et finit la séance avec une boîte qui ne contient plus que ce qui attend une action. Le chiffre de départ et celui d'arrivée sont notés sur sa fiche."],
                ['titre' => "L'adresse commune sans mot de passe partagé", 'duree' => '30 minutes', 'texte' => "Sur l'adresse contact@ ou commandes@ de l'entreprise, les personnes autorisées l'ouvrent depuis leur propre compte, répondent au nom de l'adresse et vérifient que l'ancien mot de passe ne sert plus à rien."],
                ['titre' => "La réunion avec un invité extérieur", 'duree' => '40 minutes', 'texte' => "Par groupes de trois, un participant joue le client. L'organisateur planifie, règle la salle d'attente, partage son écran, enregistre après avoir prévenu, puis chacun retrouve l'enregistrement et les notes là où l'équipe les range."],
                ['titre' => "L'audit de ses propres partages", 'duree' => '35 minutes', 'texte' => "Chacun affiche les fichiers qu'il a partagés, repère ceux qui sont ouverts à toute personne disposant du lien et ceux partagés avec d'anciens partenaires, puis corrige. Personne ne projette son écran : on compare seulement les chiffres avant et après."],
                ['titre' => "Le dossier d'équipe déplacé au bon endroit", 'duree' => '30 minutes', 'texte' => "Un dossier de travail qui vit dans l'espace personnel d'un salarié est déplacé vers un site SharePoint ou un Drive partagé, avec les bons membres et les bons droits. Le jour où ce salarié partira, le dossier restera."],
                ['titre' => "La double authentification imposée", 'duree' => '45 minutes', 'texte' => "Pour le référent : vérification de l'état des comptes, choix des méthodes autorisées, date d'application annoncée à l'équipe, et contrôle qu'aucun compte d'administrateur n'en est dispensé."],
                ['titre' => "Le départ simulé d'un salarié", 'duree' => '50 minutes', 'texte' => "Sur un compte de test rempli la veille, le référent bloque la connexion, confie la messagerie et les fichiers à un collègue, libère la licence et supprime le compte, en suivant la procédure écrite pendant la séance. On vérifie ensuite que rien d'utile n'a disparu."],
            ],
        ],

        [
            'type'    => 'tableau',
            'titre'   => "Microsoft 365 ou Google Workspace : quels outils se répondent d'une suite à l'autre ?",
            'legende' => "Les deux suites couvrent les mêmes besoins avec des noms et des logiques différentes. La formation se fait sur celle que vous utilisez ; ce tableau sert surtout aux équipes qui ont des partenaires sur l'autre suite, ou qui envisagent d'en changer.",
            'entetes' => ['Besoin', 'Dans Microsoft 365', 'Dans Google Workspace', 'Ce qui surprend en séance'],
            'lignes'  => [
                ['Lire et trier le courrier', 'Outlook, avec des dossiers et des règles', 'Gmail, avec des libellés et des filtres', "Un message peut porter plusieurs libellés dans Gmail, alors qu'il ne vit que dans un dossier dans Outlook."],
                ['Adresse commune à plusieurs personnes', 'Boîte aux lettres partagée, ouverte depuis le compte de chacun', 'Groupe Google réglé en boîte de réception collaborative, ou alias', "Ni l'une ni l'autre ne demande de connaître un mot de passe commun."],
                ['Fichiers personnels', 'OneDrive', 'Mon Drive', "Ce qui est rangé là appartient au salarié, et suit son compte s'il part."],
                ['Fichiers de l\'équipe', 'Sites SharePoint et fichiers des équipes Teams', 'Drive partagés', "Les fichiers y appartiennent à l'équipe, pas à celui qui les a déposés."],
                ['Visioconférence', 'Teams', 'Meet', "Les deux fonctionnent dans un navigateur, mais l'application reste plus stable sur une connexion faible."],
                ['Administration', "Centre d'administration Microsoft 365 et centre d'administration Microsoft Entra", "Console d'administration Google", "Les réglages de sécurité de Microsoft sont répartis entre plusieurs centres d'administration."],
                ['Double authentification pour tous', 'Paramètres de sécurité par défaut, ou accès conditionnel avec une licence Entra ID P1', 'Validation en deux étapes rendue obligatoire, par unité organisationnelle si besoin', "Chez Microsoft comme chez Google, les comptes d'administrateur y sont soumis d'office."],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Que faire, et dans quel ordre, quand un salarié quitte l'entreprise ?",
            'items' => [
                ['titre' => "Avant son départ : prévenir et préparer", 'duree' => 'Une à deux semaines avant', 'texte' => "La CNIL recommande d'avertir le salarié de la date de fermeture de son compte, pour qu'il récupère ses messages personnels. On liste avec lui les dossiers en cours, les fichiers qu'il possède, les abonnements créés avec son adresse et les clients qui lui écrivent directement."],
                ['titre' => "Le dernier jour : couper l'accès", 'duree' => 'Le jour même', 'texte' => "Le référent bloque la connexion, réinitialise le mot de passe et déconnecte les sessions ouvertes, y compris sur le téléphone. Microsoft place ces gestes en tête de sa procédure de départ, avant toute question sur les données."],
                ['titre' => "Le lendemain : confier la messagerie et les fichiers", 'duree' => 'Dans les jours qui suivent', 'texte' => "Chez Microsoft, la boîte peut être convertie en boîte partagée et confiée au successeur, ou ses messages transférés. Chez Google, on transfère la propriété des fichiers Drive et, à la suppression, l'agenda principal. Les dossiers rangés dans un site SharePoint ou un Drive partagé n'ont rien à déplacer."],
                ['titre' => "Ensuite : libérer la licence", 'duree' => 'Une fois les données confiées', 'texte' => "Selon la procédure de Microsoft, la messagerie, les contacts et l'agenda sont conservés 30 jours après le retrait de la licence, puis supprimés définitivement. Chez Google, retirer un compte d'un abonnement annuel ne réduit pas le nombre de licences payées : il faut le savoir avant le renouvellement."],
                ['titre' => "Enfin : supprimer le compte et clore le dossier", 'duree' => 'Après vérification', 'texte' => "Google laisse 20 jours pour restaurer un compte supprimé, Microsoft 30 jours. Passé ce délai, ce qui n'a pas été transféré est perdu. La CNIL demande que l'adresse nominative soit supprimée après le départ : on ne la garde pas ouverte indéfiniment « pour les clients »."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi une adresse comme contact@ ne doit-elle pas avoir de mot de passe connu de tous ?",
            'paragraphes' => [
                "C'est la question qui revient dans presque toutes les PME. L'adresse de contact, celle des commandes ou celle de la comptabilité a été créée comme un compte ordinaire, et son mot de passe circule sur un papier, dans un groupe WhatsApp ou au dos d'un agenda. Personne ne sait qui a répondu à tel client, le mot de passe ne change jamais, et un ancien salarié peut encore s'y connecter des mois après son départ. La double authentification y est impossible à tenir, puisqu'elle suppose un téléphone que tout le monde n'a pas en main.",
                "Les deux suites ont prévu mieux. Selon la page de Microsoft Learn consacrée aux boîtes aux lettres partagées, mise à jour le 13 mars 2026 et consultée le 5 octobre 2026, une boîte partagée stocke jusqu'à 50 Go sans licence, s'ouvre depuis la boîte de chaque personne autorisée, et la connexion directe à son compte doit rester bloquée. La même page fixe à 25 le nombre maximal d'utilisateurs et précise qu'une personne extérieure, par exemple avec une adresse Gmail, ne peut pas y accéder.",
                "Côté Google, la page des tarifs de Google Workspace, consultée le même jour, indique que les alias de groupe comme ventes@ ou assistance@ sont inclus dans le prix et ne comptent pas comme des utilisateurs supplémentaires. Un groupe réglé en boîte de réception collaborative permet en plus d'attribuer un message à quelqu'un et de le marquer comme traité. Dans les deux cas, on supprime l'ancien compte commun, on garde l'adresse, et chacun travaille avec son identité, ce qui rend chaque réponse traçable.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment imposer la double authentification à toute l'équipe sans bloquer personne ?",
            'paragraphes' => [
                "Activer la double authentification sur son propre compte est un réflexe individuel, enseigné dans la formation consacrée à la cybersécurité des employés. Ici, la question est celle de l'administrateur : comment la rendre obligatoire pour tous les comptes de l'entreprise, à une date annoncée, sans que la comptable soit bloquée le matin de la paie. C'est l'objet d'une bonne partie de la demi-journée réservée aux référents.",
                "Chez Microsoft, la documentation Microsoft Learn sur les paramètres de sécurité par défaut, consultée le 5 octobre 2026, indique qu'ils peuvent être déjà actifs sur les locataires créés à partir du 22 octobre 2019, qu'ils obligent chaque utilisateur à s'inscrire à l'authentification multifacteur et qu'ils bloquent l'authentification héritée, celle des anciens clients de messagerie en IMAP, POP3 ou SMTP. Depuis le 29 juillet 2024, la période de grâce de 14 jours qui laissait le temps de s'inscrire a disparu. Une autre page de Microsoft Learn, mise à jour le 3 avril 2026, précise que l'authentification multifacteur est exigée pour se connecter au centre d'administration Microsoft 365 depuis février 2025.",
                "Chez Google, l'aide de Google Workspace sur le déploiement de la validation en deux étapes, consultée le même jour, décrit cinq étapes : prévenir les utilisateurs, autoriser l'activation, les laisser s'inscrire, suivre l'adoption dans les rapports, puis l'imposer. L'administrateur peut accorder aux nouveaux arrivants un délai d'inscription d'un jour à six mois, choisir une date d'application qui prend effet dans les 24 à 48 heures, et exclure les codes par SMS ou appel. La page rappelle que Google applique d'office la validation en deux étapes aux comptes d'administrateur.",
                "Ce qui bloque en pratique n'est presque jamais le réglage. C'est le salarié sans smartphone, celui qui change de puce à chaque promotion d'opérateur, le compte d'une imprimante qui envoie des numérisations par courriel avec un vieux protocole, ou le dirigeant en déplacement le jour de l'activation. La séance passe ces cas un par un, prévoit les codes de secours et l'application d'authentification de préférence au SMS, et fixe la date d'application après l'inscription effective de tout le monde.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels réglages de partage de fichiers retenir pour une PME ?",
            'legende' => "Options décrites par la documentation de Microsoft sur le partage dans SharePoint et OneDrive et par l'aide de Google Workspace sur le partage externe, consultées le 5 octobre 2026. Le réglage conseillé dépend de votre activité ; il est discuté pendant la demi-journée des référents.",
            'entetes' => ['Situation', 'Réglage dans Microsoft 365', 'Réglage dans Google Workspace', 'Conseil de départ'],
            'lignes'  => [
                ["L'entreprise ne partage presque jamais à l'extérieur", "Partage externe réglé sur « Uniquement les personnes de votre organisation »", "Partage hors de l'organisation désactivé pour l'unité concernée", "Ouvrir le partage seulement pour le service qui en a besoin, par exemple le commercial."],
                ["Quelques clients et partenaires réguliers", "Invités existants, ou nouveaux et existants, avec une liste de domaines autorisés", "Partage limité aux domaines de confiance", "Tenir la liste des domaines à jour et la revoir à chaque fin de contrat."],
                ["Des liens ouverts à toute personne qui les reçoit", "Liens « Tout le monde » avec expiration obligatoire et lecture seule", "Partage public ou par lien, avec avertissement avant tout partage externe", "Réserver ce type de lien aux documents publics : catalogue, plaquette, fiche produit."],
                ["Un dossier sensible : paie, contrats, relevés", "Site SharePoint dédié, partage externe désactivé sur ce site", "Drive partagé dédié, membres choisis un par un", "Revoir la liste des membres au moins une fois par an, et à chaque départ."],
                ["Des personnes sans compte Microsoft ou Google", "Code de vérification envoyé à l'invité", "Partage avec des visiteurs sans compte Google", "Pratique pour un cabinet comptable externe ; à retirer en fin de mission."],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment les séances sont-elles conduites, et que reste-t-il à l'entreprise ?",
            'intro' => "On ne forme pas à une suite bureautique en la projetant au mur. Chaque geste est montré une fois sur un compte de démonstration, puis refait par chacun sur son propre compte, pendant que le formateur passe derrière les écrans.",
            'items' => [
                ['titre' => "Des groupes réduits et séparés par usage", 'texte' => "Les trois demi-journées d'usage accueillent de petits groupes, pour que chacun soit aidé quand une règle de tri ne se déclenche pas. Le référent suit la quatrième dans un groupe à part, parfois seul, parce qu'on y touche aux réglages de toute l'entreprise."],
                ['titre' => "Vos comptes, vos adresses, vos fichiers", 'texte' => "Les exercices portent sur la vraie boîte de chacun, les vraies adresses communes et les vrais dossiers partagés. Les contenus restent à l'écran de leur propriétaire : le formateur ne lit aucun courriel et ne demande aucun mot de passe."],
                ['titre' => "Un compte de test pour ce qui ne se rattrape pas", 'texte' => "Les réglages d'administration et la simulation de départ se font sur un compte créé pour l'occasion, jamais sur celui d'un salarié en poste. Une erreur de réglage se corrige alors sans conséquence."],
                ['titre' => "Une procédure écrite à la fin", 'texte' => "Le référent repart avec la procédure d'arrivée et de départ de son entreprise, rédigée pendant la séance avec ses propres noms d'adresses, de groupes et de dossiers, prête à être suivie par quelqu'un d'autre en son absence."],
                ['titre' => "Des fiches pratiques modifiables", 'texte' => "Une fiche d'une page par thème, messagerie, agenda, partage et réunion, illustrée avec les écrans de la suite utilisée, dans un format que l'entreprise peut adapter et remettre aux nouveaux arrivants."],
                ['titre' => "Une évaluation sur des gestes constatés", 'texte' => "La réussite ne se mesure pas à un questionnaire de satisfaction, mais à des faits : boîte de réception triée, adresse commune sans mot de passe partagé, double authentification active pour tous, partages externes revus. Chaque participant reçoit en outre une attestation de fin de formation."],
                ['titre' => "Un suivi pour ce qui glisse", 'texte' => "Le rendez-vous de suivi, organisé environ un mois après la dernière demi-journée, vérifie les réglages et traite les questions de l'usage réel. Entre-temps, le référent dispose d'un canal direct pour les questions d'application."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quelles offres travaille-t-on, et combien coûtent-elles chez Microsoft et chez Google ?",
            'legende' => "Prix publics pour la France, relevés le 5 octobre 2026 dans le navigateur sur les pages officielles de Microsoft et de Google, hors taxes, par utilisateur et par mois. Un autre pays de facturation donne d'autres montants, et les éditeurs les révisent régulièrement. Aucune offre supérieure n'est nécessaire : les exercices s'adaptent à celle déjà souscrite.",
            'entetes' => ['Offre', 'Prix relevé', 'Ce qui compte pour la formation'],
            'lignes'  => [
                ['Microsoft 365 Business Basic', "6,07 € HT en abonnement annuel, ou 7,28 € HT en abonnement mensuel ; la TVA n'est pas comprise, précise Microsoft", "Messagerie, Teams, 1 To de stockage en ligne par utilisateur, applications web et mobiles seulement. Suffit pour toute la formation."],
                ['Microsoft 365 Business Standard', "12,13 € HT en abonnement annuel, ou 14,56 € HT en abonnement mensuel", "Ajoute les applications de bureau, dont Outlook installé sur l'ordinateur, plus confortable pour les grosses boîtes."],
                ['Microsoft 365 Business Premium', "19,06 € HT en abonnement annuel, ou 22,87 € HT en abonnement mensuel", "Ajoute la gestion des appareils et une protection renforcée contre les menaces ; utile si l'entreprise veut contrôler les téléphones et ordinateurs."],
                ['Google Workspace Business Starter', "6,80 € par mois avec engagement annuel, 8,10 € sans engagement, facturés chaque mois, taxes non incluses selon Google", "30 Go de stockage par personne, mis en commun ; réunions Meet jusqu'à 100 participants."],
                ['Google Workspace Business Standard', "13,60 € avec engagement annuel, 16,20 € sans engagement", "2 To par personne, enregistrement des réunions dans Drive, réunions jusqu'à 150 participants."],
                ['Google Workspace Business Plus', "21,10 € avec engagement annuel, 25,30 € sans engagement", "5 To par personne, eDiscovery, réunions jusqu'à 500 participants avec suivi de la présence."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que faut-il savoir des abonnements avant de commander ou de renouveler ?",
            'paragraphes' => [
                "Chez Microsoft, la foire aux questions de la page des offres, consultée le 5 octobre 2026, distingue trois formules : un engagement mensuel payé chaque mois et résiliable à tout moment, un engagement annuel payé chaque mois, et un engagement annuel payé en une fois. Le prix affiché en premier est celui de l'abonnement annuel. Les trois offres Business sont limitées à 300 utilisateurs, et la même page signale des changements d'offres et de prix entrés en vigueur le 1er juillet 2026, avec des formules qui associent désormais Business Standard ou Business Premium à Copilot Business.",
                "Chez Google, la page des tarifs annonce une économie de 16 % pour un engagement d'un an, une facturation mensuelle dans tous les cas et des remises temporaires réservées aux nouveaux clients pendant les trois premiers mois. Les offres Business sont elles aussi plafonnées à 300 utilisateurs. Pour une PME dont l'effectif bouge, l'abonnement sans engagement coûte plus cher mais suit les arrivées et les départs ; l'engagement annuel fige le nombre de licences jusqu'à l'échéance.",
                "Ces règles ont un effet direct sur la procédure de départ enseignée au référent : une licence libérée dans un abonnement annuel ne fait pas baisser la facture, mais peut être réattribuée au prochain arrivant. La formation aide à lire sa propre facture et à vérifier, dans la console, combien de licences sont payées, combien sont attribuées et à qui. Il arrive souvent que des licences soient encore attribuées à des personnes parties depuis longtemps.",
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon votre secteur, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Cabinet d'expertise comptable, à Cotonou", 'probleme' => "Les pièces des clients arrivent par courriel dans la boîte de chaque collaborateur, et quand l'un d'eux part, personne ne sait plus où se trouvent les relevés d'un dossier. Le dossier des salaires du cabinet est partagé avec un lien ouvert depuis trois ans.", 'solution' => "Une adresse pieces@ en boîte commune, un Drive partagé ou un site par portefeuille de clients, des liens à expiration pour les échanges avec les clients, et une procédure de départ testée sur un compte fictif. Le lien ouvert est remplacé par un accès nominatif."],
                ['secteur' => "Distributeur avec plusieurs agences, à Abidjan et à Bouaké", 'probleme' => "Chaque agence a créé ses propres adresses Gmail gratuites, les commandes se perdent entre elles, et la direction ne peut pas retirer l'accès d'un vendeur parti.", 'solution' => "Passage préparé avec le référent vers des comptes sur le nom de domaine de l'entreprise, une adresse commandes@ par agence en groupe collaboratif, un agenda partagé des livraisons et la validation en deux étapes imposée avec un délai d'inscription d'une semaine."],
                ['secteur' => "ONG ou projet de coopération, à Dakar ou à Niamey", 'probleme' => "Les volontaires et consultants changent tous les six mois, avec des comptes jamais fermés, et les rapports au bailleur sont partagés avec des adresses personnelles.", 'solution' => "Une procédure d'arrivée et de départ calée sur la durée des contrats, des Drive partagés par projet, le partage limité aux domaines des partenaires, et une revue des accès à chaque fin de mission plutôt qu'une fois par an."],
                ['secteur' => "École privée ou centre de formation, à Lomé ou à Douala", 'probleme' => "Les réunions avec les parents et les cours en ligne se font sur des liens créés au hasard, sans salle d'attente, et des inconnus s'y sont déjà invités.", 'solution' => "Réunions planifiées depuis l'agenda, salle d'attente et rôles réglés par défaut, enregistrement annoncé au début, et un agenda de ressources pour les salles et le matériel partagé entre enseignants."],
                ['secteur' => "PME de services, en France ou en Belgique", 'probleme' => "Les devis envoyés aux clients finissent dans leurs courriers indésirables, et l'entreprise découvre que l'ancien prestataire informatique est toujours administrateur de la suite.", 'solution' => "Revue des rôles d'administrateur, retrait de l'ancien prestataire, vérification des enregistrements SPF, DKIM et DMARC du nom de domaine, puis séances à distance de deux à trois heures pour l'équipe sur la messagerie et le partage."],
                ['secteur' => "Association au Québec ou en Suisse", 'probleme' => "Les bénévoles se transmettent un identifiant unique pour l'adresse de l'association, et le bureau élu change chaque année.", 'solution' => "Une boîte commune ouverte depuis les comptes nominatifs, la double authentification pour tous, et une fiche de passation que le bureau sortant remet au bureau entrant avec la liste des accès à transférer."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Sur site, en groupe inter-entreprises, en visioconférence ou en formule mixte : quel format retenir ?",
            'options'  => ['Intra dans vos locaux', 'Inter-entreprises', 'À distance', 'Hybride'],
            'criteres' => [
                ['critere' => 'Comptes utilisés', 'valeurs' => ["Les comptes réels de l'équipe et un compte de test", "Des comptes de démonstration ; aucun réglage sur votre suite", "Les comptes réels, écran partagé par le formateur", "Les comptes réels, en salle puis à distance"]],
                ['critere' => 'Demi-journée des référents', 'valeurs' => ["Sur votre console, en petit comité", "Sur une console de démonstration", "Sur votre console, en séance individuelle", "Sur votre console, de préférence en salle"]],
                ['critere' => 'Rythme conseillé', 'valeurs' => ["Quatre demi-journées sur deux jours ou sur deux semaines", "Deux journées regroupées", "Séances de deux à trois heures", "Ouverture en salle, puis séances courtes en ligne"]],
                ['critere' => 'Pour qui', 'valeurs' => ["Une équipe entière sur un même site", "Un référent seul, ou quelques personnes de structures différentes", "Des équipes réparties entre plusieurs villes ou pays", "Une équipe mixte, avec des personnes peu à l'aise à l'écran"]],
                ['critere' => 'Limite', 'valeurs' => ["Mobilise l'équipe aux mêmes heures", "Les réglages appris restent à reproduire chez soi", "Les exercices de visioconférence demandent une bonne connexion", "Deux organisations à tenir"]],
            ],
            'verdict'  => "Pour la messagerie, l'agenda et le partage, la distance fonctionne bien, puisque l'on travaille de toute façon dans un navigateur. Pour la demi-journée d'administration, la présence ou la séance individuelle sur votre propre console donnent les meilleurs résultats, parce qu'un réglage de sécurité se règle sur la vraie suite, avec le référent aux commandes.",
        ],
        [
            'type'       => 'prix',
            'titre'      => "Quel budget prévoir pour la formation, et de quoi dépend-il ?",
            'intro'      => "Aucun tarif n'est publié : chaque session est chiffrée sur devis, une fois connus la suite utilisée, l'effectif et l'état des réglages. Rien n'est facturé avant la signature du devis, ni le premier échange, ni le cadrage, ni le devis lui-même, et la réponse arrive sous 24 heures.",
            'items'      => [
                ['offre' => "Usage pour toute l'équipe", 'prix' => 'Sur devis', 'inclus' => ["Trois demi-journées : messagerie, agenda et réunions, fichiers et partage", "Exercices sur les comptes de chacun", "Fiches pratiques par thème"]],
                ['offre' => "Administration pour les référents", 'prix' => 'Sur devis', 'inclus' => ["Une demi-journée sur votre console", "Procédure d'arrivée et de départ rédigée", "Double authentification et partage externe réglés"]],
                ['offre' => "Suivi à distance", 'prix' => 'Sur devis', 'inclus' => ["Deux heures, trois à quatre semaines après", "Contrôle des réglages", "Mise à jour des fiches et de la procédure"]],
            ],
            'variations' => [
                "Le nombre de participants, qui fixe le nombre de groupes pour les demi-journées d'usage.",
                "La suite utilisée, ou les deux quand l'entreprise travaille avec Microsoft 365 et Google Workspace à la fois.",
                "L'état de départ : comptes communs à remplacer, anciens comptes à fermer, nom de domaine à vérifier avant la session.",
                "Le déplacement : session à Cotonou, dans une autre ville, dans un autre pays, ou entièrement en visioconférence.",
                "Le suivi retenu après la formation, et la rédaction des supports en anglais quand l'équipe le demande.",
                "Moyens de paiement acceptés : Mobile Money (MTN, Moov), carte bancaire, PayPal, virement et espèces. Les abonnements Microsoft ou Google restent payés par l'entreprise à l'éditeur et n'entrent pas dans le devis.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un dispositif public peut-il alléger le coût de la session ?",
            'paragraphes' => [
                "C'est possible dans certains pays, jamais garanti, et la réponse appartient au fonds. Ce qui suit a été lu le 5 octobre 2026 sur les sites des dispositifs eux-mêmes. Côté ivoirien, le FDFP n'accepte de plan de formation que d'une entreprise à jour du paiement de ses deux taxes, et sa page classe les formations liées à l'usage de l'ordinateur parmi les actions soumises à des dispositions particulières. Une session sur une suite bureautique entre dans ce cas : renseignez-vous auprès du FDFP sur ces règles avant d'inscrire la session au plan.",
                "Au Bénin, le décret n° 2022-286 du 11 mai 2022, publié par le Secrétariat général du Gouvernement, approuve les statuts du FODEFCA, le fonds qui soutient la formation continue et l'apprentissage. Au Sénégal, le 3FPT tient un guichet destiné aux salariés des entreprises et aux membres des organisations professionnelles, avec une demande en ligne. Les conditions posées à l'entreprise et au prestataire se lisent dans les textes de chaque fonds et se confirment par écrit.",
                "Côté français, la fiche de France Compétences consacrée à Qualiopi indique qu'à compter du 1er janvier 2022, seul un prestataire titulaire de cette certification accède aux financements des opérateurs de compétences, des associations Transitions Pro, des Régions, de l'association qui gère le fonds pour l'insertion des personnes handicapées, de France Travail et de la Caisse des dépôts et consignations. Richard SALANON n'ayant pas obtenu cette certification, et aucun fonds africain ne l'ayant agréé, budgétez la session sur vos fonds propres, sauf accord écrit contraire du financeur. Programme, feuilles de présence et attestations sont fournis dans tous les cas.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quelle erreur annule en une journée le travail fait sur les droits d'accès ?",
            'texte' => "Laisser un seul compte d'administrateur, ou au contraire en donner à tout le monde. Avec un seul administrateur, le jour où il part ou perd son téléphone, plus personne ne peut débloquer un compte ni réinitialiser un mot de passe ; c'est pourquoi la documentation de Microsoft recommande deux comptes d'accès d'urgence réservés aux situations exceptionnelles. Avec des administrateurs partout, n'importe quel compte piraté peut ouvrir tout le partage externe ou lire n'importe quelle boîte. La règle enseignée tient en une ligne : deux personnes nommées administrateurs, chacune avec la double authentification, des comptes d'accès d'urgence rangés à part, et une liste de tous ces comptes revue à chaque départ.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quels glissements apparaissent après la formation, et comment les empêcher ?",
            'intro' => "La séance de suivi retrouve souvent les mêmes glissements. Aucun ne tient au logiciel ; tous tiennent à une habitude qui revient quand personne ne la surveille.",
            'items' => [
                ['titre' => "Le compte commun recréé « pour dépanner »", 'texte' => "Un nouvel arrivant n'a pas encore son accès à la boîte partagée, et quelqu'un recrée un identifiant commun. La procédure d'arrivée prévoit l'ajout aux boîtes et groupes le jour même de la création du compte."],
                ['titre' => "Le fichier repart en pièce jointe", 'texte' => "Par habitude, une offre de vingt pages part en pièce jointe, puis revient modifiée en trois versions. La fiche pratique rappelle le geste : partager le lien avec la personne précise, en lecture ou en modification."],
                ['titre' => "Le lien ouvert jamais refermé", 'texte' => "Un lien « toute personne disposant du lien » créé pour un client reste actif des années. L'expiration obligatoire des liens ouverts, réglée par le référent, ferme ce risque sans demander d'effort à personne."],
                ['titre' => "Le départ traité par simple suppression", 'texte' => "Pressé, quelqu'un supprime le compte d'un salarié parti sans transférer ses fichiers. On le découvre trois semaines plus tard, quand le délai de restauration est passé. La procédure écrite place la suppression en dernier, toujours."],
                ['titre' => "La double authentification contournée", 'texte' => "Un salarié obtient une exception « provisoire » qui devient permanente. Les exceptions sont datées, notées dans la procédure et revues à la séance de suivi."],
                ['titre' => "Le dossier d'équipe revenu dans un espace personnel", 'texte' => "Un nouveau projet démarre dans le OneDrive ou le Mon Drive de son responsable. La règle d'équipe est simple : tout dossier qui sert à plus d'une personne naît dans un site SharePoint ou un Drive partagé."],
                ['titre' => "L'agenda d'équipe abandonné", 'texte' => "Si le dirigeant continue de fixer ses rendez-vous par téléphone sans les inscrire, l'agenda partagé perd sa valeur en deux semaines. Sa présence à la première demi-journée change beaucoup la suite."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, numéros de téléphone, données des salariés : que change le contexte local ?",
            'paragraphes' => [
                "La double authentification repose sur le téléphone, et le terrain africain y ajoute ses propres pièges. Le rapport Digital 2026 que DataReportal a publié le 8 novembre 2025 sur le Bénin dénombre 16,4 millions de connexions mobiles, l'équivalent de 110 % de la population : beaucoup de salariés ont plusieurs puces et en changent. Un numéro de récupération enregistré il y a deux ans peut ne plus répondre. C'est une raison de préférer une application d'authentification au code par SMS, et de faire vérifier par chacun, pendant la séance, le numéro et l'adresse de secours inscrits sur son compte.",
                "Au Bénin, un cas concret s'ajoute. Selon un communiqué de l'ARCEP Bénin daté du 19 novembre 2024, tous les numéros du pays ont reçu le préfixe 01 le 30 novembre 2024, passant ainsi de huit à dix chiffres. Les comptes Microsoft ou Google ouverts avant cette date gardent souvent un numéro de récupération à huit chiffres. L'exercice de vérification le corrige avant qu'un salarié ne se retrouve bloqué hors de sa messagerie.",
                "La connexion compte aussi pour la visioconférence et le partage. Le même rapport de DataReportal recense 4,80 millions d'internautes au Bénin à la fin de 2025, soit 32,2 % de la population. Les séances montrent donc comment rejoindre une réunion par téléphone, couper la vidéo entrante, synchroniser les dossiers utiles pour travailler hors connexion et envoyer les supports avant une réunion plutôt que de les projeter. À distance, les séances restent courtes, et un partage de connexion de secours est prévu.",
                "Une suite bureautique contient les données personnelles des salariés et des clients. Au Bénin, la loi n° 2017-20 du 20 avril 2018 portant code du numérique encadre leur traitement et impose au responsable des mesures de sécurité. En Europe, la CNIL recommande, dans sa fiche sur la gestion des habilitations, de supprimer les accès dès qu'une personne n'en a plus besoin et de revoir les habilitations au moins une fois par an. Sur la messagerie, elle rappelle depuis 2009 qu'un message clairement identifié comme personnel ne doit pas être lu par l'employeur, et que les règles d'accès en cas d'absence doivent figurer dans une charte connue des salariés.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qu'apporte Richard SALANON à une formation sur ces deux suites ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il croise Microsoft 365 et Google Workspace dans presque chaque mission : une automatisation qui lit une boîte de réception, un ERP qui envoie ses factures par la messagerie de l'entreprise, un site dont le formulaire de contact doit arriver dans la bonne boîte commune. Avant de relier un outil à la suite d'un client, il faut savoir qui l'administre, quels comptes existent et lesquels devraient avoir été fermés. Les situations montrées en formation viennent de ces vérifications préalables.",
                "Passé par " . fait('formation')['nom'] . " (promotion " . fait('formation')['annee'] . "), il travaille dans le numérique depuis " . $ans . " ans et indique avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes, des équipes administratives aux directions. Il est le créateur de <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp doté d'intelligence artificielle destiné aux entreprises d'Afrique francophone, et l'un des co-fondateurs d'<a href=\"https://audyxa.com\">Audyxa</a>. Ses missions l'ont mené dans dix pays d'Afrique francophone, du Sénégal au Tchad et du Mali à la RD Congo, en passant par le Bénin, le Togo, la Côte d'Ivoire, le Burkina Faso, le Niger et le Gabon, ainsi qu'en Europe (France, Belgique, Suisse) et au Canada.",
                "Il n'est partenaire ni de Microsoft ni de Google, et ne revend aucune licence : il n'a donc aucun intérêt à vous faire changer de suite ou monter en gamme. Sa façon de former se résume à quelques engagements vérifiables : un cadrage gratuit avant le devis, des exercices sur vos comptes sans jamais voir vos mots de passe, une procédure écrite qui reste chez vous, et une réponse franche quand le problème relève d'un réglage technique plutôt que d'une formation. Le détail de son parcours figure sur <a href=\"/richard-salanon\">sa page de présentation</a>, et la liste des pays où il intervient sur <a href=\"/zones/\">la page des zones</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Quelles règles garder en tête une fois la formation terminée ?",
            'texte' => "Une suite bien tenue repose sur des règles simples : un compte par personne, des adresses communes sans mot de passe partagé, des dossiers d'équipe rangés dans des espaces d'équipe, des liens qui expirent, la double authentification pour tous, deux administrateurs nommés et une procédure de départ écrite. Faites participer le référent et la direction, et gardez la séance de suivi. Pour situer cette formation parmi ses voisines, voyez <a href=\"/formations/domaine/erp-gestion\">le domaine des outils de gestion</a> ou l'ensemble du <a href=\"/formations/\">catalogue</a>.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous remettre de l'ordre dans votre messagerie, vos partages et vos accès ?",
            'texte'  => "Indiquez la suite utilisée, Microsoft 365 ou Google Workspace, le nombre de personnes, qui l'administre aujourd'hui et ce qui vous inquiète : la réponse vous parvient sous 24 heures, accompagnée d'un programme ajusté et d'un devis détaillé, sans engagement.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation Microsoft 365 ou Google Workspace'],
        ],
    ],

    'faq' => [
        ['q' => "La formation porte-t-elle sur Microsoft 365 ou sur Google Workspace ?", 'r' => "Sur la suite que votre entreprise utilise. Quand elle utilise les deux, ou qu'elle échange beaucoup avec des partenaires sur l'autre, la formation montre les équivalences et les différences de logique, notamment entre dossiers et libellés, et entre OneDrive et les Drive partagés."],
        ['q' => "Faut-il une offre particulière pour suivre la formation ?", 'r' => "Non. Microsoft 365 Business Basic ou Google Workspace Business Starter suffisent pour l'essentiel. Quelques fonctions dépendent de l'offre, comme l'enregistrement des réunions dans Google Meet, absent de Business Starter selon la page des tarifs de Google consultée le 5 octobre 2026. Le cadrage relève votre offre pour que les supports montrent ce que vous avez réellement."],
        ['q' => "Nous utilisons des adresses Gmail gratuites. La formation est-elle utile ?", 'r' => "Elle l'est pour l'usage, mais elle commence alors par une question : passer à des comptes sur le nom de domaine de l'entreprise. Avec des adresses gratuites, aucune console ne permet de retirer l'accès d'un salarié parti ni d'imposer la double authentification. La bascule elle-même se prépare comme un projet, avant la formation."],
        ['q' => "Le formateur a-t-il besoin de nos mots de passe ou d'un accès administrateur ?", 'r' => "Non. Chacun travaille sur son propre compte, à son écran. Pour la demi-journée d'administration, c'est le référent qui manipule la console, guidé pas à pas ; si un compte de test est nécessaire, il le crée lui-même et le supprime à la fin de la séance."],
        ['q' => "Qui doit suivre la demi-journée d'administration ?", 'r' => "La personne qui crée les comptes et paie les licences, et idéalement une seconde capable de la remplacer. Dans une petite structure, c'est souvent le dirigeant ou son assistant. Si la suite est gérée par un prestataire, sa présence est utile, mais l'entreprise doit garder elle-même au moins un accès administrateur."],
        ['q' => "Un salarié n'a pas de smartphone. Peut-on quand même imposer la double authentification ?", 'r' => "Oui. Les deux suites acceptent d'autres méthodes, comme une clé de sécurité physique ou, en dernier recours, un code par SMS ou appel sur un téléphone simple. La séance identifie ces cas avant la date d'application, pour que personne ne soit bloqué le jour où elle prend effet."],
        ['q' => "Que devient la messagerie d'un salarié qui part ?", 'r' => "Elle se confie au successeur avant la suppression du compte : conversion en boîte partagée ou transfert chez Microsoft, transfert des fichiers et de l'agenda chez Google. La CNIL recommande de prévenir le salarié de la date de fermeture pour qu'il récupère ses messages personnels, puis de supprimer l'adresse nominative."],
        ['q' => "Combien de personnes peuvent participer à une réunion Teams ou Meet ?", 'r' => "Selon la documentation de Microsoft, mise à jour le 16 juillet 2026, les offres Business permettent des réunions Teams jusqu'à 300 personnes. Selon la page des tarifs de Google, Meet accueille 100 participants avec Business Starter, 150 avec Business Standard et 500 avec Business Plus. Au-delà, on passe à des formats d'événement prévus pour un large public."],
        ['q' => "La formation traite-t-elle de Teams comme outil de gestion de projet ?", 'r' => "Elle traite de Teams pour la visioconférence et du partage des fichiers d'une équipe. L'organisation des tâches, des canaux de projet et des tableaux de suivi relève de la formation aux outils collaboratifs du catalogue, qui compare aussi Notion, Trello et Asana."],
        ['q' => "Nos devis arrivent dans les courriers indésirables de nos clients. La formation peut-elle aider ?", 'r' => "En partie. La demi-journée des référents explique les enregistrements SPF, DKIM et DMARC du nom de domaine et montre comment vérifier qu'ils existent. Selon l'aide de Google sur les exigences envers les expéditeurs, l'authentification SPF ou DKIM est exigée de tous les expéditeurs depuis le 1er février 2024, et DMARC au-delà de 5 000 messages par jour. Leur correction technique peut demander une intervention à part."],
        ['q' => "Peut-on former une seule personne ?", 'r' => "Oui, notamment le référent, en tête-à-tête, dans vos locaux ou en visioconférence. Les règles d'usage, comme la boîte commune ou le partage par lien, prennent toutefois mieux quand l'équipe entière les apprend en même temps."],
        ['q' => "Combien coûte la formation ?", 'r' => "Elle est chiffrée sur devis, après un premier échange gratuit. Entrent en compte l'effectif, donc le nombre de groupes, la suite utilisée, l'état des réglages au départ, le lieu et le suivi retenu. Les abonnements Microsoft ou Google ne font pas partie du devis."],
    ],

    'sources' => [
        ['titre' => "Microsoft, offres et prix de Microsoft 365 pour les entreprises (lue dans le navigateur)", 'url' => 'https://www.microsoft.com/fr-fr/microsoft-365/business/microsoft-365-plans-and-pricing', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, Microsoft 365 Business Basic : prix annuel et mensuel", 'url' => 'https://www.microsoft.com/fr-fr/microsoft-365/business/microsoft-365-business-basic', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, Microsoft 365 Business Standard : prix annuel et mensuel", 'url' => 'https://www.microsoft.com/fr-fr/microsoft-365/business/microsoft-365-business-standard', 'date' => '2026-10-05'],
        ['titre' => "Microsoft, Microsoft 365 Business Premium : prix annuel et mensuel", 'url' => 'https://www.microsoft.com/fr-fr/microsoft-365/business/microsoft-365-business-premium', 'date' => '2026-10-05'],
        ['titre' => "Google Workspace, tarifs (engagement annuel et forfait sans engagement, lus dans le navigateur)", 'url' => 'https://workspace.google.com/intl/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, configurer les paramètres de sécurité par défaut de Microsoft Entra ID", 'url' => 'https://learn.microsoft.com/fr-fr/entra/fundamentals/security-defaults', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, authentification multifacteur obligatoire pour les portails d'administration (mise à jour du 3 avril 2026)", 'url' => 'https://learn.microsoft.com/fr-fr/entra/identity/authentication/concept-mandatory-multifactor-authentication', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, à propos des boîtes aux lettres partagées (mise à jour du 13 mars 2026)", 'url' => 'https://learn.microsoft.com/fr-fr/microsoft-365/admin/email/about-shared-mailboxes', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, supprimer un ancien employé de Microsoft 365", 'url' => 'https://learn.microsoft.com/fr-fr/microsoft-365/admin/add-users/remove-former-employee', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, gérer les paramètres de partage de SharePoint et OneDrive", 'url' => 'https://learn.microsoft.com/fr-fr/sharepoint/turn-external-sharing-on-or-off', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, limites et spécifications de Microsoft Teams (mise à jour du 16 juillet 2026)", 'url' => 'https://learn.microsoft.com/fr-fr/microsoftteams/limits-specifications-teams', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Workspace, déployer la validation en deux étapes", 'url' => 'https://knowledge.workspace.google.com/admin/security/deploy-2-step-verification?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Workspace, supprimer un utilisateur de votre organisation", 'url' => 'https://knowledge.workspace.google.com/admin/users/delete-or-remove-a-user-from-your-organization?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Workspace, gérer le partage externe pour votre organisation", 'url' => 'https://knowledge.workspace.google.com/admin/drive/manage-external-sharing-for-your-organization?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Workspace, présentation des Drive partagés", 'url' => 'https://support.google.com/a/users/answer/9310156?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google, exigences concernant les expéditeurs d'e-mails vers Gmail", 'url' => 'https://support.google.com/a/answer/81126?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "CNIL, messagerie professionnelle : quelles précautions avant de fermer le compte d'un employé ?", 'url' => 'https://www.cnil.fr/fr/cnil-direct/question/messagerie-professionnelle-quelles-precautions-avant-de-fermer-le-compte-dun', 'date' => '2026-10-05'],
        ['titre' => "CNIL, l'accès à la messagerie d'un salarié en son absence (27 juillet 2009)", 'url' => 'https://www.cnil.fr/fr/lacces-la-messagerie-dun-salarie-en-son-absence', 'date' => '2026-10-05'],
        ['titre' => "CNIL, sécurité : gérer les habilitations", 'url' => 'https://www.cnil.fr/fr/securite-gerer-les-habilitations', 'date' => '2026-10-05'],
        ['titre' => "DataReportal, rapport Digital 2026 consacré au Bénin (8 novembre 2025)", 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => "ARCEP Bénin, passage des numéros de téléphone à 10 chiffres à partir du 30 novembre 2024", 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['excel-google-sheets', 'outils-collaboratifs', 'cybersecurite-employes', 'securite-donnees-dirigeants', 'digitaliser-son-entreprise', 'power-bi-looker-studio'],
        'services'    => ['digitalisation-d-entreprise', 'maintenance-support', 'formation-en-entreprise'],
        'comparatifs' => [],
    ],
];
