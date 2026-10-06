<?php
// ============================================================
// data/metiers/btp.php · Page « formations par métier » pour les
// entreprises du bâtiment et des travaux publics (vague 1C, univers
// « Technique et terrain », non prioritaire, statut F : Richard a déjà
// formé ce public).
// Angle propre : l'entreprise de BTP et son chantier, pas la conception
// (bureaux d'études, plans, notes de calcul : page architectes-ingenieurs).
// Chaîne traitée : métré, bibliothèque d'ouvrages et devis, journal de
// chantier, photos, comptes rendus et réserves, sous-traitants, sécurité,
// matériaux et heures par chantier, attachements, situations de travaux,
// garanties et retenues, facturation. Publics : dirigeants, conducteurs de
// travaux, chefs de chantier, métreurs, assistants, responsables sécurité.
// Sources lues le 05/10/2026 : loi béninoise n° 2020-26 portant code des
// marchés publics (articles 91, 92, 95, 96, 101, PDF du SGG),
// gouv.bj (factures normalisées, entretien du 27/02/2020), OIT (convention
// n° 167, articles 8 et 12), loi n° 75-1334 sur la sous-traitance
// (articles 3, 6 et 14), Code du travail numérique (L4532-2,
// L4532-9, L8222-1, D8222-5), Urssaf (attestation de vigilance),
// Service-Public (carte BTP), impots.gouv.fr (facturation électronique),
// ameli.fr (chiffres clés du BTP, 03/03/2025), CNIL (vidéosurveillance au
// travail), documentation d'Odoo 20.0 (facturation par jalons), wiki de
// Dolibarr (factures de situation), Constructys. Faits repris des fiches
// déjà vérifiées : FDFP, FODEFCA, 3FPT, France Compétences, article 4 du
// règlement européen sur l'IA, quota WhatsApp de Meta. Richard n'exerce
// pas ces métiers et n'est certifié par aucun éditeur.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => "Formation IA et numérique pour les entreprises du BTP : du métré à la situation de travaux, des chantiers suivis sur des données justes, sans laisser un outil engager l'entreprise à la place du conducteur de travaux",
    'title'   => "Formation IA et numérique pour le BTP | Richard SALANON",
    'meta'    => "Former conducteurs de travaux, chefs de chantier et métreurs à l'IA et aux outils : devis, métrés, photos, sécurité, situations de travaux. Sur devis.",
    'en_bref' => "Cette page s'adresse aux entreprises du bâtiment et des travaux publics : dirigeants, conducteurs de travaux, chefs de chantier, métreurs, assistants administratifs et responsables sécurité qui veulent tenir devis, journaux de chantier, photos, dossiers de sous-traitants et situations de travaux avec des outils numériques et des assistants d'intelligence artificielle. Elle explique ce que ces outils changent sur un chantier, ce qu'ils ne doivent jamais décider, et propose un parcours de deux jours découpé en quatre demi-journées, suivi d'un retour à distance. Les séances ont lieu en intra, en inter, à distance ou en formule hybride, et le prix est établi sur devis.",
    'publie'  => '2026-10-22',
    'maj'     => '2026-10-05',

    'univers'     => 'Technique et terrain',
    'prioritaire' => false,

    'programme' => [
        [
            'titre'  => "Jour 1, matin : du métré au devis, une bibliothèque d'ouvrages et des quantités qu'on sait justifier",
            'duree'  => '3 h 30',
            'points' => [
                "Reprendre un devis récent de l'entreprise et remonter jusqu'à son métré : d'où vient chaque quantité, qui l'a calculée, à partir de quel relevé ou de quelle pièce du dossier.",
                "Construire dans le tableur une bibliothèque d'ouvrages : unité, déboursé sec (matériaux, main-d'œuvre, matériel), frais de chantier, frais généraux, aléas, marge et prix de vente.",
                "Faire lire par un assistant d'IA un bordereau des prix ou un détail quantitatif estimatif reçu en PDF, en extraire les lignes, puis recompter soi-même les totaux.",
                "Mettre trois offres de fournisseurs de ciment, d'acier ou de granulats sur la même base (quantité, transport, délai, durée de validité du prix) avec l'aide d'un assistant, sans lui laisser le choix.",
                "Ce qu'un assistant ne sait pas faire : mesurer, deviner une cote illisible, arbitrer entre deux lectures d'une clause du cahier des charges.",
                "Exercice : chiffrer un petit ouvrage (dallage, clôture, fosse septique) et défendre chaque ligne devant le groupe.",
            ],
        ],
        [
            'titre'  => "Jour 1, après-midi : le chantier depuis le téléphone, avec journal, photos, comptes rendus et réserves",
            'duree'  => '3 h 30',
            'points' => [
                "Le journal de chantier minimal : date, météo, effectifs présents par entreprise, livraisons reçues, travaux réalisés, incidents, visites.",
                "Une règle de prise de vue : avant, pendant, avant fermeture (ferraillage avant coulage, réseaux avant rebouchage, étanchéité avant protection), après ; un nom de fichier qui dit où et quand.",
                "Transformer la note vocale d'un chef de chantier en compte rendu structuré avec un assistant d'IA, puis relire tout ce qui engage : dates, quantités, responsabilités.",
                "La liste des réserves : description, photo, entreprise concernée, délai de levée, preuve de levée.",
                "Le groupe WhatsApp du chantier : ce qu'il remplace mal, et comment en sortir les décisions vers un registre que tout le monde peut retrouver.",
                "Exercice : une semaine de chantier simulée, soixante messages en vrac à transformer en journal tenu et en compte rendu prêt à diffuser.",
            ],
        ],
        [
            'titre'  => "Jour 2, matin : sous-traitants, sécurité, matériaux et heures, des dossiers à jour sans tableau oublié",
            'duree'  => '3 h 30',
            'points' => [
                "Le dossier de chaque sous-traitant : contrat, acceptation par le maître d'ouvrage quand elle est exigée, attestations, assurances et dates d'échéance, avec une alerte avant chaque expiration.",
                "Tracer simplement l'accueil sécurité des nouveaux arrivants, les causeries et les vérifications d'équipements : qui, quand, sur quel sujet, avec quelle signature.",
                "Ce qu'un outil peut rappeler (échéance, visite, contrôle périodique) et ce qu'il ne décide jamais (reprise du travail après un danger, accès à un poste à risque).",
                "Les sorties de magasin affectées à chaque chantier dans Odoo, Dolibarr ou le tableur, et la comparaison entre consommations et quantités du métré.",
                "Le pointage des heures par chantier et par tâche, pour savoir enfin ce qu'un ouvrage a réellement coûté.",
                "Exercice : monter le tableau de suivi d'un chantier fictif à trois sous-traitants, avec deux documents expirés à repérer.",
            ],
        ],
        [
            'titre'  => "Jour 2, après-midi : attachements, situations de travaux, garanties et facturation, puis évaluation",
            'duree'  => '3 h 30',
            'points' => [
                "La situation cumulée : quantités exécutées par poste, avancement, montant cumulé, déduction des situations précédentes, remboursement d'avance, retenue de garantie.",
                "Préparer l'attachement à partir du journal et des photos, le faire valider de façon contradictoire, et seulement ensuite facturer.",
                "La facture dans le bon cadre : facture normalisée au Bénin, facture électronique en France selon la taille de l'entreprise.",
                "Suivre cautions, garanties et retenues jusqu'à leur libération, avec les dates de réception qui les déclenchent.",
                "Les messages au maître d'ouvrage ou au client particulier : avancement, demande de réception, relance de paiement, toujours relus avant envoi.",
                "Évaluation : chaque participant établit la troisième situation d'un chantier simulé et la présente comme il le ferait en réunion de chantier.",
            ],
        ],
        [
            'titre'  => "Un mois après, à distance : retour sur les chantiers en cours",
            'duree'  => '2 heures',
            'points' => [
                "Les journaux et les dossiers photos réellement tenus depuis la formation, et ceux qui ont décroché.",
                "Une situation de travaux réelle relue ensemble, de l'attachement à la facture.",
                "Les règles à simplifier pour qu'elles tiennent quand trois chantiers démarrent la même semaine.",
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Public', 'v' => "Dirigeants d'entreprises du BTP, conducteurs de travaux, chefs de chantier, métreurs, assistants administratifs, responsables sécurité"],
        ['l' => 'Durée', 'v' => "2 jours en 4 demi-journées, puis un retour à distance d'environ deux heures"],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, groupes de 10 personnes au plus'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => "Qu'est-ce que l'IA, la digitalisation et l'automatisation changent pour une entreprise de BTP et ses chantiers ?",
            'paragraphes' => [
                "Sur un chantier, l'information circule d'abord par la voix et par le téléphone. Le chef de chantier appelle pour une livraison de fer qui n'arrive pas, le conducteur de travaux reçoit des photos dans un groupe WhatsApp, le métreur reprend un devis vieux de six mois pour chiffrer un ouvrage voisin, l'assistante cherche l'attestation d'un sous-traitant que le client réclame avant de payer. Tout existe quelque part, mais rarement au même endroit. C'est exactement là que la digitalisation, l'automatisation et l'intelligence artificielle font gagner du temps, à condition de partir des gestes du métier plutôt que d'un logiciel.",
                "Le premier changement porte sur la chaîne qui va du métré à la facture. Quand la quantité mesurée, le prix de la bibliothèque d'ouvrages, la ligne du devis, l'avancement constaté et la situation de travaux reposent sur les mêmes données, une erreur se voit tôt. Quand chacune est ressaisie dans un fichier différent, elle se découvre au moment du décompte, devant le maître d'ouvrage. Un tableur bien construit suffit souvent pour commencer ; un logiciel de gestion comme Odoo ou Dolibarr prend le relais quand plusieurs chantiers et plusieurs personnes travaillent en même temps.",
                "Le deuxième changement se joue sur le terrain. Le téléphone du chef de chantier est devenu l'outil de constat le plus utilisé : photos datées, notes vocales, plans consultés sur l'écran, messages aux sous-traitants. Un assistant d'IA transforme une note vocale de trois minutes en compte rendu structuré, résume une semaine de messages, rédige la relance d'une réserve non levée ou traduit la fiche technique d'un produit importé. Il le fait vite et proprement, et il peut inventer une quantité ou une date avec le même aplomb. La formation apprend donc à s'en servir avec une relecture systématique de tout ce qui engage l'entreprise.",
                "Le troisième changement concerne les dossiers qu'on ne voit pas depuis le chantier : sous-traitants, sécurité, garanties, facturation. Les administrations dématérialisent les factures, les maîtres d'ouvrage exigent des pièces à jour, les cautions et les retenues ont des dates de libération qu'il faut suivre. Un outil rappelle une échéance sans jamais l'oublier, ce qu'un tableau tenu à la main ne garantit pas. Richard SALANON n'est ni entrepreneur de BTP ni conducteur de travaux : il forme à l'usage des outils, sur les devis, les chantiers et les logiciels que l'équipe utilise déjà.",
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Sur un chantier, quel travail confier à un outil, et quelle décision laisser au conducteur de travaux ou au chef de chantier ?",
            'legende' => "Partage proposé en début de formation, puis ajusté avec la direction de chaque entreprise. La dernière colonne indique le contrôle à mettre en place dès qu'un outil touche à l'étape.",
            'entetes' => ['Étape du chantier', "Travail confié à l'outil", 'Décision qui reste humaine', 'Contrôle à prévoir'],
            'lignes'  => [
                ["Réponse à un appel d'offres", "Lecture du dossier de consultation, liste des pièces à fournir, extraction du bordereau des prix et du détail quantitatif", "Le choix de répondre, le prix remis, les réserves et les variantes", "Une liste des pièces cochée par une seconde personne avant le dépôt"],
                ['Métré', "Calcul des quantités à partir des dimensions saisies, contrôle des unités, comparaison avec un chantier semblable", "La mesure sur le relevé ou sur l'ouvrage, l'interprétation d'une cote douteuse", "Chaque quantité reliée à sa source : relevé, pièce écrite, mesure contradictoire"],
                ['Devis', "Assemblage des ouvrages de la bibliothèque, calcul des prix, mise en page, conditions générales", "La marge, les aléas, les exclusions et la durée de validité de l'offre", "Un devis au-dessus d'un seuil fixé par la direction est relu avant envoi"],
                ['Achats et approvisionnement', "Comparaison des offres de fournisseurs, bons de commande, relances de livraison", "Le choix du fournisseur et l'acceptation d'un produit de substitution", "Coordonnées bancaires des fournisseurs verrouillées, toute modification rappelée au numéro connu"],
                ['Journal et compte rendu de chantier', "Mise en forme des notes vocales et des messages, résumé de la semaine, liste des actions", "Ce qui est écrit sur les retards, les responsabilités et les travaux supplémentaires", "Relecture et signature du conducteur de travaux avant toute diffusion"],
                ['Photos', "Classement par chantier, par zone et par date, rapprochement avec le journal", "Le choix des prises de vue qui serviront de preuve", "Prises de vue horodatées, avant fermeture des ouvrages cachés, sans visage inutile"],
                ['Sous-traitants', "Tenue du dossier, rappel des échéances d'attestations et d'assurances", "L'agrément d'un sous-traitant, son entrée sur le chantier, son paiement", "Aucun accès au chantier tant que le dossier n'est pas complet"],
                ['Sécurité', "Rappel des vérifications périodiques, registre des accueils et des causeries", "L'arrêt d'un poste, la reprise après un incident, l'autorisation d'un travail à risque", "Un responsable nommé par chantier, joignable, qui décide sur place"],
                ['Situations de travaux', "Calcul du cumul, des déductions, de l'avance remboursée et de la retenue de garantie", "Les quantités présentées et la négociation de l'attachement", "Une situation n'est émise qu'après validation de l'attachement"],
                ['Réception et garanties', "Liste des réserves, suivi des levées, alertes de libération des cautions et des retenues", "La demande de réception, l'acceptation ou la contestation d'une réserve", "Chaque levée de réserve prouvée par une photo et une date"],
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Que ne doit jamais faire un outil sur un chantier ou dans les bureaux d'une entreprise de BTP, et quels textes le disent ?",
            'intro' => "Les limites qui suivent s'appuient sur des textes lus dans leur version publiée par les autorités qui les ont adoptés. Ils sont cités pour ce qu'ils demandent aux entreprises ; leur application à un chantier précis relève du juriste de l'entreprise, de son conseil ou de l'administration compétente, pas du formateur.",
            'items' => [
                ['titre' => "Inventer ou arrondir les quantités d'une situation", 'texte' => "Au Bénin, l'article 96 de la loi n° 2020-26 du 29 septembre 2020 portant code des marchés publics distingue le prix forfaitaire, qui rémunère un ensemble défini, et le prix unitaire, appliqué aux quantités réellement livrées ou exécutées, celles du marché n'étant que prévisionnelles. Sur un marché à prix unitaires, la quantité constatée fait donc la facture. Un assistant d'IA peut calculer un cumul ; il ne peut ni mesurer un ouvrage, ni compléter une quantité manquante, ni lisser un écart entre le métré et le constat."],
                ['titre' => "Faire entrer un sous-traitant que le contrat ne permet pas", 'texte' => "L'article 101 du même code n'autorise la sous-traitance d'un marché public que si le dossier d'appel à concurrence la prévoit, impose de déclarer la nature des prestations, l'identité, la qualification et le montant prévu pour chaque sous-traitant, et plafonne l'ensemble des parts sous-traitées à 40 % du montant du marché. Le titulaire reste seul responsable de l'exécution. Une plateforme qui « trouve » un artisan disponible en deux clics ne dispense d'aucune de ces étapes."],
                ['titre' => "Oublier l'acceptation du sous-traitant par le maître d'ouvrage en France", 'texte' => "La loi n° 75-1334 du 31 décembre 1975 relative à la sous-traitance oblige l'entrepreneur à faire accepter chaque sous-traitant et agréer ses conditions de paiement par le maître de l'ouvrage, à la conclusion et pendant toute la durée du contrat (article 3). Sur un marché public, le sous-traitant direct accepté est payé directement pour sa part (article 6) ; ailleurs, les sommes qui lui sont dues sont garanties par une caution, sauf délégation de paiement (article 14). Un outil peut suivre ces pièces, pas les remplacer."],
                ['titre' => "Laisser une alerte automatique tenir lieu de vigilance", 'texte' => "En France, l'article L8222-1 du code du travail impose de vérifier, à la conclusion d'un contrat puis périodiquement, que le cocontractant est en règle. L'article D8222-5 précise que l'attestation de l'organisme de recouvrement, datant de moins de six mois, se demande à la signature puis tous les six mois, et que son authenticité se vérifie. Selon l'Urssaf, l'obligation vaut pour tout contrat d'au moins 5 000 euros hors taxes. Le rappel automatique aide ; la vérification du code de sécurité sur le site de l'Urssaf reste un geste humain."],
                ['titre' => "Remplacer la coordination de la sécurité par un tableau partagé", 'texte' => "La convention n° 167 de l'Organisation internationale du travail sur la sécurité et la santé dans la construction, adoptée le 20 juin 1988 et applicable dans les États qui l'ont ratifiée, prévoit que, lorsque plusieurs employeurs travaillent en même temps sur un chantier, la coordination des mesures de sécurité et de santé incombe à l'entrepreneur principal ou à celui qui contrôle effectivement le chantier (article 8). En France, l'article L4532-2 du code du travail organise une coordination pour tout chantier où interviennent plusieurs entreprises, et l'article L4532-9 demande à chacune, sous-traitants compris, d'établir avant le début des travaux un plan particulier de sécurité et de protection de la santé."],
                ['titre' => "Décider qu'un poste dangereux peut reprendre", 'texte' => "Selon l'article 12 de la même convention, le travailleur doit pouvoir s'éloigner d'un danger quand il a de bonnes raisons de croire à un péril imminent et grave, en informant aussitôt son supérieur, et l'employeur doit, face à un péril imminent, arrêter le travail et faire évacuer si nécessaire. Ni un assistant d'IA, ni une application de check-list, ni un message vocal envoyé depuis le bureau ne remplacent la personne présente qui voit l'échafaudage, la tranchée ou la charge suspendue. L'outil enregistre la décision ; il ne la prend pas."],
                ['titre' => "Filmer les compagnons à leur poste de travail", 'texte' => "Une caméra contre le vol de matériaux ou d'outillage se justifie sur un chantier. En France, la CNIL admet les caméras sur les accès, les issues et les zones de stockage, mais pas sur les salariés à leur poste de travail, sauf circonstances particulières, ni dans les zones de pause ; les images se gardent en principe un mois au plus. Au Bénin, l'article 383 de la loi n° 2017-20 portant code du numérique exige des données collectées pour des finalités déterminées, non excessives et conservées le temps nécessaire. Une caméra dite intelligente qui compterait les pauses d'un ouvrier ne répond pas à ces exigences."],
                ['titre' => "Pointer les ouvriers par empreinte digitale sans se poser de question", 'texte' => "Les pointeuses biométriques se vendent comme une solution simple contre les heures fictives. L'article 394 du même code range pourtant parmi les données sensibles, dont le traitement est interdit hors des cas que le texte énumère, les données biométriques utilisées pour identifier une personne de manière unique, ainsi que les données de santé. Avant d'installer un tel appareil ou d'enregistrer les arrêts consécutifs à un accident, l'entreprise vérifie auprès de son conseil sur quelle exception elle s'appuie ; un badge ou une feuille signée suffit souvent."],
                ['titre' => "Envoyer les pièces du personnel vers un service d'IA hébergé à l'étranger", 'texte' => "Copies de pièces d'identité des ouvriers, listes d'effectifs, photos où l'on reconnaît des visages, rapports d'accident : ces documents finissent parfois collés dans un assistant d'IA gratuit pour « faire un tableau ». L'article 391 de la loi n° 2017-20 ne permet le transfert de données personnelles vers un État tiers que si l'Autorité constate un niveau de protection équivalent. La règle enseignée est simple : ces pièces ne sortent pas des outils administrés par l'entreprise, et ce qui doit passer par un assistant est d'abord anonymisé."],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => "Pourquoi une quantité tirée d'un plan en PDF ou d'une photo par un assistant d'IA reste-t-elle une estimation ?",
            'texte' => "Parce que l'assistant lit une image, pas un ouvrage. Il peut confondre une cote avec un numéro de repère, ignorer l'échelle d'un plan réduit à l'impression ou compter deux fois une fenêtre dessinée sur deux vues, et rendre malgré tout un total net, sans signe de doute. Sur un prix forfaitaire, la quantité oubliée au devis pèse en principe sur l'entreprise ; sur des prix unitaires, elle fausse l'offre et le planning avant d'être corrigée au constat. La formation fait utiliser l'IA pour vérifier un métré existant, signaler les incohérences et comparer avec un chantier semblable, jamais pour produire seule le chiffre que l'entreprise remettra.",
        ],
        [
            'type'  => 'cas',
            'titre' => "À quoi ressemblent ces usages dans une entreprise de gros œuvre, de voirie ou de second œuvre, de Cotonou à Lyon ?",
            'items' => [
                ['secteur' => "Entreprise de gros œuvre, à Cotonou", 'probleme' => "Les devis sont rédigés en recopiant d'anciens devis ; le prix du ciment et du fer change d'un mois à l'autre, et la marge fond sans que personne ne s'en aperçoive avant la fin du chantier. Les photos dorment dans les téléphones des chefs d'équipe.", 'solution' => "Une bibliothèque d'ouvrages dans le tableur, avec la date de mise à jour de chaque prix, des devis assemblés à partir d'elle, un dossier photo partagé par chantier et un point hebdomadaire illustré de six photos choisies, envoyé au client qui fait construire depuis l'étranger."],
                ['secteur' => "Entreprise de voirie et de réseaux, à Abidjan, sur des marchés publics", 'probleme' => "Les situations mensuelles sont contestées parce que les attachements sont griffonnés sur des carnets ; les cautions et les retenues de garantie se suivent de mémoire, et une libération oubliée immobilise de la trésorerie pendant des mois.", 'solution' => "Un attachement numéroté par section de voie, photographié et signé des deux parties, une situation cumulée calculée dans un classeur protégé, et un échéancier des garanties qui prévient l'assistante trente jours avant chaque date utile."],
                ['secteur' => "Entreprise d'électricité et de plomberie, à Dakar, sous-traitante d'une entreprise générale", 'probleme' => "Les paiements arrivent en retard parce qu'il manque toujours une pièce au dossier ; un litige éclate sur des gaines encastrées que personne n'a photographiées avant le rebouchage.", 'solution' => "Un dossier de sous-traitance complet, mis à jour à chaque échéance et transmis dès la première demande, une règle de photo obligatoire avant toute fermeture d'ouvrage, et un pointage des heures par lot pour justifier les travaux supplémentaires."],
                ['secteur' => "Entreprise générale, à Lomé, avec six chantiers et un magasin central", 'probleme' => "Les sorties de matériaux sont notées sur des bons volants ; à la fin du mois, les consommations ne correspondent à aucun métré et chacun accuse le chantier voisin.", 'solution' => "Des bons de sortie saisis dans Dolibarr et affectés à chaque chantier, un inventaire mensuel du magasin, une comparaison entre consommations et quantités du métré, et un seuil d'écart fixé par la direction au-delà duquel le conducteur de travaux s'explique."],
                ['secteur' => "Constructeur de maisons individuelles, à Libreville", 'probleme' => "Des messages automatiques annoncent aux clients une date de fin de gros œuvre calculée par le logiciel ; après trois semaines de pluie, la date est dépassée et les clients refusent de régler l'appel de fonds suivant.", 'solution' => "Les messages automatiques ne signalent plus qu'un jalon atteint et constaté ; toute date à venir est rédigée et relue par le conducteur de travaux, et chaque appel de fonds s'appuie sur un jalon validé et sur ses photos."],
                ['secteur' => "Entreprise de rénovation, à Lyon, qui travaille avec une dizaine d'artisans", 'probleme' => "Les attestations des sous-traitants se demandent tous les six mois et se perdent dans les courriels ; l'entreprise doit aussi pouvoir recevoir des factures électroniques depuis le 1er septembre 2026.", 'solution' => "Un registre des sous-traitants avec les dates d'attestation, d'assurance et d'acceptation par le client, une alerte un mois avant chaque échéance, la vérification de chaque code de sécurité sur le site de l'Urssaf, et une plateforme de réception des factures choisie avec le comptable."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Avec quels outils une entreprise de BTP travaille-t-elle, et que faut-il en savoir avant de s'y former ?",
            'legende' => "Informations lues le 5 octobre 2026 sur les pages des éditeurs et des administrations. Les abonnements restent au nom de l'entreprise ; la formation s'appuie sur les outils déjà en place et n'en impose aucun.",
            'entetes' => ['Outil', 'Usage sur un chantier ou au bureau', 'Point à connaître', 'Formation liée'],
            'lignes'  => [
                ['Tableur (Excel, Google Sheets)', "Métrés, bibliothèque d'ouvrages, situations cumulées, échéancier des garanties", "Suffisant tant qu'une seule personne modifie le fichier ; formules protégées et totaux de contrôle indispensables", '<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>'],
                ['Odoo (Ventes, Projet, Achats, Inventaire, Feuilles de temps)', "Devis, achats par chantier, heures pointées, facturation par jalons", "Selon la documentation d'Odoo 20.0, atteindre un jalon ne crée pas la facture : il met à jour la part facturable, et la facture se crée ensuite ; l'offre Standard coûte 19,90 euros par utilisateur et par mois en paiement annuel la première année, puis 24,90 euros", '<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>'],
                ['Dolibarr (Projets, Propositions, Factures, Stocks)', "Devis, factures de situation, stock et sorties par projet", "Les factures de situation portent un avancement par ligne ; selon le wiki de Dolibarr, un projet financé en 2022 visait à corriger des calculs de TVA erronés constatés en version 16.0.3 : tester sur la version installée avant de facturer", '<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>'],
                ['WhatsApp et WhatsApp Business', "Groupes de chantier, photos, échanges avec les sous-traitants et les clients", "L'application suffit aux échanges courants ; reliée à un logiciel par la plateforme de Meta, chaque numéro professionnel dispose depuis le 1er octobre 2026 de 1 000 messages de service gratuits par mois, facturés au-delà", '<a href="/formations/whatsapp-business">WhatsApp Business pour vendre</a>'],
                ['Stockage partagé (Google Drive, OneDrive, SharePoint)', "Dossiers par chantier : photos, plans d'exécution reçus, comptes rendus, attestations", "Droits d'accès par chantier, comptes retirés le jour du départ d'un salarié, sauvegarde hors du téléphone", '<a href="/formations/microsoft-365-google-workspace">Microsoft 365 et Google Workspace avancés</a>'],
                ['Outils collaboratifs (Trello, Notion, Teams, Asana)', "Listes de réserves, actions issues des réunions de chantier, planning des équipes", "Un seul outil par usage, sinon les réserves se dispersent entre trois applications", '<a href="/formations/outils-collaboratifs">Outils collaboratifs</a>'],
                ["Assistants d'IA (ChatGPT, Claude, Gemini, Copilot)", "Comptes rendus, synthèses de messages, traductions de fiches techniques, relecture d'un métré", "Compte professionnel administré, aucune pièce d'identité ni donnée de santé, relecture de toute quantité ou date produite", '<a href="/formations/ia-en-entreprise">IA en entreprise</a>'],
                ['Facturation normalisée au Bénin', "Factures de situation et factures de travaux émises aux clients", "Selon l'entretien du directeur général des impôts publié le 27 février 2020 sur le portail du gouvernement, la facture normalisée porte le numéro de la machine, une signature et un code électronique, et un logiciel de facturation doit être validé par la DGI avant usage ; les règles en vigueur se confirment auprès de la DGI", '<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>'],
                ['Tableaux de bord (Power BI, Looker Studio)', "Marge par chantier, avancement comparé au planning, situations en attente de paiement", "Utiles seulement quand les données de base (heures, sorties, situations) sont saisies chaque semaine", '<a href="/formations/power-bi-looker-studio">Tableaux de bord Power BI et Looker Studio</a>'],
            ],
        ],
        [
            'type'  => 'programme',
            'titre' => "Comment se déroulent les quatre demi-journées du parcours BTP, et que fait-on à chacune ?",
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles demi-journées choisir selon la fonction occupée dans l'entreprise de BTP ?",
            'legende' => "Les demi-journées se suivent ensemble ou séparément. Les choix ci-dessous sont des points de départ, arrêtés au premier échange avec la direction.",
            'entetes' => ["Fonction dans l'entreprise", 'Séquences recommandées', 'Ce que la personne saura faire en sortant'],
            'lignes'  => [
                ['Dirigeant ou gérant', 'Jour 1 matin, jour 2 après-midi', "Fixer les prix de la bibliothèque d'ouvrages, lire la marge réelle d'un chantier, arrêter les règles d'usage de l'IA et des messages automatiques"],
                ['Conducteur de travaux', 'Les quatre', "Tenir la chaîne complète du métré à la situation, relire ce que produisent les outils, préparer un attachement défendable"],
                ["Chef de chantier ou chef d'équipe", 'Jour 1 après-midi, jour 2 matin', "Tenir le journal depuis le téléphone, photographier ce qui servira de preuve, suivre les réserves et la présence des sous-traitants"],
                ["Métreur ou économiste de l'entreprise", 'Jour 1 matin, jour 2 après-midi', "Relier chaque quantité à sa source, contrôler un métré avec l'aide d'un assistant, préparer les quantités des situations"],
                ['Assistant administratif ou comptable', 'Jour 2 matin et après-midi', "Tenir les dossiers des sous-traitants, établir les situations et les factures, suivre cautions et retenues jusqu'à leur libération"],
                ['Responsable sécurité', 'Jour 1 après-midi, jour 2 matin', "Tracer accueils, causeries et vérifications, organiser les rappels sans déléguer aucune décision d'arrêt ou de reprise"],
                ['Magasinier ou acheteur', 'Jour 1 matin, jour 2 matin', "Comparer des offres de fournisseurs sur une base commune, affecter chaque sortie de matériaux à un chantier"],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => "Comment la formation se prépare-t-elle à partir des chantiers de l'entreprise ?",
            'items' => [
                ['titre' => 'Premier échange', 'duree' => 'Réponse sous 24 heures', 'texte' => "Vous décrivez votre activité (bâtiment, routes, réseaux, second œuvre), la part de marchés publics et privés, le nombre de chantiers ouverts, les logiciels en place et ce qui vous coûte aujourd'hui le plus de temps ou d'argent. Cet échange ne vous coûte rien, pas plus que le cadrage et le devis qui le suivent."],
                ['titre' => 'Deux chantiers témoins', 'duree' => 'Deux semaines avant', 'texte' => "On retient un chantier terminé et un chantier en cours. Pour chacun, l'entreprise réunit un devis et son métré, une semaine de messages et de photos, une situation de travaux et le dossier d'un sous-traitant. Les exercices partent de ces pièces."],
                ['titre' => 'Anonymisation', 'duree' => 'Une semaine avant', 'texte' => "L'entreprise retire elle-même les noms des clients et des ouvriers, les visages reconnaissables et, si elle le souhaite, ses prix. Le formateur ne reçoit aucun accès bancaire, fiscal ou aux plateformes des maîtres d'ouvrage."],
                ['titre' => 'Règles validées par la direction', 'duree' => 'Avant la session', 'texte' => "Qui signe une situation, quels assistants d'IA sont autorisés, où sont rangées les photos, à partir de quel montant un devis est relu : ces règles sont décidées par la direction, puis travaillées en séance."],
                ['titre' => 'Animation', 'duree' => 'Demi-journées de 3 h 30', 'texte' => "En salle, sur les ordinateurs et les téléphones des participants. Si l'entreprise le souhaite, une heure se passe sur un chantier en cours, après l'accueil sécurité et avec les équipements de protection fournis par l'entreprise."],
                ['titre' => 'Supports et suivi', 'duree' => 'En fin de session, puis un mois après', 'texte' => "Bibliothèque d'ouvrages modèle, journal de chantier, règle de prise de vue, liste de contrôle des sous-traitants, modèle de situation cumulée, fiche réflexe sur l'IA et attestation nominative ; puis une séance à distance d'environ deux heures sur les chantiers réels."],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelle formule retenir pour une entreprise de BTP, selon sa taille et la dispersion de ses chantiers ?",
            'legende' => "Les formules se combinent, par exemple une séance de cadrage avec la direction suivie de demi-journées par fonction, en salle ou à distance.",
            'entetes' => ['Formule', 'Durée', 'Participants', 'Pour quelle entreprise'],
            'lignes'  => [
                ['Séance de cadrage avec la direction', 'Deux heures', 'Dirigeant, conducteur de travaux principal, comptable', "Arrêter les règles d'usage de l'IA, des photos et des messages avant de former les équipes"],
                ['Parcours complet en intra', '2 jours en 4 demi-journées', '10 personnes au plus', "Entreprise qui mène plusieurs chantiers à la fois et veut une méthode commune"],
                ['Demi-journée isolée', '3 h 30', '4 à 10 personnes de la même fonction', "Chefs de chantier avant une saison chargée, assistants avant une série de situations"],
                ['Session inter', '1 ou 2 jours', 'Une à trois personnes par entreprise', "Artisans et petites entreprises ; les exercices portent sur des chantiers fictifs"],
                ['À distance', 'Séances de 2 heures', '8 personnes au plus', "Conducteurs de travaux répartis sur des chantiers éloignés, dans plusieurs villes ou plusieurs pays"],
                ['Hybride', 'Une demi-journée en salle, puis séances à distance', '10 personnes au plus', "Prise en main sur place, puis application aux chantiers de la semaine avec un retour à distance"],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => "Quel budget prévoir pour former une équipe de chantier et de bureau, et de quoi dépend le devis ?",
            'intro'      => "Le site n'affiche aucun montant pour les formations : chaque formule est chiffrée après le premier échange, dans un devis qui détaille ce qu'il couvre. Le règlement se fait par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces. Les licences des logiciels, les abonnements aux assistants d'IA et les frais des plateformes de facturation restent réglés par l'entreprise à leurs éditeurs.",
            'items'      => [
                ['offre' => 'Séance de cadrage', 'prix' => 'Sur devis', 'inclus' => ['Deux heures avec la direction', "Règles écrites pour l'IA, les photos, les messages et la signature des situations", 'Recommandation sur les demi-journées utiles']],
                ['offre' => 'Demi-journée ciblée', 'prix' => 'Sur devis', 'inclus' => ['Métré et devis, chantier au téléphone, sous-traitants et sécurité, ou situations', 'Exercices sur vos chantiers témoins', 'Modèles modifiables et attestation']],
                ['offre' => 'Parcours complet', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', "Bibliothèque d'ouvrages, journal, registre des sous-traitants et modèle de situation construits en séance", 'Évaluation sur un chantier simulé', 'Séance à distance un mois après']],
            ],
            'variations' => [
                "Le nombre de participants et de groupes.",
                "Les demi-journées retenues et leur ordre.",
                "Les outils couverts : tableur, Odoo, Dolibarr, logiciel de devis déjà en place.",
                "Le temps de préparation à partir des chantiers témoins.",
                "Le lieu : vos bureaux, une base de chantier, une autre ville ou un autre pays, ou la distance.",
                "La langue des séances et des supports, français ou anglais.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Qui peut prendre en charge la formation d'une entreprise de BTP, en Afrique francophone ou en France ?",
            'paragraphes' => [
                "Le plus souvent, l'entreprise paie la formation sur son propre budget. Selon le pays, un fonds de formation professionnelle peut en financer une partie, en fonction des cotisations de l'entreprise, de sa taille et parfois du statut du formateur. Cette page ne promet aucune prise en charge. La démarche sûre consiste à adresser au fonds le programme et le devis, puis à attendre sa réponse écrite avant de fixer les dates.",
                "En Côte d'Ivoire, le <a href=\"https://fdfp.ci/plan-de-formation/\">FDFP</a> réserve son plan de formation aux entreprises qui ont acquitté la taxe d'apprentissage et la taxe additionnelle à la formation continue. Au Bénin, le FODEFCA fonctionne selon des statuts approuvés par le <a href=\"https://sgg.gouv.bj/doc/decret-2022-286/\">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href=\"https://www.3fpt.sn/\">3FPT</a> propose un guichet destiné aux salariés des entreprises. Les critères qui portent sur le prestataire et le reste à charge se demandent à chaque fonds, au moment du projet.",
                "En France, l'opérateur de compétences des entreprises du bâtiment et des travaux publics est <a href=\"https://www.constructys.fr/\">Constructys</a>. <a href=\"https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/\">France Compétences</a> rappelle que, depuis le 1er janvier 2022, les fonds publics et mutualisés ne financent que des prestataires certifiés Qualiopi. Richard SALANON ne l'est pas : l'entreprise française finance donc la session elle-même, sauf réponse écrite contraire de son opérateur. Le programme, les feuilles de présence et les attestations sont fournis dans tous les cas ; ils documentent aussi l'effort de maîtrise de l'IA que l'article 4 du règlement européen sur l'IA attend, depuis le 2 février 2025, des entreprises qui utilisent ces systèmes.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Situations de travaux, avances, cautions et retenues : que doit suivre l'outil, et que disent les textes ?",
            'paragraphes' => [
                "Une situation de travaux se calcule en cumul : on part du montant total des travaux exécutés depuis le début du chantier, on déduit ce qui a déjà été facturé dans les situations précédentes, puis le remboursement de l'avance prévu au marché et la retenue de garantie. Travailler en cumul plutôt qu'en différence d'un mois sur l'autre évite qu'une erreur se propage sans bruit. C'est le calcul que la formation fait construire dans le tableur, puis retrouver dans Odoo ou Dolibarr quand l'entreprise les utilise.",
                "Au Bénin, le code des marchés publics fixe plusieurs dates que l'outil doit surveiller. Selon l'article 91 de la loi n° 2020-26, la garantie de bonne exécution ne peut dépasser 5 % du prix de base, se constitue dans les trente jours qui suivent la notification et avant le premier paiement, puis se libère à 90 % après la réception provisoire et pour le solde à la réception définitive. L'article 92 exige une garantie couvrant la totalité des avances, dont les micro, petites et moyennes entreprises sont dispensées pour des avances ne dépassant pas 20 % du marché.",
                "Quand le marché comporte un délai de garantie, l'article 95 du même code fixe à 5 % du montant des paiements la part que l'autorité contractante peut retenir au titre de la retenue de garantie, libérée à l'expiration de ce délai. Réception provisoire, réception définitive, fin du délai de garantie : chacune de ces dates libère de l'argent à l'entreprise, à condition que quelqu'un la demande. Un échéancier tenu dans l'outil, avec une alerte trente jours avant chaque date, transforme un oubli coûteux en simple tâche administrative.",
                "En France, impots.gouv.fr indique que toutes les entreprises doivent pouvoir recevoir des factures électroniques depuis le 1er septembre 2026, que les grandes entreprises et les entreprises de taille intermédiaire doivent aussi les émettre depuis cette date, et que les petites et micro-entreprises ont jusqu'au 1er septembre 2027 pour le faire. Une entreprise de BTP qui émet des situations vérifie donc dès maintenant, avec son comptable et son éditeur, que son logiciel produit des factures dans un format accepté. Pour choisir entre deux logiciels, le <a href=\"/comparatifs/odoo-vs-dolibarr\">comparatif Odoo ou Dolibarr</a> pose les critères utiles.",
            ],
        ],
        [
            'type'  => 'points',
            'titre' => "Quelles erreurs commettent les entreprises de BTP qui s'outillent sans méthode ?",
            'intro' => "Presque toutes viennent de la même cause : l'outil arrive avant la règle. Un logiciel ou un assistant d'IA déployé sans accord sur qui saisit quoi, quand et où, reproduit le désordre du papier, en plus rapide.",
            'items' => [
                ['titre' => "Laisser chacun nommer ses photos à sa façon", 'texte' => "Trois chefs de chantier, trois habitudes, et une photo de ferraillage introuvable le jour où l'expert la demande. Une seule règle pour toute l'entreprise : chantier, zone, date, objet, et un dossier partagé où les photos arrivent le soir même."],
                ['titre' => "Ressaisir le devis dans la situation", 'texte' => "La situation est retapée à partir du devis imprimé, une ligne saute, un prix unitaire change d'une virgule. La situation se construit à partir des lignes du devis signé, dans le même fichier ou le même logiciel, et seules les quantités exécutées évoluent."],
                ['titre' => "Croire le total d'un assistant d'IA", 'texte' => "Un tableau propre, des sous-totaux alignés, et une ligne comptée deux fois. Tout total produit par un assistant se recompte sur la pièce d'origine avant d'entrer dans un devis, une commande ou une situation."],
                ['titre' => "Faire du groupe WhatsApp le seul registre du chantier", 'texte' => "Les décisions sont prises dans le groupe, puis disparaissent sous les photos et les messages vocaux ; quand un salarié quitte l'entreprise, une partie de l'historique part avec son téléphone. Chaque décision qui engage est recopiée dans le journal ou le compte rendu, rangé hors du téléphone."],
                ['titre' => "Oublier de réclamer la libération des garanties", 'texte' => "La réception est prononcée, l'équipe passe au chantier suivant, et la caution reste en place pendant des mois. Les dates de réception et de fin de délai de garantie entrent dans l'échéancier le jour même où elles sont connues."],
                ['titre' => "Payer sur la foi d'un courriel qui annonce un nouveau compte bancaire", 'texte' => "Un faux message de fournisseur de fer ou de location d'engins demande de régler la prochaine facture sur un autre compte. Les coordonnées bancaires des fournisseurs ne se modifient qu'après un appel au numéro déjà connu et une seconde validation par la direction."],
                ['titre' => "Saisir les heures en fin de mois, de mémoire", 'texte' => "Les heures sont réparties à l'estime entre les chantiers, et la marge de chacun devient une fiction. Le pointage se fait chaque jour ou chaque semaine, par chantier et par tâche, même sur une simple feuille photographiée."],
                ['titre' => "Acheter un logiciel de chantier avant d'avoir écrit ses règles", 'texte' => "L'abonnement court, l'équipe n'a jamais décidé qui saisit quoi, et l'outil est abandonné au troisième chantier. Les règles d'abord, testées sur un tableur ; le logiciel ensuite, quand on sait ce qu'on attend de lui."],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => "Quels repères chiffrés et datés une entreprise de BTP doit-elle avoir en tête ?",
            'items' => [
                ['valeur' => '56 pour 1 000', 'libelle' => "Accidents du travail enregistrés pour 1 000 salariés dans le BTP en France, contre environ 34 tous secteurs confondus (page du 3 mars 2025)", 'source' => 'Assurance Maladie, chiffres clés du BTP', 'url' => 'https://www.ameli.fr/entreprise/sante-travail/votre-secteur/batiment-travaux-publics/chiffres-cles'],
                ['valeur' => '48 %', 'libelle' => "Part des accidents du travail du BTP liés à la manutention manuelle, devant les chutes de hauteur et de plain-pied (31 %) et l'outillage à main (15 %)", 'source' => 'Assurance Maladie, chiffres clés du BTP', 'url' => 'https://www.ameli.fr/entreprise/sante-travail/votre-secteur/batiment-travaux-publics/chiffres-cles'],
                ['valeur' => 'Plus de 19 %', 'libelle' => "Part des accidents mortels du travail survenus dans le BTP en France en 2018, pour un secteur qui compte un peu plus de 8 % des salariés du régime général", 'source' => 'Assurance Maladie, chiffres clés du BTP', 'url' => 'https://www.ameli.fr/entreprise/sante-travail/votre-secteur/batiment-travaux-publics/chiffres-cles'],
                ['valeur' => '5 %', 'libelle' => "Plafond de la garantie de bonne exécution et part des paiements retenue au titre de la retenue de garantie sur un marché public au Bénin (articles 91 et 95 de la loi n° 2020-26)", 'source' => 'Secrétariat général du Gouvernement du Bénin', 'url' => 'https://sgg.gouv.bj/doc/loi-2020-26/'],
                ['valeur' => '40 %', 'libelle' => "Part maximale d'un marché public béninois qui peut être sous-traitée, avenants compris (article 101 de la loi n° 2020-26)", 'source' => 'Secrétariat général du Gouvernement du Bénin', 'url' => 'https://sgg.gouv.bj/doc/loi-2020-26/'],
                ['valeur' => '4 000 €', 'libelle' => "Amende encourue par salarié en France quand l'employeur ne déclare pas la carte BTP, portée à 8 000 euros en cas de récidive dans les deux ans (page vérifiée le 6 octobre 2025)", 'source' => 'Service-Public, carte BTP', 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F33599'],
                ['valeur' => '1er septembre 2026', 'libelle' => "Date depuis laquelle toutes les entreprises établies en France doivent pouvoir recevoir des factures électroniques ; l'émission devient obligatoire pour les petites entreprises le 1er septembre 2027", 'source' => 'impots.gouv.fr, facturation électronique', 'url' => 'https://www.impots.gouv.fr/professionnel/je-decouvre-la-facturation-electronique'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => "Quelles formations du catalogue prolongent ce parcours pour une entreprise de BTP ?",
            'legende' => "Chacune de ces fiches a son propre programme. Le parcours BTP en reprend les gestes utiles au chantier ; elles permettent d'aller plus loin sur un outil ou une méthode.",
            'entetes' => ['Formation', 'Apport pour le chantier et le bureau', 'Public prioritaire'],
            'lignes'  => [
                ['<a href="/formations/excel-google-sheets">Excel et Google Sheets pour la gestion</a>', "Métrés, bibliothèques de prix et situations cumulées avec formules protégées et totaux de contrôle", 'Métreurs, conducteurs de travaux, assistants'],
                ['<a href="/formations/odoo-utilisateurs">Odoo pour vos équipes</a>', "Achats, stock, projets, feuilles de temps et facturation par jalons, poste par poste", 'Acheteurs, magasiniers, administration'],
                ['<a href="/formations/dolibarr-utilisateurs">Dolibarr pour vos équipes</a>', "Du devis à la facture de situation et au règlement, avec le stock par projet", 'Petites entreprises, assistants, comptables'],
                ['<a href="/formations/outils-collaboratifs">Outils collaboratifs</a>', "Réserves, actions de réunion de chantier et planning des équipes dans un outil partagé", 'Conducteurs et chefs de chantier'],
                ['<a href="/formations/digitalisation-processus">Digitalisation des processus métiers</a>', "Dessiner le circuit d'une situation ou d'un dossier de sous-traitant avant de l'outiller", 'Direction, responsable administratif'],
                ['<a href="/formations/cybersecurite-employes">Cybersécurité pour les employés</a>', "Faux changements de coordonnées bancaires, téléphones perdus sur chantier, mots de passe partagés", "Toute l'équipe, en premier ceux qui règlent les fournisseurs"],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Réseau, poussière, langues, saisons : que change le terrain, en Afrique de l'Ouest et centrale ou en Europe, pour un chantier qui s'outille ?",
            'paragraphes' => [
                "Un chantier en périphérie d'une ville ou sur une route en construction n'a pas toujours de réseau stable, et le téléphone du chef de chantier vit dans la poussière et au soleil. La formation privilégie donc des gestes qui supportent ces conditions : applications qui fonctionnent hors ligne puis se synchronisent, photos versées au dossier partagé le soir au bureau, batterie de secours dans le véhicule, téléphone de chantier distinct du téléphone personnel quand l'entreprise peut l'équiper. Un outil qui exige une connexion permanente sera abandonné au premier chantier éloigné.",
                "Sur beaucoup de chantiers d'Afrique francophone, les échanges entre compagnons se font dans les langues locales, et le français arrive dans le compte rendu. Les assistants d'IA transcrivent bien le français parlé ; pour les autres langues, la qualité varie fortement et se teste avant toute utilisation. La règle proposée : le chef de chantier dicte en français ce qui engage l'entreprise (quantités, dates, incidents, réserves), et le conducteur de travaux relit le compte rendu avant de le diffuser.",
                "Les saisons pèsent aussi. Une saison des pluies arrête les terrassements et retarde les coulages ; un journal qui note chaque jour la météo et l'activité réelle devient alors la pièce qui justifie un délai supplémentaire. Les photos datées d'un chantier inondé valent plus qu'un long courrier rédigé trois semaines plus tard.",
                "En Europe, la question tient moins au réseau qu'à la densité des obligations. En France, la carte BTP se commande en ligne dès l'embauche, pour une redevance de 9,80 euros par carte selon Service-Public ; les attestations des sous-traitants se renouvellent tous les six mois ; le plan particulier de sécurité précède les travaux ; la facture devient électronique. Une entreprise qui travaille à la fois en Afrique et en Europe applique par défaut la règle la plus exigeante des deux et garde la trace de ses choix.",
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => "Pourquoi former votre entreprise de BTP avec Richard SALANON ?",
            'paragraphes' => [
                fait('phrase_entite'),
                "Richard a déjà formé des professionnels du BTP à ces outils. Il ne construit pas, ne dirige aucun chantier et ne signe aucun métré : il apporte la maîtrise des tableurs, des logiciels de gestion comme Odoo et Dolibarr, des assistants d'IA et des automatisations, et il bâtit chaque exercice sur les devis, les photos et les situations de l'entreprise. Passé par " . fait('formation')['nom'] . " (" . fait('formation')['annee'] . "), il travaille dans le numérique depuis " . $ans . " ans et déclare avoir formé plus de " . rtrim((string) fait('personnes_formees'), '+') . " personnes.",
                "Il a créé <a href=\"https://wapy.pro\">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d'Afrique francophone, et il est co-fondateur d'<a href=\"https://audyxa.com\">Audyxa</a>. Il a travaillé dans " . count((array) fait('pays_travailles')) . " pays, parmi lesquels le Bénin, la Côte d'Ivoire, le Sénégal, le Togo, le Gabon, la France et le Canada. Il n'est certifié par aucun éditeur et ne revend aucune licence. Les questions de technique de construction, de droit des marchés ou de sécurité soulevées en séance sont renvoyées au conducteur de travaux, au juriste ou au coordonnateur compétent.",
                "Son parcours est détaillé sur la page <a href=\"/richard-salanon\">Richard SALANON</a>, et les pays où il intervient sur celle des <a href=\"/zones/\">zones d'intervention</a>. Quand la formation fait apparaître un besoin d'outillage, comme une facturation de situations à paramétrer ou des sorties de stock à relier aux chantiers, il relève d'une mission d'<a href=\"/services/integration-odoo\">intégration Odoo</a>, d'<a href=\"/services/integration-dolibarr\">intégration Dolibarr</a> ou de <a href=\"/services/digitalisation-d-entreprise\">digitalisation d'entreprise</a>. L'histoire d'<a href=\"/histoires/air-canada-chatbot\">Air Canada et de son chatbot</a> rappelle qu'une entreprise répond de ce que disent ses messages automatiques. Toute l'offre figure dans le <a href=\"/formations/\">catalogue des formations</a>, en particulier le domaine <a href=\"/formations/domaine/erp-gestion\">ERP et outils de gestion</a>.",
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => "Que retenir avant d'inscrire une équipe de BTP ?",
            'texte' => "Une quantité se relie toujours à sa source, un devis se construit depuis une bibliothèque d'ouvrages tenue à jour, une photo se prend avant de refermer un ouvrage, une décision qui engage quitte le groupe WhatsApp pour le journal, un sous-traitant n'entre pas sur le chantier sans dossier complet, une situation suit un attachement validé, et chaque garantie a sa date de libération dans l'échéancier. L'outil calcule, classe et rappelle ; le conducteur de travaux mesure, décide et signe.",
        ],
        [
            'type'   => 'cta',
            'titre'  => "Voulez-vous former votre entreprise de BTP à l'IA et aux outils numériques du chantier ?",
            'texte'  => "Décrivez votre activité (bâtiment, routes, réseaux, second œuvre), le nombre de chantiers ouverts, les logiciels utilisés, les fonctions à former et la difficulté que vous voulez régler en premier : vous recevez une réponse sous 24 heures, puis un programme ajusté à vos chantiers et un devis détaillé.",
            'bouton' => ['url' => '/contact', 'texte' => 'Demander une formation pour mon entreprise'],
        ],
    ],

    'faq' => [
        ['q' => "Faut-il être à l'aise avec un ordinateur pour suivre la formation ?", 'r' => "Non. Pour un chef de chantier, savoir prendre une photo, envoyer un message vocal et ouvrir un fichier sur son téléphone suffit. Les groupes sont composés par fonction, et les demi-journées consacrées au métré et aux situations demandent seulement de savoir remplir un tableau simple."],
        ['q' => "Un assistant d'IA peut-il faire nos métrés ou nos devis à notre place ?", 'r' => "Il peut extraire les lignes d'un bordereau, vérifier la cohérence d'un métré, comparer un devis à un chantier semblable et mettre en forme une offre. Il ne mesure rien et peut produire un total faux avec assurance. La quantité remise au client reste celle que le métreur ou le conducteur de travaux a vérifiée et qu'il peut justifier."],
        ['q' => "Faut-il vérifier les quantités d'un détail quantitatif fourni par le maître d'ouvrage ?", 'r' => "Oui, et l'outil y aide. Au Bénin, l'article 96 de la loi n° 2020-26 précise que les prix forfaitaires règlent l'ouvrage quelles que soient les quantités, alors que les prix unitaires s'appliquent aux quantités réellement exécutées. Selon la forme du prix, une quantité mal estimée pèse différemment sur l'entreprise : la formation apprend à repérer les écarts avant de remettre l'offre."],
        ['q' => "Nos équipes travaillent avec WhatsApp : faut-il l'abandonner ?", 'r' => "Non. WhatsApp reste le moyen le plus rapide de joindre une équipe ou un sous-traitant. La formation apprend à en sortir chaque jour ce qui engage l'entreprise, vers le journal, le compte rendu ou la liste des réserves, et à ranger les photos dans un dossier partagé plutôt que dans les téléphones."],
        ['q' => "Peut-on installer des caméras ou une pointeuse biométrique sur nos chantiers ?", 'r' => "Des caméras sur les accès et les zones de stockage se justifient contre le vol ; en France, la CNIL exclut de filmer les salariés à leur poste et limite en principe la conservation à un mois. Au Bénin, la loi n° 2017-20 impose des données limitées à leur finalité (article 383) et range les données biométriques parmi les données sensibles (article 394). Votre conseil tranche ; la formation pose les bonnes questions."],
        ['q' => "La formation remplace-t-elle une formation à la sécurité sur chantier ?", 'r' => "Non. Elle apprend à tracer les accueils, les causeries et les vérifications, et à organiser les rappels avec les outils. Les formations obligatoires à la sécurité, la coordination et les plans de prévention relèvent de personnes et d'organismes compétents en prévention, que la formation ne remplace pas."],
        ['q' => "Quel logiciel choisir : Odoo, Dolibarr ou un logiciel spécialisé pour le BTP ?", 'r' => "La formation ne vend aucun logiciel. Elle aide à poser les critères : nombre de chantiers, situations à produire, stock à suivre, nombre d'utilisateurs, budget, facturation normalisée ou électronique selon le pays. Le comparatif Odoo ou Dolibarr détaille les différences entre ces deux outils ; pour un logiciel spécialisé, on teste d'abord une situation complète sur un chantier réel."],
        ['q' => "Comment produire des situations de travaux dans Odoo ou dans Dolibarr ?", 'r' => "Dans Odoo, la facturation par jalons met à jour la part facturable quand un jalon est atteint, puis la facture se crée à partir de la commande. Dolibarr propose des factures de situation avec un avancement par ligne. Dans les deux cas, on vérifie sur la version installée, avec le comptable, le calcul des taxes, des avances et des retenues avant la première situation réelle."],
        ['q' => "Le formateur viendra-t-il sur nos chantiers ?", 'r' => "Si vous le souhaitez, une heure peut se tenir sur un chantier en cours, après l'accueil sécurité et avec les équipements de protection que fournit l'entreprise. Ce n'est pas indispensable : les exercices fonctionnent avec les pièces des deux chantiers témoins préparées à l'avance."],
        ['q' => "Le formateur aura-t-il accès à nos prix et à nos comptes ?", 'r' => "Il n'a accès qu'à ce que l'entreprise choisit de montrer. Les prix peuvent être modifiés avant la session, les noms retirés, et aucun identifiant bancaire, fiscal ou de plateforme de maître d'ouvrage ne lui est transmis. Les démonstrations sur ces plateformes se font par l'équipe, sur ses propres écrans."],
        ['q' => "Richard SALANON a-t-il déjà formé des professionnels du BTP ?", 'r' => "Oui, Richard a déjà formé des professionnels du BTP à l'usage des outils numériques et de l'IA. Il ne cite aucune entreprise formée, n'exerce pas les métiers du bâtiment ni des travaux publics, et renvoie les questions techniques ou juridiques aux personnes compétentes de l'entreprise."],
        ['q' => "Combien coûte la formation, et comment la régler ?", 'r' => "Le prix est établi sur devis, après un premier échange gratuit. Il dépend du nombre de participants, des demi-journées retenues, des outils couverts, du lieu et du format. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces."],
        ['q' => "Que reçoivent les participants à la fin ?", 'r' => "Une bibliothèque d'ouvrages modèle, un journal de chantier, une règle de prise de vue, une liste de contrôle des sous-traitants, un modèle de situation cumulée, une fiche réflexe sur l'IA et une attestation nominative. Ce n'est ni un diplôme, ni une habilitation de sécurité, ni une certification."],
    ],

    'sources' => [
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2020-26 du 29 septembre 2020 portant code des marchés publics (articles 91, 92, 95, 96 et 101)", 'url' => 'https://sgg.gouv.bj/doc/loi-2020-26/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 383, 391 et 394)", 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => "Gouvernement du Bénin, « Tout savoir sur les factures normalisées au Bénin », entretien avec le directeur général des impôts (27 février 2020)", 'url' => 'https://www.gouv.bj/article/522/tout-savoir-sur-les-factures-normalisees-au-benin', 'date' => '2026-10-05'],
        ['titre' => "Organisation internationale du travail, convention n° 167 sur la sécurité et la santé dans la construction, 1988 (articles 8 et 12)", 'url' => 'https://normlex.ilo.org/dyn/nrmlx_fr/f?p=NORMLEXPUB:12100:0::NO::P12100_ILO_CODE:C167', 'date' => '2026-10-05'],
        ['titre' => "Légifrance, loi n° 75-1334 du 31 décembre 1975 relative à la sous-traitance (articles 3, 6 et 14)", 'url' => 'https://www.legifrance.gouv.fr/loda/id/JORFTEXT000000889241', 'date' => '2026-10-05'],
        ['titre' => "Code du travail numérique, article L4532-2 (coordination de la sécurité sur les chantiers à plusieurs entreprises)", 'url' => 'https://code.travail.gouv.fr/code-du-travail/l4532-2', 'date' => '2026-10-05'],
        ['titre' => "Code du travail numérique, article L4532-9 (plan particulier de sécurité et de protection de la santé)", 'url' => 'https://code.travail.gouv.fr/code-du-travail/l4532-9', 'date' => '2026-10-05'],
        ['titre' => "Code du travail numérique, article L8222-1 (obligation de vigilance du cocontractant)", 'url' => 'https://code.travail.gouv.fr/code-du-travail/l8222-1', 'date' => '2026-10-05'],
        ['titre' => "Code du travail numérique, article D8222-5 (documents à remettre à la conclusion et tous les six mois)", 'url' => 'https://code.travail.gouv.fr/code-du-travail/d8222-5', 'date' => '2026-10-05'],
        ['titre' => "Urssaf, obtenir et vérifier une attestation de vigilance (contrats d'au moins 5 000 euros hors taxes)", 'url' => 'https://www.urssaf.fr/accueil/attestation-vigilance.html', 'date' => '2026-10-05'],
        ['titre' => "Service-Public, carte BTP : carte d'identification professionnelle d'un salarié du BTP (vérifiée le 6 octobre 2025)", 'url' => 'https://entreprendre.service-public.gouv.fr/vosdroits/F33599', 'date' => '2026-10-05'],
        ['titre' => "impots.gouv.fr, je découvre la facturation électronique (calendrier 2026 et 2027)", 'url' => 'https://www.impots.gouv.fr/professionnel/je-decouvre-la-facturation-electronique', 'date' => '2026-10-05'],
        ['titre' => "Assurance Maladie, accidents du travail et maladies professionnelles dans le BTP : chiffres clés (3 mars 2025)", 'url' => 'https://www.ameli.fr/entreprise/sante-travail/votre-secteur/batiment-travaux-publics/chiffres-cles', 'date' => '2026-10-05'],
        ['titre' => "CNIL, la vidéosurveillance et la vidéoprotection au travail", 'url' => 'https://www.cnil.fr/fr/la-videosurveillance-videoprotection-au-travail', 'date' => '2026-10-05'],
        ['titre' => "Odoo 20.0, documentation : facturer les jalons d'un projet (Invoice project milestones)", 'url' => 'https://www.odoo.com/documentation/20.0/applications/sales/sales/invoicing/milestone.html', 'date' => '2026-10-05'],
        ['titre' => "Odoo, tarifs (offres Standard et Personnalisé)", 'url' => 'https://www.odoo.com/fr_FR/pricing', 'date' => '2026-10-05'],
        ['titre' => "Wiki Dolibarr, GIFF : facture de situation 2022", 'url' => 'https://wiki.dolibarr.org/index.php/GIFF_-_Facture_de_situation_2022', 'date' => '2026-10-05'],
        ['titre' => "Meta, tarification de la plateforme WhatsApp Business (quota de 1 000 messages de service gratuits depuis le 1er octobre 2026)", 'url' => 'https://developers.facebook.com/docs/whatsapp/pricing', 'date' => '2026-10-05'],
        ['titre' => "Commission européenne, maîtrise de l'IA : questions et réponses sur l'article 4 du règlement sur l'IA (mise à jour du 27 juillet 2026)", 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => "Constructys, opérateur de compétences de la construction", 'url' => 'https://www.constructys.fr/', 'date' => '2026-10-05'],
        ['titre' => "France Compétences, Qualiopi : l'obligation qualité en vigueur depuis le 1er janvier 2022", 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
        ['titre' => "FDFP, plan de formation des entreprises", 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => "Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA", 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => "3FPT, guichets de financement de la formation professionnelle", 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['excel-google-sheets', 'odoo-utilisateurs', 'dolibarr-utilisateurs', 'outils-collaboratifs', 'digitalisation-processus', 'cybersecurite-employes'],
        'services'    => ['digitalisation-d-entreprise', 'integration-odoo', 'integration-dolibarr'],
        'comparatifs' => ['odoo-vs-dolibarr'],
    ],
];
