<?php
// ============================================================
// data/comparatifs/wordpress-vs-sur-mesure.php · Comparatif WordPress avec thème,
// WordPress personnalisé et site sur mesure (vague 1F). Remplace l’article de blog
// /blog/wordpress-ou-sur-mesure-comment-choisir (redirection 301 à la publication).
// Prix, versions et parts de marché relevés sur les pages officielles le 07/10/2026 ;
// à revérifier à chaque mise à jour. Apostrophes typographiques dans tout le fichier.
// ============================================================
declare(strict_types=1);

return [
    'titre'   => 'WordPress ou site sur mesure en 2026 : lequel choisir pour votre entreprise ?',
    'title'   => 'WordPress ou site sur mesure en 2026 : le comparatif',
    'meta'    => 'WordPress avec thème, WordPress personnalisé ou site sur mesure : coût sur trois ans, vitesse, sécurité, SEO et mobile money, avec chiffres datés.',
    'en_bref' => 'WordPress avec un thème du marché est le choix le plus rapide et le moins cher pour une vitrine ou un blog que votre équipe met à jour elle-même ; le sur mesure se justifie quand le site porte un processus propre à votre métier (réservation, espace client, paiement mobile money, intégrations). WordPress fait tourner 40,1 % des sites du web selon W3Techs le 7 octobre 2026, mais 91 % des failles recensées en 2025 viennent de ses extensions, selon Patchstack. Décidez selon votre budget sur trois ans, la fréquence de vos modifications et votre ambition, pas selon la mode.',
    'publie'  => '2026-10-07',
    'maj'     => '2026-10-07',

    'faits_hero' => [
        ['l' => 'Pour qui', 'v' => 'Dirigeants de PME, d’associations et de cabinets, zone OHADA et Europe francophone'],
        ['l' => 'Options comparées', 'v' => 'WordPress avec thème du marché, WordPress personnalisé par un développeur, site sur mesure (framework PHP)'],
        ['l' => 'Critères pondérés', 'v' => '8 critères, deux profils de poids publiés'],
        ['l' => 'Sources consultées', 'v' => 'W3Techs, WordPress.org, Patchstack, Google, éditeurs d’extensions et hébergeurs, le 7 octobre 2026'],
    ],

    'sections' => [
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi comparer WordPress et le sur mesure, et pourquoi sans désigner de vainqueur ?',
            'paragraphes' => [
                'La question arrive presque toujours avant le lancement d’un site, ou au moment où l’ancien ne suit plus : faut-il partir sur WordPress, avec ses milliers de thèmes et d’extensions, ou faire développer un site construit autour de votre activité ? Les deux approches sont valables, mais elles ne répondent pas aux mêmes besoins, et la réponse change avec votre budget, votre équipe et ce que le site doit faire dans trois ans.',
                'Ce comparatif met face à face trois options : <strong>WordPress avec un thème du marché</strong> (thème ou constructeur de pages, extensions du commerce), <strong>WordPress personnalisé par un développeur</strong> (thème enfant ou thème écrit pour vous, extensions choisies, développements spécifiques) et un <strong>site sur mesure</strong> écrit avec un framework, par exemple Laravel en PHP. Les chiffres du marché ont été relevés le 7 octobre 2026 sur les pages de W3Techs, de WordPress.org, de Patchstack, de Google, des éditeurs d’extensions et des hébergeurs ; chaque section nomme sa source.',
                'La page ne désigne pas de gagnant universel. Elle publie huit critères pondérés, montre que deux profils d’entreprise aboutissent à deux choix différents, détaille le coût sur trois ans, puis traite la vitesse, le référencement, la sécurité, l’autonomie, la dépendance au prestataire et le contexte d’Afrique francophone. Elle ne contient aucun lien d’affiliation. Richard SALANON développe des sites sur mesure : ce parti pris est déclaré, et c’est pourquoi les notes de la grille sont justifiées une à une.',
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Que compare-t-on exactement : trois façons de construire un site',
            'legende' => 'Définitions retenues dans ce comparatif. Le délai et le profil de budget sont des ordres de grandeur de l’auteur, à confirmer par un devis ; ils ne proviennent d’aucune source publiée.',
            'entetes' => ['Option', 'Ce que c’est', 'Qui l’entretient', 'Délai indicatif', 'Budget de départ'],
            'lignes'  => [
                ['WordPress avec thème du marché', 'Logiciel WordPress, thème ou constructeur de pages acheté ou gratuit, extensions du commerce, peu ou pas de code', 'Vous, une agence ou un freelance, avec les mises à jour du thème et des extensions', 'Une à trois semaines', 'Le plus bas : licences et hébergement'],
                ['WordPress personnalisé', 'WordPress dont le thème est écrit ou adapté par un développeur, avec quelques extensions et des développements spécifiques', 'Le développeur qui a écrit le code, plus les mises à jour de WordPress et des extensions', 'Trois à six semaines', 'Intermédiaire : temps de développement'],
                ['Site sur mesure (framework)', 'Application écrite avec un framework PHP ou autre, base de données et espace d’administration conçus pour vos contenus et vos processus', 'L’équipe qui a écrit le code, plus les mises à jour du framework et de PHP', 'Un à trois mois', 'Le plus élevé au départ : conception et développement'],
            ],
        ],
        [
            'type'     => 'comparaison',
            'titre'    => 'WordPress ou sur mesure : que donnent les trois options critère par critère ?',
            'options'  => ['WordPress avec thème du marché', 'WordPress personnalisé', 'Site sur mesure'],
            'criteres' => [
                ['critere' => 'Licences', 'valeurs' => ['WordPress est gratuit ; thème et extensions payants selon vos choix (Elementor Essential : 60 dollars par an)', 'Idem, avec moins d’extensions payantes', 'Aucune licence logicielle : le framework (Laravel) est libre']],
                ['critere' => 'Mise en ligne', 'valeurs' => ['Très rapide', 'Plus longue : développement du thème et des fonctions', 'La plus longue : tout est conçu']],
                ['critere' => 'Modification du contenu', 'valeurs' => ['Éditeur visuel connu, grand vivier de personnes formées', 'Éditeur WordPress, écrans adaptés à vos contenus', 'Administration écrite pour vos contenus, ou aucune si le site est figé']],
                ['critere' => 'Fonctions spécifiques', 'valeurs' => ['Via extensions, avec les limites et les conflits qu’elles ajoutent', 'Via code sur mesure dans WordPress', 'Sans limite technique, au prix du développement']],
                ['critere' => 'Surface d’attaque', 'valeurs' => ['Large : beaucoup d’extensions de tiers', 'Réduite si peu d’extensions', 'Réduite à votre propre code et aux bibliothèques utilisées']],
                ['critere' => 'Vitesse', 'valeurs' => ['Dépend du thème, du constructeur et des extensions', 'Bonne si le thème est léger', 'Maîtrisable finement, page par page']],
                ['critere' => 'Mises à jour', 'valeurs' => ['Cœur, thème et chaque extension', 'Cœur et extensions, plus compatibilité du code maison', 'Framework et PHP, avec une montée majeure environ chaque année']],
                ['critere' => 'Dépendance au prestataire', 'valeurs' => ['Faible : beaucoup de prestataires savent intervenir', 'Moyenne : le code maison est propre à un développeur', 'Forte si le code n’est pas documenté ni remis']],
                ['critere' => 'Paiement mobile money', 'valeurs' => ['Extensions de passerelles, qualité inégale', 'Passerelle intégrée par le développeur', 'Intégration directe de l’API de l’agrégateur']],
                ['critere' => 'Sortie', 'valeurs' => ['Export WordPress, thème à reconstruire', 'Contenu récupérable, code à réécrire', 'Contenu récupérable depuis la base, code propre à l’équipe']],
            ],
            'verdict'  => 'WordPress avec thème l’emporte sur le coût de départ et la rapidité, le sur mesure sur la liberté fonctionnelle et la maîtrise ; WordPress personnalisé est le compromis quand on veut garder l’éditeur de contenu sans accepter les limites d’un thème.',
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Comment pondérer les critères selon votre profil d’entreprise ?',
            'legende' => 'Chaque option reçoit une note de 1 (faible) à 5 (excellent) par critère, selon les faits sourcés plus haut ; le poids exprime l’importance du critère en pour cent. Le score sur 100 additionne note fois poids, puis divise par 5. Profil A : PME de services ou cabinet qui veut une vitrine et un blog à petit budget, mis à jour par son équipe. Profil B : entreprise dont le site porte un processus (réservation, espace client, paiement mobile money, intégration à un outil de gestion).',
            'entetes' => ['Critère', 'Poids A', 'Poids B', 'WordPress avec thème', 'WordPress personnalisé', 'Sur mesure', 'Ce qui fonde les notes'],
            'lignes'  => [
                ['Coût sur trois ans', '25', '15', '5', '3', '2', 'Licences et hébergement seuls pour le thème du marché ; temps de développement ajouté ensuite.'],
                ['Délai de mise en ligne', '15', '5', '5', '3', '2', 'Un thème s’installe en quelques jours ; le code se conçoit et se teste.'],
                ['Autonomie pour modifier le contenu', '20', '10', '4', '4', '3', 'L’éditeur WordPress est connu de beaucoup de monde ; une administration sur mesure demande d’être conçue et documentée.'],
                ['Fonctions spécifiques et évolutivité', '10', '25', '2', '4', '5', 'Les extensions couvrent le standard ; un processus propre se code.'],
                ['Sécurité et mises à jour', '10', '15', '2', '3', '4', '91 % des failles WordPress de 2025 viennent des extensions (Patchstack) ; un site sur mesure a moins de code de tiers mais ses propres bogues.'],
                ['Vitesse et référencement', '10', '10', '2', '4', '4', 'Seuls 44,34 % des sites WordPress passaient les Core Web Vitals en juillet 2025 (HTTP Archive) ; un thème léger corrige l’essentiel.'],
                ['Indépendance vis-à-vis du prestataire', '5', '10', '4', '3', '2', 'Beaucoup de prestataires savent reprendre un WordPress ; un code maison n’est repris que s’il est livré et documenté.'],
                ['Paiement mobile money et réalité locale', '5', '10', '3', '4', '5', 'Passerelles WordPress existantes mais au suivi inégal ; l’intégration directe d’une API offre plus de contrôle.'],
                ['<strong>Score profil A</strong>', '100', '', '<strong>75</strong>', '<strong>69</strong>', '<strong>61</strong>', 'Vitrine à petit budget : le thème du marché passe devant.'],
                ['<strong>Score profil B</strong>', '', '100', '<strong>62</strong>', '<strong>71</strong>', '<strong>73</strong>', 'Processus propre : le sur mesure passe devant, de peu devant WordPress personnalisé.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Pourquoi la même grille donne-t-elle deux choix différents ?',
            'paragraphes' => [
                'D’un profil à l’autre, les notes restent identiques ; seule l’importance accordée à chaque critère varie. Un cabinet qui veut présenter ses services, publier un article par mois et modifier lui-même un numéro de téléphone gagne davantage à partir d’un thème du marché qu’à financer des développements dont il n’a pas l’usage. Une entreprise qui veut faire réserver un créneau, encaisser par mobile money et relier le tout à son outil de gestion donne au contraire le premier rôle à la liberté fonctionnelle.',
                'Remarquez l’écart serré du profil B entre WordPress personnalisé (71) et le sur mesure (73) : il signale que le troisième choix n’est pas toujours le meilleur. Si votre site est surtout un site de contenu avec un ou deux modules, WordPress personnalisé garde l’éditeur de contenu et coûte souvent moins. Refaites le calcul avec vos propres poids : celui que vous hésitez à écrire désigne souvent votre vraie priorité.',
            ],
        ],
        [
            'type'  => 'prix',
            'titre' => 'Combien coûtent les thèmes, extensions et hébergements les plus courants ?',
            'intro' => 'Prix publics relevés le 7 octobre 2026 sur les pages officielles des éditeurs et des hébergeurs, dans la devise affichée. Ils changent souvent : vérifiez-les sur votre devis.',
            'items' => [
                ['offre' => 'WordPress et WooCommerce (logiciels)', 'prix' => '0 euro de licence', 'inclus' => ['Le cœur de WordPress est libre et gratuit', 'Thèmes et extensions du répertoire officiel gratuits pour beaucoup', 'Les extensions premium se paient à part, souvent chaque année']],
                ['offre' => 'Elementor, constructeur de pages (formule Essential)', 'prix' => '60 dollars par an', 'inclus' => ['Un site', 'Prix de renouvellement non précisé sur la page : à vérifier', 'Formules supérieures pour plusieurs sites, plus chères']],
                ['offre' => 'Divi, thème et constructeur', 'prix' => '89 dollars par an, ou 249 dollars en une fois', 'inclus' => ['Sites illimités', 'Assistance et mises à jour pendant la durée d’accès', 'Formule Pro à 277 dollars par an avec assistant IA']],
                ['offre' => 'WP Rocket, extension de cache', 'prix' => '49,95 euros par an', 'inclus' => ['Un site', 'Mises à jour et assistance', 'Formules de 3 et de 50 sites à 99,95 et 249,95 euros']],
                ['offre' => 'Yoast SEO Premium', 'prix' => '118,80 dollars par an', 'inclus' => ['Un site', 'Prix en vigueur depuis le 1er juillet 2025', 'Version gratuite disponible']],
                ['offre' => 'WooCommerce Subscriptions, extension d’abonnements', 'prix' => '249 euros par an', 'inclus' => ['Paiements récurrents', 'Exige WordPress 7.0 et WooCommerce 11.0 ou plus récents', 'Plus de 25 passerelles de paiement, dont Stripe et PayPal']],
                ['offre' => 'Hébergement Hostinger, formule Premium', 'prix' => '2,99 dollars par mois sur 48 mois', 'inclus' => ['Renouvellement à 10,99 dollars par mois', '3 sites, 20 Go de stockage', 'Formule Unlimited : 3,99 dollars puis 16,99 dollars par mois']],
                ['offre' => 'Hébergement o2switch, offre unique', 'prix' => 'À partir de 1,86 euro HT par mois, paiement annuel', 'inclus' => ['Stockage et sites illimités', 'Nom de domaine offert', 'Tarif de renouvellement à vérifier sur la page']],
            ],
        ],
        [
            'type'    => 'tableau',
            'titre'   => 'Combien coûte un site sur trois ans pour une PME qui veut une vitrine et un blog ?',
            'legende' => 'Scénario : vitrine de cinq à dix pages et blog, trois ans (octobre 2026 à octobre 2029), tarifs publics du 7 octobre 2026 supposés inchangés. Euros convertis à 655,957 FCFA pour 1 euro. « Sur devis » : aucun prix officiel publié.',
            'entetes' => ['Poste sur trois ans', 'WordPress avec thème du marché', 'WordPress personnalisé', 'Site sur mesure'],
            'lignes'  => [
                ['Conception et mise en ligne', 'Sur devis ; repère : le prix de départ d’un site vitrine chez Richard SALANON est de 300 000 FCFA (457 euros)', 'Sur devis, au temps de développement', 'Sur devis, au temps de conception et de développement'],
                ['Thème ou constructeur', 'Elementor Essential : 180 dollars (3 × 60) ; Divi : 267 dollars (3 × 89) ou 249 dollars en licence à vie', 'Souvent aucun, ou un thème de base', '0 euro : aucun thème acheté'],
                ['Extensions payantes', 'WP Rocket 149,85 euros (98 296 FCFA) ; Yoast Premium 356,40 dollars, si elles sont retenues', 'Une ou deux extensions, selon les besoins', '0 euro : fonctions codées ou bibliothèques libres'],
                ['Hébergement', 'Hostinger Premium : 107,64 dollars pour 36 mois à 2,99 dollars, sur un contrat de 48 mois ; puis 10,99 dollars par mois', 'Idem, ou hébergeur mieux dimensionné', 'Hébergement PHP 8.3 ou plus récent avec accès en ligne de commande, ou serveur privé : prix de l’hébergeur'],
                ['Maintenance et sécurité', 'Sur devis : mises à jour du cœur, du thème et des extensions, sauvegardes, surveillance', 'Sur devis : idem, plus la compatibilité du code maison', 'Sur devis : mises à jour du framework et de PHP, une montée de version majeure à prévoir dans la période'],
                ['Contenu et formation', 'Sur devis ; formation courte suffisante pour un éditeur connu', 'Sur devis', 'Sur devis, avec la documentation de l’administration'],
                ['Total des seuls montants publiés', 'De 287,64 dollars (Elementor et hébergement) à 644,04 dollars (avec Yoast), plus 149,85 euros avec WP Rocket', 'Selon les extensions retenues', '0 euro de licence ; tout le reste sur devis'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quels coûts le tableau ci-dessus laisse-t-il de côté ?',
            'paragraphes' => [
                'La licence est rarement le poste le plus lourd. Le temps passé à rédiger les contenus, choisir les images, paramétrer le référencement et former l’équipe pèse davantage, et il existe avec toutes les options. À l’inverse, le prix d’appel d’un hébergement est trompeur : selon la page de Hostinger consultée le 7 octobre 2026, la formule Premium à 2,99 dollars par mois exige un contrat de 48 mois, puis passe à 10,99 dollars par mois au renouvellement. Sur trois ans, comptez le prix d’appel ; sur cinq, comptez le prix de renouvellement.',
                'Autre coût récurrent : les extensions premium. Chacune se renouvelle chaque année, et sans renouvellement vous perdez les mises à jour de l’extension, donc ses correctifs de sécurité. Un site qui empile un constructeur de pages, une extension de cache, une extension de référencement et une extension de formulaires cumule quatre abonnements. Le sur mesure remplace ces abonnements par du temps de développement, payé une fois, mais il ajoute le temps de maintenance du code.',
                'Enfin, la maintenance est un coût dans tous les cas, même si on l’oublie souvent pour WordPress. Un site WordPress sans mise à jour pendant un an est exposé ; un site sur mesure sans montée de version pendant trois ans sort de la période de correctifs de son framework. Le bon calcul compare donc des scénarios complets sur trois ans, maintenance comprise, et non des prix de départ.',
            ],
        ],
        [
            'type'  => 'chiffres',
            'titre' => 'Quels chiffres retenir avant de décider ?',
            'items' => [
                ['valeur' => '40,1 %', 'libelle' => 'Part des sites web utilisant WordPress ; 58,6 % des sites dont le système de gestion est connu', 'source' => 'W3Techs, 7 octobre 2026', 'url' => 'https://w3techs.com/technologies/details/cm-wordpress'],
                ['valeur' => '11 334', 'libelle' => 'Nouvelles failles recensées dans l’écosystème WordPress en 2025, soit 42 % de plus qu’en 2024', 'source' => 'Patchstack, State of WordPress Security in 2026', 'url' => 'https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/'],
                ['valeur' => '91 %', 'libelle' => 'Part de ces failles située dans des extensions (9 % dans des thèmes, 6 failles dans le cœur)', 'source' => 'Patchstack, 2026', 'url' => 'https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/'],
                ['valeur' => '46 %', 'libelle' => 'Part des failles sans correctif de leur développeur au moment de la divulgation', 'source' => 'Patchstack, 2026', 'url' => 'https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/'],
                ['valeur' => '44,34 %', 'libelle' => 'Part des sites WordPress qui passent les Core Web Vitals en juillet 2025, dernier rang de six systèmes comparés', 'source' => 'HTTP Archive, via Search Engine Journal', 'url' => 'https://www.searchenginejournal.com/wordpress-versus-everyone-the-top-cms-for-core-web-vitals/555746/'],
                ['valeur' => '7.1.3', 'libelle' => 'Dernière version de WordPress, publiée le 6 octobre 2026 ; seule la dernière de chaque série est jugée sûre', 'source' => 'WordPress.org, versions', 'url' => 'https://wordpress.org/download/releases/'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Lequel est le plus rapide, WordPress ou un site sur mesure ?',
            'paragraphes' => [
                'Selon web.dev, consulté le 7 octobre 2026, un site est jugé bon pour l’expérience de chargement quand 75 % des visites, mesurées séparément sur mobile et sur ordinateur, affichent leur plus grand élément en 2,5 secondes ou moins (LCP), répondent aux interactions en 200 millisecondes ou moins (INP) et restent visuellement stables avec un décalage cumulé de 0,1 ou moins (CLS).',
                'Sur ces seuils, WordPress n’est pas lent par nature, mais son résultat moyen est faible : en juillet 2025, 44,34 % des sites WordPress les passaient, contre 60,54 % pour Drupal et 73,37 % pour Wix, d’après le rapport technologique de HTTP Archive rapporté par Search Engine Journal. La cause tient moins au logiciel qu’à ce qu’on lui ajoute : un constructeur de pages lourd, dix extensions qui chargent chacune leurs scripts, des images non redimensionnées, un hébergement partagé saturé.',
                'Un site sur mesure part d’une page vide : on ne charge que ce que la page utilise. C’est ce qui explique l’écart quand une refonte remplace un site ancien. Pour INOVIS Côte d’Ivoire, un site ancien et lent a été remplacé par un site rapide, et la page d’accueil est passée de 2,26 Mo à 577 Ko (projet réalisé en sous-traitance pour Digital Développement, voir les <a href="/realisations/">réalisations</a>). Ce résultat vient du choix d’alléger, pas de l’étiquette « sur mesure » : un WordPress léger, avec un thème sobre, un cache et des images optimisées, atteint des scores très corrects.',
                'La règle pratique est donc la suivante : mesurez le site actuel ou un site comparable avec PageSpeed Insights, fixez un objectif sur les trois mesures, et demandez au prestataire de s’engager dessus quelle que soit la technologie.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'WordPress est-il meilleur ou moins bon pour le référencement ?',
            'paragraphes' => [
                'Ni l’un ni l’autre par principe. La page de Google sur l’expérience de page, consultée le 7 octobre 2026, précise que les Core Web Vitals sont utilisés par ses systèmes de classement, qu’il n’existe pas de signal unique, qu’un bon score ne garantit pas la première place et que Google cherche toujours à montrer le contenu le plus pertinent, même si l’expérience de page est médiocre. Le contenu, les liens et l’intention de recherche pèsent donc davantage que la technologie.',
                'Les avantages de WordPress sont réels : des extensions de référencement qui gèrent balises, plan de site et redirections sans développement, et des gabarits d’articles prêts à l’emploi. Son risque tient à la dérive : titres en double, pages d’étiquettes indexées par erreur, images lourdes, extensions qui injectent du code. Un WordPress bien configuré et allégé ne freine pas le référencement ; un WordPress laissé par défaut peut le freiner.',
                'Le sur mesure demande de tout construire soi-même : balises uniques, plan de site, données structurées, redirections, fil d’Ariane. C’est faisable et plus propre, mais rien n’est fourni. Exigez dans le devis une liste explicite de ces éléments. Et si vous remplacez un ancien site, la reprise du référencement tient aux redirections 301 page par page : un site WordPress ingérable a été remplacé pour Impulse Finance, avec reprise du référencement et redirections 301, en trois jours (réalisé en sous-traitance pour Digital Développement). Le chantier est décrit sur la page <a href="/services/refonte-migration-de-site">refonte et migration de site</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'WordPress est-il moins sûr, et que coûtent les mises à jour ?',
            'paragraphes' => [
                'Selon le rapport State of WordPress Security in 2026 de Patchstack, mis à jour le 25 février 2026, 11 334 failles ont été recensées dans l’écosystème WordPress en 2025, soit 42 % de plus qu’en 2024. Elles se trouvent à 91 % dans des extensions, à 9 % dans des thèmes, et le cœur de WordPress n’en compte que six. 17 % étaient de gravité élevée, et 46 % n’avaient pas de correctif de leur développeur au moment de la divulgation.',
                'Ces chiffres se lisent ainsi : WordPress lui-même est bien tenu, la surface d’attaque vient des extensions, et mettre à jour ne suffit pas toujours, puisqu’une faille sur deux est publique avant d’être corrigée. Chaque extension de plus est un risque de plus. Un thème du marché chargé de dix extensions en cumule donc beaucoup plus qu’un WordPress personnalisé qui n’en garde que deux.',
                'WordPress.org rappelle de son côté, sur sa page des versions consultée le 7 octobre 2026, que seule la dernière version de chaque série est jugée sûre : la 7.1.3 est sortie le 6 octobre 2026, après la 7.1.2 du 22 septembre et la 7.1.1 du 17 septembre. Sa page des prérequis recommande PHP 8.3 ou plus récent, MariaDB 10.11 ou MySQL 8.0 au minimum et HTTPS ; PHP 7.4 reste toléré, mais en fin de vie. Une correction toutes les deux semaines suppose quelqu’un pour l’appliquer.',
                'Le sur mesure n’est pas immunisé : il remplace les failles des extensions par celles de votre propre code et des bibliothèques qu’il embarque. Son avantage est la maîtrise : pas de code de tiers inutile, et un périmètre que l’on peut auditer. Son entretien est aussi réel : selon la page des versions de Laravel consultée le 7 octobre 2026, Laravel 13, sorti le 17 mars 2026, reçoit des correctifs de sécurité jusqu’au 17 mars 2028, et une version majeure paraît chaque année.',
            ],
        ],
        [
            'type'  => 'vigilance',
            'titre' => 'Que faut-il vérifier avant de s’engager sur les mises à jour ?',
            'texte' => 'Les prix des extensions et des hébergements, les versions de PHP et de WordPress et les dates de fin de support changent vite. PHP 8.2 ne reçoit plus que des correctifs de sécurité jusqu’au 31 décembre 2026, PHP 8.3 jusqu’au 31 décembre 2027 et PHP 8.4 jusqu’au 31 décembre 2028, selon php.net consulté le 7 octobre 2026. Demandez par écrit qui met à jour quoi, à quelle fréquence, et ce qui se passe si une extension n’est plus maintenue ; un hébergement qui impose une vieille version de PHP vous expose.',
        ],
        [
            'type'  => 'points',
            'titre' => 'Qui peut modifier le contenu, et avec quelle autonomie ?',
            'intro' => 'L’autonomie dépend moins de la technologie que de ce qu’on a prévu au départ : écrans conçus pour vos contenus, formation et documentation.',
            'items' => [
                ['titre' => 'WordPress avec thème du marché', 'texte' => 'L’éditeur de blocs et les constructeurs de pages sont connus de beaucoup de monde : une secrétaire, un stagiaire ou un nouveau prestataire s’y retrouvent vite. Le risque est la liberté excessive : sans règles, chacun modifie la mise en page et le site perd sa cohérence.'],
                ['titre' => 'WordPress personnalisé', 'texte' => 'Le développeur peut verrouiller la mise en page et ne laisser modifiables que les textes et images, avec des champs dédiés (tarifs, équipe, réalisations). L’équipe gagne en sécurité ; elle perd la possibilité de changer la structure sans le développeur.'],
                ['titre' => 'Site sur mesure avec administration', 'texte' => 'L’administration est faite pour vos contenus, donc plus simple, mais elle n’existe que si on l’a construite et documentée. Un site sur mesure livré sans administration vous oblige à solliciter le développeur pour chaque phrase, ce qui est le piège le plus fréquent.'],
                ['titre' => 'Site sur mesure sans administration', 'texte' => 'Convient à une page figée ou à un site qui change une fois par an. Trop rigide dès que vous publiez des articles, des offres ou des actualités.'],
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quel choix résiste le mieux quand le site doit évoluer ?',
            'paragraphes' => [
                'Un site vitrine évolue peu : quelques pages et des articles. Les trois options conviennent. L’évolutivité devient un critère quand le site doit porter une réservation, un espace client, un catalogue avec règles de prix, des abonnements ou un lien avec un outil de gestion.',
                'WordPress sait faire beaucoup par extensions : WooCommerce pour la vente en ligne, des extensions de réservation, d’abonnement, d’adhésion. Chaque besoin spécifique ajoute une extension, donc une dépendance, un renouvellement annuel et un risque de conflit entre extensions. Par exemple, WooCommerce Subscriptions coûte 249 euros par an selon la page de WooCommerce consultée le 7 octobre 2026, et exige WordPress 7.0 et WooCommerce 11.0 ou plus récents : l’extension impose son propre calendrier de mises à jour au reste du site.',
                'Le sur mesure inverse la logique : le premier besoin coûte plus cher, mais les besoins suivants ne se heurtent à aucun plafond technique. C’est pourquoi un projet de plateforme, d’espace client ou de service en ligne bascule plus vite vers le sur mesure. Pour ce type de besoin, la page <a href="/services/application-web-sur-mesure">application web sur mesure</a> décrit la démarche.',
                'Le bon réflexe est d’écrire, avant tout devis, la liste des fonctions des deux prochaines années : celles qui existent déjà en extension éprouvée restent sur WordPress, celles qui constituent votre avantage propre se codent.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Quelle dépendance au prestataire faut-il craindre, et comment la limiter ?',
            'paragraphes' => [
                'WordPress est partagé : selon W3Techs le 7 octobre 2026, il fait tourner 40,1 % des sites web et 58,6 % de ceux dont le système de gestion est connu. Il existe donc beaucoup de prestataires capables de reprendre un site WordPress, à Cotonou comme à Lyon, ce qui limite le risque de rester coincé avec un seul prestataire.',
                'Le code sur mesure n’appartient à personne d’autre que son équipe tant qu’il n’est ni remis ni documenté. Le risque n’est pas la technologie mais l’organisation : un prestataire seul qui détient les accès, le code et la logique. Pour limiter ce risque dans les trois options : un contrat qui prévoit la remise du code source et des accès, un dépôt de code à votre nom, une documentation de l’installation et des mises à jour, un hébergement ouvert à votre propre compte.',
                'WordPress personnalisé cumule les deux dépendances : le logiciel est public, mais le thème et les extensions maison ne le sont pas. Exigez les mêmes engagements que pour le sur mesure, et conservez les licences des extensions premium à votre nom, pas à celui du prestataire. Pour une maintenance régulière, voyez la page <a href="/services/maintenance-support">maintenance et support</a>.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu’est-ce qui change en Afrique francophone : hébergement, mobile money, compétences ?',
            'paragraphes' => [
                'L’hébergement pose d’abord une question de distance et de droit. Les offres d’appel citées plus haut sont des offres européennes ou internationales, avec des centres de données hors d’Afrique ; o2switch, par exemple, indique des centres de données en France. Pour un site vitrine, la latence compte peu. Pour des données de clients, vérifiez le droit : selon l’article 391 de la loi béninoise n° 2017-20 portant code du numérique, un transfert de données vers un État tiers suppose deux conditions : l’Autorité de protection des données doit constater que cet État assure un niveau de protection équivalent, et le responsable du traitement doit obtenir son autorisation préalable.',
                'Le paiement par mobile money est le critère le plus discriminant. WooCommerce propose ses propres paiements, mais selon la page de WooPayments consultée le 7 octobre 2026, ce service n’est disponible que dans 38 pays d’Amérique du Nord, d’Europe, d’Asie-Pacifique et des Émirats. Pour MTN MoMo, Moov Money ou Wave, il faut une extension d’agrégateur. L’extension FedaPay pour WooCommerce, listée dans le répertoire de WordPress.org, accepte cartes et mobile money, mais affiche seulement plus de 600 installations actives et une compatibilité testée avec WordPress 6.4.13, une version ancienne face à la 7.1.3 actuelle : vérifiez toujours qu’une extension est testée avec votre version actuelle de WordPress et de WooCommerce.',
                'Sur mesure, on appelle directement l’interface de l’agrégateur : on garde la main sur le parcours (confirmation par SMS, relance, rapprochement avec la commande), au prix d’un développement. Pour choisir l’agrégateur lui-même, consultez le <a href="/comparatifs/fedapay-vs-kkiapay-vs-cinetpay">comparatif FedaPay, Kkiapay et CinetPay</a>. Si le site vend en ligne, la page <a href="/services/site-e-commerce">site e-commerce</a> détaille les options.',
                'Côté compétences, WordPress est la technologie la plus répandue, donc celle pour laquelle un prestataire se trouve le plus facilement à Cotonou, Abidjan ou Dakar, y compris pour un dépannage urgent. Les développeurs PHP et Laravel existent aussi, mais l’offre est plus étroite et plus chère à l’heure : vérifiez des références avant de signer. La connexion compte enfin : un thème et un constructeur qui chargent 3 Mo de scripts pèsent lourd sur un téléphone en 3G, ce qui plaide pour un site léger quelle que soit la technologie.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qu’est-ce qui change en Europe : RGPD, hébergement, compétences ?',
            'paragraphes' => [
                'En Europe, le marché des prestataires WordPress est large et les hébergeurs spécialisés sont nombreux, à des prix d’appel bas : l’offre unique d’o2switch part de 1,86 euro HT par mois en paiement annuel, selon sa page consultée le 7 octobre 2026. L’enjeu est moins le prix que le niveau de service : sauvegardes, assistance, version de PHP à jour.',
                'La conformité pèse plus lourd. Un site européen qui collecte des données (formulaire, newsletter, statistiques) doit informer ses visiteurs et recueillir leur consentement pour les traceurs. Chaque extension qui charge une police, un script de statistiques ou un lecteur vidéo de tiers ajoute un traceur à déclarer ; le sur mesure permet de n’en charger aucun par défaut.',
                'Pour une entreprise qui vend dans plusieurs pays, enfin, l’écart se joue sur les paiements : WooPayments couvre 38 pays dont la plupart de l’Union européenne, mais la liste citée ne comprend aucun pays d’Afrique francophone. Un site qui vend en Europe et en Afrique de l’Ouest aura donc besoin d’au moins deux passerelles, quelle que soit l’option choisie.',
            ],
        ],
        [
            'type'  => 'cas',
            'titre' => 'Quel choix selon votre type d’entreprise ?',
            'items' => [
                ['secteur' => 'Cabinet, consultant, profession libérale', 'probleme' => 'Se présenter, rassurer, publier quelques articles, recevoir des demandes de contact.', 'solution' => 'WordPress avec un thème léger suffit presque toujours. Le coût et le délai sont les plus bas, et l’équipe publie seule. Limitez-vous à trois ou quatre extensions.'],
                ['secteur' => 'Commerce local ou artisan', 'probleme' => 'Montrer les produits, prendre des commandes par WhatsApp, parfois vendre en ligne.', 'solution' => 'WordPress et WooCommerce pour un catalogue standard, avec une extension de paiement mobile money vérifiée. Passez au sur mesure si les règles de prix ou de commande deviennent propres à votre métier.'],
                ['secteur' => 'Restauration et livraison', 'probleme' => 'Prise de commande en ligne, paiement mobile, suivi de livraison.', 'solution' => 'Le sur mesure est plus adapté : le parcours de commande, le paiement et la livraison forment un processus propre. Afro Joy’ce, à Abidjan, a ainsi basculé des commandes prises à la main sur WhatsApp vers un site avec paiement Wave et livraison Yango (réalisé en sous-traitance pour Digital Développement).'],
                ['secteur' => 'Organisme de formation ou prestataire de services', 'probleme' => 'Catalogue, fiches détaillées, évaluation en ligne, espace réservé.', 'solution' => 'WordPress personnalisé ou sur mesure selon la part de fonctions propres. Un catalogue de formations et une fiche d’évaluation des stagiaires ont été réalisés avec Laravel pour AT Consulting International (sous-traitance pour Digital Développement).'],
                ['secteur' => 'Association, ONG, école', 'probleme' => 'Budget serré, plusieurs contributeurs, peu de fonctions techniques.', 'solution' => 'WordPress avec thème du marché, hébergement fiable et maintenance confiée à une personne identifiée. Prévoyez la sauvegarde et le renouvellement des licences à votre nom.'],
                ['secteur' => 'Plateforme, SaaS, outil métier', 'probleme' => 'Comptes utilisateurs, règles métier, intégrations, évolution continue.', 'solution' => 'Sur mesure : WordPress n’a pas été conçu pour porter une application. La page <a href="/services/application-web-sur-mesure">application web sur mesure</a> décrit la démarche.'],
            ],
        ],
        [
            'type'  => 'etapes',
            'titre' => 'Comment passer de WordPress au sur mesure sans perdre son référencement ?',
            'items' => [
                ['titre' => 'Inventorier les pages et les adresses', 'duree' => 'Avant tout développement', 'texte' => 'Exportez la liste complète des adresses du site actuel : pages, articles, catégories, images. C’est le plan de toutes les redirections à prévoir, et la liste de ce qui ne doit pas disparaître.'],
                ['titre' => 'Récupérer le contenu', 'duree' => 'Avant la bascule', 'texte' => 'WordPress exporte ses articles, pages et médias ; les champs ajoutés par des extensions demandent un export à part. Nettoyez les contenus obsolètes plutôt que de tout reprendre.'],
                ['titre' => 'Construire à côté, sans toucher l’ancien site', 'duree' => 'Plusieurs semaines', 'texte' => 'Le nouveau site se développe sur une adresse de test, fermée aux moteurs. L’ancien reste en ligne jusqu’à la bascule.'],
                ['titre' => 'Poser les redirections 301', 'duree' => 'Le jour de la bascule', 'texte' => 'Chaque ancienne adresse redirige vers sa nouvelle adresse équivalente, page par page, pas toutes vers l’accueil. C’est ce qui transmet le référencement.'],
                ['titre' => 'Contrôler et déclarer', 'duree' => 'Semaine suivante', 'texte' => 'Vérifiez les redirections, déclarez le nouveau plan de site dans la Search Console et surveillez les erreurs d’exploration pendant quelques semaines.'],
                ['titre' => 'Garder l’ancien site en sauvegarde', 'duree' => 'Plusieurs mois', 'texte' => 'Conservez une copie complète de l’ancien WordPress hors ligne, pour retrouver un contenu oublié. Le chantier est décrit sur la page <a href="/services/refonte-migration-de-site">refonte et migration de site</a>.'],
            ],
        ],
        [
            'type'  => 'checklist',
            'titre' => 'Quelles erreurs éviter avant de choisir ?',
            'items' => [
                'Choisir sur le prix d’appel de l’hébergement ou de la licence au lieu du coût sur trois ans, maintenance comprise.',
                'Empiler des extensions pour éviter un développement, puis découvrir qu’il en faut une mise à jour par mois, chacune avec sa faille possible.',
                'Acheter un thème « tout-en-un » aux dizaines de démonstrations, dont on utilise dix pour cent et dont on charge cent pour cent.',
                'Commander un site sur mesure sans administration, et devoir rappeler le développeur pour chaque modification de texte.',
                'Laisser le prestataire seul détenir le nom de domaine, l’hébergement, les licences et le code.',
                'Ne pas prévoir de sauvegarde ni de mise à jour, puis découvrir le problème à la première intrusion.',
                'Installer une extension de paiement non testée avec votre version de WooCommerce, ou non maintenue.',
                'Changer de technologie sans plan de redirections 301, et perdre le référencement acquis.',
                'Choisir le sur mesure par prestige quand un site de six pages à petit budget suffit.',
                'Choisir WordPress par économie quand le site doit porter un processus propre à votre métier.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Existe-t-il une voie entre les deux, et peut-on migrer plus tard ?',
            'paragraphes' => [
                'Oui : c’est l’option « WordPress personnalisé » de cette page, et il existe d’autres approches hybrides : WordPress optimisé avec un thème léger et peu d’extensions, ou WordPress couplé à des développements spécifiques, par exemple un module de réservation écrit pour vous. L’essentiel est d’aligner la technologie sur vos objectifs plutôt que sur une étiquette.',
                'Migrer plus tard est possible, idéalement en préservant le contenu et le référencement, comme décrit plus haut. La migration coûte moins cher quand le contenu est propre, que les adresses sont stables et que les redirections sont prévues dès le début. Commencer par WordPress avec un thème léger pour valider son marché, puis passer au sur mesure quand les besoins sont confirmés, est une trajectoire raisonnable, à condition de ne pas verrouiller le site avec des extensions difficiles à remplacer.',
            ],
        ],
        [
            'type'        => 'prose',
            'titre'       => 'Qui signe cette comparaison, et d’où parle-t-il ?',
            'paragraphes' => [
                'Richard SALANON, développeur et consultant installé à Cotonou, compte plus de 6 ans de métier dans le numérique. Il conçoit des sites et des applications web sur mesure, et reprend aussi des sites existants. Il a donc un parti pris déclaré en faveur de ce qu’il pratique, il publie donc ici ses critères et ses notes justifiées une à une, afin que chacun puisse en discuter.',
                'Aucun lien d’affiliation n’est posé ici, et chaque chiffre renvoie à sa source en bas de page. Pour un site vitrine, la page <a href="/services/site-vitrine-professionnel">création de site vitrine professionnel</a> décrit la démarche et le prix de départ.',
            ],
        ],
        [
            'type'  => 'lecon',
            'titre' => 'Quelle conclusion tirer de tout cela ?',
            'texte' => 'Prenez WordPress avec un thème léger si votre site présente votre activité et que votre équipe le met à jour, WordPress personnalisé si vous voulez garder l’éditeur de contenu avec des fonctions propres, et le sur mesure si le site porte un processus qui fait votre avantage, en prévoyant dans tous les cas la maintenance et la remise des accès.',
        ],
        [
            'type'   => 'cta',
            'titre'  => 'Un doute entre WordPress et sur mesure ?',
            'texte'  => 'Écrivez-moi ce que le site doit faire dans deux ans et votre budget : je vous réponds avec la grille appliquée à votre cas et le scénario chiffré sur trois ans.',
            'bouton' => ['url' => '/contact', 'texte' => 'Demander un avis'],
        ],
    ],

    'faq' => [
        ['q' => 'WordPress est-il moins cher qu’un site sur mesure ?', 'r' => 'À la création, presque toujours : WordPress est gratuit et un thème coûte quelques dizaines de dollars par an (Elementor Essential 60 dollars, Divi 89 dollars, selon leurs pages consultées le 7 octobre 2026). Sur trois ans, l’écart se réduit si le site cumule extensions payantes et maintenance, et s’inverse parfois quand le site porte un processus propre qui demanderait beaucoup d’extensions.'],
        ['q' => 'WordPress est-il bon pour le référencement ?', 'r' => 'Oui, s’il est allégé et bien configuré. Selon Google, les Core Web Vitals sont utilisés par ses systèmes de classement mais ne garantissent pas la première place. En juillet 2025, seuls 44,34 % des sites WordPress passaient ces mesures selon HTTP Archive : un WordPress mal configuré peut freiner le référencement.'],
        ['q' => 'Peut-on migrer plus tard de WordPress vers du sur mesure ?', 'r' => 'Oui, en exportant le contenu, en reconstruisant le site à côté et en posant des redirections 301 page par page pour préserver le référencement. Prévoyez du temps pour nettoyer les contenus et vérifier les adresses avant la bascule.'],
        ['q' => 'WordPress est-il dangereux pour la sécurité ?', 'r' => 'Le cœur de WordPress est bien tenu : six failles seulement en 2025 selon Patchstack. Le risque vient des extensions, qui concentrent 91 % des 11 334 failles recensées. Limitez le nombre d’extensions, mettez à jour toutes les semaines et sauvegardez.'],
        ['q' => 'Un site sur mesure est-il plus rapide ?', 'r' => 'Il peut l’être, puisqu’on ne charge que le nécessaire, mais un WordPress léger atteint de bons scores. Fixez un objectif sur le LCP (2,5 secondes), l’INP (200 millisecondes) et le CLS (0,1), mesurés au 75e centile selon web.dev.'],
        ['q' => 'Peut-on encaisser par mobile money sur WordPress ?', 'r' => 'Oui, par extension d’agrégateur : une extension FedaPay pour WooCommerce existe et accepte cartes et mobile money, mais elle affiche une compatibilité testée avec WordPress 6.4.13 seulement, une version ancienne. Les pays cités par WooPayments ne comprennent aucun pays d’Afrique francophone. Testez le rapprochement du paiement avec la commande avant la mise en ligne.'],
        ['q' => 'Quelle version de PHP faut-il pour un site en 2026 ?', 'r' => 'WordPress recommande PHP 8.3 ou plus récent, et Laravel 13 exige PHP 8.3. Selon php.net, PHP 8.3 reçoit des correctifs de sécurité jusqu’au 31 décembre 2027 et PHP 8.4 jusqu’au 31 décembre 2028.'],
        ['q' => 'Qui possède le site : moi ou le prestataire ?', 'r' => 'Vous, si le contrat le prévoit. Exigez la remise du code source, des accès administrateur, du nom de domaine à votre nom et des licences d’extensions à votre nom, ainsi qu’une documentation de l’installation.'],
        ['q' => 'WordPress convient-il à une boutique en ligne ?', 'r' => 'Oui, avec WooCommerce, pour un catalogue standard. Les extensions payantes s’additionnent (WooCommerce Subscriptions : 249 euros par an) et chacune dépend des versions de WordPress et de WooCommerce. Le sur mesure se justifie pour des règles de prix, de livraison ou de commande propres à votre métier.'],
        ['q' => 'Combien de temps faut-il pour mettre un site en ligne ?', 'r' => 'À titre indicatif, une à trois semaines pour un WordPress avec thème, trois à six pour un WordPress personnalisé et un à trois mois pour un site sur mesure. Ce sont des ordres de grandeur de l’auteur, à confirmer par un devis : le contenu à rédiger fait souvent le délai.'],
    ],

    'sources' => [
        ['titre' => 'W3Techs, usage de WordPress', 'url' => 'https://w3techs.com/technologies/details/cm-wordpress', 'date' => '2026-10-07'],
        ['titre' => 'WordPress.org, versions de WordPress', 'url' => 'https://wordpress.org/download/releases/', 'date' => '2026-10-07'],
        ['titre' => 'WordPress.org, prérequis techniques', 'url' => 'https://wordpress.org/about/requirements/', 'date' => '2026-10-07'],
        ['titre' => 'Patchstack, State of WordPress Security in 2026', 'url' => 'https://patchstack.com/whitepaper/state-of-wordpress-security-in-2026/', 'date' => '2026-10-07'],
        ['titre' => 'Search Engine Journal, WordPress et les Core Web Vitals (données HTTP Archive de juillet 2025)', 'url' => 'https://www.searchenginejournal.com/wordpress-versus-everyone-the-top-cms-for-core-web-vitals/555746/', 'date' => '2026-10-07'],
        ['titre' => 'web.dev, Core Web Vitals', 'url' => 'https://web.dev/articles/vitals', 'date' => '2026-10-07'],
        ['titre' => 'Google, expérience de page dans la recherche', 'url' => 'https://developers.google.com/search/docs/appearance/page-experience', 'date' => '2026-10-07'],
        ['titre' => 'Elementor, tarifs', 'url' => 'https://elementor.com/pricing/', 'date' => '2026-10-07'],
        ['titre' => 'Divi, tarifs', 'url' => 'https://www.elegantthemes.com/gallery/divi/', 'date' => '2026-10-07'],
        ['titre' => 'WP Rocket, tarifs', 'url' => 'https://wp-rocket.me/pricing/', 'date' => '2026-10-07'],
        ['titre' => 'Yoast, tarifs de Yoast SEO Premium', 'url' => 'https://yoast.com/pricing/', 'date' => '2026-10-07'],
        ['titre' => 'WooCommerce, extension Subscriptions', 'url' => 'https://woocommerce.com/products/woocommerce-subscriptions/', 'date' => '2026-10-07'],
        ['titre' => 'WooCommerce, WooPayments', 'url' => 'https://woocommerce.com/products/woocommerce-payments/', 'date' => '2026-10-07'],
        ['titre' => 'WordPress.org, extension FedaPay Gateway for WooCommerce', 'url' => 'https://wordpress.org/plugins/fedapay-woocommerce/', 'date' => '2026-10-07'],
        ['titre' => 'Hostinger, hébergement WordPress', 'url' => 'https://www.hostinger.com/wordpress-hosting', 'date' => '2026-10-07'],
        ['titre' => 'o2switch, offre d’hébergement', 'url' => 'https://www.o2switch.fr/', 'date' => '2026-10-07'],
        ['titre' => 'Secrétariat général du Gouvernement du Bénin, loi n° 2017-20 du 20 avril 2018 portant code du numérique (article 391)', 'url' => 'https://sgg.gouv.bj/doc/loi-2017-20/', 'date' => '2026-10-07'],
        ['titre' => 'PHP, versions supportées', 'url' => 'https://www.php.net/supported-versions.php', 'date' => '2026-10-07'],
        ['titre' => 'Laravel, notes de version et politique de support', 'url' => 'https://laravel.com/docs/releases', 'date' => '2026-10-07'],
    ],

    'liens' => [
        'comparatifs' => ['odoo-vs-dolibarr', 'fedapay-vs-kkiapay-vs-cinetpay', 'n8n-vs-make-vs-zapier'],
        'services'    => ['site-vitrine-professionnel', 'application-web-sur-mesure', 'refonte-migration-de-site', 'maintenance-support', 'site-e-commerce'],
    ],
];
