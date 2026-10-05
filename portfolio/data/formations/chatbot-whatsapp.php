<?php
// ============================================================
// data/formations/chatbot-whatsapp.php · Fiche formation « Chatbot WhatsApp
// et API WhatsApp Business » (vague 1B, lot B, domaine automatisation).
// Angle propre : former une équipe technique ou un responsable digital à la
// plateforme de Meta (API Cloud, portefeuille, numéro, modèles et leur examen,
// fenêtre de 24 heures, webhooks, limites, coûts) et à la conception d'un robot
// avec reprise humaine. L'application seule relève de whatsapp-business ; le
// lien avec Odoo, Dolibarr ou un CRM, de whatsapp-odoo-dolibarr-crm ; la
// construction pour le client, des piliers agents-ia-chatbot-whatsapp et
// integration-whatsapp. Documentation de Meta lue dans un navigateur le
// 05/10/2026 (plateforme, limites, modèles, webhooks, numéros, tokens, messages
// interactifs, fournisseurs d'IA, tarification) ; politique WhatsApp du
// 23/09/2026 ; n8n Docs ; CNIL ; ARCEP Bénin. Tarifs de Meta : faits vérifiés
// de la table du catalogue, repris tels quels.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation chatbot WhatsApp et API WhatsApp Business : ouvrir la plateforme de Meta, faire valider ses modèles, recevoir les webhooks et concevoir un robot qui passe la main à un humain",
    'title'   => 'Formation chatbot WhatsApp et API Cloud | Richard SALANON',
    'meta'    => "Formation à l'API WhatsApp Business : numéro, modèles de messages, fenêtre de 24 heures, webhooks, coûts Meta et robot avec reprise humaine, sur devis.",
    'en_bref' => "Cette formation apprend à une équipe technique, à un responsable digital ou au référent d'un prestataire à travailler sur la plateforme WhatsApp Business de Meta : comptes et numéro, envoi par l'API Cloud, modèles de messages et leur examen, fenêtre de service de 24 heures, webhooks, limites d'envoi et coûts. La seconde journée sert à concevoir un robot de conversation qui sait s'arrêter et transmettre la conversation à une personne. Elle dure deux jours, suivis d'une séance de retour à distance, dans vos locaux, en inter-entreprises, à distance ou en formule hybride. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'automatisation',
    'forte'   => false,
    'duree'   => 'Deux jours, puis une séance de suivi à distance',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : la plateforme de Meta, ses comptes, son numéro et ses accès",
            'duree'  => '3 h 30',
            'points' => [
                "Ce qui sépare l'application WhatsApp Business de la plateforme : qui envoie, depuis quoi, avec quelles règles et quelle facture.",
                "Les objets à savoir nommer : portefeuille business, compte WhatsApp, compte de messagerie, application de développeur, numéro professionnel, nom affiché.",
                "Les ressources de test créées automatiquement par Meta : compte, numéro de test, envoi de modèles sans moyen de paiement.",
                "Les conditions pour enregistrer un vrai numéro : numéro détenu par l'entreprise, indicatif pays, réception d'un SMS ou d'un appel, numéro retiré de WhatsApp au préalable.",
                "Le code PIN de vérification en deux étapes, exigé à l'enregistrement : qui le connaît, où il est rangé.",
                "Les tokens d'accès : utilisateur système administrateur ou employé, permissions business_management, whatsapp_business_management et whatsapp_business_messaging, durée de validité.",
                "Exercice de contrôle : chaque participant dessine la carte des comptes de votre entreprise et indique, pour chacun, la personne qui en détient l'accès administrateur.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : envoyer, recevoir et lire ce que Meta renvoie",
            'duree'  => '3 h 30',
            'points' => [
                "Premier message par l'API depuis la collection Postman officielle ou un nœud n8n : texte, image, document.",
                "La fenêtre de service de 24 heures, ouverte et remise à zéro par chaque message ou appel du client ; ce qui reste possible quand elle est fermée.",
                "Messages interactifs : trois boutons de réponse au plus, liste de dix lignes au plus, longueurs maximales des libellés.",
                "Le webhook : vérification par requête GET et jeton de vérification, signature X-Hub-Signature-256 des requêtes POST, réponse 200 obligatoire.",
                "Les statuts d'un message (envoyé, distribué, lu, en échec), l'ordre de distribution non garanti et les notifications en double à dédoublonner.",
                "Lire le bloc « pricing » d'un statut pour savoir si un message de service entre dans le quota gratuit ou s'il est facturé.",
                "Exercice de contrôle : un message envoyé, sa réponse reçue sur un webhook de test, et le journal des statuts commenté ligne par ligne.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : modèles de messages, examen de Meta, limites d'envoi et consentement",
            'duree'  => '3 h 30',
            'points' => [
                "Les trois catégories de modèles (marketing, utilitaire, authentification) et leur effet sur le prix.",
                "Écrire un modèle : nom, code de langue, paramètres nommés ou numérotés, exemples de valeurs, en-tête multimédia, boutons.",
                "L'examen automatique, jusqu'à 24 heures selon Meta, puis les statuts de qualité : élevée, moyenne, faible, en pause, désactivé.",
                "Les plafonds d'envoi hors fenêtre, fixés au niveau du portefeuille et partagés par tous ses numéros ; la cadence maximale vers un même client.",
                "Le consentement exigé par la politique de WhatsApp, et la façon de le recueillir et de le prouver.",
                "Le bon de commande du modèle : la fiche que le service demandeur remplit avant toute soumission.",
                "Exercice de contrôle : trois modèles écrits pour vos besoins réels, soumis depuis le numéro de test, et la lecture du résultat de l'examen.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : concevoir le robot et sa reprise humaine",
            'duree'  => '3 h 30',
            'points' => [
                "Partir des conversations réelles : les vingt demandes les plus fréquentes, celles que le robot traite, celles qu'il ne touche jamais.",
                "Choisir le type de robot : boutons et listes, modèle de langage relié à vos données, ou agent fourni par Meta.",
                "Écrire les déclencheurs de reprise humaine, le message d'attente du client et le résumé transmis à la personne qui reprend.",
                "Faire taire le robot pendant que l'humain répond, puis lui rendre la main sans perdre le fil.",
                "Le journal des conversations, la relecture hebdomadaire et les réponses à corriger.",
                "Chiffrer un mois d'exploitation : messages de service au-delà du quota, modèles hors fenêtre, modèle d'IA, hébergement du webhook.",
                "Évaluation finale : chaque groupe présente le schéma de son robot, ses règles de transfert et son budget mensuel, puis le défend face aux autres.",
            ],
        ],
        [
            'titre'  => "Séance de suivi, trois à quatre semaines plus tard : ce que disent les premiers journaux",
            'duree'  => '2 h, à distance',
            'points' => [
                "Lecture des statuts d'échec, des modèles mis en pause et des conversations transférées.",
                "Contrôle de la consommation du quota de messages de service et du moyen de paiement enregistré.",
                "Correction des déclencheurs de transfert trop sensibles ou trop tardifs.",
                "Liste écrite des évolutions à confier à un développeur, distinguées de ce que l'équipe corrige seule.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => 'Deux jours, puis 2 h de suivi à distance'],
        ['l' => 'Public', 'v' => 'Équipe technique, responsable digital, référent du service client, prestataire'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saurez-vous faire à la fin des deux jours, et que la formation ne couvre-t-elle pas ?",
            'paragraphes' => [
                "Le jour où une entreprise décide de répondre à ses clients par un robot WhatsApp, elle découvre un vocabulaire qu'aucun vendeur n'utilisait : portefeuille business, compte de messagerie, modèle approuvé, webhook, limite d'envoi, quota de messages de service. Souvent, un prestataire installe le tout, puis s'en va. Trois mois plus tard, un modèle est mis en pause, un numéro cesse d'envoyer, et personne en interne ne sait où regarder. Cette formation donne à l'équipe de l'entreprise, ou au référent qu'elle désigne, la maîtrise de la plateforme de Meta et la méthode pour concevoir un robot qui sert les clients sans les enfermer.",
                "À la fin des deux jours, chaque participant sait faire seul neuf choses, vérifiées par un exercice : décrire la chaîne des comptes de son entreprise et qui en détient l'accès ; enregistrer un numéro et protéger son code PIN ; générer un token d'utilisateur système limité au nécessaire ; envoyer un message par l'API ; recevoir et vérifier un webhook ; rédiger un modèle qui passe l'examen ; diagnostiquer un échec d'envoi ; écrire les règles de transfert vers un humain ; chiffrer un mois de messages.",
                "La formation ne construit pas votre robot de production. Le développement, l'hébergement et la maintenance relèvent du service <a href=\"/services/agents-ia-chatbot-whatsapp\">agents IA et chatbot WhatsApp</a>, et le branchement sur vos logiciels, du service d'<a href=\"/services/integration-whatsapp\">intégration WhatsApp</a>. L'usage de l'application gratuite sur un téléphone est l'objet de la <a href=\"/formations/whatsapp-business\">formation WhatsApp Business pour vendre</a>. Le travail quotidien des commerciaux sur WhatsApp relié à Odoo, à Dolibarr ou à un CRM relève de la formation <a href=\"/formations/whatsapp-odoo-dolibarr-crm\">WhatsApp relié à Odoo, Dolibarr et au CRM</a>.",
                "Deux sujets voisins ont aussi leur propre formation : les agents IA et assistants internes, pour les robots qui agissent dans plusieurs outils, et le RAG, pour répondre à partir de vos documents avec citations. Ici, le modèle de langage n'est qu'une brique parmi d'autres ; l'essentiel du temps va au canal WhatsApp lui-même, à ses règles, et au moment où le robot doit se taire.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quel niveau et quel matériel ?",
            'intro' => "Le public est celui qui devra faire vivre le canal une fois la mise en service passée. Deux profils se complètent souvent dans le même groupe : la personne qui comprend les clients, et celle qui comprend les requêtes.",
            'items' => [
                ['titre' => 'Développeurs et équipes techniques', 'texte' => "Ils écrivent ou reprennent le code qui reçoit les webhooks et appelle l'API. Ils viennent chercher les règles propres à WhatsApp : signature des requêtes, statuts, plafonds, modèles, facturation, et la façon de tester sans toucher aux clients."],
                ['titre' => 'Responsables digitaux et marketing', 'texte' => "Ils décident des messages envoyés, de leur fréquence et de leur ton. Ils ont besoin de savoir ce qui fait qu'un modèle passe l'examen, ce qu'il coûte selon sa catégorie, et pourquoi une campagne mal ciblée peut dégrader la qualité du numéro."],
                ['titre' => 'Référents du service client', 'texte' => "Ils écrivent le contenu du robot et récupèrent les conversations qu'il transfère. Leur priorité : les déclencheurs de reprise, le message d'attente, le résumé transmis et la relecture des conversations où le robot s'est trompé."],
                ['titre' => 'Prestataires et agences', 'texte' => "Ils installent la plateforme pour leurs clients. La formation les aide à documenter ce qu'ils livrent et à laisser au client la propriété de ses comptes, de son numéro et de ses accès."],
                ['titre' => 'Niveau requis', 'texte' => "Avoir déjà utilisé l'application WhatsApp Business pour un usage professionnel, et savoir ce qu'est une adresse web et un fichier JSON. Les bases de n8n ou de Make aident beaucoup. Les développeurs gagnent à connaître les requêtes HTTP ; les autres profils travaillent sur des outils sans code."],
                ['titre' => 'Matériel et accès', 'texte' => "Un ordinateur par participant, un téléphone avec WhatsApp pour recevoir les messages de test, un accès administrateur au portefeuille business de l'entreprise ou la possibilité d'en créer un, et un espace où héberger un webhook de test : instance n8n, serveur de développement ou service en ligne."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels objets de la plateforme Meta faut-il savoir nommer avant d'écrire la moindre requête ?",
            'legende' => "Terminologie de la documentation française de Meta, consultée le 5 octobre 2026 (page « À propos de la plateforme WhatsApp Business », mise à jour le 4 août 2026). Les noms changent parfois d'une version de la documentation à l'autre : on apprend surtout à quoi sert chaque objet.",
            'entetes' => ['Objet', 'À quoi il sert', 'Qui doit en garder le contrôle', 'Erreur fréquente'],
            'lignes'  => [
                ['Portefeuille business', "Contient tous les éléments Meta de l'entreprise ; sa vérification relève certaines limites", "L'entreprise, avec au moins deux administrateurs salariés", 'Portefeuille ouvert au nom du prestataire ou d\'un employé parti'],
                ['Compte WhatsApp', 'Porte les numéros, le nom affiché et les accès des partenaires', "L'entreprise", 'Confondu avec le compte de messagerie'],
                ['Compte de messagerie', 'Porte les modèles, la facturation et les moyens de paiement', "L'entreprise, en lien avec la comptabilité", "Aucun moyen de paiement enregistré, ou devise choisie sans y penser : elle ne se modifie plus ensuite"],
                ['Application de développeur', "Reçoit les webhooks et porte les permissions de l'API", "L'équipe technique", "Application restée en mode développement : certains webhooks ne partent pas"],
                ['Numéro professionnel', 'Envoie et reçoit les messages ; il ne fonctionne plus dans WhatsApp Messenger une fois enregistré', "L'entreprise, au nom de laquelle la ligne est ouverte", 'Ligne au nom personnel du gérant'],
                ['Nom affiché et profil', "Ce que voit le client : nom, adresse, site, description", 'Le responsable digital', 'Nom refusé faute de lien visible avec la marque'],
                ['Code PIN en deux étapes', "Exigé à l'enregistrement, puis pour changer ou retirer le numéro", 'Deux personnes nommées, dans un coffre de mots de passe', 'PIN connu du seul prestataire'],
                ['Token d\'utilisateur système', 'Authentifie les appels du serveur ou du flux n8n', "L'équipe technique, sans le copier hors du coffre", 'Token personnel de développeur utilisé en production'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices les participants font-ils sur vos comptes et vos conversations ?",
            'items' => [
                ['titre' => 'Inventaire des accès', 'duree' => 'Avant la session', 'texte' => "Vous dressez la liste de ce qui existe déjà : portefeuille, numéros, prestataire, outils branchés, personnes qui ont un accès administrateur. Les trous de cette liste deviennent le premier sujet de la matinée, parce qu'un robot dont l'entreprise ne contrôle pas les accès est un risque, pas un actif."],
                ['titre' => 'Premier envoi depuis le numéro de test', 'duree' => '45 minutes', 'texte' => "Chaque participant envoie un message par l'API vers son propre téléphone, avec la collection Postman de Meta ou un nœud n8n, puis lit la réponse JSON : identifiant du message, erreurs éventuelles, champ à surveiller."],
                ['titre' => 'Un webhook qui répond juste', 'duree' => '1 heure', 'texte' => "Le groupe monte un point de réception de test, valide la requête de vérification, contrôle la signature, puis observe les notifications d'un message entrant et des statuts d'un message sortant. On provoque volontairement un doublon pour apprendre à l'ignorer."],
                ['titre' => 'Trois modèles soumis à Meta', 'duree' => '1 heure', 'texte' => "Un rappel de rendez-vous, une confirmation de commande et une offre promotionnelle, écrits pour votre activité. Chaque groupe choisit la catégorie, rédige les exemples de valeurs et prédit la décision de l'examen avant de la lire."],
                ['titre' => 'Le diagnostic des échecs', 'duree' => '30 minutes', 'texte' => "Un numéro au mauvais format, un texte libre envoyé hors de la fenêtre de 24 heures, un modèle appelé dans une langue qui n'existe pas, cinq messages envoyés au même client en quelques secondes. Pour chaque cas, le participant retrouve le code d'erreur et nomme la correction."],
                ['titre' => 'La carte du robot', 'duree' => '1 h 15', 'texte' => "À partir de vingt conversations réelles anonymisées, chaque groupe classe les demandes : traitées par le robot, traitées avec vérification, réservées à un humain. Il en tire l'arbre de conversation, les boutons et les listes, puis les règles de transfert."],
                ['titre' => 'Le test du client difficile', 'duree' => '45 minutes', 'texte' => "Les autres groupes jouent les clients : question hors sujet, demande de remboursement, client pressé qui réclame une personne, message vocal, tentative de faire dire au robot un faux prix. On compte les conversations correctement transférées, et celles où le robot aurait dû se taire."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Que se passe-t-il entre le message d'un client et la réponse du robot ?",
            'paragraphes' => [
                "Tout part d'un webhook. Selon la <a href=\"https://developers.facebook.com/documentation/business-messaging/whatsapp/webhooks/overview\">documentation de Meta sur les webhooks</a>, mise à jour le 26 juin 2026 et consultée le 5 octobre 2026, le contenu de chaque message qu'un client envoie à votre numéro arrive sur votre serveur sous la forme d'une requête HTTP portant un fichier JSON, de même que chaque changement de statut des messages que vous envoyez. Il n'existe pas de boîte de réception côté Meta où relire les messages après coup : ce que votre serveur n'a pas enregistré est perdu pour vos outils.",
                "Le serveur doit d'abord prouver qu'il est bien le vôtre. Quand l'adresse de rappel est déclarée, Meta envoie une requête GET contenant une chaîne aléatoire et le jeton de vérification que vous avez choisi ; le serveur renvoie la chaîne si le jeton correspond. Ensuite, chaque notification arrive par POST, signée dans l'en-tête X-Hub-Signature-256 par un calcul HMAC-SHA256 fondé sur la clé secrète de l'application. Un serveur qui ne contrôle pas cette signature acceptera n'importe quelle requête qui imite Meta. Le certificat TLS doit être valide : Meta refuse les certificats auto-signés.",
                "Trois comportements surprennent les équipes en production. Une notification qui ne reçoit pas de réponse 200 est renvoyée pendant sept jours au plus, à une fréquence décroissante, ce qui produit des doublons. L'ordre de distribution de plusieurs messages successifs n'est pas garanti : pour l'imposer, Meta conseille d'attendre le statut « distribué » du précédent. Enfin, une charge peut peser jusqu'à 3 Mo et regrouper plusieurs mises à jour. La formation apprend donc à répondre 200 tout de suite, à traiter ensuite, et à dédoublonner sur l'identifiant du message.",
                "Côté n8n, la <a href=\"https://docs.n8n.io/integrations/builtin/trigger-nodes/n8n-nodes-base.whatsapptrigger/\">documentation du déclencheur WhatsApp</a> signale un piège classique : WhatsApp n'accepte qu'un seul webhook par application, si bien que passer de l'adresse de test à l'adresse de production écrase la précédente. Tester un flux déjà publié revient alors à couper les clients. On apprend à tester sur une application distincte, branchée sur le numéro de test, plutôt que sur celle qui sert en production.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles règles des modèles de messages provoquent le plus de refus et de pannes ?",
            'legende' => "Règles tirées de la page « Notions de base sur les modèles » de Meta, mise à jour le 21 mai 2026 et consultée le 5 octobre 2026. Les modèles sont le seul type de message qu'une entreprise peut envoyer hors d'une fenêtre de service ouverte.",
            'entetes' => ['Règle', 'Ce que dit Meta', 'Ce que cela change pour vous', "Ce qu'on en fait en formation"],
            'lignes'  => [
                ['Catégorie', 'Marketing, utilitaire ou authentification ; la catégorie influence le prix', 'Un rappel de facture qui finit par une promotion relève du marketing', 'Une grille de décision par type de message'],
                ['Langue', "Un code de langue par modèle ; Meta ne traduit ni les textes ni les variables", 'Il faut un modèle par langue, et chacun compte dans la limite', 'Liste des langues réellement lues par vos clients'],
                ['Paramètres', "Nommés en minuscules et tirets bas, ou numérotés à partir de 1, avec un exemple de valeur pour chacun", "Un exemple vague ou absent fait échouer l'examen", 'Des exemples réalistes tirés de vos données'],
                ['Nom', '512 caractères au plus, lettres minuscules, chiffres et tirets bas', "Les noms ne sont pas uniques d'une langue à l'autre", 'Une convention de nommage commune à toute l\'équipe'],
                ['Création', "100 modèles au plus par heure et par compte de messagerie", 'Une création en masse par script se heurte au plafond', 'Un registre des modèles, tenu à la main'],
                ['Examen', "Automatique, jusqu'à 24 heures ; un refus ou un changement de statut bloque l'envoi", 'Une campagne ne se prépare jamais la veille', 'Soumission au moins deux jours avant le besoin'],
                ['Qualité', "Statut actif de qualité élevée, moyenne ou faible, puis en pause ou désactivé après des avis négatifs ou un faible taux de lecture", 'Un modèle qui agace les clients finit par ne plus partir', 'Lecture hebdomadaire des statuts de qualité'],
                ['Nombre', "250 modèles par compte de messagerie si le portefeuille n'est pas vérifié ; jusqu'à 6 000 s'il l'est, avec un nom affiché approuvé", "La vérification de l'entreprise a des effets concrets", 'Décision sur la vérification du portefeuille'],
                ['Archivage', "Archivage automatique après 12 mois sans usage, suppression 28 jours plus tard sauf désarchivage", 'Un rappel annuel peut disparaître entre deux saisons', 'Calendrier des modèles saisonniers'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels plafonds de la plateforme une équipe doit-elle connaître par cœur ?",
            'items' => [
                ['valeur' => '250', 'libelle' => "Clients uniques joignables hors fenêtre de service en 24 heures glissantes par un portefeuille nouvellement créé, puis 2 000 après vérification de l'entreprise ou 2 000 envois de qualité en 30 jours (page mise à jour le 21 mai 2026)", 'source' => 'Meta, limites de messages', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/messaging-limits'],
                ['valeur' => '80 par seconde', 'libelle' => "Débit d'envoi par défaut d'un numéro professionnel, relevable sur demande (page mise à jour le 4 août 2026)", 'source' => 'Meta, à propos de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/about-the-platform'],
                ['valeur' => '1 toutes les 6 secondes', 'libelle' => "Cadence normale vers un même client, soit 10 messages par minute ; au-delà, l'erreur 131056 bloque l'envoi", 'source' => 'Meta, à propos de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/about-the-platform'],
                ['valeur' => '2 numéros', 'libelle' => "Numéros enregistrables par un nouveau portefeuille, portés à 20 après vérification ou après l'accès au palier de 2 000 (page mise à jour le 21 mai 2026)", 'source' => 'Meta, numéros de téléphone professionnels', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/business-phone-numbers/phone-numbers'],
                ['valeur' => '1 000', 'libelle' => "Messages de service gratuits par numéro et par mois depuis le 1er octobre 2026, non reportables, facturés au-delà", 'source' => 'Meta, tarifs de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing'],
                ['valeur' => '7 jours', 'libelle' => "Durée maximale pendant laquelle Meta renvoie une notification de webhook restée sans réponse 200 (page mise à jour le 26 juin 2026)", 'source' => 'Meta, webhooks WhatsApp', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/webhooks/overview'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment concevoir un robot qui sait quand se taire ?",
            'paragraphes' => [
                "La <a href=\"https://whatsappbusiness.com/fr/policy/\">politique de la messagerie WhatsApp Business</a>, dans sa version du 23 septembre 2026, autorise l'automatisation des réponses dans la fenêtre de 24 heures, à une condition : offrir un chemin rapide, clair et direct vers une aide humaine. Elle cite le transfert vers un agent dans la discussion, un numéro de téléphone, une adresse électronique, une assistance en ligne, une visite en agence ou un formulaire. Un robot sans issue n'est donc pas seulement agaçant : il sort du cadre que Meta fixe à la plateforme.",
                "La formation part de cette contrainte pour construire la méthode. On écrit d'abord ce que le robot ne fera jamais : annoncer un prix qui n'est pas dans la base, accepter un remboursement, interpréter un symptôme, promettre un délai. On écrit ensuite les signaux qui le font passer la main : le client le demande, il répète sa question, il se plaint, il envoie un document à examiner, ou la conversation porte sur une somme au-dessus d'un seuil. Chaque signal reçoit un responsable, un horaire et un message d'attente honnête.",
                "La reprise elle-même se prépare. La personne qui reprend doit lire en quelques secondes ce que le client a demandé, ce que le robot a répondu et ce qui reste à décider. Pendant qu'elle répond, le robot se tait ; quand elle a fini, elle lui rend la main par un geste explicite. En dehors des heures de présence, le message d'attente dit quand une personne répondra, et la fenêtre de 24 heures impose de répondre à temps, sous peine de devoir repasser par un modèle payant.",
                "Le droit va dans le même sens. La CNIL, dans ses <a href=\"https://www.cnil.fr/fr/chatbots-les-conseils-de-la-cnil-pour-respecter-les-droits-des-personnes\">conseils sur les chatbots</a> du 19 février 2021, rappelle qu'une conversation avec un robot sans intervention humaine ne peut pas, à elle seule, aboutir à une décision importante pour la personne, et recommande d'avertir les utilisateurs de ne pas confier de données sensibles. L'histoire du <a href=\"/histoires/air-canada-chatbot\">chatbot d'Air Canada</a> montre ce que coûte une réponse automatique fausse : l'entreprise répond de ce que dit son robot.",
                "Un dernier point de cadre concerne les modèles de langage. Selon la <a href=\"https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing/ai-providers\">page de Meta consacrée aux fournisseurs d'IA</a>, mise à jour le 1er septembre 2026, les conditions de WhatsApp n'autorisent plus depuis le 15 janvier 2026 les assistants d'IA à usage général sur la plateforme, sauf là où Meta est légalement tenue de les accepter. Un robot d'entreprise qui répond sur sa propre activité reste dans le cadre ; un assistant qui répond à tout, non. On apprend à borner le périmètre dès la conception.",
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Robot à boutons, robot à modèle de langage ou agent de Meta : lequel concevoir ?",
            'options'  => ['Robot à boutons et listes', 'Robot relié à un modèle de langage', 'Meta Business Agent'],
            'criteres' => [
                ['critere' => 'Ce que voit le client', 'valeurs' => ['Trois boutons au plus ou une liste de dix choix au plus, puis des réponses fixes', 'Une conversation libre, en texte ou en note vocale transcrite', "Une conversation libre, gérée par l'agent configuré dans les outils de Meta"]],
                ['critere' => 'Maîtrise des réponses', 'valeurs' => ['Totale : chaque réponse est écrite à l\'avance', 'Bonne si le robot ne répond qu\'à partir de vos données et de règles strictes', 'Dépend des sources de connaissances fournies et des réglages de Meta']],
                ['critere' => 'Coût publié par Meta', 'valeurs' => ['Messages de service : 1 000 gratuits par mois et par numéro, facturés au-delà', 'Mêmes messages de service, plus la facture du fournisseur du modèle', "2 dollars par million de jetons, soit environ 4 à 5 cents par message selon l'estimation de Meta"]],
                ['critere' => 'Effort de construction', 'valeurs' => ['Faible : un flux n8n ou Make suffit souvent', 'Moyen à élevé : données, consignes, tests, journal', 'Faible pour démarrer, plus élevé pour connecter vos systèmes']],
                ['critere' => 'Reprise humaine', 'valeurs' => ['Un bouton « parler à une personne » toujours visible', 'Déclencheurs écrits, résumé transmis, robot muet pendant la reprise', 'Transferts prévus par Meta entre l\'agent et les agents humains']],
            ],
            'verdict'  => "La formation fait commencer presque toutes les équipes par le robot à boutons : il oblige à écrire les parcours, il coûte peu et il ne se trompe pas. Le modèle de langage vient ensuite, sur les demandes que les boutons ne couvrent pas, avec les mêmes règles de transfert. L'agent de Meta se compare chiffres en main, sur votre volume réel.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils la formation utilise-t-elle, et que coûtent-ils ?",
            'legende' => "Prix et conditions publiés par les éditeurs, relevés le 5 octobre 2026. Ces sommes se paient à Meta ou à l'éditeur, jamais au formateur. Meta ne facture qu'un message distribué, et s'engage à ne modifier ses tarifs que le premier jour d'un trimestre.",
            'entetes' => ['Outil', 'Rôle dans la formation', 'Coût publié', 'Remarque'],
            'lignes'  => [
                ['Plateforme WhatsApp Business, API Cloud', 'Envoi, réception, modèles, statuts', "Facturation par message depuis le 1er juillet 2025 ; depuis le 1er octobre 2026, quota mensuel de 1 000 messages de service gratuits par numéro, non reportable, facturé au-delà", "Un compte sans moyen de paiement cesse d'envoyer ses messages de service une fois le quota épuisé"],
                ['Ressources de test de Meta', 'Premiers envois sans toucher aux clients', 'Gratuites ; envoi de modèles sans moyen de paiement', 'Créées automatiquement au démarrage avec l\'API Cloud'],
                ['Gestionnaire WhatsApp', 'Lire les limites, les numéros, les modèles et leur qualité', 'Gratuit', "Application web de Meta, utilisée en parallèle de l'API"],
                ['Collection Postman de Meta', 'Envoyer ses premières requêtes sans écrire de code', 'Gratuite', 'Collection officielle des requêtes courantes'],
                ['n8n, nœuds WhatsApp Business Cloud et déclencheur WhatsApp', 'Construire le flux du robot sans programmer', "Offre Cloud Starter à 20 € par mois en paiement annuel pour 2 500 exécutions, Pro à 50 € pour 10 000 ; paiement mensuel environ 17 % plus cher", "Le nœud propose l'envoi, l'envoi avec attente d'une réponse, l'envoi de modèle et la gestion des médias"],
                ['Meta Business Agent', "Point de comparaison avec un robot construit par l'équipe", '2 dollars par million de jetons ; Meta estime un message à 20 000 à 25 000 jetons', 'Facturé même dans les fenêtres où les autres messages sont gratuits'],
                ['Organisations à but non lucratif et gouvernementales éligibles', 'Cas des associations et des administrations', 'Gratuites au-delà du quota de messages de service jusqu\'au 31 décembre 2027', 'Éligibilité à vérifier auprès de Meta avant de bâtir le budget'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle menée pour que l'équipe reste autonome ensuite ?",
            'intro' => "La règle est simple : rien n'est montré qui ne puisse être refait aussitôt par chacun, sur le numéro de test puis sur vos comptes. Aucun message d'exercice ne part vers un client.",
            'items' => [
                ['titre' => 'Vos comptes, ou leur copie de test', 'texte' => "Les exercices se font dans votre portefeuille, avec une application et un numéro de test dédiés, pour ne jamais toucher le webhook de production. Si vos comptes ne sont pas prêts, on commence par les ressources de test de Meta et l'on termine sur les vôtres à la séance de suivi."],
                ['titre' => 'Des groupes de trois à six personnes', 'texte' => "Une demi-journée sur les webhooks ne se suit pas au fond d'une salle de vingt. Les groupes mélangent quand c'est possible un profil technique et un profil métier, qui travaillent en binôme sur le même écran."],
                ['titre' => 'Vos conversations, anonymisées', 'texte' => "Les vingt conversations qui servent à dessiner le robot sont exportées puis anonymisées avant la session : prénoms, numéros et montants sont remplacés. Aucun numéro de client ne quitte votre environnement."],
                ['titre' => 'Des pannes préparées', 'texte' => "Fenêtre fermée, modèle en pause, signature invalide, doublon, cadence dépassée : chaque panne est provoquée en séance, pour que la première rencontre avec elle ne se fasse pas un samedi soir devant un client."],
                ['titre' => 'Des supports qui restent', 'texte' => "La carte des comptes et des accès, la fiche de demande de modèle, la grille de catégorie, la fiche des codes d'erreur rencontrés, le schéma du robot et ses règles de transfert, et le tableur de budget mensuel. Tout est modifiable."],
                ['titre' => 'Une évaluation sur un cas réel', 'texte' => "Chaque groupe défend son robot face aux autres, puis chaque participant résout seul un incident tiré au sort. Le résultat est remis à la direction avec les feuilles de présence."],
                ['titre' => 'Un suivi après la session', 'texte' => "Un canal direct pour les questions pendant quelques semaines, puis la séance de suivi, qui part des journaux réels : échecs, transferts, modèles en pause et consommation du quota."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon votre activité, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => 'École privée, à Lomé', 'probleme' => "L'économe veut envoyer les rappels de frais de scolarité et répondre aux questions des parents sans saturer le secrétariat, mais ignore ce que coûtent les messages et comment recueillir l'accord des parents.", 'solution' => "Formation de l'économe et du responsable informatique : modèle utilitaire de rappel, accord recueilli dans la fiche d'inscription, robot à boutons pour les horaires et les pièces à fournir, transfert vers le secrétariat pour toute question de paiement, budget mensuel calculé sur le nombre d'élèves."],
                ['secteur' => 'Clinique ou cabinet médical, à Abidjan', 'probleme' => "Les demandes de rendez-vous arrivent le soir et le week-end, et l'équipe craint qu'un robot réponde sur des questions de santé.", 'solution' => "Robot limité aux créneaux, à l'adresse et aux pièces à apporter, avertissement de ne pas envoyer de données de santé, transfert immédiat de toute question médicale vers l'accueil avec un horaire de rappel, modèle de rappel la veille sans aucun motif de consultation."],
                ['secteur' => 'Vente en ligne avec livraison, à Dakar', 'probleme' => "Un prestataire a installé un robot qui envoie des promotions à toute la base ; un modèle est passé en qualité faible et l'équipe ne sait pas pourquoi.", 'solution' => "Reprise en main des accès du portefeuille, lecture des statuts de qualité, tri de la base selon le consentement réel, séparation entre messages utilitaires de suivi de commande et campagnes marketing, et fréquence d'envoi écrite."],
                ['secteur' => 'Transport et logistique, à Douala', 'probleme' => "Les clients demandent où en est leur colis par WhatsApp, et les agents répondent à la main en consultant le logiciel de suivi.", 'solution' => "Liste interactive pour choisir l'envoi concerné, réponse automatique tirée du logiciel par un flux n8n, transfert vers un agent dès qu'un colis est signalé abîmé ou perdu, et calcul du nombre de messages de service mensuels attendu au-delà du quota gratuit."],
                ['secteur' => 'Association ou ONG, à Cotonou', 'probleme' => "L'organisation répond à des centaines de bénéficiaires par mois et redoute la facturation des messages de service.", 'solution' => "Lecture des conditions publiées par Meta pour les organisations à but non lucratif éligibles, gratuites au-delà du quota jusqu'au 31 décembre 2027, démarche de vérification, et budget de repli prévu pour 2028."],
                ['secteur' => 'Service client d\'une PME, en France ou en Belgique', 'probleme' => "L'entreprise veut ajouter un modèle de langage à son robot, sans savoir si les règles de WhatsApp et le RGPD le permettent.", 'solution' => "Périmètre limité à l'activité de l'entreprise, information claire du client qu'il échange avec un robot, données sensibles refusées et purgées, durée de conservation fixée, et sous-traitants du modèle d'IA listés dans le registre des traitements."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans vos locaux, en inter-entreprises, à distance ou en formule hybride : quel format retenir ?",
            'legende' => "Le format se décide au premier échange, selon l'état de vos comptes Meta, la présence ou non d'un développeur et la dispersion de l'équipe. Dans tous les cas, les exercices se font sur un numéro de test avant de toucher au numéro réel.",
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', "Une entreprise qui lance son robot, ou qui reprend en main celui d'un prestataire", 'Deux jours, puis la séance de suivi', 'Dans vos locaux, sur votre portefeuille, avec une application de test préparée la semaine précédente'],
                ['Inter-entreprises', 'Responsables digitaux ou développeurs de plusieurs structures, réseau de franchisés, agences', 'Deux jours', "Portefeuilles de test individuels, cas fictifs communs, puis une heure sur les comptes de chacun"],
                ['À distance', 'Équipes réparties, entreprises en Europe ou au Canada', 'Quatre séances de trois heures', "Visioconférence, partage d'écran, webhook de test hébergé en ligne, exercices envoyés la veille"],
                ['Hybride', 'Équipes qui veulent un démarrage commun puis un travail par profil', 'Un jour en salle, puis deux séances à distance', 'Socle commun sur place, modèles et conception du robot à distance, suivi sur les journaux réels'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et comment se règle-t-elle ?",
            'intro'      => "Aucun tarif n'est publié : le prix est établi sur devis, après un premier échange gratuit sur vos comptes Meta, vos outils et les profils à former. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. La facture précise l'intitulé, les dates, la durée et le nombre de participants. Les frais facturés par Meta et par les éditeurs restent à votre charge, à part.",
            'items'      => [
                ['offre' => 'Plateforme et API', 'prix' => 'Sur devis', 'inclus' => ['Première journée : comptes, numéro, tokens, envoi, webhooks', 'Carte des comptes et des accès', 'Fiche des codes d\'erreur']],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Les deux journées', 'Modèles soumis à Meta et conception du robot', 'Budget mensuel chiffré', 'Évaluation individuelle']],
                ['offre' => 'Conception du robot seule', 'prix' => 'Sur devis', 'inclus' => ['Pour une équipe dont la plateforme est déjà en service', 'Carte du robot et règles de transfert', 'Test du client difficile']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Séance de suivi à distance', 'Lecture des journaux réels', 'Liste des évolutions à confier à un développeur']],
            ],
            'variations' => [
                "Le nombre de participants et la répartition entre profils techniques et métiers.",
                "L'état de départ : comptes à créer, prestataire à faire intervenir, portefeuille à reprendre.",
                "La préparation : application de test, conversations à anonymiser, modèles de démonstration.",
                "Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou.",
                "Le mode : présentiel, à distance ou hybride.",
                "La langue des séances et des supports, en français ou en anglais.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel fonds de formation interroger selon votre pays, et que lui demander ?",
            'legende' => "Pages officielles consultées le 5 octobre 2026. Aucun financement n'est promis : la décision appartient au fonds. Richard SALANON ne détient ni la certification Qualiopi ni l'agrément d'un fonds, ce qui ferme certaines voies. Budgétez la session comme si aucune aide ne venait, et transmettez programme et devis au fonds avant de signer.",
            'entetes' => ['Pays', 'Organisme', 'Ce que dit sa page officielle', 'Question à lui poser'],
            'lignes'  => [
                ["Côte d'Ivoire", '<a href="https://fdfp.ci/plan-de-formation/">FDFP</a>', "Une entreprise qui justifie le paiement régulier des deux taxes peut déposer un plan ; le règlement suit le contrôle du fonds et l'accord de sa Commission permanente", "Une action menée par un intervenant établi hors de Côte d'Ivoire est-elle recevable dans notre plan ?"],
                ['Sénégal', '<a href="https://www.3fpt.sn/">3FPT</a>', "Un guichet finance le personnel des entreprises et les membres des organisations professionnelles", "Quelles pièces et quel délai pour une formation technique de deux jours ?"],
                ['Bénin', 'FODEFCA', "Statuts approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>", "Quelles conditions s'appliquent à une formation commandée par l'entreprise elle-même ?"],
                ['France', 'OPCO', "Selon <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a>, l'accès aux fonds publics ou mutualisés exige un prestataire certifié Qualiopi depuis le 1er janvier 2022", "Sans prestataire certifié, la session se finance sur le budget propre de l'entreprise"],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quel oubli peut faire perdre à l'entreprise le contrôle de son propre numéro ?",
            'texte' => "Laisser le prestataire tout détenir : le portefeuille ouvert sous son nom, le code PIN de vérification en deux étapes noté sur son seul téléphone, le token d'accès généré depuis son compte personnel, le moyen de paiement à sa carte. Le jour où la relation s'arrête, l'entreprise ne peut ni modifier un modèle, ni changer de prestataire, ni retirer le numéro de la plateforme sans repartir de zéro. La première demi-journée de la formation sert à remettre ces clés entre les mains de l'entreprise, avec deux administrateurs salariés et un coffre de mots de passe.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les semaines qui suivent la mise en service, et comment les éviter ?",
            'intro' => "Les incidents d'un robot WhatsApp se ressemblent d'une entreprise à l'autre. Voici les plus fréquents, et la parade travaillée pendant la formation.",
            'items' => [
                ['titre' => 'Le quota épuisé sans carte enregistrée', 'texte' => "Le robot répondait gratuitement, puis s'arrête au milieu du mois. Depuis le 1er octobre 2026, un compte sans moyen de paiement cesse d'envoyer ses messages de service une fois les 1 000 du mois consommés. Le moyen de paiement se vérifie le premier jour, et la consommation se lit chaque semaine."],
                ['titre' => 'Le webhook hébergé sur un poste du bureau', 'texte' => "Une coupure de courant ou de connexion, et les messages des clients ne sont plus reçus pendant que ceux-ci croient avoir écrit. Le point de réception tourne sur un serveur en ligne, surveillé, avec une alerte quand il ne répond plus."],
                ['titre' => 'Le robot qui parle pendant que l\'humain répond', 'texte' => "Le client reçoit deux réponses contradictoires, une de la personne et une du robot. L'état « en reprise humaine » se stocke par conversation, et le robot le lit avant chaque réponse."],
                ['titre' => 'La campagne envoyée à toute la base', 'texte' => "Les blocages et les signalements font chuter la qualité du modèle, puis l'envoi s'arrête. On n'écrit qu'aux clients dont l'accord est noté, avec un moyen clair de ne plus rien recevoir."],
                ['titre' => 'La rafale vers un même client', 'texte' => "Un robot qui découpe sa réponse en cinq messages successifs se heurte à la cadence d'un message toutes les six secondes vers un même destinataire. On regroupe le texte et l'on utilise les boutons plutôt que les envois en série."],
                ['titre' => 'Le modèle soumis la veille', 'texte' => "L'examen peut durer jusqu'à 24 heures, et un refus oblige à réécrire. Les modèles d'une campagne ou d'une rentrée scolaire se soumettent au moins une semaine avant."],
                ['titre' => 'Personne ne relit les conversations', 'texte' => "Les questions imprévues s'accumulent et le robot répète la même réponse inutile. Une heure par semaine, le référent relit les conversations transférées et celles où le client a abandonné, puis corrige la base ou les parcours."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, numéros, langues, données : que change le contexte local ?",
            'paragraphes' => [
                "Le robot vit sur un serveur, pas sur un téléphone. Meta exige un point de réception public, en HTTPS, avec un certificat valide ; un ordinateur de bureau derrière une connexion domestique ne convient pas. En Afrique de l'Ouest, où les coupures restent courantes, la formation recommande un hébergement en ligne et une surveillance qui alerte le référent quand les notifications cessent d'arriver. Les sept jours pendant lesquels Meta renvoie une notification non reçue laissent une marge, à condition que le serveur sache traiter les doublons au retour.",
                "Au Bénin, l'<a href=\"https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/\">ARCEP</a> a ajouté le préfixe 01 devant les anciens numéros le 30 novembre 2024, pour tout usage, y compris l'envoi d'un message. Une base de clients antérieure à cette date contient des numéros à 8 chiffres qui feront échouer les envois de modèles. L'API attend le format international complet, indicatif compris, sans zéro ni espace : la normalisation des numéros fait partie des exercices du premier jour.",
                "Meta ne traduit ni les modèles ni leurs variables. Une entreprise qui écrit à ses clients en français et en anglais soumet deux modèles, chacun avec son code de langue. Pour le robot lui-même, une formule d'accueil en fon, en wolof ou en dioula peut s'écrire dans les boutons, mais un modèle de langage ne comprend pas toutes les langues locales avec la même fiabilité : le transfert vers une personne doit alors être déclenché plus tôt. Les notes vocales, fréquentes, demandent une transcription avant tout traitement.",
                "Au Bénin, la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 portant code du numérique</a> soumet la prospection directe par messages automatisés au consentement préalable de la personne, et oblige à tenir compte de ses demandes d'opposition. En Europe, le RGPD s'applique aux conversations stockées par le robot. Le règlement européen sur l'IA impose depuis le 2 février 2025 une obligation de maîtrise de l'IA, contrôlée et sanctionnée à partir du 3 août 2026 ; l'omnibus numérique entré en vigueur mi-juillet 2026 la maintient pour les utilisateurs professionnels, sans plus exiger de niveau « suffisant ». La formation <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a> approfondit ces questions.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi se former au chatbot WhatsApp avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "La plateforme de Meta n'est pas pour lui un sujet de cours : il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il construit des robots et des flux d'automatisation reliés aux logiciels de ses clients. Il a donc rencontré les pannes que la formation fait provoquer en séance : modèle refusé, webhook muet, numéro bloqué faute d'accès, transfert vers un humain qui n'arrive jamais. C'est cette expérience qu'il transmet, avec la documentation officielle à l'écran.",
                "Son parcours tient en quelques faits : " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), la co-fondation d'<a href=\"https://audyxa.com\">Audyxa</a>, plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées selon ses propres déclarations, au numérique, à l'IA, à l'automatisation et aux ERP, et des missions dans " . count((array) fait('pays_travailles')) . " pays, du Bénin au Gabon et de la France au Canada. Le détail figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur celle des <a href=\"/zones/\">zones d'intervention</a>.",
                "Il ne représente pas Meta et n'appartient pas à son réseau de fournisseurs de solutions. Ce qu'il propose se vérifie : une réponse sous 24 heures, un programme écrit avant la session, des exercices sur vos comptes, une évaluation sur un cas réel, des supports qui restent chez vous, et un avis franc quand un robot n'est pas la bonne réponse à votre besoin. Les autres formations du domaine sont réunies sur la page <a href=\"/formations/domaine/automatisation\">formations à l'automatisation</a>, et l'ensemble du catalogue sur la page <a href=\"/formations/\">formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre équipe ?",
            'texte' => "Un robot WhatsApp tient à trois choses : des comptes qui appartiennent à l'entreprise, un serveur qui reçoit et vérifie chaque notification, et des règles écrites pour passer la main à une personne. Les modèles, les plafonds et les coûts de Meta s'apprennent en deux jours ; la discipline de relecture, elle, se décide dès la première semaine.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre équipe est-elle prête à faire vivre un robot WhatsApp ?",
            'texte'  => "Indiquez l'état de vos comptes Meta, les outils déjà en place, les profils à former, la ville et la période visée : vous recevez une réponse sous 24 heures, puis un programme et un devis détaillés. Si le robot doit être construit pour vous, le service <a href=\"/services/agents-ia-chatbot-whatsapp\">agents IA et chatbot WhatsApp</a> s'en charge, et la formation <a href=\"/formations/n8n\">n8n</a> prépare le référent aux flux qui l'alimentent. Le <a href=\"/comparatifs/n8n-vs-make-vs-zapier\">comparatif n8n, Make et Zapier</a> aide à choisir l'outil.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation chatbot WhatsApp'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il savoir programmer pour suivre la formation ?", 'r' => "Non pour les profils métiers : les envois se font avec la collection Postman de Meta ou avec n8n, sans écrire de code. Les développeurs du groupe vont plus loin sur la vérification de la signature des webhooks et le traitement des doublons. Avoir déjà construit un flux simple dans n8n ou dans Make aide beaucoup."],
        ['q' => "Peut-on suivre la formation avant d'avoir un compte Meta ?", 'r' => "Oui. Au démarrage avec l'API Cloud, Meta crée automatiquement un compte de test et un numéro de test, qui permettent d'envoyer des modèles sans moyen de paiement. La formation commence sur ces ressources ; la bascule vers vos vrais comptes se fait à la fin du premier jour ou pendant la séance de suivi."],
        ['q' => "Peut-on garder notre numéro WhatsApp actuel ?", 'r' => "Un numéro déjà utilisé sur WhatsApp doit en être retiré avant d'être enregistré sur la plateforme, sauf à passer par la coexistence prévue par Meta, qui partage le numéro entre l'application et l'API avec certaines fonctions désactivées. Le choix dépend de votre volume et de vos habitudes ; il se tranche au premier jour."],
        ['q' => "Combien coûtent les messages envoyés par le robot ?", 'r' => "Meta facture par message depuis le 1er juillet 2025. Depuis le 1er octobre 2026, chaque numéro dispose de 1 000 messages de service gratuits par mois, non reportables, facturés au-delà ; les modèles hors fenêtre sont facturés selon leur catégorie et le pays du destinataire. Les organisations à but non lucratif et gouvernementales éligibles restent gratuites au-delà du quota jusqu'au 31 décembre 2027."],
        ['q' => "Pourquoi notre robot a-t-il cessé de répondre en milieu de mois ?", 'r' => "La cause la plus fréquente depuis octobre 2026 : un compte de messagerie sans moyen de paiement cesse d'envoyer ses messages de service une fois le quota gratuit épuisé. Viennent ensuite un webhook qui ne répond plus, un token expiré ou révoqué, et un numéro dont le statut n'est plus « connecté »."],
        ['q' => "Combien de temps Meta met-il à valider un modèle de message ?", 'r' => "L'examen est automatique et peut prendre jusqu'à 24 heures selon la documentation de Meta. Un modèle approuvé peut ensuite être mis en pause ou désactivé si les clients le signalent ou le lisent peu. La formation apprend à rédiger des exemples de valeurs réalistes et à soumettre les modèles bien avant le besoin."],
        ['q' => "Combien de clients peut-on contacter par jour ?", 'r' => "Hors fenêtre de service, un portefeuille nouvellement créé peut écrire à 250 destinataires uniques en 24 heures glissantes. La limite passe à 2 000 après vérification de l'entreprise ou 2 000 envois de qualité en 30 jours, puis monte automatiquement par paliers. Elle est partagée entre tous les numéros du portefeuille."],
        ['q' => "Le robot peut-il utiliser ChatGPT, Claude ou Gemini ?", 'r' => "Oui, pour répondre sur votre propre activité, à partir de vos données et avec des règles de transfert. Depuis le 15 janvier 2026, les conditions de WhatsApp n'autorisent plus les assistants d'IA à usage général sur la plateforme, sauf obligation légale. Le <a href=\"/comparatifs/chatgpt-vs-claude-vs-gemini\">comparatif ChatGPT, Claude et Gemini</a> aide à choisir le modèle."],
        ['q' => "Quand le robot doit-il passer la main à une personne ?", 'r' => "Quand le client le demande, quand il répète sa question, quand il se plaint, quand la demande engage de l'argent ou touche à la santé, et quand le robot n'a pas la réponse dans sa base. La politique de WhatsApp exige qu'un chemin vers une aide humaine reste toujours disponible."],
        ['q' => "Que repart-on avec, concrètement ?", 'r' => "La carte de vos comptes et de leurs administrateurs, un webhook de test fonctionnel, trois modèles soumis à Meta, la fiche des codes d'erreur rencontrés, le schéma de votre robot avec ses règles de transfert, le tableur de budget mensuel et le résultat de l'évaluation de chaque participant."],
        ['q' => "La formation peut-elle être financée par un fonds ?", 'r' => "Cela dépend du pays, du fonds et de votre situation : FDFP en Côte d'Ivoire, 3FPT au Sénégal, FODEFCA au Bénin, OPCO en France. Richard SALANON n'est pas certifié Qualiopi et n'a pas d'agrément de fonds. Soumettez le programme et le devis au fonds avant de signer, et prévoyez le budget sans prise en charge."],
    ],

    'sources' => [
        ['titre' => 'Meta, à propos de la plateforme WhatsApp Business (mise à jour du 4 août 2026 : comptes, ressources de test, débit, cadence par destinataire)', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/about-the-platform', 'date' => '2026-10-05'],
        ['titre' => 'Meta, limites de messages (mise à jour du 21 mai 2026)', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/messaging-limits', 'date' => '2026-10-05'],
        ['titre' => 'Meta, notions de base sur les modèles de messages (mise à jour du 21 mai 2026)', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/templates/overview', 'date' => '2026-10-05'],
        ['titre' => 'Meta, webhooks WhatsApp (mise à jour du 26 juin 2026)', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/webhooks/overview', 'date' => '2026-10-05'],
        ['titre' => 'Meta, créer un point de terminaison webhook (mise à jour du 17 juin 2026)', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/webhooks/create-webhook-endpoint', 'date' => '2026-10-05'],
        ['titre' => 'Meta, numéros de téléphone professionnels (mise à jour du 21 mai 2026)', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/business-phone-numbers/phone-numbers', 'date' => '2026-10-05'],
        ['titre' => 'Meta, guide sur les tokens d\'accès (mise à jour du 19 septembre 2026)', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/access-tokens', 'date' => '2026-10-05'],
        ['titre' => 'Meta, messages avec boutons de réponse interactifs', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/messages/interactive-reply-buttons-messages', 'date' => '2026-10-05'],
        ['titre' => 'Meta, messages avec liste interactive', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/messages/interactive-list-messages', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarifs de la plateforme WhatsApp Business (version française lue dans un navigateur, mise à jour du 30 septembre 2026 : quota de 1 000 messages de service depuis le 1er octobre 2026)', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Meta, politique tarifaire pour les fournisseurs d\'IA (mise à jour du 1er septembre 2026)', 'url' => 'https://developers.facebook.com/documentation/business-messaging/whatsapp/pricing/ai-providers', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, politique de la messagerie WhatsApp Business (mise à jour du 23 septembre 2026)', 'url' => 'https://whatsappbusiness.com/fr/policy/', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, nœud WhatsApp Business Cloud', 'url' => 'https://docs.n8n.io/integrations/builtin/app-nodes/n8n-nodes-base.whatsapp/', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, déclencheur WhatsApp (un seul webhook par application)', 'url' => 'https://docs.n8n.io/integrations/builtin/trigger-nodes/n8n-nodes-base.whatsapptrigger/', 'date' => '2026-10-05'],
        ['titre' => 'n8n, offres et tarifs', 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, chatbots : les conseils de la CNIL pour respecter les droits des personnes (19 février 2021)', 'url' => 'https://www.cnil.fr/fr/chatbots-les-conseils-de-la-cnil-pour-respecter-les-droits-des-personnes', 'date' => '2026-10-05'],
        ['titre' => 'ARCEP Bénin, passage des numéros de 8 à 10 chiffres au 30 novembre 2024', 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, questions et réponses sur la maîtrise de l\'IA (article 4 du règlement sur l\'IA, mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['whatsapp-business', 'whatsapp-odoo-dolibarr-crm', 'n8n', 'integrations-api-no-code', 'agents-ia-assistants', 'rag-chatbot-documents'],
        'services'    => ['agents-ia-chatbot-whatsapp', 'integration-whatsapp'],
        'comparatifs' => ['n8n-vs-make-vs-zapier', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
