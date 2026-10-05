<?php
// ============================================================
// data/formations/analytics-ga4.php · Fiche formation « Google Analytics 4
// et pilotage » (vague 1B, lot B, domaine marketing-visibilite). Aucune
// ancienne page. Angle propre : MESURER un site avec GA4 (propriété, flux,
// événements, événements clés, rapports, explorations, audiences,
// attribution, associations à la Search Console et à Google Ads),
// consentement aux cookies (CNIL, règles de Google pour l'UE, mode
// Consentement, loi béninoise n° 2017-20), puis piloter le site avec un
// tableau mensuel de quelques indicateurs. Sœurs non traitées :
// power-bi-looker-studio (construire des tableaux de bord), seo-contenu
// (lecture de la Search Console pour le contenu), publicite-meta-google-ads
// (réglage des campagnes), e-commerce (indicateurs hebdomadaires de la
// boutique), referencement-ia-geo (citations par les assistants).
// Faits relevés le 05/10/2026 à la source (curl) : aide Google Analytics
// (événements clés, limites, mesures améliorées, mode Consentement,
// modélisation, conservation, cookies, Search Console, Google Ads,
// attribution, UTM, trafic interne, sites référents, seuils, rôles,
// audiences, explorations, groupe de canaux, nouveautés 2026, données de
// l'UE, fin d'Universal Analytics), Google for Developers (mode Consentement,
// événements recommandés), règles de Google sur le consentement dans l'UE,
// Google Marketing Platform, aide Search Console, Microsoft Clarity (mode
// Consentement, FAQ), CNIL (mesure d'audience, que dit la loi, sanctions,
// décision d'adéquation), SGG du Bénin (loi n° 2017-20, art. 391 et 415),
// Union africaine (convention de Malabo), DataReportal Côte d'Ivoire, FDFP,
// FODEFCA, 3FPT, France Compétences. Le site lui-même utilise GA4 et
// Microsoft Clarity (partials/tracking.php) : dit sans chiffre d'audience.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation Google Analytics 4 et pilotage : définir les conversions qui comptent, régler les événements dans le respect du consentement, lire les rapports et décider chaque mois avec quelques indicateurs",
    'title'   => "Formation Google Analytics 4 et pilotage | Richard SALANON",
    'meta'    => "Formation Google Analytics 4 : événements clés, rapports, explorations, consentement aux cookies et tableau mensuel pour piloter votre site, sur devis.",
    'en_bref' => "Cette formation apprend aux dirigeants, aux responsables marketing et aux gestionnaires de site à mesurer leur site avec Google Analytics 4 : traduire les objectifs commerciaux en événements clés, régler la collecte et la vérifier, respecter le consentement aux cookies, lire les rapports, les explorations et l'attribution, puis tenir un tableau mensuel qui sert à décider. Elle dure deux jours en quatre demi-journées, suivis d'une séance de deux heures à distance quatre semaines plus tard, sur la propriété réelle de l'entreprise. Elle se tient en intra, en inter, à distance ou en hybride, et son prix est fixé sur devis.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',
    'domaine' => 'marketing-visibilite',
    'forte'   => false,
    'duree'   => "2 jours en quatre demi-journées, plus 2 h de suivi à distance",
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : des objectifs de l'année au plan de mesure, et l'état réel de la propriété",
            'duree'  => '3 h 30',
            'points' => [
                "Lecture des objectifs commerciaux apportés par la direction : pour chacun, l'action visible sur le site qui le rapproche (formulaire envoyé, clic vers WhatsApp, appel, réservation, commande payée, brochure téléchargée).",
                "Compte, propriété, flux de données : comment Google range les choses, et pourquoi le compte doit appartenir à l'entreprise et non au prestataire qui a posé la balise.",
                "Revue des accès : Administrateur, Éditeur, Responsable marketing, Analyste, Lecteur ; qui garde quel rôle après la formation.",
                "Réglages de base vérifiés en séance : fuseau horaire et devise de la propriété, conservation des données sur 14 mois, trafic interne, sites référents à ignorer.",
                "Rédaction du plan de mesure : nom de chaque événement, déclencheur, paramètres utiles, et le petit nombre d'actions promues au rang d'événement clé.",
                "Exercice : le plan de mesure de votre site, validé par la personne qui décidera à partir des chiffres.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : régler la collecte et prouver que chaque événement remonte",
            'duree'  => '3 h 30',
            'points' => [
                "La balise Google sur le site : champ prévu par le CMS, code collé dans l'en-tête, ou Google Tag Manager ; ce que chaque voie permet de modifier sans développeur.",
                "Les mesures améliorées : défilement, clics sortants, recherche interne, vidéos, téléchargements, formulaires ; celles à garder et celles à couper.",
                "Créer un événement à partir d'un autre : la page de remerciement qui devient une demande de devis, le clic sur un lien wa.me qui devient un contact WhatsApp.",
                "Marquer les événements clés, choisir leur méthode de comptabilisation, attendre le délai d'apparition dans les rapports.",
                "Paramètres UTM pour les liens que Google ne sait pas reconnaître seul : publications, lettres d'information, messages WhatsApp, QR codes imprimés.",
                "Exercice : déclencher soi-même chaque événement du plan et le retrouver dans le rapport Temps réel et dans DebugView.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : lire les rapports, les explorations, les audiences et l'attribution",
            'duree'  => '3 h 30',
            'points' => [
                "Rapports d'acquisition, pages de destination, événements : répondre en quelques clics à « d'où viennent nos demandes ? ».",
                "Sessions avec engagement, taux d'engagement, taux de rebond : ce que mesurent vraiment ces chiffres dans GA4.",
                "Explorations : format libre, entonnoir de la demande de devis, chemin, et la limite imposée par la durée de conservation.",
                "Audiences utiles à une PME, et leur usage dans Google Ads quand l'entreprise fait de la publicité.",
                "Les trois modèles d'attribution disponibles, la place de l'accès direct, la période de suivi des événements clés.",
                "Associer la Search Console et Google Ads : les rapports qui apparaissent, les droits nécessaires, les délais.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : consentement aux cookies, tableau mensuel et évaluation",
            'duree'  => '3 h 30',
            'points' => [
                "Ce que demandent la CNIL, les règles de Google pour l'Europe et la loi béninoise n° 2017-20 quand un site mesure ses visiteurs.",
                "Mode Consentement de base ou avancé : ce qui part chez Google avant le choix du visiteur, et ce qui manque ensuite dans les rapports.",
                "Durée de vie des cookies d'Analytics et durée de conservation : les régler sur ce que l'entreprise peut justifier.",
                "Le tableau mensuel d'une page : six à huit indicateurs, leur définition, leur seuil d'alerte et la décision qu'ils servent.",
                "Rapprochement des événements clés avec les demandes réellement reçues par l'équipe, par e-mail, par téléphone et sur WhatsApp.",
                "Évaluation : chaque participant présente son plan de mesure, la preuve que ses événements remontent et son premier tableau mensuel.",
            ],
        ],
        [
            'titre'  => "Quatre semaines plus tard, séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Premier tableau mensuel rempli sans le formateur, lu avec la direction.",
                "Écarts entre les événements clés et les demandes reçues, retracés jusqu'à leur cause.",
                "Événements à corriger, à ajouter ou à abandonner, et liens UTM oubliés.",
                "Décisions du mois écrites, avec le nom de la personne qui les porte.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => "2 jours en quatre demi-journées, plus 2 h de suivi à distance"],
        ['l' => 'Public', 'v' => "Dirigeants, responsables marketing, gestionnaires de site"],
        ['l' => 'Formats', 'v' => "Intra, inter, à distance ou hybride, en petit groupe"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que saurez-vous mesurer et décider après la formation, et que laisse-t-elle de côté ?",
            'paragraphes' => [
                "Beaucoup d'entreprises ont une balise Google Analytics sur leur site depuis des années. Elle a été posée par le prestataire qui a livré le site, sous son propre compte parfois, et personne ne l'ouvre. Le jour où la direction demande combien de devis le site a produits le trimestre dernier, ou si la campagne Facebook a servi à quelque chose, la réponse tient de l'impression. Cette formation part de cette situation très ordinaire. Elle apprend à faire de GA4 un instrument de décision, sur votre propriété et avec vos objectifs, plutôt qu'un compteur de visites consulté une fois par an.",
                "À la fin des deux jours, chaque participant sait faire seul sept choses, vérifiées sur la propriété de l'entreprise. Dire qui détient les accès et les corriger. Écrire un plan de mesure qui relie chaque objectif commercial à une action du site. Créer un événement et le marquer comme événement clé. Construire un lien UTM et le retrouver dans les rapports. Prouver qu'un événement remonte, en temps réel. Répondre à cinq questions de la direction avec les rapports et une exploration en entonnoir. Expliquer ce que le consentement aux cookies retire des chiffres, et tenir le tableau mensuel du site.",
                "La formation reste du côté de la mesure. Construire un tableau de bord qui croise le site, la comptabilité et le logiciel de gestion relève de la formation Tableaux de bord Power BI et Looker Studio. Régler une campagne, son ciblage et ses enchères relève de Publicité Meta Ads et Google Ads, et le travail des requêtes dans la Search Console, de SEO et marketing de contenu. Les citations par les assistants d'IA se suivent dans la formation au <a href=\"/formations/referencement-ia-geo\">référencement IA (GEO)</a>, et les chiffres de la semaine d'une boutique dans <a href=\"/formations/e-commerce\">Vendre en ligne : e-commerce</a>.",
                "Elle n'aborde pas non plus la mesure côté serveur, l'export vers BigQuery ou le développement d'un connecteur : ces sujets concernent des volumes et des équipes techniques que peu de PME ont. Elle ne remplace pas l'avis d'un juriste sur une bannière de cookies, mais elle apprend à poser les bonnes questions et à vérifier ce que fait réellement la balise. Si vous voulez d'abord un diagnostic complet du site, mesure comprise, c'est l'objet de l'<a href=\"/services/audit-seo-complet\">audit SEO complet</a> ; la formation vient ensuite, pour que l'équipe fasse vivre ce que l'audit a remis en ordre.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "À qui s'adresse la formation, avec quels prérequis et quel matériel ?",
            'intro' => "Le public se reconnaît à une question qu'il n'arrive pas à trancher : d'où viennent nos ventes et nos demandes, et que faut-il financer le mois prochain ? Un entretien de cadrage, avant le devis, vérifie les accès disponibles et le niveau de chacun.",
            'items' => [
                ['titre' => "Le dirigeant", 'texte' => "Il apporte les objectifs de l'année et décide de ce qui compte comme une réussite. Il suit au minimum la première matinée, où se fixe le plan de mesure, et la dernière après-midi, où naît le tableau mensuel. Il n'a pas besoin de savoir régler une balise : il doit savoir lire ce qu'elle produit et dire quand un chiffre ne lui semble pas plausible."],
                ['titre' => "Le responsable marketing ou communication", 'texte' => "C'est l'utilisateur principal. Il tient le plan de mesure, marque les liens de ses campagnes, ouvre les rapports chaque semaine et prépare le tableau du mois. La formation lui donne le rôle de Responsable marketing dans la propriété, qui permet de créer événements, événements clés et audiences."],
                ['titre' => "Le gestionnaire du site", 'texte' => "Webmaster interne, assistant qui administre WordPress, Wix, Shopify ou Odoo : il pose la balise, crée les déclencheurs et vérifie que rien ne casse après une mise à jour du site. Il repart avec la liste des réglages à contrôler après chaque modification importante."],
                ['titre' => "Prérequis", 'texte' => "Un site en ligne, un accès administrateur à la propriété Google Analytics ou, à défaut, au site lui-même pour en créer une, et la liste des objectifs commerciaux de l'année. Aucune notion de programmation n'est demandée. Savoir se servir d'un tableur aide pour le tableau mensuel."],
                ['titre' => "Si personne n'a les accès", 'texte' => "C'est fréquent : la propriété a été créée par une agence disparue ou un ancien salarié. Le cadrage liste les démarches pour retrouver les droits ou repartir d'une propriété neuve au nom de l'entreprise. On ne commence pas la formation sur un compte qui appartient à quelqu'un d'autre."],
                ['titre' => "Matériel", 'texte' => "Un ordinateur par participant, un navigateur récent, et un téléphone pour tester le site comme un visiteur. L'accès à l'administration du site ou à Google Tag Manager est préparé avant la séance, ainsi que l'accès en lecture à la Search Console et, si l'entreprise fait de la publicité, au compte Google Ads."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'etapes',
            'titre' => "Quels exercices les participants font-ils sur la propriété de leur entreprise ?",
            'items' => [
                ['titre' => "L'inventaire des accès", 'duree' => "30 minutes", 'texte' => "Chacun ouvre la gestion des accès du compte et de la propriété, relève chaque personne et son rôle, puis entoure ceux qui n'ont plus rien à faire là : agence, stagiaire parti, adresse personnelle. La direction décide séance tenante qui reste administrateur."],
                ['titre' => "Le plan de mesure", 'duree' => "1 heure", 'texte' => "À partir des objectifs de l'année, le groupe remplit un tableau : objectif, action du site qui le sert, nom de l'événement, déclencheur, paramètre utile, événement clé ou non. Un objectif sans action mesurable sur le site est noté à part : il se suivra ailleurs, dans le logiciel commercial ou la comptabilité."],
                ['titre' => "Le parcours de test", 'duree' => "45 minutes", 'texte' => "Chaque participant joue le visiteur sur son téléphone : il arrive par un lien marqué, lit une page d'offre, clique sur le bouton WhatsApp, remplit le formulaire. Un binôme suit les événements dans le rapport Temps réel. Tout ce qui n'apparaît pas est corrigé avant la pause."],
                ['titre' => "Les liens marqués", 'duree' => "30 minutes", 'texte' => "Le groupe fixe une règle de nommage unique pour utm_source, utm_medium et utm_campaign, en minuscules, puis construit les liens des trois prochaines actions : la publication du mois, la lettre d'information, le QR code de la plaquette. La règle est écrite dans le support pour que tout le monde l'applique."],
                ['titre' => "Les cinq questions de la direction", 'duree' => "1 heure", 'texte' => "Le dirigeant pose cinq questions réelles, par exemple : quelle source amène le plus de demandes, quelle page d'offre fait fuir, la campagne de septembre a-t-elle servi. Les participants cherchent la réponse dans les rapports, puis disent ce que GA4 ne peut pas savoir."],
                ['titre' => "L'entonnoir de la demande de devis", 'duree' => "45 minutes", 'texte' => "Dans une exploration en entonnoir, le groupe trace le chemin page d'offre, formulaire commencé, formulaire envoyé. L'étape où la plupart des visiteurs abandonnent devient la première amélioration à proposer au responsable du site."],
                ['titre' => "La bannière passée au crible", 'duree' => "30 minutes", 'texte' => "Les participants refusent les cookies sur leur propre site, puis observent ce que la balise envoie encore. Ils comparent avec ce qu'annonce la politique de confidentialité, et notent les écarts à corriger avec le prestataire du site."],
                ['titre' => "Le premier tableau mensuel", 'duree' => "45 minutes", 'texte' => "Chaque participant remplit le tableau du dernier mois avec les vrais chiffres, puis le présente en cinq minutes comme en comité de direction : ce qui a changé, pourquoi, et deux décisions. Le groupe vérifie un chiffre contre sa source."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels événements marquer comme événements clés selon votre activité ?",
            'legende' => "Exemples travaillés en séance. Les noms d'événements suivent la liste des événements recommandés de Google (page mise à jour le 17 septembre 2026) quand elle prévoit le cas ; Google Analytics permet de marquer jusqu'à 30 événements clés dans une propriété standard, mais un site de PME en retient rarement plus de cinq.",
            'entetes' => ['Activité', 'Action qui compte', 'Événement conseillé', 'Comment on le mesure', 'Piège fréquent'],
            'lignes'  => [
                ["Entreprise de services, cabinet, artisan", "Demande de devis envoyée", "generate_lead", "Vue de la page de remerciement, ou envoi du formulaire signalé par le site", "Compter form_submit sur tous les formulaires, y compris l'inscription à la lettre d'information"],
                ["Commerce qui vend par messagerie", "Ouverture d'une conversation WhatsApp", "contact_whatsapp (événement créé)", "Clic sur un lien dont l'adresse contient wa.me", "Croire que chaque clic est une vente : on le rapproche des conversations réellement reçues"],
                ["Boutique en ligne", "Commande payée", "purchase, marqué événement clé par défaut", "Envoyé par la plateforme ou son extension, avec la valeur et la devise", "Une passerelle de paiement qui apparaît comme site référent et vole le crédit de la vente"],
                ["Hôtel, restaurant, clinique", "Réservation ou prise de rendez-vous", "Événement créé sur la page de confirmation", "Page de confirmation du moteur de réservation, si elle est sur le même domaine", "Un moteur de réservation hébergé ailleurs, qui coupe la session en deux"],
                ["École, organisme de formation", "Inscription ou téléchargement de la brochure", "sign_up, ou file_download filtré sur le nom du fichier", "Mesures améliorées pour le téléchargement, page de confirmation pour l'inscription", "Promouvoir tous les téléchargements, alors qu'un seul fichier compte"],
                ["Éditeur de logiciel, entreprise B2B", "Demande de démonstration, puis prospect qualifié", "generate_lead, puis qualify_lead envoyé plus tard", "Formulaire du site, puis événement transmis quand le commercial qualifie le contact", "Mesurer les inscriptions à l'essai sans jamais savoir lesquelles deviennent des clients"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Comment lire les rapports de GA4 sans en tirer de fausses conclusions ?",
            'intro' => "La plupart des erreurs de lecture viennent de définitions que personne n'a expliquées. Celles-ci sont relues en séance dans l'aide de Google Analytics, consultée le 5 octobre 2026, puis vérifiées sur les rapports de chaque participant.",
            'items' => [
                ['titre' => "Une session avec engagement n'est pas une visite réussie", 'texte' => "Google la définit comme une session de plus de 10 secondes, ou qui comporte un événement clé, ou au moins deux pages vues. Le taux de rebond est simplement l'inverse du taux d'engagement. Un taux d'engagement élevé sur une page de prix peut donc cacher des visiteurs qui lisent le tarif et partent."],
                ['titre' => "L'accès direct ne reçoit presque jamais de crédit", 'texte' => "Les trois modèles d'attribution de GA4 excluent les visites directes, sauf quand tout le chemin vers l'événement clé en est fait. Un client qui découvre l'entreprise par une publication, puis revient en tapant l'adresse, est crédité à la publication. Les liens ouverts depuis une messagerie arrivent souvent sans provenance : seuls les paramètres UTM les rendent visibles."],
                ['titre' => "Un réglage ne change pas le passé", 'texte' => "Marquer un événement comme événement clé agit à partir de ce moment, sans réécrire l'historique, et l'aide de Google prévoit jusqu'à 24 heures avant son apparition dans les rapports standards. On note donc la date de chaque changement de réglage dans le tableau mensuel, pour ne pas confondre une hausse réelle et un nouveau comptage."],
                ['titre' => "Les explorations s'arrêtent à la durée de conservation", 'texte' => "Une propriété standard conserve les données au niveau de l'événement 2 mois ou 14 mois. Les rapports agrégés ne sont pas touchés, mais une exploration ou un entonnoir ne remonte pas plus loin que ce réglage. Une propriété réglée sur 2 mois ne permet donc aucune comparaison avec l'an passé dans les explorations."],
                ['titre' => "Des lignes peuvent disparaître", 'texte' => "Quand un rapport contient des données démographiques ou peu d'utilisateurs, Google applique des seuils qui masquent certaines lignes pour qu'on ne puisse pas reconnaître une personne. Élargir la période fait souvent réapparaître les données. Sur un petit site, on raisonne par mois ou par trimestre plutôt que par jour."],
                ['titre' => "Le canal « Assistant IA » existe depuis mai 2026", 'texte' => "Selon la page des nouveautés de Google Analytics, les visites venues d'assistants comme ChatGPT, Gemini ou Claude reçoivent depuis le 13 mai 2026 le support « ai-assistant » et un canal dédié. Les aperçus IA et le mode IA de Google n'y figurent pas : ils restent dans la recherche naturelle."],
                ['titre' => "Les conversions Google Ads ne sont pas les événements clés", 'texte' => "Une conversion Google Ads peut être créée à partir d'un événement clé, mais l'aide de Google précise qu'elle n'apparaît pas dans les rapports standards d'Analytics : elle se lit dans Google Ads ou dans la section Publicité. Deux chiffres différents pour la même action ne signalent donc pas forcément une panne."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => "Mode Consentement de base ou avancé : que choisir pour un site qui reçoit des visiteurs européens ?",
            'options'  => ['Mode Consentement de base', 'Mode Consentement avancé'],
            'criteres' => [
                ['critere' => "Avant le choix du visiteur", 'valeurs' => ["Les balises Google sont bloquées : rien n'est envoyé", "Les balises se chargent et appliquent l'état par défaut, refusé en général"]],
                ['critere' => "Si le visiteur refuse", 'valeurs' => ["Aucune donnée, pas même l'état du consentement", "Des signaux sans cookie partent vers Google, sans identifiant d'appareil"]],
                ['critere' => "Données estimées dans GA4", 'valeurs' => ["Aucune modélisation du comportement", "Modélisation possible si la propriété atteint les seuils fixés par Google"]],
                ['critere' => "Conversions dans Google Ads", 'valeurs' => ["Modèle général, peu précis", "Modèle propre à l'annonceur"]],
                ['critere' => "Mise en place", 'valeurs' => ["Plus simple : on ne charge la balise qu'après l'accord", "Plus délicate : ordre de chargement et état par défaut à vérifier page par page"]],
                ['critere' => "Pour qui", 'valeurs' => ["Petit site, peu de publicité, volonté de ne rien transmettre sans accord", "Site à fort trafic européen qui achète de la publicité Google"]],
            ],
            'verdict'  => "Pour la plupart des PME accompagnées, le mode de base suffit et se défend plus facilement. Google réserve la modélisation du comportement aux propriétés qui collectent au moins 1 000 événements par jour avec le consentement refusé pendant sept jours, et qui comptent au moins 1 000 utilisateurs par jour ayant accepté sur sept des 28 derniers jours : un petit site n'y arrive pas, et le mode avancé lui apporte peu. Le choix se fait en séance, avec le prestataire du site et la plateforme de consentement déjà en place.",
        ],
        [
            'type'        => 'prose',
            'titre'       => "Cookies et consentement : que faut-il régler avant de mesurer, en Europe et en Afrique ?",
            'paragraphes' => [
                "En France, la CNIL pose la règle dans ses lignes directrices du 17 septembre 2020 : le visiteur doit pouvoir accepter ou refuser les cookies avec la même simplicité, et retirer son accord aussi facilement qu'il l'a donné. Sa page sur la mesure d'audience, datée du 4 juillet 2025, admet une exemption de consentement pour les seuls traceurs qui servent à la statistique anonyme de l'éditeur, sans recoupement avec d'autres traitements ni transmission de données non anonymes à des tiers. Elle recommande une durée de vie de treize mois et une conservation de vingt-cinq mois au plus.",
                "Google ajoute ses propres règles. Ses règles relatives au consentement de l'utilisateur dans l'Union européenne, lues le 5 octobre 2026, imposent pour les visiteurs de l'Espace économique européen, du Royaume-Uni et de la Suisse un consentement valable pour les cookies quand la loi l'exige, et pour l'usage des données à des fins de publicité personnalisée, avec une preuve conservée et un moyen simple de le retirer. Associer GA4 à Google Ads ou activer les signaux Google fait sortir la mesure du cadre étroit de la statistique : la formation apprend à le voir dans les réglages, pas seulement dans les contrats.",
                "Côté réglages, deux chiffres méritent un contrôle. Le cookie _ga dure deux ans par défaut selon l'aide de Google Analytics, mais l'expiration se règle dans les paramètres de la balise, de « Immédiatement » à 25 mois. Et pour les visiteurs situés dans l'Union européenne, au Royaume-Uni et en Suisse, Google indique qu'Analytics ne journalise ni ne stocke leur adresse IP. Les transferts vers les États-Unis reposent, selon la CNIL, sur la décision d'adéquation adoptée par la Commission européenne le 10 juillet 2023 pour les organismes inscrits sur la liste du cadre de protection des données.",
                "Au Bénin, la loi n° 2017-20 portant code du numérique s'applique dès que la mesure touche des données personnelles. Son article 415 oblige à informer la personne, au plus tard lors de la collecte, des destinataires des données, de leur durée de conservation et de tout transfert vers un État tiers ; son article 391 encadre ces transferts. Une politique de confidentialité qui ne nomme ni Google ni Microsoft ne remplit pas cette obligation. À l'échelle du continent, la convention de l'Union africaine sur la cybersécurité et la protection des données personnelles, adoptée à Malabo le 27 juin 2014, est entrée en vigueur le 8 juin 2023.",
                "Les contrôles ne visent pas que les grandes plateformes. La liste des sanctions publiée par la CNIL montre, le 16 octobre 2025, une amende de 3 000 euros infligée en procédure simplifiée à une société de vente à distance pour un défaut de consentement aux cookies, et, le 1er septembre 2025, une amende de 325 millions d'euros contre une société développant plusieurs services en ligne. La règle pratique enseignée est la même pour tous : ce que la bannière promet, la balise doit le faire, et la politique de confidentialité doit le dire.",
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi une adresse e-mail ou un numéro de téléphone ne doivent-ils jamais arriver dans GA4 ?",
            'texte' => "Parce qu'Analytics n'est pas un fichier de clients, et que Google demande, dans son aide sur les mesures améliorées, de s'assurer qu'aucune information permettant d'identifier personnellement l'utilisateur n'est collectée. La fuite est rarement volontaire. Un formulaire qui renvoie les champs dans l'adresse de la page de remerciement, une recherche interne où le client tape son numéro, un paramètre d'URL qui contient le nom du patient : tout cela remonte dans l'emplacement de la page ou le terme de recherche. En séance, chaque participant fait une recherche avec une fausse adresse e-mail sur son propre site, puis vérifie qu'elle n'apparaît nulle part dans les rapports.",
        ],
        [
            'type'  => 'points',
            'titre' => "Comment les séances se déroulent-elles, et que garde l'équipe ensuite ?",
            'intro' => "Le principe : rien n'est montré sur une propriété de démonstration quand la vôtre existe. Chaque réglage est fait sur votre site, testé devant le groupe, et noté dans un plan que l'équipe garde.",
            'items' => [
                ['titre' => "Des groupes réduits", 'texte' => "Huit personnes au plus en salle, six à distance. Un événement mal nommé ou un déclencheur trop large ne se voit qu'en regardant l'écran de chacun, et le formateur doit pouvoir le faire à chaque exercice."],
                ['titre' => "La preuve par le test", 'texte' => "Un réglage n'est pas considéré comme fait tant qu'il n'a pas été déclenché et retrouvé dans le rapport Temps réel. Cette discipline évite la situation classique : un événement clé configuré il y a six mois, qui n'a jamais rien compté."],
                ['titre' => "Des droits ajustés pendant la séance", 'texte' => "Chaque participant travaille avec son propre compte et le rôle qui correspond à son poste. Les accès partagés et les comptes d'anciens prestataires sont retirés avant la fin de la première matinée, avec l'accord de la direction."],
                ['titre' => "Des supports qui restent à l'entreprise", 'texte' => "Le plan de mesure rempli, la règle de nommage des liens UTM, la liste des réglages à contrôler après une mise à jour du site, le modèle de tableau mensuel et le pas à pas de chaque manipulation. Tout est remis dans un format modifiable."],
                ['titre' => "Une évaluation sur pièces", 'texte' => "La réussite se juge sur trois éléments : un plan de mesure validé par la direction, des événements clés dont le déclenchement a été prouvé, un tableau mensuel rempli avec les vrais chiffres. Une attestation de fin de formation en fait état."],
                ['titre' => "Un suivi sur des données accumulées", 'texte' => "Quatre semaines après, la propriété contient enfin un mois de données propres. La séance de suivi part de là, et un canal direct reste ouvert entre-temps pour les questions de réglage."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils utilise-t-on, dans quelle version, et que coûtent-ils ?",
            'legende' => "Coûts et fonctions relevés le 5 octobre 2026 sur les pages officielles de Google et de Microsoft. Aucun abonnement payant n'est nécessaire pour suivre la formation ; les budgets publicitaires et les plateformes de consentement se règlent directement à leurs éditeurs.",
            'entetes' => ['Outil', 'Usage en formation', 'Coût selon l\'éditeur', 'Point d\'attention'],
            'lignes'  => [
                ["Google Analytics 4", "Propriété, flux, événements, rapports, explorations, audiences", "Sans frais pour les PME ; Analytics 360, payant, vise les grandes entreprises", "Fonctions ajoutées en 2026 : insights générés sur la page d'accueil (février), Assistant aux tâches (avril), canal Assistant IA (mai)"],
                ["Google Tag Manager", "Poser la balise et créer des déclencheurs sans toucher au code du site", "Sans frais ; Tag Manager 360 pour les grandes entreprises", "Chaque balise ajoutée est un script de plus à surveiller sur le site"],
                ["Google Search Console", "Association à GA4, rapports de recherche naturelle", "Service gratuit selon l'aide de Google", "Un flux de données web ne s'associe qu'à une seule propriété Search Console"],
                ["Fiche d'établissement Google", "Association à GA4, proposée depuis le 8 juin 2026", "Sans frais", "Sept métriques de la fiche, disponibles sur six mois glissants"],
                ["Microsoft Clarity", "Cartes de chaleur et enregistrements de sessions, en complément de GA4", "Gratuit, sans limite de trafic selon Microsoft", "Enregistrements conservés 30 jours ; signal de consentement exigé pour l'Europe depuis le 31 octobre 2025"],
                ["Plateforme de gestion du consentement", "Bannière et transmission du choix du visiteur aux balises", "Selon l'éditeur choisi ; Google publie une liste de partenaires intégrés", "La bannière ne suffit pas : on vérifie que la balise respecte le refus"],
                ["Google Ads", "Association à GA4 et import des événements clés comme conversions", "Budget publicitaire payé à Google", "Données Ads visibles dans GA4 sous 48 heures après l'association"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemble la formation selon l'entreprise, en Afrique francophone et en Europe ?",
            'items' => [
                ['secteur' => "Centre de formation professionnelle, à Cotonou", 'probleme' => "Les inscriptions arrivent par WhatsApp et par le formulaire du site, mais la directrice ne sait pas si les publications Facebook de la rentrée ont rempli les classes.", 'solution' => "Événement créé sur les clics wa.me, inscription marquée comme événement clé, liens UTM sur chaque publication et sur le QR code de l'affiche, puis tableau mensuel lu en réunion pédagogique pendant la période d'inscription."],
                ['secteur' => "Hôtel en bord de mer, près d'Assinie", 'probleme' => "Les réservations passent par un moteur hébergé sur un autre domaine ; dans GA4, ce moteur apparaît comme la première source de clients.", 'solution' => "Domaine du moteur ajouté aux sites référents à ignorer, clic vers le moteur suivi comme intention de réserver, et rapprochement mensuel avec les réservations confirmées par la réception."],
                ['secteur' => "Cabinet d'expertise comptable, à Abidjan", 'probleme' => "Le formulaire de contact reçoit beaucoup de messages publicitaires, et les « conversions » affichées n'ont rien à voir avec les clients signés.", 'solution' => "Événement clé limité à la page de remerciement du formulaire de devis, filtre du trafic interne pour l'équipe, et comptage mensuel des demandes réelles notées par l'assistante, comparé à GA4."],
                ['secteur' => "Boutique de cosmétiques, à Douala", 'probleme' => "Les ventes en ligne sont réglées par une passerelle de paiement, et le rapport d'acquisition attribue la plupart des commandes à cette passerelle.", 'solution' => "Domaine de la passerelle déclaré comme site référent à ignorer, devise de la propriété contrôlée, événement purchase vérifié commande par commande pendant une semaine."],
                ['secteur' => "Éditeur de logiciel de gestion, à Lyon", 'probleme' => "La bannière de cookies refuse tout par défaut, et le trafic affiché a baissé de moitié depuis sa mise en place ; la direction croit à une chute des visites.", 'solution' => "Lecture des règles de la CNIL et du mode Consentement, constat que la propriété n'atteint pas les seuils de modélisation, comparaison des tendances plutôt que des volumes, et rapprochement avec les essais créés dans le logiciel."],
                ['secteur' => "Association humanitaire, entre Bruxelles et Dakar", 'probleme' => "Deux sites, un par pays, deux propriétés, et des rapports aux bailleurs bâtis à la main à partir de captures d'écran.", 'solution' => "Plan de mesure commun, mêmes noms d'événements sur les deux sites, règles de consentement adaptées au pays des visiteurs, et tableau mensuel unique où chaque chiffre renvoie à son rapport."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Que contient le tableau mensuel qui sert à piloter le site ?",
            'legende' => "Modèle construit le dernier après-midi. Les seuils d'alerte sont fixés par chaque entreprise à partir de ses propres mois, jamais d'après une moyenne trouvée en ligne ; le tableau tient sur une page et se lit en dix minutes.",
            'entetes' => ['Indicateur', 'Où le lire dans GA4', 'Question de direction', 'Décision qu\'il peut déclencher'],
            'lignes'  => [
                ["Événements clés du mois, par type", "Rapport des événements clés, ou carte dédiée de la page d'accueil", "Le site a-t-il produit plus ou moins de demandes que le mois dernier ?", "Chercher la cause d'une baisse avant de changer quoi que ce soit"],
                ["Événements clés par canal", "Acquisition de trafic, groupe de canaux par défaut", "Quelle source amène des demandes, et pas seulement des visites ?", "Déplacer du temps ou du budget vers le canal qui produit"],
                ["Taux d'événements clés des pages d'offre", "Pages de destination, avec la métrique ajoutée au rapport", "Quelle page attire sans convaincre ?", "Réécrire la page, son appel à l'action ou son formulaire"],
                ["Abandon dans l'entonnoir du devis", "Exploration en entonnoir enregistrée", "Où perd-on les visiteurs prêts à demander ?", "Raccourcir le formulaire, ajouter le bouton WhatsApp"],
                ["Clics depuis la recherche naturelle", "Rapports Search Console dans GA4, une fois l'association faite", "Google nous envoie-t-il des visiteurs sur nos offres ?", "Confier la page faible au travail de contenu"],
                ["Coût par demande", "Dépense publicitaire divisée par les événements clés du canal payant", "La publicité paie-t-elle ce qu'elle coûte ?", "Couper, réduire ou maintenir une campagne"],
                ["Écart entre GA4 et les demandes reçues", "Comparaison avec le registre tenu par l'équipe", "Peut-on encore se fier à la mesure ?", "Corriger un événement, une bannière ou un lien cassé"],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés faut-il connaître avant de régler sa propriété ?",
            'items' => [
                ['valeur' => '30', 'libelle' => "Événements que l'on peut marquer comme événements clés dans une propriété standard, contre 50 en Analytics 360, en plus de ceux que Google marque par défaut", 'source' => 'Aide Google Analytics, marquer des événements comme événements clés', 'url' => 'https://support.google.com/analytics/answer/13128484?hl=fr'],
                ['valeur' => '14 mois', 'libelle' => "Durée de conservation la plus longue d'une propriété standard pour les données d'événement ; elle limite les explorations, pas les rapports agrégés", 'source' => 'Aide Google Analytics, conservation des données', 'url' => 'https://support.google.com/analytics/answer/7667196?hl=fr'],
                ['valeur' => '2 ans', 'libelle' => "Durée de vie par défaut du cookie _ga, réglable de « Immédiatement » à 25 mois dans les paramètres de la balise", 'source' => 'Aide Google Analytics, utilisation des cookies sur les sites Web', 'url' => 'https://support.google.com/analytics/answer/11397207?hl=fr'],
                ['valeur' => '1 000', 'libelle' => "Événements par jour avec le consentement refusé, pendant au moins sept jours, sous lesquels une propriété n'a pas droit à la modélisation du comportement", 'source' => 'Aide Google Analytics, modélisation du comportement pour le mode Consentement', 'url' => 'https://support.google.com/analytics/answer/11161109?hl=fr'],
                ['valeur' => '16 mois', 'libelle' => "Historique de la Search Console repris dans GA4 après l'association ; les données arrivent 48 heures après leur collecte", 'source' => 'Aide Google Analytics, associer la Search Console', 'url' => 'https://support.google.com/analytics/answer/10737381?hl=fr'],
                ['valeur' => '1er juillet 2024', 'libelle' => "Semaine à partir de laquelle les données d'Universal Analytics ne sont plus consultables, ni dans l'interface ni par l'API (page mise à jour le 12 décembre 2024)", 'source' => 'Aide Google Analytics, GA4 a remplacé Universal Analytics', 'url' => 'https://support.google.com/analytics/answer/11583528?hl=fr'],
                ['valeur' => '40,7 %', 'libelle' => "Part de la population de la Côte d'Ivoire qui utilise Internet fin 2025, soit 13,4 millions de personnes, selon le rapport publié fin 2025", 'source' => "DataReportal, Digital 2026 Côte d'Ivoire", 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Intra, inter, à distance ou hybride : comment la formation s'organise-t-elle ?",
            'legende' => "Le format se choisit au cadrage, selon le nombre de participants, les accès disponibles et l'éloignement de l'équipe. Dans tous les cas, chacun travaille sur la propriété de son entreprise.",
            'entetes' => ['Format', 'Pour qui', 'Rythme habituel', 'Ce qui se fait sur vos données'],
            'lignes'  => [
                ["Intra-entreprise", "Une direction, son équipe marketing et le gestionnaire du site", "Quatre demi-journées sur deux semaines, puis le suivi", "Tout : accès, plan de mesure, réglages, tableau mensuel, sans rien montrer à d'autres entreprises"],
                ["Inter-entreprises", "Une ou deux personnes par structure, dirigeants de petites entreprises ou responsables marketing isolés", "Deux journées consécutives", "Chacun règle sa propre propriété ; les chiffres projetés au groupe viennent d'un compte de démonstration"],
                ["À distance", "Équipes réparties entre plusieurs villes ou pays, en Afrique, en Europe ou au Canada", "Quatre séances de trois heures environ, partage d'écran", "Les mêmes exercices ; le parcours de test se fait sur le téléphone de chacun, pendant que le formateur suit le rapport Temps réel"],
                ["Hybride", "Entreprises dont la balise est à poser ou à refaire", "Une journée en salle pour les réglages, puis la lecture des rapports à distance deux semaines plus tard", "La seconde partie travaille sur des données déjà collectées avec le nouveau plan de mesure"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation, et qu'est-ce qui fait varier le prix ?",
            'intro'      => "Aucun montant n'est publié : la formation est chiffrée sur devis, après un premier échange, un cadrage et un devis gratuits, avec une réponse sous 24 heures. Les outils utilisés sont sans frais ; un budget publicitaire ou une plateforme de consentement payante se règle directement à son éditeur.",
            'items'      => [
                ['offre' => "Formation de deux jours", 'prix' => 'Sur devis', 'inclus' => ["Quatre demi-journées sur votre propriété", "Plan de mesure, règle UTM et modèle de tableau mensuel", "Évaluation et attestation"]],
                ['offre' => "Remise en ordre préalable", 'prix' => 'Sur devis', 'inclus' => ["Récupération des accès ou nouvelle propriété au nom de l'entreprise", "Pose ou contrôle de la balise avec le gestionnaire du site", "Vérification de la bannière de consentement"]],
                ['offre' => "Séance de suivi", 'prix' => 'Sur devis', 'inclus' => ["Deux heures à distance, quatre semaines après", "Lecture du premier tableau mensuel", "Corrections d'événements et de liens"]],
            ],
            'variations' => [
                "Le nombre de participants et de groupes, huit personnes au plus en salle.",
                "L'état de départ : propriété propre, propriété à reprendre, ou balise absente du site.",
                "Le nombre de sites, de langues et de pays de visiteurs à couvrir.",
                "Le format et le lieu : vos bureaux à Cotonou, une autre ville ou un autre pays, la visioconférence.",
                "L'ajout de la séance de suivi ou d'un accompagnement sur plusieurs mois.",
                "Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier du devis.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Un fonds de formation continue peut-il financer la session ?",
            'paragraphes' => [
                "Aucune prise en charge n'est promise : seul le fonds décide, sur dossier. En Côte d'Ivoire, la page du FDFP consacrée au plan de formation, consultée le 5 octobre 2026, ouvre ce dispositif à l'entreprise qui justifie du paiement régulier de ses deux taxes, prévoit les actions intra animées par un intervenant extérieur, et classe les formations liées à l'utilisation de l'ordinateur parmi celles qui suivent des dispositions particulières ; le règlement vient après le contrôle du fonds et l'approbation de sa Commission permanente. Au Bénin, les statuts du FODEFCA ont été approuvés par le décret n° 2022-286 du 11 mai 2022. Au Sénégal, le 3FPT tient un guichet pour le personnel des entreprises et les membres des organisations professionnelles.",
                "En France, France Compétences rappelle que tout prestataire qui veut accéder aux fonds publics ou mutualisés doit être certifié Qualiopi depuis le 1er janvier 2022. Richard SALANON n'a ni cette certification ni l'agrément d'un fonds africain. La démarche utile consiste à envoyer le programme et le devis au fonds, à obtenir sa réponse par écrit avant de signer, et à prévoir la dépense comme si l'aide ne venait pas. Les feuilles de présence, le programme et les résultats de l'évaluation remis en fin de session servent à tout dossier déposé ensuite.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs voit-on dans les mois qui suivent, et comment les éviter ?",
            'intro' => "Elles tiennent rarement à GA4 lui-même. Elles viennent des changements que vit le site après la formation, et de l'oubli progressif du plan de mesure.",
            'items' => [
                ['titre' => "La refonte qui efface la balise", 'texte' => "Un nouveau thème ou un nouveau site est mis en ligne, et la balise ou le déclencheur du formulaire disparaissent. Les demandes semblent s'effondrer alors qu'elles ne sont plus comptées. Après chaque mise à jour importante, le gestionnaire refait le parcours de test appris en séance."],
                ['titre' => "Vingt événements clés", 'texte' => "Chacun ajoute le sien : le défilement, la vidéo, la page contact consultée. Le tableau du mois ne distingue plus une demande d'une simple curiosité. Un événement clé se rapproche de la vente ; le reste reste un événement."],
                ['titre' => "Des liens UTM écrits au hasard", 'texte' => "Facebook, facebook et fb deviennent trois sources différentes, et la campagne se dissout dans les rapports. La règle de nommage écrite en formation s'applique à toute personne qui publie, prestataires compris."],
                ['titre' => "Juger sur une semaine", 'texte' => "Sur un site de PME, quelques demandes de plus ou de moins font varier les pourcentages du simple au double. Le tableau se lit par mois, et l'on compare avec le même mois de l'année précédente dès que l'historique le permet."],
                ['titre' => "Des scripts ajoutés sans inventaire", 'texte' => "Pixels publicitaires, outil de discussion, deuxième outil d'analyse : chaque script ajouté touche à la vitesse, au consentement et à la sécurité du site. L'histoire de <a href=\"/histoires/british-airways-piratage\">la page de paiement de British Airways</a> montre ce que coûte un script modifié que personne ne surveille. On tient la liste des balises et de leur propriétaire."],
                ['titre' => "Ne plus rapprocher avec la réalité", 'texte' => "Le tableau affiche douze demandes, l'équipe en a reçu vingt, ou l'inverse. Tant que l'écart n'est pas expliqué, aucune décision ne se prend sur ce chiffre. Le rapprochement mensuel avec le registre de l'équipe reste la dernière ligne du tableau."],
                ['titre' => "Un seul titulaire des accès", 'texte' => "La personne formée part, et la propriété avec elle si son compte était le seul administrateur. Deux administrateurs au nom de l'entreprise, et une revue des accès chaque trimestre, évitent de repartir de zéro."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Téléphone, messageries, langues et données : que change le contexte local pour la mesure ?",
            'paragraphes' => [
                "En Afrique francophone, la majorité des visiteurs arrivent sur un téléphone, souvent avec une connexion irrégulière. Le rapport Digital 2026 de DataReportal pour la Côte d'Ivoire, publié fin 2025, compte 13,4 millions d'internautes, soit 40,7 % de la population. La formation en tire deux conséquences. Les rapports se lisent d'abord par catégorie d'appareil, car une page d'offre peut convaincre sur ordinateur et échouer sur téléphone. Et les tests se font sur les téléphones des participants, pas seulement sur l'écran du formateur.",
                "Les clients passent beaucoup par WhatsApp, Facebook et les QR codes imprimés. Ces chemins ne disent pas leur nom à GA4 : un lien partagé dans une messagerie arrive souvent sans provenance, et se range alors dans l'accès direct. D'où l'importance donnée aux liens UTM et à l'événement qui compte les clics vers WhatsApp. Pour les établissements qui vivent de leur fiche Google, l'association entre GA4 et la fiche d'établissement, ouverte le 8 juin 2026, réunit appels, itinéraires et clics vers le site ; la tenue de la fiche relève de la formation <a href=\"/formations/visibilite-google\">visibilité Google</a>.",
                "Les réglages de la propriété suivent le pays de l'entreprise : fuseau horaire de son siège pour que les journées se découpent juste, devise de ses ventes, franc CFA, euro ou dollar canadien, pour que les valeurs des commandes soient lisibles. L'interface de Google Analytics existe en français, mais une partie de l'aide reste en anglais ou traduite automatiquement, ce que Google signale lui-même sur ses pages. Les séances se donnent en français, ou en anglais sur demande. Les règles de consentement, enfin, suivent le pays du visiteur : un site béninois qui reçoit des visiteurs de Paris ou de Bruxelles doit tenir compte du RGPD pour eux.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi apprendre à mesurer votre site avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "La mesure fait partie de chaque site qu'il livre : il pose les balises, crée les événements des formulaires et des boutons WhatsApp, et vérifie qu'ils remontent avant de remettre les accès au client. Son propre site est mesuré avec Google Analytics 4 et Microsoft Clarity, et les réglages présentés en séance sont ceux qu'il applique et contrôle sur ses pages. Fort de " . $ans . " ans d'expérience dans le numérique, formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il a créé <a href=\"https://wapy.pro\">Wapy</a>, assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>.",
                "Selon ses chiffres, plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes ont suivi ses formations, et il a travaillé dans " . count((array) fait('pays_travailles')) . " pays, d'Afrique de l'Ouest et centrale jusqu'en Europe et au Canada. Il n'est ni partenaire ni certifié de Google : il enseigne ce que disent l'aide officielle et les autorités de protection des données le jour de la séance. Son parcours figure sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays servis sur celle des <a href=\"/zones/\">zones d'intervention</a>, et les autres formations du domaine sur la page <a href=\"/formations/domaine/marketing-visibilite\">marketing et visibilité</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire votre équipe ?",
            'texte' => "Une mesure utile se décide avant d'ouvrir GA4 : une propriété au nom de l'entreprise, un plan qui relie chaque objectif à une action du site, cinq événements clés au plus, des liens marqués avec une seule règle, une bannière qui fait ce qu'elle promet, et un tableau mensuel rapproché des demandes réellement reçues. Le reste du <a href=\"/formations/\">catalogue des formations</a> s'appuie ensuite sur ces chiffres.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous savoir chaque mois d'où viennent vos clients ?",
            'texte'  => "Indiquez l'adresse de votre site, qui détient aujourd'hui les accès à Google Analytics, vos objectifs de l'année et le nombre de personnes à former : vous recevez une réponse sous 24 heures, un premier regard sur votre propriété, puis un programme ajusté et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation GA4'],
        ],
    ],

    'faq' => [
        ['q' => "Notre site a déjà Google Analytics : la formation sert-elle encore ?", 'r' => "Oui, et c'est le cas le plus fréquent. La première matinée part de la propriété existante : accès, réglages, événements déjà présents. Il est rare qu'une balise posée à la livraison du site mesure les demandes : elle compte surtout des pages vues."],
        ['q' => "Nous n'avons accès à rien : la propriété a été créée par notre ancien prestataire. Que faire ?", 'r' => "Lui demander de vous nommer administrateur, puis de se retirer. S'il ne répond pas, on crée une propriété neuve au nom de l'entreprise et on remplace la balise sur le site. L'historique est perdu, mais il servait rarement : mieux vaut un mois de données justes que trois ans de chiffres invérifiables."],
        ['q' => "Faut-il savoir programmer ?", 'r' => "Non. Les événements se créent dans l'interface de GA4 ou dans Google Tag Manager, à la souris. Le gestionnaire du site doit seulement pouvoir coller un identifiant ou un extrait de code dans l'outil du site, ce que la plupart des CMS prévoient."],
        ['q' => "Combien d'événements clés faut-il définir ?", 'r' => "Peu. Google permet d'en marquer 30 dans une propriété standard, mais un site de PME en suit en général trois à cinq : la demande de devis, le contact WhatsApp, l'appel, la réservation ou la commande. Au-delà, le tableau du mois ne distingue plus ce qui rapproche de la vente."],
        ['q' => "Une bannière de cookies est-elle obligatoire ?", 'r' => "Pour les visiteurs européens, dès que les traceurs ne remplissent pas les conditions d'exemption fixées par la CNIL, oui, et Google l'exige aussi pour l'Espace économique européen, le Royaume-Uni et la Suisse. Au Bénin, la loi n° 2017-20 impose au minimum d'informer les visiteurs des destinataires de leurs données et de leurs transferts. Le réglage se décide en séance, sur votre site."],
        ['q' => "Pourquoi GA4 affiche-t-il moins de visites depuis l'installation de la bannière ?", 'r' => "Parce que les visiteurs qui refusent ne sont plus comptés, ou seulement par des signaux sans cookie si le mode avancé est en place. Une petite propriété n'atteint pas les seuils de modélisation de Google. On compare donc des tendances d'un mois à l'autre, et l'on rapproche les événements clés des demandes réellement reçues."],
        ['q' => "Microsoft Clarity remplace-t-il GA4 ?", 'r' => "Non, il le complète. GA4 dit d'où viennent les visiteurs et combien d'actions ils réalisent ; Clarity montre comment ils se servent d'une page, par des cartes de chaleur et des enregistrements de sessions conservés 30 jours. Il est gratuit selon Microsoft, mais demande lui aussi un signal de consentement pour les visiteurs européens depuis le 31 octobre 2025."],
        ['q' => "Peut-on suivre la formation sans faire de publicité ?", 'r' => "Oui. L'association à Google Ads n'occupe qu'une partie de la deuxième matinée. Pour une entreprise qui vit du référencement, de sa fiche Google et de WhatsApp, la formation se concentre sur les liens UTM, les événements clés et l'association à la Search Console."],
        ['q' => "La formation apprend-elle à construire des tableaux de bord dans Looker Studio ?", 'r' => "Non. Le tableau mensuel se tient dans GA4 et dans un tableur. Construire un tableau de bord qui réunit le site, les ventes et la comptabilité est l'objet de la formation Tableaux de bord Power BI et Looker Studio, que Google présente désormais sous le nom de Data Studio."],
        ['q' => "Peut-on former une seule personne ?", 'r' => "Oui, en séances individuelles sur place ou à distance, souvent le responsable marketing d'une PME. Il est conseillé que le dirigeant assiste au moins à la première matinée et à la dernière après-midi, et qu'un second administrateur soit nommé dans la propriété."],
        ['q' => "La formation délivre-t-elle une certification Google ?", 'r' => "Non. Elle se conclut par une évaluation sur votre propriété et par une attestation de fin de formation. Richard SALANON n'est ni partenaire ni certifié de Google ; la meilleure preuve reste un plan de mesure en service et des événements clés qui comptent les vraies demandes."],
        ['q' => "Combien coûte la formation, et peut-elle être financée ?", 'r' => "Elle est chiffrée sur devis après un premier échange gratuit, selon le nombre de participants, l'état de la propriété, le format et le suivi retenu. Le FDFP, le FODEFCA, le 3FPT ou un OPCO ont leurs propres règles ; demandez leur réponse écrite avant de signer, sans compter sur une prise en charge."],
    ],

    'sources' => [
        ['titre' => "Aide Google Analytics, à propos des événements clés", 'url' => 'https://support.google.com/analytics/answer/9267568?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, marquer des événements comme événements clés (30 en propriété standard)", 'url' => 'https://support.google.com/analytics/answer/13128484?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, configurer Analytics pour un site Web ou une application", 'url' => 'https://support.google.com/analytics/answer/9304153?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, événements collectés via les mesures améliorées", 'url' => 'https://support.google.com/analytics/answer/9216061?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, limites de collecte des événements", 'url' => 'https://support.google.com/analytics/answer/9267744?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google for Developers, événements recommandés de Google Analytics (mise à jour du 17 septembre 2026)", 'url' => 'https://developers.google.com/analytics/devguides/collection/ga4/reference/events?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, conservation des données", 'url' => 'https://support.google.com/analytics/answer/7667196?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, utilisation des cookies par Google Analytics sur les sites Web", 'url' => 'https://support.google.com/analytics/answer/11397207?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, taux d'engagement et taux de rebond", 'url' => 'https://support.google.com/analytics/answer/12195621?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, à propos des seuils de données", 'url' => 'https://support.google.com/analytics/answer/9383630?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, premiers pas avec Explorations", 'url' => 'https://support.google.com/analytics/answer/7579450?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, créer, modifier et archiver des audiences", 'url' => 'https://support.google.com/analytics/answer/9267572?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, premiers pas avec l'attribution (modèles disponibles)", 'url' => 'https://support.google.com/analytics/answer/10596866?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, sélectionner des paramètres d'attribution (périodes de suivi)", 'url' => 'https://support.google.com/analytics/answer/10597962?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, groupe de canaux par défaut (canal Assistant IA)", 'url' => 'https://support.google.com/analytics/answer/9756891?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, nouveautés de Google Analytics en 2026", 'url' => 'https://support.google.com/analytics/answer/9164320?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, outils de création d'URL et paramètres UTM", 'url' => 'https://support.google.com/analytics/answer/10917952?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, filtrer le trafic interne", 'url' => 'https://support.google.com/analytics/answer/10104470?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, identifier les sites référents à ignorer", 'url' => 'https://support.google.com/analytics/answer/10327750?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, gérer les accès et les restrictions de données (rôles)", 'url' => 'https://support.google.com/analytics/answer/9305587?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, associer la Search Console à Google Analytics", 'url' => 'https://support.google.com/analytics/answer/10737381?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, associer Google Ads à Google Analytics", 'url' => 'https://support.google.com/analytics/answer/9379420?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, mode Consentement sur les sites Web et dans les applications", 'url' => 'https://support.google.com/analytics/answer/9976101?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, modélisation du comportement pour le mode Consentement", 'url' => 'https://support.google.com/analytics/answer/11161109?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, données et confidentialité pour le Royaume-Uni, la Suisse ou l'UE", 'url' => 'https://support.google.com/analytics/answer/12017362?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Aide Google Analytics, Google Analytics 4 a remplacé Universal Analytics (mise à jour du 12 décembre 2024)", 'url' => 'https://support.google.com/analytics/answer/11583528?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google for Developers, présentation du mode Consentement (mise à jour du 30 juillet 2026)", 'url' => 'https://developers.google.com/tag-platform/security/concepts/consent-mode?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google, règles relatives au consentement de l'utilisateur dans l'Union européenne", 'url' => 'https://www.google.com/about/company/user-consent-policy/?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Google Marketing Platform, présentation de Google Analytics et de Tag Manager", 'url' => 'https://marketingplatform.google.com/intl/fr/about/analytics/', 'date' => '2026-10-05'],
        ['titre' => "Aide Search Console, à propos de la Search Console (service gratuit)", 'url' => 'https://support.google.com/webmasters/answer/9128668?hl=fr', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, mode Consentement de Clarity (exigence depuis le 31 octobre 2025)", 'url' => 'https://learn.microsoft.com/fr-fr/clarity/setup-and-installation/consent-mode', 'date' => '2026-10-05'],
        ['titre' => "Microsoft Learn, questions fréquentes sur Clarity (gratuité, conservation 30 jours)", 'url' => 'https://learn.microsoft.com/fr-fr/clarity/faq', 'date' => '2026-10-05'],
        ['titre' => "CNIL, cookies : solutions pour les outils de mesure d'audience (4 juillet 2025)", 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies-solutions-pour-les-outils-de-mesure-daudience', 'date' => '2026-10-05'],
        ['titre' => "CNIL, cookies et autres traceurs : que dit la loi ?", 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies/que-dit-la-loi', 'date' => '2026-10-05'],
        ['titre' => "CNIL, les sanctions prononcées par la CNIL", 'url' => 'https://www.cnil.fr/fr/les-sanctions-prononcees-par-la-cnil', 'date' => '2026-10-05'],
        ['titre' => "CNIL, transferts de données vers les États-Unis : nouvelle décision d'adéquation (10 juillet 2023)", 'url' => 'https://www.cnil.fr/fr/transferts-de-donnees-vers-les-etats-unis-la-commission-europeenne-adopte-une-nouvelle-decision', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique (articles 391 et 415)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "Union africaine, convention sur la cybersécurité et la protection des données personnelles (Malabo)", 'url' => 'https://au.int/en/treaties/african-union-convention-cyber-security-and-personal-data-protection', 'date' => '2026-10-05'],
        ['titre' => "DataReportal, Digital 2026 Côte d'Ivoire", 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['publicite-meta-google-ads', 'seo-contenu', 'e-commerce', 'power-bi-looker-studio', 'data-literacy', 'visibilite-google'],
        'services'    => ['audit-seo-complet', 'landing-page-haute-conversion', 'referencement-naturel-seo'],
        'comparatifs' => [],
    ],
];
