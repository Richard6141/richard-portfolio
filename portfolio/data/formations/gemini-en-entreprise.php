<?php
// ============================================================
// data/formations/gemini-en-entreprise.php · Fiche formation « Gemini en entreprise »
// (domaine intelligence-artificielle, fiche forte).
// Angle propre : Gemini de Google : application Gemini, Gemini dans Google Workspace
// (Docs, Sheets, Gmail, Meet) tel que décrit par les pages d’aide officielles,
// entrées multimodales, Gems, recherche approfondie, règles de données selon
// compte personnel ou compte Workspace. Richard enseigne Gemini (fait donné par lui) ;
// rien d’autre n’est affirmé sur sa pratique.
// Faits externes lus le 26/10/2026 : pages d’aide Google (confidentialité des
// applications Gemini, Gems, Deep Research, import de fichiers, Docs, Gmail, Sheets,
// Meet), centre de confidentialité de l’IA générative dans Workspace, Commission
// européenne (protection des données), SGG du Bénin (loi n° 2017-20).
// Aucun prix d’éditeur ni limite chiffrée : la page officielle fait foi.
// Aucune certification ni aucun partenariat attribué à Richard.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Gemini en entreprise : vos équipes apprennent à travailler avec l’application Gemini et Gemini dans Google Workspace, à l’alimenter en documents, images et audio, et à choisir le bon compte pour leurs données',
    'title'   => 'Formation Gemini de Google en entreprise | Richard SALANON',
    'meta'    => 'Formation Gemini pour vos équipes : application, Docs, Sheets, Gmail, Meet, fichiers et images, Gems, recherche approfondie, données. Sur devis.',
    'en_bref' => 'Cette formation apprend aux équipes qui travaillent dans l’écosystème Google (Gmail, Drive, Docs, Sheets, Meet) à utiliser Gemini : l’application, les fonctions intégrées à Workspace, l’analyse de documents, d’images et d’audio, les Gems, la recherche approfondie, et surtout le choix du compte qui détermine ce que devient chaque donnée saisie. Le parcours complet occupe quatre demi-journées réparties sur deux jours ; un atelier découverte d’une demi-journée permet de tester avant de s’engager. Les séances se déroulent chez vous, en visioconférence ou en mode mixte, pour une seule entreprise ou pour plusieurs structures réunies. Tarif sur devis, établi après un échange de cadrage.',
    'publie'  => '2026-11-16',
    'maj'     => '2026-11-16',

    'domaine' => 'intelligence-artificielle',
    'forte'   => true,
    'duree'   => '2 jours en 4 demi-journées, ou atelier d’une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : comprendre les deux Gemini et choisir le compte',
            'duree'  => '3 h 30',
            'points' => [
                'Deux familles à ne pas confondre : l’application Gemini, où l’on converse, et Gemini dans les produits Google (Docs, Sheets, Gmail, Meet), que les pages d’aide décrivent comme un panneau « Ask Gemini » ou des fonctions intégrées.',
                'Compte personnel, compte professionnel ou scolaire, compte Workspace de l’entreprise : ce que chacun change pour les fonctions disponibles, pour l’historique et pour l’usage des conversations.',
                'Ouvrir ensemble les réglages de chaque compte de la salle : activité de l’application, durée de conservation, conversations temporaires, applications connectées.',
                'Classer les informations de l’entreprise en trois familles : ce qui peut être confié à Gemini sur le compte de l’entreprise, ce qu’on anonymise d’abord, ce qui n’y entre jamais.',
                'Premier exercice : une même demande, un courrier à reformuler, passée dans l’application puis dans Gmail ou Docs quand le compte le permet, avec comparaison de ce qui change.',
                'Repérer ce qui est absent du compte de chacun : une fonction vue dans une démonstration peut être réservée à une formule, à un pays, à une langue ou à une décision de l’administrateur.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : documents, images et audio comme matière de travail',
            'duree'  => '3 h 30',
            'points' => [
                'Importer un document, un tableur, une photo ou un fichier depuis l’appareil ou depuis Drive, selon les sources proposées par l’application, et préciser ce qu’on attend de Gemini.',
                'Faire parler une image : tableau blanc photographié, facture, étiquette, capture de message, schéma ; contrôler ligne à ligne ce qui a été lu.',
                'Travailler à partir d’un son ou d’une note vocale quand l’application le permet, et vérifier la transcription avant de s’en servir.',
                'Demander des citations ou des numéros de page pour chaque point d’un résumé, puis rouvrir le document source.',
                'Limites décrites par l’éditeur : un fichier mal analysé se renvoie, une demande qui couvre trop de détails dispersés dégrade la réponse, les limites d’usage se renouvellent avec le temps.',
                'Exercice croisé : chaque participant vérifie dans la source la lecture d’un document faite par un collègue.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : Gemini dans Gmail, Docs, Sheets et Meet',
            'duree'  => '3 h 30',
            'points' => [
                'Gmail : résumer un long fil de messages, en extraire les actions, rédiger ou reprendre un brouillon pour le ton et la clarté, depuis le panneau latéral.',
                'Docs : aider à rédiger, résumer un document, reprendre un passage ; lire sur la page d’aide quelles fonctions dépendent du type de compte.',
                'Sheets : demander un tableau, une formule, un graphique ou une analyse ; lire l’aperçu d’une action avant de l’appliquer, savoir l’annuler, et recalculer un chiffre à la main.',
                'Meet : prise de notes par Gemini, consentement des participants, contenu du document de notes, langue, relecture avant diffusion.',
                'Ce que Gemini voit : il respecte les droits d’accès existants, selon le centre de confidentialité de Google ; les fichiers auxquels une personne n’a pas accès ne lui sont pas ouverts.',
                'Exercice : sur un fil de messages réel du service, produire le résumé, le brouillon de réponse et le tableau de suivi, puis les relire.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : Gems, recherche approfondie et plan d’usage',
            'duree'  => '3 h 30',
            'points' => [
                'Créer un Gem : nom, instructions, fichiers de référence ; tester sur trois demandes, corriger, décider qui peut le modifier et le partager.',
                'Tenir compte de l’annonce de la page d’aide sur la transition des Gems vers les skills sur les comptes personnels, et prévoir une documentation des consignes qui ne dépende pas d’une fonction.',
                'Lancer une recherche approfondie : relire et modifier le plan de recherche proposé avant de démarrer, choisir les sources, lire le rapport par ses références.',
                'Exporter ou partager un rapport sans exposer plus que nécessaire, et décider quel document reste la référence de l’entreprise.',
                'Rédiger la fiche de tâche de chaque participant : demande type, compte à utiliser, vérifications obligatoires, personne qui valide.',
                'Plan d’usage et règles écrites de l’équipe sur les comptes, les données et les fonctions autorisées.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou atelier d’une demi-journée'],
        ['l' => 'Public', 'v' => 'Équipes qui travaillent avec Gmail, Drive, Docs, Sheets et Meet, sans prérequis technique'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 10 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Quels gestes avec Gemini seront acquis au terme du parcours, et quelles limites faut-il connaître ?',
            'paragraphes' => [
                'Dans une entreprise qui vit dans Gmail, Drive et Google Agenda, Gemini arrive de plusieurs côtés à la fois : un site où l’on discute, un bouton dans un document, un panneau dans la messagerie, une option dans une visioconférence. Chacun l’essaie un peu, personne ne sait quel compte il utilise, et le jour où l’on demande où vont les données, il n’y a pas de réponse. La formation remet de l’ordre : quel Gemini, avec quel compte, pour quelle tâche, avec quelles vérifications.',
                'Huit gestes sont acquis par chaque participant en sortant de la seconde journée. Distinguer l’application Gemini et les fonctions intégrées à Workspace. Savoir quel compte il utilise et ce que les pages d’aide de Google en disent. Importer un document, une image ou un fichier et obtenir une lecture qu’il sait contrôler. Résumer un fil de messages et rédiger une réponse dans Gmail. Demander un tableau ou une analyse dans Sheets et en vérifier un chiffre. Utiliser les notes de Meet en connaissant les règles de consentement. Créer un Gem avec des instructions claires. Lancer une recherche approfondie et lire son rapport par ses sources.',
                'La formation ne couvre pas tout. Elle n’est pas un cours général sur les assistants d’IA : le travail quotidien avec ChatGPT, Claude, Gemini ou Copilot sur ses propres documents relève de la formation <a href="/formations/ia-en-entreprise">IA en entreprise</a>. Elle ne traite pas la recherche documentaire avec un moteur de réponse, sujet de la formation <a href="/formations/perplexity-en-entreprise">Perplexity en entreprise</a>, ni la construction d’un robot qui répond à partir de vos archives, sujet du <a href="/formations/rag-chatbot-documents">chatbot sur vos documents</a>. Elle ne dit pas quelle formule payer : les formules et limites évoluent, et la page officielle de Google fait foi.',
                'Aucun gain de temps chiffré n’est annoncé non plus. Avec Gemini, le résultat varie selon la nature de la demande, l’état des fichiers fournis, le type de compte et les fonctions réellement ouvertes chez vous. C’est pourquoi la préparation passe en revue, compte par compte, ce qui s’affiche et ce qui reste fermé : la session n’enseigne ainsi que des gestes que l’équipe pourra reproduire dès le lundi suivant.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui peut s’inscrire, que faut-il savoir au départ et que faut-il apporter ?',
            'intro' => 'Le public naturel est celui dont les journées se passent déjà dans les outils Google. Pas de bagage technique exigé : écrire un courriel et ouvrir un document partagé suffit pour suivre.',
            'items' => [
                ['titre' => 'Qui vient en général', 'texte' => 'Secrétariat et assistanat de direction, commerciaux et personnel du service client qui vivent dans Gmail, responsables administratifs et financiers qui travaillent dans Sheets, chargés de projet qui animent des réunions sur Meet, enseignants et personnels d’établissements équipés de Google, dirigeants de PME qui ont tout sur Drive.'],
                ['titre' => 'Connaissances préalables', 'texte' => 'Le parcours accueille les débutants complets comme les équipes où chacun teste Gemini dans son coin. Un bref questionnaire envoyé en amont dresse la liste des comptes, des outils et des corvées du quotidien, ce qui permet de former des groupes homogènes.'],
                ['titre' => 'Un groupe par type de compte', 'texte' => 'Une équipe sur Workspace d’entreprise et une autre sur des comptes personnels n’ont pas les mêmes fonctions ni les mêmes garanties. Quand c’est possible, les groupes sont composés par type de compte. Pour l’atelier découverte, un groupe mêlé fonctionne, à condition de dire à voix haute quel compte chacun utilise.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur par participant avec un navigateur récent et une connexion stable, car Gemini fonctionne en ligne. Le téléphone sert pour certains exercices seulement, selon les fonctions que les pages d’aide de Google décrivent pour les applications mobiles.'],
                ['titre' => 'Les comptes', 'texte' => 'Ceux que l’entreprise a déjà ouverts : compte Workspace de l’organisation, comptes personnels des participants si l’entreprise le décide. L’administrateur Workspace, s’il existe, est prévenu en amont, car certains accès (Drive, connecteurs) dépendent de lui. Aucun achat de licence n’est nécessaire tant que l’équipe n’a pas constaté ce qui lui est réellement utile.'],
                ['titre' => 'Les fichiers à apporter', 'texte' => 'Chacun apporte entre trois et cinq pièces authentiques, déjà copiées sur son poste : un fil de courriels, un tableur, une présentation, une photo de tableau blanc, un compte rendu. Toute pièce qui nomme une personne est d’abord anonymisée.'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Que contient chacune des quatre demi-journées du programme ?',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle est la différence entre l’application Gemini et Gemini dans Google Workspace ?',
            'paragraphes' => [
                'L’application Gemini est le lieu de la conversation : on y écrit une demande, on y dépose des fichiers, on y retrouve ses Gems et, selon le compte, ses recherches approfondies. Gemini dans Workspace est une autre porte d’entrée : un panneau « Ask Gemini » en haut à droite de Gmail ou de Sheets, des fonctions d’aide à la rédaction dans Docs, des notes automatiques dans Meet. Les pages d’aide de Google décrivent ces fonctions produit par produit, et c’est cette lecture que la formation fait faire à chaque participant plutôt que de promettre un catalogue.',
                'Ce que les pages consultées permettent de dire est précis, et parfois nuancé. Sur Gmail, l’aide indique que la fonction exige une formule Workspace ou un plan Google AI éligible, et que les utilisateurs de comptes personnels peuvent l’essayer par le programme d’essai Workspace Experiments. Sur Sheets, elle indique la même chose, et précise que les fichiers Excel doivent être convertis au format Google Sheets pour que Gemini les traite au mieux. Sur la page de Docs consultée, la fonction est décrite pour un compte personnel géré par l’utilisateur inscrit à ce programme d’essai, et les comptes Workspace n’y sont pas éligibles : la disponibilité varie donc selon le compte, le produit, la langue et le pays.',
                'La conséquence pratique est simple et elle structure la première matinée : on ne forme pas sur un Gemini abstrait. On part des comptes réels de la salle, on lit ensemble ce que la page d’aide du produit annonce pour eux, on constate ce qui s’affiche, et l’on bâtit les exercices sur ce qui existe. Une démonstration vue lors d’une conférence ne vaut pas une fonction disponible chez vous.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles fonctions de Gemini la formation utilise-t-elle, produit par produit ?',
            'legende' => 'Fonctions décrites par les pages d’aide de Google consultées le 26 octobre 2026. Les formules, les limites d’utilisation, les langues prises en charge et les noms de fonctions évoluent ; la page officielle fait foi, et aucun prix n’est repris ici.',
            'entetes' => ['Produit', 'Ce que décrit Google', 'Usage en formation', 'À savoir'],
            'lignes'  => [
                ['Application Gemini', 'Import de documents, tableurs, photos, vidéos et autres fichiers pour obtenir réponses, résumés et analyses', 'Lire un document, une image, un tableur', 'Un fichier mal analysé se renvoie ; les limites se renouvellent avec le temps'],
                ['Gmail', 'Synthétiser de longs fils en points, lister les actions, rédiger ou reprendre un brouillon, panneau « Ask Gemini »', 'Courriers, relances, résumés de fils', 'Formule Workspace ou plan Google AI éligible ; comptes personnels via le programme Workspace Experiments'],
                ['Docs', 'Aide à la rédaction, résumé via le menu @ ou le panneau latéral, image, commentaires', 'Rédiger, reprendre, résumer', 'Sur la page consultée : compte personnel et programme d’essai, pas les comptes Workspace'],
                ['Sheets', 'Tableaux, formules, graphiques, analyses, actions avec aperçu puis bouton Appliquer et annulation', 'Structurer et analyser des données', 'Historique de conversation temporaire ; graphiques non mis à jour avec les données ; sortie parfois inexacte'],
                ['Meet', 'Notes dans un document Google avec onglets, résumé pour les retardataires, consentement possible', 'Comptes rendus de réunion', 'Une seule langue par réunion ; organisateur sur une formule éligible'],
                ['Gems', 'Versions personnalisées de Gemini avec instructions et fichiers, partage possible', 'Assistants d’équipe sur une tâche', 'Annonce de transition vers les skills sur les comptes personnels'],
                ['Recherche approfondie', 'Plan de recherche modifiable, sources choisies, rapport après plusieurs minutes, export vers Docs', 'Dossiers documentaires', 'Accès aux modèles selon le plan ; rapports retrouvables si l’historique est actif'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment travailler avec des images, des documents et de l’audio dans Gemini ?',
            'paragraphes' => [
                'La page d’aide de Google sur l’import de fichiers explique que l’on peut déposer dans l’application des documents, des tableurs, des photos, des vidéos et d’autres fichiers pour obtenir des réponses, des résumés et des analyses, depuis l’appareil, depuis Drive ou depuis d’autres sources proposées. C’est le point où un usage « chat » devient un usage de bureau : au lieu de recopier un texte, on donne la pièce elle-même.',
                'La formation insiste sur trois habitudes. D’abord, dire à Gemini ce qu’on attend du fichier : une extraction de champs, un résumé de dix lignes, une liste de risques, un tableau. Ensuite, exiger les références : un résumé sans numéro de page est invérifiable. Enfin, relire la lecture elle-même. Une photo de facture, de tableau blanc ou d’étiquette est lue par le modèle ; un chiffre mal lu glisse facilement dans un tableau. Le participant compare donc la sortie à l’image, ligne par ligne, avant de s’en servir.',
                'La même page prévient que de longs fichiers ou des demandes qui couvrent beaucoup de détails dispersés peuvent dégrader la qualité de la réponse. La parade apprise en formation est de découper : une question par passage, un document à la fois, une vérification entre deux. L’audio suit la même logique : une note vocale transcrite se relit avant d’alimenter un compte rendu, et un nom propre mal transcrit se corrige à la main.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels exercices chaque métier fait-il avec ses propres fichiers ?',
            'legende' => 'Cas montés pendant la préparation avec les pièces que l’entreprise a transmises. Dans la colonne de droite figure le contrôle à faire soi-même avant d’exploiter la production de Gemini.',
            'entetes' => ['Poste', 'Fichier de départ', 'Ce que Gemini produit', 'Ce que le participant vérifie'],
            'lignes'  => [
                ['Assistante ou assistant de direction', 'Fil de vingt messages avec un fournisseur', 'Résumé, liste des engagements, brouillon de réponse', 'Dates et montants repris du fil, ton adapté, aucun engagement non voulu'],
                ['Commercial', 'Photo de la carte de visite et notes d’un rendez-vous', 'Fiche contact et courriel de suivi', 'Orthographe des noms, numéro de téléphone, promesses faites'],
                ['Comptable ou gestionnaire', 'Export de tableur de dépenses', 'Totaux par catégorie, tableau croisé, graphique', 'Recalcul d’un total à la main, lignes oubliées, format des dates'],
                ['Responsable de projet', 'Compte rendu de réunion Meet', 'Décisions, actions, responsables, échéances', 'Fidélité aux propos tenus, accord des participants avant diffusion'],
                ['Enseignant ou formateur', 'Photo de tableau et support de cours', 'Plan de séance et questions de révision', 'Exactitude du contenu, adaptation au niveau, aucune donnée d’élève'],
                ['Responsable des achats', 'Trois devis au format PDF', 'Tableau comparatif des lignes et conditions', 'Chaque ligne reprise dans le devis d’origine, taxes et frais exclus ou inclus'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que deviennent vos données selon que vous utilisez un compte personnel ou un compte Workspace ?',
            'paragraphes' => [
                'C’est la question qui décide du reste, et la page de confidentialité de l’application Gemini la pose d’emblée : elle précise qu’elle ne traite que l’usage avec un compte connecté, et que, pour un compte professionnel ou scolaire, les conditions de traitement peuvent être différentes ; elle renvoie alors au centre de confidentialité de l’IA générative dans Workspace. Deux comptes, deux régimes : la formation les lit côte à côte.',
                'Sur un compte personnel, la page indique que Google collecte ce que l’utilisateur fournit (demandes, fichiers, photos, enregistrements et transcriptions de Gemini Live, instructions des Gems) et ce qui est généré. Elle explique aussi que certaines conversations sont relues par des examinateurs humains, y compris chez des prestataires de Google, après avoir été dissociées du compte, et elle conseille de ne pas saisir d’information confidentielle que l’on ne voudrait pas voir lue. Quand l’option « Keep Activity » est active, les conversations et les fichiers déposés sont enregistrés dans l’activité et servent à améliorer les services de Google, y compris à entraîner des modèles ; désactivée, elle évite l’affichage dans l’activité et l’entraînement, mais Google garde encore les conversations 72 heures pour répondre et pour la sécurité.',
                'Côté durée, la même page indique une suppression automatique de l’activité après 18 mois par défaut, modifiable, et précise que les conversations relues par des humains peuvent être conservées jusqu’à trois ans, même après suppression de l’activité, puisqu’elles ne sont plus liées au compte. Ces chiffres sont ceux de Google à la date de consultation : ils peuvent changer, et le texte officiel prévaut.',
                'Sur un compte Workspace, le centre de confidentialité décrit d’autres engagements. Il affirme que Workspace n’utilise pas les données du client pour entraîner des modèles sans son accord préalable ; que les conversations et fichiers déposés dans l’application Gemini ne sont pas relus par des humains ; que Gemini respecte les droits d’accès existants et ne récupère pas un document ou un message auquel l’utilisateur n’a pas accès ; et que l’historique de conversation dans Workspace n’est visible que de l’utilisateur. Ce sont des engagements annoncés par l’éditeur, pas des vérifications indépendantes : une entreprise qui traite des données sensibles lit les conditions de sa formule et celles de son contrat avant de décider.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Compte personnel ou compte Workspace : que dit chaque page officielle ?',
            'legende' => 'Synthèse de la page de confidentialité des applications Gemini et du centre de confidentialité de l’IA générative dans Workspace, consultés le 26 octobre 2026. Ces pages évoluent et peuvent différer selon votre contrat : elles font foi, pas ce tableau.',
            'entetes' => ['Point', 'Compte personnel', 'Compte Workspace'],
            'lignes'  => [
                ['Entraînement des modèles', 'Possible quand « Keep Activity » est actif ; évité quand il est désactivé, sauf retour envoyé par l’utilisateur', 'Pas d’usage des données du client pour l’entraînement sans son accord préalable, selon le centre de confidentialité'],
                ['Relecture humaine', 'Certaines conversations peuvent être relues, après dissociation du compte', 'Conversations et fichiers de l’application Gemini non relus par des humains, selon le centre de confidentialité'],
                ['Historique', 'Activité enregistrée si « Keep Activity » est actif, suppression automatique réglable', 'Historique visible seulement de l’utilisateur, selon le centre de confidentialité ; à Sheets, l’historique de conversation peut être perdu'],
                ['Accès aux documents', 'Drive accessible si l’utilisateur l’autorise, avec activité active', 'Droits d’accès existants respectés ; l’administrateur peut ouvrir ou fermer des fonctions'],
                ['Administration', 'Aucun administrateur : chaque personne règle son compte', 'Un administrateur décide des fonctions, de l’accès à Drive, des connecteurs et des règles de sécurité'],
                ['Disponibilité des fonctions', 'Certaines fonctions passent par un programme d’essai ou un plan Google AI', 'Fonctions rattachées à la formule Workspace ou au plan Google AI éligible'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelles informations ne faut-il jamais confier à Gemini, quel que soit le compte ?',
            'items' => [
                'Le nom, le téléphone, l’adresse ou la situation d’un client, d’un patient, d’un élève ou d’un bénéficiaire.',
                'Un contrat, une offre commerciale ou une grille de prix qui n’est pas public.',
                'Des identifiants, des mots de passe, des numéros de compte, de carte ou de mobile money.',
                'Un dossier juridique, médical ou disciplinaire concernant une personne nommée.',
                'Des informations stratégiques non annoncées : fusion, levée de fonds, recrutement, résultats.',
                'Tout document classé « jamais » dans le classement de l’entreprise, y compris sous forme de photographie ou d’enregistrement.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment bien régler son compte avant la première utilisation ?',
            'intro' => 'La première heure de formation est consacrée aux réglages, parce qu’ils déterminent le reste. Chaque participant ouvre ses propres paramètres, pas ceux d’un compte de démonstration.',
            'items' => [
                ['titre' => 'Repérer le type de compte', 'texte' => 'Adresse en gmail.com, adresse de l’entreprise gérée par un administrateur, compte d’établissement. Les règles de données et les fonctions ne sont pas les mêmes ; on le dit à voix haute au tour de table.'],
                ['titre' => 'Décider de l’activité', 'texte' => 'Sur un compte personnel, l’option « Keep Activity » conditionne l’enregistrement, l’amélioration des services et, selon la page de Google, le retour des anciens rapports de recherche approfondie. L’équipe décide si elle l’active, pour quels usages, et le consigne par écrit.'],
                ['titre' => 'Régler la conservation', 'texte' => 'La suppression automatique de l’activité est réglable. Une équipe qui manipule des documents de clients choisit la durée la plus courte compatible avec son travail, plutôt que la valeur par défaut.'],
                ['titre' => 'Connaître les applications connectées', 'texte' => 'Gmail, Drive, Agenda et d’autres services peuvent être reliés à Gemini quand le compte et l’administrateur l’autorisent. Relier Gmail à un assistant, c’est lui ouvrir une boîte entière : la décision se prend en équipe, pas à titre individuel.'],
                ['titre' => 'Utiliser les conversations temporaires à bon escient', 'texte' => 'La page de Google précise que les conversations temporaires, comme celles tenues avec l’activité désactivée, sont conservées 72 heures avec le compte pour répondre à l’utilisateur et pour protéger Google, ses utilisateurs et le public, y compris avec l’aide de relecteurs humains. Une conversation temporaire n’est donc pas un coffre-fort.'],
                ['titre' => 'Demander à l’administrateur', 'texte' => 'Sur Workspace, certaines fonctions (accès à Drive, connecteurs tiers, notes de Meet) dépendent de lui. La formation recommande une liste écrite des fonctions autorisées, tenue à jour par la personne qui administre le compte.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'À quoi servent les Gems, et que dit Google de leur avenir ?',
            'paragraphes' => [
                'Selon la page d’aide, un Gem est une version enregistrée et personnalisée de Gemini : un nom, des instructions, éventuellement des fichiers de référence importés depuis l’appareil, depuis Drive ou depuis un carnet NotebookLM. On l’ouvre ensuite depuis la barre latérale pour poser ses demandes avec le cadre déjà posé. Une équipe y trouve un moyen de ne plus recoller chaque matin la même consigne : un Gem « réponse aux réclamations », un Gem « compte rendu de réunion », un Gem « relecture de contrat de fournisseur à l’usage du service achats ».',
                'La même page apporte deux informations qui comptent. D’une part, l’accès à Drive suppose que l’activité soit active et que Workspace soit connecté à l’application, et un Gem utilise la dernière version d’un fichier Drive : modifier le fichier modifie les réponses. Un Gem peut aussi être partagé, mais un Gem partagé n’apparaît chez le destinataire qu’après son ouverture. D’autre part, la page annonce qu’à partir de novembre 2026 les Gems doivent disparaître des comptes personnels pour céder la place aux skills. La formation ne prédit pas ce que seront ces skills : elle en tire une règle de prudence.',
                'Cette règle est de ne pas faire reposer le savoir-faire de l’équipe sur une fonction. Les consignes d’un Gem sont tenues dans un document de l’entreprise, versionné, avec son auteur et sa date de dernière relecture. Si Google renomme, déplace ou retire la fonction, la bibliothèque de consignes survit, et se recolle dans le successeur. Le Gem est une commodité ; la consigne écrite, relue et testée, est l’actif.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment écrire les instructions d’un Gem utile à une équipe ?',
            'intro' => 'Un Gem mal écrit donne des réponses assurées mais fausses, à chaque personne qui l’ouvre. La formation en fait un exercice de rédaction, pas de réglage.',
            'items' => [
                ['titre' => 'Un rôle et un lecteur', 'texte' => 'Pour qui répond-il, à qui, dans quel service, avec quelle langue. « Tu aides le service client d’un hôtel à répondre en français à des clients francophones et anglophones » vaut mieux que « tu es un expert ».'],
                ['titre' => 'Des règles de forme', 'texte' => 'Longueur, ton, formule de politesse, structure de la réponse, ce qu’il ne faut jamais écrire. Quelques lignes, relues par la personne qui connaît le mieux le courrier de l’entreprise.'],
                ['titre' => 'Des fichiers de référence courts', 'texte' => 'Charte de ton, liste de questions fréquentes, glossaire. Un fichier de cent pages noie l’essentiel. Un responsable retire les fichiers périmés, et l’option de citation des fichiers peut rester active pour vérifier d’où vient une réponse.'],
                ['titre' => 'Un cadre de vérification', 'texte' => 'Le Gem rappelle ce qu’il ne sait pas : il ne devine ni prix ni délais, il demande l’information manquante. Il signale quand une question sort de son périmètre.'],
                ['titre' => 'Trois essais avant le partage', 'texte' => 'Une demande simple, une demande piégeuse, une demande hors sujet. Si les trois réponses ne conviennent pas, on corrige les instructions avant de partager.'],
                ['titre' => 'Un propriétaire', 'texte' => 'Une personne nommée corrige, renomme et archive. Sans propriétaire, un Gem partagé dérive au fil des modifications de chacun.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment mener une recherche approfondie avec Gemini sans se perdre dans le rapport ?',
            'items' => [
                ['titre' => 'Écrire la question en une phrase', 'texte' => 'Sujet, public concerné, période, pays, décision que la recherche doit éclairer. Une question floue produit un rapport long et peu utile ; on la reformule avant de lancer.', 'duree' => 'Préparation'],
                ['titre' => 'Choisir les sources', 'texte' => 'La page d’aide indique que la recherche Google est incluse par défaut, qu’on peut la retirer et ajouter d’autres sources : Gmail ou Drive quand Workspace est connecté, fichiers importés, carnets NotebookLM. Mélanger le web et ses propres documents change la nature du rapport ; on le décide en connaissance de cause.', 'duree' => 'Préparation'],
                ['titre' => 'Relire et modifier le plan', 'texte' => 'Gemini propose un plan de recherche que l’on peut modifier avant de cliquer sur « Start research ». C’est la bonne place pour corriger le périmètre : retirer une piste hors sujet, ajouter une exigence de sources officielles.', 'duree' => 'Avant le lancement'],
                ['titre' => 'Laisser travailler', 'texte' => 'Selon l’aide, un rapport prend en général plusieurs minutes, davantage pour un sujet complexe, et l’on est notifié quand il est prêt. Pendant l’attente, le participant prépare ses critères de lecture.', 'duree' => 'Attente'],
                ['titre' => 'Lire le rapport par ses références', 'texte' => 'On commence par la liste des sources, pas par le texte : combien, de quel type, de quelle date. Un rapport appuyé sur des blogs ne vaut pas un rapport appuyé sur des textes officiels.', 'duree' => 'Lecture'],
                ['titre' => 'Contrôler cinq affirmations', 'texte' => 'On retrouve dans leur source les cinq affirmations qui comptent pour la décision. Une seule erreur sérieuse suffit à relire le reste avec méfiance.', 'duree' => 'Contrôle'],
                ['titre' => 'Rédiger la note finale', 'texte' => 'Le rapport est une matière première, exportable vers Docs d’après la page d’aide. La note remise à la direction est écrite et signée par la personne, avec ses références, ses réserves et sa recommandation.', 'duree' => 'Rédaction'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment se déroule la formation : groupes, pratique et supports remis ?',
            'intro' => 'Le travail porte sur les comptes Google, les fichiers et les missions véritables du groupe, jamais sur des cas de vitrine.',
            'items' => [
                ['titre' => 'Avant la session', 'texte' => 'Un ou deux entretiens de cadrage déterminent les tâches visées, les comptes Google en service et les règles sur les données. Il peut en ressortir qu’un atelier plus court répond au besoin. Chacun remplit aussi un questionnaire sur son type de compte et ses outils.'],
                ['titre' => 'Effectifs', 'texte' => 'Le plafond est de 10 participants pour les deux jours complets, 12 pour l’atelier découverte et 8 pour une séance en visioconférence.'],
                ['titre' => 'Mise en pratique', 'texte' => 'Le gros du temps est passé les mains sur Gemini, avec ses propres fichiers Google. Après chaque démonstration, l’exercice se fait seul, puis un binôme relit : on confronte ce que Gemini a produit chez le collègue à la pièce d’origine.'],
                ['titre' => 'Fichiers installés d’avance', 'texte' => 'Les pièces d’exercice sont copiées sur chaque ordinateur avant de commencer, pour ne pas dépendre du réseau au moment de les ouvrir. Si la connexion tombe, un plan B existe déjà.'],
                ['titre' => 'Ce que l’équipe garde', 'texte' => 'Le programme, les supports, la grille de relecture des productions de Gemini, des consignes classées par métier, les fiches de tâche complétées en cours de session et le document des règles de données propre à l’entreprise.'],
                ['titre' => 'Neutralité', 'texte' => 'La formation montre Gemini là où il est utile et dit où un autre outil convient mieux. Pour choisir entre plusieurs assistants, voir le comparatif cité en bas de page.'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi sert Gemini selon le métier et le pays ?',
            'items' => [
                ['secteur' => 'Hôtel, restaurant ou agence de voyages, à Cotonou, Abidjan ou Dakar', 'probleme' => 'Les demandes arrivent par courriel dans plusieurs langues, avec des pièces jointes et des photos, et les réponses prennent du temps aux heures de pointe.', 'solution' => 'Un Gem de réponse aux demandes, des brouillons dans Gmail relus avant envoi, lecture des photos de réservation ou de facture contrôlée à l’œil. Aucun numéro de passeport ni de carte n’est saisi.'],
                ['secteur' => 'PME commerciale ou distribution, à Lomé, Douala ou Cotonou', 'probleme' => 'Les ventes se suivent dans un tableur Google, les devis arrivent en photo ou en PDF, et le gérant refait chaque semaine les mêmes totaux à la main.', 'solution' => 'Sheets pour les tableaux et les formules, lecture des devis déposés dans l’application, recalcul d’un total à la main avant chaque décision. Les chiffres de l’entreprise restent sur un compte Workspace de l’entreprise.'],
                ['secteur' => 'Organisations non gouvernementales et programmes de développement, Afrique de l’Ouest et centrale', 'probleme' => 'Les équipes rédigent des rapports pour les bailleurs, tiennent des réunions de coordination sur Meet et manipulent des documents partagés sur Drive.', 'solution' => 'Notes de Meet avec consentement des participants, relues avant diffusion ; synthèses de documents publics ; recherche approfondie sur des sources ouvertes. Aucune donnée de bénéficiaire n’est confiée à l’assistant.'],
                ['secteur' => 'Écoles, universités et centres de formation', 'probleme' => 'Les enseignants préparent des supports, des plans de séance et des questions de révision, avec des comptes d’établissement ou des comptes personnels mêlés.', 'solution' => 'Distinction explicite des comptes, plans de séance à partir de photos de tableau, Gem de préparation de cours, aucune donnée d’élève saisie. Les règles de l’établissement priment sur l’usage individuel.'],
                ['secteur' => 'Petite structure de services installée en France, en Belgique ou en Suisse', 'probleme' => 'Les équipes sont sur Google Workspace, le RGPD s’applique aux données des clients, et le dirigeant veut savoir ce qui peut être confié à l’assistant.', 'solution' => 'Séances à distance, règles écrites par type de compte, résumés de fils dans Gmail sur des échanges non sensibles, notes de Meet avec consentement. La décision sur les connecteurs revient à l’administrateur.'],
                ['secteur' => 'Entreprise ou organisme public au Canada', 'probleme' => 'Les messages et les documents circulent en français et en anglais, avec des équipes réparties sur plusieurs sites.', 'solution' => 'Demandes et réponses dans les deux langues, notes de Meet dans la langue de la réunion (une seule par réunion d’après l’aide), traduction relue par un locuteur du métier.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format retenir : atelier, formation complète, distance ou hybride ?',
            'legende' => 'Rien n’empêche d’enchaîner : on peut commencer par l’atelier découverte, puis dérouler la formation complète avec une équipe pilote.',
            'entetes' => ['Formule', 'Temps prévu', 'Effectif maximal', 'Situation adaptée'],
            'lignes'  => [
                ['Atelier découverte', 'Une demi-journée', '12 participants', 'Personne n’a encore ouvert Gemini, ou la direction veut observer avant de décider'],
                ['Formation complète, intra', '2 jours, soit 4 demi-journées', '10 participants, regroupés par type de compte', 'Le service travaille dans Gmail, Drive, Docs et Sheets et cherche une méthode partagée'],
                ['Session mutualisée, inter', '1 à 2 jours', 'Plusieurs structures d’un même réseau', 'Une ou deux personnes par organisation ; les exercices utilisent des pièces publiques ou inventées, sans dossier interne'],
                ['À distance', '5 à 6 séances de 2 h 30', '8 participants', 'Équipe dispersée sur plusieurs sites ou pays ; des séances courtes passent mieux en visioconférence'],
                ['Hybride', 'Une journée en salle, puis des séances à distance', '10 participants', 'Découverte en présentiel, puis entraînement à distance sur les tâches retenues'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et comment se règle-t-elle ?',
            'intro'      => 'Un devis chiffre chaque poste une fois le cadrage terminé : aucun tarif fixe n’est affiché. Le paiement passe par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les licences Google Workspace ou Google AI que vous détenez ou souscrivez restent à votre charge, hors devis, et leurs conditions se lisent sur la page officielle de Google.',
            'items'      => [
                ['offre' => 'Atelier découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée avec vos comptes Google et vos fichiers', 'Premiers réflexes et règles minimales sur les données', 'Avis sur l’étape suivante']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Exercices menés sur vos fichiers, vos comptes et vos missions', 'Gems, recherche approfondie, consignes écrites par métier', 'Supports remis']],
            ],
            'variations' => [
                'Combien de personnes, répartis en combien de groupes.',
                'La formule choisie et le nombre de demi-journées.',
                'La préparation des exercices sur vos pièces et le contrôle des comptes.',
                'L’endroit : chez vous, dans une salle louée, ou hors de Cotonou et du Bénin.',
                'Le mode de tenue : en salle, en visioconférence ou mixte.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'La session Gemini peut-elle être financée par un fonds de formation continue ?',
            'paragraphes' => [
                'Tout dépend du dispositif visé et de la situation de l’entreprise ; personne ne peut promettre un remboursement. Plusieurs pays ont un fonds destiné aux entreprises du secteur privé : le FDFP en Côte d’Ivoire, le 3FPT au Sénégal, le FODEFCA au Bénin, les opérateurs de compétences (OPCO) en France. Chacun a ses propres conditions, ses formulaires et ses exigences vis-à-vis de l’organisme qui forme.',
                'Le bon réflexe est d’écrire au fonds avant tout engagement, en joignant le programme et le devis. Richard SALANON ne met en avant aucune certification qualité ni agrément reconnu par ces fonds : à l’entreprise de s’assurer qu’un financement reste envisageable pour elle, et de bâtir son budget sans lui si la décision en dépend.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Qui est responsable de ce que Gemini a écrit dans vos documents ?',
            'texte' => 'Toujours l’entreprise et la personne qui envoie. Google lui-même prévient, sur la page d’aide de Sheets, que les suggestions de Gemini peuvent être inexactes ou inappropriées et ne doivent pas servir de conseil médical, juridique, financier ou professionnel, et que, dans un fichier partagé avec l’extérieur, le contenu ajouté par Gemini peut être visible de personnes hors du domaine. L’histoire d’<a href="/histoires/air-canada-chatbot">Air Canada et de son chatbot</a> rappelle qu’une entreprise répond de ce que dit son assistant. La formation fait de la relecture humaine un geste obligatoire avant tout envoi.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels travers observe-t-on après la session avec Gemini, et comment s’en prémunir ?',
            'intro' => 'Le vrai test arrive environ quatre semaines plus tard : que reste-t-il des habitudes prises ? Voici les glissements fréquents, qu’on désamorce dès les deux jours.',
            'items' => [
                ['titre' => 'Mélanger comptes personnels et professionnels', 'texte' => 'Un document de l’entreprise passe dans un compte personnel « parce que la fonction y est ». Les règles écrites disent quel compte pour quelle donnée.'],
                ['titre' => 'Relier toute la boîte aux lettres sans décision', 'texte' => 'Une personne connecte Gmail et Drive à l’assistant pour gagner du temps. La connexion se décide en équipe, avec l’administrateur.'],
                ['titre' => 'Se fier à une lecture d’image', 'texte' => 'Un chiffre mal lu sur une photo entre dans un tableau et y reste. On compare à l’image, ligne par ligne, avant d’utiliser le résultat.'],
                ['titre' => 'Diffuser des notes de réunion sans relecture', 'texte' => 'Les notes de Meet sont un brouillon : décisions mal attribuées, nuance perdue. On relit, on corrige, on diffuse avec l’accord des participants.'],
                ['titre' => 'Bâtir son travail sur une fonction qui change', 'texte' => 'Les noms, les formules et les fonctions évoluent, comme l’annonce sur les Gems le montre. Les consignes sont tenues dans un document de l’entreprise.'],
                ['titre' => 'Croire une conversation temporaire confidentielle', 'texte' => 'Google précise que les échanges servent encore à répondre et à la sécurité. La règle des trois familles d’informations s’applique à tous les modes.'],
                ['titre' => 'Lancer une recherche approfondie pour tout', 'texte' => 'Elle prend du temps et produit un long rapport à relire. Pour un fait simple, une recherche rapide et deux sources suffisent.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langue, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'Gemini ne fonctionne qu’en ligne, et une recherche approfondie ou l’analyse d’un gros fichier demande une connexion stable pendant plusieurs minutes. Une connexion peut couper ou ralentir. Les documents d’exercice sont téléchargés sur chaque poste avant la session, les résultats importants sont enregistrés dans Drive ou dans les dossiers de l’entreprise, et un plan B est prêt si le réseau lâche.',
                'La langue compte autant. Les pages d’aide de Google renvoient à des listes de langues prises en charge selon la fonction, et certaines fonctions sont décrites comme réservées à l’anglais ou limitées à une langue par réunion. Pour une équipe francophone, la première vérification est donc de constater, sur son propre compte, ce qui fonctionne en français. Les participants apprennent aussi à faire relire par un locuteur du métier tout texte dans une langue nationale.',
                'Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> est publiée sur le site du Secrétariat général du Gouvernement, où son texte intégral se télécharge. Après l’avoir lu, l’entreprise fixe par écrit ce qui peut quitter son périmètre vers un service hébergé à l’étranger et ce qui doit rester chez elle ; si un point reste incertain, l’autorité compétente est la bonne interlocutrice. Cette fiche ne tient pas lieu d’avis juridique.',
                'En Europe, le RGPD s’applique aux mêmes gestes. La <a href="https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en">Commission européenne</a> rappelle que sont des données personnelles celles qui concernent une personne identifiée ou identifiable, que des données seulement pseudonymisées restent soumises au règlement et que l’anonymisation doit être irréversible. Remplacer un nom par un code dans un fichier ne suffit donc pas toujours. Le cadre juridique est traité à fond dans la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu’apporte Richard SALANON à une équipe qui adopte Gemini ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Gemini figure parmi les outils d’IA qu’il enseigne, et il en branche aussi dans les logiciels de ses clients. Son bagage : EPITECH en 2022, plus de ' . $ans . ' ans d’expérience et plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes formées. Il est l’auteur de <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp doté d’intelligence artificielle, et l’un des cofondateurs d’<a href="https://audyxa.com">Audyxa</a>.',
                'Sa méthode se résume ainsi : des exercices montés sur vos comptes et vos fichiers, des supports qui demeurent chez vous, aucune économie de temps promise d’avance. Il ne détient aucune certification d’éditeur et n’agit pas au nom de Google ; Gemini est pour lui un outil du marché, et le cadrage peut même aboutir à recommander une formation plus courte. Pour son parcours, voir la page <a href="/richard-salanon">Richard SALANON</a> ; la liste des pays couverts figure dans les <a href="/zones/">zones d’intervention</a>.',
                'Si l’objectif va au-delà de l’usage de l’assistant, par exemple relier l’IA à vos archives internes ou à vos logiciels, il s’agit plutôt d’une mission d’<a href="/services/integration-ia-entreprise">intégration de l’IA en entreprise</a>. Les autres formations du domaine sont réunies sur la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d’inscrire votre équipe ?',
            'texte' => 'Commencez par savoir quel compte chacun utilise, choisissez deux ou trois tâches réelles par groupe, classez les informations avant le premier exercice, relisez toute sortie qui part vers un client et tenez vos consignes dans un document de l’entreprise. Les formules et les fonctions de Google changent : vérifiez-les sur sa page officielle le jour de la décision.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre équipe travaille sous Google : voulez-vous qu’elle maîtrise Gemini ?',
            'texte'  => 'Écrivez-nous l’effectif, les fonctions de chacun, les comptes Google en place, les corvées les plus chronophages et la formule préférée. Une réponse arrive sous 24 heures, suivie d’une proposition accompagnée d’un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation Gemini'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il des connaissances techniques pour suivre la formation ?', 'r' => 'Non. On dialogue avec Gemini en français, à l’écrit. Ce qui compte : savoir de quel compte on se sert, poser une demande nette et contrôler ce qui revient. Cela s’apprend en manipulant ses propres fichiers.'],
        ['q' => 'Quelle différence entre l’application Gemini et Gemini dans Google Workspace ?', 'r' => 'L’application est le lieu de la conversation, où l’on dépose des fichiers et retrouve ses Gems. Gemini dans Workspace désigne les fonctions intégrées à Gmail, Docs, Sheets et Meet. Leur disponibilité dépend du compte, de la formule, de la langue et du pays ; la formation les vérifie sur vos comptes.'],
        ['q' => 'Gemini lit-il mes documents Drive et mes courriels ?', 'r' => 'Seulement si le compte et l’administrateur l’autorisent. Selon le centre de confidentialité de Google, Gemini respecte les droits d’accès existants et ne récupère pas ce à quoi l’utilisateur n’a pas accès. La formation fait lister les connexions actives.'],
        ['q' => 'Nos échanges avec Gemini servent-ils à entraîner ses modèles ?', 'r' => 'La réponse varie selon le compte. Sur un compte personnel, la page de Google lie l’entraînement à l’option « Keep Activity ». Pour Workspace, le centre de confidentialité affirme que les données du client ne servent pas à l’entraînement sans accord préalable. Ces pages évoluent ; le texte officiel prévaut.'],
        ['q' => 'Des personnes peuvent-elles lire nos conversations ?', 'r' => 'Sur un compte personnel, Google indique que certaines conversations sont relues par des examinateurs humains, et conseille de ne pas saisir d’information confidentielle. Le centre de confidentialité de Workspace indique que les conversations et fichiers de l’application Gemini ne sont pas relus par des humains, hors retour volontaire.'],
        ['q' => 'Peut-il lire une photo, un PDF ou un fichier audio ?', 'r' => 'La page d’aide de Google indique qu’on peut importer documents, tableurs, photos, vidéos et autres fichiers. La lecture n’est pas infaillible : la formation apprend à comparer la sortie à la source avant de s’en servir.'],
        ['q' => 'Que sont les Gems, et vont-ils disparaître ?', 'r' => 'Ce sont des versions enregistrées de Gemini avec instructions et fichiers. La page d’aide consultée annonce, pour les comptes personnels, une transition des Gems vers les skills à partir de novembre 2026. La formation conseille de tenir ses consignes dans un document de l’entreprise.'],
        ['q' => 'Qu’est-ce que la recherche approfondie, et quand l’utiliser ?', 'r' => 'C’est un mode qui, selon Google, mène une recherche en plusieurs étapes à partir d’un plan modifiable et produit un rapport. Il sert aux dossiers documentaires ; pour un fait simple, une demande rapide et deux sources suffisent.'],
        ['q' => 'Faut-il acheter un abonnement avant la session ?', 'r' => 'Non. Les comptes de l’entreprise suffisent pour apprendre la méthode, avec les fonctions qu’ils offrent. Les formules et limites évoluent ; la page officielle de Google fait foi, et tout abonnement se décide après la formation, au nom de l’entreprise.'],
        ['q' => 'La formation couvre-t-elle aussi ChatGPT ou Claude ?', 'r' => 'Non, elle se concentre sur Gemini. L’usage des autres assistants est traité dans la formation IA en entreprise, et le comparatif ChatGPT, Claude et Gemini aide à choisir.'],
        ['q' => 'Quel est le nombre de participants par groupe ?', 'r' => 'Le plafond est de 10 pour le parcours de deux jours, 12 pour l’atelier découverte et 8 pour les séances à distance, afin que chacun travaille sur ses propres comptes Google.'],
        ['q' => 'Peut-on suivre toute la formation en visioconférence ?', 'r' => 'Oui : cinq à six séances de deux heures et demie, avec partage d’écran pour montrer son compte Gemini. Chaque participant doit disposer d’une connexion stable, et un plan B est préparé en cas de coupure.'],
        ['q' => 'Quel budget prévoir pour la formation ?', 'r' => 'Un devis est établi après le cadrage ; il varie avec l’effectif, la formule, la préparation sur vos fichiers Google, le lieu et le mode. Vous pouvez payer par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Un financement de formation continue est-il possible ?', 'r' => 'Chaque fonds applique ses règles et rien n’est acquis d’avance. Richard SALANON n’affiche ni certification qualité ni agrément : écrivez au fonds en joignant programme et devis, avant toute signature.'],
        ['q' => 'Richard SALANON est-il certifié par Google ?', 'r' => 'Non, aucune certification d’éditeur et aucun lien de représentation avec Google. Pour lui, Gemini est un outil du marché, étudié sur les comptes et les fichiers de l’entreprise.'],
    ],

    'sources' => [
        ['titre' => 'Aide Google, Gemini Apps Privacy Hub (confidentialité des applications Gemini)', 'url' => 'https://support.google.com/gemini/answer/13594961?hl=en', 'date' => '2026-10-26'],
        ['titre' => 'Aide Google, Gems in Gemini Apps', 'url' => 'https://support.google.com/gemini/answer/15146780?hl=en', 'date' => '2026-10-26'],
        ['titre' => 'Aide Google, Deep Research in Gemini Apps', 'url' => 'https://support.google.com/gemini/answer/15719111?hl=en', 'date' => '2026-10-26'],
        ['titre' => 'Aide Google, importer et analyser des fichiers dans les applications Gemini', 'url' => 'https://support.google.com/gemini/answer/14903178?hl=en', 'date' => '2026-10-26'],
        ['titre' => 'Google Workspace, Generative AI in Google Workspace Privacy Hub', 'url' => 'https://knowledge.workspace.google.com/admin/gemini/generative-ai-in-google-workspace-privacy-hub', 'date' => '2026-10-26'],
        ['titre' => 'Aide Google Docs, utiliser Gemini dans Google Docs', 'url' => 'https://support.google.com/docs/answer/13447104?hl=en', 'date' => '2026-10-26'],
        ['titre' => 'Aide Gmail, utiliser Gemini dans Gmail', 'url' => 'https://support.google.com/mail/answer/14355636?hl=en', 'date' => '2026-10-26'],
        ['titre' => 'Aide Google Sheets, utiliser Gemini dans Google Sheets', 'url' => 'https://support.google.com/docs/answer/14218565?hl=en', 'date' => '2026-10-26'],
        ['titre' => 'Aide Google Meet, Take notes for me', 'url' => 'https://support.google.com/meet/answer/14754931?hl=en', 'date' => '2026-10-26'],
        ['titre' => 'Commission européenne, la protection des données expliquée (RGPD)', 'url' => 'https://commission.europa.eu/law/law-topic/data-protection/data-protection-explained_en', 'date' => '2026-10-26'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-26'],
    ],

    'liens' => [
        'formations'  => ['ia-en-entreprise', 'prompt-engineering', 'perplexity-en-entreprise', 'ia-ethique-conformite', 'ia-generative-dirigeants', 'rag-chatbot-documents'],
        'services'    => ['integration-ia-entreprise', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
