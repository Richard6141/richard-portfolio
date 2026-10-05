<?php
// ============================================================
// data/formations/dolibarr-ia.php · Fiche formation « Dolibarr et IA »
// (vague 1B, lot B, domaine ia-systemes-existants). Angle propre : l'IA
// reliée à Dolibarr 24 par trois voies, le module IA livré avec le logiciel
// (fonctions relevées dans le code de la 24.0.1, assistant et serveur MCP
// expérimentaux), les modules du DoliStore (lecture critique des fiches,
// aucun module recommandé) et l'API REST appelée depuis n8n ou un petit
// service pour classer, résumer ou rédiger, avec contrôle humain et coût
// des appels. Sœurs non traitées : dolibarr-utilisateurs (cycle de gestion),
// odoo-ia, integrer-ia-logiciels-existants (code générique, coûts au jeton
// comparés), whatsapp-odoo-dolibarr-crm, ia-processus-metier. Le pilier
// /services/integration-dolibarr n'est pas repris.
// Sources consultées le 05/10/2026 : wiki Dolibarr (module IA, API REST,
// Webhook), dépôt GitHub de Dolibarr (tag 24.0.1 : module ai, outils,
// serveur MCP, masquage, fichiers de langue, ChangeLog), DoliStore
// (recherches et fiches de modules), DoliCloud (tarifs), n8n Docs (Text
// Classifier, Summarization Chain, Information Extractor, HTTP Request,
// human-in-the-loop, index llms.txt), tarifs d'OpenAI, d'Anthropic et de
// Mistral AI, loi n° 2017-20, RGPD, Commission européenne (article 4, fait
// vérifié du catalogue), FDFP, FODEFCA, 3FPT, France Compétences.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Dolibarr et IA : régler le module IA de la version 24, juger les modules du DoliStore et relier un modèle à Dolibarr par l'API REST et n8n, en gardant la main sur chaque écriture",
    'title'   => 'Formation Dolibarr et IA, API REST et n8n | Richard SALANON',
    'meta'    => "Formation Dolibarr et IA : module IA de la version 24, modules du DoliStore, API REST et n8n pour classer, résumer et rédiger, sous contrôle humain.",
    'en_bref' => "Cette formation apprend aux administrateurs de Dolibarr, aux utilisateurs avancés et aux prestataires qui maintiennent l'installation à relier l'intelligence artificielle à leur ERP par trois voies : le module IA livré avec la version 24, les modules complémentaires du DoliStore, et l'API REST appelée depuis n8n ou un petit service pour classer, résumer ou rédiger. Chaque voie se travaille sur une installation de test, avec une validation humaine avant toute écriture et un calcul du coût des appels au modèle. La session dure deux jours en quatre demi-journées, suivis d'une séance à distance, en intra, en inter-entreprises, à distance ou en formule hybride. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'ia-systemes-existants',
    'forte'   => false,
    'duree'   => 'Deux jours en quatre demi-journées, plus une séance de suivi à distance',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : ce que contient vraiment le module IA de votre Dolibarr",
            'duree'  => '3 h 30',
            'points' => [
                "Relevé de l'installation : version exacte, hébergement (serveur au bureau, hébergeur, DoliCloud), modules activés, modules externes du dossier custom, titulaire du compte administrateur.",
                "Lecture croisée de la page du wiki consacrée au module IA et du code de la version 24.0.1 : ce qui est documenté, ce qui existe en plus, ce que le code marque comme expérimental ou non utilisé.",
                "Activation du module IA sur la copie de test, choix du fournisseur dans la liste proposée et saisie d'une clé ouverte au nom de l'entreprise, jamais au nom d'un salarié.",
                "Un modèle choisi pour chaque fonction au lieu du modèle proposé par défaut, et les instructions placées avant et après chaque demande.",
                "Le bouton de test de la connexion, la lecture des erreurs renvoyées par le fournisseur, et le fichier de débogage à activer puis à couper.",
                "Exercice de contrôle : la fiche d'inventaire de votre installation, fonction par fonction, avec le fournisseur, le modèle, les données envoyées et la personne responsable.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : rédiger, traduire, résumer et corriger dans les écrans de Dolibarr",
            'duree'  => '3 h 30',
            'points' => [
                "Le lien « Remplir le message avec du contenu IA » du compositeur de courriels, depuis une facture, une proposition commerciale, un ticket ou un envoi en nombre.",
                "Des brouillons qui s'appuient sur les variables de substitution (__REF__, __THIRDPARTY_NAME__, __AMOUNT_REMAIN__) plutôt que sur des montants recopiés par le modèle.",
                "Le menu d'amélioration du texte : traduction vers la langue choisie, résumé en 50, 100 ou 200 mots ou en pourcentage, reformulation professionnelle, correction de l'orthographe.",
                "Les pages du module site web produites à partir d'une consigne, et leur relecture avant toute mise en ligne.",
                "Les champs supplémentaires dotés d'une instruction d'IA : rédiger l'instruction, déclencher le remplissage sur une fiche, contrôler la valeur avant de l'enregistrer.",
                "Exercice de contrôle : dix relances d'impayés produites sur la copie, relues en binôme et classées en envoyable, à corriger ou à jeter.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : assistant IA, serveur MCP et modules du DoliStore, ouvrir les données sans perdre la main",
            'duree'  => '3 h 30',
            'points' => [
                "L'assistant IA et le serveur MCP, livrés comme expérimentaux avec la version 24 : ce qu'ils savent faire, et pourquoi on les essaie d'abord sur la copie.",
                "Le droit « Utiliser l'assistant IA », que Dolibarr n'accorde à personne par défaut, le mode privé, le masquage des données sensibles et le niveau de confirmation avant une action.",
                "La liste des outils autorisés, réglée séparément pour l'assistant et pour le serveur MCP, et l'utilisateur de service limité à la lecture.",
                "Le journal des requêtes envoyées au modèle : activation, consultation, durée de conservation, purge.",
                "Lire la fiche d'un module du DoliStore : versions déclarées compatibles, durée d'accès aux mises à jour, service externe appelé, données envoyées, prix hors taxes.",
                "Exercice de contrôle : quinze questions posées à l'assistant, dont cinq pièges, puis la lecture du journal qui en garde la trace.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : relier un modèle à Dolibarr par l'API REST et n8n pour classer, résumer ou rédiger",
            'duree'  => '3 h 30',
            'points' => [
                "Un utilisateur technique aux seuls droits utiles, sa clé d'API, et un premier appel testé dans l'explorateur intégré à Dolibarr.",
                "Déclencher le flux par le module Webhook ou interroger l'API à intervalle fixe, et compter les appels que chaque choix consomme sur le mois.",
                "Dans n8n, lire Dolibarr avec le nœud HTTP Request, puis classer, résumer ou extraire avec les nœuds Text Classifier, Summarization Chain et Information Extractor.",
                "Écrire le résultat là où une personne le relit : note privée, champ supplémentaire, catégorie à confirmer, jamais une facture validée.",
                "L'approbation humaine placée dans le flux, et la branche qui recueille les cas que le modèle ne sait pas classer.",
                "Exercice de contrôle : le flux du cas retenu, essayé sur trente enregistrements de la copie, avec son coût mensuel calculé à partir des jetons relevés.",
            ],
        ],
        [
            'titre'  => "Séance de suivi, trois à quatre semaines plus tard",
            'duree'  => '2 h, à distance',
            'points' => [
                "Lecture du journal de l'assistant et de l'historique d'exécution des flux n8n depuis la session.",
                "Dépense réelle du mois chez le fournisseur de modèles, rapportée au nombre de courriels, de tickets ou de fiches traités.",
                "Revue de vingt résultats tirés au hasard, avec les corrections faites par les utilisateurs.",
                "Ajustement des instructions, des catégories et des droits, puis liste des demandes à confier au prestataire.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => 'Deux jours en quatre demi-journées, plus 2 h de suivi à distance'],
        ['l' => 'Public', 'v' => 'Administrateurs et utilisateurs avancés de Dolibarr, prestataires qui maintiennent l\'installation'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, six personnes au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saura faire votre équipe à la fin de la formation, et que laisse-t-elle de côté ?",
            'paragraphes' => [
                "Dolibarr n'a pas attendu sa dernière version pour accueillir l'intelligence artificielle : un module IA livré avec le logiciel rédige déjà des courriels, et des modules vendus sur le DoliStore promettent de lire les factures ou de répondre aux clients. La version 24, publiée sur GitHub en 24.0.1 le 7 septembre 2026, ajoute un assistant et un serveur MCP que sa propre liste des changements qualifie d'expérimentaux. Entre ce que montre une démonstration et ce qui tient sur une installation réelle, il y a des droits, des clés, des factures de fournisseur et des relectures. Cette formation s'occupe de cet écart.",
                "À la fin des deux jours, chaque participant sait faire seul sept choses, vérifiées par un exercice : dire quelles fonctions d'IA son installation contient et ce que chacune transmet au fournisseur ; régler le module IA avec un modèle choisi pour chaque usage ; produire un courriel qui s'appuie sur les variables de Dolibarr plutôt que sur des chiffres recopiés ; ouvrir l'assistant à un groupe d'utilisateurs avec confirmation et journal ; juger la fiche d'un module du DoliStore ; construire un flux n8n qui lit Dolibarr par l'API et rend un résultat à relire ; estimer le coût mensuel des appels.",
                "L'administrateur repart en plus avec trois documents : la fiche d'inventaire des fonctions d'IA de l'installation, le registre des droits et des outils accordés à l'IA, et la procédure de création puis de révocation d'une clé. Le travail se fait sur une copie de test de votre Dolibarr, à la version que vous utilisez, et sur un cas choisi pendant le cadrage : classer les tickets entrants, résumer l'historique d'un client avant un rendez-vous, proposer une relance, remplir un champ à partir d'une description de produit.",
                "Plusieurs sujets voisins ont leur propre fiche. Les gestes de gestion, du devis au règlement, relèvent de la formation <a href=\"/formations/dolibarr-utilisateurs\">Dolibarr pour vos équipes</a>, à maîtriser avant celle-ci. Les messages WhatsApp envoyés depuis Dolibarr sont traités dans <a href=\"/formations/whatsapp-odoo-dolibarr-crm\">WhatsApp relié à Odoo, Dolibarr et au CRM</a>, et l'appel aux API des modèles écrit dans votre propre code, tests compris, dans <a href=\"/formations/integrer-ia-logiciels-existants\">Intégrer l'IA dans ses logiciels existants</a>. L'équivalent pour l'autre ERP est <a href=\"/formations/odoo-ia\">Odoo et IA</a>. Installer et paramétrer l'ERP relève du service d'<a href=\"/services/integration-dolibarr\">intégration Dolibarr</a>.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que fait réellement le module IA de Dolibarr 24, écran par écran ?",
            'legende' => "Fonctions relevées le 5 octobre 2026 dans le code source de la version 24.0.1 publié sur GitHub (liste des fonctions du module ai et écrans qui les appellent) et dans la liste des changements de la version 24. Le statut est celui qu'indique le code ou cette liste ; la présence réelle se vérifie sur votre installation pendant le cadrage.",
            'entetes' => ['Fonction', 'Où elle apparaît', 'Ce qu\'elle fait', 'Statut dans la 24.0.1'],
            'lignes'  => [
                ['Génération de courriel', 'Compositeur de courriels : envoi depuis une fiche, une facture, un document de produit, un ticket, un envoi en nombre', 'Rédige le corps du message à partir d\'une consigne, avec les variables de substitution de Dolibarr', 'Stable ; l\'une des deux fonctions décrites par le wiki'],
                ['Génération de page web', 'Éditeur de pages du module site web', 'Produit le contenu HTML d\'une page ou d\'une section', 'Stable ; décrite par le wiki'],
                ['Traduction, résumé, reformulation, correction', 'Menu IA de l\'éditeur de texte, à côté de la génération', 'Traduit vers la langue choisie, résume en 50 à 200 mots, en un ou deux paragraphes ou en pourcentage, reformule en style professionnel ou humoristique, corrige orthographe et grammaire', 'Présentes dans le code ; la correction orthographique arrive avec la version 24'],
                ['Remplissage d\'un champ supplémentaire', 'Fiche d\'un objet, à côté du champ qui porte une instruction d\'IA', 'Calcule la valeur du champ à partir de l\'instruction saisie par l\'administrateur dans la définition du champ', 'Présente dans le code'],
                ['Analyse de documents', 'Page d\'envoi de fichiers, pour une facture fournisseur', 'Convertit le document en texte et demande au modèle une réponse structurée en JSON', 'Marquée « experimental » dans la liste des fonctions'],
                ['Assistant IA', 'Fenêtre de dialogue de l\'interface, pour les utilisateurs qui en ont le droit', 'Comprend une demande en langage courant et choisit un outil : chercher un tiers, lister les impayés, sortir un rapport, créer une commande', 'Expérimental selon la liste des changements de la version 24'],
                ['Serveur MCP', 'Point d\'accès du module, clé générée par l\'administrateur', 'Laisse un client externe, comme Claude Desktop, appeler les mêmes outils avec les droits d\'un utilisateur de service', 'Expérimental, livré avec l\'assistant'],
                ['Images, audio, vidéo, transcription', 'Liste des fonctions de la page de configuration', 'Prévues, avec un modèle par défaut pour certains fournisseurs', 'Marquées « notused » : reliées à aucun écran'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Le wiki dit « courriels et site web », le code en montre davantage : à qui se fier ?",
            'paragraphes' => [
                "Aux deux, à condition de savoir ce que chacun décrit. La page du wiki consacrée au module IA, consultée le 5 octobre 2026, explique comment choisir un fournisseur, coller la clé et écrire des instructions placées avant et après chaque demande ; elle précise que la génération n'est disponible pour l'instant que lors de l'envoi d'un courriel ou de la création d'une page du module site web. Cette page n'a pas suivi les versions récentes : le code de la 24.0.1 contient le menu d'amélioration du texte, le remplissage des champs supplémentaires, l'analyse de documents, l'assistant et le serveur MCP.",
                "La formation tranche cette question sur votre installation, et non sur une page de documentation. Le premier matin, on ouvre la configuration du module, la liste des fonctions et les écrans où chacune apparaît, puis on note ce qui fonctionne réellement avec votre fournisseur. Une installation encore en version 22 ou 23 ne montre ni l'assistant ni le serveur MCP : elle est formée sur ce qu'elle contient, et la montée de version se prépare à part, avec votre prestataire.",
                "Le mot « expérimental » mérite une lecture honnête. Il signifie que l'équipe de Dolibarr livre la fonction pour qu'on l'essaie, sans garantir qu'elle gardera la même forme dans la version suivante. On peut s'en servir pour apprendre, mesurer et préparer un usage ; on évite d'y faire reposer une opération dont l'entreprise dépend, comme la saisie de toutes les factures d'achat, tant qu'elle n'a pas été éprouvée sur la copie et que la version suivante n'a pas confirmé son comportement.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quel matériel ?",
            'intro' => "Le public est celui qui ouvre les accès à l'IA, ou qui s'en servira le plus souvent. Tout le groupe suit le premier jour ; le second demande d'être à l'aise avec l'administration de Dolibarr.",
            'items' => [
                ['titre' => 'L\'administrateur de Dolibarr', 'texte' => "Il active les modules, crée les utilisateurs, distribue les droits et détient les clés. Il suit les quatre demi-journées, car c'est lui qui réglera le fournisseur, la liste des outils autorisés, le journal et l'utilisateur technique de l'API."],
                ['titre' => 'Les utilisateurs avancés', 'texte' => "Assistante de direction, responsable commercial, chargé du recouvrement ou du support : ils rédigent des courriels, répondent aux tickets et consultent les impayés chaque jour. Ils apprennent à se servir de l'IA dans leurs écrans et à reconnaître une réponse qu'il ne faut pas envoyer."],
                ['titre' => 'Le prestataire qui maintient l\'installation', 'texte' => "Quand un intégrateur gère le serveur et les mises à jour, sa présence au second jour évite les malentendus : il entend les mêmes exigences que l'entreprise sur les droits, les clés et le journal, et repart avec la liste des réglages attendus."],
                ['titre' => 'La personne qui construit les flux', 'texte' => "Référent technique ou développeur interne, il écrira le flux n8n ou le petit service qui appelle l'API. Il doit savoir lire du JSON et une documentation d'API ; les notions de base de n8n s'acquièrent, si besoin, dans la formation <a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a>."],
                ['titre' => 'Prérequis', 'texte' => "Une pratique quotidienne de Dolibarr et des droits d'administration sur une installation de test. La demi-journée sur l'API demande d'être à l'aise avec un terminal, un fichier de configuration et la notion de requête HTTP ; aucune autre compétence de programmation n'est exigée."],
                ['titre' => 'Matériel et accès', 'texte' => "Un ordinateur par participant, une copie de test de votre Dolibarr à jour de votre version, la liste des modules activés, quelques documents types (propositions, factures, courriels), une clé de l'API de Dolibarr et une clé d'un fournisseur de modèles ouverte au nom de l'entreprise, avec un plafond de dépense bas."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices les participants font-ils sur votre installation ?",
            'items' => [
                ['titre' => 'Choisir le cas à automatiser', 'duree' => 'Pendant le cadrage', 'texte' => "L'administrateur et un responsable métier proposent deux ou trois tâches où l'IA pourrait préparer un résultat : trier des tickets, résumer un tiers, proposer une relance, remplir une description de produit. On retient celle qui a du volume, une réponse vérifiable et des données qu'on peut anonymiser dans la copie."],
                ['titre' => 'Inventorier le module IA', 'duree' => '45 minutes', 'texte' => "Le groupe ouvre chaque écran de la liste des fonctions et note ce qu'il voit : lien présent ou absent, fournisseur appelé, modèle utilisé, données envoyées. La fiche obtenue devient le document de référence de l'administrateur, à mettre à jour à chaque nouvelle version."],
                ['titre' => 'Relances à partir des variables', 'duree' => '1 heure', 'texte' => "Sur dix factures impayées de la copie, chaque binôme fait produire une relance qui cite __REF__, __AMOUNT_REMAIN__ et __THIRDPARTY_NAME__ au lieu de recopier les valeurs. On compare ensuite avec une consigne qui laisse le modèle écrire les montants lui-même, et l'on compte les erreurs de chaque méthode."],
                ['titre' => 'Piéger l\'assistant', 'duree' => '1 heure', 'texte' => "Quinze demandes sont soumises à l'assistant : dix utiles, comme la liste des impayés ou le chiffre du mois, et cinq pièges, comme supprimer une commande, payer une facture ou obtenir les données d'un autre service. Le groupe relève ce que l'assistant propose, ce qu'il exécute et ce que le journal garde."],
                ['titre' => 'Lire trois fiches du DoliStore', 'duree' => '45 minutes', 'texte' => "Par petits groupes, les participants lisent la fiche de trois modules qui répondent au même besoin et remplissent la grille de vérification de cette page. Aucun module n'est acheté en séance ; le résultat est une liste de questions à poser aux éditeurs."],
                ['titre' => 'Construire le flux du cas retenu', 'duree' => '2 heures', 'texte' => "Webhook ou interrogation de l'API, filtrage des champs, appel au modèle, écriture du résultat dans une note privée ou un champ supplémentaire, approbation humaine. Le flux passe sur trente enregistrements de la copie ; chaque résultat est noté juste, à corriger ou faux, et les jetons consommés sont relevés."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Module natif, module du DoliStore, flux n8n ou petit service : quelle voie pour quel besoin ?",
            'options'  => ['Module IA livré avec Dolibarr', 'Module du DoliStore', 'API REST et flux n8n', 'Petit service maison'],
            'criteres' => [
                ['critere' => 'Besoin typique', 'valeurs' => ['Rédiger, traduire, résumer ou corriger un texte dans un écran ; remplir un champ ; essayer l\'assistant', 'Un besoin précis que le cœur ne couvre pas : lecture de factures, centre d\'aide, tableau de bord commenté', 'Classer, résumer ou rédiger à chaque événement, sans écrire de module', 'Un traitement volumineux, des règles métier fines ou un hébergement imposé']],
                ['critere' => 'Qui le met en place', 'valeurs' => ['L\'administrateur, dans la configuration', 'L\'administrateur, après lecture de la fiche et essai sur la copie', 'Un référent technique formé à n8n', 'Un développeur, interne ou prestataire']],
                ['critere' => 'Ce qui se paie', 'valeurs' => ['Les appels au fournisseur de modèles', 'Le module, parfois l\'abonnement au service de son éditeur, plus les appels au modèle', 'n8n (hébergé ou installé chez vous) et les appels au modèle', 'Le développement, l\'hébergement du service et les appels au modèle']],
                ['critere' => 'Contrôle humain', 'valeurs' => ['Relecture avant envoi ; confirmation et journal pour l\'assistant', 'Selon le module : à vérifier sur la fiche et en essai', 'Approbation placée dans le flux, branche des cas incertains', 'Écrit dans le code : brouillon, validation, journal']],
                ['critere' => 'Risque principal', 'valeurs' => ['Texte faux envoyé sans relecture, outil d\'écriture laissé ouvert', 'Module abandonné qui bloque une mise à jour, données envoyées à un tiers inconnu', 'Clé trop large, flux qui écrit sans validation, quota d\'appels dépassé', 'Code que personne ne maintient après le départ du développeur']],
            ],
            'verdict'  => "Commencez par le module livré avec Dolibarr, qui ne coûte que les appels au modèle. Passez par l'API et n8n quand l'IA doit agir à chaque événement, et réservez les modules du DoliStore et le développement aux besoins que ni l'un ni l'autre ne couvrent, après essai sur une copie.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment choisir un module d'IA sur le DoliStore sans se tromper ?",
            'paragraphes' => [
                "Le DoliStore, place de marché officielle des modules de Dolibarr, propose désormais de nombreux modules d'IA. Le 5 octobre 2026, une recherche sur le mot « openai » y renvoyait 10 modules, de 10 € à 299 € hors taxes, et une recherche sur « chatgpt » en renvoyait 6. Les catégories se recoupent : assistants conversationnels, serveurs MCP, lecture automatique des factures fournisseurs, rédaction, centres d'aide avec robot, tableaux de bord commentés. Certains sont gratuits. La formation ne recommande aucun module : elle apprend à lire une fiche et à poser les bonnes questions avant d'installer quoi que ce soit.",
                "Trois écarts reviennent dans les fiches lues pour préparer cette session. La compatibilité, d'abord : une fiche annonce les versions 16 à 24, une autre s'arrête à la 22, une troisième affiche « 14+ » tout en indiquant plus bas une version maximale de 23. L'accès aux mises à jour, ensuite : un an après l'achat pour certains modules, à vie pour d'autres. Le circuit des données, enfin : un module peut appeler directement le fournisseur de modèles avec votre clé, ou passer par le service de son propre éditeur, ce qui ajoute un destinataire de vos factures et de vos fiches clients.",
                "Ce dernier point pèse lourd. Quand un module envoie vos documents à l'API de son éditeur, cet éditeur devient un sous-traitant au sens du RGPD pour une entreprise européenne, avec le contrat qu'exige l'article 28, et un destinataire étranger au sens de la loi béninoise. La fiche du module, sa politique de confidentialité et ses conditions doivent dire où partent les données, combien de temps elles sont gardées et à quoi elles servent. Si la fiche ne le dit pas, la question se pose par écrit à l'éditeur avant l'achat.",
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => "Que vérifier sur la fiche d'un module du DoliStore avant de l'installer ?",
            'items' => [
                "Les versions de Dolibarr déclarées compatibles, en haut de la fiche et dans les prérequis, qui ne disent pas toujours la même chose.",
                "La date de la dernière mise à jour et la durée d'accès aux nouvelles versions incluse dans le prix : un an ou à vie.",
                "Le fournisseur de modèles appelé, et si l'appel passe par votre clé ou par le service de l'éditeur du module.",
                "Les données envoyées hors de votre serveur : texte, pièces jointes, fiches clients, montants.",
                "Le coût complet : prix du module hors taxes, abonnement éventuel au service de l'éditeur, consommation chez le fournisseur de modèles.",
                "Les droits demandés par le module et la possibilité de le limiter à un groupe d'utilisateurs.",
                "La présence d'un journal des demandes et d'une étape de validation avant toute écriture dans Dolibarr.",
                "Le comportement à la désactivation : tables laissées en place, champs ajoutés, données conservées.",
                "Un essai complet sur la copie de test, mise à jour de version comprise, avant toute installation en production.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment un flux n8n lit-il Dolibarr, interroge-t-il un modèle et rend-il la main à une personne ?",
            'paragraphes' => [
                "Le point de départ est l'API REST de Dolibarr. Selon la page du wiki consacrée à ce module, consultée le 5 octobre 2026, chaque appel vise une adresse de la forme /api/index.php/ suivie du service, avec les méthodes GET, POST, PUT et DELETE, et transporte la clé d'un utilisateur dans l'en-tête DOLAPIKEY. Le wiki conseille de créer un utilisateur dédié à cet usage. L'explorateur intégré liste les services réellement ouverts sur votre installation et fournit, pour chaque essai, la commande curl correspondante, que l'on reprend telle quelle dans n8n.",
                "L'index de la documentation de n8n, consulté le 5 octobre 2026, ne contient aucun nœud consacré à Dolibarr. On passe donc par le nœud HTTP Request, avec une authentification par en-tête qui porte DOLAPIKEY, et par le nœud Webhook pour recevoir ce que Dolibarr envoie. Côté Dolibarr, le module Webhook poste un message JSON vers l'adresse choisie à chaque événement retenu. L'exemple du wiki montre que ce message contient l'objet entier, notes privées comprises : le flux doit donc trier les champs avant de les passer au modèle.",
                "Pour l'IA elle-même, la documentation de n8n décrit trois nœuds utiles à Dolibarr. Text Classifier range un texte dans des catégories définies par un nom et une description ; Summarization Chain résume un contenu long en le découpant ; Information Extractor rend des champs structurés selon un schéma. Le résultat repart vers Dolibarr par un appel PUT ou POST, dans une note privée ou un champ supplémentaire, et non dans une pièce validée. Une personne confirme, corrige ou rejette ; le flux ne fait que préparer.",
                "Le même schéma s'écrit sans n8n, dans un petit script PHP lancé par le planificateur de tâches, quand l'entreprise préfère ne pas ajouter d'outil. La formation montre les deux, puis aide à choisir : n8n pour voir chaque étape et modifier le flux sans développeur, le script pour un traitement volumineux ou un serveur fermé à tout logiciel supplémentaire. Dans les deux cas, la clé de l'API appartient à un utilisateur technique, et non au compte de l'administrateur.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Classer, résumer, rédiger : à quoi ressemblent les trois flux travaillés en formation ?",
            'legende' => "Trois cas types construits sur la copie de test l'après-midi du second jour. Les noms des nœuds sont ceux de la documentation de n8n consultée le 5 octobre 2026 ; le même découpage s'applique à un script maison.",
            'entetes' => ['Flux', 'Déclencheur', 'Ce qui part au modèle', 'Où revient le résultat', 'Contrôle humain'],
            'lignes'  => [
                ['Classer les tickets entrants', 'Création d\'un ticket, reçue par le module Webhook', 'Sujet et message, sans adresse ni téléphone', 'Catégorie proposée et étiquette « à confirmer » sur le ticket', 'Le support confirme ou corrige ; les cas sans catégorie claire vont dans une file à part'],
                ['Résumer un tiers avant un rendez-vous', 'Demande d\'un commercial, ou tâche planifiée la veille', 'Derniers événements de l\'agenda, propositions et factures ouvertes, réduits à l\'essentiel', 'Note privée datée sur la fiche du tiers', 'Le commercial lit le résumé et le confronte à la fiche avant le rendez-vous'],
                ['Rédiger une relance d\'impayé', 'Facture échue depuis un nombre de jours fixé', 'Référence, échéance, reste à payer, historique des relances', 'Brouillon de courriel rattaché à la facture', 'Le recouvrement relit, ajuste le ton et envoie lui-même ; rien ne part seul'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Où placer le contrôle humain, selon la voie choisie ?",
            'intro' => "Le principe est le même partout : l'IA propose, une personne décide, et une trace permet de savoir après coup qui a accepté quoi. Les réglages qui le traduisent diffèrent d'une voie à l'autre.",
            'items' => [
                ['titre' => 'Dans les écrans de Dolibarr', 'texte' => "Le texte produit s'insère dans le compositeur ou dans le champ, mais rien ne part sans le clic de l'utilisateur. La règle enseignée : celui qui envoie relit tout, montants et noms compris, et répond de ce qu'il envoie, comme s'il l'avait écrit."],
                ['titre' => 'Dans l\'assistant IA', 'texte' => "La configuration propose trois niveaux : ne jamais demander de confirmation, la demander pour les créations, modifications et suppressions, ou la demander pour toute action. La formation retient le second niveau au minimum, enregistré explicitement puis vérifié par un essai d'écriture sur la copie."],
                ['titre' => 'Par le serveur MCP', 'texte' => "À la lecture du code de la 24.0.1, le serveur exécute l'outil demandé par le client externe dans la limite de la liste autorisée et des droits de l'utilisateur de service, sans étape de confirmation de son côté. Le contrôle repose donc sur un utilisateur en lecture seule et sur l'approbation demandée par le client."],
                ['titre' => 'Dans un flux n8n', 'texte' => "La documentation de n8n décrit une revue humaine des outils d'un agent : le flux s'arrête, la demande arrive par Slack, Telegram ou le chat de n8n, et la personne approuve ou refuse. Pour un flux simple, le résultat est écrit comme proposition dans Dolibarr et c'est l'utilisateur qui la valide."],
                ['titre' => 'Pour les cas incertains', 'texte' => "Par défaut, le nœud Text Classifier écarte sans bruit un élément qu'il ne sait pas classer, selon sa documentation. On active donc la sortie supplémentaire « Other », reliée à une file traitée par une personne, pour qu'aucun ticket ne disparaisse."],
                ['titre' => 'Dans le journal', 'texte' => "Le module IA tient un journal des requêtes de l'assistant et du serveur MCP, à activer, avec une durée de conservation de 30 jours proposée par défaut. n8n garde l'historique de ses exécutions. Une revue mensuelle de ces deux journaux fait partie du suivi."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils, quelles versions et quels coûts d'éditeur prévoir ?",
            'legende' => "Versions et prix publiés par les éditeurs, relevés le 5 octobre 2026 sur leurs pages officielles, hors taxes ; les tarifs des modèles sont en dollars américains par million de jetons, au tarif standard. Ces sommes se paient aux éditeurs et aux fournisseurs, jamais au formateur.",
            'entetes' => ['Outil', 'Version ou offre', 'Coût publié', 'Rôle dans la formation'],
            'lignes'  => [
                ['Dolibarr ERP CRM', '24.0.1, publiée sur GitHub le 7 septembre 2026', 'Gratuit, logiciel libre', 'Module IA, API REST, module Webhook, sur la copie de test'],
                ['DoliCloud Basic', 'Hébergement de Dolibarr par l\'éditeur', '14 € par mois et par utilisateur ; 2 000 appels d\'API par mois', 'Plafond à connaître avant de brancher un flux qui interroge l\'API'],
                ['DoliCloud Premium', 'Hébergement de Dolibarr par l\'éditeur', '30 € par mois, plus 15 € par utilisateur ; 20 000 appels d\'API par mois', 'Marge pour plusieurs flux ou une synchronisation fréquente'],
                ['n8n', '2.41, publiée le 22 septembre 2026 (stable 2.41.6)', 'Cloud Starter : 20 € par mois en paiement annuel pour 2 500 exécutions ; Pro : 50 € pour 10 000 ; environ 17 % de plus en mensuel ; installation chez vous possible', 'Construction des flux qui lisent Dolibarr et appellent le modèle'],
                ['Mistral Small 4 (Mistral AI)', 'Modèle visé par l\'alias mistral-small-latest, celui que Dolibarr propose par défaut pour Mistral', '0,15 $ en entrée, 0,60 $ en sortie', 'Modèle économique pour classer, résumer, corriger'],
                ['Claude Haiku 4.5 (Anthropic)', 'Modèle d\'entrée de gamme d\'Anthropic', '1 $ en entrée, 5 $ en sortie', 'Point de comparaison pour la qualité des résumés en français'],
                ['GPT-5.2 (OpenAI)', 'Modèle que Dolibarr propose par défaut pour OpenAI', '1,75 $ en entrée, 14 $ en sortie', 'Exemple de modèle par défaut plus cher que la tâche ne l\'exige souvent'],
                ['Claude Opus 4.6 (Anthropic)', 'Modèle que Dolibarr propose par défaut pour Anthropic', '5 $ en entrée, 25 $ en sortie', 'Exemple de modèle haut de gamme à remplacer pour un usage courant'],
                ['Modules du DoliStore', 'Selon l\'éditeur du module', 'De gratuits à 299 € hors taxes pour les résultats de la recherche « openai »', 'Lus et comparés, jamais achetés pendant la session'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Combien coûte, chaque mois, une relance ou un résumé produit par le modèle ?",
            'legende' => "Calcul refait en formation avec vos volumes : 1 200 courriels ou tickets par mois, 1 500 jetons envoyés par demande (consigne, variables et texte) et 250 jetons produits, soit 1,8 million de jetons en entrée et 300 000 en sortie. Tarifs standard relevés le 5 octobre 2026 sur les pages d'OpenAI, d'Anthropic et de Mistral AI, en dollars hors taxes, sans cache ni traitement par lot.",
            'entetes' => ['Modèle', 'Entrée', 'Sortie', 'Total du mois', 'Ce que la formation en retient'],
            'lignes'  => [
                ['Mistral Small 4', '0,27 $', '0,18 $', '0,45 $', 'À mesurer d\'abord sur vos textes : si la qualité suffit, inutile d\'aller plus haut'],
                ['Claude Haiku 4.5', '1,80 $', '1,50 $', '3,30 $', 'Écart de coût à comparer avec l\'écart de qualité relevé sur trente cas'],
                ['GPT-5.2', '3,15 $', '4,20 $', '7,35 $', 'La sortie pèse plus que l\'entrée : borner la longueur des réponses'],
                ['Claude Opus 4.6', '9 $', '7,50 $', '16,50 $', 'Plus de trente-six fois le premier total pour une relance courante'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi ne faut-il pas garder les modèles proposés par défaut ?",
            'paragraphes' => [
                "Parce que la configuration de Dolibarr 24.0.1 propose, pour plusieurs fournisseurs, un modèle haut de gamme. Le code prévoit gpt-5.2 pour OpenAI, claude-opus-4-6 pour Anthropic et gemini-3.1-pro-preview pour Google, alors que la page tarifs d'Anthropic, consultée le 5 octobre 2026, affiche Claude Opus 4.6 à 5 $ par million de jetons en entrée et 25 $ en sortie, contre 1 $ et 5 $ pour Claude Haiku 4.5. Pour corriger l'orthographe d'une relance ou résumer un ticket, un modèle léger fait souvent le travail. La page des instructions personnalisées permet justement de régler un modèle par fonction.",
                "Le choix ne se fait pas sur une impression. Pendant la session, le même lot de trente textes est traité par deux modèles de prix différents, puis noté par la personne du métier : juste, à corriger, faux. Le tableau obtenu donne la qualité et le coût mensuel de chaque option, mesurés sur vos documents et en français. La comparaison détaillée des API et du coût au jeton chez les grands fournisseurs relève de la formation <a href=\"/formations/integrer-ia-logiciels-existants\">Intégrer l'IA dans ses logiciels existants</a> ; ici, on décide pour Dolibarr.",
                "Deux autres réglages pèsent sur la facture. L'assistant envoie au modèle, avec chaque question, la description des outils qu'il peut appeler : une liste d'outils autorisés réduite au nécessaire allège donc aussi chaque requête. Et un flux qui interroge l'API toutes les quinze minutes consomme environ 2 880 appels par mois, au-delà des 2 000 compris dans l'offre DoliCloud Basic relevés le 5 octobre 2026 ; un déclenchement par le module Webhook n'appelle l'API que lorsqu'il se passe quelque chose.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle menée pour que les réglages tiennent après la session ?",
            'intro' => "La règle de la session : aucun réglage n'est montré sans être refait aussitôt par les participants, sur la copie de test de votre installation, avec vos documents et votre fournisseur.",
            'items' => [
                ['titre' => 'Six personnes au plus', 'texte' => "Chaque participant règle, essaie et lit son propre journal. Au-delà de six, le formateur ne peut plus relire chaque instruction ni chaque flux, et les erreurs passent inaperçues."],
                ['titre' => 'Sur une copie, jamais sur la production', 'texte' => "Un essai de l'assistant peut créer une commande, un flux peut écrire dans cent fiches. Tout se fait sur une copie aux données anonymisées, avec l'envoi de courriels coupé ; l'installation réelle n'est touchée qu'après la session, par l'administrateur."],
                ['titre' => 'Des clés bridées et des coûts relevés', 'texte' => "La clé du fournisseur est ouverte au nom de l'entreprise avec un plafond bas. Le solde est relevé au début et à la fin de chaque demi-journée, pour que chacun voie ce qu'a coûté chaque exercice."],
                ['titre' => 'Mesurer avant de croire', 'texte' => "Chaque fonction est jugée sur un relevé fait par les participants : relances justes sur dix, tickets bien classés sur trente, réponses de l'assistant conformes sur quinze. Ces chiffres sont les vôtres ; la formation n'en promet aucun à l'avance."],
                ['titre' => 'Des supports tirés de votre installation', 'texte' => "Fiche d'inventaire des fonctions, registre des droits et des outils accordés, instructions par fonction en version modifiable, export des flux n8n, procédure de création et de révocation des clés. Tout reste à l'entreprise."],
                ['titre' => 'Un suivi sur l\'usage réel', 'texte' => "Un canal direct pour les questions pendant quelques semaines, puis la séance de suivi, qui part du journal, de l'historique des flux et de la facture du fournisseur plutôt que des impressions."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon votre activité, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => 'Distributeur de pièces détachées, à Cotonou', 'probleme' => "Le chargé de recouvrement écrit chaque semaine des dizaines de relances à la main, avec des montants parfois faux et un ton qui varie selon la fatigue.", 'solution' => "Génération de relances dans le compositeur, appuyée sur les variables de la facture, modèle économique réglé pour cette fonction, relecture obligatoire avant envoi, et comparaison chiffrée de deux consignes sur dix factures réelles de la copie."],
                ['secteur' => 'Société de services informatiques, à Abidjan', 'probleme' => "Les tickets arrivent par courriel dans Dolibarr sans catégorie, et le technicien d'astreinte perd du temps à trier ce qui relève du réseau, des logiciels ou de la facturation.", 'solution' => "Module Webhook à la création du ticket, flux n8n qui retire coordonnées et signatures, classement par Text Classifier avec une sortie « Other » vers une file humaine, catégorie écrite comme proposition que le support confirme."],
                ['secteur' => 'Association ou fédération, à Dakar', 'probleme' => "La secrétaire générale prépare chaque mois un point sur les cotisations en retard et les adhérents à relancer, en recopiant des listes dans un traitement de texte.", 'solution' => "Assistant IA ouvert à deux personnes seulement, confirmation exigée pour toute écriture, outils limités à la lecture des tiers et des rapports, journal activé et relu au premier mois."],
                ['secteur' => 'Négoce de matériaux, à Lomé ou à Douala', 'probleme' => "La direction hésite entre plusieurs modules du DoliStore pour lire les factures fournisseurs, sans savoir lequel suivra les prochaines versions de Dolibarr.", 'solution' => "Lecture comparée de trois fiches avec la grille de cette page, questions écrites aux éditeurs sur le circuit des données, essai de l'analyse de documents expérimentale sur la copie, puis décision reportée à la preuve sur vingt factures."],
                ['secteur' => 'PME de services, en France ou en Belgique', 'probleme' => "Le dirigeant veut interroger Dolibarr depuis un assistant de bureau, mais le délégué à la protection des données refuse toute ouverture sans garanties.", 'solution' => "Serveur MCP essayé sur la copie avec un utilisateur de service en lecture seule, liste d'outils réduite aux rapports, clé transmise par en-tête, masquage activé, journal conservé, et contrat avec le fournisseur de modèles au sens de l'article 28 du RGPD."],
                ['secteur' => 'ONG avec bureaux au Burkina Faso et au Niger', 'probleme' => "Les chargés de projet doivent résumer pour les bailleurs l'historique de chaque partenaire, éparpillé dans l'agenda et les notes de Dolibarr, avec une connexion instable.", 'solution' => "Flux nocturne qui prépare un résumé par partenaire dans une note privée, reprise automatique après coupure, et relecture par le chargé de suivi avant tout envoi au bailleur."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans vos locaux, en inter-entreprises, à distance ou en formule hybride : quel format choisir ?",
            'legende' => "Le format se décide au premier échange, selon le nombre de participants, l'existence d'une copie de test et la présence de l'administrateur au second jour. Dans tous les cas, les exercices portent sur une installation de Dolibarr en version 24 ou sur la vôtre.",
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', 'Une entreprise qui veut ouvrir l\'IA à plusieurs services de son Dolibarr', 'Deux jours, puis la séance de suivi', 'Dans vos locaux, sur la copie de votre installation préparée une semaine avant'],
                ['Inter-entreprises', 'Administrateurs de plusieurs structures sous Dolibarr, souvent seuls dans leur entreprise', 'Deux jours', 'Installation de démonstration commune le premier jour, puis chacun travaille sur sa propre copie'],
                ['À distance', 'Équipes réparties entre plusieurs villes, structures en Europe ou au Canada', 'Cinq séances de deux heures et demie', 'Visioconférence, partage d\'écran, accès distant à la copie de test, exercices envoyés la veille'],
                ['Hybride', 'Équipes qui veulent un lancement commun puis un travail au rythme du projet', 'Une journée en salle, puis deux séances à distance', 'Module IA et assistant sur place ; API, n8n et suivi à distance, sur le flux construit entre-temps'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et comment se règle-t-elle ?",
            'intro'      => "Aucun tarif n'est publié : le prix est établi sur devis, après un premier échange, un cadrage et un devis gratuits portant sur votre version de Dolibarr, votre hébergement, le cas retenu et le format. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les appels au fournisseur de modèles, l'hébergement, n8n et les modules éventuels se paient à part, directement à leurs éditeurs.",
            'items'      => [
                ['offre' => 'Module IA et assistant', 'prix' => 'Sur devis', 'inclus' => ['Première journée pour tout le groupe', 'Fiche d\'inventaire des fonctions de votre installation', 'Réglages de l\'assistant : droits, confirmation, outils, journal']],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Les quatre demi-journées', 'Grille de lecture des modules du DoliStore', 'Flux n8n du cas retenu, essayé sur la copie', 'Calcul du coût mensuel des appels']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Séance de deux heures à distance', 'Lecture du journal et de l\'historique des flux', 'Revue de vingt résultats tirés au hasard']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, six personnes au plus par groupe.',
                'La préparation de la copie de test et l\'anonymisation des données qu\'elle contient.',
                'Le nombre de cas à construire avec l\'API : un seul flux, ou plusieurs services concernés.',
                'La présence d\'un prestataire à associer, et la coordination avec lui.',
                'Le lieu et le mode : vos locaux, une salle, un déplacement hors de Cotonou, la visioconférence.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation continue peut-il prendre en charge une partie du coût ?",
            'paragraphes' => [
                "Cela arrive, mais rien ne se promet avant la réponse écrite du fonds. En Côte d'Ivoire, la <a href=\"https://fdfp.ci/plan-de-formation/\">page du FDFP sur le plan de formation</a>, lue le 5 octobre 2026, ouvre ce dispositif aux entreprises qui s'acquittent régulièrement de leurs deux taxes de formation, et ne rembourse qu'après contrôle par ses services. Au Bénin, le FODEFCA tient ses statuts du <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>, dont l'article 35 laisse au bénéficiaire de 10 à 30 % du coût. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> affiche un guichet pour le personnel des entreprises.",
                "En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que, depuis le 1er janvier 2022, les fonds publics et mutualisés, ceux des OPCO compris, ne financent que des prestataires certifiés Qualiopi. Richard SALANON ne l'est pas et n'est agréé par aucun fonds africain. La démarche prudente : envoyer le programme et le devis au fonds avant de signer, attendre sa décision, et bâtir le budget comme si aucune aide n'était accordée. Programme, feuilles de présence et évaluation sont remis en fin de session pour votre dossier.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quel réglage par défaut faut-il corriger avant d'ouvrir l'assistant à vos équipes ?",
            'texte' => "La liste des outils autorisés. À la lecture du code de la version 24.0.1, tant que l'administrateur ne l'a pas enregistrée, aucun outil n'est exclu, ni pour l'assistant ni pour le serveur MCP : y figurent la validation et le paiement d'une facture, la création de commandes et la suppression d'un objet. S'y ajoute un piège : le formulaire affiche la confirmation « pour les créations, modifications et suppressions », mais le code de l'assistant ne l'applique que si ce choix a été enregistré. La formation fait donc enregistrer les deux réglages, réduire les outils au nécessaire et vérifier le tout par un essai d'écriture sur la copie.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les semaines qui suivent, et comment les éviter ?",
            'intro' => "Après une session, les difficultés se ressemblent d'une installation à l'autre. Chacune a son exercice pendant la formation, et sa vérification pendant la séance de suivi.",
            'items' => [
                ['titre' => 'La clé du fournisseur au nom d\'un salarié', 'texte' => "Ouverte en essai sur une adresse personnelle, elle disparaît avec la personne, ou continue de servir sans que l'entreprise voie la facture. La clé appartient à l'entreprise, avec un plafond de dépense et une personne qui reçoit les alertes."],
                ['titre' => 'L\'administrateur utilisé comme compte technique', 'texte' => "Un flux n8n branché avec la clé de l'administrateur peut tout lire et tout modifier. On crée un utilisateur dédié, limité aux objets que le flux traite, et l'on révoque sa clé dès que le flux est arrêté."],
                ['titre' => 'L\'objet entier envoyé au modèle', 'texte' => "Le message du module Webhook contient tout l'objet, notes privées comprises. Un flux qui le transmet tel quel envoie au fournisseur bien plus que la tâche n'exige. Un nœud de tri ne garde que les champs utiles avant l'appel."],
                ['titre' => 'Le montant inventé dans une relance', 'texte' => "Quand la consigne laisse le modèle écrire lui-même les sommes, il lui arrive de se tromper avec assurance. Les variables de substitution de Dolibarr portent les montants et les références ; le modèle ne rédige que le texte autour."],
                ['titre' => 'Le ticket qui disparaît du tri', 'texte' => "Avec le réglage par défaut du nœud Text Classifier, un message sans catégorie claire est écarté. On ouvre la sortie « Other » et l'on vérifie chaque semaine qu'elle est vide ou traitée."],
                ['titre' => 'Le quota d\'appels épuisé en milieu de mois', 'texte' => "Un flux qui interroge l'API à intervalle court dépasse le plafond de l'offre DoliCloud Basic, et la synchronisation s'arrête. On préfère le module Webhook, et l'on compte les appels avant de mettre un flux en service."],
                ['titre' => 'Le module tiers qui bloque la mise à jour', 'texte' => "Un module du DoliStore déclaré compatible jusqu'à une version antérieure empêche de passer à la suivante. Avant chaque montée de version, la compatibilité de chaque module externe se vérifie sur la copie."],
                ['titre' => 'La clé du serveur MCP dans une adresse', 'texte' => "Le code accepte aussi la clé passée dans l'adresse appelée, en solution de repli. Une adresse finit dans les journaux du serveur et l'historique des postes : on transmet la clé par en-tête, et l'on en génère une nouvelle au moindre doute."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, langue, données personnelles : que change le contexte local ?",
            'paragraphes' => [
                "Chaque fonction d'IA de Dolibarr appelle un service distant depuis votre serveur. Une installation hébergée au bureau, à Cotonou ou à Abidjan, a donc besoin d'Internet pour rédiger une relance, et l'assistant attend jusqu'à 120 secondes par défaut une réponse du fournisseur, selon le code de la 24.0.1. Une coupure ne bloque ni la saisie ni la facturation, mais suspend l'IA : les équipes doivent savoir reprendre la main sans elle. Les flux lourds, comme les résumés de tous les tiers, se placent la nuit, quand la connexion est souvent plus stable.",
                "La langue compte pour la qualité. Les instructions par fonction, les catégories de classement et les consignes des flux s'écrivent en français, avec le vocabulaire de vos documents : intitulés de produits, formules de vos relances, noms de vos services. Le masquage de l'assistant, lui, a été pensé pour des formats européens : le code de la 24.0.1 reconnaît IBAN, adresses électroniques, numéros de TVA européens, suisses ou canadiens, téléphones au format international ou français, mais aucun identifiant fiscal africain, et pas les noms de personnes. Il réduit le risque sans le supprimer.",
                "Au Bénin, la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 portant code du numérique</a> ne permet, à son article 391, d'envoyer des données personnelles vers un autre État que si l'Autorité y reconnaît une protection équivalente, et son article 401 interdit qu'une décision produisant des effets juridiques à l'égard d'une personne repose sur ce seul traitement automatisé. Pour Dolibarr, cela se traduit simplement : n'envoyer au modèle que les champs utiles, et laisser une personne décider de toute relance, remise ou suspension qui touche un client.",
                "En Europe, le <a href=\"https://eur-lex.europa.eu/eli/reg/2016/679/oj\">RGPD</a> impose à son article 28 un contrat avec chaque sous-traitant, fournisseur de modèles ou éditeur de module qui reçoit vos données, et son article 22 protège contre les décisions fondées exclusivement sur un traitement automatisé. Le règlement européen sur l'IA ajoute l'obligation de maîtrise de l'IA de son article 4 : selon les <a href=\"https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers\">questions et réponses de la Commission européenne</a> mises à jour le 27 juillet 2026, elle s'applique depuis le 2 février 2025 et se contrôle depuis le 3 août 2026, l'omnibus numérique la maintenant pour les utilisateurs professionnels sans exiger un niveau « suffisant ».",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi suivre cette formation avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il travaille des deux côtés du branchement : il installe et paramètre Dolibarr pour des entreprises, et il construit des automatisations et des assistants qui appellent des modèles d'IA. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Habitué à PHP, le langage de Dolibarr, il lit le code d'un module avant d'en parler, comme l'a fait la préparation de cette fiche.",
                "Ses faits tiennent en quelques lignes : " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées selon ses propres déclarations, et des missions dans " . count((array) fait('pays_travailles')) . " pays, d'Afrique de l'Ouest et centrale jusqu'en Europe et au Canada. Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur la page des <a href=\"/zones/\">zones d'intervention</a>.",
                "Il n'est ni membre de l'équipe de Dolibarr, ni éditeur d'un module du DoliStore, ni représentant d'un fournisseur de modèles, et ne revend aucun de leurs produits. Sa façon de former se vérifie : une réponse sous " . fait('delai_reponse') . ", un programme écrit avant la session, des exercices sur la copie de votre installation, des coûts relevés pendant les essais, et un avis franc quand une fonction expérimentale n'est pas prête pour votre usage. Les autres formations du domaine sont réunies sur la page <a href=\"/formations/domaine/ia-systemes-existants\">IA dans vos systèmes existants</a>, le catalogue complet sur la page <a href=\"/formations/\">formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de brancher l'IA sur votre Dolibarr ?",
            'texte' => "Faites l'inventaire de ce que votre version contient vraiment, choisissez un modèle par fonction au lieu du modèle par défaut, laissez les montants aux variables de Dolibarr, enregistrez la confirmation et la liste des outils avant d'ouvrir l'assistant, lisez chaque fiche du DoliStore jusqu'au circuit des données, et ne laissez un flux écrire que des propositions qu'une personne valide.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Quelle tâche de votre Dolibarr voulez-vous confier à l'IA en premier ?",
            'texte'  => "Indiquez votre version de Dolibarr, son hébergement, les modules installés, la tâche visée et le nombre de participants : vous recevez une réponse sous " . fait('delai_reponse') . ", puis un programme et un devis détaillés. Si l'installation doit d'abord être remise en ordre, le service d'<a href=\"/services/integration-dolibarr\">intégration Dolibarr</a> peut précéder la formation ; pour un projet livré clés en main, voyez l'<a href=\"/services/integration-ia-entreprise\">intégration de l'IA en entreprise</a>.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander cette formation'],
        ],
    ],

    'faq' => [
        ['q' => "Dolibarr contient-il déjà de l'intelligence artificielle ?", 'r' => "Oui, par son module IA, livré avec le logiciel et activable dans la configuration. Le wiki, consulté le 5 octobre 2026, le décrit pour la rédaction des courriels et des pages du module site web ; le code de la version 24.0.1 y ajoute la traduction, le résumé, la reformulation, la correction, le remplissage de champs, ainsi qu'un assistant et un serveur MCP expérimentaux."],
        ['q' => "Quels fournisseurs de modèles le module IA accepte-t-il ?", 'r' => "La liste du code de la 24.0.1 compte OpenAI, Anthropic, Google Gemini, Mistral AI, Groq, DeepSeek, Perplexity et Zhipu AI, plus une entrée personnalisée pour tout service compatible avec l'API d'OpenAI, y compris un modèle installé sur votre propre serveur. La clé et l'adresse se saisissent dans la configuration du module."],
        ['q' => "L'assistant IA voit-il toute notre base de données ?", 'r' => "En mode privé, le modèle reçoit la demande et la liste des outils, choisit un outil, puis c'est Dolibarr qui l'exécute avec les droits de l'utilisateur connecté : les résultats s'affichent sans repartir vers le modèle. Le serveur MCP, lui, donne à un client externe l'accès aux données permises à l'utilisateur de service."],
        ['q' => "Faut-il la version 24 pour suivre la formation ?", 'r' => "Non. Une installation en version 22 ou 23 se forme sur ce qu'elle contient : génération de courriels et de pages, améliorations de texte selon la version, API REST et flux n8n. L'assistant et le serveur MCP n'existent qu'à partir de la version 24, et leur essai se fait alors sur une installation de démonstration."],
        ['q' => "n8n a-t-il un nœud Dolibarr ?", 'r' => "Pas parmi ses nœuds intégrés : l'index de sa documentation, consulté le 5 octobre 2026, n'en mentionne aucun. On appelle l'API REST de Dolibarr avec le nœud HTTP Request, la clé passée dans l'en-tête DOLAPIKEY, et l'on reçoit les événements par le nœud Webhook."],
        ['q' => "Combien coûtent les appels au modèle pour une PME ?", 'r' => "Souvent peu, à condition de choisir le modèle. Pour 1 200 relances ou tickets par mois, le calcul de cette page va de 0,45 $ avec Mistral Small 4 à 16,50 $ avec Claude Opus 4.6, aux tarifs relevés le 5 octobre 2026. La formation refait ce calcul avec vos volumes et vos textes."],
        ['q' => "Quel module du DoliStore nous conseillez-vous ?", 'r' => "Aucun en particulier. La formation apprend à lire une fiche : versions compatibles, durée d'accès aux mises à jour, service externe appelé, données envoyées, coût complet. Le choix se fait ensuite sur un essai dans la copie de test, avec les réponses écrites de l'éditeur."],
        ['q' => "L'IA peut-elle valider ou payer une facture dans Dolibarr ?", 'r' => "L'assistant de la version 24 dispose d'outils de validation et de paiement de facture, ce qui impose de régler la liste des outils autorisés et la confirmation avant de l'ouvrir. Dans un flux construit pendant la formation, l'IA ne fait que proposer : une personne valide toujours la pièce."],
        ['q' => "Nos données peuvent-elles rester sur notre serveur ?", 'r' => "En partie. Le module IA accepte un fournisseur personnalisé compatible avec l'API d'OpenAI, ce qui permet de viser un modèle installé chez vous ; la qualité se mesure alors sur vos textes. Avec un fournisseur en ligne, on réduit les champs envoyés et l'on active le masquage de l'assistant."],
        ['q' => "Faut-il savoir programmer pour suivre la formation ?", 'r' => "Non pour le premier jour. La demi-journée sur l'API et n8n demande d'être à l'aise avec un terminal, du JSON et la notion de requête HTTP ; elle s'adresse à l'administrateur, au référent technique ou au prestataire."],
        ['q' => "Un fonds de formation peut-il financer la session ?", 'r' => "Cela dépend du pays et du fonds : FDFP en Côte d'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, OPCO en France. Richard SALANON n'est pas certifié Qualiopi et n'a l'agrément d'aucun fonds. Soumettez programme et devis avant de signer, et prévoyez le budget sans prise en charge."],
    ],

    'sources' => [
        ['titre' => "Wiki Dolibarr, module AI (configuration du fournisseur, instructions, fonctions disponibles)", 'url' => 'https://wiki.dolibarr.org/index.php/Module_AI_(Artificial_Intelligence)', 'date' => '2026-10-05'],
        ['titre' => "GitHub, publication de Dolibarr 24.0.1 (7 septembre 2026)", 'url' => 'https://github.com/Dolibarr/dolibarr/releases/tag/24.0.1', 'date' => '2026-10-05'],
        ['titre' => "GitHub, liste des changements de Dolibarr 24.0.1 (assistant IA et serveur MCP expérimentaux, correction orthographique)", 'url' => 'https://github.com/Dolibarr/dolibarr/blob/24.0.1/ChangeLog', 'date' => '2026-10-05'],
        ['titre' => "GitHub, code du module ai de Dolibarr 24.0.1 (fournisseurs, fonctions, assistant, serveur MCP, masquage)", 'url' => 'https://github.com/Dolibarr/dolibarr/tree/24.0.1/htdocs/ai', 'date' => '2026-10-05'],
        ['titre' => "GitHub, fonctions et modèles par défaut du module ai (ai.lib.php, 24.0.1)", 'url' => 'https://github.com/Dolibarr/dolibarr/blob/24.0.1/htdocs/ai/lib/ai.lib.php', 'date' => '2026-10-05'],
        ['titre' => "GitHub, réglages de l'assistant IA de Dolibarr (confirmation, journal, accès MCP, 24.0.1)", 'url' => 'https://github.com/Dolibarr/dolibarr/blob/24.0.1/htdocs/ai/admin/assistant.php', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, API REST pour les développeurs (clé DOLAPIKEY, explorateur)", 'url' => 'https://wiki.dolibarr.org/index.php/Module_Web_Services_API_REST_(developer)', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, module Webhook (message JSON envoyé à chaque événement)", 'url' => 'https://wiki.dolibarr.org/index.php/Module_Webhook', 'date' => '2026-10-05'],
        ['titre' => "DoliStore, résultats de la recherche « openai » (10 modules)", 'url' => 'https://www.dolistore.com/index.php?search_query=openai&submit_search=1&l=fr', 'date' => '2026-10-05'],
        ['titre' => "DoliStore, résultats de la recherche « chatgpt » (6 modules)", 'url' => 'https://www.dolistore.com/index.php?search_query=chatgpt&submit_search=1&l=fr', 'date' => '2026-10-05'],
        ['titre' => "DoliCloud, offres Basic et Premium (appels d'API inclus)", 'url' => 'https://www.dolicloud.com/fr/fr-faq-pricing.php', 'date' => '2026-10-05'],
        ['titre' => "n8n Docs, nœud Text Classifier (catégories, cas sans correspondance)", 'url' => 'https://docs.n8n.io/integrations/builtin/cluster-nodes/root-nodes/n8n-nodes-langchain.text-classifier/', 'date' => '2026-10-05'],
        ['titre' => "n8n Docs, nœud Summarization Chain", 'url' => 'https://docs.n8n.io/integrations/builtin/cluster-nodes/root-nodes/n8n-nodes-langchain.chainsummarization/', 'date' => '2026-10-05'],
        ['titre' => "n8n Docs, nœud Information Extractor", 'url' => 'https://docs.n8n.io/integrations/builtin/cluster-nodes/root-nodes/n8n-nodes-langchain.information-extractor/', 'date' => '2026-10-05'],
        ['titre' => "n8n Docs, nœud HTTP Request (authentification par en-tête)", 'url' => 'https://docs.n8n.io/integrations/builtin/core-nodes/n8n-nodes-base.httprequest/', 'date' => '2026-10-05'],
        ['titre' => "n8n Docs, revue humaine des outils d'un agent (human-in-the-loop)", 'url' => 'https://docs.n8n.io/advanced-ai/human-in-the-loop-tools/', 'date' => '2026-10-05'],
        ['titre' => "n8n Docs, index de la documentation (llms.txt)", 'url' => 'https://docs.n8n.io/llms.txt', 'date' => '2026-10-05'],
        ['titre' => "n8n, offres et tarifs de n8n Cloud", 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => "Anthropic, tarifs de l'API Claude (Opus 4.6, Haiku 4.5)", 'url' => 'https://platform.claude.com/docs/en/about-claude/pricing', 'date' => '2026-10-05'],
        ['titre' => "OpenAI, tarifs de l'API (GPT-5.2, traitement standard)", 'url' => 'https://developers.openai.com/api/docs/pricing', 'date' => '2026-10-05'],
        ['titre' => "Mistral AI, fiche du modèle Mistral Small 4 (alias mistral-small-latest, prix)", 'url' => 'https://docs.mistral.ai/models/model-cards/mistral-small-4-0-26-03', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, code du numérique, loi n° 2017-20 (articles 391 et 401)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, RGPD, règlement (UE) 2016/679 (articles 22 et 28)", 'url' => 'https://eur-lex.europa.eu/eli/reg/2016/679/oj', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, questions et réponses sur la maîtrise de l'IA, article 4 (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "FDFP, financement du plan de formation", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, statuts du FODEFCA, décret n° 2022-286 (article 35)", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, financement du personnel des entreprises", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, certification Qualiopi exigée depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['dolibarr-utilisateurs', 'integrer-ia-logiciels-existants', 'odoo-ia', 'whatsapp-odoo-dolibarr-crm', 'n8n-avance', 'ia-processus-metier'],
        'services'    => ['integration-dolibarr', 'integration-ia-entreprise', 'automatisation-ia'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
    ],
];
