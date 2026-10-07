<?php
// ============================================================
// data/formations/publicite-meta-google-ads.php · Fiche formation
// « Publicité Meta Ads et Google Ads » (vague 1B, lot B, domaine
// marketing-visibilite). Aucune ancienne page. Angle propre : campagnes
// payantes sur Meta (Facebook, Instagram, WhatsApp) et Google Ads :
// objectifs, ciblage, budget, enchères, créations, signaux de conversion
// propres aux régies (pixel, API Conversions, balise Google, conversions
// avancées, mode Consentement), lecture des résultats, règles publicitaires,
// paiement des campagnes depuis l'Afrique francophone. Sœurs non traitées :
// analytics-ga4 (mesure complète du site), linkedin-reseaux-sociaux
// (publication organique), emailing-automation, seo-contenu ; la conception
// de la page d'arrivée relève du pilier landing-page-haute-conversion.
// Faits relevés le 05/10/2026 : aide Meta Business lue dans le navigateur
// (objectifs, budgets quotidiens, budgets minimaux, phase d'apprentissage,
// stratégies d'enchère, examen des publicités, catégories spéciales, pixel,
// API Conversions, clic vers WhatsApp, facturation, frais de localisation,
// moyens de paiement par pays), Standards publicitaires Meta, aide Google
// Ads (types de campagnes, budget quotidien moyen, stratégies d'enchères,
// types de correspondance, mesure des conversions, conversions avancées,
// mode Consentement, signaux EEE, modes et paramètres de paiement par pays,
// examen des annonces, règles, validation des annonceurs), Tag Manager,
// Planificateur de mots clés, Canva, CNIL, Commission européenne (DSA),
// APDP, DataReportal, FDFP, FODEFCA, 3FPT, France Compétences. Fenêtre
// gratuite après une publicité clic vers WhatsApp : fait déjà vérifié du
// catalogue, repris tel quel.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation publicité Meta Ads et Google Ads : apprendre à vos équipes à construire des campagnes Facebook, Instagram, WhatsApp et Google, à fixer et tenir un budget, à mesurer chaque conversion et à couper ce qui ne vend pas",
    'title'   => 'Formation publicité Meta Ads et Google Ads | Richard SALANON',
    'meta'    => "Formation Meta Ads et Google Ads : objectifs, ciblage, budget, enchères, pixel et API Conversions, lecture des résultats, paiement depuis l'Afrique.",
    'en_bref' => "Cette formation apprend aux responsables marketing, aux commerçants en ligne et aux dirigeants qui financent de la publicité à monter eux-mêmes des campagnes sur Facebook, Instagram, WhatsApp et Google : choisir l'objectif, cibler, fixer un budget et une stratégie d'enchères, préparer les visuels et les textes, brancher les signaux de conversion, puis lire les résultats pour décider. Elle dure deux jours en quatre demi-journées, suivis d'un bilan à distance après trois à quatre semaines de diffusion, et se déroule sur les comptes publicitaires de l'entreprise. Elle se tient dans vos locaux, en inter-entreprises, à distance ou en formule hybride ; le prix est fixé sur devis, et le budget des campagnes reste payé par l'entreprise à Meta ou à Google.",
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'marketing-visibilite',
    'forte'   => false,
    'duree'   => '2 jours en quatre demi-journées, puis un bilan à distance après trois à quatre semaines de diffusion',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : faire les comptes avant d'ouvrir le Gestionnaire de publicités",
            'duree'  => '3 h 30',
            'points' => [
                "Ce que l'entreprise veut obtenir, traduit en une action mesurable : une commande payée, une demande de devis, un appel, une conversation WhatsApp qui aboutit, une inscription.",
                "Calcul du coût maximal acceptable pour cette action, à partir du panier moyen, de la marge et de la part des contacts qui deviennent clients.",
                "Choix de la régie selon la manière dont le client achète : il cherche déjà la solution sur Google, ou il faut aller la lui montrer sur Facebook, Instagram ou YouTube.",
                "Inventaire des accès : portefeuille business Meta, compte publicitaire, page Facebook, compte Instagram, numéro WhatsApp, compte Google Ads, et le nom de la personne qui détient chacun.",
                "Pays de facturation, devise et moyen de paiement : ce qui est accepté dans votre pays, qui porte la carte, comment les reçus arrivent à la comptabilité.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : construire une campagne Meta sur Facebook, Instagram et WhatsApp",
            'duree'  => '3 h 30',
            'points' => [
                "Les trois niveaux du Gestionnaire de publicités : campagne, ensemble de publicités, publicité, et ce qui se règle à chacun.",
                "Les six objectifs de Meta (Notoriété, Trafic, Interactions, Prospects, Promotion de l'application, Ventes) et le choix de l'événement à optimiser.",
                "Audience : lieux, âges, centres d'intérêt, audiences personnalisées issues du site ou des clients, et les limites des catégories publicitaires spéciales.",
                "Budget quotidien ou global, budget de campagne Advantage+, stratégies d'enchère, phase d'apprentissage.",
                "Publicités clic vers WhatsApp, clic vers Messenger ou formulaire instantané : quand les préférer à un envoi vers le site.",
                "Visuels, vidéos courtes et textes : déclinaisons par placement, conformité aux Standards publicitaires, passage en examen.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : construire une campagne Google Ads qui répond à une recherche",
            'duree'  => '3 h 30',
            'points' => [
                "Les types de campagnes : Réseau de Recherche, Performance Max, Display, Vidéo, Shopping, Applications, et celui qui convient à un premier budget.",
                "Liste de mots clés tirée des questions réelles des clients, types de correspondance (requête large, expression exacte, mot clé exact) et mots clés à exclure.",
                "Rédaction des annonces responsives et des composants : titres, descriptions, liens annexes, numéro d'appel, lieu.",
                "Budget quotidien moyen, stratégies d'enchères au clic ou à la conversion, et le moment où passer de l'une à l'autre.",
                "Validation de l'annonceur, règles Google Ads, contenus soumis à restrictions, examen des annonces.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : brancher les conversions, lire les résultats et écrire ses règles de décision",
            'duree'  => '3 h 30',
            'points' => [
                "Pixel Meta et API Conversions, balise Google et conversions avancées : ce que chaque signal transmet, et ce qu'il ne doit jamais transmettre.",
                "Consentement des visiteurs en Europe et mode Consentement de Google ; données personnelles au Bénin et dans les pays voisins.",
                "Test de bout en bout : un faux client parcourt l'annonce, la page et la conversion, et l'on vérifie que chaque régie la reçoit une seule fois.",
                "Lecture des colonnes utiles : impressions, couverture, fréquence, taux de clic, coût par clic, coût par résultat, valeur des conversions.",
                "Règles écrites : quand couper une publicité, quand augmenter un budget, quand ne toucher à rien ; tableau hebdomadaire rapproché des ventes réelles.",
                "Évaluation : chaque participant présente sa campagne prête à diffuser, son budget justifié et son plan de suivi.",
            ],
        ],
        [
            'titre'  => "Trois à quatre semaines plus tard, à distance : bilan sur les premiers chiffres réels",
            'duree'  => '2 h 30',
            'points' => [
                "Relecture des campagnes diffusées depuis la session, colonne par colonne, sur le compte de l'entreprise.",
                "Comparaison entre les conversions annoncées par Meta et Google et les ventes ou demandes réellement enregistrées.",
                "Décisions prises en séance : publicités à arrêter, budgets à déplacer, audiences ou mots clés à corriger, nouveaux visuels à produire.",
                "Mise à jour des règles de décision écrites lors de la session, à partir de ce que les chiffres ont montré.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en quatre demi-journées, puis un bilan à distance de 2 h 30'],
        ['l' => 'Public', 'v' => 'Responsables marketing, commerçants en ligne, dirigeants qui financent ou envisagent des campagnes payantes'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, sur vos comptes publicitaires'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que sauront faire vos équipes à la fin de la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                "Beaucoup d'entreprises découvrent la publicité en ligne par le bouton « Booster la publication ». Quelques milliers de francs CFA plus tard, la publication a reçu des mentions « J'aime », parfois des messages « c'est combien ? », et personne ne sait dire si une seule vente en est sortie. La formation remplace ce réflexe par un travail de gestionnaire : partir d'un coût par client que l'entreprise peut se permettre, choisir la régie et l'objectif qui y mènent, régler la campagne, vérifier que chaque conversion est bien comptée, puis décider chaque semaine sur des chiffres.",
                "Les objectifs se vérifient en fin de session. Chaque participant sait calculer le coût maximal acceptable d'un prospect ou d'une vente ; monter dans le Gestionnaire de publicités Meta une campagne complète, de l'objectif au visuel ; monter dans Google Ads une campagne sur le Réseau de Recherche avec ses mots clés, ses exclusions et ses annonces ; fixer un budget en sachant comment chaque régie le dépense ; vérifier qu'un pixel, l'API Conversions ou la balise Google remontent la bonne action ; lire un rapport et en tirer une décision écrite ; dire quels moyens de paiement fonctionnent depuis son pays.",
                "Plusieurs sujets voisins ont leur propre formation dans le catalogue. La configuration complète de Google Analytics 4, ses événements et ses rapports de pilotage relèvent de la formation Google Analytics 4 et pilotage : ici, on ne règle que les signaux dont les régies ont besoin pour enchérir. La publication régulière et gratuite sur LinkedIn, Facebook ou Instagram est l'objet de la formation LinkedIn et réseaux sociaux d'entreprise. Les séquences d'e-mails, le référencement par le contenu et le robot qui répond sur WhatsApp ont aussi leur fiche.",
                "La page vers laquelle pointent les annonces n'est pas construite pendant la session : on vérifie seulement qu'elle reprend la promesse de l'annonce et qu'elle mesure l'action attendue. Si cette page n'existe pas encore, elle peut être confiée au service de <a href=\"/services/landing-page-haute-conversion\">landing page haute conversion</a>. Une boutique qui n'encaisse pas encore ses commandes sans accroc passera d'abord par la formation <a href=\"/formations/e-commerce\">Vendre en ligne</a>, et une entreprise qui vend à d'autres entreprises gagnera à définir ses comptes cibles avec le <a href=\"/formations/marketing-digital-b2b\">marketing digital B2B</a> avant d'acheter des clics.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui doit suivre la formation, avec quel niveau et quel matériel ?',
            'intro' => "La formation vise les personnes qui décident d'une dépense publicitaire ou qui la pilotent au quotidien, dans une entreprise qui a déjà quelque chose à vendre en ligne ou par message. Elle suppose un site ou une page d'arrivée en état de convertir.",
            'items' => [
                ['titre' => 'Le ou la responsable marketing', 'texte' => "C'est la personne qui monte les campagnes et rend compte des résultats. Elle passe le plus de temps dans les deux interfaces, sur les réglages, les audiences, les mots clés et la lecture des colonnes. Elle repart avec des campagnes prêtes à diffuser et une routine de suivi hebdomadaire."],
                ['titre' => 'Le commerçant en ligne ou le gérant de boutique', 'texte' => "Il connaît ses marges, ses produits qui partent et ceux qui dorment. La formation lui apprend à choisir les produits à pousser, à régler une campagne Ventes ou une campagne qui ouvre une conversation WhatsApp, et à relier chaque commande à la publicité qui l'a amenée."],
                ['titre' => 'Le dirigeant qui finance', 'texte' => "Il n'a pas besoin de régler une enchère, mais il doit valider le budget, fixer le coût par client acceptable et savoir lire un rapport sans se laisser impressionner par des milliers d'impressions. La première et la dernière demi-journée lui sont particulièrement utiles."],
                ['titre' => 'Niveau attendu', 'texte' => "Savoir utiliser un navigateur, un tableur et la page Facebook de l'entreprise. Aucune connaissance publicitaire n'est exigée. Un questionnaire envoyé au cadrage situe chacun : a-t-il déjà boosté une publication, ouvert un compte Google Ads, installé un pixel ?"],
                ['titre' => 'Prérequis côté entreprise', 'texte' => "Une page d'arrivée ou une boutique qui fonctionne sur téléphone, et une mesure des conversions déjà en place sur le site, par exemple Google Analytics 4, ou la formation Google Analytics 4 et pilotage suivie avant. Sans cela, une partie de la session sert à réparer la mesure au lieu de construire les campagnes."],
                ['titre' => 'Accès à préparer', 'texte' => "Un accès administrateur au portefeuille business Meta, au compte publicitaire, à la page Facebook et au compte Instagram ; un accès administrateur au compte Google Ads, ou l'accord pour en créer un au nom de l'entreprise ; l'accès au site ou à la personne qui le gère, pour poser les balises."],
                ['titre' => 'Matériel', 'texte' => "Un ordinateur par participant, car le Gestionnaire de publicités et Google Ads se règlent mal sur téléphone ; un smartphone pour tester les annonces et les conversions comme un client ; la carte bancaire de l'entreprise, ou la personne qui la détient, pour la séquence consacrée au paiement."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => 'Quel est le programme, demi-journée par demi-journée ?',
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Quels exercices les participants font-ils sur les comptes de l\'entreprise ?',
            'items' => [
                ['titre' => 'Le calcul du coût acceptable', 'duree' => '45 minutes', 'texte' => "Avec les chiffres de l'entreprise, le groupe calcule ce que rapporte un client, quelle part des contacts achète vraiment, et donc combien on peut payer au plus pour un contact ou une vente. Ce chiffre devient la ligne rouge de toutes les campagnes de la session. Les entreprises qui n'ont pas ces données repartent avec la liste de ce qu'il faut compter dès lundi."],
                ['titre' => 'L\'état des lieux des comptes', 'duree' => '30 minutes', 'texte' => "Chaque participant ouvre les paramètres du portefeuille business et du compte Google Ads et note qui est administrateur, quel moyen de paiement est enregistré, dans quelle devise et quel fuseau horaire le compte a été ouvert. Il n'est pas rare de découvrir un ancien prestataire seul propriétaire, ou un pixel installé par quelqu'un qui a quitté l'entreprise."],
                ['titre' => 'La campagne Meta en brouillon', 'duree' => '1 h 30', 'texte' => "Sur le compte réel, chaque groupe construit une campagne complète sans la publier : objectif, événement de conversion, lieux, âges, audience personnalisée, budget, stratégie d'enchère, trois déclinaisons de visuels et de textes. Le formateur relit chaque réglage à l'écran. La publication n'a lieu qu'avec l'accord écrit de la personne qui paie."],
                ['titre' => 'Les mots clés tirés des questions des clients', 'duree' => '1 heure', 'texte' => "Le groupe part des questions notées par l'accueil, les vendeurs ou le service client, puis les confronte au Planificateur de mots clés. Il trie les termes qui annoncent un achat, ceux qui annoncent une simple curiosité et ceux qu'il faut exclure, comme « gratuit », « emploi » ou « formation » pour une entreprise qui ne recrute ni ne forme."],
                ['titre' => 'Les annonces écrites et relues', 'duree' => '45 minutes', 'texte' => "Chaque participant rédige les titres et descriptions d'une annonce Google et le texte de deux publicités Meta. La relecture porte sur la promesse, le prix ou la condition affichés, la cohérence avec la page d'arrivée et les règles des régies : aucune allusion à la santé, à l'origine ou à la situation financière de la personne qui lit."],
                ['titre' => 'Le test de conversion de bout en bout', 'duree' => '45 minutes', 'texte' => "Depuis un téléphone, un participant joue le client : il ouvre la page d'arrivée, remplit le formulaire, paie ou écrit sur WhatsApp. Les autres suivent l'événement dans le Gestionnaire d'événements de Meta et dans l'outil de diagnostic de Google. Une conversion qui arrive deux fois, ou jamais, se corrige avant toute diffusion."],
                ['titre' => 'La lecture d\'un rapport et les règles d\'arrêt', 'duree' => '45 minutes', 'texte' => "Sur l'historique du compte quand il existe, sinon sur un jeu de chiffres préparé pour l'exercice, le groupe lit les colonnes, repère la publicité qui coûte trop cher et celle qui manque de budget, puis écrit ses propres règles : seuil de dépense avant de juger, coût maximal, rythme des changements."],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'Meta, Google Recherche ou YouTube : quelle régie choisir pour une première campagne ?',
            'options'  => ['Meta (Facebook, Instagram, WhatsApp)', 'Google Ads, Réseau de Recherche', 'Google Ads, YouTube, Display et Performance Max'],
            'criteres' => [
                ['critere' => 'Ce qui déclenche l\'annonce', 'valeurs' => ["Le profil et le comportement de la personne pendant qu'elle fait défiler son fil ou ses statuts", "Une recherche tapée sur Google qui correspond à vos mots clés", "Le contenu regardé, les signaux d'audience et les éléments fournis à Google"]],
                ['critere' => 'Situation du client', 'valeurs' => ["Il ne cherche rien : il faut lui montrer l'offre et lui donner envie d'écrire ou d'acheter", "Il a déjà un besoin et compare : plombier, devis, prix d'un produit précis", "Il découvre la marque ou revient après une première visite"]],
                ['critere' => 'Ce qu\'il faut préparer', 'valeurs' => ["Des visuels et des vidéos courtes en plusieurs formats, renouvelés souvent", "Une liste de mots clés, des exclusions et des annonces textuelles", "Des vidéos, des images, des textes et, pour une boutique, un flux de produits"]],
                ['critere' => 'Action la plus naturelle', 'valeurs' => ["Conversation WhatsApp ou Messenger, formulaire instantané, achat sur le site", "Appel, demande de devis, achat sur le site", "Visite du site, puis conversion plus tard"]],
                ['critere' => 'Difficulté pour un débutant', 'valeurs' => ["Moyenne : beaucoup de choix, mais une interface guidée", "Moyenne : le tri des mots clés demande de la rigueur chaque semaine", "Plus élevée : l'automatisation laisse peu de prise sans mesure fiable"]],
            ],
            'verdict'  => "Quand vos clients tapent déjà votre métier dans Google, le Réseau de Recherche est souvent l'endroit où le premier franc ou le premier euro est le mieux placé. Quand il faut créer le désir, ou que la vente se conclut en discutant, Meta et ses publicités clic vers WhatsApp conviennent mieux. YouTube et Performance Max viennent ensuite, une fois les conversions mesurées sans erreur. La formation construit au moins une campagne sur chacune des deux premières régies.",
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment Meta et Google dépensent-ils le budget que vous fixez ?',
            'legende' => "Règles lues le 5 octobre 2026 dans l'aide de Meta Business et l'aide Google Ads. Elles expliquent pourquoi une journée peut coûter plus que le budget saisi sans que le mois ou la semaine le dépassent.",
            'entetes' => ['Question', 'Meta (Facebook, Instagram, WhatsApp)', 'Google Ads', 'Ce que l\'on en tire en formation'],
            'lignes'  => [
                ['Combien un seul jour peut-il coûter ?', "Jusqu'à 75 % de plus que le budget quotidien, soit 175 % ; jusqu'à 210 % si le partage du budget entre ensembles de publicités est activé", "Jusqu'à deux fois le budget quotidien moyen", "Ne jamais juger une campagne sur une seule journée"],
                ['Quel plafond sur la période ?', "Pas plus de sept fois le budget quotidien sur une semaine, du dimanche au samedi", "Pas plus de 30,4 fois le budget quotidien moyen sur le mois", "Raisonner en budget hebdomadaire ou mensuel, et le valider ainsi avec la direction"],
                ['Quel budget minimal pour piloter au coût ?', "Avec un objectif de coût par résultat, un budget quotidien d'au moins cinq fois cet objectif", "Le budget doit permettre assez de conversions pour que les enchères automatiques apprennent", "Vérifier que le budget est compatible avec le coût acceptable calculé le premier matin"],
                ['Quand la diffusion se stabilise-t-elle ?', "Après environ 50 résultats dans la semaine qui suit la dernière modification importante ; sinon, mention « Apprentissage limité »", "Les stratégies orientées conversions s'appuient sur l'historique de conversions du compte", "Regrouper plutôt que multiplier les ensembles de publicités, et espacer les modifications"],
                ['Que contient la facture ?', "La diffusion, plus des frais de localisation pour certaines audiences, en dehors du budget de campagne", "Les frais de diffusion, débités selon le paramètre de paiement du compte", "Prévoir la ligne de frais quand on cible l'Europe"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment fixer un budget de départ sans le deviner ?',
            'paragraphes' => [
                "On part de l'économie de l'entreprise, jamais d'un chiffre entendu ailleurs. Prenons un exemple de calcul fait en séance, avec des montants inventés pour l'exercice : une boutique de cosmétiques vend un panier moyen de 20 000 FCFA avec une marge de 40 %, soit 8 000 FCFA par commande. Si une conversation WhatsApp sur cinq se termine par une commande, l'entreprise ne perd pas d'argent sur la première vente tant qu'une conversation lui coûte moins de 1 600 FCFA en publicité. Ce plafond devient l'objectif de coût par résultat.",
                "Viennent ensuite les règles de la régie. Meta demande, avec un objectif de coût par résultat, un budget quotidien d'au moins cinq fois cet objectif, ici 8 000 FCFA, converti dans la devise du compte. Pour sortir de la phase d'apprentissage, il faut environ 50 résultats dans la semaine, donc près de 80 000 FCFA hebdomadaires si le plafond est tenu. Une boutique qui ne peut pas engager cette somme choisit un événement plus fréquent, réduit la zone ou commence sur Google Recherche avec quelques mots clés très précis. La décision est écrite et datée, avant le premier clic payé.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels signaux de conversion faut-il brancher pour que Meta et Google enchérissent juste ?',
            'legende' => "Chaque régie optimise sur les actions qu'elle reçoit. Ce tableau résume l'aide officielle de Meta et de Google consultée le 5 octobre 2026 ; la configuration générale de Google Analytics 4 reste l'objet d'une autre formation du catalogue.",
            'entetes' => ['Signal', 'Où il se pose', 'Ce qu\'il transmet', 'Vigilance enseignée'],
            'lignes'  => [
                ['Pixel Meta', 'Fragment de code sur les pages du site', "Les actions des visiteurs, comme un ajout au panier, une inscription ou un achat, visibles dans le Gestionnaire d'événements", "Meta interdit d'y faire passer des informations sur la santé, les finances ou les enfants, et de le poser sans autorisation sur un site dont on n'est pas propriétaire"],
                ['API Conversions de Meta', 'Serveur, plateforme du site, application ou CRM', "Des événements de site, d'application, hors ligne et de messagerie, par une connexion plus fiable que le seul navigateur", "Le même achat envoyé par le pixel et par l'API doit porter le même identifiant pour n'être compté qu'une fois"],
                ['Balise Google et action de conversion Google Ads', 'Site, application, numéro d\'appel, ou import de fichiers', "Les achats, inscriptions ou appels que vous jugez utiles, comptés après une interaction avec une annonce", "Ne déclarer comme conversion principale que l'action qui rapporte, pas chaque page vue"],
                ['Conversions avancées de Google', 'Ajoutées à la balise sur la page de confirmation', "L'e-mail, le nom, l'adresse ou le téléphone saisis par le client, hachés par l'algorithme SHA256 avant l'envoi", "Les personnes doivent en être informées dans la politique de confidentialité, et en Europe y avoir consenti"],
                ['Mode Consentement de Google', 'Plateforme de gestion du consentement du site', "L'état du choix du visiteur, avec les paramètres ad_storage, analytics_storage, ad_user_data et ad_personalization", "Obligatoire pour les visiteurs de l'Espace économique européen, du Royaume-Uni et de la Suisse"],
                ['Conversation issue d\'une publicité clic vers WhatsApp', 'Gestionnaire de publicités et téléphone de l\'entreprise', "Le lancement de la conversation, compté par Meta", "La vente se conclut dans la discussion : elle se note dans un tableau ou un CRM, ou remonte par l'API Conversions en événement de messagerie"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quels chiffres lire chaque semaine, et quelle décision chacun appelle-t-il ?',
            'intro' => "Les deux interfaces affichent des dizaines de colonnes. La formation n'en garde qu'une poignée, toujours lues dans le même ordre, du haut de l'entonnoir vers la vente.",
            'items' => [
                ['titre' => 'Couverture et fréquence', 'texte' => "La couverture dit combien de personnes ont vu l'annonce, la fréquence combien de fois en moyenne. Quand la fréquence grimpe alors que les résultats baissent, la même audience voit trop souvent le même visuel : on renouvelle la création ou on élargit la zone avant de toucher au budget."],
                ['titre' => 'Taux de clic', 'texte' => "Il juge l'accroche, pas la vente. Un taux faible sur Meta indique un visuel qui n'arrête pas le pouce ; sur Google, une annonce qui répond mal à la recherche. On compare les déclinaisons entre elles, dans la même campagne, plutôt qu'à une moyenne trouvée sur Internet."],
                ['titre' => 'Coût par clic et coût pour mille impressions', 'texte' => "Ils montrent le prix de l'attention sur le marché visé. Ils augmentent souvent en période de fêtes ou de soldes, quand tous les annonceurs enchérissent en même temps. Un coût par clic élevé n'est pas un problème si le coût par vente reste sous la ligne rouge."],
                ['titre' => 'Coût par résultat', 'texte' => "C'est la colonne qui décide. Elle se compare au coût maximal acceptable calculé le premier jour. Au-dessus, une fois la dépense assez importante pour être significative, la publicité ou l'ensemble de publicités s'arrête ; nettement en dessous, on augmente le budget par paliers, pas d'un coup."],
                ['titre' => 'Termes de recherche', 'texte' => "Dans Google Ads, le rapport des termes de recherche montre les requêtes réelles qui ont déclenché vos annonces. Le lire chaque semaine permet d'ajouter des mots clés à exclure et d'éviter de payer pour des curieux, des chercheurs d'emploi ou des concurrents."],
                ['titre' => 'Valeur des conversions et retour sur dépense', 'texte' => "Pour une boutique qui transmet le montant de chaque commande, le rapport entre la valeur des ventes attribuées et la dépense indique si la campagne paie. Il se lit avec la marge en tête : un retour de deux pour un peut cacher une perte quand la marge est de 30 %."],
                ['titre' => 'L\'écart avec les ventes réelles', 'texte' => "Meta et Google s'attribuent chacun les ventes qu'ils ont touchées, si bien que leurs totaux additionnés dépassent souvent les commandes réelles. Le tableau hebdomadaire compare donc toujours les deux régies aux commandes, aux devis ou aux paiements enregistrés par l'entreprise."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quelles règles publicitaires de Meta, de Google et des autorités faut-il connaître avant de diffuser ?',
            'legende' => "Pages officielles consultées le 5 octobre 2026. Ce tableau ne remplace ni les règles complètes des régies ni un avis juridique ; il sert à éviter les refus et les restrictions de compte les plus courants.",
            'entetes' => ['Règle', 'Ce qu\'elle dit', 'Source', 'Conséquence pour vos annonces'],
            'lignes'  => [
                ['Caractéristiques personnelles', "Une publicité ne doit pas affirmer ou sous-entendre l'origine, la religion, l'âge, l'orientation sexuelle, le handicap, la santé, une situation financière vulnérable ou le casier judiciaire de la personne qui la lit", 'Standards publicitaires Meta', "« Vous êtes diabétique ? » ou « Criblé de dettes ? » sont refusés ; on parle du produit, pas de la personne"],
                ['Catégories publicitaires spéciales', "Emploi, logement, produits et services financiers : options d'audience limitées dans certains pays ; enjeux sociaux, électoraux ou politiques : autorisation et mention « Financé par »", 'Aide Meta Business', "Déclarer la catégorie dès la création de la campagne, sinon la publicité peut être rejetée"],
                ['Examen des publicités Meta', "Examen en général dans les 24 heures, par des systèmes automatisés et parfois par des personnes ; une publicité peut être réexaminée pendant sa diffusion", 'Aide Meta Business', "Programmer les publicités la veille d'un lancement, jamais le matin même"],
                ['Règles Google Ads', "Quatre domaines : contenus interdits, pratiques interdites, contenus soumis à restrictions (santé, services financiers, jeux d'argent, alcool...) et exigences éditoriales et techniques", 'Centre de règles Google Ads', "Vérifier la catégorie de l'offre avant d'écrire, et soigner la page de destination"],
                ['Examen des annonces Google', "La plupart des annonces sont examinées en un jour ouvrable ; une annonce refusée ne peut pas être diffusée", 'Aide Google Ads', "Prévoir le délai, et lire le motif de refus avant de corriger"],
                ['Validation des annonceurs Google', "Examen des informations jusqu'à cinq jours ouvrés, rarement trente jours ; compte mis en veille si le délai indiqué n'est pas tenu ; nom et zone affichés dans le Centre de transparence publicitaire", 'Centre de règles Google Ads', "Préparer les pièces de l'entreprise avant de lancer la première campagne"],
                ['Règlement sur les services numériques (UE)', "Pas de publicité fondée sur des données sensibles comme la religion ou l'orientation sexuelle, et interdiction totale des publicités ciblant les enfants", 'Commission européenne', "Pour une audience en Europe, cibler sur l'offre et le lieu, jamais sur ces caractéristiques"],
                ['Cookies publicitaires en France', "Consentement préalable pour les traceurs de publicité personnalisée et des réseaux sociaux ; refuser doit être aussi simple qu'accepter", 'CNIL', "Pixel et balises ne se déclenchent qu'après l'accord du visiteur européen"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment payer ses campagnes depuis le Bénin, la Côte d\'Ivoire ou le Sénégal ?',
            'paragraphes' => [
                "C'est souvent la première difficulté, avant même le ciblage. L'aide Google Ads, consultée le 5 octobre 2026, ne liste pour le Bénin, la Côte d'Ivoire et le Sénégal que les cartes de crédit et de débit comme mode de paiement, avec le post-paiement : Google débite la carte après la diffusion des annonces. Pour la France, la même page ajoute le prélèvement sur compte bancaire, le transfert d'argent et PayPal. Google précise que les modes proposés dépendent du pays de facturation et de la devise du compte : ce choix initial compte.",
                "Chez Meta, la page des options de paiement cite les cartes American Express, Discover, Mastercard, Visa et JCB, PayPal, le prélèvement dans certains pays et des moyens de paiement manuels locaux là où ils existent. Les pages consacrées à la Côte d'Ivoire et au Sénégal retiennent les cartes American Express, Mastercard et Visa, et PayPal ; le Bénin n'a pas de page dédiée dans la liste des pays au 5 octobre 2026. Le premier moyen enregistré fixe le fonctionnement du compte : une carte ou PayPal ouvre la facturation automatique, les autres moyens le système des fonds disponibles, alimentés à l'avance.",
                "Aucune de ces pages ne cite le Mobile Money parmi les moyens acceptés pour ces trois pays. En pratique, l'entreprise utilise une carte Visa ou Mastercard à son nom, autorisée pour les paiements en ligne à l'étranger, avec un plafond supérieur au seuil de facturation, et enregistre un second moyen de secours : un paiement refusé interrompt la diffusion. Pour une audience européenne, Meta ajoute des frais de localisation hors budget, de 3 % pour la France, l'Italie et l'Espagne, 2 % pour le Royaume-Uni et 5 % pour l'Autriche et la Turquie, calculés selon le lieu de l'audience et non celui de l'entreprise.",
                "Côté WhatsApp, la page de tarification de la plateforme WhatsApp Business de Meta, lue le 5 octobre 2026, facture par message depuis le 1er juillet 2025. Quand un client écrit depuis une publicité « cliquer pour WhatsApp » sur l'application mobile et que l'entreprise répond dans la fenêtre de 24 heures, Meta ne facture aucun message pendant une fenêtre qui peut rester ouverte jusqu'à 7 jours, et non plus 72 heures, sauf les messages du Meta Business Agent. Depuis le 1er octobre 2026, chaque numéro professionnel dispose en outre d'un quota mensuel de 1 000 messages de service gratuits, non reportable.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée, et que reste-t-il à l\'équipe ?',
            'intro' => "Le principe : rien n'est montré sur un compte de démonstration quand le vrai compte de l'entreprise est disponible. Le formateur règle peu lui-même et fait régler beaucoup.",
            'items' => [
                ['titre' => 'Un petit groupe', 'texte' => "Chaque réglage est relu sur l'écran de chaque participant, ce qui limite la taille du groupe ; au-delà, la session est dédoublée. En inter-entreprises, chacun travaille sur son propre compte, et aucun chiffre d'une entreprise n'est montré aux autres sans son accord."],
                ['titre' => 'Des campagnes en brouillon, publiées seulement sur accord', 'texte' => "Tout se construit sur les comptes réels, mais rien n'est diffusé sans la validation écrite de la personne qui paie. Les campagnes peuvent ainsi partir dès le lendemain, ou attendre que la page d'arrivée soit prête."],
                ['titre' => 'Des supports qui restent à l\'entreprise', 'texte' => "Gabarit de calcul du coût acceptable, liste de contrôle avant lancement, modèle de tableau hebdomadaire, liste de départ de mots clés à exclure, fiche datée des règles de Meta et de Google, dans des formats modifiables."],
                ['titre' => 'Des pages officielles relues avant chaque session', 'texte' => "Les interfaces de Meta et de Google changent souvent de nom et d'emplacement. Les pages d'aide, les règles et les moyens de paiement par pays sont relus avant chaque formation, et la fiche remise porte la date de cette lecture."],
                ['titre' => 'Des accès rendus en fin de session', 'texte' => "Le formateur reçoit, si besoin, un accès temporaire aux comptes pour préparer la session, jamais la propriété. Ces accès sont retirés à la fin, en présence de l'administrateur, qui vérifie la liste des personnes autorisées."],
                ['titre' => 'Une évaluation sur production et un bilan chiffré', 'texte' => "La réussite se juge sur la campagne prête à diffuser, le budget justifié et les conversions testées. Le bilan à distance relit ensuite les premiers résultats réels. Une attestation de formation est remise avec le résultat de l'évaluation."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils utilise-t-on pendant la formation, et que coûtent-ils ?',
            'legende' => "Coûts d'éditeur relevés le 5 octobre 2026 sur les pages officielles de Meta, de Google et de Canva. Aucun abonnement payant n'est exigé ; seul le budget des campagnes diffusées est facturé par les régies.",
            'entetes' => ['Outil', 'Usage appris en séance', 'Coût selon l\'éditeur', 'Point d\'attention'],
            'lignes'  => [
                ['Gestionnaire de publicités Meta', 'Création et suivi des campagnes Facebook, Instagram, Messenger et WhatsApp', "Pas d'abonnement ; la diffusion est facturée, en général selon le nombre d'impressions", "Se règle sur ordinateur ; les dépenses s'affichent dans la colonne Montant dépensé"],
                ['Gestionnaire d\'événements Meta', 'Pixel, API Conversions, test des événements', 'Inclus dans les outils de Meta', "Vérifier les noms d'événements et les paramètres avant chaque nouvelle campagne"],
                ['Bibliothèque publicitaire Meta', 'Observer les publicités actives des concurrents et de son secteur', 'Consultation publique', "S'inspirer des formats, jamais copier un visuel ou un texte"],
                ['Google Ads', 'Campagnes Recherche, Performance Max, YouTube et Display', "Pas d'abonnement ; les annonces diffusées sont débitées selon le paramètre de paiement", "Pays de facturation et devise conditionnent les moyens de paiement"],
                ['Planificateur de mots clés', 'Idées de mots clés et prévisions de clics ou de conversions selon la dépense', 'Accessible depuis le menu Outils du compte Google Ads', "Les prévisions sont des estimations, à confronter aux termes de recherche réels"],
                ['Google Tag Manager', 'Pose et contrôle des balises sans modifier le code du site', 'Gratuit selon Google ; Tag Manager 360 est l\'offre payante', "Un seul conteneur par site, administré par l'entreprise"],
                ['Google Analytics 4', 'Lecture des ventes et demandes pour rapprocher les chiffres des régies', 'Outils sans frais selon Google ; Analytics 360 pour les grandes entreprises', "Sa configuration détaillée relève de la formation Google Analytics 4 et pilotage"],
                ['Canva', 'Déclinaison des visuels aux formats carré, vertical et paysage', 'Gratuit à 0 € ; Pro à 110 € par an pour une personne ; Pro+ à 170 € par an et par personne', "Vérifier les droits des photos et des musiques utilisées dans une publicité"],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon le secteur et le pays, en Afrique francophone et en Europe ?',
            'items' => [
                ['secteur' => 'Boutique de cosmétiques et de soins capillaires, à Cotonou', 'probleme' => "La gérante booste une publication chaque vendredi. Les messages arrivent, souvent un simple « c'est combien ? », et personne ne sait quelle publicité a produit quelle commande.", 'solution' => "Campagne Meta avec des publicités clic vers WhatsApp, une par produit, prix affiché dans le visuel ; réponse dans l'heure pour rester dans la fenêtre de 24 heures ; tableau où la vendeuse note, pour chaque commande, la publicité d'origine ; arrêt des produits dont le coût par commande dépasse la marge."],
                ['secteur' => 'Auto-école, à Abidjan', 'probleme' => "Un formulaire instantané rapporte beaucoup de contacts, mais une bonne partie des numéros ne répond jamais et les inscriptions payées ne suivent pas.", 'solution' => "Objectif Prospects conservé, avec une question de qualification sur la commune et la date souhaitée ; rappel des contacts dans l'heure ; comptage des seules inscriptions payées comme résultat ; ensembles de publicités regroupés pour sortir de la phase d'apprentissage."],
                ['secteur' => 'Entreprise de climatisation et de froid, à Dakar', 'probleme' => "L'entreprise n'est visible que par le bouche-à-oreille, alors que ses clients tapent « dépannage climatiseur » sur leur téléphone quand l'appareil tombe en panne.", 'solution' => "Campagne Google sur le Réseau de Recherche limitée aux quartiers desservis, mots clés d'urgence, exclusions comme « formation », « emploi » ou « schéma », numéro d'appel dans l'annonce, diffusion aux heures où quelqu'un décroche, et appels comptés comme conversions."],
                ['secteur' => 'Hôtel de bord de mer, à Grand-Popo', 'probleme' => "L'hôtel veut toucher la diaspora installée en France pour les fêtes de fin d'année, mais ignore les règles et les coûts propres à une audience européenne.", 'solution' => "Campagne Meta ciblant la France sur l'offre et les dates, jamais sur l'origine des personnes ; site équipé d'un bandeau de consentement avant le pixel ; budget prévu avec les 3 % de frais de localisation ; campagne Google Recherche en parallèle sur le nom de la ville et de l'hôtel."],
                ['secteur' => 'Boutique en ligne d\'objets artisanaux, à Lyon', 'probleme' => "Une campagne Performance Max annonce un bon retour sur dépense, mais la trésorerie ne suit pas : les ventes attribuées comprennent des clients qui seraient revenus de toute façon.", 'solution' => "Mode Consentement et conversions avancées vérifiés, valeur de commande transmise, lecture du retour sur dépense avec la marge réelle, comparaison mensuelle avec les ventes de la boutique et séparation des recherches sur le nom de la marque."],
                ['secteur' => 'Cabinet de recrutement, à Bruxelles', 'probleme' => "Les offres d'emploi diffusées sur Facebook sont rejetées les unes après les autres, et le cabinet ne comprend pas pourquoi.", 'solution' => "Déclaration de la catégorie publicitaire spéciale Emploi, audiences reconstruites sans les options devenues indisponibles, textes sans allusion à l'âge ou à l'origine des candidats, et suivi des candidatures complètes plutôt que des clics."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format choisir pour votre équipe ?',
            'legende' => "Les quatre formats couvrent le même programme. La formule hybride est la plus utile ici, parce que les chiffres d'une campagne n'existent qu'après sa diffusion.",
            'entetes' => ['Format', 'Pour qui', 'Organisation', 'Condition de réussite'],
            'lignes'  => [
                ['Intra-entreprise', 'Une équipe qui gère les mêmes comptes publicitaires', "Deux jours dans vos locaux, campagnes construites sur vos comptes, bilan à distance trois à quatre semaines plus tard", "Accès administrateur et moyen de paiement disponibles le premier matin"],
                ['Inter-entreprises', 'Un ou deux participants par structure, commerçants ou responsables marketing', "Deux jours en groupe, chacun sur son propre compte, bilan individuel à distance", "Chacun vient avec ses accès ; les chiffres restent hors de l'écran partagé"],
                ['À distance', 'Équipes en Europe, au Canada ou dispersées entre plusieurs villes africaines', "Cinq à six séances d'environ deux heures et demie, travail sur les comptes entre deux séances", "Connexion stable et deux écrans, ou un écran assez grand pour suivre les deux interfaces"],
                ['Hybride', "Entreprises qui veulent lancer en salle et décider sur des chiffres réels", "Deux jours sur place, diffusion des campagnes, puis bilan à distance sur les premiers résultats", "Le budget de test est engagé entre la session et le bilan, sinon il n'y a rien à lire"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => "La formation est chiffrée sur devis ; aucun tarif n'est publié pour elle. Le premier échange, le cadrage et le devis sont gratuits. Le budget publicitaire n'entre jamais dans le devis : il est réglé par l'entreprise directement à Meta et à Google, depuis ses propres comptes. Le règlement de la formation se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.",
            'items'      => [
                ['offre' => 'Programme complet', 'prix' => 'Sur devis', 'inclus' => ['Deux jours en quatre demi-journées, ou leur équivalent à distance', 'Campagnes Meta et Google construites sur vos comptes', 'Test des conversions de bout en bout', 'Supports modifiables, évaluation et attestation']],
                ['offre' => 'Bilan sur les premiers chiffres', 'prix' => 'Sur devis', 'inclus' => ['Séance à distance de 2 h 30 après trois à quatre semaines', 'Lecture des campagnes diffusées', 'Mise à jour des règles de décision']],
                ['offre' => 'Suivi des mois suivants', 'prix' => 'Sur devis', 'inclus' => ['Revue mensuelle des comptes', 'Relecture des nouvelles créations avant diffusion', 'Réponses aux questions sur les refus et les restrictions']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes.',
                'Le nombre de régies travaillées : Meta seule, Google seule, ou les deux.',
                "L'état des comptes et de la mesure au départ : accès à récupérer, balises à corriger, consentement à mettre en place.",
                'Le nombre de pays visés, donc de règles et de moyens de paiement à présenter.',
                'Le format retenu et les déplacements hors de Cotonou.',
                "L'ajout du bilan et d'un suivi mensuel.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Un fonds de formation continue peut-il financer la session ?',
            'legende' => "Pages officielles lues le 5 octobre 2026. Elles décrivent des dispositifs ; la décision appartient toujours au fonds, et aucune prise en charge n'est promise ici.",
            'entetes' => ['Pays', 'Dispositif', 'Ce que dit la source', 'Démarche conseillée'],
            'lignes'  => [
                ['Côte d\'Ivoire', 'FDFP, plan de formation', "Ouvert à toute entreprise qui justifie du paiement régulier des deux taxes ; actions intra avec un intervenant extérieur possibles ; règlement après suivi, contrôle du fonds et approbation de sa Commission permanente", "Inscrire la session dans le plan avant de la tenir, avec le programme de cette page"],
                ['Bénin', 'Fonds de développement de la formation professionnelle continue et de l\'apprentissage', "Statuts approuvés par le décret n° 2022-286 du 11 mai 2022", "Demander par écrit au fonds les conditions applicables à l'entreprise et au prestataire"],
                ['Sénégal', '3FPT', "Un guichet finance le personnel des entreprises et les membres des organisations professionnelles ; la demande se dépose en ligne", "Préparer le devis et le programme avant de remplir la demande"],
                ['France', 'Opérateurs de compétences et autres fonds publics ou mutualisés', "Depuis le 1er janvier 2022, le prestataire doit être certifié Qualiopi pour y accéder", "Richard SALANON n'a pas cette certification : prévoir la session sur le budget propre de l'entreprise"],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi le compte publicitaire et la carte doivent-ils appartenir à l\'entreprise ?',
            'texte' => "Parce qu'un compte publicitaire accumule ce qui a de la valeur : l'historique des campagnes, les audiences, le pixel et ses données, la validation de l'annonceur. Quand tout cela est ouvert au nom d'un salarié, d'un stagiaire ou d'un prestataire, avec sa carte personnelle, l'entreprise le perd le jour où cette personne s'en va, et Google comme Meta affichent alors un autre annonceur que le vôtre. La règle enseignée : un portefeuille business Meta et un compte Google Ads au nom de l'entreprise, au moins deux administrateurs internes, une carte de l'entreprise, des accès temporaires pour les prestataires, et une revue des personnes autorisées à chaque départ.",
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on dans les semaines qui suivent une formation, et comment les éviter ?',
            'intro' => "La session donne les réglages ; ce sont les premières semaines de diffusion qui décident si l'argent est bien dépensé. Voici les dérives les plus fréquentes, avec le réflexe qui les évite.",
            'items' => [
                ['titre' => 'Tout changer tous les jours', 'texte' => "Le lundi on baisse le budget, le mardi on change l'audience, le mercredi le visuel. Chaque modification importante relance l'apprentissage, et la campagne ne se stabilise jamais. Les changements se regroupent une fois par semaine, après lecture du tableau."],
                ['titre' => 'Revenir au bouton « Booster »', 'texte' => "Par facilité, l'équipe recommence à booster des publications avec l'objectif Interactions. Les mentions « J'aime » reviennent, les ventes non. Toute dépense passe par le Gestionnaire de publicités, avec l'objectif et l'événement choisis en formation."],
                ['titre' => 'Envoyer les clics vers une page lente ou hors sujet', 'texte' => "L'annonce promet une offre, la page en présente une autre, ou met plusieurs secondes à s'afficher sur un téléphone ordinaire. Chaque campagne est testée sur mobile avant sa mise en ligne, et la page reprend le prix et la promesse de l'annonce."],
                ['titre' => 'Oublier les mots clés à exclure', 'texte' => "Sans lecture régulière des termes de recherche, une partie du budget Google part vers des requêtes sans intention d'achat. Le rapport se relit chaque semaine, et la liste d'exclusions s'enrichit au fil des mois."],
                ['titre' => 'Laisser la même création trop longtemps', 'texte' => "Une audience locale réduite voit vite plusieurs fois la même image. Quand la fréquence monte et que le coût par résultat suit, il faut de nouveaux visuels : l'équipe prévoit chaque mois deux ou trois déclinaisons d'avance."],
                ['titre' => 'Répondre trop tard sur WhatsApp', 'texte' => "La publicité a fait écrire le client, mais la réponse arrive le lendemain. Le prospect a acheté ailleurs, et la fenêtre gratuite de Meta est perdue. Une personne est désignée pour répondre pendant les heures de diffusion, ou les heures de diffusion s'alignent sur sa présence."],
                ['titre' => 'Casser le suivi lors d\'une modification du site', 'texte' => "Une refonte ou un nouveau thème de boutique supprime le pixel ou la balise, et les campagnes optimisent soudain à l'aveugle. Toute modification du site se termine par un nouveau test de conversion de bout en bout."],
                ['titre' => 'Additionner les conversions des deux régies', 'texte' => "Meta annonce quarante ventes, Google trente-cinq, la boutique en a enregistré cinquante. Le tableau hebdomadaire part toujours des ventes réelles, puis regarde ce que chaque régie s'attribue, sans jamais faire la somme."],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Réseaux utilisés, connexion, langues, données personnelles : que change le contexte local pour vos campagnes ?',
            'paragraphes' => [
                "Les audiences ne se ressemblent pas d'un pays à l'autre. Selon les rapports Digital 2026 de DataReportal, publiés le 8 novembre 2025 avec des données de fin 2025 tirées des outils publicitaires des plateformes, Instagram touchait 237 000 utilisateurs au Bénin contre 2,50 millions pour Facebook, et 895 000 en Côte d'Ivoire contre 8,40 millions pour Facebook. Au Sénégal, la portée publicitaire de YouTube atteignait 5,42 millions, devant Facebook avec 3,60 millions et Instagram avec 1,45 million. Une campagne qui ne cible qu'Instagram à Cotonou parle donc à une petite partie de la clientèle.",
                "La connexion compte autant que la régie. La plupart des personnes touchées voient l'annonce sur un téléphone, parfois avec un forfait limité : les vidéos courtes et légères, les visuels lisibles sans le son et les pages qui s'affichent vite donnent les meilleurs résultats. La langue aussi : une annonce en français convient à Abidjan comme à Lyon, mais un message en fon, en wolof ou en dioula, relu par un locuteur, peut toucher un public qu'un slogan traduit laisse indifférent.",
                "Les données personnelles suivent les personnes visées. Au Bénin, la loi n° 2017-20 portant code du numérique encadre leur traitement, sous le contrôle de l'Autorité de protection des données personnelles : une liste de clients importée dans une régie pour créer une audience suppose que ces clients aient été informés. Pour une audience européenne, la CNIL exige le consentement préalable avant les traceurs publicitaires, et le règlement européen sur les services numériques interdit de cibler sur des données sensibles ou de viser les enfants. La formation applique ces règles sur les campagnes des participants, sans en faire un cours de droit.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre la publicité Meta et Google avec Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                "Il construit pour ses clients des pages d'arrivée, des boutiques en ligne et des intégrations WhatsApp, ce qui l'amène à poser des pixels, des balises et des signaux de conversion et à vérifier qu'ils comptent juste. Diplômé d'" . fait('formation')['nom'] . " en " . fait('formation')['annee'] . ", il compte " . $ans . " ans d'expérience dans le numérique. Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Selon ses chiffres, plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes ont suivi ses formations.",
                "Il a travaillé dans quinze pays, du Bénin au Canada en passant par la Côte d'Ivoire, le Sénégal, la France et la Belgique, ce qui explique la place donnée aux moyens de paiement et aux règles de chaque marché. Il n'est ni partenaire ni certifié de Meta ou de Google : il enseigne à partir des pages officielles relues avant chaque session et des comptes de l'entreprise, sans promettre de coût par client ni de chiffre de ventes. Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a> ; les formations voisines figurent sur la page <a href=\"/formations/domaine/marketing-visibilite\">marketing et visibilité</a> et dans le <a href=\"/formations/\">catalogue des formations</a>, et les pays servis sur la page des <a href=\"/zones/\">zones d'intervention</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de confier un budget publicitaire à votre équipe ?',
            'texte' => "Une campagne rentable commence par un calcul, pas par un bouton : le coût maximal d'un client, une régie choisie selon la façon dont il achète, des comptes et une carte au nom de l'entreprise, des conversions testées avant la première dépense, des changements groupés une fois par semaine et un tableau qui part toujours des ventes réelles.",
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre prochaine campagne a-t-elle un coût maximal par client écrit noir sur blanc ?',
            'texte'  => "Indiquez ce que vous vendez, les pays visés, les régies déjà utilisées, le budget mensuel envisagé et le nombre de personnes à former. Vous recevez une réponse sous 24 heures, puis une proposition de programme construite sur vos comptes publicitaires, et un devis.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il déjà avoir fait de la publicité pour suivre la formation ?', 'r' => "Non. Elle part de zéro sur les réglages, mais suppose une offre claire, un site ou une page d'arrivée qui fonctionne sur téléphone et, idéalement, une mesure des conversions déjà en place. Les personnes qui ont déjà boosté des publications ou ouvert un compte Google Ads gagnent à apporter leurs anciens résultats."],
        ['q' => 'Le budget des campagnes est-il inclus dans le prix ?', 'r' => "Non. Les campagnes construites en séance sont payées par l'entreprise à Meta et à Google, depuis ses comptes et avec son moyen de paiement. Le devis couvre la préparation, l'animation, les supports et, si vous le retenez, le bilan et le suivi."],
        ['q' => 'Booster une publication depuis la page Facebook ne suffit-il pas ?', 'r' => "Pour faire voir une publication, parfois. Pour vendre, rarement : le bouton offre peu de choix d'objectif, d'audience et de mesure. Le Gestionnaire de publicités permet de choisir l'action à optimiser, de tester plusieurs créations et de lire le coût de chaque résultat."],
        ['q' => 'Faut-il commencer par Meta ou par Google ?', 'r' => "Par la régie qui correspond à la façon dont vos clients achètent. S'ils cherchent déjà votre métier sur Google, commencez par une campagne sur le Réseau de Recherche. S'il faut leur montrer l'offre ou si la vente se conclut en discutant, commencez par Meta et les publicités clic vers WhatsApp."],
        ['q' => 'Quel budget minimum prévoir pour tester ?', 'r' => "Il se calcule à partir de votre coût maximal acceptable par résultat. Meta recommande, avec un objectif de coût par résultat, un budget quotidien d'au moins cinq fois cet objectif, et un ensemble de publicités sort de la phase d'apprentissage après environ 50 résultats dans la semaine. Le calcul est fait en séance avec vos chiffres."],
        ['q' => 'Peut-on payer Meta ou Google par Mobile Money ?', 'r' => "Pas d'après leurs pages d'aide lues le 5 octobre 2026 : pour le Bénin, la Côte d'Ivoire et le Sénégal, Google ne liste que les cartes de crédit et de débit, et Meta les cartes et PayPal pour la Côte d'Ivoire et le Sénégal. Une carte Visa ou Mastercard au nom de l'entreprise, autorisée pour les paiements en ligne à l'étranger, reste la solution la plus sûre."],
        ['q' => 'Combien de temps faut-il pour qu\'une publicité soit acceptée ?', 'r' => "Meta indique que les publicités sont en général examinées dans les 24 heures, et Google que la plupart des annonces le sont en un jour ouvrable. La validation de l'annonceur chez Google peut demander jusqu'à cinq jours ouvrés. Mieux vaut donc tout soumettre au moins la veille d'un lancement."],
        ['q' => 'Une publicité clic vers WhatsApp fait-elle payer les messages ?', 'r' => "Pour les entreprises qui utilisent la plateforme WhatsApp Business, Meta ne facture aucun message pendant une fenêtre qui peut rester ouverte jusqu'à 7 jours quand le client écrit depuis une publicité « cliquer pour WhatsApp » sur l'application mobile et que l'entreprise répond dans les 24 heures, sauf les messages du Meta Business Agent. Le clic sur la publicité, lui, est payé comme toute diffusion."],
        ['q' => 'Les participants installent-ils eux-mêmes le pixel et l\'API Conversions ?', 'r' => "Ils apprennent à vérifier qu'ils fonctionnent et à choisir les bons événements. La pose elle-même dépend du site : une boutique sur une plateforme courante se configure souvent par une extension, un site sur mesure demande l'intervention de son développeur. La session prévoit ce temps si le développeur est présent."],
        ['q' => 'La formation peut-elle se suivre entièrement à distance ?', 'r' => "Oui, en cinq à six séances d'environ deux heures et demie, avec partage d'écran sur les comptes de l'entreprise. Il faut une connexion stable, et de préférence deux écrans pour suivre à la fois l'interface et les explications."],
        ['q' => 'Richard SALANON est-il partenaire de Meta ou de Google ?', 'r' => "Non. Il n'est ni partenaire ni certifié par Meta ou par Google. La formation s'appuie sur leurs pages d'aide et leurs règles officielles, relues avant chaque session et citées avec leur date."],
        ['q' => 'Combien coûte la formation, et un fonds peut-il la prendre en charge ?', 'r' => "Elle est chiffrée sur devis, selon le nombre de participants, les régies travaillées, l'état des comptes au départ, le format et le suivi retenu. Le FDFP, le fonds béninois de formation continue ou le 3FPT ont leurs propres conditions : demandez leur réponse écrite avant de signer. Aucune prise en charge n'est garantie."],
    ],

    'sources' => [
        ['titre' => 'Meta, choisir le bon objectif publicitaire dans le Gestionnaire de publicités', 'url' => 'https://www.facebook.com/business/help/1438417719786914', 'date' => '2026-10-05'],
        ['titre' => 'Meta, à propos des budgets quotidiens (flexibilité de 75 %, plafond hebdomadaire)', 'url' => 'https://www.facebook.com/business/help/190490051321426', 'date' => '2026-10-05'],
        ['titre' => 'Meta, recommandations relatives aux budgets minimaux', 'url' => 'https://www.facebook.com/business/help/203183363050448', 'date' => '2026-10-05'],
        ['titre' => 'Meta, à propos de la phase d\'apprentissage', 'url' => 'https://www.facebook.com/business/help/112167992830700', 'date' => '2026-10-05'],
        ['titre' => 'Meta, à propos des stratégies d\'enchère', 'url' => 'https://www.facebook.com/business/help/1619591734742116', 'date' => '2026-10-05'],
        ['titre' => 'Meta, à propos des publicités en cours d\'examen', 'url' => 'https://www.facebook.com/business/help/204798856225114', 'date' => '2026-10-05'],
        ['titre' => 'Meta, comment choisir une catégorie publicitaire spéciale', 'url' => 'https://www.facebook.com/business/help/298000447747885', 'date' => '2026-10-05'],
        ['titre' => 'Meta, présentation des Standards publicitaires', 'url' => 'https://transparency.meta.com/fr-fr/policies/ad-standards/', 'date' => '2026-10-05'],
        ['titre' => 'Meta, Standards publicitaires : atteintes à la vie privée et caractéristiques personnelles', 'url' => 'https://transparency.meta.com/fr-fr/policies/ad-standards/objectionable-content/privacy-violations-personal-attributes/', 'date' => '2026-10-05'],
        ['titre' => 'Meta, à propos du pixel Meta', 'url' => 'https://www.facebook.com/business/help/742478679120153', 'date' => '2026-10-05'],
        ['titre' => 'Meta, à propos de l\'API Conversions', 'url' => 'https://www.facebook.com/business/help/2041148702652965', 'date' => '2026-10-05'],
        ['titre' => 'Meta, créer des publicités clic vers WhatsApp dans le Gestionnaire de publicités', 'url' => 'https://www.facebook.com/business/help/447934475640650', 'date' => '2026-10-05'],
        ['titre' => 'Meta, comment Meta facture les publicités', 'url' => 'https://www.facebook.com/business/help/716180208457684', 'date' => '2026-10-05'],
        ['titre' => 'Meta, à propos des frais de localisation pour les publicités', 'url' => 'https://www.facebook.com/business/help/1238737454289085', 'date' => '2026-10-05'],
        ['titre' => 'Meta, options de paiement acceptées pour les publicités Meta', 'url' => 'https://www.facebook.com/business/help/212763688755026', 'date' => '2026-10-05'],
        ['titre' => 'Meta, options de paiement acceptées en Côte d\'Ivoire', 'url' => 'https://www.facebook.com/business/help/243526937301893', 'date' => '2026-10-05'],
        ['titre' => 'Meta, options de paiement acceptées au Sénégal', 'url' => 'https://www.facebook.com/business/help/2661317217510058', 'date' => '2026-10-05'],
        ['titre' => 'Meta for Developers, tarification de la plateforme WhatsApp Business', 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, types de campagnes', 'url' => 'https://support.google.com/google-ads/answer/2567043?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, budget quotidien moyen', 'url' => 'https://support.google.com/google-ads/answer/2375423?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, stratégies d\'enchères', 'url' => 'https://support.google.com/google-ads/answer/2472725?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, types de correspondance des mots clés', 'url' => 'https://support.google.com/google-ads/answer/7478529?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, à propos de la mesure des conversions', 'url' => 'https://support.google.com/google-ads/answer/1722022?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, à propos du suivi avancé des conversions', 'url' => 'https://support.google.com/google-ads/answer/9888656?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, à propos du mode Consentement', 'url' => 'https://support.google.com/google-ads/answer/10000067?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, vérifier vos signaux de consentement pour les utilisateurs dans l\'EEE', 'url' => 'https://support.google.com/google-ads/answer/16142339?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, à propos des modes de paiement (pays sélectionnés : Bénin, Côte d\'Ivoire, Sénégal, France)', 'url' => 'https://support.google.com/google-ads/answer/2375433?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Google Ads, à propos des paramètres de paiement', 'url' => 'https://support.google.com/google-ads/answer/2375432?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Centre de règles Google Ads, à propos du processus d\'examen des annonces', 'url' => 'https://support.google.com/adspolicy/answer/1722120?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Centre de règles Google Ads, règles Google Ads', 'url' => 'https://support.google.com/adspolicy/answer/6008942?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Centre de règles Google Ads, tâches requises pour la validation des annonceurs', 'url' => 'https://support.google.com/adspolicy/answer/15577076?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Google Ads, outil de planification des mots clés', 'url' => 'https://business.google.com/fr/ad-tools/keyword-planner/', 'date' => '2026-10-05'],
        ['titre' => 'Google Marketing Platform, Google Tag Manager', 'url' => 'https://marketingplatform.google.com/intl/fr/about/tag-manager/', 'date' => '2026-10-05'],
        ['titre' => 'Google Marketing Platform, Google Analytics (outils sans frais)', 'url' => 'https://marketingplatform.google.com/intl/fr/about/analytics/', 'date' => '2026-10-05'],
        ['titre' => 'Canva, abonnements et tarifs', 'url' => 'https://www.canva.com/fr_fr/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, cookies et traceurs : que dit la loi ?', 'url' => 'https://www.cnil.fr/fr/cookies-et-autres-traceurs/regles/cookies/que-dit-la-loi', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, le règlement sur les services numériques', 'url' => 'https://digital-strategy.ec.europa.eu/fr/policies/digital-services-act', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 portant code du numérique', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'Autorité de protection des données personnelles du Bénin (APDP)', 'url' => 'https://service.apdp.bj/', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 Bénin (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-benin', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 Côte d\'Ivoire (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-cote-divoire', 'date' => '2026-10-05'],
        ['titre' => 'DataReportal, Digital 2026 Sénégal (8 novembre 2025)', 'url' => 'https://datareportal.com/reports/digital-2026-senegal', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['analytics-ga4', 'e-commerce', 'marketing-digital-b2b', 'linkedin-reseaux-sociaux', 'whatsapp-business', 'contenu-avec-ia'],
        'services'    => ['landing-page-haute-conversion', 'integration-whatsapp', 'site-e-commerce'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],
];
