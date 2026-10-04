<?php
// ============================================================
// data/formations/n8n.php · Fiche formation « n8n de zéro à l'autonomie »
// (vague 1B, lot A). Remplace l'ancienne page /formation-automatisation
// (n8n et Make) : la partie Make part sur la fiche make, l'IA dans n8n,
// les sous-flux et l'auto-hébergement sur la fiche n8n-avance. Repris de
// l'ancienne page : atelier d'une demi-journée ou formation de deux jours,
// groupes de dix au plus, cartographie des tâches, notification d'échec,
// registre des flux, cas par secteur. Tarifs, versions et règles de n8n
// relevés le 05/10/2026 sur n8n.io et docs.n8n.io.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation n8n de zéro à l\'autonomie : construire, tester et maintenir seul vos premiers flux d\'automatisation',
    'title'   => 'Formation n8n : de zéro à l\'autonomie | Richard SALANON',
    'meta'    => 'Formation n8n en deux jours : déclencheurs, nœuds, données et erreurs simples, sur vos outils, pour construire et entretenir seul vos premiers flux.',
    'en_bref' => 'Cette formation apprend à des personnes qui ne sont pas développeurs à construire, tester, publier et entretenir seules leurs premiers flux n8n : déclencheurs, nœuds, données, conditions et erreurs simples. Elle s\'adresse aux équipes qui ressaisissent les mêmes informations d\'un outil à l\'autre, dans une PME, un cabinet, une école ou une ONG. Elle dure deux jours, découpés en quatre demi-journées, ou une demi-journée en atelier de découverte, en intra, en inter, à distance ou en formule hybride. Le prix est fixé sur devis.',
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'automatisation',
    'forte'   => true,
    'duree'   => '2 jours (4 demi-journées), ou atelier d\'une demi-journée',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : penser en flux avant de toucher à l\'outil',
            'duree'  => '3 h 30',
            'points' => [
                'Cartographier les tâches de sa semaine : fréquence, durée, part de règles et part de jugement.',
                'Choisir dans sa propre liste la tâche que l\'on automatisera pendant la formation.',
                'Dessiner le flux sur papier : un déclencheur, des étapes, des conditions, ce qui se passe en cas d\'échec.',
                'Découvrir l\'éditeur : canevas, nœuds, panneaux d\'entrée et de sortie, exécution manuelle.',
                'Premier flux complet en vingt minutes : un formulaire qui remplit une ligne de tableur.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : déclencheurs, identifiants et premiers nœuds sur vos outils',
            'duree'  => '3 h 30',
            'points' => [
                'Les quatre familles de déclencheurs : manuel, planifié, webhook, événement d\'une application.',
                'Créer des identifiants dédiés et limités pour la messagerie, le tableur ou le stockage de fichiers.',
                'Enchaîner lecture, écriture et envoi : la boîte mail, Google Sheets ou Excel, un dossier partagé.',
                'Régler le fuseau horaire du flux avant de programmer le moindre envoi.',
                'Exercice : chaque participant relie deux outils de son poste et vérifie le résultat dans l\'outil d\'arrivée.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : comprendre et transformer les données',
            'duree'  => '3 h 30',
            'points' => [
                'Les items : pourquoi un nœud qui reçoit dix lignes agit dix fois.',
                'Les expressions : glisser un champ, lire une référence comme $json.email placée entre doubles accolades, formater une date ou un montant.',
                'Préparer les données avec le nœud Edit Fields, filtrer, trier, supprimer les doublons.',
                'Brancher le flux avec If et Switch : client connu ou inconnu, montant vide, pièce jointe absente.',
                'Épingler des données de test pour travailler sans écrire à de vrais clients.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : erreurs simples, mise en production et autonomie',
            'duree'  => '3 h 30',
            'points' => [
                'Lire la liste des exécutions, retrouver celle qui a échoué et le nœud fautif.',
                'Recharger les données d\'une exécution passée pour corriger sans attendre le prochain passage.',
                'Brancher un flux d\'erreur qui prévient une personne nommée par courriel ou par message.',
                'Provoquer volontairement les cas limites, puis décider pour chacun : traiter ou alerter.',
                'Publier le flux, rédiger sa fiche en trois lignes et l\'inscrire au registre des flux de l\'équipe.',
                'Évaluation : chaque participant modifie seul un flux qu\'il n\'a pas construit.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou atelier d\'une demi-journée'],
        ['l' => 'Public', 'v' => 'Non-développeurs qui ressaisissent des données d\'un outil à l\'autre, 10 personnes au plus'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous faire seul à la fin de la formation n8n, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Au bout des deux jours, chaque participant sait faire cinq choses sans aide. Transformer une tâche répétitive en schéma de flux écrit. Construire ce flux dans n8n, du déclencheur au dernier nœud, avec ses propres comptes. Le tester sur des données épinglées, puis sur un cas réel, sans envoyer de message par erreur. Le publier en production avec un flux d\'erreur qui prévient quelqu\'un. Et surtout, ouvrir un flux construit par un collègue, comprendre ce qu\'il fait et le modifier proprement quand un formulaire, une colonne ou un destinataire change.',
                'Ce dernier point est la vraie mesure de l\'autonomie. Une automatisation que personne en interne ne sait modifier transforme chaque petit changement en appel au prestataire, puis en panne quand celui-ci n\'est pas disponible. La formation vise donc la maintenance autant que la construction : lire une exécution échouée, retrouver le nœud fautif, corriger une expression, relancer. Ce sont des gestes simples, mais ce sont eux qui font qu\'un flux tourne encore six mois plus tard.',
                'Plusieurs sujets voisins sont volontairement laissés de côté. L\'outil Make a sa propre fiche, tout comme la lecture d\'une documentation d\'API ou la construction d\'un robot sur l\'API WhatsApp Business. Les sous-flux, la gestion d\'erreurs avancée, l\'installation de n8n sur un serveur, les files d\'exécution et les étapes d\'intelligence artificielle relèvent de la fiche n8n avancé. Ces formations figurent en bas de page ; le <a href="/formations/domaine/automatisation">domaine automatisation</a> les présente toutes et aide à choisir l\'ordre.',
                'La formation n\'est pas non plus une prestation déguisée. Si vous préférez qu\'un professionnel construise les flux à votre place et que votre équipe se contente de les exploiter, c\'est le service d\'<a href="/services/automatisation-ia">automatisation et IA sur mesure</a> qui convient. Les deux se combinent souvent : les flux complexes sont livrés, et la formation donne à l\'équipe de quoi les surveiller et faire les retouches courantes elle-même.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation n8n, avec quel niveau et quel matériel ?',
            'intro' => 'Le public type n\'est pas technique. C\'est la personne qui passe chaque semaine des heures à copier, coller, renommer, relancer, et qui veut que cela se fasse sans elle. Les groupes comptent dix personnes au plus, pour que chacun soit accompagné sur son propre écran.',
            'items' => [
                ['titre' => 'Les profils les plus fréquents', 'texte' => 'Assistantes et assistants de direction, gestionnaires administratifs, comptables, responsables commerciaux, chargés de communication, coordinateurs de projets d\'ONG, gérants de petites entreprises. Les profils techniques sont les bienvenus, mais ils trouveront plus vite leur compte dans la fiche n8n avancé.'],
                ['titre' => 'Le seul prérequis', 'texte' => 'Être à l\'aise avec ses propres outils : savoir où se trouvent ses fichiers, utiliser un tableur, gérer sa messagerie. Aucune ligne de code n\'est demandée. Si un tableur reste une difficulté, une demi-journée sur les <a href="/formations/excel-google-sheets">tableurs de gestion</a> avant la session rend la suite beaucoup plus fluide.'],
                ['titre' => 'Le niveau visé', 'texte' => 'Débutant au départ, autonome à l\'arrivée sur des flux de cinq à quinze nœuds. Le test de positionnement envoyé avant la session permet de regrouper les participants de niveau proche, ou de prévoir une courte mise à niveau.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur portable par personne, avec un navigateur récent ; une tablette ou un téléphone ne suffisent pas pour travailler sur le canevas. Un second écran aide beaucoup à distance. Prévoir aussi le chargeur : une demi-journée de construction vide vite une batterie.'],
                ['titre' => 'Les comptes à préparer', 'texte' => 'Un accès à une instance n8n (essai gratuit de n8n Cloud ou instance déjà installée par l\'entreprise), et des accès aux outils à relier : une boîte mail de test ou une adresse dédiée, un tableur partagé, un dossier de stockage. La liste exacte est envoyée une semaine avant, avec une vérification à distance des accès.'],
                ['titre' => 'Les données d\'exercice', 'texte' => 'Une copie anonymisée de quelques fichiers réels : un export de commandes, une liste de factures, des demandes reçues par formulaire. Jamais la base clients complète. Les exercices sont construits autour de ces copies pour que chacun travaille sur la forme réelle de ses données.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la formation commence-t-elle par cartographier vos tâches plutôt que par ouvrir n8n ?',
            'paragraphes' => [
                'L\'erreur classique consiste à installer l\'outil, puis à chercher quoi automatiser. On finit avec un flux spectaculaire qui ne sert à personne. La première heure prend le chemin inverse : chaque participant liste les tâches de sa semaine et note pour chacune sa fréquence, sa durée, le nombre d\'outils qu\'elle traverse et la part de décisions humaines qu\'elle demande. Une tâche fréquente, longue et régie par des règles claires est une bonne candidate. Une tâche rare ou pleine d\'exceptions reste manuelle, et c\'est très bien ainsi.',
                'La liste réserve presque toujours une surprise. La tâche que tout le monde voulait automatiser se révèle marginale, et le vrai gisement est un geste si banal que personne ne le voyait plus : recopier les virements du relevé vers le tableau de suivi, renvoyer chaque lundi l\'état des stocks, répondre trente fois par semaine à la même question sur les délais de livraison. Les flux les plus rentables sont rarement les plus impressionnants.',
                'Le calcul de rentabilité fait partie de l\'exercice et se fait en cinq minutes. Une tâche de vingt minutes répétée chaque jour ouvrable représente environ quatre-vingts heures par an ; un flux qui la supprime se rembourse vite, même en comptant large la construction et l\'entretien. La même règle appliquée à une tâche mensuelle de dix minutes conclut qu\'il ne faut pas l\'automatiser. Savoir faire ce calcul avant de construire évite d\'accumuler des gadgets qu\'il faudra pourtant surveiller.',
                'Enfin, chacun choisit sa cible dans sa propre liste, et c\'est elle qu\'il construit pendant les deux jours. Ce choix n\'est pas un détail : on entretient avec soin un flux qui supprime sa propre corvée, on abandonne vite celui qu\'on a monté sur un exemple inventé. La cartographie, classée par gain espéré, devient ensuite la feuille de route des mois suivants.',
            ],
        ],
        ['type' => 'programme', 'titre' => 'Quel est le programme, demi-journée par demi-journée ?'],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices réalise-t-on sur vos propres outils pendant les deux jours ?',
            'items' => [
                ['titre' => 'Le formulaire qui range tout seul', 'duree' => '45 minutes, jour 1', 'texte' => 'Une demande arrive par formulaire ; n8n l\'inscrit dans le tableau de suivi, attribue un numéro et envoie un accusé de réception. C\'est l\'exercice qui montre en une fois le déclencheur, la transformation des données et l\'action.'],
                ['titre' => 'La relance de paiement qui s\'arrête toute seule', 'duree' => '1 heure, jour 1', 'texte' => 'Chaque matin, le flux lit la liste des factures échues, envoie un rappel ferme mais correct et note la date de relance. Dès que le règlement est saisi, la facture sort de la liste. On y apprend le déclencheur planifié et la condition qui évite de relancer un client qui a payé.'],
                ['titre' => 'Les pièces jointes classées', 'duree' => '1 heure, jour 2', 'texte' => 'Les factures des fournisseurs reçues par courriel sont extraites, renommées selon une règle fixe et rangées dans le bon dossier partagé. L\'exercice fait manipuler les données binaires et les expressions de date.'],
                ['titre' => 'Le rapport du lundi', 'duree' => '1 heure, jour 2', 'texte' => 'Le flux rassemble les chiffres de la semaine depuis deux sources, calcule trois totaux et envoie un message lisible à la direction le lundi à 8 heures, heure locale. C\'est ici que le réglage du fuseau horaire prouve son utilité.'],
                ['titre' => 'Casser son propre flux', 'duree' => '45 minutes, jour 2', 'texte' => 'Chaque participant soumet son flux aux pires cas : message sans pièce jointe, montant vide, client inconnu, fichier renommé, identifiant expiré. Pour chaque cas, il décide de traiter l\'exception dans le flux ou de déclencher une alerte.'],
                ['titre' => 'Reprendre le flux d\'un autre', 'duree' => '30 minutes, jour 2', 'texte' => 'Les participants échangent leurs flux. Chacun doit comprendre celui de son voisin à partir de sa fiche de trois lignes, puis y apporter une modification demandée. Si la fiche ne suffit pas, elle est réécrite avant la fin de la journée.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles notions de n8n faut-il maîtriser pour être autonome, et quelles erreurs de débutant éviter ?',
            'legende' => 'Les dix notions travaillées pendant la formation, avec l\'erreur que les débutants commettent le plus souvent pour chacune. Les noms des nœuds sont donnés tels qu\'ils apparaissent dans l\'éditeur, qui s\'affiche par défaut en anglais.',
            'entetes' => ['Notion', 'Ce que c\'est', 'L\'erreur de débutant la plus fréquente'],
            'lignes'  => [
                ['Déclencheur (trigger)', 'Le premier nœud, qui décide quand le flux démarre : à la main, à heure fixe, à la réception d\'un appel web ou d\'un événement dans une application.', 'Programmer une vérification toutes les cinq minutes pour une tâche qui n\'a besoin que d\'un passage par heure.'],
                ['Nœud', 'Une étape du flux : lire, écrire, envoyer, transformer, décider.', 'Empiler trente nœuds dans un seul flux au lieu de découper le travail en étapes lisibles.'],
                ['Item', 'Une ligne de données. Un nœud qui reçoit dix items agit dix fois, une fois par item.', 'S\'étonner de recevoir dix courriels identiques parce qu\'une lecture a renvoyé dix lignes.'],
                ['Expression', 'Une formule placée entre doubles accolades qui reprend une valeur d\'un nœud précédent, par exemple le champ $json.email.', 'Taper une valeur en dur au lieu de la relier au champ, puis oublier de la changer.'],
                ['If et Switch', 'Les nœuds qui orientent le flux selon une condition : payé ou non, client connu ou inconnu.', 'Ne prévoir que la branche « oui » et laisser les autres cas se perdre sans trace.'],
                ['Edit Fields (Set)', 'Le nœud qui renomme, crée ou nettoie les champs avant de les envoyer ailleurs.', 'Envoyer à l\'outil d\'arrivée des données brutes qu\'il refuse ou range mal.'],
                ['Identifiants (credentials)', 'Les accès enregistrés que n8n utilise pour agir dans vos outils.', 'Brancher le compte personnel du gérant, avec tous ses droits, au lieu d\'un accès dédié et limité.'],
                ['Exécution', 'Un passage complet du flux, conservé dans une liste avec ses données et son statut.', 'Ne jamais ouvrir la liste des exécutions et découvrir une panne par un client mécontent.'],
                ['Données épinglées', 'Des données de test figées sur un nœud pour construire sans rappeler les vrais systèmes.', 'Tester sur la vraie liste de clients et leur envoyer des messages d\'essai.'],
                ['Flux d\'erreur', 'Un second flux, qui commence par le nœud Error Trigger et se lance quand le premier échoue.', 'Publier un flux sans flux d\'erreur : il peut s\'arrêter pendant des semaines sans que personne le sache.'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée pour que chacun reparte autonome ?',
            'intro' => 'Le rythme est simple : une démonstration courte sur un cas réel, puis un temps de pratique long, chacun sur son poste. Le formateur parle peu et circule beaucoup.',
            'items' => [
                ['titre' => 'Dix personnes au plus', 'texte' => 'Au-delà, il devient impossible de passer derrière chaque écran au moment où quelqu\'un bloque. Pour un service plus nombreux, deux groupes successifs valent mieux qu\'une grande salle.'],
                ['titre' => 'Chacun sur les comptes de son entreprise', 'texte' => 'Les flux se construisent sur l\'instance n8n et les outils de l\'organisation, jamais sur un compte du formateur. Ce qui est construit reste donc chez vous, et fonctionne encore le lendemain.'],
                ['titre' => 'Des tâches réelles, des données anonymisées', 'texte' => 'Les exercices partent de la cartographie de chaque participant et de copies anonymisées de ses fichiers. Les données épinglées évitent tout envoi accidentel à un vrai client pendant les essais.'],
                ['titre' => 'Une erreur provoquée par demi-journée', 'texte' => 'Chaque séance comporte un moment où le flux casse volontairement. Lire un message d\'erreur sans paniquer s\'apprend en le voyant souvent, dans un cadre où l\'échec ne coûte rien.'],
                ['titre' => 'Des supports qui restent à l\'équipe', 'texte' => 'Les flux d\'exercice exportés en fichiers JSON réutilisables, un lexique français des nœuds et des menus, une fiche réflexe pour diagnostiquer une exécution échouée, le modèle de registre des flux et la fiche de trois lignes.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Pendant la période convenue, un canal direct reste ouvert pour les questions d\'application, et le premier flux publié par chaque participant est relu à distance. Les difficultés qui reviennent alimentent une courte séance de reprise quand elle est prévue au devis.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Sur quelle version de n8n travaille-t-on, et combien coûtent les offres de l\'éditeur ?',
            'legende' => 'Offres et versions relevées le 5 octobre 2026 sur la page tarifs de n8n et dans sa documentation. Prix de l\'éditeur hors taxes, payés à n8n et non à Richard SALANON ; conversion au taux fixe de 655,957 FCFA pour un euro publié par la BCEAO.',
            'entetes' => ['Élément', 'Ce que publie l\'éditeur', 'Ce que cela change pour la formation'],
            'lignes'  => [
                ['Version enseignée', 'n8n 2.40, publiée le 15 septembre 2026 selon les notes de version.', 'Les écrans de la formation sont ceux de la version installée chez vous ; une instance très ancienne est mise à jour ou remplacée par l\'essai Cloud pendant la session.'],
                ['n8n 3.0', 'Annoncée pour octobre 2026 ; les installations auto-hébergées devront passer par Docker, sans npm ni npx.', 'Sans effet pour un débutant sur n8n Cloud. Une équipe qui a installé n8n avec npm doit prévoir sa migration, traitée dans la fiche n8n avancé.'],
                ['Essai de n8n Cloud', '14 jours sans carte bancaire, limités à 1 000 exécutions, 5 exécutions simultanées et 180 secondes par exécution.', 'Suffisant pour les deux jours de formation et les premières semaines de pratique, si aucun flux n\'est déjà installé chez vous.'],
                ['n8n Cloud Starter', '20 € par mois en paiement annuel (environ 13 119 FCFA), 2 500 exécutions par mois, étapes illimitées, 5 exécutions simultanées.', 'Le premier abonnement payant d\'une petite équipe ; la formation apprend à estimer avant de souscrire si 2 500 exécutions suffisent.'],
                ['n8n Cloud Pro', '50 € par mois en paiement annuel, 10 000 exécutions par mois, jusqu\'à 50 exécutions simultanées.', 'Utile quand plusieurs services publient des flux ; le détail des paliers est dans le <a href="/comparatifs/n8n-vs-make-vs-zapier">comparatif n8n, Make et Zapier</a>.'],
                ['Business', '667 € par mois en paiement annuel, 40 000 exécutions, pour l\'instant réservé aux instances auto-hébergées.', 'Hors du périmètre d\'une formation de débutants ; cité pour que la direction connaisse l\'échelle des prix.'],
                ['Édition Community', 'Gratuite, auto-hébergée, publiée sur GitHub ; « presque toutes les fonctions » selon la documentation.', 'Possible pour la formation si votre équipe technique l\'a déjà installée et maintenue ; son installation n\'est pas enseignée ici.'],
                ['Données des offres Cloud', 'Stockées dans l\'Union européenne, sur des serveurs situés à Francfort.', 'À intégrer dans votre réflexion sur les données personnelles, détaillée plus bas.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Combien d\'exécutions consomme un flux, et pourquoi faut-il le savoir dès le premier jour ?',
            'paragraphes' => [
                'Sur les offres payantes, n8n compte des exécutions : selon sa page tarifs, une exécution est un passage complet du flux, quel que soit le nombre d\'étapes ou la quantité de données traitée. Un flux de douze nœuds qui traite cinquante lignes consomme donc une seule exécution. Cette règle est favorable, mais elle a un revers que les débutants découvrent sur leur facture : c\'est le déclencheur qui fixe la consommation, pas la longueur du flux.',
                'La même page donne deux repères. Un flux planifié une fois par jour consomme 30 ou 31 exécutions par mois. Le même flux programmé toutes les cinq minutes en consomme environ 8 600 à 8 900, soit plus du triple des 2 500 exécutions de l\'offre Starter. Un passage par heure, lui, représente environ 720 exécutions par mois. Choisir la bonne fréquence n\'est donc pas un détail technique : c\'est la première décision budgétaire du flux.',
                'La documentation de n8n précise aussi ce qui ne compte pas. Les exécutions manuelles lancées depuis l\'éditeur pendant les tests, les exécutions des flux d\'erreur et les sous-flux appelés par un flux principal sont exclus. Un déclencheur qui interroge une application ne compte que lorsqu\'il trouve de nouvelles données. Un webhook, en revanche, compte une exécution par requête reçue, même vide. Pendant la formation, chaque participant estime la consommation mensuelle de son flux avant de le publier, et l\'inscrit au registre.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'n8n Cloud ou instance installée chez vous : sur quoi la formation se déroule-t-elle ?',
            'paragraphes' => [
                'La documentation de n8n distingue deux voies. n8n Cloud est hébergé et mis à jour par l\'éditeur, et la documentation le recommande à ceux qui veulent démarrer tout de suite ou qui n\'ont pas de compétences techniques. L\'auto-hébergement donne le contrôle complet de l\'environnement, à condition d\'avoir l\'infrastructure et les personnes pour l\'administrer. Pour une formation de débutants, la question se règle simplement : on travaille sur ce qui existe déjà chez vous, ou sur un essai Cloud ouvert au nom de l\'entreprise.',
                'La licence de n8n éclaire ce choix. Selon la FAQ de la licence communautaire, l\'édition auto-hébergée est gratuite tant que les flux sont créés ou modifiés par des personnes de votre organisation, et un prestataire peut facturer des services de formation et de conseil. La même FAQ réserve l\'usage de l\'instance d\'un organisateur aux ateliers éducatifs gratuits, avec un accès temporaire. C\'est une raison de plus pour que chaque participant construise sur l\'instance de son entreprise : ses flux lui appartiennent et continuent de tourner après la session.',
                'Installer n8n sur un serveur, choisir sa base de données, organiser les sauvegardes et préparer le passage à n8n 3.0 sont de vrais sujets, mais pas des sujets de débutant. Ils sont traités dans la fiche n8n avancé. Ici, il suffit de savoir où tourne l\'instance, qui l\'administre et qui prévenir quand elle ne répond plus.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel premier flux construisent les participants, selon leur secteur ?',
            'items' => [
                ['secteur' => 'Import-export et transit, à Cotonou ou à Lomé', 'probleme' => 'Les documents d\'un dossier (connaissement, facture, certificat d\'origine) arrivent par courriel à des dates différentes, et l\'absence d\'une pièce n\'est découverte qu\'à l\'arrivée du conteneur.', 'solution' => 'Un flux qui extrait les pièces jointes, les renomme avec le numéro de dossier, les range dans le bon répertoire et signale chaque matin les pièces manquantes des dossiers dont l\'échéance approche.'],
                ['secteur' => 'Commerce et vente en ligne, à Abidjan ou à Douala', 'probleme' => 'Les commandes arrivent par le site, par formulaire et par téléphone ; chacun les recopie dans son propre tableau et personne n\'a la liste complète.', 'solution' => 'Un flux qui réunit les commandes du site et du formulaire dans un seul tableau partagé, avec numéro, accusé de réception au client et rapport des ventes le lundi matin. Les ventes conclues dans l\'application WhatsApp Business relèvent de la formation <a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>.'],
                ['secteur' => 'École privée ou centre de formation, à Dakar', 'probleme' => 'Les inscriptions, les rappels de scolarité et les attestations occupent le secrétariat à chaque rentrée, avec des oublis et des doublons.', 'solution' => 'Un flux qui inscrit chaque élève dans la bonne liste de classe à partir du formulaire, puis un second qui envoie les rappels d\'échéance et s\'arrête dès que le paiement est enregistré.'],
                ['secteur' => 'Cabinet comptable ou juridique, à Lyon ou à Bruxelles', 'probleme' => 'Les pièces des clients arrivent en désordre, les relances de documents manquants se font à la main, et le RGPD impose de savoir où passent les données.', 'solution' => 'Un flux de relance des pièces manquantes à partir du tableau de suivi des dossiers, construit sur des données de test, puis inscrit au registre des flux avec la liste des outils traversés.'],
                ['secteur' => 'Hôtel ou résidence, à Ouidah ou à Grand-Bassam', 'probleme' => 'Les demandes de réservation arrivent par le site et par courriel, et la même chambre est parfois promise deux fois.', 'solution' => 'Un flux qui inscrit chaque demande dans un registre unique, vérifie la disponibilité, envoie une confirmation ou une proposition de date, et rappelle le séjour la veille.'],
                ['secteur' => 'ONG ou association, à Genève ou à Ouagadougou', 'probleme' => 'Les rapports d\'activité mensuels se compilent à la main à partir des fiches de plusieurs équipes de terrain.', 'solution' => 'Un flux planifié qui rassemble les fiches déposées dans un dossier partagé, calcule les totaux par projet et envoie le tableau consolidé au coordinateur le premier jour du mois.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels formats, quelle durée et quelle organisation choisir ?',
            'legende' => 'Les formats possibles pour cette formation. L\'atelier et la formation complète reprennent l\'organisation déjà proposée par l\'ancienne page consacrée à l\'automatisation, réécrite pour n8n seul.',
            'entetes' => ['Format', 'Durée et rythme', 'Ce que l\'on y fait', 'Pour qui'],
            'lignes'  => [
                ['Atelier de découverte', 'Une demi-journée', 'Cartographie des tâches, premier flux simple, estimation des gains et de la consommation', 'Une direction qui veut décider, une équipe qui veut essayer avant d\'investir'],
                ['Formation complète en intra', 'Deux jours, en quatre demi-journées', 'Le programme complet sur les outils et les données de l\'entreprise, flux publié par chaque participant', 'Une équipe d\'une même organisation, dix personnes au plus par groupe'],
                ['Session inter-entreprises', 'Deux jours', 'Le même programme sur des données de démonstration, sans document interne', 'Une ou deux personnes par structure, ou un réseau qui partage le même besoin'],
                ['À distance', 'Quatre à six séances de deux à trois heures et demie, sur deux à trois semaines', 'Partage d\'écran, exercices envoyés à l\'avance, pratique entre les séances', 'Équipes réparties sur plusieurs sites ou plusieurs pays, organisations en Europe'],
                ['Hybride', 'Une journée en salle, puis deux ou trois séances à distance', 'Prise en main en présentiel, construction du flux personnel suivie à distance', 'Équipes peu à l\'aise avec l\'ordinateur, ou qui veulent espacer l\'apprentissage'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation n8n, et qu\'est-ce qui fait varier le prix ?',
            'intro'      => 'Le prix est fixé sur devis, après un premier échange sur le nombre de participants et les tâches visées. Les abonnements éventuels à n8n Cloud sont payés directement à l\'éditeur, au nom de votre entreprise. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Atelier de découverte', 'prix' => 'Sur devis', 'inclus' => ['Une demi-journée', 'Cartographie des tâches de l\'équipe', 'Premier flux construit en direct', 'Recommandation écrite pour la suite']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Deux jours en quatre demi-journées', 'Exercices sur vos outils et vos données anonymisées', 'Flux publié par chaque participant', 'Supports, gabarits et registre des flux', 'Évaluation et attestation']],
                ['offre' => 'Suivi après formation', 'prix' => 'Sur devis', 'inclus' => ['Canal direct pour les questions', 'Relecture du premier flux publié', 'Séance de reprise si elle est prévue']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, puisque chaque groupe compte dix personnes au plus.',
                'Le format : atelier, formation complète, séances à distance ou formule hybride.',
                'La préparation : exercices construits sur vos fichiers anonymisés, vérification préalable des accès.',
                'Le lieu et les déplacements hors de Cotonou pour une session en présentiel.',
                'La durée du suivi après la formation.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'La formation n8n peut-elle être financée par un fonds de formation ?',
            'paragraphes' => [
                'Parfois, mais jamais automatiquement, et rien sur cette page ne vaut promesse de prise en charge. En Côte d\'Ivoire, la page du FDFP consacrée au plan de formation, consultée le 5 octobre 2026, indique que toute entreprise qui justifie du paiement régulier des deux taxes peut déposer un plan, qu\'une formation donnée par un intervenant extérieur à ses salariés entre dans la catégorie « intra », et que le règlement intervient après le suivi et le contrôle du fonds, puis l\'approbation de sa Commission permanente.',
                'Au Bénin, les statuts du FODEFCA ont été approuvés par le décret n° 2022-286 du 11 mai 2022. Au Sénégal, le site du 3FPT présente un guichet de financement du personnel des entreprises et des membres des organisations professionnelles. En France, France Compétences rappelle que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds des OPCO et des autres financeurs publics ou mutualisés. Richard SALANON n\'affiche aucune certification Qualiopi ni aucun agrément d\'un fonds.',
                'La démarche raisonnable est donc la suivante : interroger le fonds par écrit, programme et devis en main, avant de signer, et prévoir le budget sans prise en charge. Le programme détaillé, les feuilles de présence, l\'évaluation et l\'attestation remis en fin de formation servent quel que soit le dispositif. La page consacrée à la <a href="/services/formation-en-entreprise">formation en entreprise</a> détaille les règles de chaque fonds.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel oubli rend un flux dangereux dès le lendemain de la formation ?',
            'texte' => 'Publier un flux sans flux d\'erreur. Le jour où un mot de passe expire ou un fichier change de nom, le flux s\'arrête, et personne ne le sait : les relances ne partent plus depuis trois semaines, et on le découvre par un impayé. La documentation de n8n permet de désigner, dans les réglages de chaque flux, un flux d\'erreur qui commence par le nœud Error Trigger et se lance à chaque échec ; un même flux d\'erreur peut servir à tous les autres, et ses exécutions ne sont pas décomptées du forfait. Pendant la formation, aucun flux n\'est publié sans cette alerte, envoyée à une personne nommée et à une adresse qu\'elle lit vraiment.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on le plus souvent après une formation n8n, et comment les éviter ?',
            'intro' => 'Les flux meurent rarement le jour de leur publication. Ils s\'éteignent dans les semaines qui suivent, pour des raisons que l\'on peut presque toutes anticiper.',
            'items' => [
                ['titre' => 'Le flux que seul son auteur comprend', 'texte' => 'L\'auteur change de poste et le flux devient une boîte noire que personne n\'ose toucher, puis qu\'on débranche au premier incident. Remède : une fiche de trois lignes par flux (ce qu\'il fait, ce qui le déclenche, qui prévenir) et des nœuds renommés en français clair.'],
                ['titre' => 'Automatiser un processus malade', 'texte' => 'Si la tâche manuelle est mal définie, son automatisation exécute le désordre plus vite. On clarifie la règle d\'abord, on automatise ensuite. Quand le problème relève de l\'organisation, la formation sur l\'<a href="/formations/ia-processus-metier">IA dans les processus métier</a> ou une mission de <a href="/services/digitalisation-d-entreprise">digitalisation</a> est plus utile qu\'un flux.'],
                ['titre' => 'Empiler sans inventaire', 'texte' => 'Vingt flux créés par cinq personnes, et plus personne ne sait ce qui tourne. Le registre des flux tient sur une feuille : nom, responsable, outils traversés, consommation estimée, date de dernière vérification.'],
                ['titre' => 'Oublier le fuseau horaire', 'texte' => 'Selon la documentation de n8n, un flux dont ni les réglages ni l\'instance ne précisent le fuseau horaire suit l\'heure de New York. Le rapport prévu à 8 heures à Cotonou part alors en début d\'après-midi. Le fuseau se règle avant la première planification.'],
                ['titre' => 'Tester sur les vrais clients', 'texte' => 'Une boucle mal réglée et deux cents clients reçoivent un message d\'essai. Les données épinglées, que la documentation réserve au développement, et une adresse de test évitent ce scénario.'],
                ['titre' => 'Brancher les accès du gérant', 'texte' => 'Un flux qui utilise le compte personnel du dirigeant détient tous ses droits et casse le jour où il change son mot de passe. On crée des accès dédiés, limités à ce que le flux doit toucher, et révocables sans rien casser d\'autre.'],
                ['titre' => 'Vouloir tout automatiser', 'texte' => 'Mieux vaut cinq flux robustes, documentés et surveillés que vingt fragiles. Chaque flux est un petit système à entretenir ; la cartographie sert aussi à dire non.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Données personnelles, connexion, langue : que change le contexte local pour un flux n8n ?',
            'paragraphes' => [
                'Un flux n8n détient vos accès et fait circuler vos données d\'un service à l\'autre. Au Bénin, l\'article 391 de la loi n° 2017-20 du 20 avril 2018 portant code du numérique n\'autorise le transfert de données personnelles vers un État tiers que si l\'Autorité constate que cet État assure un niveau de protection équivalent. Les offres Cloud de n8n stockent les données à Francfort, selon sa page tarifs. Avant de faire passer des fiches clients par un flux hébergé hors du Bénin, la question mérite donc d\'être posée, et la formation apprend à lire le trajet de chaque donnée.',
                'En Europe, le RGPD encadre la même situation sous un autre angle. Selon le texte publié par la CNIL, l\'article 28 impose de ne faire appel qu\'à des sous-traitants présentant des garanties suffisantes, avec un contrat, et l\'article 30 demande à chaque responsable de traitement de tenir un registre de ses activités de traitement. Le registre des flux tenu pendant la formation ne remplace pas ce registre, mais il fournit à la personne qui le tient la liste exacte des outils et des données concernés.',
                'La connexion pèse aussi. Selon les chiffres de l\'UIT publiés le 15 octobre 2025, 36 % de la population utilise Internet en moyenne en Afrique, contre 88 à 93 % en Europe, dans la CEI et dans les Amériques. Pour une formation à Cotonou, à Niamey ou à Bangui, chaque séance prévoit un partage de connexion de secours, et les flux d\'exercice sont exportés en fichiers pour être réimportés si la séance coupe. Côté production, un flux hébergé dans le cloud continue de tourner pendant une coupure au bureau, ce qu\'un ordinateur local éteint ne fait pas.',
                'Reste la langue. L\'éditeur de n8n s\'affiche par défaut en anglais, et sa documentation officielle est rédigée en anglais. Les séances se font en français, et le lexique remis aux participants traduit les noms des nœuds, des menus et des messages d\'erreur les plus fréquents, avec l\'équivalent exact affiché à l\'écran.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre n8n avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'L\'automatisation fait partie de son travail quotidien : il construit des flux avec n8n et Make pour ses clients, et il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone. Il est aussi co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Ce qu\'il enseigne vient de ces projets, y compris des pannes qu\'il a dû diagnostiquer. Avec ' . $ans . ' ans d\'expérience dans le numérique et une formation à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP.',
                'Il a travaillé au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada, sur place ou à distance. Il n\'est ni certifié ni partenaire de n8n : sa formation se conclut par une évaluation sur un flux réel et une attestation. Sa façon de former tient en quelques principes vérifiables : vos comptes plutôt que les siens, vos tâches plutôt que des exemples inventés, une réponse sous 24 heures et une réponse franche quand l\'automatisation n\'est pas la bonne solution. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur la page <a href="/zones/">zones d\'intervention</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe à une formation n8n ?',
            'texte' => 'Partez des tâches réelles de chaque personne, pas de l\'outil ; faites construire chaque flux sur les comptes de l\'entreprise ; exigez un flux d\'erreur et une fiche de trois lignes avant toute publication ; estimez la consommation d\'exécutions avant de choisir une offre ; et désignez la personne qui tiendra le registre des flux.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Voulez-vous que votre équipe construise et entretienne elle-même ses flux n8n ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs postes, deux ou trois tâches qui vous coûtent du temps chaque semaine et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition de programme et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation n8n'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir programmer pour suivre la formation n8n ?', 'r' => 'Non. Les flux se construisent visuellement, en reliant des nœuds sur un canevas. Il faut seulement raisonner en « si ceci, alors cela » et être à l\'aise avec ses propres outils. Les rares cas qui demanderaient une ligne de code sont montrés en démonstration, sans être exigés à l\'évaluation.'],
        ['q' => 'Pourquoi apprendre n8n plutôt que Make ou Zapier ?', 'r' => 'n8n compte un passage complet du flux comme une seule exécution, quel que soit le nombre d\'étapes, et peut aussi s\'installer sur votre propre serveur. Make et Zapier ont d\'autres atouts ; le comparatif n8n, Make et Zapier les met côte à côte. Si votre équipe utilise déjà Make, la fiche consacrée à Make est plus adaptée.'],
        ['q' => 'Sur quelle instance de n8n travaille-t-on pendant la formation ?', 'r' => 'Sur celle de votre entreprise : une instance déjà installée par votre équipe technique, ou un essai de n8n Cloud ouvert à son nom, gratuit pendant 14 jours sans carte bancaire et limité à 1 000 exécutions. Jamais sur un compte du formateur : les flux construits doivent continuer de tourner après la session.'],
        ['q' => 'Peut-on utiliser n8n gratuitement dans une entreprise ?', 'r' => 'L\'édition Community, auto-hébergée, est gratuite tant que les flux sont créés ou modifiés par des personnes de votre organisation, selon la FAQ de la licence de n8n. Il faut alors un serveur et quelqu\'un pour l\'administrer. n8n Cloud est payant après l\'essai, à partir de 20 € par mois en paiement annuel pour l\'offre Starter.'],
        ['q' => 'La formation délivre-t-elle une certification n8n ?', 'r' => 'Non. Richard SALANON n\'est ni certifié ni partenaire de n8n, et sa formation se conclut par une évaluation sur un flux réel et une attestation de fin de formation. L\'éditeur propose de son côté des cours en ligne, la n8n Academy, avec badges et certificats de réussite à partir de 70 % à l\'examen final ; vos participants peuvent les suivre ensuite.'],
        ['q' => 'Que devient le flux construit pendant la formation ?', 'r' => 'Il vous appartient. Il tourne sur l\'instance et avec les accès de votre entreprise, accompagné de sa fiche de trois lignes, de son flux d\'erreur et de son inscription au registre. Les flux d\'exercice sont aussi remis en fichiers réutilisables, comme points de départ pour les suivants.'],
        ['q' => 'Peut-on automatiser WhatsApp avec n8n ?', 'r' => 'Oui, mais seulement par la voie officielle de l\'API WhatsApp Business, avec ses règles, ses modèles de messages et ses coûts propres. Ce sujet a sa fiche dédiée, proposée en bas de page. Pour vendre avec l\'application WhatsApp Business, sans automatisation, la formation WhatsApp Business pour vendre est la bonne porte d\'entrée.'],
        ['q' => 'Et si un flux casse après la formation ?', 'r' => 'C\'est précisément ce que la deuxième journée prépare : le flux d\'erreur prévient une personne, la liste des exécutions montre le nœud fautif, et les données de l\'exécution échouée peuvent être rechargées pour corriger. Pendant la période de suivi convenue, un canal direct reste ouvert pour les cas qui résistent.'],
        ['q' => 'Combien de flux une PME peut-elle raisonnablement entretenir ?', 'r' => 'Il n\'existe pas de chiffre universel, mais la règle tient : mieux vaut quelques flux robustes, documentés et surveillés qu\'une collection fragile. Le registre des flux sert à garder le parc à une taille que l\'équipe maîtrise, et à vérifier régulièrement que chaque flux sert encore.'],
        ['q' => 'Quelle différence avec la formation IA en entreprise ?', 'r' => 'La formation IA en entreprise outille des gestes individuels : rédiger, résumer, analyser avec un assistant. La formation n8n relie des outils entre eux pour supprimer des tâches entières, sans intervention humaine à chaque passage. Les deux se complètent, et l\'ajout d\'étapes d\'IA dans un flux est traité dans la fiche n8n avancé.'],
        ['q' => 'Nos outils sont des cahiers, des tableurs et des messages : est-ce automatisable ?', 'r' => 'C\'est le point de départ le plus courant, et oui. Le tableur et la messagerie se relient très bien à n8n, et le cahier se remplace progressivement par un formulaire qui alimente le reste. La cartographie part de vos outils réels, pas d\'un système idéal.'],
        ['q' => 'Combien de temps avant les premiers gains ?', 'r' => 'Le premier flux est publié pendant la formation, donc le gain commence la semaine même. Le rythme de croisière s\'installe ensuite sur quelques mois, au fil des flux construits en autonomie à partir de la cartographie, en commençant par les tâches les plus rentables.'],
        ['q' => 'Le passage à n8n 3.0 change-t-il quelque chose pour un débutant ?', 'r' => 'Très peu sur n8n Cloud, où l\'éditeur gère les mises à jour. Selon la documentation de n8n, la version 3.0 est annoncée pour octobre 2026 et imposera Docker aux installations auto-hébergées. Une équipe qui a installé n8n avec npm doit préparer cette migration avant de mettre à jour.'],
    ],

    'sources' => [
        ['titre' => 'n8n, Plans and Pricing (offres Cloud, essai, exécutions, hébergement des données à Francfort)', 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, Understand executions (modes d\'exécution et décompte du forfait)', 'url' => 'https://docs.n8n.io/build/understand-workflows/understand-executions', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, Handle errors gracefully (flux d\'erreur, Error Trigger, Stop And Error)', 'url' => 'https://docs.n8n.io/build/flow-logic/handle-errors-gracefully', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, Understand n8n\'s data structure (items et traitement par élément)', 'url' => 'https://docs.n8n.io/build/work-with-data/understand-n8ns-data-structure', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, Pin and mock data (données épinglées en développement)', 'url' => 'https://docs.n8n.io/build/work-with-data/pin-and-mock-data', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, Configure workflow settings (flux d\'erreur, fuseau horaire par défaut)', 'url' => 'https://docs.n8n.io/build/manage-workflows/configure-workflow-settings', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, Release notes (n8n 2.40, 15 septembre 2026)', 'url' => 'https://docs.n8n.io/changelog/release-notes', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, v3.0 Breaking changes (n8n 3.0 prévu en octobre 2026)', 'url' => 'https://docs.n8n.io/changelog/v30-breaking-changes', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, Choose how to use n8n (Cloud ou auto-hébergement)', 'url' => 'https://docs.n8n.io/choose-how-to-use-n8n', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, License FAQ (licence communautaire, usage interne et formation)', 'url' => 'https://docs.n8n.io/n8n-community-license/community-license/license-faq', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, Learning paths (n8n Academy, certificats de réussite)', 'url' => 'https://docs.n8n.io/learning-paths', 'date' => '2026-10-05'],
        ['titre' => 'BCEAO, histoire du franc CFA (parité fixe avec l\'euro)', 'url' => 'https://www.bceao.int/fr/content/histoire-du-franc-cfa', 'date' => '2026-10-05'],
        ['titre' => 'UIT, Facts and Figures 2025 : Internet use (15 octobre 2025)', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-internet-use/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, RGPD chapitre IV : responsable du traitement et sous-traitant (articles 28 et 30)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['n8n-avance', 'make', 'integrations-api-no-code', 'chatbot-whatsapp', 'ia-processus-metier', 'excel-google-sheets'],
        'services'    => ['automatisation-ia', 'formation-en-entreprise'],
        'comparatifs' => ['n8n-vs-make-vs-zapier'],
    ],
];
