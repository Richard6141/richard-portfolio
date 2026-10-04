<?php
// ============================================================
// data/services/refonte-migration-de-site.php · Pilier « Refonte et
// migration de site » (vague 1A). Le slug existait en base : la fiche de
// production (relue le 04/10/2026) donnait le tarif « sur devis » et les
// inclus (audit de l'existant, nouveau design, migration sans perte SEO,
// reprise des contenus, redirections 301, suivi de l'indexation) ; tout est
// repris, réécrit et enrichi. Faits externes relevés le 04/10/2026 sur Google
// Search Central, l'aide Search Console, web.dev, le W3C, WordPress,
// WooCommerce, Shopify, Wix, le SGG du Bénin et la CNIL.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'Refonte et migration de site : un site neuf, plus rapide et lisible sur mobile, sans perdre le référencement ni les données',
    'title'   => 'Refonte et migration de site, SEO préservé | Richard SALANON',
    'meta'    => 'Refonte et migration de site sans perdre le référencement ni les données : inventaire des URL, redirections 301, préproduction, bascule et suivi.',
    'en_bref' => 'Une refonte avec migration remplace un site vieillissant, lent ou mal adapté au mobile par un site neuf, et déplace au passage ce qui doit l\'être : changement de CMS, de nom de domaine, d\'hébergeur ou passage en HTTPS, sans perdre les positions sur Google ni les produits, commandes, clients et articles. Elle s\'adresse aux PME, commerces, boutiques en ligne, écoles, cabinets et ONG d\'Afrique francophone, d\'Europe et du Canada dont le site existe déjà et rapporte, même un peu. Comptez 2 à 3 semaines pour un site vitrine et 4 à 10 semaines pour une boutique ou un site de plusieurs centaines de pages, puis trois mois de suivi. Le prix est fixé sur devis, après l\'inventaire de l\'existant.',
    'publie'  => '2026-10-04',
    'maj'     => '2026-10-04',
    'famille' => 'Sites et boutiques',
    'matrice' => false,

    'faits_hero' => [
        ['l' => 'Délai', 'v' => '2 à 3 semaines pour un site vitrine, 4 à 10 semaines pour une boutique ou un gros site, puis 3 mois de suivi'],
        ['l' => 'Pour qui', 'v' => 'PME, boutiques en ligne, écoles, cabinets et ONG dont le site existe déjà, en Afrique et en Europe'],
        ['l' => 'Livrables', 'v' => 'Inventaire des URL, plan de redirections, site en préproduction, données migrées, rapport de suivi'],
        ['l' => 'Réponse', 'v' => 'sous 24 heures'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Que recouvre une refonte avec migration, et qu\'est-ce qui n\'en fait pas partie ?',
            'paragraphes' => [
                'Deux chantiers se cachent derrière ce service, et ils se mènent ensemble. La refonte change ce que le visiteur voit et ressent : la maquette, la navigation, la vitesse, la lecture sur téléphone, le contraste, les formulaires. La migration change ce qui est sous le capot : le logiciel qui fait tourner le site (le CMS), le nom de domaine, le serveur, le protocole. Une refonte sans migration existe, une migration sans refonte aussi, mais la plupart des demandes combinent les deux, parce qu\'un site qu\'on redessine est souvent un site qu\'on veut sortir d\'une plateforme qui ne convient plus.',
                'Les cas les plus fréquents sont connus : un site WordPress devenu ingérable qu\'on reconstruit sur mesure en Laravel, ou l\'inverse, un site sur mesure dont plus personne ne sait modifier le code et qu\'on ramène vers WordPress ; une boutique Wix ou Shopify qu\'on rapatrie sur WordPress et WooCommerce pour maîtriser ses coûts et ses moyens de paiement ; un changement de nom de domaine après une fusion ou un changement de marque ; un hébergeur trop lent ou trop cher qu\'on quitte ; un site encore servi en HTTP qu\'on passe enfin en HTTPS.',
                'Dans chacun de ces cas, le travail commence par ce qui existe déjà : l\'inventaire des adresses, du trafic, des contenus qui rapportent et des données à reprendre. C\'est la différence avec une création. Si vous n\'avez pas encore de site, la bonne porte est un <a href="/services/site-vitrine-professionnel">site vitrine professionnel</a> ou un <a href="/services/site-e-commerce">site e-commerce</a>. Si le site actuel tient debout et ne souffre que de pages mal optimisées, un <a href="/services/audit-seo-complet">audit SEO complet</a> coûte moins cher qu\'une refonte et suffit parfois.',
                'Le service ne recouvre pas non plus le référencement des mois suivants, qui relève du <a href="/services/referencement-naturel-seo">référencement naturel</a>, ni la maintenance courante du nouveau site, qui relève d\'un contrat de <a href="/services/maintenance-support">maintenance et support</a>. Il prend fin quand le nouveau site est en ligne, que les anciennes adresses répondent toutes par une redirection ou un code d\'erreur voulu, que les données sont contrôlées et que trois mois de suivi ont confirmé que Google a bien suivi le déménagement.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'À quels signes voit-on qu\'un site doit être refondu ou migré ?',
            'intro' => 'Un site vieillit rarement d\'un coup. Les signaux s\'accumulent, chacun supportable, jusqu\'au jour où le site coûte plus qu\'il ne rapporte. Voici ceux qui reviennent le plus souvent dans les demandes ; deux ou trois suffisent à justifier un inventaire.',
            'items' => [
                ['titre' => 'Le téléphone trahit le site', 'texte' => 'Menus qui débordent, textes minuscules, boutons trop proches, tableaux coupés. Vos clients consultent d\'abord sur mobile, et Google aussi : un site pensé pour l\'écran d\'ordinateur de 2015 perd sur les deux tableaux.'],
                ['titre' => 'Chaque page met plusieurs secondes à apparaître', 'texte' => 'Thème chargé d\'animations, dizaines d\'extensions, images de plusieurs mégaoctets, hébergement saturé. Sur une connexion mobile ordinaire, le visiteur repart avant d\'avoir vu votre offre.'],
                ['titre' => 'Plus personne ne sait le modifier', 'texte' => 'Le prestataire d\'origine a disparu, le code n\'est pas documenté, la moindre correction d\'horaires demande un devis. Un site que vous ne pouvez plus faire évoluer finit par afficher des informations fausses.'],
                ['titre' => 'La plateforme vous enferme', 'texte' => 'Abonnement qui augmente, commission sur chaque vente, moyen de paiement local impossible à brancher, export de vos contenus refusé ou incomplet. Plus vous attendez, plus le contenu à sortir s\'alourdit.'],
                ['titre' => 'Le navigateur affiche « Non sécurisé »', 'texte' => 'Un site encore servi en HTTP, ou dont le certificat expire régulièrement, fait fuir les clients avant même la première ligne. Le passage en HTTPS est une migration à part entière, avec ses redirections.'],
                ['titre' => 'Le nom ou le domaine ne vous correspond plus', 'texte' => 'Changement de marque, fusion, extension de pays abandonnée, domaine d\'abord enregistré au nom d\'un ancien prestataire : changer d\'adresse se prépare comme un déménagement, pas comme un simple réglage.'],
                ['titre' => 'Le site n\'est plus maintenu', 'texte' => 'Version de PHP qui n\'est plus suivie, CMS bloqué sur une ancienne version parce qu\'une extension casse tout, thème abandonné par son auteur. Le risque de piratage grandit chaque mois.'],
                ['titre' => 'Les contre-signaux', 'texte' => 'Si le site est récent, rapide et bien structuré mais peu visité, le problème est le contenu ou le référencement, pas la plateforme. Une refonte ne remplace pas une stratégie : elle donne une meilleure base à celle que vous avez.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Changement de CMS, de domaine, d\'hébergeur ou passage en HTTPS : qu\'est-ce qui change, et où est le risque ?',
            'legende' => 'Typologie établie à partir des guides de migration de Google Search Central et de l\'aide de l\'outil Changement d\'adresse, consultés le 4 octobre 2026 ; un même projet combine souvent plusieurs lignes.',
            'entetes' => ['Type de migration', 'Ce qui change', 'Les adresses des pages changent-elles ?', 'Outil Changement d\'adresse', 'Risque principal'],
            'lignes'  => [
                ['Refonte sur la même plateforme', 'Maquette, navigation, contenus', 'Parfois, si l\'arborescence est revue', 'Non', 'Titres, textes ou liens internes réécrits à la hâte sur des pages qui se classaient bien'],
                ['Changement de CMS', 'Logiciel, base de données, gabarits', 'Presque toujours : chaque CMS a ses propres formats d\'adresse', 'Non, si le domaine reste le même', 'Contenus, images ou données oubliés à l\'export, adresses non redirigées'],
                ['Changement de nom de domaine', 'Toutes les adresses du site', 'Oui, toutes', 'Oui, pour chaque domaine et sous-domaine concerné', 'Redirections incomplètes, ancien domaine abandonné trop tôt, courriels coupés'],
                ['Passage de HTTP à HTTPS', 'Le protocole de chaque adresse', 'Oui, du point de vue de Google', 'Non : l\'outil ne gère pas ce cas', 'Contenu mixte, certificat qui expire, ancienne version HTTP encore accessible'],
                ['Changement d\'hébergeur', 'Serveur et enregistrements DNS', 'Non', 'Non', 'Coupure pendant la propagation DNS, courriels perdus si la zone DNS est mal recopiée'],
                ['Passage de www à sans www, ou l\'inverse', 'Le nom d\'hôte', 'Oui', 'Non : Google renvoie aux balises canoniques et aux redirections', 'Deux versions du site indexées en parallèle'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment se déroule une refonte avec migration, de l\'inventaire au suivi après bascule ?',
            'items' => [
                ['titre' => 'Premier échange et accès', 'duree' => 'Réponse sous 24 heures', 'texte' => 'Vous décrivez le site, ce qui ne va plus et ce que vous attendez du nouveau. Vous ouvrez ensuite les accès utiles, tous à votre nom : Search Console, outil de statistiques, administration du site, hébergement, bureau d\'enregistrement du domaine.'],
                ['titre' => 'Inventaire des URL, du trafic et des données', 'duree' => '2 à 5 jours', 'texte' => 'Exploration complète du site, lecture du sitemap, des journaux du serveur et des rapports de la Search Console, relevé des pages qui reçoivent des visites et des liens venus d\'autres sites, inventaire des bases à migrer : produits, commandes, clients, articles, formulaires, médias.'],
                ['titre' => 'Cadrage et arborescence cible', 'duree' => '2 à 5 jours', 'texte' => 'Choix de la plateforme, de l\'hébergement et de la date de bascule ; décision page par page : garder, fusionner, réécrire ou supprimer. La nouvelle arborescence garde les adresses qui marchent chaque fois que la plateforme le permet.'],
                ['titre' => 'Maquette et contenus', 'duree' => '1 à 3 semaines', 'texte' => 'Maquette pensée d\'abord pour le téléphone, gabarits, réécriture des textes faibles, sans toucher aux pages qui rapportent sans raison sérieuse. Vous validez sur écran réel, pas sur une image.'],
                ['titre' => 'Construction en préproduction', 'duree' => 'En parallèle de la maquette', 'texte' => 'Le nouveau site est monté sur une adresse de préproduction protégée par mot de passe, invisible pour Google. Balises, données structurées, formulaires, paiements en mode test et envois de courriels y sont réglés avant toute bascule.'],
                ['titre' => 'Migration des données et plan de redirections', 'duree' => '3 jours à 2 semaines selon le volume', 'texte' => 'Export, nettoyage et import des bases, avec comptages avant et après. En parallèle, chaque ancienne adresse reçoit sa destination dans un tableau unique : nouvelle page équivalente, ou code 410 si le contenu disparaît volontairement.'],
                ['titre' => 'Recette', 'duree' => '2 à 5 jours', 'texte' => 'Contrôle automatique de toutes les anciennes adresses contre le plan de redirections, test des parcours (commande, paiement, formulaire, compte client), mesure de la vitesse sur téléphone, vérification de l\'accessibilité. Vous recevez la liste des anomalies et leur correction.'],
                ['titre' => 'Bascule', 'duree' => 'Une fenêtre de quelques heures, à faible trafic', 'texte' => 'Gel des contenus et des commandes sur l\'ancien site, dernière synchronisation des données, mise en place des redirections, changement DNS, contrôles immédiats, déclaration du nouveau sitemap et, en cas de changement de domaine, demande de changement d\'adresse dans la Search Console.'],
                ['titre' => 'Suivi après bascule', 'duree' => '3 mois', 'texte' => 'Lecture régulière des erreurs 404, de la couverture d\'indexation, des positions et des clics ; correction des redirections oubliées ; contact des sites qui pointaient vers vos anciennes adresses. L\'ancien hébergement n\'est résilié qu\'une fois son trafic tombé à zéro.'],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que recevez-vous concrètement, et à quoi chaque livrable vous sert-il ?',
            'legende' => 'Livrables d\'une refonte avec migration ; leur liste exacte figure dans le devis, selon le type de migration.',
            'entetes' => ['Livrable', 'Contenu', 'Utilité pour vous'],
            'lignes'  => [
                ['Audit de l\'existant', 'Pages, trafic, liens entrants, contenus qui rapportent, problèmes techniques, données à reprendre', 'Savoir ce que vous risquez de perdre avant de décider quoi que ce soit'],
                ['Inventaire des URL', 'Tableau de toutes les adresses connues, avec leurs visites, leurs clics depuis Google et leurs liens entrants', 'Ne laisser aucune page utile sans destination'],
                ['Plan de redirections 301', 'Une ligne par ancienne adresse : destination, code de réponse, raison du choix', 'La preuve, page par page, que le référencement acquis est transmis'],
                ['Nouveau site', 'Maquette mobile d\'abord, gabarits, contenus repris et réécrits, formulaires, bouton WhatsApp, paiements le cas échéant', 'Un site plus rapide, plus lisible et que vous pouvez modifier vous-même'],
                ['Données migrées et contrôlées', 'Produits, commandes, clients, articles, médias, avec les comptages avant et après import', 'Aucune fiche, commande ou image perdue en route'],
                ['Balises et données structurées', 'Titres, descriptions, balises canoniques, hreflang si plusieurs langues, données structurées reprises ou corrigées', 'Garder l\'apparence de vos pages dans les résultats de recherche'],
                ['Procédure de bascule et de retour arrière', 'Ordre des opérations, horaires, responsables, conditions d\'abandon, étapes pour revenir à l\'ancien site', 'Une bascule sans improvisation, et une issue si quelque chose tourne mal'],
                ['Rapports de suivi', 'Erreurs 404, pages indexées, clics et positions comparés à la période d\'avant, actions menées', 'Voir que le déménagement a réussi, chiffres de votre Search Console à l\'appui'],
                ['Accès et documentation', 'Comptes administrateur, hébergement, domaine, dépôt du code, guide de mise à jour', 'Rester propriétaire de tout, et pouvoir changer de prestataire'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi l\'inventaire des URL et du trafic décide-t-il de tout le reste ?',
            'paragraphes' => [
                'Google ne classe pas un site, il classe des pages, chacune à son adresse. Chaque adresse a accumulé des signaux au fil des années : des liens venus d\'autres sites, des clics, une place dans les résultats pour certaines recherches. Une refonte qui change l\'adresse d\'une page sans dire à Google où elle est partie efface ces signaux. L\'inventaire sert à ne rien oublier, et il doit être fait avant de toucher au site, tant que l\'ancien est encore en ligne et lisible.',
                'Le <a href="https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes?hl=fr">guide de migration de Google Search Central</a>, mis à jour le 11 septembre 2026, cite trois sources pour retrouver les anciennes adresses : les sitemaps, les journaux du serveur et la Search Console. S\'y ajoutent une exploration complète du site par un robot, l\'outil de statistiques, la liste des liens entrants et, pour une boutique, l\'export du catalogue. Croiser ces sources fait remonter les pages que plus aucun menu n\'affiche mais que des clients atteignent encore depuis un vieil article, une affiche ou un message WhatsApp transféré.',
                'Chaque adresse reçoit ensuite des chiffres : visites des douze derniers mois, clics et impressions dans Google, nombre de sites qui la citent, conversions quand elles sont mesurées. Ce tri fait apparaître les contenus qui rapportent. Ce sont souvent quelques dizaines de pages sur plusieurs centaines, et ce ne sont pas toujours celles que l\'entreprise croit : une fiche pratique écrite en 2019, une page de tarifs, un article sur une démarche administrative. Ces pages-là gardent leur texte, leur adresse si possible, et leurs titres, sauf raison solide.',
                'Reste la décision page par page. Une page utile garde son adresse, ou en reçoit une nouvelle avec une redirection permanente. Deux pages qui se concurrencent sont fusionnées, et les deux anciennes adresses pointent vers la page fusionnée. Une page sans visite ni lien, ou dont le contenu n\'a plus de raison d\'être, peut disparaître : le guide de Google recommande alors de renvoyer un code 404 ou 410 pour les contenus supprimés, plutôt que de les rediriger vers une page sans rapport.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'À quoi ressemble un plan de redirections 301 tenu page par page ?',
            'legende' => 'Extrait type d\'un plan de redirections, avec des adresses fictives données à titre d\'exemple ; le vrai plan couvre toutes les adresses de l\'inventaire et sert à la recette automatique.',
            'entetes' => ['Ancienne adresse', 'Nouvelle adresse', 'Réponse', 'Raison'],
            'lignes'  => [
                ['/index.php?page=services', '/services/', '301', 'Même contenu, adresse plus lisible'],
                ['/nos-chambres.html', '/chambres/', '301', 'Page reprise à l\'identique, nouvelle structure'],
                ['/blog/2019/05/demarches-visa', '/guides/demarches-visa', '301', 'Article qui reçoit encore des visites et des liens : texte conservé'],
                ['/promo-noel-2021', 'Aucune', '410', 'Offre terminée, sans lien entrant ni visite'],
                ['/produit.php?id=482', '/boutique/sac-en-pagne-wax', '301', 'Fiche produit migrée, correspondance faite par la référence'],
                ['/agence-cotonou et /agence-lome', '/agences/', '301', 'Deux pages fusionnées en une seule'],
                ['http://ancien-domaine.com/contact', 'https://nouveau-domaine.com/contact', '301', 'Changement de domaine et de protocole en un seul saut'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que dit Google des redirections, et comment éviter les chaînes ?',
            'paragraphes' => [
                'La page <a href="https://developers.google.com/search/docs/crawling-indexing/301-redirects?hl=fr">Redirections et recherche Google</a>, mise à jour le 5 mai 2026, range les codes 301 et 308 parmi les redirections permanentes : Google y voit le signal que la page de destination devient la page de référence, celle qu\'il affichera. Les codes 302, 303 et 307 sont temporaires, et la page d\'origine reste alors indexée. La même page recommande les redirections côté serveur comme le meilleur moyen d\'envoyer à la bonne page à la fois Google et les visiteurs, et ne garde la redirection en JavaScript qu\'en dernier recours.',
                'Le guide de migration ajoute deux règles chiffrées. Une redirection doit mener directement à sa destination : trois sauts au plus dans l\'idéal, moins de cinq en dernier recours. Et les redirections doivent rester en place aussi longtemps que possible, en général au moins un an. Sur un site qui a déjà connu une refonte, c\'est là que les ennuis se cachent : l\'adresse de 2016 renvoie vers celle de 2020, qui renvoie vers celle de 2023. Le plan de redirections réécrit ces chaînes pour que chaque ancienne adresse, quelle que soit son époque, aille en un seul saut vers la page actuelle.',
                'En pratique, les redirections sont écrites dans la configuration du serveur (Apache, Nginx) ou dans le routage de l\'application, pas dans une extension qui ajoute une requête à la base de données à chaque visite. Pour un changement de domaine, l\'ancien domaine garde un hébergement minimal dont le seul rôle est de rediriger chaque adresse vers son équivalent, chemin compris. Rediriger tout l\'ancien domaine vers l\'accueil du nouveau est la faute la plus fréquente, et la plus coûteuse.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Pourquoi ne faut-il jamais rediriger toutes les anciennes pages vers l\'accueil ?',
            'texte' => 'C\'est la solution de facilité : une seule règle, et plus aucune erreur 404 visible. Mais le visiteur qui cherchait une fiche produit ou un article atterrit sur une page qui ne répond pas à sa question, et le signal accumulé par la page d\'origine ne trouve pas de destination équivalente. Le guide de migration de Google demande un mappage de chaque ancienne adresse vers sa nouvelle destination, et un code 404 ou 410 pour ce qui est supprimé. Une redirection n\'a de sens que vers un contenu qui remplace vraiment l\'ancien.',
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment se sert-on de l\'outil Changement d\'adresse de la Search Console ?',
            'paragraphes' => [
                'Quand le nom de domaine change, Google propose un outil dédié dans la Search Console. Son <a href="https://support.google.com/webmasters/answer/9370220?hl=fr">aide officielle</a> pose trois conditions : être propriétaire validé de l\'ancienne et de la nouvelle propriété avec le même compte Google, avoir mis en place des redirections 301 de l\'ancien site vers le nouveau, et travailler sur des propriétés de niveau domaine, pas sur un chemin comme exemple.com/boutique. Avant d\'accepter la demande, l\'outil vérifie la propriété et contrôle les redirections de quelques pages.',
                'Trois limites évitent bien des surprises. L\'outil ne migre aucun sous-domaine du domaine indiqué, pas même www : chaque variante se déclare à part. Il ne sert ni au passage de HTTP à HTTPS, ni au passage de www à sans www, ni aux déplacements de pages à l\'intérieur d\'un même domaine. Enfin, ses effets ont une durée : selon la même aide, le signal transmis reste actif pendant 180 jours, les redirections doivent être conservées au moins 180 jours, plus longtemps si l\'ancien site reçoit encore des visites, et l\'ancien domaine doit rester à vous pendant au moins un an pour qu\'un tiers ne le rachète pas.',
                'L\'outil ne remplace donc pas les redirections : il les complète. Le jour de la bascule, une fois les 301 actives et testées, la demande part depuis la propriété de l\'ancien domaine. Le nouveau sitemap est envoyé dans la propriété du nouveau domaine. Ensuite commence l\'attente : le guide de Google prévient que la visibilité peut fluctuer temporairement pendant une migration, et qu\'il faut en général quelques semaines pour que la majorité des pages d\'un site de petite ou moyenne taille soient prises en compte.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Comment préserver les balises, les données structurées et les contenus qui rapportent ?',
            'paragraphes' => [
                'Une page qui se classe bien doit son rang à un ensemble : son texte, son titre, ses intertitres, ses liens internes, ses images et ce que Google sait d\'elle grâce aux données structurées. La refonte peut changer la présentation de tout cela, pas le fond, sauf décision prise en connaissance de cause. Chaque page qui rapporte est donc reprise avec sa balise title, sa description, son titre principal, son texte et ses images, puis seulement améliorée là où l\'audit a relevé une faiblesse.',
                'Le guide de migration de Google fixe quelques exigences techniques sur le nouveau site. Chaque page de destination porte une balise canonique qui se désigne elle-même. Les annotations hreflang, sur un site en plusieurs langues, sont réécrites avec les nouvelles adresses. Les liens internes pointent directement vers les nouvelles adresses, au lieu de traverser des redirections. Le fichier robots.txt ne bloque pas les anciennes adresses : Google doit pouvoir les explorer pour découvrir leurs redirections.',
                'La <a href="https://developers.google.com/search/docs/crawling-indexing/mobile/mobile-sites-mobile-first-indexing?hl=fr">documentation de Google sur l\'indexation mobile</a>, mise à jour le 20 février 2026, rappelle que Google indexe et classe la version mobile des pages, explorée par son robot pour smartphone. Le nouveau site doit donc offrir sur téléphone le même contenu, les mêmes titres, les mêmes données structurées et les mêmes textes alternatifs d\'images que sur ordinateur. La même page conseille de garder les mêmes adresses d\'images lors d\'une migration, faute de quoi le trafic venu de la recherche d\'images peut baisser le temps que Google les retrouve.',
                'Les données structurées méritent un contrôle à part. Fil d\'Ariane, produit avec son prix et sa disponibilité, article avec sa date, organisation avec son adresse : si l\'ancien site les déclarait, le nouveau doit les déclarer aussi, et sans erreur. Elles sont vérifiées sur la préproduction, puis à nouveau sur le site en ligne, avec les outils de test de Google.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment migre-t-on produits, commandes, clients et articles selon la plateforme de départ ?',
            'legende' => 'Possibilités et limites relevées le 4 octobre 2026 dans la documentation de WordPress, de WooCommerce, de Shopify et de Wix ; chaque migration commence par un essai complet sur la préproduction.',
            'entetes' => ['Plateforme de départ', 'Ce qui s\'exporte bien', 'Limite documentée', 'Comment on la contourne'],
            'lignes'  => [
                ['WordPress, changement de domaine ou de serveur', 'Fichiers, base de données, médias', 'Selon la documentation de WordPress, un rechercher-remplacer brut sur la base casse les données sérialisées, et la colonne GUID ne doit jamais être modifiée', 'Commande wp search-replace de WP-CLI, colonne guid exclue, sur une copie d\'abord'],
                ['WooCommerce', 'Produits simples et variables, attributs, catégories, étiquettes, images par adresse', 'L\'importateur CSV intégré ne gère ni les commandes, ni les clients, ni les avis, ni le texte alternatif des images', 'Migration des commandes et des clients par l\'API ou par script, textes alternatifs repris à part'],
                ['Shopify', 'Produits en CSV, clients en CSV', 'Les images ne sont exportées que sous forme d\'adresses, et les mots de passe des clients ne peuvent pas être migrés', 'Ancienne boutique gardée ouverte jusqu\'à la fin de l\'import, invitation des clients à recréer leur mot de passe'],
                ['Wix', 'Produits de la boutique, contacts', 'L\'aide de Wix indique qu\'il n\'est pas possible, pour le moment, d\'exporter les posts du blog vers d\'autres plateformes', 'Reprise des articles par extraction des pages publiques, puis vérification une à une'],
                ['Site sur mesure en PHP ou Laravel', 'Tout ce que contient la base, si l\'on y a accès', 'Aucun format standard : le schéma de la base est propre à chaque site', 'Script de migration écrit pour ce site, rejoué autant de fois que nécessaire, comptages avant et après'],
                ['Site statique ou HTML ancien', 'Pages, images, documents', 'Contenus souvent dupliqués d\'une page à l\'autre, sans base de données', 'Extraction automatique, nettoyage, puis import dans le nouveau gestionnaire de contenu'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la migration des données se prépare-t-elle comme une opération comptable ?',
            'paragraphes' => [
                'Une boutique ne se résume pas à ses fiches produits. Elle porte l\'historique des commandes, les comptes clients, les adresses de livraison, les avis, les bons de réduction en cours, parfois des abonnements. Un site de contenus porte des centaines d\'articles, leurs catégories, leurs auteurs, leurs images et les documents joints. Chaque type de donnée a sa propre méthode d\'export, sa propre limite et son propre contrôle. Avant le premier import, chaque ensemble est donc compté : nombre de produits, de variantes, de commandes, de clients, d\'articles, de médias.',
                'Le même comptage est refait après chaque import sur la préproduction, et les écarts sont expliqués un par un : doublons supprimés volontairement, produits archivés, comptes de test. On contrôle aussi quelques fiches au hasard, de bout en bout : la commande n° 1 284 a-t-elle le bon client, les bons articles, le bon total, le bon statut ? La documentation de Shopify met en garde contre un détail que l\'on retrouve partout : trier un fichier d\'export dans un tableur peut dissocier les variantes et les adresses d\'images de leur produit. Les fichiers sont donc traités par script, jamais retouchés à la main.',
                'Les mots de passe posent un problème particulier. Ils sont stockés chiffrés par chaque plateforme, selon sa propre méthode, et l\'aide de Shopify indique qu\'on ne peut pas les migrer depuis une autre boutique : les clients doivent recréer le leur. Entre deux sites WordPress, ou vers un site sur mesure qui sait relire le format d\'origine, ils peuvent souvent être conservés. Quand ce n\'est pas possible, un message clair aux clients, envoyé au bon moment, évite une vague de demandes au service client.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Préproduction, bascule DNS et retour arrière : comment éviter la coupure ?',
            'paragraphes' => [
                'Le nouveau site ne se construit jamais sur le site en ligne. Il vit sur une adresse de préproduction, protégée par mot de passe pour que ni Google ni un client ne tombe dessus, avec une copie récente des vraies données. Les paiements y tournent en mode test, les courriels partent vers une boîte de contrôle, et les automatisations qui écrivent ailleurs (CRM, ERP, tableur) sont coupées. C\'est sur cette copie que se font la recette, les essais de migration et la répétition générale de la bascule.',
                'Quand la bascule passe par un changement d\'hébergeur, le DNS se prépare à l\'avance. La <a href="https://developers.google.com/search/docs/crawling-indexing/site-move-no-url-changes?hl=fr">page de Google sur le changement d\'hébergement</a>, mise à jour le 31 décembre 2025, conseille de réduire la durée de vie (TTL) des enregistrements DNS au moins une semaine avant, à quelques heures, pour que les caches se mettent à jour vite. Elle recommande de garder l\'ancien hébergement actif jusqu\'à ce que son trafic tombe à zéro, et prévient que l\'exploration de Google ralentit un temps après le changement avant de reprendre.',
                'La fenêtre de bascule est choisie au moment où le site reçoit le moins de visites, ce que les statistiques montrent heure par heure. Pour une boutique, les commandes sont gelées quelques minutes ou quelques heures sur l\'ancien site, le temps de la dernière synchronisation, avec un message clair aux visiteurs. Si le site doit être indisponible pendant ce temps, il répond par un code 503 : la <a href="https://developers.google.com/search/docs/crawling-indexing/http-network-errors?hl=fr">documentation de Google sur les codes HTTP</a>, mise à jour le 5 mars 2026, indique que les erreurs 5xx l\'invitent à ralentir temporairement l\'exploration, et que les adresses indexées ne sont retirées que si l\'erreur persiste.',
                'Le retour arrière est écrit avant la bascule, avec ses conditions : paiement qui échoue, données incomplètes, erreur de redirection massive. L\'ancien site reste intact sur son serveur, sa base n\'est pas effacée, et l\'ancienne zone DNS est sauvegardée. Revenir en arrière consiste alors à rétablir les anciens enregistrements et à reporter dans l\'ancien site les commandes prises entre-temps. Une bascule qui n\'a pas de chemin de retour n\'est pas une bascule préparée.',
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Que vérifie-t-on dans l\'heure qui suit la bascule ?',
            'items' => [
                'Le nouveau site répond en HTTPS sur toutes ses variantes, avec un certificat valide, et la version HTTP redirige en un seul saut.',
                'Un échantillon d\'anciennes adresses, puis la liste complète, renvoie le bon code et la bonne destination, sans chaîne de redirections.',
                'La protection par mot de passe et la balise noindex de la préproduction ont bien disparu du site en ligne.',
                'Le fichier robots.txt autorise l\'exploration, et le nouveau sitemap ne contient que des adresses qui répondent 200.',
                'Une commande réelle de faible montant passe, du panier au paiement par mobile money ou par carte, jusqu\'au courriel de confirmation.',
                'Les formulaires arrivent dans la bonne boîte, et le bouton WhatsApp ouvre la bonne conversation.',
                'Les enregistrements MX, SPF et DKIM sont intacts : les courriels de l\'entreprise partent et arrivent comme avant.',
                'L\'outil de statistiques enregistre les visites sur le nouveau site, et la Search Console est vérifiée pour chaque propriété.',
                'En cas de changement de domaine, la demande de changement d\'adresse est envoyée et acceptée.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que surveille-t-on pendant les semaines qui suivent la bascule ?',
            'paragraphes' => [
                'Les premiers jours servent à repérer ce qui a échappé à la recette. Le rapport d\'indexation de la Search Console fait apparaître les adresses en erreur 404 que l\'inventaire n\'avait pas trouvées : vieux liens dans des courriels, documents imprimés, profils sur des annuaires. Chacune reçoit sa redirection si elle a une destination légitime. Le rapport des sitemaps montre combien d\'adresses nouvelles sont découvertes et indexées, et la baisse des anciennes adresses dans l\'index confirme que Google suit les redirections.',
                'Ensuite viennent les positions et les clics. Le rapport sur les performances compare, requête par requête et page par page, la période d\'après à la même période d\'avant. Une baisse temporaire est attendue, Google le dit lui-même ; une baisse qui s\'installe sur une page précise signale un problème précis : redirection vers une page moins pertinente, texte trop raccourci, balise canonique erronée. C\'est là que le plan de redirections, tenu ligne par ligne, permet de corriger vite.',
                'Le suivi dure trois mois. Pendant ce temps, les sites qui citaient vos anciennes adresses sont contactés pour mettre leurs liens à jour, comme le recommande le guide de Google, en commençant par ceux qui envoient du trafic. Vos profils sur les réseaux sociaux, votre fiche Google Business Profile, vos signatures de courriel et vos campagnes publicitaires reçoivent la nouvelle adresse. L\'ancien hébergement est résilié quand ses journaux ne montrent plus de visites, jamais avant.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Sur quelles technologies reconstruire le site, et pourquoi ces choix ?',
            'legende' => 'Technologies utilisées par Richard SALANON ; le choix se fait au cadrage, d\'après le site de départ, le budget de maintenance et qui modifiera le contenu.',
            'entetes' => ['Technologie', 'Quand elle s\'impose', 'Ce qu\'elle apporte à une migration', 'Ce qu\'il faut savoir'],
            'lignes'  => [
                ['WordPress', 'Site de contenus, équipe qui publie elle-même, budget serré', 'Importateurs nombreux, éditeur connu, extensions de redirection et de balises', 'Peu d\'extensions, bien choisies : chacune est une mise à jour de plus à suivre'],
                ['WooCommerce', 'Boutique qui sort de Wix ou de Shopify, paiement mobile money à brancher', 'Catalogue importable en CSV, extensions de paiement locales, aucune commission de la plateforme', 'Commandes et clients se migrent à part, par l\'API ou par script'],
                ['Laravel et PHP sur mesure', 'Site avec des règles métier, espace client, catalogue complexe, ancien site sur mesure', 'Contrôle total des adresses, des redirections dans le routage, des balises et des données structurées', 'Tout se code : sitemap, canonique, redirections ; le code est livré dans un dépôt à votre nom'],
                ['Vue ou React', 'Interfaces riches : configurateur, tableau de bord, recherche instantanée', 'Expérience fluide sur les parties interactives du site', 'Les pages destinées à Google sont rendues côté serveur, pour qu\'il lise le contenu sans exécuter de JavaScript'],
                ['Node.js', 'Outils de migration, scripts d\'extraction, services en temps réel', 'Scripts qui lisent l\'ancien site et alimentent le nouveau, rejouables à volonté', 'Sert à l\'outillage autant qu\'au site lui-même'],
                ['n8n ou Make', 'Formulaires, commandes ou contacts à relier à un CRM, à WhatsApp ou à un tableur', 'Raccordements recréés vers le nouveau site sans code spécifique', 'Chaque scénario pointant vers l\'ancienne adresse est à réécrire avant la bascule'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Que gagne-t-on à refondre : vitesse, mobile, accessibilité, sécurité ?',
            'paragraphes' => [
                'La vitesse se mesure, et la refonte se fixe des objectifs chiffrés. Selon l\'article de <a href="https://web.dev/articles/vitals?hl=fr">web.dev sur les signaux web essentiels</a>, publié par Google et mis à jour le 31 octobre 2024, une page offre une bonne expérience quand l\'affichage de son plus grand élément (LCP) survient en 2,5 secondes au plus, que sa réponse aux interactions (INP) reste sous 200 millisecondes et que sa stabilité visuelle (CLS) ne dépasse pas 0,1, au 75e centile des visites. Ces trois seuils servent de critères de recette, mesurés sur téléphone.',
                'L\'accessibilité profite à tout le monde, à commencer par les visiteurs qui lisent en plein soleil sur un petit écran. Les <a href="https://www.w3.org/TR/WCAG22/">règles WCAG 2.2 du W3C</a>, recommandation du 12 décembre 2024, demandent un contraste d\'au moins 4,5 pour 1 pour le texte courant et de 3 pour 1 pour les grands textes, des cibles tactiles d\'au moins 24 pixels CSS de côté au niveau AA, et une alternative textuelle pour chaque image porteuse d\'information. Une refonte est le meilleur moment pour les appliquer : les reprendre sur un site existant coûte bien plus cher.',
                'La sécurité, enfin, a changé de statut. Le <a href="https://security.googleblog.com/2025/10/https-by-default.html">blog de sécurité de Google</a> a annoncé le 28 octobre 2025 qu\'avec Chrome 154, en octobre 2026, le réglage « Toujours utiliser des connexions sécurisées » serait activé par défaut : Chrome demandera la permission de l\'utilisateur avant le premier accès à tout site public sans HTTPS. Un site encore en HTTP affiche donc désormais un avertissement avant même d\'apparaître. Le passage en HTTPS fait partie de chaque refonte, redirections comprises.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels repères officiels encadrent une migration réussie ?',
            'items' => [
                ['valeur' => '1 an', 'libelle' => 'Durée minimale habituelle de maintien des redirections, à garder aussi longtemps que possible', 'source' => 'Google Search Central, migrer un site avec changement d\'URL', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes?hl=fr'],
                ['valeur' => '180 jours', 'libelle' => 'Durée pendant laquelle le signal de l\'outil Changement d\'adresse reste actif', 'source' => 'Aide Search Console, outil Changement d\'adresse', 'url' => 'https://support.google.com/webmasters/answer/9370220?hl=fr'],
                ['valeur' => '3 sauts', 'libelle' => 'Nombre maximal de redirections enchaînées recommandé dans l\'idéal, moins de 5 en dernier recours', 'source' => 'Google Search Central, migrer un site avec changement d\'URL', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes?hl=fr'],
                ['valeur' => '1 semaine', 'libelle' => 'Délai minimal pour réduire la durée de vie des enregistrements DNS avant un changement d\'hébergeur', 'source' => 'Google Search Central, changement d\'hébergement', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/site-move-no-url-changes?hl=fr'],
                ['valeur' => '2,5 s', 'libelle' => 'Seuil du LCP pour une bonne expérience, mesuré au 75e centile des visites', 'source' => 'web.dev, signaux web essentiels', 'url' => 'https://web.dev/articles/vitals?hl=fr'],
                ['valeur' => 'Octobre 2026', 'libelle' => 'Chrome 154 avertit par défaut avant d\'ouvrir un site public sans HTTPS', 'source' => 'Google, blog de sécurité', 'url' => 'https://security.googleblog.com/2025/10/https-by-default.html'],
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'À quoi ressemble une refonte avec migration selon votre secteur ?',
            'items' => [
                ['secteur' => 'Hôtellerie et tourisme, Cotonou ou Saly', 'probleme' => 'Un site Wix monté il y a des années, lent sur téléphone, avec un blog de conseils de voyage qui attire encore des visiteurs de la diaspora.', 'solution' => 'Reconstruction sur WordPress, pages de chambres reprises avec leurs textes et leurs photos, articles du blog extraits un par un faute d\'export possible, redirections de chaque ancienne adresse, réservation par WhatsApp et formulaire, suivi des positions sur les recherches de séjour.'],
                ['secteur' => 'Commerce en ligne, Abidjan ou Douala', 'probleme' => 'Une boutique Shopify dont l\'abonnement et les frais pèsent, sans moyen de paiement mobile money local, avec plusieurs centaines de fiches produits.', 'solution' => 'Migration vers WooCommerce : catalogue importé en CSV, images récupérées avant la fermeture de l\'ancienne boutique, clients invités à recréer leur mot de passe, agrégateur de paiement local branché et testé, redirection de chaque fiche par sa référence.'],
                ['secteur' => 'Établissement d\'enseignement, Dakar ou Lomé', 'probleme' => 'Un vieux site PHP écrit sur mesure, sans documentation, que personne n\'ose plus modifier, avec des pages de formations et des documents d\'inscription très consultés.', 'solution' => 'Reconstruction en Laravel avec un espace d\'administration simple, script de migration des formations et des actualités, documents repris à adresse identique quand c\'est possible, plan de redirections pour le reste et formation de l\'équipe administrative à la mise à jour.'],
                ['secteur' => 'Cabinet de conseil, Paris ou Bruxelles', 'probleme' => 'Un changement de nom et de domaine après une fusion, avec deux sites à réunir en un seul et des articles d\'expertise qui apportent des demandes.', 'solution' => 'Inventaire des deux sites, fusion des pages en doublon, redirections 301 des deux anciens domaines vers les pages équivalentes, demande de changement d\'adresse pour chaque domaine et sous-domaine, contact des sites partenaires pour mettre à jour leurs liens.'],
                ['secteur' => 'ONG et associations, Afrique de l\'Ouest et Europe', 'probleme' => 'Un site en HTTP chez un hébergeur saturé, des rapports annuels en PDF cités par des bailleurs, et des campagnes de dons qui pointent vers d\'anciennes pages.', 'solution' => 'Changement d\'hébergeur avec TTL réduit une semaine avant, passage en HTTPS, documents conservés à leur adresse, redirections des pages de campagnes vers la page de dons actuelle, contrôle des formulaires de dons et des paiements après bascule.'],
                ['secteur' => 'Industrie et distribution, Suisse ou Québec', 'probleme' => 'Un catalogue technique en deux langues sur un CMS en fin de vie, avec des fiches que les clients professionnels retrouvent par Google.', 'solution' => 'Reconstruction sur mesure, fiches reprises avec leurs références et leurs données structurées, hreflang réécrit pour le français et l\'anglais, redirections langue par langue, et suivi séparé des performances par version linguistique.'],
            ],
        ],
        [
            'type'       => 'prix',
            'titre'      => 'Combien coûte une refonte avec migration, et qu\'est-ce qui fait varier le devis ?',
            'intro'      => 'La refonte avec migration est chiffrée sur devis, après l\'inventaire de l\'existant : deux sites qui se ressemblent à l\'écran peuvent cacher des volumes de pages et de données sans commune mesure. Les seuls tarifs de départ publiés sur ce site concernent la landing page, le site vitrine (à partir de 300 000 FCFA) et le référencement naturel ; une refonte y ajoute l\'inventaire, la migration des données, le plan de redirections et le suivi. La prestation se règle par Mobile Money (MTN, Moov), carte bancaire, PayPal, virement ou espèces.',
            'items'      => [
                ['offre' => 'Audit et inventaire', 'prix' => 'Sur devis', 'inclus' => ['Audit de l\'existant et de son référencement', 'Inventaire des URL, du trafic et des liens entrants', 'Inventaire des données à migrer', 'Recommandation : refonte, migration seule ou simple optimisation']],
                ['offre' => 'Refonte avec migration', 'prix' => 'Sur devis', 'inclus' => ['Nouveau design moderne, rapide et pensé pour le mobile', 'Reprise des contenus et migration des données', 'Plan de redirections 301 page par page', 'Préproduction, recette et bascule avec retour arrière prévu']],
                ['offre' => 'Migration technique seule', 'prix' => 'Sur devis', 'inclus' => ['Changement d\'hébergeur, de domaine ou passage en HTTPS', 'Redirections et outil Changement d\'adresse si besoin', 'Zone DNS et courriels préservés', 'Contrôles après bascule']],
                ['offre' => 'Suivi après bascule', 'prix' => 'Sur devis', 'inclus' => ['Suivi de l\'indexation et des erreurs 404 pendant 3 mois', 'Correction des redirections oubliées', 'Comparaison des clics et des positions avant et après', 'Relais possible vers la maintenance ou le référencement']],
            ],
            'variations' => [
                'Le nombre de pages et d\'adresses à inventorier, et le nombre de domaines ou de sous-domaines.',
                'La plateforme de départ : un export propre ou une extraction page par page, comme pour un blog Wix.',
                'Le volume et la nature des données : catalogue, commandes, comptes clients, abonnements, documents.',
                'La part de contenus à réécrire, à fusionner ou à traduire.',
                'Les fonctions à reconstruire : paiement mobile money, réservation, espace client, plusieurs langues.',
                'Les raccordements à recréer : CRM, ERP, WhatsApp, automatisations n8n ou Make.',
                'Les exigences de disponibilité, qui imposent une bascule de nuit ou en plusieurs temps.',
            ],
        ],
        [
            'type'  => 'points',
            'titre' => 'Quelles erreurs font perdre le référencement ou des données pendant une migration ?',
            'intro' => 'Les migrations ratées se ressemblent. Presque toutes tiennent à une étape sautée par manque de temps, et presque toutes auraient été évitées par l\'inventaire, la préproduction ou le suivi.',
            'items' => [
                ['titre' => 'Mettre le site en ligne avant de faire l\'inventaire', 'texte' => 'Une fois l\'ancien site remplacé, ses adresses ne se lisent plus que dans les archives et les rapports. L\'inventaire se fait pendant que tout est encore en place.'],
                ['titre' => 'Laisser la balise noindex de la préproduction', 'texte' => 'Le nouveau site part en ligne avec l\'interdiction d\'indexation posée pendant les essais. Les pages sortent de Google une à une, et personne ne comprend pourquoi pendant des semaines.'],
                ['titre' => 'Bloquer les anciennes adresses dans le robots.txt', 'texte' => 'Google ne peut plus les explorer, donc il ne découvre pas leurs redirections. Le guide de migration demande au contraire de les laisser accessibles.'],
                ['titre' => 'Raccourcir les textes qui se classaient', 'texte' => 'Une maquette plus épurée pousse à couper. Sur les pages qui rapportent, chaque paragraphe supprimé est une réponse en moins à la recherche qui vous amenait des clients.'],
                ['titre' => 'Oublier la zone DNS complète', 'texte' => 'En changeant d\'hébergeur de DNS, on recopie l\'enregistrement du site et l\'on oublie ceux de la messagerie. Les courriels cessent d\'arriver, souvent sans que personne s\'en aperçoive le jour même.'],
                ['titre' => 'Résilier l\'ancien hébergement ou l\'ancien domaine trop tôt', 'texte' => 'Les redirections disparaissent avec lui. L\'aide de Google demande de garder l\'ancien domaine au moins un an, et les redirections le plus longtemps possible.'],
                ['titre' => 'Oublier les adresses de retour des paiements', 'texte' => 'Les agrégateurs de mobile money et de carte appellent une adresse du site pour confirmer chaque paiement. Si elle pointe encore vers l\'ancien domaine, les commandes restent en attente alors que le client a payé.'],
                ['titre' => 'Tout changer en même temps sans le dire', 'texte' => 'Domaine, plateforme, arborescence et contenus modifiés le même jour rendent toute baisse impossible à diagnostiquer. Quand c\'est inévitable, le plan de redirections et le suivi doivent être d\'autant plus rigoureux.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Mobile money, connexion, données personnelles : que change le contexte local ?',
            'paragraphes' => [
                'En Afrique francophone, une boutique encaisse souvent par mobile money à travers un agrégateur, que le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a> aide à choisir. Chacun connaît l\'adresse du site par ses clés et ses adresses de notification. Une migration de domaine ou de plateforme impose de les mettre à jour, de générer si besoin de nouvelles clés, puis de rejouer un paiement réel de faible montant après la bascule. Côté connexion, la plupart des visiteurs arrivent par le réseau mobile : pages légères, images compressées, polices limitées et cache bien réglé comptent davantage qu\'un effet visuel.',
                'La migration déplace des données personnelles : fichiers clients, commandes, comptes, messages reçus par formulaire. Au Bénin, l\'article 426 de la <a href="https://sgg.gouv.bj/doc/loi-2017-20/">loi n° 2017-20 portant code du numérique</a> impose au responsable du traitement et à son sous-traitant des mesures techniques et organisationnelles contre la perte, l\'altération ou l\'accès non autorisé, notamment lors des transmissions sur un réseau, et cite le chiffrement et la capacité à rétablir les données après un incident. L\'article 391 n\'autorise un transfert vers un État tiers que si l\'Autorité constate un niveau de protection équivalent : le pays du nouvel hébergeur compte.',
                'En Europe, le RGPD encadre le même chantier. L\'article 28, présenté par la <a href="https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4">CNIL</a>, exige un contrat avec le sous-traitant qui fixe l\'objet, la durée, la nature et la finalité du traitement, et qui prévoit la suppression ou la restitution des données à la fin de la prestation. L\'article 32 demande des mesures de sécurité adaptées, dont le chiffrement et les moyens de rétablir l\'accès aux données en cas d\'incident. Concrètement : copies de base chiffrées, transferts par des canaux sécurisés, copies de travail effacées après la recette.',
                'La facturation et la langue suivent vos clients. Les devis et factures sont établis en francs CFA pour les clients d\'Afrique de l\'Ouest et du Centre, en euros, en francs suisses ou en dollars canadiens ailleurs. Le site reste en français, avec une version anglaise quand vos clients la demandent ; dans ce cas, chaque langue garde ses propres adresses, ses balises hreflang et son propre suivi.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi confier la refonte et la migration de votre site à Richard SALANON ?',
            'paragraphes' => [
                fait('phrase_entite'),
                'Il exerce depuis plus de 6 ans, a été formé à EPITECH (promotion 2022), revendique plus de 50 projets livrés et a mené des missions au Bénin, en Côte d\'Ivoire, au Togo, au Sénégal, au Burkina Faso, au Mali, au Niger, au Tchad, au Gabon, en RD Congo, en France, en Belgique, en Suisse et au Canada. Développeur autant que concepteur de sites, il écrit lui-même les scripts de migration, les redirections dans la configuration du serveur et les gabarits du nouveau site, sans sous-traiter la partie technique qui décide du résultat.',
                'Il a appliqué cette méthode à son propre site. En septembre 2026, il a migré son site de richard.salanon.info vers richardsalanon.com, avec des redirections 301 écrites adresse par adresse et une demande dans l\'outil Changement d\'adresse de la Search Console. Il connaît donc de l\'intérieur ce que demande un changement de domaine : l\'inventaire, les variantes de domaine à déclarer une à une, l\'attente pendant que Google suit les redirections. Il développe aussi <a href="https://wapy.pro">Wapy</a>, un assistant WhatsApp à intelligence artificielle, et il est co-fondateur d\'<a href="https://audyxa.com">Audyxa</a>.',
                'Sa façon de travailler tient en engagements vérifiables : inventaire avant toute décision, préproduction protégée, plan de redirections remis ligne par ligne, retour arrière écrit avant la bascule, suivi des erreurs et de l\'indexation après la bascule, et tous les accès à votre nom. Il répond sous 24 heures. Votre équipe peut ensuite suivre la <a href="/formation-seo-visibilite-google">formation visibilité Google</a> pour lire la Search Console elle-même. Son parcours est détaillé sur la page <a href="/richard-salanon">Richard SALANON</a>.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Que retenir avant de lancer la refonte de votre site ?',
            'texte' => 'Inventoriez chaque adresse et chaque donnée avant de toucher au site, construisez le nouveau en préproduction, donnez à chaque ancienne page une destination équivalente en un seul saut, écrivez le retour arrière avant la bascule, gardez l\'ancien domaine et ses redirections au moins un an, et suivez la Search Console pendant trois mois.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Votre site doit-il changer de visage, de plateforme ou d\'adresse ?',
            'texte'  => 'Indiquez l\'adresse du site actuel, la plateforme, ce qui ne va plus et ce que vous voulez changer (design, CMS, domaine, hébergeur, HTTPS) : vous recevez une réponse sous 24 heures et, après l\'inventaire, un plan de migration avec un devis détaillé.',
            'bouton' => ['url' => '/contact', 'texte' => 'Présenter mon projet de refonte'],
        ],
    ],

    'faq' => [
        ['q' => 'Vais-je perdre mon référencement en refondant mon site ?', 'r' => 'Pas si chaque ancienne adresse reçoit une redirection permanente vers une page équivalente et si les contenus qui rapportent sont conservés. Google prévient qu\'une fluctuation temporaire est normale pendant une migration, et qu\'il faut en général quelques semaines pour un site de petite ou moyenne taille. Un site plus rapide et mieux structuré part ensuite sur de meilleures bases.'],
        ['q' => 'Puis-je changer de nom de domaine pendant la refonte ?', 'r' => 'Oui, dans le même chantier. Les redirections 301 mènent chaque ancienne adresse vers son équivalent sur le nouveau domaine, puis l\'outil Changement d\'adresse de la Search Console signale le déménagement à Google. Chaque sous-domaine, www compris, se déclare à part, et l\'ancien domaine doit rester à vous au moins un an.'],
        ['q' => 'Mon site restera-t-il accessible pendant la refonte ?', 'r' => 'Oui. Le nouveau site est construit sur une préproduction protégée, pendant que l\'ancien continue de fonctionner. La bascule se fait dans une fenêtre courte, à l\'heure où le site reçoit le moins de visites, avec un retour arrière prêt si un contrôle échoue.'],
        ['q' => 'Combien de temps dure une refonte avec migration ?', 'r' => 'Comptez 2 à 3 semaines pour un site vitrine et 4 à 10 semaines pour une boutique ou un site de plusieurs centaines de pages, selon le volume de données et de contenus à reprendre. Le suivi après bascule dure ensuite trois mois.'],
        ['q' => 'Combien coûte une refonte avec migration ?', 'r' => 'Le prix est fixé sur devis, après l\'inventaire de l\'existant. Il dépend du nombre de pages et d\'adresses, de la plateforme de départ, du volume de données, des contenus à réécrire et des fonctions à reconstruire. Le règlement se fait par Mobile Money, carte bancaire, PayPal, virement ou espèces.'],
        ['q' => 'Mes produits, commandes et clients seront-ils repris ?', 'r' => 'Oui, avec un comptage avant et après chaque import. Les limites dépendent de la plateforme : l\'importateur CSV de WooCommerce ne gère pas les commandes ni les clients, qui passent par l\'API ou un script, et Shopify ne permet pas de migrer les mots de passe des clients, qui doivent alors en recréer un.'],
        ['q' => 'Peut-on quitter Wix pour WordPress ?', 'r' => 'Oui. Les produits et les contacts s\'exportent, mais l\'aide de Wix indique qu\'il n\'est pas possible, pour le moment, d\'exporter les posts du blog vers d\'autres plateformes. Les articles sont donc extraits des pages publiques, repris un par un et redirigés vers leur nouvelle adresse.'],
        ['q' => 'Faut-il utiliser l\'outil Changement d\'adresse pour passer en HTTPS ?', 'r' => 'Non. L\'aide de la Search Console précise que l\'outil ne gère ni le passage de HTTP à HTTPS ni celui de www à sans www. Ces migrations reposent sur des redirections permanentes côté serveur, des liens internes mis à jour et un nouveau sitemap.'],
        ['q' => 'Combien de temps garder les redirections et l\'ancien hébergement ?', 'r' => 'Le guide de Google recommande de conserver les redirections aussi longtemps que possible, en général au moins un an, et l\'aide de l\'outil Changement d\'adresse demande de garder l\'ancien domaine au moins un an. L\'ancien hébergement est résilié quand son trafic est tombé à zéro.'],
        ['q' => 'Mes adresses électroniques fonctionneront-elles encore après la migration ?', 'r' => 'Oui, si la zone DNS est recopiée en entier, enregistrements MX, SPF et DKIM compris. Ils sont relevés pendant l\'inventaire et vérifiés juste après la bascule. En cas de changement de domaine, les nouvelles adresses sont créées et les anciennes restent actives le temps de prévenir vos contacts.'],
        ['q' => 'Intervenez-vous hors du Bénin ?', 'r' => 'Oui. Richard SALANON travaille avec des entreprises d\'Afrique francophone, d\'Europe et du Canada. L\'inventaire, la construction et la bascule se font à distance ; les échanges ont lieu à Cotonou ou en visioconférence, et la bascule se cale sur le fuseau horaire de vos visiteurs.'],
    ],

    'sources' => [
        ['titre' => 'Google Search Central, migrer un site avec changement d\'URL (mis à jour le 11 septembre 2026)', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/site-move-with-url-changes?hl=fr', 'date' => '2026-10-04'],
        ['titre' => 'Aide Search Console, outil Changement d\'adresse', 'url' => 'https://support.google.com/webmasters/answer/9370220?hl=fr', 'date' => '2026-10-04'],
        ['titre' => 'Google Search Central, redirections et recherche Google (mis à jour le 5 mai 2026)', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/301-redirects?hl=fr', 'date' => '2026-10-04'],
        ['titre' => 'Google Search Central, changer d\'hébergement sans modifier les URL (mis à jour le 31 décembre 2025)', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/site-move-no-url-changes?hl=fr', 'date' => '2026-10-04'],
        ['titre' => 'Google Search Central, codes d\'état HTTP et erreurs réseau (mis à jour le 5 mars 2026)', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/http-network-errors?hl=fr', 'date' => '2026-10-04'],
        ['titre' => 'Google Search Central, indexation mobile first (mis à jour le 20 février 2026)', 'url' => 'https://developers.google.com/search/docs/crawling-indexing/mobile/mobile-sites-mobile-first-indexing?hl=fr', 'date' => '2026-10-04'],
        ['titre' => 'web.dev, signaux web essentiels (seuils LCP, INP et CLS)', 'url' => 'https://web.dev/articles/vitals?hl=fr', 'date' => '2026-10-04'],
        ['titre' => 'W3C, Web Content Accessibility Guidelines (WCAG) 2.2, recommandation du 12 décembre 2024', 'url' => 'https://www.w3.org/TR/WCAG22/', 'date' => '2026-10-04'],
        ['titre' => 'Google, blog de sécurité : HTTPS par défaut dans Chrome 154 (28 octobre 2025)', 'url' => 'https://security.googleblog.com/2025/10/https-by-default.html', 'date' => '2026-10-04'],
        ['titre' => 'WordPress Developer Resources, déplacer WordPress (données sérialisées et colonne GUID)', 'url' => 'https://developer.wordpress.org/advanced-administration/upgrade/migrating/', 'date' => '2026-10-04'],
        ['titre' => 'WooCommerce, importateur et exportateur CSV de produits', 'url' => 'https://woocommerce.com/document/product-csv-importer-exporter/', 'date' => '2026-10-04'],
        ['titre' => 'Aide Shopify, exporter des produits', 'url' => 'https://help.shopify.com/fr/manual/products/import-export/export-products', 'date' => '2026-10-04'],
        ['titre' => 'Aide Shopify, importer et exporter des clients (mots de passe non migrables)', 'url' => 'https://help.shopify.com/fr/manual/customers/import-export-customers', 'date' => '2026-10-04'],
        ['titre' => 'Aide Wix, export des posts de blog vers d\'autres plateformes', 'url' => 'https://support.wix.com/fr/article/demande-de-fonctionnalit%C3%A9-wix-blog-exporter-des-posts-de-blog-vers-dautres-plateformes', 'date' => '2026-10-04'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (articles 391 et 426)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-04'],
        ['titre' => 'CNIL, RGPD chapitre IV (articles 28 et 32, sous-traitant et sécurité du traitement)', 'url' => 'https://www.cnil.fr/fr/reglement-europeen-protection-donnees/chapitre4', 'date' => '2026-10-04'],
    ],

    'liens' => [
        'services'    => ['site-vitrine-professionnel', 'site-e-commerce', 'referencement-naturel-seo', 'audit-seo-complet', 'maintenance-support', 'application-web-sur-mesure'],
        'comparatifs' => ['fedapay-vs-kkiapay-vs-cinetpay'],
    ],

];
