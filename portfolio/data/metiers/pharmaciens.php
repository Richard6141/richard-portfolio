<?php
// ============================================================
// data/metiers/pharmaciens.php · Page « formations par métier » :
// pharmaciens et équipes d'officine (vague 1C, univers Santé et social,
// non prioritaire, statut P : Richard peut former ce public, jamais
// « a formé »).
// Angle propre : l'officine (stocks, lots et péremptions, commandes aux
// grossistes, ruptures et rappels de lots, ordonnances et comptoir,
// traçabilité, données de santé, médicaments falsifiés). Les fiches
// odoo-utilisateurs, excel-google-sheets, ia-ethique-conformite et
// cybersecurite-employes sont citées et reliées, jamais répétées ; les pages
// ONG et médecins ne sont pas reprises (aucun article de la loi n° 2017-20
// déjà commenté par la page médecins n'est redétaillé ici).
// Faits externes lus le 05/10/2026 : loi béninoise n° 2021-03 (articles 17,
// 23, 47, 54, 56, 90, 95, PDF du SGG), ABMed (présentation, décret
// n° 2023-422 ; formulaires de rupture et d'effet indésirable), code de
// déontologie des pharmaciens (décret n° 2026-156 du 3 mars 2026, code
// commenté de l'Ordre : R.4235-5, 7, 10, 21, 22, 25, 29, 31, 37, décision
// CDPI du 12/12/2022 sur un avis Google), Ordre (dossier pharmaceutique,
// DP-Rappels, vente en ligne), règlement délégué (UE) 2016/161 (EUR-Lex)
// et page de la Commission sur les médicaments falsifiés, OMS (fiche du
// 03/12/2024 ; principes du 28/06/2021), Assurance Maladie (ordonnance
// numérique, page du 14/08/2026), Odoo (dates d'expiration, FEFO),
// Dolibarr (module Lot / Série), Union africaine (traité AMA), OPCO EP,
// Agence nationale du DPC, FDFP, 3FPT, FODEFCA, France Compétences, et les
// « Faits déjà vérifiés » du catalogue (WhatsApp, Odoo, article 4).
// Richard ne pratique aucun acte pharmaceutique et ne donne aucun conseil
// de santé : il forme à l'usage des outils.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation numérique et IA pour les pharmaciens et les équipes d'officine : suivre les stocks, les lots et les péremptions, passer les bonnes commandes, tracer chaque boîte et protéger les ordonnances, sans jamais confier le conseil à une machine",
    'title'   => "Formation IA pour pharmaciens d'officine | Richard SALANON",
    'meta'    => "Former une officine au numérique et à l'IA : stocks, péremptions, commandes, ordonnances, traçabilité, données de santé et médicaments falsifiés.",
    'en_bref' => "Cette page s'adresse aux pharmaciens titulaires et adjoints, aux préparateurs, aux auxiliaires et aux vendeurs qui veulent tenir l'officine avec des outils fiables : logiciel de gestion, lots et dates de péremption, commandes aux grossistes, traçabilité, messagerie au comptoir. L'intelligence artificielle y trouve sa place pour l'écrit administratif, jamais pour le conseil au patient ni l'analyse d'une ordonnance. Le parcours type compte cinq demi-journées et une séance de suivi à un mois, en intra à l'officine, à distance ou en hybride, avec des données fictives, et son prix est fixé sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Santé et social',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : suivre une boîte de médicament, du bon de commande jusqu'au comptoir",
            'duree'  => '3 h 30',
            'points' => [
                "Le parcours d'une référence dans l'officine, observé sur place : commande, réception, contrôle du bon de livraison, rangement, vente, retour, destruction.",
                "Ce que le logiciel sait déjà de chaque boîte (lot, date de péremption, prix, fournisseur) et ce qu'il ignore parce que personne ne le saisit.",
                "Les écarts habituels entre l'écran et le rayon : ventes passées sur une autre référence, retours remis en rayon sans écriture, produits rangés en réserve sans transfert.",
                "Qui fait quoi au comptoir, en réserve et à la caisse, et ce que le pharmacien titulaire doit avoir défini par écrit pour chaque poste.",
                "Exercice : suivre trois références tirées au sort, du dernier bon de livraison jusqu'au stock affiché, et noter chaque rupture de la chaîne.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : lots, dates de péremption et rangement par date",
            'duree'  => '3 h 30',
            'points' => [
                "Saisir le lot et la date de péremption à la réception, pas au moment de l'inventaire : réglage du logiciel et geste du réceptionnaire.",
                "La sortie par date de péremption la plus proche (FEFO) : ce que le logiciel propose, ce que le rangement physique doit suivre.",
                "Alertes à trois mois, à un mois et à la date limite : qui les reçoit, qui décide d'un retour au grossiste, d'une mise en avant ou d'une mise en quarantaine.",
                "Produits périmés ou rappelés : zone séparée, sortie du stock vendable, registre, circuit de destruction prévu par les textes du pays.",
                "Exercice : construire la liste des produits qui expirent dans les quatre-vingt-dix jours et décider, ligne par ligne, de leur sort.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : commandes aux grossistes, ruptures et inventaires tournants",
            'duree'  => '3 h 30',
            'points' => [
                "Seuils de commande et propositions automatiques : lire une proposition avant de la valider, corriger une saisonnalité, éviter le surstock d'une promotion.",
                "Plusieurs grossistes-répartiteurs : comparer les délais et les taux de service, garder une trace des manquants et des reliquats.",
                "Ruptures : prévenir le patient sans promettre, noter la demande, et déclarer la rupture à l'autorité du médicament quand elle le prévoit.",
                "Inventaire tournant par famille de produits : un rayon par semaine, des écarts expliqués avant toute correction.",
                "Exercice : relire une proposition de commande réelle, rendue anonyme, et justifier chaque quantité retenue ou retirée.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : ordonnances, comptoir, messagerie et données de santé",
            'duree'  => '3 h 30',
            'points' => [
                "Ce qui, dans l'officine, relève du secret : une ordonnance, l'historique d'un patient, mais aussi ce que l'équipe a vu ou entendu au comptoir.",
                "Photos d'ordonnances reçues sur WhatsApp : un numéro professionnel, un téléphone qui reste à l'officine, une suppression après traitement, et aucune réponse de santé par écrit sans le pharmacien.",
                "Sessions nominatives sur les postes du comptoir, écran orienté vers l'équipe, impressions récupérées aussitôt, comptes fermés au départ d'un salarié.",
                "Avis Google, réseaux sociaux et groupes de quartier : répondre sans jamais révéler un médicament, une ordonnance ou une visite.",
                "Exercice : rédiger les réponses types de l'officine sur WhatsApp et sur Google, puis les faire relire par le pharmacien titulaire.",
            ],
        ],
        [
            'titre'  => "Jour 3, matin, pour les pharmaciens titulaires et adjoints : IA, règles écrites et tableau de bord",
            'duree'  => '3 h 30',
            'points' => [
                "Ce que l'IA peut préparer dans une officine : procédure interne, fiche de poste, planning de garde, courrier à un fournisseur, synthèse d'une circulaire, sur des textes sans aucun patient.",
                "Ce qu'elle ne fait jamais : un conseil, une posologie, une substitution, une vérification d'interaction ou l'analyse d'une ordonnance.",
                "Indicateurs de pilotage : valeur du stock, produits dormants, péremptions évitées ou perdues, manquants grossistes, écarts d'inventaire.",
                "La charte numérique de l'officine : outils autorisés, informations interdites dans un assistant, gestes de sécurité, attributions de chacun.",
                "Feuille de route : trois chantiers datés, chacun confié à un membre nommé de l'équipe.",
            ],
        ],
        [
            'titre'  => "Un mois après, séance de suivi à distance",
            'duree'  => '2 h',
            'points' => [
                "Lecture commentée des alertes de péremption du mois et des décisions prises.",
                "Point sur les propositions de commande validées depuis la formation et sur les manquants.",
                "Retour sur les messages reçus au comptoir et sur les réponses types en service.",
                "Mise à jour de la charte numérique après quatre semaines d'usage réel.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Pharmaciens titulaires et adjoints, préparateurs, auxiliaires et vendeurs en pharmacie, responsables des achats, de la réserve et de la caisse"],
        ['l' => 'Durée', 'v' => "Cinq demi-journées de 3 h 30, dont une réservée aux pharmaciens, puis 2 h de suivi à un mois"],
        ['l' => 'Formats', 'v' => "Intra à l'officine, aux heures creuses ou le jour de fermeture, à distance ou hybride"],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Que changent l'IA, la digitalisation et l'automatisation pour une officine ?",
            'paragraphes' => [
                "Une officine est d'abord un stock. Des milliers de références, chacune avec ses lots, ses dates de péremption, ses conditions de conservation et son prix, entrent chaque jour par les livraisons des grossistes et sortent par le comptoir. Les pertes les plus coûteuses ne se voient pas : une boîte périmée découverte au fond d'un tiroir, un générique commandé deux fois parce que le premier colis n'a jamais été réceptionné dans le logiciel, un patient renvoyé alors que le produit dormait en réserve. Ces pertes relèvent de l'organisation, et c'est sur elles que le numérique agit en premier.",
                "La digitalisation commence au moment de la réception. Si le lot et la date de péremption sont saisis à l'arrivée, ou lus sur le code de la boîte, le logiciel sait ce qui expire et dans quel ordre vendre. Les alertes partent d'elles-mêmes, les retours aux grossistes se préparent avant la date limite, et l'inventaire cesse d'être une épreuve annuelle pour devenir un comptage d'un rayon par semaine. Le même fichier permet aussi de retrouver en quelques minutes les boîtes d'un lot rappelé.",
                "L'automatisation porte ensuite sur les commandes. Un seuil bien réglé produit une proposition de commande que le responsable relit et corrige, au lieu d'une liste dressée de mémoire en fin de journée. Les manquants des grossistes sont notés, les ruptures se repèrent tôt et les quantités suivent les ventes réelles plutôt que l'intuition. Mais une proposition n'est qu'une proposition : une épidémie de paludisme, une campagne de vaccination ou la fermeture d'une officine voisine ne figurent dans aucun historique.",
                "L'intelligence artificielle trouve sa place dans l'écrit qui entoure le métier : une procédure de réception, une fiche de poste, un planning de garde, un courrier de réclamation à un fournisseur, le résumé d'une circulaire de l'autorité du médicament. Elle ne prend aucune place au comptoir. Le conseil au patient, l'analyse d'une ordonnance, le choix d'un médicament sans prescription ou la vérification d'une interaction appartiennent au pharmacien, qui en répond personnellement. La formation l'énonce dès la première heure.",
                "Le dernier changement touche aux informations des patients. Les ordonnances arrivent désormais en photo sur une messagerie, les historiques de délivrance vivent dans un logiciel souvent hébergé, et une réponse maladroite à un avis en ligne peut révéler un traitement. Chaque membre de l'équipe manipule des données de santé : la formation traite donc le secret comme un geste quotidien de chaque poste, pas comme un paragraphe du règlement intérieur.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que l'IA et les outils numériques ne doivent-ils jamais faire dans une officine ?",
            'intro' => "Chacune de ces limites découle d'un texte : la loi qui organise la pharmacie, le code de déontologie, les règles sur les données de santé. Pendant la session, l'équipe les réécrit avec ses propres mots, dans une charte affichée en réserve.",
            'items' => [
                ['titre' => "Conseiller un patient à la place du pharmacien", 'texte' => "Le commentaire officiel du code de déontologie des pharmaciens français le dit nettement : le conseil pharmaceutique est nécessairement personnalisé et ne peut se réduire à une information standardisée. Un robot de messagerie, un assistant en ligne ou une borne ne répondent donc à aucune question de santé, même simple, même la nuit."],
                ['titre' => "Analyser une ordonnance ou vérifier une interaction", 'texte' => "L'analyse pharmaceutique de l'ordonnance fait partie de l'acte de dispensation, que le pharmacien assure dans son intégralité. Un assistant d'IA grand public n'est pas une base de données sur les médicaments : il peut inventer une posologie ou ignorer une contre-indication avec le même aplomb qu'une réponse juste."],
                ['titre' => "Choisir un substitut en cas de rupture", 'texte' => "Proposer un autre dosage, une autre forme ou une autre molécule quand le produit prescrit manque engage la responsabilité du pharmacien et, souvent, l'accord du prescripteur. L'outil signale la rupture et les stocks disponibles ; il ne propose aucun remplacement au patient."],
                ['titre' => "Recevoir une ordonnance ou un historique de patient", 'texte' => "Une photo d'ordonnance, une liste de traitements ou une fiche de délivrance n'entrent jamais dans un assistant d'IA utilisé avec un compte personnel. Le nom effacé ne suffit pas : un médicament rare, un quartier et une date permettent souvent de reconnaître quelqu'un."],
                ['titre' => "Révéler un traitement en répondant à un avis", 'texte' => "En France, une chambre de discipline de l'Ordre a jugé, le 12 décembre 2022, qu'un pharmacien qui cite dans un commentaire sur Google le nom d'un médicament non délivré à une patiente mécontente manque à son secret professionnel. Une réponse générée automatiquement à un avis en ligne ne mentionne jamais un produit, une ordonnance ni une visite."],
                ['titre' => "Valider seul une commande ou un retour", 'texte' => "Une proposition de commande calculée par le logiciel reste un brouillon jusqu'à sa relecture par la personne désignée. Un retour au grossiste, une destruction ou une remise en vente après rappel de lot passent par une décision humaine écrite, jamais par une règle automatique."],
                ['titre' => "Vendre hors du cadre prévu par la loi", 'texte' => "Une messagerie ou un site ne créent pas un nouveau circuit de vente. En France, seuls les médicaments sans prescription obligatoire peuvent être vendus en ligne, depuis le site déclaré de l'officine. Au Bénin, la loi interdit la vente de médicaments dans un lieu autre que l'officine, la pharmacie à usage intérieur ou le dépôt. Avant toute livraison ou réservation à distance, on lit le texte de son pays."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels textes encadrent l'officine numérique, et où faut-il les lire ?",
            'legende' => "Repères relevés le 5 octobre 2026 dans les textes publiés par les États, les autorités du médicament et l'Ordre. Ils ne remplacent ni la lecture intégrale des textes de votre pays, ni les positions de votre ordre des pharmaciens, ni les décisions de votre autorité de régulation : ces sources se consultent directement, dans leur dernière version.",
            'entetes' => ['Texte ou autorité', 'Ce qu\'il prévoit', 'Ce que l\'officine en tire pour ses outils'],
            'lignes'  => [
                ["Loi n° 2021-03 du 1er février 2021 portant organisation des activités pharmaceutiques (Bénin), articles 17 et 54", "La dispensation obéit aux bonnes pratiques de dispensation, notamment pour les médicaments soumis à prescription ; les seuls actes permis dans l'officine, hors dispensation, sont les actes de conseil et d'éducation sanitaire posés par le pharmacien", "Le conseil est un acte du pharmacien : aucun outil ne le pose à sa place, au comptoir comme sur une messagerie"],
                ["Même loi, articles 47 et 56", "Toute officine met en place un système de traçabilité des médicaments intégré au dispositif national de traçabilité des produits de santé ; elle ne s'approvisionne en médicaments qu'auprès des grossistes-répartiteurs, sauf dérogation de l'autorité de régulation", "Le logiciel doit garder le lot, la date de péremption et le fournisseur de chaque entrée, et aucune boîte n'entre en stock sans bon de livraison d'un grossiste"],
                ["Même loi, articles 90 et 95", "Vente de médicaments interdite hors de l'officine, de la pharmacie à usage intérieur ou du dépôt, sous peine d'un à cinq ans d'emprisonnement et de 500 000 à 2 000 000 de francs CFA d'amende ; cinq à dix ans pour qui vend des médicaments falsifiés", "Une commande prise sur WhatsApp ne déplace pas la vente hors de l'officine, et tout produit d'origine douteuse est écarté du stock"],
                ["Agence béninoise du médicament et des autres produits de santé (ABMed), décret n° 2023-422 du 26 juillet 2023", "Établissement public qui coordonne la politique du médicament, accorde les autorisations, contrôle la qualité et lutte contre les produits de qualité inférieure ou falsifiés ; formulaires en ligne de déclaration des ruptures et des effets indésirables", "Les déclarations se font sur le site de l'Agence ; l'équipe sait où les trouver et qui, à l'officine, est chargé de les remplir"],
                ["Code de déontologie des pharmaciens (France), décret n° 2026-156 du 3 mars 2026, en vigueur depuis le 6 mars 2026, articles R.4235-5 et R.4235-10", "Le secret couvre ce qui a été confié au pharmacien et ce qu'il a vu, entendu ou compris ; il veille à ce que son personnel connaisse et respecte ce secret ; le recours aux outils numériques n'altère ni la prise en charge ni les actes, et les données collectées se limitent au strict nécessaire", "Le choix d'un outil numérique est une décision déontologique, pas seulement une affaire de prix ou d'ergonomie"],
                ["Même code, articles R.4235-21, R.4235-25 et R.4235-37", "Attributions du personnel définies par écrit et formation aux bonnes pratiques ; dispensation complète, analyse de l'ordonnance comprise ; toute erreur de délivrance est corrigée, consignée, et suivie de mesures qui en évitent la répétition", "Le logiciel garde la trace des erreurs et des corrections, et chaque poste a ses droits d'accès, conformes à ses attributions écrites"],
                ["Règlement délégué (UE) 2016/161, applicable depuis le 9 février 2019", "Un identifiant unique (code produit, numéro de série, lot, date de péremption) encodé dans un code Data Matrix, et un dispositif antieffraction ; la pharmacie vérifie ces dispositifs et désactive l'identifiant au moment de la délivrance", "En Europe, le lecteur de codes à deux dimensions et sa liaison au logiciel font partie de l'équipement minimal du comptoir"],
                ["Vente en ligne de médicaments (France)", "Depuis 2013, une officine peut vendre en ligne les médicaments non soumis à prescription obligatoire, après déclaration au directeur général de l'agence régionale de santé ; le logo commun européen figure sur chaque page ; l'Ordre tient la liste des sites habilités", "Un site ou une boutique sur un réseau social ne vend jamais de médicament sur ordonnance"],
                ["Règlement européen sur l'IA, article 4 (Commission européenne, mise à jour du 27 juillet 2026)", "Obligation de maîtrise de l'IA applicable depuis le 2 février 2025, contrôlée depuis le 3 août 2026, maintenue par l'omnibus numérique pour les utilisateurs professionnels", "Une officine européenne dont l'équipe utilise un assistant d'IA garde la trace de la formation de son personnel"],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Un assistant d'IA peut-il répondre à la place du pharmacien à une question sur un médicament ?",
            'texte' => "Non. Un assistant conversationnel grand public n'a pas lu l'ordonnance, ne connaît ni les autres traitements du patient, ni son âge réel, ni une grossesse en cours, et il peut produire une posologie fausse sur un ton parfaitement assuré. L'Organisation mondiale de la santé, dans les six principes publiés le 28 juin 2021 pour l'IA en santé, place en premier la protection de l'autonomie humaine : les humains doivent garder la maîtrise des systèmes de soins et des décisions médicales. La formation n'enseigne donc aucun usage de l'IA au comptoir. Richard SALANON n'est pas pharmacien, ne pose aucun acte pharmaceutique et ne donne aucun conseil de santé : il forme à l'usage des outils qui entourent la dispensation, jamais à la dispensation elle-même.",
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans des officines d'Afrique francophone et d'Europe ?",
            'items' => [
                ['secteur' => "Officine de quartier, à Cotonou", 'probleme' => "Situation type : les produits périmés se découvrent au moment de les vendre, parce que le logiciel connaît les quantités mais pas les lots, et que les boîtes récentes sont rangées devant les anciennes.", 'solution' => "Le lot et la date de péremption sont saisis à chaque réception, le rangement suit la règle de la date la plus proche devant, et une liste des produits qui expirent dans les quatre-vingt-dix jours sort chaque lundi. Le pharmacien décide, ligne par ligne, du retour au grossiste ou de la mise en quarantaine."],
                ['secteur' => "Pharmacie de centre-ville, à Abidjan", 'probleme' => "Situation type : des dizaines de photos d'ordonnances arrivent chaque jour sur le téléphone personnel d'un vendeur, qui répond seul sur la disponibilité et parfois sur la façon de prendre le traitement.", 'solution' => "Un numéro professionnel au nom de l'officine, un téléphone qui ne quitte pas le comptoir, des réponses types limitées à la disponibilité et à l'heure de retrait, et toute question de santé renvoyée vers un pharmacien. Les photos sont supprimées une fois la demande traitée."],
                ['secteur' => "Officine travaillant avec trois grossistes, à Dakar ou à Lomé", 'probleme' => "Situation type : la commande du soir se dresse de mémoire, les manquants d'un grossiste sont recommandés chez un autre sans trace, et certains produits arrivent deux fois.", 'solution' => "Des seuils de commande par référence, une proposition relue chaque soir par le responsable des achats, un relevé des manquants par grossiste et une réception validée sur le bon de livraison réel. Au bout d'un mois, l'équipe sait quel fournisseur sert le mieux chaque famille de produits."],
                ['secteur' => "Pharmacie avec produits de la chaîne du froid, à Ouagadougou ou à Bamako", 'probleme' => "Situation type : les températures du réfrigérateur sont notées à la main quand quelqu'un y pense, et une coupure d'électricité pendant la nuit passe inaperçue.", 'solution' => "Un relevé deux fois par jour dans une feuille partagée, avec la plage fixée par le pharmacien, un enregistreur de température et une procédure écrite en cas d'écart : produits isolés, pharmacien prévenu, décision tracée. La feuille montre aussi la durée des coupures."],
                ['secteur' => "Officine en France", 'probleme' => "Situation type : une réponse à un avis négatif sur Google, rédigée vite avec un assistant d'IA, cite le produit que la patiente n'a pas obtenu.", 'solution' => "Des réponses types neutres validées par le titulaire, aucune réponse générée publiée sans relecture, et la règle écrite : ne jamais confirmer qu'une personne est cliente, ni évoquer un produit. L'équipe revoit aussi l'usage du dossier pharmaceutique et de l'ordonnance numérique au comptoir."],
                ['secteur' => "Deux officines d'un même propriétaire, à Libreville", 'probleme' => "Situation type : chaque officine manque de produits que l'autre a en surstock, et les transferts entre elles se font par téléphone, sans écriture.", 'solution' => "Une base commune ou deux bases qui partagent les mêmes références, des transferts enregistrés comme des mouvements de stock avec leur lot, et un tableau hebdomadaire des produits dormants d'un côté et demandés de l'autre."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels chiffres situent l'enjeu des médicaments falsifiés et de l'officine numérique ?",
            'items' => [
                ['valeur' => "1 sur 10", 'libelle' => "Au moins un médicament sur dix est de qualité inférieure ou falsifié dans les pays à revenu faible ou intermédiaire, selon la fiche de l'OMS du 3 décembre 2024", 'source' => "Organisation mondiale de la santé", 'url' => 'https://www.who.int/news-room/fact-sheets/detail/substandard-and-falsified-medical-products'],
                ['valeur' => "30,5 milliards de dollars", 'libelle' => "Dépense annuelle estimée des pays pour des produits médicaux de qualité inférieure ou falsifiés, selon la même fiche de l'OMS", 'source' => "Organisation mondiale de la santé", 'url' => 'https://www.who.int/news-room/fact-sheets/detail/substandard-and-falsified-medical-products'],
                ['valeur' => "Environ la moitié", 'libelle' => "Part des médicaments vendus sur Internet qui seraient falsifiés, selon une estimation de l'OMS reprise par l'Ordre national des pharmaciens en France (page lue le 5 octobre 2026)", 'source' => "Ordre national des pharmaciens", 'url' => 'https://www.ordre.pharmacien.fr/je-suis/patient-grand-public/les-sites-habilites-de-vente-en-ligne-de-medicaments'],
                ['valeur' => "15 minutes", 'libelle' => "Délai maximal de transmission des rappels et retraits de lots aux pharmacies de ville par le service DP-Rappels du dossier pharmaceutique, en France", 'source' => "Ordre national des pharmaciens", 'url' => 'https://www.ordre.pharmacien.fr/le-dossier-pharmaceutique/les-services-du-dp2'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quels outils une officine utilise-t-elle, et que coûtent-ils ?",
            'legende' => "Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, dans la devise affichée. Aucun outil n'est à acheter pour suivre la formation, qui se déroule sur les logiciels déjà en service à l'officine.",
            'entetes' => ['Outil ou système', 'Usage à l\'officine', 'Coût ou condition relevés'],
            'lignes'  => [
                ["Logiciel de gestion d'officine de l'éditeur local ou international", "Ventes, tiers payant, stock, commandes aux grossistes, historique des délivrances", "Licence et maintenance sur devis de l'éditeur ; la formation porte sur les écrans en service, sans changer de logiciel"],
                ["Odoo, applications Inventaire, Achats et Point de vente", "Stock par lot avec dates d'expiration, de retrait et d'alerte, sortie par date de péremption la plus proche (FEFO), commandes fournisseurs, caisse", "Une application gratuite ; Standard à 19,90 € par utilisateur et par mois en paiement annuel les 12 premiers mois, puis 24,90 € ; Odoo 20.0 est la dernière version"],
                ["Dolibarr, module Lot / Série", "Lot ou numéro de série obligatoire à chaque mouvement de stock, date limite de vente et date limite de consommation propres à chaque lot", "Logiciel libre, sans licence ; hébergement, paramétrage et adaptation au circuit d'une officine à prévoir"],
                ["Excel ou Google Sheets", "Relevé des températures, suivi des produits à date courte, échéancier des retours aux grossistes, planning de garde", "Déjà présent sur la plupart des postes ; utile en appoint du logiciel, jamais comme stock parallèle"],
                ["Lecteur de codes à deux dimensions (Data Matrix)", "Lire le code produit, le lot, la date de péremption et, en Europe, le numéro de série d'une boîte à la réception et au comptoir", "Matériel à choisir avec l'éditeur du logiciel, pour qu'il remplisse les bons champs"],
                ["WhatsApp Business (application) et plateforme WhatsApp Business (API)", "Disponibilité d'un produit, heure de retrait, horaires de garde, accusé de réception d'une ordonnance", "Application gratuite ; pour l'API, 1 000 messages de service gratuits par mois et par numéro depuis le 1er octobre 2026, facturés au-delà"],
                ["Portails des autorités du médicament", "Déclarer une rupture ou un effet indésirable, consulter les répertoires de produits autorisés, recevoir les alertes", "Accès en ligne sur le site de l'autorité du pays (ABMed au Bénin, par exemple) ; en France, le dossier pharmaceutique est opéré par l'Ordre"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Lots et dates de péremption : que faut-il régler dans le logiciel avant de former l'équipe ?",
            'paragraphes' => [
                "Le premier réglage décide de tout le reste : chaque produit est-il suivi par lot ? Dans Odoo, la documentation de l'application Inventaire demande d'activer deux options, les lots et numéros de série puis les dates d'expiration, avant de configurer chaque article. Quatre dates deviennent alors disponibles : la date d'expiration, la date de consommation optimale, la date de retrait du stock et la date d'alerte. Dans Dolibarr, le module Lot / Série, livré en standard, refuse tout mouvement de stock sans numéro de lot dès que l'article l'exige, et garde pour chaque lot sa date limite de vente et sa date limite de consommation.",
                "Le deuxième réglage concerne l'ordre de sortie. La règle de la date de péremption la plus proche, appelée FEFO, fait proposer d'abord le lot qui expire le plus tôt. Odoo la propose comme stratégie de retrait. Elle ne sert à rien si le rangement physique la contredit : un préparateur qui pose les boîtes neuves devant les anciennes défait en une minute ce que le logiciel calcule. La formation lie donc le réglage à un geste, dans le tiroir et sur l'étagère, montré sur place.",
                "Vient ensuite la question des délais. Une date d'alerte à quinze jours ne laisse plus le temps d'un retour au grossiste ; une alerte à six mois noie l'équipe sous des listes que personne ne lit. Le pharmacien titulaire fixe les délais par famille de produits, selon les conditions de reprise de ses fournisseurs, et désigne la personne qui lit la liste chaque semaine. Une alerte qui n'a pas de destinataire nommé n'existe pas.",
                "Le dernier réglage porte sur les produits qui ne doivent plus être vendus : périmés, abîmés, rappelés ou d'origine douteuse. Ils quittent le stock vendable pour un emplacement de quarantaine, dans le logiciel comme dans la réserve, et y restent jusqu'au retour ou à la destruction. Au Bénin, la loi n° 2021-03 prévoit que les médicaments inutilisables sont détruits par la structure compétente, selon des modalités fixées par arrêté : l'officine garde la trace de chaque sortie, du lot et de la quantité jusqu'au document de destruction.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Commandes, ruptures et rappels de lots : comment l'outil aide-t-il sans décider à la place du pharmacien ?",
            'paragraphes' => [
                "Une proposition de commande se calcule à partir des ventes passées, du stock présent et d'un seuil. Elle a deux défauts connus : elle ignore ce qui va arriver, et elle reproduit les erreurs du passé, puisqu'un produit en rupture pendant trois semaines semble ne plus se vendre. La personne chargée des achats relit donc chaque proposition avec trois questions : le stock affiché est-il juste, la période de référence est-elle normale, que sait l'équipe que le logiciel ignore ? Les corrections sont notées, pour ajuster les seuils au lieu de les corriger chaque soir.",
                "La traçabilité des fournisseurs compte autant que celle des produits. Au Bénin, la loi n° 2021-03 réserve l'approvisionnement des officines aux grossistes-répartiteurs, sauf dérogation de l'autorité de régulation. Chaque entrée en stock s'appuie donc sur un bon de livraison d'un fournisseur autorisé, saisi avec son lot. Un lot proposé hors de ce circuit, à un prix trop beau, par un démarcheur ou sur une messagerie, n'entre pas : l'OMS rappelle que les produits de qualité inférieure ou falsifiés circulent souvent par les marchés informels et les ventes en ligne non autorisées.",
                "Les ruptures se traitent en trois temps. Au comptoir, on ne promet pas une date que le grossiste n'a pas donnée, et l'on oriente vers le pharmacien dès qu'un remplacement se pose. Dans le logiciel, la demande non servie est notée, pour mesurer la rupture plutôt que la deviner. Auprès de l'autorité, la déclaration se fait quand le pays l'a prévue : l'ABMed propose au Bénin un formulaire en ligne qui distingue le pharmacien titulaire, le pharmacien assistant et l'auxiliaire, et demande le grossiste chez qui la rupture a été constatée.",
                "Le rappel de lot est le test le plus sévère d'un système de traçabilité. En France, le service DP-Rappels du dossier pharmaceutique transmet les rappels et retraits de lots aux pharmacies de ville en quinze minutes au plus, et le pharmacien doit retirer aussitôt les produits concernés de la vente. Encore faut-il retrouver les boîtes : une officine qui saisit ses lots à la réception les localise en quelques minutes ; une officine qui ne les saisit pas fouille ses tiroirs. La formation organise un exercice de rappel fictif chronométré.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Ordonnances, comptoir et messagerie : où passe la frontière du numérique ?",
            'paragraphes' => [
                "L'ordonnance change de support plus vite que les habitudes. En France, l'ordonnance numérique porte un code QR qui véhicule un numéro unique de prescription ; selon l'Assurance Maladie, dont la page a été mise à jour le 14 août 2026, toutes les officines disposaient en juin 2026 d'un logiciel compatible, et le patient doit encore présenter l'exemplaire papier en attendant le déploiement complet. En Afrique de l'Ouest, l'ordonnance arrive souvent en photo sur WhatsApp, envoyée par un proche pour savoir si le produit est disponible avant de se déplacer.",
                "Ces photos sont des données de santé, et le téléphone qui les reçoit devient une partie du dossier de l'officine. La règle enseignée tient en quelques gestes : un numéro professionnel au nom de l'officine, installé sur un appareil qui reste au comptoir et se verrouille ; des réponses limitées à la disponibilité, au prix et à l'heure de retrait ; aucune explication sur la façon de prendre un traitement par écrit, sans le pharmacien ; des conversations et des images supprimées une fois la demande servie, selon une durée décidée par le titulaire.",
                "Au comptoir, le secret se joue aussi dans l'espace. Le code français de déontologie demande des locaux et des moyens techniques qui assurent la sécurité des usagers et le respect du secret professionnel. Un écran lisible depuis la file d'attente, une session restée ouverte au nom d'un collègue, un ticket imprimé qui traîne sur la caisse ou une question posée à voix haute sur un traitement exposent le patient. La formation fait reprendre ces gestes poste par poste, avec l'équipe, dans l'officine.",
                "Reste la place de l'IA. Elle peut aider le pharmacien à rédiger la procédure de réception, la fiche de poste d'un nouvel auxiliaire, le message d'annonce des horaires de garde ou une réclamation à un fournisseur, à partir de textes qui ne contiennent aucun patient. Pour toute information de santé remise au public, le pharmacien rédige ou valide lui-même le contenu à partir des sources officielles, et l'assistant ne sert qu'à la mise en forme. La méthode générale de ces usages relève de la <a href=\"/formations/ia-ethique-conformite\">formation IA, éthique et conformité des données</a> ; cette page l'applique à l'officine.",
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment l'équipe installe-t-elle un suivi des péremptions qui tient dans la durée ?",
            'items' => [
                ['titre' => "Choisir les familles de produits à suivre en premier", 'duree' => "Avant la formation", 'texte' => "Le pharmacien titulaire retient les familles où les pertes coûtent le plus ou présentent le plus de risques : produits chers, produits de la chaîne du froid, produits à rotation lente. Le reste suivra, une famille à la fois."],
                ['titre' => "Régler le suivi par lot dans le logiciel", 'duree' => "Une demi-journée", 'texte' => "Activation du suivi par lot et des dates de péremption sur les familles choisies, avec l'éditeur du logiciel ou l'intégrateur si un paramétrage est nécessaire. La formation montre les écrans ; elle ne remplace pas le prestataire du logiciel."],
                ['titre' => "Saisir les lots en stock lors d'un premier comptage", 'duree' => "Une à deux semaines", 'texte' => "Un rayon par jour, en dehors des heures d'affluence : chaque boîte est comptée et son lot saisi. Les produits déjà périmés trouvés pendant ce comptage partent aussitôt en quarantaine."],
                ['titre' => "Saisir le lot à chaque réception", 'duree' => "Dès le premier jour", 'texte' => "Le réceptionnaire lit le lot et la date sur la boîte, ou les scanne si le lecteur et le logiciel le permettent, avant de valider le bon de livraison. Une réception validée sans lot est une réception à refaire."],
                ['titre' => "Ranger selon la date la plus proche", 'duree' => "À chaque mise en rayon", 'texte' => "Les boîtes qui expirent le plus tôt passent devant, en tiroir comme en réserve. Un contrôle ponctuel, chaque semaine, vérifie que le rangement suit la règle."],
                ['titre' => "Lire la liste des produits à date courte", 'duree' => "Chaque semaine", 'texte' => "La personne désignée lit la liste, propose un retour au grossiste, une mise en avant ou une quarantaine, et le pharmacien décide. Les décisions sont notées dans le logiciel ou dans un registre."],
                ['titre' => "Mesurer chaque mois les pertes évitées", 'duree' => "Chaque mois", 'texte' => "Valeur des produits retournés à temps, valeur des produits détruits, nombre de boîtes trouvées périmées en rayon. Quand ce dernier chiffre tombe à zéro plusieurs mois de suite, une nouvelle famille de produits entre dans le suivi."],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Quel est le programme type pour une équipe d'officine, demi-journée par demi-journée ?",
        ],
        [
            'type'  => 'points',
            'titre' => "Comment la formation s'organise-t-elle dans une officine qui ne ferme pas ?",
            'intro' => "Une pharmacie reste ouverte, assure des gardes et ne peut pas vider son comptoir pendant deux jours. La session se découpe donc autour de l'activité, et chaque demi-journée part d'un objet réel de l'officine.",
            'items' => [
                ['titre' => "Des groupes qui laissent le comptoir servi", 'texte' => "L'équipe est répartie en deux groupes qui suivent les mêmes demi-journées à des moments différents, pour que le comptoir reste tenu. Huit participants au plus par groupe, et la demi-journée de pilotage réunit seulement les pharmaciens."],
                ['titre' => "Des horaires choisis par le titulaire", 'texte' => "Matinées avant l'ouverture, après-midi creux, jour de fermeture hebdomadaire ou semaines sans garde : le calendrier se fixe au cadrage, et les demi-journées peuvent s'étaler sur un mois."],
                ['titre' => "Le logiciel réel, avec des patients fictifs", 'texte' => "Les exercices se font sur les écrans en service, avec une base de démonstration quand l'éditeur en fournit une, ou sur des données préparées sans aucun patient réel. Aucune ordonnance de patient ne sert de support."],
                ['titre' => "La réserve et le comptoir comme salle de cours", 'texte' => "Les gestes se montrent là où ils se font : réception d'une caisse du grossiste, rangement d'un tiroir, comptage d'un rayon, lecture d'un code sur une boîte, poste du comptoir vu depuis la file d'attente."],
                ['titre' => "Des supports remis en fichiers modifiables", 'texte' => "Procédure de réception, fiche de rappel de lot, modèle de relevé des températures, réponses types pour la messagerie et les avis en ligne, charte numérique de l'officine, et une attestation de fin de formation par participant."],
                ['titre' => "Un suivi à un mois, puis des questions par écrit", 'texte' => "La séance de suivi part des alertes et des commandes du mois. Entre-temps, les questions sur les outils passent par courriel ou par WhatsApp, dans les conditions prévues au devis, sans jamais y joindre de donnée de patient."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quel format choisir selon la taille de l'officine et son calendrier ?",
            'legende' => "Le contenu suit le format ; la règle des données fictives s'applique partout.",
            'entetes' => ['Format', 'Pour quelle officine', 'Rythme habituel'],
            'lignes'  => [
                ["Intra, dans l'officine", "Une équipe de quatre à quinze personnes qui veut reprendre tout son circuit, de la réception au comptoir", "Cinq demi-journées réparties sur deux à quatre semaines, puis la séance de suivi"],
                ["Atelier stock et péremptions", "Une officine qui perd des produits par péremption ou qui prépare un changement de logiciel", "Deux demi-journées sur place, centrées sur les lots, le rangement et les alertes"],
                ["Atelier comptoir et données de santé", "Une équipe qui reçoit beaucoup d'ordonnances par messagerie ou qui gère des avis en ligne", "Une demi-journée par groupe, avec rédaction des réponses types"],
                ["À distance", "Une officine éloignée, ou un pharmacien qui veut d'abord cadrer le projet seul", "Six à huit séances de deux heures, avec partage d'écran sur le logiciel de l'officine"],
                ["Hybride, pour plusieurs officines", "Un propriétaire de plusieurs officines, un groupement ou un réseau de pharmacies", "Séances communes à distance sur les règles et les outils, ateliers pratiques dans chaque officine"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Combien coûte la formation d'une équipe d'officine ?",
            'intro'      => "Aucun montant n'est publié sur cette page : la formation est chiffrée sur devis. Le premier échange, le cadrage et le devis sont gratuits, avec une réponse sous 24 heures. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces, selon l'échéancier inscrit au devis.",
            'items'      => [
                ['offre' => "Parcours officine complet", 'prix' => 'Sur devis', 'inclus' => ["Cinq demi-journées, dont une réservée aux pharmaciens", "Exercices sur le logiciel de l'officine, avec des données fictives", "Procédures, réponses types et charte numérique remises en fichiers", "Séance de suivi à distance à un mois"]],
                ['offre' => "Atelier stock et péremptions", 'prix' => 'Sur devis', 'inclus' => ["Réglages à vérifier dans le logiciel", "Gestes de réception et de rangement montrés sur place", "Exercice de rappel de lot chronométré"]],
                ['offre' => "Atelier comptoir et données de santé", 'prix' => 'Sur devis', 'inclus' => ["Règles d'usage de la messagerie de l'officine", "Réponses types aux demandes et aux avis en ligne", "Gestes de confidentialité poste par poste"]],
            ],
            'variations' => [
                "Le nombre de groupes nécessaires pour que le comptoir reste servi pendant la formation.",
                "Le logiciel de gestion en service et la préparation d'une base d'exercice sans patient réel.",
                "Le lieu : officine à Cotonou, ailleurs au Bénin, dans un autre pays ou à distance ; les déplacements sont chiffrés à part.",
                "Le nombre d'officines concernées pour un propriétaire ou un réseau.",
                "Les documents demandés en plus : programme détaillé, feuilles d'émargement, attestations nominatives.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Quels financements peuvent couvrir la formation d'une équipe d'officine ?",
            'paragraphes' => [
                "En Afrique francophone, une officine est une entreprise employeuse comme une autre devant les fonds de formation continue, sous réserve des conditions propres à chacun. Le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a>, en Côte d'Ivoire, accepte le plan de formation de toute entreprise qui justifie du paiement régulier des deux taxes dont il vit. Le <a href=\"https://www.3fpt.sn/\">3FPT</a> finance au Sénégal la formation du personnel des entreprises. Au Bénin, le FODEFCA fonctionne selon des statuts approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>. Chaque fonds fixe ses règles : la demande se prépare avant la session, jamais après.",
                "En France, les salariés des officines relèvent de l'opérateur de compétences des entreprises de proximité, l'<a href=\"https://www.opcoep.fr/branches-professionnelles\">OPCO EP</a>, qui compte la pharmacie d'officine parmi ses branches. Mais <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que les fonds publics et mutualisés exigent depuis le 1er janvier 2022 un prestataire certifié Qualiopi, ce que Richard SALANON n'est pas. Les pharmaciens ont en outre une obligation de développement professionnel continu, suivie par l'<a href=\"https://www.agencedpc.fr/professionnel/\">Agence nationale du DPC</a> ; Richard n'est pas un organisme de DPC, et sa session ne compte pas pour cette obligation.",
                "Le budget se construit donc sans financement extérieur, quitte à déposer ensuite une demande. Le programme détaillé, les feuilles d'émargement et une attestation par participant sont remis dans tous les cas, pour toute démarche que l'officine voudrait engager auprès de son fonds. Aucune prise en charge n'est promise sur cette page : la décision appartient au fonds, et la question se pose par écrit, devis joint.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs les officines commettent-elles en s'équipant, et comment les éviter ?",
            'intro' => "Ces erreurs se retrouvent dans les petites officines de quartier comme dans les grandes pharmacies de centre-ville. Chacune a une parade simple, mise en place avant la fin de la session.",
            'items' => [
                ['titre' => "Un logiciel qui connaît les quantités, mais pas les lots", 'texte' => "Sans lot ni date saisis à la réception, aucune alerte de péremption ne fonctionne et aucun rappel ne se traite vite. On active le suivi par lot sur une première famille de produits, puis on étend."],
                ['titre' => "Un stock parallèle dans un cahier ou un tableur", 'texte' => "Le tableur sert d'appoint, pour les températures ou les retours en attente, jamais de second stock. Deux sources de vérité finissent toujours par se contredire, et c'est la mauvaise que l'on consulte un jour de garde. La bonne tenue des classeurs d'appoint se travaille dans la <a href=\"/formations/excel-google-sheets\">formation Excel et Google Sheets pour la gestion</a>."],
                ['titre' => "La commande proposée validée sans lecture", 'texte' => "Un clic sur « tout commander » reproduit les ruptures passées et gonfle les surstocks. La proposition se relit chaque soir, et les corrections récurrentes deviennent de nouveaux seuils."],
                ['titre' => "Un seul identifiant pour tout le comptoir", 'texte' => "Impossible alors de savoir qui a vendu, annulé ou modifié une délivrance, alors que le titulaire répond des actes de son équipe. Chaque membre a sa session, avec des droits qui suivent ses attributions écrites, et les comptes des partants sont fermés le jour même."],
                ['titre' => "Le téléphone personnel comme ligne de l'officine", 'texte' => "Les ordonnances et les échanges avec les patients partent avec le salarié qui quitte l'officine. Le numéro est au nom de la pharmacie, et l'appareil reste au comptoir. Les réflexes face aux faux messages et aux vols de compte se travaillent dans la <a href=\"/formations/cybersecurite-employes\">formation cybersécurité pour les employés</a>."],
                ['titre' => "Une réponse générée publiée sans relecture", 'texte' => "Un assistant d'IA qui rédige une réponse à un avis ou à un message peut citer un produit, deviner un traitement ou promettre une disponibilité. Rien ne part au nom de l'officine sans relecture par une personne désignée."],
                ['titre' => "Former le comptoir et oublier la réserve", 'texte' => "La qualité du stock se décide à la réception et au rangement. Le réceptionnaire et la personne chargée des commandes sont formés en priorité, avec des gestes montrés sur leurs caisses et leurs tiroirs. La prise en main complète d'un logiciel de gestion poste par poste relève de la <a href=\"/formations/odoo-utilisateurs\">formation Odoo pour vos équipes</a> quand l'officine travaille sur Odoo."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue choisir selon le poste dans l'officine ?",
            'legende' => "Chaque fiche détaille sa formation ; cette page indique seulement ce qu'elle apporte à une officine.",
            'entetes' => ['Formation', 'Ce qu\'elle apporte à l\'officine', 'Pour qui'],
            'lignes'  => [
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', "Prendre en main poste par poste les achats, le stock, l'inventaire et la caisse quand l'officine gère son stock dans Odoo", "Responsables des achats, réceptionnaires, caissiers"],
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', "Tenir des classeurs d'appoint fiables : relevés de températures, retours en attente, planning de garde, suivi des marges", "Pharmaciens titulaires, assistants administratifs"],
                ['<a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a>', "Savoir ce qu'un assistant d'IA peut recevoir, ce qu'il faut vérifier et ce que la loi interdit, au-delà de l'officine", "Pharmaciens, référents de la protection des données"],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', "Repérer l'hameçonnage, protéger les comptes du logiciel et de la messagerie, réagir après un clic douteux", "Toute l'équipe, comptoir compris"],
                ['<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>', "Suivre le cycle complet dans Dolibarr, de la commande fournisseur au règlement, avec les lots", "Officines ou dépôts qui travaillent sur Dolibarr"],
                ['<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>', "Organiser le numéro professionnel, les réponses rapides et les étiquettes, pour les produits hors médicaments", "Responsables de la parapharmacie et de la relation client"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Marché parallèle, électricité, langues : que change le contexte local pour une officine ?",
            'paragraphes' => [
                "En Afrique de l'Ouest et du Centre, l'officine travaille à côté d'un marché parallèle du médicament, sur les étals, dans les marchés et désormais sur les réseaux sociaux. La loi béninoise n° 2021-03 interdit toute distribution de médicaments sur la voie publique, dans les foires ou les marchés, et punit de cinq à dix ans d'emprisonnement la vente de médicaments falsifiés. Pour l'équipe, la traçabilité devient un argument : une officine capable de dire d'où vient chaque boîte, et de le montrer, se distingue nettement du vendeur de rue.",
                "L'électricité et la connexion décident de l'architecture. Un logiciel entièrement en ligne s'arrête avec la box internet, alors que le comptoir doit continuer à servir les patients. La formation fait vérifier ce qui fonctionne hors connexion, comment la caisse reprend après une coupure, où se trouvent les sauvegardes et comment protéger le réfrigérateur des produits de la chaîne du froid. Ces questions se règlent avec l'éditeur du logiciel ; l'équipe, elle, apprend la procédure de secours et la teste.",
                "Les langues comptent aussi. Une partie des patients s'exprime en fon, en wolof, en dioula, en mooré ou en lingala, et une réponse écrite sur une messagerie n'atteint pas toujours son destinataire. Les échanges de santé restent donc oraux, avec le pharmacien. À l'échelle du continent, le traité portant création de l'Agence africaine du médicament, adopté par l'Union africaine le 11 février 2019, vise à rapprocher les régulations nationales ; en attendant, chaque officine lit d'abord les textes de son pays et les publications de son autorité, ABMed au Bénin, AIRP en Côte d'Ivoire, ARP au Sénégal.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi confier la formation de votre officine à Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard peut former des pharmaciens et des équipes d'officine : le parcours décrit sur cette page est conçu pour eux, à partir du trajet réel d'une boîte, de la caisse du grossiste au comptoir. Il n'est pas pharmacien, n'exerce aucun acte pharmaceutique et ne donne aucun conseil de santé. Il apporte ce qu'il pratique chaque jour : le paramétrage et l'usage des logiciels de gestion comme Odoo et Dolibarr, les tableurs, les messageries professionnelles, les assistants d'IA et les automatisations. Les règles du métier, elles, se lisent dans les textes de votre pays et auprès de votre ordre, que la formation cite sans jamais les remplacer.",
                "Il construit aussi ce type d'outils : il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Formé à " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il travaille dans le numérique depuis " . $ans . " ans, compte plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes formées tous publics confondus et a travaillé dans " . count((array) fait('pays_travailles')) . " pays d'Afrique, d'Europe et d'Amérique du Nord. Il n'est certifié par aucun éditeur, ne cite aucun client et ne promet aucun résultat chiffré.",
                "Son parcours est présenté sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>, et le déroulement commun de ses sessions sur la page <a href=\"/services/formation-en-entreprise\">formation en entreprise</a>. Le <a href=\"/formations/\">catalogue des formations</a> et le domaine <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a> présentent les parcours voisins, et le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo et Dolibarr</a> aide à choisir un logiciel de gestion quand l'officine en change.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant de former votre équipe d'officine ?",
            'texte' => "Saisissez le lot et la date de péremption à chaque réception, sinon aucune alerte et aucun rappel ne fonctionnent. Rangez selon la date la plus proche et donnez à chaque liste d'alerte un lecteur nommé. Relisez chaque proposition de commande au lieu de la valider d'un clic. Traitez les photos d'ordonnances comme des données de santé, sur un numéro et un appareil de l'officine. Et laissez le conseil, l'analyse de l'ordonnance et tout choix de médicament au pharmacien : l'IA écrit des procédures, jamais des réponses de santé.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Vos péremptions, vos commandes ou vos messages de patients vous échappent-ils ?",
            'texte'  => "Décrivez votre officine, la taille de l'équipe, le logiciel de gestion en service et ce qui vous coûte le plus aujourd'hui. Vous recevez une réponse sous 24 heures, puis une proposition de cadrage gratuit et un devis détaillé, construit autour des heures d'ouverture et des gardes de l'officine.",
            'bouton' => ['url' => '/contact', 'texte' => 'Former mon équipe d\'officine'],
        ],
    ],

    'faq' => [
        ['q' => "La formation apprend-elle à utiliser l'IA pour conseiller les patients ?", 'r' => "Non. Le conseil pharmaceutique, l'analyse de l'ordonnance, le choix d'un médicament sans prescription et la vérification des interactions restent l'affaire du pharmacien. La formation montre où l'IA peut aider à l'écrit administratif de l'officine, sur des textes sans patient, et pourquoi elle n'a pas sa place au comptoir."],
        ['q' => "Faut-il que le formateur soit pharmacien ?", 'r' => "Non, parce que la formation ne porte pas sur la pharmacie mais sur les outils de l'officine : logiciel de gestion, lots, commandes, messagerie, sécurité, IA. Richard SALANON n'est pas pharmacien et le dit. Les règles professionnelles sont citées à partir des textes officiels, et le pharmacien titulaire reste juge de leur application dans son officine."],
        ['q' => "Notre logiciel de gestion d'officine n'est ni Odoo ni Dolibarr. La formation est-elle utile ?", 'r' => "Oui. La méthode (lots saisis à la réception, rangement par date, alertes lues par une personne nommée, propositions de commande relues, sessions nominatives) vaut pour tous les logiciels. Les exercices se font sur vos propres écrans. Si un réglage dépend de l'éditeur, la formation vous aide à formuler la demande à lui adresser."],
        ['q' => "Peut-on répondre aux patients sur WhatsApp ?", 'r' => "Oui, pour la disponibilité d'un produit, le prix, l'heure de retrait ou les horaires de garde, depuis un numéro au nom de l'officine. Les questions de santé sont renvoyées vers un échange avec le pharmacien. Les photos d'ordonnances sont des données de santé : elles restent sur un appareil de l'officine et sont supprimées une fois la demande servie."],
        ['q' => "Les données de nos patients sont-elles utilisées pendant la formation ?", 'r' => "Non. Les exercices se font sur une base de démonstration ou sur des données préparées sans aucun patient réel. Le formateur observe les écrans et les gestes, pas les dossiers. Si un écran réel doit être montré, le pharmacien choisit ce qui s'affiche."],
        ['q' => "Combien de temps faut-il pour que le suivi des péremptions fonctionne ?", 'r' => "Les réglages se font en une demi-journée. La saisie des lots déjà en stock prend une à deux semaines, un rayon par jour. L'objectif est qu'après un ou deux mois de lecture hebdomadaire des alertes, les boîtes périmées trouvées en rayon deviennent rares, à condition que la réception et le rangement suivent la règle."],
        ['q' => "La formation couvre-t-elle la vente en ligne de médicaments ?", 'r' => "Elle rappelle le cadre et ses limites : en France, seuls les médicaments non soumis à prescription obligatoire peuvent être vendus en ligne, depuis le site déclaré de l'officine. Au Bénin, la loi interdit la vente de médicaments hors de l'officine. La création d'une boutique en ligne relève d'un autre parcours, et seulement pour ce que la loi du pays permet."],
        ['q' => "Qui, dans l'équipe, doit suivre la formation ?", 'r' => "Toute l'équipe pour les demi-journées sur le stock et le comptoir, en deux groupes pour que l'officine reste ouverte. La demi-journée sur l'IA, les règles écrites et le pilotage est réservée aux pharmaciens titulaires et adjoints. Le réceptionnaire et la personne chargée des commandes sont formés en priorité."],
        ['q' => "La session compte-t-elle pour le développement professionnel continu des pharmaciens en France ?", 'r' => "Non. Le DPC passe par des organismes enregistrés pour cela, et Richard SALANON n'en est pas un ; il n'est pas non plus certifié Qualiopi. La session n'est pas présentée comme une action de DPC, et son financement par un opérateur de compétences n'est pas promis."],
        ['q' => "Combien coûte la formation ?", 'r' => "Le prix est fixé sur devis, selon le nombre de groupes, le logiciel en service, le lieu et le nombre d'officines. Le premier échange, le cadrage et le devis sont gratuits. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces."],
    ],

    'sources' => [
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2021-03 du 1er février 2021 portant organisation des activités pharmaceutiques en République du Bénin", 'url' => 'https://sgg.gouv.bj/doc/loi-2021-03/', 'date' => '2026-10-05'],
        ['titre' => "Agence béninoise du médicament et des autres produits de santé (ABMed), présentation et missions", 'url' => 'https://abmed.bj/presentation', 'date' => '2026-10-05'],
        ['titre' => "ABMed, formulaire de déclaration d'une rupture de stock", 'url' => 'https://abmed.bj/rupture-stock', 'date' => '2026-10-05'],
        ['titre' => "ABMed, déclaration d'un effet indésirable", 'url' => 'https://abmed.bj/effet-indesirable', 'date' => '2026-10-05'],
        ['titre' => "Ordre national des pharmaciens, le code de déontologie commenté (décret n° 2026-156 du 3 mars 2026)", 'url' => 'https://www.ordre.pharmacien.fr/l-ordre/la-deontologie/le-code-de-deontologie-commente', 'date' => '2026-10-05'],
        ['titre' => "Ordre national des pharmaciens, le nouveau code de déontologie, entré en vigueur le 6 mars 2026", 'url' => 'https://www.ordre.pharmacien.fr/l-ordre/la-deontologie/le-code-de-deontologie', 'date' => '2026-10-05'],
        ['titre' => "Ordre national des pharmaciens, les services du dossier pharmaceutique (DP-Patient, DP-Rappels, DP-Alertes)", 'url' => 'https://www.ordre.pharmacien.fr/le-dossier-pharmaceutique/les-services-du-dp2', 'date' => '2026-10-05'],
        ['titre' => "Ordre national des pharmaciens, les sites habilités de vente en ligne de médicaments", 'url' => 'https://www.ordre.pharmacien.fr/je-suis/patient-grand-public/les-sites-habilites-de-vente-en-ligne-de-medicaments', 'date' => '2026-10-05'],
        ['titre' => "EUR-Lex, règlement délégué (UE) 2016/161 relatif aux dispositifs de sécurité figurant sur l'emballage des médicaments à usage humain", 'url' => 'https://eur-lex.europa.eu/legal-content/FR/TXT/?uri=CELEX:32016R0161', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, médicaments falsifiés (directive 2011/62/UE, dispositifs de sécurité, logo commun)", 'url' => 'https://health.ec.europa.eu/medicinal-products/falsified-medicines_en', 'date' => '2026-10-05'],
        ['titre' => "Organisation mondiale de la santé, produits médicaux de qualité inférieure et falsifiés, fiche du 3 décembre 2024", 'url' => 'https://www.who.int/news-room/fact-sheets/detail/substandard-and-falsified-medical-products', 'date' => '2026-10-05'],
        ['titre' => "Organisation mondiale de la santé, premier rapport mondial sur l'IA en santé et six principes directeurs (28 juin 2021)", 'url' => 'https://www.who.int/news/item/28-06-2021-who-issues-first-global-report-on-ai-in-health-and-six-guiding-principles-for-its-design-and-use', 'date' => '2026-10-05'],
        ['titre' => "Assurance Maladie, l'ordonnance numérique pour les pharmaciens (page mise à jour le 14 août 2026)", 'url' => 'https://www.ameli.fr/pharmacien/exercice-professionnel/delivrance-produits-sante/regles-delivrance-prise-charge/ordonnance-numerique', 'date' => '2026-10-05'],
        ['titre' => "Odoo, documentation de l'application Inventaire : dates d'expiration", 'url' => 'https://www.odoo.com/documentation/19.0/applications/inventory_and_mrp/inventory/product_management/product_tracking/expiration_dates.html', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, module Lot / Série", 'url' => 'https://wiki.dolibarr.org/index.php?title=Module_Lot_/_S%C3%A9rie', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "Union africaine, traité portant création de l'Agence africaine du médicament", 'url' => 'https://au.int/en/treaties/treaty-establishment-african-medicines-agency', 'date' => '2026-10-05'],
        ['titre' => "Autorité ivoirienne de régulation pharmaceutique (AIRP)", 'url' => 'https://www.airp.ci/', 'date' => '2026-10-05'],
        ['titre' => "Agence sénégalaise de réglementation pharmaceutique (ARP)", 'url' => 'https://www.arp.sn/', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "OPCO EP, branches professionnelles couvertes (pharmacie d'officine, répartition pharmaceutique)", 'url' => 'https://www.opcoep.fr/branches-professionnelles', 'date' => '2026-10-05'],
        ['titre' => "Agence nationale du DPC, le développement professionnel continu des professionnels de santé", 'url' => 'https://www.agencedpc.fr/professionnel/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, financement de la formation professionnelle et technique", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['odoo-utilisateurs', 'excel-google-sheets', 'ia-ethique-conformite', 'cybersecurite-employes', 'dolibarr-utilisateurs', 'whatsapp-business'],
        'services'    => ['formation-en-entreprise', 'integration-odoo', 'integration-dolibarr'],
        'comparatifs' => ['odoo-vs-dolibarr', 'chatgpt-vs-claude-vs-gemini'],
    ],
];
