<?php
// ============================================================
// data/formations/contenu-avec-ia.php · Fiche formation « Créer du contenu
// avec l'IA » (vague 1B, lot B, domaine intelligence-artificielle). Angle
// propre : produire des contenus marketing avec l'IA (textes, visuels, vidéos
// courtes, déclinaisons par canal) avec une ligne éditoriale, une relecture
// humaine, la vérification des faits, les droits d'utilisation fixés par les
// conditions des éditeurs et la mention des contenus générés quand elle est
// exigée. Ne traite pas l'écriture de consignes et l'évaluation
// (prompt-engineering), le référencement par le contenu (seo-contenu), la
// gestion des profils et de la régularité de publication
// (linkedin-reseaux-sociaux), ni le droit des données en général
// (ia-ethique-conformite). Aucune ancienne page.
// Faits externes relevés le 05/10/2026 à la source (navigateur ou curl) :
// conditions d'OpenAI (en vigueur le 01/01/2026) et aide sur la provenance,
// conditions IA de Canva (26/06/2026) et tarifs, FAQ et formules d'Adobe
// Firefly, conditions de Midjourney (27/05/2026) et formules, aide Gemini
// (filigranes, vidéo) et forfaits Google AI, conditions de CapCut
// (15/04/2026), tarifs d'ElevenLabs et de Suno, tarifs ChatGPT, aide
// YouTube, aide TikTok, Meta (06/02/2024 et transparence), AI Act Service
// Desk (articles 50, 111 et 113, version consolidée au 27/07/2026),
// economie.gouv.fr (influence commerciale), CNIL, Eurostat, UIT, loi
// béninoise n° 2017-20 (articles 383, 384, 389, 390), FDFP, 3FPT, France
// Compétences. Aucune certification ni aucun agrément attribué à Richard.
// Publication du lot B reportée ensuite : 'publie' reste au 2026-10-05.
// ============================================================
declare(strict_types=1);

$ans = (int) fait('experience_ans');

return [
    'titre'   => 'Formation Créer du contenu avec l\'IA : produire textes, visuels et vidéos courtes pour chaque canal, dans la voix de la marque, avec des faits vérifiés et des droits d\'utilisation clairs',
    'title'   => 'Formation contenu marketing avec l\'IA | Richard SALANON',
    'meta'    => 'Formation pour produire textes, visuels et vidéos courtes avec l\'IA : ligne éditoriale, relecture, faits vérifiés, droits des images, mentions. Sur devis.',
    'en_bref' => 'Cette formation apprend aux équipes de communication et de marketing, et aux petites entreprises qui publient elles-mêmes, à produire avec l\'IA des textes, des visuels et des vidéos courtes déclinés pour chaque canal, sans perdre la voix de la marque. Chaque contenu passe par une relecture humaine, une vérification des faits, un contrôle des droits d\'utilisation selon les conditions de l\'outil employé et, quand la règle l\'exige, une mention indiquant qu\'il a été généré. Elle dure deux jours, en quatre demi-journées, ou une journée resserrée pour une petite structure, en intra, en inter, à distance ou en formule hybride. Le prix est fixé sur devis.',
    'publie'  => '2026-10-12',
    'maj'     => '2026-10-05',

    'domaine' => 'intelligence-artificielle',
    'forte'   => false,
    'duree'   => '2 jours en 4 demi-journées, ou 1 jour resserré',
    'formats' => ['intra', 'inter', 'distance', 'hybride'],
    'prix'    => null,

    'programme' => [
        [
            'titre'  => 'Jour 1, matin : traduire la ligne éditoriale en règles qu\'un outil d\'IA peut suivre, et fixer le circuit de validation',
            'duree'  => '3 h 30',
            'points' => [
                'Revue des contenus publiés par l\'entreprise sur les trois derniers mois : ce qui ressemble à la marque, ce qui pourrait venir de n\'importe qui.',
                'Rédaction du guide de voix : ton, tutoiement ou vouvoiement, mots proscrits, formules maison, longueur, emojis admis ou non, exemples validés.',
                'La fiche des faits de la marque : prix, délais, zones livrées, moyens de paiement, garanties, chiffres publiables et leur date, rien d\'autre.',
                'Les données qui n\'entrent jamais dans un générateur : fichiers clients, photos de personnes sans accord écrit, documents internes non publiés.',
                'Le circuit de validation : qui produit, qui relit, qui vérifie les faits, qui décide de la publication, et en combien de temps.',
                'Premier exercice : faire réécrire la présentation de l\'entreprise par deux assistants, puis repérer ce que chacun a inventé ou affadi.',
            ],
        ],
        [
            'titre'  => 'Jour 1, après-midi : écrire et décliner des textes marketing, puis vérifier chaque affirmation',
            'duree'  => '3 h 30',
            'points' => [
                'Le brief d\'un contenu : objectif, public, canal, appel à l\'action, faits autorisés, contraintes de longueur et de format.',
                'Du texte source aux déclinaisons : publication Facebook ou Instagram, statut WhatsApp, script de vidéo courte, paragraphe de lettre d\'information, fiche produit.',
                'La réécriture humaine : retirer les tournures passe-partout, remettre les détails que seule l\'entreprise connaît, couper ce qui promet trop.',
                'La grille de vérification : chaque prix, date, chiffre, nom, citation et promesse est rapproché de la fiche des faits ou d\'une source datée.',
                'Version anglaise d\'une campagne, et relecture par un locuteur pour tout texte en fon, en wolof, en éwé ou dans une autre langue nationale.',
                'Exercice croisé : chaque participant traque les erreurs volontairement glissées dans les déclinaisons d\'un collègue.',
            ],
        ],
        [
            'titre'  => 'Jour 2, matin : créer et retoucher des visuels, en connaissant les droits attachés à chaque outil',
            'duree'  => '3 h 30',
            'points' => [
                'Panorama des générateurs d\'images utilisés en séance : ChatGPT, Gemini, Canva, Adobe Firefly et Midjourney, avec leurs forces sur un même brief.',
                'Lire les conditions de l\'éditeur avant de publier : propriété du résultat, visibilité publique, licence accordée à l\'éditeur, exceptions pour les contenus de bibliothèque.',
                'Garder l\'identité visuelle : palette, typographies, logo toujours posé à la main, jamais redessiné par le générateur.',
                'Les images de personnes : aucun faux client, aucun faux témoignage, aucun visage réel sans autorisation écrite, aucune ressemblance avec une célébrité.',
                'Contrôle des textes incrustés dans l\'image, des mains, des produits et des lieux, puis recherche d\'image inversée avant validation.',
                'Le registre des ressources générées : outil, formule souscrite, date, consigne, auteur, mention prévue, emplacement du fichier d\'origine.',
            ],
        ],
        [
            'titre'  => 'Jour 2, après-midi : monter des vidéos courtes, poser voix et musique sous licence, signaler ce qui doit l\'être, puis évaluation',
            'duree'  => '3 h 30',
            'points' => [
                'Du script au plan de tournage : accroche des premières secondes, plans filmés au téléphone, plans générés, sous-titres lisibles sans le son.',
                'Montage vertical dans CapCut ou Canva, génération de plans courts avec Gemini ou Adobe Firefly, et choix de ce qui doit rester filmé pour de vrai.',
                'Voix off : la voix d\'un membre de l\'équipe, ou une voix de synthèse sous licence commerciale ; jamais une voix clonée sans accord écrit.',
                'Musique : bibliothèque de l\'outil de montage, ou morceau généré avec une offre qui accorde l\'usage commercial.',
                'Les règles de signalement de YouTube, de TikTok et de Meta, l\'article 50 du règlement européen sur l\'IA et la mention « Images virtuelles » en France.',
                'Évaluation : chaque participant livre une mini-campagne (un visuel, trois déclinaisons de texte, une vidéo de 30 secondes) avec sa fiche de validation remplie.',
            ],
        ],
    ],

    'faits_hero' => [
        ['l' => 'Durée', 'v' => '2 jours en 4 demi-journées, ou 1 jour resserré pour une petite structure'],
        ['l' => 'Public', 'v' => 'Communication, marketing, community management, commerçants et dirigeants qui publient eux-mêmes'],
        ['l' => 'Formats', 'v' => 'Intra, inter, à distance ou hybride, 8 personnes au plus par groupe'],
        ['l' => 'Prix', 'v' => 'Sur devis'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que saurez-vous produire à la fin de la formation, et que laisse-t-elle de côté ?',
            'paragraphes' => [
                'Un générateur d\'images livre une affiche en trente secondes, un assistant rédige dix publications en une minute. Le difficile commence après : la promotion annoncée existe-t-elle vraiment, le prix est-il le bon, le visage sur l\'affiche appartient-il à quelqu\'un, la musique de la vidéo peut-elle servir à vendre, la plateforme exige-t-elle une étiquette ? Cette formation ne vise pas à produire plus vite à tout prix. Elle installe une chaîne de production où l\'IA prépare, où une personne nommée relit et vérifie, et où rien ne part sans que l\'équipe sache ce qu\'elle a le droit d\'en faire.',
                'À la fin des deux jours, chaque participant sait, seul : rédiger un brief de contenu ; tenir à jour le guide de voix et la fiche des faits de la marque ; obtenir un premier jet de texte puis le réécrire jusqu\'à ce qu\'il sonne comme l\'entreprise ; décliner un message pour quatre canaux ; créer ou retoucher un visuel conforme à l\'identité de la marque ; monter une vidéo verticale de trente secondes avec voix et musique utilisables ; vérifier chaque fait avant publication ; dire, outil par outil, à qui appartient le résultat ; décider si un contenu doit porter une mention de génération.',
                'Plusieurs sujets voisins ont leur propre formation. L\'écriture de consignes fiables, les gabarits réutilisables et l\'évaluation méthodique des réponses relèvent de la formation Prompt engineering professionnel. Le référencement d\'un site par ses articles relève de SEO et marketing de contenu, et la tenue des profils, des pages et du rythme de publication de LinkedIn et réseaux sociaux d\'entreprise. Ces trois fiches figurent en bas de page. Le droit des données personnelles et du droit d\'auteur, lu article par article, est l\'objet de la formation <a href="/formations/ia-ethique-conformite">IA, éthique et conformité des données</a> ; ici, il n\'apparaît qu\'au moment du geste de production.',
                'La formation n\'apprend pas non plus à faire citer l\'entreprise par les assistants conversationnels : c\'est le <a href="/formations/referencement-ia-geo">référencement IA (GEO)</a>. Elle ne remplace pas une agence pour une campagne de marque complète, ni un photographe pour les images de vos vrais produits, de vos vrais locaux et de vos vraies équipes. Elle donne à une équipe interne les moyens de produire chaque semaine des contenus propres, exacts et publiables, et de reconnaître le moment où il vaut mieux filmer, photographier ou faire appel à un professionnel.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À qui s\'adresse la formation, avec quels prérequis et quel matériel ?',
            'intro' => 'La formation vise les personnes qui publient au nom de l\'entreprise, pas les graphistes de métier. Les groupes comptent huit personnes au plus, parce que chaque visuel et chaque vidéo produits en séance sont relus avec leur auteur.',
            'items' => [
                ['titre' => 'Les chargés de communication et de marketing', 'texte' => 'Ils produisent déjà les publications, les affiches et les lettres d\'information, souvent seuls. Ils repartent avec un guide de voix, une fiche des faits et un circuit de validation qui les protègent autant qu\'ils accélèrent le travail.'],
                ['titre' => 'Les community managers', 'texte' => 'Ils déclinent un même message pour plusieurs canaux chaque jour. La formation leur apprend à garder la cohérence entre ces versions, à repérer ce que l\'outil a ajouté de son propre chef et à poser les bonnes étiquettes sur chaque plateforme.'],
                ['titre' => 'Les commerçants et les dirigeants de petites structures', 'texte' => 'Boutique, restaurant, salon, cabinet, agence de voyage : ils publient eux-mêmes, entre deux clients. La version d\'une journée leur suffit souvent, centrée sur les visuels de produits, les statuts WhatsApp et les vidéos courtes.'],
                ['titre' => 'Les chargés de communication d\'ONG et de projets', 'texte' => 'Ils racontent des actions de terrain auprès de bailleurs et du public. Pour eux, la frontière entre illustration générée et photo documentaire est centrale : une image fabriquée ne doit jamais passer pour un fait.'],
                ['titre' => 'Le niveau attendu', 'texte' => 'Avoir déjà utilisé un assistant d\'IA, même sans méthode, et savoir publier sur au moins un réseau. Une ligne éditoriale écrite n\'est pas exigée, mais il faut apporter des exemples de contenus déjà publiés : la première demi-journée en tire les règles.'],
                ['titre' => 'Le matériel', 'texte' => 'Un ordinateur portable par personne, avec un navigateur récent, et un téléphone récent pour filmer et monter les vidéos. Des écouteurs aident pour les voix off. Le logo, la charte graphique et les photos de produits sont copiés sur le poste avant la séance.'],
                ['titre' => 'Les comptes', 'texte' => 'Des comptes au nom de l\'entreprise, gratuits au départ, sur les outils retenus au cadrage. Aucun abonnement n\'est à souscrire avant la session : les offres gratuites suffisent pour apprendre, mais pas toujours pour publier, comme l\'explique plus bas la partie consacrée aux droits.'],
            ],
        ],
        ['type' => 'programme', 'titre' => 'Quel est le programme, demi-journée par demi-journée ?'],
        [
            'type'  => 'etapes',
            'titre' => 'Comment une campagne passe-t-elle du brief à la publication pendant les exercices ?',
            'items' => [
                ['titre' => 'Le brief', 'duree' => '15 minutes', 'texte' => 'Chaque participant choisit une vraie actualité de l\'entreprise : un nouveau produit, une offre de saison, un événement, un recrutement. Il écrit en cinq lignes l\'objectif, le public, les canaux, l\'appel à l\'action et les faits autorisés, sans ouvrir aucun outil.'],
                ['titre' => 'Le premier jet', 'duree' => '20 minutes', 'texte' => 'L\'assistant reçoit le brief, le guide de voix et la fiche des faits, et propose un texte source. Le participant garde la conversation : elle servira à expliquer, plus tard, d\'où vient chaque formulation.'],
                ['titre' => 'La réécriture', 'duree' => '30 minutes', 'texte' => 'Le texte est repris à la main. On enlève les superlatifs gratuits et les phrases qui pourraient décrire n\'importe quel concurrent, on ajoute ce que seule l\'entreprise sait : le nom du quartier, le délai réellement tenu, le détail qui fait venir un client.'],
                ['titre' => 'La vérification des faits', 'duree' => '20 minutes', 'texte' => 'Chaque affirmation vérifiable est soulignée puis rapprochée de sa source : fiche des faits, catalogue, conditions de l\'offre, page officielle. Ce qui ne se retrouve nulle part disparaît du texte, même si la phrase était belle.'],
                ['titre' => 'Le visuel', 'duree' => '45 minutes', 'texte' => 'Création ou retouche d\'un visuel dans l\'outil retenu, logo posé à la main, texte incrusté relu lettre par lettre. Le participant note dans le registre l\'outil, la formule souscrite et la licence qui s\'applique.'],
                ['titre' => 'Les déclinaisons', 'duree' => '30 minutes', 'texte' => 'Le texte source devient une publication carrée, un statut WhatsApp, un script de vidéo et un paragraphe de lettre d\'information. On vérifie que le prix, la date et l\'appel à l\'action restent identiques d\'une version à l\'autre.'],
                ['titre' => 'La vidéo courte', 'duree' => '1 heure', 'texte' => 'Script de trente secondes, plans filmés au téléphone complétés si besoin par deux plans générés, voix off, musique sous licence, sous-titres. Le participant décide, règle par règle, si la vidéo doit être signalée comme générée.'],
                ['titre' => 'La validation', 'duree' => '15 minutes', 'texte' => 'Un autre participant, dans le rôle du valideur, relit l\'ensemble avec la fiche de validation : faits, droits, personnes représentées, mention, orthographe. Il signe ou renvoie avec ses remarques, comme cela se fera dans l\'entreprise.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment décliner un même message selon le canal, et que vérifier à chaque fois ?',
            'legende' => 'Déclinaisons travaillées pendant la formation à partir d\'un seul texte source. La dernière colonne indique le contrôle propre à chaque format, en plus de la vérification commune des faits.',
            'entetes' => ['Canal et format', 'Ce que l\'IA prépare', 'Ce que l\'humain reprend', 'Contrôle propre au format'],
            'lignes'  => [
                ['Publication Facebook ou Instagram, visuel carré ou portrait', 'Trois accroches, le texte, une proposition de visuel', 'Le choix de l\'accroche, les détails locaux, le ton', 'Texte incrusté dans l\'image lisible sur téléphone et identique au texte de la publication'],
                ['Vidéo verticale (Reels, TikTok, YouTube Shorts)', 'Le script, le découpage en plans, les sous-titres', 'Les plans filmés, le rythme, la voix', 'Accroche dans les premières secondes, sous-titres relus, étiquette de contenu généré si la plateforme l\'exige'],
                ['Statut ou message WhatsApp', 'Une version courte, avec l\'appel à l\'action', 'Le prix, le lien ou le numéro, la formule de politesse', 'Numéro au format international, lien testé, aucune promesse que le service client ne peut tenir'],
                ['Lettre d\'information', 'Un paragraphe et un objet de message', 'L\'ordre des informations, la signature', 'Cohérence avec la page de destination et date de fin de l\'offre'],
                ['Fiche produit d\'une boutique en ligne', 'Une description structurée à partir des caractéristiques', 'Les mesures, les matières, les conditions de livraison', 'Chaque caractéristique retrouvée sur l\'étiquette ou chez le fournisseur'],
                ['Affiche ou flyer imprimé', 'La hiérarchie des informations, une composition', 'Le logo, les mentions obligatoires, l\'adresse', 'Épreuve imprimée relue avant tirage : une erreur sur papier ne se corrige plus'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi commencer par la ligne éditoriale avant d\'ouvrir un générateur ?',
            'paragraphes' => [
                'Parce qu\'un outil d\'IA, laissé à lui-même, écrit comme tout le monde. Il produit un français correct, enthousiaste et interchangeable, qui pourrait signer la page de n\'importe quel concurrent. Une marque se reconnaît à des choix que l\'outil ne peut pas deviner : vouvoyer ou tutoyer, parler de « clients » ou de « patients », citer le quartier, éviter certains mots, utiliser une formule de fin propre à la maison. Tant que ces choix restent dans la tête du dirigeant, chaque contenu généré les trahit un peu, et personne ne sait dire pourquoi il « ne sonne pas juste ».',
                'La première demi-journée écrit donc deux documents courts. Le guide de voix tient sur deux pages : ton, mots à employer et à proscrire, longueur habituelle, trois contenus de référence déjà publiés. La fiche des faits tient sur une page : ce que l\'entreprise affirme publiquement, avec la date de chaque chiffre. Ces deux pages sont jointes à chaque demande faite à un assistant, et servent aussi de grille de relecture. Les formuler de façon à obtenir des réponses constantes relève de la formation au prompt engineering ; ici, l\'enjeu est d\'en fixer le contenu avec l\'équipe.',
                'Le troisième document est le circuit de validation. Une publication sur un réseau engage l\'entreprise comme une lettre signée : un prix faux, une promotion inexistante ou une photo empruntée se paient en réclamations, en litiges ou en crédibilité. Le circuit dit qui peut publier sans relecture (presque personne), qui vérifie les faits, qui tranche sur les visuels de personnes et qui décide d\'une mention de contenu généré. Dans une petite structure, une seule personne cumule souvent ces rôles ; la formation lui donne alors une liste de contrôle à suivre avant chaque envoi.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'À qui appartiennent les images, vidéos, voix et musiques générées, selon les conditions des éditeurs ?',
            'legende' => 'Conditions et pages officielles lues le 5 octobre 2026. Elles changent souvent : la séance les relit sur l\'outil réellement utilisé par l\'équipe. Ce tableau résume ce que dit chaque éditeur dans ses relations avec l\'utilisateur ; il ne dit pas si le résultat est protégé par le droit d\'auteur de votre pays, question traitée dans la formation sur l\'éthique et la conformité.',
            'entetes' => ['Outil', 'Ce que disent les conditions', 'Ce qui limite l\'usage', 'Ce que l\'équipe vérifie'],
            'lignes'  => [
                ['ChatGPT (OpenAI), offres pour les particuliers', 'Conditions en vigueur depuis le 1er janvier 2026 hors Espace économique européen, Suisse et Royaume-Uni : l\'utilisateur possède les données de sortie, dans la mesure permise par le droit applicable', 'Les sorties peuvent ne pas être uniques ; il est interdit de présenter comme humaine une sortie qui ne l\'est pas ; l\'utilisateur doit évaluer l\'exactitude, y compris par un examen humain, avant de partager', 'Que la conversation est faite avec le compte de l\'entreprise, et que les images gardent leurs métadonnées de provenance'],
                ['Canva, fonctions d\'IA', 'Conditions des produits d\'IA en vigueur depuis le 26 juin 2026 : l\'utilisateur possède ses résultats, sauf ceux qui modifient ou intègrent un contenu sous licence de la bibliothèque de Canva', 'Une photo de la bibliothèque retouchée par l\'IA n\'appartient pas à l\'utilisateur ; les données saisies peuvent être transmises aux partenaires techniques de Canva', 'L\'origine de chaque élément d\'un visuel : créé par l\'équipe, généré, ou issu de la bibliothèque'],
                ['Adobe Firefly', 'Selon la FAQ de ses formules, les créations des modèles Firefly d\'Adobe sont utilisables à des fins commerciales ; ces modèles sont entraînés sur des contenus sous licence et du domaine public, et des Content Credentials sont joints automatiquement', 'Pour les modèles partenaires proposés dans Firefly, comme ceux de Google, Adobe laisse à l\'utilisateur le soin de vérifier que le résultat convient à son projet', 'Le nom du modèle réellement utilisé pour chaque image, noté dans le registre'],
                ['Midjourney', 'Conditions en vigueur depuis le 27 mai 2026 : l\'utilisateur possède ses créations dans toute la mesure permise par la loi', 'Une entreprise de plus d\'un million de dollars de revenus annuels doit souscrire l\'offre Pro ou Mega pour en être propriétaire ; par défaut, les créations sont visibles et réutilisables par la communauté ; le mode furtif est réservé aux offres Pro et Mega', 'Le chiffre d\'affaires de l\'entreprise face au seuil, et la confidentialité d\'un visuel de lancement avant sa sortie'],
                ['Gemini (Google)', 'Les images et vidéos créées dans les applications Gemini portent un filigrane invisible SynthID et des métadonnées Content Credentials ; le filigrane visible se règle dans les paramètres', 'Il faut détenir les droits sur toute image importée ; la retouche d\'une vidéo importée n\'est pas disponible dans l\'Espace économique européen, au Royaume-Uni ni en Suisse', 'Le réglage du filigrane visible, et l\'autorisation des personnes présentes sur les photos importées'],
                ['CapCut', 'Conditions mises à jour le 15 avril 2026 : CapCut ne revendique pas la propriété des contenus de l\'utilisateur, mais reçoit sur eux une licence mondiale, perpétuelle et gratuite, ainsi qu\'un droit d\'utiliser son nom et son image pour l\'identifier, y compris dans des contenus sponsorisés', 'L\'usage commercial des modèles, musiques et autocollants de CapCut dépend de son accord de licence des ressources', 'La licence de chaque musique et de chaque modèle avant une publication commerciale'],
                ['ElevenLabs (voix de synthèse)', 'Sur la page tarifs, la licence commerciale apparaît à partir de l\'offre Starter, à 6 dollars par mois ; l\'offre gratuite n\'en comporte pas', 'Le clonage d\'une voix suppose l\'accord écrit de la personne dont c\'est la voix', 'L\'offre souscrite au moment de la génération, et l\'autorisation de la personne'],
                ['Suno (musique)', 'Selon sa page tarifs, les offres gratuites n\'incluent pas les droits commerciaux ; les offres Pro et Premier les accordent', 'L\'usage reste soumis aux règles de chaque plateforme de diffusion', 'L\'offre active à la date de création du morceau, notée dans le registre'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que faut-il retenir des conditions d\'utilisation avant de publier un contenu généré ?',
            'paragraphes' => [
                'Trois idées reviennent d\'un éditeur à l\'autre, et la formation les fait chercher dans le texte plutôt que de les affirmer. D\'abord, le résultat appartient en général à l\'utilisateur, mais seulement « dans la mesure permise par le droit applicable » : l\'éditeur renonce à ses propres droits, il ne garantit pas qu\'un droit d\'auteur existe ni qu\'aucun tiers ne puisse se plaindre. Ensuite, un résultat n\'est pas forcément unique : OpenAI comme Canva préviennent qu\'un autre utilisateur peut obtenir quelque chose de très proche. Une affiche générée ne fait donc pas un logo ni une identité exclusive.',
                'Enfin, les conditions dépendent de l\'offre souscrite. Chez Midjourney, la propriété d\'une entreprise dépassant un million de dollars de revenus annuels passe par l\'offre Pro ou Mega, et seules ces offres permettent de garder ses créations à l\'abri des regards. Chez ElevenLabs et Suno, l\'offre gratuite suffit pour s\'exercer, pas pour vendre. Chez Canva, tout dépend de l\'origine de l\'élément retouché. C\'est pourquoi le registre des ressources générées note l\'offre active le jour de la création, et pas seulement l\'outil : un abonnement résilié six mois plus tard ne doit pas laisser l\'équipe dans le doute.',
                'Les conditions disent aussi ce que l\'éditeur reçoit. Midjourney obtient une licence large et perpétuelle sur les consignes et les créations ; CapCut, une licence mondiale sur les contenus importés et le droit d\'utiliser le nom et l\'image de l\'utilisateur pour l\'identifier. Ce n\'est pas une raison de fuir ces outils, mais une raison de ne pas y importer une photo de produit encore secret, le visage d\'un client ou un document interne. La règle enseignée est simple : avant de téléverser, se demander ce que l\'on accepterait de voir réutilisé ailleurs.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quand faut-il signaler qu\'un contenu marketing a été généré par l\'IA ?',
            'legende' => 'Règles des plateformes et textes publics lus le 5 octobre 2026. La colonne de droite traduit chaque règle en geste de production. Une mention non exigée reste toujours possible : dans le doute, la formation conseille de signaler plutôt que de taire.',
            'entetes' => ['Règle', 'Ce qu\'elle demande', 'Cas typique en marketing', 'Geste de l\'équipe'],
            'lignes'  => [
                ['Règlement européen sur l\'IA, article 50, applicable depuis le 2 août 2026', 'Celui qui diffuse un hypertrucage (image, son ou vidéo réalistes) indique qu\'il est généré ou manipulé ; un texte publié pour informer le public sur un sujet d\'intérêt général aussi, sauf relecture humaine et responsabilité éditoriale assumée', 'Vidéo montrant une scène réaliste qui n\'a jamais eu lieu, ou un porte-parole faisant une déclaration qu\'il n\'a pas faite', 'Mention visible dès la première exposition ; pour une œuvre manifestement créative, mention discrète qui ne gâche pas l\'œuvre'],
                ['YouTube, aide sur les contenus d\'IA générative', 'Signaler dans YouTube Studio tout contenu réaliste généré ou fortement modifié, dont une musique générée qui constitue l\'élément principal de la vidéo', 'Plans générés d\'un lieu réel dans une vidéo promotionnelle de voyage', 'Cocher « Utilisation de l\'IA » à la mise en ligne ; inutile pour un script, une miniature, des sous-titres ou la voix clonée de l\'auteur lui-même'],
                ['TikTok, aide sur les contenus générés par l\'IA', 'Étiqueter tout contenu généré qui contient des images, sons ou vidéos réalistes ; interdiction de montrer faussement une personnalité publique en train de recommander un produit', 'Publicité organique mettant en scène un visage généré, ou une voix de synthèse réaliste', 'Activer l\'étiquette de créateur ; ne jamais faire « parler » une célébrité, même avec mention'],
                ['Meta (Facebook, Instagram, Threads)', 'Depuis l\'annonce du 6 février 2024, utiliser l\'outil de divulgation pour toute vidéo photoréaliste ou tout son réaliste créé ou modifié numériquement, Meta pouvant appliquer des sanctions en cas d\x27oubli', 'Reel dont la voix off est une voix de synthèse réaliste', 'Activer l\'étiquette lors de la publication ; l\'étiquette « Infos IA » peut aussi s\'afficher automatiquement à partir des métadonnées'],
                ['France, influence commerciale', 'Selon economie.gouv.fr, la production par l\'IA d\'un visage ou d\'une silhouette s\'accompagne de la mention « Images virtuelles » ; une silhouette affinée ou un visage modifié, de la mention « Images retouchées »', 'Créateur de contenu rémunéré par une marque qui publie un visuel avec un visage généré', 'Prévoir la mention dans le contrat avec le créateur et la vérifier avant publication'],
                ['Conditions d\'OpenAI', 'Interdiction de déclarer qu\'une sortie a été générée par un humain alors que ce n\'est pas le cas', 'Texte présenté comme le témoignage spontané d\'un client', 'Aucun témoignage écrit par l\'IA ; seuls les avis réels, avec l\'accord de leur auteur'],
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Quel contenu généré ne faut-il jamais publier, même avec une mention ?',
            'texte' => 'Le faux client. Un visage souriant généré, accompagné d\'un prénom et d\'une phrase élogieuse, ressemble à une preuve sociale ; c\'est une tromperie, qu\'une petite mention en bas de l\'image ne répare pas. Il en va de même pour une photo de produit « améliorée » qui montre ce que le client ne recevra pas, pour une vidéo où une personnalité semble recommander l\'entreprise, et pour une image de chantier, de boutique ou d\'action de terrain présentée comme réelle alors qu\'elle a été fabriquée. TikTok interdit d\'ailleurs explicitement les fausses recommandations de personnalités. En séance, la règle est posée dès la première heure : l\'IA illustre, elle ne témoigne pas.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Comment la formation est-elle animée pour que l\'équipe produise seule ensuite ?',
            'intro' => 'Chaque séquence suit le même rythme : une démonstration de dix minutes sur un contenu réel de l\'entreprise, puis une longue production, puis une relecture en binôme. Le formateur passe d\'écran en écran et commente les choix, pas seulement les résultats.',
            'items' => [
                ['titre' => 'Huit personnes au plus', 'texte' => 'Un visuel ou une vidéo se relit avec son auteur, à l\'écran. Au-delà de huit participants, ce temps disparaît et la formation devient une démonstration. Une équipe plus nombreuse est répartie en deux groupes.'],
                ['titre' => 'Vos produits, vos actualités, vos canaux', 'texte' => 'Les exercices partent du calendrier réel de l\'entreprise : lancement prévu, offre du mois, événement à annoncer. Les contenus produits pendant la session peuvent être publiés ensuite, après validation par la personne désignée.'],
                ['titre' => 'Plusieurs outils sur un même brief', 'texte' => 'Le même visuel est demandé à deux ou trois générateurs. Les participants voient ce qui change d\'un outil à l\'autre, et surtout ce que les conditions de chacun permettent d\'en faire, avant de choisir un abonnement.'],
                ['titre' => 'La relecture croisée', 'texte' => 'Un participant relit les contenus d\'un autre avec la fiche de validation. On repère mieux une promotion inventée ou un prix erroné dans le travail d\'un collègue que dans le sien.'],
                ['titre' => 'Des documents qui restent à l\'entreprise', 'texte' => 'Le guide de voix, la fiche des faits, la fiche de validation, le registre des ressources générées, le tableau des règles de signalement daté, les contenus produits pendant la session et une attestation nominative, dans des formats modifiables.'],
                ['titre' => 'Un suivi après la session', 'texte' => 'Pendant la période prévue au devis, un canal direct reste ouvert pour les questions de production, et les premières campagnes réalisées seules peuvent être relues à distance, registre et mentions compris.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quels outils utilise-t-on, et que coûtent-ils chez l\'éditeur ?',
            'legende' => 'Prix publics relevés le 5 octobre 2026 sur les pages des éditeurs, dans la devise affichée ; ils varient selon le pays et les taxes. Ces abonnements sont payés à l\'éditeur, au nom de l\'entreprise, et ne font pas partie du prix de la formation. Aucun n\'est nécessaire pour suivre la session.',
            'entetes' => ['Outil', 'Usage en formation', 'Prix affiché par l\'éditeur', 'À savoir'],
            'lignes'  => [
                ['ChatGPT (OpenAI)', 'Textes, déclinaisons, scripts, images', 'Gratuit avec une création d\'images limitée ; Go à 8 € et Plus à 23 € par mois sur la page tarifs en français', 'Images marquées par des métadonnées C2PA et un filigrane SynthID, selon le centre d\'aide d\'OpenAI'],
                ['Gemini et forfaits Google AI', 'Textes, images, plans vidéo courts', 'Version sans frais ; Google AI Plus à 4,99 € et Google AI Pro à 21,99 € par mois, prix affichés en euros', 'La génération de vidéo demande un forfait Google AI pour un compte personnel, selon l\'aide de Gemini'],
                ['Canva', 'Mise en page, déclinaisons de formats, montage simple', 'Gratuit ; Pro à 110 € par an pour une personne ; Pro+ à 170 € par an et par personne, sur la page tarifs en français', 'Canva indique que les organismes à but non lucratif peuvent bénéficier de la plupart des outils premium gratuitement'],
                ['Adobe Firefly', 'Images, retouches, plans vidéo de 5 secondes', 'Firefly Standard à 11,08 € par mois TTC (2 000 crédits génératifs) ; Firefly Pro à 22,18 € par mois TTC (4 000 crédits)', 'Les crédits se consomment plus vite en vidéo ; les modèles partenaires suivent leurs propres règles'],
                ['Midjourney', 'Visuels d\'ambiance, illustrations', 'Basic à 10 $, Standard à 30 $, Pro à 60 $ et Mega à 120 $ par mois ; 20 % de remise en paiement annuel', 'Seuil d\'un million de dollars de revenus et mode furtif réservé aux offres Pro et Mega'],
                ['CapCut', 'Montage vertical, sous-titres', 'Version gratuite utilisée en formation', 'Licence des musiques et modèles à vérifier avant tout usage commercial'],
                ['ElevenLabs', 'Voix off de synthèse', 'Gratuit sans licence commerciale ; Starter à 6 $, Creator à 22 $ et Pro à 99 $ par mois', 'Clonage de voix uniquement avec l\'accord écrit de la personne'],
                ['Suno', 'Musique d\'accompagnement', 'Gratuit sans droits commerciaux ; offres Pro et Premier avec droits commerciaux', 'Les crédits inclus ne se reportent pas d\'un mois sur l\'autre'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Faut-il payer un abonnement pour publier ce que l\'on crée pendant la formation ?',
            'paragraphes' => [
                'Pour apprendre, non : les offres gratuites de ChatGPT, de Gemini, de Canva et de CapCut suffisent à faire tous les exercices de textes, de visuels et de montage. Pour publier, la réponse dépend de l\'outil et de l\'usage. Une voix de synthèse créée avec l\'offre gratuite d\'ElevenLabs, ou une musique créée avec l\'offre gratuite de Suno, ne s\'accompagne pas d\'une licence commerciale selon leurs pages tarifs : elles servent d\'exercice, pas de bande-son à une publicité. Une entreprise qui dépasse un million de dollars de revenus annuels et utilise Midjourney doit, elle, prendre l\'offre Pro ou Mega pour posséder ses images.',
                'La formation conseille donc de décider des abonnements après la session, à partir de deux questions. Quels outils l\'équipe a-t-elle vraiment utilisés pendant les exercices, et pour quels formats ? Quelles conditions conviennent à l\'usage prévu : publicité payante, publication organique, impression, revente ? Un seul outil de mise en page et un seul générateur bien maîtrisés valent mieux que cinq abonnements dispersés entre plusieurs salariés. Pour choisir l\'assistant de rédaction de l\'équipe, le <a href="/comparatifs/chatgpt-vs-claude-vs-gemini">comparatif ChatGPT, Claude et Gemini</a> détaille les offres et leurs conditions sur les données.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble la formation selon votre métier et votre pays ?',
            'items' => [
                ['secteur' => 'Boutique de cosmétiques naturels, à Cotonou', 'probleme' => 'La gérante publie chaque jour sur WhatsApp et Instagram, refait ses visuels à la main et craint qu\x27une affiche générée montre un jour un pot différent du vrai.', 'solution' => 'Une journée resserrée : photos des vrais produits retouchées sans en changer l\'aspect, déclinaisons en statut WhatsApp et en Reel, fiche des faits avec les prix et les zones de livraison à Cotonou et Abomey-Calavi, liste de contrôle avant chaque publication.'],
                ['secteur' => 'Hôtel en bord de mer, à Saly', 'probleme' => 'Les visuels générés de plage et de chambres plaisent, mais certains montrent une piscine plus grande que la vraie, et la clientèle européenne compare avec les avis en ligne.', 'solution' => 'Règle maison : les chambres, la piscine et le restaurant sont toujours photographiés ; l\'IA sert aux ambiances, aux textes en français et en anglais et aux vidéos de saison, avec mention quand une scène réaliste est générée.'],
                ['secteur' => 'ONG d\'appui aux producteurs, à Ouagadougou', 'probleme' => 'Les rapports et les réseaux de l\'organisation ont besoin d\'images, mais les photos de bénéficiaires demandent des autorisations difficiles à recueillir sur le terrain.', 'solution' => 'Illustrations clairement non réalistes pour les sujets généraux, photos réelles uniquement avec autorisation écrite, aucune scène de terrain générée présentée comme documentaire, et registre des ressources joint au rapport annuel.'],
                ['secteur' => 'Industriel de l\'agroalimentaire, à Abidjan', 'probleme' => 'Le service marketing lance une gamme de jus et doit produire en trois semaines des affiches, des vidéos courtes et des textes pour les distributeurs, sans graphiste en interne.', 'solution' => 'Deux jours en intra : guide de voix de la gamme, visuels de lancement créés avec un outil dont les conditions couvrent l\'usage commercial, scripts de vidéos tournées en partie au téléphone dans l\'usine, circuit de validation avec le service qualité pour chaque allégation.'],
                ['secteur' => 'Agence immobilière, à Lyon', 'probleme' => 'Les annonces utilisent des photos de pièces vides « meublées » par l\'IA, au risque qu\'un acheteur ne retrouve pas, à la visite, le salon de l\'annonce.', 'solution' => 'Mention systématique sur les images d\'aménagement virtuel, photo d\'origine toujours affichée à côté, textes d\'annonce vérifiés contre le dossier du bien, et formation des agents à ce que la retouche peut et ne peut pas montrer.'],
                ['secteur' => 'Cabinet de conseil, à Bruxelles', 'probleme' => 'Les consultants veulent publier des articles et des carrousels réguliers, mais craignent les chiffres inventés et le style uniforme des textes générés.', 'solution' => 'Atelier sur la réécriture et la vérification : chaque chiffre relié à une source datée, relecture par l\'associé responsable avant publication, ce qui répond aussi à l\'exception de l\'article 50 pour les textes relus sous responsabilité éditoriale.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Quel format, quelle durée et quelle organisation choisir ?',
            'legende' => 'Les formats peuvent se combiner : la formation complète pour l\'équipe de communication, puis la journée resserrée pour les responsables de boutique ou d\'agence qui publient localement.',
            'entetes' => ['Format', 'Durée et rythme', 'Ce que l\'on y fait', 'Pour qui'],
            'lignes'  => [
                ['Formation complète, intra', 'Deux jours, en quatre demi-journées', 'Le programme entier sur les produits et les canaux de l\'entreprise, mini-campagne évaluée', 'Une équipe de communication ou de marketing, huit personnes au plus par groupe'],
                ['Journée resserrée', 'Une journée', 'Guide de voix et fiche des faits, visuels de produits, statuts et vidéos courtes, liste de contrôle', 'Commerçants, dirigeants de petites structures, responsables de point de vente'],
                ['Session inter-entreprises', 'Deux jours', 'Le même programme, chacun sur les produits de sa propre structure, sans partage de documents internes', 'Une ou deux personnes par organisation, ou un réseau d\'associations'],
                ['À distance', 'Six séances de deux heures et demie, sur trois semaines', 'Partage d\'écran, production entre les séances, relecture en début de séance suivante', 'Équipes réparties entre plusieurs villes ou pays'],
                ['Hybride', 'Une journée en salle, puis trois séances à distance', 'Guide de voix et vidéos tournées en salle, déclinaisons et validation suivies à distance', 'Équipes qui veulent tourner ensemble, puis produire à leur rythme'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte la formation, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'Aucun tarif n\'est publié pour cette formation : elle est chiffrée sur devis, après un premier échange sur l\'équipe, les canaux et les contenus à produire. Ce premier échange, le cadrage et le devis sont gratuits. La formation se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces ; les abonnements aux outils restent au nom de l\'entreprise.',
            'items'      => [
                ['offre' => 'Journée resserrée', 'prix' => 'Sur devis', 'inclus' => ['Guide de voix et fiche des faits', 'Visuels de produits et déclinaisons', 'Vidéo courte tournée et montée', 'Liste de contrôle avant publication']],
                ['offre' => 'Formation complète', 'prix' => 'Sur devis', 'inclus' => ['Quatre demi-journées', 'Textes, visuels, vidéos et déclinaisons sur vos produits', 'Tableau des droits et des règles de signalement', 'Mini-campagne évaluée et attestation', 'Registre des ressources générées']],
                ['offre' => 'Suivi de production', 'prix' => 'Sur devis', 'inclus' => ['Relecture à distance des premières campagnes', 'Mise à jour du tableau des règles', 'Questions de production pendant la période convenue']],
            ],
            'variations' => [
                'Le nombre de participants et de groupes, huit personnes au plus par groupe.',
                'Le format retenu : journée resserrée, deux jours, distance ou hybride.',
                'Le nombre de canaux et de langues à couvrir dans les déclinaisons.',
                'La préparation : collecte des contenus publiés, des photos de produits et de la charte graphique.',
                'Le lieu de la session et les déplacements hors de Cotonou ou hors du Bénin.',
                'La durée du suivi de production après la session.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Un fonds de formation peut-il financer la session ?',
            'paragraphes' => [
                'Il arrive qu\'un fonds prenne en charge une partie du coût, mais cette page n\'en promet aucune. En Côte d\'Ivoire, la page du <a href="https://fdfp.ci/plan-de-formation/">FDFP</a> sur le plan de formation, lue le 5 octobre 2026, réserve le dépôt d\'un plan aux entreprises qui justifient du paiement régulier des deux taxes ; elle range parmi les actions possibles la formation intra, assurée pour les salariés d\'une même entreprise par un intervenant extérieur, et prévoit un règlement après contrôle des services du fonds et approbation de sa Commission permanente.',
                'Au Bénin, le FODEFCA fonctionne selon des statuts approuvés par le <a href="https://sgg.gouv.bj/doc/decret-2022-286/">décret n° 2022-286 du 11 mai 2022</a>. Au Sénégal, le <a href="https://www.3fpt.sn/">3FPT</a> affiche un guichet pour le financement du personnel des entreprises et des membres des organisations professionnelles. En France, <a href="https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/">France Compétences</a> rappelle que, depuis le 1er janvier 2022, un prestataire doit être certifié Qualiopi pour accéder aux fonds publics ou mutualisés, dont ceux des OPCO. Richard SALANON ne détient ni cette certification ni l\'agrément d\'un fonds : budgétez la session sans prise en charge, et interrogez votre fonds par écrit, programme et devis en main, avant de signer.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs voit-on après une formation au contenu avec l\'IA, et comment les éviter ?',
            'intro' => 'Les dérives n\'apparaissent pas le premier jour. Elles arrivent quand le volume de publications augmente et que la relecture devient un obstacle au rythme. Voici celles qui reviennent le plus, avec le réflexe qui les prévient.',
            'items' => [
                ['titre' => 'Laisser filer la relecture', 'texte' => 'Après quelques semaines sans incident, les textes partent directement de l\'outil. C\'est le moment où passe une promotion terminée ou un délai de livraison faux. La fiche de validation reste obligatoire, même pour un statut de deux lignes.'],
                ['titre' => 'Publier un chiffre sans source', 'texte' => 'Un assistant ajoute volontiers « plus de 1 000 clients satisfaits » ou un pourcentage flatteur. Tout chiffre absent de la fiche des faits est supprimé, et la fiche elle-même est relue chaque trimestre.'],
                ['titre' => 'Uniformiser la voix de la marque', 'texte' => 'À force de générer, toutes les publications finissent par se ressembler, et ressemblent à celles des concurrents qui utilisent les mêmes outils. Le guide de voix et les trois contenus de référence sont joints à chaque demande, et un contenu sur cinq reste écrit entièrement à la main.'],
                ['titre' => 'Oublier l\'offre souscrite', 'texte' => 'Une musique créée pendant l\'essai gratuit se retrouve dans une publicité six mois plus tard. Le registre des ressources générées indique, pour chaque fichier, l\'outil, l\'offre active et la licence, et il est consulté avant tout usage payant.'],
                ['titre' => 'Montrer des personnes sans accord', 'texte' => 'Une photo de client prise en boutique sert de base à un visuel retouché, sans que la personne le sache. Toute image d\'une personne reconnaissable, même modifiée, suppose une autorisation écrite conservée.'],
                ['titre' => 'Effacer la provenance', 'texte' => 'Une capture d\'écran ou une conversion de fichier supprime les métadonnées C2PA qui permettent aux plateformes d\'étiqueter le contenu. On exporte le fichier d\'origine, et on pose soi-même l\'étiquette quand elle est exigée.'],
                ['titre' => 'Générer ce qu\'il fallait filmer', 'texte' => 'Une chambre d\'hôtel, un plat, un produit ou un chantier générés créent une attente que la réalité ne tiendra pas. Ce que le client achète se photographie ou se filme ; l\'IA se réserve aux ambiances, aux illustrations et aux déclinaisons.'],
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres et quelles dates situent la création de contenu avec l\'IA ?',
            'items' => [
                ['valeur' => '8,8 %', 'libelle' => 'Part des entreprises de l\'Union européenne de 10 salariés ou plus qui utilisaient l\'IA pour produire du langage écrit ou parlé en 2025, deuxième usage en plus forte progression sur un an ; 9,5 % l\'utilisaient pour générer des images, des vidéos ou des sons (publication du 11 décembre 2025)', 'source' => 'Eurostat', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2'],
                ['valeur' => '2 août 2026', 'libelle' => 'Date d\'application générale du règlement européen sur l\'IA, dont les obligations de transparence de l\'article 50 sur les hypertrucages et certains textes publiés (version consolidée au 27 juillet 2026)', 'source' => 'AI Act Service Desk, article 113', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-113'],
                ['valeur' => '2 décembre 2026', 'libelle' => 'Date limite pour que les fournisseurs de systèmes génératifs mis sur le marché avant le 2 août 2026 marquent leurs contenus de façon lisible par machine (article 111, paragraphe 4, ajouté par l\'omnibus numérique)', 'source' => 'AI Act Service Desk, article 111', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-111'],
                ['valeur' => '1 million de dollars', 'libelle' => 'Revenus annuels au-delà desquels une entreprise doit souscrire l\'offre Pro ou Mega de Midjourney pour posséder ses créations (conditions en vigueur depuis le 27 mai 2026)', 'source' => 'Midjourney, conditions d\'utilisation', 'url' => 'https://docs.midjourney.com/hc/en-us/articles/32083055291277-Terms-of-Service'],
                ['valeur' => 'Environ 7 fois', 'libelle' => 'Part de son revenu qu\'un abonné d\'une économie à revenu intermédiaire de la tranche inférieure consacre à un forfait de données mobiles, comparée à celle d\'un abonné d\'une économie à revenu élevé ; environ 22 fois plus dans les économies à faible revenu (15 octobre 2025)', 'source' => 'UIT, Facts and Figures 2025, accessibilité financière', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-affordability-of-ict-services/'],
                ['valeur' => '6 février 2024', 'libelle' => 'Annonce par Meta de l\'obligation de signaler, sur Facebook, Instagram et Threads, toute vidéo photoréaliste ou tout son réaliste créé ou modifié numériquement', 'source' => 'Meta, Labeling AI-Generated Images on Facebook, Instagram and Threads', 'url' => 'https://about.fb.com/news/2024/02/labeling-ai-generated-images-on-facebook-instagram-and-threads/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Connexion, langues, images de personnes : que change le contexte local pour une équipe qui produit ?',
            'paragraphes' => [
                'La donnée mobile coûte cher, et la vidéo en consomme beaucoup. Selon les « Facts and Figures 2025 » de l\'Union internationale des télécommunications, publiés le 15 octobre 2025, un abonné d\'une économie à revenu intermédiaire de la tranche inférieure consacre environ sept fois plus de son revenu à un forfait de données mobiles qu\'un abonné d\'une économie à revenu élevé. La formation en tire des habitudes : générer et télécharger sur la connexion du bureau, préparer scripts et textes hors ligne, exporter des vidéos courtes et compressées, et garder les fichiers d\'origine sur un disque partagé plutôt que de les télécharger à nouveau.',
                'Les langues ensuite. Les outils rédigent bien en français et en anglais, beaucoup moins bien en fon, en yoruba, en dioula, en wolof ou en lingala, et leurs voix de synthèse prononcent mal les noms de quartiers et de plats locaux. Pour un statut ou une vidéo dans une langue nationale, la règle enseignée est d\'enregistrer une vraie voix, ou de faire relire le texte par un locuteur avant toute publication. Même en français, les tournures proposées par défaut sont celles de France : le guide de voix sert aussi à garder les expressions que les clients de Cotonou, d\'Abidjan ou de Dakar reconnaissent.',
                'Les images de personnes enfin. Au Bénin, la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 du 20 avril 2018 portant code du numérique</a> exige, à son article 383, des données collectées pour des finalités déterminées, explicites et légitimes, et pose à l\'article 384 un principe de transparence envers les personnes. Selon l\'article 389, le consentement rend le traitement légitime, et l\'article 390 oblige le responsable à pouvoir le démontrer, la personne pouvant le retirer à tout moment. Transformer la photo d\'une cliente en visuel publicitaire est une nouvelle finalité : l\'autorisation écrite est recueillie avant, et conservée.',
                'En Europe, le RGPD encadre les mêmes gestes, et la <a href="https://www.cnil.fr/fr/cnil-direct/question/le-droit-limage-sapplique-t-il-sur-internet">CNIL</a> rappelle que chacun dispose sur son image d\'un droit exclusif et absolu, et peut s\'opposer à sa reproduction sans autorisation préalable. Pour une entreprise établie dans l\'Union, l\'article 4 du règlement sur l\'IA demande en outre des mesures de maîtrise de l\'IA pour le personnel qui s\'en sert, contrôlées depuis le 3 août 2026 selon les <a href="https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers">questions et réponses de la Commission européenne</a> mises à jour le 27 juillet 2026. Côté outils, les prix s\'affichent en dollars ou en euros, et certaines fonctions varient selon le pays : la retouche de vidéos importées dans Gemini, par exemple, n\'est pas proposée dans l\'Espace économique européen.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi apprendre à créer du contenu avec l\'IA auprès de Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il produit lui-même des contenus avec ces outils pour ses propres sites et pour ceux de ses clients, et il en connaît les limites pour les avoir rencontrées : chiffres inventés, visuels trop beaux pour être vrais, conditions d\'utilisation qui changent d\'une offre à l\'autre. Il a créé <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle pour les entreprises d\'Afrique francophone, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>. Formé à ' . fait('formation')['nom'] . ' (' . fait('formation')['annee'] . '), il compte ' . $ans . ' ans d\'expérience dans le numérique et déclare avoir formé plus de ' . rtrim((string) fait('personnes_formees'), '+') . ' personnes au numérique, à l\'IA, à l\'automatisation et aux ERP.',
                'Il a travaillé dans ' . count((array) fait('pays_travailles')) . ' pays, du Bénin, du Togo et du Sénégal au Gabon et à la RD Congo, et jusqu\'en France, en Belgique, en Suisse et au Canada, ce qui l\'oblige à connaître à la fois les usages des commerçants qui vendent sur WhatsApp et les règles européennes de transparence. Il n\'est ni certifié par OpenAI, Google, Adobe, Canva ou Midjourney, ni partenaire de ces éditeurs : il peut donc recommander l\'outil gratuit quand il suffit, et dire franchement quand une offre ne couvre pas l\'usage prévu.',
                'Sa façon de former se vérifie : une réponse sous 24 heures, des exercices sur vos produits et vos canaux, une évaluation sur une mini-campagne réelle, des documents qui restent à l\'entreprise, aucun chiffre de résultat promis. Son parcours est présenté sur la page <a href="/richard-salanon">Richard SALANON</a>, les pays servis sur celle des <a href="/zones/">zones d\'intervention</a>, et les autres formations du domaine sur la page <a href="/formations/domaine/intelligence-artificielle">formations en intelligence artificielle</a>. Pour une équipe qui vend en ligne, la formation <a href="/formations/e-commerce">Vendre en ligne</a> prolonge ce travail ; pour un site dont les pages doivent mieux se positionner, le service de <a href="/services/referencement-naturel-seo">référencement naturel</a> prend le relais.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant d\'inscrire votre équipe ?',
            'texte' => 'Écrivez d\'abord la voix et les faits de la marque, laissez l\'IA préparer mais jamais publier, vérifiez chaque chiffre et chaque promesse, lisez les conditions de l\'outil et de l\'offre avant tout usage commercial, photographiez ce que le client achète, et signalez un contenu généré dès qu\'une règle le demande ou qu\'un doute existe.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre équipe veut-elle produire plus de contenus sans perdre la confiance de vos clients ?',
            'texte'  => 'Indiquez le nombre de personnes, leurs fonctions, les canaux sur lesquels vous publiez, deux contenus récents et le format souhaité : vous recevez une réponse sous 24 heures, puis une proposition de programme bâtie sur vos produits et un devis.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander la formation contenu et IA'],
        ],
    ],

    'faq' => [
        ['q' => 'Faut-il savoir dessiner ou monter des vidéos pour suivre la formation ?', 'r' => 'Non. Les outils utilisés se pilotent par des demandes écrites et des modèles de mise en page. Il faut savoir publier sur au moins un réseau et avoir déjà essayé un assistant d\'IA. Le montage vertical s\'apprend en séance, sur le téléphone ou l\'ordinateur de chaque participant.'],
        ['q' => 'Les images générées appartiennent-elles à l\'entreprise ?', 'r' => 'Cela dépend de l\'outil et de l\'offre. OpenAI et Canva attribuent le résultat à l\'utilisateur dans la mesure permise par le droit, avec des exceptions chez Canva pour les éléments de sa bibliothèque. Midjourney exige qu\'une entreprise de plus d\'un million de dollars de revenus annuels souscrive l\'offre Pro ou Mega pour en être propriétaire. La formation apprend à lire ces clauses et à tenir un registre.'],
        ['q' => 'Faut-il toujours indiquer qu\'un contenu a été généré par l\'IA ?', 'r' => 'Pas toujours. YouTube, TikTok et Meta demandent de signaler les contenus réalistes, le règlement européen sur l\'IA les hypertrucages, et la France la mention « Images virtuelles » pour un visage ou une silhouette générés en influence commerciale. Un texte relu sous responsabilité éditoriale n\'a pas besoin de mention au titre de l\'article 50. Dans le doute, on signale.'],
        ['q' => 'Peut-on partir des photos de nos clients ou de nos salariés ?', 'r' => 'Seulement avec leur autorisation écrite, recueillie avant et conservée. Au Bénin, la loi n° 2017-20 demande au responsable de pouvoir démontrer le consentement ; en Europe, la CNIL rappelle que chacun peut s\'opposer à la reproduction de son image sans autorisation préalable. Sans accord, on utilise des illustrations clairement non réalistes.'],
        ['q' => 'L\'IA peut-elle rédiger des témoignages ou des avis de clients ?', 'r' => 'Non. Un témoignage inventé trompe le lecteur, même accompagné d\'une mention, et les conditions d\'OpenAI interdisent de présenter une sortie comme écrite par un humain. L\'IA peut aider à mettre en forme un vrai témoignage, avec l\'accord de son auteur et sans en changer le sens.'],
        ['q' => 'Quels outils utilise-t-on pendant la formation ?', 'r' => 'ChatGPT ou Gemini pour les textes et une partie des visuels, Canva pour la mise en page, Adobe Firefly ou Midjourney pour les images selon le cadrage, CapCut ou Canva pour le montage, et, en démonstration, une voix de synthèse et un générateur de musique. Les outils déjà en place dans l\'entreprise passent en premier.'],
        ['q' => 'Faut-il acheter des abonnements avant la session ?', 'r' => 'Non. Les offres gratuites suffisent pour tous les exercices. Certaines ne permettent pas l\'usage commercial : ElevenLabs et Suno réservent la licence commerciale à leurs offres payantes. Les abonnements se décident après la formation, selon les outils réellement utilisés et l\'usage prévu.'],
        ['q' => 'Quelle différence avec les formations Prompt engineering et LinkedIn et réseaux sociaux ?', 'r' => 'Le prompt engineering apprend à écrire des consignes fiables et à évaluer les réponses, quel que soit le métier. LinkedIn et réseaux sociaux porte sur les profils, les pages et le rythme de publication. Cette formation porte sur la production elle-même : textes, visuels, vidéos, déclinaisons, faits, droits et mentions.'],
        ['q' => 'La formation peut-elle se faire entièrement à distance ?', 'r' => 'Oui, en six séances de deux heures et demie sur trois semaines, avec partage d\'écran et production entre les séances. Le tournage des vidéos se fait alors sur place par les participants, et la relecture a lieu en début de séance suivante.'],
        ['q' => 'Combien coûte la formation, et un fonds peut-il la financer ?', 'r' => 'Le prix est fixé sur devis, selon le nombre de participants, le format, les canaux et les langues à couvrir, la préparation et le suivi retenu. Le FDFP, le FODEFCA, le 3FPT ou un OPCO appliquent leurs propres règles, et Richard SALANON n\'a ni certification Qualiopi ni agrément d\'un fonds : aucune prise en charge n\'est garantie.'],
        ['q' => 'Comment garder une voix propre à la marque quand tout le monde utilise les mêmes outils ?', 'r' => 'Avec un guide de voix écrit, trois contenus de référence joints à chaque demande, des détails que seule l\'entreprise connaît, et une part de contenus écrits entièrement à la main. La réécriture humaine du premier jet est l\'exercice le plus long de la formation.'],
        ['q' => 'Reçoit-on une attestation à la fin ?', 'r' => 'Oui, une attestation nominative par participant, avec le programme, le guide de voix, la fiche des faits, la fiche de validation, le registre des ressources générées et les contenus produits pendant la session. Ce n\'est ni un diplôme ni une certification d\'éditeur.'],
    ],

    'sources' => [
        ['titre' => 'OpenAI, conditions d\'utilisation pour les particuliers hors Espace économique européen, Suisse et Royaume-Uni (en vigueur le 1er janvier 2026)', 'url' => 'https://openai.com/fr-FR/policies/row-terms-of-use/', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, centre d\'aide : signaux de provenance (Content Credentials, SynthID) des contenus générés', 'url' => 'https://help.openai.com/en/articles/8912793-provenance-signals-content-credentials-synthid-in-openai-generated-content', 'date' => '2026-10-05'],
        ['titre' => 'OpenAI, tarifs de ChatGPT (page en français)', 'url' => 'https://chatgpt.com/fr-FR/pricing/', 'date' => '2026-10-05'],
        ['titre' => 'Canva, conditions des produits d\'IA (en vigueur le 26 juin 2026)', 'url' => 'https://www.canva.com/policies/ai-product-terms/', 'date' => '2026-10-05'],
        ['titre' => 'Canva, abonnements et tarifs (page en français)', 'url' => 'https://www.canva.com/fr_fr/tarification/', 'date' => '2026-10-05'],
        ['titre' => 'Adobe, formules Firefly et FAQ sur l\'usage commercial', 'url' => 'https://www.adobe.com/fr/products/firefly/plans.html', 'date' => '2026-10-05'],
        ['titre' => 'Midjourney, conditions d\'utilisation (en vigueur le 27 mai 2026)', 'url' => 'https://docs.midjourney.com/hc/en-us/articles/32083055291277-Terms-of-Service', 'date' => '2026-10-05'],
        ['titre' => 'Midjourney, comparaison des formules', 'url' => 'https://docs.midjourney.com/hc/en-us/articles/27870484040333-Comparing-Midjourney-Plans', 'date' => '2026-10-05'],
        ['titre' => 'Aide Gemini, gérer les paramètres de filigrane (SynthID et Content Credentials)', 'url' => 'https://support.google.com/gemini/answer/17405358?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide Gemini, générer des vidéos avec les applications Gemini', 'url' => 'https://support.google.com/gemini/answer/16126339?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Google, forfaits Google AI (prix affichés en euros)', 'url' => 'https://gemini.google/subscriptions/', 'date' => '2026-10-05'],
        ['titre' => 'CapCut, conditions d\'utilisation (mises à jour le 15 avril 2026)', 'url' => 'https://www.capcut.com/clause/terms-of-service', 'date' => '2026-10-05'],
        ['titre' => 'ElevenLabs, tarifs et licence commerciale', 'url' => 'https://elevenlabs.io/fr/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Suno, formules et droits commerciaux', 'url' => 'https://suno.com/pricing', 'date' => '2026-10-05'],
        ['titre' => 'Aide YouTube, signaler l\'utilisation de contenus d\'IA générative', 'url' => 'https://support.google.com/youtube/answer/14328491?hl=fr', 'date' => '2026-10-05'],
        ['titre' => 'Aide TikTok, à propos des contenus générés par l\'IA', 'url' => 'https://www.tiktok.com/support/faq_detail?id=7636670084747893268', 'date' => '2026-10-05'],
        ['titre' => 'Meta, Labeling AI-Generated Images on Facebook, Instagram and Threads (6 février 2024)', 'url' => 'https://about.fb.com/news/2024/02/labeling-ai-generated-images-on-facebook-instagram-and-threads/', 'date' => '2026-10-05'],
        ['titre' => 'AI Act Service Desk, article 50 du règlement sur l\'IA, version consolidée au 27 juillet 2026', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-50', 'date' => '2026-10-05'],
        ['titre' => 'AI Act Service Desk, article 111 (mesures transitoires, paragraphe 4)', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-111', 'date' => '2026-10-05'],
        ['titre' => 'AI Act Service Desk, article 113 (entrée en vigueur et application)', 'url' => 'https://ai-act-service-desk.ec.europa.eu/en/ai-act/article-113', 'date' => '2026-10-05'],
        ['titre' => 'Commission européenne, maîtrise de l\'IA : questions et réponses sur l\'article 4 (mise à jour du 27 juillet 2026)', 'url' => 'https://digital-strategy.ec.europa.eu/en/faqs/ai-literacy-questions-answers', 'date' => '2026-10-05'],
        ['titre' => 'Ministère de l\'Économie, influenceurs : quels sont mes devoirs ? (mentions « Images retouchées » et « Images virtuelles »)', 'url' => 'https://www.economie.gouv.fr/influenceurs-quels-sont-mes-devoirs', 'date' => '2026-10-05'],
        ['titre' => 'CNIL, le droit à l\'image s\'applique-t-il sur internet ?', 'url' => 'https://www.cnil.fr/fr/cnil-direct/question/le-droit-limage-sapplique-t-il-sur-internet', 'date' => '2026-10-05'],
        ['titre' => 'Eurostat, 20 % des entreprises de l\'UE utilisent l\'IA (11 décembre 2025)', 'url' => 'https://ec.europa.eu/eurostat/web/products-eurostat-news/w/ddn-20251211-2', 'date' => '2026-10-05'],
        ['titre' => 'UIT, Facts and Figures 2025 : accessibilité financière des services TIC (15 octobre 2025)', 'url' => 'https://www.itu.int/itu-d/reports/statistics/2025/10/15/ff25-affordability-of-ict-services/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 383, 384, 389 et 390)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-05'],
        ['titre' => 'FDFP, plan de formation des entreprises', 'url' => 'https://fdfp.ci/plan-de-formation/', 'date' => '2026-10-05'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, décret n° 2022-286 du 11 mai 2022 portant approbation des statuts du FODEFCA', 'url' => 'https://sgg.gouv.bj/doc/decret-2022-286/', 'date' => '2026-10-05'],
        ['titre' => '3FPT, guichets de financement', 'url' => 'https://www.3fpt.sn/', 'date' => '2026-10-05'],
        ['titre' => 'France Compétences, Qualiopi : l\'obligation qualité en vigueur depuis le 1er janvier 2022', 'url' => 'https://www.francecompetences.fr/fiche/qualiopi-lobligation-qualite-en-vigueur-depuis-le-1er-janvier-2022/', 'date' => '2026-10-05'],
    ],

    'liens' => [
        'formations'  => ['prompt-engineering', 'linkedin-reseaux-sociaux', 'seo-contenu', 'ia-ethique-conformite', 'ia-en-entreprise', 'referencement-ia-geo'],
        'services'    => ['referencement-naturel-seo', 'formation-en-entreprise'],
        'comparatifs' => ['chatgpt-vs-claude-vs-gemini'],
    ],
];
