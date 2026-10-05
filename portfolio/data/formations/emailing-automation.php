<?php
// ============================================================
// data/formations/emailing-automation.php · Fiche formation « Emailing et
// marketing automation » (vague 1B, lot B, domaine marketing-visibilite).
// Aucune ancienne page. Angle propre : la liste et la preuve du consentement,
// la désinscription, la segmentation, les séquences automatiques (bienvenue,
// panier abandonné, relance), la délivrabilité (exigences de Gmail et de
// Yahoo) et la mesure des envois. Sœurs non traitées : marketing-digital-b2b
// (prospection et règles par pays jusqu'au rendez-vous), analytics-ga4
// (mesure du site, événements, conversions), e-commerce (tenue de la
// boutique), microsoft-365-google-workspace (messagerie interne).
// Faits relevés le 05/10/2026 : aide Gmail (consignes aux expéditeurs et
// questions fréquentes), Yahoo Sender Hub, RFC 8058, CNIL (prospection
// électronique, liste repoussoir, recommandation sur les pixels de suivi du
// 14 avril 2026 et son PDF), loi n° 2017-20 (art. 332 à 336, PDF du SGG),
// APDP, tarifs de Brevo, Mailchimp et MailerLite (lus dans le navigateur),
// documentation Odoo 20.0 (limite quotidienne, désinscription, double
// opt-in), aide Apple Mail, FDFP, FODEFCA, 3FPT, France Compétences.
// Tarifs d'Odoo : fait déjà vérifié du catalogue, repris tel quel.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation emailing et marketing automation : bâtir une liste dont chaque contact a donné son accord, segmenter, écrire des séquences automatiques qui vendent et faire arriver vos messages en boîte de réception",
    'title'   => 'Formation emailing et marketing automation | Richard SALANON',
    'meta'    => "Formation emailing : liste et consentement prouvable, segments, séquences de bienvenue et de panier abandonné, délivrabilité Gmail et Yahoo, mesure.",
    'en_bref' => "Cette formation apprend aux équipes qui écrivent régulièrement à leurs clients, boutiques en ligne, organismes de formation, entreprises de services, à tenir une liste propre et prouvable, à la découper en segments utiles, à monter des séquences automatiques de bienvenue, de panier abandonné et de relance, et à respecter les règles d'envoi de Gmail et de Yahoo. Elle dure deux jours en quatre demi-journées, en petit groupe, dans l'outil d'envoi de l'entreprise et sur son propre fichier, sur place, à distance ou en formule hybride. Le prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'marketing-visibilite',
    'forte'   => false,
    'duree'   => '2 jours en quatre demi-journées',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : savoir d'où vient chaque adresse et quel accord la couvre",
            'duree'  => '3 h 30',
            'points' => [
                "Inventaire du fichier réel de l'entreprise : sources (site, caisse, salon, formulaire papier, ancien logiciel), date d'entrée, champ qui prouve l'accord.",
                "Ce que la CNIL demande pour un particulier en France et ce que les articles 332 à 336 de la loi n° 2017-20 imposent au Bénin : accord préalable, exception du client, information à chaque envoi.",
                "Le formulaire d'inscription qui tient devant un contrôle : case non pré-cochée, finalité écrite, lien vers la politique de confidentialité, double confirmation par e-mail.",
                "Désinscription et opposition : lien visible, en-tête de désabonnement en un clic, accusé de réception, liste des personnes opposées conservée et respectée.",
                "Tri du fichier en trois piles : contacts utilisables, contacts à requalifier par un message d'accord, adresses à supprimer.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : segmenter la liste et écrire une lettre que l'on a envie d'ouvrir",
            'duree'  => '3 h 30',
            'points' => [
                "Champs et étiquettes qui servent vraiment : statut client ou prospect, date du dernier achat, catégorie de produits, ville, langue, source d'inscription.",
                "Segments dynamiques construits dans l'outil : nouveaux inscrits, clients d'un seul achat, clients réguliers, inactifs depuis six mois.",
                "Écriture d'une lettre d'information : objet, texte d'aperçu, un sujet principal, un seul appel à l'action, signature d'une personne réelle.",
                "Mise en page lisible sur téléphone : largeur, taille des images, texte alternatif, version en texte brut, lien de désinscription en bas du message.",
                "Relecture croisée des lettres du groupe et envoi de test vers des boîtes Gmail, Yahoo et Outlook.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : monter les séquences automatiques de bienvenue, de panier abandonné et de relance",
            'duree'  => '3 h 30',
            'points' => [
                "Logique d'un scénario : déclencheur, délai, condition, action, sortie ; différence entre message transactionnel et message marketing.",
                "Séquence de bienvenue en trois messages pour les nouveaux inscrits, avec la confirmation d'inscription en premier.",
                "Relance de panier abandonné : données nécessaires depuis la boutique, délai du premier rappel, arrêt dès que la commande est passée.",
                "Relance après achat et réactivation des inactifs : avis, réassort, produit complémentaire, puis dernier message avant retrait de la liste.",
                "Construction d'une séquence complète dans l'outil de l'entreprise, test avec des contacts internes et activation sous contrôle.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : protéger la délivrabilité, mesurer ce qui compte et évaluer les acquis",
            'duree'  => '3 h 30',
            'points' => [
                "Authentification du domaine d'envoi : SPF, DKIM, DMARC et alignement, vérifiés dans l'outil et dans la zone DNS avec la personne qui la gère.",
                "Exigences de Gmail et de Yahoo pour les expéditeurs : seuil de 5 000 messages par jour, taux de spam sous 0,3 %, désinscription en un clic traitée sous 48 heures.",
                "Indicateurs à suivre : remises, rebonds, plaintes, désinscriptions, clics, ventes attribuées ; pourquoi le taux d'ouverture trompe.",
                "Pixels de suivi : ce que la recommandation de la CNIL du 14 avril 2026 soumet au consentement et ce qu'elle en exempte.",
                "Évaluation : chaque participant présente son fichier trié, son formulaire, sa séquence active et son tableau d'envoi mensuel.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en quatre demi-journées'],
        ['l' => 'Public', 'v' => "Boutiques en ligne, organismes de formation, entreprises de services qui écrivent régulièrement à leurs clients"],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, en petit groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que sauront faire vos équipes à la fin de la formation, et que laisse-t-elle de côté ?",
            'paragraphes' => [
                "L'e-mail reste le seul canal dont l'entreprise possède l'audience : une page Facebook peut perdre sa portée, un compte publicitaire peut être suspendu, mais une liste d'abonnés appartient à celui qui l'a constituée. Encore faut-il que cette liste soit légale, que les messages arrivent en boîte de réception et qu'ils donnent envie d'agir. La plupart des entreprises qui demandent cette formation envoient déjà une lettre de temps en temps, souvent depuis une messagerie ordinaire, à un fichier dont personne ne sait plus d'où viennent la moitié des adresses.",
                "En fin de session, chaque participant sait retrouver l'origine d'un contact et la preuve de son accord ; créer un formulaire d'inscription conforme, avec double confirmation ; gérer une désinscription en moins de 48 heures et tenir la liste des oppositions ; créer quatre segments utiles ; écrire une lettre d'information lisible sur téléphone ; monter et tester une séquence automatique complète ; vérifier SPF, DKIM et DMARC sur le domaine d'envoi ; lire un rapport d'envoi en commençant par les plaintes et les rebonds, et non par les ouvertures.",
                "La formation ne traite pas de la prospection d'entreprises que l'on ne connaît pas encore, avec ses règles pays par pays : c'est l'objet de la formation <a href=\"/formations/marketing-digital-b2b\">marketing digital B2B</a>. Elle ne règle pas non plus la mesure du site, les événements et les conversions dans Google Analytics 4, qui ont leur propre formation dans le domaine, ni la tenue de la boutique elle-même, traitée par <a href=\"/formations/e-commerce\">Vendre en ligne : e-commerce</a>. Ici, on part d'une liste d'abonnés et de clients, et l'on apprend à leur écrire.",
                "Si vous préférez que les scénarios soient construits pour vous, par exemple pour relier la boutique, le CRM et l'outil d'envoi, c'est le travail du service d'<a href=\"/services/automatisation-ia\">automatisation</a>. La formation apprend alors à l'équipe à faire vivre ce qui a été installé : écrire les messages, ajuster les délais, surveiller les plaintes et nettoyer la liste chaque mois, sans dépendre d'un prestataire pour chaque envoi.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Qui doit suivre la formation, avec quel niveau et quel matériel ?",
            'intro' => "La formation vise les structures qui écrivent à leurs clients au moins une fois par mois, ou qui veulent le faire. Elle donne les meilleurs résultats quand la personne qui rédige et celle qui a la main sur le nom de domaine sont toutes deux présentes, au moins l'après-midi du deuxième jour.",
            'items' => [
                ['titre' => "La personne qui envoie les lettres", 'texte' => "Chargée de communication, assistante commerciale, gérante d'une petite boutique : c'est elle qui passera le plus de temps sur les exercices de fichier, d'écriture et de séquences. Elle repart avec un calendrier d'envoi et des modèles prêts."],
                ['titre' => "Le ou la responsable de la boutique en ligne", 'texte' => "Les séquences de panier abandonné et de relance après achat demandent des données de la boutique : produits consultés, commandes, dates. Sa présence permet de vérifier pendant la séance que l'outil d'envoi reçoit bien ces informations."],
                ['titre' => "Le dirigeant", 'texte' => "Il décide de ce que l'entreprise accepte d'envoyer, à quelle fréquence, et du sort des adresses sans preuve d'accord. Une demi-journée suffit souvent : la première, consacrée au fichier et au consentement."],
                ['titre' => "La personne qui gère le nom de domaine", 'texte' => "Salarié, prestataire ou hébergeur : il faut pouvoir ajouter des enregistrements DNS pendant la formation. À défaut, la liste exacte des enregistrements à créer lui est transmise le jour même, avec la marche à suivre."],
                ['titre' => "Niveau attendu", 'texte' => "Savoir utiliser une messagerie, un tableur et un navigateur. Aucune compétence technique n'est exigée : les enregistrements DNS sont expliqués pas à pas. Un questionnaire au cadrage situe chacun et repère les équipes qui ont déjà un outil en place."],
                ['titre' => "Prérequis matériel et accès", 'texte' => "Un nom de domaine à l'entreprise et l'accès à sa configuration, ou à la personne qui la gère ; un ordinateur par participant ; l'accès administrateur à l'outil d'envoi s'il existe ; une extraction du fichier de contacts actuel, avec ses colonnes d'origine."],
                ['titre' => "Si l'entreprise n'a pas encore d'outil", 'texte' => "Le choix se fait au cadrage, sur la taille de la liste, le budget et les logiciels déjà en place. Un compte gratuit est ouvert avant la session pour que les exercices se fassent sur un vrai outil, et non sur des captures d'écran."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices les participants font-ils sur le fichier et l'outil de l'entreprise ?",
            'items' => [
                ['titre' => "L'audit du fichier", 'duree' => '1 heure', 'texte' => "Le fichier de contacts est ouvert dans un tableur. Pour chaque source, le groupe note la date, le canal et la trace de l'accord : case cochée sur le site, achat en boutique, inscription à un salon, carte de visite. Les colonnes manquantes apparaissent vite. C'est souvent la première fois que l'entreprise voit combien d'adresses ne reposent sur aucune preuve."],
                ['titre' => "Le tri en trois piles", 'duree' => '45 minutes', 'texte' => "Les contacts sont classés : utilisables tels quels, à requalifier par un unique message demandant l'accord, à supprimer. La direction tranche les cas douteux en séance. La pile à supprimer n'est pas importée dans l'outil d'envoi ; ses adresses sont seulement inscrites, si besoin, dans la liste des oppositions."],
                ['titre' => "Le formulaire d'inscription", 'duree' => '45 minutes', 'texte' => "Chaque participant crée ou corrige le formulaire du site : champs strictement utiles, case décochée, phrase qui dit ce que l'on recevra et à quel rythme, lien vers la politique de confidentialité. Puis il active la double confirmation et s'inscrit lui-même pour vérifier ce que reçoit un nouvel abonné."],
                ['titre' => "Les segments", 'duree' => '45 minutes', 'texte' => "Le groupe crée dans l'outil quatre segments qui se mettent à jour seuls : nouveaux inscrits depuis trente jours, clients d'un achat unique, clients réguliers, contacts sans clic depuis six mois. Chaque segment reçoit une règle d'usage écrite : ce qu'on lui envoie, et ce qu'on ne lui envoie jamais."],
                ['titre' => "La lettre d'information", 'duree' => '1 heure', 'texte' => "Chacun écrit une lettre réelle pour le mois suivant, sur un seul sujet, avec un objet de moins de cinquante caractères et un texte d'aperçu qui le complète. Les versions sont lues sur téléphone, à l'écran du formateur, puis corrigées : trop d'images, trop de liens, un appel à l'action noyé."],
                ['titre' => "La séquence automatique", 'duree' => '1 h 30', 'texte' => "Le groupe choisit la séquence la plus utile pour l'entreprise, bienvenue ou panier abandonné, et la construit en entier : déclencheur, délais, conditions de sortie, messages. Elle est testée avec des adresses internes, puis activée seulement après validation de la direction."],
                ['titre' => "Le contrôle du domaine d'envoi", 'duree' => '45 minutes', 'texte' => "À l'aide de l'outil d'envoi et d'un vérificateur DNS, le groupe constate l'état de SPF, DKIM et DMARC sur le domaine. Les enregistrements manquants sont rédigés et, si la personne qui gère le domaine est présente, ajoutés en séance. Un message de test est ensuite ouvert dans Gmail pour lire ses en-têtes."],
                ['titre' => "Le tableau mensuel et l'évaluation", 'duree' => '45 minutes', 'texte' => "Chaque participant prépare le tableau qu'il remplira après chaque envoi : messages remis, rebonds, plaintes, désinscriptions, clics, ventes. L'évaluation porte sur ce qui a été produit pendant les deux jours, comparé aux objectifs écrits au cadrage."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel accord faut-il pour chaque type d'envoi, en France et au Bénin ?",
            'legende' => "Lecture faite le 5 octobre 2026 de la page de la CNIL sur la prospection électronique (mise à jour du 10 juin 2026) et des articles 332 à 336 de la loi n° 2017-20 portant code du numérique. Ce tableau sert à classer les envois du fichier ; il ne remplace pas un avis juridique.",
            'entetes' => ["Type d'envoi", 'France (CNIL)', 'Bénin (loi n° 2017-20)', "Ce que l'on règle dans l'outil"],
            'lignes'  => [
                ["Lettre d'information à un particulier qui s'est inscrit sur le site", "Consentement libre, spécifique, éclairé et univoque, par une action positive : case non pré-cochée ; accepter des conditions générales ne suffit pas", "Consentement préalable exigé par l'article 332 ; l'absence de réponse ne vaut pas accord ; la preuve incombe à l'expéditeur", "Formulaire avec case décochée, double confirmation, date et source d'inscription enregistrées"],
                ["Offre envoyée à un client qui a déjà acheté", "Possible sans consentement préalable pour des produits ou services similaires de la même entreprise, s'il a pu s'y opposer à la collecte puis à chaque envoi", "Exception de l'article 333 : coordonnées recueillies lors d'une vente ou d'une prestation, produits analogues du même fournisseur, opposition offerte sans frais", "Champ « client » alimenté par les ventes réelles, et non par la simple création d'un compte"],
                ["Relance de panier abandonné d'une personne qui n'a jamais acheté", "La CNIL précise que la simple création d'un compte en ligne ne fait pas de la personne une cliente : l'exception ne joue pas", "Pas de vente, donc pas d'exception de l'article 333 : l'accord préalable reste la règle", "Déclencher la relance seulement pour les contacts qui ont coché la case d'accord"],
                ["Confirmation de commande, facture, suivi de livraison", "Message transactionnel lié à un service demandé, distinct de la prospection ; aucune offre commerciale ne doit s'y glisser", "Message lié à la vente elle-même, et non à une prospection directe", "Modèles transactionnels séparés des campagnes, sans bannière promotionnelle"],
                ["Message à l'adresse professionnelle d'un salarié", "Possible si l'objet est en rapport avec sa profession, après information et avec un droit d'opposition ; les adresses génériques de type contact@ sortent de ce cadre", "Sans consentement vers une personne morale si l'adresse est impersonnelle", "Segment séparé pour les contacts professionnels, avec la source notée"],
                ["Tout message de prospection, quel qu'il soit", "Identité de l'expéditeur visible et moyen simple de refuser les envois suivants", "Article 336 : coordonnées valables pour demander l'arrêt sans frais, identité non dissimulée, objet en rapport avec l'offre", "Pied de page avec raison sociale, adresse et lien de désinscription dans chaque modèle"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment prouver qu'un abonné a bien donné son accord, et comment gérer son départ ?",
            'paragraphes' => [
                "Au Bénin, l'article 332 du code du numérique met la preuve du consentement à la charge de celui qui envoie. En France, la CNIL exige un geste positif de la personne. Dans les deux cas, il ne suffit pas d'avoir l'adresse : il faut pouvoir montrer quand, où et comment elle a été donnée. La formation apprend à conserver pour chaque contact la date d'inscription, la page ou le lieu de collecte, le texte de la case cochée à ce moment-là et, quand elle existe, la date de confirmation par e-mail.",
                "La double confirmation, ou double opt-in, consiste à envoyer un message de confirmation après l'inscription et à n'ajouter la personne à la liste qu'après son clic. Elle n'est pas imposée par les textes français ou béninois, mais elle fournit une preuve datée, écarte les fautes de frappe et les inscriptions par des robots. Brevo, Mailchimp et MailerLite la proposent dans leurs formulaires ; Odoo l'offre sous la forme d'un modèle de campagne de son application Marketing Automation, qui range les contacts confirmés dans une liste dédiée.",
                "Le départ compte autant que l'arrivée. La CNIL rappelle que le droit de s'opposer à la prospection est absolu et n'a pas à être justifié. Au Bénin, l'article 334 demande au fournisseur d'accuser réception de la demande sans délai, de la respecter dans un délai raisonnable et de tenir à jour la liste des personnes qui ne veulent plus rien recevoir. La CNIL recommande de garder cette trace au moins trois ans, et suggère de ne conserver que l'empreinte chiffrée de l'adresse plutôt que l'adresse en clair.",
                "Cette liste d'opposition, que la CNIL appelle liste repoussoir, évite l'erreur la plus fréquente : réimporter, lors d'un salon ou d'une fusion de fichiers, une personne qui s'était désinscrite. Chaque outil d'envoi en tient une ; la formation montre où elle se trouve, comment l'exporter avant de changer d'outil et comment la reporter dans le nouveau. Dans Odoo, la documentation 20.0 précise qu'un lien de désinscription figure par défaut au bas des modèles, sauf pour un message créé à partir d'une page vierge, où il faut l'ajouter à la main.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Comment construire les trois séquences automatiques les plus rentables ?",
            'legende' => "Trames de départ utilisées en exercice. Les délais et le nombre de messages s'ajustent ensuite d'après les chiffres de l'entreprise, jamais avant d'avoir quelques semaines d'envois.",
            'entetes' => ['Séquence', 'Déclencheur', 'Messages et délais de départ', 'Condition de sortie', 'Piège à éviter'],
            'lignes'  => [
                ['Bienvenue', "Confirmation de l'inscription par le nouvel abonné", "Message 1 immédiat : merci, ce que l'on recevra et à quel rythme ; message 2 vers le troisième jour : la meilleure ressource ou le produit phare ; message 3 vers le septième jour : une question ou une offre d'entrée", "Achat, désinscription, ou fin de la séquence et passage dans la lettre ordinaire", "Envoyer une remise dès le premier message à tous les inscrits, ce qui habitue la liste à n'acheter qu'en promotion"],
                ['Panier abandonné', "Panier créé par un contact identifié et ayant donné son accord, sans commande après un délai fixé", "Rappel 1 après quelques heures, avec le contenu du panier ; rappel 2 le lendemain, avec les réponses aux questions fréquentes (livraison, paiement mobile, retours) ; rappel 3 facultatif", "Commande passée, quel que soit le canal, ou désinscription", "Continuer à relancer un client qui a finalement payé par mobile money ou commandé par WhatsApp, faute de synchronisation"],
                ['Relance après achat', "Commande livrée", "Message 1 après la livraison : conseils d'utilisation et contact du service client ; message 2 : demande d'avis ; message 3 au moment du réassort probable : produit complémentaire", "Nouvel achat, réclamation ouverte ou désinscription", "Demander un avis à un client dont la réclamation n'est pas réglée"],
                ['Réactivation des inactifs', "Aucun clic depuis six mois, ou aucun achat depuis la période définie par l'entreprise", "Un ou deux messages qui demandent clairement si la personne veut continuer à recevoir les lettres, avec un bouton de maintien et un bouton de départ", "Clic sur le maintien, sinon retrait de la liste active", "Garder indéfiniment des contacts muets, qui font baisser la réputation de l'expéditeur"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi une séquence automatique se prépare-t-elle avant de se brancher ?",
            'paragraphes' => [
                "Un scénario automatique envoie des messages pendant des mois sans que personne ne les relise. Une erreur de condition, un délai mal réglé ou une donnée qui n'arrive pas se répètent donc à chaque nouveau contact. La méthode enseignée tient en quatre étapes : écrire la séquence sur papier, avec ses délais et ses sorties ; vérifier que l'outil reçoit les données nécessaires ; tester avec trois ou quatre adresses internes en raccourcissant les délais ; activer, puis relire les premiers envois réels pendant une semaine.",
                "La relance de panier abandonné illustre la difficulté. Elle suppose que la boutique transmette à l'outil d'envoi l'adresse du client, le contenu du panier et l'information de la commande passée. WooCommerce, Shopify ou Odoo le font par des extensions ou des connecteurs ; une boutique sur mesure demande parfois un flux construit avec n8n ou Make, objet de la formation <a href=\"/formations/n8n\">n8n de zéro à l'autonomie</a> et comparés dans le <a href=\"/comparatifs/n8n-vs-make-vs-zapier\">comparatif n8n, Make et Zapier</a>. Sans l'information de commande, la relance continue après l'achat, ce qui agace le client le plus précieux.",
                "Les outils ne rangent pas tous l'automatisation au même niveau d'abonnement. Le 5 octobre 2026, la page de tarifs de Brevo réserve les workflows automatisés en plusieurs étapes à la formule Standard ; celle de Mailchimp limite les parcours à quatre étapes dans Essentials et n'en inclut aucun dans l'offre gratuite ; MailerLite autorise trois automatisations dans son offre gratuite. Le choix de l'outil se fait donc aussi d'après les séquences que l'entreprise veut faire tourner, et non seulement d'après le nombre de contacts.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que demandent Gmail et Yahoo aux entreprises qui envoient des e-mails en nombre ?",
            'legende' => "Pages officielles de Google (aide Gmail, consignes aux expéditeurs et questions fréquentes) et de Yahoo (Sender Hub, bonnes pratiques) lues le 5 octobre 2026. Les deux messageries appliquent ces exigences depuis février 2024.",
            'entetes' => ['Exigence', 'Gmail', 'Yahoo', 'Ce que la formation fait vérifier'],
            'lignes'  => [
                ['Qui est concerné', "Tous les expéditeurs pour le socle ; règles renforcées à partir d'environ 5 000 messages en 24 heures vers des comptes Gmail personnels, comptés sur l'ensemble du domaine principal ; ce statut est définitif une fois atteint", "Tous les expéditeurs pour le socle ; règles renforcées pour les expéditeurs en nombre", "Le volume réel des envois, sous-domaines compris"],
                ['Authentification', "SPF ou DKIM pour tous ; SPF et DKIM au-delà du seuil", "SPF ou DKIM au minimum pour tous ; SPF et DKIM pour les envois en nombre", "Les enregistrements fournis par l'outil d'envoi, publiés dans la zone DNS"],
                ['DMARC', "Enregistrement DMARC obligatoire au-delà du seuil, la politique « none » étant acceptée ; domaine de l'en-tête « De » aligné sur SPF ou DKIM", "Politique DMARC valide, au moins p=none, et DMARC doit réussir ; alignement du domaine de l'en-tête « From »", "Un enregistrement DMARC présent et des rapports reçus par une adresse surveillée"],
                ['Désinscription', "Désabonnement en un clic pour les messages marketing et ceux envoyés aux abonnés, plus un lien visible dans le corps du message ; demandes à traiter sous 48 heures", "En-tête List-Unsubscribe en un clic, méthode POST de la RFC 8058 fortement recommandée, lien visible ; désinscriptions honorées sous 2 jours", "Les en-têtes ajoutés par l'outil et le lien présent dans chaque modèle"],
                ['Taux de spam', "Sous 0,3 % dans Postmaster Tools ; Google conseille de rester sous 0,1 %", "Sous 0,3 %, calculé sur les messages remis en boîte de réception", "Les plaintes de chaque envoi, relevées dans le tableau mensuel"],
                ["Sanction en cas d'écart", "Depuis novembre 2025, Gmail renforce l'application : rejets temporaires ou définitifs des messages non conformes", "Effet négatif sur la remise des messages aux domaines Yahoo", "Les messages d'erreur et les rebonds, lus après chaque campagne"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Comment faire arriver les messages en boîte de réception plutôt qu'en courrier indésirable ?",
            'paragraphes' => [
                "La délivrabilité n'est pas un réglage que l'on fait une fois. Elle tient à trois choses : un domaine qui prouve son identité, une liste de personnes qui veulent recevoir les messages, et un contenu qui ne provoque pas de plaintes. Le premier point est technique et se règle en une après-midi ; les deux autres dépendent de la discipline de l'équipe, chaque mois. C'est pourquoi la formation consacre plus de temps au fichier et aux inactifs qu'aux enregistrements DNS.",
                "Côté technique, l'outil d'envoi fournit les enregistrements à publier : une ligne SPF qui autorise ses serveurs, une clé DKIM qui signe les messages au nom du domaine, puis une règle DMARC qui dit aux messageries quoi faire d'un message mal authentifié. Beaucoup d'entreprises envoient leurs campagnes depuis un sous-domaine, par exemple lettre.nomdelentreprise.com, pour séparer leur réputation marketing de celle des devis et des factures. Google rappelle toutefois que le seuil de 5 000 messages se calcule sur le domaine principal, sous-domaines compris.",
                "Côté liste, le geste le plus efficace est aussi le plus difficile : retirer les contacts qui n'ouvrent plus et ne cliquent plus. Ils ne rapportent rien, gonflent la facture des outils facturés au contact, et les messageries interprètent leur silence comme un signe que les messages ne sont pas désirés. Les adresses qui rebondissent de façon permanente sont retirées dès le premier rebond ; l'aide de Google recommande d'ailleurs de désabonner automatiquement les destinataires dont l'adresse a rejeté les messages plusieurs fois.",
                "Côté contenu, quelques règles suffisent : un expéditeur reconnaissable, toujours le même ; un objet qui dit vrai ; un équilibre entre texte et images ; peu de liens, tous vers le domaine de l'entreprise ou des sites connus ; jamais de pièce jointe dans une campagne. La meilleure protection contre les plaintes reste un lien de désinscription facile à trouver : une personne qui ne trouve pas comment partir clique sur « Signaler comme spam », et c'est ce clic qui abîme la réputation de l'expéditeur.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels chiffres regarder après un envoi, et pourquoi le taux d'ouverture trompe-t-il ?",
            'paragraphes' => [
                "Un rapport d'envoi se lit dans un ordre précis. D'abord ce qui menace la liste : rebonds, plaintes, désinscriptions. Une hausse soudaine des plaintes signale un segment mal choisi ou un message trop insistant, et compte davantage que tout le reste. Ensuite ce qui mesure l'intérêt : les clics, rapportés au nombre de messages remis. Enfin ce qui mesure l'argent : les commandes ou les demandes de devis attribuées à chaque campagne et à chaque séquence, sur une période fixée à l'avance.",
                "Le taux d'ouverture, longtemps l'indicateur vedette, est devenu peu fiable. Il repose sur une image invisible chargée à l'ouverture du message. Or l'aide d'Apple indique que, lorsque la protection de la confidentialité est activée dans Mail, le contenu distant est téléchargé de façon privée en arrière-plan à la réception du message, et non quand on le consulte. Une partie des ouvertures enregistrées n'en sont donc pas. À l'inverse, une messagerie qui bloque les images n'enregistre aucune ouverture réelle.",
                "La CNIL a précisé le cadre de ces pixels dans sa recommandation publiée le 14 avril 2026, adoptée par la délibération n° 2026-042 du 12 mars 2026. L'analyse du taux d'ouverture pour mesurer et optimiser les campagnes, ou pour personnaliser les messages, demande le consentement du destinataire. Est exemptée la mesure individuelle de l'ouverture à des fins de délivrabilité, limitée à adapter la fréquence ou à arrêter les envois aux inactifs, pour des messages transactionnels ou consentis, en ne gardant en principe que la date de la dernière ouverture.",
                "Pour les adresses collectées avant la publication de la recommandation, la CNIL demande, dans un délai de trois mois, d'informer clairement les destinataires de l'usage des pixels pour qu'ils puissent s'y opposer. La formation montre où se règle le suivi des ouvertures dans l'outil, comment rédiger la mention du formulaire et comment s'appuyer d'abord sur les clics et les ventes. Le lien entre les clics et les commandes du site se lit dans l'outil de mesure du site, sujet de la formation Google Analytics 4 et pilotage.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation est-elle animée, et quel suivi après la session ?",
            'intro' => "Chaque séance se déroule dans le compte réel de l'outil d'envoi, sur le fichier réel de l'entreprise. Le formateur montre un geste, puis chaque participant le refait sur ses propres données.",
            'items' => [
                ['titre' => "Des petits groupes", 'texte' => "Chaque formulaire, chaque lettre et chaque séquence sont relus individuellement à l'écran, ce qui limite le nombre de participants par groupe. En inter-entreprises, chacun travaille dans son propre compte, et aucun fichier de contacts n'est affiché devant les autres."],
                ['titre' => "Des données protégées pendant la séance", 'texte' => "Le fichier est ouvert sur le poste de l'entreprise, jamais copié sur l'ordinateur du formateur. Pour les démonstrations collectives, un extrait anonymisé suffit. Aucune adresse n'est collée dans un assistant d'IA grand public pendant les exercices."],
                ['titre' => "Rien n'est envoyé sans validation", 'texte' => "Les campagnes et séquences construites en formation partent d'abord vers des adresses internes. L'envoi à la liste réelle se fait seulement après l'accord écrit de la direction, en général dans la semaine qui suit."],
                ['titre' => "Des supports qui restent à l'entreprise", 'texte' => "Grille d'audit du fichier, modèles de formulaire et de mention d'information, trames des quatre séquences, modèle de lettre, liste des enregistrements DNS à vérifier, tableau mensuel d'envoi et fiche datée des règles de Gmail, de Yahoo, de la CNIL et du code du numérique béninois."],
                ['titre' => "Une évaluation sur production", 'texte' => "La réussite se juge sur ce que chaque participant a produit : fichier trié, formulaire conforme, séquence testée, tableau prêt. Une attestation de formation est remise avec le résultat de cette évaluation."],
                ['titre' => "Une revue à un mois, en option", 'texte' => "Une séance à distance relit les premiers rapports d'envoi, les plaintes et les désinscriptions, ajuste les délais des séquences et vérifie que la liste des oppositions est bien tenue. Elle figure au devis si l'entreprise la retient."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils d'envoi utilise-t-on en formation, et combien coûtent-ils ?",
            'legende' => "Tarifs relevés le 5 octobre 2026 sur les pages officielles de Brevo, Mailchimp et MailerLite (affichage en euros, hors taxes éventuelles) et d'Odoo. Les prix des trois premiers augmentent avec le nombre de contacts et le volume d'envoi ; ceux indiqués sont les plus bas affichés. La formation se fait dans l'outil déjà en place.",
            'entetes' => ['Outil', 'Offre gratuite', 'Premières formules payantes', 'Automatisation', "Point d'attention"],
            'lignes'  => [
                ['Brevo', "Jusqu'à 300 e-mails par jour", "Starter : 7 € par mois en paiement mensuel, ou 6,33 € par mois en annuel, pour 5 000 e-mails par mois et 500 contacts ; Standard : 15 € par mois, ou 13,50 € en annuel", "Workflows en plusieurs étapes et tests A/B à partir de Standard ; e-mails de suivi après inscription dès Starter", "Retrait du logo Brevo en option à 8,10 € par mois sur Starter"],
                ['Mailchimp', "0 €, limite de 250 contacts et 500 e-mails par mois", "Essentials à partir de 11,64 € par mois (5 000 e-mails) ; Standard à partir de 17,91 € par mois (6 000 e-mails), après un essai gratuit de 14 jours", "Aucun parcours dans l'offre gratuite ; jusqu'à 4 étapes dans Essentials ; 200 étapes dans Standard", "Des frais s'ajoutent en cas de dépassement de la limite de contacts ou d'envois"],
                ['MailerLite', "0 €, jusqu'à 250 abonnés et 2 500 e-mails par mois", "Comfort : 11 € par mois en mensuel, ou 9,90 € par mois en annuel (118,80 € par an), jusqu'à 500 abonnés et 5 000 e-mails par mois ; Power : 19 €, ou 17,10 € en annuel, e-mails illimités", "3 automatisations en gratuit ; 50 dans Comfort ; illimitées dans Power", "Logo MailerLite retiré à partir de Comfort"],
                ['Odoo E-mail Marketing', "Une application gratuite, pour un nombre illimité d'utilisateurs", "Standard : 19,90 € par utilisateur et par mois en paiement annuel pendant les 12 premiers mois, puis 24,90 € ; toutes les applications, dont Marketing Automation", "Scénarios dans l'application Marketing Automation, modèle de double opt-in compris", "Sur Odoo Online, la limite quotidienne d'envoi par défaut varie entre 5 et 200 e-mails selon la documentation 20.0 ; un serveur d'envoi externe la lève"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment choisir entre Brevo, Mailchimp, MailerLite et Odoo pour votre entreprise ?",
            'intro' => "Aucun outil n'est meilleur dans l'absolu. Quatre questions, posées au cadrage, orientent le choix ou confirment celui qui est déjà fait.",
            'items' => [
                ['titre' => "Où vivent vos clients aujourd'hui ?", 'texte' => "Si les commandes, les devis et les factures sont déjà dans Odoo, son application d'e-mail marketing lit directement ces données : segments par achat, relances après vente, sans connecteur. Si la boutique tourne sous WooCommerce ou Shopify, un outil spécialisé relié par extension sera souvent plus simple."],
                ['titre' => "Combien de contacts, et combien d'envois ?", 'texte' => "Une liste de quelques centaines de contacts, écrite une fois par mois, tient dans les offres gratuites ou d'entrée de gamme. Au-delà, comparez le prix au palier de contacts réel de l'entreprise, sur la page de l'éditeur, le jour du choix."],
                ['titre' => "Quelles séquences voulez-vous faire tourner ?", 'texte' => "Une simple séquence de bienvenue passe partout. Une relance de panier abandonné avec conditions, ou une réactivation des inactifs en plusieurs branches, demande une formule qui autorise des parcours de plusieurs étapes."],
                ['titre' => "Qui va s'en servir ?", 'texte' => "Une interface en français, une aide lisible et une prise en main rapide comptent davantage qu'une longue liste de fonctions que personne n'utilisera. La formation montre les mêmes gestes dans l'outil retenu ; elle ne fait pas changer d'outil sans raison."],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon votre métier, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Boutique de cosmétiques en ligne, à Abidjan", 'probleme' => "Beaucoup de paniers restent sans commande, souvent au moment du paiement mobile, et la gérante relance les clientes une par une sur WhatsApp quand elle en a le temps.", 'solution' => "Séquence de panier abandonné réservée aux clientes qui ont coché la case d'accord, avec un deuxième message qui explique le paiement par mobile money et la livraison, et arrêt automatique dès qu'une commande arrive, y compris passée par WhatsApp et saisie dans la boutique."],
                ['secteur' => "Hôtel de bord de mer, à Grand-Popo", 'probleme' => "Les adresses des clients dorment dans le logiciel de réservation ; l'hôtel envoie deux fois par an une promotion à tout le fichier, agences de voyage comprises, et une partie part en courrier indésirable.", 'solution' => "Tri du fichier entre anciens clients, qui peuvent relever de l'exception de l'article 333 pour des séjours analogues si l'opposition leur a été proposée à la réservation, et contacts sans preuve d'accord ; séquence avant arrivée et après départ pour les réservations directes ; domaine authentifié avant la campagne de haute saison."],
                ['secteur' => "Centre de formation professionnelle, à Lomé", 'probleme' => "Les inscriptions aux sessions arrivent par un formulaire du site, mais personne ne répond avant plusieurs jours, et les candidats s'inscrivent ailleurs entre-temps.", 'solution' => "Séquence de bienvenue déclenchée par le formulaire : confirmation immédiate, programme et calendrier au troisième jour, invitation à une réunion d'information au septième ; segment par filière pour n'envoyer à chacun que les sessions qui le concernent."],
                ['secteur' => "Cabinet d'expertise comptable, à Lyon", 'probleme' => "La lettre fiscale mensuelle part depuis la messagerie du cabinet, en copie cachée à huit cents clients ; depuis l'hiver, plusieurs clients disent ne plus la recevoir.", 'solution' => "Passage à un outil d'envoi sur un sous-domaine, enregistrements SPF, DKIM et DMARC publiés avec le prestataire informatique, désinscription en un clic, retrait des adresses en rebond, et un tableau qui suit les plaintes à chaque envoi."],
                ['secteur' => "Éditeur de logiciel de facturation, à Bruxelles", 'probleme' => "Les essais gratuits se multiplient, mais peu d'utilisateurs reviennent après le premier jour ; l'équipe envoie à tous le même message hebdomadaire.", 'solution' => "Segments selon l'avancement dans l'essai, séquence d'accueil qui guide vers la première facture créée, message de relance aux comptes inactifs après trois jours, et mesure fondée sur les clics et les abonnements souscrits plutôt que sur les ouvertures."],
                ['secteur' => "Association de soutien scolaire, à Dakar", 'probleme' => "Les donateurs et les parents d'élèves sont mélangés dans une seule liste et reçoivent les mêmes nouvelles, ce qui provoque des désinscriptions des deux côtés.", 'solution' => "Deux listes distinctes avec leur propre formulaire d'inscription, lettre trimestrielle aux donateurs, informations pratiques aux parents, et une page de préférences qui laisse chacun choisir ce qu'il reçoit au lieu de tout quitter."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir pour votre équipe ?",
            'legende' => "Le programme complet représente deux journées, réparties selon le format retenu. Les exercices sur le fichier se font toujours dans les comptes de l'entreprise.",
            'entetes' => ['Format', 'Pour qui', 'Durée', 'Organisation'],
            'lignes'  => [
                ['Intra-entreprise', "Une équipe qui partage le même fichier et le même outil d'envoi", "2 jours, d'affilée ou à une semaine d'intervalle", "Dans vos locaux ou à distance, sur votre fichier, avec la personne qui gère le domaine l'après-midi du deuxième jour"],
                ['Inter-entreprises', "Une ou deux personnes par structure, boutiques ou organismes de taille comparable", '2 jours', "Chacun travaille dans son propre compte ; les fichiers de contacts ne sont jamais affichés aux autres"],
                ['À distance', "Équipes éloignées de Cotonou, en Afrique, en Europe ou au Canada", "Cinq séances de deux heures et demie environ", "Partage d'écran, exercices entre deux séances, notamment le tri du fichier et la rédaction de la séquence"],
                ['Hybride', "Équipes qui veulent juger leurs premiers envois réels avec le formateur", "Une journée et demie, puis une demi-journée trois à quatre semaines plus tard", "Fichier, formulaire et séquence au départ ; lecture des rapports, des plaintes et des désinscriptions au retour"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le devis ?",
            'intro'      => "La formation est chiffrée sur devis ; aucun tarif n'est publié pour elle. Le premier échange, le cadrage et le devis sont gratuits. Les abonnements aux outils d'envoi ne passent pas par ce devis : ils sont réglés directement à l'éditeur. Le règlement de la formation se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => 'Programme complet', 'prix' => 'Sur devis', 'inclus' => ['Deux journées, ou leur équivalent à distance', 'Audit et tri du fichier réel', 'Formulaire, segments et séquence construits dans votre outil', 'Contrôle de SPF, DKIM et DMARC', 'Supports, évaluation et attestation']],
                ['offre' => 'Revue à un mois', 'prix' => 'Sur devis', 'inclus' => ['Lecture des premiers rapports d\'envoi', 'Réglage des délais des séquences', 'Vérification de la liste des oppositions']],
                ['offre' => 'Séquence supplémentaire', 'prix' => 'Sur devis', 'inclus' => ['Panier abandonné, relance après achat ou réactivation', 'Construction et tests avec l\'équipe', 'Relecture des messages']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'La taille et l\'état du fichier de contacts à auditer avant la session.',
                'L\'outil d\'envoi et le travail de raccordement à la boutique ou au CRM à préparer.',
                'Le nombre de séquences construites pendant la formation.',
                'Le format retenu et un déplacement hors de Cotonou pour une séance sur place.',
                'L\'ajout de la revue à un mois.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation peut-il financer une partie de la session ?",
            'paragraphes' => [
                "Peut-être, mais seul le fonds peut le dire, et aucune prise en charge n'est promise ici. En Côte d'Ivoire, la <a href=\"https://fdfp.ci/plan-de-formation/\">page du FDFP sur le plan de formation</a>, consultée le 5 octobre 2026, ouvre ce dispositif aux entreprises à jour de leurs deux taxes et admet les actions intra animées par un intervenant extérieur ; le remboursement vient après le contrôle du fonds et l'approbation de sa Commission permanente. Au Bénin, les statuts du FODEFCA ont été approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>.",
                "Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> propose un guichet pour la formation du personnel des entreprises. En France, <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle qu'un prestataire doit être certifié Qualiopi depuis le 1er janvier 2022 pour accéder aux fonds publics ou mutualisés, dont ceux des OPCO ; Richard SALANON n'a pas cette certification, ni l'agrément d'un fonds africain. Demandez donc la réponse du fonds par écrit, avec le programme de cette page, et prévoyez le budget comme si aucune aide n'arrivait.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi ne faut-il plus envoyer la lettre d'information depuis sa messagerie ordinaire ?",
            'texte' => "Parce qu'une messagerie de bureau n'a ni lien de désinscription en un clic, ni liste des oppositions, ni gestion des rebonds, et que les adresses en copie cachée finissent tôt ou tard en copie visible. Gmail exige depuis février 2024 l'authentification de tous les expéditeurs et, au-delà de 5 000 messages par jour sur un même domaine, la désinscription en un clic ; Yahoo demande de traiter les désinscriptions sous deux jours. Une campagne envoyée depuis la boîte du directeur expose surtout la réputation du domaine de l'entreprise : si les destinataires la signalent comme spam, ce sont les devis et les factures du lendemain qui risquent d'arriver en courrier indésirable.",
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les semaines qui suivent la formation, et comment les éviter ?",
            'intro' => "La session installe l'outil, la liste et la première séquence. Les deux mois suivants décident si l'e-mail devient un canal qui vend ou une corvée que l'on abandonne.",
            'items' => [
                ['titre' => "Réimporter le vieux fichier « pour voir »", 'texte' => "Quelques semaines plus tard, quelqu'un importe l'ancien fichier entier pour une promotion urgente. Les plaintes montent, les rebonds aussi. La pile des contacts sans preuve d'accord reste hors de l'outil ; seule la campagne de requalification, envoyée une fois, peut en ramener une partie."],
                ['titre' => "Laisser tourner une séquence sans la relire", 'texte' => "Un prix change, un produit est épuisé, un lien casse : la séquence continue de l'annoncer pendant des mois. Une relecture des messages automatiques est inscrite au calendrier chaque trimestre, et après chaque changement de catalogue."],
                ['titre' => "Écrire à tout le monde à chaque fois", 'texte' => "Par manque de temps, la lettre repart à la liste entière, sans segment. Les clients réguliers reçoivent l'offre de bienvenue, les nouveaux inscrits la relance des fidèles. Chaque envoi commence par une question : à quel segment, et pourquoi lui."],
                ['titre' => "Juger une campagne sur ses ouvertures", 'texte' => "Un taux d'ouverture élevé rassure, mais une partie des ouvertures est enregistrée automatiquement par certaines messageries. Le tableau mensuel classe les envois d'après les clics, les ventes et les plaintes."],
                ['titre' => "Oublier la liste des oppositions en changeant d'outil", 'texte' => "Au passage d'un outil à un autre, les contacts sont exportés, mais pas les désinscrits. Ils recommencent à recevoir des messages, en violation de leur choix. L'export de la liste des oppositions fait partie de toute migration."],
                ['titre' => "Envoyer trop, puis plus du tout", 'texte' => "Après la formation, l'enthousiasme pousse à écrire chaque semaine ; trois mois plus tard, plus rien ne part. Un rythme tenable, annoncé dans le formulaire d'inscription, vaut mieux qu'une série d'envois serrés suivie d'un long silence qui fait oublier l'expéditeur."],
                ['titre' => "Négliger le rapport DMARC", 'texte' => "Les rapports DMARC arrivent dans une boîte que personne ne lit. Ils signalent pourtant les outils qui envoient au nom du domaine sans être autorisés, et parfois une usurpation. Une personne est désignée pour les parcourir chaque mois."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Adresses Gmail, connexion, langues, données personnelles : que change le contexte local pour l'e-mail ?",
            'paragraphes' => [
                "En Afrique francophone, une grande partie des clients, et même des dirigeants de petites entreprises, utilisent une adresse Gmail ou Yahoo comme adresse principale. Les exigences de ces deux messageries ne sont donc pas un détail technique réservé aux gros expéditeurs européens : elles décident directement si la lettre d'une boutique de Cotonou ou d'un organisme de Dakar arrive en boîte de réception. Les envois de test de la formation se font vers ces deux messageries, en plus d'Outlook pour les clients professionnels européens.",
                "Les messages sont lus surtout sur téléphone, parfois avec une connexion lente ou un forfait limité. Les lettres conçues en formation restent légères : peu d'images, compressées, un texte qui se comprend même si les images ne s'affichent pas, et un bouton assez large pour un pouce. Pour une clientèle qui échange surtout sur WhatsApp, l'e-mail garde son rôle pour les confirmations, les factures et les lettres de fond, tandis que la conversation commerciale relève de la formation <a href=\"/formations/whatsapp-business\">WhatsApp Business pour vendre</a>.",
                "La règle applicable suit le pays du destinataire. Une entreprise de Cotonou qui écrit à des abonnés béninois applique la loi n° 2017-20, dont l'article 336 interdit aussi de dissimuler l'identité de l'expéditeur ou de choisir un objet sans rapport avec l'offre ; l'<a href=\"https://apdp.bj/\">Autorité de protection des données personnelles (APDP)</a> peut recevoir les plaintes. La même entreprise qui écrit à des clients en France ou en Belgique applique le RGPD et les règles présentées par la CNIL. Le fichier garde donc le pays de chaque contact.",
                "La formation est donnée en français ; elle peut l'être en anglais. Les outils présentés existent en français, mais certaines pages d'aide, notamment celles de Yahoo, ne sont publiées qu'en anglais ; les passages utiles sont traduits dans les supports. Pour une entreprise qui écrit en plusieurs langues, un champ « langue » est ajouté au fichier dès le premier jour, et chaque séquence est rédigée, et non traduite automatiquement, dans chaque langue retenue.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre équipe à l'emailing avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Il construit des sites, des boutiques en ligne et des automatisations qui envoient des e-mails : formulaires reliés à un outil d'envoi, notifications de commande, scénarios n8n ou Make, déploiements d'Odoo dont les applications d'e-mail marketing servent de terrain d'exercice. Il connaît donc les deux côtés du sujet, l'écriture des messages et la tuyauterie qui les fait partir. Avec " . $ans . " ans d'expérience dans le numérique et une formation à " . fait('formation')['nom'] . " achevée en " . fait('formation')['annee'] . ", il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Il a travaillé, sur place ou à distance, dans quatorze pays d'Afrique francophone, d'Europe et du Canada, et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes au numérique. Il n'est ni partenaire ni revendeur de Brevo, de Mailchimp, de MailerLite ou d'Odoo, et n'est pas juriste : les règles de la CNIL, du code du numérique béninois, de Gmail et de Yahoo sont présentées telles qu'elles sont publiées le jour de la séance, et relues avant chaque session.",
                "Ses engagements : un cadrage avant tout devis, une formation dans votre outil et sur votre fichier, aucun envoi à votre liste sans votre accord, une évaluation sur production, des supports qui restent chez vous, aucune promesse de chiffre d'affaires ni de taux d'ouverture, et une réponse sous 24 heures. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a> ; les formations voisines sur la page <a href=\"/formations/domaine/marketing-visibilite\">marketing et visibilité</a> et dans le <a href=\"/formations/\">catalogue des formations</a> ; les pays servis sur la page des <a href=\"/zones/\">zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre équipe ?",
            'texte' => "Une liste d'e-mails vaut ce que vaut la preuve de chaque accord. Triez le fichier avant de l'importer, recueillez l'accord par une case décochée et une confirmation, laissez partir sans délai ceux qui le demandent, authentifiez votre domaine, retirez les inactifs, laissez travailler trois séquences bien testées plutôt que dix improvisées, et jugez vos envois sur les plaintes, les clics et les ventes.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Votre prochaine lettre arrivera-t-elle en boîte de réception ?",
            'texte'  => "Indiquez l'outil d'envoi que vous utilisez, la taille approximative de votre fichier, le nombre de personnes à former et le format souhaité. Vous recevez une réponse sous 24 heures, puis une proposition de programme bâtie sur votre liste et vos séquences, et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il déjà avoir un outil d'envoi pour suivre la formation ?", 'r' => "Non. Si l'entreprise n'en a pas, l'outil est choisi au cadrage selon la taille de la liste, le budget et les logiciels en place, puis un compte gratuit est ouvert avant la session. Brevo, Mailchimp et MailerLite ont chacun une offre gratuite, et Odoo permet d'utiliser une application gratuitement."],
        ['q' => "Peut-on importer tous les contacts de notre messagerie et de notre logiciel de caisse ?", 'r' => "Pas sans tri. Un contact qui a acheté peut recevoir des offres sur des produits analogues s'il a pu s'y opposer, en France comme au Bénin. Les autres demandent un accord préalable, que l'expéditeur doit pouvoir prouver. Les adresses sans preuve reçoivent au plus un message de requalification, puis sortent du fichier."],
        ['q' => "Le double opt-in est-il obligatoire ?", 'r' => "Les textes français et béninois ne l'imposent pas, mais il fournit une preuve datée de l'accord, élimine les adresses mal saisies et les inscriptions par des robots. Il est enseigné comme la méthode par défaut pour les formulaires du site."],
        ['q' => "Peut-on envoyer une relance de panier abandonné à quelqu'un qui n'a jamais acheté ?", 'r' => "Seulement s'il a donné son accord, par exemple en cochant la case à la création de son compte. La CNIL précise que la création d'un compte ne fait pas de la personne une cliente, et au Bénin l'exception de l'article 333 suppose une vente ou une prestation."],
        ['q' => "Nous envoyons moins de 5 000 e-mails par jour : les règles de Gmail nous concernent-elles ?", 'r' => "En partie. SPF ou DKIM, des enregistrements DNS valides, une connexion TLS et un taux de spam sous 0,3 % sont demandés à tous les expéditeurs depuis le 1er février 2024. DMARC et la désinscription en un clic sont exigés au-delà du seuil, mais il est plus simple de tout mettre en place dès le départ."],
        ['q' => "En combien de temps faut-il traiter une désinscription ?", 'r' => "Gmail recommande 48 heures et Yahoo exige un traitement sous deux jours pour les envois en nombre. Au Bénin, l'article 334 du code du numérique impose un accusé de réception sans délai et la tenue d'une liste des personnes opposées. La CNIL recommande de conserver cette liste au moins trois ans."],
        ['q' => "Peut-on encore mesurer les ouvertures de nos e-mails ?", 'r' => "Avec prudence. Selon la recommandation de la CNIL du 14 avril 2026, analyser les ouvertures pour optimiser les campagnes demande le consentement du destinataire ; seule une mesure limitée à la délivrabilité en est exemptée. De plus, certaines messageries chargent les images à la réception du message, ce qui fausse le chiffre. Les clics et les ventes restent les indicateurs fiables."],
        ['q' => "Quel outil choisir entre Brevo, Mailchimp, MailerLite et Odoo ?", 'r' => "Celui qui lit le plus facilement vos données clients et autorise les séquences dont vous avez besoin, au prix de votre palier de contacts. Si vos ventes sont déjà dans Odoo, son application d'e-mail marketing évite un connecteur, mais sa limite quotidienne d'envoi sur Odoo Online doit être vérifiée."],
        ['q' => "Faut-il un nom de domaine à l'entreprise ?", 'r' => "Oui. Envoyer une lettre d'information depuis une adresse Gmail ou Yahoo gratuite empêche d'authentifier correctement les messages avec DKIM et DMARC. Il faut aussi pouvoir modifier la zone DNS du domaine, soi-même ou par la personne qui la gère."],
        ['q' => "La formation peut-elle se faire entièrement à distance ?", 'r' => "Oui, en cinq séances de deux heures et demie environ, avec partage d'écran. Le tri du fichier et la rédaction de la séquence se font entre deux séances, ce qui laisse le temps de consulter la direction sur les contacts douteux."],
        ['q' => "Combien coûte la formation, et un fonds peut-il la financer ?", 'r' => "Le prix est fixé sur devis, selon le nombre de participants, l'état du fichier, l'outil, le nombre de séquences, le format et la revue à un mois. Le FDFP, le FODEFCA ou le 3FPT ont leurs propres conditions : interrogez-les par écrit avant de signer. Aucune prise en charge n'est garantie."],
    ],

    'sources' => [
        ['titre' => 'Aide Gmail, consignes pour les expéditeurs de messages', 'url' => 'https://support.google.com/a/answer/81126?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Gmail, questions fréquentes sur les consignes pour les expéditeurs d\'e-mails (application renforcée depuis novembre 2025, désinscription sous 48 heures)', 'url' => 'https://support.google.com/a/answer/14229414?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Yahoo Sender Hub, Sender Best Practices (exigences pour tous les expéditeurs et pour les envois en nombre)', 'url' => 'https://senders.yahooinc.com/best-practices/', 'date' => '2026-10-05'],
        ['titre' => 'RFC Editor, RFC 8058 : Signaling One-Click Functionality for List Email Headers (janvier 2017)', 'url' => 'https://www.rfc-editor.org/rfc/rfc8058', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, la prospection commerciale par courrier électronique, SMS-MMS et automate d\'appel (mise à jour du 10 juin 2026)', 'url' => 'https://www.cnil.fr/fr/la-prospection-commerciale-par-courrier-electronique-sms-mms-et-automate-dappel', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, comment utiliser une liste repoussoir pour respecter l\'opposition à la prospection ? (10 juin 2026)', 'url' => 'https://www.cnil.fr/fr/comment-utiliser-une-liste-repoussoir-pour-respecter-lopposition-la-prospection', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, pixels de suivi dans les courriers électroniques : la CNIL publie ses recommandations (14 avril 2026)', 'url' => 'https://www.cnil.fr/fr/recommandation-pixel-suivi-courriels', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, recommandation relative aux pixels de suivi dans les courriers électroniques (délibération n° 2026-042 du 12 mars 2026)', 'url' => 'https://www.cnil.fr/sites/default/files/2026-04/recommandation-pixels_de_suivi.pdf', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 332 à 336)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Autorité de protection des données personnelles du Bénin (APDP)', 'url' => 'https://apdp.bj/', 'date' => '2026-10-05'],
        ['titre' => 'Brevo, tarifs (page en français, lue dans un navigateur)', 'url' => 'https://www.brevo.com/fr/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'Mailchimp, tarifs du marketing par e-mail (affichage en euros, lu dans un navigateur)', 'url' => 'https://mailchimp.com/fr/pricing/marketing/', 'date' => '2026-10-05'],
        ['titre' => 'MailerLite, tarifs (affichage en euros, lu dans un navigateur)', 'url' => 'https://www.mailerlite.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Odoo, tarifs', 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Documentation Odoo 20.0, questions fréquentes sur les e-mails (limite quotidienne d\'envoi)', 'url' => 'https://www.odoo.com/documentation/20.0/applications/general/email_communication/faq.html', 'date' => '2026-10-05'],
        ['titre' => 'Documentation Odoo 20.0, E-mail Marketing : gérer les désinscriptions (liste noire)', 'url' => 'https://www.odoo.com/documentation/20.0/applications/marketing/email_marketing/unsubscriptions.html', 'date' => '2026-10-05'],
        ['titre' => 'Documentation Odoo 20.0, Marketing Automation : modèle de campagne Double Opt-in', 'url' => 'https://www.odoo.com/documentation/20.0/applications/marketing/marketing_automation/campaign_templates/double_optin.html', 'date' => '2026-10-05'],
        ['titre' => 'Assistance Apple, protéger la confidentialité des e-mails dans Mail sur Mac', 'url' => 'https://support.apple.com/fr-fr/guide/mail/mlhlp1205/mac', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['analytics-ga4', 'e-commerce', 'marketing-digital-b2b', 'n8n', 'microsoft-365-google-workspace', 'whatsapp-business'],
        'services'    => ['automatisation-ia', 'site-e-commerce', 'landing-page-haute-conversion'],
        'comparatifs' => ['n8n-vs-make-vs-zapier'],
    ],
];
