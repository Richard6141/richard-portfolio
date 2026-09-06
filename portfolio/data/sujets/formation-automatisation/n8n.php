<?php
// Formation automatisation avec n8n et Make. Redigee le 05/09/2026.
// Adossee au service « Automatisation & IA » que Richard vend deja.
declare(strict_types=1);

return [
    'slug'       => 'formation-automatisation',
    'ville'      => 'En ligne et sur place',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => 'Formation automatisation avec n8n et Make',
    'accroche'   => 'Apprendre à relier vos outils entre eux pour que les tâches répétitives s\'exécutent seules, sans dépendre d\'un prestataire à chaque modification.',
    'intro'      => 'Copier des commandes WhatsApp dans un tableur, ressaisir des factures, envoyer les mêmes rappels chaque semaine : ces tâches se relient et s\'automatisent avec des outils comme n8n ou Make, sans écrire de code ou presque. Je construis ces automatisations pour mes clients ; cette formation apprend à vos équipes à construire et surtout à entretenir les leurs. La différence est importante : une automatisation qu\'on ne sait pas modifier soi-même devient une dépendance de plus.',

    'sections' => [
        [
            'type'       => 'prose',
            'etiquette'  => 'Le sujet',
            'titre'      => 'Automatiser sans devenir prisonnier de son prestataire.',
            'paragraphes' => [
                'Le marché regorge d\'automatisations vendues clés en main, qui fonctionnent jusqu\'au jour où un formulaire change, où un mot de passe expire, où une condition doit évoluer. L\'entreprise rappelle alors le prestataire pour chaque virgule. La formation vise l\'autonomie : comprendre ce qui a été construit, savoir le modifier, savoir diagnostiquer quand ça casse.',
                'On y apprend à raisonner en flux : un déclencheur, des étapes, des conditions, des cas d\'erreur. Ce raisonnement vaut pour tous les outils du marché. n8n sert de support principal parce qu\'il s\'héberge chez vous et ne facture pas à l\'opération, ce qui compte quand les volumes montent ; Make est couvert pour les équipes qui l\'utilisent déjà.',
                'La formation est honnête sur les limites : tout ne mérite pas d\'être automatisé. Une tâche rare, mal définie ou pleine d\'exceptions coûte plus cher en maintenance qu\'en exécution manuelle. Savoir renoncer fait partie du programme.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Programme',
            'titre'     => 'Quatre modules, du premier flux à la maintenance.',
            'items'     => [
                ['titre' => 'Penser en flux', 'texte' => 'Déclencheurs, étapes, conditions, erreurs. Cartographier une tâche réelle de votre entreprise avant de toucher à l\'outil.'],
                ['titre' => 'Construire avec n8n', 'texte' => 'Prise en main complète : connecter un formulaire, un tableur, une boîte mail, WhatsApp. Chaque participant construit un flux utile à son poste.'],
                ['titre' => 'Ajouter l\'IA au bon endroit', 'texte' => 'Trier des messages entrants, extraire des données d\'un document, rédiger une réponse à valider. L\'IA comme étape d\'un flux, pas comme gadget.'],
                ['titre' => 'Fiabiliser et maintenir', 'texte' => 'Gérer les pannes, les cas limites et les notifications d\'échec. Documenter le flux pour que son auteur ne soit pas le seul à le comprendre.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Cas travaillés',
            'titre'     => 'Des automatisations qui reviennent dans presque toutes les PME.',
            'items'     => [
                'Les demandes reçues sur WhatsApp ou par formulaire arrivent triées dans un tableau, avec accusé de réception automatique.',
                'Les relances de paiement partent seules selon l\'échéance, avec un texte ferme mais correct, et s\'arrêtent dès que le règlement est enregistré.',
                'Les pièces jointes des fournisseurs sont extraites, renommées et classées, au lieu de dormir dans la boîte mail.',
                'Un rapport hebdomadaire se compile tout seul depuis vos outils et arrive le lundi matin, déjà mis en forme.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Formats',
            'titre'      => 'Formats et conditions.',
            'paragraphes' => [
                'Atelier découverte d\'une demi-journée pour cartographier vos tâches automatisables et construire un premier flux, ou formation complète de deux jours couvrant les quatre modules, chaque participant repartant avec un flux en production. Groupes réduits, en visioconférence ou sur place.',
                'Prérequis : être à l\'aise avec ses propres outils, rien de plus. Le devis est établi après un cadrage gratuit qui liste vos tâches candidates et vérifie que l\'automatisation est bien la bonne réponse.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Méthode',
            'titre'      => 'Par où commencer : la cartographie des tâches.',
            'paragraphes' => [
                'La première erreur des entreprises qui découvrent l\'automatisation est de partir de l\'outil : on installe n8n, puis on cherche quoi automatiser. La formation prend le chemin inverse et commence par une cartographie : chaque participant liste les tâches de sa semaine, leur fréquence, leur durée et leur degré de règle. Une tâche fréquente, chronophage et régie par des règles claires est une candidate en or. Une tâche rare ou pleine de jugement humain reste manuelle, et c\'est très bien ainsi.',
                'Cette cartographie produit systématiquement des surprises. La tâche que tout le monde voulait automatiser se révèle marginale, et le vrai gisement se cache dans un geste si banal que personne ne le voyait plus : recopier les virements du relevé bancaire vers le tableur, renvoyer chaque lundi le même état des stocks, répondre trente fois par semaine à la même question sur les délais. Les automatisations les plus rentables sont rarement les plus spectaculaires.',
                'Chaque participant choisit ensuite sa cible dans sa propre cartographie, et c\'est elle qu\'il construit pendant la formation. Ce choix personnel n\'est pas un détail pédagogique : on maintient avec soin une automatisation qui supprime sa propre corvée, on abandonne vite celle qu\'on a construite sur un exemple inventé.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Erreurs',
            'titre'     => 'Ce qui fait mourir les automatisations.',
            'items'     => [
                ['titre' => 'L\'automatisation silencieuse', 'texte' => 'Le flux tombe en panne et personne ne le sait : les relances ne partent plus depuis trois semaines et on le découvre par un impayé. Toute automatisation construite en formation embarque sa notification d\'échec, c\'est une règle absolue.'],
                ['titre' => 'Le flux que seul son auteur comprend', 'texte' => 'L\'auteur part, l\'automatisation devient une boîte noire qu\'on n\'ose plus toucher, puis qu\'on débranche au premier incident. La documentation minimale, trois lignes par flux : ce qu\'il fait, ce qui le déclenche, qui prévenir en cas d\'échec.'],
                ['titre' => 'Automatiser un processus malade', 'texte' => 'Si la tâche manuelle est mal définie, son automatisation exécute le désordre plus vite. On assainit le processus d\'abord, on l\'automatise ensuite. La cartographie sert aussi à repérer ces cas et à les renvoyer vers un travail d\'organisation.'],
                ['titre' => 'Ignorer les cas limites', 'texte' => 'Le flux marche pour le cas courant et casse sur l\'exception : le message sans pièce jointe, le montant vide, le client inconnu. La formation consacre un exercice entier à provoquer ces cas et à décider, pour chacun, entre traiter et alerter.'],
                ['titre' => 'Empiler sans gouverner', 'texte' => 'Vingt flux créés par cinq personnes, sans inventaire : personne ne sait plus ce qui tourne ni pourquoi. Dès la formation, un registre simple liste chaque automatisation, son responsable et sa date de dernière vérification.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Livrables',
            'titre'     => 'Ce que chaque participant emporte.',
            'items'     => [
                'Sa cartographie personnelle des tâches, hiérarchisée par gain espéré, qui sert de feuille de route pour les mois suivants.',
                'Une automatisation réelle en production sur son propre compte ou serveur, avec notification d\'échec en place.',
                'Le registre des flux de l\'équipe, prêt à accueillir les automatisations suivantes.',
                'Les gabarits n8n construits en session, réutilisables comme points de départ.',
                'Une attestation de formation et la documentation de chaque exercice.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Par secteur',
            'titre'     => 'Ce que les entreprises automatisent en premier, selon leur activité.',
            'items'     => [
                ['titre' => 'Import-export et transit', 'texte' => 'Le suivi documentaire : chaque pièce reçue par mail est extraite, renommée selon le dossier et classée, avec alerte sur les pièces manquantes à l\'approche de l\'échéance. Le flux qui économise le plus d\'allers-retours avec les transitaires.'],
                ['titre' => 'Commerce et e-commerce', 'texte' => 'Les commandes entrantes, tous canaux confondus, atterrissent dans un seul tableau avec accusé de réception. Puis viennent les relances de paniers et le rapport de ventes du lundi matin.'],
                ['titre' => 'Écoles et centres de formation', 'texte' => 'Les inscriptions par formulaire alimentent les listes de classes, les rappels d\'échéances de scolarité partent seuls, et les attestations se génèrent à la demande. Un secteur où la saisonnalité rend l\'automatisation très rentable.'],
                ['titre' => 'Cabinets et services', 'texte' => 'La prise de rendez-vous avec confirmation et rappel la veille, l\'accusé de réception des dossiers, la relance des pièces manquantes. Des flux courts, peu spectaculaires, qui rendent le cabinet joignable et ponctuel.'],
                ['titre' => 'Hôtels et restauration', 'texte' => 'Les demandes de réservation venues de WhatsApp et du site convergent vers un registre unique, avec confirmation automatique et rappel. La double réservation, plaie du secteur, disparaît avec le registre.'],
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Coûts',
            'titre'      => 'Le coût réel d\'une automatisation, sans les omissions habituelles.',
            'paragraphes' => [
                'Les vendeurs d\'automatisation annoncent volontiers le temps gagné et oublient de compter le reste. Comptons tout. Une automatisation coûte d\'abord sa construction : quelques heures pour un flux simple, quelques jours pour une chaîne complète. Elle coûte ensuite son hébergement : celui de n8n auto-hébergé se réduit à la part d\'un petit serveur, quelques milliers de FCFA par mois, là où les plateformes facturant à l\'opération deviennent chères dès que les volumes montent. Elle coûte enfin sa maintenance : les outils reliés changent, les mots de passe expirent, les cas limites apparaissent. Compter une heure ou deux par mois pour un parc de flux bien construit.',
                'Face à ces coûts, le calcul du rendement est simple et fait partie de la formation : une tâche de vingt minutes exécutée chaque jour ouvrable représente environ quatre-vingts heures par an. Même en comptant large la construction et la maintenance, le flux se rembourse en quelques semaines. Mais le même calcul, appliqué à une tâche mensuelle de dix minutes, conclut honnêtement qu\'il ne faut pas l\'automatiser. Savoir faire ce calcul avant de construire, c\'est ce qui sépare une démarche d\'automatisation d\'une collection de gadgets.',
                'Reste le coût que personne ne chiffre : la dépendance. Un flux construit par un prestataire sur son propre compte, avec ses propres accès, vous lie à lui pour chaque virgule. C\'est précisément ce que la formation élimine : tout se construit sur vos comptes, vos accès, vos serveurs, et la compétence de modification reste dans vos murs.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Sécurité',
            'titre'      => 'Automatiser sans ouvrir de brèche.',
            'paragraphes' => [
                'Une automatisation est, par construction, un programme qui détient vos accès : votre boîte mail, votre tableur, votre WhatsApp, parfois votre banque de données clients. Cette concentration de pouvoirs mérite un traitement sérieux, et le module fiabilisation lui consacre une part entière. Première règle : les accès donnés à un flux sont des accès dédiés et minimaux. On ne branche pas une automatisation sur le compte personnel du gérant avec tous ses droits ; on crée des accès applicatifs, limités à ce que le flux doit réellement toucher, révocables sans casser le reste.',
                'Deuxième règle : savoir où passent les données. Un flux qui envoie vos messages clients vers un service d\'IA les fait sortir de chez vous, et il faut le décider en connaissance de cause plutôt que le découvrir. La formation apprend à lire ce trajet pour chaque flux et à trancher : quelles données peuvent transiter par des services externes, lesquelles restent sur votre serveur, lesquelles s\'anonymisent avant traitement. C\'est d\'ailleurs un des arguments d\'un n8n auto-hébergé : le moteur d\'orchestration lui-même reste chez vous.',
                'Troisième règle : prévoir la sortie. Les mots de passe changent, les employés partent, les prestataires aussi. Chaque flux construit en formation est accompagné de sa fiche d\'accès : quels comptes il utilise, où sont stockés les secrets, comment les faire tourner. Une entreprise qui sait révoquer et remplacer un accès en dix minutes dort mieux que celle qui a peur de toucher à quoi que ce soit.',
                'Rien de tout cela n\'exige un expert en sécurité : ce sont des habitudes d\'hygiène, prises dès le premier flux. Elles coûtent quelques minutes par automatisation et évitent les deux scénarios qui font mal : la fuite de données par un maillon oublié, et la paralysie du jour où la seule personne qui savait est partie.',
            ],
        ],
        [
            'type'      => 'liens',
            'etiquette' => 'Aller plus loin',
            'titre'     => 'Formations et services liés.',
            'items'     => [
                ['url' => '/services/automatisation-ia', 'titre' => 'Automatisation & IA sur mesure', 'texte' => 'Quand vous préférez confier la construction : je réalise, vous exploitez, la formation assure la relève.'],
                ['url' => '/formation-ia-entreprise', 'titre' => 'Formation IA en entreprise', 'texte' => 'Le volet bureau : rédiger, synthétiser, structurer avec les assistants, sans automatisation.'],
                ['url' => '/formations/', 'titre' => 'Toutes les formations', 'texte' => 'Le catalogue complet, avec les formats et les tarifs indicatifs.'],
            ],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir programmer ?', 'r' => 'Non. n8n et Make se manipulent visuellement. Un peu de logique suffit : si ceci, alors cela. Les rares cas qui demandent une ligne de code sont traités ensemble pendant la session.'],
        ['q' => 'Pourquoi n8n plutôt que Make ou Zapier ?', 'r' => 'Parce qu\'il s\'héberge chez vous et ne facture pas à l\'opération : à volumes croissants, la différence de coût devient significative. Make reste couvert pour les équipes déjà équipées, et la méthode enseignée vaut pour les deux.'],
        ['q' => 'Peut-on automatiser WhatsApp ?', 'r' => 'Oui, dans le cadre des solutions officielles WhatsApp Business, avec leurs contraintes réelles : ce qui est permis, ce qui ne l\'est pas, et ce qui risque de faire bannir un numéro. Le module y consacre un temps dédié.'],
        ['q' => 'Que devient le flux construit pendant la formation ?', 'r' => 'Il vous appartient et tourne sur votre compte ou votre serveur, pas sur le mien. C\'est un principe : vous repartez avec quelque chose qui fonctionne et que vous savez modifier.'],
        ['q' => 'Et si une automatisation casse après la formation ?', 'r' => 'Le module maintenance sert précisément à ça : notifications d\'échec, diagnostic, documentation. Pour le reste, un accompagnement ponctuel reste possible, en visioconférence.'],
        ['q' => 'Où n8n est-il hébergé pendant et après la formation ?', 'r' => 'Sur votre propre serveur ou hébergement quand vous en avez un, sinon sur l\'offre en ligne de n8n le temps de la formation, migrable ensuite. La question de l\'hébergement, avec ses coûts réels, est traitée en session plutôt que découverte après.'],
        ['q' => 'Nos outils sont artisanaux : cahiers, tableurs, WhatsApp. Est-ce automatisable ?', 'r' => 'C\'est le cas le plus courant ici, et oui : le tableur et WhatsApp s\'intègrent très bien, et le cahier se remplace progressivement par un formulaire qui alimente le reste. La cartographie tient compte du point de départ réel, pas d\'un système d\'information idéal.'],
        ['q' => 'Quelle différence avec la formation IA en entreprise ?', 'r' => 'La formation IA outille des gestes individuels : rédiger, synthétiser, structurer. Celle-ci relie des systèmes entre eux pour supprimer des tâches entières. Elles se complètent, et l\'IA apparaît ici comme une étape de flux : trier, extraire, rédiger au sein d\'une chaîne automatique.'],
        ['q' => 'Combien d\'automatisations une PME entretient-elle raisonnablement ?', 'r' => 'Mieux vaut cinq flux robustes, documentés et surveillés que vingt fragiles. La formation enseigne aussi à dire non : chaque automatisation est un petit système à maintenir, et le registre sert à garder ce parc à une taille que l\'équipe maîtrise.'],
    ],
];
