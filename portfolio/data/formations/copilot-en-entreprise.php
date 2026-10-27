<?php
// ============================================================
// data/formations/copilot-en-entreprise.php · Fiche formation « Microsoft Copilot en
// entreprise » (domaine intelligence-artificielle, fiche forte).
// Angle propre : Copilot Chat (application web, bureau, mobile) face à Microsoft 365
// Copilot dans Word, Excel, PowerPoint, Outlook et Teams ; compte personnel ou compte
// professionnel et protection des données ; ce que Copilot voit (documents, courriels,
// réunions) selon les droits d’accès ; cas métiers ; pièges (partage trop large,
// résultats à relire). Richard enseigne Copilot (fait donné par lui) ; rien d’autre
// n’est affirmé sur sa pratique.
// Faits externes lus le 26/10/2026 : Microsoft Learn (présentation, confidentialité,
// protection des données d’entreprise, plan sur le partage excessif, réunions Teams),
// page d’assistance Microsoft sur Copilot Chat ; SGG du Bénin ; Commission européenne.
// Aucun prix ni limite chiffrée : la page officielle de l’éditeur fait foi.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Microsoft Copilot en entreprise : vos équipes apprennent à distinguer Copilot Chat de Microsoft 365 Copilot, à travailler avec un compte professionnel protégé et à relire ce que l’outil produit dans Word, Excel, PowerPoint, Outlook et Teams',
    'title'   => 'Formation Microsoft Copilot en entreprise | Richard SALANON',
    'meta'    => 'Formation Microsoft Copilot pour vos équipes : Copilot Chat et Microsoft 365 Copilot, compte professionnel, droits d’accès, réunions et Excel. Sur devis.',
    'en_bref' => 'Cette formation s’adresse aux équipes qui disposent de Microsoft 365 et veulent se servir de Copilot sans confusion ni imprudence : savoir quelle version elles ont, à quel compte elles sont connectées, ce que l’outil peut lire dans leurs fichiers, leurs courriels et leurs réunions, et comment relire le résultat avant de l’envoyer. Comptez deux jours en quatre demi-journées, ou une demi-journée pour un atelier de découverte. Les séances se tiennent chez vous, à distance ou en alliant les deux, pour une seule entreprise ou pour plusieurs structures réunies. Le tarif s’établit sur devis.',
    'publie'  => '2026-11-18',
    'maj'     => '2026-11-18',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, ou atelier d’une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : savoir quel Copilot on a, avec quel compte, et ce qu’il peut lire',
            'duree'  => '3 h 30',
            'points' => [
                'Repérer son offre à l’écran : l’éditeur indique qu’une étiquette sous le nom de l’utilisateur affiche Copilot Chat (Basic), Microsoft 365 Copilot (Basic) ou Microsoft 365 Copilot (Premium), et chacun note ce que la sienne lui ouvre.',
                'Vérifier le compte de connexion : couleur d’arrière-plan, mention « Travail » sous le profil, bouclier vert de protection des données, d’après les repères donnés par Microsoft.',
                'Faire la différence entre une conversation qui s’appuie sur le web, une conversation qui s’appuie sur un fichier que l’on joint, et une réponse tirée automatiquement des courriels, fichiers et réunions de la personne.',
                'Tester la même question sur le web et sur un document joint, puis comparer ce que Copilot affirme et ce que le document dit réellement.',
                'Classer les documents du service en trois familles : ceux que l’on peut donner à Copilot, ceux que l’on prépare d’abord, ceux qui n’y entrent pas.',
                'Premier exercice : résumer un document réel du service et retrouver, phrase par phrase, ce qui vient du fichier et ce qui a été ajouté.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : Word et Outlook, rédiger, résumer, répondre',
            'duree'  => '3 h 30',
            'points' => [
                'Dans Word : rédiger un premier jet à partir d’un document existant, réécrire un passage pour un autre lecteur, résumer un rapport long, comparer deux versions d’un texte.',
                'Dans Outlook : résumer un fil de courriels, préparer une réponse, utiliser les conseils de ton et de clarté décrits par l’éditeur, sans envoyer sans lecture.',
                'Écrire une demande utile : qui écrit, à qui, pour quoi faire, avec quels éléments, sous quelle forme, avec quel ton.',
                'Donner à Copilot un modèle validé par l’entreprise pour qu’il en reprenne la structure, plutôt que de lui laisser improviser la forme.',
                'Grille de relecture avant envoi : noms, chiffres, dates, engagements pris au nom de la société, destinataires en copie.',
                'Premier recueil de demandes réussies, rangé dans un document partagé qui appartient à l’entreprise.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : Teams, Excel et PowerPoint',
            'duree'  => '3 h 30',
            'points' => [
                'Réunions Teams : conditions pour que Copilot fonctionne (licence, transcription ou usage pendant la réunion seulement), ce que l’organisateur règle dans les options de réunion.',
                'Produire un compte rendu et une liste d’actions à partir d’une réunion, puis les confronter aux notes d’un participant.',
                'Excel : demander une analyse, des formules ou un graphique sur un tableau réel, puis recalculer à la main trois résultats pour mesurer la fiabilité.',
                'PowerPoint : créer un support à partir d’un document, le resserrer, repérer ce qui manque et ce qui est inventé.',
                'Choisir le bon outil selon la tâche : conversation autonome, assistant dans l’application, ou travail sans Copilot.',
                'Exercice de relecture : chaque participant applique la grille à une production réalisée pendant la séance.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : droits d’accès, partage, plan d’usage de l’équipe',
            'duree'  => '3 h 30',
            'points' => [
                'Comprendre pourquoi Copilot ne montre que ce que la personne a déjà le droit de voir, et pourquoi cela n’est rassurant que si les droits sont bien posés.',
                'Auditer le partage d’un dossier du service : qui y a accès, par quel lien, depuis quand, et ce que Copilot pourrait en citer à chacun.',
                'Repérer les réponses qui exposent un document que l’utilisateur n’aurait pas dû voir, et savoir à qui le signaler.',
                'Rédiger la fiche de tâche de chacun : application, demande type, documents autorisés, relecture obligatoire, personne qui valide.',
                'Mise à l’épreuve : seul devant son poste, chacun déroule sa tâche cible, chronomètre en main, du premier fichier à la version relue.',
                'Calendrier d’usage pour les trente jours suivants et règles d’usage écrites par l’équipe.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou atelier d’une demi-journée'],
        ['l' => 'Public', 'v' => 'Équipes équipées de Microsoft 365 : administration, direction, finance, commercial, RH ; sans prérequis technique'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Ce que vos équipes sauront faire avec Copilot après la formation, et ce qu’elle laisse de côté',
            'paragraphes' => [
                'Beaucoup d’entreprises ont acheté Microsoft 365 il y a des années et découvrent un matin qu’un bouton Copilot est apparu dans Word, dans Outlook, dans Teams. Les employés l’essaient, obtiennent une réponse élégante, et personne ne sait dire quelle version est en cause, quel compte est ouvert, ni ce que l’outil a lu pour répondre. La formation sert à remplacer cette impression de magie par une pratique outillée, avec des repères que l’éditeur lui-même documente.',
                'À la fin des deux jours, chaque stagiaire sait faire six choses : dire précisément quelle offre Copilot il possède, s’assurer qu’il travaille avec son compte professionnel, formuler une demande qui donne un résultat exploitable dans Word, Outlook, Excel, PowerPoint ou Teams, savoir quels contenus de l’entreprise Copilot peut aller chercher à sa place, relire un résultat avec une grille fixe avant de l’envoyer, et signaler un partage de fichiers trop large avant qu’il ne devienne un incident.',
                'Le champ reste volontairement délimité. La formation ne traite pas les autres assistants du marché, étudiés dans la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>, ni l’administration technique d’un tenant Microsoft : c’est le travail d’un administrateur, que l’on ne remplace pas en deux jours. Elle n’ouvre pas non plus la construction d’agents sur mesure. Elle ne tient pas lieu de conseil juridique, comptable ou médical.',
                'Aucun gain de temps chiffré n’est annoncé : tout dépend de la qualité des fichiers, de la précision des demandes et de la régularité de l’usage. Chaque stagiaire réalise seul sa tâche cible lors de l’épreuve finale, chronomètre en main, et l’entreprise garde la liberté de refaire cette mesure plus tard.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui peut suivre cette formation, avec quel bagage et quel équipement ?',
            'intro' => 'Elle convient à toute personne qui passe sa journée dans Word, Outlook, Excel, PowerPoint ou Teams. Si l’on sait ouvrir un document et écrire une phrase, on peut suivre.',
            'items' => [
                ['titre' => 'Les publics habituels', 'texte' => 'Assistantes et assistants de direction, responsables administratifs et financiers, commerciaux, responsables RH, chargés de projet, cadres qui animent des réunions, dirigeants de PME qui veulent comprendre ce que leurs équipes manipulent.'],
                ['titre' => 'Le niveau de départ', 'texte' => 'Des débutants complets y côtoient des personnes qui ont déjà cliqué sur le bouton Copilot sans méthode. Un petit questionnaire envoyé avant la session sert à composer des groupes homogènes ou à prévoir une heure de mise à niveau.'],
                ['titre' => 'Des groupes par métier', 'texte' => 'La finance travaille sur ses tableaux, les ressources humaines sur leurs courriers, la direction sur ses réunions. Quand c’est possible, les groupes se composent par métier ; pour un atelier découverte, un groupe mêlé fonctionne bien.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur par participant, avec les applications Microsoft 365 installées ou accessibles dans le navigateur, et une connexion stable. Les participants se connectent avec le compte qu’ils utilisent réellement au travail.'],
                ['titre' => 'Les licences', 'texte' => 'Ce que l’on peut faire dépend de l’offre attribuée à chacun par l’administrateur de l’entreprise. Le questionnaire préalable la recense, et les exercices sont choisis en conséquence, sans promettre une fonction que le compte n’offre pas. Les formules et limites évoluent ; la page officielle de l’éditeur fait foi.'],
                ['titre' => 'Les documents à préparer', 'texte' => 'Chacun apporte trois à cinq fichiers authentiques liés à sa tâche et les télécharge à l’avance sur son poste. Ceux qui contiennent des noms de clients, de patients ou de salariés sont reformulés ou écartés avant la session.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Comment se découpent les quatre demi-journées ?',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles tâches chaque métier traite-t-il avec Copilot pendant la formation ?',
            'legende' => 'Exercices types, montés avec les pièces que l’entreprise remet lors de la préparation. La dernière colonne rappelle ce que le participant vérifie avant de se fier au résultat.',
            'entetes' => ['Poste', 'Point de départ', 'Ce que Copilot propose', 'Ce que le participant vérifie'],
            'lignes'  => [
                ['Assistance de direction', 'Fil de courriels, invitation, ordre du jour', 'Résumé du fil, projet de réponse, liste des points à traiter', 'Destinataires, engagements, dates citées'],
                ['Finance et gestion', 'Tableau de suivi budgétaire ou de factures', 'Lecture des écarts, formules, graphique, commentaire de synthèse', 'Trois résultats recalculés à la main, plages sélectionnées'],
                ['Commercial', 'Offre précédente et cahier des charges client', 'Premier jet d’offre, version courte pour le client, plan de présentation', 'Prix repris de la grille officielle, promesses, noms'],
                ['Ressources humaines', 'Fiches de poste, procédures internes', 'Annonce de recrutement, note interne, guide d’accueil', 'Conformité avec les règles réelles de l’entreprise, absence de données de personnes'],
                ['Chef de projet', 'Compte rendu de réunion, planning', 'Liste d’actions, relances, point d’avancement', 'Responsable et échéance de chaque action'],
                ['Direction', 'Rapport mensuel, notes de plusieurs services', 'Synthèse d’une page, questions à poser en comité', 'Chiffres confrontés aux rapports d’origine'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Copilot Chat ou Microsoft 365 Copilot : de quoi parle-t-on exactement ?',
            'paragraphes' => [
                'Le nom Copilot recouvre plusieurs choses, et c’est la première source de malentendus en entreprise. Microsoft Learn explique que les réponses et les expériences de Copilot Chat et de Microsoft 365 Copilot diffèrent selon l’ancrage des données, la profondeur d’intégration et les licences. L’éditeur ajoute que l’application Microsoft 365 Copilot s’appelle désormais Microsoft Copilot et que Microsoft 365 Copilot Chat se nomme Microsoft Copilot Chat, avec une période de transition où les anciens noms subsistent dans les écrans.',
                'D’un côté, la conversation autonome : on l’ouvre dans l’application web, bureau ou mobile, ou dans le navigateur Edge, et elle s’appuie surtout sur le web. De l’autre, l’assistant intégré aux applications, qui travaille dans Word, Excel, PowerPoint, Outlook, OneNote et Teams. La page de l’éditeur distingue trois niveaux, repérables par l’étiquette affichée dans l’application : Copilot Chat (Basic), Microsoft 365 Copilot (Basic) et Microsoft 365 Copilot (Premium).',
                'Pourquoi cela compte-t-il pour une équipe ? Parce que deux collègues du même bureau peuvent avoir des boutons identiques et des capacités très différentes. L’un obtient une réponse nourrie de ses réunions et de ses courriels, l’autre doit coller son texte dans la fenêtre. Sans cette clé de lecture, chacun juge l’outil sur ce qu’il voit chez un collègue, et la déception arrive vite.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que permet chaque niveau de Copilot, d’après Microsoft ?',
            'legende' => 'Synthèse de la page de présentation de Microsoft Learn, consultée le 26 octobre 2026. Les noms, les formules, les licences et les limites évoluent ; la page officielle de l’éditeur fait foi, et aucun prix n’est repris ici.',
            'entetes' => ['Niveau', 'Ce que décrit l’éditeur', 'Données de l’organisation', 'Conséquence en formation'],
            'lignes'  => [
                ['Copilot Chat (Basic)', 'Conversation incluse avec les licences Microsoft 365 éligibles, principalement fondée sur le web', 'Contenu fourni par l’utilisateur : texte collé, fichier chargé, contenu ouvert dans Outlook ou Teams', 'On apprend à joindre le bon fichier et à nommer ce que l’on fournit'],
                ['Microsoft 365 Copilot (Basic)', 'Pas de licence complémentaire, mais accès standard à Copilot dans Word, Excel, PowerPoint et OneNote, plus limité', 'Pas d’accès automatique à Microsoft Graph, mêmes modes de contenu fourni', 'On teste ce que l’accès standard permet vraiment, sans surpromettre'],
                ['Microsoft 365 Copilot (Premium)', 'Licence complémentaire, accès prioritaire, intégration profonde aux applications', 'Réponses fondées sur courriels, fichiers, réunions et calendriers via Microsoft Graph', 'On travaille les droits d’accès, car l’outil va chercher lui-même'],
                ['Fonctions à l’usage', 'Certaines fonctions avancées sont facturées selon la consommation', 'Dépend de la fonction', 'Hors du périmètre de base ; à étudier avec l’administrateur'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Compte personnel ou compte professionnel : pourquoi la différence change tout ?',
            'paragraphes' => [
                'Copilot s’ouvre aussi avec un compte Microsoft personnel, et la page de l’éditeur recense les points d’entrée concernés : l’application Copilot, Copilot Chat dans Edge, Copilot Chat dans Outlook et Teams, ainsi que des intégrations dans d’autres produits. Ce que Microsoft décrit comme protection des données d’entreprise vise en revanche les comptes Microsoft Entra, c’est-à-dire les comptes de travail ou d’école. Pour un compte personnel, ces engagements ne sont pas ceux que la page décrit : il faut lire les conditions de ce compte, et ne pas supposer qu’ils sont identiques.',
                'Le réflexe qu’enseigne la formation est donc simple : avant de coller un contenu, regarder le compte. Microsoft indique que la couleur d’arrière-plan diffère selon le type de compte, que l’étiquette « Travail » apparaît sous le profil de l’utilisateur et qu’un bouclier vert de protection des données s’affiche dans l’expérience Microsoft Entra ID. Chaque participant repère ces signes sur son propre écran, pas sur une capture d’écran de démonstration.',
                'Pour l’entreprise, l’enjeu est double. Elle souhaite que ses employés utilisent le compte protégé, et elle a le droit de décider si les comptes personnels sont tolérés sur ses postes. L’éditeur signale d’ailleurs que l’administrateur peut contrôler la connexion avec un compte personnel au moyen des restrictions de locataire. C’est une décision d’administration, que la formation évoque pour que le dirigeant sache la demander, sans l’exécuter à sa place.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que promet la protection des données d’entreprise, et que ne promet-elle pas ?',
            'intro' => 'Microsoft Learn détaille ce que recouvre cette protection pour les comptes professionnels. La formation en retient ce qui sert à décider, sans prétendre vérifier ces engagements à la place de l’entreprise.',
            'items' => [
                ['titre' => 'Un cadre contractuel', 'texte' => 'Selon l’éditeur, les invites et les réponses sont couvertes par les mêmes conditions contractuelles que les courriels dans Exchange et les fichiers dans SharePoint, Microsoft agissant comme sous-traitant.'],
                ['titre' => 'Pas d’entraînement sur vos données', 'texte' => 'La page de confidentialité précise que les requêtes, les réponses et les données accessibles via Microsoft Graph ne servent pas à entraîner les grands modèles de langage de base.'],
                ['titre' => 'Vos droits d’accès restent valables', 'texte' => 'Copilot respecte le modèle d’identité et les autorisations de l’entreprise, hérite des étiquettes de confidentialité et applique les stratégies de rétention, selon l’éditeur. Les contrôles varient selon l’abonnement.'],
                ['titre' => 'La recherche web suit d’autres règles', 'texte' => 'Les requêtes envoyées au service de recherche Bing sont gérées séparément, et l’éditeur précise que la limite de données de l’Union européenne ne s’applique pas à ces requêtes.'],
                ['titre' => 'Des agents tiers à lire', 'texte' => 'Quand on utilise un agent, la page recommande de lire sa déclaration de confidentialité et ses conditions d’utilisation pour savoir comment il traite les données.'],
                ['titre' => 'Une garantie annoncée n’est pas une vérification', 'texte' => 'Ces engagements sont ceux de l’éditeur à la date de consultation. L’entreprise qui traite des données sensibles lit elle-même les conditions applicables à son contrat.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que voit Copilot dans vos documents, vos courriels et vos réunions ?',
            'paragraphes' => [
                'Avec la licence complète, Copilot ne se contente pas du texte que l’on tape. Microsoft Learn explique qu’il accède au contenu et au contexte par Microsoft Graph et peut produire des réponses ancrées dans les documents de l’utilisateur, ses courriels, son calendrier, ses conversations, ses réunions et ses contacts. Il combine ces éléments avec le contexte de travail du moment : la réunion à laquelle la personne participe, les échanges de courriels sur un sujet, les discussions de la semaine passée.',
                'La règle centrale, répétée par l’éditeur, est que Copilot n’affiche que les données organisationnelles pour lesquelles l’utilisateur dispose au minimum d’un droit d’affichage. Il ne contourne pas les permissions : il les applique. C’est rassurant en théorie, et trompeur en pratique, parce que Copilot est bien plus rapide qu’un humain pour trouver ce qui est ouvert. Un fichier que personne ne retrouvait faute de savoir où chercher devient soudain accessible en une question.',
                'Avec les offres Basic, le principe est inverse : l’éditeur indique que Copilot Chat (Basic) et Microsoft 365 Copilot (Basic) n’accèdent pas aux données de l’organisation par Microsoft Graph pendant la conversation. L’utilisateur doit charger le contenu avec sa demande, utiliser le contenu ouvert dans Teams ou Outlook, ou passer par un agent à l’usage qui a cet accès. La formation fait expérimenter les deux modes sur le même sujet, pour que chacun mesure la différence.',
                'L’historique compte aussi. Microsoft précise que les invites, les réponses et les références utilisées sont stockées, que les utilisateurs peuvent supprimer leur historique d’activité Copilot depuis le portail Mon compte et que les administrateurs peuvent définir des stratégies de rétention. Ce que l’on demande à Copilot laisse donc une trace dans le système de l’entreprise, ce qui doit être connu des employés.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Pourquoi un partage de fichiers trop large devient-il un risque avec Copilot ?',
            'intro' => 'Le piège le plus sérieux ne vient pas de Copilot, mais de l’état des droits dans l’entreprise. La formation le montre avec les dossiers du service, pas avec des exemples fictifs.',
            'items' => [
                ['titre' => 'Un dossier ouvert à tous, oublié depuis des années', 'texte' => 'Un tableau de salaires déposé dans un espace partagé avec tout le monde reste invisible tant que personne ne le cherche. Avec un assistant qui parcourt ce que chacun peut voir, une question banale peut le faire remonter.'],
                ['titre' => 'Le lien « toute personne ayant le lien »', 'texte' => 'Un lien partagé largement ouvre un fichier à quiconque le détient. On apprend à repérer ces liens et à les remplacer par un partage nominatif.'],
                ['titre' => 'Les équipes et les canaux hérités', 'texte' => 'Un canal créé pour un projet terminé garde ses membres et ses fichiers. L’éditeur précise que les droits donnés à des personnes extérieures, par exemple via des canaux partagés dans Teams, comptent aussi.'],
                ['titre' => 'Les départs et les changements de poste', 'texte' => 'Une personne qui change de service garde parfois l’accès à d’anciens dossiers. Copilot en tiendra compte comme n’importe quel moteur de recherche interne.'],
                ['titre' => 'Les étiquettes de confidentialité', 'texte' => 'Selon la page de l’éditeur, Copilot respecte les droits d’usage associés au chiffrement appliqué par des étiquettes de confidentialité. Encore faut-il que l’entreprise en ait posé.'],
                ['titre' => 'Le rôle de l’administrateur', 'texte' => 'Microsoft propose un plan pour corriger le partage excessif, avec Microsoft Purview et la gestion avancée de SharePoint. Ces chantiers relèvent de l’administrateur ; la formation donne à l’équipe les moyens de les réclamer en connaissance de cause.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment un service vérifie-t-il ses droits d’accès avant d’activer Copilot ?',
            'items' => [
                ['titre' => 'Lister les espaces du service', 'texte' => 'Dossiers partagés, équipes Teams, bibliothèques SharePoint : on dresse la liste de ce que le service possède et de ce qui y est déposé.', 'duree' => '20 min'],
                ['titre' => 'Identifier les contenus sensibles', 'texte' => 'Paie, contrats, dossiers disciplinaires, offres confidentielles, informations non annoncées. On note où ils se trouvent.', 'duree' => '30 min'],
                ['titre' => 'Lire qui y a accès', 'texte' => 'Pour chaque espace sensible, on consulte la liste des membres, des groupes et des liens de partage actifs.', 'duree' => '30 min'],
                ['titre' => 'Poser la question à Copilot comme un employé curieux', 'texte' => 'Avec le compte d’un collaborateur sans droits particuliers, indiqué par l’administrateur, on formule des demandes qui pourraient faire remonter un document sensible, et l’on note ce qui apparaît.', 'duree' => '30 min'],
                ['titre' => 'Corriger ou signaler', 'texte' => 'Les droits que le responsable de l’espace peut changer sont changés ; les autres sont transmis à l’administrateur avec les captures utiles.', 'duree' => '20 min'],
                ['titre' => 'Fixer une revue régulière', 'texte' => 'Une personne du service relit les accès à chaque départ et à chaque nouveau projet. La règle est écrite dans les règles d’usage de l’équipe.', 'duree' => '10 min'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment Copilot intervient-il dans les réunions Teams, et que faut-il régler avant ?',
            'paragraphes' => [
                'Les comptes rendus de réunion sont souvent le premier cas d’usage cité, et le plus mal préparé. Microsoft Learn indique que Copilot dans Teams capte les points importants, que les participants sous licence peuvent poser des questions visibles d’eux seuls, apprendre qui a dit quoi, sur quels points les avis divergent, et obtenir des suggestions de tâches de suivi. Il faut pour cela une licence Copilot complémentaire pour les personnes concernées.',
                'Deux modes existent, selon la page de l’éditeur. Dans le premier, Copilot fonctionne pendant et après la réunion, une fois la transcription lancée. Dans le second, il fonctionne seulement pendant la réunion, à partir de données de reconnaissance vocale qui ne sont pas conservées après la fin. L’organisateur choisit dans les options de réunion, dans la limite de la stratégie fixée par l’administrateur. S’il désactive Copilot, l’enregistrement et la transcription sont aussi désactivés.',
                'Trois précautions ressortent. La première : les invites et les réponses de Copilot pendant une réunion peuvent être conservées à des fins de conformité selon les stratégies de rétention de l’entreprise, même sans transcription. La deuxième : Copilot n’est pas disponible dans les réunions chiffrées de bout en bout. La troisième est humaine : prévenir les participants qu’un assistant est actif, comme on le ferait pour toute prise de notes. La formation fait rédiger la phrase d’annonce et la règle de conservation du compte rendu.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Que faire de Copilot dans Word, Excel, PowerPoint et Outlook ?',
            'intro' => 'Les fonctions que décrit Microsoft pour ces applications servent de trame. Chaque participant travaille sur ses propres fichiers et retient celles qui valent le détour dans son métier.',
            'items' => [
                ['titre' => 'Word : écrire, réécrire, résumer', 'texte' => 'Rédiger à partir d’un document existant, reformuler pour un autre public, résumer un rapport. Le contrôle porte sur les faits et le ton, jamais sur l’orthographe seule.'],
                ['titre' => 'Excel : lire un tableau, proposer des formules', 'texte' => 'L’éditeur cite l’analyse de données, les enseignements, les formules et les visuels. Le tableau doit être propre, avec des en-têtes clairs ; on recalcule quelques valeurs pour tester.'],
                ['titre' => 'PowerPoint : bâtir un support', 'texte' => 'Créer une présentation à partir d’une demande ou d’un contenu existant, la résumer, modifier sa mise en forme. Le message reste celui de la personne qui présente.'],
                ['titre' => 'Outlook : résumer, répondre, adoucir', 'texte' => 'Rédiger un courriel, résumer un fil, obtenir des conseils sur la clarté et le ton. Aucun courriel ne part sans relecture des destinataires et des pièces jointes.'],
                ['titre' => 'Teams : suivre une réunion', 'texte' => 'Résumer, transcrire, relever les actions, dans les conditions décrites plus haut. Le compte rendu est validé par l’organisateur avant diffusion.'],
                ['titre' => 'OneNote et Forms : esquisser', 'texte' => 'Premiers plans, idées, listes, questions de sondage. Utile pour démarrer, pas pour conclure.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment relire ce que Copilot produit avant de l’envoyer ?',
            'intro' => 'La page de confidentialité de Microsoft le dit sans détour : les réponses de l’IA ne sont pas garanties à 100 %, et les utilisateurs doivent exercer leur jugement avant de transmettre un résultat. La formation en fait une grille que chacun garde à côté de son poste.',
            'items' => [
                ['titre' => 'Chercher l’origine', 'texte' => 'D’où vient chaque affirmation : du fichier joint, d’un courriel, du web, ou de nulle part ? Les références que Copilot affiche sont ouvertes avant de s’y fier.'],
                ['titre' => 'Vérifier les noms et les chiffres', 'texte' => 'Montants, dates, noms propres, titres de poste. Une erreur sur un nom suffit à rendre un courrier gênant.'],
                ['titre' => 'Repérer ce qui manque', 'texte' => 'Copilot ne voit que ce qu’on lui montre ou ce que ses droits lui permettent de trouver. Une exception, un avenant ou une décision récente peut être absente de sa réponse.'],
                ['titre' => 'Contrôler le ton et l’engagement', 'texte' => 'Une formulation polie peut engager l’entreprise plus que prévu. La phrase qui promet un délai ou un geste commercial est relue avec attention.'],
                ['titre' => 'Faire relire les productions sensibles', 'texte' => 'Offre, courrier juridique, communication publique : une seconde personne relit, et c’est elle qui valide.'],
                ['titre' => 'Garder la trace', 'texte' => 'La demande utilisée et la version finale sont conservées ensemble, pour pouvoir expliquer plus tard comment le texte a été produit.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se déroulent les séances de formation à Copilot ?',
            'intro' => 'Le travail se fait dans les applications de l’entreprise, avec ses fichiers, et jamais sur un environnement de démonstration.',
            'items' => [
                ['titre' => 'Avant la session', 'texte' => 'Un ou deux entretiens de cadrage établissent les tâches visées, les licences Copilot réellement attribuées, le type de comptes utilisés et les règles de données de la maison. Un questionnaire envoyé aux participants complète le tableau. Si le cadrage montre qu’un atelier plus court suffit, il est recommandé.'],
                ['titre' => 'Des groupes restreints', 'texte' => 'Douze personnes au plus pour l’atelier découverte, dix pour les deux jours, huit pour les séances à distance. Au-delà, il devient impossible de regarder l’écran de chacun, alors que c’est là que se voient les vrais blocages.'],
                ['titre' => 'Des exercices sur vos fichiers', 'texte' => 'Les documents choisis sont téléchargés à l’avance sur chaque poste. Chaque démonstration est suivie d’un exercice individuel sur ces fichiers, puis d’une relecture du résultat avec la grille.'],
                ['titre' => 'Une solution de repli', 'texte' => 'Une solution de repli est prévue en cas de coupure de connexion ou d’indisponibilité d’une fonction, afin que la séance ne s’arrête pas.'],
                ['titre' => 'Supports remis', 'texte' => 'Chacun repart avec le programme, les supports de la session, les exercices et leurs corrigés, la grille de relecture et une attestation nominative.'],
                ['titre' => 'Épreuve finale et attestation', 'texte' => 'Chaque stagiaire mène sa tâche cible chronomètre en main, de la préparation du fichier à la version relue. Une attestation à son nom est remise ; elle ne vaut ni diplôme ni certification de l’éditeur.'],
                ['titre' => 'Après la session', 'texte' => 'Pendant le mois suivant, un canal direct reste ouvert pour vos questions d’usage, sans supplément. Au-delà, un accompagnement mensuel de trois demi-journées peut s’ajouter sur devis.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Dans quels contextes métier et pays cette formation trouve-t-elle son usage ?',
            'items' => [
                ['secteur' => 'Banque, assurance ou microfinance, à Abidjan, Dakar ou Cotonou', 'probleme' => 'Les comités produisent des comptes rendus longs, les tableaux de suivi s’accumulent et les données de clients ne doivent pas circuler.', 'solution' => 'Copilot dans Teams pour les comptes rendus des réunions internes, Excel pour lire des tableaux déjà anonymisés, règles écrites sur les fichiers de clients, vérification préalable des droits d’accès aux dossiers de crédit.'],
                ['secteur' => 'Cabinet comptable ou d’audit, à Lomé, Douala ou Libreville', 'probleme' => 'Les collaborateurs préparent des courriers types, des notes de synthèse et des tableaux pour des dossiers différents, avec une forte exigence de confidentialité.', 'solution' => 'Word pour les modèles de lettres, Excel pour contrôler des écarts, un dossier par client avec droits restreints, relecture par un associé avant toute remise.'],
                ['secteur' => 'ONG et programmes financés par des bailleurs', 'probleme' => 'Les rapports d’étape, les budgets et les présentations aux partenaires se préparent dans des délais courts, par des équipes réparties sur plusieurs sites.', 'solution' => 'PowerPoint pour les supports de comité, Word pour les rapports à partir de notes, séances à distance, aucune donnée de bénéficiaire dans les demandes.'],
                ['secteur' => 'PME de distribution ou d’import-export', 'probleme' => 'La direction commerciale rédige des offres et des relances en français et en anglais, avec des grilles de prix qui changent.', 'solution' => 'Outlook pour les relances et les réponses, Word pour les offres à partir du dernier modèle validé, prix toujours repris de la grille officielle et non de la mémoire de l’outil.'],
                ['secteur' => 'Cabinet, PME ou service public en France, en Belgique ou au Luxembourg', 'probleme' => 'L’entreprise a déjà Microsoft 365, le RGPD s’applique, et personne n’a vérifié qui voit quoi dans les espaces partagés.', 'solution' => 'Audit des droits d’un dossier, usage du compte professionnel seulement, séances à distance, règle écrite sur les données personnelles.'],
                ['secteur' => 'Établissement d’enseignement ou centre de formation', 'probleme' => 'Les responsables préparent des plannings, des courriers aux familles et des supports, avec peu de temps administratif.', 'solution' => 'Word et Outlook pour les courriers types relus par un responsable, PowerPoint pour les présentations de rentrée, aucune donnée d’élève dans les demandes.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelle formule choisir : atelier, deux jours, visioconférence ou suivi ?',
            'legende' => 'Les formules s’enchaînent : un atelier auprès d’une équipe pilote avant les deux jours, ou les deux jours suivis de l’accompagnement mensuel.',
            'entetes' => ['Formule', 'Temps', 'Effectif', 'Quand la choisir'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 personnes au plus', 'Une équipe qui n’a jamais utilisé Copilot, ou une direction qui veut le voir fonctionner avant de décider'],
                ['Formation complète, intra', '2 jours, en 4 demi-journées', '10 personnes au plus, par métier', 'Un service qui veut intégrer Copilot à ses tâches et poser des règles communes'],
                ['Session mutualisée, inter', '1 à 2 jours', 'Plusieurs structures d’un même réseau', 'Une ou deux personnes par organisation ; exercices sur des documents publics ou fictifs, sans dossier interne'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 personnes au plus', 'Collègues dispersés entre sites ou entre pays'],
                ['Hybride', 'Une journée en salle, puis séances à distance', '10 personnes au plus', 'Lancement sur place, puis entraînement sur les fichiers réels du groupe'],
                ['Accompagnement mensuel', 'Une demi-journée par mois pendant trois mois', 'Le groupe déjà formé', 'Ancrer l’habitude, revoir les droits d’accès, traiter de nouvelles tâches'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Quel budget prévoir pour la formation Copilot, et comment payer ?',
            'intro'      => 'Aucun montant n’est affiché à l’avance : le prix est établi sur devis après le cadrage. Le règlement peut se faire par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les licences Copilot restent à votre charge, à votre nom et auprès de l’éditeur ; elles ne figurent pas dans le devis. Les formules évoluent, la page officielle de Microsoft fait foi.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée sur vos propres fichiers', 'Repérage de votre offre et de vos comptes', 'Premières règles sur les données', 'Avis sur la suite à donner']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Exercices dans Word, Outlook, Excel, PowerPoint et Teams', 'Audit d’un dossier partagé', 'Épreuve finale et attestation', 'Canal direct le mois suivant']],
                ['offre' => 'Accompagnement mensuel', 'prix' => 'Sur devis', 'inclus' => ['Trois demi-journées, une par mois', 'Relecture des usages en cours', 'Nouvelles tâches et correctifs', 'Bilan rédigé au troisième mois']],
            ],
            'variations' => [
                'Le nombre de stagiaires et le nombre de groupes.',
                'La formule retenue et le nombre de demi-journées.',
                'Le temps de préparation des exercices avec vos fichiers.',
                'Le lieu : chez vous, en salle louée, à Cotonou ou ailleurs.',
                'La modalité : présentiel, visioconférence ou mixte.',
                'Le suivi après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation continue peut-il prendre en charge la session ?',
            'paragraphes' => [
                'Cela dépend du fonds, de votre statut et de votre dossier, et rien n’est garanti. Selon les pays, des dispositifs existent pour les entreprises privées : le FDFP en Côte d’Ivoire, le 3FPT au Sénégal, le FODEFCA au Bénin, les opérateurs de compétences (OPCO) en France. Chacun a ses conditions, ses formulaires et ses exigences envers l’organisme de formation.',
                'Avant de vous engager, interrogez le fonds en lui envoyant le programme et le devis. Richard SALANON ne met en avant ni certification qualité ni agrément reconnu par ces organismes ; c’est à vous de vérifier que le dossier reste finançable et de prévoir votre budget sans cette aide si la décision en dépend.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui répond d’une erreur produite avec Copilot ?',
            'texte' => 'L’entreprise, et la personne qui a envoyé le document. Microsoft rappelle lui-même que les réponses générées par l’IA ne sont pas garanties à 100 % et que l’utilisateur garde la responsabilité de les examiner avant de les transmettre. Un courriel rédigé par Copilot et envoyé sans lecture reste un courriel de la société. La formation fait de la relecture une étape obligatoire, jamais une option laissée à la bonne volonté de chacun.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs reviennent après une formation à Copilot, et comment les éviter ?',
            'intro' => 'C’est un mois plus tard que les habitudes se dévoilent. Voici les écarts les plus fréquents, travaillés dès les séances.',
            'items' => [
                ['titre' => 'Juger Copilot sur la licence du voisin', 'texte' => 'Chacun a une offre différente. La fiche d’équipe note qui dispose de quoi, pour éviter des attentes injustifiées.'],
                ['titre' => 'Se connecter avec le mauvais compte', 'texte' => 'Un compte personnel ouvert dans le navigateur remplace silencieusement le compte de travail. Le réflexe de regarder les repères du compte devient un geste de début de session.'],
                ['titre' => 'Oublier que Copilot lit ce qui est ouvert', 'texte' => 'Les droits trop larges existaient avant lui. Une revue des accès par service, planifiée, évite les surprises.'],
                ['titre' => 'Envoyer sans relire', 'texte' => 'Sous la pression d’un délai, on expédie le premier jet. La grille reste affichée et les productions sensibles passent par un second lecteur.'],
                ['titre' => 'Prendre un compte rendu automatique pour un procès-verbal', 'texte' => 'Il sert de brouillon. L’organisateur le valide avant diffusion, surtout quand il consigne des décisions ou des engagements.'],
                ['titre' => 'Faire confiance à Excel sans recalcul', 'texte' => 'Une formule plausible peut viser les mauvaises cellules. On recalcule quelques valeurs avant toute décision.'],
                ['titre' => 'Fonder un processus sur une fonction qui change', 'texte' => 'Les noms, les offres et les fonctions évoluent, comme l’éditeur le signale lui-même. La méthode (compte vérifié, droits contrôlés, résultat relu) survit à ces changements.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'Copilot fonctionne en ligne, et la qualité de la connexion décide du confort de travail. Les fichiers d’exercice sont donc copiés sur les postes avant la session, les résultats importants sont rangés dans les espaces de l’entreprise, et une solution de repli est prévue en cas de coupure. Microsoft précise par ailleurs que Copilot peut ne pas être accessible sur certains marchés : la disponibilité dans votre pays se vérifie avant l’achat, sur la page officielle de l’éditeur.',
                'La langue pèse autant. Les documents d’une entreprise mêlent souvent français et anglais, parfois des termes locaux. Les participants testent l’outil dans la langue réelle de leurs fichiers et font relire par un locuteur du métier tout texte produit dans une langue qui n’est pas celle de leur travail quotidien.',
                'Côté béninois, avant de décider quels documents chargés de données personnelles peuvent passer par Copilot, l’entreprise lit la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a>. Cette fiche ne résume pas le contenu de la loi et ne donne pas d’avis juridique : le texte se lit sur le site du Secrétariat général du Gouvernement. La règle interne de l’entreprise dit ensuite ce qui peut partir et ce qui reste dehors.',
                'En Europe, le RGPD s’applique aux mêmes gestes. La <a href="https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en">Commission européenne</a> rappelle que les données personnelles sont celles qui concernent une personne identifiée ou identifiable. Un courriel ou un tableau qui nomme des clients ou des salariés reste concerné tant que la personne est reconnaissable. Pour approfondir, voyez la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi former vos équipes à Copilot avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Copilot fait partie des outils d’intelligence artificielle qu’il enseigne, et il intègre aussi l’IA aux logiciels de ses clients. On lui doit <a href="https://wapy.pro">Wapy</a>, assistant WhatsApp à intelligence artificielle, et il co-fonde <a href="https://audyxa.com">Audyxa</a>. Son bagage : plus de ' . $ans . ' ans de métier, plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées et un passage par EPITECH en 2022.',
                'Sa manière de faire : partir de vos fichiers et de vos comptes, mesurer sur une tâche réelle, laisser les supports à l’entreprise et ne rien promettre en gain de temps. Aucun éditeur ne l’a certifié et il ne représente pas Microsoft ; il enseigne un outil du marché, quitte à conclure au cadrage qu’une session plus courte suffit. Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, et les pays desservis figurent sur les <a href="/zones/">zones d’intervention</a>.',
                'Si votre besoin dépasse l’usage d’un outil, par exemple brancher l’IA sur vos applications métier, il s’agit d’une mission d’<a href="/services/integration-ia-entreprise">intégration de l’IA en entreprise</a>. Les autres formations du domaine sont réunies sur la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d’inscrire votre équipe ?',
            'texte' => 'Recensez d’abord les licences Copilot réellement attribuées, vérifiez que chacun se connecte avec son compte professionnel, faites contrôler qui a accès à quoi dans les espaces partagés, puis choisissez deux ou trois tâches réelles par groupe. Exigez la relecture avant tout envoi. Les offres et les limites de l’éditeur changent : lisez sa page officielle le jour de la décision.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Prêt à former votre équipe à Copilot ?',
            'texte'  => 'Indiquez l’effectif, les métiers, les applications Microsoft 365 utilisées, les licences Copilot déjà attribuées et la formule envisagée : réponse sous 24 heures, puis proposition et devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation Copilot'],
        ],
    ],

    'faq' => [
        ['q' => 'Quelle différence entre Copilot Chat et Microsoft 365 Copilot ?', 'r' => 'Copilot Chat est la conversation incluse avec les licences Microsoft 365 éligibles, surtout fondée sur le web. Microsoft 365 Copilot désigne l’assistant intégré à Word, Excel, PowerPoint et Outlook, qui, avec la licence complète, s’appuie aussi sur vos courriels, fichiers et réunions. La formation apprend à repérer celui que vous avez.'],
        ['q' => 'Faut-il une licence payante pour suivre la formation ?', 'r' => 'Non. On apprend la méthode avec l’offre dont l’entreprise dispose déjà. Les fonctions avancées demandent une licence complémentaire, qui se décide après la formation, au nom de l’entreprise. Les formules évoluent ; la page officielle de l’éditeur fait foi.'],
        ['q' => 'Quelle licence Microsoft Copilot choisir pour une équipe ?', 'r' => 'Microsoft présente des offres pour les particuliers, pour les petites et moyennes entreprises, pour les grandes entreprises et pour Copilot Studio. Copilot Chat et Microsoft 365 Copilot ne se confondent pas, et certaines fonctions avancées se facturent à l’usage. Offres et limites évoluent : la page officielle des prix fait foi. Les prix affichés, les taxes et les moyens de paiement peuvent varier selon le pays de facturation (Bénin, Côte d’Ivoire, Sénégal, France, Belgique, Suisse, Canada ou autre) : vérifiez-les à l’étape de commande, depuis le pays qui paiera.'],
        ['q' => 'Peut-on utiliser Copilot avec un compte personnel au travail ?', 'r' => 'Techniquement oui, mais ce n’est pas ce que recommande la formation. La protection des données d’entreprise décrite par Microsoft concerne les comptes de travail. L’entreprise décide ce qu’elle tolère, et chaque employé vérifie son compte avant de coller un contenu.'],
        ['q' => 'Copilot lit-il tous les documents de l’entreprise ?', 'r' => 'Il n’affiche que ce que l’utilisateur a le droit de voir, selon Microsoft. Le risque vient des droits trop larges : un fichier ouvert à tous peut remonter dans une réponse. La formation apprend à vérifier ces droits.'],
        ['q' => 'Nos données servent-elles à entraîner les modèles de Microsoft ?', 'r' => 'Selon la page de confidentialité de l’éditeur, les requêtes, les réponses et les données accessibles via Microsoft Graph ne servent pas à entraîner les grands modèles de base. C’est un engagement de l’éditeur, à lire dans ses conditions pour votre contrat.'],
        ['q' => 'Copilot peut-il rédiger le compte rendu d’une réunion Teams ?', 'r' => 'Oui, pour les participants sous licence, à condition que l’organisateur ait activé Copilot et, selon le mode, que la transcription soit lancée. Le résultat est un brouillon que l’organisateur relit et valide avant diffusion.'],
        ['q' => 'Peut-on se fier aux formules et aux analyses d’Excel ?', 'r' => 'Pas sans contrôle. La formation fait recalculer quelques résultats à la main et vérifier les plages utilisées avant toute décision.'],
        ['q' => 'La formation couvre-t-elle ChatGPT, Claude ou Gemini ?', 'r' => 'Non, elle se concentre sur Copilot. Les autres assistants sont traités dans la formation IA en entreprise, et un comparatif aide à choisir entre eux.'],
        ['q' => 'Quelle taille de groupe ?', 'r' => 'Dix personnes au plus pour les deux jours, douze pour l’atelier découverte et huit en visioconférence.'],
        ['q' => 'La formation peut-elle se suivre à distance ?', 'r' => 'Oui : cinq à six séances de deux heures et demie en visioconférence avec partage d’écran. Une connexion fiable est nécessaire, et une solution de repli est prévue en cas de coupure.'],
        ['q' => 'Quel est le tarif ?', 'r' => 'Il est établi sur devis après le cadrage et varie selon l’effectif, la formule, le temps de préparation, le lieu et le suivi. Mobile Money, carte, PayPal, virement et espèces sont acceptés.'],
        ['q' => 'Un fonds peut-il financer la formation ?', 'r' => 'Chaque fonds a ses règles et rien n’est garanti. Richard SALANON ne revendique ni certification qualité ni agrément : écrivez au fonds, programme et devis joints, avant tout engagement.'],
        ['q' => 'Le formateur est-il certifié Microsoft ?', 'r' => 'Non, aucun éditeur ne l’a certifié et il ne représente pas Microsoft. Copilot est enseigné comme un outil du marché, avec les comptes et les fichiers de l’entreprise.'],
        ['q' => 'Un justificatif est-il remis ?', 'r' => 'Oui, une attestation à son nom pour chaque stagiaire, sans valeur de diplôme ni de certification de l’éditeur.'],
    ],

    'sources' => [
        ['titre' => 'Microsoft Learn, Qu’est-ce que Microsoft Copilot ?', 'url' => 'https://learn.microsoft.com/fr-fr/microsoft-365/copilot/copilot-overview', 'date' => '2026-10-26'],
        ['titre' => 'Microsoft Learn, Données, confidentialité et sécurité pour Microsoft Copilot', 'url' => 'https://learn.microsoft.com/fr-fr/microsoft-365/copilot/microsoft-365-copilot-privacy', 'date' => '2026-10-26'],
        ['titre' => 'Microsoft Learn, Protection des données d’entreprise dans Microsoft Copilot et Copilot Chat', 'url' => 'https://learn.microsoft.com/fr-fr/microsoft-365/copilot/enterprise-data-protection', 'date' => '2026-10-26'],
        ['titre' => 'Microsoft Learn, Sécuriser et gouverner les données pour Microsoft Copilot, guide de déploiement de base', 'url' => 'https://learn.microsoft.com/fr-fr/microsoft-365/copilot/secure-govern-copilot-foundational-deployment-guidance', 'date' => '2026-10-26'],
        ['titre' => 'Microsoft Learn, Gérer Microsoft Copilot dans les réunions et événements Teams', 'url' => 'https://learn.microsoft.com/fr-fr/microsoftteams/copilot-teams-transcription', 'date' => '2026-10-26'],
        ['titre' => 'Assistance Microsoft, Microsoft Copilot Chat, votre assistant d’IA pour le travail', 'url' => 'https://support.microsoft.com/copilot-microsoft365-chat', 'date' => '2026-10-26'],
        ['titre' => 'Commission européenne, la protection des données expliquée (RGPD)', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-26'],
        ['titre' => 'Microsoft, offres et prix de Copilot pour les entreprises', 'url' => 'https://www.microsoft.com/fr-fr/copilot/pricing/business', 'date' => '2026-10-27'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'microsoft-365-google-workspace', 'excel-google-sheets', 'ia-ethique-conformite', 'prompt-engineering', 'gouvernance-ia'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
