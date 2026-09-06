<?php
// Formation outils numeriques et bureautique en entreprise. 05/09/2026.
// Couvre le « tout ce qui est du numerique » annonce par Richard, avec un
// perimetre concret : tableur, messagerie, stockage partage, securite.
declare(strict_types=1);

return [
    'slug'       => 'formation-outils-numeriques',
    'ville'      => 'En ligne et sur place',
    'ville_slug' => '',
    'pays'       => 'Bénin',
    'titre'      => 'Formation aux outils numériques en entreprise',
    'accroche'   => 'Tableur, messagerie, fichiers partagés, mots de passe : les gestes de base qui font la différence entre une équipe outillée et une équipe qui subit son informatique.',
    'intro'      => 'Avant l\'IA et avant les ERP, il y a un socle : savoir tenir un tableur juste, écrire un mail professionnel, retrouver un fichier, ne pas perdre trois ans de données sur une clé USB volée. Dans beaucoup d\'entreprises, ce socle manque, et tout ce qu\'on pose dessus vacille. Cette formation le construit, sans jargon et sans mépris : on part de ce que les équipes font déjà, et on remplace les gestes fragiles par des gestes solides.',

    'sections' => [
        [
            'type'       => 'prose',
            'etiquette'  => 'Le sujet',
            'titre'      => 'Le coût invisible des mauvais gestes numériques.',
            'paragraphes' => [
                'Un fichier « Factures_final_vrai2.xlsx » envoyé par WhatsApp, modifié par trois personnes, dont personne ne sait quelle version fait foi : cette scène coûte des heures chaque semaine et personne ne la chiffre. Même chose pour le mot de passe collé sous le clavier, la boîte mail à douze mille non-lus, ou le classeur où une formule écrasée fausse les totaux depuis des mois.',
                'La formation traite ces situations une par une, telles qu\'elles existent chez vous. Ce n\'est pas un cours d\'informatique : c\'est une remise en état des gestes quotidiens, mesurable à la fin par des choses simples : une arborescence de fichiers que tout le monde respecte, un classeur protégé qui tombe juste, des mots de passe gérés proprement.',
                'Elle sert aussi de marchepied : une équipe à l\'aise sur ce socle absorbe ensuite une formation IA ou un ERP deux fois plus vite. C\'est souvent la première marche que je recommande aux entreprises qui me demandent directement la dernière.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Programme',
            'titre'     => 'Quatre modules, à composer selon vos besoins.',
            'items'     => [
                ['titre' => 'Le tableur qui tombe juste', 'texte' => 'Formules de base, tri et filtres, mise en forme qui aide au lieu de décorer, protection des cellules, et les erreurs classiques qui faussent les totaux.'],
                ['titre' => 'La messagerie professionnelle', 'texte' => 'Écrire des mails qui obtiennent des réponses, gérer sa boîte sans s\'y noyer, pièces jointes et transferts, et ce qui distingue un mail pro d\'un message WhatsApp.'],
                ['titre' => 'Fichiers et travail partagé', 'texte' => 'Une arborescence commune, des noms de fichiers cohérents, le stockage en ligne avec droits d\'accès, et la fin des versions contradictoires.'],
                ['titre' => 'Sécurité du quotidien', 'texte' => 'Mots de passe et gestionnaire, sauvegardes qui existent vraiment, réflexes face aux messages frauduleux, et ce qu\'on fait le jour où un téléphone disparaît.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Public',
            'titre'     => 'À qui la formation s\'adresse.',
            'items'     => [
                'Les équipes administratives et commerciales dont l\'outil de travail principal est le tableur et la messagerie.',
                'Les entreprises qui préparent un ERP ou une formation IA et veulent d\'abord consolider le socle.',
                'Les structures qui viennent de perdre des données ou de subir une fraude, et veulent que ça ne se reproduise pas.',
                'Les dirigeants qui constatent que chaque document demande trois appels pour être retrouvé.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Formats',
            'titre'      => 'Formats et conditions.',
            'paragraphes' => [
                'Chaque module tient en une demi-journée ; le socle complet en deux jours. Les groupes restent réduits et se composent par niveau réel, évalué au cadrage, pas par intitulé de poste. Sessions sur place de préférence pour ce public, en visioconférence quand l\'équipe y est à l\'aise.',
                'Le cadrage est gratuit : on liste les situations qui coûtent le plus cher chez vous, et le programme se compose autour. Devis détaillé poste par poste.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Terrain',
            'titre'      => 'Trois scènes de bureau que cette formation fait disparaître.',
            'paragraphes' => [
                'Première scène : la direction demande le chiffre des ventes du trimestre. Trois personnes ouvrent trois versions du même classeur et obtiennent trois totaux différents. Personne ne sait lequel est juste, alors on ressort les carnets et on recompte à la main. Le classeur unique, protégé, aux formules vérifiées, remplace cette scène par une consultation de trente secondes, et c\'est l\'exercice final du module tableur.',
                'Deuxième scène : un fournisseur envoie une facture par mail. Elle est lue sur un téléphone, oubliée, réclamée deux semaines plus tard, réenvoyée, imprimée, perdue, payée en retard avec pénalités. Le module messagerie et le module fichiers travaillent ensemble sur ce circuit : une adresse professionnelle relevée à heures fixes, un dossier de classement unique, une règle simple sur qui traite quoi. Rien de sophistiqué, tout dans la constance.',
                'Troisième scène : le comptable externe demande les pièces du mois. S\'ensuivent trois jours de recherche dans les téléphones, les boîtes personnelles et les clés USB de chacun. Après la formation, la question ne se pose plus : les pièces vivent au même endroit, nommées de la même façon, accessibles selon les droits de chacun. Le comptable le remarque dès le premier mois, et c\'est souvent lui qui le dit au dirigeant.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Erreurs',
            'titre'     => 'Les habitudes qui coûtent le plus cher.',
            'items'     => [
                ['titre' => 'Le fichier envoyé au lieu du fichier partagé', 'texte' => 'Chaque envoi par WhatsApp ou par mail crée une copie divergente. Le partage d\'un fichier unique avec droits d\'accès supprime le problème à la racine, et le geste s\'apprend en dix minutes.'],
                ['titre' => 'Le mot de passe unique et partagé', 'texte' => 'Le même mot de passe partout, connu de tous, parfois affiché au mur. Un seul compte compromis expose alors tout. Le gestionnaire de mots de passe, installé et pris en main pendant la session, coûte moins cher qu\'une seule fraude évitée.'],
                ['titre' => 'La formule écrasée en silence', 'texte' => 'Quelqu\'un tape un montant par-dessus une formule, le total ment désormais, et il mentira pendant des mois. La protection des cellules et la vérification des totaux font partie des gestes obligatoires du module tableur.'],
                ['titre' => 'La sauvegarde supposée', 'texte' => 'Tout le monde croit que quelqu\'un sauvegarde, personne ne le fait, et un téléphone volé emporte trois ans de contacts clients. La session met en place une sauvegarde réelle et la teste : restaurer un fichier fait partie de l\'exercice.'],
                ['titre' => 'Le clic sur le faux mail', 'texte' => 'Le message qui imite la banque ou un fournisseur et demande une validation urgente. Le module sécurité entraîne l\'œil sur de vrais exemples, car la seule défense qui marche est le réflexe de vérification avant le clic.'],
            ],
        ],
        [
            'type'      => 'liste',
            'etiquette' => 'Livrables',
            'titre'     => 'Ce que l\'entreprise garde après les modules.',
            'items'     => [
                'Une arborescence de fichiers commune, créée pendant la session avec l\'équipe, et la règle de nommage qui va avec, affichée en une page.',
                'Un classeur de suivi propre, aux formules protégées, qui remplace celui dont personne n\'était sûr.',
                'Un gestionnaire de mots de passe déployé, avec les comptes critiques migrés pendant la session.',
                'Une sauvegarde en place et testée par une restauration réelle.',
                'Les fiches réflexes par module et l\'attestation de formation de chaque participant.',
            ],
        ],
        [
            'type'      => 'definitions',
            'etiquette' => 'Par service',
            'titre'     => 'Ce que chaque service de l\'entreprise y gagne.',
            'items'     => [
                ['titre' => 'Direction', 'texte' => 'Des chiffres consultables sans les demander, un classement où retrouver soi-même un contrat, et la fin des décisions prises sur des totaux dont personne n\'était sûr. La session dirigeant se concentre sur la lecture, pas sur la saisie.'],
                ['titre' => 'Comptabilité et administration', 'texte' => 'Le classeur protégé qui tombe juste, les pièces du mois réunies au même endroit, l\'export propre vers le comptable externe. Le service qui gagne le plus d\'heures, et celui qui adopte le plus vite.'],
                ['titre' => 'Équipe commerciale', 'texte' => 'Un fichier clients unique au lieu des carnets individuels, des mails qui obtiennent des réponses, et un suivi des relances qui survit aux absences. Le savoir commercial cesse de partir avec les vendeurs.'],
                ['titre' => 'Accueil et secrétariat', 'texte' => 'La boîte mail tenue, le courrier tracé, les documents types retrouvés en secondes. Le poste par lequel tout transite est aussi celui où les bons gestes rapportent à toute l\'entreprise.'],
                ['titre' => 'Ressources humaines', 'texte' => 'Les dossiers du personnel classés selon une règle unique, les modèles de contrats et d\'attestations à jour, et l\'accès restreint à ce qui doit l\'être. La confidentialité interne se joue dans les droits d\'accès, couverts au module fichiers.'],
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Durée',
            'titre'      => 'Pourquoi ce socle rapporte plus qu\'il n\'y paraît.',
            'paragraphes' => [
                'Les formations au numérique souffrent d\'une hiérarchie implicite : l\'IA fascine, les ERP impressionnent, la bureautique fait sourire. Cette hiérarchie est exactement inverse à celle des gains. Une entreprise dont les fichiers se perdent, dont les totaux mentent et dont les mots de passe traînent perd chaque semaine des heures et prend chaque jour des risques, silencieusement, sans qu\'aucune ligne de budget ne les montre. Aucun outil avancé ne corrige cela : il s\'y ajoute et en hérite.',
                'L\'expérience des déploiements le confirme : quand j\'installe un ERP ou une automatisation dans une entreprise au socle solide, le projet avance vite et tient. Quand le socle manque, le projet passe son temps à buter sur des fichiers introuvables, des données ressaisies de travers et des comptes partagés. C\'est pour cette raison précise que cette formation figure au catalogue : elle est le meilleur préalable aux autres, et parfois le meilleur investissement tout court.',
                'Il y a enfin l\'effet sur les personnes, moins mesurable et bien réel : une équipe qui maîtrise ses outils cesse de subir son informatique. La peur de « casser quelque chose », qui paralyse tant de bureaux, disparaît avec la compréhension. Les participants qui arrivent en s\'excusant de leur niveau repartent en proposant des améliorations : c\'est le signe qu\'une formation a fait son travail.',
            ],
        ],
        [
            'type'       => 'prose',
            'etiquette'  => 'Déroulé',
            'titre'      => 'À quoi ressemble la première demi-journée.',
            'paragraphes' => [
                'Le module commence toujours par un tour de table sans jugement : chacun montre comment il fait aujourd\'hui, sur son propre poste. Ce moment vaut de l\'or, parce qu\'il révèle les astuces individuelles, souvent ingénieuses, que la formation va généraliser, et les contournements dangereux qu\'elle va remplacer. Il désamorce aussi la honte : quand chacun a vu que le voisin cherche ses fichiers lui aussi, la salle se détend et les vraies questions sortent.',
                'Vient ensuite la construction, ensemble et pour de vrai. Sur le module fichiers, par exemple, l\'arborescence commune ne sort pas d\'un modèle tout fait : elle se dessine au tableau avec l\'équipe, à partir des documents qui circulent réellement dans l\'entreprise, puis se crée séance tenante dans le stockage partagé, et chacun y déplace ses premiers dossiers avant la pause. La règle de nommage s\'écrit de la même façon, avec les mots de l\'équipe, et s\'affiche avant la fin de la session.',
                'La dernière heure est une heure de gestes : chaque participant exécute seul le parcours complet du module, sous mes yeux mais sans mon aide. Retrouver un fichier, partager sans dupliquer, vérifier un total, selon le module du jour. C\'est le même principe de validation que sur toutes mes formations : on ne conclut pas sur un sentiment, on conclut sur un geste réussi. Et l\'équipe repart avec un engagement simple pour la semaine : tout nouveau document naît dans l\'arborescence commune, sans exception.',
            ],
        ],
        [
            'type'      => 'liens',
            'etiquette' => 'Aller plus loin',
            'titre'     => 'Les marches suivantes.',
            'items'     => [
                ['url' => '/formation-ia-entreprise', 'titre' => 'Formation IA en entreprise', 'texte' => 'La marche d\'après : rédiger, synthétiser et structurer avec les assistants, une fois le socle en place.'],
                ['url' => '/digitalisation-entreprise-cotonou', 'titre' => 'Digitalisation d\'entreprise', 'texte' => 'Quand le besoin dépasse la formation : outiller les processus eux-mêmes.'],
                ['url' => '/formations/', 'titre' => 'Toutes les formations', 'texte' => 'Le catalogue complet, avec les formats et tarifs indicatifs.'],
            ],
        ],
    ],

    'faq' => [
        ['q' => 'Nos équipes ont des niveaux très différents. Comment gérez-vous ça ?', 'r' => 'Par une évaluation rapide au cadrage, puis des groupes de niveau réel. Mettre ensemble celui qui découvre le clic droit et celle qui fait des tableaux croisés garantit de perdre les deux.'],
        ['q' => 'Travaillez-vous sur Excel ou sur Google Sheets ?', 'r' => 'Sur ce que vous utilisez. Les gestes enseignés valent pour les deux, et le module fichiers partagés couvre aussi bien Google Drive que OneDrive.'],
        ['q' => 'Est-ce vraiment utile à l\'heure de l\'IA ?', 'r' => 'C\'est le prérequis. Une équipe qui perd ses fichiers et se fait piéger par un faux mail ne tirera rien d\'un assistant IA. Le socle d\'abord, l\'accélération ensuite.'],
        ['q' => 'Combien de personnes par session ?', 'r' => 'Une dizaine au maximum par module, moins si les niveaux l\'exigent. La formation vaut par la pratique sur poste, pas par la projection de diapositives.'],
        ['q' => 'Peut-on ne prendre qu\'un seul module ?', 'r' => 'Oui, chaque module est autonome. Le module sécurité est celui qu\'on choisit le plus souvent seul, généralement après un incident.'],
        ['q' => 'Certains collaborateurs n\'ont jamais utilisé d\'ordinateur. Est-ce un problème ?', 'r' => 'Non, à condition de le dire au cadrage pour composer les groupes en conséquence. Il n\'y a aucun mépris à avoir : un excellent vendeur qui découvre le clavier reste un excellent vendeur, et il progresse vite quand la formation part de son niveau réel.'],
        ['q' => 'Faut-il acheter des licences ou des abonnements ?', 'r' => 'Presque jamais : la formation s\'appuie d\'abord sur ce que vous avez déjà et sur des outils gratuits. Quand un abonnement se justifie, stockage partagé ou gestionnaire de mots de passe d\'équipe, son coût réel est présenté en session et la décision vous revient.'],
        ['q' => 'Les gestes tiennent-ils dans la durée ?', 'r' => 'Ils tiennent si la direction les porte : l\'arborescence commune survit quand le dirigeant lui-même classe ses fichiers dedans. C\'est pour cela que la présence d\'au moins un responsable pendant les sessions est fortement recommandée, et que les règles sont écrites et affichées.'],
        ['q' => 'Proposez-vous un suivi après les modules ?', 'r' => 'Une session de retour peut se caler un mois après pour corriger ce qui dérive et répondre aux questions apparues à l\'usage. C\'est le même principe que pour les autres formations du catalogue : l\'ancrage se joue dans les semaines qui suivent, pas le jour même.'],
        ['q' => 'Nos ordinateurs sont vieux et lents. Faut-il d\'abord renouveler le parc ?', 'r' => 'Rarement : la plupart des gestes enseignés ne demandent aucune puissance, et une machine ralentie souffre souvent plus de son encombrement que de son âge. Quand un renouvellement se justifie vraiment, je le dis au cadrage, avec un ordre de priorité par poste plutôt qu\'un remplacement général.'],
        ['q' => 'La formation peut-elle se donner en langues locales ?', 'r' => 'Les supports sont en français, mais l\'explication orale s\'adapte au terrain : quand un relais interne traduit ou reformule, la session avance très bien. Signalez la situation au cadrage pour prévoir le rythme et composer les groupes avec les bons relais.'],
    ],
];
