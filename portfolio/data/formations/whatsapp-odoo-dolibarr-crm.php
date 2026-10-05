<?php
// ============================================================
// data/formations/whatsapp-odoo-dolibarr-crm.php · Fiche formation
// « WhatsApp relié à Odoo, Dolibarr et au CRM » (vague 1B, lot A, domaine
// ia-systemes-existants). Angle propre : former les équipes qui TRAVAILLENT
// avec WhatsApp branché sur leurs logiciels de gestion (envoi depuis le
// document, réponses tracées, relances, historique client, consentement).
// L'application seule relève de whatsapp-business ; l'API et les robots, de
// chatbot-whatsapp ; le projet d'intégration, du pilier integration-whatsapp.
// Faits relevés le 05/10/2026 : documentation Odoo 20.0 (WhatsApp, règles
// d'automatisation), page Tarification d'Odoo, GitHub de Dolibarr (24.0.1),
// DoliStore, wiki Dolibarr, n8n, HubSpot, Meta (fenêtre de service, modèles,
// consentement, coexistence), politique WhatsApp du 23/09/2026, ARCEP Bénin,
// loi n° 2017-20 (PDF du SGG, articles 332 à 334 et 415), CNIL. Tarifs de
// Meta : faits vérifiés de la table du catalogue, repris tels quels.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation WhatsApp relié à Odoo, Dolibarr et au CRM : envoyer, répondre et relancer depuis vos logiciels, sans perdre un seul échange client",
    'title'   => 'Formation WhatsApp, Odoo, Dolibarr et CRM | Richard SALANON',
    'meta'    => "Formation des équipes à WhatsApp relié à Odoo, Dolibarr ou au CRM : modèles, réponses tracées, relances et historique client complet, sur devis.",
    'en_bref' => "Cette formation apprend aux commerciaux, au service client, au recouvrement et au référent interne à travailler avec WhatsApp branché sur Odoo, Dolibarr ou un CRM : envoyer un devis ou une facture depuis le document, répondre dans la fenêtre de 24 heures, rattacher chaque échange à la fiche du client, suivre les relances automatiques et respecter le consentement. Elle dure deux jours, ou une journée et demie selon les rôles, suivis d'une séance de retour à distance. Elle se tient dans vos locaux, en inter-entreprises, à distance ou en formule hybride, sur vos propres outils. Le prix est établi sur devis.",
    'publie'  => '2026-10-05',
    'maj'     => '2026-10-05',
    'domaine' => 'ia-systemes-existants',
    'forte'   => true,
    'duree'   => 'Deux jours, ou une journée et demie selon les rôles, puis une séance de suivi',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : suivre un message du logiciel jusqu'au téléphone du client, et retour",
            'duree'  => '3 h 30',
            'points' => [
                "Tour de table des usages actuels : qui écrit aux clients sur WhatsApp, depuis quel téléphone, pour envoyer quoi, et où ces échanges sont conservés aujourd'hui.",
                "Les trois façons d'utiliser WhatsApp en entreprise : l'application gratuite sur un téléphone, la plateforme de Meta branchée sur un logiciel, et la coexistence des deux sur un même numéro.",
                "Lire l'installation de votre entreprise : compte de la plateforme, numéro, logiciel relié (Odoo, Dolibarr avec son module, CRM, flux n8n ou Make), et personne qui détient les accès.",
                "La fenêtre de service de 24 heures expliquée avec des cas concrets : ce qu'on peut écrire librement, ce qui exige un modèle approuvé, ce qui rouvre la fenêtre.",
                "Les trois catégories de modèles (marketing, utilitaire, authentification) et pourquoi une facture qui se termine par une promotion change de catégorie.",
                "Ce que coûte un message depuis le 1er octobre 2026 : le quota mensuel de 1 000 messages de service gratuits par numéro, et ce qui se passe quand il est épuisé.",
                "Exercice de contrôle : chaque participant trace sur papier le trajet d'un message réel de votre entreprise, du bouton cliqué à l'accusé de lecture.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : envoyer depuis le document, devis, commande, facture ou rendez-vous",
            'duree'  => '3 h 30',
            'points' => [
                "Assainir la fiche du client avant tout envoi : numéro au format international, ancien format béninois à 8 chiffres repéré, doublons fusionnés, champ de consentement renseigné.",
                "Odoo : envoyer un modèle depuis un devis, une facture ou une opportunité, choisir le bon modèle, contrôler les variables remplies et le document joint avant de valider.",
                "Dolibarr : envoyer depuis la fiche d'un tiers ou d'une facture avec le module installé chez vous, puis vérifier la trace laissée dans l'agenda du tiers.",
                "CRM du marché : retrouver la conversation sur la fiche du contact, et comprendre pourquoi un message n'y apparaît pas quand le numéro enregistré diffère.",
                "Lire les statuts d'un message (envoyé, distribué, lu, en échec) et la cause d'un échec, puis décider qui corrige quoi.",
                "Ce qu'on ne demande jamais sur WhatsApp : numéro complet de carte, de compte bancaire ou de pièce d'identité ; la bonne façon de proposer un paiement Mobile Money ou un lien de paiement.",
                "Exercice de contrôle : trois envois réels vers des numéros de test, dont un volontairement mal formaté, avec le diagnostic écrit de l'échec.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : répondre à plusieurs, répartir les conversations et garder l'historique",
            'duree'  => '3 h 30',
            'points' => [
                "Où arrivent les réponses des clients : discussion d'Odoo, boîte partagée du CRM, agenda ou fil du tiers dans Dolibarr, et qui est prévenu.",
                "Régler les personnes notifiées, ajouter un collègue à une conversation, passer la main proprement à la fin d'une journée ou avant un congé.",
                "Répondre dans la fenêtre de 24 heures, relancer avec un modèle quand elle est fermée, et comprendre la règle des 15 jours propre à Odoo.",
                "Rattacher un échange à la bonne fiche : client, opportunité, commande ou facture, avec une note claire quand le client promet un paiement ou conteste un montant.",
                "Écrire la charte de réponse de l'équipe : délais, formules, ton, langues, sujets à faire remonter au responsable, et chemin vers un humain toujours visible.",
                "Ce que la coexistence change pour l'équipe : le téléphone et le logiciel lisent les mêmes conversations, avec des fonctions de l'application désactivées.",
                "Exercice de contrôle : une matinée simulée de vingt messages entrants, répartis, traités et rattachés aux fiches, puis comparés d'un groupe à l'autre.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : relances et automatismes, les lire, les régler et savoir les arrêter",
            'duree'  => '3 h 30',
            'points' => [
                "Les règles d'automatisation d'Odoo qui envoient un WhatsApp : déclencheur sur une date, délai avant ou après, condition, modèle utilisé ; lecture des règles existantes chez vous.",
                "Dolibarr et les flux externes : reconnaître un flux n8n ou Make déclenché par un événement de Dolibarr, lire son historique d'exécutions, repérer l'envoi qui a échoué.",
                "Suspendre une relance pour un client qui a payé en partie, qui conteste ou qui a demandé à ne plus recevoir de messages, sans casser l'automatisme pour les autres.",
                "Gérer une demande d'arrêt : accusé de réception, mise à jour de la fiche, liste des refus tenue à jour, vérification à la relance suivante.",
                "Pour le référent : créer ou corriger un modèle, choisir sa catégorie, le soumettre à Meta, le synchroniser, réagir à un refus ou à une mise en pause.",
                "Le tableau de bord hebdomadaire : messages partis, échecs, réponses, factures réglées après relance, quota de messages de service consommé.",
                "Évaluation finale : un cas tiré au sort, traité seul du premier envoi au rattachement de la réponse, avec la correction d'une relance mal ciblée.",
            ],
        ],
        [
            'titre'  => "Séance de suivi, trois à quatre semaines plus tard : ce que montrent les vraies conversations",
            'duree'  => '2 h, à distance',
            'points' => [
                "Lecture des statistiques de la période : échecs d'envoi, délais de réponse, conversations restées sans propriétaire.",
                "Revue de dix fiches clients tirées au hasard : numéro, consentement, échanges rattachés, notes de promesse de paiement.",
                "Correction des modèles mal compris par les clients, des relances trop fréquentes et des règles de notification mal réglées.",
                "Liste écrite des demandes d'évolution à transmettre à l'intégrateur, distinguées de ce que l'équipe peut corriger seule.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => 'Deux jours, ou une journée et demie selon les rôles, puis 2 h de suivi'],
        ['l' => 'Public', 'v' => 'Commerciaux, service client, recouvrement, référent Odoo, Dolibarr ou CRM'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saura faire votre équipe à la fin de la formation, et que la formation laisse-t-elle de côté ?",
            'paragraphes' => [
                "Relier WhatsApp à Odoo, à Dolibarr ou à un CRM est un projet technique de quelques semaines. Le faire vivre est un travail quotidien qui dure des années, et il repose sur des personnes qui n'ont jamais assisté au paramétrage : le commercial qui envoie un devis, l'assistante qui répond aux clients, le comptable qui relance les impayés. Cette formation s'adresse à elles. Elle part de votre installation réelle, avec vos modèles de messages, vos fiches clients et vos règles de relance, et elle apprend à s'en servir sans contourner le logiciel par le téléphone personnel.",
                "À la fin des deux jours, chaque participant sait faire seul huit choses, vérifiées par un exercice : mettre une fiche client en état de recevoir un message ; envoyer un modèle depuis un devis, une commande, une facture ou une opportunité ; lire le statut d'un envoi et diagnostiquer un échec ; répondre à un client dans la fenêtre de 24 heures et le relancer correctement quand elle est fermée ; rattacher un échange au bon document ; suspendre une relance automatique pour un client précis ; traiter une demande d'arrêt ; et lire le tableau de bord hebdomadaire des messages.",
                "La formation ne construit pas l'intégration. Ouvrir le compte de la plateforme de Meta, brancher Odoo ou Dolibarr, développer un flux ou choisir un module relèvent du service d'<a href=\"/services/integration-whatsapp\">intégration WhatsApp</a>. Elle n'enseigne pas non plus l'application gratuite utilisée seule sur un téléphone, catalogue et étiquettes compris : c'est l'objet de la <a href=\"/formations/whatsapp-business\">formation WhatsApp Business pour vendre</a>. Les robots qui répondent seuls et la programmation de l'API ont leur propre formation, consacrée au chatbot WhatsApp et à l'API, ainsi que le service <a href=\"/services/agents-ia-chatbot-whatsapp\">agents IA et chatbot WhatsApp</a>.",
                "Elle suppose enfin que les gestes de base du logiciel de gestion sont acquis. Une équipe qui découvre encore la saisie d'un devis ou l'enregistrement d'un règlement commencera par la <a href=\"/formations/odoo-utilisateurs\">formation Odoo pour vos équipes</a> ou la <a href=\"/formations/dolibarr-utilisateurs\">formation Dolibarr pour vos équipes</a>. Les deux parcours s'enchaînent bien : d'abord tenir le logiciel, ensuite y faire entrer les conversations des clients.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi une intégration bien faite échoue-t-elle souvent du côté des équipes ?",
            'paragraphes' => [
                "Prenons un distributeur de matériel électrique qui vient de relier son Odoo à WhatsApp. Les devis partent désormais d'un clic, avec le PDF joint, et les factures échues déclenchent un rappel trois jours après l'échéance. Trois semaines plus tard, la direction constate que la moitié des devis partent encore du téléphone des commerciaux, par habitude, et que leurs réponses ne remontent pas dans le logiciel. Un client a reçu une relance alors qu'il avait payé la veille en espèces au comptoir. Un autre a répondu au rappel en promettant de régler vendredi, et personne ne l'a vu.",
                "Aucune de ces difficultés n'est technique. Le paramétrage fonctionne ; ce sont les gestes qui manquent. Le commercial ne sait pas que la réponse du client arrive dans la discussion du logiciel, pas sur son téléphone. La caissière ne sait pas que l'encaissement au comptoir doit être saisi le jour même pour arrêter la relance. Le comptable ne sait pas qu'une promesse de paiement se note sur la facture, sinon la relance suivante part comme si de rien n'était.",
                "La formation installe ces gestes, poste par poste. Elle donne aussi à chacun une idée juste de ce que fait la machine et de ce qu'elle ne fait pas. Un rappel automatique ne lit pas la réponse du client ; il ne sait pas qu'un litige est en cours ; il part à l'heure prévue, même un jour de fête. L'équipe apprend donc à garder la main : savoir où regarder, quand intervenir, et comment arrêter un envoi sans tout débrancher.",
                "Le bénéfice se mesure vite, et la formation montre comment le mesurer : nombre de devis envoyés depuis le logiciel plutôt que depuis un téléphone, part des conversations rattachées à une fiche, délai moyen de réponse, factures réglées dans la semaine qui suit un rappel. Ces chiffres sont les vôtres, relevés dans votre base ; la formation n'en promet aucun à l'avance.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quel matériel ?",
            'intro' => "Le public est celui qui écrit aux clients au nom de l'entreprise, ou qui surveille ce qui leur est écrit. Le programme se découpe par rôle : tout le monde suit la première journée, puis chacun rejoint la demi-journée qui le concerne.",
            'items' => [
                ['titre' => 'Commerciaux et assistants commerciaux', 'texte' => "Ils envoient les devis et les confirmations de commande, reçoivent les questions des prospects et doivent retrouver, six mois plus tard, ce qui a été promis à un client. Leur priorité : envoyer depuis le document et répondre là où l'historique se garde."],
                ['titre' => 'Service client et accueil', 'texte' => "Ils traitent les messages entrants, souvent à plusieurs sur un même numéro. Ils apprennent la répartition des conversations, la charte de réponse, le passage de relais et le moment où une question doit remonter à un responsable."],
                ['titre' => 'Recouvrement et comptabilité clients', 'texte' => "Ils suivent les rappels de factures échues, notent les promesses de paiement, saisissent les règlements partiels et suspendent la relance d'un client en litige. Ce sont eux qui protègent la relation quand l'automatisme se trompe de cible."],
                ['titre' => 'Le référent interne', 'texte' => "Administrateur d'Odoo ou de Dolibarr, utilisateur avancé du CRM : il crée et corrige les modèles, règle les notifications, lit les flux d'automatisation et sert d'interlocuteur à l'intégrateur. Il suit toutes les demi-journées."],
                ['titre' => 'La direction', 'texte' => "Une heure suffit souvent au dirigeant : comprendre la fenêtre de 24 heures, le coût des messages, le consentement, et lire le tableau de bord hebdomadaire. Elle se place à la fin du deuxième jour."],
                ['titre' => 'Prérequis', 'texte' => "Savoir utiliser son logiciel de gestion au quotidien et un smartphone. Aucune notion technique n'est demandée, sauf pour le référent, qui doit avoir les droits d'administration nécessaires à la modification des modèles."],
                ['titre' => 'Matériel et accès', 'texte' => "Un ordinateur par participant avec son propre compte dans le logiciel, un téléphone pour recevoir les messages de test, et l'accès à une copie de test de la base ou, à défaut, à des fiches de test clairement marquées. Le numéro de test fourni par Meta, limité à cinq destinataires, convient aux exercices quand le numéro réel ne doit pas servir."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices les participants font-ils sur vos propres outils ?",
            'items' => [
                ['titre' => "Relever les messages qui partent aujourd'hui", 'duree' => 'Avant la session', 'texte' => "Vous listez, sans vocabulaire technique, les messages que l'entreprise envoie déjà par WhatsApp : devis, confirmations, rappels de rendez-vous, relances. Pour chacun, qui l'envoie, depuis quel appareil, et où la trace reste. Cette liste fixe les cas d'exercice."],
                ['titre' => 'Auditer vingt fiches clients', 'duree' => '40 minutes', 'texte' => "Vingt fiches tirées de votre base sont contrôlées : format du numéro, indicatif, doublons, consentement noté ou non, langue du client. Le groupe compte les fiches qui auraient fait échouer un envoi, puis corrige celles qui peuvent l'être tout de suite."],
                ['titre' => 'Envoyer trois documents depuis le logiciel', 'duree' => '1 heure', 'texte' => "Un devis, une facture et un rappel de rendez-vous partent vers les téléphones des participants, par les modèles approuvés de votre compte. Chacun vérifie les variables remplies, la pièce jointe et le rendu à l'écran du destinataire, puis retrouve l'envoi dans le fil du document."],
                ['titre' => 'Diagnostiquer un échec préparé', 'duree' => '30 minutes', 'texte' => "Un envoi vers un numéro au mauvais format, un autre avec un modèle en pause, un troisième hors de la fenêtre de 24 heures sans modèle. Pour chacun, le participant lit le statut, nomme la cause et propose la correction."],
                ['titre' => 'La matinée simulée', 'duree' => '1 h 15', 'texte' => "Le formateur et les participants jouent vingt clients : demande de prix, réclamation, promesse de paiement, photo d'un bordereau de versement, question hors sujet, demande d'arrêt. Les conversations sont réparties, traitées, rattachées aux bonnes fiches, puis relues ensemble."],
                ['titre' => 'Suspendre une relance', 'duree' => '30 minutes', 'texte' => "Trois clients en retard de paiement, trois situations : un règlement partiel en espèces, un litige sur une livraison, un refus de recevoir des messages. Le participant fait en sorte que chacun reçoive ce qui convient, et rien d'autre, puis le vérifie dans la liste des envois programmés."],
                ['titre' => 'Écrire un modèle et le défendre', 'duree' => '45 minutes', 'texte' => "Par petits groupes, rédaction d'un modèle utilitaire pour un besoin réel de l'entreprise, avec ses variables, sa catégorie et sa langue. Les autres groupes jouent l'examinateur de Meta et signalent tout ce qui ferait basculer le texte en marketing."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Qui fait quoi dans l'équipe une fois WhatsApp relié aux logiciels ?",
            'legende' => "Répartition type, ajustée pendant la formation à votre organisation. Dans une petite structure, une même personne tient plusieurs rôles ; l'important est que chaque geste ait un responsable nommé.",
            'entetes' => ['Rôle', "Ce qu'il fait chaque jour", "Ce qu'il vérifie chaque semaine", "Ce qu'il ne fait jamais"],
            'lignes'  => [
                ['Commercial', 'Envoie devis et confirmations depuis le document, répond aux prospects dans le logiciel', 'Ses devis sans réponse, ses conversations non rattachées', 'Envoyer un document client depuis son téléphone personnel'],
                ['Service client', 'Prend les conversations entrantes, répond dans la fenêtre de 24 heures, passe le relais', 'Les conversations restées sans propriétaire', "Laisser un client sans réponse humaine quand il en demande une"],
                ['Recouvrement', 'Note les promesses de paiement, saisit les règlements, suspend les relances en litige', 'La liste des relances programmées et leurs cibles', "Relancer un client qui a demandé l'arrêt des messages"],
                ['Référent', "Corrige les modèles, règle les notifications, répond aux questions de l'équipe", "Les échecs d'envoi, la qualité des modèles, le quota consommé", "Modifier une règle d'automatisation sans prévenir les utilisateurs"],
                ['Direction', 'Rien au quotidien', 'Le tableau de bord : envois, échecs, réponses, règlements après relance', "Demander d'écrire à des contacts qui n'ont pas donné leur accord"],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Odoo, Dolibarr ou CRM : qu'est-ce qui change pour l'utilisateur au quotidien ?",
            'legende' => "Comportements décrits par la documentation d'Odoo 20.0, le wiki de Dolibarr, DoliStore et la base de connaissances de HubSpot, consultés le 5 octobre 2026. Votre installation peut différer selon l'édition, le module ou le flux retenu par l'intégrateur.",
            'entetes' => ["Question de l'utilisateur", 'Odoo Enterprise', 'Dolibarr', 'CRM du marché (exemple de HubSpot)'],
            'lignes'  => [
                ["D'où part le message ?", "D'un modèle rattaché au type de document : devis, facture, opportunité, rendez-vous", "Du bouton ou de l'action ajoutés par le module installé, ou d'un flux externe déclenché par un événement", 'De la fiche du contact ou de la boîte de réception partagée'],
                ['Où arrive la réponse du client ?', "Dans une fenêtre de discussion, puis dans l'application Discussion", "Selon le module : fil du tiers, événement d'agenda, ou outil externe", 'Dans la boîte de réception des conversations'],
                ['Qui est prévenu ?', 'Les utilisateurs désignés dans le compte WhatsApp, puis ceux de la conversation', 'Selon le module ou le flux', "Selon les règles d'attribution de la boîte"],
                ["Où reste l'historique ?", 'Sur le document et dans la conversation', "Sur la fiche du tiers si le module ou le flux l'enregistre", 'Sur la chronologie du contact, si le numéro correspond à celui de la fiche'],
                ["Que faut-il vérifier avant d'envoyer ?", 'Le numéro du champ utilisé par le modèle, les variables, la pièce jointe', "Le numéro du tiers et la méthode d'envoi du module", 'Le numéro du contact et son consentement'],
                ["Prérequis côté éditeur", 'Édition Enterprise et compte de la plateforme de Meta', "Module ou flux choisi par l'intégrateur, Dolibarr ne livrant pas de connecteur", 'Marketing Hub ou Service Hub en version Professional ou Enterprise'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Fenêtre de 24 heures, modèles, quota : quelles règles de Meta chaque utilisateur doit-il connaître ?",
            'paragraphes' => [
                "La première règle tient en une phrase. Selon la <a href=\"https://developers.facebook.com/docs/whatsapp/cloud-api/guides/send-messages\">documentation de Meta sur l'envoi des messages</a>, consultée le 5 octobre 2026, chaque message ou appel d'un client ouvre une fenêtre de service de 24 heures ; pendant ce délai, l'entreprise répond librement, et chaque nouveau message du client remet le compteur à 24 heures. Une fois la fenêtre fermée, seuls des modèles approuvés peuvent partir. Pour un commercial, cela veut dire qu'une réponse tardive à un prospect ne peut plus être un simple texte : il faut passer par un modèle.",
                "Les modèles se répartissent en trois catégories, que la documentation d'Odoo 20.0 définit ainsi : marketing pour les promotions et tout ce qui n'entre pas ailleurs, utilitaire pour un message lié à une transaction, un compte, une commande ou une demande précise du client, authentification pour les codes à usage unique. La même documentation prévient qu'une mauvaise catégorie peut valoir un signalement ou un refus de Meta. La <a href=\"https://developers.facebook.com/docs/whatsapp/business-management-api/message-templates\">page de Meta sur les modèles</a> indique que l'examen peut prendre jusqu'à 24 heures, et qu'un modèle qui reçoit des avis négatifs ou peu de lectures peut être mis en pause, puis désactivé.",
                "Le coût, ensuite. Meta facture la plateforme par message depuis le 1er juillet 2025. Depuis le 1er octobre 2026, selon sa page de tarification lue le 5 octobre 2026, chaque numéro professionnel dispose d'un quota mensuel de 1 000 messages de service gratuits, non reportable d'un mois sur l'autre et facturé au-delà ; un compte sans moyen de paiement cesse d'envoyer ses messages de service une fois ce quota épuisé. Les organisations gouvernementales et à but non lucratif éligibles restent gratuites au-delà du quota jusqu'au 31 décembre 2027. Une équipe qui répond beaucoup depuis le logiciel doit donc savoir lire sa consommation.",
                "Le consentement, enfin. La <a href=\"https://whatsappbusiness.com/fr/policy/\">politique de la messagerie WhatsApp Business</a>, mise à jour le 23 septembre 2026, n'autorise à écrire qu'à une personne qui a donné son numéro et accepté de recevoir vos messages ; elle impose de respecter les demandes d'arrêt et de laisser un moyen de joindre un humain. La <a href=\"https://developers.facebook.com/docs/whatsapp/overview/getting-opt-in\">page de Meta sur le recueil du consentement</a> précise que l'accord peut se recueillir hors de WhatsApp, sur un site, par SMS, au téléphone ou sur papier, à condition de nommer l'entreprise. C'est pourquoi la formation fait renseigner ce consentement dans la fiche du client.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Sur quels outils et quelles versions la formation porte-t-elle, et que coûtent-ils ?",
            'legende' => "Prix et versions publiés par les éditeurs, relevés le 5 octobre 2026, hors taxes. Ces sommes se paient à l'éditeur ou à Meta, jamais au formateur ; la formation porte sur ce qui est installé chez vous.",
            'entetes' => ['Outil', 'Version ou offre', 'Coût publié', 'Place dans la formation'],
            'lignes'  => [
                ['Odoo, application WhatsApp', 'Odoo 20.0, sortie en septembre 2026 ; versions antérieures acceptées', "Incluse dans les plans Standard et Personnalisé, qui comprennent toutes les applications ; Standard affiché à 19,90 € par utilisateur et par mois en paiement annuel, prix remisé pendant les 12 premiers mois", "Envoi depuis les documents, discussion, notifications, règles d'automatisation"],
                ['Odoo Community', 'Toutes versions', 'Gratuit', "L'application WhatsApp n'y fonctionne pas : la formation porte alors sur le module tiers ou le flux installé"],
                ['Dolibarr ERP CRM', '24.0.1, publiée le 7 septembre 2026', 'Gratuit, logiciel libre', 'Fiche du tiers, factures, agenda, et le module ou le flux qui envoie les messages'],
                ['Modules WhatsApp de DoliStore', '24 modules trouvés par une recherche « whatsapp »', 'Du gratuit à 299 € HT', "Le module installé chez vous ; la formation apprend à reconnaître sa méthode d'envoi"],
                ['n8n', 'Cloud ou auto-hébergé', "Offre Cloud Starter à 20 € par mois en paiement annuel, pour 2 500 exécutions ; version auto-hébergée disponible gratuitement", "Lire un flux, son historique d'exécutions et ses erreurs"],
                ['HubSpot, boîte de réception WhatsApp', 'Marketing Hub ou Service Hub', "Versions Professional ou Enterprise exigées, selon la grille de l'éditeur", 'Exemple de CRM du marché : boîte partagée et chronologie du contact'],
                ['Plateforme WhatsApp Business de Meta', 'API Cloud, directe ou par un fournisseur', 'Facturation par message ; 1 000 messages de service gratuits par mois et par numéro depuis le 1er octobre 2026, facturés au-delà', 'Fenêtre de 24 heures, modèles, quota, consentement'],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle menée pour que les gestes tiennent après la session ?",
            'intro' => "La méthode suit une règle simple : on ne montre rien qui ne puisse être refait tout de suite, par chacun, dans votre logiciel. Les messages de test partent vers les téléphones de la salle, jamais vers vos clients.",
            'items' => [
                ['titre' => 'Sur votre installation, pas sur une démonstration', 'texte' => "Les modèles, les règles de relance et les fiches utilisés sont les vôtres, sur une copie de test de la base quand votre hébergement le permet, ou sur des fiches de test marquées et supprimées à la fin. Une installation Odoo ne ressemble pas à une autre, encore moins un module Dolibarr."],
                ['titre' => 'Des groupes de trois à six personnes par rôle', 'texte' => "Un groupe de commerciaux et un groupe de recouvrement n'ont pas les mêmes questions. Les petits groupes permettent au formateur de regarder chaque écran et chaque téléphone de test."],
                ['titre' => 'Vos conversations, anonymisées', 'texte' => "Les vrais échanges avec les clients nourrissent les exercices, mais ils sont anonymisés avant d'être montrés au groupe. Aucun numéro de client n'est copié hors de votre base."],
                ['titre' => "Des erreurs préparées à l'avance", 'texte' => "Numéro mal formaté, modèle en pause, fenêtre fermée, relance mal ciblée : les pannes les plus fréquentes sont reproduites pour que chacun apprenne à les reconnaître avant de les rencontrer devant un client."],
                ['titre' => 'Des supports tirés de votre base', 'texte' => "Une fiche réflexe par geste, capturée sur vos écrans ; la charte de réponse écrite par l'équipe ; la liste des modèles avec leur usage ; la procédure de suspension d'une relance ; le modèle de tableau de bord hebdomadaire. Tout est modifiable, pour former un nouvel arrivant sans refaire la session."],
                ['titre' => 'Une évaluation sur un cas réel', 'texte' => "Chaque participant traite seul un cas tiré au sort, du premier envoi au rattachement de la réponse. Le résultat est remis à la direction avec les feuilles de présence ; il dit qui est autonome et qui doit être accompagné."],
                ['titre' => 'Un suivi après la session', 'texte' => "Un canal direct pour les questions d'usage pendant quelques semaines, puis la séance de suivi à distance, qui part des statistiques réelles de la période et des fiches tirées au hasard."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon votre activité, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => 'Distribution de matériel, à Abidjan, sous Odoo', 'probleme' => "Les rappels de factures échues partent bien, mais les clients répondent par une promesse de paiement ou une photo de bordereau que personne ne lit, et la relance suivante tombe sur un client qui a déjà payé.", 'solution' => "Le recouvrement apprend à lire les réponses dans la discussion d'Odoo, à noter la promesse sur la facture, à saisir le règlement le jour même et à suspendre la relance d'un client en litige. Le tableau de bord compte chaque semaine les factures réglées après un rappel."],
                ['secteur' => 'Cabinet médical ou clinique, à Cotonou, sous Dolibarr', 'probleme' => "Les rappels de rendez-vous passent par un module de DoliStore, mais certains partent vers d'anciens numéros à 8 chiffres et les annulations reçues par WhatsApp ne libèrent pas le créneau.", 'solution' => "Audit des fiches patients et mise au format à 10 chiffres, procédure de traitement d'une annulation reçue par message, et règle stricte : aucune information médicale dans un modèle, seulement la date, l'heure et le moyen de joindre l'accueil."],
                ['secteur' => 'Quincaillerie et vente aux professionnels, à Dakar', 'probleme' => "Les commandes arrivent par WhatsApp sous forme de listes photographiées, sont recopiées à la main dans Odoo, et le client ne reçoit jamais la confirmation chiffrée avant la livraison.", 'solution' => "Les vendeurs créent le devis depuis la conversation, l'envoient par le modèle de confirmation avec le PDF, et rattachent la réponse du client à la commande. Le chef d'agence suit les devis restés sans réponse au-delà de 24 heures."],
                ['secteur' => 'Centre de formation ou école privée, à Lomé', 'probleme' => "Les demandes d'inscription arrivent par WhatsApp, le CRM n'en garde aucune trace, et les relances aux prospects partent depuis le téléphone du directeur, sans consentement noté.", 'solution' => "Chaque demande devient une opportunité dans le CRM, le consentement est recueilli dans le formulaire d'inscription, et les relances passent par des modèles approuvés. La charte de réponse fixe les délais pendant les périodes de rentrée."],
                ['secteur' => 'Association ou organisation à but non lucratif, au Bénin ou au Sénégal', 'probleme' => "L'organisation craint le coût des messages de service quand elle répond à des centaines de bénéficiaires par mois depuis son logiciel.", 'solution' => "Lecture des conditions de Meta : les organisations à but non lucratif éligibles restent gratuites au-delà du quota de 1 000 messages de service jusqu'au 31 décembre 2027. La formation montre comment suivre la consommation et préparer l'échéance."],
                ['secteur' => 'PME de services, en France ou en Belgique, sous HubSpot', 'probleme' => "La boîte de réception WhatsApp du CRM est active, mais une partie des messages n'apparaît pas sur la fiche des contacts, et les commerciaux continuent d'écrire depuis leur application personnelle.", 'solution' => "Mise au format international des numéros pour que la chronologie du contact se remplisse, règles d'attribution de la boîte, durées de conservation alignées sur le référentiel de la CNIL, et fin de l'usage des téléphones personnels pour les clients."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Garder l'application sur le téléphone et le logiciel en même temps : que change la coexistence ?",
            'paragraphes' => [
                "Beaucoup d'entreprises ne veulent pas renoncer à l'application WhatsApp Business sur le téléphone de l'accueil, même une fois le logiciel relié. Meta le permet sous le nom de coexistence. Selon sa <a href=\"https://developers.facebook.com/docs/whatsapp/embedded-signup/custom-flows/onboarding-business-app-users\">documentation consultée le 5 octobre 2026</a>, le même numéro sert à la fois à l'application et à l'API Cloud, les messages sont recopiés d'un côté à l'autre, et jusqu'à six mois d'historique peuvent être synchronisés si l'entreprise l'accepte. Les messages envoyés depuis l'application restent gratuits.",
                "Pour l'équipe, la coexistence a un prix en habitudes. La même documentation indique que les listes de diffusion de l'application sont désactivées, de même que les messages éphémères, les messages à vue unique et le partage de position en direct dans les conversations individuelles. Le débit du numéro est fixé à 20 messages par seconde. Une vendeuse qui envoyait ses promotions par liste de diffusion doit donc apprendre un autre circuit, et l'équipe doit décider qui répond depuis le téléphone et qui répond depuis le logiciel, pour ne pas répondre deux fois au même client.",
                "La formation tranche ces questions avec vous : quel appareil reste à l'accueil, quelles conversations se traitent dans le logiciel, comment une réponse donnée sur le téléphone est rattachée à la fiche du client. Sans ces règles, la coexistence recrée exactement le problème que l'intégration devait résoudre : un historique éclaté entre un appareil et une base de données.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Dans vos locaux, en inter-entreprises, à distance ou en formule hybride : quel format choisir ?",
            'legende' => "Le format se décide au premier échange, selon le nombre de rôles à former, la dispersion des équipes et la possibilité de préparer une copie de test de la base. Dans tous les cas, les exercices se font sur votre installation.",
            'entetes' => ['Format', 'Pour qui', 'Durée habituelle', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', "Une entreprise qui vient de relier WhatsApp à son logiciel, ou qui veut reprendre en main une intégration mal utilisée", 'Deux jours, ou une journée et demie si certains rôles sont absents', 'Dans vos locaux, groupes par rôle, copie de test préparée une semaine avant'],
                ['Inter-entreprises', "Utilisateurs de plusieurs entreprises équipées du même logiciel, par exemple un réseau de distributeurs sous Odoo", 'Une journée et demie', "Instance de démonstration commune pour les exercices, puis une séance individuelle sur la base de chacun"],
                ['À distance', 'Équipes réparties entre plusieurs villes, entreprises en Europe ou au Canada', 'Quatre séances de deux heures et demie', "Visioconférence, partage d'écran du logiciel, téléphones de test des participants, exercices envoyés la veille"],
                ['Hybride', 'Équipes qui veulent démarrer ensemble puis avancer par rôle', 'Une journée en salle, puis deux séances à distance', 'Socle commun sur place, demi-journées par rôle et suivi à distance'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et comment se règle-t-elle ?",
            'intro'      => "Aucun tarif n'est publié : le prix est fixé sur devis, après un premier échange sur votre logiciel, votre installation WhatsApp, les rôles à former et le format. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. La facture précise l'intitulé, les dates, la durée et le nombre de participants.",
            'items'      => [
                ['offre' => 'Socle commun', 'prix' => 'Sur devis', 'inclus' => ['Première journée pour tous les rôles', 'Audit de vingt fiches clients', 'Envois de test depuis vos documents']],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Le socle commun', 'Demi-journées réponse et relances', 'Charte de réponse et procédure de suspension', 'Évaluation individuelle']],
                ['offre' => 'Référent seul', 'prix' => 'Sur devis', 'inclus' => ['Modèles : rédaction, catégorie, soumission, synchronisation', 'Règles de notification et d\'automatisation', 'Lecture des flux et des échecs']],
                ['offre' => 'Suivi après la formation', 'prix' => 'Sur devis', 'inclus' => ['Séance de suivi à distance', 'Revue de fiches tirées au hasard', 'Liste des demandes pour l\'intégrateur']],
            ],
            'variations' => [
                'Le nombre de rôles et de groupes à former, chaque groupe ayant sa demi-journée.',
                'Le logiciel et l\'installation : Odoo Enterprise, Dolibarr avec module ou flux externe, CRM du marché.',
                'La préparation : copie de test de la base, modèles de démonstration à faire approuver, fiches à nettoyer.',
                'Le lieu : vos locaux, une salle louée, un déplacement hors de Cotonou.',
                'Le mode : présentiel, à distance ou hybride.',
                'La langue des séances et des supports, en français ou en anglais.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation continue peut-il financer une partie du coût ?",
            'paragraphes' => [
                "C'est possible dans certains pays, jamais automatique, et la réponse appartient au fonds, pas au formateur. En Côte d'Ivoire, la <a href=\"https://fdfp.ci/plan-de-formation/\">page du FDFP sur le plan de formation</a>, consultée le 5 octobre 2026, réserve le dépôt d'un plan aux entreprises à jour du paiement de leurs deux taxes de formation, et précise que le règlement n'intervient qu'après le suivi et le contrôle du fonds, puis l'approbation de sa commission permanente. Une session organisée avant la réponse du fonds reste donc à vos frais si le dossier n'aboutit pas.",
                "Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> présente un guichet consacré au personnel des entreprises et aux membres des organisations professionnelles, à côté des guichets individuels et des établissements de formation. Au Bénin, le FODEFCA fonctionne selon les statuts approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a> ; ses conditions se demandent directement à ses services. En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que, depuis le 1er janvier 2022, seuls les prestataires certifiés Qualiopi accèdent aux fonds publics ou mutualisés, ceux des OPCO compris.",
                "Richard SALANON ne détient ni la certification Qualiopi ni l'agrément d'un fonds. La démarche honnête consiste à transmettre le programme et le devis au fonds concerné, à attendre sa réponse écrite, et à décider de la session en supposant qu'aucune prise en charge n'est acquise. Les feuilles de présence, le programme et les résultats de l'évaluation remis en fin de formation restent utiles pour votre dossier comme pour votre propre suivi.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Quel réflexe vide l'historique client que l'intégration devait justement remplir ?",
            'texte' => "Continuer à « dépanner » depuis son téléphone personnel : un PDF transféré à la main parce que c'est plus rapide, une réponse donnée le soir depuis son propre WhatsApp, une promesse de remise faite hors du logiciel. Chaque geste de ce type crée un échange que personne d'autre ne verra, ni le collègue qui reprend le dossier, ni le comptable qui relance. Le jour où le commercial quitte l'entreprise, ces conversations partent avec lui. La formation fixe donc une règle écrite et simple : tout ce qui engage l'entreprise auprès d'un client passe par le logiciel, ou y est rattaché le jour même.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les semaines qui suivent la mise en route, et comment les éviter ?",
            'intro' => "Les problèmes qui apparaissent après une intégration se ressemblent d'une entreprise à l'autre. Voici les plus fréquents, et la parade travaillée pendant la session.",
            'items' => [
                ['titre' => 'Le règlement saisi trop tard', 'texte' => "Un client paie au comptoir ou par Mobile Money, l'encaissement n'est saisi que la semaine suivante, et le rappel automatique part entre-temps. La règle : tout règlement est saisi le jour même, et le recouvrement contrôle chaque matin la liste des relances du jour."],
                ['titre' => 'La promesse de paiement perdue', 'texte' => "Le client répond au rappel qu'il réglera vendredi ; la réponse reste dans la discussion, sans trace sur la facture. On note la promesse et sa date sur le document, et l'on décale la relance suivante en conséquence."],
                ['titre' => 'Le modèle qui glisse vers la publicité', 'texte' => "Un utilisateur ajoute une offre à la fin d'un message de facture. Le modèle peut alors être recatégorisé en marketing, refusé, ou coûter davantage. Toute modification de modèle passe par le référent, qui garde la liste des textes approuvés."],
                ['titre' => 'Le numéro au mauvais format', 'texte' => "Un numéro sans indicatif, avec un zéro en trop ou resté à l'ancien format béninois ne reçoit rien, et l'échec passe inaperçu si personne ne lit les statuts. Le référent consulte chaque semaine la liste des envois en échec et corrige les fiches."],
                ['titre' => 'La conversation sans propriétaire', 'texte' => "Plusieurs personnes sont prévenues, chacune pense qu'une autre répondra. La charte désigne qui prend les conversations entrantes à chaque moment de la journée, et qui reprend celles d'un collègue absent."],
                ['titre' => "L'automate qui parle à la place de l'entreprise", 'texte' => "Un rappel qui annonce un mauvais montant ou une pénalité inexistante engage l'entreprise. L'histoire du <a href=\"/histoires/air-canada-chatbot\">chatbot d'Air Canada</a> montre qu'une entreprise répond de ce que dit son outil automatique. Les variables des modèles sont donc relues sur des cas réels avant toute mise en service."],
                ['titre' => "La demande d'arrêt oubliée", 'texte' => "Un client écrit « stop » ou demande à ne plus être contacté, et la relance suivante part quand même. On met à jour la fiche immédiatement, on confirme au client, et la liste des refus est vérifiée à chaque nouvelle campagne de relance."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Connexion, numéros, langues, données personnelles : que change le contexte local ?",
            'paragraphes' => [
                "La connexion compte davantage qu'avec un téléphone seul. Les réponses des clients arrivent dans le logiciel par des notifications que Meta envoie à votre serveur ; si l'Odoo ou le Dolibarr est installé sur une machine au bureau, une coupure de courant ou d'accès à Internet suspend la réception, pendant que les clients croient avoir écrit. Les participants apprennent à reconnaître cette situation et à prévenir le référent. Une base hébergée en ligne réduit ce risque, mais ne dispense pas de vérifier chaque matin que les messages entrent.",
                "Les numéros, ensuite. Au Bénin, l'<a href=\"https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/\">ARCEP</a> a fait passer les numéros mobiles et fixes de 8 à 10 chiffres le 30 novembre 2024, par l'ajout du préfixe 01 ; depuis l'étranger, on compose +229, puis 01, puis l'ancien numéro. Une base de clients ouverte avant cette date contient presque toujours des numéros à l'ancien format, qui font échouer les envois. Le nettoyage de ces fiches est l'un des premiers exercices de la formation.",
                "Les langues, aussi. Chaque modèle est soumis à Meta dans une langue précise, qu'Odoo demande de choisir à sa création : il faut donc une version par langue. Une entreprise dont les clients lisent le français et l'anglais, ou qui veut une formule d'accueil en fon, en wolof ou en dioula, doit le prévoir dans ses modèles et dans la langue enregistrée sur la fiche du client. Les montants s'écrivent comme sur les factures, en francs CFA sans décimales en Afrique de l'Ouest et centrale.",
                "Au Bénin, la <a href=\"https://sgg.gouv.bj/doc/loi-2017-20/\">loi n° 2017-20 portant code du numérique</a> interdit, à son article 332, la prospection directe par messages automatisés sans consentement préalable ; l'absence de réponse ne vaut pas accord, et la preuve incombe à l'expéditeur. L'article 333 admet une exception pour un client existant, sur des produits analogues, s'il peut s'opposer à chaque message ; l'article 334 impose d'accuser réception d'une opposition et de tenir la liste des refus ; l'article 415 détaille ce qu'il faut dire à la personne lors de la collecte. Ces règles se traduisent, dans le logiciel, par des champs et des étiquettes que l'équipe tient à jour.",
                "En Europe, le RGPD s'applique aux conversations conservées dans le CRM. La <a href=\"https://www.cnil.fr/fr/questions-reponses-sur-les-referentiels-relatifs-la-gestion-des-activites-commerciales-et-des\">CNIL</a>, dans ses questions-réponses sur le référentiel de gestion des activités commerciales adopté le 28 janvier 2022, admet de conserver les données d'un client utilisées pour la prospection pendant la relation commerciale puis trois ans après, et celles d'un prospect trois ans après la collecte ou son dernier contact. Le référentiel n'est pas contraignant, mais tout écart doit se justifier. La formation <a href=\"/formations/ia-ethique-conformite\">IA, éthique et conformité des données</a> approfondit ces questions.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi suivre cette formation avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Cette formation se trouve au croisement de ce qu'il fait chaque semaine. Il installe Odoo et Dolibarr, construit des flux d'automatisation, et a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone. Il connaît donc le circuit complet d'un message, du modèle soumis à Meta jusqu'à la fiche du client dans le logiciel de gestion, et les endroits précis où ce circuit se rompt quand l'équipe n'a pas été formée.",
                "Son parcours tient en quelques faits : " . $ans . " ans d'expérience dans le numérique, une formation à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), la co-fondation d'<a href=\"https://audyxa.com\">Audyxa</a>, plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées selon ses propres déclarations, au numérique, à l'IA, à l'automatisation et aux ERP, et des missions dans " . count((array) fait('pays_travailles')) . " pays, d'Afrique de l'Ouest et centrale jusqu'en Europe et au Canada. Le détail figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a> et les pays servis sur la page des <a href=\"/zones/\">zones d'intervention</a>.",
                "Il n'est ni partenaire officiel d'Odoo, ni éditeur de Dolibarr, ni représentant de Meta, et ne prétend pas l'être. Ce qu'il propose se vérifie : une réponse sous 24 heures, un programme écrit avant la session, des exercices sur votre propre installation, une évaluation sur un cas réel, des supports qui restent chez vous, et un avis franc quand c'est l'intégration elle-même qu'il faut corriger avant de former qui que ce soit. Les autres formations du domaine sont réunies sur la page <a href=\"/formations/domaine/ia-systemes-existants\">IA dans vos systèmes existants</a>, l'ensemble du catalogue sur la page <a href=\"/formations/\">formations</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre équipe ?",
            'texte' => "Une intégration WhatsApp ne vaut que par les gestes de ceux qui s'en servent. Nettoyez les numéros, notez le consentement, envoyez depuis le document, répondez dans le logiciel, saisissez les règlements le jour même, et sachez arrêter une relance. Le reste, modèles, quota et règles de Meta, s'apprend en deux jours sur votre propre installation.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre équipe utilise-t-elle vraiment WhatsApp depuis vos logiciels ?",
            'texte'  => "Indiquez votre logiciel (Odoo, Dolibarr ou CRM), la façon dont WhatsApp y est relié, les rôles à former, la ville et la période visée : vous recevez une réponse sous 24 heures, puis un programme et un devis détaillés. Si l'intégration n'existe pas encore, le service d'<a href=\"/services/integration-odoo\">intégration Odoo</a> ou d'<a href=\"/services/integration-dolibarr\">intégration Dolibarr</a> peut la précéder, et la formation <a href=\"/formations/n8n\">n8n</a> prépare le référent aux flux d'automatisation.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander cette formation'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il que WhatsApp soit déjà relié à notre logiciel pour suivre la formation ?", 'r' => "C'est préférable, car les exercices se font sur votre installation. Si l'intégration est en cours, la formation peut se tenir sur le numéro de test que Meta fournit, limité à cinq destinataires, puis être complétée par une séance après la mise en service. Si rien n'est encore décidé, il faut d'abord choisir et construire l'intégration."],
        ['q' => "Notre Odoo est en édition Community : la formation est-elle utile ?", 'r' => "Oui, mais elle ne portera pas sur l'application WhatsApp d'Odoo, réservée à l'édition Enterprise selon la documentation de l'éditeur. Elle portera sur le module tiers ou le flux d'automatisation installé chez vous, avec les mêmes gestes : fiche propre, envoi tracé, réponse rattachée, relance maîtrisée."],
        ['q' => "Dolibarr peut-il envoyer des messages WhatsApp ?", 'r' => "Pas en standard : Dolibarr ne livre pas de connecteur WhatsApp. On passe par un module de DoliStore ou par un flux externe déclenché par un événement de Dolibarr. Le 5 octobre 2026, une recherche « whatsapp » sur DoliStore renvoyait 24 modules, du gratuit à 299 € HT, aux méthodes d'envoi très différentes."],
        ['q' => "Pourquoi ne peut-on pas répondre librement à un client qui a écrit il y a deux jours ?", 'r' => "Parce que la fenêtre de service ouverte par son message dure 24 heures. Passé ce délai, Meta n'accepte plus que des modèles approuvés. La formation apprend à répondre à temps, et à relancer correctement par un modèle quand la fenêtre est fermée."],
        ['q' => "Combien coûtent les messages envoyés depuis le logiciel ?", 'r' => "Meta facture par message depuis le 1er juillet 2025. Depuis le 1er octobre 2026, chaque numéro dispose de 1 000 messages de service gratuits par mois, non reportables, facturés au-delà ; sans moyen de paiement, les messages de service s'arrêtent une fois le quota épuisé. Pour les modèles, c'est la grille de tarification publiée par Meta qui fait foi."],
        ['q' => "Peut-on garder l'application WhatsApp Business sur le téléphone de l'accueil ?", 'r' => "Oui, grâce à la coexistence décrite par Meta : le même numéro sert à l'application et au logiciel, et les messages sont recopiés des deux côtés. Certaines fonctions de l'application, dont les listes de diffusion, sont alors désactivées. La formation fixe qui répond depuis le téléphone et qui répond depuis le logiciel."],
        ['q' => "Qui reçoit les messages des clients quand plusieurs personnes utilisent Odoo ?", 'r' => "Selon la documentation d'Odoo 20.0, les utilisateurs désignés dans le compte WhatsApp sont prévenus d'un nouveau message. Une fois la conversation engagée, seuls ceux qui y participent le sont ; si personne ne répond pendant 15 jours, la réponse suivante du client est de nouveau signalée à tous les utilisateurs désignés."],
        ['q' => "Comment noter le consentement d'un client à recevoir nos messages ?", 'r' => "Dans un champ ou une étiquette de la fiche client, avec la date et le moyen de recueil : formulaire, bon de commande signé, échange téléphonique. Meta admet un accord recueilli hors de WhatsApp s'il nomme l'entreprise, et la loi béninoise met la preuve du consentement à la charge de l'expéditeur."],
        ['q' => "Les commerciaux peuvent-ils continuer à utiliser leur WhatsApp personnel ?", 'r' => "Pour leurs échanges privés, bien sûr. Pour les clients, la formation recommande l'inverse : tout ce qui engage l'entreprise passe par le logiciel ou y est rattaché le jour même. Sinon, l'historique reste sur un téléphone personnel et disparaît avec le départ du salarié."],
        ['q' => "Que repart-on avec, concrètement ?", 'r' => "Des fiches clients nettoyées sur un échantillon, des envois testés depuis vos documents, la charte de réponse de l'équipe, la procédure de suspension d'une relance, la liste commentée de vos modèles, des fiches réflexes capturées sur vos écrans, le modèle de tableau de bord hebdomadaire et le résultat de l'évaluation de chaque participant."],
        ['q' => "Un fonds de formation peut-il financer la session ?", 'r' => "Cela dépend du pays, du fonds et de votre situation : FDFP en Côte d'Ivoire, FODEFCA au Bénin, 3FPT au Sénégal, OPCO en France. Richard SALANON n'est pas certifié Qualiopi et n'a pas d'agrément de fonds. Soumettez le programme et le devis au fonds avant de signer, et prévoyez le budget sans prise en charge."],
    ],

    'sources' => [
        ['titre' => 'Odoo 20.0, documentation de l\'application WhatsApp (édition Enterprise, modèles, catégories, notifications, règle des 15 jours, numéro de test)', 'url' => 'https://www.odoo.com/documentation/20.0/applications/productivity/whatsapp.html', 'date' => '2026-10-05'],
        ['titre' => 'Odoo 20.0, règles d\'automatisation (déclencheurs sur date, action « Envoyer WhatsApp »)', 'url' => 'https://www.odoo.com/documentation/20.0/applications/studio/automated_actions.html', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, tarification des plans Standard et Personnalisé', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Meta, envoi de messages et fenêtre de service de 24 heures', 'url' => 'https://developers.facebook.com/docs/whatsapp/cloud-api/guides/send-messages', 'date' => '2026-10-05'],
        ['titre' => 'Meta, modèles de messages (examen, statuts, qualité, limites)', 'url' => 'https://developers.facebook.com/docs/whatsapp/business-management-api/message-templates', 'date' => '2026-10-05'],
        ['titre' => 'Meta, recueil du consentement (opt-in)', 'url' => 'https://developers.facebook.com/docs/whatsapp/overview/getting-opt-in', 'date' => '2026-10-05'],
        ['titre' => 'Meta, coexistence de l\'application WhatsApp Business et de l\'API Cloud', 'url' => 'https://developers.facebook.com/docs/whatsapp/embedded-signup/custom-flows/onboarding-business-app-users', 'date' => '2026-10-05'],
        ['titre' => 'Meta, tarification de la plateforme WhatsApp Business (version française lue dans un navigateur : quota de 1 000 messages de service depuis le 1er octobre 2026)', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'WhatsApp, politique de la messagerie WhatsApp Business (mise à jour du 23 septembre 2026)', 'url' => 'https://whatsappbusiness.com/fr/policy/', 'date' => '2026-10-05'],
        ['titre' => 'Dolibarr, version 24.0.1 publiée sur GitHub le 7 septembre 2026', 'url' => 'https://github.com/Dolibarr/dolibarr/releases/tag/24.0.1', 'date' => '2026-10-05'],
        ['titre' => 'DoliStore, recherche « whatsapp » (24 modules)', 'url' => 'https://www.dolistore.com/index.php?search_query=whatsapp&submit_search=1&l=fr', 'date' => '2026-10-05'],
        ['titre' => 'Wiki Dolibarr, module Webhook', 'url' => 'https://wiki.dolibarr.org/index.php/Module_Webhook', 'date' => '2026-10-05'],
        ['titre' => 'n8n Docs, nœud WhatsApp Business Cloud', 'url' => 'https://docs.n8n.io/integrations/builtin/app-nodes/n8n-nodes-base.whatsapp/', 'date' => '2026-10-05'],
        ['titre' => 'n8n, offres et tarifs', 'url' => 'https://n8n.io/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'HubSpot, connecter WhatsApp à la boîte de réception des conversations', 'url' => 'https://knowledge.hubspot.com/inbox/connect-whatsapp-to-the-conversations-inbox', 'date' => '2026-10-05'],
        ['titre' => 'ARCEP Bénin, passage des numéros de 8 à 10 chiffres au 30 novembre 2024', 'url' => 'https://arcep.bj/a-partir-de-30-novembre-2024-les-numeros-de-telephone-au-benin-passent-de-08-a-10-chiffres/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 332, 333, 334 et 415)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, questions-réponses sur les référentiels de gestion des activités commerciales et des impayés', 'url' => 'https://www.cnil.fr/fr/questions-reponses-sur-les-referentiels-relatifs-la-gestion-des-activites-commerciales-et-des', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['whatsapp-business', 'chatbot-whatsapp', 'odoo-utilisateurs', 'dolibarr-utilisateurs', 'crm-pipeline', 'odoo-ia'],
        'services'    => ['integration-whatsapp', 'integration-odoo', 'integration-dolibarr'],
        'comparatifs' => ['odoo-vs-dolibarr', 'n8n-vs-make-vs-zapier'],
    ],
];
